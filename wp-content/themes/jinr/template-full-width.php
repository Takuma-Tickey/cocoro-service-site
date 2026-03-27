<?php

/**
 * Template Name: カスタムテンプレート
 * Template Post Type: page
 *
 */
?>
<?php
//表示設定の値
$jinr_title_display = get_post_meta(get_the_ID(), '_jinr_title_display', true);
//カテゴリーページへリダイレクト
jinr_page_to_category_redirect();
?>
<?php get_header(); ?>

<?php if (is_front_page()) : ?>
	<?php if (jinr_isset_widets('toppage-widget', true)) : ?>
		<section id="jinr-posttop-widget-area" class="o--widget-area t--main-width t--padding">
			<div id="jinr-posttop-widget-area-inner">
				<?php dynamic_sidebar('toppage-widget'); ?>
			</div>
		</section>
	<?php endif; ?>
<?php endif; ?>

<main id="mainContent" class="<?php echo jinr_mainContent_class_insert(); ?>">
	<div id="mainContentInner" class="t--main-width t--padding">
		<?php
		if (have_posts()) :
			while (have_posts()) :
				the_post();
		?>
				<article id="jinrArticle" class="<?php jinr_jinrArticle_class_insert(); ?>">
					<?php
					if (get_post_meta($post->ID, '_jinr_representations_display', true) === '') : ?>
						<?php if (jinr__representation_display_postfirst() === true  && jinr__representation_display_page() === true) : ?>
							<div class="c--labeling-act <?php echo jinr__representation_design_type(); ?>"><span class="a--labeling-act"><?php echo jinr__representations_pr_text_postfirst(); ?></span></div>
						<?php endif; ?>
					<?php endif; ?>
					<section id="postContent" class="<?php echo jinr__article_width(); ?> <?php echo jinr__font_size(); ?> <?php echo jinr__font_size_sp(); ?>">
						<?php the_content(); ?>
						<?php get_template_part('object/nextpage'); ?>
					</section>

				</article>
		<?php
			endwhile;
		endif;
		?>
	</div>
</main>

<?php get_footer(); ?>