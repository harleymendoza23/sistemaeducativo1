-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-06-2021 a las 01:31:29
-- Versión del servidor: 10.4.18-MariaDB
-- Versión de PHP: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sistemaeducativo`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cursos`
--

CREATE TABLE `cursos` (
  `id` int(11) NOT NULL,
  `curso` varchar(30) NOT NULL,
  `idProfesor` int(11) NOT NULL,
  `fechaInicio` date NOT NULL,
  `fechaFin` date NOT NULL,
  `eliminado` bit(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `cursos`
--

INSERT INTO `cursos` (`id`, `curso`, `idProfesor`, `fechaInicio`, `fechaFin`, `eliminado`) VALUES
(1, 'ADSI', 1, '2021-03-08', '2021-10-07', b'0'),
(3, 'matematicas', 7, '2021-05-04', '2021-05-31', b'0'),
(4, 'Farmaco', 3, '2021-05-06', '2022-03-15', b'1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiante`
--

CREATE TABLE `estudiante` (
  `id` int(11) NOT NULL,
  `tipoDocumento` char(2) NOT NULL,
  `documentoIdentidad` varchar(15) NOT NULL,
  `nombres` varchar(30) NOT NULL,
  `apellidos` varchar(30) NOT NULL,
  `direccion` varchar(100) DEFAULT NULL,
  `telefono` varchar(30) NOT NULL,
  `eliminado` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `estudiante`
--

INSERT INTO `estudiante` (`id`, `tipoDocumento`, `documentoIdentidad`, `nombres`, `apellidos`, `direccion`, `telefono`, `eliminado`) VALUES
(3, 'CC', '4444', 'PEPITO', 'PEREZ', NULL, '4232423', 0),
(4, 'TI', '1018431', 'MARTA', 'LAGUNA', NULL, '1235688', 0),
(5, 'CC', '454654745', 'Maria', 'Concepción', NULL, '43443344', 0),
(9, 'RC', '54113456', 'ANA', 'CADENA', 'TAMPOCO', '3214084743', 1),
(10, 'CC', '32211', 'CARLITOS', 'PEREZ', 'DDD', '3423423', 0),
(11, 'CC', '5554466', 'HARLEY', 'DAVINSON', NULL, '875246', 0),
(12, 'CC', '5953712', 'caliche', 'perez', 'calle X # Y - Z', '55534', 0),
(13, 'CC', '10005555', 'Jimena', 'Olaya', 'calle x # y - Z', '55555', 1),
(14, 'TI', '123456', 'HARLEY DAVIDSON', 'melende', '1255', '3163213463', 0),
(17, 'CC', '1120580583', 'ANGIE', 'URQUIJO GONZALES', 'SANTO DOMINGO', '3232818778', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `matricula`
--

CREATE TABLE `matricula` (
  `id` int(11) NOT NULL,
  `idCurso` int(11) NOT NULL,
  `idEstudiante` int(11) NOT NULL,
  `NotaFinal` int(11) NOT NULL,
  `Observaciones` int(11) NOT NULL,
  `eliminado` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `matricula`
--

INSERT INTO `matricula` (`id`, `idCurso`, `idEstudiante`, `NotaFinal`, `Observaciones`, `eliminado`) VALUES
(1, 1, 3, 0, 0, 0),
(2, 1, 4, 0, 0, 0),
(3, 1, 5, 0, 0, 0),
(4, 1, 9, 0, 0, 0),
(5, 1, 10, 0, 0, 0),
(6, 3, 3, 0, 0, 0),
(7, 3, 4, 0, 0, 0),
(8, 3, 5, 0, 0, 0),
(9, 3, 9, 0, 0, 0),
(10, 3, 10, 0, 0, 0),
(11, 1, 11, 0, 0, 0),
(12, 1, 12, 0, 0, 0),
(13, 1, 13, 0, 0, 0),
(14, 4, 14, 0, 0, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `modulo`
--

CREATE TABLE `modulo` (
  `idModulo` int(11) NOT NULL,
  `nombreModulo` varchar(50) NOT NULL,
  `eliminado` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `modulo`
--

INSERT INTO `modulo` (`idModulo`, `nombreModulo`, `eliminado`) VALUES
(1, 'Configuración', 1),
(3, 'estudiante', 0),
(4, 'profesor', 0),
(5, 'cursos', 0),
(6, 'ole', 1),
(7, 'administrador', 0),
(8, 'inicio', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `notas`
--

CREATE TABLE `notas` (
  `id` int(11) NOT NULL,
  `idMatricula` int(11) NOT NULL,
  `nota1` float NOT NULL,
  `nota2` float NOT NULL,
  `nota3` float NOT NULL,
  `eliminado` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `notas`
--

INSERT INTO `notas` (`id`, `idMatricula`, `nota1`, `nota2`, `nota3`, `eliminado`) VALUES
(5, 4, 3, 2, 4, NULL),
(6, 1, 4, 2, 5, 0),
(7, 2, 5, 5, 5, 0),
(8, 5, 5, 4, 0.99, 0),
(9, 6, 5, 1, 4.88, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pagina`
--

CREATE TABLE `pagina` (
  `id` int(11) NOT NULL,
  `idModulo` int(11) NOT NULL,
  `nombre` varchar(11) NOT NULL,
  `url` varchar(11) NOT NULL,
  `eliminado` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `pagina`
--

INSERT INTO `pagina` (`id`, `idModulo`, `nombre`, `url`, `eliminado`) VALUES
(1, 1, '0', '0', 0),
(2, 1, 'editar estu', '', 0),
(3, 3, 'editar estu', '', 0),
(4, 3, 'nuevo estud', '', 0),
(5, 3, 'listar estu', '', 0),
(6, 4, 'nuevo profe', '', 0),
(7, 4, 'editar prof', '', 0),
(8, 4, 'listar prof', '', 0),
(9, 5, 'nuevo curso', '', 0),
(10, 5, 'editar curs', '', 0),
(11, 5, 'listar curs', '', 0),
(12, 5, 'matricular', '', 0),
(13, 5, 'notas', '', 0),
(14, 7, 'roles', '', 0),
(15, 7, 'usuario', '', 0),
(16, 7, 'modulo', '', 0),
(17, 3, 'detalle est', '', 0),
(18, 5, 'nueva matri', '', 0),
(19, 7, 'lista usuar', '', 0),
(20, 7, 'nuevo usuar', '', 0),
(21, 7, 'editar usua', '', 0),
(22, 7, 'nuevo modul', '', 0),
(23, 7, 'listar modu', '', 0),
(24, 7, 'editar modu', '', 0),
(25, 7, 'nueva pagin', '', 0),
(26, 7, 'detalle de ', '', 0),
(27, 7, 'editar pagi', '', 0),
(28, 7, 'listar rol', '', 0),
(29, 7, 'detalle de ', '', 0),
(30, 7, 'listar rol', '', 0),
(31, 7, 'agregar usu', '', 0),
(32, 8, 'botones', '', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permiso`
--

CREATE TABLE `permiso` (
  `id` int(11) NOT NULL,
  `idRol` int(11) NOT NULL,
  `idModulo` int(11) NOT NULL,
  `idPagina` int(11) NOT NULL,
  `eliminado` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `permiso`
--

INSERT INTO `permiso` (`id`, `idRol`, `idModulo`, `idPagina`, `eliminado`) VALUES
(1, 1, 3, 32, 0),
(4, 1, 5, 29, 0),
(5, 1, 5, 29, 0),
(6, 1, 5, 29, 0),
(7, 1, 5, 29, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesores`
--

CREATE TABLE `profesores` (
  `id` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `apellido` varchar(30) NOT NULL,
  `direccion` varchar(100) NOT NULL,
  `telefono` varchar(15) NOT NULL,
  `eliminado` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `profesores`
--

INSERT INTO `profesores` (`id`, `nombre`, `apellido`, `direccion`, `telefono`, `eliminado`) VALUES
(1, 'Carlos Julio', 'Cadena Sarasty', 'calle X # Y # Z', '325465', 0),
(2, 'CARLOS JULIO', 'CADENA SARASTY', 'calle X # Y # Z', '325465', 0),
(3, 'HECTOR', 'GONZALES', 'calle X # Y # Z', '325465', 0),
(4, 'MARIA DEL CARMEN', 'AGUDELO', 'calle X # Y # Z', '325465', 0),
(5, 'MARIA', 'CONCEPCIÓN', 'calle X # Y # Z', '325465', 0),
(6, 'PEDRO', 'LOPEZ', 'calle X # Y # Z', '325465', 0),
(7, 'caliche', 'cadena', 'sss123', '1234aaa', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `idRol` int(11) NOT NULL,
  `nombreRol` varchar(30) NOT NULL,
  `eliminado` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`idRol`, `nombreRol`, `eliminado`) VALUES
(1, 'Administrador', 0),
(4, 'administrador', 0),
(5, 'profesor', 0),
(7, 'estudiante', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `idUser` int(11) NOT NULL,
  `nombre` varchar(30) DEFAULT NULL,
  `correoElectronico` varchar(100) NOT NULL,
  `contrasena` char(35) NOT NULL,
  `resetContrasena` tinyint(1) NOT NULL,
  `idRol` int(11) DEFAULT NULL,
  `eliminado` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`idUser`, `nombre`, `correoElectronico`, `contrasena`, `resetContrasena`, `idRol`, `eliminado`) VALUES
(1, 'administrador', 'admin@gmail.com', '25f9e794323b453885f5181f1b624d0b', 0, 1, 0),
(3, 'carlos', 'cjsarasty@gmail.com', 'e807f1fcf82d132f9bb018ca6738a19f', 0, NULL, 0),
(4, 'carlos', 'carlos@email.com', 'e807f1fcf82d132f9bb018ca6738a19f', 0, 1, 0),
(5, 'harley', 'harleymendoza86@gmail.com', '5d6bf59432a89721750c339bf092d190', 0, NULL, 0),
(6, 'HARLEY DAVIDSON', 'mendoza@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 0, 4, 0),
(7, 'harley', 'harley@gmail.com', '25f9e794323b453885f5181f1b624d0b', 0, NULL, 0),
(8, 'yuber', 'yuber@gmail.com', '25f9e794323b453885f5181f1b624d0b', 0, NULL, 0),
(9, 'thalia', 'thalia@gmail.com', '202cb962ac59075b964b07152d234b70', 0, NULL, 0),
(10, 'thalia', 'thalia23@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 0, NULL, 0),
(11, 'thalia', 'thalia238@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 0, NULL, 0),
(12, 'leidy', 'halo@gmail.com', '25f9e794323b453885f5181f1b624d0b', 0, 7, 0),
(13, 'ANGIE', 'angie@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 0, 1, 0),
(14, 'harley', 'harley23@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 0, 1, 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cursos`
--
ALTER TABLE `cursos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cursoProfesor` (`idProfesor`);

--
-- Indices de la tabla `estudiante`
--
ALTER TABLE `estudiante`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `unicoidentificacion` (`documentoIdentidad`);

--
-- Indices de la tabla `matricula`
--
ALTER TABLE `matricula`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cursoMatricula` (`idCurso`),
  ADD KEY `estudianteMatricula` (`idEstudiante`);

--
-- Indices de la tabla `modulo`
--
ALTER TABLE `modulo`
  ADD PRIMARY KEY (`idModulo`);

--
-- Indices de la tabla `notas`
--
ALTER TABLE `notas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `notaMatricula` (`idMatricula`);

--
-- Indices de la tabla `pagina`
--
ALTER TABLE `pagina`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idModulo` (`idModulo`);

--
-- Indices de la tabla `permiso`
--
ALTER TABLE `permiso`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idModulo` (`idModulo`),
  ADD KEY `idPagina` (`idPagina`),
  ADD KEY `idRol` (`idRol`);

--
-- Indices de la tabla `profesores`
--
ALTER TABLE `profesores`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`idRol`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idUser`),
  ADD KEY `idRol` (`idRol`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cursos`
--
ALTER TABLE `cursos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `estudiante`
--
ALTER TABLE `estudiante`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `matricula`
--
ALTER TABLE `matricula`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `modulo`
--
ALTER TABLE `modulo`
  MODIFY `idModulo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `notas`
--
ALTER TABLE `notas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `pagina`
--
ALTER TABLE `pagina`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT de la tabla `permiso`
--
ALTER TABLE `permiso`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `profesores`
--
ALTER TABLE `profesores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `rol`
--
ALTER TABLE `rol`
  MODIFY `idRol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `cursos`
--
ALTER TABLE `cursos`
  ADD CONSTRAINT `cursoProfesor` FOREIGN KEY (`idProfesor`) REFERENCES `profesores` (`id`);

--
-- Filtros para la tabla `matricula`
--
ALTER TABLE `matricula`
  ADD CONSTRAINT `cursoMatricula` FOREIGN KEY (`idCurso`) REFERENCES `cursos` (`id`),
  ADD CONSTRAINT `estudianteMatricula` FOREIGN KEY (`idEstudiante`) REFERENCES `estudiante` (`id`);

--
-- Filtros para la tabla `notas`
--
ALTER TABLE `notas`
  ADD CONSTRAINT `notaMatricula` FOREIGN KEY (`idMatricula`) REFERENCES `matricula` (`id`);

--
-- Filtros para la tabla `pagina`
--
ALTER TABLE `pagina`
  ADD CONSTRAINT `pagina_ibfk_1` FOREIGN KEY (`idModulo`) REFERENCES `modulo` (`idModulo`);

--
-- Filtros para la tabla `permiso`
--
ALTER TABLE `permiso`
  ADD CONSTRAINT `permiso_ibfk_2` FOREIGN KEY (`idPagina`) REFERENCES `pagina` (`id`),
  ADD CONSTRAINT `permiso_ibfk_3` FOREIGN KEY (`idRol`) REFERENCES `rol` (`idRol`),
  ADD CONSTRAINT `permiso_ibfk_4` FOREIGN KEY (`idModulo`) REFERENCES `modulo` (`idModulo`);

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`idRol`) REFERENCES `rol` (`idRol`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
