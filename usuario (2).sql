-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 04-03-2022 a las 02:33:28
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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
