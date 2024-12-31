<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div class="site-pre-header">
    <a href="<?= site_url().'/contact'; ?>" class="small">Contact</a>
</div>
<header class="site-header">
    <div class="site-header__content">
        <a href="<?= get_option('home'); ?>" class="site-identity">
            <span class="site-identity__logo"></span>
            <span class="site-identity__title"><?= get_bloginfo('name'); ?></span>
            <span class="site-identity__description"><?= get_bloginfo('description'); ?></span>
        </a>

        <?php wp_nav_menu( array( 'container' => 'nav', 'container_class' => 'navbar', 'container_aria_label' => 'Navigation', 'theme_location' => 'header-navbar' ) ); ?>
    </div>
</header>