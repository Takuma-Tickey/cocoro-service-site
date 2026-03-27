<?php

/*アニメーション設定*/
function jinr__add_section_animation_setting($wp_customize)
{
	$wp_customize->add_section(
		'jinr__animation_setting_section',
		array(
			'title'    => __jinr('アニメーション設定'),
			'priority' => 10,
		)
	);


	$wp_customize->add_setting('jinr__animation_general');
	$wp_customize->add_control(
		new Jinr_Base_Control(
			$wp_customize,
			'jinr__animation_general',
			array(
				'settings'    => 'jinr__animation_general',
				'label'       => '全体のアニメーション',
				'section'     => 'jinr__animation_setting_section',
				'type'        => 'hidden',
			)
		)
	);

	$wp_customize->add_setting('jinr__animation_info1',array('default' => '',));
	$wp_customize->add_control(
		new Jinr_Base_Control(
			$wp_customize,
			'jinr__animation_info1',
			array(
				'settings' => 'jinr__animation_info1',
				'section'  => 'jinr__animation_setting_section',
				'type'     => 'text',
				'description' => '<p class="jinr--extra-information">ヘッダー・サイドバー・コンテンツエリアなどサイトフレームのアニメーション設定です。</p>',
			)
		)
	);

	$wp_customize->add_setting('jinr__animation_general_toggle',array('default' => 'd--animation-general-on'));
	$wp_customize->add_control(
		new Jinr_Base_Control(
			$wp_customize,
			'jinr__animation_general_toggle',
			array(
				'settings' => 'jinr__animation_general_toggle',
				'section'  => 'jinr__animation_setting_section',
				'type'     => 'radio',
				'choices'  => array(
					'd--animation-general-on'   => 'ON',
					'off' => 'OFF',
				),
			)
		)
	);

	$wp_customize->add_setting('jinr__animation_block');
	$wp_customize->add_control(
		new Jinr_Base_Control(
			$wp_customize,
			'jinr__animation_block',
			array(
				'settings'    => 'jinr__animation_block',
				'label'       => 'ブロック毎のアニメーション',
				'section'     => 'jinr__animation_setting_section',
				'type'        => 'hidden',
			)
		)
	);

	$wp_customize->add_setting('jinr__animation_info2',array('default' => '',));
	$wp_customize->add_control(
		new Jinr_Base_Control(
			$wp_customize,
			'jinr__animation_info2',
			array(
				'settings' => 'jinr__animation_info2',
				'section'  => 'jinr__animation_setting_section',
				'type'     => 'text',
				'description' => '<p class="jinr--extra-information">ブロックの一括アニメーション設定ができます。必要に応じてブロック設定内で個別にアニメーションをOFFにすることもできます。</p>',
			)
		)
	);

	$wp_customize->add_setting('jinr__animation_designtitle_select', array('default' => 'off'));
	$wp_customize->add_control(
		new Jinr_Base_Control(
			$wp_customize,
			'jinr__animation_designtitle_select',
			array(
				'settings' => 'jinr__animation_designtitle_select',
				'section'  => 'jinr__animation_setting_section',
				'label'    => 'デザイン見出し',
				'type'     => 'select',
				'choices'  => array(
					'off' => 'なし',
					'd--designtitle-animation-fade' => 'フェードイン',
					//'d--designtitle-animation-dynamic' => 'ダイナミック',
				),

			)
		)
	);
	$wp_customize->add_setting('jinr__animation_column_select', array('default' => 'off'));
	$wp_customize->add_control(
		new Jinr_Base_Control(
			$wp_customize,
			'jinr__animation_column_select',
			array(
				'settings' => 'jinr__animation_column_select',
				'section'  => 'jinr__animation_setting_section',
				'label'    => 'カラム',
				'type'     => 'select',
				'choices'  => array(
					'off' => 'なし',
					'd--column-animation-fadebyone' => '１つずつフェードイン',
					'd--column-animation-fadeslidebyone' => '１つずつフェードイン（スライド）',
					'd--column-animation-fade' => '全体をフェードイン',
				),

			)
		)
	);
	/*
	$wp_customize->add_setting('jinr__animation_timeline_select', array('default' => 'off'));
	$wp_customize->add_control(
		new Jinr_Base_Control(
			$wp_customize,
			'jinr__animation_timeline_select',
			array(
				'settings' => 'jinr__animation_timeline_select',
				'section'  => 'jinr__animation_setting_section',
				'label'    => 'タイムライン',
				'type'     => 'select',
				'choices'  => array(
					'off' => 'なし',
					'd--animation-timeline1' => 'タイプ１',
					'd--animation-timeline2' => 'タイプ２',
					'd--animation-timeline3' => 'タイプ３',
				),

			)
		)
	);
	*/
}
add_action('customize_register', 'jinr__add_section_animation_setting');

function jinr__animation_general_toggle()
{
	return get_theme_mod('jinr__animation_general_toggle', 'd--animation-general-on');
}
function jinr__animation_designtitle_select()
{
	return get_theme_mod('jinr__animation_designtitle_select', 'off');
}
function jinr__animation_column_select()
{
	return get_theme_mod('jinr__animation_column_select', 'off');
}
/*
function jinr__animation_timeline_select()
{
	return get_theme_mod('jinr__animation_timeline_select', 'off');
}
*/