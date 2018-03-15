-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 02-07-2015 a las 14:13:22
-- Versión del servidor: 5.5.43-0ubuntu0.14.04.1
-- Versión de PHP: 5.5.9-1ubuntu4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `cluster_marvel`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historial_fasta`
--

CREATE TABLE IF NOT EXISTS `historial_fasta` (
  `fasta_id` int(11) NOT NULL AUTO_INCREMENT,
  `id_usuario` int(11) NOT NULL,
  `documento` text COLLATE utf8_spanish_ci NOT NULL,
  `matriz` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `penalizacion` int(11) NOT NULL,
  `numero_resultado` int(11) NOT NULL,
  `size` int(11) NOT NULL,
  `tipo` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`fasta_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=39 ;

--
-- Volcado de datos para la tabla `historial_fasta`
--

INSERT INTO `historial_fasta` (`fasta_id`, `id_usuario`, `documento`, `matriz`, `penalizacion`, `numero_resultado`, `size`, `tipo`, `fecha`) VALUES
(20, 2, 'FastaADN20150701084701', 'pam250', -1, 1, 95, '-pfa', '2015-07-02 11:47:01'),
(27, 2, 'FastaPRO20150722091222', 'blosum62', -10, 2, 111, '-pfp', '2015-07-02 12:12:22'),
(28, 2, 'FastaPRO20150708092108', 'blosum80', -10, 1, 111, '-pfp', '2015-07-02 12:21:08'),
(29, 10, 'FastaADN20150720092220', 'blosum30', -3, 10, 95, '-pfa', '2015-07-02 12:22:20'),
(30, 10, 'FastaPRO20150719092519', 'pam300', -1, 4, 111, '-pfp', '2015-07-02 12:25:19'),
(31, 2, 'FastaPRO20150740100440', 'blosum50', -10, 3, 111, '-pfp', '2015-07-02 13:04:40'),
(32, 10, 'FastaADN20150714102814', 'pam60', -1, 3, 95, '-pfa', '2015-07-02 13:28:14'),
(33, 10, 'FastaADN20150749102849', 'pam60', -1, 5, 95, '-pfa', '2015-07-02 13:28:49'),
(34, 11, 'FastaADN20150723104423', 'pam90', -1, 2, 95, '-pfa', '2015-07-02 13:44:23'),
(35, 11, 'FastaPRO20150714104814', 'benner22', -8, 7, 111, '-pfp', '2015-07-02 13:48:14'),
(36, 2, 'FastaADN20150714112414', 'blosum30', -10, 4, 95, '-pfa', '2015-07-02 14:24:14'),
(37, 12, 'FastaADN20150730012830', 'blosum55', -10, 5, 95, '-pfa', '2015-07-02 16:28:30'),
(38, 12, 'FastaPRO20150724013324', 'blosum62', -9, 2, 111, '-pfp', '2015-07-02 16:33:24');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historial_percolacion`
--

CREATE TABLE IF NOT EXISTS `historial_percolacion` (
  `percolacion_id` int(11) NOT NULL AUTO_INCREMENT,
  `id_usuario` int(11) NOT NULL,
  `arbol` int(11) DEFAULT NULL,
  `suelo` int(11) DEFAULT NULL,
  `distribucion` int(11) NOT NULL,
  `tamano` int(11) NOT NULL,
  `size` int(11) NOT NULL,
  `documento` text COLLATE utf8_spanish_ci NOT NULL,
  `tipo` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `enfermedad` int(255) DEFAULT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`percolacion_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=91 ;

--
-- Volcado de datos para la tabla `historial_percolacion`
--

INSERT INTO `historial_percolacion` (`percolacion_id`, `id_usuario`, `arbol`, `suelo`, `distribucion`, `tamano`, `size`, `documento`, `tipo`, `enfermedad`, `fecha`) VALUES
(15, 2, 0, 0, 60, 100, 96, 'pe20150740061740', '-ppe', 3, '2015-07-01 21:17:40'),
(16, 2, 0, 0, 65, 100, 96, 'pe20150729070929', '-ppe', 4, '2015-07-01 22:09:29'),
(18, 2, 1, 1, 10, 10, 96, 'pi20150748071948', '-ppi', NULL, '2015-07-01 22:19:48'),
(19, 2, 0, 0, 85, 2, 96, 'pe20150738072138', '-ppe', 3, '2015-07-01 22:21:38'),
(20, 2, 1, 2, 96, 2, 96, 'pi20150750072150', '-ppi', NULL, '2015-07-01 22:21:50'),
(21, 2, 1, 2, 96, 2, 96, 'pi20150704072204', '-ppi', NULL, '2015-07-01 22:22:04'),
(22, 2, 1, 2, 96, 2, 96, 'pi20150748072248', '-ppi', NULL, '2015-07-01 22:22:48'),
(23, 2, 1, 2, 96, 2, 96, 'pi20150733072333', '-ppi', NULL, '2015-07-01 22:23:33'),
(24, 2, 2, 1, 50, 100, 96, 'pi20150711085211', '-ppi', NULL, '2015-07-01 23:52:11'),
(25, 2, 2, 1, 50, 100, 96, 'pi20150714085214', '-ppi', NULL, '2015-07-01 23:52:14'),
(26, 2, 2, 1, 50, 100, 96, 'pi20150715085215', '-ppi', NULL, '2015-07-01 23:52:15'),
(27, 2, 2, 1, 50, 100, 96, 'pi20150716085216', '-ppi', NULL, '2015-07-01 23:52:16'),
(28, 2, 2, 1, 50, 100, 96, 'pi20150717085217', '-ppi', NULL, '2015-07-01 23:52:17'),
(29, 2, 2, 1, 50, 100, 96, 'pi20150717085217', '-ppi', NULL, '2015-07-01 23:52:17'),
(30, 2, 2, 1, 50, 100, 96, 'pi20150718085218', '-ppi', NULL, '2015-07-01 23:52:18'),
(31, 2, 2, 1, 50, 100, 96, 'pi20150718085218', '-ppi', NULL, '2015-07-01 23:52:18'),
(32, 2, 2, 1, 50, 100, 96, 'pi20150719085219', '-ppi', NULL, '2015-07-01 23:52:19'),
(33, 2, 2, 1, 50, 100, 96, 'pi20150720085220', '-ppi', NULL, '2015-07-01 23:52:20'),
(34, 2, 2, 1, 50, 100, 96, 'pi20150720085220', '-ppi', NULL, '2015-07-01 23:52:20'),
(35, 2, 2, 1, 50, 100, 96, 'pi20150721085221', '-ppi', NULL, '2015-07-01 23:52:21'),
(36, 2, 2, 1, 50, 100, 96, 'pi20150721085221', '-ppi', NULL, '2015-07-01 23:52:21'),
(37, 2, 2, 1, 50, 100, 96, 'pi20150722085222', '-ppi', NULL, '2015-07-01 23:52:22'),
(38, 2, 2, 1, 50, 100, 96, 'pi20150722085222', '-ppi', NULL, '2015-07-01 23:52:22'),
(39, 2, 2, 1, 50, 100, 96, 'pi20150723085223', '-ppi', NULL, '2015-07-01 23:52:23'),
(40, 2, 2, 1, 50, 100, 96, 'pi20150723085223', '-ppi', NULL, '2015-07-01 23:52:23'),
(41, 2, 2, 1, 50, 100, 96, 'pi20150724085224', '-ppi', NULL, '2015-07-01 23:52:24'),
(42, 2, 2, 1, 50, 100, 96, 'pi20150724085224', '-ppi', NULL, '2015-07-01 23:52:24'),
(43, 2, 2, 1, 50, 100, 96, 'pi20150724085224', '-ppi', NULL, '2015-07-01 23:52:24'),
(44, 2, 2, 1, 50, 100, 96, 'pi20150725085225', '-ppi', NULL, '2015-07-01 23:52:25'),
(45, 2, 2, 1, 50, 100, 96, 'pi20150725085225', '-ppi', NULL, '2015-07-01 23:52:25'),
(46, 2, 2, 1, 50, 100, 96, 'pi20150725085225', '-ppi', NULL, '2015-07-01 23:52:25'),
(47, 2, 2, 1, 50, 100, 96, 'pi20150725085225', '-ppi', NULL, '2015-07-01 23:52:25'),
(48, 2, 2, 1, 50, 100, 96, 'pi20150726085226', '-ppi', NULL, '2015-07-01 23:52:26'),
(49, 2, 2, 1, 50, 100, 96, 'pi20150726085226', '-ppi', NULL, '2015-07-01 23:52:26'),
(50, 2, 2, 1, 50, 100, 96, 'pi20150727085227', '-ppi', NULL, '2015-07-01 23:52:27'),
(51, 2, 2, 1, 50, 100, 96, 'pi20150727085227', '-ppi', NULL, '2015-07-01 23:52:27'),
(52, 2, 2, 1, 50, 100, 96, 'pi20150727085227', '-ppi', NULL, '2015-07-01 23:52:27'),
(53, 2, 2, 1, 50, 100, 96, 'pi20150728085228', '-ppi', NULL, '2015-07-01 23:52:28'),
(54, 2, 2, 1, 50, 100, 96, 'pi20150728085228', '-ppi', NULL, '2015-07-01 23:52:28'),
(55, 2, 2, 1, 50, 100, 96, 'pi20150729085229', '-ppi', NULL, '2015-07-01 23:52:29'),
(56, 2, 2, 1, 50, 100, 96, 'pi20150729085229', '-ppi', NULL, '2015-07-01 23:52:29'),
(57, 2, 2, 1, 50, 100, 96, 'pi20150730085230', '-ppi', NULL, '2015-07-01 23:52:30'),
(58, 2, 2, 1, 50, 100, 96, 'pi20150731085231', '-ppi', NULL, '2015-07-01 23:52:31'),
(59, 2, 2, 1, 50, 100, 96, 'pi20150731085231', '-ppi', NULL, '2015-07-01 23:52:31'),
(60, 2, 2, 1, 50, 100, 96, 'pi20150732085232', '-ppi', NULL, '2015-07-01 23:52:32'),
(61, 2, 2, 1, 50, 100, 96, 'pi20150733085233', '-ppi', NULL, '2015-07-01 23:52:33'),
(62, 2, 2, 1, 50, 100, 96, 'pi20150733085233', '-ppi', NULL, '2015-07-01 23:52:33'),
(63, 10, 1, 1, 50, 10, 96, 'pi20150720091220', '-ppi', NULL, '2015-07-02 12:12:20'),
(66, 10, 3, 3, 50, 50, 96, 'pi20150728102428', '-ppi', NULL, '2015-07-02 13:24:28'),
(67, 10, 4, 4, 70, 70, 96, 'pi20150743102443', '-ppi', NULL, '2015-07-02 13:24:44'),
(69, 10, 0, 0, 10, 10, 96, 'pe20150734103634', '-ppe', 6, '2015-07-02 13:36:34'),
(70, 10, 0, 0, 20, 20, 96, 'pe20150758103858', '-ppe', 1, '2015-07-02 13:38:58'),
(71, 11, 0, 0, 20, 20, 96, 'pe20150728104228', '-ppe', 1, '2015-07-02 13:42:28'),
(72, 11, 1, 1, 20, 20, 96, 'pi20150751104251', '-ppi', NULL, '2015-07-02 13:42:51'),
(73, 2, 0, 0, 52, 10, 96, 'pe20150730105630', '-ppe', 3, '2015-07-02 13:56:30'),
(74, 2, 0, 0, 85, 10, 96, 'pe20150705110105', '-ppe', 4, '2015-07-02 14:01:05'),
(75, 2, 0, 0, 85, 10, 96, 'pe20150722110222', '-ppe', 2, '2015-07-02 14:02:22'),
(76, 0, 2, 1, 50, 100, 96, 'pi20150708124408', '-ppi', NULL, '2015-07-02 15:44:08'),
(77, 0, 2, 1, 50, 100, 96, 'pi20150709124409', '-ppi', NULL, '2015-07-02 15:44:09'),
(78, 0, 2, 1, 50, 100, 96, 'pi20150710124410', '-ppi', NULL, '2015-07-02 15:44:10'),
(79, 0, 2, 1, 50, 100, 96, 'pi20150710124410', '-ppi', NULL, '2015-07-02 15:44:10'),
(80, 0, 2, 1, 50, 100, 96, 'pi20150711124411', '-ppi', NULL, '2015-07-02 15:44:11'),
(81, 0, 2, 1, 50, 100, 96, 'pi20150711124411', '-ppi', NULL, '2015-07-02 15:44:11'),
(82, 0, 2, 1, 50, 100, 96, 'pi20150712124412', '-ppi', NULL, '2015-07-02 15:44:12'),
(83, 0, 2, 1, 50, 100, 96, 'pi20150713124413', '-ppi', NULL, '2015-07-02 15:44:13'),
(84, 0, 2, 1, 50, 100, 96, 'pi20150713124413', '-ppi', NULL, '2015-07-02 15:44:13'),
(85, 0, 2, 1, 50, 100, 96, 'pi20150714124414', '-ppi', NULL, '2015-07-02 15:44:14'),
(86, 0, 2, 1, 50, 100, 96, 'pi20150714124414', '-ppi', NULL, '2015-07-02 15:44:14'),
(87, 0, 2, 1, 50, 100, 96, 'pi20150715124415', '-ppi', NULL, '2015-07-02 15:44:15'),
(88, 0, 2, 1, 50, 100, 96, 'pi20150715124415', '-ppi', NULL, '2015-07-02 15:44:15'),
(89, 12, 2, 3, 95, 100, 96, 'pi20150703011103', '-ppi', NULL, '2015-07-02 16:11:03'),
(90, 12, 0, 0, 85, 100, 96, 'pe20150749011349', '-ppe', 3, '2015-07-02 16:13:49');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historial_torah`
--

CREATE TABLE IF NOT EXISTS `historial_torah` (
  `torah_id` int(11) NOT NULL AUTO_INCREMENT,
  `id_usuario` int(11) NOT NULL,
  `documento` text COLLATE utf8_spanish_ci NOT NULL,
  `patron` text COLLATE utf8_spanish_ci NOT NULL,
  `size` int(11) NOT NULL,
  `tipo` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `saltos` int(11) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`torah_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=90 ;

--
-- Volcado de datos para la tabla `historial_torah`
--

INSERT INTO `historial_torah` (`torah_id`, `id_usuario`, `documento`, `patron`, `size`, `tipo`, `saltos`, `fecha`) VALUES
(52, 2, 'Biblia_20150737063437', 'moises mata david aristoteles', 56, '-pbe', 250, '2015-07-01 21:34:37'),
(53, 6, 'Biblia_20150740064440', 'hola mundo como estan todos', 56, '-pbe', 350, '2015-07-01 21:44:40'),
(54, 6, 'Biblia_20150733064733', 'hola mundo como estan todos', 0, '-pbe', 200, '2015-07-01 21:47:33'),
(55, 6, 'Biblia_20150742065142', 'hola mundo como estan todos', 0, '-pbe', 300, '2015-07-01 21:51:42'),
(56, 6, 'Biblia_20150736065336', 'hola mundo como estan todos miguel', 81, '-pbe', 200, '2015-07-01 21:53:36'),
(57, 6, 'Biblia_20150714065614', 'hola mundo como estan todos', 81, '-pbe', 300, '2015-07-01 21:56:14'),
(58, 6, 'Biblia_20150756065756', 'hola mundo como estan todos', 81, '-pbe', 200, '2015-07-01 21:57:56'),
(59, 6, 'Biblia_20150749065949', 'hola mundo como estan todos miguel', 81, '-pbe', 300, '2015-07-01 21:59:49'),
(60, 6, 'Biblia_20150748071548', 'hola mundo como estan todos miguel', 81, '-pbe', 300, '2015-07-01 22:15:48'),
(61, 6, 'Biblia_20150717071717', '0', 81, '-pbi', 50, '2015-07-01 22:17:17'),
(62, 6, 'Biblia_20150706073506', '0', 81, '-pbi', 20, '2015-07-01 22:35:06'),
(63, 6, 'Biblia_20150723073923', '0', 81, '-pbi', 45, '2015-07-01 22:39:23'),
(64, 6, 'Biblia_20150709074609', '0', 81, '-pbi', 40, '2015-07-01 22:46:09'),
(65, 6, 'Biblia_20150744075944', '0', 81, '-pbi', 30, '2015-07-01 22:59:44'),
(66, 6, 'Biblia_20150729081429', '0', 81, '-pbi', 380, '2015-07-01 23:14:29'),
(67, 6, 'Biblia_20150756084456', '0', 81, '-pbi', 80, '2015-07-01 23:44:56'),
(68, 6, 'Biblia_20150710084910', '0', 81, '-pbi', 80, '2015-07-01 23:49:10'),
(69, 6, 'Biblia_20150710085410', '0', 81, '-pbi', 80, '2015-07-01 23:54:10'),
(70, 10, 'Biblia_20150722092822', '0', 81, '-pbi', 10, '2015-07-02 12:28:22'),
(71, 10, 'Biblia_20150705093905', 'patron', 81, '-pbe', 50, '2015-07-02 12:39:05'),
(72, 2, 'Biblia_20150737100237', 'miguel', 81, '-pbe', 250, '2015-07-02 13:02:37'),
(73, 2, 'Biblia_20150715101515', 'chile argentina final gana', 81, '-pbe', 200, '2015-07-02 13:15:15'),
(74, 10, 'Biblia_20150756102556', 'explicito', 81, '-pbe', 50, '2015-07-02 13:25:56'),
(75, 10, 'Biblia_20150749102749', '0', 81, '-pbi', 20, '2015-07-02 13:27:50'),
(76, 11, 'Biblia_20150721104321', 'hola', 81, '-pbe', 50, '2015-07-02 13:43:21'),
(77, 11, 'Biblia_20150752104352', '0', 81, '-pbi', 20, '2015-07-02 13:43:52'),
(78, 11, 'Biblia_20150741105041', '0', 81, '-pbi', 200, '2015-07-02 13:50:41'),
(79, 11, 'Biblia_20150744110444', '0', 81, '-pbi', 480, '2015-07-02 14:04:44'),
(80, 2, 'Biblia_20150718113318', 'protein masa muscle', 81, '-pbe', 400, '2015-07-02 14:33:18'),
(81, 2, 'Biblia_20150721113421', '0', 81, '-pbi', 80, '2015-07-02 14:34:21'),
(82, 11, 'Biblia_20150709114109', '0', 81, '-pbi', 80, '2015-07-02 14:41:09'),
(83, 11, 'Biblia_20150726114426', '0', 81, '-pbi', 160, '2015-07-02 14:44:26'),
(84, 11, 'Biblia_20150732121932', 'asi tal cual', 81, '-pbe', 320, '2015-07-02 15:19:32'),
(85, 11, 'Biblia_20150738123938', 'asi tal cual', 81, '-pbe', 80, '2015-07-02 15:39:38'),
(86, 11, 'Biblia_20150729124329', 'asi tal cual', 81, '-pbe', 80, '2015-07-02 15:43:29'),
(87, 11, 'Biblia_20150741124541', 'hola bebe', 81, '-pbe', 80, '2015-07-02 15:45:41'),
(88, 12, 'Biblia_20150745011745', 'nazi guerra mundial', 81, '-pbe', 560, '2015-07-02 16:17:45'),
(89, 12, 'Biblia_20150734012134', '0', 81, '-pbi', 80, '2015-07-02 16:21:34');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_arbol`
--

CREATE TABLE IF NOT EXISTS `tipo_arbol` (
  `id_tipo_arbol` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` text COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id_tipo_arbol`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `tipo_arbol`
--

INSERT INTO `tipo_arbol` (`id_tipo_arbol`, `nombre`) VALUES
(1, 'Quillay'),
(2, 'Peumo'),
(3, 'Boldo'),
(4, 'Roble'),
(5, 'Rauli');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_enfermedad`
--

CREATE TABLE IF NOT EXISTS `tipo_enfermedad` (
  `id_tipo_enfermedad` int(11) NOT NULL AUTO_INCREMENT,
  `nombre_enfermedad` text COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id_tipo_enfermedad`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `tipo_enfermedad`
--

INSERT INTO `tipo_enfermedad` (`id_tipo_enfermedad`, `nombre_enfermedad`) VALUES
(1, 'Gripe'),
(2, 'Sarampion'),
(3, 'Meningitis'),
(4, 'Pediculosis'),
(5, 'Paperas'),
(6, 'AH1N1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_suelo`
--

CREATE TABLE IF NOT EXISTS `tipo_suelo` (
  `id_tipo_suelo` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` text COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id_tipo_suelo`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `tipo_suelo`
--

INSERT INTO `tipo_suelo` (`id_tipo_suelo`, `nombre`) VALUES
(1, 'Serranias arias y semiaridas'),
(2, 'Graniticos de la costa'),
(3, 'Vertisoles'),
(4, 'Aluviales del valle central');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `apellidos` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_spanish_ci NOT NULL,
  `password` text COLLATE utf8_spanish_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=13 ;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `apellidos`, `email`, `password`) VALUES
(1, 'Diego', 'Hernandez', 'diego.hernandez@ceinf.cl', 'qwer1234'),
(2, 'Miguel', 'Nunez', 'miguel.nunez@ceinf.cl', 'ma2015'),
(3, 'rodrigo', 'arratia', 'rgo_2010@hotmail.com', 'arratia391'),
(6, 'Manuel', 'Venegas', 'mvenegas@icci.cl', 'bananero'),
(7, 'Daniel ', 'Gutierrez', 'dgutierrez221b@gmail.com', '91517712'),
(8, 'sergio', 'abarca flores', 'sergioaf1991@gmail.com', 'perrogato'),
(10, 'Rodrigo', 'Reyes', 'rod.reyes.s@gmail.com', 'paralela'),
(11, 'Roberto', 'OÃ±ate', 'r.i.o.p@live.cl', 'paralela'),
(12, 'cluster', 'marvel paralela', 'clustermarvel.utem@gmail.com', 'paralela');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
