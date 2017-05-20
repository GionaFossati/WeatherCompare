<?php //<- open a php script.

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "feedbacks";
  $conn = mysqli_connect($servername, $username, $password, $dbname);

  $a0 = 'SELECT avg(weatherunderground) AS average FROM weatherunderground';
  $res0= $conn->query($a0);
  $row0 = $res0-> fetch_array(MYSQLI_NUM);



  $openweathermap_feed_value = substr($row0[0], 0, -3);
  mysqli_close($conn);
?>
