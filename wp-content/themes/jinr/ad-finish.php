<?php

$post_type = get_post_type();
if (is_single()  && $post_type == 'post') {
	$categories = get_the_category();
	if (!$categories) {
		return;
	}

	// カテゴリーが複数設定されている場合、カテゴリーIDの小さい方を読み込むようにする
	$ids = array_column($categories, 'term_id');
	array_multisort($ids, SORT_ASC, $categories);
	$cat_current  = $categories[0];
	$current_id   = $cat_current->cat_ID;

	$jinr_finish_sponsor_text = get_option('jinr_finish_sponsor_text');
	$jinr_finish_ads_code_01 = do_shortcode(get_option('jinr_finish_ads_code_01'));
	$jinr_finish_sp_display_01 = get_option('jinr_finish_sp_display_01');
	$jinr_finish_ads_code_02 = do_shortcode(get_option('jinr_finish_ads_code_02'));
	$jinr_finish_sp_display_02 = get_option('jinr_finish_sp_display_02');

	/**
	 * 前回のカテゴリーIDを格納していく。
	 * 条件1 : JIN:R設定で設定しているカテゴリーに親がいるのかどうかを検証。
	 * 親を持つ場合            → そのまま格納
	 * 親を持たない場合         → 親を持たないカテゴリーを起点に他のカテゴリーをarray_diffで検証
	 * 
	 * array_diffがtrueの場合 → 取得した値を使う
	 * falseの場合            → 自分のカテゴリーをそのまま使う
	 * 
	 * 注意点
	 * 子カテゴリーの取得するだけではなく、自身のカテゴリーも追加した状態で配列を組む
	 */
	$cat_merge_ids = array();
	for ($num = 1; $num <= 4; $num++) {
		${'cat_array_id_0' . $num} = array();
		${'jinr_ads_choice_category_0' . $num} = get_option('jinr_choise_category_' . $num . '');

		// カテゴリーが未選択ならループを飛ばす
		if (${'jinr_ads_choice_category_0' . $num} == '0') {
			${"merge" . $num} = array('parent' => 'none', 'category_list' => array(0 => 0));
			continue;
		}
		$cat_data = get_category(${'jinr_ads_choice_category_0' . $num});
		if (isset($cat_data->category_parent)) {
			if ($cat_data->category_parent) {
				// 親カテゴリーがある場合
				$child_categories = get_term_children(${'jinr_ads_choice_category_0' . $num}, 'category');
				${'cat_array_id_0' . $num}['parent'] = 'exist';
				array_unshift($child_categories, intval(${'jinr_ads_choice_category_0' . $num}));
				if (!empty($child_categories)) {
					${'cat_array_id_0' . $num}['category_list'] = $child_categories;
				} else {
					${'cat_array_id_0' . $num}['category_list'] = array(0 => 0);
				}
			} else {
				// 親カテゴリーがない場合
				$child_categories = get_term_children(${'jinr_ads_choice_category_0' . $num}, 'category');
				${'cat_array_id_0' . $num}['parent'] = 'none';
				array_unshift($child_categories, intval(${'jinr_ads_choice_category_0' . $num}));
				${'cat_array_id_0' . $num}['category_list'] = $child_categories;
			}
		}
		${"merge" . $num} = array_merge($cat_merge_ids, ${'cat_array_id_0' . $num});
		${"ancestor_ids" . $num} = get_ancestors(get_option('jinr_choise_category_' . $num), 'category');
	}
	//エリア１専用
	for ($m = 1; $m <= 4; $m++) {
		${"exist1_" . $m} = "";
		if (isset(${"ancestor_ids1"}) && isset(${"merge" . $m}['category_list'])) {
			${"check1_" . $m} = array_intersect(${"ancestor_ids1"}, ${"merge" . $m}['category_list']);
			if (!empty(${"check1_" . $m})) {
				${"exist1_" . $m} = array(0);
			} else {
				${"exist1_" . $m} = ${"merge" . $m}['category_list'];
			}
		} else {
			${"exist1_" . $m} = array(0);
		}
	}
	if (!empty($merge1['category_list'])) {
		if (!$merge1['category_list'][0] == 0 && is_array($merge1['category_list'])) {
			$cat_array_ids1 = array_diff($merge1['category_list'], $exist1_2, $exist1_3, $exist1_4);
		} else {
			$cat_array_ids1 = array();
		}
	} else {
		$cat_array_ids1 = array();
	}

	//エリア２専用
	for ($m = 1; $m <= 4; $m++) {
		${"exist2_" . $m} = "";
		if (isset(${"ancestor_ids2"}) && isset(${"merge" . $m}['category_list'])) {
			${"check2_" . $m} = array_intersect(${"ancestor_ids2"}, ${"merge" . $m}['category_list']);
			if (!empty(${"check2_" . $m})) {
				${"exist2_" . $m} = array(0);
			} else {
				${"exist2_" . $m} = ${"merge" . $m}['category_list'];
			}
		} else {
			${"exist2_" . $m} = array(0);
		}
	}
	if (!empty($merge2['category_list'])) {
		if (!$merge2['category_list'][0] == 0 && is_array($merge2['category_list'])) {
			$cat_array_ids2 = array_diff($merge2['category_list'], $exist2_1, $exist2_3, $exist2_4);
		} else {
			$cat_array_ids2 = array();
		}
	} else {
		$cat_array_ids2 = array();
	}

	//エリア３専用
	for ($m = 1; $m <= 4; $m++) {
		${"exist3_" . $m} = "";
		if (isset(${"ancestor_ids3"}) && isset(${"merge" . $m}['category_list'])) {
			${"check3_" . $m} = array_intersect(${"ancestor_ids3"}, ${"merge" . $m}['category_list']);
			if (!empty(${"check3_" . $m})) {
				${"exist3_" . $m} = array(0);
			} else {
				${"exist3_" . $m} = ${"merge" . $m}['category_list'];
			}
		} else {
			${"exist3_" . $m} = array(0);
		}
	}
	if (!empty($merge3['category_list'])) {
		if (!$merge3['category_list'][0] == 0 && is_array($merge3['category_list'])) {
			$cat_array_ids3 = array_diff($merge3['category_list'], $exist3_1, $exist3_2, $exist3_4);
		} else {
			$cat_array_ids3 = array();
		}
	} else {
		$cat_array_ids3 = array();
	}

	//エリア４専用
	for ($m = 1; $m <= 4; $m++) {
		${"exist4_" . $m} = "";
		if (isset(${"ancestor_ids4"}) && isset(${"merge" . $m}['category_list'])) {
			${"check4_" . $m} = array_intersect(${"ancestor_ids4"}, ${"merge" . $m}['category_list']);
			if (!empty(${"check4_" . $m})) {
				${"exist4_" . $m} = array(0);
			} else {
				${"exist4_" . $m} = ${"merge" . $m}['category_list'];
			}
		} else {
			${"exist4_" . $m} = array(0);
		}
	}
	if (!empty($merge4['category_list'])) {
		if (!$merge4['category_list'][0] == 0 && is_array($merge4['category_list'])) {
			$cat_array_ids4 = array_diff($merge4['category_list'], $exist4_1, $exist4_2, $exist4_3);
		} else {
			$cat_array_ids4 = array();
		}
	} else {
		$cat_array_ids4 = array();
	}

	for ($i = 1; $i <= 4; $i++) {
		${'jinr_ads_choice_category_0' . $i} = get_option('jinr_choise_category_' . $i . '');
		if (is_array(${"cat_array_ids" . $i}) && !empty(${"cat_array_ids" . $i})) {
			foreach (${"cat_array_ids" . $i} as $cat_array_id) {
				if ($current_id == $cat_array_id) {
					$jinr_finish_sponsor_text = get_option('jinr_finish_sponsor_text_' . $i . '');
					$jinr_finish_ads_code_01 = do_shortcode(get_option('jinr_finish_ads_code_01_' . $i . ''));
					$jinr_finish_sp_display_01 = get_option('jinr_finish_sp_display_01_' . $i . '');
					$jinr_finish_ads_code_02 = do_shortcode(get_option('jinr_finish_ads_code_02_' . $i . ''));
					$jinr_finish_sp_display_02 = get_option('jinr_finish_sp_display_02_' . $i . '');
					continue;
				}
			}
		}
	}
} elseif (is_page()) {
	$jinr_finish_sponsor_text = get_option('jinr_finish_sponsor_text');
	$jinr_finish_ads_code_01 = do_shortcode(get_option('jinr_finish_ads_code_01'));
	$jinr_finish_sp_display_01 = get_option('jinr_finish_sp_display_01');
	$jinr_finish_ads_code_02 = do_shortcode(get_option('jinr_finish_ads_code_02'));
	$jinr_finish_sp_display_02 = get_option('jinr_finish_sp_display_02');
} else {
	return;
}
if ($jinr_finish_sp_display_01 == '1') {
	$jinr_sp_display = '';
} elseif ($jinr_finish_sp_display_02 == '1') {
	$jinr_sp_display = '';
} else {
	$jinr_sp_display = 'd--sp-nonedisplay';
}
?>
<?php if (!$jinr_finish_ads_code_01 == null  || !$jinr_finish_ads_code_02 == null) : ?>
	<div class="o--ads-area">
		<?php if (!$jinr_finish_sponsor_text == null) : ?>
			<div class="a--ads-sponser"><?php echo $jinr_finish_sponsor_text; ?></div>
		<?php endif; ?>
		<?php if (!$jinr_finish_ads_code_01 == null) : ?>
			<section class="c--ads-area <?php echo $jinr_finish_ads_code_02 == null ? "d--minwidth-100" : ""; ?> <?php echo $jinr_sp_display; ?>">
				<div class="a--ads-rectangle">
					<?php
					echo $jinr_finish_ads_code_01; ?>
				</div>
			</section>
		<?php endif; ?>
		<?php if (!$jinr_finish_ads_code_02 == null) : ?>
			<section class="c--ads-area <?php echo $jinr_sp_display; ?>">
				<div class="a--ads-rectangle">
					<?php echo $jinr_finish_ads_code_02; ?>
				</div>
			</section>
		<?php endif; ?>
	</div>
<?php endif; ?>