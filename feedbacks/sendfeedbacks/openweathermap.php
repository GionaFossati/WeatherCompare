
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Thanks!</title>
    <link rel="stylesheet" href="../../css/main-premium.css">
    <link type="text/css" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">

  </head>
  <header>
  <div class="title">Weather Compare PREMIUM</div><hr>

</header>
  <body>




    <?php

      include('../dbconnection.php');
      $conn = mysqli_connect($servername, $username, $password, $dbname);

     $openweathermap = $_POST['star-o'];

      $sql = "INSERT INTO openweathermap(openweathermap) VALUES ('$openweathermap')";

      if(mysqli_query($conn, $sql)) { //<- if the query is accepted by the database.
       echo '<h1>Thank you for your feedback!</h1>'; //<- this is the message.
      }
      else {
        echo '<h1>There was an error in our Database, please Try again!</h1>'; //<- if not, this is.
      }

      $a0 = 'SELECT avg(weatherunderground) AS average FROM weatherunderground';
      $res0= $conn->query($a0);
      $row0 = $res0-> fetch_array(MYSQLI_NUM);

      $openweathermap_feed_value = substr($row0[0], 0, -3);


      mysqli_close($conn);

    ?>
          <br>
          <input class="input-city"  style="background-color: white;" action="action" onclick="history.go(-1);" type="button" value="Back" />
  </body>

</html>
