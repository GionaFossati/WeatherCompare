<?php
session_start(); //inizio la sessione
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "utenti";

$conn = mysqli_connect($servername, $username, $password, $dbname);
mysqli_select_db("$dbname",$conn);

$email = $_POST['email'];
$password = $_POST['password'];

if (isset($username) && isset($password))
{
  $_SESSION["email"]=$email;
  $_SESSION["password"]=$password;

  $query = mysqli_query($conn, "SELECT * FROM lista_utenti WHERE email = '".$email."' AND password = '".$password."'")
    or DIE('query non riuscita'.mysql_error());

    if (mysqli_num_rows($query)) {
      $row = mysqli_fetch_assoc($query);
      $_SESSION["logged"] =true;
      header("location:../results.php");
    } else {
      header("location:newuser/newuser.html");
    }}

?>
