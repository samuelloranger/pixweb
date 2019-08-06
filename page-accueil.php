<?php /*Template name: Accueil*/

$lienRacine = "" . get_site_url() . "/wp-content/themes/pixweb/";

get_header(); ?>

<!-- Author: Samuel Loranger -->

<div class="accueil__en-tete">
    <div class="accueil__en-tete__flexFix">
        <div class="accueil__en-tete__imgfix">
            <img class="accueil__en-tete__ampoule" src="<?php echo $lienRacine; ?>images/icone-ampoule-blanc.svg" alt="">
        </div>
    </div>

    <div class="accueil__en-tete__titlefix conteneur">
        <h1 class="accueil__en-tete__titre"><?php echo get_theme_mod("charge_titre1", "Titre ligne 1");?></h1>
        <h1 class="accueil__en-tete__titre"><?php echo get_theme_mod("charge_titre2", "Titre ligne 2");?></h1>
    </div>
</div>


<div id="contenu">
    <div class="accueil__realisation conteneur">
        <h2 class="accueil__realisations__titre">Ce que l'on a réalisé</h2>

        <?php
        $posts = get_posts(array(
            'posts_per_page' => -1,
            'post_type' => 'realisations',
            'post-status' => 'publish',
            'orderby' => 'the_title',
            'order' => 'ASC',
        ));

        if ($posts): ?>
            <div class="accueil__realisations__images">
                <?php foreach ($posts as $post): ?>
                    <?php
                        $image = get_field("image_realisation");
                    ?>
                    <a class="accueil__realisations__images__image" href="<?php echo get_permalink($post->ID)?>">
                        <img src="<?= $image['url'] ?>"  alt="<?= $imgage['url'] ?>">
                        <span><?= $post->post_title; ?></span>
                    </a>
                <?php endforeach; ?>
                <div class="accueil__realisations__images__lienRealisations">
                    <div class="accueil__realisations__images__lienRealisations__bgFix">
                        <a href="<?php echo get_page_link(210); ?>">Envie d'en voir plus?</a>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    </div>



    <div class="accueil__equipe">
        <div class="accueil__equipe__backgroundFix">
            <div class="accueil__equipe__contenu conteneur">
                <h2 class="accueil__equipe__titre"><?php echo get_theme_mod("charge_titre3", "Titre page");?></h2>
                <a class="btnCarre" href="<?php echo get_theme_mod("charge_bouton1_lien", "");?>"><?php echo get_theme_mod("charge_bouton1", "Texte pour lien page");?></a>
            </div>
        </div>
    </div>



    <div id="nouvelles" class="accueil__articles conteneur">
        <h2 class="accueil__articles__titre">Ce que l’on raconte</h2>
        <?php
        $posts = get_posts(array(
            'posts per page' => -1,
            'post_type' => 'nouvelles',
            'post_status' => 'the_title',
            'orderby' => 'the_title',
            'order' => 'ASC',
        ));

        if ($posts):
            foreach($posts as $post):?>

                <div class="accueil__articles__article">
                    <?php
                        $image = get_field('image_nouvelle');
                    ?>

                    <div class="accueil__articles__article__image">
                        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                    </div>

                    <div class="accueil__articles__article__contenu">
                        <h3><a href="<?php echo $post -> guid;?>"><?= $post -> post_title;?></a></h3>
                        <p class=""><?= get_field("texte_nouvelle");?></p>

                        <a class="accueil__articles__article__contenu__lien button button-rouge" href="<?php echo $post -> guid;?>">Lire la nouvelle</a>
                    </div>

                </div>
            <?php endforeach; ?>
        <?php endif; ?>

        <div class="accueil__articles__btnLien">
            <a class="button button-violet" href="<?= get_page_link(466);?>">Voir toutes nos nouvelles</a>
        </div>
    </div>

<!-- Importation du footer -->
<?php get_footer(); ?>
