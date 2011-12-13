<?php

function new_excerpt_length($length) {
    return 40;
}

add_filter('excerpt_length', 'new_excerpt_length');

function new_excerpt_more($post) {
    return '...&nbsp;<span>(' . get_comments_number($post->ID) . ')</span>';
}

add_filter('excerpt_more', 'new_excerpt_more');


/* 	function new_excerpt_length($length) {
  //		return 40;
  //	}
  //	add_filter('excerpt_length', 'new_excerpt_length');
  //
  //	function new_excerpt_more($post) {
  //		return '...&nbsp;(' . get_comments_number($post->ID) . ')&nbsp;';
  //
  //	}
  //	add_filter('excerpt_more', 'new_excerpt_more');
  //
  //
  // Post thumbnail support */

add_theme_support('post-thumbnails');

//thonnv
// show custome post type in home page
add_filter( 'pre_get_posts', 'my_get_posts' );

function my_get_posts( $query ) {

	if ( false == $query->query_vars['suppress_filters'] )
		$query->set( 'post_type', array( 'post', 'page', 'ebooks', 'book','album', 'movie', 'quote', 'attachment' ) );

	return $query;
}
?>
