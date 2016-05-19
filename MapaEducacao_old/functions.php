<?php

require_once('BFI_Thumb.php');

/**
 * Proper way to enqueue scripts and styles
 */
function theme_name_scripts() {
	wp_enqueue_style( 'style-name', get_stylesheet_uri() );
	wp_enqueue_script( 'script-name', get_template_directory_uri() . '/js/bootstrap.js', array(), '1.0.0', true );
}

add_action( 'wp_enqueue_scripts', 'theme_name_scripts' );

function new_load_scripts() {
	wp_enqueue_script( 'my-script', get_stylesheet_directory_uri() . '/js/page.js', array(), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'new_load_scripts' );
?>
