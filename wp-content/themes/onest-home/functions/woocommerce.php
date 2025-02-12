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
* Move description to bottom, archive-product.php
*/
function move_woocommerce_products_header() {
    remove_action('woocommerce_before_main_content', 'woocommerce_output_all_notices', 10); // Example if used there
    remove_action('woocommerce_archive_description', 'woocommerce_taxonomy_archive_description', 10);
    remove_action('woocommerce_archive_description', 'woocommerce_product_archive_description', 10);

    add_action('woocommerce_after_shop_loop', 'woocommerce_taxonomy_archive_description', 5);
    add_action('woocommerce_after_shop_loop', 'woocommerce_product_archive_description', 5);
}
add_action('wp', 'move_woocommerce_products_header');



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



/*
* Add container element around product, single-product.php
*/
add_action('woocommerce_before_single_product', 'my_add_product_wrapper_start', 15);
function my_add_product_wrapper_start()
{
    echo '<div class="container">';
}
add_action('woocommerce_after_single_product', 'my_add_product_wrapper_end', 5);
function my_add_product_wrapper_end()
{
    echo '</div>';
}



/*
* Add container element around notice, single-product.php
*/
remove_action('woocommerce_before_single_product', 'woocommerce_output_all_notices', 10);
add_action('woocommerce_before_single_product', 'my_custom_woo_notices', 10);
function my_custom_woo_notices()
{
    echo '<div class="container">';
    woocommerce_output_all_notices();
    echo '</div>';
}



/*
* Remove product meta (categories, tags, SKU) from single product page, single-product.php
*/
function my_remove_product_meta()
{
    remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40);
}
add_action('woocommerce_before_single_product_summary', 'my_remove_product_meta');



/*
* Remove description heading inside tab, single-product.php
*/
add_filter('woocommerce_product_description_heading', '__return_empty_string');
// Remove Additional Information heading from WooCommerce tabs
add_filter('woocommerce_product_additional_information_heading', '__return_false');



/*
* Add lightbox, single-product.php
*/
add_theme_support('wc-product-gallery-zoom');
add_theme_support('wc-product-gallery-lightbox');
add_theme_support('wc-product-gallery-slider');



/*
* Remove related products output, single-product.php
*/
// remove_action('woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20);