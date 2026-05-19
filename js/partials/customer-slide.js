$(()=>{
    $('.customer-slide').owlCarousel({
        loop:true,
        autoplay:true,
        nav:false,
        dots: false,
        margin: 20,
        autoplayTimeout: 2000,
        autoplaySpeed: 2000,
        smartSpeed: 2000,
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
                items:6
            }
        }
    });
})