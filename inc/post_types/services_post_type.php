<?php
/**
 * Created by PhpStorm.
 * User: ido
 * Date: 1/10/2017
 * Time: 9:19 AM
 */
// Register Custom Post Type
//Custom Post Types
function services_post_type() {
    $labels = array(
        'name'                  => _x( 'Services', 'Post Type General Name', 'coinso_towing_theme' ),
        'singular_name'         => _x( 'Service', 'Post Type Singular Name', 'coinso_towing_theme' ),
        'menu_name'             => __( 'Services', 'coinso_towing_theme' ),
        'name_admin_bar'        => __( 'Services', 'coinso_towing_theme' ),
        'archives'              => __( 'Services Archives', 'coinso_towing_theme' ),
        'parent_item_colon'     => __( 'Parent Item:', 'coinso_towing_theme' ),
        'all_items'             => __( 'All Services', 'coinso_towing_theme' ),
        'add_new_item'          => __( 'Add New Service', 'coinso_towing_theme' ),
        'add_new'               => __( 'Add Service', 'coinso_towing_theme' ),
        'new_item'              => __( 'New Service', 'coinso_towing_theme' ),
        'edit_item'             => __( 'Edit Service', 'coinso_towing_theme' ),
        'update_item'           => __( 'Update Service', 'coinso_towing_theme' ),
        'view_item'             => __( 'View Service', 'coinso_towing_theme' ),
        'search_items'          => __( 'Search Service', 'coinso_towing_theme' ),
        'not_found'             => __( 'Service Not found', 'coinso_towing_theme' ),
        'not_found_in_trash'    => __( 'Service Not found in Trash', 'coinso_towing_theme' ),
        'featured_image'        => __( 'Featured Image', 'coinso_towing_theme' ),
        'set_featured_image'    => __( 'Set featured image', 'coinso_towing_theme' ),
        'remove_featured_image' => __( 'Remove featured image', 'coinso_towing_theme' ),
        'use_featured_image'    => __( 'Use as featured image', 'coinso_towing_theme' ),
        'insert_into_item'      => __( 'Insert into Service', 'coinso_towing_theme' ),
        'uploaded_to_this_item' => __( 'Uploaded to this Service', 'coinso_towing_theme' ),
        'items_list'            => __( 'Service list', 'coinso_towing_theme' ),
        'items_list_navigation' => __( 'Service list navigation', 'coinso_towing_theme' ),
        'filter_items_list'     => __( 'Filter Service list', 'coinso_towing_theme' ),
    );
    $args = array(
        'label'                 => __( 'Services', 'coinso_towing_theme' ),
        'description'           => __( 'Service Description', 'coinso_towing_theme' ),
        'labels'                => $labels,
        'supports'              => array('title','thumbnail' ),
        'taxonomies'            => array(),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 20,
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => false,
        'exclude_from_search'   => true,
        'publicly_queryable'    => true,
        'menu_icon'             => 'dashicons-admin-tools',
        'capability_type'       => 'post',
    );
    register_post_type( 'services', $args );
}
add_action( 'init', 'services_post_type', 0 );