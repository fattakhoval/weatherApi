<?php
// Ваш API-ключ
$apiKey = "ba23f7f55ac93655a80738bf4d41aa81";

// ID города Уфа (у OpenWeatherMap у каждого города есть свой ID)
$cityId = "479561"; // ID для Уфы

// Формируем URL для запроса к API OpenWeatherMap
$url = "http://api.openweathermap.org/data/2.5/weather?id={$cityId}&units=metric&lang=ru&appid={$apiKey}&lang=ru";

// Выполняем запрос к API
$response = file_get_contents($url);

// Выводим полученные данные
echo $response;
?>