<section id="slider">
<?php
   $args=array(
    'post_type' => 'slide',
    'posts_per_page' => -1,
    );

  // The Query
  $the_slider_query = new WP_Query( $args );

  // The Loop
  if ( $the_slider_query->have_posts() ) {
    
    while ( $the_slider_query->have_posts() ) 
    {
        $the_slider_query->the_post();
    ?>
    <div class="slide">
      <div class="relative">
       <?php
              if(has_post_thumbnail())
              {
                the_post_thumbnail("thumbnail_slide"); 
              }
      ?>
       <div class="informationSlide">
         <h2><?php the_field('titre'); ?></h2>
         <h3><?php the_field('sous-titre'); ?></h3>
         <a href="<?php the_field('lien-du-bouton'); ?>" title="<?php the_field('titre'); ?>" class="button">Voir plus</a>
       </div>
      </div>
    </div>
    <?php
    }
  }
  wp_reset_postdata();
?>
</section>