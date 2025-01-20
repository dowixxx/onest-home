<?php
/**
* onest-home functions and definitions
* @package onest-home
* @author Dovydas Krivickas
*/



// Theme support options
require_once( get_template_directory() . '/functions/theme-support.php' );

// WP Head and other cleanup functions
require_once( get_template_directory() . '/functions/cleanup.php' ); 

// Register scripts and stylesheets
require_once( get_template_directory() . '/functions/enqueue-scripts.php' ); 

// Register custom menus and menu walkers
// require_once( get_template_directory() . '/functions/menu.php' ); 

// Makes WordPress comments better
require_once( get_template_directory() . '/functions/comments.php' ); 

// Replace 'older/newer' post links with numbered navigation
// require_once( get_template_directory() . '/functions/page-navi.php' ); 

// Adds support for multiple languages
require_once( get_template_directory() . '/functions/translation.php' ); 

// Adds site styles to the WordPress editor
require_once( get_template_directory() . '/functions/editor-styles.php' ); 

// Remove Emoji Support
require_once( get_template_directory() . '/functions/disable-emoji.php' ); 

// Use this as a template for custom post types
require_once( get_template_directory() . '/functions/custom-post-type.php' );

// Customize the WordPress login menu
// require_once( get_template_directory() . '/functions/login.php' ); 

// Customize the WordPress admin
require_once( get_template_directory() . '/functions/admin-dashboard.php' );
// require_once( get_template_directory() . '/functions/admin.php' ); 

// Make better load times
require_once( get_template_directory() . '/functions/performance.php' );

// Add shortcodes
// require_once( get_template_directory() . '/functions/shortcodes.php' );

// Add carbon fields
require_once( get_template_directory() . '/functions/carbon-fields.php' );



/*
* Remove global styles
*/
remove_action('wp_enqueue_scripts', 'wp_enqueue_global_styles');
remove_action('wp_body_open', 'wp_global_styles_render_svg_filters');



/*
* Add svg support.
*/
function cc_mime_types($mimes)
{
	$mimes['svg'] = 'image/svg+xml';
	return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');



/*
* Do not scale down images.
*/
// add_filter('big_image_size_threshold', '__return_false');



/*
* Customize attributes of images generated by the_post_thumbnail()
*/
function customize_post_thumbnail_attr( $attr ) {
	
	$attr['loading'] = 'lazy'; // Add lazy loading
	
	if ( isset( $attr['fetchpriority'] ) ) {
		unset( $attr['fetchpriority'] ); // Remove the fetchpriority attribute
	}

	return $attr;
}
add_filter( 'wp_get_attachment_image_attributes', 'customize_post_thumbnail_attr' );



/*
* Document tab separator.
*/
add_filter('document_title_separator', 'smp_document_title_separator');
function smp_document_title_separator($sep)
{
	$sep = esc_html('|');
	return $sep;
}



/*
* Custom wp_title
*/
function custom_wp_title($title, $sep)
{
    $site_title = get_bloginfo('name');
	$tagline = get_bloginfo('description');   // Get the site tagline
    $sep = '|';
    if (is_front_page() || is_home()) {
        $title = $site_title . ' ' . $sep . ' ' . $tagline;
    } elseif (is_tax()) {
        $term = single_term_title('', false);
        $title = $term . ' ' . $sep . ' ' . $site_title . ' ' . $sep . ' ' . $tagline;
    } elseif (is_search()) {
        $title = 'Paieška ' . $sep . ' ' . $site_title . ' ' . $sep . ' ' . $tagline;
    } else {
        $page_title = get_the_title();
        $title = $page_title . ' ' . $sep . ' ' . $site_title . ' ' . $sep . ' ' . $tagline;
    }
    return $title;
}

add_filter('wp_title', 'custom_wp_title', 10, 2);
remove_action('wp_head', '_wp_render_title_tag', 1);

