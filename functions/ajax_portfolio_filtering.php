<?php
function mk_portfolio_filtering() {

    $category = $_REQUEST['category'];

    $results = null;

    if ( $category != 'clear' ) {
        $results = load_posts( $category );
    } else {
        $results = load_posts();
    }

    set_query_var( 'results', $results );

    get_template_part('partials/portfolio-archive');

    wp_die();
}