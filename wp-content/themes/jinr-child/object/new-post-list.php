<?php
// カテゴリー情報を取得
$category = get_the_category();
if (isset($category[0])) {
	$cat_id   = $category[0]->cat_ID;
	$cat_name = $category[0]->cat_name;
	$cat_slug = $category[0]->category_nicename;
	$cat_url  = get_category_link($cat_id);
} else {
	$cat_name = '';
}
$post_youtube_time   = get_post_meta(get_the_ID(), '_jinr_time_youtube', true);
$post_youtube_thumb  = get_post_meta(get_the_ID(), '_jinr_thumb_youtube', true);
?>
<article class="o--postlist-item" data-id="<?php echo get_the_ID(); ?>">
	<a class="c--post-link" rel="bookmark" href="<?php the_permalink(); ?>">
		<figure class="c--post-image">
			<?php if (has_post_thumbnail()) : ?>
				<?php if (jinr__thumbnail_original_used() !== true) : ?>
					<?php the_post_thumbnail('medium_size'); ?>
					<?php if ($post_youtube_time != null) : ?>
						<span class="a--post-time"><i class="jic jin-ifont-playback" aria-hidden="true"></i><?php echo $post_youtube_time; ?></span>
					<?php endif; ?>
				<?php else : ?>
					<?php
					$imgID = get_post_thumbnail_id($post->ID);
					$img = wp_get_attachment_image_src($imgID, 'full', false, '');
					$imgAlt = get_post_meta($imgID, '_wp_attachment_image_alt', true);
					$imgWidth = $img[1];
					$imgHeight = $img[2];
					?>
					<img src="<?php echo esc_url($img[0]); ?>" alt="<?php echo esc_html($imgAlt); ?>" height="<?php echo esc_html($imgHeight); ?>" width="<?php echo esc_html($imgWidth); ?>" />
					<?php if ($post_youtube_time != null) : ?>
						<span class="a--post-time"><i class="jic jin-ifont-playback" aria-hidden="true"></i><?php echo $post_youtube_time; ?></span>
					<?php endif; ?>
				<?php endif; ?>
			<?php elseif ($post_youtube_thumb) : ?>
				<?php
				$srcset = jinr_youtube_thumbnail_url($post->ID, 'medium') . ' 640w,' . jinr_youtube_thumbnail_url($post->ID, 'small') . ' 320w';
				$sizes = "(max-width:552px) 50vw, 30vw";
				?>
				<img src="<?php echo jinr_youtube_thumbnail_url($post->ID, 'medium'); ?>" loading="lazy" alt="<?php echo $post->post_title; ?>" width="357" height="200" srcset="<?php echo $srcset; ?>" sizes="<?php echo $sizes; ?>" />
				<span class="a--post-time"><i class="jic jin-ifont-playback" aria-hidden="true"></i><?php echo $post_youtube_time; ?></span>
			<?php else : ?>
				<img src="<?php echo jinr_noimage_url('medium'); ?>" loading="lazy" alt="no image" width="357" height="200" />
			<?php endif; ?>
		</figure>
		<div class="c--post-contents">
			<h2 class="a--post-title d--bold entry-title"><?php echo $post->post_title; ?></h2>
			<div class="c--post-meta">
				<div class="a--post-date date updated" datetime="<?php the_time('Y-m-d'); ?>" content="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d'); ?></div>
				<?php if (!$cat_name == '') : ?>
					<span class="a--post-category category-<?php echo $cat_slug; ?>"><?php echo $cat_name; ?></span>
				<?php endif; ?>
			</div>
			<span class="c--writer"><?php the_author(); ?></span>
			<div class="c--post-list-publisher">
				<span><?php bloginfo('name'); ?></span>
			</div>
		</div>
	</a>
</article>