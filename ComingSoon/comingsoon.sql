-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-08-2021 a las 20:49:46
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
-- Base de datos: `comingsoon`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administradores`
--

CREATE TABLE `administradores` (
  `id_Administrador` int(11) NOT NULL,
  `Usuario` varchar(60) NOT NULL,
  `Contrasena` varchar(60) NOT NULL,
  `Nombre` varchar(60) NOT NULL,
  `Telefono` varchar(10) NOT NULL,
  `Correo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `administradores`
--

INSERT INTO `administradores` (`id_Administrador`, `Usuario`, `Contrasena`, `Nombre`, `Telefono`, `Correo`) VALUES
(1, 'Julio Ramirez', '*4A3947492C2CE6D46F9B2249DEF5ECB216EF2E72', 'Julio Ramirez', '3045724568', 'Julioramirezsi@gmail.com'),
(2, 'Katerine Sosa', '*BA87C44CDD0110AC4323110C31B9E8C55E5CB95A', 'Katerine Sosa', '3057102030', 'Katerinpsosa@hotmail.com'),
(3, 'Ramiro Ortiz', '*41E786541A61FC300264430C67105734E7630F02', 'Ramiro Ortiz', '3018406070', 'Ramiituyo@outlook.es'),
(4, 'Zapata ', '*BAF8145CA31C6598E673B015CFE8231EE0AE0B61', 'Carlos Zapata', '3024084565', 'Zptazpatacarlos23@gmail.com'),
(5, 'Julian Barrera', '*F97C2B08E5289C2318938F5E098AB3DE202E8C90', 'Julian Barrera', '3017213090', 'Julianbarrerita12@gmail.com'),
(6, 'Catalina Suaza', '*F54A0BB4D1C125ED9A9333890EF18C03E8DA9521', 'Catalina Suaza', '3078013243', 'Catica29@hotmail.com'),
(7, 'Veronica Giraldo', '*9803CD28C5491958B7E20F126EA6CAEFF86BDB10', 'Veronica Giraldo', '3013194449', 'Veritogiraldo15@gmail.com'),
(8, 'Diana Osorio', '*876F2E3E96E8AF3037F814D2D3438AF4FC505B9A', 'Diana Osorio', '3094670908', 'Dianita69@gmail.com'),
(9, 'Juana Rua', '*BE4B4B831673A070163F229BE89FB24C43064D87', '*69149D46DD6E32876345E8F9C769EAAC4BD4727E', '3092875131', 'Junitayramiro23@gmail.com'),
(10, 'Roberto Gomez', '*795AAFA2996F79440D9D0D93434D6DDA85E75FC9', 'Roberto Gomez', '3408953245', 'Robertoelmejor@gmail.com'),
(11, 'Candas Florez', '*2F815CC03079779312CC39A528903017EEFCBA20', 'Candas Florez', '5679873456', 'Candasflorluz@gmail.com'),
(12, 'Estefania Lopez', '*CFFBF9E19D115F430E23AD38CD9A2AD41D10843D', 'Estefania Lopez', '3010985674', 'Estefanylopez45@hotmail.com'),
(13, 'Sara Nariño', '*E8F727BE8B57F91F63F8D964CC60E1A7EC95E52E', 'Sara Nariño', '3045678932', 'sarita345@outlook.com'),
(14, 'Simon Jaramillo', '*2A7903E6DBAE7E0DA8633F5025D4AA00655C2D90', 'Simon Jaramillo', '3047891248', 'Simon2345@gmail.com'),
(15, 'Juliana Zapata', '*BEC17E8C30A8C5F6D76A54334385DE7A8701318E', 'Juliana Zapata', '3017456709', 'Juliprincesa@gmail.com'),
(16, 'Valentina Aquite', '*0BD642CC5A50C58731FE9F189623E69A3DEBB68D', 'Valentina Aquite', '3045367003', 'Valen3409@hotmail.es'),
(17, 'Karine Toro', '*BFB8B65716918770B36C0806907CAADAB8DC245C', 'Karine Toro', '3012458403', 'Torokarine20@outlook.es'),
(18, 'Jeronimo Juarez', '*972C9255667773B8A6FC9BF91B8134DF3319DED4', 'Jeronimo Juarez', '3045679010', 'Juarezjeronimo@gmail.com'),
(19, 'Angie Polo', '*64AA730CE9E96BE642EAA304B450926B49337A31', 'Angie Polo', '3045789432', 'Poloangie45@hotmail.com.es'),
(20, 'Coral Yepez', '*B848F1A76887E7D46F8B565AE2EB273561E1B765', 'Coral Yepez', '3015692732', 'Coralyepezsuaza@gmail..com'),
(21, 'Valery Casas', '*6D25A3728D184C861BE12B282269A958F6DFDD5E', 'Valery Casas', '3016543212', 'Vcasas12134@outlook.es.co'),
(22, 'Valeria Correa', '*9D6542C579447C682936B239B146E35B71BCA94E', 'Valeria Correa', '3015679032', 'Valercorrea09@hotmail.com.es'),
(23, 'Paulina Franco', '*A6419FEDAACD5C66F6F892AA7077E22EEFB911A3', 'Paulina Franco', '3045679812', 'Paulinaf56@gmail.com'),
(24, 'Laura Corral', '*731DCC4F94F92D01D8F6EE12EF83E6051F84A9E4', 'Laura Corral', '3012346795', 'Lauracorralf@outlook.es.co'),
(25, 'Mariana Quintero', '*96EFB15C89687AE389B868B914BC908A72B0969F', 'Mariana Quintero', '3045672356', 'Mariquintero127@gmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `idCliente` int(11) NOT NULL,
  `Usuario` varchar(60) NOT NULL,
  `Contrasena` varchar(50) NOT NULL,
  `Nombre` varchar(60) NOT NULL,
  `Telefono` int(10) NOT NULL,
  `Direccion` varchar(50) NOT NULL,
  `Cuidad` varchar(60) NOT NULL,
  `Barrio` varchar(60) NOT NULL,
  `Correo` varchar(50) NOT NULL,
  `Edad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`idCliente`, `Usuario`, `Contrasena`, `Nombre`, `Telefono`, `Direccion`, `Cuidad`, `Barrio`, `Correo`, `Edad`) VALUES
(1, 'Julio Ramirez', '*4A3947492C2CE6D46F9B2249DEF5ECB216EF2E72', 'Julio Ramirez', 301456723, 'Cr35cl56-34', 'Medellin', 'Paris', 'Julioramirezsi@gmail.com', 23),
(2, 'Katerine Sosa', '*BA87C44CDD0110AC4323110C31B9E8C55E5CB95A', 'Katerine Sosa', 214234567, 'Cr23Cl90-89', 'Barranquilla', 'Caran', 'Katerinpsosa@hotmail.com', 18),
(3, 'Ramiro Ortiz', '*41E786541A61FC300264430C67105734E7630F02', 'Ramiro Ortiz', 214789567, 'Cr23Cl78-89', 'Cali', 'Manchester', 'Ramiituyo@outlook.es', 17),
(4, 'Zapata ', '*BAF8145CA31C6598E673B015CFE8231EE0AE0B61', 'Carlos Zapata', 301840607, 'Cr34Cl56-65', 'Cucuta', 'Molino', 'Zptazpatacarlos23@gmail.com', 34),
(5, 'Julian Barrera', '*F97C2B08E5289C2318938F5E098AB3DE202E8C90', 'Julian Barrera', 301840607, 'Cr45Cl12-60', 'Cartagena', 'Caraz', 'Julianbarrerita12@gmail.com', 24),
(6, 'Valentina Aquite', '*0BD642CC5A50C58731FE9F189623E69A3DEBB68D', 'Valentina Aquite', 307801324, 'Cr56Cl90-67', 'Santa Marta', 'fara', 'Valen3409@hotmail.es', 19),
(7, 'Valeria Correa', '*9D6542C579447C682936B239B146E35B71BCA94E', 'Valeria Correa', 301840607, 'Cr56Cl90-69', 'Riohacha', 'Fatima', 'Valercorrea09@hotmail.com.es', 26),
(8, 'Valery Casas', '*08DF140EE873F3244FA934E8D09136A1E25FCA1B', 'Valery Casas', 302408456, 'Cr34Cl56-66', 'Barranquilla', 'Obrero', 'Vcasas12134@outlook.es.co', 20),
(9, 'Catalina Suaza', '*F54A0BB4D1C125ED9A9333890EF18C03E8DA9521', 'Catalina Suaza', 304572456, 'Cr45Cl12-30', 'Cucuta', 'Molino', 'Catica29@hotmail.com', 35),
(10, 'Candas Florez', '*A82C7CBB7943C3F2D97CAF4AE50075F14E165C63', 'Candas Florez', 307801324, 'Cr35Cl98-12', 'Cartagena', 'Pajarito', 'Candasflorluz@gmail.com', 26),
(11, 'Juliana Zapata', '*2A7903E6DBAE7E0DA8633F5025D4AA00655C2D90', 'Juliana Zapata', 302408456, 'Cr56Cl90-69', 'Santa Marta', 'Lorez', 'Juliprincesa@gmail.com', 16),
(12, 'Juana Rua', '*BE4B4B831673A070163F229BE89FB24C43064D87', 'Juana Rua', 301840607, 'Cr45Cl12-60', 'Cali', 'fara', 'Junitayramiro23@gmail.com', 45),
(13, 'Jeronimo Juarez', '*972C9255667773B8A6FC9BF91B8134DF3319DED4', 'Jeronimo Juarez', 302408456, 'Cr34Cl56-65', 'Medellin', 'Manchester', 'Juarezjeronimo@gmail.com', 36),
(14, 'Sara Nariño', '*BEC17E8C30A8C5F6D76A54334385DE7A8701318E', 'Sara Nariño', 301721309, 'Cr56Cl90-69', 'Cucuta', 'juarez', 'sarita345@outlook.com', 17),
(15, 'Simon Jaramillo', '*BEC17E8C30A8C5F6D76A54334385DE7A8701318E', 'Simon Jaramillo', 304567235, 'Cr35Cl98-12', 'Barranquilla', 'Pajarito', 'Simon2345@gmail.com', 18),
(16, 'Veronica Giraldo', '*61A52D3E9F5B843329B8ED59FF95BF65D8822922', 'Veronica Giraldo', 304572456, 'Cr23Cl90-89', 'Santa Marta', 'juarez', 'Veritogiraldo15@gmail.com', 17),
(17, 'Juana Rua', '*2A7903E6DBAE7E0DA8633F5025D4AA00655C2D90', 'Juana Rua', 302408456, 'Cr23Cl78-89', 'Cucuta', 'fara', 'Junitayramiro23@gmail.com', 26),
(18, 'Roberto Gomez', '*795AAFA2996F79440D9D0D93434D6DDA85E75FC9', 'Roberto Gomez', 302408456, 'Cr35Cl98-12', 'Cartagena', 'juarez', 'Robertoelmejor@gmail.com', 40),
(19, 'Karine Toro', '*22854DFF583E579212E8F68C0315A2B29CC1AABA', 'Karine Toro', 305710203, 'Cr45Cl12-60', 'Cali', 'Molino', 'Katerinpsosa@hotmail.com', 19),
(20, 'Estefania Lopez', '*6252E54A1DB112E2731714868B1A81424134EF43', 'Estefania Lopez', 340895324, 'Cr23Cl90-89', 'Riohacha', 'Betulia', 'Estefanylopez45@hotmail.com', 23),
(21, 'Laura Corral', '*731DCC4F94F92D01D8F6EE12EF83E6051F84A9E4', 'Laura Corral', 305710203, 'Cr45Cl12-30', 'Santa Marta', 'Paris', 'Lauracorralf@outlook.es.co', 18),
(22, 'Angie Polo', '*64AA730CE9E96BE642EAA304B450926B49337A31', 'Angie Polo', 307801324, 'Cr23Cl78-89', 'Medellin', 'Manchester', 'Aguie67@hotmail.com', 27),
(23, 'Ana Castañeda', '*5F475FDFDE97E9D4370C076B0251259B805308D4', 'Ana Castañeda', 302408456, 'Cr34Cl56-65', 'Cali', 'juarez', 'anafcata@gmail.com', 18),
(24, 'Nicolas Moro', '*68D451E8D3494A1E3E9D2F86A3127FC5F034DA57', 'Nicolas Moro', 304572456, 'Cr35Cl98-12', 'Cucuta', 'Manchester', 'MoroNicolasMoro@utlook.es', 25),
(25, 'Yuliana Hernandez', '*5538DED19D18B26494722E3EB8AB18D5C6422ACC', 'Yuliana Hernandez', 380789658, 'Cr45Cl12-60', 'Medellin', 'Pajarito', 'YulianaHernandez12@hotmail.com', 17),
(26, 'fty', 'fghj', 'fghj', 345758, 'xfghdf', 'dfghdfhg', 'dfghdf', 'dfghdf', 45),
(27, 'juli', 'xfg', 'dfghd', 54674567, 'fghdfgh', 'dfghdf', 'ghdfghdfgh', 'dfghdf', 45),
(28, '', '', '', 0, '', '', '', '', 0),
(29, '', '', '', 0, '', '', '', '', 0),
(30, 'jss', '283994', 'skskks', 748599, 'cr34l954', 'cali', 'caku', 'prnce', 12),
(31, 'jss', '283994', 'skskks', 748599, 'cr34l954', 'cali', 'caku', 'prnce', 12),
(32, 'jss', '283994', 'skskks', 748599, 'cr34l954', 'cali', 'caku', 'prnce', 12),
(33, 'jss', '283994', 'skskks', 748599, 'cr34l954', 'cali', 'caku', 'prnce', 12),
(34, 'jss', '283994', 'skskks', 748599, 'cr34l954', 'cali', 'caku', 'prnce', 12),
(35, 'jdldldldk', '173838', 'hdjjfmf', 1762748, 'cr1432', 'cLI', 'AHS', 'AJIDNDKCN ', 12),
(36, 'IOUSJJS', '8999', 'YKHFGJ', 173339, '163773XVR', 'CLEIIOS', 'JDJKD', '<JSKODKF´+CV', 12),
(37, 'IOUSJJS', '8999', 'YKHFGJ', 173339, '163773XVR', 'CLEIIOS', 'JDJKD', '<JSKODKF´+CV', 12),
(38, 'IOUSJJS', '8999', 'YKHFGJ', 173339, '163773XVR', 'CLEIIOS', 'JDJKD', '<JSKODKF´+CV', 12),
(39, 'HDJDKI', '37383', 'HFIMDSKD', 4848949, 'JDJJE738', 'JFKF', 'HDJD', 'JJSJSKIS@JZKM', 13),
(40, 'HDJDKI', '37383', 'HFIMDSKD', 4848949, 'JDJJE738', 'JFKF', 'HDJD', 'JJSJSKIS@JZKM', 13),
(41, 'LVLI', 'LVBLKB', 'LKJBLKJ', 87987, 'LKJB', 'LKJB', 'LKJB', 'LKJB', 0),
(42, 'HJKX', 'SMSS', 'SSJS', 1233, 'KAKAK', 'MAJA', '<H<N<K<', 'ISIS', 12),
(43, '', '', '', 0, '', '', '', '', 0),
(44, '', '', '', 0, '', '', '', '', 0),
(45, '', '', '', 0, '', '', '', '', 0),
(46, '', '', '', 0, '', '', '', '', 0),
(47, 'jdjdkd', '123', 'sjks', 133, 'jaksk', 'shdkd', 'ajajs', 'kslkdkfc', 12);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detallepedido`
--

CREATE TABLE `detallepedido` (
  `idDetallepedido` int(11) NOT NULL,
  `idPedido` int(11) NOT NULL,
  `idProducto` int(11) NOT NULL,
  `Cantidad` int(11) NOT NULL,
  `Subtotal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `detallepedido`
--

INSERT INTO `detallepedido` (`idDetallepedido`, `idPedido`, `idProducto`, `Cantidad`, `Subtotal`) VALUES
(1, 2, 6, 12, 45678),
(2, 3, 17, 18, 3458),
(3, 4, 11, 22, 5800),
(4, 5, 9, 10, 13456),
(5, 6, 6, 10, 12345),
(6, 7, 6, 5, 45678),
(7, 8, 16, 4, 13456),
(8, 9, 11, 13, 50908),
(9, 12, 18, 7, 12345),
(10, 13, 14, 8, 45698),
(11, 14, 8, 14, 56789),
(12, 16, 19, 13, 34562),
(13, 15, 18, 17, 64578),
(14, 19, 24, 4, 17890),
(15, 17, 22, 3, 23456),
(16, 18, 15, 5, 15678),
(17, 12, 23, 17, 87654),
(18, 19, 21, 20, 56432),
(19, 20, 1, 19, 56456),
(20, 24, 19, 6, 45678),
(21, 16, 17, 16, 90876),
(22, 21, 5, 17, 90700),
(23, 23, 20, 14, 67800),
(24, 26, 25, 2, 18600),
(25, 21, 16, 22, 67800);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `domicilios`
--

CREATE TABLE `domicilios` (
  `idDomicilio` int(11) NOT NULL,
  `Telefono` varchar(10) NOT NULL,
  `Direccion` varchar(100) NOT NULL,
  `Cuidad` varchar(60) NOT NULL,
  `Barrio` varchar(60) NOT NULL,
  `Edad` int(11) NOT NULL,
  `Nombre_R` varchar(60) NOT NULL,
  `idPedido` int(11) NOT NULL,
  `Nombre_D` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `domicilios`
--

INSERT INTO `domicilios` (`idDomicilio`, `Telefono`, `Direccion`, `Cuidad`, `Barrio`, `Edad`, `Nombre_R`, `idPedido`, `Nombre_D`) VALUES
(4, '3057102030', 'cr56-89', 'Pereira', 'Molino', 20, 'Roberto Salas', 6, 'Carlos Mira'),
(5, '3017213090', 'cr34-89', 'Pereira', 'fara', 19, 'Sara Rodriguez', 4, 'Carlos Mira'),
(6, '3024084565', 'cr34cl7-78', 'Medellin', 'Paris', 18, 'Karen Gonzales', 13, 'Rosa Martinez'),
(7, '3017213090', 'cr56cl90-78', 'Santa Marta', 'juarez', 30, 'Laura Paternina', 13, 'Santiago Suaza'),
(8, '3078013243', 'cr45cl90-87', 'Villavicencio ', 'Pajarito', 45, 'Vero Luna', 18, 'Sara Martinez'),
(9, '3017213090', 'cr45cl89-09', 'Santa Marta', 'Paris', 26, 'Pablo Santana', 18, 'Santiago Suaza'),
(10, '3045724568', 'cr45cl90-67', 'Barranquilla', 'fara', 24, 'Sebastian Orozco', 26, 'Santiago Suaza'),
(11, '3017213090', 'cr34cl12-90', 'Cali', 'Molino', 23, 'Carolina Sosa', 10, 'Rosa Martinez'),
(12, '3145673409', 'cr56cl0968', 'Cartagena', 'Pajarito', 18, 'Santana Rodriguez', 16, 'Carlos Mira'),
(13, '3024084565', 'cr45cl98-67', 'Pereira', 'Manchester', 23, 'Sonia Palo', 7, 'Sara Martinez'),
(14, '3137102039', 'cr56cl67-90', 'Cucuta', 'fara', 27, 'Fatima Rocha', 18, 'Carlos Mira'),
(15, '3078013243', 'cr45cl12-67', 'Barranquilla', 'Paris', 24, 'Roscana Iluna', 12, 'Santiago Suaza'),
(16, '3057102030', 'cr45cl16-09', 'Cartagena', 'Polonia', 22, 'Donnelly Suiza', 9, 'Rosa Martinez'),
(17, '3145673456', 'cr45cl09', 'Medellin', 'Molino', 25, 'Uriel Masias', 24, 'Sara Martinez'),
(18, '3018406070', 'cr45cl90-87', 'Riohacha', 'Paris', 26, 'Valery Jarava', 22, 'Carlos Mira'),
(19, '3018406070', 'cr56cl32-10', 'Cucuta', 'Pajarito', 23, 'Juan Robert', 15, 'Santiago Suaza'),
(20, '3024084565', 'cr56cl09-09', 'Barranquilla', 'fara', 24, 'Sara', 9, 'Rosa Martinez'),
(21, '3084568943', 'cr56cl09-09', 'Santa Marta', 'juarez', 16, 'Sofia', 5, 'Rosa Martinez'),
(22, '3024084565', 'cr10cl90-12', 'Cucuta', 'Manchester', 27, 'Paulina', 3, 'Sara Martinez'),
(23, '2142345678', 'cr45cl09-90', 'Medellin', 'juarez', 21, 'Sonia', 23, 'Rosa Martinez'),
(24, '3106101260', 'cr34cl09-90', 'Cartagena', 'Fatima', 31, 'Norman', 21, 'Santiago Suaza'),
(25, '3129875643', 'cr45cl01-45', 'Cali', 'Pajarito', 32, 'Estefania', 15, 'Sara Martinez'),
(26, '3137102039', 'cr45cl90-34', 'Medellin', 'Manchester', 23, 'Catalina', 11, 'Carlos Mira'),
(27, '3007680965', 'cr45cl98-09', 'Barranquilla', 'Molino', 45, 'Mariana', 10, 'Rosa Martinez'),
(28, '3018406070', 'cr45cl89-34', 'Cucut', 'Pajarito', 40, 'Valeria', 8, 'Santiago Suaza');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidos`
--

CREATE TABLE `pedidos` (
  `idPedido` int(11) NOT NULL,
  `idCliente` int(11) NOT NULL,
  `Fecha` date NOT NULL,
  `Total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `pedidos`
--

INSERT INTO `pedidos` (`idPedido`, `idCliente`, `Fecha`, `Total`) VALUES
(2, 23, '2021-07-07', 34000),
(3, 1, '2021-07-01', 24000),
(4, 19, '2021-07-31', 50000),
(5, 18, '2021-07-30', 104500),
(6, 17, '2021-07-29', 108300),
(7, 16, '2021-07-28', 110600),
(8, 15, '2021-07-27', 97200),
(9, 14, '2021-07-26', 1400780),
(10, 13, '2021-07-25', 80900),
(11, 12, '2021-07-24', 20000),
(12, 11, '2021-07-23', 12000),
(13, 10, '2021-07-22', 17800),
(14, 9, '2021-07-22', 10000),
(15, 8, '2021-07-20', 56000),
(16, 7, '2021-07-15', 80976),
(17, 6, '2021-07-18', 789000),
(18, 5, '2021-07-07', 45700),
(19, 4, '2021-07-04', 678900),
(20, 3, '2021-07-11', 67690),
(21, 2, '2021-07-17', 120500),
(22, 25, '2021-07-13', 90500),
(23, 24, '2021-07-13', 76543),
(24, 22, '2021-07-06', 36790),
(25, 21, '2021-07-08', 69654),
(26, 21, '2021-07-20', 89000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `idProducto` int(11) NOT NULL,
  `idProveedor` int(11) NOT NULL,
  `Nombre` varchar(60) NOT NULL,
  `Cantidad_Volumen` int(11) NOT NULL,
  `Precio_Unitario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`idProducto`, `idProveedor`, `Nombre`, `Cantidad_Volumen`, `Precio_Unitario`) VALUES
(1, 25, 'Ron', 36, 128900),
(2, 20, 'Tequila', 60, 1200567),
(3, 3, 'Whisky', 40, 2300600),
(4, 24, 'Vodka', 40, 367800),
(5, 13, 'Singani', 40, 1200300),
(6, 21, 'Ginebra', 10, 100890),
(7, 20, 'Coñac', 30, 678000),
(8, 3, 'Pisco', 20, 900000),
(9, 19, 'Cerveza', 30, 100000),
(10, 24, 'Vino blanco', 7, 120000),
(11, 22, 'Brandy', 40, 300500),
(12, 23, 'Vino tinto', 10, 700000),
(14, 25, 'Ginebra rosa', 5, 90800),
(15, 24, 'Ron negro', 8, 80000),
(16, 21, 'Absenia', 70, 3500000),
(17, 22, 'Baileys', 60, 2600000),
(18, 19, 'Khlibniy', 10, 80900),
(19, 23, 'Redstar', 40, 120000),
(20, 13, 'Bagpider', 60, 2500000),
(21, 20, 'McDowell ‘s', 20, 600567),
(22, 18, 'Officer ‘s ', 100, 7800345),
(23, 22, 'Johnnie Walker', 22, 980678),
(24, 10, 'Pirassunga 51', 10, 70000),
(25, 24, 'Snow', 10, 90789);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedores`
--

CREATE TABLE `proveedores` (
  `idProveedor` int(11) NOT NULL,
  `Nombre` varchar(60) NOT NULL,
  `Telefono` varchar(10) NOT NULL,
  `Correo` varchar(50) NOT NULL,
  `Cuidad` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `proveedores`
--

INSERT INTO `proveedores` (`idProveedor`, `Nombre`, `Telefono`, `Correo`, `Cuidad`) VALUES
(1, 'Julian Barrera', '3018406070', 'Ramiituyo@outlook.es', 'Medellin'),
(2, 'Juana Rua', '3024084565', 'Junitayramiro23@gmail.com', 'Cucuta'),
(3, 'Estefania Lopez', '3057102030', 'Estefanylopez45@hotmail.com', 'Barranquilla'),
(4, 'Katerine Sosa', '3045724568', 'Katerinpsosa@hotmail.com', 'Santa Marta'),
(5, 'Ramiro Ortiz', '3017213090', 'Ramiituyo@outlook.es', 'Santa Marta'),
(6, 'Julio Ramirez', '3018406070', 'Julioramirezsi@gmail.com', 'Cartagena'),
(7, 'Valentina Aquite', '3045724568', 'Valen3409@hotmail.es', 'Cali'),
(8, 'Valeria Correa', '3078013243', 'Valercorrea09@hotmail.com.es', 'Medellin'),
(9, 'Valery Casas', '3057102030', 'Vcasas12134@outlook.es.co', 'Riohacha'),
(10, 'Veronica Giraldo', '3078013243', 'Veritogiraldo15@gmail.com', 'Santa Marta'),
(11, 'Julian Barrera', '3018406070', 'Julianbarrerita12@gmail.com', 'Santa Marta'),
(12, 'Juliana Zapata', '3057102030', 'Juliprincesa@gmail.com', 'Cartagena'),
(13, 'Jeronimo Juarez', '3045678932', 'Juarezjeronimo@gmail.com', 'Barranquilla'),
(14, 'Ana Castañeda', '3045679010', 'anafcata@gmail.com', 'Cucuta'),
(15, 'Ramiro Ortiz', '3045724568', 'Ramiituyo@outlook.es', 'Medellin'),
(16, 'Angie Polo', '3024084565', 'Aguie67@hotmail.com', 'Cali'),
(17, 'Valentina Aquite', '3045672356', 'Valen3409@hotmail.es', 'Riohacha'),
(18, 'Juana Rua', '3045679818', 'Junitayramiro23@gmail.com', 'Cartagena'),
(19, 'Any Toro', '3048968300', 'Any9890@hotmail.com', 'Bogota'),
(20, 'Carolina Mora', '3084568943', 'caromorita14@outloo.es', 'Cartagena'),
(21, 'Camilo Gomez', '3106101260', 'Camiimg230@gmail.com', 'Medellin'),
(22, 'Rosario Bermudez', '3129875643', 'Rosabermu34@gmail.com', 'Bucaramanga'),
(23, 'Sofia Bocanegra', '3137102039', 'bocaoscura@gmail.com', 'Manizales'),
(24, 'Francisco Cataño', '3145673409', 'Fracismi@outloo.es.co', 'Pereira'),
(25, 'Evariste Gonzales', '3217894563', 'Eavristeelhe@hotmail.com', 'Ibague');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administradores`
--
ALTER TABLE `administradores`
  ADD PRIMARY KEY (`id_Administrador`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`idCliente`);

--
-- Indices de la tabla `detallepedido`
--
ALTER TABLE `detallepedido`
  ADD PRIMARY KEY (`idDetallepedido`),
  ADD KEY `FK_idPedido_Detallepedido` (`idPedido`),
  ADD KEY `FK_idProducto_Detallepedido` (`idProducto`);

--
-- Indices de la tabla `domicilios`
--
ALTER TABLE `domicilios`
  ADD PRIMARY KEY (`idDomicilio`),
  ADD KEY `FK_idPedido_Domicilios` (`idPedido`);

--
-- Indices de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`idPedido`),
  ADD KEY `FK_idCliente_Pedidos` (`idCliente`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`idProducto`),
  ADD KEY `FK_idProveedor_Productos` (`idProveedor`);

--
-- Indices de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  ADD PRIMARY KEY (`idProveedor`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `administradores`
--
ALTER TABLE `administradores`
  MODIFY `id_Administrador` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `idCliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT de la tabla `detallepedido`
--
ALTER TABLE `detallepedido`
  MODIFY `idDetallepedido` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de la tabla `domicilios`
--
ALTER TABLE `domicilios`
  MODIFY `idDomicilio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `idPedido` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `idProducto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  MODIFY `idProveedor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `detallepedido`
--
ALTER TABLE `detallepedido`
  ADD CONSTRAINT `FK_idPedido_Detallepedido` FOREIGN KEY (`idPedido`) REFERENCES `pedidos` (`idPedido`),
  ADD CONSTRAINT `FK_idProducto_Detallepedido` FOREIGN KEY (`idProducto`) REFERENCES `productos` (`idProducto`);

--
-- Filtros para la tabla `domicilios`
--
ALTER TABLE `domicilios`
  ADD CONSTRAINT `FK_idPedido_Domicilios` FOREIGN KEY (`idPedido`) REFERENCES `pedidos` (`idPedido`);

--
-- Filtros para la tabla `pedidos`
--
ALTER TABLE `pedidos`
  ADD CONSTRAINT `FK_idCliente_Pedidos` FOREIGN KEY (`idCliente`) REFERENCES `clientes` (`idCliente`);

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `FK_idProveedor_Productos` FOREIGN KEY (`idProveedor`) REFERENCES `proveedores` (`idProveedor`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
