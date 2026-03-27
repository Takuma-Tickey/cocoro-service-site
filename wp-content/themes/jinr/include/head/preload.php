<?php
    $logoName = basename(jinr__header_logo_url());
?>
<link rel="preload" href="<?php echo get_template_directory_uri() .'/lib/font/jin-icons/jin-icons.woff' ?>" as="font" type="font/woff" crossorigin>
<?php if( ! jinr__header_logo_url() == ""): ?>
<link rel="preload" href="<?php echo jinr__header_logo_url(); ?>" as="image">
<?php endif;?>
<?php
    if ( is_single() || is_page() ) {
        if (has_post_thumbnail()) {
            $thumbnail = get_the_post_thumbnail_url();
            echo '<link rel="preload" href="' .$thumbnail. '" as="image">';
        }
    }
?>