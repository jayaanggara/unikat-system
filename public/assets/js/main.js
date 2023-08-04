$('.slider-default').owlCarousel({
    loop:false,
    margin:10,
    dots: false,
    navText: ['<img class="icon-slider" src="../assets/images/icon/left.png">', '<img class="icon-slider" src="../assets/images/icon/right.png">'],
    autoHeight: true,
    responsive:{
        0:{
            nav:false,
            items:1
        },
        600:{
            nav:true,
            items:2
        },
        1000:{
            nav:true,
            items:3
        }
    }
});


$('.slider-one').owlCarousel({
    loop:false,
    nav:true,
    dots: false,
    navText: ['<img class="icon-slider" src="../assets/images/icon/left-white.png">', '<img class="icon-slider" src="../assets/images/icon/right-white.png">'],
    autoHeight: true,
    items:1,
});

$('.slider-tour').owlCarousel({
    loop:false,
    nav:true,
    dots: false,
    navText: ['<img class="icon-slider" src="../assets/images/icon/left.png">', '<img class="icon-slider" src="../assets/images/icon/right.png">'],
    autoHeight: true,
    items:1,
    responsive:{
        0:{
            nav:false,
            items:1
        },
        600:{
            nav:true,
            items:1
        },
        1000:{
            nav:true,
            items:1
        }
    }
});


$('.slider-fide-effect').owlCarousel({
    loop:false,
    nav:false,
    dots: false,
    autoplay:true,
    animateOut: 'fadeOut',
    autoplayTimeout:1000,
    autoplayHoverPause:false,
    autoHeight: true,
    items:1,
});

$('.slider-blur').owlCarousel({
    loop:false,
    margin:10,
    dots: false,
    navText: ['<img class="icon-slider" src="../assets/images/icon/left.png" style="top: 0;position: absolute;left: 0;">', '<img class="icon-slider" src="../assets/images/icon/right.png" style="right: 0;position: absolute;top: 0;">'],
    autoHeight: true,
    responsive:{
        0:{
            items:1,
            nav:false,
        },
        600:{
            nav:true,
            stagePadding: 150,
            items:1
        },
        1000:{
            nav:true,
            startPosition: 1,
            stagePadding: 300,
            items:1
        }
    }
});

$('.slider-no-nav').owlCarousel({
    loop:false,
    margin:10,
    nav:false,
    dots: false,
    autoHeight: true,
    responsive:{
        0:{
            items:1,
            stagePadding: 100,
            startPosition: 1,
        },
        600:{
            items:3,
            stagePadding: 100,
        },
        1000:{
            stagePadding: 100,
            items:3
        }
    }
});



