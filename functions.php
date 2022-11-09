<?php 

function david_theme_support () {

    add_theme_support( 'title-tag' );
    add_theme_support( 'custom-logo');
    add_theme_support( 'post-thumbnails' );

}

add_action( 'after_setup_theme', 'david_theme_support' );

 

function david_menus() {

    $locations = array (
        'primary' => "Desktop Primary Left Sidebar",
        'footer' => "Footer Menu Items"

    );                                           

    register_nav_menus( $locations );
}

add_action('init', 'david_menus' );


function david_register_styles () {

    wp_enqueue_style('david-styles', get_template_directory_uri() . "/style.css", array('david-bootstrap'), '1.0', 'all');
    wp_enqueue_style('david-bootstrap', "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css", array(), '4.4.1', 'all');
    wp_enqueue_style('david-fontawesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css", array(), '5.13.0', 'all');
}

add_action( 'wp_enqueue_scripts', 'david_register_styles' );


function david_register_scripts () {

    wp_enqueue_script('david-jquery', 'https://code.jquery.com/jquery-3.4.1.slim.min.js', array(),  '3.4.1', true);
    wp_enqueue_script('david-popper', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js', array(), '1.16.0', true);
    wp_enqueue_script('david-bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js', array(), '4.4.1', true);
    wp_enqueue_script('david-own', get_template_directory_uri() . "/assets/js/main.js", array(),  '1.0', true);
}


add_action('wp_enqueue_scripts', 'david_register_scripts' );


?>

