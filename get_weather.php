<?php
// Ваш API-ключ
$apiKey = "ba23f7f55ac93655a80738bf4d41aa81";


function getWeather($cityId){
    global $apiKey;
    $url = "http://api.openweathermap.org/data/2.5/weather?id={$cityId}&units=metric&lang=ru&appid={$apiKey}&lang=ru";

// Выполняем запрос к API
$response = file_get_contents($url);

// Выводим полученные данные
return $response;

}
// (у OpenWeatherMap у каждого города есть свой ID)
$cityId = $_GET['city_id'];

echo getWeather($cityId);

?>