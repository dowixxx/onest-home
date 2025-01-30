<?php



use Carbon_Fields\Container;
use Carbon_Fields\Field;



/*
* theme options
*/
add_action('carbon_fields_register_fields', 'crb_attach_theme_options');
function crb_attach_theme_options() {

    Container::make('theme_options', 'Theme Options')
        ->set_icon('dashicons-admin-generic')
        ->set_page_menu_position(80)

        // tab
        ->add_tab('Contact Information', array(
            Field::make('text', 'crb_phone_number', 'Phone Number'),
            Field::make('text', 'crb_email_address', 'Email Address'),
            Field::make('text', 'crb_working_hours', 'Working Hours'),
        ))

        // tab
        ->add_tab('Socials', array(
            Field::make('text', 'crb_instagram_url', 'Instagram Profile URL'),
            Field::make('text', 'crb_facebook_url', 'Facebook Profile URL'),
        ))

        // tab
        ->add_tab('Header', array(
            Field::make('text', 'crb_notice_lt', 'Notice (LT)'),
            Field::make('text', 'crb_notice_en', 'Notice (EN)'),
        ))

        // tab
        ->add_tab('Footer', array(
        ))

        // tab
        ->add_tab('General', array(
            Field::make('image', 'crb_logo', 'Logo')
                ->set_value_type('image'),
        ));
}



/*
* cpt page, page-about-us.php
*/
add_action( 'carbon_fields_register_fields', function() {

    Container::make( 'post_meta', ' ')
        ->where( 'post_type', '=', 'page' )
        ->show_on_template( array(
            'page-about-us.php'
        ) )
        ->add_fields( array(

            Field::make( 'media_gallery', 'crb_media_gallery', 'Media Gallery' )
                ->set_type( array( 'image', 'video' ) ),

            Field::make('rich_text', 'crb_additional_content', 'Additional content')
                ->set_settings([
                    'media_buttons' => false,
                    'textarea_rows' => 5,
                    'teeny' => true,
                    'quicktags' => false,
                    'tinymce' => [
                        'plugins' => 'lists paste',
                        'paste_as_text' => true,
                    ],
                ]),
        ) );
});



/*
* cpt page, page-contacts.php
*/
add_action( 'carbon_fields_register_fields', function() {

    Container::make( 'post_meta', ' ')
        ->where( 'post_type', '=', 'page' )
        ->show_on_template( array(
            'page-contacts.php'
        ) )
        ->add_fields( array(

            Field::make( 'media_gallery', 'crb_media_gallery', 'Media Gallery' )
                ->set_type( array( 'image', 'video' ) ),

        ) );
});



/*
* cpt page, page-home.php
*/
add_action( 'carbon_fields_register_fields', function() {

    Container::make( 'post_meta', ' ')
        ->where( 'post_type', '=', 'page' )
        ->show_on_template( array(
            'page-home.php'
        ) )
        ->add_fields( array(

            Field::make( 'complex', 'crb_hero_slider', 'Hero slider' )
                ->add_fields( array(
                    Field::make( 'image', 'slide_image', 'Slide image' ),
                    Field::make( 'text', 'slide_title', 'Slide title' ),
                    Field::make( 'text', 'button_text', 'Button text' ),
                    Field::make( 'text', 'button_url', 'Button URL' ),
                ) )

        ) );
});



/*
* cpt projects, single-projects.php
*/
add_action( 'carbon_fields_register_fields', function() {

    Container::make( 'post_meta', 'Project info')
        ->where( 'post_type', '=', 'project' )
        ->show_on_template( array(
            'single-projects.php'
        ) )
        ->add_fields( array(

            Field::make( 'text', 'project_client', 'Client' ),
            Field::make( 'text', 'project_location', 'Location' ),

        ) );
});