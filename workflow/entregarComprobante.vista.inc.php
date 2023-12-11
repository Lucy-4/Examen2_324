<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entregar Comprobante</title>
    
</head>
<body>

<div class="container">
    <?php
    include 'entregarComprobante.back.inc.php';

    if ($resultado) {
        $pago = $resultado['pago'];
        $usuario = $resultado['usuario'];

        echo "<h2>Último Pago Aceptado</h2>";
        echo "<p><strong>Usuario:</strong> {$usuario}</p>";
        echo "<p><strong>Monto:</strong> {$pago['monto']}</p>";
        echo "<p><strong>Fecha:</strong> {$pago['fecha']}</p>";
    } else {
        echo "<p>No se encontraron pagos aceptados y verificados.</p>";
    }
    ?>
</div>

</body>
</html>
