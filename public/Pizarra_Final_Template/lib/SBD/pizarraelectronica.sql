-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-09-2019 a las 14:00:02
-- Versión del servidor: 10.3.16-MariaDB
-- Versión de PHP: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `pizarraelectronica`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentario`
--

CREATE TABLE `comentario` (
  `comId` int(11) NOT NULL,
  `comContenido` text NOT NULL,
  `com_usuId` int(11) NOT NULL,
  `com_pubId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `comentario`
--

INSERT INTO `comentario` (`comId`, `comContenido`, `com_usuId`, `com_pubId`) VALUES
(34, 'Hola alumnos', 13, 61),
(35, 'Como estan?', 13, 61),
(36, 'bien profe aqui jugando xD', 16, 61);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `publicacion`
--

CREATE TABLE `publicacion` (
  `pubId` int(11) NOT NULL,
  `pubContenido` text NOT NULL,
  `pub_usuId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `publicacion`
--

INSERT INTO `publicacion` (`pubId`, `pubContenido`, `pub_usuId`) VALUES
(59, 'Probando la %\"#%\"#', 1),
(60, 'Holaaa !', 1),
(61, 'Hola profe\n', 1),
(62, 'Hola Aldo Como estas necesito un informe sobre el colegio Castro Ramos, lo mandas al correo institucional, con copia a Karen Claro', 13);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `usuId` int(11) NOT NULL,
  `usuNombre` varchar(50) NOT NULL,
  `usuApePaterno` varchar(50) NOT NULL,
  `usuApeMaterno` varchar(50) DEFAULT NULL,
  `usuSexo` varchar(15) NOT NULL,
  `usuEstablecimiento` varchar(100) NOT NULL,
  `usuTipo` varchar(15) NOT NULL,
  `usuCorreo` varchar(100) NOT NULL,
  `usuClave` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`usuId`, `usuNombre`, `usuApePaterno`, `usuApeMaterno`, `usuSexo`, `usuEstablecimiento`, `usuTipo`, `usuCorreo`, `usuClave`) VALUES
(1, 'Aldo', 'Francino', NULL, 'Masculino', 'Cormudesi - Casa Central', 'Administrador', 'aldo.francino@cormudesi.cl', 'c5bab1b44c49c9c77e21a47effa9f7f1'),
(12, 'Jorge ', 'Cubillos', NULL, 'Masculino', 'Cormudesi - Casa Central', 'Administrador', 'jorge.cubillos@cormudesi.cl', '321925a56703ad08d8633504ea29d795'),
(13, 'Luis ', 'Barraza', NULL, 'Masculino', 'Cormudesi - Casa Central', 'Administrador', 'luis.barraza@cormudesi.cl', '4fdbd5955c66fbbedc5d695dd51eb59b'),
(14, 'Ivette', 'Escobar', NULL, 'Femenino', 'Cormudesi - Casa Central', 'Administrador', 'ivette.escobar@cormudesi.cl', '1ef28acfa7556be791c0f9b67c086776'),
(15, 'Roisvan', 'Torres', NULL, 'Masculino', 'Cormudesi - Casa Central', 'Administrador', 'roisvan.torres@cormudesi.cl', 'c9358045cbad4731102d5bfc4a1d8c69'),
(16, 'Richard', 'Castillo', '', 'Masculino', 'Escuela Artística Violeta Parra', 'Usuario', 'richard.castillo@cormudesi.cl', '4691163383f746b9d89b73ad5cb49248'),
(17, 'Kimberly', 'Escobar', 'Galleguillos', 'Femenino', 'Liceo D.T.P Elena Duvauchelle', 'Usuario', 'kimberly.escobar@cormudesi.cl', 'cf9fa0e5046467c988daf2910993f908'),
(18, 'Ruben', 'Contreras', 'Gonzalez', 'Masculino', 'Liceo Comercial Baldomero Wolnitzky', 'Usuario', 'ruben.contreras@cormudesi.cl', '4691163383f746b9d89b73ad5cb49248'),
(19, 'Manuel', 'Vega', 'Sanchez', 'Masculino', 'Escuela Centenario', 'Usuario', 'manuel.vega@cormudesi.cl', '492e604a5898ec0b4479033651f47840');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `comentario`
--
ALTER TABLE `comentario`
  ADD PRIMARY KEY (`comId`),
  ADD KEY `FK_com_usuId` (`com_usuId`),
  ADD KEY `FK_com_pubId` (`com_pubId`);

--
-- Indices de la tabla `publicacion`
--
ALTER TABLE `publicacion`
  ADD PRIMARY KEY (`pubId`),
  ADD KEY `FK_usuId` (`pub_usuId`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`usuId`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `comentario`
--
ALTER TABLE `comentario`
  MODIFY `comId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT de la tabla `publicacion`
--
ALTER TABLE `publicacion`
  MODIFY `pubId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `usuId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `comentario`
--
ALTER TABLE `comentario`
  ADD CONSTRAINT `FK_com_pubId` FOREIGN KEY (`com_pubId`) REFERENCES `publicacion` (`pubId`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK_com_usuId` FOREIGN KEY (`com_usuId`) REFERENCES `usuarios` (`usuId`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `publicacion`
--
ALTER TABLE `publicacion`
  ADD CONSTRAINT `FK_usuId` FOREIGN KEY (`pub_usuId`) REFERENCES `usuarios` (`usuId`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
