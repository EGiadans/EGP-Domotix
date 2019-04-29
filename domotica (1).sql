-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 29-04-2019 a las 17:22:43
-- Versión del servidor: 5.7.24
-- Versión de PHP: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `domotica`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `logs`
--

DROP TABLE IF EXISTS `logs`;
CREATE TABLE IF NOT EXISTS `logs` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `fecha` varchar(20) NOT NULL,
  `id_student` varchar(9) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=56 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `logs`
--

INSERT INTO `logs` (`id`, `fecha`, `id_student`) VALUES
(23, '2019-02-12 07:56:42', '1'),
(27, '2019-02-12 08:09:12', '10'),
(26, '2019-02-12 08:06:08', '1'),
(25, '2019-02-12 07:59:18', '1'),
(24, '2019-02-12 07:58:34', '3'),
(13, '2009-12-03 23:23:23', '1'),
(14, '2009-12-03 23:23:23', '1'),
(15, '2019-02-08 14:33:31', '1'),
(16, '2019-02-08 14:33:31', '1'),
(17, '2019-02-08 14:35:12', '1'),
(18, '2019-02-08 14:35:24', '1'),
(19, '2019-02-08 14:41:41', '1'),
(20, '2019-02-08 14:43:47', '1'),
(21, '2019-02-08 14:45:53', '1'),
(22, '2019-02-08 14:48:49', '10'),
(28, '2019-02-12 08:27:25', '1'),
(29, '2019-02-13 08:37:26', '1'),
(30, '2019-02-13 08:37:53', '1'),
(31, '2019-02-13 08:50:33', '1'),
(32, '2019-02-19 11:57:53', '1'),
(33, '2019-02-19 12:00:33', '1'),
(34, '2019-02-19 12:00:42', '1'),
(35, '2019-02-19 12:09:55', '1'),
(36, '2019-02-19 12:10:42', '1'),
(37, '2019-02-19 12:10:52', '1'),
(38, '2019-02-21 16:51:49', '1'),
(39, '2019-02-21 16:52:13', '1'),
(40, '2019-02-21 16:55:49', '3'),
(41, '2019-02-21 16:55:49', '3'),
(42, '2019-02-21 16:55:49', '3'),
(43, '2019-02-21 16:55:49', '1'),
(44, '2019-02-21 16:55:49', '1'),
(45, '2019-02-21 16:56:31', '1'),
(46, '2019-02-21 16:56:31', '1'),
(47, '2019-02-21 16:56:45', '1'),
(48, '2019-02-21 16:56:54', '1'),
(49, '2019-02-21 16:57:45', '1'),
(50, '2019-02-21 16:57:45', '1'),
(51, '2019-02-21 16:58:03', '1'),
(52, '2019-02-21 16:58:56', '1'),
(53, '2019-02-21 16:59:20', '1'),
(54, '2019-02-21 16:59:20', '1'),
(55, '2019-03-19 12:16:27', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `students`
--

DROP TABLE IF EXISTS `students`;
CREATE TABLE IF NOT EXISTS `students` (
  `id` varchar(4) NOT NULL,
  `matricula` char(9) NOT NULL,
  `nombre_completo` varchar(100) NOT NULL,
  `id_cred` varchar(6) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `students`
--

INSERT INTO `students` (`id`, `matricula`, `nombre_completo`, `id_cred`) VALUES
('1', 'a01411416', 'Eduardo Giadans Zarate', '676796'),
('6', 'a01411532', 'Jorge Salvador Rodriguez Salazar', ''),
('10', 'a01411452', 'Francisco Pineiro Aceituno', ''),
('3', 'a01410412', 'Esteban Azuara Aguirre', ''),
('8', 'a01410342', 'Jorge Ricardo Cabrales Reyes', ''),
('2', 'a01411556', 'Osvaldo Gabriel Gonzalez Martinez', ''),
('4', 'a01411527', 'Jaime Andres Ontiveros Uvalle', ''),
('', '', '', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
