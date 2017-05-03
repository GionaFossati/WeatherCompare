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

      <div class="forecast">

            <div class="row">

                  <div class="day">
                      Today <br>
                      <div align="center"> <?php echo date("d/m"); ?> </div>
                  </div>

                  <div class="today">
                    <?php include 'php/Today/openweathermap.php'; ?>
                  </div>

                  <div class="today">
                     <?php include 'php/Today/weatherunderground.php';  ?>
                  </div>

                  <div class="today">
                    <?php include 'php/Today/apixu.php';   ?>
                  </div>

            </div>


            <div class="row">

                  <div class="day">
                      Tomorrow <br>
                      <div align="center"> <?php echo date("d/m", strtotime("+1 days")); ?> </div>
                  </div>

            </div>



            <div class="row">

                    <div class="day">
                        After tomorrow <br>
                        <div align="center"> <?php echo date("d/m", strtotime("+2 days")); ?> </div>
                    </div>

            </div>

      </div>

            openweathermap <br><br>
                Weather Underground <br><br>
              Apixu <br><br>



       <?php
       $pageContents = ob_get_contents ();
       ob_end_clean ();

       echo str_replace ('<!--CITY-->', $city, $pageContents);
       ?>

 </main>

 </body>
  </html>
