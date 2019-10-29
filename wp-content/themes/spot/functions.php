<?php

require_once('wp_bootstrap_navwalker.php');

add_theme_support('menus');

function spot_setup() {
    add_theme_support('post-thumbnails');
    //add_image_size('gallery-slide', 1362, 483, true);
}
add_action('after_setup_theme', 'spot_setup');

function register_theme_menus() {

	register_nav_menus(
		array(
			'primary-menu' 	=> __( 'Primary Menu' )			
		)
	);

}
add_action( 'init', 'register_theme_menus' );

function spot_theme_styles() {

	//wp_enqueue_style( 'bootstrap_css', get_template_directory_uri() . '/css/bootstrap.css' );
    wp_enqueue_style( 'font-awesome_css', get_template_directory_uri() . '/css/font-awesome.css' );
	wp_enqueue_style( 'style_css', get_template_directory_uri() . '/style.css' );

}

add_action( 'wp_enqueue_scripts', 'spot_theme_styles' );

function spot_theme_js() {
    //wp_enqueue_script( 'bootstrap_js', get_template_directory_uri() . '/js/bootstrap.js', '', '', false );	
	wp_enqueue_script( 'lightbox_js', get_template_directory_uri() . '/js/lightbox.js', array('jquery'), '', true );	
}

add_action( 'wp_enqueue_scripts', 'spot_theme_js' );


?>