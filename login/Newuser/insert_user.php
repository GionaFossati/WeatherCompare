<html>
<head>
<title>Utenti</title>
</head>

<body>

<h1>Utente Registrato!</h1>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "utenti";

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

echo 'Email: '.$email.'<br>';
echo 'Password: '.$password.'<br>';


mysqli_close($conn);
?>
<a href="../login.html">Vai al Login!</a>
</body>

</html>
