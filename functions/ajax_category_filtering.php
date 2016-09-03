<?php
function mk_category_filtering() {

    $category_array = $_REQUEST['category_array'];

    $post_type = $_REQUEST['post_type'];

    $sort_array = $_REQUEST['sort_array'];

    $results = load_posts( $post_type, $category_array, $sort_array );

    set_query_var( 'results', $results );

    get_template_part('partials/category-filtering');

    wp_die();
}