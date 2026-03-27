<?php

/*SNS設定*/
function jinr__add_section_sns_setting($wp_customize)
{
	$wp_customize->add_section(
		'jinr__sns_setting_section',
		array(
			'title'    => __jinr('SNS登録 / シェア設定'),
			'priority' => 11,
		)
	);


	$wp_customize->add_setting('jinr__fb_url');
	$wp_customize->add_control(
		new Jinr_Base_Control(
			$wp_customize,
			'jinr__fb_url',
			array(
				'label' => __jinr('FacebookアカウントのURL'),
				'section'     => 'jinr__sns_setting_section',
				'settings'    => 'jinr__fb_url',
				'type'        => 'text',
			)
		)
	);
	$wp_customize->add_setting('jinr__tw_url');
	$wp_customize->add_control(
		new Jinr_Base_Control(
			$wp_customize,
			'jinr__tw_url',
			array(
				'label' => __jinr('XアカウントのURL'),
				'section'     => 'jinr__sns_setting_section',
				'settings'    => 'jinr__tw_url',
				'type'        => 'text',
			)
		)
	);
	$wp_customize->add_setting('jinr__insta_url');
	$wp_customize->add_control(
		new Jinr_Base_Control(
			$wp_customize,
			'jinr__insta_url',
			array(
				'label' => __jinr('instagramアカウントのURL'),
				'section'     => 'jinr__sns_setting_section',
				'settings'    => 'jinr__insta_url',
				'type'        => 'text',
			)
		)
	);
	$wp_customize->add_setting('jinr__youtube_url');
	$wp_customize->add_control(
		new Jinr_Base_Control(
			$wp_customize,
			'jinr__youtube_url',
			array(
				'label' => __jinr('YouTubeアカウントのURL'),
				'section'     => 'jinr__sns_setting_section',
				'settings'    => 'jinr__youtube_url',
				'type'        => 'text',
			)
		)
	);
	$wp_customize->add_setting('jinr__line_url');
	$wp_customize->add_control(
		new Jinr_Base_Control(
			$wp_customize,
			'jinr__line_url',
			array(
				'label' => __jinr('LINEアカウントのURL'),
				'section'     => 'jinr__sns_setting_section',
				'settings'    => 'jinr__line_url',
				'type'        => 'text',
			)
		)
	);
	$wp_customize->add_setting('jinr__contact_url');
	$wp_customize->add_control(
		new Jinr_Base_Control(
			$wp_customize,
			'jinr__contact_url',
			array(
				'label' => __jinr('お問い合わせページのURL'),
				'section'     => 'jinr__sns_setting_section',
				'settings'    => 'jinr__contact_url',
				'type'        => 'text',
			)
		)
	);

	$wp_customize->add_setting('jinr__sns_extra_settings4');
	$wp_customize->add_control(
		new Jinr_Base_Control(
			$wp_customize,
			'jinr__sns_extra_settings4',
			array(
				'settings' => 'jinr__sns_extra_settings4',
				'label'    => 'フォローボタン設定',
				'section'  => 'jinr__sns_setting_section',
				'type'     => 'hidden',
			)
		)
	);

	$wp_customize->add_setting(
		'jinr__profile_sns_color',
		array(
			'default' => 'd--theme-color',
		)
	);
	$wp_customize->add_control(
		new Jinr_Base_Control(
			$wp_customize,
			'jinr__profile_sns_color',
			array(
				'settings' => 'jinr__profile_sns_color',
				'label'    => 'SNSフォローボタンの色',
				'section'  => 'jinr__sns_setting_section',
				'type'     => 'radio',
				'choices'  => array(
					'd--brand-color' => 'ブランドカラー',
					'd--theme-color' => 'テーマカラー',
				),
			)
		)
	);

	$wp_customize->add_setting(
		'jinr__sns_follow_display'
	);
	$wp_customize->add_control(
		new Jinr_CheckBox_Control(
			$wp_customize,
			'jinr__sns_follow_display',
			array(
				'settings' => 'jinr__sns_follow_display',
				'label'    => '表示する場所',
				'section'  => 'jinr__sns_setting_section',
				'type'     => 'input',
			)
		)
	);

	$wp_customize->add_setting(
		'jinr__sns_follow_display_proile',
		array(
			'default' => true,
		)
	);
	$wp_customize->add_control(
		new Jinr_CheckBox_Control(
			$wp_customize,
			'jinr__sns_follow_display_proile',
			array(
				'settings' => 'jinr__sns_follow_display_proile',
				'label'    => '記事終わりの著者情報内',
				'section'  => 'jinr__sns_setting_section',
				'type'     => 'checkbox',
			)
		)
	);
	$wp_customize->add_setting(
		'jinr__sns_follow_display_hamburger',
		array(
			'default' => true,
		)
	);
	$wp_customize->add_control(
		new Jinr_CheckBox_Control(
			$wp_customize,
			'jinr__sns_follow_display_hamburger',
			array(
				'settings' => 'jinr__sns_follow_display_hamburger',
				'label'    => 'ハンバーガーメニュー内',
				'section'  => 'jinr__sns_setting_section',
				'type'     => 'checkbox',
			)
		)
	);
	$wp_customize->add_setting('jinr__sns_follow_hamburger_label',array('default' => 'Follow Me',));
	$wp_customize->add_control(
		new Jinr_Base_Control(
			$wp_customize,
			'jinr__sns_follow_hamburger_label',
			array(
				'label' => __jinr('ラベルのテキスト'),
				'section'     => 'jinr__sns_setting_section',
				'settings'    => 'jinr__sns_follow_hamburger_label',
				'type'        => 'text',
			)
		)
	);

	$wp_customize->add_setting('jinr__sns_extra_settings5');
	$wp_customize->add_control(
		new Jinr_Base_Control(
			$wp_customize,
			'jinr__sns_extra_settings5',
			array(
				'settings' => 'jinr__sns_extra_settings5',
				'label'    => 'シェアボタン設定',
				'section'  => 'jinr__sns_setting_section',
				'type'     => 'hidden',
			)
		)
	);

	$wp_customize->add_setting(
		'jinr__sns_share_design',
		array(
			'default' => 'd--sns-share-design1',
		)
	);
	$wp_customize->add_control(
		new Jinr_Base_Control(
			$wp_customize,
			'jinr__sns_share_design',
			array(
				'settings' => 'jinr__sns_share_design',
				'label'    => __jinr('デザイン選択'),
				'section'  => 'jinr__sns_setting_section',
				'type'     => 'radio',
				'choices'  => array(
					'd--sns-share-design1' => '',
					'd--sns-share-design2' => '',
				),
			)
		)
	);

	$wp_customize->add_setting(
		'jinr__sns_share_color',
		array(
			'default' => 'd--sns-share-color-solid',
		)
	);
	$wp_customize->add_control(
		new Jinr_Base_Control(
			$wp_customize,
			'jinr__sns_share_color',
			array(
				'settings' => 'jinr__sns_share_color',
				'section'  => 'jinr__sns_setting_section',
				'type'     => 'radio',
				'choices'  => array(
					'd--sns-share-color-solid' => 'ベタ塗り',
					'd--sns-share-color-white' => '白抜き',
				),
			)
		)
	);

	$wp_customize->add_setting(
		'jinr__sns_sharebutton_display'
	);
	$wp_customize->add_control(
		new Jinr_CheckBox_Control(
			$wp_customize,
			'jinr__sns_sharebutton_display',
			array(
				'settings' => 'jinr__sns_sharebutton_display',
				'label'    => '表示する場所',
				'section'  => 'jinr__sns_setting_section',
				'type'     => 'input',
			)
		)
	);

	$wp_customize->add_setting('jinr__sns_share_bottom_display', array('default' => true));
	$wp_customize->add_control(
		new Jinr_CheckBox_Control(
			$wp_customize,
			'jinr__sns_share_bottom_display',
			array(
				'settings' => 'jinr__sns_share_bottom_display',
				'label'    => '記事下',
				'section'  => 'jinr__sns_setting_section',
				'type'     => 'checkbox',
			)
		)
	);

	$wp_customize->add_setting(
		'jinr__sns_sharebutton_display_twitter',
		array(
			'default' => false,
		)
	);
	$wp_customize->add_control(
		new Jinr_CheckBox_Control(
			$wp_customize,
			'jinr__sns_sharebutton_display_twitter',
			array(
				'settings' => 'jinr__sns_sharebutton_display_twitter',
				'label'    => '記事おわり（X）',
				'section'  => 'jinr__sns_setting_section',
				'type'     => 'checkbox',
			)
		)
	);
	$wp_customize->add_setting('jinr__sns_sharebutton_twitter_text',array('default' => 'Xでコメントする',));
	$wp_customize->add_control(
		new Jinr_Base_Control(
			$wp_customize,
			'jinr__sns_sharebutton_twitter_text',
			array(
				'label' => __jinr('ボタンのテキスト'),
				'section'     => 'jinr__sns_setting_section',
				'settings'    => 'jinr__sns_sharebutton_twitter_text',
				'type'        => 'text',
			)
		)
	);
	$wp_customize->add_setting( 'jinr__sns_sharebutton_twitter_desc',array('default' => 'Xからの読者コメントをお待ちしています。<br>ブログ更新の励みになります！',) );
	$wp_customize->add_control(
		new Jinr_Base_Control(
			$wp_customize,
			'jinr__sns_sharebutton_twitter_desc',
			array(
				'label'       => '導線文',
				'section'     => 'jinr__sns_setting_section',
				'settings'    => 'jinr__sns_sharebutton_twitter_desc',
				'type'        => 'textarea',
			)
		)
	);

	$wp_customize->add_setting(
		'jinr__sns_sharebutton_display_facebook',
		array(
			'default' => false,
		)
	);
	$wp_customize->add_control(
		new Jinr_CheckBox_Control(
			$wp_customize,
			'jinr__sns_sharebutton_display_facebook',
			array(
				'settings' => 'jinr__sns_sharebutton_display_facebook',
				'label'    => '記事おわり（Facebook）',
				'section'  => 'jinr__sns_setting_section',
				'type'     => 'checkbox',
			)
		)
	);
	$wp_customize->add_setting('jinr__sns_sharebutton_facebook_text',array('default' => 'Facebookでコメントする',));
	$wp_customize->add_control(
		new Jinr_Base_Control(
			$wp_customize,
			'jinr__sns_sharebutton_facebook_text',
			array(
				'label' => __jinr('ボタンのテキスト'),
				'section'     => 'jinr__sns_setting_section',
				'settings'    => 'jinr__sns_sharebutton_facebook_text',
				'type'        => 'text',
			)
		)
	);
	$wp_customize->add_setting( 'jinr__sns_sharebutton_facebook_desc',array('default' => 'Facebookでのコメントをお待ちしています。<br>ブログ更新の励みになります！',) );
	$wp_customize->add_control(
		new Jinr_Base_Control(
			$wp_customize,
			'jinr__sns_sharebutton_facebook_desc',
			array(
				'label'       => '導線文',
				'section'     => 'jinr__sns_setting_section',
				'settings'    => 'jinr__sns_sharebutton_facebook_desc',
				'type'        => 'textarea',
			)
		)
	);

	$wp_customize->add_setting('jinr__sns_extra_settings3');
	$wp_customize->add_control(
		new Jinr_Base_Control(
			$wp_customize,
			'jinr__sns_extra_settings3',
			array(
				'settings' => 'jinr__sns_extra_settings3',
				'label'    => 'シェアされた時の表示設定',
				'section'  => 'jinr__sns_setting_section',
				'type'     => 'hidden',
			)
		)
	);

	$wp_customize->add_setting('jinr__ogp_image_url');
	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'jinr__ogp_image_url',
			array(
				'mime_type'   => 'image',
				'label'       => 'TOPページがシェアされた時の画像（OGP）',
				'section'     => 'jinr__sns_setting_section',
				'settings'    => 'jinr__ogp_image_url',
			)
		)
	);

	$wp_customize->add_setting(
		'jinr__tw_type',
		array(
			'default' => 'summary_large_image',
		)
	);
	$wp_customize->add_control(
		new Jinr_Base_Control(
			$wp_customize,
			'jinr__tw_type',
			array(
				'label'    => 'Xでシェアされたときの画像サイズ',
				'section'  => 'jinr__sns_setting_section',
				'settings' => 'jinr__tw_type',
				'type'     => 'radio',
				'choices'  => array(
					'summary'             => '',
					'summary_large_image' => '',
				),
			)
		)
	);

	$wp_customize->add_setting('jinr__fb_code');
	$wp_customize->add_control(
		new Jinr_Base_Control(
			$wp_customize,
			'jinr__fb_code',
			array(
				'label'    => 'facebookの管理者ID',
				'section'  => 'jinr__sns_setting_section',
				'settings' => 'jinr__fb_code',
				'type'     => 'text',
			)
		)
	);

	$wp_customize->add_setting('jinr__tw_name');
	$wp_customize->add_control(
		new Jinr_Base_Control(
			$wp_customize,
			'jinr__tw_name',
			array(
				'label'    => 'Xのユーザー名',
				'section'  => 'jinr__sns_setting_section',
				'settings' => 'jinr__tw_name',
				'type'     => 'text',
				'description' => 'Xでシェアされたときに「＠ユーザー名」を出力します。＠を含めてユーザー名
				を入力してください（例：@jinuser）',
			)
		)
	);

	$wp_customize->add_setting('jinr__sns_hashtag');
	$wp_customize->add_control(
		new Jinr_Base_Control(
			$wp_customize,
			'jinr__sns_hashtag',
			array(
				'label'    => 'ブログがシェアされた時のハッシュタグ',
				'section'  => 'jinr__sns_setting_section',
				'settings' => 'jinr__sns_hashtag',
				'type'     => 'text',
				'description' => 'SNSボタンでXでシェアされた時に付属するハッシュタグを設定できます。半角#を含
				めて入力してください（例：#JINR）',
			)
		)
	);
}
add_action('customize_register', 'jinr__add_section_sns_setting');


function jinr__sns_share_tw()
{
	return get_theme_mod('jinr__sns_share_tw', true);
}
function jinr__sns_share_fb()
{
	return get_theme_mod('jinr__sns_share_fb', true);
}
function jinr__sns_share_line()
{
	return get_theme_mod('jinr__sns_share_line', true);
}
function jinr__sns_share_copy()
{
	return get_theme_mod('jinr__sns_share_copy', true);
}
function jinr__tw_url()
{
	return get_theme_mod('jinr__tw_url', '');
}
function jinr__fb_url()
{
	return get_theme_mod('jinr__fb_url', '');
}
function jinr__youtube_url()
{
	return get_theme_mod('jinr__youtube_url', '');
}
function jinr__insta_url()
{
	return get_theme_mod('jinr__insta_url', '');
}
function jinr__line_url()
{
	return get_theme_mod('jinr__line_url', '');
}
function jinr__contact_url()
{
	return get_theme_mod('jinr__contact_url', '');
}
function jinr__tw_type()
{
	return get_theme_mod('jinr__tw_type', 'summary_large_image');
}
function jinr__sns_hashtag()
{
	return get_theme_mod('jinr__sns_hashtag', '');
}
function jinr__ogp_image_url()
{
	return get_theme_mod('jinr__ogp_image_url', '');
}
function jinr__fb_code()
{
	return get_theme_mod('jinr__fb_code', '');
}
function jinr__tw_name()
{
	return get_theme_mod('jinr__tw_name', '');
}
function jinr__profile_sns_color()
{
	return get_theme_mod('jinr__profile_sns_color', 'd--theme-color');
}
function jinr__sns_follow_display_proile()
{
	return get_theme_mod('jinr__sns_follow_display_proile', true);
}
function jinr__sns_follow_display_hamburger()
{
	return get_theme_mod('jinr__sns_follow_display_hamburger', true);
}
function jinr__sns_sharebutton_display_twitter()
{
	return get_theme_mod('jinr__sns_sharebutton_display_twitter', false);
}
function jinr__sns_sharebutton_display_facebook()
{
	return get_theme_mod('jinr__sns_sharebutton_display_facebook', false);
}
function jinr__sns_share_design()
{
	return get_theme_mod('jinr__sns_share_design', 'd--sns-share-design1');
}
function jinr__sns_share_color()
{
	return get_theme_mod('jinr__sns_share_color', 'd--sns-share-color-solid');
}
function jinr__sns_share_bottom_display()
{
	return get_theme_mod('jinr__sns_share_bottom_display', true);
}
function jinr__sns_follow_hamburger_label()
{
	return get_theme_mod('jinr__sns_follow_hamburger_label', 'Follow Me');
}
function jinr__sns_sharebutton_twitter_text()
{
	return get_theme_mod('jinr__sns_sharebutton_twitter_text', 'Xでコメントする');
}
function jinr__sns_sharebutton_facebook_text()
{
	return get_theme_mod('jinr__sns_sharebutton_facebook_text', 'Facebookでコメントする');
}
function jinr__sns_sharebutton_twitter_desc()
{
	return get_theme_mod('jinr__sns_sharebutton_twitter_desc', 'Xからの読者コメントをお待ちしています。<br>ブログ更新の励みになります！');
}
function jinr__sns_sharebutton_facebook_desc()
{
	return get_theme_mod('jinr__sns_sharebutton_facebook_desc', 'Facebookでのコメントをお待ちしています。<br>ブログ更新の励みになります！');
}