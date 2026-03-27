<?php
	$header_display_ids = explode(",", jinr__header_postpage_display_ids());
    $page_title = get_the_title(get_option( 'page_on_front' ));
?>
<header id="commonHeader" class="<?php jinr_commonHeader_class_insert(); ?>">

    <?php if( $page_title == "" ): ?>
        <?php if ( ! is_front_page() ) : ?>
            <?php if ( ! is_page($header_display_ids) && ! is_single($header_display_ids) ) : ?>
                <?php get_template_part('object/header-layout-left'); ?>
            <?php endif; ?>
        <?php else: ?>
            <?php get_template_part('object/header-layout-left'); ?>
        <?php endif; ?>
    <?php else: ?>
        <?php if ( ! is_page($header_display_ids) && ! is_single($header_display_ids) ) : ?>
            <?php get_template_part('object/header-layout-left'); ?>
        <?php endif; ?>
    <?php endif; ?>

    <?php if ( is_home() || is_front_page() ) : ?>
        <?php if ( jinr__spmenu_toppage_display() == 'on') : ?>
            <?php get_template_part('object/spmenu'); ?>
        <?php endif; ?>
    <?php else: ?>
        <?php get_template_part('object/spmenu'); ?>
    <?php endif; ?>

</header>