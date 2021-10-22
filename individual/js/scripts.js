;
(function () {

	"use strict";

	// load fonst
	function loadFonst(href) {
		const head = document.querySelector('head');
		const link = document.createElement('link');
		link.rel = 'stylesheet';
		link.href = href;
		head.appendChild(link)
	}
	loadFonst('https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap');


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
	

	// initNavbar
	function initNavbar() {
		const navbar = document.querySelector('.navbar');
		const navbarCollapse = navbar.querySelector('.navbar__collapse');
		const navbarHamburger = navbar.querySelector('.navbar__hamburger');
		const navbarClose = navbar.querySelector('.navbar__close');

		function showNavbarCollapse() {
			navbarCollapse.classList.add('navbar__collapse--active');
		}

		function hideNavbarCollapse() {
			navbarCollapse.classList.remove('navbar__collapse--active');
		}

		const menuLinks = document.querySelectorAll('.menu__link');
		menuLinks.forEach(el => el.addEventListener('click', () => {
			hideNavbarCollapse();
		}))

		navbarHamburger.addEventListener('click', showNavbarCollapse);
		navbarClose.addEventListener('click', hideNavbarCollapse);
	}

	initNavbar();


	const garant = document.querySelector('.garant');
	const garantStars = `<img class="garant__bg-star garant__bg-star--1 lazyload" loading="lazy" data-src="img/garant/bg-star-1.png" alt="">
	<img class="garant__bg-star garant__bg-star--2 lazyload" loading="lazy" data-src="img/garant/bg-star-2.png" alt="">`

	const app = document.querySelectorAll('.app');
	const appStars = `<img class="app__bg-star app__bg-star--1 lazyload" loading="lazy" data-src="img/app/bg-star-1.png" alt="">
	<img class="app__bg-star app__bg-star--2 lazyload" loading="lazy" data-src="img/app/bg-star-2.png" alt="">`

	setTimeout(() => {
		garant.insertAdjacentHTML('beforeend', garantStars)
		app.forEach(s => s.insertAdjacentHTML('beforeend', appStars))
	}, 2500);



})();