<?php

// Include files
get_template_part( 'includes/cleanup' );
get_template_part( 'includes/helpers' );

// Add theme support
add_theme_support( 'post-thumbnails' );
add_theme_support( 'title-tag' );

// Enqueue scripts
function load_theme_assets()
{
    // jQuery
    if ( !is_admin() ) { wp_deregister_script( 'jquery' ); }
    wp_enqueue_script( 'jquery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js', array(), '3.6.0', true );

    // CSS
    wp_enqueue_style( 'app', get_template_directory_uri() . '/style.css', null, '0.1' );

    // JavaScript
    wp_enqueue_script( 'app', get_template_directory_uri() . '/js/app.min.js', array(), '0.1', true );
}
add_action( 'wp_enqueue_scripts', 'load_theme_assets' );
