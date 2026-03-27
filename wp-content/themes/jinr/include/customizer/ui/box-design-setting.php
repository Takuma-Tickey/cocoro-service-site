<?php

/*ボックスデザイン設定*/
$simple_box_color = array(
	'#407FED', // 1
	'#407FED', // 2
	'#407FED', // 3
	'#407FED', // 4
	'#f2f7ff', // 5
	'#8baef4', // 6
	'#8baef4', // 7
	'#f2f7ff', // 8
	'#8baef4', // 9
	'#f2f7ff', // 10
	'#407FED', // 11
);

$heading_box_color = array(
	'#407FED', // 1
	'#407FED', // 2
	'#407FED', // 3
	'#407FED', // 4
	'#407FED', // 5
	'#407FED', // 6
	'#8baef4', // 7
	'#8baef4', // 8
	'#8baef4', // 9
);

$simple_iconbox_color = array(
	'#ffc956', // 1
	'#ffc956', // 2
	'#ff7c7c', // 3
	'#ff7c7c', // 4
	'#1fc49d', // 5
	'#1fc49d', // 6
	'#3d92ed', // 7
	'#3d92ed', // 8
);
$simple_iconbox_icon  = array(
	'v2bulb', // 1
	'v2badge', // 6
	'v2caution', // 3
	'v2writer', // 2
	'v2speaker', // 4
	'v2books', // 5
	'v2basket', // 7
	'v2like', // 8
);

$heading_iconbox_color = array(
	'#ffd375', // 1
	'#68a8ed', // 2
	'#ff8c8c', // 3
	'#6ad1b9', // 4
);
$heading_iconbox_icon  = array(
	'caution', // 1
	'like', // 2
	'comment', // 3
	'book', // 4
);
$heading_iconbox_title = array(
	'注意点', // 1
	'メリット', // 2
	'デメリット', // 3
	'参考資料', // 4
);

function jinr__add_section_box_design($wp_customize)
{

	global $simple_box_color;
	global $heading_box_color;
	global $simple_iconbox_color;
	global $simple_iconbox_icon;
	global $heading_iconbox_color;
	global $heading_iconbox_icon;
	global $heading_iconbox_title;
	$wp_customize->add_section(
		'jinr__box_design_panel',
		array(
			'title'    => 'ボックス',
			'priority' => 7,
		)
	);
	$wp_customize->add_setting('jinr__box_tab', array('default' => 'box', 'transport' => 'postMessage',));
	$wp_customize->add_control(
		new Jinr_Base_Control(
			$wp_customize,
			'jinr__box_tab',
			array(
				'settings' => 'jinr__box_tab',
				'section'  => 'jinr__box_design_panel',
				'type'     => 'tab',
				'choices'  => array(
					'box' => 'ボックス',
					'iconbox' => 'アイコンボックス',
				),
			)
		)
	);

	for ($i = 1; $i <= 11; $i++) {

		$wp_customize->add_setting('jinr__box_extra_settings'. $i);
		$wp_customize->add_control(
			new Jinr_Base_Control(
				$wp_customize,
				'jinr__box_extra_settings'. $i,
				array(
					'settings' => 'jinr__box_extra_settings'. $i,
					'label'    => 'シンプルボックス'. $i,
					'section'  => 'jinr__box_design_panel',
					'type'     => 'hidden',
				)
			)
		);

		$wp_customize->add_setting(
			'jinr__box_design_preview' . $i . '',
			array(
				'default' => '',
			)
		);
		$wp_customize->add_control(
			new Jinr_Base_Control(
				$wp_customize,
				'jinr__box_design_preview' . $i . '',
				array(
					'section'     => 'jinr__box_design_panel',
					'settings'    => 'jinr__box_design_preview' . $i . '',
					'type'        => 'text',
					'description' => '<div class="jinr-preview-container ' . jinr__round_style() . '">
					<div id="jinrBox' . $i . '" class="b--jinr-block b--jinr-box d--simple-box' . $i . '">
						<div class="jinr-customizer-element-s-box"></div>
						<div class="c--simple-box-inner"><p>ここにテキストが入ります。</p></div>
					</div>
				</div>'

				)
			)
		);

		$wp_customize->add_setting('jinr__simple_box' . $i . '_color', array('default' => $simple_box_color[$i - 1]));
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'jinr__simple_box' . $i . '_color',
				array(
					'section'  => 'jinr__box_design_panel',
					'settings' => 'jinr__simple_box' . $i . '_color',
				)
			)
		);
	}


	for ($i = 1; $i <= 9; $i++) {
		if ($i == 5) {
			continue;
		}
		$wp_customize->add_setting('jinr__titlebox_extra_settings'. $i);
		$wp_customize->add_control(
			new Jinr_Base_Control(
				$wp_customize,
				'jinr__titlebox_extra_settings'. $i,
				array(
					'settings' => 'jinr__titlebox_extra_settings'. $i,
					'label'    => 'タイトル付きボックス'. $i,
					'section'  => 'jinr__box_design_panel',
					'type'     => 'hidden',
				)
			)
		);

		$wp_customize->add_setting(
			'jinr__heading_box_preview' . $i . '',
			array(
				'default' => '',
			)
		);
		$wp_customize->add_control(
			new Jinr_Base_Control(
				$wp_customize,
				'jinr__heading_box_preview' . $i . '',
				array(
					'section'     => 'jinr__box_design_panel',
					'settings'    => 'jinr__heading_box_preview' . $i . '',
					'type'        => 'text',
					'description' => '<div class="jinr-preview-container ' . jinr__round_style() . '">
					<div id="JinrHeadingBox' . $i . '" class="b--jinr-block b--jinr-box d--heading-box' . $i . '">
						<div class="jinr-customizer-element-h-box"></div>
						<div class="a--simple-box-title d--bold">ボックスタイトル</div>
						<div class="c--simple-box-inner"><p>ここにテキストが入ります。</p></div>
					</div>
				</div>'
				)
			)
		);

		$wp_customize->add_setting('jinr__heading_box' . $i . '_color', array('default' => $heading_box_color[$i - 1]));
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'jinr__heading_box' . $i . '_color',
				array(
					'section'  => 'jinr__box_design_panel',
					'settings' => 'jinr__heading_box' . $i . '_color',
				)
			)
		);
	}


	for ($i = 1; $i <= 8; $i++) {

		$wp_customize->add_setting('jinr__iconbox_extra_settings'.$i);
		$wp_customize->add_control(
			new Jinr_Base_Control(
				$wp_customize,
				'jinr__iconbox_extra_settings'.$i,
				array(
					'settings' => 'jinr__iconbox_extra_settings'.$i,
					'label'    => 'アイコンボックス'.$i,
					'section'  => 'jinr__box_design_panel',
					'type' => 'hidden'
				)
			)
		);

		$wp_customize->add_setting(
			'jinr__simple_iconbox'. $i .'_iconvisual',
			array(
				'default' => $simple_iconbox_icon[$i - 1],
			)
		);
		$wp_customize->add_control(
			new Jinr_Base_Control(
				$wp_customize,
				'jinr__simple_iconbox'. $i .'_iconvisual',
				array(
					'section'     => 'jinr__box_design_panel',
					'settings'    => 'jinr__simple_iconbox'. $i .'_iconvisual',
					'type'        => 'text',
					'description' => '<div class="jinr-preview-container ' . jinr__round_style() . '">
					<div id="JinrIconBox' . $i . '" class="b--jinr-block b--jinr-iconbox">
						<div class="d--simple-iconbox' . $i . ' t--round">
							<div class="jinr-customizer-element-s-icon t--round"></div>
							<span class="jinr-customizer-s-icon-box"><i class="jif jin-icons jin-ifont-'.$simple_iconbox_icon[$i - 1].'" aria-hidden="true"></i></span>
							<div class="a--jinr-iconbox"><p>ここにテキストが入ります。</p></div>
						</div>
					</div>
				</div>'
				)
			)
		);

		$wp_customize->add_setting(
			'jinr__simple_iconbox' . $i . '_choice',
			array(
				'default' => '',

			)
		);
		$wp_customize->add_control(
			'jinr__simple_iconbox' . $i . '_choice',
			array(
				'settings' => array(),
				'section'  => 'jinr__box_design_panel',
				'type'     => 'button',
				'input_attrs' => array(
					'value'    => 'アイコンを変更する',
					'class' => 'button js--iconList-btn' . $i . '',
				),
			)
		);

		$wp_customize->add_setting('jinr__simple_iconbox' . $i . '_color', array('default' => $simple_iconbox_color[$i - 1]));
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'jinr__simple_iconbox' . $i . '_color',
				array(
					'section'  => 'jinr__box_design_panel',
					'settings' => 'jinr__simple_iconbox' . $i . '_color',
				)
			)
		);

	}

	for ($i = 1; $i <= 4; $i++) {

		$wp_customize->add_setting('jinr__heading_iconbox_extra_settings'.$i);
		$wp_customize->add_control(
			new Jinr_Base_Control(
				$wp_customize,
				'jinr__heading_iconbox_extra_settings'.$i,
				array(
					'settings' => 'jinr__heading_iconbox_extra_settings'.$i,
					'label'    => 'タイトル付き'.$i,
					'section'  => 'jinr__box_design_panel',
					'type' => 'hidden'
				)
			)
		);

		$wp_customize->add_setting(
			'jinr__heading_iconbox'. $i .'_iconvisual',
			array(
				'default' => $heading_iconbox_icon[$i - 1],
			)
		);
		$wp_customize->add_control(
			new Jinr_Base_Control(
				$wp_customize,
				'jinr__heading_iconbox'. $i .'_iconvisual',
				array(
					'section'     => 'jinr__box_design_panel',
					'settings'    => 'jinr__heading_iconbox'. $i .'_iconvisual',
					'type'        => 'text',
					'description' => '<div class="jinr-preview-container ' . jinr__round_style() . '">
					<div id="JinrHeadingIconBox' . $i . '" class="b--jinr-block b--jinr-iconbox">
						<div class="d--heading-iconbox' . $i . ' t--round">
						<div class="a--heading-iconbox-title">
						<div class="a--iconbox-title-icon"><i class="jif jin-icons jin-ifont-'.$heading_iconbox_icon[$i - 1].'" aria-hidden="true"></i></div>
						<div class="a--iconbox-title-text">タイトル</div>
						</div>
							<div class="a--jinr-iconbox"><p>ここにテキストが入ります。</p></div>
						</div>
					</div>
				</div>'
				)
			)
		);

		$wp_customize->add_setting(
			'jinr__heading_iconbox' . $i . '_choice',
			array(
				'default' => '',
			)
		);
		$wp_customize->add_control(
			'jinr__heading_iconbox' . $i . '_choice',
			array(
				'settings' => array(),
				'section'  => 'jinr__box_design_panel',
				'type'     => 'button',
				'input_attrs' => array(
					'value'    => 'アイコンを変更する',
					'class' => 'button js--iconList-btn' . $i . '',
				),
			)
		);


		$wp_customize->add_setting('jinr__heading_iconbox' . $i . '_color', array('default' => $heading_iconbox_color[$i - 1]));
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'jinr__heading_iconbox' . $i . '_color',
				array(
					'section'  => 'jinr__box_design_panel',
					'settings' => 'jinr__heading_iconbox' . $i . '_color',
				)
			)
		);

		
		$wp_customize->add_setting('jinr__heading_iconbox' . $i . '_title', array('default' => $heading_iconbox_title[$i - 1]));
		$wp_customize->add_control(
			new Jinr_Base_Control(
				$wp_customize,
				'jinr__heading_iconbox' . $i . '_title',
				array(
					'label'    => 'タイトル',
					'section'  => 'jinr__box_design_panel',
					'settings' => 'jinr__heading_iconbox' . $i . '_title',
					'type'     => 'text',
				)
			)
		);
	}
}
add_action('customize_register', 'jinr__add_section_box_design');


$dateArray   = array();
$dateArray02 = array();
for ($i = 1; $i <= 11; $i++) {
	$simple_box_color_code = get_theme_mod('jinr__simple_box' . $i . '_color', $simple_box_color[$i - 1]);
	$dateArray02          += array('jinr__simple_box' . $i . '_color' => $simple_box_color_code);
	$dateArray             = array_merge($dateArray02);
}

// シンプルボックス
function jinr__simple_box1_color()
{
	global $simple_box_color;
	return get_theme_mod('jinr__simple_box1_color', $simple_box_color[0]);
}
function jinr__simple_box2_color()
{
	global $simple_box_color;
	return get_theme_mod('jinr__simple_box2_color', $simple_box_color[1]);
}
function jinr__simple_box3_color()
{
	global $simple_box_color;
	return get_theme_mod('jinr__simple_box3_color', $simple_box_color[2]);
}
function jinr__simple_box4_color()
{
	global $simple_box_color;
	return get_theme_mod('jinr__simple_box4_color', $simple_box_color[3]);
}
function jinr__simple_box5_color()
{
	global $simple_box_color;
	return get_theme_mod('jinr__simple_box5_color', $simple_box_color[4]);
}
function jinr__simple_box6_color()
{
	global $simple_box_color;
	return get_theme_mod('jinr__simple_box6_color', $simple_box_color[5]);
}
function jinr__simple_box7_color()
{
	global $simple_box_color;
	return get_theme_mod('jinr__simple_box7_color', $simple_box_color[6]);
}
function jinr__simple_box8_color()
{
	global $simple_box_color;
	return get_theme_mod('jinr__simple_box8_color', $simple_box_color[7]);
}
function jinr__simple_box9_color()
{
	global $simple_box_color;
	return get_theme_mod('jinr__simple_box9_color', $simple_box_color[8]);
}
function jinr__simple_box10_color()
{
	global $simple_box_color;
	return get_theme_mod('jinr__simple_box10_color', $simple_box_color[9]);
}
function jinr__simple_box11_color()
{
	global $simple_box_color;
	return get_theme_mod('jinr__simple_box11_color', $simple_box_color[10]);
}
// タイトル付ボックス
function jinr__heading_box1_color()
{
	global $heading_box_color;
	return get_theme_mod('jinr__heading_box1_color', $heading_box_color[0]);
}
function jinr__heading_box2_color()
{
	global $heading_box_color;
	return get_theme_mod('jinr__heading_box2_color', $heading_box_color[1]);
}
function jinr__heading_box3_color()
{
	global $heading_box_color;
	return get_theme_mod('jinr__heading_box3_color', $heading_box_color[2]);
}
function jinr__heading_box4_color()
{
	global $heading_box_color;
	return get_theme_mod('jinr__heading_box4_color', $heading_box_color[3]);
}
function jinr__heading_box5_color()
{
	global $heading_box_color;
	return get_theme_mod('jinr__heading_box5_color', $heading_box_color[4]);
}
function jinr__heading_box6_color()
{
	global $heading_box_color;
	return get_theme_mod('jinr__heading_box6_color', $heading_box_color[5]);
}
function jinr__heading_box7_color()
{
	global $heading_box_color;
	return get_theme_mod('jinr__heading_box7_color', $heading_box_color[6]);
}
function jinr__heading_box8_color()
{
	global $heading_box_color;
	return get_theme_mod('jinr__heading_box8_color', $heading_box_color[7]);
}
function jinr__heading_box9_color()
{
	global $heading_box_color;
	return get_theme_mod('jinr__heading_box9_color', $heading_box_color[8]);
}
// シンプルアイコンボックス
function jinr__simple_iconbox1_color()
{
	global $simple_iconbox_color;
	return get_theme_mod('jinr__simple_iconbox1_color', $simple_iconbox_color[0]);
}
function jinr__simple_iconbox2_color()
{
	global $simple_iconbox_color;
	return get_theme_mod('jinr__simple_iconbox2_color', $simple_iconbox_color[1]);
}
function jinr__simple_iconbox3_color()
{
	global $simple_iconbox_color;
	return get_theme_mod('jinr__simple_iconbox3_color', $simple_iconbox_color[2]);
}
function jinr__simple_iconbox4_color()
{
	global $simple_iconbox_color;
	return get_theme_mod('jinr__simple_iconbox4_color', $simple_iconbox_color[3]);
}
function jinr__simple_iconbox5_color()
{
	global $simple_iconbox_color;
	return get_theme_mod('jinr__simple_iconbox5_color', $simple_iconbox_color[4]);
}
function jinr__simple_iconbox6_color()
{
	global $simple_iconbox_color;
	return get_theme_mod('jinr__simple_iconbox6_color', $simple_iconbox_color[5]);
}
function jinr__simple_iconbox7_color()
{
	global $simple_iconbox_color;
	return get_theme_mod('jinr__simple_iconbox7_color', $simple_iconbox_color[6]);
}
function jinr__simple_iconbox8_color()
{
	global $simple_iconbox_color;
	return get_theme_mod('jinr__simple_iconbox8_color', $simple_iconbox_color[7]);
}
function jinr__simple_iconbox1_icon()
{
	global $simple_iconbox_icon;
	return get_theme_mod('jinr__simple_iconbox1_iconvisual', $simple_iconbox_icon[0]);
}
function jinr__simple_iconbox2_icon()
{
	global $simple_iconbox_icon;
	return get_theme_mod('jinr__simple_iconbox2_iconvisual', $simple_iconbox_icon[1]);
}
function jinr__simple_iconbox3_icon()
{
	global $simple_iconbox_icon;
	return get_theme_mod('jinr__simple_iconbox3_iconvisual', $simple_iconbox_icon[2]);
}
function jinr__simple_iconbox4_icon()
{
	global $simple_iconbox_icon;
	return get_theme_mod('jinr__simple_iconbox4_iconvisual', $simple_iconbox_icon[3]);
}
function jinr__simple_iconbox5_icon()
{
	global $simple_iconbox_icon;
	return get_theme_mod('jinr__simple_iconbox5_iconvisual', $simple_iconbox_icon[4]);
}
function jinr__simple_iconbox6_icon()
{
	global $simple_iconbox_icon;
	return get_theme_mod('jinr__simple_iconbox6_iconvisual', $simple_iconbox_icon[5]);
}
function jinr__simple_iconbox7_icon()
{
	global $simple_iconbox_icon;
	return get_theme_mod('jinr__simple_iconbox7_iconvisual', $simple_iconbox_icon[6]);
}
function jinr__simple_iconbox8_icon()
{
	global $simple_iconbox_icon;
	return get_theme_mod('jinr__simple_iconbox8_iconvisual', $simple_iconbox_icon[7]);
}
// タイトル付アイコンボックス
function jinr__heading_iconbox1_color()
{
	global $heading_iconbox_color;
	return get_theme_mod('jinr__heading_iconbox1_color', $heading_iconbox_color[0]);
}
function jinr__heading_iconbox2_color()
{
	global $heading_iconbox_color;
	return get_theme_mod('jinr__heading_iconbox2_color', $heading_iconbox_color[1]);
}
function jinr__heading_iconbox3_color()
{
	global $heading_iconbox_color;
	return get_theme_mod('jinr__heading_iconbox3_color', $heading_iconbox_color[2]);
}
function jinr__heading_iconbox4_color()
{
	global $heading_iconbox_color;
	return get_theme_mod('jinr__heading_iconbox4_color', $heading_iconbox_color[3]);
}
function jinr__heading_iconbox1_icon()
{
	global $heading_iconbox_icon;
	return get_theme_mod('jinr__heading_iconbox1_iconvisual', $heading_iconbox_icon[0]);
}
function jinr__heading_iconbox2_icon()
{
	global $heading_iconbox_icon;
	return get_theme_mod('jinr__heading_iconbox2_iconvisual', $heading_iconbox_icon[1]);
}
function jinr__heading_iconbox3_icon()
{
	global $heading_iconbox_icon;
	return get_theme_mod('jinr__heading_iconbox3_iconvisual', $heading_iconbox_icon[2]);
}
function jinr__heading_iconbox4_icon()
{
	global $heading_iconbox_icon;
	return get_theme_mod('jinr__heading_iconbox4_iconvisual', $heading_iconbox_icon[3]);
}
function jinr__heading_iconbox1_title()
{
	global $heading_iconbox_title;
	return get_theme_mod('jinr__heading_iconbox1_title', $heading_iconbox_title[0]);
}
function jinr__heading_iconbox2_title()
{
	global $heading_iconbox_title;
	return get_theme_mod('jinr__heading_iconbox2_title', $heading_iconbox_title[1]);
}
function jinr__heading_iconbox3_title()
{
	global $heading_iconbox_title;
	return get_theme_mod('jinr__heading_iconbox3_title', $heading_iconbox_title[2]);
}
function jinr__heading_iconbox4_title()
{
	global $heading_iconbox_title;
	return get_theme_mod('jinr__heading_iconbox4_title', $heading_iconbox_title[3]);
}