<section class="contact-us">
        <div class="container">
          <h2 class="contact-us__title">Остались вопросы? Свяжитесь с нами!</h2>
          <p class="contact-us__sub-title">
            Оставьте свои контакты и получите максимально выгодное предложение по выполнению работ.
          </p>
          <form class="contact-us__form" action="/" method="post">
            <div class="contact-us__form-input">
              <label for="name" class="form-name">
                <input id="name" type="text" class="form-name-input" placeholder="Имя*" required>
              </label>
              <label for="tel" class="form-tel">
                <input id="tel" type="tel" class="form-tel-input" placeholder="Телефон*" required>
              </label>
              <button type="submit" class="submit-form">Оставить заявку</button>
            </div>
            <div class="contact-us__checkbox">
              <input type="checkbox" name="confirm" id="confirm" class="visually-hidden" required>
              <label for="confirm" class="contact-us__confirm">Согласен на обработку персональных данных</label>
            </div>

          </form>
        </div>
        <div class="contact-us__block-right">
          <!-- <h2 class="contact-us__block-right-title"></h2>
          <span class="contact-us__block-right-sub-title"></span> -->
        </div>
      </section>

    </main>

  <footer class="main-footer">

      <div class="main-footer__container container">

        <a href="/" class="logo-link">
          <img src="<?= get_template_directory_uri() ?>/assets/img/logo.svg" alt="" class="logo-img" width="170" height="55">
        </a>

        <!-- <nav class="footer__main-nav main-nav">
          <a href="services.html" class="main-nav__link main-nav__link--services">
            Услуги
          </a>
          <a href="about-us.html" class="main-nav__link main-nav__link--about-us">
            О нас
          </a>
          <a href="price.html" class="main-nav__link main-nav__link--price">
            Цены
          </a>
          <a href="delivery.html" class="main-nav__link main-nav__link--delivery">
            Доставка
          </a>
          <a href="contacts.html" class="main-nav__link main-nav__link--contacts">
            Контакты
          </a>
        </nav> -->


        <?php
            wp_nav_menu( array(
              'menu_class'=>'footer__main-nav main-nav',
                'theme_location'=>'bottom',
                'after'=>''
            ) );
          ?>
        <div class="footer__contacts-links contacts-links">

          <a href="" class="contacts-link contacts-link--mail">
            artur@s-copy.spb.ru
          </a>
          <a href="" class="contacts-link contacts-link--tel">
            8 (812) 309-14-79
          </a>

        </div>
        <a class="contacts-link contacts-link--adress">
            Черняховского,63/65
          </a>
      </div>

      <div class="block-info">

        <div class="block-info__container container">

          <div class="copiright">
            <p>© 2021 Все права защищены.</p>
            <p>Разработка сайта <a href="">German Web</a></p>
          </div>

          <a href="rospechat/politika-konfidenczialnosti/" class="security-policy">
            Политика обработки персональных данных
          </a>

        </div>

      </div>

    </footer>


    <div class="bid hidden">

        <div class="bid__block">

          <h2 class="bid__title">Оставить заявку</h2>
          
          <?= do_shortcode('[contact-form-7 id="33" title="Форма связи"]'); ?>

          <div class="bid__close-btn"></div>

        </div>

      </div>


      <div class="bid bid__thanks hidden">

        <div class="bid__block">

          <div class="bid__check"></div>

          <h2 class="bid__title bid__title--thanks">Спасибо!</h2>

          <p class="bid__thanks-text">
            Ваша заявка успешно отправлена
          </p>

          <div class="bid__close-btn"></div>

        </div>
      </div>

    <?php wp_footer(); ?>

  </body>
</html>
