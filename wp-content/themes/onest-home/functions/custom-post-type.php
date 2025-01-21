<?php



/*
* Hide posts and pages in dashboard.
*/
// function post_remove()
// {
// 	remove_menu_page('edit.php');
// 	remove_menu_page('edit.php?post_type=page');
// }
// add_action('admin_menu', 'post_remove');



/*
* Register Custom Post Types
*/
function custom_post_type() {

	$labels = array(
		'name'                  => _x( 'Temos', 'Post Type General Name', 'onest-home' ),
		'singular_name'         => _x( 'Tema', 'Post Type Singular Name', 'onest-home' ),
		'menu_name'             => __( 'Temos', 'onest-home' ),
		'name_admin_bar'        => __( 'Tema', 'onest-home' ),
		// 'archives'              => __( 'Temos archyvai', 'onest-home' ),
		// 'attributes'            => __( 'Temos atributai', 'onest-home' ),
		// 'parent_item_colon'     => __( 'Tėvinė tema:', 'onest-home' ),
		// 'all_items'             => __( 'Visos temos', 'onest-home' ),
		// 'add_new_item'          => __( 'Pridėti naują temą', 'onest-home' ),
		'add_new'               => __( 'Pridėti temą', 'onest-home' ),
		// 'new_item'              => __( 'Nauja tema', 'onest-home' ),
		// 'edit_item'             => __( 'Redaguoti temą', 'onest-home' ),
		// 'update_item'           => __( 'Atnaujnti temą', 'onest-home' ),
		'view_item'             => __( 'Peržiūrėti temą', 'onest-home' ),
		'view_items'            => __( 'Peržiūrėti temas', 'onest-home' ),
		// 'search_items'          => __( 'Ieškoti temos', 'onest-home' ),
		// 'not_found'             => __( 'Nerasta', 'onest-home' ),
		// 'not_found_in_trash'    => __( 'Šiukšlių dėžėje nerasta', 'onest-home' ),
		// 'featured_image'        => __( 'Pagrindinis vaizdas', 'onest-home' ),
		// 'set_featured_image'    => __( 'Nustatyti pagrindinį vaizdą', 'onest-home' ),
		// 'remove_featured_image' => __( 'Pašalinti pagrindinį vaizdą', 'onest-home' ),
		// 'use_featured_image'    => __( 'Naudoti kaip pagrindinį vaizdą', 'onest-home' ),
		// 'insert_into_item'      => __( 'Įterpti į temą', 'onest-home' ),
		// 'uploaded_to_this_item' => __( 'Įkelta į šią temą', 'onest-home' ),
		// 'items_list'            => __( 'Temų sąrašas', 'onest-home' ),
		// 'items_list_navigation' => __( 'Temų sąrašo navigacija', 'onest-home' ),
		// 'filter_items_list'     => __( 'Filtruoti temų sąrašą', 'onest-home' ),
	);
	$args = array(
		'label'                 => __( 'Tema', 'onest-home' ),
		// 'description'           => __( 'Temų sąrašas', 'onest-home' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'revisions', 'page-attributes' ),
		// 'taxonomies'            => array( 'category', 'post_tag' ),
		'taxonomies'            => array('klase'),
		'hierarchical'          => true,
		'public'                => true,
		// 'show_ui'               => true,
		// 'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-list-view',
		// 'show_in_admin_bar'     => true,
		// 'show_in_nav_menus'     => true,
		// 'can_export'            => true,
		'has_archive'           => true,
		// 'exclude_from_search'   => false,
		// 'publicly_queryable'    => true,
		// 'capability_type'       => 'page',
		'show_in_rest'          => true,
	);
	register_post_type( 'tema', $args );

	// register_taxonomy(
	// 	'klase',
	// 	'tema',
	// 	array(
	// 		'show_in_rest' => true,
	// 		'hierarchical' => true,
	// 		'label' => 'Klasės',
	// 		'query_var' => true,
	// 		'has_archive' => true,
	// 		'rewrite' => array('slug' => '/', 'with_front' => false, )
	// 	)
	// );

}
add_action( 'init', 'custom_post_type', 0 );









// /* joints Custom Post Type Example
// This page walks you through creating 
// a custom post type and taxonomies. You
// can edit this one or copy the following code 
// to create another one. 

// I put this in a separate file so as to 
// keep it organized. I find it easier to edit
// and change things if they are concentrated
// in their own file.

// */


// // let's create the function for the custom type
// function custom_post_example() { 
// 	// creating (registering) the custom type 
// 	register_post_type( 'custom_type', /* (http://codex.wordpress.org/Function_Reference/register_post_type) */
// 	 	// let's now add all the options for this post type
// 		array('labels' => array(
// 			'name' => __('Custom Types', 'jointswp'), /* This is the Title of the Group */
// 			'singular_name' => __('Custom Post', 'jointswp'), /* This is the individual type */
// 			'all_items' => __('All Custom Posts', 'jointswp'), /* the all items menu item */
// 			'add_new' => __('Add New', 'jointswp'), /* The add new menu item */
// 			'add_new_item' => __('Add New Custom Type', 'jointswp'), /* Add New Display Title */
// 			'edit' => __( 'Edit', 'jointswp' ), /* Edit Dialog */
// 			'edit_item' => __('Edit Post Types', 'jointswp'), /* Edit Display Title */
// 			'new_item' => __('New Post Type', 'jointswp'), /* New Display Title */
// 			'view_item' => __('View Post Type', 'jointswp'), /* View Display Title */
// 			'search_items' => __('Search Post Type', 'jointswp'), /* Search Custom Type Title */ 
// 			'not_found' =>  __('Nothing found in the Database.', 'jointswp'), /* This displays if there are no entries yet */ 
// 			'not_found_in_trash' => __('Nothing found in Trash', 'jointswp'), /* This displays if there is nothing in the trash */
// 			'parent_item_colon' => ''
// 			), /* end of arrays */
// 			'description' => __( 'This is the example custom post type', 'jointswp' ), /* Custom Type Description */
// 			'public' => true,
// 			'publicly_queryable' => true,
// 			'exclude_from_search' => false,
// 			'show_ui' => true,
// 			'query_var' => true,
// 			'menu_position' => 8, /* this is what order you want it to appear in on the left hand side menu */ 
// 			'menu_icon' => 'dashicons-book', /* the icon for the custom post type menu. uses built-in dashicons (CSS class name) */
// 			'rewrite'	=> array( 'slug' => 'custom_type', 'with_front' => false ), /* you can specify its url slug */
// 			'has_archive' => 'custom_type', /* you can rename the slug here */
// 			'capability_type' => 'post',
// 			'hierarchical' => false,
// 			/* the next one is important, it tells what's enabled in the post editor */
// 			'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'trackbacks', 'custom-fields', 'comments', 'revisions', 'sticky')
// 	 	) /* end of options */
// 	); /* end of register post type */
	
// 	/* this adds your post categories to your custom post type */
// 	register_taxonomy_for_object_type('category', 'custom_type');
// 	/* this adds your post tags to your custom post type */
// 	register_taxonomy_for_object_type('post_tag', 'custom_type');
	
// } 

// 	// adding the function to the Wordpress init
// 	add_action( 'init', 'custom_post_example');
	
// 	/*
// 	for more information on taxonomies, go here:
// 	http://codex.wordpress.org/Function_Reference/register_taxonomy
// 	*/
	
// 	// now let's add custom categories (these act like categories)
//     register_taxonomy( 'custom_cat', 
//     	array('custom_type'), /* if you change the name of register_post_type( 'custom_type', then you have to change this */
//     	array('hierarchical' => true,     /* if this is true, it acts like categories */             
//     		'labels' => array(
//     			'name' => __( 'Custom Categories', 'jointswp' ), /* name of the custom taxonomy */
//     			'singular_name' => __( 'Custom Category', 'jointswp' ), /* single taxonomy name */
//     			'search_items' =>  __( 'Search Custom Categories', 'jointswp' ), /* search title for taxomony */
//     			'all_items' => __( 'All Custom Categories', 'jointswp' ), /* all title for taxonomies */
//     			'parent_item' => __( 'Parent Custom Category', 'jointswp' ), /* parent title for taxonomy */
//     			'parent_item_colon' => __( 'Parent Custom Category:', 'jointswp' ), /* parent taxonomy title */
//     			'edit_item' => __( 'Edit Custom Category', 'jointswp' ), /* edit custom taxonomy title */
//     			'update_item' => __( 'Update Custom Category', 'jointswp' ), /* update title for taxonomy */
//     			'add_new_item' => __( 'Add New Custom Category', 'jointswp' ), /* add new title for taxonomy */
//     			'new_item_name' => __( 'New Custom Category Name', 'jointswp' ) /* name title for taxonomy */
//     		),
//     		'show_admin_column' => true, 
//     		'show_ui' => true,
//     		'query_var' => true,
//     		'rewrite' => array( 'slug' => 'custom-slug' ),
//     	)
//     );   
    
// 	// now let's add custom tags (these act like categories)
//     register_taxonomy( 'custom_tag', 
//     	array('custom_type'), /* if you change the name of register_post_type( 'custom_type', then you have to change this */
//     	array('hierarchical' => false,    /* if this is false, it acts like tags */                
//     		'labels' => array(
//     			'name' => __( 'Custom Tags', 'jointswp' ), /* name of the custom taxonomy */
//     			'singular_name' => __( 'Custom Tag', 'jointswp' ), /* single taxonomy name */
//     			'search_items' =>  __( 'Search Custom Tags', 'jointswp' ), /* search title for taxomony */
//     			'all_items' => __( 'All Custom Tags', 'jointswp' ), /* all title for taxonomies */
//     			'parent_item' => __( 'Parent Custom Tag', 'jointswp' ), /* parent title for taxonomy */
//     			'parent_item_colon' => __( 'Parent Custom Tag:', 'jointswp' ), /* parent taxonomy title */
//     			'edit_item' => __( 'Edit Custom Tag', 'jointswp' ), /* edit custom taxonomy title */
//     			'update_item' => __( 'Update Custom Tag', 'jointswp' ), /* update title for taxonomy */
//     			'add_new_item' => __( 'Add New Custom Tag', 'jointswp' ), /* add new title for taxonomy */
//     			'new_item_name' => __( 'New Custom Tag Name', 'jointswp' ) /* name title for taxonomy */
//     		),
//     		'show_admin_column' => true,
//     		'show_ui' => true,
//     		'query_var' => true,
//     	)
//     ); 
    
//     /*
//     	looking for custom meta boxes?
//     	check out this fantastic tool:
//     	https://github.com/CMB2/CMB2
//     */
