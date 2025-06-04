<?php include 'conexion.php'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registro de Atenciones</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome para íconos -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <style>
        body {
            background-color: #f2f5f9;
        }
        .form-container {
            max-width: 800px;
            margin: 50px auto;
            background: white;
            border-radius: 10px;
            padding: 30px;
            box-shadow: 0 0 15px rgba(0,0,0,0.1);
        }
    </style>
</head>
<body>

<div class="form-container">
    <h2 class="text-center mb-4"><i class="fa-solid fa-notes-medical me-2"></i>Registrar Atención Médica</h2>
    <form action="guardar_atencion.php" method="POST" class="needs-validation" novalidate>

        <div class="row g-3">
            <div class="col-md-6">
                <label for="paciente" class="form-label">Paciente:</label>
                <select name="paciente_id" id="paciente" class="form-select" required>
                    <option value="">Seleccione un paciente</option>
                    <?php
                    $res = $conexion->query("SELECT * FROM pacientes");
                    while ($row = $res->fetch_assoc()) {
                        echo "<option value='{$row['id']}'>{$row['nombre']}</option>";
                    }
                    ?>
                </select>
                <div class="invalid-feedback">Seleccione un paciente.</div>
            </div>

            <div class="col-md-6">
                <label for="medico" class="form-label">Médico:</label>
                <select name="medico_id" id="medico" class="form-select" required>
                    <option value="">Seleccione un médico</option>
                    <?php
                    $res = $conexion->query("SELECT * FROM medicos");
                    while ($row = $res->fetch_assoc()) {
                        echo "<option value='{$row['id']}'>{$row['nombre']}</option>";
                    }
                    ?>
                </select>
                <div class="invalid-feedback">Seleccione un médico.</div>
            </div>

            <div class="col-md-6">
                <label for="especialidad" class="form-label">Especialidad:</label>
                <select name="especialidad_id" id="especialidad" class="form-select" required>
                    <option value="">Seleccione una especialidad</option>
                    <?php
                    $res = $conexion->query("SELECT * FROM especialidades");
                    while ($row = $res->fetch_assoc()) {
                        echo "<option value='{$row['id']}'>{$row['nombre']}</option>";
                    }
                    ?>
                </select>
                <div class="invalid-feedback">Seleccione una especialidad.</div>
            </div>

            <div class="col-md-6">
                <label for="actividad" class="form-label">Actividad:</label>
                <select name="actividad_id" id="actividad" class="form-select" required>
                    <option value="">Seleccione una actividad</option>
                    <?php
                    $res = $conexion->query("SELECT * FROM actividades");
                    while ($row = $res->fetch_assoc()) {
                        echo "<option value='{$row['id']}'>{$row['nombre']}</option>";
                    }
                    ?>
                </select>
                <div class="invalid-feedback">Seleccione una actividad.</div>
            </div>

            <div class="col-12">
                <label for="diagnostico" class="form-label">Diagnóstico:</label>
                <input type="text" name="diagnostico" id="diagnostico" class="form-control" required>
                <div class="invalid-feedback">Ingrese el diagnóstico.</div>
            </div>

            <div class="col-md-6">
                <label for="fecha_ingreso" class="form-label">Fecha Ingreso:</label>
                <input type="date" name="fecha_ingreso" id="fecha_ingreso" class="form-control" required>
                <div class="invalid-feedback">Ingrese la fecha de ingreso.</div>
            </div>

            <div class="col-md-6">
                <label for="fecha_alta" class="form-label">Fecha Alta:</label>
                <input type="date" name="fecha_alta" id="fecha_alta" class="form-control" required>
                <div class="invalid-feedback">Ingrese la fecha de alta.</div>
            </div>
        </div>

        <div class="mt-4">
            <button type="submit" class="btn btn-primary w-100">
                <i class="fa-solid fa-floppy-disk me-2"></i>Guardar Atención
            </button>
        </div>
    </form>
</div>

<!-- Validación Bootstrap -->
<script>
    (() => {
        'use strict';
        const forms = document.querySelectorAll('.needs-validation');
        Array.from(forms).forEach(form => {
            form.addEventListener('submit', event => {
                if (!form.checkValidity()) {
                    event.preventDefault();
                    event.stopPropagation();
                }
                form.classList.add('was-validated');
            }, false);
        });
    })();
</script>

</body>
</html>
