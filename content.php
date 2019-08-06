<div class="article__contenu">
    <?php if(has_post_thumbnail()){ ?>
        <div>
            <?php //affiche le contenu de l'article
                the_post_thumbnail("medium"); ?>
        </div>
    <?php } ?>

    <?php if(has_excerpt() && is_page() OR is_home()){ ?>
        <div class="extrait">
            <?= '"' . $post -> post_excerpt . '"';?>
        </div>
        <?php } else { ?>
        <div>
            <?= $post -> post_content; ?>
        </div>
    <?php } ?>
</div>




