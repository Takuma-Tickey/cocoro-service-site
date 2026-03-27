<!-- ここからOGP -->
<?php if (is_home() || is_front_page()) : ?>
	<meta property="og:type" content="website">
<?php else: ?>
	<meta property="og:type" content="article">
<?php endif; ?>
<?php
global $post;
$site_desc = preg_replace('{&lt;br/&gt;}', '', get_bloginfo('description'));
$site_name = get_bloginfo('name');
if (is_single() || is_page()) {
	$description = get_post_meta($post->ID, '_jinr_description_display', true);
	$use_excerpt = $post->post_excerpt;
	if (jinr_title_customize() == "1") {
		$sep = "";
		$site_name = "";
	}
}
$description_home = get_theme_mod('jinr__desc_text');
$sep        = jinr__title_sepalater();

function jinrOGPImage()
{
	$ogimage = get_template_directory_uri() . '/lib/img/noimage.png';
	if (! jinr__noimage_url() == null) {
		$ogimage = jinr__noimage_url();
	}
	echo $ogimage;
}
?>
<?php if (is_home()) : ?>
	<meta property="og:title" content="<?php bloginfo('name'); ?><?php echo $sep; ?><?php echo $site_desc; ?>">
	<meta property="og:url" content="<?php bloginfo('url'); ?>">
	<?php if (! $description_home == null) : ?>
		<meta property="og:description" content="<?php echo $description_home; ?>">
	<?php else : ?>
		<meta property="og:description" content="">
	<?php endif; ?>
<?php elseif (is_front_page()) : ?>
	<?php if (! get_post_meta($post->ID, '_jinr_seotitle_display', true) == null) : ?>
		<meta property="og:title" content="<?php echo get_post_meta($post->ID, '_jinr_seotitle_display', true); ?>">
	<?php else : ?>
		<meta property="og:title" content="<?php bloginfo('name'); ?><?php echo $sep; ?><?php echo $site_desc; ?>">
	<?php endif; ?>
	<meta property="og:url" content="<?php bloginfo('url'); ?>">
	<?php if (isset($description) && ! $description == null) : ?>
		<meta property="og:description" content="<?php echo $description; ?>">
	<?php elseif (! $description_home == null) : ?>
		<meta property="og:description" content="<?php echo $description_home; ?>">
	<?php elseif (! empty($use_excerpt)) : ?>
		<meta property="og:description" content="<?php echo $use_excerpt; ?>">
	<?php else : ?>
		<meta property="og:description" content="<?php echo jinr_auto_desc_func(); ?>">
	<?php endif; ?>
<?php elseif (is_singular()) : ?>
	<?php if (! get_post_meta($post->ID, '_jinr_seotitle_display', true) == null) : ?>
		<meta property="og:title" content="<?php echo get_post_meta($post->ID, '_jinr_seotitle_display', true); ?>">
	<?php else : ?>
		<meta property="og:title" content="<?php the_title(); ?><?php echo $sep; ?><?php echo $site_name; ?>">
	<?php endif; ?>
	<meta property="og:url" content="<?php the_permalink(); ?>">
	<?php if (! $description == null) : ?>
		<meta property="og:description" content="<?php echo $description; ?>">
	<?php elseif (! empty($use_excerpt)) : ?>
		<meta property="og:description" content="<?php echo $use_excerpt; ?>">
	<?php else : ?>
		<meta property="og:description" content="<?php echo jinr_auto_desc_func(); ?>">
	<?php endif; ?>
<?php elseif (is_404()) : ?>
	<meta property="og:title" content="<?php bloginfo('name'); ?>">
	<meta property="og:url" content="<?php bloginfo('url'); ?>">
	<meta property="og:description" content="記事がありません">
<?php elseif (is_tag()) : ?>
	<?php
	$postTag = get_the_tags();
	$url     = get_tag_link($postTag[0]->term_id);
	?>
	<meta property="og:title" content="「<?php esc_html(single_cat_title()); ?>」タグの記事一覧<?php echo $sep; ?><?php bloginfo('name'); ?>">
	<meta property="og:url" content="<?php echo $url; ?>">
<?php elseif (is_category()) : ?>
	<?php
	//全固定ページID取得
	$page_ids = get_posts(array(
		'posts_per_page' => -1,
		'fields'         => 'ids',
		'post_type'      => 'page',
	));

	//変数初期値設定
	$edit_category_ids = array();
	$target_page_id = "";
	$counter = 0;
	$pair_ids = array();

	foreach ($page_ids as $page_id) {
		$jinr_category = get_post_meta($page_id, '_jinr_category', true);

		//現在のカテゴリーページID
		$cat_id = get_query_var('cat');
		$edit_category_ids[] = $jinr_category;

		$pair_ids += array(
			$page_ids[$counter] => $edit_category_ids[$counter],
		);
		$counter++;
	}

	$target_page_id = array_search($cat_id, $pair_ids);
	$jinr_category_edit_toggle = get_post_meta($target_page_id, '_jinr_category_edit', true);
	$custom_category = get_post($target_page_id);

	$cat_slug = get_query_var('category_name');
	$cat_name = single_cat_title("", false);
	$cat_image = get_the_post_thumbnail_url($target_page_id, 'full');
	?>
	<?php if ($jinr_category_edit_toggle == "1") : ?>
		<?php if (! get_post_meta($target_page_id, '_jinr_seotitle_display', true) == null) : ?>
			<meta property="og:title" content="<?php echo get_post_meta($target_page_id, '_jinr_seotitle_display', true); ?>">
		<?php else: ?>
			<?php if (jinr_title_customize() == "1"): ?>
				<meta property="og:title" content="<?php echo get_the_title($target_page_id); ?>">
			<?php else: ?>
				<meta property="og:title" content="<?php echo get_the_title($target_page_id); ?><?php echo $sep; ?><?php bloginfo('name'); ?>">
			<?php endif; ?>
		<?php endif; ?>
		<?php if (! get_post_meta($target_page_id, '_jinr_description_display', true) == null) : ?>
			<meta property="og:description" content="<?php echo get_post_meta($target_page_id, '_jinr_description_display', true); ?>">
		<?php else: ?>
			<meta property="og:description" content="<?php echo jinr_category_desc(); ?>">
		<?php endif; ?>
		<meta property="og:url" content="<?php echo (empty($_SERVER["HTTPS"]) ? "http://" : "https://") . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]; ?>">
	<?php else: ?>
		<meta property="og:title" content="<?php echo $cat_name; ?><?php echo $sep; ?><?php bloginfo('name'); ?>">
		<meta property="og:url" content="<?php echo (empty($_SERVER["HTTPS"]) ? "http://" : "https://") . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]; ?>">
	<?php endif; ?>
<?php else : ?>
	<meta property="og:title" content="<?php bloginfo('name'); ?><?php echo $sep; ?><?php echo $site_desc; ?>">
	<meta property="og:url" content="<?php bloginfo('url'); ?>">
	<meta property="og:description" content="<?php echo $description_home; ?>">
<?php endif; ?>
<?php if (is_home() || is_front_page()) : ?>
	<?php if (jinr__ogp_image_url()) : ?>
		<meta property="og:image" content="<?php echo jinr__ogp_image_url(); ?>">
	<?php else : ?>
		<meta property="og:image" content="<?php jinrOGPImage(); ?>">
	<?php endif; ?>
<?php elseif (is_singular()) : ?>
	<?php if (has_post_thumbnail()) : ?>
		<?php
		$thumb_id   = get_post_thumbnail_id();
		$image    = get_post_meta($post->ID, '_jinr_ogp_image_url', true);
		$last_id    = get_post_meta($post->ID, '_jinr_last_featured_id', true);

		// 「OGP meta が未設定」または「最後に生成した featured_id と異なる」
		if (! $image || (int) $last_id !== (int) $thumb_id) {
			// 現在のサムネイルを OGP に
			$image = wp_get_attachment_image_src($thumb_id, 'full')[0];
		}
		?>
		<meta property="og:image" content="<?php echo $image; ?>">
	<?php else : ?>
		<meta property="og:image" content="<?php jinrOGPImage(); ?>">
	<?php endif; ?>
<?php elseif (is_category()) : ?>
	<?php if (has_post_thumbnail()) : ?>
		<meta property="og:image" content="<?php echo $cat_image; ?>">
	<?php else : ?>
		<meta property="og:image" content="<?php jinrOGPImage(); ?>">
	<?php endif; ?>
<?php else : ?>
	<?php if (jinr__ogp_image_url()) : ?>
		<meta property="og:image" content="<?php echo jinr__ogp_image_url(); ?>">
	<?php else : ?>
		<meta property="og:image" content="<?php jinrOGPImage(); ?>">
	<?php endif; ?>
<?php endif; ?>
<!-- ここまでOGP -->