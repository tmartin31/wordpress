<?php

//-----------------------------------------------------
// 1. Hide admin bar
//-----------------------------------------------------

// show_admin_bar( false );

//-----------------------------------------------------
// 2. Remove emoji scripts
//-----------------------------------------------------

remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles' );

//-----------------------------------------------------
// 3. Remove default image thumbnails
//-----------------------------------------------------

function tm31_remove_image_sizes( $sizes )
{
    unset( $sizes['medium_large'] );
    unset( $sizes['1536x1536'] );
    unset( $sizes['2048x2048'] );
    return $sizes;
}

add_filter( 'intermediate_image_sizes_advanced', 'tm31_remove_image_sizes' );

//-----------------------------------------------------
// 4. Hide dashboard menu items
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

//-----------------------------------------------------
// 5. Hide default editor
//-----------------------------------------------------

// function tm31_hide_editor()
// {
//     remove_post_type_support('page', 'editor');
//     
// }
// 
// add_action( 'admin_init', 'tm31_hide_editor' );
