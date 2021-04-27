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

let navMain = document.querySelector('.header__main-nav');
let navToggle = document.querySelector('.main-nav__toggle');

navToggle.addEventListener('click', function () {
  if (navMain.classList.contains('header__main-nav--closed')) {
    navMain.classList.remove('header__main-nav--closed');
    navMain.classList.add('header__main-nav--opened');
  } else {
    navMain.classList.add('header__main-nav--closed');
    navMain.classList.remove('header__main-nav--opened');
  }
});

// $(navToggle).on('click', function() {
//   $(navMain).toggleClass('header__main-nav--opened');
// })





const Keys = {
  ESCAPE: 'Escape',
  ESC: 'Esc',
};

// const templateBid = document.querySelector('#bid').content;


let popupBid = document.querySelector('.bid');

let bidCloseButton = document.querySelector('.bid__close-btn');

let questionsClick = document.querySelector('.popular-questions__item-hidden');


// let btnRequest = document.querySelector('.request');
// console.log(btnRequest);

// btnRequest.addEventListener('click', (evt) => {
//   // console.log(123);
//   evt.preventDefault();
//   // console.log(123);
//   popupBid.classList.remove('hidden');
// });

$(bidCloseButton).on('click', () => {
  popupBid.addClass('hidden');
});

$(document).on('click', 'a.request', function () {
  popupBid.removeClass('hidden');
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
})

