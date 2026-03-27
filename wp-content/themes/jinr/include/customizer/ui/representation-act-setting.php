<?php

/*景品表示法の設定*/
function jinr__add_section_representations_setting($wp_customize)
{
	$wp_customize->add_section(
		'jinr__representation_act_setting_section',
		array(
			'title'    => __jinr('ステマ規制への対応設定'),
			'priority' => 15,
		)
	);
	$wp_customize->add_setting(
		'jinr__representation_pr_display_page'
	);
	$wp_customize->add_control(
		new Jinr_CheckBox_Control(
			$wp_customize,
			'jinr__representation_pr_display_page',
			array(
				'settings' => 'jinr__representation_pr_display_page',
				'label'    => '表示するページ',
				'section'  => 'jinr__representation_act_setting_section',
				'type'     => 'input',
			)
		)
	);
	$wp_customize->add_setting(
		'jinr__representation_display_post',
		array(
			'default' => false,
		)
	);
	$wp_customize->add_control(
		new Jinr_CheckBox_Control(
			$wp_customize,
			'jinr__representation_display_post',
			array(
				'settings' => 'jinr__representation_display_post',
				'label'    => '投稿ページ',
				'section'  => 'jinr__representation_act_setting_section',
				'type'     => 'checkbox',
			)
		)
	);
	$wp_customize->add_setting(
		'jinr__representation_display_page',
		array(
			'default' => false,
		)
	);
	$wp_customize->add_control(
		new Jinr_CheckBox_Control(
			$wp_customize,
			'jinr__representation_display_page',
			array(
				'settings' => 'jinr__representation_display_page',
				'label'    => '固定ページ',
				'section'  => 'jinr__representation_act_setting_section',
				'type'     => 'checkbox',
			)
		)
	);
	$wp_customize->add_setting(
		'jinr__representation_display_custom_category',
		array(
			'default' => false,
		)
	);
	$wp_customize->add_control(
		new Jinr_CheckBox_Control(
			$wp_customize,
			'jinr__representation_display_custom_category',
			array(
				'settings' => 'jinr__representation_display_custom_category',
				'label'    => '記事化されたカテゴリーページ',
				'section'  => 'jinr__representation_act_setting_section',
				'type'     => 'checkbox',
			)
		)
	);


	$wp_customize->add_setting(
		'jinr__representation_display_area'
	);
	$wp_customize->add_control(
		new Jinr_CheckBox_Control(
			$wp_customize,
			'jinr__representation_display_area',
			array(
				'settings' => 'jinr__representation_display_area',
				'label'    => '表示エリアの設定',
				'section'  => 'jinr__representation_act_setting_section',
				'type'     => 'input',

			)
		)
	);

	$wp_customize->add_setting(
		'jinr__representation_display_category_side',
		array(
			'default' => true,
		)
	);
	$wp_customize->add_control(
		new Jinr_CheckBox_Control(
			$wp_customize,
			'jinr__representation_display_category_side',
			array(
				'settings' => 'jinr__representation_display_category_side',
				'label'    => 'カテゴリー横',
				'section'  => 'jinr__representation_act_setting_section',
				'type'     => 'checkbox',
			)
		)
	);
	$wp_customize->add_setting(
		'jinr__representation_display_postfirst',
		array(
			'default' => true,
		)
	);
	$wp_customize->add_control(
		new Jinr_CheckBox_Control(
			$wp_customize,
			'jinr__representation_display_postfirst',
			array(
				'settings' => 'jinr__representation_display_postfirst',
				'label'    => '記事はじめ',
				'section'  => 'jinr__representation_act_setting_section',
				'type'     => 'checkbox',
			)
		)
	);

	$wp_customize->add_setting(
		'jinr__representations_pr_text_category_side',
		array(
			'default' => 'PR',
		)
	);
	$wp_customize->add_control(
		'jinr__representations_pr_text_category_side',
		array(
			'label'    => 'カテゴリー横のテキスト',
			'section'  => 'jinr__representation_act_setting_section',
			'settings' => 'jinr__representations_pr_text_category_side',
			'type'     => 'text',
		)
	);

	$wp_customize->add_setting(
		'jinr__representations_pr_text_postfirst',
		array(
			'default' => '記事内に商品プロモーションを含む場合があります',
		)
	);
	$wp_customize->add_control(
		'jinr__representations_pr_text_postfirst',
		array(
			'label'    => '記事はじめのテキスト',
			'section'  => 'jinr__representation_act_setting_section',
			'settings' => 'jinr__representations_pr_text_postfirst',
			'type'     => 'textarea',
		)
	);
	$wp_customize->add_setting('jinr__representation_design_type', array('default' => 'd--labeling-act-solid'));
	$wp_customize->add_control(
		new Jinr_Base_Control(
			$wp_customize,
			'jinr__representation_design_type',
			array(
				'settings'    => 'jinr__representation_design_type',
				'label'       => 'デザイン選択',
				'section'     => 'jinr__representation_act_setting_section',
				'type'        => 'radio',
				'choices'     => array(
					'd--labeling-act-border' => '枠線タイプ',
					'd--labeling-act-solid' => '塗りタイプ',
					'd--labeling-act-strong' => '強調タイプ',
				),
			)
		)
	);


	$wp_customize->add_setting(
		'jinr__representations_none_display_ids',
		array(
			'default' => '',
		)
	);
	$wp_customize->add_control(
		'jinr__representations_none_display_ids',
		array(
			'label'    => '除外するカテゴリーID（半角数字）',
			'section'  => 'jinr__representation_act_setting_section',
			'settings' => 'jinr__representations_none_display_ids',
			'type'     => 'text',
			'description'    => '【記入例】3,12,36',
		)
	);
}
add_action('customize_register', 'jinr__add_section_representations_setting');

function jinr__representation_display_post()
{
	return get_theme_mod('jinr__representation_display_post', false);
}
function jinr__representation_display_page()
{
	return get_theme_mod('jinr__representation_display_page', false);
}
function jinr__representation_display_custom_category()
{
	return get_theme_mod('jinr__representation_display_custom_category', false);
}

function jinr__representation_display_category_side()
{
	return get_theme_mod('jinr__representation_display_category_side', true);
}
function jinr__representation_display_postfirst()
{
	return get_theme_mod('jinr__representation_display_postfirst', true);
}
function jinr__representations_pr_text_category_side()
{
	return get_theme_mod('jinr__representations_pr_text_category_side', 'PR');
}
function jinr__representations_pr_text_postfirst()
{
	return get_theme_mod('jinr__representations_pr_text_postfirst', '記事内に商品プロモーションを含む場合があります');
}
function jinr__representation_design_type()
{
	return get_theme_mod('jinr__representation_design_type', 'd--labeling-act-solid');
}
function jinr__representations_none_display_ids()
{
	return get_theme_mod('jinr__representations_none_display_ids', '');
}
