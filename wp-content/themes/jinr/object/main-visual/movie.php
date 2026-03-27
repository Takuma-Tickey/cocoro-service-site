<?php
if (jinr__movie_autoplay() == 'd--movie-autoplay-on') {
	$autoplay = 'autoplay muted';
} else {
	$autoplay = '';
}
if (jinr__movie_loop() == 'd--movie-loop-on') {
	$loop = 'loop';
} else {
	$loop = '';
}
?>
<section class="o--jinr-mainvisual o--jinr-movie t--main-width">
	<?php if (jinr__movie_url()) : ?>
		<?php if (preg_match('/\.gif$|\.mp4$|\.flv$|\.avi$|\.mov$|\.webm$/i', jinr__movie_url())) : ?>
			<?php
			$movie_url = jinr__movie_url();
			$parse_url = parse_url($movie_url, PHP_URL_PATH);
			$extension = pathinfo($parse_url, PATHINFO_EXTENSION);
			$movie_type = 'video/' . $extension;; ?>
			<video playsinline muted <?php echo $loop; ?> <?php echo $autoplay; ?> class="c--jinr-movie" src="<?php echo $movie_url; ?>#t=0.001" type="<?php echo $movie_type ?>"></video>
		<?php endif; ?>
	<?php endif; ?>
	<div class="c--movie-contents t--padding">
		<?php if (jinr__movie_copy_display() == "on") : ?>
			<div class="a--movie-maincopy ef <?php echo jinr__movie_maincopy_text_deco_select(); ?>"><?php echo jinr__movie_maincopy(); ?></div>
			<div class="a--movie-subcopy ef <?php echo jinr__movie_maincopy_text_deco_select(); ?>"><?php echo jinr__movie_subcopy(); ?></div>
		<?php endif; ?>
		<?php if (jinr__movie_button_display() == "on") : ?>
			<div class="b--jinr-block b--jinr-button js--scr-animation">
				<?php echo do_shortcode('[jinr_button' . jinr__movie_button_design_select() . ' href="' . jinr__movie_button_link() . '"]' . jinr__movie_button_text() . '[/jinr_button' . jinr__movie_button_design_select() . ']'); ?>
			</div>
		<?php endif; ?>
	</div>
</section>