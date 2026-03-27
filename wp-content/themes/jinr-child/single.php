<?php get_header(); ?>
<?php
// 表示設定の値
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
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

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

 <?php
$categories = get_the_category();
$rendered_ids = [];

if ($categories) {
    // 子カテゴリを先に並べる
    usort($categories, function ($a, $b) {
        return count(get_ancestors($b->term_id, 'category')) - count(get_ancestors($a->term_id, 'category'));
    });

    echo '<div class="post-categories">';

    foreach ($categories as $category) {
        if (in_array($category->term_id, $rendered_ids)) continue;

        $parent_ids = get_ancestors($category->term_id, 'category');
        $parent_ids = array_reverse($parent_ids);

        $output = '<div class="a--post-cat">';
        $is_first = true;

        // 親カテゴリ出力
        foreach ($parent_ids as $parent_id) {
            $label_icon = $is_first ? '<span class="jif jin-ifont-archive" aria-hidden="true"></span>' : '';
            $output .= '<a href="' . esc_url(get_category_link($parent_id)) . '">' . $label_icon . esc_html(get_cat_name($parent_id)) . '</a> &gt; ';
            $is_first = false;
        }

        // 子カテゴリ出力
        $label_icon = $is_first ? '<span class="jif jin-ifont-archive" aria-hidden="true"></span>' : '';
        $output .= '<a href="' . esc_url(get_category_link($category->term_id)) . '">' . $label_icon . esc_html($category->name) . '</a>';
        $output .= '</div>';

        echo $output;

        // 出力済みに追加
        $rendered_ids[] = $category->term_id;
        foreach ($parent_ids as $pid) {
            $rendered_ids[] = $pid;
        }
    }

    echo '</div>';
}
?>

            <div id="jinrPostMeta">
              <?php get_template_part('object/time'); ?>
            </div>

            <h1 id="jinrPostTitle" class="c--entry-title"><?php the_title(); ?></h1>

          </div>

          <?php if (jinr__eyecatch_off() == true && $jinr_thumbnail_display !== "1" && has_post_thumbnail()) : ?>
            <div id="jinrPostThumb" <?php jinr_jinrPostThumb_class_insert(); ?>>
              <?php
				// echo the_post_thumbnail('large_size'); 
				?>
				<?php 
				//the_post_thumbnail('large_size') を 720×405（2倍解像度でも十分）を使うように変更
				echo wp_get_attachment_image(
	get_post_thumbnail_id(),
	'hero_size',
	false,
	[
		'loading' => 'eager',
		'fetchpriority' => 'high',
		'decoding' => 'async',
	]
);
				?>
            </div>
          <?php endif; ?>

        </header>
		  <div class="c--writer d--display-none"><?php the_author(); ?></div>

        <section id="postContent" class="<?php echo jinr__article_width(); ?> <?php echo jinr__font_size(); ?> <?php echo jinr__font_size_sp(); ?>">
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
          <?php if (jinr__sns_share_bottom_display()) : ?>
            <div id="snsShareBottom" class="<?php echo jinr__sns_share_design(); ?> <?php echo jinr__sns_share_color(); ?>">
              <div id="snsShareBottomInner">
                <?php get_template_part('object/sns-share'); ?>
              </div>
            </div>
          <?php endif; ?>
        </footer>

      </article>

		<?php endwhile;
		endif; ?>

    <?php if (jinr__post_column_style() == 't--post-two-column') : ?>
      <?php get_sidebar(); ?>
    <?php endif; ?>
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
