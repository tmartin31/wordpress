<?php

//-----------------------------------------------------
// 1. Include files
//-----------------------------------------------------

get_template_part( 'includes/blocks' );
get_template_part( 'includes/cleanup' );
get_template_part( 'includes/helpers' );
get_template_part( 'includes/security' );

//-----------------------------------------------------
// 2. Add theme support
//-----------------------------------------------------

add_theme_support( 'post-thumbnails' );
add_theme_support( 'title-tag' );

//-----------------------------------------------------
// 3. Enqueue theme assets
//-----------------------------------------------------

function tm31_enqueue_assets()
{
    // jQuery
    if ( !is_admin() ) { wp_deregister_script( 'jquery' ); }
    // wp_enqueue_script( 'jquery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js', array(), '3.7.1', true );

    // CSS
    wp_enqueue_style( 'app', get_template_directory_uri() . '/style.css', null, '0.1' );

    // JavaScript
    wp_enqueue_script( 'alpine', 'https://cdnjs.cloudflare.com/ajax/libs/alpinejs/3.13.10/cdn.min.js', array(), '3.13.10', true );
    wp_enqueue_script( 'app', get_template_directory_uri() . '/js/app.min.js', array(), '0.1', true );
}
add_action( 'wp_enqueue_scripts', 'tm31_enqueue_assets' );
