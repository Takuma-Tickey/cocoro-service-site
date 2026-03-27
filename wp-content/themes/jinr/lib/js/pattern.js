jQuery(function ($) {
	setTimeout(function () {
		const btnElement = document.getElementById('jinrPatternBlockButton');
		const btnElement2 = document.getElementById('jinrShortCutListButton');
		// if(!btnElement) return;
		// const iframeDOM = document.getElementById('wpwrap');
		
		// // iframe内のキャッシュが強いので、ランダムな値を生成してURLに付与
		// const cacheNum = (Math.random() + 1).toString(36).substring(2);
		// iframeDOM.insertAdjacentHTML('afterbegin', '<div id="jinr-pattern-load"><span id="jinr-pattern-close"></span><div id="jinr-frame-pattern"><iframe id="jinr-iframe-load" width="1440" height="900" allow="clipboard-read; clipboard-write self https://jinr-theme.com/?cachenum='+cacheNum+'"></iframe></div></div>');
		// if (!btnElement) return;
		// const popupContents = document.getElementById('jinr-pattern-load');
		// let iframeContents = document.getElementById('jinr-iframe-load');

		// let iframeFlag = true;
		// btnElement.addEventListener('click', () => {
		// 	popupContents.classList.add('js-pattern-open');
		// 	iframeDOM.classList.add('js-pattern-back');
		// 	if (iframeFlag == true) {
		// 		iframeContents.contentDocument.location.replace('https://jinr-theme.com/?cachenum='+cacheNum+'');
		// 		iframeFlag = false;
		// 	}
		// });
		// document.addEventListener('click', (e) => {
		// 	if (e.target.getAttribute('id') === 'jinr-template-button_svg__jinr-template-button_svg' ) {
		// 		return;
		// 	}
		// 	if (!e.target.closest('#jinr-iframe-load')) {
		// 		popupContents.classList.remove('js-pattern-open');
		// 		iframeDOM.classList.remove('js-pattern-back');
		// 	}
		// });

		btnElement.addEventListener('click', () => {
			const patternUrl = 'https://jinr-theme.com/';
			window.open(patternUrl, '_blank')
		});

		btnElement2.addEventListener('click', () => {
			const shortcutUrl = 'https://jinr.jp/manual/cheat-sheet/';
			window.open(shortcutUrl, '_blank')
		});

	}, 120);
});
