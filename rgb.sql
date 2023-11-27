-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-11-2023 a las 05:10:01
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
-- Base de datos: `rgb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `colores`
--

CREATE TABLE `colores` (
  `ID` int(11) NOT NULL,
  `R` int(11) DEFAULT NULL,
  `G` int(11) DEFAULT NULL,
  `B` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `colores`
--

INSERT INTO `colores` (`ID`, `R`, `G`, `B`) VALUES
(1, 212, 230, 242),
(2, 214, 233, 240),
(3, 145, 74, 54),
(4, 144, 78, 30),
(5, 3, 34, 52),
(6, 231, 200, 179),
(7, 159, 87, 37),
(8, 209, 225, 238),
(9, 236, 94, 90),
(10, 127, 70, 40),
(11, 234, 97, 89),
(12, 231, 76, 74),
(13, 207, 225, 237),
(14, 175, 118, 91),
(15, 201, 221, 232),
(16, 248, 123, 57),
(17, 151, 72, 55),
(18, 253, 12, 106),
(19, 250, 7, 101),
(20, 237, 9, 94),
(21, 167, 165, 140),
(22, 102, 254, 255),
(23, 139, 141, 127),
(24, 255, 247, 255),
(25, 76, 171, 55),
(26, 248, 123, 57),
(27, 255, 209, 235),
(28, 102, 203, 65),
(29, 255, 209, 235),
(30, 67, 176, 51),
(31, 104, 0, 1),
(32, 248, 123, 57),
(33, 251, 154, 161),
(34, 102, 254, 255),
(35, 156, 70, 55),
(36, 166, 166, 142),
(37, 102, 254, 255),
(38, 230, 137, 76),
(39, 252, 205, 3),
(40, 175, 2, 6),
(41, 74, 74, 74),
(42, 65, 177, 51),
(43, 251, 154, 163),
(44, 255, 209, 235),
(45, 60, 179, 51),
(46, 251, 155, 166),
(47, 156, 70, 55),
(48, 255, 209, 235),
(49, 248, 123, 57),
(50, 248, 123, 57),
(51, 248, 123, 57),
(52, 248, 123, 57),
(53, 157, 71, 48),
(54, 166, 166, 142),
(55, 230, 137, 76),
(56, 248, 123, 57),
(57, 166, 166, 142),
(58, 245, 0, 91),
(59, 166, 166, 142),
(60, 228, 138, 78),
(61, 98, 2, 3),
(62, 252, 255, 255),
(63, 102, 202, 68),
(64, 248, 123, 57),
(65, 157, 70, 51),
(66, 167, 165, 142);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `colores`
--
ALTER TABLE `colores`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `colores`
--
ALTER TABLE `colores`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
