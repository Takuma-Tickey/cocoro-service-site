<?php
//全固定ページID取得
$page_ids = get_posts(array(
	'posts_per_page' => -1,
	'fields'         => 'ids',
	'post_type'      => 'page',
));

//変数初期値設定
$edit_category_ids = array();
$target_page_id = "";
$counter = 0;
$pair_ids = array();

foreach ($page_ids as $page_id) {
	$jinr_category = get_post_meta($page_id, '_jinr_category', true);

	//現在のカテゴリーページID
	$cat_id = get_query_var('cat');
	$edit_category_ids[] = $jinr_category;

	$pair_ids += array(
		$page_ids[$counter] => $edit_category_ids[$counter],
	);
	$counter++;
}

$target_page_id = array_search($cat_id, $pair_ids);
$jinr_category_edit_toggle = get_post_meta($target_page_id, '_jinr_category_edit', true);
$custom_category = get_post($target_page_id);
$page_template = get_post_meta($target_page_id, '_wp_page_template', true);
$page_template = str_replace('.php', '', $page_template);
$page_thumbnail = get_the_post_thumbnail_url($target_page_id, 'large_size');

//表示設定の値
$jinr_title_display = get_post_meta($target_page_id, '_jinr_title_display', true);
$jinr_thumbnail_display = get_post_meta($target_page_id, '_jinr_thumbnail_display', true);
$jinr_representation_display = get_post_meta($target_page_id, '_jinr_representations_display', true);
?>


<?php get_header(); ?>

<?php if ($jinr_category_edit_toggle !== false) : ?>
	<?php if (jinr_isset_widets('post-top-widget', true)) : ?>
		<section id="jinr-posttop-widget-area" class="o--widget-area t--main-width t--padding">
			<div id="jinr-posttop-widget-area-inner">
				<?php dynamic_sidebar('post-top-widget'); ?>
			</div>
		</section>
	<?php endif; ?>
<?php endif; ?>

<main id="mainContent" class="<?php jinr_mainContent_class_insert(); ?>">
	<div id="mainContentInner" class="t--main-width <?php if ($jinr_category_edit_toggle !== '1') {
														echo 'd--default-category';
													} ?>">

		<article id="jinrArticle" class="<?php jinr_jinrArticle_class_insert(); ?>">

			<?php if ($jinr_category_edit_toggle == "1") : //カテゴリー作り込み 
			?>
				<?php if ($page_template !== 'template-full-width') : ?>
					<?php if ($jinr_title_display !== "1" && $jinr_thumbnail_display !== "1") : ?>
						<header id="postHeader">
							<?php if ($jinr_title_display !== "1") : ?>
								<div id="postHeaderInner" class="<?php echo $page_template !== 'template-full-width' ? jinr__article_width() : ''; ?>">
									<h1 id="jinrPostTitle" class="c--entry-title"><?php echo get_the_title($target_page_id); ?></h1>
								</div>
							<?php endif; ?>
							<?php if (jinr__eyecatch_off() == true) : ?>
								<?php if ($jinr_thumbnail_display !== "1") : ?>
									<?php if ($page_thumbnail) : ?>
										<?php
										$imgID = get_post_thumbnail_id($target_page_id);
										$img = wp_get_attachment_image_src($imgID, 'full', false, '');
										$imgAlt = get_post_meta($imgID, '_wp_attachment_image_alt', true);
										$imgHidth = $img[1];
										$imgHeight = $img[2];
										?>
										<div id="jinrPostThumb" <?php jinr_jinrPostThumb_class_insert(); ?>>
											<img src="<?php echo esc_url($img[0]); ?>" alt="<?php echo esc_html($imgAlt); ?>" height="<?php echo esc_html($imgHeight); ?>" width="<?php echo esc_html($imgHidth); ?>" />
										</div>
									<?php endif; ?>
								<?php endif; ?>
							<?php endif; ?>
						</header>
					<?php endif; ?>
				<?php endif; ?>

				<?php if ($target_page_id !== false) : ?>
					<section id="postContent" class="<?php echo $page_template !== 'template-full-width' ? jinr__article_width() : ''; ?> <?php echo jinr__font_size(); ?> <?php echo jinr__font_size_sp(); ?>">
						<?php
						if ($jinr_representation_display === '') : ?>
							<?php if (jinr__representation_display_postfirst() === true && jinr__representation_display_custom_category() === true) : ?>
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
						<?php
						echo apply_filters('the_content', $custom_category->post_content);
						?>
						<?php get_template_part('object/sns-share-selected'); ?>
					</section>
					<footer id="postFooter">
						<?php if (jinr__sns_share_bottom_display()) : ?>
							<?php if (!get_post_meta($target_page_id, '_jinr_snsbutton_display', true) == "1") : ?>
								<div id="snsShareBottom" class="<?php echo jinr__sns_share_design(); ?> <?php echo jinr__sns_share_color(); ?> <?php echo jinr__sns_share_color() == "d--sns-share-color-solid" ? "t--round" : ""; ?>">
									<div id="snsShareBottomInner">
										<?php get_template_part('object/sns-share'); ?>
									</div>
								</div>
							<?php endif; ?>
						<?php endif; ?>
					</footer>
				<?php endif; ?>
			<?php else : ?>
				<header id="postHeader">
					<div id="postHeaderInner">
						<span class="d--archive-subtitle ef">CATEGORY</span>
						<h1 id="jinrPostTitle" class="c--entry-title"><?php esc_html(single_cat_title()); ?></h1>
					</div>
				</header>

				<section id="postContent" class="<?php echo jinr__article_width(); ?> <?php echo jinr__font_size(); ?> <?php echo jinr__font_size_sp(); ?>">
					<div id="jinrPostList" <?php echo jinr__postlist_hover_style() !== 'none' ? 'class="' . jinr__postlist_hover_style() . '"' : ''; ?>>
						<div id="<?php echo $cat_id; ?>" class="o--postlist-inner <?php echo jinr__postlist_style(); ?> d--postlist-column2 <?php echo jinr__article_width(); ?> selected">
							<?php if (have_posts()) : ?>
								<?php while (have_posts()) : the_post(); ?>
									<?php get_template_part('object/new-post-list'); ?>
								<?php endwhile; ?>
							<?php else : ?>
								<article class="new-post-list-item">記事がありません</article>
							<?php endif; ?>
							<?php
							if (jinr__postlist_pagenation_style() === 'd--postlist-pagenation') {
								jinr_pagenation_list_callback();
							} elseif (jinr__postlist_pagenation_style() === 'd--postlist-asyn') {
								if ($wp_query->max_num_pages > 1) {
									echo '<div class="jinr-loadmore a--postlist-more" data-cat-id="recent"><span>もっと見る</span></div>';
								}
							}
							?>
						</div>
					</div>
					</sesction>
				<?php endif; ?>

		</article>

		<?php if (jinr__post_column_style() == 't--post-two-column') : ?>
			<?php if ($jinr_category_edit_toggle == "1") : ?>
				<?php if ($page_template !== 'template-full-width') : ?>
					<?php get_sidebar(); ?>
				<?php endif; ?>
			<?php else : ?>
				<?php if (!get_post_meta($post->ID, '_jinr_sidebar2col_display', true) == "1") : ?>
					<?php get_sidebar(); ?>
				<?php endif; ?>
			<?php endif; ?>
		<?php else : ?>
			<?php if (get_post_meta($post->ID, '_jinr_sidebar1col_display', true) == "1") : ?>
				<?php get_sidebar(); ?>
			<?php endif; ?>
		<?php endif; ?>

	</div>
</main>

<?php get_footer(); ?>