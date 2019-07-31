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

$products_ = get_posts( array(
    'numberposts' => 4,
    'offset'      => 0,
    'category_name' => $NAME_CAR_POSTS,
    'orderby'     => 'date',
    'order'       => 'DESC',
    'include'     => array(),
    'exclude'     => array(),
    'meta_key'    => '',
    'meta_value'  => '',
    'post_type'   => 'post',
    'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
) );

    $count = 0;
    $products = [];
    for ($i = 0; $i < count($products_); $i++) {
        $post = $products_[$i];
        if($post) {
            $products[$count++] = new prod_auto(
                get_field('settings_class', $post->ID),
                get_field('settings_image', $post->ID),
                get_field('settings_name', $post->ID),
                get_field('settings_price', $post->ID),
                array(
                    "Год выпуска:" => get_field('settings_year', $post->ID),
                    "Тип топлива:" => get_field('settings_type_fuel', $post->ID),
                    "Цена в Украине:" => get_field('settings_price_uk', $post->ID),
                    "Экономия:" => get_field('settings_saving', $post->ID),
                ),
                new review(
                    'Сергей',
                    '13 Мая 2019',
                    'С помощью компании Invensollogistics, приобрел автомобиль ВMW 640 в Канаде. Оказалась, что с такой комплектацией такая машина одна в Украине. Cпасибо ребятам, помогали на всех этапах. Конечный результат стоит того.'
                )
            );
        }
    }

    $products = array_reverse($products, true);
