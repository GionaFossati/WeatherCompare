<!DOCTYPE html>
<html>
  <head>
    <title>Risultati Meteo per <!--CITY--></title>

    <meta charset="utf-8">
    <link rel="stylesheet" href="css/results-premium.css">
    <link type="text/css" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
  </head>

  <body>

    <header>

        <div class="title">Weather Compare PREMIUM</div>
        <form class="city" action="results-premium.php" method="post">
            <input class="input-city" type="text" name="city" value="<!--CITY-->" onfocus="this.select()"> <br><br>
        </form>
    </header>

          <div class="logos">

            <a class="provider" href="http://openweathermap.org/find?q=<!--CITY-->" target="_blank">OpenWeatherMap </a>
            <a class="provider" href="https://www.wunderground.com/cgi-bin/findweather/getForecast?query=<!--CITY-->" target="_blank">WeatherUnderground</a>
            <a class="provider" href="https://www.apixu.com/" target="_blank">Apixu</a>
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

                  <div class="line_row"> </div>


                  <div class="temp">
                     <?php include 'php/Today/weatherunderground.php';  ?>
                  </div>

                  <div class="line_row"> </div>


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

                      <div class="line_row"> </div>


                      <div class="temp">
                     <?php include 'php/Tomorrow/weatherunderground.php';  ?>
                      </div>

                      <div class="line_row"> </div>


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

                      <div class="line_row"> </div>


                      <div class="temp">
                      <?php include 'php/Thedayafter/weatherunderground.php';  ?>
                      </div>

                      <div class="line_row"> </div>


                     <div class="temp">
                      <?php include 'php/Thedayafter/apixu.php';   ?>
                      </div>


            </div>

      </div>

      <?php
          include 'feedbacks/dbconnection.php';
              $conn = mysqli_connect($servername, $username, $password, $dbname);


              $a0 = 'SELECT avg(weatherunderground) AS average FROM weatherunderground';
              $res0= $conn->query($a0);
              $row0 = $res0-> fetch_array(MYSQLI_NUM);


              $openweathermap_feed_value = substr($row0[0], 0, -3);

            $a1 = 'SELECT avg(weatherunderground) AS average FROM weatherunderground';
            $res1= $conn->query($a1);
            $row1 = $res1-> fetch_array(MYSQLI_NUM);


            $weatherunderground_feed_value =  substr($row1[0], 0, -3);

            $a2 = 'SELECT avg(apixu) AS average FROM apixu';
            $res2= $conn->query($a2);
            $row2 = $res2-> fetch_array(MYSQLI_NUM);


            $apixu_feed_value = substr($row2[0], 0, -3);
            mysqli_close($conn);

          function media($x,$y,$z) {
            $m = ( ($x * $GLOBALS['openweathermap_feed_value']) + ($y * $GLOBALS['weatherunderground_feed_value']) + ($z * $GLOBALS['apixu_feed_value']) ) / ($GLOBALS['openweathermap_feed_value'] + $GLOBALS['weatherunderground_feed_value'] + $GLOBALS['apixu_feed_value']);
            return $m;
              }
      ?>

      <div class="column">

            <div class="temp media">

                <?php $media_today_max = explode(".", media($p0_0[0],$p1_0,$p2_0[0]));
                echo $media_today_max[0]."° <br>";

                $media_today_min = explode(".", media($p00_0[0],$p11_0,$p22_0[0]));
                echo $media_today_min[0]."°";

                ?>
            </div>

            <div class="line_column"> </div>

            <div class="temp media">

                  <?php  $media_tomorrow_max = explode(".", media($p0_1[0],$p1_1,$p2_1[0]));
                      echo $media_tomorrow_max[0]."° <br>";

                      $media_tomorrow_min = explode(".", media($p00_1[0],$p11_1,$p22_1[0]));
                      echo $media_tomorrow_min[0]."°";
                  ?>
            </div>

            <div class="line_column"> </div>

            <div class="temp media">
                  <?php  $media_dayafter_max = explode(".", media($p0_2[0],$p1_2,$p2_2[0]));
                        echo $media_dayafter_max[0]."° <br>";

                        $media_dayafter_min = explode(".", media($p00_2[0],$p11_2,$p22_2[0]));
                        echo $media_dayafter_min[0]."°";
                  ?>
            </div>

      </div>



 </main>
   <h2>Current weather:</h2>
 <div class="logos2 logos">

   <a class="provider" href="http://openweathermap.org/find?q=<!--CITY-->" target="_blank">OpenWeatherMap </a>
   <a class="provider" href="https://www.wunderground.com/cgi-bin/findweather/getForecast?query=<!--CITY-->" target="_blank">WeatherUnderground</a>
   <a class="provider" href="https://www.apixu.com/" target="_blank">Apixu</a> </div>
 <div class="current">

   <div class="singlecurrent"><?php include 'php/personalpage/openweathermap.php'; ?>     </div>
   <div class="singlecurrent"><?php include 'php/personalpage/weatherunderground.php'; ?></div>
   <div class="singlecurrent"><?php include 'php/personalpage/apixu.php'; ?></div>
</div>
<div class="current">

  <div class="singlecurrent">Give a feedback to OpenWeatherMap
    <form action="feedbacks/sendfeedbacks/openweathermap.php" method="post" >

    1  <input  type="radio" name="star-o" value="1" onclick="this.form.submit()"/>
    2  <input  type="radio" name="star-o" value="2" onclick="this.form.submit()"/>
    3  <input  type="radio" name="star-o" value="3" onclick="this.form.submit()"/>
    4  <input  type="radio" name="star-o" value="4" onclick="this.form.submit()"/>
    5  <input  type="radio" name="star-o" value="5" onclick="this.form.submit()"/><br>

    </form>
  </div>

  <div class="singlecurrent">Give a feedback to WeatherUnderground
    <form action="feedbacks/sendfeedbacks/weatherunderground.php" method="post">

    1  <input  type="radio" name="star-w" value="1" onclick="this.form.submit()"/>
    2  <input  type="radio" name="star-w" value="2" onclick="this.form.submit()"/>
    3  <input  type="radio" name="star-w" value="3" onclick="this.form.submit()"/>
    4  <input  type="radio" name="star-w" value="4" onclick="this.form.submit()"/>
    5  <input  type="radio" name="star-w" value="5" onclick="this.form.submit()"/><br>

    </form>
  </div>

  <div class="singlecurrent">Give a feedback to <br> Apixu
    <form action="feedbacks/sendfeedbacks/apixu.php" method="post">

      1  <input  type="radio" name="star-a" value="1" onclick="this.form.submit()"/>
      2  <input  type="radio" name="star-a" value="2" onclick="this.form.submit()"/>
      3  <input  type="radio" name="star-a" value="3" onclick="this.form.submit()"/>
      4  <input  type="radio" name="star-a" value="4" onclick="this.form.submit()"/>
      5  <input  type="radio" name="star-a" value="5" onclick="this.form.submit()"/>

      </form>

  </div>

</div>
 <footer>
   An University Project | Work in Progress | Author: <a href="https://gionafossati.github.io/" target="_blank">Giona Fossati</a> | Project's Repository on GitHub: <a href="https://github.com/GionaFossati/WeatherCompare" target="_blank">Link</a>
 </footer>


 <?php
 $pageContents = ob_get_contents ();
 ob_end_clean ();

 echo str_replace ('<!--CITY-->', $city, $pageContents);
 ?>

 </body>
  </html>
