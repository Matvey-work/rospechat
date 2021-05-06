<?php
/**
 * Template Name: Price page
 */

$custom_fields = get_post_meta($post->ID);

// echo "<pre>",var_dump($custom_fields),"</pre>";
?>

<?php get_header(); ?>


      <section class="service-cost">
        <div class="service-cost__block-left">
          <h2 class="service-cost__title"><?= $custom_fields["title_price"][0]; ?></h2>
        </div>
        <div class="service-cost__container container">
          <div class="service-cost__block-text">
            <p class="service-cost__text">
            <?= $custom_fields["top_text_price"][0]; ?>

            </p>
            <p class="service-cost__text">
            <?= $custom_fields["bottom_text_price"][0]; ?>

            </p>
          </div>
        </div>
      </section>

      <section class="types-service">
        <div class="container">
          <div class="types-service__list-btn">
            <div class="types-service__btn types-service__btn--active">
              <p class="types-service__btn-text">
                Печать чертежей
              </p>
            </div>
            <div class="types-service__btn">
              <p class="types-service__btn-text">
                Копирование чертежей
              </p>
            </div>
            <div class="types-service__btn">
              <p class="types-service__btn-text">
                Сканирование чертежей
              </p>
            </div>
            <div class="types-service__btn">
              <p class="types-service__btn-text">
                Фальцовка чертежей
              </p>
            </div>
            <div class="types-service__btn">
              <p class="types-service__btn-text">
                Сборка в альбомы
              </p>
            </div>
            <div class="types-service__btn types-service__btn--dop">
              <p class="types-service__btn-text">
                Доплаты
              </p>
            </div>
            <div class="types-service__btn">
              <p class="types-service__btn-text">
                Дополнительные услуги
              </p>
            </div>
          </div>

          <div class="types-service__item">
          <div class="item-table visible">
              <table width="100%">
                <tr>
                  <th>Наименование работы (услуги)</th>
                  <th>Количество</th>
                  <th>Стоимость за ед. с НДС</th>
                </tr>
                <?php for($i = 0; $i < $custom_fields["print_drawing"][0]; $i++ ): ?>
              <tr>

                <td><?= $custom_fields["print_drawing_" . $i . "_naimenovanie_uslugi"][0] ?></td>

                <td><?= $custom_fields["print_drawing_" . $i . "_kolichestvo"][0] ?></td>

                <td><?= $custom_fields["print_drawing_" . $i . "_stoimost"][0] ?></td>

              </tr>
              <?php endfor; ?>

              </table>
            </div>
            <div class="item-table">
              <table width="100%">
                <tr>
                  <th>Наименование работы (услуги)</th>
                  <th>Количество</th>
                  <th>Стоимость за ед. с НДС</th>
                </tr>
                <?php for($i = 0; $i < $custom_fields["copy_drawing"][0]; $i++ ): ?>
              <tr>

                <td><?= $custom_fields["copy_drawing_" . $i . "_naimenovanie_uslugi"][0] ?></td>

                <td><?= $custom_fields["copy_drawing_" . $i . "_kolichestvo"][0] ?></td>

                <td><?= $custom_fields["copy_drawing_" . $i . "_stoimost"][0] ?></td>

              </tr>
              <?php endfor; ?>

              </table>
            </div>
            <div class="item-table">
              <table width="100%">
                <tr>
                  <th>Наименование работы (услуги)</th>
                  <th>Количество</th>
                  <th>Стоимость за ед. с НДС</th>
                </tr>
                <?php for($i = 0; $i < $custom_fields["scan_drawing"][0]; $i++ ): ?>
              <tr>

                <td><?= $custom_fields["scan_drawing_" . $i . "_naimenovanie_uslugi"][0] ?></td>

                <td><?= $custom_fields["scan_drawing_" . $i . "_kolichestvo"][0] ?></td>

                <td><?= $custom_fields["scan_drawing_" . $i . "_stoimost"][0] ?></td>

              </tr>
              <?php endfor; ?>


              </table>
            </div>


            <div class="item-table">
              <table width="100%">
                <tr>
                  <th>Наименование работы (услуги)</th>
                  <th>Количество</th>
                  <th>Стоимость за ед. с НДС</th>
                </tr>
                <?php for($i = 0; $i < $custom_fields["folding_drawing"][0]; $i++ ): ?>
              <tr>

                <td><?= $custom_fields["folding_drawing_" . $i . "_naimenovanie_uslugi"][0] ?></td>

                <td><?= $custom_fields["folding_drawing_" . $i . "_kolichestvo"][0] ?></td>

                <td><?= $custom_fields["folding_drawing_" . $i . "_stoimost"][0] ?></td>

              </tr>
              <?php endfor; ?>

              </table>
            </div>
            <div class="item-table">
              <table width="100%">
                <tr>
                  <th>Наименование работы (услуги)</th>
                  <th>Количество</th>
                  <th>Стоимость за ед. с НДС</th>
                </tr>
                <?php for($i = 0; $i < $custom_fields["albums"][0]; $i++ ): ?>
              <tr>

                <td><?= $custom_fields["albums_" . $i . "_naimenovanie_uslugi"][0] ?></td>

                <td><?= $custom_fields["albums_" . $i . "_kolichestvo"][0] ?></td>

                <td><?= $custom_fields["albums_" . $i . "_stoimost"][0] ?></td>

              </tr>
              <?php endfor; ?>

              </table>
            </div>
            <div class="item-table">
              <table width="100%">
                <tr>
                  <th>Наименование работы (услуги)</th>
                  <th>Количество</th>
                  <th>Стоимость за ед. с НДС</th>
                </tr>
                <?php for($i = 0; $i < $custom_fields["surcharges"][0]; $i++ ): ?>
              <tr>

                <td><?= $custom_fields["surcharges_" . $i . "_naimenovanie_uslugi"][0] ?></td>

                <td><?= $custom_fields["surcharges_" . $i . "_kolichestvo"][0] ?></td>

                <td><?= $custom_fields["surcharges_" . $i . "_stoimost"][0] ?></td>

              </tr>
              <?php endfor; ?>

              </table>
            </div>
            <div class="item-table">
              <table width="100%">
                <tr>
                  <th>Наименование работы (услуги)</th>
                  <th>Количество</th>
                  <th>Стоимость за ед. с НДС</th>
                </tr>
                <?php for($i = 0; $i < $custom_fields["dop_services"][0]; $i++ ): ?>
              <tr>

                <td><?= $custom_fields["dop_services_" . $i . "_naimenovanie_uslugi"][0] ?></td>

                <td><?= $custom_fields["dop_services_" . $i . "_kolichestvo"][0] ?></td>

                <td><?= $custom_fields["dop_services_" . $i . "_stoimost"][0] ?></td>

              </tr>
              <?php endfor; ?>

              </table>
            </div>

          </div>
        </div>
      </section>

      <section class="price price--bg">
      <div class="price__img" style="background-image: url(<?= wp_get_attachment_url($custom_fields["price_image"][0]) ?>);"></div>
        <div class="container">
          <h2 class="price__title">
          <?= $custom_fields["price_title"][0]; ?>

          </h2>
          <p class="price__sub-title">
          <?= $custom_fields["price_sub_title"][0]; ?>
          </p>
          <a href="" class="price__link">Скачать прайс-лист</a>
        </div>
      </section>

<?php get_footer(); ?>
