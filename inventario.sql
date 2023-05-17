-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-05-2023 a las 23:56:55
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
-- Base de datos: `inventario`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos`
--

CREATE TABLE `datos` (
  `id` int(11) NOT NULL,
  `stiba` int(10) NOT NULL,
  `caja` int(10) NOT NULL,
  `rack` varchar(10) NOT NULL,
  `sku` varchar(20) NOT NULL,
  `descripcion` varchar(50) NOT NULL,
  `cantidad` int(20) NOT NULL,
  `columna` int(10) NOT NULL,
  `fecha_ingreso` varchar(12) NOT NULL,
  `fecha_salida` varchar(12) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `datos`
--

INSERT INTO `datos` (`id`, `stiba`, `caja`, `rack`, `sku`, `descripcion`, `cantidad`, `columna`, `fecha_ingreso`, `fecha_salida`, `total`) VALUES
(1, 11, 3, 'asa', '$fcdfc', 'sdfs1', 1, 3, '17/05/23', '17/05/23', 1),
(2, 11, 3, 'asa', '$fcdfc', 'sdfs1', 1, 3, '17/05/23', '17/05/23', 1),
(3, 11, 3, 'asa', '$fcdfc', 'sdfs1', 1, 3, '17/05/23', '17/05/23', 1),
(4, 11, 3, 'asa', '$fcdfc', 'sdfs1', 1, 3, '17/05/23', '17/05/23', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `datos`
--
ALTER TABLE `datos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `datos`
--
ALTER TABLE `datos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
