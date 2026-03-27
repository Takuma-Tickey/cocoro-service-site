<?php

/*その他設定*/
function jinr__add_section_others_setting($wp_customize)
{
	$wp_customize->add_section(
		'jinr__others_setting_section',
		array(
			'title'    => __jinr('その他の設定'),
			'priority' => 17,
		)
	);


	$wp_customize->add_setting('jinr__others_setting_section');
	$wp_customize->add_control(
		new Jinr_Base_Control(
			$wp_customize,
			'jinr__others_setting_section',
			array(
				'settings'    => 'jinr__others_setting_section',
				'label'       => '外部読み込み',
				'section'     => 'jinr__others_setting_section',
				'type'        => 'hidden',
			)
		)
	);
	$wp_customize->add_setting('jinr__external_reading_kaereba', array(
		'default' => false,
	));
	$wp_customize->add_control(
		new Jinr_CheckBox_Control(
			$wp_customize,
			'jinr__external_reading_kaereba',
			array(
				'settings' => 'jinr__external_reading_kaereba',
				'label'    => 'カエレバヨメレバデザインを読み込む',
				'section'  => 'jinr__others_setting_section',
				'type'     => 'checkbox',
			)
		)
	);
	$wp_customize->add_setting('jinr__external_reading_appreach', array(
		'default' => false,
	));
	$wp_customize->add_control(
		new Jinr_CheckBox_Control(
			$wp_customize,
			'jinr__external_reading_appreach',
			array(
				'settings' => 'jinr__external_reading_appreach',
				'label'    => 'アプリーチデザインを読み込む',
				'section'  => 'jinr__others_setting_section',
				'type'     => 'checkbox',
			)
		)
	);

	$wp_customize->add_setting('jinr__speedup_settings');
	$wp_customize->add_control(
		new Jinr_Base_Control(
			$wp_customize,
			'jinr__speedup_settings',
			array(
				'settings'    => 'jinr__speedup_settings',
				'label'       => '高速化',
				'section'     => 'jinr__others_setting_section',
				'type'        => 'hidden',
			)
		)
	);
	$wp_customize->add_setting('jinr__reading_wpemoji', array(
		'default' => false,
	));
	$wp_customize->add_control(
		new Jinr_CheckBox_Control(
			$wp_customize,
			'jinr__reading_wpemoji',
			array(
				'settings' => 'jinr__reading_wpemoji',
				'label'    => '絵文字ファイルを読み込まない',
				'section'  => 'jinr__others_setting_section',
				'type'     => 'checkbox',
			)
		)
	);

	$wp_customize->add_setting('jinr__noimage_reading_settings');
	$wp_customize->add_control(
		new Jinr_Base_Control(
			$wp_customize,
			'jinr__noimage_reading_settings',
			array(
				'settings'    => 'jinr__noimage_reading_settings',
				'label'       => 'Noimage画像設定',
				'section'     => 'jinr__others_setting_section',
				'type'        => 'hidden',
			)
		)
	);

	$wp_customize->add_setting('jinr__noimage_url', array(
		'default' => get_template_directory_uri() . '/lib/img/noimage.png',
	));
	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'jinr__noimage_url',
			array(
				'mime_type'   => 'image',
				'label'       => '',
				'section'     => 'jinr__others_setting_section',
				'settings'    => 'jinr__noimage_url',
			)
		)
	);





	$wp_customize->add_setting('jinr__ex_settings');
	$wp_customize->add_control(
		new Jinr_Base_Control(
			$wp_customize,
			'jinr__ex_settings',
			array(
				'settings'    => 'jinr__ex_settings',
				'label'       => 'その他',
				'section'     => 'jinr__others_setting_section',
				'type'        => 'hidden',
			)
		)
	);
	$wp_customize->add_setting('jinr__reading_jsonld', array(
		'default' => false,
	));
	$wp_customize->add_control(
		new Jinr_CheckBox_Control(
			$wp_customize,
			'jinr__reading_jsonld',
			array(
				'settings' => 'jinr__reading_jsonld',
				'label'    => 'テーマ内のJSON-LDを読み込まない',
				'section'  => 'jinr__others_setting_section',
				'type'     => 'checkbox',
			)
		)
	);

	$wp_customize->add_setting('jinr__add_class', array(
		'default' => false,
	));
	$wp_customize->add_control(
		new Jinr_CheckBox_Control(
			$wp_customize,
			'jinr__add_class',
			array(
				'settings' => 'jinr__add_class',
				'label'    => '見出しタグとリストタグにテーマ独自のclassを付与',
				'section'  => 'jinr__others_setting_section',
				'type'     => 'checkbox',
			)
		)
	);

	$wp_customize->add_setting('jinr__thumbnail_original_used', array(
		'default' => false,
	));
	$wp_customize->add_control(
		new Jinr_CheckBox_Control(
			$wp_customize,
			'jinr__thumbnail_original_used',
			array(
				'settings' => 'jinr__thumbnail_original_used',
				'label'    => 'アイキャッチ画像をオリジナルサイズで利用する',
				'section'  => 'jinr__others_setting_section',
				'type'     => 'checkbox',
			)
		)
	);
}
add_action('customize_register', 'jinr__add_section_others_setting');


function jinr__external_reading_kaereba()
{
	return get_theme_mod('jinr__external_reading_kaereba', false);
}
function jinr__external_reading_appreach()
{
	return get_theme_mod('jinr__external_reading_appreach', false);
}
function jinr__reading_wpemoji()
{
	return get_theme_mod('jinr__reading_wpemoji', false);
}
function jinr__noimage_url()
{
	return esc_url(get_theme_mod('jinr__noimage_url', get_template_directory_uri() . '/lib/img/noimage.png'));
}

function jinr__reading_jsonld()
{
	return get_theme_mod('jinr__reading_jsonld', false);
}
function jinr__add_class()
{
	return get_theme_mod('jinr__add_class', false);
}
function jinr__thumbnail_original_used()
{
	return get_theme_mod('jinr__thumbnail_original_used', false);
}
