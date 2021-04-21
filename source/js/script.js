$(document).ready(function(){
  $('.sliders').slick({
    infinite: true,
    dots: true,
    arrows: true,
    dotsClass: 'slick-dots',
    speed: 300,
    // centerMode: true,
    // centerPadding: '60px',
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: false,
    // autoplaySpeed: 3100,
    adaptiveHeight: true,
    cssEase: 'linear',
  });
  $('.our-production__slider').slick({
    infinite: true,
    dots: false,
    arrows: true,
    speed: 300,
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: false,
    adaptiveHeight: true,
    cssEase: 'linear',
  });
});
// $('.slider-nav').slick({
//   slidesToScroll: 1,
//   asNavFor: '.slider-for',
//   centerMode: true,
//   focusOnSelect: true
// });

// $('.vacancy-item').on('click', function(){
//   if ($(this).find('.more-info').hasClass('visible')) {
//     $(this).find('.more-info').removeClass('visible');
//   } else {
//     $('.more-info').removeClass('visible');
//     $(this).find('.more-info').addClass('visible');
//   }
// });

// var vacancy_list = $('.vacancy-item');

// $('.vacancy-item').on('click', function(){
//   if ($(this).hasClass('active')) {
//     $(this).removeClass('active');
//   } else {
//     for (var i = 0; i < vacancy_list.length; i++) {
//       vacancy_list[i].classList.remove('active');
//     }
//     $(this).addClass('active');

//   }

// });


// let navMain = document.querySelector('.main-nav');
// let navToggle = document.querySelector('.main-nav-toggle');

// navToggle.addEventListener('click', function () {
//   if (navMain.classList.contains('main-nav--closed')) {
//     navMain.classList.remove('main-nav--closed');
//     navMain.classList.add('main-nav--opened');
//   } else {
//     navMain.classList.add('main-nav--closed');
//     navMain.classList.remove('main-nav--opened');
//   }
// });
