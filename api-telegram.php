<?php

$name = isset($_POST['name']) ? $_POST['name'] : '';
$phone = isset($_POST['phone']) ? $_POST['phone'] : '';
$email = isset($_POST['email']) ? $_POST['email'] : '';
$location = isset($_POST['location']) ? $_POST['location'] : '';
$budget = isset($_POST['budget']) ? $_POST['budget'] : '';
$mark_auto = isset($_POST['mark_auto']) ? $_POST['mark_auto'] : '';
$model_auto = isset($_POST['model_auto']) ? $_POST['model_auto'] : '';
$year_auto = isset($_POST['year_auto']) ? $_POST['year_auto'] : '';


$chat_id = '-358257002';
$token = '708250356:AAF6mUDiVUT2vEJrV91_dt4bCP9A70i3Jq4';

$arr = array(
    'Имя:' => $name,
    'Телефон:' => $phone,
    'Цель: ' => $location,
    'Бюджет: ' => $budget,
    'Марка: ' => $mark_auto,
    'Модель: ' => $model_auto,
    'Год: ' => $year_auto,
);
foreach ($arr as $key => $value) {
    $txt .= "<b>" . $key . "</b> " . $value . "%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}", "r");