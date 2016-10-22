<?php
function mk_enqueue_styles() {
    wp_enqueue_style( 'slick_css', get_template_directory_uri() . '/dist/css/vendor/slick/slick.min.css', array(), true );
    wp_enqueue_style( 'slick_theme', get_template_directory_uri() . '/dist/css/vendor/slick/slick-theme.min.css', array(), true );
    wp_enqueue_style( 'fontello', get_template_directory_uri() . '/dist/css/vendor/fontello/sysc_fonts-embedded.min.css', array(), true );
    wp_enqueue_style( 'styles', get_template_directory_uri() . '/dist/css/style.min.css', array( 'slick_css', 'slick_theme', 'fontello') );

    wp_enqueue_script( 'slick_js', get_stylesheet_directory_uri() . '/dist/js/vendor/slick.min.js', array( 'jquery' ), true, true );
    wp_enqueue_script( 'particles_js', get_stylesheet_directory_uri() . '/dist/js/vendor/particles.min.js', array( 'jquery' ), true, true );
    wp_enqueue_script( 'scripts', get_stylesheet_directory_uri() . '/dist/js/all.min.js', array( 'jquery', 'slick_js', 'particles_js' ), true, true );

    wp_localize_script( 'scripts', 'ajax', array( 'ajax_url' => admin_url( 'admin-ajax.php' ) ) );
    wp_localize_script('scripts', 'theme_url', array( 'url' => get_stylesheet_directory_uri() ));
}
add_action( 'wp_enqueue_scripts', 'mk_enqueue_styles' );