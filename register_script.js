$(document).ready(function() {
    $('#registerForm').submit(function(e) {
        e.preventDefault(); // Evita el envío del formulario por defecto
        var username = $('#username').val(); // Obtén el nombre de usuario
        var password = $('#password').val();
        var email = $('#email').val(); // Obtén el correo electrónico

        $.ajax({
            type: 'POST',
            url: 'register.php',
            data: {
                username: username,
                password: password,
                email: email // Envía el correo electrónico al PHP
            },
            success: function(response) {
                alert(response); // Muestra el mensaje de respuesta como una alerta
                if (response === "User registered successfully.") {
                    window.location.href = "index.html"; // Redirige al usuario al index.html
                }
            }
        });
    });
});
