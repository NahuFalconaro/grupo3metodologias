-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-07-2021 a las 02:35:20
-- Versión del servidor: 10.4.19-MariaDB
-- Versión de PHP: 8.0.7

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
(15, 'Bronce', 1, 'Asdasdasd'),
(17, 'Acero', 1, 'Material caro'),
(18, 'Vidrio', 1, 'El vidrio corta ');

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
(15, 5, NULL),
(15, 7, 35580050),
(17, 3, NULL),
(17, 5, 1122);

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

--
-- Volcado de datos para la tabla `pedido`
--

INSERT INTO `pedido` (`id_pedido`, `usuario_asignado`, `nombre`, `apellido`, `ubicacion`, `telefono`, `foto`, `clase_vehiculo`, `franja_horaria`) VALUES
(5, '35580050', 'juan', 'pedro', 'juan calzada 123', 1234, NULL, 'c', '08:00hs a 13:00hs'),
(6, '342342', 'pablito', 'ramirez', 'calle falsa 222', 34234, NULL, 'a', '08:00hs a 13:00hs'),
(7, '342342', 'juan', 'magan', 'calle falsa 222', 34234, NULL, 'c', '15:00hs a 18:00hs'),
(8, '35580050', 'juan roman', 'riquelme', 'gutierrez 6666', 45343222, NULL, 'b', '15:00hs a 18:00hs'),
(9, '35580050', 'milagros', 'aasd', 'sastre 1332', 34234, NULL, 'd', '15:00hs a 18:00hs'),
(10, '342342', 'pablito', 'magan', 'recoleta 2222', 34234, NULL, 'a', '08:00hs a 13:00hs'),
(11, '44852025', 'juan', 'juancito', 'avenida ramirez 923', 23423566, NULL, 'b', '08:00hs a 13:00hs'),
(12, '35580050', 'Lionel', 'Messi', 'Barcelona 1010', 249410222, NULL, 'd', '15:00hs a 18:00hs'),
(13, '35580050', 'Lebron ', 'James', 'Wall Street 2324', 2147483647, NULL, 'd', '15:00hs a 18:00hs'),
(14, '1122', 'nuevo pedido', 'ramirez', 'calle falsa 2223', 45343222, NULL, 'b', '15:00hs a 18:00hs');

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
(1122, 'Carmelo', 'Antony', '234455656', 'carmelomelo@gmail.com', 'New york 444', '03-08-1994', 'b', NULL, 'cartonero'),
(35580050, 'juancitoo', 'Gonzalez', '2233445', 'juancitoramirez@gmail.com', 'calle falsa 1111', '03-08-1993', 'a', NULL, 'cartonero'),
(43455973, 'miguelitonnnn', '', '0', '', '', '', '', '$2y$10$.J6RA6NXk0GJ04L.Qv7A2uuyxZiNOZMHePhCDVkYQyhDVMfNa52S.', 'admin');

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
  MODIFY `id_materiales` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de la tabla `pedido`
--
ALTER TABLE `pedido`
  MODIFY `id_pedido` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `material_traido`
--
ALTER TABLE `material_traido`
  ADD CONSTRAINT `fk_materiales_traidos` FOREIGN KEY (`id_materiales`) REFERENCES `materiales` (`id_materiales`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `material_traido_ibfk_1` FOREIGN KEY (`dni`) REFERENCES `usuario` (`dni`) ON DELETE SET NULL ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
