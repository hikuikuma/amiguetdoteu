<div class="load-screen">
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

<footer class="site-footer">
    <div class="site-footer__grid">
        <div class="site-footer__infos">
            <h2 class="smaller">Lionel Amiguet</h2>
            <p>Développeur Wordpress et créateur numérique</p>
        </div>
        <div class="site-footer__nav-projects">
            <h2 class="menu-title smaller">Contributions</h2>
            <?php wp_nav_menu( array( 'menu_class' => 'menu menu-footer', 'container' => false, 'theme_location' => 'footer-open' ) ); ?>
        </div>

        <div class="site-footer__nav-contact">
            <h2 class="menu-title smaller">Réseautage</h2>
	        <?php wp_nav_menu( array( 'menu_class' => 'menu menu-footer', 'container' => false, 'theme_location' => 'footer-social' ) ); ?>
        </div>


        <div class="site-footer__legal">
			<p>Tous droits réservés 2024 <?php if(date('Y') > 2024) echo '- '.date('Y'); ?></p>
        </div>
	    <?php wp_nav_menu( array( 'menu_class' => 'menu menu-footer','container_class' => 'site-footer__nav-legal', 'theme_location' => 'footer-legal' ) ); ?>
    </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>
