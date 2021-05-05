<?php

//-----------------------------------------------------
// Add tables to classic editor
//-----------------------------------------------------

function tm31_add_mce_buttons( $buttons )
{
	array_push( $buttons, 'separator', 'table' );
	return $buttons;
}
add_filter( 'mce_buttons', 'tm31_add_mce_buttons' );

function tm31_add_mce_external_plugins( $plugins )
{
	$plugins['table'] =  get_template_directory_uri() . '/tinymce-plugins/table.min.js';
	return $plugins;
}
add_filter( 'mce_external_plugins', 'tm31_add_mce_external_plugins' );