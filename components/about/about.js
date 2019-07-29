$(".about-slider").slick({
    dots: true,
    infinite: true,
    arrows: false,
    speed: 500,
    slidesToShow: 1,
    slidesToScroll: 1,
    adaptiveHeight: false,
    prevArrow: '<button class="arrow-slider prev-arrow"><i class="fas fa-chevron-left"></i></button>',
    nextArrow: '<button class="arrow-slider next-arrow"><i class="fas fa-chevron-right"></i></button>',
    responsive: [
        {
            breakpoint: 576,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows: false,
            }
        },
    ],
});

$(".about-logo-slider").slick({
    dots: true,
    infinite: true,
    arrows: false,
    speed: 500,
    slidesToShow: 3,
    slidesToScroll: 3,
    adaptiveHeight: false,
    prevArrow: '<button class="arrow-slider prev-arrow"><i class="fas fa-chevron-left"></i></button>',
    nextArrow: '<button class="arrow-slider next-arrow"><i class="fas fa-chevron-right"></i></button>',
    responsive: [
        {
            breakpoint: 1200,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows: false,
                adaptiveHeight: false,
            }
        }
    ],
});

$('.image-popup-no-margins').magnificPopup({
    type: 'image',
    closeOnContentClick: true,
    closeBtnInside: false,
    fixedContentPos: true,
    mainClass: 'mfp-no-margins mfp-with-zoom', // class to remove default margin from left and right side
    image: {
        verticalFit: true
    },
    zoom: {
        enabled: true,
        duration: 300 // don't foget to change the duration also in CSS
    }
});

$('.popup-gallery').magnificPopup({
    delegate: 'a',
    type: 'image',
    tLoading: 'Loading...',
    mainClass: 'mfp-img-mobile mfp-no-margins mfp-with-zoom',
    gallery: {
        enabled: true,
        navigateByImgClick: true,
        preload: [0,1] // Will preload 0 - before current, and 1 after the current image
    },
    image: {
        tError: '',
        titleSrc: function(item) {
            return item.el.attr('title');
        }
    }
});