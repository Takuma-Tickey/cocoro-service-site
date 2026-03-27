<?php
$defaults = array(
	'before'           => '<div class="c--nextpage"><div class="a--nextpage-label ef">'. __( 'PAGE' ).'</div>',
	'after'            => '</div>',
	'link_before'      => '<span>',
	'link_after'       => '</span>',
	'next_or_number'   => 'number',
	'separator'        => ' ',
	'nextpagelink'     => __( 'Next page' ),
	'previouspagelink' => __( 'Previous page' ),
	'pagelink'         => '%',
	'echo'             => 1
);
wp_link_pages( $defaults );
?>