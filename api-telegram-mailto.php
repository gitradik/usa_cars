<?php

$name = isset($_POST['name']) ? $_POST['name'] : '';
$phone = isset($_POST['phone']) ? $_POST['phone'] : '';
$email = isset($_POST['email']) ? $_POST['email'] : '';
$location = isset($_POST['location']) ? $_POST['location'] : '';
$budget = isset($_POST['budget']) ? $_POST['budget'] : '';
$mark_auto = isset($_POST['mark_auto']) ? $_POST['mark_auto'] : '';
$model_auto = isset($_POST['model_auto']) ? $_POST['model_auto'] : '';
$year_auto = isset($_POST['year_auto']) ? $_POST['year_auto'] : '';

//mail("rminzp17@gmail.com", "Новая заявка с сайта USA CARS", " Имя: ".$name."\n Телефон: ".$phone."\n Бюджет: ".$budget."\nМарка: ".$mark_auto."\nМодель: ".$model_auto ."\nГод: ".$year_auto ."\nЦель: ".$location, "\r\n");
$chat_id = '-371639691';
$token = '708250356:AAF6mUDiVUT2vEJrV91_dt4bCP9A70i3Jq4';

$arr = array(
    'Имя:' => $name,
    'Телефон:' => $phone,
    'Бюджет: ' => $budget,
    'Марка: ' => $mark_auto,
    'Модель: ' => $model_auto,
    'Год: ' => $year_auto,
    'Цель: ' => $location,
);
foreach ($arr as $key => $value) {
    $txt .= "<b>" . $key . "</b> " . $value . "%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}", "r");

$file = './Этапы_доставки_Авто_из_США.pdf'; // файл
$mailTo = 'Rodia26@i.ua'; // кому
$from = "rminzp17@gmail.com"; // от кого
$subject = 'АВТОМОБИЛИ ИЗ США "ПОД КЛЮЧ"'; // тема письма
$message = "Выполним все виды услуг от выбора марки до постановки автомобиля на украинские номера! <br/>Телефон: +38 099 000-00-00<br/>Почта: example@gmail.com<br/>"; // текст письма
$r = sendMailAttachment($mailTo, $from, $subject, $message, $file); // отправка письма c вложением
//$r = sendMailAttachment($mailTo, $from, $subject, $message); // отправка письма без вложения
//echo ($r)?'Письмо отправлено':'Ошибка. Письмо не отправлено!';

function sendMailAttachment($mailTo, $from, $subject, $message, $file = false) {
    $separator = "---"; // разделитель в письме
    // Заголовки для письма
    $headers = "MIME-Version: 1.0\r\n";
    $headers .= "From: $from\nReply-To: $from\n"; // задаем от кого письмо
    $headers .= "Content-Type: multipart/mixed; boundary=\"$separator\""; // в заголовке указываем разделитель
    // если письмо с вложением
    if($file){
        $bodyMail = "--$separator\n"; // начало тела письма, выводим разделитель
        $bodyMail .= "Content-type: text/html; charset='utf-8'\n"; // кодировка письма
        $bodyMail .= "Content-Transfer-Encoding: quoted-printable"; // задаем конвертацию письма
        $bodyMail .= "Content-Disposition: attachment; filename==?utf-8?B?".base64_encode(basename($file))."?=\n\n"; // задаем название файла
        $bodyMail .= $message."\n"; // добавляем текст письма
        $bodyMail .= "--$separator\n";
        $fileRead = fopen($file, "r"); // открываем файл
        $contentFile = fread($fileRead, filesize($file)); // считываем его до конца
        fclose($fileRead); // закрываем файл
        $bodyMail .= "Content-Type: application/octet-stream; name==?utf-8?B?".base64_encode(basename($file))."?=\n";
        $bodyMail .= "Content-Transfer-Encoding: base64\n"; // кодировка файла
        $bodyMail .= "Content-Disposition: attachment; filename==?utf-8?B?".base64_encode(basename($file))."?=\n\n";
        $bodyMail .= chunk_split(base64_encode($contentFile))."\n"; // кодируем и прикрепляем файл
        $bodyMail .= "--".$separator ."--\n";
        // письмо без вложения
    } else {
        $bodyMail = $message;
    }
    $result = mail($mailTo, $subject, $bodyMail, $headers); // отправка письма
    return $result;
}