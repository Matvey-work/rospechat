<?php
	/*
	Template Name: Одна услуга
	Template Post Type: post
    */
?>
<?php get_header(); ?>




      <section class="drawing-section drawing-section--scan">
        <div class="container">
          <h2 class="drawing-section__title"><?php the_title(); ?></h2>
          <p class="drawing-section__text-top drawing__text">

          <?= get_field('detalnoe_opisanie'); ?>

          </p>
          <p class="drawing-section__text-bottom">

          <?= get_field('detalnoe_opisanie2'); ?>

          </p>
          <a href="#" class="drawing-section__btn">Оформить заказ</a>
        </div>
      </section>


      <section class="types-service">
        <div class="container">
          <h2 class="types-service__title">Стоимость печати чертежей</h2>
          <div class="types-service__item">
            <table width="100%">
              <tr>
                <th><?= get_field('zagolovok1'); ?></th>
                <th><?= get_field('zagolovok2'); ?></th>
                <th><?= get_field('zagolovok3'); ?></th>
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



  <section class="karyera">
    <div class="container">
      <!-- <div class="breadcrumbs"> -->
        <?php // if( function_exists('kama_breadcrumbs') ) kama_breadcrumbs(' | '); ?>
      <!-- </div> -->
      <h1 class="title-h1">
        <?php the_title(); ?>
      </h1>
      <p class="karyera__text">
        Сделай карьеру в German Web
      </p>
    </div>
  </section>
  <section class="karyera__one">
    <div class="container">
      <div class="karyera_box_wrap">
        <div class="karyera_box">
          <h3 class="title-h3">
            О нас
          </h3>
          <div class="karyera__text1">
            Компания German Web занимается разработкой эффективных и оригинальных сайтов различного уровня сложности.
          </div>
          <div class="karyera__text1">
            Мы предлагаем создание сайтов на базе современных систем управления содержимым – UMI.CMS, WordPress, PrestaShop, Joomla и др.
          </div>
          <div class="karyera__text1">
            За плечами нашей веб-студии успешный опыт работы как с российскими, так и с зарубежными компаниями.
          </div>
          <div class="karyera__text1">
            Все этапы разработки сайтов мы делаем максимально открытыми и прозрачными.
          </div>
        </div>
        <div class="karyera_box1">
          <img src="<?php echo get_template_directory_uri() ?>/assets/images/karyera.png" alt="German Web" title="German Web - Карьера">
        </div>
      </div>
      <h3 class="title-h3">
        Обязанности
      </h3>
      <div class="karyera_box_wrap1">
        <?php if (get_field('obyazanosti_1')): ?>
        <div class="karyera_item">
          <span>1<span class="separ">/</span></span>
          <span><?php the_field('obyazanosti_1'); ?></span>
        </div>
        <?php endif; ?>
        <?php if (get_field('obyazanosti_2')): ?>
        <div class="karyera_item">
          <span>2<span class="separ">/</span></span>
          <span><?php the_field('obyazanosti_2'); ?></span>
        </div>
        <?php endif; ?>
        <?php if (get_field('obyazanosti_3')): ?>
        <div class="karyera_item">
          <span>3<span class="separ">/</span></span>
          <span><?php the_field('obyazanosti_3'); ?></span>
        </div>
        <?php endif; ?>
        <?php if (get_field('obyazanosti_4')): ?>
        <div class="karyera_item">
          <span>4<span class="separ">/</span></span>
          <span><?php the_field('obyazanosti_4'); ?></span>
        </div>
        <?php endif; ?>
        <?php if (get_field('obyazanosti_5')): ?>
        <div class="karyera_item">
          <span>5<span class="separ">/</span></span>
          <span><?php the_field('obyazanosti_5'); ?></span>
        </div>
        <?php endif; ?>
        <?php if (get_field('obyazanosti_6')): ?>
        <div class="karyera_item">
          <span>6<span class="separ">/</span></span>
          <span><?php the_field('obyazanosti_6'); ?></span>
        </div>
        <?php endif; ?>
        <?php if (get_field('obyazanosti_7')): ?>
        <div class="karyera_item">
          <span>7<span class="separ">/</span></span>
          <span><?php the_field('obyazanosti_7'); ?></span>
        </div>
        <?php endif; ?>
      </div>
      <h3 class="title-h3">
        Требования
      </h3>
      <div class="karyera_box_wrap1">
        <?php if (get_field('trebovaniya_1')): ?>
        <div class="karyera_item">
          <span>1<span class="separ">/</span></span>
          <span><?php the_field('trebovaniya_1'); ?></span>
        </div>
        <?php endif; ?>
        <?php if (get_field('trebovaniya_2')): ?>
        <div class="karyera_item">
          <span>2<span class="separ">/</span></span>
          <span><?php the_field('trebovaniya_2'); ?></span>
        </div>
        <?php endif; ?>
        <?php if (get_field('trebovaniya_3')): ?>
        <div class="karyera_item">
          <span>3<span class="separ">/</span></span>
          <span><?php the_field('trebovaniya_3'); ?></span>
        </div>
        <?php endif; ?>
        <?php if (get_field('trebovaniya_4')): ?>
        <div class="karyera_item">
          <span>4<span class="separ">/</span></span>
          <span><?php the_field('trebovaniya_4'); ?></span>
        </div>
        <?php endif; ?>
        <?php if (get_field('trebovaniya_5')): ?>
        <div class="karyera_item">
          <span>5<span class="separ">/</span></span>
          <span><?php the_field('trebovaniya_5'); ?></span>
        </div>
        <?php endif; ?>
        <?php if (get_field('trebovaniya_6')): ?>
        <div class="karyera_item">
          <span>6<span class="separ">/</span></span>
          <span><?php the_field('trebovaniya_6'); ?></span>
        </div>
        <?php endif; ?>
        <?php if (get_field('trebovaniya_7')): ?>
        <div class="karyera_item">
          <span>7<span class="separ">/</span></span>
          <span><?php the_field('trebovaniya_7'); ?></span>
        </div>
        <?php endif; ?>
      </div>
      <h3 class="title-h3">
        Условия
      </h3>
      <div class="karyera_box_wrap1 karyera_box_wrap2">
        <div class="karyera_item">
          <span>1<span class="separ">/</span></span>
          <span>Работа в современном и комфортном офисе.</span>
        </div>
        <div class="karyera_item">
          <span>2<span class="separ">/</span></span>
          <span>У нас есть выделенная зона отдыха, где вы можете отдохнуть и отвлечься от работы.</span>
        </div>
        <div class="karyera_item">
          <span>3<span class="separ">/</span></span>
          <span>Чай, кофе и все, что к ним полагается.</span>
        </div>
        <div class="karyera_item">
          <span>4<span class="separ">/</span></span>
          <span>Компьютер на выбор – MacBookPro или Windows.</span>
        </div>
        <div class="karyera_item">
          <span>5<span class="separ">/</span></span>
          <span>Гибкое начало рабочего дня.</span>
        </div>
        <div class="karyera_item">
          <span>6<span class="separ">/</span></span>
          <span>Официальное трудоустройство.</span>
        </div>
        <div class="karyera_item">
          <span>7<span class="separ">/</span></span>
          <span>Неформальный обед с пиццей, каждые 2 недели по пятницам.</span>
        </div>
        <div class="karyera_item">
          <span>8<span class="separ">/</span></span>
          <span>При хороших результатах и эффективной работе, Ваш доход будет от 50 т.р. и выше!</span>
        </div>
        <div class="karyera_item">
          <span>9<span class="separ">/</span></span>
          <span>График – 5/2 9-18 (8 ч).</span>
        </div>
      </div>
      <?php echo do_shortcode('[contact-form-7 id="208" title="Контактная форма карьера"]'); ?>
      <div class="karyera__text1">
        Мы всегда открыты для новых предложений, но плоды Вашей работы зависят исключительно от Вас. Кандидаты на удалённую работу нас не интересуют.
      </div>
    </div>
  </section>
<?php get_footer(); ?>
