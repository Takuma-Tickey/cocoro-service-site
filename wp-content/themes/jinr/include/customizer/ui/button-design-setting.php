<?php
/*ボタンデザイン設定*/

$jinr_btn_button_type = array(
	'solid',
	'solid',
	'outline',
	'outline',
	'arrow',
	'outline',
	'solid',
	'solid',
	'outline',
	'outline',
);
$jinr_btn_button_name = array(
	'CVボタン１',
	'CVボタン２',
	'アウトラインボタン１',
	'アウトラインボタン２',
	'アローボタン',
	'インフォメーション',
	'比較表用ボタン1',
	'比較表用ボタン2',
	'ボタン',
	'ボタン',
);
$jinr_btn_color = array(
	'#407FED',
	'#22327a',
	'#407FED',
	'#22327a',
	'#407FED',
	'#555555',
	'#407FED',
	'#eeeeee',
	'#407FED',
	'#407FED',
);
$jinr_btn_text_color = array(
	'#ffffff',
	'#ffffff',
	'#555555',
	'#555555',
	'#555555',
	'#555555',
	'#ffffff',
	'#444444',
	'#555555',
	'#555555',
);
$jinr_btn_text_size = array(
	16,
	16,
	16,
	16,
	13,
	11,
	15,
	15,
	16,
	16,
);
$jinr_btn_shadow = array(
	'd--button-shadow-small',
	'd--button-shadow-small',
	'd--button-shadow-none',
	'd--button-shadow-none',
	'd--button-shadow-none',
	'd--button-shadow-small',
	'd--button-shadow-small',
	'd--button-shadow-small',
	'd--button-shadow-small',
	'd--button-shadow-small',
);
$jinr_btn_round = array(
	60,
	60,
	60,
	60,
	0,
	60,
	4,
	4,
	60,
	60,
);
$jinr_btn_width = array(
	48,
	48,
	48,
	48,
	36,
	18,
	53,
	53,
	48,
	48,
);
$jinr_btn_height = array(
	18,
	18,
	18,
	18,
	9,
	5,
	12,
	12,
	18,
	18,
);
$jinr_btn_solid_hover = array(
	'd--button-solid-hover-push',
	'd--button-solid-hover-push',
	'd--button-solid-hover-push',
	'd--button-solid-hover-push',
	'd--button-solid-hover-push',
	'd--button-solid-hover-push',
	'd--button-solid-hover-push',
	'd--button-solid-hover-push',
	'd--button-solid-hover-push',
	'd--button-solid-hover-push',
);
$jinr_btn_outline_hover = array(
	'd--button-outline-hover-push',
	'd--button-outline-hover-push',
	'd--button-outline-hover-push',
	'd--button-outline-hover-push',
	'd--button-outline-hover-push',
	'd--button-outline-hover-push',
	'd--button-outline-hover-push',
	'd--button-outline-hover-push',
	'd--button-outline-hover-push',
	'd--button-outline-hover-push',
);
$jinr_btn_arrow_hover = array(
	'd--button-arrow-hover-right',
	'd--button-arrow-hover-right',
	'd--button-arrow-hover-right',
	'd--button-arrow-hover-right',
	'd--button-arrow-hover-right',
	'd--button-arrow-hover-right',
	'd--button-arrow-hover-right',
	'd--button-arrow-hover-right',
	'd--button-arrow-hover-right',
	'd--button-arrow-hover-right',
);


function jinr__add_section_button_design($wp_customize)
{
	global $jinr_btn_button_name;
	global $jinr_btn_button_type;
	global $jinr_btn_color;
	global $jinr_btn_text_color;
	global $jinr_btn_text_size;
	global $jinr_btn_round;
	global $jinr_btn_width;
	global $jinr_btn_height;
	global $jinr_btn_shadow;
	global $jinr_btn_solid_hover;
	global $jinr_btn_outline_hover;
	global $jinr_btn_arrow_hover;

	$query['autofocus[section]'] = 'jinr__gradation_setting_tab';
	$section_link = add_query_arg($query, admin_url('customize.php'));

	$wp_customize->add_panel(
		'jinr__button_design_panel',
		array(
			'title'    => 'ボタン',
			'priority' => 8,
		)
	);

	/*ボタン１設定*/
	for ($i = 1; $i <= 10; $i++) {

		${'button' . $i . '_register_name'} = 'jinr__button0' . $i . '_name';
		${'button' . $i . '_register_name'} = ${'button' . $i . '_register_name'}();

		$wp_customize->add_section(
			'jinr__button0' . $i . '_tab',
			array(
				'title'    => ${'button' . $i . '_register_name'},
				'panel'    => 'jinr__button_design_panel',
				'priority' => 1,
			)
		);


		$wp_customize->add_setting('jinr__button' . $i . '_extra_settings2');
		$wp_customize->add_control(
			new Jinr_Base_Control(
				$wp_customize,
				'jinr__button' . $i . '_extra_settings2',
				array(
					'settings' => 'jinr__button' . $i . '_extra_settings2',
					'label'    => 'ボタンのデザイン設定',
					'section'  => 'jinr__button0' . $i . '_tab',
					'type'     => 'hidden',
				)
			)
		);
		$wp_customize->add_setting('jinr__button0' . $i . '_design', array('default' => $jinr_btn_button_type[$i - 1]));
		$wp_customize->add_control(
			new Jinr_Base_Control(
				$wp_customize,
				'jinr__button0' . $i . '_design',
				array(
					'settings' => 'jinr__button0' . $i . '_design',
					'label'    => 'デザイン選択',
					'section'  => 'jinr__button0' . $i . '_tab',
					'type'     => 'radio',
					'choices'  => array(
						'solid'   => '',
						'outline' => '',
						'arrow'   => '',
					),
				)
			)
		);
		if ($i == 7) {
			$wp_customize->add_setting('jinr__button0' . $i . '_color_type', array('default' => 'gradation'));
			$wp_customize->add_control(
				new Jinr_Base_Control(
					$wp_customize,
					'jinr__button0' . $i . '_color_type',
					array(
						'settings' => 'jinr__button0' . $i . '_color_type',
						'label'    => 'ボタンのカラー設定',
						'section'  => 'jinr__button0' . $i . '_tab',
						'type'     => 'radio',
						'choices'  => array(
							'simplecolor' => '単色',
							'gradation'   => 'グラデーション',
						),
					)
				)
			);
		} else {
			$wp_customize->add_setting('jinr__button0' . $i . '_color_type', array('default' => 'simplecolor'));
			$wp_customize->add_control(
				new Jinr_Base_Control(
					$wp_customize,
					'jinr__button0' . $i . '_color_type',
					array(
						'settings' => 'jinr__button0' . $i . '_color_type',
						'label'    => 'ボタンのカラー設定',
						'section'  => 'jinr__button0' . $i . '_tab',
						'type'     => 'radio',
						'choices'  => array(
							'simplecolor' => '単色',
							'gradation'   => 'グラデーション',
						),
					)
				)
			);
		}

		$wp_customize->add_setting('jinr__button0' . $i . '_color', array('default' => $jinr_btn_color[$i - 1]));
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'jinr__button0' . $i . '_color',
				array(
					'section'  => 'jinr__button0' . $i . '_tab',
					'settings' => 'jinr__button0' . $i . '_color',
				)
			)
		);

		$wp_customize->add_setting('jinr__button0' . $i . '_gradation_select', array('default' => 'd--jinr-gradation1'));
		$wp_customize->add_control(
			new Jinr_Base_Control(
				$wp_customize,
				'jinr__button0' . $i . '_gradation_select',
				array(
					'settings' => 'jinr__button0' . $i . '_gradation_select',
					'section'  => 'jinr__button0' . $i . '_tab',
					'type'     => 'select',
					'choices'  => array(
						'd--jinr-gradation1' => 'グラデーション１',
						'd--jinr-gradation2' => 'グラデーション２',
						'd--jinr-gradation3' => 'グラデーション３',
					),

				)
			)
		);
		$wp_customize->add_setting('jinr__button0' . $i . '_extra_sub1');
		$wp_customize->add_control(
			new Jinr_CheckBox_Control(
				$wp_customize,
				'jinr__button0' . $i . '_extra_sub1',
				array(
					'settings' => 'jinr__button0' . $i . '_extra_sub1',
					'section'  => 'jinr__button0' . $i . '_tab',
					'type'     => 'input',
					'description' => '<a href="' . esc_url($section_link) . '">グラデーション登録</a>から色を編集できます',
				)
			)
		);

		$wp_customize->add_setting('jinr__button0' . $i . '_text_color', array('default' => $jinr_btn_text_color[$i - 1]));
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'jinr__button0' . $i . '_text_color',
				array(
					'label'    => '文字色',
					'section'  => 'jinr__button0' . $i . '_tab',
					'settings' => 'jinr__button0' . $i . '_text_color',
				)
			)
		);

		$wp_customize->add_setting('jinr__button0' . $i . '_text_size', array('default' => $jinr_btn_text_size[$i - 1]));
		$wp_customize->add_control(
			new Jinr_Range_Control(
				$wp_customize,
				'jinr__button0' . $i . '_text_size',
				array(
					'settings' => 'jinr__button0' . $i . '_text_size',
					'label'    => '文字サイズ',
					'section'  => 'jinr__button0' . $i . '_tab',
					'type'     => 'range',
					'max'      => 21,
					'min'      => 10,
				)
			)
		);



		$wp_customize->add_setting('jinr__button0' . $i . '_round', array('default' => $jinr_btn_round[$i - 1]));
		$wp_customize->add_control(
			new Jinr_Range_Control(
				$wp_customize,
				'jinr__button0' . $i . '_round',
				array(
					'label'    => '丸み(px)',
					'section'  => 'jinr__button0' . $i . '_tab',
					'settings' => 'jinr__button0' . $i . '_round',
					'type'     => 'range',
					'max'      => 60,
				)
			)
		);

		$wp_customize->add_setting('jinr__button0' . $i . '_width', array('default' => $jinr_btn_width[$i - 1]));
		$wp_customize->add_control(
			new Jinr_Range_Control(
				$wp_customize,
				'jinr__button0' . $i . '_width',
				array(
					'label'    => '横幅(px)',
					'section'  => 'jinr__button0' . $i . '_tab',
					'settings' => 'jinr__button0' . $i . '_width',
					'type'     => 'range',
					'max'      => 100,
					'min'      => 18,
				)
			)
		);

		$wp_customize->add_setting('jinr__button0' . $i . '_height', array('default' => $jinr_btn_height[$i - 1]));
		$wp_customize->add_control(
			new Jinr_Range_Control(
				$wp_customize,
				'jinr__button0' . $i . '_height',
				array(
					'label'    => '高さ(px)',
					'section'  => 'jinr__button0' . $i . '_tab',
					'settings' => 'jinr__button0' . $i . '_height',
					'type'     => 'range',
					'max'      => 40,
					'min'      => 3,
				)
			)
		);
		if ($i == 7 || $i == 8) {
			$wp_customize->add_setting('jinr__button0' . $i . '_arrow_select', array('default' => 'jin-ifont-arrowm'));
			$wp_customize->add_control(
				new Jinr_Base_Control(
					$wp_customize,
					'jinr__button0' . $i . '_arrow_select',
					array(
						'label'    => '矢印アイコン設定',
						'settings' => 'jinr__button0' . $i . '_arrow_select',
						'section'  => 'jinr__button0' . $i . '_tab',
						'type'     => 'radio',
						'choices'  => array(
							'none' => 'なし',
							'jin-ifont-arrow' => '',
							'jin-ifont-arrowm' => '',
							'jin-ifont-arrowthin' => '',
							'jin-ifont-v2arrow' => '',
							'jin-ifont-doublearrow' => '',
							'jin-ifont-v2arrowdouble' => '',
							'jin-ifont-arrowb' => '',
							'jin-ifont-arrowclear' => '',
							'jin-ifont-arrowcircle' => '',
							'jin-ifont-arrowbottom' => '',
							'jin-ifont-arrowbottomm' => '',
							'jin-ifont-arrowbottomthin' => '',
							'jin-ifont-v2arrowbottom' => '',
							'jin-ifont-arrowtop' => '',
							'jin-ifont-arrowtopm' => '',
							'jin-ifont-arrowtopthin' => '',
							'jin-ifont-v2arrowtop' => '',
						),

					)
				)
			);
		} else {
			$wp_customize->add_setting('jinr__button0' . $i . '_arrow_select', array('default' => 'none'));
			$wp_customize->add_control(
				new Jinr_Base_Control(
					$wp_customize,
					'jinr__button0' . $i . '_arrow_select',
					array(
						'label'    => '矢印アイコン設定',
						'settings' => 'jinr__button0' . $i . '_arrow_select',
						'section'  => 'jinr__button0' . $i . '_tab',
						'type'     => 'radio',
						'choices'  => array(
							'none' => 'なし',
							'jin-ifont-arrow' => '',
							'jin-ifont-arrowm' => '',
							'jin-ifont-arrowthin' => '',
							'jin-ifont-v2arrow' => '',
							'jin-ifont-doublearrow' => '',
							'jin-ifont-v2arrowdouble' => '',
							'jin-ifont-arrowb' => '',
							'jin-ifont-arrowclear' => '',
							'jin-ifont-arrowcircle' => '',
							'jin-ifont-arrowbottom' => '',
							'jin-ifont-arrowbottomm' => '',
							'jin-ifont-arrowbottomthin' => '',
							'jin-ifont-v2arrowbottom' => '',
							'jin-ifont-arrowtop' => '',
							'jin-ifont-arrowtopm' => '',
							'jin-ifont-arrowtopthin' => '',
							'jin-ifont-v2arrowtop' => '',
						),

					)
				)
			);
		}

		$wp_customize->add_setting('jinr__button' . $i . '_extra_settings3');
		$wp_customize->add_control(
			new Jinr_Base_Control(
				$wp_customize,
				'jinr__button' . $i . '_extra_settings3',
				array(
					'settings' => 'jinr__button' . $i . '_extra_settings3',
					'label'    => '詳細設定',
					'section'  => 'jinr__button0' . $i . '_tab',
					'type'     => 'hidden',
				)
			)
		);

		$wp_customize->add_setting('jinr__button0' . $i . '_shadow_size', array('default' => $jinr_btn_shadow[$i - 1]));
		$wp_customize->add_control(
			new Jinr_Base_Control(
				$wp_customize,
				'jinr__button0' . $i . '_shadow_size',
				array(
					'label'    => '影のサイズ',
					'section'  => 'jinr__button0' . $i . '_tab',
					'settings' => 'jinr__button0' . $i . '_shadow_size',
					'type'     => 'select',
					'choices'  => array(
						'd--button-shadow-none'   => 'なし',
						'd--button-shadow-small'  => '小さめ',
						'd--button-shadow-medium' => '普通',
						'd--button-shadow-large'  => '大きめ',
					),
				)
			)
		);

		$wp_customize->add_setting('jinr__button0' . $i . '_solid_hover', array('default' => $jinr_btn_solid_hover[$i - 1]));
		$wp_customize->add_control(
			new Jinr_Base_Control(
				$wp_customize,
				'jinr__button0' . $i . '_solid_hover',
				array(
					'label'    => 'カーソルしたときの動き',
					'section'  => 'jinr__button0' . $i . '_tab',
					'settings' => 'jinr__button0' . $i . '_solid_hover',
					'type'     => 'select',
					'choices'  => array(
						'none' => 'なし',
						'd--button-solid-hover-default' => '色を薄める',
						'd--button-solid-hover-up' => '浮かぶ',
						'd--button-solid-hover-down' => '沈む',
						'd--button-solid-hover-push' => '押し込む',
						'd--button-solid-hover-expand' => '膨らむ',
						'd--button-solid-hover-outlineleft' => '左からアウトライン化',
						'd--button-solid-hover-outlinecenter' => '中央からアウトライン化',
					),
				)
			)
		);

		$wp_customize->add_setting('jinr__button0' . $i . '_outline_hover', array('default' => $jinr_btn_outline_hover[$i - 1]));
		$wp_customize->add_control(
			new Jinr_Base_Control(
				$wp_customize,
				'jinr__button0' . $i . '_outline_hover',
				array(
					'label'    => 'カーソルしたときの動き',
					'section'  => 'jinr__button0' . $i . '_tab',
					'settings' => 'jinr__button0' . $i . '_outline_hover',
					'type'     => 'select',
					'choices'  => array(
						'none' => 'なし',
						'd--button-outline-hover-default' => '色を反転',
						'd--button-outline-hover-halftransparent' => '半透明',
						'd--button-outline-hover-up' => '浮かぶ',
						'd--button-outline-hover-down' => '沈む',
						'd--button-outline-hover-push' => '押し込む',
						'd--button-outline-hover-expand' => '膨らむ',
						'd--button-outline-hover-fillleft' => '左から塗り',
						'd--button-outline-hover-fillcenter' => '中央からフェード',
					),
				)
			)
		);

		$wp_customize->add_setting('jinr__button0' . $i . '_arrow_hover', array('default' => $jinr_btn_arrow_hover[$i - 1]));
		$wp_customize->add_control(
			new Jinr_Base_Control(
				$wp_customize,
				'jinr__button0' . $i . '_arrow_hover',
				array(
					'label'    => 'カーソルしたときの動き',
					'section'  => 'jinr__button0' . $i . '_tab',
					'settings' => 'jinr__button0' . $i . '_arrow_hover',
					'type'     => 'select',
					'choices'  => array(
						'none' => 'なし',
						'd--button-arrow-hover-right' => '右にスライド',
					),
				)
			)
		);

		$wp_customize->add_setting('jinr__button0' . $i . '_solid_animation', array('default' => 'none'));
		$wp_customize->add_control(
			new Jinr_Base_Control(
				$wp_customize,
				'jinr__button0' . $i . '_solid_animation',
				array(
					'label'    => '表示アニメーション',
					'section'  => 'jinr__button0' . $i . '_tab',
					'settings' => 'jinr__button0' . $i . '_solid_animation',
					'type'     => 'select',
					'choices'  => array(
						'none' => 'なし',
						'd--button-solid-animation-fade' => 'フェード',
						'd--button-solid-animation-fadeup' => '下からフェード',
						'd--button-solid-animation-expand' => '膨らむ',
						'd--button-solid-animation-push' => '押し込む',
					),
				)
			)
		);

		$wp_customize->add_setting('jinr__button0' . $i . '_outline_animation', array('default' => 'none'));
		$wp_customize->add_control(
			new Jinr_Base_Control(
				$wp_customize,
				'jinr__button0' . $i . '_outline_animation',
				array(
					'label'    => '表示アニメーション',
					'section'  => 'jinr__button0' . $i . '_tab',
					'settings' => 'jinr__button0' . $i . '_outline_animation',
					'type'     => 'select',
					'choices'  => array(
						'none' => 'なし',
						'd--button-outline-animation-fade' => 'フェード',
						'd--button-outline-animation-fadeup' => '下からフェード',
						'd--button-outline-animation-expand' => '膨らむ',
						'd--button-outline-animation-push' => '押し込む',
					),
				)
			)
		);

		$wp_customize->add_setting('jinr__button0' . $i . '_arrow_animation', array('default' => 'none'));
		$wp_customize->add_control(
			new Jinr_Base_Control(
				$wp_customize,
				'jinr__button0' . $i . '_arrow_animation',
				array(
					'label'    => '表示アニメーション',
					'section'  => 'jinr__button0' . $i . '_tab',
					'settings' => 'jinr__button0' . $i . '_arrow_animation',
					'type'     => 'select',
					'choices'  => array(
						'none' => 'なし',
						'd--button-arrow-animation-fade' => 'フェード',
						'd--button-arrow-animation-fadetoright' => '左からフェード',
						'd--button-arrow-animation-slidetoright' => '右に軽くスライド',
						'd--button-arrow-animation-drawarrow' => '矢印を描画',
					),
				)
			)
		);

		$wp_customize->add_setting('jinr__button' . $i . '_extra_settings4', array('transport' => 'postMessage'));
		$wp_customize->add_control(
			new Jinr_Base_Control(
				$wp_customize,
				'jinr__button' . $i . '_extra_settings4',
				array(
					'settings' => 'jinr__button' . $i . '_extra_settings4',
					'label'    => 'ボタンの登録名を変更',
					'section'  => 'jinr__button0' . $i . '_tab',
					'type'     => 'hidden',
				)
			)
		);
		$wp_customize->add_setting('jinr__button0' . $i . '_name', array('default' => $jinr_btn_button_name[$i - 1]));
		$wp_customize->add_control(
			new Jinr_Base_Control(
				$wp_customize,
				'jinr__button0' . $i . '_name',
				array(
					'label'    => '登録名',
					'section'  => 'jinr__button0' . $i . '_tab',
					'settings' => 'jinr__button0' . $i . '_name',
					'type' => 'text',
				)
			)
		);
	}
}
add_action('customize_register', 'jinr__add_section_button_design');


function jinr__button01_name()
{
	global $jinr_btn_button_name;
	return get_theme_mod('jinr__button01_name', $jinr_btn_button_name[0]);
}
function jinr__button01_design()
{
	global $jinr_btn_button_type;
	return get_theme_mod('jinr__button01_design', $jinr_btn_button_type[0]);
}
function jinr__button01_color_type()
{
	return get_theme_mod('jinr__button01_color_type', 'simplecolor');
}
function jinr__button01_color()
{
	global $jinr_btn_color;
	return get_theme_mod('jinr__button01_color', $jinr_btn_color[0]);
}
function jinr__button01_gradation_select()
{
	return get_theme_mod('jinr__button01_gradation_select', 'd--jinr-gradation1');
}
function jinr__button01_round()
{
	global $jinr_btn_round;
	return get_theme_mod('jinr__button01_round', $jinr_btn_round[0]);
}
function jinr__button01_width()
{
	global $jinr_btn_width;
	return get_theme_mod('jinr__button01_width', $jinr_btn_width[0]);
}
function jinr__button01_height()
{
	global $jinr_btn_height;
	return get_theme_mod('jinr__button01_height', $jinr_btn_height[0]);
}
function jinr__button01_shadow_size()
{
	global $jinr_btn_shadow;
	return get_theme_mod('jinr__button01_shadow_size', $jinr_btn_shadow[0]);
}
function jinr__button01_text_size()
{
	global $jinr_btn_text_size;
	return get_theme_mod('jinr__button01_text_size', $jinr_btn_text_size[0]);
}
function jinr__button01_text_color()
{
	global $jinr_btn_text_color;
	return get_theme_mod('jinr__button01_text_color', $jinr_btn_text_color[0]);
}
function jinr__button01_solid_hover()
{
	global $jinr_btn_solid_hover;
	return get_theme_mod('jinr__button01_solid_hover', $jinr_btn_solid_hover[0]);
}
function jinr__button01_outline_hover()
{
	global $jinr_btn_outline_hover;
	return get_theme_mod('jinr__button01_outline_hover', $jinr_btn_outline_hover[0]);
}
function jinr__button01_arrow_hover()
{
	global $jinr_btn_arrow_hover;
	return get_theme_mod('jinr__button01_arrow_hover', $jinr_btn_arrow_hover[0]);
}
function jinr__button01_solid_animation()
{
	return get_theme_mod('jinr__button01_solid_animation', 'none');
}
function jinr__button01_outline_animation()
{
	return get_theme_mod('jinr__button01_outline_animation', 'none');
}
function jinr__button01_arrow_animation()
{
	return get_theme_mod('jinr__button01_arrow_animation', 'none');
}
function jinr__button01_arrow_select()
{
	return get_theme_mod('jinr__button01_arrow_select', 'none');
}

function jinr__button02_name()
{
	global $jinr_btn_button_name;
	return get_theme_mod('jinr__button02_name', $jinr_btn_button_name[1]);
}
function jinr__button02_design()
{
	global $jinr_btn_button_type;
	return get_theme_mod('jinr__button02_design', $jinr_btn_button_type[1]);
}
function jinr__button02_color_type()
{
	return get_theme_mod('jinr__button02_color_type', 'simplecolor');
}
function jinr__button02_color()
{
	global $jinr_btn_color;
	return get_theme_mod('jinr__button02_color', $jinr_btn_color[1]);
}
function jinr__button02_gradation_select()
{
	return get_theme_mod('jinr__button02_gradation_select', 'd--jinr-gradation1');
}
function jinr__button02_round()
{
	global $jinr_btn_round;
	return get_theme_mod('jinr__button02_round', $jinr_btn_round[1]);
}
function jinr__button02_width()
{
	global $jinr_btn_width;
	return get_theme_mod('jinr__button02_width', $jinr_btn_width[1]);
}
function jinr__button02_height()
{
	global $jinr_btn_height;
	return get_theme_mod('jinr__button02_height', $jinr_btn_height[1]);
}
function jinr__button02_shadow_size()
{
	global $jinr_btn_shadow;
	return get_theme_mod('jinr__button02_shadow_size', $jinr_btn_shadow[1]);
}
function jinr__button02_text_size()
{
	global $jinr_btn_text_size;
	return get_theme_mod('jinr__button02_text_size', $jinr_btn_text_size[1]);
}
function jinr__button02_text_color()
{
	global $jinr_btn_text_color;
	return get_theme_mod('jinr__button02_text_color', $jinr_btn_text_color[1]);
}
function jinr__button02_solid_hover()
{
	global $jinr_btn_solid_hover;
	return get_theme_mod('jinr__button02_solid_hover', $jinr_btn_solid_hover[1]);
}
function jinr__button02_outline_hover()
{
	global $jinr_btn_outline_hover;
	return get_theme_mod('jinr__button02_outline_hover', $jinr_btn_outline_hover[1]);
}
function jinr__button02_arrow_hover()
{
	global $jinr_btn_arrow_hover;
	return get_theme_mod('jinr__button02_arrow_hover', $jinr_btn_arrow_hover[1]);
}
function jinr__button02_solid_animation()
{
	return get_theme_mod('jinr__button02_solid_animation', 'none');
}
function jinr__button02_outline_animation()
{
	return get_theme_mod('jinr__button02_outline_animation', 'none');
}
function jinr__button02_arrow_animation()
{
	return get_theme_mod('jinr__button02_arrow_animation', 'none');
}
function jinr__button02_arrow_select()
{
	return get_theme_mod('jinr__button02_arrow_select', 'none');
}

function jinr__button03_name()
{
	global $jinr_btn_button_name;
	return get_theme_mod('jinr__button03_name', $jinr_btn_button_name[2]);
}
function jinr__button03_design()
{
	global $jinr_btn_button_type;
	return get_theme_mod('jinr__button03_design', $jinr_btn_button_type[2]);
}
function jinr__button03_color_type()
{
	return get_theme_mod('jinr__button03_color_type', 'simplecolor');
}
function jinr__button03_color()
{
	global $jinr_btn_color;
	return get_theme_mod('jinr__button03_color', $jinr_btn_color[2]);
}
function jinr__button03_gradation_select()
{
	return get_theme_mod('jinr__button03_gradation_select', 'd--jinr-gradation1');
}
function jinr__button03_round()
{
	global $jinr_btn_round;
	return get_theme_mod('jinr__button03_round', $jinr_btn_round[2]);
}
function jinr__button03_width()
{
	global $jinr_btn_width;
	return get_theme_mod('jinr__button03_width', $jinr_btn_width[2]);
}
function jinr__button03_height()
{
	global $jinr_btn_height;
	return get_theme_mod('jinr__button03_height', $jinr_btn_height[2]);
}
function jinr__button03_shadow_size()
{
	global $jinr_btn_shadow;
	return get_theme_mod('jinr__button03_shadow_size', $jinr_btn_shadow[2]);
}
function jinr__button03_text_size()
{
	global $jinr_btn_text_size;
	return get_theme_mod('jinr__button03_text_size', $jinr_btn_text_size[2]);
}
function jinr__button03_text_color()
{
	global $jinr_btn_text_color;
	return get_theme_mod('jinr__button03_text_color', $jinr_btn_text_color[2]);
}
function jinr__button03_solid_hover()
{
	global $jinr_btn_solid_hover;
	return get_theme_mod('jinr__button03_solid_hover', $jinr_btn_solid_hover[2]);
}
function jinr__button03_outline_hover()
{
	global $jinr_btn_outline_hover;
	return get_theme_mod('jinr__button03_outline_hover', $jinr_btn_outline_hover[2]);
}
function jinr__button03_arrow_hover()
{
	global $jinr_btn_arrow_hover;
	return get_theme_mod('jinr__button03_arrow_hover', $jinr_btn_arrow_hover[2]);
}
function jinr__button03_solid_animation()
{
	return get_theme_mod('jinr__button03_solid_animation', 'none');
}
function jinr__button03_outline_animation()
{
	return get_theme_mod('jinr__button03_outline_animation', 'none');
}
function jinr__button03_arrow_animation()
{
	return get_theme_mod('jinr__button03_arrow_animation', 'none');
}
function jinr__button03_arrow_select()
{
	return get_theme_mod('jinr__button03_arrow_select', 'none');
}

function jinr__button04_name()
{
	global $jinr_btn_button_name;
	return get_theme_mod('jinr__button04_name', $jinr_btn_button_name[3]);
}
function jinr__button04_design()
{
	global $jinr_btn_button_type;
	return get_theme_mod('jinr__button04_design', $jinr_btn_button_type[3]);
}
function jinr__button04_color_type()
{
	return get_theme_mod('jinr__button04_color_type', 'simplecolor');
}
function jinr__button04_color()
{
	global $jinr_btn_color;
	return get_theme_mod('jinr__button04_color', $jinr_btn_color[3]);
}
function jinr__button04_gradation_select()
{
	return get_theme_mod('jinr__button04_gradation_select', 'd--jinr-gradation1');
}
function jinr__button04_round()
{
	global $jinr_btn_round;
	return get_theme_mod('jinr__button04_round', $jinr_btn_round[3]);
}
function jinr__button04_width()
{
	global $jinr_btn_width;
	return get_theme_mod('jinr__button04_width', $jinr_btn_width[3]);
}
function jinr__button04_height()
{
	global $jinr_btn_height;
	return get_theme_mod('jinr__button04_height', $jinr_btn_height[3]);
}
function jinr__button04_shadow_size()
{
	global $jinr_btn_shadow;
	return get_theme_mod('jinr__button04_shadow_size', $jinr_btn_shadow[3]);
}
function jinr__button04_text_size()
{
	global $jinr_btn_text_size;
	return get_theme_mod('jinr__button04_text_size', $jinr_btn_text_size[3]);
}
function jinr__button04_text_color()
{
	global $jinr_btn_text_color;
	return get_theme_mod('jinr__button04_text_color', $jinr_btn_text_color[3]);
}
function jinr__button04_solid_hover()
{
	global $jinr_btn_solid_hover;
	return get_theme_mod('jinr__button04_solid_hover', $jinr_btn_solid_hover[3]);
}
function jinr__button04_outline_hover()
{
	global $jinr_btn_outline_hover;
	return get_theme_mod('jinr__button04_outline_hover', $jinr_btn_outline_hover[3]);
}
function jinr__button04_arrow_hover()
{
	global $jinr_btn_arrow_hover;
	return get_theme_mod('jinr__button04_arrow_hover', $jinr_btn_arrow_hover[3]);
}
function jinr__button04_solid_animation()
{
	return get_theme_mod('jinr__button04_solid_animation', 'none');
}
function jinr__button04_outline_animation()
{
	return get_theme_mod('jinr__button04_outline_animation', 'none');
}
function jinr__button04_arrow_animation()
{
	return get_theme_mod('jinr__button04_arrow_animation', 'none');
}
function jinr__button04_arrow_select()
{
	return get_theme_mod('jinr__button04_arrow_select', 'none');
}

function jinr__button05_name()
{
	global $jinr_btn_button_name;
	return get_theme_mod('jinr__button05_name', $jinr_btn_button_name[4]);
}
function jinr__button05_design()
{
	global $jinr_btn_button_type;
	return get_theme_mod('jinr__button05_design', $jinr_btn_button_type[4]);
}
function jinr__button05_color_type()
{
	return get_theme_mod('jinr__button05_color_type', 'simplecolor');
}
function jinr__button05_color()
{
	global $jinr_btn_color;
	return get_theme_mod('jinr__button05_color', $jinr_btn_color[4]);
}
function jinr__button05_gradation_select()
{
	return get_theme_mod('jinr__button05_gradation_select', 'd--jinr-gradation1');
}
function jinr__button05_round()
{
	global $jinr_btn_round;
	return get_theme_mod('jinr__button05_round', $jinr_btn_round[4]);
}
function jinr__button05_width()
{
	global $jinr_btn_width;
	return get_theme_mod('jinr__button05_width', $jinr_btn_width[4]);
}
function jinr__button05_height()
{
	global $jinr_btn_height;
	return get_theme_mod('jinr__button05_height', $jinr_btn_height[4]);
}
function jinr__button05_shadow_size()
{
	global $jinr_btn_shadow;
	return get_theme_mod('jinr__button05_shadow_size', $jinr_btn_shadow[4]);
}
function jinr__button05_text_size()
{
	global $jinr_btn_text_size;
	return get_theme_mod('jinr__button05_text_size', $jinr_btn_text_size[4]);
}
function jinr__button05_text_color()
{
	global $jinr_btn_text_color;
	return get_theme_mod('jinr__button05_text_color', $jinr_btn_text_color[4]);
}
function jinr__button05_solid_hover()
{
	global $jinr_btn_solid_hover;
	return get_theme_mod('jinr__button05_solid_hover', $jinr_btn_solid_hover[4]);
}
function jinr__button05_outline_hover()
{
	global $jinr_btn_outline_hover;
	return get_theme_mod('jinr__button05_outline_hover', $jinr_btn_outline_hover[4]);
}
function jinr__button05_arrow_hover()
{
	global $jinr_btn_arrow_hover;
	return get_theme_mod('jinr__button05_arrow_hover', $jinr_btn_arrow_hover[4]);
}
function jinr__button05_solid_animation()
{
	return get_theme_mod('jinr__button05_solid_animation', 'none');
}
function jinr__button05_outline_animation()
{
	return get_theme_mod('jinr__button05_outline_animation', 'none');
}
function jinr__button05_arrow_animation()
{
	return get_theme_mod('jinr__button05_arrow_animation', 'none');
}
function jinr__button05_arrow_select()
{
	return get_theme_mod('jinr__button05_arrow_select', 'none');
}

function jinr__button06_name()
{
	global $jinr_btn_button_name;
	return get_theme_mod('jinr__button06_name', $jinr_btn_button_name[5]);
}
function jinr__button06_design()
{
	global $jinr_btn_button_type;
	return get_theme_mod('jinr__button06_design', $jinr_btn_button_type[5]);
}
function jinr__button06_color_type()
{
	return get_theme_mod('jinr__button06_color_type', 'simplecolor');
}
function jinr__button06_color()
{
	global $jinr_btn_color;
	return get_theme_mod('jinr__button06_color', $jinr_btn_color[5]);
}
function jinr__button06_gradation_select()
{
	return get_theme_mod('jinr__button06_gradation_select', 'd--jinr-gradation1');
}
function jinr__button06_round()
{
	global $jinr_btn_round;
	return get_theme_mod('jinr__button06_round', $jinr_btn_round[5]);
}
function jinr__button06_width()
{
	global $jinr_btn_width;
	return get_theme_mod('jinr__button06_width', $jinr_btn_width[5]);
}
function jinr__button06_height()
{
	global $jinr_btn_height;
	return get_theme_mod('jinr__button06_height', $jinr_btn_height[5]);
}
function jinr__button06_shadow_size()
{
	global $jinr_btn_shadow;
	return get_theme_mod('jinr__button06_shadow_size', $jinr_btn_shadow[5]);
}
function jinr__button06_text_size()
{
	global $jinr_btn_text_size;
	return get_theme_mod('jinr__button06_text_size', $jinr_btn_text_size[5]);
}
function jinr__button06_text_color()
{
	global $jinr_btn_text_color;
	return get_theme_mod('jinr__button06_text_color', $jinr_btn_text_color[5]);
}
function jinr__button06_solid_hover()
{
	global $jinr_btn_solid_hover;
	return get_theme_mod('jinr__button06_solid_hover', $jinr_btn_solid_hover[5]);
}
function jinr__button06_outline_hover()
{
	global $jinr_btn_outline_hover;
	return get_theme_mod('jinr__button06_outline_hover', $jinr_btn_outline_hover[5]);
}
function jinr__button06_arrow_hover()
{
	global $jinr_btn_arrow_hover;
	return get_theme_mod('jinr__button06_arrow_hover', $jinr_btn_arrow_hover[5]);
}
function jinr__button06_solid_animation()
{
	return get_theme_mod('jinr__button06_solid_animation', 'none');
}
function jinr__button06_outline_animation()
{
	return get_theme_mod('jinr__button06_outline_animation', 'none');
}
function jinr__button06_arrow_animation()
{
	return get_theme_mod('jinr__button06_arrow_animation', 'none');
}
function jinr__button06_arrow_select()
{
	return get_theme_mod('jinr__button06_arrow_select', 'none');
}

function jinr__button07_name()
{
	global $jinr_btn_button_name;
	return get_theme_mod('jinr__button07_name', $jinr_btn_button_name[6]);
}
function jinr__button07_design()
{
	global $jinr_btn_button_type;
	return get_theme_mod('jinr__button07_design', $jinr_btn_button_type[6]);
}
function jinr__button07_color_type()
{
	return get_theme_mod('jinr__button07_color_type', 'gradation');
}
function jinr__button07_color()
{
	global $jinr_btn_color;
	return get_theme_mod('jinr__button07_color', $jinr_btn_color[6]);
}
function jinr__button07_gradation_select()
{
	return get_theme_mod('jinr__button07_gradation_select', 'd--jinr-gradation1');
}
function jinr__button07_round()
{
	global $jinr_btn_round;
	return get_theme_mod('jinr__button07_round', $jinr_btn_round[6]);
}
function jinr__button07_width()
{
	global $jinr_btn_width;
	return get_theme_mod('jinr__button07_width', $jinr_btn_width[6]);
}
function jinr__button07_height()
{
	global $jinr_btn_height;
	return get_theme_mod('jinr__button07_height', $jinr_btn_height[6]);
}
function jinr__button07_shadow_size()
{
	global $jinr_btn_shadow;
	return get_theme_mod('jinr__button07_shadow_size', $jinr_btn_shadow[6]);
}
function jinr__button07_text_size()
{
	global $jinr_btn_text_size;
	return get_theme_mod('jinr__button07_text_size', $jinr_btn_text_size[6]);
}
function jinr__button07_text_color()
{
	global $jinr_btn_text_color;
	return get_theme_mod('jinr__button07_text_color', $jinr_btn_text_color[6]);
}
function jinr__button07_solid_hover()
{
	global $jinr_btn_solid_hover;
	return get_theme_mod('jinr__button07_solid_hover', $jinr_btn_solid_hover[6]);
}
function jinr__button07_outline_hover()
{
	global $jinr_btn_outline_hover;
	return get_theme_mod('jinr__button07_outline_hover', $jinr_btn_outline_hover[6]);
}
function jinr__button07_arrow_hover()
{
	global $jinr_btn_arrow_hover;
	return get_theme_mod('jinr__button07_arrow_hover', $jinr_btn_arrow_hover[6]);
}
function jinr__button07_solid_animation()
{
	return get_theme_mod('jinr__button07_solid_animation', 'none');
}
function jinr__button07_outline_animation()
{
	return get_theme_mod('jinr__button07_outline_animation', 'none');
}
function jinr__button07_arrow_animation()
{
	return get_theme_mod('jinr__button07_arrow_animation', 'none');
}
function jinr__button07_arrow_select()
{
	return get_theme_mod('jinr__button07_arrow_select', 'jin-ifont-arrowm');
}

function jinr__button08_name()
{
	global $jinr_btn_button_name;
	return get_theme_mod('jinr__button08_name', $jinr_btn_button_name[7]);
}
function jinr__button08_design()
{
	global $jinr_btn_button_type;
	return get_theme_mod('jinr__button08_design', $jinr_btn_button_type[7]);
}
function jinr__button08_color_type()
{
	return get_theme_mod('jinr__button08_color_type', 'simplecolor');
}
function jinr__button08_color()
{
	global $jinr_btn_color;
	return get_theme_mod('jinr__button08_color', $jinr_btn_color[7]);
}
function jinr__button08_gradation_select()
{
	return get_theme_mod('jinr__button08_gradation_select', 'd--jinr-gradation1');
}
function jinr__button08_round()
{
	global $jinr_btn_round;
	return get_theme_mod('jinr__button08_round', $jinr_btn_round[7]);
}
function jinr__button08_width()
{
	global $jinr_btn_width;
	return get_theme_mod('jinr__button08_width', $jinr_btn_width[7]);
}
function jinr__button08_height()
{
	global $jinr_btn_height;
	return get_theme_mod('jinr__button08_height', $jinr_btn_height[7]);
}
function jinr__button08_shadow_size()
{
	global $jinr_btn_shadow;
	return get_theme_mod('jinr__button08_shadow_size', $jinr_btn_shadow[7]);
}
function jinr__button08_text_size()
{
	global $jinr_btn_text_size;
	return get_theme_mod('jinr__button08_text_size', $jinr_btn_text_size[7]);
}
function jinr__button08_text_color()
{
	global $jinr_btn_text_color;
	return get_theme_mod('jinr__button08_text_color', $jinr_btn_text_color[7]);
}
function jinr__button08_solid_hover()
{
	global $jinr_btn_solid_hover;
	return get_theme_mod('jinr__button08_solid_hover', $jinr_btn_solid_hover[7]);
}
function jinr__button08_outline_hover()
{
	global $jinr_btn_outline_hover;
	return get_theme_mod('jinr__button08_outline_hover', $jinr_btn_outline_hover[7]);
}
function jinr__button08_arrow_hover()
{
	global $jinr_btn_arrow_hover;
	return get_theme_mod('jinr__button08_arrow_hover', $jinr_btn_arrow_hover[7]);
}
function jinr__button08_solid_animation()
{
	return get_theme_mod('jinr__button08_solid_animation', 'none');
}
function jinr__button08_outline_animation()
{
	return get_theme_mod('jinr__button08_outline_animation', 'none');
}
function jinr__button08_arrow_animation()
{
	return get_theme_mod('jinr__button08_arrow_animation', 'none');
}
function jinr__button08_arrow_select()
{
	return get_theme_mod('jinr__button08_arrow_select', 'jin-ifont-arrowm');
}
function jinr__button09_name()
{
	global $jinr_btn_button_name;
	return get_theme_mod('jinr__button09_name', $jinr_btn_button_name[8]);
}
function jinr__button09_design()
{
	global $jinr_btn_button_type;
	return get_theme_mod('jinr__button09_design', $jinr_btn_button_type[8]);
}
function jinr__button09_color_type()
{
	return get_theme_mod('jinr__button09_color_type', 'simplecolor');
}
function jinr__button09_color()
{
	global $jinr_btn_color;
	return get_theme_mod('jinr__button09_color', $jinr_btn_color[8]);
}
function jinr__button09_gradation_select()
{
	return get_theme_mod('jinr__button09_gradation_select', 'd--jinr-gradation1');
}
function jinr__button09_round()
{
	global $jinr_btn_round;
	return get_theme_mod('jinr__button09_round', $jinr_btn_round[8]);
}
function jinr__button09_width()
{
	global $jinr_btn_width;
	return get_theme_mod('jinr__button09_width', $jinr_btn_width[8]);
}
function jinr__button09_height()
{
	global $jinr_btn_height;
	return get_theme_mod('jinr__button09_height', $jinr_btn_height[8]);
}
function jinr__button09_shadow_size()
{
	global $jinr_btn_shadow;
	return get_theme_mod('jinr__button09_shadow_size', $jinr_btn_shadow[8]);
}
function jinr__button09_text_size()
{
	global $jinr_btn_text_size;
	return get_theme_mod('jinr__button09_text_size', $jinr_btn_text_size[8]);
}
function jinr__button09_text_color()
{
	global $jinr_btn_text_color;
	return get_theme_mod('jinr__button09_text_color', $jinr_btn_text_color[8]);
}
function jinr__button09_solid_hover()
{
	global $jinr_btn_solid_hover;
	return get_theme_mod('jinr__button09_solid_hover', $jinr_btn_solid_hover[8]);
}
function jinr__button09_outline_hover()
{
	global $jinr_btn_outline_hover;
	return get_theme_mod('jinr__button09_outline_hover', $jinr_btn_outline_hover[8]);
}
function jinr__button09_arrow_hover()
{
	global $jinr_btn_arrow_hover;
	return get_theme_mod('jinr__button09_arrow_hover', $jinr_btn_arrow_hover[8]);
}
function jinr__button09_solid_animation()
{
	return get_theme_mod('jinr__button09_solid_animation', 'none');
}
function jinr__button09_outline_animation()
{
	return get_theme_mod('jinr__button09_outline_animation', 'none');
}
function jinr__button09_arrow_animation()
{
	return get_theme_mod('jinr__button09_arrow_animation', 'none');
}
function jinr__button09_arrow_select()
{
	return get_theme_mod('jinr__button09_arrow_select', 'none');
}
function jinr__button010_name()
{
	global $jinr_btn_button_name;
	return get_theme_mod('jinr__button010_name', $jinr_btn_button_name[9]);
}
function jinr__button010_design()
{
	global $jinr_btn_button_type;
	return get_theme_mod('jinr__button010_design', $jinr_btn_button_type[9]);
}
function jinr__button010_color_type()
{
	return get_theme_mod('jinr__button010_color_type', 'simplecolor');
}
function jinr__button010_color()
{
	global $jinr_btn_color;
	return get_theme_mod('jinr__button010_color', $jinr_btn_color[9]);
}
function jinr__button010_gradation_select()
{
	return get_theme_mod('jinr__button010_gradation_select', 'd--jinr-gradation1');
}
function jinr__button010_round()
{
	global $jinr_btn_round;
	return get_theme_mod('jinr__button010_round', $jinr_btn_round[9]);
}
function jinr__button010_width()
{
	global $jinr_btn_width;
	return get_theme_mod('jinr__button010_width', $jinr_btn_width[9]);
}
function jinr__button010_height()
{
	global $jinr_btn_height;
	return get_theme_mod('jinr__button010_height', $jinr_btn_height[9]);
}
function jinr__button010_shadow_size()
{
	global $jinr_btn_shadow;
	return get_theme_mod('jinr__button010_shadow_size', $jinr_btn_shadow[9]);
}
function jinr__button010_text_size()
{
	global $jinr_btn_text_size;
	return get_theme_mod('jinr__button010_text_size', $jinr_btn_text_size[9]);
}
function jinr__button010_text_color()
{
	global $jinr_btn_text_color;
	return get_theme_mod('jinr__button010_text_color', $jinr_btn_text_color[9]);
}
function jinr__button010_solid_hover()
{
	global $jinr_btn_solid_hover;
	return get_theme_mod('jinr__button010_solid_hover', $jinr_btn_solid_hover[9]);
}
function jinr__button010_outline_hover()
{
	global $jinr_btn_outline_hover;
	return get_theme_mod('jinr__button010_outline_hover', $jinr_btn_outline_hover[9]);
}
function jinr__button010_arrow_hover()
{
	global $jinr_btn_arrow_hover;
	return get_theme_mod('jinr__button010_arrow_hover', $jinr_btn_arrow_hover[9]);
}
function jinr__button010_solid_animation()
{
	return get_theme_mod('jinr__button010_solid_animation', 'none');
}
function jinr__button010_outline_animation()
{
	return get_theme_mod('jinr__button010_outline_animation', 'none');
}
function jinr__button010_arrow_animation()
{
	return get_theme_mod('jinr__button010_arrow_animation', 'none');
}
function jinr__button010_arrow_select()
{
	return get_theme_mod('jinr__button010_arrow_select', 'none');
}
