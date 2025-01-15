<?php



/*
* Reload jquery later for performance
*/
// function load_jquery_with_defer() {
// 	// Deregister the default jQuery script loaded by WordPress
// 	wp_deregister_script('jquery');
 
// 	// Register the jQuery script again with the same handle but defer attribute
// 	wp_register_script(
// 		'jquery',
// 		includes_url('/js/jquery/jquery.min.js'), // Default WordPress jQuery path
// 		[],
// 		null,
// 		true // Load in the footer
// 	);
 
// 	// Add the defer attribute
// 	wp_script_add_data('jquery', 'defer', true);
 
// 	// Enqueue jQuery
// 	wp_enqueue_script('jquery');
// }
 
// add_action('wp_enqueue_scripts', 'load_jquery_with_defer');



/*
* Preload the Hero Image
*/
// function preload_hero_image() {
//    echo '<link rel="preload" href="https://www.tavoklinika.lt/wp-content/uploads/2024/12/Hero-min.jpg" as="image" type="image/jpeg">';
// }
// add_action('wp_head', 'preload_hero_image', 1);