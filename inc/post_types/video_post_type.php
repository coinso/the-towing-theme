<?php
/**
 * Created by PhpStorm.
 * User: ido
 * Date: 1/10/2017
 * Time: 9:30 AM
 */


function video_post_type(){
    $labels = array(
        'name' => _x('videos', 'the-towing-theme'),
        'singular_name' => _x('video', 'the-towing-theme'),
        'menu_name' => __('Video Gallery', 'the-towing-theme'),
        'name_admin_bar' => __('video gallery', 'the-towing-theme'),
        'archives' => __('video  Archives', 'the-towing-theme'),
        'parent_item_colon' => __('Parent Item:', 'the-towing-theme'),
        'all_items' => __('All videos', 'the-towing-theme'),
        'add_new_item' => __('Add New video', 'the-towing-theme'),
        'add_new' => __('Add video', 'the-towing-theme'),
        'new_item' => __('New video', 'the-towing-theme'),
        'edit_item' => __('Edit video', 'the-towing-theme'),
        'update_item' => __('Update video', 'the-towing-theme'),
        'view_item' => __('View video', 'the-towing-theme'),
        'search_items' => __('Search a video', 'the-towing-theme'),
        'not_found' => __('video Not found', 'the-towing-theme'),
        'not_found_in_trash' => __('video Not found in Trash', 'the-towing-theme'),
        'featured_image' => __('Featured Image', 'the-towing-theme'),
        'set_featured_image' => __('Set featured image', 'the-towing-theme'),
        'remove_featured_image' => __('Remove featured image', 'the-towing-theme'),
        'use_featured_image' => __('Use as featured image', 'the-towing-theme'),
        'uploaded_to_this_item' => __('Uploaded to this item', 'the-towing-theme'),
        'items_list' => __('videos list', 'the-towing-theme'),
        'items_list_navigation' => __('videos list navigation', 'the-towing-theme'),
        'filter_items_list' => __('Filter videos list', 'the-towing-theme'),
    );
    $args = array(
        'label' => __('video Gallery', 'the-towing-theme'),
        'description' => __('video Gallery Description', 'the-towing-theme'),
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