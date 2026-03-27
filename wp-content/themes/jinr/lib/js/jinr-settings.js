/**
 *  - JIN設定の「広告管理」で選択したカテゴリーによって「広告タグ設置」の名前が変わるように
 *  - タブ切り替えで「使い方マニュアルを見る」のリンク先を変更
 */ 
(function ($) {
	document.addEventListener('DOMContentLoaded', function(){
		let catElement = {};
		for(let i=1; i<5; i++){
			catElement[i] = document.getElementById('jinr_choise_category_'+i+'');
			if (!catElement[i]) return;
			let catIndex = catElement[i].selectedIndex;
			let catText  = catElement[i].options[catIndex].text;
			let labelElement = document.getElementsByClassName('a--ads-tabs')[i];
			labelElement.textContent = catText;
			catElement[i].addEventListener('change', function(){
				catIndex = catElement[i].selectedIndex;
				catText  = catElement[i].options[catIndex].text;
				labelElement.textContent = catText;
			}, false);
		}
	}, false);
})(jQuery);

jQuery(document).ready(function ($) {
    $('.a--check-using-article').on('click', function () {
        var keyword = decodeURIComponent($(this).data('keyword'));
        var outputList = $(this).next('.c--using-article');
        outputList.empty();

        $.ajax({
			type: 'POST',
			url: my_ajax_object.ajax_url,
			data: {
				action: 'jinr_search_posts_by_keyword',
				keyword: keyword,
			},
			success: function (response) {
				outputList.html(response);
			},
			error: function (jqXHR, textStatus, errorThrown) {
				console.log("Error:", textStatus, errorThrown);
				alert('エラーが発生しました。');
			}
		});		
    });
});

// サブスクリプションのチェックボックスにチェックが入っている時だけ、入力欄を表示させる
(function ($) {
	document.addEventListener('DOMContentLoaded', function(){
		const subscriptionCheck = document.getElementById('jinr_paidpost_subscription_check');
		if (subscriptionCheck) {
			if (subscriptionCheck.checked == true) {
				document.getElementById('JinrSubscriptionKeyWrapper').style.display = 'block';
			}
			subscriptionCheck.addEventListener('click', function () {
				if (subscriptionCheck.checked == true) {
					document.getElementById('JinrSubscriptionKeyWrapper').style.display = 'block';
				} else {
					document.getElementById('JinrSubscriptionKeyWrapper').style.display = 'none';
				}
			}, false);
		}
	}, false);
})(jQuery);