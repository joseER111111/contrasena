<?php
$servername = "localhost";
$username = "root";
$password = "root";
$database = "recuperacion";

// Crea la conexión
$conn = new mysqli($servername, $username, $password, $database);

// Verifica la conexión
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
