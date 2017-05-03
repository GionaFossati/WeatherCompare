<?php

    if (isset($_POST['city'])) {
    $city = $_POST['city'];
    $country = "IT";
    $key1 = "02b568e5758b4ca8";

    $meteo1 = "http://api.wunderground.com/api/$key1/conditions/q/IT/$city.json";
    $meteo_json1=file_get_contents($meteo1);
    $meteo_data1=json_decode($meteo_json1,true);

    $previsioni1 = "http://api.wunderground.com/api/$key1/forecast/q/IT/".$city.".json";
    $previsioni_json1=file_get_contents($previsioni1);
    $previsioni_data1=json_decode($previsioni_json1,true);
    //print_r ($previsioni_data1);


    echo $previsioni_data1 ['forecast']['simpleforecast']['forecastday']['1']['high']['celsius']."°"."<br>";
    echo $previsioni_data1 ['forecast']['simpleforecast']['forecastday']['1']['low']['celsius']."°";

}

?>
