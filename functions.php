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
    wp_dequeue_style( 'wp-block-library' );
    
    // wp_enqueue_style( 'aos', 'https://unpkg.com/aos@next/dist/aos.css', false, '3.x.x', 'all' );
    // wp_enqueue_style( 'slick', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css', false, '1.8.1' );
    
    wp_enqueue_style( 'app', get_template_directory_uri() . '/style.css', null, time() );

    // JavaScript
    // wp_enqueue_script( 'alpine-collapse', 'https://cdn.jsdelivr.net/npm/@alpinejs/collapse@3.x.x/dist/cdn.min.js', array(), '3.x.x', true );
    // wp_enqueue_script( 'alpine-intersect', 'https://cdn.jsdelivr.net/npm/@alpinejs/intersect@3.x.x/dist/cdn.min.js', array(), '3.x.x', true );
    // wp_enqueue_script( 'alpine-persist', 'https://cdn.jsdelivr.net/npm/@alpinejs/persist@3.x.x/dist/cdn.min.js', array(), '3.x.x', true );
    // wp_enqueue_script( 'alpine', 'https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js', array(), '3.x.x', true );
    // wp_enqueue_script( 'slick', 'https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js', array(), '1.8.1', true );
    wp_enqueue_script( 'app', get_template_directory_uri() . '/js/app.min.js', array(), time(), true );
}
add_action( 'wp_enqueue_scripts', 'tm31_enqueue_assets' );
