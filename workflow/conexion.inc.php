<?php
$localhost = "localhost"; // Reemplaza con tu servidor de base de datos
$root = "root"; // Reemplaza con tu nombre de usuario de base de datos
$database = "workflow"; // Reemplaza con el nombre de tu base de datos

$conn = new mysqli($localhost, $root,"" , $database);

if ($conn->connect_error) {
    die("La conexión a la base de datos falló: " . $conn->connect_error);
}
?>
