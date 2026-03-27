<?php
$slider_url1 = jinr__slider_url1();
$slider_url2 = jinr__slider_url2();
$slider_url3 = jinr__slider_url3();
$slider_url4 = jinr__slider_url4();
$slider_url5 = jinr__slider_url5();
$slider_url6 = jinr__slider_url6();
$slider_url = array($slider_url1, $slider_url2, $slider_url3, $slider_url4, $slider_url5, $slider_url6);
$slider_url_count = 0;
$slider_start = true;
foreach ($slider_url as $url) {
	if (!empty($url)) {
		$slider_url_count++;
	}
}
if ($slider_url_count <= 1) {
	$slider_start = false;
}
?>
<section class="o--jinr-mainvisual o--jinr-slider d--slider-design1 <?php echo jinr__slider_animation_speed(); ?> <?php echo jinr__slider_text_color_select(); ?>">
	<div class="o--slider-contents t--main-width t--padding">
		<ul class="c--jinr-slider">
			<?php if (jinr__slider_type_select() == 'd--slider-type-choice') : ?>
				<?php
				for ($count = 1; $count <= 6; $count++) {
					$post_url = 'jinr__slider_url' . $count;
					$post_url_fn = $post_url();
					if (!$post_url() == "") {
						$post_URL = $post_url_fn;
						$post_ID = url_to_postid($post_url());
						$post_title = get_post($post_ID)->post_title;
						$post_youtube_thumb  = get_post_meta($post_ID, '_jinr_thumb_youtube', true);
						$post_link = jinr__slider_link_text();
						if (has_post_thumbnail($post_ID)) {
							$thumbnail_ID = get_post_thumbnail_id($post_ID);
							if (empty($thumbnail_ID)) {
								$medium_replace = jinr_noimage_url('medium');
								$large_replace = jinr_noimage_url('large');
							} else {
								$medium_info = wp_get_attachment_image_src($thumbnail_ID, 'medium_size');
								$large_info = wp_get_attachment_image_src($thumbnail_ID, 'large_size');
								$medium_replace = isset($medium_info[0]) ? $medium_info[0] : '';
								$large_replace = isset($large_info[0]) ? $large_info[0] : '';
								if ($large_info[2] == 765 && $large_info[1] == 1360) {
									$large_replace = isset($large_info[0]) ? $large_info[0] : '';
								}
							}
							$slider_class = '';
							if ($slider_start == true && $count == 1) {
								$slider_class = 'd--slider-active';
							} elseif ($slider_start == false) {
								$slider_class = 'd--slider-nonactive';
							}
				?>
							<li class="a--slider-item <?php if ($slider_start == true && $count == 1) {
															echo 'd--slider-active';
														} elseif ($slider_start == false && $count == 1) {
															echo 'd--slider-nonactive';
														} else {
															echo '';
														} ?>">
								<div class="o--slider-contents-wrapper">
									<div class="a--slider-thumbnail t--round">
										<a href="<?php echo $post_URL; ?>">
											<img src="<?php echo $large_replace; ?>" width="640" height="360" srcset="<?php echo $large_replace; ?> 2048w, <?php echo $medium_replace; ?> 1284w" sizes="(max-width: 829px) 100vw, (max-width: 1024px) 45vw, 55vw">
										</a>
									</div>
									<div class="o--slider-wrapper">
										<div class="a--slider-item-count d--bold"></div>
										<div class="c--slider-wrapper">
											<div class="a--slider-title d--bold-sp"><a href="<?php echo $post_URL; ?>"><?php echo $post_title; ?></a></div>
											<div class="c--slider-wrapper-inner">
												<div class="b--jinr-block b--jinr-button a--slider-button ef"><span class="a--slider-button-deco"></span><a href="<?php echo $post_URL; ?>"><?php echo $post_link; ?></a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</li>
						<?php
						} else {
							$medium = jinr_youtube_thumbnail_url($post_ID, 'medium');
							$large = jinr_youtube_thumbnail_url($post_ID, 'large');
							$post_youtube_time   = get_post_meta($post_ID, '_jinr_time_youtube', true);
						?>
							<li class="a--slider-item <?php if ($slider_start == true && $count == 1) {
															echo 'd--slider-active';
														} elseif ($slider_start == false && $count == 1) {
															echo 'd--slider-nonactive';
														} else {
															echo '';
														} ?>">
								<div class="o--slider-contents-wrapper">
									<div class="a--slider-thumbnail t--round">
										<a href="<?php echo $post_URL; ?>">
											<img src="<?php echo jinr_youtube_thumbnail_url($post_ID, 'medium'); ?>" width="640" height="360" srcset="<?php echo $large; ?> 2048w, <?php echo $medium; ?> 1284w" sizes="(max-width: 829px) 100vw, (max-width: 1024px) 45vw, 55vw">
										</a>
										<span class="a--slider-time"><i class="jic jin-ifont-playback" aria-hidden="true"></i><?php echo $post_youtube_time; ?></span>
									</div>
									<div class="o--slider-wrapper">
										<div class="a--slider-item-count d--bold"></div>
										<div class="c--slider-wrapper">
											<div class="a--slider-title d--bold-sp"><a href="<?php echo $post_URL; ?>"><?php echo $post_title; ?></a></div>
											<div class="c--slider-wrapper-inner">
												<div class="b--jinr-block b--jinr-button a--slider-button ef"><span class="a--slider-button-deco"></span><a href="<?php echo $post_URL; ?>"><?php echo $post_link; ?></a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</li>
				<?php
						}
					}
				}
				?>
			<?php else : ?>
				<?php
				$args = array(
					'post_type' => 'post',
					'posts_per_page' => 6, // 表示する投稿数
					'order' => 'DESC', // 新着順に並び替え
					'orderby' => 'date' // 投稿日時で並び替え
				);
				$query = new WP_Query($args);

				if ($query->have_posts()) {
					$count = 1;
					while ($query->have_posts()) {
						$query->the_post();
						// 取得した記事を表示するコード
						$post_youtube_thumb  = get_post_meta($post->ID, '_jinr_thumb_youtube', true);
						if (has_post_thumbnail($post->ID)) {
							$thumbnail_ID = get_post_thumbnail_id($post->ID);
							if (empty(has_post_thumbnail())) {
								$medium_replace = jinr_noimage_url('medium');
								$large_replace = jinr_noimage_url('large');
							} else {
								$medium_info = wp_get_attachment_image_src($thumbnail_ID, 'medium_size');
								$large_info = wp_get_attachment_image_src($thumbnail_ID, 'large_size');
								$medium_replace = isset($medium_info[0]) ? $medium_info[0] : '';
								$large_replace = isset($large_info[0]) ? $large_info[0] : '';
								if ($large_info[2] == 765 && $large_info[1] == 1360) {
									$large_replace = isset($large_info[0]) ? $large_info[0] : '';
								}
							}
				?>
							<li class="a--slider-item <?php if ($count == 1) {
															echo 'd--slider-active';
														} ?>">
								<div class="o--slider-contents-wrapper">
									<div class="a--slider-thumbnail t--round">
										<a href="<?php echo get_permalink(); ?>">
											<img src="<?php echo $large_replace; ?>" width="640" height="360" srcset="<?php echo $large_replace; ?> 2048w, <?php echo $medium_replace; ?> 1284w" sizes="(max-width: 829px) 100vw, (max-width: 1024px) 45vw, 55vw">
										</a>
									</div>
									<div class="o--slider-wrapper">
										<div class="a--slider-item-count d--bold"></div>
										<div class="c--slider-wrapper">
											<div class="a--slider-title d--bold-sp"><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></div>
											<div class="c--slider-wrapper-inner">
												<div class="b--jinr-block b--jinr-button a--slider-button ef"><span class="a--slider-button-deco"></span><a href="<?php echo get_permalink(); ?>"><?php echo jinr__slider_link_text(); ?></a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</li>
						<?php } else {
							$medium = jinr_youtube_thumbnail_url($post->ID, 'medium');
							$large = jinr_youtube_thumbnail_url($post->ID, 'large');
							$post_youtube_time   = get_post_meta($post->ID, '_jinr_time_youtube', true);
						?>
							<li class="a--slider-item <?php if ($count == 1) {
															echo 'd--slider-active';
														} ?>">
								<div class="o--slider-contents-wrapper">
									<div class="a--slider-thumbnail t--round">
										<a href="<?php echo get_permalink(); ?>">
											<img src="<?php echo jinr_youtube_thumbnail_url($post->ID, 'medium'); ?>" width="640" height="360" srcset="<?php echo $large; ?> 2048w, <?php echo $medium; ?> 1284w" sizes="(max-width: 829px) 100vw, (max-width: 1024px) 45vw, 55vw">
										</a>
										<span class="a--slider-time"><i class="jic jin-ifont-playback" aria-hidden="true"></i><?php echo $post_youtube_time; ?></span>
									</div>
									<div class="o--slider-wrapper">
										<div class="a--slider-item-count d--bold"></div>
										<div class="c--slider-wrapper">
											<div class="a--slider-title d--bold-sp"><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></div>
											<div class="c--slider-wrapper-inner">
												<div class="b--jinr-block b--jinr-button a--slider-button ef"><span class="a--slider-button-deco"></span><a href="<?php echo get_permalink(); ?>"><?php echo jinr__slider_link_text(); ?></a>
												</div>
											</div>
										</div>
									</div>
								</div>
							</li>
				<?php
						}
						$count++;
					}
				}
				wp_reset_postdata();
				?>
			<?php endif; ?>
		</ul>
		<ul class="o--slider-pagenation"></ul>
	</div>
</section>