-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-10-2023 a las 18:30:15
-- Versión del servidor: 10.1.28-MariaDB
-- Versión de PHP: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `mahasiswa`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bomba`
--

CREATE TABLE `bomba` (
  `idBomba` int(11) NOT NULL,
  `tipoBomba` varchar(50) NOT NULL,
  `tipoCombustible` varchar(50) NOT NULL,
  `ubicacion` varchar(50) NOT NULL,
  `capacidadBomba` int(11) NOT NULL,
  `estado` varchar(50) NOT NULL,
  `numEmpleados` int(11) NOT NULL,
  `fechaRegistro` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `bomba`
--

INSERT INTO `bomba` (`idBomba`, `tipoBomba`, `tipoCombustible`, `ubicacion`, `capacidadBomba`, `estado`, `numEmpleados`, `fechaRegistro`) VALUES
(1, 'asd', 'Magna', 'Isla 1', 1, 'Mantenimiento', 2, '2023-10-23 17:09:00'),
(6, 'asda', 'Magna', 'Isla 1', 1, 'Activo', 1, '2023-10-23 17:32:00'),
(8, 'asd', 'Magna', 'Isla 2', 1, 'Activo', 1, '2023-10-25 10:23:00'),
(9, 'asdasd', 'Magna', 'Isla 1', 1, 'Activo', 1, '2023-10-25 10:23:00'),
(10, 'asd', 'Magna', 'Isla 1', 1, 'Activo', 1, '2023-10-25 10:24:00'),
(11, 'asd', 'Magna', 'Isla 1', 1, 'Activo', 1, '2023-10-25 10:24:00'),
(12, 'asdasd', 'Magna', 'Isla 1', 1, 'Activo', 2, '2023-10-25 10:24:00'),
(13, 'asdasdasd', 'Magna', 'Isla 2', 1, 'Activo', 1, '2023-10-25 10:25:00'),
(14, '123', 'Magna', 'Isla 1', 123, 'Activo', 213, '2023-10-25 10:25:00'),
(15, 'sdf', 'Magna', 'Isla 1', 1, 'Activo', 11, '2023-10-25 10:25:00'),
(16, 'asdasd', 'Magna', 'Isla 1', 1, 'Activo', 123, '2023-10-25 10:25:00');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `bomba`
--
ALTER TABLE `bomba`
  ADD PRIMARY KEY (`idBomba`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `bomba`
--
ALTER TABLE `bomba`
  MODIFY `idBomba` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
