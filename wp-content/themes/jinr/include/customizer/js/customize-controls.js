(function ($) {
	wp.customize.bind('ready', function () {
		var customize = this;
		customize('jinr__matchpost_advanced_display', function (value) {
			var dispCategory = customize.control('jinr__matchpost_advanced_cat_display');
			var toggle = function (to) {
				if (to === 'certain') {
					dispCategory.toggle(true);
					return;
				}
				dispCategory.toggle(false);
			};
			toggle(value.get());

			value.bind(toggle);
		});
		//カラー設定

		var dispColorSetting1 = customize.control('jinr__color_extra_settings1');
		var dispThemeColor = customize.control('jinr__theme_color');
		var dispBackColor = customize.control('jinr__bg_color');

		var dispTextColor = customize.control('jinr__text_color');

		var dispColorSetting2 = customize.control('jinr__color_extra_settings2');
		var dispHeaderBgColorType = customize.control('jinr__header_bgcolor_type');
		var dispHeaderBgColor = customize.control('jinr__header_bg_color');
		var dispHeaderBgGradationSelect = customize.control('jinr__header_bg_gradation_select');
		var dispHeaderBgExtraSub1 = customize.control('jinr__header_bg_extra_sub1');
		var dispHeaderTitleColor = customize.control('jinr__header_title_color');
		var dispHeaderMenuColor = customize.control('jinr__header_menu_color');
		var dispHeaderBgImage = customize.control('jinr__header_bg_image');
		var dispHeaderBgImageSize = customize.control('jinr__header_bg_image_size');
		var dispHeaderBgImageSizeSp = customize.control('jinr__header_bg_image_size_sp');
		var dispHeaderBgImageRepeat = customize.control('jinr__header_bg_image_repeat');
		var dispHeaderBgImageHorizon = customize.control('jinr__header_bg_position_horizon');
		var dispHeaderBgImageVertical = customize.control('jinr__header_bg_position_vertical');
		var dispHeaderBgImageHorizonSp = customize.control('jinr__header_bg_position_horizon_sp');
		var dispHeaderBgImageVerticalSp = customize.control('jinr__header_bg_position_vertical_sp');

		var dispColorSetting3 = customize.control('jinr__color_extra_settings3');
		var dispFooterBgColorType = customize.control('jinr__footer_bgcolor_type');
		var dispFooterBgColor = customize.control('jinr__footer_bg_color');
		var dispFooterBgGradationSelect = customize.control('jinr__footer_bg_gradation_select');
		var dispFooterBgExtraSub1 = customize.control('jinr__footer_bg_extra_sub1');
		var dispFooterTextColor = customize.control('jinr__footer_text_color');

		var dispColorSetting4 = customize.control('jinr__color_extra_settings4');
		var dispMarkerWeight1 = customize.control('jinr__marker1_weight');
		var dispMarkerColor1 = customize.control('jinr__marker1_color');
		var dispMarkerWeight2 = customize.control('jinr__marker2_weight');
		var dispMarkerColor2 = customize.control('jinr__marker2_color');
		var dispColorTextColor1 = customize.control('jinr__colortext1_color');
		var dispColorTextColor2 = customize.control('jinr__colortext2_color');

		var dispColorSetting5 = customize.control('jinr__color_extra_settings5');
		var dispLinkColor = customize.control('jinr__link_color');
		var dispLinkHoverColor = customize.control('jinr__link_hover_color');

		var dispRelatedPostBgColorType = customize.control('jinr__related_post_bgcolor_type');
		var dispRelatedPostBgColor = customize.control('jinr__related_post_bgcolor');
		var dispRelatedPostBgGradationSelect = customize.control('jinr__related_post_bg_gradation_select');
		var dispRelatedPostBgExtraSub1 = customize.control('jinr__related_post_bg_extra_sub1');
		var dispRelatedPostcolorType = customize.control('jinr__related_post_color_type');

		var dispColorSetting6 = customize.control('jinr__color_extra_settings6');
		var dispFavoriteColor1 = customize.control('jinr__favorite_color1');
		var dispFavoriteColor2 = customize.control('jinr__favorite_color2');
		var dispFavoriteColor3 = customize.control('jinr__favorite_color3');
		var dispFavoriteColor4 = customize.control('jinr__favorite_color4');
		var dispFavoriteColor5 = customize.control('jinr__favorite_color5');
		var dispFavoriteColor6 = customize.control('jinr__favorite_color6');
		var dispFavoriteNotice = customize.control('jinr__favorite_notice');

		// グラデーション登録
		var dispGradationSetting1 = customize.control('jinr__gradation_extra_settings1');
		var dispGradation1Color1 = customize.control('jinr__gradation_color1_1');
		var dispGradation1Color2 = customize.control('jinr__gradation_color1_2');
		var dispGradation1Deg1 = customize.control('jinr__gradation_color1_deg');

		var dispGradationSetting2 = customize.control('jinr__gradation_extra_settings2');
		var dispGradation2Color1 = customize.control('jinr__gradation_color2_1');
		var dispGradation2Color2 = customize.control('jinr__gradation_color2_2');
		var dispGradation2Deg1 = customize.control('jinr__gradation_color2_deg');

		var dispGradationSetting3 = customize.control('jinr__gradation_extra_settings3');
		var dispGradation3Color1 = customize.control('jinr__gradation_color3_1');
		var dispGradation3Color2 = customize.control('jinr__gradation_color3_2');
		var dispGradation3Deg1 = customize.control('jinr__gradation_color3_deg');

		//ヘッダー
		var dispHeaderTracking = customize.control('jinr__header_tracking');

		// ボックス
		var dispBoxSetting1 = customize.control('jinr__box_extra_settings1');
		var dispBoxSetting2 = customize.control('jinr__box_extra_settings2');
		var dispBoxSetting3 = customize.control('jinr__box_extra_settings3');
		var dispBoxSetting4 = customize.control('jinr__box_extra_settings4');
		var dispBoxSetting5 = customize.control('jinr__box_extra_settings5');
		var dispBoxSetting6 = customize.control('jinr__box_extra_settings6');
		var dispBoxSetting7 = customize.control('jinr__box_extra_settings7');
		var dispBoxSetting8 = customize.control('jinr__box_extra_settings8');
		var dispBoxSetting9 = customize.control('jinr__box_extra_settings9');
		var dispBoxSetting10 = customize.control('jinr__box_extra_settings10');
		var dispBoxSetting11 = customize.control('jinr__box_extra_settings11');
		var dispTitleBoxSetting1 = customize.control('jinr__titlebox_extra_settings1');
		var dispTitleBoxSetting2 = customize.control('jinr__titlebox_extra_settings2');
		var dispTitleBoxSetting3 = customize.control('jinr__titlebox_extra_settings3');
		var dispTitleBoxSetting4 = customize.control('jinr__titlebox_extra_settings4');
		var dispTitleBoxSetting6 = customize.control('jinr__titlebox_extra_settings6');
		var dispTitleBoxSetting7 = customize.control('jinr__titlebox_extra_settings7');
		var dispTitleBoxSetting8 = customize.control('jinr__titlebox_extra_settings8');
		var dispTitleBoxSetting9 = customize.control('jinr__titlebox_extra_settings9');

		var dispSimpleBoxColor1 = customize.control('jinr__simple_box1_color');
		var dispSimpleBoxColor2 = customize.control('jinr__simple_box2_color');
		var dispSimpleBoxColor3 = customize.control('jinr__simple_box3_color');
		var dispSimpleBoxColor4 = customize.control('jinr__simple_box4_color');
		var dispSimpleBoxColor5 = customize.control('jinr__simple_box5_color');
		var dispSimpleBoxColor6 = customize.control('jinr__simple_box6_color');
		var dispSimpleBoxColor7 = customize.control('jinr__simple_box7_color');
		var dispSimpleBoxColor8 = customize.control('jinr__simple_box8_color');
		var dispSimpleBoxColor9 = customize.control('jinr__simple_box9_color');
		var dispSimpleBoxColor10 = customize.control('jinr__simple_box10_color');
		var dispSimpleBoxColor11 = customize.control('jinr__simple_box11_color');

		var dispBoxDesign1 = customize.control('jinr__box_design_preview1');
		var dispBoxDesign2 = customize.control('jinr__box_design_preview2');
		var dispBoxDesign3 = customize.control('jinr__box_design_preview3');
		var dispBoxDesign4 = customize.control('jinr__box_design_preview4');
		var dispBoxDesign5 = customize.control('jinr__box_design_preview5');
		var dispBoxDesign6 = customize.control('jinr__box_design_preview6');
		var dispBoxDesign7 = customize.control('jinr__box_design_preview7');
		var dispBoxDesign8 = customize.control('jinr__box_design_preview8');
		var dispBoxDesign9 = customize.control('jinr__box_design_preview9');
		var dispBoxDesign10 = customize.control('jinr__box_design_preview10');
		var dispBoxDesign11 = customize.control('jinr__box_design_preview11');

		var dispHeadingBoxColor1 = customize.control('jinr__heading_box1_color');
		var dispHeadingBoxColor2 = customize.control('jinr__heading_box2_color');
		var dispHeadingBoxColor3 = customize.control('jinr__heading_box3_color');
		var dispHeadingBoxColor4 = customize.control('jinr__heading_box4_color');
		var dispHeadingBoxColor6 = customize.control('jinr__heading_box6_color');
		var dispHeadingBoxColor7 = customize.control('jinr__heading_box7_color');
		var dispHeadingBoxColor8 = customize.control('jinr__heading_box8_color');
		var dispHeadingBoxColor9 = customize.control('jinr__heading_box9_color');

		var dispHeadingBoxDesign1 = customize.control('jinr__heading_box_preview1');
		var dispHeadingBoxDesign2 = customize.control('jinr__heading_box_preview2');
		var dispHeadingBoxDesign3 = customize.control('jinr__heading_box_preview3');
		var dispHeadingBoxDesign4 = customize.control('jinr__heading_box_preview4');
		var dispHeadingBoxDesign6 = customize.control('jinr__heading_box_preview6');
		var dispHeadingBoxDesign7 = customize.control('jinr__heading_box_preview7');
		var dispHeadingBoxDesign8 = customize.control('jinr__heading_box_preview8');
		var dispHeadingBoxDesign9 = customize.control('jinr__heading_box_preview9');

		var dispIconBoxSetting1 = customize.control('jinr__iconbox_extra_settings1');
		var dispIconBoxSetting2 = customize.control('jinr__iconbox_extra_settings2');
		var dispIconBoxSetting3 = customize.control('jinr__iconbox_extra_settings3');
		var dispIconBoxSetting4 = customize.control('jinr__iconbox_extra_settings4');
		var dispIconBoxSetting5 = customize.control('jinr__iconbox_extra_settings5');
		var dispIconBoxSetting6 = customize.control('jinr__iconbox_extra_settings6');
		var dispIconBoxSetting7 = customize.control('jinr__iconbox_extra_settings7');
		var dispIconBoxSetting8 = customize.control('jinr__iconbox_extra_settings8');
		var dispHIconBoxSetting1 = customize.control('jinr__heading_iconbox_extra_settings1');
		var dispHIconBoxSetting2 = customize.control('jinr__heading_iconbox_extra_settings2');
		var dispHIconBoxSetting3 = customize.control('jinr__heading_iconbox_extra_settings3');
		var dispHIconBoxSetting4 = customize.control('jinr__heading_iconbox_extra_settings4');

		var dispSimpleIconBoxColor1 = customize.control('jinr__simple_iconbox1_color');
		var dispSimpleIconBoxColor2 = customize.control('jinr__simple_iconbox2_color');
		var dispSimpleIconBoxColor3 = customize.control('jinr__simple_iconbox3_color');
		var dispSimpleIconBoxColor4 = customize.control('jinr__simple_iconbox4_color');
		var dispSimpleIconBoxColor5 = customize.control('jinr__simple_iconbox5_color');
		var dispSimpleIconBoxColor6 = customize.control('jinr__simple_iconbox6_color');
		var dispSimpleIconBoxColor7 = customize.control('jinr__simple_iconbox7_color');
		var dispSimpleIconBoxColor8 = customize.control('jinr__simple_iconbox8_color');

		var dispIconVisual1 = customize.control('jinr__simple_iconbox1_iconvisual');
		var dispIconVisual2 = customize.control('jinr__simple_iconbox2_iconvisual');
		var dispIconVisual3 = customize.control('jinr__simple_iconbox3_iconvisual');
		var dispIconVisual4 = customize.control('jinr__simple_iconbox4_iconvisual');
		var dispIconVisual5 = customize.control('jinr__simple_iconbox5_iconvisual');
		var dispIconVisual6 = customize.control('jinr__simple_iconbox6_iconvisual');
		var dispIconVisual7 = customize.control('jinr__simple_iconbox7_iconvisual');
		var dispIconVisual8 = customize.control('jinr__simple_iconbox8_iconvisual');

		var dispIconChoise1 = customize.control('jinr__simple_iconbox1_choice');
		var dispIconChoise2 = customize.control('jinr__simple_iconbox2_choice');
		var dispIconChoise3 = customize.control('jinr__simple_iconbox3_choice');
		var dispIconChoise4 = customize.control('jinr__simple_iconbox4_choice');
		var dispIconChoise5 = customize.control('jinr__simple_iconbox5_choice');
		var dispIconChoise6 = customize.control('jinr__simple_iconbox6_choice');
		var dispIconChoise7 = customize.control('jinr__simple_iconbox7_choice');
		var dispIconChoise8 = customize.control('jinr__simple_iconbox8_choice');

		var dispHeadingIconBoxColor1 = customize.control('jinr__heading_iconbox1_color');
		var dispHeadingIconBoxColor2 = customize.control('jinr__heading_iconbox2_color');
		var dispHeadingIconBoxColor3 = customize.control('jinr__heading_iconbox3_color');
		var dispHeadingIconBoxColor4 = customize.control('jinr__heading_iconbox4_color');

		var dispHeadingIconVisual1 = customize.control('jinr__heading_iconbox1_iconvisual');
		var dispHeadingIconVisual2 = customize.control('jinr__heading_iconbox2_iconvisual');
		var dispHeadingIconVisual3 = customize.control('jinr__heading_iconbox3_iconvisual');
		var dispHeadingIconVisual4 = customize.control('jinr__heading_iconbox4_iconvisual');

		var dispHeadingIconChoise1 = customize.control('jinr__heading_iconbox1_choice');
		var dispHeadingIconChoise2 = customize.control('jinr__heading_iconbox2_choice');
		var dispHeadingIconChoise3 = customize.control('jinr__heading_iconbox3_choice');
		var dispHeadingIconChoise4 = customize.control('jinr__heading_iconbox4_choice');

		var dispHeadingIconBoxtitle1 = customize.control('jinr__heading_iconbox1_title');
		var dispHeadingIconBoxtitle2 = customize.control('jinr__heading_iconbox2_title');
		var dispHeadingIconBoxtitle3 = customize.control('jinr__heading_iconbox3_title');
		var dispHeadingIconBoxtitle4 = customize.control('jinr__heading_iconbox4_title');

		// 記事スライドショー
		var dispSliderExtraSetting1 = customize.control('jinr__mainvisual_slider_extra_settings1');
		var dispSliderExtraSetting2 = customize.control('jinr__mainvisual_slider_extra_settings2');
		var dispSliderURL01 = customize.control('jinr__slider_url1');
		var dispSliderURL02 = customize.control('jinr__slider_url2');
		var dispSliderURL03 = customize.control('jinr__slider_url3');
		var dispSliderURL04 = customize.control('jinr__slider_url4');
		var dispSliderURL05 = customize.control('jinr__slider_url5');
		var dispSliderURL06 = customize.control('jinr__slider_url6');
		var dispSliderAnimationSpeed = customize.control('jinr__slider_animation_speed');
		var dispSliderTypeSelect = customize.control('jinr__slider_type_select');
		var dispSliderDesignSelect = customize.control('jinr__slider_design_select');
		var dispSliderNotice = customize.control('jinr__slider_notice');

		var dispSliderTextColorWhite = customize.control('jinr__slider_text_color_select');
		var dispSliderButtonText = customize.control('jinr__slider_link_text');

		// 画像スライドショー
		var dispImageSliderExtraSetting1 = customize.control('jinr__mainvisual_imageslider_extra_settings1');
		var dispImageSliderExtraSetting2 = customize.control('jinr__mainvisual_imageslider_extra_settings2');
		var dispImageSliderImageURL01 = customize.control('jinr__imageslider_image_url1');
		var dispImageSliderImageURL02 = customize.control('jinr__imageslider_image_url2');
		var dispImageSliderImageURL03 = customize.control('jinr__imageslider_image_url3');
		var dispImageSliderImageURL04 = customize.control('jinr__imageslider_image_url4');
		var dispImageSliderImageURL05 = customize.control('jinr__imageslider_image_url5');
		var dispImageSliderImageURL06 = customize.control('jinr__imageslider_image_url6');
		var dispImageSliderImageLINK01 = customize.control('jinr__imageslider_image_link1');
		var dispImageSliderImageLINK02 = customize.control('jinr__imageslider_image_link2');
		var dispImageSliderImageLINK03 = customize.control('jinr__imageslider_image_link3');
		var dispImageSliderImageLINK04 = customize.control('jinr__imageslider_image_link4');
		var dispImageSliderImageLINK05 = customize.control('jinr__imageslider_image_link5');
		var dispImageSliderImageLINK06 = customize.control('jinr__imageslider_image_link6');
		var dispImageSliderMainCopy = customize.control('jinr__imageslider_maincopy');
		var dispImageSliderMainCopyColor = customize.control('jinr__imageslider_maincopy_color');
		var dispImageSliderMainCopyTextDeco = customize.control('jinr__imageslider_maincopy_text_deco');
		var dispImageSliderMainCopyShadow = customize.control('jinr__imageslider_maincopy_shadow');
		var dispImageSliderMainCopyBorder = customize.control('jinr__imageslider_maincopy_border');
		var dispImageSliderButtonDesignSelect = customize.control('jinr__imageslider_button_design_select');
		var dispImageSliderButtonText = customize.control('jinr__imageslider_button_text');
		var dispImageSliderButtonLink = customize.control('jinr__imageslider_button_link');
		var dispImageSliderAnimationSelect = customize.control('jinr__imageslider_animation_select');
		var dispImageSliderAnimationSpeed = customize.control('jinr__imageslider_animation_speed');
		var dispImageSliderAutoPlay = customize.control('jinr__imageslider_autoplay');

		// 静止画
		var dispStillImageExtraSetting1 = customize.control('jinr__mainvisual_stillimage_extra_settings1');
		var dispStillImageExtraSetting2 = customize.control('jinr__mainvisual_stillimage_extra_settings2');
		var dispStillImageExtraSetting3 = customize.control('jinr__mainvisual_stillimage_extra_settings3');
		var dispStillImageExtraSetting4 = customize.control('jinr__mainvisual_stillimage_extra_settings4');
		var dispStillImageExtraSetting5 = customize.control('jinr__mainvisual_stillimage_extra_settings5');
		var dispStillImageExtraSub1 = customize.control('jinr__stillimage_extra_sub1');
		var dispStillImageExtraSub2 = customize.control('jinr__stillimage_extra_sub2');
		var dispStillImageDesign = customize.control('jinr__stillimage_design');
		var dispStillImageUrl = customize.control('jinr__stillimage_url');
		var dispStillImageUrlSp = customize.control('jinr__stillimage_url_sp');

		var dispStillImageOverlayDesign = customize.control('jinr__stillimage_overlay_design');
		var dispStillImageOverlayColorType = customize.control('jinr__stillimage_overlay_color_type');
		var dispStillImageOverlayColor = customize.control('jinr__stillimage_overlay_color');
		var dispStillImageOverlayGradationSelect = customize.control('jinr__stillimage_overlay_gradation_select');
		var dispStillImageOverlayTransparent = customize.control('jinr__stillimage_overlay_transparent');
		var dispStillImageMainCopy = customize.control('jinr__stillimage_maincopy');
		var dispStillImageCopySize = customize.control('jinr__stillimage_copy_size_number');
		var dispStillImageMainCopyColor = customize.control('jinr__stillimage_maincopy_color');
		var dispStillImageMainCopyTextDecoSelect = customize.control('jinr__stillimage_maincopy_text_deco_select');
		var dispStillImageButtonDesignSelect = customize.control('jinr__stillimage_button_design_select');
		var dispStillImageButtonText = customize.control('jinr__stillimage_button_text');
		var dispStillImageButtonLink = customize.control('jinr__stillimage_button_link');
		var dispStillImageDisplay = customize.control('jinr__stillimage_display');
		var dispStillImageSubCopy = customize.control('jinr__stillimage_subcopy');
		var dispStillImageLink = customize.control('jinr__stillimage_link');

		var dispStillImageButtonDisplay = customize.control('jinr__stillimage_button_display');
		var dispStillImageCopyDisplay = customize.control('jinr__stillimage_copy_display');
		var dispStillImageContentsAlignPc = customize.control('jinr__stillimage_contents_align_pc');
		var dispStillImageContentsPositionVerticalPc = customize.control('jinr__stillimage_contents_position_vertical_pc');
		var dispStillImageContentsPositionHorizonPc = customize.control('jinr__stillimage_contents_position_horizon_pc');
		var dispStillImageContentsPositionVerticalSp = customize.control('jinr__stillimage_contents_position_vertical_sp');
		var dispStillImageContentsPositionHorizonSp = customize.control('jinr__stillimage_contents_position_horizon_sp');
		var dispStillImageHeightSizeNumber = customize.control('jinr__stillimage_height_size_number');
		var dispStillImageHeightSizeControl = customize.control('jinr__stillimage_height_size_control');
		var dispStillImageHeightSize = customize.control('jinr__stillimage_height_size');
		var dispStillImageHeightSizeSp = customize.control('jinr__stillimage_height_size_sp');
		var dispStillImageHeightSizeControlSp = customize.control('jinr__stillimage_height_size_control_sp');
		var dispStillImageHeightSizeNumberSp = customize.control('jinr__stillimage_height_size_number_sp');

		// 動画
		var dispMovieExtraSetting1 = customize.control('jinr__mainvisual_movie_extra_settings1');
		var dispMovieExtraSetting2 = customize.control('jinr__mainvisual_movie_extra_settings2');
		var dispMovieExtraSetting3 = customize.control('jinr__mainvisual_movie_extra_settings3');
		var dispMovieExtraSetting4 = customize.control('jinr__mainvisual_movie_extra_settings4');
		var dispMovieExtraSub1 = customize.control('jinr__movie_extra_sub1');
		var dispMovieDesign = customize.control('jinr__movie_design');
		var dispMovieUrl = customize.control('jinr__movie_url');
		var dispMovieHeightSpSelect = customize.control('jinr__movie_height_sp_select');
		var dispMovieHeightSp = customize.control('jinr__movie_height_sp');
		var dispMovieAutoplay = customize.control('jinr__movie_autoplay');
		var dispMovieLoop = customize.control('jinr__movie_loop');

		var dispMovieButtonDisplay = customize.control('jinr__movie_button_display');
		var dispMovieCopyDisplay = customize.control('jinr__movie_copy_display');
		var dispMovieMainCopy = customize.control('jinr__movie_maincopy');
		var dispMovieMainCopyColor = customize.control('jinr__movie_maincopy_color');
		var dispMovieMainCopyTextDecoSelect = customize.control('jinr__movie_maincopy_text_deco_select');
		var dispMovieCopySize = customize.control('jinr__movie_copy_size_number');
		var dispMovieButtonDesignSelect = customize.control('jinr__movie_button_design_select');
		var dispMovieButtonText = customize.control('jinr__movie_button_text');
		var dispMovieButtonLink = customize.control('jinr__movie_button_link');
		var dispMovieSubCopy = customize.control('jinr__movie_subcopy');
		var dispMovieContentsAlignPc = customize.control('jinr__movie_contents_align_pc');
		var dispMovieContentsPositionVerticalPc = customize.control('jinr__movie_contents_position_vertical_pc');
		var dispMovieContentsPositionHorizonPc = customize.control('jinr__movie_contents_position_horizon_pc');
		var dispMovieContentsPositionVerticalSp = customize.control('jinr__movie_contents_position_vertical_sp');
		var dispMovieContentsPositionHorizonSp = customize.control('jinr__movie_contents_position_horizon_sp');

		//SNS設定
		var dispSnsFollowHamLabel = customize.control('jinr__sns_follow_hamburger_label');
		var dispSnsButtonTwitterText = customize.control('jinr__sns_sharebutton_twitter_text');
		var dispSnsButtonFacebookText = customize.control('jinr__sns_sharebutton_facebook_text');
		var dispSnsButtonTwitterDesc = customize.control('jinr__sns_sharebutton_twitter_desc');
		var dispSnsButtonFacebookDesc = customize.control('jinr__sns_sharebutton_facebook_desc');

		// インフォメーションバー
		var dispInfoExtra1 = customize.control('jinr__info_display');
		var dispInfoExtraSub1 = customize.control('jinr__info_extra_sub1');
		var dispInfoExtraSub2 = customize.control('jinr__info_extra_sub2');

		var dispInfoImageUrl = customize.control('jinr__info_image_url');
		var dispInfoUrl = customize.control('jinr__info_url');
		var dispInfoType = customize.control('jinr__info_type');
		var dispInfoText1 = customize.control('jinr__info_text1');
		var dispInfoText2 = customize.control('jinr__info_text2');
		var dispInfoText1Size = customize.control('jinr__info_text1_size');
		var dispInfoText2Size = customize.control('jinr__info_text2_size');
		var dispInfoButtonText = customize.control('jinr__info_button_text');
		var dispInfoButtonDesignSelect = customize.control('jinr__info_button_design_select');
		var dispInfoTextColor = customize.control('jinr__info_textcolor');
		var dispInfoBgcolorType = customize.control('jinr__info_bgcolor_type');
		var dispInfoBgcolor = customize.control('jinr__info_bgcolor');
		var dispInfoBgcolorGradationSelect = customize.control('jinr__info_bg_gradation_select');
		var dispInfoDisplayPosition = customize.control('jinr__info_display_position');
		var dispInfoDisplayFrontPage = customize.control('jinr__info_display_frontpage');
		var dispInfoDisplayPage = customize.control('jinr__info_display_page');
		var dispInfoDisplayNone = customize.control('jinr__info_display_none');
		var dispInfoDisplaySp = customize.control('jinr__info_display_sp');

		// スマホ専用機能
		var dispSpSetting1 = customize.control('jinr__spmenu_extra_settings1');
		var dispSpSetting2 = customize.control('jinr__spmenu_extra_settings2');
		var dispSpSetting3 = customize.control('jinr__spmenu_extra_settings3');
		var dispSpSetting4 = customize.control('jinr__spmenu_extra_settings4');

		var dispSpmenuImage = customize.control('jinr__spmenu_image');

		var dispSpmenuLabel1 = customize.control('jinr__sp_menu1_label');
		var dispSpmenuLabel2 = customize.control('jinr__sp_menu2_label');
		var dispSpmenuLabel3 = customize.control('jinr__sp_menu3_label');
		var dispSpmenuLabel4 = customize.control('jinr__sp_menu4_label');

		var dispSpmenuIconDisplay1 = customize.control('jinr__sp_menu_icon_display1');
		var dispSpmenuIconDisplay2 = customize.control('jinr__sp_menu_icon_display2');
		var dispSpmenuIconDisplay3 = customize.control('jinr__sp_menu_icon_display3');
		var dispSpmenuIconDisplay4 = customize.control('jinr__sp_menu_icon_display4');

		var dispSpSetting5 = customize.control('jinr__spmenu_extra_settings5');
		var dispSpmenuTopDisplay = customize.control('jinr__spmenu_toppage_display');

		var dispSpmenuIconVisual = {};
		var dispSpmenuIconChoise = {};
		for (var i = 1; i < 5; i++) {
			dispSpmenuIconVisual[i] = customize.control('jinr__sp_menu' + i + '_iconvisual');
			dispSpmenuIconChoise[i] = customize.control('jinr__sp_menu' + i + '_choice');
		}

		var dispSpmenuLink1 = customize.control('jinr__sp_menu1_link');
		var dispSpmenuLink2 = customize.control('jinr__sp_menu2_link');
		var dispSpmenuLink3 = customize.control('jinr__sp_menu3_link');
		var dispSpmenuLink4 = customize.control('jinr__sp_menu4_link');

		// コンバージョンボタン
		var dispSpcvImage = customize.control('jinr__cvbtn_image');
		var dispSpcvSetting1 = customize.control('jinr__spcv_extra_settings1');
		var dispSpcvSetting2 = customize.control('jinr__spcv_extra_settings2');
		var dispSpcvSetting3 = customize.control('jinr__spcv_extra_settings3');
		//var dispSpcvSetting4 = customize.control('jinr__spcv_extra_settings4');
		// var dispSpcvAllIconName = customize.control('jinr__spcv_all_icon_name');

		var dispSpcvAllIconVisual = customize.control('jinr__spcv_all_iconvisual');
		var dispSpcvAllIconChoise = customize.control('jinr__spcv_all_choice');

		var dispSpcvCategoryIconVisual = {};
		var dispSpcvCategoryIconChoise = {};
		for (var i = 1; i < 3; i++) {
			dispSpcvCategoryIconVisual[i] = customize.control('jinr__spcv_category' + i + '_iconvisual');
			dispSpcvCategoryIconChoise[i] = customize.control('jinr__spcv_category' + i + '_choice');
		}

		var dispSpcvAllDisplay = customize.control('jinr__spcv_all_display');
		var dispSpcvAllImageSelect = customize.control('jinr__spcv_all_image_select');
		var dispSpcvAllImageUrl = customize.control('jinr__spcv_all_image_url');
		var dispSpcvAllMaintext = customize.control('jinr__spcv_all_maintext');
		var dispSpcvAllSubtext = customize.control('jinr__spcv_all_subtext');
		var dispSpcvAllUrl = customize.control('jinr__spcv_all_url');
		var dispSpcvAllUrlExternal = customize.control('jinr__spcv_all_url_external');
		var dispSpcvAllButtonDesignSelect = customize.control('jinr__spcv_all_style');
		var dispSpcvAllColorType = customize.control('jinr__spcv_all_color_type');
		var dispSpcvAllColor = customize.control('jinr__spcv_all_color');
		var dispSpcvAllGradationSelect = customize.control('jinr__spcv_all_color_gradation_select');
		var dispSpcvAllExtraSub1 = customize.control('jinr__spcv_all_extra_sub1');
		var dispSpcvAllTextColor = customize.control('jinr__spcv_all_text_color');
		var dispSpcvAllExclusionId = customize.control('jinr__spcv_all_exclusion_id');
		var dispSpcvAllExclusionPageId = customize.control('jinr__spcv_all_exclusion_page_id');

		var dispSpcvCategoryDisplay = {};
		var dispSpcvCategorySelect = {};
		var dispSpcvCategoryMainText = {};
		var dispSpcvCategorySubText = {};
		// var dispSpcvCategoryIconName = {};
		var dispSpcvCategoryImageSelect = {};
		var dispSpcvCategoryImageUrl = {};
		var dispSpcvCategoryUrl = {};
		var dispSpcvCategoryUrlExternal = {};
		var dispSpcvCategoryButtonDesignSelect = {};
		var dispSpcvCategoryColorType = {};
		var dispSpcvCategoryColor = {};
		var dispSpcvCategoryGradationSelect = {};
		var dispSpcvCategoryExtraSub = {};
		var dispSpcvCategoryTextColor = {};

		for (var i = 1; i < 4; i++) {
			dispSpcvCategoryDisplay[i] = customize.control('jinr__spcv_category' + i + '_display');
			dispSpcvCategorySelect[i] = customize.control('jinr__spcv_category' + i + '_select');
			dispSpcvCategoryMainText[i] = customize.control('jinr__spcv_category' + i + '_maintext');
			dispSpcvCategorySubText[i] = customize.control('jinr__spcv_category' + i + '_subtext');
			// dispSpcvCategoryIconName[i] = customize.control('jinr__spcv_category' + i + '_icon_name');
			dispSpcvCategoryImageSelect[i] = customize.control('jinr__spcv_category' + i + '_image_select');
			dispSpcvCategoryImageUrl[i] = customize.control('jinr__spcv_category' + i + '_image_url');
			dispSpcvCategoryUrl[i] = customize.control('jinr__spcv_category' + i + '_url');
			dispSpcvCategoryUrlExternal[i] = customize.control('jinr__spcv_category' + i + '_url_external');
			dispSpcvCategoryButtonDesignSelect[i] = customize.control('jinr__spcv_category' + i + '_style');
			dispSpcvCategoryColorType[i] = customize.control('jinr__spcv_category' + i + '_color_type');
			dispSpcvCategoryColor[i] = customize.control('jinr__spcv_category' + i + '_color');
			dispSpcvCategoryGradationSelect[i] = customize.control('jinr__spcv_category' + i + '_color_gradation_select');
			dispSpcvCategoryExtraSub[i] = customize.control('jinr__spcv_category' + i + '_extra_sub1');
			dispSpcvCategoryTextColor[i] = customize.control('jinr__spcv_category' + i + '_text_color');
		}

		var dispThumbnailsDesignPattern = customize.control('jinr__thumbnails_design_pattern');
		var dispThumbnailsBgColor = customize.control('jinr__thumbnails_bg_color');
		var dispThumbnailsSimpleColor = customize.control('jinr__thumbnails_simple_color');
		var dispThumbnailsBgGradationSelect = customize.control('jinr__thumbnails_bg_gradation_select');
		var dispThumbnailsImageURL = customize.control('jinr__thumbnails_bg_image_url');

		function resetSlider() {
			dispSliderExtraSetting1.toggle(false);
			dispSliderExtraSetting2.toggle(false);
			dispSliderURL01.toggle(false);
			dispSliderURL02.toggle(false);
			dispSliderURL03.toggle(false);
			dispSliderURL04.toggle(false);
			dispSliderURL05.toggle(false);
			dispSliderURL06.toggle(false);
			dispSliderAnimationSpeed.toggle(false);
			dispSliderTextColorWhite.toggle(false);
			dispSliderButtonText.toggle(false);
			dispSliderTypeSelect.toggle(false);
			dispSliderDesignSelect.toggle(false);
			dispSliderNotice.toggle(false);
		}

		function resetImageSlider() {
			// 画像スライドショーリセット
			dispImageSliderExtraSetting1.toggle(false);
			dispImageSliderExtraSetting2.toggle(false);
			dispImageSliderImageURL01.toggle(false);
			dispImageSliderImageURL02.toggle(false);
			dispImageSliderImageURL03.toggle(false);
			dispImageSliderImageURL04.toggle(false);
			dispImageSliderImageURL05.toggle(false);
			dispImageSliderImageURL06.toggle(false);
			dispImageSliderImageLINK01.toggle(false);
			dispImageSliderImageLINK02.toggle(false);
			dispImageSliderImageLINK03.toggle(false);
			dispImageSliderImageLINK04.toggle(false);
			dispImageSliderImageLINK05.toggle(false);
			dispImageSliderImageLINK06.toggle(false);
			dispImageSliderAnimationSelect.toggle(false);
			dispImageSliderAnimationSpeed.toggle(false);
			//dispImageSliderPaginationDesign.toggle(false);
			//dispImageSliderPagerDesign.toggle(false);
			dispImageSliderAutoPlay.toggle(false);
		}

		function resetStillImage() {
			dispStillImageExtraSetting1.toggle(false);
			dispStillImageExtraSetting2.toggle(false);
			dispStillImageExtraSetting3.toggle(false);
			dispStillImageExtraSetting4.toggle(false);
			dispStillImageExtraSetting5.toggle(false);
			dispStillImageDesign.toggle(false);
			dispStillImageUrl.toggle(false);
			dispStillImageUrlSp.toggle(false);
			dispStillImageOverlayDesign.toggle(false);
			dispStillImageOverlayColorType.toggle(false);
			dispStillImageOverlayColor.toggle(false);
			dispStillImageOverlayGradationSelect.toggle(false);
			dispStillImageOverlayTransparent.toggle(false);
			dispStillImageMainCopy.toggle(false);
			dispStillImageMainCopyColor.toggle(false);
			dispStillImageMainCopyTextDecoSelect.toggle(false);
			dispStillImageCopySize.toggle(false);
			dispStillImageButtonDesignSelect.toggle(false);
			dispStillImageButtonText.toggle(false);
			dispStillImageButtonLink.toggle(false);
			dispStillImageDisplay.toggle(false);
			dispStillImageSubCopy.toggle(false);
			dispStillImageLink.toggle(false);
			dispStillImageExtraSub1.toggle(false);
			dispStillImageExtraSub2.toggle(false);
			dispStillImageContentsPositionVerticalPc.toggle(false);
			dispStillImageContentsPositionHorizonPc.toggle(false);
			dispStillImageContentsPositionVerticalSp.toggle(false);
			dispStillImageContentsPositionHorizonSp.toggle(false);
			dispStillImageContentsAlignPc.toggle(false);
			dispStillImageHeightSizeNumber.toggle(false);
			dispStillImageHeightSizeControl.toggle(false);
			dispStillImageHeightSize.toggle(false);
			dispStillImageHeightSizeSp.toggle(false);
			dispStillImageHeightSizeControlSp.toggle(false);
			dispStillImageHeightSizeNumberSp.toggle(false);
			dispStillImageButtonDisplay.toggle(false);
			dispStillImageCopyDisplay.toggle(false);
		}

		function resetMovie() {
			dispMovieExtraSetting1.toggle(false);
			dispMovieExtraSetting2.toggle(false);
			dispMovieExtraSetting3.toggle(false);
			dispMovieExtraSetting4.toggle(false);
			dispMovieExtraSub1.toggle(false);
			dispMovieDesign.toggle(false);
			dispMovieUrl.toggle(false);
			dispMovieAutoplay.toggle(false);
			dispMovieLoop.toggle(false);
			dispMovieHeightSpSelect.toggle(false);
			dispMovieHeightSp.toggle(false);
			dispMovieCopyDisplay.toggle(false);
			dispMovieButtonDisplay.toggle(false);
			dispMovieMainCopy.toggle(false);
			dispMovieMainCopyColor.toggle(false);
			dispMovieMainCopyTextDecoSelect.toggle(false);
			dispMovieCopySize.toggle(false);
			dispMovieButtonDesignSelect.toggle(false);
			dispMovieButtonText.toggle(false);
			dispMovieButtonLink.toggle(false);
			dispMovieSubCopy.toggle(false);
			dispMovieContentsPositionVerticalPc.toggle(false);
			dispMovieContentsPositionHorizonPc.toggle(false);
			dispMovieContentsPositionVerticalSp.toggle(false);
			dispMovieContentsPositionHorizonSp.toggle(false);
			dispMovieContentsAlignPc.toggle(false);
		}

		//ヘッダー追尾だし分け
		function selectedHeaderTracking() {
			customize('jinr__header_layout', function (value) {
				var toggle = function (to) {
					if (to === 'd--header-layout2') {
						dispHeaderTracking.toggle(false);
						return;
					}
					if (to === 'd--header-layout1') {
						customize('jinr__header_style', function (value) {
							var toggle = function (to) {
								if (to === 'd--header-style-triangle' || to === 'd--header-style-slope') {
									dispHeaderTracking.toggle(false);
									return;
								}
								dispHeaderTracking.toggle(true);
							};
							toggle(value.get());
							value.bind(toggle);
						});
					} else {
						dispHeaderTracking.toggle(false);
						return;
					}
				};
				toggle(value.get());
				value.bind(toggle);
			});
		}
		selectedHeaderTracking();

		//ヘッダー背景画像だし分け
		function selectedHeaderBgImage() {
			customize('jinr__header_bg_image', function (value) {
				var toggle = function (to) {
					if (to === '') {
						dispHeaderBgImageRepeat.toggle(false);
						dispHeaderBgImageSize.toggle(false);
						dispHeaderBgImageSizeSp.toggle(false);
						dispHeaderBgImageHorizon.toggle(false);
						dispHeaderBgImageVertical.toggle(false);
						dispHeaderBgImageHorizonSp.toggle(false);
						dispHeaderBgImageVerticalSp.toggle(false);
						return;
					} else {
						customize('jinr__header_bg_image_repeat', function (value) {
							var toggle = function (to) {
								if (to === 'off') {
									dispHeaderBgImageHorizon.toggle(true);
									dispHeaderBgImageVertical.toggle(true);
									dispHeaderBgImageHorizonSp.toggle(true);
									dispHeaderBgImageVerticalSp.toggle(true);
									return;
								}
							};
							toggle(value.get());
							value.bind(toggle);
						});
					}
					dispHeaderBgImageRepeat.toggle(true);
					dispHeaderBgImageSize.toggle(true);
					dispHeaderBgImageSizeSp.toggle(true);
				};
				toggle(value.get());
				value.bind(toggle);
			});
			customize('jinr__header_bg_image_repeat', function (value) {
				var toggle = function (to) {
					if (to === 'off') {
						dispHeaderBgImageHorizon.toggle(true);
						dispHeaderBgImageVertical.toggle(true);
						dispHeaderBgImageHorizonSp.toggle(true);
						dispHeaderBgImageVerticalSp.toggle(true);
						return;
					}
					dispHeaderBgImageHorizon.toggle(false);
					dispHeaderBgImageVertical.toggle(false);
					dispHeaderBgImageHorizonSp.toggle(false);
					dispHeaderBgImageVerticalSp.toggle(false);
				};
				toggle(value.get());
				value.bind(toggle);
			});
		}
		selectedHeaderBgImage();

		//コンバージョンボタンだし分け
		function selectedSpcv() {
			customize('jinr__sp_tab', function (value) {
				var toggle = function (to) {
					if (to === 'menu') {
						dispSpmenuImage.toggle(true);
						dispSpSetting1.toggle(true);
						dispSpSetting2.toggle(true);
						dispSpSetting3.toggle(true);
						dispSpSetting4.toggle(true);

						dispSpmenuLabel1.toggle(true);
						dispSpmenuLabel2.toggle(true);
						dispSpmenuLabel3.toggle(true);
						dispSpmenuLabel4.toggle(true);

						dispSpmenuIconDisplay1.toggle(true);
						dispSpmenuIconDisplay2.toggle(true);
						dispSpmenuIconDisplay3.toggle(true);
						dispSpmenuIconDisplay4.toggle(true);

						dispSpmenuLink1.toggle(true);
						dispSpmenuLink2.toggle(true);
						dispSpmenuLink3.toggle(true);
						dispSpmenuLink4.toggle(true);

						dispSpSetting5.toggle(true);
						dispSpmenuTopDisplay.toggle(true);

						// コンバージョンボタン
						dispSpcvAllDisplay.toggle(false);
						dispSpcvImage.toggle(false);
						dispSpcvSetting1.toggle(false);
						dispSpcvSetting2.toggle(false);
						dispSpcvSetting3.toggle(false);
						//dispSpcvSetting4.toggle(false);
						dispSpcvAllMaintext.toggle(false);
						dispSpcvAllSubtext.toggle(false);
						dispSpcvAllUrl.toggle(false);
						dispSpcvAllUrlExternal.toggle(false);
						dispSpcvAllImageUrl.toggle(false);
						dispSpcvAllImageSelect.toggle(false);
						dispSpcvAllButtonDesignSelect.toggle(false);
						dispSpcvAllColorType.toggle(false);
						dispSpcvAllColor.toggle(false);
						dispSpcvAllGradationSelect.toggle(false);
						dispSpcvAllExtraSub1.toggle(false);
						dispSpcvAllTextColor.toggle(false);
						dispSpcvAllExclusionId.toggle(false);
						dispSpcvAllExclusionPageId.toggle(false);
						dispSpcvAllIconVisual.toggle(false);
						dispSpcvAllIconChoise.toggle(false);
						// dispSpcvAllIconName.toggle(false);

						for (let i = 1; i < 3; i++) {
							dispSpcvCategoryDisplay[i].toggle(false);
							dispSpcvCategorySelect[i].toggle(false);
							dispSpcvCategoryMainText[i].toggle(false);
							dispSpcvCategorySubText[i].toggle(false);
							// dispSpcvCategoryIconName[i].toggle(false);
							dispSpcvCategoryImageSelect[i].toggle(false);
							dispSpcvCategoryImageUrl[i].toggle(false);
							dispSpcvCategoryUrl[i].toggle(false);
							dispSpcvCategoryUrlExternal[i].toggle(false);
							dispSpcvCategoryButtonDesignSelect[i].toggle(false);
							dispSpcvCategoryColorType[i].toggle(false);
							dispSpcvCategoryColor[i].toggle(false);
							dispSpcvCategoryGradationSelect[i].toggle(false);
							dispSpcvCategoryExtraSub[i].toggle(false);
							dispSpcvCategoryTextColor[i].toggle(false);
							dispSpcvCategoryIconVisual[i].toggle(false);
							dispSpcvCategoryIconChoise[i].toggle(false);
						}
						for (let i = 1; i < 5; i++) {
							dispSpmenuIconVisual[i].toggle(true);
							dispSpmenuIconChoise[i].toggle(true);
							customize('jinr__sp_menu_icon_display' + i + '', function (value) {
								var toggle = function (to) {
									if (to === 'd--icon-need') {
										dispSpmenuIconVisual[i].toggle(true);
										dispSpmenuIconChoise[i].toggle(true);
										return;
									}
									dispSpmenuIconVisual[i].toggle(false);
									dispSpmenuIconChoise[i].toggle(false);
								};
								toggle(value.get());
								value.bind(toggle);
							});
						}
						return;
					}
					dispSpmenuImage.toggle(false);
					dispSpSetting1.toggle(false);
					dispSpSetting2.toggle(false);
					dispSpSetting3.toggle(false);
					dispSpSetting4.toggle(false);

					dispSpmenuLabel1.toggle(false);
					dispSpmenuLabel2.toggle(false);
					dispSpmenuLabel3.toggle(false);
					dispSpmenuLabel4.toggle(false);

					dispSpmenuIconDisplay1.toggle(false);
					dispSpmenuIconDisplay2.toggle(false);
					dispSpmenuIconDisplay3.toggle(false);
					dispSpmenuIconDisplay4.toggle(false);

					dispSpSetting5.toggle(false);
					dispSpmenuTopDisplay.toggle(false);

					for (let i = 1; i < 5; i++) {
						dispSpmenuIconVisual[i].toggle(false);
						dispSpmenuIconChoise[i].toggle(false);
					}

					dispSpmenuLink1.toggle(false);
					dispSpmenuLink2.toggle(false);
					dispSpmenuLink3.toggle(false);
					dispSpmenuLink4.toggle(false);

					// コンバージョンボタン
					dispSpcvAllDisplay.toggle(true);
					dispSpcvImage.toggle(true);
					dispSpcvSetting1.toggle(true);
					dispSpcvSetting2.toggle(true);
					dispSpcvSetting3.toggle(true);
					//dispSpcvSetting4.toggle(true);
					dispSpcvAllMaintext.toggle(true);
					dispSpcvAllSubtext.toggle(true);
					dispSpcvAllUrl.toggle(true);
					dispSpcvAllUrlExternal.toggle(true);
					dispSpcvAllImageUrl.toggle(true);
					dispSpcvAllImageSelect.toggle(true);
					dispSpcvAllButtonDesignSelect.toggle(true);
					dispSpcvAllColorType.toggle(true);
					dispSpcvAllColor.toggle(true);
					dispSpcvAllGradationSelect.toggle(true);
					dispSpcvAllExtraSub1.toggle(true);
					dispSpcvAllTextColor.toggle(true);
					dispSpcvAllExclusionId.toggle(true);
					dispSpcvAllExclusionPageId.toggle(true);
					dispSpcvAllIconVisual.toggle(true);
					dispSpcvAllIconChoise.toggle(true);
					// dispSpcvAllIconName.toggle(true);

					for (let i = 1; i < 3; i++) {
						dispSpcvCategoryDisplay[i].toggle(true);
						dispSpcvCategorySelect[i].toggle(true);
						dispSpcvCategoryMainText[i].toggle(true);
						dispSpcvCategorySubText[i].toggle(true);
						// dispSpcvCategoryIconName[i].toggle(true);
						dispSpcvCategoryImageSelect[i].toggle(true);
						dispSpcvCategoryImageUrl[i].toggle(true);
						dispSpcvCategoryUrl[i].toggle(true);
						dispSpcvCategoryUrlExternal[i].toggle(true);
						dispSpcvCategoryButtonDesignSelect[i].toggle(true);
						dispSpcvCategoryColorType[i].toggle(true);
						dispSpcvCategoryColor[i].toggle(true);
						dispSpcvCategoryGradationSelect[i].toggle(true);
						dispSpcvCategoryExtraSub[i].toggle(true);
						dispSpcvCategoryTextColor[i].toggle(true);
						dispSpcvCategoryIconVisual[i].toggle(true);
						dispSpcvCategoryIconChoise[i].toggle(true);
					}

					//全ページ
					customize('jinr__spcv_all_color_type', function (value) {
						var toggle = function (to) {
							if (to === 'simplecolor') {
								dispSpcvAllGradationSelect.toggle(false);
								dispSpcvAllExtraSub1.toggle(false);
								dispSpcvAllColor.toggle(true);
								return;
							}
							dispSpcvAllColor.toggle(false);
							dispSpcvAllGradationSelect.toggle(true);
							dispSpcvAllExtraSub1.toggle(true);
						};
						toggle(value.get());
						value.bind(toggle);
					});
					customize('jinr__spcv_all_display', function (value) {
						var toggle = function (to) {
							if (to === 'on') {
								dispSpcvAllMaintext.toggle(true);
								dispSpcvAllSubtext.toggle(true);
								dispSpcvAllUrl.toggle(true);
								dispSpcvAllUrlExternal.toggle(true);
								dispSpcvAllImageSelect.toggle(true);
								dispSpcvAllButtonDesignSelect.toggle(true);
								dispSpcvAllColorType.toggle(true);
								dispSpcvAllColor.toggle(true);
								dispSpcvAllTextColor.toggle(true);
								dispSpcvAllExclusionId.toggle(true);
								dispSpcvAllExclusionPageId.toggle(true);
								dispSpcvAllIconVisual.toggle(true);
								dispSpcvAllIconChoise.toggle(true);

								customize('jinr__spcv_all_image_select', function (value) {
									var toggle = function (to) {
										if (to === 'd--image-need') {
											dispSpcvAllImageUrl.toggle(true);
											return;
										}
										dispSpcvAllImageUrl.toggle(false);
									};
									toggle(value.get());
									value.bind(toggle);
								});
								customize('jinr__spcv_all_style', function (value) {
									var toggle = function (to) {
										if (to === 'd--spcv-outline') {
											dispSpcvAllColorType.toggle(false);
											dispSpcvAllGradationSelect.toggle(false);
											dispSpcvAllExtraSub1.toggle(false);
											dispSpcvAllColor.toggle(true);
											return;
										} else {
											dispSpcvAllColorType.toggle(true);
											if (customize('jinr__spcv_all_color_type').get() == 'simplecolor') {
												dispSpcvAllColor.toggle(true);
												dispSpcvAllGradationSelect.toggle(false);
												dispSpcvAllExtraSub1.toggle(false);
											} else {
												dispSpcvAllColor.toggle(false);
												dispSpcvAllGradationSelect.toggle(true);
												dispSpcvAllExtraSub1.toggle(true);
											}
										}
									};
									toggle(value.get());
									value.bind(toggle);
								});
								return;
							}
							dispSpcvAllMaintext.toggle(false);
							dispSpcvAllSubtext.toggle(false);
							dispSpcvAllUrl.toggle(false);
							dispSpcvAllUrlExternal.toggle(false);
							dispSpcvAllImageUrl.toggle(false);
							dispSpcvAllImageSelect.toggle(false);
							dispSpcvAllButtonDesignSelect.toggle(false);
							dispSpcvAllColorType.toggle(false);
							dispSpcvAllColor.toggle(false);
							dispSpcvAllGradationSelect.toggle(false);
							dispSpcvAllExtraSub1.toggle(false);
							dispSpcvAllTextColor.toggle(false);
							dispSpcvAllExclusionId.toggle(false);
							dispSpcvAllExclusionPageId.toggle(false);
							dispSpcvAllIconVisual.toggle(false);
							dispSpcvAllIconChoise.toggle(false);
						};
						toggle(value.get());

						value.bind(toggle);
					});

					//特定カテゴリー
					for (let i = 1; i < 3; i++) {
						customize('jinr__spcv_category' + i + '_color_type', function (value) {
							var toggle = function (to) {
								if (to === 'simplecolor') {
									dispSpcvCategoryGradationSelect[i].toggle(false);
									dispSpcvCategoryExtraSub[i].toggle(false);
									dispSpcvCategoryColor[i].toggle(true);
									return;
								}
								dispSpcvCategoryColor[i].toggle(false);
								dispSpcvCategoryGradationSelect[i].toggle(true);
								dispSpcvCategoryExtraSub[i].toggle(true);
							};
							toggle(value.get());
							value.bind(toggle);
						});

						customize('jinr__spcv_category' + i + '_display', function (value) {
							var toggle = function (to) {
								if (to === 'on') {
									dispSpcvCategorySelect[i].toggle(true);
									dispSpcvCategoryMainText[i].toggle(true);
									dispSpcvCategorySubText[i].toggle(true);
									// dispSpcvCategoryIconName[i].toggle(true);
									dispSpcvCategoryUrl[i].toggle(true);
									dispSpcvCategoryUrlExternal[i].toggle(true);
									dispSpcvCategoryImageSelect[i].toggle(true);
									dispSpcvCategoryButtonDesignSelect[i].toggle(true);
									dispSpcvCategoryColorType[i].toggle(true);
									dispSpcvCategoryColor[i].toggle(true);
									dispSpcvCategoryTextColor[i].toggle(true);
									dispSpcvCategoryIconVisual[i].toggle(true);
									dispSpcvCategoryIconChoise[i].toggle(true);

									customize('jinr__spcv_category' + i + '_image_select', function (value) {
										var toggle = function (to) {
											if (to === 'd--image-need') {
												dispSpcvCategoryImageUrl[i].toggle(true);
												return;
											}
											dispSpcvCategoryImageUrl[i].toggle(false);
										};
										toggle(value.get());
										value.bind(toggle);
									});

									customize('jinr__spcv_category' + i + '_style', function (value) {
										var toggle = function (to) {
											if (to === 'd--spcv-outline') {
												dispSpcvCategoryColorType[i].toggle(false);
												dispSpcvCategoryGradationSelect[i].toggle(false);
												dispSpcvCategoryExtraSub[i].toggle(false);
												dispSpcvCategoryColor[i].toggle(true);
												return;
											} else {
												dispSpcvCategoryColorType[i].toggle(true);
												if (customize('jinr__spcv_category' + i + '_color_type').get() == 'simplecolor') {
													dispSpcvCategoryColor[i].toggle(true);
													dispSpcvCategoryGradationSelect[i].toggle(false);
													dispSpcvCategoryExtraSub[i].toggle(false);
												} else {
													dispSpcvCategoryColor[i].toggle(false);
													dispSpcvCategoryGradationSelect[i].toggle(true);
													dispSpcvCategoryExtraSub[i].toggle(true);
												}
											}
										};
										toggle(value.get());
										value.bind(toggle);
									});
									return;
								}
								dispSpcvCategorySelect[i].toggle(false);
								dispSpcvCategoryMainText[i].toggle(false);
								dispSpcvCategorySubText[i].toggle(false);
								// dispSpcvCategoryIconName[i].toggle(false);
								dispSpcvCategoryImageSelect[i].toggle(false);
								dispSpcvCategoryImageUrl[i].toggle(false);
								dispSpcvCategoryUrl[i].toggle(false);
								dispSpcvCategoryUrlExternal[i].toggle(false);
								dispSpcvCategoryButtonDesignSelect[i].toggle(false);
								dispSpcvCategoryColorType[i].toggle(false);
								dispSpcvCategoryColor[i].toggle(false);
								dispSpcvCategoryGradationSelect[i].toggle(false);
								dispSpcvCategoryExtraSub[i].toggle(false);
								dispSpcvCategoryTextColor[i].toggle(false);
								dispSpcvCategoryIconVisual[i].toggle(false);
								dispSpcvCategoryIconChoise[i].toggle(false);
							};
							toggle(value.get());

							value.bind(toggle);
						});
					}
				};
				toggle(value.get());
				value.bind(toggle);
			});
		}
		selectedSpcv();

		//カラー設定のカラータイプ出し分け
		function selectedColorType() {
			dispHeaderBgColorType.toggle(true);

			// カラー設定全体のだしわけ
			customize('jinr__color_tab', function (value) {
				var toggle = function (to) {
					if (to === 'gradation') {
						dispHeaderBgColorType.toggle(false);

						dispColorSetting1.toggle(false);
						dispThemeColor.toggle(false);
						dispBackColor.toggle(false);
						dispTextColor.toggle(false);

						dispColorSetting2.toggle(false);
						dispHeaderBgColor.toggle(false);
						dispHeaderBgGradationSelect.toggle(false);
						dispHeaderBgExtraSub1.toggle(false);
						dispHeaderTitleColor.toggle(false);
						dispHeaderMenuColor.toggle(false);

						dispColorSetting3.toggle(false);
						dispFooterBgColorType.toggle(false);
						dispFooterBgColor.toggle(false);
						dispFooterBgGradationSelect.toggle(false);
						dispFooterBgExtraSub1.toggle(false);
						dispFooterTextColor.toggle(false);

						dispColorSetting4.toggle(false);
						dispMarkerWeight1.toggle(false);
						dispMarkerColor1.toggle(false);
						dispMarkerWeight2.toggle(false);
						dispMarkerColor2.toggle(false);
						dispColorTextColor1.toggle(false);
						dispColorTextColor2.toggle(false);

						dispColorSetting5.toggle(false);
						dispLinkColor.toggle(false);
						dispLinkHoverColor.toggle(false);

						dispRelatedPostBgColorType.toggle(false);
						dispRelatedPostBgColor.toggle(false);
						dispRelatedPostBgGradationSelect.toggle(false);
						dispRelatedPostBgExtraSub1.toggle(false);
						dispRelatedPostcolorType.toggle(false);

						dispColorSetting6.toggle(false);
						dispFavoriteColor1.toggle(false);
						dispFavoriteColor2.toggle(false);
						dispFavoriteColor3.toggle(false);
						dispFavoriteColor4.toggle(false);
						dispFavoriteColor5.toggle(false);
						dispFavoriteColor6.toggle(false);
						dispFavoriteNotice.toggle(false);

						dispGradationSetting1.toggle(true);
						dispGradation1Color1.toggle(true);
						dispGradation1Color2.toggle(true);
						dispGradation1Deg1.toggle(true);

						dispGradationSetting2.toggle(true);
						dispGradation2Color1.toggle(true);
						dispGradation2Color2.toggle(true);
						dispGradation2Deg1.toggle(true);

						dispGradationSetting3.toggle(true);
						dispGradation3Color1.toggle(true);
						dispGradation3Color2.toggle(true);
						dispGradation3Deg1.toggle(true);
						return;
					}
					dispHeaderBgColorType.toggle(true);
					dispColorSetting1.toggle(true);
					dispThemeColor.toggle(true);
					dispBackColor.toggle(true);

					dispTextColor.toggle(true);

					dispColorSetting2.toggle(true);
					dispHeaderBgColor.toggle(true);
					dispHeaderBgGradationSelect.toggle(true);
					dispHeaderBgExtraSub1.toggle(true);
					dispHeaderTitleColor.toggle(true);
					dispHeaderMenuColor.toggle(true);

					dispColorSetting3.toggle(true);
					dispFooterBgColorType.toggle(true);
					dispFooterBgColor.toggle(true);
					dispFooterBgGradationSelect.toggle(true);
					dispFooterBgExtraSub1.toggle(true);
					dispFooterTextColor.toggle(true);

					dispColorSetting4.toggle(true);
					dispMarkerWeight1.toggle(true);
					dispMarkerColor1.toggle(true);
					dispMarkerWeight2.toggle(true);
					dispMarkerColor2.toggle(true);
					dispColorTextColor1.toggle(true);
					dispColorTextColor2.toggle(true);

					dispColorSetting5.toggle(true);
					dispLinkColor.toggle(true);
					dispLinkHoverColor.toggle(true);

					dispRelatedPostBgColorType.toggle(true);
					dispRelatedPostBgColor.toggle(true);
					dispRelatedPostBgGradationSelect.toggle(true);
					dispRelatedPostBgExtraSub1.toggle(true);
					dispRelatedPostcolorType.toggle(true);

					dispColorSetting6.toggle(true);
					dispFavoriteColor1.toggle(true);
					dispFavoriteColor2.toggle(true);
					dispFavoriteColor3.toggle(true);
					dispFavoriteColor4.toggle(true);
					dispFavoriteColor5.toggle(true);
					dispFavoriteColor6.toggle(true);
					dispFavoriteNotice.toggle(true);

					// グラデーション登録
					dispGradationSetting1.toggle(false);
					dispGradation1Color1.toggle(false);
					dispGradation1Color2.toggle(false);
					dispGradation1Deg1.toggle(false);

					dispGradationSetting2.toggle(false);
					dispGradation2Color1.toggle(false);
					dispGradation2Color2.toggle(false);
					dispGradation2Deg1.toggle(false);

					dispGradationSetting3.toggle(false);
					dispGradation3Color1.toggle(false);
					dispGradation3Color2.toggle(false);
					dispGradation3Deg1.toggle(false);

					//ヘッダーの背景色
					customize('jinr__header_bgcolor_type', function (value) {
						var toggle = function (to) {
							if (to === 'simplecolor') {
								dispHeaderBgGradationSelect.toggle(false);
								dispHeaderBgExtraSub1.toggle(false);
								dispHeaderBgColor.toggle(true);
								return;
							} else if (to === 'transparent') {
								dispHeaderBgGradationSelect.toggle(false);
								dispHeaderBgExtraSub1.toggle(false);
								dispHeaderBgColor.toggle(false);
								return;
							}
							dispHeaderBgColor.toggle(false);
							dispHeaderBgGradationSelect.toggle(true);
							dispHeaderBgExtraSub1.toggle(true);
						};
						toggle(value.get());

						value.bind(toggle);
					});

					//フッターの背景色
					customize('jinr__footer_bgcolor_type', function (value) {
						var toggle = function (to) {
							if (to === 'simplecolor') {
								dispFooterBgGradationSelect.toggle(false);
								dispFooterBgExtraSub1.toggle(false);
								dispFooterBgColor.toggle(true);
								return;
							} else if (to === 'transparent') {
								dispFooterBgGradationSelect.toggle(false);
								dispFooterBgExtraSub1.toggle(false);
								dispFooterBgColor.toggle(false);
								return;
							}
							dispFooterBgColor.toggle(false);
							dispFooterBgGradationSelect.toggle(true);
							dispFooterBgExtraSub1.toggle(true);
						};
						toggle(value.get());

						value.bind(toggle);
					});

					//関連記事の背景色
					customize('jinr__related_post_bgcolor_type', function (value) {
						var toggle = function (to) {
							if (to === 'simplecolor') {
								dispRelatedPostBgGradationSelect.toggle(false);
								dispRelatedPostBgExtraSub1.toggle(false);
								dispRelatedPostBgColor.toggle(true);
								return;
							} else if (to === 'transparent') {
								dispRelatedPostBgGradationSelect.toggle(false);
								dispRelatedPostBgExtraSub1.toggle(false);
								dispRelatedPostBgColor.toggle(false);
								return;
							}
							dispRelatedPostBgColor.toggle(false);
							dispRelatedPostBgGradationSelect.toggle(true);
							dispRelatedPostBgExtraSub1.toggle(true);
						};
						toggle(value.get());

						value.bind(toggle);
					});
				};
				toggle(value.get());

				value.bind(toggle);
			});
		}
		selectedColorType();

		//ボックス設定のだしわけ
		function selectedBoxTab() {
			customize('jinr__box_tab', function (value) {
				var toggle = function (to) {
					if (to === 'iconbox') {
						// ボックス
						dispBoxSetting1.toggle(false);
						dispBoxSetting2.toggle(false);
						dispBoxSetting3.toggle(false);
						dispBoxSetting4.toggle(false);
						dispBoxSetting5.toggle(false);
						dispBoxSetting6.toggle(false);
						dispBoxSetting7.toggle(false);
						dispBoxSetting8.toggle(false);
						dispBoxSetting9.toggle(false);
						dispBoxSetting10.toggle(false);
						dispBoxSetting11.toggle(false);

						dispTitleBoxSetting1.toggle(false);
						dispTitleBoxSetting2.toggle(false);
						dispTitleBoxSetting3.toggle(false);
						dispTitleBoxSetting4.toggle(false);
						dispTitleBoxSetting6.toggle(false);
						dispTitleBoxSetting7.toggle(false);
						dispTitleBoxSetting8.toggle(false);
						dispTitleBoxSetting9.toggle(false);

						dispSimpleBoxColor1.toggle(false);
						dispSimpleBoxColor2.toggle(false);
						dispSimpleBoxColor3.toggle(false);
						dispSimpleBoxColor4.toggle(false);
						dispSimpleBoxColor5.toggle(false);
						dispSimpleBoxColor6.toggle(false);
						dispSimpleBoxColor7.toggle(false);
						dispSimpleBoxColor8.toggle(false);
						dispSimpleBoxColor9.toggle(false);
						dispSimpleBoxColor10.toggle(false);
						dispSimpleBoxColor11.toggle(false);

						dispBoxDesign1.toggle(false);
						dispBoxDesign2.toggle(false);
						dispBoxDesign3.toggle(false);
						dispBoxDesign4.toggle(false);
						dispBoxDesign5.toggle(false);
						dispBoxDesign6.toggle(false);
						dispBoxDesign7.toggle(false);
						dispBoxDesign8.toggle(false);
						dispBoxDesign9.toggle(false);
						dispBoxDesign10.toggle(false);
						dispBoxDesign11.toggle(false);

						dispHeadingBoxColor1.toggle(false);
						dispHeadingBoxColor2.toggle(false);
						dispHeadingBoxColor3.toggle(false);
						dispHeadingBoxColor4.toggle(false);
						dispHeadingBoxColor6.toggle(false);
						dispHeadingBoxColor7.toggle(false);
						dispHeadingBoxColor8.toggle(false);
						dispHeadingBoxColor9.toggle(false);

						dispHeadingBoxDesign1.toggle(false);
						dispHeadingBoxDesign2.toggle(false);
						dispHeadingBoxDesign3.toggle(false);
						dispHeadingBoxDesign4.toggle(false);
						dispHeadingBoxDesign6.toggle(false);
						dispHeadingBoxDesign7.toggle(false);
						dispHeadingBoxDesign8.toggle(false);
						dispHeadingBoxDesign9.toggle(false);

						// アイコンボックス
						dispIconBoxSetting1.toggle(true);
						dispIconBoxSetting2.toggle(true);
						dispIconBoxSetting3.toggle(true);
						dispIconBoxSetting4.toggle(true);
						dispIconBoxSetting5.toggle(true);
						dispIconBoxSetting6.toggle(true);
						dispIconBoxSetting7.toggle(true);
						dispIconBoxSetting8.toggle(true);
						dispHIconBoxSetting1.toggle(true);
						dispHIconBoxSetting2.toggle(true);
						dispHIconBoxSetting3.toggle(true);
						dispHIconBoxSetting4.toggle(true);
						dispSimpleIconBoxColor1.toggle(true);
						dispSimpleIconBoxColor2.toggle(true);
						dispSimpleIconBoxColor3.toggle(true);
						dispSimpleIconBoxColor4.toggle(true);
						dispSimpleIconBoxColor5.toggle(true);
						dispSimpleIconBoxColor6.toggle(true);
						dispSimpleIconBoxColor7.toggle(true);
						dispSimpleIconBoxColor8.toggle(true);

						dispIconVisual1.toggle(true);
						dispIconVisual2.toggle(true);
						dispIconVisual3.toggle(true);
						dispIconVisual4.toggle(true);
						dispIconVisual5.toggle(true);
						dispIconVisual6.toggle(true);
						dispIconVisual7.toggle(true);
						dispIconVisual8.toggle(true);

						dispIconChoise1.toggle(true);
						dispIconChoise2.toggle(true);
						dispIconChoise3.toggle(true);
						dispIconChoise4.toggle(true);
						dispIconChoise5.toggle(true);
						dispIconChoise6.toggle(true);
						dispIconChoise7.toggle(true);
						dispIconChoise8.toggle(true);

						dispHeadingIconBoxColor1.toggle(true);
						dispHeadingIconBoxColor2.toggle(true);
						dispHeadingIconBoxColor3.toggle(true);
						dispHeadingIconBoxColor4.toggle(true);

						dispHeadingIconVisual1.toggle(true);
						dispHeadingIconVisual2.toggle(true);
						dispHeadingIconVisual3.toggle(true);
						dispHeadingIconVisual4.toggle(true);

						dispHeadingIconChoise1.toggle(true);
						dispHeadingIconChoise2.toggle(true);
						dispHeadingIconChoise3.toggle(true);
						dispHeadingIconChoise4.toggle(true);

						dispHeadingIconBoxtitle1.toggle(true);
						dispHeadingIconBoxtitle2.toggle(true);
						dispHeadingIconBoxtitle3.toggle(true);
						dispHeadingIconBoxtitle4.toggle(true);
						return;
					}
					dispBoxSetting1.toggle(true);
					dispBoxSetting2.toggle(true);
					dispBoxSetting3.toggle(true);
					dispBoxSetting4.toggle(true);
					dispBoxSetting5.toggle(true);
					dispBoxSetting6.toggle(true);
					dispBoxSetting7.toggle(true);
					dispBoxSetting8.toggle(true);
					dispBoxSetting9.toggle(true);
					dispBoxSetting10.toggle(true);
					dispBoxSetting11.toggle(true);

					dispTitleBoxSetting1.toggle(true);
					dispTitleBoxSetting2.toggle(true);
					dispTitleBoxSetting3.toggle(true);
					dispTitleBoxSetting4.toggle(true);
					dispTitleBoxSetting6.toggle(true);
					dispTitleBoxSetting7.toggle(true);
					dispTitleBoxSetting8.toggle(true);
					dispTitleBoxSetting9.toggle(true);

					dispSimpleBoxColor1.toggle(true);
					dispSimpleBoxColor2.toggle(true);
					dispSimpleBoxColor3.toggle(true);
					dispSimpleBoxColor4.toggle(true);
					dispSimpleBoxColor5.toggle(true);
					dispSimpleBoxColor6.toggle(true);
					dispSimpleBoxColor7.toggle(true);
					dispSimpleBoxColor8.toggle(true);
					dispSimpleBoxColor9.toggle(true);
					dispSimpleBoxColor10.toggle(true);
					dispSimpleBoxColor11.toggle(true);

					dispBoxDesign1.toggle(true);
					dispBoxDesign2.toggle(true);
					dispBoxDesign3.toggle(true);
					dispBoxDesign4.toggle(true);
					dispBoxDesign5.toggle(true);
					dispBoxDesign6.toggle(true);
					dispBoxDesign7.toggle(true);
					dispBoxDesign8.toggle(true);
					dispBoxDesign9.toggle(true);
					dispBoxDesign10.toggle(true);
					dispBoxDesign11.toggle(true);

					dispHeadingBoxColor1.toggle(true);
					dispHeadingBoxColor2.toggle(true);
					dispHeadingBoxColor3.toggle(true);
					dispHeadingBoxColor4.toggle(true);
					dispHeadingBoxColor6.toggle(true);
					dispHeadingBoxColor7.toggle(true);
					dispHeadingBoxColor8.toggle(true);
					dispHeadingBoxColor9.toggle(true);

					dispHeadingBoxDesign1.toggle(true);
					dispHeadingBoxDesign2.toggle(true);
					dispHeadingBoxDesign3.toggle(true);
					dispHeadingBoxDesign4.toggle(true);
					dispHeadingBoxDesign6.toggle(true);
					dispHeadingBoxDesign7.toggle(true);
					dispHeadingBoxDesign8.toggle(true);
					dispHeadingBoxDesign9.toggle(true);

					// アイコンボックス
					dispIconBoxSetting1.toggle(false);
					dispIconBoxSetting2.toggle(false);
					dispIconBoxSetting3.toggle(false);
					dispIconBoxSetting4.toggle(false);
					dispIconBoxSetting5.toggle(false);
					dispIconBoxSetting6.toggle(false);
					dispIconBoxSetting7.toggle(false);
					dispIconBoxSetting8.toggle(false);
					dispHIconBoxSetting1.toggle(false);
					dispHIconBoxSetting2.toggle(false);
					dispHIconBoxSetting3.toggle(false);
					dispHIconBoxSetting4.toggle(false);
					dispSimpleIconBoxColor1.toggle(false);
					dispSimpleIconBoxColor2.toggle(false);
					dispSimpleIconBoxColor3.toggle(false);
					dispSimpleIconBoxColor4.toggle(false);
					dispSimpleIconBoxColor5.toggle(false);
					dispSimpleIconBoxColor6.toggle(false);
					dispSimpleIconBoxColor7.toggle(false);
					dispSimpleIconBoxColor8.toggle(false);

					dispIconVisual1.toggle(false);
					dispIconVisual2.toggle(false);
					dispIconVisual3.toggle(false);
					dispIconVisual4.toggle(false);
					dispIconVisual5.toggle(false);
					dispIconVisual6.toggle(false);
					dispIconVisual7.toggle(false);
					dispIconVisual8.toggle(false);

					dispIconChoise1.toggle(false);
					dispIconChoise2.toggle(false);
					dispIconChoise3.toggle(false);
					dispIconChoise4.toggle(false);
					dispIconChoise5.toggle(false);
					dispIconChoise6.toggle(false);
					dispIconChoise7.toggle(false);
					dispIconChoise8.toggle(false);

					dispHeadingIconBoxColor1.toggle(false);
					dispHeadingIconBoxColor2.toggle(false);
					dispHeadingIconBoxColor3.toggle(false);
					dispHeadingIconBoxColor4.toggle(false);

					dispHeadingIconVisual1.toggle(false);
					dispHeadingIconVisual2.toggle(false);
					dispHeadingIconVisual3.toggle(false);
					dispHeadingIconVisual4.toggle(false);

					dispHeadingIconChoise1.toggle(false);
					dispHeadingIconChoise2.toggle(false);
					dispHeadingIconChoise3.toggle(false);
					dispHeadingIconChoise4.toggle(false);

					dispHeadingIconBoxtitle1.toggle(false);
					dispHeadingIconBoxtitle2.toggle(false);
					dispHeadingIconBoxtitle3.toggle(false);
					dispHeadingIconBoxtitle4.toggle(false);
				};
				toggle(value.get());
				value.bind(toggle);
			});
		}
		selectedBoxTab();

		function selectedSlider() {
			dispSliderExtraSetting1.toggle(true);
			dispSliderExtraSetting2.toggle(true);
			dispSliderAnimationSpeed.toggle(true);
			dispSliderTypeSelect.toggle(true);
			dispSliderDesignSelect.toggle(true);
			dispSliderTextColorWhite.toggle(true);
			customize('jinr__slider_type_select', function (value) {
				var toggle = function (to) {
					if (to === 'd--slider-type-choice') {
						dispSliderURL01.toggle(true);
						dispSliderURL02.toggle(true);
						dispSliderURL03.toggle(true);
						dispSliderURL04.toggle(true);
						dispSliderURL05.toggle(true);
						dispSliderURL06.toggle(true);
						return;
					}
					dispSliderURL01.toggle(false);
					dispSliderURL02.toggle(false);
					dispSliderURL03.toggle(false);
					dispSliderURL04.toggle(false);
					dispSliderURL05.toggle(false);
					dispSliderURL06.toggle(false);
				};
				toggle(value.get());
				value.bind(toggle);
			});
			customize('jinr__slider_design_select', function (value) {
				var toggle = function (to) {
					if (to === 'd--slider-design2') {
						dispSliderAnimationSpeed.toggle(false);
						return;
					}
					dispSliderAnimationSpeed.toggle(true);
				};
				toggle(value.get());
				value.bind(toggle);
			});
			customize('jinr__slider_design_select', function (designValue) {
				customize('jinr__slider_type_select', function (typeValue) {
					var checkAndUpdate = function () {
						var design = designValue.get();
						var type = typeValue.get();

						if (design === 'd--slider-design2' && type === 'd--slider-type-choice') {
							dispSliderButtonText.toggle(true);
							dispSliderNotice.toggle(true);
						} else {
							dispSliderButtonText.toggle(false);
							dispSliderNotice.toggle(false);
						}
					};

					// Initial call
					checkAndUpdate();

					// Bind to changes
					designValue.bind(checkAndUpdate);
					typeValue.bind(checkAndUpdate);
				});
			});
		}

		function selectedImageSlider() {
			dispImageSliderExtraSetting1.toggle(true);
			dispImageSliderExtraSetting2.toggle(true);
			dispImageSliderImageURL01.toggle(true);
			dispImageSliderImageURL02.toggle(true);
			dispImageSliderImageURL03.toggle(true);
			dispImageSliderImageURL04.toggle(true);
			dispImageSliderImageURL05.toggle(true);
			dispImageSliderImageURL06.toggle(true);
			dispImageSliderImageLINK01.toggle(true);
			dispImageSliderImageLINK02.toggle(true);
			dispImageSliderImageLINK03.toggle(true);
			dispImageSliderImageLINK04.toggle(true);
			dispImageSliderImageLINK05.toggle(true);
			dispImageSliderImageLINK06.toggle(true);
			dispImageSliderAnimationSelect.toggle(true);
			dispImageSliderAnimationSpeed.toggle(true);
			//dispImageSliderPaginationDesign.toggle(true);
			//dispImageSliderPagerDesign.toggle(true);
			dispImageSliderAutoPlay.toggle(true);
		}

		function selectedStillImage() {
			dispStillImageExtraSetting1.toggle(true);
			dispStillImageExtraSetting2.toggle(true);
			dispStillImageExtraSetting3.toggle(true);
			dispStillImageExtraSetting4.toggle(true);
			dispStillImageExtraSetting5.toggle(true);
			dispStillImageDesign.toggle(true);
			dispStillImageUrl.toggle(true);
			dispStillImageUrlSp.toggle(true);
			dispStillImageOverlayDesign.toggle(true);
			dispStillImageHeightSize.toggle(true);
			dispStillImageLink.toggle(true);
			customize('jinr__stillimage_copy_display', function (value) {
				var toggle = function (to) {
					if (to === 'on') {
						dispStillImageMainCopy.toggle(true);
						dispStillImageMainCopyColor.toggle(true);
						dispStillImageMainCopyTextDecoSelect.toggle(true);
						dispStillImageCopySize.toggle(true);
						dispStillImageSubCopy.toggle(true);
						return;
					}
					dispStillImageMainCopy.toggle(false);
					dispStillImageMainCopyColor.toggle(false);
					dispStillImageMainCopyTextDecoSelect.toggle(false);
					dispStillImageCopySize.toggle(false);
					dispStillImageSubCopy.toggle(false);
				};
				toggle(value.get());
				value.bind(toggle);
			});
			customize('jinr__stillimage_button_display', function (value) {
				var toggle = function (to) {
					if (to === 'on') {
						dispStillImageButtonDesignSelect.toggle(true);
						dispStillImageButtonText.toggle(true);
						dispStillImageButtonLink.toggle(true);
						dispStillImageExtraSub1.toggle(true);
						return;
					}
					dispStillImageButtonDesignSelect.toggle(false);
					dispStillImageButtonText.toggle(false);
					dispStillImageButtonLink.toggle(false);
					dispStillImageExtraSub1.toggle(false);
				};
				toggle(value.get());
				value.bind(toggle);
			});
			customize('jinr__stillimage_copy_display', function (value) {
				var toggle = function (to) {
					if (to === 'on') {
						dispStillImageExtraSetting4.toggle(true);
						dispStillImageContentsPositionVerticalPc.toggle(true);
						dispStillImageContentsPositionHorizonPc.toggle(true);
						dispStillImageContentsPositionVerticalSp.toggle(true);
						dispStillImageContentsPositionHorizonSp.toggle(true);
						dispStillImageContentsAlignPc.toggle(true);
						return;
					} else {
						customize('jinr__stillimage_button_display', function (value) {
							var toggle = function (to) {
								if (to === 'on') {
									dispStillImageExtraSetting4.toggle(true);
									dispStillImageContentsPositionVerticalPc.toggle(true);
									dispStillImageContentsPositionHorizonPc.toggle(true);
									dispStillImageContentsPositionVerticalSp.toggle(true);
									dispStillImageContentsPositionHorizonSp.toggle(true);
									dispStillImageContentsAlignPc.toggle(true);
								} else {
									dispStillImageExtraSetting4.toggle(false);
									dispStillImageContentsPositionVerticalPc.toggle(false);
									dispStillImageContentsPositionHorizonPc.toggle(false);
									dispStillImageContentsPositionVerticalSp.toggle(false);
									dispStillImageContentsPositionHorizonSp.toggle(false);
									dispStillImageContentsAlignPc.toggle(false);
								}
							};
							toggle(value.get());
							value.bind(toggle);
						});
					}
				};
				toggle(value.get());
				value.bind(toggle);
			});
			customize('jinr__stillimage_height_size', function (value) {
				var toggle = function (to) {
					if (to === 'd--stillimage-height-size-original') {
						dispStillImageHeightSizeNumber.toggle(true);
						dispStillImageHeightSizeControl.toggle(false);
						return;
					} else if (to === 'd--stillimage-height-size-full') {
						dispStillImageHeightSizeControl.toggle(true);
						dispStillImageHeightSizeNumber.toggle(false);
						return;
					}
					dispStillImageHeightSizeNumber.toggle(false);
					dispStillImageHeightSizeControl.toggle(false);
				};
				toggle(value.get());

				value.bind(toggle);
			});
			customize('jinr__stillimage_url_sp', function (value) {
				var toggle = function (to) {
					if (to !== '') {
						dispStillImageHeightSizeSp.toggle(true);
						return;
					}
					dispStillImageHeightSizeSp.toggle(false);
					dispStillImageHeightSizeNumberSp.toggle(false);
					dispStillImageHeightSizeControlSp.toggle(false);
				};
				toggle(value.get());

				value.bind(toggle);
			});
			customize('jinr__stillimage_height_size_sp', function (value) {
				var toggle = function (to) {
					if (to === 'd--stillimage-height-size-original-sp') {
						dispStillImageHeightSizeNumberSp.toggle(true);
						dispStillImageHeightSizeControlSp.toggle(false);
						return;
					} else if (to === 'd--stillimage-height-size-full-sp') {
						dispStillImageHeightSizeControlSp.toggle(true);
						dispStillImageHeightSizeNumberSp.toggle(false);
						return;
					}
					dispStillImageHeightSizeNumberSp.toggle(false);
					dispStillImageHeightSizeControlSp.toggle(false);
				};
				toggle(value.get());

				value.bind(toggle);
			});
			customize('jinr__stillimage_overlay_design', function (value) {
				var toggle = function (to) {
					if (to !== 'd--stillimage-overlay-none') {
						dispStillImageOverlayColorType.toggle(true);
						dispStillImageOverlayTransparent.toggle(true);
						customize('jinr__stillimage_overlay_color_type', function (value) {
							var toggle = function (to) {
								if (to === 'simplecolor') {
									dispStillImageOverlayGradationSelect.toggle(false);
									dispStillImageExtraSub2.toggle(false);
									dispStillImageOverlayColor.toggle(true);
									return;
								}
								dispStillImageOverlayColor.toggle(false);
								dispStillImageOverlayGradationSelect.toggle(true);
								dispStillImageExtraSub2.toggle(true);
							};
							toggle(value.get());

							value.bind(toggle);
						});
						return;
					}
					dispStillImageOverlayColor.toggle(false);
					dispStillImageOverlayGradationSelect.toggle(false);
					dispStillImageExtraSub2.toggle(false);
					dispStillImageOverlayColorType.toggle(false);
					dispStillImageOverlayTransparent.toggle(false);
				};
				toggle(value.get());
				value.bind(toggle);
			});
			dispStillImageDisplay.toggle(true);
			dispStillImageButtonDisplay.toggle(true);
			dispStillImageCopyDisplay.toggle(true);
		}

		function selectedMovie() {
			dispMovieExtraSetting1.toggle(true);
			dispMovieExtraSetting2.toggle(true);
			dispMovieExtraSetting3.toggle(true);
			dispMovieExtraSetting4.toggle(true);
			dispMovieExtraSub1.toggle(true);
			dispMovieUrl.toggle(true);
			dispMovieHeightSpSelect.toggle(true);
			dispMovieAutoplay.toggle(true);
			dispMovieLoop.toggle(true);
			dispMovieDesign.toggle(true);
			customize('jinr__movie_copy_display', function (value) {
				var toggle = function (to) {
					if (to === 'on') {
						dispMovieMainCopy.toggle(true);
						dispMovieMainCopyColor.toggle(true);
						dispMovieMainCopyTextDecoSelect.toggle(true);
						dispMovieCopySize.toggle(true);
						dispMovieSubCopy.toggle(true);
						return;
					}
					dispMovieMainCopy.toggle(false);
					dispMovieMainCopyColor.toggle(false);
					dispMovieMainCopyTextDecoSelect.toggle(false);
					dispMovieCopySize.toggle(false);
					dispMovieSubCopy.toggle(false);
				};
				toggle(value.get());
				value.bind(toggle);
			});
			customize('jinr__movie_button_display', function (value) {
				var toggle = function (to) {
					if (to === 'on') {
						dispMovieButtonDesignSelect.toggle(true);
						dispMovieButtonText.toggle(true);
						dispMovieButtonLink.toggle(true);
						dispMovieExtraSub1.toggle(true);
						return;
					}
					dispMovieButtonDesignSelect.toggle(false);
					dispMovieButtonText.toggle(false);
					dispMovieButtonLink.toggle(false);
					dispMovieExtraSub1.toggle(false);
				};
				toggle(value.get());
				value.bind(toggle);
			});
			customize('jinr__movie_copy_display', function (value) {
				var toggle = function (to) {
					if (to === 'on') {
						dispMovieExtraSetting4.toggle(true);
						dispMovieContentsPositionVerticalPc.toggle(true);
						dispMovieContentsPositionHorizonPc.toggle(true);
						dispMovieContentsPositionVerticalSp.toggle(true);
						dispMovieContentsPositionHorizonSp.toggle(true);
						dispMovieContentsAlignPc.toggle(true);
						return;
					} else {
						customize('jinr__movie_button_display', function (value) {
							var toggle = function (to) {
								if (to === 'on') {
									dispMovieExtraSetting4.toggle(true);
									dispMovieContentsPositionVerticalPc.toggle(true);
									dispMovieContentsPositionHorizonPc.toggle(true);
									dispMovieContentsPositionVerticalSp.toggle(true);
									dispMovieContentsPositionHorizonSp.toggle(true);
									dispMovieContentsAlignPc.toggle(true);
								} else {
									dispMovieExtraSetting4.toggle(false);
									dispMovieContentsPositionVerticalPc.toggle(false);
									dispMovieContentsPositionHorizonPc.toggle(false);
									dispMovieContentsPositionVerticalSp.toggle(false);
									dispMovieContentsPositionHorizonSp.toggle(false);
									dispMovieContentsAlignPc.toggle(false);
								}
							};
							toggle(value.get());
							value.bind(toggle);
						});
					}
				};
				toggle(value.get());
				value.bind(toggle);
			});
			customize('jinr__movie_height_sp_select', function (value) {
				var toggle = function (to) {
					if (to === 'custom') {
						dispMovieHeightSp.toggle(true);
						return;
					}
					dispMovieHeightSp.toggle(false);
				};
				toggle(value.get());

				value.bind(toggle);
			});
			dispMovieButtonDisplay.toggle(true);
			dispMovieCopyDisplay.toggle(true);
		}

		// メインビジュアルの表示非表示(ヘッダー画像のタイプ設定)
		customize('jinr__main_visual_type', function (value) {
			var toggle = function (to) {
				resetSlider();
				resetImageSlider();
				resetStillImage();
				resetMovie();
				switch (to) {
					case 'type01-post-slider':
						selectedSlider();
						break;
					case 'type02-image-slider':
						selectedImageSlider();
						break;
					case 'type03-stillimage':
						selectedStillImage();
						break;
					case 'type04-movie':
						selectedMovie();
						break;
					default:
						break;
				}
			};
			toggle(value.get());

			value.bind(toggle);
		});

		// 見出しデザイン
		var dispHeadingSetting1 = customize.control('jinr__headline_extra_settings1');
		var dispH2Style = customize.control('jinr__h2_style');

		var dispHeadingSetting2 = customize.control('jinr__headline_extra_settings2');
		var dispH3Style = customize.control('jinr__h3_style');

		var dispHeadingSetting3 = customize.control('jinr__headline_extra_settings3');
		var dispH4Style = customize.control('jinr__h4_style');

		var dispHeadingSetting4 = customize.control('jinr__headline_extra_settings4');
		var dispOriginalStyle = customize.control('jinr__h_original');

		//見出し
		function selectedHeadlineType() {
			dispHeadingSetting1.toggle(true);
			dispH2Style.toggle(true);
			dispHeadingSetting2.toggle(true);
			dispH3Style.toggle(true);
			dispHeadingSetting3.toggle(true);
			dispH4Style.toggle(true);
			dispHeadingSetting4.toggle(true);
			dispOriginalStyle.toggle(true);
		}
		selectedHeadlineType();

		//SNS設定
		function selectedSnsSetting() {
			customize('jinr__sns_follow_display_hamburger', function (value) {
				var toggle = function (to) {
					if (to === true) {
						dispSnsFollowHamLabel.toggle(true);
						return;
					}
					dispSnsFollowHamLabel.toggle(false);
				};
				toggle(value.get());
				value.bind(toggle);
			});
			customize('jinr__sns_sharebutton_display_twitter', function (value) {
				var toggle = function (to) {
					if (to === true) {
						dispSnsButtonTwitterText.toggle(true);
						dispSnsButtonTwitterDesc.toggle(true);
						return;
					}
					dispSnsButtonTwitterText.toggle(false);
					dispSnsButtonTwitterDesc.toggle(false);
				};
				toggle(value.get());
				value.bind(toggle);
			});
			customize('jinr__sns_sharebutton_display_facebook', function (value) {
				var toggle = function (to) {
					if (to === true) {
						dispSnsButtonFacebookDesc.toggle(true);
						dispSnsButtonFacebookText.toggle(true);
						return;
					}
					dispSnsButtonFacebookDesc.toggle(false);
					dispSnsButtonFacebookText.toggle(false);
				};
				toggle(value.get());
				value.bind(toggle);
			});
			return;
		}
		selectedSnsSetting();

		//インフォメーションバー
		function selectedInformation() {
			customize('jinr__info_used', function (value) {
				var toggle = function (to) {
					if (to === 'off') {
						dispInfoUrl.toggle(false);
						dispInfoType.toggle(false);
						dispInfoText1Size.toggle(false);
						dispInfoText2Size.toggle(false);
						dispInfoText1.toggle(false);
						dispInfoText2.toggle(false);
						dispInfoTextColor.toggle(false);
						dispInfoBgcolorType.toggle(false);
						dispInfoDisplayPosition.toggle(false);
						dispInfoDisplayFrontPage.toggle(false);
						dispInfoDisplayPage.toggle(false);
						dispInfoDisplayNone.toggle(false);
						dispInfoDisplaySp.toggle(false);
						dispInfoButtonText.toggle(false);
						dispInfoButtonDesignSelect.toggle(false);
						dispInfoBgcolor.toggle(false);
						dispInfoBgcolorGradationSelect.toggle(false);
						dispInfoExtra1.toggle(false);
						dispInfoExtraSub1.toggle(false);
						dispInfoExtraSub2.toggle(false);
						return;
					} else {
						dispInfoType.toggle(true);
						dispInfoText1.toggle(true);
						dispInfoUrl.toggle(true);
						dispInfoTextColor.toggle(true);
						dispInfoDisplayPosition.toggle(true);
						dispInfoDisplayFrontPage.toggle(true);
						dispInfoDisplayPage.toggle(true);
						dispInfoDisplayNone.toggle(true);
						dispInfoDisplaySp.toggle(true);
						dispInfoBgcolorType.toggle(true);
						dispInfoExtra1.toggle(true);
						customize('jinr__info_bgcolor_type', function (value) {
							var toggle = function (to) {
								if (to === 'simplecolor') {
									dispInfoBgcolorGradationSelect.toggle(false);
									dispInfoExtraSub1.toggle(false);
									dispInfoBgcolor.toggle(true);
									return;
								}
								dispInfoBgcolor.toggle(false);
								dispInfoBgcolorGradationSelect.toggle(true);
								dispInfoExtraSub1.toggle(true);
							};
							toggle(value.get());
							value.bind(toggle);
						});
						customize('jinr__info_type', function (value) {
							var toggle = function (to) {
								if (to === 'd--information-type-textplusbutton') {
									dispInfoButtonText.toggle(true);
									dispInfoButtonDesignSelect.toggle(true);
									dispInfoExtraSub2.toggle(true);
									return;
								}
								dispInfoButtonText.toggle(false);
								dispInfoButtonDesignSelect.toggle(false);
								dispInfoExtraSub2.toggle(false);
							};
							toggle(value.get());
							value.bind(toggle);
						});
						customize('jinr__info_type', function (typeValue) {
							customize('jinr__info_text2', function (textValue) {
								var checkAndUpdate = function () {
									var type = typeValue.get();
									var text = textValue.get();

									if (type === 'd--information-type-textonlywithlink') {
										dispInfoText2.toggle(true);
										if (text === '') {
											dispInfoText2Size.toggle(false);
										} else {
											dispInfoText2Size.toggle(true);
										}
									} else {
										dispInfoText2.toggle(false);
										dispInfoText2Size.toggle(false);
									}
								};

								// Initial call
								checkAndUpdate();

								// Bind to changes
								typeValue.bind(checkAndUpdate);
								textValue.bind(checkAndUpdate);
							});
						});

						customize('jinr__info_text1', function (value) {
							var toggle = function (to) {
								if (to === '') {
									dispInfoText1Size.toggle(false);
									return;
								}
								dispInfoText1Size.toggle(true);
							};
							toggle(value.get());
							value.bind(toggle);
						});
					}
				};
				toggle(value.get());
				value.bind(toggle);
			});
			return;
		}
		selectedInformation();

		// サムネイル
		function selectedThumbanils() {
			dispThumbnailsBgColor.toggle(true);
			dispThumbnailsSimpleColor.toggle(true);
			dispThumbnailsBgGradationSelect.toggle(true);
			dispThumbnailsImageURL.toggle(false);
			customize('jinr__thumbnails_design_pattern', function (value) {
				var toggle = function (to) {
					if (to === 'bg_pattern') {
						dispThumbnailsBgColor.toggle(true);
						dispThumbnailsImageURL.toggle(false);
						customize('jinr__thumbnails_bg_color', function (value) {
							var toggle = function (to) {
								if (to === 'simple') {
									dispThumbnailsSimpleColor.toggle(true);
									dispThumbnailsBgGradationSelect.toggle(false);
									return;
								} else if (to === 'gradation') {
									dispThumbnailsSimpleColor.toggle(false);
									dispThumbnailsBgGradationSelect.toggle(true);
									return;
								}
							};
							toggle(value.get());
							value.bind(toggle);
						});
						return;
					} else if (to === 'image_pattern') {
						dispThumbnailsImageURL.toggle(true);
						dispThumbnailsBgColor.toggle(false);
						dispThumbnailsSimpleColor.toggle(false);
						dispThumbnailsBgGradationSelect.toggle(false);
						return;
					}
				};
				toggle(value.get());
				value.bind(toggle);
			});
		}
		selectedThumbanils();

		// ボタンデザイン設定
		for (let i = 1; i <= 10; i++) {
			customize('jinr__button0' + i + '_color_type', function (value) {
				var dispButtonDesign = customize.control('jinr__button0' + i + '_design');
				var dispButtonColortype = customize.control('jinr__button0' + i + '_color_type');
				var dispButtonColor = customize.control('jinr__button0' + i + '_color');
				var dispButtonGradationSelect = customize.control('jinr__button0' + i + '_gradation_select');
				var dispButtonExtraSub1 = customize.control('jinr__button0' + i + '_extra_sub1');

				var toggle = function (to) {
					if (to === 'simplecolor') {
						dispButtonGradationSelect.toggle(false);
						dispButtonExtraSub1.toggle(false);
						dispButtonColor.toggle(true);
						return;
					}
					dispButtonColor.toggle(false);
					dispButtonGradationSelect.toggle(true);
					dispButtonExtraSub1.toggle(true);
				};
				toggle(value.get());

				value.bind(toggle);
			});
			customize('jinr__button0' + i + '_design', function (value) {
				var dispButtonColortype = customize.control('jinr__button0' + i + '_color_type');
				var dispButtonColor = customize.control('jinr__button0' + i + '_color');
				var dispButtonGradationSelect = customize.control('jinr__button0' + i + '_gradation_select');
				var dispButtonRound = customize.control('jinr__button0' + i + '_round');
				var dispButtonSolidHover = customize.control('jinr__button0' + i + '_solid_hover');
				var dispButtonOutlineHover = customize.control('jinr__button0' + i + '_outline_hover');
				var dispButtonArrowHover = customize.control('jinr__button0' + i + '_arrow_hover');
				var dispButtonTextColor = customize.control('jinr__button0' + i + '_text_color');
				var dispButtonShadowSize = customize.control('jinr__button0' + i + '_shadow_size');
				var dispButtonExtraSub1 = customize.control('jinr__button0' + i + '_extra_sub1');
				var dispButtonSolidAnimation = customize.control('jinr__button0' + i + '_solid_animation');
				var dispButtonOutlineAnimation = customize.control('jinr__button0' + i + '_outline_animation');
				var dispButtonArrowAnimation = customize.control('jinr__button0' + i + '_arrow_animation');
				var dispButtonArrowIcon = customize.control('jinr__button0' + i + '_arrow_select');

				var toggle = function (to) {
					if (to === 'outline') {
						dispButtonColortype.toggle(false);
						dispButtonGradationSelect.toggle(false);
						dispButtonExtraSub1.toggle(false);
						dispButtonShadowSize.toggle(true);
						dispButtonColor.toggle(true);
						return;
					} else if (to === 'arrow') {
						dispButtonColortype.toggle(false);
						dispButtonGradationSelect.toggle(false);
						dispButtonExtraSub1.toggle(false);
						dispButtonShadowSize.toggle(false);
						dispButtonColor.toggle(true);
						return;
					} else {
						dispButtonColortype.toggle(true);
						dispButtonShadowSize.toggle(true);
						if (customize('jinr__button0' + i + '_color_type').get() == 'simplecolor') {
							dispButtonColor.toggle(true);
							dispButtonGradationSelect.toggle(false);
							dispButtonExtraSub1.toggle(false);
						} else {
							dispButtonColor.toggle(false);
							dispButtonGradationSelect.toggle(true);
							dispButtonExtraSub1.toggle(true);
						}
					}
				};

				var toggle2 = function (to) {
					if (to === 'arrow') {
						dispButtonRound.toggle(false);
						dispButtonArrowIcon.toggle(false);
						return;
					}
					dispButtonArrowIcon.toggle(true);
					dispButtonRound.toggle(true);
				};

				var toggle3 = function (to) {
					if (to === 'solid') {
						dispButtonSolidHover.toggle(true);
						dispButtonSolidAnimation.toggle(true);
						dispButtonOutlineHover.toggle(false);
						dispButtonOutlineAnimation.toggle(false);
						dispButtonArrowHover.toggle(false);
						dispButtonArrowAnimation.toggle(false);
						dispButtonTextColor.toggle(true);
						return;
					} else if (to === 'outline') {
						dispButtonSolidHover.toggle(false);
						dispButtonSolidAnimation.toggle(false);
						dispButtonOutlineHover.toggle(true);
						dispButtonOutlineAnimation.toggle(true);
						dispButtonArrowHover.toggle(false);
						dispButtonArrowAnimation.toggle(false);
						dispButtonTextColor.toggle(false);
						return;
					} else if (to === 'arrow') {
						dispButtonSolidHover.toggle(false);
						dispButtonSolidAnimation.toggle(false);
						dispButtonOutlineHover.toggle(false);
						dispButtonOutlineAnimation.toggle(false);
						dispButtonArrowHover.toggle(true);
						dispButtonArrowAnimation.toggle(true);
						dispButtonTextColor.toggle(false);
						return;
					}
				};

				toggle(value.get());
				toggle2(value.get());
				toggle3(value.get());
				value.bind(toggle);
				value.bind(toggle2);
				value.bind(toggle3);
			});
		}
		//吹き出し設定
		for (let i = 1; i <= 10; i++) {
			customize('jinr__fukidashi' + i + '_imgborder_color_type', function (value) {
				var dispFukidashiColor = customize.control('jinr__fukidashi' + i + '_imgborder_color');
				var dispFukidashiGradationSelect = customize.control('jinr__fukidashi' + i + '_imgborder_gradation');
				var dispFukidashiExtraSub1 = customize.control('jinr__fukidashi' + i + '_extra_sub1');

				var toggle = function (to) {
					if (to === 'simplecolor') {
						dispFukidashiGradationSelect.toggle(false);
						dispFukidashiExtraSub1.toggle(false);
						dispFukidashiColor.toggle(true);
						return;
					} else if (to === 'transparent') {
						dispFukidashiGradationSelect.toggle(false);
						dispFukidashiExtraSub1.toggle(false);
						dispFukidashiColor.toggle(false);
					} else {
						dispFukidashiColor.toggle(false);
						dispFukidashiGradationSelect.toggle(true);
						dispFukidashiExtraSub1.toggle(true);
					}
				};

				toggle(value.get());
				value.bind(toggle);
			});

			customize('jinr__fukidashi' + i + '_border_color_type', function (value) {
				var dispFukidashiColor = customize.control('jinr__fukidashi' + i + '_border_color');

				var toggle = function (to) {
					if (to === 'simplecolor') {
						dispFukidashiColor.toggle(true);
						return;
					}
					dispFukidashiColor.toggle(false);
				};

				toggle(value.get());
				value.bind(toggle);
			});
		}

		function jinr_fukidashi_preview() {
			// 初期値を設定する
			let charactorImgae = {};
			let charactorName = {};
			let charactorFrame = {};

			let charactorFrameColor = {};
			let charactorGradation = {};

			let fukidashiType = {};
			let fukidashiColor = {};
			let fukidashiFrame = {};
			let fukidashiTypeDesign = {};

			let fukidashiFrameColor = {};
			let boxBorderWidth = {};

			let boxBorderColor = {};

			let detailLayout = {};
			let detailWidth = {};

			let previewElement = {};

			// 画像パス取得
			const $url_location = new URL(window.location.href);
			const $url_origin = $url_location.href;
			const $url_search = $url_location.search;
			const $url_replace = $url_origin.replace($url_search, '');
			const $url_dir = $url_replace.replace('wp-admin/customize.php', '');
			for (let f = 1; f < 11; f++) {
				charactorImgae[f] = document.querySelector('#customize-control-jinr__fukidashi' + [f] + '_image img');
				charactorName[f] = document.querySelector('#customize-control-jinr__fukidashi' + [f] + '_name input');
				charactorFrame[f] = document.querySelectorAll('#customize-control-jinr__fukidashi' + [f] + '_imgborder_color_type input');
				charactorGradation[f] = document.querySelector('#customize-control-jinr__fukidashi' + [f] + '_imgborder_gradation select');

				fukidashiType[f] = document.querySelectorAll('#customize-control-jinr__fukidashi' + [f] + '_type input');
				fukidashiColor[f] = document.querySelector('#customize-control-jinr__fukidashi' + [f] + '_bg_color button');
				fukidashiFrame[f] = document.querySelectorAll('#customize-control-jinr__fukidashi' + [f] + '_border_color_type input');

				detailLayout[f] = document.querySelectorAll('#customize-control-jinr__fukidashi' + [f] + '_layout input');
				detailWidth[f] = document.querySelectorAll('#customize-control-jinr__fukidashi' + [f] + '_border_weight input');

				previewElement[f] = document.getElementById('JinrFukidashi' + [f] + '');
				const frameelement = document.createElement('div');
				frameelement.className = 'a--fukidashi-img-circle';
				previewElement[f].getElementsByClassName('c--fukidashi-img-box')[0].appendChild(frameelement);

				// 吹き出し画像
				if (charactorImgae[f]) {
					const imageSrc = charactorImgae[f].getAttribute('src');
					previewElement[f].getElementsByTagName('img')[0].setAttribute('src', imageSrc);
				}
				// 吹き出し画像プレビュー
				const previewImage = document.querySelector('#customize-control-jinr__fukidashi' + [f] + '_image');
				const fukidashiImage = new MutationObserver((records) => {
					if (document.querySelector('#customize-control-jinr__fukidashi' + [f] + '_image img')) {
						const changeSrc = document.querySelector('#customize-control-jinr__fukidashi' + [f] + '_image img').getAttribute('src');
						previewElement[f].getElementsByTagName('img')[0].setAttribute('src', changeSrc);
					} else {
						previewElement[f].getElementsByTagName('img')[0].setAttribute('src', '' + $url_dir + 'wp-content/themes/jinr/lib/img/image_setting.png');
					}
				});
				fukidashiImage.observe(previewImage, {
					attributes: true,
					childList: true,
					subtree: true,
				});

				// キャラクター名
				const namevalue = charactorName[f].value;
				previewElement[f].getElementsByClassName('a--fukidashi-icon-name')[0].textContent = namevalue;

				document.querySelector('#_customize-input-jinr__fukidashi' + [f] + '_name').addEventListener('input', function () {
					const inputText = document.querySelector('#_customize-input-jinr__fukidashi' + [f] + '_name').value;
					if (document.getElementById('JinrFukidashi' + [f] + '')) {
						document.getElementById('JinrFukidashi' + [f] + '').getElementsByClassName('a--fukidashi-icon-name')[0].textContent = inputText;
					}
				});

				// キャラクター画像の枠線カラー
				let charactorColor = '';
				for (let i = 0; i < charactorFrame[f].length; i++) {
					if (charactorFrame[f].item(i).checked) {
						charactorColor = charactorFrame[f].item(i).value;
						if (charactorColor == 'simplecolor') {
							previewElement[f].getElementsByClassName('a--fukidashi-img')[0].classList.add('d--fukidashi-img-simplecolor');
							charactorFrameColor[f] = document.querySelector('#customize-control-jinr__fukidashi' + [f] + '_imgborder_color button');
							if (previewElement[f].getElementsByClassName('a--fukidashi-img-circle')[0]) {
								previewElement[f].getElementsByClassName('a--fukidashi-img-circle')[0].style.backgroundColor = charactorFrameColor[f].style.backgroundColor;
							}
						} else if (charactorColor == 'gradation') {
							charactorGradation[f] = document.querySelector('#customize-control-jinr__fukidashi' + [f] + '_imgborder_gradation select');
							if (charactorGradation[f].value == 'gradation1') {
								previewElement[f].getElementsByClassName('a--fukidashi-img-circle')[0].classList.add('d--jinr-gradation1');

								const gradationColor1Color01 = document.querySelector('#customize-control-jinr__gradation_color1_1 button').style.backgroundColor;
								const gradationColor1Color02 = document.querySelector('#customize-control-jinr__gradation_color1_2 button').style.backgroundColor;
								const gradationColor1Deg = document.querySelector('#customize-control-jinr__gradation_color1_deg input').value;

								previewElement[f].getElementsByClassName('d--jinr-gradation1')[0].style.background = 'linear-gradient(' + gradationColor1Deg + 'deg, ' + gradationColor1Color01 + ', ' + gradationColor1Color02 + ')';
							} else if (charactorGradation[f].value == 'gradation2') {
								previewElement[f].getElementsByClassName('a--fukidashi-img-circle')[0].classList.add('d--jinr-gradation2');

								const gradationColor2Color01 = document.querySelector('#customize-control-jinr__gradation_color2_1 button').style.backgroundColor;
								const gradationColor2Color02 = document.querySelector('#customize-control-jinr__gradation_color2_2 button').style.backgroundColor;
								const gradationColor2Deg = document.querySelector('#customize-control-jinr__gradation_color2_deg input').value;

								previewElement[f].getElementsByClassName('d--jinr-gradation2')[0].style.background = 'linear-gradient(' + gradationColor2Deg + 'deg, ' + gradationColor2Color01 + ', ' + gradationColor2Color02 + ')';
							} else if (charactorGradation[f].value == 'gradation3') {
								previewElement[f].getElementsByClassName('a--fukidashi-img-circle')[0].classList.add('d--jinr-gradation3');

								const gradationColor3Color01 = document.querySelector('#customize-control-jinr__gradation_color3_1 button').style.backgroundColor;
								const gradationColor3Color02 = document.querySelector('#customize-control-jinr__gradation_color3_2 button').style.backgroundColor;
								const gradationColor3Deg = document.querySelector('#customize-control-jinr__gradation_color3_deg input').value;

								previewElement[f].getElementsByClassName('d--jinr-gradation3')[0].style.background = 'linear-gradient(' + gradationColor3Deg + 'deg, ' + gradationColor3Color01 + ', ' + gradationColor3Color02 + ')';
							}
						} else if (charactorColor == 'transparent') {
							previewElement[f].getElementsByClassName('c--fukidashi-contents')[0].style.borderColor = 'transparent';
						}
					}
				}
				boxBorderWidth = document.getElementById('customize-control-jinr__fukidashi' + [f] + '_imgborder_color_type');
				boxBorderWidth.addEventListener('change', (e) => {
					if (e.target.type !== 'radio') return;

					if (e.target.value === 'simplecolor') {
						previewElement[f].getElementsByClassName('a--fukidashi-img-circle')[0].style.background = '';
						boxBorderColor = document.querySelector('#customize-control-jinr__fukidashi' + [f] + '_imgborder_color button').style.backgroundColor;
						previewElement[f].getElementsByClassName('a--fukidashi-img-circle')[0].style.backgroundColor = boxBorderColor;
					} else if (e.target.value === 'gradation') {
						previewElement[f].getElementsByClassName('a--fukidashi-img-circle')[0].style.backgroundColor = '';
						const selectElements = document.getElementById('_customize-input-jinr__fukidashi' + [f] + '_imgborder_gradation');
						if (selectElements.value == 'gradation1') {
							let gradationColor01 = document.querySelector('#customize-control-jinr__gradation_color1_1 button').style.backgroundColor;
							let gradationColor02 = document.querySelector('#customize-control-jinr__gradation_color1_2 button').style.backgroundColor;
							let gradationDeg = document.querySelector('#customize-control-jinr__gradation_color1_deg input').value;
							previewElement[f].getElementsByClassName('a--fukidashi-img-circle')[0].style.background = 'linear-gradient(' + gradationDeg + 'deg, ' + gradationColor01 + ', ' + gradationColor02 + ')';
						} else if (selectElements.value == 'gradation2') {
							let gradationColor01 = document.querySelector('#customize-control-jinr__gradation_color2_1 button').style.backgroundColor;
							let gradationColor02 = document.querySelector('#customize-control-jinr__gradation_color2_2 button').style.backgroundColor;
							let gradationDeg = document.querySelector('#customize-control-jinr__gradation_color2_deg input').value;
							previewElement[f].getElementsByClassName('a--fukidashi-img-circle')[0].style.background = 'linear-gradient(' + gradationDeg + 'deg, ' + gradationColor01 + ', ' + gradationColor02 + ')';
						} else if (selectElements.value == 'gradation3') {
							let gradationColor01 = document.querySelector('#customize-control-jinr__gradation_color3_1 button').style.backgroundColor;
							let gradationColor02 = document.querySelector('#customize-control-jinr__gradation_color3_2 button').style.backgroundColor;
							let gradationDeg = document.querySelector('#customize-control-jinr__gradation_color3_deg input').value;
							previewElement[f].getElementsByClassName('a--fukidashi-img-circle')[0].style.background = 'linear-gradient(' + gradationDeg + 'deg, ' + gradationColor01 + ', ' + gradationColor02 + ')';
						}
					} else if (e.target.value === 'transparent') {
						previewElement[f].getElementsByClassName('a--fukidashi-img-circle')[0].style.background = '';
					}
				});

				// 単色カラーが選ばれている状態でカラーの変更があった場合のプレビュー
				const simpleBorderColor = document.querySelector('#customize-control-jinr__fukidashi' + [f] + '_imgborder_color button');
				const observer = new MutationObserver((records) => {
					let simpleBorderCss = simpleBorderColor.style.backgroundColor;
					previewElement[f].getElementsByClassName('a--fukidashi-img-circle')[0].style.backgroundColor = simpleBorderCss;
				});

				observer.observe(simpleBorderColor, {
					attributes: true,
					attributeFilter: ['style'],
				});

				// グラデーションが選ばれている状態でグラデーションの選択に変更があった場合のプレビュー
				const gradationElement = document.getElementById('_customize-input-jinr__fukidashi' + [f] + '_imgborder_gradation');
				gradationElement.addEventListener(
					'change',
					function () {
						let gradationValue = gradationElement.value;
						if (gradationValue == 'gradation1') {
							let gradationColor01 = document.querySelector('#customize-control-jinr__gradation_color1_1 button').style.backgroundColor;
							let gradationColor02 = document.querySelector('#customize-control-jinr__gradation_color1_2 button').style.backgroundColor;
							let gradationDeg = document.querySelector('#customize-control-jinr__gradation_color1_deg input').value;
							previewElement[f].getElementsByClassName('a--fukidashi-img-circle')[0].style.background = 'linear-gradient(' + gradationDeg + 'deg, ' + gradationColor01 + ', ' + gradationColor02 + ')';
						} else if (gradationValue == 'gradation2') {
							let gradationColor01 = document.querySelector('#customize-control-jinr__gradation_color2_1 button').style.backgroundColor;
							let gradationColor02 = document.querySelector('#customize-control-jinr__gradation_color2_2 button').style.backgroundColor;
							let gradationDeg = document.querySelector('#customize-control-jinr__gradation_color2_deg input').value;
							previewElement[f].getElementsByClassName('a--fukidashi-img-circle')[0].style.background = 'linear-gradient(' + gradationDeg + 'deg, ' + gradationColor01 + ', ' + gradationColor02 + ')';
						} else if (gradationValue == 'gradation3') {
							let gradationColor01 = document.querySelector('#customize-control-jinr__gradation_color3_1 button').style.backgroundColor;
							let gradationColor02 = document.querySelector('#customize-control-jinr__gradation_color3_2 button').style.backgroundColor;
							let gradationDeg = document.querySelector('#customize-control-jinr__gradation_color3_deg input').value;
							previewElement[f].getElementsByClassName('a--fukidashi-img-circle')[0].style.background = 'linear-gradient(' + gradationDeg + 'deg, ' + gradationColor01 + ', ' + gradationColor02 + ')';
						}
					},
					false
				);

				// 吹き出し部分の設定
				// 吹き出しのタイプ
				let typeDesign = '';
				// 吹き出し背景色
				let bgColor = fukidashiColor[f].style.backgroundColor;
				previewElement[f].getElementsByClassName('c--fukidashi-contents')[0].style.backgroundColor = bgColor;
				for (let i = 0; i < fukidashiType[f].length; i++) {
					if (fukidashiType[f].item(i).checked) {
						bgColor = fukidashiColor[f].style.backgroundColor;
						typeDesign = fukidashiType[f].item(i).value;
						fukidashiFrameColor[f] = document.querySelector('#customize-control-jinr__fukidashi' + [f] + '_border_color button');
						if (typeDesign == 'd--fukidashi-chat') {
							previewElement[f].getElementsByClassName('o--jinr-fukidashi')[0].classList.add(typeDesign);
							previewElement[f].getElementsByClassName('a--fukidashi-parts-after')[0].style.backgroundColor = '';
							previewElement[f].getElementsByClassName('a--fukidashi-parts-after')[0].style.borderColor = '';
							previewElement[f].getElementsByClassName('a--fukidashi-parts-before')[0].style.backgroundColor = '';
							previewElement[f].getElementsByClassName('a--fukidashi-parts-before')[0].style.borderColor = '';
							previewElement[f].getElementsByClassName('a--fukidashi-parts-after')[0].style.color = bgColor;
							previewElement[f].getElementsByClassName('a--fukidashi-parts-before')[0].style.color = fukidashiFrameColor[f].style.backgroundColor;
						} else if (typeDesign == 'd--fukidashi-innervoice') {
							previewElement[f].getElementsByClassName('o--jinr-fukidashi')[0].classList.add(typeDesign);
							previewElement[f].getElementsByClassName('a--fukidashi-parts-after')[0].style.color = '';
							previewElement[f].getElementsByClassName('a--fukidashi-parts-before')[0].style.color = '';
							previewElement[f].getElementsByClassName('a--fukidashi-parts-after')[0].style.backgroundColor = bgColor;
							previewElement[f].getElementsByClassName('a--fukidashi-parts-after')[0].style.borderColor = fukidashiFrameColor[f].style.backgroundColor;
							previewElement[f].getElementsByClassName('a--fukidashi-parts-before')[0].style.backgroundColor = bgColor;
							previewElement[f].getElementsByClassName('a--fukidashi-parts-before')[0].style.borderColor = fukidashiFrameColor[f].style.backgroundColor;
						} else if (typeDesign == 'd--fukidashi-interview') {
							previewElement[f].getElementsByClassName('o--jinr-fukidashi')[0].classList.add(typeDesign);
						}
					}
					// 吹き出し枠線
					let frameColor = '';
					for (let c = 0; c < fukidashiFrame[f].length; c++) {
						if (fukidashiFrame[f].item(c).checked) {
							bgColor = fukidashiColor[f].style.backgroundColor;
							frameColor = fukidashiFrame[f].item(c).value;
							if (frameColor == 'simplecolor') {
								previewElement[f].getElementsByClassName('o--jinr-fukidashi')[0].classList.add('d--border-simplecolor');
								fukidashiFrameColor[f] = document.querySelector('#customize-control-jinr__fukidashi' + [f] + '_border_color button');
								previewElement[f].getElementsByClassName('c--fukidashi-contents')[0].style.borderColor = fukidashiFrameColor[f].style.backgroundColor;

								// 吹き出しタイプによって付与するstyleの場所を変更する
								if (typeDesign == 'd--fukidashi-chat') {
									previewElement[f].getElementsByClassName('a--fukidashi-parts-after')[0].style.color = bgColor;
									previewElement[f].getElementsByClassName('a--fukidashi-parts-before')[0].style.color = fukidashiFrameColor[f].style.backgroundColor;
								} else if (typeDesign == 'd--fukidashi-innervoice') {
									previewElement[f].getElementsByClassName('a--fukidashi-parts-after')[0].style.backgroundColor = bgColor;
									previewElement[f].getElementsByClassName('a--fukidashi-parts-after')[0].style.borderColor = fukidashiFrameColor[f].style.backgroundColor;
									previewElement[f].getElementsByClassName('a--fukidashi-parts-before')[0].style.backgroundColor = bgColor;
									previewElement[f].getElementsByClassName('a--fukidashi-parts-before')[0].style.borderColor = fukidashiFrameColor[f].style.backgroundColor;
								} else if (typeDesign == 'd--fukidashi-interview') {
								}
							} else {
								previewElement[f].getElementsByClassName('o--jinr-fukidashi')[0].classList.add('d--border-transparent');
								fukidashiFrameColor[f] = document.querySelector('#customize-control-jinr__fukidashi' + [f] + '_border_color button');
								previewElement[f].getElementsByClassName('c--fukidashi-contents')[0].style.borderColor = fukidashiFrameColor[f].style.backgroundColor;
								if (typeDesign == 'd--fukidashi-chat') {
									previewElement[f].getElementsByClassName('a--fukidashi-parts-after')[0].style.color = bgColor;
									previewElement[f].getElementsByClassName('a--fukidashi-parts-before')[0].style.color = fukidashiFrameColor[f].style.backgroundColor;
								} else if (typeDesign == 'd--fukidashi-innervoice') {
									previewElement[f].getElementsByClassName('a--fukidashi-parts-after')[0].style.backgroundColor = bgColor;
									previewElement[f].getElementsByClassName('a--fukidashi-parts-after')[0].style.borderColor = 'transparent';
									previewElement[f].getElementsByClassName('a--fukidashi-parts-before')[0].style.backgroundColor = bgColor;
									previewElement[f].getElementsByClassName('a--fukidashi-parts-before')[0].style.borderColor = 'transparent';
								} else if (typeDesign == 'd--fukidashi-interview') {
									previewElement[f].getElementsByClassName('c--fukidashi-contents')[0].style.borderColor = 'transparent';
								}
							}
						}
					}
				}
				fukidashiTypeDesign = document.getElementById('customize-control-jinr__fukidashi' + [f] + '_type');
				fukidashiTypeDesign.addEventListener('change', (e) => {
					if (e.target.type !== 'radio') return;
					bgColor = fukidashiColor[f].style.backgroundColor;
					if (e.target.value === 'd--fukidashi-chat') {
						previewElement[f].getElementsByClassName('o--jinr-fukidashi')[0].classList.add(e.target.value);
						previewElement[f].getElementsByClassName('o--jinr-fukidashi')[0].classList.remove('d--fukidashi-innervoice');
						previewElement[f].getElementsByClassName('o--jinr-fukidashi')[0].classList.remove('d--fukidashi-interview');
						previewElement[f].getElementsByClassName('a--fukidashi-parts-after')[0].style.backgroundColor = '';
						previewElement[f].getElementsByClassName('a--fukidashi-parts-after')[0].style.borderColor = '';
						previewElement[f].getElementsByClassName('a--fukidashi-parts-before')[0].style.backgroundColor = '';
						previewElement[f].getElementsByClassName('a--fukidashi-parts-before')[0].style.borderColor = '';
						previewElement[f].getElementsByClassName('a--fukidashi-parts-after')[0].style.color = bgColor;
						previewElement[f].getElementsByClassName('a--fukidashi-parts-before')[0].style.color = fukidashiFrameColor[f].style.backgroundColor;
					} else if (e.target.value === 'd--fukidashi-innervoice') {
						previewElement[f].getElementsByClassName('o--jinr-fukidashi')[0].classList.add(e.target.value);
						previewElement[f].getElementsByClassName('o--jinr-fukidashi')[0].classList.remove('d--fukidashi-chat');
						previewElement[f].getElementsByClassName('o--jinr-fukidashi')[0].classList.remove('d--fukidashi-interview');
						previewElement[f].getElementsByClassName('a--fukidashi-parts-after')[0].style.color = '';
						previewElement[f].getElementsByClassName('a--fukidashi-parts-before')[0].style.color = '';
						previewElement[f].getElementsByClassName('a--fukidashi-parts-after')[0].style.backgroundColor = bgColor;
						previewElement[f].getElementsByClassName('a--fukidashi-parts-after')[0].style.borderColor = fukidashiFrameColor[f].style.backgroundColor;
						previewElement[f].getElementsByClassName('a--fukidashi-parts-before')[0].style.backgroundColor = bgColor;
						previewElement[f].getElementsByClassName('a--fukidashi-parts-before')[0].style.borderColor = fukidashiFrameColor[f].style.backgroundColor;
					} else if (e.target.value === 'd--fukidashi-interview') {
						previewElement[f].getElementsByClassName('o--jinr-fukidashi')[0].classList.add(e.target.value);
						previewElement[f].getElementsByClassName('o--jinr-fukidashi')[0].classList.remove('d--fukidashi-innervoice');
						previewElement[f].getElementsByClassName('o--jinr-fukidashi')[0].classList.remove('d--fukidashi-chat');
					}
				});
				const bgObserver = new MutationObserver((records) => {
					let bgCss = fukidashiColor[f].style.backgroundColor;
					previewElement[f].getElementsByClassName('c--fukidashi-contents')[0].style.backgroundColor = bgCss;
					let typeDesign = '';
					for (let i = 0; i < fukidashiType[f].length; i++) {
						if (fukidashiType[f].item(i).checked) {
							typeDesign = fukidashiType[f].item(i).value;
						}
					}
					if (typeDesign == 'd--fukidashi-chat') {
						previewElement[f].getElementsByClassName('a--fukidashi-parts-after')[0].style.color = bgCss;
					} else if (typeDesign == 'd--fukidashi-innervoice') {
						previewElement[f].getElementsByClassName('a--fukidashi-parts-after')[0].style.backgroundColor = bgCss;
						previewElement[f].getElementsByClassName('a--fukidashi-parts-before')[0].style.backgroundColor = bgCss;
					}
				});
				bgObserver.observe(fukidashiColor[f], {
					attributes: true,
					attributeFilter: ['style'],
				});

				const fukidashiBorder = document.getElementById('customize-control-jinr__fukidashi' + [f] + '_border_color_type');
				fukidashiBorder.addEventListener('change', (e) => {
					if (e.target.type !== 'radio') return;
					if (e.target.value === 'simplecolor') {
						previewElement[f].getElementsByClassName('o--jinr-fukidashi')[0].classList.add('d--border-simplecolor');
						previewElement[f].getElementsByClassName('o--jinr-fukidashi')[0].classList.remove('d--border-transparent');
						previewElement[f].getElementsByClassName('c--fukidashi-contents')[0].style.borderColor = '';
						let fukidashiBorderColor = document.querySelector('#customize-control-jinr__fukidashi' + [f] + '_border_color button').style.backgroundColor;
						previewElement[f].getElementsByClassName('c--fukidashi-contents')[0].style.borderColor = fukidashiBorderColor;
						previewElement[f].getElementsByClassName('a--fukidashi-parts-before')[0].style.color = fukidashiBorderColor;
					} else if (e.target.value === 'transparent') {
						previewElement[f].getElementsByClassName('o--jinr-fukidashi')[0].classList.remove('d--border-simplecolor');
						previewElement[f].getElementsByClassName('o--jinr-fukidashi')[0].classList.add('d--border-transparent');
						previewElement[f].getElementsByClassName('c--fukidashi-contents')[0].style.borderColor = '';
						previewElement[f].getElementsByClassName('a--fukidashi-parts-before')[0].style.color = '';
					}
				});
				const borderSimpleColor = document.querySelector('#customize-control-jinr__fukidashi' + [f] + '_border_color button');
				const borderObserver = new MutationObserver((records) => {
					let borderCss = borderSimpleColor.style.backgroundColor;
					previewElement[f].getElementsByClassName('c--fukidashi-contents')[0].style.borderColor = borderCss;
					previewElement[f].getElementsByClassName('a--fukidashi-parts-before')[0].style.color = borderCss;
				});
				borderObserver.observe(borderSimpleColor, {
					attributes: true,
					attributeFilter: ['style'],
				});

				// 詳細設定
				let layout = '';
				for (let l = 0; l < detailLayout[f].length; l++) {
					if (detailLayout[f].item(l).checked) {
						layout = detailLayout[f].item(l).value;
						if (layout == 'd--fukidashi-left') {
							previewElement[f].getElementsByClassName('o--jinr-fukidashi')[0].classList.add('d--fukidashi-left');
						} else if (layout == 'd--fukidashi-right') {
							previewElement[f].getElementsByClassName('o--jinr-fukidashi')[0].classList.add('d--fukidashi-right');
						}
					}
				}
				const layoutfukidashi = document.querySelector('#customize-control-jinr__fukidashi' + [f] + '_layout');
				layoutfukidashi.addEventListener('change', (e) => {
					if (e.target.type !== 'radio') return;
					if (e.target.value === 'd--fukidashi-left') {
						previewElement[f].getElementsByClassName('o--jinr-fukidashi')[0].classList.add(e.target.value);
						previewElement[f].getElementsByClassName('o--jinr-fukidashi')[0].classList.remove('d--fukidashi-right');
					} else if (e.target.value === 'd--fukidashi-right') {
						previewElement[f].getElementsByClassName('o--jinr-fukidashi')[0].classList.add(e.target.value);
						previewElement[f].getElementsByClassName('o--jinr-fukidashi')[0].classList.remove('d--fukidashi-left');
					}
				});

				// 全体の枠の太さ
				let width = '';
				for (let w = 0; w < detailWidth[f].length; w++) {
					if (detailWidth[f].item(w).checked) {
						width = detailWidth[f].item(w).value;
						if (width == 'd--fukidashi-border-thin') {
							previewElement[f].getElementsByClassName('o--jinr-fukidashi')[0].classList.add('d--fukidashi-border-thin');
						} else if (width == 'd--fukidashi-border-normal') {
							previewElement[f].getElementsByClassName('o--jinr-fukidashi')[0].classList.add('d--fukidashi-border-normal');
						} else if (width == 'd--fukidashi-border-bold') {
							previewElement[f].getElementsByClassName('o--jinr-fukidashi')[0].classList.add('d--fukidashi-border-bold');
						}
					}
				}
				const widthfukidashi = document.querySelector('#customize-control-jinr__fukidashi' + [f] + '_border_weight');
				widthfukidashi.addEventListener('change', (e) => {
					if (e.target.type !== 'radio') return;
					if (e.target.value === 'd--fukidashi-border-thin') {
						previewElement[f].getElementsByClassName('o--jinr-fukidashi')[0].classList.add(e.target.value);
						previewElement[f].getElementsByClassName('o--jinr-fukidashi')[0].classList.remove('d--fukidashi-border-normal');
						previewElement[f].getElementsByClassName('o--jinr-fukidashi')[0].classList.remove('d--fukidashi-border-bold');
					} else if (e.target.value === 'd--fukidashi-border-normal') {
						previewElement[f].getElementsByClassName('o--jinr-fukidashi')[0].classList.add(e.target.value);
						previewElement[f].getElementsByClassName('o--jinr-fukidashi')[0].classList.remove('d--fukidashi-border-thin');
						previewElement[f].getElementsByClassName('o--jinr-fukidashi')[0].classList.remove('d--fukidashi-border-bold');
					} else if (e.target.value === 'd--fukidashi-border-bold') {
						previewElement[f].getElementsByClassName('o--jinr-fukidashi')[0].classList.add(e.target.value);
						previewElement[f].getElementsByClassName('o--jinr-fukidashi')[0].classList.remove('d--fukidashi-border-thin');
						previewElement[f].getElementsByClassName('o--jinr-fukidashi')[0].classList.remove('d--fukidashi-border-normal');
					}
				});
			}
		}
		jinr_fukidashi_preview();

		// ボタン・吹き出し名のリアルタイムプレビュー
		let buttonRename = {};
		let buttonPanel = {};
		let buttonSection = {};
		let buttonSectionSpan = {};
		for (let i = 1; i < 7; i++) {
			buttonRename[i] = document.querySelector('#_customize-input-jinr__button0' + i + '_name');
			buttonPanel[i] = document.querySelector('#accordion-section-jinr__button0' + i + '_tab h3');
			buttonSection[i] = document.querySelector('#sub-accordion-section-jinr__button0' + i + '_tab h3');
			buttonSectionSpan[i] = document.querySelector('#sub-accordion-section-jinr__button0' + i + '_tab h3 span');

			buttonRename[i].addEventListener('keyup', function () {
				buttonPanel[i].textContent = buttonRename[i].value;
				buttonSection[i].textContent = buttonRename[i].value;
				buttonSection[i].prepend(buttonSectionSpan[i]);
			});
		}

		let fukidashiRename = {};
		let fukidashiPanel = {};
		let fukidashiSection = {};
		let fukidashiSectionSpan = {};
		for (let i = 1; i < 11; i++) {
			fukidashiRename[i] = document.querySelector('#_customize-input-jinr__fukidashi' + i + '_register_name');
			fukidashiPanel[i] = document.querySelector('#accordion-section-jinr__fukidashi' + i + '_tab h3');
			fukidashiSection[i] = document.querySelector('#sub-accordion-section-jinr__fukidashi' + i + '_tab h3');
			fukidashiSectionSpan[i] = document.querySelector('#sub-accordion-section-jinr__fukidashi' + i + '_tab h3 span');
			fukidashiRename[i].addEventListener('keyup', function () {
				fukidashiPanel[i].textContent = fukidashiRename[i].value;
				fukidashiSection[i].textContent = fukidashiRename[i].value;
				fukidashiSection[i].prepend(fukidashiSectionSpan[i]);
			});
		}
		//スクロールで追従させるPreview
		const scrollContents = document.getElementsByClassName('wp-full-overlay-sidebar-content')[0];
		scrollContents.addEventListener('scroll', function () {
			const targetElement = document.getElementsByClassName('open')[0];
			if (!targetElement) {
				return;
			}
			const previewElement = targetElement.getElementsByClassName('jinr-preview-container')[0];
			if (!previewElement) {
				return;
			}
			const targetOffset = previewElement.offsetTop + 210; //245
			const scrollOffset = scrollContents.scrollTop;

			if (targetOffset < scrollOffset) {
				previewElement.classList.add('u--preview-follow');
			} else {
				previewElement.classList.remove('u--preview-follow');
			}
		});

		/**
		 * アイコンメニューをモーダル化
		 */
		const url_location = new URL(window.location.href);
		const url_href = url_location.href;
		const url_search = url_location.search;
		const url_replace = url_href.replace(url_search, '');
		const url_replace02 = url_replace.replace('wp-admin/customize.php', '');
		const iconURL = url_replace02 + 'wp-content/themes/jinr/lib/font/jin-icons/icon-loder.json';
		fetch(iconURL)
			.then(function (response) {
				return response.json();
			})
			.then(function (json) {
				let iconListDOM = '<div class="o--customizer-iconlist">';
				Object.keys(json.iconParts).forEach(function (key, index) {
					iconListDOM += '<h2 class="a--customizer-icontitle">' + json.iconNames[key] + '</h2><ul class="c--customizer-iconlist">';

					for (let i = 0; i < json.iconParts[key].length; i++) {
						iconListDOM += '<li class="c--icon-item" data-icon="' + json.iconParts[key][i] + '"><i class="jin-icons jin-ifont-' + json.iconParts[key][i] + '"></i></li>';
					}
					iconListDOM += '</ul>';
				});
				iconListDOM += '</div>';
				const iconListElement = document.createElement('div');
				iconListElement.className = 'o--customizer-iconwrapper u--display-none';
				iconListElement.innerHTML = iconListDOM;
				$('.wp-customizer').prepend(iconListElement);
			});

		$(document).on('click', function (e) {
			// アイコンリストの表示非表示
			const iconTargetId = e.target.id;
			if (
				(iconTargetId.indexOf('_customize-input-jinr__sp_menu') !== -1 && iconTargetId.lastIndexOf('choice') + 'choice'.length === iconTargetId.length && 'choice'.length <= iconTargetId.length) ||
				(iconTargetId.indexOf('_customize-input-jinr__spcv_menu') !== -1 && iconTargetId.lastIndexOf('choice') + 'choice'.length === iconTargetId.length && 'choice'.length <= iconTargetId.length) ||
				(iconTargetId.indexOf('_customize-input-jinr__spcv_category') !== -1 && iconTargetId.lastIndexOf('choice') + 'choice'.length === iconTargetId.length && 'choice'.length <= iconTargetId.length) ||
				iconTargetId.indexOf('_customize-input-jinr__spcv_all_choice') !== -1 ||
				(iconTargetId.indexOf('_customize-input-jinr__simple_iconbox') !== -1 && iconTargetId.lastIndexOf('choice') + 'choice'.length === iconTargetId.length && 'choice'.length <= iconTargetId.length) ||
				(iconTargetId.indexOf('_customize-input-jinr__heading_iconbox') !== -1 && iconTargetId.lastIndexOf('choice') + 'choice'.length === iconTargetId.length && 'choice'.length <= iconTargetId.length)
			) {
				// アイコンリストを表示させる
				$('body').addClass('js--preview-filter');
				$('.o--customizer-iconwrapper').fadeIn();
			} else {
				$('body').removeClass('js--preview-filter');
				$('.o--customizer-iconwrapper').fadeOut();
			}
		});
		let inputElement = {};
		let iconElement = {};
		let firstIconValue = {};
		let firstTextValue = {};
		let textElement = {};
		let textElementValue = {};
		let firstColorValue = {};

		for (i = 1; i < 8; i++) {
			// 初期値を設定
			firstIconValue[i] = $('#_customize-input-jinr__sp_menu' + i + '_iconvisual').val();

			if (firstIconValue[i]) {
				$('#_customize-description-jinr__sp_menu' + i + '_iconvisual').html('<i class="jin-icons jin-ifont-' + firstIconValue[i] + '"></i>');
			} else {
				$('#customize-control-jinr__sp_menu' + i + '_iconvisual').addClass('u--display-none');
			}

			// アイコンが変更されたら
			$('#_customize-input-jinr__sp_menu' + i + '_choice').on('click', function (e) {
				inputElement[i] = $(this).parent().prev().find('input');
				iconElement = $(this).parent().prev().find('span');
				if (!inputElement[i]) {
					return;
				}
			});
		}
		// コンバージョン全体
		let firstAllIconValue = $('#_customize-input-jinr__spcv_all_iconvisual').val();
		if (firstAllIconValue) {
			$('#_customize-description-jinr__spcv_all_iconvisual').html('<i class="jin-icons jin-ifont-' + firstAllIconValue + '"></i>');
		}
		let inputAllElement = '';
		let iconAllElement = '';
		$('#_customize-input-jinr__spcv_all_choice').on('click', function (e) {
			inputAllElement = $(this).parent().prev().find('input');
			iconAllElement = $(this).parent().prev().find('span');
			if (!inputAllElement) {
				return;
			}
		});

		for (i = 1; i < 4; i++) {
			// 初期値を設定
			firstIconValue[i] = $('#_customize-input-jinr__spcv_category' + i + '_iconvisual').val();
			if (firstIconValue[i]) {
				$('#_customize-description-jinr__spcv_category' + i + '_iconvisual').html('<i class="jin-icons jin-ifont-' + firstIconValue[i] + '"></i>');
			}
			// アイコンが変更されたら
			$('#_customize-input-jinr__spcv_category' + i + '_choice').on('click', function (e) {
				inputElement[i] = $(this).parent().prev().find('input');
				iconElement = $(this).parent().prev().find('span');
				if (!inputElement[i]) {
					return;
				}
			});
		}
		for (i = 1; i < 5; i++) {
			// 初期値を設定
			firstIconValue[i] = $('#_customize-input-jinr__heading_iconbox' + i + '_iconvisual').val();
			firstTextValue[i] = $('#_customize-input-jinr__heading_iconbox' + i + '_title').val();
			firstColorValue[i] = $('#customize-control-jinr__heading_iconbox' + i + '_color' + ' .wp-color-picker').val();
			var textOutput = '';

			if (firstIconValue[i]) {
				$('#JinrHeadingIconBox' + i + ' .jif').replaceWith('<i class="jif jin-icons jin-ifont-' + firstIconValue[i] + '"></i>');
			}
			if (firstTextValue[i]) {
				$('#JinrHeadingIconBox' + i + ' .a--iconbox-title-text').html(firstTextValue[i]);
			}
			if (firstColorValue[i]) {
				$('#JinrHeadingIconBox' + i + ' .d--heading-iconbox' + i).css('border-color', firstColorValue[i]);
				$('#JinrHeadingIconBox' + i + ' .a--iconbox-title-text').css('color', firstColorValue[i]);
				$('#JinrHeadingIconBox' + i + ' .a--iconbox-title-icon').css('color', firstColorValue[i]);
			}

			$('#_customize-input-jinr__heading_iconbox' + i + '_title').on('input', function () {
				textElement[i] = $(this);
				textOutput = $(this).parent().parent().prev().prev().prev().find('.a--iconbox-title-text');
			});
			// アイコンが変更されたら
			$('#_customize-input-jinr__heading_iconbox' + i + '_choice').on('click', function (e) {
				inputElement[i] = $(this).parent().prev().find('input');
				iconElement = $(this).parent().prev().find('.jif');
				if (!inputElement[i]) {
					return;
				}
			});
		}

		$(document).on('input', textElementValue[i], function () {
			textElementValue[i] = $(textElement[i]).val();
			$(textOutput).html(textElementValue[i]);
		});

		for (i = 1; i < 9; i++) {
			// 初期値を設定
			firstIconValue[i] = $('#_customize-input-jinr__simple_iconbox' + i + '_iconvisual').val();
			firstColorValue[i] = $('#customize-control-jinr__simple_iconbox' + i + '_color' + ' .wp-color-picker').val();
			if (firstIconValue[i]) {
				$('#JinrIconBox' + i + ' .jif').replaceWith('<i class="jif jin-icons jin-ifont-' + firstIconValue[i] + '"></i>');
			}
			if (firstColorValue[i]) {
				$('#JinrIconBox' + i + ' .jinr-customizer-element-s-icon').css('background-color', firstColorValue[i]);
				$('#JinrIconBox' + i + ' .a--jinr-iconbox').css('border-left-color', firstColorValue[i]);
				$('#JinrIconBox' + i + ' .jinr-customizer-s-icon-box').css('color', firstColorValue[i]);
			}
			// アイコンが変更されたら
			$('#_customize-input-jinr__simple_iconbox' + i + '_choice').on('click', function (e) {
				inputElement[i] = $(this).parent().prev().find('input');
				iconElement = $(this).parent().prev().find('.jif');
				if (!inputElement[i]) {
					return;
				}
			});
		}

		$(document).on('click', '.c--icon-item', function () {
			let iconName = $(this).data('icon');
			if (inputAllElement) {
				$(inputAllElement).val(iconName);
				$(inputAllElement).trigger('input');
				$(iconAllElement).html('<i class="jif jin-icons jin-ifont-' + iconName + '"></i>');
				inputAllElement = '';
				return;
			}
			// 初期値がない場合で選択した場合
			const displayChoice = inputElement[i].parent().parent();
			if (displayChoice.hasClass('u--display-none')) {
				displayChoice.removeClass('u--display-none');
			}

			$(inputElement[i]).val(iconName);
			$(iconElement).replaceWith('<i class="jif jin-icons jin-ifont-' + iconName + '"></i>');
			$(inputElement[i]).trigger('input');
		});

		let sIconPicker = [];
		let sIconPickerResult = [];
		let sIconBackground = [];
		let sIconBorder = [];
		let sIconIcon = [];
		let sIconTarget = [];
		for (i = 1; i < 9; i++) {
			sIconPicker[i] = '#customize-control-jinr__simple_iconbox' + i + '_color .wp-color-picker';
			sIconPickerResult[i] = '#customize-control-jinr__simple_iconbox' + i + '_color .wp-color-result';
			sIconBackground[i] = '#customize-control-jinr__simple_iconbox' + i + '_iconvisual .jinr-customizer-element-s-icon';
			sIconBorder[i] = '#customize-control-jinr__simple_iconbox' + i + '_iconvisual .a--jinr-iconbox';
			sIconIcon[i] = '#customize-control-jinr__simple_iconbox' + i + '_iconvisual .jinr-customizer-s-icon-box';
			sIconTarget[i] = document.querySelector(sIconPickerResult[i]);
		}
		// アイコンボックス１の色
		const sIconObserver1 = new MutationObserver(function (mutations) {
			const colorElementValue = $(sIconPicker[1]).val();
			$(sIconBackground[1]).css('background-color', colorElementValue);
			$(sIconBorder[1]).css('border-left-color', colorElementValue);
			$(sIconIcon[1]).css('color', colorElementValue);
		});
		sIconObserver1.observe(sIconTarget[1], {
			attributes: true, // 属性変化の監視
		});

		// アイコンボックス２の色
		const sIconObserver2 = new MutationObserver(function (mutations) {
			const colorElementValue = $(sIconPicker[2]).val();
			$(sIconBackground[2]).css('background-color', colorElementValue);
			$(sIconBorder[2]).css('border-left-color', colorElementValue);
			$(sIconIcon[2]).css('color', colorElementValue);
		});
		sIconObserver2.observe(sIconTarget[2], {
			attributes: true, // 属性変化の監視
		});

		// アイコンボックス３の色
		const sIconObserver3 = new MutationObserver(function (mutations) {
			const colorElementValue = $(sIconPicker[3]).val();
			$(sIconBackground[3]).css('background-color', colorElementValue);
			$(sIconBorder[3]).css('border-left-color', colorElementValue);
			$(sIconIcon[3]).css('color', colorElementValue);
		});
		sIconObserver3.observe(sIconTarget[3], {
			attributes: true, // 属性変化の監視
		});

		// アイコンボックス4の色
		const sIconObserver4 = new MutationObserver(function (mutations) {
			const colorElementValue = $(sIconPicker[4]).val();
			$(sIconBackground[4]).css('background-color', colorElementValue);
			$(sIconBorder[4]).css('border-left-color', colorElementValue);
			$(sIconIcon[4]).css('color', colorElementValue);
		});
		sIconObserver4.observe(sIconTarget[4], {
			attributes: true, // 属性変化の監視
		});

		// アイコンボックス5の色
		const sIconObserver5 = new MutationObserver(function (mutations) {
			const colorElementValue = $(sIconPicker[5]).val();
			$(sIconBackground[5]).css('background-color', colorElementValue);
			$(sIconBorder[5]).css('border-left-color', colorElementValue);
			$(sIconIcon[5]).css('color', colorElementValue);
		});
		sIconObserver5.observe(sIconTarget[5], {
			attributes: true, // 属性変化の監視
		});

		// アイコンボックス6の色
		const sIconObserver6 = new MutationObserver(function (mutations) {
			const colorElementValue = $(sIconPicker[6]).val();
			$(sIconBackground[6]).css('background-color', colorElementValue);
			$(sIconBorder[6]).css('border-left-color', colorElementValue);
			$(sIconIcon[6]).css('color', colorElementValue);
		});
		sIconObserver6.observe(sIconTarget[6], {
			attributes: true, // 属性変化の監視
		});

		// アイコンボックス7の色
		const sIconObserver7 = new MutationObserver(function (mutations) {
			const colorElementValue = $(sIconPicker[7]).val();
			$(sIconBackground[7]).css('background-color', colorElementValue);
			$(sIconBorder[7]).css('border-left-color', colorElementValue);
			$(sIconIcon[7]).css('color', colorElementValue);
		});
		sIconObserver7.observe(sIconTarget[7], {
			attributes: true, // 属性変化の監視
		});

		// アイコンボックス8の色
		const sIconObserver8 = new MutationObserver(function (mutations) {
			const colorElementValue = $(sIconPicker[8]).val();
			$(sIconBackground[8]).css('background-color', colorElementValue);
			$(sIconBorder[8]).css('border-left-color', colorElementValue);
			$(sIconIcon[8]).css('color', colorElementValue);
		});
		sIconObserver8.observe(sIconTarget[8], {
			attributes: true, // 属性変化の監視
		});

		let hIconPicker = [];
		let hIconPickerResult = [];
		let hIconBorder = [];
		let hIconText = [];
		let hIconIcon = [];
		let hIconTarget = [];
		for (i = 1; i < 5; i++) {
			hIconPicker[i] = '#customize-control-jinr__heading_iconbox' + i + '_color .wp-color-picker';
			hIconPickerResult[i] = '#customize-control-jinr__heading_iconbox' + i + '_color .wp-color-result';
			hIconBorder[i] = '#customize-control-jinr__heading_iconbox' + i + '_iconvisual .d--heading-iconbox' + i;
			hIconText[i] = '#customize-control-jinr__heading_iconbox' + i + '_iconvisual .a--iconbox-title-text';
			hIconIcon[i] = '#customize-control-jinr__heading_iconbox' + i + '_iconvisual .a--iconbox-title-icon';
			hIconTarget[i] = document.querySelector(hIconPickerResult[i]);
		}
		// タイトル付きアイコンボックス１の色
		const hIconObserver1 = new MutationObserver(function (mutations) {
			const colorElementValue = $(hIconPicker[1]).val();
			$(hIconBorder[1]).css('border-color', colorElementValue);
			$(hIconText[1]).css('color', colorElementValue);
			$(hIconIcon[1]).css('color', colorElementValue);
		});
		hIconObserver1.observe(hIconTarget[1], {
			attributes: true, // 属性変化の監視
		});

		// タイトル付きアイコンボックス２の色
		const hIconObserver2 = new MutationObserver(function (mutations) {
			const colorElementValue = $(hIconPicker[2]).val();
			$(hIconBorder[2]).css('border-color', colorElementValue);
			$(hIconText[2]).css('color', colorElementValue);
			$(hIconIcon[2]).css('color', colorElementValue);
		});
		hIconObserver2.observe(hIconTarget[2], {
			attributes: true, // 属性変化の監視
		});

		// タイトル付きアイコンボックス３の色
		const hIconObserver3 = new MutationObserver(function (mutations) {
			const colorElementValue = $(hIconPicker[3]).val();
			$(hIconBorder[3]).css('border-color', colorElementValue);
			$(hIconText[3]).css('color', colorElementValue);
			$(hIconIcon[3]).css('color', colorElementValue);
		});
		hIconObserver3.observe(hIconTarget[3], {
			attributes: true, // 属性変化の監視
		});

		// タイトル付きアイコンボックス４の色
		const hIconObserver4 = new MutationObserver(function (mutations) {
			const colorElementValue = $(hIconPicker[4]).val();
			$(hIconBorder[4]).css('border-color', colorElementValue);
			$(hIconText[4]).css('color', colorElementValue);
			$(hIconIcon[4]).css('color', colorElementValue);
		});
		hIconObserver4.observe(hIconTarget[4], {
			attributes: true, // 属性変化の監視
		});

		let sBoxPicker = [];
		let sBoxPickerResult = [];
		let sBox = [];
		let sBoxExBox = [];
		let sBoxTarget = [];
		let firstBoxColorValue = [];
		var sheets = document.styleSheets;
		var sheet = sheets[sheets.length - 1];

		for (i = 1; i < 12; i++) {
			sBoxPicker[i] = '#customize-control-jinr__simple_box' + i + '_color .wp-color-picker';
			sBoxPickerResult[i] = '#customize-control-jinr__simple_box' + i + '_color .wp-color-result';
			sBox[i] = '#jinrBox' + i;
			sBoxExBox[i] = '#jinrBox' + i + ' .jinr-customizer-element-s-box';
			sBoxTarget[i] = document.querySelector(sBoxPickerResult[i]);

			// 初期値を設定
			firstBoxColorValue[i] = $('#customize-control-jinr__simple_box' + i + '_color' + ' .wp-color-picker').val();
		}
		// ボックス１の色
		if (firstBoxColorValue[1]) {
			$(sBox[1]).css('border-color', firstBoxColorValue[1]);
		}
		const sBoxObserver1 = new MutationObserver(function (mutations) {
			const colorElementValue = $(sBoxPicker[1]).val();
			$(sBox[1]).css('border-color', colorElementValue);
		});
		sBoxObserver1.observe(sBoxTarget[1], {
			attributes: true,
		});

		// ボックス2の色
		if (firstBoxColorValue[2]) {
			$(sBox[2]).css('border-color', firstBoxColorValue[2]);
			sheet.insertRule(sBox[2] + '::before { border-color: ' + firstBoxColorValue[2] + '!important; }', sheet.cssRules.length);
		}
		const sBoxObserver2 = new MutationObserver(function (mutations) {
			const colorElementValue = $(sBoxPicker[2]).val();
			$(sBox[2]).css('border-color', colorElementValue);
			sheet.insertRule(sBox[2] + '::before { border-color: ' + colorElementValue + '!important; }', sheet.cssRules.length);
		});
		sBoxObserver2.observe(sBoxTarget[2], {
			attributes: true,
		});

		// ボックス3の色
		if (firstBoxColorValue[3]) {
			$(sBox[3]).css('border-color', firstBoxColorValue[3]);
		}
		const sBoxObserver3 = new MutationObserver(function (mutations) {
			const colorElementValue = $(sBoxPicker[3]).val();
			$(sBox[3]).css('border-color', colorElementValue);
		});
		sBoxObserver3.observe(sBoxTarget[3], {
			attributes: true,
		});

		// ボックス4の色
		if (firstBoxColorValue[4]) {
			$(sBox[4]).css('border-color', firstBoxColorValue[4]);
			sheet.insertRule(
				sBox[4] +
					'::before { background-image: linear-gradient(to right, ' +
					firstBoxColorValue[4] +
					', ' +
					firstBoxColorValue[4] +
					' 4px, transparent 4px, transparent 8px), linear-gradient(to right, ' +
					firstBoxColorValue[4] +
					', ' +
					firstBoxColorValue[4] +
					' 4px, transparent 4px, transparent 8px)!important; }',
				sheet.cssRules.length
			);
		}
		const sBoxObserver4 = new MutationObserver(function (mutations) {
			const colorElementValue = $(sBoxPicker[4]).val();
			$(sBox[4]).css('border-color', colorElementValue);
			sheet.insertRule(
				sBox[4] +
					'::before { background-image: linear-gradient(to right, ' +
					colorElementValue +
					', ' +
					colorElementValue +
					' 4px, transparent 4px, transparent 8px), linear-gradient(to right, ' +
					colorElementValue +
					', ' +
					colorElementValue +
					' 4px, transparent 4px, transparent 8px)!important; }',
				sheet.cssRules.length
			);
		});
		sBoxObserver4.observe(sBoxTarget[4], {
			attributes: true,
		});

		// ボックス5の色
		if (firstBoxColorValue[5]) {
			$(sBox[5]).css('background-color', firstBoxColorValue[5]);
		}
		const sBoxObserver5 = new MutationObserver(function (mutations) {
			const colorElementValue = $(sBoxPicker[5]).val();
			$(sBox[5]).css('background-color', colorElementValue);
		});
		sBoxObserver5.observe(sBoxTarget[5], {
			attributes: true,
		});

		// ボックス6の色
		if (firstBoxColorValue[6]) {
			$(sBoxExBox[6]).css('background-color', firstBoxColorValue[6]);
			$(sBox[6]).css('border-color', firstBoxColorValue[6]);
		}
		const sBoxObserver6 = new MutationObserver(function (mutations) {
			const colorElementValue = $(sBoxPicker[6]).val();
			$(sBoxExBox[6]).css('background-color', colorElementValue);
			$(sBox[6]).css('border-color', colorElementValue);
		});
		sBoxObserver6.observe(sBoxTarget[6], {
			attributes: true,
		});

		// ボックス7の色
		if (firstBoxColorValue[7]) {
			$(sBoxExBox[7]).css('background-color', firstBoxColorValue[7]);
			$(sBox[7]).css('border-color', firstBoxColorValue[7]);
		}
		const sBoxObserver7 = new MutationObserver(function (mutations) {
			const colorElementValue = $(sBoxPicker[7]).val();
			$(sBoxExBox[7]).css('background-color', colorElementValue);
			$(sBox[7]).css('border-color', colorElementValue);
		});
		sBoxObserver7.observe(sBoxTarget[7], {
			attributes: true,
		});

		// ボックス8の色
		if (firstBoxColorValue[8]) {
			$(sBoxExBox[8]).css('background-color', firstBoxColorValue[8]);
		}
		const sBoxObserver8 = new MutationObserver(function (mutations) {
			const colorElementValue = $(sBoxPicker[8]).val();
			$(sBoxExBox[8]).css('background-color', colorElementValue);
		});
		sBoxObserver8.observe(sBoxTarget[8], {
			attributes: true,
		});

		// ボックス9の色
		if (firstBoxColorValue[9]) {
			$(sBoxExBox[9]).css('background-color', firstBoxColorValue[9]);
			sheet.insertRule(
				sBox[9] +
					'::after { background-image: linear-gradient(to right, ' +
					firstBoxColorValue[9] +
					', ' +
					firstBoxColorValue[9] +
					' 4px, transparent 4px, transparent 8px), linear-gradient(to right, ' +
					firstBoxColorValue[9] +
					', ' +
					firstBoxColorValue[9] +
					' 4px, transparent 4px, transparent 8px)!important; }',
				sheet.cssRules.length
			);
		}
		const sBoxObserver9 = new MutationObserver(function (mutations) {
			const colorElementValue = $(sBoxPicker[9]).val();
			$(sBoxExBox[9]).css('background-color', colorElementValue);
			sheet.insertRule(
				sBox[9] +
					'::after { background-image: linear-gradient(to right, ' +
					colorElementValue +
					', ' +
					colorElementValue +
					' 4px, transparent 4px, transparent 8px), linear-gradient(to right, ' +
					colorElementValue +
					', ' +
					colorElementValue +
					' 4px, transparent 4px, transparent 8px)!important; }',
				sheet.cssRules.length
			);
		});
		sBoxObserver9.observe(sBoxTarget[9], {
			attributes: true,
		});

		// ボックス10の色
		if (firstBoxColorValue[10]) {
			$(sBox[10]).css('background-color', firstBoxColorValue[10]);
			sheet.insertRule(
				sBox[10] + '::after { background: linear-gradient(45deg, ' + firstBoxColorValue[10] + ' 50%, transparent 52%),linear-gradient(315deg, ' + firstBoxColorValue[10] + ' 50%, transparent 52%)' + '!important; background-size: 12px 24px!important;background-repeat: repeat-x!important; }',
				sheet.cssRules.length
			);
		}
		const sBoxObserver10 = new MutationObserver(function (mutations) {
			const colorElementValue = $(sBoxPicker[10]).val();
			$(sBox[10]).css('background-color', colorElementValue);
			sheet.insertRule(
				sBox[10] + '::after { background: linear-gradient(45deg, ' + colorElementValue + ' 50%, transparent 52%),linear-gradient(315deg, ' + colorElementValue + ' 50%, transparent 52%)' + '!important; background-size: 12px 24px!important;background-repeat: repeat-x!important; }',
				sheet.cssRules.length
			);
		});
		sBoxObserver10.observe(sBoxTarget[10], {
			attributes: true,
		});

		// ボックス11の色
		if (firstBoxColorValue[11]) {
			$(sBox[11]).css('border-color', firstBoxColorValue[11]);
			sheet.insertRule(sBox[11] + '::before,' + sBox[11] + '::after { border-color: ' + firstBoxColorValue[11] + '!important; }', sheet.cssRules.length);
		}
		const sBoxObserver11 = new MutationObserver(function (mutations) {
			const colorElementValue = $(sBoxPicker[11]).val();
			$(sBox[11]).css('border-color', colorElementValue);
			sheet.insertRule(sBox[11] + '::before,' + sBox[11] + '::after{ border-color: ' + colorElementValue + '!important; }', sheet.cssRules.length);
		});
		sBoxObserver11.observe(sBoxTarget[11], {
			attributes: true,
		});

		let hBoxPicker = [];
		let hBoxPickerResult = [];
		let hBox = [];
		let hBoxExBox = [];
		let hBoxTitle = [];
		let hBoxTarget = [];
		let firstHBoxColorValue = [];

		for (i = 1; i < 10; i++) {
			hBoxPicker[i] = '#customize-control-jinr__heading_box' + i + '_color .wp-color-picker';
			hBoxPickerResult[i] = '#customize-control-jinr__heading_box' + i + '_color .wp-color-result';
			hBox[i] = '#JinrHeadingBox' + i;
			hBoxExBox[i] = '#JinrHeadingBox' + i + ' .jinr-customizer-element-h-box';
			hBoxTitle[i] = '#JinrHeadingBox' + i + ' .a--simple-box-title';
			hBoxTarget[i] = document.querySelector(hBoxPickerResult[i]);

			// 初期値を設定
			firstHBoxColorValue[i] = $('#customize-control-jinr__heading_box' + i + '_color' + ' .wp-color-picker').val();
		}

		// タイトル付きボックス1の色
		if (firstHBoxColorValue[1]) {
			$(hBox[1]).css('border-color', firstHBoxColorValue[1]);
			$(hBoxTitle[1]).css('background-color', firstHBoxColorValue[1]);
			sheet.insertRule(hBoxTitle[1] + '::before { border-top-color: ' + firstHBoxColorValue[1] + '!important; }', sheet.cssRules.length);
		}
		const hBoxObserver1 = new MutationObserver(function (mutations) {
			const colorElementValue = $(hBoxPicker[1]).val();
			$(hBox[1]).css('border-color', colorElementValue);
			$(hBoxTitle[1]).css('background-color', colorElementValue);
			sheet.insertRule(hBoxTitle[1] + '::before { border-top-color: ' + colorElementValue + '!important; }', sheet.cssRules.length);
		});
		hBoxObserver1.observe(hBoxTarget[1], {
			attributes: true,
		});

		// タイトル付きボックス2の色
		if (firstHBoxColorValue[2]) {
			$(hBox[2]).css('border-color', firstHBoxColorValue[2]);
			$(hBoxTitle[2]).css('background-color', firstHBoxColorValue[2]);
		}
		const hBoxObserver2 = new MutationObserver(function (mutations) {
			const colorElementValue = $(hBoxPicker[2]).val();
			$(hBox[2]).css('border-color', colorElementValue);
			$(hBoxTitle[2]).css('background-color', colorElementValue);
		});
		hBoxObserver2.observe(hBoxTarget[2], {
			attributes: true,
		});

		// タイトル付きボックス3の色
		if (firstHBoxColorValue[3]) {
			$(hBox[3]).css('border-color', firstHBoxColorValue[3]);
			$(hBoxTitle[3]).css('background-color', firstHBoxColorValue[3]);
		}
		const hBoxObserver3 = new MutationObserver(function (mutations) {
			const colorElementValue = $(hBoxPicker[3]).val();
			$(hBox[3]).css('border-color', colorElementValue);
			$(hBoxTitle[3]).css('background-color', colorElementValue);
		});
		hBoxObserver3.observe(hBoxTarget[3], {
			attributes: true,
		});

		// タイトル付きボックス4の色
		if (firstHBoxColorValue[4]) {
			$(hBox[4]).css('border-color', firstHBoxColorValue[4]);
			$(hBoxTitle[4]).css('background-color', firstHBoxColorValue[4]);
		}
		const hBoxObserver4 = new MutationObserver(function (mutations) {
			const colorElementValue = $(hBoxPicker[4]).val();
			$(hBox[4]).css('border-color', colorElementValue);
			$(hBoxTitle[4]).css('background-color', colorElementValue);
		});
		hBoxObserver4.observe(hBoxTarget[4], {
			attributes: true,
		});

		// タイトル付きボックス6の色
		if (firstHBoxColorValue[6]) {
			$(hBoxTitle[6]).css('color', firstHBoxColorValue[6]);
			$(hBoxExBox[6]).css('background-color', firstHBoxColorValue[6]);
		}
		const hBoxObserver6 = new MutationObserver(function (mutations) {
			const colorElementValue = $(hBoxPicker[6]).val();
			$(hBoxTitle[6]).css('color', colorElementValue);
			$(hBoxExBox[6]).css('background-color', colorElementValue);
		});
		hBoxObserver6.observe(hBoxTarget[6], {
			attributes: true,
		});

		// タイトル付きボックス7の色
		if (firstHBoxColorValue[7]) {
			$(hBox[7]).css('border-color', firstHBoxColorValue[7]);
			$(hBoxTitle[7]).css('color', firstHBoxColorValue[7]);
			$(hBoxTitle[7]).css('border-color', firstHBoxColorValue[7]);
			sheet.insertRule(hBoxTitle[7] + '::before { background-color: ' + firstHBoxColorValue[7] + '!important; }', sheet.cssRules.length);
		}
		const hBoxObserver7 = new MutationObserver(function (mutations) {
			const colorElementValue = $(hBoxPicker[7]).val();
			$(hBox[7]).css('border-color', colorElementValue);
			$(hBoxTitle[7]).css('color', colorElementValue);
			$(hBoxTitle[7]).css('border-color', colorElementValue);
			sheet.insertRule(hBoxTitle[7] + '::before { background-color: ' + colorElementValue + '!important; }', sheet.cssRules.length);
		});
		hBoxObserver7.observe(hBoxTarget[7], {
			attributes: true,
		});

		// タイトル付きボックス8の色
		if (firstHBoxColorValue[8]) {
			$(hBox[8]).css('border-color', firstHBoxColorValue[8]);
			$(hBoxTitle[8]).css('color', firstHBoxColorValue[8]);
			$(hBoxTitle[8]).css('border-color', firstHBoxColorValue[8]);
			sheet.insertRule(hBoxTitle[8] + '::before { background-color: ' + firstHBoxColorValue[8] + '!important; }', sheet.cssRules.length);
		}
		const hBoxObserver8 = new MutationObserver(function (mutations) {
			const colorElementValue = $(hBoxPicker[8]).val();
			$(hBox[8]).css('border-color', colorElementValue);
			$(hBoxTitle[8]).css('color', colorElementValue);
			$(hBoxTitle[8]).css('border-color', colorElementValue);
			sheet.insertRule(hBoxTitle[8] + '::before { background-color: ' + colorElementValue + '!important; }', sheet.cssRules.length);
		});
		hBoxObserver8.observe(hBoxTarget[8], {
			attributes: true,
		});

		// タイトル付きボックス9の色
		if (firstHBoxColorValue[9]) {
			$(hBox[9]).css('border-color', firstHBoxColorValue[9]);
			$(hBoxTitle[9]).css('background-color', firstHBoxColorValue[9]);
		}
		const hBoxObserver9 = new MutationObserver(function (mutations) {
			const colorElementValue = $(hBoxPicker[9]).val();
			$(hBox[9]).css('border-color', colorElementValue);
			$(hBoxTitle[9]).css('background-color', colorElementValue);
		});
		hBoxObserver9.observe(hBoxTarget[9], {
			attributes: true,
		});

		// ヘッダーが中央寄せの時は強制的に追尾ヘッダーを削除する
		const iconHeaderTracking = document.getElementById('customize-control-jinr__header_tracking');
		let radio_btns = document.querySelectorAll("input[type='radio'][name='_customize-radio-jinr__header_layout']");

		for (let target of radio_btns) {
			target.addEventListener('change', () => {
				if (target.id == '_customize-input-jinr__header_layout-radio-d--header-layout2') {
					iconHeaderTracking.classList.add('d--display-none');
				} else {
					iconHeaderTracking.classList.remove('d--display-none');
				}
			});
		}
	});
})(jQuery);

(function ($) {
	wp.customize.bind('ready', function () {
		var customize = wp.customize.control('colors');
		$('.to-jinr-gradation').focus();
	});
})(jQuery);

// アイコンメニュー表示非表示
(function ($) {
	for (let step = 1; step < 7; step++) {
		wp.customize.control('jinr__sp_menu_icon_display' + step + '', function (control) {
			control.container.find('#_customize-input-jinr__sp_menu_icon_display' + step + '-radio-d--icon-need').on('click', function () {
				$('#customize-control-jinr__sp_menu_icon_name' + step + '').slideDown(400);
			});
			control.container.find('#_customize-input-jinr__sp_menu_icon_display' + step + '-radio-d--icon-notneed').on('click', function () {
				$('#customize-control-jinr__sp_menu_icon_name' + step + '').slideUp(400);
			});
		});
	}
})(jQuery);
