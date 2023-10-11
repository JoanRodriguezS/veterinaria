<?php
    include('../config/conexion.php');

    if(isset($_POST['enviar'])){
        $nombre =$_POST['nombre'];
        $contrasenia = $_POST['contrasenia'];
        
        $mysql = "INSERT INTO usuario(nombre,contrasenia) VALUES (:nombre, :contrasenia)";

        $mysql = $conexion->prepare($mysql);

        $mysql->bindParam(':nombre', $nombre,PDO::PARAM_STR);
        $mysql->bindParam(':contrasenia', $contrasenia,PDO::PARAM_STR);
        $mysql->execute();





        $ultimoId=$conexion->lastInsertId();
        if($ultimoId > 0){
            echo "<div class='content alert alert-primary'>
                Gracias $nombre por insertar al sistema </div>";
    
        }else{

            echo"<div class='content alert alert-danger'>
                    No se pueden inserar datos, comuniquese con el administrador</div>";
            print_r($mysql -> errorInfo());
        }
    }
?>