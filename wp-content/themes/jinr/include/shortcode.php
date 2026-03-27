<?php
// 吹き出し
for ($i = 1; $i <= 10; $i++) {

	${'jinr_shortcode_fukidashi' . $i} = function ($atts, $content) use ($i) {

		${'image' . $i}                = 'jinr__fukidashi' . $i . '_image';
		${'image' . $i}                = ${'image' . $i}();
		${'name' . $i}                 = 'jinr__fukidashi' . $i . '_name';
		${'name' . $i}                 = ${'name' . $i}();
		${'type' . $i}                 = 'jinr__fukidashi' . $i . '_type';
		${'type' . $i}                 = ${'type' . $i}();
		${'layout' . $i}               = 'jinr__fukidashi' . $i . '_layout';
		${'layout' . $i}               = ${'layout' . $i}();
		${'imgborder_color' . $i}      = 'jinr__fukidashi' . $i . '_imgborder_color';
		${'imgborder_color' . $i}      = ${'imgborder_color' . $i}();
		${'border_color' . $i}         = 'jinr__fukidashi' . $i . '_border_color';
		${'border_color' . $i}         = ${'border_color' . $i}();
		${'bg_color' . $i}             = 'jinr__fukidashi' . $i . '_bg_color';
		${'bg_color' . $i}             = ${'bg_color' . $i}();
		${'border_weight' . $i}        = 'jinr__fukidashi' . $i . '_border_weight';
		${'border_weight' . $i}        = ${'border_weight' . $i}();
		${'img_color_type' . $i}       = 'jinr__fukidashi' . $i . '_imgborder_color_type';
		${'img_color_type' . $i}       = ${'img_color_type' . $i}();
		${'img_gradation_select' . $i} = 'jinr__fukidashi' . $i . '_imgborder_gradation';
		${'img_gradation_select' . $i} = ${'img_gradation_select' . $i}();
		${'color_type' . $i}           = 'jinr__fukidashi' . $i . '_border_color_type';
		${'color_type' . $i}           = ${'color_type' . $i}();

		extract(
			shortcode_atts(
				array(
					'image'                => ${'image' . $i},
					'name'                 => ${'name' . $i},
					'type'                 => ${'type' . $i},
					'layout'               => ${'layout' . $i},
					'imgborder_color'      => ${'imgborder_color' . $i},
					'border_color'         => ${'border_color' . $i},
					'bg_color'             => ${'bg_color' . $i},
					'border_weight'        => ${'border_weight' . $i},
					'img_color_type'       => ${'img_color_type' . $i}, // 隠れパラメーター
					'img_gradation_select' => ${'img_gradation_select' . $i}, // 隠れパラメーター
					'color_type'           => ${'color_type' . $i}, // 隠れパラメーター
					'imgborder_color_select'  => "", // ブロックの個別設定の色種を判別
					'border_color_select'  => "", // ブロックの個別設定の色種を判別
				),
				$atts
			)
		);

		if ($img_color_type == 'simplecolor') {
			if ($imgborder_color_select == 'simplecolor') {
				$imgborder_color_div = '<div class="a--fukidashi-img-circle" style="background-color:' . $imgborder_color . ';"></div>';
			} elseif ($imgborder_color_select == 'gradation') {
				$imgborder_color_div = '<div class="a--fukidashi-img-circle" style="background:' . $imgborder_color . ';"></div>';
			} else {
				$imgborder_color_div = '<div class="a--fukidashi-img-circle" style="background-color:' . $imgborder_color . ';"></div>';
			}
		} elseif ($img_color_type == 'gradation') {
			if ($imgborder_color_select == 'simplecolor') {
				$imgborder_color_div = '<div class="a--fukidashi-img-circle" style="background-color:' . $imgborder_color . ';"></div>';
			} elseif ($imgborder_color_select == 'gradation') {
				$imgborder_color_div = '<div class="a--fukidashi-img-circle" style="background:' . $imgborder_color . ';"></div>';
			} else {
				$imgborder_color_div = '<div class="a--fukidashi-img-circle d--jinr-' . $img_gradation_select . '"></div>';
			}
		} else {
			if ($imgborder_color_select == 'simplecolor') {
				$imgborder_color_div = '<div class="a--fukidashi-img-circle" style="background-color:' . $imgborder_color . ';"></div>';
			} elseif ($imgborder_color_select == 'graddation') {
				$imgborder_color_div = '<div class="a--fukidashi-img-circle" style="background:' . $imgborder_color . ';"></div>';
			} else {
				$imgborder_color_div = '';
			}
		}

		if ($border_color_select == 'simplecolor') {
			$color_type = 'simplecolor';
		} elseif ($border_color_select == 'transparent') {
			$color_type = 'transparent';
			$border_color = "";
		} else {
			$color_type = $color_type;
		}

		if (!$image == '') {
			$image = $image;
		} else {
			$image = get_template_directory_uri() . '/lib/img/image_setting.png';
		}

		if ($type == 'd--fukidashi-chat') {
			return '
				<div class="o--jinr-fukidashi d--fukidashi-chat ' . $layout . ' ' . $border_weight . ' d--border-' . $color_type . '">
				<div class="c--fukidashi-img-box">
				<div class="a--fukidashi-img d--fukidashi-img-' . $img_color_type . '"><img width="72" height="72" src="' . $image . '" alt="' . $name . '"/></div>
				<span class="a--fukidashi-icon-name">' . $name . '</span>
				' . $imgborder_color_div . '
				</div>
				<div class="c--fukidashi-contents" style="border-color:' . $border_color . '; background-color:' . $bg_color . ';">' . do_shortcode($content) . '<span class="a--fukidashi-parts-after" style="color:' . $bg_color . ';"></span><span class="a--fukidashi-parts-before" style="color:' . $border_color . ';"></span></div>
				</div>
			';
		} elseif ($type == 'd--fukidashi-innervoice') {
			return '
				<div class="o--jinr-fukidashi d--fukidashi-innervoice ' . $layout . ' ' . $border_weight . ' d--border-' . $color_type . '">
				<div class="c--fukidashi-img-box">
				<div class="a--fukidashi-img d--fukidashi-img-' . $img_color_type . '"><img width="72" height="72" src="' . $image . '" alt="' . $name . '"/></div>
				<span class="a--fukidashi-icon-name">' . $name . '</span>
				' . $imgborder_color_div . '
				</div>
				<div class="c--fukidashi-contents" style="border-color:' . $border_color . '; background-color:' . $bg_color . ';">' . do_shortcode($content) . '<span class="a--fukidashi-parts-after" style="border-color:' . $border_color . '; background-color:' . $bg_color . ';"></span><span class="a--fukidashi-parts-before" style="border-color:' . $border_color . '; background-color:' . $bg_color . ';"></span></div>
				</div>
			';
		} else {
			return '
				<div class="o--jinr-fukidashi d--fukidashi-interview ' . $layout . ' ' . $border_weight . ' d--border-' . $color_type . '">
				<div class="c--fukidashi-contents" style="border-color:' . $border_color . '; background-color:' . $bg_color . ';">' . do_shortcode($content) . '<span class="a--fukidashi-parts-after" style="color:' . $bg_color . ';"></span><span class="a--fukidashi-parts-before" style="color:' . $border_color . ';"></span><div class="c--fukidashi-img-box">
				<div class="a--fukidashi-img d--fukidashi-img-' . $img_color_type . '"><img width="72" height="72" src="' . $image . '" alt="' . $name . '"/></div>
				<span class="a--fukidashi-icon-name">' . $name . '</span>
				' . $imgborder_color_div . '
				</div></div>
				</div>
			';
		}
	};
	add_shortcode('jinr_fukidashi' . $i, ${'jinr_shortcode_fukidashi' . $i});
}

// ボタン
for ($i = 1; $i <= 10; $i++) {

	${'jinr_button_load' . $i} = function ($atts, $content) use ($i) {

		${'button0' . $i . '_design'}           = 'jinr__button0' . $i . '_design';
		${'button0' . $i . '_design'}           = ${'button0' . $i . '_design'}();
		${'button0' . $i . '_solid_hover'}      = 'jinr__button0' . $i . '_solid_hover';
		${'button0' . $i . '_solid_hover'}      = ${'button0' . $i . '_solid_hover'}();
		${'button0' . $i . '_outline_hover'}    = 'jinr__button0' . $i . '_outline_hover';
		${'button0' . $i . '_outline_hover'}    = ${'button0' . $i . '_outline_hover'}();
		${'button0' . $i . '_arrow_hover'}      = 'jinr__button0' . $i . '_arrow_hover';
		${'button0' . $i . '_arrow_hover'}      = ${'button0' . $i . '_arrow_hover'}();
		${'button0' . $i . '_solid_animation'} = 'jinr__button0' . $i . '_solid_animation';
		${'button0' . $i . '_solid_animation'} = ${'button0' . $i . '_solid_animation'}();
		${'button0' . $i . '_outline_animation'} = 'jinr__button0' . $i . '_outline_animation';
		${'button0' . $i . '_outline_animation'} = ${'button0' . $i . '_outline_animation'}();
		${'button0' . $i . '_arrow_animation'} = 'jinr__button0' . $i . '_arrow_animation';
		${'button0' . $i . '_arrow_animation'} = ${'button0' . $i . '_arrow_animation'}();

		$design_type = ${'button0' . $i . '_design'};

		extract(
			shortcode_atts(
				array(
					'design'                => ${'button0' . $i . '_design'},
					'hover'               => ${'button0' . $i . '_' . $design_type . '_hover'},
					'animation'               => ${'button0' . $i . '_' . $design_type . '_animation'},
					'target'         => false,
					'href'             => '',
					'align'        => 'd--button-center',
					'af'			   => '',
				),
				$atts
			)
		);

		if ($hover == 'none') {
			$hover = '';
		}
		if ($animation == 'none') {
			$animation = '';
		}

		if ($target == true) {
			if ($af == '') {
				return '
					<div class="o--button-inner d--button-type' . $i . ' d--button-' . $design . ' ' . $hover . ' ' . $animation . ' ' . $align . '"><span class="a--button-hover"><a href="' . $href . '" target="_blank" rel="noopener">' . $content . '</a></span></div>
				';
			} else {
				return '
					<div class="o--button-inner d--button-type' . $i . ' d--button-' . $design . ' ' . $hover . ' ' . $animation . ' ' . $align . '">' . $content . '</div>
				';
			}
		} else {
			if ($af == '') {
				return '
					<div class="o--button-inner d--button-type' . $i . ' d--button-' . $design . ' ' . $hover . ' ' . $animation . ' ' . $align . '"><span class="a--button-hover"><a href="' . $href . '">' . $content . '</a></span></div>
				';
			} else {
				return '
					<div class="o--button-inner d--button-type' . $i . ' d--button-' . $design . ' ' . $hover . ' ' . $animation . ' ' . $align . '">' . $content . '</div>
				';
			}
		}
	};
	add_shortcode('jinr_button' . $i, ${'jinr_button_load' . $i});
}

// シンプルアイコンボックス
for ($i = 1; $i <= 8; $i++) {

	${'jinr_simple_iconbox' . $i} = function ($atts, $content) use ($i) {

		${'icon' . $i} = 'jinr__simple_iconbox' . $i . '_icon';
		${'icon' . $i} = ${'icon' . $i}();

		extract(
			shortcode_atts(
				array(
					'icon' => ${'icon' . $i},
				),
				$atts
			)
		);

		return '
			<i class="jif jin-ifont-' . $icon . '" aria-hidden="true"></i>
			' . do_shortcode($content) . '
		';
	};
	add_shortcode('jinr_simple_iconbox' . $i, ${'jinr_simple_iconbox' . $i});
}

// タイトル付アイコンボックス
for ($i = 1; $i <= 4; $i++) {

	${'jinr_heading_iconbox' . $i} = function ($atts, $content) use ($i) {

		${'icon' . $i}  = 'jinr__heading_iconbox' . $i . '_icon';
		${'icon' . $i}  = ${'icon' . $i}();
		${'title' . $i} = 'jinr__heading_iconbox' . $i . '_title';
		${'title' . $i} = ${'title' . $i}();

		extract(
			shortcode_atts(
				array(
					'icon'  => ${'icon' . $i},
					'title' => ${'title' . $i},
				),
				$atts
			)
		);

		return '
			<div class="a--heading-iconbox-title">
			<div class="a--iconbox-title-icon"><i class="jif jin-ifont-' . $icon . '" aria-hidden="true"></i></div>
			<div class="a--iconbox-title-text">' . $title . '</div>
			</div>
			' . do_shortcode($content) . '
		';
	};
	add_shortcode('jinr_heading_iconbox' . $i, ${'jinr_heading_iconbox' . $i});
}


// プロフィール
function jinr_profile($atts)
{
	extract(
		shortcode_atts(
			array(
				'image'  => jinr__profile_image_url(),
				'name' => jinr__profile_name(),
				'job' => jinr__profile_job(),
				'introduction' => jinr__profile_introduction(),
				'button_link' => jinr__profile_button_link(),
				'sns_display' => jinr__sns_follow_display_proile(),
				'twitter' => jinr__tw_url(),
				'facebook' => jinr__fb_url(),
				'instagram' => jinr__insta_url(),
				'youtube' => jinr__youtube_url(),
				'line' => jinr__line_url(),
				'contact' => jinr__contact_url(),
				'color' => jinr__profile_sns_color(),
				'design' => "d--profile-style1",
				'author_id' => '1',
			),
			$atts
		)
	);

	//ブロック内での個別設定とカスタマイザーの表示の兼ね合い
	if ($sns_display == "on") {
		$sns_display = "on";
	} elseif ($sns_display == "off") {
		$sns_display = "off";
	} elseif ($sns_display == true) {
		$sns_display = "on";
	} else {
		$sns_display = "off";
	}

	//拡張子の前と後で分割
	if (!$image == "") {
		$extension = strrchr($image, '.');
		$file_name_url = explode($extension, $image);
		$file_name_url[0] = strpos($file_name_url[0], '-scaled') ? str_replace('-scaled', '', $file_name_url[0]) : $file_name_url[0];
		$image = $file_name_url[0] . '-150x150' . $extension;
	} else {
		$image = get_template_directory_uri() . '/lib/img/image_setting.png';
	}
	if (jinr__profile_image_url() == get_template_directory_uri() . '/lib/img/image_setting.png') {
		$image = get_template_directory_uri() . '/lib/img/image_setting.png';
	}

	//共著用の情報取得
	if ($author_id != '1' && get_user_meta($author_id, 'profile_name')[0] != "") {
		if ($design == "d--profile-author") {
			$twitter = get_user_meta($author_id, 'twitter')[0];
			$facebook = get_user_meta($author_id, 'facebook')[0];
			$instagram = get_user_meta($author_id, 'instagram')[0];
			$line = get_user_meta($author_id, 'line')[0];
			$youtube = get_user_meta($author_id, 'youtube')[0];
			$contact = get_user_meta($author_id, 'contact')[0];
			$name = get_user_meta($author_id, 'profile_name')[0];
			$job = get_user_meta($author_id, 'job')[0];
			$introduction = get_user_meta($author_id, 'introduction')[0];
			$button_link = get_user_meta($author_id, 'profile_link')[0];
			$image = get_user_meta($author_id, 'profile_image')[0] ? get_user_meta($author_id, 'profile_image')[0] : get_template_directory_uri() . '/lib/img/image_setting.png';
		}
	}

	if (!jinr__profile_button_link() == "") {
		$button_link_code_image = '<a href="' . $button_link . '" class="a--profile-image"><img src=' . $image . ' alt="' . $name . '" width="90" height="90" /></a>';
		$button_link_code_text = '<a href="' . $button_link . '" class="a--profile-link d--bold"><span>プロフィールを読む</span><i class="jin-icons jin-ifont-arrow-thin" aria-hidden="true"></i></a>';
	} else {
		$button_link_code_image = '<div class="a--profile-image"><img src=' . $image . ' alt="' . $name . '" width="90" height="90" /></div>';
		$button_link_code_text = '';
	}

	$sns_item_list = '';

	if ($twitter !== "") {
		$sns_item_list .= '<a href=' . $twitter . ' class="a--sns-item-link d--twitter" ><i class="jin-icons jin-ifont-twitter" aria-hidden="true"></i><span>X</span></a>';
	}
	if ($facebook !== "") {
		$sns_item_list .= '<a href=' . $facebook . ' class="a--sns-item-link d--facebook" ><i class="jin-icons jin-ifont-facebook" aria-hidden="true"></i><span>Facebook</span></a>';
	}
	if ($instagram !== "") {
		$sns_item_list .= '<a href=' . $instagram . ' class="a--sns-item-link d--instagram"><i class="jin-icons jin-ifont-instagram" aria-hidden="true"></i><span>Instagram</span></a>';
	}
	if ($youtube !== "") {
		$sns_item_list .= '<a href=' . $youtube . ' class="a--sns-item-link d--youtube"><i class="jin-icons jin-ifont-youtube" aria-hidden="true"></i><span>YouTube</span></a>';
	}
	if ($line !== "") {
		$sns_item_list .= '<a href=' . $line . ' class="a--sns-item-link d--line"><i class="jin-icons jin-ifont-line" aria-hidden="true"></i><span>LINE</span></a>';
	}
	if ($contact !== "") {
		$sns_item_list .= '<a href=' . $contact . ' class="a--sns-item-link d--contact"><i class="jin-icons jin-ifont-mail" aria-hidden="true"></i><span>Contact</span></a>';
	}

	if ($sns_display == "on") {
		if ($sns_item_list !== "") {
			$sns_code = '<div class="o--profile-sns"><div class="c--profile-sns-item">' . $sns_item_list . '</div></div>';
		} else {
			$sns_code = '';
		}
	} else {
		$sns_code = '';
	}

	if ($design == "d--profile-author") {
		return '<section class="b--jinr-block b--jinr-profile d--sns-display-' . $sns_display . ' ' . $color . ' ' . $design . '">
		<div class="o--profile-contents">' . $button_link_code_image . '<div class="c--profile-meta"><div class="a--profile-name d--bold">' . $name . '</div><div class="a--profile-job">' . $job . '</div>' . $sns_code . '</div><div class="a--profile-introduction">' . $introduction . '</div></div></section>';
	} else {
		return '<section class="b--jinr-block b--jinr-profile d--sns-display-' . $sns_display . ' ' . $color . ' ' . $design . '"><div class="o--profile-contents">' . $button_link_code_image . '<div class="c--profile-meta"><div class="a--profile-name d--bold">' . $name . '</div><div class="a--profile-job">' . $job . '</div></div></div><div class="a--profile-introduction"><div class="a--profile-label ef d--bold">Profile</div><div class="a--profile-text">' . $introduction . '</div>' . $button_link_code_text . $sns_code . '</div></section>';
	}
}
add_shortcode('jinr_profile', 'jinr_profile');
