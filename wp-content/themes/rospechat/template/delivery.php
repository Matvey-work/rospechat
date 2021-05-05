<?php
/**
 * Template Name: Delivery page
 */

$custom_fields = get_post_meta($post->ID);

// echo "<pre>",var_dump($custom_fields),"</pre>";
?>

<?php get_header(); ?>


      <section class="about-company about-company--delivery">
        <div class="about-company__block-left about-company__block-left--delivery">
          <h2 class="about-company__title">
            <?= $custom_fields["title_delivery"][0]; ?>
          </h2>
        </div>
        <div class="about-company__container container">
          <div class="about-company__block about-company__block--delivery">
            <p class="about-company__text-top">
            <?= $custom_fields["text_top_delivery"][0]; ?>
            </p>
            <p class="about-company__text-bottom">
            <?= $custom_fields["bottom_text_delivery"][0]; ?>
            </p>
          </div>

        </div>
      </section>

      <section class="delivery-rus">
        <div class="container">
          <h2 class="delivery-rus__title"><?= $custom_fields["title_delivery_block"][0]; ?></h2>
          <div class="delivery-rus__block">
          <?php for($i = 0; $i < $custom_fields["delivery_variables"][0]; $i++):?>
            <div class="delivery-rus__block-item">
              <p class="delivery-rus__text-title delivery-rus__text-title--spb">
              <?= $custom_fields["delivery_variables_". $i ."_city_country_delivery"][0]; ?>
              </p>
              <p class="delivery-rus__text-top">
              <?= $custom_fields["delivery_variables_". $i ."_description_delivery"][0]; ?>
              </p>
              <p class="delivery-rus__text-time">
                <span><?= $custom_fields["delivery_variables_". $i ."_interval_delivery_one"][0]; ?></span>
                <span><?= $custom_fields["delivery_variables_". $i ."_interval_delivery_two"][0]; ?></span>
              </p>
              <p class="delivery-rus__text-cost">
              <?= $custom_fields["delivery_variables_". $i ."_delivery_cost_locatioon"][0]; ?>
              </p>
              <p class="delivery-rus__text-cost-bottom">
              <?= $custom_fields["delivery_variables_". $i ."_description_cost_delivery_location"][0]; ?>
              </p>
            </div>

            <?php endfor; ?>

          </div>
        </div>
      </section>

      <?php get_template_part('template/delivery-services') ?>



<?php get_footer(); ?>
