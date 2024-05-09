<?php

//-----------------------------------------------------
// 1. Change FROM name in ALL mail
//-----------------------------------------------------

function tm31_custom_wp_mail_from_name( $original_email_from ) {
	return 'SENDER_NAME';
}
add_filter( 'wp_mail_from_name', 'tm31_custom_wp_mail_from_name' );

//-----------------------------------------------------
// 2. CUSTOM_EMAIL_DESCRIPTION
//-----------------------------------------------------

function tm31_notify_pending_to_publish( $post_id ) {

$post = get_post( $post_id );
$author = get_userdata( $post->post_author );
$subject = "SUBJECT";

$message = "MESSAGE";

if ( $post->post_type === 'POST_TYPE' ) {
	wp_mail( $author->user_email, $subject, $message );	
}
	
}
add_action( 'pending_to_publish', 'tm31_notify_pending_to_publish' );