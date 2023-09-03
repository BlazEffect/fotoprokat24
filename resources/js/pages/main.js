import { Slider } from '../blocks/slider';

let banners = document.querySelector('.main__banners');

if (banners) {
    new Slider(banners, {
        autoplay: false,
        autoplayTime: 3000,
        dots: false,
    });
}
