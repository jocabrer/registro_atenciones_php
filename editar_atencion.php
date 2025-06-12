<?php
include 'conexion.php';

$modo = 'editar';

$id = intval($_GET['id']);
$atencion = $conexion->query("SELECT * FROM atenciones WHERE id = $id")->fetch_assoc();
if (!$atencion) {
    die("Atención no encontrada.");
}

$pacientes = $conexion->query("SELECT * FROM pacientes")->fetch_all(MYSQLI_ASSOC);
$medicos = $conexion->query("SELECT * FROM medicos")->fetch_all(MYSQLI_ASSOC);
$especialidades = $conexion->query("SELECT * FROM especialidades")->fetch_all(MYSQLI_ASSOC);
$actividades = $conexion->query("SELECT * FROM actividades")->fetch_all(MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Editar Atención</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h2 class="mb-4"><i class="fa-solid fa-pen-to-square me-2"></i>Editar Atención</h2>
    <?php include 'form_atencion.php'; ?>
</div>
</body>
</html>
