document.addEventListener('DOMContentLoaded', function () {
    document.getElementById('loginBtn').addEventListener('click', function () {
        var formData = new FormData(document.getElementById('loginForm'));

        var xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function () {
            if (xhr.readyState === XMLHttpRequest.DONE) {
                if (xhr.status === 200) {
                    console.log(xhr.responseText);
                    if (xhr.responseText.trim() === "Login exitoso") {
                        window.location.href = '../views/index.php';
                    } else {
                        alert('Nombre de usuario o contraseña incorrectos');
                    }
                } else {
                    console.log('Error en la solicitud AJAX'); 
                    alert('Error en la solicitud AJAX');
                }
            }
        };

        xhr.open('POST', '../controller/LoginController.php', true);
        xhr.send(formData);
    });
});
