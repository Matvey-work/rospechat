<?php
/**
 * Template Name: delivery-services
 */
$custom_fields = get_post_meta(323);




// echo "<pre>",var_dump($custom_fields),"</pre>";
?>






      <section class="delivery">
        <div class="container">
          <h2 class="delivery__title"><?= $custom_fields["title_post_service"][0]; ?></h2>
          <div class="delivery__list">
          <?php for($i = 0; $i < $custom_fields["images_post_services"][0]; $i++): ?>
            <? $id_img = $custom_fields["images_post_services_" . $i . "_logo_post_service"][0]; ?>
            <div class="delivery__item" style="background-image: url(<?= wp_get_attachment_url($id_img) ?>);"></div>

            <?php endfor; ?>

          </div>
        </div>
      </section>
