<?php
if( !class_exists('RI_Enqueue') ):
    class RI_Enqueue {
        function __construct() {
            wp_enqueue_style( 'ri-style', get_stylesheet_directory_uri() . "/assets/css/style.css" );

            wp_enqueue_script( 'ri-script', get_stylesheet_directory_uri() . "/assets/js/script.js", [], null, true );
        }
    }

    new RI_Enqueue();
endif;