<?php
function mk_enqueue_styles() {

    $style_dependencies = array();
    $script_dependencies = array('jquery');

    if ( is_front_page() || is_post_type_archive('mk_portfolio') || ('mk_portfolio' == get_post_type()) ) {
        wp_enqueue_style( 'slick_css', get_template_directory_uri() . '/dist/css/vendor/slick/slick.min.css', array(), true );
        wp_enqueue_style( 'slick_theme', get_template_directory_uri() . '/dist/css/vendor/slick/slick-theme.min.css', array(), true );
        wp_enqueue_script( 'slick_js', get_stylesheet_directory_uri() . '/dist/js/vendor/slick.min.js', array( 'jquery' ), true, true );

        array_push($style_dependencies, 'slick_css', 'slick_theme');
        $script_dependencies[] = 'slick_js';
    }

    $style_dependencies[] = 'fontello';

    wp_enqueue_style( 'fontello', get_template_directory_uri() . '/dist/css/vendor/fontello/sysc_fonts-embedded.min.css', array(), true );
    wp_enqueue_style( 'styles', get_template_directory_uri() . '/dist/css/style.min.css', $style_dependencies );
    wp_enqueue_script( 'particles_js', get_stylesheet_directory_uri() . '/dist/js/vendor/particles.min.js', $script_dependencies, true, true );
    wp_enqueue_script( 'scripts', get_stylesheet_directory_uri() . '/dist/js/all.min.js', $script_dependencies, true, true );

    wp_localize_script( 'scripts', 'ajax', array( 'ajax_url' => admin_url( 'admin-ajax.php' ) ) );
    wp_localize_script('scripts', 'theme_url', array( 'url' => get_stylesheet_directory_uri() ));
}
add_action( 'wp_enqueue_scripts', 'mk_enqueue_styles' );