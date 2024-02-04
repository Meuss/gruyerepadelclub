<?php
// Add SVG to allowed mime types
function cc_mime_types($mimes)
{
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');

// Rename Posts to News
function rename_posts_to_news_admin_menu()
{
    global $menu;
    foreach ($menu as $key => $value) {
        if ($value[0] === 'Articles') {
            $menu[$key][0] = 'News';
            break;
        }
    }
}
add_action('admin_menu', 'rename_posts_to_news_admin_menu');

// Menu
function gruyerepadel_menu()
{
    register_nav_menus([
        'primary' => "Menu principal",
    ]);
}
add_action('init', 'gruyerepadel_menu');

// Options page
if (function_exists('acf_add_options_page')) {
    acf_add_options_page([
        'page_title' => 'Options du site',
        'menu_title' => 'Options',
        'menu_slug' => 'options',
        'capability' => 'edit_posts',
        'position' => 20,
        'redirect' => false,
    ]);
}

// Remove Categories and Tags from Posts
function remove_categories_and_tags()
{
    unregister_taxonomy_for_object_type('category', 'post');
    unregister_taxonomy_for_object_type('post_tag', 'post');
}

add_action('init', 'remove_categories_and_tags');
