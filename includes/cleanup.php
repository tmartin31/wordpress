<?php

//-----------------------------------------------------
// Hide admin bar
//-----------------------------------------------------

show_admin_bar( false );

//-----------------------------------------------------
// Remove superfluous code
//-----------------------------------------------------

remove_action( 'wp_head', 'rsd_link' );
remove_action( 'wp_head', 'wlwmanifest_link' );
remove_action( 'wp_head', 'wp_generator' );

//-----------------------------------------------------
// Remove emoji scripts
//-----------------------------------------------------

remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles' );

//-----------------------------------------------------
// Hide WP version
//-----------------------------------------------------

function tm31_remove_wp_version() { return ''; }
add_filter( 'the_generator', 'tm31_remove_wp_version' );

//-----------------------------------------------------
// Remove default image thumbnails
//-----------------------------------------------------

function tm31_remove_image_sizes( $sizes )
{
    unset( $sizes['small'] );
    unset( $sizes['medium'] );
    unset( $sizes['large'] );
    return $sizes;
}
add_filter( 'intermediate_image_sizes_advanced', 'tm31_remove_image_sizes' );

//-----------------------------------------------------
// Hide dashboard menu items
//-----------------------------------------------------

function tm31_remove_admin_pages()
{
    // remove_menu_page( 'upload.php' );
    // remove_menu_page( 'edit-comments.php' );
    // remove_menu_page( 'users.php' );
    // remove_menu_page( 'tools.php' );
    // remove_menu_page( 'plugins.php' );
    // remove_menu_page( 'options-general.php' );
    // remove_menu_page( 'themes.php' );
    // remove_menu_page( 'edit.php?post_type=acf-field-group' );
}
add_action( 'admin_menu', 'tm31_remove_admin_pages' );
