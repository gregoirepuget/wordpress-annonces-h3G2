<?php
/*
Template Name: Page accueil annonce
*/

get_header(); //appel du template header.php  ?>


<?php
 // get_template_part('views/slider');
?>

<section class="container" id="listeAnnonces">

  <h1 class="col-md-12"><?php the_title(); ?></h1>
  
  <div class="list-category-annonces col-md-12">
   
  </div>
  
  <div class="annonces">
  <?php
  
  if( is_front_page() ){
      $paged = (get_query_var('page')) ? get_query_var('page') : 1; 
  } else {
      $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; 
  }
  $args=array(
    'post_type' => 'annonce',
    'posts_per_page' => 6,
    'paged' => $paged
    );

  // The Query
  $the_query = new WP_Query( $args );

  // The Loop
  if ( $the_query->have_posts() ) {
    
    while ( $the_query->have_posts() ) 
    {
        $the_query->the_post();
    ?>
        <article class="col-md-4" id="annonce_<?php the_ID(); ?>">
          <?php
              if(has_post_thumbnail())
              {
                echo '<div class="responsiveImage">';
                the_post_thumbnail("thumbnail_annonce");
                echo '</div>';
              }
          ?>
         
          <h2><?php the_title(); ?></h2>
          <h3><?php the_terms( get_the_ID(), 'categorie-annonce', 'Catégories: ', ' / ' ); ?></h3>
          <?php the_excerpt(); ?>
          <span class="prix">Prix : <?php the_field('prix'); ?>€</span>
          <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">Voir l'annonce </a>
        </article>
    <?php      
    }
    /* Restore original Post Data */
    wp_reset_postdata();
    } else {
    // no posts found
    }
?>
  </div>

</section>
<div class="pagination">
 <?php wp_pagenavi( array( 'query' => $the_query ) ); ?>
</div>
<?php get_footer(); ?>

