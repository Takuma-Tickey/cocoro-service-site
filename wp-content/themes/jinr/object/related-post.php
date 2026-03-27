<?php
$post_type = get_post_type();
if (is_single() && $post_type !== 'post' && $post_type !== 'attachment') {
	return;
}
$query = '';
if (get_the_category() != false) {
	$categories  = get_the_category($post->ID);

	$cat_name    = $categories[0]->cat_name;

	$cat_ID       = $categories[0]->cat_ID;
	$cat_slug       = $categories[0]->slug;

	$category_list = get_term_children($cat_ID, 'category');
	array_push($category_list, $cat_ID);

	$args  = array(
		'post__not_in'   => array($post->ID),
		'posts_per_page' => jinr__postlist_related_num(), // カスタマイザで指定した値を取得
		'category__in'   => $category_list,
		'orderby'        => 'rand',
		'no_found_rows' => true,
	);
	$query = new WP_Query($args);
};
// 関連コンテンツの記事数を取得
$related_post_count = jinr__postlist_related_num();

?>
<?php if ($query != null) : ?>
	<?php if ($query->have_posts()) : ?>
		<section id="jinrRelatedPost" class="<?php jinr_jinrRelatedPost_class_insert(); ?>">
			<div id="jinrRelatedPostInner" class="t--main-width">
				<?php if (!jinr__postlist_related_label() == '') : ?>
					<div class="c--relatedpost-headline">
						<div class="a--relatedpost-maincopy ef"><?php echo jinr__related_post_title(); ?></div>
						<div class="a--relatedpost-subcopy ef"><?php echo jinr__postlist_related_label(); ?></div>
					</div>
				<?php endif; ?>
				<div class="o--postlist-inner d--postlist-slider d--postlist-slider-sp d--postlist-slider-loader">
					<?php while ($query->have_posts()) : $query->the_post(); ?>
						<article class="o--postlist-item d--postlist-hover-up t--round">
							<a class="c--post-link" rel="bookmark" href="<?php the_permalink(); ?>">
								<figure class="c--post-image">
									<?php if (has_post_thumbnail()) : ?>
										<?php if (jinr__thumbnail_original_used() !== true) : ?>
											<?php the_post_thumbnail('medium_size'); ?>
										<?php else : ?>
											<?php
											$imgID = get_post_thumbnail_id($post->ID);
											$img = wp_get_attachment_image_src($imgID, 'full', false, '');
											$imgAlt = get_post_meta($imgID, '_wp_attachment_image_alt', true);
											$imgWidth = $img[1];
											$imgHeight = $img[2];
											?>
											<img src="<?php echo esc_url($img[0]); ?>" alt="<?php echo esc_html($imgAlt); ?>" height="<?php echo esc_html($imgHeight); ?>" width="<?php echo esc_html($imgWidth); ?>" />
										<?php endif; ?>
									<?php else : ?>
										<img src="<?php echo jinr_noimage_url('medium'); ?>" alt="no image" width="255" height="143" />
									<?php endif; ?>
								</figure>
								<div class="c--post-contents">
									<h2 class="a--post-title d--bold entry-title"><?php echo $post->post_title; ?></h2>
									<div class="c--post-meta">
										<div class="a--post-date date updated" datetime="<?php the_time('Y-m-d'); ?>" content="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d'); ?></div>
										<span class="a--post-category category-<?php echo $cat_ID; ?>"><?php $cat = get_the_category();
																										$catname = $cat[0]->cat_name;
																										echo $catname; ?></span>
									</div>
									<span class="c--writer"><?php the_author(); ?></span>
									<div class="c--post-list-publisher">
										<span><?php bloginfo('name'); ?></span>
									</div>
								</div>
							</a>
						</article>
					<?php endwhile;
					wp_reset_postdata(); ?>
				</div>
			</div>
		</section>
	<?php endif; ?>
<?php endif; ?>