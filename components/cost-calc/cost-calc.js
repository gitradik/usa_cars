function onClickMark(id, value, idButton, models) {
    const buttons = [...document.getElementsByClassName('cost-calc-btn-text')];
    buttons[idButton].innerText = value;
}

$(document).ready(function() {
    $('.cost-calc-drop-down-item').on('click', function (e) {
        console.log($(this).data("value"));
    });
});