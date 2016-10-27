<?php
add_action( 'after_setup_theme', 'thumbnails_theme_support' );
function thumbnails_theme_support(){
    add_theme_support( 'post-thumbnails' );
  
  add_image_size("thumbnail_annonce",450,200,true);
  add_image_size("thumbnail_annonce_full",1450,800,false);
  add_image_size("thumbnail_slide",1500,600,true);
}

add_action( 'after_setup_theme', 'menus_du_themes' );
function menus_du_themes() {
  register_nav_menu( 'header', 'Menu entête' );
  register_nav_menu( 'footer', 'Menu bas de page' );
  register_nav_menu( 'topBar', 'Menu top Bar' );
}