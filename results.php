<!DOCTYPE html>
<html>
  <head>
    <title>Risultati Meteo per <!--CITY--></title>

    <meta charset="utf-8">
    <link rel="stylesheet" href="css/main.css">
    <link type="text/css" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
  </head>
  <body>


  <div class="openweathermap">
      openweathermap <br><br>
      <?php include 'php/openweathermap.php'; ?>

      <br><br>

  </div>

  <div class="weatherunderground">

      Weather Underground <br><br>
      <?php   include 'php/weatherunderground.php';  ?>

  </div>

  <div class="apixu">

    Apixu <br><br>
    <?php  include 'php/apixu.php';   ?>

   </div>


 </body>
  </html>

  <?php
  $pageContents = ob_get_contents ();
  ob_end_clean ();

  echo str_replace ('<!--CITY-->', $city, $pageContents);
   ?>
