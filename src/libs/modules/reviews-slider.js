import Swiper, { Autoplay } from 'swiper';

function init() {

    Swiper.use([ Autoplay ]);

    const reviewsSliderOne = new Swiper(".reviews__swiper-container", {
        loop: false,
        autoHeight: true,
        slidesPerView: 1,
        spaceBetween: 20,
        effect: 'slide',
        speed: 1500,
        // autoplay: {
        //     delay: 5000,
        //     disableOnInteraction: false
        // }
    });

}

export default { init }