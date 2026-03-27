<?php

/*その他設定*/
function jinr__add_section_thumbnails_setting($wp_customize)
{
	$wp_customize->add_section(
		'jinr__thumbnails_setting_section',
		array(
			'title'    => __jinr('アイキャッチ画像自動生成'),
			'priority' => 11,
		)
	);


	$wp_customize->add_setting('jinr__thumbnails_reading_settings');
	$wp_customize->add_control(
		new Jinr_Base_Control(
			$wp_customize,
			'jinr__thumbnails_reading_settings',
			array(
				'settings'    => 'jinr__thumbnails_reading_settings',
				'label'       => '自動生成する画像の設定',
				'section'     => 'jinr__thumbnails_setting_section',
				'type'        => 'hidden',
			)
		)
	);

	$wp_customize->add_setting('jinr__thumbnails_info', array('default' => '',));
	$wp_customize->add_control(
		new Jinr_Base_Control(
			$wp_customize,
			'jinr__thumbnails_info',
			array(
				'settings' => 'jinr__thumbnails_info',
				'section'  => 'jinr__thumbnails_setting_section',
				'type'     => 'text',
				'description' => '初めての方は<a href="https://jinr.jp/manual/generate-thumbnails/" target="_blank">「アイキャッチ自動生成の使い方」</a>をご確認ください。',
			)
		)
	);

	$wp_customize->add_setting('jinr__thumbnails_design_pattern', array('default' => 'bg_pattern'));
	$wp_customize->add_control(
		new Jinr_Base_Control(
			$wp_customize,
			'jinr__thumbnails_design_pattern',
			array(
				'settings' => 'jinr__thumbnails_design_pattern',
				'label'    => 'デザインパターン',
				'section'  => 'jinr__thumbnails_setting_section',
				'type'     => 'radio',
				'choices'  => array(
					'bg_pattern' => '背景色',
					'image_pattern' => 'オリジナル背景画像',
				),
			)
		)
	);
	$wp_customize->add_setting('jinr__thumbnails_bg_color', array('default' => 'simple'));
	$wp_customize->add_control(
		new Jinr_Base_Control(
			$wp_customize,
			'jinr__thumbnails_bg_color',
			array(
				'settings' => 'jinr__thumbnails_bg_color',
				'label'    => '背景色設定',
				'section'  => 'jinr__thumbnails_setting_section',
				'type'     => 'radio',
				'choices'  => array(
					'simple' => '単色',
					'gradation' => 'グラデーション',
				),
			)
		)
	);
	$wp_customize->add_setting('jinr__thumbnails_simple_color', array('default' => '#407FED'));
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'jinr__thumbnails_simple_color',
			array(
				'label'    => '',
				'section'  => 'jinr__thumbnails_setting_section',
				'settings' => 'jinr__thumbnails_simple_color',
				'description' => '',
			)
		)
	);

	$wp_customize->add_setting('jinr__thumbnails_bg_gradation_select', array('default' => 'd--jinr-gradation1'));
	$wp_customize->add_control(
		new Jinr_Base_Control(
			$wp_customize,
			'jinr__thumbnails_bg_gradation_select',
			array(
				'label'    => '',
				'settings' => 'jinr__thumbnails_bg_gradation_select',
				'section'  => 'jinr__thumbnails_setting_section',
				'type'     => 'select',
				'choices'  => array(
					'd--jinr-gradation1' => 'グラデーション１',
					'd--jinr-gradation2' => 'グラデーション２',
					'd--jinr-gradation3' => 'グラデーション３',
				),
			)
		)
	);

	$wp_customize->add_setting(
		'jinr__thumbnails_bg_image_url',
		array(
			'default' => '',
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'jinr__thumbnails_bg_image_url',
			array(
				'label'    => __('背景画像アップロード'),
				'section'  => 'jinr__thumbnails_setting_section',
				'settings' => 'jinr__thumbnails_bg_image_url',
			)
		)
	);

	$wp_customize->add_setting('jinr__thumbnails_text_layout', array('default' => 'left'));
	$wp_customize->add_control(
		new Jinr_Base_Control(
			$wp_customize,
			'jinr__thumbnails_text_layout',
			array(
				'settings' => 'jinr__thumbnails_text_layout',
				'label'    => 'テキストの位置調整',
				'section'  => 'jinr__thumbnails_setting_section',
				'type'     => 'radio',
				'choices'  => array(
					'left' => '左寄せ',
					'center' => '中央よせ',
				),
			)
		)
	);
	$wp_customize->add_setting('jinr__thumbnails_text_color', array('default' => jinr__text_color()));
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'jinr__thumbnails_text_color',
			array(
				'label'    => 'テキストカラー',
				'section'  => 'jinr__thumbnails_setting_section',
				'settings' => 'jinr__thumbnails_text_color',
				'description' => '',
			)
		)
	);

	$wp_customize->add_setting('jinr__thumbanil_profile_image_switch', array('default' => 'on'));
	$wp_customize->add_control(
		new Jinr_Base_Control(
			$wp_customize,
			'jinr__thumbanil_profile_image_switch',
			array(
				'settings'    => 'jinr__thumbanil_profile_image_switch',
				'label'       => '著者プロフィールを表示する',
				'section'     => 'jinr__thumbnails_setting_section',
				'type'        => 'radio',
				'choices'     => array(
					'off' => 'OFF',
					'on'   => 'ON',
				),
			)
		)
	);
}
add_action('customize_register', 'jinr__add_section_thumbnails_setting');

function jinr__thumbnails_design_pattern()
{
	return get_theme_mod('jinr__thumbnails_design_pattern', 'bg_pattern');
}
function jinr__thumbnails_text_layout()
{
	return get_theme_mod('jinr__thumbnails_text_layout', 'left');
}

function jinr__thumbnails_bg_color()
{
	return get_theme_mod('jinr__thumbnails_bg_color', 'simple');
}

function jinr__thumbnails_simple_color()
{
	return get_theme_mod('jinr__thumbnails_simple_color', '#407FED');
}

function jinr__thumbnails_text_color()
{
	return get_theme_mod('jinr__thumbnails_text_color', jinr__text_color());
}

function jinr__thumbnails_bg_gradation_select()
{
	return get_theme_mod('jinr__thumbnails_bg_gradation_select', 'd--jinr-gradation1');
}

function jinr__thumbnails_bg_image_url()
{
	return get_theme_mod('jinr__thumbnails_bg_image_url', get_template_directory_uri() . '/lib/img/image_setting.png');
}
function jinr__thumbanil_profile_image_switch()
{
	return get_theme_mod('jinr__thumbanil_profile_image_switch', 'on');
}
