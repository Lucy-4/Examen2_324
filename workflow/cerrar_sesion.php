<?php
session_start();

// Destruir todas las variables de sesión
session_destroy();

// Redirigir al formulario de login
header("Location: index.php");
?>
