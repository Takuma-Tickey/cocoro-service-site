<?php get_header(); ?>
<?php
//表示設定の値
$jinr_thumbnail_display = get_post_meta($post->ID, '_jinr_thumbnail_display', true);
?>

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
					<?php
					$jinr_author_id = get_the_author_meta('ID');
					if (get_the_category() != false) {
						$category = get_the_category();
						$cat_id   = $category[0]->cat_ID;
						$cat_name = $category[0]->cat_name;
						$cat_slug = $category[0]->category_nicename;
						$cat_link = get_category_link($cat_id);
					}

					$post_youtube_url = get_post_meta(get_the_ID(), '_jinr_url_youtube', true);
					if (strpos($post_youtube_url, "watch") != false) {
						$youtube_id = substr($post_youtube_url, (strpos($post_youtube_url, "=") + 1));
					} else {
						$youtube_id = substr($post_youtube_url, (strpos($post_youtube_url, "youtu.be/") + 9));
					}

					// wp_localize_scriptでidをyoutube.jsに値を渡す
					wp_localize_script('jinr-youtube-script', 'YoutubeInfo', array(
						'id' => $youtube_id,
					));
					?>

					<header id="postHeader">
						<div id="postHeaderInner" class="<?php echo jinr__article_width(); ?>">
							<div id="jinrPostMeta">
								<?php get_template_part('object/time'); ?>
								<?php if (get_the_category() != false) : ?>
									<div class="a--post-cat category-<?php echo $cat_slug; ?>"><a href="<?php echo $cat_link ?>"><span class="jif jin-ifont-archive" aria-hidden="true"></span><?php echo $cat_name; ?></a></div>
								<?php endif; ?>
								<?php
								if (get_post_meta($post->ID, '_jinr_representations_display', true) === '') : ?>
									<?php if (jinr__representation_display_category_side() === true && jinr__representation_display_post() === true) : ?>
										<?php
										$display_category = false; // 表示するカテゴリーかどうかのフラグ
										$none_display_category_ids = explode(",", jinr__representations_none_display_ids());
										foreach ($none_display_category_ids as $none_display_category_id) {
											$current_category_id = $cat_id;
											if ($current_category_id == $none_display_category_id) {
												$display_category = true;
											}
										}
										if ($display_category === false) :
										?>
											<div class="c--labeling-small-act <?php echo jinr__representation_design_type(); ?>"><span class="a--labeling-small-act"><?php echo jinr__representations_pr_text_category_side(); ?></span></div>
										<?php endif; ?>
									<?php endif; ?>
								<?php endif; ?>
							</div>
							<h1 id="jinrPostTitle" class="c--entry-title"><?php the_title(); ?></h1>

						</div>
						<?php if (jinr__eyecatch_off() == true) : ?>
							<?php if ($jinr_thumbnail_display !== "1") : ?>
								<?php if (!empty($post_youtube_url)) : ?>
									<div id="jinrPostThumb" <?php jinr_jinrPostThumb_class_insert(); ?>>
										<div id="jinrYoutubeVideo"></div>
										<div class="a--pip-stop"></div>
										<div class="a--pip-background"></div>
									</div>
								<?php elseif (has_post_thumbnail()) : ?>
									<?php if (jinr__thumbnail_original_used() !== true) : ?>
										<div id="jinrPostThumb" <?php jinr_jinrPostThumb_class_insert(); ?>>
											<?php echo the_post_thumbnail('large_size'); ?>
										</div>
									<?php else : ?>
										<div id="jinrPostThumb" <?php jinr_jinrPostThumb_class_insert(); ?>>
											<?php
											$imgID = get_post_thumbnail_id($post->ID);
											$img = wp_get_attachment_image_src($imgID, 'full', false, '');
											$imgAlt = get_post_meta($imgID, '_wp_attachment_image_alt', true);
											$imgWidth = $img[1];
											$imgHeight = $img[2];
											?>
											<img src="<?php echo esc_url($img[0]); ?>" alt="<?php echo esc_html($imgAlt); ?>" height="<?php echo esc_html($imgHeight); ?>" width="<?php echo esc_html($imgWidth); ?>" />
										</div>
									<?php endif; ?>
								<?php endif; ?>
							<?php endif; ?>
						<?php endif; ?>
					</header>
					<div class="c--writer d--display-none"><?php the_author(); ?></div>

					<section id="postContent" class="<?php echo jinr__article_width(); ?> <?php echo jinr__font_size(); ?> <?php echo jinr__font_size_sp(); ?>">
						<?php if (get_post_meta($post->ID, '_jinr_representations_display', true) === '') : ?>
							<?php if (jinr__representation_display_postfirst() === true && jinr__representation_display_post() === true) : ?>
								<?php
								$display_category = false; // 表示するカテゴリーかどうかのフラグ
								$none_display_category_ids = explode(",", jinr__representations_none_display_ids());
								foreach ($none_display_category_ids as $none_display_category_id) {
									$current_category_id = $cat_id;
									if ($current_category_id == $none_display_category_id) {
										$display_category = true;
									}
								}
								if ($display_category === false) :
								?>
									<div class="c--labeling-act <?php echo jinr__representation_design_type(); ?>"><span class="a--labeling-act"><?php echo jinr__representations_pr_text_postfirst(); ?></span></div>
								<?php endif; ?>
							<?php endif; ?>
						<?php endif; ?>
						<?php if (jinr_isset_widets('post-start-widget', true)) : ?>
							<section id="jinr-post-start-widget-area" class="o--widget-area">
								<div id="jinr-post-start-widget-area-inner">
									<?php dynamic_sidebar('post-start-widget'); ?>
								</div>
							</section>
						<?php endif; ?>

						<?php the_content(); ?>

						<?php get_template_part('object/nextpage'); ?>

						<?php get_template_part('object/sns-share-selected'); ?>

						<?php if (jinr_isset_widets('post-end-widget', true)) : ?>
							<section id="jinr-post-end-widget-area" class="o--widget-area">
								<div id="jinr-post-end-widget-area-inner">
									<?php dynamic_sidebar('post-end-widget'); ?>
								</div>
							</section>
						<?php endif; ?>

						<?php
						$arr = get_the_tags();
						if ($arr) {
							echo '<div id="postTagBox">';
							foreach ((array) $arr as $tag) {
								echo '<a href="' . get_tag_link($tag->term_id) . '">#' . $tag->name . '</a>';
							}
							echo '</div>';
						}
						?>
						<?php if (!get_post_meta($post->ID, '_jinr_ads_display', true) == "1") : ?>
							<?php get_template_part('ad-finish'); ?>
						<?php endif; ?>

						<?php if (jinr__comment_remove()) : ?>
							<?php comments_template(); ?>
						<?php endif; ?>

						<?php if (jinr__profile_display_postbottom() == true) : ?>
							<?php if (!get_post_meta($post->ID, '_jinr_profile_display', true) == "1") : ?>
								<div class="jinr-profile-label ef"><span><?php echo jinr__profile_label_text(); ?></span></div>
								<?php echo do_shortcode('[jinr_profile design="d--profile-author" author_id="' . $jinr_author_id . '"]'); ?>
							<?php endif; ?>
						<?php endif; ?>

					</section>

					<footer id="postFooter">
						<?php
						// var_dump(get_the_author_meta('ID'));
						if (jinr__sns_share_bottom_display()) : ?>
							<?php if (!get_post_meta($post->ID, '_jinr_snsbutton_display', true) == "1") : ?>
								<div id="snsShareBottom" class="<?php echo jinr__sns_share_design(); ?> <?php echo jinr__sns_share_color(); ?> <?php echo jinr__sns_share_color() == "d--sns-share-color-solid" ? "t--round" : ""; ?>">
									<div id="snsShareBottomInner">
										<?php get_template_part('object/sns-share'); ?>
									</div>
								</div>
							<?php endif; ?>
						<?php endif; ?>
					</footer>
				</article>

		<?php endwhile;
		endif; ?>

		<?php if (jinr__post_column_style() == 't--post-two-column') : ?>
			<?php if (!get_post_meta($post->ID, '_jinr_sidebar2col_display', true) == "1") : ?>
				<?php get_sidebar(); ?>
			<?php endif; ?>
		<?php else : ?>
			<?php if (get_post_meta($post->ID, '_jinr_sidebar1col_display', true) == "1") : ?>
				<?php get_sidebar(); ?>
			<?php endif; ?>
		<?php endif; ?>
	</div>
</main>

<?php if (jinr_isset_widets('post-bottom-widget', true)) : ?>
	<section id="jinr-postbottom-widget-area" class="o--widget-area t--padding t--main-width">
		<div id="jinr-postbottom-widget-area-inner">
			<?php dynamic_sidebar('post-bottom-widget'); ?>
		</div>
	</section>
<?php endif; ?>

<?php if (!get_post_meta($post->ID, '_jinr_ads_display', true) == "1") : ?>
	<?php get_template_part('ad-related'); ?>
<?php endif; ?>

<?php if (jinr__related_post_remove() == true) : ?>
	<?php if (!get_post_meta($post->ID, '_jinr_relatedpost_display', true) == "1") : ?>
		<?php get_template_part('object/related-post'); ?>
	<?php endif; ?>
<?php endif; ?>

<?php get_footer(); ?>