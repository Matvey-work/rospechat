<?php
register_sidebar( $args );
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

        <button type="button" class="header__btn main-nav__toggle"></button>
        <div class="header__contacts-links contacts-links">
        <div class="custom">

        <?php

        if ( function_exists('dynamic_sidebar') )

        dynamic_sidebar('widjets-header');

        ?>
        </div>

        </div>
        <a href="#" class="request">Оставить заявку</a>
      </header>
    </div>

    <main class="main">
