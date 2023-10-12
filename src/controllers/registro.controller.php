<?php
    include('../config/conexion.php');
    include('../core/configGeneral.php');
    if(isset($_POST['enviar'])){
        $fname =$_POST['fName'];
        $lname =$_POST['lName'];
        $username =$_POST['username'];
        $email =$_POST['email'];
        $password = $_POST['password'];
        $sql = "INSERT INTO users(fName, lName, username, email, password) VALUES (:fName, :lName, :username, :email, :password)";
        $mysql = $conexion->prepare($sql);

        $mysql->bindParam(':fName', $fname,PDO::PARAM_STR, 20);
        $mysql->bindParam(':lName', $lname,PDO::PARAM_STR,50);
        $mysql->bindParam(':username', $username,PDO::PARAM_STR, 20);
        $mysql->bindParam(':email', $email,PDO::PARAM_STR, 20);
        $mysql->bindParam(':password', $password,PDO::PARAM_STR, 20);
        $mysql->execute();
        


        // $ultimoId=$conexion->lastInsertId();
        // if($ultimoId > 0){
        //     echo "<div class='content alert alert-primary'>
        //         Gracias $nombre por insertar al sistema </div>";
    
        // }else{

        //     echo"<div class='content alert alert-danger'>
        //             No se pueden inserar datos, comuniquese con el administrador</div>";
        //     print_r($mysql -> errorInfo());
        // }
    }

    header("Location: http://localhost/test.php");
?>