<!-- Appel du header -->
<?php get_header();?>

<main id="articles">
    <div class="realisations__entete realisations__entete-single">
        <div class="realisations__enteteTexte conteneur">
            <h1 class="realisations__entete__titre"><?php the_title(); ?></h1>
            <h2 class="texte-entete">Réalisations</h2>
        </div>
    </div>

    <div id="contenu" class="realisations_conteneur realisations_conteneur-single">

        <a href="<?php echo get_permalink(210) ?>" class="button button-rouge button-retour">Retour aux réalisations</a>
        <div class="realisations_fiche realisations_fiche-single">
            <?php $imgSingle = get_field("image_realisation"); ?>
            <img class="realisations_ficheImage-single realisations_ficheImage"
                 src="<?= $imgSingle['url'];?>"
                 alt="<?php echo $imgSingle["alt"]; ?>"
                 width="492" height="492">
            <div class="realisations_ficheBlock realisations_ficheBlock-single">
                <div class="realisations_ficheBlock-singleBg">
                <h2>
                    <?= get_field("client"); ?>
                </h2>

                <article>
                    <?php get_template_part('content', get_post_format()); ?>
                </article>
                </div>
            </div>
            <img class="realisations_ficheImage-single realisations_ficheImage"
                 src="<?= get_field("image_realisation_2"); ?>" width="492" height="492">
            <img class="realisations_ficheImage-single realisations_ficheImage"
                 src="<?= get_field("image_realisation_3"); ?>" width="492" height="492">
        </div>
        <div class="realisations__button__conteneur button__conteneur">
            <div>
                <?php previous_post_link('%link', 'Aller au précédent', false, ''); ?>
            </div>
            <div>
                <?php next_post_link('%link', 'Aller au suivant', false, ''); ?>
            </div>
        </div>
    </div>

</main>
<?php get_footer(); ?>