<?php
//カテゴリーページへリダイレクト
jinr_page_to_category_redirect();
?>
<?php get_header(); ?>
<?php
//表示設定の値
$jinr_title_display = get_post_meta($post->ID, '_jinr_title_display', true);
$jinr_thumbnail_display = get_post_meta($post->ID, '_jinr_thumbnail_display', true);

function jinr_article_style_class()
{
	if (jinr__home_column_style() == 't--home-two-column') {
		if (is_home() || is_front_page()) {
			echo jinr__article_width();
		}
	}
}
?>
<?php if (is_front_page()) : ?>
	<?php if (jinr_isset_widets('toppage-widget', true)) : ?>
		<section id="jinr-posttop-widget-area" class="o--widget-area t--main-width t--padding">
			<div id="jinr-posttop-widget-area-inner">
				<?php dynamic_sidebar('toppage-widget'); ?>
			</div>
		</section>
	<?php endif; ?>
<?php endif; ?>

<main id="mainContent" class="<?php jinr_mainContent_class_insert(); ?>">
	<div id="mainContentInner" class="t--main-width">
		<?php
		if (have_posts()) :
			while (have_posts()) :
				the_post();
		?>
				<article id="jinrArticle" class="<?php jinr_jinrArticle_class_insert(); ?> <?php jinr_article_style_class(); ?>">

					<?php

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

					// この動画のサムネイルを取得する
					function jinr_youtube_thumbnail($youtube_id)
					{
						$thumb_size        = "maxresdefault.jpg";
						$youtube_thumb = sprintf("http://img.youtube.com/vi/%s/%s", $youtube_id['v'], $thumb_size);
					}
					?>
					<?php if ($jinr_title_display !== "1" || $jinr_thumbnail_display !== "1") : ?>
						<header id="postHeader">
							<?php if ($jinr_title_display !== "1") : ?>
								<div id="postHeaderInner" class="<?php echo jinr__article_width(); ?>">
									<h1 id="jinrPostTitle" class="c--entry-title"><?php the_title(); ?></h1>
								</div>
							<?php endif; ?>
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
											<?php
											$imgID = get_post_thumbnail_id($post->ID);
											$img = wp_get_attachment_image_src($imgID, 'full', false, '');
											$imgAlt = get_post_meta($imgID, '_wp_attachment_image_alt', true);
											$imgWidth = $img[1];
											$imgHeight = $img[2];
											?>
											<div id="jinrPostThumb" <?php jinr_jinrPostThumb_class_insert(); ?>>
												<img src="<?php echo esc_url($img[0]); ?>" alt="<?php echo esc_html($imgAlt); ?>" height="<?php echo esc_html($imgHeight); ?>" width="<?php echo esc_html($imgWidth); ?>" />
											</div>
										<?php endif; ?>
									<?php endif; ?>
								<?php endif; ?>
							<?php endif; ?>
						</header>
					<?php endif; ?>

					<div class="c--writer d--display-none"><?php the_author(); ?></div>

					<section id="postContent" class="<?php echo jinr__article_width(); ?> <?php echo jinr__font_size(); ?> <?php echo jinr__font_size_sp(); ?>">
						<?php
						if (get_post_meta($post->ID, '_jinr_representations_display', true) === '') : ?>
							<?php if (jinr__representation_display_postfirst() === true  && jinr__representation_display_page() === true) : ?>
								<div class="c--labeling-act <?php echo jinr__representation_design_type(); ?>"><span class="a--labeling-act"><?php echo jinr__representations_pr_text_postfirst(); ?></span></div>
							<?php endif; ?>
						<?php endif; ?>
						<?php the_content(); ?>
						<?php get_template_part('object/nextpage'); ?>
						<?php get_template_part('object/sns-share-selected'); ?>
						<?php
/**
 * ▼ ページネーション（全投稿・12件/ページ）— フラグメント #jinrPostList を除去
 */
$current_paged = max(1, (int) get_query_var('paged'), (int) get_query_var('page'));

$pager_query = new WP_Query(array(
  'post_type'           => 'post',
  'posts_per_page'      => 12,
  'paged'               => $current_paged,
  'ignore_sticky_posts' => true,
  'no_found_rows'       => false,
  'fields'              => 'ids',
));

if ($pager_query->max_num_pages > 1) {
  global $wp_query;
  $_orig_wp_query = $wp_query;
  $wp_query = $pager_query;

  // ① jinr_pagenation_list_callback() / jinr_pagination() の出力を一旦受け取る
  ob_start();
  if (function_exists('jinr_pagenation_list_callback')) {
    jinr_pagenation_list_callback();
  } elseif (function_exists('jinr_pagination')) {
    jinr_pagination();
  } else {
    echo paginate_links(array(
      'current'   => $current_paged,
      'total'     => (int) $pager_query->max_num_pages,
      'mid_size'  => 2,
      'prev_text' => '← 前へ',
      'next_text' => '次へ →',
      'base'      => trailingslashit(get_permalink()) . 'page/%#%/',
      'format'    => 'page/%#%/',
    ));
  }
  $html = ob_get_clean();

  // ② 付与されているフラグメントを削除
  //   - 終端だけに付く場合／クエリの途中に付く場合の双方に対応
  $html = str_replace('#jinrPostList', '', $html);

  echo $html;

  // 元に戻す
  $wp_query = $_orig_wp_query;
}

wp_reset_postdata();
?>

					</section>

					<footer id="postFooter">
						<?php if (jinr__sns_share_bottom_display()) : ?>
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

		
		
		<?php
			endwhile;
		endif;
		?>

		<?php if (is_front_page()) : ?>
			<?php if (jinr__home_column_style() == 't--home-two-column') : ?>
				<?php get_sidebar(); ?>
			<?php endif; ?>
		<?php else : ?>
			<?php if (jinr__post_column_style() == 't--post-two-column') : ?>
				<?php if (!get_post_meta($post->ID, '_jinr_sidebar2col_display', true) == "1") : ?>
					<?php get_sidebar(); ?>
				<?php endif; ?>
			<?php else : ?>
				<?php if (get_post_meta($post->ID, '_jinr_sidebar1col_display', true) == "1") : ?>
					<?php get_sidebar(); ?>
				<?php endif; ?>
			<?php endif; ?>
		<?php endif; ?>

	</div>
</main>
<?php get_footer(); ?>