AOS.init();

$('.telegram').submit(function (e) {
    e.preventDefault();
    const orderLoader = document.getElementById('pageLoaderId');
    orderLoader.classList.remove('d-none');
    $.ajax({
        type: 'POST',
        url: '/usa_cars/wp-content/themes/usa_cars/api-telegram.php',
        data: $(this).serialize()
    }).done(() => {
        setTimeout(() => orderLoader.classList.add('d-none'), 0);
        window.location = 'done';
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
        max: 8000,
        values: [ 1000, 6000 ],
        slide: function( event, ui ) {
            $( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
        }
    });
    $( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) +
        " - $" + $( "#slider-range" ).slider( "values", 1 ) );
} );



