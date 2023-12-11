<?php
include 'conexion.inc.php';

// Obtener el ID del pago a verificar
$idPago = isset($_GET['id']) ? $_GET['id'] : null;

// Verificar que el ID del pago es válido
if (isset($idPago) && is_numeric($idPago)) {
    // Actualizar la columna pago_aceptado a 1
    $queryActualizarPago = "UPDATE academico.pagos SET pago_aceptado = 1 WHERE id = $idPago";

    if (mysqli_query($conn, $queryActualizarPago)) {
        // Éxito al actualizar
        echo "El pago ha sido verificado y aceptado exitosamente";
    } else {
        // Error al actualizar
        echo "Error al verificar y aceptar el pago: " . mysqli_error($conn);
    }
} else {
    // ID de pago no válido
    echo "Error: ID de pago no válido";
}

// Consultar todos los pagos
$queryTodosLosPagos = "SELECT * FROM academico.pagos";
$resultTodosLosPagos = mysqli_query($conn, $queryTodosLosPagos);

// Mostrar la lista completa de pagos
echo "<h3>Lista completa de pagos:</h3>";
echo "<table border='1'>
        <tr>
            <th>ID</th>
            <th>Usuario</th>
            <th>Monto</th>
            <th>Fecha</th>
            <th>Aceptado</th>
        </tr>";

while ($row = mysqli_fetch_assoc($resultTodosLosPagos)) {
    echo "<tr>
            <td>{$row['id']}</td>
            <td>{$row['usuario']}</td>
            <td>{$row['monto']}</td>
            <td>{$row['fecha']}</td>
            <td>{$row['pago_aceptado']}</td>
          </tr>";
}

echo "</table>";

// Cierra la conexión a la base de datos
mysqli_close($conn);
?>
