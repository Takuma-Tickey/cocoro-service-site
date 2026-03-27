<!-- breadcrumb -->
<?php if ( ! is_home() && ! is_front_page() ) : ?>
<section id="breadCrumb">

	<?php if ( is_single() && get_the_category() != false ) : ?>

		<?php
		// ▼ 投稿ページ（post）のとき：カテゴリごとにパンくずを1行ずつ出力
		$categories = get_the_category();
		foreach ( $categories as $category ) :
		?>
			<ul id="breadCrumbInner">
				<li class="c--breadcrumb-item">
					<a href="<?php echo home_url( '/' ); ?>">
						<?php echo jinr_breadcrumb_change_text() !== "" ? jinr_breadcrumb_change_text() : "TOP" ; ?>
					</a>
				</li>
				<?php
				// この投稿が属しているカテゴリの階層を辿る
				$category_hierarchy = get_category_parents( $category->term_id, true, '////' );
				$category_hierarchy = explode( '////', $category_hierarchy );

				foreach ( $category_hierarchy as $cat_list ) {
					if ( ! empty( $cat_list ) ) {
						// JINRオリジナルと同じ整形処理
						$cat_list = preg_replace( '/href="(\S+)"/', 'href="$1"', $cat_list );
						$cat_list = preg_replace( '/>/', '>', $cat_list, 1 );
						$cat_list = preg_replace( '/<\/a>/', '</a>', $cat_list );
						echo '<li class="c--breadcrumb-item"><span class="a--breadcrumb-parts">＞</span>' . $cat_list . '</li>';
					}
				}
				?>
				<li class="c--breadcrumb-item">
					<span class="a--breadcrumb-parts">＞</span><?php the_title(); ?>
				</li>
			</ul>
		<?php endforeach; ?>

	<?php else : ?>

		<ul id="breadCrumbInner">
			<li class="c--breadcrumb-item">
				<a href="<?php echo home_url( '/' ); ?>">
					<?php echo jinr_breadcrumb_change_text() !== "" ? jinr_breadcrumb_change_text() : "TOP" ; ?>
				</a>
			</li>

			<?php
			// ▼ ここから下は JINR オリジナルそのまま（is_single 部分だけ削っている）
			if ( is_category() ) {

				if ( get_the_category() != false ) {

					global $cat;
					$category_hierarchy = array_reverse(get_ancestors($cat, 'category'));
					foreach( $category_hierarchy as $cat_list ){
						if( !empty( $cat_list ) ){
							$cat_name = get_category($cat_list)->name;
							$cat_link = get_category_link($cat_list);
							echo '<li class="c--breadcrumb-item"><span class="a--breadcrumb-parts">＞</span><a href="'. $cat_link .'">' . $cat_name . '</a></li>';
						}
					}
				}
			} elseif ( is_tax() ) {

				global $post;
				$query_obj    = get_queried_object();
				$query_obj_id = get_queried_object_id();
				$name         = $query_obj->name;
				$slug         = $query_obj->slug;

				if ( $query_obj->parent != 0 ) {
					$ancestor_arr = array_reverse( get_ancestors( $query_obj_id, '', 'taxonomy' ) );

					foreach ( $ancestor_arr as $ancestor ) {
						$parent_term = get_term( $ancestor );
						$parent_slug = $parent_term->slug;
						$parent_name = $parent_term->name;
						$parent_str  = '<li class="c--breadcrumb-item"><span class="a--breadcrumb-parts">＞</span><a href="' . $parent_slug . '">' . $parent_name . '</a></li>';
					}
					$str = $parent_str . '<li class="c--breadcrumb-item"><span class="a--breadcrumb-parts">＞</span>' . $name . '</li>';

					echo $str;

				} else {
					$str = '<li class="c--breadcrumb-item"><span class="a--breadcrumb-parts">＞</span>' . $name . '</li>';

					echo $str;
				}
			} elseif ( is_tag() ) {

				$tag = single_tag_title( '', false );
				echo '<li class="c--breadcrumb-item"><i class="jic jin-ifont-arrow space" aria-hidden="true"></i>' . $tag . '</li>';

			} elseif ( is_date() ) {

				$day          = get_query_var( 'day' );
				$month        = get_query_var( 'monthnum' );
				$year         = get_query_var( 'year' );
				$postTyleLink = get_post_type_archive_link( get_post_type() );

				if ( $day != 0 ) {

					$str = '<li class="c--breadcrumb-item"><span class="a--breadcrumb-parts">＞</span><a href="' . $postTyleLink . '/' . $year . '/" >' . $year . '年</a></li>';

					$str .= '<li class="c--breadcrumb-item"><span class="a--breadcrumb-parts">＞</span><a href="' . $postTyleLink . '/' . $year . '/' . $month . '/" >' . $month . '月</a></li>';

					$str .= '<li class="c--breadcrumb-item"><span class="a--breadcrumb-parts">＞</span>' . $day . '日</li>';

				} elseif ( $month != 0 ) {

					$str = '<li class="c--breadcrumb-item"><span class="a--breadcrumb-parts">＞</span><a href="' . $postTyleLink . '/' . $year . '/" >' . $year . '年</a></li>';

					$str .= '<li class="c--breadcrumb-item"><span class="a--breadcrumb-parts">＞</span>' . $month . '月</li>';

				} else {
					$str = '<li class="c--breadcrumb-item"><span class="a--breadcrumb-parts">＞</span>' . $year . '年</li>';
				}
				echo $str;

			} elseif ( is_search() ) {

				$str = '<li class="c--breadcrumb-item"><span class="a--breadcrumb-parts">＞</span>検索結果「' . get_search_query() . '」</li>';

				echo $str;

			} elseif ( is_author() ) {

				$str = '<li class="c--breadcrumb-item"><span class="a--breadcrumb-parts">＞</span>投稿者：' . get_the_author_meta( 'display_name', get_query_var( 'author' ) ) . '</li>';

				echo $str;

			} elseif ( is_404() ) {

				$str = '<li class="c--breadcrumb-item"><span class="a--breadcrumb-parts">＞</span>ページが見つかりませんでした</li>';

				echo $str;

			} elseif ( is_post_type_archive() ) {
				$customPostTitle = post_type_archive_title( '', false );

				$str = '<li class="c--breadcrumb-item"><span class="a--breadcrumb-parts">＞</span>' . $customPostTitle . '</li>';

				echo $str;
			}
			?>
			<?php if ( is_singular() ) : ?>
				<li class="c--breadcrumb-item"><span class="a--breadcrumb-parts">＞</span><?php the_title(); ?></li>
			<?php elseif ( is_category() ) : ?>
				<li class="c--breadcrumb-item"><span class="a--breadcrumb-parts">＞</span><?php global $cat; echo get_category($cat)->name; ?></li>
			<?php endif; ?>
		</ul>

	<?php endif; ?>

</section>
<?php endif; ?>
<!--breadcrumb-->
