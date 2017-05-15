<?php

require '/db-users.php';

$conn = mysqli_connect($servername, $username, $password, $dbname);

$sql = "CREATE TABLE  feedbacks(
  openweathermap INT(1),
  weatherunderground INT(1),
  apixu INT(1)
)";

if (mysqli_query($conn, $sql)) {
    echo "Tabella creata con successo";
} else {
    echo "Errore nella creazione della tabella: " . mysqli_error($conn);
}
 ?>
