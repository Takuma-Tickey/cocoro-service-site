(function ($) {
	$(document).ready(function () {
		/**
		 *
		 * ページネーションの作成とスライダー項目にカスタム属性を追加
		 * サムネイルスライダーにもカスタム属性を追加
		 * スライダーに番号を付与
		 *
		 */
		$('.a--slider-item').each(function (index) {
			$('.a--slider-item').eq(index).attr('data-jinr-slider-index', index);
			$('.a--slider-item-count')
				.eq(index)
				.text(index + 1);
			if (index == '0') {
				$('.o--slider-pagenation').append('<li class="a--slider-pagenation d--pagenation-active" data-jinr-pagenation-index="' + index + '"></li>');
				return;
			}
			$('.o--slider-pagenation').append('<li class="a--slider-pagenation" data-jinr-pagenation-index="' + index + '"></li>');
		});
		// スライダーの数が一つ以下だった場合は処理を終了し、
		if ($('.a--slider-item').length <= 1) {
			return;
		}
		/**
		 * スライダーの数を取得して全体の横幅を指定
		 * デザイン選択によって付与するwidthの値を計算し直す
		 *
		 * 最初の表示位置を設定する
		 * 最初の要素にactiveクラスを追加する
		 */
		let slideWidth = $('.a--slider-item').outerWidth();
		function slideInitialState() {
			// Difine
			const slideNum = $('.a--slider-item').length;
			const slideSetWidth = slideWidth * slideNum;
			// スライド要素の幅を設定する
			$('.a--slider-item').css('width', slideWidth);

			// スライド全体の幅を設定する
			$('.c--jinr-slider').css({
				width: slideSetWidth,
			});
		}

		/**
		 * 速度調整
		 */
		let slideSpeed = '';
		if ($('.o--jinr-slider').hasClass('d--slider-animation-slow') || $('.o--jinr-slider').hasClass('d--imageslider-animation-slow')) {
			slideSpeed = 7500;
		} else if ($('.o--jinr-slider').hasClass('d--slider-animation-normal') || $('.o--jinr-slider').hasClass('d--imageslider-animation-normal')) {
			slideSpeed = 5500;
		} else if ($('.o--jinr-slider').hasClass('d--slider-animation-high') || $('.o--jinr-slider').hasClass('d--imageslider-animation-high')) {
			slideSpeed = 4000;
		}

		/**
		 * 自動再生、ページ送りの動きを実装
		 */
		let clearID = '';
		let callbackId = '';
		const slideAutoMove = function () {
			const activeSlide = $('.d--slider-active');
			const activePagenationData = activeSlide.data('jinr-slider-index');
			if (!activeSlide.next()[0]) {
				$('.c--jinr-slider')
					.stop()
					.animate(
						{ zIndex: 2 },
						{
							duration: 100,
							step: function (now) {
								$('.c--jinr-slider').css({ transform: 'translateX(0px)' });
							},
							complete: function () {
								$('.c--jinr-slider').css('zIndex', 1);
							},
						}
					);
				activeSlide.removeClass('d--slider-active');
				$('.a--slider-item').eq(0).addClass('d--slider-active');
			} else {
				$('.c--jinr-slider')
					.stop()
					.animate(
						{ zIndex: 2 },
						{
							duration: 100,
							step: function (now) {
								$('.c--jinr-slider').css({ transform: 'translateX(-' + slideWidth * (activePagenationData + 1) + 'px)' });
							},
							complete: function () {
								$('.c--jinr-slider').css('zIndex', 1);
							},
						}
					);
				activeSlide.removeClass('d--slider-active');
				activeSlide.next().addClass('d--slider-active');
			}
			clearID = setTimeout(function () {
				callbackId = requestAnimationFrame(function () {
					slideAutoMove();
					pageNext();
				});
			}, slideSpeed);
		};
		clearID = setTimeout(function () {
			callbackId = requestAnimationFrame(function () {
				slideAutoMove();
				pageNext();
			});
		}, slideSpeed);

		// ページネーションの基礎の動き
		const pageNext = function () {
			const pageButton = $('.d--pagenation-active');
			if (pageButton.next().length) {
				pageButton.removeClass('d--pagenation-active');
				pageButton.next().addClass('d--pagenation-active');
				return;
			}
			pageButton.removeClass('d--pagenation-active');
			$('.a--slider-pagenation:eq(0)').addClass('d--pagenation-active');
		};
		const pagePrev = function () {
			const pageButton = $('.d--pagenation-active');
			if (pageButton.prev().length) {
				pageButton.removeClass('d--pagenation-active');
				pageButton.prev().addClass('d--pagenation-active');
				return;
			}
			pageButton.removeClass('d--pagenation-active');
			$('.a--slider-pagenation').last().addClass('d--pagenation-active');
		};
		/**
		 * ページネーション時のループの動きを実装。
		 */
		$('.a--slider-pagenation').on('click', function () {
			let activeSlide = $('.d--slider-active');
			activeSlide.removeClass('d--slider-active');
			if (!$(this).hasClass('d--pagenation-active')) {
				$('.a--slider-pagenation').removeClass('d--pagenation-active');
				$(this).addClass('d--pagenation-active');
			}
			const activePagenationData = $('.d--pagenation-active').data('jinr-pagenation-index');
			$('[data-jinr-slider-index="' + activePagenationData + '"]').addClass('d--slider-active');

			/**
			 * 要素がない場合は最初に戻るように早期return
			 */
			if (!activeSlide.next()[0]) {
				$('.c--jinr-slider')
					.stop()
					.animate(
						{ zIndex: 2 },
						{
							duration: 100,
							step: function (now) {
								$('.c--jinr-slider').css({ transform: 'translateX(0px)' });
							},
							complete: function () {
								$('.c--jinr-slider').css('zIndex', 1);
							},
						}
					);
			}
			activeSlide = $('.d--slider-active');
			$('.c--jinr-slider')
				.stop()
				.animate(
					{ zIndex: 2 },
					{
						duration: 100,
						step: function (now) {
							$('.c--jinr-slider').css({ transform: 'translateX(-' + slideWidth * activePagenationData + 'px)' });
						},
						complete: function () {
							$('.c--jinr-slider').css('zIndex', 1);
						},
					}
				);
			clearTimeout(clearID);
			clearID = setTimeout(function () {
				callbackId = requestAnimationFrame(function () {
					slideAutoMove();
					pageNext();
				});
			}, slideSpeed);
		});

		// スワイプでスライドが動くようにする（PCでは動かない）
		$(function () {
			$('.c--jinr-slider').on('touchstart', onTouchStart); //指が触れたか検知
			$('.c--jinr-slider').on('touchmove', onTouchMove); //指が動いたか検知
			$('.c--jinr-slider').on('touchend', onTouchEnd); //指が離れたか検知
			var direction, position;
			//スワイプ開始時の横方向の座標を格納
			function onTouchStart(event) {
				position = getPosition(event);
				direction = ''; //一度リセットする
			}
			//スワイプの方向（left／right）を取得
			function onTouchMove(event) {
				if (position - getPosition(event) > 70) {
					// 70px以上移動しなければスワイプと判断しない
					direction = 'left'; //左と検知
				} else if (position - getPosition(event) < -70) {
					// 70px以上移動しなければスワイプと判断しない
					direction = 'right'; //右と検知
				}
			}
			function onTouchEnd(event) {
				const activeSlide = $('.d--slider-active');
				if (direction == 'right') {
					// 戻る
					const pageButton = $('.d--pagenation-active');
					if (!activeSlide.prev()[0]) {
						activeSlide.removeClass('d--slider-active');
						$('.a--slider-item').last().addClass('d--slider-active');
						pageButton.removeClass('d--pagenation-active');
						$('.a--slider-pagenation').last().addClass('d--pagenation-active');

						const activePagenationData = $('.d--pagenation-active').data('jinr-pagenation-index');

						$('.c--jinr-slider')
							.stop()
							.animate(
								{ zIndex: 2 },
								{
									duration: 100,
									step: function (now) {
										$('.c--jinr-slider').css({ transform: 'translateX(-' + slideWidth * activePagenationData + 'px)' });
									},
									complete: function () {
										$('.c--jinr-slider').css('zIndex', 1);
									},
								}
							);
					} else {
						activeSlide.removeClass('d--slider-active');
						activeSlide.prev().addClass('d--slider-active');
						pageButton.removeClass('d--pagenation-active');
						pageButton.prev().addClass('d--pagenation-active');

						const activePagenationData = $('.d--pagenation-active').data('jinr-pagenation-index');
						$('.c--jinr-slider')
							.stop()
							.animate(
								{ zIndex: 2 },
								{
									duration: 100,
									step: function (now) {
										$('.c--jinr-slider').css({ transform: 'translateX(-' + slideWidth * activePagenationData + 'px)' });
									},
									complete: function () {
										$('.c--jinr-slider').css('zIndex', 1);
									},
								}
							);
					}

					clearTimeout(clearID);
					clearID = setTimeout(function () {
						callbackId = requestAnimationFrame(function () {
							slideAutoMove();
							pageNext();
						});
					}, slideSpeed);
				} else if (direction == 'left') {
					const pageButton = $('.d--pagenation-active');
					if (!activeSlide.next()[0]) {
						activeSlide.removeClass('d--slider-active');
						$('.a--slider-item').eq(0).addClass('d--slider-active');
						pageButton.removeClass('d--pagenation-active');
						$('.a--slider-pagenation:eq(0)').addClass('d--pagenation-active');

						$('.c--jinr-slider')
							.stop()
							.animate(
								{ zIndex: 2 },
								{
									duration: 100,
									step: function (now) {
										$('.c--jinr-slider').css({ transform: 'translateX(0px)' });
									},
									complete: function () {
										$('.c--jinr-slider').css('zIndex', 1);
									},
								}
							);
					} else {
						activeSlide.removeClass('d--slider-active');
						activeSlide.next().addClass('d--slider-active');
						pageButton.removeClass('d--pagenation-active');
						pageButton.next().addClass('d--pagenation-active');

						const activePagenationData = $('.d--pagenation-active').data('jinr-pagenation-index');
						$('.c--jinr-slider')
							.stop()
							.animate(
								{ zIndex: 2 },
								{
									duration: 100,
									step: function (now) {
										$('.c--jinr-slider').css({ transform: 'translateX(-' + slideWidth * activePagenationData + 'px)' });
									},
									complete: function () {
										$('.c--jinr-slider').css('zIndex', 1);
									},
								}
							);
					}

					clearTimeout(clearID);
					clearID = setTimeout(function () {
						callbackId = requestAnimationFrame(function () {
							slideAutoMove();
							pageNext();
						});
					}, slideSpeed);
				}
			}
			//横方向の座標を取得
			function getPosition(event) {
				return event.originalEvent.touches[0].pageX;
			}
		});
	});
})(jQuery);
