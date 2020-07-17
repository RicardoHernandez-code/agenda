-- --------------------------------------------------------
-- Host:                         localhost
-- Versión del servidor:         5.7.24 - MySQL Community Server (GPL)
-- SO del servidor:              Win64
-- HeidiSQL Versión:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Volcando estructura de base de datos para agenda
CREATE DATABASE IF NOT EXISTS `agenda` /*!40100 DEFAULT CHARACTER SET utf16 COLLATE utf16_spanish_ci */;
USE `agenda`;

-- Volcando estructura para tabla agenda.contactos
CREATE TABLE IF NOT EXISTS `contactos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` char(50) COLLATE utf16_spanish_ci DEFAULT NULL,
  `apellido` char(50) COLLATE utf16_spanish_ci DEFAULT NULL,
  `telefono` char(50) COLLATE utf16_spanish_ci DEFAULT NULL,
  `movil` char(50) COLLATE utf16_spanish_ci DEFAULT NULL,
  `email` char(50) COLLATE utf16_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf16 COLLATE=utf16_spanish_ci;

-- Volcando datos para la tabla agenda.contactos: ~4 rows (aproximadamente)
/*!40000 ALTER TABLE `contactos` DISABLE KEYS */;
/*!40000 ALTER TABLE `contactos` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
