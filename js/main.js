AOS.init();

$('.telegram').submit(function (e) {
    e.preventDefault();
    const orderLoader = document.getElementById('pageLoaderId');
    orderLoader.classList.remove('d-none');
    $.ajax({
        type: 'POST',
        url: '/wp-content/themes/usa_cars/api-telegram.php',
        data: $(this).serialize()
    }).done(() => {
        window.location = 'done';
        setTimeout(() => orderLoader.classList.add('d-none'), 0);
    });
});

$(".smooth-anchor").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
        // Prevent default anchor click behavior
        event.preventDefault();

        // Store hash
        var hash = this.hash;

        // Using jQuery's animate() method to add smooth page scroll
        // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
        $('html, body').animate({
            scrollTop: $(hash).offset().top
        }, 800, function(){

            // Add hash (#) to URL when done scrolling (default click behavior)
            window.location.hash = hash;
        });
    } // End if
});

$( function() {
    $( "#slider-range" ).slider({
        range: true,
        min: 0,
        max: 100000,
        values: [ 20000, 36000 ],
        slide: function( event, ui ) {
            $( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
        }
    });
    $( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) +
        " - $" + $( "#slider-range" ).slider( "values", 1 ) );
} );

$(".open-form-logo-slider_").slick({
    dots: true,
    infinite: true,
    arrows: false,
    speed: 500,
    autoplay: true,
    slidesToShow: 3,
    slidesToScroll: 3,
    adaptiveHeight: false,
    prevArrow: '<button class="arrow-slider prev-arrow"><i class="fas fa-chevron-left"></i></button>',
    nextArrow: '<button class="arrow-slider next-arrow"><i class="fas fa-chevron-right"></i></button>',
    responsive: [
        {
            breakpoint: 1200,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 2,
                arrows: false,
                adaptiveHeight: false,
            }
        },
        {
            breakpoint: 992,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows: false,
                adaptiveHeight: false,
            }
        }
    ],
});



