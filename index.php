<?php get_header() ?>
<?php
  while(have_posts()){
      the_post();?>

      <h2><a href="<?= the_permalink(); ?>"></a> <?= the_title(); ?></h2>
      <?= the_content();?>
      <hr>
      <?php
  }

  get_footer()
?>
