<?php
/**
 * Template Name: Main page
 */
$custom_fields = get_post_meta($post->ID);
$arrSlide = [];


$img_director = $custom_fields["img_director"][0];

$top_img = $custom_fields["top_img"][0];



for($i = 0; $i < $custom_fields["slider_image"][0]; $i++){
  $img_id = $custom_fields["slider_image_" . $i . "_img"][0];
  $arrSlide[] = wp_get_attachment_url($img_id);
}


// echo "<pre>",var_dump($custom_fields),"</pre>";
?>




<?php get_header(); ?>

      <div class="express-print">
        <div class="express-print__img" style="background-image: url(<?= wp_get_attachment_url($top_img) ?>);"></div>
        <div class="express-print__container container">
          <div class="express-print__block-left">
            <h2 class="express-print__title"><?= $custom_fields["main_title"][0] ?></h2>
            <p class="express-print__sub-title"><?= $custom_fields["main_sub_title"][0] ?></p>
            <p class="express-print__text"><?= $custom_fields["main_text"][0] ?></p>
            <a href="#" class="express-print__get-price open-form">Узнать стоимость</a>
          </div>
          <div class="express-print__block-right"></div>
        </div>

      </div>

      <section class="director">
        <div class="director__container container">
          <div class="director__block-left" ">
          <div class="director__img" style="background-image: url(<?= wp_get_attachment_url($img_director) ?>);"></div>
            <p class="director__name"><?= $custom_fields["title_director"][0] ?></p>
            <span class="director__sub-title"><?= $custom_fields["description_director"][0] ?></span>
          </div>
          <div class="director__block-right">

            <h2 class="director__word"><?= $custom_fields["title_block"][0] ?></h2>

            <p class="director__text-top">

            <?= $custom_fields["top_text_block"][0] ?>

            </p>
            <p class="director__text-center">

            <?= $custom_fields["center_text_block"][0] ?>

            </p>
            <p class="director__text-bottom">
            <?= $custom_fields["bottom_text_block"][0] ?>
            </p>
          </div>


        </div>
      </section>

      <?php get_template_part('template/features') ?>

      <section class="services services--bg">
        <div class="services__container container">
          <div class="services__block-left">
            <h2 class="services__title">Услуги нашего центра</h2>
            <p class="services__sub-title">
              Наша компания специализируется на распечатке и обработке технической документации.
            </p>
            <div class="services__block-left-top" style="background-image: url(<?= wp_get_attachment_url($custom_fields["block_uslugi_0_img_uslugi"][0]) ?>);">
              <div class="block-inset">
                <p class="block-inset__text-top"><?= $custom_fields["block_uslugi_0_top_text_uslugi"][0] ?></p>
                <p class="block-inset__text-bottom"><?= $custom_fields["block_uslugi_0_bottom_text_uslugi"][0] ?></p>
                <a href="/uslugi/pechat-chertezhej/">Подробнее</a>
              </div>
            </div>
            <div class="services__block-left-bottom" style="background-image: url(<?= wp_get_attachment_url($custom_fields["block_uslugi_1_img_uslugi"][0]) ?>);">
              <div class="block-inset">
                <p class="block-inset__text-top"><?= $custom_fields["block_uslugi_1_top_text_uslugi"][0] ?></p>
                <p class="block-inset__text-bottom"><?= $custom_fields["block_uslugi_1_bottom_text_uslugi"][0] ?></p>
                <a href="/uslugi/skanirovanie-chertezhej/">Подробнее</a>
              </div>
            </div>
          </div>
          <div class="services__block-right">
            <div class="services__block-right-top" style="background-image: url(<?= wp_get_attachment_url($custom_fields["block_uslugi_2_img_uslugi"][0]) ?>);">
              <div class="block-inset">
                <p class="block-inset__text-top"><?= $custom_fields["block_uslugi_2_top_text_uslugi"][0] ?></p>
                <p class="block-inset__text-bottom"><?= $custom_fields["block_uslugi_2_bottom_text_uslugi"][0] ?></p>
                <a href="/uslugi/falczovka-chertezhej/">Подробнее</a>
              </div>
            </div>
            <div class="services__block-right-bottom" style="background-image: url(<?= wp_get_attachment_url($custom_fields["block_uslugi_3_img_uslugi"][0]) ?>);">
              <div class="block-inset">
                <p class="block-inset__text-top"><?= $custom_fields["block_uslugi_3_top_text_uslugi"][0] ?></p>
                <p class="block-inset__text-bottom"><?= $custom_fields["block_uslugi_3_bottom_text_uslugi"][0] ?></p>
                <a href="/uslugi/kopirovanie-chertezhej/">Подробнее</a>
              </div>
            </div>
            <div class="services__request">
              <p class="services__request-text">
              <?= $custom_fields["bottom_text_uslugi"][0] ?>

              </p>
              <a href="#" class="services__request-link open-form">Оставить заявку</a>
            </div>
          </div>
        </div>
      </section>

      <section class="price price--bg">
        <div class="price__img" style="background-image: url(<?= wp_get_attachment_url($custom_fields["price_img"][0]) ?>);"></div>
        <div class="container">
          <h2 class="price__title">
            <?= $custom_fields["title_price"][0]; ?>

          </h2>
          <p class="price__sub-title">
            <?= $custom_fields["price_sub_title"][0]; ?>
          </p>
          <a href="" class="price__link">Скачать прайс-лист</a>
        </div>
      </section>

      <section class="our-team">
        <div class="container">
          <span class="our-team__sup-title"><?= $custom_fields["sup_title_our_team"][0] ?></span>

          <h2 class="our-team__title"><?= $custom_fields["title_our_team"][0] ?></h2>

          <p class="our-team__sub-title">

          <?= $custom_fields["main_text_our_team"][0] ?>

          </p>

          <div class="our-team__list">

          <?php for($n = 0; $n < $custom_fields["sotrudnik"][0]; $n++):?>
            <? $img_id_our_team = $custom_fields["sotrudnik_" . $n . "_img_our_team"][0]; ?>

            <div class="our-team__item">


              <img src="<?= wp_get_attachment_url($img_id_our_team) ?>" alt="" class="our-team__img" width="270px" height="280px">

              <p class="our-team__name"><?= get_field("sotrudnik_". $n ."_name_our_team") ?></p>

              <p class="our-team__position"><?= get_field("sotrudnik_". $n ."_position_our_team") ?> </p>

            </div>
            <?php endfor; ?>

          </div>
        </div>
      </section>
      <section class="production">
        <!-- <div class="container"> -->
          <h2 class="production__title"><?= current($custom_fields["slider_title"]) ?></h2>

          <div class="production__slider-container sliders">

          <?php foreach($arrSlide as $link): ?>
            <div class="slider-img">
              <img src="<?= $link ?>" alt="">
            </div>
          <?php endforeach ?>

          </div>
        <!-- </div> -->

      </section>

      <section class="tech tech__slider">

      <?php for($k = 0; $k < $custom_fields["slider_tech"][0]; $k++): ?>
        <? $id_img = $custom_fields["slider_tech_" . $k . "_tech_img"][0]; ?>
        <div class="container">
          <div class="tech__container">
            <div class="tech__block-left">
              <h2 class="tech__title">
                <?= $custom_fields["slider_tech_" . $k . "_main_title_tech"][0]; ?>
                <!-- Техника, которую мы используем! -->
              </h2>

              <span class="tech__sub-title">
              <?= $custom_fields["slider_tech_" . $k . "_sub_title_tech"][0]; ?>
              Huawei liquid s2
              </span>

              <p class="tech__text">
              <?= $custom_fields["slider_tech_" . $k . "_text_tech"][0]; ?>

              </p>
            </div>
              <div class="tech__block-right">
                <h2 class="tech__block-right-title">
                <?= $custom_fields["slider_tech_" . $k . "_right_title"][0]; ?>

                </h2>
                <div class="tech__img" style="background-image: url(<?= wp_get_attachment_url($id_img) ?>);"></div>
              </div>

          </div>
        </div>
        <?php endfor; ?>




      </section>

      <?php get_template_part('template/delivery-services') ?>


<?php get_footer(); ?>
