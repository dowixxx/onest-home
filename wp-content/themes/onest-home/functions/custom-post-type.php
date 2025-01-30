<?php
/*
	looking for custom meta boxes?
	check out this fantastic tool:
	https://github.com/CMB2/CMB2
*/

/*
for more information on taxonomies, go here:
http://codex.wordpress.org/Function_Reference/register_taxonomy
*/



/*
* Hide posts and pages in dashboard.
*/
function post_remove()
{
	remove_menu_page('edit.php');
	// remove_menu_page('edit.php?post_type=page');
}
add_action('admin_menu', 'post_remove');



/*
* Projects CPT
*/

// let's create the function for the custom type
function cpt_project() { 
	// creating (registering) the custom type 
	register_post_type( 'project', /* (http://codex.wordpress.org/Function_Reference/register_post_type) */
	 	// let's now add all the options for this post type
		array('labels' => array(
			'name' => __('Projects', 'onest-home'), /* This is the Title of the Group */
			'singular_name' => __('Project', 'onest-home'), /* This is the individual type */
			'all_items' => __('All Projects', 'onest-home'), /* the all items menu item */
			'add_new' => __('Add New', 'onest-home'), /* The add new menu item */
			'add_new_item' => __('Add New Project', 'onest-home'), /* Add New Display Title */
			'edit' => __( 'Edit', 'onest-home' ), /* Edit Dialog */
			'edit_item' => __('Edit Project', 'onest-home'), /* Edit Display Title */
			'new_item' => __('New Project', 'onest-home'), /* New Display Title */
			'view_item' => __('View Project', 'onest-home'), /* View Display Title */
			'search_items' => __('Search Project', 'onest-home'), /* Search Custom Type Title */ 
			'not_found' =>  __('Nothing found in the Database.', 'onest-home'), /* This displays if there are no entries yet */ 
			'not_found_in_trash' => __('Nothing found in Trash', 'onest-home'), /* This displays if there is nothing in the trash */
			'parent_item_colon' => ''
			), /* end of arrays */
			'description' => __( 'This is the example custom post type', 'onest-home' ), /* Custom Type Description */
			'public' => true,
			'publicly_queryable' => true,
			'exclude_from_search' => false,
			'show_ui' => true,
			'query_var' => true,
			'show_in_rest' => true,
			'menu_position' => 8, /* this is what order you want it to appear in on the left hand side menu */ 
			// 'menu_icon' => 'dashicons-book', /* the icon for the custom post type menu. uses built-in dashicons (CSS class name) */
			// 'menu_icon' => get_template_directory_uri() . "/img/ico-cpt.png",
			// 'rewrite'	=> array( 'slug' => 'custom_type', 'with_front' => false ), /* you can specify its url slug */
			// 'has_archive' => 'project', /* you can rename the slug here */
			'has_archive' => false, /* you can rename the slug here */
			'capability_type' => 'post',
			'hierarchical' => false,
			'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt') // 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'trackbacks', 'custom-fields', 'comments', 'revisions', 'sticky'
	 	) /* end of options */
	); /* end of register post type */
	
	// /* this adds your post categories to your custom post type */
	// register_taxonomy_for_object_type('category', 'custom_type');
	
	// /* this adds your post tags to your custom post type */
	// register_taxonomy_for_object_type('post_tag', 'custom_type');
	
} 

// adding the function to the Wordpress init
add_action( 'init', 'cpt_project');



// // now let's add custom categories (these act like categories)
// register_taxonomy( 'custom_cat', 
// 	array('custom_type'), /* if you change the name of register_post_type( 'custom_type', then you have to change this */
// 	array('hierarchical' => true,     /* if this is true, it acts like categories */             
// 		'labels' => array(
// 			'name' => __( 'Custom Categories', 'onest-home' ), /* name of the custom taxonomy */
// 			'singular_name' => __( 'Custom Category', 'onest-home' ), /* single taxonomy name */
// 			'search_items' =>  __( 'Search Custom Categories', 'onest-home' ), /* search title for taxomony */
// 			'all_items' => __( 'All Custom Categories', 'onest-home' ), /* all title for taxonomies */
// 			'parent_item' => __( 'Parent Custom Category', 'onest-home' ), /* parent title for taxonomy */
// 			'parent_item_colon' => __( 'Parent Custom Category:', 'onest-home' ), /* parent taxonomy title */
// 			'edit_item' => __( 'Edit Custom Category', 'onest-home' ), /* edit custom taxonomy title */
// 			'update_item' => __( 'Update Custom Category', 'onest-home' ), /* update title for taxonomy */
// 			'add_new_item' => __( 'Add New Custom Category', 'onest-home' ), /* add new title for taxonomy */
// 			'new_item_name' => __( 'New Custom Category Name', 'onest-home' ) /* name title for taxonomy */
// 		),
// 		'show_admin_column' => true, 
// 		'show_ui' => true,
// 		'query_var' => true,
// 		'rewrite' => array( 'slug' => 'custom-slug' ),
// 	)
// );   

// // now let's add custom tags (these act like categories)
// register_taxonomy( 'custom_tag', 
// 	array('custom_type'), /* if you change the name of register_post_type( 'custom_type', then you have to change this */
// 	array('hierarchical' => false,    /* if this is false, it acts like tags */                
// 		'labels' => array(
// 			'name' => __( 'Custom Tags', 'onest-home' ), /* name of the custom taxonomy */
// 			'singular_name' => __( 'Custom Tag', 'onest-home' ), /* single taxonomy name */
// 			'search_items' =>  __( 'Search Custom Tags', 'onest-home' ), /* search title for taxomony */
// 			'all_items' => __( 'All Custom Tags', 'onest-home' ), /* all title for taxonomies */
// 			'parent_item' => __( 'Parent Custom Tag', 'onest-home' ), /* parent title for taxonomy */
// 			'parent_item_colon' => __( 'Parent Custom Tag:', 'onest-home' ), /* parent taxonomy title */
// 			'edit_item' => __( 'Edit Custom Tag', 'onest-home' ), /* edit custom taxonomy title */
// 			'update_item' => __( 'Update Custom Tag', 'onest-home' ), /* update title for taxonomy */
// 			'add_new_item' => __( 'Add New Custom Tag', 'onest-home' ), /* add new title for taxonomy */
// 			'new_item_name' => __( 'New Custom Tag Name', 'onest-home' ) /* name title for taxonomy */
// 		),
// 		'show_admin_column' => true,
// 		'show_ui' => true,
// 		'query_var' => true,
// 	)
// ); 



/*
* Reviews CPT
*/
// let's create the function for the custom type
function cpt_reviews() { 
	// creating (registering) the custom type 
	register_post_type( 'review', /* (http://codex.wordpress.org/Function_Reference/register_post_type) */
	 	// let's now add all the options for this post type
		array('labels' => array(
			'name' => __('Reviews', 'onest-home'), /* This is the Title of the Group */
			'singular_name' => __('Review', 'onest-home'), /* This is the individual type */
			'all_items' => __('All Reviews', 'onest-home'), /* the all items menu item */
			'add_new' => __('Add New', 'onest-home'), /* The add new menu item */
			'add_new_item' => __('Add New Review', 'onest-home'), /* Add New Display Title */
			'edit' => __( 'Edit', 'onest-home' ), /* Edit Dialog */
			'edit_item' => __('Edit Reviews', 'onest-home'), /* Edit Display Title */
			'new_item' => __('New Review', 'onest-home'), /* New Display Title */
			'view_item' => __('View Review', 'onest-home'), /* View Display Title */
			'search_items' => __('Search Review', 'onest-home'), /* Search Custom Type Title */ 
			'not_found' =>  __('Nothing found in the Database.', 'onest-home'), /* This displays if there are no entries yet */ 
			'not_found_in_trash' => __('Nothing found in Trash', 'onest-home'), /* This displays if there is nothing in the trash */
			'parent_item_colon' => ''
			), /* end of arrays */
			'description' => __( 'This is the example custom post type', 'onest-home' ), /* Custom Type Description */
			'public' => true,
			'publicly_queryable' => true,
			'exclude_from_search' => false,
			'show_ui' => true,
			'query_var' => true,
			'show_in_rest' => true,
			'menu_position' => 8, /* this is what order you want it to appear in on the left hand side menu */ 
			// 'menu_icon' => 'dashicons-book', /* the icon for the custom post type menu. uses built-in dashicons (CSS class name) */
			// 'menu_icon' => get_template_directory_uri() . "/img/ico-cpt.png",
			// 'rewrite'	=> array( 'slug' => 'custom_type', 'with_front' => false ), /* you can specify its url slug */
			// 'has_archive' => 'review', /* you can rename the slug here */
			'has_archive' => false, /* you can rename the slug here */
			'capability_type' => 'post',
			'hierarchical' => false,
			'supports' => array( 'title', 'editor', 'author', 'thumbnail') // 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'trackbacks', 'custom-fields', 'comments', 'revisions', 'sticky'
	 	) /* end of options */
	); /* end of register post type */
	
	// /* this adds your post categories to your custom post type */
	// register_taxonomy_for_object_type('category', 'custom_type');
	
	// /* this adds your post tags to your custom post type */
	// register_taxonomy_for_object_type('post_tag', 'custom_type');
	
} 

// adding the function to the Wordpress init
add_action( 'init', 'cpt_reviews');




flush_rewrite_rules();