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
				<div id="postHeaderInner" class="<?php echo jinr__article_width(); ?>">
				<span class="d--archive-subtitle ef">404 NOT FOUND</span>
					<h1 id="jinrPostTitle" class="c--entry-title">お探しのページが見つかりませんでした</h1>
				</div>
			</header>
			<section id="postContent" class="<?php echo jinr__article_width(); ?> <?php echo jinr__font_size(); ?> <?php echo jinr__font_size_sp(); ?>">
				<p>お探しのページは「記事が削除されている」「URLが変更されている」などの理由で見つかりませんでした。</p>
				<p>よろしければ、以下の方法でページをお探しください。</p>
				<section class="o--notfound-section t--round">
					<p class="a--notfound-headtitle d--bold">
						検索する
					</p>
					<div class="c--notfound-form">
						<?php get_search_form(); ?>
					</div>
				</section>
				<?php
				$tagArr = get_tags(); ?>
				<?php if ($tagArr) : ?>
					<section class="o--notfound-section t--round">
						<p class="a--notfound-headtitle d--bold">
							タグから探す
						</p>
						<?php
						echo '<div id="postTagBox" class="o--notfound-taglist">';
						foreach ((array) $tagArr as $tag) {
							echo '<a href="' . get_tag_link($tag->term_id) . '">' . $tag->name . '</a>';
						}
						echo '</div>';
						?>
					</section>
				<?php endif; ?>
				<section class="o--notfound-section t--round">
					<p class="a--notfound-headtitle d--bold">
						カテゴリーから探す
					</p>
					<ul id="postCategoryBox">
						<?php wp_list_categories(array(
							'title_li' => '',
							'show_count' => '1',
						)); ?>
					</ul>
				</section>
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