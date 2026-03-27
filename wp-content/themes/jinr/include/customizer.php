<?php

/**
 * JIN:R Theme Customizer
 *
 * @package JINR:R
 */

/**
 * カスタマイザーのパネルとセクションを呼び出す
 */
$felt_panels = array(
	'site-setting',
	'design-preset-setting',
	'site-design-setting',
	'color-setting',
	'main-visual-setting',
	'headline-design-setting',
	'box-design-setting',
	'button-design-setting',
	'fukidashi-setting',
	'profile-setting',
	'information-setting',
	'thumbnails-setting',
	'sns-setting',
	'spmenu-setting',
	'animation-setting',
	'others-setting',
	'representation-act-setting',
);

foreach ($felt_panels as $p) {
	require JINR_PHP_INCLUDE . 'customizer/ui/' . $p . '.php';
}


/**
 * カスタマイザーに任意のCSSを読み込ませる
 */

function jinr_customizer_css()
{
	wp_enqueue_style('jinr-block', get_template_directory_uri() . '/block.css');
	wp_enqueue_style('jinr-customizer-css', get_template_directory_uri() . '/jinr-customizer.css');
	if (has_filter('use_widgets_block_editor')) {
		wp_enqueue_style('jinr-block', get_template_directory_uri() . '/block.css');
	}
}
add_action('customize_controls_enqueue_scripts', 'jinr_customizer_css');

/**
 * カスタマイザーに任意のCSSをインラインで読み込ませる
 */
function jinr_customizer_inline_css()
{
	$theme_color              = jinr__theme_color();
	$text_color               = jinr__text_color();
	$theme_color_rgba 		  = jinr_hex_to_rgb($theme_color);
	$text_color_rgba 		  = jinr_hex_to_rgb($text_color);
?>
	<style>
		.d--theme-color a.a--sns-item-link .jin-icons {
			color: <?php echo $theme_color; ?>;
		}

		.d--profile-style1 .c--profile-meta::before,
		.d--profile-style2 .o--profile-contents {
			background-color: <?php echo $theme_color; ?>;
		}

		.d--profile-style2 .a--profile-introduction {
			background-color: <?php echo "rgba(" . $theme_color_rgba[0] . "," . $theme_color_rgba[1] . "," . $theme_color_rgba[2] . ",0.09)"; ?>;
		}

		#customize-theme-controls h2[data-type="core/heading"] {
			border-color: <?php echo $theme_color; ?>;
		}

		.wp-block-tag-cloud a {
			background-color: <?php echo "rgba(" . $text_color_rgba[0] . "," . $text_color_rgba[1] . "," . $text_color_rgba[2] . ",0.06)"; ?>;
		}

		#customize-theme-controls .wp-block-latest-posts__list li a,
		#customize-theme-controls .wp-block-archives-list li a,
		#customize-theme-controls .wp-block-categories-list li a,
		#customize-theme-controls .wp-block-page-list a,
		#customize-theme-controls .widget_nav_menu li,
		#customize-theme-controls .wp-block-rss li a,
		#customize-theme-controls .wp-block-page-list li a,
		#customize-theme-controls .wp-block-latest-comments .wp-block-latest-comments__comment,
		#customize-theme-controls .widget_meta li a,
		#customize-theme-controls .wp-block-search__button-inside .wp-block-search__inside-wrapper {
			border-color: <?php echo "rgba(" . $text_color_rgba[0] . "," . $text_color_rgba[1] . "," . $text_color_rgba[2] . ",0.15)"; ?>;
		}

		#customize-theme-controls .wp-block-categories-list .cat-item ul a:before {
			background-color: <?php echo "rgba(" . $text_color_rgba[0] . "," . $text_color_rgba[1] . "," . $text_color_rgba[2] . ",0.15)"; ?>;
		}

		#customize-theme-controls .wp-block-latest-posts__list li a,
		#customize-theme-controls .wp-block-archives-list li a,
		#customize-theme-controls .wp-block-categories-list li a,
		#customize-theme-controls .wp-block-page-list li a,
		#customize-theme-controls .widget_nav_menu li a,
		#customize-theme-controls .wp-block-page-list a,
		#customize-theme-controls .wp-block-rss li a,
		#customize-theme-controls .widget_meta li a,
		#customize-theme-controls .wp-block-tag-cloud a,
		#customize-theme-controls .wp-block-latest-comments__comment-link,
		#customize-theme-controls .wp-block-categories-list li:after {
			color: <?php echo $text_color; ?> !important;
		}

		<?php if (jinr__design_style() == 'd--material-design') : ?>.d--profile-style1,
		.d--profile-style2 {
			border: none;
			box-shadow: 0 2px 6px 0px rgba(170, 170, 170, 0.15);
		}

		.d--profile-style1 {
			background: rgba(255, 255, 255, 0.6);
		}

		<?php else : ?>.d--profile-style1 {
			border-color: <?php echo $theme_color; ?>;
		}

		<?php endif; ?>
	</style>
<?php
}
add_action('customize_controls_print_styles', 'jinr_customizer_inline_css');

/**
 * カスタマイザコントロールのエンキュー
 */
function jinr_customize_control_js()
{
	wp_enqueue_script('jinr_customizer_control', get_template_directory_uri() . '/include/customizer/js/customize-controls.js', array('customize-controls', 'jquery'), null, true);
}
add_action('customize_controls_enqueue_scripts', 'jinr_customize_control_js');

include_once ABSPATH . 'wp-includes/class-wp-customize-control.php';
require_once JINR_PHP_INCLUDE . 'customizer/controls/core/class-jinr-base-control.php';
require_once JINR_PHP_INCLUDE . 'customizer/controls/core/class-jinr-button-preview-control.php';
require_once JINR_PHP_INCLUDE . 'customizer/controls/core/class-jinr-checkbox-control.php';
require_once JINR_PHP_INCLUDE . 'customizer/controls/core/class-jinr-demo-import-control.php';
require_once JINR_PHP_INCLUDE . 'customizer/controls/core/class-jinr-radiobox-control.php';
require_once JINR_PHP_INCLUDE . 'customizer/controls/core/class-jinr-range-control.php';
require_once JINR_PHP_INCLUDE . 'customizer/controls/core/class-jinr-video-control.php';
