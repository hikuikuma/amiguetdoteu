<?php

function amiguetdoteu_init() {
    add_theme_support('title-tag');
	add_theme_support('post-thumbnails');

    register_nav_menus(
        array(
            'header-navbar' => __('Header Menu'),
            'footer-projects' => __('Footer Projects'),
	        'footer-contact' => __('Footer Contact'),
	        'footer-legal' => __('Footer Legal')
        )
    );
}

function amiguetdoteu_admin_init() {
	remove_post_type_support('projet', 'editor');
}

function amiguetdoteu_enqueue_scripts() {
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Urbanist:ital,wght@0,100..900;1,100..900&display=swap', '', '20241107');
    wp_enqueue_style('amiguetdoteu', get_template_directory_uri().'/style.css', 'google-fonts', time());
}

function set_custom_edit_projet_columns($columns){
	$columns['projet-type'] = 'Type de projet';
	return $columns;
}

function custom_projet_column($column, $post_id) {
	switch ( $column ) {
		case 'projet-type':
			$terms = get_the_term_list( $post_id, 'projet-type', '', ',', '' );
			if ( is_string( $terms ) ) {
				echo $terms;
			} else {
				echo get_taxonomy_labels( get_taxonomy( 'projet-type' ) )->no_terms;
			}
			break;
	}
}

function get_terms_name($postid, $taxonomy) {
	$term_name_array = wp_list_pluck( get_the_terms( $postid, $taxonomy ), 'name' );
	return $term_name_array[array_key_first($term_name_array)];
}

add_action('init', 'amiguetdoteu_init');
add_action('admin_init', 'amiguetdoteu_admin_init');
add_action('wp_enqueue_scripts', 'amiguetdoteu_enqueue_scripts');

add_filter("manage_projet_posts_columns", 'set_custom_edit_projet_columns');
add_action("manage_projet_posts_custom_column", 'custom_projet_column', 10, 2);
