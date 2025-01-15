<?php



/*
* Edit admin bar
*/
function edit_admin_bar($wp_admin_bar) {
	$wp_admin_bar->remove_node('new-content'); // Remove the "New +"
}
add_action('admin_bar_menu', 'edit_admin_bar', 999);



/*
* Edit admin side bar
*/
function edit_admin_side_bar() {
    remove_submenu_page('themes.php', 'site-editor.php?path=/patterns');  // Remove Appearance > Patterns  
}
add_action('admin_menu', 'edit_admin_side_bar', 999);