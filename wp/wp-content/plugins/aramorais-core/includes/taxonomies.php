<?php

if (!defined('ABSPATH')) exit;

function aramorais_register_taxonomies() {

    // Categoria de Serviços
    register_taxonomy('service_category', 'service', [
        'labels' => [
            'name' => 'Categorias de Serviço',
            'singular_name' => 'Categoria de Serviço'
        ],
        'hierarchical' => true,
        'public' => true,
        'rewrite' => ['slug' => 'categoria-servico']
    ]);

    // Categoria de Portfólio
    register_taxonomy('portfolio_category', 'portfolio', [
        'labels' => [
            'name' => 'Categorias de Portfólio',
            'singular_name' => 'Categoria de Portfólio'
        ],
        'hierarchical' => true,
        'public' => true,
        'rewrite' => ['slug' => 'categoria-portfolio']
    ]);
}

add_action('init', 'aramorais_register_taxonomies');
