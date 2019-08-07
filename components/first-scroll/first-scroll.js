


function setPathToImage(path) {
    const firstScrollBg = document.getElementById('firstScrollBgId');
    $('<img/>').attr('src', path + '/images/back-first-scroll.jpg').on('load', function() {
        $(this).remove(); // prevent memory leaks as @benweet suggested
        $('#firstScrollBgId').css('background-image', `url(${path}/images/back-first-scroll.jpg)`);
        firstScrollBg.classList.add('bg-img-animate');
        setTimeout(function() {
            firstScrollBg.classList.remove('bg-img-animate');

        }, 3000);
    });
}
