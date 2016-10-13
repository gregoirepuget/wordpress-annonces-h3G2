<?php

add_action('init', 'create_custom_post_type_annonces');

function create_custom_post_type_annonces(){
  
  $args = array(
      'public' => true,
      'label'  => 'Books'
    );
    register_post_type( 'book', $args );
}