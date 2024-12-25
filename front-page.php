<?php get_header(); ?>

<div class="hero-header">
    <div class="hero-header__filter">
        <h1 class="hero-header__titre">Créations numériques</h1>
    </div>
    <video src="<?= get_template_directory_uri().'/assets/video/heroheader_251224.webm'; ?>" class="hero-header__video" autoplay loop muted></video>
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
