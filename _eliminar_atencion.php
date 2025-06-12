<?php
include 'conexion.php';

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);
    $conexion->query("DELETE FROM atenciones WHERE id = $id");
}

header("Location: index.php");
exit;
