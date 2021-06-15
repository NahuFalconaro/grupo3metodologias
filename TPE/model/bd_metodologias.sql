-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-06-2021 a las 16:24:18
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_metodologias`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `materiales`
--

CREATE TABLE `materiales` (
  `id_materiales` int(11) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `aceptado` tinyint(1) NOT NULL,
  `descripcion` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `materiales`
--

INSERT INTO `materiales` (`id_materiales`, `nombre`, `aceptado`, `descripcion`) VALUES
(14, 'Vidrio', 1, 'No traerlo roto y entregarlo bien envuelto');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `material_traido`
--

CREATE TABLE `material_traido` (
  `id_material` int(11) NOT NULL,
  `peso` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `material_traido`
--

INSERT INTO `material_traido` (`id_material`, `peso`, `id_usuario`) VALUES
(14, 30, 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedido`
--

CREATE TABLE `pedido` (
  `id_pedido` int(11) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `apellido` varchar(20) NOT NULL,
  `ubicacion` varchar(30) NOT NULL,
  `telefono` int(11) NOT NULL,
  `foto` varchar(100) DEFAULT NULL,
  `clase_vehiculo` char(1) NOT NULL,
  `franja_horaria` char(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `usuario` varchar(20) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `admin` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `usuario`, `pass`, `admin`) VALUES
(5, 'vecino', 'vecino', 2),
(6, 'cartonero', 'cartonero', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `materiales`
--
ALTER TABLE `materiales`
  ADD PRIMARY KEY (`id_materiales`);

--
-- Indices de la tabla `material_traido`
--
ALTER TABLE `material_traido`
  ADD PRIMARY KEY (`id_usuario`,`id_material`),
  ADD KEY `id_material` (`id_material`),
  ADD KEY `id_usuario` (`id_usuario`);

--
-- Indices de la tabla `pedido`
--
ALTER TABLE `pedido`
  ADD PRIMARY KEY (`id_pedido`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `materiales`
--
ALTER TABLE `materiales`
  MODIFY `id_materiales` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `pedido`
--
ALTER TABLE `pedido`
  MODIFY `id_pedido` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `material_traido`
--
ALTER TABLE `material_traido`
  ADD CONSTRAINT `material_traido_ibfk_1` FOREIGN KEY (`id_material`) REFERENCES `materiales` (`id_materiales`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `material_traido_ibfk_2` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
