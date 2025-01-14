
<?php

get_header();
  while(have_posts()){
      the_post();?>

      <h2><?= the_title(); ?></h2>
      <?= the_content();?>
      <hr>
      <?php


  }
  get_footer()
?>