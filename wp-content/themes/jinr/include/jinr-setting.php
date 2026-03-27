<?php
add_action('admin_menu', 'jinr_setting_admin');

function jinr_setting_admin()
{
	add_menu_page('JINR設定', 'JINR設定', 'administrator', 'jinr-setting', 'jinr_setting', '', 24);
	add_action('admin_init', 'jinr_settings_fields');
}

// add_settings_sectionの登録
function jinr_settings_section()
{
	// SEO設定のセクション登録
	add_settings_section(
		'jinr_noindex_section',
		'',
		'',
		'jinr_noindex_setting'
	);
	add_settings_section(
		'jinr_breadcrumb_section',
		'',
		'',
		'jinr_breadcrumb_setting'
	);
	add_settings_section(
		'jinr_top_section',
		'',
		'',
		'jinr_top_setting'
	);
	add_settings_section(
		'jinr_apparently_section',
		'',
		'',
		'jinr_apparently_setting'
	);
	add_settings_section(
		'jinr_separation_section',
		'',
		'',
		'jinr_separation_setting'
	);
	add_settings_section(
		'jinr_others_section',
		'',
		'',
		'jinr_others_setting'
	);

	// 広告設定
	add_settings_section(
		'jinr_ads_section',
		'',
		'',
		'jinr_ads_setting'
	);

	// 計測タグ設定
	add_settings_section(
		'jinr_google_tag_section',
		'',
		'',
		'jinr_google_tag_setting'
	);
	add_settings_section(
		'jinr_other_tag_section',
		'',
		'',
		'jinr_other_tag_setting'
	);

	// アフィリエイトタグ管理
	add_settings_section(
		'jinr_aff_tag_section',
		'',
		'',
		'jinr_aff_tag_setting'
	);
	// アフィリエイトタグ管理
	add_settings_section(
		'jinr_paidpost_section',
		'',
		'',
		'jinr_paidpost_setting'
	);
}
add_action('admin_init', 'jinr_settings_section');

// add_settings_fieldsの設定
function jinr_settings_fields()
{
	// SEO設定
	add_settings_field(
		'jinr_top_next_noindex',
		'トップページの2ページ目以降をnoindexにする',
		'jinr_top_next_noindex_callback',
		'jinr_noindex_setting',
		'jinr_noindex_section'
	);
	add_settings_field(
		'jinr_category_noindex',
		'カテゴリーの一覧ページをnoindexにする【一括設定】',
		'jinr_category_noindex_callback',
		'jinr_noindex_setting',
		'jinr_noindex_section'
	);
	add_settings_field(
		'jinr_category_id_noindex',
		'除外するカテゴリーのIDを入力',
		'jinr_category_id_noindex_callback',
		'jinr_noindex_setting',
		'jinr_noindex_section'
	);
	add_settings_field(
		'jinr_category_next_noindex',
		'カテゴリー記事一覧の２ページ目以降をnoindexにする',
		'jinr_category_next_noindex_callback',
		'jinr_noindex_setting',
		'jinr_noindex_section'
	);
	add_settings_field(
		'jinr_tag_noindex',
		'タグの一覧ページをnoindexにする【一括設定】',
		'jinr_tag_noindex_callback',
		'jinr_noindex_setting',
		'jinr_noindex_section'
	);
	add_settings_field(
		'jinr_tag_id_noindex',
		'除外するタグのIDを入力',
		'jinr_tag_id_noindex_callback',
		'jinr_noindex_setting',
		'jinr_noindex_section'
	);
	add_settings_field(
		'jinr_tag_next_noindex',
		'タグ記事一覧の２ページ目以降をnoindexにする',
		'jinr_tag_next_noindex_callback',
		'jinr_noindex_setting',
		'jinr_noindex_section'
	);

	add_settings_field(
		'jinr_date_archive_noindex',
		'年月日アーカイブをnoindexにする',
		'jinr_date_archive_noindex_callback',
		'jinr_noindex_setting',
		'jinr_noindex_section'
	);

	add_settings_field(
		'jinr_image_page_noindex',
		'画像ページをnoindexにする',
		'jinr_image_page_noindex_callback',
		'jinr_noindex_setting',
		'jinr_noindex_section'
	);

	add_settings_field(
		'jinr_author_noindex',
		'著者別アーカイブをnoindexにする',
		'jinr_author_noindex_callback',
		'jinr_noindex_setting',
		'jinr_noindex_section'
	);

	add_settings_field(
		'jinr_search_page_noindex',
		'検索結果のページをnoindexにする',
		'jinr_search_page_noindex_callback',
		'jinr_noindex_setting',
		'jinr_noindex_section'
	);

	add_settings_field(
		'jinr_breadcrumb_change_text',
		'「HOME」を書き換える',
		'jinr_breadcrumb_change_text_callback',
		'jinr_breadcrumb_setting',
		'jinr_breadcrumb_section'
	);
	add_settings_field(
		'jinr_breadcrumb_display',
		'パンくずリストを非表示にする',
		'jinr_breadcrumb_display_callback',
		'jinr_breadcrumb_setting',
		'jinr_breadcrumb_section'
	);
	add_settings_field(
		'jinr_top_meta_keyword',
		'メタキーワード',
		'jinr_top_meta_keyword_callback',
		'jinr_top_setting',
		'jinr_top_section'
	);
	add_settings_field(
		'jinr_apparently_title',
		'見かけ上のタイトル',
		'jinr_apparently_title_callback',
		'jinr_apparently_setting',
		'jinr_apparently_section'
	);
	add_settings_field(
		'jinr_apparently_subtitle',
		'見かけ上のサブタイトル',
		'jinr_apparently_subtitle_callback',
		'jinr_apparently_setting',
		'jinr_apparently_section'
	);
	add_settings_field(
		'jinr_separation_title',
		'タイトルの区切り',
		'jinr_separation_title_callback',
		'jinr_apparently_setting',
		'jinr_apparently_section'
	);
	add_settings_field(
		'jinr_title_customize',
		'titleタグにサイト名を含ませない',
		'jinr_title_customize_callback',
		'jinr_apparently_setting',
		'jinr_apparently_section'
	);
	add_settings_field(
		'jinr_commentrss_display',
		'コメントRSSの出力を停止させる',
		'jinr_commentrss_display_callback',
		'jinr_others_setting',
		'jinr_others_section'
	);

	register_setting('jinr_reading', 'jinr_top_next_noindex');
	register_setting('jinr_reading', 'jinr_category_noindex');
	register_setting('jinr_reading', 'jinr_category_id_noindex');
	register_setting('jinr_reading', 'jinr_category_next_noindex');
	register_setting('jinr_reading', 'jinr_tag_noindex');
	register_setting('jinr_reading', 'jinr_tag_id_noindex');
	register_setting('jinr_reading', 'jinr_tag_next_noindex');
	register_setting('jinr_reading', 'jinr_date_archive_noindex');
	register_setting('jinr_reading', 'jinr_image_page_noindex');
	register_setting('jinr_reading', 'jinr_author_noindex');
	register_setting('jinr_reading', 'jinr_search_page_noindex');
	register_setting('jinr_reading', 'jinr_breadcrumb_change_text');
	register_setting('jinr_reading', 'jinr_breadcrumb_display');
	register_setting('jinr_reading', 'jinr_top_meta_keyword');
	register_setting('jinr_reading', 'jinr_apparently_title');
	register_setting('jinr_reading', 'jinr_apparently_subtitle');
	register_setting('jinr_reading', 'jinr_separation_title');
	register_setting('jinr_reading', 'jinr_title_customize');
	register_setting('jinr_reading', 'jinr_commentrss_display');

	// 広告設定
	// 全体設定
	add_settings_field(
		'jinr_display_category',
		'カテゴリーを選択',
		'jinr_display_category_callback',
		'jinr_ads_setting',
		'jinr_ads_section'
	);
	add_settings_field(
		'jinr_h2_sponsor_text',
		'はじめのH2前',
		'jinr_h2_sponsor_text_callback',
		'jinr_ads_setting',
		'jinr_ads_section'
	);
	add_settings_field(
		'jinr_h2_ads_code',
		'',
		'jinr_h2_ads_code_callback',
		'jinr_ads_setting',
		'jinr_ads_section'
	);
	add_settings_field(
		'jinr_h2_sp_display',
		'スマホでも表示する',
		'jinr_h2_sp_display_callback',
		'jinr_ads_setting',
		'jinr_ads_section'
	);
	add_settings_field(
		'jinr_finish_sponsor_text',
		'記事終わり',
		'jinr_finish_sponsor_text_callback',
		'jinr_ads_setting',
		'jinr_ads_section'
	);
	add_settings_field(
		'jinr_finish_ads_code_01',
		'',
		'jinr_finish_ads_code_01_callback',
		'jinr_ads_setting',
		'jinr_ads_section'
	);
	add_settings_field(
		'jinr_finish_sp_display_01',
		'',
		'jinr_finish_sp_display_01_callback',
		'jinr_ads_setting',
		'jinr_ads_section'
	);
	add_settings_field(
		'jinr_finish_ads_code_02',
		'',
		'jinr_finish_ads_code_02_callback',
		'jinr_ads_setting',
		'jinr_ads_section'
	);
	add_settings_field(
		'jinr_finish_sp_display_02',
		'',
		'jinr_finish_sp_display_02_callback',
		'jinr_ads_setting',
		'jinr_ads_section'
	);
	add_settings_field(
		'jinr_related_sponsor_text',
		'関連記事上',
		'jinr_related_sponsor_text_callback',
		'jinr_ads_setting',
		'jinr_ads_section'
	);

	add_settings_field(
		'jinr_related_ads_code_01',
		'',
		'jinr_related_ads_code_01_callback',
		'jinr_ads_setting',
		'jinr_ads_section'
	);

	add_settings_field(
		'jinr_related_sp_display_01',
		'',
		'jinr_related_sp_display_01_callback',
		'jinr_ads_setting',
		'jinr_ads_section'
	);
	add_settings_field(
		'jinr_related_ads_code_02',
		'',
		'jinr_related_ads_code_02_callback',
		'jinr_ads_setting',
		'jinr_ads_section'
	);

	add_settings_field(
		'jinr_related_sp_display_02',
		'',
		'jinr_related_sp_display_02_callback',
		'jinr_ads_setting',
		'jinr_ads_section'
	);

	add_settings_field(
		'jinr_unit_sponsor_text',
		'Multiplex広告',
		'jinr_unit_sponsor_text_callback',
		'jinr_ads_setting',
		'jinr_ads_section'
	);
	add_settings_field(
		'jinr_unit_ads_code',
		'',
		'jinr_unit_ads_code_callback',
		'jinr_ads_setting',
		'jinr_ads_section'
	);

	add_settings_field(
		'jinr_unit_sp_display',
		'',
		'jinr_unit_sp_display_callback',
		'jinr_ads_setting',
		'jinr_ads_section'
	);

	register_setting('jinr_reading', 'jinr_display_category');
	register_setting('jinr_reading', 'jinr_h2_sponsor_text');
	register_setting('jinr_reading', 'jinr_h2_ads_code');
	register_setting('jinr_reading', 'jinr_h2_sp_display');
	register_setting('jinr_reading', 'jinr_finish_sponsor_text');
	register_setting('jinr_reading', 'jinr_finish_ads_code_01');
	register_setting('jinr_reading', 'jinr_finish_sp_display_01');
	register_setting('jinr_reading', 'jinr_finish_ads_code_02');
	register_setting('jinr_reading', 'jinr_finish_sp_display_02');
	register_setting('jinr_reading', 'jinr_related_sponsor_text');
	register_setting('jinr_reading', 'jinr_related_ads_code_01');
	register_setting('jinr_reading', 'jinr_related_sp_display_01');
	register_setting('jinr_reading', 'jinr_related_ads_code_02');
	register_setting('jinr_reading', 'jinr_related_sp_display_02');
	register_setting('jinr_reading', 'jinr_unit_sponsor_text');
	register_setting('jinr_reading', 'jinr_unit_ads_code');
	register_setting('jinr_reading', 'jinr_unit_sp_display', array(
		'default' 			=> '1'
	));

	// 各カテゴリー
	for ($i = 1; $i <= 4; $i++) {
		add_settings_field(
			'jinr_display_category_' . $i . '',
			'カテゴリーを選択',
			'jinr_display_category_' . $i . '_callback',
			'jinr_ads_setting',
			'jinr_ads_section'
		);
		add_settings_field(
			'jinr_h2_sponsor_text_' . $i . '',
			'はじめのH2前',
			'jinr_h2_sponsor_text_' . $i . '_callback',
			'jinr_ads_setting',
			'jinr_ads_section'
		);
		add_settings_field(
			'jinr_h2_ads_code_' . $i . '',
			'',
			'jinr_h2_ads_code_' . $i . '_callback',
			'jinr_ads_setting',
			'jinr_ads_section'
		);
		add_settings_field(
			'jinr_h2_sp_display_' . $i . '',
			'スマホでも表示する',
			'jinr_h2_sp_display_' . $i . '_callback',
			'jinr_ads_setting',
			'jinr_ads_section'
		);
		add_settings_field(
			'jinr_finish_sponsor_text_' . $i . '',
			'記事終わり',
			'jinr_finish_sponsor_text_' . $i . '_callback',
			'jinr_ads_setting',
			'jinr_ads_section'
		);
		add_settings_field(
			'jinr_finish_ads_code_01_' . $i . '',
			'',
			'jinr_finish_ads_code_01_' . $i . '_callback',
			'jinr_ads_setting',
			'jinr_ads_section'
		);
		add_settings_field(
			'jinr_finish_sp_display_01_' . $i . '',
			'',
			'jinr_finish_sp_display_01_' . $i . '_callback',
			'jinr_ads_setting',
			'jinr_ads_section'
		);
		add_settings_field(
			'jinr_finish_ads_code_02_' . $i . '',
			'',
			'jinr_finish_ads_code_02_' . $i . '_callback',
			'jinr_ads_setting',
			'jinr_ads_section'
		);
		add_settings_field(
			'jinr_finish_sp_display_02_' . $i . '',
			'',
			'jinr_finish_sp_display_02_' . $i . '_callback',
			'jinr_ads_setting',
			'jinr_ads_section'
		);
		add_settings_field(
			'jinr_related_sponsor_text_' . $i . '',
			'関連記事上',
			'jinr_related_sponsor_text_' . $i . '_callback',
			'jinr_ads_setting',
			'jinr_ads_section'
		);

		add_settings_field(
			'jinr_related_ads_code_01_' . $i . '',
			'',
			'jinr_related_ads_code_01_' . $i . '_callback',
			'jinr_ads_setting',
			'jinr_ads_section'
		);

		add_settings_field(
			'jinr_related_sp_display_01_' . $i . '',
			'',
			'jinr_related_sp_display_01_' . $i . '_callback',
			'jinr_ads_setting',
			'jinr_ads_section'
		);
		add_settings_field(
			'jinr_related_ads_code_02_' . $i . '',
			'',
			'jinr_related_ads_code_02_' . $i . '_callback',
			'jinr_ads_setting',
			'jinr_ads_section'
		);

		add_settings_field(
			'jinr_related_sp_display_02_' . $i . '',
			'',
			'jinr_related_sp_display_02_' . $i . '_callback',
			'jinr_ads_setting',
			'jinr_ads_section'
		);

		add_settings_field(
			'jinr_unit_sponsor_text_' . $i . '',
			'Multiplex広告',
			'jinr_unit_sponsor_text_' . $i . '_callback',
			'jinr_ads_setting',
			'jinr_ads_section'
		);
		add_settings_field(
			'jinr_unit_ads_code_' . $i . '',
			'',
			'jinr_unit_ads_code_' . $i . '_callback',
			'jinr_ads_setting',
			'jinr_ads_section'
		);

		add_settings_field(
			'jinr_unit_sp_display_' . $i . '',
			'',
			'jinr_unit_sp_display_' . $i . '_callback',
			'jinr_ads_setting',
			'jinr_ads_section'
		);

		register_setting('jinr_reading', 'jinr_display_category_' . $i . '');
		register_setting('jinr_reading', 'jinr_h2_sponsor_text_' . $i . '');
		register_setting('jinr_reading', 'jinr_h2_ads_code_' . $i . '');
		register_setting('jinr_reading', 'jinr_h2_sp_display_' . $i . '');
		register_setting('jinr_reading', 'jinr_finish_sponsor_text_' . $i . '');
		register_setting('jinr_reading', 'jinr_finish_ads_code_01_' . $i . '');
		register_setting('jinr_reading', 'jinr_finish_sp_display_01_' . $i . '');
		register_setting('jinr_reading', 'jinr_finish_ads_code_02_' . $i . '');
		register_setting('jinr_reading', 'jinr_finish_sp_display_02_' . $i . '');
		register_setting('jinr_reading', 'jinr_related_sponsor_text_' . $i . '');
		register_setting('jinr_reading', 'jinr_related_ads_code_01_' . $i . '');
		register_setting('jinr_reading', 'jinr_related_sp_display_01_' . $i . '');
		register_setting('jinr_reading', 'jinr_related_ads_code_02_' . $i . '');
		register_setting('jinr_reading', 'jinr_related_sp_display_02_' . $i . '');
		register_setting('jinr_reading', 'jinr_unit_sponsor_text_' . $i . '');
		register_setting('jinr_reading', 'jinr_unit_ads_code_' . $i . '');
		register_setting('jinr_reading', 'jinr_unit_sp_display_' . $i . '');
	}

	//アフィリエイト管理


	// 計測タグ設定
	add_settings_field(
		'jinr_google_adsense_tag',
		'Googleアドセンスの設置タグ',
		'jinr_google_adsense_tag_callback',
		'jinr_google_tag_setting',
		'jinr_google_tag_section'
	);
	add_settings_field(
		'jinr_google_analytics_tag',
		'Googleアナリティクスの計測タグ',
		'jinr_google_analytics_tag_callback',
		'jinr_google_tag_setting',
		'jinr_google_tag_section'
	);
	add_settings_field(
		'jinr_google_seaech_console_tag',
		'Search Consoleの計測タグ',
		'jinr_google_seaech_console_tag_callback',
		'jinr_google_tag_setting',
		'jinr_google_tag_section'
	);
	add_settings_field(
		'jinr_head_tag',
		'head内に記載するタグ',
		'jinr_head_tag_callback',
		'jinr_other_tag_setting',
		'jinr_other_tag_section'
	);
	add_settings_field(
		'jinr_body_start_tag',
		'bodyタグ開始直後に記載するタグ',
		'jinr_body_start_tag_callback',
		'jinr_other_tag_setting',
		'jinr_other_tag_section'
	);
	add_settings_field(
		'jinr_body_finish_tag',
		'bodyタグ終了直前に記載するタグ',
		'jinr_body_finish_tag_callback',
		'jinr_other_tag_setting',
		'jinr_other_tag_section'
	);
	register_setting('jinr_reading', 'jinr_google_adsense_tag');
	register_setting('jinr_reading', 'jinr_google_analytics_tag');
	register_setting('jinr_reading', 'jinr_google_seaech_console_tag');
	register_setting('jinr_reading', 'jinr_head_tag');
	register_setting('jinr_reading', 'jinr_body_start_tag');
	register_setting('jinr_reading', 'jinr_body_finish_tag');

	// 有料コンテンツブロックの設定
	add_settings_field(
		'jinr_paidpost_subscription_check',
		'サブスクリプションを利用',
		'jinr_paidpost_subscription_check_callback',
		'jinr_paidpost_setting',
		'jinr_paidpost_section'
	);
	add_settings_field(
		'jinr_paidpost_secret_key',
		'Stripeシークレットキー',
		'jinr_paidpost_secret_key_callback',
		'jinr_paidpost_setting',
		'jinr_paidpost_section'
	);
	add_settings_field(
		'jinr_paidpost_release_key',
		'Stripe公開キーを入力',
		'jinr_paidpost_release_key_callback',
		'jinr_paidpost_setting',
		'jinr_paidpost_section'
	);
	register_setting('jinr_reading', 'jinr_paidpost_subscription_check');
	register_setting('jinr_reading', 'jinr_paidpost_secret_key');
	register_setting('jinr_reading', 'jinr_paidpost_release_key');
}
add_action('admin_init', 'jinr_settings_fields');

function jinr_ads_admin()
{
	add_settings_section(
		'jinr_ads_section',
		'広告管理',
		'',
		'jinr_ads_setting'
	);
}
add_action('admin_init', 'jinr_ads_admin');



// 出力コールバック
function jinr_top_next_noindex_callback()
{
	$option = get_option('jinr_top_next_noindex');
	if ($option === false) {
		update_option('jinr_top_next_noindex', '');
		$option = get_option('jinr_top_next_noindex');
	}
	echo '<input type="checkbox" id="jinr_top_next_noindex" name="jinr_top_next_noindex" value="1" ' . checked(1, $option, false) . ' /><label class="a--label-settings" for="jinr_top_next_noindex">トップページの2ページ目以降をnoindexにする</label>';
}
function jinr_category_noindex_callback()
{
	$option = get_option('jinr_category_noindex');
	if ($option === false) {
		update_option('jinr_category_noindex', '');
		$option = get_option('jinr_category_noindex');
	}
	echo '<input type="checkbox" id="jinr_category_noindex" name="jinr_category_noindex" value="1" ' . checked(1, $option, false) . ' /><label class="a--label-settings" for="jinr_category_noindex">カテゴリーの一覧ページをnoindexにする【一括設定】</label>';
}

function jinr_category_id_noindex_callback()
{
	$option = get_option('jinr_category_id_noindex');
	printf(
		'<input type="text" id="jinr_category_id_noindex" name="jinr_category_id_noindex" placeholder="例）2,19,468" value="%s" />',
		isset($option) ? esc_attr($option) : ''
	);
}
function jinr_category_next_noindex_callback()
{
	$option = get_option('jinr_category_next_noindex');
	if ($option === false) {
		update_option('jinr_category_next_noindex', '');
		$option = get_option('jinr_category_next_noindex');
	}
	echo '<input type="checkbox" id="jinr_category_next_noindex" name="jinr_category_next_noindex" value="1" ' . checked(1, $option, false) . ' /><label class="a--label-settings" for="jinr_category_next_noindex">カテゴリー記事一覧の２ページ目以降をnoindexにする</label>';
}

function jinr_tag_noindex_callback()
{
	$option = get_option('jinr_tag_noindex');
	if ($option === false) {
		update_option('jinr_tag_noindex', '');
		$option = get_option('jinr_tag_noindex');
	}
	echo '<input type="checkbox" id="jinr_tag_noindex" name="jinr_tag_noindex" value="1" ' . checked(1, $option, false) . ' /><label class="a--label-settings" for="jinr_tag_noindex">タグの一覧ページをnoindexにする【一括設定】</label>';
}

function jinr_tag_id_noindex_callback()
{
	$option = get_option('jinr_tag_id_noindex');
	printf(
		'<input type="text" id="jinr_tag_id_noindex" name="jinr_tag_id_noindex" placeholder="例）2,19,468" value="%s" />',
		isset($option) ? esc_attr($option) : ''
	);
}
function jinr_tag_next_noindex_callback()
{
	$option = get_option('jinr_tag_next_noindex');
	if ($option === false) {
		update_option('jinr_tag_next_noindex', '');
		$option = get_option('jinr_tag_next_noindex');
	}
	echo '<input type="checkbox" id="jinr_tag_next_noindex" name="jinr_tag_next_noindex" value="1" ' . checked(1, $option, false) . ' /><label class="a--label-settings" for="jinr_tag_next_noindex">タグ記事一覧の２ページ目以降をnoindexにする</label>';
}

function jinr_date_archive_noindex_callback()
{
	$option = get_option('jinr_date_archive_noindex');
	if ($option === false) {
		update_option('jinr_date_archive_noindex', '');
		$option = get_option('jinr_date_archive_noindex');
	}
	echo '<input type="checkbox" id="jinr_date_archive_noindex" name="jinr_date_archive_noindex" value="1" ' . checked(1, $option, false) . ' /><label class="a--label-settings" for="jinr_date_archive_noindex">日付のアーカイブをnoindexにする</label>';
}

function jinr_image_page_noindex_callback()
{
	$option = get_option('jinr_image_page_noindex');
	if ($option === false) {
		update_option('jinr_image_page_noindex', '');
		$option = get_option('jinr_image_page_noindex');
	}
	echo '<input type="checkbox" id="jinr_image_page_noindex" name="jinr_image_page_noindex" value="1" ' . checked(1, $option, false) . ' /><label class="a--label-settings" for="jinr_image_page_noindex">画像ページをnoindexにする</label>';
}

function jinr_author_noindex_callback()
{
	$option = get_option('jinr_author_noindex');
	if ($option === false) {
		update_option('jinr_author_noindex', '');
		$option = get_option('jinr_author_noindex');
	}
	echo '<input type="checkbox" id="jinr_author_noindex" name="jinr_author_noindex" value="1" ' . checked(1, $option, false) . ' /><label class="a--label-settings" for="jinr_author_noindex">著者のアーカイブをnoindexにする</label>';
}

function jinr_search_page_noindex_callback()
{
	$option = get_option('jinr_search_page_noindex');
	if ($option === false) {
		update_option('jinr_search_page_noindex', '');
		$option = get_option('jinr_search_page_noindex');
	}
	echo '<input type="checkbox" id="jinr_search_page_noindex" name="jinr_search_page_noindex" value="1" ' . checked(1, $option, false) . ' /><label class="a--label-settings" for="jinr_search_page_noindex">記事検索結果のページをnoindexにする</label>';
}

function jinr_breadcrumb_change_text_callback()
{
	$option = get_option('jinr_breadcrumb_change_text');
	if ($option === false) {
		update_option('jinr_breadcrumb_change_text', 'HOME');
		$option = get_option('jinr_breadcrumb_change_text');
	}
	printf(
		'<input type="text" id="jinr_breadcrumb_change_text" class="a--input-text" name="jinr_breadcrumb_change_text" placeholder="「TOP」や「トップページ」などに変更できます" value="%s" />',
		isset($option) ? esc_attr($option) : ''
	);
}

function jinr_breadcrumb_display_callback()
{
	$option = get_option('jinr_breadcrumb_display');
	echo '<input type="checkbox" id="jinr_breadcrumb_display" name="jinr_breadcrumb_display" value="1" ' . checked(1, $option, false) . ' /><label class="a--label-settings" for="jinr_breadcrumb_display">パンくずリストを非表示にする</label>';
}

function jinr_top_meta_keyword_callback()
{
	$option = get_option('jinr_top_meta_keyword');
	printf(
		'<input type="text" id="jinr_top_meta_keyword" class="a--input-text" name="jinr_top_meta_keyword" placeholder="メタキーワードを入力してください。" value="%s" />',
		isset($option) ? esc_attr($option) : ''
	);
}
function jinr_apparently_title_callback()
{
	$option = get_option('jinr_apparently_title');
	printf(
		'<input type="text" id="jinr_apparently_title" class="a--input-text" name="jinr_apparently_title" placeholder="見かけ上のタイトルを変更します" value="%s" />',
		isset($option) ? esc_attr($option) : ''
	);
}
function jinr_apparently_subtitle_callback()
{
	$option = get_option('jinr_apparently_subtitle');
	printf(
		'<input type="text" id="jinr_apparently_subtitle" class="a--input-text" name="jinr_apparently_subtitle" placeholder="見かけ上のサブタイトルを変更します" value="%s" />',
		isset($option) ? esc_attr($option) : ''
	);
}

function jinr_separation_title_callback()
{
	$option = get_option('jinr_separation_title');
	if ($option === false) {
		update_option('jinr_separation_title', '｜');
		$option = get_option('jinr_separation_title');
	}
	printf(
		'<input type="text" id="jinr_separation_title" class="a--input-text" name="jinr_separation_title" placeholder="「記事タイトル｜ブログタイトル」の「｜」を変更できます" value="%s" />',
		isset($option) ? esc_attr($option) : ''
	);
}
function jinr_title_customize_callback()
{
	$option = get_option('jinr_title_customize');
	echo '<input type="checkbox" id="jinr_title_customize" name="jinr_title_customize" value="1" ' . checked(1, $option, false) . ' /><label class="a--label-settings" for="jinr_title_customize">titleタグにサイト名を含ませない</label>';
}

function jinr_commentrss_display_callback()
{
	$option = get_option('jinr_commentrss_display');
	echo '<input type="checkbox" id="jinr_commentrss_display" name="jinr_commentrss_display" value="1" ' . checked(1, $option, false) . ' /><label class="a--label-settings" for="jinr_commentrss_display">コメントRSSの出力を停止させる</label>';
}

function jinr_google_adsense_tag_callback()
{

	$option = get_option('jinr_google_adsense_tag');
	printf(
		'<textarea id="jinr_google_adsense_tag"  class="a--input-textarea" name="jinr_google_adsense_tag" placeholder="ここにコードを記載してください" />%s</textarea>',
		isset($option) ? esc_attr($option) : ''
	);
}

function jinr_google_analytics_tag_callback()
{
	$option = get_option('jinr_google_analytics_tag');
	printf(
		'<textarea name="jinr_google_analytics_tag" class="a--input-textarea" placeholder="ここにコードを記載してください">%s</textarea>',
		isset($option) ? esc_attr($option) : ''
	);
}
function jinr_google_seaech_console_tag_callback()
{
	$option = get_option('jinr_google_seaech_console_tag');
	printf(
		'<textarea name="jinr_google_seaech_console_tag" class="a--input-textarea" placeholder="ここにコードを記載してください">%s</textarea>',
		isset($option) ? esc_attr($option) : ''
	);
}
function jinr_head_tag_callback()
{
	$option = get_option('jinr_head_tag');
	printf(
		'<textarea name="jinr_head_tag" class="a--input-textarea" placeholder="ここにコードを記載してください">%s</textarea>',
		isset($option) ? esc_attr($option) : ''
	);
}
function jinr_body_start_tag_callback()
{
	$option = get_option('jinr_body_start_tag');
	printf(
		'<textarea name="jinr_body_start_tag" class="a--input-textarea" placeholder="ここにコードを記載してください">%s</textarea>',
		isset($option) ? esc_attr($option) : ''
	);
}
function jinr_body_finish_tag_callback()
{
	$option = get_option('jinr_body_finish_tag');
	printf(
		'<textarea name="jinr_body_finish_tag" class="a--input-textarea" placeholder="ここにコードを記載してください">%s</textarea>',
		isset($option) ? esc_attr($option) : ''
	);
}

function jinr_display_category_callback()
{
	$option = get_option('jinr_display_category');
	echo '<input type="checkbox" id="jinr_display_category" name="jinr_display_category" value="1" ' . checked(1, $option, false) . ' /><label class="a--label-settings" for="jinr_display_category">カテゴリーテスト</label>';
}

function jinr_h2_sponsor_text_callback()
{
	$option = get_option('jinr_h2_sponsor_text');
	printf(
		'<input type="text" id="jinr_h2_sponsor_text" class="a--ads-text" name="jinr_h2_sponsor_text" placeholder="ラベルを入力してください（例：スポンサーリンク）" value="%s" />',
		isset($option) ? esc_attr($option) : ''
	);
}
function jinr_h2_ads_code_callback()
{
	$option = get_option('jinr_h2_ads_code');
	printf(
		'<textarea name="jinr_h2_ads_code" class="a--ads-textarea a--input-textarea" placeholder="ここにコードを記載してください">%s</textarea>',
		isset($option) ? esc_attr($option) : ''
	);
}
function jinr_h2_sp_display_callback()
{
	$option = get_option('jinr_h2_sp_display');
	echo '<input type="checkbox" id="jinr_h2_sp_display" name="jinr_h2_sp_display" value="1" ' . checked(1, $option, false) . ' /><label class="a--label-settings" for="jinr_h2_sp_display">スマホでも表示する</label>';
}


function jinr_finish_sponsor_text_callback()
{
	$option = get_option('jinr_finish_sponsor_text');
	printf(
		'<input type="text" id="jinr_finish_sponsor_text" class="a--ads-text" name="jinr_finish_sponsor_text" placeholder="ラベルを入力してください（例：スポンサーリンク）" value="%s" />',
		isset($option) ? esc_attr($option) : ''
	);
}
function jinr_finish_ads_code_01_callback()
{
	$option = get_option('jinr_finish_ads_code_01');
	printf(
		'<textarea name="jinr_finish_ads_code_01" class="a--ads-textarea a--input-textarea" placeholder="ここにコードを記載してください">%s</textarea>',
		isset($option) ? esc_attr($option) : ''
	);
}
function jinr_finish_sp_display_01_callback()
{
	$option = get_option('jinr_finish_sp_display_01');
	echo '<input type="checkbox" id="jinr_finish_sp_display_01" name="jinr_finish_sp_display_01" value="1" ' . checked(1, $option, false) . ' /><label class="a--label-settings" for="jinr_finish_sp_display_01">スマホでも表示する</label>';
}
function jinr_finish_ads_code_02_callback()
{
	$option = get_option('jinr_finish_ads_code_02');
	printf(
		'<textarea name="jinr_finish_ads_code_02" class="a--ads-textarea a--input-textarea" placeholder="ここにコードを記載してください">%s</textarea>',
		isset($option) ? esc_attr($option) : ''
	);
}
function jinr_finish_sp_display_02_callback()
{
	$option = get_option('jinr_finish_sp_display_02');
	echo '<input type="checkbox" id="jinr_finish_sp_display_02" name="jinr_finish_sp_display_02" value="1" ' . checked(1, $option, false) . ' /><label class="a--label-settings" for="jinr_finish_sp_display_02">スマホでも表示する</label>';
}

function jinr_related_sponsor_text_callback()
{
	$option = get_option('jinr_related_sponsor_text');
	printf(
		'<input type="text" id="jinr_related_sponsor_text" class="a--ads-text" name="jinr_related_sponsor_text" placeholder="ラベルを入力してください（例：スポンサーリンク）" value="%s" />',
		isset($option) ? esc_attr($option) : ''
	);
}
function jinr_related_ads_code_01_callback()
{
	$option = get_option('jinr_related_ads_code_01');
	printf(
		'<textarea name="jinr_related_ads_code_01" class="a--ads-textarea a--input-textarea" placeholder="ここにコードを記載してください">%s</textarea>',
		isset($option) ? esc_attr($option) : ''
	);
}
function jinr_related_sp_display_01_callback()
{
	$option = get_option('jinr_related_sp_display_01');
	echo '<input type="checkbox" id="jinr_related_sp_display_01" name="jinr_related_sp_display_01" value="1" ' . checked(1, $option, false) . ' /><label class="a--label-settings" for="jinr_related_sp_display_01">スマホでも表示する</label>';
}
function jinr_related_ads_code_02_callback()
{
	$option = get_option('jinr_related_ads_code_02');
	printf(
		'<textarea name="jinr_related_ads_code_02" class="a--ads-textarea a--input-textarea" placeholder="ここにコードを記載してください">%s</textarea>',
		isset($option) ? esc_attr($option) : ''
	);
}
function jinr_related_sp_display_02_callback()
{
	$option = get_option('jinr_related_sp_display_02');
	echo '<input type="checkbox" id="jinr_related_sp_display_02" name="jinr_related_sp_display_02" value="1" ' . checked(1, $option, false) . ' /><label class="a--label-settings" for="jinr_related_sp_display_02">スマホでも表示する</label>';
}

function jinr_unit_sponsor_text_callback()
{
	$option = get_option('jinr_unit_sponsor_text');
	printf(
		'<input type="text" id="jinr_unit_sponsor_text" class="a--ads-text" name="jinr_unit_sponsor_text" placeholder="ラベルを入力してください（例：スポンサーリンク）" value="%s" />',
		isset($option) ? esc_attr($option) : ''
	);
}
function jinr_unit_ads_code_callback()
{
	$option = get_option('jinr_unit_ads_code');
	printf(
		'<textarea name="jinr_unit_ads_code" class="a--ads-textarea a--input-textarea" placeholder="ここにコードを記載してください">%s</textarea>',
		isset($option) ? esc_attr($option) : ''
	);
}
function jinr_unit_sp_display_callback()
{
	$option = get_option('jinr_unit_sp_display');
	echo '<input type="checkbox" id="jinr_unit_sp_display" name="jinr_unit_sp_display" value="1" ' . checked(1, $option, false) . ' /><label class="a--label-settings" for="jinr_unit_sp_display">スマホでも表示する</label>';
}


// 各カテゴリーのコールバック
function jinr_display_category_1_callback()
{
	$option = get_option('jinr_display_category_1');
	echo '<input type="checkbox" id="jinr_display_category_1" name="jinr_display_category_1" value="1" ' . checked(1, $option, false) . ' /><label class="a--label-settings" for="jinr_display_category_1">カテゴリーテスト</label>';
}

function jinr_h2_sponsor_text_1_callback()
{
	$option = get_option('jinr_h2_sponsor_text_1');
	printf(
		'<input type="text" id="jinr_h2_sponsor_text_1" class="a--ads-text" name="jinr_h2_sponsor_text_1" placeholder="ラベルを入力してください（例：スポンサーリンク）" value="%s" />',
		isset($option) ? esc_attr($option) : ''
	);
}
function jinr_h2_ads_code_1_callback()
{
	$option = get_option('jinr_h2_ads_code_1');
	printf(
		'<textarea name="jinr_h2_ads_code_1" class="a--ads-textarea a--input-textarea" placeholder="ここにコードを記載してください">%s</textarea>',
		isset($option) ? esc_attr($option) : ''
	);
}
function jinr_h2_sp_display_1_callback()
{
	$option = get_option('jinr_h2_sp_display_1');
	echo '<input type="checkbox" id="jinr_h2_sp_display_1" name="jinr_h2_sp_display_1" value="1" ' . checked(1, $option, false) . ' /><label class="a--label-settings" for="jinr_h2_sp_display_1">スマホでも表示する</label>';
}

function jinr_finish_sponsor_text_1_callback()
{
	$option = get_option('jinr_finish_sponsor_text_1');
	printf(
		'<input type="text" id="jinr_finish_sponsor_text_1" class="a--ads-text" name="jinr_finish_sponsor_text_1" placeholder="ラベルを入力してください（例：スポンサーリンク）" value="%s" />',
		isset($option) ? esc_attr($option) : ''
	);
}
function jinr_finish_ads_code_01_1_callback()
{
	$option = get_option('jinr_finish_ads_code_01_1');
	printf(
		'<textarea name="jinr_finish_ads_code_01_1" class="a--ads-textarea a--input-textarea" placeholder="ここにコードを記載してください">%s</textarea>',
		isset($option) ? esc_attr($option) : ''
	);
}
function jinr_finish_sp_display_01_1_callback()
{
	$option = get_option('jinr_finish_sp_display_01_1');
	echo '<input type="checkbox" id="jinr_finish_sp_display_01_1" name="jinr_finish_sp_display_01_1" value="1" ' . checked(1, $option, false) . ' /><label class="a--label-settings" for="jinr_finish_sp_display_01_1">スマホでも表示する</label>';
}
function jinr_finish_ads_code_02_1_callback()
{
	$option = get_option('jinr_finish_ads_code_02_1');
	printf(
		'<textarea name="jinr_finish_ads_code_02_1" class="a--ads-textarea a--input-textarea" placeholder="ここにコードを記載してください">%s</textarea>',
		isset($option) ? esc_attr($option) : ''
	);
}
function jinr_finish_sp_display_02_1_callback()
{
	$option = get_option('jinr_finish_sp_display_02_1');
	echo '<input type="checkbox" id="jinr_finish_sp_display_02_1" name="jinr_finish_sp_display_02_1" value="1" ' . checked(1, $option, false) . ' /><label class="a--label-settings" for="jinr_finish_sp_display_02_1">スマホでも表示する</label>';
}

function jinr_related_sponsor_text_1_callback()
{
	$option = get_option('jinr_related_sponsor_text_1');
	printf(
		'<input type="text" id="jinr_related_sponsor_text_1" class="a--ads-text" name="jinr_related_sponsor_text_1" placeholder="ラベルを入力してください（例：スポンサーリンク））" value="%s" />',
		isset($option) ? esc_attr($option) : ''
	);
}
function jinr_related_ads_code_01_1_callback()
{
	$option = get_option('jinr_related_ads_code_01_1');
	printf(
		'<textarea name="jinr_related_ads_code_01_1" class="a--ads-textarea a--input-textarea" placeholder="ここにコードを記載してください">%s</textarea>',
		isset($option) ? esc_attr($option) : ''
	);
}
function jinr_related_sp_display_01_1_callback()
{
	$option = get_option('jinr_related_sp_display_01_1');
	echo '<input type="checkbox" id="jinr_related_sp_display_01_1" name="jinr_related_sp_display_01_1" value="1" ' . checked(1, $option, false) . ' /><label class="a--label-settings" for="jinr_related_sp_display_01_1">スマホでも表示する</label>';
}
function jinr_related_ads_code_02_1_callback()
{
	$option = get_option('jinr_related_ads_code_02_1');
	printf(
		'<textarea name="jinr_related_ads_code_02_1" class="a--ads-textarea a--input-textarea" placeholder="ここにコードを記載してください">%s</textarea>',
		isset($option) ? esc_attr($option) : ''
	);
}
function jinr_related_sp_display_02_1_callback()
{
	$option = get_option('jinr_related_sp_display_02_1');
	echo '<input type="checkbox" id="jinr_related_sp_display_02_1" name="jinr_related_sp_display_02_1" value="1" ' . checked(1, $option, false) . ' /><label class="a--label-settings" for="jinr_related_sp_display_02_1">スマホでも表示する</label>';
}

function jinr_unit_sponsor_text_1_callback()
{
	$option = get_option('jinr_unit_sponsor_text_1');
	printf(
		'<input type="text" id="jinr_unit_sponsor_text_1" class="a--ads-text" name="jinr_unit_sponsor_text_1" placeholder="ラベルラベルを入力してください（例：スポンサーリンク））" value="%s" />',
		isset($option) ? esc_attr($option) : ''
	);
}
function jinr_unit_ads_code_1_callback()
{
	$option = get_option('jinr_unit_ads_code_1');
	printf(
		'<textarea name="jinr_unit_ads_code_1" class="a--ads-textarea a--input-textarea" placeholder="ここにコードを記載してください">%s</textarea>',
		isset($option) ? esc_attr($option) : ''
	);
}
function jinr_unit_sp_display_1_callback()
{
	$option = get_option('jinr_unit_sp_display_1');
	echo '<input type="checkbox" id="jinr_unit_sp_display_1" name="jinr_unit_sp_display_1" value="1" ' . checked(1, $option, false) . ' /><label class="a--label-settings" for="jinr_unit_sp_display_1">スマホでも表示する</label>';
}

// カテゴリー２

function jinr_display_category_2_callback()
{
	$option = get_option('jinr_display_category_2');
	echo '<input type="checkbox" id="jinr_display_category_2" name="jinr_display_category_2" value="1" ' . checked(1, $option, false) . ' /><label class="a--label-settings" for="jinr_display_category_2">カテゴリーテスト</label>';
}

function jinr_h2_sponsor_text_2_callback()
{
	$option = get_option('jinr_h2_sponsor_text_2');
	printf(
		'<input type="text" id="jinr_h2_sponsor_text_2" class="a--ads-text" name="jinr_h2_sponsor_text_2" placeholder="ラベルを入力してください（例：スポンサーリンク）" value="%s" />',
		isset($option) ? esc_attr($option) : ''
	);
}
function jinr_h2_ads_code_2_callback()
{
	$option = get_option('jinr_h2_ads_code_2');
	printf(
		'<textarea name="jinr_h2_ads_code_2" class="a--ads-textarea a--input-textarea" placeholder="ここにコードを記載してください">%s</textarea>',
		isset($option) ? esc_attr($option) : ''
	);
}
function jinr_h2_sp_display_2_callback()
{
	$option = get_option('jinr_h2_sp_display_2');
	echo '<input type="checkbox" id="jinr_h2_sp_display_2" name="jinr_h2_sp_display_2" value="1" ' . checked(1, $option, false) . ' /><label class="a--label-settings" for="jinr_h2_sp_display_2">スマホでも表示する</label>';
}

function jinr_finish_sponsor_text_2_callback()
{
	$option = get_option('jinr_finish_sponsor_text_2');
	printf(
		'<input type="text" id="jinr_finish_sponsor_text_2" class="a--ads-text" name="jinr_finish_sponsor_text_2" placeholder="ラベルを入力してください（例：スポンサーリンク）" value="%s" />',
		isset($option) ? esc_attr($option) : ''
	);
}
function jinr_finish_ads_code_01_2_callback()
{
	$option = get_option('jinr_finish_ads_code_01_2');
	printf(
		'<textarea name="jinr_finish_ads_code_01_2" class="a--ads-textarea a--input-textarea" placeholder="ここにコードを記載してください">%s</textarea>',
		isset($option) ? esc_attr($option) : ''
	);
}
function jinr_finish_sp_display_01_2_callback()
{
	$option = get_option('jinr_finish_sp_display_01_2');
	echo '<input type="checkbox" id="jinr_finish_sp_display_01_2" name="jinr_finish_sp_display_01_2" value="1" ' . checked(1, $option, false) . ' /><label class="a--label-settings" for="jinr_finish_sp_display_01_2">スマホでも表示する</label>';
}
function jinr_finish_ads_code_02_2_callback()
{
	$option = get_option('jinr_finish_ads_code_02_2');
	printf(
		'<textarea name="jinr_finish_ads_code_02_2" class="a--ads-textarea a--input-textarea" placeholder="ここにコードを記載してください">%s</textarea>',
		isset($option) ? esc_attr($option) : ''
	);
}
function jinr_finish_sp_display_02_2_callback()
{
	$option = get_option('jinr_finish_sp_display_02_2');
	echo '<input type="checkbox" id="jinr_finish_sp_display_02_2" name="jinr_finish_sp_display_02_2" value="1" ' . checked(1, $option, false) . ' /><label class="a--label-settings" for="jinr_finish_sp_display_02_2">スマホでも表示する</label>';
}

function jinr_related_sponsor_text_2_callback()
{
	$option = get_option('jinr_related_sponsor_text_2');
	printf(
		'<input type="text" id="jinr_related_sponsor_text_2" class="a--ads-text" name="jinr_related_sponsor_text_2" placeholder="ラベルを入力してください（例：スポンサーリンク）" value="%s" />',
		isset($option) ? esc_attr($option) : ''
	);
}
function jinr_related_ads_code_01_2_callback()
{
	$option = get_option('jinr_related_ads_code_01_2');
	printf(
		'<textarea name="jinr_related_ads_code_01_2" class="a--ads-textarea a--input-textarea" placeholder="ここにコードを記載してください">%s</textarea>',
		isset($option) ? esc_attr($option) : ''
	);
}
function jinr_related_sp_display_01_2_callback()
{
	$option = get_option('jinr_related_sp_display_01_2');
	echo '<input type="checkbox" id="jinr_related_sp_display_01_2" name="jinr_related_sp_display_01_2" value="1" ' . checked(1, $option, false) . ' /><label class="a--label-settings" for="jinr_related_sp_display_01_2">スマホでも表示する</label>';
}
function jinr_related_ads_code_02_2_callback()
{
	$option = get_option('jinr_related_ads_code_02_2');
	printf(
		'<textarea name="jinr_related_ads_code_02_2" class="a--ads-textarea a--input-textarea" placeholder="ここにコードを記載してください">%s</textarea>',
		isset($option) ? esc_attr($option) : ''
	);
}
function jinr_related_sp_display_02_2_callback()
{
	$option = get_option('jinr_related_sp_display_02_2');
	echo '<input type="checkbox" id="jinr_related_sp_display_02_2" name="jinr_related_sp_display_02_2" value="1" ' . checked(1, $option, false) . ' /><label class="a--label-settings" for="jinr_related_sp_display_02_2">スマホでも表示する</label>';
}

function jinr_unit_sponsor_text_2_callback()
{
	$option = get_option('jinr_unit_sponsor_text_2');
	printf(
		'<input type="text" id="jinr_unit_sponsor_text_2" class="a--ads-text" name="jinr_unit_sponsor_text_2" placeholder="ラベルを入力してください（例：スポンサーリンク）" value="%s" />',
		isset($option) ? esc_attr($option) : ''
	);
}
function jinr_unit_ads_code_2_callback()
{
	$option = get_option('jinr_unit_ads_code_2');
	printf(
		'<textarea name="jinr_unit_ads_code_2" class="a--ads-textarea a--input-textarea" placeholder="ここにコードを記載してください">%s</textarea>',
		isset($option) ? esc_attr($option) : ''
	);
}
function jinr_unit_sp_display_2_callback()
{
	$option = get_option('jinr_unit_sp_display_2');
	echo '<input type="checkbox" id="jinr_unit_sp_display_2" name="jinr_unit_sp_display_2" value="1" ' . checked(1, $option, false) . ' /><label class="a--label-settings" for="jinr_unit_sp_display_2">スマホでも表示する</label>';
}


// カテゴリ−３
function jinr_display_category_3_callback()
{
	$option = get_option('jinr_display_category_3');
	echo '<input type="checkbox" id="jinr_display_category_3" name="jinr_display_category_3" value="1" ' . checked(1, $option, false) . ' /><label class="a--label-settings" for="jinr_display_category_3">カテゴリーテスト</label>';
}

function jinr_h2_sponsor_text_3_callback()
{
	$option = get_option('jinr_h2_sponsor_text_3');
	printf(
		'<input type="text" id="jinr_h2_sponsor_text_3" class="a--ads-text" name="jinr_h2_sponsor_text_3" placeholder="ラベルを入力してください（例：スポンサーリンク）" value="%s" />',
		isset($option) ? esc_attr($option) : ''
	);
}
function jinr_h2_ads_code_3_callback()
{
	$option = get_option('jinr_h2_ads_code_3');
	printf(
		'<textarea name="jinr_h2_ads_code_3" class="a--ads-textarea a--input-textarea" placeholder="ここにコードを記載してください">%s</textarea>',
		isset($option) ? esc_attr($option) : ''
	);
}
function jinr_h2_sp_display_3_callback()
{
	$option = get_option('jinr_h2_sp_display_3');
	echo '<input type="checkbox" id="jinr_h2_sp_display_3" name="jinr_h2_sp_display_3" value="1" ' . checked(1, $option, false) . ' /><label class="a--label-settings" for="jinr_h2_sp_display_3">スマホでも表示する</label>';
}

function jinr_finish_sponsor_text_3_callback()
{
	$option = get_option('jinr_finish_sponsor_text_3');
	printf(
		'<input type="text" id="jinr_finish_sponsor_text_3" class="a--ads-text" name="jinr_finish_sponsor_text_3" placeholder="ラベルを入力してください（例：スポンサーリンク）" value="%s" />',
		isset($option) ? esc_attr($option) : ''
	);
}
function jinr_finish_ads_code_01_3_callback()
{
	$option = get_option('jinr_finish_ads_code_01_3');
	printf(
		'<textarea name="jinr_finish_ads_code_01_3" class="a--ads-textarea a--input-textarea" placeholder="ここにコードを記載してください">%s</textarea>',
		isset($option) ? esc_attr($option) : ''
	);
}
function jinr_finish_sp_display_01_3_callback()
{
	$option = get_option('jinr_finish_sp_display_01_3');
	echo '<input type="checkbox" id="jinr_finish_sp_display_01_3" name="jinr_finish_sp_display_01_3" value="1" ' . checked(1, $option, false) . ' /><label class="a--label-settings" for="jinr_finish_sp_display_01_3">スマホでも表示する</label>';
}
function jinr_finish_ads_code_02_3_callback()
{
	$option = get_option('jinr_finish_ads_code_02_3');
	printf(
		'<textarea name="jinr_finish_ads_code_02_3" class="a--ads-textarea a--input-textarea" placeholder="ここにコードを記載してください">%s</textarea>',
		isset($option) ? esc_attr($option) : ''
	);
}
function jinr_finish_sp_display_02_3_callback()
{
	$option = get_option('jinr_finish_sp_display_02_3');
	echo '<input type="checkbox" id="jinr_finish_sp_display_02_3" name="jinr_finish_sp_display_02_3" value="1" ' . checked(1, $option, false) . ' /><label class="a--label-settings" for="jinr_finish_sp_display_02_3">スマホでも表示する</label>';
}

function jinr_related_sponsor_text_3_callback()
{
	$option = get_option('jinr_related_sponsor_text_3');
	printf(
		'<input type="text" id="jinr_related_sponsor_text_3" class="a--ads-text" name="jinr_related_sponsor_text_3" placeholder="ラベルを入力してください（例：スポンサーリンク）" value="%s" />',
		isset($option) ? esc_attr($option) : ''
	);
}
function jinr_related_ads_code_01_3_callback()
{
	$option = get_option('jinr_related_ads_code_01_3');
	printf(
		'<textarea name="jinr_related_ads_code_01_3" class="a--ads-textarea a--input-textarea" placeholder="ここにコードを記載してください">%s</textarea>',
		isset($option) ? esc_attr($option) : ''
	);
}
function jinr_related_sp_display_01_3_callback()
{
	$option = get_option('jinr_related_sp_display_01_3');
	echo '<input type="checkbox" id="jinr_related_sp_display_01_3" name="jinr_related_sp_display_01_3" value="1" ' . checked(1, $option, false) . ' /><label class="a--label-settings" for="jinr_related_sp_display_01_3">スマホでも表示する</label>';
}
function jinr_related_ads_code_02_3_callback()
{
	$option = get_option('jinr_related_ads_code_02_3');
	printf(
		'<textarea name="jinr_related_ads_code_02_3" class="a--ads-textarea a--input-textarea" placeholder="ここにコードを記載してください">%s</textarea>',
		isset($option) ? esc_attr($option) : ''
	);
}
function jinr_related_sp_display_02_3_callback()
{
	$option = get_option('jinr_related_sp_display_02_3');
	echo '<input type="checkbox" id="jinr_related_sp_display_02_3" name="jinr_related_sp_display_02_3" value="1" ' . checked(1, $option, false) . ' /><label class="a--label-settings" for="jinr_related_sp_display_02_3">スマホでも表示する</label>';
}

function jinr_unit_sponsor_text_3_callback()
{
	$option = get_option('jinr_unit_sponsor_text_3');
	printf(
		'<input type="text" id="jinr_unit_sponsor_text_3" class="a--ads-text" name="jinr_unit_sponsor_text_3" placeholder="ラベルを入力してください（例：スポンサーリンク）" value="%s" />',
		isset($option) ? esc_attr($option) : ''
	);
}
function jinr_unit_ads_code_3_callback()
{
	$option = get_option('jinr_unit_ads_code_3');
	printf(
		'<textarea name="jinr_unit_ads_code_3" class="a--ads-textarea a--input-textarea" placeholder="ここにコードを記載してください">%s</textarea>',
		isset($option) ? esc_attr($option) : ''
	);
}
function jinr_unit_sp_display_3_callback()
{
	$option = get_option('jinr_unit_sp_display_3');
	echo '<input type="checkbox" id="jinr_unit_sp_display_3" name="jinr_unit_sp_display_3" value="1" ' . checked(1, $option, false) . ' /><label class="a--label-settings" for="jinr_unit_sp_display_3">スマホでも表示する</label>';
}


// カテゴリー４

function jinr_display_category_4_callback()
{
	$option = get_option('jinr_display_category_4');
	echo '<input type="checkbox" id="jinr_display_category_4" name="jinr_display_category_4" value="1" ' . checked(1, $option, false) . ' /><label class="a--label-settings" for="jinr_display_category_4">カテゴリーテスト</label>';
}

function jinr_h2_sponsor_text_4_callback()
{
	$option = get_option('jinr_h2_sponsor_text_4');
	printf(
		'<input type="text" id="jinr_h2_sponsor_text_4" class="a--ads-text" name="jinr_h2_sponsor_text_4" placeholder="ラベルを入力してください（例：スポンサーリンク）" value="%s" />',
		isset($option) ? esc_attr($option) : ''
	);
}
function jinr_h2_ads_code_4_callback()
{
	$option = get_option('jinr_h2_ads_code_4');
	printf(
		'<textarea name="jinr_h2_ads_code_4" class="a--ads-textarea a--input-textarea" placeholder="ここにコードを記載してください">%s</textarea>',
		isset($option) ? esc_attr($option) : ''
	);
}
function jinr_h2_sp_display_4_callback()
{
	$option = get_option('jinr_h2_sp_display_4');
	echo '<input type="checkbox" id="jinr_h2_sp_display_4" name="jinr_h2_sp_display_4" value="1" ' . checked(1, $option, false) . ' /><label class="a--label-settings" for="jinr_h2_sp_display_4">スマホでも表示する</label>';
}

function jinr_finish_sponsor_text_4_callback()
{
	$option = get_option('jinr_finish_sponsor_text_4');
	printf(
		'<input type="text" id="jinr_finish_sponsor_text_4" class="a--ads-text" name="jinr_finish_sponsor_text_4" placeholder="ラベルを入力してください（例：スポンサーリンク）" value="%s" />',
		isset($option) ? esc_attr($option) : ''
	);
}
function jinr_finish_ads_code_01_4_callback()
{
	$option = get_option('jinr_finish_ads_code_01_4');
	printf(
		'<textarea name="jinr_finish_ads_code_01_4" class="a--ads-textarea a--input-textarea" placeholder="ここにコードを記載してください">%s</textarea>',
		isset($option) ? esc_attr($option) : ''
	);
}
function jinr_finish_sp_display_01_4_callback()
{
	$option = get_option('jinr_finish_sp_display_01_4');
	echo '<input type="checkbox" id="jinr_finish_sp_display_01_4" name="jinr_finish_sp_display_01_4" value="1" ' . checked(1, $option, false) . ' /><label class="a--label-settings" for="jinr_finish_sp_display_01_4">スマホでも表示する</label>';
}
function jinr_finish_ads_code_02_4_callback()
{
	$option = get_option('jinr_finish_ads_code_02_4');
	printf(
		'<textarea name="jinr_finish_ads_code_02_4" class="a--ads-textarea a--input-textarea" placeholder="ここにコードを記載してください">%s</textarea>',
		isset($option) ? esc_attr($option) : ''
	);
}
function jinr_finish_sp_display_02_4_callback()
{
	$option = get_option('jinr_finish_sp_display_02_4');
	echo '<input type="checkbox" id="jinr_finish_sp_display_02_4" name="jinr_finish_sp_display_02_4" value="1" ' . checked(1, $option, false) . ' /><label class="a--label-settings" for="jinr_finish_sp_display_02_4">スマホでも表示する</label>';
}

function jinr_related_sponsor_text_4_callback()
{
	$option = get_option('jinr_related_sponsor_text_4');
	printf(
		'<input type="text" id="jinr_related_sponsor_text_4" class="a--ads-text" name="jinr_related_sponsor_text_4" placeholder="ラベルを入力してください（例：スポンサーリンク）" value="%s" />',
		isset($option) ? esc_attr($option) : ''
	);
}
function jinr_related_ads_code_01_4_callback()
{
	$option = get_option('jinr_related_ads_code_01_4');
	printf(
		'<textarea name="jinr_related_ads_code_01_4" class="a--ads-textarea a--input-textarea" placeholder="ここにコードを記載してください">%s</textarea>',
		isset($option) ? esc_attr($option) : ''
	);
}
function jinr_related_sp_display_01_4_callback()
{
	$option = get_option('jinr_related_sp_display_01_4');
	echo '<input type="checkbox" id="jinr_related_sp_display_01_4" name="jinr_related_sp_display_01_4" value="1" ' . checked(1, $option, false) . ' /><label class="a--label-settings" for="jinr_related_sp_display_01_4">スマホでも表示する</label>';
}
function jinr_related_ads_code_02_4_callback()
{
	$option = get_option('jinr_related_ads_code_02_4');
	printf(
		'<textarea name="jinr_related_ads_code_02_4" class="a--ads-textarea a--input-textarea" placeholder="ここにコードを記載してください">%s</textarea>',
		isset($option) ? esc_attr($option) : ''
	);
}
function jinr_related_sp_display_02_4_callback()
{
	$option = get_option('jinr_related_sp_display_02_4');
	echo '<input type="checkbox" id="jinr_related_sp_display_02_4" name="jinr_related_sp_display_02_4" value="1" ' . checked(1, $option, false) . ' /><label class="a--label-settings" for="jinr_related_sp_display_02_4">スマホでも表示する</label>';
}

function jinr_unit_sponsor_text_4_callback()
{
	$option = get_option('jinr_unit_sponsor_text_4');
	printf(
		'<input type="text" id="jinr_unit_sponsor_text_4" class="a--ads-text" name="jinr_unit_sponsor_text_4" placeholder="ラベルを入力してください（例：スポンサーリンク）" value="%s" />',
		isset($option) ? esc_attr($option) : ''
	);
}
function jinr_unit_ads_code_4_callback()
{
	$option = get_option('jinr_unit_ads_code_4');
	printf(
		'<textarea name="jinr_unit_ads_code_4" class="a--ads-textarea a--input-textarea" placeholder="ここにコードを記載してください">%s</textarea>',
		isset($option) ? esc_attr($option) : ''
	);
}
function jinr_unit_sp_display_4_callback()
{
	$option = get_option('jinr_unit_sp_display_4');
	echo '<input type="checkbox" id="jinr_unit_sp_display_4" name="jinr_unit_sp_display_4" value="1" ' . checked(1, $option, false) . ' /><label class="a--label-settings" for="jinr_unit_sp_display_4">スマホでも表示する</label>';
}

function jinr_ads_settings_init()
{
	add_settings_section(
		'jinr_basic_section',
		'',
		'',
		'jinr_basic_setting'
	);
}
add_action('admin_init', 'jinr_ads_settings_init');

function jinr_categoy_setting_field()
{
	$categories = get_categories();
	$array = array('0' => '未選択');
	foreach ($categories as $category) {
		$array = $array + array($category->term_id => $category->name);
	}

	for ($i = 1; $i <= 4; $i++) {
		add_settings_field(
			'jinr_choise_category' . $i . '',
			'',
			'jinr_choise_category' . $i . '_callback',
			'jinr_basic_setting',
			'jinr_basic_section',
			array(
				'options' => $array
			)
		);
		register_setting('jinr_config', 'jinr_choise_category' . $i . '');
	}
	if (isset($_POST["jinr_choise_category_1"])) {
		update_option('jinr_choise_category_1', $_POST['jinr_choise_category_1']);
	}
	if (isset($_POST["jinr_choise_category_2"])) {
		update_option('jinr_choise_category_2', $_POST['jinr_choise_category_2']);
	}
	if (isset($_POST["jinr_choise_category_3"])) {
		update_option('jinr_choise_category_3', $_POST['jinr_choise_category_3']);
	}
	if (isset($_POST["jinr_choise_category_4"])) {
		update_option('jinr_choise_category_4', $_POST['jinr_choise_category_4']);
	}
}
add_action('admin_init', 'jinr_categoy_setting_field');

function jinr_choise_category_1_callback($args)
{
	$option_name = 'jinr_choise_category_1';
	$option = get_option($option_name);
	if ($option == '') {
		update_option($option_name, '0');
	} else {
		if (isset($_POST["jinr_choise_category_1"])) {
			update_option('jinr_choise_category_1', $_POST['jinr_choise_category_1']);
		}
	}

	print '<select name="jinr_choise_category_1" id="jinr_choise_category_1">';
	foreach ($args as $val => $title)
		printf(
			'<option value="%1$s" %2$s>%3$s</option>',
			$val,
			selected($val, $option, false),
			$title
		);
	print '</select>';
}
function jinr_choise_category_2_callback($args)
{
	$option_name = 'jinr_choise_category_2';
	$option = get_option($option_name);
	if ($option == '') {
		update_option($option_name, '0');
	} else {
		if (isset($_POST["jinr_choise_category_2"])) {
			update_option('jinr_choise_category_2', $_POST['jinr_choise_category_2']);
		}
	}

	print '<select name="jinr_choise_category_2" id="jinr_choise_category_2">';
	foreach ($args as $val => $title)
		printf(
			'<option value="%1$s" %2$s>%3$s</option>',
			$val,
			selected($val, $option, false),
			$title
		);
	print '</select>';
}
function jinr_choise_category_3_callback($args)
{
	$option_name = 'jinr_choise_category_3';
	$option = get_option($option_name);
	if ($option == '') {
		update_option($option_name, '0');
	} else {
		if (isset($_POST["jinr_choise_category_3"])) {
			update_option('jinr_choise_category_3', $_POST['jinr_choise_category_3']);
		}
	}

	print '<select name="jinr_choise_category_3" id="jinr_choise_category_3">';
	foreach ($args as $val => $title)
		printf(
			'<option value="%1$s" %2$s>%3$s</option>',
			$val,
			selected($val, $option, false),
			$title
		);
	print '</select>';
}
function jinr_choise_category_4_callback($args)
{
	$option_name = 'jinr_choise_category_4';
	$option = get_option($option_name);
	if ($option == '') {
		update_option($option_name, '0');
	} else {
		if (isset($_POST["jinr_choise_category_4"])) {
			update_option('jinr_choise_category_4', $_POST['jinr_choise_category_4']);
		}
	}

	print '<select name="jinr_choise_category_4" id="jinr_choise_category_4">';
	foreach ($args as $val => $title)
		printf(
			'<option value="%1$s" %2$s>%3$s</option>',
			$val,
			selected($val, $option, false),
			$title
		);
	print '</select>';
}

// アフィリエイトタグのコールバック
function define_dynamic_function1($i)
{
	$callback = function () use ($i) {
		$option = get_option('jinr_aff' . $i . '_register_name');
		$html = '<input type="text" id="jinr_aff' . $i . '_register_name" class="a--ads-text" name="jinr_aff' . $i . '_register_name" placeholder="登録名を入力してください" value="' . (isset($option) ? esc_attr($option) : '') . '" />';
		echo $html;
	};
	return $callback;
}
function define_dynamic_function2($i)
{
	$callback = function () use ($i) {
		$option = get_option('jinr_aff' . $i . '_code');
		$html = sprintf(
			'<textarea name="jinr_aff' . $i . '_code" class="a--input-textarea a--input-textarea-afftag" placeholder="ここにコードを記載してください">%s</textarea>',
			isset($option) ? esc_attr($option) : ''
		);
		echo $html;
	};
	return $callback;
}

// 有料コンテンツブロックの出力コールバック
function jinr_paidpost_subscription_check_callback()
{
	$option = get_option('jinr_paidpost_subscription_check');
	if ($option === false) {
		update_option('jinr_paidpost_subscription_check', '');
		$option = get_option('jinr_paidpost_subscription_check');
	}
	echo '<input type="checkbox" id="jinr_paidpost_subscription_check" name="jinr_paidpost_subscription_check" value="1" ' . checked(1, $option, false) . ' /><label class="a--label-settings" for="jinr_paidpost_subscription_check">サブスクリプションを利用</label>';
}
function jinr_paidpost_secret_key_callback()
{
	$option = get_option('jinr_paidpost_secret_key');
	printf(
		'<input type="text" id="jinr_paidpost_secret_key" class="a--input-text" name="jinr_paidpost_secret_key" placeholder="Stripeシークレットキー" value="%s" />',
		isset($option) ? esc_attr($option) : ''
	);
}

function jinr_paidpost_release_key_callback()
{
	$option = get_option('jinr_paidpost_release_key');
	printf(
		'<input type="text" id="jinr_paidpost_release_key" class="a--input-text" name="jinr_paidpost_release_key" placeholder="Stripe公開キー" value="%s" />',
		isset($option) ? esc_attr($option) : ''
	);
}


// AJAX アクションを登録
add_action('wp_ajax_jinr_search_posts_by_keyword', 'jinr_search_posts_by_keyword');
add_action('wp_ajax_nopriv_jinr_search_posts_by_keyword', 'jinr_search_posts_by_keyword');

// JavaScript をキューに追加
function jinr_aff_enqueue_scripts()
{
	wp_enqueue_script('jinr-settings', get_template_directory_uri() . '/lib/js/jinr-settings.js', array('jquery'), false, true);
	wp_localize_script('jinr-settings', 'my_ajax_object', array('ajax_url' => admin_url('admin-ajax.php')));
}
add_action('admin_enqueue_scripts', 'jinr_aff_enqueue_scripts');

function jinr_search_widgets_by_keyword($keyword)
{
	// ウィジェットエリアのIDを格納する配列
	$sidebar_ids = array(
		'toppage-widget',
		'post-start-widget',
		'post-end-widget',
		'post-top-widget',
		'post-bottom-widget',
		'relatedpost-bottom-widget',
		'footer-widget',
		'sidebar',
		'sidebar-tracking',
		'hamburger-widget',
	);

	// 改行とキャリッジリターンを削除
	$keyword = str_replace(array("\n", "\r", " "), '', $keyword);

	// 各ウィジェットエリアをループして検索を行う
	$false_count = 0;
	if (!empty($keyword)) {
		foreach ($sidebar_ids as $sidebar_id) {
			// ウィジェットエリアの出力をバッファリング開始
			ob_start();

			// ウィジェットエリアをレンダリング
			dynamic_sidebar($sidebar_id);

			// バッファリングされたコンテンツを取得し、バッファをクリア
			$sidebar_output = ob_get_clean();

			// decoding="async" および loading="lazy" の文字列を削除
			$sidebar_output = str_replace('decoding="async"', '', $sidebar_output);
			$sidebar_output = str_replace('loading="lazy"', '', $sidebar_output);
			$sidebar_output = str_replace(array("\n", "\r", " "), '', $sidebar_output);

			//htmlタグを表示
			$sidebar_output = esc_html($sidebar_output);

			// ウィジェットエリア内で$keywordが含まれているかどうかを確認
			if (strpos($sidebar_output, $keyword) !== false) {
				if ($false_count === 0) {
					echo '<div class="a--using-article-label">利用しているウィジェットエリア</div><ul>';
				}
				if ($sidebar_id == 'toppage-widget') {
					$sidebar_id = 'トップページ上部';
				} elseif ($sidebar_id == 'post-start-widget') {
					$sidebar_id = '記事はじめ';
				} elseif ($sidebar_id == 'post-end-widget') {
					$sidebar_id = '記事おわり';
				} elseif ($sidebar_id == 'post-top-widget') {
					$sidebar_id = '記事上';
				} elseif ($sidebar_id == 'post-bottom-widget') {
					$sidebar_id = '記事下';
				} elseif ($sidebar_id == 'relatedpost-bottom-widget') {
					$sidebar_id = '関連記事下';
				} elseif ($sidebar_id == 'footer-widget') {
					$sidebar_id = 'フッター';
				} elseif ($sidebar_id == 'sidebar') {
					$sidebar_id = 'サイドバー';
				} elseif ($sidebar_id == 'sidebar-tracking') {
					$sidebar_id = 'サイドバー【追尾】';
				} elseif ($sidebar_id == 'hamburger-widget') {
					$sidebar_id = 'ハンバーガー';
				}
				echo '<li>' . $sidebar_id . '</li>';
				$found_posts = true;
				$false_count++;
			}
		}
	}

	if ($false_count === 0) {
		echo '<div class="a--using-article-label">利用しているウィジェットエリア</div><span>該当するウィジェットエリアが見つかりませんでした。</span>';
	} else {
		echo '</ul>';
	}
}



function jinr_search_posts_by_keyword()
{
	// キーワードを取得
	$keyword = isset($_POST['keyword']) ? $_POST['keyword'] : '';

	// 改行とキャリッジリターンを削除
	$keyword = str_replace(array("\n", "\r", " "), '', $keyword);

	// 検索条件を設定
	$args = array(
		'post_type' => 'any',
		'posts_per_page' => -1, // すべての一致する記事を取得する
	);

	// WP_Query オブジェクトを作成
	$query = new WP_Query($args);

	// 記事が見つかった場合
	$false_count = 0;
	$found_posts = false;
	if (!empty($keyword)) {
		if ($query->have_posts()) {
			while ($query->have_posts()) {
				$query->the_post();

				// 記事本文からキーワードを検索
				$post_content = get_the_content();
				$post_content = apply_filters('the_content', $post_content);

				// decoding="async" および loading="lazy" の文字列を削除
				$post_content = str_replace('decoding="async"', '', $post_content);
				$post_content = str_replace('loading="lazy"', '', $post_content);
				$post_content = str_replace(array("\n", "\r", " "), '', $post_content);
				$post_content = esc_html($post_content);

				if (strpos($post_content, $keyword) !== false) {
					if ($false_count === 0) {
						echo '<div class="a--using-article-label">利用している記事</div><ul>';
					}
					echo '<li><a href="' . get_the_permalink() . '" target="_blank">' . get_the_title() . '</a></li>';
					$found_posts = true;
					$false_count++;
				}
			}
		}
	}

	if ($false_count !== 0) {
		echo '</ul>';
	}

	if (!$found_posts) {
		echo '<div class="a--using-article-label">利用している記事</div><span>該当する記事が見つかりませんでした。</span>';
	}

	// ウィジェットを検索
	jinr_search_widgets_by_keyword($keyword);

	// メインクエリをリセット
	wp_reset_postdata();

	// 終了
	wp_die();
}


function add_dynamic_settings_field($i)
{
	$callback1 = define_dynamic_function1($i);
	$callback2 = define_dynamic_function2($i);
	add_settings_field(
		'jinr_aff' . $i . '_register_name',
		'登録名',
		$callback1,
		'jinr_aff' . $i . '_setting',
		'jinr_aff' . $i . '_section'
	);
	add_settings_field(
		'jinr_aff' . $i . '_code',
		'アフィリエイトタグ',
		$callback2,
		'jinr_aff' . $i . '_setting',
		'jinr_aff' . $i . '_section'
	);
}

add_action('admin_init', function () {
	//アフィリエイト管理
	for ($i = 1; $i <= 30; $i++) {
		add_dynamic_settings_field($i);
		add_settings_field(
			'jinr_aff' . $i . '_code',
			'',
			'',
			'jinr_aff' . $i . '_setting',
			'jinr_aff' . $i . '_section'
		);
		register_setting('jinr_reading', 'jinr_aff' . $i . '_register_name');
		register_setting('jinr_reading', 'jinr_aff' . $i . '_code');
	}
});
do_action('jinr_hook');

function jinr_setting()
{
?>
	<div id="JinrSettings">
		<div id="JinrSettingsInner">
			<div class="o--header-list">
				<ul class="o--header-list-inner">
					<li class="c--header-item">
						<h1 class="a--settings-title">
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 694.52 190.81">
								<rect x="185.6" y="4.55" width="23.8" height="184.21" fill="#fff" />
								<path d="M96.63,118.08c0,17.8-5.89,50.18-45.32,50.18-10.74,0-24.87-3.69-34.47-14.46L0,170.64c12.21,13.06,30,20.17,51.31,20.17,42.63,0,69.12-27.39,69.12-71.48V4.55H96.63Z" fill="#fff" />
								<path d="M298.37,72.73c0-17.8,5.89-50.18,45.32-50.18S389,54.93,389,72.73v116h23.8V71.48C412.81,27.39,386.32,0,343.69,0s-69.12,27.39-69.12,71.48V188.76h23.8Z" fill="#fff" />
								<path d="M637.23,119.7a.47.47,0,0,1,.26-.72,60.73,60.73,0,0,0,27.06-16.06c10-10.44,15.64-25.88,15.33-40.67-.36-18-7.34-33.73-19-44.37C648.66,6.68,631.62,0,612.27,0c-40.16,0-69.12,25.31-69.12,68.32V188.76H567V74.62c0-19.59,4.12-52.08,45.32-52.08,14.9,0,25.85,4.48,32.73,11.81,9,9.59,16.72,27.08,8.33,47.57-6.87,16.76-22.89,24-47.81,25.83a.79.79,0,0,0-.63,1.18,603.62,603.62,0,0,0,56.54,79.83h33.09A605.45,605.45,0,0,1,637.23,119.7Z" fill="#fff" />
								<circle cx="478.67" cy="61.26" r="10.96" fill="#fff" />
								<circle cx="478.67" cy="135.19" r="10.96" fill="#fff" />
							</svg>
						</h1>
					</li>
					<li class="c--header-item">

						<a href="https://jinr.jp/manual/promotion/" target="_blank" class="a--header-link">
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 200 200">
								<path d="M180,56.62a6,6,0,0,0-3.64-5.51,53.28,53.28,0,0,0-7.11-2.48V44.46A3,3,0,0,0,167,41.55c-26.39-6.85-50.83-3.79-67,8.38C83.82,37.76,59.39,34.7,33,41.55a3,3,0,0,0-2.24,2.91v4.17a53.28,53.28,0,0,0-7.11,2.48A6,6,0,0,0,20,56.62v96.24a6,6,0,0,0,7.63,5.76c21.15-5.94,45.55-4.87,70.56,3.1a6,6,0,0,0,3.62,0c25-8,49.41-9,70.56-3.1a6,6,0,0,0,7.63-5.76ZM163.25,46.8v93.32c-22.62-5-44.63-2-60.25,8.15V55.09c.19-.12.39-.23.57-.36C117.87,44,139.52,41.14,163.25,46.8Zm-126.5,0c23.73-5.66,45.38-2.8,59.68,7.93.18.13.38.24.57.36v93.2c-10.65-6.94-24.26-10.55-39-10.55a98.6,98.6,0,0,0-21.22,2.38ZM26,152.86V56.62a49.21,49.21,0,0,1,4.74-1.74v89a3,3,0,0,0,3.75,2.91c23.34-6.06,46.14-3.1,61.24,7.88C71.09,147.58,47.07,146.92,26,152.86Zm148,0c-21.07-5.93-45.11-5.26-69.75,1.88,15.1-11,37.91-14,61.26-7.9a3,3,0,0,0,3.75-2.91v-89A50.46,50.46,0,0,1,174,56.62Z" />
							</svg>使い方マニュアルを読む
						</a>
					</li>
				</ul>
			</div>
			<input id="JinrSeo" type="radio" name="tab_item" checked>
			<label class="a--label-tabs" for="JinrSeo">SEO設定</label>

			<input id="JinrAds" type="radio" name="tab_item">
			<label class="a--label-tabs" for="JinrAds">広告管理</label>

			<input id="JinrTags" type="radio" name="tab_item">
			<label class="a--label-tabs" for="JinrTags">計測タグ設定</label>

			<input id="JinrAffTags" type="radio" name="tab_item">
			<label class="a--label-tabs" for="JinrAffTags">アフィリエイトタグ管理</label>

			<input id="JinrPaidpost" type="radio" name="tab_item">
			<label class="a--label-tabs" for="JinrPaidpost">有料コンテンツブロックの設定</label>

			<div class="o--settings-wrapper">
				<div class="a--notice"><?php jinr_save_settings_callback(); ?></div>
				<form class="o--settings-wrapper-inner" method="post" action="options.php">
					<div id="JinrFirst" class="o--settings-fields">
						<div class="o--settings-explain">
							プラグインを使うことなく、JIN:Rテーマ機能で「SEO設定」を完結できます。詳しい使い方の解説は<a href="https://jinr.jp/manual/seo-setting-3/" target="_blank">こちら</a>
						</div>
						<h2 class="a--settings-subtitle">noindex設定</h2>
						<div class="o--settings-contents">
							<div class="c--settings-contents">
								<?php jinr_top_next_noindex_callback(); ?>
							</div>
							<div class="c--settings-contents">
								<?php jinr_category_noindex_callback(); ?>
								<div class="c--settings-box">
									<span class="a--settings-subtext">除外するカテゴリーのIDを入力</span>
									<?php jinr_category_id_noindex_callback(); ?>
								</div>
								<?php jinr_category_next_noindex_callback(); ?>
							</div>
							<div class="c--settings-contents">
								<?php jinr_tag_noindex_callback(); ?>
								<div class="c--settings-box">
									<span class="a--settings-subtext">除外するタグのIDを入力</span>
									<?php jinr_tag_id_noindex_callback(); ?>
								</div>
								<?php jinr_tag_next_noindex_callback(); ?>
							</div>
							<div class="c--settings-contents">
								<?php jinr_date_archive_noindex_callback(); ?>
								<?php jinr_author_noindex_callback(); ?>
								<?php jinr_search_page_noindex_callback(); ?>
								<?php jinr_image_page_noindex_callback(); ?>
							</div>
						</div>
						<h2 class="a--settings-subtitle">パンくずリスト</h2>
						<div class="o--settings-contents">
							<div class="c--settings-contents">
								<div class="u--padding-bottom">
									<p class="a--settings-text">「HOME」を書き換える</p>
									<?php jinr_breadcrumb_change_text_callback(); ?>
								</div>
								<?php jinr_breadcrumb_display_callback(); ?>
							</div>
						</div>

						<h2 class="a--settings-subtitle">トップページの設定</h2>
						<div class="o--settings-contents">
							<div class="c--settings-contents">
								<div class="u--padding-bottom">
									<p class="a--settings-text">メタキーワード</p>
									<?php jinr_top_meta_keyword_callback(); ?>
								</div>
							</div>
						</div>

						<h2 class="a--settings-subtitle">見かけ上のサイトタイトルを設定</h2>
						<p class="a--settings-subtext">SEOで反映されるタイトルとは別に、サイトデザイン上で反映されるタイトルを設定できます。</p>
						<div class="o--settings-contents">
							<div class="c--settings-contents">
								<div class="u--padding-bottom">
									<p class="a--settings-text">見かけ上のタイトル</p>
									<?php jinr_apparently_title_callback(); ?>
								</div>
								<div class="u--padding-bottom">
									<p class="a--settings-text">見かけ上のサブタイトル</p>
									<?php jinr_apparently_subtitle_callback(); ?>
								</div>
							</div>
						</div>
						<h2 class="a--settings-subtitle">記事のtitleタグの設定</h2>
						<div class="o--settings-contents">
							<div class="c--settings-contents">
								<div class="u--padding-bottom">
									<p class="a--settings-text">タイトルの区切り</p>
									<?php jinr_separation_title_callback(); ?>
								</div>
								<?php jinr_title_customize_callback(); ?>
							</div>
						</div>
						<h2 class="a--settings-subtitle">その他</h2>
						<div class="o--settings-contents">
							<div class="c--settings-contents">
								<?php jinr_commentrss_display_callback(); ?>
							</div>
						</div>
					</div>
					<div id="JinrSecond" class="o--settings-fields">
						<div class="o--settings-explain">
							ここで設定した広告コードは、すべての投稿ページ（もしくは特定カテゴリ）に反映されます。コードを変更すると全ページに反映されるので、広告張り替えの手間を最小化できます。詳しい使い方は<a href="https://jinr.jp/manual/promotion/" target="_blank">こちら</a>
						</div>
						<h2 class="a--settings-subtitle u--padding-bottom">
							広告タグの設置
						</h2>
						<input id="Ads01" type="radio" name="tab_item" checked>
						<label class="a--ads-tabs" for="Ads01">全体設定</label>

						<input id="Ads02" type="radio" name="tab_item">
						<label class="a--ads-tabs" for="Ads02">カテゴリー01</label>

						<input id="Ads03" type="radio" name="tab_item">
						<label class="a--ads-tabs" for="Ads03">カテゴリー02</label>

						<input id="Ads04" type="radio" name="tab_item">
						<label class="a--ads-tabs" for="Ads04">カテゴリー03</label>

						<input id="Ads05" type="radio" name="tab_item">
						<label class="a--ads-tabs" for="Ads05">カテゴリー04</label>

						<div id="JinrAds01" class="o--ads-fields">
							<div class="o--settings-contents">
								<div class="c--settings-contents">
									<div class="c--settings-box">
										<p class="a--settings-text">はじめのH2前</p>
										<?php jinr_h2_sponsor_text_callback(); ?>
										<div class="o--ads-contents">
											<div class="c--ads-contents">
												<?php jinr_h2_ads_code_callback(); ?>
												<?php jinr_h2_sp_display_callback(); ?>
											</div>
										</div>
									</div>
									<div class="c--settings-box">
										<p class="a--settings-text">記事おわり</p>
										<?php jinr_finish_sponsor_text_callback(); ?>
										<div class="o--ads-contents">
											<div class="c--ads-contents">
												<?php jinr_finish_ads_code_01_callback(); ?>
												<?php jinr_finish_sp_display_01_callback(); ?>
											</div>
											<div class="c--ads-contents">
												<?php jinr_finish_ads_code_02_callback(); ?>
												<?php jinr_finish_sp_display_02_callback(); ?>
											</div>
										</div>
									</div>
									<div class="c--settings-box">
										<p class="a--settings-text">関連記事上</p>
										<?php jinr_related_sponsor_text_callback(); ?>
										<div class="o--ads-contents">
											<div class="c--ads-contents">
												<?php jinr_related_ads_code_01_callback(); ?>
												<?php jinr_related_sp_display_01_callback(); ?>
											</div>
											<div class="c--ads-contents">
												<?php jinr_related_ads_code_02_callback(); ?>
												<?php jinr_related_sp_display_02_callback(); ?>
											</div>
										</div>
									</div>
									<div class="c--settings-box">
										<p class="a--settings-text">Multiplex広告</p>
										<?php jinr_unit_sponsor_text_callback(); ?>
										<div class="o--ads-contents">
											<div class="c--ads-contents">
												<?php jinr_unit_ads_code_callback(); ?>
												<?php jinr_unit_sp_display_callback(); ?>
											</div>
										</div>
									</div>

								</div>
							</div>
						</div>
						<div id="JinrAds02" class="o--ads-fields">
							<div class="o--settings-contents">
								<div class="c--settings-contents">
									<div>
										<p class="a--settings-text">カテゴリーを選択</p>
										<?php
										$categories = get_categories();
										$array = array('0' => '未選択');
										foreach ($categories as $category) {
											$array = $array + array($category->term_id => $category->name);
										}
										ksort($array);
										jinr_choise_category_1_callback($array);
										?>
									</div>
									<div class="c--settings-box">
										<p class="a--settings-text">はじめのH2前</p>
										<?php jinr_h2_sponsor_text_1_callback(); ?>
										<div class="o--ads-contents">
											<div class="c--ads-contents">
												<?php jinr_h2_ads_code_1_callback(); ?>
												<?php jinr_h2_sp_display_1_callback(); ?>
											</div>
										</div>
									</div>
									<div class="c--settings-box">
										<p class="a--settings-text">記事おわり</p>
										<?php jinr_finish_sponsor_text_1_callback(); ?>
										<div class="o--ads-contents">
											<div class="c--ads-contents">
												<?php jinr_finish_ads_code_01_1_callback(); ?>
												<?php jinr_finish_sp_display_01_1_callback(); ?>
											</div>
											<div class="c--ads-contents">
												<?php jinr_finish_ads_code_02_1_callback(); ?>
												<?php jinr_finish_sp_display_02_1_callback(); ?>
											</div>
										</div>
									</div>
									<div class="c--settings-box">
										<p class="a--settings-text">関連記事上</p>
										<?php jinr_related_sponsor_text_1_callback(); ?>
										<div class="o--ads-contents">
											<div class="c--ads-contents">
												<?php jinr_related_ads_code_01_1_callback(); ?>
												<?php jinr_related_sp_display_01_1_callback(); ?>
											</div>
											<div class="c--ads-contents">
												<?php jinr_related_ads_code_02_1_callback(); ?>
												<?php jinr_related_sp_display_02_1_callback(); ?>
											</div>
										</div>
									</div>
									<div class="c--settings-box">
										<p class="a--settings-text">Multiplex広告</p>
										<?php jinr_unit_sponsor_text_1_callback(); ?>
										<div class="o--ads-contents">
											<div class="c--ads-contents">
												<?php jinr_unit_ads_code_1_callback(); ?>
												<?php jinr_unit_sp_display_1_callback(); ?>
											</div>
										</div>
									</div>

								</div>
							</div>
						</div>
						<div id="JinrAds03" class="o--ads-fields">
							<div class="o--settings-contents">
								<div class="c--settings-contents">
									<div>
										<p class="a--settings-text">カテゴリーを選択</p>
										<?php
										$categories = get_categories();
										$array = array('0' => '未選択');
										foreach ($categories as $category) {
											$array = $array + array($category->term_id => $category->name);
										}
										ksort($array);
										jinr_choise_category_2_callback($array);
										?>
									</div>
									<div class="c--settings-box">
										<p class="a--settings-text">はじめのH2前</p>
										<?php jinr_h2_sponsor_text_2_callback(); ?>
										<div class="o--ads-contents">
											<div class="c--ads-contents">
												<?php jinr_h2_ads_code_2_callback(); ?>
												<?php jinr_h2_sp_display_2_callback(); ?>
											</div>
										</div>
									</div>
									<div class="c--settings-box">
										<p class="a--settings-text">記事おわり</p>
										<?php jinr_finish_sponsor_text_2_callback(); ?>
										<div class="o--ads-contents">
											<div class="c--ads-contents">
												<?php jinr_finish_ads_code_01_2_callback(); ?>
												<?php jinr_finish_sp_display_01_2_callback(); ?>
											</div>
											<div class="c--ads-contents">
												<?php jinr_finish_ads_code_02_2_callback(); ?>
												<?php jinr_finish_sp_display_02_2_callback(); ?>
											</div>
										</div>
									</div>
									<div class="c--settings-box">
										<p class="a--settings-text">関連記事上</p>
										<?php jinr_related_sponsor_text_2_callback(); ?>
										<div class="o--ads-contents">
											<div class="c--ads-contents">
												<?php jinr_related_ads_code_01_2_callback(); ?>
												<?php jinr_related_sp_display_01_2_callback(); ?>
											</div>
											<div class="c--ads-contents">
												<?php jinr_related_ads_code_02_2_callback(); ?>
												<?php jinr_related_sp_display_02_2_callback(); ?>
											</div>
										</div>
									</div>
									<div class="c--settings-box">
										<p class="a--settings-text">Multiplex広告</p>
										<?php jinr_unit_sponsor_text_2_callback(); ?>
										<div class="o--ads-contents">
											<div class="c--ads-contents">
												<?php jinr_unit_ads_code_2_callback(); ?>
												<?php jinr_unit_sp_display_2_callback(); ?>
											</div>
										</div>
									</div>

								</div>
							</div>
						</div>
						<div id="JinrAds04" class="o--ads-fields">
							<div class="o--settings-contents">
								<div class="c--settings-contents">
									<div>
										<p class="a--settings-text">カテゴリーを選択</p>
										<?php
										$categories = get_categories();
										$array = array('0' => '未選択');
										foreach ($categories as $category) {
											$array = $array + array($category->term_id => $category->name);
										}
										ksort($array);
										jinr_choise_category_3_callback($array);
										?>
									</div>
									<div class="c--settings-box">
										<p class="a--settings-text">はじめのH2前</p>
										<?php jinr_h2_sponsor_text_3_callback(); ?>
										<div class="o--ads-contents">
											<div class="c--ads-contents">
												<?php jinr_h2_ads_code_3_callback(); ?>
												<?php jinr_h2_sp_display_3_callback(); ?>
											</div>
										</div>
									</div>
									<div class="c--settings-box">
										<p class="a--settings-text">記事おわり</p>
										<?php jinr_finish_sponsor_text_3_callback(); ?>
										<div class="o--ads-contents">
											<div class="c--ads-contents">
												<?php jinr_finish_ads_code_01_3_callback(); ?>
												<?php jinr_finish_sp_display_01_3_callback(); ?>
											</div>
											<div class="c--ads-contents">
												<?php jinr_finish_ads_code_02_3_callback(); ?>
												<?php jinr_finish_sp_display_02_3_callback(); ?>
											</div>
										</div>
									</div>
									<div class="c--settings-box">
										<p class="a--settings-text">関連記事上</p>
										<?php jinr_related_sponsor_text_3_callback(); ?>
										<div class="o--ads-contents">
											<div class="c--ads-contents">
												<?php jinr_related_ads_code_01_3_callback(); ?>
												<?php jinr_related_sp_display_01_3_callback(); ?>
											</div>
											<div class="c--ads-contents">
												<?php jinr_related_ads_code_02_3_callback(); ?>
												<?php jinr_related_sp_display_02_3_callback(); ?>
											</div>
										</div>
									</div>
									<div class="c--settings-box">
										<p class="a--settings-text">Multiplex広告</p>
										<?php jinr_unit_sponsor_text_3_callback(); ?>
										<div class="o--ads-contents">
											<div class="c--ads-contents">
												<?php jinr_unit_ads_code_3_callback(); ?>
												<?php jinr_unit_sp_display_3_callback(); ?>
											</div>
										</div>
									</div>

								</div>
							</div>
						</div>
						<div id="JinrAds05" class="o--ads-fields">
							<div class="o--settings-contents">
								<div class="c--settings-contents">
									<div>
										<p class="a--settings-text">カテゴリーを選択</p>
										<?php
										$categories = get_categories();
										$array = array('0' => '未選択');
										foreach ($categories as $category) {
											$array = $array + array($category->term_id => $category->name);
										}
										ksort($array);
										jinr_choise_category_4_callback($array);
										?>
									</div>
									<div class="c--settings-box">
										<p class="a--settings-text">はじめのH2前</p>
										<?php jinr_h2_sponsor_text_4_callback(); ?>
										<div class="o--ads-contents">
											<div class="c--ads-contents">
												<?php jinr_h2_ads_code_4_callback(); ?>
												<?php jinr_h2_sp_display_4_callback(); ?>
											</div>
										</div>
									</div>
									<div class="c--settings-box">
										<p class="a--settings-text">記事おわり</p>
										<?php jinr_finish_sponsor_text_4_callback(); ?>
										<div class="o--ads-contents">
											<div class="c--ads-contents">
												<?php jinr_finish_ads_code_01_4_callback(); ?>
												<?php jinr_finish_sp_display_01_4_callback(); ?>
											</div>
											<div class="c--ads-contents">
												<?php jinr_finish_ads_code_02_4_callback(); ?>
												<?php jinr_finish_sp_display_02_4_callback(); ?>
											</div>
										</div>
									</div>
									<div class="c--settings-box">
										<p class="a--settings-text">関連記事上</p>
										<?php jinr_related_sponsor_text_4_callback(); ?>
										<div class="o--ads-contents">
											<div class="c--ads-contents">
												<?php jinr_related_ads_code_01_4_callback(); ?>
												<?php jinr_related_sp_display_01_4_callback(); ?>
											</div>
											<div class="c--ads-contents">
												<?php jinr_related_ads_code_02_4_callback(); ?>
												<?php jinr_related_sp_display_02_4_callback(); ?>
											</div>
										</div>
									</div>
									<div class="c--settings-box">
										<p class="a--settings-text">Multiplex広告</p>
										<?php jinr_unit_sponsor_text_4_callback(); ?>
										<div class="o--ads-contents">
											<div class="c--ads-contents">
												<?php jinr_unit_ads_code_4_callback(); ?>
												<?php jinr_unit_sp_display_4_callback(); ?>
											</div>
										</div>
									</div>

								</div>
							</div>
						</div>
					</div>
					<div id="JinrThird" class="o--settings-fields">
						<h2 class="a--settings-subtitle">
							Google関連サービスのタグ設置
						</h2>
						<div class="o--settings-contents">
							<div class="c--settings-contents">
								<div class="u--padding-bottom">
									<p class="a--settings-text">1 . Googleアドセンスの設置タグ</p>
									<p class="a--settings-subtext">使い方は<a href="https://jinr.jp/manual/google-adsense/" target="_blank">こちら</a></p>
									<?php jinr_google_adsense_tag_callback(); ?>
								</div>
								<div class="u--padding-bottom">
									<p class="a--settings-text">2 . Googleアナリティクスの計測タグ</p>
									<p class="a--settings-subtext">使い方は<a href="https://jinr.jp/manual/analytics/" target="_blank">こちら</a></p>
									<?php jinr_google_analytics_tag_callback(); ?>
								</div>
								<div>
									<p class="a--settings-text">3 . Search Consoleの計測タグ</p>
									<p class="a--settings-subtext">使い方は<a href="https://jinr.jp/manual/search-console-setting/" target="_blank">こちら</a></p>
									<?php jinr_google_seaech_console_tag_callback(); ?>
								</div>

							</div>
						</div>

						<h2 class="a--settings-subtitle">
							その他のタグ設置
						</h2>
						<div class="o--settings-contents">
							<div class="c--settings-contents">
								<div class="u--padding-bottom">
									<p class="a--settings-text">1 . head内に記載するタグ</p>
									<?php jinr_head_tag_callback(); ?>
								</div>
								<div class="u--padding-bottom">
									<p class="a--settings-text">2 . bodyタグ開始直後に記載するタグ</p>
									<?php jinr_body_start_tag_callback(); ?>
								</div>
								<div>
									<p class="a--settings-text">3 . bodyタグ終了直前に記載するタグ</p>
									<?php jinr_body_finish_tag_callback(); ?>
								</div>
							</div>
						</div>
					</div>
					<div id="JinrFourth" class="o--settings-fields">
						<div class="o--settings-explain">
							アフィリエイトコードを登録すると、JIN:Rの「ボタン」ブロックで呼び出すことが可能。コード変更はボタンにも反映されるため、ボタン広告の一元管理ができます。使い方は「<a href="https://jinr.jp/manual/affiliatecode/" target="_blank">アフィリエイトタグ管理の使い方</a>」を参考にしてください。
						</div>
						<?php
						for ($i = 1; $i <= 30; $i++) {
							$option_value = get_option('jinr_aff' . $i . '_code');
							if ($option_value === "" || $option_value === false) {
								$exist = "";
							} else {
								$exist = "a--aff-used";
							}
							$checked = $i == 1 ? "checked" : "";
							echo '<input id="Aff' . $i . '" type="radio" name="tab_item2" ' . $checked . '>
							<label class="a--ads-tabs a--aff-tabs ' . $exist . '" for="Aff' . $i . '">' . $i . '</label>';
						}
						?>

						<?php
						for ($i = 1; $i <= 30; $i++) {
							$option_value = get_option('jinr_aff' . $i . '_code');
							$keyword = $option_value !== '' ? esc_html($option_value) : '';

							echo '
							<div id="JinrAff' . $i . '" class="o--ads-fields o--aff-field">
								<div class="o--settings-contents">
									<div class="c--settings-contents">
										<p class="a--settings-text">登録タグ ' . $i . '</p>
										<div class="c--settings-box c--aff-box">
											<section class="c--aff-box1">';
							echo call_user_func(define_dynamic_function1($i));
							echo '
												<div class="o--ads-contents">
													<div class="c--ads-contents">';
							echo call_user_func(define_dynamic_function2($i));
							echo '</div>
												</div>
											</section>
											<section class="c--aff-box2">
											<button class="a--check-using-article" data-keyword="' . rawurlencode($keyword) . '" type="button">利用中の記事を検索</button>
												<div class="c--using-article"></div>
											</section>
										</div>
									</div>
								</div>
							</div>';
						}
						?>

					</div>
					<div id="JinrFifth" class="o--settings-fields">
						<div class="o--settings-explain">
							「有料コンテンツ」ブロックで、商品リンクの支払い形式を「継続」（サブスクリプション支払い）にしたい場合は、こちらのチェックを入れてStripeキーを設定をしてください。サブスクリプションサービスの作成例は<a href="https://jinr.jp/manual/online-salon/" target="_blank">こちら</a>
						</div>
						<h2 class="a--settings-subtitle">
							有料コンテンツブロックの設定
						</h2>
						<div class="o--settings-contents">
							<div class="c--settings-contents">
								<?php jinr_paidpost_subscription_check_callback(); ?>
								<div id="JinrSubscriptionKeyWrapper" class="c--settings-box">
									<span class="a--settings-subtext">Stripe公開キー</span>
									<?php jinr_paidpost_release_key_callback(); ?>
									<span class="a--settings-subtext">Stripeシークレットキー</span>
									<?php jinr_paidpost_secret_key_callback(); ?>
								</div>
							</div>
						</div>
					</div>
					<?php settings_fields('jinr_reading'); ?>
					<?php do_settings_sections('jinr_aff_tag_section'); ?>
					<?php submit_button('この設定を保存する'); ?>
					<div class="o--settings-info">
						保存ボタンを押すと「閲覧できません（Forbidden）」で失敗することがあります。
						レンタルサーバーの「WAF設定」というセキュリティによってブロックされてしまっているため、ご利用中のレンタルサーバーにログインして「WAF設定の解除」をお願い致します。
					</div>
				</form>
			</div>
		</div>
	</div>
<?php }

function jinr__title_text()
{
	return get_option('jinr_apparently_title');
}
function jinr__title_subtext()
{
	return get_option('jinr_apparently_subtitle');
}
function jinr__title_sepalater()
{
	return get_option('jinr_separation_title');
}
function jinr_title_customize()
{
	return get_option('jinr_title_customize');
}
function jinr_top_meta_keyword()
{
	return get_option('jinr_top_meta_keyword');
}
function jinr_breadcrumb_change_text()
{
	return get_option('jinr_breadcrumb_change_text');
}
function jinr_breadcrumb_display()
{
	return get_option('jinr_breadcrumb_display');
}
function jinr_top_next_noindex()
{
	return get_option('jinr_top_next_noindex');
}
function jinr_date_archive_noindex()
{
	return get_option('jinr_date_archive_noindex');
}
function jinr_search_page_noindex()
{
	return get_option('jinr_search_page_noindex');
}
function jinr_image_page_noindex()
{
	return get_option('jinr_image_page_noindex');
}
function jinr_author_noindex()
{
	return get_option('jinr_author_noindex');
}
function jinr_category_noindex()
{
	return get_option('jinr_category_noindex');
}
function jinr_category_id_noindex()
{
	return get_option('jinr_category_id_noindex');
}
function jinr_category_next_noindex()
{
	return get_option('jinr_category_next_noindex');
}
function jinr_tag_noindex()
{
	return get_option('jinr_tag_noindex');
}
function jinr_tag_id_noindex()
{
	return get_option('jinr_tag_id_noindex');
}
function jinr_tag_next_noindex()
{
	return get_option('jinr_tag_next_noindex');
}
function jinr_h2_sp_display()
{
	return get_option('jinr_h2_sp_display');
}
function jinr_h2_sponsor_text()
{
	return get_option('jinr_h2_sponsor_text');
}
function jinr_unit_ads_code()
{
	return get_option('jinr_unit_ads_code');
}


// JINR設定の初期値を設定する
if (get_option('jinr_breadcrumb_change_text') === false) {
	update_option('jinr_breadcrumb_change_text', 'HOME');
}
if (get_option('jinr_separation_title') === false) {
	update_option('jinr_separation_title', '｜');
}
if (get_option('jinr_top_next_noindex') === false) {
	update_option('jinr_top_next_noindex', '1');
}
if (get_option('jinr_category_noindex') === false) {
	update_option('jinr_category_noindex', '');
}
if (get_option('jinr_category_next_noindex') === false) {
	update_option('jinr_category_next_noindex', '1');
}
if (get_option('jinr_tag_noindex') === false) {
	update_option('jinr_tag_noindex', '');
}
if (get_option('jinr_tag_next_noindex') === false) {
	update_option('jinr_tag_next_noindex', '1');
}
if (get_option('jinr_date_archive_noindex') === false) {
	update_option('jinr_date_archive_noindex', '1');
}
if (get_option('jinr_image_page_noindex') === false) {
	update_option('jinr_image_page_noindex', '1');
}
if (get_option('jinr_author_noindex') === false) {
	update_option('jinr_author_noindex', '1');
}
if (get_option('jinr_commentrss_display') === false) {
	update_option('jinr_commentrss_display', '1');
}

// 広告管理の「スマホでも表示する」はチェックを入れる
if (get_option('jinr_h2_sp_display') === false) {
	update_option('jinr_h2_sp_display', '1');
}
if (get_option('jinr_finish_sp_display_01') === false) {
	update_option('jinr_finish_sp_display_01', '1');
}
if (get_option('jinr_finish_sp_display_02') === false) {
	update_option('jinr_finish_sp_display_02', '1');
}
if (get_option('jinr_related_sp_display_01') === false) {
	update_option('jinr_related_sp_display_01', '1');
}
if (get_option('jinr_related_sp_display_02') === false) {
	update_option('jinr_related_sp_display_02', '1');
}
if (get_option('jinr_unit_sp_display') === false) {
	update_option('jinr_unit_sp_display', '1');
}

// 各カテゴリーの「スマホでも表示する」のデフォルト値はどうするか
if (get_option('jinr_h2_sp_display_1') === false) {
	update_option('jinr_h2_sp_display_1', '1');
}
if (get_option('jinr_finish_sp_display_01_1') === false) {
	update_option('jinr_finish_sp_display_01_1', '1');
}
if (get_option('jinr_finish_sp_display_02_1') === false) {
	update_option('jinr_finish_sp_display_02_1', '1');
}
if (get_option('jinr_related_sp_display_01_1') === false) {
	update_option('jinr_related_sp_display_01_1', '1');
}
if (get_option('jinr_related_sp_display_02_1') === false) {
	update_option('jinr_related_sp_display_02_1', '1');
}
if (get_option('jinr_unit_sp_display_1') === false) {
	update_option('jinr_unit_sp_display_1', '1');
}

if (get_option('jinr_h2_sp_display_2') === false) {
	update_option('jinr_h2_sp_display_2', '1');
}
if (get_option('jinr_finish_sp_display_01_2') === false) {
	update_option('jinr_finish_sp_display_01_2', '1');
}
if (get_option('jinr_finish_sp_display_02_2') === false) {
	update_option('jinr_finish_sp_display_02_2', '1');
}
if (get_option('jinr_related_sp_display_01_2') === false) {
	update_option('jinr_related_sp_display_01_2', '1');
}
if (get_option('jinr_related_sp_display_02_2') === false) {
	update_option('jinr_related_sp_display_02_2', '1');
}
if (get_option('jinr_unit_sp_display_2') === false) {
	update_option('jinr_unit_sp_display_2', '1');
}

if (get_option('jinr_h2_sp_display_3') === false) {
	update_option('jinr_h2_sp_display_3', '1');
}
if (get_option('jinr_finish_sp_display_01_3') === false) {
	update_option('jinr_finish_sp_display_01_3', '1');
}
if (get_option('jinr_finish_sp_display_02_3') === false) {
	update_option('jinr_finish_sp_display_02_3', '1');
}
if (get_option('jinr_related_sp_display_01_3') === false) {
	update_option('jinr_related_sp_display_01_3', '1');
}
if (get_option('jinr_related_sp_display_02_3') === false) {
	update_option('jinr_related_sp_display_02_3', '1');
}
if (get_option('jinr_unit_sp_display_3') === false) {
	update_option('jinr_unit_sp_display_3', '1');
}

if (get_option('jinr_h2_sp_display_4') === false) {
	update_option('jinr_h2_sp_display_4', '1');
}
if (get_option('jinr_finish_sp_display_01_4') === false) {
	update_option('jinr_finish_sp_display_01_4', '1');
}
if (get_option('jinr_finish_sp_display_02_4') === false) {
	update_option('jinr_finish_sp_display_02_4', '1');
}
if (get_option('jinr_related_sp_display_01_4') === false) {
	update_option('jinr_related_sp_display_01_4', '1');
}
if (get_option('jinr_related_sp_display_02_4') === false) {
	update_option('jinr_related_sp_display_02_4', '1');
}
if (get_option('jinr_unit_sp_display_4') === false) {
	update_option('jinr_unit_sp_display_4', '1');
}
if (get_option('jinr_choise_category_1') === false) {
	update_option('jinr_choise_category_1', '0');
}
if (get_option('jinr_choise_category_2') === false) {
	update_option('jinr_choise_category_2', '0');
}
if (get_option('jinr_choise_category_3') === false) {
	update_option('jinr_choise_category_3', '0');
}
if (get_option('jinr_choise_category_4') === false) {
	update_option('jinr_choise_category_4', '0');
}
