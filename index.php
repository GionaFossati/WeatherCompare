<!DOCTYPE html>
<html>
  <head>

    <title>Progetto Informatica</title>

    <meta charset="utf-8">
    <link rel="stylesheet" href="css/main.css">
    <link type="text/css" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">

  </head>

  <body><center>

    <h1>Weather Compare</h1><br>

    <div class="City">

        <h2 class="insert"> Insert city </h2>
        <form class="box" action="index.php" method="post">
        <input type="text" name="city" placeholder="Città"> <br><br>

        <input type="submit" name="Infometeo"><br>

    </div>


      openweathermap <br><br>

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
        echo $data0['coord']['lat'];}

    ?><br><br>

        Weather Underground <br><br>

    <?php
         if (isset($_POST['city'])) {
        $city = $_POST['city'];
        $country = "IT";
        $url1 = "http://api.wunderground.com/api/02b568e5758b4ca8/conditions/q/IT/".$city.".json";
        $json1=file_get_contents($url1);
        $data1=json_decode($json1,true);

        echo $data1 ['current_observation']['temperature_string']."<br>";
        echo $data1 ['current_observation']['display_location']['latitude']."<br>";
        echo $data1 ['current_observation']['display_location']['longitude']."<br><br>";}

      ?>

      Apixu <br><br>
      <?php

          if (isset($_POST['city'])) {
            $city = $_POST['city'];
            $url2 = "http://api.apixu.com/v1/current.json?key=1612a7ea661f417faf063431170404&q=".$city;
            $json2 = file_get_contents($url2);
            $data2=json_decode($json2,true);
            /*print_r($json2);*/
            /*print_r($data2)."<br>";*/

            echo $data2 ['current']['condition']['text']."<br>";
            echo $data2 ['current']['temp_c']."°C<br>";
            echo $data2 ['current']['humidity']."<br>";

          }
       ?>

  </body>

</html>
