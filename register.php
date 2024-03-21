<?php
require_once 'db_connection.php'; // Archivo que contiene la conexión a la base de datos

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email']; // Recibe el correo electrónico del formulario

    // Verificar si el usuario ya existe en la base de datos
    $sql = "SELECT * FROM users WHERE username = '$username'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "Username already exists.";
    } else {
        // Insertar nuevo usuario en la base de datos
        $insertSql = "INSERT INTO users (username, password, email) VALUES ('$username', '$password', '$email')";
        if ($conn->query($insertSql) === TRUE) {
            echo "User registered successfully.";
        } else {
            echo "Error registering user: " . $conn->error;
        }
    }
}
?>
