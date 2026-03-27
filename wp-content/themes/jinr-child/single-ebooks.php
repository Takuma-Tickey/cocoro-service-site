<?php get_header(); ?>

<main class="ebook-wrapper">
  <div class="inner two-column">

    <!-- ✅ 左カラム：資料内容 -->
    <div class="main-column">
      <h1><?php the_title(); ?></h1>

      <?php $img = get_field('material_thumbnail'); ?>
      <?php if ($img): ?>
        <img src="<?php echo esc_url($img['url']); ?>" alt="<?php echo esc_attr($img['alt']); ?>" style="max-width:100%; height:auto; margin-bottom: 20px;">
      <?php endif; ?>

      <div class="material-description">
        <?php the_field('material_description'); ?>
      </div>
    </div>

    <!-- ✅ 右カラム：フォーム -->
    <aside class="form-column">
      <h2>資料ダウンロードお申し込み</h2>
      <?php echo do_shortcode('[contact-form-7 id="879b531" title="資料ダウンロード"]'); ?>
    </aside>

  </div>
</main>

<?php get_footer(); ?>
