<?php
	$site_name = trim( get_bloginfo( 'name' ) );
	$tw_name = jinr__tw_name();
	$tw_name = str_replace("@", "", $tw_name);
	$site_hashtag = jinr__sns_hashtag();
	$tw_label = jinr__sns_sharebutton_twitter_text();
	$fb_label = jinr__sns_sharebutton_facebook_text();

	if( ! $site_hashtag == null){
		$explode_site_hashtag = explode(' ', $site_hashtag);
		$implode_site_hashtag = implode(',', $explode_site_hashtag);
	}

if ( is_category() ) {
	$t_id       = get_category( intval( get_query_var( 'cat' ) ) )->term_id;
	$url_encode = get_category_link( $t_id );

	$cat_class  = get_category( $t_id );
	$cat_option = get_option( $t_id );

	if ( isset( $cat_option['cps_meta_title'] ) && $cat_option['cps_meta_title'] !== '' ) {
		$title_encode = $cat_option['cps_meta_title'] . ' - ' . $site_name;
	} else {
		$title_encode = $cat_class->name . ' - ' . $site_name;
	}
} else {
	$url_encode   = urlencode( get_permalink() );
	$title_encode = urlencode( get_the_title() ) . ' - ' . $site_name;

	//ハッシュタグ取得
	$get_hashtags = get_post_meta($post->ID, '_jinr_hastag_display',true);
	$explode_hashtag = explode(' ', $get_hashtags);
	$implode_hashtag = implode(',', $explode_hashtag);
	if( ! $site_hashtag == null){
		if( ! $get_hashtags == null ){
			$sns_hashtag = str_replace('#', '', $implode_site_hashtag.",".$implode_hashtag);
		}else{
			$sns_hashtag = str_replace('#', '', $implode_site_hashtag);
		}
	}else{
		$sns_hashtag = str_replace('#', '', $implode_hashtag);
	}
}
?>
<?php if (jinr__sns_sharebutton_display_twitter() || jinr__sns_sharebutton_display_facebook()) : ?>
	<?php if (!get_post_meta($post->ID, '_jinr_snsbutton_display', true) == "1") : ?>
		<div class="o--snsshare-button-select t--round">
			<?php if (jinr__sns_sharebutton_display_twitter()) : ?>
				<div class="c--snsshare-button-twitter">
					<div class="a--snsshare-button-desc"><?php echo jinr__sns_sharebutton_twitter_desc(); ?></div>
					<a class="d--twitter" rel="nofollow" href="https://twitter.com/share?url=<?php echo $url_encode ?>&text=<?php echo $title_encode ?><?php if( ! $tw_name == null ){echo '&via='.$tw_name;} ?><?php if( ! $sns_hashtag == null ){echo '&hashtags='.$sns_hashtag;} ?><?php if( ! $tw_name == null ){echo '&related='.$tw_name;} ?>"><i class="jif jin-ifont-twitter"></i><span class="a--sns-label"><?php echo $tw_label; ?></span></a>
				</div>
			<?php endif; ?>
			<?php if (jinr__sns_sharebutton_display_facebook()) : ?>
				<div class="c--snsshare-button-facebook">
					<div class="a--snsshare-button-desc"><?php echo jinr__sns_sharebutton_facebook_desc(); ?></div>
					<a class="d--facebook" rel="nofollow" href="https://www.facebook.com/sharer.php?src=bm&u=<?php echo $url_encode; ?>&t=<?php echo $title_encode; ?>" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;"><i class="jif jin-ifont-facebook" aria-hidden="true"></i><span class="a--sns-label"><?php echo $fb_label; ?></span></a>
				</div>
			<?php endif; ?>
		</div>
	<?php endif; ?>
<?php endif; ?>
