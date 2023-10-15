<?php
session_start(); // Iniciar la sesión

if (isset($_SESSION['usuario'])) {
    $nombreUsuario = $_SESSION['usuario'];
} else {
    // Si la sesión no está configurada, redirigir al usuario a la página de inicio de sesión
    header('Location: http://localhost/login.php');
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Panel de Usuario</title>
</head>
<body style="  background-color: #000;color: #fff;text-align: center;font-size: 20px;">
    <h1 style="  font-size: 50px;">Bienvenido, <?php echo htmlspecialchars($nombreUsuario); ?>!</h1>
    <!-- Otro contenido de tu panel aquí -->
</body>
</html>
