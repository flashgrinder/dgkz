import Swiper, { Autoplay } from 'swiper';

function init() {

    Swiper.use([ Autoplay ]);

    const partnersSliderOne = new Swiper(".partners__item--slider-one", {
        loop: true,
        autoHeight: true,
        slidesPerView: 5,
        spaceBetween: 20,
        effect: 'slide',
        speed: 10000,
        autoplay: {
            delay: 0,
            disableOnInteraction: false
        },
        breakpoints: {
            320: {
              slidesPerView: 2,
            },
            768: {
              slidesPerView: 4,
            },
            1280: {
              slidesPerView: 5,
            }
        }
    });

}

export default { init }