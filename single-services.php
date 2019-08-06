<!-- Appel du header -->
<?php get_header(); ?>

<main id="articles">
    <section class="services__entete servicesFiche__entete">
        <div class="conteneur">
            <h1 class="services__titre servicesFiche__titre"><?php the_title(); ?></h1>
            <h2 class="texte-entete">Services</h2>
        </div>
    </section>

    <div id="contenu" class="servicesFiche__conteneur">
        <a href="<?php echo get_permalink(181) ?>" class="button button-rouge button-retour ">Retour aux services</a>

        <span class="pixel services__pixel03">&nbsp;</span>
        <article>
            <?php get_template_part('content', get_post_format()); ?>
        </article>

        <div class="services__blocContact servicesFiche__blocContact">
            <h3 class="services__blocContactTitre h4">Contactez-nous</h3>
            <p>Écris un message à <a href="mailto:quebec@pixweb.ca" class="texte-blanc">quebec@pixweb.ca</a></p>
        </div>

        <div class="button__conteneur">
            <div>
                <?php previous_post_link('%link', 'Précédent', false, ''); ?>
            </div>
            <div>
                <?php next_post_link('%link', 'Suivant', false, ''); ?>
            </div>
        </div>

    </div>

    <section class="voir-realisations">
        <h2 class="voir-realisations__titre">Ce que l'on a réalisé</h2>
        <a href="<?php echo get_permalink(210) ?>" class="button button-blanc button-realisations">Voir les
            réalisations</a>
        <div class="voir-realisations__conteneur conteneur">
            <?php
            $examplePost = get_post(265);
            echo apply_filters('the_content', $examplePost->post_content); ?>

        </div>
        <p class="voir-realisations__calque">&nbsp;</p>
    </section>


</main>
<!-- Appel du footer -->
<?php get_footer(); ?>




