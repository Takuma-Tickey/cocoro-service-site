<?php

/**
 * Custom Functions
 *
 * @package Felt
 */
if (!function_exists('jinr_setup')) :
	/**
	 * テーマのデフォルトとサポートを登録する。
	 */
	function jinr_setup()
	{
		// add eye catch image
		add_theme_support('post-thumbnails');
		set_post_thumbnail_size(150, 150, true);

		// カスタムメニュー対応
		add_theme_support('menus');
		register_nav_menus(
			array(
				'glonavi'        => 'グローバルナビゲーション',
				'hamburger'      => 'ハンバーガーメニュー',
				'footer-menu'    => 'フッターメニュー',
			)
		);

		// add images size
		add_image_size('thumbnail_size', 320, 320, true);
		add_image_size('small_size', 320, 180, true);
		add_image_size('medium_size', 640, 360, true);
		add_image_size('large_size', 1360, 765, true);
	}
endif;
add_action('after_setup_theme', 'jinr_setup');

// noimageの設定
function jinr_noimage_url($size)
{
	//デフォルト値
	$noimage_url = jinr__noimage_url();
	if (jinr__noimage_url() == null) {
		$noimage_url = get_template_directory_uri() . '/lib/img/noimage.png';
	}

	//拡張子の前と後で分割 (jpeg/jpg/png/gif/webpのみ対応)正規表現を使う
	$extension = strrchr($noimage_url, '.');
	$file_name_url = explode($extension, $noimage_url);
	$file_name_url[0] = strpos($file_name_url[0], '-scaled') ? str_replace('-scaled', '', $file_name_url[0]) : $file_name_url[0];

	if ($size == 'thumbnail') {
		$jinr_noimage_url = $file_name_url[0] . '-150x150' . $extension;
	} elseif ($size == 'small') {
		$jinr_noimage_url = $file_name_url[0] . '-320x180' . $extension;
	} elseif ($size == 'medium') {
		$jinr_noimage_url = $file_name_url[0] . '-640x360' . $extension;
	} elseif ($size == 'large') {
		$jinr_noimage_url = $file_name_url[0] . '-1520x855' . $extension;
	} else {
		$jinr_noimage_url = $noimage_url;
	}
	//画像が存在するかどうかチェック
	if (file_exists($jinr_noimage_url)) {
		return $jinr_noimage_url;
	} else {
		if ($size == 'thumbnail') {
			$jinr_noimage_url = $file_name_url[0] . '-150x150' . $extension;
		} elseif ($size == 'small') {
			$jinr_noimage_url = $file_name_url[0] . '-320x180' . $extension;
		} elseif ($size == 'medium') {
			$jinr_noimage_url = $file_name_url[0] . '-640x360' . $extension;
		} elseif ($size == 'large') {
			$jinr_noimage_url = $file_name_url[0] . '-1520x855' . $extension;
		} else {
			$jinr_noimage_url = $noimage_url;
		}
		return $jinr_noimage_url;
	}
}



// カスタムカテゴリーのタイトル取得
function jinr_category_title()
{
	global $post;

	$t_id       = get_category(intval(get_query_var('cat')))->term_id;
	$cat_class  = get_category($t_id);
	$cat_option = get_option($t_id);

	if (isset($cat_option['cps_meta_title']) && $cat_option['cps_meta_title'] !== '') {
		$category_title = $cat_option['cps_meta_title'];
	} else {
		$category_title = $cat_class->name;
	}

	return esc_html($category_title);
}

// カスタムカテゴリーの色取得
function jinr_category_color()
{
	$category = get_the_category();
	foreach ($category as $cate) {
		$cat_data = get_option(intval($cate->term_id));
		if (isset($cat_data['cps_meta_category_color'])) {
			$cat_color = esc_html($cat_data['cps_meta_category_color']);
		}
		if (isset($cat_color)) {
			echo $cat_color;
		}
	}
}

// カスタムカテゴリーのディスクリプション取得
function jinr_category_desc()
{
	global $post;

	$t_id       = get_category(intval(get_query_var('cat')))->term_id;
	$cat_class  = get_category($t_id);
	$cat_desc  = get_category($t_id)->category_description;
	$cat_option = get_option($t_id);
	$category_desc = "";

	if (isset($cat_desc) && $cat_desc !== '') {
		$category_desc = $cat_desc;
	}
	return esc_html($category_desc);
}



// カスタムメニューに「説明」を反映
function jinr_description_in_nav_menu($item_output, $item, $depth, $args)
{
	if (!empty($item->description)) {
		$item_output = str_replace('">' . $args->link_before . $item->title, '">' . $args->link_before . $item->title . '<span class="a--menu-subtext">' . $item->description . '</span>', $item_output);
	}

	return $item_output;
}
add_filter('walker_nav_menu_start_el', 'jinr_description_in_nav_menu', 10, 4);


// HEXをRGBに変換
function jinr_hex_to_rgb($hex)
{
	if (substr($hex, 0, 1) == '#') {
		$hex = substr($hex, 1);
	}
	if (strlen($hex) == 3) {
		$hex = substr($hex, 0, 1) . substr($hex, 0, 1) . substr($hex, 1, 1) . substr($hex, 1, 1) . substr($hex, 2, 1) . substr($hex, 2, 1);
	}
	return array_map('hexdec', array(substr($hex, 0, 2), substr($hex, 2, 2), substr($hex, 4, 2)));
}

//HEXをHSLに変換
function jinr_hex_to_hsl($hex)
{
	if (substr($hex, 0, 1) === '#') {
		// 先頭の#を削除
		$hex = substr($hex, 1);
	} else {
		// 先頭に#がないとカラーでないと判断して処理を中止
		return;
	}
	if (strlen($hex) === 3) {
		// 3桁の場合6桁に直す.
		$hex = substr($hex, 0, 1) . substr($hex, 0, 1) . substr($hex, 1, 1) . substr($hex, 1, 1) . substr($hex, 2, 1) . substr($hex, 2, 1);
	}
	// hexdecで10進数に変換.
	$rgb = array_map(
		'hexdec',
		[substr($hex, 0, 2), substr($hex, 2, 2), substr($hex, 4, 2)]
	);

	// RGBの数値を0~1の範囲に変換.
	$rgb = array_map(
		function ($part) {
			return $part / 255;
		},
		$rgb
	);

	// ここからRGBをHSLに変換.
	// r,g,bの最大値と最小値を見つける.
	$min = min($rgb);
	$max = max($rgb);

	// 輝度は最大値と最小値を足して2で割って算出.
	$luminace = ($min + $max) / 2;

	if ($max === $min) {
		// 最大値＝最小値の場合、色相と彩度は0.
		$hue        = 0;
		$saturation = 0;
	} else {
		if ($luminace < 0.5) {
			// 輝度が0.5以下の場合の彩度
			$saturation = ($max - $min) / ($max + $min);
		} elseif ($luminace >= 0.5) {
			// 輝度が0.5以上の場合の彩度
			$saturation = ($max - $min) / (2 - $max - $min);
		}
		if ($max === $rgb[0]) {
			// Rが最大の場合の色相
			$hue = ($rgb[1] - $rgb[2]) / ($max - $min);
		} elseif ($max === $rgb[1]) {
			// Gが最大の場合の色相
			$hue = 2 + ($rgb[2] - $rgb[0]) / ($max - $min);
		} elseif ($max === $rgb[2]) {
			// Bが最大の場合の色相
			$hue = 4 + ($rgb[0] - $rgb[1]) / ($max - $min);
		}
		// 色相を°にする.
		$hue = round($hue * 60);
		if ($hue < 0) {
			// 色相が負の値になった場合は360を足して正の値にする.
			$hue = $hue + 360;
		}
		// 彩度を%表記にして四捨五入.
		$saturation = round($saturation * 100);
	}
	// 輝度を%表記にして四捨五入.
	$luminace = round($luminace * 100);

	return array($hue, $saturation, $luminace);
}

//画像URLから高さと幅を取得
function jinr_image_width_height($image_url)
{
	$res = null;
	$path = WP_CONTENT_DIR;
	//wp-contentディレクトリのURL：http://www.example.com/wp-content
	$dir = content_url();
	//URLをローカルパスに置換
	if ($image_url == "") {
		$res = array();
		$res['width'] = "160px";
		$res['height'] = "90px";
		return $res;
		return;
	}
	$image_file = str_replace($dir, $path, $image_url);
	$image_size = getimagesize($image_file);
	if ($image_size) {
		$res = array();
		$res['width'] = $image_size[0];
		$res['height'] = $image_size[1];
		return $res;
	}
}

// 管理画面のbodyに付属するclassのコントロール
function jinr_admin_body_class($classes)
{
	// 英語フォント
	$classes .= ' ' . jinr__round_style() . ' ' . jinr__english_font_style() . ' ' . jinr__font_style();

	// 見出しデザイン
	$classes .= ' ' . jinr__h2_style() . ' ' . jinr__h3_style() . ' ' . jinr__h4_style();

	// 文字サイズ
	$classes .= ' ' . jinr__font_size();

	// デザインコンセプト
	$classes .= ' ' . jinr__design_style();

	// 記事幅
	$classes .= ' ' . jinr__article_width();

	// メインデザイン
	$classes .= ' ' . jinr__main_style();

	// 画像の丸み設定
	$artcile_image_radius = jinr__article_image_setting() == "d--article-image-r-on" ? "d--article-image-r-on" : "";
	$classes .= ' ' . $artcile_image_radius;

	return $classes;
}
add_filter('admin_body_class', 'jinr_admin_body_class');

// #wrapperに付属するclassのコントロール
function jinr_wrapper_class_insert()
{

	// 背景色設定のコントロール
	$color = '';
	if (jinr__bgcolor_type() == 'gradation') {
		$color = jinr__bg_gradation_select();
	}

	$bgrepeat = "";
	if (jinr__bg_image_repeat() !== 'on') {
		$bgrepeat = jinr__bg_image_repeat();
	}

	//　デザインコンセプト
	$design = jinr__design_style();

	// 固定ヘッダー設定
	$round = jinr__round_style();

	// 日本語フォント
	$font = jinr__font_style();

	// 英語フォント
	$font_en = jinr__english_font_style();

	// 画像の丸み設定
	$artcile_image_radius = jinr__article_image_setting() == "d--article-image-r-on" ? "d--article-image-r-on" : "";

	// アニメーション設定
	$animation_setting = jinr__animation_general_toggle() == 'off' ? '' : 'd--animation-general-on';
	$animation_setting .= jinr__animation_designtitle_select() == 'off' ? '' : ' ' . jinr__animation_designtitle_select();
	$animation_setting .= jinr__animation_column_select() == 'off' ? '' : ' ' . jinr__animation_column_select();
	//$animation_setting .= jinr__animation_timeline_select() == 'off' ? '' : ' ' . jinr__animation_timeline_select();

	if (is_category()) {
		//全固定ページID取得
		$page_ids = get_posts(array(
			'posts_per_page' => -1,
			'fields'         => 'ids',
			'post_type'      => 'page',
		));

		//変数初期値設定
		$edit_category_ids = array();
		$target_page_id = "";
		$counter = 0;
		$pair_ids = array();

		foreach ($page_ids as $page_id) {
			$jinr_category = get_post_meta($page_id, '_jinr_category', true);

			//現在のカテゴリーページID
			$cat_id = get_query_var('cat');
			$edit_category_ids[] = $jinr_category;

			$pair_ids += array(
				$page_ids[$counter] => $edit_category_ids[$counter],
			);
			$counter++;
		}

		$target_page_id = array_search($cat_id, $pair_ids);
		$jinr_category_edit_toggle = get_post_meta($target_page_id, '_jinr_category_edit', true);
		$custom_category = get_post($target_page_id);
		$page_template = get_post_meta($target_page_id, '_wp_page_template', true);
		$page_template = str_replace('.php', '', $page_template);

		echo $design . ' ' . $color . ' ' . $round . ' ' . $artcile_image_radius . ' ' . $font . ' ' . $font_en . ' ' . $animation_setting . ' ' . $page_template . ' ' . $bgrepeat;
	} else {
		echo $design . ' ' . $color . ' ' . $round . ' ' . $artcile_image_radius . ' ' . $font . ' ' . $font_en . ' ' . $animation_setting . ' ' . $bgrepeat;
	}
}
// #commonHeaderに付属するclassのコントロール
function jinr_commonHeader_class_insert()
{

	// 背景色設定のコントロール
	$color = '';
	if (jinr__header_style() == 'd--header-style-default') {
		if (jinr__header_bgcolor_type() == 'gradation') {
			$color = jinr__header_bg_gradation_select();
		} elseif (jinr__header_bgcolor_type() == 'transparent') {
			$color = 'd--transparent';
		}
	} elseif (jinr__header_style() == 'd--header-style-border') {
		if (jinr__header_bgcolor_type() == 'transparent') {
			$color = 'd--transparent';
		}
	}

	// 固定ヘッダー設定
	$tracking = jinr__header_tracking();

	// レイアウト
	$layout = jinr__header_layout();

	// デザイン
	$design = jinr__header_style();

	// ホバーアクション
	$hover = jinr__glonavi_hover();

	// メインビジュアルとヘッダーを一体化させたスタイル
	$header_style = '';
	if (jinr__main_visual_type() == 'type03-stillimage' && jinr__stillimage_design() == 'd--stillimage-desgin2') {
		if (jinr__stillimage_display() == false) {
			if (is_home() || is_front_page()) {
				$header_style = 'd--commonheader-cover';
			}
		} else {
			$header_style = 'd--commonheader-cover';
		}
	}
	if (jinr__main_visual_type() == 'type04-movie' && jinr__movie_design() == 'd--movie-desgin2') {
		if (is_home() || is_front_page()) {
			$header_style = 'd--commonheader-cover';
		}
	}

	echo $layout . ' ' . $design . ' ' . $hover . ' ' . $color . ' ' . $header_style . ' ' . $tracking;
}
// #mainContentに付属するclassのコントロール
function jinr_mainContent_class_insert()
{
	global $post;

	// 丸み設定
	$round = 't--round';

	// コンテンツエリアデザイン
	$design = jinr__main_style();

	// 記事エリアデザイン
	$article_design = jinr__article_style();

	// カラムデザイン
	$column = '';
	if (is_home() || is_front_page()) {
		if (jinr__home_column_style() == 't--home-one-column' && jinr__post_column_style() == 't--post-one-column') {
			$column = 'd--one-column';
		} elseif (jinr__home_column_style() == 't--home-one-column' && jinr__post_column_style() == 't--post-two-column') {
			$column = 'd--one-column';
		} elseif (jinr__home_column_style() == 't--home-two-column' && jinr__post_column_style() == 't--post-two-column') {
			$column = 'd--two-column';
		} elseif (jinr__home_column_style() == 't--home-two-column' && jinr__post_column_style() == 't--post-one-column') {
			$column = 'd--two-column';
		}
	} else {
		if (jinr__post_column_style() == 't--post-one-column') {
			if (is_single() || is_page()) {
				if (get_post_meta($post->ID, '_jinr_sidebar1col_display', true) == "1") {
					$column = 'd--two-column';
				} else {
					$column = 'd--one-column';
				}
			} else {
				$column = 'd--one-column';
			}
		} elseif (jinr__post_column_style() == 't--post-two-column') {
			if (is_single() || is_page()) {
				if (!get_post_meta($post->ID, '_jinr_sidebar2col_display', true) == "1") {
					$column = 'd--two-column';
				} else {
					$column = 'd--one-column';
				}
			} else {
				$column = 'd--two-column';
			}
		}
	}

	//　記事エリアパターンの設定

	if (is_page_template('template-full-width.php')) {
		echo 'd--one-column ' . $design . ' ' . $article_design . ' ' . $round;
	} else {
		echo $column . ' ' . $article_design . ' ' . $design . ' ' . $round;
	}
}
// #jinrArticleに付属するclassのコントロール
function jinr_jinrArticle_class_insert()
{
	global $post;

	// 記事内のaタグ用class
	$a_class = 'jinr-article';

	// 丸み設定
	$round = 't--round';

	if (jinr__post_column_style() == 't--post-two-column') {
		if (is_single() || is_page()) {
			if (!get_post_meta($post->ID, '_jinr_sidebar2col_display', true) == "1") {
				$article_width = jinr__article_width();
			} else {
				$article_width = '';
			}
		} else {
			$article_width = jinr__article_width();
		}
	} else {
		if (is_single() || is_page()) {
			if (!get_post_meta($post->ID, '_jinr_sidebar1col_display', true) == "1") {
				$article_width = '';
			} else {
				$article_width = jinr__article_width();
			}
		} else {
			$article_width = '';
		}
	}

	// 見出しデザイン
	$h2 = jinr__h2_style();
	$h3 = jinr__h3_style();
	$h4 = jinr__h4_style();

	echo $a_class . ' ' . $article_width . ' ' . $h2 . ' ' . $h3 . ' ' . $h4 . ' ' . $round;
}

// #jinrPostThumbに付属するclassのコントロール
function jinr_jinrPostThumb_class_insert()
{
	global $post;

	if (is_category()) {
		$jinr_pip_youtube = "";
		$post_youtube_url = "";
	} else {
		$jinr_pip_youtube = get_post_meta($post->ID, '_jinr_pip_youtube', true);
		$post_youtube_url = get_post_meta($post->ID, '_jinr_url_youtube', true);
	}
	if (jinr__article_style() == 'd--article-style1') {
		if ($jinr_pip_youtube == 1) {
			echo 'class="' . jinr__article_width() . ' t--round a--youtube-pip"';
			return;
		}
		if ($post_youtube_url != null) {
			echo 'class="' . jinr__article_width() . ' t--round a--youtube-height"';
			return;
		}
		echo 'class="' . jinr__article_width() . ' t--round"';
	}
	if (jinr__main_style() == 'd--main-style-outline') {
		if (jinr__article_style() == 'd--article-style2') {
			if ($jinr_pip_youtube == 1) {
				echo 'class="t--round a--youtube-pip"';
				return;
			}
			if ($post_youtube_url != null) {
				echo 'class="t--round a--youtube-height"';
				return;
			}
		}
	}
	if ($jinr_pip_youtube == 1) {
		echo 'class="' . jinr__article_width() . ' t--round a--youtube-pip"';
		return;
	}
	if ($post_youtube_url != null) {
		echo 'class="' . jinr__article_width() . ' t--round a--youtube-height"';
		return;
	}
}

// #commonFooterに付属するclassのコントロール
function jinr_commonFooter_class_insert()
{

	// 背景色設定のコントロール
	$color = '';
	if (jinr__footer_bgcolor_type() == 'gradation') {
		$color = jinr__footer_bg_gradation_select();
	} elseif (jinr__footer_bgcolor_type() == 'transparent') {
		$color = 'd--transparent';
	}

	echo $color . ' ' . 'd--footer-style1';
}

// #jinrRelatedPostに付属するclassのコントロール
function jinr_jinrRelatedPost_class_insert()
{

	// 背景色設定のコントロール
	$color = '';
	if (jinr__related_post_bgcolor_type() == 'gradation') {
		$color = jinr__related_post_bg_gradation_select();
	} elseif (jinr__related_post_bgcolor_type() == 'transparent') {
		$color = 'd--transparent';
	}

	echo $color;
}


// ページャー
function jinr_pagenation_list_callback()
{
	global $wp_query;
	$current_page = get_query_var('paged');
	$max_pages = $wp_query->max_num_pages;
	$maxlist = 9999;
	$page_links = paginate_links(array(
		'type' => 'array',
		'prev_text' => '<i class="jin-icons in--p jin-ifont-arrowleftm" aria-hidden="true"></i>',
		'next_text' => '<i class="jin-icons in--p jin-ifont-arrowm" aria-hidden="true"></i>',
		'mid_size'  => 3,
		'end_size'  => 1,
		'base'      => str_replace($maxlist, '%#%', esc_url(get_pagenum_link($maxlist))),
		'current'   => max(1, get_query_var('paged')),
		'add_fragment' => '#jinrPostList',
	));
	$firstFound = false;
	if ($page_links != null) {
		$modified_links = array_map(function ($link) use (&$firstFound, $current_page, $max_pages) {
			if (preg_match('/<a[^>]*?>(\d+)<\/a>/', $link, $matches)) {
				$page_number = $matches[1];
				$class = 'c--pagenation-item';
				if (!$firstFound) {
					$firstFound = true;
					$class .= ' a--pagenation-adjust';
				}
				return '<li class="' . $class . '" data-paged="' . $page_number . '">' . $link . '</li>';
			}
			if (preg_match('/<span[^>]*?class="page-numbers current"[^>]*?>(\d+)<\/span>/', $link, $matches)) {
				$page_number = $matches[1];
				$class = 'c--pagenation-item a--pagenation-current';
				if ($current_page == $page_number && $page_number != 2) {
					if ($page_number > 5) {
						if ($max_pages - $current_page <= 4 && $max_pages - $current_page > 1) {
							return '<li class="' . $class . '" data-paged="' . $page_number . '">' . $link . '</li><li class="c--pagenation-item a--pagenation-dots"><span class="page-numbers dots">…</span></li>';
						}
						return '<li class="' . $class . '" data-paged="' . $page_number . '">' . $link . '</li>';
					}
					return '<li class="c--pagenation-item a--pagenation-dots"><span class="page-numbers dots">…</span></li><li class="' . $class . '" data-paged="' . $page_number . '">' . $link . '</li>';
				} else {
					if ($max_pages - $current_page <= 4 && $max_pages - $current_page > 1) {
						return '<li class="' . $class . '" data-paged="' . $page_number . '">' . $link . '</li><li class="c--pagenation-item a--pagenation-dots"><span class="page-numbers dots">…</span></li>';
					}
				}
				return '<li class="' . $class . '" data-paged="' . $page_number . '">' . $link . '</li>';
			}
			return '<li class="c--pagenation-item">' . $link . '</li>';
		}, $page_links);
		if ($current_page == 2) {
			unset($modified_links[0]);
			$modified_links = array_values($modified_links);
		} elseif ($max_pages - $current_page == 1) {
			array_pop($modified_links);
		}
		for ($i = count($modified_links) - 1; $i >= 0; $i--) {
			if (strpos($modified_links[$i], 'data-paged') !== false) {
				$modified_links[$i] = str_replace('c--pagenation-item', 'c--pagenation-item a--pagenation-adjust', $modified_links[$i]);
				break;
			}
		}
		echo '<ul class="o--pagenation-list">' . implode('', $modified_links) . '</ul>';
	}
}



// コピーライトの自動取得
function jinr_get_copyright_date()
{
	$all_posts  = get_posts('post_status=publish&order=ASC');
	if (!empty($all_posts)) {
		$first_post = $all_posts[0];
		$then       = get_the_date('Y', $first_post);
		$now        = date('Y');
		if ($then < $now) {
			return $then . '–' . $now;
		} else {
			return $then;
		}
	} else {
		// return some default value or handle this case differently
		return date('Y');
	}
}


// 管理バーにJINRマニュアルリンクを追加
function jinr_add_logout_button_in_admin_bar()
{
	global $wp_admin_bar;
	$wp_admin_bar->add_menu(
		array(
			'id'    => 'new_item_in_admin_bar',
			'title' => __('JINRマニュアル'),
			'href'  => 'https://jinr.jp/manual/',
			'meta' => array(
				'target'  => '_blank',
			),
		)
	);
}
add_action('wp_before_admin_bar_render', 'jinr_add_logout_button_in_admin_bar');

// メディアライブラリに画像サイズを登録する
if (!function_exists('jinr_custom_image_sizes')) {
	function jinr_custom_image_sizes($sizes)
	{
		return array_merge(
			$sizes,
			array(
				'small_size' => __('中サイズ（16：9）'),
				'large_size' => __('大サイズ（16：9）'),
			)
		);
	}
}
add_filter('image_size_names_choose', 'jinr_custom_image_sizes');



//記事一覧のデザイン設定
function jinr_postlist_post_column()
{
	$column = "";
	if (jinr__postlist_style() == 'd--postlist-square d--postlist-square-sp') {
		if (jinr__post_column_style() == 't--post-one-column') {
			$column = "d--postlist-column3";
		} else {
			$column = "d--postlist-column2";
		}
	} else {
		if (jinr__post_column_style() == 't--post-one-column') {
			$column = "d--postlist-column2";
		} else {
			$column = "d--postlist-column1";
		}
	}
	echo $column;
}

// 絵文字の読み込み制御
if (get_option('jinr_speed_emoji') == true) {
	remove_action('wp_head', 'print_emoji_detection_script', 7);
	remove_action('wp_print_styles', 'print_emoji_styles');
}

//カテゴリーページのリダイレクト設定
function jinr_page_to_category_redirect()
{
	global $post;

	$category_on = get_post_meta($post->ID, '_jinr_category_edit', true);
	$category_id = get_post_meta($post->ID, '_jinr_category', true);

	if ($category_on == "1") {
		wp_safe_redirect(get_category_link($category_id), 301);
		exit;
	} else {
		return;
	}
}


/**
 * カテゴリー投稿数のタグカスタマイズ
 *
 * @param string $output 引数.
 */
function pt_list_categories($output)
{
	$output = preg_replace('/<\/a> \(([0-9,]*)\)/', ' <span class="count">${1}</span></a>', $output);

	return $output;
}

add_filter('wp_list_categories', 'pt_list_categories');

/**
 * アーカイブ投稿数のタグカスタマイズ
 *
 * @param string $output 引数.
 */
function my_archives_link($output)
{
	$output = preg_replace('/<\/a>\s*(&nbsp;)\((\d+)\)/', ' <span class="count">$2</span></a>', $output);

	return $output;
}

add_filter('get_archives_link', 'my_archives_link');

/**
 * テキストウィジェットでショートコード読み込み
 */
add_filter('widget_text', 'do_shortcode');


// 標準のカノニカル設定を削除
remove_action('wp_head', 'rel_canonical');
add_post_type_support('page', 'excerpt');



/**
 * ループ外で使うdescriptionの自動設定
 */
function jinr_auto_desc_func()
{
	$post_id  = get_the_ID();
	$post      = get_post($post_id);
	$auto_desc = wp_html_excerpt($post->post_content, 120, '');
	$auto_desc = preg_replace('#\[[^\]]+\]#', '', $auto_desc);
	$auto_desc = strip_tags($auto_desc);
	$auto_desc = str_replace(array("\r\n", "\n", "\r"), "", $auto_desc);

	return esc_attr($auto_desc);
}
function content_excerpt($content, $num)
{
	$content = preg_replace('#\[[^\]]+\]#', '', $content);
	$content = strip_tags($content);
	$content = str_replace(array("\r\n", "\n", "\r"), "", $content);
	$content = mb_strcut($content, 0, $num, 'UTF-8');
	return $content;
}

/**
 * マルチページのURL作ってる
 *
 * @param string $rel prev.
 */
function jinr_generate_multipage_url($rel = 'prev')
{
	global $post;
	$url       = '';
	$multipage = check_multi_page();
	if ($multipage[0] > 1) {
		$numpages = $multipage[0];
		$page     = 0 === $multipage[1] ? 1 : $multipage[1];
		$i        = 'prev' == $rel ? $page - 1 : $page + 1;
		if ($i && $i > 0 && $i <= $numpages) {
			if (1 == $i) {
				$url = get_permalink();
			} else {
				if ('' == get_option('permalink_structure') || in_array(
					$post->post_status,
					array(
						'draft',
						'pending',
					)
				)) {
					$url = add_query_arg('page', $i, get_permalink());
				} else {
					$url = trailingslashit(get_permalink()) . user_trailingslashit($i, 'single_paged');
				}
			}
		}
	}

	return $url;
}

// 記事一覧の表示件数
function jinr_post_list_num($query)
{
	if (is_admin() || !$query->is_main_query()) {
		return;
	}

	if ($query->is_home() || $query->is_category() || $query->is_tag()) {
		$query->set('posts_per_page', get_option('posts_per_page'));
	}

	if ($query->is_tag()) {
		$paged = get_query_var('paged') ? get_query_var('paged') : 1;
		$query->set('paged', $paged);
	}
}
add_action('pre_get_posts', 'jinr_post_list_num');


/**
 * カテゴリー一覧画面にカテゴリーID表示
 *
 * @param string $columns カラム.
 */
function jinr_add_category_columns($columns)
{
	$index = 2;

	return array_merge(
		array_slice($columns, 0, $index),
		array('id' => 'カテゴリーID'),
		array_slice($columns, $index)
	);
}
add_filter('manage_edit-category_columns', 'jinr_add_category_columns');


/**
 * カラムを追加
 *
 * @param string $column_name カラム名.
 * @param string $term_id     ID.
 */
function jinr_add_categoryid_custom_fields($content, $column_name, $term_id)
{
	if ($column_name === 'id') {
		$content = $term_id;
	}
	return $content;
}
add_action('manage_category_custom_column', 'jinr_add_categoryid_custom_fields', 10, 3);



/**
 * カラムID取得
 *
 * @param string $defaults デフォルト.
 */
function posts_columns_id($defaults)
{
	$defaults['wps_post_id'] = __('ID');

	return $defaults;
}
/**
 * カラムを追加
 *
 * @param string $column_name カラム名.
 * @param string $id          ID.
 */
function posts_custom_id_columns($column_name, $id)
{
	if ($column_name === 'wps_post_id') {
		echo $id;
	}
}
add_filter('manage_posts_columns', 'posts_columns_id', 5);
add_action('manage_posts_custom_column', 'posts_custom_id_columns', 5, 2);
add_filter('manage_pages_columns', 'posts_columns_id', 5);
add_action('manage_pages_custom_column', 'posts_custom_id_columns', 5, 2);


/**
 * 追加読み込み カテゴリ1
 */
function newpost_append_post_scripts()
{
	$posts_per_page = get_option('posts_per_page');
	if (isset($_GET['m']) && strlen($_GET['m']) == 6) {
		$year_and_month = $_GET['m'];
		$year = substr($year_and_month, 0, 4);
		$month = substr($year_and_month, 4, 2);
	} else {
		$year = get_query_var('year');
		$month = get_query_var('monthnum');
	}
	$date_query = array();
	if (!empty($year)) {
		$date_query['year'] = $year;
	}
	if (!empty($month)) {
		$date_query['month'] = $month;
	}
	$args = array(
		'post_type'      => 'post',
		'post_status'    => 'publish',
		'posts_per_page' => $posts_per_page,
		'date_query' => $date_query,
	);
	$tag = get_query_var('tag');
	if (!empty($tag)) {
		$args['tag'] = $tag;
	}

	if ('recent' !== get_theme_mod('jinr__contents_mag_select1')) {
		$args['cat'] = intval(get_theme_mod('jinr__contents_mag_select1'));
	}
	$the_query = new WP_Query($args);
	wp_register_script('append_post', get_template_directory_uri() . '/lib/js/loader.js', array('jquery'), JINR_THEME_VERSION, true);
	wp_localize_script(
		'append_post',
		'jinr_loadmore_params1',
		array(
			'ajaxurl'      => admin_url() . '/admin-ajax.php',
			'posts'        => wp_json_encode($the_query->query_vars),
			'current_page' => get_query_var('paged') ? get_query_var('paged') : 1,
			'max_page'     => $the_query->max_num_pages,
		)
	);

	wp_enqueue_script('append_post');
}
add_action('wp_enqueue_scripts', 'newpost_append_post_scripts');

/**
 * 追加読み込みのハンドラ
 */
function append_post_ajax_handler()
{
	$args                = json_decode(stripslashes(wp_unslash($_POST['query'])), true);
	$args['post_status'] = 'publish';
	$args['cat']         = $_POST['cat'];
	$args['tag']         = $_POST['tag'];
	$args['date_query']  = array(
		'year'  => $_POST['nowY'],
		'month' => $_POST['nowM'],
		'day'   => $_POST['nowD']
	);
	$args['post__not_in'] = $_POST['articleID'];
	$the_query = new WP_Query($args);

	if ($the_query->have_posts()) :
		while ($the_query->have_posts()) :
			$the_query->the_post();
			get_template_part('object/new-post-list', get_post_format());
		endwhile;
	endif;
	die;
}
add_action('wp_ajax_loadmore', 'append_post_ajax_handler');
add_action('wp_ajax_nopriv_loadmore', 'append_post_ajax_handler');

/**
 * 記事リストの追加読み込みスクリプト
 */
function post_list_append_post_scripts()
{
	wp_register_script('append_post_list', get_template_directory_uri() . '/lib/js/postlist-loader.js', array('jquery'), JINR_THEME_VERSION, true);
	wp_enqueue_script('append_post_list');

	wp_localize_script(
		'append_post_list',
		'postlist_loadmore',
		array(
			'ajaxurl'      => admin_url() . 'admin-ajax.php',
		)
	);
}
add_action('wp_enqueue_scripts', 'post_list_append_post_scripts');

/**
 * 記事リストの追加読み込み
 */
function append_post_list_ajax_handler()
{
	$display_articles = $_POST['displayArticles'];
	$post_num = $_POST['postNum'];
	$category = $_POST['category'];
	$button_text = $_POST['buttonText'];
	$client_id = $_POST['clientId'];
	$article_id = $_POST['articleID'];
	$list_design      = $_POST['listDesign'];
	$list_design_sp   = $_POST['listDesignSp'];
	$column_select    = $_POST['column'];
	$column_select_sp = $_POST['columnSp'];
	$cat_display = $_POST['catDisp'];
	$time_display = $_POST['timeDisp'];

	if ('new' === $display_articles) {
		$args = array(
			'post_type' => 'post',
			'post_status' => 'publish',
			'posts_per_page' => $post_num * 2,
			'post__not_in' => $article_id
		);
	} else {
		$args = array(
			'post_type' => 'post',
			'post_status' => 'publish',
			'posts_per_page' => $post_num * 2,
			'cat' => $category,
			'post__not_in' => $article_id
		);
	};

	$page = $_POST['page'];
	$args['paged'] = $page;
	$the_query = new WP_Query($args);
	$articles = '';
	$more_button = '';
	if ($the_query->have_posts()) {
		while ($the_query->have_posts()) {
			$the_query->the_post();
			$link                = esc_url(get_the_permalink());
			$featuredmedia       = get_the_post_thumbnail_url(get_the_ID(), 'full');
			$image_url       = !empty($featuredmedia) ? $featuredmedia : jinr_noimage_url('medium');
			$date                = gmdate(get_the_date('Y.m.d'));
			$post_youtube_time   = get_post_meta(get_the_ID(), '_jinr_time_youtube', true);
			$post_youtube_thumb  = get_post_meta(get_the_ID(), '_jinr_thumb_youtube', true);
			$category = get_the_category();
			if (isset($category[0])) {
				$cat_id   = $category[0]->cat_ID;
				$cat_name = $category[0]->cat_name;
				$cat_slug = $category[0]->category_nicename;
				$cat_url  = get_category_link($cat_id);
			} else {
				$cat_name = '';
			}

			$title = esc_html(get_the_title(get_the_ID()));
			$post_id = get_the_ID();
			if ($post_youtube_time) {
				$post_youtube_element = "<span class='a--post-time'><i class='jic jin-ifont-playback' aria-hidden='true'></i>$post_youtube_time</span>";
			} else {
				$post_youtube_element = "";
			}

			$srcmedium = '';
			$srcsmall = '';
			$image_srcset = '';
			$image_sizes = '';

			$target_extension = ["/\.png\z/", "/\.jpg\z/", "/\.jpeg\z/", "/\.webp\z/"];
			$suffix_small    = ["-320x180.png", "-320x180.jpg", "-320x180.jpeg", "-320x180.webp"];
			$suffix_medium    = ["-640x360.png", "-640x360.jpg", "-640x360.jpeg", "-640x360.webp"];

			if (!empty($featuredmedia)) {
				$image_url = $featuredmedia;
				$srcsmall = preg_replace($target_extension, $suffix_small, $featuredmedia);
				$srcmedium = preg_replace($target_extension, $suffix_medium, $featuredmedia);
				$thumbnail_medium_exisits = WP_CONTENT_DIR . '/' . mb_substr($srcmedium, mb_strrpos($srcmedium, 'uploads'), mb_strlen($srcmedium));
				$thumbnail_small_exisits = WP_CONTENT_DIR . '/' . mb_substr($srcsmall, mb_strrpos($srcsmall, 'uploads'), mb_strlen($srcsmall));
				if (jinr__thumbnail_original_used() !== true) {
					if (!file_exists($thumbnail_medium_exisits) && !file_exists($thumbnail_small_exisits)) {
						$image_srcset = '';
					} elseif (file_exists($thumbnail_small_exisits) && !file_exists($thumbnail_medium_exisits)) {
						$image_srcset = $srcsmall . ' 320w,' . $image_url . ' 640w';
					} else {
						$image_srcset = $srcsmall . ' 320w,' . $srcmedium . ' 640w';
					}
				} else {
					$image_srcset = '';
				}
			} else {
				if (!empty($post_youtube_thumb)) {
					$image_url = jinr_youtube_thumbnail_url($post_id, 'medium');
					$srcsmall = jinr_youtube_thumbnail_url($post_id, 'small');
					$image_srcset = $srcsmall . ' 320w,' . $image_url . ' 640w';
				} else {
					$image_url = jinr_noimage_url('full');
					$srcmedium = jinr_noimage_url('medium');
					$srcsmall = jinr_noimage_url('small');
					$image_srcset = $srcsmall . ' 320w,' . $srcmedium . ' 640w';
				}
			}
			// 記事リストのカラムとデザイン設定によって分岐
			// スマホ
			if ($list_design_sp == 'd--postlist-rectangle-sp') {
				$image_sizes .= '(max-width:552px) 50vw';
			} elseif ($list_design_sp == 'd--postlist-square-sp') {
				if ($column_select_sp == '2') {
					$image_sizes .= '(max-width:552px) 30vw';
				} else {
					$image_sizes .= '(max-width:552px) 90vw';
				}
			} elseif ($list_design_sp == 'd--postlist-slider-sp d--postlist-slider-loader') {
				$image_sizes .= '(max-width:552px) 70vw';
			}
			// PC
			if ($list_design == 'd--postlist-square') {
				if ($column_select == '4') {
					$image_sizes .= ',(max-width:781px) 35vw , (max-width:1131px) 30vw, 20vw';
				} else {
					$image_sizes .= ',(max-width:781px) 35vw , (max-width:1131px) 30vw, 20vw';
				}
			} elseif ($list_design == 'd--postlist-rectangle') {
				if ($column_select == '2') {
					$image_sizes .= ',(max-width:781px) 35vw , (max-width:860px) 30vw, 10vw';
				} else {
					$image_sizes .= ',(max-width:781px) 35vw , (max-width:1131px) 30vw, 20vw';
				}
			} elseif ($list_design == 'd--postlist-slider d--postlist-slider-loader') {
				$image_sizes .= ',(max-width:781px) 35vw , (max-width:1131px) 30vw, 20vw';
			}
			$timeSet = $time_display !== 'on' ? '<div class="a--post-date">' . $date . '</div>' : '';
			$catSet = $cat_display !== 'on' ? '<div class="a--post-category">' . $cat_name . '</div>' : '';
			if ($time_display == 'on' && $cat_display == 'on') {
				$postmeta = "";
			} else {
				$postmeta = "
				<div class='c--post-meta'>
				$timeSet
				$catSet
				</div>";
			}
			$articles .= "<article class='o--postlist-item' data-id='$post_id'>
							<a class='c--post-link' href='$link'>
							<figure class='c--post-image'>
								<img class='a--post-img-src' src='$image_url' alt='$title' loading='lazy' width='357' height='200' srcset='$image_srcset' sizes='$image_sizes' />
								$post_youtube_element
							</figure>
							<div class='c--post-contents'>
								<div class='a--post-title d--bold'>$title</div>
								$postmeta
							</div>
						</a>
				</article>";
		}
	}
	if ($the_query->max_num_pages > $page) {
		$more_button = "<div class='a--postlist-more $client_id' data-client-id='$client_id' data-page='$page'>
					<span>$button_text</span>
				</div>";
	}
	echo $articles . $more_button;
	die;
}
add_action('wp_ajax_postlist-loadmore', 'append_post_list_ajax_handler');
add_action('wp_ajax_nopriv_postlist-loadmore', 'append_post_list_ajax_handler');



/**
 * 最新記事取得用の関数
 *
 * @param string $cat_id カテゴリID.
 */
function check_recent($cat_id)
{
	if ('recent' === $cat_id) {
		return '最新記事';
	}
	return get_cat_name(intval($cat_id));
}


/**
 * 投稿日と更新日
 *
 * @param string $format フォーマット.
 */
function jinr_get_modtime($format)
{
	$modtime = get_the_modified_time('Y.m.d');
	$pubtime = get_the_time('Y.m.d');
	if ($pubtime > $modtime) {
		return $pubtime;
	} elseif ($pubtime === $modtime) {
		return null;
	} else {
		return $modtime;
	}
}


/**
 * <iframe>のレスポンシブ対応
 *
 * @param string $the_content 内容.
 */
function wrap_iframe_in_div($the_content)
{
	if (is_singular() || is_category()) {
		// YouTube動画にラッパーを装着
		$the_content = preg_replace('/<iframe[^>]+?youtube\.com[^<]+?<\/iframe>/is', '<div class="video">${0}</div>', $the_content);
		// Instagram動画にラッパーを装着
		$the_content = preg_replace('/<iframe[^>]+?instagram\.com[^<]+?<\/iframe>/is', '<div class="instagram">${0}</div>', $the_content);
	}

	return $the_content;
}

add_filter('the_content', 'wrap_iframe_in_div');


/**
 * アクションフックを定期的に実行するスケジュールイベントの追加
 */
function jinr_activation()
{
	if (!wp_next_scheduled('set_hours_event')) {
		wp_schedule_event(1451574000, '1hours', 'set_hours_event');
	}
}
add_action('wp', 'jinr_activation');


/**
 * 翻訳用関数
 */
function __jinr($text, $domain = 'default')
{
	return esc_attr__($text, $domain);
}



// 画像URlから画像idを引っ張る
function jinr_get_attachment_id_from_url($url)
{
	global $wpdb;
	$query = "SELECT ID FROM {$wpdb->posts} WHERE guid='$url'";
	$id = $wpdb->get_var($query);
	return $id;
}

// 出力するサムネイルのsrcsetとsizes属性の全体設定
function jinr_thumbnail_attr($html, $post_id, $post_thumbnail_id, $size, $attr)
{
	$original_src = wp_get_attachment_image_src($post_thumbnail_id, 'full');
	$original_eyecatch = array(
		$post_id => $original_src[0],
	);

	if (array_key_exists($post_id, $original_eyecatch)) {
		preg_match('!src="([^"]+)"!', $html, $regs);
		$before	= $regs[1];
		$after	= $original_eyecatch[$post_id];
		if (strpos($after, '-scaled') !== false) {
			$scaled_extension = array('-scaled.png', '-scaled.jpg', '-scaled.jpeg', '-scaled.webp');
			$suffix_scaled = array('.png', '.jpg', '.jpeg', '.webp');
			$after = str_replace($scaled_extension, $suffix_scaled, $after);
		}
		$target_extension = ["/\.png\z/", "/\.jpg\z/", "/\.jpeg\z/", "/\.webp\z/"];
		$suffix_small    = ["-320x180.png", "-320x180.jpg", "-320x180.jpeg", "-320x180.webp"];
		$suffix_medium    = ["-640x360.png", "-640x360.jpg", "-640x360.jpeg", "-640x360.webp"];
		$suffix_large    = ["-1360x765.png", "-1360x765.jpg", "-1360x765.jpeg", "-1360x765.webp"];
		$thumbnail_small = preg_replace($target_extension, $suffix_small, $after);
		$thumbnail_medium = preg_replace($target_extension, $suffix_medium, $after);
		$thumbnail_large = preg_replace($target_extension, $suffix_large, $after);

		$thumbnail_large_exisits = WP_CONTENT_DIR . '/' . mb_substr($thumbnail_large, mb_strrpos($thumbnail_large, 'uploads'), mb_strlen($thumbnail_large));
		$thumbnail_medium_exisits = WP_CONTENT_DIR . '/' . mb_substr($thumbnail_medium, mb_strrpos($thumbnail_medium, 'uploads'), mb_strlen($thumbnail_medium));

		$html = preg_replace('#' . $before . '#', $after, $html);
		if (!file_exists($thumbnail_medium_exisits) && !file_exists($thumbnail_large_exisits)) {
			$html = preg_replace('/srcset=[\'"]([^\'"]+)[\'"]/i', 'srcset="' . $after . ' 1360w" ', $html);
			$html = preg_replace('/sizes=[\'"]([^\'"]+)[\'"]/i', 'sizes="100vw"', $html);
		} elseif (file_exists($thumbnail_medium_exisits) && !file_exists($thumbnail_large_exisits)) {
			if ('large_size' === $size) {
				$html = preg_replace('/srcset=[\'"]([^\'"]+)[\'"]/i', 'srcset="' . $thumbnail_medium . ' 640w, ' . $after . ' 1360w" ', $html);
				$html = preg_replace('/sizes=[\'"]([^\'"]+)[\'"]/i', 'sizes="(max-width: 551px) 90vw, 100vw"', $html);
			} else {
				$html = preg_replace('/srcset=[\'"]([^\'"]+)[\'"]/i', 'srcset="' . $thumbnail_small . ' 320w, ' . $thumbnail_medium . ' 640w" ', $html);
				$html = preg_replace('/sizes=[\'"]([^\'"]+)[\'"]/i', 'sizes="(max-width:552px) 50vw, 30vw"', $html);
			}
		} else {
			if ('large_size' === $size) {
				$html = preg_replace('/srcset=[\'"]([^\'"]+)[\'"]/i', 'srcset="' . $thumbnail_medium . ' 640w, ' . $thumbnail_large . ' 1360w" ', $html);
				$html = preg_replace('/sizes=[\'"]([^\'"]+)[\'"]/i', 'sizes="(max-width: 551px) 90vw, 100vw"', $html);
			} else {
				$html = preg_replace('/srcset=[\'"]([^\'"]+)[\'"]/i', 'srcset="' . $thumbnail_small . ' 320w, ' . $thumbnail_medium . ' 640w" ', $html);
				$html = preg_replace('/sizes=[\'"]([^\'"]+)[\'"]/i', 'sizes="(max-width: 551px) 50vw, 640px"', $html);
			}
		}

		return $html;
	}
	return $html;
}
add_filter('post_thumbnail_html', 'jinr_thumbnail_attr', 10, 5);


// 記事リストのコールバック
function jinr_post_list_dynamic_render_callback($block_attr, $content)
{
	$post_num         = !empty($block_attr['postNum']) ? $block_attr['postNum'] : 6;
	$list_design      = !empty($block_attr['listDesign']) ? $block_attr['listDesign'] : 'd--postlist-square';
	$list_design_sp   = !empty($block_attr['listDesignSp']) ? $block_attr['listDesignSp'] : 'd--postlist-square-sp';
	$column_select    = !empty($block_attr['columnSelect']) ? $block_attr['columnSelect'] : '3';
	$column_select_sp = !empty($block_attr['columnSelectSp']) ? $block_attr['columnSelectSp'] : '1';
	$display_articles = !empty($block_attr['radioDisplayArticles']) ? $block_attr['radioDisplayArticles'] : 'new';
	$is_more_button   = !empty($block_attr['toggleMoreDisplay']) ? $block_attr['toggleMoreDisplay'] : false;
	$is_more_design   = !empty($block_attr['moreDisplayDesign']) ? $block_attr['moreDisplayDesign'] : 'async';
	$category         = !empty($block_attr['displayCategory']) ? $block_attr['displayCategory'] : '';
	$button_text      = !empty($block_attr['buttonText']) ? $block_attr['buttonText'] : 'もっと見る';
	$client_id 		  = !empty($block_attr['clientId']) ? $block_attr['clientId'] : '';
	$radioAnimation   = !empty($block_attr['radioAnimation']) ? $block_attr['radioAnimation'] : 'd--postlist-animation-fade js--scr-animation';
	$radioHover 	  = !empty($block_attr['radioHover']) ? $block_attr['radioHover'] : 'd--postlist-hover-up';

	$radioAnimation == 'none' ? $radioAnimation = '' : $radioAnimation;
	$radioHover 	== 'none' ? $radioHover = '' : $radioHover;

	$topMarginPc      = !empty($block_attr['topMarginPcAttribute']) ? $block_attr['topMarginPcAttribute'] : 'auto';
	$bottomMarginPc      = !empty($block_attr['bottomMarginPcAttribute']) ? $block_attr['bottomMarginPcAttribute'] : 'auto';
	$topMarginSp      = !empty($block_attr['topMarginSpAttribute']) ? $block_attr['topMarginSpAttribute'] : 'auto';
	$bottomMarginSp      = !empty($block_attr['bottomMarginSpAttribute']) ? $block_attr['bottomMarginSpAttribute'] : 'auto';
	$displayDevice      = !empty($block_attr['displayDeviceAttribute']) ? $block_attr['displayDeviceAttribute'] : 'all';
	$animationApply      = !empty($block_attr['animationApply']) ? 'd--block-animation-off' : '';

	if (!isset($block_attr['rankingDisplay'])) {
		$rankingDisplay = "on";
	} else {
		$rankingDisplay = "off";
	}

	for ($num = 1; $num <= 12; $num++) {
		${'pickupUrl' . $num} = !empty($block_attr['pickupUrl' . $num]) ? $block_attr['pickupUrl' . $num] : '';
		${'pickupLabelToggle' . $num} = !empty($block_attr['pickupLabelToggle' . $num]) ? $block_attr['pickupLabelToggle' . $num] : false;
		${'pickupLabelText' . $num} = !empty($block_attr['pickupLabelText' . $num]) ? $block_attr['pickupLabelText' . $num] : '';
		${'pickupLabelBgColor' . $num} = !empty($block_attr['pickupLabelBgColor' . $num]) ? $block_attr['pickupLabelBgColor' . $num] : '#407fed';
	}

	if (!empty($block_attr['catDisplay']) && $block_attr['catDisplay'] == 1) {
		$cat_display = 'on';
	} else {
		$cat_display = 'off';
	}

	if (!empty($block_attr['timeDisplay']) && $block_attr['timeDisplay'] == 1) {
		$time_display = 'on';
	} else {
		$time_display = 'off';
	}
	if ($rankingDisplay == "on") {
		if ($display_articles !== 'pv') {
			$ranking_icon = '';
			$ranking_class = '';
		} else {
			$ranking_icon = '<div class="c--post-ranking"></div>';
			$ranking_class = 'd--postlist-ranking-on';
		}
	} else {
		$ranking_icon = '';
		$ranking_class = '';
	}
	if (!isset($block_attr['rankingViewDisplay'])) {
		$ranking_views = 'on';
	} else {
		$ranking_views = 'off';
	}
	if (!empty($block_attr['pvPaidpostDisplay']) && $block_attr['pvPaidpostDisplay'] == 1) {
		$paidpost_price_display = 'on';
	} else {
		$paidpost_price_display = 'off';
	}

	//詳細設定のclass
	$detail_setting = "";
	$detail_setting .= $topMarginPc !== "auto" ? $topMarginPc . " " : "";
	$detail_setting .= $bottomMarginPc !== "auto" ? $bottomMarginPc . " " : "";
	$detail_setting .= $topMarginSp !== "auto" ? $topMarginSp . " " : "";
	$detail_setting .= $bottomMarginSp !== "auto" ? $bottomMarginSp . " " : "";
	$detail_setting .= $displayDevice !== "all" ? $displayDevice . " " : "";

	$jinrBlockClassName      = !empty($block_attr['className']) ? $block_attr['className'] : '';
	$jinrBlockCSSAttribute      = !empty($block_attr['jinrBlocksCSSAttribute']) ? '<style jsx="true">' . $block_attr['jinrBlocksCSSAttribute'] . '</style>' : '';

	if ($time_display == 'on' && $cat_display == 'on') {
		$postmeta_none_style = "<style>#wrapper .b--jinr-postlist[data-clientid='$client_id'] .c--post-contents{padding-bottom:18px!important; padding-top:16px!important;} @media (max-width: 551px) {#wrapper .b--jinr-postlist[data-clientid='$client_id'] .c--post-contents{padding-bottom:20px!important; padding-top:18px!important;}}</style>";
	} else {
		$postmeta_none_style = "";
	}

	$section_start    = "<section id='$client_id' data-clientid='$client_id' data-catdisp='$cat_display' data-timedisp='$time_display' data-btn='$button_text' data-listdesign='$list_design' data-listdesignsp='$list_design_sp' data-column='$column_select' data-columnsp='$column_select_sp' data-ar='$display_articles' data-postnum='$post_num' data-cat='$category' class='b--jinr-block b--jinr-postlist d--postlist-type-$display_articles $list_design $list_design_sp d--postlist-column$column_select d--postlist-column$column_select_sp-sp $radioAnimation $radioHover $detail_setting $animationApply $ranking_class $jinrBlockClassName '>";
	$section_end      = '</section>' . $jinrBlockCSSAttribute . $postmeta_none_style;
	if ($list_design == 'd--postlist-slider d--postlist-slider-loader') {
		$section_start    = "<div class=" . 'd--postslider-scrollbar' . "><section id='$client_id' data-clientid='$client_id' data-btn='$button_text' data-catdisp='$cat_display' data-timedisp='$time_display' data-ar='$display_articles' data-postnum='$post_num' data-cat='$category' class='b--jinr-block b--jinr-postlist d--postlist-type-$display_articles $list_design $list_design_sp d--postlist-column$column_select d--postlist-column$column_select_sp-sp $radioAnimation $radioHover $detail_setting $animationApply $jinrBlockClassName'>";
		$section_end      = '</section></div>' . $jinrBlockCSSAttribute . $postmeta_none_style;
	}


	if ('new' === $display_articles) {
		global $paged;
		if (!isset($paged) || !$paged) {
			$paged = 1;
		}
		$args = array(
			'post_type' => 'post',
			'post_status' => 'publish',
			'posts_per_page' => $post_num,
			'paged' => $paged
		);
		$the_query = new WP_Query($args);
	} elseif ('pv' === $display_articles) {
		$args = array(
			'post_type'      => 'post',
			'post_status'    => 'publish',
			'meta_key'       => 'post_views_count',
			'orderby'        => 'meta_value_num date',
			'order'          => 'DESC',
			'posts_per_page' => $post_num,
		);
		$the_query = new WP_Query($args);
	} else {
		global $paged;
		if (!isset($paged) || !$paged) {
			$paged = 1;
		}
		$args = array(
			'post_type' => 'post',
			'post_status' => 'publish',
			'posts_per_page' => $post_num,
			'paged' => $paged,
			'cat' => $category
		);
		$the_query = new WP_Query($args);
	};

	$articles = '';
	$more_button = '';
	if ('pickup' !== $display_articles) {
		if ($the_query->have_posts()) {
			while ($the_query->have_posts()) {
				$the_query->the_post();
				$link                = esc_url(get_the_permalink());
				$featuredmedia       = get_the_post_thumbnail_url(get_the_ID(), 'full');
				$date                = gmdate(get_the_date('Y.m.d'));
				$post_youtube_time   = get_post_meta(get_the_ID(), '_jinr_time_youtube', true);
				$post_youtube_thumb  = get_post_meta(get_the_ID(), '_jinr_thumb_youtube', true);

				$category_id = get_the_category();

				if (isset($category_id[0])) {
					$cat_id   = $category_id[0]->cat_ID;
					$cat_name = $category_id[0]->cat_name;
					$cat_slug = $category_id[0]->category_nicename;
					$cat_url  = get_category_link($cat_id);
				} else {
					$cat_name = '';
				}
				$title = esc_html(get_the_title(get_the_ID()));
				$post_id = get_the_ID();
				if ($post_youtube_time) {
					$post_youtube_element = "<span class='a--post-time'><i class='jic jin-ifont-playback' aria-hidden='true'></i>$post_youtube_time</span>";
				} else {
					$post_youtube_element = "";
				}

				$srcmedium = '';
				$srcsmall = '';
				$image_srcset = '';
				$image_sizes = '';

				$target_extension = ["/\.png\z/", "/\.jpg\z/", "/\.jpeg\z/", "/\.webp\z/"];
				$suffix_small    = ["-320x180.png", "-320x180.jpg", "-320x180.jpeg", "-320x180.webp"];
				$suffix_medium    = ["-640x360.png", "-640x360.jpg", "-640x360.jpeg", "-640x360.webp"];
				if (!empty($featuredmedia)) {
					$image_url = $featuredmedia;

					// -scaledがついている場合、それを削除する
					if (strpos($image_url, '-scaled') !== false) {
						$scaled_extension = array('-scaled.png', '-scaled.jpg', '-scaled.jpeg', '-scaled.webp');
						$suffix_scaled = array('.png', '.jpg', '.jpeg', '.webp');
						$image_url = str_replace($scaled_extension, $suffix_scaled, $featuredmedia);
					}

					$srcsmall = preg_replace($target_extension, $suffix_small, $image_url);
					$srcmedium = preg_replace($target_extension, $suffix_medium, $image_url);
					$thumbnail_medium_exisits = WP_CONTENT_DIR . '/' . mb_substr($srcmedium, mb_strrpos($srcmedium, 'uploads'), mb_strlen($srcmedium));
					$thumbnail_small_exisits = WP_CONTENT_DIR . '/' . mb_substr($srcsmall, mb_strrpos($srcsmall, 'uploads'), mb_strlen($srcsmall));
					if (jinr__thumbnail_original_used() !== true) {
						if (!file_exists($thumbnail_medium_exisits) && !file_exists($thumbnail_small_exisits)) {
							$image_srcset = '';
						} elseif (file_exists($thumbnail_small_exisits) && !file_exists($thumbnail_medium_exisits)) {
							$image_srcset = $srcsmall . ' 320w,' . $image_url . ' 640w';
						} else {
							$image_srcset = $srcsmall . ' 320w,' . $srcmedium . ' 640w';
						}
						// 記事リストのカラムとデザイン設定によって分岐
						// スマホ
						if ($list_design_sp == 'd--postlist-rectangle-sp') {
							$image_sizes .= '(max-width:552px) 50vw';
						} elseif ($list_design_sp == 'd--postlist-square-sp') {
							if ($column_select_sp == '2') {
								$image_sizes .= '(max-width:552px) 30vw';
							} else {
								$image_sizes .= '(max-width:552px) 90vw';
							}
						} elseif ($list_design_sp == 'd--postlist-slider-sp d--postlist-slider-loader') {
							$image_sizes .= '(max-width:552px) 70vw';
						}
						// PC
						if ($list_design == 'd--postlist-square') {
							if ($column_select == '4') {
								$image_sizes .= ',(max-width:781px) 35vw , (max-width:1131px) 30vw, 20vw';
							} else {
								$image_sizes .= ',(max-width:781px) 35vw , (max-width:1131px) 30vw, 20vw';
							}
						} elseif ($list_design == 'd--postlist-rectangle') {
							if ($column_select == '2') {
								$image_sizes .= ',(max-width:781px) 35vw , (max-width:860px) 30vw, 10vw';
							} else {
								$image_sizes .= ',(max-width:781px) 35vw , (max-width:1131px) 30vw, 20vw';
							}
						} elseif ($list_design == 'd--postlist-slider d--postlist-slider-loader') {
							$image_sizes .= ',(max-width:781px) 35vw , (max-width:1131px) 30vw, 20vw';
						}
					} else {
						$image_srcset = '';
						$image_sizes = '';
					}
				} else {
					if (!empty($post_youtube_thumb)) {
						$image_url = jinr_youtube_thumbnail_url($post_id, 'medium');
						$srcsmall = jinr_youtube_thumbnail_url($post_id, 'small');
						$image_srcset = $srcsmall . ' 320w,' . $image_url . ' 640w';
					} else {
						$image_url = jinr_noimage_url('full');
						$srcmedium = jinr_noimage_url('medium');
						$srcsmall = jinr_noimage_url('small');
						$image_srcset = $srcsmall . ' 320w,' . $srcmedium . ' 640w';
					}
				}
				$timeSet = $time_display !== 'on' ? '<div class="a--post-date">' . $date . '</div>' : '';
				$catSet = $cat_display !== 'on' ? '<div class="a--post-category">' . $cat_name . '</div>' : '';
				if ('pv' === $display_articles) {
					/**
					 * 有料記事ブロックがあるかどうかを検証し、あれば値を取得する
					 * 有料記事ブロックがあり、ブロックの属性を取得しその値があれば変数を上書きする
					 * なければそのまま
					 */
					$blocks = parse_blocks(get_the_content());
					$paidpost_price = '';
					foreach ($blocks as $key => $block) {
						if ($block['blockName'] == 'jinr-blocks/paidpost') {
							if (isset($block['attrs']['productPrice'])) {
								$paidpost_price = $block['attrs']['productPrice'];
								if ($paidpost_price) {
									number_format((int)$paidpost_price);
								}
							}
						}
						if (!empty($block['innerBlocks'])) {
							foreach ($block['innerBlocks'] as $innerBlock) {
								if ($innerBlock['blockName'] == 'jinr-blocks/paidpost') {
									if (isset($innerBlock['attrs']['productPrice'])) {
										$paidpost_price = $innerBlock['attrs']['productPrice'];
										if ($paidpost_price) {
											number_format((int)$paidpost_price);
										}
									}
								}
							}
						}
					}
					$viewsCount = get_post_meta(get_the_ID(), 'post_views_count', true);
					if ($paidpost_price_display == "on" && $ranking_views == "on") {
						$postmeta = "<div class='c--post-meta'>
						<div class='a--post-pv'><span>$viewsCount</span> views</div>
						<div class='a--paidpost-price'>$paidpost_price</div>
						</div>";
					} elseif ($paidpost_price_display == "on" && $ranking_views == "off") {
						$postmeta = "<div class='c--post-meta'>
						<div></div>
						<div class='a--paidpost-price'>$paidpost_price</div>
						</div>";
					} elseif ($paidpost_price_display == "off" && $ranking_views == "on") {
						$postmeta = "<div class='c--post-meta'>
						<div class='a--post-pv'><span>$viewsCount</span> views</div>
						</div>";
					} else {
						$postmeta = "";
					}
				} else {
					if ($time_display == 'on' && $cat_display == 'on') {
						$postmeta = "";
					} else {
						$postmeta = "
						<div class='c--post-meta'>
						$timeSet
						$catSet
						</div>";
					}
				}
				if (jinr__thumbnail_original_used() !== true) {
					$articles .= "<article class='o--postlist-item' data-id='$post_id'>
						<a class='c--post-link' href='$link'>
							<figure class='c--post-image'>
								<img class='a--post-img-src' src='$image_url' alt='$title' loading='lazy' width='357' height='200' srcset='$image_srcset' sizes='$image_sizes' />
								$post_youtube_element
							</figure>
							<div class='c--post-contents'>
								<div class='a--post-title d--bold'>$title</div>
								$postmeta
							</div>
							$ranking_icon
						</a>
					</article>";
				} else {
					$articles .= "<article class='o--postlist-item' data-id='$post_id'>
						<a class='c--post-link' href='$link'>
							<figure class='c--post-image'>
								<img class='a--post-img-src' src='$image_url' alt='$title' loading='lazy' width='357' height='200' />
								$post_youtube_element
							</figure>
							<div class='c--post-contents'>
								<div class='a--post-title d--bold'>$title</div>
								$postmeta
							</div>
							$ranking_icon
						</a>
					</article>";
				}
			}

			$archive_link = "";
			if ($display_articles == 'new') {
				$archive_link = get_post_type_archive_link('post');
			} elseif ($display_articles == 'category') {
				$archive_link = get_category_link($category);
			}
			if ($is_more_button && $the_query->max_num_pages > 1 && $is_more_design == "pagenation") {
				$more_button = "<div class='a--postlist-more d--archive-link'>
						<a href='" . $archive_link . "'>$button_text</a>
					</div>";
			} elseif ($is_more_button && $the_query->max_num_pages > 1 && $is_more_design == "async") {
				$more_button = "<div class='a--postlist-more' data-client-id='$client_id' data-page='1'>
						<span>$button_text</span>
					</div>";
			}
		}
	} else {
		//ピックアップタイプ
		for ($i = 1; $i <= $post_num; $i++) {
			$varName = 'pickupUrl' . $i;
			$post_id = url_to_postid($$varName);
			$featuredmedia = get_the_post_thumbnail_url($post_id, 'full');
			$post_youtube_time   = get_post_meta($post_id, '_jinr_time_youtube', true);
			$post_youtube_thumb  = get_post_meta($post_id, '_jinr_thumb_youtube', true);
			$date                = get_the_date('Y.m.d', $post_id);
			$title = get_the_title($post_id);
			$categories = get_the_category($post_id);
			$labelToggle = 'pickupLabelToggle' . $i;
			$labelText = 'pickupLabelText' . $i;
			$labelColor = 'pickupLabelBgColor' . $i;
			$labelColorRgb = jinr_hex_to_rgb($$labelColor);

			if (!empty($categories)) {
				// 最初のカテゴリー名を取得
				$cat_name = $categories[0]->name;
			} else {
				$cat_name = "";
			}
			if ($post_youtube_time) {
				$post_youtube_element = "<span class='a--post-time'><i class='jic jin-ifont-playback' aria-hidden='true'></i>$post_youtube_time</span>";
			} else {
				$post_youtube_element = "";
			}

			$srcmedium = '';
			$srcsmall = '';
			$image_srcset = '';
			$image_sizes = '';

			$target_extension = ["/\.png\z/", "/\.jpg\z/", "/\.jpeg\z/", "/\.webp\z/"];
			$suffix_small    = ["-320x180.png", "-320x180.jpg", "-320x180.jpeg", "-320x180.webp"];
			$suffix_medium    = ["-640x360.png", "-640x360.jpg", "-640x360.jpeg", "-640x360.webp"];
			if (!empty($featuredmedia)) {
				$image_url = $featuredmedia;

				// -scaledがついている場合、それを削除する
				if (strpos($image_url, '-scaled') !== false) {
					$scaled_extension = array('-scaled.png', '-scaled.jpg', '-scaled.jpeg', '-scaled.webp');
					$suffix_scaled = array('.png', '.jpg', '.jpeg', '.webp');
					$image_url = str_replace($scaled_extension, $suffix_scaled, $featuredmedia);
				}

				$srcsmall = preg_replace($target_extension, $suffix_small, $image_url);
				$srcmedium = preg_replace($target_extension, $suffix_medium, $image_url);
				$thumbnail_medium_exisits = WP_CONTENT_DIR . '/' . mb_substr($srcmedium, mb_strrpos($srcmedium, 'uploads'), mb_strlen($srcmedium));
				$thumbnail_small_exisits = WP_CONTENT_DIR . '/' . mb_substr($srcsmall, mb_strrpos($srcsmall, 'uploads'), mb_strlen($srcsmall));
				if (jinr__thumbnail_original_used() !== true) {
					if (!file_exists($thumbnail_medium_exisits) && !file_exists($thumbnail_small_exisits)) {
						$image_srcset = '';
					} elseif (file_exists($thumbnail_small_exisits) && !file_exists($thumbnail_medium_exisits)) {
						$image_srcset = $srcsmall . ' 320w,' . $image_url . ' 640w';
					} else {
						$image_srcset = $srcsmall . ' 320w,' . $srcmedium . ' 640w';
					}
					// 記事リストのカラムとデザイン設定によって分岐
					// スマホ
					if ($list_design_sp == 'd--postlist-rectangle-sp') {
						$image_sizes .= '(max-width:552px) 50vw';
					} elseif ($list_design_sp == 'd--postlist-square-sp') {
						if ($column_select_sp == '2') {
							$image_sizes .= '(max-width:552px) 30vw';
						} else {
							$image_sizes .= '(max-width:552px) 90vw';
						}
					} elseif ($list_design_sp == 'd--postlist-slider-sp d--postlist-slider-loader') {
						$image_sizes .= '(max-width:552px) 70vw';
					}
					// PC
					if ($list_design == 'd--postlist-square') {
						if ($column_select == '4') {
							$image_sizes .= ',(max-width:781px) 35vw , (max-width:1131px) 30vw, 20vw';
						} else {
							$image_sizes .= ',(max-width:781px) 35vw , (max-width:1131px) 30vw, 20vw';
						}
					} elseif ($list_design == 'd--postlist-rectangle') {
						if ($column_select == '2') {
							$image_sizes .= ',(max-width:781px) 35vw , (max-width:860px) 30vw, 10vw';
						} else {
							$image_sizes .= ',(max-width:781px) 35vw , (max-width:1131px) 30vw, 20vw';
						}
					} elseif ($list_design == 'd--postlist-slider d--postlist-slider-loader') {
						$image_sizes .= ',(max-width:781px) 35vw , (max-width:1131px) 30vw, 20vw';
					}
				} else {
					$image_srcset = '';
					$image_sizes = '';
				}
			} else {
				if (!empty($post_youtube_thumb)) {
					$image_url = jinr_youtube_thumbnail_url($post_id, 'medium');
					$srcsmall = jinr_youtube_thumbnail_url($post_id, 'small');
					$image_srcset = $srcsmall . ' 320w,' . $image_url . ' 640w';
				} else {
					$image_url = jinr_noimage_url('full');
					$srcmedium = jinr_noimage_url('medium');
					$srcsmall = jinr_noimage_url('small');
					$image_srcset = $srcsmall . ' 320w,' . $srcmedium . ' 640w';
				}
			}
			$timeSet = $time_display !== 'on' ? '<div class="a--post-date">' . $date . '</div>' : '';
			$catSet = $cat_display !== 'on' ? '<div class="a--post-category">' . $cat_name . '</div>' : '';

			$meta_options = "<div class='c--meta-options'></div>";

			$paid_content = get_post($post_id)->post_content;
			$blocks = parse_blocks($paid_content);
			$paidpost_price = '';
			foreach ($blocks as $key => $block) {
				if ($block['blockName'] == 'jinr-blocks/paidpost') {
					$paidpost_price = $block['attrs']['productPrice'];
					if ($paidpost_price) {
						number_format((int)$paidpost_price);
					}
				}
			}

			if ($labelToggle == true) {
				$pickup_label_display = "on";
			}
			$pickup_label = $$labelToggle == true ? "<div class='a--pickup-label' style='color:" . $$labelColor . ";background-color:rgba(" . $labelColorRgb[0] . "," . $labelColorRgb[1] . "," . $labelColorRgb[2] . ",0.12);'><span>" . $$labelText . "</span></div>" : "<div></div>";
			$paidpost_label = "<div class='a--paidpost-price'>$paidpost_price</div>";

			if ($paidpost_price_display == "on" || $pickup_label_display = "on") {
				$postmeta = "<div class='c--post-meta'>
                $pickup_label
                $paidpost_label
                </div>";
			} else {
				$postmeta = "";
			}

			if ($$varName) {
				if (jinr__thumbnail_original_used() !== true) {
					$articles .= "<article class='o--postlist-item' data-id='$post_id'>
							<a class='c--post-link' href='" . $$varName . "'>
								<figure class='c--post-image'>
									<img class='a--post-img-src' src='$image_url' alt='$title' loading='lazy' width='357' height='200' srcset='$image_srcset' sizes='$image_sizes' />
									$post_youtube_element
								</figure>
								<div class='c--post-contents'>
									<div class='a--post-title d--bold'>$title</div>
									$meta_options
									$postmeta
								</div>
							</a>
						</article>";
				} else {
					$articles .= "<article class='o--postlist-item' data-id='$post_id'>
						<a class='c--post-link' href='" . $$varName . "'>
							<figure class='c--post-image'>
								<img class='a--post-img-src' src='$image_url' alt='$title' loading='lazy' width='357' height='200'/>
								$post_youtube_element
							</figure>
							<div class='c--post-contents'>
								<div class='a--post-title d--bold'>$title</div>
								$meta_options
								$postmeta
							</div>
						</a>
					</article>";
				}
			} else {
				$articles .= "<article class='o--postlist-item' data-id='$post_id'><span style='color:#ff8c90; font-size:10px; line-height:1.35;'>※" . $i . "番目の記事URLがセットされていません</span></article>";
			}
		}
	}
	return $section_start . $articles . $more_button . $section_end;
}

//カテゴリー出し分けブロック
function jinr_category_dynamic_render_callback($block_attr, $content)
{
	$select_type      = !empty($block_attr['selectType']) ? $block_attr['selectType'] : 'selectbox';
	$topMarginPc      = !empty($block_attr['topMarginPcAttribute']) ? $block_attr['topMarginPcAttribute'] : 'auto';
	$bottomMarginPc      = !empty($block_attr['bottomMarginPcAttribute']) ? $block_attr['bottomMarginPcAttribute'] : 'auto';
	$topMarginSp      = !empty($block_attr['topMarginSpAttribute']) ? $block_attr['topMarginSpAttribute'] : 'auto';
	$bottomMarginSp      = !empty($block_attr['bottomMarginSpAttribute']) ? $block_attr['bottomMarginSpAttribute'] : 'auto';
	$displayDevice      = !empty($block_attr['displayDeviceAttribute']) ? $block_attr['displayDeviceAttribute'] : 'all';

	//詳細設定のclass
	$detail_setting = "";
	$detail_setting .= $topMarginPc !== "auto" ? $topMarginPc . " " : "";
	$detail_setting .= $bottomMarginPc !== "auto" ? $bottomMarginPc . " " : "";
	$detail_setting .= $topMarginSp !== "auto" ? $topMarginSp . " " : "";
	$detail_setting .= $bottomMarginSp !== "auto" ? $bottomMarginSp . " " : "";
	$detail_setting .= $displayDevice !== "all" ? $displayDevice . " " : "";

	$jinrBlockClassName      = !empty($block_attr['className']) ? $block_attr['className'] : '';
	$jinrBlockCSSAttribute      = !empty($block_attr['jinrBlocksCSSAttribute']) ? '<style jsx="true">' . $block_attr['jinrBlocksCSSAttribute'] . '</style>' : '';

	//セレクトボックスタイプ
	$category_id[]      = !empty($block_attr['displayCategory']) ? $block_attr['displayCategory'] : '';
	$cat_id_list = get_term_children($category_id[0], 'category');
	$merge = array_merge($category_id, $cat_id_list);

	//ID入力タイプ
	$categoryID_text = !empty($block_attr['categoryID']) ? $block_attr['categoryID'] : '';
	$categoryIDArray = explode(",", $categoryID_text);

	if ($select_type == "selectbox") {
		if (!is_home() && in_category($merge)) {
			$section_start    = "<section class='b--jinr-block b--jinr-category $detail_setting $jinrBlockClassName'>";
			$section_end      = "</section>" . $jinrBlockCSSAttribute;
			$contents = "<div class='o--jinr-category'>" . $content . "</div>";

			return $section_start . $contents . $section_end;
		} else {
			return;
		}
	} else {
		if (!is_home() && in_category($categoryIDArray)) {
			$section_start    = "<section class='b--jinr-block b--jinr-category $detail_setting $jinrBlockClassName'>";
			$section_end      = "</section>" . $jinrBlockCSSAttribute;
			$contents = "<div class='o--jinr-category'>" . $content . "</div>";

			return $section_start . $contents . $section_end;
		} else {
			return;
		}
	}
}

//ボタンブロックのコールバック
function jinr_button_dynamic_render_callback($block_attr, $content)
{
	$content      = !empty($block_attr['content']) ? $block_attr['content'] : '';
	$registerData = isset($block_attr['registerData']) ? $block_attr['registerData'] : -1;
	$inputUrl      = !empty($block_attr['inputUrl']) ? $block_attr['inputUrl'] : '';
	$buttonDesign      = !empty($block_attr['buttonDesign']) ? $block_attr['buttonDesign'] : jinr__button01_design();
	$buttonLayout      = !empty($block_attr['buttonLayout']) ? $block_attr['buttonLayout'] : 'd--button-center';
	$registeredButton      = !empty($block_attr['registeredButton']) ? $block_attr['registeredButton'] : '1';
	$afCode      = !empty($block_attr['afCode']) ? $block_attr['afCode'] : '';
	$afCodeType      = !empty($block_attr['afCodeType']) ? $block_attr['afCodeType'] : 'manual';
	$toggleTab      = !empty($block_attr['toggleTab']) ? $block_attr['toggleTab'] : '';
	$toggleMicrocopy      = !empty($block_attr['toggleMicrocopy']) ? $block_attr['toggleMicrocopy'] : '';
	$toggleArrow      = !empty($block_attr['toggleArrow']) ? $block_attr['toggleArrow'] : '';
	$microcopyText      = !empty($block_attr['microcopyText']) ? $block_attr['microcopyText'] : '';
	$microcopyDesign      = !empty($block_attr['microcopyDesign']) ? $block_attr['microcopyDesign'] : 'd--button-microcopy1';
	$arrowIcon      = !empty($block_attr['arrowIcon']) ? $block_attr['arrowIcon'] : 'none';
	$blockID      = !empty($block_attr['blockID']) ? $block_attr['blockID'] : '';

	$topMarginPc      = !empty($block_attr['topMarginPcAttribute']) ? $block_attr['topMarginPcAttribute'] : 'auto';
	$bottomMarginPc      = !empty($block_attr['bottomMarginPcAttribute']) ? $block_attr['bottomMarginPcAttribute'] : 'auto';
	$topMarginSp      = !empty($block_attr['topMarginSpAttribute']) ? $block_attr['topMarginSpAttribute'] : 'auto';
	$bottomMarginSp      = !empty($block_attr['bottomMarginSpAttribute']) ? $block_attr['bottomMarginSpAttribute'] : 'auto';
	$displayDevice      = !empty($block_attr['displayDeviceAttribute']) ? $block_attr['displayDeviceAttribute'] : 'all';
	$animationApply      = !empty($block_attr['animationApply']) ? 'd--block-animation-off' : 'js--scr-animation';

	//詳細設定のclass
	$detail_setting = "";
	$detail_setting .= $topMarginPc !== "auto" ? $topMarginPc . " " : "";
	$detail_setting .= $bottomMarginPc !== "auto" ? $bottomMarginPc . " " : "";
	$detail_setting .= $topMarginSp !== "auto" ? $topMarginSp . " " : "";
	$detail_setting .= $bottomMarginSp !== "auto" ? $bottomMarginSp . " " : "";
	$detail_setting .= $displayDevice !== "all" ? $displayDevice . " " : "";

	$jinrBlockClassName      = !empty($block_attr['className']) ? $block_attr['className'] : '';
	$jinrBlockCSSAttribute      = !empty($block_attr['jinrBlocksCSSAttribute']) ? '<style jsx="true">' . $block_attr['jinrBlocksCSSAttribute'] . '</style>' : '';

	$normalButton = do_shortcode('[jinr_button' . $registeredButton . ' href="' . $inputUrl . '" align="' . $buttonLayout . '"]<span>' . $content . '</span>[/jinr_button' . $registeredButton . ']');

	$normalButtonAnotherTab = do_shortcode('[jinr_button' . $registeredButton . ' target="true" href="' . $inputUrl . '" align="' . $buttonLayout . '"]<span>' . $content . '</span>[/jinr_button' . $registeredButton . ']');

	$afButtonManual = do_shortcode('[jinr_button' . $registeredButton . ' af="true" align="' . $buttonLayout . '"]<span>' . $afCode . '</span>[/jinr_button' . $registeredButton . ']');

	$afButtonRegistered = do_shortcode('[jinr_button' . $registeredButton . ' af="true" align="' . $buttonLayout . '"]<span>' . get_option('jinr_aff' . ($registerData + 1) . '_code') . '</span>[/jinr_button' . $registeredButton . ']');

	if (!function_exists('jinr__button_width_setting')) {
		function jinr__button_width_setting($num)
		{
			if ($num == '1') {
				return jinr__button01_width();
			} elseif ($num == '2') {
				return jinr__button02_width();
			} elseif ($num == '3') {
				return jinr__button03_width();
			} elseif ($num == '4') {
				return jinr__button04_width();
			} elseif ($num == '5') {
				return jinr__button05_width();
			} elseif ($num == '6') {
				return jinr__button06_width();
			} elseif ($num == '7') {
				return jinr__button07_width();
			} elseif ($num == '8') {
				return jinr__button08_width();
			} elseif ($num == '9') {
				return jinr__button09_width();
			} elseif ($num == '10') {
				return jinr__button010_width();
			} else {
				return 0;
			}
		}
	}

	$arrow_pd_left_calc = $arrowIcon !== "none" ? jinr__button_width_setting($registeredButton) * 0.69 - 18 . 'px' : jinr__button_width_setting($registeredButton) * 0.69 . 'px';
	$arrow_pd_left_calc_pc = $arrowIcon !== "none" ? jinr__button_width_setting($registeredButton) - 24 . 'px' : jinr__button_width_setting($registeredButton) . 'px';

	$arrow_setting = $arrowIcon !== "none" ? ".block_$blockID .d--button-type$registeredButton:not(.d--button-arrow) a::after{content:'$arrowIcon';} .block_$blockID .d--button-type$registeredButton:not(.d--button-arrow) a{padding-left:$arrow_pd_left_calc;} @media (min-width: 552px) {.block_$blockID .d--button-type$registeredButton:not(.d--button-arrow) a{padding-left:$arrow_pd_left_calc_pc;}}" : ".block_$blockID .d--button-type$registeredButton:not(.d--button-arrow) a::after{display:none;} .block_$blockID .d--button-type$registeredButton:not(.d--button-arrow) a{padding-left:$arrow_pd_left_calc;} @media (min-width: 552px) {.block_$blockID .d--button-type$registeredButton:not(.d--button-arrow) a{padding-left:$arrow_pd_left_calc_pc;}}";

	$arrow_style = $toggleArrow == "1" ? "<style>" . $arrow_setting . "</style>" : "";

	$microcopy_setting = $toggleMicrocopy == "1" ? "<div class='a--button-microcopy $microcopyDesign'><span class='a--microcopy-parts1'></span>$microcopyText<span class='a--microcopy-parts2'></span></div>" : "";

	$section_start    = "<section class='b--jinr-block b--jinr-button $detail_setting $jinrBlockClassName $animationApply block_$blockID'>$microcopy_setting";
	$section_end      = "</section>" . $jinrBlockCSSAttribute . $arrow_style;

	if (!$toggleTab) {
		if ($afCodeType == "manual") {
			if ($afCode !== "") {
				return $section_start . $afButtonManual . $section_end;
			} else {
				return $section_start . $normalButton . $section_end;
			}
		} else {
			if ($registerData !== -1) {
				return $section_start . $afButtonRegistered . $section_end;
			} else {
				return $section_start . $normalButton . $section_end;
			}
		}
	} else {
		if ($afCodeType == "manual") {
			if ($afCode !== "") {
				return $section_start . $afButtonManual . $section_end;
			} else {
				return $section_start . $normalButtonAnotherTab . $section_end;
			}
		} else {
			if ($registerData !== -1) {
				return $section_start . $afButtonRegistered . $section_end;
			} else {
				return $section_start . $normalButtonAnotherTab . $section_end;
			}
		}
	}
}

//自サイトドメインを取得
function jinr_get_this_site_domain()
{
	preg_match('/https?:\/\/(.+?)\//i', admin_url(), $results);
	return $results[1];
}

// ブログカード
function jinr_blog_card_dynamic_render_callback($block_attr, $content)
{

	$input_url      = !empty($block_attr['postUrl']) ? $block_attr['postUrl'] : '';
	$postTitle      = !empty($block_attr['postTitle']) ? $block_attr['postTitle'] : '';
	$thumbnailUrl   = !empty($block_attr['thumbnailUrl']) ? $block_attr['thumbnailUrl'] : '';
	$toggleTab      = !empty($block_attr['toggleTab']) ? $block_attr['toggleTab'] : false;
	$blogcardDesign = !empty($block_attr['blogcardDesign']) ? $block_attr['blogcardDesign'] : jinr__blogcard_design();
	$blogcardTitle  = !empty($block_attr['blogcardTitle']) ? $block_attr['blogcardTitle'] : jinr__blogcard_title();
	$blogcardLabel = !empty($block_attr['blogcardLabel']) ? $block_attr['blogcardLabel'] : jinr__blogcard_title();
	$blogcardType  = !empty($block_attr['blogcardType']) ? $block_attr['blogcardType'] : 'd--blogcard-mysite';
	$postTitleExternal = !empty($block_attr['postTitleExternal']) ? $block_attr['postTitleExternal'] : '';
	$postUrlExternal = !empty($block_attr['postUrlExternal']) ? $block_attr['postUrlExternal'] : '';
	$postImageExternal = !empty($block_attr['postImageExternal']) ? $block_attr['postImageExternal'] : jinr_noimage_url('small_size');

	if (strpos($postImageExternal, 'wp-content/themes/jinr/lib/img/noimage.png') === false) {
		$target_extension = ["/\.png\z/", "/\.jpg\z/", "/\.jpeg\z/", "/\.webp\z/"];
		$suffix_small    = ["-320x180.png", "-320x180.jpg", "-320x180.jpeg", "-320x180.webp"];
		$srcsmall = preg_replace($target_extension, $suffix_small, $postImageExternal);
		$thumbnail_small_exisits = WP_CONTENT_DIR . '/' . mb_substr($srcsmall, mb_strrpos($srcsmall, 'uploads'), mb_strlen($srcsmall));
		if (file_exists($thumbnail_small_exisits)) {
			$postImageExternal = $srcsmall;
		}
	}
	$site_domain = jinr_get_this_site_domain();

	$topMarginPc      = !empty($block_attr['topMarginPcAttribute']) ? $block_attr['topMarginPcAttribute'] : 'auto';
	$bottomMarginPc      = !empty($block_attr['bottomMarginPcAttribute']) ? $block_attr['bottomMarginPcAttribute'] : 'auto';
	$topMarginSp      = !empty($block_attr['topMarginSpAttribute']) ? $block_attr['topMarginSpAttribute'] : 'auto';
	$bottomMarginSp      = !empty($block_attr['bottomMarginSpAttribute']) ? $block_attr['bottomMarginSpAttribute'] : 'auto';
	$displayDevice      = !empty($block_attr['displayDeviceAttribute']) ? $block_attr['displayDeviceAttribute'] : 'all';

	//詳細設定のclass
	$detail_setting = "";
	$detail_setting .= $topMarginPc !== "auto" ? $topMarginPc . " " : "";
	$detail_setting .= $bottomMarginPc !== "auto" ? $bottomMarginPc . " " : "";
	$detail_setting .= $topMarginSp !== "auto" ? $topMarginSp . " " : "";
	$detail_setting .= $bottomMarginSp !== "auto" ? $bottomMarginSp . " " : "";
	$detail_setting .= $displayDevice !== "all" ? $displayDevice . " " : "";

	$jinrBlockClassName      = !empty($block_attr['className']) ? $block_attr['className'] : '';
	$jinrBlockCSSAttribute      = !empty($block_attr['jinrBlocksCSSAttribute']) ? '<style jsx="true">' . $block_attr['jinrBlocksCSSAttribute'] . '</style>' : '';

	if ($blogcardType == 'd--blogcard-mysite') { //内部リンク

		if ($input_url !== '') {

			$request = new WP_REST_Request('GET', '/jinr/post_by_url');
			$request->set_query_params(array('url' => $block_attr['postUrl']));
			$response = rest_do_request($request);
			$server   = rest_get_server();
			$data     = $server->response_to_data($response, false);

			$post_url        = $input_url;
			$post_ID         = url_to_postid($post_url);
			$thumbnail_url = !get_the_post_thumbnail_url($post_ID, 'small_size') == "" ? get_the_post_thumbnail_url($post_ID, 'small_size') : jinr_youtube_thumbnail_url($post_ID, 'small');
			if ($thumbnail_url == null) {
				$thumbnail_url = jinr_noimage_url('small_size');
			}

			//ホームURLの場合の条件分岐
			if ($input_url == home_url() || $input_url == home_url('/')) {

				$site_title = get_bloginfo('name');
				$custom_post_title = get_post_meta($post_ID, 'jin_seotitle', true);
				$description =  !get_bloginfo('description') == "" ? jinr__title_sepalater() . get_bloginfo('description') : "";

				//OGPイメージが設定されている場合のサムネイル分岐
				if (!jinr__ogp_image_url() == "" || !empty(jinr__ogp_image_url())) {
					$img_url = jinr__ogp_image_url();
					$img_id = attachment_url_to_postid($img_url);
					$thumbnail_url = wp_get_attachment_image_src($img_id, 'small_size');
					$thumbnail_url = $thumbnail_url[0];
				}

				if (!$custom_post_title == "" || !empty($custom_post_title)) {
					$site_name = $custom_post_title;
				} else {
					$site_name = $site_title . $description;
				}

				$post_title    = $site_name;
			} else {
				$post_url        = $input_url;
				$post_ID         = url_to_postid($post_url);
				$post_title    = $data['title'];
			}
		} else {
			$post_url        = $input_url;
			$thumbnail_url = jinr_noimage_url('small_size');
			$post_title    = '記事を取得できませんでした';
		}
	} else { //外部リンク
		$post_url   = $postUrlExternal;
		$post_title = $postTitleExternal;
		$thumbnail_url = $postImageExternal;
	}

	$section_start = '<section class="b--jinr-block b--jinr-blogcard d--blogcard-hover-up ' . $blogcardDesign . ' ' . $blogcardType . ' t--round ' . $detail_setting . $jinrBlockClassName . '">';

	if ($blogcardDesign === 'd--blogcard-style1') {
		$inner1 = '<div class="a--blogcard-label ef">' . $blogcardLabel . '</div>';
	} else {
		$inner1 = '';
	}

	if ($toggleTab === true) {
		$inner2 = '<a class="o--blogcard-link t--round" href="' . $post_url . '" target="_blank">';
	} else {
		$inner2 = '<a class="o--blogcard-link t--round" href="' . $post_url . '">';
	}

	$inner3      = '<div class="c--blogcard-image"><img class="a--blogcard-img-src" width="128" height="72" src="' . $thumbnail_url . '" alt="' . $post_title . '" /></div>';
	$inner4      = '<div class="a--blogcard-title d--bold">' . $post_title . '</div>';
	$inner5      = '</a>';
	$section_end = '</section>' . $jinrBlockCSSAttribute;

	return $section_start . $inner1 . $inner2 . $inner3 . $inner4 . $inner5 . $section_end;
}

/**
 * 有料記事ブロックのcallback
 */
function jinr_paidpost_count_text($blocks)
{
	$totalLength = 0;
	$block_flag = false;
	foreach ($blocks as $block) {
		if ($block['blockName'] === 'jinr-blocks/paidpost') {
			$block_flag = true;
		}
		if (!empty($block['innerBlocks'])) {
			foreach ($block['innerBlocks'] as $innerBlock) {
				if ($innerBlock['blockName'] === 'jinr-blocks/paidpost') {
					$block_flag = true;
				}
			}
		}
		if ($block_flag) {
			if ($block['blockName'] === 'core/paragraph' || $block['blockName'] === 'core/heading' || $block['blockName'] === 'jinr-blocks/simplebox') {
				// 見出し、段落、ボックス（タイトル付きも）
				if ($block['blockName'] === 'jinr-blocks/simplebox') {
					// インナーブロック対応
					$length = mb_strlen(strip_tags(str_replace(["\r\n", "\r", "\n"], '', $block['innerBlocks'][0]['innerHTML'])), 'UTF-8');
					$totalLength += $length;
				}
				if ($block['innerContent'][0]) {
					$length = mb_strlen(strip_tags(str_replace(["\r\n", "\r", "\n"], '', $block['innerContent'][0])), 'UTF-8');
					$totalLength += $length;
				}
			} elseif ($block['blockName'] === 'core/list') {
				foreach ($block['innerBlocks'] as $list) {
					if ($list['innerHTML']) {
						$length = mb_strlen(strip_tags(str_replace(["\r\n", "\r", "\n"], '', $list['innerHTML'])), 'UTF-8');
						$totalLength += $length;
					}
				}
			} elseif ($block['blockName'] === 'jinr-blocks/button') {
				if ($block['attrs']['content']) {
					$length = mb_strlen(strip_tags(str_replace(["\r\n", "\r", "\n"], '', $block['attrs']['content'])), 'UTF-8');
					$totalLength += $length;
				}
			} elseif ($block['blockName'] === 'jinr-blocks/designtitle') {
				if ($block['attrs']['mainText']) {
					$length = mb_strlen(strip_tags(str_replace(["\r\n", "\r", "\n"], '', $block['attrs']['mainText'])), 'UTF-8');
					$totalLength += $length;
				}
				if ($block['attrs']['subText']) {
					$length = mb_strlen(strip_tags(str_replace(["\r\n", "\r", "\n"], '', $block['attrs']['subText'])), 'UTF-8');
					$totalLength += $length;
				}
			} elseif ($block['blockName'] === 'jinr-blocks/timeline') {
				// タイムラインタイトル
				foreach ($block['innerBlocks'] as $timeline) {
					if ($timeline['innerHTML']) {
						$length = mb_strlen(strip_tags(str_replace(["\r\n", "\r", "\n"], '', $timeline['innerHTML'])), 'UTF-8');
						$totalLength += $length;
					}
					// インナーブロック対応
					$length = mb_strlen(strip_tags(str_replace(["\r\n", "\r", "\n"], '', $block['innerBlocks'][0]['innerBlocks'][0]['innerHTML'])), 'UTF-8');
					$totalLength += $length;
				}
			} elseif ($block['blockName'] === 'jinr-blocks/accordion') {
				foreach ($block['innerBlocks'] as $accordion) {
					if ($accordion['innerHTML']) {
						$length = mb_strlen(strip_tags(str_replace(["\r\n", "\r", "\n"], '', $accordion['innerHTML'])), 'UTF-8');
						$totalLength += $length;
					}
					//インナーブロック対応
					$length = mb_strlen(strip_tags(str_replace(["\r\n", "\r", "\n"], '', $block['innerBlocks'][0]['innerBlocks'][0]['innerHTML'])), 'UTF-8');
					$totalLength += $length;
				}
			} elseif ($block['blockName'] === 'jinr-blocks/fukidashi') {
				//インナーブロック対応
				$length = mb_strlen(strip_tags(str_replace(["\r\n", "\r", "\n"], '', $block['innerBlocks'][0]['innerHTML'])), 'UTF-8');
				$totalLength += $length;
			} elseif ($block['blockName'] === 'jinr-blocks/iconbox') {
				//インナーブロック対応
				$length = mb_strlen(strip_tags(str_replace(["\r\n", "\r", "\n"], '', $block['innerBlocks'][0]['innerHTML'])), 'UTF-8');
				$totalLength += $length;
			}
			if (!empty($block['innerBlocks'])) {
				$totalLength += jinr_paidpost_count_text($block['innerBlocks']);
			}
		}
	}
	return $totalLength;
}
function jinr_paidpost_dynamic_render_callback($block_attr, $content)
{
	if (array_key_exists('productID', $block_attr)) {
		$productID = esc_html($block_attr['productID']);
	} else {
		$productID = '';
	}
	if (array_key_exists('productUrl', $block_attr)) {
		$productURL = esc_html($block_attr['productUrl']);
	} else {
		$productURL = '';
	}
	if (array_key_exists('productText', $block_attr)) {
		$productText = esc_html($block_attr['productText']);
	} else {
		$productText = 'ここから先は限定公開です';
	}
	if (array_key_exists('productToggle', $block_attr)) {
		$productToggle = esc_html($block_attr['productToggle']);
	} else {
		$productToggle = false;
	}
	if (array_key_exists('productButtonText', $block_attr)) {
		$productButtonText = $block_attr['productButtonText'];
	} else {
		$productButtonText = '続きを見る';
	}
	if (array_key_exists('productPrice', $block_attr)) {
		$productPrice = $block_attr['productPrice'];
		$productPrice = '<span class="b--jinr-price">' . $productPrice . '</span>';
	} else {
		$productPrice = '';
	}
	$productRegisteredButton = '';
	if (!isset($block_attr['productRegisteredButton'])) {
		$productRegisteredButton = '1';
	} else {
		$productRegisteredButton = $block_attr['productRegisteredButton'];
	}
	$prodoctCotinue = '';
	if ($productToggle === '1') {
		global $post;
		if (is_category()) {
			$page_ids = get_posts(array(
				'posts_per_page' => -1,
				'fields'         => 'ids',
				'post_type'      => 'page',
			));
			//変数初期値設定
			$edit_category_ids = array();
			$target_page_id = "";
			$counter = 0;
			$pair_ids = array();
			foreach ($page_ids as $page_id) {
				$jinr_category = get_post_meta($page_id, '_jinr_category', true);
				//現在のカテゴリーページID
				$cat_id = get_query_var('cat');
				$edit_category_ids[] = $jinr_category;
				$pair_ids += array(
					$page_ids[$counter] => $edit_category_ids[$counter],
				);
				$counter++;
			}
			$target_page_id = array_search($cat_id, $pair_ids);
			if ($post->ID !== $target_page_id) {
				$category_page_content = get_post($target_page_id)->post_content;
				$blocks = parse_blocks($category_page_content);
				$totalLength = jinr_paidpost_count_text($blocks);
			} else {
				$blocks = parse_blocks($post->post_content);
				$totalLength = jinr_paidpost_count_text($blocks);
			}
		} else {
			$blocks = parse_blocks($post->post_content);
			$totalLength = jinr_paidpost_count_text($blocks);
		}
		$prodoctCotinue = '<div class="b--paidpost-remaining">この続きの文字数: 「' . $totalLength . '文字」</div>';
	}
	$buttonShort = '';
	$productForAdmin = '';
	if (!is_user_logged_in()) {
		$buttonShort = do_shortcode('[jinr_button' . $productRegisteredButton . ' href="#" align="d--button-center"]' . $productButtonText . $productPrice . '[/jinr_button' . $productRegisteredButton . ']');
		$alreadyRegister = '<p class="a--paidpost-already">すでに購入済みの方は<a href="#" id="JinrAlreadyRegisterUser">こちら</a></p>';
	} else {
		if (current_user_can('administrator')) {
			$productForAdmin = '<div class="b--paidpost-foradmin">サイト運営者（管理者権限ユーザー）には、限定記事の内容も表示されています。<br>実際の表示を確認するにはログアウトしてください。</div>';
		}
		$buttonShort = do_shortcode('[jinr_button' . $productRegisteredButton . ' href="' . $productURL . '" align="d--button-center"]' . $productButtonText . $productPrice . '[/jinr_button' . $productRegisteredButton . ']');
		$alreadyRegister = '';
		/**
		 * 購入済みか検証
		 * Stripe APIを使用してサブスクの商品を購入しているかどうかを検証し、購入している場合は解約ボタンを表示させる
		 */
		if (get_option('jinr_paidpost_subscription_check') === '1') {
			require_once(__DIR__ . '/../vendor/autoload.php');
			$subscriptionSecretKey = get_option('jinr_paidpost_secret_key');
			\Stripe\Stripe::setApiKey($subscriptionSecretKey);
			$payment_links = \Stripe\PaymentLink::all(['limit' => 100]);
			$user = wp_get_current_user();
			$current_user_product_ids = get_user_meta($user->ID, 'productID', true);
			$scribe_urls = array();
			foreach ($payment_links->data as $link) {
				if ($link->subscription_data) {
					$scribe_urls[] = $link->url;
				}
			}

			$searchEmail = $user->user_email;
			$customers = \Stripe\Customer::all([
				'limit' => 20,
				'email' => $searchEmail,
			]);
			foreach ($customers as $customer) {
				$subscriptions = \Stripe\Subscription::all([
					'customer' => $customer->id,
				]);

				foreach ($subscriptions as $subscription) {
					$status = $subscription->status;
					if ($status !== 'active') {
						if (!empty($current_user_product_ids)) {
							$current_user_product_ids = explode(',', $current_user_product_ids);
							if ($productID) {
								foreach ($current_user_product_ids as $key => $current_user_product_id) {
									if ($productID == $current_user_product_id) {
										unset($current_user_product_ids[$key]);
										$current_user_product_ids = array_values($current_user_product_ids);
										$updated_product_ids = implode(',', $current_user_product_ids);
										update_user_meta($user->ID, 'productID', $updated_product_ids);
									}
								}
							}
						}
					}
				}
			}

			if (!empty($current_user_product_ids)) {
				$current_user_product_ids = explode(',', $current_user_product_ids);
				foreach ($current_user_product_ids as $current_user_product_id) {
					if (empty($scribe_urls)) {
						if ($productID === $current_user_product_id) {
							$paidContent = '<div id="JinrPaidContents" class="b--jinr-block-container">
						<div class="b--jinr-paid-container"><span class="b--jinr-paid-text">' . $productText . '</span></div>
						<div class="b--paidpost-more">' . $prodoctCotinue . '</div>
						' . $productForAdmin . '
						<input type="hidden" id="JinrPaidpostID" name="paidpost_product_id" value="' . $productID . '">
						<input type="hidden" id="JinrPaidpostURL" name="paidpost_product_url" value="' . $productURL . '">
						</div>';
							return $paidContent;
						}
					} else {
						// ユーザーが記事を購入しているかチェック
						if ($productID === $current_user_product_id) {
							foreach ($scribe_urls as $scribe_url) {
								if (false !== strpos($scribe_url, $current_user_product_id)) {
									$paidContent = '<div id="JinrPaidContents" class="b--jinr-block-container">
									<div class="b--jinr-paid-container"><span class="b--jinr-paid-text">' . $productText . '</span></div>
									<p class="a--paidpost-cancel"><span id="JinrUnsubscribePopup" class="a--paidpost-btn">サブスクを解約する</p>
									<input type="hidden" id="JinrPaymentLink" name="paidpost_payment_link" value="' . $scribe_url . '">
									</div>';
									return $paidContent;
								}
							}
							// ユーザーが記事を購入しているが、サブスクを購入していない場合
							$paidContent = '<div id="JinrPaidContents" class="b--jinr-block-container">
							<div class="b--jinr-paid-container"><span class="b--jinr-paid-text">' . $productText . '</span></div>
							<input type="hidden" id="JinrPaidpostID" name="paidpost_product_id" value="' . $productID . '">
							<input type="hidden" id="JinrPaidpostURL" name="paidpost_product_url" value="' . $productURL . '">
							</div>';
							return $paidContent;
						}
					}
				}
			}
		} else {
			$user = wp_get_current_user();
			$current_user_product_ids = get_user_meta($user->ID, 'productID', true);
			if (!empty($current_user_product_ids)) {
				$current_user_product_ids = explode(',', $current_user_product_ids);
				foreach ($current_user_product_ids as $current_user_product_id) {
					if ($productID === $current_user_product_id) {
						$paidContent = '<div id="JinrPaidContents" class="b--jinr-block-container">
							<div class="b--jinr-paid-container"><span class="b--jinr-paid-text">' . $productText . '</span></div>
							<input type="hidden" id="JinrPaidpostID" name="paidpost_product_id" value="' . $productID . '">
							<input type="hidden" id="JinrPaidpostURL" name="paidpost_product_url" value="' . $productURL . '">
							</div>';
						return $paidContent;
					}
				}
			}
		}
	}
	$paidContent = '<div id="JinrPaidContents" class="b--jinr-block-container">
	<div class="b--jinr-paid-container"><span class="b--jinr-paid-text">' . $productText . '</span></div>
	<div class="b--paidpost-more">' . $prodoctCotinue . '</div>
	<div class="b--jinr-block b--jinr-button">' . $buttonShort . '</div>
	' . $alreadyRegister . '' . $productForAdmin . '
	<input type="hidden" id="JinrPaidpostID" name="paidpost_product_id" value="' . $productID . '">
	<input type="hidden" id="JinrPaidpostURL" name="paidpost_product_url" value="' . $productURL . '">
	</div>';

	return $paidContent;
}

// 有料記事の会員登録のポップアップのマークアップを出力
function jinr_switch_paid_popup_form()
{
	global $post;
	if (!$post) {
		return;
	}
	if (is_category()) {
		$page_ids = get_posts(array(
			'posts_per_page' => -1,
			'fields'         => 'ids',
			'post_type'      => 'page',
		));
		//変数初期値設定
		$edit_category_ids = array();
		$target_page_id = "";
		$counter = 0;
		$pair_ids = array();
		foreach ($page_ids as $page_id) {
			$jinr_category = get_post_meta($page_id, '_jinr_category', true);
			//現在のカテゴリーページID
			$cat_id = get_query_var('cat');
			$edit_category_ids[] = $jinr_category;
			$pair_ids += array(
				$page_ids[$counter] => $edit_category_ids[$counter],
			);
			$counter++;
		}
		$target_page_id = array_search($cat_id, $pair_ids);
		if ($post->ID !== $target_page_id) {
			$post = get_post($target_page_id);
		}
	}
	if (strpos($post->post_content, '<!-- wp:jinr-blocks/paidpost') !== false) {
		get_template_part('object/paidpost-popup');
	}
}
add_action('jinr_switch_output_paid_form', 'jinr_switch_paid_popup_form');


add_filter('user_contactmethods', 'jinr_user_contactmethods_custom');

// 項目の登録
function jinr_user_contactmethods_custom($profile_items)
{
	$profile_items['productID']   = '商品ID';
	return $profile_items;
}

// ユーザー新規作成に項目を追加する。
add_action('user_new_form', 'jinr_user_new_profile_custom');
function jinr_user_new_profile_custom()
{
	$productID   = $_POST['productID'];
?>
	<table class='form-table'>
		<tr class='form-field'>
			<th><label for='productID'>商品ID</label></th>
			<td><input type='text' name='productID' value='<?php echo esc_attr($productID) ?>' /></td>
		</tr>
	</table>
<?php
}
// 購入者（購読者）のツールバーを非表示にする
add_action('after_setup_theme', 'subscriber_hide_admin_bar');
function subscriber_hide_admin_bar()
{
	$user = wp_get_current_user();
	if (isset($user->data) && !$user->has_cap('edit_posts')) {
		show_admin_bar(false);
	}
}


// 決済完了ページを動的に一回だけ作成する
function jinr_paidpost_completepage_create()
{
	$paidCompeteSlug = get_page_by_path('thanks-page-template');
	$paidTermsSlug = get_page_by_path('paidpost-terms');
	if (empty($paidCompeteSlug)) {
		$pagepresetarry = array(
			'post_title'    => '有料記事の決済完了ページ',
			'post_content'  => '',
			'post_name'     => 'thanks-page-template',
			'post_status'   => 'publish',
			'post_type'     => 'page',
			'page_template' => 'template-thanks-page.php',
		);
		$presetId = wp_insert_post($pagepresetarry);

		// サンクスページはnoindexにする
		if ($presetId != 0) {
			update_post_meta($presetId, '_jinr_noindex_display', 1);
		};
	}
	if (empty($paidTermsSlug)) {
		$pagetermsarray = array(
			'post_title'    => '利用規約／特定商取引法に基づく表記',
			'post_content'  => '<!-- wp:heading {"level":3} -->
			<h3 class="jinr-heading d--bold">利用規約</h3>
			<!-- /wp:heading --><!-- wp:paragraph -->
			<p>この利用規約（以下，「本規約」といいます。）は，〇〇（以下，「当社」といいます。）がこのウェブサイト上で提供するオンラインショップ（以下，「本サービス」といいます。）の利用条件を定めるものです。登録ユーザーの皆さま（以下，「ユーザー」といいます。）には，本規約に従って，本サービスをご利用いただきます。</p>
			<!-- /wp:paragraph --><!-- wp:heading {"level":4} -->
			<h4 class="jinr-heading d--bold">第1条（適用）</h4>
			<!-- /wp:heading --><!-- wp:list {"ordered":true} -->
			<ol class="jinr-list"><!-- wp:list-item -->
			<li>本規約は，ユーザーと当社との間の本サービスの利用に関わる一切の関係に適用されるものとします。</li>
			<!-- /wp:list-item --><!-- wp:list-item -->
			<li>当社は本サービスに関し，本規約のほか，ご利用にあたってのルール等，各種の定め（以下,「個別規定」といいます。）をすることがあります。これら個別規定はその名称のいかんに関わらず，本規約の一部を構成するものとします。</li>
			<!-- /wp:list-item --><!-- wp:list-item -->
			<li>本規約の定めが前項の個別規定の定めと矛盾する場合には，個別規定において特段の定めなき限り，個別規定の定めが優先されるものとします。</li>
			<!-- /wp:list-item --></ol>
			<!-- /wp:list --><!-- wp:heading {"level":4} -->
			<h4 class="jinr-heading d--bold">第2条（利用登録）</h4>
			<!-- /wp:heading --><!-- wp:list {"ordered":true} -->
			<ol class="jinr-list"><!-- wp:list-item -->
			<li>本サービスにおいては，登録希望者が本規約に同意の上，当社の定める方法によって利用登録を申請し，当社がこれに対する承認を登録希望者に通知することによって，利用登録が完了するものとします。</li>
			<!-- /wp:list-item --><!-- wp:list-item -->
			<li>当社は，利用登録の申請者に以下の事由があると判断した場合，利用登録の申請を承認しないことがあり，その理由については一切の開示義務を負わないものとします。<!-- wp:list {"ordered":true} -->
			<ol class="jinr-list"><!-- wp:list-item -->
			<li>利用登録の申請に際して虚偽の事項を届け出た場合</li>
			<!-- /wp:list-item --><!-- wp:list-item -->
			<li>本規約に違反したことがある者からの申請である場合</li>
			<!-- /wp:list-item --><!-- wp:list-item -->
			<li>その他，当社が利用登録を相当でないと判断した場合</li>
			<!-- /wp:list-item --></ol>
			<!-- /wp:list --></li>
			<!-- /wp:list-item --></ol>
			<!-- /wp:list --><!-- wp:heading {"level":4} -->
			<h4 class="jinr-heading d--bold">第3条（ユーザーIDおよびパスワードの管理）</h4>
			<!-- /wp:heading --><!-- wp:list {"ordered":true} -->
			<ol class="jinr-list"><!-- wp:list-item -->
			<li>ユーザーは，自己の責任において，本サービスのユーザーIDおよびパスワードを管理するものとします。</li>
			<!-- /wp:list-item --><!-- wp:list-item -->
			<li>ユーザーは，いかなる場合にも，ユーザーIDおよびパスワードを第三者に譲渡または貸与し，もしくは第三者と共用することはできません。当社は，ユーザーIDとパスワードの組み合わせが登録情報と一致してログインされた場合には，そのユーザーIDを登録しているユーザー自身による利用とみなします。</li>
			<!-- /wp:list-item --><!-- wp:list-item -->
			<li>ユーザーID及びパスワードが第三者に使用されたことによって生じた損害は，当社に故意又は重大な過失がある場合を除き，当社は一切の責任を負わないものとします。</li>
			<!-- /wp:list-item --></ol>
			<!-- /wp:list --><!-- wp:heading {"level":4} -->
			<h4 class="jinr-heading d--bold">第4条（売買契約）</h4>
			<!-- /wp:heading --><!-- wp:list {"ordered":true} -->
			<ol class="jinr-list"><!-- wp:list-item -->
			<li>本サービスにおいては，ユーザーが当社に対して購入の申し込みをし，これに対して当社が当該申し込みを承諾した旨の通知をすることによって売買契約が成立するものとします。</li>
			<!-- /wp:list-item --><!-- wp:list-item -->
			<li>当社は，ユーザーが以下のいずれかの事由に該当する場合には，当該ユーザーに事前に通知することなく，前項の売買契約を解除することができるものとします。<!-- wp:list {"ordered":true} -->
			<ol class="jinr-list"><!-- wp:list-item -->
			<li>ユーザーが本規約に違反した場合</li>
			<!-- /wp:list-item --><!-- wp:list-item -->
			<li>その他当社とユーザーの信頼関係が損なわれたと認める場合</li>
			<!-- /wp:list-item --></ol>
			<!-- /wp:list --></li>
			<!-- /wp:list-item --><!-- wp:list-item -->
			<li>本サービスに関する決済方法，購入の申し込みのキャンセル方法，または返品方法等については，別途当社が定める方法によります。</li>
			<!-- /wp:list-item --></ol>
			<!-- /wp:list --><!-- wp:heading {"level":4} -->
			<h4 class="jinr-heading d--bold">第5条（知的財産権）</h4>
			<!-- /wp:heading --><!-- wp:paragraph -->
			<p>本サービスによって提供される商品写真その他のコンテンツ（以下「コンテンツ」といいます）の著作権又はその他の知的所有権は,当社及びコンテンツ提供者などの正当な権利者に帰属し,ユーザーは,これらを無断で複製,転載,改変,その他の二次利用をすることはできません。</p>
			<!-- /wp:paragraph --><!-- wp:heading {"level":4} -->
			<h4 class="jinr-heading d--bold">第6条（禁止事項）</h4>
			<!-- /wp:heading --><!-- wp:paragraph -->
			<p>ユーザーは，本サービスの利用にあたり，以下の行為をしてはならないものとします。</p>
			<!-- /wp:paragraph --><!-- wp:list {"ordered":true} -->
			<ol class="jinr-list"><!-- wp:list-item -->
			<li>法令または公序良俗に違反する行為</li>
			<!-- /wp:list-item --><!-- wp:list-item -->
			<li>犯罪行為に関連する行為</li>
			<!-- /wp:list-item --><!-- wp:list-item -->
			<li>本サービスに含まれる著作権，商標権その他の知的財産権を侵害する行為</li>
			<!-- /wp:list-item --><!-- wp:list-item -->
			<li>当社のサーバーまたはネットワークの機能を破壊したり，妨害したりする行為</li>
			<!-- /wp:list-item --><!-- wp:list-item -->
			<li>本サービスによって得られた情報を商業的に利用する行為</li>
			<!-- /wp:list-item --><!-- wp:list-item -->
			<li>当社のサービスの運営を妨害するおそれのある行為</li>
			<!-- /wp:list-item --><!-- wp:list-item -->
			<li>不正アクセスをし，またはこれを試みる行為</li>
			<!-- /wp:list-item --><!-- wp:list-item -->
			<li>他のユーザーに関する個人情報等を収集または蓄積する行為</li>
			<!-- /wp:list-item --><!-- wp:list-item -->
			<li>他のユーザーに成りすます行為</li>
			<!-- /wp:list-item --><!-- wp:list-item -->
			<li>当社のサービスに関連して，反社会的勢力に対して直接または間接に利益を供与する行為</li>
			<!-- /wp:list-item --><!-- wp:list-item -->
			<li>その他，当社が不適切と判断する行為</li>
			<!-- /wp:list-item --></ol>
			<!-- /wp:list --><!-- wp:heading {"level":4} -->
			<h4 class="jinr-heading d--bold">第7条（本サービスの提供の停止等）</h4>
			<!-- /wp:heading --><!-- wp:list {"ordered":true} -->
			<ol class="jinr-list"><!-- wp:list-item -->
			<li>当社は，以下のいずれかの事由があると判断した場合，ユーザーに事前に通知することなく本サービスの全部または一部の提供を停止または中断することができるものとします。<!-- wp:list {"ordered":true} -->
			<ol class="jinr-list"><!-- wp:list-item -->
			<li>本サービスにかかるコンピュータシステムの保守点検または更新を行う場合</li>
			<!-- /wp:list-item --><!-- wp:list-item -->
			<li>地震，落雷，火災，停電または天災などの不可抗力により，本サービスの提供が困難となった場合</li>
			<!-- /wp:list-item --><!-- wp:list-item -->
			<li>コンピュータまたは通信回線等が事故により停止した場合</li>
			<!-- /wp:list-item --><!-- wp:list-item -->
			<li>その他，当社が本サービスの提供が困難と判断した場合</li>
			<!-- /wp:list-item --></ol>
			<!-- /wp:list --></li>
			<!-- /wp:list-item --><!-- wp:list-item -->
			<li>当社は，本サービスの提供の停止または中断により，ユーザーまたは第三者が被ったいかなる不利益または損害について，理由を問わず一切の責任を負わないものとします。</li>
			<!-- /wp:list-item --></ol>
			<!-- /wp:list --><!-- wp:heading {"level":4} -->
			<h4 class="jinr-heading d--bold">第8条（利用制限および登録抹消）</h4>
			<!-- /wp:heading --><!-- wp:list {"ordered":true} -->
			<ol class="jinr-list"><!-- wp:list-item -->
			<li>当社は，以下のいずれかに該当する場合には，事前の通知なく，ユーザーに対して，本サービスの全部もしくは一部の利用を制限し，またはユーザーとしての登録を抹消することができるものとします。<!-- wp:list {"ordered":true} -->
			<ol class="jinr-list"><!-- wp:list-item -->
			<li>本規約のいずれかの条項に違反した場合</li>
			<!-- /wp:list-item --><!-- wp:list-item -->
			<li>登録事項に虚偽の事実があることが判明した場合</li>
			<!-- /wp:list-item --><!-- wp:list-item -->
			<li>決済手段として当該ユーザーが届け出たクレジットカードが利用停止となった場合</li>
			<!-- /wp:list-item --><!-- wp:list-item -->
			<li>料金等の支払債務の不履行があった場合</li>
			<!-- /wp:list-item --><!-- wp:list-item -->
			<li>当社からの連絡に対し，一定期間返答がない場合</li>
			<!-- /wp:list-item --><!-- wp:list-item -->
			<li>本サービスについて，最終の利用から一定期間利用がない場合</li>
			<!-- /wp:list-item --><!-- wp:list-item -->
			<li>その他，当社が本サービスの利用を適当でないと判断した場合</li>
			<!-- /wp:list-item --></ol>
			<!-- /wp:list --></li>
			<!-- /wp:list-item --><!-- wp:list-item -->
			<li>当社は，本条に基づき当社が行った行為によりユーザーに生じた損害について，一切の責任を負いません。</li>
			<!-- /wp:list-item --></ol>
			<!-- /wp:list --><!-- wp:heading {"level":4} -->
			<h4 class="jinr-heading d--bold">第9条（退会）</h4>
			<!-- /wp:heading --><!-- wp:paragraph -->
			<p>ユーザーは，所定の退会手続により，本サービスから退会できるものとします。</p>
			<!-- /wp:paragraph --><!-- wp:heading {"level":4} -->
			<h4 class="jinr-heading d--bold">第10条（保証の否認および免責事項）</h4>
			<!-- /wp:heading --><!-- wp:list {"ordered":true} -->
			<ol class="jinr-list"><!-- wp:list-item -->
			<li>当社は,本サービスに事実上または法律上の瑕疵（安全性,信頼性,正確性,完全性,有効性,特定の目的への適合性,セキュリティなどに関する欠陥,エラーやバグ,権利侵害などを含みます。）がないことを保証するものではありません。</li>
			<!-- /wp:list-item --><!-- wp:list-item -->
			<li>当社は,本サービスによってユーザーに生じたあらゆる損害について,一切の責任を負いません。ただし,本サービスに関する当社とユーザーとの間の契約（本規約を含みます。）が消費者契約法に定める消費者契約となる場合,この免責規定は適用されませんが,この場合であっても,当社は,当社の過失（重過失を除きます。）による債務不履行または不法行為によりユーザーに生じた損害のうち特別な事情から生じた損害（当社またはユーザーが損害発生につき予見し,または予見し得た場合を含みます。）について一切の責任を負いません。</li>
			<!-- /wp:list-item --><!-- wp:list-item -->
			<li>当社は，本サービスに関して，ユーザーと他のユーザーまたは第三者との間において生じた取引，連絡または紛争等について一切責任を負いません。</li>
			<!-- /wp:list-item --></ol>
			<!-- /wp:list --><!-- wp:heading {"level":4} -->
			<h4 class="jinr-heading d--bold">第11条（サービス内容の変更等）</h4>
			<!-- /wp:heading --><!-- wp:paragraph -->
			<p>当社は，ユーザーに通知することなく，本サービスの内容を変更しまたは本サービスの提供を中止することができるものとし，これによってユーザーに生じた損害について一切の責任を負いません。</p>
			<!-- /wp:paragraph --><!-- wp:heading {"level":4} -->
			<h4 class="jinr-heading d--bold">第12条（利用規約の変更）</h4>
			<!-- /wp:heading --><!-- wp:paragraph -->
			<p>当社は，必要と判断した場合には，ユーザーに通知することなくいつでも本規約を変更することができるものとします。なお，本規約の変更後，本サービスの利用を開始した場合には，当該ユーザーは変更後の規約に同意したものとみなします。</p>
			<!-- /wp:paragraph --><!-- wp:heading {"level":4} -->
			<h4 class="jinr-heading d--bold">第13条（個人情報の取扱い）</h4>
			<!-- /wp:heading --><!-- wp:paragraph -->
			<p>当社は，本サービスの利用によって取得する個人情報については，当社「プライバシーポリシー」に従い適切に取り扱うものとします。</p>
			<!-- /wp:paragraph --><!-- wp:heading {"level":4} -->
			<h4 class="jinr-heading d--bold">第14条（通知または連絡）</h4>
			<!-- /wp:heading --><!-- wp:paragraph -->
			<p>ユーザーと当社との間の通知または連絡は，当社の定める方法によって行うものとします。当社は,ユーザーから,当社が別途定める方式に従った変更届け出がない限り,現在登録されている連絡先が有効なものとみなして当該連絡先へ通知または連絡を行い,これらは,発信時にユーザーへ到達したものとみなします。</p>
			<!-- /wp:paragraph --><!-- wp:heading {"level":4} -->
			<h4 class="jinr-heading d--bold">第15条（権利義務の譲渡の禁止）</h4>
			<!-- /wp:heading --><!-- wp:paragraph -->
			<p>ユーザーは，当社の書面による事前の承諾なく，利用契約上の地位または本規約に基づく権利もしくは義務を第三者に譲渡し，または担保に供することはできません。</p>
			<!-- /wp:paragraph --><!-- wp:heading {"level":4} -->
			<h4 class="jinr-heading d--bold">第16条（準拠法・裁判管轄）</h4>
			<!-- /wp:heading --><!-- wp:list {"ordered":true} -->
			<ol class="jinr-list"><!-- wp:list-item -->
			<li>本規約の解釈にあたっては，日本法を準拠法とします。なお，本サービスに関しては，国際物品売買契約に関する国際連合条約の適用を排除するものとします。</li>
			<!-- /wp:list-item --><!-- wp:list-item -->
			<li>本サービスに関して紛争が生じた場合には，当社の本店所在地を管轄する裁判所を専属的合意管轄裁判所とします。</li>
			<!-- /wp:list-item --></ol>
			<!-- /wp:list --><!-- wp:heading {"level":3} -->
			<h3 class="jinr-heading d--bold">特定商取引法に基づく表記</h3>
			<!-- /wp:heading --><!-- wp:heading {"level":4} -->
			<h4 class="jinr-heading d--bold">サービス名</h4>
			<!-- /wp:heading --><!-- wp:paragraph -->
			<p>〇〇ブログ</p>
			<!-- /wp:paragraph --><!-- wp:heading {"level":4} -->
			<h4 class="jinr-heading d--bold">事業者名</h4>
			<!-- /wp:heading --><!-- wp:paragraph -->
			<p>会社名や屋号を記載</p>
			<!-- /wp:paragraph --><!-- wp:heading {"level":4} -->
			<h4 class="jinr-heading d--bold">代表者</h4>
			<!-- /wp:heading --><!-- wp:paragraph -->
			<p>xxxxxxxxx</p>
			<!-- /wp:paragraph --><!-- wp:heading {"level":4} -->
			<h4 class="jinr-heading d--bold">住所</h4>
			<!-- /wp:heading --><!-- wp:paragraph -->
			<p>〒xxx―xxxx　ここに住所を記載</p>
			<!-- /wp:paragraph --><!-- wp:heading {"level":4} -->
			<h4 class="jinr-heading d--bold">問い合わせ窓口</h4>
			<!-- /wp:heading --><!-- wp:paragraph -->
			<p>MAIL：xxxx@xxxx.com<br>Form ：お問合せページURL</p>
			<!-- /wp:paragraph --><!-- wp:heading {"level":4} -->
			<h4 class="jinr-heading d--bold">営業時間</h4>
			<!-- /wp:heading --><!-- wp:paragraph -->
			<p>平日 9:00～18:00</p>
			<!-- /wp:paragraph --><!-- wp:heading {"level":4} -->
			<h4 class="jinr-heading d--bold">利用料金</h4>
			<!-- /wp:heading --><!-- wp:paragraph -->
			<p>利用代金は各サービスごとに、税込み価格にてご案内させて頂きます。</p>
			<!-- /wp:paragraph --><!-- wp:heading {"level":4} -->
			<h4 class="jinr-heading d--bold">利用料金以外にお客様に発生する料金等</h4>
			<!-- /wp:heading --><!-- wp:paragraph -->
			<p>お問い合わせや領収書送信等の際の電子メールの送受信時などに、所定の通信料が発生いたします。</p>
			<!-- /wp:paragraph --><!-- wp:heading {"level":4} -->
			<h4 class="jinr-heading d--bold">商品（サービス）の引渡時期</h4>
			<!-- /wp:heading --><!-- wp:paragraph -->
			<p>当社所定の手続き終了後、直ちにご利用頂けます。</p>
			<!-- /wp:paragraph --><!-- wp:heading {"level":4} -->
			<h4 class="jinr-heading d--bold">事業者の責任</h4>
			<!-- /wp:heading --><!-- wp:paragraph -->
			<p>〇〇ブログ「利用規約」に定めます。</p>
			<!-- /wp:paragraph --><!-- wp:heading {"level":4} -->
			<h4 class="jinr-heading d--bold">返品についての特約事項</h4>
			<!-- /wp:heading --><!-- wp:paragraph -->
			<p>電子商品としての性質上、返品には応じられません。</p>
			<!-- /wp:paragraph --><!-- wp:heading {"level":4} -->
			<h4 class="jinr-heading d--bold">支払方法</h4>
			<!-- /wp:heading --><!-- wp:paragraph -->
			<p>クレジットカード決済</p>
			<!-- /wp:paragraph --><!-- wp:heading {"level":4} -->
			<h4 class="jinr-heading d--bold">解約</h4>
			<!-- /wp:heading --><!-- wp:paragraph -->
			<p>ご解約はいつでも可能です。<br>xxxx@xxxx.comにご登録時に設定した「ユーザー名」「メールアドレス」を記載の上ご連絡ください。</p>
			<!-- /wp:paragraph --><!-- wp:heading {"level":4} -->
			<h4 class="jinr-heading d--bold">特別条件</h4>
			<!-- /wp:heading -->
			<!-- wp:paragraph -->
			<p>特定商取引法に規定されるクーリング・オフが適用されるサービスではありません。</p>
			<!-- /wp:paragraph -->',
			'post_name'     => 'paidpost-terms',
			'post_status'   => 'publish',
			'post_type'     => 'page',
		);
		wp_insert_post($pagetermsarray);
	}
}
add_action('init', 'jinr_paidpost_completepage_create');

function paidpost_append_post_scripts()
{
	wp_register_script('jinr-paidpost', get_template_directory_uri() . '/lib/js/paidpost.js', array('jquery'), JINR_THEME_VERSION, true);
	wp_enqueue_script('jinr-paidpost');
	include_once(ABSPATH . 'wp-admin/includes/plugin.php');
	$advanced_google_recaptcha_uri = 'advanced-google-recaptcha/advanced-google-recaptcha.php';
	if (is_plugin_active($advanced_google_recaptcha_uri)) {
		$agr_options = get_option("agr_options");
		if (false !== $agr_options) {
			wp_localize_script(
				'jinr-paidpost',
				'jinr_paidpost',
				array(
					'ajaxurl'      => admin_url() . 'admin-ajax.php',
					'agrVersion' => $agr_options['captcha_type'],
				)
			);
		}
	} else {
		wp_localize_script(
			'jinr-paidpost',
			'jinr_paidpost',
			array(
				'ajaxurl'      => admin_url() . 'admin-ajax.php',
			)
		);
	}
}
add_action('wp_enqueue_scripts', 'paidpost_append_post_scripts');

function jinr_paidpost_ajax_handler()
{
	/**
	 * ログインしているユーザーが購読者でかつ
	 * 「https://checkout.stripe.com/」からリダイレクトされた時
	 * その固定ページに設定されている商品IDをそのユーザー情報に追加する
	 */
	$productID = $_POST['productid'];
	$stripeRef = $_POST['striperef'];
	if (current_user_can('subscriber')) {
		if (false !== strpos($stripeRef, 'stripe.com')) {
			$current_user = wp_get_current_user();
			$user_paidpost = get_the_author_meta('productID', $current_user->ID);
			if (empty($user_paidpost)) {
				$user_paidpost_id = $productID;
			} else {
				$user_paidpost_id = $user_paidpost . ',' . $productID;
			}
			$userdata = array(
				'ID'          => $current_user->ID,
				'productID'   => $user_paidpost_id
			);
			wp_update_user($userdata);
			echo $current_user->ID;
		}
	}
	wp_die();
}
add_action('wp_ajax_paidpost', 'jinr_paidpost_ajax_handler');
add_action('wp_ajax_nopriv_paidpost', 'jinr_paidpost_ajax_handler');

// メールバリデーションチェック
function jinr_register_email_check($email)
{
	if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
		return true;
	}
	if (strpos($email, '@docomo.ne.jp') !== false || strpos($email, '@ezweb.ne.jp') !== false) {
		$pattern = '/^([a-zA-Z])+([a-zA-Z0-9\._-])*@(docomo\.ne\.jp|ezweb\.ne\.jp)$/';
		if (preg_match($pattern, $email, $matches) === 1) {
			return true;
		}
	}

	return false;
}
function jinr_register_password_check($password)
{

	if (preg_match('/\A(?=.*?[a-z])(?=.*?[A-Z])(?=.*?\d)[a-zA-Z\d]{8,100}+\z/', $password)) {
		return true;
	}
	return false;
}

// 会員登録ボタンをクリックした時のajax
function jinr_register_paidpost()
{
	$jinr_register_user_name  = isset($_POST['name']) ? sanitize_text_field($_POST['name']) : '';
	$jinr_register_user_pass  = isset($_POST['pass']) ? sanitize_text_field($_POST['pass']) : '';
	$jinr_register_user_email = isset($_POST['mail']) ? sanitize_text_field($_POST['mail']) : '';

	// CSRF対策
	if (!isset($_POST['nonce'])) return;
	if (!wp_verify_nonce($_POST['nonce'], 'jinr_nonce_register_action')) return;

	if (empty($jinr_register_user_pass) && empty($jinr_register_user_email)) {
		$list = array(
			'user_pass' => 'empty',
			'user_email' => 'empty'
		);
		header("Content-type: application/json; charset=UTF-8");
		echo json_encode($list);
		exit;
	}
	if (empty($jinr_register_user_pass)) {
		echo 'user_pass_lack';
		exit;
	}
	if (empty($jinr_register_user_email)) {
		echo 'user_mail_lack';
		exit;
	}

	$user_email = email_exists($jinr_register_user_email);
	if ($user_email !== false) {
		echo 'user_mail_exist';
		exit;
	}
	if (jinr_register_email_check($jinr_register_user_email) === false) {
		echo 'user_mail_invalid';
		exit;
	}
	if (jinr_register_password_check($jinr_register_user_pass) === false) {
		echo 'user_pass_invalid';
		exit;
	}

	$userdata = array(
		'user_login' => $jinr_register_user_name,
		'user_pass'  => $jinr_register_user_pass,
		'user_email' => $jinr_register_user_email,
	);
	$user_id = wp_insert_user($userdata);

	if (is_wp_error($user_id)) {
		echo $user_id->get_error_code();
		echo $user_id->get_error_message();
		exit;
	}
	wp_set_auth_cookie($user_id, true, is_ssl());
	echo intval($user_id);
	wp_die();
}
add_action('wp_ajax_jinr_user_action', 'jinr_register_paidpost');
add_action('wp_ajax_nopriv_jinr_user_action', 'jinr_register_paidpost');


function jinr_register_check_mail_approval()
{
	$jinr_register_user_email = isset($_POST['mail']) ? sanitize_text_field($_POST['mail']) : '';
	$user_email = email_exists($jinr_register_user_email);
	if (empty($jinr_register_user_email)) {
		echo 'user_mail_lack';
		exit;
	}
	if ($user_email !== false) {
		echo 'user_mail_exist';
		exit;
	}
	if (jinr_register_email_check($jinr_register_user_email) === false) {
		echo 'user_mail_invalid';
		exit;
	} else {
		echo 'user_mail_approve';
		exit;
	}
	wp_die();
}
add_action('wp_ajax_jinr_check_mail_action', 'jinr_register_check_mail_approval');
add_action('wp_ajax_nopriv_jinr_check_mail_action', 'jinr_register_check_mail_approval');

function jinr_register_check_pass_approval()
{
	$jinr_register_user_pass  = isset($_POST['pass']) ? sanitize_text_field($_POST['pass']) : '';
	if (mb_strlen($jinr_register_user_pass) < 8) {
		echo 'user_pass_lack';
		exit;
	}
	if (jinr_register_password_check($jinr_register_user_pass) === false) {
		echo 'user_pass_invalid';
		exit;
	} else {
		echo 'user_pass_approve';
		exit;
	}
	wp_die();
}
add_action('wp_ajax_jinr_check_pass_action', 'jinr_register_check_pass_approval');
add_action('wp_ajax_nopriv_jinr_check_pass_action', 'jinr_register_check_pass_approval');

function jinr_user_mail_for_purchase()
{
	$user = wp_get_current_user();
	if ($user->ID == 0) {
		echo 'user_mail_lack';
		exit;
	} else {
		$jinr_user_mail = $user->user_email;
		if (jinr_register_email_check($jinr_user_mail) === true) {
			echo $jinr_user_mail;
			exit;
		} else {
			echo 'user_mail_invalid';
			exit;
		}
	}
	wp_die();
}
add_action('wp_ajax_jinr_user_mail_action', 'jinr_user_mail_for_purchase');
add_action('wp_ajax_nopriv_jinr_user_mail_action', 'jinr_user_mail_for_purchase');

function jinr_login_paidpost()
{
	remove_filter('wp_authenticate_user', 'advanced_google_recaptcha_process_login_form');
	$jinr_login_user_mail = isset($_POST['mail']) ? sanitize_text_field($_POST['mail']) : '';
	$jinr_login_user_pass = isset($_POST['pass']) ? sanitize_text_field($_POST['pass']) : '';
	$jinr_productID = isset($_POST['productID']) ? sanitize_text_field($_POST['productID']) : '';
	$recaptcha_response = isset($_POST['g-recaptcha-response']) ? sanitize_text_field($_POST['g-recaptcha-response']) : '';

	if (!isset($_POST['nonce'])) return;
	if (!wp_verify_nonce($_POST['nonce'], 'jinr_nonce_login_action')) return;

	if (!$jinr_login_user_mail) {
		echo 'inputUsermail';
		exit;
	}
	if (!$jinr_login_user_pass) {
		echo 'inputPassword';
		exit;
	}
	if (jinr_register_email_check($jinr_login_user_mail) === false) {
		echo 'user_mail_invalid';
		exit;
	}

	$userObj = get_user_by('email', $jinr_login_user_mail);
	$jinr_login_user_name = '';
	if ($userObj) {
		$jinr_login_user_name = $userObj->user_login;
	} else {
		echo 'user_not_found';
		exit;
	}
	$creds = array(
		'user_login' => $jinr_login_user_name,
		'user_password' => $jinr_login_user_pass,
		'remember' => true,
	);
	if (!empty($recaptcha_response)) {
		if (!jinr_verify_recaptcha_token($recaptcha_response)) {
			echo 'recaptcha_failed';
			exit;
		}
	}
	$user = wp_signon($creds);
	if (is_wp_error($user)) {
		echo $user->get_error_code();
		exit;
	}
	// ログインしたユーザーの情報からすでに購入時みの記事かどうかを検証する
	$current_user_product_ids = get_user_meta($user->ID, 'productID', true);
	if (empty($current_user_product_ids)) {
		echo 'notPurchased';
		exit;
	} else {
		$current_user_product_ids = explode(',', $current_user_product_ids);
		foreach ($current_user_product_ids as $current_user_product_id) {
			if ($jinr_productID === $current_user_product_id) {
				echo 'Purchased';
				exit;
			}
		}
		echo 'notPurchased';
		exit;
	}
	wp_die();
}
add_action('wp_ajax_jinr_login_action', 'jinr_login_paidpost');
add_action('wp_ajax_nopriv_jinr_login_action', 'jinr_login_paidpost');

function jinr_subscribe_cancel()
{
	require_once(__DIR__ . '/../vendor/autoload.php');
	$subscriptionSecretKey = get_option('jinr_paidpost_secret_key');
	\Stripe\Stripe::setApiKey($subscriptionSecretKey);
	$subscription_id =  isset($_POST['JinrSubscriptionID']) ? sanitize_text_field($_POST['JinrSubscriptionID']) : '';
	$payment_link = isset($_POST['JinrPaymentLink']) ? sanitize_text_field($_POST['JinrPaymentLink']) : '';
	try {
		$subscription = \Stripe\Subscription::retrieve($subscription_id);
		$canceled_subscription = $subscription->cancel();
		if ($canceled_subscription->status == 'canceled') {
			$payment_link = str_replace('https://buy.stripe.com/', '', $payment_link);
			$user = wp_get_current_user();
			$current_user_product_ids = get_user_meta($user->ID, 'productID', true);
			$current_user_product_ids = explode(',', $current_user_product_ids);
			foreach ($current_user_product_ids as $current_user_product_id) {
				if ($payment_link == $current_user_product_id) {
					$key = array_search($current_user_product_id, $current_user_product_ids);
					if (count($current_user_product_ids) > 1) {
						unset($current_user_product_ids[$key]);
						$current_user_product_ids = array_values($current_user_product_ids);
						$current_user_product_ids = implode(',', $current_user_product_ids);
						update_user_meta($user->ID, 'productID', $current_user_product_ids);
					} else {
						update_user_meta($user->ID, 'productID', '');
					}
				}
			}
			echo 'cancel_success';
		} else {
			echo 'cancel_failed';
		}
	} catch (Exception $e) {
		echo 'エラーが発生しました：' . $e->getMessage();
	}
	wp_die();
}
add_action('wp_ajax_jinr_subscription_cancel_action', 'jinr_subscribe_cancel');
add_action('wp_ajax_nopriv_jinr_subscription_cancel_action', 'jinr_subscribe_cancel');

// ユーザーがメールアドレスを変更した際にStripe側にもメールアドレスを更新するフックを追加する
add_action('profile_update', function ($user_id, $old_user_data) {
	$old_email = $old_user_data->user_email;
	$new_email = get_userdata($user_id)->user_email;
	if ($old_email !== $new_email) {
		require_once(__DIR__ . '/../vendor/autoload.php');
		$subscriptionSecretKey = get_option('jinr_paidpost_secret_key');
		if ($subscriptionSecretKey) {
			\Stripe\Stripe::setApiKey($subscriptionSecretKey);
			$customers = \Stripe\Customer::all(["email" => $old_email]);
			foreach ($customers->data as $customer) {
				\Stripe\Customer::update($customer->id, ['email' => $new_email]);
			}
		}
	}
}, 10, 2);


function jinr_verify_recaptcha_token($token)
{
	// Advanced Google reCAPTCHAへの対応
	if (function_exists('advanced_google_recaptcha_process_login_form')) {
		$secret_key = advanced_google_recaptcha_option('secret_key');
		$grecaptcha_response = $_POST['g-recaptcha-response'];
		$captcha_obj = new \ReCaptcha\ReCaptcha($secret_key);
		$resp = $captcha_obj->setExpectedHostname($_SERVER['SERVER_NAME'])->verify($grecaptcha_response, $_SERVER['REMOTE_ADDR']);
		return (bool) $resp->isSuccess();
	}
}
function jinr_login_check_mail_approval()
{
	$jinr_login_user_mail  = isset($_POST['mail']) ? sanitize_text_field($_POST['mail']) : '';
	if (empty($jinr_login_user_mail)) {
		echo 'user_name_lack';
		exit;
	}
	if (jinr_register_email_check($jinr_login_user_mail) === false) {
		echo 'user_mail_invalid';
		exit;
	}
	$userObj = get_user_by('email', $jinr_login_user_mail);
	if ($userObj) {
		$jinr_login_user_name = $userObj->user_login;
		if ($jinr_login_user_name) {
			echo 'user_mail_approve';
			exit;
		}
	} else {
		echo 'user_not_found';
		exit;
	}
	wp_die();
}
add_action('wp_ajax_jinr_login_check_mail_action', 'jinr_login_check_mail_approval');
add_action('wp_ajax_nopriv_jinr_login_check_mail_action', 'jinr_login_check_mail_approval');

function jinr_login_check_pass_approval()
{
	$jinr_register_user_pass  = isset($_POST['pass']) ? sanitize_text_field($_POST['pass']) : '';
	if (strlen($jinr_register_user_pass) < 8) {
		echo 'user_pass_lack';
		exit;
	}
	if (jinr_register_password_check($jinr_register_user_pass) === false) {
		echo 'user_pass_invalid';
		exit;
	} else {
		echo 'user_pass_approve';
		exit;
	}
	wp_die();
}
add_action('wp_ajax_jinr_login_check_pass_action', 'jinr_login_check_pass_approval');
add_action('wp_ajax_nopriv_jinr_login_check_pass_action', 'jinr_login_check_pass_approval');

function jinr_lostpassword_paidpost()
{
	$jinr_lostpass_user_mail = isset($_POST['mail']) ? sanitize_text_field($_POST['mail']) : '';

	if (!isset($_POST['nonce'])) return;
	if (!wp_verify_nonce($_POST['nonce'], 'jinr_nonce_lostpassword_action')) return;

	if (jinr_register_email_check($jinr_lostpass_user_mail) === false) {
		echo 'invalid';
		exit;
	} else {
		if (email_exists($jinr_lostpass_user_mail)) {
			$user = get_user_by('email', $jinr_lostpass_user_mail);
			$from = get_option('admin_email');
			if (!(isset($from) && is_email($from))) {
				$sitename = strtolower($_SERVER['SERVER_NAME']);
				if (substr($sitename, 0, 4) == 'www.') {
					$sitename = substr($sitename, 4);
				}
				$from = 'admin@' . $sitename;
			}
			if (!$user) {
				echo 'このメールアドレスを持ったユーザーは存在しません';
				exit;
			} else {
				// リセットキーを生成
				$reset_key = get_password_reset_key($user);
				$reset_url = site_url("wp-login.php?action=rp&key=$reset_key&login=" . rawurlencode($user->user_login), 'login');

				$to = $user->user_email;
				$subject = '' . get_bloginfo('name') . 'からパスワード再設定メール';
				$sender = 'From: ' . get_bloginfo('name') . ' <' . $from . '>' . "\r\n";

				$message = '' . get_bloginfo('name') . 'のパスワード再設定の申請を受け付けました。<br /><br />
				パスワードの再設定をご希望の場合は、以下URLをクリックし新しいパスワードをご登録ください。<br />
				<br />
				※パスワードリセットの申請に心当たりがない場合は、以降の対応は不要となります。<br />
				<br />
				▼パスワードの再設定URL<br />
				' . $reset_url . '<br />
				<br />
				<br />
				<br />
				本メールに心当たりが無い場合は破棄をお願いいたします。<br />
				送信専用メールアドレスのため、直接の返信はできません。' . "\n";
				$headers[] = 'MIME-Version: 1.0' . "\r\n";
				$headers[] = 'Content-type: text/html; charset=UTF-8' . "\r\n";
				$headers[] = "X-Mailer: PHP \r\n";
				$headers[] = $sender;
				$mail = wp_mail($to, $subject, $message, $headers);
			}
			if ($mail) {
				$success = 'send';
				echo $success;
				exit;
			} else {
				echo 'unsend';
			}
		} else {
			echo 'notregistered';
			exit;
		}
	}
	wp_die();
}
add_action('wp_ajax_jinr_lostpassword_action', 'jinr_lostpassword_paidpost');
add_action('wp_ajax_nopriv_jinr_lostpassword_action', 'jinr_lostpassword_paidpost');

function jinr_custom_password_reset_page()
{
	ob_start();
	if (!jinr__header_logo_url() == '') {
		$headerLogo = jinr__header_logo_url();
	} else {
		if (jinr__title_text() == '') {
			$headerLogo = get_bloginfo('name');
		} else {
			$headerLogo = jinr__title_text();
		}
	}
?>
	<style>
		.login-action-rp #login h1 a,
		.login-action-resetpass #login h1 a {
			background-image: url(<?php echo $headerLogo; ?>);
		}
	</style>
	<?php echo ob_get_clean();
}
add_action('login_head', 'jinr_custom_password_reset_page');

// ログイン画面専用CSSの読み込む
function jinr_enqueue_custom_login_style()
{
	wp_enqueue_style('jinr-login', get_stylesheet_directory_uri() . '/jinr-login.css');
}
add_action('login_enqueue_scripts', 'jinr_enqueue_custom_login_style');

function jinr_get_nested_block_attributes($content, $target_block_name)
{
	$blocks = parse_blocks($content);
	$search_nested_blocks = function ($blocks, $block_name) use (&$search_nested_blocks) {
		foreach ($blocks as $block) {
			if ($block['blockName'] === $block_name) {
				return $block['attrs'];
			}
			if (!empty($block['innerBlocks'])) {
				$result = $search_nested_blocks($block['innerBlocks'], $block_name);
				if ($result !== null) {
					return $result;
				}
			}
		}
		return null;
	};
	return $search_nested_blocks($blocks, $target_block_name);
}
function jinr_paid_content_display_switch($content)
{
	if (empty($content)) {
		return $content;
	}
	if (!is_admin()) {
		if (current_user_can('subscriber')) {
			global $post;
			$blocks = parse_blocks($post->post_content);
			$block_name = 'jinr-blocks/paidpost';
			foreach ($blocks as $block) {
				if ($block['blockName'] === $block_name) {
					$attributes = $block['attrs'];
					$productID = $attributes['productID'];
				}
			}
			$attributes = jinr_get_nested_block_attributes($post->post_content, $block_name);
			if ($attributes !== null) {
				$productID = $attributes['productID'];
			} else {
				return $content;
			}
			$user = wp_get_current_user();
			$current_user_product_ids = get_user_meta($user->ID, 'productID', true);
			$current_user_product_ids = explode(',', $current_user_product_ids);

			foreach ($current_user_product_ids as $current_user_product_id) {
				if ($productID === $current_user_product_id) {
					return $content;
				}
			}
			$new_blocks = [];
			$remove_blocks = false;
			foreach ($blocks as $block) {
				if ($remove_blocks) {
					continue;
				}
				if (!empty($block['innerBlocks'])) {
					foreach ($block['innerBlocks'] as $innerBlock) {
						if ($innerBlock['blockName'] === 'jinr-blocks/paidpost') {
							$remove_blocks = true;
						}
					}
				}
				if ($block['blockName'] === 'jinr-blocks/paidpost') {
					$remove_blocks = true;
				}
				$new_blocks[] = $block;
			}
			$content = '';
			foreach ($new_blocks as $block) {
				$content .= render_block($block);
			}
			return $content;
		} elseif (current_user_can('administrator')) {
			return $content;
		} else {
			global $post;
			$blocks = parse_blocks($post->post_content);
			$new_blocks = [];
			$remove_blocks = false;
			foreach ($blocks as $block) {
				if ($remove_blocks) {
					continue;
				}
				if (!empty($block['innerBlocks'])) {
					foreach ($block['innerBlocks'] as $innerBlock) {
						if ($innerBlock['blockName'] === 'jinr-blocks/paidpost') {
							$remove_blocks = true;
						}
					}
				}
				if ($block['blockName'] === 'jinr-blocks/paidpost') {
					$remove_blocks = true;
				}
				$new_blocks[] = $block;
			}
			$content = '';
			foreach ($new_blocks as $block) {
				$content .= render_block($block);
			}
			return $content;
		}
	} else {
		return $content;
	}
}
function jinr_apply_content_filter_on_frontend()
{
	global $post;
	if (!$post) {
		return;
	}
	if (is_category()) {
		$page_ids = get_posts(array(
			'posts_per_page' => -1,
			'fields'         => 'ids',
			'post_type'      => 'page',
		));
		//変数初期値設定
		$edit_category_ids = array();
		$target_page_id = "";
		$counter = 0;
		$pair_ids = array();
		foreach ($page_ids as $page_id) {
			$jinr_category = get_post_meta($page_id, '_jinr_category', true);
			//現在のカテゴリーページID
			$cat_id = get_query_var('cat');
			$edit_category_ids[] = $jinr_category;
			$pair_ids += array(
				$page_ids[$counter] => $edit_category_ids[$counter],
			);
			$counter++;
		}
		$target_page_id = array_search($cat_id, $pair_ids);
		if ($post->ID !== $target_page_id) {
			$post = get_post($target_page_id);
		}
	}
	$blocks = parse_blocks($post->post_content);
	$toggle_blocks = false;
	foreach ($blocks as $block) {
		if ($block['blockName'] === 'jinr-blocks/paidpost') {
			$toggle_blocks = true;
		}
	}
	if (!is_admin() && $toggle_blocks === true) {
		add_filter('the_content', 'jinr_paid_content_display_switch', 9);
	}
}
add_action('template_redirect', 'jinr_apply_content_filter_on_frontend');


// 言語切り替えを非表示
add_filter('login_display_language_dropdown', '__return_false');

// パスワードリセットの文字を一部変更
function custom_login_text($translated_text, $untranslated_text, $domain)
{
	if ($untranslated_text == 'New password') {
		$translated_text = '新しいパスワードを設定';
	}
	if (strpos($untranslated_text, 'Hint: The password') !== false) {
		$translated_text = 'パスワードは「8文字以上」かつ「大文字」を一つ含む半角英数字で設定してください';
	}
	return $translated_text;
}
add_filter('gettext', 'custom_login_text', 20, 3);

// ログイン画面のロゴのリンク先をTOPに修正
function jinr_cutstom_login_logo_link()
{
	return home_url();
}
add_filter('login_headerurl', 'jinr_cutstom_login_logo_link');

// パスワードリセットのバリデーション
function jinr_paidpost_password_reset_validation($errors, $user)
{
	if (isset($_POST['pass1'])) {
		$password = $_POST['pass1'];
	} else {
		$password = '';
	}
	if (strlen($password) < 8) {
		$errors->add('password_too_short', 'パスワードは8文字以上である必要があります。');
	}
	if (!preg_match('/[A-Z]/', $password)) {
		$errors->add('password_missing_uppercase', 'パスワードには最低1つの大文字が必要です。');
	}
	if (!ctype_alnum($password)) {
		$errors->add('password_contains_special_characters', 'パスワードには半角英数字を含めてください。');
	}
	return $errors;
}
add_filter('validate_password_reset', 'jinr_paidpost_password_reset_validation', 10, 2);

// パスワードリセット時の文字制限を変更する
function nendebcom_wp_login_password_length_check()
{
	$pass_length = 8;
	$action = isset($_REQUEST['action']) ? $_REQUEST['action'] : '';
	if (isset($_GET['key'])) {
		$action = 'resetpass';
	}
	if ($action == 'rp' || $action == 'resetpass') {
	?>
		<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(function() {
					$('.pw-weak').remove();
					const submit_btn = $('#wp-submit');
					$('#pass1').keyup(function() {
						pass_length = $('#pass1').val().length;
						if (pass_length >= <?php echo $pass_length; ?>) {
							submit_btn.removeAttr('disabled').val('パスワードをリセット');
						} else {
							submit_btn.attr('disabled', 'disabled').val('<?php echo $pass_length; ?>文字以上入力してください');
						}

					}).keyup();
				});
			});
		</script>
	<?php
	}
}
add_action('login_footer', 'nendebcom_wp_login_password_length_check');

/**
 * ログインの期限を1年に伸ばす
 */
function jinr_login_expire_change()
{
	return 60 * 60 * 24 * 365;
}
add_filter('auth_cookie_expiration', 'jinr_login_expire_change');


/**
 * アクセスカウンターを実装する 
 */
function jinr_set_post_views($postID)
{
	$count_key = 'post_views_count';
	$count = get_post_meta($postID, $count_key, true);
	if ($count == '') {
		$count = 0;
		delete_post_meta($postID, $count_key);
		add_post_meta($postID, $count_key, 0);
	} else {
		$count++;
		update_post_meta($postID, $count_key, $count);
	}
}
add_action('wp_ajax_nopriv_jinr_increment_views', 'jinr_increment_views');
add_action('wp_ajax_jinr_increment_views', 'jinr_increment_views');
function jinr_increment_views()
{
	if (current_user_can('administrator')) {
		wp_die();
	}
	$user_agent = $_SERVER['HTTP_USER_AGENT'];
	if (preg_match('/bot|crawl|slurp|spider|mediapartners/i', $user_agent)) {
		wp_die();
	}
	if (isset($_POST['post_id'])) {
		jinr_set_post_views(intval($_POST['post_id']));
	}
	wp_die();
}
function jinr_add_views_meta_all_posts()
{
	if (get_option('jinr_added_views_meta_all_posts')) {
		return;
	}
	$args = array(
		'numberposts' => -1,
		'post_type' => 'post',
		'post_status' => 'publish',
	);
	$posts = get_posts($args);
	foreach ($posts as $post) {
		$post_id = $post->ID;
		$count_key = 'post_views_count';
		$meta_value = 0;
		if (!get_post_meta($post_id, $count_key, true)) {
			add_post_meta($post_id, $count_key, $meta_value);
		}
	}
	// メタデータの追加処理が終わったことを示すオプションを保存
	update_option('jinr_added_views_meta_all_posts', true);
}
add_action('init', 'jinr_add_views_meta_all_posts');

// RESTAPIにアクセス数のフィールドを追加
add_action('rest_api_init', 'slug_register_views_orderby');
function slug_register_views_orderby()
{
	add_filter('rest_post_collection_params', 'add_rest_orderby_params', 10, 1);
}
function add_rest_orderby_params($params)
{
	$params['orderby']['enum'][] = 'views';
	return $params;
}

add_filter('rest_post_query', 'handle_rest_orderby_views', 10, 2);
function handle_rest_orderby_views($args, $request)
{
	if ('views' === $request['orderby']) {
		$args['meta_key'] = 'post_views_count';
		$args['orderby']  = 'meta_value_num date';
		$args['order']  = 'DESC';
	}
	return $args;
}
// RESTAPIにアクセス数のフィールドを追加
function jinr_slug_register_views()
{
	register_rest_field(
		'post',
		'views',
		array(
			'get_callback'    => 'jinr_slug_get_views',
			'update_callback' => null,
			'schema'          => null,
		)
	);
}
add_action('rest_api_init', 'jinr_slug_register_views');

function jinr_slug_get_views($post)
{
	$views = get_post_meta($post['id'], 'post_views_count', true);
	return $views;
}

// すでに公開されている記事のアクセス数を0にする
function jinr_add_views_to_all_posts()
{
	if (get_option('views_added') == '1') {
		return;
	}
	$args = array(
		'post_type' => 'post',
		'post_status' => 'publish',
		'posts_per_page' => -1,
	);
	$query = new WP_Query($args);
	if ($query->have_posts()) {
		while ($query->have_posts()) {
			$query->the_post();
			$post_id = get_the_ID();
			if (!get_post_meta($post_id, 'post_views_count', true)) {
				add_post_meta($post_id, 'post_views_count', 0, true);
			}
		}
	}
	wp_reset_query();
	add_option('views_added', '1');
}
add_action('wp_loaded', 'jinr_add_views_to_all_posts');

function jinr_block_category($categories, $post)
{
	$custom_block = array(
		'slug' => 'jinr-blocks',
		'title' => 'JINRブロック'
	);

	$categories_sorted = array();

	$key = 0;
	for ($i = 0; $i < count($categories); $i++) {
		if ($i === 1) {
			$categories_sorted[$i] = $custom_block;
			continue;
		}
		$categories_sorted[$i] = $categories[$key];
		$key++;
	}

	return $categories_sorted;
}
add_filter('block_categories_all', 'jinr_block_category', 10, 2);

function get_post_from_url_endpoint()
{
	register_rest_route(
		'jinr',
		'/post_by_url',
		array(
			'methods'             => WP_REST_Server::READABLE,
			'permission_callback' => '__return_true',
			'callback'            => 'get_post_from_url',
		)
	);
}
add_action('rest_api_init', 'get_post_from_url_endpoint');

function get_post_from_url($data)
{
	global $post;
	$param                = $data->get_param('url');
	$post_id              = url_to_postid(untrailingslashit($param));
	$post                 = get_post($post_id);
	$categories           = get_the_category($post_id);
	$title                = get_the_title($post_id);
	$thumbnail_id         = get_post_thumbnail_id($post_id);
	$thumbnail_alt        = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true);
	$image                = wp_get_attachment_image_src($thumbnail_id, 'medium_size');
	$thumbnail_url        = is_array($image) ? $image[0] : jinr_noimage_url('medium');
	$image_square         = wp_get_attachment_image_src($thumbnail_id, 'thumbnail_size');
	$thumbnail_square_url = is_array($image_square) ? $image_square[0] : jinr_noimage_url('thumbnail');
	$image_full           = wp_get_attachment_image_src($thumbnail_id, 'full');
	$thumbnail_full_url   = is_array($image_square) ? $image_full[0] : jinr_noimage_url('medium');
	$image_large         = wp_get_attachment_image_src($thumbnail_id, 'large_size');
	$thumbnail_large_url = is_array($image_large) ? $image_large[0] : jinr_noimage_url('large');
	$image_small         = wp_get_attachment_image_src($thumbnail_id, 'small_size');
	$thumbnail_small_url = is_array($image_small) ? $image_small[0] : jinr_noimage_url('small');

	$youtube_url        = get_post_meta($post_id, '_jinr_thumb_youtube', true);
	$youtube_time        = get_post_meta($post_id, '_jinr_time_youtube', true);

	$thumbnail_youtube_large = jinr_youtube_thumbnail_url($post_id, 'large');
	$thumbnail_youtube_medium = jinr_youtube_thumbnail_url($post_id, 'medium');
	$thumbnail_youtube_small = jinr_youtube_thumbnail_url($post_id, 'small');

	// 取得したフルサイズに-scaledがついていた場合は除去
	if (strpos($thumbnail_full_url, '-scaled') !== false) {
		$scaled_extension = array('-scaled.png', '-scaled.jpg', '-scaled.jpeg', '-scaled.webp');
		$suffix_scaled = array('.png', '.jpg', '.jpeg', '.webp');
		$thumbnail_full_url = str_replace($scaled_extension, $suffix_scaled, $thumbnail_full_url);
	}

	$cat_name_list       = array();
	foreach ($categories as $cat) {
		array_push($cat_name_list, $cat->name);
	}
	$date         = !gmdate(strtotime($post->post_date)) == 0 ? gmdate('Y.m.d', strtotime($post->post_date)) : "";

	// 有料記事があるかどうかチェックし金額を$return_arrayに格納する
	$the_content = get_post($post_id)->post_content;
	$blocks = parse_blocks($the_content);
	$paidpost_price = '';
	foreach ($blocks as $key => $block) {
		if ($block['blockName'] == 'jinr-blocks/paidpost') {
			$paidpost_price = $block['attrs']['productPrice'];
			if ($paidpost_price) {
				$paidpost_price = strip_tags($paidpost_price);
			}
		}
		if (!empty($block['innerBlocks'])) {
			foreach ($block['innerBlocks'] as $innerBlock) {
				if ($innerBlock['blockName'] == 'jinr-blocks/paidpost') {
					if (isset($innerBlock['attrs']['productPrice'])) {
						$paidpost_price = $innerBlock['attrs']['productPrice'];
						if ($paidpost_price) {
							$paidpost_price = strip_tags($paidpost_price);
						}
					}
				}
			}
		}
	}
	$count_key = 'post_views_count';
	$post_views = get_post_meta($post_id, $count_key, true);

	$return_array = array(
		'post_data'              => $post,
		'thumbnail_id'              => $thumbnail_id,
		'thumbnail_url'             => $thumbnail_url,
		'thumbnail_square_url'      => $thumbnail_square_url,
		'thumbnail_large_url'       => $thumbnail_large_url,
		'thumbnail_small_url'       => $thumbnail_small_url,
		'thumbnail_full_url'        => $thumbnail_full_url,
		'thumbnail_youtube_large'   => $thumbnail_youtube_large,
		'thumbnail_youtube_medium'  => $thumbnail_youtube_medium,
		'thumbnail_youtube_small'   => $thumbnail_youtube_small,
		'thumbnail_alt'             => $thumbnail_alt,
		'title'                     => $title,
		'cat_name'                  => $cat_name_list,
		'date'                      => $date,
		'youtube_url'               => $youtube_url,
		'youtube_time'              => $youtube_time,
		'product_price'             => $paidpost_price,
		'views'                     => $post_views,
	);
	return $return_array;
}

function get_ogp_from_url_endpoint()
{
	register_rest_route(
		'jinr',
		'/external_url',
		array(
			'methods'             => WP_REST_Server::READABLE,
			'permission_callback' => '__return_true',
			'callback'            => 'get_ogp_from_url',
		)
	);
}
add_action('rest_api_init', 'get_ogp_from_url_endpoint');


function get_ogp_from_url($data)
{
	$post_url = $data->get_param('url');
	$html     = file_get_contents($post_url);
	preg_match_all("<meta property=\"og:([^\"]+)\" content=\"([^\"]+)\">", $html, $ogp);
	for ($i = 0; $i < count($ogp[1]); $i++) {
		$result[$ogp[1][$i]] = $ogp[2][$i];
	}
	$post_title = $result['title'];
	$thumbnail_url = $result['image'];
	$return_array = array(
		'thumbnail_url'        => $thumbnail_url,
		'title'                => $post_title,
	);
	return $return_array;
}

function jinr_register_post_meta()
{
	register_post_meta('', '_jinr_url_youtube', array(
		'show_in_rest' => true,
		'single' => true,
		'type' => 'string',
		'auth_callback' => function () {
			return current_user_can('edit_posts');
		}
	));
	register_post_meta('', '_jinr_pip_youtube', array(
		'show_in_rest' => true,
		'single' => true,
		'type' => 'boolean',
		'auth_callback' => function () {
			return current_user_can('edit_posts');
		}
	));
	register_post_meta('', '_jinr_time_youtube', array(
		'show_in_rest' => true,
		'single' => true,
		'type' => 'string',
		'auth_callback' => function () {
			return current_user_can('edit_posts');
		}
	));
	register_post_meta('', '_jinr_thumb_youtube', array(
		'show_in_rest' => true,
		'single' => true,
		'type' => 'string',
		'auth_callback' => function () {
			return current_user_can('edit_posts');
		}
	));
	register_post_meta('', '_jinr_media_youtube', array(
		'show_in_rest' => true,
		'single' => true,
		'type' => 'string',
		'auth_callback' => function () {
			return current_user_can('edit_posts');
		}
	));
	register_post_meta('', '_jinr_category_edit', array(
		'show_in_rest' => true,
		'single' => true,
		'type' => 'boolean',
		'auth_callback' => function () {
			return current_user_can('edit_posts');
		}
	));
	register_post_meta('', '_jinr_category', array(
		'show_in_rest' => true,
		'single' => true,
		'type' => 'string',
		'auth_callback' => function () {
			return current_user_can('edit_posts');
		}
	));
	register_post_meta('', '_jinr_title_display', array(
		'show_in_rest' => true,
		'single' => true,
		'type' => 'boolean',
		'auth_callback' => function () {
			return current_user_can('edit_posts');
		}
	));
	register_post_meta('', '_jinr_snsbutton_display', array(
		'show_in_rest' => true,
		'single' => true,
		'type' => 'boolean',
		'auth_callback' => function () {
			return current_user_can('edit_posts');
		}
	));
	register_post_meta('', '_jinr_ads_display', array(
		'show_in_rest' => true,
		'single' => true,
		'type' => 'boolean',
		'auth_callback' => function () {
			return current_user_can('edit_posts');
		}
	));
	register_post_meta('', '_jinr_thumbnail_display', array(
		'show_in_rest' => true,
		'single' => true,
		'type' => 'boolean',
		'auth_callback' => function () {
			return current_user_can('edit_posts');
		}
	));
	register_post_meta('', '_jinr_profile_display', array(
		'show_in_rest' => true,
		'single' => true,
		'type' => 'boolean',
		'auth_callback' => function () {
			return current_user_can('edit_posts');
		}
	));
	register_post_meta('', '_jinr_representations_display', array(
		'show_in_rest' => true,
		'single' => true,
		'type' => 'boolean',
		'auth_callback' => function () {
			return current_user_can('edit_posts');
		}
	));
	register_post_meta('', '_jinr_relatedpost_display', array(
		'show_in_rest' => true,
		'single' => true,
		'type' => 'boolean',
		'auth_callback' => function () {
			return current_user_can('edit_posts');
		}
	));
	register_post_meta('', '_jinr_sidebar1col_display', array(
		'show_in_rest' => true,
		'single' => true,
		'type' => 'boolean',
		'auth_callback' => function () {
			return current_user_can('edit_posts');
		}
	));
	register_post_meta('', '_jinr_sidebar2col_display', array(
		'show_in_rest' => true,
		'single' => true,
		'type' => 'boolean',
		'auth_callback' => function () {
			return current_user_can('edit_posts');
		}
	));

	register_post_meta('', '_jinr_seotitle_display', array(
		'show_in_rest' => true,
		'single' => true,
		'type' => 'string',
		'auth_callback' => function () {
			return current_user_can('edit_posts');
		}
	));
	register_post_meta('', '_jinr_description_display', array(
		'show_in_rest' => true,
		'single' => true,
		'type' => 'string',
		'auth_callback' => function () {
			return current_user_can('edit_posts');
		}
	));
	register_post_meta('', '_jinr_keyword_display', array(
		'show_in_rest' => true,
		'single' => true,
		'type' => 'string',
		'auth_callback' => function () {
			return current_user_can('edit_posts');
		}
	));
	register_post_meta('', '_jinr_hastag_display', array(
		'show_in_rest' => true,
		'single' => true,
		'type' => 'string',
		'auth_callback' => function () {
			return current_user_can('edit_posts');
		}
	));
	register_post_meta('', '_jinr_canonical_display', array(
		'show_in_rest' => true,
		'single' => true,
		'type' => 'string',
		'auth_callback' => function () {
			return current_user_can('edit_posts');
		}
	));
	register_post_meta('', '_jinr_noindex_display', array(
		'show_in_rest' => true,
		'single' => true,
		'type' => 'boolean',
		'auth_callback' => function () {
			return current_user_can('edit_posts');
		}
	));
	register_post_meta('', '_jinr_paidpost', array(
		'show_in_rest' => true,
		'single' => true,
		'type' => 'boolean',
		'auth_callback' => function () {
			return current_user_can('edit_posts');
		}
	));
	register_post_meta('', '_jinr_paidpost_product_id', array(
		'show_in_rest' => true,
		'single' => true,
		'type' => 'string',
		'auth_callback' => function () {
			return current_user_can('edit_posts');
		}
	));
	register_post_meta('', '_jinr_headtag_article', array(
		'show_in_rest' => true,
		'single' => true,
		'type' => 'string',
		'auth_callback' => function () {
			return current_user_can('edit_posts');
		}
	));
	register_post_meta('post', '_jinr_ogp_image_url', [
		'single'       => true,
		'type'         => 'string',
		'show_in_rest' => true,
		'auth_callback' => '__return_true',
	]);
	register_post_meta('post', '_jinr_last_featured_id', [
		'single'            => true,
		'type'              => 'integer',
		'show_in_rest'      => true,
		'sanitize_callback' => 'absint',
		'auth_callback'     => '__return_true',
	]);
}
add_action('init', 'jinr_register_post_meta');

// カスタマイザーのスライド設定を取得してSwiperの設定値を返す
function jinr_visual_imageslider_animation()
{
	$slider_animation = '';
	if (jinr__imageslider_animation_select() == 'd--imageslider-animation-slidein') {
		return;
	} elseif (jinr__imageslider_animation_select() == 'd--imageslider-animation-fade') {
		$slider_animation = 'effect: ' . "'" . 'fade' . "'" . ',fadeEffect: {crossFade: true},';
		$slider_animation .= 'speed: 400,';
		if (jinr__imageslider_autoplay() == 'd--imageslider-autoplay-on') {
			if (jinr__imageslider_animation_speed() == 'd--imageslider-animation-slow') {
				$slider_animation .= 'autoplay: {delay: 7000,disableOnInteraction: false},';
			} elseif (jinr__imageslider_animation_speed() == 'd--imageslider-animation-normal') {
				$slider_animation .= 'autoplay: {delay: 5000,disableOnInteraction: false},';
			} elseif (jinr__imageslider_animation_speed() == 'd--imageslider-animation-high') {
				$slider_animation .= 'autoplay: {delay: 3000,disableOnInteraction: false},';
			}
		}
	} elseif (jinr__imageslider_animation_select() == 'd--imageslider-animation-slide') {
		$slider_animation = 'effect: ' . "'"  . 'slide' . "'" . ',';
		if (jinr__imageslider_autoplay() == 'd--imageslider-autoplay-on') {
			if (jinr__imageslider_animation_speed() == 'd--imageslider-animation-slow') {
				$slider_animation .= 'autoplay: {delay: 7000,disableOnInteraction: false},speed: 400,';
			} elseif (jinr__imageslider_animation_speed() == 'd--imageslider-animation-normal') {
				$slider_animation .= 'autoplay: {delay: 5000,disableOnInteraction: false},speed: 400,';
			} elseif (jinr__imageslider_animation_speed() == 'd--imageslider-animation-high') {
				$slider_animation .= 'autoplay: {delay: 3000,disableOnInteraction: false},speed: 400,';
			}
		}
	} elseif (jinr__imageslider_animation_select() == 'd--imageslider-animation-parallax') {
		if (jinr__imageslider_autoplay() == 'd--imageslider-autoplay-on') {
			if (jinr__imageslider_animation_speed() == 'd--imageslider-animation-slow') {
				$slider_animation .= 'autoplay: {delay: 7000,disableOnInteraction: false,},';
			} elseif (jinr__imageslider_animation_speed() == 'd--imageslider-animation-normal') {
				$slider_animation .= 'autoplay: {delay: 5000,disableOnInteraction: false,},';
			} elseif (jinr__imageslider_animation_speed() == 'd--imageslider-animation-high') {
				$slider_animation .= 'autoplay: {delay: 3000,disableOnInteraction: false,},';
			}
		}
		echo <<<EOM
		<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
		<script>
			let mainSliderSelector = '.o--slider-contents';
			let mainSliderOptions = {
			loop: true,
			speed:600,
			parallax:true,
			{$slider_animation}
			loopAdditionalSlides: 1,
			allowTouchMove: true,
			grabCursor: true,
			autoplayDisableOnInteraction:false,
			pagination: {
				el: '.swiper-pagination',
				clickable: true
			},
			on: {
				init: function(){
					this.autoplay.stop();
				},
				imagesReady: function(){
					this.el.classList.remove('a--image-loading');
					this.autoplay.start();
				}
			}
			};
			let mainSlider = new Swiper(mainSliderSelector, mainSliderOptions);
		</script>
EOM;
		return;
	}
	echo <<<EOM
	<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
	<script>
	let mySwiper = new Swiper('.swiper-container', {
		loop: true,
		{$slider_animation}
		allowTouchMove: true,
		parallax: true,
		spaceBetween: 40,
		slidesPerView: 1,
		preloadImages: false,
		lazy: {
			loadPrevNext: true,
		},
		pagination: {
			el: '.swiper-pagination',
			clickable: true
		},
	})
	</script>
EOM;
}
// Youtubeのサムネイル画像をアップロードさせる
function jinr_insert_youtube_thumbnail_from_url($meta_id, $post_id, $meta_key, $meta_value)
{
	if ($meta_key == '_jinr_thumb_youtube' && !empty($meta_value)) {
		if (!class_exists('WP_Http')) {
			require_once ABSPATH . WPINC . '/class-http.php';
		}
		$http     = new WP_Http();
		$response = $http->request($meta_value, array('timeout' => 10));
		if (!is_array($response)) {
			return;
		}
		if (200 !== $response['response']['code']) {
			return false;
		}

		$ext = pathinfo(basename($meta_value), PATHINFO_EXTENSION);
		$youtube_url = get_post_meta($post_id, '_jinr_url_youtube', true);
		preg_match('/[\/?=]([a-zA-Z0-9_-]{11})[&\?]?/', $youtube_url, $match);
		$upload_name = 'youtube-thumbnail-' . $match[1] . '.' . $ext;
		$upload = wp_upload_bits($upload_name, null, $response['body']);
		if (!empty($upload['error'])) {
			return false;
		}

		$file_path        = $upload['file'];
		$file_name        = basename($file_path);
		$file_type        = wp_check_filetype($file_name, null);
		$wp_upload_dir    = wp_upload_dir();

		$post_info = array(
			'guid'           => $wp_upload_dir['url'] . '/' . $file_name,
			'post_mime_type' => $file_type['type'],
			'post_title'     => 'jinr-youtube-thumbnail-' . $match[1],
			'post_content'   => '',
			'post_status'    => 'inherit',
		);
		$attach_id = wp_insert_attachment($post_info, $file_path, $post_id);
		require_once ABSPATH . 'wp-admin/includes/image.php';
		$attach_data = wp_generate_attachment_metadata($attach_id, $file_path);
		wp_update_attachment_metadata($attach_id, $attach_data);
		return $attach_id;
	}
}
add_action('updated_postmeta', 'jinr_insert_youtube_thumbnail_from_url', 10, 4);

add_action('added_post_meta', 'jinr_insert_youtube_thumbnail_from_url_save', 10, 4);
function jinr_insert_youtube_thumbnail_from_url_save($meta_id, $post_id, $meta_key, $meta_value)
{
	if ($meta_key == '_jinr_thumb_youtube' && !empty($meta_value)) {
		if (!class_exists('WP_Http')) {
			require_once ABSPATH . WPINC . '/class-http.php';
		}
		$http     = new WP_Http();
		$response = $http->request($meta_value, array('timeout' => 10));
		if (!is_array($response)) {
			return;
		}
		if (200 !== $response['response']['code']) {
			return false;
		}

		$ext = pathinfo(basename($meta_value), PATHINFO_EXTENSION);
		$youtube_url = get_post_meta($post_id, '_jinr_url_youtube', true);
		preg_match('/[\/?=]([a-zA-Z0-9_-]{11})[&\?]?/', $youtube_url, $match);
		$upload_name = 'youtube-thumbnail-' . $match[1] . '.' . $ext;
		$upload = wp_upload_bits($upload_name, null, $response['body']);
		if (!empty($upload['error'])) {
			return false;
		}
		$file_path        = $upload['file'];
		$file_name        = basename($file_path);
		$file_type        = wp_check_filetype($file_name, null);
		$wp_upload_dir    = wp_upload_dir();

		$post_info = array(
			'guid'           => $wp_upload_dir['url'] . '/' . $file_name,
			'post_mime_type' => $file_type['type'],
			'post_title'     => 'jinr-youtube-thumbnail-' . $match[1],
			'post_content'   => '',
			'post_status'    => 'inherit',
		);
		$attach_id = wp_insert_attachment($post_info, $file_path, $post_id);
		require_once ABSPATH . 'wp-admin/includes/image.php';
		$attach_data = wp_generate_attachment_metadata($attach_id, $file_path);
		wp_update_attachment_metadata($attach_id, $attach_data);
		return $attach_id;
	}
}

if (!function_exists('log_it')) {
	function log_it($message)
	{
		if (WP_DEBUG === true) {

			if (is_array($message) || is_object($message)) {
				error_log(print_r($message, true));
			} else {
				error_log($message);
			}
		}
	}
}

function jinr_youtube_thumbnail_url($post_id, $size)
{
	$youtube_thumbnail = get_post_meta($post_id, '_jinr_media_youtube', true);
	if (!$youtube_thumbnail) return;

	//拡張子の前と後で分割 (jpeg/jpg/png/gif/webpのみ対応)正規表現を使う
	$extension = strrchr($youtube_thumbnail, '.');
	$file_name_url = explode($extension, $youtube_thumbnail);
	if ($size == 'thumbnail') {
		$jinr_youtube_thumbnail = $file_name_url[0] . '-150x150' . $extension;
	} elseif ($size == 'small') {
		$jinr_youtube_thumbnail = $file_name_url[0] . '-320x180' . $extension;
	} elseif ($size == 'medium') {
		$jinr_youtube_thumbnail = $file_name_url[0] . '-640x360' . $extension;
	} elseif ($size == 'large') {
		$jinr_youtube_thumbnail = $file_name_url[0] . $extension;
	} else {
		$jinr_youtube_thumbnail = $youtube_thumbnail;
	}
	return $jinr_youtube_thumbnail;
}

//カテゴリー編集ページに項目追加
function jinr_add_category_fields($term)
{
	//全固定ページID取得
	$page_ids = get_posts(array(
		'posts_per_page' => -1,
		'fields'         => 'ids',
		'post_type'      => 'page',
	));

	//変数初期値設定
	$target_page_id = "";
	$pair_ids = array();

	foreach ($page_ids as $page_id) {
		$jinr_category = get_post_meta($page_id, '_jinr_category', true);

		if (!empty($jinr_category)) {
			$pair_ids[$page_id] = $jinr_category;
		}
	}

	//現在のカテゴリーページID
	$this_url = $_SERVER['REQUEST_URI'];
	$cat_id = (int) preg_replace('/[^0-9]/', '', $this_url);

	$target_page_id = array_search($cat_id, $pair_ids);

	$jinr_category_edit_toggle = "";
	if ($target_page_id !== false) {
		$jinr_category_edit_toggle = get_post_meta($target_page_id, '_jinr_category_edit', true);
	}

	?>
	<tr class="form-field">
		<th class=""><label>カテゴリーページ作り込み</label></th>
		<?php if ($jinr_category_edit_toggle == "1") : ?>
			<td>
				<button style="border:none; padding:0;" class="jinr-category-link"><a style="font-size:12px; color:#fff; border-radius:30px; background-color:#2271b1; text-decoration:none; padding:9px 15px;" href="<?php echo home_url() . "/wp-admin/post.php?post=$target_page_id&action=edit"; ?>">カテゴリーページを編集する</a></button>
			</td>
		<?php else : ?>
			<td>
				<p class="description">JINRではカテゴリーページの編集は固定ページで行います。固定ページで選択したカテゴリーにその固定ページの内容が反映されます。<br><br>
					【手順】<br>
				<ul style="font-size:12px; list-style-type:demical; padding-left:18px;">
					<li>下記ボタンをクリックして固定ページ一覧画面に移動</li>
					<li>任意の固定ページをクリック</li>
					<li>固定ページの「設定」より「カテゴリーページの設定」で任意のカテゴリーを選択</li>
				</ul>
				<br>
				詳しくは<a target="_blank" href="https://jinr.jp/manual/category-page-2/">マニュアル</a>を参考にしてください。
				</p>
				<button style="border:none; padding:0; margin-top:18px;" class="jinr-category-link"><a style="font-size:12px; color:#fff; border-radius:30px; background-color:#2271b1; text-decoration:none; padding:9px 15px;" href="<?php echo home_url() . "/wp-admin/edit.php?post_type=page"; ?>">カテゴリーページを編集する</a></button>
			</td>
		<?php endif; ?>
	</tr>
<?php
}
add_action('category_edit_form_fields', 'jinr_add_category_fields');


function show_message_shortcode($atts, $content)
{
	return '<div class="' . $atts['style'] . '"><p>' . $content . '</p></div>';
}
add_shortcode('message', 'show_message_shortcode');



//記事中の最初のh2タグの上に広告自動設置
function jinr_h2_ads_concert($the_content)
{
	$post_ads_display_settings = get_post_meta(get_the_ID(), '_jinr_ads_display', true);
	if ($post_ads_display_settings == '1') {
		return $the_content;
	}
	// 投稿のみに適用
	$post_type = get_post_type();
	if (is_single()  && $post_type == 'post') {
		$categories = get_the_category();
		if (!$categories) {
			return $the_content;
		}
		// カテゴリーが複数設定されている場合、カテゴリーIDの小さい方を読み込むようにする
		$ids = array_column($categories, 'term_id');
		array_multisort($ids, SORT_ASC, $categories);
		$cat_current  = $categories[0];
		$current_id   = $cat_current->cat_ID;

		$jinr_h2_sponsor_text = get_option('jinr_h2_sponsor_text');
		$jinr_h2_ads_code = get_option('jinr_h2_ads_code');
		$jinr_h2_sp_display = get_option('jinr_h2_sp_display');

		/**
		 * 前回のカテゴリーIDを格納していく。
		 * 条件1 : JIN:R設定で設定しているカテゴリーに親がいるのかどうかを検証。
		 * 親を持つ場合            → そのまま格納
		 * 親を持たない場合         → 親を持たないカテゴリーを起点に他のカテゴリーをarray_diffで検証
		 * 
		 * array_diffがtrueの場合 → 取得した値を使う
		 * falseの場合            → 自分のカテゴリーをそのまま使う
		 * 
		 * 注意点
		 * 子カテゴリーの取得するだけではなく、自身のカテゴリーも追加した状態で配列を組む
		 */
		$cat_merge_ids = array();
		for ($num = 1; $num <= 4; $num++) {
			${'cat_array_id_0' . $num} = array();
			${'jinr_ads_choice_category_0' . $num} = get_option('jinr_choise_category_' . $num . '');

			// カテゴリーが未選択ならループを飛ばす
			if (${'jinr_ads_choice_category_0' . $num} == '0') {
				${"merge" . $num} = array('parent' => 'none', 'category_list' => array(0 => 0));
				continue;
			}
			$cat_data = get_category(${'jinr_ads_choice_category_0' . $num});
			if (isset($cat_data->category_parent)) {
				if ($cat_data->category_parent) {
					// 親カテゴリーがある場合
					$child_categories = get_term_children(${'jinr_ads_choice_category_0' . $num}, 'category');
					${'cat_array_id_0' . $num}['parent'] = 'exist';
					array_unshift($child_categories, intval(${'jinr_ads_choice_category_0' . $num}));
					if (!empty($child_categories)) {
						${'cat_array_id_0' . $num}['category_list'] = $child_categories;
					} else {
						${'cat_array_id_0' . $num}['category_list'] = array(0 => 0);
					}
				} else {
					// 親カテゴリーがない場合
					$child_categories = get_term_children(${'jinr_ads_choice_category_0' . $num}, 'category');
					${'cat_array_id_0' . $num}['parent'] = 'none';
					array_unshift($child_categories, intval(${'jinr_ads_choice_category_0' . $num}));
					${'cat_array_id_0' . $num}['category_list'] = $child_categories;
				}
			}
			${"merge" . $num} = array_merge($cat_merge_ids, ${'cat_array_id_0' . $num});
			${"ancestor_ids" . $num} = get_ancestors(get_option('jinr_choise_category_' . $num), 'category');
		}
		//エリア１専用
		for ($m = 1; $m <= 4; $m++) {
			${"exist1_" . $m} = "";
			if (isset(${"ancestor_ids1"}) && isset(${"merge" . $m}['category_list'])) {
				${"check1_" . $m} = array_intersect(${"ancestor_ids1"}, ${"merge" . $m}['category_list']);
				if (!empty(${"check1_" . $m})) {
					${"exist1_" . $m} = array(0);
				} else {
					${"exist1_" . $m} = ${"merge" . $m}['category_list'];
				}
			} else {
				${"exist1_" . $m} = array(0);
			}
		}
		if (!empty($merge1['category_list'])) {
			if (!$merge1['category_list'][0] == 0 && is_array($merge1['category_list'])) {
				$cat_array_ids1 = array_diff($merge1['category_list'], $exist1_2, $exist1_3, $exist1_4);
			} else {
				$cat_array_ids1 = array();
			}
		} else {
			$cat_array_ids1 = array();
		}

		//エリア２専用
		for ($m = 1; $m <= 4; $m++) {
			${"exist2_" . $m} = "";
			if (isset(${"ancestor_ids2"}) && isset(${"merge" . $m}['category_list'])) {
				${"check2_" . $m} = array_intersect(${"ancestor_ids2"}, ${"merge" . $m}['category_list']);
				if (!empty(${"check2_" . $m})) {
					${"exist2_" . $m} = array(0);
				} else {
					${"exist2_" . $m} = ${"merge" . $m}['category_list'];
				}
			} else {
				${"exist2_" . $m} = array(0);
			}
		}
		if (!empty($merge2['category_list'])) {
			if (!$merge2['category_list'][0] == 0 && is_array($merge2['category_list'])) {
				$cat_array_ids2 = array_diff($merge2['category_list'], $exist2_1, $exist2_3, $exist2_4);
			} else {
				$cat_array_ids2 = array();
			}
		} else {
			$cat_array_ids2 = array();
		}

		//エリア３専用
		for ($m = 1; $m <= 4; $m++) {
			${"exist3_" . $m} = "";
			if (isset(${"ancestor_ids3"}) && isset(${"merge" . $m}['category_list'])) {
				${"check3_" . $m} = array_intersect(${"ancestor_ids3"}, ${"merge" . $m}['category_list']);
				if (!empty(${"check3_" . $m})) {
					${"exist3_" . $m} = array(0);
				} else {
					${"exist3_" . $m} = ${"merge" . $m}['category_list'];
				}
			} else {
				${"exist3_" . $m} = array(0);
			}
		}
		if (!empty($merge3['category_list'])) {
			if (!$merge3['category_list'][0] == 0 && is_array($merge3['category_list'])) {
				$cat_array_ids3 = array_diff($merge3['category_list'], $exist3_1, $exist3_2, $exist3_4);
			} else {
				$cat_array_ids3 = array();
			}
		} else {
			$cat_array_ids3 = array();
		}

		//エリア４専用
		for ($m = 1; $m <= 4; $m++) {
			${"exist4_" . $m} = "";
			if (isset(${"ancestor_ids4"}) && isset(${"merge" . $m}['category_list'])) {
				${"check4_" . $m} = array_intersect(${"ancestor_ids4"}, ${"merge" . $m}['category_list']);
				if (!empty(${"check4_" . $m})) {
					${"exist4_" . $m} = array(0);
				} else {
					${"exist4_" . $m} = ${"merge" . $m}['category_list'];
				}
			} else {
				${"exist4_" . $m} = array(0);
			}
		}
		if (!empty($merge4['category_list'])) {
			if (!$merge4['category_list'][0] == 0 && is_array($merge4['category_list'])) {
				$cat_array_ids4 = array_diff($merge4['category_list'], $exist4_1, $exist4_2, $exist4_3);
			} else {
				$cat_array_ids4 = array();
			}
		} else {
			$cat_array_ids4 = array();
		}

		for ($i = 1; $i <= 4; $i++) {
			${'jinr_ads_choice_category_0' . $i} = get_option('jinr_choise_category_' . $i . '');
			if (is_array(${"cat_array_ids" . $i}) && !empty(${"cat_array_ids" . $i})) {
				foreach (${"cat_array_ids" . $i} as $cat_array_id) {
					if ($current_id == $cat_array_id) {
						$jinr_h2_sponsor_text = get_option('jinr_h2_sponsor_text_' . $i . '');
						$jinr_h2_ads_code = get_option('jinr_h2_ads_code_' . $i . '');
						$jinr_h2_sp_display = get_option('jinr_h2_sp_display_' . $i . '');
						continue;
					}
				}
			}
		}
		if ($jinr_h2_sp_display == '1') {
			$jinr_sp_display = '';
		} else {
			$jinr_sp_display = 'd--sp-nonedisplay';
		}
		$ad = '';
		if (!$jinr_h2_ads_code == null) {
			$ad .= '<div class="o--ads-area o--before-h2-ads">';
			if (!$jinr_h2_sponsor_text == null) {
				$ad .= '<div class="a--ads-sponser">' . $jinr_h2_sponsor_text . '</div>';
			}
			$ad .= '<section class="c--ads-area d--minwidth-100 ' . $jinr_sp_display . '"><div class="a--ads-rectangle">' . $jinr_h2_ads_code . '</div></section></div>';
			$tag = '/<h2.*?>/i';
			if (preg_match($tag, $the_content, $tags)) {
				if (strpos($tags[0], 'a--h2rich-maincopy') !== false) {
					$pattern = '/<section class="wp-block-jinr-blocks-designtitle/';
					preg_match($pattern, $the_content, $matches, PREG_OFFSET_CAPTURE);
					$the_content = preg_replace($pattern, $ad . $matches[0][0], $the_content, 1);
				} else {
					$the_content = preg_replace($tag, $ad . $tags[0], $the_content, 1);
				}
			}
		}
		return $the_content;
	} else {
		return $the_content;
	}
}
add_filter('the_content', 'jinr_h2_ads_concert');
// アイコンの呼び出しをcURLを使って実装（高速化も視野にいれる）
function curl_get_contents($url)
{
	static $curl;
	if (empty($curl)) {
		$curl = curl_init();
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($curl, CURLOPT_CONNECTTIMEOUT, 10);
		curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
		$agent = 'Mozilla/5.0 (Windows NT 6.2; WOW64; rv:17.0) Gecko/20100101 Firefox/17.0';
		curl_setopt($curl, CURLOPT_USERAGENT, $agent);
	}
	curl_setopt($curl, CURLOPT_URL, $url);
	$html = curl_exec($curl);
	return $html;
}

function jinr_comment_callback($comment, $args, $depth)
{
	$GLOBALS['comment'] = $comment; ?>
	<li <?php comment_class('o--comment-item'); ?> id="comment-<?php comment_ID(); ?>">
		<div class="c--comment-author-image">
			<?php echo get_avatar($comment, $size = '75', $default = get_template_directory_uri() . '/lib/img/comment-image.png'); ?>
		</div>
		<div class="c--comment-meta">
			<?php printf(__('<span class="a--comment-user-name">%s</span>'), get_comment_author_link()) ?>
			<span class="a--comment-date commentmetadata">
				<?php printf(__('%s前', '%s = human-readable time difference'), human_time_diff(get_comment_time('U'), current_time('timestamp'))); ?>
				<?php edit_comment_link(__('Edit'), '  ', '') ?>
			</span>
			<?php comment_text() ?>
			<?php if ($comment->comment_approved == '0') : ?>
				<p class="a--comment-approve">承認待ちのコメントです</p>
			<?php endif; ?>
		</div>
		<div class="a--comment-reply">
			<?php comment_reply_link(array_merge($args, array('reply_text' => '返信する', 'depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
		</div>
	<?php
}
function jinr_code_editor($hook_suffix)
{
	// 特定のページだけ読み込ませたい場合はURL内の文字列などを使ってうまく判断させる
	// if ( false === strpos( $hook_suffix, '' ) ) {
	//     return;
	// }
	$settings['codeEditor'] = wp_enqueue_code_editor(array(
		'type' => 'text/css',
		'codemirror' => array(
			'autoRefresh' => true
		)
	));
	if (false === $settings) {
		return;
	}
	wp_localize_script('jquery', 'codeEditorSettings', $settings);
	wp_enqueue_script('wp-theme-plugin-editor');
	wp_enqueue_style('wp-codemirror');
	wp_add_inline_style(
		'wp-codemirror',
		'.CodeMirror {border: 1px solid #ddd;}'
	);
}
add_action('enqueue_block_editor_assets', 'jinr_code_editor');

function jinr_enqueue_featured_image_generator()
{
	// Gutenberg の依存スクリプトを指定
	wp_enqueue_script(
		'jinr-featured-image-generator',
		get_template_directory_uri() . '/lib/js/Thumbnails.js',
		array('wp-hooks', 'wp-element', 'wp-editor', 'wp-data', 'wp-components', 'wp-i18n'),
		filemtime(get_template_directory() . '/lib/js/Thumbnails.js'),
		true
	);

	$gradation1_color1 = jinr__gradation_color1_1();
	$gradation1_color2 = jinr__gradation_color1_2();
	$gradation1_deg    = jinr__gradation_color1_deg() . 'deg';
	$gradation2_color1 = jinr__gradation_color2_1();
	$gradation2_color2 = jinr__gradation_color2_2();
	$gradation2_deg    = jinr__gradation_color2_deg() . 'deg';
	$gradation3_color1 = jinr__gradation_color3_1();
	$gradation3_color2 = jinr__gradation_color3_2();
	$gradation3_deg    = jinr__gradation_color3_deg() . 'deg';

	$thumbnails_design_pattern = jinr__thumbnails_design_pattern();
	$thumbnails_text_layout = jinr__thumbnails_text_layout();
	$thumbnails_bg_color = jinr__thumbnails_bg_color();
	$thumbnails_text_color = jinr__thumbnails_text_color();
	$thumbnails_simple_color = jinr__thumbnails_simple_color();
	$thumbnails_bg_gradation_select = jinr__thumbnails_bg_gradation_select();
	$thumbnails_bg_image_url = jinr__thumbnails_bg_image_url();
	$thumbnails_profile_image_switch = jinr__thumbanil_profile_image_switch();

	if (current_user_can('administrator')) {
		$userProfileImage = get_theme_mod('jinr__profile_image_url', '');
		$userProfileName = get_theme_mod('jinr__profile_name', '');
		$userProfileJob = get_theme_mod('jinr__profile_job', '');
	} else {
		$user = wp_get_current_user();
		$userProfileImage = get_the_author_meta('profile_image', $user->ID);
		$userProfileName = get_the_author_meta('profile_name', $user->ID);
		$userProfileJob = get_the_author_meta('job', $user->ID);
	}


	wp_localize_script(
		'jinr-featured-image-generator',
		'jinrFeaturedImageGenerator',
		array(
			'defaultBackgroundColor' => get_theme_mod('jinr__theme_color', '#ffffff'),
			'defaultProfileImage'    => $userProfileImage,
			'defaultprofileName'     => $userProfileName,
			'defaultprofileJob'      => $userProfileJob,
			'defaultFontFamily'      => "Noto Sans JP, sans-serif",
			'fontDataUrl'            => get_template_directory_uri() . '/lib/font/notosans.txt',
			'gradation1_color1'      => $gradation1_color1,
			'gradation1_color2'      => $gradation1_color2,
			'gradation1_deg'         => $gradation1_deg,
			'gradation2_color1'      => $gradation2_color1,
			'gradation2_color2'      => $gradation2_color2,
			'gradation2_deg'         => $gradation2_deg,
			'gradation3_color1'      => $gradation3_color1,
			'gradation3_color2'      => $gradation3_color2,
			'gradation3_deg'         => $gradation3_deg,
			'thumbnailsDesignPattern' => $thumbnails_design_pattern,
			'thumbnailsTextLayout'  => $thumbnails_text_layout,
			'thumbnailsBgColor'      => $thumbnails_bg_color,
			'thumbnailsTextColor'   => $thumbnails_text_color,
			'thumbnailsSimpleColor'   => $thumbnails_simple_color,
			'thumbnailsBgGradationSelect' => $thumbnails_bg_gradation_select,
			'thumbnailsBgImageUrl'     => $thumbnails_bg_image_url,
			'thumbnailsProfileImageSwitch' => $thumbnails_profile_image_switch,
		)
	);
}
add_action('enqueue_block_editor_assets', 'jinr_enqueue_featured_image_generator');


/**
 * メニューの項目があるかどうかを検証するコード
 * グローバルメニューやフッターメニューを設定してなかった時、デモプリセットをインストールすると
 * 固定ページが表示されてしまう問題を解消するコード
 */
function jinr_active_item_nav_menu($location)
{
	if (has_nav_menu($location)) {
		$locations = get_nav_menu_locations();
		$menu = wp_get_nav_menu_items($locations[$location]);
		if (!empty($menu)) {
			return true;
		}
	}
	return false;
}

/**
 * テーマを有効化した時に、「運営者情報」と「プライバシーポリシー」を作成する
 * 作成後それをフッターメニューに追加する
 */
add_action('after_switch_theme', 'jinr_create_defaultpage_settings');
function jinr_create_defaultpage_settings()
{
	// 一回だけ動かせるようにする
	$jinr_create_defaultpage_flag = get_option('jinr_create_defaultpage_flag');
	if (!$jinr_create_defaultpage_flag) {
		update_option('jinr_create_defaultpage_flag', true);
	} else {
		return;
	}

	$owner_post = array(
		'post_content' => '<!-- wp:heading {"level":4} -->
		<h4 class="undefined jinr-heading d--bold">代表責任者名</h4>
		<!-- /wp:heading -->

		<!-- wp:paragraph -->
		<p>xxxxxx</p>
		<!-- /wp:paragraph -->

		<!-- wp:heading {"level":4} -->
		<h4 class="undefined jinr-heading d--bold">所在地</h4>
		<!-- /wp:heading -->

		<!-- wp:paragraph -->
		<p>〒xxx―xxxx　ここに住所を記載</p>
		<!-- /wp:paragraph -->

		<!-- wp:heading {"level":4} -->
		<h4 class="undefined jinr-heading d--bold">電話番号</h4>
		<!-- /wp:heading -->

		<!-- wp:paragraph -->
		<p>xxx-xxxx-xxxx</p>
		<!-- /wp:paragraph -->

		<!-- wp:heading {"level":4} -->
		<h4 class="undefined jinr-heading d--bold">メールアドレス</h4>
		<!-- /wp:heading -->

		<!-- wp:paragraph -->
		<p>xxxx@xxxx.com</p>
		<!-- /wp:paragraph -->

		<!-- wp:heading {"level":4} -->
		<h4 class="undefined jinr-heading d--bold">ホームページURL</h4>
		<!-- /wp:heading -->

		<!-- wp:paragraph -->
		<p>https://xxxxx.com</p>
		<!-- /wp:paragraph -->

		<!-- wp:heading {"level":4} -->
		<h4 class="undefined jinr-heading d--bold">責任の有無</h4>
		<!-- /wp:heading -->

		<!-- wp:paragraph -->
		<p>当サイトは、アフィリエイトプログラムにより商品をご紹介致しております。</p>
		<!-- /wp:paragraph -->

		<!-- wp:paragraph -->
		<p>アフィリエイトプログラムとは、商品及びサービスの提供元と業務提携を 結び商品やサービスを紹介するインターネット上のシステムです。</p>
		<!-- /wp:paragraph -->

		<!-- wp:paragraph -->
		<p>従いまして、当サイトの商品は当サイトが販売している訳ではありません。</p>
		<!-- /wp:paragraph -->

		<!-- wp:paragraph -->
		<p>お客様ご要望の商品、お支払い等はリンク先の販売店と直接のお取引となりますので、特定商取引法に基づく表記につきましてはリンク先をご確認頂けますようお願い致します。</p>
		<!-- /wp:paragraph -->

		<!-- wp:paragraph -->
		<p>商品の価格 商品の詳細 消費税 送料 在庫数等の詳細は時として変わる場合も御座います。</p>
		<!-- /wp:paragraph -->

		<!-- wp:paragraph -->
		<p>また、返品・返金保証に関しましてもリンク先の販売元が保証するものです。当サイトだけではなくリンク 先のサイトも良くご確認頂けますようお願い致します。</p>
		<!-- /wp:paragraph -->

		<!-- wp:paragraph -->
		<p>また、当サイトの掲載情報をご利用頂く場合には、お客様のご判断と責任におきましてご利用頂けますようお願い致します。当サイトでは、一切の責任を負いかねます事ご了承願います。</p>
		<!-- /wp:paragraph -->

		<!-- wp:paragraph -->
		<p>尚、掲載商品に関するお問合せはリンク先に御座います企業宛までお願い致します。当サイト管理者側ではお答え致しかねます事、ご了承ください。</p>
		<!-- /wp:paragraph -->',
		'post_status' => 'publish',
		'post_title' => '運営者情報',
		'post_type' => 'page',
		'post_name' => 'owner',
	);
	$privacy_post = array(
		'post_content' => '<!-- wp:paragraph -->
		<p>当サイトは、以下のプライバシーポリシー（以下、「本ポリシー」といいます。）に従い、ユーザーの個人情報を適切に取り扱い、保護いたします。</p>
		<!-- /wp:paragraph -->

		<!-- wp:heading {"level":4} -->
		<h4 class="undefined jinr-heading d--bold">当サイトに掲載されている広告について</h4>
		<!-- /wp:heading -->
		<!-- wp:paragraph -->
		<p>当サイトでは、第三者配信の広告サービス（Googleアドセンス、A8.net、Amazonアソシエイト、〇〇、〇〇）を利用しています。</p>
		<!-- /wp:paragraph -->
		<!-- wp:paragraph -->
		<p>このような広告配信事業者は、ユーザーの興味に応じた商品やサービスの広告を表示するため、当サイトや他サイトへのアクセスに関する情報 『Cookie』(氏名、住所、メール アドレス、電話番号は含まれません) を使用することがあります。</p>
		<!-- /wp:paragraph -->
		<!-- wp:paragraph -->
		<p>またGoogleアドセンスに関して、このプロセスの詳細やこのような情報が広告配信事業者に使用されないようにする方法については、<a rel="noreferrer noopener" href="https://www.google.co.jp/policies/technologies/ads/" target="_blank">こちら</a>をご覧ください。</p>
		<!-- /wp:paragraph -->
		<!-- wp:heading {"level":4} -->
		<h4 class="undefined jinr-heading d--bold">当サイトが使用しているアクセス解析ツールについて</h4>
		<!-- /wp:heading -->
		<!-- wp:paragraph -->
		<p>当サイトでは、Googleによるアクセス解析ツール「Googleアナリティクス」を利用しています。</p>
		<!-- /wp:paragraph -->
		<!-- wp:paragraph -->
		<p>このGoogleアナリティクスはトラフィックデータの収集のためにCookieを使用しています。</p>
		<!-- /wp:paragraph -->
		<!-- wp:paragraph -->
		<p>このトラフィックデータは匿名で収集されており、個人を特定するものではありません。</p>
		<!-- /wp:paragraph -->
		<!-- wp:paragraph -->
		<p>この機能はCookieを無効にすることで収集を拒否することが出来ますので、お使いのブラウザの設定をご確認ください。</p>
		<!-- /wp:paragraph -->
		<!-- wp:paragraph -->
		<p>この規約に関して、詳しくは<a rel="noreferrer noopener" href="https://www.google.com/analytics/terms/jp.html" target="_blank">こちら</a>をご覧ください。</p>
		<!-- /wp:paragraph -->
		<!-- wp:heading {"level":4} -->
		<h4 class="undefined jinr-heading d--bold">当サイトへのコメントについて</h4>
		<!-- /wp:heading -->
		<!-- wp:paragraph -->
		<p>当サイトでは、スパム・荒らしへの対応として、コメントの際に使用されたIPアドレスを記録しています。</p>
		<!-- /wp:paragraph -->
		<!-- wp:paragraph -->
		<p>これはブログの標準機能としてサポートされている機能で、スパム・荒らしへの対応以外にこのIPアドレスを使用することはありません。</p>
		<!-- /wp:paragraph -->
		
		<!-- wp:paragraph -->
		<p>また、メールアドレスとURLの入力に関しては、任意となっております。</p>
		<!-- /wp:paragraph -->

		<!-- wp:paragraph -->
		<p>全てのコメントは管理人が事前にその内容を確認し、承認した上での掲載となりますことをあらかじめご了承下さい。</p>
		<!-- /wp:paragraph -->

		<!-- wp:heading {"level":4} -->
		<h4 class="undefined jinr-heading d--bold">当サイトで使用するメールアドレス及びパスワードについて</h4>
		<!-- /wp:heading -->

		<!-- wp:list -->
		<ul class="undefined jinr-list"><li>当サイトは、ユーザーから提供されるニックネーム、メールアドレス、パスワード等の情報（以下、「個人情報」といいます。）を、ログイン機能の提供及び有料記事の販売等のサービスを提供するために収集します。</li><li>当サイトは、収集した個人情報を以下の目的で利用いたします。 (1) ログイン機能の提供 (2) 有料記事の購入手続き及び配信 (3) ユーザーサポート (4) サービス向上のための統計データ分析 (5) メールマガジンの配信や新サービスの案内</li><li>当サイトは、個人情報の漏洩、滅失、またはき損の防止及び是正のために、適切なセキュリティ対策を講じます。また、個人情報を取り扱う従業員に対しては、適切な教育及び監督を行います。</li><li>当サイトは、法令に基づく場合を除いて、ユーザーの同意を得ずに個人情報を第三者に提供することはありません。</li><li>ユーザーは、自己の個人情報について、開示、訂正、削除を請求することができます。その場合は、当サイトが別途定める手続きに従ってください。</li><li>当サイトは、必要に応じて、本ポリシーを変更することがあります。変更内容は、当サイト上で公表しますので、最新のプライバシーポリシーを確認してください。</li></ul>
		<!-- /wp:list -->

		<!-- wp:paragraph -->
		<p>以上のプライバシーポリシーを遵守し、ユーザーの個人情報の適切な取り扱いに努めます。当サイトをご利用いただくことにより、本ポリシーに同意されたものとみなします。</p>
		<!-- /wp:paragraph -->

		<!-- wp:paragraph -->
		<p>制定日：○○年○○月○○日<br>最終改訂日：○○年○○月○○日</p>
		<!-- /wp:paragraph -->',
		'post_status' => 'publish',
		'post_title' => 'プライバシーポリシー',
		'post_type' => 'page',
		'post_name' => 'privacy',
	);
	$owner_id = wp_insert_post(add_magic_quotes($owner_post));
	$privacy_id = wp_insert_post(add_magic_quotes($privacy_post));

	// メニューを作成
	$menu_id = wp_create_nav_menu('フッターメニュー');
	if ($menu_id || $owner_id || $privacy_id) {
		wp_update_nav_menu_item($menu_id, 0, array(
			'menu-item-title' => '運営者情報',
			'menu-item-object-id' => $owner_id,
			'menu-item-object' => 'page',
			'menu-item-status' => 'publish',
			'menu-item-type' => 'post_type',
		));
		wp_update_nav_menu_item($menu_id, 0, array(
			'menu-item-title' => 'プライバシーポリシー',
			'menu-item-object-id' => $privacy_id,
			'menu-item-object' => 'page',
			'menu-item-status' => 'publish',
			'menu-item-type' => 'post_type',
		));
		$location             = 'footer-menu';
		$term                 = get_term_by('name', 'フッターメニュー', 'nav_menu');
		$locations            = get_theme_mod('nav_menu_locations');
		$locations[$location] = $term->term_id;
		set_theme_mod('nav_menu_locations', $locations);
	}
}

// WPデフォルトパターンを削除する
add_action('init', function () {
	remove_theme_support('core-block-patterns');
});

// JIN:R設定の画面にメッセージ類が出ないようにする
function jinr_notice_display_none()
{
	$url = '';
	if (isset($_SERVER['HTTPS'])) {
		$url .= 'https://';
	} else {
		$url .= 'http://';
	}
	$url .= $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
	if (strpos($url, 'page=jinr-setting') !== false) {
		remove_all_actions('admin_notices');
	}
}
add_action('admin_init', 'jinr_notice_display_none');

// DEMO IMPORTのsession
if (is_customize_preview()) {
	function jinr_session_start()
	{
		if (session_status() !== PHP_SESSION_ACTIVE) {
			session_start();
			session_regenerate_id();
		}
		if (!empty($_POST['jinr-demo-preset0'])) {
			if (isset($_SESSION["key0"], $_POST["key0"]) && $_SESSION["key0"] == $_POST["key0"]) {
				unset($_SESSION["key0"]);
				jinr_preset_demo0();
			}
		}
		if (!empty($_POST['jinr-demo-preset1'])) {
			if (isset($_SESSION["key1"], $_POST["key1"]) && $_SESSION["key1"] == $_POST["key1"]) {
				unset($_SESSION["key1"]);
				jinr_preset_demo1();
			}
		}
		if (!empty($_POST['jinr-demo-preset2'])) {
			if (isset($_SESSION["key2"], $_POST["key2"]) && $_SESSION["key2"] == $_POST["key2"]) {
				unset($_SESSION["key2"]);
				jinr_preset_demo2();
			}
		}
		if (!empty($_POST['jinr-demo-preset3'])) {
			if (isset($_SESSION["key3"], $_POST["key3"]) && $_SESSION["key3"] == $_POST["key3"]) {
				unset($_SESSION["key3"]);
				jinr_preset_demo3();
			}
		}
		if (!empty($_POST['jinr-demo-preset4'])) {
			if (isset($_SESSION["key4"], $_POST["key4"]) && $_SESSION["key4"] == $_POST["key4"]) {
				unset($_SESSION["key4"]);
				jinr_preset_demo4();
			}
		}
		if (!empty($_POST['jinr-demo-preset5'])) {
			if (isset($_SESSION["key5"], $_POST["key5"]) && $_SESSION["key5"] == $_POST["key5"]) {
				unset($_SESSION["key5"]);
				jinr_preset_demo5();
			}
		}
		if (!empty($_POST['jinr-demo-preset6'])) {
			if (isset($_SESSION["key6"], $_POST["key6"]) && $_SESSION["key6"] == $_POST["key6"]) {
				unset($_SESSION["key6"]);
				jinr_preset_demo6();
			}
		}
		if (!empty($_POST['jinr-demo-preset7'])) {
			if (isset($_SESSION["key7"], $_POST["key7"]) && $_SESSION["key7"] == $_POST["key7"]) {
				unset($_SESSION["key7"]);
				jinr_preset_demo7();
			}
		}
		if (!empty($_POST['jinr-demo-preset8'])) {
			if (isset($_SESSION["key8"], $_POST["key8"]) && $_SESSION["key8"] == $_POST["key8"]) {
				unset($_SESSION["key8"]);
				jinr_preset_demo8();
			}
		}
		if (!empty($_POST['jinr-demo-preset9'])) {
			if (isset($_SESSION["key9"], $_POST["key9"]) && $_SESSION["key9"] == $_POST["key9"]) {
				unset($_SESSION["key9"]);
				jinr_preset_demo9();
			}
		}
		if (!empty($_POST['jinr-demo-preset10'])) {
			if (isset($_SESSION["key10"], $_POST["key10"]) && $_SESSION["key10"] == $_POST["key10"]) {
				unset($_SESSION["key10"]);
				jinr_preset_demo10();
			}
		}
		if (!empty($_POST['jinr-demo-preset11'])) {
			if (isset($_SESSION["key11"], $_POST["key11"]) && $_SESSION["key11"] == $_POST["key11"]) {
				unset($_SESSION["key11"]);
				jinr_preset_demo11();
			}
		}
		if (!empty($_POST['jinr-demo-preset12'])) {
			if (isset($_SESSION["key12"], $_POST["key12"]) && $_SESSION["key12"] == $_POST["key12"]) {
				unset($_SESSION["key12"]);
				jinr_preset_demo12();
			}
		}
		if (!empty($_POST['jinr-demo-preset13'])) {
			if (isset($_SESSION["key13"], $_POST["key13"]) && $_SESSION["key13"] == $_POST["key13"]) {
				unset($_SESSION["key13"]);
				jinr_preset_demo13();
			}
		}
		if (!empty($_POST['jinr-demo-preset14'])) {
			if (isset($_SESSION["key14"], $_POST["key14"]) && $_SESSION["key14"] == $_POST["key14"]) {
				unset($_SESSION["key14"]);
				jinr_preset_demo14();
			}
		}
		if (!empty($_POST['jinr-demo-preset15'])) {
			if (isset($_SESSION["key15"], $_POST["key15"]) && $_SESSION["key15"] == $_POST["key15"]) {
				unset($_SESSION["key15"]);
				jinr_preset_demo15();
			}
		}
		if (!empty($_POST['jinr-demo-preset101'])) {
			if (isset($_SESSION["key101"], $_POST["key101"]) && $_SESSION["key101"] == $_POST["key101"]) {
				unset($_SESSION["key101"]);
				jinr_preset_demo101();
			}
		}
		if (!empty($_POST['jinr-demo-preset102'])) {
			if (isset($_SESSION["key102"], $_POST["key102"]) && $_SESSION["key102"] == $_POST["key102"]) {
				unset($_SESSION["key102"]);
				jinr_preset_demo102();
			}
		}
		if (!empty($_POST['jinr-demo-preset103'])) {
			if (isset($_SESSION["key103"], $_POST["key103"]) && $_SESSION["key103"] == $_POST["key103"]) {
				unset($_SESSION["key103"]);
				jinr_preset_demo103();
			}
		}
		if (!empty($_POST['jinr-demo-preset104'])) {
			if (isset($_SESSION["key104"], $_POST["key104"]) && $_SESSION["key104"] == $_POST["key104"]) {
				unset($_SESSION["key104"]);
				jinr_preset_demo104();
			}
		}
		if (!empty($_POST['jinr-demo-preset105'])) {
			if (isset($_SESSION["key105"], $_POST["key105"]) && $_SESSION["key105"] == $_POST["key105"]) {
				unset($_SESSION["key105"]);
				jinr_preset_demo105();
			}
		}
		if (!empty($_POST['jinr-demo-preset106'])) {
			if (isset($_SESSION["key106"], $_POST["key106"]) && $_SESSION["key106"] == $_POST["key106"]) {
				unset($_SESSION["key106"]);
				jinr_preset_demo106();
			}
		}
		if (!empty($_POST['jinr-demo-preset107'])) {
			if (isset($_SESSION["key107"], $_POST["key107"]) && $_SESSION["key107"] == $_POST["key107"]) {
				unset($_SESSION["key107"]);
				jinr_preset_demo107();
			}
		}
		if (!empty($_POST['jinr-demo-preset108'])) {
			if (isset($_SESSION["key108"], $_POST["key108"]) && $_SESSION["key108"] == $_POST["key108"]) {
				unset($_SESSION["key108"]);
				jinr_preset_demo108();
			}
		}
	}
	add_action('init', 'jinr_session_start', 1);
}

//ユーザー画面でアップローダーを呼び出し
function jinr_user_media($hook_suffix)
{
	if ('user-edit.php' === $hook_suffix || 'profile.php' === $hook_suffix) {
		wp_register_script(
			'jinr_user_mediauploader',
			get_template_directory_uri() . '/lib/js/jinr_user_mediauploader.js',
			array('jquery'),
			false,
			true
		);
		wp_enqueue_media();
		wp_enqueue_script('jinr_user_mediauploader');
	}
}
add_action('admin_enqueue_scripts', 'jinr_user_media');

//ユーザー画面に著者情報追加
function jinr_add_user_profile($user)
{
	?>
		<div class="jinr-user-setting-area" style="margin-top:42px;border-top:1px solid #aaa;padding-top:12px;">
			<h2>著者情報(JIN:R専用)</h2>
			<p><span class="description">複数ユーザーによる寄稿を利用する際、以下の内容が著者情報として記事下に表示されます。</br>管理者の情報を表示させたい場合は「プロフィール名」を空欄にしてください。</span></p>
			<table class="form-table">
				<tr>
					<th><label for="profile_name">プロフィール名</label></th>
					<td><input type="text" name="profile_name" id="profile_name" value="<?php echo esc_attr(get_the_author_meta('profile_name', $user->ID)); ?>" class="regular-text" /></td>
				</tr>
				<tr>
					<th><label for="job">肩書き</label></th>
					<td><input type="text" name="job" id="job" value="<?php echo esc_attr(get_the_author_meta('job', $user->ID)); ?>" class="regular-text" /></td>
				</tr>
				<tr>
					<th><label for="introduction">紹介文</label></th>
					<td><textarea name="introduction" id="introduction" rows="5" cols="30" class="regular-text"><?php echo esc_attr(get_the_author_meta('introduction', $user->ID)); ?></textarea></td>
				</tr>
				<tr>
					<th><label for="profile_image">プロフィール画像</label></th>
					<td>
						<div id="jinrProfileMedia"><img src="<?php echo esc_attr(get_the_author_meta('profile_image', $user->ID)); ?>" /></div>
						<input type="hidden" name="profile_image" id="profile_image" class="regular-text" value="<?php echo esc_attr(get_the_author_meta('profile_image', $user->ID)); ?>" />
						<input type="button" name="jinr-profile-media" id="jinr-profile-media" class="button" value="選択" />
						<input type="button" name="jinr-profile-media-clear" id="jinr-profile-media-clear" class="button" value="クリア" />
					</td>
				</tr>
				<tr>
					<th><label for="twitter">XアカウントのURL</label></th>
					<td><input type="text" name="twitter" id="twitter" value="<?php echo esc_attr(get_the_author_meta('twitter', $user->ID)); ?>" class="regular-text" /></td>
				</tr>
				<tr>
					<th><label for="facebook">FacebookアカウントのURL</label></th>
					<td><input type="text" name="facebook" id="facebook" value="<?php echo esc_attr(get_the_author_meta('facebook', $user->ID)); ?>" class="regular-text" /></td>
				</tr>
				<tr>
					<th><label for="instagram">InstagramアカウントのURL</label></th>
					<td><input type="text" name="instagram" id="instagram" value="<?php echo esc_attr(get_the_author_meta('instagram', $user->ID)); ?>" class="regular-text" /></td>
				</tr>
				<tr>
					<th><label for="youtube">YouTubeアカウントのURL</label></th>
					<td><input type="text" name="youtube" id="youtube" value="<?php echo esc_attr(get_the_author_meta('youtube', $user->ID)); ?>" class="regular-text" /></td>
				</tr>
				<tr>
					<th><label for="line">LINEアカウントのURL</label></th>
					<td><input type="text" name="line" id="line" value="<?php echo esc_attr(get_the_author_meta('line', $user->ID)); ?>" class="regular-text" /></td>
				</tr>
				<tr>
					<th><label for="contact">お問い合わせページのURL</label></th>
					<td><input type="text" name="contact" id="contact" value="<?php echo esc_attr(get_the_author_meta('contact', $user->ID)); ?>" class="regular-text" /></td>
				</tr>
				<tr>
					<th><label for="profile_link">プロフィールページのURL</label></th>
					<td><input type="text" name="profile_link" id="profile_link" value="<?php echo esc_attr(get_the_author_meta('profile_link', $user->ID)); ?>" class="regular-text" /></td>
				</tr>
			</table>
		</div>
	<?php }

global $current_user;
wp_get_current_user();

if ($current_user->ID == '1') {
	add_action('edit_user_profile', 'jinr_add_user_profile');
} else {
	add_action('show_user_profile', 'jinr_add_user_profile');
	add_action('edit_user_profile', 'jinr_add_user_profile');
}


//入力した値を保存する
function jinr_update_user_profile($user_id)
{
	if (current_user_can('edit_user', $user_id)) {
		update_user_meta($user_id, 'profile_name', $_POST['profile_name']);
		update_user_meta($user_id, 'job', $_POST['job']);
		update_user_meta($user_id, 'introduction', $_POST['introduction']);
		update_user_meta($user_id, 'profile_image', $_POST['profile_image']);
		update_user_meta($user_id, 'twitter', $_POST['twitter']);
		update_user_meta($user_id, 'facebook', $_POST['facebook']);
		update_user_meta($user_id, 'instagram', $_POST['instagram']);
		update_user_meta($user_id, 'youtube', $_POST['youtube']);
		update_user_meta($user_id, 'line', $_POST['line']);
		update_user_meta($user_id, 'contact', $_POST['contact']);
		update_user_meta($user_id, 'profile_link', $_POST['profile_link']);
	}
}
add_action('edit_user_profile_update', 'jinr_update_user_profile');
add_action('personal_options_update', 'jinr_update_user_profile');

// コメントのRSSフィードの出力をコントロール
if (get_option("jinr_commentrss_display") == false) {
	add_theme_support('automatic-feed-links');
} else {
	add_action('wp_head', function () {
		printf('
		<link rel="alternate" type="application/rss+xml" title="%s" href="%s">%s', get_bloginfo('name'), get_bloginfo('rss2_url'), "\n");
	});
}

function skip_block_validation($block_content, $block)
{
	// 特定のブロックタイプのバリデーションをスキップ
	if (in_array($block['blockName'], ['jinr-blocks/accordionchild', 'jinr-blocks/accordion'])) {
		return $block_content; // バリデーションエラーをスキップ
	}
	return $block_content;
}
add_filter('render_block', 'skip_block_validation', 10, 2);

/*
//執筆画面のアイキャッチ画像のプレビューサイズを変更する
//thumbnail-preview-jsにエラーが出る報告があり、修正後再度実装予定
function jinr_thumbnail_custom_js()
{
	wp_enqueue_script('thumbnail-preview-js', get_template_directory_uri() . '/lib/js/thumbnail-preview.js', array('wp-editor'), '1.0.0', true);
}
add_action('admin_enqueue_scripts', 'jinr_thumbnail_custom_js');
*/


function enqueue_prism_assets()
{
	// フロントエンドとエディタの両方でスタイルを読み込む
	wp_enqueue_style(
		'prism-numbers',
		'https://cdnjs.cloudflare.com/ajax/libs/prism/1.29.0/plugins/line-numbers/prism-line-numbers.min.css',
		array(),
		'1.29.0'
	);
	wp_enqueue_style(
		'prism-okaidia',
		'https://cdnjs.cloudflare.com/ajax/libs/prism/1.29.0/themes/prism-okaidia.min.css',
		array(),
		'1.29.0'
	);
	wp_enqueue_script('jinr_prism_core', 'https://cdnjs.cloudflare.com/ajax/libs/prism/1.29.0/components/prism-core.min.js', array('jquery'), null, true);
	wp_enqueue_script('jinr_prism_loader', 'https://cdnjs.cloudflare.com/ajax/libs/prism/1.29.0/plugins/autoloader/prism-autoloader.min.js', array('jinr_prism_core'), null, true);
	wp_enqueue_script('jinr_prism_line_num', 'https://cdnjs.cloudflare.com/ajax/libs/prism/1.29.0/plugins/line-numbers/prism-line-numbers.min.js', array('jinr_prism_core'), null, true);
}
add_action('enqueue_block_assets', 'enqueue_prism_assets');
