
jQuery(document).ready(function ($) {
    $('.loop').owlCarousel({

        items: 1,
        loop: true,
        margin: 18,
        responsive: {
            600: {
                items: 3
            }
        }
    });
    $('.nonloop').owlCarousel({

        items: 1,
        loop: true,
        margin: 18,
        responsive: {
            600: {
                items: 3
            }
        }
    });
});