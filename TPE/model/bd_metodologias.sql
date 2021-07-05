-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 05-07-2021 a las 18:54:10
-- Versión del servidor: 10.4.19-MariaDB
-- Versión de PHP: 8.0.6

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
(14, 'Vidrio', 1, 'No traerlo roto y entregarlo bien envuelto'),
(15, 'Bronce', 1, 'Descripcion'),
(16, 'Plata', 1, 'Descripcion de plata');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `material_traido`
--

CREATE TABLE `material_traido` (
  `id_materiales` int(11) NOT NULL,
  `peso` int(11) NOT NULL,
  `dni` int(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `material_traido`
--

INSERT INTO `material_traido` (`id_materiales`, `peso`, `dni`) VALUES
(14, 3, 44852025),
(14, 3, 44852025),
(14, 3, NULL),
(14, 3, 35580050),
(14, 3, NULL),
(15, 5, 44852025),
(15, 7, 35580050),
(16, 1, 44852025),
(16, 1, 44852025),
(16, 9, 35580050),
(16, 1, 35580050);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedido`
--

CREATE TABLE `pedido` (
  `id_pedido` int(11) NOT NULL,
  `usuario_asignado` varchar(255) DEFAULT NULL,
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
  `dni` int(50) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `apellido` varchar(20) NOT NULL,
  `telefono` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `fecha_nacimiento` varchar(20) NOT NULL,
  `clase_vehiculo` char(1) NOT NULL,
  `pass` varchar(100) DEFAULT NULL,
  `rol` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`dni`, `nombre`, `apellido`, `telefono`, `email`, `direccion`, `fecha_nacimiento`, `clase_vehiculo`, `pass`, `rol`) VALUES
(35580050, 'juancito', 'ramirez', '2233445', 'juancitoramirez@gmail.com', 'calle falsa 222', '03/08/1993', 'a', NULL, 'cartonero'),
(43455973, 'miguelitonnnn', '', '0', '', '', '', '', '$2y$10$.J6RA6NXk0GJ04L.Qv7A2uuyxZiNOZMHePhCDVkYQyhDVMfNa52S.', 'admin'),
(44852025, 'pepito', 'perez', '156324542', 'pepito@gmail.com', 'pasaje falso 123', '10-02-1985', 'a', NULL, 'cartonero');

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
  ADD KEY `fk_materiales_traidos` (`id_materiales`),
  ADD KEY `dni` (`dni`);

--
-- Indices de la tabla `pedido`
--
ALTER TABLE `pedido`
  ADD PRIMARY KEY (`id_pedido`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`dni`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `materiales`
--
ALTER TABLE `materiales`
  MODIFY `id_materiales` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `pedido`
--
ALTER TABLE `pedido`
  MODIFY `id_pedido` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `material_traido`
--
ALTER TABLE `material_traido`
  ADD CONSTRAINT `fk_materiales_traidos` FOREIGN KEY (`id_materiales`) REFERENCES `materiales` (`id_materiales`),
  ADD CONSTRAINT `material_traido_ibfk_1` FOREIGN KEY (`dni`) REFERENCES `usuario` (`dni`) ON DELETE SET NULL ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
