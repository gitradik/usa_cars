let models = [];

function onClickMark(target, id, value, idButton, models) {
    console.log(models);
    const buttons = [...document.getElementsByClassName('cost-calc-btn-text')];
    buttons[idButton].innerText = value;
}

