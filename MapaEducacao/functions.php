<?php 




function setup_theme() 

{

 add_theme_support('title-tag');
 register_nav_menus( array(

    'primary' => __( 'Menu Principal', 'MapaEducacao' ),

) );

}



add_action( 'after_setup_theme', 'setup_theme' );

if (!is_admin()) add_action("wp_enqueue_scripts", "my_jquery_enqueue", 11);
function my_jquery_enqueue() {
   wp_deregister_script('jquery');
   wp_register_script('jquery', "http" . ($_SERVER['SERVER_PORT'] == 443 ? "s" : "") . "://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js", false, null);
   wp_enqueue_script('jquery');
}

function mapa_scripts ()

{


	wp_register_script( 'custom-script', get_template_directory_uri() . '/js/bootstrap.min.js', array( 'jquery' ) );
	wp_enqueue_script( 'custom-script' );
	wp_enqueue_script( 'index js', get_template_directory_uri() . '/js/index.js');
	wp_enqueue_style( 'bootstrap', '//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css');
	wp_enqueue_style( 'main', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style('fonte mapa', '//fonts.googleapis.com/css?family=Open+Sans:400,300,800,700|Oswald');

}



add_action( 'wp_enqueue_scripts', 'mapa_scripts' );




function mapa_widgets_init(){

if ( function_exists('register_sidebar') )

	register_sidebar(array(

		'before_widget' => '',

		'after_widget' => '',

		'before_title' => '<h3>',

		'after_title' => '</h3>',

	));
}

add_action( 'widgets_init', 'mapa_widgets_init' );


require_once('inc/wp_bootstrap_navwalker.php');


?>