# Actividad Evaluativa EPE2 - Registro de Atenciones Médicas

Este proyecto corresponde a la **Evaluación Parcial EPE2** para una asignatura de desarrollo de software, y consiste en la implementación de un sistema básico para registrar atenciones médicas en un área de urgencias, utilizando **PHP** y **MySQL**.

---

## 🩺 Descripción

Se requiere que una institución de salud pueda registrar las atenciones de pacientes en su unidad de urgencias. Para esto se desarrolló un sistema que permite:

- Registrar **pacientes, médicos, especialidades médicas y actividades clínicas**.
- Consolidar esta información en un formulario de **registro de atenciones**.
- Ingresar información como: **diagnóstico, fecha de ingreso y fecha de alta**.
- Utilizar campos tipo `<input>` y `<select>` para seleccionar o escribir la información correspondiente.
- **Guardar** registros en la base de datos.
- (Opcional para ampliar) Actualizar o eliminar atenciones ya registradas.

---

## 🛠️ Tecnologías Utilizadas

- PHP 8+
- MySQL 5.7/8+
- Bootstrap 5.3 (CDN)
- Font Awesome 6 (CDN)
- HTML5 / CSS3

---

## 📐 Estructura de la Base de Datos

La base de datos contiene al menos las siguientes entidades:

- `pacientes`
- `medicos`
- `especialidades`
- `actividades`
- `atenciones` (tabla central que une toda la información anterior)

> Las relaciones entre las tablas están definidas mediante claves foráneas. La cardinalidad y los tipos de datos fueron definidos según criterio lógico para una solución funcional y extensible.

---

## 📸 Resultado Esperado

El sistema presenta una interfaz web donde el usuario puede:

- Seleccionar un paciente y un médico desde listas desplegables.
- Indicar especialidad, actividad clínica, diagnóstico y fechas de atención.
- Enviar los datos para ser almacenados en la base.

**Ejemplo de atención registrada:**

| Ingreso      | Paciente     | Médico         | Especialidad | Actividad       | Diagnóstico   | Alta         |
|--------------|--------------|----------------|--------------|-----------------|----------------|--------------|
| 28-09-2023   | Pedro Pérez  | Benjamín Soto  | Cirugía      | Curaciones      | Úlcera         | 28-09-2023   |
| 27-09-2023   | Carlos Solar | Eduardo Cortés | Pediatría    | Toma Exámenes   | Bronquitis     | 27-09-2023   |
| 26-09-2023   | Luis Rojas   | Claudio Gómez  | Medicina     | Lectura Receta  | Hernia         | 26-09-2023   |

---

## 🚀 Instrucciones para Ejecutar

1. Clona este repositorio:
   ```bash
   git clone https://github.com/jocabrer/registro_atenciones_php.git
