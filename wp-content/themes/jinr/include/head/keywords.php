
<?php if ( is_home() ) : ?>
	<?php if ( jinr_top_meta_keyword() !== "" ) : ?>
<meta name="keywords" content="<?php echo jinr_top_meta_keyword(); ?>" >
	<?php endif; ?>
<?php endif; ?>
<?php if ( ! is_home() ) : ?>
<?php if ( is_front_page() ) : ?>
<?php if ( jinr_top_meta_keyword() !== "" ) : ?>
<meta name="keywords" content="<?php echo jinr_top_meta_keyword(); ?>" >
<?php else: ?>
<meta name="keywords" content="<?php echo get_post_meta( $post->ID, '_jinr_keyword_display', true ); ?>" >
<?php endif; ?>
<?php endif; ?>
<?php endif; ?>
<?php if ( ! is_front_page() ) : ?>
<?php if ( is_single() || is_page() ) : ?>
<?php if ( ! get_post_meta( $post->ID, '_jinr_keyword_display', true ) == null ) : ?>
<meta name="keywords" content="<?php echo get_post_meta( $post->ID, '_jinr_keyword_display', true ); ?>" >
<?php endif; ?>
<?php endif; ?>
<?php endif; ?>