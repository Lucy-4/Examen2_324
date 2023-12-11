<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Realizar Pago</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <div id="container">
        <h3>Realizar Pago</h3>
        <p>Por favor, seleccione el tipo de pago:</p>

        <form action="realizarPago.back.inc.php" method="get">
            <!-- Lista desplegable para seleccionar el tipo de pago -->
            <label for="tipo_pago">Tipo de Pago:</label>
            <select name="tipo_pago" required>
                <option value="nacional">Nacionales Bs. 1.008</option>
                <option value="extranjero">Extranjeros Bs. 1.998</option>
                <option value="tecnico">Técnico Universitario Superior Bs. 515</option>
            </select>

            <!-- Otros campos del formulario si es necesario -->

            <!-- Puedes quitar el botón de envío si no es necesario -->
            <input type="submit" name="RealizarPago" value="Realizar Pago"> 
       </form>
    </div>
</body>
</html>
