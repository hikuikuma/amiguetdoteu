<?php get_header(); ?>

	<main class="site-content site-width-content">
		<?php
		/* Start the Loop */
		while ( have_posts() ) : the_post(); ?>

            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                <div class="projet__content">

                    <div class="projet__content__presentation">
	                    <?php the_title('<h2 class="projet__content__title">', '</h2>'); ?>
	                    <?php the_content(); ?>
                    </div>
                    <div class="projet__content__thumbnail">
                        <?php has_post_thumbnail() ? the_post_thumbnail('', ['class' => 'photo__content__thumbnail__image']) : null; ?>
                    </div>
                    <div class="projet__content__infos">
                        <?php
                            switch( get_terms_name($post->ID, 'projet-type') ) {
                                case 'Formation':
                                    echo "<p class=\"projet__content__tags\">Dans le cadre d'une formation</p>";
                                    break;
                                case 'Interne':
                                    echo "<p class=\"projet__content__tags\">Projet interne</p>";
                                    break;
                                case 'Externe': default:
	                                echo "<p class=\"projet__content__tags\">Client : </p>";
    	                            echo "<p class=\"projet__content__tags\">Domaine : </p>";
                            }
                        ?>
                        <p class="projet__content__tags">Année : </p>
                        <p class="projet__content__tags">Expertise : </p>
                    </div>
                </div>

            </article>

		<?php endwhile; // End of the loop. ?>
	</main>

<?php get_footer(); ?>