<?php

/**
 * デモインポート
 *
 * @package JIN:R
 */


function jinr_export_json_exclude($preset_num)
{
	$demoFile = curl_get_contents(get_template_directory_uri() . '/include/customizer/preset/jinr-cei-export-' . $preset_num . '.json');
	$garbledFile = mb_convert_encoding($demoFile, 'UTF8', 'ASCII,JIS,UTF-8,EUC-JP,SJIS-WIN');
	$arrayMods = json_decode($garbledFile, true);
	foreach ($arrayMods as $key => $value) {
		global $wp_customize;

		// ディスクリプション
		if ('jinr__desc_text' === $key) {
			continue;
		}

		/**
		 * メインビジュアル
		 *  - 「記事スライダー」「画像スライダー」の時は設定がなければ、最新の記事から3記事引っ張ってきて保存
		 *  - 画像スライダーの画像も最新記事のアイキャッチから、なければJINRデフォルト画像
		 *  - 「ヘッダー画像」「コンセプト動画」は設定がなければ、JINRデフォルト画像
		 */

		// ヘッダー画像
		if ('jinr__stillimage_url'  === $key) {
			$stillimage   = get_theme_mod('jinr__stillimage_url');
			$defaultimage = get_template_directory_uri() . '/include/customizer/img/jinr-headerimg.png';

			if (!empty($stillimage)) {
				do_action('customize_save_' . $key, $wp_customize);
				set_theme_mod($key, $stillimage);
				continue;
			} else {
				do_action('customize_save_' . $key, $wp_customize);
				set_theme_mod($key, $defaultimage);
				continue;
			}
		}
		if ('jinr__stillimage_url_sp'  === $key) {
			$stillimagesp = get_theme_mod('jinr__stillimage_url_sp');
			$defaultimage = get_template_directory_uri() . '/include/customizer/img/jinr-headerimg.png';

			if (!empty($stillimagesp)) {
				do_action('customize_save_' . $key, $wp_customize);
				set_theme_mod($key, $stillimagesp);
				continue;
			} else {
				do_action('customize_save_' . $key, $wp_customize);
				set_theme_mod($key, $defaultimage);
				continue;
			}
		}

		// 画像スライダー
		if ('jinr__imageslider_image_url1'  === $key) {
			$imageslider01 = get_theme_mod('jinr__imageslider_image_url1');
			$defaultimage  = get_template_directory_uri() . '/include/customizer/img/jinr-headerimg.png';

			if (!empty($imageslider01)) {
				do_action('customize_save_' . $key, $wp_customize);
				set_theme_mod($key, $imageslider01);
				continue;
			} else {
				do_action('customize_save_' . $key, $wp_customize);
				set_theme_mod($key, $defaultimage);
				continue;
			}
		}
		if ('jinr__imageslider_image_url2'  === $key) {
			$imageslider02 = get_theme_mod('jinr__imageslider_image_url2');
			$defaultimage  = get_template_directory_uri() . '/include/customizer/img/jinr-headerimg.png';

			if (!empty($imageslider02)) {
				do_action('customize_save_' . $key, $wp_customize);
				set_theme_mod($key, $imageslider02);
				continue;
			} else {
				do_action('customize_save_' . $key, $wp_customize);
				set_theme_mod($key, $defaultimage);
				continue;
			}
		}
		if ('jinr__imageslider_image_url3'  === $key) {
			$imageslider03 = get_theme_mod('jinr__imageslider_image_url3');
			$defaultimage  = get_template_directory_uri() . '/include/customizer/img/jinr-headerimg.png';
			if (!empty($imageslider03)) {
				do_action('customize_save_' . $key, $wp_customize);
				set_theme_mod($key, $imageslider03);
				continue;
			} else {
				do_action('customize_save_' . $key, $wp_customize);
				set_theme_mod($key, $defaultimage);
				continue;
			}
		}
		if ('jinr__imageslider_image_url4'  === $key) {
			$imageslider04 = get_theme_mod('jinr__imageslider_image_url4');
			$defaultimage  = get_template_directory_uri() . '/include/customizer/img/jinr-headerimg.png';

			if (!empty($imageslider04)) {
				do_action('customize_save_' . $key, $wp_customize);
				set_theme_mod($key, $imageslider04);
				continue;
			} else {
				do_action('customize_save_' . $key, $wp_customize);
				set_theme_mod($key, $defaultimage);
				continue;
			}
		}
		if ('jinr__imageslider_image_url5'  === $key) {
			$imageslider05 = get_theme_mod('jinr__imageslider_image_url5');
			$defaultimage  = get_template_directory_uri() . '/include/customizer/img/jinr-headerimg.png';

			if (!empty($imageslider05)) {
				do_action('customize_save_' . $key, $wp_customize);
				set_theme_mod($key, $imageslider05);
				continue;
			} else {
				do_action('customize_save_' . $key, $wp_customize);
				set_theme_mod($key, $defaultimage);
				continue;
			}
		}
		if ('jinr__imageslider_image_url6'  === $key) {
			$imageslider06 = get_theme_mod('jinr__imageslider_image_url6');
			$defaultimage  = get_template_directory_uri() . '/include/customizer/img/jinr-headerimg.png';

			if (!empty($imageslider06)) {
				do_action('customize_save_' . $key, $wp_customize);
				set_theme_mod($key, $imageslider06);
				continue;
			} else {
				do_action('customize_save_' . $key, $wp_customize);
				set_theme_mod($key, $defaultimage);
				continue;
			}
		}

		if ('jinr__imageslider_image_link1'  === $key) {
			$imagesliderlink01 = get_theme_mod('jinr__imageslider_image_link1');
			if (!empty($imagesliderlink01)) {
				do_action('customize_save_' . $key, $wp_customize);
				set_theme_mod($key, $imagesliderlink01);
				continue;
			} else {
				$data = get_posts('post_type=post&posts_per_page=1');
				$defaultlink = '';
				if (isset($data[0])) {
					$defaultlink = get_permalink($data[0]->ID);
				}
				do_action('customize_save_' . $key, $wp_customize);
				set_theme_mod($key, $defaultlink);
				continue;
			}
		}
		if ('jinr__imageslider_image_link2'  === $key) {
			$imagesliderlink02 = get_theme_mod('jinr__imageslider_image_link2');
			if (!empty($imagesliderlink02)) {
				do_action('customize_save_' . $key, $wp_customize);
				set_theme_mod($key, $imagesliderlink02);
				continue;
			} else {
				$data = get_posts('post_type=post&posts_per_page=1');
				$defaultlink = '';
				if (isset($data[0])) {
					$defaultlink = get_permalink($data[0]->ID);
				}
				do_action('customize_save_' . $key, $wp_customize);
				set_theme_mod($key, $defaultlink);
				continue;
			}
		}
		if ('jinr__imageslider_image_link3'  === $key) {
			$imagesliderlink03 = get_theme_mod('jinr__imageslider_image_link3');
			if (!empty($imagesliderlink03)) {
				do_action('customize_save_' . $key, $wp_customize);
				set_theme_mod($key, $imagesliderlink03);
				continue;
			} else {
				$data = get_posts('post_type=post&posts_per_page=1');
				$defaultlink = '';
				if (isset($data[0])) {
					$defaultlink = get_permalink($data[0]->ID);
				}
				do_action('customize_save_' . $key, $wp_customize);
				set_theme_mod($key, $defaultlink);
				continue;
			}
		}
		if ('jinr__imageslider_image_link4'  === $key) {
			$imagesliderlink04 = get_theme_mod('jinr__imageslider_image_link4');
			if (!empty($imagesliderlink04)) {
				do_action('customize_save_' . $key, $wp_customize);
				set_theme_mod($key, $imagesliderlink04);
				continue;
			} else {
				$data = get_posts('post_type=post&posts_per_page=1');
				$defaultlink = '';
				if (isset($data[0])) {
					$defaultlink = get_permalink($data[0]->ID);
				}
				do_action('customize_save_' . $key, $wp_customize);
				set_theme_mod($key, $defaultlink);
				continue;
			}
		}
		if ('jinr__imageslider_image_link5'  === $key) {
			$imagesliderlink05 = get_theme_mod('jinr__imageslider_image_link5');
			if (!empty($imagesliderlink05)) {
				do_action('customize_save_' . $key, $wp_customize);
				set_theme_mod($key, $imagesliderlink05);
				continue;
			} else {
				$data = get_posts('post_type=post&posts_per_page=1');
				$defaultlink = '';
				if (isset($data[0])) {
					$defaultlink = get_permalink($data[0]->ID);
				}
				do_action('customize_save_' . $key, $wp_customize);
				set_theme_mod($key, $defaultlink);
				continue;
			}
		}
		if ('jinr__imageslider_image_link6'  === $key) {
			$imagesliderlink06 = get_theme_mod('jinr__imageslider_image_link6');
			if (!empty($imagesliderlink06)) {
				do_action('customize_save_' . $key, $wp_customize);
				set_theme_mod($key, $imagesliderlink06);
				continue;
			} else {
				$data = get_posts('post_type=post&posts_per_page=1');
				$defaultlink = '';
				if (isset($data[0])) {
					$defaultlink = get_permalink($data[0]->ID);
				}
				do_action('customize_save_' . $key, $wp_customize);
				set_theme_mod($key, $defaultlink);
				continue;
			}
		}

		// 記事スライダー
		if ('jinr__slider_url1'  === $key) {
			$sliderurl01 = get_theme_mod('jinr__slider_url1');
			if (!empty($sliderurl01)) {
				do_action('customize_save_' . $key, $wp_customize);
				set_theme_mod($key, $sliderurl01);
				continue;
			} else {
				$data = get_posts('post_type=post&posts_per_page=1');
				$defaultlink = '';
				if (isset($data[0])) {
					$defaultlink = get_permalink($data[0]->ID);
				}
				do_action('customize_save_' . $key, $wp_customize);
				set_theme_mod($key, $defaultlink);
				continue;
			}
		}
		if ('jinr__slider_url2'  === $key) {
			$sliderurl02 = get_theme_mod('jinr__slider_url2');
			if (!empty($sliderurl02)) {
				do_action('customize_save_' . $key, $wp_customize);
				set_theme_mod($key, $sliderurl02);
				continue;
			} else {
				$data = get_posts('post_type=post&posts_per_page=1');
				$defaultlink = '';
				if (isset($data[0])) {
					$defaultlink = get_permalink($data[0]->ID);
				}
				do_action('customize_save_' . $key, $wp_customize);
				set_theme_mod($key, $defaultlink);
				continue;
			}
		}
		if ('jinr__slider_url3'  === $key) {
			$sliderurl03 = get_theme_mod('jinr__slider_url3');
			if (!empty($sliderurl03)) {
				do_action('customize_save_' . $key, $wp_customize);
				set_theme_mod($key, $sliderurl03);
				continue;
			} else {
				$data = get_posts('post_type=post&posts_per_page=1');
				$defaultlink = '';
				if (isset($data[0])) {
					$defaultlink = get_permalink($data[0]->ID);
				}
				do_action('customize_save_' . $key, $wp_customize);
				set_theme_mod($key, $defaultlink);
				continue;
			}
		}
		if ('jinr__slider_url4'  === $key) {
			$sliderurl04 = get_theme_mod('jinr__slider_url4');
			if (!empty($sliderurl04)) {
				do_action('customize_save_' . $key, $wp_customize);
				set_theme_mod($key, $sliderurl04);
				continue;
			} else {
				$data = get_posts('post_type=post&posts_per_page=1');
				$defaultlink = '';
				if (isset($data[0])) {
					$defaultlink = get_permalink($data[0]->ID);
				}
				do_action('customize_save_' . $key, $wp_customize);
				set_theme_mod($key, $defaultlink);
				continue;
			}
		}
		if ('jinr__slider_url5'  === $key) {
			$sliderurl05 = get_theme_mod('jinr__slider_url5');
			if (!empty($sliderurl05)) {
				do_action('customize_save_' . $key, $wp_customize);
				set_theme_mod($key, $sliderurl05);
				continue;
			} else {
				$data = get_posts('post_type=post&posts_per_page=1');
				$defaultlink = '';
				if (isset($data[0])) {
					$defaultlink = get_permalink($data[0]->ID);
				}
				do_action('customize_save_' . $key, $wp_customize);
				set_theme_mod($key, $defaultlink);
				continue;
			}
		}
		if ('jinr__slider_url6'  === $key) {
			$sliderurl06 = get_theme_mod('jinr__slider_url6');
			if (!empty($sliderurl06)) {
				do_action('customize_save_' . $key, $wp_customize);
				set_theme_mod($key, $sliderurl06);
				continue;
			} else {
				$data = get_posts('post_type=post&posts_per_page=1');
				$defaultlink = '';
				if (isset($data[0])) {
					$defaultlink = get_permalink($data[0]->ID);
				}
				do_action('customize_save_' . $key, $wp_customize);
				set_theme_mod($key, $defaultlink);
				continue;
			}
		}


		/**
		 * ウィジェット
		 * サイドバー
		 */

		if ('widget_' === substr(strtolower($key), 0, 7)) {
			continue;
		}
		if ('sidebars_' === substr(strtolower($key), 0, 9)) {
			continue;
		}
		// ロゴ
		if ('jinr__header_logo_url' === $key) {
			continue;
		}
		// お気に入りカラー
		if ('jinr__favorite_color' === substr(strtolower($key), 0, 20)) {
			continue;
		}
		//SNSアカウント登録
		if ('jinr__fb_url' === $key) {
			continue;
		}
		if ('jinr__tw_url' === $key) {
			continue;
		}
		if ('jinr__insta_url' === $key) {
			continue;
		}
		if ('jinr__youtube_url' === $key) {
			continue;
		}
		if ('jinr__line_url' === $key) {
			continue;
		}
		if ('jinr__contact_url' === $key) {
			continue;
		}
		if ('jinr__ogp_image_url' === $key) {
			continue;
		}
		if ('jinr__tw_type' === $key) {
			continue;
		}
		if ('jinr__fb_code' === $key) {
			continue;
		}
		if ('jinr__tw_name' === $key) {
			continue;
		}
		if ('jinr__sns_hashtag' === $key) {
			continue;
		}

		// プロフィール登録
		if ('jinr__profile' === substr(strtolower($key), 0, 13)) {
			continue;
		}
		// 吹き出し設定
		if ('jinr__fukidashi' === substr(strtolower($key), 0, 15)) {
			continue;
		}
		// スマホメニュー
		if ('jinr__sp_menu' === substr(strtolower($key), 0, 13)) {
			continue;
		}
		// コンバージョンボタン
		if ('jinr__spcv' === substr(strtolower($key), 0, 10)) {
			continue;
		}

		if ('jinr__bg_image'  === $key) {
			if ($preset_num == '5') {
				$defaultimage = get_template_directory_uri() . '/include/customizer/img/preset_bg_5.png';
			} elseif ($preset_num == '10') {
				$defaultimage = get_template_directory_uri() . '/include/customizer/img/preset_bg_10.png';
			} elseif ($preset_num == '11') {
				$defaultimage = get_template_directory_uri() . '/include/customizer/img/preset_bg_portfolio.png';
			} elseif ($preset_num == '15') {
				$defaultimage = get_template_directory_uri() . '/include/customizer/img/preset_bg_15.png';
			} else {
				$defaultimage = '';
			}
			do_action('customize_save_' . $key, $wp_customize);
			set_theme_mod($key, $defaultimage);
			continue;
		}
		if ('jinr__movie_url' === $key) {
			if ($preset_num == '12') {
				$defaultmovie = get_template_directory_uri() . '/include/customizer/img/preset_movie_12.mp4';
			} else {
				$defaultmovie = '';
			}
			do_action('customize_save_' . $key, $wp_customize);
			set_theme_mod($key, $defaultmovie);
			continue;
		}

		do_action('customize_save_' . $key, $wp_customize);
		set_theme_mod($key, $value);
	}
}

function jinr_preset_demo0()
{
	$preset_num = '0';
	jinr_export_json_exclude($preset_num);
	update_option('preset_data', 0);
	update_option('show_on_front', 'posts');
	$query['autofocus[section]'] = 'jinr__design_preset_section';
	$presetsection = add_query_arg($query, admin_url('customize.php'));
	wp_redirect($presetsection);
	exit;
}
function jinr_preset_demo1()
{
	$preset_num = '1';
	update_option('preset_data', 1);
	jinr_export_json_exclude($preset_num);

	$homeURL = esc_url(home_url('/'));

	// クリック時に任意の記事を作成する
	$frontpageID    = get_option('page_on_front');
	$frontpageslug  = get_post_field('post_name', $frontpageID);
	$presetContents = '<!-- wp:spacer {"height":"30px"} -->
	<div style="height:30px" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->
	
	<!-- wp:jinr-blocks/designtitle {"mainText":"＼ Pick Up ／","subText":"まずはこの記事を読んでね","divText":"＼ Pick Up ／","radioLayout":"center","tagSelect":"div","className":"d--maintext-customize","displayDeviceAttribute":"jinr-display-sp","displayDeviceSPAttribute":"jinr-display-sp","jinrBlocksCSSAttribute":".d--maintext-customize.b--jinr-h2rich.d--h2rich-center .a--h2rich-maincopy {font-size: 30px;}"} -->
	<div class="jinr-add-class-container"><section class="wp-block-jinr-blocks-designtitle b--jinr-block b--jinr-h2rich d--h2rich-center d--h2rich-style1 d--titledesign-weight-thin d--h2rich-none d--maintext-customize jinr-display-sp js--scr-animation" style="border-color:false"><div class="c--h2rich-contents"><span class="a--h2rich-subcopy ef" style="color:false">まずはこの記事を読んでね</span><div class="a--h2rich-maincopy d--bold ef" style="color:false">＼ Pick Up ／</div></div></section><style jsx="true">.d--maintext-customize.b--jinr-h2rich.d--h2rich-center .a--h2rich-maincopy {font-size: 30px;}</style></div>
	<!-- /wp:jinr-blocks/designtitle -->
	
	<!-- wp:jinr-blocks/richmenu {"pageTemplate":"template-full-width.php"} -->
	<section class="wp-block-jinr-blocks-richmenu b--jinr-block b--jinr-richmenu d--richmenu-column-2-sp d--richmenu-column4 d--richmenu-ratio16-9 d--richmenu-simple d--richmenu-text-medium d--richmenu-text-style5 d--richmenu-animation-fadebyone js--scr-animation d--richmenu-hover-up"><!-- wp:jinr-blocks/richmenuchild {"text":"Color Make","subText":"カラーメイク","link":"' . $homeURL . '","thumbnailUrl":"' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-640x360.png","thumbnailSrcset":"' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-320x180.png 320w, ' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-640x360.png 640w","thumbnailSizes":"(max-width:552px) 40vw,100vw","columnSelect":"4","itemRatio":"16-9","itemText":"on","textDesign":"5","textColor":"#6d4655","textBgColor":"rgba(255,255,255,0.51)","filterOpacity":75,"filterDisplay":"off","filterColor":"#ffffff","pageTemplate":"template-full-width.php"} -->
	<a class="wp-block-jinr-blocks-richmenuchild o--richmenu-item" href="' . $homeURL . '"><div class="o--richmenu-item-inner"><div class="a--richmenu-image"><img src="' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-640x360.png" width="263" height="148" alt="" srcset="' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-320x180.png 320w, ' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-640x360.png 640w" sizes="(max-width:552px) 40vw,100vw"/></div><div class="c--richmenu-contents ef" style="color:#6d4655"><div class="a--richmenu-subtext">カラーメイク</div><div class="a--richmenu-text d--bold">Color Make</div></div></div></a>
	<!-- /wp:jinr-blocks/richmenuchild -->
	
	<!-- wp:jinr-blocks/richmenuchild {"text":"Hair Arrange","subText":"ヘアアレンジ","link":"' . $homeURL . '","thumbnailUrl":"' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-640x360.png","thumbnailSrcset":"' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-320x180.png 320w, ' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-640x360.png 640w","thumbnailSizes":"(max-width:552px) 40vw,100vw","columnSelect":"4","itemRatio":"16-9","itemText":"on","textDesign":"5","textColor":"#6d4655","textBgColor":"rgba(255,255,255,0.51)","filterOpacity":75,"filterDisplay":"off","filterColor":"#ffffff","pageTemplate":"template-full-width.php"} -->
	<a class="wp-block-jinr-blocks-richmenuchild o--richmenu-item" href="' . $homeURL . '"><div class="o--richmenu-item-inner"><div class="a--richmenu-image"><img src="' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-640x360.png" width="263" height="148" alt="" srcset="' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-320x180.png 320w, ' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-640x360.png 640w" sizes="(max-width:552px) 40vw,100vw"/></div><div class="c--richmenu-contents ef" style="color:#6d4655"><div class="a--richmenu-subtext">ヘアアレンジ</div><div class="a--richmenu-text d--bold">Hair Arrange</div></div></div></a>
	<!-- /wp:jinr-blocks/richmenuchild -->
	
	<!-- wp:jinr-blocks/richmenuchild {"text":"Body Make","subText":"ボディメイク","link":"' . $homeURL . '","thumbnailUrl":"' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-640x360.png","thumbnailSrcset":"' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-320x180.png 320w, ' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-640x360.png 640w","thumbnailSizes":"(max-width:552px) 40vw,100vw","columnSelect":"4","itemRatio":"16-9","itemText":"on","textDesign":"5","textColor":"#6d4655","textBgColor":"rgba(255,255,255,0.51)","filterOpacity":75,"filterDisplay":"off","filterColor":"#ffffff","pageTemplate":"template-full-width.php"} -->
	<a class="wp-block-jinr-blocks-richmenuchild o--richmenu-item" href="' . $homeURL . '"><div class="o--richmenu-item-inner"><div class="a--richmenu-image"><img src="' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-640x360.png" width="263" height="148" alt="" srcset="' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-320x180.png 320w, ' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-640x360.png 640w" sizes="(max-width:552px) 40vw,100vw"/></div><div class="c--richmenu-contents ef" style="color:#6d4655"><div class="a--richmenu-subtext">ボディメイク</div><div class="a--richmenu-text d--bold">Body Make</div></div></div></a>
	<!-- /wp:jinr-blocks/richmenuchild -->
	
	<!-- wp:jinr-blocks/richmenuchild {"text":"Life Style","subText":"ライフスタイル","link":"' . $homeURL . '","thumbnailUrl":"' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-640x360.png","thumbnailSrcset":"' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-320x180.png 320w, ' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-640x360.png 640w","thumbnailSizes":"(max-width:552px) 40vw,100vw","columnSelect":"4","itemRatio":"16-9","itemText":"on","textDesign":"5","textColor":"#6d4655","textBgColor":"rgba(255,255,255,0.51)","filterOpacity":75,"filterDisplay":"off","filterColor":"#ffffff","pageTemplate":"template-full-width.php"} -->
	<a class="wp-block-jinr-blocks-richmenuchild o--richmenu-item" href="' . $homeURL . '"><div class="o--richmenu-item-inner"><div class="a--richmenu-image"><img src="' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-640x360.png" width="263" height="148" alt="" srcset="' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-320x180.png 320w, ' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-640x360.png 640w" sizes="(max-width:552px) 40vw,100vw"/></div><div class="c--richmenu-contents ef" style="color:#6d4655"><div class="a--richmenu-subtext">ライフスタイル</div><div class="a--richmenu-text d--bold">Life Style</div></div></div></a>
	<!-- /wp:jinr-blocks/richmenuchild --></section>
	<!-- /wp:jinr-blocks/richmenu -->
	
	<!-- wp:jinr-blocks/designtitle {"mainText":"「オトナかわいい」の作り方","subText":"コツを掴めば誰でもできる！","divText":"「オトナかわいい」の作り方","titleDesign":"3","radioLayout":"center","radioSymbol":"icon","symbolIcon":"v2weddingring","mediaUrl":"","mediaUrl150":"","titleDesignColor":"#fff0f0","className":"undefined"} -->
	<section class="wp-block-jinr-blocks-designtitle b--jinr-block b--jinr-h2rich d--h2rich-center d--h2rich-style3 d--titledesign-weight-thin d--h2rich-icon undefined js--scr-animation" style="border-color:#fff0f0"><div class="c--h2rich-decoration"><div class="a--h2rich-icon ef" style="color:false"><i class="jin-icons jin-ifont-v2weddingring"></i></div></div><div class="c--h2rich-contents"><span class="a--h2rich-subcopy ef" style="color:false">コツを掴めば誰でもできる！</span><h2 class="a--h2rich-maincopy d--bold ef" style="color:false">「オトナかわいい」の作り方</h2></div><div><span class="a--h2rich-decoration-before" style="background-color:#fff0f0"></span><span class="a--h2rich-decoration-after" style="background-color:#fff0f0"></span></div></section>
	<!-- /wp:jinr-blocks/designtitle -->
	
	<!-- wp:columns -->
	<div class="wp-block-columns js--scr-animation"><!-- wp:column -->
	<div class="wp-block-column"><!-- wp:image {"id":1948,"sizeSlug":"large","linkDestination":"none"} -->
	<figure class="wp-block-image size-large"><img src="' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-640x360.png" alt="" class="wp-image-1948"/></figure>
	<!-- /wp:image --></div>
	<!-- /wp:column -->
	
	<!-- wp:column -->
	<div class="wp-block-column"><!-- wp:paragraph -->
	<p>「同世代のあの子はあんなに垢抜けて可愛いのに、私はなぜか芋くさい感じ。。どうしてなの？」</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:paragraph -->
	<p>高校生になったばかりの頃、周りの子たちが急にオトナっぽくなっていって、自分の『子どもっぽさ』が抜けなくて悩んでいた時期がありました。</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:paragraph -->
	<p>なぜか、垢抜けない。</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:paragraph -->
	<p>そう悩んでいる人は多いと思いますが、<span class="jinr-d--text-color d--marker2">ファッションにもメイクにも、正しいやり方があって、それさえ知れば誰でも「オトナかわいい」は作ることができます。</span></p>
	<!-- /wp:paragraph --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns -->
	
	<!-- wp:jinr-blocks/designborder {"borderStyle":"d--sen-style7","borderColorSet":"#fff0f0","borderColorSetAdmin":"#fff0f0"} -->
	<div class="wp-block-jinr-blocks-designborder b--jinr-block jinr-sen"><div class="d--sen-style7"><span class="a--sen-parts1" style="border-bottom:4px double #fff0f0"></span></div></div>
	<!-- /wp:jinr-blocks/designborder -->
	
	<!-- wp:paragraph {"align":"center"} -->
	<p class="has-text-align-center">↓ 私がオトナかわいいを手に入れるためにやったこと ↓</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:jinr-blocks/postlist {"moreLink":"' . $homeURL . 'category/blocks/","clientId":"846262f7-3a38-4056-981e-7cdacd005df0"} /-->
	
	<!-- wp:jinr-blocks/designtitle {"mainText":"私が使ってるアイテムたち","subText":"お手頃価格で別人に！？","divText":"私が使ってるアイテムたち","titleDesign":"3","radioLayout":"center","radioSymbol":"icon","symbolIcon":"v2lipstick","mediaUrl":"","mediaUrl150":"","titleDesignColor":"#f8e5e5","className":"undefined"} -->
	<section class="wp-block-jinr-blocks-designtitle b--jinr-block b--jinr-h2rich d--h2rich-center d--h2rich-style3 d--titledesign-weight-thin d--h2rich-icon undefined js--scr-animation" style="border-color:#f8e5e5"><div class="c--h2rich-decoration"><div class="a--h2rich-icon ef" style="color:false"><i class="jin-icons jin-ifont-v2lipstick"></i></div></div><div class="c--h2rich-contents"><span class="a--h2rich-subcopy ef" style="color:false">お手頃価格で別人に！？</span><h2 class="a--h2rich-maincopy d--bold ef" style="color:false">私が使ってるアイテムたち</h2></div><div><span class="a--h2rich-decoration-before" style="background-color:#f8e5e5"></span><span class="a--h2rich-decoration-after" style="background-color:#f8e5e5"></span></div></section>
	<!-- /wp:jinr-blocks/designtitle -->
	
	<!-- wp:jinr-blocks/fullwidth {"fullWidthSize":"d--fullwidth-article","fullWidthBgColor":"rgba(255,255,255,0)"} -->
	<section class="wp-block-jinr-blocks-fullwidth b--jinr-block b--jinr-fullwidth-container"><section class="b--jinr-fullwidth" style="background-color:rgba(255,255,255,0)"><div class="d--fullwidth-article d--fullwidth-pad0 d--fullwidth-pad0-sp t--main-width" style="color:false"><!-- wp:paragraph -->
	<p>美容って真剣に向き合うほどお金がかかるものです。私もたくさんの美容品を試して「お金をかけるべき部分」と「節約していい部分」があることに気づきました。</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:paragraph -->
	<p>脱毛のような避けられない出費はあります。そこはお金をしっかりかけるべき部分です。</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:paragraph -->
	<p><span class="jinr-d--text-color d--marker2">でも、プチプラでも「自分を大人っぽく引き立ててくれるアイテム」を賢く取り入れる選択肢を持っておくといいですよ！</span> 私が手放せなくなったプチプラアイテムたち、まとめています↓</p>
	<!-- /wp:paragraph --></div></section></section>
	<!-- /wp:jinr-blocks/fullwidth -->
	
	<!-- wp:jinr-blocks/richmenu {"columnSelect":"6","itemRatio":"1-1","pageTemplate":"template-full-width.php"} -->
	<section class="wp-block-jinr-blocks-richmenu b--jinr-block b--jinr-richmenu d--richmenu-column-2-sp d--richmenu-column6 d--richmenu-ratio1-1 d--richmenu-simple d--richmenu-text-medium d--richmenu-text-style5 d--richmenu-animation-fadebyone js--scr-animation d--richmenu-hover-up"><!-- wp:jinr-blocks/richmenuchild {"text":"ハンドバック","link":"' . $homeURL . '","thumbnailUrl":"' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-150x150.png","thumbnailSrcset":"' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-150x150.png 320w, ' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-640x360.png 640w","thumbnailSizes":"(max-width:552px) 40vw,5vw","columnSelect":"6","itemRatio":"1-1","itemText":"on","textDesign":"5","textColor":"#6d4655","textBgColor":"rgba(255,255,255,0.51)","filterOpacity":75,"filterDisplay":"off","filterColor":"#ffffff","pageTemplate":"template-full-width.php"} -->
	<a class="wp-block-jinr-blocks-richmenuchild o--richmenu-item" href="' . $homeURL . '"><div class="o--richmenu-item-inner"><div class="a--richmenu-image"><img src="' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-150x150.png" width="175" height="175" alt="" srcset="' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-150x150.png 320w, ' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-640x360.png 640w" sizes="(max-width:552px) 40vw,5vw"/></div><div class="c--richmenu-contents ef" style="color:#6d4655"><div class="a--richmenu-text d--bold">ハンドバック</div></div></div></a>
	<!-- /wp:jinr-blocks/richmenuchild -->
	
	<!-- wp:jinr-blocks/richmenuchild {"text":"ポーチの中身","link":"' . $homeURL . '","thumbnailUrl":"' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-150x150.png","thumbnailSrcset":"' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-150x150.png 320w, ' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-640x360.png 640w","thumbnailSizes":"(max-width:552px) 40vw,5vw","columnSelect":"6","itemRatio":"1-1","itemText":"on","textDesign":"5","textColor":"#6d4655","textBgColor":"rgba(255,255,255,0.51)","filterOpacity":75,"filterDisplay":"off","filterColor":"#ffffff","pageTemplate":"template-full-width.php"} -->
	<a class="wp-block-jinr-blocks-richmenuchild o--richmenu-item" href="' . $homeURL . '"><div class="o--richmenu-item-inner"><div class="a--richmenu-image"><img src="' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-150x150.png" width="175" height="175" alt="" srcset="' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-150x150.png 320w, ' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-640x360.png 640w" sizes="(max-width:552px) 40vw,5vw"/></div><div class="c--richmenu-contents ef" style="color:#6d4655"><div class="a--richmenu-text d--bold">ポーチの中身</div></div></div></a>
	<!-- /wp:jinr-blocks/richmenuchild -->
	
	<!-- wp:jinr-blocks/richmenuchild {"text":"ファッション","link":"' . $homeURL . '","thumbnailUrl":"' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-150x150.png","thumbnailSrcset":"' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-150x150.png 320w, ' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-640x360.png 640w","thumbnailSizes":"(max-width:552px) 40vw,5vw","columnSelect":"6","itemRatio":"1-1","itemText":"on","textDesign":"5","textColor":"#6d4655","textBgColor":"rgba(255,255,255,0.51)","filterOpacity":75,"filterDisplay":"off","filterColor":"#ffffff","pageTemplate":"template-full-width.php"} -->
	<a class="wp-block-jinr-blocks-richmenuchild o--richmenu-item" href="' . $homeURL . '"><div class="o--richmenu-item-inner"><div class="a--richmenu-image"><img src="' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-150x150.png" width="175" height="175" alt="" srcset="' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-150x150.png 320w, ' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-640x360.png 640w" sizes="(max-width:552px) 40vw,5vw"/></div><div class="c--richmenu-contents ef" style="color:#6d4655"><div class="a--richmenu-text d--bold">ファッション</div></div></div></a>
	<!-- /wp:jinr-blocks/richmenuchild -->
	
	<!-- wp:jinr-blocks/richmenuchild {"text":"アクセサリー","link":"' . $homeURL . '","thumbnailUrl":"' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-150x150.png","thumbnailSrcset":"' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-150x150.png 320w, ' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-640x360.png 640w","thumbnailSizes":"(max-width:552px) 40vw,5vw","columnSelect":"6","itemRatio":"1-1","itemText":"on","textDesign":"5","textColor":"#6d4655","textBgColor":"rgba(255,255,255,0.51)","filterOpacity":75,"filterDisplay":"off","filterColor":"#ffffff","pageTemplate":"template-full-width.php"} -->
	<a class="wp-block-jinr-blocks-richmenuchild o--richmenu-item" href="' . $homeURL . '"><div class="o--richmenu-item-inner"><div class="a--richmenu-image"><img src="' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-150x150.png" width="175" height="175" alt="" srcset="' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-150x150.png 320w, ' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-640x360.png 640w" sizes="(max-width:552px) 40vw,5vw"/></div><div class="c--richmenu-contents ef" style="color:#6d4655"><div class="a--richmenu-text d--bold">アクセサリー</div></div></div></a>
	<!-- /wp:jinr-blocks/richmenuchild -->
	
	<!-- wp:jinr-blocks/richmenuchild {"link":"' . $homeURL . '","thumbnailUrl":"' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-150x150.png","thumbnailSrcset":"' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-150x150.png 320w, ' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-640x360.png 640w","thumbnailSizes":"(max-width:552px) 40vw,5vw","columnSelect":"6","itemRatio":"1-1","itemText":"on","textDesign":"5","textColor":"#6d4655","textBgColor":"rgba(255,255,255,0.51)","filterOpacity":75,"filterDisplay":"off","filterColor":"#ffffff","pageTemplate":"template-full-width.php"} -->
	<a class="wp-block-jinr-blocks-richmenuchild o--richmenu-item" href="' . $homeURL . '"><div class="o--richmenu-item-inner"><div class="a--richmenu-image"><img src="' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-150x150.png" width="175" height="175" alt="" srcset="' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-150x150.png 320w, ' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-640x360.png 640w" sizes="(max-width:552px) 40vw,5vw"/></div><div class="c--richmenu-contents ef" style="color:#6d4655"><div class="a--richmenu-text d--bold">メニュー名を入力</div></div></div></a>
	<!-- /wp:jinr-blocks/richmenuchild -->
	
	<!-- wp:jinr-blocks/richmenuchild {"link":"' . $homeURL . '","thumbnailUrl":"' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-150x150.png","thumbnailSrcset":"' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-150x150.png 320w, ' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-640x360.png 640w","thumbnailSizes":"(max-width:552px) 40vw,5vw","columnSelect":"6","itemRatio":"1-1","itemText":"on","textDesign":"5","textColor":"#6d4655","textBgColor":"rgba(255,255,255,0.51)","filterOpacity":75,"filterDisplay":"off","filterColor":"#ffffff","pageTemplate":"template-full-width.php"} -->
	<a class="wp-block-jinr-blocks-richmenuchild o--richmenu-item" href="' . $homeURL . '"><div class="o--richmenu-item-inner"><div class="a--richmenu-image"><img src="' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-150x150.png" width="175" height="175" alt="" srcset="' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-150x150.png 320w, ' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-640x360.png 640w" sizes="(max-width:552px) 40vw,5vw"/></div><div class="c--richmenu-contents ef" style="color:#6d4655"><div class="a--richmenu-text d--bold">メニュー名を入力</div></div></div></a>
	<!-- /wp:jinr-blocks/richmenuchild --></section>
	<!-- /wp:jinr-blocks/richmenu -->
	
	<!-- wp:jinr-blocks/background {"backgroundBgColor":"#f3fdfc","backgroundPattern":"d--background-pattern-original","backgroundOpacity":60,"backgroundSize":100,"className":"undefined"} -->
	<div class="wp-block-jinr-blocks-background b--jinr-block b--jinr-background undefined"><div class="o--background-container d--background-design-flat d--background-shadow-s d--border-outset"><div class="c--background-inner d--border-none d--border-1px t--round" style="border-color:#c5c5c5"><!-- wp:jinr-blocks/designtitle {"mainText":"ブログデザインを楽しもう！","subText":"DOWNLOAD","divText":"ブログデザインを楽しもう！","radioLayout":"center","className":"undefined"} -->
	<section class="wp-block-jinr-blocks-designtitle b--jinr-block b--jinr-h2rich d--h2rich-center d--h2rich-style1 d--titledesign-weight-thin d--h2rich-none undefined js--scr-animation" style="border-color:false"><div class="c--h2rich-contents"><span class="a--h2rich-subcopy ef" style="color:false">DOWNLOAD</span><h2 class="a--h2rich-maincopy d--bold ef" style="color:false">ブログデザインを楽しもう！</h2></div></section>
	<!-- /wp:jinr-blocks/designtitle -->
	
	<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"14px"}}} -->
	<p class="has-text-align-center" style="font-size:14px">JIN:Rなら、このDEMOのブログデザインも一瞬で作ることができます。<br><br>たとえパソコン素人でも<strong>「直感的にブログを組み上げる楽しさ」</strong>を味わってもらえるよう<br>使いやすさを追求してつくりあげました。</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"14px"}}} -->
	<p class="has-text-align-center" style="font-size:14px">これまでブログ作りでもどかしい思いをした人ほど、使ってもらいたい作品に仕上がっています。</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:jinr-blocks/button {"content":"今すぐダウンロード ！","inputUrl":"' . $homeURL . '","blockID":"2441a74f-2812-4a5f-85ad-9c151617df57","className":"wp-block-jinr-blocks-button b--jinr-block b--jinr-button js--scr-animation"} /-->
	</div></div><div class="a--background-color" style="background:#f3fdfc"></div><div class="a--background-image d--background-pattern-original t--round d--background-repeat-on" style="opacity:0.4;background-image:url();background-size:100%"></div></div>
	<!-- /wp:jinr-blocks/background -->';


	if ($frontpageslug == 'demo-01') {
		// 記事を更新する場合、または存在している場合
		$pageupdatearry = array(
			'ID'            => $frontpageID,
		);
		wp_update_post($pageupdatearry);
		update_option('show_on_front', 'page');
		update_option('page_on_front', $frontpageID);
	} else {
		// 新規作成する場合
		$pagepresetarry = array(
			'post_title'    => 'デモプリセット記事 Part01',
			'post_content'  => $presetContents,
			'post_name'     => 'demo-01',
			'post_status'   => 'publish',
			'post_type'     => 'page',
			'page_template' => 'template-full-width.php',
		);
		$presetId = wp_insert_post($pagepresetarry);
		if ($presetId != 0) {
			update_post_meta($presetId, '_jinr_noindex_display', 1);
		};
		update_option('show_on_front', 'page');
		update_option('page_on_front', $presetId);
	}
	$query['autofocus[section]'] = 'jinr__design_preset_section';
	$presetsection = add_query_arg($query, admin_url('customize.php'));
	wp_redirect($presetsection);
	exit;
}
function jinr_preset_demo2()
{
	$preset_num = '2';
	update_option('preset_data', 2);
	jinr_export_json_exclude($preset_num);

	$homeURL = esc_url(home_url('/'));

	// 任意の記事を作成する
	$frontpageID    = get_option('page_on_front');
	$frontpageslug  = get_post_field('post_name', $frontpageID);
	$presetContents = '<!-- wp:spacer {"height":"30px"} -->
	<div style="height:30px" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->
	
	<!-- wp:jinr-blocks/designtitle {"mainText":"Pick up","subText":"まず読んで欲しい！","divText":"Pick up","radioLayout":"center","className":"d--maintext-customize","jinrBlocksCSSAttribute":".d--maintext-customize.b--jinr-h2rich.d--h2rich-center .a--h2rich-maincopy {font-size: 30px;}"} -->
	<div class="jinr-add-class-container"><section class="wp-block-jinr-blocks-designtitle b--jinr-block b--jinr-h2rich d--h2rich-center d--h2rich-style1 d--titledesign-weight-thin d--h2rich-none d--maintext-customize js--scr-animation" style="border-color:false"><div class="c--h2rich-contents"><span class="a--h2rich-subcopy ef" style="color:false">まず読んで欲しい！</span><h2 class="a--h2rich-maincopy d--bold ef" style="color:false">Pick up</h2></div></section><style jsx="true">.d--maintext-customize.b--jinr-h2rich.d--h2rich-center .a--h2rich-maincopy {font-size: 30px;}</style></div>
	<!-- /wp:jinr-blocks/designtitle -->
	
	<!-- wp:jinr-blocks/richmenu {"columnSelect":"3","textDesign":"2","radioSpColumn":"1","radioAnimation":"d--richmenu-animation-fade js--scr-animation","textColor":"#ffffff","filterOpacity":72} -->
	<section class="wp-block-jinr-blocks-richmenu b--jinr-block b--jinr-richmenu d--richmenu-column-1-sp d--richmenu-column3 d--richmenu-ratio16-9 d--richmenu-simple d--richmenu-text-medium d--richmenu-text-style2 d--richmenu-animation-fade js--scr-animation d--richmenu-hover-up"><!-- wp:jinr-blocks/richmenuchild {"text":"MENU 01","link":"' . $homeURL . '","thumbnailUrl":"' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-640x360.png","thumbnailSrcset":"' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-320x180.png 320w, ' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-640x360.png 640w","thumbnailSizes":"(max-width:552px) 90vw,50vw","columnSelect":"3","itemRatio":"16-9","itemText":"on","textDesign":"2","textColor":"#ffffff","textBgColor":"rgba(255,255,255,0.51)","filterOpacity":72,"filterDisplay":"off","filterColor":"#ffffff","pageTemplate":""} -->
	<a class="wp-block-jinr-blocks-richmenuchild o--richmenu-item" href="' . $homeURL . '"><div class="o--richmenu-item-inner"><div class="a--richmenu-image"><img src="' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-640x360.png" width="218" height="123" alt="" srcset="' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-320x180.png 320w, ' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-640x360.png 640w" sizes="(max-width:552px) 90vw,50vw"/></div><div class="c--richmenu-contents ef" style="color:#ffffff"><div class="a--richmenu-text d--bold">MENU 01</div></div></div></a>
	<!-- /wp:jinr-blocks/richmenuchild -->
	
	<!-- wp:jinr-blocks/richmenuchild {"text":"MENU 02","link":"' . $homeURL . '","thumbnailUrl":"' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-640x360.png","thumbnailSrcset":"' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-320x180.png 320w, ' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-640x360.png 640w","thumbnailSizes":"(max-width:552px) 90vw,50vw","columnSelect":"3","itemRatio":"16-9","itemText":"on","textDesign":"2","textColor":"#ffffff","textBgColor":"rgba(255,255,255,0.51)","filterOpacity":72,"filterDisplay":"off","filterColor":"#ffffff","pageTemplate":""} -->
	<a class="wp-block-jinr-blocks-richmenuchild o--richmenu-item" href="' . $homeURL . '"><div class="o--richmenu-item-inner"><div class="a--richmenu-image"><img src="' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-640x360.png" width="218" height="123" alt="" srcset="' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-320x180.png 320w, ' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-640x360.png 640w" sizes="(max-width:552px) 90vw,50vw"/></div><div class="c--richmenu-contents ef" style="color:#ffffff"><div class="a--richmenu-text d--bold">MENU 02</div></div></div></a>
	<!-- /wp:jinr-blocks/richmenuchild -->
	
	<!-- wp:jinr-blocks/richmenuchild {"text":"MENU 04","link":"' . $homeURL . '","thumbnailUrl":"' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-640x360.png","thumbnailSrcset":"' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-320x180.png 320w, ' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-640x360.png 640w","thumbnailSizes":"(max-width:552px) 90vw,50vw","columnSelect":"3","itemRatio":"16-9","itemText":"on","textDesign":"2","textColor":"#ffffff","textBgColor":"rgba(255,255,255,0.51)","filterOpacity":72,"filterDisplay":"off","filterColor":"#ffffff","pageTemplate":""} -->
	<a class="wp-block-jinr-blocks-richmenuchild o--richmenu-item" href="' . $homeURL . '"><div class="o--richmenu-item-inner"><div class="a--richmenu-image"><img src="' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-640x360.png" width="218" height="123" alt="" srcset="' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-320x180.png 320w, ' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-640x360.png 640w" sizes="(max-width:552px) 90vw,50vw"/></div><div class="c--richmenu-contents ef" style="color:#ffffff"><div class="a--richmenu-text d--bold">MENU 04</div></div></div></a>
	<!-- /wp:jinr-blocks/richmenuchild --></section>
	<!-- /wp:jinr-blocks/richmenu -->
	
	<!-- wp:paragraph {"displayDeviceAttribute":"jinr-display-pc","displayDevicePCAttribute":"jinr-display-pc"} -->
	<p class="jinr-display-pc"><span class="jinr-d--font-size d--fontsize-15px">※ 「カスタマイズ」>「プロフィール設定」を終えると綺麗に表示されます↓</span></p>
	<!-- /wp:paragraph -->
	
	<!-- wp:jinr-blocks/profile {"displayDeviceAttribute":"jinr-display-pc","displayDevicePCAttribute":"jinr-display-pc"} -->
	<div class="wp-block-jinr-blocks-profile b--jinr-profile-container jinr-display-pc">[jinr_profile design="d--profile-style1" color="d--theme-color" sns_display="on"]</div>
	<!-- /wp:jinr-blocks/profile -->
	
	<!-- wp:jinr-blocks/designtitle {"mainText":"Let\'s go on a Trip","subText":"いますぐ旅に出よう","divText":"Let\'s go on a Trip","titleDesign":"3","radioLayout":"center","radioSymbol":"icon","symbolIcon":"v2airline","topMarginPcAttribute":"d--top-margin-l-pc","topMarginSpAttribute":"d--top-margin-l-sp"} -->
	<section class="wp-block-jinr-blocks-designtitle b--jinr-block b--jinr-h2rich d--h2rich-center d--h2rich-style3 d--titledesign-weight-thin d--h2rich-icon d--top-margin-l-pc d--top-margin-l-sp js--scr-animation" style="border-color:false"><div class="c--h2rich-decoration"><div class="a--h2rich-icon ef" style="color:false"><i class="jin-icons jin-ifont-v2airline"></i></div></div><div class="c--h2rich-contents"><span class="a--h2rich-subcopy ef" style="color:false">いますぐ旅に出よう</span><h2 class="a--h2rich-maincopy d--bold ef" style="color:false">Let\'s go on a Trip</h2></div><div><span class="a--h2rich-decoration-before" style="background-color:false"></span><span class="a--h2rich-decoration-after" style="background-color:false"></span></div></section>
	<!-- /wp:jinr-blocks/designtitle -->
	
	<!-- wp:paragraph {"align":"center","fontSize":"small"} -->
	<p class="has-text-align-center has-small-font-size">テーマについて詳しく知るための記事を集めました</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:jinr-blocks/postlist {"postNum":8,"columnSelect":"4","columnSelectSp":"2","moreLink":"' . $homeURL . 'category/blocks/","clientId":"4b4125e8-c17b-4a28-be12-128b60eb2d96"} /-->
	
	<!-- wp:jinr-blocks/background {"backgroundPattern":"d--background-pattern-original","backgroundOpacity":60,"backgroundSize":100,"imageID":1653,"imageUrl":"https://jinr-demo.jp/demo-4/wp-content/uploads/2022/08/名称未設定のアートワーク-6.png"} -->
	<div class="wp-block-jinr-blocks-background b--jinr-block b--jinr-background"><div class="o--background-container d--background-design-flat d--background-shadow-s d--border-outset"><div class="c--background-inner d--border-none d--border-1px t--round" style="border-color:#c5c5c5"><!-- wp:jinr-blocks/designtitle {"mainText":"Platinum Card","subText":"旅行好きは持っておきたい！","divText":"Platinum Card","radioLayout":"center","radioSymbol":"icon","tagSelect":"div","className":"undefined"} -->
	<section class="wp-block-jinr-blocks-designtitle b--jinr-block b--jinr-h2rich d--h2rich-center d--h2rich-style1 d--titledesign-weight-thin d--h2rich-icon undefined js--scr-animation" style="border-color:false"><div class="c--h2rich-decoration"><div class="a--h2rich-icon ef" style="color:false"><i class="jin-icons jin-ifont-"></i></div></div><div class="c--h2rich-contents"><span class="a--h2rich-subcopy ef" style="color:false">旅行好きは持っておきたい！</span><div class="a--h2rich-maincopy d--bold ef" style="color:false">Platinum Card</div></div></section>
	<!-- /wp:jinr-blocks/designtitle -->
	
	<!-- wp:columns -->
	<div class="wp-block-columns js--scr-animation"><!-- wp:column {"verticalAlignment":"top","width":"50%"} -->
	<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:50%"><!-- wp:image {"align":"center","id":1316,"width":382,"height":228,"sizeSlug":"full","linkDestination":"none"} -->
	<figure class="wp-block-image aligncenter size-full is-resized"><img src="http://jinr-demo.jp/demo-4/wp-content/uploads/2022/08/アートボード-3.png" alt="" class="wp-image-1316" width="382" height="228"/></figure>
	<!-- /wp:image --></div>
	<!-- /wp:column -->
	
	<!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
	<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%"><!-- wp:paragraph -->
	<p>JIN:Rは直感的にwebサイトを構築できるデザインテーマです。</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:paragraph -->
	<p>これまでのWordPressのブロックエディターが感じさせる『特有の取っ付きにくさ』を解消して<strong>「最高に使いやすいデザインツール」</strong>へと昇華させました。</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:jinr-blocks/button {"content":"今すぐダウンロード ！","inputUrl":"' . $homeURL . '","blockID":"64f2e9d9-bd53-43c9-8bfc-e9ad03bf86b4","className":"wp-block-jinr-blocks-button b--jinr-block b--jinr-button js--scr-animation"} /--></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns --></div></div><div class="a--background-color" style="background:#f5f5f5"></div><div class="a--background-image d--background-pattern-original t--round d--background-repeat-on" style="opacity:0.4;background-image:url(https://jinr-demo.jp/demo-4/wp-content/uploads/2022/08/名称未設定のアートワーク-6.png);background-size:100%"></div></div>
	<!-- /wp:jinr-blocks/background -->';

	if ($frontpageslug == 'demo-02') {
		$pageupdatearry = array(
			'ID'            => $frontpageID,
		);
		wp_update_post($pageupdatearry);
		update_option('show_on_front', 'page');
		update_option('page_on_front', $frontpageID);
	} else {
		// 新規作成する場合
		$pagepresetarry = array(
			'post_title'    => 'デモプリセット記事 Part02',
			'post_content'  => $presetContents,
			'post_name'     => 'demo-02',
			'post_status'   => 'publish',
			'post_type'     => 'page',
			'page_template' => 'template-full-width.php',
		);
		$presetId = wp_insert_post($pagepresetarry);
		if ($presetId != 0) {
			update_post_meta($presetId, '_jinr_noindex_display', 1);
		};
		update_option('show_on_front', 'page');
		update_option('page_on_front', $presetId);
	}
	$query['autofocus[section]'] = 'jinr__design_preset_section';
	$presetsection = add_query_arg($query, admin_url('customize.php'));
	wp_redirect($presetsection);
	exit;
}
function jinr_preset_demo3()
{
	$preset_num = '3';
	update_option('preset_data', 3);
	jinr_export_json_exclude($preset_num);

	$homeURL = esc_url(home_url('/'));

	// 任意の記事を作成する
	$frontpageID    = get_option('page_on_front');
	$frontpageslug  = get_post_field('post_name', $frontpageID);
	$presetContents = '<!-- wp:jinr-blocks/richmenu {"itemRatio":"5-2","textDesign":"2","radioHover":"d--richmenu-hover-zoom","textColor":"#ffffff","textBgColor":"#222222","filterDisplay":"on","filterColor":"#000000"} -->
	<section class="wp-block-jinr-blocks-richmenu b--jinr-block b--jinr-richmenu d--richmenu-column-2-sp d--richmenu-column4 d--richmenu-ratio5-2 d--richmenu-simple d--richmenu-text-medium d--richmenu-text-style2 d--richmenu-animation-fadebyone js--scr-animation d--richmenu-hover-zoom"><!-- wp:jinr-blocks/richmenuchild {"text":"キャンプギア","link":"' . $homeURL . '","thumbnailUrl":"https://jinr-demo.jp/demo-14/wp-content/themes/jinr/lib/img/noimage-640x360.png","thumbnailSrcset":"https://jinr-demo.jp/demo-14/wp-content/themes/jinr/lib/img/noimage-320x180.png 320w, https://jinr-demo.jp/demo-14/wp-content/themes/jinr/lib/img/noimage-640x360.png 640w","thumbnailSizes":"(max-width:552px) 40vw,100vw","columnSelect":"4","itemRatio":"5-2","itemText":"on","textDesign":"2","textColor":"#ffffff","textBgColor":"#222222","filterOpacity":75,"filterDisplay":"on","filterColor":"#000000","pageTemplate":""} -->
	<a class="wp-block-jinr-blocks-richmenuchild o--richmenu-item" href="' . $homeURL . '"><div class="o--richmenu-item-inner"><div class="a--richmenu-image"><div class="a--richmenu-filter" style="background:#000000;opacity:0.25"></div><img src="https://jinr-demo.jp/demo-14/wp-content/themes/jinr/lib/img/noimage-640x360.png" width="161" height="64" alt="" srcset="https://jinr-demo.jp/demo-14/wp-content/themes/jinr/lib/img/noimage-320x180.png 320w, https://jinr-demo.jp/demo-14/wp-content/themes/jinr/lib/img/noimage-640x360.png 640w" sizes="(max-width:552px) 40vw,100vw"/></div><div class="c--richmenu-contents ef" style="color:#ffffff"><div class="a--richmenu-text d--bold">キャンプギア</div></div></div></a>
	<!-- /wp:jinr-blocks/richmenuchild -->
	
	<!-- wp:jinr-blocks/richmenuchild {"text":"おすすめのテント","subText":"","link":"' . $homeURL . '","thumbnailUrl":"' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-640x360.png","thumbnailSrcset":"' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-320x180.png 320w, ' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-640x360.png 640w","thumbnailSizes":"(max-width:552px) 40vw,100vw","columnSelect":"4","itemRatio":"5-2","itemText":"on","textDesign":"2","textColor":"#ffffff","textBgColor":"#222222","filterOpacity":75,"filterDisplay":"on","filterColor":"#000000","pageTemplate":""} -->
	<a class="wp-block-jinr-blocks-richmenuchild o--richmenu-item" href="' . $homeURL . '"><div class="o--richmenu-item-inner"><div class="a--richmenu-image"><div class="a--richmenu-filter" style="background:#000000;opacity:0.25"></div><img src="' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-640x360.png" width="161" height="64" alt="" srcset="' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-320x180.png 320w, ' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-640x360.png 640w" sizes="(max-width:552px) 40vw,100vw"/></div><div class="c--richmenu-contents ef" style="color:#ffffff"><div class="a--richmenu-text d--bold">おすすめのテント</div></div></div></a>
	<!-- /wp:jinr-blocks/richmenuchild -->
	
	<!-- wp:jinr-blocks/richmenuchild {"text":"グランピング","subText":"","link":"' . $homeURL . '","thumbnailUrl":"' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-640x360.png","thumbnailSrcset":"' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-320x180.png 320w, ' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-640x360.png 640w","thumbnailSizes":"(max-width:552px) 40vw,100vw","columnSelect":"4","itemRatio":"5-2","itemText":"on","textDesign":"2","textColor":"#ffffff","textBgColor":"#222222","filterOpacity":75,"filterDisplay":"on","filterColor":"#000000","pageTemplate":""} -->
	<a class="wp-block-jinr-blocks-richmenuchild o--richmenu-item" href="' . $homeURL . '"><div class="o--richmenu-item-inner"><div class="a--richmenu-image"><div class="a--richmenu-filter" style="background:#000000;opacity:0.25"></div><img src="' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-640x360.png" width="161" height="64" alt="" srcset="' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-320x180.png 320w, ' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-640x360.png 640w" sizes="(max-width:552px) 40vw,100vw"/></div><div class="c--richmenu-contents ef" style="color:#ffffff"><div class="a--richmenu-text d--bold">グランピング</div></div></div></a>
	<!-- /wp:jinr-blocks/richmenuchild -->
	
	<!-- wp:jinr-blocks/richmenuchild {"text":"キャンプ飯","link":"' . $homeURL . '","thumbnailUrl":"' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-640x360.png","thumbnailSrcset":"' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-320x180.png 320w, ' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-640x360.png 640w","thumbnailSizes":"(max-width:552px) 40vw,100vw","columnSelect":"4","itemRatio":"5-2","itemText":"on","textDesign":"2","textColor":"#ffffff","textBgColor":"#222222","filterOpacity":75,"filterDisplay":"on","filterColor":"#000000","pageTemplate":""} -->
	<a class="wp-block-jinr-blocks-richmenuchild o--richmenu-item" href="' . $homeURL . '"><div class="o--richmenu-item-inner"><div class="a--richmenu-image"><div class="a--richmenu-filter" style="background:#000000;opacity:0.25"></div><img src="' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-640x360.png" width="161" height="64" alt="" srcset="' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-320x180.png 320w, ' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-640x360.png 640w" sizes="(max-width:552px) 40vw,100vw"/></div><div class="c--richmenu-contents ef" style="color:#ffffff"><div class="a--richmenu-text d--bold">キャンプ飯</div></div></div></a>
	<!-- /wp:jinr-blocks/richmenuchild --></section>
	<!-- /wp:jinr-blocks/richmenu -->
	
	<!-- wp:jinr-blocks/background {"backgroundBgColor":"#f9f8ef"} -->
	<div class="wp-block-jinr-blocks-background b--jinr-block b--jinr-background"><div class="o--background-container d--background-design-flat d--background-shadow-s d--border-outset"><div class="c--background-inner d--border-none d--border-1px t--round" style="border-color:#c5c5c5"><!-- wp:jinr-blocks/designtitle {"mainText":"たった10分で丸わかりの「キャンプ入門」","subText":"CAMP GUIDE","divText":"たった10分で丸わかりの「キャンプ入門」","titleDesign":"2","radioSymbol":"icon","symbolIcon":"v2camp","bottomMarginPcAttribute":"d--bottom-margin-s-pc","bottomMarginSpAttribute":"d--bottom-margin-s-sp"} -->
	<section class="wp-block-jinr-blocks-designtitle b--jinr-block b--jinr-h2rich d--h2rich-left d--h2rich-style2 d--titledesign-weight-thin d--h2rich-icon d--bottom-margin-s-pc d--bottom-margin-s-sp js--scr-animation" style="border-color:false"><div class="c--h2rich-decoration"><div class="a--h2rich-icon ef" style="color:false"><i class="jin-icons jin-ifont-v2camp"></i></div></div><div class="c--h2rich-contents"><span class="a--h2rich-subcopy ef" style="color:false">CAMP GUIDE</span><h2 class="a--h2rich-maincopy d--bold ef" style="color:false">たった10分で丸わかりの「キャンプ入門」</h2></div></section>
	<!-- /wp:jinr-blocks/designtitle -->
	
	<!-- wp:paragraph -->
	<p>これから始める人も、この３記事だけ読んでもらえれば大丈夫！<br>キャンプ歴１０年のベテランが「家族でアウトドアを楽しむコツ」をすべて揃えました</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:jinr-blocks/postlist {"postNum":3,"moreLink":"' . $homeURL . 'category/blocks/","clientId":"10224a88-46a4-4fc1-9b4a-66b5bf9e83a6"} /--></div></div><div class="a--background-color" style="background:#f9f8ef"></div><div class="a--background-image t--round d--background-pattern1" style="opacity:0.29999999999999993;background-size:16.666666666666668%"></div></div>
	<!-- /wp:jinr-blocks/background -->
	
	<!-- wp:jinr-blocks/background {"backgroundBgColor":"#f9f8ef"} -->
	<div class="wp-block-jinr-blocks-background b--jinr-block b--jinr-background"><div class="o--background-container d--background-design-flat d--background-shadow-s d--border-outset"><div class="c--background-inner d--border-none d--border-1px t--round" style="border-color:#c5c5c5"><!-- wp:jinr-blocks/designtitle {"mainText":"キャンプ歴10年の私が、ずっと愛用しているアイテムたち","subText":"これだけは揃えておきたい！","divText":"キャンプ歴10年の私が、ずっと愛用しているアイテムたち","titleDesign":"2","radioSymbol":"icon","symbolIcon":"v2rucksack","bottomMarginPcAttribute":"d--bottom-margin-s-pc","bottomMarginSpAttribute":"d--bottom-margin-s-sp"} -->
	<section class="wp-block-jinr-blocks-designtitle b--jinr-block b--jinr-h2rich d--h2rich-left d--h2rich-style2 d--titledesign-weight-thin d--h2rich-icon d--bottom-margin-s-pc d--bottom-margin-s-sp js--scr-animation" style="border-color:false"><div class="c--h2rich-decoration"><div class="a--h2rich-icon ef" style="color:false"><i class="jin-icons jin-ifont-v2rucksack"></i></div></div><div class="c--h2rich-contents"><span class="a--h2rich-subcopy ef" style="color:false">これだけは揃えておきたい！</span><h2 class="a--h2rich-maincopy d--bold ef" style="color:false">キャンプ歴10年の私が、ずっと愛用しているアイテムたち</h2></div></section>
	<!-- /wp:jinr-blocks/designtitle -->
	
	<!-- wp:paragraph -->
	<p>これから始める人も、この３記事だけ読んでもらえれば大丈夫！<br>キャンプ歴１０年のベテランが「家族でアウトドアを楽しむコツ」をすべて揃えました</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:jinr-blocks/richmenu {"columnSelect":"6","itemRatio":"1-1","radioAnimation":"d--richmenu-animation-fade js--scr-animation","radioHover":"d--richmenu-hover-zoom","filterOpacity":85,"filterDisplay":"on","filterColor":"#000000","bottomMarginPcAttribute":"d--bottom-margin-l-pc","bottomMarginSpAttribute":"d--bottom-margin-l-sp"} -->
	<section class="wp-block-jinr-blocks-richmenu b--jinr-block b--jinr-richmenu d--richmenu-column-2-sp d--richmenu-column6 d--richmenu-ratio1-1 d--richmenu-simple d--richmenu-text-medium d--richmenu-text-style5 d--richmenu-animation-fade js--scr-animation d--richmenu-hover-zoom d--bottom-margin-l-pc d--bottom-margin-l-sp "><!-- wp:jinr-blocks/richmenuchild {"text":"堅牢な焚き火台","link":"' . $homeURL . '","thumbnailUrl":"' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-640x360.png","thumbnailSrcset":"' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-320x180.png 320w, ' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-640x360.png 640w","thumbnailSizes":"(max-width:552px) 40vw,5vw","columnSelect":"6","itemRatio":"1-1","itemText":"on","textDesign":"5","textColor":"#3d5435","textBgColor":"rgba(255,255,255,0.51)","filterOpacity":85,"filterDisplay":"on","filterColor":"#000000","pageTemplate":""} -->
	<a class="wp-block-jinr-blocks-richmenuchild o--richmenu-item" href="' . $homeURL . '"><div class="o--richmenu-item-inner"><div class="a--richmenu-image"><div class="a--richmenu-filter" style="background:#000000;opacity:0.15000000000000002"></div><img src="' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-640x360.png" width="171" height="171" alt="" srcset="' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-320x180.png 320w, ' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-640x360.png 640w" sizes="(max-width:552px) 40vw,5vw"/></div><div class="c--richmenu-contents ef" style="color:#3d5435"><div class="a--richmenu-text d--bold">堅牢な焚き火台</div></div></div></a>
	<!-- /wp:jinr-blocks/richmenuchild -->
	
	<!-- wp:jinr-blocks/richmenuchild {"text":"ホットサンドメイカー","link":"' . $homeURL . '","thumbnailUrl":"' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-640x360.png","thumbnailSrcset":"' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-320x180.png 320w, ' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-640x360.png 640w","thumbnailSizes":"(max-width:552px) 40vw,5vw","columnSelect":"6","itemRatio":"1-1","itemText":"on","textDesign":"5","textColor":"#3d5435","textBgColor":"rgba(255,255,255,0.51)","filterOpacity":85,"filterDisplay":"on","filterColor":"#000000","pageTemplate":""} -->
	<a class="wp-block-jinr-blocks-richmenuchild o--richmenu-item" href="' . $homeURL . '"><div class="o--richmenu-item-inner"><div class="a--richmenu-image"><div class="a--richmenu-filter" style="background:#000000;opacity:0.15000000000000002"></div><img src="' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-640x360.png" width="171" height="171" alt="" srcset="' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-320x180.png 320w, ' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-640x360.png 640w" sizes="(max-width:552px) 40vw,5vw"/></div><div class="c--richmenu-contents ef" style="color:#3d5435"><div class="a--richmenu-text d--bold">ホットサンドメイカー</div></div></div></a>
	<!-- /wp:jinr-blocks/richmenuchild -->
	
	<!-- wp:jinr-blocks/richmenuchild {"text":"万能ダッチオーブン","link":"' . $homeURL . '","thumbnailUrl":"' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-640x360.png","thumbnailSrcset":"' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-320x180.png 320w, ' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-640x360.png 640w","thumbnailSizes":"(max-width:552px) 40vw,5vw","columnSelect":"6","itemRatio":"1-1","itemText":"on","textDesign":"5","textColor":"#3d5435","textBgColor":"rgba(255,255,255,0.51)","filterOpacity":85,"filterDisplay":"on","filterColor":"#000000","pageTemplate":""} -->
	<a class="wp-block-jinr-blocks-richmenuchild o--richmenu-item" href="' . $homeURL . '"><div class="o--richmenu-item-inner"><div class="a--richmenu-image"><div class="a--richmenu-filter" style="background:#000000;opacity:0.15000000000000002"></div><img src="' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-640x360.png" width="171" height="171" alt="" srcset="' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-320x180.png 320w, ' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-640x360.png 640w" sizes="(max-width:552px) 40vw,5vw"/></div><div class="c--richmenu-contents ef" style="color:#3d5435"><div class="a--richmenu-text d--bold">万能ダッチオーブン</div></div></div></a>
	<!-- /wp:jinr-blocks/richmenuchild -->
	
	<!-- wp:jinr-blocks/richmenuchild {"text":"コーヒードリッパー","link":"' . $homeURL . '","thumbnailUrl":"' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-640x360.png","thumbnailSrcset":"' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-320x180.png 320w, ' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-640x360.png 640w","thumbnailSizes":"(max-width:552px) 40vw,5vw","columnSelect":"6","itemRatio":"1-1","itemText":"on","textDesign":"5","textColor":"#3d5435","textBgColor":"rgba(255,255,255,0.51)","filterOpacity":85,"filterDisplay":"on","filterColor":"#000000","pageTemplate":""} -->
	<a class="wp-block-jinr-blocks-richmenuchild o--richmenu-item" href="' . $homeURL . '"><div class="o--richmenu-item-inner"><div class="a--richmenu-image"><div class="a--richmenu-filter" style="background:#000000;opacity:0.15000000000000002"></div><img src="' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-640x360.png" width="171" height="171" alt="" srcset="' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-320x180.png 320w, ' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-640x360.png 640w" sizes="(max-width:552px) 40vw,5vw"/></div><div class="c--richmenu-contents ef" style="color:#3d5435"><div class="a--richmenu-text d--bold">コーヒードリッパー</div></div></div></a>
	<!-- /wp:jinr-blocks/richmenuchild -->
	
	<!-- wp:jinr-blocks/richmenuchild {"text":"ダイニングテーブル","link":"' . $homeURL . '","thumbnailUrl":"' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-640x360.png","thumbnailSrcset":"' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-320x180.png 320w, ' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-640x360.png 640w","thumbnailSizes":"(max-width:552px) 40vw,5vw","columnSelect":"6","itemRatio":"1-1","itemText":"on","textDesign":"5","textColor":"#3d5435","textBgColor":"rgba(255,255,255,0.51)","filterOpacity":85,"filterDisplay":"on","filterColor":"#000000","pageTemplate":""} -->
	<a class="wp-block-jinr-blocks-richmenuchild o--richmenu-item" href="' . $homeURL . '"><div class="o--richmenu-item-inner"><div class="a--richmenu-image"><div class="a--richmenu-filter" style="background:#000000;opacity:0.15000000000000002"></div><img src="' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-640x360.png" width="171" height="171" alt="" srcset="' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-320x180.png 320w, ' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-640x360.png 640w" sizes="(max-width:552px) 40vw,5vw"/></div><div class="c--richmenu-contents ef" style="color:#3d5435"><div class="a--richmenu-text d--bold">ダイニングテーブル</div></div></div></a>
	<!-- /wp:jinr-blocks/richmenuchild -->
	
	<!-- wp:jinr-blocks/richmenuchild {"text":"座り心地チェア","link":"' . $homeURL . '","thumbnailUrl":"' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-640x360.png","thumbnailSrcset":"' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-320x180.png 320w, ' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-640x360.png 640w","thumbnailSizes":"(max-width:552px) 40vw,5vw","columnSelect":"6","itemRatio":"1-1","itemText":"on","textDesign":"5","textColor":"#3d5435","textBgColor":"rgba(255,255,255,0.51)","filterOpacity":85,"filterDisplay":"on","filterColor":"#000000","pageTemplate":""} -->
	<a class="wp-block-jinr-blocks-richmenuchild o--richmenu-item" href="' . $homeURL . '"><div class="o--richmenu-item-inner"><div class="a--richmenu-image"><div class="a--richmenu-filter" style="background:#000000;opacity:0.15000000000000002"></div><img src="' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-640x360.png" width="171" height="171" alt="" srcset="' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-320x180.png 320w, ' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-640x360.png 640w" sizes="(max-width:552px) 40vw,5vw"/></div><div class="c--richmenu-contents ef" style="color:#3d5435"><div class="a--richmenu-text d--bold">座り心地チェア</div></div></div></a>
	<!-- /wp:jinr-blocks/richmenuchild --></section>
	<!-- /wp:jinr-blocks/richmenu --></div></div><div class="a--background-color" style="background:#f9f8ef"></div><div class="a--background-image t--round d--background-pattern1" style="opacity:0.29999999999999993;background-size:16.666666666666668%"></div></div>
	<!-- /wp:jinr-blocks/background -->
	
	<!-- wp:jinr-blocks/background {"backgroundBgColor":"#f9f8ef"} -->
	<div class="wp-block-jinr-blocks-background b--jinr-block b--jinr-background"><div class="o--background-container d--background-design-flat d--background-shadow-s d--border-outset"><div class="c--background-inner d--border-none d--border-1px t--round" style="border-color:#c5c5c5"><!-- wp:jinr-blocks/designtitle {"mainText":"ファミリーで野遊びを楽しむためのコツ４選","subText":"知っておけば怖くない！","divText":"ファミリーで野遊びを楽しむためのコツ４選","titleDesign":"2","radioSymbol":"icon","symbolIcon":"v2kid","bottomMarginPcAttribute":"d--bottom-margin-s-pc","bottomMarginSpAttribute":"d--bottom-margin-s-sp"} -->
	<section class="wp-block-jinr-blocks-designtitle b--jinr-block b--jinr-h2rich d--h2rich-left d--h2rich-style2 d--titledesign-weight-thin d--h2rich-icon d--bottom-margin-s-pc d--bottom-margin-s-sp js--scr-animation" style="border-color:false"><div class="c--h2rich-decoration"><div class="a--h2rich-icon ef" style="color:false"><i class="jin-icons jin-ifont-v2kid"></i></div></div><div class="c--h2rich-contents"><span class="a--h2rich-subcopy ef" style="color:false">知っておけば怖くない！</span><h2 class="a--h2rich-maincopy d--bold ef" style="color:false">ファミリーで野遊びを楽しむためのコツ４選</h2></div></section>
	<!-- /wp:jinr-blocks/designtitle -->
	
	<!-- wp:paragraph -->
	<p>これから始める人も、この３記事だけ読んでもらえれば大丈夫！<br>キャンプ歴１０年のベテランが「家族でアウトドアを楽しむコツ」をすべて揃えました</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:jinr-blocks/postlist {"postNum":4,"columnSelect":"4","moreLink":"https://jinr-demo.jp/demo-14/category/blocks/","clientId":"106fa40e-d0ff-4375-9d19-f38fdd40747c"} /--></div></div><div class="a--background-color" style="background:#f9f8ef"></div><div class="a--background-image t--round d--background-pattern1" style="opacity:0.29999999999999993;background-size:16.666666666666668%"></div></div>
	<!-- /wp:jinr-blocks/background -->
	
	<!-- wp:jinr-blocks/background {"backgroundBgColor":"#f9f8ef","backgroundBorderWidth":"d--border-2px","backgroundBorderColor":"#ffffff","backgroundOpacity":40,"backgroundSize":5} -->
	<div class="wp-block-jinr-blocks-background b--jinr-block b--jinr-background"><div class="o--background-container d--background-design-flat d--background-shadow-s d--border-outset"><div class="c--background-inner d--border-none d--border-2px t--round" style="border-color:#ffffff"><!-- wp:jinr-blocks/designtitle {"mainText":"直感的なサイトづくりを","subText":"DOWNLOAD","divText":"直感的なサイトづくりを","radioLayout":"center","mainTextColor":"#3d5435","subTextColor":"#3d5435","titleDesignColor":"#3d5435","symbolColor":"#3d5435"} -->
	<section class="wp-block-jinr-blocks-designtitle b--jinr-block b--jinr-h2rich d--h2rich-center d--h2rich-style1 d--titledesign-weight-thin d--h2rich-none js--scr-animation" style="border-color:#3d5435"><div class="c--h2rich-contents"><span class="a--h2rich-subcopy ef" style="color:#3d5435">DOWNLOAD</span><h2 class="a--h2rich-maincopy d--bold ef" style="color:#3d5435">直感的なサイトづくりを</h2></div></section>
	<!-- /wp:jinr-blocks/designtitle -->
	
	<!-- wp:paragraph {"align":"center"} -->
	<p class="has-text-align-center">WordPressテーマ「JIN:R」は<br>革新的な使いやすさを</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:jinr-blocks/button {"content":"今すぐダウンロード ！","inputUrl":"' . $homeURL . '","blockID":"5545fc4c-66a3-4177-bfee-192634ad2bdc","className":"wp-block-jinr-blocks-button b--jinr-block b--jinr-button js--scr-animation"} /--></div></div><div class="a--background-color" style="background:#f9f8ef"></div><div class="a--background-image t--round d--background-pattern1" style="opacity:0.6;background-size:1.6666666666666667%"></div></div>
	<!-- /wp:jinr-blocks/background -->';

	if ($frontpageslug == 'demo-03') {
		$pageupdatearry = array(
			'ID'            => $frontpageID,
		);
		wp_update_post($pageupdatearry);
		update_option('show_on_front', 'page');
		update_option('page_on_front', $frontpageID);
	} else {
		// 新規作成する場合
		$pagepresetarry = array(
			'post_title'    => 'デモプリセット記事 Part03',
			'post_content'  => $presetContents,
			'post_name'     => 'demo-03',
			'post_status'   => 'publish',
			'post_type'     => 'page',
			'page_template' => 'template-full-width.php',
		);
		$presetId = wp_insert_post($pagepresetarry);
		if ($presetId != 0) {
			update_post_meta($presetId, '_jinr_noindex_display', 1);
		};
		update_option('show_on_front', 'page');
		update_option('page_on_front', $presetId);
	}
	$query['autofocus[section]'] = 'jinr__design_preset_section';
	$presetsection = add_query_arg($query, admin_url('customize.php'));
	wp_redirect($presetsection);
	exit;
}
function jinr_preset_demo4()
{
	$preset_num = '4';
	update_option('preset_data', 4);
	jinr_export_json_exclude($preset_num);
	$homeURL = esc_url(home_url('/'));


	// 任意の記事を作成する
	$frontpageID    = get_option('page_on_front');
	$frontpageslug  = get_post_field('post_name', $frontpageID);
	$presetContents = '<!-- wp:jinr-blocks/fullwidth {"fullWidthBgColor":"#f8f8f8","fullWidthBgColorTransparent":44,"fullWidthParallax":"d--fullwidth-parallax-on"} -->
	<section class="wp-block-jinr-blocks-fullwidth b--jinr-block b--jinr-fullwidth-container"><section class="b--jinr-fullwidth" style="background-color:#f8f8f8"><div class="d--fullwidth-max d--fullwidth-pad0 d--fullwidth-pad0-sp t--main-width" style="color:false"><!-- wp:spacer {"height":"50px","className":"jinr-display-pc"} -->
	<div style="height:50px" aria-hidden="true" class="wp-block-spacer jinr-display-pc"></div>
	<!-- /wp:spacer -->
	
	<!-- wp:paragraph {"align":"center","style":{"typography":{"letterSpacing":"3px"}}} -->
	<p class="has-text-align-center" style="letter-spacing:3px"><span class="jinr-d--font-size d--fontsize-36px">JIN:R DEMO 4</span></p>
	<!-- /wp:paragraph -->
	
	<!-- wp:paragraph {"align":"center","topMarginPcAttribute":"d--top-margin-xs-pc","topMarginSpAttribute":"d--top-margin-s-sp"} -->
	<p class="has-text-align-center d--top-margin-xs-pc d--top-margin-s-sp "><span class="jinr-d--font-size d--fontsize-11px">シンプルだけど、贅沢な生き方</span></p>
	<!-- /wp:paragraph -->
	
	<!-- wp:paragraph -->
	<p><strong>※「カスタマイズ」&gt;「サイトデザイン設定」</strong>で、ヘッダーの項目にある<strong>「トップページではヘッダーを非表示」</strong>にチェックを入れた状態でお使いいただけると綺麗に使えます。このテキストは削除して使ってください。</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:jinr-blocks/richmenu {"textDesign":"2","itemTextSize":"d--richmenu-text-small","textColor":"#ffffff","filterOpacity":42,"filterDisplay":"on","filterColor":"#b3b3b3","pageTemplate":"template-full-width.php"} -->
	<section class="wp-block-jinr-blocks-richmenu b--jinr-block b--jinr-richmenu d--richmenu-column-2-sp d--richmenu-column4 d--richmenu-ratio16-9 d--richmenu-simple d--richmenu-text-small d--richmenu-text-style2 d--richmenu-animation-fadebyone js--scr-animation d--richmenu-hover-up"><!-- wp:jinr-blocks/richmenuchild {"text":"SIMPLE","subText":"シンプルライフ","link":"' . $homeURL . '","thumbnailUrl":"https://jinr-demo.jp/demo-6/wp-content/themes/jinr/lib/img/noimage-640x360.png","thumbnailSrcset":"https://jinr-demo.jp/demo-6/wp-content/themes/jinr/lib/img/noimage-320x180.png 320w, https://jinr-demo.jp/demo-6/wp-content/themes/jinr/lib/img/noimage-640x360.png 640w","thumbnailSizes":"(max-width:552px) 40vw,100vw","columnSelect":"4","itemRatio":"16-9","itemText":"on","textDesign":"2","textColor":"#ffffff","textBgColor":"rgba(255,255,255,0.51)","filterOpacity":42,"filterDisplay":"on","filterColor":"#b3b3b3","pageTemplate":"template-full-width.php"} -->
	<a class="wp-block-jinr-blocks-richmenuchild o--richmenu-item" href="' . $homeURL . '"><div class="o--richmenu-item-inner"><div class="a--richmenu-image"><div class="a--richmenu-filter" style="background:#b3b3b3;opacity:0.5800000000000001"></div><img src="https://jinr-demo.jp/demo-6/wp-content/themes/jinr/lib/img/noimage-640x360.png" width="263" height="148" alt="" srcset="https://jinr-demo.jp/demo-6/wp-content/themes/jinr/lib/img/noimage-320x180.png 320w, https://jinr-demo.jp/demo-6/wp-content/themes/jinr/lib/img/noimage-640x360.png 640w" sizes="(max-width:552px) 40vw,100vw"/></div><div class="c--richmenu-contents ef" style="color:#ffffff"><div class="a--richmenu-subtext">シンプルライフ</div><div class="a--richmenu-text d--bold">SIMPLE</div></div></div></a>
	<!-- /wp:jinr-blocks/richmenuchild -->
	
	<!-- wp:jinr-blocks/richmenuchild {"text":"NOMAD","subText":"ノマドワーク","link":"' . $homeURL . '","thumbnailUrl":"https://jinr-demo.jp/demo-6/wp-content/themes/jinr/lib/img/noimage-640x360.png","thumbnailSrcset":"https://jinr-demo.jp/demo-6/wp-content/themes/jinr/lib/img/noimage-320x180.png 320w, https://jinr-demo.jp/demo-6/wp-content/themes/jinr/lib/img/noimage-640x360.png 640w","thumbnailSizes":"(max-width:552px) 40vw,100vw","columnSelect":"4","itemRatio":"16-9","itemText":"on","textDesign":"2","textColor":"#ffffff","textBgColor":"rgba(255,255,255,0.51)","filterOpacity":42,"filterDisplay":"on","filterColor":"#b3b3b3","pageTemplate":"template-full-width.php"} -->
	<a class="wp-block-jinr-blocks-richmenuchild o--richmenu-item" href="' . $homeURL . '"><div class="o--richmenu-item-inner"><div class="a--richmenu-image"><div class="a--richmenu-filter" style="background:#b3b3b3;opacity:0.5800000000000001"></div><img src="https://jinr-demo.jp/demo-6/wp-content/themes/jinr/lib/img/noimage-640x360.png" width="263" height="148" alt="" srcset="https://jinr-demo.jp/demo-6/wp-content/themes/jinr/lib/img/noimage-320x180.png 320w, https://jinr-demo.jp/demo-6/wp-content/themes/jinr/lib/img/noimage-640x360.png 640w" sizes="(max-width:552px) 40vw,100vw"/></div><div class="c--richmenu-contents ef" style="color:#ffffff"><div class="a--richmenu-subtext">ノマドワーク</div><div class="a--richmenu-text d--bold">NOMAD</div></div></div></a>
	<!-- /wp:jinr-blocks/richmenuchild -->
	
	<!-- wp:jinr-blocks/richmenuchild {"text":"CAMERA","subText":"カメラ","link":"' . $homeURL . '","thumbnailUrl":"https://jinr-demo.jp/demo-6/wp-content/themes/jinr/lib/img/noimage-640x360.png","thumbnailSrcset":"https://jinr-demo.jp/demo-6/wp-content/themes/jinr/lib/img/noimage-320x180.png 320w, https://jinr-demo.jp/demo-6/wp-content/themes/jinr/lib/img/noimage-640x360.png 640w","thumbnailSizes":"(max-width:552px) 40vw,100vw","columnSelect":"4","itemRatio":"16-9","itemText":"on","textDesign":"2","textColor":"#ffffff","textBgColor":"rgba(255,255,255,0.51)","filterOpacity":42,"filterDisplay":"on","filterColor":"#b3b3b3","pageTemplate":"template-full-width.php"} -->
	<a class="wp-block-jinr-blocks-richmenuchild o--richmenu-item" href="' . $homeURL . '"><div class="o--richmenu-item-inner"><div class="a--richmenu-image"><div class="a--richmenu-filter" style="background:#b3b3b3;opacity:0.5800000000000001"></div><img src="https://jinr-demo.jp/demo-6/wp-content/themes/jinr/lib/img/noimage-640x360.png" width="263" height="148" alt="" srcset="https://jinr-demo.jp/demo-6/wp-content/themes/jinr/lib/img/noimage-320x180.png 320w, https://jinr-demo.jp/demo-6/wp-content/themes/jinr/lib/img/noimage-640x360.png 640w" sizes="(max-width:552px) 40vw,100vw"/></div><div class="c--richmenu-contents ef" style="color:#ffffff"><div class="a--richmenu-subtext">カメラ</div><div class="a--richmenu-text d--bold">CAMERA</div></div></div></a>
	<!-- /wp:jinr-blocks/richmenuchild -->
	
	<!-- wp:jinr-blocks/richmenuchild {"text":"FAMILY","subText":"家族との時間","link":"' . $homeURL . '","thumbnailUrl":"https://jinr-demo.jp/demo-6/wp-content/themes/jinr/lib/img/noimage-640x360.png","thumbnailSrcset":"https://jinr-demo.jp/demo-6/wp-content/themes/jinr/lib/img/noimage-320x180.png 320w, https://jinr-demo.jp/demo-6/wp-content/themes/jinr/lib/img/noimage-640x360.png 640w","thumbnailSizes":"(max-width:552px) 40vw,100vw","columnSelect":"4","itemRatio":"16-9","itemText":"on","textDesign":"2","textColor":"#ffffff","textBgColor":"rgba(255,255,255,0.51)","filterOpacity":42,"filterDisplay":"on","filterColor":"#b3b3b3","pageTemplate":"template-full-width.php"} -->
	<a class="wp-block-jinr-blocks-richmenuchild o--richmenu-item" href="' . $homeURL . '"><div class="o--richmenu-item-inner"><div class="a--richmenu-image"><div class="a--richmenu-filter" style="background:#b3b3b3;opacity:0.5800000000000001"></div><img src="https://jinr-demo.jp/demo-6/wp-content/themes/jinr/lib/img/noimage-640x360.png" width="263" height="148" alt="" srcset="https://jinr-demo.jp/demo-6/wp-content/themes/jinr/lib/img/noimage-320x180.png 320w, https://jinr-demo.jp/demo-6/wp-content/themes/jinr/lib/img/noimage-640x360.png 640w" sizes="(max-width:552px) 40vw,100vw"/></div><div class="c--richmenu-contents ef" style="color:#ffffff"><div class="a--richmenu-subtext">家族との時間</div><div class="a--richmenu-text d--bold">FAMILY</div></div></div></a>
	<!-- /wp:jinr-blocks/richmenuchild --></section>
	<!-- /wp:jinr-blocks/richmenu -->
	
	<!-- wp:jinr-blocks/button {"content":"著者「ジン」のプロフィール","inputUrl":"' . $homeURL . '","buttonDesign":"outline","registeredButton":"3","blockID":"972d3cff-6ff7-4b46-bf86-49abd97f53d1","className":"wp-block-jinr-blocks-button b--jinr-block b--jinr-button js--scr-animation"} /-->
	
	<!-- wp:spacer {"height":"50px"} -->
	<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer --></div></section></section>
	<!-- /wp:jinr-blocks/fullwidth -->
	
	<!-- wp:jinr-blocks/fullwidth {"fullWidthSize":"d--fullwidth-article","fullWidthBgColor":"#ffffff"} -->
	<section class="wp-block-jinr-blocks-fullwidth b--jinr-block b--jinr-fullwidth-container"><section class="b--jinr-fullwidth" style="background-color:#ffffff"><div class="d--fullwidth-article d--fullwidth-pad0 d--fullwidth-pad0-sp t--main-width" style="color:false"><!-- wp:spacer {"height":"40px"} -->
	<div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->
	
	<!-- wp:jinr-blocks/designtitle {"mainText":"シンプルに生きると<br>本当に大切なものが見えてくる","subText":"SIMPLE LIFE","divText":"シンプルに生きると<br>本当に大切なものが見えてくる","radioLayout":"center","symbolIcon":"v2cafe","mediaUrl":"","mediaUrl150":"","mainTextColor":"#222222","subTextColor":"#07925c","titleDesignColor":"#222222","symbolColor":"#222222"} -->
	<section class="wp-block-jinr-blocks-designtitle b--jinr-block b--jinr-h2rich d--h2rich-center d--h2rich-style1 d--titledesign-weight-thin d--h2rich-none js--scr-animation" style="border-color:#222222"><div class="c--h2rich-contents"><span class="a--h2rich-subcopy ef" style="color:#07925c">SIMPLE LIFE</span><h2 class="a--h2rich-maincopy d--bold ef" style="color:#222222">シンプルに生きると<br>本当に大切なものが見えてくる</h2></div></section>
	<!-- /wp:jinr-blocks/designtitle -->
	
	<!-- wp:paragraph -->
	<p>初めてこの事に気づいたのは、31歳の時だった。</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:paragraph -->
	<p>20代はシンプルライフとは程遠い、むしろ物に囲まれた生活を送っていた。社会人になってお金を自由に使えるようになった僕は、興味のままに物を買っていき、気づいたらいろんな趣味を持っていた。</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:image {"id":2016,"sizeSlug":"full","linkDestination":"none"} -->
	<figure class="wp-block-image size-full"><img src="https://jinr-demo.jp/demo-6/wp-content/uploads/2022/10/set-image.png" alt="" class="wp-image-2016"/></figure>
	<!-- /wp:image -->
	
	<!-- wp:paragraph -->
	<p>それはそれでいい事だと思うし、必要なステップだったと思う。</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:paragraph -->
	<p>でも家族ができてから、僕の意識が大きく変わった。「圧倒的に本当に大切なもの」と「そうじゃないもの」がはっきりしたのだ。</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:paragraph -->
	<p>僕は何が大切かを書き出して、本当に必要なものだけを残し、あとはすべて手放すことにした。</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:paragraph -->
	<p><span class="jinr-d--text-color d--marker2"><strong>そんなに大切じゃないものを捨てる事で、時間がたくさん浮いて、より大切な物にフォーカスできるようになった。</strong></span></p>
	<!-- /wp:paragraph -->
	
	<!-- wp:paragraph -->
	<p>そういった心境の変化や、僕の大切にしているものをまとめている。気が向いたら読んでほしい。</p>
	<!-- /wp:paragraph --></div></section></section>
	<!-- /wp:jinr-blocks/fullwidth -->
	
	<!-- wp:jinr-blocks/fullwidth {"fullWidthBgColor":"#fcfcfc"} -->
	<section class="wp-block-jinr-blocks-fullwidth b--jinr-block b--jinr-fullwidth-container"><section class="b--jinr-fullwidth" style="background-color:#fcfcfc"><div class="d--fullwidth-max d--fullwidth-pad0 d--fullwidth-pad0-sp t--main-width" style="color:false"><!-- wp:jinr-blocks/designtitle {"mainText":"NEW POST","subText":"新着記事","divText":"NEW POST","subTextColor":"#07925c"} -->
	<section class="wp-block-jinr-blocks-designtitle b--jinr-block b--jinr-h2rich d--h2rich-left d--h2rich-style1 d--titledesign-weight-thin d--h2rich-none js--scr-animation" style="border-color:false"><div class="c--h2rich-contents"><span class="a--h2rich-subcopy ef" style="color:#07925c">新着記事</span><h2 class="a--h2rich-maincopy d--bold ef" style="color:false">NEW POST</h2></div></section>
	<!-- /wp:jinr-blocks/designtitle -->
	
	<!-- wp:jinr-blocks/background {"backgroundBgColor":"#ffffff"} -->
	<div class="wp-block-jinr-blocks-background b--jinr-block b--jinr-background"><div class="o--background-container d--background-design-flat d--background-shadow-s d--border-outset"><div class="c--background-inner d--border-none d--border-1px t--round" style="border-color:#c5c5c5"><!-- wp:jinr-blocks/postlist {"toggleMoreDisplay":true,"moreLink":"https://jinr-demo.jp/demo-6/category/blocks/","clientId":"6ee56d78-ca94-4980-aa13-3b5edeed77c3"} /--></div></div><div class="a--background-color" style="background:#ffffff"></div><div class="a--background-image t--round d--background-pattern1" style="opacity:0.29999999999999993;background-size:16.666666666666668%"></div></div>
	<!-- /wp:jinr-blocks/background -->
	
	<!-- wp:jinr-blocks/designtitle {"mainText":"TRIP / CAMERA","subText":"きままにカメラ旅","divText":"TRIP / CAMERA","mainTextColor":"#222222","subTextColor":"#07925c"} -->
	<section class="wp-block-jinr-blocks-designtitle b--jinr-block b--jinr-h2rich d--h2rich-left d--h2rich-style1 d--titledesign-weight-thin d--h2rich-none js--scr-animation" style="border-color:false"><div class="c--h2rich-contents"><span class="a--h2rich-subcopy ef" style="color:#07925c">きままにカメラ旅</span><h2 class="a--h2rich-maincopy d--bold ef" style="color:#222222">TRIP / CAMERA</h2></div></section>
	<!-- /wp:jinr-blocks/designtitle -->
	
	<!-- wp:jinr-blocks/background {"backgroundBgColor":"#ffffff"} -->
	<div class="wp-block-jinr-blocks-background b--jinr-block b--jinr-background"><div class="o--background-container d--background-design-flat d--background-shadow-s d--border-outset"><div class="c--background-inner d--border-none d--border-1px t--round" style="border-color:#c5c5c5"><!-- wp:jinr-blocks/postlist {"postNum":3,"moreLink":"https://jinr-demo.jp/demo-6/category/blocks/","clientId":"a275d22e-a7e4-405b-afba-ad6cad001ba7"} /--></div></div><div class="a--background-color" style="background:#ffffff"></div><div class="a--background-image t--round d--background-pattern1" style="opacity:0.29999999999999993;background-size:16.666666666666668%"></div></div>
	<!-- /wp:jinr-blocks/background -->
	
	<!-- wp:jinr-blocks/designtitle {"mainText":"ITMES / WORKS","subText":"愛用している仕事道具たち","divText":"ITMES / WORKS","mainTextColor":"#222222","subTextColor":"#07925c"} -->
	<section class="wp-block-jinr-blocks-designtitle b--jinr-block b--jinr-h2rich d--h2rich-left d--h2rich-style1 d--titledesign-weight-thin d--h2rich-none js--scr-animation" style="border-color:false"><div class="c--h2rich-contents"><span class="a--h2rich-subcopy ef" style="color:#07925c">愛用している仕事道具たち</span><h2 class="a--h2rich-maincopy d--bold ef" style="color:#222222">ITMES / WORKS</h2></div></section>
	<!-- /wp:jinr-blocks/designtitle -->
	
	<!-- wp:jinr-blocks/background {"backgroundBgColor":"#ffffff"} -->
	<div class="wp-block-jinr-blocks-background b--jinr-block b--jinr-background"><div class="o--background-container d--background-design-flat d--background-shadow-s d--border-outset"><div class="c--background-inner d--border-none d--border-1px t--round" style="border-color:#c5c5c5"><!-- wp:jinr-blocks/postlist {"postNum":3,"moreLink":"https://jinr-demo.jp/demo-6/category/blocks/","clientId":"69725582-2f7d-467b-b033-eb9e7a137b2e"} /--></div></div><div class="a--background-color" style="background:#ffffff"></div><div class="a--background-image t--round d--background-pattern1" style="opacity:0.29999999999999993;background-size:16.666666666666668%"></div></div>
	<!-- /wp:jinr-blocks/background --></div></section></section>
	<!-- /wp:jinr-blocks/fullwidth -->
	
	<!-- wp:jinr-blocks/fullwidth {"fullWidthBgColor":"#ffffff","fullWidthPaddingPc":"d--fullwidth-pad50","fullWidthPaddingSp":"d--fullwidth-pad30-sp"} -->
	<section class="wp-block-jinr-blocks-fullwidth b--jinr-block b--jinr-fullwidth-container"><section class="b--jinr-fullwidth" style="background-color:#ffffff"><div class="d--fullwidth-max d--fullwidth-pad50 d--fullwidth-pad30-sp t--main-width" style="color:false"><!-- wp:jinr-blocks/background {"backgroundBgColor":"#ffffff","backgroundBorderDesign":"d--border-solid","backgroundBorderColor":"#ffffff"} -->
	<div class="wp-block-jinr-blocks-background b--jinr-block b--jinr-background"><div class="o--background-container d--background-design-flat d--background-shadow-s d--border-outset"><div class="c--background-inner d--border-solid d--border-1px t--round" style="border-color:#ffffff"><!-- wp:jinr-blocks/designtitle {"mainText":"Recommend","subText":"おすすめ商品","divText":"Recommend","titleDesign":"2","radioLayout":"center","radioSymbol":"icon","mainTextColor":"#222222","subTextColor":"#222222","titleDesignColor":"#dcdcdc","tagSelect":"div","className":"d--maintext-customize","bottomMarginPcAttribute":"d--bottom-margin-l-pc","jinrBlocksCSSAttribute":".d--maintext-customize.b--jinr-h2rich.d--h2rich-center .a--h2rich-maincopy {font-size: 30px;}"} -->
	<div class="jinr-add-class-container"><section class="wp-block-jinr-blocks-designtitle b--jinr-block b--jinr-h2rich d--h2rich-center d--h2rich-style2 d--titledesign-weight-thin d--h2rich-icon d--maintext-customize d--bottom-margin-l-pc js--scr-animation" style="border-color:#dcdcdc"><div class="c--h2rich-decoration"><div class="a--h2rich-icon ef" style="color:false"><i class="jin-icons jin-ifont-"></i></div></div><div class="c--h2rich-contents"><span class="a--h2rich-subcopy ef" style="color:#222222">おすすめ商品</span><div class="a--h2rich-maincopy d--bold ef" style="color:#222222">Recommend</div></div></section><style jsx="true">.d--maintext-customize.b--jinr-h2rich.d--h2rich-center .a--h2rich-maincopy {font-size: 30px;}</style></div>
	<!-- /wp:jinr-blocks/designtitle -->

	<!-- wp:columns -->
	<div class="wp-block-columns js--scr-animation"><!-- wp:column {"verticalAlignment":"top","width":"50%"} -->
	<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:50%"><!-- wp:image {"align":"center","id":1364,"sizeSlug":"full","linkDestination":"none"} -->
	<figure class="wp-block-image aligncenter size-full"><img src="https://jinr-demo.jp/demo-2/wp-content/uploads/2022/08/アートボード-1.png" alt="" class="wp-image-1364"/></figure>
	<!-- /wp:image --></div>
	<!-- /wp:column -->

	<!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
	<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%"><!-- wp:paragraph {"align":"center"} -->
	<p class="has-text-align-center"><span class="jinr-d--font-size d--fontsize-18px">WordPress Theme 「JIN:R」</span></p>
	<!-- /wp:paragraph -->

	<!-- wp:paragraph -->
	<p><span class="jinr-d--font-size d--fontsize-15px">JIN:Rは直感的にwebサイトを構築できるデザインテーマです。WordPressブロックエディターの『特有の取っ付きにくさ』を解消して<strong>「最高に使いやすいデザインツール」</strong>へと昇華させました。</span></p>
	<!-- /wp:paragraph -->

	<!-- wp:jinr-blocks/button {"content":"今すぐダウンロード ","inputUrl":"' . $homeURL . '","blockID":"04e4f3f5-ab6e-4aa3-b84d-48e0524617e7","className":"wp-block-jinr-blocks-button b--jinr-block b--jinr-button js--scr-animation"} /--></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns --></div></div><div class="a--background-color" style="background:#ffffff"></div><div class="a--background-image t--round d--background-pattern1" style="opacity:0.29999999999999993;background-size:16.666666666666668%"></div></div>
	<!-- /wp:jinr-blocks/background --></div></section></section>
	<!-- /wp:jinr-blocks/fullwidth -->';

	if ($frontpageslug == 'demo-04') {
		$pageupdatearry = array(
			'ID'            => $frontpageID,
		);
		wp_update_post($pageupdatearry);
		update_option('show_on_front', 'page');
		update_option('page_on_front', $frontpageID);
	} else {
		// 新規作成する場合
		$pagepresetarry = array(
			'post_title'    => 'デモプリセット記事 Part04',
			'post_content'  => $presetContents,
			'post_name'     => 'demo-04',
			'post_status'   => 'publish',
			'post_type'     => 'page',
			'page_template' => 'template-full-width.php',
		);
		$presetId = wp_insert_post($pagepresetarry);
		if ($presetId != 0) {
			update_post_meta($presetId, '_jinr_noindex_display', 1);
		};
		update_option('show_on_front', 'page');
		update_option('page_on_front', $presetId);
	}
	$query['autofocus[section]'] = 'jinr__design_preset_section';
	$presetsection = add_query_arg($query, admin_url('customize.php'));
	wp_redirect($presetsection);
	exit;
}
function jinr_preset_demo5()
{
	$preset_num = '5';
	update_option('preset_data', 5);
	jinr_export_json_exclude($preset_num);
	$homeURL = esc_url(home_url('/'));

	// 任意の記事を作成する
	$frontpageID    = get_option('page_on_front');
	$frontpageslug  = get_post_field('post_name', $frontpageID);
	$presetContents = '<!-- wp:jinr-blocks/richmenu {"itemRatio":"2-3","textDesign":"4","itemTextSize":"d--richmenu-text-small","radioHover":"d--richmenu-hover-zoom","textColor":"#ffffff","filterOpacity":74,"filterDisplay":"on","filterColor":"#d1d3b1"} -->
	<section class="wp-block-jinr-blocks-richmenu b--jinr-block b--jinr-richmenu d--richmenu-column-2-sp d--richmenu-column4 d--richmenu-ratio2-3 d--richmenu-simple d--richmenu-text-small d--richmenu-text-style4 d--richmenu-animation-fadebyone js--scr-animation d--richmenu-hover-zoom"><!-- wp:jinr-blocks/richmenuchild {"text":"アロマテラピー入門","subText":"START","link":"' . $homeURL . '","thumbnailUrl":"' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-640x360.png","thumbnailSrcset":"' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-320x180.png 320w, ' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-640x360.png 640w","thumbnailSizes":"(max-width:552px) 40vw,100vw","columnSelect":"4","itemRatio":"2-3","itemText":"on","textDesign":"4","textColor":"#ffffff","textBgColor":"rgba(255,255,255,0.51)","filterOpacity":74,"filterDisplay":"on","filterColor":"#d1d3b1","pageTemplate":""} -->
	<a class="wp-block-jinr-blocks-richmenuchild o--richmenu-item" href="' . $homeURL . '"><div class="o--richmenu-item-inner"><div class="a--richmenu-image"><div class="a--richmenu-filter" style="background:#d1d3b1;opacity:0.26"></div><img src="' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-640x360.png" width="161" height="241" alt="" srcset="' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-320x180.png 320w, ' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-640x360.png 640w" sizes="(max-width:552px) 40vw,100vw"/></div><div class="c--richmenu-contents ef" style="color:#ffffff"><div class="a--richmenu-subtext">START</div><div class="a--richmenu-parts" style="background-color:#ffffff"></div><div class="a--richmenu-text d--bold">アロマテラピー入門</div></div></div></a>
	<!-- /wp:jinr-blocks/richmenuchild -->
	
	<!-- wp:jinr-blocks/richmenuchild {"text":"家庭での楽しみ方","subText":"HOME","link":"' . $homeURL . '","thumbnailUrl":"' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-640x360.png","thumbnailSrcset":"' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-320x180.png 320w, ' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-640x360.png 640w","thumbnailSizes":"(max-width:552px) 40vw,100vw","columnSelect":"4","itemRatio":"2-3","itemText":"on","textDesign":"4","textColor":"#ffffff","textBgColor":"rgba(255,255,255,0.51)","filterOpacity":74,"filterDisplay":"on","filterColor":"#d1d3b1","pageTemplate":""} -->
	<a class="wp-block-jinr-blocks-richmenuchild o--richmenu-item" href="' . $homeURL . '"><div class="o--richmenu-item-inner"><div class="a--richmenu-image"><div class="a--richmenu-filter" style="background:#d1d3b1;opacity:0.26"></div><img src="' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-640x360.png" width="161" height="241" alt="" srcset="' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-320x180.png 320w, ' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-640x360.png 640w" sizes="(max-width:552px) 40vw,100vw"/></div><div class="c--richmenu-contents ef" style="color:#ffffff"><div class="a--richmenu-subtext">HOME</div><div class="a--richmenu-parts" style="background-color:#ffffff"></div><div class="a--richmenu-text d--bold">家庭での楽しみ方</div></div></div></a>
	<!-- /wp:jinr-blocks/richmenuchild -->
	
	<!-- wp:jinr-blocks/richmenuchild {"text":"ハーブの選び方","subText":"SELECT","link":"' . $homeURL . '","thumbnailUrl":"' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-640x360.png","thumbnailSrcset":"' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-320x180.png 320w, ' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-640x360.png 640w","thumbnailSizes":"(max-width:552px) 40vw,100vw","columnSelect":"4","itemRatio":"2-3","itemText":"on","textDesign":"4","textColor":"#ffffff","textBgColor":"rgba(255,255,255,0.51)","filterOpacity":74,"filterDisplay":"on","filterColor":"#d1d3b1","pageTemplate":""} -->
	<a class="wp-block-jinr-blocks-richmenuchild o--richmenu-item" href="' . $homeURL . '"><div class="o--richmenu-item-inner"><div class="a--richmenu-image"><div class="a--richmenu-filter" style="background:#d1d3b1;opacity:0.26"></div><img src="' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-640x360.png" width="161" height="241" alt="" srcset="' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-320x180.png 320w, ' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-640x360.png 640w" sizes="(max-width:552px) 40vw,100vw"/></div><div class="c--richmenu-contents ef" style="color:#ffffff"><div class="a--richmenu-subtext">SELECT</div><div class="a--richmenu-parts" style="background-color:#ffffff"></div><div class="a--richmenu-text d--bold">ハーブの選び方</div></div></div></a>
	<!-- /wp:jinr-blocks/richmenuchild -->
	
	<!-- wp:jinr-blocks/richmenuchild {"text":"揃えておきたい小物","subText":"ITEMS","link":"' . $homeURL . '","thumbnailUrl":"' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-640x360.png","thumbnailSrcset":"' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-320x180.png 320w, ' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-640x360.png 640w","thumbnailSizes":"(max-width:552px) 40vw,100vw","columnSelect":"4","itemRatio":"2-3","itemText":"on","textDesign":"4","textColor":"#ffffff","textBgColor":"rgba(255,255,255,0.51)","filterOpacity":74,"filterDisplay":"on","filterColor":"#d1d3b1","pageTemplate":""} -->
	<a class="wp-block-jinr-blocks-richmenuchild o--richmenu-item" href="' . $homeURL . '"><div class="o--richmenu-item-inner"><div class="a--richmenu-image"><div class="a--richmenu-filter" style="background:#d1d3b1;opacity:0.26"></div><img src="' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-640x360.png" width="161" height="241" alt="" srcset="' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-320x180.png 320w, ' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-640x360.png 640w" sizes="(max-width:552px) 40vw,100vw"/></div><div class="c--richmenu-contents ef" style="color:#ffffff"><div class="a--richmenu-subtext">ITEMS</div><div class="a--richmenu-parts" style="background-color:#ffffff"></div><div class="a--richmenu-text d--bold">揃えておきたい小物</div></div></div></a>
	<!-- /wp:jinr-blocks/richmenuchild --></section>
	<!-- /wp:jinr-blocks/richmenu -->
	
	<!-- wp:jinr-blocks/background {"backgroundShadowType":"d--background-shadow-m","backgroundBgColor":"#f9f9f2"} -->
	<div class="wp-block-jinr-blocks-background b--jinr-block b--jinr-background"><div class="o--background-container d--background-design-flat d--background-shadow-m d--border-outset"><div class="c--background-inner d--border-none d--border-1px t--round" style="border-color:#c5c5c5"><!-- wp:columns {"isStackedOnMobile":false} -->
	<div class="wp-block-columns is-not-stacked-on-mobile js--scr-animation"><!-- wp:column {"width":"150px"} -->
	<div class="wp-block-column" style="flex-basis:150px"><!-- wp:paragraph {"style":{"color":{"text":"#bca4ea"}}} -->
	<p class="has-text-color" style="color:#bca4ea">CONCEPT</p>
	<!-- /wp:paragraph --></div>
	<!-- /wp:column -->
	
	<!-- wp:column {"verticalAlignment":"center","width":"100%"} -->
	<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:100%"><!-- wp:jinr-blocks/designborder {"borderCustomWidth":"1","borderColorSet":"#e8e2f3","borderColorSetAdmin":"#e8e2f3"} -->
	<div class="wp-block-jinr-blocks-designborder b--jinr-block jinr-sen"><div class="d--sen-style6"><span class="a--sen-parts1" style="height:1px;border-radius:0.5px;background-color:#e8e2f3"></span></div></div>
	<!-- /wp:jinr-blocks/designborder --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns -->
	
	<!-- wp:paragraph {"style":{"typography":{"letterSpacing":"3px"},"color":{"text":"#6a5245"}}} -->
	<p class="has-text-color" style="color:#6a5245;letter-spacing:3px"><span class="jinr-d--font-size d--fontsize-27px">植物の香りのチカラが</span><br><span class="jinr-d--font-size d--fontsize-27px">日常をちょっと特別にしてくれる</span></p>
	<!-- /wp:paragraph -->
	
	<!-- wp:columns -->
	<div class="wp-block-columns js--scr-animation"><!-- wp:column -->
	<div class="wp-block-column"><!-- wp:image {"id":2028,"sizeSlug":"large","linkDestination":"none"} -->
	<figure class="wp-block-image size-large"><img src="' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-640x360.png" alt="" class="wp-image-2028"/></figure>
	<!-- /wp:image --></div>
	<!-- /wp:column -->
	
	<!-- wp:column -->
	<div class="wp-block-column"><!-- wp:paragraph -->
	<p>私たちは普段、たくさんの香りに囲まれて暮らしていますが、それを意識している人は多くありません。</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:paragraph {"style":{"typography":{"letterSpacing":"3px"},"color":{"text":"#6a5245"}}} -->
	<p class="has-text-color" style="color:#6a5245;letter-spacing:3px"><span class="jinr-d--text-color d--marker2">生活に香りをほんの少し取り入れるだけでも、私たちの心がリラックスして、安らぎを得られることができます。</span></p>
	<!-- /wp:paragraph -->
	
	<!-- wp:paragraph {"style":{"typography":{"letterSpacing":"3px"},"color":{"text":"#6a5245"}}} -->
	<p class="has-text-color" style="color:#6a5245;letter-spacing:3px">特に忙しい時期の人ほど、５分でもリラックスを取れると生活が一変します。おうちでできるアロマの楽しみ方について、このサイトでは紹介をしていきますね。</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:jinr-blocks/button {"content":"アロマとの出会い","inputUrl":"' . $homeURL . '","buttonDesign":"arrow","buttonLayout":"d--button-left","registeredButton":"5","blockID":"f2ce2edb-c0ca-477e-98bb-10be7e2a8d0e","className":"wp-block-jinr-blocks-button b--jinr-block b--jinr-button d--button-type5 d--button-left js--scr-animation"} /--></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns --></div></div><div class="a--background-color" style="background:#f9f9f2"></div><div class="a--background-image t--round d--background-pattern1" style="opacity:0.29999999999999993;background-size:16.666666666666668%"></div></div>
	<!-- /wp:jinr-blocks/background -->
	
	<!-- wp:jinr-blocks/fullwidth {"fullWidthBgColor":"#f4f4e8","fullWidthPaddingPc":"d--fullwidth-pad40","fullWidthPaddingSp":"d--fullwidth-pad20-sp","topMarginPcAttribute":"d--top-margin-s-pc"} -->
	<section class="wp-block-jinr-blocks-fullwidth b--jinr-block b--jinr-fullwidth-container d--top-margin-s-pc "><section class="b--jinr-fullwidth" style="background-color:#f4f4e8"><div class="d--fullwidth-max d--fullwidth-pad40 d--fullwidth-pad20-sp t--main-width" style="color:false"><!-- wp:jinr-blocks/designtitle {"mainText":"アロマの愉しみ方","subText":"カテゴリーの記事","divText":"アロマの愉しみ方","titleDesign":"2","radioLayout":"center","radioSymbol":"number","symbolIcon":"leaf","mainTextColor":"#bca4ea","subTextColor":"#bca4ea","titleDesignColor":"#e6e2ed","symbolColor":"#bca4ea"} -->
	<section class="wp-block-jinr-blocks-designtitle b--jinr-block b--jinr-h2rich d--h2rich-center d--h2rich-style2 d--titledesign-weight-thin d--h2rich-number js--scr-animation" style="border-color:#e6e2ed"><div class="c--h2rich-decoration"><div class="a--h2rich-number ef" style="color:#bca4ea">1</div></div><div class="c--h2rich-contents"><span class="a--h2rich-subcopy ef" style="color:#bca4ea">カテゴリーの記事</span><h2 class="a--h2rich-maincopy d--bold ef" style="color:#bca4ea">アロマの愉しみ方</h2></div></section>
	<!-- /wp:jinr-blocks/designtitle -->
	
	<!-- wp:paragraph {"align":"center"} -->
	<p class="has-text-align-center"><span class="jinr-d--font-size d--fontsize-15px">アロマと一言にいっても、手軽な「スプレー」から本格的な「トリートメント」ものまで、さまざまな愉しみ方があります。</span><span class="jinr-d--font-size d--fontsize-15px">まずは自分にあったスタイルを見つけることから始めてみましょう。</span></p>
	<!-- /wp:paragraph -->
	
	<!-- wp:columns -->
	<div class="wp-block-columns js--scr-animation"><!-- wp:column -->
	<div class="wp-block-column"><!-- wp:jinr-blocks/background {"backgroundBgColor":"rgba(255,255,255,0.51)","backgroundBorderColor":"#bca4ea"} -->
	<div class="wp-block-jinr-blocks-background b--jinr-block b--jinr-background"><div class="o--background-container d--background-design-flat d--background-shadow-s d--border-outset"><div class="c--background-inner d--border-none d--border-1px t--round" style="border-color:#bca4ea"><!-- wp:jinr-blocks/designtitle {"mainText":"芳香浴法","subText":"Oil Diffusion","divText":"芳香浴法","radioLayout":"center","tagSelect":"div"} -->
	<section class="wp-block-jinr-blocks-designtitle b--jinr-block b--jinr-h2rich d--h2rich-center d--h2rich-style1 d--titledesign-weight-thin d--h2rich-none js--scr-animation" style="border-color:false"><div class="c--h2rich-contents"><span class="a--h2rich-subcopy ef" style="color:false">Oil Diffusion</span><div class="a--h2rich-maincopy d--bold ef" style="color:false">芳香浴法</div></div></section>
	<!-- /wp:jinr-blocks/designtitle -->
	
	<!-- wp:image {"id":2029,"sizeSlug":"large","linkDestination":"none"} -->
	<figure class="wp-block-image size-large"><img src="' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-640x360.png" alt="" class="wp-image-2029"/></figure>
	<!-- /wp:image -->
	
	<!-- wp:paragraph -->
	<p>精油をタオルに垂らして拡散させて、手軽に香りを愉しむ方法です。このブログでは、精油とタオルの２つを使ったやり方をご紹介いたします。</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:jinr-blocks/button {"content":"芳香浴のやり方","inputUrl":"' . $homeURL . '","buttonDesign":"outline","registeredButton":"3","blockID":"9fda38a3-0d73-49ae-a549-7e31838c204a","className":"wp-block-jinr-blocks-button b--jinr-block b--jinr-button js--scr-animation"} /--></div></div><div class="a--background-color" style="background:rgba(255,255,255,0.51)"></div><div class="a--background-image t--round d--background-pattern1" style="opacity:0.29999999999999993;background-size:16.666666666666668%"></div></div>
	<!-- /wp:jinr-blocks/background --></div>
	<!-- /wp:column -->
	
	<!-- wp:column -->
	<div class="wp-block-column"><!-- wp:jinr-blocks/background {"backgroundBgColor":"rgba(255,255,255,0.51)","backgroundBorderColor":"#bca4ea"} -->
	<div class="wp-block-jinr-blocks-background b--jinr-block b--jinr-background"><div class="o--background-container d--background-design-flat d--background-shadow-s d--border-outset"><div class="c--background-inner d--border-none d--border-1px t--round" style="border-color:#bca4ea"><!-- wp:jinr-blocks/designtitle {"mainText":"吸引法","subText":"Inhalation","divText":"吸引法","radioLayout":"center","tagSelect":"div"} -->
	<section class="wp-block-jinr-blocks-designtitle b--jinr-block b--jinr-h2rich d--h2rich-center d--h2rich-style1 d--titledesign-weight-thin d--h2rich-none js--scr-animation" style="border-color:false"><div class="c--h2rich-contents"><span class="a--h2rich-subcopy ef" style="color:false">Inhalation</span><div class="a--h2rich-maincopy d--bold ef" style="color:false">吸引法</div></div></section>
	<!-- /wp:jinr-blocks/designtitle -->
	
	<!-- wp:image {"id":2029,"sizeSlug":"large","linkDestination":"none"} -->
	<figure class="wp-block-image size-large"><img src="' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-640x360.png" alt="" class="wp-image-2029"/></figure>
	<!-- /wp:image -->
	
	<!-- wp:paragraph -->
	<p>精油をお湯に垂らし、香りを鼻や口から吸い込むことで立ち上る香りを取り入れる方法です。最適な精油の種類についてお伝えします。</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:jinr-blocks/button {"content":"吸引法のやり方","inputUrl":"' . $homeURL . '","buttonDesign":"outline","registeredButton":"3","blockID":"f08492d0-1a63-477b-9dd0-1c716b4062bf","className":"wp-block-jinr-blocks-button b--jinr-block b--jinr-button js--scr-animation"} /--></div></div><div class="a--background-color" style="background:rgba(255,255,255,0.51)"></div><div class="a--background-image t--round d--background-pattern1" style="opacity:0.29999999999999993;background-size:16.666666666666668%"></div></div>
	<!-- /wp:jinr-blocks/background --></div>
	<!-- /wp:column -->
	
	<!-- wp:column -->
	<div class="wp-block-column"><!-- wp:jinr-blocks/background {"backgroundBgColor":"rgba(255,255,255,0.51)","backgroundBorderColor":"#ceb8f2"} -->
	<div class="wp-block-jinr-blocks-background b--jinr-block b--jinr-background"><div class="o--background-container d--background-design-flat d--background-shadow-s d--border-outset"><div class="c--background-inner d--border-none d--border-1px t--round" style="border-color:#ceb8f2"><!-- wp:jinr-blocks/designtitle {"mainText":"沐浴法","subText":"Aromatic Bath","divText":"沐浴法","radioLayout":"center","tagSelect":"div"} -->
	<section class="wp-block-jinr-blocks-designtitle b--jinr-block b--jinr-h2rich d--h2rich-center d--h2rich-style1 d--titledesign-weight-thin d--h2rich-none js--scr-animation" style="border-color:false"><div class="c--h2rich-contents"><span class="a--h2rich-subcopy ef" style="color:false">Aromatic Bath</span><div class="a--h2rich-maincopy d--bold ef" style="color:false">沐浴法</div></div></section>
	<!-- /wp:jinr-blocks/designtitle -->
	
	<!-- wp:image {"id":2029,"sizeSlug":"large","linkDestination":"none"} -->
	<figure class="wp-block-image size-large"><img src="' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-640x360.png" alt="" class="wp-image-2029"/></figure>
	<!-- /wp:image -->
	
	<!-- wp:paragraph -->
	<p>湯船に精油を垂らし香りを愉しみながら入浴することで、全身的なリラクセーションを取る方法です。バスソルトと組み合わせるのもおすすめ。</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:jinr-blocks/button {"content":"沐浴法のやり方","inputUrl":"' . $homeURL . '","buttonDesign":"outline","registeredButton":"3","blockID":"187aae70-6c1c-4b23-a1ea-da00ee8ce54d","className":"wp-block-jinr-blocks-button b--jinr-block b--jinr-button js--scr-animation"} /--></div></div><div class="a--background-color" style="background:rgba(255,255,255,0.51)"></div><div class="a--background-image t--round d--background-pattern1" style="opacity:0.29999999999999993;background-size:16.666666666666668%"></div></div>
	<!-- /wp:jinr-blocks/background --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns -->
	
	<!-- wp:columns -->
	<div class="wp-block-columns js--scr-animation"><!-- wp:column -->
	<div class="wp-block-column"><!-- wp:jinr-blocks/background {"backgroundBgColor":"rgba(255,255,255,0.51)","backgroundBorderColor":"#bca4ea"} -->
	<div class="wp-block-jinr-blocks-background b--jinr-block b--jinr-background"><div class="o--background-container d--background-design-flat d--background-shadow-s d--border-outset"><div class="c--background-inner d--border-none d--border-1px t--round" style="border-color:#bca4ea"><!-- wp:jinr-blocks/designtitle {"mainText":"トリートメント法","subText":"Treatment","divText":"トリートメント法","radioLayout":"center","tagSelect":"div"} -->
	<section class="wp-block-jinr-blocks-designtitle b--jinr-block b--jinr-h2rich d--h2rich-center d--h2rich-style1 d--titledesign-weight-thin d--h2rich-none js--scr-animation" style="border-color:false"><div class="c--h2rich-contents"><span class="a--h2rich-subcopy ef" style="color:false">Treatment</span><div class="a--h2rich-maincopy d--bold ef" style="color:false">トリートメント法</div></div></section>
	<!-- /wp:jinr-blocks/designtitle -->
	
	<!-- wp:image {"id":2029,"sizeSlug":"large","linkDestination":"none"} -->
	<figure class="wp-block-image size-large"><img src="' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-640x360.png" alt="" class="wp-image-2029"/></figure>
	<!-- /wp:image -->
	
	<!-- wp:paragraph -->
	<p>精油を希釈してトリートメントオイルを作り、ボディケアを行う方法です。使う精油応じて得られる効果も異なります。</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:jinr-blocks/button {"content":"トリートメント法","inputUrl":"' . $homeURL . '","buttonDesign":"outline","registeredButton":"3","blockID":"4ad3c307-67d0-4184-bc16-8eada1c46a6a","className":"wp-block-jinr-blocks-button b--jinr-block b--jinr-button js--scr-animation"} /--></div></div><div class="a--background-color" style="background:rgba(255,255,255,0.51)"></div><div class="a--background-image t--round d--background-pattern1" style="opacity:0.29999999999999993;background-size:16.666666666666668%"></div></div>
	<!-- /wp:jinr-blocks/background --></div>
	<!-- /wp:column -->
	
	<!-- wp:column -->
	<div class="wp-block-column"><!-- wp:jinr-blocks/background {"backgroundBgColor":"rgba(255,255,255,0.51)","backgroundBorderColor":"#bca4ea"} -->
	<div class="wp-block-jinr-blocks-background b--jinr-block b--jinr-background"><div class="o--background-container d--background-design-flat d--background-shadow-s d--border-outset"><div class="c--background-inner d--border-none d--border-1px t--round" style="border-color:#bca4ea"><!-- wp:jinr-blocks/designtitle {"mainText":"湿布法","subText":"Compresses","divText":"湿布法","radioLayout":"center","tagSelect":"div"} -->
	<section class="wp-block-jinr-blocks-designtitle b--jinr-block b--jinr-h2rich d--h2rich-center d--h2rich-style1 d--titledesign-weight-thin d--h2rich-none js--scr-animation" style="border-color:false"><div class="c--h2rich-contents"><span class="a--h2rich-subcopy ef" style="color:false">Compresses</span><div class="a--h2rich-maincopy d--bold ef" style="color:false">湿布法</div></div></section>
	<!-- /wp:jinr-blocks/designtitle -->
	
	<!-- wp:image {"id":2029,"sizeSlug":"large","linkDestination":"none"} -->
	<figure class="wp-block-image size-large"><img src="' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-640x360.png" alt="" class="wp-image-2029"/></figure>
	<!-- /wp:image -->
	
	<!-- wp:paragraph -->
	<p>熱めのお湯に浸したタオルを身体に当てて、疲れを癒す方法です。リラックスを感じやすい精油を使うのがポイント。</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:jinr-blocks/button {"content":"湿布法のやり方","inputUrl":"' . $homeURL . '","buttonDesign":"outline","registeredButton":"3","blockID":"07475b9f-7a74-4c1e-9512-4f7af3759716","className":"wp-block-jinr-blocks-button b--jinr-block b--jinr-button js--scr-animation"} /--></div></div><div class="a--background-color" style="background:rgba(255,255,255,0.51)"></div><div class="a--background-image t--round d--background-pattern1" style="opacity:0.29999999999999993;background-size:16.666666666666668%"></div></div>
	<!-- /wp:jinr-blocks/background --></div>
	<!-- /wp:column -->
	
	<!-- wp:column -->
	<div class="wp-block-column"><!-- wp:paragraph -->
	<p></p>
	<!-- /wp:paragraph --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns --></div></section></section>
	<!-- /wp:jinr-blocks/fullwidth -->
	
	<!-- wp:spacer {"height":"40px"} -->
	<div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->
	
	<!-- wp:jinr-blocks/designtitle {"mainText":"基本の「き」","subText":"アロマこれからの人へ","divText":"基本の「き」","titleDesign":"2","radioLayout":"center","radioSymbol":"number","symbolNumber":"2","symbolIcon":"leaf","mainTextColor":"#bca4ea","subTextColor":"#bca4ea","titleDesignColor":"#e6e2ed","symbolColor":"#bca4ea"} -->
	<section class="wp-block-jinr-blocks-designtitle b--jinr-block b--jinr-h2rich d--h2rich-center d--h2rich-style2 d--titledesign-weight-thin d--h2rich-number js--scr-animation" style="border-color:#e6e2ed"><div class="c--h2rich-decoration"><div class="a--h2rich-number ef" style="color:#bca4ea">2</div></div><div class="c--h2rich-contents"><span class="a--h2rich-subcopy ef" style="color:#bca4ea">アロマこれからの人へ</span><h2 class="a--h2rich-maincopy d--bold ef" style="color:#bca4ea">基本の「き」</h2></div></section>
	<!-- /wp:jinr-blocks/designtitle -->
	
	<!-- wp:paragraph {"align":"center","topMarginPcAttribute":"d--top-margin-s-pc"} -->
	<p class="has-text-align-center d--top-margin-s-pc "><span class="jinr-d--font-size d--fontsize-15px">精油の選び方、シチュエーションに応じた使い分けなど、知っておきたい基本知識についてお伝えします。</span></p>
	<!-- /wp:paragraph -->
	
	<!-- wp:jinr-blocks/postlist {"toggleMoreDisplay":true,"buttonText":"Read More","moreLink":"' . $homeURL . 'category/blocks/","clientId":"b096d02a-0146-4cf8-9a38-8bb87d7e3b96"} /-->
	
	<!-- wp:jinr-blocks/fullwidth {"fullWidthBgColor":"#f4f4e8","fullWidthPaddingPc":"d--fullwidth-pad40"} -->
	<section class="wp-block-jinr-blocks-fullwidth b--jinr-block b--jinr-fullwidth-container"><section class="b--jinr-fullwidth" style="background-color:#f4f4e8"><div class="d--fullwidth-max d--fullwidth-pad40 d--fullwidth-pad0-sp t--main-width" style="color:false"><!-- wp:jinr-blocks/designtitle {"mainText":"商品の紹介","subText":"SPONSOR","divText":"商品の紹介","titleDesign":"2","radioLayout":"center","radioSymbol":"number","symbolNumber":"3","titleDesignColor":"#e6e2ed"} -->
	<section class="wp-block-jinr-blocks-designtitle b--jinr-block b--jinr-h2rich d--h2rich-center d--h2rich-style2 d--titledesign-weight-thin d--h2rich-number js--scr-animation" style="border-color:#e6e2ed"><div class="c--h2rich-decoration"><div class="a--h2rich-number ef" style="color:false">3</div></div><div class="c--h2rich-contents"><span class="a--h2rich-subcopy ef" style="color:false">SPONSOR</span><h2 class="a--h2rich-maincopy d--bold ef" style="color:false">商品の紹介</h2></div></section>
	<!-- /wp:jinr-blocks/designtitle -->
	
	<!-- wp:jinr-blocks/background {"backgroundBgColor":"#f4f4e8"} -->
	<div class="wp-block-jinr-blocks-background b--jinr-block b--jinr-background"><div class="o--background-container d--background-design-flat d--background-shadow-s d--border-outset"><div class="c--background-inner d--border-none d--border-1px t--round" style="border-color:#c5c5c5"><!-- wp:columns {"verticalAlignment":"center"} -->
	<div class="wp-block-columns are-vertically-aligned-center js--scr-animation"><!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
	<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%"><!-- wp:image {"align":"center","id":1364,"sizeSlug":"full","linkDestination":"none"} -->
	<figure class="wp-block-image aligncenter size-full"><img src="https://jinr-demo.jp/demo-2/wp-content/uploads/2022/08/アートボード-1.png" alt="" class="wp-image-1364"/></figure>
	<!-- /wp:image --></div>
	<!-- /wp:column -->
	
	<!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
	<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%"><!-- wp:paragraph {"align":"center"} -->
	<p class="has-text-align-center"><strong><span class="jinr-d--font-size d--fontsize-21px">WordPress Theme 「JIN:R」</span></strong></p>
	<!-- /wp:paragraph -->
	
	<!-- wp:paragraph -->
	<p><span class="jinr-d--font-size d--fontsize-15px">JIN:Rは直感的にwebサイトを構築できるデザインテーマです。<br><br>WordPressブロックエディターの『特有の取っ付きにくさ』を解消して<strong>「最高に使いやすいデザインツール」</strong>へと昇華させました。</span></p>
	<!-- /wp:paragraph -->
	
	<!-- wp:jinr-blocks/button {"content":"公式ページで購入 >","inputUrl":"' . $homeURL . '","blockID":"2e0fe6a2-3ea9-4176-843d-2fb944102263","className":"wp-block-jinr-blocks-button b--jinr-block b--jinr-button js--scr-animation"} /-->
	
	<!-- wp:spacer {"height":"17px"} -->
	<div style="height:17px" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns --></div></div><div class="a--background-color" style="background:#f4f4e8"></div><div class="a--background-image t--round d--background-pattern1" style="opacity:0.29999999999999993;background-size:16.666666666666668%"></div></div>
	<!-- /wp:jinr-blocks/background --></div></section></section>
	<!-- /wp:jinr-blocks/fullwidth -->';

	if ($frontpageslug == 'demo-05') {
		$pageupdatearry = array(
			'ID'            => $frontpageID,
		);
		wp_update_post($pageupdatearry);
		update_option('show_on_front', 'page');
		update_option('page_on_front', $frontpageID);
	} else {
		// 新規作成する場合
		$pagepresetarry = array(
			'post_title'    => 'デモプリセット記事 Part05',
			'post_content'  => $presetContents,
			'post_name'     => 'demo-05',
			'post_status'   => 'publish',
			'post_type'     => 'page',
			'page_template' => 'template-full-width.php',
		);
		$presetId = wp_insert_post($pagepresetarry);
		if ($presetId != 0) {
			update_post_meta($presetId, '_jinr_noindex_display', 1);
		};
		update_option('show_on_front', 'page');
		update_option('page_on_front', $presetId);
	}
	$query['autofocus[section]'] = 'jinr__design_preset_section';
	$presetsection = add_query_arg($query, admin_url('customize.php'));
	wp_redirect($presetsection);
	exit;
}
function jinr_preset_demo6()
{
	$preset_num = '6';
	update_option('preset_data', 6);
	jinr_export_json_exclude($preset_num);
	$homeURL = esc_url(home_url('/'));


	// 任意の記事を作成する
	$frontpageID    = get_option('page_on_front');
	$frontpageslug  = get_post_field('post_name', $frontpageID);
	$presetContents = '<!-- wp:jinr-blocks/button {"content":"オンラインサロンに応募する ！","inputUrl":"' . $homeURL . '","registeredButton":"6","blockID":"7ee7d28d-c1a3-4b25-8b77-f912a83689d7","className":"wp-block-jinr-blocks-button b--jinr-block b--jinr-button jinr-display-sp js--scr-animation","displayDeviceAttribute":"jinr-display-sp","displayDeviceSPAttribute":"jinr-display-sp"} /-->
	
	<!-- wp:jinr-blocks/fullwidth {"fullWidthBgColor":"#fbfbfb","fullWidthPaddingPc":"d--fullwidth-pad20","fullWidthPaddingSp":"d--fullwidth-pad30-sp"} -->
	<section class="wp-block-jinr-blocks-fullwidth b--jinr-block b--jinr-fullwidth-container"><section class="b--jinr-fullwidth" style="background-color:#fbfbfb"><div class="d--fullwidth-max d--fullwidth-pad20 d--fullwidth-pad30-sp t--main-width" style="color:false"><!-- wp:jinr-blocks/richmenu {"textDesign":"1"} -->
	<section class="wp-block-jinr-blocks-richmenu b--jinr-block b--jinr-richmenu d--richmenu-column-2-sp d--richmenu-column4 d--richmenu-ratio16-9 d--richmenu-simple d--richmenu-text-medium d--richmenu-text-style1 d--richmenu-animation-fadebyone js--scr-animation d--richmenu-hover-up"><!-- wp:jinr-blocks/richmenuchild {"text":"私の生き方","link":"' . $homeURL . '","thumbnailUrl":"' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-640x360.png","thumbnailSrcset":"' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-320x180.png 320w, ' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-640x360.png 640w","thumbnailSizes":"(max-width:552px) 40vw,100vw","columnSelect":"4","itemRatio":"16-9","itemText":"on","textDesign":"1","textColor":"#725c5c","textBgColor":"rgba(255,255,255,0.51)","filterOpacity":75,"filterDisplay":"off","filterColor":"#ffffff","pageTemplate":""} -->
	<a class="wp-block-jinr-blocks-richmenuchild o--richmenu-item" href="' . $homeURL . '"><div class="o--richmenu-item-inner"><div class="a--richmenu-image"><img src="' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-640x360.png" width="161" height="91" alt="" srcset="' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-320x180.png 320w, ' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-640x360.png 640w" sizes="(max-width:552px) 40vw,100vw"/></div><div class="c--richmenu-contents ef" style="color:#725c5c;background:rgba(255,255,255,0.51)"><div class="a--richmenu-text d--bold">私の生き方</div></div></div></a>
	<!-- /wp:jinr-blocks/richmenuchild -->
	
	<!-- wp:jinr-blocks/richmenuchild {"link":"' . $homeURL . '","thumbnailUrl":"' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-640x360.png","thumbnailSrcset":"' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-320x180.png 320w, ' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-640x360.png 640w","thumbnailSizes":"(max-width:552px) 40vw,100vw","columnSelect":"4","itemRatio":"16-9","itemText":"on","textDesign":"1","textColor":"#725c5c","textBgColor":"rgba(255,255,255,0.51)","filterOpacity":75,"filterDisplay":"off","filterColor":"#ffffff","pageTemplate":""} -->
	<a class="wp-block-jinr-blocks-richmenuchild o--richmenu-item" href="' . $homeURL . '"><div class="o--richmenu-item-inner"><div class="a--richmenu-image"><img src="' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-640x360.png" width="161" height="91" alt="" srcset="' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-320x180.png 320w, ' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-640x360.png 640w" sizes="(max-width:552px) 40vw,100vw"/></div><div class="c--richmenu-contents ef" style="color:#725c5c;background:rgba(255,255,255,0.51)"><div class="a--richmenu-text d--bold">メニュー名を入力</div></div></div></a>
	<!-- /wp:jinr-blocks/richmenuchild -->
	
	<!-- wp:jinr-blocks/richmenuchild {"link":"' . $homeURL . '","thumbnailUrl":"' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-640x360.png","thumbnailSrcset":"' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-320x180.png 320w, ' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-640x360.png 640w","thumbnailSizes":"(max-width:552px) 40vw,100vw","columnSelect":"4","itemRatio":"16-9","itemText":"on","textDesign":"1","textColor":"#725c5c","textBgColor":"rgba(255,255,255,0.51)","filterOpacity":75,"filterDisplay":"off","filterColor":"#ffffff","pageTemplate":""} -->
	<a class="wp-block-jinr-blocks-richmenuchild o--richmenu-item" href="' . $homeURL . '"><div class="o--richmenu-item-inner"><div class="a--richmenu-image"><img src="' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-640x360.png" width="161" height="91" alt="" srcset="' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-320x180.png 320w, ' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-640x360.png 640w" sizes="(max-width:552px) 40vw,100vw"/></div><div class="c--richmenu-contents ef" style="color:#725c5c;background:rgba(255,255,255,0.51)"><div class="a--richmenu-text d--bold">メニュー名を入力</div></div></div></a>
	<!-- /wp:jinr-blocks/richmenuchild -->
	
	<!-- wp:jinr-blocks/richmenuchild {"link":"' . $homeURL . '","thumbnailUrl":"' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-640x360.png","thumbnailSrcset":"' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-320x180.png 320w, ' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-640x360.png 640w","thumbnailSizes":"(max-width:552px) 40vw,100vw","columnSelect":"4","itemRatio":"16-9","itemText":"on","textDesign":"1","textColor":"#725c5c","textBgColor":"rgba(255,255,255,0.51)","filterOpacity":75,"filterDisplay":"off","filterColor":"#ffffff","pageTemplate":""} -->
	<a class="wp-block-jinr-blocks-richmenuchild o--richmenu-item" href="' . $homeURL . '"><div class="o--richmenu-item-inner"><div class="a--richmenu-image"><img src="' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-640x360.png" width="161" height="91" alt="" srcset="' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-320x180.png 320w, ' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-640x360.png 640w" sizes="(max-width:552px) 40vw,100vw"/></div><div class="c--richmenu-contents ef" style="color:#725c5c;background:rgba(255,255,255,0.51)"><div class="a--richmenu-text d--bold">メニュー名を入力</div></div></div></a>
	<!-- /wp:jinr-blocks/richmenuchild --></section>
	<!-- /wp:jinr-blocks/richmenu -->
	
	<!-- wp:jinr-blocks/button {"content":"オンラインサロンに応募する ！","inputUrl":"' . $homeURL . '","registeredButton":"6","blockID":"358ad763-f534-4600-8866-3184367fb785","className":"wp-block-jinr-blocks-button b--jinr-block b--jinr-button jinr-display-pc js--scr-animation","displayDeviceAttribute":"jinr-display-pc","displayDevicePCAttribute":"jinr-display-pc"} /--></div></section></section>
	<!-- /wp:jinr-blocks/fullwidth -->
	
	<!-- wp:columns -->
	<div class="wp-block-columns js--scr-animation"><!-- wp:column {"width":"60%"} -->
	<div class="wp-block-column" style="flex-basis:60%"><!-- wp:image {"id":1989,"sizeSlug":"large","linkDestination":"none"} -->
	<figure class="wp-block-image size-large"><img src="' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-640x360.png" alt="" class="wp-image-1989"/></figure>
	<!-- /wp:image -->
	
	<!-- wp:paragraph {"style":{"color":{"text":"#a99097"}}} -->
	<p class="has-text-color" style="color:#a99097"><span class="jinr-d--font-size d--fontsize-13px"><strong>Profile</strong> ｜ 2017年から個人事業主としてサロン業をスタート。マンションの1室を改装した小さい美容サロンでしたが、年間の来客数は1000人を超える大盛況に。事業拡大のため法人「株式会社 with you」を設立し、代表取締役として就任。</span></p>
	<!-- /wp:paragraph --></div>
	<!-- /wp:column -->
	
	<!-- wp:column {"verticalAlignment":"center","width":"40%"} -->
	<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:40%"><!-- wp:spacer {"height":"50px","className":"jinr-display-pc"} -->
	<div style="height:50px" aria-hidden="true" class="wp-block-spacer jinr-display-pc"></div>
	<!-- /wp:spacer -->
	
	<!-- wp:paragraph {"style":{"color":{"text":"#e86aad"}}} -->
	<p class="has-text-color" style="color:#e86aad"><strong><span class="jinr-d--font-size d--fontsize-27px">成功のチャンスは</span><br><span class="jinr-d--font-size d--fontsize-27px">誰にでもある！</span></strong></p>
	<!-- /wp:paragraph -->
	
	<!-- wp:paragraph -->
	<p>大学生の時、周りの人がみんな会社勤めを選んでいく中、私は「就職」ではなく「起業」をしたいと本気で思っていました。</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:paragraph -->
	<p>そうやって美容サロン経営をスタート。最初は数人のお客さんしか来ない日も続きましたが、SNSでのマーケティングが成功して来客者数がグッと増加。</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:paragraph -->
	<p>現在では年間1,000人に足を運んでもらえる場所になりました。そういった成功体験の発信を、このブログで行なっています。</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:jinr-blocks/button {"content":"Read More","inputUrl":"' . $homeURL . '","buttonDesign":"arrow","buttonLayout":"d--button-right","registeredButton":"5","blockID":"116aee88-5943-45fb-8bc1-3b43d858690f","className":"wp-block-jinr-blocks-button b--jinr-block b--jinr-button js--scr-animation"} /--></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns -->
	
	<!-- wp:jinr-blocks/fullwidth {"fullWidthBgColor":"#fcfcfc","fullWidthPaddingPc":"d--fullwidth-pad40"} -->
	<section class="wp-block-jinr-blocks-fullwidth b--jinr-block b--jinr-fullwidth-container"><section class="b--jinr-fullwidth" style="background-color:#fcfcfc"><div class="d--fullwidth-max d--fullwidth-pad40 d--fullwidth-pad0-sp t--main-width" style="color:false"><!-- wp:jinr-blocks/designtitle {"mainText":"NEW POST","subText":"新着記事","divText":"NEW POST","radioLayout":"center","className":"d--maintext-customize","jinrBlocksCSSAttribute":".d--maintext-customize.b--jinr-h2rich.d--h2rich-center .a--h2rich-maincopy {font-size: 30px;}"} -->
	<div class="jinr-add-class-container"><section class="wp-block-jinr-blocks-designtitle b--jinr-block b--jinr-h2rich d--h2rich-center d--h2rich-style1 d--titledesign-weight-thin d--h2rich-none d--maintext-customize js--scr-animation" style="border-color:false"><div class="c--h2rich-contents"><span class="a--h2rich-subcopy ef" style="color:false">新着記事</span><h2 class="a--h2rich-maincopy d--bold ef" style="color:false">NEW POST</h2></div></section><style jsx="true">.d--maintext-customize.b--jinr-h2rich.d--h2rich-center .a--h2rich-maincopy {font-size: 30px;}</style></div>
	<!-- /wp:jinr-blocks/designtitle -->

	<!-- wp:paragraph {"align":"center","topMarginPcAttribute":"d--top-margin-s-pc"} -->
	<p class="has-text-align-center d--top-margin-s-pc "><span class="jinr-d--font-size d--fontsize-15px">私の日々の活動を、ブログ記事としてアップしています！</span></p>
	<!-- /wp:paragraph -->

	<!-- wp:jinr-blocks/postlist {"toggleMoreDisplay":true,"moreLink":"https://jinr-demo.jp/demo-3/category/blocks/","clientId":"4d106e74-c86a-48a7-a94c-4b07b34b5c95"} /--></div></section></section>
	<!-- /wp:jinr-blocks/fullwidth -->

	<!-- wp:spacer {"height":"40px"} -->
	<div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->

	<!-- wp:jinr-blocks/designtitle {"mainText":"WORKS","subText":"これまでの活動","divText":"WORKS","className":"d--maintext-customize","jinrBlocksCSSAttribute":".d--maintext-customize.b--jinr-h2rich.d--h2rich-left .a--h2rich-maincopy {font-size: 30px;}"} -->
	<div class="jinr-add-class-container"><section class="wp-block-jinr-blocks-designtitle b--jinr-block b--jinr-h2rich d--h2rich-left d--h2rich-style1 d--titledesign-weight-thin d--h2rich-none d--maintext-customize js--scr-animation" style="border-color:false"><div class="c--h2rich-contents"><span class="a--h2rich-subcopy ef" style="color:false">これまでの活動</span><h2 class="a--h2rich-maincopy d--bold ef" style="color:false">WORKS</h2></div></section><style jsx="true">.d--maintext-customize.b--jinr-h2rich.d--h2rich-left .a--h2rich-maincopy {font-size: 30px;}</style></div>
	<!-- /wp:jinr-blocks/designtitle -->

	<!-- wp:columns -->
	<div class="wp-block-columns js--scr-animation"><!-- wp:column {"width":"33.33%"} -->
	<div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:paragraph -->
	<p>美容サロンの経営にあたっての、開業準備・マーケティング・お客さまのフォローアップ、経営論などをまとめています。</p>
	<!-- /wp:paragraph -->

	<!-- wp:paragraph -->
	<p>サロンをやっていく中で、女性起業家ならではの「難しさ」はもちろんありました。中には、馬鹿してきたりする人もたくさんいました。</p>
	<!-- /wp:paragraph -->

	<!-- wp:paragraph -->
	<p>でも、そういったことを乗り越えたからこそできる話を、記事にして紹介したいと思います。</p>
	<!-- /wp:paragraph --></div>
	<!-- /wp:column -->

	<!-- wp:column {"width":"66.66%"} -->
	<div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:jinr-blocks/postlist {"postNum":3,"listDesign":"d--postlist-rectangle","listDesignSp":"d--postlist-rectangle-sp","columnSelect":"1","columnSelectSp":"2","displayCategory":"5","buttonText":"Read More","moreLink":"https://jinr-demo.jp/demo-3/category/tips/","clientId":"7fb6f352-194f-4e24-a77f-56646df18a0b"} /--></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns -->

	<!-- wp:columns -->
	<div class="wp-block-columns js--scr-animation"><!-- wp:column -->
	<div class="wp-block-column"><!-- wp:jinr-blocks/background {"backgroundBgColor":"#f9f7f8"} -->
	<div class="wp-block-jinr-blocks-background b--jinr-block b--jinr-background"><div class="o--background-container d--background-design-flat d--background-shadow-s d--border-outset"><div class="c--background-inner d--border-none d--border-1px t--round" style="border-color:#c5c5c5"><!-- wp:jinr-blocks/designtitle {"mainText":"Contact","subText":"お仕事のご依頼","divText":"Contact","radioLayout":"center","radioSymbol":"icon","symbolIcon":"v2mail","className":"d--maintext-customize","topMarginPcAttribute":"d--top-margin-l-pc","jinrBlocksCSSAttribute":".d--maintext-customize.b--jinr-h2rich.d--h2rich-center .a--h2rich-maincopy {font-size: 30px!important;}"} -->
	<div class="jinr-add-class-container"><section class="wp-block-jinr-blocks-designtitle b--jinr-block b--jinr-h2rich d--h2rich-center d--h2rich-style1 d--titledesign-weight-thin d--h2rich-icon d--maintext-customize d--top-margin-l-pc js--scr-animation" style="border-color:false"><div class="c--h2rich-decoration"><div class="a--h2rich-icon ef" style="color:false"><i class="jin-icons jin-ifont-v2mail"></i></div></div><div class="c--h2rich-contents"><span class="a--h2rich-subcopy ef" style="color:false">お仕事のご依頼</span><h2 class="a--h2rich-maincopy d--bold ef" style="color:false">Contact</h2></div></section><style jsx="true">.d--maintext-customize.b--jinr-h2rich.d--h2rich-center .a--h2rich-maincopy {font-size: 30px!important;}</style></div>
	<!-- /wp:jinr-blocks/designtitle -->

	<!-- wp:paragraph {"align":"center","style":{"color":{"text":"#ea83bc"}}} -->
	<p class="has-text-align-center has-text-color" style="color:#ea83bc"><span class="jinr-d--font-size d--fontsize-15px">YouTubeのコラボ依頼、広告掲載の依頼</span><br><span class="jinr-d--font-size d--fontsize-15px">以下のフォームからお願いします。</span></p>
	<!-- /wp:paragraph -->

	<!-- wp:jinr-blocks/button {"content":"メールフォームへ","inputUrl":"' . $homeURL . '","buttonDesign":"outline","registeredButton":"4","blockID":"80207712-159d-4bce-a24f-2231ac0c532f","className":"wp-block-jinr-blocks-button b--jinr-block b--jinr-button js--scr-animation"} /--></div></div><div class="a--background-color" style="background:#f9f7f8"></div><div class="a--background-image t--round d--background-pattern1" style="opacity:0.29999999999999993;background-size:16.666666666666668%"></div></div>
	<!-- /wp:jinr-blocks/background --></div>
	<!-- /wp:column -->

	<!-- wp:column -->
	<div class="wp-block-column"><!-- wp:jinr-blocks/background {"backgroundBgColorSelect":"grad","backgroundBgColor":"linear-gradient(135deg,rgb(242,201,201) 0%,rgb(243,145,222) 48%,rgb(195,157,246) 100%)"} -->
	<div class="wp-block-jinr-blocks-background b--jinr-block b--jinr-background"><div class="o--background-container d--background-design-flat d--background-shadow-s d--border-outset"><div class="c--background-inner d--border-none d--border-1px t--round" style="border-color:#c5c5c5"><!-- wp:jinr-blocks/designtitle {"mainText":"Community","subText":"メンバー1000人突破！","divText":"Community","radioLayout":"center","radioSymbol":"icon","symbolIcon":"v2heart","mainTextColor":"#ffffff","subTextColor":"#ffffff","symbolColor":"#ffffff","className":"d--maintext-customize","topMarginPcAttribute":"d--top-margin-l-pc"} -->
	<section class="wp-block-jinr-blocks-designtitle b--jinr-block b--jinr-h2rich d--h2rich-center d--h2rich-style1 d--titledesign-weight-thin d--h2rich-icon d--maintext-customize d--top-margin-l-pc js--scr-animation" style="border-color:false"><div class="c--h2rich-decoration"><div class="a--h2rich-icon ef" style="color:#ffffff"><i class="jin-icons jin-ifont-v2heart"></i></div></div><div class="c--h2rich-contents"><span class="a--h2rich-subcopy ef" style="color:#ffffff">メンバー1000人突破！</span><h2 class="a--h2rich-maincopy d--bold ef" style="color:#ffffff">Community</h2></div></section>
	<!-- /wp:jinr-blocks/designtitle -->

	<!-- wp:paragraph {"align":"center","textColor":"white"} -->
	<p class="has-text-align-center has-white-color has-text-color"><span class="jinr-d--font-size d--fontsize-15px">オンラインサロンのメンバー募集中<br>毎月100人限定で招待しています</span></p>
	<!-- /wp:paragraph -->

	<!-- wp:jinr-blocks/button {"content":"メンバー応募ページへ","inputUrl":"' . $homeURL . '","buttonDesign":"outline","registeredButton":"3","blockID":"4c5a48cc-32fe-4a52-804a-7fa20c1d05fc","className":"wp-block-jinr-blocks-button b--jinr-block b--jinr-button js--scr-animation"} /--></div></div><div class="a--background-color" style="background:linear-gradient(135deg,rgb(242,201,201) 0%,rgb(243,145,222) 48%,rgb(195,157,246) 100%)"></div><div class="a--background-image t--round d--background-pattern1" style="opacity:0.29999999999999993;background-size:16.666666666666668%"></div></div>
	<!-- /wp:jinr-blocks/background --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns -->';

	if ($frontpageslug == 'demo-06') {
		$pageupdatearry = array(
			'ID'            => $frontpageID,
		);
		wp_update_post($pageupdatearry);
		update_option('show_on_front', 'page');
		update_option('page_on_front', $frontpageID);
	} else {
		// 新規作成する場合
		$pagepresetarry = array(
			'post_title'    => 'デモプリセット記事 Part06',
			'post_content'  => $presetContents,
			'post_name'     => 'demo-06',
			'post_status'   => 'publish',
			'post_type'     => 'page',
			'page_template' => 'template-full-width.php',
		);
		$presetId = wp_insert_post($pagepresetarry);
		if ($presetId != 0) {
			update_post_meta($presetId, '_jinr_noindex_display', 1);
		};
		update_option('show_on_front', 'page');
		update_option('page_on_front', $presetId);
	}
	$query['autofocus[section]'] = 'jinr__design_preset_section';
	$presetsection = add_query_arg($query, admin_url('customize.php'));
	wp_redirect($presetsection);
	exit;
}
function jinr_preset_demo7()
{
	$preset_num = '7';
	update_option('preset_data', 7);
	jinr_export_json_exclude($preset_num);
	$homeURL = esc_url(home_url('/'));


	// 任意の記事を作成する
	$frontpageID    = get_option('page_on_front');
	$frontpageslug  = get_post_field('post_name', $frontpageID);
	$presetContents = '<!-- wp:jinr-blocks/fullwidth {"fullWidthBgColor":"#dce7ed","className":"undefined"} -->
	<section class="wp-block-jinr-blocks-fullwidth b--jinr-block b--jinr-fullwidth-container undefined"><section class="b--jinr-fullwidth" style="background-color:#dce7ed"><div class="d--fullwidth-max d--fullwidth-pad0 d--fullwidth-pad0-sp t--main-width" style="color:false"><!-- wp:spacer {"height":"20px","className":"jinr-display-pc"} -->
	<div style="height:20px" aria-hidden="true" class="wp-block-spacer jinr-display-pc"></div>
	<!-- /wp:spacer -->
	
	<!-- wp:paragraph {"align":"center","style":{"typography":{"letterSpacing":"5px"}}} -->
	<p class="has-text-align-center" style="letter-spacing:5px"><span class="jinr-d--font-size d--fontsize-30px"><strong>PICK UP!</strong></span></p>
	<!-- /wp:paragraph -->
	
	<!-- wp:paragraph {"align":"center","topMarginPcAttribute":"d--top-margin-xs-pc","topMarginSpAttribute":"d--top-margin-xs-sp"} -->
	<p class="has-text-align-center d--top-margin-xs-pc d--top-margin-xs-sp "><span class="jinr-d--font-size d--fontsize-15px">この4STEPから進めていきましょう！</span></p>
	<!-- /wp:paragraph -->
	
	<!-- wp:jinr-blocks/richmenu {"pageTemplate":"template-full-width.php","className":"undefined"} -->
	<section class="wp-block-jinr-blocks-richmenu b--jinr-block b--jinr-richmenu d--richmenu-column-2-sp d--richmenu-column4 d--richmenu-ratio16-9 d--richmenu-simple d--richmenu-text-medium d--richmenu-text-style5 d--richmenu-animation-fadebyone js--scr-animation d--richmenu-hover-up undefined"><!-- wp:jinr-blocks/richmenuchild {"text":"ダウンロード","subText":"DOWNLOAD","link":"' . $homeURL . '","thumbnailUrl":"https://jinr-demo.jp/demo-15/wp-content/themes/jinr/lib/img/noimage-640x360.png","thumbnailSrcset":"https://jinr-demo.jp/demo-15/wp-content/themes/jinr/lib/img/noimage-320x180.png 320w, https://jinr-demo.jp/demo-15/wp-content/themes/jinr/lib/img/noimage-640x360.png 640w","thumbnailSizes":"(max-width:552px) 40vw,100vw","columnSelect":"4","itemRatio":"16-9","itemText":"on","textDesign":"5","textColor":"#31345e","textBgColor":"rgba(255,255,255,0.51)","filterOpacity":75,"filterDisplay":"off","filterColor":"#ffffff","pageTemplate":"template-full-width.php","className":"undefined"} -->
	<a class="wp-block-jinr-blocks-richmenuchild o--richmenu-item undefined" href="' . $homeURL . '"><div class="o--richmenu-item-inner"><div class="a--richmenu-image"><img src="https://jinr-demo.jp/demo-15/wp-content/themes/jinr/lib/img/noimage-640x360.png" width="263" height="148" alt="" srcset="https://jinr-demo.jp/demo-15/wp-content/themes/jinr/lib/img/noimage-320x180.png 320w, https://jinr-demo.jp/demo-15/wp-content/themes/jinr/lib/img/noimage-640x360.png 640w" sizes="(max-width:552px) 40vw,100vw"/></div><div class="c--richmenu-contents ef" style="color:#31345e"><div class="a--richmenu-subtext">DOWNLOAD</div><div class="a--richmenu-text d--bold">ダウンロード</div></div></div></a>
	<!-- /wp:jinr-blocks/richmenuchild -->
	
	<!-- wp:jinr-blocks/richmenuchild {"text":"インストール","subText":"Install","link":"' . $homeURL . '","thumbnailUrl":"https://jinr-demo.jp/demo-15/wp-content/themes/jinr/lib/img/noimage-640x360.png","thumbnailSrcset":"https://jinr-demo.jp/demo-15/wp-content/themes/jinr/lib/img/noimage-320x180.png 320w, https://jinr-demo.jp/demo-15/wp-content/themes/jinr/lib/img/noimage-640x360.png 640w","thumbnailSizes":"(max-width:552px) 40vw,100vw","columnSelect":"4","itemRatio":"16-9","itemText":"on","textDesign":"5","textColor":"#31345e","textBgColor":"rgba(255,255,255,0.51)","filterOpacity":75,"filterDisplay":"off","filterColor":"#ffffff","pageTemplate":"template-full-width.php","className":"undefined"} -->
	<a class="wp-block-jinr-blocks-richmenuchild o--richmenu-item undefined" href="' . $homeURL . '"><div class="o--richmenu-item-inner"><div class="a--richmenu-image"><img src="https://jinr-demo.jp/demo-15/wp-content/themes/jinr/lib/img/noimage-640x360.png" width="263" height="148" alt="" srcset="https://jinr-demo.jp/demo-15/wp-content/themes/jinr/lib/img/noimage-320x180.png 320w, https://jinr-demo.jp/demo-15/wp-content/themes/jinr/lib/img/noimage-640x360.png 640w" sizes="(max-width:552px) 40vw,100vw"/></div><div class="c--richmenu-contents ef" style="color:#31345e"><div class="a--richmenu-subtext">Install</div><div class="a--richmenu-text d--bold">インストール</div></div></div></a>
	<!-- /wp:jinr-blocks/richmenuchild -->
	
	<!-- wp:jinr-blocks/richmenuchild {"text":"デザインインポート","subText":"Design import","link":"' . $homeURL . '","thumbnailUrl":"https://jinr-demo.jp/demo-15/wp-content/themes/jinr/lib/img/noimage-640x360.png","thumbnailSrcset":"https://jinr-demo.jp/demo-15/wp-content/themes/jinr/lib/img/noimage-320x180.png 320w, https://jinr-demo.jp/demo-15/wp-content/themes/jinr/lib/img/noimage-640x360.png 640w","thumbnailSizes":"(max-width:552px) 40vw,100vw","columnSelect":"4","itemRatio":"16-9","itemText":"on","textDesign":"5","textColor":"#31345e","textBgColor":"rgba(255,255,255,0.51)","filterOpacity":75,"filterDisplay":"off","filterColor":"#ffffff","pageTemplate":"template-full-width.php","className":"undefined"} -->
	<a class="wp-block-jinr-blocks-richmenuchild o--richmenu-item undefined" href="' . $homeURL . '"><div class="o--richmenu-item-inner"><div class="a--richmenu-image"><img src="https://jinr-demo.jp/demo-15/wp-content/themes/jinr/lib/img/noimage-640x360.png" width="263" height="148" alt="" srcset="https://jinr-demo.jp/demo-15/wp-content/themes/jinr/lib/img/noimage-320x180.png 320w, https://jinr-demo.jp/demo-15/wp-content/themes/jinr/lib/img/noimage-640x360.png 640w" sizes="(max-width:552px) 40vw,100vw"/></div><div class="c--richmenu-contents ef" style="color:#31345e"><div class="a--richmenu-subtext">Design import</div><div class="a--richmenu-text d--bold">デザインインポート</div></div></div></a>
	<!-- /wp:jinr-blocks/richmenuchild -->
	
	<!-- wp:jinr-blocks/richmenuchild {"text":"ページビルド","subText":"Page build","link":"' . $homeURL . '","thumbnailUrl":"https://jinr-demo.jp/demo-15/wp-content/themes/jinr/lib/img/noimage-640x360.png","thumbnailSrcset":"https://jinr-demo.jp/demo-15/wp-content/themes/jinr/lib/img/noimage-320x180.png 320w, https://jinr-demo.jp/demo-15/wp-content/themes/jinr/lib/img/noimage-640x360.png 640w","thumbnailSizes":"(max-width:552px) 40vw,100vw","columnSelect":"4","itemRatio":"16-9","itemText":"on","textDesign":"5","textColor":"#31345e","textBgColor":"rgba(255,255,255,0.51)","filterOpacity":75,"filterDisplay":"off","filterColor":"#ffffff","pageTemplate":"template-full-width.php","className":"undefined"} -->
	<a class="wp-block-jinr-blocks-richmenuchild o--richmenu-item undefined" href="' . $homeURL . '"><div class="o--richmenu-item-inner"><div class="a--richmenu-image"><img src="https://jinr-demo.jp/demo-15/wp-content/themes/jinr/lib/img/noimage-640x360.png" width="263" height="148" alt="" srcset="https://jinr-demo.jp/demo-15/wp-content/themes/jinr/lib/img/noimage-320x180.png 320w, https://jinr-demo.jp/demo-15/wp-content/themes/jinr/lib/img/noimage-640x360.png 640w" sizes="(max-width:552px) 40vw,100vw"/></div><div class="c--richmenu-contents ef" style="color:#31345e"><div class="a--richmenu-subtext">Page build</div><div class="a--richmenu-text d--bold">ページビルド</div></div></div></a>
	<!-- /wp:jinr-blocks/richmenuchild --></section>
	<!-- /wp:jinr-blocks/richmenu -->
	
	<!-- wp:jinr-blocks/button {"content":"今すぐダウンロード ！","inputUrl":"' . $homeURL . '","blockID":"1927c117-b4aa-47f6-af2e-9cba5468a0d6","className":"wp-block-jinr-blocks-button b--jinr-block b--jinr-button js--scr-animation"} /-->
	
	<!-- wp:spacer {"height":"30px"} -->
	<div style="height:30px" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer --></div></section></section>
	<!-- /wp:jinr-blocks/fullwidth -->
	
	<!-- wp:spacer {"height":"30px"} -->
	<div style="height:30px" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->
	
	<!-- wp:columns -->
	<div class="wp-block-columns js--scr-animation"><!-- wp:column {"width":"66.66%"} -->
	<div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:jinr-blocks/designtitle {"mainText":"NEW POST","subText":"最近の投稿","divText":"NEW POST","mainTextColor":"#31345e","tagSelect":"div"} -->
	<section class="wp-block-jinr-blocks-designtitle b--jinr-block b--jinr-h2rich d--h2rich-left d--h2rich-style1 d--titledesign-weight-thin d--h2rich-none js--scr-animation" style="border-color:false"><div class="c--h2rich-contents"><span class="a--h2rich-subcopy ef" style="color:false">最近の投稿</span><div class="a--h2rich-maincopy d--bold ef" style="color:#31345e">NEW POST</div></div></section>
	<!-- /wp:jinr-blocks/designtitle -->
	
	<!-- wp:jinr-blocks/postlist {"postNum":5,"listDesign":"d--postlist-rectangle","listDesignSp":"d--postlist-rectangle-sp","columnSelect":"1","moreLink":"https://jinr-demo.jp/demo-15/category/blocks/","clientId":"6adec1cd-ec30-4dae-aa93-50b3d3310502","pageTemplate":"template-full-width.php"} /--></div>
	<!-- /wp:column -->
	
	<!-- wp:column {"width":"33.33%"} -->
	<div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:jinr-blocks/designtitle {"mainText":"SPONSOR","subText":"スポンサー","divText":"SPONSOR","mainTextColor":"#31345e","tagSelect":"div","displayDeviceAttribute":"jinr-display-pc","displayDevicePCAttribute":"jinr-display-pc"} -->
	<section class="wp-block-jinr-blocks-designtitle b--jinr-block b--jinr-h2rich d--h2rich-left d--h2rich-style1 d--titledesign-weight-thin d--h2rich-none jinr-display-pc js--scr-animation" style="border-color:false"><div class="c--h2rich-contents"><span class="a--h2rich-subcopy ef" style="color:false">スポンサー</span><div class="a--h2rich-maincopy d--bold ef" style="color:#31345e">SPONSOR</div></div></section>
	<!-- /wp:jinr-blocks/designtitle -->
	
	<!-- wp:image {"id":1838,"sizeSlug":"full","linkDestination":"custom"} -->
	<figure class="wp-block-image size-full"><a href="' . $homeURL . '" target="_blank" rel="noreferrer noopener"><img src="https://jinr-demo.jp/demo-15/wp-content/uploads/2022/10/jinr-banner-fix.png" alt="" class="wp-image-1838"/></a></figure>
	<!-- /wp:image -->
	
	<!-- wp:jinr-blocks/designtitle {"mainText":"ABOUT ME","subText":"著者プロフィール","divText":"ABOUT ME","mainTextColor":"#31345e","tagSelect":"div","displayDeviceAttribute":"jinr-display-pc","displayDevicePCAttribute":"jinr-display-pc"} -->
	<section class="wp-block-jinr-blocks-designtitle b--jinr-block b--jinr-h2rich d--h2rich-left d--h2rich-style1 d--titledesign-weight-thin d--h2rich-none jinr-display-pc js--scr-animation" style="border-color:false"><div class="c--h2rich-contents"><span class="a--h2rich-subcopy ef" style="color:false">著者プロフィール</span><div class="a--h2rich-maincopy d--bold ef" style="color:#31345e">ABOUT ME</div></div></section>
	<!-- /wp:jinr-blocks/designtitle -->
	
	<!-- wp:jinr-blocks/profile {"displayDeviceAttribute":"jinr-display-pc","displayDevicePCAttribute":"jinr-display-pc"} -->
	<div class="wp-block-jinr-blocks-profile b--jinr-profile-container jinr-display-pc">[jinr_profile design="d--profile-style1" color="d--theme-color" sns_display="on"]</div>
	<!-- /wp:jinr-blocks/profile --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns -->
	
	<!-- wp:jinr-blocks/designtitle {"mainText":"CATEGORY","subText":"最新記事","divText":"CATEGORY","titleDesign":"2","symbolIcon":"v2calendar","mainTextColor":"#31345e","tagSelect":"div","className":"undefined","topMarginPcAttribute":"d--top-margin-xs-pc"} -->
	<section class="wp-block-jinr-blocks-designtitle b--jinr-block b--jinr-h2rich d--h2rich-left d--h2rich-style2 d--titledesign-weight-thin d--h2rich-none undefined d--top-margin-xs-pc js--scr-animation" style="border-color:false"><div class="c--h2rich-contents"><span class="a--h2rich-subcopy ef" style="color:false">最新記事</span><div class="a--h2rich-maincopy d--bold ef" style="color:#31345e">CATEGORY</div></div></section>
	<!-- /wp:jinr-blocks/designtitle -->
	
	<!-- wp:jinr-blocks/postlist {"postNum":4,"columnSelect":"4","columnSelectSp":"2","displayCategory":"2","moreLink":"https://jinr-demo.jp/demo-15/category/blocks/","clientId":"69d581c1-f95a-4e98-b6d2-6e543c1c96c7","pageTemplate":"template-full-width.php"} /-->
	
	<!-- wp:jinr-blocks/background {"backgroundBgColor":"#dce7ed","backgroundOpacity":0,"backgroundSize":100} -->
	<div class="wp-block-jinr-blocks-background b--jinr-block b--jinr-background"><div class="o--background-container d--background-design-flat d--background-shadow-s d--border-outset"><div class="c--background-inner d--border-none d--border-1px t--round" style="border-color:#c5c5c5"><!-- wp:jinr-blocks/designtitle {"mainText":"DOWNLOAD","subText":"テーマダウンロード","divText":"DOWNLOAD","titleDesign":"2","radioLayout":"center","mainTextColor":"#31345e","titleDesignColor":"#becdd5","tagSelect":"div","className":"undefined"} -->
	<section class="wp-block-jinr-blocks-designtitle b--jinr-block b--jinr-h2rich d--h2rich-center d--h2rich-style2 d--titledesign-weight-thin d--h2rich-none undefined js--scr-animation" style="border-color:#becdd5"><div class="c--h2rich-contents"><span class="a--h2rich-subcopy ef" style="color:false">テーマダウンロード</span><div class="a--h2rich-maincopy d--bold ef" style="color:#31345e">DOWNLOAD</div></div></section>
	<!-- /wp:jinr-blocks/designtitle -->
	
	<!-- wp:paragraph {"align":"center"} -->
	<p class="has-text-align-center">WordPressテーマ「JIN:R」を使えば、<br>あらゆるwebサイトを制作することができます</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:jinr-blocks/button {"content":"今すぐダウンロード ！","inputUrl":"' . $homeURL . '","blockID":"7b70a099-85da-41b7-bac7-c1cef2be2c69","className":"wp-block-jinr-blocks-button b--jinr-block b--jinr-button js--scr-animation"} /--></div></div><div class="a--background-color" style="background:#dce7ed"></div><div class="a--background-image t--round d--background-pattern1" style="opacity:1;background-size:33.333333333333336%"></div></div>
	<!-- /wp:jinr-blocks/background -->
	
	<!-- wp:spacer {"height":"60px","displayDeviceAttribute":"jinr-display-pc","displayDevicePCAttribute":"jinr-display-pc"} -->
	<div style="height:60px" aria-hidden="true" class="wp-block-spacer jinr-display-pc"></div>
	<!-- /wp:spacer -->';

	if ($frontpageslug == 'demo-07') {
		$pageupdatearry = array(
			'ID'            => $frontpageID,
		);
		wp_update_post($pageupdatearry);
		update_option('show_on_front', 'page');
		update_option('page_on_front', $frontpageID);
	} else {
		// 新規作成する場合
		$pagepresetarry = array(
			'post_title'    => 'デモプリセット記事 Part07',
			'post_content'  => $presetContents,
			'post_name'     => 'demo-07',
			'post_status'   => 'publish',
			'post_type'     => 'page',
			'page_template' => 'template-full-width.php',
		);
		$presetId = wp_insert_post($pagepresetarry);
		if ($presetId != 0) {
			update_post_meta($presetId, '_jinr_noindex_display', 1);
		};
		update_option('show_on_front', 'page');
		update_option('page_on_front', $presetId);
	}
	$query['autofocus[section]'] = 'jinr__design_preset_section';
	$presetsection = add_query_arg($query, admin_url('customize.php'));
	wp_redirect($presetsection);
	exit;
}
function jinr_preset_demo8()
{
	$preset_num = '8';
	update_option('preset_data', 8);
	jinr_export_json_exclude($preset_num);
	$homeURL = esc_url(home_url('/'));


	// 任意の記事を作成する
	$frontpageID    = get_option('page_on_front');
	$frontpageslug  = get_post_field('post_name', $frontpageID);
	$presetContents = '<!-- wp:jinr-blocks/richmenu {"columnSelect":"3","textDesign":"3","radioSpColumn":"1","radioHover":"d--richmenu-hover-zoom","textColor":"#ffffff","filterDisplay":"on","filterColor":"#000000","pageTemplate":"template-full-width.php"} -->
	<section class="wp-block-jinr-blocks-richmenu b--jinr-block b--jinr-richmenu d--richmenu-column-1-sp d--richmenu-column3 d--richmenu-ratio16-9 d--richmenu-simple d--richmenu-text-medium d--richmenu-text-style3 d--richmenu-animation-fadebyone js--scr-animation d--richmenu-hover-zoom"><!-- wp:jinr-blocks/richmenuchild {"text":"プログラミング入門","subText":"おすすめの勉強法","link":"' . $homeURL . '","thumbnailUrl":"' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-640x360.png","thumbnailSrcset":"' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-320x180.png 320w, ' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-640x360.png 640w","thumbnailSizes":"(max-width:552px) 90vw,50vw","columnSelect":"3","itemRatio":"16-9","itemText":"on","textDesign":"3","textColor":"#ffffff","textBgColor":"rgba(255,255,255,0.51)","filterOpacity":75,"filterDisplay":"on","filterColor":"#000000","pageTemplate":"template-full-width.php"} -->
	<a class="wp-block-jinr-blocks-richmenuchild o--richmenu-item" href="' . $homeURL . '"><div class="o--richmenu-item-inner"><div class="a--richmenu-image"><div class="a--richmenu-filter" style="background:#000000;opacity:0.25"></div><img src="' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-640x360.png" width="350" height="196" alt="" srcset="' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-320x180.png 320w, ' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-640x360.png 640w" sizes="(max-width:552px) 90vw,50vw"/></div><div class="c--richmenu-contents ef" style="color:#ffffff"><div class="a--richmenu-subtext">おすすめの勉強法</div><div class="a--richmenu-parts" style="background-color:#ffffff"></div><div class="a--richmenu-text d--bold">プログラミング入門</div></div></div></a>
	<!-- /wp:jinr-blocks/richmenuchild -->
	
	<!-- wp:jinr-blocks/richmenuchild {"text":"WordPress開発","subText":"始め方を紹介","link":"' . $homeURL . '","thumbnailUrl":"' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-640x360.png","thumbnailSrcset":"' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-320x180.png 320w, ' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-640x360.png 640w","thumbnailSizes":"(max-width:552px) 90vw,50vw","columnSelect":"3","itemRatio":"16-9","itemText":"on","textDesign":"3","textColor":"#ffffff","textBgColor":"rgba(255,255,255,0.51)","filterOpacity":75,"filterDisplay":"on","filterColor":"#000000","pageTemplate":"template-full-width.php"} -->
	<a class="wp-block-jinr-blocks-richmenuchild o--richmenu-item" href="' . $homeURL . '"><div class="o--richmenu-item-inner"><div class="a--richmenu-image"><div class="a--richmenu-filter" style="background:#000000;opacity:0.25"></div><img src="' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-640x360.png" width="350" height="196" alt="" srcset="' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-320x180.png 320w, ' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-640x360.png 640w" sizes="(max-width:552px) 90vw,50vw"/></div><div class="c--richmenu-contents ef" style="color:#ffffff"><div class="a--richmenu-subtext">始め方を紹介</div><div class="a--richmenu-parts" style="background-color:#ffffff"></div><div class="a--richmenu-text d--bold">WordPress開発</div></div></div></a>
	<!-- /wp:jinr-blocks/richmenuchild -->
	
	<!-- wp:jinr-blocks/richmenuchild {"text":"フリーランス戦記","subText":"エンジニアの仕事の取り方","link":"' . $homeURL . '","thumbnailUrl":"' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-640x360.png","thumbnailSrcset":"' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-320x180.png 320w, ' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-640x360.png 640w","thumbnailSizes":"(max-width:552px) 90vw,50vw","columnSelect":"3","itemRatio":"16-9","itemText":"on","textDesign":"3","textColor":"#ffffff","textBgColor":"rgba(255,255,255,0.51)","filterOpacity":75,"filterDisplay":"on","filterColor":"#000000","pageTemplate":"template-full-width.php"} -->
	<a class="wp-block-jinr-blocks-richmenuchild o--richmenu-item" href="' . $homeURL . '"><div class="o--richmenu-item-inner"><div class="a--richmenu-image"><div class="a--richmenu-filter" style="background:#000000;opacity:0.25"></div><img src="' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-640x360.png" width="350" height="196" alt="" srcset="' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-320x180.png 320w, ' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-640x360.png 640w" sizes="(max-width:552px) 90vw,50vw"/></div><div class="c--richmenu-contents ef" style="color:#ffffff"><div class="a--richmenu-subtext">エンジニアの仕事の取り方</div><div class="a--richmenu-parts" style="background-color:#ffffff"></div><div class="a--richmenu-text d--bold">フリーランス戦記</div></div></div></a>
	<!-- /wp:jinr-blocks/richmenuchild --></section>
	<!-- /wp:jinr-blocks/richmenu -->
	
	<!-- wp:jinr-blocks/background {"backgroundBgColorSelect":"grad","backgroundBgColor":"linear-gradient(135deg,rgb(51,84,84) 0%,rgb(48,62,84) 94%)","backgroundBorderColor":"#222222"} -->
	<div class="wp-block-jinr-blocks-background b--jinr-block b--jinr-background"><div class="o--background-container d--background-design-flat d--background-shadow-s d--border-outset"><div class="c--background-inner d--border-none d--border-1px t--round" style="border-color:#222222"><!-- wp:jinr-blocks/designtitle {"mainText":"プログラミング入門","subText":"まずはここから！","divText":"プログラミング入門","radioLayout":"center"} -->
	<section class="wp-block-jinr-blocks-designtitle b--jinr-block b--jinr-h2rich d--h2rich-center d--h2rich-style1 d--titledesign-weight-thin d--h2rich-none js--scr-animation" style="border-color:false"><div class="c--h2rich-contents"><span class="a--h2rich-subcopy ef" style="color:false">まずはここから！</span><h2 class="a--h2rich-maincopy d--bold ef" style="color:false">プログラミング入門</h2></div></section>
	<!-- /wp:jinr-blocks/designtitle -->
	
	<!-- wp:paragraph {"align":"center","topMarginPcAttribute":"d--top-margin-s-pc"} -->
	<p class="has-text-align-center d--top-margin-s-pc "><span class="jinr-d--font-size d--fontsize-13px">「エンジニアになるために、自分が０から始めるならこうする！」という方法をまとめました</span></p>
	<!-- /wp:paragraph -->
	
	<!-- wp:jinr-blocks/postlist {"postNum":3,"moreLink":"' . $homeURL . 'category/blocks/","clientId":"42647812-08c2-4a4e-abcd-5973471c566b"} /--></div></div><div class="a--background-color" style="background:linear-gradient(135deg,rgb(51,84,84) 0%,rgb(48,62,84) 94%)"></div><div class="a--background-image t--round d--background-pattern1" style="opacity:0.29999999999999993;background-size:16.666666666666668%"></div></div>
	<!-- /wp:jinr-blocks/background -->
	
	<!-- wp:jinr-blocks/background {"backgroundBgColorSelect":"grad","backgroundBgColor":"linear-gradient(135deg,rgb(51,84,84) 0%,rgb(48,62,84) 94%)","backgroundBorderColor":"#222222"} -->
	<div class="wp-block-jinr-blocks-background b--jinr-block b--jinr-background"><div class="o--background-container d--background-design-flat d--background-shadow-s d--border-outset"><div class="c--background-inner d--border-none d--border-1px t--round" style="border-color:#222222"><!-- wp:jinr-blocks/designtitle {"mainText":"WordPress開発","subText":"忘れないために","divText":"WordPress開発","radioLayout":"center"} -->
	<section class="wp-block-jinr-blocks-designtitle b--jinr-block b--jinr-h2rich d--h2rich-center d--h2rich-style1 d--titledesign-weight-thin d--h2rich-none js--scr-animation" style="border-color:false"><div class="c--h2rich-contents"><span class="a--h2rich-subcopy ef" style="color:false">忘れないために</span><h2 class="a--h2rich-maincopy d--bold ef" style="color:false">WordPress開発</h2></div></section>
	<!-- /wp:jinr-blocks/designtitle -->
	
	<!-- wp:paragraph {"align":"center","topMarginPcAttribute":"d--top-margin-s-pc"} -->
	<p class="has-text-align-center d--top-margin-s-pc "><span class="jinr-d--font-size d--fontsize-13px">WordPress開発に携わるためのスキル習得のロードマップです。</span></p>
	<!-- /wp:paragraph -->
	
	<!-- wp:jinr-blocks/postlist {"listDesign":"d--postlist-rectangle","listDesignSp":"d--postlist-rectangle-sp","columnSelect":"2","moreLink":"' . $homeURL . 'category/blocks/","clientId":"530bf80a-35fc-4a5a-9170-4dcc01bf7c71"} /--></div></div><div class="a--background-color" style="background:linear-gradient(135deg,rgb(51,84,84) 0%,rgb(48,62,84) 94%)"></div><div class="a--background-image t--round d--background-pattern1" style="opacity:0.29999999999999993;background-size:16.666666666666668%"></div></div>
	<!-- /wp:jinr-blocks/background -->
	
	<!-- wp:jinr-blocks/background {"backgroundBgColorSelect":"grad","backgroundBgColor":"linear-gradient(135deg,rgb(51,84,84) 0%,rgb(48,62,84) 94%)","backgroundBorderColor":"#222222"} -->
	<div class="wp-block-jinr-blocks-background b--jinr-block b--jinr-background"><div class="o--background-container d--background-design-flat d--background-shadow-s d--border-outset"><div class="c--background-inner d--border-none d--border-1px t--round" style="border-color:#222222"><!-- wp:jinr-blocks/designtitle {"mainText":"フリーランス戦記","subText":"忘れないために","divText":"フリーランス戦記","radioLayout":"center"} -->
	<section class="wp-block-jinr-blocks-designtitle b--jinr-block b--jinr-h2rich d--h2rich-center d--h2rich-style1 d--titledesign-weight-thin d--h2rich-none js--scr-animation" style="border-color:false"><div class="c--h2rich-contents"><span class="a--h2rich-subcopy ef" style="color:false">忘れないために</span><h2 class="a--h2rich-maincopy d--bold ef" style="color:false">フリーランス戦記</h2></div></section>
	<!-- /wp:jinr-blocks/designtitle -->
	
	<!-- wp:paragraph {"align":"center","topMarginPcAttribute":"d--top-margin-s-pc"} -->
	<p class="has-text-align-center d--top-margin-s-pc "><span class="jinr-d--font-size d--fontsize-13px">個人事業主としての奮闘記です。仕事の取り方から、節税まで。</span></p>
	<!-- /wp:paragraph -->
	
	<!-- wp:jinr-blocks/postlist {"listDesign":"d--postlist-rectangle","listDesignSp":"d--postlist-rectangle-sp","columnSelect":"2","moreLink":"' . $homeURL . 'category/blocks/","clientId":"5f182c75-b96c-4d14-bc0a-2177d7916155"} /--></div></div><div class="a--background-color" style="background:linear-gradient(135deg,rgb(51,84,84) 0%,rgb(48,62,84) 94%)"></div><div class="a--background-image t--round d--background-pattern1" style="opacity:0.29999999999999993;background-size:16.666666666666668%"></div></div>
	<!-- /wp:jinr-blocks/background -->
	
	<!-- wp:jinr-blocks/fullwidth {"fullWidthBgColor":"#283440","fullWidthTextColor":"#f5f5f5","fullWidthPaddingPc":"d--fullwidth-pad60","fullWidthPaddingSp":"d--fullwidth-pad60-sp","topMarginPcAttribute":"d--top-margin-xl-pc","bottomMarginPcAttribute":"d--bottom-margin-l-pc","topMarginSpAttribute":"d--top-margin-xl-sp","bottomMarginSpAttribute":"d--bottom-margin-l-sp"} -->
	<section class="wp-block-jinr-blocks-fullwidth b--jinr-block b--jinr-fullwidth-container d--top-margin-xl-pc d--bottom-margin-l-pc d--top-margin-xl-sp d--bottom-margin-l-sp "><section class="b--jinr-fullwidth" style="background-color:#283440"><div class="d--fullwidth-max d--fullwidth-pad60 d--fullwidth-pad60-sp t--main-width" style="color:#f5f5f5"><!-- wp:jinr-blocks/designtitle {"mainText":"JIN ENGINEER ＋","subText":"現役エンジニアがおすすめする！","divText":"JIN ENGINEER ＋","radioLayout":"center","radioSymbol":"icon","symbolIcon":"v2academic"} -->
	<section class="wp-block-jinr-blocks-designtitle b--jinr-block b--jinr-h2rich d--h2rich-center d--h2rich-style1 d--titledesign-weight-thin d--h2rich-icon js--scr-animation" style="border-color:false"><div class="c--h2rich-decoration"><div class="a--h2rich-icon ef" style="color:false"><i class="jin-icons jin-ifont-v2academic"></i></div></div><div class="c--h2rich-contents"><span class="a--h2rich-subcopy ef" style="color:false">現役エンジニアがおすすめする！</span><h2 class="a--h2rich-maincopy d--bold ef" style="color:false">JIN ENGINEER ＋</h2></div></section>
	<!-- /wp:jinr-blocks/designtitle -->
	
	<!-- wp:columns -->
	<div class="wp-block-columns js--scr-animation"><!-- wp:column -->
	<div class="wp-block-column"><!-- wp:image {"id":1687,"sizeSlug":"full","linkDestination":"none"} -->
	<figure class="wp-block-image size-full"><img src="' . $homeURL . 'wp-content/uploads/2022/09/jinr-demo-17-バナー.png" alt="" class="wp-image-1687"/><figcaption class="wp-element-caption">※ 本サービスはDEMO用の架空サービスです</figcaption></figure>
	<!-- /wp:image --></div>
	<!-- /wp:column -->
	
	<!-- wp:column -->
	<div class="wp-block-column"><!-- wp:paragraph -->
	<p>「JIN ENGINEER ＋」は、一般のwebスクールとは全く違うのカリキュラムを展開するプログラミングスクールです。</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:paragraph -->
	<p>プログラミング能力の習得だけで終わらず、就職・フリーランスなどの進路に合わせて、適切なノウハウを提供してくれるのです。</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:paragraph -->
	<p>これからプログラミングを志す人には、こういった実践的な教育サービスをおすすめしたいです。</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:jinr-blocks/button {"content":"公式サイトをチェック","inputUrl":"' . $homeURL . '","buttonDesign":"arrow","buttonLayout":"d--button-right","registeredButton":"5","blockID":"88dda9e2-7118-47bc-b8d5-c4196161ffb9","className":"wp-block-jinr-blocks-button b--jinr-block b--jinr-button js--scr-animation"} /--></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns -->
	
	<!-- wp:columns -->
	<div class="wp-block-columns js--scr-animation"><!-- wp:column -->
	<div class="wp-block-column"><!-- wp:jinr-blocks/background {"backgroundBgColorSelect":"grad","backgroundBgColor":"linear-gradient(135deg,rgb(51,84,84) 0%,rgb(48,62,84) 94%)","backgroundBorderColor":"#222222"} -->
	<div class="wp-block-jinr-blocks-background b--jinr-block b--jinr-background"><div class="o--background-container d--background-design-flat d--background-shadow-s d--border-outset"><div class="c--background-inner d--border-none d--border-1px t--round" style="border-color:#222222"><!-- wp:jinr-blocks/designtitle {"mainText":"就職支援が手厚い","subText":"POINT 01","divText":"就職支援が手厚い","radioLayout":"center"} -->
	<section class="wp-block-jinr-blocks-designtitle b--jinr-block b--jinr-h2rich d--h2rich-center d--h2rich-style1 d--titledesign-weight-thin d--h2rich-none js--scr-animation" style="border-color:false"><div class="c--h2rich-contents"><span class="a--h2rich-subcopy ef" style="color:false">POINT 01</span><h2 class="a--h2rich-maincopy d--bold ef" style="color:false">就職支援が手厚い</h2></div></section>
	<!-- /wp:jinr-blocks/designtitle -->
	
	<!-- wp:paragraph {"align":"left"} -->
	<p class="has-text-align-left"><span class="jinr-d--font-size d--fontsize-15px">スクールを選ぶ上で大切な基準の１つが「就職支援が充実していること」で</span>、<span class="jinr-d--font-size d--fontsize-15px">その点に置いてJIN ENGNEERはとても優れています。</span></p>
	<!-- /wp:paragraph -->
	
	<!-- wp:paragraph -->
	<p><span class="jinr-d--font-size d--fontsize-15px">スクールを使う大きなメリットは、そのフォローアップで就職先に繋げてくれることだと私は思っています。</span></p>
	<!-- /wp:paragraph --></div></div><div class="a--background-color" style="background:linear-gradient(135deg,rgb(51,84,84) 0%,rgb(48,62,84) 94%)"></div><div class="a--background-image t--round d--background-pattern1" style="opacity:0.29999999999999993;background-size:16.666666666666668%"></div></div>
	<!-- /wp:jinr-blocks/background --></div>
	<!-- /wp:column -->
	
	<!-- wp:column -->
	<div class="wp-block-column"><!-- wp:jinr-blocks/background {"backgroundBgColorSelect":"grad","backgroundBgColor":"linear-gradient(135deg,rgb(51,84,84) 0%,rgb(48,62,84) 94%)","backgroundBorderColor":"#222222"} -->
	<div class="wp-block-jinr-blocks-background b--jinr-block b--jinr-background"><div class="o--background-container d--background-design-flat d--background-shadow-s d--border-outset"><div class="c--background-inner d--border-none d--border-1px t--round" style="border-color:#222222"><!-- wp:jinr-blocks/designtitle {"mainText":"仕事を取る技術がつく","subText":"POINT 02","divText":"仕事を取る技術がつく","radioLayout":"center"} -->
	<section class="wp-block-jinr-blocks-designtitle b--jinr-block b--jinr-h2rich d--h2rich-center d--h2rich-style1 d--titledesign-weight-thin d--h2rich-none js--scr-animation" style="border-color:false"><div class="c--h2rich-contents"><span class="a--h2rich-subcopy ef" style="color:false">POINT 02</span><h2 class="a--h2rich-maincopy d--bold ef" style="color:false">仕事を取る技術がつく</h2></div></section>
	<!-- /wp:jinr-blocks/designtitle -->
	
	<!-- wp:paragraph -->
	<p><span class="jinr-d--font-size d--fontsize-15px">エンジニアとして受託業務をこなすようになって、気づいたのは技術力はもちろん「営業力」がとにかく大切ということでした。</span></p>
	<!-- /wp:paragraph -->
	
	<!-- wp:paragraph -->
	<p><span class="jinr-d--font-size d--fontsize-15px">このスクールでは、普通のプログラミングスクールではしえない仕事の取り方までしっかり教えてくれます。</span></p>
	<!-- /wp:paragraph --></div></div><div class="a--background-color" style="background:linear-gradient(135deg,rgb(51,84,84) 0%,rgb(48,62,84) 94%)"></div><div class="a--background-image t--round d--background-pattern1" style="opacity:0.29999999999999993;background-size:16.666666666666668%"></div></div>
	<!-- /wp:jinr-blocks/background --></div>
	<!-- /wp:column -->
	
	<!-- wp:column -->
	<div class="wp-block-column"><!-- wp:jinr-blocks/background {"backgroundBgColorSelect":"grad","backgroundBgColor":"linear-gradient(135deg,rgb(51,84,84) 0%,rgb(48,62,84) 94%)","backgroundBorderColor":"#222222"} -->
	<div class="wp-block-jinr-blocks-background b--jinr-block b--jinr-background"><div class="o--background-container d--background-design-flat d--background-shadow-s d--border-outset"><div class="c--background-inner d--border-none d--border-1px t--round" style="border-color:#222222"><!-- wp:jinr-blocks/designtitle {"mainText":"就職先に合わせた言語","subText":"POINT 03","divText":"就職先に合わせた言語","radioLayout":"center"} -->
	<section class="wp-block-jinr-blocks-designtitle b--jinr-block b--jinr-h2rich d--h2rich-center d--h2rich-style1 d--titledesign-weight-thin d--h2rich-none js--scr-animation" style="border-color:false"><div class="c--h2rich-contents"><span class="a--h2rich-subcopy ef" style="color:false">POINT 03</span><h2 class="a--h2rich-maincopy d--bold ef" style="color:false">就職先に合わせた言語</h2></div></section>
	<!-- /wp:jinr-blocks/designtitle -->
	
	<!-- wp:paragraph {"align":"left"} -->
	<p class="has-text-align-left"><span class="jinr-d--font-size d--fontsize-15px">現場で役に立たない言語を学習させるスクールは、意外にも多いものです。そうなってはお金も時間も無駄にしてしまいますよね。</span></p>
	<!-- /wp:paragraph -->
	
	<!-- wp:paragraph -->
	<p><span class="jinr-d--font-size d--fontsize-15px">自分の働きたい職場をまず決めて、そこで活動できるように逆算してカリキュラムを組んでくれます。</span></p>
	<!-- /wp:paragraph --></div></div><div class="a--background-color" style="background:linear-gradient(135deg,rgb(51,84,84) 0%,rgb(48,62,84) 94%)"></div><div class="a--background-image t--round d--background-pattern1" style="opacity:0.29999999999999993;background-size:16.666666666666668%"></div></div>
	<!-- /wp:jinr-blocks/background --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns -->
	
	<!-- wp:paragraph {"align":"center","bottomMarginPcAttribute":"d--bottom-margin-xs-pc","bottomMarginSpAttribute":"d--bottom-margin-s-sp"} -->
	<p class="has-text-align-center d--bottom-margin-xs-pc d--bottom-margin-s-sp "><span class="jinr-d--font-size d--fontsize-15px"> <i class="jin-icons in--p jin-ifont-backslash" aria-hidden="true"></i>  このボタンから申し込みで初回無料  <i class="jin-icons in--p jin-ifont-slash" aria-hidden="true"></i> </span></p>
	<!-- /wp:paragraph -->
	
	<!-- wp:jinr-blocks/button {"content":"今すぐ体験レッスンを！","blockID":"0f5bc297-61e3-48dc-a2aa-a63c9db4c088","className":"wp-block-jinr-blocks-button b--jinr-block b--jinr-button js--scr-animation"} /--></div></section></section>
	<!-- /wp:jinr-blocks/fullwidth -->';

	if ($frontpageslug == 'demo-08') {
		$pageupdatearry = array(
			'ID'            => $frontpageID,
		);
		wp_update_post($pageupdatearry);
		update_option('show_on_front', 'page');
		update_option('page_on_front', $frontpageID);
	} else {
		// 新規作成する場合
		$pagepresetarry = array(
			'post_title'    => 'デモプリセット記事 Part08',
			'post_content'  => $presetContents,
			'post_name'     => 'demo-08',
			'post_status'   => 'publish',
			'post_type'     => 'page',
			'page_template' => 'template-full-width.php',
		);
		$presetId = wp_insert_post($pagepresetarry);
		if ($presetId != 0) {
			update_post_meta($presetId, '_jinr_noindex_display', 1);
		};
		update_option('show_on_front', 'page');
		update_option('page_on_front', $presetId);
	}
	$query['autofocus[section]'] = 'jinr__design_preset_section';
	$presetsection = add_query_arg($query, admin_url('customize.php'));
	wp_redirect($presetsection);
	exit;
}
function jinr_preset_demo9()
{
	$preset_num = '9';
	update_option('preset_data', 9);
	jinr_export_json_exclude($preset_num);
	$homeURL = esc_url(home_url('/'));


	// 任意の記事を作成する
	$frontpageID    = get_option('page_on_front');
	$frontpageslug  = get_post_field('post_name', $frontpageID);
	$presetContents = '<!-- wp:jinr-blocks/richmenu {"textDesign":"2","itemTextSize":"d--richmenu-text-large","textColor":"#ffffff","filterOpacity":90,"filterDisplay":"on","filterColor":"#000000"} -->
	<section class="wp-block-jinr-blocks-richmenu b--jinr-block b--jinr-richmenu d--richmenu-column-2-sp d--richmenu-column4 d--richmenu-ratio16-9 d--richmenu-simple d--richmenu-text-large d--richmenu-text-style2 d--richmenu-animation-fadebyone js--scr-animation d--richmenu-hover-up"><!-- wp:jinr-blocks/richmenuchild {"text":"FEATURE","subText":"","link":"' . $homeURL . '","thumbnailUrl":"' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-640x360.png","thumbnailSrcset":"' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-320x180.png 320w, ' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-640x360.png 640w","thumbnailSizes":"(max-width:552px) 40vw,100vw","columnSelect":"4","itemRatio":"16-9","itemText":"on","textDesign":"2","textColor":"#ffffff","textBgColor":"rgba(255,255,255,0.51)","filterOpacity":90,"filterDisplay":"on","filterColor":"#000000","pageTemplate":""} -->
	<a class="wp-block-jinr-blocks-richmenuchild o--richmenu-item" href="' . $homeURL . '"><div class="o--richmenu-item-inner"><div class="a--richmenu-image"><div class="a--richmenu-filter" style="background:#000000;opacity:0.09999999999999998"></div><img src="' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-640x360.png" width="161" height="91" alt="" srcset="' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-320x180.png 320w, ' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-640x360.png 640w" sizes="(max-width:552px) 40vw,100vw"/></div><div class="c--richmenu-contents ef" style="color:#ffffff"><div class="a--richmenu-text d--bold">FEATURE</div></div></div></a>
	<!-- /wp:jinr-blocks/richmenuchild -->
	
	<!-- wp:jinr-blocks/richmenuchild {"text":"SNOW MOBILE","subText":"","link":"' . $homeURL . '","thumbnailUrl":"' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-640x360.png","thumbnailSrcset":"' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-320x180.png 320w, ' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-640x360.png 640w","thumbnailSizes":"(max-width:552px) 40vw,100vw","columnSelect":"4","itemRatio":"16-9","itemText":"on","textDesign":"2","textColor":"#ffffff","textBgColor":"rgba(255,255,255,0.51)","filterOpacity":90,"filterDisplay":"on","filterColor":"#000000","pageTemplate":""} -->
	<a class="wp-block-jinr-blocks-richmenuchild o--richmenu-item" href="' . $homeURL . '"><div class="o--richmenu-item-inner"><div class="a--richmenu-image"><div class="a--richmenu-filter" style="background:#000000;opacity:0.09999999999999998"></div><img src="' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-640x360.png" width="161" height="91" alt="" srcset="' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-320x180.png 320w, ' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-640x360.png 640w" sizes="(max-width:552px) 40vw,100vw"/></div><div class="c--richmenu-contents ef" style="color:#ffffff"><div class="a--richmenu-text d--bold">SNOW MOBILE</div></div></div></a>
	<!-- /wp:jinr-blocks/richmenuchild -->
	
	<!-- wp:jinr-blocks/richmenuchild {"text":"MANUAL","subText":"","link":"' . $homeURL . '","thumbnailUrl":"' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-640x360.png","thumbnailSrcset":"' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-320x180.png 320w, ' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-640x360.png 640w","thumbnailSizes":"(max-width:552px) 40vw,100vw","columnSelect":"4","itemRatio":"16-9","itemText":"on","textDesign":"2","textColor":"#ffffff","textBgColor":"rgba(255,255,255,0.51)","filterOpacity":90,"filterDisplay":"on","filterColor":"#000000","pageTemplate":""} -->
	<a class="wp-block-jinr-blocks-richmenuchild o--richmenu-item" href="' . $homeURL . '"><div class="o--richmenu-item-inner"><div class="a--richmenu-image"><div class="a--richmenu-filter" style="background:#000000;opacity:0.09999999999999998"></div><img src="' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-640x360.png" width="161" height="91" alt="" srcset="' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-320x180.png 320w, ' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-640x360.png 640w" sizes="(max-width:552px) 40vw,100vw"/></div><div class="c--richmenu-contents ef" style="color:#ffffff"><div class="a--richmenu-text d--bold">MANUAL</div></div></div></a>
	<!-- /wp:jinr-blocks/richmenuchild -->
	
	<!-- wp:jinr-blocks/richmenuchild {"text":"DOWNLOAD","subText":"","link":"' . $homeURL . '","thumbnailUrl":"' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-640x360.png","thumbnailSrcset":"' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-320x180.png 320w, ' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-640x360.png 640w","thumbnailSizes":"(max-width:552px) 40vw,100vw","columnSelect":"4","itemRatio":"16-9","itemText":"on","textDesign":"2","textColor":"#ffffff","textBgColor":"rgba(255,255,255,0.51)","filterOpacity":90,"filterDisplay":"on","filterColor":"#000000","pageTemplate":""} -->
	<a class="wp-block-jinr-blocks-richmenuchild o--richmenu-item" href="' . $homeURL . '"><div class="o--richmenu-item-inner"><div class="a--richmenu-image"><div class="a--richmenu-filter" style="background:#000000;opacity:0.09999999999999998"></div><img src="' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-640x360.png" width="161" height="91" alt="" srcset="' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-320x180.png 320w, ' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-640x360.png 640w" sizes="(max-width:552px) 40vw,100vw"/></div><div class="c--richmenu-contents ef" style="color:#ffffff"><div class="a--richmenu-text d--bold">DOWNLOAD</div></div></div></a>
	<!-- /wp:jinr-blocks/richmenuchild --></section>
	<!-- /wp:jinr-blocks/richmenu -->
	
	<!-- wp:spacer {"height":"30px","displayDeviceAttribute":"jinr-display-pc","displayDevicePCAttribute":"jinr-display-pc"} -->
	<div style="height:30px" aria-hidden="true" class="wp-block-spacer jinr-display-pc"></div>
	<!-- /wp:spacer -->
	
	<!-- wp:columns -->
	<div class="wp-block-columns js--scr-animation"><!-- wp:column {"width":"66.66%"} -->
	<div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:jinr-blocks/designtitle {"mainText":"NEW POST","subText":"新着記事","divText":"NEW POST","titleDesignWeight":"d--titledesign-weight-normal","symbolIcon":"v2post","className":"d--maintext-customize","jinrBlocksCSSAttribute":".wp-block .d--maintext-customize.b--jinr-h2rich.d--h2rich-left .a--h2rich-maincopy {font-size: 30px!important;}"} -->
	<div class="jinr-add-class-container"><section class="wp-block-jinr-blocks-designtitle b--jinr-block b--jinr-h2rich d--h2rich-left d--h2rich-style1 d--titledesign-weight-normal d--h2rich-none d--maintext-customize js--scr-animation" style="border-color:false"><div class="c--h2rich-contents"><span class="a--h2rich-subcopy ef" style="color:false">新着記事</span><h2 class="a--h2rich-maincopy d--bold ef" style="color:false">NEW POST</h2></div></section><style jsx="true">.wp-block .d--maintext-customize.b--jinr-h2rich.d--h2rich-left .a--h2rich-maincopy {font-size: 30px!important;}</style></div>
	<!-- /wp:jinr-blocks/designtitle -->
	
	<!-- wp:jinr-blocks/postlist {"listDesign":"d--postlist-rectangle","listDesignSp":"d--postlist-rectangle-sp","columnSelect":"1","moreLink":"' . $homeURL . 'category/blocks/","clientId":"c61c9a90-e2fc-41e1-85d5-c31d27d09cd4"} /--></div>
	<!-- /wp:column -->
	
	<!-- wp:column {"width":"33.33%"} -->
	<div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:jinr-blocks/designtitle {"mainText":"SPONSOR","subText":"スポンサー","divText":"SPONSOR","titleDesignWeight":"d--titledesign-weight-normal","className":"d--maintext-customize"} -->
	<section class="wp-block-jinr-blocks-designtitle b--jinr-block b--jinr-h2rich d--h2rich-left d--h2rich-style1 d--titledesign-weight-normal d--h2rich-none d--maintext-customize js--scr-animation" style="border-color:false"><div class="c--h2rich-contents"><span class="a--h2rich-subcopy ef" style="color:false">スポンサー</span><h2 class="a--h2rich-maincopy d--bold ef" style="color:false">SPONSOR</h2></div></section>
	<!-- /wp:jinr-blocks/designtitle -->
	
	<!-- wp:image {"id":1834,"sizeSlug":"full","linkDestination":"custom"} -->
	<figure class="wp-block-image size-full"><a href="' . $homeURL . '" target="_blank" rel="noreferrer noopener"><img src="https://jinr-demo.jp/demo-11/wp-content/uploads/2022/10/jinr-banner-fix.png" alt="jinr-wordpress" class="wp-image-1834"/></a></figure>
	<!-- /wp:image -->
	
	<!-- wp:spacer {"height":"30px"} -->
	<div style="height:30px" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->
	
	<!-- wp:search {"label":"","placeholder":"キーワードで検索する","buttonText":"検索"} /-->
	
	<!-- wp:tag-cloud /-->
	
	<!-- wp:spacer {"height":"31px"} -->
	<div style="height:31px" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns -->
	
	<!-- wp:jinr-blocks/fullwidth {"fullWidthBgColor":"#2a92ed","fullWidthPaddingPc":"d--fullwidth-pad40","fullWidthPaddingSp":"d--fullwidth-pad40-sp"} -->
	<section class="wp-block-jinr-blocks-fullwidth b--jinr-block b--jinr-fullwidth-container"><section class="b--jinr-fullwidth" style="background-color:#2a92ed"><div class="d--fullwidth-max d--fullwidth-pad40 d--fullwidth-pad40-sp t--main-width" style="color:false"><!-- wp:jinr-blocks/designtitle {"mainText":"JIN:Rで<br>ブログデザインを楽しもう！","subText":"DOWNLOAD","divText":"JIN:Rで<br>ブログデザインを楽しもう！","radioLayout":"center","mainTextColor":"#fcfcfc","subTextColor":"#ffffff","className":"undefined"} -->
	<section class="wp-block-jinr-blocks-designtitle b--jinr-block b--jinr-h2rich d--h2rich-center d--h2rich-style1 d--titledesign-weight-thin d--h2rich-none undefined js--scr-animation" style="border-color:false"><div class="c--h2rich-contents"><span class="a--h2rich-subcopy ef" style="color:#ffffff">DOWNLOAD</span><h2 class="a--h2rich-maincopy d--bold ef" style="color:#fcfcfc">JIN:Rで<br>ブログデザインを楽しもう！</h2></div></section>
	<!-- /wp:jinr-blocks/designtitle -->
	
	<!-- wp:columns -->
	<div class="wp-block-columns js--scr-animation"><!-- wp:column -->
	<div class="wp-block-column"><!-- wp:jinr-blocks/background {"backgroundBgColor":"#ffffff","backgroundBorderDesign":"d--border-solid","backgroundBorderWidth":"d--border-3px","backgroundBorderColor":"#2a92ed"} -->
	<div class="wp-block-jinr-blocks-background b--jinr-block b--jinr-background"><div class="o--background-container d--background-design-flat d--background-shadow-s d--border-outset"><div class="c--background-inner d--border-solid d--border-3px t--round" style="border-color:#2a92ed"><!-- wp:jinr-blocks/designtitle {"mainText":"直感的","subText":"初心者でも迷わない","divText":"直感的","titleDesign":"2","radioLayout":"center","radioSymbol":"number"} -->
	<section class="wp-block-jinr-blocks-designtitle b--jinr-block b--jinr-h2rich d--h2rich-center d--h2rich-style2 d--titledesign-weight-thin d--h2rich-number js--scr-animation" style="border-color:false"><div class="c--h2rich-decoration"><div class="a--h2rich-number ef" style="color:false">1</div></div><div class="c--h2rich-contents"><span class="a--h2rich-subcopy ef" style="color:false">初心者でも迷わない</span><h2 class="a--h2rich-maincopy d--bold ef" style="color:false">直感的</h2></div></section>
	<!-- /wp:jinr-blocks/designtitle -->
	
	<!-- wp:paragraph -->
	<p>圧倒的な「操作性の良さ」を追求して作られた、ワードプレス初心者にこそ、最初に選んでもらいたいテンプレートです。</p>
	<!-- /wp:paragraph --></div></div><div class="a--background-color" style="background:#ffffff"></div><div class="a--background-image t--round d--background-pattern1" style="opacity:0.29999999999999993;background-size:16.666666666666668%"></div></div>
	<!-- /wp:jinr-blocks/background --></div>
	<!-- /wp:column -->
	
	<!-- wp:column -->
	<div class="wp-block-column"><!-- wp:jinr-blocks/background {"backgroundBgColor":"#ffffff","backgroundBorderDesign":"d--border-solid","backgroundBorderWidth":"d--border-3px","backgroundBorderColor":"#2a92ed"} -->
	<div class="wp-block-jinr-blocks-background b--jinr-block b--jinr-background"><div class="o--background-container d--background-design-flat d--background-shadow-s d--border-outset"><div class="c--background-inner d--border-solid d--border-3px t--round" style="border-color:#2a92ed"><!-- wp:jinr-blocks/designtitle {"mainText":"デザイン性","subText":"多彩な表現が効く","divText":"デザイン性","titleDesign":"2","radioLayout":"center","radioSymbol":"number","symbolNumber":"2"} -->
	<section class="wp-block-jinr-blocks-designtitle b--jinr-block b--jinr-h2rich d--h2rich-center d--h2rich-style2 d--titledesign-weight-thin d--h2rich-number js--scr-animation" style="border-color:false"><div class="c--h2rich-decoration"><div class="a--h2rich-number ef" style="color:false">2</div></div><div class="c--h2rich-contents"><span class="a--h2rich-subcopy ef" style="color:false">多彩な表現が効く</span><h2 class="a--h2rich-maincopy d--bold ef" style="color:false">デザイン性</h2></div></section>
	<!-- /wp:jinr-blocks/designtitle -->
	
	<!-- wp:paragraph -->
	<p>ブログもホームページも作れてしまうデザインの幅と繊細さを持っています。１テーマで複数のサイトを仕上げていきましょう。</p>
	<!-- /wp:paragraph --></div></div><div class="a--background-color" style="background:#ffffff"></div><div class="a--background-image t--round d--background-pattern1" style="opacity:0.29999999999999993;background-size:16.666666666666668%"></div></div>
	<!-- /wp:jinr-blocks/background --></div>
	<!-- /wp:column -->
	
	<!-- wp:column -->
	<div class="wp-block-column"><!-- wp:jinr-blocks/background {"backgroundBgColor":"#ffffff","backgroundBorderDesign":"d--border-solid","backgroundBorderWidth":"d--border-3px","backgroundBorderColor":"#2a92ed"} -->
	<div class="wp-block-jinr-blocks-background b--jinr-block b--jinr-background"><div class="o--background-container d--background-design-flat d--background-shadow-s d--border-outset"><div class="c--background-inner d--border-solid d--border-3px t--round" style="border-color:#2a92ed"><!-- wp:jinr-blocks/designtitle {"mainText":"サポート","subText":"つまずきにくい","divText":"サポート","titleDesign":"2","radioLayout":"center","radioSymbol":"number","symbolNumber":"3"} -->
	<section class="wp-block-jinr-blocks-designtitle b--jinr-block b--jinr-h2rich d--h2rich-center d--h2rich-style2 d--titledesign-weight-thin d--h2rich-number js--scr-animation" style="border-color:false"><div class="c--h2rich-decoration"><div class="a--h2rich-number ef" style="color:false">3</div></div><div class="c--h2rich-contents"><span class="a--h2rich-subcopy ef" style="color:false">つまずきにくい</span><h2 class="a--h2rich-maincopy d--bold ef" style="color:false">サポート</h2></div></section>
	<!-- /wp:jinr-blocks/designtitle -->
	
	<!-- wp:paragraph -->
	<p>何か困った時には専任のアドバイザーに相談できるフォーラムを用意しています。作業に集中しましょう。</p>
	<!-- /wp:paragraph --></div></div><div class="a--background-color" style="background:#ffffff"></div><div class="a--background-image t--round d--background-pattern1" style="opacity:0.29999999999999993;background-size:16.666666666666668%"></div></div>
	<!-- /wp:jinr-blocks/background --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns -->
	
	<!-- wp:jinr-blocks/button {"content":"今すぐダウンロード ！","inputUrl":"' . $homeURL . '","registeredButton":"2","blockID":"c8b6f163-00e9-44b0-8931-fe4a922edc90","className":"wp-block-jinr-blocks-button b--jinr-block b--jinr-button js--scr-animation"} /--></div></section></section>
	<!-- /wp:jinr-blocks/fullwidth -->';

	if ($frontpageslug == 'demo-09') {
		$pageupdatearry = array(
			'ID'            => $frontpageID,
		);
		wp_update_post($pageupdatearry);
		update_option('show_on_front', 'page');
		update_option('page_on_front', $frontpageID);
	} else {
		// 新規作成する場合
		$pagepresetarry = array(
			'post_title'    => 'デモプリセット記事 Part09',
			'post_content'  => $presetContents,
			'post_name'     => 'demo-09',
			'post_status'   => 'publish',
			'post_type'     => 'page',
			'page_template' => 'template-full-width.php',
		);
		$presetId = wp_insert_post($pagepresetarry);
		if ($presetId != 0) {
			update_post_meta($presetId, '_jinr_noindex_display', 1);
		};
		update_option('show_on_front', 'page');
		update_option('page_on_front', $presetId);
	}
	$query['autofocus[section]'] = 'jinr__design_preset_section';
	$presetsection = add_query_arg($query, admin_url('customize.php'));
	wp_redirect($presetsection);
	exit;
}
function jinr_preset_demo10()
{
	$preset_num = '10';
	update_option('preset_data', 10);
	jinr_export_json_exclude($preset_num);
	$homeURL = esc_url(home_url('/'));


	// 任意の記事を作成する
	$frontpageID    = get_option('page_on_front');
	$frontpageslug  = get_post_field('post_name', $frontpageID);
	$presetContents = '<!-- wp:jinr-blocks/fullwidth {"fullWidthBgColor":"#faf6f1","fullWidthBgColorTransparent":85,"fullWidthPaddingPc":"d--fullwidth-pad30","fullWidthPaddingSp":"d--fullwidth-pad30-sp","className":"undefined"} -->
	<section class="wp-block-jinr-blocks-fullwidth b--jinr-block b--jinr-fullwidth-container undefined"><section class="b--jinr-fullwidth" style="background-color:#faf6f1"><div class="d--fullwidth-max d--fullwidth-pad30 d--fullwidth-pad30-sp t--main-width" style="color:false"><!-- wp:jinr-blocks/designtitle {"mainText":"NEWS","subText":"新着記事","divText":"NEWS","radioLayout":"center","className":"undefined"} -->
	<section class="wp-block-jinr-blocks-designtitle b--jinr-block b--jinr-h2rich d--h2rich-center d--h2rich-style1 d--titledesign-weight-thin d--h2rich-none undefined js--scr-animation" style="border-color:false"><div class="c--h2rich-contents"><span class="a--h2rich-subcopy ef" style="color:false">新着記事</span><h2 class="a--h2rich-maincopy d--bold ef" style="color:false">NEWS</h2></div></section>
	<!-- /wp:jinr-blocks/designtitle -->
	
	<!-- wp:jinr-blocks/postlist {"listDesign":"d--postlist-rectangle","listDesignSp":"d--postlist-rectangle-sp","columnSelect":"2","moreLink":"' . $homeURL . 'category/blocks/","clientId":"fdf30e24-32b4-4035-bb38-8c42cfa842c8"} /--></div></section></section>
	<!-- /wp:jinr-blocks/fullwidth -->
	
	<!-- wp:jinr-blocks/fullwidth {"fullWidthBgColor":"#222222","fullWidthTextColor":"#ffffff","fullWidthBgColorTransparent":3,"fullWidthBlurlebel":1,"fullWidthParallax":"d--fullwidth-parallax-on","fullWidthPaddingPc":"d--fullwidth-pad30","fullWidthPaddingSp":"d--fullwidth-pad30-sp"} -->
	<section class="wp-block-jinr-blocks-fullwidth b--jinr-block b--jinr-fullwidth-container"><section class="b--jinr-fullwidth" style="background-color:#222222"><div class="d--fullwidth-max d--fullwidth-pad30 d--fullwidth-pad30-sp t--main-width" style="color:#ffffff"><!-- wp:jinr-blocks/designtitle {"mainText":"MY DESK","subText":"作業環境","divText":"MY DESK","radioLayout":"center","mainTextColor":"#ffffff","subTextColor":"#ffffff","className":"undefined"} -->
	<section class="wp-block-jinr-blocks-designtitle b--jinr-block b--jinr-h2rich d--h2rich-center d--h2rich-style1 d--titledesign-weight-thin d--h2rich-none undefined js--scr-animation" style="border-color:false"><div class="c--h2rich-contents"><span class="a--h2rich-subcopy ef" style="color:#ffffff">作業環境</span><h2 class="a--h2rich-maincopy d--bold ef" style="color:#ffffff">MY DESK</h2></div></section>
	<!-- /wp:jinr-blocks/designtitle -->
	
	<!-- wp:paragraph {"align":"center"} -->
	<p class="has-text-align-center">ここにキャッチフレーズを書きます。ここにキャッチフレーズを書きます。</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:spacer {"height":"50px"} -->
	<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->
	
	<!-- wp:jinr-blocks/richmenu {"itemRatio":"4-3","textDesign":"1"} -->
	<section class="wp-block-jinr-blocks-richmenu b--jinr-block b--jinr-richmenu d--richmenu-column-2-sp d--richmenu-column4 d--richmenu-ratio4-3 d--richmenu-simple d--richmenu-text-medium d--richmenu-text-style1 d--richmenu-animation-fadebyone js--scr-animation d--richmenu-hover-up"><!-- wp:jinr-blocks/richmenuchild {"text":"ボタンデザイン","link":"' . $homeURL . '","thumbnailUrl":"' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-640x360.png","thumbnailSrcset":"' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-320x180.png 320w, ' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-640x360.png 640w","thumbnailSizes":"(max-width:552px) 40vw,100vw","columnSelect":"4","itemRatio":"4-3","itemText":"on","textDesign":"1","textColor":"#2d4444","textBgColor":"rgba(255,255,255,0.51)","filterOpacity":75,"filterDisplay":"off","filterColor":"#ffffff","pageTemplate":""} -->
	<a class="wp-block-jinr-blocks-richmenuchild o--richmenu-item" href="' . $homeURL . '"><div class="o--richmenu-item-inner"><div class="a--richmenu-image"><img src="' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-640x360.png" width="161" height="121" alt="" srcset="' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-320x180.png 320w, ' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-640x360.png 640w" sizes="(max-width:552px) 40vw,100vw"/></div><div class="c--richmenu-contents ef" style="color:#2d4444;background:rgba(255,255,255,0.51)"><div class="a--richmenu-text d--bold">ボタンデザイン</div></div></div></a>
	<!-- /wp:jinr-blocks/richmenuchild -->
	
	<!-- wp:jinr-blocks/richmenuchild {"text":"ボックスデザイン","link":"' . $homeURL . '","thumbnailUrl":"' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-640x360.png","thumbnailSrcset":"' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-320x180.png 320w, ' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-640x360.png 640w","thumbnailSizes":"(max-width:552px) 40vw,100vw","columnSelect":"4","itemRatio":"4-3","itemText":"on","textDesign":"1","textColor":"#2d4444","textBgColor":"rgba(255,255,255,0.51)","filterOpacity":75,"filterDisplay":"off","filterColor":"#ffffff","pageTemplate":""} -->
	<a class="wp-block-jinr-blocks-richmenuchild o--richmenu-item" href="' . $homeURL . '"><div class="o--richmenu-item-inner"><div class="a--richmenu-image"><img src="' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-640x360.png" width="161" height="121" alt="" srcset="' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-320x180.png 320w, ' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-640x360.png 640w" sizes="(max-width:552px) 40vw,100vw"/></div><div class="c--richmenu-contents ef" style="color:#2d4444;background:rgba(255,255,255,0.51)"><div class="a--richmenu-text d--bold">ボックスデザイン</div></div></div></a>
	<!-- /wp:jinr-blocks/richmenuchild -->
	
	<!-- wp:jinr-blocks/richmenuchild {"text":"リッチメニュー","link":"' . $homeURL . '","thumbnailUrl":"' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-640x360.png","thumbnailSrcset":"' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-320x180.png 320w, ' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-640x360.png 640w","thumbnailSizes":"(max-width:552px) 40vw,100vw","columnSelect":"4","itemRatio":"4-3","itemText":"on","textDesign":"1","textColor":"#2d4444","textBgColor":"rgba(255,255,255,0.51)","filterOpacity":75,"filterDisplay":"off","filterColor":"#ffffff","pageTemplate":""} -->
	<a class="wp-block-jinr-blocks-richmenuchild o--richmenu-item" href="' . $homeURL . '"><div class="o--richmenu-item-inner"><div class="a--richmenu-image"><img src="' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-640x360.png" width="161" height="121" alt="" srcset="' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-320x180.png 320w, ' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-640x360.png 640w" sizes="(max-width:552px) 40vw,100vw"/></div><div class="c--richmenu-contents ef" style="color:#2d4444;background:rgba(255,255,255,0.51)"><div class="a--richmenu-text d--bold">リッチメニュー</div></div></div></a>
	<!-- /wp:jinr-blocks/richmenuchild -->
	
	<!-- wp:jinr-blocks/richmenuchild {"text":"デザイン見出し","link":"' . $homeURL . '","thumbnailUrl":"' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-640x360.png","thumbnailSrcset":"' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-320x180.png 320w, ' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-640x360.png 640w","thumbnailSizes":"(max-width:552px) 40vw,100vw","columnSelect":"4","itemRatio":"4-3","itemText":"on","textDesign":"1","textColor":"#2d4444","textBgColor":"rgba(255,255,255,0.51)","filterOpacity":75,"filterDisplay":"off","filterColor":"#ffffff","pageTemplate":""} -->
	<a class="wp-block-jinr-blocks-richmenuchild o--richmenu-item" href="' . $homeURL . '"><div class="o--richmenu-item-inner"><div class="a--richmenu-image"><img src="' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-640x360.png" width="161" height="121" alt="" srcset="' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-320x180.png 320w, ' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-640x360.png 640w" sizes="(max-width:552px) 40vw,100vw"/></div><div class="c--richmenu-contents ef" style="color:#2d4444;background:rgba(255,255,255,0.51)"><div class="a--richmenu-text d--bold">デザイン見出し</div></div></div></a>
	<!-- /wp:jinr-blocks/richmenuchild -->
	
	<!-- wp:jinr-blocks/richmenuchild {"text":"カテゴリー区別","link":"' . $homeURL . '","thumbnailUrl":"' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-640x360.png","thumbnailSrcset":"' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-320x180.png 320w, ' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-640x360.png 640w","thumbnailSizes":"(max-width:552px) 40vw,100vw","columnSelect":"4","itemRatio":"4-3","itemText":"on","textDesign":"1","textColor":"#2d4444","textBgColor":"rgba(255,255,255,0.51)","filterOpacity":75,"filterDisplay":"off","filterColor":"#ffffff","pageTemplate":""} -->
	<a class="wp-block-jinr-blocks-richmenuchild o--richmenu-item" href="' . $homeURL . '"><div class="o--richmenu-item-inner"><div class="a--richmenu-image"><img src="' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-640x360.png" width="161" height="121" alt="" srcset="' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-320x180.png 320w, ' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-640x360.png 640w" sizes="(max-width:552px) 40vw,100vw"/></div><div class="c--richmenu-contents ef" style="color:#2d4444;background:rgba(255,255,255,0.51)"><div class="a--richmenu-text d--bold">カテゴリー区別</div></div></div></a>
	<!-- /wp:jinr-blocks/richmenuchild -->
	
	<!-- wp:jinr-blocks/richmenuchild {"text":"記事リスト","link":"' . $homeURL . '","thumbnailUrl":"' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-640x360.png","thumbnailSrcset":"' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-320x180.png 320w, ' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-640x360.png 640w","thumbnailSizes":"(max-width:552px) 40vw,100vw","columnSelect":"4","itemRatio":"4-3","itemText":"on","textDesign":"1","textColor":"#2d4444","textBgColor":"rgba(255,255,255,0.51)","filterOpacity":75,"filterDisplay":"off","filterColor":"#ffffff","pageTemplate":""} -->
	<a class="wp-block-jinr-blocks-richmenuchild o--richmenu-item" href="' . $homeURL . '"><div class="o--richmenu-item-inner"><div class="a--richmenu-image"><img src="' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-640x360.png" width="161" height="121" alt="" srcset="' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-320x180.png 320w, ' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-640x360.png 640w" sizes="(max-width:552px) 40vw,100vw"/></div><div class="c--richmenu-contents ef" style="color:#2d4444;background:rgba(255,255,255,0.51)"><div class="a--richmenu-text d--bold">記事リスト</div></div></div></a>
	<!-- /wp:jinr-blocks/richmenuchild -->
	
	<!-- wp:jinr-blocks/richmenuchild {"text":"開発者について","link":"' . $homeURL . '","thumbnailUrl":"' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-640x360.png","thumbnailSrcset":"' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-320x180.png 320w, ' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-640x360.png 640w","thumbnailSizes":"(max-width:552px) 40vw,100vw","columnSelect":"4","itemRatio":"4-3","itemText":"on","textDesign":"1","textColor":"#2d4444","textBgColor":"rgba(255,255,255,0.51)","filterOpacity":75,"filterDisplay":"off","filterColor":"#ffffff","pageTemplate":""} -->
	<a class="wp-block-jinr-blocks-richmenuchild o--richmenu-item" href="' . $homeURL . '"><div class="o--richmenu-item-inner"><div class="a--richmenu-image"><img src="' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-640x360.png" width="161" height="121" alt="" srcset="' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-320x180.png 320w, ' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-640x360.png 640w" sizes="(max-width:552px) 40vw,100vw"/></div><div class="c--richmenu-contents ef" style="color:#2d4444;background:rgba(255,255,255,0.51)"><div class="a--richmenu-text d--bold">開発者について</div></div></div></a>
	<!-- /wp:jinr-blocks/richmenuchild -->
	
	<!-- wp:jinr-blocks/richmenuchild {"text":"テーマについて","link":"' . $homeURL . '","thumbnailUrl":"' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-640x360.png","thumbnailSrcset":"' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-320x180.png 320w, ' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-640x360.png 640w","thumbnailSizes":"(max-width:552px) 40vw,100vw","columnSelect":"4","itemRatio":"4-3","itemText":"on","textDesign":"1","textColor":"#2d4444","textBgColor":"rgba(255,255,255,0.51)","filterOpacity":75,"filterDisplay":"off","filterColor":"#ffffff","pageTemplate":""} -->
	<a class="wp-block-jinr-blocks-richmenuchild o--richmenu-item" href="' . $homeURL . '"><div class="o--richmenu-item-inner"><div class="a--richmenu-image"><img src="' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-640x360.png" width="161" height="121" alt="" srcset="' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-320x180.png 320w, ' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-640x360.png 640w" sizes="(max-width:552px) 40vw,100vw"/></div><div class="c--richmenu-contents ef" style="color:#2d4444;background:rgba(255,255,255,0.51)"><div class="a--richmenu-text d--bold">テーマについて</div></div></div></a>
	<!-- /wp:jinr-blocks/richmenuchild --></section>
	<!-- /wp:jinr-blocks/richmenu --></div></section></section>
	<!-- /wp:jinr-blocks/fullwidth -->
	
	<!-- wp:jinr-blocks/fullwidth {"fullWidthBgColor":"#faf6f1","fullWidthPaddingPc":"d--fullwidth-pad40","fullWidthPaddingSp":"d--fullwidth-pad40-sp"} -->
	<section class="wp-block-jinr-blocks-fullwidth b--jinr-block b--jinr-fullwidth-container"><section class="b--jinr-fullwidth" style="background-color:#faf6f1"><div class="d--fullwidth-max d--fullwidth-pad40 d--fullwidth-pad40-sp t--main-width" style="color:false"><!-- wp:jinr-blocks/designtitle {"mainText":"DOWNLOAD","subText":"テーマダウンロード","divText":"DOWNLOAD","radioLayout":"center","className":"undefined"} -->
	<section class="wp-block-jinr-blocks-designtitle b--jinr-block b--jinr-h2rich d--h2rich-center d--h2rich-style1 d--titledesign-weight-thin d--h2rich-none undefined js--scr-animation" style="border-color:false"><div class="c--h2rich-contents"><span class="a--h2rich-subcopy ef" style="color:false">テーマダウンロード</span><h2 class="a--h2rich-maincopy d--bold ef" style="color:false">DOWNLOAD</h2></div></section>
	<!-- /wp:jinr-blocks/designtitle -->
	
	<!-- wp:jinr-blocks/background {"backgroundDesign":"d--background-design-shadow","backgroundShadowType":"d--background-shadow-l","backgroundBgColor":"rgba(255,255,255,0.51)"} -->
	<div class="wp-block-jinr-blocks-background b--jinr-block b--jinr-background"><div class="o--background-container d--background-design-shadow d--background-shadow-l d--border-outset"><div class="c--background-inner d--border-none d--border-1px t--round" style="border-color:#c5c5c5"><!-- wp:spacer {"height":"40px"} -->
	<div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->
	
	<!-- wp:columns -->
	<div class="wp-block-columns js--scr-animation"><!-- wp:column {"width":"50%"} -->
	<div class="wp-block-column" style="flex-basis:50%"><!-- wp:image {"align":"center","id":1256,"sizeSlug":"full","linkDestination":"none"} -->
	<figure class="wp-block-image aligncenter size-full"><img src="https://jinr-demo.jp/demo-12/wp-content/uploads/2022/08/アートボード-1.png" alt="" class="wp-image-1256"/></figure>
	<!-- /wp:image --></div>
	<!-- /wp:column -->
	
	<!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
	<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%"><!-- wp:paragraph {"align":"center"} -->
	<p class="has-text-align-center"><strong><span class="jinr-d--font-size d--fontsize-21px">直感的なデザインを今すぐ</span></strong></p>
	<!-- /wp:paragraph -->
	
	<!-- wp:paragraph -->
	<p>JIN:Rは、直感的な使い心地を追求して作り上げたWordPressテーマ。ブログだけでなくコーポレートデザインにも対応できるデザイン幅を持ったテンプレートです</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:jinr-blocks/button {"content":"今すぐダウンロード","inputUrl":"' . $homeURL . '","blockID":"c72e0680-9009-4a0c-b095-1f3f6cdc96f6","className":"wp-block-jinr-blocks-button b--jinr-block b--jinr-button js--scr-animation"} /--></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns -->
	
	<!-- wp:spacer {"height":"30px"} -->
	<div style="height:30px" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer --></div></div><div class="a--background-color" style="background:rgba(255,255,255,0.51)"></div><div class="a--background-image t--round d--background-pattern1" style="opacity:0.29999999999999993;background-size:16.666666666666668%"></div></div>
	<!-- /wp:jinr-blocks/background --></div></section></section>
	<!-- /wp:jinr-blocks/fullwidth -->';

	if ($frontpageslug == 'demo-10') {
		$pageupdatearry = array(
			'ID'            => $frontpageID,
		);
		wp_update_post($pageupdatearry);
		update_option('show_on_front', 'page');
		update_option('page_on_front', $frontpageID);
	} else {
		// 新規作成する場合
		$pagepresetarry = array(
			'post_title'    => 'デモプリセット記事 Part10',
			'post_content'  => $presetContents,
			'post_name'     => 'demo-10',
			'post_status'   => 'publish',
			'post_type'     => 'page',
			'page_template' => 'template-full-width.php',
		);
		$presetId = wp_insert_post($pagepresetarry);
		if ($presetId != 0) {
			update_post_meta($presetId, '_jinr_noindex_display', 1);
		};
		update_option('show_on_front', 'page');
		update_option('page_on_front', $presetId);
	}
	$query['autofocus[section]'] = 'jinr__design_preset_section';
	$presetsection = add_query_arg($query, admin_url('customize.php'));
	wp_redirect($presetsection);
	exit;
}
function jinr_preset_demo11()
{
	$preset_num = '11';
	update_option('preset_data', 11);
	jinr_export_json_exclude($preset_num);
	$homeURL = esc_url(home_url('/'));


	// 任意の記事を作成する
	$frontpageID    = get_option('page_on_front');
	$frontpageslug  = get_post_field('post_name', $frontpageID);
	$presetContents = '<!-- wp:jinr-blocks/background {"backgroundDesign":"d--background-design-shadow","backgroundBgColor":"#fcfcfc","backgroundBorderColor":"#f8f8f8","backgroundSize":9} -->
	<div class="wp-block-jinr-blocks-background b--jinr-block b--jinr-background"><div class="o--background-container d--background-design-shadow d--background-shadow-s d--border-outset"><div class="c--background-inner d--border-none d--border-1px t--round" style="border-color:#f8f8f8"><!-- wp:columns -->
	<div class="wp-block-columns js--scr-animation"><!-- wp:column {"width":"30%"} -->
	<div class="wp-block-column" style="flex-basis:30%"><!-- wp:jinr-blocks/designtitle {"mainText":"About Me","subText":"「じん」のプロフィール","divText":"About Me","radioLayout":"center","mainTextColor":"#474259","className":"d--maintext-customize","jinrBlocksCSSAttribute":".wp-block-column .d--maintext-customize.b--jinr-h2rich.d--h2rich-center .c--h2rich-contents .a--h2rich-maincopy {font-size: 27px;}"} -->
	<div class="jinr-add-class-container"><section class="wp-block-jinr-blocks-designtitle b--jinr-block b--jinr-h2rich d--h2rich-center d--h2rich-style1 d--titledesign-weight-thin d--h2rich-none d--maintext-customize js--scr-animation" style="border-color:false"><div class="c--h2rich-contents"><span class="a--h2rich-subcopy ef" style="color:false">「じん」のプロフィール</span><h2 class="a--h2rich-maincopy d--bold ef" style="color:#474259">About Me</h2></div></section><style jsx="true">.wp-block-column .d--maintext-customize.b--jinr-h2rich.d--h2rich-center .c--h2rich-contents .a--h2rich-maincopy {font-size: 27px;}</style></div>
	<!-- /wp:jinr-blocks/designtitle -->
	
	<!-- wp:image {"id":1924,"sizeSlug":"large","linkDestination":"none"} -->
	<figure class="wp-block-image size-large"><img src="' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-640x360.png" alt="" class="wp-image-1924"/></figure>
	<!-- /wp:image --></div>
	<!-- /wp:column -->
	
	<!-- wp:column {"verticalAlignment":"bottom","width":"70%"} -->
	<div class="wp-block-column is-vertically-aligned-bottom" style="flex-basis:70%"><!-- wp:paragraph -->
	<p>こんにちは、フリーランスデザイナーの「じん」といいます。</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:paragraph -->
	<p>私は水彩塗りの優しいタッチのイラストが得意とするイラストレーターです。そして、WordPressを使ったサイト制作もしているトータルデザイナーでもあります。</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:paragraph -->
	<p>自分の制作したイラスト素材をもとにして、クライアントの思い描いた世界観のサイトを構築するといった、少し変わった形式でお仕事をしています。</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:jinr-blocks/button {"content":"Read more","inputUrl":"' . $homeURL . '","buttonDesign":"arrow","buttonLayout":"d--button-right","registeredButton":"5","blockID":"990e2686-2017-4f53-9b20-3fa721234085","className":"wp-block-jinr-blocks-button b--jinr-block b--jinr-button js--scr-animation"} /--></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns --></div></div><div class="a--background-color" style="background:#fcfcfc"></div><div class="a--background-image t--round d--background-pattern1" style="opacity:0.29999999999999993;background-size:3%"></div></div>
	<!-- /wp:jinr-blocks/background -->
	
	<!-- wp:jinr-blocks/background {"backgroundBgColor":"#ffffff"} -->
	<div class="wp-block-jinr-blocks-background b--jinr-block b--jinr-background"><div class="o--background-container d--background-design-flat d--background-shadow-s d--border-outset"><div class="c--background-inner d--border-none d--border-1px t--round" style="border-color:#c5c5c5"><!-- wp:jinr-blocks/designtitle {"mainText":"WORKS","subText":"制作実績","divText":"WORKS","radioLayout":"center","mainTextColor":"#474259"} -->
	<section class="wp-block-jinr-blocks-designtitle b--jinr-block b--jinr-h2rich d--h2rich-center d--h2rich-style1 d--titledesign-weight-thin d--h2rich-none js--scr-animation" style="border-color:false"><div class="c--h2rich-contents"><span class="a--h2rich-subcopy ef" style="color:false">制作実績</span><h2 class="a--h2rich-maincopy d--bold ef" style="color:#474259">WORKS</h2></div></section>
	<!-- /wp:jinr-blocks/designtitle -->
	
	<!-- wp:jinr-blocks/richmenu {"itemRatio":"1-1","itemTextSize":"d--richmenu-text-small","pageTemplate":"template-full-width.php"} -->
	<section class="wp-block-jinr-blocks-richmenu b--jinr-block b--jinr-richmenu d--richmenu-column-2-sp d--richmenu-column4 d--richmenu-ratio1-1 d--richmenu-simple d--richmenu-text-small d--richmenu-text-style5 d--richmenu-animation-fadebyone js--scr-animation d--richmenu-hover-up"><!-- wp:jinr-blocks/richmenuchild {"text":"風船をもったうさぎさん","link":"' . $homeURL . '","thumbnailUrl":"' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-640x360.png","thumbnailSrcset":"' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-320x180.png 320w, ' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-640x360.png 640w","thumbnailSizes":"(max-width:552px) 40vw,100vw","columnSelect":"4","itemRatio":"1-1","itemText":"on","textDesign":"5","textColor":"#474259","textBgColor":"rgba(255,255,255,0.51)","filterOpacity":75,"filterDisplay":"off","filterColor":"#ffffff","pageTemplate":"template-full-width.php"} -->
	<a class="wp-block-jinr-blocks-richmenuchild o--richmenu-item" href="' . $homeURL . '"><div class="o--richmenu-item-inner"><div class="a--richmenu-image"><img src="' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-640x360.png" width="263" height="263" alt="" srcset="' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-320x180.png 320w, ' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-640x360.png 640w" sizes="(max-width:552px) 40vw,100vw"/></div><div class="c--richmenu-contents ef" style="color:#474259"><div class="a--richmenu-text d--bold">風船をもったうさぎさん</div></div></div></a>
	<!-- /wp:jinr-blocks/richmenuchild -->
	
	<!-- wp:jinr-blocks/richmenuchild {"link":"' . $homeURL . '","thumbnailUrl":"' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-640x360.png","thumbnailSrcset":"' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-320x180.png 320w, ' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-640x360.png 640w","thumbnailSizes":"(max-width:552px) 40vw,100vw","columnSelect":"4","itemRatio":"1-1","itemText":"on","textDesign":"5","textColor":"#474259","textBgColor":"rgba(255,255,255,0.51)","filterOpacity":75,"filterDisplay":"off","filterColor":"#ffffff","pageTemplate":"template-full-width.php"} -->
	<a class="wp-block-jinr-blocks-richmenuchild o--richmenu-item" href="' . $homeURL . '"><div class="o--richmenu-item-inner"><div class="a--richmenu-image"><img src="' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-640x360.png" width="263" height="263" alt="" srcset="' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-320x180.png 320w, ' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-640x360.png 640w" sizes="(max-width:552px) 40vw,100vw"/></div><div class="c--richmenu-contents ef" style="color:#474259"><div class="a--richmenu-text d--bold">メニュー名を入力</div></div></div></a>
	<!-- /wp:jinr-blocks/richmenuchild -->
	
	<!-- wp:jinr-blocks/richmenuchild {"link":"' . $homeURL . '","thumbnailUrl":"' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-640x360.png","thumbnailSrcset":"' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-320x180.png 320w, ' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-640x360.png 640w","thumbnailSizes":"(max-width:552px) 40vw,100vw","columnSelect":"4","itemRatio":"1-1","itemText":"on","textDesign":"5","textColor":"#474259","textBgColor":"rgba(255,255,255,0.51)","filterOpacity":75,"filterDisplay":"off","filterColor":"#ffffff","pageTemplate":"template-full-width.php"} -->
	<a class="wp-block-jinr-blocks-richmenuchild o--richmenu-item" href="' . $homeURL . '"><div class="o--richmenu-item-inner"><div class="a--richmenu-image"><img src="' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-640x360.png" width="263" height="263" alt="" srcset="' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-320x180.png 320w, ' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-640x360.png 640w" sizes="(max-width:552px) 40vw,100vw"/></div><div class="c--richmenu-contents ef" style="color:#474259"><div class="a--richmenu-text d--bold">メニュー名を入力</div></div></div></a>
	<!-- /wp:jinr-blocks/richmenuchild -->
	
	<!-- wp:jinr-blocks/richmenuchild {"link":"' . $homeURL . '","thumbnailUrl":"' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-640x360.png","thumbnailSrcset":"' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-320x180.png 320w, ' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-640x360.png 640w","thumbnailSizes":"(max-width:552px) 40vw,100vw","columnSelect":"4","itemRatio":"1-1","itemText":"on","textDesign":"5","textColor":"#474259","textBgColor":"rgba(255,255,255,0.51)","filterOpacity":75,"filterDisplay":"off","filterColor":"#ffffff","pageTemplate":"template-full-width.php"} -->
	<a class="wp-block-jinr-blocks-richmenuchild o--richmenu-item" href="' . $homeURL . '"><div class="o--richmenu-item-inner"><div class="a--richmenu-image"><img src="' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-640x360.png" width="263" height="263" alt="" srcset="' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-320x180.png 320w, ' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-640x360.png 640w" sizes="(max-width:552px) 40vw,100vw"/></div><div class="c--richmenu-contents ef" style="color:#474259"><div class="a--richmenu-text d--bold">メニュー名を入力</div></div></div></a>
	<!-- /wp:jinr-blocks/richmenuchild -->
	
	<!-- wp:jinr-blocks/richmenuchild {"link":"' . $homeURL . '","thumbnailUrl":"' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-640x360.png","thumbnailSrcset":"' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-320x180.png 320w, ' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-640x360.png 640w","thumbnailSizes":"(max-width:552px) 40vw,100vw","columnSelect":"4","itemRatio":"1-1","itemText":"on","textDesign":"5","textColor":"#474259","textBgColor":"rgba(255,255,255,0.51)","filterOpacity":75,"filterDisplay":"off","filterColor":"#ffffff","pageTemplate":"template-full-width.php"} -->
	<a class="wp-block-jinr-blocks-richmenuchild o--richmenu-item" href="' . $homeURL . '"><div class="o--richmenu-item-inner"><div class="a--richmenu-image"><img src="' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-640x360.png" width="263" height="263" alt="" srcset="' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-320x180.png 320w, ' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-640x360.png 640w" sizes="(max-width:552px) 40vw,100vw"/></div><div class="c--richmenu-contents ef" style="color:#474259"><div class="a--richmenu-text d--bold">メニュー名を入力</div></div></div></a>
	<!-- /wp:jinr-blocks/richmenuchild -->
	
	<!-- wp:jinr-blocks/richmenuchild {"link":"' . $homeURL . '","thumbnailUrl":"' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-640x360.png","thumbnailSrcset":"' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-320x180.png 320w, ' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-640x360.png 640w","thumbnailSizes":"(max-width:552px) 40vw,100vw","columnSelect":"4","itemRatio":"1-1","itemText":"on","textDesign":"5","textColor":"#474259","textBgColor":"rgba(255,255,255,0.51)","filterOpacity":75,"filterDisplay":"off","filterColor":"#ffffff","pageTemplate":"template-full-width.php"} -->
	<a class="wp-block-jinr-blocks-richmenuchild o--richmenu-item" href="' . $homeURL . '"><div class="o--richmenu-item-inner"><div class="a--richmenu-image"><img src="' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-640x360.png" width="263" height="263" alt="" srcset="' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-320x180.png 320w, ' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-640x360.png 640w" sizes="(max-width:552px) 40vw,100vw"/></div><div class="c--richmenu-contents ef" style="color:#474259"><div class="a--richmenu-text d--bold">メニュー名を入力</div></div></div></a>
	<!-- /wp:jinr-blocks/richmenuchild -->
	
	<!-- wp:jinr-blocks/richmenuchild {"link":"' . $homeURL . '","thumbnailUrl":"' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-640x360.png","thumbnailSrcset":"' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-320x180.png 320w, ' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-640x360.png 640w","thumbnailSizes":"(max-width:552px) 40vw,100vw","columnSelect":"4","itemRatio":"1-1","itemText":"on","textDesign":"5","textColor":"#474259","textBgColor":"rgba(255,255,255,0.51)","filterOpacity":75,"filterDisplay":"off","filterColor":"#ffffff","pageTemplate":"template-full-width.php"} -->
	<a class="wp-block-jinr-blocks-richmenuchild o--richmenu-item" href="' . $homeURL . '"><div class="o--richmenu-item-inner"><div class="a--richmenu-image"><img src="' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-640x360.png" width="263" height="263" alt="" srcset="' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-320x180.png 320w, ' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-640x360.png 640w" sizes="(max-width:552px) 40vw,100vw"/></div><div class="c--richmenu-contents ef" style="color:#474259"><div class="a--richmenu-text d--bold">メニュー名を入力</div></div></div></a>
	<!-- /wp:jinr-blocks/richmenuchild -->
	
	<!-- wp:jinr-blocks/richmenuchild {"link":"' . $homeURL . '","thumbnailUrl":"' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-640x360.png","thumbnailSrcset":"' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-320x180.png 320w, ' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-640x360.png 640w","thumbnailSizes":"(max-width:552px) 40vw,100vw","columnSelect":"4","itemRatio":"1-1","itemText":"on","textDesign":"5","textColor":"#474259","textBgColor":"rgba(255,255,255,0.51)","filterOpacity":75,"filterDisplay":"off","filterColor":"#ffffff","pageTemplate":"template-full-width.php"} -->
	<a class="wp-block-jinr-blocks-richmenuchild o--richmenu-item" href="' . $homeURL . '"><div class="o--richmenu-item-inner"><div class="a--richmenu-image"><img src="' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-640x360.png" width="263" height="263" alt="" srcset="' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-320x180.png 320w, ' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-640x360.png 640w" sizes="(max-width:552px) 40vw,100vw"/></div><div class="c--richmenu-contents ef" style="color:#474259"><div class="a--richmenu-text d--bold">メニュー名を入力</div></div></div></a>
	<!-- /wp:jinr-blocks/richmenuchild --></section>
	<!-- /wp:jinr-blocks/richmenu --></div></div><div class="a--background-color" style="background:#ffffff"></div><div class="a--background-image t--round d--background-pattern1" style="opacity:0.29999999999999993;background-size:16.666666666666668%"></div></div>
	<!-- /wp:jinr-blocks/background -->
	
	<!-- wp:spacer {"height":"30px"} -->
	<div style="height:30px" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->
	
	<!-- wp:jinr-blocks/fullwidth {"fullWidthBgColor":"#FFF5F5","fullWidthBgColorDesign":"blur","fullWidthBlurlebel":4,"fullWidthPaddingPc":"d--fullwidth-pad40","fullWidthPaddingSp":"d--fullwidth-pad30-sp"} -->
	<section class="wp-block-jinr-blocks-fullwidth b--jinr-block b--jinr-fullwidth-container"><section class="b--jinr-fullwidth" style="background-color:#FFF5F5"><div class="d--fullwidth-max d--fullwidth-pad40 d--fullwidth-pad30-sp t--main-width" style="color:false"><!-- wp:jinr-blocks/designtitle {"mainText":"SERVICE","subText":"サービス","divText":"SERVICE","radioLayout":"center","mainTextColor":"#474259"} -->
	<section class="wp-block-jinr-blocks-designtitle b--jinr-block b--jinr-h2rich d--h2rich-center d--h2rich-style1 d--titledesign-weight-thin d--h2rich-none js--scr-animation" style="border-color:false"><div class="c--h2rich-contents"><span class="a--h2rich-subcopy ef" style="color:false">サービス</span><h2 class="a--h2rich-maincopy d--bold ef" style="color:#474259">SERVICE</h2></div></section>
	<!-- /wp:jinr-blocks/designtitle -->
	
	<!-- wp:columns -->
	<div class="wp-block-columns js--scr-animation"><!-- wp:column -->
	<div class="wp-block-column"><!-- wp:jinr-blocks/background {"backgroundDesign":"d--background-design-shadow","backgroundBgColor":"#ffffff","backgroundBorderWidth":"d--border-3px","backgroundBorderColor":"#3f3f3f"} -->
	<div class="wp-block-jinr-blocks-background b--jinr-block b--jinr-background"><div class="o--background-container d--background-design-shadow d--background-shadow-s d--border-outset"><div class="c--background-inner d--border-none d--border-3px t--round" style="border-color:#3f3f3f"><!-- wp:jinr-blocks/designtitle {"mainText":"character","subText":"キャラクター","divText":"character","titleDesign":"2","symbolIcon":"illust","mainTextColor":"#474259"} -->
	<section class="wp-block-jinr-blocks-designtitle b--jinr-block b--jinr-h2rich d--h2rich-left d--h2rich-style2 d--titledesign-weight-thin d--h2rich-none js--scr-animation" style="border-color:false"><div class="c--h2rich-contents"><span class="a--h2rich-subcopy ef" style="color:false">キャラクター</span><h2 class="a--h2rich-maincopy d--bold ef" style="color:#474259">character</h2></div></section>
	<!-- /wp:jinr-blocks/designtitle -->
	
	<!-- wp:paragraph {"fontSize":"small"} -->
	<p class="has-small-font-size">WebサイトやSNSで利用する「キャラクターイラスト」の制作をさせていただきます。</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:paragraph {"fontSize":"small"} -->
	<p class="has-small-font-size"><span class="d--marker1 d--bold">キャラクターはビジネスにおける顔にもなる重要な存在である</span>と理解した上で、１つ１つ相談して、丁寧に制作をさせていただくことをポリシーとしています。</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:jinr-blocks/designborder {"borderStyle":"d--sen-style5","borderColorSet":"#3f3f3f","borderColorSetAdmin":"#3f3f3f","topMarginPcAttribute":"d--top-margin-s-pc","bottomMarginPcAttribute":"d--bottom-margin-s-pc"} -->
	<div class="wp-block-jinr-blocks-designborder b--jinr-block jinr-sen d--top-margin-s-pc d--bottom-margin-s-pc "><div class="d--sen-style5"><span class="a--sen-parts1" style="height:2px;background:repeating-linear-gradient(to right, #3f3f3f, #3f3f3f 10px, transparent 0, transparent 20px)"></span></div></div>
	<!-- /wp:jinr-blocks/designborder -->
	
	<!-- wp:paragraph {"style":{"typography":{"fontSize":"14px"}}} -->
	<p style="font-size:14px"><strong>料金目安：10,000円〜</strong><br><strong>予定納期：1週間以内</strong></p>
	<!-- /wp:paragraph -->
	
	<!-- wp:jinr-blocks/button {"content":"ご相談はこちらへ","inputUrl":"' . $homeURL . '","blockID":"55963adf-5330-4a67-994a-3a9fe586f3a4","className":"wp-block-jinr-blocks-button b--jinr-block b--jinr-button js--scr-animation"} /-->
</div></div><div class="a--background-color" style="background:#ffffff"></div><div class="a--background-image t--round d--background-pattern1" style="opacity:0.29999999999999993;background-size:16.666666666666668%"></div></div>
	<!-- /wp:jinr-blocks/background --></div>
	<!-- /wp:column -->
	
	<!-- wp:column -->
	<div class="wp-block-column"><!-- wp:jinr-blocks/background {"backgroundDesign":"d--background-design-shadow","backgroundBgColor":"#ffffff","backgroundBorderWidth":"d--border-3px","backgroundBorderColor":"#3f3f3f"} -->
	<div class="wp-block-jinr-blocks-background b--jinr-block b--jinr-background"><div class="o--background-container d--background-design-shadow d--background-shadow-s d--border-outset"><div class="c--background-inner d--border-none d--border-3px t--round" style="border-color:#3f3f3f"><!-- wp:jinr-blocks/designtitle {"mainText":"Site Design","subText":"サイトデザイン","divText":"Site Design","titleDesign":"2","symbolIcon":"paint","mainTextColor":"#474259"} -->
	<section class="wp-block-jinr-blocks-designtitle b--jinr-block b--jinr-h2rich d--h2rich-left d--h2rich-style2 d--titledesign-weight-thin d--h2rich-none js--scr-animation" style="border-color:false"><div class="c--h2rich-contents"><span class="a--h2rich-subcopy ef" style="color:false">サイトデザイン</span><h2 class="a--h2rich-maincopy d--bold ef" style="color:#474259">Site Design</h2></div></section>
	<!-- /wp:jinr-blocks/designtitle -->
	
	<!-- wp:paragraph {"fontSize":"small"} -->
	<p class="has-small-font-size">イラストだけでなく、「WEBサイトのデザイン」も私の得意としているジャンルです。</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:paragraph {"fontSize":"small"} -->
	<p class="has-small-font-size"><span class="d--marker1 d--bold">ブログから企業HPまで、あらゆるデザインを担当させていただきます</span>。ブログソフト「WordPress」を使って、ご要望にあったページデザインを実現します。</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:jinr-blocks/designborder {"borderStyle":"d--sen-style5","borderColorSet":"#3f3f3f","borderColorSetAdmin":"#3f3f3f","topMarginPcAttribute":"d--top-margin-s-pc","bottomMarginPcAttribute":"d--bottom-margin-s-pc"} -->
	<div class="wp-block-jinr-blocks-designborder b--jinr-block jinr-sen d--top-margin-s-pc d--bottom-margin-s-pc "><div class="d--sen-style5"><span class="a--sen-parts1" style="height:2px;background:repeating-linear-gradient(to right, #3f3f3f, #3f3f3f 10px, transparent 0, transparent 20px)"></span></div></div>
	<!-- /wp:jinr-blocks/designborder -->
	
	<!-- wp:paragraph {"style":{"typography":{"fontSize":"14px"}}} -->
	<p style="font-size:14px"><strong>料金目安：50,000円〜</strong><br><strong>予定納期：3週間以内</strong></p>
	<!-- /wp:paragraph -->
	
	<!-- wp:jinr-blocks/button {"content":"ご相談はこちらへ","inputUrl":"' . $homeURL . '","blockID":"728d25f2-b0cf-43fc-8820-56b99fc1064f","className":"wp-block-jinr-blocks-button b--jinr-block b--jinr-button js--scr-animation"} /--></div></div><div class="a--background-color" style="background:#ffffff"></div><div class="a--background-image t--round d--background-pattern1" style="opacity:0.29999999999999993;background-size:16.666666666666668%"></div></div>
	<!-- /wp:jinr-blocks/background --></div>
	<!-- /wp:column -->
	
	<!-- wp:column -->
	<div class="wp-block-column"><!-- wp:jinr-blocks/background {"backgroundDesign":"d--background-design-shadow","backgroundBgColor":"#ffffff","backgroundBorderWidth":"d--border-3px","backgroundBorderColor":"#3f3f3f"} -->
	<div class="wp-block-jinr-blocks-background b--jinr-block b--jinr-background"><div class="o--background-container d--background-design-shadow d--background-shadow-s d--border-outset"><div class="c--background-inner d--border-none d--border-3px t--round" style="border-color:#3f3f3f"><!-- wp:jinr-blocks/designtitle {"mainText":"Creative","subText":"そのほか、創作活動","divText":"Creative","titleDesign":"2","symbolIcon":"spanner","mainTextColor":"#474259"} -->
	<section class="wp-block-jinr-blocks-designtitle b--jinr-block b--jinr-h2rich d--h2rich-left d--h2rich-style2 d--titledesign-weight-thin d--h2rich-none js--scr-animation" style="border-color:false"><div class="c--h2rich-contents"><span class="a--h2rich-subcopy ef" style="color:false">そのほか、創作活動</span><h2 class="a--h2rich-maincopy d--bold ef" style="color:#474259">Creative</h2></div></section>
	<!-- /wp:jinr-blocks/designtitle -->
	
	<!-- wp:paragraph {"fontSize":"small"} -->
	<p class="has-small-font-size">「イラストとホームページデザインをすべてお願いしたい」といったご依頼も承ります。</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:paragraph {"fontSize":"small"} -->
	<p class="has-small-font-size"><span class="d--marker1 d--bold">フルオーダーメイドのイラスト制作&amp;webデザインを担当させていただきます。</span> オンラインでの事前打ち合わせで方向性を共有したのちに、制作へと移らせていただきます。</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:jinr-blocks/designborder {"borderStyle":"d--sen-style5","borderColorSet":"#3f3f3f","borderColorSetAdmin":"#3f3f3f","topMarginPcAttribute":"d--top-margin-s-pc","bottomMarginPcAttribute":"d--bottom-margin-s-pc"} -->
	<div class="wp-block-jinr-blocks-designborder b--jinr-block jinr-sen d--top-margin-s-pc d--bottom-margin-s-pc "><div class="d--sen-style5"><span class="a--sen-parts1" style="height:2px;background:repeating-linear-gradient(to right, #3f3f3f, #3f3f3f 10px, transparent 0, transparent 20px)"></span></div></div>
	<!-- /wp:jinr-blocks/designborder -->
	
	<!-- wp:paragraph {"style":{"typography":{"fontSize":"14px"}}} -->
	<p style="font-size:14px"><strong>料金目安：100,000円〜</strong><br><strong>予定納期：1ヶ月半以内</strong></p>
	<!-- /wp:paragraph -->
	
	<!-- wp:jinr-blocks/button {"content":"ご相談はこちらへ","inputUrl":"' . $homeURL . '","blockID":"5d07f173-b2c5-480b-b4d7-20ab346a7f2a","className":"wp-block-jinr-blocks-button b--jinr-block b--jinr-button js--scr-animation"} /--></div></div><div class="a--background-color" style="background:#ffffff"></div><div class="a--background-image t--round d--background-pattern1" style="opacity:0.29999999999999993;background-size:16.666666666666668%"></div></div>
	<!-- /wp:jinr-blocks/background --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns -->
	
	<!-- wp:spacer {"height":"50px"} -->
	<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->
	
	<!-- wp:jinr-blocks/designtitle {"mainText":"Thinking about...","subText":"描く時に考えること","divText":"Thinking about...","mainTextColor":"#474259","className":"d--maintext-customize","jinrBlocksCSSAttribute":".d--maintext-customize.b--jinr-h2rich.d--h2rich-left .c--h2rich-contents .a--h2rich-maincopy {font-size: 27px;}"} -->
	<div class="jinr-add-class-container"><section class="wp-block-jinr-blocks-designtitle b--jinr-block b--jinr-h2rich d--h2rich-left d--h2rich-style1 d--titledesign-weight-thin d--h2rich-none d--maintext-customize js--scr-animation" style="border-color:false"><div class="c--h2rich-contents"><span class="a--h2rich-subcopy ef" style="color:false">描く時に考えること</span><h2 class="a--h2rich-maincopy d--bold ef" style="color:#474259">Thinking about...</h2></div></section><style jsx="true">.d--maintext-customize.b--jinr-h2rich.d--h2rich-left .c--h2rich-contents .a--h2rich-maincopy {font-size: 27px;}</style></div>
	<!-- /wp:jinr-blocks/designtitle -->
	
	<!-- wp:jinr-blocks/postlist {"postNum":3,"columnSelectSp":"2","moreLink":"' . $homeURL . 'category/blocks/","clientId":"7f267bd4-95b6-4579-899c-a2ce8b1e1ca3"} /-->
	
	<!-- wp:spacer {"height":"50px"} -->
	<div style="height:50px" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer --></div></section></section>
	<!-- /wp:jinr-blocks/fullwidth -->';

	if ($frontpageslug == 'demo-11') {
		$pageupdatearry = array(
			'ID'            => $frontpageID,
		);
		wp_update_post($pageupdatearry);
		update_option('show_on_front', 'page');
		update_option('page_on_front', $frontpageID);
	} else {
		// 新規作成する場合
		$pagepresetarry = array(
			'post_title'    => 'デモプリセット記事 Part11',
			'post_content'  => $presetContents,
			'post_name'     => 'demo-11',
			'post_status'   => 'publish',
			'post_type'     => 'page',
			'page_template' => 'template-full-width.php',
		);
		$presetId = wp_insert_post($pagepresetarry);
		if ($presetId != 0) {
			update_post_meta($presetId, '_jinr_noindex_display', 1);
		};
		update_option('show_on_front', 'page');
		update_option('page_on_front', $presetId);
	}
	$query['autofocus[section]'] = 'jinr__design_preset_section';
	$presetsection = add_query_arg($query, admin_url('customize.php'));
	wp_redirect($presetsection);
	exit;
}
function jinr_preset_demo12()
{
	$preset_num = '12';
	update_option('preset_data', 12);
	jinr_export_json_exclude($preset_num);
	$homeURL = esc_url(home_url('/'));


	// 任意の記事を作成する
	$frontpageID    = get_option('page_on_front');
	$frontpageslug  = get_post_field('post_name', $frontpageID);
	$presetContents = '<!-- wp:jinr-blocks/fullwidth {"fullWidthBgColor":"#29253a","fullWidthTextColor":"#ffffff","fullWidthPaddingPc":"d--fullwidth-pad30","fullWidthPaddingSp":"d--fullwidth-pad20-sp"} -->
	<section class="wp-block-jinr-blocks-fullwidth b--jinr-block b--jinr-fullwidth-container"><section class="b--jinr-fullwidth" style="background-color:#29253a"><div class="d--fullwidth-max d--fullwidth-pad30 d--fullwidth-pad20-sp t--main-width" style="color:#ffffff"><!-- wp:spacer {"height":"30px"} -->
	<div style="height:30px" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->
	
	<!-- wp:columns -->
	<div class="wp-block-columns js--scr-animation"><!-- wp:column {"verticalAlignment":"center","width":"340px"} -->
	<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:340px"><!-- wp:jinr-blocks/designtitle {"mainText":"TOP YouTube","subText":"これだけは見て欲しい！","divText":"TOP YouTube","symbolIcon":"youtube","mainTextColor":"#fcfcfc","subTextColor":"#fcfcfc","symbolColor":"#ff0000","className":"d--maintext-customize","jinrBlocksCSSAttribute":".wp-block-column .d--maintext-customize.b--jinr-h2rich.d--h2rich-left .c--h2rich-contents .a--h2rich-maincopy {font-size: 30px;}"} -->
	<div class="jinr-add-class-container"><section class="wp-block-jinr-blocks-designtitle b--jinr-block b--jinr-h2rich d--h2rich-left d--h2rich-style1 d--titledesign-weight-thin d--h2rich-none d--maintext-customize js--scr-animation" style="border-color:false"><div class="c--h2rich-contents"><span class="a--h2rich-subcopy ef" style="color:#fcfcfc">これだけは見て欲しい！</span><h2 class="a--h2rich-maincopy d--bold ef" style="color:#fcfcfc">TOP YouTube</h2></div></section><style jsx="true">.wp-block-column .d--maintext-customize.b--jinr-h2rich.d--h2rich-left .c--h2rich-contents .a--h2rich-maincopy {font-size: 30px;}</style></div>
	<!-- /wp:jinr-blocks/designtitle --></div>
	<!-- /wp:column -->
	
	<!-- wp:column {"verticalAlignment":"center","width":"70%"} -->
	<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:70%"><!-- wp:jinr-blocks/designborder {"borderCustomWidth":"1"} -->
	<div class="wp-block-jinr-blocks-designborder b--jinr-block jinr-sen"><div class="d--sen-style6"><span class="a--sen-parts1" style="height:1px;border-radius:0.5px;background-color:#d0d0d0"></span></div></div>
	<!-- /wp:jinr-blocks/designborder --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns -->
	
	<!-- wp:paragraph -->
	<p><span class="jinr-d--font-size d--fontsize-15px">この３つの動画さえ見てもらえれば、動画編集を武器にしてフリーランスとして稼いでいくための準備が完了します</span></p>
	<!-- /wp:paragraph -->
	
	<!-- wp:jinr-blocks/postlist {"postNum":3,"radioDisplayArticles":"category","displayCategory":"4","moreLink":"' . $homeURL . 'category/tips/","clientId":"177169d5-f5e7-4556-abff-680fa1f9ce6b","radioHover":"d--postlist-hover-zoom","displayDeviceAttribute":"on"} /-->
	
	<!-- wp:jinr-blocks/background {"backgroundBgColorSelect":"grad","backgroundBgColor":"linear-gradient(135deg,rgb(58,64,98) 7%,rgb(45,19,83) 100%)"} -->
	<div class="wp-block-jinr-blocks-background b--jinr-block b--jinr-background"><div class="o--background-container d--background-design-flat d--background-shadow-s d--border-outset"><div class="c--background-inner d--border-none d--border-1px t--round" style="border-color:#c5c5c5"><!-- wp:spacer {"height":"10px"} -->
	<div style="height:10px" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->
	
	<!-- wp:columns -->
	<div class="wp-block-columns js--scr-animation"><!-- wp:column {"width":"55%"} -->
	<div class="wp-block-column" style="flex-basis:55%"><!-- wp:jinr-blocks/designtitle {"mainText":"PREMIRE","subText":"プレミアム動画","divText":"PREMIRE","radioSymbol":"icon","symbolIcon":"v2badge","mainTextColor":"#fff261","subTextColor":"#fff261","titleDesignColor":"#fff261","symbolColor":"#fff261","tagSelect":"div","className":"d--maintext-customize"} -->
	<section class="wp-block-jinr-blocks-designtitle b--jinr-block b--jinr-h2rich d--h2rich-left d--h2rich-style1 d--titledesign-weight-thin d--h2rich-icon d--maintext-customize js--scr-animation" style="border-color:#fff261"><div class="c--h2rich-decoration"><div class="a--h2rich-icon ef" style="color:#fff261"><i class="jin-icons jin-ifont-v2badge"></i></div></div><div class="c--h2rich-contents"><span class="a--h2rich-subcopy ef" style="color:#fff261">プレミアム動画</span><div class="a--h2rich-maincopy d--bold ef" style="color:#fff261">PREMIRE</div></div></section>
	<!-- /wp:jinr-blocks/designtitle -->
	
	<!-- wp:paragraph -->
	<p>公式サイト限定で、<strong>YouTubeでは公開していない「限定チュートリアル」を用意しています。</strong></p>
	<!-- /wp:paragraph -->
	
	<!-- wp:paragraph -->
	<p>私としては、仕事で使っている重要テクニックが無料で広がって欲しくはないので、有料での限定公開とさせていただきます。</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:paragraph -->
	<p>レベルアップをしたい人だけ、動画をチェックしてください。</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:jinr-blocks/designborder {"borderCustomWidth":"1","displayDeviceAttribute":"jinr-display-sp","displayDeviceSPAttribute":"jinr-display-sp","bottomMarginSpAttribute":"d--bottom-margin-l-sp"} -->
	<div class="wp-block-jinr-blocks-designborder b--jinr-block jinr-sen jinr-display-sp d--bottom-margin-l-sp "><div class="d--sen-style6"><span class="a--sen-parts1" style="height:1px;border-radius:0.5px;background-color:#d0d0d0"></span></div></div>
	<!-- /wp:jinr-blocks/designborder --></div>
	<!-- /wp:column -->
	
	<!-- wp:column {"verticalAlignment":"center","width":"45%"} -->
	<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:45%"><!-- wp:paragraph {"align":"center","bottomMarginPcAttribute":"d--bottom-margin-s-pc"} -->
	<p class="has-text-align-center d--bottom-margin-s-pc "> <i class="jin-icons in--p jin-ifont-backslash" aria-hidden="true"></i> <strong>1,480円ですべて見放題</strong> <i class="jin-icons in--p jin-ifont-slash" aria-hidden="true"></i> </p>
	<!-- /wp:paragraph -->
	
	<!-- wp:jinr-blocks/button {"content":"限定動画をダウンロード ","inputUrl":"' . $homeURL . '","blockID":"89cf5983-c0ad-4fd4-92b3-35e540624a90","className":"wp-block-jinr-blocks-button b--jinr-block b--jinr-button js--scr-animation"} /-->
	</div>
	<!-- /wp:column --></div>
	<!-- /wp:columns -->
	
	<!-- wp:spacer {"height":""} -->
	<div style="height:" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer --></div></div><div class="a--background-color" style="background:linear-gradient(135deg,rgb(58,64,98) 7%,rgb(45,19,83) 100%)"></div><div class="a--background-image t--round d--background-pattern1" style="opacity:0.29999999999999993;background-size:16.666666666666668%"></div></div>
	<!-- /wp:jinr-blocks/background -->
	
	<!-- wp:spacer {"height":"30px"} -->
	<div style="height:30px" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer --></div></section></section>
	<!-- /wp:jinr-blocks/fullwidth -->
	
	<!-- wp:spacer {"height":"40px"} -->
	<div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->
	
	<!-- wp:jinr-blocks/designborder {"borderCustomWidth":"1","borderColorSet":"#5230cc","borderColorSetAdmin":"#5230cc","topMarginPcAttribute":"d--top-margin-l-pc","topMarginSpAttribute":"d--top-margin-l-sp"} -->
	<div class="wp-block-jinr-blocks-designborder b--jinr-block jinr-sen d--top-margin-l-pc d--top-margin-l-sp "><div class="d--sen-style6"><span class="a--sen-parts1" style="height:1px;border-radius:0.5px;background-color:#5230cc"></span></div></div>
	<!-- /wp:jinr-blocks/designborder -->
	
	<!-- wp:jinr-blocks/designtitle {"mainText":"After Effects","subText":"映像アニメーションの基礎講座","divText":"After Effects","radioSymbol":"icon","symbolIcon":"v2movie","mainTextColor":"#29253a","subTextColor":"#29253a","className":"d--maintext-customize","jinrBlocksCSSAttribute":".d--maintext-customize.b--jinr-h2rich.d--h2rich-left .c--h2rich-contents .a--h2rich-maincopy {font-size: 30px;}"} -->
	<div class="jinr-add-class-container"><section class="wp-block-jinr-blocks-designtitle b--jinr-block b--jinr-h2rich d--h2rich-left d--h2rich-style1 d--titledesign-weight-thin d--h2rich-icon d--maintext-customize js--scr-animation" style="border-color:false"><div class="c--h2rich-decoration"><div class="a--h2rich-icon ef" style="color:false"><i class="jin-icons jin-ifont-v2movie"></i></div></div><div class="c--h2rich-contents"><span class="a--h2rich-subcopy ef" style="color:#29253a">映像アニメーションの基礎講座</span><h2 class="a--h2rich-maincopy d--bold ef" style="color:#29253a">After Effects</h2></div></section><style jsx="true">.d--maintext-customize.b--jinr-h2rich.d--h2rich-left .c--h2rich-contents .a--h2rich-maincopy {font-size: 30px;}</style></div>
	<!-- /wp:jinr-blocks/designtitle -->
	
	<!-- wp:paragraph -->
	<p>YouTubeに公開した動画の中でも、特に見てほしいものを厳選しました。<br><span class="jinr-d--text-color d--marker1">「副業で月10万円稼ぐ動画力」をつけたい人は、真っ先に理解してほしい内容となっています。</span></p>
	<!-- /wp:paragraph -->
	
	<!-- wp:jinr-blocks/postlist {"postNum":4,"listDesignSp":"d--postlist-slider-sp d--postlist-slider-loader","columnSelect":"4","displayCategory":"3","moreLink":"' . $homeURL . 'category/feature-2/","clientId":"d254d8a7-54eb-4cb0-bc80-9ae67fd19afe","radioHover":"d--postlist-hover-zoom","displayDeviceAttribute":"on"} /-->
	
	<!-- wp:jinr-blocks/designborder {"borderCustomWidth":"1","borderColorSet":"#5230cc","borderColorSetAdmin":"#5230cc","topMarginPcAttribute":"d--top-margin-l-pc","topMarginSpAttribute":"d--top-margin-l-sp"} -->
	<div class="wp-block-jinr-blocks-designborder b--jinr-block jinr-sen d--top-margin-l-pc d--top-margin-l-sp "><div class="d--sen-style6"><span class="a--sen-parts1" style="height:1px;border-radius:0.5px;background-color:#5230cc"></span></div></div>
	<!-- /wp:jinr-blocks/designborder -->
	
	<!-- wp:jinr-blocks/designtitle {"mainText":"Premiere Pro","subText":"動画編集の基本講座","divText":"Premiere Pro","radioSymbol":"icon","symbolIcon":"v2pc","mainTextColor":"#29253a","subTextColor":"#29253a","className":"d--maintext-customize","jinrBlocksCSSAttribute":".d--maintext-customize.b--jinr-h2rich.d--h2rich-left .c--h2rich-contents .a--h2rich-maincopy {font-size: 30px;}"} -->
	<div class="jinr-add-class-container"><section class="wp-block-jinr-blocks-designtitle b--jinr-block b--jinr-h2rich d--h2rich-left d--h2rich-style1 d--titledesign-weight-thin d--h2rich-icon d--maintext-customize js--scr-animation" style="border-color:false"><div class="c--h2rich-decoration"><div class="a--h2rich-icon ef" style="color:false"><i class="jin-icons jin-ifont-v2pc"></i></div></div><div class="c--h2rich-contents"><span class="a--h2rich-subcopy ef" style="color:#29253a">動画編集の基本講座</span><h2 class="a--h2rich-maincopy d--bold ef" style="color:#29253a">Premiere Pro</h2></div></section><style jsx="true">.d--maintext-customize.b--jinr-h2rich.d--h2rich-left .c--h2rich-contents .a--h2rich-maincopy {font-size: 30px;}</style></div>
	<!-- /wp:jinr-blocks/designtitle -->
	
	<!-- wp:paragraph -->
	<p>YouTuberに関わる案件を受託する上で「Premiere Pro」での編集力は欠かせません。<br><span class="jinr-d--text-color d--marker2">私が普段どうやって動画編集をしているのか、実際に画面をシェアしながら解説をします。</span></p>
	<!-- /wp:paragraph -->
	
	<!-- wp:jinr-blocks/postlist {"postNum":4,"listDesignSp":"d--postlist-slider-sp d--postlist-slider-loader","columnSelect":"4","displayCategory":"3","moreLink":"' . $homeURL . 'category/feature-2/","clientId":"d254d8a7-54eb-4cb0-bc80-9ae67fd19afe","radioHover":"d--postlist-hover-zoom","displayDeviceAttribute":"on"} /-->
	
	<!-- wp:jinr-blocks/fullwidth {"fullWidthBgColor":"#fcfcfc","fullWidthPaddingPc":"d--fullwidth-pad40","fullWidthPaddingSp":"d--fullwidth-pad40-sp","topMarginPcAttribute":"d--top-margin-xl-pc","topMarginSpAttribute":"d--top-margin-l-sp"} -->
	<section class="wp-block-jinr-blocks-fullwidth b--jinr-block b--jinr-fullwidth-container d--top-margin-xl-pc d--top-margin-l-sp "><section class="b--jinr-fullwidth" style="background-color:#fcfcfc"><div class="d--fullwidth-max d--fullwidth-pad40 d--fullwidth-pad40-sp t--main-width" style="color:false"><!-- wp:jinr-blocks/designtitle {"mainText":"ONLINE SALON","subText":"オンラインサロンの案内","divText":"ONLINE SALON","radioLayout":"center","radioSymbol":"icon","symbolIcon":"v2flag","mainTextColor":"#29253a","subTextColor":"#0021dc","className":"d--maintext-customize","jinrBlocksCSSAttribute":".d--maintext-customize.b--jinr-h2rich.d--h2rich-center .c--h2rich-contents .a--h2rich-maincopy {font-size: 30px;}"} -->
	<div class="jinr-add-class-container"><section class="wp-block-jinr-blocks-designtitle b--jinr-block b--jinr-h2rich d--h2rich-center d--h2rich-style1 d--titledesign-weight-thin d--h2rich-icon d--maintext-customize js--scr-animation" style="border-color:false"><div class="c--h2rich-decoration"><div class="a--h2rich-icon ef" style="color:false"><i class="jin-icons jin-ifont-v2flag"></i></div></div><div class="c--h2rich-contents"><span class="a--h2rich-subcopy ef" style="color:#0021dc">オンラインサロンの案内</span><h2 class="a--h2rich-maincopy d--bold ef" style="color:#29253a">ONLINE SALON</h2></div></section><style jsx="true">.d--maintext-customize.b--jinr-h2rich.d--h2rich-center .c--h2rich-contents .a--h2rich-maincopy {font-size: 30px;}</style></div>
	<!-- /wp:jinr-blocks/designtitle -->
	
	<!-- wp:columns -->
	<div class="wp-block-columns js--scr-animation"><!-- wp:column -->
	<div class="wp-block-column"><!-- wp:jinr-blocks/background {"backgroundDesign":"d--background-design-shadow","backgroundBgColor":"#ffffff"} -->
	<div class="wp-block-jinr-blocks-background b--jinr-block b--jinr-background"><div class="o--background-container d--background-design-shadow d--background-shadow-s d--border-outset"><div class="c--background-inner d--border-none d--border-1px t--round" style="border-color:#c5c5c5"><!-- wp:jinr-blocks/designtitle {"mainText":"会員だけの限定動画","subText":"月4本公開","divText":"会員だけの限定動画","radioSymbol":"number","mainTextColor":"#29253a","subTextColor":"#0021dc","symbolColor":"#d4dafe"} -->
	<section class="wp-block-jinr-blocks-designtitle b--jinr-block b--jinr-h2rich d--h2rich-left d--h2rich-style1 d--titledesign-weight-thin d--h2rich-number js--scr-animation" style="border-color:false"><div class="c--h2rich-decoration"><div class="a--h2rich-number ef" style="color:#d4dafe">1</div></div><div class="c--h2rich-contents"><span class="a--h2rich-subcopy ef" style="color:#0021dc">月4本公開</span><h2 class="a--h2rich-maincopy d--bold ef" style="color:#29253a">会員だけの限定動画</h2></div></section>
	<!-- /wp:jinr-blocks/designtitle -->
	
	<!-- wp:paragraph -->
	<p><span class="jinr-d--font-size d--fontsize-15px">DEMOページの架空サービス内容です。実際にはこのようなオンラインサロンは存在しません。</span></p>
	<!-- /wp:paragraph --></div></div><div class="a--background-color" style="background:#ffffff"></div><div class="a--background-image t--round d--background-pattern1" style="opacity:0.29999999999999993;background-size:16.666666666666668%"></div></div>
	<!-- /wp:jinr-blocks/background --></div>
	<!-- /wp:column -->
	
	<!-- wp:column -->
	<div class="wp-block-column"><!-- wp:jinr-blocks/background {"backgroundDesign":"d--background-design-shadow","backgroundBgColor":"#ffffff"} -->
	<div class="wp-block-jinr-blocks-background b--jinr-block b--jinr-background"><div class="o--background-container d--background-design-shadow d--background-shadow-s d--border-outset"><div class="c--background-inner d--border-none d--border-1px t--round" style="border-color:#c5c5c5"><!-- wp:jinr-blocks/designtitle {"mainText":"会員の交流会","subText":"オフ会の参加券","divText":"会員の交流会","radioSymbol":"number","symbolNumber":"2","mainTextColor":"#29253a","subTextColor":"#0021dc","symbolColor":"#d4dafe"} -->
	<section class="wp-block-jinr-blocks-designtitle b--jinr-block b--jinr-h2rich d--h2rich-left d--h2rich-style1 d--titledesign-weight-thin d--h2rich-number js--scr-animation" style="border-color:false"><div class="c--h2rich-decoration"><div class="a--h2rich-number ef" style="color:#d4dafe">2</div></div><div class="c--h2rich-contents"><span class="a--h2rich-subcopy ef" style="color:#0021dc">オフ会の参加券</span><h2 class="a--h2rich-maincopy d--bold ef" style="color:#29253a">会員の交流会</h2></div></section>
	<!-- /wp:jinr-blocks/designtitle -->
	
	<!-- wp:paragraph -->
	<p><span class="jinr-d--font-size d--fontsize-15px">DEMOページの架空サービス内容です。実際にはこのようなオンラインサロンは存在しません。</span></p>
	<!-- /wp:paragraph --></div></div><div class="a--background-color" style="background:#ffffff"></div><div class="a--background-image t--round d--background-pattern1" style="opacity:0.29999999999999993;background-size:16.666666666666668%"></div></div>
	<!-- /wp:jinr-blocks/background --></div>
	<!-- /wp:column -->
	
	<!-- wp:column -->
	<div class="wp-block-column"><!-- wp:jinr-blocks/background {"backgroundDesign":"d--background-design-shadow","backgroundBgColor":"#ffffff"} -->
	<div class="wp-block-jinr-blocks-background b--jinr-block b--jinr-background"><div class="o--background-container d--background-design-shadow d--background-shadow-s d--border-outset"><div class="c--background-inner d--border-none d--border-1px t--round" style="border-color:#c5c5c5"><!-- wp:jinr-blocks/designtitle {"mainText":"先輩に相談できる環境","subText":"フォーラム","divText":"先輩に相談できる環境","radioSymbol":"number","symbolNumber":"3","mainTextColor":"#29253a","subTextColor":"#0021dc","symbolColor":"#d4dafe"} -->
	<section class="wp-block-jinr-blocks-designtitle b--jinr-block b--jinr-h2rich d--h2rich-left d--h2rich-style1 d--titledesign-weight-thin d--h2rich-number js--scr-animation" style="border-color:false"><div class="c--h2rich-decoration"><div class="a--h2rich-number ef" style="color:#d4dafe">3</div></div><div class="c--h2rich-contents"><span class="a--h2rich-subcopy ef" style="color:#0021dc">フォーラム</span><h2 class="a--h2rich-maincopy d--bold ef" style="color:#29253a">先輩に相談できる環境</h2></div></section>
	<!-- /wp:jinr-blocks/designtitle -->
	
	<!-- wp:paragraph -->
	<p><span class="jinr-d--font-size d--fontsize-15px">DEMOページの架空サービス内容です。実際にはこのようなオンラインサロンは存在しません。</span></p>
	<!-- /wp:paragraph --></div></div><div class="a--background-color" style="background:#ffffff"></div><div class="a--background-image t--round d--background-pattern1" style="opacity:0.29999999999999993;background-size:16.666666666666668%"></div></div>
	<!-- /wp:jinr-blocks/background --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns -->
	
	<!-- wp:columns -->
	<div class="wp-block-columns js--scr-animation"><!-- wp:column -->
	<div class="wp-block-column"><!-- wp:jinr-blocks/background {"backgroundDesign":"d--background-design-shadow","backgroundBgColor":"#ffffff"} -->
	<div class="wp-block-jinr-blocks-background b--jinr-block b--jinr-background"><div class="o--background-container d--background-design-shadow d--background-shadow-s d--border-outset"><div class="c--background-inner d--border-none d--border-1px t--round" style="border-color:#c5c5c5"><!-- wp:jinr-blocks/designtitle {"mainText":"会員だけの限定動画","subText":"月4本公開","divText":"会員だけの限定動画","radioSymbol":"number","symbolNumber":"4","mainTextColor":"#29253a","subTextColor":"#0021dc","symbolColor":"#d4dafe"} -->
	<section class="wp-block-jinr-blocks-designtitle b--jinr-block b--jinr-h2rich d--h2rich-left d--h2rich-style1 d--titledesign-weight-thin d--h2rich-number js--scr-animation" style="border-color:false"><div class="c--h2rich-decoration"><div class="a--h2rich-number ef" style="color:#d4dafe">4</div></div><div class="c--h2rich-contents"><span class="a--h2rich-subcopy ef" style="color:#0021dc">月4本公開</span><h2 class="a--h2rich-maincopy d--bold ef" style="color:#29253a">会員だけの限定動画</h2></div></section>
	<!-- /wp:jinr-blocks/designtitle -->
	
	<!-- wp:paragraph -->
	<p><span class="jinr-d--font-size d--fontsize-15px">DEMOページの架空サービス内容です。実際にはこのようなオンラインサロンは存在しません。</span></p>
	<!-- /wp:paragraph --></div></div><div class="a--background-color" style="background:#ffffff"></div><div class="a--background-image t--round d--background-pattern1" style="opacity:0.29999999999999993;background-size:16.666666666666668%"></div></div>
	<!-- /wp:jinr-blocks/background --></div>
	<!-- /wp:column -->
	
	<!-- wp:column -->
	<div class="wp-block-column"><!-- wp:jinr-blocks/background {"backgroundDesign":"d--background-design-shadow","backgroundBgColor":"#ffffff"} -->
	<div class="wp-block-jinr-blocks-background b--jinr-block b--jinr-background"><div class="o--background-container d--background-design-shadow d--background-shadow-s d--border-outset"><div class="c--background-inner d--border-none d--border-1px t--round" style="border-color:#c5c5c5"><!-- wp:jinr-blocks/designtitle {"mainText":"会員の交流会","subText":"オフ会の参加券","divText":"会員の交流会","radioSymbol":"number","symbolNumber":"5","mainTextColor":"#29253a","subTextColor":"#0021dc","symbolColor":"#d4dafe"} -->
	<section class="wp-block-jinr-blocks-designtitle b--jinr-block b--jinr-h2rich d--h2rich-left d--h2rich-style1 d--titledesign-weight-thin d--h2rich-number js--scr-animation" style="border-color:false"><div class="c--h2rich-decoration"><div class="a--h2rich-number ef" style="color:#d4dafe">5</div></div><div class="c--h2rich-contents"><span class="a--h2rich-subcopy ef" style="color:#0021dc">オフ会の参加券</span><h2 class="a--h2rich-maincopy d--bold ef" style="color:#29253a">会員の交流会</h2></div></section>
	<!-- /wp:jinr-blocks/designtitle -->
	
	<!-- wp:paragraph -->
	<p><span class="jinr-d--font-size d--fontsize-15px">DEMOページの架空サービス内容です。実際にはこのようなオンラインサロンは存在しません。</span></p>
	<!-- /wp:paragraph --></div></div><div class="a--background-color" style="background:#ffffff"></div><div class="a--background-image t--round d--background-pattern1" style="opacity:0.29999999999999993;background-size:16.666666666666668%"></div></div>
	<!-- /wp:jinr-blocks/background --></div>
	<!-- /wp:column -->
	
	<!-- wp:column -->
	<div class="wp-block-column"><!-- wp:jinr-blocks/background {"backgroundDesign":"d--background-design-shadow","backgroundBgColor":"#ffffff"} -->
	<div class="wp-block-jinr-blocks-background b--jinr-block b--jinr-background"><div class="o--background-container d--background-design-shadow d--background-shadow-s d--border-outset"><div class="c--background-inner d--border-none d--border-1px t--round" style="border-color:#c5c5c5"><!-- wp:jinr-blocks/designtitle {"mainText":"さあ、始めよう","subText":"Let\'s Start","divText":"さあ、始めよう","radioSymbol":"number","symbolNumber":"6","mainTextColor":"#29253a","subTextColor":"#0021dc","symbolColor":"#d4dafe"} -->
	<section class="wp-block-jinr-blocks-designtitle b--jinr-block b--jinr-h2rich d--h2rich-left d--h2rich-style1 d--titledesign-weight-thin d--h2rich-number js--scr-animation" style="border-color:false"><div class="c--h2rich-decoration"><div class="a--h2rich-number ef" style="color:#d4dafe">6</div></div><div class="c--h2rich-contents"><span class="a--h2rich-subcopy ef" style="color:#0021dc">Let\'s Start</span><h2 class="a--h2rich-maincopy d--bold ef" style="color:#29253a">さあ、始めよう</h2></div></section>
	<!-- /wp:jinr-blocks/designtitle -->
	
	<!-- wp:paragraph -->
	<p><span class="jinr-d--font-size d--fontsize-15px">DEMOページの架空サービス内容です。実際にはこのようなオンラインサロンは存在しません。</span></p>
	<!-- /wp:paragraph --></div></div><div class="a--background-color" style="background:#ffffff"></div><div class="a--background-image t--round d--background-pattern1" style="opacity:0.29999999999999993;background-size:16.666666666666668%"></div></div>
	<!-- /wp:jinr-blocks/background --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns -->
	
	<!-- wp:columns -->
	<div class="wp-block-columns js--scr-animation"><!-- wp:column -->
	<div class="wp-block-column"><!-- wp:jinr-blocks/background {"backgroundDesign":"d--background-design-shadow","backgroundBgColor":"#ffffff"} -->
	<div class="wp-block-jinr-blocks-background b--jinr-block b--jinr-background"><div class="o--background-container d--background-design-shadow d--background-shadow-s d--border-outset"><div class="c--background-inner d--border-none d--border-1px t--round" style="border-color:#c5c5c5"><!-- wp:spacer {"height":"5px"} -->
	<div style="height:5px" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->
	
	<!-- wp:jinr-blocks/designtitle {"mainText":"ABOUT","subText":"詳しい募集要項","divText":"ABOUT","radioLayout":"center","mainTextColor":"#29253a","subTextColor":"#29253a","className":"d--maintext-customize","jinrBlocksCSSAttribute":".wp-block-column .d--maintext-customize.b--jinr-h2rich.d--h2rich-center .c--h2rich-contents .a--h2rich-maincopy {font-size: 30px;}"} -->
	<div class="jinr-add-class-container"><section class="wp-block-jinr-blocks-designtitle b--jinr-block b--jinr-h2rich d--h2rich-center d--h2rich-style1 d--titledesign-weight-thin d--h2rich-none d--maintext-customize js--scr-animation" style="border-color:false"><div class="c--h2rich-contents"><span class="a--h2rich-subcopy ef" style="color:#29253a">詳しい募集要項</span><h2 class="a--h2rich-maincopy d--bold ef" style="color:#29253a">ABOUT</h2></div></section><style jsx="true">.wp-block-column .d--maintext-customize.b--jinr-h2rich.d--h2rich-center .c--h2rich-contents .a--h2rich-maincopy {font-size: 30px;}</style></div>
	<!-- /wp:jinr-blocks/designtitle -->
	
	<!-- wp:jinr-blocks/button {"content":"募集ページを読む","inputUrl":"' . $homeURL . '","buttonDesign":"outline","registeredButton":"4","blockID":"dc6021b7-ed10-4411-9534-2c95ab92297f","className":"wp-block-jinr-blocks-button b--jinr-block b--jinr-button js--scr-animation"} /-->
	
	<!-- wp:spacer {"height":"5px"} -->
	<div style="height:5px" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer --></div></div><div class="a--background-color" style="background:#ffffff"></div><div class="a--background-image t--round d--background-pattern1" style="opacity:0.29999999999999993;background-size:16.666666666666668%"></div></div>
	<!-- /wp:jinr-blocks/background --></div>
	<!-- /wp:column -->
	
	<!-- wp:column -->
	<div class="wp-block-column"><!-- wp:jinr-blocks/background {"backgroundDesign":"d--background-design-shadow","backgroundBgColor":"#222222"} -->
	<div class="wp-block-jinr-blocks-background b--jinr-block b--jinr-background"><div class="o--background-container d--background-design-shadow d--background-shadow-s d--border-outset"><div class="c--background-inner d--border-none d--border-1px t--round" style="border-color:#c5c5c5"><!-- wp:spacer {"height":"5px"} -->
	<div style="height:5px" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->
	
	<!-- wp:jinr-blocks/designtitle {"mainText":"JOIN NOW","subText":"オンラインサロン参加","divText":"JOIN NOW","radioLayout":"center","mainTextColor":"#ffffff","subTextColor":"#ffffff","className":"d--maintext-customize"} -->
	<section class="wp-block-jinr-blocks-designtitle b--jinr-block b--jinr-h2rich d--h2rich-center d--h2rich-style1 d--titledesign-weight-thin d--h2rich-none d--maintext-customize js--scr-animation" style="border-color:false"><div class="c--h2rich-contents"><span class="a--h2rich-subcopy ef" style="color:#ffffff">オンラインサロン参加</span><h2 class="a--h2rich-maincopy d--bold ef" style="color:#ffffff">JOIN NOW</h2></div></section>
	<!-- /wp:jinr-blocks/designtitle -->
	
	<!-- wp:jinr-blocks/button {"content":"今すぐ参加する ！","inputUrl":"' . $homeURL . '","blockID":"964b2fed-3228-4b95-83d8-5dc14a441b4d","className":"wp-block-jinr-blocks-button b--jinr-block b--jinr-button js--scr-animation"} /-->
	
	<!-- wp:spacer {"height":"5px"} -->
	<div style="height:5px" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer --></div></div><div class="a--background-color" style="background:#222222"></div><div class="a--background-image t--round d--background-pattern1" style="opacity:0.29999999999999993;background-size:16.666666666666668%"></div></div>
	<!-- /wp:jinr-blocks/background --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns --></div></section></section>
	<!-- /wp:jinr-blocks/fullwidth -->';

	if ($frontpageslug == 'demo-12') {
		$pageupdatearry = array(
			'ID'            => $frontpageID,
		);
		wp_update_post($pageupdatearry);
		update_option('show_on_front', 'page');
		update_option('page_on_front', $frontpageID);
	} else {
		// 新規作成する場合
		$pagepresetarry = array(
			'post_title'    => 'デモプリセット記事 Part12',
			'post_content'  => $presetContents,
			'post_name'     => 'demo-12',
			'post_status'   => 'publish',
			'post_type'     => 'page',
			'page_template' => 'template-full-width.php',
		);
		$presetId = wp_insert_post($pagepresetarry);
		if ($presetId != 0) {
			update_post_meta($presetId, '_jinr_noindex_display', 1);
		};
		update_option('show_on_front', 'page');
		update_option('page_on_front', $presetId);
	}
	$query['autofocus[section]'] = 'jinr__design_preset_section';
	$presetsection = add_query_arg($query, admin_url('customize.php'));
	wp_redirect($presetsection);
	exit;
}
function jinr_preset_demo13()
{
	$preset_num = '13';
	update_option('preset_data', 13);
	jinr_export_json_exclude($preset_num);
	$homeURL = esc_url(home_url('/'));


	// 任意の記事を作成する
	$frontpageID    = get_option('page_on_front');
	$frontpageslug  = get_post_field('post_name', $frontpageID);
	$presetContents = '<!-- wp:spacer {"height":"40px"} -->
	<div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->
	
	<!-- wp:jinr-blocks/designtitle {"mainText":"JINNO COFFEE","subText":"当店について","divText":"JINNO COFFEE","mainTextColor":"#473822","subTextColor":"#473822","className":"d--maintext-customize d--submaintext-customize","jinrBlocksCSSAttribute":".d--maintext-customize.b--jinr-h2rich.d--h2rich-left .c--h2rich-contents .a--h2rich-maincopy {font-size: 30px;}.d--submaintext-customize.b--jinr-h2rich .c--h2rich-contents .a--h2rich-subcopy {font-size: 18px;}"} -->
	<div class="jinr-add-class-container"><section class="wp-block-jinr-blocks-designtitle b--jinr-block b--jinr-h2rich d--h2rich-left d--h2rich-style1 d--titledesign-weight-thin d--h2rich-none d--maintext-customize d--submaintext-customize js--scr-animation" style="border-color:false"><div class="c--h2rich-contents"><span class="a--h2rich-subcopy ef" style="color:#473822">当店について</span><h2 class="a--h2rich-maincopy d--bold ef" style="color:#473822">JINNO COFFEE</h2></div></section><style jsx="true">.d--maintext-customize.b--jinr-h2rich.d--h2rich-left .c--h2rich-contents .a--h2rich-maincopy {font-size: 30px;}.d--submaintext-customize.b--jinr-h2rich .c--h2rich-contents .a--h2rich-subcopy {font-size: 18px;}</style></div>
	<!-- /wp:jinr-blocks/designtitle -->
	
	<!-- wp:paragraph -->
	<p>JINNO COFFEEは、神戸三宮にある自家焙煎のスペシャルティーコーヒー専門店です。</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:columns {"className":"js--scr-animation"} -->
	<div class="wp-block-columns js--scr-animation js--scr-animation"><!-- wp:column {"width":"40%"} -->
	<div class="wp-block-column" style="flex-basis:40%"><!-- wp:cover {"url":"https://jinr-demo.jp/demo-19/wp-content/themes/jinr/lib/img/noimage-640x360.png","id":2031,"dimRatio":0,"focalPoint":{"x":"0.44","y":"0.54"},"minHeight":546,"minHeightUnit":"px","isDark":false,"style":{"color":{}}} -->
	<div class="wp-block-cover is-light" style="min-height:546px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-2031" alt="" src="https://jinr-demo.jp/demo-19/wp-content/themes/jinr/lib/img/noimage-640x360.png" style="object-position:44% 54%" data-object-fit="cover" data-object-position="44% 54%"/><div class="wp-block-cover__inner-container"><!-- wp:paragraph {"align":"center","fontSize":"large"} -->
	<p class="has-text-align-center has-large-font-size"></p>
	<!-- /wp:paragraph --></div></div>
	<!-- /wp:cover --></div>
	<!-- /wp:column -->
	
	<!-- wp:column {"width":"60%"} -->
	<div class="wp-block-column" style="flex-basis:60%"><!-- wp:jinr-blocks/background {"backgroundBgColor":"#fef8ef","backgroundPattern":"d--background-pattern-original","backgroundOpacity":12,"imageID":1624,"imageUrl":"https://jinr-demo.jp/demo-19/wp-content/uploads/2022/08/名称未設定のアートワーク-8.png"} -->
	<div class="wp-block-jinr-blocks-background b--jinr-block b--jinr-background"><div class="o--background-container d--background-design-flat d--background-shadow-s d--border-outset"><div class="c--background-inner d--border-none d--border-1px t--round" style="border-color:#c5c5c5"><!-- wp:jinr-blocks/designtitle {"mainText":"お知らせ","subText":"Infomation","divText":"お知らせ","titleDesign":"2","radioLayout":"center","mainTextColor":"#473822","subTextColor":"#473822","titleDesignColor":"#cec6b1"} -->
	<section class="wp-block-jinr-blocks-designtitle b--jinr-block b--jinr-h2rich d--h2rich-center d--h2rich-style2 d--titledesign-weight-thin d--h2rich-none js--scr-animation" style="border-color:#cec6b1"><div class="c--h2rich-contents"><span class="a--h2rich-subcopy ef" style="color:#473822">Infomation</span><h2 class="a--h2rich-maincopy d--bold ef" style="color:#473822">お知らせ</h2></div></section>
	<!-- /wp:jinr-blocks/designtitle -->
	
	<!-- wp:jinr-blocks/postlist {"listDesign":"d--postlist-newstext","listDesignSp":"d--postlist-newstext-sp","moreLink":"https://jinr-demo.jp/demo-19/category/blocks/","clientId":"e0d570f2-d58d-417a-9621-9a82b2d9bc40","radioHover":"d--postlist-hover-hovercolor"} /-->
	
	<!-- wp:jinr-blocks/button {"content":" Instagram ","inputUrl":"' . $homeURL . '","buttonDesign":"outline","registeredButton":"4","blockID":"542344e6-2952-43f4-89fa-c1f3ce3afe5e","className":"wp-block-jinr-blocks-button b--jinr-block b--jinr-button js--scr-animation"} /--></div></div><div class="a--background-color" style="background:#fef8ef"></div><div class="a--background-image d--background-pattern-original t--round d--background-repeat-on" style="opacity:0.88;background-image:url(https://jinr-demo.jp/demo-19/wp-content/uploads/2022/08/名称未設定のアートワーク-8.png);background-size:50%"></div></div>
	<!-- /wp:jinr-blocks/background --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns -->
	
	<!-- wp:spacer {"height":"60px"} -->
	<div style="height:60px" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->
	
	<!-- wp:jinr-blocks/fullwidth {"fullWidthBgColor":"#faf6f3","fullWidthPaddingPc":"d--fullwidth-pad30"} -->
	<section class="wp-block-jinr-blocks-fullwidth b--jinr-block b--jinr-fullwidth-container"><section class="b--jinr-fullwidth" style="background-color:#faf6f3"><div class="d--fullwidth-max d--fullwidth-pad30 d--fullwidth-pad0-sp t--main-width" style="color:false"><!-- wp:spacer {"height":"40px"} -->
	<div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->
	
	<!-- wp:media-text {"mediaPosition":"right","mediaId":2031,"mediaLink":"https://jinr-demo.jp/demo-19/?attachment_id=2031","mediaType":"image","imageFill":true} -->
	<div class="wp-block-media-text alignwide has-media-on-the-right is-stacked-on-mobile is-image-fill"><div class="wp-block-media-text__content"><!-- wp:jinr-blocks/designtitle {"mainText":"焙煎へのこだわり","subText":"おいしいコーヒーに出逢ってから","divText":"焙煎へのこだわり","mainTextColor":"#473822","subTextColor":"#473822","titleDesignColor":"#473822","symbolColor":"#473822"} -->
	<section class="wp-block-jinr-blocks-designtitle b--jinr-block b--jinr-h2rich d--h2rich-left d--h2rich-style1 d--titledesign-weight-thin d--h2rich-none js--scr-animation" style="border-color:#473822"><div class="c--h2rich-contents"><span class="a--h2rich-subcopy ef" style="color:#473822">おいしいコーヒーに出逢ってから</span><h2 class="a--h2rich-maincopy d--bold ef" style="color:#473822">焙煎へのこだわり</h2></div></section>
	<!-- /wp:jinr-blocks/designtitle -->
	
	<!-- wp:paragraph -->
	<p>私はもともとコーヒーがそこまで好きな人間ではありませんでした。学生の時に飲んだ缶コーヒーの印象が強烈で、ただのカフェイン入りの苦汁だとばかり思っていました。</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:paragraph -->
	<p>２０歳のとき、たまたま浅煎りコーヒーをやっている焙煎カフェに立ち寄ったことがきっかけで、コーヒーに対する概念が一変しました。</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:paragraph -->
	<p>こんなおいしいコーヒーがあるのか、自分も作ってみたいなぁ。そう思ったきっかけが始まりで、今の焙煎カフェの経営につながっています。</p>
	<!-- /wp:paragraph --></div><figure class="wp-block-media-text__media" style="background-image:url(https://jinr-demo.jp/demo-19/wp-content/themes/jinr/lib/img/noimage-640x360.png);background-position:50% 50%"><img src="https://jinr-demo.jp/demo-19/wp-content/themes/jinr/lib/img/noimage-640x360.png" alt="" class="wp-image-2031 size-full"/></figure></div>
	<!-- /wp:media-text -->
	
	<!-- wp:media-text {"mediaId":2031,"mediaLink":"https://jinr-demo.jp/demo-19/?attachment_id=2031","mediaType":"image","imageFill":true} -->
	<div class="wp-block-media-text alignwide is-stacked-on-mobile is-image-fill"><figure class="wp-block-media-text__media" style="background-image:url(https://jinr-demo.jp/demo-19/wp-content/themes/jinr/lib/img/noimage-640x360.png);background-position:50% 50%"><img src="https://jinr-demo.jp/demo-19/wp-content/themes/jinr/lib/img/noimage-640x360.png" alt="" class="wp-image-2031 size-full"/></figure><div class="wp-block-media-text__content"><!-- wp:jinr-blocks/designtitle {"mainText":"豆へのこだわり","subText":"安心できるおいしさを","divText":"豆へのこだわり","mainTextColor":"#473822","subTextColor":"#473822","titleDesignColor":"#473822"} -->
	<section class="wp-block-jinr-blocks-designtitle b--jinr-block b--jinr-h2rich d--h2rich-left d--h2rich-style1 d--titledesign-weight-thin d--h2rich-none js--scr-animation" style="border-color:#473822"><div class="c--h2rich-contents"><span class="a--h2rich-subcopy ef" style="color:#473822">安心できるおいしさを</span><h2 class="a--h2rich-maincopy d--bold ef" style="color:#473822">豆へのこだわり</h2></div></section>
	<!-- /wp:jinr-blocks/designtitle -->
	
	<!-- wp:paragraph -->
	<p>私もコーヒー豆を自分で仕入れるようになってから知ったのですが、農薬問題はきっても切れない関係にあります。</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:paragraph -->
	<p>食害を防ぐための殺虫剤、雑草を抑制するための除草剤といった薬剤を駆使して、コーヒー農家は収量を安定化させているのです。</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:paragraph -->
	<p>しかし個人的には、有機栽培や無農薬栽培で作られた豆の方が、体への負担のなさを感じます。やはりそういった農薬を使っていない昔ながらの方法で栽培されている農家を厳選して、焙煎をするようにしています。</p>
	<!-- /wp:paragraph --></div></div>
	<!-- /wp:media-text -->
	
	<!-- wp:spacer {"height":"40px"} -->
	<div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer --></div></section></section>
	<!-- /wp:jinr-blocks/fullwidth -->
	
	<!-- wp:spacer {"height":"70px"} -->
	<div style="height:70px" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->
	
	<!-- wp:jinr-blocks/background {"backgroundBgColor":"#fcfcfc"} -->
	<div class="wp-block-jinr-blocks-background b--jinr-block b--jinr-background"><div class="o--background-container d--background-design-flat d--background-shadow-s d--border-outset"><div class="c--background-inner d--border-none d--border-1px t--round" style="border-color:#c5c5c5"><!-- wp:jinr-blocks/designtitle {"mainText":"COFFEE LIST","subText":"焙煎コーヒー豆","divText":"COFFEE LIST","titleDesign":"2"} -->
	<section class="wp-block-jinr-blocks-designtitle b--jinr-block b--jinr-h2rich d--h2rich-left d--h2rich-style2 d--titledesign-weight-thin d--h2rich-none js--scr-animation" style="border-color:false"><div class="c--h2rich-contents"><span class="a--h2rich-subcopy ef" style="color:false">焙煎コーヒー豆</span><h2 class="a--h2rich-maincopy d--bold ef" style="color:false">COFFEE LIST</h2></div></section>
	<!-- /wp:jinr-blocks/designtitle -->
	
	<!-- wp:paragraph -->
	<p>焙煎の側でカフェをやっております。席数は６席と手狭ではありますが、ゆっくりとお寛ぎください。</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:jinr-blocks/richmenu {"columnSelect":"3","itemRatio":"1-1","pageTemplate":"template-full-width.php"} -->
	<section class="wp-block-jinr-blocks-richmenu b--jinr-block b--jinr-richmenu d--richmenu-column-2-sp d--richmenu-column3 d--richmenu-ratio1-1 d--richmenu-simple d--richmenu-text-medium d--richmenu-text-style5 d--richmenu-animation-fadebyone js--scr-animation d--richmenu-hover-up"><!-- wp:jinr-blocks/richmenuchild {"text":"グアテマラ","subText":"深煎り / 100g / 770円","link":"' . $homeURL . '","mediaId":2031,"mediaUrl":"https://jinr-demo.jp/demo-19/wp-content/themes/jinr/lib/img/noimage-640x360.png","thumbnailUrl":"https://jinr-demo.jp/demo-19/wp-content/themes/jinr/lib/img/noimage-640x360.png","thumbnailSizes":"(max-width:552px) 40vw,50vw","columnSelect":"3","itemRatio":"1-1","itemText":"on","textDesign":"5","textColor":"#473822","textBgColor":"rgba(255,255,255,0.51)","filterOpacity":75,"filterDisplay":"off","filterColor":"#ffffff","pageTemplate":"template-full-width.php"} -->
	<a class="wp-block-jinr-blocks-richmenuchild o--richmenu-item" href="' . $homeURL . '"><div class="o--richmenu-item-inner"><div class="a--richmenu-image"><img src="https://jinr-demo.jp/demo-19/wp-content/themes/jinr/lib/img/noimage-640x360.png" width="350" height="350" alt="" srcset="" sizes="(max-width:552px) 40vw,50vw"/></div><div class="c--richmenu-contents ef" style="color:#473822"><div class="a--richmenu-subtext">深煎り / 100g / 770円</div><div class="a--richmenu-text d--bold">グアテマラ</div></div></div></a>
	<!-- /wp:jinr-blocks/richmenuchild -->
	
	<!-- wp:jinr-blocks/richmenuchild {"text":"コロンビア","subText":"深煎り / 100g / 880円","link":"' . $homeURL . '","mediaId":2031,"mediaUrl":"https://jinr-demo.jp/demo-19/wp-content/themes/jinr/lib/img/noimage-640x360.png","thumbnailUrl":"https://jinr-demo.jp/demo-19/wp-content/themes/jinr/lib/img/noimage-640x360.png","thumbnailSizes":"(max-width:552px) 40vw,50vw","columnSelect":"3","itemRatio":"1-1","itemText":"on","textDesign":"5","textColor":"#473822","textBgColor":"rgba(255,255,255,0.51)","filterOpacity":75,"filterDisplay":"off","filterColor":"#ffffff","pageTemplate":"template-full-width.php"} -->
	<a class="wp-block-jinr-blocks-richmenuchild o--richmenu-item" href="' . $homeURL . '"><div class="o--richmenu-item-inner"><div class="a--richmenu-image"><img src="https://jinr-demo.jp/demo-19/wp-content/themes/jinr/lib/img/noimage-640x360.png" width="350" height="350" alt="" srcset="" sizes="(max-width:552px) 40vw,50vw"/></div><div class="c--richmenu-contents ef" style="color:#473822"><div class="a--richmenu-subtext">深煎り / 100g / 880円</div><div class="a--richmenu-text d--bold">コロンビア</div></div></div></a>
	<!-- /wp:jinr-blocks/richmenuchild -->
	
	<!-- wp:jinr-blocks/richmenuchild {"text":"ケニア","subText":"浅煎り / 100g / 660円","link":"' . $homeURL . '","mediaId":2031,"mediaUrl":"https://jinr-demo.jp/demo-19/wp-content/themes/jinr/lib/img/noimage-640x360.png","thumbnailUrl":"https://jinr-demo.jp/demo-19/wp-content/themes/jinr/lib/img/noimage-640x360.png","thumbnailSizes":"(max-width:552px) 40vw,50vw","columnSelect":"3","itemRatio":"1-1","itemText":"on","textDesign":"5","textColor":"#473822","textBgColor":"rgba(255,255,255,0.51)","filterOpacity":75,"filterDisplay":"off","filterColor":"#ffffff","pageTemplate":"template-full-width.php"} -->
	<a class="wp-block-jinr-blocks-richmenuchild o--richmenu-item" href="' . $homeURL . '"><div class="o--richmenu-item-inner"><div class="a--richmenu-image"><img src="https://jinr-demo.jp/demo-19/wp-content/themes/jinr/lib/img/noimage-640x360.png" width="350" height="350" alt="" srcset="" sizes="(max-width:552px) 40vw,50vw"/></div><div class="c--richmenu-contents ef" style="color:#473822"><div class="a--richmenu-subtext">浅煎り / 100g / 660円</div><div class="a--richmenu-text d--bold">ケニア</div></div></div></a>
	<!-- /wp:jinr-blocks/richmenuchild --></section>
	<!-- /wp:jinr-blocks/richmenu -->
	
	<!-- wp:paragraph {"style":{"color":{"text":"#686868"}}} -->
	<p class="has-text-color" style="color:#686868"><span class="jinr-d--font-size d--fontsize-13px">日によって品揃えは異なります。価格はすべて税込表示です。</span></p>
	<!-- /wp:paragraph --></div></div><div class="a--background-color" style="background:#fcfcfc"></div><div class="a--background-image t--round d--background-pattern1" style="opacity:0.29999999999999993;background-size:16.666666666666668%"></div></div>
	<!-- /wp:jinr-blocks/background -->
	
	<!-- wp:jinr-blocks/background {"backgroundBgColor":"#fcfcfc"} -->
	<div class="wp-block-jinr-blocks-background b--jinr-block b--jinr-background"><div class="o--background-container d--background-design-flat d--background-shadow-s d--border-outset"><div class="c--background-inner d--border-none d--border-1px t--round" style="border-color:#c5c5c5"><!-- wp:jinr-blocks/designtitle {"mainText":"CAFE MENU","subText":"メニュー（10:00 〜 17:30）","divText":"CAFE MENU","titleDesign":"2","mainTextColor":"#473822","subTextColor":"#473822","titleDesignColor":"#473822"} -->
	<section class="wp-block-jinr-blocks-designtitle b--jinr-block b--jinr-h2rich d--h2rich-left d--h2rich-style2 d--titledesign-weight-thin d--h2rich-none js--scr-animation" style="border-color:#473822"><div class="c--h2rich-contents"><span class="a--h2rich-subcopy ef" style="color:#473822">メニュー（10:00 〜 17:30）</span><h2 class="a--h2rich-maincopy d--bold ef" style="color:#473822">CAFE MENU</h2></div></section>
	<!-- /wp:jinr-blocks/designtitle -->
	
	<!-- wp:paragraph -->
	<p>焙煎の側でカフェをやっております。席数は６席と手狭ではありますが、ゆっくりとお寛ぎください。</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:columns -->
	<div class="wp-block-columns js--scr-animation"><!-- wp:column -->
	<div class="wp-block-column"><!-- wp:media-text {"mediaId":2031,"mediaLink":"https://jinr-demo.jp/demo-19/?attachment_id=2031","mediaType":"image","mediaWidth":28} -->
	<div class="wp-block-media-text alignwide is-stacked-on-mobile" style="grid-template-columns:28% auto"><figure class="wp-block-media-text__media"><img src="https://jinr-demo.jp/demo-19/wp-content/themes/jinr/lib/img/noimage-640x360.png" alt="" class="wp-image-2031 size-full"/></figure><div class="wp-block-media-text__content"><!-- wp:paragraph {"placeholder":"コンテンツ…"} -->
	<p><strong>ブレンドコーヒー　… 770円</strong><br>当店自慢のブレンドをお届けします。初めてご訪問いただいた際にはぜひご注文いただきたい一品です。</p>
	<!-- /wp:paragraph --></div></div>
	<!-- /wp:media-text -->
	
	<!-- wp:media-text {"mediaId":2031,"mediaLink":"https://jinr-demo.jp/demo-19/?attachment_id=2031","mediaType":"image","mediaWidth":28} -->
	<div class="wp-block-media-text alignwide is-stacked-on-mobile" style="grid-template-columns:28% auto"><figure class="wp-block-media-text__media"><img src="https://jinr-demo.jp/demo-19/wp-content/themes/jinr/lib/img/noimage-640x360.png" alt="" class="wp-image-2031 size-full"/></figure><div class="wp-block-media-text__content"><!-- wp:paragraph {"placeholder":"コンテンツ…"} -->
	<p><strong>カフェラテ　… 660円</strong><br><span class="jinr-d--font-size d--fontsize-15px">ケニア・タンザニア・グアテマラといった豆をシングルでトリップいたします。煎り度合いの好みに合わせやすいです。</span></p>
	<!-- /wp:paragraph --></div></div>
	<!-- /wp:media-text -->
	
	<!-- wp:media-text {"mediaId":2031,"mediaLink":"https://jinr-demo.jp/demo-19/?attachment_id=2031","mediaType":"image","mediaWidth":28} -->
	<div class="wp-block-media-text alignwide is-stacked-on-mobile" style="grid-template-columns:28% auto"><figure class="wp-block-media-text__media"><img src="https://jinr-demo.jp/demo-19/wp-content/themes/jinr/lib/img/noimage-640x360.png" alt="" class="wp-image-2031 size-full"/></figure><div class="wp-block-media-text__content"><!-- wp:paragraph {"placeholder":"コンテンツ…"} -->
	<p><strong>水出しコーヒー　… 880円</strong><br><span class="jinr-d--font-size d--fontsize-15px">10時間かけてゆっくりと水出ししたコーヒーをご提供します。夏季限定（6 - 9月）の商品となります。</span></p>
	<!-- /wp:paragraph --></div></div>
	<!-- /wp:media-text --></div>
	<!-- /wp:column -->
	
	<!-- wp:column -->
	<div class="wp-block-column"><!-- wp:media-text {"mediaId":2031,"mediaLink":"https://jinr-demo.jp/demo-19/?attachment_id=2031","mediaType":"image","mediaWidth":28} -->
	<div class="wp-block-media-text alignwide is-stacked-on-mobile" style="grid-template-columns:28% auto"><figure class="wp-block-media-text__media"><img src="https://jinr-demo.jp/demo-19/wp-content/themes/jinr/lib/img/noimage-640x360.png" alt="" class="wp-image-2031 size-full"/></figure><div class="wp-block-media-text__content"><!-- wp:paragraph {"placeholder":"コンテンツ…"} -->
	<p><strong>放牧チーズケーキ　… 770円</strong><br><span class="jinr-d--font-size d--fontsize-15px">岡山県にある「なかたに牧場」で放牧されている健康なジャージー牛の牛乳・チーズを使って作る甘酸っぱいチーズケーキ</span></p>
	<!-- /wp:paragraph --></div></div>
	<!-- /wp:media-text -->
	
	<!-- wp:media-text {"mediaId":2031,"mediaLink":"https://jinr-demo.jp/demo-19/?attachment_id=2031","mediaType":"image","mediaWidth":28} -->
	<div class="wp-block-media-text alignwide is-stacked-on-mobile" style="grid-template-columns:28% auto"><figure class="wp-block-media-text__media"><img src="https://jinr-demo.jp/demo-19/wp-content/themes/jinr/lib/img/noimage-640x360.png" alt="" class="wp-image-2031 size-full"/></figure><div class="wp-block-media-text__content"><!-- wp:paragraph {"placeholder":"コンテンツ…"} -->
	<p><strong>しっとりブラウニー　… 770円</strong><br><span class="jinr-d--font-size d--fontsize-15px">焼きたてだからこそのしっとりとしたブラウニー、深煎りコーヒーとの相性が抜群です。</span></p>
	<!-- /wp:paragraph --></div></div>
	<!-- /wp:media-text -->
	
	<!-- wp:media-text {"mediaId":2031,"mediaLink":"https://jinr-demo.jp/demo-19/?attachment_id=2031","mediaType":"image","mediaWidth":28} -->
	<div class="wp-block-media-text alignwide is-stacked-on-mobile" style="grid-template-columns:28% auto"><figure class="wp-block-media-text__media"><img src="https://jinr-demo.jp/demo-19/wp-content/themes/jinr/lib/img/noimage-640x360.png" alt="" class="wp-image-2031 size-full"/></figure><div class="wp-block-media-text__content"><!-- wp:paragraph {"placeholder":"コンテンツ…"} -->
	<p><strong>生ハムのホットサンド　… 770円</strong><br><span class="jinr-d--font-size d--fontsize-15px">こだわりの生ハムと季節野菜で仕上げるホットサンド。注文から作り始めるので10分ほどお時間いただきます</span>。</p>
	<!-- /wp:paragraph --></div></div>
	<!-- /wp:media-text --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns -->
	
	<!-- wp:paragraph {"style":{"color":{"text":"#686868"}}} -->
	<p class="has-text-color" style="color:#686868"><span class="jinr-d--font-size d--fontsize-13px">日によって品揃えは異なります。価格はすべて税込表示です。</span></p>
	<!-- /wp:paragraph --></div></div><div class="a--background-color" style="background:#fcfcfc"></div><div class="a--background-image t--round d--background-pattern1" style="opacity:0.29999999999999993;background-size:16.666666666666668%"></div></div>
	<!-- /wp:jinr-blocks/background -->
	
	<!-- wp:jinr-blocks/fullwidth {"fullWidthBgColor":"#473822","fullWidthTextColor":"#ffffff","fullWidthBgColorTransparent":55,"fullWidthBlurlebel":1,"fullWidthPaddingPc":"d--fullwidth-pad40","fullWidthPaddingSp":"d--fullwidth-pad40-sp","topMarginPcAttribute":"d--top-margin-xl-pc","topMarginSpAttribute":"d--top-margin-xl-sp"} -->
	<section class="wp-block-jinr-blocks-fullwidth b--jinr-block b--jinr-fullwidth-container d--top-margin-xl-pc d--top-margin-xl-sp "><section class="b--jinr-fullwidth" style="background-color:#473822"><div class="d--fullwidth-max d--fullwidth-pad40 d--fullwidth-pad40-sp t--main-width" style="color:#ffffff"><!-- wp:columns -->
	<div class="wp-block-columns js--scr-animation"><!-- wp:column {"width":"66.66%"} -->
	<div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:html -->
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3241.7477985333207!2d139.74324421566521!3d35.658584838820246!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188bbd9009ec09%3A0x481a93f0d2a409dd!2z5p2x5Lqs44K_44Ov44O8!5e0!3m2!1sja!2sjp!4v1651621513126!5m2!1sja!2sjp" width="700" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
	<!-- /wp:html --></div>
	<!-- /wp:column -->
	
	<!-- wp:column {"verticalAlignment":"center","width":"33.33%"} -->
	<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:33.33%"><!-- wp:jinr-blocks/designtitle {"mainText":"Access","subText":"アクセス","divText":"Access","radioLayout":"center","mainTextColor":"#ffffff","subTextColor":"#ffffff","className":"d--maintext-customize","jinrBlocksCSSAttribute":".wp-block-column .d--maintext-customize.b--jinr-h2rich.d--h2rich-center .c--h2rich-contents .a--h2rich-maincopy {font-size: 30px;}"} -->
	<div class="jinr-add-class-container"><section class="wp-block-jinr-blocks-designtitle b--jinr-block b--jinr-h2rich d--h2rich-center d--h2rich-style1 d--titledesign-weight-thin d--h2rich-none d--maintext-customize js--scr-animation" style="border-color:false"><div class="c--h2rich-contents"><span class="a--h2rich-subcopy ef" style="color:#ffffff">アクセス</span><h2 class="a--h2rich-maincopy d--bold ef" style="color:#ffffff">Access</h2></div></section><style jsx="true">.wp-block-column .d--maintext-customize.b--jinr-h2rich.d--h2rich-center .c--h2rich-contents .a--h2rich-maincopy {font-size: 30px;}</style></div>
	<!-- /wp:jinr-blocks/designtitle -->
	
	<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"16px"}}} -->
	<p class="has-text-align-center" style="font-size:16px">〒550-xxxx<br>大阪府大阪市中央区本町1-1-1<br><br>TEL / 06-xxxx-xxxx　<br><br>営業時間 / 平日 9：30〜18：00<br>定休日 / 日・水</p>
	<!-- /wp:paragraph --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns --></div></section></section>
	<!-- /wp:jinr-blocks/fullwidth -->';

	if ($frontpageslug == 'demo-13') {
		$pageupdatearry = array(
			'ID'            => $frontpageID,
		);
		wp_update_post($pageupdatearry);
		update_option('show_on_front', 'page');
		update_option('page_on_front', $frontpageID);
	} else {
		// 新規作成する場合
		$pagepresetarry = array(
			'post_title'    => 'デモプリセット記事 Part13',
			'post_content'  => $presetContents,
			'post_name'     => 'demo-13',
			'post_status'   => 'publish',
			'post_type'     => 'page',
			'page_template' => 'template-full-width.php',
		);
		$presetId = wp_insert_post($pagepresetarry);
		if ($presetId != 0) {
			update_post_meta($presetId, '_jinr_noindex_display', 1);
		};
		update_option('show_on_front', 'page');
		update_option('page_on_front', $presetId);
	}
	$query['autofocus[section]'] = 'jinr__design_preset_section';
	$presetsection = add_query_arg($query, admin_url('customize.php'));
	wp_redirect($presetsection);
	exit;
}
function jinr_preset_demo14()
{
	$preset_num = '14';
	update_option('preset_data', 14);
	jinr_export_json_exclude($preset_num);
	$homeURL = esc_url(home_url('/'));


	// 任意の記事を作成する
	$frontpageID    = get_option('page_on_front');
	$frontpageslug  = get_post_field('post_name', $frontpageID);
	$presetContents = '<!-- wp:columns -->
	<div class="wp-block-columns js--scr-animation"><!-- wp:column {"width":"33.33%"} -->
	<div class="wp-block-column" style="flex-basis:33.33%"><!-- wp:jinr-blocks/background {"backgroundBgColor":"#ffffff"} -->
	<div class="wp-block-jinr-blocks-background b--jinr-block b--jinr-background"><div class="o--background-container d--background-design-flat d--background-shadow-s d--border-outset"><div class="c--background-inner d--border-none d--border-1px t--round" style="border-color:#c5c5c5"><!-- wp:spacer {"height":"10px"} -->
	<div style="height:10px" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->
	
	<!-- wp:paragraph {"align":"center"} -->
	<p class="has-text-align-center">ご予約 / Reservation<br><br><a href="#"><span class="jinr-d--font-size d--fontsize-21px">090-xxxx-xxxx</span></a></p>
	<!-- /wp:paragraph -->
	
	<!-- wp:paragraph -->
	<p>14:00〜16:30がつながりやすいです。営業時間中は繋がりにくいので、悪しからずご了承ください。</p>
	<!-- /wp:paragraph -->
	
	<<!-- wp:jinr-blocks/button {"content":"グルメサイトで予約","inputUrl":"' . $homeURL . '","blockID":"38142df1-4312-4f2d-9f45-2cca6692a495","className":"wp-block-jinr-blocks-button b--jinr-block b--jinr-button d--button-type1 d--button-center js--scr-animation"} /-->
	
	<!-- wp:spacer {"height":"30px"} -->
	<div style="height:30px" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer --></div></div><div class="a--background-color" style="background:#ffffff"></div><div class="a--background-image t--round d--background-pattern1" style="opacity:0.29999999999999993;background-size:16.666666666666668%"></div></div>
	<!-- /wp:jinr-blocks/background --></div>
	<!-- /wp:column -->
	
	<!-- wp:column {"width":"66.66%"} -->
	<div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:jinr-blocks/background {"backgroundBgColor":"#ffffff"} -->
	<div class="wp-block-jinr-blocks-background b--jinr-block b--jinr-background"><div class="o--background-container d--background-design-flat d--background-shadow-s d--border-outset"><div class="c--background-inner d--border-none d--border-1px t--round" style="border-color:#c5c5c5"><!-- wp:spacer {"height":"10px"} -->
	<div style="height:10px" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->
	
	<!-- wp:paragraph {"align":"center"} -->
	<p class="has-text-align-center">お知らせ / information</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:jinr-blocks/postlist {"listDesign":"d--postlist-newstext","listDesignSp":"d--postlist-newstext-sp","moreLink":"https://jinr-demo.jp/demo-20/category/blocks/","clientId":"df737156-6a0f-4633-8c64-f611ed10dbf4","radioHover":"d--postlist-hover-hovercolor"} /--></div></div><div class="a--background-color" style="background:#ffffff"></div><div class="a--background-image t--round d--background-pattern1" style="opacity:0.29999999999999993;background-size:16.666666666666668%"></div></div>
	<!-- /wp:jinr-blocks/background --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns -->
	
	<!-- wp:jinr-blocks/fullwidth {"fullWidthBgColor":"#ffffff","fullWidthPaddingPc":"d--fullwidth-pad60"} -->
	<section class="wp-block-jinr-blocks-fullwidth b--jinr-block b--jinr-fullwidth-container"><section class="b--jinr-fullwidth" style="background-color:#ffffff"><div class="d--fullwidth-max d--fullwidth-pad60 d--fullwidth-pad0-sp t--main-width" style="color:false"><!-- wp:spacer {"height":"60px"} -->
	<div style="height:60px" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->
	
	<!-- wp:media-text {"mediaId":1581,"mediaLink":"https://jinr-demo.jp/demo-20/?attachment_id=1581","mediaType":"image"} -->
	<div class="wp-block-media-text alignwide is-stacked-on-mobile"><figure class="wp-block-media-text__media"><img src="https://jinr-demo.jp/demo-20/wp-content/uploads/2022/10/set-img-1024x769.png" alt="" class="wp-image-1581 size-full"/></figure><div class="wp-block-media-text__content"><!-- wp:jinr-blocks/designtitle {"mainText":"本場ナポリの味を再現","subText":"イタリアに魅了されて...","divText":"本場ナポリの味を再現","className":"d--maintext-customize","jinrBlocksCSSAttribute":".d--maintext-customize.b--jinr-h2rich.d--h2rich-left .c--h2rich-contents .a--h2rich-maincopy {font-size: 27px;}"} -->
	<div class="jinr-add-class-container"><section class="wp-block-jinr-blocks-designtitle b--jinr-block b--jinr-h2rich d--h2rich-left d--h2rich-style1 d--titledesign-weight-thin d--h2rich-none d--maintext-customize js--scr-animation" style="border-color:false"><div class="c--h2rich-contents"><span class="a--h2rich-subcopy ef" style="color:false">イタリアに魅了されて...</span><h2 class="a--h2rich-maincopy d--bold ef" style="color:false">本場ナポリの味を再現</h2></div></section><style jsx="true">.d--maintext-customize.b--jinr-h2rich.d--h2rich-left .c--h2rich-contents .a--h2rich-maincopy {font-size: 27px;}</style></div>
	<!-- /wp:jinr-blocks/designtitle -->
	
	<!-- wp:paragraph -->
	<p>イタリア・ナポリの味に魅了された21歳の私は、在学中の大学を辞め、現地の老舗レストランに入って本場の料理を学び始めました。</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:paragraph -->
	<p>そして10年が経ち、ようやく自分磨きはひと段落。2022年に「リストランテ・ジン」をオープンし、本場ナポリの味を日本に届け始めました。</p>
	<!-- /wp:paragraph --></div></div>
	<!-- /wp:media-text -->
	
	<!-- wp:columns -->
	<div class="wp-block-columns js--scr-animation"><!-- wp:column -->
	<div class="wp-block-column"><!-- wp:jinr-blocks/background {"backgroundBgColor":"#f9f7f4"} -->
	<div class="wp-block-jinr-blocks-background b--jinr-block b--jinr-background"><div class="o--background-container d--background-design-flat d--background-shadow-s d--border-outset"><div class="c--background-inner d--border-none d--border-1px t--round" style="border-color:#c5c5c5"><!-- wp:jinr-blocks/designtitle {"mainText":"本格、石窯ピザ","subText":"POINT 01","divText":"本格、石窯ピザ","titleDesign":"2","radioLayout":"center"} -->
	<section class="wp-block-jinr-blocks-designtitle b--jinr-block b--jinr-h2rich d--h2rich-center d--h2rich-style2 d--titledesign-weight-thin d--h2rich-none js--scr-animation" style="border-color:false"><div class="c--h2rich-contents"><span class="a--h2rich-subcopy ef" style="color:false">POINT 01</span><h2 class="a--h2rich-maincopy d--bold ef" style="color:false">本格、石窯ピザ</h2></div></section>
	<!-- /wp:jinr-blocks/designtitle -->
	
	<!-- wp:paragraph -->
	<p>ナポリピザはとにかく生地が命です。独自の方法で発酵させた生地を、薪と窯を使って最適な温度で焼き上げており、外はパリッと中はフワッとした食感を作り上げています。</p>
	<!-- /wp:paragraph --></div></div><div class="a--background-color" style="background:#f9f7f4"></div><div class="a--background-image t--round d--background-pattern1" style="opacity:0.29999999999999993;background-size:16.666666666666668%"></div></div>
	<!-- /wp:jinr-blocks/background --></div>
	<!-- /wp:column -->
	
	<!-- wp:column -->
	<div class="wp-block-column"><!-- wp:jinr-blocks/background {"backgroundBgColor":"#f9f7f4"} -->
	<div class="wp-block-jinr-blocks-background b--jinr-block b--jinr-background"><div class="o--background-container d--background-design-flat d--background-shadow-s d--border-outset"><div class="c--background-inner d--border-none d--border-1px t--round" style="border-color:#c5c5c5"><!-- wp:jinr-blocks/designtitle {"mainText":"地元パスタを再現","subText":"POINT 02","divText":"地元パスタを再現","titleDesign":"2","radioLayout":"center"} -->
	<section class="wp-block-jinr-blocks-designtitle b--jinr-block b--jinr-h2rich d--h2rich-center d--h2rich-style2 d--titledesign-weight-thin d--h2rich-none js--scr-animation" style="border-color:false"><div class="c--h2rich-contents"><span class="a--h2rich-subcopy ef" style="color:false">POINT 02</span><h2 class="a--h2rich-maincopy d--bold ef" style="color:false">地元パスタを再現</h2></div></section>
	<!-- /wp:jinr-blocks/designtitle -->
	
	<!-- wp:paragraph -->
	<p>イタリア・ナポリの家庭料理として長く親しまれてきたパスタ。いわゆる「ナポリタン」と呼ばれるもので、アンチョビとオリーブが絶妙にマッチした一品。</p>
	<!-- /wp:paragraph --></div></div><div class="a--background-color" style="background:#f9f7f4"></div><div class="a--background-image t--round d--background-pattern1" style="opacity:0.29999999999999993;background-size:16.666666666666668%"></div></div>
	<!-- /wp:jinr-blocks/background --></div>
	<!-- /wp:column -->
	
	<!-- wp:column -->
	<div class="wp-block-column"><!-- wp:jinr-blocks/background {"backgroundBgColor":"#f9f7f4"} -->
	<div class="wp-block-jinr-blocks-background b--jinr-block b--jinr-background"><div class="o--background-container d--background-design-flat d--background-shadow-s d--border-outset"><div class="c--background-inner d--border-none d--border-1px t--round" style="border-color:#c5c5c5"><!-- wp:jinr-blocks/designtitle {"mainText":"イタリアンワイン","subText":"POINT 03","divText":"イタリアンワイン","titleDesign":"2","radioLayout":"center"} -->
	<section class="wp-block-jinr-blocks-designtitle b--jinr-block b--jinr-h2rich d--h2rich-center d--h2rich-style2 d--titledesign-weight-thin d--h2rich-none js--scr-animation" style="border-color:false"><div class="c--h2rich-contents"><span class="a--h2rich-subcopy ef" style="color:false">POINT 03</span><h2 class="a--h2rich-maincopy d--bold ef" style="color:false">イタリアンワイン</h2></div></section>
	<!-- /wp:jinr-blocks/designtitle -->
	
	<!-- wp:paragraph -->
	<p>イタリアのビオワイン農家から仕入れた、コレクションが豊富にあります。１グラスから注文できますので、お食事に合わせてペアリングしながらお楽しみください。</p>
	<!-- /wp:paragraph --></div></div><div class="a--background-color" style="background:#f9f7f4"></div><div class="a--background-image t--round d--background-pattern1" style="opacity:0.29999999999999993;background-size:16.666666666666668%"></div></div>
	<!-- /wp:jinr-blocks/background --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns -->
	
	<!-- wp:spacer {"height":"60px"} -->
	<div style="height:60px" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer --></div></section></section>
	<!-- /wp:jinr-blocks/fullwidth -->
	
	<!-- wp:jinr-blocks/fullwidth {"fullWidthBgColor":"#f9f7f4","fullWidthPaddingPc":"d--fullwidth-pad60","fullWidthPaddingSp":"d--fullwidth-pad40-sp"} -->
	<section class="wp-block-jinr-blocks-fullwidth b--jinr-block b--jinr-fullwidth-container"><section class="b--jinr-fullwidth" style="background-color:#f9f7f4"><div class="d--fullwidth-max d--fullwidth-pad60 d--fullwidth-pad40-sp t--main-width" style="color:false"><!-- wp:jinr-blocks/designtitle {"mainText":"Course Menu","subText":"コース紹介","divText":"Course Menu","radioLayout":"center","className":"d--maintext-customize","jinrBlocksCSSAttribute":".d--maintext-customize.b--jinr-h2rich.d--h2rich-center .c--h2rich-contents .a--h2rich-maincopy {font-size: 30px;}"} -->
	<div class="jinr-add-class-container"><section class="wp-block-jinr-blocks-designtitle b--jinr-block b--jinr-h2rich d--h2rich-center d--h2rich-style1 d--titledesign-weight-thin d--h2rich-none d--maintext-customize js--scr-animation" style="border-color:false"><div class="c--h2rich-contents"><span class="a--h2rich-subcopy ef" style="color:false">コース紹介</span><h2 class="a--h2rich-maincopy d--bold ef" style="color:false">Course Menu</h2></div></section><style jsx="true">.d--maintext-customize.b--jinr-h2rich.d--h2rich-center .c--h2rich-contents .a--h2rich-maincopy {font-size: 30px;}</style></div>
	<!-- /wp:jinr-blocks/designtitle -->
	
	<!-- wp:paragraph {"align":"center"} -->
	<p class="has-text-align-center">ランチ / ディナーともにコース料理をご用意しています。</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:columns -->
	<div class="wp-block-columns js--scr-animation"><!-- wp:column -->
	<div class="wp-block-column"><!-- wp:jinr-blocks/background {"backgroundDesign":"d--background-design-shadow","backgroundShadowType":"d--background-shadow-float","backgroundBgColor":"#fffdf9"} -->
	<div class="wp-block-jinr-blocks-background b--jinr-block b--jinr-background"><div class="o--background-container d--background-design-shadow d--background-shadow-float d--border-outset"><div class="c--background-inner d--border-none d--border-1px t--round" style="border-color:#c5c5c5"><!-- wp:jinr-blocks/designtitle {"mainText":"Lunch","subText":"ランチ （ 11:00 - 14:00 ）","divText":"Lunch","radioLayout":"center","className":"d--maintext-customize","jinrBlocksCSSAttribute":".wp-block-column .d--maintext-customize.b--jinr-h2rich.d--h2rich-center .c--h2rich-contents .a--h2rich-maincopy {font-size: 30px;}"} -->
	<div class="jinr-add-class-container"><section class="wp-block-jinr-blocks-designtitle b--jinr-block b--jinr-h2rich d--h2rich-center d--h2rich-style1 d--titledesign-weight-thin d--h2rich-none d--maintext-customize js--scr-animation" style="border-color:false"><div class="c--h2rich-contents"><span class="a--h2rich-subcopy ef" style="color:false">ランチ （ 11:00 - 14:00 ）</span><h2 class="a--h2rich-maincopy d--bold ef" style="color:false">Lunch</h2></div></section><style jsx="true">.wp-block-column .d--maintext-customize.b--jinr-h2rich.d--h2rich-center .c--h2rich-contents .a--h2rich-maincopy {font-size: 30px;}</style></div>
	<!-- /wp:jinr-blocks/designtitle -->
	
	<!-- wp:paragraph {"align":"center"} -->
	<p class="has-text-align-center"><span class="jinr-d--font-size d--fontsize-15px">季節のポタージュ<br><br>前菜３種盛り合わせ<br><br>季節の食材を使ったパスタ<br><br>水牛のモッツァレラチーズを使った<br>カルツォーネ（包み焼きピッツァ）<br><br>本日のメイン料理<br><br>ドルチェ２種盛り合わせ<br><br>食後のお飲み物<br>​（ハーブティー or　コーヒー or エスプレッソ）</span></p>
	<!-- /wp:paragraph -->
	
	<!-- wp:jinr-blocks/button {"content":"ランチ詳細を見る","inputUrl":"' . $homeURL . '","buttonDesign":"outline","registeredButton":"3","blockID":"e5433540-2dc2-40e7-8cc1-9b608a158623","className":"wp-block-jinr-blocks-button b--jinr-block b--jinr-button d--button-type4 d--button-center js--scr-animation"} /-->
	
	<!-- wp:spacer {"height":"30px"} -->
	<div style="height:30px" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer --></div></div><div class="a--background-color" style="background:#fffdf9"></div><div class="a--background-image t--round d--background-pattern1" style="opacity:0.29999999999999993;background-size:16.666666666666668%"></div><div class="a--background-float-item-top"></div><div class="a--background-float-item-bottom"></div></div>
	<!-- /wp:jinr-blocks/background --></div>
	<!-- /wp:column -->
	
	<!-- wp:column -->
	<div class="wp-block-column"><!-- wp:jinr-blocks/background {"backgroundDesign":"d--background-design-shadow","backgroundShadowType":"d--background-shadow-float","backgroundBgColor":"#fffdf9","backgroundBorderColor":"#bca583"} -->
	<div class="wp-block-jinr-blocks-background b--jinr-block b--jinr-background"><div class="o--background-container d--background-design-shadow d--background-shadow-float d--border-outset"><div class="c--background-inner d--border-none d--border-1px t--round" style="border-color:#bca583"><!-- wp:jinr-blocks/designtitle {"mainText":"Dinner","subText":"ディナー （ 17:00 - 22:00 ）","divText":"Dinner","radioLayout":"center","className":"d--maintext-customize"} -->
	<section class="wp-block-jinr-blocks-designtitle b--jinr-block b--jinr-h2rich d--h2rich-center d--h2rich-style1 d--titledesign-weight-thin d--h2rich-none d--maintext-customize js--scr-animation" style="border-color:false"><div class="c--h2rich-contents"><span class="a--h2rich-subcopy ef" style="color:false">ディナー （ 17:00 - 22:00 ）</span><h2 class="a--h2rich-maincopy d--bold ef" style="color:false">Dinner</h2></div></section>
	<!-- /wp:jinr-blocks/designtitle -->
	
	<!-- wp:paragraph {"align":"center"} -->
	<p class="has-text-align-center"><span class="jinr-d--font-size d--fontsize-15px">季節のポタージュ<br><br>前菜３種盛り合わせ<br><br>季節の食材を使ったパスタ<br><br>水牛のモッツァレラチーズを使った<br>カルツォーネ（包み焼きピッツァ）<br><br>本日のメイン料理<br><br>ドルチェ２種盛り合わせ<br><br>食後のお飲み物<br>​（ハーブティー or　コーヒー or エスプレッソ）</span></p>
	<!-- /wp:paragraph -->
	
	<<!-- wp:jinr-blocks/button {"content":"ディナー詳細を見る","inputUrl":"' . $homeURL . '","buttonDesign":"outline","registeredButton":"3","blockID":"d276bdb8-9daf-48a7-a248-5c7c241984fa","className":"wp-block-jinr-blocks-button b--jinr-block b--jinr-button d--button-type4 d--button-center js--scr-animation"} /-->
	
	<!-- wp:spacer {"height":"30px"} -->
	<div style="height:30px" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer --></div></div><div class="a--background-color" style="background:#fffdf9"></div><div class="a--background-image t--round d--background-pattern1" style="opacity:0.29999999999999993;background-size:16.666666666666668%"></div><div class="a--background-float-item-top"></div><div class="a--background-float-item-bottom"></div></div>
	<!-- /wp:jinr-blocks/background --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns --></div></section></section>
	<!-- /wp:jinr-blocks/fullwidth -->
	
	<!-- wp:jinr-blocks/fullwidth {"fullWidthBgColor":"#ffffff"} -->
	<section class="wp-block-jinr-blocks-fullwidth b--jinr-block b--jinr-fullwidth-container"><section class="b--jinr-fullwidth" style="background-color:#ffffff"><div class="d--fullwidth-max d--fullwidth-pad0 d--fullwidth-pad0-sp t--main-width" style="color:false"><!-- wp:spacer {"height":"40px"} -->
	<div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->
	
	<!-- wp:jinr-blocks/designtitle {"mainText":"Reservation","subText":"ご予約はこちら","divText":"Reservation","radioLayout":"center","className":"d--maintext-customize"} -->
	<section class="wp-block-jinr-blocks-designtitle b--jinr-block b--jinr-h2rich d--h2rich-center d--h2rich-style1 d--titledesign-weight-thin d--h2rich-none d--maintext-customize js--scr-animation" style="border-color:false"><div class="c--h2rich-contents"><span class="a--h2rich-subcopy ef" style="color:false">ご予約はこちら</span><h2 class="a--h2rich-maincopy d--bold ef" style="color:false">Reservation</h2></div></section>
	<!-- /wp:jinr-blocks/designtitle -->
	
	<!-- wp:paragraph {"align":"center","style":{"typography":{"letterSpacing":"5px"}}} -->
	<p class="has-text-align-center" style="letter-spacing:5px"><a href="#"><span class="jinr-d--font-size d--fontsize-18px">090-xxxx-xxxx</span></a></p>
	<!-- /wp:paragraph -->
	
	<!-- wp:jinr-blocks/button {"content":"グルメサイトで予約する","inputUrl":"' . $homeURL . '","blockID":"1d4d1839-04b4-417e-a8fa-6592a9a15b8e","className":"wp-block-jinr-blocks-button b--jinr-block b--jinr-button d--button-type1 d--button-center d--bottom-margin-xl-pc d--bottom-margin-xl-sp js--scr-animation","bottomMarginPcAttribute":"d--bottom-margin-xl-pc","bottomMarginSpAttribute":"d--bottom-margin-xl-sp"} /--></div></section></section>
	<!-- /wp:jinr-blocks/fullwidth -->
	
	<!-- wp:jinr-blocks/fullwidth {"fullWidthBgColor":"#7f6d4d","fullWidthTextColor":"#ffffff","fullWidthPaddingPc":"d--fullwidth-pad30","fullWidthPaddingSp":"d--fullwidth-pad30-sp"} -->
	<section class="wp-block-jinr-blocks-fullwidth b--jinr-block b--jinr-fullwidth-container"><section class="b--jinr-fullwidth" style="background-color:#7f6d4d"><div class="d--fullwidth-max d--fullwidth-pad30 d--fullwidth-pad30-sp t--main-width" style="color:#ffffff"><!-- wp:columns -->
	<div class="wp-block-columns js--scr-animation"><!-- wp:column {"width":"60%"} -->
	<div class="wp-block-column" style="flex-basis:60%"><!-- wp:html -->
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3241.7477985333207!2d139.74324421566521!3d35.658584838820246!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188bbd9009ec09%3A0x481a93f0d2a409dd!2z5p2x5Lqs44K_44Ov44O8!5e0!3m2!1sja!2sjp!4v1651621513126!5m2!1sja!2sjp" width="700" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
	<!-- /wp:html --></div>
	<!-- /wp:column -->
	
	<!-- wp:column {"verticalAlignment":"center","width":"40%"} -->
	<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:40%"><!-- wp:jinr-blocks/designtitle {"mainText":"ACCESS","subText":"アクセス","divText":"ACCESS","radioLayout":"center","mainTextColor":"#fcfcfc","subTextColor":"#ffffff","titleDesignColor":"#ffffff","className":"d--maintext-customize"} -->
	<section class="wp-block-jinr-blocks-designtitle b--jinr-block b--jinr-h2rich d--h2rich-center d--h2rich-style1 d--titledesign-weight-thin d--h2rich-none d--maintext-customize js--scr-animation" style="border-color:#ffffff"><div class="c--h2rich-contents"><span class="a--h2rich-subcopy ef" style="color:#ffffff">アクセス</span><h2 class="a--h2rich-maincopy d--bold ef" style="color:#fcfcfc">ACCESS</h2></div></section>
	<!-- /wp:jinr-blocks/designtitle -->
	
	<!-- wp:paragraph {"align":"center"} -->
	<p class="has-text-align-center">リストランテ・ジン<br>〒550-xxxx 大阪府大阪市北区<br><br>0700-00-xxxx<br><br>ランチ 11:30 - 14:30 (Lo 13:30)<br>ディナー 17:00 - 22:00 (Lo 20:30)<br>木曜日定休</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:jinr-blocks/button {"content":"Google Mapで開く","inputUrl":"https://goo.gl/maps/e8BzfuT1g1cCie3h8","buttonDesign":"outline","registeredButton":"3","blockID":"ec9f08a4-954f-4b0a-81c7-4603a75bf9b8","className":"wp-block-jinr-blocks-button b--jinr-block b--jinr-button d--button-type3 d--button-center js--scr-animation"} /--></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns --></div></section></section>
	<!-- /wp:jinr-blocks/fullwidth -->';

	if ($frontpageslug == 'demo-14') {
		$pageupdatearry = array(
			'ID'            => $frontpageID,
		);
		wp_update_post($pageupdatearry);
		update_option('show_on_front', 'page');
		update_option('page_on_front', $frontpageID);
	} else {
		// 新規作成する場合
		$pagepresetarry = array(
			'post_title'    => 'デモプリセット記事 Part14',
			'post_content'  => $presetContents,
			'post_name'     => 'demo-14',
			'post_status'   => 'publish',
			'post_type'     => 'page',
			'page_template' => 'template-full-width.php',
		);
		$presetId = wp_insert_post($pagepresetarry);
		if ($presetId != 0) {
			update_post_meta($presetId, '_jinr_noindex_display', 1);
		};
		update_option('show_on_front', 'page');
		update_option('page_on_front', $presetId);
	}
	$query['autofocus[section]'] = 'jinr__design_preset_section';
	$presetsection = add_query_arg($query, admin_url('customize.php'));
	wp_redirect($presetsection);
	exit;
}
function jinr_preset_demo15()
{
	$preset_num = '15';
	update_option('preset_data', 15);
	jinr_export_json_exclude($preset_num);
	$homeURL = esc_url(home_url('/'));


	// 任意の記事を作成する
	$frontpageID    = get_option('page_on_front');
	$frontpageslug  = get_post_field('post_name', $frontpageID);
	$presetContents = '<!-- wp:image {"id":1823,"sizeSlug":"full","linkDestination":"none"} -->
	<figure class="wp-block-image size-full"><img src="https://jinr-demo.jp/demo-22/wp-content/uploads/2022/10/set-image.png" alt="" class="wp-image-1823"/></figure>
	<!-- /wp:image -->
	
	<!-- wp:jinr-blocks/fullwidth {"fullWidthBgColor":"#ffffff","fullWidthPaddingPc":"d--fullwidth-pad40","fullWidthPaddingSp":"d--fullwidth-pad40-sp","topMarginPcAttribute":"d--top-margin-l-pc"} -->
	<section class="wp-block-jinr-blocks-fullwidth b--jinr-block b--jinr-fullwidth-container d--top-margin-l-pc "><section class="b--jinr-fullwidth" style="background-color:#ffffff"><div class="d--fullwidth-max d--fullwidth-pad40 d--fullwidth-pad40-sp t--main-width" style="color:false"><!-- wp:jinr-blocks/designtitle {"mainText":"仁田法律事務所について","subText":"ABOUT US","divText":"仁田法律事務所について","radioLayout":"center","radioSymbol":"icon","symbolIcon":"v2bookopen"} -->
	<section class="wp-block-jinr-blocks-designtitle b--jinr-block b--jinr-h2rich d--h2rich-center d--h2rich-style1 d--titledesign-weight-thin d--h2rich-icon js--scr-animation" style="border-color:false"><div class="c--h2rich-decoration"><div class="a--h2rich-icon ef" style="color:false"><i class="jin-icons jin-ifont-v2bookopen"></i></div></div><div class="c--h2rich-contents"><span class="a--h2rich-subcopy ef" style="color:false">ABOUT US</span><h2 class="a--h2rich-maincopy d--bold ef" style="color:false">仁田法律事務所について</h2></div></section>
	<!-- /wp:jinr-blocks/designtitle -->
	
	<!-- wp:columns -->
	<div class="wp-block-columns js--scr-animation"><!-- wp:column -->
	<div class="wp-block-column"><!-- wp:image {"id":1824,"sizeSlug":"large","linkDestination":"none"} -->
	<figure class="wp-block-image size-large"><img src="' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-640x360.png" alt="" class="wp-image-1824"/></figure>
	<!-- /wp:image --></div>
	<!-- /wp:column -->
	
	<!-- wp:column {"verticalAlignment":"center"} -->
	<div class="wp-block-column is-vertically-aligned-center"><!-- wp:paragraph -->
	<p>「カフェに訪れるような気軽さで、抱えている悩みを相談できる法律事務所を作りたい。」</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:paragraph -->
	<p>弁護士への法律相談といえば重々しい話題のように捉えられがちですが、私たちはそういった常識を変えていきたい。そうやって法律事務所を立ち上げました。</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:paragraph -->
	<p>相続、借金問題、交通事故……一人で悩むのはやめて、法律の専門家に相談してみませんか？「もっと早く相談に行けばよかった」と心が軽くなるように、誠意を持ってサポートをさせていただきます。</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:paragraph {"align":"center","displayDeviceAttribute":"jinr-display-sp","displayDeviceSPAttribute":"jinr-display-sp"} -->
	<p class="has-text-align-center jinr-display-sp"><span class="jinr-d--font-size d--fontsize-27px"><span style="color: inherit; font-size: revert; letter-spacing: 0.09rem;"> </span><i class="jin-icons in--p jin-ifont-arrowbottomthin" aria-hidden="true" style="color: inherit; font-size: revert; letter-spacing: 0.09rem;"></i><span style="color: inherit; font-size: revert; letter-spacing: 0.09rem;"> </span></span></p>
	<!-- /wp:paragraph --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns -->
	
	<!-- wp:jinr-blocks/richmenu {"columnSelect":"6","itemRatio":"1-1","textDesign":"3","itemTextSize":"d--richmenu-text-small","textColor":"#3c5c3f","filterOpacity":69,"filterDisplay":"on","filterColor":"#cddacd","pageTemplate":"template-full-width.php","bottomMarginPcAttribute":"d--bottom-margin-xl-pc","topMarginSpAttribute":"d--top-margin-xs-sp","bottomMarginSpAttribute":"d--bottom-margin-xl-sp"} -->
	<section class="wp-block-jinr-blocks-richmenu b--jinr-block b--jinr-richmenu d--richmenu-column-2-sp d--richmenu-column6 d--richmenu-ratio1-1 d--richmenu-simple d--richmenu-text-small d--richmenu-text-style3 d--richmenu-animation-fadebyone js--scr-animation d--richmenu-hover-up d--bottom-margin-xl-pc d--top-margin-xs-sp d--bottom-margin-xl-sp "><!-- wp:jinr-blocks/richmenuchild {"text":"不動産売買","link":"' . $homeURL . '","mediaId":1621,"mediaUrl":"' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-640x360.png","thumbnailUrl":"' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-640x360.png","thumbnailSizes":"(max-width:552px) 40vw,5vw","columnSelect":"6","itemRatio":"1-1","itemText":"on","textDesign":"3","textColor":"#3c5c3f","textBgColor":"rgba(255,255,255,0.51)","filterOpacity":69,"filterDisplay":"on","filterColor":"#cddacd","pageTemplate":"template-full-width.php"} -->
	<a class="wp-block-jinr-blocks-richmenuchild o--richmenu-item" href="' . $homeURL . '"><div class="o--richmenu-item-inner"><div class="a--richmenu-image"><div class="a--richmenu-filter" style="background:#cddacd;opacity:0.30999999999999994"></div><img src="' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-640x360.png" width="175" height="175" alt="" srcset="" sizes="(max-width:552px) 40vw,5vw"/></div><div class="c--richmenu-contents ef" style="color:#3c5c3f"><div class="a--richmenu-parts" style="background-color:#3c5c3f"></div><div class="a--richmenu-text d--bold">不動産売買</div></div></div></a>
	<!-- /wp:jinr-blocks/richmenuchild -->
	
	<!-- wp:jinr-blocks/richmenuchild {"text":"相続・遺産分割","link":"' . $homeURL . '","mediaId":1621,"mediaUrl":"' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-640x360.png","thumbnailUrl":"' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-640x360.png","thumbnailSizes":"(max-width:552px) 40vw,5vw","columnSelect":"6","itemRatio":"1-1","itemText":"on","textDesign":"3","textColor":"#3c5c3f","textBgColor":"rgba(255,255,255,0.51)","filterOpacity":69,"filterDisplay":"on","filterColor":"#cddacd","pageTemplate":"template-full-width.php"} -->
	<a class="wp-block-jinr-blocks-richmenuchild o--richmenu-item" href="' . $homeURL . '"><div class="o--richmenu-item-inner"><div class="a--richmenu-image"><div class="a--richmenu-filter" style="background:#cddacd;opacity:0.30999999999999994"></div><img src="' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-640x360.png" width="175" height="175" alt="" srcset="" sizes="(max-width:552px) 40vw,5vw"/></div><div class="c--richmenu-contents ef" style="color:#3c5c3f"><div class="a--richmenu-parts" style="background-color:#3c5c3f"></div><div class="a--richmenu-text d--bold">相続・遺産分割</div></div></div></a>
	<!-- /wp:jinr-blocks/richmenuchild -->
	
	<!-- wp:jinr-blocks/richmenuchild {"text":"借金問題","link":"' . $homeURL . '","mediaId":1621,"mediaUrl":"' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-640x360.png","thumbnailUrl":"' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-640x360.png","thumbnailSizes":"(max-width:552px) 40vw,5vw","columnSelect":"6","itemRatio":"1-1","itemText":"on","textDesign":"3","textColor":"#3c5c3f","textBgColor":"rgba(255,255,255,0.51)","filterOpacity":69,"filterDisplay":"on","filterColor":"#cddacd","pageTemplate":"template-full-width.php"} -->
	<a class="wp-block-jinr-blocks-richmenuchild o--richmenu-item" href="' . $homeURL . '"><div class="o--richmenu-item-inner"><div class="a--richmenu-image"><div class="a--richmenu-filter" style="background:#cddacd;opacity:0.30999999999999994"></div><img src="' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-640x360.png" width="175" height="175" alt="" srcset="" sizes="(max-width:552px) 40vw,5vw"/></div><div class="c--richmenu-contents ef" style="color:#3c5c3f"><div class="a--richmenu-parts" style="background-color:#3c5c3f"></div><div class="a--richmenu-text d--bold">借金問題</div></div></div></a>
	<!-- /wp:jinr-blocks/richmenuchild -->
	
	<!-- wp:jinr-blocks/richmenuchild {"text":"交通事故","link":"' . $homeURL . '","mediaId":1621,"mediaUrl":"' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-640x360.png","thumbnailUrl":"' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-640x360.png","thumbnailSizes":"(max-width:552px) 40vw,5vw","columnSelect":"6","itemRatio":"1-1","itemText":"on","textDesign":"3","textColor":"#3c5c3f","textBgColor":"rgba(255,255,255,0.51)","filterOpacity":69,"filterDisplay":"on","filterColor":"#cddacd","pageTemplate":"template-full-width.php"} -->
	<a class="wp-block-jinr-blocks-richmenuchild o--richmenu-item" href="' . $homeURL . '"><div class="o--richmenu-item-inner"><div class="a--richmenu-image"><div class="a--richmenu-filter" style="background:#cddacd;opacity:0.30999999999999994"></div><img src="' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-640x360.png" width="175" height="175" alt="" srcset="" sizes="(max-width:552px) 40vw,5vw"/></div><div class="c--richmenu-contents ef" style="color:#3c5c3f"><div class="a--richmenu-parts" style="background-color:#3c5c3f"></div><div class="a--richmenu-text d--bold">交通事故</div></div></div></a>
	<!-- /wp:jinr-blocks/richmenuchild -->
	
	<!-- wp:jinr-blocks/richmenuchild {"text":"契約書作成","link":"' . $homeURL . '","mediaId":1621,"mediaUrl":"' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-640x360.png","thumbnailUrl":"' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-640x360.png","thumbnailSizes":"(max-width:552px) 40vw,5vw","columnSelect":"6","itemRatio":"1-1","itemText":"on","textDesign":"3","textColor":"#3c5c3f","textBgColor":"rgba(255,255,255,0.51)","filterOpacity":69,"filterDisplay":"on","filterColor":"#cddacd","pageTemplate":"template-full-width.php"} -->
	<a class="wp-block-jinr-blocks-richmenuchild o--richmenu-item" href="' . $homeURL . '"><div class="o--richmenu-item-inner"><div class="a--richmenu-image"><div class="a--richmenu-filter" style="background:#cddacd;opacity:0.30999999999999994"></div><img src="' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-640x360.png" width="175" height="175" alt="" srcset="" sizes="(max-width:552px) 40vw,5vw"/></div><div class="c--richmenu-contents ef" style="color:#3c5c3f"><div class="a--richmenu-parts" style="background-color:#3c5c3f"></div><div class="a--richmenu-text d--bold">契約書作成</div></div></div></a>
	<!-- /wp:jinr-blocks/richmenuchild -->
	
	<!-- wp:jinr-blocks/richmenuchild {"text":"顧問契約","link":"' . $homeURL . '","mediaId":1621,"mediaUrl":"' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-640x360.png","thumbnailUrl":"' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-640x360.png","thumbnailSizes":"(max-width:552px) 40vw,5vw","columnSelect":"6","itemRatio":"1-1","itemText":"on","textDesign":"3","textColor":"#3c5c3f","textBgColor":"rgba(255,255,255,0.51)","filterOpacity":69,"filterDisplay":"on","filterColor":"#cddacd","pageTemplate":"template-full-width.php"} -->
	<a class="wp-block-jinr-blocks-richmenuchild o--richmenu-item" href="' . $homeURL . '"><div class="o--richmenu-item-inner"><div class="a--richmenu-image"><div class="a--richmenu-filter" style="background:#cddacd;opacity:0.30999999999999994"></div><img src="' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-640x360.png" width="175" height="175" alt="" srcset="" sizes="(max-width:552px) 40vw,5vw"/></div><div class="c--richmenu-contents ef" style="color:#3c5c3f"><div class="a--richmenu-parts" style="background-color:#3c5c3f"></div><div class="a--richmenu-text d--bold">顧問契約</div></div></div></a>
	<!-- /wp:jinr-blocks/richmenuchild --></section>
	<!-- /wp:jinr-blocks/richmenu --></div></section></section>
	<!-- /wp:jinr-blocks/fullwidth -->
	
	<!-- wp:spacer {"height":"30px"} -->
	<div style="height:30px" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->
	
	<!-- wp:jinr-blocks/designtitle {"mainText":"仁田法律事務所が<br>大切にしていること","subText":"Feature","divText":"仁田法律事務所が<br>大切にしていること","radioLayout":"center","radioSymbol":"icon","symbolIcon":"v2book"} -->
	<section class="wp-block-jinr-blocks-designtitle b--jinr-block b--jinr-h2rich d--h2rich-center d--h2rich-style1 d--titledesign-weight-thin d--h2rich-icon js--scr-animation" style="border-color:false"><div class="c--h2rich-decoration"><div class="a--h2rich-icon ef" style="color:false"><i class="jin-icons jin-ifont-v2book"></i></div></div><div class="c--h2rich-contents"><span class="a--h2rich-subcopy ef" style="color:false">Feature</span><h2 class="a--h2rich-maincopy d--bold ef" style="color:false">仁田法律事務所が<br>大切にしていること</h2></div></section>
	<!-- /wp:jinr-blocks/designtitle -->
	
	<!-- wp:columns {"isStackedOnMobile":false} -->
	<div class="wp-block-columns is-not-stacked-on-mobile js--scr-animation"><!-- wp:column -->
	<div class="wp-block-column"><!-- wp:columns -->
	<div class="wp-block-columns js--scr-animation"><!-- wp:column -->
	<div class="wp-block-column"><!-- wp:jinr-blocks/background {"backgroundBgColor":"#ffffff","backgroundBorderDesign":"d--border-solid","backgroundBorderColor":"#2ba069"} -->
	<div class="wp-block-jinr-blocks-background b--jinr-block b--jinr-background"><div class="o--background-container d--background-design-flat d--background-shadow-s d--border-outset"><div class="c--background-inner d--border-solid d--border-1px t--round" style="border-color:#2ba069"><!-- wp:jinr-blocks/designtitle {"mainText":"誠実","subText":"Faithful","divText":"誠実","radioLayout":"center","mainTextColor":"#44633b"} -->
	<section class="wp-block-jinr-blocks-designtitle b--jinr-block b--jinr-h2rich d--h2rich-center d--h2rich-style1 d--titledesign-weight-thin d--h2rich-none js--scr-animation" style="border-color:false"><div class="c--h2rich-contents"><span class="a--h2rich-subcopy ef" style="color:false">Faithful</span><h2 class="a--h2rich-maincopy d--bold ef" style="color:#44633b">誠実</h2></div></section>
	<!-- /wp:jinr-blocks/designtitle -->
	
	<!-- wp:paragraph -->
	<p><span class="jinr-d--font-size d--fontsize-15px">最初から最後まで、丁寧な回答をいたします。</span></p>
	<!-- /wp:paragraph --></div></div><div class="a--background-color" style="background:#ffffff"></div><div class="a--background-image t--round d--background-pattern1" style="opacity:0.29999999999999993;background-size:16.666666666666668%"></div></div>
	<!-- /wp:jinr-blocks/background --></div>
	<!-- /wp:column -->
	
	<!-- wp:column -->
	<div class="wp-block-column"><!-- wp:jinr-blocks/background {"backgroundBgColor":"#ffffff","backgroundBorderDesign":"d--border-solid","backgroundBorderColor":"#2ba069"} -->
	<div class="wp-block-jinr-blocks-background b--jinr-block b--jinr-background"><div class="o--background-container d--background-design-flat d--background-shadow-s d--border-outset"><div class="c--background-inner d--border-solid d--border-1px t--round" style="border-color:#2ba069"><!-- wp:jinr-blocks/designtitle {"mainText":"丁寧","subText":"Polite","divText":"丁寧","radioLayout":"center","mainTextColor":"#44633b"} -->
	<section class="wp-block-jinr-blocks-designtitle b--jinr-block b--jinr-h2rich d--h2rich-center d--h2rich-style1 d--titledesign-weight-thin d--h2rich-none js--scr-animation" style="border-color:false"><div class="c--h2rich-contents"><span class="a--h2rich-subcopy ef" style="color:false">Polite</span><h2 class="a--h2rich-maincopy d--bold ef" style="color:#44633b">丁寧</h2></div></section>
	<!-- /wp:jinr-blocks/designtitle -->
	
	<!-- wp:paragraph {"fontSize":"small"} -->
	<p class="has-small-font-size">私たちは、専門用語もできるだけわかりやすく説明させていただくよう努力しています。</p>
	<!-- /wp:paragraph --></div></div><div class="a--background-color" style="background:#ffffff"></div><div class="a--background-image t--round d--background-pattern1" style="opacity:0.29999999999999993;background-size:16.666666666666668%"></div></div>
	<!-- /wp:jinr-blocks/background --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns --></div>
	<!-- /wp:column -->
	
	<!-- wp:column -->
	<div class="wp-block-column"><!-- wp:columns -->
	<div class="wp-block-columns js--scr-animation"><!-- wp:column -->
	<div class="wp-block-column"><!-- wp:jinr-blocks/background {"backgroundBgColor":"#ffffff","backgroundBorderDesign":"d--border-solid","backgroundBorderColor":"#2ba069"} -->
	<div class="wp-block-jinr-blocks-background b--jinr-block b--jinr-background"><div class="o--background-container d--background-design-flat d--background-shadow-s d--border-outset"><div class="c--background-inner d--border-solid d--border-1px t--round" style="border-color:#2ba069"><!-- wp:jinr-blocks/designtitle {"mainText":"安らぎ","subText":"Feel at ease","divText":"安らぎ","radioLayout":"center","mainTextColor":"#44633b"} -->
	<section class="wp-block-jinr-blocks-designtitle b--jinr-block b--jinr-h2rich d--h2rich-center d--h2rich-style1 d--titledesign-weight-thin d--h2rich-none js--scr-animation" style="border-color:false"><div class="c--h2rich-contents"><span class="a--h2rich-subcopy ef" style="color:false">Feel at ease</span><h2 class="a--h2rich-maincopy d--bold ef" style="color:#44633b">安らぎ</h2></div></section>
	<!-- /wp:jinr-blocks/designtitle -->
	
	<!-- wp:paragraph {"fontSize":"small"} -->
	<p class="has-small-font-size">私たちは、専門用語もできるだけわかりやすく説明させていただくよう努力しています。</p>
	<!-- /wp:paragraph --></div></div><div class="a--background-color" style="background:#ffffff"></div><div class="a--background-image t--round d--background-pattern1" style="opacity:0.29999999999999993;background-size:16.666666666666668%"></div></div>
	<!-- /wp:jinr-blocks/background --></div>
	<!-- /wp:column -->
	
	<!-- wp:column -->
	<div class="wp-block-column"><!-- wp:jinr-blocks/background {"backgroundBgColor":"#ffffff","backgroundBorderDesign":"d--border-solid","backgroundBorderColor":"#2ba069"} -->
	<div class="wp-block-jinr-blocks-background b--jinr-block b--jinr-background"><div class="o--background-container d--background-design-flat d--background-shadow-s d--border-outset"><div class="c--background-inner d--border-solid d--border-1px t--round" style="border-color:#2ba069"><!-- wp:jinr-blocks/designtitle {"mainText":"対応力","subText":"Attitude","divText":"対応力","radioLayout":"center","mainTextColor":"#44633b"} -->
	<section class="wp-block-jinr-blocks-designtitle b--jinr-block b--jinr-h2rich d--h2rich-center d--h2rich-style1 d--titledesign-weight-thin d--h2rich-none js--scr-animation" style="border-color:false"><div class="c--h2rich-contents"><span class="a--h2rich-subcopy ef" style="color:false">Attitude</span><h2 class="a--h2rich-maincopy d--bold ef" style="color:#44633b">対応力</h2></div></section>
	<!-- /wp:jinr-blocks/designtitle -->
	
	<!-- wp:paragraph {"fontSize":"small"} -->
	<p class="has-small-font-size">私たちは、専門用語もできるだけわかりやすく説明させていただくよう努力しています。</p>
	<!-- /wp:paragraph --></div></div><div class="a--background-color" style="background:#ffffff"></div><div class="a--background-image t--round d--background-pattern1" style="opacity:0.29999999999999993;background-size:16.666666666666668%"></div></div>
	<!-- /wp:jinr-blocks/background --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns -->
	
	<!-- wp:spacer {"height":"30px"} -->
	<div style="height:30px" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->
	
	<!-- wp:jinr-blocks/fullwidth {"fullWidthBgColor":"#ffffff","fullWidthPaddingPc":"d--fullwidth-pad40","fullWidthPaddingSp":"d--fullwidth-pad40-sp"} -->
	<section class="wp-block-jinr-blocks-fullwidth b--jinr-block b--jinr-fullwidth-container"><section class="b--jinr-fullwidth" style="background-color:#ffffff"><div class="d--fullwidth-max d--fullwidth-pad40 d--fullwidth-pad40-sp t--main-width" style="color:false"><!-- wp:jinr-blocks/designtitle {"mainText":"ご利用の流れ","subText":"FLOW","divText":"ご利用の流れ","radioLayout":"center"} -->
	<section class="wp-block-jinr-blocks-designtitle b--jinr-block b--jinr-h2rich d--h2rich-center d--h2rich-style1 d--titledesign-weight-thin d--h2rich-none js--scr-animation" style="border-color:false"><div class="c--h2rich-contents"><span class="a--h2rich-subcopy ef" style="color:false">FLOW</span><h2 class="a--h2rich-maincopy d--bold ef" style="color:false">ご利用の流れ</h2></div></section>
	<!-- /wp:jinr-blocks/designtitle -->
	
	<!-- wp:jinr-blocks/timeline {"timelineDesign":"2","pageTemplate":"template-full-width.php"} -->
	<section class="wp-block-jinr-blocks-timeline b--jinr-block b--jinr-timeline d--timeline-type-text d--timeline-design2 d--timeline-step-default
				d--timeline-img-shadow js--scr-animation"><div class="o--timeline-list"><!-- wp:jinr-blocks/timelinechild {"link":"","thumbnailUrl":"' . $homeURL . 'wp-content/themes/jinr/lib/img/noimage-640x360.png"} -->
	<div class="wp-block-jinr-blocks-timelinechild c--timeline-item"><div class="c--timeline-heading"><div class="a--timeline-step ef"><span class="a--timeline-step-text"></span></div><div class="a--timeline-label d--bold">相談のお申し込み</div></div><div class="c--timeline-contents"><div class="a--timeline-text"><!-- wp:paragraph -->
	<p>お電話（<a href="#">06-xxxx-xxxx</a>）にてご相談の日時をご予約いただくか、<a href="' . $homeURL . 'contact/" data-type="page" data-id="1765">相談受付フォーム</a>よりご相談希望日時をお知らせください。</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:paragraph -->
	<p>ご相談内容を伺いましてご来所いただく日時を決めます。<br>初回相談は2,200円で、30分～1時間を目安にご相談をお受け致します。<br></p>
	<!-- /wp:paragraph --></div></div></div>
	<!-- /wp:jinr-blocks/timelinechild -->
	
	<!-- wp:jinr-blocks/timelinechild -->
	<div class="wp-block-jinr-blocks-timelinechild c--timeline-item"><div class="c--timeline-heading"><div class="a--timeline-step ef"><span class="a--timeline-step-text"></span></div><div class="a--timeline-label d--bold">面談しながら解決方法をご提案します</div></div><div class="c--timeline-contents"><div class="a--timeline-text"><!-- wp:paragraph -->
	<p>当事務所にご来所いただき、面談でのご相談をお受けします。今お悩みのこと、心配なこと、知っておきたいことなど、なんでも気兼ねなくお話ください。<br><br>時間の許す限りじっくりと丁寧にお話をお伺いし、解決のための手段や方法をご提案いたします。<br>難しい用語に関しても、できるだけ噛み砕いてわかりやすくご説明を頂きますのでご安心ください。</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:paragraph -->
	<p>もちろん相談にあたってプライバシーを厳守いたします。ご相談内容を第三者に漏らすことはありません。</p>
	<!-- /wp:paragraph --></div></div></div>
	<!-- /wp:jinr-blocks/timelinechild -->
	
	<!-- wp:jinr-blocks/timelinechild -->
	<div class="wp-block-jinr-blocks-timelinechild c--timeline-item"><div class="c--timeline-heading"><div class="a--timeline-step ef"><span class="a--timeline-step-text"></span></div><div class="a--timeline-label d--bold">委任契約後より、活動を開始します</div></div><div class="c--timeline-contents"><div class="a--timeline-text"><!-- wp:paragraph -->
	<p>当法律事務所に依頼することを決められた場合「委任契約」というものを結びます。契約書と委任状の作成</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:paragraph -->
	<p>委任契約が完了して着手金をいただきましたら、ご依頼の解決に向けて取り組ませていただきます。事件処理の進捗については随時お伝えをさせていただきますが、適宜での打ち合わせをさせていただく場合がございます。</p>
	<!-- /wp:paragraph --></div></div></div>
	<!-- /wp:jinr-blocks/timelinechild --></div></section>
	<!-- /wp:jinr-blocks/timeline --></div></section></section>
	<!-- /wp:jinr-blocks/fullwidth -->
	
	<!-- wp:spacer {"height":"30px"} -->
	<div style="height:30px" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->
	
	<!-- wp:jinr-blocks/designtitle {"mainText":"些細なことでも<br>遠慮なくご相談ください","subText":"初回相談は3,000円です","divText":"些細なことでも<br>遠慮なくご相談ください","radioLayout":"center"} -->
	<section class="wp-block-jinr-blocks-designtitle b--jinr-block b--jinr-h2rich d--h2rich-center d--h2rich-style1 d--titledesign-weight-thin d--h2rich-none js--scr-animation" style="border-color:false"><div class="c--h2rich-contents"><span class="a--h2rich-subcopy ef" style="color:false">初回相談は3,000円です</span><h2 class="a--h2rich-maincopy d--bold ef" style="color:false">些細なことでも<br>遠慮なくご相談ください</h2></div></section>
	<!-- /wp:jinr-blocks/designtitle -->
	
	<!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"14px"}}} -->
	<p class="has-text-align-center" style="font-size:14px">お悩みのこと、心配なこと、気がかりなこと、「こんなことを聞いても大丈夫かな？」などと思わず、何でもざっくばらんにお話しください。<br>時間の許す限りじっくりと丁寧にお話をお伺いし、解決のための手段や方法をご提案いたします。</p>
	<!-- /wp:paragraph -->
	
	<!-- wp:jinr-blocks/button {"content":"ご相談の申込みに進む","inputUrl":"' . $homeURL . 'download/","blockID":"1b060bc7-f9b4-4ca8-bc2a-c2f2ab6b8552","className":"wp-block-jinr-blocks-button b--jinr-block b--jinr-button d--button-type1 d--button-center js--scr-animation"} /-->
	
	<!-- wp:spacer {"height":"30px"} -->
	<div style="height:30px" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->
	
	<!-- wp:jinr-blocks/fullwidth {"fullWidthBgColor":"#ffffff"} -->
	<section class="wp-block-jinr-blocks-fullwidth b--jinr-block b--jinr-fullwidth-container"><section class="b--jinr-fullwidth" style="background-color:#ffffff"><div class="d--fullwidth-max d--fullwidth-pad0 d--fullwidth-pad0-sp t--main-width" style="color:false"><!-- wp:jinr-blocks/designtitle {"mainText":"ACCESS","subText":"アクセス","divText":"ACCESS","radioSymbol":"icon","symbolIcon":"droppin","topMarginPcAttribute":"d--top-margin-xl-pc","topMarginSpAttribute":"d--top-margin-xl-sp"} -->
	<section class="wp-block-jinr-blocks-designtitle b--jinr-block b--jinr-h2rich d--h2rich-left d--h2rich-style1 d--titledesign-weight-thin d--h2rich-icon d--top-margin-xl-pc d--top-margin-xl-sp js--scr-animation" style="border-color:false"><div class="c--h2rich-decoration"><div class="a--h2rich-icon ef" style="color:false"><i class="jin-icons jin-ifont-droppin"></i></div></div><div class="c--h2rich-contents"><span class="a--h2rich-subcopy ef" style="color:false">アクセス</span><h2 class="a--h2rich-maincopy d--bold ef" style="color:false">ACCESS</h2></div></section>
	<!-- /wp:jinr-blocks/designtitle -->
	
	<!-- wp:columns -->
	<div class="wp-block-columns js--scr-animation"><!-- wp:column {"width":"66.66%"} -->
	<div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:html -->
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3241.7477985333207!2d139.74324421566521!3d35.658584838820246!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188bbd9009ec09%3A0x481a93f0d2a409dd!2z5p2x5Lqs44K_44Ov44O8!5e0!3m2!1sja!2sjp!4v1651621513126!5m2!1sja!2sjp" width="700" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
	<!-- /wp:html --></div>
	<!-- /wp:column -->
	
	<!-- wp:column {"verticalAlignment":"center","width":"33.33%"} -->
	<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:33.33%"><!-- wp:paragraph {"style":{"typography":{"fontSize":"14px"}}} -->
	<p style="font-size:14px">〒550-xxxx<br>大阪府大阪市中央区本町1-1-1第一ビル6F<br><br>TEL／06-xxxx-xxxx　FAX／06-xxxx-xxxx<br>受付時間／平日 9：30〜18：00<br><br>駐車場／ビルテナント共有駐車場 （2台）<br>当事務所専用駐車場 （1台）</p>
	<!-- /wp:paragraph --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns -->
	
	<!-- wp:spacer {"height":"40px"} -->
	<div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer --></div></section></section>
	<!-- /wp:jinr-blocks/fullwidth -->';

	if ($frontpageslug == 'demo-15') {
		$pageupdatearry = array(
			'ID'            => $frontpageID,
		);
		wp_update_post($pageupdatearry);
		update_option('show_on_front', 'page');
		update_option('page_on_front', $frontpageID);
	} else {
		// 新規作成する場合
		$pagepresetarry = array(
			'post_title'    => 'デモプリセット記事 Part15',
			'post_content'  => $presetContents,
			'post_name'     => 'demo-15',
			'post_status'   => 'publish',
			'post_type'     => 'page',
			'page_template' => 'template-full-width.php',
		);
		$presetId = wp_insert_post($pagepresetarry);
		if ($presetId != 0) {
			update_post_meta($presetId, '_jinr_noindex_display', 1);
		};
		update_option('show_on_front', 'page');
		update_option('page_on_front', $presetId);
	}
	$query['autofocus[section]'] = 'jinr__design_preset_section';
	$presetsection = add_query_arg($query, admin_url('customize.php'));
	wp_redirect($presetsection);
	exit;
}


//そのまま使えるプリセット一覧(番号を３桁に)
function jinr_preset_demo101()
{
	$preset_num = '101';
	update_option('preset_data', 101);
	jinr_export_json_exclude($preset_num);
	$homeURL = esc_url(home_url('/'));


	// 任意の記事を作成する
	$frontpageID    = get_option('page_on_front');
	$frontpageslug  = get_post_field('post_name', $frontpageID);
	$presetContents = '<!-- wp:jinr-blocks/background {"backgroundDesign":"d--background-design-shadow","backgroundShadowType":"d--background-shadow-float","backgroundBgColor":"#fff9f5","backgroundBorderDesign":"d--border-dashed","backgroundBorderPosition":"d--border-inset","backgroundBorderColor":"#db9e79","backgroundSize":2} -->
	<div class="wp-block-jinr-blocks-background b--jinr-block b--jinr-background"><div class="o--background-container d--background-design-shadow d--background-shadow-float d--border-inset"><div class="c--background-inner d--border-dashed d--border-1px t--round" style="border-color:#db9e79"><!-- wp:jinr-blocks/designtitle {"mainText":"Popular Post","subText":"当サイトの人気記事","divText":"Popular Post","radioLayout":"center","symbolIcon":"v2graph","tagSelect":"div"} -->
	<section class="wp-block-jinr-blocks-designtitle b--jinr-block b--jinr-h2rich d--h2rich-center d--h2rich-style1 d--titledesign-weight-thin d--h2rich-none js--scr-animation" style="border-color:false"><div class="c--h2rich-contents"><span class="a--h2rich-subcopy ef" style="color:false">当サイトの人気記事</span><div class="a--h2rich-maincopy d--bold ef" style="color:false">Popular Post</div></div></section>
	<!-- /wp:jinr-blocks/designtitle -->
	<!-- wp:jinr-blocks/postlist {"postNum":8,"columnSelect":"4","columnSelectSp":"2","radioDisplayArticles":"pv","buttonText":"Read More ｜ さらに表示する","moreLink":"https://jinr-demo.jp/demo-2/category/blocks/","clientId":"4d1b7efb-4c2f-49b7-9891-7332009162b8","radioAnimation":"d--postlist-animation-fadebyone js--scr-animation"} /--></div></div><div class="a--background-color" style="background:#fff9f5"></div><div class="a--background-image t--round d--background-pattern1" style="opacity:0.29999999999999993;background-size:0.6666666666666666%"></div><div class="a--background-float-item-top"></div><div class="a--background-float-item-bottom"></div></div>
	<!-- /wp:jinr-blocks/background -->
	<!-- wp:jinr-blocks/background {"backgroundDesign":"d--background-design-shadow","backgroundShadowType":"d--background-shadow-float","backgroundBgColor":"#fff9f5","backgroundBorderDesign":"d--border-dashed","backgroundBorderPosition":"d--border-inset","backgroundBorderColor":"#db9e79","backgroundSize":2} -->
	<div class="wp-block-jinr-blocks-background b--jinr-block b--jinr-background"><div class="o--background-container d--background-design-shadow d--background-shadow-float d--border-inset"><div class="c--background-inner d--border-dashed d--border-1px t--round" style="border-color:#db9e79"><!-- wp:jinr-blocks/designtitle {"mainText":"New Post","subText":"新着記事","divText":"New Post","tagSelect":"div"} -->
	<section class="wp-block-jinr-blocks-designtitle b--jinr-block b--jinr-h2rich d--h2rich-left d--h2rich-style1 d--titledesign-weight-thin d--h2rich-none js--scr-animation" style="border-color:false"><div class="c--h2rich-contents"><span class="a--h2rich-subcopy ef" style="color:false">新着記事</span><div class="a--h2rich-maincopy d--bold ef" style="color:false">New Post</div></div></section>
	<!-- /wp:jinr-blocks/designtitle -->
	<!-- wp:jinr-blocks/postlist {"postNum":3,"listDesign":"d--postlist-newstext","listDesignSp":"d--postlist-newstext-sp","columnSelect":"2","buttonText":"Read More ｜ さらに表示する","moreLink":"https://jinr-demo.jp/demo-2/category/blocks/","clientId":"76aa68a1-51fe-4338-904c-8285c963cffa","radioAnimation":"d--postlist-animation-fadebyone js--scr-animation"} /-->
	<!-- wp:tag-cloud {"taxonomy":"category"} /--></div></div><div class="a--background-color" style="background:#fff9f5"></div><div class="a--background-image t--round d--background-pattern1" style="opacity:0.29999999999999993;background-size:0.6666666666666666%"></div><div class="a--background-float-item-top"></div><div class="a--background-float-item-bottom"></div></div>
	<!-- /wp:jinr-blocks/background -->
	<!-- wp:jinr-blocks/profile -->
	<div class="wp-block-jinr-blocks-profile b--jinr-profile-container">[jinr_profile design="d--profile-style1" color="d--theme-color" sns_display="on"]</div>
	<!-- /wp:jinr-blocks/profile -->
	<!-- wp:spacer {"height":"30px"} -->
	<div style="height:30px" aria-hidden="true" class="wp-block-spacer"></div>
	<!-- /wp:spacer -->';

	if ($frontpageslug == 'demo#1') {
		$pageupdatearry = array(
			'ID'            => $frontpageID,
		);
		wp_update_post($pageupdatearry);
		update_option('show_on_front', 'page');
		update_option('page_on_front', $frontpageID);
	} else {
		// 新規作成する場合
		$pagepresetarry = array(
			'post_title'    => 'デモプリセット記事 #1',
			'post_content'  => $presetContents,
			'post_name'     => 'demo#1',
			'post_status'   => 'publish',
			'post_type'     => 'page',
			'page_template' => 'template-full-width.php',
		);
		$presetId = wp_insert_post($pagepresetarry);
		if ($presetId != 0) {
			update_post_meta($presetId, '_jinr_noindex_display', 1);
		};
		update_option('show_on_front', 'page');
		update_option('page_on_front', $presetId);
	}
	$query['autofocus[section]'] = 'jinr__design_preset_section';
	$presetsection = add_query_arg($query, admin_url('customize.php'));
	wp_redirect($presetsection);
	exit;
}
function jinr_preset_demo102()
{
	$preset_num = '102';
	update_option('preset_data', 102);
	jinr_export_json_exclude($preset_num);
	$homeURL = esc_url(home_url('/'));


	// 任意の記事を作成する
	$frontpageID    = get_option('page_on_front');
	$frontpageslug  = get_post_field('post_name', $frontpageID);
	$presetContents = '<!-- wp:jinr-blocks/fullwidth {"fullWidthBgColor":"#fff2f6"} -->
	<section class="wp-block-jinr-blocks-fullwidth b--jinr-block b--jinr-fullwidth-container"><section class="b--jinr-fullwidth" style="background-color:#fff2f6"><div class="d--fullwidth-max d--fullwidth-pad0 d--fullwidth-pad0-sp t--main-width" style="color:false"><!-- wp:jinr-blocks/background {"backgroundBgColor":"rgba(255,255,255,0.51)","backgroundBorderWidth":"d--border-2px","backgroundBorderColor":"#ffffff"} -->
	<div class="wp-block-jinr-blocks-background b--jinr-block b--jinr-background"><div class="o--background-container d--background-design-flat d--background-shadow-s d--border-outset"><div class="c--background-inner d--border-none d--border-2px t--round" style="border-color:#ffffff"><!-- wp:jinr-blocks/designtitle {"mainText":"Popular Post","subText":"人気記事","divText":"Popular Post","symbolIcon":"v2badge","subTextColor":"#68d6cb","tagSelect":"div"} -->
	<section class="wp-block-jinr-blocks-designtitle b--jinr-block b--jinr-h2rich d--h2rich-left d--h2rich-style1 d--titledesign-weight-thin d--h2rich-none js--scr-animation" style="border-color:false"><div class="c--h2rich-contents"><span class="a--h2rich-subcopy ef" style="color:#68d6cb">人気記事</span><div class="a--h2rich-maincopy d--bold ef" style="color:false">Popular Post</div></div></section>
	<!-- /wp:jinr-blocks/designtitle -->
	
	<!-- wp:jinr-blocks/postlist {"postNum":8,"rankingDisplay":true,"rankingViewDisplay":true,"columnSelect":"4","columnSelectSp":"2","radioDisplayArticles":"pv","moreLink":"https://jinr-demo.jp/demo-21/category/blocks/","clientId":"d09381e3-e230-4170-aa15-5c4d8873a417","radioAnimation":"d--postlist-animation-fadebyone js--scr-animation","PvUrl1":"https://jinr-demo.jp/demo-21/feature/","PvUrl2":"https://jinr-demo.jp/demo-21/button/","PvUrl3":"https://jinr-demo.jp/demo-21/box/","PvUrl4":"https://jinr-demo.jp/demo-21/design/","PvUrl5":"https://jinr-demo.jp/demo-21/blogs/","PvUrl6":"https://jinr-demo.jp/demo-21/timeline/","PvUrl7":"https://jinr-demo.jp/demo-21/monetize/","PvUrl8":"https://jinr-demo.jp/demo-21/pagespeed/","PvUrl9":"https://jinr-demo.jp/demo-21/category-separator/","PvUrl10":"https://jinr-demo.jp/demo-21/background/","PvUrl11":"https://jinr-demo.jp/demo-21/code-editor/","PvUrl12":"https://jinr-demo.jp/demo-21/blogcamp/"} /--></div></div><div class="a--background-color" style="background:rgba(255,255,255,0.51)"></div><div class="a--background-image t--round d--background-pattern1" style="opacity:0.29999999999999993;background-size:16.666666666666668%"></div></div>
	<!-- /wp:jinr-blocks/background -->
	
	<!-- wp:jinr-blocks/background {"backgroundBgColor":"rgba(255,255,255,0.51)","backgroundBorderWidth":"d--border-2px","backgroundBorderColor":"#ffffff"} -->
	<div class="wp-block-jinr-blocks-background b--jinr-block b--jinr-background"><div class="o--background-container d--background-design-flat d--background-shadow-s d--border-outset"><div class="c--background-inner d--border-none d--border-2px t--round" style="border-color:#ffffff"><!-- wp:jinr-blocks/designtitle {"mainText":"New Post","subText":"新着記事","divText":"New Post","subTextColor":"#68d6cb","tagSelect":"div"} -->
	<section class="wp-block-jinr-blocks-designtitle b--jinr-block b--jinr-h2rich d--h2rich-left d--h2rich-style1 d--titledesign-weight-thin d--h2rich-none js--scr-animation" style="border-color:false"><div class="c--h2rich-contents"><span class="a--h2rich-subcopy ef" style="color:#68d6cb">新着記事</span><div class="a--h2rich-maincopy d--bold ef" style="color:false">New Post</div></div></section>
	<!-- /wp:jinr-blocks/designtitle -->
	
	<!-- wp:jinr-blocks/postlist {"postNum":3,"listDesign":"d--postlist-newstext","listDesignSp":"d--postlist-newstext-sp","moreLink":"https://jinr-demo.jp/demo-21/category/blocks/","clientId":"72543c87-da43-4625-845a-9715e6f7bddb","radioAnimation":"d--postlist-animation-fadebyone js--scr-animation"} /-->
	
	<!-- wp:tag-cloud {"taxonomy":"category"} /--></div></div><div class="a--background-color" style="background:rgba(255,255,255,0.51)"></div><div class="a--background-image t--round d--background-pattern1" style="opacity:0.29999999999999993;background-size:16.666666666666668%"></div></div>
	<!-- /wp:jinr-blocks/background --></div></section></section>
	<!-- /wp:jinr-blocks/fullwidth -->
	
	<!-- wp:jinr-blocks/profile -->
	<div class="wp-block-jinr-blocks-profile b--jinr-profile-container">[jinr_profile design="d--profile-style1" color="d--theme-color" sns_display="on"]</div>
	<!-- /wp:jinr-blocks/profile -->';

	if ($frontpageslug == 'demo#2') {
		$pageupdatearry = array(
			'ID'            => $frontpageID,
		);
		wp_update_post($pageupdatearry);
		update_option('show_on_front', 'page');
		update_option('page_on_front', $frontpageID);
	} else {
		// 新規作成する場合
		$pagepresetarry = array(
			'post_title'    => 'デモプリセット記事 #2',
			'post_content'  => $presetContents,
			'post_name'     => 'demo#2',
			'post_status'   => 'publish',
			'post_type'     => 'page',
			'page_template' => 'template-full-width.php',
		);
		$presetId = wp_insert_post($pagepresetarry);
		if ($presetId != 0) {
			update_post_meta($presetId, '_jinr_noindex_display', 1);
		};
		update_option('show_on_front', 'page');
		update_option('page_on_front', $presetId);
	}
	$query['autofocus[section]'] = 'jinr__design_preset_section';
	$presetsection = add_query_arg($query, admin_url('customize.php'));
	wp_redirect($presetsection);
	exit;
}
function jinr_preset_demo103()
{
	$preset_num = '103';
	update_option('preset_data', 103);
	jinr_export_json_exclude($preset_num);
	$homeURL = esc_url(home_url('/'));


	// 任意の記事を作成する
	$frontpageID    = get_option('page_on_front');
	$frontpageslug  = get_post_field('post_name', $frontpageID);
	$presetContents = '<!-- wp:jinr-blocks/fullwidth {"fullWidthBgColor":"#fffdeb"} -->
	<section class="wp-block-jinr-blocks-fullwidth b--jinr-block b--jinr-fullwidth-container"><section class="b--jinr-fullwidth" style="background-color:#fffdeb"><div class="d--fullwidth-max d--fullwidth-pad0 d--fullwidth-pad0-sp t--main-width" style="color:false"><!-- wp:jinr-blocks/background {"backgroundDesign":"d--background-design-shadow","backgroundShadowType":"d--background-shadow-float","backgroundBgColor":"#fffff4","backgroundBorderDesign":"d--border-dashed","backgroundBorderPosition":"d--border-inset","backgroundBorderColor":"#f9e235","backgroundSize":2} -->
	<div class="wp-block-jinr-blocks-background b--jinr-block b--jinr-background"><div class="o--background-container d--background-design-shadow d--background-shadow-float d--border-inset"><div class="c--background-inner d--border-dashed d--border-1px t--round" style="border-color:#f9e235"><!-- wp:jinr-blocks/designtitle {"mainText":"Popular Post","subText":"当サイトの人気記事","divText":"Popular Post","radioLayout":"center","symbolIcon":"v2graph","subTextColor":"#a1e549","tagSelect":"div"} -->
	<section class="wp-block-jinr-blocks-designtitle b--jinr-block b--jinr-h2rich d--h2rich-center d--h2rich-style1 d--titledesign-weight-thin d--h2rich-none js--scr-animation" style="border-color:false"><div class="c--h2rich-contents"><span class="a--h2rich-subcopy ef" style="color:#a1e549">当サイトの人気記事</span><div class="a--h2rich-maincopy d--bold ef" style="color:false">Popular Post</div></div></section>
	<!-- /wp:jinr-blocks/designtitle -->
	
	<!-- wp:jinr-blocks/postlist {"postNum":8,"columnSelect":"4","columnSelectSp":"2","radioDisplayArticles":"pv","buttonText":"Read More ｜ さらに表示する","moreLink":"https://jinr-demo.jp/demo-16/category/blocks/","clientId":"79857760-b6f0-4002-a639-e01287d070e3","radioAnimation":"d--postlist-animation-fadebyone js--scr-animation"} /--></div></div><div class="a--background-color" style="background:#fffff4"></div><div class="a--background-image t--round d--background-pattern1" style="opacity:0.29999999999999993;background-size:0.6666666666666666%"></div><div class="a--background-float-item-top"></div><div class="a--background-float-item-bottom"></div></div>
	<!-- /wp:jinr-blocks/background -->
	
	<!-- wp:jinr-blocks/background {"backgroundDesign":"d--background-design-shadow","backgroundShadowType":"d--background-shadow-float","backgroundBgColor":"#fffff4","backgroundBorderDesign":"d--border-dashed","backgroundBorderPosition":"d--border-inset","backgroundBorderColor":"#f9e235","backgroundSize":2} -->
	<div class="wp-block-jinr-blocks-background b--jinr-block b--jinr-background"><div class="o--background-container d--background-design-shadow d--background-shadow-float d--border-inset"><div class="c--background-inner d--border-dashed d--border-1px t--round" style="border-color:#f9e235"><!-- wp:jinr-blocks/designtitle {"mainText":"New Post","subText":"新着記事","divText":"New Post","subTextColor":"#a1e549","tagSelect":"div"} -->
	<section class="wp-block-jinr-blocks-designtitle b--jinr-block b--jinr-h2rich d--h2rich-left d--h2rich-style1 d--titledesign-weight-thin d--h2rich-none js--scr-animation" style="border-color:false"><div class="c--h2rich-contents"><span class="a--h2rich-subcopy ef" style="color:#a1e549">新着記事</span><div class="a--h2rich-maincopy d--bold ef" style="color:false">New Post</div></div></section>
	<!-- /wp:jinr-blocks/designtitle -->
	
	<!-- wp:jinr-blocks/postlist {"postNum":3,"listDesign":"d--postlist-newstext","listDesignSp":"d--postlist-newstext-sp","columnSelect":"2","buttonText":"Read More ｜ さらに表示する","moreLink":"https://jinr-demo.jp/demo-16/category/blocks/","clientId":"ddf81ef6-718f-4ffc-82ad-01ad3be8bd4e","radioAnimation":"d--postlist-animation-fadebyone js--scr-animation"} /-->
	
	<!-- wp:tag-cloud {"taxonomy":"category"} /--></div></div><div class="a--background-color" style="background:#fffff4"></div><div class="a--background-image t--round d--background-pattern1" style="opacity:0.29999999999999993;background-size:0.6666666666666666%"></div><div class="a--background-float-item-top"></div><div class="a--background-float-item-bottom"></div></div>
	<!-- /wp:jinr-blocks/background --></div></section></section>
	<!-- /wp:jinr-blocks/fullwidth -->
	
	<!-- wp:jinr-blocks/profile -->
	<div class="wp-block-jinr-blocks-profile b--jinr-profile-container">[jinr_profile design="d--profile-style1" color="d--theme-color" sns_display="on"]</div>
	<!-- /wp:jinr-blocks/profile -->';

	if ($frontpageslug == 'demo#3') {
		$pageupdatearry = array(
			'ID'            => $frontpageID,
		);
		wp_update_post($pageupdatearry);
		update_option('show_on_front', 'page');
		update_option('page_on_front', $frontpageID);
	} else {
		// 新規作成する場合
		$pagepresetarry = array(
			'post_title'    => 'デモプリセット記事 #3',
			'post_content'  => $presetContents,
			'post_name'     => 'demo#3',
			'post_status'   => 'publish',
			'post_type'     => 'page',
			'page_template' => 'template-full-width.php',
		);
		$presetId = wp_insert_post($pagepresetarry);
		if ($presetId != 0) {
			update_post_meta($presetId, '_jinr_noindex_display', 1);
		};
		update_option('show_on_front', 'page');
		update_option('page_on_front', $presetId);
	}
	$query['autofocus[section]'] = 'jinr__design_preset_section';
	$presetsection = add_query_arg($query, admin_url('customize.php'));
	wp_redirect($presetsection);
	exit;
}
function jinr_preset_demo104()
{
	$preset_num = '104';
	update_option('preset_data', 104);
	jinr_export_json_exclude($preset_num);
	$homeURL = esc_url(home_url('/'));


	// 任意の記事を作成する
	$frontpageID    = get_option('page_on_front');
	$frontpageslug  = get_post_field('post_name', $frontpageID);
	$presetContents = '<!-- wp:jinr-blocks/fullwidth {"fullWidthBgColor":"#f3f8dd","fullWidthPaddingPc":"d--fullwidth-pad20"} -->
	<section class="wp-block-jinr-blocks-fullwidth b--jinr-block b--jinr-fullwidth-container"><section class="b--jinr-fullwidth" style="background-color:#f3f8dd"><div class="d--fullwidth-max d--fullwidth-pad20 d--fullwidth-pad0-sp t--main-width" style="color:false"><!-- wp:jinr-blocks/background {"backgroundBgColor":"rgba(255,255,255,0.51)","backgroundBorderWidth":"d--border-2px","backgroundBorderColor":"#ffffff"} -->
	<div class="wp-block-jinr-blocks-background b--jinr-block b--jinr-background"><div class="o--background-container d--background-design-flat d--background-shadow-s d--border-outset"><div class="c--background-inner d--border-none d--border-2px t--round" style="border-color:#ffffff"><!-- wp:jinr-blocks/designtitle {"mainText":"人気記事を読む","subText":"Popular Post","divText":"人気記事を読む","symbolIcon":"v2dog","mainTextColor":"#3d513f","tagSelect":"div","className":"undefined"} -->
	<section class="wp-block-jinr-blocks-designtitle b--jinr-block b--jinr-h2rich d--h2rich-left d--h2rich-style1 d--titledesign-weight-thin d--h2rich-none undefined js--scr-animation" style="border-color:false"><div class="c--h2rich-contents"><span class="a--h2rich-subcopy ef" style="color:false">Popular Post</span><div class="a--h2rich-maincopy d--bold ef" style="color:#3d513f">人気記事を読む</div></div></section>
	<!-- /wp:jinr-blocks/designtitle -->
	
	<!-- wp:jinr-blocks/postlist {"postNum":8,"columnSelect":"4","columnSelectSp":"2","radioDisplayArticles":"pv","moreLink":"https://jinr-demo.jp/demo-13/category/blocks/","clientId":"5beee35a-fbca-40c8-803d-83be379f1893","radioAnimation":"d--postlist-animation-fadebyone js--scr-animation"} /--></div></div><div class="a--background-color" style="background:rgba(255,255,255,0.51)"></div><div class="a--background-image t--round d--background-pattern1" style="opacity:0.29999999999999993;background-size:16.666666666666668%"></div></div>
	<!-- /wp:jinr-blocks/background -->
	
	<!-- wp:jinr-blocks/background {"backgroundBgColor":"rgba(255,255,255,0.51)","backgroundBorderWidth":"d--border-2px","backgroundBorderColor":"#ffffff"} -->
	<div class="wp-block-jinr-blocks-background b--jinr-block b--jinr-background"><div class="o--background-container d--background-design-flat d--background-shadow-s d--border-outset"><div class="c--background-inner d--border-none d--border-2px t--round" style="border-color:#ffffff"><!-- wp:jinr-blocks/designtitle {"mainText":"新着記事","subText":"News","divText":"新着記事","symbolIcon":"v2nikukyu","mainTextColor":"#3d513f","tagSelect":"div","className":"undefined"} -->
	<section class="wp-block-jinr-blocks-designtitle b--jinr-block b--jinr-h2rich d--h2rich-left d--h2rich-style1 d--titledesign-weight-thin d--h2rich-none undefined js--scr-animation" style="border-color:false"><div class="c--h2rich-contents"><span class="a--h2rich-subcopy ef" style="color:false">News</span><div class="a--h2rich-maincopy d--bold ef" style="color:#3d513f">新着記事</div></div></section>
	<!-- /wp:jinr-blocks/designtitle -->
	
	<!-- wp:jinr-blocks/postlist {"postNum":3,"listDesign":"d--postlist-newstext","listDesignSp":"d--postlist-newstext-sp","columnSelect":"2","columnSelectSp":"2","moreLink":"https://jinr-demo.jp/demo-13/category/blocks/","clientId":"735c972d-9ff7-47b6-888f-a86e48e810c4","radioAnimation":"d--postlist-animation-fadebyone js--scr-animation"} /-->
	
	<!-- wp:tag-cloud {"taxonomy":"category"} /--></div></div><div class="a--background-color" style="background:rgba(255,255,255,0.51)"></div><div class="a--background-image t--round d--background-pattern1" style="opacity:0.29999999999999993;background-size:16.666666666666668%"></div></div>
	<!-- /wp:jinr-blocks/background --></div></section></section>
	<!-- /wp:jinr-blocks/fullwidth -->
	
	<!-- wp:jinr-blocks/profile -->
	<div class="wp-block-jinr-blocks-profile b--jinr-profile-container">[jinr_profile design="d--profile-style1" color="d--theme-color" sns_display="on"]</div>
	<!-- /wp:jinr-blocks/profile -->';

	if ($frontpageslug == 'demo#4') {
		$pageupdatearry = array(
			'ID'            => $frontpageID,
		);
		wp_update_post($pageupdatearry);
		update_option('show_on_front', 'page');
		update_option('page_on_front', $frontpageID);
	} else {
		// 新規作成する場合
		$pagepresetarry = array(
			'post_title'    => 'デモプリセット記事 #4',
			'post_content'  => $presetContents,
			'post_name'     => 'demo#4',
			'post_status'   => 'publish',
			'post_type'     => 'page',
			'page_template' => 'template-full-width.php',
		);
		$presetId = wp_insert_post($pagepresetarry);
		if ($presetId != 0) {
			update_post_meta($presetId, '_jinr_noindex_display', 1);
		};
		update_option('show_on_front', 'page');
		update_option('page_on_front', $presetId);
	}
	$query['autofocus[section]'] = 'jinr__design_preset_section';
	$presetsection = add_query_arg($query, admin_url('customize.php'));
	wp_redirect($presetsection);
	exit;
}
function jinr_preset_demo105()
{
	$preset_num = '105';
	update_option('preset_data', 105);
	jinr_export_json_exclude($preset_num);
	$homeURL = esc_url(home_url('/'));


	// 任意の記事を作成する
	$frontpageID    = get_option('page_on_front');
	$frontpageslug  = get_post_field('post_name', $frontpageID);
	$presetContents = '<!-- wp:jinr-blocks/fullwidth {"fullWidthBgColor":"#edf8ff"} -->
	<section class="wp-block-jinr-blocks-fullwidth b--jinr-block b--jinr-fullwidth-container"><section class="b--jinr-fullwidth" style="background-color:#edf8ff"><div class="d--fullwidth-max d--fullwidth-pad0 d--fullwidth-pad0-sp t--main-width" style="color:false"><!-- wp:jinr-blocks/background {"backgroundBgColor":"rgba(255,255,255,0.51)","backgroundBorderWidth":"d--border-2px","backgroundBorderColor":"#ffffff"} -->
	<div class="wp-block-jinr-blocks-background b--jinr-block b--jinr-background"><div class="o--background-container d--background-design-flat d--background-shadow-s d--border-outset"><div class="c--background-inner d--border-none d--border-2px t--round" style="border-color:#ffffff"><!-- wp:jinr-blocks/designtitle {"mainText":"Popular Post","subText":"人気記事","divText":"Popular Post","mainTextColor":"#005b7c"} -->
	<section class="wp-block-jinr-blocks-designtitle b--jinr-block b--jinr-h2rich d--h2rich-left d--h2rich-style1 d--titledesign-weight-thin d--h2rich-none js--scr-animation" style="border-color:false"><div class="c--h2rich-contents"><span class="a--h2rich-subcopy ef" style="color:false">人気記事</span><h2 class="a--h2rich-maincopy d--bold ef" style="color:#005b7c">Popular Post</h2></div></section>
	<!-- /wp:jinr-blocks/designtitle -->
	
	<!-- wp:jinr-blocks/postlist {"postNum":8,"pvPaidpostDisplay":true,"columnSelect":"4","columnSelectSp":"2","radioDisplayArticles":"pv","moreLink":"https://jinr-demo.jp/demo-5/category/blocks/","clientId":"b5ad5df6-252c-4eff-bfca-8e36f1b1a987","radioAnimation":"d--postlist-animation-fadebyone js--scr-animation","pickupUrl1":"https://jinr-demo.jp/demo-5/2022/03/09/producer/","pickupLabelText1":"良く読まれています","pickupLabelBgColor1":"#005b7c"} /--></div></div><div class="a--background-color" style="background:rgba(255,255,255,0.51)"></div><div class="a--background-image t--round d--background-pattern1" style="opacity:0.29999999999999993;background-size:16.666666666666668%"></div></div>
	<!-- /wp:jinr-blocks/background -->
	
	<!-- wp:jinr-blocks/background {"backgroundBgColor":"rgba(255,255,255,0.51)","backgroundBorderWidth":"d--border-2px","backgroundBorderColor":"#ffffff"} -->
	<div class="wp-block-jinr-blocks-background b--jinr-block b--jinr-background"><div class="o--background-container d--background-design-flat d--background-shadow-s d--border-outset"><div class="c--background-inner d--border-none d--border-2px t--round" style="border-color:#ffffff"><!-- wp:jinr-blocks/designtitle {"mainText":"News","subText":"最新記事","divText":"News","mainTextColor":"#005b7c"} -->
	<section class="wp-block-jinr-blocks-designtitle b--jinr-block b--jinr-h2rich d--h2rich-left d--h2rich-style1 d--titledesign-weight-thin d--h2rich-none js--scr-animation" style="border-color:false"><div class="c--h2rich-contents"><span class="a--h2rich-subcopy ef" style="color:false">最新記事</span><h2 class="a--h2rich-maincopy d--bold ef" style="color:#005b7c">News</h2></div></section>
	<!-- /wp:jinr-blocks/designtitle -->
	
	<!-- wp:jinr-blocks/postlist {"postNum":3,"pvPaidpostDisplay":true,"listDesign":"d--postlist-newstext","listDesignSp":"d--postlist-newstext-sp","columnSelect":"2","columnSelectSp":"2","moreLink":"https://jinr-demo.jp/demo-5/category/blocks/","clientId":"66c754d1-9385-43a0-9c3d-c93686c1a577","radioAnimation":"d--postlist-animation-fadebyone js--scr-animation","pickupUrl1":"https://jinr-demo.jp/demo-5/2022/03/09/producer/","pickupLabelText1":"良く読まれています","pickupLabelBgColor1":"#005b7c"} /-->
	
	<!-- wp:tag-cloud {"taxonomy":"category"} /--></div></div><div class="a--background-color" style="background:rgba(255,255,255,0.51)"></div><div class="a--background-image t--round d--background-pattern1" style="opacity:0.29999999999999993;background-size:16.666666666666668%"></div></div>
	<!-- /wp:jinr-blocks/background --></div></section></section>
	<!-- /wp:jinr-blocks/fullwidth -->
	
	<!-- wp:jinr-blocks/profile -->
	<div class="wp-block-jinr-blocks-profile b--jinr-profile-container">[jinr_profile design="d--profile-style1" color="d--theme-color" sns_display="on"]</div>
	<!-- /wp:jinr-blocks/profile -->';

	if ($frontpageslug == 'demo#5') {
		$pageupdatearry = array(
			'ID'            => $frontpageID,
		);
		wp_update_post($pageupdatearry);
		update_option('show_on_front', 'page');
		update_option('page_on_front', $frontpageID);
	} else {
		// 新規作成する場合
		$pagepresetarry = array(
			'post_title'    => 'デモプリセット記事 #5',
			'post_content'  => $presetContents,
			'post_name'     => 'demo#5',
			'post_status'   => 'publish',
			'post_type'     => 'page',
			'page_template' => 'template-full-width.php',
		);
		$presetId = wp_insert_post($pagepresetarry);
		if ($presetId != 0) {
			update_post_meta($presetId, '_jinr_noindex_display', 1);
		};
		update_option('show_on_front', 'page');
		update_option('page_on_front', $presetId);
	}
	$query['autofocus[section]'] = 'jinr__design_preset_section';
	$presetsection = add_query_arg($query, admin_url('customize.php'));
	wp_redirect($presetsection);
	exit;
}
function jinr_preset_demo106()
{
	$preset_num = '106';
	update_option('preset_data', 106);
	jinr_export_json_exclude($preset_num);
	$homeURL = esc_url(home_url('/'));


	// 任意の記事を作成する
	$frontpageID    = get_option('page_on_front');
	$frontpageslug  = get_post_field('post_name', $frontpageID);
	$presetContents = '<!-- wp:jinr-blocks/fullwidth {"fullWidthBgColor":"#e8edf7"} -->
	<section class="wp-block-jinr-blocks-fullwidth b--jinr-block b--jinr-fullwidth-container"><section class="b--jinr-fullwidth" style="background-color:#e8edf7"><div class="d--fullwidth-max d--fullwidth-pad0 d--fullwidth-pad0-sp t--main-width" style="color:false"><!-- wp:jinr-blocks/background {"backgroundBgColor":"rgba(255,255,255,0.51)","backgroundBorderWidth":"d--border-2px","backgroundBorderColor":"#ffffff"} -->
	<div class="wp-block-jinr-blocks-background b--jinr-block b--jinr-background"><div class="o--background-container d--background-design-flat d--background-shadow-s d--border-outset"><div class="c--background-inner d--border-none d--border-2px t--round" style="border-color:#ffffff"><!-- wp:jinr-blocks/designtitle {"mainText":"News","subText":"新着記事","divText":"News","tagSelect":"div"} -->
	<section class="wp-block-jinr-blocks-designtitle b--jinr-block b--jinr-h2rich d--h2rich-left d--h2rich-style1 d--titledesign-weight-thin d--h2rich-none js--scr-animation" style="border-color:false"><div class="c--h2rich-contents"><span class="a--h2rich-subcopy ef" style="color:false">新着記事</span><div class="a--h2rich-maincopy d--bold ef" style="color:false">News</div></div></section>
	<!-- /wp:jinr-blocks/designtitle -->
	
	<!-- wp:jinr-blocks/postlist {"postNum":3,"pvPaidpostDisplay":true,"listDesign":"d--postlist-newstext","listDesignSp":"d--postlist-newstext-sp","moreLink":"https://jinr-demo.jp/demo-23/category/blocks/","clientId":"8824137d-4035-45c7-a63b-05f7a4b27009","radioAnimation":"d--postlist-animation-fadebyone js--scr-animation","pickupUrl1":"https://jinr-demo.jp/demo-23/producer/","pickupLabelToggle1":true,"pickupLabelText1":"月額マガジン","pickupLabelBgColor1":"#474b7c"} /-->
	
	<!-- wp:tag-cloud {"taxonomy":"category"} /--></div></div><div class="a--background-color" style="background:rgba(255,255,255,0.51)"></div><div class="a--background-image t--round d--background-pattern1" style="opacity:0.29999999999999993;background-size:16.666666666666668%"></div></div>
	<!-- /wp:jinr-blocks/background -->
	
	<!-- wp:jinr-blocks/background {"backgroundBgColor":"rgba(255,255,255,0.51)","backgroundBorderWidth":"d--border-2px","backgroundBorderColor":"#ffffff"} -->
	<div class="wp-block-jinr-blocks-background b--jinr-block b--jinr-background"><div class="o--background-container d--background-design-flat d--background-shadow-s d--border-outset"><div class="c--background-inner d--border-none d--border-2px t--round" style="border-color:#ffffff"><!-- wp:jinr-blocks/designtitle {"mainText":"Popular Post","subText":"当ブログの人気記事","divText":"Popular Post","radioSymbol":"icon","symbolIcon":"v2badge","tagSelect":"div"} -->
	<section class="wp-block-jinr-blocks-designtitle b--jinr-block b--jinr-h2rich d--h2rich-left d--h2rich-style1 d--titledesign-weight-thin d--h2rich-icon js--scr-animation" style="border-color:false"><div class="c--h2rich-decoration"><div class="a--h2rich-icon ef" style="color:false"><i class="jin-icons jin-ifont-v2badge"></i></div></div><div class="c--h2rich-contents"><span class="a--h2rich-subcopy ef" style="color:false">当ブログの人気記事</span><div class="a--h2rich-maincopy d--bold ef" style="color:false">Popular Post</div></div></section>
	<!-- /wp:jinr-blocks/designtitle -->
	
	<!-- wp:jinr-blocks/postlist {"postNum":8,"columnSelect":"4","columnSelectSp":"2","radioDisplayArticles":"pv","moreLink":"https://jinr-demo.jp/demo-23/category/blocks/","clientId":"e44112c5-be02-49ea-b56b-048014c62b1f","radioAnimation":"d--postlist-animation-fadebyone js--scr-animation","radioHover":"d--postlist-hover-zoom"} /--></div></div><div class="a--background-color" style="background:rgba(255,255,255,0.51)"></div><div class="a--background-image t--round d--background-pattern1" style="opacity:0.29999999999999993;background-size:16.666666666666668%"></div></div>
	<!-- /wp:jinr-blocks/background --></div></section></section>
	<!-- /wp:jinr-blocks/fullwidth -->
	
	<!-- wp:jinr-blocks/profile -->
	<div class="wp-block-jinr-blocks-profile b--jinr-profile-container">[jinr_profile design="d--profile-style1" color="d--theme-color" sns_display="on"]</div>
	<!-- /wp:jinr-blocks/profile -->';

	if ($frontpageslug == 'demo#6') {
		$pageupdatearry = array(
			'ID'            => $frontpageID,
		);
		wp_update_post($pageupdatearry);
		update_option('show_on_front', 'page');
		update_option('page_on_front', $frontpageID);
	} else {
		// 新規作成する場合
		$pagepresetarry = array(
			'post_title'    => 'デモプリセット記事 #6',
			'post_content'  => $presetContents,
			'post_name'     => 'demo#6',
			'post_status'   => 'publish',
			'post_type'     => 'page',
			'page_template' => 'template-full-width.php',
		);
		$presetId = wp_insert_post($pagepresetarry);
		if ($presetId != 0) {
			update_post_meta($presetId, '_jinr_noindex_display', 1);
		};
		update_option('show_on_front', 'page');
		update_option('page_on_front', $presetId);
	}
	$query['autofocus[section]'] = 'jinr__design_preset_section';
	$presetsection = add_query_arg($query, admin_url('customize.php'));
	wp_redirect($presetsection);
	exit;
}
function jinr_preset_demo107()
{
	$preset_num = '107';
	update_option('preset_data', 107);
	jinr_export_json_exclude($preset_num);
	$homeURL = esc_url(home_url('/'));


	// 任意の記事を作成する
	$frontpageID    = get_option('page_on_front');
	$frontpageslug  = get_post_field('post_name', $frontpageID);
	$presetContents = '<!-- wp:jinr-blocks/fullwidth {"fullWidthBgColor":"#f5faf8"} -->
	<section class="wp-block-jinr-blocks-fullwidth b--jinr-block b--jinr-fullwidth-container"><section class="b--jinr-fullwidth" style="background-color:#f5faf8"><div class="d--fullwidth-max d--fullwidth-pad0 d--fullwidth-pad0-sp t--main-width" style="color:false"><!-- wp:jinr-blocks/background {"backgroundBgColor":"rgba(255,255,255,0.51)","backgroundBorderWidth":"d--border-2px","backgroundBorderColor":"#ffffff"} -->
	<div class="wp-block-jinr-blocks-background b--jinr-block b--jinr-background"><div class="o--background-container d--background-design-flat d--background-shadow-s d--border-outset"><div class="c--background-inner d--border-none d--border-2px t--round" style="border-color:#ffffff"><!-- wp:jinr-blocks/designtitle {"mainText":"NEWS","subText":"新着記事","divText":"NEWS","symbolIcon":"v2clipboard"} -->
	<section class="wp-block-jinr-blocks-designtitle b--jinr-block b--jinr-h2rich d--h2rich-left d--h2rich-style1 d--titledesign-weight-thin d--h2rich-none js--scr-animation" style="border-color:false"><div class="c--h2rich-contents"><span class="a--h2rich-subcopy ef" style="color:false">新着記事</span><h2 class="a--h2rich-maincopy d--bold ef" style="color:false">NEWS</h2></div></section>
	<!-- /wp:jinr-blocks/designtitle -->
	
	<!-- wp:jinr-blocks/postlist {"postNum":3,"listDesign":"d--postlist-newstext","listDesignSp":"d--postlist-newstext-sp","columnSelect":"2","moreLink":"https://jinr-demo.jp/demo-9/category/blocks/","clientId":"65e30948-c746-4f0d-bfe8-97ff2b626bf5","radioAnimation":"d--postlist-animation-fadebyone js--scr-animation","radioHover":"d--postlist-hover-fade"} /-->
	
	<!-- wp:tag-cloud {"taxonomy":"category"} /--></div></div><div class="a--background-color" style="background:rgba(255,255,255,0.51)"></div><div class="a--background-image t--round d--background-pattern1" style="opacity:0.29999999999999993;background-size:16.666666666666668%"></div></div>
	<!-- /wp:jinr-blocks/background -->
	
	<!-- wp:jinr-blocks/background {"backgroundBgColor":"rgba(255,255,255,0.51)","backgroundBorderWidth":"d--border-2px","backgroundBorderColor":"#ffffff"} -->
	<div class="wp-block-jinr-blocks-background b--jinr-block b--jinr-background"><div class="o--background-container d--background-design-flat d--background-shadow-s d--border-outset"><div class="c--background-inner d--border-none d--border-2px t--round" style="border-color:#ffffff"><!-- wp:jinr-blocks/designtitle {"mainText":"Popular Post","subText":"当ブログの人気記事","divText":"Popular Post","symbolIcon":"v2clipboard"} -->
	<section class="wp-block-jinr-blocks-designtitle b--jinr-block b--jinr-h2rich d--h2rich-left d--h2rich-style1 d--titledesign-weight-thin d--h2rich-none js--scr-animation" style="border-color:false"><div class="c--h2rich-contents"><span class="a--h2rich-subcopy ef" style="color:false">当ブログの人気記事</span><h2 class="a--h2rich-maincopy d--bold ef" style="color:false">Popular Post</h2></div></section>
	<!-- /wp:jinr-blocks/designtitle -->
	
	<!-- wp:jinr-blocks/postlist {"postNum":8,"columnSelect":"4","columnSelectSp":"2","radioDisplayArticles":"pv","moreLink":"https://jinr-demo.jp/demo-9/category/blocks/","clientId":"70f89460-d84d-4314-aae6-54cf22765e42","radioAnimation":"d--postlist-animation-fadebyone js--scr-animation","radioHover":"d--postlist-hover-zoom","pvPaidPrice1":"1980円"} /--></div></div><div class="a--background-color" style="background:rgba(255,255,255,0.51)"></div><div class="a--background-image t--round d--background-pattern1" style="opacity:0.29999999999999993;background-size:16.666666666666668%"></div></div>
	<!-- /wp:jinr-blocks/background --></div></section></section>
	<!-- /wp:jinr-blocks/fullwidth -->
	
	<!-- wp:jinr-blocks/profile -->
	<div class="wp-block-jinr-blocks-profile b--jinr-profile-container">[jinr_profile design="d--profile-style1" color="d--theme-color" sns_display="on"]</div>
	<!-- /wp:jinr-blocks/profile -->';

	if ($frontpageslug == 'demo#7') {
		$pageupdatearry = array(
			'ID'            => $frontpageID,
		);
		wp_update_post($pageupdatearry);
		update_option('show_on_front', 'page');
		update_option('page_on_front', $frontpageID);
	} else {
		// 新規作成する場合
		$pagepresetarry = array(
			'post_title'    => 'デモプリセット記事 #7',
			'post_content'  => $presetContents,
			'post_name'     => 'demo#7',
			'post_status'   => 'publish',
			'post_type'     => 'page',
			'page_template' => 'template-full-width.php',
		);
		$presetId = wp_insert_post($pagepresetarry);
		if ($presetId != 0) {
			update_post_meta($presetId, '_jinr_noindex_display', 1);
		};
		update_option('show_on_front', 'page');
		update_option('page_on_front', $presetId);
	}
	$query['autofocus[section]'] = 'jinr__design_preset_section';
	$presetsection = add_query_arg($query, admin_url('customize.php'));
	wp_redirect($presetsection);
	exit;
}
function jinr_preset_demo108()
{
	$preset_num = '108';
	update_option('preset_data', 108);
	jinr_export_json_exclude($preset_num);
	$homeURL = esc_url(home_url('/'));


	// 任意の記事を作成する
	$frontpageID    = get_option('page_on_front');
	$frontpageslug  = get_post_field('post_name', $frontpageID);
	$presetContents = '<!-- wp:jinr-blocks/fullwidth {"fullWidthBgColor":"#edf1f8","fullWidthBgColorTransparent":83,"fullWidthBgColorDesign":"blur","fullWidthBlurlebel":1,"fullWidthParallax":"d--fullwidth-parallax-on"} -->
	<section class="wp-block-jinr-blocks-fullwidth b--jinr-block b--jinr-fullwidth-container"><section class="b--jinr-fullwidth" style="background-color:#edf1f8"><div class="d--fullwidth-max d--fullwidth-pad0 d--fullwidth-pad0-sp t--main-width" style="color:false"><!-- wp:jinr-blocks/background {"backgroundBgColor":"rgba(255,255,255,0.51)","backgroundBorderWidth":"d--border-2px","backgroundBorderColor":"#ffffff","backgroundOpacity":78,"backgroundSize":3} -->
	<div class="wp-block-jinr-blocks-background b--jinr-block b--jinr-background"><div class="o--background-container d--background-design-flat d--background-shadow-s d--border-outset"><div class="c--background-inner d--border-none d--border-2px t--round" style="border-color:#ffffff"><!-- wp:jinr-blocks/designtitle {"mainText":"News","subText":"新着記事","divText":"News","symbolIcon":"v2graph","subTextColor":"#d2d588","tagSelect":"div"} -->
	<section class="wp-block-jinr-blocks-designtitle b--jinr-block b--jinr-h2rich d--h2rich-left d--h2rich-style1 d--titledesign-weight-thin d--h2rich-none js--scr-animation" style="border-color:false"><div class="c--h2rich-contents"><span class="a--h2rich-subcopy ef" style="color:#d2d588">新着記事</span><div class="a--h2rich-maincopy d--bold ef" style="color:false">News</div></div></section>
	<!-- /wp:jinr-blocks/designtitle -->
	
	<!-- wp:jinr-blocks/postlist {"postNum":3,"listDesign":"d--postlist-newstext","listDesignSp":"d--postlist-newstext-sp","columnSelect":"2","displayCategory":"3","moreLink":"https://jinr-demo.jp/demo-7/category/feature-2/","clientId":"e80f3fbf-1e16-4b3e-947d-3321b7523d4f","radioAnimation":"d--postlist-animation-fadebyone js--scr-animation","radioHover":"d--postlist-hover-zoom"} /-->
	
	<!-- wp:tag-cloud {"taxonomy":"category"} /--></div></div><div class="a--background-color" style="background:rgba(255,255,255,0.51)"></div><div class="a--background-image t--round d--background-pattern1" style="opacity:0.21999999999999997;background-size:1%"></div></div>
	<!-- /wp:jinr-blocks/background -->
	
	<!-- wp:jinr-blocks/background {"backgroundBgColor":"rgba(255,255,255,0.51)","backgroundBorderWidth":"d--border-2px","backgroundBorderColor":"#ffffff","backgroundOpacity":78,"backgroundSize":3} -->
	<div class="wp-block-jinr-blocks-background b--jinr-block b--jinr-background"><div class="o--background-container d--background-design-flat d--background-shadow-s d--border-outset"><div class="c--background-inner d--border-none d--border-2px t--round" style="border-color:#ffffff"><!-- wp:jinr-blocks/designtitle {"mainText":"Popular Post","subText":"人気記事","divText":"Popular Post","symbolIcon":"v2graph","subTextColor":"#d2d588","tagSelect":"div"} -->
	<section class="wp-block-jinr-blocks-designtitle b--jinr-block b--jinr-h2rich d--h2rich-left d--h2rich-style1 d--titledesign-weight-thin d--h2rich-none js--scr-animation" style="border-color:false"><div class="c--h2rich-contents"><span class="a--h2rich-subcopy ef" style="color:#d2d588">人気記事</span><div class="a--h2rich-maincopy d--bold ef" style="color:false">Popular Post</div></div></section>
	<!-- /wp:jinr-blocks/designtitle -->
	
	<!-- wp:jinr-blocks/postlist {"postNum":8,"columnSelect":"4","columnSelectSp":"2","radioDisplayArticles":"pv","moreLink":"https://jinr-demo.jp/demo-7/category/blocks/","clientId":"378868c6-85e5-4dda-b71d-7d8e443d9369","radioAnimation":"d--postlist-animation-fadebyone js--scr-animation","radioHover":"d--postlist-hover-zoom"} /--></div></div><div class="a--background-color" style="background:rgba(255,255,255,0.51)"></div><div class="a--background-image t--round d--background-pattern1" style="opacity:0.21999999999999997;background-size:1%"></div></div>
	<!-- /wp:jinr-blocks/background --></div></section></section>
	<!-- /wp:jinr-blocks/fullwidth -->
	
	<!-- wp:jinr-blocks/profile -->
	<div class="wp-block-jinr-blocks-profile b--jinr-profile-container">[jinr_profile design="d--profile-style1" color="d--theme-color" sns_display="on"]</div>
	<!-- /wp:jinr-blocks/profile -->';

	if ($frontpageslug == 'demo#8') {
		$pageupdatearry = array(
			'ID'            => $frontpageID,
		);
		wp_update_post($pageupdatearry);
		update_option('show_on_front', 'page');
		update_option('page_on_front', $frontpageID);
	} else {
		// 新規作成する場合
		$pagepresetarry = array(
			'post_title'    => 'デモプリセット記事 #8',
			'post_content'  => $presetContents,
			'post_name'     => 'demo#8',
			'post_status'   => 'publish',
			'post_type'     => 'page',
			'page_template' => 'template-full-width.php',
		);
		$presetId = wp_insert_post($pagepresetarry);
		if ($presetId != 0) {
			update_post_meta($presetId, '_jinr_noindex_display', 1);
		};
		update_option('show_on_front', 'page');
		update_option('page_on_front', $presetId);
	}
	$query['autofocus[section]'] = 'jinr__design_preset_section';
	$presetsection = add_query_arg($query, admin_url('customize.php'));
	wp_redirect($presetsection);
	exit;
}



/**
 * デモインポートクラス
 */
class Jinr_Demo_Import_Control extends WP_Customize_Control
{
	/**
	 * ID
	 *
	 * @var string
	 */
	/**
	 * コンテント出力
	 */
	public function render_content()
	{
		switch ($this->type) {
			case 'demo101': ?>
				<div class="jinr-demo-import">
					<?php $_SESSION['key101'] = '4Pf$E,PxXgp9iPAJ7_P9Bgc#vR%D7JQB'; //この文字列何？ 
					?>
					<form class="demopreset-buttons" action="" method="post">
						<input type="hidden" name="key101" value="<?php echo htmlspecialchars($_SESSION['key101'], ENT_QUOTES); ?>">
						<button type="submit" class="jinr-ctmzr-button import-button button" name="jinr-demo-preset101" value="DEMO IMPORT#1"><i class="jif jin-icons jin-ifont-arrowbcircle" aria-hidden="true"></i><span>Download</span></button>
						<div class="jinr-ctmzr-button demo-button button"><a href="https://jinr-demo.jp/demo-2/" target="_blank"><i class="jif jin-icons jin-ifont-v2pc" aria-hidden="true"></i><span>Preview</span></a></div>
					</form>
				</div>
				<?php break; ?>
			<?php
			case 'demo102': ?>
				<div class="jinr-demo-import">
					<?php $_SESSION['key102'] = 'YjBeJNQxpdppb2,kgz5na,i)z4-pb8GH'; //この文字列何？ 
					?>
					<form class="demopreset-buttons" action="" method="post">
						<input type="hidden" name="key102" value="<?php echo htmlspecialchars($_SESSION['key102'], ENT_QUOTES); ?>">
						<button type="submit" class="jinr-ctmzr-button import-button button" name="jinr-demo-preset102" value="DEMO IMPORT#2"><i class="jif jin-icons jin-ifont-arrowbcircle" aria-hidden="true"></i><span>Download</span></button>
						<div class="jinr-ctmzr-button demo-button button"><a href="https://jinr-demo.jp/demo-21/" target="_blank"><i class="jif jin-icons jin-ifont-v2pc" aria-hidden="true"></i><span>Preview</span></a></div>
					</form>
				</div>
				<?php break; ?>
			<?php
			case 'demo103': ?>
				<div class="jinr-demo-import">
					<?php $_SESSION['key103'] = '3!a*,93uV*A6J%_.Y)WbgqYB7#(TQw)&'; //この文字列何？ 
					?>
					<form class="demopreset-buttons" action="" method="post">
						<input type="hidden" name="key103" value="<?php echo htmlspecialchars($_SESSION['key103'], ENT_QUOTES); ?>">
						<button type="submit" class="jinr-ctmzr-button import-button button" name="jinr-demo-preset103" value="DEMO IMPORT#3"><i class="jif jin-icons jin-ifont-arrowbcircle" aria-hidden="true"></i><span>Download</span></button>
						<div class="jinr-ctmzr-button demo-button button"><a href="https://jinr-demo.jp/demo-16/" target="_blank"><i class="jif jin-icons jin-ifont-v2pc" aria-hidden="true"></i><span>Preview</span></a></div>
					</form>
				</div>
				<?php break; ?>
			<?php
			case 'demo104': ?>
				<div class="jinr-demo-import">
					<?php $_SESSION['key104'] = '47ge4s4RaCm2fmKN-h%.5sRxLGaxX&BB'; //この文字列何？ 
					?>
					<form class="demopreset-buttons" action="" method="post">
						<input type="hidden" name="key104" value="<?php echo htmlspecialchars($_SESSION['key104'], ENT_QUOTES); ?>">
						<button type="submit" class="jinr-ctmzr-button import-button button" name="jinr-demo-preset104" value="DEMO IMPORT#4"><i class="jif jin-icons jin-ifont-arrowbcircle" aria-hidden="true"></i><span>Download</span></button>
						<div class="jinr-ctmzr-button demo-button button"><a href="https://jinr-demo.jp/demo-13/" target="_blank"><i class="jif jin-icons jin-ifont-v2pc" aria-hidden="true"></i><span>Preview</span></a></div>
					</form>
				</div>
				<?php break; ?>
			<?php
			case 'demo105': ?>
				<div class="jinr-demo-import">
					<?php $_SESSION['key105'] = 'NnQ6a*k*X2E&2S$T$~PFJmNhw_7Nq8S~'; //この文字列何？ 
					?>
					<form class="demopreset-buttons" action="" method="post">
						<input type="hidden" name="key105" value="<?php echo htmlspecialchars($_SESSION['key105'], ENT_QUOTES); ?>">
						<button type="submit" class="jinr-ctmzr-button import-button button" name="jinr-demo-preset105" value="DEMO IMPORT#5"><i class="jif jin-icons jin-ifont-arrowbcircle" aria-hidden="true"></i><span>Download</span></button>
						<div class="jinr-ctmzr-button demo-button button"><a href="https://jinr-demo.jp/demo-5/" target="_blank"><i class="jif jin-icons jin-ifont-v2pc" aria-hidden="true"></i><span>Preview</span></a></div>
					</form>
				</div>
				<?php break; ?>
			<?php
			case 'demo106': ?>
				<div class="jinr-demo-import">
					<?php $_SESSION['key106'] = 'qrMBZMaaQi~eUjuCecEuhcW.Um|P2v4.'; //この文字列何？ 
					?>
					<form class="demopreset-buttons" action="" method="post">
						<input type="hidden" name="key106" value="<?php echo htmlspecialchars($_SESSION['key106'], ENT_QUOTES); ?>">
						<button type="submit" class="jinr-ctmzr-button import-button button" name="jinr-demo-preset106" value="DEMO IMPORT#6"><i class="jif jin-icons jin-ifont-arrowbcircle" aria-hidden="true"></i><span>Download</span></button>
						<div class="jinr-ctmzr-button demo-button button"><a href="https://jinr-demo.jp/demo-23/" target="_blank"><i class="jif jin-icons jin-ifont-v2pc" aria-hidden="true"></i><span>Preview</span></a></div>
					</form>
				</div>
				<?php break; ?>
			<?php
			case 'demo107': ?>
				<div class="jinr-demo-import">
					<?php $_SESSION['key107'] = 'zYi(sau$wXvqWcfiPYh5|hSE,~xnf$XC'; //この文字列何？ 
					?>
					<form class="demopreset-buttons" action="" method="post">
						<input type="hidden" name="key107" value="<?php echo htmlspecialchars($_SESSION['key107'], ENT_QUOTES); ?>">
						<button type="submit" class="jinr-ctmzr-button import-button button" name="jinr-demo-preset107" value="DEMO IMPORT#7"><i class="jif jin-icons jin-ifont-arrowbcircle" aria-hidden="true"></i><span>Download</span></button>
						<div class="jinr-ctmzr-button demo-button button"><a href="https://jinr-demo.jp/demo-9/" target="_blank"><i class="jif jin-icons jin-ifont-v2pc" aria-hidden="true"></i><span>Preview</span></a></div>
					</form>
				</div>
				<?php break; ?>
			<?php
			case 'demo108': ?>
				<div class="jinr-demo-import">
					<?php $_SESSION['key108'] = 'BMaAKZav,(kgprPxMsN!bWN)p9B&E/_q'; //この文字列何？ 
					?>
					<form class="demopreset-buttons" action="" method="post">
						<input type="hidden" name="key108" value="<?php echo htmlspecialchars($_SESSION['key108'], ENT_QUOTES); ?>">
						<button type="submit" class="jinr-ctmzr-button import-button button" name="jinr-demo-preset108" value="DEMO IMPORT#8"><i class="jif jin-icons jin-ifont-arrowbcircle" aria-hidden="true"></i><span>Download</span></button>
						<div class="jinr-ctmzr-button demo-button button"><a href="https://jinr-demo.jp/demo-7/" target="_blank"><i class="jif jin-icons jin-ifont-v2pc" aria-hidden="true"></i><span>Preview</span></a></div>
					</form>
				</div>
				<?php break; ?>
			<?php
			case 'demo0': ?>
				<div class="jinr-demo-import">
					<?php $_SESSION['key0'] = '.6YY2FPQkyeaMSwWZN(X#bTGY)iZTwR#'; ?>
					<form class="demopreset-buttons" action="" method="post">
						<input type="hidden" name="key0" value="<?php echo htmlspecialchars($_SESSION['key0'], ENT_QUOTES); ?>">
						<button type="submit" class="jinr-ctmzr-button import-button button" name="jinr-demo-preset0" value="DEMO IMPORT0"><i class="jif jin-icons jin-ifont-arrowbcircle" aria-hidden="true"></i><span>Download</span></button>
						<!--<div class="jinr-ctmzr-button demo-button button"><a href="https://jinr-demo.jp/demo-22" target="_blank"><i class="jif jin-icons jin-ifont-v2pc" aria-hidden="true"></i><span>Preview</span></a></div>-->
					</form>
				</div>
				<?php break; ?>
			<?php
			case 'demo1': ?>
				<div class="jinr-demo-import">
					<?php $_SESSION['key1'] = 'JHK~AwM#$8p)hg|2-wt$WB/qXMwq.*bB'; ?>
					<form class="demopreset-buttons" action="" method="post">
						<input type="hidden" name="key1" value="<?php echo htmlspecialchars($_SESSION['key1'], ENT_QUOTES); ?>">
						<button type="submit" class="jinr-ctmzr-button import-button button" name="jinr-demo-preset1" value="DEMO IMPORT1"><i class="jif jin-icons jin-ifont-arrowbcircle" aria-hidden="true"></i><span>Download</span></button>
						<div class="jinr-ctmzr-button demo-button button"><a href="https://jinr-demo.jp/demo-1/" target="_blank"><i class="jif jin-icons jin-ifont-v2pc" aria-hidden="true"></i><span>Preview</span></a></div>
					</form>
				</div>
				<?php break; ?>

			<?php
			case 'demo2': ?>
				<div class="jinr-demo-import">
					<?php $_SESSION['key2'] = '!%)ec3C8MaE-_24!Z$2wupTL.yTL+nDe'; ?>
					<form class="demopreset-buttons" action="" method="post">
						<input type="hidden" name="key2" value="<?php echo htmlspecialchars($_SESSION['key2'], ENT_QUOTES); ?>">
						<button type="submit" class="jinr-ctmzr-button import-button button" name="jinr-demo-preset2" value="DEMO IMPORT2"><i class="jif jin-icons jin-ifont-arrowbcircle" aria-hidden="true"></i><span>Download</span></button>
						<div class="jinr-ctmzr-button demo-button button"><a href="https://jinr-demo.jp/demo-4/" target="_blank"><i class="jif jin-icons jin-ifont-v2pc" aria-hidden="true"></i><span>Preview</span></a></div>
					</form>
				</div>
				<?php break; ?>

			<?php
			case 'demo3': ?>
				<div class="jinr-demo-import">
					<?php $_SESSION['key3'] = ')5#%,RLyV)wCf)U#Nq%Hgg2ZgLfpYmbx'; ?>
					<form class="demopreset-buttons" action="" method="post">
						<input type="hidden" name="key3" value="<?php echo htmlspecialchars($_SESSION['key3'], ENT_QUOTES); ?>">
						<button type="submit" class="jinr-ctmzr-button import-button button" name="jinr-demo-preset3" value="DEMO IMPORT3"><i class="jif jin-icons jin-ifont-arrowbcircle" aria-hidden="true"></i><span>Download</span></button>
						<div class="jinr-ctmzr-button demo-button button"><a href="https://jinr-demo.jp/demo-14/" target="_blank"><i class="jif jin-icons jin-ifont-v2pc" aria-hidden="true"></i><span>Preview</span></a></div>
					</form>
				</div>
				<?php break; ?>

			<?php
			case 'demo4': ?>
				<div class="jinr-demo-import">
					<?php $_SESSION['key4'] = '&ARx.6BuHQ6fe7kS8gFA.PkbD2_4D5DJ'; ?>
					<form class="demopreset-buttons" action="" method="post">
						<input type="hidden" name="key4" value="<?php echo htmlspecialchars($_SESSION['key4'], ENT_QUOTES); ?>">
						<button type="submit" class="jinr-ctmzr-button import-button button" name="jinr-demo-preset4" value="DEMO IMPORT4"><i class="jif jin-icons jin-ifont-arrowbcircle" aria-hidden="true"></i><span>Download</span></button>
						<div class="jinr-ctmzr-button demo-button button"><a href="https://jinr-demo.jp/demo-6" target="_blank"><i class="jif jin-icons jin-ifont-v2pc" aria-hidden="true"></i><span>Preview</span></a></div>
					</form>
				</div>
				<?php break; ?>

			<?php
			case 'demo5': ?>
				<div class="jinr-demo-import">
					<?php $_SESSION['key5'] = 'Eb4MP&*qQtYRK.LW%P~Y$uC*ZU/(#FA_'; ?>
					<form class="demopreset-buttons" action="" method="post">
						<input type="hidden" name="key5" value="<?php echo htmlspecialchars($_SESSION['key5'], ENT_QUOTES); ?>">
						<button type="submit" class="jinr-ctmzr-button import-button button" name="jinr-demo-preset5" value="DEMO IMPORT5"><i class="jif jin-icons jin-ifont-arrowbcircle" aria-hidden="true"></i><span>Download</span></button>
						<div class="jinr-ctmzr-button demo-button button"><a href="https://jinr-demo.jp/demo-8" target="_blank"><i class="jif jin-icons jin-ifont-v2pc" aria-hidden="true"></i><span>Preview</span></a></div>
					</form>
				</div>
				<?php break; ?>

			<?php
			case 'demo6': ?>
				<div class="jinr-demo-import">
					<?php $_SESSION['key6'] = 'hh7RwviKLkST#kd3mb7ts+%2.7eE-aT~'; ?>
					<form class="demopreset-buttons" action="" method="post">
						<input type="hidden" name="key6" value="<?php echo htmlspecialchars($_SESSION['key6'], ENT_QUOTES); ?>">
						<button type="submit" class="jinr-ctmzr-button import-button button" name="jinr-demo-preset6" value="DEMO IMPORT6"><i class="jif jin-icons jin-ifont-arrowbcircle" aria-hidden="true"></i><span>Download</span></button>
						<div class="jinr-ctmzr-button demo-button button"><a href="https://jinr-demo.jp/demo-3" target="_blank"><i class="jif jin-icons jin-ifont-v2pc" aria-hidden="true"></i><span>Preview</span></a></div>
					</form>
				</div>
				<?php break; ?>

			<?php
			case 'demo7': ?>
				<div class="jinr-demo-import">
					<?php $_SESSION['key7'] = '5zVqm&y/5RgfdEGSG7k|fP6cvZk,K#T#'; ?>
					<form class="demopreset-buttons" action="" method="post">
						<input type="hidden" name="key7" value="<?php echo htmlspecialchars($_SESSION['key7'], ENT_QUOTES); ?>">
						<button type="submit" class="jinr-ctmzr-button import-button button" name="jinr-demo-preset7" value="DEMO IMPORT7"><i class="jif jin-icons jin-ifont-arrowbcircle" aria-hidden="true"></i><span>Download</span></button>
						<div class="jinr-ctmzr-button demo-button button"><a href="https://jinr-demo.jp/demo-15" target="_blank"><i class="jif jin-icons jin-ifont-v2pc" aria-hidden="true"></i><span>Preview</span></a></div>
					</form>
				</div>
				<?php break; ?>

			<?php
			case 'demo8': ?>
				<div class="jinr-demo-import">
					<?php $_SESSION['key8'] = 'cPTsS&x8BwNqmH6Rb-bBXQL~-wdV3ac('; ?>
					<form class="demopreset-buttons" action="" method="post">
						<input type="hidden" name="key8" value="<?php echo htmlspecialchars($_SESSION['key8'], ENT_QUOTES); ?>">
						<button type="submit" class="jinr-ctmzr-button import-button button" name="jinr-demo-preset8" value="DEMO IMPORT8"><i class="jif jin-icons jin-ifont-arrowbcircle" aria-hidden="true"></i><span>Download</span></button>
						<div class="jinr-ctmzr-button demo-button button"><a href="https://jinr-demo.jp/demo-17" target="_blank"><i class="jif jin-icons jin-ifont-v2pc" aria-hidden="true"></i><span>Preview</span></a></div>
					</form>
				</div>
				<?php break; ?>

			<?php
			case 'demo9': ?>
				<div class="jinr-demo-import">
					<?php $_SESSION['key9'] = 'HPezdKHSq6Za*f_Z2wy+K7u(&_Wuaj*c'; ?>
					<form class="demopreset-buttons" action="" method="post">
						<input type="hidden" name="key9" value="<?php echo htmlspecialchars($_SESSION['key9'], ENT_QUOTES); ?>">
						<button type="submit" class="jinr-ctmzr-button import-button button" name="jinr-demo-preset9" value="DEMO IMPORT9"><i class="jif jin-icons jin-ifont-arrowbcircle" aria-hidden="true"></i><span>Download</span></button>
						<div class="jinr-ctmzr-button demo-button button"><a href="https://jinr-demo.jp/demo-11" target="_blank"><i class="jif jin-icons jin-ifont-v2pc" aria-hidden="true"></i><span>Preview</span></a></div>
					</form>
				</div>
				<?php break; ?>

			<?php
			case 'demo10': ?>
				<div class="jinr-demo-import">
					<?php $_SESSION['key10'] = 'jw(V3(5.#BQ6Gh#u8/Q|)q%VuiuT-b#.'; ?>
					<form class="demopreset-buttons" action="" method="post">
						<input type="hidden" name="key10" value="<?php echo htmlspecialchars($_SESSION['key10'], ENT_QUOTES); ?>">
						<button type="submit" class="jinr-ctmzr-button import-button button" name="jinr-demo-preset10" value="DEMO IMPORT10"><i class="jif jin-icons jin-ifont-arrowbcircle" aria-hidden="true"></i><span>Download</span></button>
						<div class="jinr-ctmzr-button demo-button button"><a href="https://jinr-demo.jp/demo-12" target="_blank"><i class="jif jin-icons jin-ifont-v2pc" aria-hidden="true"></i><span>Preview</span></a></div>
					</form>
				</div>
				<?php break; ?>

			<?php
			case 'demo11': ?>
				<div class="jinr-demo-import">
					<?php $_SESSION['key11'] = 'tQg#&22TSqY5)*aXN&tLW2/Bxk-|*5mk'; ?>
					<form class="demopreset-buttons" action="" method="post">
						<input type="hidden" name="key11" value="<?php echo htmlspecialchars($_SESSION['key11'], ENT_QUOTES); ?>">
						<button type="submit" class="jinr-ctmzr-button import-button button" name="jinr-demo-preset11" value="DEMO IMPORT11"><i class="jif jin-icons jin-ifont-arrowbcircle" aria-hidden="true"></i><span>Download</span></button>
						<div class="jinr-ctmzr-button demo-button button"><a href="https://jinr-demo.jp/demo-25" target="_blank"><i class="jif jin-icons jin-ifont-v2pc" aria-hidden="true"></i><span>Preview</span></a></div>
					</form>
				</div>
				<?php break; ?>

			<?php
			case 'demo12': ?>
				<div class="jinr-demo-import">
					<?php $_SESSION['key12'] = 'tAK/&q_Qi9LxusYqL_)&R&_/+MZN6~Ni'; ?>
					<form class="demopreset-buttons" action="" method="post">
						<input type="hidden" name="key12" value="<?php echo htmlspecialchars($_SESSION['key12'], ENT_QUOTES); ?>">
						<button type="submit" class="jinr-ctmzr-button import-button button" name="jinr-demo-preset12" value="DEMO IMPORT12"><i class="jif jin-icons jin-ifont-arrowbcircle" aria-hidden="true"></i><span>Download</span></button>
						<div class="jinr-ctmzr-button demo-button button"><a href="https://jinr-demo.jp/demo-24" target="_blank"><i class="jif jin-icons jin-ifont-v2pc" aria-hidden="true"></i><span>Preview</span></a></div>
					</form>
				</div>
				<?php break; ?>

			<?php
			case 'demo13': ?>
				<div class="jinr-demo-import">
					<?php $_SESSION['key13'] = 'pgDt%/6v4DehP35nMM7i!xrZkGdS~k.8'; ?>
					<form class="demopreset-buttons" action="" method="post">
						<input type="hidden" name="key13" value="<?php echo htmlspecialchars($_SESSION['key13'], ENT_QUOTES); ?>">
						<button type="submit" class="jinr-ctmzr-button import-button button" name="jinr-demo-preset13" value="DEMO IMPORT13"><i class="jif jin-icons jin-ifont-arrowbcircle" aria-hidden="true"></i><span>Download</span></button>
						<div class="jinr-ctmzr-button demo-button button"><a href="https://jinr-demo.jp/demo-19" target="_blank"><i class="jif jin-icons jin-ifont-v2pc" aria-hidden="true"></i><span>Preview</span></a></div>
					</form>
				</div>
				<?php break; ?>

			<?php
			case 'demo14': ?>
				<div class="jinr-demo-import">
					<?php $_SESSION['key14'] = 'wPnB4m+(JeDQ2sCbgZ!5CYs*7AUF6HtT'; ?>
					<form class="demopreset-buttons" action="" method="post">
						<input type="hidden" name="key14" value="<?php echo htmlspecialchars($_SESSION['key14'], ENT_QUOTES); ?>">
						<button type="submit" class="jinr-ctmzr-button import-button button" name="jinr-demo-preset14" value="DEMO IMPORT14"><i class="jif jin-icons jin-ifont-arrowbcircle" aria-hidden="true"></i><span>Download</span></button>
						<div class="jinr-ctmzr-button demo-button button"><a href="https://jinr-demo.jp/demo-20" target="_blank"><i class="jif jin-icons jin-ifont-v2pc" aria-hidden="true"></i><span>Preview</span></a></div>
					</form>
				</div>
				<?php break; ?>

			<?php
			case 'demo15': ?>
				<div class="jinr-demo-import">
					<?php $_SESSION['key15'] = 'S4e#E|cT~u2mhAasivt*#/ETTy+*)jEm'; ?>
					<form class="demopreset-buttons" action="" method="post">
						<input type="hidden" name="key15" value="<?php echo htmlspecialchars($_SESSION['key15'], ENT_QUOTES); ?>">
						<button type="submit" class="jinr-ctmzr-button import-button button" name="jinr-demo-preset15" value="DEMO IMPORT15"><i class="jif jin-icons jin-ifont-arrowbcircle" aria-hidden="true"></i><span>Download</span></button>
						<div class="jinr-ctmzr-button demo-button button"><a href="https://jinr-demo.jp/demo-22" target="_blank"><i class="jif jin-icons jin-ifont-v2pc" aria-hidden="true"></i><span>Preview</span></a></div>
					</form>
				</div>
				<?php break; ?>
<?php }
	}
}
