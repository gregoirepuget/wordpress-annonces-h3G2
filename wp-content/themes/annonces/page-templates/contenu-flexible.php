<?php
/*
Template Name: Page de contenu flexible
*/

get_header(); //appel du template header.php  ?>
<?php

// check if the flexible content field has rows of data
if( have_rows('contenu') )
{

     // loop through the rows of data
    while ( have_rows('contenu') )
    {
      the_row();
      $layout=get_row_layout();
      include get_template_directory().'/views/flexible/'.$layout.'.php';
    }
}

?>

<?php get_footer(); ?>