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
        <?php get_template_part('template_parts/career'); ?>
	</main>
<?php get_footer(); ?>
