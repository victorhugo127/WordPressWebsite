<?php

add_action('wp_enqueue_scripts', function () {
    wp_enqueue_style(
        'aramorais-main',
        get_stylesheet_directory_uri() . '/assets/css/main.css',
        [],
        filemtime(get_stylesheet_directory() . '/assets/css/main.css')
    );
});

register_nav_menus([
    'main_menu' => 'Menu Principal'
]);
