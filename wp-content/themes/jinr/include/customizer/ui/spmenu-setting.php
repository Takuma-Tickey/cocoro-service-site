<?php

/*スマホメニュー設定*/

function jinr__add_section_spmenu_setting($wp_customize)
{

	$query['autofocus[section]'] = 'jinr__gradation_setting_tab';
	$section_link = add_query_arg($query, admin_url('customize.php'));

	//カテゴリー一覧取得
	$categories = get_categories();
	if (!$categories) {
		$categoryList = [
			'カテゴリーがありません',
		];
	}else{
		foreach ($categories as $category) {
			$category_name[] = $category->name;
			$category_id[] = $category->term_id;
		}
		$categoryList = array_combine((array)$category_id, (array)$category_name);
	}

	$wp_customize->add_section(
		'jinr__spmenu_setting_panel',
		array(
			'title'    => 'スマホ専用機能',
			'priority' => 13,
		)
	);
	$wp_customize->add_setting('jinr__sp_tab', array('default' => 'menu',));
	$wp_customize->add_control(
		new Jinr_Base_Control(
			$wp_customize,
			'jinr__sp_tab',
			array(
				'settings' => 'jinr__sp_tab',
				'section'  => 'jinr__spmenu_setting_panel',
				'type'     => 'tab',
				'choices'  => array(
					'menu' => 'スマホメニュー',
					'cvbtn' => 'コンバージョンボタン',
				),
			)
		)
	);

	$wp_customize->add_setting('jinr__spmenu_image');
	$wp_customize->add_control(
		new Jinr_Base_Control(
			$wp_customize,
			'jinr__spmenu_image',
			array(
				'settings'    => 'jinr__spmenu_image',
				'section'     => 'jinr__spmenu_setting_panel',
				'type'        => 'spmenu',
				'description' => get_template_directory_uri() . '/include/customizer/img/spmenu-img.png'
			)
		)
	);

	for ($i = 1; $i <= 4; $i++) {

		$wp_customize->add_setting('jinr__spmenu_extra_settings' . ($i));
		$wp_customize->add_control(
			new Jinr_Base_Control(
				$wp_customize,
				'jinr__spmenu_extra_settings' . ($i),
				array(
					'settings' => 'jinr__spmenu_extra_settings' . ($i),
					'label'    => 'メニュー' . $i,
					'section'  => 'jinr__spmenu_setting_panel',
					'type'     => 'hidden',
				)
			)
		);

		$wp_customize->add_setting(
			'jinr__sp_menu' . $i . '_label',
			array(
				'default' => '',
			)
		);
		$wp_customize->add_control(
			'jinr__sp_menu' . $i . '_label',
			array(
				'settings' => 'jinr__sp_menu' . $i . '_label',
				'section'  => 'jinr__spmenu_setting_panel',
				'label'    => 'メニュー名',
				'type'     => 'text',
				'input_attrs' => array(
					'placeholder' => 'メニュー名を入力してください',
				)
			)
		);
		$wp_customize->add_setting(
			'jinr__sp_menu_icon_display' . $i . '',
			array(
				'default' => 'd--icon-notneed',
			)
		);
		$wp_customize->add_control(
			new Jinr_Base_Control(
				$wp_customize,
				'jinr__sp_menu_icon_display' . $i . '',
				array(
					'settings' =>
					'jinr__sp_menu_icon_display' . $i . '',
					'label'    => 'アイコン選択',
					'section'  =>
					'jinr__spmenu_setting_panel',
					'type'     => 'radio',
					'choices'  => array(
						'd--icon-need' => 'あり',
						'd--icon-notneed' => 'なし',
					),
				)
			)
		);
		$wp_customize->add_setting(
			'jinr__sp_menu' . $i . '_iconvisual',
			array(
				'default' => '',

			)
		);
		$wp_customize->add_control(
			new Jinr_Base_Control(
				$wp_customize,
				'jinr__sp_menu' . $i . '_iconvisual',
				array(
					'settings' => 'jinr__sp_menu' . $i . '_iconvisual',
					'section'  => 'jinr__spmenu_setting_panel',
					'type'     => 'text',
					'label'    => '選択中のアイコン',
					'description' => ' '
				)
			)
		);
		$wp_customize->add_setting(
			'jinr__sp_menu' . $i . '_choice',
			array(
				'default' => '',

			)
		);
		$wp_customize->add_control(
			'jinr__sp_menu' . $i . '_choice',
			array(
				'settings' => array(),
				'section'  => 'jinr__spmenu_setting_panel',
				'type'     => 'button',
				'input_attrs' => array(
					'value'    => 'アイコンを変更する',
					'class' => 'button js--iconList-btn' . $i . '',
				),
			)
		);
		$wp_customize->add_setting(
			'jinr__sp_menu' . $i . '_link',
			array(
				'default' => '',
			)
		);
		$wp_customize->add_control(
			new Jinr_Base_Control(
				$wp_customize,
				'jinr__sp_menu' . $i . '_link',
				array(
					'settings' => 'jinr__sp_menu' . $i . '_link',
					'section'  => 'jinr__spmenu_setting_panel',
					'type'     => 'text',
					'label'    => 'スマホメニューのリンク先URL',
					'input_attrs' => array(
						'placeholder' => 'リンク先URL',
					)
				)
			)
		);
	}

	$wp_customize->add_setting('jinr__spmenu_extra_settings5');
	$wp_customize->add_control(
		new Jinr_Base_Control(
			$wp_customize,
			'jinr__spmenu_extra_settings5',
			array(
				'settings'    => 'jinr__spmenu_extra_settings5',
				'label'       => '表示設定',
				'section'     => 'jinr__spmenu_setting_panel',
				'type'        => 'hidden',
			)
		)
	);

	$wp_customize->add_setting('jinr__spmenu_toppage_display', array('default' => 'on',));
	$wp_customize->add_control(
		new Jinr_Base_Control(
			$wp_customize,
			'jinr__spmenu_toppage_display',
			array(
				'section'  => 'jinr__spmenu_setting_panel',
				'settings' => 'jinr__spmenu_toppage_display',
				'type'     => 'radio',
				'label'       => 'TOPページでの表示',
				'choices'  => array(
					'on' => '表示',
					'off' => '非表示',
				),
			)
		)
	);

	$wp_customize->add_setting('jinr__cvbtn_image');
	$wp_customize->add_control(
		new Jinr_Base_Control(
			$wp_customize,
			'jinr__cvbtn_image',
			array(
				'settings'    => 'jinr__cvbtn_image',
				'section'     => 'jinr__spmenu_setting_panel',
				'type'        => 'spmenu',
				'description' => get_template_directory_uri() . '/include/customizer/img/sp-conversion-img.png'
			)
		)
	);


	$wp_customize->add_setting('jinr__spcv_extra_settings1');
	$wp_customize->add_control(
		new Jinr_Base_Control(
			$wp_customize,
			'jinr__spcv_extra_settings1',
			array(
				'settings' => 'jinr__spcv_extra_settings1',
				'label'    => '全記事ページ',
				'section'  => 'jinr__spmenu_setting_panel',
				'type'     => 'hidden',
			)
		)
	);

	$wp_customize->add_setting('jinr__spcv_all_display', array('default' => 'off',));
	$wp_customize->add_control(
		new Jinr_Base_Control(
			$wp_customize,
			'jinr__spcv_all_display',
			array(
				'section'  => 'jinr__spmenu_setting_panel',
				'settings' => 'jinr__spcv_all_display',
				'type'     => 'radio',
				'choices'  => array(
					'on' => '利用する',
					'off' => '利用しない',
				),
			)
		)
	);

	$wp_customize->add_setting('jinr__spcv_all_maintext', array('default' => '',));
	$wp_customize->add_control(
		'jinr__spcv_all_maintext',
		array(
			'label'    => 'メインテキスト',
			'section'  => 'jinr__spmenu_setting_panel',
			'settings' => 'jinr__spcv_all_maintext',
			'type'     => 'text',
		)
	);

	$wp_customize->add_setting('jinr__spcv_all_subtext', array('default' => '',));
	$wp_customize->add_control(
		'jinr__spcv_all_subtext',
		array(
			'label'    => 'サブテキスト',
			'section'  => 'jinr__spmenu_setting_panel',
			'settings' => 'jinr__spcv_all_subtext',
			'type'     => 'text',
		)
	);

	$wp_customize->add_setting(
		'jinr__spcv_all_iconvisual',
		array(
			'default' => '',

		)
	);
	$wp_customize->add_control(
		new Jinr_Base_Control(
			$wp_customize,
			'jinr__spcv_all_iconvisual',
			array(
				'settings' => 'jinr__spcv_all_iconvisual',
				'section'  => 'jinr__spmenu_setting_panel',
				'type'     => 'text',
				'label'    => '選択中のアイコン',
				'description' => '<i class="jin-icons jin-ifont-cart"></i>'
			)
		)
	);
	$wp_customize->add_setting(
		'jinr__spcv_all_choice',
		array(
			'default' => '',

		)
	);
	$wp_customize->add_control(
		'jinr__spcv_all_choice',
		array(
			'settings' => array(),
			'section'  => 'jinr__spmenu_setting_panel',
			'type'     => 'button',
			'input_attrs' => array(
				'value'    => 'アイコンを変更する',
				'class' => 'button js--iconList-btn',
			),
		)
	);

	$wp_customize->add_setting('jinr__spcv_all_image_select', array('default' => 'd--image-notneed',));
	$wp_customize->add_control(
		new Jinr_Base_Control(
			$wp_customize,
			'jinr__spcv_all_image_select',
			array(
				'label'    => 'アイコンを画像に置き換える',
				'section'  => 'jinr__spmenu_setting_panel',
				'settings' => 'jinr__spcv_all_image_select',
				'type'     => 'radio',
				'choices'  => array(
					'd--image-need' => 'ON',
					'd--image-notneed' => 'OFF',
				),
			)
		)
	);

	$wp_customize->add_setting('jinr__spcv_all_image_url', array('default' => '',));
	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'jinr__spcv_all_image_url',
			array(
				'section'  => 'jinr__spmenu_setting_panel',
				'settings' => 'jinr__spcv_all_image_url',
			)
		)
	);

	$wp_customize->add_setting('jinr__spcv_all_url', array('default' => '',));
	$wp_customize->add_control(
		'jinr__spcv_all_url',
		array(
			'label'    => 'リンク先URL',
			'section'  => 'jinr__spmenu_setting_panel',
			'settings' => 'jinr__spcv_all_url',
			'type'     => 'text',
		)
	);

	$wp_customize->add_setting(
		'jinr__spcv_all_url_external',
		array(
			'default' => false,
		)
	);
	$wp_customize->add_control(
		new Jinr_CheckBox_Control(
			$wp_customize,
			'jinr__spcv_all_url_external',
			array(
				'settings' => 'jinr__spcv_all_url_external',
				'label'    => '別タブで開く',
				'section'  => 'jinr__spmenu_setting_panel',
				'type'     => 'checkbox',
			)
		)
	);

	$wp_customize->add_setting('jinr__spcv_all_style', array('default' => 'd--spcv-outline'));
	$wp_customize->add_control(
		new Jinr_Base_Control(
			$wp_customize,
			'jinr__spcv_all_style',
			array(
				'settings' => 'jinr__spcv_all_style',
				'label'    => 'デザイン',
				'section'  => 'jinr__spmenu_setting_panel',
				'type'     => 'radio',
				'choices'  => array(
					'd--spcv-outline' => 'アウトライン',
					'd--spcv-solid' => 'ベタ塗り',
				),
			)
		)
	);

	$wp_customize->add_setting('jinr__spcv_all_color_type', array('default' => 'simplecolor'));
	$wp_customize->add_control(
		new Jinr_Base_Control(
			$wp_customize,
			'jinr__spcv_all_color_type',
			array(
				'settings' => 'jinr__spcv_all_color_type',
				'label'    => 'ボタンのカラー設定',
				'section'  => 'jinr__spmenu_setting_panel',
				'type'     => 'radio',
				'choices'  => array(
					'simplecolor' => '単色',
					'gradation'   => 'グラデーション',
				),
			)
		)
	);

	$wp_customize->add_setting('jinr__spcv_all_color', array('default' => '#008db7'));
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'jinr__spcv_all_color',
			array(
				'section'  => 'jinr__spmenu_setting_panel',
				'settings' => 'jinr__spcv_all_color',
			)
		)
	);

	$wp_customize->add_setting('jinr__spcv_all_color_gradation_select', array('default' => 'd--jinr-gradation1'));
	$wp_customize->add_control(
		new Jinr_Base_Control(
			$wp_customize,
			'jinr__spcv_all_color_gradation_select',
			array(
				'settings' => 'jinr__spcv_all_color_gradation_select',
				'section'  => 'jinr__spmenu_setting_panel',
				'type'     => 'select',
				'choices'  => array(
					'd--jinr-gradation1' => 'グラデーション１',
					'd--jinr-gradation2' => 'グラデーション２',
					'd--jinr-gradation3' => 'グラデーション３',
				),

			)
		)
	);
	$wp_customize->add_setting('jinr__spcv_all_extra_sub1');
	$wp_customize->add_control(
		new Jinr_CheckBox_Control(
			$wp_customize,
			'jinr__spcv_all_extra_sub1',
			array(
				'settings' => 'jinr__spcv_all_extra_sub1',
				'section'  => 'jinr__spmenu_setting_panel',
				'type'     => 'input',
				'description' => '<a href="' . esc_url($section_link) . '">グラデーション登録</a>から色を編集できます',
			)
		)
	);



	$wp_customize->add_setting('jinr__spcv_all_text_color', array('default' => '#444444'));
	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'jinr__spcv_all_text_color',
			array(
				'label'    => '文字色',
				'section'  => 'jinr__spmenu_setting_panel',
				'settings' => 'jinr__spcv_all_text_color',
			)
		)
	);

	$wp_customize->add_setting('jinr__spcv_all_exclusion_id', array('default' => '',));
	$wp_customize->add_control(
		'jinr__spcv_all_exclusion_id',
		array(
			'label'    => '除外カテゴリーID',
			'section'  => 'jinr__spmenu_setting_panel',
			'settings' => 'jinr__spcv_all_exclusion_id',
			'type'     => 'text',
		)
	);

	$wp_customize->add_setting('jinr__spcv_all_exclusion_page_id', array('default' => '',));
	$wp_customize->add_control(
		'jinr__spcv_all_exclusion_page_id',
		array(
			'label'    => '除外ページID',
			'section'  => 'jinr__spmenu_setting_panel',
			'settings' => 'jinr__spcv_all_exclusion_page_id',
			'type'     => 'text',
		)
	);

	//特定カテゴリー
	for ($i = 1; $i <= 2; $i++) {

		$wp_customize->add_setting('jinr__spcv_extra_settings' . ($i + 1));
		$wp_customize->add_control(
			new Jinr_Base_Control(
				$wp_customize,
				'jinr__spcv_extra_settings' . ($i + 1),
				array(
					'settings' => 'jinr__spcv_extra_settings' . ($i + 1),
					'label'    => '特定カテゴリー' . $i,
					'section'  => 'jinr__spmenu_setting_panel',
					'type'     => 'hidden',
				)
			)
		);

		$wp_customize->add_setting('jinr__spcv_category' . $i . '_display', array('default' => 'off',));
		$wp_customize->add_control(
			new Jinr_Base_Control(
				$wp_customize,
				'jinr__spcv_category' . $i . '_display',
				array(
					'section'  => 'jinr__spmenu_setting_panel',
					'settings' => 'jinr__spcv_category' . $i . '_display',
					'type'     => 'radio',
					'choices'  => array(
						'on' => '利用する',
						'off' => '利用しない',
					),
				)
			)
		);

		$wp_customize->add_setting('jinr__spcv_category' . $i . '_select', array('default' => '1',));
		$wp_customize->add_control(
			new Jinr_Base_Control(
				$wp_customize,
				'jinr__spcv_category' . $i . '_select',
				array(
					'settings' => 'jinr__spcv_category' . $i . '_select',
					'label'    => 'カテゴリー選択',
					'section'  => 'jinr__spmenu_setting_panel',
					'type'     => 'select',
					'choices'  => $categoryList,
				)
			)
		);

		$wp_customize->add_setting('jinr__spcv_category' . $i . '_maintext', array('default' => '',));
		$wp_customize->add_control(
			'jinr__spcv_category' . $i . '_maintext',
			array(
				'label'    => 'メインテキスト',
				'section'  => 'jinr__spmenu_setting_panel',
				'settings' => 'jinr__spcv_category' . $i . '_maintext',
				'type'     => 'text',
			)
		);

		$wp_customize->add_setting('jinr__spcv_category' . $i . '_subtext', array('default' => '',));
		$wp_customize->add_control(
			'jinr__spcv_category' . $i . '_subtext',
			array(
				'label'    => 'サブテキスト',
				'section'  => 'jinr__spmenu_setting_panel',
				'settings' => 'jinr__spcv_category' . $i . '_subtext',
				'type'     => 'text',
			)
		);

		$wp_customize->add_setting(
			'jinr__spcv_category' . $i . '_iconvisual',
			array(
				'default' => '',

			)
		);
		$wp_customize->add_control(
			new Jinr_Base_Control(
				$wp_customize,
				'jinr__spcv_category' . $i . '_iconvisual',
				array(
					'settings' => 'jinr__spcv_category' . $i . '_iconvisual',
					'section'  => 'jinr__spmenu_setting_panel',
					'type'     => 'text',
					'label'    => '選択中のアイコン',
					'description' => '<i class="jin-icons jin-ifont-cart"></i>'
				)
			)
		);
		$wp_customize->add_setting(
			'jinr__spcv_category' . $i . '_choice',
			array(
				'default' => '',

			)
		);
		$wp_customize->add_control(
			'jinr__spcv_category' . $i . '_choice',
			array(
				'settings' => array(),
				'section'  => 'jinr__spmenu_setting_panel',
				'type'     => 'button',
				'input_attrs' => array(
					'value'    => 'アイコンを変更する',
					'class' => 'button js--iconList-btn' . $i . '',
				),
			)
		);

		$wp_customize->add_setting('jinr__spcv_category' . $i . '_image_select', array('default' => 'd--image-notneed',));
		$wp_customize->add_control(
			new Jinr_Base_Control(
				$wp_customize,
				'jinr__spcv_category' . $i . '_image_select',
				array(
					'label'    => 'アイコンを画像に置き換える',
					'section'  => 'jinr__spmenu_setting_panel',
					'settings' => 'jinr__spcv_category' . $i . '_image_select',
					'type'     => 'radio',
					'choices'  => array(
						'd--image-need' => 'ON',
						'd--image-notneed' => 'OFF',
					),
				)
			)
		);

		$wp_customize->add_setting('jinr__spcv_category' . $i . '_image_url', array('default' => '',));
		$wp_customize->add_control(
			new WP_Customize_Image_Control(
				$wp_customize,
				'jinr__spcv_category' . $i . '_image_url',
				array(
					'section'  => 'jinr__spmenu_setting_panel',
					'settings' => 'jinr__spcv_category' . $i . '_image_url',
				)
			)
		);

		$wp_customize->add_setting('jinr__spcv_category' . $i . '_url', array('default' => '',));
		$wp_customize->add_control(
			'jinr__spcv_category' . $i . '_url',
			array(
				'label'    => 'リンク先URL',
				'section'  => 'jinr__spmenu_setting_panel',
				'settings' => 'jinr__spcv_category' . $i . '_url',
				'type'     => 'text',
			)
		);

		$wp_customize->add_setting(
			'jinr__spcv_category' . $i . '_url_external',
			array(
				'default' => false,
			)
		);
		$wp_customize->add_control(
			new Jinr_CheckBox_Control(
				$wp_customize,
				'jinr__spcv_category' . $i . '_url_external',
				array(
					'settings' => 'jinr__spcv_category' . $i . '_url_external',
					'label'    => '別タブで開く',
					'section'  => 'jinr__spmenu_setting_panel',
					'type'     => 'checkbox',
				)
			)
		);

		$wp_customize->add_setting('jinr__spcv_category' . $i . '_style', array('default' => 'd--spcv-outline'));
		$wp_customize->add_control(
			new Jinr_Base_Control(
				$wp_customize,
				'jinr__spcv_category' . $i . '_style',
				array(
					'settings' => 'jinr__spcv_category' . $i . '_style',
					'label'    => 'デザイン',
					'section'  => 'jinr__spmenu_setting_panel',
					'type'     => 'radio',
					'choices'  => array(
						'd--spcv-outline' => 'アウトライン',
						'd--spcv-solid' => 'ベタ塗り',
					),
				)
			)
		);

		$wp_customize->add_setting('jinr__spcv_category' . $i . '_color_type', array('default' => 'simplecolor'));
		$wp_customize->add_control(
			new Jinr_Base_Control(
				$wp_customize,
				'jinr__spcv_category' . $i . '_color_type',
				array(
					'settings' => 'jinr__spcv_category' . $i . '_color_type',
					'label'    => 'ボタンのカラー設定',
					'section'  => 'jinr__spmenu_setting_panel',
					'type'     => 'radio',
					'choices'  => array(
						'simplecolor' => '単色',
						'gradation'   => 'グラデーション',
					),
				)
			)
		);

		$wp_customize->add_setting('jinr__spcv_category' . $i . '_color', array('default' => '#008db7'));
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'jinr__spcv_category' . $i . '_color',
				array(
					'section'  => 'jinr__spmenu_setting_panel',
					'settings' => 'jinr__spcv_category' . $i . '_color',
				)
			)
		);

		$wp_customize->add_setting('jinr__spcv_category' . $i . '_color_gradation_select', array('default' => 'd--jinr-gradation1'));
		$wp_customize->add_control(
			new Jinr_Base_Control(
				$wp_customize,
				'jinr__spcv_category' . $i . '_color_gradation_select',
				array(
					'settings' => 'jinr__spcv_category' . $i . '_color_gradation_select',
					'section'  => 'jinr__spmenu_setting_panel',
					'type'     => 'select',
					'choices'  => array(
						'd--jinr-gradation1' => 'グラデーション１',
						'd--jinr-gradation2' => 'グラデーション２',
						'd--jinr-gradation3' => 'グラデーション３',
					),

				)
			)
		);
		$wp_customize->add_setting('jinr__spcv_category' . $i . '_extra_sub1');
		$wp_customize->add_control(
			new Jinr_CheckBox_Control(
				$wp_customize,
				'jinr__spcv_category' . $i . '_extra_sub1',
				array(
					'settings' => 'jinr__spcv_category' . $i . '_extra_sub1',
					'section'  => 'jinr__spmenu_setting_panel',
					'type'     => 'input',
					'description' => '<a href="' . esc_url($section_link) . '">グラデーション登録</a>から色を編集できます',
				)
			)
		);

		$wp_customize->add_setting('jinr__spcv_category' . $i . '_text_color', array('default' => '#444444'));
		$wp_customize->add_control(
			new WP_Customize_Color_Control(
				$wp_customize,
				'jinr__spcv_category' . $i . '_text_color',
				array(
					'label'    => '文字色',
					'section'  => 'jinr__spmenu_setting_panel',
					'settings' => 'jinr__spcv_category' . $i . '_text_color',
				)
			)
		);
	}
}
add_action('customize_register', 'jinr__add_section_spmenu_setting');


function jinr__sp_menu1_label()
{
	return get_theme_mod('jinr__sp_menu1_label', '');
}
function jinr__sp_menu2_label()
{
	return get_theme_mod('jinr__sp_menu2_label', '');
}
function jinr__sp_menu3_label()
{
	return get_theme_mod('jinr__sp_menu3_label', '');
}
function jinr__sp_menu4_label()
{
	return get_theme_mod('jinr__sp_menu4_label', '');
}

function jinr__sp_menu1_link()
{
	return get_theme_mod('jinr__sp_menu1_link', '');
}
function jinr__sp_menu2_link()
{
	return get_theme_mod('jinr__sp_menu2_link', '');
}
function jinr__sp_menu3_link()
{
	return get_theme_mod('jinr__sp_menu3_link', '');
}
function jinr__sp_menu4_link()
{
	return get_theme_mod('jinr__sp_menu4_link', '');
}


function jinr__sp_menu_icon_display1()
{
	return get_theme_mod('jinr__sp_menu_icon_display1', '');
}
function jinr__sp_menu_icon_display2()
{
	return get_theme_mod('jinr__sp_menu_icon_display2', '');
}
function jinr__sp_menu_icon_display3()
{
	return get_theme_mod('jinr__sp_menu_icon_display3', '');
}
function jinr__sp_menu_icon_display4()
{
	return get_theme_mod('jinr__sp_menu_icon_display4', '');
}

function jinr__sp_menu_icon_name1()
{
	return get_theme_mod('jinr__sp_menu1_iconvisual', '');
}
function jinr__sp_menu_icon_name2()
{
	return get_theme_mod('jinr__sp_menu2_iconvisual', '');
}
function jinr__sp_menu_icon_name3()
{
	return get_theme_mod('jinr__sp_menu3_iconvisual', '');
}
function jinr__sp_menu_icon_name4()
{
	return get_theme_mod('jinr__sp_menu4_iconvisual', '');
}
function jinr__spmenu_toppage_display()
{
	return get_theme_mod('jinr__spmenu_toppage_display', 'on');
}


function jinr__spcv_all_display()
{
	return get_theme_mod('jinr__spcv_all_display', 'off');
}
function jinr__spcv_all_icon_name()
{
	return get_theme_mod('jinr__spcv_all_iconvisual', 'cart');
}
function jinr__spcv_all_maintext()
{
	return get_theme_mod('jinr__spcv_all_maintext', '');
}
function jinr__spcv_all_subtext()
{
	return get_theme_mod('jinr__spcv_all_subtext', '');
}
function jinr__spcv_all_image_select()
{
	return get_theme_mod('jinr__spcv_all_image_select', 'd--image-notneed');
}
function jinr__spcv_all_image_url()
{
	return get_theme_mod('jinr__spcv_all_image_url', '');
}
function jinr__spcv_all_url()
{
	return get_theme_mod('jinr__spcv_all_url', '');
}
function jinr__spcv_all_url_external()
{
	return get_theme_mod('jinr__spcv_all_url_external', false);
}
function jinr__spcv_all_style()
{
	return get_theme_mod('jinr__spcv_all_style', 'd--spcv-outline');
}
function jinr__spcv_all_color_type()
{
	return get_theme_mod('jinr__spcv_all_color_type', 'simplecolor');
}
function jinr__spcv_all_color()
{
	return get_theme_mod('jinr__spcv_all_color', '#008db7');
}
function jinr__spcv_all_color_gradation_select()
{
	return get_theme_mod('jinr__spcv_all_color_gradation_select', 'd--jinr-gradation1');
}
function jinr__spcv_all_text_color()
{
	return get_theme_mod('jinr__spcv_all_text_color', '#444444');
}
function jinr__spcv_all_exclusion_id()
{
	return get_theme_mod('jinr__spcv_all_exclusion_id', '');
}
function jinr__spcv_all_exclusion_page_id()
{
	return get_theme_mod('jinr__spcv_all_exclusion_page_id', '');
}



function jinr__spcv_category1_display()
{
	return get_theme_mod('jinr__spcv_category1_display', 'off');
}
function jinr__spcv_category1_select()
{
	return get_theme_mod('jinr__spcv_category1_select', '1');
}
function jinr__spcv_category1_icon_name()
{
	return get_theme_mod('jinr__spcv_category1_iconvisual', 'cart');
}
function jinr__spcv_category1_maintext()
{
	return get_theme_mod('jinr__spcv_category1_maintext', '');
}
function jinr__spcv_category1_subtext()
{
	return get_theme_mod('jinr__spcv_category1_subtext', '');
}
function jinr__spcv_category1_image_select()
{
	return get_theme_mod('jinr__spcv_category1_image_select', 'd--image-notneed');
}
function jinr__spcv_category1_image_url()
{
	return get_theme_mod('jinr__spcv_category1_image_url', '');
}
function jinr__spcv_category1_url()
{
	return get_theme_mod('jinr__spcv_category1_url', '');
}
function jinr__spcv_category1_url_external()
{
	return get_theme_mod('jinr__spcv_category1_url_external', false);
}
function jinr__spcv_category1_style()
{
	return get_theme_mod('jinr__spcv_category1_style', 'd--spcv-outline');
}
function jinr__spcv_category1_color_type()
{
	return get_theme_mod('jinr__spcv_category1_color_type', 'simplecolor');
}
function jinr__spcv_category1_color()
{
	return get_theme_mod('jinr__spcv_category1_color', '#008db7');
}
function jinr__spcv_category1_color_gradation_select()
{
	return get_theme_mod('jinr__spcv_category1_color_gradation_select', 'd--jinr-gradation1');
}
function jinr__spcv_category1_text_color()
{
	return get_theme_mod('jinr__spcv_category1_text_color', '#444444');
}

function jinr__spcv_category2_display()
{
	return get_theme_mod('jinr__spcv_category2_display', 'off');
}
function jinr__spcv_category2_select()
{
	return get_theme_mod('jinr__spcv_category2_select', '1');
}
function jinr__spcv_category2_icon_name()
{
	return get_theme_mod('jinr__spcv_category2_iconvisual', 'cart');
}
function jinr__spcv_category2_maintext()
{
	return get_theme_mod('jinr__spcv_category2_maintext', '');
}
function jinr__spcv_category2_subtext()
{
	return get_theme_mod('jinr__spcv_category2_subtext', '');
}
function jinr__spcv_category2_image_select()
{
	return get_theme_mod('jinr__spcv_category2_image_select', 'd--image-notneed');
}
function jinr__spcv_category2_image_url()
{
	return get_theme_mod('jinr__spcv_category2_image_url', '');
}
function jinr__spcv_category2_url()
{
	return get_theme_mod('jinr__spcv_category2_url', '');
}
function jinr__spcv_category2_url_external()
{
	return get_theme_mod('jinr__spcv_category2_url_external', false);
}
function jinr__spcv_category2_style()
{
	return get_theme_mod('jinr__spcv_category2_style', 'd--spcv-outline');
}
function jinr__spcv_category2_color_type()
{
	return get_theme_mod('jinr__spcv_category2_color_type', 'simplecolor');
}
function jinr__spcv_category2_color()
{
	return get_theme_mod('jinr__spcv_category2_color', '#008db7');
}
function jinr__spcv_category2_color_gradation_select()
{
	return get_theme_mod('jinr__spcv_category2_color_gradation_select', 'd--jinr-gradation1');
}
function jinr__spcv_category2_text_color()
{
	return get_theme_mod('jinr__spcv_category2_text_color', '#444444');
}


function jinr__spcv_category3_display()
{
	return get_theme_mod('jinr__spcv_category3_display', 'off');
}
function jinr__spcv_category3_select()
{
	return get_theme_mod('jinr__spcv_category3_select', '1');
}
function jinr__spcv_category3_icon_name()
{
	return get_theme_mod('jinr__spcv_category3_iconvisual', 'cart');
}
function jinr__spcv_category3_maintext()
{
	return get_theme_mod('jinr__spcv_category3_maintext', '');
}
function jinr__spcv_category3_subtext()
{
	return get_theme_mod('jinr__spcv_category3_subtext', '');
}
function jinr__spcv_category3_image_select()
{
	return get_theme_mod('jinr__spcv_category3_image_select', 'd--image-notneed');
}
function jinr__spcv_category3_image_url()
{
	return get_theme_mod('jinr__spcv_category3_image_url', '');
}
function jinr__spcv_category3_url()
{
	return get_theme_mod('jinr__spcv_category3_url', '');
}
function jinr__spcv_category3_url_external()
{
	return get_theme_mod('jinr__spcv_category3_url_external', false);
}
function jinr__spcv_category3_style()
{
	return get_theme_mod('jinr__spcv_category3_style', 'd--spcv-outline');
}
function jinr__spcv_category3_color_type()
{
	return get_theme_mod('jinr__spcv_category3_color_type', 'simplecolor');
}
function jinr__spcv_category3_color()
{
	return get_theme_mod('jinr__spcv_category3_color', '#008db7');
}
function jinr__spcv_category3_color_gradation_select()
{
	return get_theme_mod('jinr__spcv_category3_color_gradation_select', 'd--jinr-gradation1');
}
function jinr__spcv_category3_text_color()
{
	return get_theme_mod('jinr__spcv_category3_text_color', '#444444');
}