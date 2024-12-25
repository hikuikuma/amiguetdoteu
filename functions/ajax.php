<?php

function amiguetdoteu_filter_projects() {
	// Security check
	if (
		!isset( $_REQUEST['nonce'] ) ||
		!wp_verify_nonce( $_REQUEST['nonce'], 'amiguetdoteu_filter_projects' )
	) {
		wp_send_json_error( "Vous n’avez pas l’autorisation d’effectuer cette action.", 403 );
	}

	// Filter required, is it sent? Is it valid?
	if( !isset( $_POST['filter'] ) ) {
		wp_send_json_error( "Le filtre requis est manquant.", 400 );
	}
	if ( absint( $_POST['paging'] ) < 1 ) {
		wp_send_json_error( "La pagination est erronée", 400 );
	}

	// Retrieving the necessary variables
	$paging = absint( $_POST['paging'] );
	$filter = sanitize_text_field( $_POST['filter'] );

	if( $filter == "clear" ) {
		$ajaxposts = new WP_Query([
			'post_type' => 'projet',
			'posts_per_page' => $paging,
			'order_by' => 'date',
			'order' => 'desc'
		]);
	} else {
		$ajaxposts = new WP_Query([
			'post_type' => 'projet',
			'posts_per_page' => $paging,
			'tax_query' => [
				[
					'taxonomy' => 'expertise',
					'field' => 'slug',
					'terms' => $filter
				]
			],
			'order_by' => 'date',
			'order' => 'desc'
		]);
	}
	$response = '';

	if ($ajaxposts->have_posts()) {
		while ($ajaxposts->have_posts()) {
			$ajaxposts->the_post();
			$response .= get_template_part('template_parts/project-card');
		}
	} else {
		$response = 'empty';
	}

	echo $response;
	exit;
}

add_action('wp_ajax_amiguetdoteu_filter_projects', 'amiguetdoteu_filter_projects');
add_action('wp_ajax_nopriv_amiguetdoteu_filter_projects', 'amiguetdoteu_filter_projects');
