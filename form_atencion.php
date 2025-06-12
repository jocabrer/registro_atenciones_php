<?php
// Se espera que las variables estén definidas antes de incluir este archivo:
// $modo ('crear' o 'editar'), $atencion (datos actuales si se edita), $pacientes, $medicos, $especialidades, $actividades

function selected($a, $b) {
    return $a == $b ? 'selected' : '';
}
?>

<form action="<?= $modo === 'editar' ? '_guardar_edicion.php' : '_guardar_atencion.php' ?>" method="POST" class="needs-validation" novalidate>
    <?php if ($modo === 'editar'): ?>
        <input type="hidden" name="id" value="<?= $atencion['id'] ?>">
    <?php endif; ?>

    <div class="row g-3">
        <div class="col-md-6">
            <label class="form-label">Paciente:</label>
            <select name="paciente_id" class="form-select" required>
                <option value="">Seleccione un paciente</option>
                <?php foreach ($pacientes as $row): ?>
                    <option value="<?= $row['id'] ?>" <?= selected($row['id'], $atencion['paciente_id'] ?? '') ?>><?= $row['nombre'] ?></option>
                <?php endforeach; ?>
            </select>
        </div>

        <div class="col-md-6">
            <label class="form-label">Médico:</label>
            <select name="medico_id" class="form-select" required>
                <option value="">Seleccione un médico</option>
                <?php foreach ($medicos as $row): ?>
                    <option value="<?= $row['id'] ?>" <?= selected($row['id'], $atencion['medico_id'] ?? '') ?>><?= $row['nombre'] ?></option>
                <?php endforeach; ?>
            </select>
        </div>

        <div class="col-md-6">
            <label class="form-label">Especialidad:</label>
            <select name="especialidad_id" class="form-select" required>
                <option value="">Seleccione una especialidad</option>
                <?php foreach ($especialidades as $row): ?>
                    <option value="<?= $row['id'] ?>" <?= selected($row['id'], $atencion['especialidad_id'] ?? '') ?>><?= $row['nombre'] ?></option>
                <?php endforeach; ?>
            </select>
        </div>

        <div class="col-md-6">
            <label class="form-label">Actividad:</label>
            <select name="actividad_id" class="form-select" required>
                <option value="">Seleccione una actividad</option>
                <?php foreach ($actividades as $row): ?>
                    <option value="<?= $row['id'] ?>" <?= selected($row['id'], $atencion['actividad_id'] ?? '') ?>><?= $row['nombre'] ?></option>
                <?php endforeach; ?>
            </select>
        </div>

        <div class="col-12">
            <label class="form-label">Diagnóstico:</label>
            <input type="text" name="diagnostico" class="form-control" value="<?= htmlspecialchars($atencion['diagnostico'] ?? '') ?>" required>
        </div>

        <div class="col-md-6">
            <label class="form-label">Fecha Ingreso:</label>
            <input type="date" name="fecha_ingreso" class="form-control" value="<?= $atencion['fecha_ingreso'] ?? '' ?>" required>
        </div>

        <div class="col-md-6">
            <label class="form-label">Fecha Alta:</label>
            <input type="date" name="fecha_alta" class="form-control" value="<?= $atencion['fecha_alta'] ?? '' ?>" required>
        </div>
    </div>

    <div class="mt-4 d-grid">
        <button type="submit" class="btn btn-<?= $modo === 'editar' ? 'success' : 'primary' ?>">
            <i class="fa-solid fa-<?= $modo === 'editar' ? 'check' : 'plus' ?> me-2"></i><?= $modo === 'editar' ? 'Guardar Cambios' : 'Registrar Atención' ?>
        </button>
        <a href="index.php" class="btn btn-secondary mt-2">Volver</a>
    </div>
</form>
