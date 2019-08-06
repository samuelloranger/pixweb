<!-- Importation du header -->
<?php get_header(); ?>

<div class="nouvelle__entete">
    <div class="nouvelle__enteteZoneInfos conteneur">
        <h1 class="nouvelle__entete__titreNouvelle"><?php the_title(); ?></h1>
        <h2 class="nouvelle__entete__nomPage">Nouvelles</h2>
    </div>
</div>


<main id="nouvelles" class="nouvelle conteneur">

    <article class="nouvelle__article hideme">
        <a class="button button-rouge button-retour" href="<?= get_page_link(466); ?>">Retour aux nouvelles</a>
        <?php get_template_part('content', get_post_format()); ?>

        <div class="button__conteneur">
            <div>
                <?php previous_post_link('%link', 'Nouvelle précédente', false, ''); ?>
            </div>
            <div>
                <?php next_post_link('%link', 'Nouvelle suivante', false, ''); ?>
            </div>
        </div>
    </article>
</main>

<!-- Importation du footer -->
<?php get_footer(); ?>