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
      $('#menu-item-12').addClass('current-menu-item')
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

let bidCloseButton = document.querySelector('.bid__close-btn');

let questionsClick = document.querySelector('.popular-questions__item-hidden');



$(bidCloseButton).on('click', () => {
  $('.bid').addClass('hidden');
});

$(document).on('click', 'a.request', function () {
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

$('.main-nav__link a').click(function() {

  //optional - override the link - uncomment the following line:
  // e.preventDefault();

  //remove the active class from all li elements
  $('.main-nav li').removeClass('main-nav__link--active');

  //add it to the li element holding the clicked link
  $('.main-nav li').addClass('main-nav__link--active');

  });

