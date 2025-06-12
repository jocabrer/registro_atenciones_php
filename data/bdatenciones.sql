
DROP TABLE IF EXISTS `actividades`;
CREATE TABLE `actividades` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;


DROP TABLE IF EXISTS `atenciones`;
CREATE TABLE `atenciones` (
  `id` int NOT NULL AUTO_INCREMENT,
  `paciente_id` int DEFAULT NULL,
  `medico_id` int DEFAULT NULL,
  `especialidad_id` int DEFAULT NULL,
  `actividad_id` int DEFAULT NULL,
  `diagnostico` varchar(255) DEFAULT NULL,
  `fecha_ingreso` date DEFAULT NULL,
  `fecha_alta` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `paciente_id` (`paciente_id`),
  KEY `medico_id` (`medico_id`),
  KEY `especialidad_id` (`especialidad_id`),
  KEY `actividad_id` (`actividad_id`),
  CONSTRAINT `atenciones_ibfk_1` FOREIGN KEY (`paciente_id`) REFERENCES `pacientes` (`id`),
  CONSTRAINT `atenciones_ibfk_2` FOREIGN KEY (`medico_id`) REFERENCES `medicos` (`id`),
  CONSTRAINT `atenciones_ibfk_3` FOREIGN KEY (`especialidad_id`) REFERENCES `especialidades` (`id`),
  CONSTRAINT `atenciones_ibfk_4` FOREIGN KEY (`actividad_id`) REFERENCES `actividades` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;


DROP TABLE IF EXISTS `especialidades`;
CREATE TABLE `especialidades` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;



DROP TABLE IF EXISTS `medicos`;
CREATE TABLE `medicos` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;


DROP TABLE IF EXISTS `pacientes`;
CREATE TABLE `pacientes` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

insert  into `actividades`(`id`,`nombre`) values (1,'Examenes'),(2,'Curaciones'),(3,'Lectura receta');
insert  into `especialidades`(`id`,`nombre`) values (1,'Medicina general'),(2,'Cardiología'),(3,'Kinesiología');
insert  into `medicos`(`id`,`nombre`) values (1,'Dr Barrera'),(2,'Dra Luz');
insert  into `pacientes`(`id`,`nombre`) values (1,'Jose Cabrera'),(2,'Juanito Perez');
