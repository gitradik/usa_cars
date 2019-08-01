<?php

$name = isset($_POST['name']) ? $_POST['name'] : '';
$phone = isset($_POST['phone']) ? $_POST['phone'] : '';
$email = isset($_POST['email']) ? $_POST['email'] : '';
$location = isset($_POST['location']) ? $_POST['location'] : '';


$chat_id = '-358257002';
$token = '708250356:AAF6mUDiVUT2vEJrV91_dt4bCP9A70i3Jq4';

$arr = array(
    'Имя:' => $name,
    'Телефон:' => $phone,
    'Цель: ' => $location
);
foreach ($arr as $key => $value) {
    $txt .= "<b>" . $key . "</b> " . $value . "%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}", "r");