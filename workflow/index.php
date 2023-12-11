<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ingreso</title>
    <!-- Agrega el enlace al archivo de estilo de Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body class="bg-light">

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h4 class="text-center">Ingreso</h4>
                    </div>
                    <div class="card-body">
                        <!-- Formulario Bootstrap -->
                        <form action='validar_ingreso.php' method="GET">
                            <div class="form-group">
                                <label for="usuario">Usuario:</label>
                                <input type="text" class="form-control" name="usuario" value="" required>
                            </div>
                            <div class="form-group">
                                <label for="contrasena">Contraseña:</label>
                                <input type="password" class="form-control" name="contrasena" value="" required>
                            </div>
                            <button type="submit" class="btn btn-primary btn-block">Aceptar</button>
                        </form>
                        <!-- Fin del formulario Bootstrap -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Agrega el script de Bootstrap al final del documento para mejorar la carga -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
