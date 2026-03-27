<?php

/*吹き出し登録*/

function jinr__add_section_fukidashi($wp_customize)
{

	$query['autofocus[section]'] = 'jinr__gradation_setting_tab';
	$section_link = add_query_arg($query, admin_url('customize.php'));

	$wp_customize->add_panel(
		'jinr__fukidashi_panel',
		array(
			'title'    => '吹き出し',
			'priority' => 9,
		)
	);

	for ($i = 1; $i <= 10; $i++) {

		${'fukidashi' . $i . '_register_name'} = 'jinr__fukidashi' . $i . '_register_name';
		${'fukidashi' . $i . '_register_name'} = ${'fukidashi' . $i . '_register_name'}();

		$wp_customize->add_section(
			'jinr__fukidashi' . $i . '_tab',
			array(
				'title'    => ${'fukidashi' . $i . '_register_name'},
				'panel'    => 'jinr__fukidashi_panel',
				'priority' => $i,
			)
		);
		$wp_customize->add_setting('jinr__fukidashi_preview' . $i . '_settings1');
		$wp_customize->add_control(
			new Jinr_Base_Control(
				$wp_customize,
				'jinr__fukidashi_preview' . $i . '_settings1',
				array(
					'settings' => 'jinr__fukidashi_preview' . $i . '_settings1',
					'label'    => 'Preview',
					'section'  => 'jinr__fukidashi' . $i . '_tab',
					'type'     => 'hidden',
				)
			)
		);
		$wp_customize->add_setting(
			'jinr__fukidashi_preview' . $i . '',
			array(
				'default' => '',
			)
		);
		$wp_customize->add_control(
			new Jinr_Button_Preview_Control(
				$wp_customize,
				'jinr__fukidashi_preview' . $i . '',
				array(
					'label'      => 'Preview',
					'section'    => 'jinr__fukidashi' . $i . '_tab',
					'settings'   => 'jinr__fukidashi_preview' . $i . '',
					'type'       => 'fukidashi',
					'preview_id' => 'JinrFukidashi' . $i . '',
				)
			)
		);

		$wp_customize->add_setting('jinr__fukidashi' . $i . '_extra_settings1');
		$wp_customize->add_control(
			new Jinr_Base_Control(
				$wp_customize,
				'jinr__fukidashi' . $i . '_extra_settings1',
				array(
					'settings' => 'jinr__fukidashi' . $i . '_extra_settings1',
					'label'    => 'キャラクターの設定',
					'section'  => 'jinr__fukidashi' . $i . '_tab',
					'type'     => 'hidden',
				)
			)
		);

		if ($i <= 4) {
			$wp_customize->add_setting('jinr__fukidashi' . $i . '_image', array('default' => get_template_directory_uri() . '/lib/img/image_setting.png'));
		} elseif ($i == 5) {
			$wp_customize->add_setting('jinr__fukidashi' . $i . '_image', array('default' => get_template_directory_uri() . '/lib/img/woman1.png'));
		} elseif ($i == 6) {
			$wp_customize->add_setting('jinr__fukidashi' . $i . '_image', array('default' => get_template_directory_uri() . '/lib/img/woman2.png'));
		} elseif ($i == 7) {
			$wp_customize->add_setting('jinr__fukidashi' . $i . '_image', array('default' => get_template_directory_uri() . '/lib/img/woman3.png'));
		} elseif ($i == 8) {
			$wp_customize->add_setting('jinr__fukidashi' . $i . '_image', array('default' => get_template_directory_uri() . '/lib/img/man1.png'));
		} elseif ($i == 9) {
			$wp_customize->add_setting('jinr__fukidashi' . $i . '_image', array('default' => get_template_directory_uri() . '/lib/img/man2.png'));
		} elseif ($i == 10) {
			$wp_customize->add_setting('jinr__fukidashi' . $i . '_image', array('default' => get_template_directory_uri() . '/lib/img/man3.png'));
		}
		$wp_customize->add_control(
			new WP_Customize_Image_Control(
				$wp_customize,
				'jinr__fukidashi' . $i . '_image',
				array(
					'label'    => 'キャラクター画像設定',
					'section'  => 'jinr__fukidashi' . $i . '_tab',
					'settings' => 'jinr__fukidashi' . $i . '_image',
					'description' => '推奨サイズ【 150 x 150 】',
				)
			)
		);

		if ($i <= 4) {
			$wp_customize->add_setting('jinr__fukidashi' . $i . '_name', array('default' => ''));
		} elseif ($i == 5) {
			$wp_customize->add_setting('jinr__fukidashi' . $i . '_name', array('default' => 'プリセット１'));
		} elseif ($i == 6) {
			$wp_customize->add_setting('jinr__fukidashi' . $i . '_name', array('default' => 'プリセット２'));
		} elseif ($i == 7) {
			$wp_customize->add_setting('jinr__fukidashi' . $i . '_name', array('default' => 'プリセット３'));
		} elseif ($i == 8) {
			$wp_customize->add_setting('jinr__fukidashi' . $i . '_name', array('default' => 'プリセット４'));
		} elseif ($i == 9) {
			$wp_customize->add_setting('jinr__fukidashi' . $i . '_name', array('default' => 'プリセット５'));
		} elseif ($i == 10) {
			$wp_customize->add_setting('jinr__fukidashi' . $i . '_name', array('default' => 'プリセット６'));
		}
		$wp_customize->add_control(
			new Jinr_Base_Control(
				$wp_customize,
				'jinr__fukidashi' . $i . '_name',
				array(
					'settings' => 'jinr__fukidashi' . $i . '_name',
					'label'    => 'キャラクター名',
					'section'  => 'jinr__fukidashi' . $i . '_tab',
					'type'     => 'text',
				)
			)
		);

		$wp_customize->add_setting('jinr__fukidashi' . $i . '_extra_settings2');
		$wp_customize->add_control(
			new Jinr_Base_Control(
				$wp_customize,
				'jinr__fukidashi' . $i . '_extra_settings2',
				array(
					'settings' => 'jinr__fukidashi' . $i . '_extra_settings2',
					'label'    => '吹き出し部分の設定',
					'section'  => 'jinr__fukidashi' . $i . '_tab',
					'type'     => 'hidden',
				)
			)
		);

		$wp_customize->add_setting('jinr__fukidashi' . $i . '_type', array('default' => 'd--fukidashi-chat'));
		$wp_customize->add_control(
			new Jinr_Base_Control(
				$wp_customize,
				'jinr__fukidashi' . $i . '_type',
				array(
					'settings' => 'jinr__fukidashi' . $i . '_type',
					'label'    => '吹き出しのタイプ',
					'section'  => 'jinr__fukidashi' . $i . '_tab',
					'type'     => 'radio',
					'choices'  => array(
						'd--fukidashi-chat'       => '',
						'd--fukidashi-innervoice' => '',
						'd--fukidashi-interview'  => '',
					),
				)
			)
		);

		$wp_customize->add_setting('jinr__fukidashi' . $i . '_extra_settings5');
		$wp_customize->add_control(
			new Jinr_Base_Control(
				$wp_customize,
				'jinr__fukidashi' . $i . '_extra_settings5',
				array(
					'settings' => 'jinr__fukidashi' . $i . '_extra_settings5',
					'label'    => '色の設定',
					'section'  => 'jinr__fukidashi' . $i . '_tab',
					'type'     => 'hidden',
				)
			)
		);

		$wp_customize->add_setting('jinr__fukidashi' . $i . '_imgborder_color_type', array('default' => 'simplecolor'));
		$wp_customize->add_control(
			new Jinr_Base_Control(
				$wp_customize,
				'jinr__fukidashi' . $i . '_imgborder_color_type',
				array(
					'settings' => 'jinr__fukidashi' . $i . '_imgborder_color_type',
					'label'    => 'キャラクター画像の枠色',
					'section'  => 'jinr__fukidashi' . $i . '_tab',
					'type'     => 'radio',
					'choices'  => array(
						'simplecolor' => '単色',
						'gradation'   => 'グラデーション',
						'transparent' => '透明',
					),
				)
			)
		);

		$wp_customize->add_setting('jinr__fukidashi' . $i . '_imgborder_color', array('default' => '#eee'));
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'jinr__fukidashi' . $i . '_imgborder_color',
				array(
					'section'  => 'jinr__fukidashi' . $i . '_tab',
					'settings' => 'jinr__fukidashi' . $i . '_imgborder_color',
				)
			)
		);

		$wp_customize->add_setting('jinr__fukidashi' . $i . '_imgborder_gradation', array('default' => 'gradation1'));
		$wp_customize->add_control(
			new Jinr_Base_Control(
				$wp_customize,
				'jinr__fukidashi' . $i . '_imgborder_gradation',
				array(
					'settings' => 'jinr__fukidashi' . $i . '_imgborder_gradation',
					'label'    => 'グラデーション選択',
					'section'  => 'jinr__fukidashi' . $i . '_tab',
					'type'     => 'select',
					'choices'  => array(
						'gradation1' => 'グラデーション１',
						'gradation2' => 'グラデーション２',
						'gradation3' => 'グラデーション３',
					),
				)
			)
		);

		$wp_customize->add_setting('jinr__fukidashi' . $i . '_extra_sub1');
		$wp_customize->add_control(
			new Jinr_CheckBox_Control(
				$wp_customize,
				'jinr__fukidashi' . $i . '_extra_sub1',
				array(
					'settings'    => 'jinr__fukidashi' . $i . '_extra_sub1',
					'section'     => 'jinr__fukidashi' . $i . '_tab',
					'type'        => 'input',
					'description' => '<a class="to-jinr-gradation" href="' . esc_url($section_link) . '">グラデーション登録</a>から色を編集できます',
				)
			)
		);

		$wp_customize->add_setting('jinr__fukidashi' . $i . '_bg_color', array('default' => '#fff'));
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'jinr__fukidashi' . $i . '_bg_color',
				array(
					'label'    => '吹き出しの背景色',
					'section'  => 'jinr__fukidashi' . $i . '_tab',
					'settings' => 'jinr__fukidashi' . $i . '_bg_color',
				)
			)
		);

		$wp_customize->add_setting('jinr__fukidashi' . $i . '_border_color_type', array('default' => 'simplecolor'));
		$wp_customize->add_control(
			new Jinr_Base_Control(
				$wp_customize,
				'jinr__fukidashi' . $i . '_border_color_type',
				array(
					'settings' => 'jinr__fukidashi' . $i . '_border_color_type',
					'label'    => '吹き出しの枠色',
					'section'  => 'jinr__fukidashi' . $i . '_tab',
					'type'     => 'radio',
					'choices'  => array(
						'simplecolor' => '単色',
						'transparent' => '透明',
					),
				)
			)
		);

		$wp_customize->add_setting('jinr__fukidashi' . $i . '_border_color', array('default' => '#eee'));
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'jinr__fukidashi' . $i . '_border_color',
				array(
					'section'  => 'jinr__fukidashi' . $i . '_tab',
					'settings' => 'jinr__fukidashi' . $i . '_border_color',
				)
			)
		);

		$wp_customize->add_setting('jinr__fukidashi' . $i . '_extra_settings3');
		$wp_customize->add_control(
			new Jinr_Base_Control(
				$wp_customize,
				'jinr__fukidashi' . $i . '_extra_settings3',
				array(
					'settings' => 'jinr__fukidashi' . $i . '_extra_settings3',
					'label'    => '詳細設定',
					'section'  => 'jinr__fukidashi' . $i . '_tab',
					'type'     => 'hidden',
				)
			)
		);
		$wp_customize->add_setting('jinr__fukidashi' . $i . '_layout', array('default' => 'd--fukidashi-left'));
		$wp_customize->add_control(
			new Jinr_Base_Control(
				$wp_customize,
				'jinr__fukidashi' . $i . '_layout',
				array(
					'settings' => 'jinr__fukidashi' . $i . '_layout',
					'label'    => 'レイアウト',
					'section'  => 'jinr__fukidashi' . $i . '_tab',
					'type'     => 'radio',
					'choices'  => array(
						'd--fukidashi-left'  => '左',
						'd--fukidashi-right' => '右',
					),
				)
			)
		);
		$wp_customize->add_setting('jinr__fukidashi' . $i . '_border_weight', array('default' => 'd--fukidashi-border-normal'));
		$wp_customize->add_control(
			new Jinr_Base_Control(
				$wp_customize,
				'jinr__fukidashi' . $i . '_border_weight',
				array(
					'settings' => 'jinr__fukidashi' . $i . '_border_weight',
					'label'    => '全体の枠の太さ',
					'section'  => 'jinr__fukidashi' . $i . '_tab',
					'type'     => 'radio',
					'choices'  => array(
						'd--fukidashi-border-thin'   => '細め',
						'd--fukidashi-border-normal' => '普通',
						'd--fukidashi-border-bold'   => '太め',
					),
				)
			)
		);

		$wp_customize->add_setting('jinr__fukidashi' . $i . '_extra_settings4');
		$wp_customize->add_control(
			new Jinr_Base_Control(
				$wp_customize,
				'jinr__fukidashi' . $i . '_extra_settings4',
				array(
					'settings' => 'jinr__fukidashi' . $i . '_extra_settings4',
					'label'    => '吹き出しの登録名を変更',
					'section'  => 'jinr__fukidashi' . $i . '_tab',
					'type'     => 'hidden',
				)
			)
		);
		if ($i <= 4) {
			$wp_customize->add_setting('jinr__fukidashi' . $i . '_register_name', array('default' => '吹き出し ' . $i));
			$wp_customize->add_control(
				new Jinr_Base_Control(
					$wp_customize,
					'jinr__fukidashi' . $i . '_register_name',
					array(
						'settings' => 'jinr__fukidashi' . $i . '_register_name',
						'label'    => '登録名',
						'section'  => 'jinr__fukidashi' . $i . '_tab',
						'type'     => 'text',
					)
				)
			);
		} else {
			$wp_customize->add_setting('jinr__fukidashi' . $i . '_register_name', array('default' => 'プリセット ' . intval($i - 4)));
			$wp_customize->add_control(
				new Jinr_Base_Control(
					$wp_customize,
					'jinr__fukidashi' . $i . '_register_name',
					array(
						'settings' => 'jinr__fukidashi' . $i . '_register_name',
						'label'    => '登録名',
						'section'  => 'jinr__fukidashi' . $i . '_tab',
						'type'     => 'text',
					)
				)
			);
		}
	}
}
add_action('customize_register', 'jinr__add_section_fukidashi');


function jinr__fukidashi1_image()
{
	return get_theme_mod('jinr__fukidashi1_image', get_template_directory_uri() . '/lib/img/image_setting.png');
}
function jinr__fukidashi1_name()
{
	return get_theme_mod('jinr__fukidashi1_name', '');
}

function jinr__fukidashi1_imgborder_color_type()
{
	return get_theme_mod('jinr__fukidashi1_imgborder_color_type', 'simplecolor');
}
function jinr__fukidashi1_imgborder_color()
{
	return get_theme_mod('jinr__fukidashi1_imgborder_color', '#eee');
}
function jinr__fukidashi1_imgborder_gradation()
{
	return get_theme_mod('jinr__fukidashi1_imgborder_gradation', 'gradation1');
}
function jinr__fukidashi1_type()
{
	return get_theme_mod('jinr__fukidashi1_type', 'd--fukidashi-chat');
}
function jinr__fukidashi1_bg_color()
{
	return get_theme_mod('jinr__fukidashi1_bg_color', '#fff');
}
function jinr__fukidashi1_border_color_type()
{
	return get_theme_mod('jinr__fukidashi1_border_color_type', 'simplecolor');
}
function jinr__fukidashi1_border_color()
{
	return get_theme_mod('jinr__fukidashi1_border_color', '#eee');
}
function jinr__fukidashi1_layout()
{
	return get_theme_mod('jinr__fukidashi1_layout', 'd--fukidashi-left');
}
function jinr__fukidashi1_border_weight()
{
	return get_theme_mod('jinr__fukidashi1_border_weight', 'd--fukidashi-border-normal');
}
function jinr__fukidashi1_register_name()
{
	return get_theme_mod('jinr__fukidashi1_register_name', '吹き出し 1');
}


function jinr__fukidashi2_image()
{
	return get_theme_mod('jinr__fukidashi2_image', '');
}
function jinr__fukidashi2_name()
{
	return get_theme_mod('jinr__fukidashi2_name', '');
}

function jinr__fukidashi2_imgborder_color_type()
{
	return get_theme_mod('jinr__fukidashi2_imgborder_color_type', 'simplecolor');
}
function jinr__fukidashi2_imgborder_color()
{
	return get_theme_mod('jinr__fukidashi2_imgborder_color', '#eee');
}
function jinr__fukidashi2_imgborder_gradation()
{
	return get_theme_mod('jinr__fukidashi2_imgborder_gradation', 'gradation1');
}
function jinr__fukidashi2_type()
{
	return get_theme_mod('jinr__fukidashi2_type', 'd--fukidashi-chat');
}
function jinr__fukidashi2_bg_color()
{
	return get_theme_mod('jinr__fukidashi2_bg_color', '#fff');
}
function jinr__fukidashi2_border_color_type()
{
	return get_theme_mod('jinr__fukidashi2_border_color_type', 'simplecolor');
}
function jinr__fukidashi2_border_color()
{
	return get_theme_mod('jinr__fukidashi2_border_color', '#eee');
}
function jinr__fukidashi2_layout()
{
	return get_theme_mod('jinr__fukidashi2_layout', 'd--fukidashi-left');
}
function jinr__fukidashi2_border_weight()
{
	return get_theme_mod('jinr__fukidashi2_border_weight', 'd--fukidashi-border-normal');
}
function jinr__fukidashi2_register_name()
{
	return get_theme_mod('jinr__fukidashi2_register_name', '吹き出し 2');
}


function jinr__fukidashi3_image()
{
	return get_theme_mod('jinr__fukidashi3_image', '');
}
function jinr__fukidashi3_name()
{
	return get_theme_mod('jinr__fukidashi3_name', '');
}

function jinr__fukidashi3_imgborder_color_type()
{
	return get_theme_mod('jinr__fukidashi3_imgborder_color_type', 'simplecolor');
}
function jinr__fukidashi3_imgborder_color()
{
	return get_theme_mod('jinr__fukidashi3_imgborder_color', '#eee');
}
function jinr__fukidashi3_imgborder_gradation()
{
	return get_theme_mod('jinr__fukidashi3_imgborder_gradation', 'gradation1');
}
function jinr__fukidashi3_type()
{
	return get_theme_mod('jinr__fukidashi3_type', 'd--fukidashi-chat');
}
function jinr__fukidashi3_bg_color()
{
	return get_theme_mod('jinr__fukidashi3_bg_color', '#fff');
}
function jinr__fukidashi3_border_color_type()
{
	return get_theme_mod('jinr__fukidashi3_border_color_type', 'simplecolor');
}
function jinr__fukidashi3_border_color()
{
	return get_theme_mod('jinr__fukidashi3_border_color', '#eee');
}
function jinr__fukidashi3_layout()
{
	return get_theme_mod('jinr__fukidashi3_layout', 'd--fukidashi-left');
}
function jinr__fukidashi3_border_weight()
{
	return get_theme_mod('jinr__fukidashi3_border_weight', 'd--fukidashi-border-normal');
}
function jinr__fukidashi3_register_name()
{
	return get_theme_mod('jinr__fukidashi3_register_name', '吹き出し 3');
}


function jinr__fukidashi4_image()
{
	return get_theme_mod('jinr__fukidashi4_image', '');
}
function jinr__fukidashi4_name()
{
	return get_theme_mod('jinr__fukidashi4_name', '');
}

function jinr__fukidashi4_imgborder_color_type()
{
	return get_theme_mod('jinr__fukidashi4_imgborder_color_type', 'simplecolor');
}
function jinr__fukidashi4_imgborder_color()
{
	return get_theme_mod('jinr__fukidashi4_imgborder_color', '#eee');
}
function jinr__fukidashi4_imgborder_gradation()
{
	return get_theme_mod('jinr__fukidashi4_imgborder_gradation', 'gradation1');
}
function jinr__fukidashi4_type()
{
	return get_theme_mod('jinr__fukidashi4_type', 'd--fukidashi-chat');
}
function jinr__fukidashi4_bg_color()
{
	return get_theme_mod('jinr__fukidashi4_bg_color', '#fff');
}
function jinr__fukidashi4_border_color_type()
{
	return get_theme_mod('jinr__fukidashi4_border_color_type', 'simplecolor');
}
function jinr__fukidashi4_border_color()
{
	return get_theme_mod('jinr__fukidashi4_border_color', '#eee');
}
function jinr__fukidashi4_layout()
{
	return get_theme_mod('jinr__fukidashi4_layout', 'd--fukidashi-left');
}
function jinr__fukidashi4_border_weight()
{
	return get_theme_mod('jinr__fukidashi4_border_weight', 'd--fukidashi-border-normal');
}
function jinr__fukidashi4_register_name()
{
	return get_theme_mod('jinr__fukidashi4_register_name', '吹き出し 4');
}


function jinr__fukidashi5_image()
{
	return get_theme_mod('jinr__fukidashi5_image', get_template_directory_uri() . '/lib/img/woman1.png');
}
function jinr__fukidashi5_name()
{
	return get_theme_mod('jinr__fukidashi5_name', 'プリセット１');
}

function jinr__fukidashi5_imgborder_color_type()
{
	return get_theme_mod('jinr__fukidashi5_imgborder_color_type', 'simplecolor');
}
function jinr__fukidashi5_imgborder_color()
{
	return get_theme_mod('jinr__fukidashi5_imgborder_color', '#eee');
}
function jinr__fukidashi5_imgborder_gradation()
{
	return get_theme_mod('jinr__fukidashi5_imgborder_gradation', 'gradation1');
}
function jinr__fukidashi5_type()
{
	return get_theme_mod('jinr__fukidashi5_type', 'd--fukidashi-chat');
}
function jinr__fukidashi5_bg_color()
{
	return get_theme_mod('jinr__fukidashi5_bg_color', '#fff');
}
function jinr__fukidashi5_border_color_type()
{
	return get_theme_mod('jinr__fukidashi5_border_color_type', 'simplecolor');
}
function jinr__fukidashi5_border_color()
{
	return get_theme_mod('jinr__fukidashi5_border_color', '#eee');
}
function jinr__fukidashi5_layout()
{
	return get_theme_mod('jinr__fukidashi5_layout', 'd--fukidashi-left');
}
function jinr__fukidashi5_border_weight()
{
	return get_theme_mod('jinr__fukidashi5_border_weight', 'd--fukidashi-border-normal');
}
function jinr__fukidashi5_register_name()
{
	return get_theme_mod('jinr__fukidashi5_register_name', 'プリセット１');
}


function jinr__fukidashi6_image()
{
	return get_theme_mod('jinr__fukidashi6_image', get_template_directory_uri() . '/lib/img/woman2.png');
}
function jinr__fukidashi6_name()
{
	return get_theme_mod('jinr__fukidashi6_name', 'プリセット２');
}

function jinr__fukidashi6_imgborder_color_type()
{
	return get_theme_mod('jinr__fukidashi6_imgborder_color_type', 'simplecolor');
}
function jinr__fukidashi6_imgborder_color()
{
	return get_theme_mod('jinr__fukidashi6_imgborder_color', '#eee');
}
function jinr__fukidashi6_imgborder_gradation()
{
	return get_theme_mod('jinr__fukidashi6_imgborder_gradation', 'gradation1');
}
function jinr__fukidashi6_type()
{
	return get_theme_mod('jinr__fukidashi6_type', 'd--fukidashi-chat');
}
function jinr__fukidashi6_bg_color()
{
	return get_theme_mod('jinr__fukidashi6_bg_color', '#fff');
}
function jinr__fukidashi6_border_color_type()
{
	return get_theme_mod('jinr__fukidashi6_border_color_type', 'simplecolor');
}
function jinr__fukidashi6_border_color()
{
	return get_theme_mod('jinr__fukidashi6_border_color', '#eee');
}
function jinr__fukidashi6_layout()
{
	return get_theme_mod('jinr__fukidashi6_layout', 'd--fukidashi-left');
}
function jinr__fukidashi6_border_weight()
{
	return get_theme_mod('jinr__fukidashi6_border_weight', 'd--fukidashi-border-normal');
}
function jinr__fukidashi6_register_name()
{
	return get_theme_mod('jinr__fukidashi6_register_name', 'プリセット２');
}


function jinr__fukidashi7_image()
{
	return get_theme_mod('jinr__fukidashi7_image', get_template_directory_uri() . '/lib/img/woman3.png');
}
function jinr__fukidashi7_name()
{
	return get_theme_mod('jinr__fukidashi7_name', 'プリセット３');
}

function jinr__fukidashi7_imgborder_color_type()
{
	return get_theme_mod('jinr__fukidashi7_imgborder_color_type', 'simplecolor');
}
function jinr__fukidashi7_imgborder_color()
{
	return get_theme_mod('jinr__fukidashi7_imgborder_color', '#eee');
}
function jinr__fukidashi7_imgborder_gradation()
{
	return get_theme_mod('jinr__fukidashi7_imgborder_gradation', 'gradation1');
}
function jinr__fukidashi7_type()
{
	return get_theme_mod('jinr__fukidashi7_type', 'd--fukidashi-chat');
}
function jinr__fukidashi7_bg_color()
{
	return get_theme_mod('jinr__fukidashi7_bg_color', '#fff');
}
function jinr__fukidashi7_border_color_type()
{
	return get_theme_mod('jinr__fukidashi7_border_color_type', 'simplecolor');
}
function jinr__fukidashi7_border_color()
{
	return get_theme_mod('jinr__fukidashi7_border_color', '#eee');
}
function jinr__fukidashi7_layout()
{
	return get_theme_mod('jinr__fukidashi7_layout', 'd--fukidashi-left');
}
function jinr__fukidashi7_border_weight()
{
	return get_theme_mod('jinr__fukidashi7_border_weight', 'd--fukidashi-border-normal');
}
function jinr__fukidashi7_register_name()
{
	return get_theme_mod('jinr__fukidashi7_register_name', 'プリセット３');
}


function jinr__fukidashi8_image()
{
	return get_theme_mod('jinr__fukidashi8_image', get_template_directory_uri() . '/lib/img/man1.png');
}
function jinr__fukidashi8_name()
{
	return get_theme_mod('jinr__fukidashi8_name', 'プリセット４');
}

function jinr__fukidashi8_imgborder_color_type()
{
	return get_theme_mod('jinr__fukidashi8_imgborder_color_type', 'simplecolor');
}
function jinr__fukidashi8_imgborder_color()
{
	return get_theme_mod('jinr__fukidashi8_imgborder_color', '#eee');
}
function jinr__fukidashi8_imgborder_gradation()
{
	return get_theme_mod('jinr__fukidashi8_imgborder_gradation', 'gradation1');
}
function jinr__fukidashi8_type()
{
	return get_theme_mod('jinr__fukidashi8_type', 'd--fukidashi-chat');
}
function jinr__fukidashi8_bg_color()
{
	return get_theme_mod('jinr__fukidashi8_bg_color', '#fff');
}
function jinr__fukidashi8_border_color_type()
{
	return get_theme_mod('jinr__fukidashi8_border_color_type', 'simplecolor');
}
function jinr__fukidashi8_border_color()
{
	return get_theme_mod('jinr__fukidashi8_border_color', '#eee');
}
function jinr__fukidashi8_layout()
{
	return get_theme_mod('jinr__fukidashi8_layout', 'd--fukidashi-left');
}
function jinr__fukidashi8_border_weight()
{
	return get_theme_mod('jinr__fukidashi8_border_weight', 'd--fukidashi-border-normal');
}
function jinr__fukidashi8_register_name()
{
	return get_theme_mod('jinr__fukidashi8_register_name', 'プリセット４');
}


function jinr__fukidashi9_image()
{
	return get_theme_mod('jinr__fukidashi9_image', get_template_directory_uri() . '/lib/img/man2.png');
}
function jinr__fukidashi9_name()
{
	return get_theme_mod('jinr__fukidashi9_name', 'プリセット５');
}

function jinr__fukidashi9_imgborder_color_type()
{
	return get_theme_mod('jinr__fukidashi9_imgborder_color_type', 'simplecolor');
}
function jinr__fukidashi9_imgborder_color()
{
	return get_theme_mod('jinr__fukidashi9_imgborder_color', '#eee');
}
function jinr__fukidashi9_imgborder_gradation()
{
	return get_theme_mod('jinr__fukidashi9_imgborder_gradation', 'gradation1');
}
function jinr__fukidashi9_type()
{
	return get_theme_mod('jinr__fukidashi9_type', 'd--fukidashi-chat');
}
function jinr__fukidashi9_bg_color()
{
	return get_theme_mod('jinr__fukidashi9_bg_color', '#fff');
}
function jinr__fukidashi9_border_color_type()
{
	return get_theme_mod('jinr__fukidashi9_border_color_type', 'simplecolor');
}
function jinr__fukidashi9_border_color()
{
	return get_theme_mod('jinr__fukidashi9_border_color', '#eee');
}
function jinr__fukidashi9_layout()
{
	return get_theme_mod('jinr__fukidashi9_layout', 'd--fukidashi-left');
}
function jinr__fukidashi9_border_weight()
{
	return get_theme_mod('jinr__fukidashi9_border_weight', 'd--fukidashi-border-normal');
}
function jinr__fukidashi9_register_name()
{
	return get_theme_mod('jinr__fukidashi9_register_name', 'プリセット５');
}


function jinr__fukidashi10_image()
{
	return get_theme_mod('jinr__fukidashi10_image', get_template_directory_uri() . '/lib/img/man3.png');
}
function jinr__fukidashi10_name()
{
	return get_theme_mod('jinr__fukidashi10_name', 'プリセット６');
}
function jinr__fukidashi10_imgborder_color_type()
{
	return get_theme_mod('jinr__fukidashi10_imgborder_color_type', 'simplecolor');
}
function jinr__fukidashi10_imgborder_color()
{
	return get_theme_mod('jinr__fukidashi10_imgborder_color', '#eee');
}
function jinr__fukidashi10_imgborder_gradation()
{
	return get_theme_mod('jinr__fukidashi10_imgborder_gradation', 'gradation1');
}
function jinr__fukidashi10_type()
{
	return get_theme_mod('jinr__fukidashi10_type', 'd--fukidashi-chat');
}
function jinr__fukidashi10_bg_color()
{
	return get_theme_mod('jinr__fukidashi10_bg_color', '#fff');
}
function jinr__fukidashi10_border_color_type()
{
	return get_theme_mod('jinr__fukidashi10_border_color_type', 'simplecolor');
}
function jinr__fukidashi10_border_color()
{
	return get_theme_mod('jinr__fukidashi10_border_color', '#eee');
}
function jinr__fukidashi10_layout()
{
	return get_theme_mod('jinr__fukidashi10_layout', 'd--fukidashi-left');
}
function jinr__fukidashi10_border_weight()
{
	return get_theme_mod('jinr__fukidashi10_border_weight', 'd--fukidashi-border-normal');
}
function jinr__fukidashi10_register_name()
{
	return get_theme_mod('jinr__fukidashi10_register_name', 'プリセット６');
}
