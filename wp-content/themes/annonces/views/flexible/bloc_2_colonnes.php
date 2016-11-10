<?php
  $titre_1= get_sub_field('titre_1');
  $contenu_1= get_sub_field('contenu_1');
  $titre_2= get_sub_field('titre_2');
  $contenu_2= get_sub_field('contenu_2');
?>
<section class="container">
  <div class="col-md-6">
    <h2><?= $titre_1; ?></h2>
    <p><?= $contenu_1; ?></p>
  </div>
  <div class="col-md-6">
    <h2><?= $titre_2; ?></h2>
    <p><?= $contenu_2; ?></p>
  </div>
</section>