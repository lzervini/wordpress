<?php 

// Ajouter la prise en charge des images mises en avant
add_theme_support( 'post-thumbnails' );

// Ajouter automatiquement le titre du site dans l'en-tête du site
add_theme_support( 'title-tag' );


//Ajouter Bootstrap 

    // Chargement des styles et des scripts Bootstrap sur WordPress
function delice_styles_scripts(){
        //On ajoute le style de base 
        wp_enqueue_style('style', get_stylesheet_uri());
        wp_enqueue_style('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css');
        wp_enqueue_script('jquery');
        wp_enqueue_script('popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js', array('jquery'), 1, true);
        wp_enqueue_script('boostrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js', array('jquery', 'popper'), 1, true);
    }
    add_action('wp_enqueue_scripts', 'delice_styles_scripts');


//Ajouter un menu
function register_menu(){
    register_nav_menu('header-menu', __( 'Menu Header'));
}
add_action('init', 'register_menu');


//Fomulaire de commentaires -

// Supprimer le champ site web des commentaires
add_filter('comment_form_default_fields','delete_url');

function delete_url($fields) {
    unset($fields['url']);
    return $fields;
}
