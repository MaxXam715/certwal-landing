<?php

$settings = include('./settings.php'); // Подключаем скрытие данные для отправки

$to = array_shift($settings); // получатель(-и)
$subject = $_POST['subject']; // Тема письма
$message = letterFormationMail($_POST); // Формируем письмо

$headers  = "From: info@certwal.com";
$headers .= "MIME-Version: 1.0";
$headers .= "Content-Type: text/html; charset=UTF-8";


// Формирование письма
function letterFormationMail($data) {
    $body  = "";

    foreach ($data as $key => $value) {
        $body .= "
        <div>
            <span>$key</span>
            <span>$value</span>
        </div>";
    }

    print_r($body);

    return $body;
}

// отправка
mail(
    $to,
    $subject,
    $headers,
    $message
);
