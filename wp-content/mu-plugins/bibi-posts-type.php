<?php

function bibi_register_post_type() {
    $labels = array(
        'name' => __( 'Wishes', 'bibicustomposts' ),
        'singular_name' => __('Wish', 'bibicustomposts' ),
        // 'add_new' => __( 'New Wish', 'bibicustomposts' ),
        'add_new_item' => __( 'Add New Wish', 'bibicustomposts' ),
        'edit_item' => __( 'Edit Wish', 'bibicustomposts' ),
        // 'new_item' => __( 'New Wish', 'bibicustomposts' ),
        // 'view_item' => __( 'View Wishes', 'bibicustomposts' ),
        // 'search_items' => __( 'Search Wishes', 'bibicustomposts' ),
        // 'not_found' =>  __( 'No Wishes Found', 'bibicustomposts' ),
        // 'not_found_in_trash' => __( 'No Wishes found in Trash', 'bibicustomposts' ),
       );
       $args = array(
        'labels' => $labels,
        'menu_icon' => 'dashicons-star-filled',
        'has_archive' => true,
        'public' => true,
        // 'hierarchical' => false,
        'supports' => array(
         'title',
         'editor',
        //  'excerpt',
        //  'custom-fields',
        //  'thumbnail',
        //  'page-attributes'
        ),
        // the following line causes an error, if active
        // 'taxonomies' => 'category',
        'rewrite'   => array( 'slug' => 'wish' ),
        'show_in_rest' => true
       );
       register_post_type('wish', $args);
}

add_action('init', 'bibi_register_post_type');
