<div id="commonHeaderInner" class="t--main-width t--padding">

	<?php get_template_part('object/logo'); ?>

	<!-- global navigation -->
	<div id="globalMenu" class="<?php echo jinr__header_menu_design(); ?> ef">
		<?php if (jinr_active_item_nav_menu('glonavi')) : ?>
			<?php
			$display = jinr__header_globalmenu_tablet_display() == false ? 'd--globalmenu-tablet-off' : '';
			wp_nav_menu(
				array(
					'theme_location'  => 'glonavi',
					'container'       => 'nav',
					'container_class' => 'o--nav-box ' . $display . ' ef',
					'items_wrap'      => '<ul id="globalMenuList">%3$s</ul>',
				)
			);
			?>
		<?php endif; ?>
	</div>

	<?php if (!jinr__header_search_display() == false) : ?>
		<div id="headerSearch" class="<?php echo jinr__hamburger_display_pc() == true ? "d--hamburger-right" : "d--hamburger-none"; ?>">
			<div class="a--search-icon"><i id="headerSearchIcon" class="jif jin-ifont-searchthin" aria-hidden="true"></i></div>
		</div>
		<div id="HeaderSearchFormWrapper">
			<div id="HeaderSearchForm" class="t--round">
				<?php get_search_form(); ?>
			</div>
		</div>
	<?php endif; ?>

	<?php get_template_part('object/hamburger'); ?>

</div>