<?php
session_start();

// Destruye todas las variables de sesión
session_unset();

// Elimina la sesión completamente
session_destroy();

// Redirige al login
header("Location: login.php");
exit;
?>