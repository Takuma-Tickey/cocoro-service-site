<?php if ( ! defined( 'WPSEO_VERSION' ) ) : ?>
<?php if ( is_home() ) : ?>
<?php if ( ! get_theme_mod( 'jinr__desc_text' ) == '' ) : ?>
<meta name="description" content="<?php echo get_theme_mod( 'jinr__desc_text' ); ?>">
<?php endif; ?>
<?php elseif ( is_front_page() ) : ?>
<?php if ( ! get_post_meta( $post->ID, '_jinr_description_display', true ) == null ) : ?>
<meta name="description" content="<?php echo get_post_meta( $post->ID, '_jinr_description_display', true ); ?>" >
<?php elseif ( ! get_theme_mod( 'jinr__desc_text' ) == '' ) : ?>
<meta name="description" content="<?php echo get_theme_mod( 'jinr__desc_text' ); ?>">
<?php elseif ( ! empty( $post->post_excerpt ) ) : ?>
<meta name="description" content="<?php echo $post->post_excerpt; ?>" >
<?php else : ?>
<meta name="description" content="<?php echo jinr_auto_desc_func(); ?>" >
<?php endif; ?>
<?php elseif ( is_single() || is_page() ) : ?>
<?php if ( ! get_post_meta( $post->ID, '_jinr_description_display', true ) == null ) : ?>
<meta name="description" content="<?php echo get_post_meta( $post->ID, '_jinr_description_display', true ); ?>" >
<?php elseif ( ! empty( $post->post_excerpt ) ) : ?>
<meta name="description" content="<?php echo $post->post_excerpt; ?>" >
<?php else : ?>
<meta name="description" content="<?php echo jinr_auto_desc_func(); ?>" >
<?php endif; ?>
<?php elseif ( is_category() ) : ?>
<?php
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
?>
<?php if ( ! get_post_meta($target_page_id, '_jinr_description_display', true) == null) :?>
<meta name="description" content="<?php echo get_post_meta($target_page_id, '_jinr_description_display', true); ?>">
<?php else: ?>
<meta name="description" content="<?php echo jinr_category_desc(); ?>" >
<?php endif; ?>
<?php elseif ( is_post_type_archive('cases') ) : ?>
<meta name="description" content="【faag：感謝の気持ちを届けるデジタルチップシステム「CoCoRo」】実際にCoCoRoをご利用・導入いただいている事業者様の声をご紹介します。導入の決め手や効果、使い勝手などをインタビュー形式でお届けしています。">
<?php endif; ?>
<?php endif; // ! defined( 'WPSEO_VERSION' ) を閉じる ?>