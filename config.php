<?php
require __DIR__.'/vendor/autoload.php'; 

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

// == DATABASE ==
$dbHost = $_ENV['DB_HOST'];
$dbUsername = $_ENV['DB_USERNAME'];
$dbPassword = $_ENV['DB_PASSWORD'];
$dbName = $_ENV['DB_NAME'];
$cSsl = $_ENV['MYSQL_ATTR_SSL_CA'];

?>