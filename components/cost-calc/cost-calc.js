const arrayCostCalc = [
    [
        {name: 'BMW'},
        {name: 'MERCEDES'},
        {name: 'JAGUAR'},
        {name: 'KIA'}
    ],
    [
        ['model-1', 'model-2', 'model-3'],
        ['model-1', 'model-2'],
        ['model-1', 'model-2', 'model-3', 'model-4'],
        ['model-1', 'model-2', 'model-3', 'model-4', 'model-5']
    ],
    [
        ['1990', '1991', '1992', '1993'],
        ['2000', '2001', '2002', '2003'],
        ['1999', '2000', '2001', '2003', '2004'],
        ['2015', '2016', '2017', '2018']
    ]
];

const idexes = { MARKS: 0, MODELS: 1, YEARS: 2};
// classes dropdown-item cost-calc-drop-down-item
function setDropDowns() {

    const dropdowns = [...document.getElementsByClassName('costCalcDropdownMenu')];
    const dropdownBtns = [...document.getElementsByClassName('costCalsDropdownBtn')];
    dropdowns[idexes.MARKS].innerHTML = '';

    for (let j = 0; j < arrayCostCalc[idexes.MARKS].length; j++) {
        const button = document.createElement('div');
        button.classList.add('dropdown-item');
        button.classList.add('cost-calc-drop-down-item');
        button.innerText = arrayCostCalc[idexes.MARKS][j]['name'];

        function onClickBtn(index) {

            dropdownBtns[idexes.MODELS].innerText = 'Выбрать';
            dropdownBtns[idexes.MARKS].innerText = arrayCostCalc[idexes.MARKS][index]['name'];
            setModels(index);
        }

        button.onclick = () => onClickBtn(j);
        dropdowns[idexes.MARKS].appendChild(button);

    }
}

function setModels(index) {

    const dropdowns = [...document.getElementsByClassName('costCalcDropdownMenu')];
    const dropdownBtns = [...document.getElementsByClassName('costCalsDropdownBtn')];
    dropdowns[idexes.MODELS].innerHTML = '';
    dropdowns[idexes.YEARS].innerHTML = '';


    const array = arrayCostCalc[idexes.MODELS][index];

    for (let i = 0; i < array.length; i++) {

        const button = document.createElement('div');

        button.classList.add('dropdown-item');
        button.classList.add('cost-calc-drop-down-item');
        button.innerText = array[i];

        function onClickBtn(index) {
            dropdownBtns[idexes.YEARS].innerText = 'Выбрать';
            dropdownBtns[idexes.MODELS].innerText = array[i];
            setYears(index);
        }

        button.onclick = () => onClickBtn(i);

        dropdowns[idexes.MODELS].appendChild(button);
    }
}

function setYears(index) {
    const dropdowns = [...document.getElementsByClassName('costCalcDropdownMenu')];
    const dropdownBtns = [...document.getElementsByClassName('costCalsDropdownBtn')];
    dropdowns[idexes.YEARS].innerHTML = '';

    const array = arrayCostCalc[idexes.YEARS][index];

    for (let i = 0; i < array.length; i++) {

        const button = document.createElement('div');

        button.classList.add('dropdown-item');
        button.classList.add('cost-calc-drop-down-item');
        button.innerText = array[i];

        function onClickBtn(index) {

            dropdownBtns[idexes.YEARS].innerText = array[i];
            setModels(index);
        }

        button.onclick = () => onClickBtn(i);

        dropdowns[idexes.YEARS].appendChild(button);
    }
}

setDropDowns();
