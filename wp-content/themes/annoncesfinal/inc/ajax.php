<?php
add_action( 'wp_ajax_ajax-annonceCategory', 'annonces_from_category' );
add_action( 'wp_ajax_nopriv_ajax-annonceCategory', 'annonces_from_category' );

function annonces_from_category() {

     global $wpdb, $_POST;

    $term_id = $_POST['term_id'];
    include get_template_directory().'/views/liste-annonces.php';

    die();

 }