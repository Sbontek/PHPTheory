<?php

function getWeather($city, $countryCode) {
    $apiUrl = 'http://samples.openweathermap.org/data/2.5/weather?q='. urlencode($city) . ',' . urlencode($countryCode) .',&appid=b1b15e88fa797225412429c1c50c122a1';

    $handle = curl_init($apiUrl);
    $page = fopen($apiUrl, 'r');

    curl_setopt($handle, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($handle, CURLOPT_HEADER, 0);

    $response = curl_exec($handle);
    curl_close($handle);
    fclose($page);
    $parsedResponse = json_decode($response);
    return $parsedResponse->weather[0]->description;
}

echo 'The weather in Rotterdam is: ' . getWeather('Rotterdam', 'nl'). '<br/>';
echo 'The weather in New york is: ' . getWeather('New York', 'usa') . '<br/>';

?>