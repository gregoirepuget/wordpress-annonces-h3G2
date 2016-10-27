<?php get_header(); //appel du template header.php  ?>

<section class="container" id="listeAnnonces">

  <?php
  
  $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
  $args=array(
    'post_type' => 'annonce',
    'posts_per_page' => 3,
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
<div class="pagination">
 <?php wp_pagenavi( array( 'query' => $the_query ) ); ?>
</div>
<?php get_footer(); ?>

