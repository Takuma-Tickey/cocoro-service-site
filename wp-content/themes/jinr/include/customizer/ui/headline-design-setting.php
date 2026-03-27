<?php

/*見出し設定*/

function jinr__add_section_headline_design($wp_customize)
{

	$wp_customize->add_section(
		'jinr__headline_section',
		array(
			'title'    => '見出し',
			'priority' => 6,
		)
	);

	$wp_customize->add_setting('jinr__headline_extra_settings1');
	$wp_customize->add_control(
		new Jinr_Base_Control(
			$wp_customize,
			'jinr__headline_extra_settings1',
			array(
				'settings' => 'jinr__headline_extra_settings1',
				'label'    => 'H2見出し設定',
				'section'  => 'jinr__headline_section',
				'type'     => 'hidden',
			)
		)
	);

	$wp_customize->add_setting(
		'jinr__h2_style',
		array(
			'default' => 'd--h2-style8',
		)
	);
	$wp_customize->add_control(
		new Jinr_Base_Control(
			$wp_customize,
			'jinr__h2_style',
			array(
				'settings' => 'jinr__h2_style',
				'label'    => 'H2見出しデザインを選ぶ',
				'section'  => 'jinr__headline_section',
				'type'     => 'select',
				'choices'  => array(
					'd--h2-style1' => 'スタイル１｜シンプル塗り',
					'd--h2-style2' => 'スタイル２｜吹き出し',
					'd--h2-style3' => 'スタイル３｜上下ボーダー',
					'd--h2-style4' => 'スタイル４｜下ボーダー',
					'd--h2-style5' => 'スタイル５｜左ボーダー',
					'd--h2-style6' => 'スタイル６｜左ボーダー塗り',
					'd--h2-style7' => 'スタイル７｜二重ボーダー',
					'd--h2-style8' => 'スタイル８｜ストライプ',
					'd--h2-style9' => 'スタイル９｜ワンポイント',
					'd--h2-style10' => 'スタイル10｜薄い塗り',
					'd--h2-original' => 'CSSカスタマイズ用',
				),
			)
		)
	);


	$wp_customize->add_setting('jinr__headline_extra_settings2');
	$wp_customize->add_control(
		new Jinr_Base_Control(
			$wp_customize,
			'jinr__headline_extra_settings2',
			array(
				'settings' => 'jinr__headline_extra_settings2',
				'label'    => 'H3見出し設定',
				'section'  => 'jinr__headline_section',
				'type'     => 'hidden',
			)
		)
	);
	$wp_customize->add_setting(
		'jinr__h3_style',
		array(
			'default' => 'd--h3-style1',
		)
	);
	$wp_customize->add_control(
		new Jinr_Base_Control(
			$wp_customize,
			'jinr__h3_style',
			array(
				'settings' => 'jinr__h3_style',
				'label'    => 'H3見出しデザインを選ぶ',
				'section'  => 'jinr__headline_section',
				'type'     => 'select',
				'choices'  => array(
					'd--h3-style1' => 'スタイル１｜下ボーダー',
					'd--h3-style2' => 'スタイル２｜左ボーダー',
					'd--h3-style3' => 'スタイル３｜ドット',
					'd--h3-style4' => 'スタイル４｜二重ボーダー下',
					'd--h3-style5' => 'スタイル５｜二重ボーダー左',
					'd--h3-style6' => 'スタイル６｜スクエア',
					'd--h3-style7' => 'スタイル７｜サークル',
					'd--h3-style8' => 'スタイル８｜薄い塗り',
					'd--h3-original' => 'CSSカスタマイズ用',
				),
			)
		)
	);


	$wp_customize->add_setting('jinr__headline_extra_settings3');
	$wp_customize->add_control(
		new Jinr_Base_Control(
			$wp_customize,
			'jinr__headline_extra_settings3',
			array(
				'settings' => 'jinr__headline_extra_settings3',
				'label'    => 'H4見出し設定',
				'section'  => 'jinr__headline_section',
				'type'     => 'hidden',
			)
		)
	);
	$wp_customize->add_setting(
		'jinr__h4_style',
		array(
			'default' => 'd--h4-style4',
		)
	);
	$wp_customize->add_control(
		new Jinr_Base_Control(
			$wp_customize,
			'jinr__h4_style',
			array(
				'settings' => 'jinr__h4_style',
				'label'    => '小見出し（H4）デザイン',
				'section'  => 'jinr__headline_section',
				'type'     => 'select',
				'choices'  => array(
					'd--h4-style1' => 'スタイル１｜インデント',
					'd--h4-style2' => 'スタイル２｜ドット',
					'd--h4-style3' => 'スタイル３｜左ボーダー',
					'd--h4-style4' => 'スタイル４｜薄い塗り',
					'd--h4-style5' => 'スタイル５｜スクエア',
					'd--h4-style6' => 'スタイル６｜サークル',
					'd--h4-original' => 'CSSカスタマイズ用',
				),
			)
		)
	);


	$wp_customize->add_setting('jinr__headline_extra_settings4');
	$wp_customize->add_control(
		new Jinr_Base_Control(
			$wp_customize,
			'jinr__headline_extra_settings4',
			array(
				'settings' => 'jinr__headline_extra_settings4',
				'label'    => '見出しをカスタマイズする',
				'section'  => 'jinr__headline_section',
				'type'     => 'hidden',
			)
		)
	);

	$wp_customize->add_setting(
		'jinr__h_original',
		array(
			'default' => '',
		)
	);
	$wp_customize->add_control(
		new Jinr_Base_Control(
			$wp_customize,
			'jinr__h_original',
			array(
				'settings' => 'jinr__h_original',
				'section'  => 'jinr__headline_section',
				'type'     => 'text',
				'description' => '<ul class="jinr--extra-information"><li class="jinr--extra-information-item">見出しデザイン選択で「CSSカスタマイズ用」を選択する</li><li class="jinr--extra-information-item">カスタマイズ用クラス名<ul><li>.d--h2-original</li><li class="jinr--extra-information-item">.d--h3-original</li><li class="jinr--extra-information-item">.d--h4-original</li></ul></li><li class="jinr--extra-information-item">追加CSSにお好みのCSSを記述してください</li></ul>',
			)
		)
	);
}
add_action('customize_register', 'jinr__add_section_headline_design');

function jinr__h2_style()
{
	return get_theme_mod('jinr__h2_style', 'd--h2-style8');
}
function jinr__h3_style()
{
	return get_theme_mod('jinr__h3_style', 'd--h3-style1');
}
function jinr__h4_style()
{
	return get_theme_mod('jinr__h4_style', 'd--h4-style4');
}
