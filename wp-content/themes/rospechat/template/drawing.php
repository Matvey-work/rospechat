<?php
/**
 * Template Name: Service-template page
 */


$custom_fields = get_post_meta($post->ID);
$img_id = $custom_fields["img"][0];
$table_title = $custom_fields["table_title"][0];

// echo "<pre>",var_dump(unserialize($custom_fields["uslugi_block_4_link"][0])["url"]),"</pre>";
// echo "<pre>",var_dump($custom_fields),"</pre>";

?>


<?php get_header(); ?>

      <section class="drawing-section drawing-section--copy" style="background-image: url(<?= wp_get_attachment_url($img_id) ?>);">
        <div class="container">
          <h2 class="drawing-section__title"><?= $custom_fields["title"][0] ?></h2>
          <div class="drawing-section__text">

            <?= $custom_fields["description"][0] ?>

          </div>

          <a href="#" class="drawing-section__btn">Оформить заказ</a>
        </div>
      </section>

      <section class="types-service">
        <div class="container">
          <h2 class="types-service__title"><?= $table_title ?></h2>
          <div class="types-service__item">
            <table width="100%">
              <tr>
                <th>Наименование работы (услуги)</th>
                <th>Количество</th>
                <th>Стоимость за ед. с НДС</th>
              </tr>
              <?php for($i = 0; $i < $custom_fields["rows_table"][0]; $i++ ): ?>
              <tr>

                <td><?= $custom_fields["rows_table_" . $i . "_name_work"][0] ?></td>

                <td><?= $custom_fields["rows_table_" . $i . "_quantity"][0] ?></td>

                <td><?= $custom_fields["rows_table_" . $i . "_cost"][0] ?></td>

              </tr>
              <?php endfor; ?>
            </table>
          </div>
          <a href="" class="types-service__get-price">Скачать прайс-лист</a>
        </div>
      </section>

      <section class="how-work">
        <div class="container">
          <h2 class="how-work__title">Как мы работаем</h2>
          <p class="how-work__text">
            Наша компания специализируется на распечатке и обработке технической документации, сотрудничает с частными лицами, коммерчески организациями и государственными учреждениями.
          </p>
          <div class="how-work__block">
            <div class="how-work__item">
              <p class="how-work__block-text-top how-work__block-text-top--registration">
                Оформление заявки
              </p>
              <p class="how-work__block-text-bottom">
                Клиент заказывает оказание определенных услуг по почте или телефону
              </p>
            </div>
            <div class="how-work__item">
              <p class="how-work__block-text-top how-work__block-text-top--calculation">
                Расчет стоимости
              </p>
              <p class="how-work__block-text-bottom">
                Специалисты компании согласовывают расходы на проведение работ
              </p>
            </div>
            <div class="how-work__item">
              <p class="how-work__block-text-top how-work__block-text-top--work">
                Проведение работ
              </p>
              <p class="how-work__block-text-bottom">
                Штатные специалисты приступают к выполнению заказанных работ
              </p>
            </div>
            <div class="how-work__item">
              <p class="how-work__block-text-top how-work__block-text-top--order">
                Сдача<br> заказа
              </p>
              <p class="how-work__block-text-bottom">
                В назначенный день клиент получает пакет документов либо цифровые копии
              </p>
            </div>
          </div>
        </div>
      </section>

<?php get_footer(); ?>
