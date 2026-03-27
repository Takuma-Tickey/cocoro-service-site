<?php

/*メインビジュアル設定*/

function jinr__add_section_main_visual($wp_customize)
{

	$query['autofocus[section]'] = 'jinr__gradation_setting_tab';
	$section_link = add_query_arg($query, admin_url('customize.php'));

	$query2['autofocus[panel]'] = 'jinr__button_design_panel';
	$panel_link = add_query_arg($query2, admin_url('customize.php'));

	/*ヘッダー基本設定*/

	$wp_customize->add_section(
		'jinr__main_visual_section',
		array(
			'title'    => 'メインビジュアル',
			'priority' => 4,
		)
	);

	$wp_customize->add_setting('jinr__mainvisual_extra_settings1');
	$wp_customize->add_control(
		new Jinr_Base_Control(
			$wp_customize,
			'jinr__mainvisual_extra_settings1',
			array(
				'settings' => 'jinr__mainvisual_extra_settings1',
				'label'    => 'メインビジュアルの設定',
				'section'  => 'jinr__main_visual_section',
				'type'     => 'hidden',
			)
		)
	);
	$wp_customize->add_setting(
		'jinr__main_visual_type',
		array(
			'default' => 'type03-stillimage',
		)
	);
	$wp_customize->add_control(
		new Jinr_Base_Control(
			$wp_customize,
			'jinr__main_visual_type',
			array(
				'settings' => 'jinr__main_visual_type',
				'label'    => 'タイプ選択',
				'section'  => 'jinr__main_visual_section',
				'type'     => 'radio',
				'choices'  => array(
					'none'  => '',
					'type01-post-slider'  => '',
					'type02-image-slider' => '',
					'type03-stillimage'   => '',
					'type04-movie'   => '',
				),
			)
		)
	);

	// * スライドショータイプ */

	$wp_customize->add_setting('jinr__mainvisual_slider_extra_settings1');
	$wp_customize->add_control(
		new Jinr_Base_Control(
			$wp_customize,
			'jinr__mainvisual_slider_extra_settings1',
			array(
				'settings' => 'jinr__mainvisual_slider_extra_settings1',
				'label'    => '記事スライドショーの設定',
				'section'  => 'jinr__main_visual_section',
				'type'     => 'hidden',
			)
		)
	);

	$wp_customize->add_setting(
		'jinr__slider_design_select',
		array(
			'default' => 'd--slider-design1',
		)
	);
	$wp_customize->add_control(
		new Jinr_Base_Control(
			$wp_customize,
			'jinr__slider_design_select',
			array(
				'settings' => 'jinr__slider_design_select',
				'label'    => 'デザインの選択',
				'section'  => 'jinr__main_visual_section',
				'type'     => 'radio',
				'choices'  => array(
					'd--slider-design1' => 'フォーカス',
					'd--slider-design2'   => 'マガジン',
				),
			)
		)
	);

	$wp_customize->add_setting(
		'jinr__slider_type_select',
		array(
			'default' => 'd--slider-type-choice',
		)
	);
	$wp_customize->add_control(
		new Jinr_Base_Control(
			$wp_customize,
			'jinr__slider_type_select',
			array(
				'settings' => 'jinr__slider_type_select',
				'label'    => '記事の選択',
				'section'  => 'jinr__main_visual_section',
				'type'     => 'radio',
				'choices'  => array(
					'd--slider-type-choice' => '個別選択',
					'd--slider-type-neworder'   => '新着順で自動表示',
				),
			)
		)
	);

	$wp_customize->add_setting(
		'jinr__slider_notice',
		array(
			'default' => '',
		)
	);
	$wp_customize->add_control(
		new Jinr_CheckBox_Control(
			$wp_customize,
			'jinr__slider_notice',
			array(
				'settings' => 'jinr__slider_notice',
				'section'  => 'jinr__main_visual_section',
				'type'     => 'input',
				'description' => '※４つ以上記事を設定してください。',
			)
		)
	);

	$wp_customize->add_setting(
		'jinr__slider_url1',
		array(
			'default' => '',
		)
	);
	$wp_customize->add_control(
		'jinr__slider_url1',
		array(
			'settings' => 'jinr__slider_url1',
			'label'    => '記事URL',
			'section'  => 'jinr__main_visual_section',
			'type'     => 'text',
		)
	);

	$wp_customize->add_setting(
		'jinr__slider_url2',
		array(
			'default' => '',
		)
	);
	$wp_customize->add_control(
		'jinr__slider_url2',
		array(
			'settings' => 'jinr__slider_url2',
			'label'    => '記事URL',
			'section'  => 'jinr__main_visual_section',
			'type'     => 'text',
		)
	);

	$wp_customize->add_setting(
		'jinr__slider_url3',
		array(
			'default' => '',
		)
	);
	$wp_customize->add_control(
		'jinr__slider_url3',
		array(
			'settings' => 'jinr__slider_url3',
			'label'    => '記事URL',
			'section'  => 'jinr__main_visual_section',
			'type'     => 'text',
		)
	);

	$wp_customize->add_setting(
		'jinr__slider_url4',
		array(
			'default' => '',
		)
	);
	$wp_customize->add_control(
		'jinr__slider_url4',
		array(
			'settings' => 'jinr__slider_url4',
			'label'    => '記事URL',
			'section'  => 'jinr__main_visual_section',
			'type'     => 'text',
		)
	);

	$wp_customize->add_setting(
		'jinr__slider_url5',
		array(
			'default' => '',
		)
	);
	$wp_customize->add_control(
		'jinr__slider_url5',
		array(
			'settings' => 'jinr__slider_url5',
			'label'    => '記事URL',
			'section'  => 'jinr__main_visual_section',
			'type'     => 'text',
		)
	);

	$wp_customize->add_setting(
		'jinr__slider_url6',
		array(
			'default' => '',
		)
	);
	$wp_customize->add_control(
		'jinr__slider_url6',
		array(
			'settings' => 'jinr__slider_url6',
			'label'    => '記事URL',
			'section'  => 'jinr__main_visual_section',
			'type'     => 'text',
		)
	);

	$wp_customize->add_setting('jinr__mainvisual_slider_extra_settings2');
	$wp_customize->add_control(
		new Jinr_Base_Control(
			$wp_customize,
			'jinr__mainvisual_slider_extra_settings2',
			array(
				'settings' => 'jinr__mainvisual_slider_extra_settings2',
				'label'    => '詳細設定',
				'section'  => 'jinr__main_visual_section',
				'type'     => 'hidden',
			)
		)
	);

	$wp_customize->add_setting(
		'jinr__slider_text_color_select',
		array(
			'default' => 'd--slider-title-color',
		)
	);
	$wp_customize->add_control(
		new Jinr_Base_Control(
			$wp_customize,
			'jinr__slider_text_color_select',
			array(
				'settings' => 'jinr__slider_text_color_select',
				'label'    => '記事タイトルの色',
				'section'  => 'jinr__main_visual_section',
				'type'     => 'radio',
				'choices'  => array(
					'd--slider-title-white'   => '白',
					'd--slider-title-color' => '記事の文字色',
					'd--slider-title-theme-color' => 'テーマカラー',
				),
			)
		)
	);

	$wp_customize->add_setting(
		'jinr__slider_link_text',
		array(
			'default' => 'Read more',
		)
	);
	$wp_customize->add_control(
		'jinr__slider_link_text',
		array(
			'settings' => 'jinr__slider_link_text',
			'label'    => 'ボタンのテキスト',
			'section'  => 'jinr__main_visual_section',
			'type'     => 'text',
		)
	);

	$wp_customize->add_setting(
		'jinr__slider_animation_speed',
		array(
			'default' => 'd--slider-animation-normal',
		)
	);
	$wp_customize->add_control(
		new Jinr_Base_Control(
			$wp_customize,
			'jinr__slider_animation_speed',
			array(
				'settings' => 'jinr__slider_animation_speed',
				'label'    => 'アニメーションの速度',
				'section'  => 'jinr__main_visual_section',
				'type'     => 'radio',
				'choices'  => array(
					'd--slider-animation-slow'   => '遅め',
					'd--slider-animation-normal' => '普通',
					'd--slider-animation-high'   => '速め',
				),
			)
		)
	);


	//画像スライダー

	$wp_customize->add_setting('jinr__mainvisual_imageslider_extra_settings1');
	$wp_customize->add_control(
		new Jinr_Base_Control(
			$wp_customize,
			'jinr__mainvisual_imageslider_extra_settings1',
			array(
				'settings' => 'jinr__mainvisual_imageslider_extra_settings1',
				'label'    => 'スライド画像の設定',
				'section'  => 'jinr__main_visual_section',
				'type'     => 'hidden',
			)
		)
	);
	$wp_customize->add_setting(
		'jinr__imageslider_image_url1',
		array(
			'default' => '',
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'jinr__imageslider_image_url1',
			array(
				'label'    => '画像１',
				'section'  => 'jinr__main_visual_section',
				'settings' => 'jinr__imageslider_image_url1',
			)
		)
	);

	$wp_customize->add_setting(
		'jinr__imageslider_image_link1',
		array(
			'default' => '',
		)
	);
	$wp_customize->add_control(
		'jinr__imageslider_image_link1',
		array(
			'settings' => 'jinr__imageslider_image_link1',
			'label'    => '画像１のリンク先URL',
			'section'  => 'jinr__main_visual_section',
			'type'     => 'text',
		)
	);

	$wp_customize->add_setting(
		'jinr__imageslider_image_url2',
		array(
			'default' => '',
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'jinr__imageslider_image_url2',
			array(
				'label'    => '画像２',
				'section'  => 'jinr__main_visual_section',
				'settings' => 'jinr__imageslider_image_url2',
			)
		)
	);

	$wp_customize->add_setting(
		'jinr__imageslider_image_link2',
		array(
			'default' => '',
		)
	);
	$wp_customize->add_control(
		'jinr__imageslider_image_link2',
		array(
			'settings' => 'jinr__imageslider_image_link2',
			'label'    => '画像２のリンク先URL',
			'section'  => 'jinr__main_visual_section',
			'type'     => 'text',
		)
	);

	$wp_customize->add_setting(
		'jinr__imageslider_image_url3',
		array(
			'default' => '',
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'jinr__imageslider_image_url3',
			array(
				'label'    => '画像３',
				'section'  => 'jinr__main_visual_section',
				'settings' => 'jinr__imageslider_image_url3',
			)
		)
	);

	$wp_customize->add_setting(
		'jinr__imageslider_image_link3',
		array(
			'default' => '',
		)
	);
	$wp_customize->add_control(
		'jinr__imageslider_image_link3',
		array(
			'settings' => 'jinr__imageslider_image_link3',
			'label'    => '画像３のリンク先URL',
			'section'  => 'jinr__main_visual_section',
			'type'     => 'text',
		)
	);

	$wp_customize->add_setting(
		'jinr__imageslider_image_url4',
		array(
			'default' => '',
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'jinr__imageslider_image_url4',
			array(
				'label'    => '画像４',
				'section'  => 'jinr__main_visual_section',
				'settings' => 'jinr__imageslider_image_url4',
			)
		)
	);

	$wp_customize->add_setting(
		'jinr__imageslider_image_link4',
		array(
			'default' => '',
		)
	);
	$wp_customize->add_control(
		'jinr__imageslider_image_link4',
		array(
			'settings' => 'jinr__imageslider_image_link4',
			'label'    => '画像４のリンク先URL',
			'section'  => 'jinr__main_visual_section',
			'type'     => 'text',
		)
	);

	$wp_customize->add_setting(
		'jinr__imageslider_image_url5',
		array(
			'default' => '',
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'jinr__imageslider_image_url5',
			array(
				'label'    => '画像５',
				'section'  => 'jinr__main_visual_section',
				'settings' => 'jinr__imageslider_image_url5',
			)
		)
	);

	$wp_customize->add_setting(
		'jinr__imageslider_image_link5',
		array(
			'default' => '',
		)
	);
	$wp_customize->add_control(
		'jinr__imageslider_image_link5',
		array(
			'settings' => 'jinr__imageslider_image_link5',
			'label'    => '画像５のリンク先URL',
			'section'  => 'jinr__main_visual_section',
			'type'     => 'text',
		)
	);

	$wp_customize->add_setting(
		'jinr__imageslider_image_url6',
		array(
			'default' => '',
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'jinr__imageslider_image_url6',
			array(
				'label'    => '画像６',
				'section'  => 'jinr__main_visual_section',
				'settings' => 'jinr__imageslider_image_url6',
			)
		)
	);

	$wp_customize->add_setting(
		'jinr__imageslider_image_link6',
		array(
			'default' => '',
		)
	);
	$wp_customize->add_control(
		'jinr__imageslider_image_link6',
		array(
			'settings' => 'jinr__imageslider_image_link6',
			'label'    => '画像６のリンク先URL',
			'section'  => 'jinr__main_visual_section',
			'type'     => 'text',
		)
	);

	$wp_customize->add_setting('jinr__mainvisual_imageslider_extra_settings2');
	$wp_customize->add_control(
		new Jinr_Base_Control(
			$wp_customize,
			'jinr__mainvisual_imageslider_extra_settings2',
			array(
				'settings' => 'jinr__mainvisual_imageslider_extra_settings2',
				'label'    => '詳細設定',
				'section'  => 'jinr__main_visual_section',
				'type'     => 'hidden',
			)
		)
	);



	$wp_customize->add_setting(
		'jinr__imageslider_animation_select',
		array(
			'default' => 'd--imageslider-animation-slidein',
		)
	);
	$wp_customize->add_control(
		new Jinr_Base_Control(
			$wp_customize,
			'jinr__imageslider_animation_select',
			array(
				'settings' => 'jinr__imageslider_animation_select',
				'label'    => 'アニメーション選択',
				'section'  => 'jinr__main_visual_section',
				'type'     => 'select',
				'choices'  => array(
					'd--imageslider-animation-slidein' => 'スライドイン',
					'd--imageslider-animation-fade' => 'フェード',
					'd--imageslider-animation-slide' => 'スライド',
					'd--imageslider-animation-parallax' => 'パララックス',
				),
			)
		)
	);

	$wp_customize->add_setting(
		'jinr__imageslider_animation_speed',
		array(
			'default' => 'd--imageslider-animation-normal',
		)
	);
	$wp_customize->add_control(
		new Jinr_Base_Control(
			$wp_customize,
			'jinr__imageslider_animation_speed',
			array(
				'settings' => 'jinr__imageslider_animation_speed',
				'label'    => 'アニメーションの速度',
				'section'  => 'jinr__main_visual_section',
				'type'     => 'radio',
				'choices'  => array(
					'd--imageslider-animation-slow'   => '遅め',
					'd--imageslider-animation-normal' => '普通',
					'd--imageslider-animation-high'   => '速め',
				),
			)
		)
	);


	$wp_customize->add_setting(
		'jinr__imageslider_autoplay',
		array(
			'default' => 'd--imageslider-autoplay-on',
		)
	);
	$wp_customize->add_control(
		new Jinr_Base_Control(
			$wp_customize,
			'jinr__imageslider_autoplay',
			array(
				'settings' => 'jinr__imageslider_autoplay',
				'label'    => '自動再生',
				'section'  => 'jinr__main_visual_section',
				'type'     => 'radio',
				'choices'  => array(
					'd--imageslider-autoplay-on'  => 'ON',
					'd--imageslider-autoplay-off' => 'OFF',
				),
			)
		)
	);



	// * 静止画タイプ */
	$wp_customize->add_setting('jinr__mainvisual_stillimage_extra_settings1');
	$wp_customize->add_control(
		new Jinr_Base_Control(
			$wp_customize,
			'jinr__mainvisual_stillimage_extra_settings1',
			array(
				'settings' => 'jinr__mainvisual_stillimage_extra_settings1',
				'label'    => '画像の設定',
				'section'  => 'jinr__main_visual_section',
				'type'     => 'hidden',
			)
		)
	);
	$wp_customize->add_setting(
		'jinr__stillimage_design',
		array(
			'default' => 'd--stillimage-desgin2',
		)
	);
	$wp_customize->add_control(
		new Jinr_Base_Control(
			$wp_customize,
			'jinr__stillimage_design',
			array(
				'settings' => 'jinr__stillimage_design',
				'label'    => 'デザイン選択',
				'section'  => 'jinr__main_visual_section',
				'type'     => 'radio',
				'choices'  => array(
					'd--stillimage-desgin1' => '',
					'd--stillimage-desgin2' => '',
				),
			)
		)
	);

	$wp_customize->add_setting(
		'jinr__stillimage_url',
		array(
			'default' => get_template_directory_uri() . '/include/customizer/img/jinr-headerimg.png',
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'jinr__stillimage_url',
			array(
				'label'    => '画像設定',
				'section'  => 'jinr__main_visual_section',
				'settings' => 'jinr__stillimage_url',
			)
		)
	);


	$wp_customize->add_setting(
		'jinr__stillimage_height_size',
		array(
			'default' => 'd--stillimage-height-size-cover',
		)
	);
	$wp_customize->add_control(
		new Jinr_Base_Control(
			$wp_customize,
			'jinr__stillimage_height_size',
			array(
				'settings' => 'jinr__stillimage_height_size',
				'label'    => '画像比率',
				'section'  => 'jinr__main_visual_section',
				'type'     => 'select',
				'choices'  => array(
					'd--stillimage-height-size-cover' => '画面の大きさに合わせる',
					'd--stillimage-height-size-full' => 'オリジナル比率',
					'd--stillimage-height-size-original'     => 'カスタム',
				),
			)
		)
	);

	$wp_customize->add_setting(
		'jinr__stillimage_height_size_control',
		array(
			'default' => 27,
		)
	);
	$wp_customize->add_control(
		new Jinr_Range_Control(
			$wp_customize,
			'jinr__stillimage_height_size_control',
			array(
				'settings' => 'jinr__stillimage_height_size_control',
				'label'    => '大きさ調整',
				'section'  => 'jinr__main_visual_section',
				'min'      => 0,
				'max'      => 100,
				'step'     => 0.1,
				'type'     => 'range',
				'description' => '実際のPC端末を見ながら最適な数値に調整してください。',
			)
		)
	);

	$wp_customize->add_setting(
		'jinr__stillimage_height_size_number',
		array(
			'default' => 450,
		)
	);
	$wp_customize->add_control(
		new Jinr_Range_Control(
			$wp_customize,
			'jinr__stillimage_height_size_number',
			array(
				'settings' => 'jinr__stillimage_height_size_number',
				'label'    => '画像の高さ入力（単位：px）',
				'section'  => 'jinr__main_visual_section',
				'min'      => 30,
				'max'      => 1200,
				'step'     => 1,
				'type'     => 'range',
			)
		)
	);

	$wp_customize->add_setting(
		'jinr__stillimage_url_sp',
		array(
			'default' => get_template_directory_uri() . '/include/customizer/img/jinr-headerimg.png',
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'jinr__stillimage_url_sp',
			array(
				'label'    => 'スマホ用画像設定',
				'section'  => 'jinr__main_visual_section',
				'settings' => 'jinr__stillimage_url_sp',
			)
		)
	);

	$wp_customize->add_setting(
		'jinr__stillimage_height_size_sp',
		array(
			'default' => 'd--stillimage-height-size-cover-sp',
		)
	);
	$wp_customize->add_control(
		new Jinr_Base_Control(
			$wp_customize,
			'jinr__stillimage_height_size_sp',
			array(
				'settings' => 'jinr__stillimage_height_size_sp',
				'label'    => '画像比率',
				'section'  => 'jinr__main_visual_section',
				'type'     => 'select',
				'choices'  => array(
					'd--stillimage-height-size-cover-sp' => '画面の大きさに合わせる',
					'd--stillimage-height-size-full-sp' => 'オリジナル比率',
					'd--stillimage-height-size-original-sp'     => 'カスタム',
				),
			)
		)
	);

	$wp_customize->add_setting(
		'jinr__stillimage_height_size_control_sp',
		array(
			'default' => 27,
		)
	);
	$wp_customize->add_control(
		new Jinr_Range_Control(
			$wp_customize,
			'jinr__stillimage_height_size_control_sp',
			array(
				'settings' => 'jinr__stillimage_height_size_control_sp',
				'label'    => 'スマホ用画像の大きさ調整',
				'section'  => 'jinr__main_visual_section',
				'min'      => 0,
				'max'      => 100,
				'step'     => 0.1,
				'type'     => 'range',
				'description' => '実際のスマホ端末を見ながら最適な数値に調整してください。',
			)
		)
	);

	$wp_customize->add_setting(
		'jinr__stillimage_height_size_number_sp',
		array(
			'default' => 680,
		)
	);
	$wp_customize->add_control(
		new Jinr_Range_Control(
			$wp_customize,
			'jinr__stillimage_height_size_number_sp',
			array(
				'settings' => 'jinr__stillimage_height_size_number_sp',
				'label'    => 'スマホ用画像の高さ入力（単位：px）',
				'section'  => 'jinr__main_visual_section',
				'min'      => 30,
				'max'      => 930,
				'step'     => 1,
				'type'     => 'range',
			)
		)
	);

	$wp_customize->add_setting(
		'jinr__stillimage_overlay_design',
		array(
			'default' => 'd--stillimage-overlay-none',
		)
	);
	$wp_customize->add_control(
		new Jinr_Base_Control(
			$wp_customize,
			'jinr__stillimage_overlay_design',
			array(
				'settings' => 'jinr__stillimage_overlay_design',
				'label'    => 'オーバーレイ効果',
				'section'  => 'jinr__main_visual_section',
				'type'     => 'radio',
				'choices'  => array(
					'd--stillimage-overlay-none'     => 'なし',
					'd--stillimage-overlay-simple' => 'シンプル',
					'd--stillimage-overlay-blur'     => 'ブラー',
				),
			)
		)
	);

	$wp_customize->add_setting(
		'jinr__stillimage_overlay_color_type',
		array(
			'default' => 'simplecolor',
		)
	);
	$wp_customize->add_control(
		new Jinr_Base_Control(
			$wp_customize,
			'jinr__stillimage_overlay_color_type',
			array(
				'settings' => 'jinr__stillimage_overlay_color_type',
				'label'    => 'オーバーレイカラータイプ選択',
				'section'  => 'jinr__main_visual_section',
				'type'     => 'radio',
				'choices'  => array(
					'simplecolor' => '単色',
					'gradation'   => 'グラデーション',
				),
			)
		)
	);

	// 単色
	$wp_customize->add_setting('jinr__stillimage_overlay_color', array('default' => '#fff'));
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'jinr__stillimage_overlay_color',
			array(
				'section'  => 'jinr__main_visual_section',
				'settings' => 'jinr__stillimage_overlay_color',
			)
		)
	);

	// グラデーション（カラー設定で登録したグラデ１と２を呼び出して使用できるように。）
	$wp_customize->add_setting(
		'jinr__stillimage_overlay_gradation_select',
		array(
			'default' => 'd--jinr-gradation1',
		)
	);
	$wp_customize->add_control(
		new Jinr_Base_Control(
			$wp_customize,
			'jinr__stillimage_overlay_gradation_select',
			array(
				'settings' => 'jinr__stillimage_overlay_gradation_select',
				'section'  => 'jinr__main_visual_section',
				'type'     => 'select',
				'choices'  => array(
					'd--jinr-gradation1' => 'グラデーション１',
					'd--jinr-gradation2' => 'グラデーション２',
					'd--jinr-gradation3' => 'グラデーション３',
				),
			)
		)
	);
	$wp_customize->add_setting('jinr__stillimage_extra_sub2');
	$wp_customize->add_control(
		new Jinr_CheckBox_Control(
			$wp_customize,
			'jinr__stillimage_extra_sub2',
			array(
				'settings' => 'jinr__stillimage_extra_sub2',
				'section'  => 'jinr__main_visual_section',
				'type'     => 'input',
				'description' => '<a href="' . esc_url($section_link) . '">グラデーション登録</a>から色を編集できます',
			)
		)
	);

	// オーバーレイなしのときは非表示
	$wp_customize->add_setting('jinr__stillimage_overlay_transparent', array('default' => 25));
	$wp_customize->add_control(
		new Jinr_Range_Control(
			$wp_customize,
			'jinr__stillimage_overlay_transparent',
			array(
				'label'    => 'オーバーレイの透過度',
				'section'  => 'jinr__main_visual_section',
				'settings' => 'jinr__stillimage_overlay_transparent',
				'type'     => 'range',
				'max'      => 100,
			)
		)
	);

	$wp_customize->add_setting(
		'jinr__stillimage_link',
		array(
			'default' => '',
		)
	);
	$wp_customize->add_control(
		'jinr__stillimage_link',
		array(
			'settings' => 'jinr__stillimage_link',
			'label'    => '画像のリンク先URL',
			'section'  => 'jinr__main_visual_section',
			'type'     => 'text',
		)
	);

	$wp_customize->add_setting('jinr__mainvisual_stillimage_extra_settings2');
	$wp_customize->add_control(
		new Jinr_Base_Control(
			$wp_customize,
			'jinr__mainvisual_stillimage_extra_settings2',
			array(
				'settings' => 'jinr__mainvisual_stillimage_extra_settings2',
				'label'    => 'キャッチコピー設定',
				'section'  => 'jinr__main_visual_section',
				'type'     => 'hidden',
			)
		)
	);

	$wp_customize->add_setting(
		'jinr__stillimage_copy_display',
		array(
			'default' => 'on',
		)
	);
	$wp_customize->add_control(
		new Jinr_Base_Control(
			$wp_customize,
			'jinr__stillimage_copy_display',
			array(
				'settings' => 'jinr__stillimage_copy_display',
				'label'    => 'キャッチコピーの表示',
				'section'  => 'jinr__main_visual_section',
				'type'     => 'radio',
				'choices'  => array(
					'on' => 'ON',
					'off'   => 'OFF',
				),
			)
		)
	);

	$wp_customize->add_setting(
		'jinr__stillimage_maincopy',
		array(
			'default' => 'すべての人に <br>直感的なサイトデザインを',
		)
	);
	$wp_customize->add_control(
		'jinr__stillimage_maincopy',
		array(
			'settings' => 'jinr__stillimage_maincopy',
			'label'    => 'メインコピー',
			'section'  => 'jinr__main_visual_section',
			'description' => '&lt;br&gt;で改行できます',
			'type'     => 'text',
		)
	);

	$wp_customize->add_setting('jinr__stillimage_subcopy', array('default' => 'WordPressテーマ『JIN：R』',));
	$wp_customize->add_control(
		'jinr__stillimage_subcopy',
		array(
			'settings' => 'jinr__stillimage_subcopy',
			'label'    => 'サブコピー',
			'section'  => 'jinr__main_visual_section',
			'description' => '&lt;br&gt;で改行できます',
			'type'     => 'text',
		)
	);

	$wp_customize->add_setting(
		'jinr__stillimage_copy_size_number',
		array(
			'default' => 10,
		)
	);
	$wp_customize->add_control(
		new Jinr_Range_Control(
			$wp_customize,
			'jinr__stillimage_copy_size_number',
			array(
				'settings' => 'jinr__stillimage_copy_size_number',
				'label'    => 'キャッチコピーの文字サイズ調整',
				'section'  => 'jinr__main_visual_section',
				'min'      => 1,
				'max'      => 30,
				'step'     => 1,
				'type'     => 'range',
			)
		)
	);

	$wp_customize->add_setting('jinr__stillimage_maincopy_color', array('default' => '#22327a'));
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'jinr__stillimage_maincopy_color',
			array(
				'label'    => '文字色',
				'section'  => 'jinr__main_visual_section',
				'settings' => 'jinr__stillimage_maincopy_color',
			)
		)
	);

	$wp_customize->add_setting(
		'jinr__stillimage_maincopy_text_deco_select',
		array(
			'default' => 'd--stillimage-text-shadow-m',
		)
	);
	$wp_customize->add_control(
		new Jinr_Base_Control(
			$wp_customize,
			'jinr__stillimage_maincopy_text_deco_select',
			array(
				'settings'    => 'jinr__stillimage_maincopy_text_deco_select',
				'label'       => '文字のデコレーション',
				'section'     => 'jinr__main_visual_section',
				'type'        => 'select',
				'choices'     => array(
					'none' => 'なし',
					'd--stillimage-text-shadow-s' => '影【小さめ】',
					'd--stillimage-text-shadow-m' => '影【普通】',
					'd--stillimage-text-shadow-l' => '影【大きめ】',
					'd--stillimage-text-border-white' => '白フチ',
				),

			)
		)
	);

	$wp_customize->add_setting('jinr__mainvisual_stillimage_extra_settings3');
	$wp_customize->add_control(
		new Jinr_Base_Control(
			$wp_customize,
			'jinr__mainvisual_stillimage_extra_settings3',
			array(
				'settings' => 'jinr__mainvisual_stillimage_extra_settings3',
				'label'    => 'ボタン設定',
				'section'  => 'jinr__main_visual_section',
				'type'     => 'hidden',
			)
		)
	);

	$wp_customize->add_setting(
		'jinr__stillimage_button_display',
		array(
			'default' => 'on',
		)
	);
	$wp_customize->add_control(
		new Jinr_Base_Control(
			$wp_customize,
			'jinr__stillimage_button_display',
			array(
				'settings' => 'jinr__stillimage_button_display',
				'label'    => 'ボタンの表示',
				'section'  => 'jinr__main_visual_section',
				'type'     => 'radio',
				'choices'  => array(
					'on' => 'ON',
					'off'   => 'OFF',
				),
			)
		)
	);

	$wp_customize->add_setting(
		'jinr__stillimage_button_design_select',
		array(
			'default' => '1',
		)
	);
	$wp_customize->add_control(
		new Jinr_Base_Control(
			$wp_customize,
			'jinr__stillimage_button_design_select',
			array(
				'settings'    => 'jinr__stillimage_button_design_select',
				'label'       => 'デザイン選択',
				'section'     => 'jinr__main_visual_section',
				'type'        => 'select',
				'choices'     => array(
					'1' => jinr__button01_name(),
					'2' => jinr__button02_name(),
					'3' => jinr__button03_name(),
					'4' => jinr__button04_name(),
					'5' => jinr__button05_name(),
					'6' => jinr__button06_name(),
				),

			)
		)
	);
	$wp_customize->add_setting('jinr__stillimage_extra_sub1');
	$wp_customize->add_control(
		new Jinr_CheckBox_Control(
			$wp_customize,
			'jinr__stillimage_extra_sub1',
			array(
				'settings' => 'jinr__stillimage_extra_sub1',
				'section'  => 'jinr__main_visual_section',
				'type'     => 'input',
				'description' => '<a href="' . esc_url($panel_link) . '">ボタンデザインを編集する</a>',
			)
		)
	);

	$wp_customize->add_setting(
		'jinr__stillimage_button_text',
		array(
			'default' => '詳細をみる',
		)
	);
	$wp_customize->add_control(
		'jinr__stillimage_button_text',
		array(
			'settings' => 'jinr__stillimage_button_text',
			'label'    => 'テキスト',
			'section'  => 'jinr__main_visual_section',
			'type'     => 'text',
		)
	);

	$wp_customize->add_setting(
		'jinr__stillimage_button_link',
		array(
			'default' => '',
		)
	);
	$wp_customize->add_control(
		'jinr__stillimage_button_link',
		array(
			'settings' => 'jinr__stillimage_button_link',
			'label'    => 'リンク先URL',
			'section'  => 'jinr__main_visual_section',
			'type'     => 'text',
		)
	);

	$wp_customize->add_setting('jinr__mainvisual_stillimage_extra_settings4');
	$wp_customize->add_control(
		new Jinr_Base_Control(
			$wp_customize,
			'jinr__mainvisual_stillimage_extra_settings4',
			array(
				'settings' => 'jinr__mainvisual_stillimage_extra_settings4',
				'label'    => 'コピー / ボタンの配置設定',
				'section'  => 'jinr__main_visual_section',
				'type'     => 'hidden',
			)
		)
	);

	$wp_customize->add_setting(
		'jinr__stillimage_contents_align_pc',
		array(
			'default' => 'center',
		)
	);
	$wp_customize->add_control(
		new Jinr_Base_Control(
			$wp_customize,
			'jinr__stillimage_contents_align_pc',
			array(
				'settings' => 'jinr__stillimage_contents_align_pc',
				'label'    => '行揃え',
				'section'  => 'jinr__main_visual_section',
				'type'     => 'radio',
				'choices'  => array(
					'left' => '左揃え',
					'center'   => '中央揃え',
					'right'   => '右揃え',
				),
			)
		)
	);

	$wp_customize->add_setting('jinr__stillimage_contents_position_vertical_pc', array('default' => 50));
	$wp_customize->add_control(
		new Jinr_Range_Control(
			$wp_customize,
			'jinr__stillimage_contents_position_vertical_pc',
			array(
				'settings' => 'jinr__stillimage_contents_position_vertical_pc',
				'label'    => '縦方向の位置【PC】',
				'section'  => 'jinr__main_visual_section',
				'type'     => 'range',
				'max'      => 100,
				'min'      => 30,
			)
		)
	);

	$wp_customize->add_setting('jinr__stillimage_contents_position_horizon_pc', array('default' => 50));
	$wp_customize->add_control(
		new Jinr_Range_Control(
			$wp_customize,
			'jinr__stillimage_contents_position_horizon_pc',
			array(
				'settings' => 'jinr__stillimage_contents_position_horizon_pc',
				'label'    => '横方向の位置【PC】',
				'section'  => 'jinr__main_visual_section',
				'type'     => 'range',
				'max'      => 100,
				'min'      => 0,
			)
		)
	);

	$wp_customize->add_setting('jinr__stillimage_contents_position_vertical_sp', array('default' => 50));
	$wp_customize->add_control(
		new Jinr_Range_Control(
			$wp_customize,
			'jinr__stillimage_contents_position_vertical_sp',
			array(
				'settings' => 'jinr__stillimage_contents_position_vertical_sp',
				'label'    => '縦方向の位置【スマホ】',
				'section'  => 'jinr__main_visual_section',
				'type'     => 'range',
				'max'      => 100,
				'min'      => 30,
			)
		)
	);

	$wp_customize->add_setting('jinr__stillimage_contents_position_horizon_sp', array('default' => 50));
	$wp_customize->add_control(
		new Jinr_Range_Control(
			$wp_customize,
			'jinr__stillimage_contents_position_horizon_sp',
			array(
				'settings' => 'jinr__stillimage_contents_position_horizon_sp',
				'label'    => '横方向の位置【スマホ】',
				'section'  => 'jinr__main_visual_section',
				'type'     => 'range',
				'max'      => 100,
				'min'      => 0,
			)
		)
	);

	$wp_customize->add_setting('jinr__mainvisual_stillimage_extra_settings5');
	$wp_customize->add_control(
		new Jinr_Base_Control(
			$wp_customize,
			'jinr__mainvisual_stillimage_extra_settings5',
			array(
				'settings' => 'jinr__mainvisual_stillimage_extra_settings5',
				'label'    => '詳細設定',
				'section'  => 'jinr__main_visual_section',
				'type'     => 'hidden',
			)
		)
	);

	$wp_customize->add_setting(
		'jinr__stillimage_display',
		array(
			'default' => false,
		)
	);
	$wp_customize->add_control(
		new Jinr_CheckBox_Control(
			$wp_customize,
			'jinr__stillimage_display',
			array(
				'settings' => 'jinr__stillimage_display',
				'label'    => '下層ページにも表示',
				'section'  => 'jinr__main_visual_section',
				'type'     => 'checkbox',
			)
		)
	);


	//動画

	$wp_customize->add_setting('jinr__mainvisual_movie_extra_settings1');
	$wp_customize->add_control(
		new Jinr_Base_Control(
			$wp_customize,
			'jinr__mainvisual_movie_extra_settings1',
			array(
				'settings' => 'jinr__mainvisual_movie_extra_settings1',
				'label'    => '動画の設定',
				'section'  => 'jinr__main_visual_section',
				'type'     => 'hidden',
			)
		)
	);

	$wp_customize->add_setting(
		'jinr__movie_design',
		array(
			'default' => 'd--movie-desgin1',
		)
	);
	$wp_customize->add_control(
		new Jinr_Base_Control(
			$wp_customize,
			'jinr__movie_design',
			array(
				'settings' => 'jinr__movie_design',
				'label'    => 'デザイン選択',
				'section'  => 'jinr__main_visual_section',
				'type'     => 'radio',
				'choices'  => array(
					'd--movie-desgin1' => '',
					'd--movie-desgin2' => '',
				),
			)
		)
	);
	if (get_option('preset_data') == 12) {
		$wp_customize->add_setting('jinr__movie_url', array('default' => get_template_directory_uri() . '/include/customizer/img/preset_movie_12.mp4',));
	} else {
		$wp_customize->add_setting('jinr__movie_url', array('default' => '',));
	}
	$wp_customize->add_control(
		new Jinr_Upload_Control(
			$wp_customize,
			'jinr__movie_url',
			array(
				'label'    => '動画をアップロード',
				'section'  => 'jinr__main_visual_section',
				'settings' => 'jinr__movie_url',
				'mime_type' => 'video',
			)
		)
	);

	$wp_customize->add_setting(
		'jinr__movie_height_sp_select',
		array(
			'default' => 'auto',
		)
	);
	$wp_customize->add_control(
		new Jinr_Base_Control(
			$wp_customize,
			'jinr__movie_height_sp_select',
			array(
				'settings' => 'jinr__movie_height_sp_select',
				'label'    => '動画の表示比率【スマホ】',
				'section'  => 'jinr__main_visual_section',
				'type'     => 'radio',
				'choices'  => array(
					'auto' => 'PCと同じ',
					'custom'   => 'カスタム',
				),
			)
		)
	);

	$wp_customize->add_setting('jinr__movie_height_sp', array('default' => 680));
	$wp_customize->add_control(
		new Jinr_Range_Control(
			$wp_customize,
			'jinr__movie_height_sp',
			array(
				'settings' => 'jinr__movie_height_sp',
				'label'    => '高さ設定(単位：px)【スマホ】',
				'section'  => 'jinr__main_visual_section',
				'type'     => 'range',
				'max'      => 930,
				'min'      => 240,
			)
		)
	);

	$wp_customize->add_setting(
		'jinr__movie_autoplay',
		array(
			'default' => 'd--movie-autoplay-off',
		)
	);
	$wp_customize->add_control(
		new Jinr_Base_Control(
			$wp_customize,
			'jinr__movie_autoplay',
			array(
				'settings' => 'jinr__movie_autoplay',
				'label'    => '自動再生',
				'section'  => 'jinr__main_visual_section',
				'type'     => 'radio',
				'choices'  => array(
					'd--movie-autoplay-on' => 'ON',
					'd--movie-autoplay-off'   => 'OFF',
				),
			)
		)
	);

	$wp_customize->add_setting(
		'jinr__movie_loop',
		array(
			'default' => 'd--movie-loop-off',
		)
	);
	$wp_customize->add_control(
		new Jinr_Base_Control(
			$wp_customize,
			'jinr__movie_loop',
			array(
				'settings' => 'jinr__movie_loop',
				'label'    => 'ループ再生',
				'section'  => 'jinr__main_visual_section',
				'type'     => 'radio',
				'choices'  => array(
					'd--movie-loop-on' => 'ON',
					'd--movie-loop-off'   => 'OFF',
				),
			)
		)
	);

	$wp_customize->add_setting('jinr__mainvisual_movie_extra_settings2');
	$wp_customize->add_control(
		new Jinr_Base_Control(
			$wp_customize,
			'jinr__mainvisual_movie_extra_settings2',
			array(
				'settings' => 'jinr__mainvisual_movie_extra_settings2',
				'label'    => 'キャッチコピー設定',
				'section'  => 'jinr__main_visual_section',
				'type'     => 'hidden',
			)
		)
	);

	$wp_customize->add_setting(
		'jinr__movie_copy_display',
		array(
			'default' => 'on',
		)
	);
	$wp_customize->add_control(
		new Jinr_Base_Control(
			$wp_customize,
			'jinr__movie_copy_display',
			array(
				'settings' => 'jinr__movie_copy_display',
				'label'    => 'キャッチコピーの表示',
				'section'  => 'jinr__main_visual_section',
				'type'     => 'radio',
				'choices'  => array(
					'on' => 'ON',
					'off'   => 'OFF',
				),
			)
		)
	);

	$wp_customize->add_setting(
		'jinr__movie_maincopy',
		array(
			'default' => 'すべての人に <br>直感的なサイトデザインを',
		)
	);
	$wp_customize->add_control(
		'jinr__movie_maincopy',
		array(
			'settings' => 'jinr__movie_maincopy',
			'label'    => 'メインコピー',
			'section'  => 'jinr__main_visual_section',
			'description' => '&lt;br&gt;で改行できます',
			'type'     => 'text',
		)
	);

	$wp_customize->add_setting('jinr__movie_subcopy', array('default' => 'WordPressテーマ『JIN：R』',));
	$wp_customize->add_control(
		'jinr__movie_subcopy',
		array(
			'settings' => 'jinr__movie_subcopy',
			'label'    => 'サブコピー',
			'section'  => 'jinr__main_visual_section',
			'description' => '&lt;br&gt;で改行できます',
			'type'     => 'text',
		)
	);

	$wp_customize->add_setting(
		'jinr__movie_copy_size_number',
		array(
			'default' => 10,
		)
	);
	$wp_customize->add_control(
		new Jinr_Range_Control(
			$wp_customize,
			'jinr__movie_copy_size_number',
			array(
				'settings' => 'jinr__movie_copy_size_number',
				'label'    => 'キャッチコピーの文字サイズ調整',
				'section'  => 'jinr__main_visual_section',
				'min'      => 1,
				'max'      => 30,
				'step'     => 1,
				'type'     => 'range',
			)
		)
	);

	$wp_customize->add_setting('jinr__movie_maincopy_color', array('default' => '#22327a'));
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'jinr__movie_maincopy_color',
			array(
				'label'    => '文字色',
				'section'  => 'jinr__main_visual_section',
				'settings' => 'jinr__movie_maincopy_color',
			)
		)
	);

	$wp_customize->add_setting(
		'jinr__movie_maincopy_text_deco_select',
		array(
			'default' => 'd--movie-text-shadow-m',
		)
	);
	$wp_customize->add_control(
		new Jinr_Base_Control(
			$wp_customize,
			'jinr__movie_maincopy_text_deco_select',
			array(
				'settings'    => 'jinr__movie_maincopy_text_deco_select',
				'label'       => '文字のデコレーション',
				'section'     => 'jinr__main_visual_section',
				'type'        => 'select',
				'choices'     => array(
					'none' => 'なし',
					'd--movie-text-shadow-s' => '影【小さめ】',
					'd--movie-text-shadow-m' => '影【普通】',
					'd--movie-text-shadow-l' => '影【大きめ】',
					'd--movie-text-border-white' => '白フチ',
				),

			)
		)
	);

	$wp_customize->add_setting('jinr__mainvisual_movie_extra_settings3');
	$wp_customize->add_control(
		new Jinr_Base_Control(
			$wp_customize,
			'jinr__mainvisual_movie_extra_settings3',
			array(
				'settings' => 'jinr__mainvisual_movie_extra_settings3',
				'label'    => 'ボタン設定',
				'section'  => 'jinr__main_visual_section',
				'type'     => 'hidden',
			)
		)
	);

	$wp_customize->add_setting(
		'jinr__movie_button_display',
		array(
			'default' => 'on',
		)
	);
	$wp_customize->add_control(
		new Jinr_Base_Control(
			$wp_customize,
			'jinr__movie_button_display',
			array(
				'settings' => 'jinr__movie_button_display',
				'label'    => 'ボタンの表示',
				'section'  => 'jinr__main_visual_section',
				'type'     => 'radio',
				'choices'  => array(
					'on' => 'ON',
					'off'   => 'OFF',
				),
			)
		)
	);

	$wp_customize->add_setting(
		'jinr__movie_button_design_select',
		array(
			'default' => '1',
		)
	);
	$wp_customize->add_control(
		new Jinr_Base_Control(
			$wp_customize,
			'jinr__movie_button_design_select',
			array(
				'settings'    => 'jinr__movie_button_design_select',
				'label'       => 'デザイン選択',
				'section'     => 'jinr__main_visual_section',
				'type'        => 'select',
				'choices'     => array(
					'1' => jinr__button01_name(),
					'2' => jinr__button02_name(),
					'3' => jinr__button03_name(),
					'4' => jinr__button04_name(),
					'5' => jinr__button05_name(),
					'6' => jinr__button06_name(),
				),

			)
		)
	);
	$wp_customize->add_setting('jinr__movie_extra_sub1');
	$wp_customize->add_control(
		new Jinr_CheckBox_Control(
			$wp_customize,
			'jinr__movie_extra_sub1',
			array(
				'settings' => 'jinr__movie_extra_sub1',
				'section'  => 'jinr__main_visual_section',
				'type'     => 'input',
				'description' => '<a href="' . esc_url($panel_link) . '">ボタンデザインを編集する</a>',
			)
		)
	);

	$wp_customize->add_setting(
		'jinr__movie_button_text',
		array(
			'default' => '詳細をみる',
		)
	);
	$wp_customize->add_control(
		'jinr__movie_button_text',
		array(
			'settings' => 'jinr__movie_button_text',
			'label'    => 'テキスト',
			'section'  => 'jinr__main_visual_section',
			'type'     => 'text',
		)
	);

	$wp_customize->add_setting(
		'jinr__movie_button_link',
		array(
			'default' => '',
		)
	);
	$wp_customize->add_control(
		'jinr__movie_button_link',
		array(
			'settings' => 'jinr__movie_button_link',
			'label'    => 'リンク先URL',
			'section'  => 'jinr__main_visual_section',
			'type'     => 'text',
		)
	);

	$wp_customize->add_setting('jinr__mainvisual_movie_extra_settings4');
	$wp_customize->add_control(
		new Jinr_Base_Control(
			$wp_customize,
			'jinr__mainvisual_movie_extra_settings4',
			array(
				'settings' => 'jinr__mainvisual_movie_extra_settings4',
				'label'    => 'コピー / ボタンの配置設定',
				'section'  => 'jinr__main_visual_section',
				'type'     => 'hidden',
			)
		)
	);

	$wp_customize->add_setting(
		'jinr__movie_contents_align_pc',
		array(
			'default' => 'center',
		)
	);
	$wp_customize->add_control(
		new Jinr_Base_Control(
			$wp_customize,
			'jinr__movie_contents_align_pc',
			array(
				'settings' => 'jinr__movie_contents_align_pc',
				'label'    => '行揃え',
				'section'  => 'jinr__main_visual_section',
				'type'     => 'radio',
				'choices'  => array(
					'left' => '左揃え',
					'center'   => '中央揃え',
					'right'   => '右揃え',
				),
			)
		)
	);

	$wp_customize->add_setting('jinr__movie_contents_position_vertical_pc', array('default' => 50));
	$wp_customize->add_control(
		new Jinr_Range_Control(
			$wp_customize,
			'jinr__movie_contents_position_vertical_pc',
			array(
				'settings' => 'jinr__movie_contents_position_vertical_pc',
				'label'    => '縦方向の位置【PC】',
				'section'  => 'jinr__main_visual_section',
				'type'     => 'range',
				'max'      => 100,
				'min'      => 30,
			)
		)
	);

	$wp_customize->add_setting('jinr__movie_contents_position_horizon_pc', array('default' => 50));
	$wp_customize->add_control(
		new Jinr_Range_Control(
			$wp_customize,
			'jinr__movie_contents_position_horizon_pc',
			array(
				'settings' => 'jinr__movie_contents_position_horizon_pc',
				'label'    => '横方向の位置【PC】',
				'section'  => 'jinr__main_visual_section',
				'type'     => 'range',
				'max'      => 100,
				'min'      => 0,
			)
		)
	);

	$wp_customize->add_setting('jinr__movie_contents_position_vertical_sp', array('default' => 50));
	$wp_customize->add_control(
		new Jinr_Range_Control(
			$wp_customize,
			'jinr__movie_contents_position_vertical_sp',
			array(
				'settings' => 'jinr__movie_contents_position_vertical_sp',
				'label'    => '縦方向の位置【スマホ】',
				'section'  => 'jinr__main_visual_section',
				'type'     => 'range',
				'max'      => 100,
				'min'      => 30,
			)
		)
	);

	$wp_customize->add_setting('jinr__movie_contents_position_horizon_sp', array('default' => 50));
	$wp_customize->add_control(
		new Jinr_Range_Control(
			$wp_customize,
			'jinr__movie_contents_position_horizon_sp',
			array(
				'settings' => 'jinr__movie_contents_position_horizon_sp',
				'label'    => '横方向の位置【スマホ】',
				'section'  => 'jinr__main_visual_section',
				'type'     => 'range',
				'max'      => 100,
				'min'      => 0,
			)
		)
	);
}
add_action('customize_register', 'jinr__add_section_main_visual');



function jinr__main_visual_type()
{
	return get_theme_mod('jinr__main_visual_type', 'type03-stillimage');
}
function jinr__slider_url1()
{
	return get_theme_mod('jinr__slider_url1', '');
}
function jinr__slider_url2()
{
	return get_theme_mod('jinr__slider_url2', '');
}
function jinr__slider_url3()
{
	return get_theme_mod('jinr__slider_url3', '');
}
function jinr__slider_url4()
{
	return get_theme_mod('jinr__slider_url4', '');
}
function jinr__slider_url5()
{
	return get_theme_mod('jinr__slider_url5', '');
}
function jinr__slider_url6()
{
	return get_theme_mod('jinr__slider_url6', '');
}
function jinr__slider_text_color_select()
{
	return get_theme_mod('jinr__slider_text_color_select', 'd--slider-title-color');
}
function jinr__slider_link_text()
{
	return get_theme_mod('jinr__slider_link_text', 'Read more');
}
function jinr__slider_animation_speed()
{
	return get_theme_mod('jinr__slider_animation_speed', 'd--slider-animation-normal');
}
function jinr__slider_type_select()
{
	return get_theme_mod('jinr__slider_type_select', 'd--slider-type-choice');
}
function jinr__slider_design_select()
{
	return get_theme_mod('jinr__slider_design_select', 'd--slider-design1');
}


function jinr__imageslider_image_url1()
{
	return get_theme_mod('jinr__imageslider_image_url1', '');
}
function jinr__imageslider_image_url2()
{
	return get_theme_mod('jinr__imageslider_image_url2', '');
}
function jinr__imageslider_image_url3()
{
	return get_theme_mod('jinr__imageslider_image_url3', '');
}
function jinr__imageslider_image_url4()
{
	return get_theme_mod('jinr__imageslider_image_url4', '');
}
function jinr__imageslider_image_url5()
{
	return get_theme_mod('jinr__imageslider_image_url5', '');
}
function jinr__imageslider_image_url6()
{
	return get_theme_mod('jinr__imageslider_image_url6', '');
}
function jinr__imageslider_image_link1()
{
	return get_theme_mod('jinr__imageslider_image_link1', '');
}
function jinr__imageslider_image_link2()
{
	return get_theme_mod('jinr__imageslider_image_link2', '');
}
function jinr__imageslider_image_link3()
{
	return get_theme_mod('jinr__imageslider_image_link3', '');
}
function jinr__imageslider_image_link4()
{
	return get_theme_mod('jinr__imageslider_image_link4', '');
}
function jinr__imageslider_image_link5()
{
	return get_theme_mod('jinr__imageslider_image_link5', '');
}
function jinr__imageslider_image_link6()
{
	return get_theme_mod('jinr__imageslider_image_link6', '');
}
function jinr__imageslider_animation_select()
{
	return get_theme_mod('jinr__imageslider_animation_select', 'd--imageslider-animation-slidein');
}
function jinr__imageslider_animation_speed()
{
	return get_theme_mod('jinr__imageslider_animation_speed', 'd--imageslider-animation-normal');
}
function jinr__imageslider_autoplay()
{
	return get_theme_mod('jinr__imageslider_autoplay', 'd--imageslider-autoplay-on');
}


function jinr__stillimage_url()
{
	return get_theme_mod('jinr__stillimage_url', get_template_directory_uri() . '/include/customizer/img/jinr-headerimg.png');
}
function jinr__stillimage_url_sp()
{
	return get_theme_mod('jinr__stillimage_url_sp', get_template_directory_uri() . '/include/customizer/img/jinr-headerimg.png');
}
function jinr__stillimage_design()
{
	return get_theme_mod('jinr__stillimage_design', 'd--stillimage-desgin2');
}

function jinr__stillimage_height_size()
{
	return get_theme_mod('jinr__stillimage_height_size', 'd--stillimage-height-size-cover');
}
function jinr__stillimage_height_size_control()
{
	return get_theme_mod('jinr__stillimage_height_size_control', 27);
}
function jinr__stillimage_height_size_number()
{
	return get_theme_mod('jinr__stillimage_height_size_number', 450);
}
function jinr__stillimage_height_size_sp()
{
	return get_theme_mod('jinr__stillimage_height_size_sp', 'd--stillimage-height-size-cover-sp');
}
function jinr__stillimage_height_size_control_sp()
{
	return get_theme_mod('jinr__stillimage_height_size_control_sp', 27);
}
function jinr__stillimage_height_size_number_sp()
{
	return get_theme_mod('jinr__stillimage_height_size_number_sp', 680);
}

function jinr__stillimage_display()
{
	return get_theme_mod('jinr__stillimage_display', false);
}
function jinr__stillimage_copy_display()
{
	return get_theme_mod('jinr__stillimage_copy_display', 'on');
}
function jinr__stillimage_button_display()
{
	return get_theme_mod('jinr__stillimage_button_display', 'on');
}
function jinr__stillimage_maincopy()
{
	return get_theme_mod('jinr__stillimage_maincopy', 'すべての人に <br>直感的なサイトデザインを');
}
function jinr__stillimage_subcopy()
{
	return get_theme_mod('jinr__stillimage_subcopy', 'WordPressテーマ『JIN：R』');
}
function jinr__stillimage_maincopy_color()
{
	return get_theme_mod('jinr__stillimage_maincopy_color', '#22327a');
}
function jinr__stillimage_copy_size_number()
{
	return get_theme_mod('jinr__stillimage_copy_size_number', 10);
}
function jinr__stillimage_button_text()
{
	return get_theme_mod('jinr__stillimage_button_text', '詳細をみる');
}
function jinr__stillimage_button_link()
{
	return get_theme_mod('jinr__stillimage_button_link', '');
}
function jinr__stillimage_button_design_select()
{
	return get_theme_mod('jinr__stillimage_button_design_select', '1');
}
function jinr__stillimage_maincopy_text_deco_select()
{
	return get_theme_mod('jinr__stillimage_maincopy_text_deco_select', 'd--stillimage-text-shadow-m');
}
function jinr__stillimage_overlay_design()
{
	return get_theme_mod('jinr__stillimage_overlay_design', 'd--stillimage-overlay-none');
}
function jinr__stillimage_overlay_color_type()
{
	return get_theme_mod('jinr__stillimage_overlay_color_type', 'simplecolor');
}
function jinr__stillimage_overlay_color()
{
	return get_theme_mod('jinr__stillimage_overlay_color', "#fff");
}
function jinr__stillimage_overlay_gradation_select()
{
	return get_theme_mod('jinr__stillimage_overlay_gradation_select', "d--jinr-gradation1");
}
function jinr__stillimage_overlay_transparent()
{
	return get_theme_mod('jinr__stillimage_overlay_transparent', 25);
}
function jinr__stillimage_contents_position_vertical_pc()
{
	return get_theme_mod('jinr__stillimage_contents_position_vertical_pc', 50);
}
function jinr__stillimage_contents_position_horizon_pc()
{
	return get_theme_mod('jinr__stillimage_contents_position_horizon_pc', 50);
}
function jinr__stillimage_contents_position_vertical_sp()
{
	return get_theme_mod('jinr__stillimage_contents_position_vertical_sp', 50);
}
function jinr__stillimage_contents_position_horizon_sp()
{
	return get_theme_mod('jinr__stillimage_contents_position_horizon_sp', 50);
}
function jinr__stillimage_contents_align_pc()
{
	return get_theme_mod('jinr__stillimage_contents_align_pc', 'center');
}
function jinr__stillimage_link()
{
	return get_theme_mod('jinr__stillimage_link', '');
}


function jinr__movie_design()
{
	return get_theme_mod('jinr__movie_design', 'd--movie-desgin1');
}
function jinr__movie_url()
{
	return get_theme_mod('jinr__movie_url', '');
}
function jinr__movie_height_sp_select()
{
	return get_theme_mod('jinr__movie_height_sp_select', 'auto');
}
function jinr__movie_height_sp()
{
	return get_theme_mod('jinr__movie_height_sp', 680);
}

function jinr__movie_autoplay()
{
	return get_theme_mod('jinr__movie_autoplay', 'd--movie-autoplay-off');
}
function jinr__movie_loop()
{
	return get_theme_mod('jinr__movie_loop', 'd--movie-loop-off');
}
function jinr__movie_maincopy()
{
	return get_theme_mod('jinr__movie_maincopy', 'すべての人に <br>直感的なサイトデザインを');
}
function jinr__movie_subcopy()
{
	return get_theme_mod('jinr__movie_subcopy', 'WordPressテーマ『JIN：R』');
}
function jinr__movie_maincopy_color()
{
	return get_theme_mod('jinr__movie_maincopy_color', '#22327a');
}
function jinr__movie_copy_size_number()
{
	return get_theme_mod('jinr__movie_copy_size_number', 10);
}
function jinr__movie_button_text()
{
	return get_theme_mod('jinr__movie_button_text', '詳細をみる');
}
function jinr__movie_button_link()
{
	return get_theme_mod('jinr__movie_button_link', '');
}
function jinr__movie_button_design_select()
{
	return get_theme_mod('jinr__movie_button_design_select', '1');
}
function jinr__movie_maincopy_text_deco_select()
{
	return get_theme_mod('jinr__movie_maincopy_text_deco_select', 'd--movie-text-shadow-m');
}
function jinr__movie_contents_position_vertical_pc()
{
	return get_theme_mod('jinr__movie_contents_position_vertical_pc', 50);
}
function jinr__movie_contents_position_horizon_pc()
{
	return get_theme_mod('jinr__movie_contents_position_horizon_pc', 50);
}
function jinr__movie_contents_position_vertical_sp()
{
	return get_theme_mod('jinr__movie_contents_position_vertical_sp', 50);
}
function jinr__movie_contents_position_horizon_sp()
{
	return get_theme_mod('jinr__movie_contents_position_horizon_sp', 50);
}
function jinr__movie_contents_align_pc()
{
	return get_theme_mod('jinr__movie_contents_align_pc', 'center');
}
function jinr__movie_copy_display()
{
	return get_theme_mod('jinr__movie_copy_display', 'on');
}
function jinr__movie_button_display()
{
	return get_theme_mod('jinr__movie_button_display', 'on');
}
