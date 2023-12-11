<?php
$link = mysqli_connect("localhost", "root", "", "workflow");

// Configurar la codificación a UTF-8
mysqli_set_charset($link, "utf8");

session_start();

$usuario = $_SESSION["usuario"];

$sql = "SELECT * FROM seguimiento WHERE usuario = '$usuario' AND fechahorafin IS NULL ORDER BY fechahorainicio";
$resultado = mysqli_query($link, $sql);

echo "<table>";
echo "<tr>";
echo "<td>flujo</td>";
echo "<td>proceso</td>";
echo "<td>fecha inicio</td>";
echo "<td>Accion</td>";
echo "</tr>";

while ($fila = mysqli_fetch_array($resultado)) {
    echo "<tr>";
    echo "<td>{$fila['flujo']}</td>";
    echo "<td>{$fila['proceso']}</td>";
    echo "<td>{$fila['fechahorainicio']}</td>";
    echo "<td><a href='pantalla.php?flujo={$fila['flujo']}&proceso={$fila['proceso']}'>Ver</a></td>";
    echo "</tr>";
}

echo "</table>";

?>
