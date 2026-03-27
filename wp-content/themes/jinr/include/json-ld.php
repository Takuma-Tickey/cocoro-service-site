<?php
function jinr_json_ld (){
    global $post;
    $category = get_the_category();
    $author_url = jinr__profile_button_link();
    $site_name = trim( get_bloginfo( 'name' ) );
    $site_url = get_bloginfo( 'url' );
    $sep        = jinr__title_sepalater();
    $logo_url = jinr__header_logo_url();
    $logo_size = [];
    if( jinr__header_logo_url() !== "" ){
        $logo_size = jinr_image_width_height($logo_url);
    }else{
        $logo_size["width"] = "";
        $logo_size["height"] = "";
    }
    if( jinr__profile_name() !== "" ){
        $author_name = jinr__profile_name();
    }else{
        if( ! is_404() && ! is_search() ){
            if (isset($post) && property_exists($post, 'post_author')) {
                $author_data = get_userdata($post->post_author);
                if ($author_data) {
                    $author_name = $author_data->display_name ? $author_data->display_name : "";
                } else {
                    $author_name = ""; // no user data found
                }
            } else {
                $author_name = ""; // no post or post_author property
            }
        }
    }

    $facebook = jinr__fb_url();
    $twitter = jinr__tw_url();
    $instagram = jinr__insta_url();
    $line = jinr__line_url();
    $youtube = jinr__youtube_url();

    $item["@context"] = "http://schema.org/";
    $bread["@context"] = "http://schema.org/";

    //パンくず
    if( ! is_front_page() && ! is_home() ){
        $home = jinr_breadcrumb_change_text() !== "" ? jinr_breadcrumb_change_text() : "HOME";
        $bread["@type"] = "";
        if ( is_single() ){
            $bread["@type"] = "BreadcrumbList";
            if ( get_the_category() != false ) {
				$category           = get_the_category();
				$category_hierarchy = get_category_parents( $category[0]->term_id, true, '////' );
				$category_hierarchy = explode( '////', $category_hierarchy );
                $cat_item = [];
                $cat_items = [];
                $counter = 1;
				foreach ( $category_hierarchy as $cat_list ) {
					if ( ! empty( $cat_list ) ) {
                        $get_cat_id = get_cat_ID($cat_list);
                        $get_cat_url = get_category_link($get_cat_id);
                        $get_cat_args = get_category( $get_cat_id );
						$cat_item = [
                            "@type" => "ListItem",
                            "position" => $counter,
                            "name" => $get_cat_args->name,
                            "item" => $get_cat_url,
                        ];
                        $cat_items[] = $cat_item;
                        $counter++;
					}
				}
			}else{
                $cat_items = "";
            }
            
            $bread["itemListElement"] = array(
                $cat_items
            );
        }
        if ( is_category() ){
            $bread["@type"] = "BreadcrumbList";
            $cat_items = "";
            if ( get_the_category() != false ) {
				$category           = get_the_category();
				$category_hierarchy = get_category_parents( $category[0]->term_id, true, '////' );
				$category_hierarchy = explode( '////', $category_hierarchy );
                $cat_item = [];
                $cat_items = [];
                $counter = 1;
				foreach ( $category_hierarchy as $cat_list ) {
					if ( ! empty( $cat_list ) ) {
                        $get_cat_id = get_cat_ID($cat_list);
                        $get_cat_url = get_category_link($get_cat_id);
                        $get_cat_args = get_category( $get_cat_id );
						$cat_item = [
                            "@type" => "ListItem",
                            "position" => $counter,
                            "name" => $get_cat_args->name,
                            "item" => $get_cat_url,
                        ];
                        $cat_items[] = $cat_item;
                        $counter++;
					}
				}
                if( $category[0]->category_parent ){
                    array_pop($cat_items);
                }
			}

            $bread["itemListElement"] = array(
                $cat_items
            );
        }
    }
    echo '<script type="application/ld+json">'.json_encode($bread).'</script>';

    //ページ系
    if ( is_single() || is_page() ) {
        $post_url = get_permalink();
        $post_thumb_small = get_the_post_thumbnail_url(get_the_ID(),'small_size');
        $post_thumb_square = get_the_post_thumbnail_url(get_the_ID(),'thumbnail_size');
        $modtime = get_the_modified_time(DATE_ISO8601);
        $pubtime = get_the_time(DATE_ISO8601);

        if ( ! get_post_meta( $post->ID, '_jinr_description_display', true ) == null ){
            $description = get_post_meta( $post->ID, '_jinr_description_display', true );
        }elseif ( ! empty( $post->post_excerpt ) ){
            $description = $post->post_excerpt;
        }else{
            $description = jinr_auto_desc_func();
        }

        if ( is_page() ) {
            $item["@type"] = "WebPage";
        }else{
            $item["@type"] = "Article";
        }
        $item["mainEntityOfPage"] = $post_url;
        $item["headline"] = $post->post_title;
        $item["datePublished"] = $pubtime;
        $item["dateModified"] = $modtime;
        if ( ! is_front_page() ) {
            $item["description"] = $description;
            $item["image"] = array(
                $post_thumb_small,
                $post_thumb_square,
            );
        }
        if ( is_single() && ! is_singular() ) {
            $item["ArticleSection"] = $category[0]->cat_name;
        }
        $item["author"] = array(
            "@type" => "Person",
            "name" => $author_name,
            "url" => $author_url,
            "jobTitle" => jinr__profile_job(),
            "sameAs" => array(
                $facebook,
                $twitter,
                $instagram,
                $line,
                $youtube,
            )
        );
        $item["publisher"] = array(
            "@type" => "Organization",
            "name" => $site_name,
            "url" => $site_url,
            "logo" => array(
                "@type" => "ImageObject",
                "url" => $logo_url,
                "width" => $logo_size["width"],
                "height" => $logo_size["height"],
            )
        );
    }

    if ( is_front_page() || is_home() ) {
        $item["@type"] = "WebSite";
        $item["name"] = $site_name;
        $item["description"] = get_theme_mod( 'jinr__desc_text' );
        $item["url"] = $site_url;
        $item["author"] = "";
        $item["publisher"] = array(
            "@type" => "Organization",
            "name" => $site_name,
            "url" => $site_url,
            "logo" => array(
                "@type" => "ImageObject",
                "url" => $logo_url,
                "width" => $logo_size["width"],
                "height" => $logo_size["height"],
            )
        );
        $item["datePublished"] = "";
        $item["dateModified"] = "";
        $item["headline"] = "";
        $item["mainEntityOfPage"] = "";
    }
    if ( is_category() ) {
        $current_cat = single_cat_title("", false);
        $cat = get_term_by('name', $current_cat, 'category');
        $catid = $cat->term_id;
        $post_url = get_category_link($catid);

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

        if ($jinr_category_edit_toggle == "1"){//作り込み時
            $title = "";
            $description = "";
            if ( ! get_post_meta($target_page_id, '_jinr_seotitle_display', true) == null){
				$title = get_post_meta($target_page_id, '_jinr_seotitle_display', true);;
			}else{
				$title = get_the_title( $target_page_id ). $sep . $site_name;;
			}
            if ( ! get_post_meta($target_page_id, '_jinr_description_display', true) == null){
                $description = get_post_meta($target_page_id, '_jinr_description_display', true);
            }else{
                $description = jinr_category_desc();
            }
            $post_info = get_post( $target_page_id );

            $item["@type"] = "Article";
            $item["mainEntityOfPage"] = $post_url;
            $item["headline"] = get_the_title($target_page_id);
            $item["description"] = $description;
            $item["author"] = array(
                "@type" => "Person",
                "name" => $author_name,
                "url" => $author_url,
                "jobTitle" => jinr__profile_job(),
                "sameAs" => array(
                    $facebook,
                    $twitter,
                    $instagram,
                    $line,
                    $youtube,
                )
            );
        }else{//一覧
            $title = '「' . single_cat_title( '', false ) . '」カテゴリーの記事一覧' . $sep . $site_name;

            $item["@type"] = "CollectionPage";
            $item["url"] = $post_url;
            $item["name"] = $title;
            $item["description"] = "「".single_term_title( '', false )."」カテゴリーの記事一覧ページです。";
        }

        $item["publisher"] = array(
            "@type" => "Organization",
            "name" => $site_name,
            "url" => $site_url,
            "logo" => array(
                "@type" => "ImageObject",
                "url" => $logo_url,
                "width" => $logo_size["width"],
                "height" => $logo_size["height"],
            )
        );
    }

    if ( is_tag() ) {
        $current_tag = single_tag_title("", false);
        $tag = get_term_by('name', $current_tag, 'post_tag');
        $tag_id = $tag->term_id;
        $post_url = get_tag_link($tag_id);
        $title = '「' . single_tag_title( '', false ) . '」タグの記事一覧' . $sep . $site_name;

        $item["@type"] = "CollectionPage";
        $item["url"] = $post_url;
        $item["name"] = $title;
        $item["description"] = "「".single_term_title( '', false )."」タグの記事一覧ページです。";
        $item["publisher"] = array(
            "@type" => "Organization",
            "name" => $site_name,
            "url" => $site_url,
            "logo" => array(
                "@type" => "ImageObject",
                "url" => $logo_url,
                "width" => $logo_size["width"],
                "height" => $logo_size["height"],
            )
        );
    }

    if ( is_date() ) {
        $post_url = 'https://' . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"];
        if (is_year()) {
            $date = get_query_var('year').'年';
            $title = get_the_time( 'Y年' ) . 'の記事一覧' . $sep . $site_name;
        } elseif (is_month()) {
            $date = get_query_var('year').'年'.get_query_var('monthnum').'月';
            $title = get_the_time( 'Y年m月' ) . 'の記事一覧' . $sep . $site_name;
        }else{
            $date = get_query_var('year').'年'.get_query_var('monthnum').'月'.get_query_var('day').'日';
            $title = get_the_time( 'Y年m月d日' ) . 'の記事一覧' . $sep . $site_name;
        }

        $item["@type"] = "CollectionPage";
        $item["url"] = $post_url;
        $item["name"] = $title;
        $item["description"] = "「".$date."」に作成された記事一覧ページです。";
        $item["publisher"] = array(
            "@type" => "Organization",
            "name" => $site_name,
            "url" => $site_url,
            "logo" => array(
                "@type" => "ImageObject",
                "url" => $logo_url,
                "width" => $logo_size["width"],
                "height" => $logo_size["height"],
            )
        );
    }
    echo '<script type="application/ld+json">'.json_encode($item).'</script>';
}
add_action('wp_footer','jinr_json_ld');