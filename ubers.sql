-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-12-2021 a las 18:31:37
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ubers`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `automóvil`
--

CREATE TABLE `automóvil` (
  `idauto` int(11) NOT NULL,
  `matricula_auto` varchar(25) NOT NULL,
  `marca_auto` varchar(30) NOT NULL,
  `fecha_reg` date NOT NULL,
  `color_auto` varchar(18) NOT NULL,
  `descripcion` varchar(45) NOT NULL,
  `año_auto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `automóvil`
--

INSERT INTO `automóvil` (`idauto`, `matricula_auto`, `marca_auto`, `fecha_reg`, `color_auto`, `descripcion`, `año_auto`) VALUES
(0, '3WW15795', 'Ford', '2021-12-14', 'Rojo', 'Atributos y Accesorios necesarios para manten', 2008);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `chofer`
--

CREATE TABLE `chofer` (
  `idempleado` int(11) NOT NULL,
  `nombre` varchar(25) NOT NULL,
  `paterno` varchar(20) NOT NULL,
  `materno` varchar(20) NOT NULL,
  `correo` varchar(45) NOT NULL,
  `direccion` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `chofer`
--

INSERT INTO `chofer` (`idempleado`, `nombre`, `paterno`, `materno`, `correo`, `direccion`) VALUES
(0, 'Jonathan', 'Barandiaran', 'Leyva', 'Estudiantebarandiaran@gmail.com', 'Paseo De Los Compositores 1219B');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `jefechofer`
--

CREATE TABLE `jefechofer` (
  `idjefe` int(10) NOT NULL,
  `nombres` varchar(25) NOT NULL,
  `apellidos` varchar(30) NOT NULL,
  `telefono` int(11) NOT NULL,
  `correo` varchar(45) NOT NULL,
  `matricula` varchar(25) NOT NULL,
  `descripcion` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `jefechofer`
--

INSERT INTO `jefechofer` (`idjefe`, `nombres`, `apellidos`, `telefono`, `correo`, `matricula`, `descripcion`) VALUES
(1, 'Jonathan', 'Barandiaran', 2147483647, 'Estudiantebarandiaran@gmail.com', '3WW15795', 'Atributos y Accesorios necesarios para manten');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `idusuario` int(11) NOT NULL,
  `nombres` varchar(45) NOT NULL,
  `paterno` varchar(20) NOT NULL,
  `materno` varchar(20) NOT NULL,
  `correo` varchar(60) NOT NULL,
  `telefono` int(10) NOT NULL,
  `direccion` varchar(30) NOT NULL,
  `fecha_nac` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idusuario`, `nombres`, `paterno`, `materno`, `correo`, `telefono`, `direccion`, `fecha_nac`) VALUES
(1, 'Jonathana', 'Barandiaran', 'Leyva', 'Estudiantebarandiaran@gmail.com', 2147483647, 'Paseo De Los Compositores 1219', '2021-12-23');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `jefechofer`
--
ALTER TABLE `jefechofer`
  ADD PRIMARY KEY (`idjefe`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idusuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `jefechofer`
--
ALTER TABLE `jefechofer`
  MODIFY `idjefe` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idusuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
