wp.domReady(() => {
	const { useState } = wp.element;
	wp.hooks.addFilter('editor.PostFeaturedImage', 'jinr/wrap-post-featured-image', (OriginalComponent) => {
		return (props) => {
			// isBusy フラグを持つ
			const [isBusy, setIsBusy] = useState(false);

			const dom = [OriginalComponent(props)];

			dom.push(
				wp.element.createElement(
					wp.components.Button,
					{
						isPrimary: true,
						isBusy: isBusy, // ボタン内にスピナーを表示
						disabled: isBusy, // 忙しい間は無効化
						onClick: async () => {
							setIsBusy(true);
							try {
								const postId = wp.data.select('core/editor').getCurrentPostId();
								const title = props.postTitle || wp.data.select('core/editor').getEditedPostAttribute('title') || '記事タイトルがありません';

								// featured は即時 await、OGP は裏で fire‑and‑forget
								const { media: featuredMedia } = (
									await Promise.all([
										(async () => {
											const blob = await generateCanvasImage(title, { width: 1920, height: 1080 });
											const filename = `thumbnails-featured-${postId}.png`;
											const media = await uploadImageToMediaLibrary(blob, filename);
											return { media };
										})(),
									])
								)[0];

								// アイキャッチを即時設定
								wp.data.dispatch('core/editor').editPost({
									featured_media: featuredMedia.id,
								});

								// OGP は非同期で続行
								(async () => {
									const blob = await generateCanvasImage(title, { width: 1200, height: 628 });
									const filename = `thumbnails-ogp-${postId}.png`;
									const media = await uploadImageToMediaLibrary(blob, filename);
									await wp.apiFetch({
										path: `/wp/v2/posts/${postId}`,
										method: 'POST',
										data: {
											meta: {
												_jinr_ogp_image_url: media.source_url,
												_jinr_last_featured_id: featuredMedia.id,
											},
										},
									});
								})();
							} catch (err) {
								alert('画像生成中にエラーが発生しました[' + err + ']');
							} finally {
								setIsBusy(false);
							}
						},
						style: { width: '100%', justifyContent: 'center' },
					},
					[
						// SVGアイコン
						wp.element.createElement(
							'svg',
							{
								key: 'icon',
								viewBox: '0 0 200 200',
								width: '20',
								height: '20',
								style: { marginRight: '6px' },
								'aria-hidden': 'true',
								focusable: 'false',
							},
							wp.element.createElement('path', {
								d: 'M168.4 82l-.2-.2.2-3.1c.5-8.4-1.9-16.7-6.5-22.8-3.6-4.8-10.3-10.7-21.9-11.7-2.8-8.4-10.2-14.7-19.9-17-2.4-.6-4.9-.9-7.4-.9-7.7 0-14.9 2.9-20 8.1-2.1-.6-4.3-.9-6.5-.9-5.1 0-10 1.7-14 4.8-6 4.7-9.6 11.9-9.6 19.5-5.5 2.7-8.6 8.2-11.3 13.1l-.1.1c-3.6 6.6-6.5 11.8-14.2 11.8-2.7 0-6-.6-9.7-1.9-.5-.2-1.1-.3-1.6-.3-1.7 0-3.3.9-4.2 2.4-5.3 8.7-6 25.1 1.9 37.5 5.9 9.2 15.6 14.2 27.3 14.2h1.1c2 4.8 5.3 8.9 9.6 11.7 3.6 2.2 7.7 3.4 12.1 3.4h1.3c3.1 5 8.3 8.9 15 11.2 4.1 1.4 8.2 2.1 12.3 2.1s8.1-.7 11.9-2.1l3.9-1.4c.2.1.4.1.4.1 5.1 1.7 10.4 2.6 15.8 2.6 26.9-.1 47.1-20.5 47-47.4-.1-12.9-4.6-24.4-12.7-32.9zM102 88.6c-1 2-.1 4.4 1.9 5.4.7.3 1.5.4 2.2.4 11.6-1.6 22.2 6.6 23.8 18.2 0 .2 0 .3.1.5.7 6-1.2 12-5.2 16.5-6.5 7.2-17.1 9.2-25.7 4.7-1.9-1.1-4.4-.5-5.5 1.4-.8 1.3-.7 3 .1 4.3 3.1 5 7.1 9.4 11.8 12.9-.8 0-1.5.1-2.2.1-3.7 0-7.1-.6-10.3-1.7-5.4-1.8-9.2-5-10.8-9-.7-1.9-2.5-3.2-4.5-3.2-.4 0-.9.1-1.2.2-1 .2-2 .4-3 .4-2.4 0-4.8-.7-6.7-2-3.5-2.3-5.8-5.7-6.6-9.6-.4-2.2-2.5-3.9-4.8-3.9h-.6c-1.4.2-2.9.3-4.2.3-10.4 0-16-5.3-18.9-9.7-3.7-5.7-5.8-16-3.3-23.7 3.1.8 6 1.2 8.7 1.2 13.6 0 18.9-9.7 22.9-16.9 2.8-5 4.9-8.9 8.8-9.5 1.3-.2 2.4-.9 3.1-2 .8-1.1 1-2.4.8-3.6-.9-5.3 1.3-10.9 5.6-14.2 2.4-1.8 5.3-2.8 8.2-2.8 2 0 4 .5 5.9 1.4.6.3 1.3.5 2 .5 1.6 0 3-.7 4-2.1 3.2-4.3 8.6-6.9 14.5-6.9 1.7 0 3.4.2 5.2.6 5.7 1.4 12.2 5.5 13.5 13 .3 2.4 2.4 4.1 4.9 4.1h.4c7.6 0 13.6 2.7 17.5 7.9 2.7 3.7 4.2 8 4.5 12.3v.2c-6.8-3.8-14.5-5.7-22.3-5.6-15.8.2-29 7.8-34.6 19.9z',
							}),
							wp.element.createElement('path', { d: 'M70.9 80.6c-4 0-7.2 4.4-7.2 10.1s3.2 10.1 7.2 10.1 7.2-4.4 7.2-10.1-3.2-10.1-7.2-10.1z' })
						),
						// ボタンラベル
						wp.element.createElement('span', { key: 'label' }, 'アイキャッチ画像を自動生成'),
					]
				),
				wp.element.createElement('a', { className: 'jinr-thumbnails-text', href: 'https://jinr.jp/manual/generate-thumbnails/', target: '_blank', rel: 'noopener noreferrer' }, 'アイキャッチ生成の使い方はこちら')
			);

			return dom;
		};
	});
});

// 1) フォントを事前ロードしてキャッシュ
const preloadFontPromise = (async function preloadFont() {
	const family = jinrFeaturedImageGenerator.defaultFontFamily.split(',')[0].trim();
	const fontText = await fetch(jinrFeaturedImageGenerator.fontDataUrl).then((r) => r.text());
	const uri = fontText.startsWith('data:') ? fontText : `data:font/woff;base64,${fontText}`;

	// 400 weight
	const face400 = new FontFace(family, `url(${uri}) format('woff')`, { weight: '400', style: 'normal' });
	await face400.load();
	document.fonts.add(face400);

	// 600 weight（ctx.font で使用）
	const face600 = new FontFace(family, `url(${uri}) format('woff')`, { weight: '600', style: 'normal' });
	await face600.load();
	document.fonts.add(face600);
})();

// 2) 画像キャッシュ付きの loadImage
const _imageCache = {};
function loadImage(src) {
	if (_imageCache[src]) return _imageCache[src];
	_imageCache[src] = new Promise((res, rej) => {
		const img = new Image();
		img.crossOrigin = 'anonymous';
		img.onload = () => res(img);
		img.onerror = () => rej(new Error('背景画像かプロフィール画像が設定されていません'));
		img.src = src;
	});
	return _imageCache[src];
}

/**
 * テキストを文字単位で maxTextWidth に収まるよう折り返し、
 * 最大 3 行を超える場合は 3 行目の末尾に「…」をつけて返す
 *
 * @param {string} text — 折り返したい文字列
 * @param {number} maxTextWidth — １行あたりの最大幅（px）
 * @param {string} fontSpec — Canvas2DContext にセットする font（例: "80px Noto Sans JP"）
 * @returns {string[]} — 折り返された行の配列（長さは最大3）
 */
function splitTextToFit(text, maxTextWidth, fontSpec) {
	const maxLines = 3;
	const ellipsis = '…';

	// Canvas で幅を測る
	const canvas = document.createElement('canvas');
	const ctx = canvas.getContext('2d');
	ctx.font = fontSpec;

	// 1) 文字単位で仮行を作る
	const allLines = [];
	let currentLine = '';
	for (const ch of text) {
		const testLine = currentLine + ch;
		if (ctx.measureText(testLine).width <= maxTextWidth) {
			currentLine = testLine;
		} else {
			allLines.push(currentLine);
			currentLine = ch;
		}
	}
	if (currentLine) {
		allLines.push(currentLine);
	}

	// 2) 最大行数以内ならそのまま返す
	if (allLines.length <= maxLines) {
		return allLines;
	}

	// 3) 3 行目を三点リーダー付きに切り詰め
	const result = allLines.slice(0, maxLines);
	let third = result[maxLines - 1];

	// 「…」込みで収まるように末尾を詰める
	while (ctx.measureText(third + ellipsis).width > maxTextWidth && third.length > 0) {
		third = third.slice(0, -1);
	}
	result[maxLines - 1] = third + ellipsis;
	return result;
}

// Canvas 描画 → PNG Blob
async function generateCanvasImage(title, { width, height }) {
	await preloadFontPromise;
	await document.fonts.ready;
	const canvas = document.createElement('canvas');
	canvas.width = width;
	canvas.height = height;
	const ctx = canvas.getContext('2d');

	// 共通パラメータ
	const scale = Math.min(width / 1920, height / 1080);
	const margin = 40 * scale;
	const whiteX = margin;
	const whiteY = margin;
	const whiteW = width - margin * 2;
	const whiteH = height - margin * 2;
	const extraX = margin * 0.75;
	const extraY = margin * 1;
	const layout = jinrFeaturedImageGenerator.thumbnailsTextLayout || 'left';
	const showProfImg = jinrFeaturedImageGenerator.thumbnailsProfileImageSwitch === 'on';
	const profName = jinrFeaturedImageGenerator.defaultprofileName;
	const bgPattern = jinrFeaturedImageGenerator.thumbnailsDesignPattern;

	// 1) 背景
	if (bgPattern === 'bg_pattern') {
		if (jinrFeaturedImageGenerator.thumbnailsBgColor === 'simple') {
			ctx.fillStyle = jinrFeaturedImageGenerator.thumbnailsSimpleColor;
			ctx.fillRect(0, 0, width, height);
		} else {
			const sel = jinrFeaturedImageGenerator.thumbnailsBgGradationSelect;
			let c1, c2, degVal;
			if (sel === 'd--jinr-gradation2') {
				c1 = jinrFeaturedImageGenerator.gradation2_color1;
				c2 = jinrFeaturedImageGenerator.gradation2_color2;
				degVal = jinrFeaturedImageGenerator.gradation2_deg;
			} else if (sel === 'd--jinr-gradation3') {
				c1 = jinrFeaturedImageGenerator.gradation3_color1;
				c2 = jinrFeaturedImageGenerator.gradation3_color2;
				degVal = jinrFeaturedImageGenerator.gradation3_deg;
			} else {
				c1 = jinrFeaturedImageGenerator.gradation1_color1;
				c2 = jinrFeaturedImageGenerator.gradation1_color2;
				degVal = jinrFeaturedImageGenerator.gradation1_deg;
			}
			const rad = (parseFloat(degVal) * Math.PI) / 180;
			const L = Math.hypot(width, height);
			const cx = width / 2;
			const cy = height / 2;
			const x0 = cx - Math.cos(rad) * (L / 2);
			const y0 = cy - Math.sin(rad) * (L / 2);
			const x1 = cx + Math.cos(rad) * (L / 2);
			const y1 = cy + Math.sin(rad) * (L / 2);
			const grad = ctx.createLinearGradient(x0, y0, x1, y1);
			grad.addColorStop(0, c1);
			grad.addColorStop(1, c2);
			ctx.fillStyle = grad;
			ctx.fillRect(0, 0, width, height);
		}
	} else {
		const img = await loadImage(jinrFeaturedImageGenerator.thumbnailsBgImageUrl);
		const r = Math.max(width / img.width, height / img.height);
		const sw = width / r;
		const sh = height / r;
		ctx.drawImage(img, (img.width - sw) / 2, (img.height - sh) / 2, sw, sh, 0, 0, width, height);
	}

	// 2) 白い矩形（image_pattern のときはスキップ）
	if (bgPattern !== 'image_pattern') {
		const r = 20 * scale;
		ctx.fillStyle = '#fff';
		ctx.beginPath();
		ctx.moveTo(whiteX + r, whiteY);
		ctx.lineTo(whiteX + whiteW - r, whiteY);
		ctx.quadraticCurveTo(whiteX + whiteW, whiteY, whiteX + whiteW, whiteY + r);
		ctx.lineTo(whiteX + whiteW, whiteY + whiteH - r);
		ctx.quadraticCurveTo(whiteX + whiteW, whiteY + whiteH, whiteX + whiteW - r, whiteY + whiteH);
		ctx.lineTo(whiteX + r, whiteY + whiteH);
		ctx.quadraticCurveTo(whiteX, whiteY + whiteH, whiteX, whiteY + whiteH - r);
		ctx.lineTo(whiteX, whiteY + r);
		ctx.quadraticCurveTo(whiteX, whiteY, whiteX + r, whiteY);
		ctx.closePath();
		ctx.fill();
	}

	// 3) テキスト
	const textColor = jinrFeaturedImageGenerator.thumbnailsTextColor || '#333';
	const fontSize = 84 * scale;
	const lineHeight = fontSize * 1.6;
	const letterSpace = 2 * scale;
	ctx.fillStyle = textColor;
	ctx.textBaseline = 'alphabetic';
	ctx.letterSpacing = letterSpace;
	ctx.font = `600 ${fontSize}px ${jinrFeaturedImageGenerator.defaultFontFamily}`;
	ctx.textAlign = layout === 'center' ? 'center' : 'start';

	let maxTW = whiteW - extraX * 2 - 40; // 基本幅

	if (layout === 'center') {
		maxTW *= 0.9; // ← 0.7〜0.9 で調整可
	}

	if (bgPattern === 'bg_pattern') {
		maxTW -= 100 * scale; // 既存の調整を維持
	}

	const linesArr = splitTextToFit(title, maxTW, ctx.font);

	let textX, textY;
	if (layout === 'center') {
		textX = width / 2;
		textY = whiteY + (whiteH - lineHeight * linesArr.length) / 2 + fontSize / 2;
	} else {
		textX = whiteX + margin + extraX + 10;
		textY = whiteY + margin + extraY + fontSize + 10;
	}
	linesArr.forEach((l, i) => ctx.fillText(l, textX, textY + i * lineHeight));

	// 4) プロフィール描画
	if (showProfImg) {
		const profName = jinrFeaturedImageGenerator.defaultprofileName || '';
		const profJob = jinrFeaturedImageGenerator.defaultprofileJob || '';
		const pImg = await loadImage(jinrFeaturedImageGenerator.defaultProfileImage);
		const pSize = 150 * scale;
		const pMargin = 40 * scale;
		const nameFontSize = 36 * scale;
		const jobFontSize = nameFontSize * 0.65;
		const nameJobGap = 20 * scale;

		// 名前の幅を測定
		ctx.font = `400 ${nameFontSize}px ${jinrFeaturedImageGenerator.defaultFontFamily}`;

		// 名前＋ギャップ＋肩書き の総高さ
		const totalTextH = profJob
			? nameFontSize + nameJobGap + jobFontSize // 名前＋ギャップ＋肩書き
			: nameFontSize; // 名前だけ

		// プロフィールブロックの配置座標を計算
		let pX, pY;
		pX = whiteX + margin + extraX;
		pY = whiteY + whiteH - margin - pSize;

		// プロフィール画像（円形クリップ）
		ctx.save();
		ctx.beginPath();
		ctx.arc(pX + pSize / 2, pY + pSize / 2, pSize / 2, 0, 2 * Math.PI);
		ctx.clip();
		const sq = Math.min(pImg.width, pImg.height); // 正方形の一辺
		const sx = (pImg.width - sq) / 2; // 切り抜き開始 X
		const sy = (pImg.height - sq) / 2; // 切り抜き開始 Y
		ctx.drawImage(
			pImg, // 元画像
			sx,
			sy,
			sq,
			sq, // 切り抜き範囲  (sx, sy, sw, sh)
			pX,
			pY, // 描画先左上
			pSize,
			pSize // 描画サイズ (円の直径に合わせて正方形)
		);
		ctx.restore();

		// プロフィール名を上下中央に
		ctx.textAlign = 'start';
		ctx.fillStyle = textColor;
		ctx.textBaseline = 'alphabetic';
		ctx.font = `400 ${nameFontSize}px ${jinrFeaturedImageGenerator.defaultFontFamily}`;
		const nameY = pY + (pSize - totalTextH) / 2 + nameFontSize;
		ctx.fillText(profName, pX + pSize + pMargin, nameY);

		// 肩書きを名前の下にギャップ＋フォントサイズで配置
		if (profJob) {
			ctx.fillStyle = textColor;
			ctx.font = `300 ${jobFontSize}px ${jinrFeaturedImageGenerator.defaultFontFamily}`;
			const jobY = nameY + nameJobGap + jobFontSize;
			ctx.fillText(profJob, pX + pSize + pMargin, jobY);
		}
	}

	// 5) Blob返却
	return new Promise((res) => canvas.toBlob((b) => res(b), 'image/png'));
}

// PNG Blob をメディアライブラリへ
async function uploadImageToMediaLibrary(blob, filename) {
	const form = new FormData();
	form.append('file', blob, filename);
	return wp.apiFetch({ path: '/wp/v2/media', method: 'POST', body: form });
}
