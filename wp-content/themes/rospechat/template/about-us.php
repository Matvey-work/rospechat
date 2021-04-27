<?php
/**
 * Template Name: About-us page
 */
?>

<?php get_header(); ?>


      <section class="about-company">
        <div class="about-company__block-left">
          <h2 class="about-company__title">О нашей компании</h2>
        </div>
        <div class="about-company__container container">
          <div class="about-company__block">
            <p class="about-company__text-top">
              Наша компания специализируется на распечатке и обработке технической документации, сотрудничает с частными лицами, коммерчески организациями и государственными учреждениями. К услугам клиентов высокоточное оборудование и квалифицированные специалисты.
            </p>
            <p class="about-company__text-center">
              Заказчикам доступна цветная и черно-белая печать. Возможна работа с чертежами, графиками, диаграммами, топографическими планами и текстом. Также в наличии услуги по копированию и сканированию документов, их брошюровке и фальцовке. Операции выполняются согласно отраслевым нормативам, что гарантирует достижение безупречного результата.
            </p>
            <p class="about-company__text-bottom">
              Содействие в оформлении заказа оказывают штатные консультанты. Они информируют о параметрах сотрудничества, предлагают решения, соответствующие пожеланиям клиента. Специалисты расскажут о требованиях к исходным материалам, сроках выполнения работ, действующих расценках. Для формирования заявки воспользуйтесь телефоном или функционалом сайта. Будем рады Вашему обращению!
            </p>
          </div>

        </div>
      </section>

      <section class="our-production">
        <div class="container">
          <h2 class="our-production__title">Наше производство</h2>
          <p class="our-production__text">
            Наше предприятие располагает обширной производственной базой, осуществляет эффективную реализацию проектов любой сложности. В работу принимаются заявки, связанные с распечаткой, копированием и сканированием чертежей, а также смежной документации.
          </p>
          <div class="our-production__slider">
            <div><img src="<?= get_template_directory_uri() ?>/assets/img/our-production-img-slider.jpg" alt=""></div>
            <div><img src="<?= get_template_directory_uri() ?>/assets/img/our-production-img-slider.jpg" alt=""></div>
            <div><img src="<?= get_template_directory_uri() ?>/assets/img/our-production-img-slider.jpg" alt=""></div>
          </div>
        </div>
        <div class="our-poduction__block-bottom-right">
          <p class="our-production__text-bottom">
            В ассортименте широкий спектр услуг, посвященный брошюровке и фальцеванию. Компоновка материалов осуществляется в соответствии с требованиями ГОСТа. При этом учитывается размерность и оформление продукции, особые пожелания со стороны клиента. В рамках упаковочных операций задействуются профильные папки, брошюры с металлическими и полимерными пружинами. Бумаги складываются без лишних замятий и повреждений, проверяются на предмет целостности.
          </p>
          <p class="our-production__text-bottom">
            Изготовление и обработка продукции происходит на промышленных плоттерах и сканерах. Техника обладает высокой производительностью, обеспечивает точное выполнение процедур. Получаемые документы соответствуют высочайшим стандартам качества, подходят для реализации частных, муниципальных и коммерческих проектов.
          </p>
        </div>
        <div class="our-poduction__block-bottom-left">
          <p class="our-poduction__block-bottom-left-text">
            Немного производственного процесса
          </p>
        </div>
      </section>

      <section class="features features--bg">
        <p class="features__text-top">Преимущества</p>
        <div class="container">
          <div class="features__block-left">
            <h2 class="features__title features__title--about">Почему мы</h2>
            <ul class="features__list">
              <li class="features__item">
                <span class="features__item-number">' 01</span>
                <p class="features__item-text-top">Гарантия качества</p>
                <p class="features__item-text-bottom">
                  Сертифицированные расходные материалы
                 </p>
              </li>
              <li class="features__item">
                <span class="features__item-number">' 02</span>
                <p class="features__item-text-top">Современное оборудование</p>
                <p class="features__item-text-bottom">
                  При распечатке задействуется специализированная техника
                 </p>
              </li>
              <li class="features__item">
                <span class="features__item-number">' 03</span>
                <p class="features__item-text-top">Оперативность</p>
                <p class="features__item-text-bottom">
                  Заявки выполняются в сжатые сроки
                 </p>
              </li>
              <li class="features__item">
                <span class="features__item-number">' 04</span>
                <p class="features__item-text-top">Индивидуальный подход</p>
                <p class="features__item-text-bottom">
                  Каждый заказчик обслуживается персональным менеджером
                 </p>
              </li>
            </ul>
          </div>
        </div>
      </section>

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
