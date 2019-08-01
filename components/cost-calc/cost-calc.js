const arrayCostCalc = [
    [
        {name: 'BMW'},
        {name: 'MERCEDES'},
        {name: 'JAGUAR'},
        {name: 'KIA'}
    ],
    [
        ['model-1', 'model-2'],
        ['model-1'],
        ['model-1', 'model-2', 'model-3'],
        ['model-1', 'model-2']
    ],
    [
        [['1990', '1991', '1992', '1993'], ['4444', '1111', '4555']],
        [['2000', '2001', '2002', '1231']],
        [['1999', '2004'], ['1700', '1700', '1993'], ['1990', '1700', '1700']],
        [['2015', '2016', '2017', '2018'], ['1888', '1888', '1888']]
    ]
];

const idexes = { MARKS: 0, MODELS: 1, YEARS: 2};

function setDropDowns() {

    const dropdowns = [...document.getElementsByClassName('costCalcDropdownMenu')];
    const dropdownBtns = [...document.getElementsByClassName('costCalsDropdownBtn')];
    dropdowns[idexes.MARKS].innerHTML = '';

    const array = arrayCostCalc[idexes.MARKS];
    for (let j = 0; j < array.length; j++) {
        const button = document.createElement('div');
        button.classList.add('dropdown-item');
        button.classList.add('cost-calc-drop-down-item');
        button.innerText = array[j]['name'];

        function onClickBtn(index) {

            dropdownBtns[idexes.MODELS].innerText = 'Выбрать';
            dropdownBtns[idexes.MARKS].innerText = array[index]['name'];
            setModels(index);
        }

        button.onclick = () => onClickBtn(j);
        dropdowns[idexes.MARKS].appendChild(button);

    }
}

function setModels(index) {

    const markIndex = index;
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
            setYears(markIndex, index);
        }

        button.onclick = () => onClickBtn(i);

        dropdowns[idexes.MODELS].appendChild(button);
    }
}

function setYears(markIndex, index) {
    const dropdowns = [...document.getElementsByClassName('costCalcDropdownMenu')];
    const dropdownBtns = [...document.getElementsByClassName('costCalsDropdownBtn')];
    dropdowns[idexes.YEARS].innerHTML = '';

    const array = arrayCostCalc[idexes.YEARS][markIndex][index];
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
