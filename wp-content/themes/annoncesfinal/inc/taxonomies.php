<?php
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