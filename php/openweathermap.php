<?php

    if (isset($_POST['city'])) {
    $city = $_POST['city'];
    $country = "IT"; //Two digit country code
    $url0 = "http://api.openweathermap.org/data/2.5/weather?q=".$city.",".$country."&APPID=79f1dbf6ed137706eb49daeb2fe46355&units=metric&cnt=7&lang=en";
    $json0=file_get_contents($url0);
    $data0=json_decode($json0,true);
    
    echo $data0['main']['temp']."°C <br>";
    echo $data0['weather'][0]['main']."<br>";
    echo $data0['clouds']['all']."<br>";
    echo $data0['wind']['speed']."<br>";
    echo $data0['coord']['lon']."<br>";
    echo $data0['coord']['lat'];
  }

?>
