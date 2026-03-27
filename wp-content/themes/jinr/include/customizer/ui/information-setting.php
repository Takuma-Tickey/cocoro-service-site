<?php
/*インフォメーションバー*/
function jinr__add_section_information($wp_customize)
{
	$query['autofocus[section]'] = 'jinr__gradation_setting_tab';
	$section_link = add_query_arg($query, admin_url('customize.php'));

	$query2['autofocus[panel]'] = 'jinr__button_design_panel';
	$panel_link = add_query_arg($query2, admin_url('customize.php'));

	$wp_customize->add_section(
		'jinr__information_section',
		array(
			'title'    => 'インフォメーション設定',
			'priority' => 11,
		)
	);

	$wp_customize->add_setting(
		'jinr__info_used',
		array(
			'default' => 'off',
		)
	);
	$wp_customize->add_control(
		new Jinr_Base_Control(
			$wp_customize,
			'jinr__info_used',
			array(
				'settings' => 'jinr__info_used',
				'label'    => 'インフォメーションバーの表示',
				'section'  => 'jinr__information_section',
				'type'     => 'radio',
				'choices'  => array(
					'on' => '利用する',
					'off' => '利用しない',
				),
			)
		)
	);


	$wp_customize->add_setting(
		'jinr__info_type',
		array(
			'default' => 'd--information-type-textonlywithlink',
		)
	);
	$wp_customize->add_control(
		new Jinr_Base_Control(
			$wp_customize,
			'jinr__info_type',
			array(
				'settings' => 'jinr__info_type',
				'label'    => 'タイプ選択',
				'section'  => 'jinr__information_section',
				'type'     => 'select',
				'choices'  => array(
					'd--information-type-textonlywithlink' => 'テキストのみ（帯がリンク）',
					'd--information-type-textplusbutton' => 'テキストとボタン',
				),
			)
		)
	);

	$wp_customize->add_setting(
		'jinr__info_text1',
		array(
			'default' => 'テキストを入力',
		)
	);
	$wp_customize->add_control(
		'jinr__info_text1',
		array(
			'label'    => 'テキスト１',
			'section'  => 'jinr__information_section',
			'settings' => 'jinr__info_text1',
			'type'     => 'text',
		)
	);

	$wp_customize->add_setting(
		'jinr__info_text1_size',
		array(
			'default' => 'd--information-text-small',
		)
	);
	$wp_customize->add_control(
		new Jinr_Base_Control(
			$wp_customize,
			'jinr__info_text1_size',
			array(
				'settings' => 'jinr__info_text1_size',
				'label'    => 'テキスト１の文字サイズ',
				'section'  => 'jinr__information_section',
				'type'     => 'radio',
				'choices'  => array(
					'd--information-text-small' => '小',
					'd--information-text-large' => '大',
					'd--information-text-largewithunderline' => '大（下線付)',
				),
			)
		)
	);

	$wp_customize->add_setting(
		'jinr__info_text2',
		array(
			'default' => '',
		)
	);
	$wp_customize->add_control(
		'jinr__info_text2',
		array(
			'label'    => 'テキスト２',
			'section'  => 'jinr__information_section',
			'settings' => 'jinr__info_text2',
			'type'     => 'text',
		)
	);

	$wp_customize->add_setting(
		'jinr__info_text2_size',
		array(
			'default' => 'd--information-text-small',
		)
	);
	$wp_customize->add_control(
		new Jinr_Base_Control(
			$wp_customize,
			'jinr__info_text2_size',
			array(
				'settings' => 'jinr__info_text2_size',
				'label'    => 'テキスト２の文字サイズ',
				'section'  => 'jinr__information_section',
				'type'     => 'radio',
				'choices'  => array(
					'd--information-text-small' => '小',
					'd--information-text-large' => '大',
					'd--information-text-largewithunderline' => '大（下線付)',
				),
			)
		)
	);

	$wp_customize->add_setting(
		'jinr__info_button_text',
		array(
			'default' => '詳しくはこちら',
		)
	);
	$wp_customize->add_control(
		'jinr__info_button_text',
		array(
			'label'    => 'ボタンテキスト',
			'section'  => 'jinr__information_section',
			'settings' => 'jinr__info_button_text',
			'type'     => 'text',
		)
	);

	$wp_customize->add_setting(
		'jinr__info_button_design_select',
		array(
			'default' => '1',
		)
	);
	$wp_customize->add_control(
		new Jinr_Base_Control(
			$wp_customize,
			'jinr__info_button_design_select',
			array(
				'settings'    => 'jinr__info_button_design_select',
				'label'       => 'ボタン選択',
				'section'     => 'jinr__information_section',
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
	$wp_customize->add_setting('jinr__info_extra_sub2');
	$wp_customize->add_control(
		new Jinr_CheckBox_Control(
			$wp_customize,
			'jinr__info_extra_sub2',
			array(
				'settings' => 'jinr__info_extra_sub2',
				'section'  => 'jinr__information_section',
				'type'     => 'input',
				'description' => '<a href="' . esc_url($panel_link) . '">ボタンデザインを編集する</a>',
			)
		)
	);

	$wp_customize->add_setting(
		'jinr__info_url',
		array(
			'default' => '',
		)
	);
	$wp_customize->add_control(
		'jinr__info_url',
		array(
			'label'    => 'リンク先URL',
			'section'  => 'jinr__information_section',
			'settings' => 'jinr__info_url',
			'type'     => 'text',
		)
	);

	/*
	$wp_customize->add_setting(
		'jinr__info_image_url',
		array(
			'default' => get_template_directory_uri() . '/lib/img/image_setting.png',
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'jinr__info_image_url',
			array(
				'label'    => __('画像'),
				'section'  => 'jinr__information_section',
				'settings' => 'jinr__info_image_url',
				'description' => '150px x 150px 以上の画像に対応',
			)
		)
	);
	*/

	$wp_customize->add_setting('jinr__info_textcolor', array('default' => '#ffffff'));
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'jinr__info_textcolor',
			array(
				'label'    => '文字色',
				'section'  => 'jinr__information_section',
				'settings' => 'jinr__info_textcolor',
			)
		)
	);

	$wp_customize->add_setting('jinr__info_bgcolor_type', array('default' => 'simplecolor'));
	$wp_customize->add_control(
		new Jinr_Base_Control(
			$wp_customize,
			'jinr__info_bgcolor_type',
			array(
				'settings' => 'jinr__info_bgcolor_type',
				'label'    => '背景色',
				'section'  => 'jinr__information_section',
				'type'     => 'radio',
				'choices'  => array(
					'simplecolor' => '単色',
					'gradation' => 'グラデーション',
				),
			)
		)
	);
	$wp_customize->add_setting('jinr__info_bgcolor', array('default' => '#407FED'));
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'jinr__info_bgcolor',
			array(
				'section'  => 'jinr__information_section',
				'settings' => 'jinr__info_bgcolor',
			)
		)
	);
	$wp_customize->add_setting('jinr__info_bg_gradation_select', array('default' => 'd--jinr-gradation1'));
	$wp_customize->add_control(
		new Jinr_Base_Control(
			$wp_customize,
			'jinr__info_bg_gradation_select',
			array(
				'settings' => 'jinr__info_bg_gradation_select',
				'section'  => 'jinr__information_section',
				'type'     => 'select',
				'choices'  => array(
					'd--jinr-gradation1' => 'グラデーション１',
					'd--jinr-gradation2' => 'グラデーション２',
					'd--jinr-gradation3' => 'グラデーション３',
				),
			)
		)
	);

	$wp_customize->add_setting('jinr__info_extra_sub1');
	$wp_customize->add_control(
		new Jinr_CheckBox_Control(
			$wp_customize,
			'jinr__info_extra_sub1',
			array(
				'settings' => 'jinr__info_extra_sub1',
				'section'  => 'jinr__information_section',
				'type'     => 'input',
				'description' => '<a href="' . esc_url($section_link) . '">グラデーション登録</a>から色を編集できます',
			)
		)
	);

	$wp_customize->add_setting(
		'jinr__info_display_position',
		array(
			'default' => 'd--information-position-top',
		)
	);
	$wp_customize->add_control(
		new Jinr_Base_Control(
			$wp_customize,
			'jinr__info_display_position',
			array(
				'settings' => 'jinr__info_display_position',
				'label'    => '表示位置',
				'section'  => 'jinr__information_section',
				'type'     => 'radio',
				'choices'  => array(
					'd--information-position-top' => 'ヘッダーの上',
					'd--information-position-bottom' => 'ヘッダーの下',
				),
			)
		)
	);


	$wp_customize->add_setting(
		'jinr__info_display'
	);
	$wp_customize->add_control(
		new Jinr_CheckBox_Control(
			$wp_customize,
			'jinr__info_display',
			array(
				'settings' => 'jinr__info_display',
				'label'    => '表示ページ設定',
				'section'  => 'jinr__information_section',
				'type'     => 'input',
			)
		)
	);

	$wp_customize->add_setting(
		'jinr__info_display_frontpage',
		array(
			'default' => true,
		)
	);
	$wp_customize->add_control(
		new Jinr_CheckBox_Control(
			$wp_customize,
			'jinr__info_display_frontpage',
			array(
				'settings' => 'jinr__info_display_frontpage',
				'label'    => 'TOPページで表示する',
				'section'  => 'jinr__information_section',
				'type'     => 'checkbox',
			)
		)
	);

	$wp_customize->add_setting(
		'jinr__info_display_page',
		array(
			'default' => true,
		)
	);
	$wp_customize->add_control(
		new Jinr_CheckBox_Control(
			$wp_customize,
			'jinr__info_display_page',
			array(
				'settings' => 'jinr__info_display_page',
				'label'    => '下層ページで表示する',
				'section'  => 'jinr__information_section',
				'type'     => 'checkbox',
			)
		)
	);

	$wp_customize->add_setting(
		'jinr__info_display_sp',
		array(
			'default' => true,
		)
	);
	$wp_customize->add_control(
		new Jinr_CheckBox_Control(
			$wp_customize,
			'jinr__info_display_sp',
			array(
				'settings' => 'jinr__info_display_sp',
				'label'    => 'スマホで表示する',
				'section'  => 'jinr__information_section',
				'type'     => 'checkbox',
			)
		)
	);

	$wp_customize->add_setting(
		'jinr__info_display_none',
		array(
			'default' => '',
		)
	);
	$wp_customize->add_control(
		'jinr__info_display_none',
		array(
			'label'    => '非表示にしたいページID',
			'section'  => 'jinr__information_section',
			'settings' => 'jinr__info_display_none',
			'type'     => 'text',
			'description'    => '【記入例】3,12,36',
		)
	);
}
add_action('customize_register', 'jinr__add_section_information');


function jinr__info_image_url()
{
	return get_theme_mod('jinr__info_image_url', get_template_directory_uri() . '/lib/img/image_setting.png');
}
function jinr__info_url()
{
	return get_theme_mod('jinr__info_url', '');
}
function jinr__info_used()
{
	return get_theme_mod('jinr__info_used', 'off');
}
function jinr__info_text1()
{
	return get_theme_mod('jinr__info_text1', 'テキストを入力');
}
function jinr__info_text2()
{
	return get_theme_mod('jinr__info_text2', '');
}
function jinr__info_button_text()
{
	return get_theme_mod('jinr__info_button_text', '詳しくはこちら');
}
function jinr__info_type()
{
	return get_theme_mod('jinr__info_type', 'd--information-type-textonlywithlink');
}
function jinr__info_text1_size()
{
	return get_theme_mod('jinr__info_text1_size', 'd--information-text-small');
}
function jinr__info_text2_size()
{
	return get_theme_mod('jinr__info_text2_size', 'd--information-text-small');
}
function jinr__info_button_design_select()
{
	return get_theme_mod('jinr__info_button_design_select', '1');
}
function jinr__info_textcolor()
{
	return get_theme_mod('jinr__info_textcolor', '#ffffff');
}
function jinr__info_bgcolor_type()
{
	return get_theme_mod('jinr__info_bgcolor_type', 'simplecolor');
}
function jinr__info_bgcolor()
{
	return get_theme_mod('jinr__info_bgcolor', '#407FED');
}
function jinr__info_bg_gradation_select()
{
	return get_theme_mod('jinr__info_bg_gradation_select', 'd--jinr-gradation1');
}
function jinr__info_display_position()
{
	return get_theme_mod('jinr__info_display_position', 'd--information-position-top');
}
function jinr__info_display_frontpage()
{
	return get_theme_mod('jinr__info_display_frontpage', true);
}
function jinr__info_display_page()
{
	return get_theme_mod('jinr__info_display_page', true);
}
function jinr__info_display_sp()
{
	return get_theme_mod('jinr__info_display_sp', true);
}
function jinr__info_display_none()
{
	return get_theme_mod('jinr__info_display_none', '');
}
