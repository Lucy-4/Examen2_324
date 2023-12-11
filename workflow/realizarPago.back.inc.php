<?php
session_start();
$tipo_pago = $_GET["tipo_pago"];
    $usuario = $_SESSION["nombre"];
 echo $usuario;
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    // Conectar a la base de datos
    $link = mysqli_connect("localhost", "root", "", "workflow");

    // Validar conexión
    if (!$link) {
        die("Error de conexión: " . mysqli_connect_error());
    }

    // Obtener datos del formulario desde la URL
    $tipo_pago = $_GET["tipo_pago"];
    $usuario = $_SESSION["usuario"];
   

    // Asignar monto según el tipo de pago
    switch ($tipo_pago) {
        case "nacional":
            $monto = 1008;
            break;
        case "extranjero":
            $monto = 1998;
            break;
        case "tecnico":
            $monto = 515;
            break;
        default:
            $monto = 0;
    }

    // Insertar el pago en la base de datos
    $query = "INSERT INTO academico.pagos (usuario, monto, fecha) VALUES ('$usuario', '$monto', NOW())";
    $result = mysqli_query($link, $query);

    
} else {
    // Acceso no autorizado, redirigir al formulario de realizarPago
    header("Location: realizarPago.vista.inc.php");
    exit();
}
?>
