-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 31-05-2024 a las 22:51:30
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `torniappdb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `citas`
--

create database TorniAppDb;
use TorniAppDb;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `citas`
--

CREATE TABLE `citas` (
  `fecha` timestamp NOT NULL DEFAULT current_timestamp(),
  `hora` time DEFAULT NULL,
  `servicioRequerido` varchar(45) NOT NULL,
  `id` int(11) NOT NULL,
  `estado` enum('ACEPTADA','RECHAZADA','PENDIENTE') NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `telefono` bigint(20) NOT NULL,
  `motivo` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `id` int(11) NOT NULL,
  `cedula` bigint(20) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `telefono` bigint(20) NOT NULL,
  `correo` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id`, `cedula`, `nombre`, `telefono`, `correo`) VALUES
(18, 100000000, 'Catalina', 3245852789, 'cata@gmail.com'),
(19, 1006343094, 'Herley Arias', 3173315635, 'herley2400@hotmail.com'),
(24, 1113699977, 'nathalia', 3173470955, 'Nathliaisa@hotmail.com'),
(25, 1114874858, 'joan', 3228594399, 'joan@aagmail.com'),
(26, 1006289206, 'Daniel Castillo Varela', 3152223954, 'daniel25@gmail.com'),
(27, 12345677, 'david', 3152612738, 'david@gmail.com'),
(28, 1212121, 'qqqqq', 9897978, 'fr@gmail.com'),
(29, 8888888, 'arrr arrrr', 7777777, 'gr@gmail.com'),
(30, 1113673251, 'John Alexander Castillo Varela', 3104649591, 'jalexander.cv7@gmail.com'),
(31, 114345201, 'John Alexander Castillo', 3198782342, 'jacv@gmail.com'),
(32, 1002349845, 'Carlos Castro Salazar', 3152223089, 'carlos@gmail.com'),
(33, 1006280692, 'Carlos Castro Salazar', 3152225439, 'carlossa@gmail.com'),
(34, 113673125, 'Rosa Isabel Rosero', 3104649195, 'rosaro@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compras`
--

CREATE TABLE `compras` (
  `id` int(11) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `costoTotal` int(11) NOT NULL,
  `usuarios_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detallecompra`
--

CREATE TABLE `detallecompra` (
  `id` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  `costoDetalle` int(11) NOT NULL,
  `productos_id` int(11) NOT NULL,
  `compras_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detallefactura`
--

CREATE TABLE `detallefactura` (
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `id` int(11) NOT NULL,
  `cantidad` int(4) NOT NULL,
  `costoDetalle` int(11) NOT NULL,
  `productos_id` int(11) DEFAULT NULL,
  `facturas_id` int(11) NOT NULL,
  `servicio` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `facturas`
--

CREATE TABLE `facturas` (
  `id` int(11) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `costoTotal` int(11) NOT NULL,
  `clientes_id` int(11) DEFAULT NULL,
  `pdfFactura` varchar(45) NOT NULL,
  `totalIva` int(11) NOT NULL,
  `usuarios_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inventarios`
--

CREATE TABLE `inventarios` (
  `id` int(11) NOT NULL,
  `stock` smallint(6) NOT NULL,
  `productos_id` int(11) NOT NULL,
  `estado` enum('DISPONIBLE','AGOTADO','POR AGOTARSE') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `codigo` varchar(45) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `precioCompra` mediumint(9) NOT NULL,
  `precioVenta` mediumint(9) NOT NULL,
  `tipoProducto` enum('ACCESORIO','REPUESTO','INSUMO') NOT NULL,
  `proveedores_id` int(11) NOT NULL,
  `iva` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


--
-- Estructura de tabla para la tabla `proveedores`
--

CREATE TABLE `proveedores` (
  `id` int(11) NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `telefono` bigint(20) NOT NULL,
  `correo` varchar(60) NOT NULL,
  `marcaDistribuida` varchar(45) NOT NULL,
  `activo` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `proveedores`
--

INSERT INTO `proveedores` (`id`, `nombre`, `telefono`, `correo`, `marcaDistribuida`, `activo`) VALUES
(4, 'daniel', 3152227832, 'daniel@gmail.com', 'honda', 0),
(5, 'danielk', 3182910234, 'danielk@gmail.com', 'toyota', 0),
(6, 'melo', 3123123123, 'km@gmail.com', 'samsung', 0),
(7, 'rosa', 3133133131, 'ro@gmail.com', 'ninguna', 0),
(8, 'miguelon', 3101214422, 'mi@gmail.com', 'nah', 0),
(9, 'no', 3102716121, 'na@gmail.com', 'no', 0),
(10, 'HERLEY ANDRES', 3106469591, 'herley@gmail.com', 'tvs', 0),
(11, 'david', 3152223954, 'david@gmail.com', 'DavidMotos', 1),
(12, 'CARLOS CASTRO SALAZAR', 3104649124, 'carlossa@gmail.com', 'CarlosSalazar', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `servicios`
--

CREATE TABLE `servicios` (
  `id` int(11) NOT NULL,
  `tipoServicio` varchar(300) NOT NULL,
  `clientes_id` int(11) DEFAULT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `placa` varchar(45) NOT NULL,
  `marca` varchar(45) NOT NULL,
  `modelo` varchar(45) NOT NULL,
  `observaciones` varchar(400) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `cedula` bigint(20) NOT NULL,
  `nombre` varchar(60) NOT NULL,
  `correo` varchar(80) NOT NULL,
  `nombreUsuario` varchar(16) NOT NULL,
  `contrasenia` varchar(300) NOT NULL,
  `rol` enum('GERENTE','ADMINISTRADOR','TECNICO') NOT NULL,
  `telefono` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `cedula`, `nombre`, `correo`, `nombreUsuario`, `contrasenia`, `rol`, `telefono`) VALUES
(2, 1006289206, 'Daniel', 'daniel.castillo.varela@correounivalle.edu.co', 'daniel25', '$2y$05$nDDJYf94ydH.wFOl65BzAuufwvjAXr5r3xYAntIRQSTu7t0hsV4fC', 'GERENTE', 3152223954),
(15, 1234567890, 'carlos', 'castro.carlos@correounivalle.edu.co', 'carlos25', '$2y$05$dlMmJhYzADGqLIr1jlKv7.rjlyeOJbfUmT4nxIaHxNYl/mpgFI/SW', 'ADMINISTRADOR', 3101234567),
(16, 1113673251, 'rosa', 'rosa@gmail.com', 'rosa25', '$2y$05$ff0MLW3IzPSYRKiu1CjMyu.lOeknqytPN5h0IKyzhLfnCvJWXDuG6', 'TECNICO', 3153334065),
(20, 1113673152, 'JOHN ALEXANDER CASTILLO', 'jacv@gmail.com', 'jacv25', '$2y$05$aTdVq0nQVfe77tLEnNRW1OnTIfMwJiSPD.ZOBCUXolberZigqfyn2', 'GERENTE', 3104642312);

--
-- Índices para tablas volcadas
--


--
-- Indices de la tabla `citas`
--
ALTER TABLE `citas`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `telefono_UNIQUE` (`telefono`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id`,`cedula`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`),
  ADD UNIQUE KEY `cedula_UNIQUE` (`cedula`),
  ADD UNIQUE KEY `telefono_UNIQUE` (`telefono`),
  ADD UNIQUE KEY `correo_UNIQUE` (`correo`);

--
-- Indices de la tabla `compras`
--
ALTER TABLE `compras`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_compras_usuarios1_idx` (`usuarios_id`);

--
-- Indices de la tabla `detallecompra`
--
ALTER TABLE `detallecompra`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_detalleCompra_productos1_idx` (`productos_id`),
  ADD KEY `fk_detalleCompra_compras1_idx` (`compras_id`);

--
-- Indices de la tabla `detallefactura`
--
ALTER TABLE `detallefactura`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_detalleFactura_productos1_idx` (`productos_id`),
  ADD KEY `fk_detalleFactura_facturas1_idx` (`facturas_id`);


--
-- Indices de la tabla `facturas`
--
ALTER TABLE `facturas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_facturas_clientes1_idx` (`clientes_id`),
  ADD KEY `fk_facturas_usuarios1_idx` (`usuarios_id`);

--
-- Indices de la tabla `inventarios`
--
ALTER TABLE `inventarios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_inventarios_productos1_idx` (`productos_id`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`,`codigo`),
  ADD UNIQUE KEY `id_UNIQUE` (`id`),
  ADD UNIQUE KEY `codigo_UNIQUE` (`codigo`),
  ADD KEY `fk_productos_proveedores_idx` (`proveedores_id`);

--
-- Indices de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `telefono_UNIQUE` (`telefono`),
  ADD UNIQUE KEY `correo_UNIQUE` (`correo`),
  ADD KEY `marcaDistribuida` (`marcaDistribuida`);


--
-- Indices de la tabla `servicios`
--
ALTER TABLE `servicios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_servicios_clientes1_idx` (`clientes_id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`,`cedula`),
  ADD UNIQUE KEY `correo_UNIQUE` (`correo`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `citas`
--
ALTER TABLE `citas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT de la tabla `compras`
--
ALTER TABLE `compras`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT de la tabla `detallecompra`
--
ALTER TABLE `detallecompra`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de la tabla `detallefactura`
--
ALTER TABLE `detallefactura`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;


--
-- AUTO_INCREMENT de la tabla `facturas`
--
ALTER TABLE `facturas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT de la tabla `inventarios`
--
ALTER TABLE `inventarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;


--
-- AUTO_INCREMENT de la tabla `servicios`
--
ALTER TABLE `servicios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `compras`
--
ALTER TABLE `compras`
  ADD CONSTRAINT `fk_compras_usuarios1` FOREIGN KEY (`usuarios_id`) REFERENCES `usuarios` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `detallecompra`
--
ALTER TABLE `detallecompra`
  ADD CONSTRAINT `fk_detalleCompra_compras1` FOREIGN KEY (`compras_id`) REFERENCES `compras` (`id`),
  ADD CONSTRAINT `fk_detalleCompra_productos1` FOREIGN KEY (`productos_id`) REFERENCES `productos` (`id`);

--
-- Filtros para la tabla `detallefactura`
--
ALTER TABLE `detallefactura`
  ADD CONSTRAINT `fk_detalleFactura_facturas1` FOREIGN KEY (`facturas_id`) REFERENCES `facturas` (`id`),
  ADD CONSTRAINT `fk_detalleFactura_productos1` FOREIGN KEY (`productos_id`) REFERENCES `productos` (`id`);

--
-- Filtros para la tabla `facturas`
--
ALTER TABLE `facturas`
  ADD CONSTRAINT `fk_facturas_clientes1` FOREIGN KEY (`clientes_id`) REFERENCES `clientes` (`id`),
  ADD CONSTRAINT `fk_facturas_usuarios1` FOREIGN KEY (`usuarios_id`) REFERENCES `usuarios` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `inventarios`
--
ALTER TABLE `inventarios`
  ADD CONSTRAINT `fk_inventarios_productos1` FOREIGN KEY (`productos_id`) REFERENCES `productos` (`id`);

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `fk_productos_proveedores` FOREIGN KEY (`proveedores_id`) REFERENCES `proveedores` (`id`);

--
-- Filtros para la tabla `servicios`
--
ALTER TABLE `servicios`
  ADD CONSTRAINT `fk_servicios_clientes1` FOREIGN KEY (`clientes_id`) REFERENCES `clientes` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
