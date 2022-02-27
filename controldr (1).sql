-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 27-02-2022 a las 05:26:32
-- Versión del servidor: 5.7.36
-- Versión de PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `controldr`
--
CREATE DATABASE IF NOT EXISTS `controldr` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `controldr`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `envio_producto`
--

DROP TABLE IF EXISTS `envio_producto`;
CREATE TABLE IF NOT EXISTS `envio_producto` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `codigo_ruta` varchar(125) NOT NULL,
  `fecha_transporte` date NOT NULL,
  `empresa_transporte` varchar(125) NOT NULL,
  `nombre_conductor` varchar(125) NOT NULL,
  `placa` varchar(70) NOT NULL,
  `numero_envio` int(11) NOT NULL,
  `remitente` varchar(125) NOT NULL,
  `destinatario` varchar(240) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `peso` double NOT NULL,
  `id_estadoProducto` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `envio_producto`
--

INSERT INTO `envio_producto` (`id`, `codigo_ruta`, `fecha_transporte`, `empresa_transporte`, `nombre_conductor`, `placa`, `numero_envio`, `remitente`, `destinatario`, `id_producto`, `peso`, `id_estadoProducto`, `status`) VALUES
(1, '1110111', '2022-02-05', 'empresa trans porte', 'Maria', '1231123', 21, 'aaaasdasd', '', 1, 1.47, 1, 1),
(2, 'AAA000111', '2022-02-28', 'empresa transportista', 'nombre conduictor', 'aisd-123d', 2418, '2419', 'DESTINATARIO', 1, 123123, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado_producto`
--

DROP TABLE IF EXISTS `estado_producto`;
CREATE TABLE IF NOT EXISTS `estado_producto` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(125) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `estado_producto`
--

INSERT INTO `estado_producto` (`id`, `nombre`) VALUES
(1, 'PENDIENTE'),
(2, 'ENVIADO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `lote`
--

DROP TABLE IF EXISTS `lote`;
CREATE TABLE IF NOT EXISTS `lote` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `codigo` varchar(125) NOT NULL,
  `numero` int(11) NOT NULL,
  `fecha_elaboracion` date NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `lote`
--

INSERT INTO `lote` (`id`, `codigo`, `numero`, `fecha_elaboracion`, `status`) VALUES
(1, '0001', 1, '2022-02-24', 1),
(2, '002', 2, '2022-02-28', 1),
(4, '0034', 5, '2022-02-26', 1),
(5, '0034', 5, '2022-02-27', 1),
(6, '0034', 6, '2022-02-27', 1),
(7, '007', 45, '2022-02-26', 1),
(8, '1001', 1, '2022-02-24', 0),
(9, '44444444', 1, '2022-02-26', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materia_prima`
--

DROP TABLE IF EXISTS `materia_prima`;
CREATE TABLE IF NOT EXISTS `materia_prima` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `codigo` varchar(125) NOT NULL,
  `id_tipo_mateira` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `materia_prima`
--

INSERT INTO `materia_prima` (`id`, `codigo`, `id_tipo_mateira`, `cantidad`, `status`) VALUES
(1, '1001', 1, 150, 1),
(2, '1002', 1, 15, 1),
(3, '1003', 1, 20, 1),
(4, '1004', 2, 32, 1),
(5, '1005', 1, 31, 0),
(6, '1007', 2, 21, 0),
(7, '2418HIJUELOS', 1, 50, 0),
(12, '1231231', 1, 12312, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

DROP TABLE IF EXISTS `producto`;
CREATE TABLE IF NOT EXISTS `producto` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `codigoProducto` varchar(240) NOT NULL,
  `nombre` varchar(125) NOT NULL,
  `calibre` int(11) NOT NULL,
  `grado_brix` int(11) NOT NULL,
  `peso` double NOT NULL,
  `id_lote` int(11) NOT NULL,
  `fecha_ingreso` date NOT NULL,
  `fecha_caducidad` date NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`id`, `codigoProducto`, `nombre`, `calibre`, `grado_brix`, `peso`, `id_lote`, `fecha_ingreso`, `fecha_caducidad`, `status`) VALUES
(1, '001', 'Producto 1', 5, 6, 15.5, 1, '2022-02-01', '2022-02-15', 1),
(2, '002', 'Producto 2', 6, 12, 12.5, 1, '2022-02-03', '2022-02-17', 1),
(3, '003', 'Producto 3', 7, 12, 15.5, 1, '2022-02-05', '2022-02-19', 1),
(4, '004', 'Producto 4', 8, 14, 1.47, 1, '2022-02-09', '2022-02-23', 1),
(5, '006', 'Producto 5', 10, 12, 1, 2, '2022-02-09', '2022-02-23', 1),
(6, '006', 'Producto 4', 8, 14, 1.47, 6, '2022-02-09', '2022-02-23', 0),
(7, '007', 'Producto 5', 10, 12, 0.75, 2, '2022-02-09', '2022-02-23', 0),
(8, '008', 'Producto 1', 5, 6, 15.4, 4, '2022-02-01', '2022-02-28', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_materia_prima`
--

DROP TABLE IF EXISTS `tipo_materia_prima`;
CREATE TABLE IF NOT EXISTS `tipo_materia_prima` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tipo_materia_prima`
--

INSERT INTO `tipo_materia_prima` (`id`, `nombre`) VALUES
(1, 'HIJUELOS\r\n'),
(2, 'ABONO');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(125) NOT NULL,
  `fecha_ingreso` date NOT NULL,
  `telefono` varchar(20) NOT NULL,
  `email` varchar(125) NOT NULL,
  `password` varchar(240) NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `nombre`, `fecha_ingreso`, `telefono`, `email`, `password`, `status`) VALUES
(1, 'erick', '2022-02-14', '09787', 'erick@gmail.com', '12345', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
