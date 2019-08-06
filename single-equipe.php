<!-- author: Tommy Blouin - Boudreau -->
<?php get_header();
// echo "single-equipe.php" ?>

<main id="articles">
    <div class="equipeFiche__entete">
        <div class="conteneur">
            <h1 class="equipeFiche__titre"><?=get_field("role"); ?></h1>
            <h2 class="texte--entete">Équipe</h2>
        </div>
    </div>


    <div id="contenu" class="equipeFiche__conteneur">
        <a href="<?php echo get_permalink(293)?>" class="equipebutton equipebutton-rouge equipebutton-retour">Retour à l'équipe</a>
        <div class="equipe__flex">
            <img src="<?= get_field("photo_2"); ?>" width="320" height="320">
            <article class="equipe__article">
                <div class="equipe__BGGris">
                <h2><?php the_title(); ?></h2>
                <?=get_field("biographie"); ?>
                </div>
            </article>
        </div>
        <div class="button__conteneur">
            <div class="equipebuttonP">
                <?php previous_post_link('%link', 'Précédent', false, ''); ?>
            </div>
            <div class="equipebuttonS">
                <?php next_post_link('%link', 'Suivant', false, ''); ?>
            </div>
        </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>