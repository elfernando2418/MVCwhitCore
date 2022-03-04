-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 04-03-2022 a las 02:36:21
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
  PRIMARY KEY (`id`),
  KEY `id_producto` (`id_producto`),
  KEY `id_estadoProducto` (`id_estadoProducto`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado_producto`
--

DROP TABLE IF EXISTS `estado_producto`;
CREATE TABLE IF NOT EXISTS `estado_producto` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(125) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  PRIMARY KEY (`id`),
  KEY `id_tipo_mateira` (`id_tipo_mateira`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  PRIMARY KEY (`id`),
  KEY `id_lote` (`id_lote`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_materia_prima`
--

DROP TABLE IF EXISTS `tipo_materia_prima`;
CREATE TABLE IF NOT EXISTS `tipo_materia_prima` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

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
  `tipo` varchar(75) NOT NULL DEFAULT 'EMPLEADO',
  `status` tinyint(4) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `nombre`, `fecha_ingreso`, `telefono`, `email`, `password`, `tipo`, `status`) VALUES
(1, 'admin', '2022-02-14', '09787', 'admin@gmail.com', '$2y$10$6sgDga/iDNpFlgLp/muLjeYpo7o21zi5k8kZ9.ZM.JmzR1fbIp0Pm', 'ADMINISTRADOR', 1),
(5, 'empleado', '2022-03-02', '0999999999', 'empleado@gmail.com', '$2y$10$3wCJoUxEB/5uZrhBQHA3cO/qZHkJc3mo5gQMv05SsyyWgwoWot.LG', 'EMPLEADO', 1);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `envio_producto`
--
ALTER TABLE `envio_producto`
  ADD CONSTRAINT `envio_producto_ibfk_1` FOREIGN KEY (`id_estadoProducto`) REFERENCES `estado_producto` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `envio_producto_ibfk_2` FOREIGN KEY (`id_producto`) REFERENCES `producto` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `materia_prima`
--
ALTER TABLE `materia_prima`
  ADD CONSTRAINT `materia_prima_ibfk_1` FOREIGN KEY (`id_tipo_mateira`) REFERENCES `tipo_materia_prima` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `producto`
--
ALTER TABLE `producto`
  ADD CONSTRAINT `producto_ibfk_1` FOREIGN KEY (`id_lote`) REFERENCES `lote` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
