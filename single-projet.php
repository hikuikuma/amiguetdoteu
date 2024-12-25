<?php get_header(); ?>

	<main class="site-content site-width-content">
		<?php
		/* Start the Loop */
		while ( have_posts() ) : the_post(); ?>

            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	            <?php the_title('<h1>', '</h1>'); ?>
                <h2 class="projet__subtitle">Projet en bref</h2>
                <div class="projet__content">
                    <div class="projet__content__bref">
                        <?php echo sprintf('<p>%s</p>', get_field('en_bref')); ?>
                    </div>
                    <div class="projet__content__infos">
                        <?php
                            $contexte = get_term_field('slug', get_field('contexte'));
                            switch( $contexte ) {
                                case 'formation':
                                    echo '<span class="projet__infos__meta">Dans le cadre d\'une formation</span>';
                                    break;
                                case 'interne':
                                    echo '<span class="projet__infos__meta">Projet interne</span>';
                                    break;
                                case 'client': default:
                                    $domaines_tag = get_tax_label('domaine', get_client_id($post->ID));
                                    echo sprintf('<span class="projet__infos__label">Client</span><span class="projet__infos__value">%s</span>', get_client_name($post->ID));
                                    echo sprintf('<span class="projet__infos__label">%s</span><span class="projet__infos__value">%s</span>', $domaines_tag, get_client_domaines_list($post->ID));
                            }
                        ?>
                        <span class="projet__infos__label">Année</span><span class="projet__infos__value"><?= get_the_date('Y'); ?></span>
                        <span class="projet__infos__label"><?= get_tax_label('expertise', $post->ID); ?></span><span class="projet__infos__value"><?= get_project_expertises_list($post->ID); ?></span>
                        <?php if(get_field('url_project') !== "") echo sprintf('<span class="projet__infos__meta"><a href="%s" target="_blank" class="link__out">Voir la réalisation</a></span>',get_field('url_project')); ?>
                    </div>
                </div>
                <div class="projet__thumbnail">
		            <?php has_post_thumbnail() ? the_post_thumbnail('', ['class' => 'projet__thumbnail__image']) : null; ?>
                </div>
                <h2 class="projet__subtitle">Ce que j'ai réalisé</h2>
                <div class="projet__texte"><?= get_field('realisations'); ?></div>
                <div class="projet__realisations">
	                <?php if(get_field('galerie')) {
		                foreach(get_field('galerie') as $image) {
			                echo sprintf('<span class="projet__realisations__galerie"><img src="%s" class="projet__realisations__image" /></span>', $image['sizes']['medium_large']);
		                }
	                } ?>
                </div>



            </article>

		<?php endwhile; // End of the loop. ?>
	</main>

<?php get_footer(); ?>