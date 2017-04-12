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


    echo $meteo_data1 ['current_observation']['temperature_string']."<br>";
    echo $meteo_data1 ['current_observation']['display_location']['latitude']."<br>";
    echo $meteo_data1 ['current_observation']['display_location']['longitude']."<br><br>";

    echo "Il Giorno "; echo $previsioni_data1 ['forecast']['simpleforecast']['forecastday']['0']['date']['day'];
    echo "/"; echo $previsioni_data1 ['forecast']['simpleforecast']['forecastday']['0']['date']['month'];
    echo " La temperatura max sarà: "; echo $previsioni_data1 ['forecast']['simpleforecast']['forecastday']['0']['high']['celsius']."°";
    echo "; e la temperatura minima sarà: "; echo $previsioni_data1 ['forecast']['simpleforecast']['forecastday']['0']['low']['celsius']."°";

}

?>
