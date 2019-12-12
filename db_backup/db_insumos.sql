-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-12-2019 a las 00:43:59
-- Versión del servidor: 10.1.33-MariaDB
-- Versión de PHP: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_insumos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias_insumos`
--

CREATE TABLE `categorias_insumos` (
  `id` int(11) NOT NULL,
  `nombre_cat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `categorias_insumos`
--

INSERT INTO `categorias_insumos` (`id`, `nombre_cat`) VALUES
(1, 'Categoria A'),
(2, 'Categoria B'),
(3, 'Categoria C'),
(4, 'Categoria D'),
(5, 'Categoria E');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleado`
--

CREATE TABLE `empleado` (
  `id` int(11) NOT NULL,
  `nombre` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `empleado`
--

INSERT INTO `empleado` (`id`, `nombre`) VALUES
(2, 'Maria Ricuarte'),
(3, 'Rene Rivas'),
(4, 'Ricardo Leon'),
(5, 'Pedro Cifuentes'),
(6, 'Juan Arboleda'),
(7, 'Luisa Herrera'),
(8, 'Patricio Sosa'),
(9, 'Eduardo Malo'),
(10, 'Rocio Larrea'),
(11, 'Catalina Guerra'),
(12, 'Fernando Ortiz'),
(13, 'Mario Guerron'),
(14, 'Ana Llerena'),
(15, 'Pablo Pitarque');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `insumos`
--

CREATE TABLE `insumos` (
  `id` int(11) NOT NULL,
  `id_categoria_fk` int(11) NOT NULL,
  `id_proveedor_fk` int(11) NOT NULL,
  `nombre_insumo` varchar(100) NOT NULL,
  `unidad_medida` varchar(45) NOT NULL,
  `costo_unidad` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `insumos`
--

INSERT INTO `insumos` (`id`, `id_categoria_fk`, `id_proveedor_fk`, `nombre_insumo`, `unidad_medida`, `costo_unidad`) VALUES
(27, 1, 1, 'Insumo A', 'Galon', 12.5),
(28, 1, 6, 'Insumo B', 'Caja', 10),
(29, 3, 5, 'Insumo C', 'Caja', 5),
(30, 5, 3, 'Insumo D', 'Pliego', 1),
(31, 4, 2, 'Insumo E', 'Barra', 7.5),
(32, 2, 4, 'Insumo F', 'Litro', 35.5),
(33, 3, 1, 'Insumo G', 'Galon', 25),
(34, 1, 1, 'Insumo H', 'Caja', 12.5),
(35, 2, 2, 'Insumo I', 'Caja', 65),
(36, 2, 5, 'Insumo J', 'Barra', 45),
(37, 4, 6, 'Insumo K', 'Pliego', 37.21),
(38, 4, 4, 'Insumo L', 'Caja', 28.43),
(39, 5, 3, 'Insumo M', 'Galon', 14.75),
(40, 5, 3, 'Insumo N', 'Litro', 31.21),
(41, 3, 5, 'Insumo O', 'Pliego', 19.75),
(42, 3, 5, 'Insumo P', 'Barra', 36.45),
(43, 2, 6, 'Insumo Q', 'Barra', 23),
(44, 1, 6, 'Insumo R', 'Caja', 10),
(45, 5, 2, 'Insumo S', 'Litro', 15.89),
(46, 4, 1, 'Insumo T', 'Galon', 67.46),
(47, 4, 4, 'Insumo U', 'Pieza', 11.65),
(48, 3, 1, 'Insumo V', 'Pieza', 10),
(49, 2, 5, 'Insumo W', 'Pieza', 24.99),
(50, 1, 3, 'Insumo X', 'Litro', 54.32),
(51, 5, 2, 'Insumo Y', 'Caja', 13.25),
(52, 3, 1, 'Insumo Z', 'Barra', 43.21);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `laboratorios`
--

CREATE TABLE `laboratorios` (
  `id` int(11) NOT NULL,
  `id_ubicacion_fk` int(11) NOT NULL,
  `id_empleado_fk` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `laboratorios`
--

INSERT INTO `laboratorios` (`id`, `id_ubicacion_fk`, `id_empleado_fk`, `nombre`) VALUES
(1, 1, 2, 'Laboratorio 1'),
(2, 2, 3, 'Laboratorio 2'),
(3, 3, 4, 'Laboratotio 3'),
(4, 4, 5, 'Laboratorio 4'),
(5, 5, 6, 'Laboratorio 5'),
(6, 6, 7, 'Laboratorio 6'),
(7, 7, 8, 'Laboratorio 7'),
(8, 8, 9, 'Laboratorio 8'),
(9, 9, 10, 'Laboratorio 9'),
(10, 10, 11, 'Laboratotio 10'),
(11, 11, 12, 'Laboratorio 11'),
(12, 12, 13, 'Laboratorio 12'),
(13, 13, 14, 'Laboratorio 13'),
(14, 14, 15, 'Laboratorio 14');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedores`
--

CREATE TABLE `proveedores` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `proveedores`
--

INSERT INTO `proveedores` (`id`, `nombre`) VALUES
(1, 'Proveedor A'),
(2, 'Proveedor B'),
(3, 'Proveedor C'),
(4, 'Proveedor D'),
(5, 'Proveedor E'),
(6, 'Proveedor F');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ubicacion`
--

CREATE TABLE `ubicacion` (
  `id` int(11) NOT NULL,
  `ubicacion` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ubicacion`
--

INSERT INTO `ubicacion` (`id`, `ubicacion`) VALUES
(1, 'Ahuachapan'),
(2, 'Santa Ana'),
(3, 'Armenia'),
(4, 'Ilobasco'),
(5, 'Chalatenando'),
(6, 'Cojutepeque'),
(7, 'La Libertad'),
(8, 'Olocuilta'),
(9, 'San Salvador'),
(10, 'San Vicente'),
(11, 'Usulutan'),
(12, 'San Miguel'),
(13, 'Jocoro'),
(14, 'La Union');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `nivel` int(11) NOT NULL DEFAULT '1',
  `clave` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `usuario`, `nivel`, `clave`) VALUES
(1, 'admin', 1, 'admin'),
(2, 'edward', 1, 'asdfg');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categorias_insumos`
--
ALTER TABLE `categorias_insumos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `empleado`
--
ALTER TABLE `empleado`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `insumos`
--
ALTER TABLE `insumos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `insumo_cat` (`id_categoria_fk`),
  ADD KEY `insumo_prov` (`id_proveedor_fk`);

--
-- Indices de la tabla `laboratorios`
--
ALTER TABLE `laboratorios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lab_ubic` (`id_ubicacion_fk`),
  ADD KEY `lab_emp` (`id_empleado_fk`);

--
-- Indices de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `ubicacion`
--
ALTER TABLE `ubicacion`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categorias_insumos`
--
ALTER TABLE `categorias_insumos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `insumos`
--
ALTER TABLE `insumos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT de la tabla `laboratorios`
--
ALTER TABLE `laboratorios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `ubicacion`
--
ALTER TABLE `ubicacion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `insumos`
--
ALTER TABLE `insumos`
  ADD CONSTRAINT `insumo_cat` FOREIGN KEY (`id_categoria_fk`) REFERENCES `categorias_insumos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `insumo_prov` FOREIGN KEY (`id_proveedor_fk`) REFERENCES `proveedores` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `laboratorios`
--
ALTER TABLE `laboratorios`
  ADD CONSTRAINT `lab_emp` FOREIGN KEY (`id_empleado_fk`) REFERENCES `empleado` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `lab_ubic` FOREIGN KEY (`id_ubicacion_fk`) REFERENCES `ubicacion` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
