-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 01-04-2025 a las 18:02:47
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `calendario-pediatra`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellidos` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password_hash` varchar(255) NOT NULL,
  `avatar` varchar(255) DEFAULT 'default.png',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `nombre`, `apellidos`, `email`, `password_hash`, `avatar`, `created_at`) VALUES
(1, 'Cristian', 'Harders López', 'cristian@gmail.com', '$2y$10$j562o/0OD4sRcjKBCD0rZ.zJHBWTPYvrLhQrJ8uzEP2lavGRQk5BS', 'default.png', '2025-04-01 15:30:51'),
(2, 'Franciso', 'Hidalgo', 'hidalgo@gmail.com', '$2y$10$d.4DuWpZ7nBe6ud9vSCdpeRZsVWkc7ag4F57N1Hk0Z.o9KdyzndhC', 'default.png', '2025-04-01 15:34:48'),
(3, 'Cristiano', 'Ronaldo', 'cristiano@gmail.com', '$2y$10$Rny6bR04FaQ/PXCvq9OW8eYG/76YqIusS9kXR7Evl6XPPFrATDg3K', 'default.png', '2025-04-01 15:36:09'),
(4, 'Josep', 'Pedrerol', 'chiringuito@gmail.com', '$2y$10$d3ImgCArvucwwY41Xc14XeNnCTPnfUXKAIKzv5/EwxkGrCRuUjr5y', 'default.png', '2025-04-01 15:36:33'),
(5, 'Julen', 'Lopetegui', 'julen@gmail.com', '$2y$10$qRn3xCWJ2j2OV7gwtxIzee28S6q9FyLUGN9ga0azn8UjQt17V2Joq', 'default.png', '2025-04-01 15:37:06');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
