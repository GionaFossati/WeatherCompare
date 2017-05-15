<?php

    if (isset($_POST['city'])) {
    $city = $_POST['city'];
    $key0 = "79f1dbf6ed137706eb49daeb2fe46355";
    $country = "IT";

    $previsioni0 = "http://api.openweathermap.org/data/2.5/weather?q=".$city.",IT&APPID=$key0&cnt=3&units=metric&cnt=7&lang=en";
    $previsioni_json0=file_get_contents($previsioni0);
    $previsioni_data0=json_decode($previsioni_json0,true);

    echo $previsioni_data0['weather']['0']['main']."<br>";
    echo "Current temp:  ";
    echo $previsioni_data0['main']['temp']."° <br>";
    echo "Wind speed:  ";
    echo $previsioni_data0['wind']['speed']."Km/h <br>";
    echo "Pressure:  ";
    echo $previsioni_data0['main']['pressure']."mBar<br>";
    echo "Humidity:  ";
    echo $previsioni_data0['main']['humidity']."% <br>";


    }

?>
