<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Progetto Informatica</title>
  </head>

  <body><center>
    <h1>Weather Compare</h1><br>
    <h2> Insert city </h2>
    <form action="index.php" method="post">
      <input type="text" name="city" placeholder="Città"> <br><br>

      <input type="submit" name="Infometeo"><br>
      openweathermap <br><br>
    <?php
      if (isset($_POST['city'])) {
      $city = $_POST['city'];
      $country = "IT"; //Two digit country code
      $url0 = "http://api.openweathermap.org/data/2.5/weather?q=".$city.",".$country."&APPID=79f1dbf6ed137706eb49daeb2fe46355&units=metric&cnt=7&lang=en";
      $json0=file_get_contents($url0);
      $data0=json_decode($json0,true);
      echo $data0['main']['temp']."° <br>";

      echo $data0['weather'][0]['main']."<br>";

      echo $data0['clouds']['all']."<br>";

      echo $data0['wind']['speed']."<br>";
      echo $data0['coord']['lon']."<br>";
      echo $data0['coord']['lat'];}
        ?><br><br><br>
        Weather Underground <br><br>
        <?php
         if (isset($_POST['city'])) {
        $city = $_POST['city'];
        $country = "IT";
        $url1 = "http://api.wunderground.com/api/02b568e5758b4ca8/conditions/q/IT/".$city.".json";
        $json1=file_get_contents($url1);
        $data1=json_decode($json1,true);
        //Get current Temperature
        echo $data1 ['current_observation']['temperature_string']."<br>";
        echo $data1 ['current_observation']['display_location']['latitude']."<br>";
        echo $data1 ['current_observation']['display_location']['longitude'];}
          ?>

  </body>

</html>
