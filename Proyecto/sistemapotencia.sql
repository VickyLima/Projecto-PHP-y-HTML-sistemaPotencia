-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-11-2022 a las 00:01:13
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `crudmarcas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `colores`
--

CREATE TABLE `colores` (
  `claveColor` int(11) NOT NULL,
  `colores` text NOT NULL,
  `marca` text NOT NULL,
  `modelo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `colores`
--

INSERT INTO `colores` (`claveColor`, `colores`, `marca`, `modelo`) VALUES
(1, 'Primarios', 'Audi', 'Audi R3'),
(2, 'Terciarios', 'Audi', 'Audi R3'),
(3, 'Secundarios', 'Honda', 'Honda Rex'),
(4, 'Primarios B2', 'Volvo', 'Volvo C40'),
(5, 'Primarios B2', 'Toyota', 'Toyota Etios'),
(6, 'Primario A1', 'Ferrari', 'Ferrari GTB'),
(7, 'Terciarios C1', 'Honda', 'Honda Civic'),
(8, 'Primarios C2', 'Chevrolet', 'Aveo'),
(9, 'Secundario D1', 'Ford', 'Ford XD2'),
(10, 'Paleta Primaria A', 'Ferrari', 'Nirox'),
(11, 'Paleta Primaria B', 'Kia', 'Rio'),
(12, 'Paleta clara', 'Nissan', 'BoxR4'),
(13, 'Paleta oscura', 'Jeep', 'Jeep JT'),
(14, 'Paleta clara B1', 'Subaru', 'Forester'),
(15, 'Paleta oscura B1', 'FIAT', 'FIAT Ducato'),
(16, 'Paleta basica AA1', 'Mazda', 'Mazda CX-5'),
(17, 'Paleta dorada', 'Lexus', 'Lexus GT'),
(18, 'Paleta Azules', 'Daewoo', 'Daewoo Racer'),
(19, 'Paleta clara E1', 'Bentle', 'Bentayga'),
(20, 'Paleta clara E2', 'Citroen', 'Citroen C3'),
(21, 'Paleta oscura E1', 'Jaguar', 'Jaguar I-PACE'),
(22, 'Paleta oscura E2', 'LADA', 'LADA 111'),
(23, 'Paleta E3', 'Opel', 'Opel Astra'),
(24, 'Paleta G1', 'Renault', 'Renault Malinchee'),
(25, 'Paleta E2', 'Datsun', 'Datsun Kizos'),
(26, 'Paleta estandar A0', 'Daewoo', 'Combo'),
(27, 'Paleta estandar A1', 'Corsa', 'Fiat'),
(28, 'Paleta A1', 'Crossland', 'Spark'),
(29, 'Paleta roja', 'Grandlandia', 'Lexus'),
(30, 'Paleta Azul', 'Subaru', 'Moka'),
(31, 'Paleta Verde', 'Citroen', 'Lada 112'),
(32, 'Paleta basica', 'BMW', 'F-PACE'),
(33, 'Paleta Blanca', 'Porsche', 'C5 X'),
(34, 'Paleta gris', 'Lexus', 'RT5'),
(35, 'Paleta azul', 'Toyota', 'Rio'),
(36, 'Paleta basica G3', 'Scott', 'Berlingo'),
(37, 'Paleta N5', 'Shara', 'Aircross'),
(38, 'Paleta marron', 'Scania', 'C5 Ammi'),
(39, 'Paleta dorada', 'Suzuki', 'Spurs'),
(40, 'Paleta morada', 'Scoda', 'Mulsanne'),
(41, 'Paleta gris', 'SPA', 'Bentayga'),
(42, 'Paleta blanca', 'Subaru', 'Continental'),
(43, 'Paleta negra', 'Simson', 'GT sulre'),
(44, 'Paleta roja B1', 'Sovam', 'Flying'),
(45, 'Paleta azul B1', 'Siam', 'Abarth'),
(46, 'Paleta dorada', 'Somaca', 'Araña'),
(47, 'Paleta roja C1', 'Jauar', 'Giulia'),
(48, 'Paleta morada', 'Infiniti', 'Alpino'),
(49, 'Paleta amarilla', 'Mazba', 'DB11'),
(50, 'Paleta clara V1', 'SAAB', 'Bentley'),
(51, 'Rosas', 'Joldi', 'Berber'),
(52, 'Grises A', 'Matiz', 'Zoet'),
(53, 'LLamativos B', 'Butr', 'Valdez'),
(54, 'Claros C', 'Dent', 'Michelle'),
(55, 'Marinados D1', 'Filter', 'Montez'),
(56, 'Dorados', 'Gulty', 'Mitez'),
(57, 'Paleta basica', 'Molter', 'Venney'),
(58, 'Paleta negra', 'Bonilla', 'Belley');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `marcas`
--

CREATE TABLE `marcas` (
  `idMarca` int(10) NOT NULL,
  `marca` varchar(50) NOT NULL,
  `color` varchar(50) NOT NULL,
  `carroceria` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `marcas`
--

INSERT INTO `marcas` (`idMarca`, `marca`, `color`, `carroceria`) VALUES
(1, 'Audi', 'Cafe', 'Minivan'),
(2, 'Versa', 'Negro', 'Vagoneta'),
(3, 'Kia', 'Gris', 'Vagoneta'),
(4, 'Ford', 'Negro', 'Deportivo'),
(5, 'Chevrolet', 'Vino', 'Deportivo'),
(6, 'Nissan', 'Blanco', 'Minivan'),
(7, 'Toyota', 'Verde', 'Vagoneta'),
(8, 'Volvo', 'Azul', 'Deportivo'),
(9, 'Ferrari', 'Gris', 'Deportivo'),
(10, 'Honda', 'Gris', 'Vagoneta'),
(11, 'Jeep', 'Rojo', 'Minivan'),
(12, 'Aiwas', 'Negro', 'Vagoneta'),
(13, 'Daewoo', 'Gris', 'Minivan'),
(14, 'Fiat', 'Amarillo', 'Vagoneta'),
(15, 'Spark', 'Azul', 'Vinivan'),
(16, 'Lexus', 'Marron', 'Vagoneta'),
(17, 'Subaru', 'Verde', 'Minivan'),
(18, 'Citroen', 'Plata', 'Deportivo'),
(19, 'BMW', 'Cafe', 'Minivan'),
(20, 'Porsche', 'Dorado', 'Vagoneta'),
(21, 'Lexus', 'Gris', 'Vagoneta'),
(22, 'Toyota', 'Negro', 'Minivan'),
(23, 'Scott', 'Plata', 'Minivan'),
(24, 'Shara', 'Negro', 'Minivan'),
(25, 'Scania', 'Blanco', 'Vagoneta'),
(26, 'Saic', 'Gris', 'Vagoneta'),
(27, 'Suzuki', 'Cafe', 'Minivan'),
(28, 'Scoda', 'Dorado', 'Minivan'),
(29, 'SPA', 'Negro', 'Vagoneta'),
(30, 'Subaru', 'Marron', 'Minivan'),
(31, 'Simson', 'Verde', 'Vagoneta'),
(32, 'Sovam', 'Plata', 'Vagoneta'),
(33, 'Siam', 'Cafe', 'Minivan'),
(34, 'Somaca', 'Azul', 'Vagoneta'),
(35, 'Jauar', 'Plata', 'Minivan'),
(36, 'Acora', 'Negro', 'Vogoneta'),
(37, 'Infiniti', 'Azul', 'Minivan'),
(38, 'Mazba', 'Blanco', 'Minivan'),
(39, 'SAAB', 'Plata', 'Vagoneta'),
(40, 'GM', 'Rojo', 'Minivan'),
(41, 'Datsun', 'Naranja', 'Carreras'),
(42, 'Zenvo', 'Negro', 'Minivan'),
(43, 'Bugatti', 'Gris', 'Deportivo'),
(44, 'FIAT', 'Amarillo', 'Carreras'),
(45, 'Daewoo', 'Azul', 'Deportivo'),
(46, 'Lexus', 'Marron', 'Vagoneta'),
(47, 'Holden', 'Verde', 'Deportivo'),
(48, 'Hyundai', 'Plata', 'Minivan'),
(49, 'Royce', 'Cafe', 'Vagoneta'),
(50, 'Citroen', 'Dorado', 'Minivan'),
(51, 'Joldi', 'Azul', 'Rosa'),
(52, 'Milker', 'Cafe', 'Minivan'),
(53, 'Molter', 'Negro', 'Vagoneta'),
(54, 'Volvert', 'Cafe', 'Vagoneta'),
(55, 'Gulter', 'Azul', 'Minivan'),
(56, 'Michelle', 'Dorado', 'Minivan'),
(57, 'Vellon', 'Dorado claro', 'Minivan'),
(58, 'Linet', 'Rojo', 'Vagoneta');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `modelos`
--

CREATE TABLE `modelos` (
  `claveModelos` int(11) NOT NULL,
  `modelo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `modelos`
--

INSERT INTO `modelos` (`claveModelos`, `modelo`) VALUES
(1, 'Audi R3'),
(2, 'Kia Renox'),
(3, 'Etíos Aibo'),
(4, 'Volvo XC40'),
(5, 'Ferrari GTB'),
(6, 'Honda Civic'),
(7, 'Combo'),
(8, 'Corsa'),
(9, 'Crossland'),
(10, 'Grandlandia'),
(11, 'Moka'),
(12, 'Lada 112'),
(13, 'F-PACE'),
(14, 'C5 X'),
(15, 'RT5'),
(16, 'Rio'),
(17, 'Berlingo'),
(18, 'Aircross'),
(19, 'C5 Ammi'),
(20, 'Spurs'),
(21, 'Mulsanne'),
(22, 'Bentayga'),
(23, 'Continental'),
(24, 'GT sulre'),
(25, 'Flying'),
(26, 'Abarth'),
(27, 'Araña'),
(28, 'Giulia'),
(29, 'Alpino'),
(30, 'DB11'),
(31, 'Bentley'),
(32, 'Bentayga'),
(33, 'Flying '),
(34, 'BMW'),
(35, 'X6'),
(36, 'Corolla'),
(37, 'RAV4'),
(38, 'Serie F'),
(39, 'CR-V'),
(40, 'Camry'),
(41, 'Acura'),
(42, 'Aston'),
(43, 'BAICO'),
(44, 'Bentley'),
(45, 'Kwid'),
(46, 'Hyundai Gran'),
(47, 'March'),
(48, ' V-Drive'),
(49, 'Vento'),
(50, 'Neftx'),
(51, 'joldi'),
(52, 'Gulbert'),
(53, 'Magin'),
(54, 'Marquez'),
(55, 'Caldert'),
(56, 'Neftv'),
(57, 'Valleny'),
(58, 'Molter');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `idProducto` int(11) NOT NULL,
  `claveProducto` text NOT NULL,
  `idMarca` int(10) NOT NULL,
  `claveColor` int(11) NOT NULL,
  `claveModelos` int(11) NOT NULL,
  `descripcion` text NOT NULL,
  `carroceria` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`idProducto`, `claveProducto`, `idMarca`, `claveColor`, `claveModelos`, `descripcion`, `carroceria`) VALUES
(2, '29VRL', 2, 2, 2, 'Automovil para 4 personas', 'Minivan'),
(3, '16JAX', 5, 7, 6, 'Automovil para 6 personas', 'Deportivo'),
(4, '03NXS', 43, 30, 18, 'Automovil para 7 personas', 'Vagoneta'),
(5, '27RUAE', 12, 18, 34, 'Automovil para 5 personas', 'Vagoneta'),
(7, '25JPM', 18, 16, 31, 'Automovil para 5 personas ', 'Minivan'),
(8, '28DBP', 45, 36, 44, 'Automovil para 6 personas', 'Vagoneta'),
(9, '45MRL', 9, 20, 40, 'Automovil para 5 personas ', 'Minivan'),
(11, '41JVX', 44, 46, 7, 'Automovil para 5 personas', 'Minivan'),
(12, '09JRV', 48, 50, 28, 'Automovil para 5 personas', 'Vagoneta'),
(13, '11ADC', 29, 48, 19, 'Automovil para 5 personas', 'Vagoneta'),
(14, '08HAH', 40, 11, 30, 'Automovil para 5 personas', 'Vagoneta'),
(15, '28HPG', 38, 39, 23, 'Automovil para 3 personas', 'Deportivo'),
(16, '21YAA', 41, 33, 50, 'Automovil para 5 personas', 'Minivan'),
(17, '12ECL', 3, 26, 5, 'Automovil para 5 personas', 'Vagoneta'),
(18, '04UMT', 39, 49, 48, 'Automovil para 6 personas', 'Sedan'),
(20, '25JCT', 10, 10, 10, 'Automovil para 6 personas', 'Minivan'),
(21, '03RGC', 8, 8, 8, 'Automovil para 6 personas', 'Sedan'),
(22, '17JHG', 15, 15, 15, 'Automovil para 5 personas', 'Vagoneta'),
(23, '42SMJ', 17, 17, 17, 'Automovil para 5 personas', 'Minivan'),
(24, '27RCL', 21, 21, 21, 'Automovil para 6 personas', 'Vagoneta'),
(25, '58RMX', 22, 22, 22, 'Automovil para 5 personas', 'Sedan'),
(26, '12GPM', 23, 23, 24, 'Automovil para 5 personas', 'Vagoneta'),
(27, '19JMC', 24, 24, 25, 'Automovil para 6 personas', 'Sedan'),
(28, '52FTJ', 25, 25, 26, 'Automovil para 5 personas', 'Minivan'),
(29, '20LRL', 26, 27, 47, 'Automovil para 6 personas', 'Vagoneta'),
(30, '13EPN', 27, 28, 27, 'Automovil para 5 personas', 'Sedan'),
(31, '55HFL', 28, 29, 29, 'Automovil para 5 personas', 'Minivan'),
(32, '86JUD', 30, 31, 32, 'Automovil para 6 personas', 'Sedan'),
(33, '36UDN', 4, 3, 35, 'Automovil para 5 personas', 'Vagoneta'),
(34, '88OMX', 33, 37, 45, 'Automovil para 6 personas', 'Minivan'),
(35, '92PDC', 47, 5, 20, 'Automovil para 5 personas', 'Sedan'),
(36, '41FGX', 6, 19, 12, 'Automovil para 5 personas', 'Minivan'),
(37, '62OEM', 13, 34, 36, 'Automovil para 5 personas', 'Sedan'),
(38, '52UEM', 42, 45, 9, 'Automovil para 6 personas', 'Vagoneta'),
(39, '58ISN', 49, 40, 11, 'Automovil para 6 personas', 'Sedan'),
(40, '45IFO', 20, 12, 16, 'Automovil para 5 personas', 'Minivan'),
(41, '52JDN', 31, 6, 13, 'Automovil para 5 personas', 'Sedan'),
(42, '45KSU', 11, 13, 14, 'Automoviles para 6 personas', 'Minivan'),
(43, '82LSM', 14, 14, 41, 'Automivil para 6 personas', 'Vagoneta'),
(44, '58LAI', 46, 47, 33, 'Automovil para 5 personas', 'Sedan'),
(45, '55POS', 32, 44, 46, 'Automovil para 5 personas', 'Minivan'),
(46, '86IDN', 35, 35, 37, 'Automovil para 4 personas', 'Minivan'),
(47, '22ISN', 36, 38, 38, 'Automovil para 6 personas', 'Sedan'),
(48, '88ISI', 37, 41, 39, 'Automovil para 5 personas', 'Minivan'),
(49, '20FRL', 34, 43, 43, 'Automovil para 5 personas', 'Vagoneta'),
(50, '29RLV', 16, 42, 49, 'Automovil para 3 personas', 'Deportivo'),
(51, '45JDI', 51, 51, 51, 'Automovil para 5 personas', 'Deportivo'),
(52, '50GDF', 52, 52, 52, 'Automovil para 4 personas', 'Minivan'),
(53, '45VDK', 53, 53, 53, 'Automovil para 5 personas', 'Sedan'),
(54, '89JSI', 54, 54, 54, 'Automovil para 4 personas', 'Vagoneta'),
(55, '90HSI', 55, 55, 55, 'Automovil para 4 personas', 'Sedan'),
(56, '67KSJ', 56, 57, 57, 'Automovil para 5 personas', 'Deportivo');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `colores`
--
ALTER TABLE `colores`
  ADD PRIMARY KEY (`claveColor`);

--
-- Indices de la tabla `marcas`
--
ALTER TABLE `marcas`
  ADD PRIMARY KEY (`idMarca`);

--
-- Indices de la tabla `modelos`
--
ALTER TABLE `modelos`
  ADD PRIMARY KEY (`claveModelos`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`idProducto`),
  ADD UNIQUE KEY `idMarca` (`idMarca`),
  ADD UNIQUE KEY `claveColor` (`claveColor`),
  ADD UNIQUE KEY `claveModelos` (`claveModelos`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `idProducto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `productos_ibfk_1` FOREIGN KEY (`idMarca`) REFERENCES `marcas` (`idMarca`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `productos_ibfk_2` FOREIGN KEY (`claveColor`) REFERENCES `colores` (`claveColor`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `productos_ibfk_3` FOREIGN KEY (`claveModelos`) REFERENCES `modelos` (`claveModelos`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
