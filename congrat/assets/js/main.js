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

})();