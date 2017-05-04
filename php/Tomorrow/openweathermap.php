<?php

    if (isset($_POST['city'])) {
    $city = $_POST['city'];
    $key0 = "79f1dbf6ed137706eb49daeb2fe46355";
    $country = "IT";

    $previsioni0 = "http://api.openweathermap.org/data/2.5/forecast/daily?q=".$city.",IT&APPID=$key0&cnt=3&units=metric&cnt=7&lang=en";
    $previsioni_json0=file_get_contents($previsioni0);
    $previsioni_data0=json_decode($previsioni_json0,true);

    $p0 = explode(".", $previsioni_data0['list']['1']['temp']['max']);
    echo $p0[0]."° <br>";
    $p00 = explode(".", $previsioni_data0['list']['1']['temp']['min']);
    echo $p00[0]."°";

    }

?>
