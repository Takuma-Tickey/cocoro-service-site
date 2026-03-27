<?php

/**
 * Widget
 *
 * @package JIN:R
 */

function jinr_widgets_init()
{
	$sidebars = array(
		// TOPページ上部ウィジェット
		'toppage-widget'    => array(
			'name' => 'トップページ上部',
			'id'   => 'toppage-widget',
		),
		// 記事ページ上部ウィジェット
		'post-top-widget'    => array(
			'name' => '記事上',
			'id'   => 'post-top-widget',
		),
		// 記事はじめウィジェット
		'post-start-widget'    => array(
			'name' => '記事はじめ',
			'id'   => 'post-start-widget',
		),
		// 記事おわりウィジェット
		'post-end-widget'    => array(
			'name' => '記事おわり',
			'id'   => 'post-end-widget',
		),
		// 記事下ウィジェット
		'post-bottom-widget' => array(
			'name' => '記事下',
			'id'   => 'post-bottom-widget',
		),
		// 関連記事下ウィジェット
		'relatedpost-bottom-widget' => array(
			'name' => '関連記事下',
			'id'   => 'relatedpost-bottom-widget',
		),
		// フッターウィジェット
		'footer-widget'   => array(
			'name' => 'フッター',
			'id'   => 'footer-widget',
		),
		'sidebar'            => array(
			'name' => 'サイドバー',
			'id'   => 'sidebar',
		),
		// 追尾ウィジェット
		'sidebar-tracking'   => array(
			'name' => 'サイドバー追尾【PC】',
			'id'   => 'sidebar-tracking',
		),
		// ハンバーガー
		'hamburger-widget'   => array(
			'name' => 'ハンバーガー',
			'id'   => 'hamburger-widget',
		)
	);

	foreach ($sidebars as $sidebar) {
		register_sidebar(
			array(
				'name'          => esc_html($sidebar['name']),
				'id'            => esc_attr(($sidebar['id'])),
				'class'   => 'test',
				'before_widget' => '<div id="%1$s" class="jinr-widget-area %2$s">',
				'after_widget'  => '</div>',
				'before_title'  => '<div class="widgettitle ef">',
				'after_title'   => '</div>',
			)
		);
	}
}
add_action('widgets_init', 'jinr_widgets_init');


function jinr_isset_widets($index = 1, $echo = false)
{
	global $wp_registered_sidebars;

	if (is_int($index)) {
		$index = "sidebar-$index";
	} else {
		$index = sanitize_title($index);
		foreach ((array) $wp_registered_sidebars as $key => $value) {
			if (sanitize_title($value['name']) == $index) {
				$index = $key;
				break;
			}
		}
	}

	$sidebar_widgets = wp_get_sidebars_widgets();

	if (empty($wp_registered_sidebars[$index]) || !array_key_exists($index, $sidebar_widgets) || !is_array($sidebar_widgets[$index]) || empty($sidebar_widgets[$index])) {
		return false;
	}
	$result = count($sidebar_widgets[$index]);
	if ($echo) {
		return $result;
	} else {
		return $result;
	}
}

// フッターウィジェット
// 追尾ウィジェット設定時のjs読み込み
function jinr_tracking_widget_enqueue_script()
{
	wp_enqueue_script('jinr-tracking-widget', get_template_directory_uri() . '/lib/js/followwidget.js', array('jquery'), false, true);
}
add_action('wp_enqueue_scripts', 'jinr_tracking_widget_enqueue_script');