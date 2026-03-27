<?php
/**
 * Archive template for "NEWS" (post type: news)
 */

get_header();

/**
 * 投稿に紐づく「カテゴリ（ターム名）」をできるだけ賢く1つ取得する
 * - まずは news 用によくあるタクソノミーを優先
 * - なければ、その投稿タイプに紐づく任意のタクソノミーから拾う
 */
function jinr_get_first_term_name_for_news_archive($post_id) {
  $term_name = '';

  // よくある候補を優先（必要なら増やしてください）
  $preferred_taxonomies = array('news_cat', 'news_category', 'category');

  foreach ($preferred_taxonomies as $tax) {
    if (taxonomy_exists($tax)) {
      $terms = get_the_terms($post_id, $tax);
      if (!empty($terms) && !is_wp_error($terms)) {
        $term_name = $terms[0]->name;
        break;
      }
    }
  }

  // それでも無ければ、post_type に紐づくタクソノミーから適当に拾う
  if ($term_name === '') {
    $taxes = get_object_taxonomies(get_post_type($post_id), 'names');
    if (!empty($taxes)) {
      foreach ($taxes as $tax) {
        if ($tax === 'post_format') continue;
        if (!taxonomy_exists($tax)) continue;
        $terms = get_the_terms($post_id, $tax);
        if (!empty($terms) && !is_wp_error($terms)) {
          $term_name = $terms[0]->name;
          break;
        }
      }
    }
  }

  return $term_name;
}
?>

<main id="mainContent" class="<?php jinr_mainContent_class_insert(); ?>">
  <div id="mainContentInner" class="t--main-width">
    <article id="jinrArticle" class="<?php jinr_jinrArticle_class_insert(); ?>">

      <header id="postHeader">
        <div id="postHeaderInner">
          <span class="d--archive-subtitle ef">NEWS</span>
          <h1 id="jinrPostTitle" class="c--entry-title">お知らせ</h1>
        </div>
      </header>

      <section id="postContent" class="d--article-width-740 d--font-pc-l-size d--font-sp-l-size">

        <!-- JINRの「NEWS（newstext）」寄せ -->
        <section
          class="b--jinr-block b--jinr-postlist
                 d--postlist-type-new
                 d--postlist-newstext d--postlist-newstext-sp
                 d--postlist-column3 d--postlist-column1-sp
                 d--postlist-hover-hovercolor
                 js--scr-animation">

          <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
              <article class="o--postlist-item" data-id="<?php the_ID(); ?>">
                <a class="c--post-link" href="<?php the_permalink(); ?>">

                  <figure class="c--post-image">
                    <?php if (has_post_thumbnail()) : ?>
                      <?php the_post_thumbnail('medium', array('class' => 'a--post-img-src')); ?>
                    <?php else : ?>
                      <img class="a--post-img-src" src="<?php echo esc_url(get_template_directory_uri()); ?>/img/no-image.png" alt="No image" loading="lazy" />
                    <?php endif; ?>
                  </figure>

                  <div class="c--post-contents">
                    <div class="a--post-title d--bold"><?php the_title(); ?></div>

                    <div class="c--post-meta">
                      <div class="a--post-date"><?php echo esc_html(get_the_date('Y.m.d')); ?></div>

                      <?php
                        $term_name = jinr_get_first_term_name_for_news_archive(get_the_ID());
                        if ($term_name !== '') {
                          echo '<div class="a--post-category">' . esc_html($term_name) . '</div>';
                        }
                      ?>
                    </div>
                  </div>

                </a>
              </article>
            <?php endwhile; ?>

            <?php
              // ページネーション（JINRがあればそれを優先、無ければWP標準にフォールバック）
              if (function_exists('jinr_pagenation_list_callback')) {
                jinr_pagenation_list_callback();
              } else {
                the_posts_pagination(array(
                  'mid_size'  => 1,
                  'prev_text' => '前へ',
                  'next_text' => '次へ',
                ));
              }
            ?>

          <?php else : ?>
            <p>お知らせが見つかりませんでした。</p>
          <?php endif; ?>

        </section>

      </section>

    </article>

    <?php if (function_exists('jinr__post_column_style') && jinr__post_column_style() == 't--post-two-column') : ?>
      <?php get_sidebar(); ?>
    <?php endif; ?>
  </div>
</main>

<?php get_footer(); ?>
