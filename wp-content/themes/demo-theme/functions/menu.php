<?php



/*
* Register menus
*/
if (function_exists('register_nav_menus')) {
    register_nav_menus(
        array(
            'header' => 'Header',
			'footer' => 'Footer',
        )
    );
}