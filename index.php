<?php
include 'conexion.php';
$atenciones = $conexion->query("
    SELECT a.id, p.nombre AS paciente, m.nombre AS medico, e.nombre AS especialidad,
           ac.nombre AS actividad, a.diagnostico, a.fecha_ingreso, a.fecha_alta
    FROM atenciones a
    JOIN pacientes p ON a.paciente_id = p.id
    JOIN medicos m ON a.medico_id = m.id
    JOIN especialidades e ON a.especialidad_id = e.id
    JOIN actividades ac ON a.actividad_id = ac.id
    ORDER BY a.fecha_ingreso DESC
")->fetch_all(MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Listado de Atenciones</title>
        <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome para íconos -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body>
    <?php if (isset($_GET['msg'])): ?>
    <div class="alert alert-<?= $_GET['msg'] === 'guardado' ? 'success' : 'danger' ?> alert-dismissible fade show" role="alert">
        <?= $_GET['msg'] === 'guardado' || $_GET['msg'] === 'actualizado'  ? 'Atención registrada correctamente.' : 'Ocurrió un error al registrar la atención.' ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Cerrar"></button>
    </div>
<?php endif; ?>

<div class="container mt-5">
    <h2 class="mb-4"><i class="fa-solid fa-list me-2"></i>Listado de Atenciones</h2>

    <a href="nueva_atencion.php" class="btn btn-primary mb-3">
        <i class="fa-solid fa-plus me-2"></i>Nueva Atención
    </a>

    <table class="table table-bordered table-striped">
        <thead class="table-light">
            <tr>
                <th>Paciente</th>
                <th>Médico</th>
                <th>Especialidad</th>
                <th>Actividad</th>
                <th>Diagnóstico</th>
                <th>Ingreso</th>
                <th>Alta</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($atenciones as $a): ?>
                <tr>
                    <td><?= $a['paciente'] ?></td>
                    <td><?= $a['medico'] ?></td>
                    <td><?= $a['especialidad'] ?></td>
                    <td><?= $a['actividad'] ?></td>
                    <td><?= $a['diagnostico'] ?></td>
                    <td><?= $a['fecha_ingreso'] ?></td>
                    <td><?= $a['fecha_alta'] ?></td>
                    <td>
                        <a href="editar_atencion.php?id=<?= $a['id'] ?>" class="btn btn-sm btn-success">
                            <i class="fa-solid fa-pen-to-square"></i>
                        </a>
                        <a href="_eliminar_atencion.php?id=<?= $a['id'] ?>" class="btn btn-sm btn-danger" onclick="return confirm('¿Eliminar esta atención?')">
                            <i class="fa-solid fa-trash"></i>
                        </a>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</div>
<footer class="bg-dark text-white mt-5 py-4">
  <div class="container text-center">
    <p class="mb-1">
      <strong>TALLER DE APLICACIONES JAVA - 2510 (B2)</strong><br>
      Instituto Profesional de Chile (IPCHILE)
    </p>
    <p class="mb-1">Integrantes: Christian Tacchi y José Cabrera Gatica</p>
    <p class="mb-0">Profesora: Sabina Romero</p>
  </div>
</footer>
</body>
</html>
