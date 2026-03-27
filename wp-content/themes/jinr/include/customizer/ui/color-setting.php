<?php

/*カラー設定*/

function jinr__add_section_color( $wp_customize ) {

	$query['autofocus[section]'] = 'jinr__color_setting_panel';
	$section_link = add_query_arg( $query, admin_url( 'customize.php' ) );

	$wp_customize->add_section(
		'jinr__color_setting_panel',
		array(
			'title'    => 'カラー設定',
			'priority' => 2,
		)
	);

	$wp_customize->add_setting('jinr__color_tab', array('default' => 'general', 'transport' => 'postMessage',));
	$wp_customize->add_control(
		new Jinr_Base_Control(
			$wp_customize,
			'jinr__color_tab',
			array(
				'settings' => 'jinr__color_tab',
				'section'  => 'jinr__color_setting_panel',
				'type'     => 'tab',
				'choices'  => array(
					'general' => '一般設定',
					'gradation' => 'グラデーション登録',
				),
			)
		)
	);

	/*カラー設定*/

	$wp_customize->add_setting( 'jinr__color_extra_settings1' );
	$wp_customize->add_control(
		new Jinr_Base_Control(
			$wp_customize,
			'jinr__color_extra_settings1',
			array(
				'settings' => 'jinr__color_extra_settings1',
				'label'    => '基本設定',
				'section'  => 'jinr__color_setting_panel',
				'type'     => 'hidden',
			)
		)
	);

	$wp_customize->add_setting( 'jinr__theme_color', array( 'default' => '#407FED' ) );
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'jinr__theme_color',
			array(
				'label'    => 'テーマカラー',
				'section'  => 'jinr__color_setting_panel',
				'settings' => 'jinr__theme_color',
				'description' => 'メインになる色で「見出し」などの主要なパーツに反映されます',
			)
		)
	);

	$wp_customize->add_setting( 'jinr__bg_color', array( 'default' => '#f7faff' ) );
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'jinr__bg_color',
			array(
				'section'  => 'jinr__color_setting_panel',
				'settings' => 'jinr__bg_color',
				'label'    => '背景色',
			)
		)
	);

	$wp_customize->add_setting( 'jinr__text_color', array( 'default' => '#555555' ) );
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'jinr__text_color',
			array(
				'label'    => '文字色',
				'section'  => 'jinr__color_setting_panel',
				'settings' => 'jinr__text_color',
			)
		)
	);


	$wp_customize->add_setting( 'jinr__color_extra_settings2' );
	$wp_customize->add_control(
		new Jinr_Base_Control(
			$wp_customize,
			'jinr__color_extra_settings2',
			array(
				'settings' => 'jinr__color_extra_settings2',
				'label'    => 'ヘッダーエリア設定',
				'section'  => 'jinr__color_setting_panel',
				'type'     => 'hidden',
			)
		)
	);
	$wp_customize->add_setting( 'jinr__header_bgcolor_type', array( 'default' => 'transparent' ) );
	$wp_customize->add_control(
		new Jinr_Base_Control(
			$wp_customize,
			'jinr__header_bgcolor_type',
			array(
				'settings' => 'jinr__header_bgcolor_type',
				'label'    => 'ヘッダーの背景色',
				'section'  => 'jinr__color_setting_panel',
				'type'     => 'radio',
				'choices'  => array(
					'simplecolor' => '単色',
					'gradation' => 'グラデーション',
					'transparent' => '透明',
				),
			)
		)
	);
	$wp_customize->add_setting( 'jinr__header_bg_color', array( 'default' => '#407FED' ) );
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'jinr__header_bg_color',
			array(
				'section'  => 'jinr__color_setting_panel',
				'settings' => 'jinr__header_bg_color',
			)
		)
	);
	$wp_customize->add_setting( 'jinr__header_bg_gradation_select', array( 'default' => 'd--jinr-gradation1' ) );
	$wp_customize->add_control(
		new Jinr_Base_Control(
			$wp_customize,
			'jinr__header_bg_gradation_select',
			array(
				'settings' => 'jinr__header_bg_gradation_select',
				'section'  => 'jinr__color_setting_panel',
				'type'     => 'select',
				'choices'  => array(
					'd--jinr-gradation1' => 'グラデーション１',
					'd--jinr-gradation2' => 'グラデーション２',
					'd--jinr-gradation3' => 'グラデーション３',
				),
			)
		)
	);

	$wp_customize->add_setting( 'jinr__header_bg_extra_sub1' );
	$wp_customize->add_control(
		new Jinr_CheckBox_Control(
			$wp_customize,
			'jinr__header_bg_extra_sub1',
			array(
				'settings' => 'jinr__header_bg_extra_sub1',
				'section'  => 'jinr__color_setting_panel',
				'type'     => 'input',
				'description' => '<a href="'.esc_url( $section_link ).'">グラデーション登録</a>から色を編集できます',
			)
		)
	);

	$wp_customize->add_setting( 'jinr__header_title_color', array( 'default' => '#f9fbff' ) );
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'jinr__header_title_color',
			array(
				'label'    => 'タイトルの文字色',
				'section'  => 'jinr__color_setting_panel',
				'settings' => 'jinr__header_title_color',
			)
		)
	);

	$wp_customize->add_setting( 'jinr__header_menu_color', array( 'default' => '#f9fbff' ) );
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'jinr__header_menu_color',
			array(
				'label'    => 'メニューの文字色',
				'section'  => 'jinr__color_setting_panel',
				'settings' => 'jinr__header_menu_color',
			)
		)
	);

	$wp_customize->add_setting( 'jinr__color_extra_settings4' );
	$wp_customize->add_control(
		new Jinr_Base_Control(
			$wp_customize,
			'jinr__color_extra_settings4',
			array(
				'settings' => 'jinr__color_extra_settings4',
				'label'    => '執筆ツールの設定',
				'section'  => 'jinr__color_setting_panel',
				'type'     => 'hidden',
			)
		)
	);

	$wp_customize->add_setting(
		'jinr__marker1_weight',
		array(
			'default' => '60',
		)
	);
	$wp_customize->add_control(
		new Jinr_Base_Control(
			$wp_customize,
			'jinr__marker1_weight',
			array(
				'settings' => 'jinr__marker1_weight',
				'label'    => 'マーカー１の太さ',
				'section'  => 'jinr__color_setting_panel',
				'type'     => 'select',
				'choices'  => array(
					'80' => '細め',
					'60' => '普通',
					'10'  => '太め',
				),
			)
		)
	);

	$wp_customize->add_setting( 'jinr__marker1_color', array( 'default' => '#ffeea1' ) );
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'jinr__marker1_color',
			array(
				'label'    => __( 'マーカー１の色' ),
				'section'  => 'jinr__color_setting_panel',
				'settings' => 'jinr__marker1_color',
			)
		)
	);

	$wp_customize->add_setting(
		'jinr__marker2_weight',
		array(
			'default' => '60',
		)
	);
	$wp_customize->add_control(
		new Jinr_Base_Control(
			$wp_customize,
			'jinr__marker2_weight',
			array(
				'settings' => 'jinr__marker2_weight',
				'label'    => 'マーカー２の太さ',
				'section'  => 'jinr__color_setting_panel',
				'type'     => 'select',
				'choices'  => array(
					'80' => '細め',
					'60' => '普通',
					'10'  => '太め',
				),
			)
		)
	);

	$wp_customize->add_setting( 'jinr__marker2_color', array( 'default' => '#a9eaf2' ) );
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'jinr__marker2_color',
			array(
				'label'    => __( 'マーカー２の色' ),
				'section'  => 'jinr__color_setting_panel',
				'settings' => 'jinr__marker2_color',
			)
		)
	);

	$wp_customize->add_setting( 'jinr__colortext1_color', array( 'default' => '#E55E73' ) );
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'jinr__colortext1_color',
			array(
				'label'    => __( 'カラーテキスト１の色' ),
				'section'  => 'jinr__color_setting_panel',
				'settings' => 'jinr__colortext1_color',
			)
		)
	);

	$wp_customize->add_setting( 'jinr__colortext2_color', array( 'default' => '#4885EE' ) );
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'jinr__colortext2_color',
			array(
				'label'    => __( 'カラーテキスト２の色' ),
				'section'  => 'jinr__color_setting_panel',
				'settings' => 'jinr__colortext2_color',
			)
		)
	);
	

	$wp_customize->add_setting( 'jinr__color_extra_settings5' );
	$wp_customize->add_control(
		new Jinr_Base_Control(
			$wp_customize,
			'jinr__color_extra_settings5',
			array(
				'settings' => 'jinr__color_extra_settings5',
				'label'    => '他パーツの設定',
				'section'  => 'jinr__color_setting_panel',
				'type'     => 'hidden',
			)
		)
	);


	$wp_customize->add_setting( 'jinr__link_color', array( 'default' => '#008db7' ) );
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'jinr__link_color',
			array(
				'label'    => 'リンクの色',
				'section'  => 'jinr__color_setting_panel',
				'settings' => 'jinr__link_color',
			)
		)
	);

	$wp_customize->add_setting( 'jinr__link_hover_color', array( 'default' => '#6bb4ce' ) );
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'jinr__link_hover_color',
			array(
				'label'    => 'リンクにマウスを合わせたときの色',
				'section'  => 'jinr__color_setting_panel',
				'settings' => 'jinr__link_hover_color',
			)
		)
	);

	$wp_customize->add_setting( 'jinr__related_post_bgcolor_type', array( 'default' => 'transparent' ) );
	$wp_customize->add_control(
		new Jinr_Base_Control(
			$wp_customize,
			'jinr__related_post_bgcolor_type',
			array(
				'settings' => 'jinr__related_post_bgcolor_type',
				'label'    => '関連記事の背景色',
				'section'  => 'jinr__color_setting_panel',
				'type'     => 'radio',
				'choices'  => array(
					'simplecolor' => '単色',
					'gradation' => 'グラデーション',
					'transparent' => '透明',
				),
			)
		)
	);

	$wp_customize->add_setting( 'jinr__related_post_bgcolor', array( 'default' => '#f9f7f4' ) );
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'jinr__related_post_bgcolor',
			array(
				'section'  => 'jinr__color_setting_panel',
				'settings' => 'jinr__related_post_bgcolor',
			)
		)
	);

	$wp_customize->add_setting( 'jinr__related_post_bg_gradation_select', array( 'default' => 'd--jinr-gradation1' ) );
	$wp_customize->add_control(
		new Jinr_Base_Control(
			$wp_customize,
			'jinr__related_post_bg_gradation_select',
			array(
				'settings' => 'jinr__related_post_bg_gradation_select',
				'section'  => 'jinr__color_setting_panel',
				'type'     => 'select',
				'choices'  => array(
					'd--jinr-gradation1' => 'グラデーション１',
					'd--jinr-gradation2' => 'グラデーション２',
					'd--jinr-gradation3' => 'グラデーション３',
				),
			)
		)
	);

	$wp_customize->add_setting( 'jinr__related_post_bg_extra_sub1' );
	$wp_customize->add_control(
		new Jinr_CheckBox_Control(
			$wp_customize,
			'jinr__related_post_bg_extra_sub1',
			array(
				'settings' => 'jinr__related_post_bg_extra_sub1',
				'section'  => 'jinr__color_setting_panel',
				'type'     => 'input',
				'description' => '<a href="'.esc_url( $section_link ).'">グラデーション登録</a>から色を編集できます',
			)
		)
	);

	$wp_customize->add_setting( 'jinr__related_post_color_type', array( 'default' => 'd--textcolor' ) );
	$wp_customize->add_control(
		new Jinr_Base_Control(
			$wp_customize,
			'jinr__related_post_color_type',
			array(
				'settings' => 'jinr__related_post_color_type',
				'label'    => '関連記事の文字色',
				'section'  => 'jinr__color_setting_panel',
				'type'     => 'radio',
				'choices'  => array(
					'd--textcolor' => 'サイトの文字色',
					'd--whitecolor' => '白色',
				),
			)
		)
	);

	$wp_customize->add_setting( 'jinr__color_extra_settings3' );
	$wp_customize->add_control(
		new Jinr_Base_Control(
			$wp_customize,
			'jinr__color_extra_settings3',
			array(
				'settings' => 'jinr__color_extra_settings3',
				'label'    => 'フッターエリア設定',
				'section'  => 'jinr__color_setting_panel',
				'type'     => 'hidden',
			)
		)
	);
	$wp_customize->add_setting( 'jinr__footer_bgcolor_type', array( 'default' => 'simplecolor' ) );
	$wp_customize->add_control(
		new Jinr_Base_Control(
			$wp_customize,
			'jinr__footer_bgcolor_type',
			array(
				'settings' => 'jinr__footer_bgcolor_type',
				'label'    => 'フッターの背景色',
				'section'  => 'jinr__color_setting_panel',
				'type'     => 'radio',
				'choices'  => array(
					'simplecolor' => '単色',
					'gradation' => 'グラデーション',
					'transparent' => '透明',
				),
			)
		)
	);
	$wp_customize->add_setting( 'jinr__footer_bg_color', array( 'default' => '#22327a' ) );
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'jinr__footer_bg_color',
			array(
				'section'  => 'jinr__color_setting_panel',
				'settings' => 'jinr__footer_bg_color',
			)
		)
	);

	$wp_customize->add_setting( 'jinr__footer_bg_gradation_select', array( 'default' => 'd--jinr-gradation1' ) );
	$wp_customize->add_control(
		new Jinr_Base_Control(
			$wp_customize,
			'jinr__footer_bg_gradation_select',
			array(
				'settings' => 'jinr__footer_bg_gradation_select',
				'section'  => 'jinr__color_setting_panel',
				'type'     => 'select',
				'choices'  => array(
					'd--jinr-gradation1' => 'グラデーション１',
					'd--jinr-gradation2' => 'グラデーション２',
					'd--jinr-gradation3' => 'グラデーション３',
				),
			)
		)
	);

	$wp_customize->add_setting( 'jinr__footer_bg_extra_sub1' );
	$wp_customize->add_control(
		new Jinr_CheckBox_Control(
			$wp_customize,
			'jinr__footer_bg_extra_sub1',
			array(
				'settings' => 'jinr__footer_bg_extra_sub1',
				'section'  => 'jinr__color_setting_panel',
				'type'     => 'input',
				'description' => '<a href="'.esc_url( $section_link ).'">グラデーション登録</a>から色を編集できます',
			)
		)
	);


	$wp_customize->add_setting( 'jinr__footer_text_color', array( 'default' => '#f9fbff' ) );
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'jinr__footer_text_color',
			array(
				'label'    => 'フッターの文字色',
				'section'  => 'jinr__color_setting_panel',
				'settings' => 'jinr__footer_text_color',
			)
		)
	);

	$wp_customize->add_setting( 'jinr__color_extra_settings6' );
	$wp_customize->add_control(
		new Jinr_Base_Control(
			$wp_customize,
			'jinr__color_extra_settings6',
			array(
				'settings' => 'jinr__color_extra_settings6',
				'label'    => 'お気に入り',
				'section'  => 'jinr__color_setting_panel',
				'type'     => 'hidden',
			)
		)
	);

	$wp_customize->add_setting(
		'jinr__favorite_notice',
		array(
			'default' => '',
		)
	);
	$wp_customize->add_control(
		new Jinr_CheckBox_Control(
			$wp_customize,
			'jinr__favorite_notice',
			array(
				'settings' => 'jinr__favorite_notice',
				'section'  => 'jinr__color_setting_panel',
				'type'     => 'input',
				'description' => 'お気に入りに登録した色はJIN:Rブロックのカラー選択に追加されます。',
			)
		)
	);

	for ( $i = 1; $i <= 6; $i++ ) {
		$wp_customize->add_setting( 'jinr__favorite_color'. $i, array( 'default' => '' ) );
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'jinr__favorite_color'. $i,
				array(
					'label'    => '登録'. $i,
					'section'  => 'jinr__color_setting_panel',
					'settings' => 'jinr__favorite_color'. $i,
				)
			)
		);
	}

	/*グラデーション登録*/

	// $wp_customize->add_section(
	// 	'jinr__color_setting_panel',
	// 	array(
	// 		'title'    => 'グラデーション登録',
	// 		'panel'    => 'jinr__color_setting_panel',
	// 		'priority' => 2,
	// 	)
	// );
	
	$wp_customize->add_setting( 'jinr__gradation_extra_settings1' );
	$wp_customize->add_control(
		new Jinr_Base_Control(
			$wp_customize,
			'jinr__gradation_extra_settings1',
			array(
				'settings' => 'jinr__gradation_extra_settings1',
				'label'    => 'グラデーション１の設定',
				'section'  => 'jinr__color_setting_panel',
				'type'     => 'hidden',
			)
		)
	);

	$wp_customize->add_setting( 'jinr__gradation_color1_1', array( 'default' => '#f6f2b5' ) );
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'jinr__gradation_color1_1',
			array(
				'label'    => 'カラー１',
				'section'  => 'jinr__color_setting_panel',
				'settings' => 'jinr__gradation_color1_1',
			)
		)
	);

	$wp_customize->add_setting( 'jinr__gradation_color1_2', array( 'default' => '#58e2c9' ) );
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'jinr__gradation_color1_2',
			array(
				'label'    => 'カラー２',
				'section'  => 'jinr__color_setting_panel',
				'settings' => 'jinr__gradation_color1_2',
			)
		)
	);

	$wp_customize->add_setting( 'jinr__gradation_color1_deg', array( 'default' => 135 ) );
	$wp_customize->add_control(
		new Jinr_Range_Control(
			$wp_customize,
			'jinr__gradation_color1_deg',
			array(
				'label'    => '角度',
				'section'  => 'jinr__color_setting_panel',
				'settings' => 'jinr__gradation_color1_deg',
				'type'     => 'range',
				'max'      => 180,
			)
		)
	);

	$wp_customize->add_setting( 'jinr__gradation_extra_settings2' );
	$wp_customize->add_control(
		new Jinr_Base_Control(
			$wp_customize,
			'jinr__gradation_extra_settings2',
			array(
				'settings' => 'jinr__gradation_extra_settings2',
				'label'    => 'グラデーション２の設定',
				'section'  => 'jinr__color_setting_panel',
				'type'     => 'hidden',
			)
		)
	);

	$wp_customize->add_setting( 'jinr__gradation_color2_1', array( 'default' => '#f6f2b5' ) );
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'jinr__gradation_color2_1',
			array(
				'label'    => 'カラー１',
				'section'  => 'jinr__color_setting_panel',
				'settings' => 'jinr__gradation_color2_1',
			)
		)
	);

	$wp_customize->add_setting( 'jinr__gradation_color2_2', array( 'default' => '#f865a0' ) );
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'jinr__gradation_color2_2',
			array(
				'label'    => 'カラー２',
				'section'  => 'jinr__color_setting_panel',
				'settings' => 'jinr__gradation_color2_2',
			)
		)
	);

	$wp_customize->add_setting( 'jinr__gradation_color2_deg', array( 'default' => 135 ) );
	$wp_customize->add_control(
		new Jinr_Range_Control(
			$wp_customize,
			'jinr__gradation_color2_deg',
			array(
				'label'    => '角度',
				'section'  => 'jinr__color_setting_panel',
				'settings' => 'jinr__gradation_color2_deg',
				'type'     => 'range',
				'max'      => 180,
			)
		)
	);

	$wp_customize->add_setting( 'jinr__gradation_extra_settings3' );
	$wp_customize->add_control(
		new Jinr_Base_Control(
			$wp_customize,
			'jinr__gradation_extra_settings3',
			array(
				'settings' => 'jinr__gradation_extra_settings3',
				'label'    => 'グラデーション３の設定',
				'section'  => 'jinr__color_setting_panel',
				'type'     => 'hidden',
			)
		)
	);

	$wp_customize->add_setting( 'jinr__gradation_color3_1', array( 'default' => '#f6f2b5' ) );
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'jinr__gradation_color3_1',
			array(
				'label'    => 'カラー１',
				'section'  => 'jinr__color_setting_panel',
				'settings' => 'jinr__gradation_color3_1',
			)
		)
	);

	$wp_customize->add_setting( 'jinr__gradation_color3_2', array( 'default' => '#f8a363' ) );
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'jinr__gradation_color3_2',
			array(
				'label'    => 'カラー２',
				'section'  => 'jinr__color_setting_panel',
				'settings' => 'jinr__gradation_color3_2',
			)
		)
	);

	$wp_customize->add_setting( 'jinr__gradation_color3_deg', array( 'default' => 135 ) );
	$wp_customize->add_control(
		new Jinr_Range_Control(
			$wp_customize,
			'jinr__gradation_color3_deg',
			array(
				'label'    => '角度',
				'section'  => 'jinr__color_setting_panel',
				'settings' => 'jinr__gradation_color3_deg',
				'type'     => 'range',
				'max'      => 180,
			)
		)
	);


}
add_action( 'customize_register', 'jinr__add_section_color' );


function jinr__color_preset_select() {
	return get_theme_mod( 'jinr__color_preset_select', 'default' );
}

function jinr__theme_color() {
	return get_theme_mod( 'jinr__theme_color', '#407FED' );
}
function jinr__bgcolor_type() {
	return get_theme_mod( 'jinr__bgcolor_type', 'simplecolor' );
}
function jinr__bg_color() {
	return get_theme_mod( 'jinr__bg_color', '#f7faff' );
}
function jinr__bg_gradation_select() {
	return get_theme_mod( 'jinr__bg_gradation_select', 'd--jinr-gradation1' );
}
function jinr__text_color() {
	return get_theme_mod( 'jinr__text_color', '#555555' );
}
function jinr__link_color() {
	return get_theme_mod( 'jinr__link_color', '#008db7' );
}
function jinr__link_hover_color() {
	return get_theme_mod( 'jinr__link_hover_color', '#6bb4ce' );
}


function jinr__header_title_color() {
	return get_theme_mod( 'jinr__header_title_color', '#f9fbff' );
}
function jinr__header_menu_color() {
	return get_theme_mod( 'jinr__header_menu_color', '#f9fbff' );
}
function jinr__header_bgcolor_type() {
	return get_theme_mod( 'jinr__header_bgcolor_type', 'transparent' );
}
function jinr__header_bg_color() {
	return get_theme_mod( 'jinr__header_bg_color', '#407FED' );
}
function jinr__header_bg_gradation_select() {
	return get_theme_mod( 'jinr__header_bg_gradation_select', 'd--jinr-gradation1' );
}
function jinr__footer_bg_transparent() {
	return get_theme_mod( 'jinr__footer_bg_transparent', false );
}
function jinr__footer_text_color() {
	return get_theme_mod( 'jinr__footer_text_color', '#f9fbff' );
}
function jinr__footer_bgcolor_type() {
	return get_theme_mod( 'jinr__footer_bgcolor_type', 'simplecolor' );
}
function jinr__footer_bg_color() {
	return get_theme_mod( 'jinr__footer_bg_color', '#22327a' );
}
function jinr__footer_bg_gradation_select() {
	return get_theme_mod( 'jinr__footer_bg_gradation_select', 'd--jinr-gradation1' );
}

function jinr__listmark_color() {
	return get_theme_mod( 'jinr__listmark_color', 'jinr-accent-color' );
}
function jinr__categorylabel_color() {
	return get_theme_mod( 'jinr__categorylabel_color', 'jinr-theme-color' );
}
function jinr__pagination_color() {
	return get_theme_mod( 'jinr__pagination_color', 'jinr-theme-color' );
}


function jinr__gradation_color1_1() {
	return get_theme_mod( 'jinr__gradation_color1_1', '#f6f2b5' );
}
function jinr__gradation_color1_2() {
	return get_theme_mod( 'jinr__gradation_color1_2', '#58e2c9' );
}
function jinr__gradation_color1_deg() {
	return get_theme_mod( 'jinr__gradation_color1_deg', 135 );
}
function jinr__gradation_color2_1() {
	return get_theme_mod( 'jinr__gradation_color2_1', '#f6f2b5' );
}
function jinr__gradation_color2_2() {
	return get_theme_mod( 'jinr__gradation_color2_2', '#f865a0' );
}
function jinr__gradation_color2_deg() {
	return get_theme_mod( 'jinr__gradation_color2_deg', 135 );
}
function jinr__gradation_color3_1() {
	return get_theme_mod( 'jinr__gradation_color3_1', '#f6f2b5' );
}
function jinr__gradation_color3_2() {
	return get_theme_mod( 'jinr__gradation_color3_2', '#f8a363' );
}
function jinr__gradation_color3_deg() {
	return get_theme_mod( 'jinr__gradation_color3_deg', 135 );
}
function jinr__related_post_bgcolor_type() {
	return get_theme_mod( 'jinr__related_post_bgcolor_type', 'transparent' );
}
function jinr__related_post_color_type() {
	return get_theme_mod( 'jinr__related_post_color_type', 'd--textcolor' );
}
function jinr__related_post_bgcolor(){
	return get_theme_mod('jinr__related_post_bgcolor', '#f9f7f4');
}
function jinr__related_post_bg_gradation_select() {
	return get_theme_mod( 'jinr__related_post_bg_gradation_select', 'd--jinr-gradation1' );
}

function jinr__marker1_color(){
	return get_theme_mod('jinr__marker1_color', '#ffeea1');
}
function jinr__marker1_weight(){
	return get_theme_mod('jinr__marker1_weight', '60');
}
function jinr__marker2_color(){
	return get_theme_mod('jinr__marker2_color', '#a9eaf2');
}
function jinr__marker2_weight(){
	return get_theme_mod('jinr__marker2_weight', '60');
}
function jinr__colortext1_color(){
	return get_theme_mod('jinr__colortext1_color', '#E55E73');
}
function jinr__colortext2_color(){
	return get_theme_mod('jinr__colortext2_color', '#4885EE');
}

function jinr__favorite_color1(){
	return get_theme_mod('jinr__favorite_color1', '');
}
function jinr__favorite_color2(){
	return get_theme_mod('jinr__favorite_color2', '');
}
function jinr__favorite_color3(){
	return get_theme_mod('jinr__favorite_color3', '');
}
function jinr__favorite_color4(){
	return get_theme_mod('jinr__favorite_color4', '');
}
function jinr__favorite_color5(){
	return get_theme_mod('jinr__favorite_color5', '');
}
function jinr__favorite_color6(){
	return get_theme_mod('jinr__favorite_color6', '');
}