<?php

    class CostCalc {
        public $marsk;
        public $models;
        public $years;

        function __construct($marks, $models, $years)
        {
            $this->marsk = $marks;
            $this->models = $models;
            $this->years = $years;
        }
    }

    $cost_calc = new CostCalc(
        array(
            '0' => 'BMW',
            '1' => 'MERCEDES',
            '2' => 'JAGUAR',
            '3' => 'KIA'
        ),
        array(
            array('model-1', 'model-2', 'model-3'),
            array('model-1', 'model-2'),
            array('model-1', 'model-2', 'model-3', 'model-4'),
            array('model-1', 'model-2', 'model-3', 'model-4', 'model-5'),
        ),
        array(
            array('1990', '1991', '1992', '1993'),
            array('2000', '2001', '2002', '2003'),
            array('1999', '2000', '2001', '2003', '2004'),
            array('2015', '2016', '2017', '2018'),
        )
    );


