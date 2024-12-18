<?php
function amiguetdoteu_admin_init() {

}
function set_custom_edit_projet_columns($columns){
	$columns['contexte'] = 'Contexte du projet';
	return $columns;
}

function custom_projet_column($column, $post_id) {
	switch ( $column ) {
		case 'contexte':
			$terms = get_the_term_list( $post_id, 'contexte', '', ',', '' );
			if ( is_string( $terms ) ) {
				echo $terms;
			} else {
				echo get_taxonomy_labels( get_taxonomy( 'contexte' ) )->no_terms;
			}
			break;
	}
}


add_action('admin_init', 'amiguetdoteu_admin_init');
add_filter("manage_projet_posts_columns", 'set_custom_edit_projet_columns');
add_action("manage_projet_posts_custom_column", 'custom_projet_column', 10, 2);