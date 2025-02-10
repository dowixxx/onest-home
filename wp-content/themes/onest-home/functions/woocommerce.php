<?php



/*
* Add WooCommerce support
*/
function onesthome_add_woocommerce_support() {
	add_theme_support( 'woocommerce' );
}
add_action( 'after_setup_theme', 'onesthome_add_woocommerce_support' );



/*
* Remove WooCommerce breadcrumbs
*/
function my_remove_breadcrumbs() {
    remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20, 0 );
}
add_action( 'after_setup_theme', 'my_remove_breadcrumbs' );



/*
* Remove result count, archive-product.php
*/
function remove_woocommerce_result_count() {
    remove_action( 'woocommerce_before_shop_loop', 'woocommerce_result_count', 20 );
}
add_action( 'after_setup_theme', 'remove_woocommerce_result_count' );



/*
* Remove ordering, archive-product.php
*/
function remove_woocommerce_catalog_ordering() {
    remove_action( 'woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30 );
}
add_action( 'after_setup_theme', 'remove_woocommerce_catalog_ordering' );



/*
* Remove page title, archive-product.php
*/
function remove_woocommerce_page_title() {
    return false;
}
add_filter( 'woocommerce_show_page_title', 'remove_woocommerce_page_title' );



/*
* Remove add to cart button, archive-product.php
*/
function remove_add_to_cart_buttons() {
    remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 10 );
}
add_action( 'after_setup_theme', 'remove_add_to_cart_buttons' );
