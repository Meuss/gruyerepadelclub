<?php

function create_sponsors_post_type()
{
    // Set up the labels for the 'sponsors' post type
    $labels = array(
        'name'                  => _x('Sponsors', 'Post type general name', 'textdomain'),
        'singular_name'         => _x('Sponsor', 'Post type singular name', 'textdomain'),
        'menu_name'             => _x('Sponsors', 'Admin Menu text', 'textdomain'),
        'name_admin_bar'        => _x('Sponsor', 'Add New on Toolbar', 'textdomain'),
        'add_new'               => __('Ajouter un nouveau', 'textdomain'),
        'add_new_item'          => __('Ajouter un nouveau Sponsor', 'textdomain'),
        'new_item'              => __('Nouveau Sponsor', 'textdomain'),
        'edit_item'             => __('Modifier Sponsor', 'textdomain'),
        'view_item'             => __('Voir Sponsor', 'textdomain'),
        'all_items'             => __('Tous les Sponsors', 'textdomain'),
        'search_items'          => __('Rechercher Sponsors', 'textdomain'),
        'parent_item_colon'     => __('Parent Sponsors:', 'textdomain'),
        'not_found'             => __('No sponsors found.', 'textdomain'),
        'not_found_in_trash'    => __('No sponsors found in Trash.', 'textdomain'),
        'featured_image'        => _x('Sponsor Cover Image', 'Overrides the “Featured Image” phrase for this post type.', 'textdomain'),
        'set_featured_image'    => _x('Set cover image', 'Overrides the “Set featured image” phrase for this post type.', 'textdomain'),
        'remove_featured_image' => _x('Remove cover image', 'Overrides the “Remove featured image” phrase for this post type.', 'textdomain'),
        'use_featured_image'    => _x('Use as cover image', 'Overrides the “Use as featured image” phrase for this post type.', 'textdomain'),
        'archives'              => _x('Sponsor archives', 'The post type archive label used in nav menus.', 'textdomain'),
        'insert_into_item'      => _x('Insert into sponsor', 'Overrides the “Insert into post”/“Insert into page” phrase for this post type.', 'textdomain'),
        'uploaded_to_this_item' => _x('Uploaded to this sponsor', 'Overrides the “Uploaded to this post”/“Uploaded to this page” phrase for this post type.', 'textdomain'),
        'filter_items_list'     => _x('Filter sponsors list', 'Screen reader text for the filter links heading on the admin page. Default “Filter posts list”/“Filter pages list”.', 'textdomain'),
        'items_list_navigation' => _x('Sponsors list navigation', 'Screen reader text for the pagination heading on the admin page. Default “Posts list navigation”/“Pages list navigation”.', 'textdomain'),
        'items_list'            => _x('Sponsors list', 'Screen reader text for the items list heading on the admin page. Default “Posts list”/“Pages list”.', 'textdomain'),
    );

    // Set up the arguments for the 'sponsors' post type
    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array('slug' => 'sponsors'),
        'capability_type'    => 'post',
        'has_archive'        => false,
        'hierarchical'       => false,
        'menu_position'      => 10,
        'supports'           => array('title'),
        'menu_icon'          => 'dashicons-money-alt',
    );

    // Register the post type
    register_post_type('sponsors', $args);
}

// Hook into the 'init' action
add_action('init', 'create_sponsors_post_type');
