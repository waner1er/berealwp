<?php
if (! defined('WP_DEBUG')) {
	die( 'Direct access forbidden.' );
}
add_action( 'wp_enqueue_scripts', function () {
	wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style('blocksy_child_style' , get_stylesheet_directory_uri() . '/assets/main.css', '', '1.1');
    wp_enqueue_script('blocksy_child_script' , get_stylesheet_directory_uri() . '/script.js');
});

//remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_price', 10 );
//add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_price', 40 );