<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sesión</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title text-center">Iniciar sesión</h2>
                        <form id="loginForm">
                            <div class="form-group">
                                <label for="username">Correo:</label>
                                <input type="text" id="username" name="correo" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="password">Contraseña:</label>
                                <input type="password" id="password" name="contraseña" class="form-control" required>
                            </div>
                            <button type="button" id="loginBtn" class="btn btn-primary btn-block">Iniciar sesión</button>
                        </form>
                        <p class="text-center mt-3">¿No tienes una cuenta? <a href="registro.php">Regístrate aquí</a></p>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>

    <script src="../scripts/login.js"></script>
</body>
</html>

