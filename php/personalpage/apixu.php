<?php

    if (isset($_POST['city'])) {
      $city = $_POST['city'];
      $key2 = "e459170e51ef4e22a42192213170604";

      $previsioni2 ="http://api.apixu.com/v1/current.json?key=$key2&q=$city&=";
      $previsioni_json2=file_get_contents($previsioni2);
      $previsioni_data2=json_decode($previsioni_json2,true);
      //print_r ($previsioni_data2);



      echo $previsioni_data2 ['current']['condition']['text']."<br><br>";
      echo "Current temp:  ";
      echo $previsioni_data2 ['current']['temp_c']."° <br><br>";
      echo "Feels like:  ";
      echo $previsioni_data2 ['current']['feelslike_c']."° <br><br>";
      echo "Wind speed:  ";
      echo $previsioni_data2 ['current']['wind_kph']."km/h <br><br>";
      echo "Pressure:  ";
      echo $previsioni_data2 ['current']['pressure_mb']."mBar <br><br>";
      echo "Precipitations:  ";
      echo $previsioni_data2 ['current']['precip_mm']."mm <br><br>";
      echo "Humidity:  ";
      echo $previsioni_data2 ['current']['humidity']."%";

  }

?>
