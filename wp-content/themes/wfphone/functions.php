<?php
// Activer le custom background

add_theme_support("custom-background");

// active les images à la une
add_theme_support("post-thumbnails");

function wpphone_menu(){
    register_nav_menu("menu-header", "Menu du haut");
    register_nav_menu("menu-footer", "Menu du bas");
    register_nav_menu("menu-footer-dte", "Menu du bas");

}
add_action("init", "wpphone_menu");

function media_init() { // initialisation

    $labels = array (
        "name" => "Item media",
        "singular_name" => "Item media",
        "menu_name" => "Items media",
        "add_new" => "Ajouter un item media",
        "add_new_item" => "Ajouter un nouveau item media",
        "new_item" => "Ajouter un nouveau item media",
        "edit_item" => "Modifier un item media",
        "view_item" => "Voir le item media",
        "all_items" => "Tous les items media",
        "search_items" => "Rechercher un item media"
    );

    $args = array(
        "label" => "Items media",
        "labels" => $labels,
        // on définit ici les options disponibles dans l'éditeur de notre custom post type : affichage dans ajouter film
        "supports" => array("title", "editor", "thumbnail"), // custum_fields
        // option supplémentaire
        "public" => true,
        //"has_archive" => true, // à ne pas oublier si vous utilisez un modèle d'archive inutile ici
        "menu_icon" => "dashicons-media-video"
    );

    register_post_type("items_media", $args);


}
add_action("init", "media_init" );

