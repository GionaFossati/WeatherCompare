<?php
include('../dbconnection.php'); //<- include our connection details for database interaction.
$conn = mysqli_connect($servername, $username, $password, $dbname);


  $weatherunderground = $_POST['star-w']; //<- set weatherunderground input to a variable.
  $sql = "INSERT INTO feedbacks(weatherunderground) VALUES ('$_POST[star-w]')";//<-database structure must be right.

if(mysql_query($sql)) { //<- if the query is accepted by the database.
 echo 'Thank you for your feedbacks!'; //<- this is the message.
}
else {
  echo 'There was an error in our Database, please Try again!'; //<- if not, this is.
}

mysqli_close($conn);

?>
