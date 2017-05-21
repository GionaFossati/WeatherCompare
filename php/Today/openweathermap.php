<?php

    if (isset($_POST['city'])) {
    $city = $_POST['city'];
    $key0 = "79f1dbf6ed137706eb49daeb2fe46355";
    $country = "IT";

    $previsioni0 = "http://api.openweathermap.org/data/2.5/forecast/daily?q=".$city.",IT&APPID=$key0&cnt=3&units=metric&cnt=7&lang=en";
    $previsioni_json0=file_get_contents($previsioni0);
    $previsioni_data0=json_decode($previsioni_json0,true);

    $p0_0 = explode(".", $previsioni_data0['list']['0']['temp']['max']);
    echo '<div class="max">'.$p0_0[0]."° <br></div>";
    $p00_0 = explode(".", $previsioni_data0['list']['0']['temp']['min']);
    echo '<div class="min">'.$p00_0[0]."° </div>";

    }

?>
