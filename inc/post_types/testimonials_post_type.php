<?php
/**
 * Created by PhpStorm.
 * User: ido
 * Date: 1/10/2017
 * Time: 9:19 AM
 */
// Register Custom Post Type
//Custom Post Types
function testimonials_post_type() {
    $labels = array(
        'name'                  => _x( 'testimonials', 'the-towing-theme' ),
        'singular_name'         => _x( 'testimonial',  'the-towing-theme' ),
        'menu_name'             => __( 'Testimonials', 'the-towing-theme' ),
        'name_admin_bar'        => __( 'Testimonials', 'the-towing-theme' ),
        'archives'              => __( 'testimonials Archives', 'the-towing-theme' ),
        'parent_item_colon'     => __( 'Parent Item:', 'the-towing-theme' ),
        'all_items'             => __( 'All testimonials', 'the-towing-theme' ),
        'add_new_item'          => __( 'Add New testimonial', 'the-towing-theme' ),
        'add_new'               => __( 'Add testimonial', 'the-towing-theme' ),
        'new_item'              => __( 'New testimonial', 'the-towing-theme' ),
        'edit_item'             => __( 'Edit testimonial', 'the-towing-theme' ),
        'update_item'           => __( 'Update testimonial', 'the-towing-theme' ),
        'view_item'             => __( 'View testimonial', 'the-towing-theme' ),
        'search_items'          => __( 'Search testimonial', 'the-towing-theme' ),
        'not_found'             => __( 'testimonial Not found', 'the-towing-theme' ),
        'not_found_in_trash'    => __( 'testimonial Not found in Trash', 'the-towing-theme' ),
        'featured_image'        => __( 'Featured Image', 'the-towing-theme' ),
        'set_featured_image'    => __( 'Set featured image', 'the-towing-theme' ),
        'remove_featured_image' => __( 'Remove featured image', 'the-towing-theme' ),
        'use_featured_image'    => __( 'Use as featured image', 'the-towing-theme' ),
        'insert_into_item'      => __( 'Insert into testimonial', 'the-towing-theme' ),
        'uploaded_to_this_item' => __( 'Uploaded to this testimonial', 'the-towing-theme' ),
        'items_list'            => __( 'testimonial list', 'the-towing-theme' ),
        'items_list_navigation' => __( 'testimonial list navigation', 'the-towing-theme' ),
        'filter_items_list'     => __( 'Filter testimonial list', 'the-towing-theme' ),
    );
    $args = array(
        'label'                 => __( 'Testimonials', 'the-towing-theme' ),
        'description'           => __( 'Testimonial Description', 'the-towing-theme' ),
        'labels'                => $labels,
        'supports'              => array('title' ),
        'taxonomies'            => array(),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 22,
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => false,
        'exclude_from_search'   => true,
        'publicly_queryable'    => true,
        'menu_icon'             => 'dashicons-awards',
        'capability_type'       => 'post',
    );
    register_post_type( 'testimonials', $args );
}
add_action( 'init', 'testimonials_post_type', 0 );

