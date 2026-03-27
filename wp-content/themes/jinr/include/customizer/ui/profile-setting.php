<?php
/*プロフィール*/
function jinr__add_section_profile($wp_customize)
{

	$query['autofocus[section]'] = 'jinr__sns_setting_section';
	$section_link = add_query_arg($query, admin_url('customize.php'));

	$wp_customize->add_section(
		'jinr__profile_section',
		array(
			'title'    => 'プロフィール登録',
			'priority' => 12,
		)
	);

	$wp_customize->add_setting(
		'jinr__profile_image_url',
		array(
			'default' => get_template_directory_uri() . '/lib/img/image_setting.png',
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'jinr__profile_image_url',
			array(
				'label'    => __('プロフィール画像'),
				'section'  => 'jinr__profile_section',
				'settings' => 'jinr__profile_image_url',
				'description' => '150px x 150px 以上の画像に対応',
			)
		)
	);

	$wp_customize->add_setting(
		'jinr__profile_name',
		array(
			'default' => '',
		)
	);
	$wp_customize->add_control(
		'jinr__profile_name',
		array(
			'label'    => 'プロフィール名',
			'section'  => 'jinr__profile_section',
			'settings' => 'jinr__profile_name',
			'type'     => 'text',
		)
	);

	$wp_customize->add_setting(
		'jinr__profile_job',
		array(
			'default' => '',
		)
	);
	$wp_customize->add_control(
		'jinr__profile_job',
		array(
			'label'    => '肩書',
			'section'  => 'jinr__profile_section',
			'settings' => 'jinr__profile_job',
			'type'     => 'text',
		)
	);

	$wp_customize->add_setting(
		'jinr__profile_introduction',
		array(
			'default' => '',
		)
	);
	$wp_customize->add_control(
		'jinr__profile_introduction',
		array(
			'label'    => 'プロフィール紹介文',
			'section'  => 'jinr__profile_section',
			'settings' => 'jinr__profile_introduction',
			'type'     => 'textarea',
		)
	);

	$wp_customize->add_setting(
		'jinr__profile_button_link',
		array(
			'default' => '',
		)
	);
	$wp_customize->add_control(
		'jinr__profile_button_link',
		array(
			'label'    => 'プロフィールページのURL',
			'section'  => 'jinr__profile_section',
			'settings' => 'jinr__profile_button_link',
			'type'     => 'text',
		)
	);

	$wp_customize->add_setting(
		'jinr__profile_label_text',
		array(
			'default' => 'ABOUT ME',
		)
	);
	$wp_customize->add_control(
		'jinr__profile_label_text',
		array(
			'label'    => 'ラベルテキスト',
			'section'  => 'jinr__profile_section',
			'settings' => 'jinr__profile_label_text',
			'type'     => 'text',
		)
	);

	$wp_customize->add_setting(
		'jinr__profile_parts_display'
	);
	$wp_customize->add_control(
		new Jinr_CheckBox_Control(
			$wp_customize,
			'jinr__profile_parts_display',
			array(
				'settings' => 'jinr__profile_parts_display',
				'label'    => '表示エリアの設定',
				'section'  => 'jinr__profile_section',
				'type'     => 'input',
			)
		)
	);

	$wp_customize->add_setting(
		'jinr__profile_display_postbottom',
		array(
			'default' => true,
		)
	);
	$wp_customize->add_control(
		new Jinr_CheckBox_Control(
			$wp_customize,
			'jinr__profile_display_postbottom',
			array(
				'settings' => 'jinr__profile_display_postbottom',
				'label'    => '記事下',
				'section'  => 'jinr__profile_section',
				'type'     => 'checkbox',
			)
		)
	);
}
add_action('customize_register', 'jinr__add_section_profile');


function jinr__profile_image_url()
{
	return get_theme_mod('jinr__profile_image_url', get_template_directory_uri() . '/lib/img/image_setting.png');
}
function jinr__profile_name()
{
	return get_theme_mod('jinr__profile_name', '');
}
function jinr__profile_job()
{
	return get_theme_mod('jinr__profile_job', '');
}
function jinr__profile_introduction()
{
	return get_theme_mod('jinr__profile_introduction', '');
}
function jinr__profile_button_link()
{
	return get_theme_mod('jinr__profile_button_link', '');
}
function jinr__profile_label_text()
{
	return get_theme_mod('jinr__profile_label_text', 'ABOUT ME');
}
function jinr__profile_display_postbottom()
{
	return get_theme_mod('jinr__profile_display_postbottom', true);
}
