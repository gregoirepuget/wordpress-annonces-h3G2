<?php
add_action( 'after_setup_theme', 'thumbnails_theme_support' );
function thumbnails_theme_support(){
    add_theme_support( 'post-thumbnails' );
  
  add_image_size("thumbnail_annonce",450,300,false);
  add_image_size("thumbnail_annonce_full",1450,800,false);
}