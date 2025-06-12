<?php
include 'conexion.php';

// Verifica si llegaron todos los datos requeridos
if (
    isset($_POST['id']) &&
    isset($_POST['paciente_id']) &&
    isset($_POST['medico_id']) &&
    isset($_POST['especialidad_id']) &&
    isset($_POST['actividad_id']) &&
    isset($_POST['diagnostico']) &&
    isset($_POST['fecha_ingreso']) &&
    isset($_POST['fecha_alta'])
) {
    $id = $_POST['id'];
    $paciente_id = $_POST['paciente_id'];
    $medico_id = $_POST['medico_id'];
    $especialidad_id = $_POST['especialidad_id'];
    $actividad_id = $_POST['actividad_id'];
    $diagnostico = $_POST['diagnostico'];
    $fecha_ingreso = $_POST['fecha_ingreso'];
    $fecha_alta = $_POST['fecha_alta'];

    // Consulta de actualización
    $sql = "UPDATE atenciones 
            SET paciente_id = '$paciente_id',
                medico_id = '$medico_id',
                especialidad_id = '$especialidad_id',
                actividad_id = '$actividad_id',
                diagnostico = '$diagnostico',
                fecha_ingreso = '$fecha_ingreso',
                fecha_alta = '$fecha_alta'
            WHERE id = '$id'";

    if ($conexion->query($sql) === TRUE) {
        header("Location: index.php?msg=actualizado");
        exit;
    } else {
        header("Location: index.php?msg=error");
        exit;
    }

} else {
    header("Location: index.php?msg=error");
    exit;
}
