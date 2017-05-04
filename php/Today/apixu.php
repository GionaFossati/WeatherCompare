<?php

    if (isset($_POST['city'])) {
      $city = $_POST['city'];
      $key2 = "1612a7ea661f417faf063431170404";
      $forecast_days='3';

      $previsioni2 ="http://api.apixu.com/v1/forecast.json?key=$key2&q=$city&days=$forecast_days&=";
      $previsioni_json2=file_get_contents($previsioni2);
      $previsioni_data2=json_decode($previsioni_json2,true);
      //print_r ($previsioni_data2);


      $p2 = explode(".", $previsioni_data2 ['forecast']['forecastday']['0']['day']['maxtemp_c']);
      echo $p2[0]."° <br>";
      $p22 = explode(".", $previsioni_data2 ['forecast']['forecastday']['0']['day']['mintemp_c']);
      echo $p22[0]."°";

  }

?>
