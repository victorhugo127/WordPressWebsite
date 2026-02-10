<?php

if (!defined('ABSPATH')) exit;

function aramorais_register_post_types() {

    // SERVICES
    register_post_type('service', [
        'labels' => [
            'name' => 'Services',
            'singular_name' => 'Serviço'
        ],
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-hammer',
        'supports' => ['title', 'editor', 'thumbnail', 'excerpt'],
        'rewrite' => ['slug' => 'servicos']
    ]);

    // PORTFOLIO
    register_post_type('portfolio', [
        'labels' => [
            'name' => 'Portfólio',
            'singular_name' => 'Projeto'
        ],
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-portfolio',
        'supports' => ['title', 'editor', 'thumbnail'],
        'rewrite' => ['slug' => 'portfolio']
    ]);
}

add_action('init', 'aramorais_register_post_types');

