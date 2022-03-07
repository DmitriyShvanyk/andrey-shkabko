(function () {

  'use strict';


  // load fonst
  function loadFonst(href) {
    const head = document.querySelector('head');
    const link = document.createElement('link');
    link.rel = 'stylesheet';
    link.href = href;
    head.appendChild(link)
  }
  loadFonst('https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap');



  const swiperCheme = new Swiper('.chema__swiper', {
    autoHeight: true,
    loop: true,
    // Navigation arrows
    navigation: {
      nextEl: '.chema__button-next',
      prevEl: '.chema__button-prev',
    }
  });

  const swiper = new Swiper('.reviews__swiper', {
    autoHeight: true,
    loop: true,
    // Navigation arrows
    navigation: {
      nextEl: '.reviews__button-next',
      prevEl: '.reviews__button-prev',
    }
  });


})();