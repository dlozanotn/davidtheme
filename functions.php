<?php 

function david_register_styles () {

    wp_enqueue_style('david-styles', get_template_directory_uri() . "/style.css", array('david-bootstrap'), '1.0', 'all');
    wp_enqueue_style('david-bootstrap', "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css", array(), '4.4.1', 'all');
    wp_enqueue_style('david-fontawesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css", array(), '5.13.0', 'all');
}

add_action( 'wp_enqueue_scripts', 'david_register_styles' )



?>

