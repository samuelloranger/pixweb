<!-- Importation du header -->
<?php get_header(); ?>

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

<main id="articles" style="max-width: <?php echo $arrWidths[1]; ?>%">
    <?php the_post(); ?>
    <div class="en-tete-page">
        <h1><?php the_title(); ?></h1>
    </div>

    <?php the_content(); ?>
</main>


<!-- Importation du footer -->
<?php get_footer(); ?>
