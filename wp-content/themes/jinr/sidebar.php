<?php if ( jinr_isset_widets( 'sidebar', true ) || jinr_isset_widets( 'sidebar-tracking', true ) ) : ?>
<aside id="mainSideBar" class="o--widget-area">
	<?php if ( jinr_isset_widets( 'sidebar', true ) ) : ?>
		<div id="sideBarWidget">
			<?php dynamic_sidebar( 'sidebar' ); ?>
		</div>
	<?php endif; ?>

	<?php if ( jinr_isset_widets( 'sidebar-tracking', true ) ) : ?>
		<div id="sideBarTracking">
			<?php dynamic_sidebar( 'sidebar-tracking' ); ?>
		</div>
	<?php endif; ?>
</aside>
<?php endif; ?>
