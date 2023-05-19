<?php

$settings = include('./settings.php'); // Подключаем скрытие данные для отправки


$to = array_shift($settings); // получатель(-и)
$subject = $_POST['subject']; // Тема письма
$message = letterFormationMail($_POST['dataForm']); // Формируем письмо

// Basic headers


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

    return $body;
}

// отправка
mail(
    $to,
    $subject,
    $message
);
