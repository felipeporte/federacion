<?php
require __DIR__ . '/../vendor/autoload.php'; // Ajusta si usas otro path
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../');
$dotenv->load();


$host = $_ENV['DB_HOST'];
$user = $_ENV['DB_USER'];
$pass = $_ENV['DB_PASS'];
$name = $_ENV['DB_NAME'];


$db = new mysqli($host, $user, $pass, $name);

if ($db->connect_error) {
    die('Error de conexion (' . $db->connect_errno . '): ' . $db->connect_error);
}
