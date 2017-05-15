<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "utenti";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "CREATE TABLE lista_utenti (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
email VARCHAR(50),
password CHAR(50)
)";

if (mysqli_query($conn, $sql)) {
    echo "Tabella lista_utenti creata con successo";
} else {
    echo "Errore nella creazione della tabella: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
