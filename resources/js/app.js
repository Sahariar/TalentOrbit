import './bootstrap';

import { createPopper } from '@popperjs/core';
import Choices from 'choices.js';
import GLightbox from 'glightbox';
import Gumshoe from 'gumshoejs';
import Masonry from 'masonry-layout';
import noUiSlider from 'nouislider';
import { lighten } from 'polished';
import SimpleBar from 'simplebar';
import SmoothScroll from 'smooth-scroll';
import Alpine from 'alpinejs';
import Swiper from 'swiper';
import 'swiper/css';


window.Alpine = Alpine;

Alpine.start();





/********************* Menu Js **********************/

//  Window scroll sticky class add
function windowScroll() {
    const navbar = document.getElementById("navbar");
    if (
        document.body.scrollTop >= 50 ||
        document.documentElement.scrollTop >= 50
    ) {
        navbar.classList.add( "shadow", "nav-sticky");
    } else {
        navbar.classList.remove( "shadow", "nav-sticky");
    }
}

window.addEventListener('scroll', (ev) => {
    ev.preventDefault();
    windowScroll();
})


//menu active & scrollspy
var sections = document.querySelectorAll('.section');
window.onscroll = function () {
    var scrollPos = document.documentElement.scrollTop || document.body.scrollTop;
    for (var elem in sections) {
        if (sections.hasOwnProperty(elem) && (sections[elem].offsetTop - 105) <= scrollPos) {
            var id = sections[elem].id;
            if (id) {
                document.querySelector('#navbar .navbar-nav .active').classList.remove('active');
                document.querySelector('#navbar .navbar-nav .nav-link[href*=' + id + ']').parentNode.classList.add('active');
            }
        }
    }
};


// navbar toggler
document.getElementById("navbar").querySelector(".navbar-toggler").addEventListener("click", function () {
    var getAttr = this.getAttribute("data-collapse-toggle");
    if (document.getElementById(getAttr).classList.contains("hidden")) {
        document.getElementById(getAttr).classList.remove("hidden");
    } else {
        document.getElementById(getAttr).classList.add("hidden");
    }
});

window.addEventListener('resize', function(){
    document.getElementById('navbar-collapse').classList.add("hidden");
});





/************** Testimonial Slider *************/

var swiper = new Swiper(".testimonialSlider", {
    loop: true,
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    autoplay: {
        delay: 2500,
        disableOnInteraction: false,
    },
    breakpoints: {
        200: {
            slidesPerView: 1,
            spaceBetween: 10,
        },
        992: {
            slidesPerView: 1,
            spaceBetween: 20,
        }
    }
});

var swiper = new Swiper(".homeslider", {
    slidesPerView: "auto",
    loop: true,
    spaceBetween: 20,
    autoplay: {
        delay: 2500,
        disableOnInteraction: false,
    },

});
