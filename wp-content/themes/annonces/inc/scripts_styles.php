<?php

function ajout_scripts() {

// enregistrement d'un nouveau script
wp_register_script('bootstrap_script', get_template_directory_uri() . '/scripts/bootstrap.min.js', array('jquery'),'1.0', true);

// appel du script dans la page
wp_enqueue_script('bootstrap_script');
  
// enregistrement d'un nouveau script
wp_register_script('slick_script', get_template_directory_uri() . '/scripts/slick/slick.min.js', array('jquery'),'1.0', true);

// appel du script dans la page
wp_enqueue_script('slick_script');
  
  
// enregistrement d'un nouveau script
wp_register_script('main', get_template_directory_uri() . '/scripts/main.js', array('jquery'),'1.0', true);

// appel du script dans la page
wp_enqueue_script('main');
  
  
  

// enregistrement d'un nouveau style
wp_register_style( 'bootstrap_style', get_template_directory_uri() . '/styles/bootstrap.min.css' );

// appel du style dans la page
wp_enqueue_style( 'bootstrap_style' );
  
// enregistrement d'un nouveau style
wp_register_style( 'slick_style', get_template_directory_uri() . '/styles/slick/slick.css' );

// appel du style dans la page
wp_enqueue_style( 'slick_style' );
  
// enregistrement d'un nouveau style
wp_register_style( 'slick_theme_style', get_template_directory_uri() . '/styles/slick/slick-theme.css' );

// appel du style dans la page
wp_enqueue_style( 'slick_theme_style' );
  

  // enregistrement d'un nouveau style
wp_register_style( 'google-font', 'https://fonts.googleapis.com/css?family=PT+Sans+Narrow' );

// appel du style dans la page
wp_enqueue_style( 'google-font' );
  
  
  
// enregistrement d'un nouveau style
wp_register_style( 'main_style', get_template_directory_uri() . '/styles/main.css' );

// appel du style dans la page
wp_enqueue_style( 'main_style' );

}
add_action( 'wp_enqueue_scripts', 'ajout_scripts' );