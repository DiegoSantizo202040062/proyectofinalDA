-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-09-2021 a las 05:06:01
-- Versión del servidor: 10.4.18-MariaDB
-- Versión de PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `pcc2021_evalfinal`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mensajes`
--

CREATE TABLE `mensajes` (
  `nombres` varchar(100) DEFAULT NULL,
  `apellidos` varchar(100) DEFAULT NULL,
  `telefono` varchar(100) DEFAULT NULL,
  `correo` varchar(100) DEFAULT NULL,
  `mensaje` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `mensajes`
--

INSERT INTO `mensajes` (`nombres`, `apellidos`, `telefono`, `correo`, `mensaje`) VALUES
('Rudy', 'Romo', '78585254', 'rromo@gmail.com', 'Hola.....'),
('Luis', 'Pino', '45124414', 'luispino@gmail.com', 'Saludos.....'),
('Paco', 'Mendoza', '98585574', 'pacomendoza@gmail.com', 'Buenas noches.....'),
('Andres', 'Paz', '77444555', 'andrespaz@gmail.com', 'Buenos dias.....'),
('Fernando', 'Palermo', '12457845', 'ferpalermo@gmail.com', 'Que tal.....');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
