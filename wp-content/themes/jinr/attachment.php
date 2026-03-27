<?php get_header(); ?>
<?php if (jinr_isset_widets('post-top-widget', true)) : ?>
	<section id="jinr-posttop-widget-area" class="o--widget-area t--main-width t--padding">
		<div id="jinr-posttop-widget-area-inner">
			<?php dynamic_sidebar('post-top-widget'); ?>
		</div>
	</section>
<?php endif; ?>

<main id="mainContent" class="<?php jinr_mainContent_class_insert(); ?>">
	<div id="mainContentInner" class="t--main-width">
		<?php
		if (have_posts()) :
			while (have_posts()) :
				the_post();
		?>
				<article id="jinrArticle" class="<?php jinr_jinrArticle_class_insert(); ?>">
					<header id="postHeader">
						<div id="postHeaderInner" class="<?php echo jinr__article_width(); ?>">
							<div id="jinrPostMeta">
								<?php get_template_part('object/time'); ?>
							</div>
							<h1 id="jinrPostTitle" class="c--entry-title"><?php the_title(); ?></h1>
						</div>
					</header>

					<div class="c--writer d--display-none"><?php the_author(); ?></div>
					
					<section id="postContent" class="<?php echo jinr__article_width(); ?> <?php echo jinr__font_size(); ?> <?php echo jinr__font_size_sp(); ?>">

						<?php if (wp_attachment_is_image($post->id)) : ?>
							<?php 
								$att_image = wp_get_attachment_image_src( $post->id, "full-size");
								$image_id = attachment_url_to_postid( $att_image[0] );
								$image_alt = get_post_meta(  $image_id, '_wp_attachment_image_alt', true );
							?>
							<a href="<?php echo $att_image[0];?>" target="_blank"><img src="<?php echo $att_image[0];?>" width="<?php echo $att_image[1];?>" height="<?php echo $att_image[2];?>" alt="<?php echo $image_alt; ?>" /></a>
						<?php endif; ?>

					</section>

					<footer id="postFooter">
						<?php if (jinr__sns_share_bottom_display()) : ?>
							<div id="snsShareBottom" class="<?php echo jinr__sns_share_design(); ?> <?php echo jinr__sns_share_color(); ?>">
								<div id="snsShareBottomInner">
									<?php get_template_part('object/sns-share'); ?>
								</div>
							</div>
						<?php endif; ?>
					</footer>

				</article>

		<?php endwhile; endif; ?>

		<?php if (jinr__post_column_style() == 't--post-two-column') : ?>
			<?php get_sidebar(); ?>
		<?php endif; ?>

	</div>
</main>

<?php if ( jinr_isset_widets( 'post-bottom-widget', true ) ) : ?>
	<section id="jinr-postbottom-widget-area" class="o--widget-area t--main-width">
		<div id="jinr-postbottom-widget-area-inner">
			<?php dynamic_sidebar( 'post-bottom-widget' ); ?>
		</div>
	</section>
<?php endif; ?>

<?php get_footer(); ?>