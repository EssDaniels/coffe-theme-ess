<?php

if (!function_exists('ess_theme_setup')) {

    function ess_theme_setup()
    {
        register_nav_menus([
            'main_menu' => __('Główne Menu', 'wpess'),
            'secondary_menu' => __('Social Menu', 'wpess'),
            'extra_menu' => __('Ekstra Menu', 'wpess'),
            'mark_menu' => __('Marka', 'wpess')
        ]);
    }
}

add_action('after_setup_theme', 'ess_theme_setup');
