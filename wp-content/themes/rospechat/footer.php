<?php
 $pageId = get_the_ID();
 if($pageId != "22") { ?>

  <section class="contact-us">
        <div class="container">
          <h2 class="contact-us__title">Остались вопросы? Свяжитесь с нами!</h2>
          <p class="contact-us__sub-title">
            Оставьте свои контакты и получите максимально выгодное предложение по выполнению работ.
          </p>

          <?= do_shortcode('[contact-form-7 id="432" title="Контактная форма"]'); ?>

        </div>
        <div class="contact-us__block-right">

        </div>
</section>

<?php
}
?>



    </main>

  <footer class="main-footer">

      <div class="main-footer__container container">

        <a href="/" class="header__logo-link logo-link">
        <img src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="" />
        </a>

        <?php
            wp_nav_menu( array(
              'menu_class'=>'footer__main-nav main-nav',
                'theme_location'=>'bottom',
                'after'=>''
            ) );
          ?>

        <div class="footer__contacts-links contacts-links">

          <div class="custom">

          <?php

            if ( function_exists('dynamic_sidebar') )

            dynamic_sidebar('widjets-footer');

          ?>
          </div>
        </div>
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
