<?php get_header(); //appel du template header.php  ?>

<section id="content" class="container">
    <?php
    // boucle WordPress
    if (have_posts()){
        while (have_posts()){
            the_post();
    ?>
          <?php
              if(has_post_thumbnail())
              {
                echo '<div class="responsiveImage">';
                the_post_thumbnail("thumbnail_annonce_full");
                echo '</div>';
              }
          ?>
            <h1><?php the_title(); ?></h1>
            <h2>Posté le <?php the_time('F jS, Y') ?></h2>
            <p><?php the_content(); ?></p>
            
            <span class="prix"><?php the_field("prix"); ?> €</span>
    <?php
    }
    }
    else {
    ?>
    Nous n'avons pas trouvé d'article répondant à votre recherche
    <?php
    }
    ?>
</section> <!-- /content -->

<?php get_footer(); //appel du template footer.php ?>