<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Thanks!</title>
    <link rel="stylesheet" href="../../css/main-premium.css">
    <link type="text/css" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">

  </head>
  <header>
  <div class="title">Weather Compare</div><hr>

</header>
  <body>




    <?php
    include('../dbconnection.php'); //<- include our connection details for database interaction.
    $conn = mysqli_connect($servername, $username, $password, $dbname);


      $weatherunderground = $_POST['star-w']; //<- set weatherunderground input to a variable.
      $sql = "INSERT INTO weatherunderground(weatherunderground) VALUES ('$weatherunderground')";//<-database structure must be right.

    if(mysqli_query($conn, $sql)) { //<- if the query is accepted by the database.
     echo '<h1>Thank you for your feedback!</h1>'; //<- this is the message.
    }
    else {
      echo '<h1>There was an error in our Database, please Try again!</h1>'; //<- if not, this is.
    }


    $a1 = 'SELECT avg(weatherunderground) AS average FROM weatherunderground';
    $res1= $conn->query($a1);
    $row1 = $res1-> fetch_array(MYSQLI_NUM);

    $weatherunderground_feed_value =  substr($row1[0], 0, -3);


    mysqli_close($conn);

    ?>
          <br>
          <input class="input-city" style="background-color: white;" action="action" onclick="history.go(-1);" type="button" value="Back" />
  </body>

</html>
