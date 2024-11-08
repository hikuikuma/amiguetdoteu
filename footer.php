<footer class="site-footer">
    <div class="site-footer__grid">
        <div class="site-footer__infos">
            <h2 class="smaller">Lionel Amiguet</h2>
            <p>Développeur Wordpress et créateur numérique</p>
        </div>
        <div class="site-footer__nav-projects">
            <h2 class="menu-title smaller">Mes projets</h2>
            <?php wp_nav_menu( array( 'menu_class' => 'menu menu-footer', 'container' => false, 'theme_location' => 'footer-projects' ) ); ?>
        </div>

        <div class="site-footer__nav-contact">
            <h2 class="menu-title smaller">Me contacter</h2>
	        <?php wp_nav_menu( array( 'menu_class' => 'menu menu-footer', 'container' => false, 'theme_location' => 'footer-contact' ) ); ?>
        </div>


        <div class="site-footer__legal">
			<p>Tous droits réservés 2024 - Lionel Amiguet</p>
        </div>
	    <?php wp_nav_menu( array( 'menu_class' => 'menu menu-footer','container_class' => 'site-footer__nav-legal', 'theme_location' => 'footer-legal' ) ); ?>
    </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>