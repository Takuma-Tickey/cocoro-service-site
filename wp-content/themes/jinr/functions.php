<?php

/**
 * JIN:R functions and definitions
 * @package JIN:R
 */
/**
 * テーマの情報を定義
 */
$jinr_theme_data = wp_get_theme();
if (!defined('JINR_THEME_VERSION')) {
	define('JINR_THEME_VERSION', $jinr_theme_data->get('Version'));
}
if (!defined('JINR_PHP_INCLUDE')) {
	define('JINR_PHP_INCLUDE', trailingslashit(get_template_directory()) . 'include/');
}
if (!defined('JINR_CORE_DIR')) {
	define('JINR_CORE_DIR', JINR_PHP_INCLUDE . 'core/');
}
/**
 * jQueryをフッターで読み込み
 */
function jinr_jquery_enqueue()
{
	if (!is_admin()) {
		global $wp_scripts;
		$jquery     = $wp_scripts->registered['jquery-core'];
		$jquery_ver = $jquery->ver;
		$jquery_src = $jquery->src;

		wp_deregister_script('jquery');
		wp_deregister_script('jquery-core');

		wp_register_script('jquery', false, array('jquery-core'), $jquery_ver, true);
		wp_register_script('jquery-core', $jquery_src, array(), $jquery_ver, true);
		wp_enqueue_script('jquery');
		wp_enqueue_script('jquery-core');
	}
}
add_action('wp_enqueue_scripts', 'jinr_jquery_enqueue');


/**
 * jsの読み込み(js output)
 */
function jinr_enqueue_script()
{
	global $post;
	wp_enqueue_script('jinr-youtube-script', get_template_directory_uri() . '/lib/js/youtube.js', array('jquery'), false, true);
	if (empty($post)) {
		wp_register_script('jinr-common-script', get_template_directory_uri() . '/lib/js/common.js', array('jquery'), false, true);
		$common_data = array(
			'ajax_url' => admin_url('admin-ajax.php'),
			'action'   => 'jinr_increment_views'
		);
		wp_localize_script('jinr-common-script', 'jinr_ajax_common', $common_data);
		wp_enqueue_script('jinr-common-script');
		wp_localize_script('jinr-common-script', 'headerTracking', array(
			'tracking_info' => jinr__header_tracking(),
		));
	} else {
		wp_register_script('jinr-common-script', get_template_directory_uri() . '/lib/js/common.js', array('jquery'), false, true);
		$common_data = array(
			'ajax_url' => admin_url('admin-ajax.php'),
			'post_id'  => $post->ID,
			'action'   => 'jinr_increment_views'
		);
		wp_localize_script('jinr-common-script', 'jinr_ajax_common', $common_data);
		wp_enqueue_script('jinr-common-script');
		wp_localize_script('jinr-common-script', 'headerTracking', array(
			'tracking_info' => jinr__header_tracking(),
		));
	}

	// スライダーJSは記事スライドもしくは画像スライドのスライドインの時のみ読み込み
	if (jinr__main_visual_type() == 'type01-post-slider') {
		if (jinr__slider_design_select() == 'd--slider-design1') {
			wp_enqueue_script('jinr-slider-script', get_template_directory_uri() . '/lib/js/slider.js', array('jquery'), false, true);
		} else {
			wp_enqueue_style('jinr-swiper-style', 'https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css');
			wp_enqueue_script('jinr-swiper-script', 'https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js', array(), false, false);
			wp_enqueue_script('jinr-swiper-setting-script', get_template_directory_uri() . '/lib/js/slider-jin.js', array(), false, true);
		}
	} elseif (jinr__main_visual_type() == 'type02-image-slider'  && jinr__imageslider_animation_select() == 'd--imageslider-animation-slidein') {
		wp_enqueue_script('jinr-slider-script', get_template_directory_uri() . '/lib/js/slider.js', array('jquery'), false, true);
	}
	if (jinr__add_class() !== false) {
		wp_enqueue_script('add-jinr-class', get_template_directory_uri() . '/lib/js/add-jinr-class.js', array('jquery'), false, true);
	}
	wp_enqueue_script('jinr-tab-switch-script', get_template_directory_uri() . '/lib/js/tab_switch.js', array('jquery'), false, true);
}
add_action('wp_enqueue_scripts', 'jinr_enqueue_script');

add_action('admin_enqueue_scripts', function () {
	wp_register_script('jinr_page_reload', get_template_directory_uri() . '/lib/js/page-reload.js', array('jquery'), false, true);
	wp_register_script('jinr_settings', get_template_directory_uri() . '/lib/js/jinr-settings.js', array('jquery'), false, true);
	wp_enqueue_script('jinr_page_reload');
	wp_enqueue_script('jinr_settings');
});

/**
 * Gutenbergにjsを読み込み
 */
function jinr_gutenberg_script($hook)
{
	if ('post.php' === $hook || 'post-new.php' === $hook) {
		wp_enqueue_script('jinr-mete-position-script', get_template_directory_uri() . '/lib/js/meta_position.js', array('jquery'), false, true);
		wp_enqueue_script('jinr-tab-switch-script', get_template_directory_uri() . '/lib/js/tab_switch.js', array('jquery'), false, true);
		wp_enqueue_script('jinr-title-count-script', get_template_directory_uri() . '/lib/js/title_count.js', array('jquery'), false, true);
		wp_enqueue_script('jinr-pattern-script', get_template_directory_uri() . '/lib/js/pattern.js', array('jquery'), false, true);
		wp_enqueue_script('jinr-youtube-time-script', 'https://www.youtube.com/iframe_api', array('jquery'), false, true);
	}
}
add_action('admin_enqueue_scripts', 'jinr_gutenberg_script');


/**
 * headでcssの読み込み(css output)
 */
function jinr_enqueue_style()
{
	wp_enqueue_style('theme-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'jinr_enqueue_style');

/**
 * footerで読み込み(output in footer)
 */
function jinr_enqueue_style_footer()
{
	wp_enqueue_style('theme-style-footer', get_template_directory_uri() . '/style-footer.css');
	if (jinr__external_reading_kaereba() == true) {
		wp_enqueue_style('jinr-kaereba', get_template_directory_uri() . '/scss/others/kaereba.css');
	}
	if (jinr__external_reading_appreach() == true) {
		wp_enqueue_style('jinr-appreach', get_template_directory_uri() . '/scss/others/appreach.css');
	}
};
add_action('wp_footer', 'jinr_enqueue_style_footer');

/**
 * 管理画面でcssの読み込み(css output in admin screen)
 */
function jinr_admin_print_styles($hook)
{
	wp_enqueue_style('wp-color-picker');
	wp_enqueue_style('widget', get_template_directory_uri() . '/widget-admin.css');
}
add_action('admin_print_styles', 'jinr_admin_print_styles');


/**
 * JINR設定でcssの読み込み(css output in admin screen)
 */
function jinr_settings_styles($hook)
{
	if (strpos($hook, 'jinr-setting') !== false) {
		wp_enqueue_style('jinr-settings');
		wp_enqueue_style('jinr-settings', get_template_directory_uri() . '/jinr-settings.css');
	}
}
add_action('admin_enqueue_scripts', 'jinr_settings_styles');

/**
 * metaタグの削除
 */
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'rsd_link');

/**
 * scaled画像の自動生成削除
 */
add_filter('big_image_size_threshold', '__return_false');

/**
 * カスタマイザー
 */
require_once JINR_PHP_INCLUDE . 'customizer.php';
require_once JINR_PHP_INCLUDE . 'load-customizer-value.php';


/**
 * ウィジェット
 */
get_template_part('include/widgets');


/**
 * ショートコード
 */
get_template_part('include/shortcode');


/**
 * JINR設定
 */
get_template_part('include/jinr-setting');


/**
 * Title setting
 */
get_template_part('include/head/title');


/**
 * English font setting
 */
get_template_part('include/font-selection');


/**
 * json-ld
 */
if (jinr__reading_jsonld() !== true) {
	get_template_part('include/json-ld');
}


/**
 * Custom Functions
 */
get_template_part('include/custom-functions');


/**
 * Registers all block assets so that they can be enqueued through the block editor
 * in the corresponding context.
 *
 * @see https://developer.wordpress.org/block-editor/tutorials/block-tutorial/applying-styles-with-stylesheets/
 */
function create_block_jinr_blocks_block_init()
{
	$dir               = dirname(__FILE__);
	$script_asset_path = "$dir/editor/build/index.asset.php";
	if (!file_exists($script_asset_path)) {
		throw new Error(
			'You need to run `npm start` or `npm run build` for the "create-block/jinr-blocks" block first.'
		);
	}
	$index_js     = '/editor/build/index.js';
	$script_asset = require $script_asset_path;
	wp_register_script(
		'jinr-blocks-script',
		get_template_directory_uri() . $index_js,
		$script_asset['dependencies'],
		$script_asset['version']
	);
	$categories    = get_categories(
		array(
			'hide_empty' => 0,
		)
	);
	$category_list = array();
	foreach ($categories as $cat) {
		$c                             = get_term_children($cat->cat_ID, 'category');
		$category_list[$cat->cat_ID] = $c;
	}
	$date_format = 'Y.m.d';

	if (!jinr__ogp_image_url() == "") {
		$ogp_url = jinr__ogp_image_url();
		$ogp_id = attachment_url_to_postid($ogp_url);
		$ogpimage_url = wp_get_attachment_image_src($ogp_id, 'thumbnail');
		$home_thumbnail = $ogpimage_url[0];
	} else {
		$home_thumbnail = !get_the_post_thumbnail_url(get_option('page_on_front'), 'thumbnail') == "" ? get_the_post_thumbnail_url(get_option('page_on_front'), 'thumbnail') : jinr_noimage_url('thumbnail');
	}

	$site_title = get_bloginfo('name');
	$custom_post_title = get_post_meta(get_option('page_on_front'), 'jin_seotitle', true);
	$description =  !get_bloginfo('description') == "" ? jinr__title_sepalater() . get_bloginfo('description') : "";

	if (!$custom_post_title == "" || !empty($custom_post_title)) {
		$site_name = $custom_post_title;
	} else {
		$site_name = $site_title . $description;
	}

	//カスタマイザーの特定ページへのリンク
	$fukidashi['autofocus[panel]'] = 'jinr__fukidashi_panel';
	$fukidashi_panel_link = add_query_arg($fukidashi, admin_url('customize.php'));
	$iconbox['autofocus[section]'] = 'jinr__box_design_panel';
	$iconbox_panel_link = add_query_arg($iconbox, admin_url('customize.php'));

	wp_set_script_translations('jinr-blocks-script', 'jinr-blocks');

	// アップロードファイルへのリンク
	$wp_upload_dir    = wp_upload_dir();

	// 決済完了ページの記事id取得
	$page_thanks_data = get_page_by_path('thanks-page-template');
	$page_thanks_id = '';
	if ($page_thanks_data) {
		$page_thanks_id = $page_thanks_data->ID;
	}
	$permalink_structure = get_option('permalink_structure');

	$args = array(
		'post_type' => 'post',
		'post_status' => 'publish',
		'posts_per_page' => get_option('posts_per_page'),
		'paged' => 1,
		'no_found_rows' => false,
	);
	$new_query = new WP_Query($args);
	$max_pages = $new_query->max_num_pages;
	$max_pages_array = array();
	$max_pages_array[] = array(
		'category_id' => 0,
		'category_name' => 'all',
		'max_num_pages' => floor($max_pages)
	);
	foreach ($categories as $category) {
		$args = array(
			'post_type' => 'post',
			'post_status' => 'publish',
			'posts_per_page' => get_option('posts_per_page'),
			'paged' => 1,
			'no_found_rows' => false,
			'category__in' => array($category->term_id),
		);
		$new_query = new WP_Query($args);
		$max_pages = $new_query->max_num_pages;
		$max_pages_array[] = array(
			'category_id' => $category->term_id,
			'category_name' => $category->name,
			'max_num_pages' => $max_pages
		);
	}

	$jinr_var = array(
		'image_path'            => get_template_directory_uri() . '/lib/img/',
		'upload_dir'            => $wp_upload_dir['url'],
		'no_image'       		=> jinr_noimage_url('medium'),
		'no_image_small'        => jinr_noimage_url('small'),
		'categories'            => $categories,
		'category_list'         => $category_list,
		'theme_color'           => jinr__theme_color(),
		'text_color'            => jinr__text_color(),
		'date_format'           => $date_format,
		'fukidashi_type'        => array(
			jinr__fukidashi1_type(),
			jinr__fukidashi2_type(),
			jinr__fukidashi3_type(),
			jinr__fukidashi4_type(),
			jinr__fukidashi5_type(),
			jinr__fukidashi6_type(),
			jinr__fukidashi7_type(),
			jinr__fukidashi8_type(),
			jinr__fukidashi9_type(),
			jinr__fukidashi10_type(),
		),
		'fukidashi_image'       => array(
			jinr__fukidashi1_image(),
			jinr__fukidashi2_image(),
			jinr__fukidashi3_image(),
			jinr__fukidashi4_image(),
			jinr__fukidashi5_image(),
			jinr__fukidashi6_image(),
			jinr__fukidashi7_image(),
			jinr__fukidashi8_image(),
			jinr__fukidashi9_image(),
			jinr__fukidashi10_image(),
		),
		'fukidashi_name'     => array(
			jinr__fukidashi1_name(),
			jinr__fukidashi2_name(),
			jinr__fukidashi3_name(),
			jinr__fukidashi4_name(),
			jinr__fukidashi5_name(),
			jinr__fukidashi6_name(),
			jinr__fukidashi7_name(),
			jinr__fukidashi8_name(),
			jinr__fukidashi9_name(),
			jinr__fukidashi10_name(),
		),
		'fukidashi_imgborder_color_type' => array(
			jinr__fukidashi1_imgborder_color_type(),
			jinr__fukidashi2_imgborder_color_type(),
			jinr__fukidashi3_imgborder_color_type(),
			jinr__fukidashi4_imgborder_color_type(),
			jinr__fukidashi5_imgborder_color_type(),
			jinr__fukidashi6_imgborder_color_type(),
			jinr__fukidashi7_imgborder_color_type(),
			jinr__fukidashi8_imgborder_color_type(),
			jinr__fukidashi9_imgborder_color_type(),
			jinr__fukidashi10_imgborder_color_type(),
		),
		'fukidashi_imgborder_color' => array(
			jinr__fukidashi1_imgborder_color(),
			jinr__fukidashi2_imgborder_color(),
			jinr__fukidashi3_imgborder_color(),
			jinr__fukidashi4_imgborder_color(),
			jinr__fukidashi5_imgborder_color(),
			jinr__fukidashi6_imgborder_color(),
			jinr__fukidashi7_imgborder_color(),
			jinr__fukidashi8_imgborder_color(),
			jinr__fukidashi9_imgborder_color(),
			jinr__fukidashi10_imgborder_color(),
		),
		'fukidashi_imgborder_gradation' => array(
			jinr__fukidashi1_imgborder_gradation(),
			jinr__fukidashi2_imgborder_gradation(),
			jinr__fukidashi3_imgborder_gradation(),
			jinr__fukidashi4_imgborder_gradation(),
			jinr__fukidashi5_imgborder_gradation(),
			jinr__fukidashi6_imgborder_gradation(),
			jinr__fukidashi7_imgborder_gradation(),
			jinr__fukidashi8_imgborder_gradation(),
			jinr__fukidashi9_imgborder_gradation(),
			jinr__fukidashi10_imgborder_gradation(),
		),
		'fukidashi_bg_color' => array(
			jinr__fukidashi1_bg_color(),
			jinr__fukidashi2_bg_color(),
			jinr__fukidashi3_bg_color(),
			jinr__fukidashi4_bg_color(),
			jinr__fukidashi5_bg_color(),
			jinr__fukidashi6_bg_color(),
			jinr__fukidashi7_bg_color(),
			jinr__fukidashi8_bg_color(),
			jinr__fukidashi9_bg_color(),
			jinr__fukidashi10_bg_color(),
		),
		'fukidashi_border_color_type' => array(
			jinr__fukidashi1_border_color_type(),
			jinr__fukidashi2_border_color_type(),
			jinr__fukidashi3_border_color_type(),
			jinr__fukidashi4_border_color_type(),
			jinr__fukidashi5_border_color_type(),
			jinr__fukidashi6_border_color_type(),
			jinr__fukidashi7_border_color_type(),
			jinr__fukidashi8_border_color_type(),
			jinr__fukidashi9_border_color_type(),
			jinr__fukidashi10_border_color_type(),
		),
		'fukidashi_border_color' => array(
			jinr__fukidashi1_border_color(),
			jinr__fukidashi2_border_color(),
			jinr__fukidashi3_border_color(),
			jinr__fukidashi4_border_color(),
			jinr__fukidashi5_border_color(),
			jinr__fukidashi6_border_color(),
			jinr__fukidashi7_border_color(),
			jinr__fukidashi8_border_color(),
			jinr__fukidashi9_border_color(),
			jinr__fukidashi10_border_color(),
		),
		'fukidashi_border_weight' => array(
			jinr__fukidashi1_border_weight(),
			jinr__fukidashi2_border_weight(),
			jinr__fukidashi3_border_weight(),
			jinr__fukidashi4_border_weight(),
			jinr__fukidashi5_border_weight(),
			jinr__fukidashi6_border_weight(),
			jinr__fukidashi7_border_weight(),
			jinr__fukidashi8_border_weight(),
			jinr__fukidashi9_border_weight(),
			jinr__fukidashi10_border_weight(),
		),
		'fukidashi_layout' => array(
			jinr__fukidashi1_layout(),
			jinr__fukidashi2_layout(),
			jinr__fukidashi3_layout(),
			jinr__fukidashi4_layout(),
			jinr__fukidashi5_layout(),
			jinr__fukidashi6_layout(),
			jinr__fukidashi7_layout(),
			jinr__fukidashi8_layout(),
			jinr__fukidashi9_layout(),
			jinr__fukidashi10_layout(),
		),
		'fukidashi_register_name' => array(
			jinr__fukidashi1_register_name(),
			jinr__fukidashi2_register_name(),
			jinr__fukidashi3_register_name(),
			jinr__fukidashi4_register_name(),
			jinr__fukidashi5_register_name(),
			jinr__fukidashi6_register_name(),
			jinr__fukidashi7_register_name(),
			jinr__fukidashi8_register_name(),
			jinr__fukidashi9_register_name(),
			jinr__fukidashi10_register_name(),
		),
		'simple_box_color'      => array(
			jinr__simple_box1_color(),
			jinr__simple_box2_color(),
			jinr__simple_box3_color(),
			jinr__simple_box4_color(),
			jinr__simple_box5_color(),
			jinr__simple_box6_color(),
			jinr__simple_box7_color(),
			jinr__simple_box8_color(),
			jinr__simple_box9_color(),
			jinr__simple_box10_color(),
			jinr__simple_box11_color(),
		),
		'heading_box_color'     => array(
			jinr__heading_box1_color(),
			jinr__heading_box2_color(),
			jinr__heading_box3_color(),
			jinr__heading_box4_color(),
			jinr__heading_box5_color(),
			jinr__heading_box6_color(),
			jinr__heading_box7_color(),
			jinr__heading_box8_color(),
			jinr__heading_box9_color(),
		),
		'simple_iconbox_color'  => array(
			jinr__simple_iconbox1_color(),
			jinr__simple_iconbox2_color(),
			jinr__simple_iconbox3_color(),
			jinr__simple_iconbox4_color(),
			jinr__simple_iconbox5_color(),
			jinr__simple_iconbox6_color(),
			jinr__simple_iconbox7_color(),
			jinr__simple_iconbox8_color(),
		),
		'simple_iconbox_icon'   => array(
			jinr__simple_iconbox1_icon(),
			jinr__simple_iconbox2_icon(),
			jinr__simple_iconbox3_icon(),
			jinr__simple_iconbox4_icon(),
			jinr__simple_iconbox5_icon(),
			jinr__simple_iconbox6_icon(),
			jinr__simple_iconbox7_icon(),
			jinr__simple_iconbox8_icon(),
		),
		'heading_iconbox_color' => array(
			jinr__heading_iconbox1_color(),
			jinr__heading_iconbox2_color(),
			jinr__heading_iconbox3_color(),
			jinr__heading_iconbox4_color(),
		),
		'heading_iconbox_icon'  => array(
			jinr__heading_iconbox1_icon(),
			jinr__heading_iconbox2_icon(),
			jinr__heading_iconbox3_icon(),
			jinr__heading_iconbox4_icon(),
		),
		'heading_iconbox_title' => array(
			jinr__heading_iconbox1_title(),
			jinr__heading_iconbox2_title(),
			jinr__heading_iconbox3_title(),
			jinr__heading_iconbox4_title(),
		),
		'jinr_favorite_color'  => array(
			jinr__favorite_color1(),
			jinr__favorite_color2(),
			jinr__favorite_color3(),
			jinr__favorite_color4(),
			jinr__favorite_color5(),
			jinr__favorite_color6(),
		),
		'jinr_button_name'  => array(
			jinr__button01_name(),
			jinr__button02_name(),
			jinr__button03_name(),
			jinr__button04_name(),
			jinr__button05_name(),
			jinr__button06_name(),
			jinr__button07_name(),
			jinr__button08_name(),
			jinr__button09_name(),
			jinr__button010_name(),
		),
		'jinr_button_design'  => array(
			jinr__button01_design(),
			jinr__button02_design(),
			jinr__button03_design(),
			jinr__button04_design(),
			jinr__button05_design(),
			jinr__button06_design(),
			jinr__button07_design(),
			jinr__button08_design(),
			jinr__button09_design(),
			jinr__button010_design(),
		),
		'jinr_button_width'  => array(
			jinr__button01_width(),
			jinr__button02_width(),
			jinr__button03_width(),
			jinr__button04_width(),
			jinr__button05_width(),
			jinr__button06_width(),
			jinr__button07_width(),
			jinr__button08_width(),
			jinr__button09_width(),
			jinr__button010_width(),
		),
		'jinr_button_solid_animation'  => array(
			jinr__button01_solid_animation(),
			jinr__button02_solid_animation(),
			jinr__button03_solid_animation(),
			jinr__button04_solid_animation(),
			jinr__button05_solid_animation(),
			jinr__button06_solid_animation(),
			jinr__button07_solid_animation(),
			jinr__button08_solid_animation(),
			jinr__button09_solid_animation(),
			jinr__button010_solid_animation(),
		),
		'jinr_button_outline_animation'  => array(
			jinr__button01_outline_animation(),
			jinr__button02_outline_animation(),
			jinr__button03_outline_animation(),
			jinr__button04_outline_animation(),
			jinr__button05_outline_animation(),
			jinr__button06_outline_animation(),
			jinr__button07_outline_animation(),
			jinr__button08_outline_animation(),
			jinr__button09_outline_animation(),
			jinr__button010_outline_animation(),
		),
		'jinr_button_arrow_animation'  => array(
			jinr__button01_arrow_animation(),
			jinr__button02_arrow_animation(),
			jinr__button03_arrow_animation(),
			jinr__button04_arrow_animation(),
			jinr__button05_arrow_animation(),
			jinr__button06_arrow_animation(),
			jinr__button07_arrow_animation(),
			jinr__button08_arrow_animation(),
			jinr__button09_arrow_animation(),
			jinr__button010_arrow_animation(),
		),
		'jinr_aff_registered_name'  => array(
			get_option('jinr_aff1_register_name'),
			get_option('jinr_aff2_register_name'),
			get_option('jinr_aff3_register_name'),
			get_option('jinr_aff4_register_name'),
			get_option('jinr_aff5_register_name'),
			get_option('jinr_aff6_register_name'),
			get_option('jinr_aff7_register_name'),
			get_option('jinr_aff8_register_name'),
			get_option('jinr_aff9_register_name'),
			get_option('jinr_aff10_register_name'),
			get_option('jinr_aff11_register_name'),
			get_option('jinr_aff12_register_name'),
			get_option('jinr_aff13_register_name'),
			get_option('jinr_aff14_register_name'),
			get_option('jinr_aff15_register_name'),
			get_option('jinr_aff16_register_name'),
			get_option('jinr_aff17_register_name'),
			get_option('jinr_aff18_register_name'),
			get_option('jinr_aff19_register_name'),
			get_option('jinr_aff20_register_name'),
			get_option('jinr_aff21_register_name'),
			get_option('jinr_aff22_register_name'),
			get_option('jinr_aff23_register_name'),
			get_option('jinr_aff24_register_name'),
			get_option('jinr_aff25_register_name'),
			get_option('jinr_aff26_register_name'),
			get_option('jinr_aff27_register_name'),
			get_option('jinr_aff28_register_name'),
			get_option('jinr_aff29_register_name'),
			get_option('jinr_aff30_register_name'),
		),
		'jinr_aff_registered_code'  => array(
			get_option('jinr_aff1_code'),
			get_option('jinr_aff2_code'),
			get_option('jinr_aff3_code'),
			get_option('jinr_aff4_code'),
			get_option('jinr_aff5_code'),
			get_option('jinr_aff6_code'),
			get_option('jinr_aff7_code'),
			get_option('jinr_aff8_code'),
			get_option('jinr_aff9_code'),
			get_option('jinr_aff10_code'),
			get_option('jinr_aff11_code'),
			get_option('jinr_aff12_code'),
			get_option('jinr_aff13_code'),
			get_option('jinr_aff14_code'),
			get_option('jinr_aff15_code'),
			get_option('jinr_aff16_code'),
			get_option('jinr_aff17_code'),
			get_option('jinr_aff18_code'),
			get_option('jinr_aff19_code'),
			get_option('jinr_aff20_code'),
			get_option('jinr_aff21_code'),
			get_option('jinr_aff22_code'),
			get_option('jinr_aff23_code'),
			get_option('jinr_aff24_code'),
			get_option('jinr_aff25_code'),
			get_option('jinr_aff26_code'),
			get_option('jinr_aff27_code'),
			get_option('jinr_aff28_code'),
			get_option('jinr_aff29_code'),
			get_option('jinr_aff30_code'),
		),
		'blogcard_design'       => jinr__blogcard_design(),
		'blogcard_title'        => jinr__blogcard_title(),
		'this_site_domain' => jinr_get_this_site_domain(),
		'home_url' => home_url(),
		'home_url_slash' => home_url('/'),
		'home_title' => $site_name,
		'home_thumbnail' => $home_thumbnail,
		'profile_image'       => jinr__profile_image_url(),
		'profile_name'       => jinr__profile_name(),
		'profile_job'       => jinr__profile_job(),
		'profile_introduction'       => jinr__profile_introduction(),
		'profile_button_link'       => jinr__profile_button_link(),
		'profile_label_text'       => jinr__profile_label_text(),
		'profile_button_sns_display'       => jinr__sns_follow_display_proile(),
		'profile_sns_color'       => jinr__profile_sns_color(),
		'sns_follow_twitter'       => jinr__tw_url(),
		'sns_follow_facebook'       => jinr__fb_url(),
		'sns_follow_youtube'       => jinr__youtube_url(),
		'sns_follow_instagram'       => jinr__insta_url(),
		'sns_follow_line'       => jinr__line_url(),
		'contact_url'       => jinr__contact_url(),
		'fukidashi_panel_link' => $fukidashi_panel_link,
		'iconbox_panel_link' => $iconbox_panel_link,
		'articleColumn' => jinr__post_column_style(),
		'thumbnailOriginalUsed' => jinr__thumbnail_original_used(),
		'permalink_structure' => $permalink_structure,
		'page_thanks_id' => $page_thanks_id,
		'max_pages_array' => $max_pages_array,
	);
	wp_localize_script('jinr-blocks-script', 'JINR_VAR', $jinr_var);
	$style_css = '/block.css';
	wp_register_style(
		'jinr-blocks-editor-style',
		get_template_directory_uri() . $style_css,
		array(),
		filemtime("$dir/$style_css")
	);

	register_block_type(
		'jinr-blocks/postcard',
		array(
			'editor_script'   => 'jinr-blocks-script',
			'editor_style'    => 'jinr-blocks-editor-style',
			'render_callback' => 'jinr_post_card_dynamic_render_callback',
		)
	);
	register_block_type(
		'jinr-blocks/postlist',
		array(
			'editor_script'   => 'jinr-blocks-script',
			'editor_style'    => 'jinr-blocks-editor-style',
			'render_callback' => 'jinr_post_list_dynamic_render_callback',
		)
	);
	register_block_type(
		'jinr-blocks/paidpost',
		array(
			'editor_script'   => 'jinr-blocks-script',
			'editor_style'    => 'jinr-blocks-editor-style',
			'render_callback' => 'jinr_paidpost_dynamic_render_callback',
		)
	);
	register_block_type(
		'jinr-blocks/designtitle',
		array(
			'editor_script' => 'jinr-blocks-script',
			'editor_style'  => 'jinr-blocks-editor-style',
		)
	);

	register_block_type(
		'jinr-blocks/slider',
		array(
			'editor_script'   => 'jinr-blocks-script',
			'editor_style'    => 'jinr-blocks-editor-style',
			'render_callback' => 'jinr_slider_dynamic_render_callback',
		)
	);

	register_block_type(
		'jinr-blocks/button',
		array(
			'editor_script' => 'jinr-blocks-script',
			'editor_style'  => 'jinr-blocks-editor-style',
			'render_callback' => 'jinr_button_dynamic_render_callback',
		)
	);

	register_block_type(
		'jinr-blocks/syntax-hl',
		array(
			'editor_script' => 'jinr-blocks-script',
			'editor_style'  => 'jinr-blocks-editor-style',
		)
	);

	register_block_type(
		'jinr-blocks/simplebox',
		array(
			'editor_script' => 'jinr-blocks-script',
			'editor_style'  => 'jinr-blocks-editor-style',
		)
	);

	register_block_type(
		'jinr-blocks/richmenu',
		array(
			'editor_script' => 'jinr-blocks-script',
			'editor_style'  => 'jinr-blocks-editor-style',
		)
	);
	register_block_type(
		'jinr-blocks/richmenuchild',
		array(
			'editor_script' => 'jinr-blocks-script',
			'editor_style'  => 'jinr-blocks-editor-style',
		)
	);

	register_block_type(
		'jinr-blocks/designborder',
		array(
			'editor_script' => 'jinr-blocks-script',
			'editor_style'  => 'jinr-blocks-editor-style',
		)
	);

	register_block_type(
		'jinr-blocks/fukidashi',
		array(
			'editor_script' => 'jinr-blocks-script',
			'editor_style'  => 'jinr-blocks-editor-style',
		)
	);

	register_block_type(
		'jinr-blocks/iconbox',
		array(
			'editor_script' => 'jinr-blocks-script',
			'editor_style'  => 'jinr-blocks-editor-style',
		)
	);

	register_block_type(
		'jinr-blocks/fullwidth',
		array(
			'editor_script' => 'jinr-blocks-script',
			'editor_style'  => 'jinr-blocks-editor-style',
		)
	);

	register_block_type(
		'jinr-blocks/blogcard',
		array(
			'editor_script'   => 'jinr-blocks-script',
			'editor_style'    => 'jinr-blocks-editor-style',
			'render_callback' => 'jinr_blog_card_dynamic_render_callback',
		)
	);

	register_block_type(
		'jinr-blocks/category',
		array(
			'editor_script'   => 'jinr-blocks-script',
			'editor_style'    => 'jinr-blocks-editor-style',
			'render_callback' => 'jinr_category_dynamic_render_callback',
		)
	);

	register_block_type(
		'jinr-blocks/accordion',
		array(
			'editor_script'   => 'jinr-blocks-script',
			'editor_style'    => 'jinr-blocks-editor-style',
		)
	);

	register_block_type(
		'jinr-blocks/accordionchild',
		array(
			'editor_script'   => 'jinr-blocks-script',
			'editor_style'    => 'jinr-blocks-editor-style',
		)
	);
	register_block_type(
		'jinr-blocks/compare',
		array(
			'editor_script'   => 'jinr-blocks-script',
			'editor_style'    => 'jinr-blocks-editor-style',
		)
	);
	register_block_type(
		'jinr-blocks/comparechild',
		array(
			'editor_script'   => 'jinr-blocks-script',
			'editor_style'    => 'jinr-blocks-editor-style',
		)
	);

	register_block_type(
		'jinr-blocks/tab',
		array(
			'editor_script'   => 'jinr-blocks-script',
			'editor_style'    => 'jinr-blocks-editor-style',
		)
	);
	register_block_type(
		'jinr-blocks/tabchild',
		array(
			'editor_script'   => 'jinr-blocks-script',
			'editor_style'    => 'jinr-blocks-editor-style',
		)
	);

	register_block_type(
		'jinr-blocks/timeline',
		array(
			'editor_script'   => 'jinr-blocks-script',
			'editor_style'    => 'jinr-blocks-editor-style',
		)
	);

	register_block_type(
		'jinr-blocks/timelinechild',
		array(
			'editor_script'   => 'jinr-blocks-script',
			'editor_style'    => 'jinr-blocks-editor-style',
		)
	);

	register_block_type(
		'jinr-blocks/background',
		array(
			'editor_script' => 'jinr-blocks-script',
			'editor_style'  => 'jinr-blocks-editor-style',
		)
	);


	register_block_style(
		'core/list',
		array(
			'name' => 'jinr-checkmark',
			'label' => __('チェック１'),
			'style_handle' => 'jinr-checkmark',
		)
	);

	register_block_style(
		'core/list',
		array(
			'name' => 'jinr-checkmark-square',
			'label' => __('チェック２'),
			'style_handle' => 'jinr-checkmark-square',
		)
	);
}
add_action('init', 'create_block_jinr_blocks_block_init');

//管理画面でoption値保存時にtipsを表示させる
function jinr_save_settings_callback()
{
	if (isset($_GET['settings-updated']) && $_GET['settings-updated']) {
		$_SESSION['settings_updated'] = true;
		jinr_show_saved_message();
	} elseif (isset($_SESSION['settings_updated'])) {
		unset($_SESSION['settings_updated']);
	}
}

function jinr_show_saved_message()
{
	if (isset($_SESSION['settings_updated']) && $_SESSION['settings_updated']) {
?>
		<div class="notice notice-success is-dismissible">
			<p><?php _e('設定を保存しました。', 'my-text-domain'); ?></p>
		</div>
<?php
	}
}

/**
 * 記事内でページネーションを表示する際、通常ではページネーションのリンク先がページのURLになるが、
 * /pages/2/などのURLになるようにする
 */
add_filter('redirect_canonical', 'jinr_disable_redirect_canonical');
function jinr_disable_redirect_canonical($redirect_url)
{
	$redirect_url = false;
	return $redirect_url;
}

function jinr_init_session_start()
{
	if (session_status() !== PHP_SESSION_ACTIVE) {
		session_start();
		session_regenerate_id();
	}
}
add_action('template_redirect', 'jinr_init_session_start');

//テーマアップデート
require 'theme-update-checker.php';
$example_update_checker = new ThemeUpdateChecker(
	'jinr',
	'https://jinr-update.cps-wp-dev.com/jinr/update.json'
);
