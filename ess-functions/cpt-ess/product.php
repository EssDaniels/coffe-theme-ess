<?php

add_action('init', function () {
    /**
     * Register custom post type - Product
     */
    $labels = array(
        'name'                  => _x('Produkty', 'ess'),
        'singular_name'         => _x('Produkt', 'ess'),
        'all_items'             => __('Pokaż wszystkie', 'ess'),
        'add_new'               => __('Dodaj nowy', 'ess')
    );
    $rewrite = array(
        'slug'                  => __('product-ess', 'ess_slugs'),
        'with_front'            => false
    );
    $args = array(
        'labels'                => $labels,
        'supports'              => array('title', 'editor', 'thumbnail'),
        'hierarchical'          => true,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'show_in_rest'             => false,
        'menu_position'         => 25,
        'menu_icon'             => 'dashicons-book',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => false,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'rewrite'               => $rewrite,
        'capability_type'       => 'post',
    );
    register_post_type('product-ess', $args);

    // Create taxonomy

    $labels = array(
        'name'                       => _x('Kategorie', 'Taxonomy General Name', 'ess'),
        'singular_name'              => _x('Kategorie', 'Taxonomy Singular Name', 'ess'),
        'menu_name'                  => __('Kategorie', 'ess'),
        'all_items'                  => __('Kategorie', 'ess'),

    );
    $rewrite = array(
        'slug'                       => __('product-ess', 'ess_slugs'),
        'with_front'                 => true,
        'hierarchical'               => true
    );
    $args = array(
        'labels'                    => $labels,
        'hierarchical'              => true,
        'public'                    => true,
        'show_ui'                   => true,
        'show_admin_column'         => true,
        'show_in_nav_menus'         => true,
        'show_in_rest'                 => true,
        'rewrite'                   => $rewrite
    );
    register_taxonomy('product-ess', 'product-ess', $args);
}, 0);
