-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-03-2026 a las 20:57:43
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
-- Base de datos: `anime`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `animecreador`
--

CREATE TABLE `animecreador` (
  `AnimeID` int(11) NOT NULL,
  `CreadorID` int(11) NOT NULL,
  `Rol` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `animecreador`
--

INSERT INTO `animecreador` (`AnimeID`, `CreadorID`, `Rol`) VALUES
(1, 1, 'Autor'),
(2, 2, 'Autor'),
(3, 3, 'Autor'),
(4, 4, 'Autor'),
(5, 5, 'Autor');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `animegenero`
--

CREATE TABLE `animegenero` (
  `AnimeID` int(11) NOT NULL,
  `GeneroID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `animegenero`
--

INSERT INTO `animegenero` (`AnimeID`, `GeneroID`) VALUES
(1, 1),
(2, 1),
(3, 3),
(4, 2),
(5, 1),
(6, 3),
(7, 4),
(8, 1),
(9, 1),
(10, 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `animepersonaje`
--

CREATE TABLE `animepersonaje` (
  `AnimeID` int(11) NOT NULL,
  `PersonajeID` int(11) NOT NULL,
  `Rol` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `animepersonaje`
--

INSERT INTO `animepersonaje` (`AnimeID`, `PersonajeID`, `Rol`) VALUES
(1, 1, 'Protagonista'),
(2, 2, 'Protagonista'),
(3, 3, 'Protagonista'),
(4, 4, 'Protagonista'),
(5, 5, 'Protagonista'),
(6, 6, 'Protagonista'),
(7, 7, 'Antagonista'),
(8, 8, 'Protagonista'),
(9, 9, 'Protagonista'),
(10, 10, 'Protagonista');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `animes`
--

CREATE TABLE `animes` (
  `AnimeID` int(11) NOT NULL,
  `Titulo` varchar(150) NOT NULL,
  `AnioLanzamiento` year(4) DEFAULT NULL,
  `EstudioID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `animes`
--

INSERT INTO `animes` (`AnimeID`, `Titulo`, `AnioLanzamiento`, `EstudioID`) VALUES
(1, 'Attack on Titan', '2013', 5),
(2, 'Demon Slayer', '2019', 2),
(3, 'My Hero Academia', '2016', 3),
(4, 'One Piece', '1999', 4),
(5, 'Jujutsu Kaisen', '2020', 1),
(6, 'Naruto', '2002', 6),
(7, 'Death Note', '2006', 7),
(8, 'Sword Art Online', '2012', 8),
(9, 'Kill la Kill', '2013', 9),
(10, 'The Promised Neverland', '2019', 10);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `creadores`
--

CREATE TABLE `creadores` (
  `CreadorID` int(11) NOT NULL,
  `Nombre` varchar(100) DEFAULT NULL,
  `Nacionalidad` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `creadores`
--

INSERT INTO `creadores` (`CreadorID`, `Nombre`, `Nacionalidad`) VALUES
(1, 'Hajime Isayama', 'Japón'),
(2, 'Koyoharu Gotouge', 'Japón'),
(3, 'Kohei Horikoshi', 'Japón'),
(4, 'Eiichiro Oda', 'Japón'),
(5, 'Gege Akutami', 'Japón');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudios`
--

CREATE TABLE `estudios` (
  `EstudioID` int(11) NOT NULL,
  `Nombre` varchar(100) NOT NULL,
  `Pais` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `estudios`
--

INSERT INTO `estudios` (`EstudioID`, `Nombre`, `Pais`) VALUES
(1, 'MAPPA', 'Japón'),
(2, 'Ufotable', 'Japón'),
(3, 'Bones', 'Japón'),
(4, 'Toei Animation', 'Japón'),
(5, 'Wit Studio', 'Japón'),
(6, 'Studio Pierrot', 'Japón'),
(7, 'Madhouse', 'Japón'),
(8, 'A-1 Pictures', 'Japón'),
(9, 'Trigger', 'Japón'),
(10, 'CloverWorks', 'Japón');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `generos`
--

CREATE TABLE `generos` (
  `GeneroID` int(11) NOT NULL,
  `Nombre` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `generos`
--

INSERT INTO `generos` (`GeneroID`, `Nombre`) VALUES
(1, 'Acción'),
(2, 'Aventura'),
(3, 'Shonen'),
(4, 'Fantasia'),
(5, 'Drama');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personajes`
--

CREATE TABLE `personajes` (
  `PersonajeID` int(11) NOT NULL,
  `Nombre` varchar(100) NOT NULL,
  `Poder` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `personajes`
--

INSERT INTO `personajes` (`PersonajeID`, `Nombre`, `Poder`) VALUES
(1, 'Eren Yeager', 'Titán'),
(2, 'Tanjiro Kamado', 'Respiración de agua'),
(3, 'Izuku Midoriya', 'One For All'),
(4, 'Monkey D. Luffy', 'Goma'),
(5, 'Yuji Itadori', 'Energía maldita'),
(6, 'Naruto Uzumaki', 'Chakra Kurama'),
(7, 'Light Yagami', 'Death Note'),
(8, 'Kirito', 'Espadachín'),
(9, 'Ryuko Matoi', 'Combate'),
(10, 'Emma', 'Inteligencia');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `animecreador`
--
ALTER TABLE `animecreador`
  ADD PRIMARY KEY (`AnimeID`,`CreadorID`),
  ADD KEY `CreadorID` (`CreadorID`);

--
-- Indices de la tabla `animegenero`
--
ALTER TABLE `animegenero`
  ADD PRIMARY KEY (`AnimeID`,`GeneroID`),
  ADD KEY `GeneroID` (`GeneroID`);

--
-- Indices de la tabla `animepersonaje`
--
ALTER TABLE `animepersonaje`
  ADD PRIMARY KEY (`AnimeID`,`PersonajeID`),
  ADD KEY `PersonajeID` (`PersonajeID`);

--
-- Indices de la tabla `animes`
--
ALTER TABLE `animes`
  ADD PRIMARY KEY (`AnimeID`),
  ADD KEY `EstudioID` (`EstudioID`);

--
-- Indices de la tabla `creadores`
--
ALTER TABLE `creadores`
  ADD PRIMARY KEY (`CreadorID`);

--
-- Indices de la tabla `estudios`
--
ALTER TABLE `estudios`
  ADD PRIMARY KEY (`EstudioID`);

--
-- Indices de la tabla `generos`
--
ALTER TABLE `generos`
  ADD PRIMARY KEY (`GeneroID`);

--
-- Indices de la tabla `personajes`
--
ALTER TABLE `personajes`
  ADD PRIMARY KEY (`PersonajeID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `animes`
--
ALTER TABLE `animes`
  MODIFY `AnimeID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `creadores`
--
ALTER TABLE `creadores`
  MODIFY `CreadorID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `estudios`
--
ALTER TABLE `estudios`
  MODIFY `EstudioID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `generos`
--
ALTER TABLE `generos`
  MODIFY `GeneroID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `personajes`
--
ALTER TABLE `personajes`
  MODIFY `PersonajeID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `animecreador`
--
ALTER TABLE `animecreador`
  ADD CONSTRAINT `animecreador_ibfk_1` FOREIGN KEY (`AnimeID`) REFERENCES `animes` (`AnimeID`),
  ADD CONSTRAINT `animecreador_ibfk_2` FOREIGN KEY (`CreadorID`) REFERENCES `creadores` (`CreadorID`);

--
-- Filtros para la tabla `animegenero`
--
ALTER TABLE `animegenero`
  ADD CONSTRAINT `animegenero_ibfk_1` FOREIGN KEY (`AnimeID`) REFERENCES `animes` (`AnimeID`),
  ADD CONSTRAINT `animegenero_ibfk_2` FOREIGN KEY (`GeneroID`) REFERENCES `generos` (`GeneroID`);

--
-- Filtros para la tabla `animepersonaje`
--
ALTER TABLE `animepersonaje`
  ADD CONSTRAINT `animepersonaje_ibfk_1` FOREIGN KEY (`AnimeID`) REFERENCES `animes` (`AnimeID`),
  ADD CONSTRAINT `animepersonaje_ibfk_2` FOREIGN KEY (`PersonajeID`) REFERENCES `personajes` (`PersonajeID`);

--
-- Filtros para la tabla `animes`
--
ALTER TABLE `animes`
  ADD CONSTRAINT `animes_ibfk_1` FOREIGN KEY (`EstudioID`) REFERENCES `estudios` (`EstudioID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
