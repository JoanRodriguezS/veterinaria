<?php
    include('../config/conexion.php');

    $sql = "SELECT username, comment FROM posts";
    $mysql = $conexion->prepare($sql);
    $mysql->execute();
    $registros = $mysql->fetchAll(PDO::FETCH_DEFAULT);


?>