<!-- ここからOGP -->
<?php
// ★SEOプラグインがある場合は OGP 出力をスキップ（重複防止）
if ( defined('WPSEO_VERSION') || defined('AIOSEO_VERSION') || defined('AIOSEO_PLUGIN_NAME') || defined('RANK_MATH_VERSION') ) {
	return;
}
?>

<?php if (is_home() || is_front_page()) : ?>
	<meta property="og:type" content="website">
<?php else: ?>
	<meta property="og:type" content="article">
<?php endif; ?>

<?php
global $post, $wp;
$site_desc = preg_replace('{&lt;br/&gt;}', '', get_bloginfo('description'));
$site_name = get_bloginfo('name');
$sep = jinr__title_sepalater();
$description = '';
$use_excerpt = '';
$description_home = get_theme_mod('jinr__desc_text');

// ★値を返す関数に変更（echo しない）
function jinrOGPImage()
{
	$ogimage = get_template_directory_uri() . '/lib/img/noimage.png';
	if (! jinr__noimage_url() == null) {
		$ogimage = jinr__noimage_url();
	}
	return $ogimage;
}
?>

<?php if (is_home()) : ?>
	<meta property="og:title" content="<?php bloginfo('name'); ?><?php echo $sep; ?><?php echo $site_desc; ?>">
	<meta property="og:url" content="<?php bloginfo('url'); ?>">
	<meta property="og:description" content="<?php echo esc_attr($description_home); ?>">

<?php elseif (is_front_page()) : ?>
	<?php
	$description = get_post_meta($post->ID, '_jinr_description_display', true);
	$use_excerpt = $post->post_excerpt;
	?>
	<meta property="og:title" content="<?php echo get_post_meta($post->ID, '_jinr_seotitle_display', true) ?: get_bloginfo('name') . $sep . $site_desc; ?>">
	<meta property="og:url" content="<?php bloginfo('url'); ?>">
	<meta property="og:description" content="<?php
		echo esc_attr(
			$description ?: $description_home ?: $use_excerpt ?: jinr_auto_desc_func()
		);
	?>">

<?php elseif (is_singular()) : ?>
	<?php
	$description = get_post_meta($post->ID, '_jinr_description_display', true);
	$use_excerpt = $post->post_excerpt;
	?>
	<meta property="og:title" content="<?php
		echo get_post_meta($post->ID, '_jinr_seotitle_display', true)
			?: get_the_title() . $sep . $site_name;
	?>">
	<meta property="og:url" content="<?php the_permalink(); ?>">
	<meta property="og:description" content="<?php
		echo esc_attr(
			$description ?: $use_excerpt ?: jinr_auto_desc_func()
		);
	?>">

<?php elseif (is_post_type_archive('cases')) : ?>
	<meta property="og:title" content="導入事例<?php echo $sep; ?><?php echo $site_name; ?>">
	<meta property="og:url" content="<?php echo home_url(add_query_arg(array(), $wp->request)); ?>">
	<meta property="og:description" content="【faag：感謝の気持ちを届けるデジタルチップシステム「CoCoRo」】実際にCoCoRoをご利用・導入いただいている事業者様の声をご紹介します。導入の決め手や効果、使い勝手などをインタビュー形式でお届けしています。">
	<?php // ★ここでは og:image を出さない（最後の共通ブロックで1回だけ出す） ?>

<?php elseif (is_category()) : ?>
	<?php
	$page_ids = get_posts([
		'posts_per_page' => -1,
		'fields'        => 'ids',
		'post_type'     => 'page',
	]);

	$pair_ids = [];
	foreach ($page_ids as $pid) {
		$pair_ids[$pid] = get_post_meta($pid, '_jinr_category', true);
	}

	$cat_id = get_query_var('cat');
	$target_page_id = array_search($cat_id, $pair_ids);
	$cat_name = single_cat_title("", false);
	$cat_image = $target_page_id ? get_the_post_thumbnail_url($target_page_id, 'full') : '';
	$cat_desc = get_post_meta($target_page_id, '_jinr_description_display', true) ?: jinr_category_desc();
	$cat_title = get_post_meta($target_page_id, '_jinr_seotitle_display', true) ?: $cat_name . $sep . $site_name;
	?>
	<meta property="og:title" content="<?php echo esc_attr($cat_title); ?>">
	<meta property="og:description" content="<?php echo esc_attr($cat_desc); ?>">
	<meta property="og:url" content="<?php echo home_url(add_query_arg(array(), $wp->request)); ?>">
	<?php // ★ここでも og:image は出さない（最後の共通ブロックで出す） ?>

<?php elseif (is_404()) : ?>
	<meta property="og:title" content="<?php bloginfo('name'); ?>">
	<meta property="og:url" content="<?php bloginfo('url'); ?>">
	<meta property="og:description" content="記事がありません">

<?php else : ?>
	<meta property="og:title" content="<?php bloginfo('name'); ?><?php echo $sep; ?><?php echo $site_desc; ?>">
	<meta property="og:url" content="<?php bloginfo('url'); ?>">
	<meta property="og:description" content="<?php echo esc_attr($description_home); ?>">
<?php endif; ?>

<?php
// ▼▼▼ og:image はここで「必ず 1 回だけ」出す ▼▼▼
if (is_singular() && has_post_thumbnail()) :
	$thumb_id = get_post_thumbnail_id();
	$image = get_post_meta($post->ID, '_jinr_ogp_image_url', true);
	$last_id = get_post_meta($post->ID, '_jinr_last_featured_id', true);

	if (! $image || (int) $last_id !== (int) $thumb_id) {
		$src = wp_get_attachment_image_src($thumb_id, 'full');
		if (! empty($src[0])) {
			$image = $src[0];
		}
	}
	?>
	<meta property="og:image" content="<?php echo esc_url($image ?: jinrOGPImage()); ?>">

<?php elseif (is_category() && ! empty($cat_image)) : ?>
	<meta property="og:image" content="<?php echo esc_url($cat_image); ?>">

<?php elseif (jinr__ogp_image_url()) : ?>
	<meta property="og:image" content="<?php echo esc_url(jinr__ogp_image_url()); ?>">

<?php else : ?>
	<meta property="og:image" content="<?php echo esc_url(jinrOGPImage()); ?>">
<?php endif; ?>
<!-- ここまでOGP -->
