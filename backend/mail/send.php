<?php

$settings = include('./settings.php'); // Подключаем скрытие данные для отправки


$to = array_shift($settings); // получатель(-и)
$subject = $_POST['subject']; // Тема письма
$message = letterFormationMail($_POST); // Формируем письмо
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= 'From: <info@certwal.com>';

// Basic headers


// Формирование письма
function letterFormationMail($data) {
    $body = "<p>".$data['desc']."</p><br>";

    foreach ($data['dataForm'] as $key => $value) {
        $body .= "
        <div>
            <span>$key</span>
            <span>$value</span>
        </div>";
    }

    echo $body;
    return $body;
}

// отправка
mail(
    $to,
    $subject,
    $message,
    $headers
);
