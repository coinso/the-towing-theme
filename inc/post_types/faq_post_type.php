<?php
/**
 * Created by PhpStorm.
 * User: ido
 * Date: 1/10/2017
 * Time: 9:30 AM
 */


function faq_post_type(){
    $labels = array(
        'name' => _x('faq items', 'Post Type General Name', 'coinso_towing_theme'),
        'singular_name' => _x('faq Item', 'Post Type Singular Name', 'coinso_towing_theme'),
        'menu_name' => __('FAQ', 'coinso_towing_theme'),
        'name_admin_bar' => __('faq', 'coinso_towing_theme'),
        'archives' => __('faq items Archives', 'coinso_towing_theme'),
        'parent_item_colon' => __('Parent Item:', 'coinso_towing_theme'),
        'all_items' => __('All faq items', 'coinso_towing_theme'),
        'add_new_item' => __('Add New faq Item', 'coinso_towing_theme'),
        'add_new' => __('Add faq Item', 'coinso_towing_theme'),
        'new_item' => __('New faq Item', 'coinso_towing_theme'),
        'edit_item' => __('Edit faq Item', 'coinso_towing_theme'),
        'update_item' => __('Update faq Item', 'coinso_towing_theme'),
        'view_item' => __('View faq Item', 'coinso_towing_theme'),
        'search_items' => __('Search faq Item', 'coinso_towing_theme'),
        'not_found' => __('faq Item Not found', 'coinso_towing_theme'),
        'not_found_in_trash' => __('faq Item Not found in Trash', 'coinso_towing_theme'),
        'featured_image' => __('Featured Image', 'coinso_towing_theme'),
        'set_featured_image' => __('Set featured image', 'coinso_towing_theme'),
        'remove_featured_image' => __('Remove featured image', 'coinso_towing_theme'),
        'use_featured_image' => __('Use as featured image', 'coinso_towing_theme'),
        'uploaded_to_this_item' => __('Uploaded to this item', 'coinso_towing_theme'),
        'items_list' => __('faq items list', 'coinso_towing_theme'),
        'items_list_navigation' => __('faq items list navigation', 'coinso_towing_theme'),
        'filter_items_list' => __('Filter faq items list', 'coinso_towing_theme'),
    );
    $args = array(
        'label' => __('FAQ', 'coinso_towing_theme'),
        'description' => __('FAQ Description', 'coinso_towing_theme'),
        'labels' => $labels,
        'supports' => array('title'),
        'taxonomies' => array(),
        'hierarchical' => false,
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 25,
        'show_in_admin_bar' => true,
        'show_in_nav_menus' => true,
        'can_export' => true,
        'has_archive' => false,
        'exclude_from_search' => false,
        'publicly_queryable' => true,
        'menu_icon' => 'dashicons-welcome-learn-more',
        'capability_type' => 'post',
    );
    register_post_type('faq items', $args);
}
add_action('init', 'faq_post_type', 0);