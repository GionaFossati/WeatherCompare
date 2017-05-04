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

          <div class="logos">

            <a class="provider openweathermap-logo">openweathermap</a>
            <a class="provider weatherunderground-logo">weatherunderground</a>
            <a class="provider apixu-logo">apixu</a>
            <div class="provider">Media Ponderata</div>

          </div>

    <main>


      <div class="forecast">

            <div class="row">
                  <div class="day">
                      Today <br>
                      <div align="center" style="font-size: 20px;"> <?php echo date("d/m"); ?> </div>
                  </div>

                  <div class="temp">
                    <?php include 'php/Today/openweathermap.php'; ?>
                  </div>

                  <div class="temp">
                     <?php include 'php/Today/weatherunderground.php';  ?>
                  </div>

                  <div class="temp">
                    <?php include 'php/Today/apixu.php';   ?>
                  </div>

            </div>


            <div class="row">

                  <div class="day">
                      Tomorrow <br>
                      <div align="center" style="font-size: 20px;"> <?php echo date("d/m", strtotime("+1 days")); ?> </div>
                  </div>

                      <div class="temp">
                      <?php include 'php/Tomorrow/openweathermap.php'; ?>
                      </div>

                      <div class="temp">
                     <?php include 'php/Tomorrow/weatherunderground.php';  ?>
                      </div>

                     <div class="temp">
                     <?php include 'php/Tomorrow/apixu.php';   ?>
                    </div>

            </div>



            <div class="row">

                    <div class="day">
                        After tomorrow <br>
                        <div align="center" style="font-size: 20px;"> <?php echo date("d/m", strtotime("+2 days")); ?> </div>
                    </div>


                      <div class="temp">
                      <?php include 'php/Thedayafter/openweathermap.php'; ?>
                      </div>

                      <div class="temp">
                      <?php include 'php/Thedayafter/weatherunderground.php';  ?>
                      </div>

                     <div class="temp">
                      <?php include 'php/Thedayafter/apixu.php';   ?>
                      </div>


            </div>

      </div>
      <div class="column">

        <div class="row"></div>
        <div class="row"> </div>
        <div class="row"> </div>

      </div>



       <?php
       $pageContents = ob_get_contents ();
       ob_end_clean ();

       echo str_replace ('<!--CITY-->', $city, $pageContents);
       ?>

 </main>


             openweathermap <br><br>
                 Weather Underground <br><br>
               Apixu <br><br>

 </body>
  </html>
