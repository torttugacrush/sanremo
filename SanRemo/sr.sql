-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-04-2019 a las 23:21:02
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sr`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `acceso`
--

CREATE TABLE `acceso` (
  `login` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `clave` varchar(8) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumno`
--

CREATE TABLE `alumno` (
  `idAlumno` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `nom_Paterno` varchar(40) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nom_Materno` varchar(40) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Grado` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `idDetalleContacto` int(11) NOT NULL,
  `Fecha_Edit` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asistencias`
--

CREATE TABLE `asistencias` (
  `idAsistencias` int(11) NOT NULL,
  `num_Asistencia` char(1) COLLATE utf8_unicode_ci DEFAULT NULL,
  `num_tardanza` char(1) COLLATE utf8_unicode_ci DEFAULT NULL,
  `num_Falta` char(1) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fecha` datetime NOT NULL,
  `idCurso` int(11) NOT NULL,
  `Fecha_Edit` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `curso`
--

CREATE TABLE `curso` (
  `idCurso` int(11) NOT NULL,
  `nombre` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `horario` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `Descripcion` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Fecha_Edit` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detallecontacto`
--

CREATE TABLE `detallecontacto` (
  `idDetalleContacto` int(11) NOT NULL,
  `celular` char(9) COLLATE utf8_unicode_ci DEFAULT NULL,
  `celular2` char(9) COLLATE utf8_unicode_ci DEFAULT NULL,
  `telefono` char(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mail` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mail2` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `direccion` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `direccion2` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Fecha_Edit` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `docente`
--

CREATE TABLE `docente` (
  `idDocente` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `especialidad` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tutor_grado` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `idDetalleContacto` int(11) NOT NULL,
  `Fecha_Edit` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `matricula`
--

CREATE TABLE `matricula` (
  `idMatricula` int(11) NOT NULL,
  `idPago` int(11) NOT NULL,
  `fecha` date DEFAULT NULL,
  `Fecha_Edit` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nota`
--

CREATE TABLE `nota` (
  `idNota` int(11) NOT NULL,
  `anio` date NOT NULL,
  `Nota1` double NOT NULL,
  `Nota2` double NOT NULL,
  `Nota3` double NOT NULL,
  `Nota4` double DEFAULT NULL,
  `Promedio` double NOT NULL,
  `Recuperacion1` double DEFAULT NULL,
  `Recuperacion2` double DEFAULT NULL,
  `Estado` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Fecha_Insert` date DEFAULT NULL,
  `Fecha_Edit` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pago`
--

CREATE TABLE `pago` (
  `idPago` int(11) NOT NULL,
  `cuota` float(9,2) DEFAULT NULL,
  `descripcion` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `inporte` float(9,2) DEFAULT NULL,
  `total` float(9,2) DEFAULT NULL,
  `Fecha_Edit` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro`
--

CREATE TABLE `registro` (
  `idRegistro` int(11) NOT NULL,
  `idAlumno` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `idDocente` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `idNota` int(11) NOT NULL,
  `idCurso` int(11) NOT NULL,
  `idAsistencias` int(11) NOT NULL,
  `idMatricula` int(11) NOT NULL,
  `fecha` date DEFAULT NULL,
  `Fecha_Edit` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo`
--

CREATE TABLE `tipo` (
  `id` int(4) NOT NULL,
  `tipo` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `tipo`
--

INSERT INTO `tipo` (`id`, `tipo`) VALUES
(1, 'admin'),
(2, 'docente'),
(3, 'alumno');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `idusuario` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `nombre` varchar(55) COLLATE utf8_unicode_ci NOT NULL,
  `apellidoPaterno` varchar(55) COLLATE utf8_unicode_ci NOT NULL,
  `apellidoMaterno` varchar(55) COLLATE utf8_unicode_ci NOT NULL,
  `Fecha_nacimiento` date NOT NULL,
  `Dni` int(11) NOT NULL,
  `Sexo` int(11) NOT NULL,
  `tipo_id` int(4) NOT NULL,
  `Fecha_Insert` datetime NOT NULL,
  `Fecha_Edit` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `acceso`
--
ALTER TABLE `acceso`
  ADD PRIMARY KEY (`login`),
  ADD KEY `acceso_FKIndex1` (`login`),
  ADD KEY `IFK_Rel_01` (`login`);

--
-- Indices de la tabla `alumno`
--
ALTER TABLE `alumno`
  ADD PRIMARY KEY (`idAlumno`),
  ADD KEY `idDetalleContacto` (`idDetalleContacto`);

--
-- Indices de la tabla `asistencias`
--
ALTER TABLE `asistencias`
  ADD PRIMARY KEY (`idAsistencias`),
  ADD KEY `fk_idCursoAsist` (`idCurso`);

--
-- Indices de la tabla `curso`
--
ALTER TABLE `curso`
  ADD PRIMARY KEY (`idCurso`);

--
-- Indices de la tabla `detallecontacto`
--
ALTER TABLE `detallecontacto`
  ADD PRIMARY KEY (`idDetalleContacto`);

--
-- Indices de la tabla `docente`
--
ALTER TABLE `docente`
  ADD PRIMARY KEY (`idDocente`),
  ADD KEY `idDetalleContacto` (`idDetalleContacto`);

--
-- Indices de la tabla `matricula`
--
ALTER TABLE `matricula`
  ADD PRIMARY KEY (`idMatricula`),
  ADD KEY `idPago` (`idPago`);

--
-- Indices de la tabla `nota`
--
ALTER TABLE `nota`
  ADD PRIMARY KEY (`idNota`);

--
-- Indices de la tabla `pago`
--
ALTER TABLE `pago`
  ADD PRIMARY KEY (`idPago`);

--
-- Indices de la tabla `registro`
--
ALTER TABLE `registro`
  ADD PRIMARY KEY (`idRegistro`),
  ADD KEY `fk_idDocentes` (`idDocente`),
  ADD KEY `fk_idAlumnoos` (`idAlumno`),
  ADD KEY `fk_idNota` (`idNota`),
  ADD KEY `fk_idCurso` (`idCurso`),
  ADD KEY `fk_idAsistencias` (`idAsistencias`),
  ADD KEY `fk_idMatricula` (`idMatricula`);

--
-- Indices de la tabla `tipo`
--
ALTER TABLE `tipo`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`idusuario`),
  ADD KEY `fk_idTipo` (`tipo_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tipo`
--
ALTER TABLE `tipo`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `acceso`
--
ALTER TABLE `acceso`
  ADD CONSTRAINT `acceso_ibfk_1` FOREIGN KEY (`login`) REFERENCES `usuario` (`idusuario`);

--
-- Filtros para la tabla `alumno`
--
ALTER TABLE `alumno`
  ADD CONSTRAINT `alumno_ibfk_1` FOREIGN KEY (`idAlumno`) REFERENCES `usuario` (`idusuario`),
  ADD CONSTRAINT `alumno_ibfk_2` FOREIGN KEY (`idDetalleContacto`) REFERENCES `detallecontacto` (`idDetalleContacto`);

--
-- Filtros para la tabla `asistencias`
--
ALTER TABLE `asistencias`
  ADD CONSTRAINT `fk_idCursoAsist` FOREIGN KEY (`idCurso`) REFERENCES `curso` (`idCurso`);

--
-- Filtros para la tabla `docente`
--
ALTER TABLE `docente`
  ADD CONSTRAINT `docente_ibfk_1` FOREIGN KEY (`idDocente`) REFERENCES `usuario` (`idusuario`),
  ADD CONSTRAINT `docente_ibfk_2` FOREIGN KEY (`idDetalleContacto`) REFERENCES `detallecontacto` (`idDetalleContacto`);

--
-- Filtros para la tabla `matricula`
--
ALTER TABLE `matricula`
  ADD CONSTRAINT `matricula_ibfk_1` FOREIGN KEY (`idPago`) REFERENCES `pago` (`idPago`);

--
-- Filtros para la tabla `registro`
--
ALTER TABLE `registro`
  ADD CONSTRAINT `fk_idAlumnoos` FOREIGN KEY (`idAlumno`) REFERENCES `alumno` (`idAlumno`),
  ADD CONSTRAINT `fk_idAlumnos` FOREIGN KEY (`idAlumno`) REFERENCES `alumno` (`idAlumno`),
  ADD CONSTRAINT `fk_idAsistencias` FOREIGN KEY (`idAsistencias`) REFERENCES `asistencias` (`idAsistencias`),
  ADD CONSTRAINT `fk_idCurso` FOREIGN KEY (`idCurso`) REFERENCES `curso` (`idCurso`),
  ADD CONSTRAINT `fk_idDocentes` FOREIGN KEY (`idDocente`) REFERENCES `docente` (`idDocente`),
  ADD CONSTRAINT `fk_idMatricula` FOREIGN KEY (`idMatricula`) REFERENCES `matricula` (`idMatricula`),
  ADD CONSTRAINT `fk_idNota` FOREIGN KEY (`idNota`) REFERENCES `nota` (`idNota`);

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `fk_idTipo` FOREIGN KEY (`tipo_id`) REFERENCES `tipo` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
