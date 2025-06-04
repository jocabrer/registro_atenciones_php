<?php
include 'conexion.php';

$paciente_id = $_POST['paciente_id'];
$medico_id = $_POST['medico_id'];
$especialidad_id = $_POST['especialidad_id'];
$actividad_id = $_POST['actividad_id'];
$diagnostico = $_POST['diagnostico'];
$fecha_ingreso = $_POST['fecha_ingreso'];
$fecha_alta = $_POST['fecha_alta'];

$sql = "INSERT INTO atenciones (paciente_id, medico_id, especialidad_id, actividad_id, diagnostico, fecha_ingreso, fecha_alta)
        VALUES ('$paciente_id', '$medico_id', '$especialidad_id', '$actividad_id', '$diagnostico', '$fecha_ingreso', '$fecha_alta')";

if ($conexion->query($sql) === TRUE) {
    echo "Atención guardada correctamente.";
} else {
    echo "Error: " . $conexion->error;
}

$conexion->close();
?>
<a href='index.php'>Volver</a>