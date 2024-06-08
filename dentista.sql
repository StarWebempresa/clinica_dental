-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-05-2024 a las 03:33:22
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
-- Base de datos: `dentista`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `citas`
--

CREATE TABLE `citas` (
  `id` int(11) NOT NULL,
  `descripcion` varchar(150) NOT NULL,
  `duracion` varchar(50) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `citas`
--

INSERT INTO `citas` (`id`, `descripcion`, `duracion`, `fecha`) VALUES
(6, '8', '1 hora', '2020-02-20 06:00:00'),
(7, '4', '30 minutos', '2024-05-20 06:00:00'),
(12, '6', '25 minutos', '2024-04-20 06:00:00'),
(13, '13', '10 horas', '2010-10-10 06:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `expedientes`
--

CREATE TABLE `expedientes` (
  `id` int(11) NOT NULL,
  `id_paciente` int(11) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp(),
  `descripcion` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `expedientes`
--

INSERT INTO `expedientes` (`id`, `id_paciente`, `fecha`, `descripcion`) VALUES
(1, 15, '2024-05-29 06:00:00', 'prueba del primer expediente del sistema'),
(2, 15, '2024-05-29 06:00:00', 'prueba del primer expediente del sistema'),
(3, 15, '2024-05-29 06:00:00', 'segunda prueba de expedientes segun el paciente que se muestra y de paso ver como esta todo lo de este apartado, \"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\"'),
(4, 15, '2024-05-29 06:00:00', 'segunda prueba de expedientes segun el paciente que se muestra y de paso ver como esta todo lo de este apartado, \"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\"'),
(5, 6, '2024-05-28 06:00:00', '<?php echo $fila[\'id\']; ?>\" method=\"POST\"><?php echo $fila[\'id\']; ?>\" method=\"POST\"><?php echo $fila[\'id\']; ?>\" method=\"POST\"><?php echo $fila[\'id\']; ?>\" method=\"POST\"><?php echo $fila[\'id\']; ?>\" method=\"POST\"><?php echo $fila[\'id\']; ?>\" method=\"POST\"><?php echo $fila[\'id\']; ?>\" method=\"POST\"><?php echo $fila[\'id\']; ?>\" method=\"POST\"><?php echo $fila[\'id\']; ?>\" method=\"POST\"><?php echo $fila[\'id\']; ?>\" method=\"POST\"><?php echo $fila[\'id\']; ?>\" method=\"POST\"><?php echo $fila[\'id\']; ?>\" method=\"POST\"><?php echo $fila[\'id\']; ?>\" method=\"POST\"><?php echo $fila[\'id\']; ?>\" method=\"POST\"><?php echo $fila[\'id\']; ?>\" method=\"POST\">'),
(6, 0, '2024-05-30 00:36:21', ''),
(7, 4, '2024-05-30 00:37:08', 'pruevas y mas pruevas'),
(8, 4, '2024-05-30 00:45:31', 'pruevas variaas'),
(9, 0, '2024-05-30 01:31:30', 'prueva de funcion insertar expediente '),
(10, 0, '2024-05-30 01:31:41', 'usgfuwsgfijsgk');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `facturas`
--

CREATE TABLE `facturas` (
  `id` int(11) NOT NULL,
  `expediente` int(11) NOT NULL,
  `especialidad` varchar(100) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `facturas`
--

INSERT INTO `facturas` (`id`, `expediente`, `especialidad`, `fecha`) VALUES
(8, 0, '85', '2024-04-17 23:48:23'),
(9, 0, '85', '2024-04-17 23:49:15'),
(10, 0, '10', '2024-04-17 23:51:41'),
(11, 4, '55', '2024-04-18 00:48:01'),
(12, 13, '12345', '2024-05-09 00:40:56');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paciente`
--

CREATE TABLE `paciente` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellido` varchar(100) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `telefono` varchar(50) NOT NULL,
  `edad` varchar(50) NOT NULL,
  `birthdate` date NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `paciente`
--

INSERT INTO `paciente` (`id`, `nombre`, `apellido`, `correo`, `telefono`, `edad`, `birthdate`, `fecha`) VALUES
(4, 'Hect', 'Gomez Chavez', 'campos12@gmail.com', '99111656701', '21', '2023-08-20', '2024-04-17 20:58:26'),
(6, 'mario', 'mejia', 'mario@correo.com', '88888888', '25', '1998-12-23', '2024-04-17 20:59:30'),
(7, 'Edgardo', 'Guevara', 'edgardo@correo.com', '12354678', '26', '1997-12-23', '2024-04-18 00:36:58'),
(8, 'pruevamodificada', 'prueva por error', 'prueva@correo', '12346587', '45', '1990-12-22', '2024-04-17 23:14:48'),
(9, 'elimine las', 'funciones principales', 'AYUDA@correo.com', '99999999', '10', '2014-08-08', '2024-04-17 23:16:09'),
(12, 'qwe', 'qwe', 'qwe@correo', '78945612', '25', '1999-10-10', '2024-04-27 04:41:13'),
(13, 'prueva nueva', 'prueva nueva', 'pruevanueva@correo.com', '74185296', '55', '1970-02-20', '2024-05-09 00:26:42'),
(14, 'prueva -01', 'prueva -01', 'prueva@correo', '88888888', '24', '2000-01-01', '2024-05-29 21:58:26'),
(15, 'prueva - 02', 'prueva - 02', 'prueva2@correo', '88888888', '25', '1998-12-18', '2024-05-29 21:59:15');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permisos`
--

CREATE TABLE `permisos` (
  `id` int(11) NOT NULL,
  `rol` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `permisos`
--

INSERT INTO `permisos` (`id`, `rol`) VALUES
(1, 'Administrador'),
(2, 'Doctor'),
(3, 'Asistente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesores`
--

CREATE TABLE `profesores` (
  `id` int(11) NOT NULL,
  `cedula` varchar(100) NOT NULL,
  `nombres` varchar(100) NOT NULL,
  `apellidos` varchar(100) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `edad` varchar(50) NOT NULL,
  `fecha_na` date NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `profesores`
--

INSERT INTO `profesores` (`id`, `cedula`, `nombres`, `apellidos`, `correo`, `edad`, `fecha_na`, `fecha`) VALUES
(1, '0145756', 'Ale', 'ale', 'alex@gmail.com', '34', '2000-08-02', '2024-04-17 23:10:46'),
(2, '527532', 'Emmanuel', 'Gomez Chavez', 'example@gmail.com', '22', '2023-08-20', '2023-08-20 15:31:23'),
(4, '025222199', 'prueva mod1', 'prueva', 'prueva2@correo', '45', '1984-10-20', '2024-04-17 22:17:46'),
(5, '5555555555', 'prueva5', 'prueva5', 'prueva5@correo', '20', '2004-01-01', '2024-04-17 23:12:06');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `password` varchar(300) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `id_rol` int(11) NOT NULL,
  `imagen` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `usuario`, `correo`, `password`, `fecha`, `id_rol`, `imagen`) VALUES
(23, 'admin1', 'admin1@gmail.com', 'admin1', '2024-04-17 06:00:00', 1, ''),
(24, 'doctor1', 'doctor1@gmail.com', 'doctor1', '2024-04-17 06:00:00', 2, ''),
(25, 'asistente1', 'asistente1@gmail.com', 'asistente1', '2024-04-17 06:00:00', 3, '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `citas`
--
ALTER TABLE `citas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `expedientes`
--
ALTER TABLE `expedientes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `facturas`
--
ALTER TABLE `facturas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `paciente`
--
ALTER TABLE `paciente`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `permisos`
--
ALTER TABLE `permisos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `profesores`
--
ALTER TABLE `profesores`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `citas`
--
ALTER TABLE `citas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `expedientes`
--
ALTER TABLE `expedientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `facturas`
--
ALTER TABLE `facturas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `paciente`
--
ALTER TABLE `paciente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `permisos`
--
ALTER TABLE `permisos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `profesores`
--
ALTER TABLE `profesores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
