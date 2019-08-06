<!-- author: Tommy Blouin - Boudreau -->
<?php $lienRacine = "" . get_site_url() . "/wp-content/themes/pixweb/";  ?>

<?php /*Template name: Equipe */
get_header();
//echo "page-equipe.php"; ?>
<?php // div d'entête ?>


</div>




    <?php
    //Gestion des largeurs des sidebar et du contenu
    switch(true){
        case is_active_sidebar("gauche") && is_active_sidebar("droite"):
            //Si les deux sidebars sont utilisées
            $arrWidths = ["25", "50", "25"];
            break;
        case is_active_sidebar("gauche") && is_active_sidebar("droite") == false:
            $arrWidths = ["25", "75", "0"];
            break;
        case is_active_sidebar("gauche") == false && is_active_sidebar("droite"):
            $arrWidths = ["0", "75", "25"];
            break;
        default:
            //Aucune sidebar
            $arrWidths = ["0", "100", "0"];
    }
    ?>


<main class="">
    <div class="equipe__entete">
        <div class="conteneur">
        <?php $page = get_post(); ?>
        <h1 class="equipe__titre"><?= $page->post_title ?></h1>
        <p class="texte--entete"><?= $page->post_content; ?></p>
        </div>
    </div>

        <?php
        $posts = get_posts(array(
            'posts_per_page' => -1,
            'post_type' => 'equipe',
            'post-status' => 'publish',
            'orderby' => 'the_title',
            'order' => 'ASC',
        ));

        if ($posts): ?>
            <div class="equipe__conteneur-page" id="contenu">
                <?php foreach ($posts as $post): ?>
                    <div class="equipe__conteneurBloc">
                        <a href="<?php echo get_permalink($post->ID)?>">
                            <div class="equipe__imgConteneur">
                        <img class= "equipe__image" src="<?= get_field("photo_1"); ?>" width="405" height="405" alt="Photo de <?= $post->post_title; ?>">
                            </div>
                            <div class="equipe__effet-hover">
                                <h2 class="equipe__text-center"><?= $post->post_title; ?></h2>
                            <h3 class="equipe__text-center"><?=get_field("role"); ?></h3>
                            </div>
                        <p><?= $post->post_excerpt; ?></p>

                            <span class="screen-reader-only">Voir la bio.</span>
                        </a>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>
</main>

<?php get_footer(); ?>