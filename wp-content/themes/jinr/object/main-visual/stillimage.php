<?php
$image_url = jinr__stillimage_url();
$image_url_sp = jinr__stillimage_url_sp();
$image_id = attachment_url_to_postid($image_url);
$image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', true);

if (jinr__stillimage_overlay_design() == 'd--stillimage-overlay-none') {
	$stillimage_overlay_color = "";
} else {
	if (jinr__stillimage_overlay_color_type() == 'gradation') {
		$stillimage_overlay_color = jinr__stillimage_overlay_gradation_select();
	} else {
		$stillimage_overlay_color = "";
	}
}

?>
<section class="o--jinr-mainvisual o--jinr-stillimage t--main-width d--stillimage-style01">
	<div class="c--stillimage <?php echo jinr__stillimage_overlay_design(); ?>">
	<?php if( jinr__stillimage_link() !== "" ) : ?>
		<a href="<?php echo jinr__stillimage_link(); ?>"><div class="a--stillimage-overlay <?php echo $stillimage_overlay_color; ?>"></div></a>
	<?php else: ?>
		<div class="a--stillimage-overlay <?php echo $stillimage_overlay_color; ?>"></div>
	<?php endif; ?>
	<div class="a--stillimage"></div>
	</div>
	<div class="c--stillimage-contents t--padding">
		<?php if( jinr__stillimage_copy_display() == "on" ) : ?>
		<div class="a--stillimage-maincopy ef <?php echo jinr__stillimage_maincopy_text_deco_select(); ?>"><?php echo jinr__stillimage_maincopy(); ?></div>
		<div class="a--stillimage-subcopy ef <?php echo jinr__stillimage_maincopy_text_deco_select(); ?>"><?php echo jinr__stillimage_subcopy(); ?></div>
		<?php endif; ?>
		<?php if ( jinr__stillimage_button_display() == "on" ) : ?>
			<div class="b--jinr-block b--jinr-button js--scr-animation">
				<?php echo do_shortcode('[jinr_button' . jinr__stillimage_button_design_select() . ' href="' . jinr__stillimage_button_link() . '"]' . jinr__stillimage_button_text() . '[/jinr_button' . jinr__stillimage_button_design_select() . ']'); ?>
			</div>
		<?php endif; ?>
	</div>
</section>