<section class="o--jinr-mainvisual o--jinr-slider d--slider-design2 <?php echo jinr__slider_text_color_select(); ?> t--padding">
	<div class="o--slider-contents d--swiper-jin t--padding">
		<div class="c--jinr-slider swiper-wrapper t--main-width">
			<?php if (jinr__slider_type_select() == 'd--slider-type-choice'): ?>
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
								$medium = jinr_noimage_url('medium');
								$large = jinr_noimage_url('large');
							} else {
								$medium_info = wp_get_attachment_image_src($thumbnail_ID, 'medium_size');
								$large_info = wp_get_attachment_image_src($thumbnail_ID, 'large_size');
								$medium = isset($medium_info[0]) ? $medium_info[0] : '';
								$large = isset($large_info[0]) ? $large_info[0] : '';
								$large_replace = $medium;
								if ($large_info[2] == 765 && $large_info[1] == 1360) {
									$large_replace = isset($large_info[0]) ? $large_info[0] : '';
								}
							}
				?>
							<a class="a--slider-item swiper-slide" href="<?php echo $post_URL; ?>">
								<div class="o--slider-contents-wrapper">
									<div class="a--slider-thumbnail t--round">
										<img src="<?php echo $large; ?>" width="640" height="360" srcset="<?php echo $large_replace; ?> 2048w, <?php echo $medium; ?> 1284w" sizes="(max-width: 829px) 100vw, (max-width: 1024px) 45vw, 55vw">
									</div>
									<div class="o--slider-wrapper">
										<div class="a--slider-item-count d--bold"></div>
										<div class="a--slider-title d--bold-sp"><?php echo $post_title; ?></div>
										<div class="c--post-meta">
										</div>
									</div>
								</div>
							</a>
						<?php
						} else {
							$medium = jinr_youtube_thumbnail_url($post_ID, 'medium');
							$large = jinr_youtube_thumbnail_url($post_ID, 'large');
							$post_youtube_time   = get_post_meta($post_ID, '_jinr_time_youtube', true);
						?>
							<a class="a--slider-item swiper-slide" href="<?php echo $post_URL; ?>">
								<div class="o--slider-contents-wrapper">
									<div class="a--slider-thumbnail t--round">
										<img src="<?php echo jinr_youtube_thumbnail_url($post_ID, 'medium'); ?>" width="640" height="360" srcset="<?php echo $large; ?> 2048w, <?php echo $medium; ?> 1284w" sizes="(max-width: 829px) 100vw, (max-width: 1024px) 45vw, 55vw">
										<span class="a--slider-time"><i class="jic jin-ifont-playback" aria-hidden="true"></i><?php echo $post_youtube_time; ?></span>
									</div>
									<div class="o--slider-wrapper">
										<div class="a--slider-title d--bold-sp"><?php echo $post_title; ?></div>
										<div class="c--post-meta">

										</div>
									</div>
								</div>
							</a>
				<?php
						}
					}
				}
				?>
			<?php else: ?>
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

						// 取得した記事を表示するコード
						global $post;
						$post_youtube_thumb  = get_post_meta($post->ID, '_jinr_thumb_youtube', true);
						$medium = '';
						$large = '';
						$medium_info = '';
						$large_info = '';

						if (has_post_thumbnail($post->ID)) {
							if (! has_post_thumbnail()) {
								$medium = jinr_noimage_url('medium');
								$large = jinr_noimage_url('large');
								$large_replace = jinr_noimage_url('large');
							} else {
								$thumbnail_ID = get_post_thumbnail_id($post->ID);
								$medium_info = wp_get_attachment_image_src($thumbnail_ID, 'medium_size');
								$large_info = wp_get_attachment_image_src($thumbnail_ID, 'large_size');
								$medium = isset($medium_info[0]) ? $medium_info[0] : '';
								$large = isset($large_info[0]) ? $large_info[0] : '';

								$large_replace = $medium;
								if ($large_info[2] == 765 && $large_info[1] == 1360) {
									$large_replace = isset($large_info[0]) ? $large_info[0] : '';
								}
							}
				?>
							<a class="a--slider-item swiper-slide" href="<?php echo get_permalink(); ?>">
								<div class="o--slider-contents-wrapper">
									<div class="a--slider-thumbnail t--round">
										<img src="<?php echo $large; ?>" width="640" height="360" srcset="<?php echo $large_replace; ?> 2048w, <?php echo $medium; ?> 1284w" sizes="(max-width: 829px) 100vw, (max-width: 1024px) 45vw, 55vw">
									</div>
									<div class="o--slider-wrapper">
										<div class="a--slider-title d--bold-sp"><?php the_title(); ?></div>
										<div class="c--post-meta">
											<div class="a--post-date date updated" datetime="<?php the_time('Y-m-d'); ?>" content="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d'); ?></div>
											<?php if (!$cat_name == '') : ?>
												<span class="a--post-category category-<?php echo $cat_slug; ?>"><?php echo $cat_name; ?></span>
											<?php endif; ?>
										</div>
									</div>
								</div>
							</a>
						<?php } else {
							$medium = jinr_youtube_thumbnail_url($post->ID, 'medium');
							$large = jinr_youtube_thumbnail_url($post->ID, 'large');
							$post_youtube_time   = get_post_meta($post->ID, '_jinr_time_youtube', true);
						?>
							<a class="a--slider-item swiper-slide" href="<?php echo get_permalink(); ?>">
								<div class="o--slider-contents-wrapper">
									<div class="a--slider-thumbnail t--round">
										<img src="<?php echo jinr_youtube_thumbnail_url($post->ID, 'medium'); ?>" width="640" height="360" srcset="<?php echo $large; ?> 2048w, <?php echo $medium; ?> 1284w" sizes="(max-width: 829px) 100vw, (max-width: 1024px) 45vw, 55vw">
										<span class="a--slider-time"><i class="jic jin-ifont-playback" aria-hidden="true"></i><?php echo $post_youtube_time; ?></span>
									</div>
									<div class="o--slider-wrapper">
										<div class="a--slider-title d--bold-sp"><?php the_title(); ?></div>
										<div class="c--post-meta">
											<div class="a--post-date date updated" datetime="<?php the_time('Y-m-d'); ?>" content="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d'); ?></div>
											<?php if (!$cat_name == '') : ?>
												<span class="a--post-category category-<?php echo $cat_slug; ?>"><?php echo $cat_name; ?></span>
											<?php endif; ?>
										</div>
									</div>
								</div>
							</a>
				<?php
						}
						$count++;
					}
				}
				wp_reset_postdata();
				?>
			<?php endif; ?>
		</div>

		<div class="swiper-button-prev"></div>
		<div class="swiper-button-next"></div>

		<ul class="o--slider-pagenation swiper-pagination"></ul>
	</div>
</section>