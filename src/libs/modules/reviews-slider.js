import Swiper, { Autoplay } from 'swiper';

function init() {

    Swiper.use([ Autoplay ]);

    const partnersSliderOne = new Swiper(".reviews__swiper-container", {
        loop: true,
        autoHeight: true,
        slidesPerView: 1,
        spaceBetween: 20,
        effect: 'slide',
        speed: 1500,
        autoplay: {
            delay: 5000,
            disableOnInteraction: false
        }
    });

}

export default { init }