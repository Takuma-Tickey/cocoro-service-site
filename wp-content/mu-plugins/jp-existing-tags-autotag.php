<?php
/**
 * Plugin Name: JP Existing Tags Auto Tagger (MU) - Stable + Admin UI
 * Description: 既存タグ（post_tag）を記事本文/タイトル/抜粋から自動で付与。新タグ追加/名称変更の追い付け、定期巡回、管理画面UI。タイムアウト対策済み。
 * Version: 3.1.0
 */

if (!defined('ABSPATH')) exit;

final class JP_Existing_Tags_Auto_Tagger_Stable {

    // =========================
    // 設定（ここだけ触ればOK）
    // =========================
    private const TAXONOMY = 'post_tag';
    private const POST_TYPES = ['post'];

    private const SCAN_TITLE   = true;
    private const SCAN_CONTENT = true;
    private const SCAN_EXCERPT = true;

    /** 1文字タグは事故が多いので自動付与しない */
    private const MIN_TERM_CHARS = 2;

    /** 誤爆しやすいタグ名を除外（必要なら追加） */
    private const EXCLUDE_TERMS = [
        // '旅', '宿'
    ];

    /** 空なら全タグ対象（許可リスト運用は不要） */
    private const INCLUDE_ONLY_TERMS = [
        // '温泉','旅館'
    ];

    /** 既に何かタグが付いていても不足分は追加するなら false */
    private const SKIP_IF_HAS_ANY_TERMS = false;

    /** ★重要：タグが大量にあると落ちやすいので、通常は true 推奨（=使われているタグだけ照合） */
    private const CANDIDATE_TERMS_HIDE_EMPTY = true;

    // ---- 定期処理 ----
    private const CRON_FREQUENCY = 'hourly';  // hourly / twicedaily / daily
    private const CRON_BATCH_SIZE = 20;       // 1回あたりの最大処理件数（軽め推奨）

    private const ENABLE_NEW_TAG_QUEUE = true;
    private const ENABLE_FULL_SWEEP    = true;

    /** 1回の処理の時間上限（秒） */
    private const MAX_RUN_SECONDS_CRON   = 12;
    private const MAX_RUN_SECONDS_MANUAL = 8;

    /** タグ一覧キャッシュ（秒） */
    private const TERMS_CACHE_TTL = 300;

    /** debug.logへログ（検証時のみtrue推奨） */
    private const DEBUG_LOG = false;

    // =========================
    // 内部
    // =========================
    private const CRON_HOOK = 'jp_autotag_cron_event_v31';
    private const LOCK_KEY  = 'jp_autotag_lock_v31';
    private const PAUSE_KEY = 'jp_autotag_pause_v31';

    private const OPT_TERM_QUEUE   = 'jp_autotag_term_queue_v31';
    private const OPT_TERM_CURSOR_PREFIX = 'jp_autotag_term_last_id_v31_';

    private const OPT_SWEEP_LAST_ID = 'jp_autotag_sweep_last_id_v31';
    private const OPT_LAST_RUN      = 'jp_autotag_last_run_v31';

    private const OLD_CRON_HOOKS = [
        'jp_autotag_cron_event',
        'jp_autotag_cron_event_v1',
        'jp_autotag_cron_event_v2',
        'jp_autotag_cron_event_v3',
    ];

    private static bool $in_save_hook = false;
    private static ?int $max_seconds_override = null;

    public static function boot(): void {
        add_action('save_post', [__CLASS__, 'on_save_post'], 20, 3);

        add_action('init', [__CLASS__, 'ensure_cron_scheduled']);
        add_action(self::CRON_HOOK, [__CLASS__, 'cron_runner']);

        if (self::ENABLE_NEW_TAG_QUEUE) {
            add_action('created_term', [__CLASS__, 'on_term_changed'], 10, 3);
            add_action('edited_term',  [__CLASS__, 'on_term_changed'], 10, 3);
        }

        // 管理画面UI
        add_action('admin_menu', [__CLASS__, 'admin_menu']);
        add_action('admin_post_jp_autotag_admin_action', [__CLASS__, 'handle_admin_action']);
    }

    // -------------------------
    // 記事保存時：その記事だけ即時反映（軽い）
    // -------------------------
    public static function on_save_post(int $post_id, \WP_Post $post, bool $update): void {
        if (self::$in_save_hook) return;

        if (wp_is_post_revision($post_id) || wp_is_post_autosave($post_id)) return;
        if (!in_array($post->post_type, self::POST_TYPES, true)) return;
        if (in_array($post->post_status, ['auto-draft', 'trash'], true)) return;

        self::$in_save_hook = true;
        try {
            self::apply_all_terms_to_post($post_id);
        } finally {
            self::$in_save_hook = false;
        }
    }

    // -------------------------
    // タグ作成/編集：そのタグを「追い付けキュー」に入れる
    // -------------------------
    public static function on_term_changed(int $term_id, int $tt_id, string $taxonomy): void {
        if ($taxonomy !== self::TAXONOMY) return;
        self::enqueue_term($term_id);
        self::flush_terms_cache();
    }

    private static function enqueue_term(int $term_id): void {
        $queue = get_option(self::OPT_TERM_QUEUE, []);
        if (!is_array($queue)) $queue = [];
        if (!in_array($term_id, $queue, true)) {
            $queue[] = (int)$term_id;
            update_option(self::OPT_TERM_QUEUE, $queue, false);
            self::log("enqueue term_id={$term_id} queue_size=" . count($queue));
        }
    }

    // -------------------------
    // Cron登録（＆古いhook掃除）
    // -------------------------
    public static function ensure_cron_scheduled(): void {
        foreach (self::OLD_CRON_HOOKS as $old) {
            wp_clear_scheduled_hook($old);
        }
        if (wp_next_scheduled(self::CRON_HOOK)) return;
        wp_schedule_event(time() + 60, self::CRON_FREQUENCY, self::CRON_HOOK);
    }

    // -------------------------
    // 実行本体（時間上限あり）
    // -------------------------
    public static function cron_runner(): void {
        if (get_transient(self::PAUSE_KEY)) return;

        if (get_transient(self::LOCK_KEY)) return;
        set_transient(self::LOCK_KEY, 1, 15 * MINUTE_IN_SECONDS);

        update_option(self::OPT_LAST_RUN, time(), false);

        $max_seconds = self::$max_seconds_override ?? self::MAX_RUN_SECONDS_CRON;

        // PHPの最大実行時間に合わせてさらに短くする（30秒落ち対策）
        $php_limit = (int) @ini_get('max_execution_time');
        if ($php_limit > 0) {
            $max_seconds = min($max_seconds, max(1, $php_limit - 3));
        }

        $deadline = microtime(true) + max(1, $max_seconds);

        try {
            if (self::ENABLE_NEW_TAG_QUEUE && microtime(true) < $deadline) {
                self::process_term_queue(self::CRON_BATCH_SIZE, $deadline);
            }
            if (self::ENABLE_FULL_SWEEP && microtime(true) < $deadline) {
                self::process_full_sweep(self::CRON_BATCH_SIZE, $deadline);
            }
        } finally {
            delete_transient(self::LOCK_KEY);
            self::$max_seconds_override = null;
        }
    }

    // =========================
    // キュー処理：新タグを過去記事へ追い付け（ID降順で軽く回す）
    // =========================
    private static function process_term_queue(int $batch_size, float $deadline): int {
        $queue = get_option(self::OPT_TERM_QUEUE, []);
        if (!is_array($queue) || empty($queue)) return 0;

        $term_id = (int)$queue[0];
        $term = get_term($term_id, self::TAXONOMY);

        if (!$term || is_wp_error($term)) {
            array_shift($queue);
            update_option(self::OPT_TERM_QUEUE, $queue, false);
            return 0;
        }

        $term_name = trim((string)$term->name);
        if (!self::is_term_eligible($term_name)) {
            array_shift($queue);
            update_option(self::OPT_TERM_QUEUE, $queue, false);
            return 0;
        }

        $cursor_key = self::OPT_TERM_CURSOR_PREFIX . $term_id;
        $last_id = (int)get_option($cursor_key, 0);

        $ids = self::fetch_post_ids_desc($batch_size, $last_id);
        if (empty($ids)) {
            delete_option($cursor_key);
            array_shift($queue);
            update_option(self::OPT_TERM_QUEUE, $queue, false);
            self::log("term_id={$term_id} done; queue_left=" . count($queue));
            return 0;
        }

        $processed = 0;
        foreach ($ids as $pid) {
            if (microtime(true) >= $deadline) break;
            self::apply_single_term_to_post((int)$pid, $term_id, $term_name);
            $processed++;
        }

        $min_id = min($ids);
        update_option($cursor_key, $min_id, false);

        return $processed;
    }

    private static function apply_single_term_to_post(int $post_id, int $term_id, string $term_name): void {
        $post = get_post($post_id);
        if (!$post) return;
        if (!in_array($post->post_type, self::POST_TYPES, true)) return;
        if (in_array($post->post_status, ['auto-draft', 'trash'], true)) return;

        $existing_ids = wp_get_post_terms($post_id, self::TAXONOMY, ['fields' => 'ids']);
        if (!is_array($existing_ids)) $existing_ids = [];

        if (self::SKIP_IF_HAS_ANY_TERMS && count($existing_ids) > 0) return;
        if (in_array($term_id, $existing_ids, true)) return;

        $text = self::build_scan_text($post_id);
        if ($text === '') return;

        if (!self::term_matches($text, $term_name)) return;

        wp_set_post_terms($post_id, [$term_id], self::TAXONOMY, true);
    }

    // =========================
    // 全体巡回：取りこぼし保険（ID降順で軽く回す）
    // =========================
    private static function process_full_sweep(int $batch_size, float $deadline): int {
        $last_id = (int)get_option(self::OPT_SWEEP_LAST_ID, 0);

        $ids = self::fetch_post_ids_desc($batch_size, $last_id);
        if (empty($ids)) {
            update_option(self::OPT_SWEEP_LAST_ID, 0, false);
            self::log("full_sweep done -> reset");
            return 0;
        }

        $processed = 0;
        foreach ($ids as $pid) {
            if (microtime(true) >= $deadline) break;
            self::apply_all_terms_to_post((int)$pid);
            $processed++;
        }

        $min_id = min($ids);
        update_option(self::OPT_SWEEP_LAST_ID, $min_id, false);

        return $processed;
    }

    private static function fetch_post_ids_desc(int $limit, int $last_id): array {
        global $wpdb;

        $post_types = self::POST_TYPES;
        $statuses = ['publish','future','draft','pending','private'];

        $pt_placeholders = implode(',', array_fill(0, count($post_types), '%s'));
        $st_placeholders = implode(',', array_fill(0, count($statuses), '%s'));

        if ($last_id > 0) {
            $sql = "
                SELECT ID
                FROM {$wpdb->posts}
                WHERE post_type IN ($pt_placeholders)
                  AND post_status IN ($st_placeholders)
                  AND ID < %d
                ORDER BY ID DESC
                LIMIT %d
            ";
            $params = array_merge($post_types, $statuses, [$last_id, $limit]);
        } else {
            $sql = "
                SELECT ID
                FROM {$wpdb->posts}
                WHERE post_type IN ($pt_placeholders)
                  AND post_status IN ($st_placeholders)
                ORDER BY ID DESC
                LIMIT %d
            ";
            $params = array_merge($post_types, $statuses, [$limit]);
        }

        $prepared = $wpdb->prepare($sql, ...$params);
        $ids = $wpdb->get_col($prepared);

        return empty($ids) ? [] : array_map('intval', $ids);
    }

    // =========================
    // コア：既存タグを当てる
    // =========================
    private static function apply_all_terms_to_post(int $post_id): void {
        $existing_ids = wp_get_post_terms($post_id, self::TAXONOMY, ['fields' => 'ids']);
        if (!is_array($existing_ids)) $existing_ids = [];

        if (self::SKIP_IF_HAS_ANY_TERMS && count($existing_ids) > 0) return;

        $text = self::build_scan_text($post_id);
        if ($text === '') return;

        $terms = self::get_candidate_terms();
        if (empty($terms)) return;

        $existing_map = array_fill_keys($existing_ids, true);
        $add_ids = [];

        foreach ($terms as $term_id => $term_name) {
            if (isset($existing_map[$term_id])) continue;

            $term_name = trim((string)$term_name);
            if (!self::is_term_eligible($term_name)) continue;

            if (self::term_matches($text, $term_name)) {
                $add_ids[] = (int)$term_id;
            }
        }

        if (!empty($add_ids)) {
            wp_set_post_terms($post_id, $add_ids, self::TAXONOMY, true);
        }
    }

    // =========================
    // 一致判定
    // - 英字タグ：後ろが日本語でもOK（DX推進 / AI導入）
    // - 後ろが英数字連結はNG（DX2025は付かない）
    // =========================
    private static function term_matches(string $text, string $term_name): bool {
        $q = preg_quote($term_name, '/');

        if (self::is_ascii_alnum($term_name)) {
            $jp = '[\p{Han}\p{Hiragana}\p{Katakana}]';
            $pattern = '/(?:^|[^A-Za-z0-9])' . $q . '(?=(?:$|[^A-Za-z0-9]|' . $jp . '))/iu';
            return preg_match($pattern, $text) === 1;
        }

        $particles = '(?:の|に|で|へ|を|が|は|も|と|や|から|まで|等|など|にて)';
        $pattern = '/(?:^|[^\p{L}\p{N}])' . $q . '(?:$|[^\p{L}\p{N}]|' . $particles . ')/u';
        return preg_match($pattern, $text) === 1;
    }

    private static function is_ascii_alnum(string $s): bool {
        return (bool)preg_match('/^[A-Za-z0-9]+$/', $s);
    }

    private static function is_term_eligible(string $term_name): bool {
        if ($term_name === '') return false;

        if (mb_strlen($term_name, 'UTF-8') < self::MIN_TERM_CHARS) return false;

        if (!empty(self::EXCLUDE_TERMS) && in_array($term_name, self::EXCLUDE_TERMS, true)) return false;
        if (!empty(self::INCLUDE_ONLY_TERMS) && !in_array($term_name, self::INCLUDE_ONLY_TERMS, true)) return false;

        return true;
    }

    private static function build_scan_text(int $post_id): string {
        $post = get_post($post_id);
        if (!$post) return '';

        $parts = [];
        if (self::SCAN_TITLE)   $parts[] = (string)$post->post_title;
        if (self::SCAN_CONTENT) $parts[] = wp_strip_all_tags((string)$post->post_content);
        if (self::SCAN_EXCERPT) $parts[] = (string)$post->post_excerpt;

        $text = implode("\n", $parts);
        $text = html_entity_decode($text, ENT_QUOTES | ENT_HTML5, 'UTF-8');
        $text = preg_replace('/[ \t]+/u', ' ', $text);
        $text = preg_replace('/\R+/u', "\n", $text);

        return trim($text);
    }

    private static function get_candidate_terms(): array {
        $cache_key = 'jp_autotag_terms_cache_v31';
        $cached = get_transient($cache_key);
        if (is_array($cached)) return $cached;

        if (!empty(self::INCLUDE_ONLY_TERMS)) {
            $include = [];
            foreach (self::INCLUDE_ONLY_TERMS as $name) {
                $t = get_term_by('name', $name, self::TAXONOMY);
                if ($t && !is_wp_error($t)) $include[(int)$t->term_id] = (string)$t->name;
            }
            uasort($include, fn($a, $b) => mb_strlen($b, 'UTF-8') <=> mb_strlen($a, 'UTF-8'));
            set_transient($cache_key, $include, self::TERMS_CACHE_TTL);
            return $include;
        }

        $terms = get_terms([
            'taxonomy'   => self::TAXONOMY,
            'hide_empty' => self::CANDIDATE_TERMS_HIDE_EMPTY,
        ]);

        if (is_wp_error($terms) || empty($terms)) {
            set_transient($cache_key, [], self::TERMS_CACHE_TTL);
            return [];
        }

        $map = [];
        foreach ($terms as $t) $map[(int)$t->term_id] = (string)$t->name;

        uasort($map, fn($a, $b) => mb_strlen($b, 'UTF-8') <=> mb_strlen($a, 'UTF-8'));

        set_transient($cache_key, $map, self::TERMS_CACHE_TTL);
        return $map;
    }

    private static function flush_terms_cache(): void {
        delete_transient('jp_autotag_terms_cache_v31');
    }

    private static function log(string $msg): void {
        if (!self::DEBUG_LOG) return;
        error_log('[JP_AUTOTAG] ' . $msg);
    }

    // =========================
    // 管理画面UI（ツール → Auto Tagger）
    // =========================
    public static function admin_menu(): void {
        add_management_page('Auto Tagger','Auto Tagger','manage_options','jp-autotag',[__CLASS__,'render_admin_page']);
    }

    public static function handle_admin_action(): void {
        if (!current_user_can('manage_options')) wp_die('forbidden');
        check_admin_referer('jp_autotag_admin');

        $task = isset($_POST['task']) ? (string)$_POST['task'] : '';
        $msg = 'ok';

        switch ($task) {
            case 'run_now':
                delete_transient(self::LOCK_KEY);
                self::$max_seconds_override = self::MAX_RUN_SECONDS_MANUAL;
                self::cron_runner();
                $msg = 'ran';
                break;

            case 'clear_lock':
                delete_transient(self::LOCK_KEY);
                $msg = 'lock_cleared';
                break;

            case 'reset_sweep':
                // ★事故防止：リセット直後のアクセスでCronが動かないよう、短時間一時停止
                set_transient(self::PAUSE_KEY, 1, 2 * MINUTE_IN_SECONDS);
                update_option(self::OPT_SWEEP_LAST_ID, 0, false);
                $msg = 'sweep_reset (paused 2min)';
                break;

            case 'clear_queue':
                $queue = get_option(self::OPT_TERM_QUEUE, []);
                if (!is_array($queue)) $queue = [];
                foreach ($queue as $tid) {
                    delete_option(self::OPT_TERM_CURSOR_PREFIX . (int)$tid);
                }
                update_option(self::OPT_TERM_QUEUE, [], false);
                $msg = 'queue_cleared';
                break;

            case 'flush_cache':
                self::flush_terms_cache();
                $msg = 'cache_flushed';
                break;

            case 'resume':
                delete_transient(self::PAUSE_KEY);
                $msg = 'resumed';
                break;

            default:
                $msg = 'unknown';
                break;
        }

        wp_safe_redirect(add_query_arg(['page' => 'jp-autotag', 'msg' => $msg], admin_url('tools.php')));
        exit;
    }

    public static function render_admin_page(): void {
        if (!current_user_can('manage_options')) return;

        $next   = wp_next_scheduled(self::CRON_HOOK);
        $last   = (int)get_option(self::OPT_LAST_RUN, 0);
        $locked = (bool)get_transient(self::LOCK_KEY);
        $paused = (bool)get_transient(self::PAUSE_KEY);

        $queue = get_option(self::OPT_TERM_QUEUE, []);
        if (!is_array($queue)) $queue = [];

        $sweep_last_id = (int)get_option(self::OPT_SWEEP_LAST_ID, 0);

        $msg = isset($_GET['msg']) ? sanitize_text_field((string)$_GET['msg']) : '';
        if ($msg !== '') {
            echo '<div class="notice notice-success is-dismissible"><p>' . esc_html($msg) . '</p></div>';
        }

        echo '<div class="wrap">';
        echo '<h1>Auto Tagger</h1>';

        echo '<h2>状態</h2>';
        echo '<table class="widefat striped" style="max-width:980px"><tbody>';
        echo '<tr><th style="width:240px">次回予定</th><td>' . ($next ? esc_html(date_i18n('Y-m-d H:i:s', $next)) : '未登録') . '</td></tr>';
        echo '<tr><th>最終実行</th><td>' . ($last ? esc_html(date_i18n('Y-m-d H:i:s', $last)) : '未実行') . '</td></tr>';
        echo '<tr><th>一時停止</th><td>' . ($paused ? 'ON（2分程度）' : 'OFF') . '</td></tr>';
        echo '<tr><th>ロック</th><td>' . ($locked ? 'ON（短時間は実行をスキップ）' : 'OFF') . '</td></tr>';
        echo '<tr><th>キュー件数（新タグ追い付け）</th><td>' . esc_html((string)count($queue)) . '</td></tr>';
        echo '<tr><th>全体巡回の進み（最後に見た投稿ID）</th><td>' . esc_html((string)$sweep_last_id) . '</td></tr>';
        echo '<tr><th>1回の最大処理件数</th><td>' . esc_html((string)self::CRON_BATCH_SIZE) . '件</td></tr>';
        echo '</tbody></table>';

        echo '<h2 style="margin-top:24px">操作</h2>';
        $action_url = esc_url(admin_url('admin-post.php'));
        $nonce = wp_create_nonce('jp_autotag_admin');

        echo '<div style="display:flex;flex-wrap:wrap;gap:10px;align-items:center;max-width:980px">';
        self::btn($action_url,$nonce,'run_now','今すぐ実行','primary');
        self::btn($action_url,$nonce,'clear_lock','ロック解除','secondary');
        self::btn($action_url,$nonce,'reset_sweep','全体巡回を最初から','secondary');
        self::btn($action_url,$nonce,'clear_queue','キュー削除','secondary');
        self::btn($action_url,$nonce,'flush_cache','タグ一覧キャッシュ削除','secondary');
        if ($paused) self::btn($action_url,$nonce,'resume','一時停止を解除','secondary');
        echo '</div>';

        echo '<h3 style="margin-top:18px">各操作の説明</h3>';
        echo '<div style="max-width:980px;background:#fff;border:1px solid #c3c4c7;border-radius:6px;padding:12px 14px">';
        echo '<ul style="margin:0;list-style:disc;padding-left:22px;line-height:1.8">';
        echo '<li><strong>今すぐ実行</strong>：その場で処理を少し進める（長時間はやらない）。</li>';
        echo '<li><strong>ロック解除</strong>：直前の実行直後の保護を解除（反応が薄い時だけ）。</li>';
        echo '<li><strong>全体巡回を最初から</strong>：全記事チェックの進みをリセット。押した直後は事故防止で2分停止。</li>';
        echo '<li><strong>キュー削除</strong>：新タグ追い付けのリストを空にする。</li>';
        echo '<li><strong>タグ一覧キャッシュ削除</strong>：タグ一覧を読み直す（タグ追加/変更直後に有効）。</li>';
        echo '</ul></div>';

        echo '</div>';
// ===== 仕様説明（UI表示）ここから =====
echo '<h2 style="margin-top:24px">このMUプラグインの仕様</h2>';

echo '<div style="max-width:980px;background:#fff;border:1px solid #c3c4c7;border-radius:6px;padding:14px 16px">';

echo '<details open style="margin-bottom:10px">';
echo '<summary style="cursor:pointer;font-weight:600">何をするか</summary>';
echo '<ul style="margin:10px 0 0;list-style:disc;padding-left:22px;line-height:1.8">';
echo '<li>記事の文章に「登録済みのタグ名」が書かれていたら、そのタグを記事に付け足す</li>';
echo '<li>既にタグが付いている記事でも、不足分があれば追加する（置き換えではない）</li>';
echo '<li>対象は投稿タイプ：' . esc_html(implode(', ', self::POST_TYPES)) . '</li>';
echo '<li>判定対象：' . esc_html((self::SCAN_TITLE ? 'タイトル ' : '') . (self::SCAN_CONTENT ? '本文 ' : '') . (self::SCAN_EXCERPT ? '抜粋' : '')) . '</li>';
echo '</ul>';
echo '</details>';

echo '<details style="margin-bottom:10px">';
echo '<summary style="cursor:pointer;font-weight:600">いつ動くか</summary>';
echo '<ul style="margin:10px 0 0;list-style:disc;padding-left:22px;line-height:1.8">';
echo '<li>記事を更新/公開したタイミング：その記事だけチェックして必要ならタグ付けする</li>';
echo '<li>定期実行：' . esc_html(self::CRON_FREQUENCY) . '（例：hourlyなら1時間に1回）で少しずつ進める</li>';
echo '<li>1回の最大処理件数：' . esc_html((string)self::CRON_BATCH_SIZE) . '件</li>';
echo '<li>時間上限：定期は最大' . esc_html((string)self::MAX_RUN_SECONDS_CRON) . '秒、手動は最大' . esc_html((string)self::MAX_RUN_SECONDS_MANUAL) . '秒（長時間処理でサイトが落ちるのを防ぐ）</li>';
echo '</ul>';
echo '</details>';

echo '<details style="margin-bottom:10px">';
echo '<summary style="cursor:pointer;font-weight:600">新しいタグを追加したとき</summary>';
echo '<ul style="margin:10px 0 0;list-style:disc;padding-left:22px;line-height:1.8">';
echo '<li>タグを追加/名前変更すると、そのタグは自動で「追い付け対象」として登録される</li>';
echo '<li>定期実行で少しずつ過去記事もチェックして、該当記事があればタグが付く</li>';
echo '</ul>';
echo '</details>';

echo '<details style="margin-bottom:10px">';
echo '<summary style="cursor:pointer;font-weight:600">一致ルール（どうやって「書かれている」を判定するか）</summary>';
echo '<ul style="margin:10px 0 0;list-style:disc;padding-left:22px;line-height:1.8">';
echo '<li>基本は「タグ名が文章の中にそのまま出てくる」場合に付ける（誤爆を減らすための境界判定あり）</li>';
echo '<li>英字タグは例外で、後ろが日本語でもOK（例：DX推進、AI導入）。ただし英数字が連結する形（例：DX2025）は付けない</li>';
echo '<li>' . esc_html((string)self::MIN_TERM_CHARS) . '文字未満のタグは自動付与しない（短い語の誤爆防止）</li>';
echo '</ul>';
echo '</details>';

echo '<details>';
echo '<summary style="cursor:pointer;font-weight:600">注意点（落ちにくさ優先のため）</summary>';
echo '<ul style="margin:10px 0 0;list-style:disc;padding-left:22px;line-height:1.8">';
echo '<li>全体巡回で照合するタグは、原則「既に使われているタグ」だけ（サイトが落ちにくくなる）</li>';
echo '<li>「作っただけで一度も使っていない昔のタグ」も過去記事に付けたい場合は、そのタグの編集画面で何も変えずに更新して追い付け対象に入れる</li>';
echo '<li>同じ目的の自動タグ付け機能（他プラグイン等）と併用すると結果が読みにくいので、基本はどちらか片方にする</li>';
echo '</ul>';
echo '</details>';

echo '</div>';
// ===== 仕様説明（UI表示）ここまで =====

    }

    private static function btn(string $action_url, string $nonce, string $task, string $label, string $class): void {
        echo '<form method="post" action="' . $action_url . '" style="margin:0">';
        echo '<input type="hidden" name="action" value="jp_autotag_admin_action">';
        echo '<input type="hidden" name="task" value="' . esc_attr($task) . '">';
        echo '<input type="hidden" name="_wpnonce" value="' . esc_attr($nonce) . '">';
        submit_button($label, $class, 'submit', false);
        echo '</form>';
    }
}

JP_Existing_Tags_Auto_Tagger_Stable::boot();