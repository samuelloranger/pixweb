<?php /*Template name: Services */
get_header(); ?>


<!--    Corps de la page -->
<main>
    <div class="services__entete">
        <div class="conteneur">
            <?php $page = get_post(); ?>
            <h1 class="services__titre"><?= $page->post_title ?></h1>
            <p><?= $page->post_content; ?></p>
        </div>
    </div>


    <?php
    $posts = get_posts(array(
        'posts_per_page' => -1,
        'post_type' => 'services',
        'post-status' => 'publish',
        'orderby' => 'the_title',
        'order' => 'ASC',
    ));


    if ($posts): ?>
        <div class="services__conteneur" id="contenu">
            <span class="pixel services__pixel01">&nbsp;</span>
            <?php foreach ($posts as $post): ?>
                <a href="<?php echo get_permalink($post->ID) ?>">
                    <div class="services__conteneurBloc">
                        <?php
                        $imageIcone = get_field("icone");
                        ?>

                        <img src="<?= $imageIcone['url']; ?>" width="100" height="100"
                             alt="<?php echo $imageIcone['alt']; ?>">

                        <h2 class="h3"><?= $post->post_title; ?></h2>
                        <p><?= $post->post_excerpt; ?></p>
                        <i class="icone icone--suivant">
                            <span class="screen-reader-only">Lire la suite</span>
                        </i>
                    </div>
                </a>
            <?php endforeach; ?>
            <span class="pixel services__pixel02">&nbsp;</span>
            <div class="services__blocContact">
                <h3 class="services__blocContactTitre">Contactez-nous</h3>
                <p>On veut discuter de tes idées avec toi.</p>
                <a href="tel:4186226129" class="texte-blanc h3 services__blocContactTel">418.622.6129</a>
            </div>
        </div>
    <?php endif; ?>

</main>


<!--Appel au pied de page-->
<?php get_footer(); ?>
