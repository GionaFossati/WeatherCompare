<?php
include '../dbconnection.php';

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "INSERT INTO lista_utenti (email, password)
VALUES ('$email', '$password')";

mysqli_query($conn, $sql);

$sql2 = "SELECT * FROM lista_utenti";
$result = mysqli_query($conn, $sql2);

mysqli_close($conn);
?>
