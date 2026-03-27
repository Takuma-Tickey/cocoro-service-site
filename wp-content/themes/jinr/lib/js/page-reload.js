jQuery(function ($) {
    $(function ($) {
		$(window).on('load', function() {
			let val = $('select[id^="inspector-select-control"]').val();
			if (val == "template-full-width.php") {
				$("body").addClass("page-template-template-full-width");
				$(".wp-block-post-title").addClass("d--display-none-title");
			}
		});
		$(document).on("change", 'select[id^="inspector-select-control"]', function () {
			let val = $(this).val();
			if (val == "template-full-width.php") {
				$("body").addClass("page-template-template-full-width");
				$(".wp-block-post-title").addClass("d--display-none-title");
			} else if(val == "") {
				$("body").removeClass("page-template-template-full-width");
				$(".wp-block-post-title").removeClass("d--display-none-title");
			}
        });
    });
});
