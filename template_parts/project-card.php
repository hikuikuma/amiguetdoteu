<?php
	$year = get_the_date('Y');
	$type = get_project_expertises_list($post->ID);
	$title = get_the_title();
	$contexte = get_field('contexte');
	if(get_term_field('slug', $contexte) == "client"){
		$client = get_client_name($post->ID);
	} else {
		$client = get_term_field('name', $contexte);
	}
	echo sprintf('<div class="project-card"><a class="project-card__link" href="%s"></a>', get_post_permalink());
	has_post_thumbnail() ? the_post_thumbnail('', ['class' => 'project-card__image']) : null;
	echo '<div class="project-card__infos">';
	echo sprintf('<span class="project-card__year">%u - %s</span>', $year, $type);
	echo sprintf('<h3 class="project-card__title">%s</h3>', $title);
	echo sprintf('%s', $client);
	echo '</div></div>';
