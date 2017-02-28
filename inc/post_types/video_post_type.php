<?php
/**
 * Created by PhpStorm.
 * User: ido
 * Date: 1/10/2017
 * Time: 9:30 AM
 */


function video_post_type(){
    $labels = array(
        'name' => _x('videos', 'coinso_towing_theme'),
        'singular_name' => _x('video', 'coinso_towing_theme'),
        'menu_name' => __('Video Gallery', 'coinso_towing_theme'),
        'name_admin_bar' => __('video gallery', 'coinso_towing_theme'),
        'archives' => __('video  Archives', 'coinso_towing_theme'),
        'parent_item_colon' => __('Parent Item:', 'coinso_towing_theme'),
        'all_items' => __('All videos', 'coinso_towing_theme'),
        'add_new_item' => __('Add New video', 'coinso_towing_theme'),
        'add_new' => __('Add video', 'coinso_towing_theme'),
        'new_item' => __('New video', 'coinso_towing_theme'),
        'edit_item' => __('Edit video', 'coinso_towing_theme'),
        'update_item' => __('Update video', 'coinso_towing_theme'),
        'view_item' => __('View video', 'coinso_towing_theme'),
        'search_items' => __('Search a video', 'coinso_towing_theme'),
        'not_found' => __('video Not found', 'coinso_towing_theme'),
        'not_found_in_trash' => __('video Not found in Trash', 'coinso_towing_theme'),
        'featured_image' => __('Featured Image', 'coinso_towing_theme'),
        'set_featured_image' => __('Set featured image', 'coinso_towing_theme'),
        'remove_featured_image' => __('Remove featured image', 'coinso_towing_theme'),
        'use_featured_image' => __('Use as featured image', 'coinso_towing_theme'),
        'uploaded_to_this_item' => __('Uploaded to this item', 'coinso_towing_theme'),
        'items_list' => __('videos list', 'coinso_towing_theme'),
        'items_list_navigation' => __('videos list navigation', 'coinso_towing_theme'),
        'filter_items_list' => __('Filter videos list', 'coinso_towing_theme'),
    );
    $args = array(
        'label' => __('video Gallery', 'coinso_towing_theme'),
        'description' => __('video Gallery Description', 'coinso_towing_theme'),
        'labels' => $labels,
        'supports' => array('title'),
        'taxonomies' => array('category'),
        'hierarchical' => false,
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 24,
        'show_in_admin_bar' => true,
        'show_in_nav_menus' => true,
        'can_export' => true,
        'has_archive' => false,
        'exclude_from_search' => false,
        'publicly_queryable' => true,
        'menu_icon' => 'dashicons-video-alt3',
        'capability_type' => 'post',
    );
    register_post_type('videos', $args);
}
add_action('init', 'video_post_type', 0);