<?php if ( ! get_option('jinr_google_adsense_tag') == null ) : ?>
<?php if ( ! is_404() && ! is_search()) : ?>
<?php echo get_option('jinr_google_adsense_tag'); ?>
<?php endif; ?>
<?php endif; ?>

<?php if ( ! get_option('jinr_google_analytics_tag') == null ) : ?>
<?php echo get_option('jinr_google_analytics_tag'); ?>
<?php endif; ?>

<?php if ( ! get_option('jinr_google_seaech_console_tag') == null ) : ?>
<?php echo get_option('jinr_google_seaech_console_tag'); ?>
<?php endif; ?>

<?php if ( ! get_option('jinr_head_tag') == null ) : ?>
<?php echo get_option('jinr_head_tag'); ?>
<?php endif; ?>

<?php if ( is_single() || is_page() ): ?>
<?php if( get_post_meta( $post->ID, '_jinr_headtag_article', true ) ) : ?>
<?php echo get_post_meta( $post->ID, '_jinr_headtag_article', true ); //下の改行はHTML表示用の改行 ?>

<?php endif; ?>
<?php endif; ?>

