<?php get_header();
$paging = 9;
$totalProjets = wp_count_posts('projet')->publish;
$more = $totalProjets > $paging;
$projets = new WP_Query([
	'post_type' => 'projet',
	'posts_per_page' => $paging,
	'order_by' => 'date',
	'order' => 'desc'
]); ?>

	<main class="site-content site-width-content">
		<h1>De beaux projets</h1>
        <div class="projects-list__filters">
            Filtrer par expertise :
	        <?php $terms = get_terms(['taxonomy' =>"expertise", 'hide_empty' => false]);
            for($i = 0; $i < count($terms); $i++) {
                $term_name = $terms[$i]->name;
                $term_slug = $terms[$i]->slug;
                $ajax_url = admin_url( 'admin-ajax.php' );
                $nonce = wp_create_nonce("amiguetdoteu_filter_projects");
	            echo sprintf('<button class="tag__filter" data-url="%s" data-action="amiguetdoteu_filter_projects" data-nonce="%s" data-filter="%s" data-paging="%u">%s</button>', $ajax_url, $nonce, $term_slug, $paging, $term_name);
            } ?>
        </div>
        <div class="projects-list__items">
	        <?php if($projets->have_posts()) {
		        while ( $projets->have_posts() ) {
			        $projets->the_post();
			        get_template_part( 'template_parts/project-card' );
		        }
	        } else { echo "Pas de projets à afficher!"; }?>
        </div>
	</main>

<?php get_footer(); ?>

<?php if ($more) {/* ?>
    <div class="photos-list__load-more">
        <button class="photos-list__more-button cta"
                data-ajaxurl="<?= admin_url( 'admin-ajax.php' ); ?>"
                data-action="motaphoto_load_more"
                data-nonce="<?= wp_create_nonce('motaphoto_load_more'); ?>"
                data-post-type="photo"
                data-paging="<?= $paging; ?>"
                data-loaded="<?= $paging; ?>"
        >Charger plus</button>
    </div>
<?php */} ?>
