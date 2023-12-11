<?php 
// Iniciar sesión
session_start();

$link = mysqli_connect("localhost", "root", "", "workflow");

$usuario = $_GET["usuario"];
$contrasena = $_GET["contrasena"];

// Validar ingreso
$queryValidacion = "SELECT count(*) as cantidad FROM academico.usuarios WHERE nombre='$usuario' AND contrasena='$contrasena'";
$resultadoValidacion = mysqli_query($link, $queryValidacion);
$filaValidacion = mysqli_fetch_array($resultadoValidacion);

if ($filaValidacion["cantidad"] > 0) {
    // Asignar el nombre de usuario a la sesión
    $_SESSION["usuario"] = $usuario;

    // Registrar ingreso en la tabla seguimiento
    $queryInsert = "INSERT INTO seguimiento (usuario, fechahorainicio, flujo, proceso) VALUES ('$usuario', NOW(), 'F1', 'P1')";
    $resultInsert = mysqli_query($link, $queryInsert);

    if (!$resultInsert) {
        die("Error al insertar en la tabla seguimiento: " . mysqli_error($link));
    }

    // Redirigir a bandeja.php
    header("Location: bandeja.php");
    exit;
} else {
    // Autenticación fallida
    header("Location: index.php");
    exit;
}
?>
