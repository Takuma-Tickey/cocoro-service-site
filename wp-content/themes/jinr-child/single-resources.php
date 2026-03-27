<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head prefix="og: https://ogp.me/ns# fb: https://ogp.me/ns/fb# article: https://ogp.me/ns/article#">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1,minimum-scale=1.0">
	<?php
	get_template_part('include/head/ogp');
	get_template_part('include/head/description');
	get_template_part('include/head/noindex');
	get_template_part('include/head/keywords');
	get_template_part('include/head/others');
	get_template_part('include/head/tags');
	wp_head();
	get_template_part('include/head/preload');

	$info_display_ids = explode(",", jinr__info_display_none());
	?>
</head>

<body <?php body_class(); ?>>
	<?php if (!get_option('jinr_body_start_tag') == "") : ?>
		<?php echo get_option('jinr_body_start_tag'); ?>
	<?php endif; ?>
	<div id="wrapper" class="<?php jinr_wrapper_class_insert(); ?>">

		<?php
	$header_display_ids = explode(",", jinr__header_postpage_display_ids());
    $page_title = get_the_title(get_option( 'page_on_front' ));
?>
<header id="commonHeader" class="<?php jinr_commonHeader_class_insert(); ?>">
                <div id="commonHeaderInner" class="t--main-width t--padding">
	<?php get_template_part('object/logo'); ?>
	<?php get_template_part('object/hamburger'); ?>

</div>

    <?php if ( is_home() || is_front_page() ) : ?>
        <?php if ( jinr__spmenu_toppage_display() == 'on') : ?>
            <?php get_template_part('object/spmenu'); ?>
        <?php endif; ?>
    <?php else: ?>
        <?php get_template_part('object/spmenu'); ?>
    <?php endif; ?>

</header>
		
		<?php
		$grad_class = '';
		if (jinr__header_bgcolor_type() == 'gradation') {
			$grad_class = jinr__header_bg_gradation_select();
		}
		if (jinr__header_style() !== 'd--header-style-default') {
			echo '<div class="a--header-style-parts' . ' ' . jinr__header_tracking() . ' ' . $grad_class . '"></div>';
		}
		?>

		<?php if (is_home() || is_front_page()) : ?>
			<?php get_template_part('object/main-visual'); ?>
		<?php else : ?>
			<?php if (jinr__main_visual_type() == 'type03-stillimage' && jinr__stillimage_display() == true) : ?>
				<?php get_template_part('object/main-visual/stillimage'); ?>
			<?php endif; ?>
		<?php endif; ?>

<main id="mainContent" class="<?php jinr_mainContent_class_insert(); ?>">
    <div id="mainContentInner" class="t--main-width" style="padding-top:0;">

        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

            <article id="jinrArticle" class="<?php jinr_jinrArticle_class_insert(); ?>">

                <header id="postHeader">
                    <div id="postHeaderInner" class="<?php echo jinr__article_width(); ?>">
                        <h1 id="jinrPostTitle" class="c--entry-title"><?php the_title(); ?></h1>
                    </div>

                    <?php if (has_post_thumbnail()) : ?>
                        <div id="ResourcesThumb" <?php jinr_jinrPostThumb_class_insert(); ?>>
                            <?php the_post_thumbnail('large_size'); ?>
                        </div>
                    <?php endif; ?>
                </header>

                <section id="postContent" class="<?php echo jinr__article_width(); ?> <?php echo jinr__font_size(); ?> <?php echo jinr__font_size_sp(); ?>">
                    <?php the_content(); ?>
                </section>

            </article>

        <?php endwhile; endif; ?>

        <!-- <?php // get_sidebar(); ?> -->
		
		<aside id="ResourcesSideBar" class="o--widget-area">
			<div class="ef">下記フォームに必要事項を入力し、「ダウンロード」ボタンを押してください。</div>
			<div id="ResourcessideBarWidget">
                <?php echo do_shortcode('[contact-form-7 id="879b531" title="資料ダウンロード"]'); ?>
            </div>
        </aside>

    </div>
</main>

<script>
document.addEventListener('wpcf7mailsent', function (event) {
  if (event.detail.contactFormId === 99) {
    window.location.href = "/resources-thanks"; // 相対パスでOK
  }
}, false);
</script>

<?php get_footer(); ?>