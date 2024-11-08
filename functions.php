<?php

function amiguetdoteu_init() {
    add_theme_support('title-tag');

    register_nav_menus(
        array(
            'header-navbar' => __('Header Menu'),
            'footer-projects' => __('Footer Projects'),
	        'footer-contact' => __('Footer Contact'),
	        'footer-legal' => __('Footer Legal')
        )
    );
}

function amiguetdoteu_enqueue_scripts() {
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Urbanist:ital,wght@0,100..900;1,100..900&display=swap', '', '20241107');
    wp_enqueue_style('amiguetdoteu', get_template_directory_uri().'/style.css', 'google-fonts', time());
}

add_action('init', 'amiguetdoteu_init');
add_action('wp_enqueue_scripts', 'amiguetdoteu_enqueue_scripts');