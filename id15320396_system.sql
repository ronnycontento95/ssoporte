-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 27-01-2022 a las 00:21:34
-- Versión del servidor: 10.4.13-MariaDB
-- Versión de PHP: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `id15320396_system`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cuenta`
--

CREATE TABLE `cuenta` (
  `ID_CUENTA` int(11) NOT NULL,
  `CONTRASEÑA` varchar(40) DEFAULT NULL,
  `USUARIO` varchar(30) DEFAULT NULL,
  `ESTADO` varchar(45) DEFAULT NULL,
  `ID_PERSONA` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `cuenta`
--

INSERT INTO `cuenta` (`ID_CUENTA`, `CONTRASEÑA`, `USUARIO`, `ESTADO`, `ID_PERSONA`) VALUES
(1, '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', '1105864621', '1', 1),
(2, '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', '1105853700', '1', 49);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_orden_reparacion`
--

CREATE TABLE `detalle_orden_reparacion` (
  `ID_DETALLE` int(11) NOT NULL,
  `ID_OREPARACION` int(11) NOT NULL,
  `MARCA` varchar(45) DEFAULT NULL,
  `MODELO` varchar(45) DEFAULT NULL,
  `DAÑO_REPORTADO` varchar(45) DEFAULT NULL,
  `OBSERVACIONES` varchar(45) DEFAULT NULL,
  `SERIE` varchar(45) DEFAULT NULL,
  `ESTADO` tinyint(4) DEFAULT NULL,
  `ID_SERVICIO` int(11) NOT NULL,
  `DESCRIPCION_REPARACION` varchar(45) DEFAULT NULL,
  `VALOR` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `detalle_orden_reparacion`
--

INSERT INTO `detalle_orden_reparacion` (`ID_DETALLE`, `ID_OREPARACION`, `MARCA`, `MODELO`, `DAÑO_REPORTADO`, `OBSERVACIONES`, `SERIE`, `ESTADO`, `ID_SERVICIO`, `DESCRIPCION_REPARACION`, `VALOR`) VALUES
(48, 1, 'SDF', 'LENOVO', 'sf', 'sdf', 'SDF', NULL, 12, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_reparacion_servicio`
--

CREATE TABLE `detalle_reparacion_servicio` (
  `ID_REPARACION_SERVICIO` int(11) NOT NULL,
  `ID_REPARACION` int(11) NOT NULL,
  `ID_SERVICIO` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `facturacion`
--

CREATE TABLE `facturacion` (
  `ID_FACTURACION` int(11) NOT NULL,
  `DETALLE` varchar(50) DEFAULT NULL,
  `COSTO_UNITARIO` double DEFAULT NULL,
  `IVA` double DEFAULT NULL,
  `COSTO_TOTAL` double DEFAULT NULL,
  `ID_OREPARACION` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marcas`
--

CREATE TABLE `marcas` (
  `id_mar` int(10) NOT NULL,
  `nom_mar` varchar(200) DEFAULT NULL,
  `des_mar` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `marcas`
--

INSERT INTO `marcas` (`id_mar`, `nom_mar`, `des_mar`) VALUES
(1, 'LENOVO', 'NUEVA'),
(2, 'LENOVO', 'NUEVA'),
(3, 'LENOVO', 'NUEVA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `menu`
--

CREATE TABLE `menu` (
  `id_menu` int(11) NOT NULL,
  `nombre_menu` varchar(45) DEFAULT NULL,
  `link` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `menu`
--

INSERT INTO `menu` (`id_menu`, `nombre_menu`, `link`) VALUES
(1, 'Agregar permisos', 'Permisos/Cpermisos/add'),
(2, 'Ver Permisos', 'Permisos/Cpermisos');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `orden_reparacion`
--

CREATE TABLE `orden_reparacion` (
  `ID_OREPARACION` int(11) NOT NULL,
  `FECHA_INGRESO` date DEFAULT NULL,
  `FECHA_SALIDA` date DEFAULT NULL,
  `ID_PERSONA` int(11) NOT NULL,
  `ID_TECNICO` int(11) NOT NULL,
  `ESTADO_ORDEN` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `orden_reparacion`
--

INSERT INTO `orden_reparacion` (`ID_OREPARACION`, `FECHA_INGRESO`, `FECHA_SALIDA`, `ID_PERSONA`, `ID_TECNICO`, `ESTADO_ORDEN`) VALUES
(1, '2022-01-20', '2022-01-20', 50, 49, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permiso`
--

CREATE TABLE `permiso` (
  `id_permiso` int(11) NOT NULL,
  `menu_id` int(11) DEFAULT NULL,
  `rol_id` int(11) DEFAULT NULL,
  `read` int(11) DEFAULT NULL,
  `insert` int(11) DEFAULT NULL,
  `update` int(11) DEFAULT NULL,
  `delete` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `permiso`
--

INSERT INTO `permiso` (`id_permiso`, `menu_id`, `rol_id`, `read`, `insert`, `update`, `delete`) VALUES
(1, 2, 1, 1, 1, 1, 1),
(2, 1, 1, 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

CREATE TABLE `persona` (
  `ID_PERSONA` int(11) NOT NULL,
  `CEDULA_PER` varchar(13) NOT NULL,
  `APELLIDOS_PER` varchar(50) NOT NULL,
  `NOMBRES_PER` varchar(50) NOT NULL,
  `CELULAR_PER` varchar(50) NOT NULL,
  `CORREO_PER` varchar(50) DEFAULT NULL,
  `DIRECCION_PER` varchar(50) DEFAULT NULL,
  `ESTADO_PER` varchar(45) DEFAULT NULL,
  `ID_ROL` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `persona`
--

INSERT INTO `persona` (`ID_PERSONA`, `CEDULA_PER`, `APELLIDOS_PER`, `NOMBRES_PER`, `CELULAR_PER`, `CORREO_PER`, `DIRECCION_PER`, `ESTADO_PER`, `ID_ROL`) VALUES
(1, '1105864621', 'GAONA', 'STEFANY', '0999999999', 'STEFDIAZ44@GMAIL.COM', 'TIERRAS COLORADAS', '1', 1),
(49, '1105853700', 'CONTENTO ORTEGA', 'RONNY', '967264403', 'happy.m.a.k@hotmail.com', 'SAN CAYETANO ALTO, CALLE PARÍS, LOJA', '1', 5),
(50, '1105864613', 'CONTENTO ORTEGA', 'FREDDY', '967264403', 'ronnyfer95@gmail.com', 'SAN CAYETANO ALTO, CALLE PARÍS, LOJA', '1', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reparacion`
--

CREATE TABLE `reparacion` (
  `ID_REPARACION` int(11) NOT NULL,
  `ACTIVIDAD_REALIZADA` varchar(50) DEFAULT NULL,
  `ID_PERSONA` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `ID_ROL` int(11) NOT NULL,
  `TIPO_ROL` varchar(30) NOT NULL,
  `ABREVIATURA_ROL` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`ID_ROL`, `TIPO_ROL`, `ABREVIATURA_ROL`) VALUES
(1, 'SUPER ADMINISTRADOS', 'SA'),
(2, 'ADMINISTRADOR', 'A'),
(3, 'CLIENTE', 'CLI'),
(4, 'SECRETARIA', 'S'),
(5, 'TECNICO', 'TEC');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicio`
--

CREATE TABLE `servicio` (
  `ID_SERVICIO` int(11) NOT NULL,
  `ESTADO_SER` tinyint(4) DEFAULT NULL,
  `COSTO` double DEFAULT NULL,
  `TIPO_SERVICIO` varchar(45) DEFAULT NULL,
  `DESCRIPCION` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `servicio`
--

INSERT INTO `servicio` (`ID_SERVICIO`, `ESTADO_SER`, `COSTO`, `TIPO_SERVICIO`, `DESCRIPCION`) VALUES
(1, 1, 15, 'SERVICIO UNO', 'MANTENIMIENTO PREVENTIVO'),
(10, 0, 40, 'SERVICIO DOS', 'CAMBIO DE DISCO'),
(11, 1, 5, 'SERVICIO TRES', 'INSTALACION DE PROGRAMAS'),
(12, 1, 70, 'SERVICIO CUATRO', 'CAMBIO DE PANTALLA'),
(13, 1, 50, 'SERVICIO CINCO', 'REPARACION DE BISAGRA '),
(14, 1, 30, 'CAMBIO DE PANTALLA', 'LOJA');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cuenta`
--
ALTER TABLE `cuenta`
  ADD PRIMARY KEY (`ID_CUENTA`),
  ADD KEY `fk_cuenta_persona1_idx` (`ID_PERSONA`);

--
-- Indices de la tabla `detalle_orden_reparacion`
--
ALTER TABLE `detalle_orden_reparacion`
  ADD PRIMARY KEY (`ID_DETALLE`),
  ADD KEY `fk_detalle_orden_reparacion_orden_reparacion1_idx` (`ID_OREPARACION`),
  ADD KEY `fk_detalle_orden_reparacion_servicio1_idx` (`ID_SERVICIO`);

--
-- Indices de la tabla `detalle_reparacion_servicio`
--
ALTER TABLE `detalle_reparacion_servicio`
  ADD PRIMARY KEY (`ID_REPARACION_SERVICIO`),
  ADD KEY `fk_detalle_reparacion_servicio_reparacion1_idx` (`ID_REPARACION`),
  ADD KEY `fk_detalle_reparacion_servicio_servicio1_idx` (`ID_SERVICIO`);

--
-- Indices de la tabla `facturacion`
--
ALTER TABLE `facturacion`
  ADD PRIMARY KEY (`ID_FACTURACION`),
  ADD KEY `fk_facturacion_orden_reparacion1_idx` (`ID_OREPARACION`);

--
-- Indices de la tabla `marcas`
--
ALTER TABLE `marcas`
  ADD PRIMARY KEY (`id_mar`);

--
-- Indices de la tabla `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id_menu`);

--
-- Indices de la tabla `orden_reparacion`
--
ALTER TABLE `orden_reparacion`
  ADD PRIMARY KEY (`ID_OREPARACION`),
  ADD KEY `fk_orden_reparacion_persona1_idx` (`ID_PERSONA`);

--
-- Indices de la tabla `permiso`
--
ALTER TABLE `permiso`
  ADD PRIMARY KEY (`id_permiso`),
  ADD KEY `fk_permiso_menu` (`menu_id`),
  ADD KEY `fk_permiso_rol` (`rol_id`);

--
-- Indices de la tabla `persona`
--
ALTER TABLE `persona`
  ADD PRIMARY KEY (`ID_PERSONA`),
  ADD KEY `fk_persona_rol_idx` (`ID_ROL`);

--
-- Indices de la tabla `reparacion`
--
ALTER TABLE `reparacion`
  ADD PRIMARY KEY (`ID_REPARACION`),
  ADD KEY `fk_reparacion_persona1_idx` (`ID_PERSONA`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`ID_ROL`);

--
-- Indices de la tabla `servicio`
--
ALTER TABLE `servicio`
  ADD PRIMARY KEY (`ID_SERVICIO`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cuenta`
--
ALTER TABLE `cuenta`
  MODIFY `ID_CUENTA` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de la tabla `detalle_orden_reparacion`
--
ALTER TABLE `detalle_orden_reparacion`
  MODIFY `ID_DETALLE` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT de la tabla `marcas`
--
ALTER TABLE `marcas`
  MODIFY `id_mar` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `menu`
--
ALTER TABLE `menu`
  MODIFY `id_menu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `permiso`
--
ALTER TABLE `permiso`
  MODIFY `id_permiso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `persona`
--
ALTER TABLE `persona`
  MODIFY `ID_PERSONA` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT de la tabla `servicio`
--
ALTER TABLE `servicio`
  MODIFY `ID_SERVICIO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cuenta`
--
ALTER TABLE `cuenta`
  ADD CONSTRAINT `fk_cuenta_persona1` FOREIGN KEY (`ID_PERSONA`) REFERENCES `persona` (`ID_PERSONA`);

--
-- Filtros para la tabla `detalle_orden_reparacion`
--
ALTER TABLE `detalle_orden_reparacion`
  ADD CONSTRAINT `fk_detalle_orden_reparacion_orden_reparacion1` FOREIGN KEY (`ID_OREPARACION`) REFERENCES `orden_reparacion` (`ID_OREPARACION`),
  ADD CONSTRAINT `fk_detalle_orden_reparacion_servicio1` FOREIGN KEY (`ID_SERVICIO`) REFERENCES `servicio` (`ID_SERVICIO`);

--
-- Filtros para la tabla `detalle_reparacion_servicio`
--
ALTER TABLE `detalle_reparacion_servicio`
  ADD CONSTRAINT `fk_detalle_reparacion_servicio_reparacion1` FOREIGN KEY (`ID_REPARACION`) REFERENCES `reparacion` (`ID_REPARACION`),
  ADD CONSTRAINT `fk_detalle_reparacion_servicio_servicio1` FOREIGN KEY (`ID_SERVICIO`) REFERENCES `servicio` (`ID_SERVICIO`);

--
-- Filtros para la tabla `facturacion`
--
ALTER TABLE `facturacion`
  ADD CONSTRAINT `fk_facturacion_orden_reparacion1` FOREIGN KEY (`ID_OREPARACION`) REFERENCES `orden_reparacion` (`ID_OREPARACION`);

--
-- Filtros para la tabla `orden_reparacion`
--
ALTER TABLE `orden_reparacion`
  ADD CONSTRAINT `fk_orden_reparacion_persona1` FOREIGN KEY (`ID_PERSONA`) REFERENCES `persona` (`ID_PERSONA`);

--
-- Filtros para la tabla `permiso`
--
ALTER TABLE `permiso`
  ADD CONSTRAINT `fk_permiso_menu` FOREIGN KEY (`menu_id`) REFERENCES `menu` (`id_menu`),
  ADD CONSTRAINT `fk_permiso_rol` FOREIGN KEY (`rol_id`) REFERENCES `rol` (`ID_ROL`);

--
-- Filtros para la tabla `persona`
--
ALTER TABLE `persona`
  ADD CONSTRAINT `fk_persona_rol` FOREIGN KEY (`ID_ROL`) REFERENCES `rol` (`ID_ROL`);

--
-- Filtros para la tabla `reparacion`
--
ALTER TABLE `reparacion`
  ADD CONSTRAINT `fk_reparacion_persona1` FOREIGN KEY (`ID_PERSONA`) REFERENCES `persona` (`ID_PERSONA`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
