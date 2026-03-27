<?php if ( is_single() ) : ?>
<?php if ( get_post_meta( $post->ID, '_jinr_noindex_display', true ) == 1 ) : ?>
<meta name="robots" content="noindex">
<?php endif; ?>
<?php endif; //is_single ?>
<?php if ( is_page() ) : ?>
<?php if ( ! is_front_page() ) : ?>
<?php if ( get_post_meta( $post->ID, '_jinr_noindex_display', true ) == 1 ) : ?>
<meta name="robots" content="noindex">
<?php endif; ?>
<?php endif; ?>
<?php endif; //is_page ?>
<?php if ( is_category() ) : ?>
<?php if( jinr_category_noindex() == 1 ) : ?>
<?php if ( jinr_category_id_noindex() == "" ) : ?>
<meta name="robots" content="noindex">
<?php else: ?>
<?php
$cat_id              = strval( get_query_var( 'cat' ) );
$noindex_cat_id_each = explode( ',', jinr_category_id_noindex() );
if ( ! in_array( $cat_id, $noindex_cat_id_each ) ) {
echo '<meta name="robots" content="noindex">';
}
?>
<?php endif; ?>
<?php endif; ?>
<?php if( is_paged() && jinr_category_next_noindex() == "1" ) : ?>
<meta name="robots" content="noindex">
<?php endif; ?>
<?php endif; //is_category & paged ?>
<?php if ( is_tag() ) : ?>
<?php if( jinr_tag_noindex() == "1" ) : ?>
<?php if ( jinr_tag_id_noindex() == "" ) : ?>
<meta name="robots" content="noindex">
<?php else: ?>
<?php
$tag_id              = strval( get_query_var( 'tag_id' ) );
$noindex_tag_id_each = explode( ',', jinr_tag_id_noindex() );
if ( ! in_array( $tag_id, $noindex_tag_id_each ) ) {
echo '<meta name="robots" content="noindex">';
}
?>
<?php endif; ?>
<?php endif; ?>
<?php if( is_paged() && jinr_tag_next_noindex() == "1" ) : ?>
<meta name="robots" content="noindex">
<?php endif; ?>
<?php endif; //is_tag & paged ?>
<?php if(is_home() && is_paged()): ?>
<?php if ( jinr_top_next_noindex() == "1" ) : ?>
<meta name="robots" content="noindex">
<?php endif; ?>
<?php endif; //is_home ?>
<?php if(is_date() || is_month() || is_year() ): ?>
<?php if ( jinr_date_archive_noindex() == "1" ) : ?>
<meta name="robots" content="noindex">
<?php endif; ?>
<?php endif; //is_date & is_month & is_year ?>
<?php if(is_search() ): ?>
<?php if ( jinr_search_page_noindex() == "1" ) : ?>
<meta name="robots" content="noindex">
<?php endif; ?>
<?php endif; //is_search ?>
<?php if(is_attachment() ): ?>
<?php if ( jinr_image_page_noindex() == "1" ) : ?>
<meta name="robots" content="noindex">
<?php endif; ?>
<?php endif; //is_attachment ?>
<?php if(is_author() ): ?>
<?php if ( jinr_author_noindex() == "1" ) : ?>
<meta name="robots" content="noindex">
<?php endif; ?>
<?php endif; //is_author ?>
<?php if(is_404() ): ?>
<meta name="robots" content="noindex">
<?php endif; //is_404 ?>