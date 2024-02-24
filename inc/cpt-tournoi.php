<?php

function cptui_register_my_cpts_tournoi()
{

    /**
     * Post Type: Tournois.
     */

    $labels = [
        "name" => esc_html__("Tournois", "textdomain"),
        "singular_name" => esc_html__("Tournoi", "textdomain"),
        "menu_name" => esc_html__("Tournois", "textdomain"),
        "all_items" => esc_html__("Tous les Tournois", "textdomain"),
        "add_new" => esc_html__("Ajouter nouveau", "textdomain"),
        "add_new_item" => esc_html__("Ajouter nouveau Tournoi", "textdomain"),
        "edit_item" => esc_html__("Modifier Tournoi", "textdomain"),
        "new_item" => esc_html__("Nouveau Tournoi", "textdomain"),
        "view_item" => esc_html__("Voir Tournoi", "textdomain"),
        "view_items" => esc_html__("Voir Tournois", "textdomain"),
        "search_items" => esc_html__("Rechercher Tournois", "textdomain"),
        "not_found" => esc_html__("Pas de Tournois trouvé", "textdomain"),
        "not_found_in_trash" => esc_html__("No Tournois found in trash", "textdomain"),
        "parent" => esc_html__("Parent Tournoi:", "textdomain"),
        "featured_image" => esc_html__("Featured image for this Tournoi", "textdomain"),
        "set_featured_image" => esc_html__("Set featured image for this Tournoi", "textdomain"),
        "remove_featured_image" => esc_html__("Remove featured image for this Tournoi", "textdomain"),
        "use_featured_image" => esc_html__("Use as featured image for this Tournoi", "textdomain"),
        "archives" => esc_html__("Tournoi archives", "textdomain"),
        "insert_into_item" => esc_html__("Insert into Tournoi", "textdomain"),
        "uploaded_to_this_item" => esc_html__("Upload to this Tournoi", "textdomain"),
        "filter_items_list" => esc_html__("Filter Tournois list", "textdomain"),
        "items_list_navigation" => esc_html__("Tournois list navigation", "textdomain"),
        "items_list" => esc_html__("Tournois list", "textdomain"),
        "attributes" => esc_html__("Tournois attributes", "textdomain"),
        "name_admin_bar" => esc_html__("Tournoi", "textdomain"),
        "item_published" => esc_html__("Tournoi published", "textdomain"),
        "item_published_privately" => esc_html__("Tournoi published privately.", "textdomain"),
        "item_reverted_to_draft" => esc_html__("Tournoi reverted to draft.", "textdomain"),
        "item_trashed" => esc_html__("Tournoi trashed.", "textdomain"),
        "item_scheduled" => esc_html__("Tournoi scheduled", "textdomain"),
        "item_updated" => esc_html__("Tournoi updated.", "textdomain"),
        "parent_item_colon" => esc_html__("Parent Tournoi:", "textdomain"),
    ];

    $args = [
        "label" => esc_html__("Tournois", "textdomain"),
        "labels" => $labels,
        "description" => "",
        "public" => true,
        "publicly_queryable" => true,
        "show_ui" => true,
        "show_in_rest" => true,
        "rest_base" => "",
        "rest_controller_class" => "WP_REST_Posts_Controller",
        "rest_namespace" => "wp/v2",
        "has_archive" => false,
        "show_in_menu" => true,
        "show_in_nav_menus" => true,
        "delete_with_user" => false,
        "exclude_from_search" => false,
        "capability_type" => "post",
        "map_meta_cap" => true,
        "hierarchical" => false,
        "can_export" => false,
        "rewrite" => ["slug" => "tournoi", "with_front" => true],
        "query_var" => true,
        "menu_position" => 10,
        "menu_icon" => "dashicons-calendar-alt",
        "supports" => ["title", "editor", "thumbnail"],
        "show_in_graphql" => false,
    ];

    register_post_type("tournoi", $args);
}

add_action('init', 'cptui_register_my_cpts_tournoi');
