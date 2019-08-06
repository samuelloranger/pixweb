<?php get_header();

echo "404.php" ?>

<?php //Ici on peut faire l'ajout des sidebars si nécéssaire ?>

<!-- Corps de la page -->
<main>
    <div class="conteneur zone-404">
        <section class="zone-404__contenu">
            <h1>Oups, nous ne pouvons pixeliser cette page...</h1>
            <a href="<?php echo get_site_url(); ?>" class="button button-rouge">Retour à l'accueil</a>
        </section>
        <img src="<?php bloginfo(url); ?>/wp-content/themes/pixweb/images/pixel-page-404.svg"
             alt="Erreur 404">

    </div>
</main>

<?php get_footer(); ?>
