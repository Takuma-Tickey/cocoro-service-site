<?php get_header(); ?>

<?php if (jinr_isset_widets('toppage-widget', true)) : ?>
	<section id="jinr-posttop-widget-area" class="o--widget-area t--main-width t--padding">
		<div id="jinr-posttop-widget-area-inner">
			<?php dynamic_sidebar('toppage-widget'); ?>
		</div>
	</section>
<?php endif; ?>

<?php
function jinr_postlist_top_column()
{
	$column = "";
	if (jinr__postlist_style() == 'd--postlist-square d--postlist-square-sp') {
		if (jinr__home_column_style() == 't--home-one-column') {
			$column = "d--postlist-column3";
		} else {
			$column = "d--postlist-column2";
		}
	} else {
		if (jinr__home_column_style() == 't--home-one-column') {
			$column = "d--postlist-column2";
		} else {
			$column = "d--postlist-column1";
		}
	}
	echo $column;
}
?>

<main id="mainContent" class="<?php jinr_mainContent_class_insert(); ?>">
	<div id="mainContentInner" class="t--main-width">
		<article id="jinrArticle" <?php echo jinr__home_column_style() == 't--home-two-column' ? 'class="' . jinr__article_width() . '"' : ''; ?>>
			<section id="jinrPostList" <?php echo jinr__postlist_hover_style() !== 'none' ? 'class="' . jinr__postlist_hover_style() . '"' : ''; ?>>
				<div class="o--postlist-inner <?php echo jinr__postlist_style(); ?> <?php jinr_postlist_top_column(); ?>  selected">
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
			</section>
		</article>

		<?php if (jinr__home_column_style() == 't--home-two-column') : ?>
			<?php get_sidebar(); ?>
		<?php endif; ?>

	</div>
</main>
<?php get_footer(); ?>