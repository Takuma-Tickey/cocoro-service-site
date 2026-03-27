<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head prefix="og: https://ogp.me/ns# fb: https://ogp.me/ns/fb# article: https://ogp.me/ns/article#">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1,minimum-scale=1.0">
	<?php
	get_template_part('include/head/ogp');
	get_template_part('include/head/description');
	get_template_part('include/head/noindex');
	get_template_part('include/head/keywords');
	get_template_part('include/head/others');
	get_template_part('include/head/tags');
	wp_head();
	get_template_part('include/head/preload');

	$info_display_ids = explode(",", jinr__info_display_none());
	?>
</head>

<body <?php body_class(); ?>>
	<?php if (!get_option('jinr_body_start_tag') == "") : ?>
		<?php echo get_option('jinr_body_start_tag'); ?>
	<?php endif; ?>
	<div id="wrapper" class="<?php jinr_wrapper_class_insert(); ?>">

		<?php if (jinr__info_used() == "on") : ?>
			<?php if (jinr__info_display_position() == "d--information-position-top") : ?>
				<?php if (is_front_page() || is_home()) : ?>
					<?php if (jinr__info_display_frontpage() == true) : ?>
						<?php get_template_part('object/informationbar'); ?>
					<?php endif; ?>
				<?php else : ?>
					<?php if (!is_single($info_display_ids) && !is_page($info_display_ids)) : ?>
						<?php if (jinr__info_display_page() == true) : ?>
							<?php get_template_part('object/informationbar'); ?>
						<?php endif; ?>
					<?php endif; ?>
				<?php endif; ?>
			<?php endif; ?>
		<?php endif; ?>

		<?php if (jinr__header_toppage_display() == true) : ?>
			<?php get_template_part('object/header-parts'); ?>
		<?php else : ?>
			<?php if (!is_home() && !is_front_page()) : ?>
				<?php get_template_part('object/header-parts'); ?>
			<?php endif; ?>
		<?php endif; ?>
		<?php
		$grad_class = '';
		if (jinr__header_bgcolor_type() == 'gradation') {
			$grad_class = jinr__header_bg_gradation_select();
		}
		if (jinr__header_style() !== 'd--header-style-default') {
			echo '<div class="a--header-style-parts' . ' ' . jinr__header_tracking() . ' ' . $grad_class . '"></div>';
		}
		?>

		<?php if (jinr__info_used() == "on") : ?>
			<?php if (jinr__info_display_position() == "d--information-position-bottom") : ?>
				<?php if (is_front_page() || is_home()) : ?>
					<?php if (jinr__info_display_frontpage() == true) : ?>
						<?php get_template_part('object/informationbar'); ?>
					<?php endif; ?>
				<?php else : ?>
					<?php if (!is_single($info_display_ids) && !is_page($info_display_ids)) : ?>
						<?php if (jinr__info_display_page() == true) : ?>
							<?php get_template_part('object/informationbar'); ?>
						<?php endif; ?>
					<?php endif; ?>
				<?php endif; ?>
			<?php endif; ?>
		<?php endif; ?>

		<?php if (is_home() || is_front_page()) : ?>
			<?php get_template_part('object/main-visual'); ?>
		<?php else : ?>
			<?php if (jinr__main_visual_type() == 'type03-stillimage' && jinr__stillimage_display() == true) : ?>
				<?php get_template_part('object/main-visual/stillimage'); ?>
			<?php endif; ?>
		<?php endif; ?>