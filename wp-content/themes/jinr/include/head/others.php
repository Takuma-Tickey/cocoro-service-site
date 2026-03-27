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
}elseif( is_singular() ){
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
} ?>
<link rel="canonical" href="<?php echo $canonical_url; ?>">
<meta property="og:site_name" content="<?php bloginfo( 'name' ); ?>">
<?php if ( ! jinr__fb_code() == '' ) : ?>
<meta property="fb:app_id" content="<?php echo jinr__fb_code(); ?>">
<?php endif; ?>
<meta name="twitter:card" content="<?php echo jinr__tw_type(); ?>">
<?php if ( ! jinr__tw_name() == '' ) : ?>
<meta name="twitter:site" content="<?php echo jinr__tw_name(); ?>">
<?php endif; ?>
<?php if( ! has_site_icon()): ?>
<link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/lib/img/favicon.ico">
<?php endif; ?>