<?php
$tag = get_queried_object();
$tag_slug = '';
if ($tag) {
	$tag_slug = $tag->slug;
}

if (is_month()) {
	$nowData = 'data-month="' . get_the_time('m') . '"';
} elseif (is_year()) {
	$nowData = 'data-year="' . get_the_time('Y') . '"';
} elseif (is_day()) {
	$nowData = 'data-day="' . get_the_time('d') . '"';
} else {
	$nowData = 'data-tag="' . $tag_slug . '"';
}
?>

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
		<article id="jinrArticle" class="<?php jinr_jinrArticle_class_insert(); ?>">
			<header id="postHeader">
				<div id="postHeaderInner">
					<?php if (is_month()) : /* 月別アーカイブ */ ?>
						<span class="d--archive-subtitle ef">ARCHIVES</span>
						<h1 id="jinrPostTitle" class="c--entry-title"><?php echo get_the_time('Y'); ?>年<?php echo get_the_time('n'); ?>月</h1>
					<?php elseif (is_year()) : /* 年別アーカイブ */ ?>
						<span class="d--archive-subtitle ef">ARCHIVES</span>
						<h1 id="jinrPostTitle" class="c--entry-title"><?php echo get_the_time('Y'); ?>年</h1>
					<?php elseif (is_tag()) : /* タグアーカイブ */ ?>
						<span class="d--archive-subtitle ef">TAG</span>
						<h1 id="jinrPostTitle" class="c--entry-title"><?php esc_html(single_cat_title()); ?></h1>
					<?php endif; ?>
				</div>
			</header>
			<section id="postContent" class="<?php echo jinr__article_width(); ?> <?php echo jinr__font_size(); ?> <?php echo jinr__font_size_sp(); ?>">
				<div id="jinrPostList" <?php echo jinr__postlist_hover_style() !== 'none' ? 'class="' . jinr__postlist_hover_style() . '"' : ''; ?>>
					<div class="o--postlist-inner <?php echo jinr__postlist_style(); ?> d--postlist-column2 <?php echo jinr__article_width(); ?>" <?php echo $nowData; ?>>
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
			</section>
		</article>

		<?php if (jinr__post_column_style() == 't--post-two-column') : ?>
			<?php get_sidebar(); ?>
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

<?php get_footer(); ?>