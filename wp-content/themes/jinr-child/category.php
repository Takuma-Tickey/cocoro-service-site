<?php
// 全固定ページID取得
$page_ids = get_posts(array(
    'posts_per_page' => -1,
    'fields'         => 'ids',
    'post_type'      => 'page',
));

$edit_category_ids = array();
$pair_ids = array();
$cat_object = get_queried_object();
$cat_id = isset($cat_object->term_id) ? $cat_object->term_id : null;

// ページIDとJINRカテゴリをマッピング
foreach ($page_ids as $page_id) {
    $jinr_category = get_post_meta($page_id, '_jinr_category', true);
    if ($jinr_category) {
        $edit_category_ids[] = $jinr_category;
        $pair_ids[$page_id] = $jinr_category;
    }
}

// カテゴリに対応する固定ページIDを取得
$target_page_id = array_search($cat_id, $pair_ids);
if ($target_page_id === false) {
    $target_page_id = null;
}

// 該当ページの情報取得（安全に）
$custom_category = $target_page_id ? get_post($target_page_id) : null;
$page_template = get_post_meta($target_page_id, '_wp_page_template', true);
$page_template = str_replace('.php', '', $page_template);
$page_thumbnail = get_the_post_thumbnail_url($target_page_id, 'large_size');

$jinr_category_edit_toggle = get_post_meta($target_page_id, '_jinr_category_edit', true);
$jinr_title_display = get_post_meta($target_page_id, '_jinr_title_display', true);
$jinr_thumbnail_display = get_post_meta($target_page_id, '_jinr_thumbnail_display', true);
$jinr_representation_display = get_post_meta($target_page_id, '_jinr_representations_display', true);
?>

<?php get_header(); ?>

<?php if ($jinr_category_edit_toggle !== false) : ?>
    <?php if (jinr_isset_widets('post-top-widget', true)) : ?>
        <section id="jinr-posttop-widget-area" class="o--widget-area t--main-width t--padding">
            <div id="jinr-posttop-widget-area-inner">
                <?php dynamic_sidebar('post-top-widget'); ?>
            </div>
        </section>
    <?php endif; ?>
<?php endif; ?>

<main id="mainContent" class="<?php jinr_mainContent_class_insert(); ?>">
    <div id="mainContentInner" class="t--main-width <?php if ($jinr_category_edit_toggle !== '1') echo 'd--default-category'; ?>">

        <article id="jinrArticle" class="<?php jinr_jinrArticle_class_insert(); ?>">

            <?php if ($jinr_category_edit_toggle == "1" && $custom_category) : ?>
                <?php if ($page_template !== 'template-full-width') : ?>
                    <?php if ($jinr_title_display !== "1" && $jinr_thumbnail_display !== "1") : ?>
                        <header id="postHeader">
                            <?php if ($jinr_title_display !== "1") : ?>
                                <div id="postHeaderInner" class="<?php echo $page_template !== 'template-full-width' ? jinr__article_width() : ''; ?>">
                                    <h1 id="jinrPostTitle" class="c--entry-title"><?php echo get_the_title($target_page_id); ?></h1>
                                </div>
                            <?php endif; ?>
                            <?php if (jinr__eyecatch_off() && $jinr_thumbnail_display !== "1" && $page_thumbnail) : ?>
                                <?php
                                $imgID = get_post_thumbnail_id($target_page_id);
                                $img = wp_get_attachment_image_src($imgID, 'full');
                                $imgAlt = get_post_meta($imgID, '_wp_attachment_image_alt', true);
                                ?>
                                <div id="jinrPostThumb" <?php jinr_jinrPostThumb_class_insert(); ?>>
                                    <img src="<?php echo esc_url($img[0]); ?>" alt="<?php echo esc_attr($imgAlt); ?>" width="<?php echo esc_attr($img[1]); ?>" height="<?php echo esc_attr($img[2]); ?>">
                                </div>
                            <?php endif; ?>
                        </header>
                    <?php endif; ?>
                <?php endif; ?>

                <section id="postContent" class="<?php echo jinr__article_width(); ?> <?php echo jinr__font_size(); ?> <?php echo jinr__font_size_sp(); ?>">
                    <?php if ($jinr_representation_display === '') : ?>
                        <?php if (jinr__representation_display_postfirst() && jinr__representation_display_custom_category()) :
                            $none_display_category_ids = explode(",", jinr__representations_none_display_ids());
                            if (!in_array($cat_id, $none_display_category_ids)) : ?>
                                <div class="c--labeling-act <?php echo jinr__representation_design_type(); ?>">
                                    <span class="a--labeling-act"><?php echo jinr__representations_pr_text_postfirst(); ?></span>
                                </div>
                            <?php endif; ?>
                        <?php endif; ?>
                    <?php endif; ?>

                    <?php
                    echo apply_filters('the_content', $custom_category->post_content);
                    get_template_part('object/sns-share-selected');
                    ?>
                </section>

                <footer id="postFooter">
                    <?php if (jinr__sns_share_bottom_display() && !get_post_meta($target_page_id, '_jinr_snsbutton_display', true)) : ?>
                        <div id="snsShareBottom" class="<?php echo jinr__sns_share_design(); ?> <?php echo jinr__sns_share_color(); ?> <?php echo jinr__sns_share_color() === "d--sns-share-color-solid" ? "t--round" : ""; ?>">
                            <div id="snsShareBottomInner">
                                <?php get_template_part('object/sns-share'); ?>
                            </div>
                        </div>
                    <?php endif; ?>
                </footer>
            <?php else : ?>

                <!-- 通常のカテゴリーページ -->
                <header id="postHeader">
                    <div id="postHeaderInner">
                        <span class="d--archive-subtitle ef">CATEGORY</span>
                        <h1 id="jinrPostTitle" class="c--entry-title"><?php echo esc_html(single_cat_title('', false)); ?></h1>
                    </div>
                </header>

                <section id="postContent" class="<?php echo jinr__article_width(); ?> <?php echo jinr__font_size(); ?> <?php echo jinr__font_size_sp(); ?>">
                    <div id="jinrPostList" <?php echo jinr__postlist_hover_style() !== 'none' ? 'class="' . jinr__postlist_hover_style() . '"' : ''; ?>>
                        <div id="<?php echo esc_attr($cat_id); ?>" class="o--postlist-inner <?php echo jinr__postlist_style(); ?> d--postlist-column2 <?php echo jinr__article_width(); ?> selected">
                            <?php if (have_posts()) : ?>
                                <?php while (have_posts()) : the_post(); ?>
                                    <?php get_template_part('object/new-post-list'); ?>
                                <?php endwhile; ?>
                            <?php else : ?>
                                <article class="new-post-list-item">記事がありません</article>
                            <?php endif; ?>

                            <?php
                            if (jinr__postlist_pagenation_style() === 'd--postlist-pagenation') {
                                jinr_pagenation_list_callback();
                            } elseif (jinr__postlist_pagenation_style() === 'd--postlist-asyn' && $wp_query->max_num_pages > 1) {
                                echo '<div class="jinr-loadmore a--postlist-more" data-cat-id="recent"><span>もっと見る</span></div>';
                            }
                            ?>
                        </div>
                    </div>
                </section>

            <?php endif; ?>
        </article>

        <?php if (jinr__post_column_style() == 't--post-two-column') : ?>
            <?php get_sidebar(); ?>
        <?php else : ?>
            <?php if (get_post_meta($post->ID, '_jinr_sidebar1col_display', true) == "1") : ?>
                <?php get_sidebar(); ?>
            <?php endif; ?>
        <?php endif; ?>

    </div>
</main>

<?php get_footer(); ?>
