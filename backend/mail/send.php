<?php

// Подключаем скрытие данные для отправки
$settings = include('./settings.php');

$message = letterFormationMail($_POST);
// отправка
mail($settings['address'], $settings['subject'], $message);

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