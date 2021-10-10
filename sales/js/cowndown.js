(function () {

    'use strict';

    const cowndownEl = document.querySelectorAll('.cowndown')

    // Set the date we're counting down to
    let countDownDate = new Date("Sept 3, 2021 23:59:59").getTime();

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

        const addZero = (n) => n > 9 ? n : `0${n}`

        // Display the result in the element
        cowndownEl.forEach(el => el.innerHTML = `<div>${addZero(days)}<span>дней</span></div>` + " : " + `<div>${addZero(hours)}<span>часов</span></div>` + " : " + `<div>${addZero(minutes)}<span>минут</span></div>` + " : " + `<div>${addZero(seconds)}<span>секунд</span></div>`)

        // If the count down is finished, write some text
        if (distance < 0) {
            clearInterval(x);
            cowndownEl.forEach(el => el.innerHTML = "EXPIRED")
        }
    }, 1000);

})();