jQuery(document).ready(function ($) {
	var custom_uploader;

	if ($('input[name=profile_image]').val() == '') {
		$('#jinrProfileMedia').empty();
	}

	$('#jinr-profile-media').click(function (e) {
		e.preventDefault();

		if (custom_uploader) {
			custom_uploader.open();
			return;
		}
		custom_uploader = wp.media({
			title: 'メディアの選択またはアップロード',
			/* ライブラリの一覧は画像のみ */
			library: {
				type: 'image',
			},
			button: {
				text: '選択',
			},
			multiple: false,
		});

		custom_uploader.on('select', function () {
			var images = custom_uploader.state().get('selection');

			/* file の中に選択された画像の各種情報が入っている */
			images.each(function (file) {
				console.log(file);

				/* テキストフォームと表示されたサムネイル画像があればクリア */
				$('input[name=profile_image]').val('');
				$('#jinrProfileMedia').empty();

				/* テキストフォームに画像の ID を表示 */
				if (file.attributes.sizes.thumbnail) {
					$('input[name=profile_image]').val(file.attributes.sizes.thumbnail.url);

					/* プレビュー用に選択されたサムネイル画像を表示 */
					$('#jinrProfileMedia').html('<img src="' + file.attributes.sizes.thumbnail.url + '" />');
				} else {
					$('input[name=profile_image]').val(file.attributes.sizes.full.url);

					/* プレビュー用に選択されたサムネイル画像を表示 */
					$('#jinrProfileMedia').html('<img src="' + file.attributes.sizes.full.url + '" />');
				}
			});
		});
		custom_uploader.open();
	});

	/* クリアボタンを押した時の処理 */
	$('#jinr-profile-media-clear').click(function () {
		$('input[name=profile_image]').val('');
		$('#jinrProfileMedia').empty();
	});
});
