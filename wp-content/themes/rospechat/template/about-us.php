<?php
/**
 * Template Name: About-us page
 */

$custom_fields = get_post_meta($post->ID);
$arrSlide = [];


for($i = 0; $i < $custom_fields["images"][0]; $i++){
  $img_id = $custom_fields["images_" . $i . "_slide_img"][0];
  $arrSlide[] = wp_get_attachment_url($img_id);
}

// get_template_part($path);

// echo "<pre>",var_dump(get_template_part($path)),"</pre>";
?>

<?php get_header(); ?>


      <section class="about-company">
        <div class="about-company__block-left">
          <h2 class="about-company__title"><?= $custom_fields["title_about_us"][0] ?></h2>
        </div>
        <div class="about-company__container container">
          <div class="about-company__block">
            <p class="about-company__text-top">
              <?= $custom_fields["top_text"][0] ?>
            </p>
            <p class="about-company__text-center">
              <?= $custom_fields["middle_text"][0] ?>
            </p>
            <p class="about-company__text-bottom">
              <?= $custom_fields["bottom_text"][0] ?>
            </p>
          </div>

        </div>
      </section>

      <section class="our-production">
        <div class="container">
          <h2 class="our-production__title"><?= $custom_fields["title_our_production"][0] ?></h2>
          <p class="our-production__text">
            <?= $custom_fields["top_text_poduction"][0]; ?>
          </p>
          <div class="our-production__slider">

          <?php foreach($arrSlide as $link): ?>
            <div>
              <img src="<?= $link ?>" alt="">
            </div>
          <?php endforeach ?>


          </div>
        </div>
        <div class="our-poduction__block-bottom-right">
          <p class="our-production__text-bottom">
            <?= $custom_fields["bottom_text1"][0]; ?>
          </p>
          <p class="our-production__text-bottom">
            <?= $custom_fields["bottom_text2"][0]; ?>
          </p>
        </div>
        <div class="our-poduction__block-bottom-left">
          <p class="our-poduction__block-bottom-left-text">
            <?= $custom_fields["bottom_title"][0]; ?>
          </p>
        </div>
      </section>

      <?php get_template_part('template/features'); ?>

      <?php get_template_part('template/pop-questions'); ?>


<?php get_footer(); ?>
