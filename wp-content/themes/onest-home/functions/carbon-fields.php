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
* cpt page, template page-about-us
*/
add_action( 'carbon_fields_register_fields', function() {

    Container::make( 'post_meta', 'Additional content')
        ->where( 'post_type', '=', 'page' )
        ->show_on_template( array(
            'page-about-us.php'
        ) )
        ->add_fields( array(

            Field::make('rich_text', 'crb_additional_content', '')
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