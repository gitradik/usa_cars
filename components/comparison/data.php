<?php

    class review {
        public $name;
        public $date;
        public $content;

        function __construct($name, $date, $content)
        {
            $this->name = $name;
            $this->date = $date;
            $this->content = $content;
        }
    }

    $link_images = get_template_directory_uri() . '/images/comparison/';

    class prod_auto {
        public $title;
        public $image;
        public $name;
        public $price;
        public $params;
        public $review;

        function __construct($title, $image, $name, $price, $params, $review)
        {
            $this->title = $title;
            $this->image = $image;
            $this->name = $name;
            $this->price = $price;
            $this->params = $params;
            $this->review = $review;
        }
    }

    $products = [
        new prod_auto(
            'Премиум',
            $link_images . 'image.png',
            'BMW 640i',
            '$ 10,900',
            array(
                "Год выпуска:" => 2013,
                "Тип топлива:" => 'Бензин',
                "Цена в Украине:" => '$ 18,400',
                "Экономия:" => '$ 7,800(42%)',
            ),
            new review(
                'Сергей',
                '13 Мая 2019',
                'С помощью компании Invensollogistics, приобрел автомобиль ВMW 640 в Канаде. Оказалась, что с такой комплектацией такая машина одна в Украине. Cпасибо ребятам, помогали на всех этапах. Конечный результат стоит того.'
            )
        ),
        new prod_auto(
            'Бизнес',
            $link_images . 'image.png',
            'BMW 640i',
            '$ 10,900',
            array(
                "Год выпуска:" => 2013,
                "Тип топлива:" => 'Бензин',
                "Цена в Украине:" => '$ 18,400',
                "Экономия:" => '$ 7,800(42%)',
            ),
            new review(
                'Сергей',
                '13 Мая 2019',
                'С помощью компании Invensollogistics, приобрел автомобиль ВMW 640 в Канаде. Оказалась, что с такой комплектацией такая машина одна в Украине. Cпасибо ребятам, помогали на всех этапах. Конечный результат стоит того.'
            )
        ),
        new prod_auto(
            'Бюджет',
            $link_images . 'image.png',
            'BMW 640i',
            '$ 10,900',
            array(
                "Год выпуска:" => 2013,
                "Тип топлива:" => 'Бензин',
                "Цена в Украине:" => '$ 18,400',
                "Экономия:" => '$ 7,800(42%)',
            ),
            new review(
                'Сергей',
                '13 Мая 2019',
                'С помощью компании Invensollogistics, приобрел автомобиль ВMW 640 в Канаде. Оказалась, что с такой комплектацией такая машина одна в Украине. Cпасибо ребятам, помогали на всех этапах. Конечный результат стоит того.'
            )
        ),
        new prod_auto(
            'Электрокар',
            $link_images . 'image.png',
            'BMW 640i',
            '$ 10,900',
            array(
                "Год выпуска:" => 2013,
                "Тип топлива:" => 'Бензин',
                "Цена в Украине:" => '$ 18,400',
                "Экономия:" => '$ 7,800(42%)',
            ),
            new review(
                'Сергей',
                '13 Мая 2019',
                'С помощью компании Invensollogistics, приобрел автомобиль ВMW 640 в Канаде. Оказалась, что с такой комплектацией такая машина одна в Украине. Cпасибо ребятам, помогали на всех этапах. Конечный результат стоит того.'
            )
        ),
    ];
