<!DOCTYPE html>
<!-- Permet de pouvoir modifier la langue du document -->
<html <?php language_attributes(); ?>>
<head>
    <!-- Encode le site par défaut en UTF-8 -->
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>

    <!-- On récupère les scripts & styles  -->
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<header class="header">
    <!-- LOGO -->
    <a href="<?php echo home_url( '/' ); ?>">
    <!-- Lors du clic sur le logo, on atterit obligatoirement sur l'accueil -->
      <img src="<?php echo get_template_directory_uri(); ?>/img/logo_delice.svg" alt="Logo de Les Délices Sucrés">
    </a> 

    <!-- MENU -->
     <div>
        <?php
            if ( has_nav_menu('header-menu')) {
                wp_nav_menu(
                    array(
                        'theme_location' => 'header-menu',
                        'menu_class' => 'navbar'
                    )
                );
            }
        ?>
    </div>
  </header>
    <?php wp_body_open(); ?>