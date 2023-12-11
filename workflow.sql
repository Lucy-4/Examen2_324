-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-12-2023 a las 08:38:14
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `workflow`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `flujo`
--

CREATE TABLE `flujo` (
  `id` int(11) NOT NULL,
  `flujo` varchar(10) DEFAULT NULL,
  `proceso` varchar(5) DEFAULT NULL,
  `procesosiguiente` varchar(5) DEFAULT NULL,
  `tipo` char(1) DEFAULT NULL,
  `rol` char(1) DEFAULT NULL,
  `pantalla` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `flujo`
--

INSERT INTO `flujo` (`id`, `flujo`, `proceso`, `procesosiguiente`, `tipo`, `rol`, `pantalla`) VALUES
(1, 'F1', 'P1', 'P2', 'I', 'E', 'ingresoTramitesEnLinea'),
(2, 'F1', 'P2', 'P5', 'P', 'E', 'realizarPago'),
(3, 'F1', 'P3', 'P4', 'P', 'M', 'recepcionPago'),
(4, 'F1', 'P4', 'P5', 'P', 'M', 'entregarComprobante'),
(5, 'F1', 'P5', 'P6', 'P', 'E', 'recibirComprobante');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `seguimiento`
--

CREATE TABLE `seguimiento` (
  `secuencia` int(11) NOT NULL,
  `usuario` varchar(50) DEFAULT NULL,
  `fechahorainicio` datetime DEFAULT NULL,
  `fechahorafin` datetime DEFAULT NULL,
  `flujo` varchar(10) DEFAULT NULL,
  `proceso` varchar(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `seguimiento`
--

INSERT INTO `seguimiento` (`secuencia`, `usuario`, `fechahorainicio`, `fechahorafin`, `flujo`, `proceso`) VALUES
(6, 'luis', '2023-12-09 18:28:58', NULL, 'F1', 'P1'),
(7, 'luis', '2023-12-09 21:14:31', NULL, 'F1', 'P1'),
(8, 'luis', '2023-12-09 21:23:53', NULL, 'F1', 'P1'),
(9, 'luis', '2023-12-09 21:24:48', NULL, 'F1', 'P1'),
(10, 'luis', '2023-12-09 21:25:20', NULL, 'F1', 'P1'),
(11, 'luis', '2023-12-09 21:29:59', NULL, 'F1', 'P1'),
(12, 'luis', '2023-12-09 21:31:12', NULL, 'F1', 'P1'),
(13, 'luis', '2023-12-09 21:32:48', NULL, 'F1', 'P1'),
(14, 'luis', '2023-12-09 21:45:58', NULL, 'F1', 'P1'),
(15, 'gabriel', '2023-12-09 22:55:12', NULL, 'F1', 'P1'),
(16, 'maria', '2023-12-09 23:08:51', NULL, 'F1', 'P1');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `flujo`
--
ALTER TABLE `flujo`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `seguimiento`
--
ALTER TABLE `seguimiento`
  ADD PRIMARY KEY (`secuencia`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `flujo`
--
ALTER TABLE `flujo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `seguimiento`
--
ALTER TABLE `seguimiento`
  MODIFY `secuencia` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
