<?php

/*サイトデザイン設定*/

function jinr__add_section_site_design($wp_customize)
{

	$wp_customize->add_section(
		'jinr__site_design_section',
		array(
			'title'    => __('サイトデザイン設定'),
			'priority' => 2,
		)
	);

	$wp_customize->add_setting('jinr__site_extra_settings1');
	$wp_customize->add_control(
		new Jinr_Base_Control(
			$wp_customize,
			'jinr__site_extra_settings1',
			array(
				'settings'    => 'jinr__site_extra_settings1',
				'label'       => 'ページレイアウト',
				'section'     => 'jinr__site_design_section',
				'type'        => 'hidden',
			)
		)
	);


	$wp_customize->add_setting('jinr__home_column_style', array('default' => 't--home-one-column'));
	$wp_customize->add_control(
		new Jinr_Base_Control(
			$wp_customize,
			'jinr__home_column_style',
			array(
				'settings' => 'jinr__home_column_style',
				'label'    => 'トップページ',
				'section'  => 'jinr__site_design_section',
				'type'     => 'radio',
				'choices'  => array(
					't--home-one-column' => '',
					't--home-two-column' => '',
				),
			)
		)
	);

	$wp_customize->add_setting('jinr__post_column_style', array('default' => 't--post-one-column'));
	$wp_customize->add_control(
		new Jinr_Base_Control(
			$wp_customize,
			'jinr__post_column_style',
			array(
				'settings' => 'jinr__post_column_style',
				'label'    => '記事ページ',
				'section'  => 'jinr__site_design_section',
				'type'     => 'radio',
				'choices'  => array(
					't--post-one-column' => '',
					't--post-two-column' => '',
				),
			)
		)
	);

	$wp_customize->add_setting('jinr__site_extra_settings2');
	$wp_customize->add_control(
		new Jinr_Base_Control(
			$wp_customize,
			'jinr__site_extra_settings2',
			array(
				'settings'    => 'jinr__site_extra_settings2',
				'label'       => 'ページフレーム',
				'section'     => 'jinr__site_design_section',
				'type'        => 'hidden',
			)
		)
	);

	$wp_customize->add_setting('jinr__main_style', array('default' => 'd--main-style-outline'));
	$wp_customize->add_control(
		new Jinr_Base_Control(
			$wp_customize,
			'jinr__main_style',
			array(
				'settings' => 'jinr__main_style',
				'section'  => 'jinr__site_design_section',
				'type'     => 'radio',
				'choices'  => array(
					'd--main-style-outline' => '',
					'd--main-style-noframe' => '',
					'd--main-style-transparent' => '',
				),
			)
		)
	);

	$wp_customize->add_setting('jinr__site_extra_settings3');
	$wp_customize->add_control(
		new Jinr_Base_Control(
			$wp_customize,
			'jinr__site_extra_settings3',
			array(
				'settings'    => 'jinr__site_extra_settings3',
				'label'       => 'デザインルール',
				'section'     => 'jinr__site_design_section',
				'type'        => 'hidden',
			)
		)
	);

	$wp_customize->add_setting(
		'jinr__design_style',
		array(
			'default' => 'd--flat-design',
		)
	);
	$wp_customize->add_control(
		new Jinr_Base_Control(
			$wp_customize,
			'jinr__design_style',
			array(
				'settings' => 'jinr__design_style',
				'label'    => 'コンセプト',
				'section'  => 'jinr__site_design_section',
				'type'     => 'radio',
				'choices'  => array(
					'd--flat-design' => '',
					'd--material-design' => '',
				),
			)
		)
	);

	$wp_customize->add_setting('jinr__round_style', array('default' => 't--round-s'));
	$wp_customize->add_control(
		new Jinr_Base_Control(
			$wp_customize,
			'jinr__round_style',
			array(
				'settings'    => 'jinr__round_style',
				'label'       => '角の丸み',
				'section'     => 'jinr__site_design_section',
				'type'        => 'radio',
				'choices'     => array(
					't--round-off' => '',
					't--round-s'   => '',
					't--round-m'   => '',
					't--round-l'   => '',
				),
				'description' => 'サイト全体の角の丸み具合を調整できます。',
			)
		)
	);

	$wp_customize->add_setting('jinr__font_style', array('default' => 'd--jpf-default'));
	$wp_customize->add_control(
		new Jinr_Base_Control(
			$wp_customize,
			'jinr__font_style',
			array(
				'settings' => 'jinr__font_style',
				'label'    => 'フォント選択',
				'section'  => 'jinr__site_design_section',
				'type'     => 'select',
				'choices'  => array(
					'd--jpf-default' => '標準フォント',
					'd--notosans-thin'  => 'ゴシック（Noto Sans JP）',
					'd--zenkakugothic'  => 'ゴシック（Zen Kaku Gothic New）',
					'd--mpr-thin'  => '丸ゴシック（M PLUS Rounded）',
					'd--shipporimincho'  => '明朝（Shippori Mincho）',
					'd--notoserif'   => '明朝（Noto Serif JP）',
					'd--kiwimaru'   => 'デザイン系（Kiwi Maru）',
				),
			)
		)
	);

	$wp_customize->add_setting('jinr__english_font_style', array('default' => 'd--albert-sans'));
	$wp_customize->add_control(
		new Jinr_Base_Control(
			$wp_customize,
			'jinr__english_font_style',
			array(
				'settings' => 'jinr__english_font_style',
				'label'    => '英語フォント選択',
				'section'  => 'jinr__site_design_section',
				'type'     => 'select',
				'choices'  => array(
					'd--ef-none'           => 'なし',
					'd--roboto'                => 'ゴシック（Roboto）',
					'd--roboto-condensed'      => 'ゴシック（Roboto Condensed）',
					'd--chivo'                 => 'ゴシック（Chivo）',
					'd--albert-sans'           => 'ゴシック（Albert Sans）',
					'd--nunito'                => '丸ゴシック（Nunito）', // 丸ゴシック
					'd--oleo-script'           => '手書き（Oleo Script）', // スクリプト・手書き
					'd--dancing-script'        => '手書き（Dancing Script）',
					'd--timesnewroman'         => '明朝（Times New Roman）',
					'd--libre'                 => '明朝（Libre Bodoni）',
					'd--garamond'              => '明朝（EB Garamond）',
					'd--josefin-slab'          => 'スラブ（Josefin Slab）',
					'd--montserrat-alternates' => '特殊（Montserrat Alternates）',
					'd--oxanium'               => '特殊（Oxanium）',
					'd--orbitron'              => '特殊（Orbitron）',
				),
			)
		)
	);

	$wp_customize->add_setting('jinr__ef_style', array('default' => 'off'));
	$wp_customize->add_control(
		new Jinr_Base_Control(
			$wp_customize,
			'jinr__ef_style',
			array(
				'settings'    => 'jinr__ef_style',
				'label'       => '英語フォントをイタリックにする',
				'section'     => 'jinr__site_design_section',
				'type'        => 'radio',
				'choices'     => array(
					'off' => 'OFF',
					'd--ef-italic'   => 'ON',
				),
			)
		)
	);

	$wp_customize->add_setting('jinr__header_extra_settings2');
	$wp_customize->add_control(
		new Jinr_Base_Control(
			$wp_customize,
			'jinr__header_extra_settings2',
			array(
				'settings'    => 'jinr__header_extra_settings2',
				'label'       => 'ロゴ設定',
				'section'     => 'jinr__site_design_section',
				'type'        => 'hidden',
			)
		)
	);

	$wp_customize->add_setting('jinr__header_logo_url');
	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'jinr__header_logo_url',
			array(
				'section'     => 'jinr__site_design_section',
				'settings'    => 'jinr__header_logo_url',
			)
		)
	);

	$wp_customize->add_setting(
		'jinr__header_logo_size',
		array(
			'default' => 30,
		)
	);
	$wp_customize->add_control(
		new Jinr_Range_Control(
			$wp_customize,
			'jinr__header_logo_size',
			array(
				'settings' => 'jinr__header_logo_size',
				'label'    => 'ロゴ / タイトルの大きさ【PC】',
				'section'  => 'jinr__site_design_section',
				'min'      => 0,
				'max'      => 200,
				'step'     => 1,
				'type'     => 'range',
			)
		)
	);

	$wp_customize->add_setting(
		'jinr__header_logo_size_sp',
		array(
			'default' => 28,
		)
	);
	$wp_customize->add_control(
		new Jinr_Range_Control(
			$wp_customize,
			'jinr__header_logo_size_sp',
			array(
				'settings' => 'jinr__header_logo_size_sp',
				'label'    => 'ロゴ / タイトルの大きさ（スマホ）',
				'section'  => 'jinr__site_design_section',
				'type'     => 'range',
				'max'      => 200,
			)
		)
	);

	$wp_customize->add_setting(
		'jinr__header_logo_padding',
		array(
			'default' => 90,
		)
	);
	$wp_customize->add_control(
		new Jinr_Range_Control(
			$wp_customize,
			'jinr__header_logo_padding',
			array(
				'settings' => 'jinr__header_logo_padding',
				'label'    => 'ロゴ / タイトルの上下余白（PC）',
				'section'  => 'jinr__site_design_section',
				'type'     => 'range',
				'max'      => 300,
			)
		)
	);

	$wp_customize->add_setting(
		'jinr__header_logo_padding_sp',
		array(
			'default' => 60,
		)
	);
	$wp_customize->add_control(
		new Jinr_Range_Control(
			$wp_customize,
			'jinr__header_logo_padding_sp',
			array(
				'settings' => 'jinr__header_logo_padding_sp',
				'label'    => 'ロゴ / タイトルの上下余白（スマホ）',
				'section'  => 'jinr__site_design_section',
				'type'     => 'range',
				'max'      => 150,
			)
		)
	);


	$wp_customize->add_setting('jinr__site_extra_settings4');
	$wp_customize->add_control(
		new Jinr_Base_Control(
			$wp_customize,
			'jinr__site_extra_settings4',
			array(
				'settings'    => 'jinr__site_extra_settings4',
				'label'       => 'ヘッダー',
				'section'     => 'jinr__site_design_section',
				'type'        => 'hidden',
			)
		)
	);

	$wp_customize->add_setting('jinr__header_layout', array('default' => 'd--header-layout1'));
	$wp_customize->add_control(
		new Jinr_Base_Control(
			$wp_customize,
			'jinr__header_layout',
			array(
				'label'       => 'レイアウト',
				'settings' => 'jinr__header_layout',
				'section'  => 'jinr__site_design_section',
				'type'     => 'radio',
				'choices'  => array(
					'd--header-layout1' => '',
					'd--header-layout2' => '',
				),
			)
		)
	);
	$wp_customize->add_setting('jinr__header_style', array('default' => 'd--header-style-default'));
	$wp_customize->add_control(
		new Jinr_Base_Control(
			$wp_customize,
			'jinr__header_style',
			array(
				'label'       => '背景装飾',
				'settings' => 'jinr__header_style',
				'section'  => 'jinr__site_design_section',
				'type'     => 'radio',
				'choices'  => array(
					'd--header-style-default' => '',
					'd--header-style-border' => '',
					'd--header-style-triangle' => '',
					'd--header-style-slope' => '',
				),
				'description' => 'ヘッダーの背景色が「透明」では表示されません。ページフレームを「トランスレート」での利用を推奨。',
			)
		)
	);

	$wp_customize->add_setting(
		'jinr__header_tracking',
		array(
			'default' => 'd--header-tracking-off',
		)
	);
	$wp_customize->add_control(
		new Jinr_Base_Control(
			$wp_customize,
			'jinr__header_tracking',
			array(
				'settings' => 'jinr__header_tracking',
				'label'    => 'ヘッダー追尾機能',
				'section'  => 'jinr__site_design_section',
				'type'     => 'radio',
				'choices'  => array(
					'd--header-tracking-off' => 'OFF',
					'd--header-tracking-on'  => 'ON',
				),
			)
		)
	);

	$wp_customize->add_setting('jinr__header_bg_image');
	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'jinr__header_bg_image',
			array(
				'label'    => 'ヘッダー背景画像の設定',
				'section'  => 'jinr__site_design_section',
				'settings' => 'jinr__header_bg_image',
			)
		)
	);

	$wp_customize->add_setting('jinr__header_bg_image_size', array('default' => 100));
	$wp_customize->add_control(
		new Jinr_Range_Control(
			$wp_customize,
			'jinr__header_bg_image_size',
			array(
				'settings' => 'jinr__header_bg_image_size',
				'label'    => 'ヘッダー背景画像のサイズ【PC】',
				'section'  => 'jinr__site_design_section',
				'type'     => 'range',
				'max'      => 150,
				'min'      => 1,
			)
		)
	);

	$wp_customize->add_setting('jinr__header_bg_image_size_sp', array('default' => 100));
	$wp_customize->add_control(
		new Jinr_Range_Control(
			$wp_customize,
			'jinr__header_bg_image_size_sp',
			array(
				'settings' => 'jinr__header_bg_image_size_sp',
				'label'    => 'ヘッダー背景画像のサイズ【スマホ】',
				'section'  => 'jinr__site_design_section',
				'type'     => 'range',
				'max'      => 150,
				'min'      => 1,
			)
		)
	);

	$wp_customize->add_setting(
		'jinr__header_bg_image_repeat',
		array(
			'default' => 'on',
		)
	);
	$wp_customize->add_control(
		new Jinr_Base_Control(
			$wp_customize,
			'jinr__header_bg_image_repeat',
			array(
				'settings' => 'jinr__header_bg_image_repeat',
				'label'    => 'ヘッダー背景画像リピート',
				'section'  => 'jinr__site_design_section',
				'type'     => 'radio',
				'choices'  => array(
					'on' => 'ON',
					'off' => 'OFF',
				),
			)
		)
	);

	$wp_customize->add_setting('jinr__header_bg_position_horizon', array('default' => 50));
	$wp_customize->add_control(
		new Jinr_Range_Control(
			$wp_customize,
			'jinr__header_bg_position_horizon',
			array(
				'settings' => 'jinr__header_bg_position_horizon',
				'label'    => 'ヘッダー背景画像の横方向の位置【PC】',
				'section'  => 'jinr__site_design_section',
				'type'     => 'range',
				'max'      => 200,
				'min'      => -100,
			)
		)
	);

	$wp_customize->add_setting('jinr__header_bg_position_vertical', array('default' => 50));
	$wp_customize->add_control(
		new Jinr_Range_Control(
			$wp_customize,
			'jinr__header_bg_position_vertical',
			array(
				'settings' => 'jinr__header_bg_position_vertical',
				'label'    => 'ヘッダー背景画像の縦方向の位置【PC】',
				'section'  => 'jinr__site_design_section',
				'type'     => 'range',
				'max'      => 200,
				'min'      => -100,
			)
		)
	);

	$wp_customize->add_setting('jinr__header_bg_position_horizon_sp', array('default' => 50));
	$wp_customize->add_control(
		new Jinr_Range_Control(
			$wp_customize,
			'jinr__header_bg_position_horizon_sp',
			array(
				'settings' => 'jinr__header_bg_position_horizon_sp',
				'label'    => 'ヘッダー背景画像の横方向の位置【スマホ】',
				'section'  => 'jinr__site_design_section',
				'type'     => 'range',
				'max'      => 200,
				'min'      => -100,
			)
		)
	);

	$wp_customize->add_setting('jinr__header_bg_position_vertical_sp', array('default' => 50));
	$wp_customize->add_control(
		new Jinr_Range_Control(
			$wp_customize,
			'jinr__header_bg_position_vertical_sp',
			array(
				'settings' => 'jinr__header_bg_position_vertical_sp',
				'label'    => 'ヘッダー背景画像の縦方向の位置【スマホ】',
				'section'  => 'jinr__site_design_section',
				'type'     => 'range',
				'max'      => 200,
				'min'      => -100,
			)
		)
	);

	$wp_customize->add_setting(
		'jinr__header_menu_design',
		array(
			'default' => 'd--header-menu-style1',
		)
	);
	$wp_customize->add_control(
		new Jinr_Base_Control(
			$wp_customize,
			'jinr__header_menu_design',
			array(
				'settings' => 'jinr__header_menu_design',
				'label'    => 'グローバルメニューのデザイン選択',
				'section'  => 'jinr__site_design_section',
				'type'     => 'select',
				'choices'  => array(
					'd--header-menu-style1' => 'デザイン１',
					'd--header-menu-style2' => 'デザイン２',
				),
			)
		)
	);

	$wp_customize->add_setting(
		'jinr__glonavi_font_size',
		array(
			'default' => 14,
		)
	);
	$wp_customize->add_control(
		new Jinr_Range_Control(
			$wp_customize,
			'jinr__glonavi_font_size',
			array(
				'settings' => 'jinr__glonavi_font_size',
				'label'    => 'グローバルメニューの文字サイズ（PC）',
				'section'  => 'jinr__site_design_section',
				'type'     => 'range',
				'max'     => 16,
				'min'     => 12,
			)
		)
	);
	$wp_customize->add_setting('jinr__glonavi_hover', array('default' => 'd--glonavi-hover-borderup'));
	$wp_customize->add_control(
		new Jinr_Base_Control(
			$wp_customize,
			'jinr__glonavi_hover',
			array(
				'label'       => 'グローバルメニューにカーソルしたときの動き',
				'settings' => 'jinr__glonavi_hover',
				'section'  => 'jinr__site_design_section',
				'type'     => 'select',
				'choices'  => array(
					'd--glonavi-hover-none' => '文字色を変える',
					'd--glonavi-hover-borderup' => '下線（下から上へ）',
					'd--glonavi-hover-borderwax' => '下線（左から右へ）',
					'd--glonavi-hover-borderflow' => '下線（左から右へ消える）',
				),
			)
		)
	);

	$wp_customize->add_setting('jinr__site_extra_settings9');
	$wp_customize->add_control(
		new Jinr_Base_Control(
			$wp_customize,
			'jinr__site_extra_settings9',
			array(
				'settings'    => 'jinr__site_extra_settings9',
				'label'       => '表示設定',
				'section'     => 'jinr__site_design_section',
				'type'        => 'text',
			)
		)
	);

	$wp_customize->add_setting('jinr__hamburger_display_pc');
	$wp_customize->add_control(
		new Jinr_CheckBox_Control(
			$wp_customize,
			'jinr__hamburger_display_pc',
			array(
				'settings' => 'jinr__hamburger_display_pc',
				'label'    => 'PCでハンバーガーメニューを表示',
				'section'  => 'jinr__site_design_section',
				'type'     => 'checkbox',
			)
		)
	);

	$wp_customize->add_setting('jinr__header_search_display', array('default' => true));
	$wp_customize->add_control(
		new Jinr_CheckBox_Control(
			$wp_customize,
			'jinr__header_search_display',
			array(
				'settings' => 'jinr__header_search_display',
				'label'    => '検索ボックスを表示',
				'section'  => 'jinr__site_design_section',
				'type'     => 'checkbox',
			)
		)
	);

	$wp_customize->add_setting('jinr__header_globalmenu_tablet_display', array('default' => false));
	$wp_customize->add_control(
		new Jinr_CheckBox_Control(
			$wp_customize,
			'jinr__header_globalmenu_tablet_display',
			array(
				'settings' => 'jinr__header_globalmenu_tablet_display',
				'label'    => 'グローバルメニューをタブレット端末で表示',
				'section'  => 'jinr__site_design_section',
				'type'     => 'checkbox',
			)
		)
	);

	$wp_customize->add_setting('jinr__header_toppage_display', array('default' => true));
	$wp_customize->add_control(
		new Jinr_CheckBox_Control(
			$wp_customize,
			'jinr__header_toppage_display',
			array(
				'settings' => 'jinr__header_toppage_display',
				'label'    => 'トップページでヘッダーを表示',
				'section'  => 'jinr__site_design_section',
				'type'     => 'checkbox',
			)
		)
	);

	$wp_customize->add_setting(
		'jinr__header_postpage_display_ids',
		array(
			'default' => '',
		)
	);
	$wp_customize->add_control(
		'jinr__header_postpage_display_ids',
		array(
			'label'    => 'ヘッダーを非表示にするページID（半角数字）',
			'section'  => 'jinr__site_design_section',
			'settings' => 'jinr__header_postpage_display_ids',
			'type'     => 'text',
			'description'    => '【記入例】3,12,36',
		)
	);


	$wp_customize->add_setting('jinr__site_extra_settings5');
	$wp_customize->add_control(
		new Jinr_Base_Control(
			$wp_customize,
			'jinr__site_extra_settings5',
			array(
				'settings'    => 'jinr__site_extra_settings5',
				'label'       => '記事のデザイン',
				'section'     => 'jinr__site_design_section',
				'type'        => 'hidden',
			)
		)
	);

	$wp_customize->add_setting(
		'jinr__article_style',
		array(
			'default' => 'd--article-style1',
		)
	);
	$wp_customize->add_control(
		new Jinr_Base_Control(
			$wp_customize,
			'jinr__article_style',
			array(
				'settings' => 'jinr__article_style',
				'label'    => '記事デザイン',
				'section'  => 'jinr__site_design_section',
				'type'     => 'radio',
				'choices'  => array(
					'd--article-style1' => '',
					'd--article-style2' => '',
				),
				'description'     => '「アドバンス」を１カラムで使う場合は大きいアイキャッチ画像の設定をおすすめします(推奨：横1120px〜)',
			)
		)
	);

	$wp_customize->add_setting(
		'jinr__article_width',
		array(
			'default' => 'd--article-width-740',
		)
	);
	$wp_customize->add_control(
		new Jinr_Base_Control(
			$wp_customize,
			'jinr__article_width',
			array(
				'settings' => 'jinr__article_width',
				'label'    => '記事幅',
				'section'  => 'jinr__site_design_section',
				'type'     => 'radio',
				'choices'  => array(
					'd--article-width-680' => '680px',
					'd--article-width-740' => '740px',
				),
			)
		)
	);

	$wp_customize->add_setting(
		'jinr__font_size',
		array(
			'default' => 'd--font-pc-m-size',
		)
	);
	$wp_customize->add_control(
		new Jinr_Base_Control(
			$wp_customize,
			'jinr__font_size',
			array(
				'settings' => 'jinr__font_size',
				'label'    => '文字サイズ（PC）',
				'section'  => 'jinr__site_design_section',
				'type'     => 'radio',
				'choices'  => array(
					'd--font-pc-l-size' => 'L',
					'd--font-pc-m-size' => 'M',
					'd--font-pc-s-size' => 'S',
				),
			)
		)
	);
	$wp_customize->add_setting(
		'jinr__font_size_sp',
		array(
			'default' => 'd--font-sp-m-size',
		)
	);
	$wp_customize->add_control(
		new Jinr_Base_Control(
			$wp_customize,
			'jinr__font_size_sp',
			array(
				'settings' => 'jinr__font_size_sp',
				'label'    => '文字サイズ（スマホ）',
				'section'  => 'jinr__site_design_section',
				'type'     => 'radio',
				'choices'  => array(
					'd--font-sp-l-size' => 'L',
					'd--font-sp-m-size' => 'M',
					'd--font-sp-s-size' => 'S',
				),
			)
		)
	);

	$wp_customize->add_setting(
		'jinr__comment_title',
		array(
			'default' => 'COMMENT',
		)
	);
	$wp_customize->add_control(
		'jinr__comment_title',
		array(
			'label'    => 'コメントのタイトル文字',
			'section'  => 'jinr__site_design_section',
			'settings' => 'jinr__comment_title',
			'type'     => 'text',
		)
	);

	$wp_customize->add_setting('jinr__pub_mod_setting', array('default' => 'both'));
	$wp_customize->add_control(
		new Jinr_Base_Control(
			$wp_customize,
			'jinr__pub_mod_setting',
			array(
				'label'    => '投稿日時の表示',
				'settings' => 'jinr__pub_mod_setting',
				'section'  => 'jinr__site_design_section',
				'type'     => 'select',
				'choices'  => array(
					'none' => 'なし',
					'both' => '公開日と更新日',
					'pub' => '公開日のみ',
					'mod' => '更新日のみ',
				),
			)
		)
	);

	$wp_customize->add_setting('jinr__article_image_setting', array('default' => 'd--article-image-r-on'));
	$wp_customize->add_control(
		new Jinr_Base_Control(
			$wp_customize,
			'jinr__article_image_setting',
			array(
				'label'    => '記事内の画像に丸みをつける',
				'settings' => 'jinr__article_image_setting',
				'section'  => 'jinr__site_design_section',
				'type'     => 'radio',
				'choices'  => array(
					'd--article-image-r-on' => 'ON',
					'd--article-image-r-off' => 'OFF',
				),
			)
		)
	);

	$wp_customize->add_setting('jinr__site_extra_settings10');
	$wp_customize->add_control(
		new Jinr_Base_Control(
			$wp_customize,
			'jinr__site_extra_settings10',
			array(
				'settings'    => 'jinr__site_extra_settings10',
				'label'       => '表示設定',
				'section'     => 'jinr__site_design_section',
				'type'        => 'text',
			)
		)
	);

	$wp_customize->add_setting('jinr__eyecatch_off', array('default' => true));
	$wp_customize->add_control(
		new Jinr_CheckBox_Control(
			$wp_customize,
			'jinr__eyecatch_off',
			array(
				'settings' => 'jinr__eyecatch_off',
				'label'    => 'アイキャッチ画像を表示',
				'section'  => 'jinr__site_design_section',
				'type'     => 'checkbox',
			)
		)
	);

	$wp_customize->add_setting('jinr__related_post_remove', array('default' => true));
	$wp_customize->add_control(
		new Jinr_CheckBox_Control(
			$wp_customize,
			'jinr__related_post_remove',
			array(
				'settings' => 'jinr__related_post_remove',
				'label'    => '関連記事を表示',
				'section'  => 'jinr__site_design_section',
				'type'     => 'checkbox',
			)
		)
	);

	$wp_customize->add_setting('jinr__comment_remove', array('default' => false));
	$wp_customize->add_control(
		new Jinr_CheckBox_Control(
			$wp_customize,
			'jinr__comment_remove',
			array(
				'settings' => 'jinr__comment_remove',
				'label'    => 'コメントエリアを表示',
				'section'  => 'jinr__site_design_section',
				'type'     => 'checkbox',
			)
		)
	);

	$wp_customize->add_setting('jinr__site_extra_settings6');
	$wp_customize->add_control(
		new Jinr_Base_Control(
			$wp_customize,
			'jinr__site_extra_settings6',
			array(
				'settings'    => 'jinr__site_extra_settings6',
				'label'       => 'ブログカード',
				'section'     => 'jinr__site_design_section',
				'type'        => 'hidden',
			)
		)
	);

	$wp_customize->add_setting(
		'jinr__blogcard_design',
		array(
			'default' => 'd--blogcard-style1',
		)
	);
	$wp_customize->add_control(
		new Jinr_Base_Control(
			$wp_customize,
			'jinr__blogcard_design',
			array(
				'settings' => 'jinr__blogcard_design',
				'label'    => 'ブログカードのデザイン選択',
				'section'  => 'jinr__site_design_section',
				'type'     => 'radio',
				'choices'  => array(
					'd--blogcard-style1' => '',
					'd--blogcard-style2' => '',
				),
			)
		)
	);

	$wp_customize->add_setting(
		'jinr__blogcard_title',
		array(
			'default' => 'あわせて読みたい',
		)
	);
	$wp_customize->add_control(
		'jinr__blogcard_title',
		array(
			'label'   => 'ブログカードの見出し',
			'section' => 'jinr__site_design_section',
			'type'    => 'text',
		)
	);


	$wp_customize->add_setting('jinr__site_extra_settings7');
	$wp_customize->add_control(
		new Jinr_Base_Control(
			$wp_customize,
			'jinr__site_extra_settings7',
			array(
				'settings'    => 'jinr__site_extra_settings7',
				'label'       => '関連記事',
				'section'     => 'jinr__site_design_section',
				'type'        => 'hidden',
			)
		)
	);

	$wp_customize->add_setting(
		'jinr__related_post_title',
		array(
			'default' => 'Recommend',
		)
	);
	$wp_customize->add_control(
		'jinr__related_post_title',
		array(
			'settings' => 'jinr__related_post_title',
			'label'    => 'タイトルの文字',
			'section'  => 'jinr__site_design_section',
			'type'     => 'text',
		)
	);

	$wp_customize->add_setting(
		'jinr__postlist_related_label',
		array(
			'default' => 'こちらの記事もどうぞ',
		)
	);
	$wp_customize->add_control(
		'jinr__postlist_related_label',
		array(
			'settings' => 'jinr__postlist_related_label',
			'label'    => 'サブタイトルの文字',
			'section'  => 'jinr__site_design_section',
			'type'     => 'text',
		)
	);

	$wp_customize->add_setting(
		'jinr__postlist_related_num',
		array(
			'default' => 6,
		)
	);
	$wp_customize->add_control(
		new Jinr_Range_Control(
			$wp_customize,
			'jinr__postlist_related_num',
			array(
				'settings' => 'jinr__postlist_related_num',
				'label'    => '表示件数',
				'section'  => 'jinr__site_design_section',
				'type'     => 'range',
				'max'     => 12,
				'min'     => 3,
			)
		)
	);


	$wp_customize->add_setting('jinr__site_extra_settings8');
	$wp_customize->add_control(
		new Jinr_Base_Control(
			$wp_customize,
			'jinr__site_extra_settings8',
			array(
				'settings'    => 'jinr__site_extra_settings8',
				'label'       => '詳細設定',
				'section'     => 'jinr__site_design_section',
				'type'        => 'hidden',
			)
		)
	);

	$wp_customize->add_setting('jinr__postlist_style', array('default' => 'd--postlist-square d--postlist-square-sp'));
	$wp_customize->add_control(
		new Jinr_Base_Control(
			$wp_customize,
			'jinr__postlist_style',
			array(
				'settings' => 'jinr__postlist_style',
				'section'  => 'jinr__site_design_section',
				'label'    => '記事一覧のカードデザイン',
				'type'     => 'radio',
				'choices'  => array(
					'd--postlist-square d--postlist-square-sp' => '縦長カード',
					'd--postlist-rectangle d--postlist-rectangle-sp' => '横長カード',
				),
			)
		)
	);
	$wp_customize->add_setting('jinr__postlist_pagenation_style', array('default' => 'd--postlist-asyn'));
	$wp_customize->add_control(
		new Jinr_Base_Control(
			$wp_customize,
			'jinr__postlist_pagenation_style',
			array(
				'settings' => 'jinr__postlist_pagenation_style',
				'section'  => 'jinr__site_design_section',
				'label'    => '記事一覧の追加読み込み',
				'type'     => 'radio',
				'choices'  => array(
					'd--postlist-pagenation' => 'ページネーション',
					'd--postlist-asyn' => '非同期読込',
				),
			)
		)
	);

	$wp_customize->add_setting('jinr__postlist_hover_style', array('default' => 'd--postlist-hover-up'));
	$wp_customize->add_control(
		new Jinr_Base_Control(
			$wp_customize,
			'jinr__postlist_hover_style',
			array(
				'settings' => 'jinr__postlist_hover_style',
				'label'    => '記事一覧のカーソルしたときの動き',
				'section'  => 'jinr__site_design_section',
				'type'     => 'select',
				'choices'  => array(
					'none'           => 'なし',
					'd--postlist-hover-up'        => '浮かす',
					'd--postlist-hover-zoom'      => 'ズーム',
					'd--postlist-hover-fade'      => 'フェード',
				),
			)
		)
	);
	if (get_option('preset_data') == 5) {
		$wp_customize->add_setting(
			'jinr__bg_image',
			array(
				'default' => get_template_directory_uri() . '/include/customizer/img/preset_bg_5.png',
			)
		);
	} elseif (get_option('preset_data') == 10) {
		$wp_customize->add_setting(
			'jinr__bg_image',
			array(
				'default' => get_template_directory_uri() . '/include/customizer/img/preset_bg_10.png',
			)
		);
	} elseif (get_option('preset_data') == 11) {
		$wp_customize->add_setting(
			'jinr__bg_image',
			array(
				'default' => get_template_directory_uri() . '/include/customizer/img/preset_bg_portfolio.png',
			)
		);
	} elseif (get_option('preset_data') == 15) {
		$wp_customize->add_setting(
			'jinr__bg_image',
			array(
				'default' => get_template_directory_uri() . '/include/customizer/img/preset_bg_15.png',
			)
		);
	} else {
		$wp_customize->add_setting(
			'jinr__bg_image',
			array(
				'default' => '',
			)
		);
	}
	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'jinr__bg_image',
			array(
				'label'    => '背景画像の設定',
				'section'  => 'jinr__site_design_section',
				'settings' => 'jinr__bg_image',
			)
		)
	);

	$wp_customize->add_setting(
		'jinr__bg_image_repeat',
		array(
			'default' => 'on',
		)
	);
	$wp_customize->add_control(
		new Jinr_Base_Control(
			$wp_customize,
			'jinr__bg_image_repeat',
			array(
				'settings' => 'jinr__bg_image_repeat',
				'label'    => '背景画像リピート',
				'section'  => 'jinr__site_design_section',
				'type'     => 'radio',
				'choices'  => array(
					'on' => 'ON',
					'd--bgimage-repeat-off' => 'OFF',
				),
			)
		)
	);
}
add_action('customize_register', 'jinr__add_section_site_design');


function jinr__home_column_style()
{
	return get_theme_mod('jinr__home_column_style', 't--home-one-column');
}
function jinr__post_column_style()
{
	return get_theme_mod('jinr__post_column_style', 't--post-one-column');
}
function jinr__main_style()
{
	return get_theme_mod('jinr__main_style', 'd--main-style-outline');
}
function jinr__round_style()
{
	return get_theme_mod('jinr__round_style', 't--round-s');
}
function jinr__article_style()
{
	return get_theme_mod('jinr__article_style', 'd--article-style1');
}
function jinr__article_width()
{
	return get_theme_mod('jinr__article_width', 'd--article-width-740');
}
function jinr__design_style()
{
	return get_theme_mod('jinr__design_style', 'd--flat-design');
}
function jinr__font_size()
{
	return get_theme_mod('jinr__font_size', 'd--font-pc-m-size');
}
function jinr__font_size_sp()
{
	return get_theme_mod('jinr__font_size_sp', 'd--font-sp-m-size');
}
function jinr__ef_style()
{
	return get_theme_mod('jinr__ef_style', 'off');
}

function jinr__header_logo_url()
{
	return get_theme_mod('jinr__header_logo_url', '');
}
function jinr__header_logo_size()
{
	return get_theme_mod('jinr__header_logo_size', 30);
}
function jinr__header_logo_padding()
{
	return get_theme_mod('jinr__header_logo_padding', 90);
}
function jinr__header_logo_padding_sp()
{
	return get_theme_mod('jinr__header_logo_padding_sp', 60);
}
function jinr__header_logo_size_sp()
{
	return get_theme_mod('jinr__header_logo_size_sp', 28);
}
function jinr__glonavi_font_size()
{
	return get_theme_mod('jinr__glonavi_font_size', 14);
}
function jinr__header_bg_image()
{
	return get_theme_mod('jinr__header_bg_image', '');
}
function jinr__header_bg_image_repeat()
{
	return get_theme_mod('jinr__header_bg_image_repeat', 'on');
}
function jinr__header_bg_image_size()
{
	return get_theme_mod('jinr__header_bg_image_size', 100);
}
function jinr__header_bg_position_horizon()
{
	return get_theme_mod('jinr__header_bg_position_horizon', 50);
}
function jinr__header_bg_position_vertical()
{
	return get_theme_mod('jinr__header_bg_position_vertical', 50);
}
function jinr__header_bg_image_size_sp()
{
	return get_theme_mod('jinr__header_bg_image_size_sp', 100);
}
function jinr__header_bg_position_horizon_sp()
{
	return get_theme_mod('jinr__header_bg_position_horizon_sp', 50);
}
function jinr__header_bg_position_vertical_sp()
{
	return get_theme_mod('jinr__header_bg_position_vertical_sp', 50);
}

function jinr__header_layout()
{
	return get_theme_mod('jinr__header_layout', 'd--header-layout1');
}
function jinr__header_style()
{
	return get_theme_mod('jinr__header_style', 'd--header-style-default');
}
function jinr__header_tracking()
{
	return get_theme_mod('jinr__header_tracking', 'd--header-tracking-off');
}
function jinr__header_menu_design()
{
	return get_theme_mod('jinr__header_menu_design', 'd--header-menu-style1');
}
function jinr__header_postpage_display_ids()
{
	return get_theme_mod('jinr__header_postpage_display_ids', '');
}

function jinr__postlist_style()
{
	return get_theme_mod('jinr__postlist_style', 'd--postlist-square d--postlist-square-sp');
}
function jinr__postlist_pagenation_style()
{
	return get_theme_mod('jinr__postlist_pagenation_style', 'd--postlist-asyn');
}
function jinr__postlist_hover_style()
{
	return get_theme_mod('jinr__postlist_hover_style', 'd--postlist-hover-up');
}


function jinr__postlist_related_label()
{
	return get_theme_mod('jinr__postlist_related_label', 'こちらの記事もどうぞ');
}
function jinr__postlist_related_num()
{
	return get_theme_mod('jinr__postlist_related_num', 6);
}

function jinr__blogcard_design()
{
	return get_theme_mod('jinr__blogcard_design', 'd--blogcard-style1');
}
function jinr__blogcard_title()
{
	return get_theme_mod('jinr__blogcard_title', 'あわせて読みたい');
}

function jinr__font_style()
{
	return get_theme_mod('jinr__font_style', 'd--jpf-default');
}
function jinr__english_font_style()
{
	return get_theme_mod('jinr__english_font_style', 'd--albert-sans');
}
function jinr__bg_image()
{
	return get_theme_mod('jinr__bg_image', '');
}
function jinr__bg_image_repeat()
{
	return get_theme_mod('jinr__bg_image_repeat', 'on');
}
function jinr__eyecatch_off()
{
	return get_theme_mod('jinr__eyecatch_off', true);
}

function jinr__header_globalmenu_tablet_display()
{
	return get_theme_mod('jinr__header_globalmenu_tablet_display', false);
}
function jinr__glonavi_hover()
{
	return get_theme_mod('jinr__glonavi_hover', 'd--glonavi-hover-borderup');
}
function jinr__header_search_display()
{
	return get_theme_mod('jinr__header_search_display', true);
}
function jinr__hamburger_display_pc()
{
	return get_theme_mod('jinr__hamburger_display_pc', false);
}
function jinr__header_toppage_display()
{
	return get_theme_mod('jinr__header_toppage_display', true);
}


function jinr__related_post_remove()
{
	return get_theme_mod('jinr__related_post_remove', true);
}
function jinr__comment_remove()
{
	return get_theme_mod('jinr__comment_remove', false);
}
function jinr__comment_title()
{
	return get_theme_mod('jinr__comment_title', 'COMMENT');
}
function jinr__related_post_title()
{
	return get_theme_mod('jinr__related_post_title', 'Recommend');
}
function jinr__pub_mod_setting()
{
	return get_theme_mod('jinr__pub_mod_setting', 'both');
}
function jinr__article_image_setting()
{
	return get_theme_mod('jinr__article_image_setting', 'd--article-image-r-on');
}
