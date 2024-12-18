<?php get_header(); ?>

<div class="hero-header">

</div>

<main class="site-content site-width-content">
    <?php
    	if (have_posts()) {
            while (have_posts()) {
                the_post();
	            the_content();
            }
        }
    ?>
</main>

<?php get_footer(); ?>
