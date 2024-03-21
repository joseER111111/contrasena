<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>

</head>
<body>
<nav class="navbar bg-dark border-bottom border-body" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
    <?php
        session_start();
        // Verifica si el usuario ha iniciado sesión
        if(isset($_SESSION['username'])) {
            $username = $_SESSION['username'];
            echo "<nav>";
            echo "Bienvenido, $username";
            echo "</nav>";
        } else {
            // Si el usuario no ha iniciado sesión, redirigirlo al formulario de inicio de sesión
            header("Location: index.html");
            exit();
        }
    ?>
    </a>
    <a class="navbar-brand" href="index.html">salir</a>
  </div>
</nav>
<br><br><br>
       <center><h1>Hola muchas gracias por iniciar sesion</h1></center>
</body>
</html>
