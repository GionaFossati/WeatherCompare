<?php

    if (isset($_POST['city'])) {
    $city = $_POST['city'];
    $country = "IT";
    $key1 = "02b568e5758b4ca8";

    $previsioni1 = "http://api.wunderground.com/api/$key1/forecast/q/IT/".$city.".json";
    $previsioni_json1=file_get_contents($previsioni1);
    $previsioni_data1=json_decode($previsioni_json1,true);
    //print_r ($previsioni_data1);


    $p1_1 = $previsioni_data1 ['forecast']['simpleforecast']['forecastday']['1']['high']['celsius']."°"."<br>";
    echo '<div class="max">'.$p1_1.'</div>';
    $p11_1 = $previsioni_data1 ['forecast']['simpleforecast']['forecastday']['1']['low']['celsius']."°";
    echo '<div class="min">'.$p11_1.'</div>';
}

?>
