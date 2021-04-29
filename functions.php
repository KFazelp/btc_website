<?php
function load_styles()
{
    wp_register_style('font', get_template_uri().'fonts/font-awesome/css/font-awesome.min.css', array(), 1, 'all');
    wp_enqueue_style('font');

    wp_register_style('styles', get_template_uri().'/style.css', array(), 1, 'all');
    wp_enqueue_style('styles');

    wp_register_style('custom', get_template_uri() . '/custom.css', array(), 1, 'all');
    wp_enqueue_style('custom');
}
add_action('wp_enqueue_scripts', 'load_styles');


// Add Thumbnail Support
add_theme_support('post-thumbnails');
//set_post_thumbnail_size( 140, 140, true );

// Register Custom Post Type
function merchants_custom_post_type() {
    $labels = array(
        'name' => 'Merchants',
        'singular_name' => 'Merchant',
        'add_new' => 'Add Merchant',
        'all_items' => 'All Merchants',
        'add_new_item' => 'Add New Merchant',
        'edit_item' => 'Edit Merchant',
        'view_item' => 'View Merchant',
        'new_item' => 'New Item',
        'search_item' => 'Search Merchant',
        'not_found' => 'No merchant found',
        'not_found_in_trash' => 'No merchant found in trash',
        'parent_item_colon' => 'Parent Merchant'
    );
    $args = array(
        'labels' => $labels,
        'supports' => array( 'title' ),
        'hierarchical' => false,
        'public' => true,
        'menu_position' => 5,
        'rewrite' => true,
        'query_var' => true,
        'hierarchical' => false,
        'can_export' => true,
        'has_archive' => false,
        'exclude_from_search' => false,
        'publicly_queryable' => true,
        'capability_type' => 'post',
        'menu_icon' => 'dashicons-businessman'
    );
    register_post_type( 'merchants', $args );

}
add_action( 'init', 'merchants_custom_post_type');




function messages_custom_post_type() {
    $labels = array(
        'name' => 'Messages',
        'singular_name' => 'Message',
        'add_new' => 'Add Message',
        'all_items' => 'All Messages',
        'add_new_item' => 'Add New Message',
        'edit_item' => 'Edit Message',
        'view_item' => 'View Message',
        'new_item' => 'New Item',
        'search_item' => 'Search Messages',
        'not_found' => 'No message found',
        'not_found_in_trash' => 'No message found in trash',
        'parent_item_colon' => 'Parent Message'
    );
    $args = array(
        'labels' => $labels,
        'supports' => array( 'title' ),
        'taxonomies' => array( 'category' ),
        'hierarchical' => false,
        'public' => true,
        'menu_position' => 5,
        'rewrite' => true,
        'query_var' => true,
        'hierarchical' => false,
        'can_export' => true,
        'has_archive' => false,
        'exclude_from_search' => false,
        'publicly_queryable' => true,
        'capability_type' => 'post',
        'menu_icon' => 'dashicons-format-aside'
    );
    register_post_type( 'messages', $args );

}
add_action( 'init', 'messages_custom_post_type');


// remove pages text editor
add_action('init', 'init_remove_support',100);
function init_remove_support(){
    $post_type = 'page';
    remove_post_type_support( $post_type, 'editor');
}