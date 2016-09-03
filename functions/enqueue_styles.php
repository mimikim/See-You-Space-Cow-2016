<?php
function mk_enqueue_styles() {

    wp_enqueue_style( 'slick_css', get_template_directory_uri() . '/dist/css/vendor/slick/slick.css', array(), null );

    wp_enqueue_style( 'slick_theme', get_template_directory_uri() . '/dist/css/vendor/slick/slick-theme.css', array(), null );

    wp_enqueue_style( 'styles', get_template_directory_uri() . '/dist/css/style.min.css', array( 'slick_css', 'slick_theme') );


    wp_enqueue_script( 'bootstrap_js', get_stylesheet_directory_uri() . '/dist/js/vendor/bootstrap.min.js', array( 'jquery' ) );

    wp_enqueue_script( 'slick_js', get_stylesheet_directory_uri() . '/dist/js/vendor/slick.min.js', array( 'jquery', 'bootstrap_js' ) );

    wp_enqueue_script( 'particles_js', get_stylesheet_directory_uri() . '/dist/js/vendor/particles.min.js', array( 'jquery', 'bootstrap_js' ) );

    wp_enqueue_script( 'scripts', get_stylesheet_directory_uri() . '/dist/js/all.min.js', array( 'jquery', 'bootstrap_js', 'slick_js', 'particles_js' ) );


    wp_localize_script( 'scripts', 'ajax', array( 'ajax_url' => admin_url( 'admin-ajax.php' ) ) );

    wp_localize_script('scripts', 'theme_url', array( 'url' => get_stylesheet_directory_uri() ));

}
add_action( 'wp_enqueue_scripts', 'mk_enqueue_styles' );