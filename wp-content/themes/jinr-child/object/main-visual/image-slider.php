<section class="o--jinr-mainvisual o--jinr-slider o--jinr-imageslider <?php echo jinr__imageslider_animation_select(); ?> <?php echo jinr__imageslider_animation_speed(); ?> <?php echo jinr__imageslider_autoplay(); ?>">

	<!-- 画像スライドインの時だけ出力するマークアップを変える -->
	<?php if (jinr__imageslider_animation_select() == 'd--imageslider-animation-slidein') : ?>
		<div class="o--slider-contents">
			<ul class="c--jinr-slider">
				<?php
				for ($count = 1; $count <= 6; $count++) {
					$image_url = 'jinr__imageslider_image_url' . $count;
					$image_link = 'jinr__imageslider_image_link' . $count;

					$srcsmall = '';
					$srcmedium = '';
					$srclarge = '';
					$image_srcset = '';
					$image_sizes = '';

					$target_extension = ["/\.png\z/", "/\.jpg\z/", "/\.jpeg\z/", "/\.webp\z/"];
					$suffix_small    = ["-320x180.png", "-320x180.jpg", "-320x180.jpeg", "-320x180.webp"];
					$suffix_medium    = ["-640x360.png", "-640x360.jpg", "-640x360.jpeg", "-640x360.webp"];
					$suffix_large    = ["-1360x765.png", "-1360x765.jpg", "-1360x765.jpeg", "-1360x765.webp"];
					$srcsmall = preg_replace($target_extension, $suffix_small, $image_url());
					$srcmedium = preg_replace($target_extension, $suffix_medium, $image_url());
					$srclarge = preg_replace($target_extension, $suffix_large, $image_url());

					$thumbnail_medium_exisits = WP_CONTENT_DIR . '/' . mb_substr($srcmedium, mb_strrpos($srcmedium, 'uploads'), mb_strlen($srcmedium));
					$thumbnail_large_exisits = WP_CONTENT_DIR . '/' . mb_substr($srclarge, mb_strrpos($srclarge, 'uploads'), mb_strlen($srclarge));

					if (!file_exists($thumbnail_large_exisits) && !file_exists($thumbnail_medium_exisits)) {
						$image_srcset = $image_url() . ' 1360w';
					} elseif (!file_exists($thumbnail_large_exisits) && file_exists($thumbnail_medium_exisits)) {
						$image_srcset = $srcmedium . ' 640w,' . $image_url() . ' 1360w';
					} else {
						$image_srcset = $srcsmall . ' 640w,' . $srclarge . ' 1360w';
					}
					$activeClass = '';
					if ($count == 1) {
						$activeClass = 'd--slider-active';
					}


					if (!$image_url() == "") {
						$image_id = attachment_url_to_postid($image_url());
						$image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', true);
						if (!$image_link() == "") {
							echo '<li class="a--slider-item ' . $activeClass . '">';
							echo '<div class="a--slider-thumbnail"><a href="' . $image_link() . '"><img src="' . $image_url() . '" srcset="' . $image_srcset . '" sizes="(max-width:552px) 90vw, 100vw" width="1120" height="630" alt="' . $image_alt . '"/></a></div>';
							echo '</li>';
						} else {
							echo '<li class="a--slider-item ' . $activeClass . '">';
							echo '<div class="a--slider-thumbnail"><img src="' . $image_url() . '" alt="' . $image_alt . '"/></div>';
							echo '</li>';
						}
					}
				}
				?>
			</ul>
		</div>
		<div class="o--slider-pagenation"></div>
	<?php elseif (jinr__imageslider_animation_select() == 'd--imageslider-animation-parallax') : ?>
		<div class="o--slider-contents swiper-container a--image-loading">
			<ul class="c--jinr-slider swiper-wrapper">
				<?php
				for ($count = 1; $count <= 6; $count++) {
					$image_url = 'jinr__imageslider_image_url' . $count;
					$image_link = 'jinr__imageslider_image_link' . $count;

					$srcmedium = '';
					$srclarge = '';
					$image_srcset = '';
					$image_sizes = '';

					$target_extension = ["/\.png\z/", "/\.jpg\z/", "/\.jpeg\z/", "/\.webp\z/"];
					$suffix_medium    = ["-640x360.png", "-640x360.jpg", "-640x360.jpeg", "-640x360.webp"];
					$suffix_large    = ["-1360x765.png", "-1360x765.jpg", "-1360x765.jpeg", "-1360x765.webp"];
					$srcmedium = preg_replace($target_extension, $suffix_medium, $image_url());
					$srclarge = preg_replace($target_extension, $suffix_large, $image_url());

					$thumbnail_medium_exisits = WP_CONTENT_DIR . '/' . mb_substr($srcmedium, mb_strrpos($srcmedium, 'uploads'), mb_strlen($srcmedium));
					$thumbnail_large_exisits = WP_CONTENT_DIR . '/' . mb_substr($srclarge, mb_strrpos($srclarge, 'uploads'), mb_strlen($srclarge));

					if (!file_exists($thumbnail_large_exisits) && !file_exists($thumbnail_medium_exisits)) {
						$image_srcset = $image_url() . ' 1360w';
					} elseif (!file_exists($thumbnail_large_exisits) && file_exists($thumbnail_medium_exisits)) {
						$image_srcset = $srcmedium . ' 640w,' . $image_url() . ' 1360w';
					} else {
						$image_srcset = $srcmedium . ' 640w,' . $srclarge . ' 1360w';
					}

					if (!$image_url() == "") {
						$image_id = attachment_url_to_postid($image_url());
						$image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', true);
						if (!$image_link() == "") {
							echo <<<EOM
							<li class="a--slider-item swiper-slide">
								<div class="a--slider-thumbnail">
									<a href="{$image_link()}">
										<img src="{$image_url()}" srcset="{$image_srcset}" sizes="(max-width:552px) 90vw, 100vw" width="1120" height="630" alt="{$image_alt}" data-swiper-parallax-x="100%" />
									</a>
								</div>
							</li>
EOM;
						} else {
							echo <<<EOM
							<li class="a--slider-item swiper-slide">
								<div class="a--slider-thumbnail">
									<img src="{$image_url()}" srcset="{$image_srcset}" sizes="(max-width:552px) 90vw, 100vw" width="1120" height="630" alt="{$image_alt}" data-swiper-parallax-x="100%" />
								</div>
							</li>
EOM;
						}
					}
				}
				?>
			</ul>
		</div>
		<div class="o--slider-pagenation swiper-pagination"></div>

	<?php else : ?>
		<div class="o--slider-contents swiper-container">
			<ul class="c--jinr-slider swiper-wrapper">
				<?php
				for ($count = 1; $count <= 6; $count++) {
					$image_url = 'jinr__imageslider_image_url' . $count;
					$image_link = 'jinr__imageslider_image_link' . $count;

					$srcmedium = '';
					$srclarge = '';
					$image_srcset = '';
					$image_sizes = '';

					$target_extension = ["/\.png\z/", "/\.jpg\z/", "/\.jpeg\z/", "/\.webp\z/"];
					$suffix_medium    = ["-640x360.png", "-640x360.jpg", "-640x360.jpeg", "-640x360.webp"];
					$suffix_large    = ["-1360x765.png", "-1360x765.jpg", "-1360x765.jpeg", "-1360x765.webp"];
					$srcmedium = preg_replace($target_extension, $suffix_medium, $image_url());
					$srclarge = preg_replace($target_extension, $suffix_large, $image_url());

					$thumbnail_medium_exisits = WP_CONTENT_DIR . '/' . mb_substr($srcmedium, mb_strrpos($srcmedium, 'uploads'), mb_strlen($srcmedium));
					$thumbnail_large_exisits = WP_CONTENT_DIR . '/' . mb_substr($srclarge, mb_strrpos($srclarge, 'uploads'), mb_strlen($srclarge));

					if (!file_exists($thumbnail_large_exisits) && !file_exists($thumbnail_medium_exisits)) {
						$image_srcset = $image_url() . ' 1360w';
					} elseif (!file_exists($thumbnail_large_exisits) && file_exists($thumbnail_medium_exisits)) {
						$image_srcset = $srcmedium . ' 640w,' . $image_url() . ' 1360w';
					} else {
						$image_srcset = $srcmedium . ' 640w,' . $srclarge . ' 1360w';
					}

					if (!$image_url() == "") {
						$image_id = attachment_url_to_postid($image_url());
						$image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', true);
						if (!$image_link() == "") {
							echo '<li class="a--slider-item swiper-slide">';
							echo '<div class="a--slider-thumbnail"><a href="' . $image_link() . '"><img src="' . $image_url() . '" srcset="' . $image_srcset . '" sizes="(max-width:552px) 90vw, 100vw" width="1120" height="630" alt="' . $image_alt . '"/></a></div>';
							echo '</li>';
						} else {
							echo '<li class="a--slider-item swiper-slide">';
							echo '<div class="a--slider-thumbnail"><img src="' . $image_url() . '" srcset="' . $image_srcset . '" sizes="(max-width:552px) 90vw, 100vw" width="1120" height="630" alt="' . $image_alt . '"/></div>';
							echo '</li>';
						}
					}
				}
				?>
			</ul>
		</div>
		<div class="o--slider-pagenation swiper-pagination"></div>
	<?php endif; ?>
</section>