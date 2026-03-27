(function ($) {
	$(window).on('load', function () {
		const postContentHeading = document.querySelectorAll("#postContent h2,#postContent h3,#postContent h4,#postContent h5");
		for (var i = 0; i <= postContentHeading.length; i++) {
			if(!postContentHeading[i]) continue;
			if (postContentHeading[i].className.indexOf('jinr-heading') == -1 ){
				if( postContentHeading[i].className == '' || postContentHeading[i].className == 'wp-block-heading' ){
					postContentHeading[i].classList.add('jinr-heading');
				}
			}
		}
		const postContentOl = document.querySelectorAll("#postContent ol");
		for (var i = 0; i <= postContentOl.length; i++) {
			if(!postContentOl[i]) continue;
			if (postContentOl[i].className.indexOf('jinr-list') == -1 && postContentOl[i].className == ''){
				postContentOl[i].classList.add('jinr-list');
			}
		}
		const postContentUl = document.querySelectorAll("#postContent ul");
		for (var i = 0; i <= postContentUl.length; i++) {
			if(!postContentUl[i]) continue;
			if (postContentUl[i].className.indexOf('jinr-list') == -1 && postContentUl[i].className == ''){
				postContentUl[i].classList.add('jinr-list');
			}
		}
	});
})(jQuery);
