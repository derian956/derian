-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-10-2019 a las 18:02:24
-- Versión del servidor: 10.4.6-MariaDB
-- Versión de PHP: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `imc`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos`
--

CREATE TABLE `datos` (
  `datos_id` int(6) NOT NULL,
  `datos_fecha` timestamp NOT NULL DEFAULT current_timestamp(),
  `datos_altura` float(3,2) NOT NULL,
  `datos_peso` float(5,2) NOT NULL,
  `datos_imc` float(4,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `datos`
--

INSERT INTO `datos` (`datos_id`, `datos_fecha`, `datos_altura`, `datos_peso`, `datos_imc`) VALUES
(15, '2019-09-07 12:23:53', 1.79, 80.00, 25.00),
(16, '2019-10-11 13:09:52', 0.00, 0.00, 0.00),
(17, '2019-10-11 13:11:11', 0.00, 0.00, 0.00),
(18, '2019-10-11 13:11:23', 0.00, 0.00, 0.00),
(19, '2019-10-11 13:11:39', 1.78, 79.00, 24.90),
(20, '2019-10-11 13:12:40', 1.70, 79.00, 27.30),
(21, '2019-10-11 13:22:40', 0.00, 0.00, 0.00),
(22, '2019-10-11 13:26:31', 0.00, 0.00, 0.00),
(23, '2019-10-11 13:26:56', 0.00, 0.00, 0.00),
(24, '2019-10-11 13:28:52', 0.00, 0.00, 0.00),
(25, '2019-10-11 13:28:57', 0.00, 0.00, 0.00),
(26, '2019-10-11 13:30:21', 1.65, 182.30, 67.00),
(27, '2019-10-11 13:30:43', 1.65, 182.00, 66.90),
(28, '2019-10-11 13:30:54', 1.98, 123.00, 31.40),
(29, '2019-10-11 13:31:38', 1.79, 79.00, 24.70),
(30, '2019-10-11 13:31:58', 1.80, 67.30, 20.80),
(31, '2019-10-11 13:32:10', 1.80, 67.30, 20.80),
(32, '2019-10-11 13:32:17', 0.00, 0.00, 0.00);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `datos`
--
ALTER TABLE `datos`
  ADD PRIMARY KEY (`datos_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `datos`
--
ALTER TABLE `datos`
  MODIFY `datos_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
