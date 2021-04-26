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


// const Keys = {
//   ESCAPE: 'Escape',
//   ESC: 'Esc',
// };

// const templateBid = document.querySelector('#bid').content;
// const popupBid = templateBid.querySelector('.bid').cloneNode(true);
// const bidButton = popupBid.querySelector('.bid__close-btn');

// const closePopup = (popup, button) => {
//   document.addEventListener('click', () => {
//     popup.remove();
//   }, {once: true});

//   document.addEventListener('keydown', (evt) => {
//     if (evt.key === Keys.ESCAPE || evt.key === Keys.ESC) {
//       popup.remove();
//     }
//   }, {once: true});

//   if (button) {
//     button.addEventListener('click', () => {
//       popup.remove();
//     }, {once: true});
//   }
// };

// const showBid = () => {
//   document.body.append(popupBid);
// };



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
