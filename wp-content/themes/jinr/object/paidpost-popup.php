<?php
$paidpostterms = get_page_by_path('paidpost-terms');
if (!is_user_logged_in()) : ?>
	<section id="JinrPaidPopUpRegisterWrapper">
		<button id="JinrPaidPopupRegisterClose"></button>
		<div class="jinr-paidpost-popup-register">
			<form name="jinr_paidpost_register_form" id="JinrRegisterForm" action="" method="post">
				<div id="JinrpaidLogo">
					<?php if (!jinr__header_logo_url() == '') : ?>
						<span id="paidLogoLink"><img id="paidLogoImage" width="120" height="90" src="<?php echo jinr__header_logo_url(); ?>" alt="<?php echo get_bloginfo('name', 'display'); ?>" /></span>
					<?php else : ?>
						<?php if (jinr__title_text() == '') : ?>
							<span id="paidLogoLink" class="ef"><?php bloginfo('name'); ?></span>
						<?php else : ?>
							<span id="paidLogoLink" class="ef"><?php echo jinr__title_text(); ?></span>
						<?php endif; ?>
					<?php endif; ?>
				</div>
				<p class="jinr-paidpost-register">購読には会員登録が必要です</p>
				<div class="JinrPaidpostForm">
					<div class="JinrPaidpostFormInner">
						<input autocomplete="none" id="JinrRegisterName" name="jinr_register_user_name" type="hidden" placeholder="ユーザー名" required>
						<svg id="JinrRegisternNameSVG" class="a--paidpost-check" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none">
							<circle cx="12" cy="12" r="8" />
							<path stroke-linecap="round" stroke-width="1.5" d="M9.215 12.052l1.822 1.805 3.748-3.714" stroke-dashnoneset="100" stroke-dasharray="100" />
						</svg>
					</div>
					<div class="JinrPaidpostFormInner">
						<input autocomplete="none" id="JinrRegisterMail" name="jinr_register_user_email" type="email" pattern=".+\.[a-zA-Z0-9][a-zA-Z0-9-]{0,61}[a-zA-Z0-9]" placeholder="メールアドレス" required>
						<svg id="JinrRegisternMailSVG" class="a--paidpost-check" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none">
							<circle cx="12" cy="12" r="8" />
							<path stroke-linecap="round" stroke-width="1.5" d="M9.215 12.052l1.822 1.805 3.748-3.714" stroke-dashoffset="100" stroke-dasharray="100" />
						</svg>
					</div>
					<div class="JinrPaidpostFormInner">
						<input autocomplete="new-password" id="JinrRegisterPass" name="jinr_register_user_pass" autocomplete="on" type="password" placeholder="パスワード設定" required>
						<svg id="JinrRegisternPassSVG" class="a--paidpost-check" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none">
							<circle cx="12" cy="12" r="8" />
							<path stroke-linecap="round" stroke-width="1.5" d="M9.215 12.052l1.822 1.805 3.748-3.714" stroke-dashoffset="100" stroke-dasharray="100" />
						</svg>
						<span class="a--pass-text">「半角英数字」と「大文字1個以上」を含む、8文字以上</span>
					</div>
				</div>
				<p class="jinr-paidpost-policy">会員登録には <a href="<?php echo esc_url(get_permalink($paidpostterms->ID)); ?>" class="jinr-paidpost-link" target="_blank">利用規約／特定商取引法に基づく表記</a> への同意が必要です。</p>
				<button type="button" name="jinr_register_submit" id="JinrRegisterButton" value="signup">この情報で会員登録｜購入に進む</button>
				<?php wp_nonce_field('jinr_nonce_register_action', 'jinr_nonce_register_check');
				?>
			</form>
		</div>
		<div class="jinr-paidpost-popup-login">
			<a href="#" id="JinrLoginDisplay" class="jinr-already-member">すでに会員の方はこちら</a>
		</div>
	</section>
	<section id="JinrPaidPopUpLoginWrapper">
		<button id="JinrPaidPopupLoginClose"></button>
		<div class="jinr-paidpost-popup-register">
			<form id="JinrLoginForm">
				<div id="JinrpaidLogo">
					<?php if (!jinr__header_logo_url() == '') : ?>
						<span id="paidLogoLink"><img id="paidLogoImage" width="120" height="90" src="<?php echo jinr__header_logo_url(); ?>" alt="<?php echo get_bloginfo('name', 'display'); ?>" /></span>
					<?php else : ?>
						<?php if (jinr__title_text() == '') : ?>
							<span id="paidLogoLink" class="ef"><?php bloginfo('name'); ?></span>
						<?php else : ?>
							<span id="paidLogoLink" class="ef"><?php echo jinr__title_text(); ?></span>
						<?php endif; ?>
					<?php endif; ?>
				</div>
				<p class="jinr-paidpost-register">ログインして記事を読む</p>
				<div class="JinrPaidpostForm">
					<div class="JinrPaidpostFormInner">
						<span class="a--paidpost-text">メールアドレス</span>
						<input id="JinrLoginMail" name="jinr_login_user_mail" type="text" placeholder="メールアドレス" required>
						<svg id="JinrLoginMailSVG" class="a--paidpost-check" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none">
							<circle cx="12" cy="12" r="8" />
							<path stroke-linecap="round" stroke-width="1.5" d="M9.215 12.052l1.822 1.805 3.748-3.714" stroke-dashoffset="100" stroke-dasharray="100" />
						</svg>
					</div>
					<div class="JinrPaidpostFormInner">
						<span class="a--paidpost-text">パスワード</span>
						<input id="JinrLoginPass" name="jinr_login_user_pass" type="password" placeholder="パスワード" autocomplete="on" required>
						<svg id="JinrLoginPassSVG" class="a--paidpost-check" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none">
							<circle cx="12" cy="12" r="8" />
							<path stroke-linecap="round" stroke-width="1.5" d="M9.215 12.052l1.822 1.805 3.748-3.714" stroke-dashoffset="100" stroke-dasharray="100" />
						</svg>
					</div>
				</div>
				<input type="hidden" name="g-recaptcha-response" id="g-recaptcha-response">
				<button type="button" name="jinr_login_submit" id="JinrLoginButton" value="login">ログイン</button>
				<a href="#" id="JinrLostPassword" class="a--paidpost-lost-password">パスワードを忘れた方</a>
				<?php wp_nonce_field('jinr_nonce_login_action', 'jinr_nonce_login_check'); ?>
			</form>
		</div>
		<div class="jinr-paidpost-popup-login"><a href="#" id="JinrRegisterDisplay" class="jinr-already-member">新規会員登録はこちら</a>
		</div>
	</section>
	<section id="JinrPaidPopUpLostpasswordWrapper">
		<button id="JinrPaidPopupLostClose"></button>
		<div class="jinr-paidpost-popup-register">
			<form id="JinrLostPasswordForm" onsubmit="return false;">
				<div id="JinrpaidLogo">
					<?php if (!jinr__header_logo_url() == '') : ?>
						<span id="paidLogoLink"><img id="paidLogoImage" width="120" height="90" src="<?php echo jinr__header_logo_url(); ?>" alt="<?php echo get_bloginfo('name', 'display'); ?>" /></span>
					<?php else : ?>
						<?php if (jinr__title_text() == '') : ?>
							<span id="paidLogoLink" class="ef"><?php bloginfo('name'); ?></span>
						<?php else : ?>
							<span id="paidLogoLink" class="ef"><?php echo jinr__title_text(); ?></span>
						<?php endif; ?>
					<?php endif; ?>
				</div>
				<p class="jinr-paidpost-register">パスワード再設定</p>
				<div class="jinr-paidpost-lostpass-text">
					パスワードを再設定します。入力したメールアドレスに再設定用のURLをお送りしますので、パスワードの再設定を行なってください。
				</div>
				<div class="JinrPaidpostForm">
					<input id="JinrMailForLostapassword" name="jinr_user_email_for_lostpassword" type="email" pattern=".+\.[a-zA-Z0-9][a-zA-Z0-9-]{0,61}[a-zA-Z0-9]" placeholder="メールアドレス" required>
					<?php wp_nonce_field('jinr_nonce_lostpassword_action', 'jinr_nonce_lostpassword_check'); ?>
				</div>
				<div class="jinr-paidpost-popup-lostpass">
					<button type="button" id="JinrLoatpasswordButton" value="lostpassword" class=" a--paidpost-lostpass">再設定｜メールを送信</button>
					<span id="JinrLostpasswordCancel" class="a--paidpost-cancel">キャンセル</span>
				</div>
			</form>
		</div>
	</section>
	<div id="JinrPopupBg"></div>
<?php elseif (current_user_can('subscriber') && get_option('jinr_paidpost_subscription_check') === '1') : ?>
	<?php
	require_once(__DIR__ . '/../vendor/autoload.php');
	$user = wp_get_current_user();
	$subscriptionSecretKey = get_option('jinr_paidpost_secret_key');
	$searchEmail = $user->user_email;
	$customers = \Stripe\Customer::all([
		'limit' => 20,
		'email' => $searchEmail,
	]);
	$scribe_amount = '';
	$scribe_name = '';
	$scribe_id = '';
	foreach ($customers as $customer) {
		$invoices = \Stripe\Invoice::all(['customer' => $customer->id]);
		$subscriptions = \Stripe\Subscription::all([
			'customer' => $customer->id,
		]);
		foreach ($invoices as $invoice) {
			if ($invoice->subscription && !empty($subscriptions->data[0]) && $subscriptions->data[0]->status == 'active') {
				$scribe_id = $invoice->subscription;
				$scribe_amount = $invoice->lines->data[0]->amount;
				$scribe_name = $invoice->lines->data[0]->description;
				$scribe_name = str_replace('1 × ', '', $scribe_name);
				$scribe_name = str_replace(' (at ¥' . number_format($scribe_amount) . ' / month)', '', $scribe_name);
			}
		}
	}
	?>
	<section id="JinrPaidpostCancelWrapper">
		<button id="JinrPaidPopupCancelClose"></button>
		<div class="jinr-paidpost-popup-register">
			<div id="JinrRegisterForm">
				<div id="JinrpaidLogo">
					<?php if (!jinr__header_logo_url() == '') : ?>
						<span id="paidLogoLink"><img id="paidLogoImage" width="120" height="90" src="<?php echo jinr__header_logo_url(); ?>" alt="<?php echo get_bloginfo('name', 'display'); ?>" /></span>
					<?php else : ?>
						<?php if (jinr__title_text() == '') : ?>
							<span id="paidLogoLink" class="ef"><?php bloginfo('name'); ?></span>
						<?php else : ?>
							<span id="paidLogoLink" class="ef"><?php echo jinr__title_text(); ?></span>
						<?php endif; ?>
					<?php endif; ?>
				</div>
				<div class="o--paidpost-info o--scribe-contents">
					<p class="c--info-title">登録中のサブスク</p>
					<p class="c--info-text"><?php echo $scribe_name; ?></p>
				</div>
				<div class="o--paidpost-info o--scribe-contents">
					<p class="c--info-title">料金</p>
					<p class="c--info-text">月額<?php echo number_format((int)$scribe_amount); ?>円</p>
				</div>
				<p class="a--paidpost-scribe-check">サブスクを解約するとすぐに記事が読めなくなります。</p>
				<input autocomplete="none" id="JinrSubscriptionID" name="jinr_subscriotion_id" type="hidden" value="<?php echo $scribe_id; ?>" required>
				<button type="button" name="jinr_register_submit" id="JinrUnsubscribeButton" value="cancel">サブスクを解約する</button>
			</div>
		</div>
	</section>
	<div id="JinrPopupBg"></div>
<?php endif; ?>