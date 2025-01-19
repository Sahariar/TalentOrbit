import Swiper from 'swiper';
import 'swiper/css';


var swiper = new Swiper(".login-slider", {
    spaceBetween: 30,
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    loop:true,
});
