<?php $lienRacine = "" . get_site_url() . "/wp-content/themes/pixweb/"; ?>
</div> <!-- fermeture de la boîte #contenu -->

<div class="footerClear">
    <div class="footerClear__image">
        <img class="footerClear__image__pixelsDesktop" src="<?php echo $lienRacine; ?>images/footer_pixels-desktop.svg">
        <img class="footerClear__image__pixelsMobile" src="<?php echo $lienRacine; ?>images/footer_pixels-mobile.svg">
    </div>
    <footer class="footer" role="contentinfo">
        <div class="footer__contenu conteneur">
            <div class="footer__contenu__logo-sociaux">
                <img class="footer__contenu__logo-sociaux__logo" src="<?php echo $lienRacine; ?>images/logo.svg">
                <div class="footer__contenu__logo-sociaux__sociaux">
                    <?php if (strpos(get_theme_mod("facebook_link", "Lien fb"), "facebook") !== false){ ?>
                        <a href="<?php echo get_theme_mod("facebook_link", "Lien Facebook");?>" class="footer__contenu__logo-sociaux__sociaux__icone"><img src="<?= $lienRacine ?>/images/logo-facebook.svg" alt="logo facebook"></a>
                    <?php }?>

                    <?php if (strpos(get_theme_mod("twitter_link", "Lien tw"), "twitter") !== false){ ?>
                        <a href="<?php echo get_theme_mod("twitter_link", "Lien Twitter");?>"class="footer__contenu__logo-sociaux__sociaux__icone"><img src="<?= $lienRacine ?>/images/logo-twitter.svg" alt="logo twitter"></a>
                    <?php }?>

                    <?php if (strpos(get_theme_mod("linkedin_link", "Lien lk"), "linkedin") !== false){ ?>
                        <a href="<?php echo get_theme_mod("linkedin_link", "Lien Twitter");?>" class="footer__contenu__logo-sociaux__sociaux__icone"><img src="<?= $lienRacine ?>/images/logo-linkedin.svg" alt="logo linkedin"></a>
                    <?php }?>

                    <?php if (strpos(get_theme_mod("instagram_link", "Lien ins"), "instagram") !== false){ ?>
                        <a href="<?php echo get_theme_mod("instagram_link", "Lien Twitter");?>" class="footer__contenu__logo-sociaux__sociaux__icone"><img src="<?= $lienRacine ?>/images/logo-instagram.svg" alt="logo instagram"></a>
                    <?php }?>
                </div>
            </div>

            <?php
            //Ajoute la sidebar droite si besoin
            if(is_active_sidebar("footer_gauche")) { ?>
                <aside id="footer_gauche" class="footer__widget footer__widget__gauche">
                    <?php get_sidebar("footer_gauche") ?>
                </aside>
            <?php } ?>

            <?php
            //Ajoute la sidebar droite si besoin
            if(is_active_sidebar("footer_droite")) { ?>
                <aside id="footer_droite" class="footer__widget footer__widget__droite">
                    <?php get_sidebar("footer_droite") ?>
                </aside>
            <?php } ?>
            <span class="footer__pixels"></span>

        </div>

        <div class="footer__credits">
            <small><?php bloginfo("name"); ?>  | &copy; Tous droits réservés</small>
        </div>

    </footer>
</div>

<?php wp_footer(); ?>

<!--<script type="text/javascript" src="--><?php //echo $lienRacine; ?><!--node_modules/jquery/src/jquery.js"></script>-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo $lienRacine; ?>js/menu.min.js"></script>
</body>
</html>
