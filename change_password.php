<?php
session_start();
require_once 'db_connection.php'; // Archivo que contiene la conexión a la base de datos

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verificar si el usuario ha iniciado sesión
    if (!isset($_SESSION['username'])) {
        echo "Error: User not logged in.";
        exit();
    }

    $username = $_POST['username'];
    $newPassword = $_POST['newPassword'];

    // Verificar si el usuario existe en la base de datos
    $sql = "SELECT * FROM users WHERE username = '$username'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Actualizar la contraseña del usuario
        $updateSql = "UPDATE users SET password = '$newPassword' WHERE username = '$username'";
        if ($conn->query($updateSql) === TRUE) {
            echo "Password updated successfully.";
        } else {
            echo "Error updating password: " . $conn->error;
        }
    } else {
        echo "User not found.";
    }
}
?>
