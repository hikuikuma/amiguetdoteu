<div class="load-screen" role="figure" aria-label="Chargement de la page">
    <div class="load-screen__loader">
        <div class="load-screen__dot dot1"></div>
        <div class="load-screen__dot dot2"></div>
        <div class="load-screen__dot dot3"></div>
        <div class="load-screen__dot dot4"></div>
        <div class="load-screen__dot dot5"></div>
        <div class="load-screen__dot dot6"></div>
        <div class="load-screen__dot dot7"></div>
        <div class="load-screen__dot dot8"></div>
    </div>
</div>

<footer class="site-footer" role="contentinfo">
    <div class="site-footer__grid">
        <div class="site-footer__infos">
            <h2 class="smaller" aria-label="Nom du site">Lionel Amiguet</h2>
            <p aria-label="Définition de ce que fait Lionel Amiguet">Développeur Wordpress et créateur numérique</p>
        </div>
        <div class="site-footer__nav-projects" role="menu" aria-labelledby="menu-footer-contributions">
            <h2 id="menu-footer-contributions" class="menu-title smaller">Contributions</h2>
            <?php wp_nav_menu( array( 'menu_class' => 'menu menu-footer', 'container' => false, 'theme_location' => 'footer-open' ) ); ?>
        </div>
        <div class="site-footer__nav-contact" role="menu" aria-labelledby="menu-footer-social">
            <h2 id="menu-footer-social" class="menu-title smaller">Réseautage</h2>
	        <?php wp_nav_menu( array( 'menu_class' => 'menu menu-footer', 'container' => false, 'theme_location' => 'footer-social' ) ); ?>
        </div>
        <div class="site-footer__legal">
			<p>Tous droits réservés 2024 <?php if(date('Y') > 2024) echo '- '.date('Y'); ?></p>
	        <?php wp_nav_menu( array( 'menu_class' => 'menu menu-footer','container_class' => 'site-footer__nav-legal', 'theme_location' => 'footer-legal' ) ); ?>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>
