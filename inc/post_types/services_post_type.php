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
        'name'                  => _x( 'Services', 'the-towing-theme' ),
        'singular_name'         => _x( 'Service', 'the-towing-theme' ),
        'menu_name'             => __( 'Services', 'the-towing-theme' ),
        'name_admin_bar'        => __( 'Services', 'the-towing-theme' ),
        'archives'              => __( 'Services Archives', 'the-towing-theme' ),
        'parent_item_colon'     => __( 'Parent Item:', 'the-towing-theme' ),
        'all_items'             => __( 'All Services', 'the-towing-theme' ),
        'add_new_item'          => __( 'Add New Service', 'the-towing-theme' ),
        'add_new'               => __( 'Add Service', 'the-towing-theme' ),
        'new_item'              => __( 'New Service', 'the-towing-theme' ),
        'edit_item'             => __( 'Edit Service', 'the-towing-theme' ),
        'update_item'           => __( 'Update Service', 'the-towing-theme' ),
        'view_item'             => __( 'View Service', 'the-towing-theme' ),
        'search_items'          => __( 'Search Service', 'the-towing-theme' ),
        'not_found'             => __( 'Service Not found', 'the-towing-theme' ),
        'not_found_in_trash'    => __( 'Service Not found in Trash', 'the-towing-theme' ),
        'featured_image'        => __( 'Featured Image', 'the-towing-theme' ),
        'set_featured_image'    => __( 'Set featured image', 'the-towing-theme' ),
        'remove_featured_image' => __( 'Remove featured image', 'the-towing-theme' ),
        'use_featured_image'    => __( 'Use as featured image', 'the-towing-theme' ),
        'insert_into_item'      => __( 'Insert into Service', 'the-towing-theme' ),
        'uploaded_to_this_item' => __( 'Uploaded to this Service', 'the-towing-theme' ),
        'items_list'            => __( 'Service list', 'the-towing-theme' ),
        'items_list_navigation' => __( 'Service list navigation', 'the-towing-theme' ),
        'filter_items_list'     => __( 'Filter Service list', 'the-towing-theme' ),
    );
    $args = array(
        'label'                 => __( 'Services', 'the-towing-theme' ),
        'description'           => __( 'Service Description', 'the-towing-theme' ),
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