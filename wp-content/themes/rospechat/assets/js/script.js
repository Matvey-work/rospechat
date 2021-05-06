function switchMenu(){
  let link = window.location.pathname
  let path = [
    '/uslugi/pechat-chertezhej/',
    '/uslugi/kopirovanie-chertezhej/',
    '/uslugi/falczovka-chertezhej/',
    '/uslugi/skanirovanie-chertezhej/',
    '/uslugi/broshyurovka/'
  ];

  if(path.indexOf(link) != -1){
      $('#menu-item-12').addClass('current-menu-item');
      $('.menu-item-12').addClass('current-menu-item');
  }
}

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

  $('.tech__slider').slick({
    infinite: false,
    dots: true,
    arrows: false,
    speed: 0,
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: false,
    adaptiveHeight: true,
    fade: true,
  });


  switchMenu();
});



// let btnRequest = $('.request');
let navMain = document.querySelector('.header__main-nav');
let navToggle = document.querySelector('.main-nav__toggle');

navToggle.addEventListener('click', function () {
  if (navMain.classList.contains('header__main-nav--closed')) {
    navMain.classList.remove('header__main-nav--closed');
    navMain.classList.add('header__main-nav--opened');
    // btnRequest.style.display = '';
  } else {
    navMain.classList.add('header__main-nav--closed');
    navMain.classList.remove('header__main-nav--opened');
    // btnRequest.style.display = '';

  }
});

$('.main-nav__toggle').on('click', function() {
  if($('.header__main-nav').hasClass('header__main-nav--opened')) {
    $('.request').css('display', 'flex');
  } else {
    $('.request').css('display', 'none');
  }
});





const Keys = {
  ESCAPE: 'Escape',
  ESC: 'Esc',
};

// const templateBid = document.querySelector('#bid').content;


let popupBid = document.querySelector('.bid');

// let bidCloseButton = document.querySelector('.bid__close-btn');

let questionsClick = document.querySelector('.popular-questions__item-hidden');



$(document).on('click', 'a.open-form', function () {
  $(popupBid).removeClass('hidden');
});

$(document).on("click",'.popular-questions__item',(function() {

  if ($(this).hasClass('active')) {
    $(this).removeClass('active').next().slideUp();
  } else {
    $('.popular-questions__item').removeClass('active');
    $('.popular-questions__item-hidden').slideUp();
    $(this).addClass('active').next().slideDown();
  }
}));

$(document).on('click', '.types-service__btn', function() {
  let index = $(this).index();
  // console.log(index);
  $('.types-service__btn').removeClass('types-service__btn--active');
  $(this).addClass('types-service__btn--active');

  $('.item-table').removeClass('visible');
  $('.item-table').eq(index).addClass('visible');
  // console.log($('.item-table'));
});

let wpcf7Elm = document.querySelector( '.wpcf7' );

let bidThanks = document.querySelector('.bid__thanks');

wpcf7Elm.addEventListener( 'wpcf7mailsent', function( evt ) {
  bidThanks.classList.remove('hidden');
  document.body.appendChild(bidThanks);
}, false );

$(document).on('click', '.bid__close-btn', () => {
  $('.bid').addClass('hidden');
});

// $('.tech__block-left--two').hide();
// $('.tech__block-right--two').hide();

// $(".btn1").click(function () {
//   $(".tech__block-left--two").hide();
//   $(".tech__block-right--two").hide();
//   $(".tech__block-left--one").show();
//   $(".tech__block-right--one").show();
//   $(this).addClass('tech__bulets-item--active');
//   $('.btn2').removeClass('tech__bulets-item--active');
// });

// $(".btn2").click(function () {
//   $(".tech__block-left--one").hide();
//   $(".tech__block-right--one").hide();
//   $(".tech__block-left--two").show();
//   $(".tech__block-right--two").show();
//   $(this).addClass('tech__bulets-item--active');
//   $('.btn1').removeClass('tech__bulets-item--active');

// });

// $('.tech__bulets-item').on('click', function() {
//   $('.tech__block-left--two').hide();

//   if ($(this).hasClass('tech__bulets-item--active')) {
//     $('.tech__block-left').removeClass('hidden');
//     $('.tech__block-right').removeClass('hidden');

//   } else {
//     $(this).removeClass('tech__bulets-item--active');
//     $('.tech__block-left').addClass('hidden');
//     $('.tech__block-right').addClass('hidden');
//   }
// });
