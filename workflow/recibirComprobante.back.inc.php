<!-- recibirComprobante.back.inc.php -->

<?php
include 'conexion.inc.php';

function obtenerUltimoPagoAceptadoVerificado() {
    global $conn;

    $query = "SELECT * FROM academico.pagos WHERE pago_aceptado = 1 ORDER BY fecha DESC LIMIT 1";

    $result = mysqli_query($conn, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        return mysqli_fetch_assoc($result);
    } else {
        return false;
    }
}


function obtenerComprobante($conn, $usuarioId) {
    $query = "SELECT * FROM academico.comprobantes WHERE usuario_id = $usuarioId";
    $result = mysqli_query($conn, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        return mysqli_fetch_assoc($result);
    } else {
        return null;
    }
}

$resultado = obtenerUltimoPagoAceptadoVerificado();

?>
