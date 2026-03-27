<?php

add_action('wp_enqueue_scripts', 'jinr_theme_enqueue_styles');
function jinr_theme_enqueue_styles()
{
	wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
}

add_action( 'template_redirect', 'restrict_author_archives' );
function restrict_author_archives() {
    // 表示を許可するユーザー名（スラッグ）
    $allowed_author = 'cocoro-editor';

    if ( is_author() && get_query_var( 'author_name' ) !== $allowed_author ) {
        global $wp_query;
        $wp_query->set_404();
        status_header( 404 );
        nocache_headers();
        include( get_query_template( '404' ) );
        exit;
    }
}

// 会社名・担当者名・電話番号 必須チェック
function validate_required_text_fields( $result, $tag ) {
  $name = $tag->name;

  if ( $name === 'your-company' && empty($_POST[$name]) ) {
    $result->invalidate( $tag, '貴社名を入力してください。' );
  }

  if ( $name === 'your-name' && empty($_POST[$name]) ) {
    $result->invalidate( $tag, 'ご担当者名を入力してください。' );
  }

  if ( $name === 'your-tel' && empty($_POST[$name]) ) {
    $result->invalidate( $tag, '電話番号を入力してください。' );
  }

  return $result;
}
add_filter( 'wpcf7_validate_text', 'validate_required_text_fields', 20, 2 );

// メールアドレス 必須チェック
function validate_required_email_field( $result, $tag ) {
  $name = $tag->name;

  if ( $name === 'your-email' && empty($_POST[$name]) ) {
    $result->invalidate( $tag, '有効なメールアドレスを入力してください。' );
  }

  return $result;
}
add_filter( 'wpcf7_validate_email', 'validate_required_email_field', 20, 2 );

/* ① デフォルト SWV ルールを解除（優先度 10）*/
remove_action( 'wpcf7_swv_create_schema', 'wpcf7_swv_add_text_rules',      10 );
remove_action( 'wpcf7_swv_create_schema', 'wpcf7_swv_add_email_rules',     10 );
remove_action( 'wpcf7_swv_create_schema', 'wpcf7_swv_add_tel_rules',       10 );
remove_action( 'wpcf7_swv_create_schema', 'wpcf7_swv_add_checkbox_rules',  10 );

/* ② 独自スキーマを追加（必ず accepted_args=2 を指定）*/
add_action( 'wpcf7_swv_create_schema', 'cocoro_add_custom_rules', 10, 2 );
function cocoro_add_custom_rules( $schema, $contact_form ) {

    foreach ( $contact_form->scan_form_tags() as $tag ) {
        $name = $tag->name;
        $type = $tag->basetype;

        /* ─ 必須チェック ─ */
        if ( $tag->is_required() ) {
            $schema->add_rule( wpcf7_swv_create_rule( 'required', array(
                'field' => $name,
                'error' => match ( $name ) {
                    'your-company'      => '貴社名を入力してください。',
                    'your-name'         => 'ご担当者名を入力してください。',
                    'your-email'        => 'メールアドレスを入力してください。',
                    'your-tel'          => '電話番号を入力してください。',
                    'your-inquiry-type' => 'お問い合わせ種別を選択してください。',
                    default             => wpcf7_get_message( 'invalid_required' ),
                },
            ) ) );
        }

        /* ─ 形式チェック ─ */
        if ( $type === 'email' ) {
            $schema->add_rule( wpcf7_swv_create_rule( 'email', array(
                'field' => $name,
                'error' => '有効なメールアドレスを入力してください。',
            ) ) );
        }
        if ( $type === 'tel' ) {
            $schema->add_rule( wpcf7_swv_create_rule( 'tel', array(
                'field' => $name,
                'error' => '電話番号の形式が正しくありません。',
            ) ) );
        }

        /* ─ ラジオ／exclusive チェックは 1 件まで ─ */
        if ( $type === 'checkbox' && $tag->has_option( 'exclusive' ) ) {
            $schema->add_rule( wpcf7_swv_create_rule( 'maxitems', array(
                'field'     => $name,
                'threshold' => 1,
                'error'     => 'ひとつだけ選択してください。',
            ) ) );
        }
    }
    return $schema;
}

// タグ一覧
function show_tag_list_shortcode() {
    $tags = get_tags(array(
        'orderby' => 'count',
        'order' => 'DESC',
        'hide_empty' => true
    ));

    if (empty($tags)) return '<p>タグが見つかりませんでした。</p>';

    $html = '<div class="tag-list">';
    foreach ($tags as $tag) {
        $html .= '<a class="tag-item" href="' . esc_url(get_tag_link($tag->term_id)) . '">#' . esc_html($tag->name) . ' <span>(' . $tag->count . ')</span></a>';
    }
    $html .= '</div>';
    return $html;
}
add_shortcode('tag_list', 'show_tag_list_shortcode');

function include_cases_in_tag_archive( $query ) {
	if ( is_tag() && $query->is_main_query() && !is_admin() ) {
		$query->set( 'post_type', array( 'post', 'cases' ) );
	}
}
add_action( 'pre_get_posts', 'include_cases_in_tag_archive' );

// カテゴリ一覧
function include_cases_in_category_archive( $query ) {
    if ( is_category() && $query->is_main_query() && !is_admin() ) {
        $query->set( 'post_type', array( 'post', 'cases' ) ); // ←CPT 名
    }
}
add_action( 'pre_get_posts', 'include_cases_in_category_archive' );

// Public Post Previewの有効期限（リンク切れ期限）の変更
// 60 60 24 * 30の最後の「30」で有効期限が30日間になる。
add_filter( 'ppp_nonce_life', 'my_nonce_life' );
function my_nonce_life() {
    return 60 * 60 * 24 * 30;
}

/* Download Monitor × Contact Form 7 連携 */
add_filter( 'wpcf7_special_mail_tags', function ( $out, $name, $html ) {

  if ( $name !== 'download_link' ) return $out;   // メールに書いたタグ名

  /* フォーム ID=99 だけを対象 */
  $form = WPCF7_ContactForm::get_current();
  if ( ! $form || $form->id() !== 99 ) return $out;

  /* 送信元投稿 ID を取得（referer 逆引き）*/
  $post_id = url_to_postid( wp_get_referer() );
  if ( ! $post_id || get_post_type( $post_id ) !== 'resources' ) return $out;

  /* ACF フィールド download_id → Download Monitor URLへ変換 */
  $dl_id  = get_field( 'download_id', $post_id );
  if ( ! $dl_id ) return $out;

  return esc_url_raw( home_url( '/download/' . intval( $dl_id ) . '/' ) );

}, 10, 3 );

/* 特別メールタグ で投稿タイトル（＝資料タイトル）を自動取得 */
add_filter( 'wpcf7_special_mail_tags', fn($o,$n)=>$n==='post_title'?get_the_title(url_to_postid(wp_get_referer())):$o,10,2);

function add_target_blank_to_external_links($content) {
  $site_url = parse_url(home_url(), PHP_URL_HOST);
  return preg_replace_callback(
    '/<a\s[^>]*href=["\']([^"\']+)["\'][^>]*>/i',
    function ($matches) use ($site_url) {
      $link_host = parse_url($matches[1], PHP_URL_HOST);
      if ($link_host && $link_host !== $site_url) {
        // 既に target 属性があるかチェック
        if (strpos($matches[0], 'target=') === false) {
          return str_replace('<a', '<a target="_blank" rel="noopener noreferrer"', $matches[0]);
        }
      }
      return $matches[0];
    },
    $content
  );
}
add_filter('the_content', 'add_target_blank_to_external_links');

// ① Slack Incoming Webhook URL（ここに貼る）
define('COCORO_SLACK_WEBHOOK_URL', 'https://hooks.slack.com/services/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');

/*公開時にSlack通知（初回publishのみ）*/
add_action('transition_post_status', function($new_status, $old_status, $post) {

  // 投稿タイプを必要に応じて変更（'post' / 'page' / カスタム投稿タイプ）
  if ($post->post_type !== 'post') return;

  // 初回の publish のみ
  if ($new_status !== 'publish' || $old_status === 'publish') return;

  // リビジョンは除外
  if (wp_is_post_revision($post->ID)) return;

  // 二重送信防止（念のため）
  if (get_post_meta($post->ID, '_slack_notified_on_publish', true)) return;

  $title = get_the_title($post->ID);
  $url   = get_permalink($post->ID);
  $author = get_the_author_meta('display_name', $post->post_author);

  $text = "🆕 *記事が公開されました*\n"
        . "• *タイトル*: {$title}\n"
        . "• *URL*: {$url}\n"
        . "• *公開日時*: " . get_date_from_gmt($post->post_date_gmt, 'Y-m-d H:i');

  $payload = json_encode([
    'text' => $text,
    // 'text'だけで十分。凝るならblocksも可
  ], JSON_UNESCAPED_UNICODE);

  $res = wp_remote_post(COCORO_SLACK_WEBHOOK_URL, [
    'headers' => ['Content-Type' => 'application/json; charset=utf-8'],
    'body'    => $payload,
    'timeout' => 5,
  ]);

  if (!is_wp_error($res) && wp_remote_retrieve_response_code($res) === 200) {
    update_post_meta($post->ID, '_slack_notified_on_publish', 1);
  } else {
    // 失敗時ログ（必要なら）
    error_log('[Slack Notify] Failed: ' . print_r($res, true));
  }

}, 10, 3);

/**
 * news_list: JINRのpostlist風マークアップでCPT(news)を出力
 * 使い方: [news_list post_num="5" more_link="/news/" more_text="もっと見る"]
 */
function cocoro_get_first_term_name_for_posttype( $post_id, $post_type ) {
	$taxes = get_object_taxonomies( $post_type, 'objects' );
	if ( empty( $taxes ) ) return '';

	// それっぽい順に探す（環境により taxonomy 名が違うため）
	$try = array();

	// まずは "category" があれば優先
	if ( isset( $taxes['category'] ) ) $try[] = 'category';

	// 次に、public なタクソノミを全部（post_formatは除外）
	foreach ( $taxes as $tax => $obj ) {
		if ( $tax === 'post_format' ) continue;
		if ( $obj->public ) $try[] = $tax;
	}
	$try = array_values( array_unique( $try ) );

	foreach ( $try as $tax ) {
		$terms = get_the_terms( $post_id, $tax );
		if ( ! empty( $terms ) && ! is_wp_error( $terms ) ) {
			return $terms[0]->name;
		}
	}
	return '';
}

add_filter('register_post_type_args', function($args, $post_type) {
  if ($post_type === 'news') {
    $args['public'] = true;
    $args['publicly_queryable'] = true;
    $args['has_archive'] = 'news';
    $args['rewrite'] = array(
      'slug' => 'news',
      'with_front' => false,
    );
  }
  return $args;
}, 10, 2);

function shortcode_news_list($atts) {
  $atts = shortcode_atts(
    array(
      'postnum'    => 3, // 表示件数
    ),
    $atts,
    'news_list'
  );

  $postnum = max(1, intval($atts['postnum']));

  $q = new WP_Query(array(
    'post_type'           => 'news',
    'post_status'         => 'publish',
    'posts_per_page'      => $postnum,
    'ignore_sticky_posts' => true,
    'no_found_rows'       => true,
  ));

  if (!$q->have_posts()) {
    return '';
  }

  ob_start();
  ?>
<section class="b--jinr-block b--jinr-postlist d--postlist-type-new d--postlist-newstext d--postlist-newstext-sp d--postlist-column1 d--postlist-column1-sp">
  <?php while ($q->have_posts()) : $q->the_post(); ?>
    <article class="o--postlist-item" data-id="<?php the_ID(); ?>">
      <a class="c--post-link" href="<?php the_permalink(); ?>">

        <?php if (has_post_thumbnail()) : ?>
          <figure class="c--post-image">
            <?php the_post_thumbnail('medium', array('class' => 'a--post-img-src')); ?>
          </figure>
        <?php endif; ?>

        <div class="c--post-contents">
          <div class="a--post-title d--bold"><?php echo esc_html(get_the_title()); ?></div>

          <div class="c--post-meta">
            <div class="a--post-date"><?php echo esc_html(get_the_date('Y.m.d')); ?></div>
          </div>

        </div>
      </a>
    </article>
  <?php endwhile; ?>
</section>
  <?php
  wp_reset_postdata();

  return ob_get_clean();
}
add_shortcode('news_list', 'shortcode_news_list');

//theme-style-footer だけ非ブロック化
add_filter('style_loader_tag', function($html, $handle, $href, $media){
  $defer = [
    'theme-style-footer', // jinr/style-footer.css
    // ここに後で追加していく（例：rtoc_style, pgc_sgb_lightbox など）
  ];

  if (!in_array($handle, $defer, true)) return $html;

  $href = esc_url($href);
  return "<link rel='preload' as='style' href='{$href}'>\n"
       . "<link rel='stylesheet' href='{$href}' media='print' onload=\"this.media='all'\">\n"
       . "<noscript><link rel='stylesheet' href='{$href}'></noscript>\n";
}, 10, 4);
