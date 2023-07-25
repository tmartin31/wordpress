<?php

//-----------------------------------------------------
// 1. Add custom block category
//-----------------------------------------------------

add_filter( 'block_categories_all', function( $categories ) {
	
	$categories[] = array(
		'slug' => 'custom',
		'title' => 'Custom'
	);

	return $categories;
	
});

//-----------------------------------------------------
// 2. Move custom block category to top
//-----------------------------------------------------

function tm31_reorder_block_categories( $categories ) {
	
	$custom_block = array(
		'slug' => 'custom',
		'title' => __( 'Custom', 'custom' ),
	);

	$categories_sorted = array();
	$categories_sorted[0] = $custom_block;

	foreach ( $categories as $category ) {
		$categories_sorted[] = $category;
	}

	return $categories_sorted;
}

add_filter( 'block_categories', 'tm31_reorder_block_categories', 10, 2 );

//-----------------------------------------------------
// 3. Register custom blocks
//-----------------------------------------------------

function tm31_register_custom_blocks() {

	if( function_exists('acf_register_block') ) {

		// Feature
		acf_register_block(array(
			'name' => 'feature',
			'title' => __('Feature'),
			'description' => __('Custom block for feature.'),
			'category' => 'custom',
			'icon' => 'art',
			'keywords' => array( 'feature' ),
			'render_template' => 'blocks/feature.php',
			'enqueue_style' => get_template_directory_uri() . '/style.css',
		));
		
	}
	
}

add_action('acf/init', 'tm31_register_custom_blocks');