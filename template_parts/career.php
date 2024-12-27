<?php
	$postes = new WP_Query([
		'post_type' => 'poste',
		'posts_per_page' => -1,
		'order_by' => 'date',
		'order' => 'asc'
	]);

	echo '<div class="timeline">';
	if ( $postes->have_posts() ) {
		while ( $postes->have_posts() ) {
			$postes->the_post();
			get_template_part( 'template_parts/poste-entry' );
		}
	} else {
		echo "Impossible de charger le parcours!";
	}
	echo '</div>';

