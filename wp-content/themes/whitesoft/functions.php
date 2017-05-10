<?php
remove_action('wp_head', 'wp_robots' );

function enqueue_styles() {
	wp_enqueue_style( 'whitesquare-style', get_stylesheet_uri());
	// wp_register_style('font-style', '/fonts/Roboto-Light.ttf');
	// wp_enqueue_style( 'font-style');
	wp_enqueue_style('style', '/wp-content/themes/whitesoft/assets/css/style.css');
}
add_action('wp_enqueue_scripts', 'enqueue_styles');

function enqueue_scripts () {
	wp_enqueue_script('appjs', '/wp-content/themes/whitesoft/assets/js/app.js');
	// wp_enqueue_script('html5-shim');
}
add_action('wp_enqueue_scripts', 'enqueue_scripts');

if (function_exists('add_theme_support')) {
	add_theme_support('menus');
}