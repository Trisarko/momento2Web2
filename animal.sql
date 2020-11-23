-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-11-2020 a las 23:33:37
-- Versión del servidor: 10.4.6-MariaDB
-- Versión de PHP: 7.1.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `animal`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registry`
--

CREATE TABLE `registry` (
  `id` int(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `age` varchar(100) NOT NULL,
  `type` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL,
  `food` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `registry`
--

INSERT INTO `registry` (`id`, `name`, `age`, `type`, `description`, `food`) VALUES
(2, 'Sin nombre', '3 años aprox', 'Silvestre', 'Tucán herido de ala izquierda', 'Semillas'),
(3, 'Esperanza', '6 meses', 'Doméstico', 'Gata en estado de embarazo color cafe', 'Cuido y comida de sal'),
(4, 'Gonta', '5 años', 'Doméstico', 'Perra Negra con blanco de estatura mediana', 'Cuido'),
(5, 'Sin nombre', '2 años aprox', 'Silvestre', 'Armadillo pequeño', 'Semillas'),
(6, 'Kira', '8 años', 'Doméstico', 'Gato atigrado, sin cola, talla grande', 'Cuido'),
(7, 'Canela', '5 años', 'Doméstico', 'Perra café, sin un ojo, talla mediana', 'Cuido y comida de sal'),
(8, 'Maporita', '6 años', 'Doméstico', 'Perra color ocre, talla mediana, contextura gruesa', 'Cuido y comida de sal'),
(9, 'Pepe', '4 años', 'Silvestre', 'Mono Tití mediano, altos niveles de desnutrición.', 'Frutas y comida de sal'),
(10, 'Sin nombre', 'indefinida', 'Silvestre', 'Mapache pequeño, herido de una pata', 'Frutas, semillas y carne'),
(11, 'Tiger', '2 años', 'Doméstico', 'Gato amarillo, talla grande', 'Cuido');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `registry`
--
ALTER TABLE `registry`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `registry`
--
ALTER TABLE `registry`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
