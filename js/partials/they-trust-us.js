// JS for partial: they-trust-us\n
$(() => {
    $('.company-slide').owlCarousel({
        loop:true,
        autoplay:true,
        nav:false,
        dots: false,
        margin: 50,
        autoWidth:true,
        autoplayTimeout: 3000,
        autoplaySpeed: 9000,
        smartSpeed: 3000,
        autoplayHoverPause: true,
        slideTransition: 'linear',
        responsive:{
            0:{
                items:2
            },
            768:{
                items:4
            },
            992:{
                items:4
            }
        }
    });
});