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
                <tr>
                  <td>Печать чертежей ч/б ф-т А4</td>
                  <td>1</td>
                  <td>от 1,5 руб</td>
                </tr>
                <tr>
                  <td>Печать чертежей ч/б ф-т А4</td>
                  <td>1</td>
                  <td>от 1,5 руб</td>
                </tr>
                <tr>
                  <td>Печать чертежей ч/б ф-т А4</td>
                  <td>1</td>
                  <td>от 1,5 руб</td>
                </tr>
                <tr>
                  <td>Печать чертежей ч/б ф-т А4</td>
                  <td>1</td>
                  <td>от 1,5 руб</td>
                </tr>
                <tr>
                  <td>Печать чертежей ч/б ф-т А4</td>
                  <td>1</td>
                  <td>от 1,5 руб</td>
                </tr>
                <tr>
                  <td>Печать чертежей ч/б ф-т А4</td>
                  <td>1</td>
                  <td>от 1,5 руб</td>
                </tr>
                <tr>
                  <td>Печать чертежей ч/б ф-т А4</td>
                  <td>1</td>
                  <td>от 1,5 руб</td>
                </tr>
                <tr>
                  <td>Печать чертежей ч/б ф-т А4</td>
                  <td>1</td>
                  <td>от 1,5 руб</td>
                </tr>
                <tr>
                  <td>Печать чертежей ч/б ф-т А4</td>
                  <td>1</td>
                  <td>от 1,5 руб</td>
                </tr>
                <tr>
                  <td>Печать чертежей ч/б ф-т А4</td>
                  <td>1</td>
                  <td>от 1,5 руб</td>
                </tr>
                <tr>
                  <td>Печать чертежей ч/б ф-т А4</td>
                  <td>1</td>
                  <td>от 1,5 руб</td>
                </tr>
                <tr>
                  <td>Печать чертежей ч/б ф-т А4</td>
                  <td>1</td>
                  <td>от 1,5 руб</td>
                </tr>
              </table>
            </div>
            <div class="item-table">
              <table width="100%">
                <tr>
                  <th>Наименование работы (услуги)</th>
                  <th>Количество</th>
                  <th>Стоимость за ед. с НДС</th>
                </tr>
                <tr>
                  <td>Печать чертежей ч/б ф-т А4</td>
                  <td>1</td>
                  <td>от 1,5 руб</td>
                </tr>
                <tr>
                  <td>Печать чертежей ч/б ф-т А4</td>
                  <td>1</td>
                  <td>от 1,5 руб</td>
                </tr>
                <tr>
                  <td>Печать чертежей ч/б ф-т А4</td>
                  <td>1</td>
                  <td>от 1,5 руб</td>
                </tr>
                <tr>
                  <td>Печать чертежей ч/б ф-т А4</td>
                  <td>1</td>
                  <td>от 1,5 руб</td>
                </tr>
                <tr>
                  <td>Печать чертежей ч/б ф-т А4</td>
                  <td>1</td>
                  <td>от 1,5 руб</td>
                </tr>
                <tr>
                  <td>Печать чертежей ч/б ф-т А4</td>
                  <td>1</td>
                  <td>от 1,5 руб</td>
                </tr>
                <tr>
                  <td>Печать чертежей ч/б ф-т А4</td>
                  <td>1</td>
                  <td>от 1,5 руб</td>
                </tr>
                <tr>
                  <td>Печать чертежей ч/б ф-т А4</td>
                  <td>1</td>
                  <td>от 1,5 руб</td>
                </tr>
                <tr>
                  <td>Печать чертежей ч/б ф-т А4</td>
                  <td>1</td>
                  <td>от 1,5 руб</td>
                </tr>
                <tr>
                  <td>Печать чертежей ч/б ф-т А4</td>
                  <td>1</td>
                  <td>от 1,5 руб</td>
                </tr>
                <tr>
                  <td>Печать чертежей ч/б ф-т А4</td>
                  <td>1</td>
                  <td>от 1,5 руб</td>
                </tr>
                <tr>
                  <td>Печать чертежей ч/б ф-т А4</td>
                  <td>1</td>
                  <td>от 1,5 руб</td>
                </tr>
              </table>
            </div>
            <div class="item-table">
              <table width="100%">
                <tr>
                  <th>Наименование работы (услуги)</th>
                  <th>Количество</th>
                  <th>Стоимость за ед. с НДС</th>
                </tr>
                <tr>
                  <td>Печать чертежей ч/б ф-т А4</td>
                  <td>1</td>
                  <td>от 1,5 руб</td>
                </tr>
                <tr>
                  <td>Печать чертежей ч/б ф-т А4</td>
                  <td>1</td>
                  <td>от 1,5 руб</td>
                </tr>
                <tr>
                  <td>Печать чертежей ч/б ф-т А4</td>
                  <td>1</td>
                  <td>от 1,5 руб</td>
                </tr>
                <tr>
                  <td>Печать чертежей ч/б ф-т А4</td>
                  <td>1</td>
                  <td>от 1,5 руб</td>
                </tr>
                <tr>
                  <td>Печать чертежей ч/б ф-т А4</td>
                  <td>1</td>
                  <td>от 1,5 руб</td>
                </tr>
                <tr>
                  <td>Печать чертежей ч/б ф-т А4</td>
                  <td>1</td>
                  <td>от 1,5 руб</td>
                </tr>
                <tr>
                  <td>Печать чертежей ч/б ф-т А4</td>
                  <td>1</td>
                  <td>от 1,5 руб</td>
                </tr>
                <tr>
                  <td>Печать чертежей ч/б ф-т А4</td>
                  <td>1</td>
                  <td>от 1,5 руб</td>
                </tr>
                <tr>
                  <td>Печать чертежей ч/б ф-т А4</td>
                  <td>1</td>
                  <td>от 1,5 руб</td>
                </tr>
                <tr>
                  <td>Печать чертежей ч/б ф-т А4</td>
                  <td>1</td>
                  <td>от 1,5 руб</td>
                </tr>
                <tr>
                  <td>Печать чертежей ч/б ф-т А4</td>
                  <td>1</td>
                  <td>от 1,5 руб</td>
                </tr>
                <tr>
                  <td>Печать чертежей ч/б ф-т А4</td>
                  <td>1</td>
                  <td>от 1,5 руб</td>
                </tr>
              </table>
            </div>
            <div class="item-table">
              <table width="100%">
                <tr>
                  <th>Наименование работы (услуги)</th>
                  <th>Количество</th>
                  <th>Стоимость за ед. с НДС</th>
                </tr>
                <tr>
                  <td>Печать чертежей ч/б ф-т А4</td>
                  <td>1</td>
                  <td>от 1,5 руб</td>
                </tr>
                <tr>
                  <td>Печать чертежей ч/б ф-т А4</td>
                  <td>1</td>
                  <td>от 1,5 руб</td>
                </tr>
                <tr>
                  <td>Печать чертежей ч/б ф-т А4</td>
                  <td>1</td>
                  <td>от 1,5 руб</td>
                </tr>
                <tr>
                  <td>Печать чертежей ч/б ф-т А4</td>
                  <td>1</td>
                  <td>от 1,5 руб</td>
                </tr>
                <tr>
                  <td>Печать чертежей ч/б ф-т А4</td>
                  <td>1</td>
                  <td>от 1,5 руб</td>
                </tr>
                <tr>
                  <td>Печать чертежей ч/б ф-т А4</td>
                  <td>1</td>
                  <td>от 1,5 руб</td>
                </tr>
                <tr>
                  <td>Печать чертежей ч/б ф-т А4</td>
                  <td>1</td>
                  <td>от 1,5 руб</td>
                </tr>
                <tr>
                  <td>Печать чертежей ч/б ф-т А4</td>
                  <td>1</td>
                  <td>от 1,5 руб</td>
                </tr>
                <tr>
                  <td>Печать чертежей ч/б ф-т А4</td>
                  <td>1</td>
                  <td>от 1,5 руб</td>
                </tr>
                <tr>
                  <td>Печать чертежей ч/б ф-т А4</td>
                  <td>1</td>
                  <td>от 1,5 руб</td>
                </tr>
                <tr>
                  <td>Печать чертежей ч/б ф-т А4</td>
                  <td>1</td>
                  <td>от 1,5 руб</td>
                </tr>
                <tr>
                  <td>Печать чертежей ч/б ф-т А4</td>
                  <td>1</td>
                  <td>от 1,5 руб</td>
                </tr>
              </table>
            </div>
            <div class="item-table">
              <table width="100%">
                <tr>
                  <th>Наименование работы (услуги)</th>
                  <th>Количество</th>
                  <th>Стоимость за ед. с НДС</th>
                </tr>
                <tr>
                  <td>Печать чертежей ч/б ф-т А4</td>
                  <td>1</td>
                  <td>от 1,5 руб</td>
                </tr>
                <tr>
                  <td>Печать чертежей ч/б ф-т А4</td>
                  <td>1</td>
                  <td>от 1,5 руб</td>
                </tr>
                <tr>
                  <td>Печать чертежей ч/б ф-т А4</td>
                  <td>1</td>
                  <td>от 1,5 руб</td>
                </tr>
                <tr>
                  <td>Печать чертежей ч/б ф-т А4</td>
                  <td>1</td>
                  <td>от 1,5 руб</td>
                </tr>
                <tr>
                  <td>Печать чертежей ч/б ф-т А4</td>
                  <td>1</td>
                  <td>от 1,5 руб</td>
                </tr>
                <tr>
                  <td>Печать чертежей ч/б ф-т А4</td>
                  <td>1</td>
                  <td>от 1,5 руб</td>
                </tr>
                <tr>
                  <td>Печать чертежей ч/б ф-т А4</td>
                  <td>1</td>
                  <td>от 1,5 руб</td>
                </tr>
                <tr>
                  <td>Печать чертежей ч/б ф-т А4</td>
                  <td>1</td>
                  <td>от 1,5 руб</td>
                </tr>
                <tr>
                  <td>Печать чертежей ч/б ф-т А4</td>
                  <td>1</td>
                  <td>от 1,5 руб</td>
                </tr>
                <tr>
                  <td>Печать чертежей ч/б ф-т А4</td>
                  <td>1</td>
                  <td>от 1,5 руб</td>
                </tr>
                <tr>
                  <td>Печать чертежей ч/б ф-т А4</td>
                  <td>1</td>
                  <td>от 1,5 руб</td>
                </tr>
                <tr>
                  <td>Печать чертежей ч/б ф-т А4</td>
                  <td>1</td>
                  <td>от 1,5 руб</td>
                </tr>
              </table>
            </div>
            <div class="item-table">
              <table width="100%">
                <tr>
                  <th>Наименование работы (услуги)</th>
                  <th>Количество</th>
                  <th>Стоимость за ед. с НДС</th>
                </tr>
                <tr>
                  <td>Печать чертежей ч/б ф-т А4</td>
                  <td>1</td>
                  <td>от 1,5 руб</td>
                </tr>
                <tr>
                  <td>Печать чертежей ч/б ф-т А4</td>
                  <td>1</td>
                  <td>от 1,5 руб</td>
                </tr>
                <tr>
                  <td>Печать чертежей ч/б ф-т А4</td>
                  <td>1</td>
                  <td>от 1,5 руб</td>
                </tr>
                <tr>
                  <td>Печать чертежей ч/б ф-т А4</td>
                  <td>1</td>
                  <td>от 1,5 руб</td>
                </tr>
                <tr>
                  <td>Печать чертежей ч/б ф-т А4</td>
                  <td>1</td>
                  <td>от 1,5 руб</td>
                </tr>
                <tr>
                  <td>Печать чертежей ч/б ф-т А4</td>
                  <td>1</td>
                  <td>от 1,5 руб</td>
                </tr>
                <tr>
                  <td>Печать чертежей ч/б ф-т А4</td>
                  <td>1</td>
                  <td>от 1,5 руб</td>
                </tr>
                <tr>
                  <td>Печать чертежей ч/б ф-т А4</td>
                  <td>1</td>
                  <td>от 1,5 руб</td>
                </tr>
                <tr>
                  <td>Печать чертежей ч/б ф-т А4</td>
                  <td>1</td>
                  <td>от 1,5 руб</td>
                </tr>
                <tr>
                  <td>Печать чертежей ч/б ф-т А4</td>
                  <td>1</td>
                  <td>от 1,5 руб</td>
                </tr>
                <tr>
                  <td>Печать чертежей ч/б ф-т А4</td>
                  <td>1</td>
                  <td>от 1,5 руб</td>
                </tr>
                <tr>
                  <td>Печать чертежей ч/б ф-т А4</td>
                  <td>1</td>
                  <td>от 1,5 руб</td>
                </tr>
              </table>
            </div>
            <div class="item-table">
              <table width="100%">
                <tr>
                  <th>Наименование работы (услуги)</th>
                  <th>Количество</th>
                  <th>Стоимость за ед. с НДС</th>
                </tr>
                <tr>
                  <td>Печать чертежей ч/б ф-т А4</td>
                  <td>1</td>
                  <td>от 1,5 руб</td>
                </tr>
                <tr>
                  <td>Печать чертежей ч/б ф-т А4</td>
                  <td>1</td>
                  <td>от 1,5 руб</td>
                </tr>
                <tr>
                  <td>Печать чертежей ч/б ф-т А4</td>
                  <td>1</td>
                  <td>от 1,5 руб</td>
                </tr>
                <tr>
                  <td>Печать чертежей ч/б ф-т А4</td>
                  <td>1</td>
                  <td>от 1,5 руб</td>
                </tr>
                <tr>
                  <td>Печать чертежей ч/б ф-т А4</td>
                  <td>1</td>
                  <td>от 1,5 руб</td>
                </tr>
                <tr>
                  <td>Печать чертежей ч/б ф-т А4</td>
                  <td>1</td>
                  <td>от 1,5 руб</td>
                </tr>
                <tr>
                  <td>Печать чертежей ч/б ф-т А4</td>
                  <td>1</td>
                  <td>от 1,5 руб</td>
                </tr>
                <tr>
                  <td>Печать чертежей ч/б ф-т А4</td>
                  <td>1</td>
                  <td>от 1,5 руб</td>
                </tr>
                <tr>
                  <td>Печать чертежей ч/б ф-т А4</td>
                  <td>1</td>
                  <td>от 1,5 руб</td>
                </tr>
                <tr>
                  <td>Печать чертежей ч/б ф-т А4</td>
                  <td>1</td>
                  <td>от 1,5 руб</td>
                </tr>
                <tr>
                  <td>Печать чертежей ч/б ф-т А4</td>
                  <td>1</td>
                  <td>от 1,5 руб</td>
                </tr>
                <tr>
                  <td>Печать чертежей ч/б ф-т А4</td>
                  <td>1</td>
                  <td>от 1,5 руб</td>
                </tr>
              </table>
            </div>

          </div>
        </div>
      </section>

      <section class="price price--bg">
        <div class="container">
          <h2 class="price__title">
            Хотите подробнее ознакомиться со стоимостью наших услуг
          </h2>
          <p class="price__sub-title">
            Наша компания специализируется на распечатке и обработке технической документации.
          </p>
          <a href="" class="price__link">Скачать прайс-лист</a>
        </div>
      </section>

<?php get_footer(); ?>
