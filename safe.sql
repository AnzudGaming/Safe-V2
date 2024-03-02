-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-03-2024 a las 22:47:32
-- Versión del servidor: 8.0.35
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `safe`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cargament`
--

CREATE TABLE `cargament` (
  `idcargament` int NOT NULL,
  `foil` varchar(999) DEFAULT NULL,
  `cargament` varchar(45) NOT NULL,
  `weights` int NOT NULL,
  `types` varchar(45) NOT NULL,
  `dates_input` date NOT NULL,
  `dates_output` date DEFAULT NULL,
  `times_input` time NOT NULL,
  `times_output` time DEFAULT NULL,
  `estatus` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `cargament`
--

INSERT INTO `cargament` (`idcargament`, `foil`, `cargament`, `weights`, `types`, `dates_input`, `dates_output`, `times_input`, `times_output`, `estatus`) VALUES
(34, 'ST0071120', 'Agave', 18, 'Output', '2022-11-12', '2022-11-16', '16:00:00', '19:00:00', 1),
(35, 'ST00984', 'Agave', 18, 'OutPut', '2022-11-30', '2023-12-01', '15:13:00', '16:00:00', 1),
(36, 'ST0095514', 'Agave Teremana', 80, 'Output', '2022-11-13', '2022-11-14', '14:00:00', '06:00:00', 1),
(39, 'ST0093382', 'Teremana', 20, 'OutPut', '2022-11-15', '2023-01-18', '10:20:22', '05:05:00', 1),
(40, 'ST0011814', 'Teremana', 52, 'Output', '2022-11-08', '2022-11-08', '12:55:00', '19:00:00', 1),
(43, 'ST0026902', 'Teremana Agave', 90, 'OutPut', '2022-11-15', '2022-12-07', '21:30:00', '10:06:00', 1),
(49, 'ST0065174', 'AT', 50, 'Output', '2022-11-20', '2022-11-21', '08:00:00', '10:00:00', 1),
(59, 'ST0010271', 'Agave Importado', 50, 'OutPut', '2022-11-28', '2022-12-14', '18:30:00', '12:26:00', 1),
(60, 'ST0088126', 'Agave Teremana Importado', 80, 'Output', '2022-11-24', '2022-11-24', '16:00:00', '19:00:00', 1),
(61, 'ST0081574', 'Barriles De Destilado', 90, 'OutPut', '2022-11-29', '2022-12-07', '01:00:00', '10:45:00', 1),
(62, 'ST0035542', 'Tequila Añejado', 100, 'OutPut', '2022-12-08', '2023-12-07', '10:00:00', '11:56:00', 1),
(63, 'ST0084895', 'Tequila Añejado', 15, 'OutPut', '2022-12-07', '2023-12-06', '10:48:00', '09:00:00', 1),
(64, 'ST0095453', 'Agave', 50, 'OutPut', '2023-02-21', '2023-12-04', '11:50:00', '11:00:00', 1),
(65, 'ST0014552', 'Mango Enchilado', 150, 'OutPut', '2023-08-07', '2023-08-08', '17:00:00', '10:00:00', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `employee`
--

CREATE TABLE `employee` (
  `idemployee` int NOT NULL,
  `cod_emp` varchar(999) DEFAULT NULL,
  `names` varchar(45) NOT NULL,
  `last_name` varchar(45) NOT NULL,
  `age` int NOT NULL,
  `gender` varchar(45) NOT NULL,
  `date_birth` date NOT NULL,
  `estatus` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `employee`
--

INSERT INTO `employee` (`idemployee`, `cod_emp`, `names`, `last_name`, `age`, `gender`, `date_birth`, `estatus`) VALUES
(1, 'EMP-001', 'Jesús Alfonso', 'Rivera Rendón', 22, 'Male', '2001-01-23', 1),
(4, 'EMP-003', 'Maria Jose', 'Aguilzar Loaiza', 19, 'Female', '2003-08-03', 1),
(6, 'EMP-0011996', 'Dylan', 'Smith Relish', 22, 'Male', '2001-01-23', 1),
(7, 'EMP-0099666', 'Rosalia', 'Campillo Uribe', 20, 'Female', '2003-09-03', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `iduser` int NOT NULL,
  `cod_user` varchar(999) DEFAULT NULL,
  `user` varchar(999) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `pass` varchar(45) NOT NULL,
  `type_user` varchar(45) NOT NULL,
  `fkemployee` int NOT NULL,
  `estatus` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`iduser`, `cod_user`, `user`, `pass`, `type_user`, `fkemployee`, `estatus`) VALUES
(1, 'USR-001', 'Admin', '036d0ef7567a20b5a4ad24a354ea4a945ddab676', 'Admin', 1, 1),
(43, 'USR-0085184', 'alfa', '3539c7b9811043ebfda1125ae9de203b46afaa3d', 'Admin', 1, 1),
(44, 'USR-0089394', 'admin', '90b9aa7e25f80cf4f64e990b78a9fc5ebd6cecad', 'Admin', 1, 1),
(45, 'USR-0069281', 'rcampillo', '5ab0aecce12b73363198428a93291105f5cdef72', 'Admin', 7, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cargament`
--
ALTER TABLE `cargament`
  ADD PRIMARY KEY (`idcargament`);

--
-- Indices de la tabla `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`idemployee`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`iduser`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cargament`
--
ALTER TABLE `cargament`
  MODIFY `idcargament` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT de la tabla `employee`
--
ALTER TABLE `employee`
  MODIFY `idemployee` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `iduser` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
