<?php
/*
Template Name: 決済完了画面
*/
get_header();

$current_user = wp_get_current_user();
?>
<main id="mainContent" class="<?php echo jinr_mainContent_class_insert(); ?>">
	<div id="mainContentInner" class="t--main-width t--padding">
		<div id="thanksContent">
			<div id="thanksMessage">
				<div class="o--thanks-content">
					<?php if (!jinr__header_logo_url() == '') : ?>
						<img id="thanksLogoImage" width="200" height="112" src="<?php echo jinr__header_logo_url(); ?>" alt="<?php echo get_bloginfo('name', 'display'); ?>" />
					<?php endif; ?>
					<h3 class="c--thanks-title">
						ご購入いただきありがとうございます
						<span class="a--thanks-subtitle en">
							Thank you!
						</span>
					</h3>
					<div class="o--paidpost-content">
						<div class="o--paidpost-info">
							<h4 class="c--info-title">
								購入記事
							</h4>
							<p id="paidpostTitle" class="c--info-text">
								記事タイトル
							</p>
						</div>
						<div class="o--paidpost-info">
							<h4 class="c--info-title">
								決済情報の取り扱いについて
							</h4>
							<p class="a--info-attention">
								クレジットカード情報は、決済サービス「Stripe」上で保管されます。当サイト上には保管されませんのでご安心ください。
							</p>
						</div>
						<a href="" id="paidpostLink" class="a--paidpost-link">
							購読した記事を読む
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</main>
<?php
get_footer();
