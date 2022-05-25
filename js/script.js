let nav1 = document.querySelectorAll('.nav-link');
nav1.forEach(function(el1) {
    if (window.location.pathname.indexOf(el1.getAttribute('href')) > -1) {
        el1.classList.add('active');
        console.log('dsfsd1');
    }
});
let nav = document.querySelectorAll('.pag');
nav.forEach(function(e) {
    if (window.location.pathname.indexOf(e.getAttribute('href')) > -1) {
        e.classList.add('active_pag');
        console.log('dsfsd2');
    }
});




var swiper = new Swiper(".mySwiper", {
    speed: 2000,
    allowTouchMove: false,
    autoplay: {
        delay: 5000,
    },
});


AOS.init();


var swiper = new Swiper(".mySwiper1", {
    slidesPerView: 4,
    spaceBetween: 60,
    speed: 3000,
    loop: true,
    freeMode: true,
    autoplay: {
        delay: 2500,
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
});

var swiper = new Swiper(".mySwiper2", {
    speed: 3000,
    autoplay: {
        delay: 5000,
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
});



function rotatenumbers() {
    let g = document.querySelector("#god");
    let prod = document.querySelector("#prod");
    let r = document.querySelector("#rinok");
    let p = document.querySelector("#pozic");
    let k = document.querySelector("#krepij");
    if (Number(g.innerHTML) == Number(g.dataset.max) && Number(prod.innerHTML) == Number(prod.dataset.max) && Number(r.innerHTML) == Number(r.dataset.max) && Number(p.innerHTML) == Number(p.dataset.max) && Number(k.innerHTML) == Number(k.dataset.max)) {
        clearInterval(timer);
    } else {
        if (Number(g.innerHTML) < Number(g.dataset.max)) {
            g.innerHTML = Number(g.innerHTML) + 1;
        }
        if (Number(prod.innerHTML) < Number(prod.dataset.max)) {
            prod.innerHTML = Number(prod.innerHTML) + 1;
        }
        if (Number(r.innerHTML.slice(0, r.innerHTML.indexOf('%'))) < Number(r.dataset.max)) {
            r.innerHTML = Number(r.innerHTML.slice(0, r.innerHTML.indexOf('%'))) + 1;
            r.innerHTML += "%";
        }
        if (Number(p.innerHTML) < Number(p.dataset.max)) {
            p.innerHTML = Number(p.innerHTML) + 1;
        }
        if (Number(k.innerHTML) < Number(k.dataset.max)) {
            k.innerHTML = Number(k.innerHTML) + 1;
        }

    }
}
var timer = setInterval(rotatenumbers, 100);

document.addEventListener('DOMContentLoaded', () => {

    const inputElement = document.querySelector('.tel') // ищем наш единственный input
    const maskOptions = { // создаем объект параметров
        mask: '+{7}(000)000-00-00' // задаем единственный параметр mask
    }
    IMask(inputElement, maskOptions) // запускаем плагин с переданными параметрами

})