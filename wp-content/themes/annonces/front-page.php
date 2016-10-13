<?php get_header(); //appel du template header.php  ?>

<section class="container" id="listeAnnonces">

  <?php
  
  $args=array( 'post_type' => 'annonce' );

  // The Query
  $the_query = new WP_Query( $args );

  // The Loop
  if ( $the_query->have_posts() ) {
    
    while ( $the_query->have_posts() ) 
    {
        $the_query->the_post();
    ?>
        <article class="col-md-4">
          <h2><?php the_title(); ?></h2>
          <span class="prix">Prix : <?php the_field('prix'); ?>€</span>
        </article>
    <?php      
    }
  
    /* Restore original Post Data */
    wp_reset_postdata();
    } else {
    // no posts found
    }
?>
  
  
</section>
<?php get_footer(); ?>

