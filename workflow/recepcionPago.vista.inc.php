<!-- recepcionPago.vista.inc.php -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recepción de Pagos</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>
    <div id="container">
        <h3>Recepción de Pagos</h3>

        <?php
        include 'conexion.inc.php';

        // Consulta para obtener los pagos
        $queryPagos = "SELECT * FROM academico.pagos";
        $resultPagos = mysqli_query($conn, $queryPagos);

        if ($resultPagos) {
            // Mostrar los pagos en una tabla
            echo "<table border='1'>";
            echo "<tr><th>Usuario</th><th>Monto</th><th>Fecha</th><th>Verificar Pago</th></tr>";

            while ($rowPago = mysqli_fetch_assoc($resultPagos)) {
                echo "<tr>";
                echo "<td>{$rowPago['usuario']}</td>";
                echo "<td>{$rowPago['monto']}</td>";
                echo "<td>{$rowPago['fecha']}</td>";

                // Mostrar un botón para verificar el pago sin redireccionar
                echo "<td>";
                if (!$rowPago['pago_aceptado']) {
                    echo "<button class='verificar-pago' data-id='{$rowPago['id']}'>Verificar y Aceptar Pago</button>";
                } else {
                    echo "Verificado y Aceptado";
                }
                echo "</td>";

                echo "</tr>";
            }

            echo "</table>";
        } else {
            echo "Error al obtener los pagos: " . mysqli_error($conn);
        }

        // Cierra la conexión a la base de datos
        mysqli_close($conn);
        ?>

        <script>
            // Agregar un script JavaScript para manejar la verificación del pago
            document.addEventListener('DOMContentLoaded', function() {
                const botonesVerificarPago = document.querySelectorAll('.verificar-pago');

                botonesVerificarPago.forEach(boton => {
                    boton.addEventListener('click', function() {
                        // Obtener el ID del pago
                        const idPago = this.dataset.id;

                        // Llamar a la función para verificar el pago sin redireccionar
                        verificarPago(idPago);
                    });
                });

                function verificarPago(idPago) {
                    // Enviar una solicitud AJAX o utilizar fetch para llamar a recepcionPago.back.inc.php con el ID del pago
                    // Puedes utilizar el código PHP de recepcionPago.back.inc.php aquí si lo prefieres
                    // Ejemplo utilizando fetch:
                    fetch(`recepcionPago.back.inc.php?id=${idPago}`)
                        .then(response => response.text())
                        .then(data => {
                            // Mostrar la respuesta en algún lugar de la página si es necesario
                            console.log(data);
                            // Puedes actualizar la fila de la tabla o mostrar un mensaje al usuario según tu lógica
                        })
                        .catch(error => {
                            console.error('Error al verificar el pago:', error);
                        });
                }
            });
        </script>
    </div>
</body>
</html>
