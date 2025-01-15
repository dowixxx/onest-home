<?php



/*
* Add text domain
*/
function onest_home_load_textdomain() {
    load_theme_textdomain('onest-home', get_template_directory() . '/languages');
}
add_action('after_setup_theme', 'onest_home_load_textdomain');