<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header class="site-header">
    <div class="site-branding">
        <a href="<?php echo esc_url(home_url('/')); ?>" rel="home">Catalyst AI</a>
    </div>
    <nav class="main-navigation">
        <?php
        wp_nav_menu(array(
            'theme_location' => 'primary_menu',
            'menu_id'        => 'primary-menu',
        ));
        ?>
    </nav>
</header>

<main class="site-content">