<?php
/**
* Enqueue scripts and styles.
*/

function all_scripts() {

    wp_enqueue_style('slick-css', get_template_directory_uri().'/assets/css/slick.css');
    wp_enqueue_style('main-css', get_template_directory_uri().'/assets/css/style.css');

    wp_enqueue_script('jquery-script', get_template_directory_uri() . '/assets/js/jquery.js', [], false, true);
    wp_enqueue_script('slick-script', get_template_directory_uri() . '/assets/js/slick.js', [], false, true);
    wp_enqueue_script('main-script', get_template_directory_uri() . '/assets/js/script.js', [], false, true);
}
add_action( 'wp_enqueue_scripts', 'all_scripts' );

add_filter( 'body_class','page_body_class');

function page_body_class( $classes ) {

  if (is_front_page()) {
    $classes[] = 'page-body--bg';
  }
    return $classes;
};

register_nav_menus(array(
  'top' => 'Верхнее меню',
  'bottom' => 'Нижнее меню',
));

add_filter( 'wp_nav_menu_args', 'my_wp_nav_menu_args' );
function my_wp_nav_menu_args( $args='' ){

  $args['container'] = '';

  return $args;
}

add_theme_support('widgets');

function header_widgets(){
	register_sidebar( array(
		'name' => 'Телефон и почта - шапка',
		'id' => 'widjets-header',
		'description' => 'Выводиться в шапке сайта.',
		'before_widget' => '<li class="widget-block">',
		'after_widget' => '</li>',
		'before_title' => '<h2 class="widgettitle">',
		'after_title' => '</h2>',
	) );
}
add_action( 'widgets_init', 'header_widgets' );

function footer_widgets(){
	register_sidebar( array(
		'name' => 'Телефон и почта - подвал',
		'id' => 'widjets-footer',
		'description' => 'Выводиться в подвале сайта.',
		'before_widget' => '<li class="widget-block">',
		'after_widget' => '</li>',
		'before_title' => '<h2 class="widgettitle">',
		'after_title' => '</h2>',
	) );
}
add_action( 'widgets_init', 'footer_widgets' );
