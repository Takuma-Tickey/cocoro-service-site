<?php
$spcv_all_display = jinr__spcv_all_display();
$spcv_category1_display = jinr__spcv_category1_display();
$spcv_category2_display = jinr__spcv_category2_display();
$spcv_category3_display = jinr__spcv_category3_display();

function cvbAll()
{
	//全ページ用の設定値を取得
	$spcv_all_style = jinr__spcv_all_style();
	$spcv_all_image_select = jinr__spcv_all_image_select();
	$spcv_all_image_url = jinr__spcv_all_image_url();
	$spcv_all_url = jinr__spcv_all_url();
	$spcv_all_url_external = jinr__spcv_all_url_external();
	$spcv_all_icon_name = jinr__spcv_all_icon_name();
	$spcv_all_image_subtext = jinr__spcv_all_subtext();
	$spcv_all_image_maintext = jinr__spcv_all_maintext();
	$spcv_all_gradation = jinr__spcv_all_style() == "d--spcv-solid" && jinr__spcv_all_color_type() == "gradation" ? jinr__spcv_all_color_gradation_select() : "";
	$spcv_all_exclude_cat = jinr__spcv_all_exclusion_id();
	$spcv_all_exclude_page = jinr__spcv_all_exclusion_page_id();
	$spcv_all_exclude_page_array = explode(",", $spcv_all_exclude_page); //上記IDを分割して配列化

	//全ページ用除外ID整形
	$spcv_all_exclude_cat_array = explode(",", $spcv_all_exclude_cat); //上記IDを分割して配列化
	if (!empty($spcv_all_exclude_cat)) {
		foreach ($spcv_all_exclude_cat_array as $key => $value) {
			$spcv_all_children_cat[$key] = get_term_children($spcv_all_exclude_cat_array[$key], 'category'); //各子カテ取得
			if (!empty($spcv_all_children_cat[$key])) {
				$spcv_all_exclude_cat_array[] = $spcv_all_children_cat[$key][0]; //配列に子カテIDを連結していく
			}
		}
	}

	ob_start(); // バッファリング開始
?>
	<?php if (!is_single($spcv_all_exclude_page_array) && !is_page($spcv_all_exclude_page_array)) : ?>
		<?php if (!in_category($spcv_all_exclude_cat_array)) : ?>
			<section id="cvButton" class="o--cvbutton-wrapper d--cvbutton-all <?php echo $spcv_all_style; ?> <?php echo $spcv_all_image_select; ?>">
				<a class="o--cv-button <?php print $spcv_all_gradation; ?>" href="<?php echo $spcv_all_url; ?>" target="<?php echo $spcv_all_url_external == true ? "_blank" : ""; ?>">
					<?php if ($spcv_all_image_select == "d--image-notneed") : ?>
						<div class="a--cv-button-icon"><i class="jin-icons jin-ifont-<?php echo $spcv_all_icon_name; ?>" aria-hidden="true"></i></div>
					<?php else : ?>
						<div class="a--cv-button-image"><img width="45" height="45" src="<?php echo $spcv_all_image_url; ?>" /></div>
					<?php endif; ?>
					<div class="c--cv-button-copy">
						<?php if ($spcv_all_image_subtext) : ?>
							<div class="a--cv-button-subcopy ef"><?php echo $spcv_all_image_subtext; ?></div>
						<?php endif; ?>
						<div class="a--cv-button-maincopy d--bold"><?php echo $spcv_all_image_maintext; ?></div>
					</div>
				</a>
				<div class="a--cv-button-shadow"></div>
			</section>
		<?php endif; ?>
	<?php endif; ?>
<?php
	$cvb_all = ob_get_clean(); // バッファリング取得＆クリア

	echo $cvb_all;
}

function cvbCategory()
{
	//各カテゴリー別CVの設定値を取得
	for ($num = 1; $num <= 2; $num++) {
		${'spcv_category' . $num . '_display'} = 'jinr__spcv_category' . $num . '_display';
		${'spcv_category' . $num . '_display'} = ${'spcv_category' . $num . '_display'}();
		${'spcv_category' . $num . '_select'} = 'jinr__spcv_category' . $num . '_select';
		${'spcv_category' . $num . '_select'} = ${'spcv_category' . $num . '_select'}();
		${'spcv_category' . $num . '_style'} = 'jinr__spcv_category' . $num . '_style';
		${'spcv_category' . $num . '_style'} = ${'spcv_category' . $num . '_style'}();
		${'spcv_category' . $num . '_image_select'} = 'jinr__spcv_category' . $num . '_image_select';
		${'spcv_category' . $num . '_image_select'} = ${'spcv_category' . $num . '_image_select'}();
		${'spcv_category' . $num . '_image_url'} = 'jinr__spcv_category' . $num . '_image_url';
		${'spcv_category' . $num . '_image_url'} = ${'spcv_category' . $num . '_image_url'}();
		${'spcv_category' . $num . '_url'} = 'jinr__spcv_category' . $num . '_url';
		${'spcv_category' . $num . '_url'} = ${'spcv_category' . $num . '_url'}();
		${'spcv_category' . $num . '_url_external'} = 'jinr__spcv_category' . $num . '_url_external';
		${'spcv_category' . $num . '_url_external'} = ${'spcv_category' . $num . '_url_external'}();
		${'spcv_category' . $num . '_icon_name'} = 'jinr__spcv_category' . $num . '_icon_name';
		${'spcv_category' . $num . '_icon_name'} = ${'spcv_category' . $num . '_icon_name'}();
		${'spcv_category' . $num . '_subtext'} = 'jinr__spcv_category' . $num . '_subtext';
		${'spcv_category' . $num . '_subtext'} = ${'spcv_category' . $num . '_subtext'}();
		${'spcv_category' . $num . '_maintext'} = 'jinr__spcv_category' . $num . '_maintext';
		${'spcv_category' . $num . '_maintext'} = ${'spcv_category' . $num . '_maintext'}();
		${'spcv_category' . $num . '_color_type'} = 'jinr__spcv_category' . $num . '_color_type';
		${'spcv_category' . $num . '_color_type'} = ${'spcv_category' . $num . '_color_type'}();
		${'spcv_category' . $num . '_color_gradation_select'} = 'jinr__spcv_category' . $num . '_color_gradation_select';
		${'spcv_category' . $num . '_color_gradation_select'} = ${'spcv_category' . $num . '_color_gradation_select'}();
		${'spcv_category' . $num . '_gradation'} = ${'spcv_category' . $num . '_style'} == "d--spcv-solid" && ${'spcv_category' . $num . '_color_type'} == "gradation" ? ${'spcv_category' . $num . '_color_gradation_select'} : "";


		//カテゴリーIDを取得し子カテ含め配列化
		if (${'spcv_category' . $num . '_display'} == "on") {
			${'spcv_category' . $num . '_select'} = array(intval(${'spcv_category' . $num . '_select'})); //ここに子カテゴリー含めたIDが格納される

			foreach (${'spcv_category' . $num . '_select'} as $key => $value) {
				${'spcv_category' . $num . '_children_cat'}[$key] = get_term_children(${'spcv_category' . $num . '_select'}[$key], 'category'); //各子カテ取得
				$own_cat = ${'spcv_category' . $num . '_select'};
				$cat_children = ${'spcv_category' . $num . '_children_cat'}[$key];
				${"merge" . $num} = [];
				if (!empty(${'spcv_category' . $num . '_children_cat'}[$key])) {
					${"merge" . $num} = array_merge($own_cat, $cat_children);
				} else { //子階層がないとき
					${"merge" . $num} = $own_cat;
				}
			}
		}
	}
	$own_id1 = ${'spcv_category1_select'};
	$own_id2 = ${'spcv_category2_select'};
	$cat_id1 = [];
	$cat_id2 = [];

	if ($spcv_category1_display == "on" && $spcv_category2_display == "on") {
		$compare1 = array_intersect($merge1, $merge2);
		$diff1 = array_diff($merge1, $compare1);
		if ($compare1 == null) { //重複なし
			$cat_id1 = $merge1;
			$cat_id2 = $merge2;
			($merge2);
		} else {
			$cat_id1 = $diff1;
			$cat_id2 = $compare1;
		}
	} elseif ($spcv_category1_display == "on" && $spcv_category2_display == "off") {
		$cat_id1 = $merge1;
	} elseif ($spcv_category1_display == "off" && $spcv_category2_display == "on") {
		$cat_id2 = $merge2;
	}

	ob_start(); // バッファリング開始
?>
	<?php if (in_category($cat_id1)) : ?>
		<section id="cvButton" class="o--cvbutton-wrapper d--cvbutton-category1 <?php echo ${'spcv_category1_style'}; ?> <?php echo ${'spcv_category1_image_select'}; ?>">
			<a class="o--cv-button <?php print ${'spcv_category1_gradation'}; ?>" href="<?php echo ${'spcv_category1_url'}; ?>" target="<?php echo ${'spcv_category1_url_external'} == true ? "_blank" : ""; ?>">
				<?php if (${'spcv_category1_image_select'} == "d--image-notneed") : ?>
					<div class="a--cv-button-icon"><i class="jin-icons jin-ifont-<?php echo ${'spcv_category1_icon_name'}; ?>" aria-hidden="true"></i></div>
				<?php else : ?>
					<div class="a--cv-button-image"><img width="45" height="45" src="<?php echo ${'spcv_category1_image_url'}; ?>" /></div>
				<?php endif; ?>
				<div class="c--cv-button-copy">
					<?php if (${'spcv_category1_subtext'}) : ?>
						<div class="a--cv-button-subcopy ef"><?php echo ${'spcv_category1_subtext'}; ?></div>
					<?php endif; ?>
					<div class="a--cv-button-maincopy d--bold"><?php echo ${'spcv_category1_maintext'}; ?></div>
				</div>
			</a>
			<div class="a--cv-button-shadow"></div>
		</section>
	<?php elseif (in_category($cat_id2)) : ?>
		<section id="cvButton" class="o--cvbutton-wrapper d--cvbutton-category2 <?php echo ${'spcv_category2_style'}; ?> <?php echo ${'spcv_category2_image_select'}; ?>">
			<a class="o--cv-button <?php print ${'spcv_category2_gradation'}; ?>" href="<?php echo ${'spcv_category2_url'}; ?>" target="<?php echo ${'spcv_category2_url_external'} == true ? "_blank" : ""; ?>">
				<?php if (${'spcv_category2_image_select'} == "d--image-notneed") : ?>
					<div class="a--cv-button-icon"><i class="jin-icons jin-ifont-<?php echo ${'spcv_category2_icon_name'}; ?>" aria-hidden="true"></i></div>
				<?php else : ?>
					<div class="a--cv-button-image"><img width="45" height="45" src="<?php echo ${'spcv_category2_image_url'}; ?>" /></div>
				<?php endif; ?>
				<div class="c--cv-button-copy">
					<?php if (${'spcv_category2_subtext'}) : ?>
						<div class="a--cv-button-subcopy ef"><?php echo ${'spcv_category2_subtext'}; ?></div>
					<?php endif; ?>
					<div class="a--cv-button-maincopy d--bold"><?php echo ${'spcv_category2_maintext'}; ?></div>
				</div>
			</a>
			<div class="a--cv-button-shadow"></div>
		</section>
	<?php elseif (jinr__spcv_all_display() == "on") : //非該当カテゴリーページでは全ページ用のCVボタンを表示（除外カテゴリー以外）
	?>
		<?php cvbAll(); ?>
	<?php endif; ?>

<?php
	$cvb_category = ob_get_clean(); // バッファリング取得＆クリア

	echo $cvb_category;
}

if ($spcv_category1_display == "on" || $spcv_category2_display == "on") {
	cvbCategory();
} elseif ($spcv_all_display == "on") { //全ページ（除外カテゴリー以外）
	cvbAll();
}
?>