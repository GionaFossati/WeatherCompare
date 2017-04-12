<!DOCTYPE html>
<html>
  <head>
    <title>Risultati Meteo per <!--CITY--></title>

    <meta charset="utf-8">
    <link rel="stylesheet" href="css/results.css">
    <link type="text/css" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
  </head>
  <body>

    <header>

        <div class="title">Weather Compare</div>
        <form class="city" action="results.php" method="post">
            <input type="text" name="city" value="<!--CITY-->" onfocus="this.select()"> <br><br>
        </form>
    </header>

    <main>

      <div class="openweathermap">
          openweathermap <br><br>
          <?php include 'php/openweathermap.php'; ?>

          <br><br>

      </div>

      <div class="weatherunderground">

          Weather Underground <br><br>
          <?php   include 'php/weatherunderground.php';  ?>

      </div><br><br>

      <div class="apixu">

        Apixu <br><br>
        <?php  include 'php/apixu.php';   ?>

       </div>

       <?php
       $pageContents = ob_get_contents ();
       ob_end_clean ();

       echo str_replace ('<!--CITY-->', $city, $pageContents);
       ?>

 </main>

 </body>
  </html>
