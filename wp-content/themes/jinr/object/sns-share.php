<?php
	$site_name = trim( get_bloginfo( 'name' ) );
	$tw_name = jinr__tw_name();
	$tw_name = str_replace("@", "", $tw_name);
	$site_hashtag = jinr__sns_hashtag();

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

if( jinr__sns_share_design() == 'd--sns-share-design1'){
	$tw_label = 'X';
	$fb_label = 'Facebook';
	$line_label = 'LINE';
	$copy_label = 'URL copy';
}else{
	$tw_label = 'ポストする';
	$fb_label = 'シェアする';
	$line_label = 'LINEで送る';
	$copy_label = 'URLをコピー';
}
?>
<ul class="o--sns-share-inner">
	<?php if( jinr__sns_share_design() == 'd--sns-share-design1'): ?>
	<li id="snsShareLabel" class="c--sns-share-item ef d--bold-sp">SHARE</li>
	<?php endif; ?>
	<!--twitter-->
	<?php if ( ! jinr__sns_share_tw() == '' ) : ?>
		<li class="c--sns-share-item">
			<a class="d--twitter" rel="nofollow" href="https://twitter.com/share?url=<?php echo $url_encode ?>&text=<?php echo $title_encode ?><?php if (!$tw_name == null) {echo '&via=' . $tw_name;} ?><?php if (!$sns_hashtag == null) {echo '&hashtags=' . $sns_hashtag;} ?><?php if (!$tw_name == null) {echo '&related=' . $tw_name;} ?>"><i class="jif jin-ifont-twitter"></i><span class="a--sns-label"><?php echo $tw_label; ?></span></a>
		</li>
	<?php endif; ?>
	<!--Facebook-->
	<?php if ( ! jinr__sns_share_fb() == '' ) : ?>
		<li class="c--sns-share-item">
			<a class="d--facebook" rel="nofollow" href="https://www.facebook.com/sharer.php?src=bm&u=<?php echo $url_encode; ?>&t=<?php echo $title_encode; ?>" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;"><i class="jif jin-ifont-facebook" aria-hidden="true"></i><span class="a--sns-label"><?php echo $fb_label; ?></span></a>
		</li>
	<?php endif; ?>
	<!--line-->
	<?php if ( ! jinr__sns_share_line() == '' ) : ?>
		<li class="c--sns-share-item">
			<a class="d--line" rel="nofollow" href="https://line.me/R/msg/text/?<?php echo $url_encode; ?>"><i class="jif jin-ifont-line" aria-hidden="true"></i><span class="a--sns-label"><?php echo $line_label; ?></span></a>
		</li>
	<?php endif; ?>
	<!--copy-->
	<?php if ( ! jinr__sns_share_copy() == '' ) : ?>
		<li class="c--sns-share-item">
			<a id="jinrCopyUrl" rel="nofollow" class="d--copy" data-url="<?php echo get_permalink(); ?>"><i class="jif jin-ifont-copy" aria-hidden="true"></i><span class="a--sns-label"><?php echo $copy_label; ?></span></a>
		</li>
	<?php endif; ?>
</ul>
