define([
    'jquery',
    'slick'
], function ($, slick) {
    'use strict';

    return function(config, element) {
        $(element).slick({
            slidesToShow: config.slidesToShow,
            slidesToScroll: config.slidesToScroll,
            autoplay: true,
            autoplaySpeed: 1000
        });
    };
});