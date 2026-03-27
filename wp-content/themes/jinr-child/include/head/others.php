<?php
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

if (is_home()) {
	$canonical_url  = get_bloginfo('url');
} elseif (is_category()) {
	$canonical_url = get_category_link(get_query_var('cat'));
} elseif (is_page()) { 
	$canonical_url = get_permalink();
	if ( $paged > 1) {
        $canonical_url = get_permalink();
    }
    if( ! get_post_meta($post->ID, '_jinr_canonical_display',true) == null ){
        $canonical_url = get_post_meta($post->ID, '_jinr_canonical_display',true);
    }
} elseif( is_singular() ){
    $canonical_url = get_permalink();
    if ( $paged > 1 ) {
        $canonical_url = get_permalink();
    }
    if( ! get_post_meta($post->ID, '_jinr_canonical_display',true) == null ){
        $canonical_url = get_post_meta($post->ID, '_jinr_canonical_display',true);
    }
} elseif(is_404()) {
	$canonical_url =  get_bloginfo('url')."/404";
} else {
	$canonical_url  = get_bloginfo('url');
}
?>

<!-- canonical は Yoast SEO に任せる -->
<!-- <link rel="canonical" href="<?php echo $canonical_url; ?>"> -->

<?php if ( ! jinr__fb_code() == '' ) : ?>
<meta property="fb:app_id" content="<?php echo jinr__fb_code(); ?>">
<?php endif; ?>

<?php if( ! has_site_icon()): ?>
<link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/lib/img/favicon.ico">
<?php endif; ?>
