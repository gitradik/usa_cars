const arrYears = ['2000', '2001', '2002', '2003', '2004', '2005', '2006', '2007','2008', '2009', '2010',
    '2011', '2012', '2013', '2014', '2015', '2016', '2017', '2018', '2019'];

const arrayCostCalc = [
    [
        {name: 'Chevrolet'},
        {name: 'Audi'},
        {name: 'Cadillac'},
        {name: 'Jeep'},
        {name: 'Chrysler'},
        {name: 'Dodge'},
        {name: 'Ford'},
        {name: 'Mersedes-Bens'},
        {name: 'Lincoln'},
        {name: 'Volkswagen'},
        {name: 'Toyota'},
        {name: 'Lexus'},
        {name: 'Nissan'},
        {name: 'Infiniti'},
        {name: 'Mazda'},
        {name: 'Honda'},
        {name: 'Acura'},
        {name: 'Mitsubishi'},
    ],
    [
        [ 'Aveo', 'Bolt','Camaro','Captiva','Corvette','Cruze','Epica',
            'Evanda','Express','Lacetti','Lanos','Malibu','Niva','Nubiria',
            'Orlando','Spark','Suburban','Tacuma','Tahoe','Volt'],
        ['100', '80', 'A1' , 'A3' ,'A4','A4 Allroad','A5','A6','A6 Allroad','A7','A8','Q3','Q5','Q8','RS6','S4','S6','TT'],
        ['ATS','CT6','CTS','DE Ville','DTS','ELR','Escalade','Flrrtwood','Seville','SRX','STS','XLR','XT4','XT5','XTS'],
        ['Cherokee','Commander','Compass','Gladiator','Grand Cherokee','Liberty','Patriot','Renegade','Wrangler'],
        ['200','300','300 C','300 M','300 S','Concorde','Crossfire','Grand Voyager','Intrepid','LE Baron',
            'LHS', 'Neon','New Yorker','Pacifica','PT Cruiser','Sebring','Stratus','Town & Country','Vision','Voyager'],
        ['Avenger','Caliber','Caravan','Challenger', 'Charger','Dakota','Dart','Durango','Grand Caravan','Intrepid',
            'Journey','Magnum','Neon','Nitro','RAM','Ram Van','Stealth','Stratus','Viper'],
        ['C - Max','Edge','Escape','Escort','F - 150','Fiesta','Focus','Fusion','Galaxy','Kuga','Mondeo','Mustang',
            'Scorpio','Sierra','Transit'],
        ['A-Class','C-Class','CLS-Class','E 200','E220','E - Class','G - Class','GL -Class','GLE - Class','ML 350',
            'ML - class','Viano','Vito'],
        ['Aviator', 'Continental','Excalibur','LS','Mark','MKC','MKS','MKT','MKX','MKZ','Nautilus','Navigator','Town car', 'Zephyr'],
        ['Caddy', 'Golf','Golf IV','Golf V','Jetta','Passat','Polo','T4','T5','Tiguan','Touareg','Touran','Phaeton',
            'Pointer','Multivan'],
        ['Auris','Avalon','Avensis','C-HR','Camry','Corolla','FJ Cruiser','Highlander','Hilux','Land Cruiser','Prius','RAV 4','Sequoia',
            'Sienna','Tundra','Venza','Yaris'],
        ['CT 200H', 'ES 350','GS 300','GS 350','GX','IS','IS 250','LS','LS 460','LX','LX 450','LX 470','LX 570','NX','RX','RX 300','RX 250',
            'RX 450','SC','UX'],
        ['Almera','GT-R','Juke','Leaf','Maxima','Micra','Murano','Note','Pathfinder','Patrol','Primstar','Primera','Qashqai','Rouge','Teana',
            'TIIDA','X-trail'],
        ['EX', 'FX', 'G', 'M','Q','QX'],
        ['2','3','323','5','6','626','929','CX-3','CX-5','СХ-7','СХ-9','MPV','MX-5','Premacy','RX-7','RX-8','Xedos'],
        [ 'Accord', 'Civic','CR-V','CR-Z','Crosstour','CRX','Element','FIT','FR-V','HR-V','Insight','Jazz','Legend',
            'NSX','Odyssey','Pilot','Prelude','S2000','Shuttle'],
        ['CL','ILX','MDX','NSX','RDX','MDX','RL','RLX','RSX','TL','TLX','TSX','ZDX'],
        ['ASX','Carisma','Colt','Eclipse','Galant','Grandis','L200','Lancer','Outlander','Pajero','Space Star','Space Wagon'],
    ],
    arrYears
];
const idexes = { MARKS: 0, MODELS: 1, YEARS: 2};
const dropdowns = [...document.getElementsByClassName('costCalcDropdownMenu')];
const dropdownBtns = [...document.getElementsByClassName('costCalsDropdownBtn')];

const markInpHid = document.getElementById('markInpHidId');
const modelInpHidId = document.getElementById('modelInpHidId');
const yearInpHidId = document.getElementById('yearInpHidId');

function setDropDowns() {
    dropdowns[idexes.MARKS].innerHTML = '';
    dropdowns[idexes.MODELS].innerText = 'Выберите марку';
    dropdowns[idexes.YEARS].innerText = 'Выберите модель';

    const array = arrayCostCalc[idexes.MARKS];
    for (let j = 0; j < array.length; j++) {
        const button = document.createElement('div');
        button.classList.add('dropdown-item');
        button.classList.add('cost-calc-drop-down-item');
        button.innerText = array[j]['name'];

        function onClickBtn(index) {

            dropdownBtns[idexes.MODELS].innerText = 'Выбрать';
            dropdownBtns[idexes.MARKS].innerText = array[index]['name'];
            markInpHid.value = array[index]['name'];
            setModels(index);
        }

        button.onclick = () => onClickBtn(j);
        dropdowns[idexes.MARKS].appendChild(button);

    }
}

function setModels(index) {
    const markIndex = index;
    dropdowns[idexes.MODELS].innerHTML = '';
    dropdowns[idexes.YEARS].innerHTML = '';
    const array = arrayCostCalc[idexes.MODELS][index];
    dropdowns[idexes.YEARS].innerText = 'Выберите модель';

    for (let i = 0; i < array.length; i++) {

        const button = document.createElement('div');

        button.classList.add('dropdown-item');
        button.classList.add('cost-calc-drop-down-item');
        button.innerText = array[i];

        function onClickBtn(index) {
            dropdownBtns[idexes.YEARS].innerText = 'Выбрать';
            dropdownBtns[idexes.MODELS].innerText = array[i];
            modelInpHidId.value = array[i];
            setModels(markIndex);
            setYears(markIndex, index);
        }

        button.onclick = () => onClickBtn(i);

        dropdowns[idexes.MODELS].appendChild(button);
    }
}

function setYears(markIndex, index) {
    dropdowns[idexes.YEARS].innerHTML = '';

    const array = arrayCostCalc[idexes.YEARS];
    for (let i = 0; i < array.length; i++) {

        const button = document.createElement('div');

        button.classList.add('dropdown-item');
        button.classList.add('cost-calc-drop-down-item');
        button.innerText = array[i];

        function onClickBtn(index) {

            dropdownBtns[idexes.YEARS].innerText = array[i];
            yearInpHidId.value = array[i];
            /*  //setModels(markIndex);
              setYears(markIndex, index);*/
        }

        button.onclick = () => onClickBtn(i);

        dropdowns[idexes.YEARS].appendChild(button);
    }
}

setDropDowns();
