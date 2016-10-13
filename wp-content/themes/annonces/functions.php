<?php

add_action( 'after_setup_theme', 'thumbnails_theme_support' );
function thumbnails_theme_support(){
    add_theme_support( 'post-thumbnails' );
}


add_action('init', 'create_custom_post_type_annonces');

function create_custom_post_type_annonces(){
  
  $labels = array(
        'name'               => 'Annonces',
        'singular_name'      => 'Annonce',
        'all_items'          => 'Toutes les annonces',
        'add_new'            => 'Ajouter une annonce',
        'add_new_item'       => 'Ajouter une nouvelle annonce',
        'edit_item'          => "Modifier l'annonce",
        'new_item'           => 'Nouvelle annonce',
        'view_item'          => "Voir l'annonce",
        'search_items'       => 'Rechercher une annonce',
        'not_found'          => 'Pas de résultat',
        'not_found_in_trash' => 'Pas de résultat',
        'parent_item_colon'  => 'Annonce parente:',
        'menu_name'          => 'Annonces',
    );

    $args = array(
        'labels'              => $labels,
        'hierarchical'        => false,
        'supports'            => array( 'title','thumbnail','editor', 'excerpt', 'comments'),
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'menu_position'       => 1,
        'menu_icon'           => 'dashicons-megaphone',
        'show_in_nav_menus'   => true,
        'publicly_queryable'  => true,
        'exclude_from_search' => false,
        'has_archive'         => false,
        'query_var'           => true,
        'can_export'          => true,
        'rewrite'             => array( 'slug' => 'annonce' ),
      'capabilities' => array(
  'edit_post'          => 'edit_annonce', 
  'create_posts'       => 'edit_annonces', 
),
    );
    register_post_type( 'annonce', $args );
}


add_action('init', 'create_custom_taxonomy');
function create_custom_taxonomy(){
  $args = array(
          'label' => 'Catégorie annonce',
          'rewrite' => array( 'slug' => 'categorie-annonce' ),
          'hierarchical' => true,
      );
  register_taxonomy( 
    'categorie-annonce',
    array('annonce'),
     $args ); 
  
  $args2 = array(
          'label' => 'Mots-clés annonce',
          'rewrite' => array( 'slug' => 'mots-cles-annonce' ),
          'hierarchical' => false,
      );
  register_taxonomy( 
    'mots-cles-annonce',
    array('annonce'),
     $args2 ); 
}


add_action('after_switch_theme', 'create_new_role');
function create_new_role(){
  add_role(
      'internaute',
      'Internaute',
      array(
          'read'         => true,  // true allows this capability
          'edit_annonce' => true,
          'edit_annonces' => true,
         // Use false to explicitly deny
      )
  );
  
    $role = get_role( 'administrator');
    $role->add_cap('edit_annonce');
    $role->add_cap('edit_annonces');
}

function ajout_scripts() {

// enregistrement d'un nouveau script
wp_register_script('bootstrap_script', get_template_directory_uri() . '/scripts/bootstrap.min.js', array('jquery'),'1.0', true);

// appel du script dans la page
wp_enqueue_script('bootstrap_script');

// enregistrement d'un nouveau style
wp_register_style( 'bootstrap_style', get_template_directory_uri() . '/styles/bootstrap.min.css' );

// appel du style dans la page
wp_enqueue_style( 'bootstrap_style' );
  
// enregistrement d'un nouveau style
wp_register_style( 'main_style', get_template_directory_uri() . '/styles/main.css' );

// appel du style dans la page
wp_enqueue_style( 'main_style' );

}
add_action( 'wp_enqueue_scripts', 'ajout_scripts' );




add_image_size("thumbnail_annonce",450,300,false);
add_image_size("thumbnail_annonce_full",1450,800,false);









