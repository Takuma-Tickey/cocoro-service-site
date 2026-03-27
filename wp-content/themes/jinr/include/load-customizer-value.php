<?php
function jinr_customize_inline_style()
{

	$sp          = 'max-width: 551px';
	$mini_tablet = 'min-width: 552px';
	$tablet      = 'min-width: 782px';
	$pc_view     = 'min-width: 961px';
	$pc          = 'min-width: 1340px';

	$bg_image                 = jinr__bg_image();
	if (jinr__theme_color() == false) {
		set_theme_mod('jinr__theme_color', '#407FED');
	}
	$theme_color              = jinr__theme_color();
	$theme_color_rgba 		  = jinr_hex_to_rgb($theme_color);
	$theme_color_hsl          = jinr_hex_to_hsl($theme_color);
	$theme_color_hsl_huerotate1  = ($theme_color_hsl[0] + 30);
	$theme_color_hsl_huerotate2  = ($theme_color_hsl[0] + 45);
	$theme_color_hsl_blightrotate1  = ($theme_color_hsl[2] + 9);
	$design_style 			  = jinr__design_style();
	if (jinr__header_bg_color() == false) {
		set_theme_mod('jinr__header_bg_color', '#407FED');
	}
	$header_bg_color          = jinr__header_bg_color();
	$header_bg_color_hsl      = jinr_hex_to_hsl($header_bg_color);
	$header_title_color       = jinr__header_title_color();
	$header_menu_color        = jinr__header_menu_color();
	if (jinr__header_menu_color() == false) {
		set_theme_mod('jinr__header_menu_color', '#22327a');
	}
	$header_menu_color_rgba = jinr_hex_to_rgb($header_menu_color);
	$link_hover_color         = jinr__link_hover_color();
	$link_color               = jinr__link_color();
	$text_color               = jinr__text_color();
	if (jinr__text_color() == false) {
		set_theme_mod('jinr__text_color', '#555555');
	}
	$text_color_rgba 		  = jinr_hex_to_rgb($text_color);
	$bg_color                 = jinr__bg_color();
	if (jinr__bg_color() == false) {
		set_theme_mod('jinr__bg_color', '#f7faff');
	}
	$bg_color_rgba 		  = jinr_hex_to_rgb($bg_color);
	$marker1_color       	  = jinr__marker1_color();
	$marker2_color      	  = jinr__marker2_color();
	$marker1_weight        	  = jinr__marker1_weight();
	$marker2_weight       	  = jinr__marker2_weight();
	$colortext1_color         = jinr__colortext1_color();
	$colortext2_color      	  = jinr__colortext2_color();
	$related_post_bg_color    = jinr__related_post_bgcolor();
	$related_post_text_color  = jinr__related_post_color_type();
	$footer_bg_color          = jinr__footer_bg_color();
	$footer_text_color        = jinr__footer_text_color();

	$stillimage_url = jinr__stillimage_url();
	$stillimage_url_sp = jinr__stillimage_url_sp();
	$stillimage_height_size = jinr__stillimage_height_size();
	$stillimage_height_size_sp = jinr__stillimage_height_size_sp();
	$stillimage_height_control = jinr__stillimage_height_size_control() . '%';
	$stillimage_height_control_sp = jinr__stillimage_height_size_control_sp() . '%';
	$stillimage_height_size_num = jinr__stillimage_height_size_number() . 'px';
	$stillimage_height_size_num_sp = jinr__stillimage_height_size_number_sp() . 'px';
	$stillimage_overlay_color               = jinr__stillimage_overlay_color();
	$stillimage_overlay_transparent         = 100 - jinr__stillimage_overlay_transparent();
	$stillimage_overlay_transparent_percent = 100 - jinr__stillimage_overlay_transparent() . '%';
	$stillimage_maincopy_color              = jinr__stillimage_maincopy_color();
	$stillimage_contents_position_vertical_pc = jinr__stillimage_contents_position_vertical_pc() . '%';
	$stillimage_contents_position_horizon_pc = jinr__stillimage_contents_position_horizon_pc() . '%';
	$stillimage_contents_position_vertical_sp = jinr__stillimage_contents_position_vertical_sp() . '%';
	$stillimage_contents_position_horizon_sp = jinr__stillimage_contents_position_horizon_sp() . '%';
	$stillimage_contents_align_pc = jinr__stillimage_contents_align_pc();
	$stillimage_copy_size_num = jinr__stillimage_copy_size_number() + 50;

	$movie_height_sp = jinr__movie_height_sp() . 'px';
	$movie_maincopy_color              = jinr__movie_maincopy_color();
	$movie_contents_position_vertical_pc = jinr__movie_contents_position_vertical_pc() . '%';
	$movie_contents_position_horizon_pc = jinr__movie_contents_position_horizon_pc() . '%';
	$movie_contents_position_vertical_sp = jinr__movie_contents_position_vertical_sp() . '%';
	$movie_contents_position_horizon_sp = jinr__movie_contents_position_horizon_sp() . '%';
	$movie_contents_align_pc = jinr__movie_contents_align_pc();
	$movie_copy_size_num = jinr__movie_copy_size_number() + 50;

	$header_logo_size       = jinr__header_logo_size() . '%';
	$header_logo_size_sp    = jinr__header_logo_size_sp() . '%';
	$header_logo_padding    = jinr__header_logo_padding() . 'px';
	$header_logo_padding_sp = jinr__header_logo_padding_sp() . 'px';
	$header_glonavi_size    = jinr__glonavi_font_size() . 'px';

	$header_logo_size_px    = jinr__header_logo_size() . 'px';
	$header_logo_size_sp_px = jinr__header_logo_size_sp() . 'px';
	$header_bg_image          = jinr__header_bg_image();
	$header_bg_image_repeat   = jinr__header_bg_image_repeat();
	$header_bg_image_size   = jinr__header_bg_image_size() . '%';
	$header_bg_image_size_sp   = jinr__header_bg_image_size_sp() . '%';
	$header_bg_image_horizon_sp   = jinr__header_bg_position_horizon_sp() . '%';
	$header_bg_image_vertical_sp   = jinr__header_bg_position_vertical_sp() . '%';
	$header_bg_image_horizon   = jinr__header_bg_position_horizon() . '%';
	$header_bg_image_vertical   = jinr__header_bg_position_vertical() . '%';

	$cvbutton_all_color = jinr__spcv_all_color();
	$cvbutton_all_textcolor = jinr__spcv_all_text_color();
	$cvbutton_all_textcolor_rgba = jinr_hex_to_rgb($cvbutton_all_textcolor);
	$cvbutton_category1_color = jinr__spcv_category1_color();
	$cvbutton_category1_textcolor = jinr__spcv_category1_text_color();
	$cvbutton_category1_textcolor_rgba = jinr_hex_to_rgb($cvbutton_category1_textcolor);
	$cvbutton_category2_color = jinr__spcv_category2_color();
	$cvbutton_category2_textcolor = jinr__spcv_category2_text_color();
	$cvbutton_category2_textcolor_rgba = jinr_hex_to_rgb($cvbutton_category2_textcolor);
	$cvbutton_category3_color = jinr__spcv_category3_color();
	$cvbutton_category3_textcolor = jinr__spcv_category3_text_color();
	$cvbutton_category3_textcolor_rgba = jinr_hex_to_rgb($cvbutton_category3_textcolor);

	$infobar_textcolor = jinr__info_textcolor();

	// グラデーション登録読み込み
	$gradation1_color1 = jinr__gradation_color1_1();
	$gradation1_color2 = jinr__gradation_color1_2();
	$gradation1_deg    = jinr__gradation_color1_deg() . 'deg';
	$gradation2_color1 = jinr__gradation_color2_1();
	$gradation2_color2 = jinr__gradation_color2_2();
	$gradation2_deg    = jinr__gradation_color2_deg() . 'deg';
	$gradation3_color1 = jinr__gradation_color3_1();
	$gradation3_color2 = jinr__gradation_color3_2();
	$gradation3_deg    = jinr__gradation_color3_deg() . 'deg';

	//お気に入りカラー読み込み
	$favorite_color1 = jinr__favorite_color1();
	$favorite_color2 = jinr__favorite_color2();
	$favorite_color3 = jinr__favorite_color3();
	$favorite_color4 = jinr__favorite_color4();
	$favorite_color5 = jinr__favorite_color5();
	$favorite_color6 = jinr__favorite_color6();

	// 吹き出し登録読み込み
	$fukidashi1_border_color = jinr__fukidashi1_border_color();

	// 吹き出し登録読み込み
	$slider_count_color = jinr_hex_to_rgb($text_color);

	// 英語フォント読み込み
	$en_font = [
		'd--roboto'                => 'Roboto',
		'd--roboto-condensed'      => 'Roboto Condensed',
		'd--chivo'                 => 'Chivo',
		'd--albert-sans'           => 'Albert Sans',
		'd--montserrat-alternates' => 'Montserrat Alternates',
		'd--oxanium'               => 'Oxanium',
		'd--nunito'                => 'Nunito', // 丸ゴシック
		'd--orbitron'                => 'Orbitron', // 丸ゴシック
		'd--garamond'             => 'EB Garamond',
		'd--oleo-script'           => 'Oleo Script', // スクリプト・手書き
		'd--dancing-script'        => 'Dancing Script',
		'd--libre'                => 'Libre Bodoni',
		'd--josefin-slab'          => 'Josefin Slab',
		'd--timesnewroman'                 => 'Times New Roman',
	];

	$styles = "";

	foreach ($en_font as $key => $value) {
		if (jinr__english_font_style() == $key) {
			if (jinr__font_style() == "d--jpf-default") {
				$styles .= <<<EOM
				.$key.d--jpf-default .ef{
					font-family: '$value', -apple-system, BlinkMacSystemFont, "Segoe UI", "Hiragino Sans",
					sans-serif, "Apple Color Emoji","Segoe UI Emoji", "Segoe UI Symbol", "Noto Sans Emoji";
				}
EOM;
			} elseif (jinr__font_style() == "d--zenkakugothic") {
				$styles .= <<<EOM
				.$key.d--zenkakugothic .ef{
					font-family: '$value', 'Zen Kaku Gothic New', sans-serif;
				}
EOM;
			} elseif (jinr__font_style() == "d--notosans-thin") {
				$styles .= <<<EOM
				.$key.d--notosans-thin .ef{
					font-family: '$value', 'Noto Sans JP', sans-serif;
				}
EOM;
			} elseif (jinr__font_style() == "d--kiwimaru") {
				$styles .= <<<EOM
				.$key.d--kiwimaru .ef{
					font-family: '$value', 'Kiwi Maru', sans-serif;
				}
EOM;
			} elseif (jinr__font_style() == "d--mpr-thin") {
				$styles .= <<<EOM
				.$key.d--mpr-thin .ef{
					font-family: '$value', 'M PLUS Rounded 1c', sans-serif;
				}
EOM;
			} elseif (jinr__font_style() == "d--notoserif") {
				$styles .= <<<EOM
				.$key.d--notoserif .ef{
					font-family: '$value', 'Noto Serif JP', serif;
				}
EOM;
			} elseif (jinr__font_style() == "d--shipporimincho") {
				$styles .= <<<EOM
				.$key.d--shipporimincho .ef{
					font-family: '$value', 'Shippori Mincho', serif;
				}
EOM;
			}
		}
	}

	if (jinr__english_font_style() == "d--ef-none") {
		$styles .= <<<EOM
		.a--search-label,
		.a--menu-label {
			margin-top:-2px;
		}
EOM;
	} else if (jinr__english_font_style() == "d--garamond" || jinr__english_font_style() == "d--libre") {
		$styles .= <<<EOM
		.ef{
			font-style:italic;
		}
EOM;
	}
	if (jinr__ef_style() !== "off") {
		$styles .= <<<EOM
		.ef{
			font-style:italic;
		}
		#headerLogoLink{
			padding-right:6px;
		}
EOM;
	}

	if (jinr__bgcolor_type() == 'simplecolor') {
		$styles .= <<<EOM
	body:not(.wp-admin){
		background-color: $bg_color;
	}
EOM;
	}

	$styles .= <<<EOM
	body:not(.wp-admin) #wrapper{
		background-image: url($bg_image);
	}
EOM;

	$styles .= <<<EOM
	body:not(.wp-admin),
	.widgettitle,
	.c--post-list-title,
	.d--slider-title-default,
	.d--blogcard-mysite .a--blogcard-title,
	.d--blogcard-external .a--blogcard-title,
	.d--blogcard-external .a--blogcard-more,
	.d--blogcard-external::before,
	.d--blogcard-external.d--blogcard-style1 .a--blogcard-label,
	#hamburgerMenuList .menu-item a,
	.editor-styles-wrapper,
	#headerSearch .search-text,
	.d--profile-author.d--brand-color .d--contact,
	.js--hamburger-active.c--menu-trigger .a--menu-label,
	#postTagBox a,
	.wpcf7 input,
	.wpcf7 textarea,
	.wpcf7 select,
	.o--jinr-postcard,
	.o--postlist-inner .a--post-title,
	.widgets-php h2.jinr-heading,
	.d--material-design .b--jinr-postlist .a--post-title,
	.wp-block-search__input,
	.a--button-microcopy,
	.b--jinr-paid-text,
	.b--paidpost-remaining{
		color:$text_color;
	}
	#hamburgerMenuList .menu-item a:after,
	.a--simple-box-quotetitle,
	.a--nextpage-label{
		color:rgba($text_color_rgba[0],$text_color_rgba[1],$text_color_rgba[2],0.6);
	}
	#globalMenuList .sub-menu .menu-item a,
	.a--ham-follow-label{
		color:rgba($text_color_rgba[0],$text_color_rgba[1],$text_color_rgba[2],0.75);
	}
	.a--time-separator,
	.js--hamburger-active.c--menu-trigger .a--menu-bar,
	.a--nextpage-label::before,
	.a--nextpage-label::after{
		background-color:$text_color;
	}
	.a--microcopy-parts1,
    .a--microcopy-parts2,
	.d--button-microcopy3 .a--microcopy-parts1::before,
	.d--button-microcopy3 .a--microcopy-parts2::before{
		background-color:rgba($text_color_rgba[0],$text_color_rgba[1],$text_color_rgba[2],0.6);
	}
	.post-page-numbers,
	.o--pagenation-list .c--pagenation-item a{
		border-color:rgba($theme_color_rgba[0],$theme_color_rgba[1],$theme_color_rgba[2],1);
		color:rgba($theme_color_rgba[0],$theme_color_rgba[1],$theme_color_rgba[2],1);
	}
	.o--pagenation-list .c--pagenation-item .dots{
		color:rgba($text_color_rgba[0],$text_color_rgba[1],$text_color_rgba[2],0.45);
	}
	.post-page-numbers.current,
	.c--nextpage a:hover,
	.o--pagenation-list .c--pagenation-item span:not(.dots),
	.o--pagenation-list .c--pagenation-item a:hover{
		background-color:rgba($theme_color_rgba[0],$theme_color_rgba[1],$theme_color_rgba[2],1);
	}
	#hamburgerMenuList .menu-item ul a:before{
		background-color:rgba($text_color_rgba[0],$text_color_rgba[1],$text_color_rgba[2],0.3);
	}
	#hamburgerMenuList .menu-item{
		border-color:rgba($text_color_rgba[0],$text_color_rgba[1],$text_color_rgba[2],0.15);
	}
	.d--sns-share-design2.d--sns-share-color-white .c--sns-share-item{
		border-color:rgba($text_color_rgba[0],$text_color_rgba[1],$text_color_rgba[2],0.09);
	}
	ul.is-style-jinr-checkmark-square.jinr-list li::after{
		border-color:rgba($text_color_rgba[0],$text_color_rgba[1],$text_color_rgba[2],0.12);
	}
	.o--snsshare-button-select{
		background-color:rgba($text_color_rgba[0],$text_color_rgba[1],$text_color_rgba[2],0.03);
	}
	#postTagBox a,
	.wp-block-tag-cloud a{
		background-color:rgba($text_color_rgba[0],$text_color_rgba[1],$text_color_rgba[2],0.06);
	}
	.d--simple-box12{
		background-color:rgba($text_color_rgba[0],$text_color_rgba[1],$text_color_rgba[2],0.06);
	}
	.d--simple-box12::before,
	.d--simple-box12::after{
		color:rgba($text_color_rgba[0],$text_color_rgba[1],$text_color_rgba[2],0.06);
	}
	.d--blogcard-external.d--blogcard-style1 .o--blogcard-link,
	.wp-block-table table,
	.wp-block-table td,
	.wp-block-table thead{
		border-color:$text_color;
	}
	.o--widget-area a:not([class]),
	.jinr-article a:not([class]),
	#commonFooter a:not([class]),
	.editor-styles-wrapper a:not([class]),
	.comment-edit-link,
	.comment-reply-link{
		color: $link_color;
	}
	.comment-edit-link,
	.comment-reply-link{
		border-color: $link_color;
	}
	#wrapper a:not([class]):hover{
		color: $link_hover_color;
	}
	#footerMenuList a:hover{
		color: $link_hover_color!important;
	}
	#globalMenuList .menu-item a:hover{
		color: $header_menu_color;
	}
	.d--glonavi-hover-none #globalMenuList .menu-item a:hover{
		color: $link_hover_color;
	}
	.a--timeline-link-text span::before,
	.a--timeline-link-text span::after{
		background-color: $link_color;
	}
	.a--timeline-link-text:hover span::before,
	.a--timeline-link-text:hover span::after{
		background-color: $link_hover_color;
	}
	.d--blogcard-mysite .a--blogcard-more,
	.d--blogcard-mysite::before,
	.a--postcard-category,
	#mainContent .a--post-cat a,
	.a--timeline-step,
	.a--timeline-step-original,
	#mainContent .d--profile-author.d--theme-color a.a--sns-item-link,
	.d--profile-style1.d--theme-color a.a--sns-item-link .jin-icons,
	.d--profile-style2.d--theme-color a.a--sns-item-link .jin-icons,
	.c--jinr-post-cat a,
	.d--blogcard-mysite.d--blogcard-style1 .a--blogcard-label,
	.wp-block-search__button,
	.a--slider-button a,
	.cat-item a::after,
	.widget_nav_menu a::after,
	.wp-block-page-list a::after,
	.wp-block-archives a::after,
	.d--slider-design2 .swiper-button-prev::after,
	.d--slider-design2 .swiper-button-next::after,
	.a--paidpost-price,
	.d--h2-style10 h2.jinr-heading{
		color: $theme_color;
	}
	
	.d--blogcard-mysite.d--blogcard-style1 .o--blogcard-link,
	.d--h3-style1 h3.jinr-heading,
	.d--h2-style3 h2.jinr-heading,
	.d--h2-style9 h2.jinr-heading::after,
	.d--h2-style9 h2.jinr-heading,
	.d--h3-style3 h3.jinr-heading,
	.d--h3-style4 h3.jinr-heading,
	.d--h4-style2 h4.jinr-heading,
	.d--profile-style1,
	.d--h3-style7 h3.jinr-heading::before,
	.d--h4-style6 h4.jinr-heading::before,
	.jinr-widget-area h2.jinr-heading,
	.widgets-php h2.jinr-heading,
	ul.is-style-jinr-checkmark li::before,
	ul.is-style-jinr-checkmark-square li::before{
		border-color: $theme_color;
	}
	.d--profile-style1 .a--profile-job{
		border-bottom-color: $theme_color!important;
	}
	.d--h2-style2 h2.jinr-heading::before,
	.d--h2-style8 h2.jinr-heading::before{
		border-top-color: $theme_color!important;
	}
	.a--timeline-step-original::before,
	.a--timeline-step-original::after,
	.a--timeline-step::before,
	.a--timeline-step::after,
	.a--slider-button-deco,
	.d--h2-style1 h2.jinr-heading,
	.d--h2-style2 h2.jinr-heading,
	.d--h4-style1 h4.jinr-heading::before,
	.d--h2-style4 h2.jinr-heading::after,
	.d--h2-style5 h2.jinr-heading::before,
	.d--h2-style6 h2.jinr-heading::before,
	.d--h2-style7 h2.jinr-heading::before,
	.d--h2-style7 h2.jinr-heading::after,
	.d--h2-style9 h2.jinr-heading::before,
	.d--h3-style2 h3.jinr-heading::before,
	.d--h3-style3 h3.jinr-heading::before,
	.d--h3-style5 h3.jinr-heading::before,
	.d--h3-style5 h3.jinr-heading::after,
	.d--h4-style3 h4.jinr-heading::before,
	.o--slider-pagenation .swiper-pagination-bullet,
	.o--slider-pagenation .a--slider-pagenation,
	#snsShareBottom.d--sns-share-color-solid,
	ul.jinr-list li::after,
	ol.jinr-list li::before,
	.d--profile-style2 .o--profile-contents,
	.d--profile-style1 .a--profile-introduction::before,
	.d--h3-style6 h3.jinr-heading::before,
	.d--h3-style7 h3.jinr-heading::after,
	.d--h4-style5 h4.jinr-heading::before,
	.d--h4-style6 h4.jinr-heading::after,
	.d--archive-subtitle::after,
	.a--scroll-btn:before, 
	.a--scroll-btn:after,
	.d--designtitle-animation-dynamic .b--jinr-h2rich.js--scr-animation::before{
		background-color: $theme_color;
	}
	.d--slider-design2 .swiper-button-prev,
	.d--slider-design2 .swiper-button-next{
		background-color: rgba($theme_color_rgba[0],$theme_color_rgba[1],$theme_color_rgba[2],0.09);
	}
	.d--slider-design2 .swiper-button-prev:hover::before,
	.d--slider-design2 .swiper-button-next:hover::before{
		background-color: $theme_color;
	}
	.d--material-design .d--slider-design2 .swiper-button-prev,
	.d--material-design .d--slider-design2 .swiper-button-next{
		box-shadow: 0 3px 6px -1px rgba($theme_color_rgba[0],$theme_color_rgba[1],$theme_color_rgba[2],0.3);
	}
	.d--profile-style2 .a--profile-introduction{
		background-color: rgba($theme_color_rgba[0],$theme_color_rgba[1],$theme_color_rgba[2],0.09);
	}
	.d--h3-style8 h3.jinr-heading,
	.d--h4-style4 h4.jinr-heading,
	.d--h2-style10 h2.jinr-heading{
		background-color: rgba($theme_color_rgba[0],$theme_color_rgba[1],$theme_color_rgba[2],0.09);
	}
	.wp-block-search__button{
		background-color: rgba($theme_color_rgba[0],$theme_color_rgba[1],$theme_color_rgba[2],0.15);
	}
	.o--notfound-section{
		background-color: rgba($theme_color_rgba[0],$theme_color_rgba[1],$theme_color_rgba[2],0.06);
	}
	.jinr-profile-label::before,
	.jinr-profile-label span{
		background-color: rgba($theme_color_rgba[0],$theme_color_rgba[1],$theme_color_rgba[2],1);
	}
	.wp-block-search__button:hover{
		background-color: rgba($theme_color_rgba[0],$theme_color_rgba[1],$theme_color_rgba[2],1);
	}
	.d--flat-design .wp-block-search__input,
	.d--flat-design .wp-block-search__button-inside .wp-block-search__inside-wrapper,
	.d--flat-design .wp-block-categories-dropdown select,
	.d--flat-design .wp-block-archives-dropdown select{
		border-color: rgba($theme_color_rgba[0],$theme_color_rgba[1],$theme_color_rgba[2],0.45);
	}
	#hamburgerMenu .o--ham-follow-sns .a--sns-item-link .jin-icons::before{
		color: rgba($theme_color_rgba[0],$theme_color_rgba[1],$theme_color_rgba[2],1);
	}
	.wp-block-categories-dropdown::before,
	.wp-block-archives-dropdown::before{
		color: rgba($theme_color_rgba[0],$theme_color_rgba[1],$theme_color_rgba[2],1);
	}
	.wp-block-search__button svg{
		fill:$theme_color;
	}
	ol.jinr-list li li::after,
	ul.jinr-list li li::after{
		color: $theme_color!important;
	}
	.d--button a{
		background-color: $theme_color;
	}
	.d--archive-subtitle{
		color: rgba($text_color_rgba[0],$text_color_rgba[1],$text_color_rgba[2],0.45);
	}
	.a--post-date,
	.a--post-category{
		color: rgba($text_color_rgba[0],$text_color_rgba[1],$text_color_rgba[2],0.75);
	}
	@media ($mini_tablet) {
		.d--postlist-newstext .a--post-date{
			color: rgba($text_color_rgba[0],$text_color_rgba[1],$text_color_rgba[2],0.84);
		}
		.d--postlist-newstext .o--postlist-item{
			border-color: rgba($text_color_rgba[0],$text_color_rgba[1],$text_color_rgba[2],0.12);
		}
		.d--postlist-hover-hovercolor .c--post-link:hover .a--post-title{
			color: $link_hover_color!important;
		}
	}
	@media ($sp) {
		.d--postlist-newstext-sp .a--post-date{
			color: rgba($text_color_rgba[0],$text_color_rgba[1],$text_color_rgba[2],0.9);
		}
		.d--postlist-newstext-sp .o--postlist-item{
			border-color: rgba($text_color_rgba[0],$text_color_rgba[1],$text_color_rgba[2],0.12);
		}
	}
	.d--marker1{
		background:linear-gradient(transparent $marker1_weight%, $marker1_color $marker1_weight%);
	}
	.d--marker2{
		background:linear-gradient(transparent $marker2_weight%, $marker2_color $marker2_weight%);
	}
	.d--user-color1{
		color: $colortext1_color;
	}
	.d--user-color2{
		color: $colortext2_color;
	}
	.d--information-type-textonlywithlink a:hover{
		color : $infobar_textcolor!important;
	}
	.c--tab-title{
	background-color:rgba($theme_color_rgba[0],$theme_color_rgba[1],$theme_color_rgba[2],0.3);
	}
	.c--tab-title.active{
	background-color:rgba($theme_color_rgba[0],$theme_color_rgba[1],$theme_color_rgba[2],1);
	color:rgba($bg_color_rgba[0],$bg_color_rgba[1],$bg_color_rgba[2],1);
	}
	.d--tab-design1 .c--tab-contents{
		border-color:rgba($theme_color_rgba[0],$theme_color_rgba[1],$theme_color_rgba[2],1);
	}
	.d--tab-design1 .c--tab-title{
		box-shadow: inset 1px -1px 5px -2px rgba($theme_color_rgba[0],$theme_color_rgba[1],$theme_color_rgba[2],0.3);
	}

EOM;

	if ($header_bg_color_hsl[2] >= 93 && $header_bg_color_hsl[2] <= 100) {
		$header_bg_color_calc = 0.5 - $header_bg_color_hsl[2] * 0.0042;
	} elseif ($header_bg_color_hsl[2] >= 85 && $header_bg_color_hsl[2] < 93) {
		$header_bg_color_calc = 0.5 - $header_bg_color_hsl[2] * 0.0036;
	} elseif ($header_bg_color_hsl[2] > 75 && $header_bg_color_hsl[2] < 85) {
		$header_bg_color_calc = 0.5 - $header_bg_color_hsl[2] * 0.003;
	} elseif ($header_bg_color_hsl[2] > 35 && $header_bg_color_hsl[2] < 75) {
		$header_bg_color_calc = 0.5 - $header_bg_color_hsl[2] * 0.0024;
	} else {
		$header_bg_color_calc = 0.5 - $header_bg_color_hsl[2] * 0.003;
	}
	if ($header_bg_color_hsl[0] == 0) {
		if ($header_bg_color_hsl[2] == 100) {
			$styles .= <<<EOM
			.d--material-design .d--header-style-default.d--header-tracking-on:not(.d--transparent):not(.d--commonheader-cover){
				box-shadow: 0 3px 12px 1px hsla(0,0%,64%,0.06);
			}
EOM;
		} else {
			$styles .= <<<EOM
			.d--material-design .d--header-style-default.d--header-tracking-on:not(.d--transparent):not(.d--commonheader-cover){
				box-shadow: 0 3px 12px 1px hsla(0,0%,64%,$header_bg_color_calc );
			}
EOM;
		}
	} else {
		$styles .= <<<EOM
		.d--material-design .d--header-style-default.d--header-tracking-on:not(.d--transparent):not(.d--commonheader-cover){
			box-shadow: 0 3px 12px 1px hsla(0,0%,64%,$header_bg_color_calc );
		}
EOM;
	}

	if (jinr__slider_text_color_select() == 'd--slider-title-color') {
		$styles .= <<<EOM
		.a--slider-title a{
			color:$text_color!important;
		}
		.d--slider-design2 .c--post-meta{
			color:rgba($slider_count_color[0],$slider_count_color[1],$slider_count_color[2],0.75)!important;
		}
		@media ($sp) {
			.a--slider-item-count{
				-webkit-text-stroke:1px rgba($slider_count_color[0],$slider_count_color[1],$slider_count_color[2],1);
			}
		}
		@media ($mini_tablet) {
			.a--slider-item-count{
				-webkit-text-stroke:1px rgba($slider_count_color[0],$slider_count_color[1],$slider_count_color[2],0.3);
			}
		}
EOM;
	} elseif (jinr__slider_text_color_select() == 'd--slider-title-theme-color') {
		$styles .= <<<EOM
		.a--slider-title,
		.a--slider-title a{
			color:$theme_color!important;
		}
		@media ($sp) {
			.a--slider-item-count{
				-webkit-text-stroke:1px rgba($theme_color_rgba[0],$theme_color_rgba[1],$theme_color_rgba[2],1);
			}
		}
		@media ($mini_tablet) {
			.a--slider-item-count{
				-webkit-text-stroke:1px rgba($theme_color_rgba[0],$theme_color_rgba[1],$theme_color_rgba[2],0.3);
			}
		}
EOM;
	}

	if (jinr__main_style() == 'd--main-style-transparent') {
		$styles .= <<<EOM
		#mainContent{
			background-color:transparent;
		}
		.a--heading-iconbox-title{
			background-color:$bg_color!important;
		}
EOM;
	} else {
		$styles .= <<<EOM
		#mainContent,
		#homeArticle,
		#jinrArticle,
		.js--scr-animation .d--button-arrow-animation-drawarrow a::before{
			background-color:#fff;
		}
EOM;
	}
	if (jinr__header_bgcolor_type() == 'transparent') {
		$styles .= <<<EOM
		#commonHeader + .o--jinr-mainvisual.o--jinr-stillimage,
		#commonHeader + .o--jinr-mainvisual.o--jinr-imageslider,
		#commonHeader + .o--jinr-mainvisual.o--jinr-movie,
		#commonHeader + .d--main-style-outline{
			margin-top:0!important;
		}
		.#headerSpMenu{
			padding-bottom:0;
		}
		.o--jinr-slider {
			margin-top: 0;
		}
		@media ($sp) {
			.o--slider-contents-wrapper{
				padding-top:0;
			}
		}
EOM;
		if (jinr__header_bg_image() !== "") {
			$styles .= <<<EOM
			#commonHeader + .d--main-style-outline,
			#commonHeader + .o--jinr-mainvisual.o--jinr-slider{
				margin-top:30px!important;
			}
			@media ($sp) {
				#commonHeader + .o--jinr-mainvisual.o--jinr-slider{
					margin-top:21px!important;
				}
			}
EOM;
		}
	} else {
		$styles .= <<<EOM
		@media ($mini_tablet) {
			#commonHeader + .o--jinr-mainvisual.o--jinr-slider,
			#commonHeader + .a--header-style-parts + .o--jinr-mainvisual.o--jinr-slider,
			#commonHeader + .o--informationbar + .o--jinr-mainvisual.o--jinr-slider,
			#commonHeader + .a--header-style-parts + .o--informationbar + .o--jinr-mainvisual.o--jinr-slider{
				margin-top:30px;
			}
		}
EOM;
	}
	if (jinr__header_style() == 'd--header-style-triangle') {
		$styles .= <<<EOM
		.d--main-style-outline{
			margin-top:0;
		}
EOM;
	}
	if (jinr__header_bgcolor_type() == 'simplecolor') {
		if (jinr__header_style() == 'd--header-style-default') {
			$styles .= <<<EOM
			#commonHeader{
				background-color: $header_bg_color;
			}
EOM;
		} else {
			$styles .= <<<EOM
			.a--header-style-parts{
				background-color: $header_bg_color;
			}
EOM;
		}
	} elseif (jinr__header_bgcolor_type() == 'transparent') {
		if (jinr__header_style() == 'd--header-style-default') {
			if (jinr__header_tracking() == 'd--header-tracking-on') {
				$styles .= <<<EOM
				#commonHeader.js--follow-header-display{
					background-color: rgba($bg_color_rgba[0],$bg_color_rgba[1],$bg_color_rgba[2],0.15);
					backdrop-filter: blur(6px);
					-webkit-backdrop-filter: blur(6px);
				}
EOM;
			}
		}
	}

	if (jinr__header_style() == 'd--header-style-border') {
		if (jinr__header_tracking() == 'd--header-tracking-on') {
			$styles .= <<<EOM
			#commonHeader.js--follow-header-display{
				background-color: rgba(255,255,255,0.15);
				backdrop-filter: blur(6px);
				-webkit-backdrop-filter: blur(6px);
			}
EOM;
		}
	}
	if (jinr__header_style() == 'd--header-style-default' || jinr__header_style() == 'd--header-style-border') {
		if (jinr__header_bg_image() !== '') {
			$styles .= <<<EOM
			#commonHeader{
				background-image:url("$header_bg_image");
				background-size: $header_bg_image_size;
			}
			@media ($sp) {
				#commonHeader{
					background-size: $header_bg_image_size_sp;
				}
			}
EOM;
		}
		if (jinr__header_bg_image_repeat() == 'off') {
			$styles .= <<<EOM
			#commonHeader{
				background-repeat:no-repeat;
				background-size: $header_bg_image_size;
				background-position: $header_bg_image_horizon $header_bg_image_vertical;
			}
			@media ($sp) {
				#commonHeader{
					background-size: $header_bg_image_size_sp;
					background-position: $header_bg_image_horizon_sp $header_bg_image_vertical_sp;
				}
			}
EOM;
		}
	} else {
		if (jinr__header_bg_image() !== '') {
			$styles .= <<<EOM
			.a--header-style-parts{
				background-image:url("$header_bg_image");
				background-size: $header_bg_image_size;
			}
			@media ($sp) {
				.a--header-style-parts{
					background-size: $header_bg_image_size_sp;
				}
			}
EOM;
		}
		if (jinr__header_bg_image_repeat() == 'off') {
			$styles .= <<<EOM
			.a--header-style-parts{
				background-repeat:no-repeat;
				background-size: $header_bg_image_size;
				background-position: $header_bg_image_horizon $header_bg_image_vertical;
			}
			@media ($sp) {
				.a--header-style-parts{
					background-size: $header_bg_image_size_sp;
					background-position: $header_bg_image_horizon_sp $header_bg_image_vertical_sp;
				}
			}
EOM;
		}
	}

	if (!jinr__sp_menu1_label() == '' || !jinr__sp_menu2_label() == '' || !jinr__sp_menu3_label() == '' || !jinr__sp_menu4_label() == '') {
		if (jinr__header_subtitle_display_sp() == false) {
			$styles .= <<<EOM
			@media ($sp) {
				.d--header-style-triangle + .a--header-style-parts,
				.d--header-style-slope + .a--header-style-parts{
					clip-path: polygon(100% 0, 100% 33%, 0 85%, 0 0);
				}
			}
EOM;
		} else {
			$styles .= <<<EOM
			@media ($sp) {
				.d--header-style-triangle + .a--header-style-parts,
				.d--header-style-slope + .a--header-style-parts{
					clip-path: polygon(100% 0, 100% 48%, 0 91%, 0 0);
				}
			}
EOM;
		}
	} else {
		if (jinr__header_subtitle_display_sp() == false) {
			$styles .= <<<EOM
			@media ($sp) {
				.d--header-style-triangle + .a--header-style-parts,
				.d--header-style-slope + .a--header-style-parts{
					clip-path: polygon(100% 0, 100% 28%, 0 72%, 0 0);
				}
			}
EOM;
		} else {
			$styles .= <<<EOM
			@media ($sp) {
				.d--header-style-triangle + .a--header-style-parts,
				.d--header-style-slope + .a--header-style-parts{
					clip-path: polygon(100% 0, 100% 35%, 0 78%, 0 0);
				}
			}
EOM;
		}
	}

	if (jinr__tw_url() !== "" || jinr__fb_url() !== "" || jinr__insta_url() !== "" || jinr__youtube_url() !== "" || jinr__line_url() !== "" || jinr__contact_url() !== "") {
	} else {
		$styles .= <<<EOM
			@media ($sp) {
				#hamburgerMenu.d--hamburger-follow-on .o--hamburger-menu-inner{
					height:80%;
				}
			}
EOM;
	}

	$styles .= <<<EOM
	#headerLogoLink,
	#headerLogoLink:hover,
	#SiteSubCopy{
		color: $header_title_color!important;
	}
	@media ($sp) {
		#commonHeaderInner{
			height: $header_logo_padding_sp;
		}
		d--header-layout1.d--header-style-border + .a--header-style-parts.js--follow-header-display{
			top: $header_logo_padding_sp;
		}
	}
	@media screen and ($mini_tablet) and (max-width:781px) {
		.d--header-layout1 #commonHeaderInner{
			height: calc($header_logo_padding * 0.7);
		}
		d--header-layout1.d--header-style-border + .a--header-style-parts.js--follow-header-display{
			top: calc($header_logo_padding * 0.7);
		}
	}
	@media ($tablet) {
		.d--header-layout1 #commonHeaderInner{
			height: $header_logo_padding;
		}
		d--header-layout1.d--header-style-border + .a--header-style-parts.js--follow-header-display{
			top: $header_logo_padding;
		}
		.d--glonavi-hover-borderup #globalMenuList > li a::after,
		.d--glonavi-hover-borderwax #globalMenuList > li a::after,
		.d--glonavi-hover-borderflow #globalMenuList > li a::after{
			background-color:$header_menu_color;
		}
	}
EOM;
	$styles .= <<<EOM
	@media ($mini_tablet) {
		.d--header-layout2 #headerLogo{
			padding-top: calc($header_logo_padding * 0.3);
			padding-bottom: calc($header_logo_padding * 0.15);
		}
	}
EOM;

	if (!jinr__header_logo_url() == '') {
		$styles .= <<<EOM
		@media ($sp) {
			.d--header-layout1 #headerLogoLink{
				max-width: calc($header_logo_size_sp_px * 1.5);
			}
			.d--header-layout2 #headerLogoLink{
				max-width: calc($header_logo_size_sp_px * 1.5);
			}
		}
		@media ($mini_tablet) and (max-width:781px) {
			.d--header-layout1 #headerLogoLink{
				max-width: calc($header_logo_size_px * 2.4);
			}
			.d--header-layout2 #headerLogoLink{
				max-width: calc($header_logo_size_px * 2.4);
			}
		}
		@media ($tablet) {
			.d--header-layout1 #headerLogoLink{
				max-width: calc($header_logo_size_px * 3);
			}
			.d--header-layout2 #headerLogoLink{
				max-width: calc($header_logo_size_px * 3);
			}
		}
EOM;
	} else {
		$styles .= <<<EOM
		@media ($sp) {
			.d--header-layout1 #headerLogoLink{
				font-size: $header_logo_size_sp_px;
			}
			.d--header-layout2 #headerLogoLink{
				font-size: $header_logo_size_sp_px;
			}
		}
		@media screen and ($mini_tablet) and (max-width:781px) {
			.d--header-layout1 #headerLogoLink{
				font-size: calc( $header_logo_size_px * 0.8 );
			}
			.d--header-layout2 #headerLogoLink{
				font-size: calc( $header_logo_size_px * 0.8 );
			}
		}
		@media ($tablet) {
			.d--header-layout1 #headerLogoLink{
				font-size: $header_logo_size_px;
			}
			.d--header-layout2 #headerLogoLink{
				font-size: $header_logo_size_px;
			}
		}
EOM;
	}
	if (!jinr__header_subtitle_display_sp() == false) {
		$styles .= <<<EOM
		@media ($sp) {
			.d--header-layout1 #commonHeaderInner{
				margin-top:21px;
			}
		}
EOM;
	}
	if (jinr__header_globalmenu_tablet_display() == false) {
		$styles .= <<<EOM
		@media screen and ($tablet) and (max-width:960px) {
			.d--header-layout1 #headerLogo {
				max-width:calc(100% - 30px);
			}
		}
EOM;
	}
	if (jinr__header_toppage_display() == false) {
		$styles .= <<<EOM
		.page-template-template-full-width .d--main-style-noframe,
		.page-template-default .d--main-style-noframe,
		.post-template-default .d--main-style-noframe,
		.page-template-template-full-width .d--main-style-transparent,
		.page-template-default .d--main-style-transparent,
		.post-template-default .d--main-style-transparent{
			padding-top:0;
		}
EOM;
	}
	$header_display_ids = explode(",", jinr__header_postpage_display_ids());
	if (is_page($header_display_ids) || is_single($header_display_ids)) {
		$styles .= <<<EOM
		.page-template-template-full-width .d--main-style-noframe,
		.page-template-default .d--main-style-noframe,
		.post-template-default .d--main-style-noframe,
		.page-template-template-full-width .d--main-style-transparent,
		.page-template-default .d--main-style-transparent,
		.post-template-default .d--main-style-transparent{
			padding-top:0;
		}
EOM;
	}
	$styles .= <<<EOM
	.d--main-style-transparent .b--jinr-paid-text{
		background-color:$bg_color;
		box-shadow: 0 0 0px 15px $bg_color;
	}
	.b--jinr-paid-container::before{
		background-image : linear-gradient(to right, rgba($text_color_rgba[0],$text_color_rgba[1],$text_color_rgba[2],0.45), rgba($text_color_rgba[0],$text_color_rgba[1],$text_color_rgba[2],0.45) 7px, transparent 7px, transparent 8px);
	}
	#globalMenuList .menu-item{
		font-size:$header_glonavi_size;
	}
	#globalMenuList .menu-item a,
	#commonHeader a.a--sns-item-link .jin-icons::before,
	a.a--spmenu-item-link,
	#headerSearch .a--search-icon,
	#headerSearch .a--search-label,
	.c--menu-trigger .a--menu-label{
		color: $header_menu_color;
	}
	.d--header-menu-style2 #globalMenuList > .menu-item > a{
		border-color: rgba($header_menu_color_rgba[0],$header_menu_color_rgba[1],$header_menu_color_rgba[2],0.27)!important;
	}
	.c--spmenu-item::before{
		background-color: rgba($header_menu_color_rgba[0],$header_menu_color_rgba[1],$header_menu_color_rgba[2],0.21);
	}
	.c--menu-trigger .a--menu-bar{
		background-color: $header_menu_color;
	}
EOM;

	if ($stillimage_height_size == 'd--stillimage-height-size-original') {
		$styles .= <<<EOM
		@media ($mini_tablet) {
			.a--stillimage{
				max-height: $stillimage_height_size_num;
			}
		}
EOM;
	} elseif ($stillimage_height_size == 'd--stillimage-height-size-full') {
		$styles .= <<<EOM
		@media ($mini_tablet) {
			.a--stillimage{
				background-size:contain;
				box-sizing:border-box;
				height:auto;
				padding-top: $stillimage_height_control;
			}
		}
EOM;
	}

	if ($stillimage_height_size_sp == 'd--stillimage-height-size-original-sp') {
		$styles .= <<<EOM
		@media ($sp) {
			.a--stillimage{
				max-height: $stillimage_height_size_num_sp;
			}
		}
EOM;
	} elseif ($stillimage_height_size_sp == 'd--stillimage-height-size-full-sp') {
		$styles .= <<<EOM
		@media ($sp) {
			.a--stillimage{
				background-size:contain;
				box-sizing:border-box;
				height:auto;
				padding-top: $stillimage_height_control_sp;
			}
		}
EOM;
	} elseif ($stillimage_height_size_sp == 'd--stillimage-height-size-cover-sp') {
		$styles .= <<<EOM
		@media ($sp) {
			.a--stillimage{
				height:calc( 100vh - $header_logo_padding_sp );
			}
		}
EOM;
		if (!jinr__sp_menu1_label() == '' || !jinr__sp_menu2_label() == '' || !jinr__sp_menu3_label() == '' || !jinr__sp_menu4_label() == '') {
			$styles .= <<<EOM
			@media ($sp) {
				.a--stillimage{
					height:calc( 100vh - $header_logo_padding_sp - 55px );
				}
			}
EOM;
		} else {
			$styles .= <<<EOM
			@media ($sp) {
				.a--stillimage{
					height:calc( 100vh - $header_logo_padding_sp );
				}
			}
EOM;
		}
	}

	if ($stillimage_url !== "") {
		if ($stillimage_url_sp == "") {
			$styles .= <<<EOM
			.a--stillimage{
				background-image: url($stillimage_url);
			}
EOM;
			if ($stillimage_height_size == 'd--stillimage-height-size-original') {
				$styles .= <<<EOM
				.a--stillimage{
					max-height: $stillimage_height_size_num;
				}
EOM;
			} elseif ($stillimage_height_size == 'd--stillimage-height-size-full') {
				$styles .= <<<EOM
				.a--stillimage{
					background-size:contain;
					box-sizing:border-box;
					height:auto;
					padding-top: $stillimage_height_control;
				}
EOM;
			}
		} else {
			$styles .= <<<EOM
			.a--stillimage{
				background-image: url($stillimage_url);
			}
			@media ($sp) {
				.a--stillimage{
					background-image: url($stillimage_url_sp);
				}
			}
EOM;
		}
	}

	$styles .= <<<EOM
	.d--stillimage-overlay-simple .a--stillimage-overlay{
		background-color: $stillimage_overlay_color;
		filter: opacity($stillimage_overlay_transparent_percent);
	}
	.d--stillimage-overlay-blur .a--stillimage{
		opacity:calc(1 - $stillimage_overlay_transparent * 0.01);
	}
	.d--stillimage-overlay-blur.c--stillimage::before{
		background-color: $stillimage_overlay_color;
	}
	.a--stillimage-maincopy,
	.a--stillimage-subcopy{
		color: $stillimage_maincopy_color;
	}
	.c--stillimage-contents{
		top: $stillimage_contents_position_vertical_pc;
		left:$stillimage_contents_position_horizon_pc;
		text-align:$stillimage_contents_align_pc;
	}
	.c--stillimage-contents .b--jinr-button .o--button-inner{
		text-align:$stillimage_contents_align_pc;
	}
	@media ($sp) {
		.c--stillimage-contents{
			top: $stillimage_contents_position_vertical_sp;
			left:$stillimage_contents_position_horizon_sp;
		}
	}
	.a--movie-maincopy,
	.a--movie-subcopy{
		color: $movie_maincopy_color;
	}
	.c--movie-contents{
		top: $movie_contents_position_vertical_pc;
		left:$movie_contents_position_horizon_pc;
		text-align:$movie_contents_align_pc;
	}
	@media ($sp) {
		.c--movie-contents{
			top: $movie_contents_position_vertical_sp;
			left:$movie_contents_position_horizon_sp;
		}
	}
EOM;
	$styles .= '
	.a--stillimage-maincopy{
		font-size: ' . ($stillimage_copy_size_num * 0.038) . 'rem;
	}
	.a--movie-maincopy{
		font-size: ' . ($movie_copy_size_num * 0.038) . 'rem;
	}
	@media (' . $mini_tablet . ') {
		.a--stillimage-maincopy{
			font-size: clamp(' . ($stillimage_copy_size_num * 0.045) . 'rem, 3.9vw,' . ($stillimage_copy_size_num * 0.06) . 'rem);
		}
		.a--movie-maincopy{
			font-size: clamp(' . ($movie_copy_size_num * 0.045) . 'rem, 3.9vw,' . ($movie_copy_size_num * 0.06) . 'rem);
		}
	}
	.a--stillimage-subcopy{
		font-size: clamp(1.15rem, 1.5vw,' . ($stillimage_copy_size_num * 0.025) . 'rem);
	}
	.a--movie-subcopy{
		font-size: clamp(1.15rem, 1.5vw,' . ($movie_copy_size_num * 0.025) . 'rem);
	}
	@media (' . $mini_tablet . ') {
		.a--stillimage-subcopy{
			font-size: clamp(1.5rem, 1.8vw,' . ($stillimage_copy_size_num * 0.024) . 'rem);
		}
		.a--movie-subcopy{
			font-size: clamp(1.5rem, 1.8vw,' . ($movie_copy_size_num * 0.024) . 'rem);
		}
	}
	';
	if (jinr__movie_height_sp_select() == 'custom') {
		$styles .= <<<EOM
		@media ($sp) {
			.c--jinr-movie{
				height:$movie_height_sp;
			}
		}
EOM;
	}
	if (jinr__main_style() == 'd--main-style-transparent') {
		$styles .= <<<EOM
		.d--blogcard-style1 .a--blogcard-label,
		.d--blogcard-style1 .o--blogcard-link{
			background-color:$bg_color;
		}
EOM;
	} else {
		$styles .= <<<EOM
		.d--blogcard-style1 .a--blogcard-label,
		.d--blogcard-style1 .o--blogcard-link{
			background-color:#fff;
		}
EOM;
	}

	if (jinr__sns_share_color() == 'd--sns-share-color-white') {
		$styles .= <<<EOM
		#snsShareBottom.d--sns-share-color-white{
			border-top-color:$theme_color;
		}
		#snsShareLabel::before{
			background-color:rgba($text_color_rgba[0],$text_color_rgba[1],$text_color_rgba[2],0.45);
		}
EOM;
	}

	if (jinr__related_post_bgcolor_type() !== 'transparent') {
		$styles .= <<<EOM
		#jinrRelatedPost,
		.a--hidden-scroll{
			background-color: $related_post_bg_color;
		}
EOM;
	} else {
		$styles .= <<<EOM
		#jinrRelatedPost{
			background-color: transparent;
		}
EOM;
	}

	if ($design_style == "d--flat-design") {
		if ($related_post_text_color == "d--whitecolor") {
			$styles .= <<<EOM
			.c--relatedpost-headline,
			#jinrRelatedPost .a--post-title{
				color: #ffffff!important;
			}
			.a--relatedpost-maincopy::before,
			.a--relatedpost-maincopy::after{
				background-color: #ffffff;
			}
EOM;
		} else {
			$styles .= <<<EOM
			.c--relatedpost-headline{
				color: $text_color;
			}
			.a--relatedpost-maincopy::before,
			.a--relatedpost-maincopy::after{
				background-color: $text_color;
			}
EOM;
		}
	} else {
		if ($related_post_text_color == "d--whitecolor") {
			$styles .= <<<EOM
			.c--relatedpost-headline{
				color: #ffffff;
			}
			.a--relatedpost-maincopy::before,
			.a--relatedpost-maincopy::after{
				background-color: #ffffff;
			}
EOM;
		} else {
			$styles .= <<<EOM
			.c--relatedpost-headline{
				color: $text_color;
			}
			.a--relatedpost-maincopy::before,
			.a--relatedpost-maincopy::after{
				background-color: $text_color;
			}
EOM;
		}
	}

	if (jinr__footer_bgcolor_type() !== 'transparent') {
		$styles .= <<<EOM
		#commonFooter{
			background-color: $footer_bg_color;
		}
EOM;
	} else {
		$styles .= <<<EOM
		#commonFooter{
			background-color: transparent;
		}
EOM;
	}

	$footer_border_color = jinr_hex_to_rgb($footer_text_color);
	$styles .= <<<EOM
	#commonFooter #commonFooterSiteMenu a,
	#commonFooter .c--breadcrumb-item a,
	.c--breadcrumb-item,
	.a--breadcrumb-parts,
	#commonFooter .a--profile-name,
	#commonFooter .a--profile-introduction,
	#commonFooter a.a--sns-item-link,
	#commonFooter .a--profile-label,
	#footer-widget{
		color: $footer_text_color;
	}
	#footerInfo,
	#footerMenuList .menu-item:not(:first-child){
		border-color: rgba($footer_border_color[0],$footer_border_color[1],$footer_border_color[2],0.3);
	}
	#commonFooter .a--profile-label::before{
		background-color: rgba($footer_border_color[0],$footer_border_color[1],$footer_border_color[2],0.3);
	}
	#commonFooter .a--profile-job,
	#commonFooter .d--brand-color .d--contact{
		color: rgba($footer_border_color[0],$footer_border_color[1],$footer_border_color[2],0.6);
	}
	#copyright{
		color: $footer_text_color;
	}
EOM;
	//フルワイド
	$styles .= <<<EOM
	.d--fullwidth-max,
	.d--fullwidth-article{
		color: $text_color;
	}
EOM;
	//デザイン見出し
	$styles .= <<<EOM
	.a--h2rich-maincopy,
	.a--h2rich-subcopy,
	.a--h2rich-number,
	.a--h2rich-icon{
		color: $theme_color;
	}
	.b--jinr-h2rich{
		border-color: $theme_color;
	}
	.a--h2rich-decoration-before,
	.a--h2rich-decoration-after{
		background-color: $theme_color;
	}
EOM;
	//ウィジェット
	$styles .= <<<EOM
	.wp-block-latest-posts__list li a,
	.wp-block-archives-list li a,
	.wp-block-categories-list li a,
	.wp-block-page-list a,
	.widget_nav_menu li,
	.wp-block-rss li a,
	.wp-block-page-list li a,
	.wp-block-latest-comments .wp-block-latest-comments__comment,
	.jinr-widget-area.widget_meta li a{
		border-color:rgba($text_color_rgba[0],$text_color_rgba[1],$text_color_rgba[2],0.15);
	}
	.d--two-column .d--article-width-680 + #mainSideBar{
		border-color:rgba($text_color_rgba[0],$text_color_rgba[1],$text_color_rgba[2],0.1);
	}
	.wp-block-latest-posts__list li a,
	.wp-block-archives-list li a,
	.wp-block-categories-list li a,
	.wp-block-page-list li a,
	.widget_nav_menu li a,
	.wp-block-page-list a,
	.wp-block-rss li a,
	.jinr-widget-area.widget_meta li a,
	.wp-block-tag-cloud a,
	.wp-block-latest-comments__comment-link{
		color:$text_color!important;
	}
	.widget_nav_menu .menu-item ul a:before,
	.wp-block-page-list .menu-item ul a:before,
	.wp-block-categories-list .cat-item ul a:before{
		background-color:rgba($text_color_rgba[0],$text_color_rgba[1],$text_color_rgba[2],0.15);
	}
	body[class^="logged-in"]{
		background-color:#fff!important;
	}
EOM;

	//CVボタン
	$styles .= <<<EOM
	.d--cvbutton-all.d--spcv-outline .o--cv-button{
		border-color: $cvbutton_all_color;
	}
	.d--cvbutton-all{
		color: $cvbutton_all_textcolor;
	}
	.d--cvbutton-all .a--cv-button-icon::after{
		background-color: rgba($cvbutton_all_textcolor_rgba[0],$cvbutton_all_textcolor_rgba[1],$cvbutton_all_textcolor_rgba[2],0.6);
	}
	.d--cvbutton-all.d--spcv-solid .o--cv-button{
		background-color: $cvbutton_all_color;
	}
	.d--cvbutton-category1.d--spcv-outline .o--cv-button{
		border-color: $cvbutton_category1_color;
	}
	.d--cvbutton-category1{
		color: $cvbutton_category1_textcolor;
	}
	.d--cvbutton-category1 .a--cv-button-icon::after{
		background-color: rgba($cvbutton_category1_textcolor_rgba[0],$cvbutton_category1_textcolor_rgba[1],$cvbutton_category1_textcolor_rgba[2],0.6);
	}
	.d--cvbutton-category1.d--spcv-solid .o--cv-button{
		background-color: $cvbutton_category1_color;
	}
	.d--cvbutton-category2.d--spcv-outline .o--cv-button{
		border-color: $cvbutton_category2_color;
	}
	.d--cvbutton-category2{
		color: $cvbutton_category2_textcolor;
	}
	.d--cvbutton-category2 .a--cv-button-icon::after{
		background-color: rgba($cvbutton_category2_textcolor_rgba[0],$cvbutton_category2_textcolor_rgba[1],$cvbutton_category2_textcolor_rgba[2],0.6);
	}
	.d--cvbutton-category2.d--spcv-solid .o--cv-button{
		background-color: $cvbutton_category2_color;
	}
	.d--cvbutton-category3.d--spcv-outline .o--cv-button{
		border-color: $cvbutton_category3_color;
	}
	.d--cvbutton-category3{
		color: $cvbutton_category3_textcolor;
	}
	.d--cvbutton-category3 .a--cv-button-icon::after{
		background-color: rgba($cvbutton_category3_textcolor_rgba[0],$cvbutton_category3_textcolor_rgba[1],$cvbutton_category3_textcolor_rgba[2],0.6);
	}
	.d--cvbutton-category3.d--spcv-solid .o--cv-button{
		background-color: $cvbutton_category3_color;
	}
EOM;

	// シンプルボックス登録読み込み
	for ($i = 1; $i < 12; $i++) {
		${'simple_box' . $i . '_color'} = 'jinr__simple_box' . $i . '_color';
		${'simple_box' . $i . '_color'} = ${'simple_box' . $i . '_color'}();
		${'simple_box' . $i . '_color_rgba'} = jinr_hex_to_rgb(${'simple_box' . $i . '_color'});

		$styles .= '
		.d--simple-box' . $i . '{
			border-color: ' . ${'simple_box' . $i . '_color'} . ';
		}.d--simple-box' . $i . ' .a--simple-box-title{
			color: ' . ${'simple_box' . $i . '_color'} . ';
		}';
		if ($i == 5 || $i == 8 || $i == 10) {
			$styles .= '
			.d--simple-box' . $i . ' .a--simple-box-title{
				color: ' . $text_color . ';
			}';
		} else {
			$styles .= '
			.d--simple-box' . $i . ' .a--simple-box-title{
				color: ' . ${'simple_box' . $i . '_color'} . ';
			}';
		}
		if ($i == 2) {
			$styles .= '
			.d--simple-box' . $i . '::before{
				border: 1px solid' . ${'simple_box' . $i . '_color'} . ';
			}';
		}
		if ($i == 4 || $i == 9) {
			$styles .= '
			.d--simple-box' . $i . '::before{
				background-image: linear-gradient(
					to right,'
				. ${'simple_box' . $i . '_color'} . ','
				. ${'simple_box' . $i . '_color'} . ' 4px,
					transparent 4px,
					transparent 8px
				),
				linear-gradient(
					to right,'
				. ${'simple_box' . $i . '_color'} . ','
				. ${'simple_box' . $i . '_color'} . ' 4px,
					transparent 4px,
					transparent 8px
				);
			}';
		}
		if ($i == 5 || $i == 8 || $i == 10) {
			$styles .= '
			.d--simple-box' . $i . '{
				background-color: ' . ${'simple_box' . $i . '_color'} . ';
			}';
		}
		if ($i == 9) {
			$styles .= '
			.d--simple-box' . $i . '::after{
				background-image: linear-gradient(
					to right,'
				. ${'simple_box' . $i . '_color'} . ','
				. ${'simple_box' . $i . '_color'} . ' 4px,
					transparent 4px,
					transparent 8px
				),
				linear-gradient(
					to right,'
				. ${'simple_box' . $i . '_color'} . ','
				. ${'simple_box' . $i . '_color'} . ' 4px,
					transparent 4px,
					transparent 8px
				);
			}';
		}
		if ($i == 11) {
			$styles .= '
			.d--simple-box' . $i . '::before, .d--simple-box' . $i . '::after{
				border-color: ' . ${'simple_box' . $i . '_color'} . ';
			}
			';
		}
		if ($i == 6 || $i == 7 || $i == 9) {
			$styles .= '
			.d--simple-box' . $i . '{
				background-color: rgba(' . ${'simple_box' . $i . '_color_rgba'}[0] . ',' . ${'simple_box' . $i . '_color_rgba'}[1] . ',' . ${'simple_box' . $i . '_color_rgba'}[2] . ',0.1);
			}';
		}
		if ($i == 10) {
			$styles .= '
			.d--simple-box' . $i . '::after{
				background: linear-gradient(45deg, ' . ${'simple_box' . $i . '_color'} . ' 50%, transparent 52%),
			linear-gradient(315deg, ' . ${'simple_box' . $i . '_color'} . ' 50%, transparent 52%);
			background-size: 12px 24px;
			background-repeat: repeat-x;
			}
			';
		}
	}

	// タイトル付ボックス登録読み込み
	for ($i = 1; $i < 10; $i++) {
		${'heading_box' . $i . '_color'} = 'jinr__heading_box' . $i . '_color';
		${'heading_box' . $i . '_color'} = ${'heading_box' . $i . '_color'}();
		${'heading_box' . $i . '_color_rgba'} = jinr_hex_to_rgb(${'heading_box' . $i . '_color'});

		$styles .= '
		.d--heading-box' . $i . '{
			border-color: ' . ${'heading_box' . $i . '_color'} . ';
		}';
		if ($i == 1 || $i == 2 || $i == 3 || $i == 4 || $i == 9) {
			$styles .= '
			.d--heading-box' . $i . ' .a--simple-box-title{
				background-color: ' . ${'heading_box' . $i . '_color'} . ';
			}';
		}
		if ($i == 6 || $i == 7 || $i == 8) {
			$styles .= '
			.d--heading-box' . $i . ' .a--simple-box-title{
				color: ' . ${'heading_box' . $i . '_color'} . ';
			}';
		}
		if ($i == 1) {
			$styles .= '
			.d--heading-box' . $i . ' .a--simple-box-title::before{
				border-top-color: ' . ${'heading_box' . $i . '_color'} . '!important;
			}';
		}
		if ($i == 7) {
			$styles .= '
			.d--heading-box' . $i . ' .a--simple-box-title{
				border-color: ' . ${'heading_box' . $i . '_color'} . ';
			}
			.d--heading-box' . $i . ' .a--simple-box-title::before{
				background-color: ' . ${'heading_box' . $i . '_color'} . ';
			}
			';
		}
		if ($i == 6) {
			$styles .= '
			.d--heading-box' . $i . '{
				background-color: rgba(' . ${'heading_box' . $i . '_color_rgba'}[0] . ',' . ${'heading_box' . $i . '_color_rgba'}[1] . ',' . ${'heading_box' . $i . '_color_rgba'}[2] . ',0.18);
			}';
		}
		if ($i == 8) {
			$styles .= '
			.d--heading-box' . $i . ' .a--simple-box-title::before{
				background-color: ' . ${'heading_box' . $i . '_color'} . ';
			}
			.d--heading-box' . $i . ' .a--simple-box-title{
				border-color: ' . ${'heading_box' . $i . '_color'} . ';
			}';
		}
	}

	// タイトル付アイコンボックス登録読み込み
	for ($i = 1; $i < 5; $i++) {
		${'heading_iconbox' . $i . '_color'} = 'jinr__heading_iconbox' . $i . '_color';
		${'heading_iconbox' . $i . '_color'} = ${'heading_iconbox' . $i . '_color'}();

		$styles .= '
		.d--heading-iconbox' . $i . '{
			border-color: ' . ${'heading_iconbox' . $i . '_color'} . ';
		}
		.d--heading-iconbox' . $i . ' .jif{
			color: ' . ${'heading_iconbox' . $i . '_color'} . ';
		}
		.d--heading-iconbox' . $i . ' .a--heading-iconbox-title{
			color: ' . ${'heading_iconbox' . $i . '_color'} . ';
		}';
	}

	// シンプルアイコンボックス登録読み込み
	for ($i = 1; $i < 9; $i++) {
		${'simple_iconbox' . $i . '_color'} = 'jinr__simple_iconbox' . $i . '_color';
		${'simple_iconbox' . $i . '_color'} = ${'simple_iconbox' . $i . '_color'}();
		${'simple_iconbox_bgcolor' . $i} = jinr_hex_to_rgb(${'simple_iconbox' . $i . '_color'});

		$styles .= '
		.d--simple-iconbox' . $i . ' .jif{
			color: ' . ${'simple_iconbox' . $i . '_color'} . ';
		}
		.d--simple-iconbox' . $i . ' .a--jinr-iconbox{
			border-color: ' . ${'simple_iconbox' . $i . '_color'} . ';
		}
		.d--simple-iconbox' . $i . '{
			background-color: rgba(' . ${"simple_iconbox_bgcolor" . $i}[0] . ',' . ${"simple_iconbox_bgcolor" . $i}[1] . ',' . ${"simple_iconbox_bgcolor" . $i}[2] . ',0.1);
		}';
	}

	// ボタン登録読み込み
	for ($i = 1; $i < 11; $i++) {
		${'button0' . $i . '_design'}           = 'jinr__button0' . $i . '_design';
		${'button0' . $i . '_design'}           = ${'button0' . $i . '_design'}();
		${'button0' . $i . '_color_type'}       = 'jinr__button0' . $i . '_color_type';
		${'button0' . $i . '_color_type'}       = ${'button0' . $i . '_color_type'}();
		${'button0' . $i . '_color'}            = 'jinr__button0' . $i . '_color';
		${'button0' . $i . '_color'}            = ${'button0' . $i . '_color'}();
		${'button0' . $i . '_color_rgb'}     = jinr_hex_to_rgb(${'button0' . $i . '_color'});
		${'button0' . $i . '_gradation_select'} = 'jinr__button0' . $i . '_gradation_select';
		${'button0' . $i . '_gradation_select'} = ${'button0' . $i . '_gradation_select'}();
		${'button0' . $i . '_round'}            = 'jinr__button0' . $i . '_round';
		${'button0' . $i . '_round'}            = ${'button0' . $i . '_round'}();
		${'button0' . $i . '_width'}            = 'jinr__button0' . $i . '_width';
		${'button0' . $i . '_width'}            = ${'button0' . $i . '_width'}();
		${'button0' . $i . '_height'}           = 'jinr__button0' . $i . '_height';
		${'button0' . $i . '_height'}           = ${'button0' . $i . '_height'}();
		${'button0' . $i . '_shadow_size'}      = 'jinr__button0' . $i . '_shadow_size';
		${'button0' . $i . '_shadow_size'}      = ${'button0' . $i . '_shadow_size'}();
		${'button0' . $i . '_text_color'}       = 'jinr__button0' . $i . '_text_color';
		${'button0' . $i . '_text_color'}       = ${'button0' . $i . '_text_color'}();
		${'button0' . $i . '_text_size'}        = 'jinr__button0' . $i . '_text_size';
		${'button0' . $i . '_text_size'}        = ${'button0' . $i . '_text_size'}();
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
		${'button0' . $i . '_arrow_select'} = 'jinr__button0' . $i . '_arrow_select';
		${'button0' . $i . '_arrow_select'} = ${'button0' . $i . '_arrow_select'}();

		$styles .= '
		.d--button-type' . $i . ' a{
			font-size: ' . (${'button0' . $i . '_text_size'} * 0.9) . 'px;
		}
		@media (' . $mini_tablet . ') {
			.d--button-type' . $i . ' a{
				font-size: ' . ${'button0' . $i . '_text_size'} . 'px;
			}
		}
		';
		//ボタンの影
		if (${'button0' . $i . '_design'} == 'solid') {
			if (${'button0' . $i . '_color_type'} == 'gradation') {
				if (${'button0' . $i . '_gradation_select'} == 'd--jinr-gradation1') {
					${'jinr_button' . $i . '_shadow_color'} = jinr_hex_to_hsl($gradation1_color2);
				} elseif (${'button0' . $i . '_gradation_select'} == 'd--jinr-gradation2') {
					${'jinr_button' . $i . '_shadow_color'} = jinr_hex_to_hsl($gradation2_color2);
				} elseif (${'button0' . $i . '_gradation_select'} == 'd--jinr-gradation3') {
					${'jinr_button' . $i . '_shadow_color'} = jinr_hex_to_hsl($gradation3_color2);
				}
			} else {
				${'jinr_button' . $i . '_shadow_color'} = jinr_hex_to_hsl(${'button0' . $i . '_color'});
			}
		} else {
			${'jinr_button' . $i . '_shadow_color'} = jinr_hex_to_hsl(${'button0' . $i . '_color'});
		}
		if (${'button0' . $i . '_design'} == 'solid') {
			$styles .= '
			.d--button-type' . $i . ' a{
				color: ' . ${'button0' . $i . '_text_color'} . '!important;
				padding: ' . (${'button0' . $i . '_height'} * 0.75) . 'px ' . (${'button0' . $i . '_width'} * 0.69) . 'px;
				border-radius: ' . ${'button0' . $i . '_round'} . 'px;
			}
			span.b--jinr-price::before{
				background-color: ' . ${'button0' . $i . '_text_color'} . ';
			}
			@media (' . $mini_tablet . ') {
				.d--button-type' . $i . ' a{
					padding: ' . (${'button0' . $i . '_height'} + 1) . 'px ' . ${'button0' . $i . '_width'} . 'px ' . ${'button0' . $i . '_height'} . 'px;
				}
			}
			';
			if (${'button0' . $i . '_color_type'} == 'simplecolor') {
				$styles .= '
				.d--button-type' . $i . ' a{
					background-color: ' . ${'button0' . $i . '_color'} . ';
				}';
			} elseif (${'button0' . $i . '_color_type'} == 'gradation') {
				if (${'button0' . $i . '_gradation_select'} == 'd--jinr-gradation1') {
					$styles .= '
					.d--button-type' . $i . ' a{
						background: linear-gradient(' . $gradation1_deg . ', ' . $gradation1_color1 . ', ' . $gradation1_color2 . ');
					}';
				} elseif (${'button0' . $i . '_gradation_select'} == 'd--jinr-gradation2') {
					$styles .= '
					.d--button-type' . $i . ' a{
						background: linear-gradient(' . $gradation2_deg . ', ' . $gradation2_color1 . ', ' . $gradation2_color2 . ');
					}';
				} elseif (${'button0' . $i . '_gradation_select'} == 'd--jinr-gradation3') {
					$styles .= '
					.d--button-type' . $i . ' a{
						background: linear-gradient(' . $gradation3_deg . ', ' . $gradation3_color1 . ', ' . $gradation3_color2 . ');
					}';
				}
			}
			if (${'button0' . $i . '_shadow_size'} == 'd--button-shadow-small') {
				$styles .= '
				.d--button-type' . $i . ' a{
					box-shadow: 0 1px 3px hsla(' . ${'jinr_button' . $i . '_shadow_color'}[0] . ',' . ${'jinr_button' . $i . '_shadow_color'}[1] . '%,' . (${'jinr_button' . $i . '_shadow_color'}[2] - 18) . '%,' . '0.40);
				}';
			} elseif (${'button0' . $i . '_shadow_size'} == 'd--button-shadow-medium') {
				$styles .= '
				.d--button-type' . $i . ' a{
					box-shadow: 0 3px 6px hsla(' . ${'jinr_button' . $i . '_shadow_color'}[0] . ',' . ${'jinr_button' . $i . '_shadow_color'}[1] . '%,' . (${'jinr_button' . $i . '_shadow_color'}[2] - 18) . '%,' . '0.27);
				}';
			} elseif (${'button0' . $i . '_shadow_size'} == 'd--button-shadow-large') {
				$styles .= '
				.d--button-type' . $i . ' a{
					box-shadow: 0 4px 9px hsla(' . ${'jinr_button' . $i . '_shadow_color'}[0] . ',' . ${'jinr_button' . $i . '_shadow_color'}[1] . '%,' . (${'jinr_button' . $i . '_shadow_color'}[2] - 18) . '%,' . '0.27);
				}';
			}
		} elseif (${'button0' . $i . '_design'} == 'outline') {
			$styles .= '
			.d--button-type' . $i . ' a{
				color: ' . ${'button0' . $i . '_color'} . '!important;
				border: 1px solid ' . ${'button0' . $i . '_color'} . ';
				padding: ' . (${'button0' . $i . '_height'} * 0.75) . 'px ' . (${'button0' . $i . '_width'} * 0.69) . 'px;
				border-radius: ' . ${'button0' . $i . '_round'} . 'px;
			}
			@media (' . $mini_tablet . ') {
				.d--button-type' . $i . ' a{
					padding: ' . (${'button0' . $i . '_height'} + 1) . 'px ' . ${'button0' . $i . '_width'} . 'px ' . ${'button0' . $i . '_height'} . 'px;
				}
			}
			';
			if (${'button0' . $i . '_shadow_size'} == 'd--button-shadow-small') {
				$styles .= '
				.d--button-type' . $i . ' a{
					box-shadow: 0 1px 3px hsla(' . ${'jinr_button' . $i . '_shadow_color'}[0] . ',' . ${'jinr_button' . $i . '_shadow_color'}[1] . '%,' . (${'jinr_button' . $i . '_shadow_color'}[2] - 18) . '%,' . '0.27);
				}';
			} elseif (${'button0' . $i . '_shadow_size'} == 'd--button-shadow-medium') {
				$styles .= '
				.d--button-type' . $i . ' a{
					box-shadow: 0 3px 6px hsla(' . ${'jinr_button' . $i . '_shadow_color'}[0] . ',' . ${'jinr_button' . $i . '_shadow_color'}[1] . '%,' . (${'jinr_button' . $i . '_shadow_color'}[2] - 18) . '%,' . '0.21);
				}';
			} elseif (${'button0' . $i . '_shadow_size'} == 'd--button-shadow-large') {
				$styles .= '
				.d--button-type' . $i . ' a{
					box-shadow: 0 4px 9px hsla(' . ${'jinr_button' . $i . '_shadow_color'}[0] . ',' . ${'jinr_button' . $i . '_shadow_color'}[1] . '%,' . (${'jinr_button' . $i . '_shadow_color'}[2] - 18) . '%,' . '0.18);
				}';
			}
		} elseif (${'button0' . $i . '_design'} == 'arrow') {

			$styles .= '
			.js--scr-animation .d--button-type' . $i . '.d--button-arrow-animation-drawarrow.is-animated a::after,
			.js--scr-animation .d--button-type' . $i . '.d--button-arrow-animation-drawarrow.is-animated a::before{
				background-color: ' . ${'button0' . $i . '_color'} . ';
			}
			.d--button-type' . $i . ' a{
				color: ' . ${'button0' . $i . '_color'} . '!important;
				position:relative;
				border-bottom: 1px solid ' . ${'button0' . $i . '_color'} . ';
				padding: ' . (${'button0' . $i . '_height'} * 0.69) . 'px ' . (${'button0' . $i . '_width'} * 0.69) . 'px ' . (${'button0' . $i . '_height'} * 0.69) . 'px ' . '3px;
			}
			.d--button-type' . $i . ' a::after{
				border-right: 1px solid ' . ${'button0' . $i . '_color'} . ';
			}
			@media (' . $mini_tablet . ') {
				.d--button-type' . $i . ' a{
					padding: ' . ${'button0' . $i . '_height'} . 'px ' . ${'button0' . $i . '_width'} . 'px ' . ${'button0' . $i . '_height'} . 'px ' . '3px;
				}
			}';
		}
		//矢印アイコン
		if (${'button0' . $i . '_design'} == 'solid' || ${'button0' . $i . '_design'} == 'outline') {
			if (${'button0' . $i . '_arrow_select'} !== 'none') {
				//アイコンのフォント化
				if (${'button0' . $i . '_arrow_select'} == 'jin-ifont-arrow') {
					${"arrow_icon" . $i} = '\e904';
				} elseif (${'button0' . $i . '_arrow_select'} == 'jin-ifont-arrowm') {
					${"arrow_icon" . $i} = '\ea7b';
				} elseif (${'button0' . $i . '_arrow_select'} == 'jin-ifont-arrowthin') {
					${"arrow_icon" . $i} = '\ea84';
				} elseif (${'button0' . $i . '_arrow_select'} == 'jin-ifont-v2arrow') {
					${"arrow_icon" . $i} = '\e9e5';
				} elseif (${'button0' . $i . '_arrow_select'} == 'jin-ifont-doublearrow') {
					${"arrow_icon" . $i} = '\e910';
				} elseif (${'button0' . $i . '_arrow_select'} == 'jin-ifont-v2arrowdouble') {
					${"arrow_icon" . $i} = '\e9eb';
				} elseif (${'button0' . $i . '_arrow_select'} == 'jin-ifont-arrowb') {
					${"arrow_icon" . $i} = '\e94c';
				} elseif (${'button0' . $i . '_arrow_select'} == 'jin-ifont-arrowclear') {
					${"arrow_icon" . $i} = '\e94d';
				} elseif (${'button0' . $i . '_arrow_select'} == 'jin-ifont-arrowcircle') {
					${"arrow_icon" . $i} = '\e902';
				} elseif (${'button0' . $i . '_arrow_select'} == 'jin-ifont-v2arrowcircle') {
					${"arrow_icon" . $i} = '\e9e9';
				} elseif (${'button0' . $i . '_arrow_select'} == 'jin-ifont-arrowbcircle') {
					${"arrow_icon" . $i} = '\e94b';
				} elseif (${'button0' . $i . '_arrow_select'} == 'jin-ifont-v2arrowbcircle') {
					${"arrow_icon" . $i} = '\e9e7';
				} elseif (${'button0' . $i . '_arrow_select'} == 'jin-ifont-arrowrsquare') {
					${"arrow_icon" . $i} = '\e94e';
				} elseif (${'button0' . $i . '_arrow_select'} == 'jin-ifont-arrowbottom') {
					${"arrow_icon" . $i} = '\e932';
				} elseif (${'button0' . $i . '_arrow_select'} == 'jin-ifont-arrowbottomm') {
					${"arrow_icon" . $i} = '\ea12';
				} elseif (${'button0' . $i . '_arrow_select'} == 'jin-ifont-arrowbottomthin') {
					${"arrow_icon" . $i} = '\e9ea';
				} elseif (${'button0' . $i . '_arrow_select'} == 'jin-ifont-v2arrowbottom') {
					${"arrow_icon" . $i} = '\e9e8';
				} elseif (${'button0' . $i . '_arrow_select'} == 'jin-ifont-arrowtop') {
					${"arrow_icon" . $i} = '\e903';
				} elseif (${'button0' . $i . '_arrow_select'} == 'jin-ifont-arrowtopm') {
					${"arrow_icon" . $i} = '\ea13';
				} elseif (${'button0' . $i . '_arrow_select'} == 'jin-ifont-arrowtopthin') {
					${"arrow_icon" . $i} = '\ea79';
				} elseif (${'button0' . $i . '_arrow_select'} == 'jin-ifont-v2arrowtop') {
					${"arrow_icon" . $i} = '\e9ee';
				} else {
					${"arrow_icon" . $i} = '';
				}
				if (${'button0' . $i . '_width'} <= 45) {
					$styles .= '
					.d--button-type' . $i . ' a::after{
						right:' . (${'button0' . $i . '_width'} * 0.75 - 18) . 'px;
					}
					';
				} elseif (${'button0' . $i . '_width'} > 45 && ${'button0' . $i . '_width'} < 80) {
					$styles .= '
					.d--button-type' . $i . ' a::after{
						right:' . (${'button0' . $i . '_width'} * 0.3) . 'px;
					}
					';
				}
				$styles .= '
				.d--button-type' . $i . ' a{
					padding-left: ' . (${'button0' . $i . '_width'} * 0.69 - 18) . 'px;
				}
				.d--button-type' . $i . ' a::after{
					content: "' . ${"arrow_icon" . $i} . '";
				}
				@media (' . $mini_tablet . ') {
					.d--button-type' . $i . ' a{
						padding-left: ' . (${'button0' . $i . '_width'} - 24) . 'px;
					}
				}
				';
			}
		}
		//ボタンホバー(塗り)
		if (${'button0' . $i . '_design'} == 'solid') {
			if (${'button0' . $i . '_solid_hover'} == 'd--button-solid-hover-down') {
				$styles .= '
				.d--button-type' . $i . ' a:hover{
					box-shadow: 0 0px 0px hsla(' . ${'jinr_button' . $i . '_shadow_color'}[0] . ',' . ${'jinr_button' . $i . '_shadow_color'}[1] . '%,' . (${'jinr_button' . $i . '_shadow_color'}[2] - 18) . '%,' . '0);
				}';
			} elseif (${'button0' . $i . '_solid_hover'} == 'd--button-solid-hover-outlineleft') {
				if (${'button0' . $i . '_color_type'} == 'gradation') {
					if (${'button0' . $i . '_gradation_select'} == 'd--jinr-gradation1') {
						${'jinr_button' . $i . '_color'} = $gradation1_color1;
					} elseif (${'button0' . $i . '_gradation_select'} == 'd--jinr-gradation2') {
						${'jinr_button' . $i . '_color'} = $gradation2_color1;
					} elseif (${'button0' . $i . '_gradation_select'} == 'd--jinr-gradation3') {
						${'jinr_button' . $i . '_color'} = $gradation3_color1;
					}
				} else {
					${'jinr_button' . $i . '_color'} = ${'button0' . $i . '_color'};
				}
				$styles .= '
				.d--button-type' . $i . ' a{
					border:1px solid ' . ${'jinr_button' . $i . '_color'} . ';
				}
				.d--button-type' . $i . ' a:hover{
					color:' . ${'jinr_button' . $i . '_color'} . ' !important;
				}';
			} elseif (${'button0' . $i . '_solid_hover'} == 'd--button-solid-hover-outlinecenter') {
				if (${'button0' . $i . '_color_type'} == 'gradation') {
					if (${'button0' . $i . '_gradation_select'} == 'd--jinr-gradation1') {
						${'jinr_button' . $i . '_color'} = $gradation1_color1;
					} elseif (${'button0' . $i . '_gradation_select'} == 'd--jinr-gradation2') {
						${'jinr_button' . $i . '_color'} = $gradation2_color1;
					} elseif (${'button0' . $i . '_gradation_select'} == 'd--jinr-gradation3') {
						${'jinr_button' . $i . '_color'} = $gradation3_color1;
					}
				} else {
					${'jinr_button' . $i . '_color'} = ${'button0' . $i . '_color'};
				}
				$styles .= '
				.d--button-type' . $i . ' a{
					border: 1px solid ' . ${'jinr_button' . $i . '_color'} . ';
				}
				.d--button-type' . $i . ' a:hover{
					color:' . ${'jinr_button' . $i . '_color'} . ' !important;
				}';
			}
		}
		//ボタンホバー(アウトライン)
		if (${'button0' . $i . '_design'} == 'outline') {
			if (${'button0' . $i . '_outline_hover'} == 'd--button-outline-hover-default') {
				$styles .= '
				.d--button-type' . $i . ' a:hover{
					background:' . ${'button0' . $i . '_color'} . ';
					color:#fff!important;
				}';
			} elseif (${'button0' . $i . '_outline_hover'} == 'd--button-outline-hover-halftransparent') {
				$styles .= '
				.d--button-type' . $i . ' a:hover{
					background: rgba(' . ${'button0' . $i . '_color_rgb'}[0] . ',' . ${'button0' . $i . '_color_rgb'}[1] . ',' . ${'button0' . $i . '_color_rgb'}[2] . ',0.09);
					border-color:transparent;
					color:rgba(' . ${'button0' . $i . '_color_rgb'}[0] . ',' . ${'button0' . $i . '_color_rgb'}[1] . ',' . ${'button0' . $i . '_color_rgb'}[2] . ',0.7)!important;
				}';
			} elseif (${'button0' . $i . '_outline_hover'} == 'd--button-outline-hover-down') {
				$styles .= '
				.d--button-type' . $i . ' a:hover{
					box-shadow: 0 0 0 hsla(' . ${'jinr_button' . $i . '_shadow_color'}[0] . ',' . ${'jinr_button' . $i . '_shadow_color'}[1] . '%,' . (${'jinr_button' . $i . '_shadow_color'}[2] - 18) . '%,' . '0);
				}';
			} elseif (${'button0' . $i . '_outline_hover'} == 'd--button-outline-hover-fillleft') {
				if (${'button0' . $i . '_color_type'} == 'gradation') {
					if (${'button0' . $i . '_gradation_select'} == 'd--jinr-gradation1') {
						${'jinr_button' . $i . '_color'} = $gradation1_color1;
					} elseif (${'button0' . $i . '_gradation_select'} == 'd--jinr-gradation2') {
						${'jinr_button' . $i . '_color'} = $gradation2_color1;
					} elseif (${'button0' . $i . '_gradation_select'} == 'd--jinr-gradation3') {
						${'jinr_button' . $i . '_color'} = $gradation3_color1;
					}
				} else {
					${'jinr_button' . $i . '_color'} = ${'button0' . $i . '_color'};
				}
				$styles .= '
				.d--button-type' . $i . ' a::before{
					background: ' . ${'jinr_button' . $i . '_color'} . ';
				}';
			} elseif (${'button0' . $i . '_outline_hover'} == 'd--button-outline-hover-fillcenter') {
				${'jinr_button' . $i . '_color'} = ${'button0' . $i . '_color'};
				$styles .= '
				.d--button-type' . $i . ' a:hover{
					background: ' . ${'jinr_button' . $i . '_color'} . ';
				}
				.d--button-type' . $i . ' a:hover::before,
				.d--button-type' . $i . ' a:hover::after{
					width: 0;
					background: ' . ${'jinr_button' . $i . '_color'} . ';
				}
				';
			}
		}
	}


	// グラデーション登録読み込み
	$styles .= <<<EOM
	.d--jinr-gradation1{
		background: linear-gradient($gradation1_deg, $gradation1_color1, $gradation1_color2);
	}
	.d--jinr-gradation2{
		background: linear-gradient($gradation2_deg, $gradation2_color1, $gradation2_color2);
	}
	.d--jinr-gradation3{
		background: linear-gradient($gradation3_deg, $gradation3_color1, $gradation3_color2);
	}
EOM;

	// 404にテーマカラーを反映させる
	$styles .= <<<EOM
	#postContent #postCategoryBox .cat-item::after{
		border-color: $theme_color!important;
	}
	#postContent #postCategoryBox .cat-item .children .cat-item::after{
		background-color: $theme_color!important;
	}
	.a--notfound-headtitle{
		color: $theme_color!important;
	}
	#HeaderSearchForm{
		opacity:0;
	}
	.o--hamburger-menu-container{
		opacity:0;
	}
EOM;

	// 執筆画面の背景色変更
	$styles .= <<<EOM
	body.wp-admin.d--main-style-transparent .editor-styles-wrapper,
	body.wp-admin.d--main-style-transparent .editor-styles-wrapper .jinr-category-name{
		background-color:$bg_color;
	}
EOM;

	// 記事スライドのスクロールバーの色を変更
	$styles .= <<<EOM
	.d--postlist-slider::-webkit-scrollbar-thumb,
	#jinrRelatedPostInner .o--postlist-inner::-webkit-scrollbar-thumb{
		background:rgba($text_color_rgba[0],$text_color_rgba[1],$text_color_rgba[2],1);
	}
EOM;

	$styles .= <<<EOM
.d--labeling-act-border{
	border-color: rgba($text_color_rgba[0],$text_color_rgba[1],$text_color_rgba[2],0.18);
}
.c--labeling-act.d--labeling-act-solid,
.c--labeling-small-act.d--labeling-act-solid{
	background-color: rgba($text_color_rgba[0],$text_color_rgba[1],$text_color_rgba[2],0.03);
}
.a--labeling-act,
.c--labeling-small-act{
	color: rgba($text_color_rgba[0],$text_color_rgba[1],$text_color_rgba[2],0.6);
}
.a--labeling-small-act span{
	background-color: rgba($text_color_rgba[0],$text_color_rgba[1],$text_color_rgba[2],0.21);
}
.d--labeling-act-strong{
	background-color: rgba($text_color_rgba[0],$text_color_rgba[1],$text_color_rgba[2],0.045);
}
.d--labeling-act-strong .a--labeling-act{
	color: rgba($text_color_rgba[0],$text_color_rgba[1],$text_color_rgba[2],0.75);
}
EOM;

	$styles .= <<<EOM
	.b--jinr-compare .o--compare-child .c--compare-label{
		background-color:$theme_color;
		color:#ffffff;
	}
	.b--jinr-compare .o--compare-child{
		border-color:rgba($text_color_rgba[0],$text_color_rgba[1],$text_color_rgba[2],0.15);
	}
	.b--jinr-compare .o--compare-child .c--compare-content{
		border-color:rgba($text_color_rgba[0],$text_color_rgba[1],$text_color_rgba[2],0.075);
	}
EOM;


	if (!is_customize_preview()) {
		$styles = preg_replace('/\r\n|\n|\r|\t/', '', $styles);
	}
	echo '<style type="text/css">' . $styles . '</style>';
}
add_action('wp_head', 'jinr_customize_inline_style');
add_action('admin_head', 'jinr_customize_inline_style');
