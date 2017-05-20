<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "feedbacks";
$conn = mysqli_connect($servername, $username, $password, $dbname);


$a2 = 'SELECT avg(apixu) AS average FROM apixu';
$res2= $conn->query($a2);
$row2 = $res2-> fetch_array(MYSQLI_NUM);


$apixu_feed_value = substr($row2[0], 0, -3);
mysqli_close($conn);
?>
