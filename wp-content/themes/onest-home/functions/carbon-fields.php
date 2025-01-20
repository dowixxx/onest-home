<?php



use Carbon_Fields\Container;
use Carbon_Fields\Field;



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