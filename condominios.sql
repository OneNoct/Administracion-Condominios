-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 11-11-2016 a las 13:45:30
-- Versión del servidor: 10.1.13-MariaDB
-- Versión de PHP: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `condominios`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_cobros`
--

CREATE TABLE `tbl_cobros` (
  `especiales` int(11) NOT NULL,
  `mes` int(11) NOT NULL,
  `rut` varchar(10) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_medagua`
--

CREATE TABLE `tbl_medagua` (
  `lectura` int(11) NOT NULL,
  `mes` int(11) NOT NULL,
  `path` text COLLATE utf8_spanish2_ci NOT NULL,
  `rut` varchar(10) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_medluz`
--

CREATE TABLE `tbl_medluz` (
  `lectura` int(11) NOT NULL,
  `mes` int(11) NOT NULL,
  `path` text COLLATE utf8_spanish2_ci NOT NULL,
  `rut` varchar(10) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_propietario`
--

CREATE TABLE `tbl_propietario` (
  `rut` varchar(10) COLLATE utf8_spanish2_ci NOT NULL,
  `nombre` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `apellido` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `email` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `user` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `pass` varchar(10) COLLATE utf8_spanish2_ci NOT NULL,
  `telefono` int(11) NOT NULL,
  `celular` int(11) NOT NULL,
  `numprop` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_recaudacion`
--

CREATE TABLE `tbl_recaudacion` (
  `monto` int(11) NOT NULL,
  `mes` int(11) NOT NULL,
  `path` text COLLATE utf8_spanish2_ci NOT NULL,
  `rut` varchar(10) COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbl_cobros`
--
ALTER TABLE `tbl_cobros`
  ADD KEY `rut` (`rut`);

--
-- Indices de la tabla `tbl_medagua`
--
ALTER TABLE `tbl_medagua`
  ADD KEY `rut` (`rut`);

--
-- Indices de la tabla `tbl_medluz`
--
ALTER TABLE `tbl_medluz`
  ADD KEY `rut` (`rut`);

--
-- Indices de la tabla `tbl_propietario`
--
ALTER TABLE `tbl_propietario`
  ADD PRIMARY KEY (`rut`);

--
-- Indices de la tabla `tbl_recaudacion`
--
ALTER TABLE `tbl_recaudacion`
  ADD KEY `rut` (`rut`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tbl_cobros`
--
ALTER TABLE `tbl_cobros`
  ADD CONSTRAINT `tbl_cobros_ibfk_1` FOREIGN KEY (`rut`) REFERENCES `tbl_propietario` (`rut`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `tbl_medagua`
--
ALTER TABLE `tbl_medagua`
  ADD CONSTRAINT `tbl_medagua_ibfk_1` FOREIGN KEY (`rut`) REFERENCES `tbl_propietario` (`rut`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `tbl_medluz`
--
ALTER TABLE `tbl_medluz`
  ADD CONSTRAINT `tbl_medluz_ibfk_1` FOREIGN KEY (`rut`) REFERENCES `tbl_propietario` (`rut`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `tbl_recaudacion`
--
ALTER TABLE `tbl_recaudacion`
  ADD CONSTRAINT `tbl_recaudacion_ibfk_1` FOREIGN KEY (`rut`) REFERENCES `tbl_propietario` (`rut`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
