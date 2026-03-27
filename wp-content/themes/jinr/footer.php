<?php if (is_single()) : ?>
	<?php if (jinr_isset_widets('relatedpost-bottom-widget', true)) : ?>
		<section id="jinr-relatedpost-bottom-widget-area" class="o--widget-area t--padding t--main-width">
			<div id="jinr-relatedpost-bottom-widget-area-inner">
				<?php dynamic_sidebar('relatedpost-bottom-widget'); ?>
			</div>
		</section>
	<?php endif; ?>
<?php endif; ?>

<footer id="commonFooter" class="<?php jinr_commonFooter_class_insert(); ?>">

	<div id="commonFooterInner" class="t--main-width t--padding t--round">

		<?php if (!is_active_sidebar('footer-widget')) : ?>
		<?php else : ?>
			<section id="commonFooterWidget" class="o--widget-area">
				<div id="footer-widget">
					<?php dynamic_sidebar('footer-widget'); ?>
				</div>
			</section>
		<?php endif; ?>

		<?php if (jinr_breadcrumb_display() !== "1") : ?>
			<?php get_template_part('object/breadcrumb'); ?>
		<?php endif; ?>

		<section id="footerInfo">
			<?php if (has_nav_menu('footer-menu')) : ?>
				<div id="commonFooterSiteMenu">

					<!-- global navigation -->
					<div id="footerMenuBox">
						<?php if (jinr_active_item_nav_menu('footer-menu')) : ?>
							<?php
							wp_nav_menu(
								array(
									'theme_location'  => 'footer-menu',
									'container'       => 'nav',
									'container_class' => 'o--nav-box',
									'items_wrap'      => '<ul id="footerMenuList">%3$s</ul>',
								)
							);
							?>
						<?php endif; ?>
					</div>
				</div>
			<?php endif; ?>
			<div id="copyright">
				<i class="jin-icons jin-ifont-copyright" aria-hidden="true"></i><?php echo jinr_get_copyright_date(); ?>&nbsp;&nbsp;<?php bloginfo('name'); ?>
			</div>
		</section>

	</div>

	<?php get_template_part('object/cvbutton'); ?>

</footer>

<?php if (!get_option('space_body') == null) : ?>
	<?php echo get_option('space_body'); ?>
<?php endif; ?>
<?php wp_footer(); ?>
<?php if (jinr__main_visual_type() == "type02-image-slider") : ?>
	<?php jinr_visual_imageslider_animation(); ?>
<?php endif; ?>

</div><!-- #wrapper-->
<?php if (!get_option('jinr_body_finish_tag') == null) : ?>
	<?php echo get_option('jinr_body_finish_tag'); ?>
<?php endif; ?>
<?php do_action('jinr_switch_output_paid_form'); ?>

<div id="jinrCopySuccessBg"></div>
<div id="jinrCopySuccess">記事URLをコピーしました</div>
</body>

</html>