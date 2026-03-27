<?php

add_theme_support( 'title-tag' );

// wp_titleの$sepが「｜」または半角スペースの場合は余分な空白削除
function jinr_title_fix( $title, $sep, $seplocation ) {
	if ( ! $sep || $sep == '｜' ) {
		$title = str_replace( ' ' . $sep . ' ', $sep, $title );
	}

	return $title;
}
add_filter( 'wp_title', 'jinr_title_fix', 10, 3 );

function jinr_title( $title ) {
	global $post;
	$sep        = jinr__title_sepalater();
	$site_name  = trim( get_bloginfo( 'name' ) );
	$post_title = trim( get_the_title() );
	$site_desc = preg_replace('{&lt;br/&gt;}','',get_bloginfo( 'description' ));

	if ( is_home() ) {
		if ( ! empty( $site_desc ) ) {
			$title = $site_name . $sep . $site_desc;
		} else {
			$title = $site_name;
		}
	} elseif ( is_front_page() ) {
		if ( ! get_post_meta( $post->ID, '_jinr_seotitle_display', true ) == null ) {
			$title = get_post_meta( $post->ID, '_jinr_seotitle_display', true );
		} else {
			$title = $site_name . $sep . $site_desc;
		}
	} elseif ( is_page() || is_single() ) {
		if( jinr_title_customize() == "1" ){
			$sep = "";
			$site_name = "";
		}
		if ( ! get_post_meta( $post->ID, '_jinr_seotitle_display', true ) == null ) {
			$title = get_post_meta( $post->ID, '_jinr_seotitle_display', true );
		} else {
			$title = $post_title . $sep . $site_name;
		}
	} elseif ( is_category() ) {
		//全固定ページID取得
		$page_ids = get_posts(array(
			'posts_per_page' => -1,
			'fields'         => 'ids',
			'post_type'      => 'page',
		));

		//変数初期値設定
		$edit_category_ids = array();
		$target_page_id = "";
		$counter = 0;
		$pair_ids = array();

		foreach ($page_ids as $page_id) {
			$jinr_category = get_post_meta($page_id, '_jinr_category', true);

			//現在のカテゴリーページID
			$cat_id = get_query_var('cat');
			$edit_category_ids[] = $jinr_category;

			$pair_ids += array(
				$page_ids[$counter] => $edit_category_ids[$counter],
			);
			$counter++;
		}

		$target_page_id = array_search($cat_id, $pair_ids);
		$jinr_category_edit_toggle = get_post_meta($target_page_id, '_jinr_category_edit', true);
		$custom_category = get_post($target_page_id);
		$title = jinr_category_title() . $sep . $site_name;
		
		if ($jinr_category_edit_toggle == "1"){
			if ( ! get_post_meta($target_page_id, '_jinr_seotitle_display', true) == null){
				$title = get_post_meta($target_page_id, '_jinr_seotitle_display', true);
			}else{
				if( jinr_title_customize() == "1" ){
					$sep = "";
					$site_name = "";
				}
				$title = get_the_title( $target_page_id ). $sep . $site_name;
			}
		}
	} elseif ( is_tag() ) {
		$title = '「' . single_tag_title( '', false ) . '」タグの記事一覧' . $sep . $site_name;
	} elseif ( is_month() ) {
		$title = get_the_time( 'Y年m月' ) . 'の記事一覧' . $sep . $site_name;
	} elseif ( is_year() ) {
		$title = get_the_time( 'Y年' ) . 'の記事一覧' . $sep . $site_name;
	} elseif ( is_search() ) {
		$title = '検索結果' . $sep . $site_name;
	} elseif ( is_404() ) {
		$title = 'ページが見つかりませんでした';
	} else {
		$title = $site_name;
	}
	return $title;
}
add_filter( 'pre_get_document_title', 'jinr_title' );


