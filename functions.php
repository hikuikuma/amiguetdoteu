<?php
get_template_part('functions/admin');
get_template_part('functions/customs');
get_template_part('functions/ajax');

function amiguetdoteu_init() {
    add_theme_support('title-tag');
	add_theme_support('post-thumbnails');

    register_nav_menus(
        array(
            'header-navbar' => __('Header Menu'),
            'footer-open' => __('Footer Open Source'),
	        'footer-social' => __('Footer Réseaux'),
	        'footer-legal' => __('Footer Legal')
        )
    );
}

function amiguetdoteu_enqueue_scripts() {
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Urbanist:ital,wght@0,100..900;1,100..900&display=swap', '', '20241107');
    wp_enqueue_style('amiguetdoteu', get_template_directory_uri().'/style.css', 'google-fonts', time());
	wp_enqueue_script('filters-scripts', get_template_directory_uri().'/js/filters.js', array('jquery'), '20241117', true);
}

add_action('init', 'amiguetdoteu_init');
add_action('wp_enqueue_scripts', 'amiguetdoteu_enqueue_scripts');
