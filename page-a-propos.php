<?php get_header(); ?>
	<main class="site-content site-width-content">
		<?php
		if (have_posts()) {
			while (have_posts()) {
				the_post();
				the_title('<h1>', '</h1>');
				the_content();
			}
		}
		$postes = new WP_Query([
			'post_type' => 'poste',
			'posts_per_page' => -1,
			'order_by' => 'date',
			'order' => 'asc'
		]); ?>
		<h2>Mon parcours</h2>
			<div class="timeline">
				<?php
				if ( $postes->have_posts() ) {
					while ( $postes->have_posts() ) {
						$postes->the_post();
						get_template_part( 'template_parts/poste-entry' );
					}
				} else {
					echo "Impossible de charger le parcours!";
				} ?>
			</div>
	</main>
<?php get_footer(); ?>
