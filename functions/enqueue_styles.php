<?php

function mk_enqueue_styles() {

    wp_enqueue_style( 'styles', get_template_directory_uri() . '/dist/css/style.css', array() );

    wp_enqueue_script( 'scripts', get_stylesheet_directory_uri() . '/dist/js/all.min.js', array( 'jquery' ) );

    wp_localize_script( 'scripts', 'ajax', array( 'ajax_url' => admin_url( 'admin-ajax.php' ) ) );

}
add_action( 'wp_enqueue_scripts', 'mk_enqueue_styles' );