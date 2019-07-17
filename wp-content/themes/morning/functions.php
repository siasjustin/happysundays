<?php

function ct_unit_override_footer_text( $footer_text ) {

	$site_url = 'https://www.competethemes.com/morning/';
	$footer_text = '<a href="' . esc_url( $site_url ) . '">Morning WordPress Theme</a> by Compete Themes.';
	return $footer_text;
}
add_filter( 'ct_apex_footer_text', 'ct_unit_override_footer_text' );

function ct_morning_register_scripts(){

	// register Google Fonts typefaces & styles
	wp_register_style( 'ct-morning-google-fonts', '//fonts.googleapis.com/css?family=Montserrat:400,700|Open+Sans:400,700');

	// dequeue Apex Google Fonts
	wp_dequeue_style('ct-apex-google-fonts');

	// enqueue Google Fonts
	wp_enqueue_style('ct-morning-google-fonts');

	wp_enqueue_style( 'fonts', get_stylesheet_directory_uri() . '/fonts.css' );
	wp_enqueue_style( 'main', get_stylesheet_directory_uri() . '/main.css' );

	wp_enqueue_style( 'slick', get_stylesheet_directory_uri() . '/slick/slick.css' );
	wp_enqueue_style( 'slick-theme', get_stylesheet_directory_uri() . '/slick/slick-theme.css' );


    wp_enqueue_script( 'slickjs', get_stylesheet_directory_uri() . '/slick/slick.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script( 'main', get_stylesheet_directory_uri() . '/main.js', array('jquery', 'slickjs'), '1.0.0', true );

}
add_action('wp_enqueue_scripts', 'ct_morning_register_scripts', 99 );


function happy_setup() {
	add_theme_support( 'post-thumbnails' );
	add_image_size( 'full-width', 1800, 1200, true );
	add_image_size( 'container', 1200, 800, true );
}
add_action( 'after_setup_theme', 'happy_setup' );
	