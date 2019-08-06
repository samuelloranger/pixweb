<?php

/* Ajout d'un emplacement de menu */
if(function_exists("register_nav_menus")){
    register_nav_menus(
        array(
            "principal"     => "Menu principal"
        )
    );

}

/* Ajout de l'utilisation de la sidebar par défaut */
if(function_exists("register_sidebar")) {
    register_sidebar(
        array(
            "id"                => "footer_gauche",
            "name"              => "Footer gauche",
            "description"       => "",
            "before_widget"     => "",
            "after_widget"     => "",
            "before_title"     => "<h3>",
            "after_title"     => "</h3>",
        )
    );
    register_sidebar(
        array(
            "id"                => "footer_droite",
            "name"              => "Footer droite",
            "description"       => "",
            "before_widget"     => "",
            "after_widget"     => "",
            "before_title"     => "<h3>",
            "after_title"     => "</h3>",
        )
    );
}



//Function pour la page réalisations

function agence_realisations_custom_post(){

  $labels = array(
        'name'                  => _x('Réalisations de Pixweb', 'Post Type General Name'),
      'singular_name'           => _x('Réalisations', 'post Type Singular Name'),
      'menu_name'               => __('Réalisations'),
      'all_items'               => __('Tous nos réalisations'),
      'view_item'               => __('Voir nos réalisations'),
      'add_new_item'            => __('Ajouter nouvelle réalisation'),
      'add_new'                 => __('Ajouter'),
      'edit_item'               => __('Editer une réalisation'),
      'update_item'             => __('Modifier une réalisation'),
      'search_items'            => __('Rechercher une réalisation'),
      'not_found'               => __('Non trouvé'),
      'not_found_in_trash'      => __('Non trouvé dans la corbeille'),
 );
  $args = array(
      'label'              => __('nos réalisations'),
      'description'        => __('Tous nos réalisations'),
      'labels'             => $labels,
      'supports'           => array('title', 'editor', 'author', 'excerpt', 'custom-fields', 'thumbnail' ),
      'hierarchical'       => false,
      'public'             => true,
      'has_archive'        => true,
      'rewrite'            => array('slug' => 'realisations'),
  );

  register_post_type('realisations', $args);
}
//Écouteur réalisations
add_action('init', 'agence_realisations_custom_post', 0);



/* Création post la page services */
function agence_services_custom_post()
{
    $labels = array(
        // Le nom au pluriel
        'name' => _x('Services de Pixweb', 'Post Type General Name'),
        //Le nom au singulier
        'singular_name' => _x('Services', 'Post Type Singular Name'),
        //Le libellé affiché dans le menu
        'menu_name' => __('Services'),
        //Les différents libellés de l'interface administrative
        'all_items' => __('Tous nos services'),
        'view_item' => __('Voir nos services'),
        'add_new_item' => ('Ajouter un nouveau service'),
        'add_new' => __('Ajouter'),
        'edit_item' => __('Éditer un service'),
        'update_item' => __('Modifiere un service'),
        'search_items' => __('Recherche un service'),
        'not_found' => __('Non trouvé'),
        'not_found_in_trash' => __('Non trouvé dans la corbeille'),

    );

    //On peut définir ici d'autres options pour notre type d'article personnalisé
    $args = array(
        'label' =>__('Nos services'),
        'description' => __('Tout sur nos services'),
        'labels' => $labels,
        'supports' => array('title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields'),
        'hierarchical' => false,
        'public' => true,
        'has_archive' => true,
        'rewrite' => array('slug' => 'services'),
    );

    //On enregistre notre type d'article personnalisé qu'on nomme ici "services" et ses arguments
    register_post_type('services', $args);
}

//Écouteur services
add_action('init', 'agence_services_custom_post', 0);


/* Création post la page nouvelles */
function agence_nouvelles_custom_post()
{
    $labels = array(
        // Le nom au pluriel
        'name' => _x('Nouvelles de Pixweb', 'Post Type General Name'),
        //Le nom au singulier
        'singular_name' => _x('Nouvelles', 'Post Type Singular Name'),
        //Le libellé affiché dans le menu
        'menu_name' => __('Nouvelles'),
        //Les différents libellés de l'interface administrative
        'all_items' => __('Tous nos nouvelles'),
        'view_item' => __('Voir nos nouvelles'),
        'add_new_item' => ('Ajouter un nouvelle'),
        'add_new' => __('Ajouter'),
        'edit_item' => __('Éditer une nouvelle'),
        'update_item' => __('Modifier une nouvelle'),
        'search_items' => __('Recherche une nouvelle'),
        'not_found' => __('Non trouvé'),
        'not_found_in_trash' => __('Non trouvé dans la corbeille'),

    );

    //On peut définir ici d'autres options pour notre type d'article personnalisé
    $args = array(
        'label' =>__('Nos nouvelles'),
        'description' => __('Toutes nos nouvelles'),
        'labels' => $labels,
        'supports' => array('title', 'editor', 'custom-fields'),
        'hierarchical' => false,
        'public' => true,
        'has_archive' => true,
        'rewrite' => array('slug' => 'nouvelles'),
    );

    //On enregistre notre type d'article personnalisé qu'on nomme ici "services" et ses arguments
    register_post_type('nouvelles', $args);
}

//Écouteur nouvelles
add_action('init', 'agence_nouvelles_custom_post', 0);

//*******************/Création de la page équipe/*****************
function agence_equipe_custom_post()
{
    $labels = array(
        // Le nom au pluriel
        'name' => _x('Équipe de Pixweb', 'Post Type General Name'),
        //Le nom au singulier
        'singular_name' => _x('Équipe', 'Post Type Singular Name'),
        //Le libellé affiché dans le menu
        'menu_name' => __('Équipe'),
        //Les différents libellés de l'interface administrative
        'all_items' => __('Notre équipe'),
        'view_item' => __('Voir notre équipe'),
        'add_new_item' => ('Ajouter un nouveau membre'),
        'add_new' => __('Ajouter'),
        'edit_item' => __('Éditer un membre'),
        'update_item' => __('Modifier un membre'),
        'search_items' => __('Recherche un membre'),
        'not_found' => __('Non trouvé'),
        'not_found_in_trash' => __('Non trouvé dans la corbeille'),

    );

    //On peut définir ici d'autres options pour notre type d'article personnalisé
    $args = array(
        'label' =>__('Notre équipe'),
        'description' => __('Tout sur notre équipe'),
        'labels' => $labels,
        'supports' => array('title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields'),
        'hierarchical' => false,
        'public' => true,
        'has_archive' => true,
        'rewrite' => array('slug' => 'equipe'),
    );

    //On enregistre notre type d'article personnalisé qu'on nomme ici "services" et ses arguments
    register_post_type('equipe', $args);
}

//Écouteur services
add_action('init', 'agence_equipe_custom_post', 0);

//********************************************************************************

//Fonction qui liste les pages existantes pour en créer un menu déroulant
if( class_exists( 'WP_Customize_Control' ) ):
    class WP_Customize_Latest_Post_Control extends WP_Customize_Control {
        public $type = 'latest_post_dropdown';
        public $post_type = 'post';

        public function render_content() {

            $latest = new WP_Query( array(
                'post_type'   => $this->post_type,
                'post_status' => 'publish',
                'orderby'     => 'date',
                'order'       => 'DESC'
            ));

            ?>
            <label>
                <span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
                <select <?php $this->link(); ?>>
                    <?php
                    while( $latest->have_posts() ) {
                        $latest->the_post();
                        echo "<option " . selected( $this->value(), get_permalink(get_the_ID(), false)) . " value='" . get_permalink(get_the_ID(), false) . "'>" . the_title( '', '', false ) . "</option>";
                    }
                    ?>
                </select>
            </label>
            <?php
        }
    }
endif;

//Permet l'affichage d'images des nouvelles
if(function_exists("add_theme_support")){
    add_theme_support("post-thumbnails");
}

//Permet de changer l'image d'arrière-plan
function enregistrer_personnalisation_theme($wp_customize){
    //Section
    $wp_customize -> add_section("ma_section",
        array(
            "title" => "Option du thême Pixweb",
            "description" => "Personnalisation du thême Pixweb",
            "priority" => 1)
    );

    //Sous-section
    $wp_customize -> add_section("section_accueil",
        array(
            "title" => "Options du thême Pixweb - Accueil",
            "description" => "Personnalisation de la page d'accueil de Pixweb",
//            "panel" => "ma_section",
            "priority" => 1)
    );

    //Controleurs
    $wp_customize -> add_setting("charge_titre1");
    $wp_customize -> add_setting("charge_titre2");
    $wp_customize -> add_setting("charge_titre3");
    $wp_customize -> add_setting("charge_bouton1");
    $wp_customize -> add_setting("charge_bouton1_lien");
    $wp_customize -> add_setting("facebook_link");
    $wp_customize -> add_setting("twitter_link");
    $wp_customize -> add_setting("instagram_link");
    $wp_customize -> add_setting("linkedin_link");

    $wp_customize -> add_control(new WP_Customize_Control($wp_customize, "charge_titre1",
        array(
            "label" => "Titre accueil ligne 1",
            "section" => "section_accueil",
            "setting" => "charge_titre1",
        )));
    $wp_customize -> add_control(new WP_Customize_Control($wp_customize, "charge_titre2",
        array(
            "label" => "Titre accueil ligne 2",
            "section" => "section_accueil",
            "setting" => "charge_titre2",
        )));

    $wp_customize -> add_control(new WP_Customize_Control($wp_customize, "charge_titre3",
        array(
            "label" => "Titre zone centrale",
            "section" => "section_accueil",
            "setting" => "charge_titre3",
        )));

    $wp_customize -> add_control(new WP_Customize_Control($wp_customize, "charge_bouton1",
        array(
            "label" => "Bouton zone centrale",
            "section" => "section_accueil",
            "setting" => "charge_bouton1",
        )));

    $wp_customize->add_control(new WP_Customize_Latest_Post_Control($wp_customize,'charge_bouton1_lien',
        array(
            'label' => "Bouton zone centrale",
            'section' => 'section_accueil',
            'settings' => 'charge_bouton1_lien',
            'post_type' => 'page'
        )));

    $wp_customize -> add_control(new WP_Customize_Control($wp_customize, "facebook_link",
        array(
            "label" => "Lien Facebook",
            "section" => "section_accueil",
            "setting" => "facebook_link",
        )));

    $wp_customize -> add_control(new WP_Customize_Control($wp_customize, "twitter_link",
        array(
            "label" => "Lien Twitter",
            "section" => "section_accueil",
            "setting" => "twitter_link",
        )));

    $wp_customize -> add_control(new WP_Customize_Control($wp_customize, "linkedin_link",
        array(
            "label" => "Lien LinkedIn",
            "section" => "section_accueil",
            "setting" => "linkedin_link",
        )));

    $wp_customize -> add_control(new WP_Customize_Control($wp_customize, "instagram_link",
        array(
            "label" => "Lien Instagram",
            "section" => "section_accueil",
            "setting" => "instagram_link",
        )));
}


add_action("customize_register", "enregistrer_personnalisation_theme");


//Ajoute une clase sur l'item de menu actif
add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);

function special_nav_class ($classes, $item) {
    if (in_array('current-menu-item', $classes) ){
        $classes[] = 'menuItem__active';
    }
    return $classes;
}


add_image_size("thumbnail@2x", 640, 640);
add_image_size("medium@2x", 810, 810);
add_image_size("large@2x", 990, 990);

add_theme_support('post-thumbnails');
?>