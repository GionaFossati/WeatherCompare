<?php

    if (isset($_POST['city'])) {
      $city = $_POST['city'];
      $key2 = "1612a7ea661f417faf063431170404";
      $forecast_days='3';

      $meteo2 = "http://api.apixu.com/v1/current.json?key=$key2&q=$city";
      $meteo_json2 = file_get_contents($meteo2);
      $meteo_data2=json_decode($meteo_json2,true);
      /*print_r($json2);
      print_r($data2)."<br>";*/

      $previsioni2 ="http://api.apixu.com/v1/forecast.json?key=$key2&q=$city&days=$forecast_days&=";
      $previsioni_json2=file_get_contents($previsioni2);
      $previsioni_data2=json_decode($previsioni_json2,true);
      //print_r ($previsioni_data2);

      echo $meteo_data2 ['current']['condition']['text']."<br>";
      echo $meteo_data2 ['current']['temp_c']."°C<br>";
      echo $meteo_data2 ['current']['humidity']."<br>";

      echo "Il giorno ";
      echo $previsioni_data2 ['forecast']['forecastday']['0']['date'];
      echo " la temperatura max sarà: ";
      echo $previsioni_data2 ['forecast']['forecastday']['0']['day']['maxtemp_c'];
      echo " e la minima: ";
      echo $previsioni_data2 ['forecast']['forecastday']['0']['day']['mintemp_c'];



  }

?>
