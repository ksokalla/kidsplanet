<?php
add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' );
function enqueue_parent_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
	
	// enqueue child styles
	wp_enqueue_style('child-theme', get_stylesheet_directory_uri() .'/style.css', array('parent-style'));

	wp_enqueue_style( 'bootstrap', get_template_directory_uri() .'/css/bootstrap.min.css',array(),'4.0.0' );
    wp_enqueue_style( 'theme-style', get_template_directory_uri() .'/style.css',array(), '1.0.0' );
    wp_enqueue_style( 'font-awesome', get_stylesheet_directory_uri() .'/css/fontawesome.min.css',array(),'5.0.10' );

	//wp_enqueue_style( 'wpb-google-fonts', 'https://fonts.googleapis.com/css?family=Lato:300,400,700|Open+Sans+Condensed:300|Open+Sans:300,400,700', false ); 
    wp_enqueue_style( 'responsive-style', get_template_directory_uri() .'/css/responsive.css',array(), '1.0.0' );
    wp_enqueue_script( 'bootstrap-script', get_stylesheet_directory_uri() .'/js/bootstrap.min.js', array( 'jquery' ) );
	wp_enqueue_script( 'custom-js', get_stylesheet_directory_uri() .'/js/custom.js', array( 'slick-slider', 'jquery' ), '1.0.0', true );
}
?> 