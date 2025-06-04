<?php
$host = 'localhost';
$puerto = 3308;
$usuario = 'root';
$contrasena = 'rootpass';
$base_datos = 'm2';

$conexion = new mysqli($host, $usuario, $contrasena, $base_datos, $puerto);

if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}
?>
