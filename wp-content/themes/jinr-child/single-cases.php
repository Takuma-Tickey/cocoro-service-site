<?php get_header(); ?>

<main id="mainContent" class="<?php jinr_mainContent_class_insert(); ?>">
    <div id="mainContentInner" class="t--main-width">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

            <article id="jinrArticle" class="<?php jinr_jinrArticle_class_insert(); ?>">

                <header id="postHeader">
                    <div id="postHeaderInner" class="<?php echo jinr__article_width(); ?>">
                        <div id="jinrPostMeta">
                            <?php
                            $categories = wp_get_post_terms(get_the_ID(), 'case_category');
                            $rendered_ids = [];

                            if ($categories && !is_wp_error($categories)) {
                                usort($categories, function ($a, $b) {
                                    return count(get_ancestors($b->term_id, 'case_category')) - count(get_ancestors($a->term_id, 'case_category'));
                                });

                                echo '<div class="post-categories" style="display: flex; flex-wrap: wrap; gap: 1em;">';

                                foreach ($categories as $category) {
                                    if (in_array($category->term_id, $rendered_ids)) continue;

                                    $parent_ids = get_ancestors($category->term_id, 'case_category');
                                    $parent_ids = array_reverse($parent_ids);

                                    $output = '<div class="a--post-cat">';
                                    $is_first = true;

                                    foreach ($parent_ids as $parent_id) {
                                        $parent = get_term($parent_id, 'case_category');
                                        if (!is_wp_error($parent)) {
                                            if ($is_first) {
                                                $output .= '<a href="' . esc_url(get_term_link($parent)) . '"><span class="jif jin-ifont-archive" aria-hidden="true"></span>' . esc_html($parent->name) . '</a> &gt; ';
                                                $is_first = false;
                                            } else {
                                                $output .= '<a href="' . esc_url(get_term_link($parent)) . '">' . esc_html($parent->name) . '</a> &gt; ';
                                            }
                                        }
                                    }

                                    if ($is_first) {
                                        $output .= '<a href="' . esc_url(get_term_link($category)) . '"><span class="jif jin-ifont-archive" aria-hidden="true"></span>' . esc_html($category->name) . '</a>';
                                    } else {
                                        $output .= '<a href="' . esc_url(get_term_link($category)) . '">' . esc_html($category->name) . '</a>';
                                    }
                                    $output .= '</div>';

                                    echo $output;

                                    $rendered_ids[] = $category->term_id;
                                    foreach ($parent_ids as $pid) {
                                        $rendered_ids[] = $pid;
                                    }
                                }
                                echo '</div>';
                            }
                            ?>
                        </div>
						<div id="jinrPostMeta">
							<?php get_template_part('object/time'); ?>
						</div>
                        <h1 id="jinrPostTitle" class="c--entry-title"><?php the_title(); ?></h1>
                    </div>

                    <?php if (has_post_thumbnail()) : ?>
                        <div id="jinrPostThumb" <?php jinr_jinrPostThumb_class_insert(); ?>>
                            <?php the_post_thumbnail('large_size'); ?>
                        </div>
                    <?php endif; ?>
                </header>

                <section id="postContent" class="<?php echo jinr__article_width(); ?> <?php echo jinr__font_size(); ?> <?php echo jinr__font_size_sp(); ?>">
                    <?php the_content(); ?>
					
                    <?php get_template_part('object/sns-share-selected'); ?>
                    <?php get_template_part('object/nextpage'); ?>
					
					<?php
					$arr = get_the_tags();
					if ($arr) {
						echo '<div id="postTagBox">';
						foreach ((array) $arr as $tag) {
							echo '<a href="' . get_tag_link($tag->term_id) . '">#' . $tag->name . '</a>';
						}
						echo '</div>';
					}
					?>
				</section>

                <footer id="postFooter">
                    <?php if (jinr__sns_share_bottom_display()) : ?>
                        <div id="snsShareBottom" class="<?php echo jinr__sns_share_design(); ?> <?php echo jinr__sns_share_color(); ?>">
                            <div id="snsShareBottomInner">
                                <?php get_template_part('object/sns-share'); ?>
                            </div>
                        </div>
                    <?php endif; ?>
                </footer>

            </article>

        <?php endwhile; endif; ?>

        <?php if (jinr__post_column_style() == 't--post-two-column') : ?>
            <?php get_sidebar(); ?>
        <?php elseif (get_post_meta($post->ID, '_jinr_sidebar1col_display', true) == "1") : ?>
            <?php get_sidebar(); ?>
        <?php endif; ?>
    </div>
</main>

<?php get_footer(); ?>