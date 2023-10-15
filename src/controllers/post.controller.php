<?php
    include('../config/conexion.php');
    include('../core/configGeneral.php');
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $comment =$_POST['comment'];
        $username =$_POST['username'];
        $email =$_POST['email'];
        $sql = "INSERT INTO posts(username, email, comment) VALUES (:username, :email, :comment)";
        $mysql = $conexion->prepare($sql);

        $mysql->bindParam(':username', $username,PDO::PARAM_STR);
        $mysql->bindParam(':email', $email,PDO::PARAM_STR);
        $mysql->bindParam(':comment', $comment,PDO::PARAM_STR);
        $mysql->execute();
        header('Location: http://localhost/blog.php');

    }
?>