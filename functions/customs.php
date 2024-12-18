<?php
function get_term_name($postid, $taxonomy) {
	$term_obj_list = get_the_terms( $postid, $taxonomy );
	$term_name_array = wp_list_pluck( $term_obj_list, 'name' );
	return $term_name_array[array_key_first($term_name_array)];
}

function the_term_name($postid, $taxonomy) {
	echo get_term_name($postid, $taxonomy);
}

function get_tax_label($taxonomy_name, $post_id) {
	$taxonomy = get_taxonomy($taxonomy_name);
	$entries = get_field($taxonomy_name, $post_id);
	return (count($entries) > 1) ? $taxonomy->labels->name : $taxonomy->labels->singular_name;
}

function get_client_post($projectID) {
	return get_field('client', $projectID)[0];
}

function get_client_id($projectID) {
	$client = get_field('client', $projectID)[0];
	return $client->ID;
}

function get_client_name($projectID) {
	$client = get_field('client', $projectID)[0];
	return $client->post_title;
}

function get_client_domaines($projectID) {
	$client = get_field('client', $projectID)[0];
	return get_field('domaine', $client->ID);
}

function get_client_domaines_list($projectID) {
	return implode(', ', wp_list_pluck(get_client_domaines($projectID) , 'name' ));
}

function get_project_expertises($projectID) {
	return [get_field('expertise', $projectID), count(get_field('expertise', $projectID))];
}
function get_project_expertises_list($projectID) {
	return implode(', ', wp_list_pluck(get_project_expertises($projectID)[0] , 'name' ));
}