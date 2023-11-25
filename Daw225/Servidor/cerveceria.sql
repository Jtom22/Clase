-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-11-2023 a las 23:47:52
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
-- Base de datos: `cerveceria`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cervezas`
--

CREATE TABLE `cervezas` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `tipo` varchar(10) NOT NULL,
  `graduacion_alcoholica` int(11) NOT NULL,
  `pais` varchar(60) NOT NULL,
  `precio` int(11) NOT NULL,
  `ruta_imagen` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `cervezas`
--

INSERT INTO `cervezas` (`id`, `nombre`, `tipo`, `graduacion_alcoholica`, `pais`, `precio`, `ruta_imagen`) VALUES
(13, 'Dos Equis', 'Rubia', 12, 'Colombia', 3, 'img/descarga.jpg'),
(14, 'Mixta', 'Tostada', 5, 'España', 2, 'img/mixta.jpg'),
(15, 'Alhambra', 'Rubia', 6, 'España', 3, 'img/alhambra-tercio-WEB.jpg'),
(18, 'Corona', 'De trigo', 7, 'Mexico', 4, 'img/cerveza-corona.png'),
(20, 'Mahou', 'Rubia', 4, 'España', 3, 'img/descarga (1).jpg'),
(21, 'Bosteel Tripel karmeliet', 'Tostada', 8, 'Belgica', 6, 'img/BOSTEELS-TRIPEL-KARMELIET.png'),
(22, 'Boon', 'Tostada', 7, 'Belgica', 4, 'img/boon-oude-gueuze-375cl.jpg'),
(23, 'Estrella Galicia', 'De trigo', 5, 'España', 2, 'img/collection-title-escerveza-3-21391431630948.webp'),
(24, 'BrewDog', 'Negra', 10, 'Escocia', 3, 'img/cerveza-corazon-brewdog-jet-negro-negro-escocia-ellon-47-33-cl.jpg');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cervezas`
--
ALTER TABLE `cervezas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cervezas`
--
ALTER TABLE `cervezas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
