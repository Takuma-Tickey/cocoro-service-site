<?php

//日本語フォント読み込み
function jinr_jp_font_selection() {
	$jpf = "";

	if ( jinr__font_style() == 'd--zenkakugothic' ) {
		$jpf = <<<EOM
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Zen+Kaku+Gothic+New:wght@400;700&display=swap" rel="stylesheet">
EOM;
	}if ( jinr__font_style() == 'd--notosans-thin' ) {
		$jpf = <<<EOM
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300;500&display=swap" rel="stylesheet">	
EOM;
	} elseif ( jinr__font_style() == 'd--kiwimaru' ) {
		$jpf = <<<EOM
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Kiwi+Maru:wght@300;500&display=swap" rel="stylesheet">
EOM;
	} elseif ( jinr__font_style() == 'd--mpr-thin' ) {
		$jpf = <<<EOM
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=M+PLUS+Rounded+1c:wght@300;500&display=swap" rel="stylesheet">
EOM;
	} elseif ( jinr__font_style() == 'd--notoserif' ) {
		$jpf = <<<EOM
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Noto+Serif+JP:wght@400;700&display=swap" rel="stylesheet">
EOM;
	} elseif ( jinr__font_style() == 'd--shipporimincho' ) {
		$jpf = <<<EOM
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Shippori+Mincho:wght@400;700&display=swap" rel="stylesheet">
EOM;
	}
	
	echo $jpf;
}
add_action( 'wp_footer', 'jinr_jp_font_selection' );
add_action( 'admin_print_footer_scripts', 'jinr_jp_font_selection' );



//英語フォント読み込み
function jinr_en_font_selection() {
	$ef = "";

if ( jinr__english_font_style() == 'd--roboto' ) {
		$ef = <<<EOM
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
EOM;
	} elseif ( jinr__english_font_style() == 'd--roboto-condensed' ) {
		$ef = <<<EOM
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@400;700&display=swap" rel="stylesheet">
EOM;
	} elseif ( jinr__english_font_style() == 'd--chivo' ) {
		$ef = <<<EOM
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Chivo:wght@300;700&display=swap" rel="stylesheet">
EOM;
	} elseif ( jinr__english_font_style() == 'd--albert-sans' ) {
		$ef = <<<EOM
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Albert+Sans:wght@100;300&display=swap" rel="stylesheet">
EOM;
	} elseif ( jinr__english_font_style() == 'd--montserrat-alternates' ) {
		$ef = <<<EOM
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates:wght@200;400;600&display=swap" rel="stylesheet">
		EOM;
	} elseif ( jinr__english_font_style() == 'd--oxanium' ) {
		$ef = <<<EOM
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Oxanium:wght@200;400;700&display=swap" rel="stylesheet">
EOM;
	} elseif ( jinr__english_font_style() == 'd--nunito' ) {// 丸ゴシック
		$ef = <<<EOM
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;400;700&display=swap" rel="stylesheet">
EOM;
	} elseif ( jinr__english_font_style() == 'd--orbitron' ) {// 丸ゴシック
		$ef = <<<EOM
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;600&display=swap" rel="stylesheet">
EOM;
	} elseif ( jinr__english_font_style() == 'd--garamond' ) {
		$ef = <<<EOM
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=EB+Garamond:ital,wght@1,400;1,600&display=swap" rel="stylesheet">
EOM;
	} elseif ( jinr__english_font_style() == 'd--oleo-script' ) {// スクリプト・手書き
		$ef = <<<EOM
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Oleo+Script:wght@400;700&display=swap" rel="stylesheet">
EOM;
	} elseif ( jinr__english_font_style() == 'd--dancing-script' ) {
		$ef = <<<EOM
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;700&display=swap" rel="stylesheet">
EOM;
	} elseif ( jinr__english_font_style() == 'd--libre' ) {
		$ef = <<<EOM
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Libre+Bodoni:ital,wght@1,400;1,700&display=swap" rel="stylesheet">
EOM;
	} elseif ( jinr__english_font_style() == 'd--josefin-slab' ) {
		$ef = <<<EOM
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Josefin+Slab:wght@400;700&display=swap" rel="stylesheet">
EOM;
	} elseif ( jinr__english_font_style() == 'd--judson' ) {
		$ef = <<<EOM
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Judson:wght@400;700&display=swap" rel="stylesheet">
EOM;
	} elseif ( jinr__english_font_style() == 'd--amiri' ) {
		$ef = <<<EOM
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Amiri:wght@400;700&display=swap" rel="stylesheet">
EOM;
	} 
	echo $ef;
}
add_action( 'wp_footer', 'jinr_en_font_selection' );
add_action( 'admin_print_footer_scripts', 'jinr_en_font_selection' );
