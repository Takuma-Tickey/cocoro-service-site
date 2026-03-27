<?php
/**
 * Archive template for "導入事例 (cases)"
 */

get_header();
?>

<main id="mainContent" class="<?php jinr_mainContent_class_insert(); ?>">
  <div id="mainContentInner" class="t--main-width">
    <article id="jinrArticle" class="<?php jinr_jinrArticle_class_insert(); ?>">

      <header id="postHeader">
        <div id="postHeaderInner">
          <span class="d--archive-subtitle ef">CASES</span>
          <h1 id="jinrPostTitle" class="c--entry-title">導入事例</h1>
        </div>
      </header>

      <section id="postContent" class="d--article-width-740 d--font-pc-l-size d--font-sp-l-size">

        <section class="b--jinr-block b--jinr-postlist d--postlist-type-new d--postlist-rectangle d--postlist-rectangle-sp d--postlist-column1 d--postlist-animation-fade js--scr-animation d--postlist-hover-up is-animated">

          <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
              <article class="o--postlist-item" data-id="<?php the_ID(); ?>">
                <a class="c--post-link" href="<?php the_permalink(); ?>">
                  
                  <figure class="c--post-image">
                    <?php if (has_post_thumbnail()) : ?>
                      <?php the_post_thumbnail('medium', ['class' => 'a--post-img-src']); ?>
                    <?php else : ?>
                      <img class="a--post-img-src" src="<?php echo get_template_directory_uri(); ?>/img/no-image.png" alt="No image" />
                    <?php endif; ?>
                  </figure>

                  <div class="c--post-contents">
                    <div class="a--post-title d--bold"><?php the_title(); ?></div>

                    <div class="c--post-meta">
                      <div class="a--post-date"><?php the_time('Y.m.d'); ?></div>
                      <?php
                      $cats = get_the_category();
                      if (!empty($cats)) {
                          echo '<div class="a--post-category">' . esc_html($cats[0]->name) . '</div>';
                      }
                      ?>
                    </div>
                  </div>

                </a>
              </article>
            <?php endwhile; ?>

              <?php if (function_exists('jinr_pagenation_list_callback')) {
                jinr_pagenation_list_callback();
              } ?>

          <?php else : ?>
            <p>導入事例が見つかりませんでした。</p>
          <?php endif; ?>

        </section>

      </section>

    </article>

    <?php if (jinr__post_column_style() == 't--post-two-column') : ?>
      <?php get_sidebar(); ?>
    <?php endif; ?>
  </div>
</main>

<?php get_footer(); ?>
