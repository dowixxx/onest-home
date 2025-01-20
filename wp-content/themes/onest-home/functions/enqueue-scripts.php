<?php



/*
* Enqueue styles
*/
function onest_home_styles() {
	wp_enqueue_style( 'onest-home-style', get_template_directory_uri() . '/dist/index.css', false, '1.0' );
}
add_action('wp_enqueue_scripts', 'onest_home_styles');



/*
* Enqueue scripts
*/
function onest_home_scripts() {

	// // Enqueue WordPress's bundled jQuery
    // wp_enqueue_script('jquery');

	wp_enqueue_script( 
		'onest-home-script', 
		get_template_directory_uri() . '/dist/index.js', 
		// array('jquery'), // dependencies
		false, // dependencies
		'1.0', 
		true // loads in footer
	);

	// // Localize the script with new data
    // wp_localize_script(
	// 	'onest-home-scrip', 
	// 	'clear_cart_ajax', 
	// 	array(
	// 		'ajaxUrl' => admin_url('admin-ajax.php'),
	// 	)
	// );
}
add_action( 'wp_enqueue_scripts', 'onest_home_scripts' );



/*
* Enqueue swiperjs styles & scripts
*/
function enqueue_swiper_assets() {
    // Enqueue Swiper.js CSS
    wp_enqueue_style(
        'swiper-css',
        get_template_directory_uri() . '/assets/css/lib/swiperjs/swiper-bundle.min.css',
        array(), // Dependencies
        '11.1.15',
        'all' // Media type
    );

    // Enqueue Swiper.js JavaScript
    wp_enqueue_script(
        'swiper-js',
        get_template_directory_uri() . '/assets/js/lib/swiperjs/swiper-bundle.min.js',
        array('jquery'), // Dependencies
        '11.1.15', 
        true // Load in footer
    );
}
add_action('wp_enqueue_scripts', 'enqueue_swiper_assets');





// function site_scripts() {
//   global $wp_styles; // Call global $wp_styles variable to add conditional wrapper around ie stylesheet the WordPress way
        
//     // Adding scripts file in the footer
//     wp_enqueue_script( 'site-js', get_template_directory_uri() . '/assets/scripts/scripts.js', array( 'jquery' ), filemtime(get_template_directory() . '/assets/scripts/js'), true );
   
//     // Register main stylesheet
//     wp_enqueue_style( 'site-css', get_template_directory_uri() . '/assets/styles/style.css', array(), filemtime(get_template_directory() . '/assets/styles/scss'), 'all' );

//     // Comment reply script for threaded comments
//     if ( is_singular() AND comments_open() AND (get_option('thread_comments') == 1)) {
//       wp_enqueue_script( 'comment-reply' );
//     }
// }
// add_action('wp_enqueue_scripts', 'site_scripts', 999);