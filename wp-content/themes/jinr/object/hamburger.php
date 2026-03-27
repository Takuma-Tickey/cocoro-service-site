<!-- hamburger menu -->
<?php
	//フォローボタンの読み込み
	$twitter = jinr__tw_url();
	$facebook = jinr__fb_url();
	$instagram = jinr__insta_url();
	$youtube = jinr__youtube_url();
	$line = jinr__line_url();
	$contact = jinr__contact_url();

	$sns_item_list = '';

	if( $twitter !== "" ){
		$sns_item_list .= '<a href='.$twitter.' class="a--sns-item-link d--twitter t--round" ><i class="jin-icons jin-ifont-twitter" aria-hidden="true"></i></a>';
	}
	if( $facebook !== "" ){
		$sns_item_list .= '<a href='.$facebook.' class="a--sns-item-link d--facebook t--round" ><i class="jin-icons jin-ifont-facebook" aria-hidden="true"></i></a>';
	}
	if( $instagram !== "" ){
		$sns_item_list .= '<a href='.$instagram.' class="a--sns-item-link d--instagram t--round"><i class="jin-icons jin-ifont-instagram" aria-hidden="true"></i></a>';
	}
	if( $youtube !== "" ){
		$sns_item_list .= '<a href='.$youtube.' class="a--sns-item-link d--youtube t--round"><i class="jin-icons jin-ifont-youtube" aria-hidden="true"></i></a>';
	}
	if( $line !== "" ){
		$sns_item_list .= '<a href='.$line.' class="a--sns-item-link d--line t--round"><i class="jin-icons jin-ifont-line" aria-hidden="true"></i></a>';
	}
	if( $contact !== "" ){
		$sns_item_list .= '<a href='.$contact.' class="a--sns-item-link d--contact t--round"><i class="jin-icons jin-ifont-mail" aria-hidden="true"></i></a>';
	}

	if( $twitter !== "" || $facebook !== "" || $instagram !== "" || $youtube !== "" || $line !== "" || $contact !== "" ){
		$sns_code = '<div class="o--ham-follow-sns"><div class="a--ham-follow-label ef">'.jinr__sns_follow_hamburger_label().'</div><div class="c--ham-follow-sns-item">'.$sns_item_list.'</div></div>';
	}else{
		$sns_code = '';
	}
?>
<?php if (has_nav_menu('hamburger') || jinr_isset_widets('hamburger-widget', true)) : ?>
	<div id="hamburgerMenu" class="<?php echo jinr__hamburger_display_pc() == true ? "d--hamburger-display-on" : "d--hamburger-display-off"; ?> <?php echo jinr_isset_widets('hamburger-widget', true) == true ? "d--hamburger-widget-on" : "d--hamburger-widget-off"; ?> <?php echo jinr__sns_follow_display_hamburger() == true ? "d--hamburger-follow-on" : "d--hamburger-follow-off"; ?>">
		<div class="c--menu-trigger js--hamburger-trigger">
			<div class="c--menu-bar">
				<span class="a--menu-bar"></span>
				<span class="a--menu-bar"></span>
				<span class="a--menu-bar"></span>
			</div>
		</div>
		<div class="o--hamburger-menu-container">
			<div class="o--hamburger-menu-inner t--main-width t--padding">
				<?php if (has_nav_menu('hamburger')) : ?>
					<div class="o--hamburger-menu">
						<!-- menu list -->
						<div class="a--hamburger-menu-title ef">MENU</div>
						<?php
						wp_nav_menu(
							array(
								'theme_location'  => 'hamburger',
								'container'       => 'nav',
								'container_class' => 'o--nav-box ef',
								'items_wrap'      => '<ul id="hamburgerMenuList">%3$s</ul>',
							)
						);
						?>
					</div>
				<?php endif; ?>
				<?php if (jinr_isset_widets('hamburger-widget', true)) : ?>
					<!-- widget -->
					<div id="hamburgerWidget" class="o--widget-area">
						<?php dynamic_sidebar('hamburger-widget'); ?>
					</div>
				<?php endif; ?>
				<?php if( jinr__sns_follow_display_hamburger() == true ): ?>
					<div class="d--menu-follow-sns">
						<?php echo $sns_code; ?>
					</div>
				<?php endif; ?>
			</div>
		</div>
	</div>
<?php endif; ?>