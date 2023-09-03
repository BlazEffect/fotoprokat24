import { Slider } from './blocks/slider';

import('./blocks/login-popup');

let banners = document.querySelector('.main__banners');

new Slider(banners, {
    autoplay: false,
    autoplayTime: 3000,
    dots: false,
});
