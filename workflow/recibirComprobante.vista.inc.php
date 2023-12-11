<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comprobante de Pago</title>
    
</head>
<body>

<!-- ... (código anterior) ... -->

<div class="comprobante">
  <?php
include 'entregarComprobante.back.inc.php';

if ($resultado) {
    $pago = $resultado['pago'];
    $usuario = $resultado['usuario'];

    echo "<h2>Último Pago Aceptado</h2>";
    echo "<p>Usuario: {$usuario}</p>";
    echo "<p>Monto: {$pago['monto']}</p>";
    echo "<p>Fecha: {$pago['fecha']}</p>";
} else {
    echo "No se encontraron pagos aceptados y verificados.";
}
?>

</div>

<div id="container">
        <h3>Reunir Documentación</h3>
        <p>Documentación requerida:</p>
        <ol>
            <li>Un ejemplar del CERTIFICADO DE CALIFICACIONES DE GRADO.</li>
            <li>Fotocopia Legalizada del Acta de Modalidad de Graduación o su equivalente, respaldado con Recibo Original (sellado).</li>
            <li>Certificado actualizado de la Biblioteca Central de la UMSA, acreditando no deber libros, se obtiene previa solicitud en la Biblioteca Especializada de su Carrera y/o Facultad.</li>
            <li>Certificado de la Biblioteca Central de la UMSA - acreditando la entrega de dos (2) ejemplares de la Tesis, Trabajo Dirigido o Proyecto de Grado con su respectivo Resumen de 200 palabras además de dos (2) CD’s con el documento grabado en formato Word y PDF en un solo archivo - se obtiene previa entrega de los mismos en la Biblioteca especializada de su Carrera y/o Facultad.</li>
            <li>Fotocopias simples anverso y reverso del Diploma de Bachiller (en caso de haber ingresado a la UMSA antes de emitido el Diploma de Bachiller, adjuntar fotocopia legalizada de la libreta o certificado de calificaciones del último curso de secundaria).</li>
            <li>Certificado actualizado de encuesta del DSIE (EX C.P.D.I.).</li>
            <li>Adjuntar fotocopia de matrícula (cualquier gestión).</li>
            <li>Nacionales: Presentar Certificado de Nacimiento original computarizado (actualizado en fechas).</li>
            <li>Extranjeros: Presentar Certificado de Nacimiento original (si está en otro idioma con traducción del CETI), fotocopia de pasaporte ambos legalizados por Consulado y Cancillería o apostillado, y Fotocopia simple del Carnet de Radicatoria.</li>
            <li>Dos (2) fotografías a color en papel mate, fondo plomo claro, 3,5 x 3,5 cm, no digital, de frente, sin bordes y sin lentes, presentar en sobre pequeño plástico transparente (NO ESCRIBIR AL REVERSO DE LAS FOTOGRAFÍAS).</li>
        </ol>
        <p>NOTA: Toda la documentación deberá ser presentada en el orden establecido en los requisitos, en un sobre plástico transparente con broches en las fechas de RECEPCIÓN DE DOCUMENTOS en horario discontinuo (no perforados ni engrapados).</p>
            <!-- Formulario para subir archivo PDF -->
            <form action="procesarDocumento.php" method="post" enctype="multipart/form-data">
                <label for="archivo">Subir archivo PDF:</label>
                <input type="file" name="archivo" accept=".pdf" required>

        </div>
</body>
</html>
