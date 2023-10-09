<?php
    require('../../config.php');


    $dsn = "mysql:host={$dbHost};dbname={$dbName}";
    echo var_dump($cSsl);
    $options = [
        PDO::MYSQL_ATTR_SSL_CA => $cSsl,
    ];
    try {
        $pdo = new PDO($dsn, $dbUsername, $dbPassword,$options);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Conexión segura exitosa a la base de datos MySQL.";
    } catch (PDOException $e) {
        die("Error de conexión a la base de datos: " . $e->getMessage());
    }
?>