
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
          require('../dbconnection.php'); //<- include our connection details for database interaction.
          $conn = mysqli_connect($servername, $username, $password, $dbname);

          $apixu = $_POST['star-a']; //<- set textbox to variable.
          $sql = "INSERT INTO apixu (apixu) VALUES ('$apixu')";//<-database structure must be right.

          if(mysqli_query($conn, $sql)) { //<- if the query is accepted by the database.
            echo '<h1>Thank you for your feedback!</h1>'; //<- this is the message.
          }
          else {
            echo 'There was an error in our Database, please Try again!'; //<- if not, this is.
          }


          $a2 = 'SELECT avg(apixu) AS average FROM apixu';
          $res2= $conn->query($a2);
          $row2 = $res2-> fetch_array(MYSQLI_NUM);

          $apixu_feed_value = substr($row2[0], 0, -3);


          mysqli_close($conn);
          ?>
          <br>
          <input class="input-city" style="background-color: white;" action="action" onclick="history.go(-1);" type="button" value="Back" />
  </body>

</html>
