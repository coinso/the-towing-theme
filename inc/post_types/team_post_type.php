<?php
/**
 * Created by PhpStorm.
 * User: ido
 * Date: 1/10/2017
 * Time: 9:30 AM
 */


function team_post_type(){
    $labels = array(
        'name' => _x('team members', 'the-towing-theme'),
        'singular_name' => _x('team member',  'the-towing-theme'),
        'menu_name' => __('Team', 'the-towing-theme'),
        'name_admin_bar' => __('Team', 'the-towing-theme'),
        'archives' => __('team members Archives', 'the-towing-theme'),
        'parent_item_colon' => __('Parent Item:', 'the-towing-theme'),
        'all_items' => __('All team members', 'the-towing-theme'),
        'add_new_item' => __('Add New team member', 'the-towing-theme'),
        'add_new' => __('Add team member', 'the-towing-theme'),
        'new_item' => __('New team member', 'the-towing-theme'),
        'edit_item' => __('Edit team member', 'the-towing-theme'),
        'update_item' => __('Update team member', 'the-towing-theme'),
        'view_item' => __('View team member', 'the-towing-theme'),
        'search_items' => __('Search team member', 'the-towing-theme'),
        'not_found' => __('team member Not found', 'the-towing-theme'),
        'not_found_in_trash' => __('team member Not found in Trash', 'the-towing-theme'),
        'featured_image' => __('Featured Image', 'the-towing-theme'),
        'set_featured_image' => __('Set featured image', 'the-towing-theme'),
        'remove_featured_image' => __('Remove featured image', 'the-towing-theme'),
        'use_featured_image' => __('Use as featured image', 'the-towing-theme'),
        'uploaded_to_this_item' => __('Uploaded to this item', 'the-towing-theme'),
        'items_list' => __('team members list', 'the-towing-theme'),
        'items_list_navigation' => __('team members list navigation', 'the-towing-theme'),
        'filter_items_list' => __('Filter team members list', 'the-towing-theme'),
    );
    $args = array(
        'label' => __('Team Members', 'the-towing-theme'),
        'description' => __('Team Description', 'the-towing-theme'),
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
        'menu_icon' => 'dashicons-admin-users',
        'capability_type' => 'post',
    );
    register_post_type('team members', $args);
}
add_action('init', 'team_post_type', 0);