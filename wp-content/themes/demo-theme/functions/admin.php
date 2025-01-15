<?php
// This file handles the admin area and functions - You can use this file to make changes to the dashboard.

/************* DASHBOARD WIDGETS *****************/
// Disable default dashboard widgets
function disable_default_dashboard_widgets() {
	// Remove_meta_box('dashboard_right_now', 'dashboard', 'core');    // Right Now Widget
	remove_meta_box('dashboard_recent_comments', 'dashboard', 'core'); // Comments Widget
	remove_meta_box('dashboard_incoming_links', 'dashboard', 'core');  // Incoming Links Widget
	remove_meta_box('dashboard_plugins', 'dashboard', 'core');         // Plugins Widget

	// Remove_meta_box('dashboard_quick_press', 'dashboard', 'core');  // Quick Press Widget
	remove_meta_box('dashboard_recent_drafts', 'dashboard', 'core');   // Recent Drafts Widget
	remove_meta_box('dashboard_primary', 'dashboard', 'core');         //
	remove_meta_box('dashboard_secondary', 'dashboard', 'core');       //

	// Removing plugin dashboard boxes
	remove_meta_box('yoast_db_widget', 'dashboard', 'normal');         // Yoast's SEO Plugin Widget

}

/*
For more information on creating Dashboard Widgets, view:
http://digwp.com/2010/10/customize-wordpress-dashboard/
*/

// RSS Dashboard Widget
function joints_rss_dashboard_widget() {
	if(function_exists('fetch_feed')) {
		include_once(ABSPATH . WPINC . '/feed.php');               // include the required file
		$feed = fetch_feed('http://jointswp.com/feed/rss/');        // specify the source feed
		$limit = $feed->get_item_quantity(5);                      // specify number of items
		$items = $feed->get_items(0, $limit);                      // create an array of items
	}
	if ($limit == 0) echo '<div>' . __( 'The RSS Feed is either empty or unavailable.', 'jointswp' ) . '</div>';   // fallback message
	else foreach ($items as $item) { ?>

	<h4 style="margin-bottom: 0;">
		<a href="<?php echo $item->get_permalink(); ?>" title="<?php echo mysql2date(__('j F Y @ g:i a', 'jointswp'), $item->get_date('Y-m-d H:i:s')); ?>" target="_blank">
			<?php echo $item->get_title(); ?>
		</a>
	</h4>
	<p style="margin-top: 0.5em;">
		<?php echo substr($item->get_description(), 0, 200); ?>
	</p>
	<?php }
}

// Calling all custom dashboard widgets
function joints_custom_dashboard_widgets() {
	wp_add_dashboard_widget('joints_rss_dashboard_widget', __('Custom RSS Feed (Customize in admin.php)', 'jointswp'), 'joints_rss_dashboard_widget');
	/*
	Be sure to drop any other created Dashboard Widgets
	in this function and they will all load.
	*/
}
// removing the dashboard widgets
add_action('admin_menu', 'disable_default_dashboard_widgets');
// adding any custom widgets
add_action('wp_dashboard_setup', 'joints_custom_dashboard_widgets');

/************* CUSTOMIZE ADMIN *******************/
// Custom Backend Footer
function joints_custom_admin_footer() {
	_e('<span id="footer-thankyou">Developed by <a href="#" target="_blank">Your Site Name</a></span>.', 'jointswp');
}

// adding it to the admin area
add_filter('admin_footer_text', 'joints_custom_admin_footer');






// // admin style
// function load_admin_style() {
// 	wp_enqueue_style('admin_css', get_template_directory_uri() . '/assets/css/admin-style.css', false, '1.0.0');
// }
// add_action('admin_enqueue_scripts', 'load_admin_style');



// // admin scripts
// add_action('admin_enqueue_scripts', function () {
// 	$handle = 'admin_script';
// 	$src = get_template_directory_uri() . '/assets/js/admin-script.js';
// 	$deps = [];
// 	$version = '1.0.0';
// 	wp_enqueue_script($handle, $src, $deps, $version, true);
// 	wp_localize_script(
// 		'admin_script',
// 		'WPURLS',
// 		array(
// 			'site_url' => get_option('siteurl'),
// 			'theme_url' => get_template_directory_uri(),
// 			'ajax_url' => admin_url('admin-ajax.php'),
// 			'nonce' => wp_create_nonce('wp-nonce'),
// 		)
// 	);
// });