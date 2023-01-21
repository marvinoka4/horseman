<?php


function themetemplate_register_styles(){

    $version = wp_get_theme()->get( 'Version' );
    wp_enqueue_style('themetemplate-style', get_template_directory_uri() . "/style.css", array('themetemplate-bootstrap'), $version, 'all');
    wp_enqueue_style('themetemplate-bootstrap', "https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css", array(), '4.4.1', 'all');
    wp_enqueue_style('themetemplate-fontawesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css", array(), '5.13.0', 'all');

}

add_action( 'wp_enqueue_scripts', 'themetemplate_register_styles');

function themetemplate_register_scripts(){

    wp_enqueue_script('themetemplate-bootstrap', "https://code.jquery.com/jquery-3.4.1.slim.min.js", array(), '3.4.1', true);

}

add_action( 'wp_enqueue_scripts', 'themetemplate_register_scripts');

?>