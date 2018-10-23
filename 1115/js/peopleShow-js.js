$(document).ready(function () {

    $('.autoplay').slick({
        slidesToShow: 5,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
    });
    
    var swiper = new Swiper('.swiper-container', {
        speed: 600,
        parallax: true,
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });



});

