<?php

add_action('wp_ajax_filtre-category','filtre_category_function');
add_action('wp_ajax_nopriv_filtre-category','filtre_category_function');

function filtre_category_function()
{
  global $wpdb, $_POST;
  
  $term_id = $_POST['term_id'];
  $paged = $_POST['paged'];
  include  get_template_directory().'/views/ajax-annonces.php';
  
  die();
}