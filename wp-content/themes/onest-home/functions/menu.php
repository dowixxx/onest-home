<?php



/*
* Register menus
*/
if (function_exists('register_nav_menus')) {
    register_nav_menus(
        array(
            'header-primary-menu' => 'Header primary menu',
			'footer_menu_1' => 'Footer Column 1',
            'footer_menu_2' => 'Footer Column 2',
            'footer_menu_3' => 'Footer Column 3',
            'footer_menu_4' => 'Footer Column 4',
        )
    );
}
