<?php

// Ancestor ID
function bright_ancestor_id()
{
	global $post;

	if ( $post->post_parent ) {
		$ancestors = array_reverse( get_post_ancestors( $post->ID ) );
		return $ancestors[0];
	}

	return $post->ID;
}

// Featured image
function bright_featured_image() {

	global $post;

	// Does this individual page/post have a featured image?
	if ( has_post_thumbnail( $post->ID ) ) {
		return get_the_post_thumbnail_url( $post_id, 'full' );
	}

	// Does its ancestor have one?
	if ( has_post_thumbnail( bright_ancestor_id() ) ) {
		return get_the_post_thumbnail_url( bright_ancestor_id(), 'full' );
	}

	// Return a default
	return get_template_directory_uri() . '/images/featured-image.jpg';
}