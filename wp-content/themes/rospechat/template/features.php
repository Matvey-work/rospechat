<?php
/**
 * Template Name: features
 */


$custom_fields = get_post_meta(263);

$features_img = $custom_fields["features_img"][0];
// echo "<pre>",var_dump($custom_fields),"</pre>";

?>

      <section class="features features--bg">
        <div class="features__img" style="background-image: url(<?= wp_get_attachment_url($features_img) ?>);"></div>
        <p class="features__text-top"><?= $custom_fields["name_title_features"][0]; ?></p>
        <div class="container">
          <div class="features__block-left">
            <h2 class="features__title features__title--about"><?= $custom_fields["title_features"][0]; ?></h2>
            <ul class="features__list">

            <?php for($i = 0; $i < $custom_fields["fields_features"][0]; $i++): ?>
              <li class="features__item">

                <span class="features__item-number">
                  <?= $custom_fields["fields_features_". $i ."_num_field_features"][0]; ?>
              </span>
                <p class="features__item-text-top">
                  <?= $custom_fields["fields_features_". $i ."_text_top_features"][0]; ?>
                </p>
                <p class="features__item-text-bottom">

                <?= $custom_fields["fields_features_". $i ."_text_bottom_features"][0]; ?>
                 </p>

              </li>
              <?php endfor; ?>

            </ul>
          </div>
        </div>
      </section>
