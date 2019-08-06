<?php /*Template name: Réalisations*/

get_header(); ?>

<main class="">

    <div class="realisations__entete">
        <div class="conteneur">
            <?php $page = get_post(); ?>
            <h1 class="services__titre realisations__entete__titre"><?= $page->post_title ?></h1>
            <p class="texte--entete realisations_texte-entete"><?= $page->post_content; ?></p>
        </div>
    </div>


    <?php
    $posts = get_posts(array(
        'posts_per_page' => -1,
        'post_type' => 'realisations',
        'post-status' => 'publish',
        'orderby' => 'the_title',
        'order' => 'ASC',
    ));

    if ($posts): ?>



        <div class="realisations_conteneur" id="contenu">
            <span class="pixel realisations_pixel1"></span>
            <span class="pixel realisations_pixel2"></span>

            <?php foreach ($posts as $post): ?>
                <div class="realisations_fiche">
                    <?php $imgSingle = get_field("image_realisation"); ?>
                    <img class="realisations_ficheImage-gauche realisations_ficheImage"
                         src="<?= $imgSingle['url'];?>"
                         alt="<?php echo $imgSingle["alt"]; ?>"
                          width="492" height="492">
                <div class="realisations_ficheBlock">
                    <h2 class="realisations_ficheTitre"><?= $post->post_title; ?></h2>
                    <h3 class="realisations_ficheSoustitre"><?= get_field("client"); ?></h3>
                    <p><?= $post->post_excerpt; ?></p>
                    <a class="btnLien" href="<?php echo get_permalink($post->ID)?>">Lire la suite
                        <span class="screen-reader-only">Lire la suite</span>
                    </a>
                 </div>
                </div>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>
</main>

<!-- Importation du footer -->
<?php get_footer(); ?>
