<?php

    if (isset($_POST['city'])) {
      $city = $_POST['city'];
      $url2 = "http://api.apixu.com/v1/current.json?key=1612a7ea661f417faf063431170404&q=".$city;
      $json2 = file_get_contents($url2);
      $data2=json_decode($json2,true);
      /*print_r($json2);
      print_r($data2)."<br>";*/


    echo $data2 ['current']['condition']['text']."<br>";
    echo $data2 ['current']['temp_c']."°C<br>";
    echo $data2 ['current']['humidity']."<br>";
  }
  
?>
