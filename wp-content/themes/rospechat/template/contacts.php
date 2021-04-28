<?php
/**
 * Template Name: Contacts page
 */
?>

<?php get_header(); ?>

      <section class="our-contacts">
        <div class="our-contacts__block-left"></div>
        <div class="our-contacts__map">
          <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A5cd0af7409512bbc1b2e717324dc6b7066608c729a753bac074d60f22facf092&amp;width=100%25&amp;height=545&amp;lang=ru_RU&amp;scroll=true"></script>
        </div>
        <div class="container">

          <div class="our-contacts__adress">
            <h2 class="our-contacts__title">Наши контакты</h2>
            <div class="our-contacts__adress-top">
              <h3>Санкт-Петербург</h3>
              <div class="block-contacts">
                <a href="mailto:artur@s-copy.spb.ru" class="our-contacts__mail">artur@s-copy.spb.ru</a>
                <a href="tel:+78123091479" class="our-contacts__tel">8 (812) 309-14-79</a>
                <p class="our-contacts__adress">22-я линия Васильевского острова 3, корп. 3</p>
              </div>
            </div>
            <div class="our-contacts__adress-bottom">
              <h3>Москва</h3>
              <div class="block-contacts">
                <a href="mailto:artur@s-copy.spb.ru" class="our-contacts__mail">artur@s-copy.spb.ru</a>
                <a href="tel:+78123091479" class="our-contacts__tel">8 (812) 309-14-79</a>
                <p class="our-contacts__adress">Октябрьская улица, 80с2</p>
              </div>
            </div>
          </div>

        </div>

      </section>

      <section class="popular-questions popular-questions--contacts">
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