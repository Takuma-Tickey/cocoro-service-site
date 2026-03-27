<?php

/*SNS設定*/
function jinr__add_design_preset_setting($wp_customize)
{
	$wp_customize->add_section(
		'jinr__design_preset_section',
		array(
			'title'    => __jinr('デザインプリセット'),
			'priority' => 1,
		)
	);

	$demoname = array(
		'Default',
		'Cute',
		'Resort',
		'Nature',
		'Minimal',
		'Aroma',
		'Branding',
		'Classical',
		'Dark Mode',
		'Sporty',
		'Nomad',
		'Portfolio',
		'YouTuber',
		'Coffee',
		'Restaurant',
		'Formal'
	);

	$demo_blog_name = array(
		'Milk Chocolate',
		'Cuty Pink',
		'Healing Green',
		'Toy Yellow',
		'Sky Blue',
		'Ocean Blue',
		'Egyption Green',
		'Navy Blue',
	);

	$wp_customize->add_setting(
		'preset_setting_label1',
		array(
			'default' => '',
		)
	);
	$wp_customize->add_control(
		new Jinr_Base_Control(
			$wp_customize,
			'preset_setting_label1',
			array(
				'settings' => 'preset_setting_label1',
				'section'  => 'jinr__design_preset_section',
				'type'     => 'text',
				'description' => 'デザインプリセットを「Download」すると、デモサイトの見た目を1クリックで再現できます。詳しい使い方は<a href="https://jinr.jp/manual/design-preset/" target="_blank">こちら</a>。',
			)
		)
	);

	$wp_customize->add_setting('jinr__preset_extra_settings1');
	$wp_customize->add_control(
		new Jinr_Base_Control(
			$wp_customize,
			'jinr__preset_extra_settings1',
			array(
				'settings'    => 'jinr__preset_extra_settings1',
				'label'       => 'そのまま使えるプリセット一覧',
				'section'     => 'jinr__design_preset_section',
				'type'        => 'hidden',
			)
		)
	);

	for ($i = 101; $i <= 108; $i++) {

		$wp_customize->add_setting('jinr__design_preset_settings' . $i);
		$wp_customize->add_control(
			new Jinr_Base_Control(
				$wp_customize,
				'jinr__design_preset_settings' . $i,
				array(
					'settings' => 'jinr__design_preset_settings' . $i,
					'label'    => '#' . ($i - 100) . ' ' . $demo_blog_name[$i - 101],
					'section'  => 'jinr__design_preset_section',
					'type'     => 'hidden',
				)
			)
		);

		$wp_customize->add_setting('jinr__design_preset_image' . $i);
		$wp_customize->add_control(
			new Jinr_Base_Control(
				$wp_customize,
				'jinr__design_preset_image' . $i,
				array(
					'settings' => 'jinr__design_preset_image' . $i,
					'section'  => 'jinr__design_preset_section',
					'type'     => 'hidden',
				)
			)
		);

		$wp_customize->add_setting('jinr__design_preset_button' . $i);
		$wp_customize->add_control(
			new Jinr_Demo_Import_Control(
				$wp_customize,
				'jinr__design_preset_button' . $i,
				array(
					'settings' => 'jinr__design_preset_button' . $i,
					'section'  => 'jinr__design_preset_section',
					'type'     => 'demo' . $i,
				)
			)
		);
	}

	$wp_customize->add_setting('jinr__preset_extra_settings2');
	$wp_customize->add_control(
		new Jinr_Base_Control(
			$wp_customize,
			'jinr__preset_extra_settings2',
			array(
				'settings'    => 'jinr__preset_extra_settings2',
				'label'       => 'コンセプト重視のプリセット一覧',
				'section'     => 'jinr__design_preset_section',
				'type'        => 'hidden',
			)
		)
	);

	for ($i = 0; $i <= 15; $i++) {

		$wp_customize->add_setting('jinr__design_preset_settings' . $i);
		$wp_customize->add_control(
			new Jinr_Base_Control(
				$wp_customize,
				'jinr__design_preset_settings' . $i,
				array(
					'settings' => 'jinr__design_preset_settings' . $i,
					'label'    => $demoname[$i],
					'section'  => 'jinr__design_preset_section',
					'type'     => 'hidden',
				)
			)
		);

		$wp_customize->add_setting('jinr__design_preset_image' . $i);
		$wp_customize->add_control(
			new Jinr_Base_Control(
				$wp_customize,
				'jinr__design_preset_image' . $i,
				array(
					'settings' => 'jinr__design_preset_image' . $i,
					'section'  => 'jinr__design_preset_section',
					'type'     => 'hidden',
				)
			)
		);

		$wp_customize->add_setting('jinr__design_preset_button' . $i);
		$wp_customize->add_control(
			new Jinr_Demo_Import_Control(
				$wp_customize,
				'jinr__design_preset_button' . $i,
				array(
					'settings' => 'jinr__design_preset_button' . $i,
					'section'  => 'jinr__design_preset_section',
					'type'     => 'demo' . $i,
				)
			)
		);
	}
}
add_action('customize_register', 'jinr__add_design_preset_setting');
