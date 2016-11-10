<?php

// CREATION CUSTOM POST TYPES
include_once('inc/custom_post_types.php');

// CREATION TAXONOMIES
include_once('inc/taxonomies.php');

// CREATION ROLES
include_once('inc/roles.php');

// CREATION STYLES SCRIPTS
include_once('inc/scripts_styles.php');

// THEME SUPPORT
include_once('inc/theme_support.php');

// AJAX FUNCTIONS
include_once('inc/ajax.php');


add_shortcode('commentaire', "function_commentaire_shortcode" ); 
// [commentaire content="Ceci est mon commentaire" id="12"]


function function_commentaire_shortcode($attr){
  $attr = shortcode_atts( array(
		'content' => 'Contenu par défaut',
		'id' => '123' // id par défaut
	), $attr);
  
  return '<!-- commentaire '.$attr['id'].' : '.$attr['content'].'-->';
}





















