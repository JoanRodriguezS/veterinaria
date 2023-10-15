<?php 
    include('../config/conexion.php');
    session_start();

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $username = $_POST['username'];
        $password = $_POST['password'];

        // Consulta para verificar las credenciales
        $sql = "SELECT * FROM users WHERE username = :username AND password = :password";
        $mysql = $conexion->prepare($sql);

        $mysql->bindParam(':username',$username,PDO::PARAM_STR);
        $mysql->bindParam(':password', $password,PDO::PARAM_STR);
        $mysql->execute();

        $user = $mysql->fetch();

        if ($user) {
            $_SESSION['usuario'] = $user['username'];
            
            // Redirigir al usuario a "panel.php"
            header('Location: http://localhost/panel.php');
            exit();
        } else {
            $errorMsg = "Credenciales incorrectas. Inténtalo de nuevo.";
        }
    }

?>