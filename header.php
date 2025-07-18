<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div class="site-pre-header" role="menubar" aria-label="Moyens de contact">
    <a href="<?= site_url().'/contact'; ?>" class="small" role="menuitem" aria-label="Lien vers le formulaire de contact">Contact</a>
</div>
<header class="site-header" role="banner" aria-label="Haut de page">
    <div class="site-header__content">
        <a href="<?= get_option('home'); ?>" class="site-identity" aria-label="Retour à l'accueil du site">
            <span class="site-identity__logo" role="img" aria-label="Logo de Lionel Amiguet"></span>
            <span class="site-identity__title" role="heading" aria-level="2" aria-label="Nom du site"><?= get_bloginfo('name'); ?></span>
            <span class="site-identity__description" aria-label="Slogan"><?= get_bloginfo('description'); ?></span>
        </a>

        <nav class="navbar" role="navigation" aria-label="Menu principal">
            <div class="navbar__burger">
                <span class="navbar__burger__line"></span>
                <span class="navbar__burger__line"></span>
                <span class="navbar__burger__line"></span>
            </div>
	        <?php wp_nav_menu( array( 'container' => false, 'theme_location' => 'header-navbar', 'menu_id' => 'main-menu', 'menu_class' => 'menu navbar-menu' ) ); ?>
        </nav>
    </div>
</header>