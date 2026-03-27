<?php
/*サイト基本設定*/

function jinr__add_section_site_setting( $wp_customize ) {

	$wp_customize->add_section(
		'title_tagline',
		array(
			'title'    => '基本設定',
			'priority' => 1,
		)
	);

	$wp_customize->add_setting(
		'site_setting_label1',
		array(
			'default' => '',
		)
	);
	$wp_customize->add_control(
		new Jinr_Base_Control(
			$wp_customize,
			'site_setting_label1',
			array(
				'settings' => 'site_setting_label1',
				'section'  => 'title_tagline',
				'type'     => 'text',
				'description' => '初めての方は<a href="https://jinr.jp/manual/all-setting" target="_blank">「JIN:Rの初期設定」</a>をまずご確認ください。',
			)
		)
	);

	$wp_customize->add_setting( 'jinr__base_extra_settings1' );
	$wp_customize->add_control(
		new Jinr_Base_Control(
			$wp_customize,
			'jinr__base_extra_settings1',
			array(
				'settings' => 'jinr__base_extra_settings1',
				'label'    => '基本設定',
				'section'  => 'title_tagline',
				'type'     => 'hidden',
			)
		)
	);

	$wp_customize->get_setting(
		'blogname',
		array(
			'title' => 'タイトル',
		)
	);

	$wp_customize->add_control(
		new Jinr_Base_Control(
			$wp_customize,
			'blogname',
			array(
				'label'       => 'サイトタイトル',
				'section'     => 'title_tagline',
				'description' => '検索エンジン上で表示されるサイトタイトル',
				'type'        => 'text',
			)
		)
	);

	$wp_customize->get_setting(
		'blogdescription',
		array(
			'title' => 'サブタイトル',
		)
	);

	$wp_customize->add_control(
		new Jinr_Base_Control(
			$wp_customize,
			'blogdescription',
			array(
				'label'       => 'サブタイトル',
				'section'     => 'title_tagline',
				'description' => '検索エンジン上でサイトタイトルに後続するサブタイトル（37文字以下を推奨）',
				'type'        => 'text',
			)
		)
	);

	$wp_customize->add_setting( 'jinr__header_subtitle_display', array( 'default' => true ) );
	$wp_customize->add_control(
		new Jinr_CheckBox_Control(
			$wp_customize,
			'jinr__header_subtitle_display',
			array(
				'settings' => 'jinr__header_subtitle_display',
				'label'    => '【PC】サブタイトルを表示',
				'section'  => 'title_tagline',
				'type'     => 'checkbox',
			)
		)
	);
	$wp_customize->add_setting( 'jinr__header_subtitle_display_sp', array( 'default' => false ) );
	$wp_customize->add_control(
		new Jinr_CheckBox_Control(
			$wp_customize,
			'jinr__header_subtitle_display_sp',
			array(
				'settings' => 'jinr__header_subtitle_display_sp',
				'label'    => '【スマホ】サブタイトルを表示',
				'section'  => 'title_tagline',
				'type'     => 'checkbox',
			)
		)
	);

	$wp_customize->add_setting( 'jinr__desc_text' );
	$wp_customize->add_control(
		new Jinr_Base_Control(
			$wp_customize,
			'jinr__desc_text',
			array(
				'label'       => 'ディスクリプション',
				'section'     => 'title_tagline',
				'settings'    => 'jinr__desc_text',
				'type'        => 'textarea',
				'description' => '検索エンジンを利用する人に向けて、サイトの説明（紹介）を書くことができます。一般的に120文字以内で入力することが推奨されています。',
			)
		)
	);

	$wp_customize->add_setting(
		'site_setting_label2',
		array(
			'default' => '',
		)
	);
	$wp_customize->add_control(
		new Jinr_Base_Control(
			$wp_customize,
			'site_setting_label2',
			array(
				'settings' => 'site_setting_label2',
				'section'  => 'title_tagline',
				'type'     => 'text',
				'description' => '各設定内容の反映場所については、<a href="https://jinr.jp/manual/sitetitle/" target="_blank">こちら</a>をご確認ください。',
			)
		)
	);

	$wp_customize->add_setting( 'jinr__base_extra_settings2' );
	$wp_customize->add_control(
		new Jinr_Base_Control(
			$wp_customize,
			'jinr__base_extra_settings2',
			array(
				'settings' => 'jinr__base_extra_settings2',
				'label'    => '詳細設定',
				'section'  => 'title_tagline',
				'type'     => 'hidden',
			)
		)
	);
}
add_action( 'customize_register', 'jinr__add_section_site_setting' );

function jinr__header_subtitle_display() {
	return get_theme_mod( 'jinr__header_subtitle_display', true );
}
function jinr__header_subtitle_display_sp() {
	return get_theme_mod( 'jinr__header_subtitle_display_sp', false );
}