<?php
/**
 * Template Name: Privacy page
 */

 $custom_fields = get_post_meta($post->ID);

//  echo "<pre>",var_dump($custom_fields),"</pre>";

?>

<?php get_header(); ?>

      <div class="container">
        <h2 class="privacy__title"><?= $custom_fields["title_privacy"][0]; ?></h2>
        <p class="privacy__text-top">
          <?= $custom_fields["top_text_privacy"][0]; ?>
        </p>
        <p class="privacy__text-bottom">
         <?= $custom_fields["bottom_text_privacy"][0]; ?>
        </p>
      </div>

<?php get_footer(); ?>
