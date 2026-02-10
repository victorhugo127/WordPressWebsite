<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<header class="site-header">
    <div class="header-container">

        <div class="logo">
            <a href="<?php echo home_url(); ?>">
                <?php bloginfo('name'); ?>
            </a>
        </div>

        <nav class="main-nav">
            <?php
            wp_nav_menu([
                'theme_location' => 'main_menu',
                'container' => false,
                'menu_class' => 'nav-menu'
            ]);
            ?>
        </nav>
        <form role="search" method="get" action="<?php echo home_url('/'); ?>">
    <input type="search" name="s" placeholder="Buscar..." />
    <button type="submit">Buscar</button>    
      
    </div>
</header>

