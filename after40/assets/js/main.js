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
  loadFonst('https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,600;0,700;0,800;1,400;1,600;1,700;1,800&display=swap');
  loadFonst('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,600;0,700;1,600;1,700&display=swap');
  loadFonst('https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@700&display=swap');


  // scroll anchor
  function scrollAnchor() {
    let anchorLinks = document.querySelectorAll('.js-scroll');

    for (let link of anchorLinks) {
      link.addEventListener('click', (e) => {
        e.preventDefault();
        let hash = link.getAttribute('href');
        let target = document.querySelector(hash);
        if (target) {
          target.scrollIntoView({
            behavior: 'smooth',
            block: 'start'
          });
        }
        history.pushState(null, null, hash);
      });
    }
  }

  scrollAnchor();


  const initSwiper = () => {
    const swiperEl = document.querySelector('.swiper-container')
    if(!swiperEl) return

    const swiper = new Swiper(".reviews__swiper", {
      loop: true,
      slidesPerView: 1,
      spaceBetween: 10,
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      breakpoints: {
        640: {
          slidesPerView: 2,
          spaceBetween: 30,
        },
        768: {
          slidesPerView: 3,
          spaceBetween: 30,
        },
        1024: {
          slidesPerView: 3,
          spaceBetween: 30,
        },
      },
      navigation: {
        nextEl: ".reviews__swiper--next",
        prevEl: ".reviews__swiper--prev",
      },
    });
  
    const swiperAb = new Swiper(".ab__swiper", {
      loop: true,
      slidesPerView: 1,
      spaceBetween: 10,
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      breakpoints: {
        640: {
          slidesPerView: 2,
          spaceBetween: 30,
        },
        768: {
          slidesPerView: 3,
          spaceBetween: 30,
        },
        1024: {
          slidesPerView: 4,
          spaceBetween: 30,
        },
      },
      navigation: {
        nextEl: ".ab__swiper--next",
        prevEl: ".ab__swiper--prev",
      },
    });
  }

  setTimeout(()=> {
    initSwiper();
  }, 2000)


  const initCountdown = () => {
    const countdownEl = document.querySelector('.countdown');
    if(!countdownEl) return
    let countDownDate = new Date("Jan 5, 2022 15:37:25").getTime();

    // Update the count down every 1 second
    let x = setInterval(function () {

      // Get today's date and time
      let now = new Date().getTime();

      // Find the distance between now and the count down date
      let distance = countDownDate - now;

      // Time calculations for days, hours, minutes and seconds
      let days = Math.floor(distance / (1000 * 60 * 60 * 24));
      let hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
      let minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
      let seconds = Math.floor((distance % (1000 * 60)) / 1000);

      const addZero = (n) => n < 10 ? `0${n}` : n;

      // Display the result in the element
      countdownEl.innerHTML = `<div class="countdown__item">
                                  <span class="countdown__num">${addZero(days)}</span>
                                  <span class="countdown__caption">дня</span>
                              </div>
                              <div class="countdown__line"></div>
                              <div class="countdown__item">
                                  <span class="countdown__num">${addZero(hours)}</span>
                                  <span class="countdown__caption">часов</span>
                              </div>
                              <div class="countdown__dots">:</div>
                              <div class="countdown__item">
                                  <span class="countdown__num">${addZero(minutes)}</span>
                                  <span class="countdown__caption">минут</span>
                              </div>
                              <div class="countdown__dots">:</div>
                              <div class="countdown__item">
                                  <span class="countdown__num">${addZero(seconds)}</span>
                                  <span class="countdown__caption">секунд</span>
                              </div>`

      // If the count down is finished, write some text
      if (distance < 0) {
        clearInterval(x);
        countdownEl.innerHTML = "EXPIRED";
      }
    }, 1000);
  }

  initCountdown();

})();