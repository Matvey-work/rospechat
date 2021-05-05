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

      <?php get_template_part('template/features') ?>


      <section class="popular-questions">
        <div class="container">
          <h2 class="popular-questions__title">
            Популярные вопросы
          </h2>
          <p class="popular-questions__text">
            Собрали самые частые вопросы, которые возникают у клиентов перед тем, как отдать в печать проекты.
          </p>
          <ul class="popular-questions__list">
            <li class="popular-questions__item"><span>
              В каком формате отправляются проекты для печати?
            </span></li>
            <li class="popular-questions__item-hidden">
              Файлы принимаются в PDF-формате. Для редактирование других форматов применяется повышающий коэффициент 1.3.
            </li>
            <li class="popular-questions__item"><span>
              Какими курьерскими службами доставляете заказ?
            </span></li>
            <li class="popular-questions__item-hidden">
              Работаем с такими курьерскими службами: СДЭК, Деловые Линии, ДПД, Почта России. Бесплатная доставка курьерской службой по Санкт-Петербургу осуществляется при условии, что сумма заказа составляет 4 500 рублей и более. Стоимость доставки по России рассчитывается индивидуально.
            </li>
            <li class="popular-questions__item"><span>
              Как упаковываете заказ перед отправкой?
            </span></li>
            <li class="popular-questions__item-hidden">
              Заказ упаковывается в водонепроницаемый пакет или картонную коробку (исходя от размеров заказа).
            </li>
            <li class="popular-questions__item"><span>
              Можно ли внести незначительные правки в проект во время печать?
            </span></li>
            <li class="popular-questions__item-hidden">
              Если инженеры перед печатью обнаружат ошибки, то их можно будет исправить после согласования с заказчиком.
            </li>
          </ul>
        </div>
      </section>


<?php get_footer(); ?>
