<?php
function mk_portfolio_taxonomy() {

    $labels = array(
        'name' => _x('Item Type', 'taxonomy general name'),
        'singular_name' => _x('Item Type', 'taxonomy singular name'),
        'search_items' => __('Search Item Types'),
        'all_items' => __('All Item Types'),
        'parent_item' => __('Parent Item Type'),
        'parent_item_colon' => __('Parent Item Type:'),
        'edit_item' => __('Edit Item Type'),
        'update_item' => __('Update Item Type'),
        'add_new_item' => __('Add New Item Type'),
        'new_item_name' => __('New Item Type Name'),
        'menu_name' => __('Item Type'),
    );

    $args = array(
        'hierarchical' => true,
        'labels' => $labels,
        'show_ui' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'type'),
    );

    register_taxonomy('type', array('mk_portfolio'), $args);
}
add_action( 'init', 'mk_portfolio_taxonomy' );