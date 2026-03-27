<?php if ( jinr__main_visual_type() == "type01-post-slider" ) : ?>
	<?php if ( jinr__slider_design_select() == "d--slider-design1" ) : ?>
		<?php get_template_part( 'object/main-visual/post-slider' ); ?>
	<?php else: ?>
		<?php get_template_part( 'object/main-visual/post-slider-jin' ); ?>
	<?php endif; ?>
<?php elseif ( jinr__main_visual_type() == "type02-image-slider" ) : ?>
	<?php get_template_part( 'object/main-visual/image-slider' ); ?>
<?php elseif ( jinr__main_visual_type() == "type03-stillimage" ) : ?>
	<?php get_template_part( 'object/main-visual/stillimage' ); ?>
<?php elseif ( jinr__main_visual_type() == "type04-movie" ) : ?>
	<?php get_template_part( 'object/main-visual/movie' ); ?>
<?php endif; ?>