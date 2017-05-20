  <?php
include 'feedbacks/dbconnection.php';
      $conn = mysqli_connect($servername, $username, $password, $dbname);


    $a1 = 'SELECT avg(weatherunderground) AS average FROM weatherunderground';
    $res1= $conn->query($a1);
    $row1 = $res1-> fetch_array(MYSQLI_NUM);



    $weatherunderground_feed_value =  substr($row1[0], 0, -3);
    mysqli_close($conn);
     ?>
