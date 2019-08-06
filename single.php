<!-- Appel du header -->
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


<?php
//Ajoute la sidebar gauche si besoin
if(is_active_sidebar("gauche")) { ?>
    <aside id="gauche" style="max-width: <?php echo $arrWidths[0]; ?>%">
        <?php get_sidebar("gauche") ?>
    </aside>
<?php } ?>


<main id="articles" style="max-width: <?php echo $arrWidths[1]; ?>%">
    <?php the_post();?>
    <div id="article-seul">
        <h2><?php the_title(); ?></h2>

        <?php the_content(); ?>

        <p class="metadata">Par: <?php the_author();?></p>
        <p class="metadata">Publié le: <?php the_date();?></p>

    </div>

</main>

<?php
//Ajoute la sidebar droite si besoin
if(is_active_sidebar("droite")) { ?>
    <aside id="gauche" style="max-width: <?php echo $arrWidths[2]; ?>%">
        <?php get_sidebar("droite") ?>
    </aside>
<?php } ?>

<!-- Appel du footer -->
<?php get_footer(); ?>


