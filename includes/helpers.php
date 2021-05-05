<?php

//-----------------------------------------------------
// Ancestor ID
//-----------------------------------------------------

function tm31_ancestor_id()
{
	global $post;

	if ( $post->post_parent ) {
		$ancestors = array_reverse( get_post_ancestors( $post->ID ) );
		return $ancestors[0];
	}

	return $post->ID;
}

//-----------------------------------------------------
// Featured image
//-----------------------------------------------------

function tm31_featured_image()
{
	global $post;

	// Does this post have a featured image?
	if ( has_post_thumbnail( $post->ID ) ) {
		return get_the_post_thumbnail_url( $post_id, 'full' );
	}

	// Does this post’s ancestor have a featured image?
	if ( has_post_thumbnail( tm31_ancestor_id() ) ) {
		return get_the_post_thumbnail_url( tm31_ancestor_id(), 'full' );
	}

	// Return a default
	return get_template_directory_uri() . '/images/featured-image.jpg';
}