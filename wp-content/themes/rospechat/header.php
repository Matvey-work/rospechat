<?php

?>

<!DOCTYPE html>
<html lang="ru" class="page">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php the_title(); ?></title>
    <?php wp_head(); ?>
</head>
  <body <?php body_class('page-body')?>>
    <?= wp_body_open(); ?>
    <div class="container">

      <header class="main-header header">



        <a href="/" class="header__logo-link logo-link">
          <img src="<?= get_template_directory_uri() ?>/assets/img/logo.svg" alt="" class="logo-img" width="170" height="55">
        </a>

        <?php
            wp_nav_menu( array(
              'menu_class'=>'header__main-nav main-nav header__main-nav--closed',
                'theme_location'=>'top',
                'after'=>''
            ) );
          ?>
        <nav class="header__main-nav main-nav header__main-nav--closed">

          <!-- <div class="main-nav__list">
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
            <a href="#" class="request request--mobile">Оставить заявку</a>
          </div>
          <button type="button" class="header__btn main-nav__toggle"></button>
        </nav> -->
        <button type="button" class="header__btn main-nav__toggle"></button>
        <div class="header__contacts-links contacts-links">
          <a href="" class="contacts-link contacts-link--mail">
            artur@s-copy.spb.ru
          </a>
          <a href="" class="contacts-link contacts-link--tel">
            8 (812) 309-14-79
          </a>
        </div>
        <a href="#" class="request">Оставить заявку</a>
      </header>
    </div>

    <main class="main">
