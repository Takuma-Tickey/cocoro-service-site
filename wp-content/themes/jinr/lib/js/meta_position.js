jQuery(function ($) {
	// 記事編集画面の「設定」→「パネル」から設定を変更されると元に戻るのでその修正
	$(document).ready(function () {
		function metaPosition() {
			/**
			 * ブロックと投稿が切り替わるタイミングで生成されるpostmetaが変わるので
			 * 監視するごとに要素を取得し直す必要がある
			 */
			let monitored = document.querySelector('.components-panel');
			if (!monitored) return;
			let post_meta_content = monitored.getElementsByClassName('edit-post-meta-boxes-area')[0];
			const meta_youtube = document.querySelector('.jinr-youtube-setting');
			const meta_category = document.querySelector('.jinr-category-setting');
			const meta_settings = document.querySelector('.jinr-display-setting');
			const seo_settings = document.querySelector('.jinr-seo-setting');
			const paid_settings = document.querySelector('.jinr-paid-setting');
			const tag_settings = document.querySelector('.jinr-tag-setting');

			if (post_meta_content !== null) {
				if (meta_youtube !== null) {
					monitored.insertBefore(meta_youtube, post_meta_content);
				}
				if (meta_settings !== null) {
					monitored.insertBefore(meta_settings, post_meta_content);
				}
				if (meta_category !== null) {
					monitored.insertBefore(meta_category, post_meta_content);
				}
				if (seo_settings !== null) {
					monitored.insertBefore(seo_settings, post_meta_content);
				}
				if (seo_settings !== null) {
					monitored.insertBefore(tag_settings, post_meta_content);
				}
			}
		}

		/**
		 * 初期値の設定
		 */
		let monitored = document.querySelector('.components-panel'); // 監視対象のノードを取得
		if (!monitored) return;
		let observer = new MutationObserver(function (mutations) {
			// DOM変化の監視を一時停止
			observer.disconnect();
			metaPosition();
			// DOM変化の監視を再開
			observer.observe(monitored, config);
		});

		// 監視時のオプション
		const config = {
			attributes: true,
			childList: true,
			characterData: true,
		};
		// 監視のスタート
		observer.observe(monitored, config);

		// 設定ボタンをクリックしてから戻すと元に戻るので修正
		const funcBtn = document.querySelector('.interface-pinned-items');
		funcBtn.addEventListener('click', () => {
			window.setTimeout(function () {
				metaPosition();
			}, 10);
		});
	});
});