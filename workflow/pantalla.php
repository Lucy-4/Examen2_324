<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Workflow</title>
    <!-- Agrega enlaces de Bootstrap en línea -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"></script>
</head>
<body class="bg-light">

<?php
// http://localhost/work/pantalla.php?flujo=F1&proceso=P1
$flujo = $_GET["flujo"];
$proceso = $_GET["proceso"];
$link = mysqli_connect("localhost", "root", "", "workflow");
$resultado = mysqli_query($link, "SELECT * FROM flujo WHERE flujo='$flujo' AND proceso='$proceso'");
$fila = mysqli_fetch_array($resultado);
$proceso = $fila["proceso"];
$procesosiguiente = $fila["procesosiguiente"];
$pantalla = $fila["pantalla"];
$archivo = $fila["pantalla"] . ".vista.inc.php";
?>

    <form action="motor.php" method="GET" class="container mt-5">
        <input type="hidden" name="pantalla" value="<?php echo $pantalla; ?>" />
        <input type="hidden" name="flujo" value="<?php echo $flujo; ?>" />
        <input type="hidden" name="proceso" value="<?php echo $proceso; ?>" />
        <input type="hidden" name="procesosiguiente" value="<?php echo $procesosiguiente; ?>" />

        <div class="card">
            <div class="card-body">
                <?php include $archivo; ?>
            </div>
        </div>

        <div class="mt-3">
            <button type="submit" name="Anterior" class="btn btn-secondary">Anterior</button>
            <button type="submit" name="Siguiente" class="btn btn-primary">Siguiente</button>
        </div>
    </form>

</body>
</html>
