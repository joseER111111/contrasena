$(document).ready(function() {
    $('#changePasswordForm').submit(function(e) {
        e.preventDefault(); // Evita el envío del formulario por defecto
        var username = $('#username').val(); // Obtén el nombre de usuario
        var newPassword = $('#newPassword').val();
        var confirmPassword = $('#confirmPassword').val();

        if (newPassword !== confirmPassword) {
            alert("Passwords do not match.");
            return;
        }

        $.ajax({
            type: 'POST',
            url: 'change_password.php',
            data: {
                username: username,
                newPassword: newPassword
            },
            success: function(response) {
                alert(response); // Muestra el mensaje de respuesta como una alerta
                if (response === "Password updated successfully.") {
                    window.location.href = "index.html"; // Redirige al usuario al index.html
                }
            }
        });
    });
});
