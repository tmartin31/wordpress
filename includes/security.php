<?php

//-----------------------------------------------------
// 1. Disable file editing
//-----------------------------------------------------

define( 'DISALLOW_FILE_EDIT', true );

//-----------------------------------------------------
// 2. Hide WP version
//-----------------------------------------------------

function tm31_remove_wp_version() { return ''; }
add_filter( 'the_generator', 'tm31_remove_wp_version' );

//-----------------------------------------------------
// 3. Remove superfluous code
//-----------------------------------------------------

remove_action( 'wp_head', 'rsd_link' );
remove_action( 'wp_head', 'wlwmanifest_link' );
remove_action( 'wp_head', 'wp_generator' );