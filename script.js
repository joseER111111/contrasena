$(document).ready(function() {
    $('#loginForm').submit(function(e) {
        e.preventDefault(); // Evita el envío del formulario por defecto
        
        var username = $('#username').val();
        var password = $('#password').val();

        $.ajax({
            type: 'POST',
            url: 'login.php',
            data: {
                username: username,
                password: password
            },
            success: function(response) {
                if (response.trim() === "success") {
                    window.location.href = "welcome.php";
                } else {
                    alert("Invalid username or password.");
                }
            }
        });
    });
});
