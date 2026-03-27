<?php get_header(); ?>

<main class="resource-archive container">
  <h1 class="archive-title">お役立ち資料 一覧</h1>

  <div class="resource-cards">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <a href="<?php the_permalink(); ?>" class="resource-card">
        <?php if (has_post_thumbnail()) : ?>
          <div class="card-thumb"><?php the_post_thumbnail('medium'); ?></div>
        <?php endif; ?>
        <div class="card-title"><?php the_title(); ?></div>
      </a>
    <?php endwhile; endif; ?>
  </div>
</main>

<?php get_footer(); ?>
