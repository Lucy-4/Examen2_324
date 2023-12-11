<?php
include 'conexion.inc.php';


function obtenerUltimoPagoAceptadoVerificado($conn) {
    $queryUltimoPago = "SELECT * FROM academico.pagos WHERE pago_aceptado = 1 ORDER BY fecha DESC LIMIT 1";
    $resultUltimoPago = mysqli_query($conn, $queryUltimoPago);

    if ($resultUltimoPago && mysqli_num_rows($resultUltimoPago) > 0) {
        $rowUltimoPago = mysqli_fetch_assoc($resultUltimoPago);
        mysqli_free_result($resultUltimoPago);

        $usuario = $rowUltimoPago['usuario'];

        if (is_array($rowUltimoPago) && array_key_exists('usuario', $rowUltimoPago)) {
            $usuarioNombre = $usuario;  // Aquí ya obtienes el nombre del usuario directamente
            return ['pago' => $rowUltimoPago, 'usuario' => $usuarioNombre];
        } else {
            echo "Error: Estructura de datos inesperada en \$rowUltimoPago.";
        }
    }

    return null;
}


$resultado = obtenerUltimoPagoAceptadoVerificado($conn);
// var_dump($resultado);

//var_dump($resultado);

// No cerramos la conexión aquí, para evitar el error que mencionabas.
?>

