<?php

    if (isset($_POST['city'])) {
    $city = $_POST['city'];
    $key0 = "79f1dbf6ed137706eb49daeb2fe46355";
    $country = "IT";

    $meteo0 = "http://api.openweathermap.org/data/2.5/weather?q=$city,$country&APPID=$key0&units=metric&cnt=7&lang=en";
    $meteo_json0=file_get_contents($meteo0);
    $meteo_data0=json_decode($meteo_json0,true);

    $previsioni0 = "http://api.openweathermap.org/data/2.5/forecast/daily?q=".$city.",IT&APPID=$key0&cnt=3&units=metric&cnt=7&lang=en";
    $previsioni_json0=file_get_contents($previsioni0);
    $previsioni_data0=json_decode($previsioni_json0,true);


    echo $meteo_data0['main']['temp']."°C <br>";
    echo $meteo_data0['weather'][0]['main']."<br>";
    echo $meteo_data0['clouds']['all']."<br>";
    echo $meteo_data0['wind']['speed']."<br>";
    echo $meteo_data0['coord']['lon']."<br>";
    echo $meteo_data0['coord']['lat'];
  }

?>
