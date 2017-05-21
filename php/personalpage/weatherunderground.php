<?php

    if (isset($_POST['city'])) {
    $city = $_POST['city'];
    $country = "IT";
    $key1 = "02b568e5758b4ca8";

    $previsioni1 = "http://api.wunderground.com/api/$key1/conditions/q/IT/".$city.".json";
    $previsioni_json1=file_get_contents($previsioni1);
    $previsioni_data1=json_decode($previsioni_json1,true);
    //print_r ($previsioni_data1);


    echo $previsioni_data1 ['current_observation']['weather']."<br><br>";
    echo "Current temp:  ";
    echo $previsioni_data1 ['current_observation']['temp_c']."° <br><br>";
    echo "Feels like:  ";
    echo $previsioni_data1 ['current_observation']['feelslike_c']."° <br><br>";
    echo "Wind speed:  ";
    echo $previsioni_data1 ['current_observation']['wind_kph']."km/h <br><br>";
    echo "Pressure:  ";
    echo $previsioni_data1 ['current_observation']['pressure_mb']."mBar <br><br>";
    echo "Precipitations:  ";
    echo $previsioni_data1 ['current_observation']['precip_today_metric']."mm <br><br>";
    echo "Humidity:  ";
    echo $previsioni_data1 ['current_observation']['relative_humidity'];
}

?>
