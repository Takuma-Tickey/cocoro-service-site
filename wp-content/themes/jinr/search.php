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
					<span class="d--archive-subtitle ef">SEARCH</span>
					<h1 id="jinrPostTitle" class="c--entry-title">「<?php the_search_query(); ?>」の検索結果は<?php echo $wp_query->found_posts;?>件です</h1>
				</div>
			</header>
			<section id="postContent" class="<?php echo jinr__article_width(); ?> <?php echo jinr__font_size(); ?> <?php echo jinr__font_size_sp(); ?>">
			<?php if(have_posts()): ?>
			<section id="jinrPostList" <?php echo jinr__postlist_hover_style() !== 'none' ? 'class="' . jinr__postlist_hover_style() . '"' : ''; ?>>
				<div class="o--postlist-inner <?php echo jinr__postlist_style(); ?> d--postlist-column2">
					<?php query_posts($query_string.'&posts_per_page=-1'); while(have_posts()) : the_post(); ?>
						<?php get_template_part('object/new-post-list'); ?>
					<?php endwhile; ?>
				</div>
			</section>
			<?php else : ?>
				<p>他のキーワードでお探しいただくか、よろしければ以下の方法で記事をお探しください。</p>
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
							echo '<span class="c--notfound-tagitem"><a href="' . get_tag_link($tag->term_id) . '" class="a--notfound-taglink"># ' . $tag->name . '</a></span>';
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
			<?php endif; ?>
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