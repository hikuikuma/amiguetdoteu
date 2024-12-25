<?php
	echo '<div class="timeline-entry"><div class="timeline-entry__left">';
	$date_debut = get_french_date( get_field('date_debut') );
	$date_fin = get_french_date( get_field('date_fin') );
	if (empty(get_field('date_fin')) || get_field('date_fin') > date('Ym')) {
		echo sprintf('<span>Depuis %s</span>', $date_debut);
	} else {
		echo sprintf('<span>%s - %s</span>', $date_debut, $date_fin );
	}
	$society = get_the_title();
	$society = str_replace(" | ", "<br />", $society);
	echo sprintf('<h3 class="timeline-entry__society">%s</h3>', $society );
	echo sprintf('<span class="timeline-entry__poste-title">%s</span>', get_field('poste_title'));
	echo '</div>';
	echo '<div class="timeline-entry__dot"><span class="timeline-dot"></span></div>';
	echo '<div class="timeline-entry__right">';
	echo get_field('liste_taches');
	echo '</div></div>';
