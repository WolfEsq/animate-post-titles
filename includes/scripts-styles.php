<?php

/*
* script control for js and css
*/

/******************************
* Public/Front-End JS and CSS *
*******************************/


// Enqueue public styles
function acss_enqueue_public_css() {

	wp_register_style( 'animate_css', plugin_dir_url(__FILE__) . 'css/animate.css', false, false );
	wp_enqueue_style( 'animate_css' );

}
add_action( 'wp_enqueue_scripts', 'acss_enqueue_public_css' );


// Enqueue public scripts
function acss_enqueue_public_js() {

	wp_register_script( 'local_jquery', plugin_dir_url(__FILE__) . 'js/jquery-3.2.1.min.js', false, false, false );
	wp_enqueue_script( 'local_jquery' );

	wp_register_script( 'acss_public_scripts', plugin_dir_url(__FILE__) . 'js/public-scripts.js', array( 'local_jquery' ), false, false );
	wp_enqueue_script( 'acss_public_scripts' );

}
///UNCOMMENT TO USE///add_action( 'wp_enqueue_scripts', 'acss_enqueue_public_js' );



/******************************
* Admin/Back-End JS and CSS *
*******************************/

// Enqueue admin styles
function acss_enqueue_admin_css() {

	wp_register_style( 'acss_admin_styles', plugin_dir_url(__FILE__) . 'css/admin-styles.css', false, false );
	wp_enqueue_style( 'acss_admin_styles' );

}
///UNCOMMENT TO USE///add_action( 'admin_enqueue_scripts', 'acss_enqueue_admin_css' );


// Enqueue admin scripts
function acss_enqueue_admin_js() {

	wp_register_script( 'local_jquery_admin', plugin_dir_url(__FILE__) . 'js/jquery-3.2.1.min.js', false, false, false );
	wp_enqueue_script( 'local_jquery' );

	wp_register_script( 'acss_admin_scripts', plugin_dir_url(__FILE__) . 'js/admin-scripts.js', array( 'local_jquery_admin' ), false, false );
	wp_enqueue_script( 'acss_admin_scripts' );

}
///UNCOMMENT TO USE///add_action( 'admin_enqueue_scripts', 'acss_enqueue_admin_js' );