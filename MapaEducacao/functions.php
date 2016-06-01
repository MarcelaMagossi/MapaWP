<?php 

function wpbootstrap_scripts_with_jquery()
{
	// Register the script like this for a theme:
	//wp_register_script( 'custom-script', get_template_directory_uri() . '/bootstrap/js/bootstrap.js', array( 'jquery' ) );
	// For either a plugin or a theme, you can then enqueue the script:
	//wp_enqueue_script( 'custom-script' );

	wp_enqueue_script( 'custom-script', get_template_directory_uri() . '/js/index.js');


}
add_action( 'wp_enqueue_scripts', 'wpbootstrap_scripts_with_jquery' );



function setup_theme() 
{
 add_theme_support('title-tag');
}

add_action( 'after_setup_theme', 'setup_theme' );


if ( function_exists('register_sidebar') )
	register_sidebar(array(
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	));

require_once('inc/wp_bootstrap_navwalker.php');
register_nav_menus( array(
    'primary' => __( 'Menu Principal', 'MapaEducacao' ),
) );
?>
