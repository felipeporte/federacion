<?php
$host = getenv('DB_HOST') ?: 'localhost';
$user = getenv('DB_USER') ?: 'root';
$pass = getenv('DB_PASS') ?: '';
$name = getenv('DB_NAME') ?: 'federacion';

$db = new mysqli($host, $user, $pass, $name);

if ($db->connect_error) {
    die('Error de conexion (' . $db->connect_errno . '): ' . $db->connect_error);
}
