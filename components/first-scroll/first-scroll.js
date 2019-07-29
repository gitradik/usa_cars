const firstScrollBg = document.getElementById('firstScrollBgId');

window.onload = () => {
    firstScrollBg.classList.add('bg-img-animate');
    setTimeout(function() {
        firstScrollBg.classList.remove('bg-img-animate');
    }, 3000);
};