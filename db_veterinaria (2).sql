-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-08-2021 a las 20:15:40
-- Versión del servidor: 10.4.18-MariaDB
-- Versión de PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_veterinaria`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_citas`
--

CREATE TABLE `tbl_citas` (
  `idCitas` int(11) NOT NULL,
  `idPaciente` int(11) NOT NULL,
  `idCliente` int(11) NOT NULL,
  `idTipoConsulta` int(11) NOT NULL,
  `Fecha_Hora` datetime NOT NULL,
  `Estado` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tbl_citas`
--

INSERT INTO `tbl_citas` (`idCitas`, `idPaciente`, `idCliente`, `idTipoConsulta`, `Fecha_Hora`, `Estado`) VALUES
(1, 1, 11, 1, '2021-07-21 22:10:00', 0),
(2, 2, 17, 2, '2021-07-22 15:10:48', 0),
(3, 3, 19, 3, '2021-07-21 22:13:00', 0),
(4, 4, 4, 4, '2021-07-30 15:13:09', 0),
(5, 5, 5, 2, '2021-07-21 22:15:50', 0),
(6, 6, 23, 1, '2021-10-13 15:17:03', 0),
(7, 7, 22, 3, '2021-08-25 15:17:03', 0),
(8, 8, 3, 2, '2021-07-21 22:18:00', 0),
(9, 9, 12, 3, '2021-07-09 15:18:27', 0),
(10, 10, 10, 2, '2021-08-10 15:20:47', 0),
(11, 11, 25, 2, '2021-09-15 15:20:47', 0),
(12, 12, 2, 4, '2021-09-07 15:22:04', 0),
(13, 13, 21, 1, '2021-07-21 22:22:00', 0),
(14, 14, 7, 3, '2021-07-21 22:25:00', 0),
(15, 15, 14, 4, '2021-07-15 11:25:38', 0),
(16, 16, 16, 1, '2021-07-21 22:26:00', 0),
(17, 17, 6, 2, '2021-07-21 22:26:00', 0),
(18, 18, 20, 4, '2021-10-23 15:28:43', 0),
(19, 19, 9, 2, '2021-07-13 06:28:43', 0),
(20, 20, 24, 3, '2021-11-04 15:31:18', 0),
(21, 21, 13, 4, '2021-10-26 01:31:18', 0),
(22, 22, 15, 2, '2021-07-22 09:32:26', 0),
(23, 23, 1, 3, '2021-10-31 10:32:26', 0),
(24, 24, 8, 4, '2021-07-21 22:33:00', 0),
(25, 25, 18, 1, '2021-11-17 15:33:35', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_cliente`
--

CREATE TABLE `tbl_cliente` (
  `idCliente` int(11) NOT NULL,
  `Nombre` varchar(30) NOT NULL,
  `Celular` varchar(10) NOT NULL,
  `Correo` varchar(75) NOT NULL,
  `Contraseña` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tbl_cliente`
--

INSERT INTO `tbl_cliente` (`idCliente`, `Nombre`, `Celular`, `Correo`, `Contraseña`) VALUES
(1, 'Simón', '3005515518', 'lozanosimon.023@gmail.com', '123'),
(2, 'Juanca', '314658211', 'juanca25@hotmail.com', '321'),
(3, 'Geny', '305515510', 'genyaquite@gmail.com', '1030'),
(4, 'Clemencia', '3000000000', 'clemeaq@gmail.com', '3021'),
(5, 'David', '3005515518', 'David25@hotmail.com', '2315'),
(6, 'Manuela', '3005511888', 'Manuelam@gmail.com', '222'),
(7, 'Lilian', '3000000001', 'lilian59@gmail.com', '999'),
(8, 'Valentin', '3146582448', 'Valentina29@hotmail.com', '29801'),
(9, 'Martha', '3018877955', 'Marthalo26@hotmail.com', 'mar26700'),
(10, 'Jaime', '3146582448', 'Jaime17@gmail.com', 'Jme30'),
(11, 'Camilo', '3005515519', 'camilor222@gmail.com', '229cam'),
(12, 'Isabela', '3005515514', 'isabelava24@hotmail.com', '2400bela'),
(13, 'Roberto', '3146595669', 'Roberto300@hotamil.com', '300ro'),
(14, 'Luis', '1111111111', 'Luisa30@gmail.com', '30zxc'),
(15, 'Rogelio', '3005515515', 'Roge269@gmail.com', '269RO'),
(16, 'Luna', '2222222222', 'Luna279@hotmail.com', '279NA'),
(17, 'Carolina', '4444444444', 'carolm20@gmail.com', 'carito28'),
(18, 'Yolanda', '8888888880', 'Yolanda69@gmail.com', 'yol698'),
(19, 'Celeste', '9999999999', 'celest936@gmail.com', '936CEL'),
(20, 'Marleny ', '555555550', 'Marle8996@gmail@gmail.com', '8996MAR'),
(21, 'Karla', '6666666612', 'Kar6516@gmail.com', '6516'),
(22, 'Fernando ', '3005515519', 'Fernando888@gmail.com', '888FER'),
(23, 'Emanuel', '3005515516', 'Emanu290@hotmail.com', '290E3M'),
(24, 'Mateo', '3005515517', 'Mattm@gmail.com', 'matt26'),
(25, 'Jesús', '3005515513', 'Jesus896@gmail.com', '896SUS');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_detalle_pedido`
--

CREATE TABLE `tbl_detalle_pedido` (
  `idDetallePed` int(11) NOT NULL,
  `idPedido` int(11) NOT NULL,
  `idProducto` int(11) NOT NULL,
  `Cantidad` int(30) NOT NULL,
  `Subtotal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tbl_detalle_pedido`
--

INSERT INTO `tbl_detalle_pedido` (`idDetallePed`, `idPedido`, `idProducto`, `Cantidad`, `Subtotal`) VALUES
(1, 1, 2, 30, 100),
(2, 2, 3, 1, 150),
(3, 17, 4, 2, 200),
(4, 18, 5, 3, 150),
(5, 15, 6, 2, 25),
(6, 23, 7, 1, 10),
(7, 21, 8, 8, 400),
(8, 25, 8, 5, 300);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_paciente`
--

CREATE TABLE `tbl_paciente` (
  `idPaciente` int(11) NOT NULL,
  `idCliente` int(11) NOT NULL,
  `NombrePaciente` varchar(10) NOT NULL,
  `Edad` int(11) NOT NULL,
  `Sexo` varchar(10) NOT NULL,
  `Estado` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tbl_paciente`
--

INSERT INTO `tbl_paciente` (`idPaciente`, `idCliente`, `NombrePaciente`, `Edad`, `Sexo`, `Estado`) VALUES
(1, 11, 'Paco', 5, 'Macho', NULL),
(2, 17, 'Romeo', 2, 'Macho', NULL),
(3, 19, 'Luna', 10, 'Hembra', NULL),
(4, 4, 'Loqui', 8, 'Masculino', NULL),
(5, 5, 'Mia', 5, 'Hembra ', NULL),
(6, 23, 'Zeus', 9, 'Macho', NULL),
(7, 22, 'Aquiles', 1, 'Macho', NULL),
(8, 3, 'Max', 11, 'Macho', NULL),
(9, 12, 'Coco', 2, 'Macho', NULL),
(10, 10, 'Beethoven', 8, 'Macho', NULL),
(11, 25, 'Laika', 7, 'Hembra ', NULL),
(12, 2, 'Hachiko', 4, 'Macho', NULL),
(13, 21, 'Kira', 3, 'Hembra ', NULL),
(14, 7, 'Toby', 5, 'Macho', NULL),
(15, 14, 'Rex', 12, 'Macho', NULL),
(16, 16, 'Pongo', 4, 'Macho', NULL),
(17, 6, 'Pluto', 3, 'Macho', NULL),
(18, 20, 'Lassie', 1, 'Hembra', NULL),
(19, 9, 'Toto', 8, 'Macho', NULL),
(20, 24, 'Prince', 7, 'Hembra', NULL),
(21, 13, 'Shakira', 3, 'Hembra ', NULL),
(22, 15, 'Korn', 9, 'Macho', NULL),
(23, 1, 'Pancho', 5, 'Macho', NULL),
(24, 8, 'Marley', 2, 'Hembra', NULL),
(25, 18, 'Milú', 10, 'Hembra ', NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_pedido`
--

CREATE TABLE `tbl_pedido` (
  `idPedido` int(11) NOT NULL,
  `idCliente` int(11) NOT NULL,
  `Direccion` varchar(20) NOT NULL,
  `Celular` varchar(10) NOT NULL,
  `Total` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tbl_pedido`
--

INSERT INTO `tbl_pedido` (`idPedido`, `idCliente`, `Direccion`, `Celular`, `Total`) VALUES
(1, 1, 'Calle 56a #51-48', '3005515518', 10),
(2, 2, 'Calle 86a #51-49', '3005511888', 30),
(3, 3, 'Calle 56a #51-30', '3000000000', 20),
(4, 4, 'Calle 46a #51-35', '1111111111', 50),
(5, 5, 'Calle 336a #51-40', '3005515519', 80),
(6, 6, 'Calle 86a #51-49', '2222222222', 40),
(7, 7, 'Calle 338a #51-60', '3000000002', 100),
(8, 8, 'Calle 46a #51-40', '1111111112', 90),
(9, 9, 'Calle 56a #5-4', '3005515518', 35),
(10, 10, 'Calle 76a #51-45', '8888888880', 31),
(11, 11, 'Calle 336a #51-11', '3018877955', 55),
(12, 12, 'Calle 78a #51-41', '8888888880', 88),
(13, 13, 'Calle 57a #51-42', '3018877955', 74),
(14, 14, 'Calle 78a #51-43', '2222222278', 24),
(15, 15, 'Calle 338a #51-44', '3000000055', 32),
(16, 16, 'Calle 86a #51-35', '1111111111', 92),
(17, 17, 'Calle 336a #51-409', '3018877955', 111),
(18, 18, 'Calle 78a #51-409', '2222222222', 555),
(19, 19, 'Calle 56a #51-40 ', '3000000008', 15),
(20, 20, 'Calle 88a #51-32', '1111111111', 777),
(21, 21, 'Calle 57a #51-40 ', '3005515518', 99),
(22, 22, 'Calle 78a #51-40 ', '8888888880', 66),
(23, 23, 'Calle 57a #51-45', '3000000222', 222),
(24, 24, 'Calle 86a #51-80', '3005511888', 29),
(25, 25, 'Calle 57a #51-40 ', '3000000000', 522);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_productos`
--

CREATE TABLE `tbl_productos` (
  `idProducto` int(11) NOT NULL,
  `idTipoProducto` int(11) NOT NULL,
  `Precio` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tbl_productos`
--

INSERT INTO `tbl_productos` (`idProducto`, `idTipoProducto`, `Precio`) VALUES
(2, 1, 200),
(3, 2, 150),
(4, 3, 100),
(5, 4, 30),
(6, 5, 50),
(7, 6, 10),
(8, 7, 78);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_tipo_consulta`
--

CREATE TABLE `tbl_tipo_consulta` (
  `idTipoConsulta` int(11) NOT NULL,
  `Tipo` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tbl_tipo_consulta`
--

INSERT INTO `tbl_tipo_consulta` (`idTipoConsulta`, `Tipo`) VALUES
(1, 'Ecografía'),
(2, 'Cirugía'),
(3, 'Profilaxis'),
(4, 'Vacunación');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_tipo_producto`
--

CREATE TABLE `tbl_tipo_producto` (
  `idTipoProducto` int(11) NOT NULL,
  `Tipo` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tbl_tipo_producto`
--

INSERT INTO `tbl_tipo_producto` (`idTipoProducto`, `Tipo`) VALUES
(1, 'Cama'),
(2, 'Guacal Burbuja'),
(3, 'Guacal Espaldero'),
(4, 'Correas '),
(5, 'Correas Retractiles '),
(6, 'Bozales '),
(7, 'Cuido para perro'),
(8, 'Cuido para gato ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_usuarios`
--

CREATE TABLE `tbl_usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `apellido` varchar(30) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `edad` int(11) NOT NULL,
  `celular` varchar(10) NOT NULL,
  `Contraseña` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tbl_usuarios`
--

INSERT INTO `tbl_usuarios` (`id`, `nombre`, `apellido`, `correo`, `edad`, `celular`, `Contraseña`) VALUES
(1, 'Saimon', 'Aquite', 'lozanosimon.023@gmail.com', 25, '3005515518', '1238'),
(2, 'César ', 'Agudelo', 'Ces29agu@hotmail.com', 29, '3000000000', '09874'),
(3, 'Abigail', 'Koch', 'Abigkoch55@gmail.com', 59, '3146582400', '88888');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbl_citas`
--
ALTER TABLE `tbl_citas`
  ADD PRIMARY KEY (`idCitas`),
  ADD KEY `Fk_cliente_citas` (`idCliente`),
  ADD KEY `Fk_citas_paciente` (`idPaciente`),
  ADD KEY `FK_citas_tipoConsulta` (`idTipoConsulta`);

--
-- Indices de la tabla `tbl_cliente`
--
ALTER TABLE `tbl_cliente`
  ADD PRIMARY KEY (`idCliente`);

--
-- Indices de la tabla `tbl_detalle_pedido`
--
ALTER TABLE `tbl_detalle_pedido`
  ADD PRIMARY KEY (`idDetallePed`),
  ADD KEY `Fk_detalle_pedido` (`idPedido`),
  ADD KEY `Fk_detalle_productos` (`idProducto`);

--
-- Indices de la tabla `tbl_paciente`
--
ALTER TABLE `tbl_paciente`
  ADD PRIMARY KEY (`idPaciente`),
  ADD KEY `FK_cliente_paciente` (`idCliente`);

--
-- Indices de la tabla `tbl_pedido`
--
ALTER TABLE `tbl_pedido`
  ADD PRIMARY KEY (`idPedido`),
  ADD KEY `FK_cliente_pedido` (`idCliente`);

--
-- Indices de la tabla `tbl_productos`
--
ALTER TABLE `tbl_productos`
  ADD PRIMARY KEY (`idProducto`),
  ADD KEY `FK_Productos_TipoProducto` (`idTipoProducto`);

--
-- Indices de la tabla `tbl_tipo_consulta`
--
ALTER TABLE `tbl_tipo_consulta`
  ADD PRIMARY KEY (`idTipoConsulta`);

--
-- Indices de la tabla `tbl_tipo_producto`
--
ALTER TABLE `tbl_tipo_producto`
  ADD PRIMARY KEY (`idTipoProducto`);

--
-- Indices de la tabla `tbl_usuarios`
--
ALTER TABLE `tbl_usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbl_citas`
--
ALTER TABLE `tbl_citas`
  MODIFY `idCitas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT de la tabla `tbl_cliente`
--
ALTER TABLE `tbl_cliente`
  MODIFY `idCliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de la tabla `tbl_detalle_pedido`
--
ALTER TABLE `tbl_detalle_pedido`
  MODIFY `idDetallePed` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `tbl_paciente`
--
ALTER TABLE `tbl_paciente`
  MODIFY `idPaciente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de la tabla `tbl_pedido`
--
ALTER TABLE `tbl_pedido`
  MODIFY `idPedido` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT de la tabla `tbl_productos`
--
ALTER TABLE `tbl_productos`
  MODIFY `idProducto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `tbl_tipo_consulta`
--
ALTER TABLE `tbl_tipo_consulta`
  MODIFY `idTipoConsulta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `tbl_tipo_producto`
--
ALTER TABLE `tbl_tipo_producto`
  MODIFY `idTipoProducto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `tbl_usuarios`
--
ALTER TABLE `tbl_usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tbl_citas`
--
ALTER TABLE `tbl_citas`
  ADD CONSTRAINT `FK_citas_tipoConsulta` FOREIGN KEY (`idTipoConsulta`) REFERENCES `tbl_tipo_consulta` (`idTipoConsulta`),
  ADD CONSTRAINT `Fk_citas_paciente` FOREIGN KEY (`idPaciente`) REFERENCES `tbl_paciente` (`idPaciente`),
  ADD CONSTRAINT `Fk_cliente_citas` FOREIGN KEY (`idCliente`) REFERENCES `tbl_cliente` (`idCliente`);

--
-- Filtros para la tabla `tbl_detalle_pedido`
--
ALTER TABLE `tbl_detalle_pedido`
  ADD CONSTRAINT `Fk_detalle_pedido` FOREIGN KEY (`idPedido`) REFERENCES `tbl_pedido` (`idPedido`),
  ADD CONSTRAINT `Fk_detalle_productos` FOREIGN KEY (`idProducto`) REFERENCES `tbl_productos` (`idProducto`);

--
-- Filtros para la tabla `tbl_paciente`
--
ALTER TABLE `tbl_paciente`
  ADD CONSTRAINT `FK_cliente_paciente` FOREIGN KEY (`idCliente`) REFERENCES `tbl_cliente` (`idCliente`);

--
-- Filtros para la tabla `tbl_pedido`
--
ALTER TABLE `tbl_pedido`
  ADD CONSTRAINT `FK_cliente_pedido` FOREIGN KEY (`idCliente`) REFERENCES `tbl_cliente` (`idCliente`);

--
-- Filtros para la tabla `tbl_productos`
--
ALTER TABLE `tbl_productos`
  ADD CONSTRAINT `FK_Productos_TipoProducto` FOREIGN KEY (`idTipoProducto`) REFERENCES `tbl_tipo_producto` (`idTipoProducto`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
