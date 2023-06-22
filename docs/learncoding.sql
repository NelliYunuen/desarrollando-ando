-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-06-2021 a las 20:49:51
-- Versión del servidor: 10.4.19-MariaDB
-- Versión de PHP: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `learncoding`
--
CREATE DATABASE IF NOT EXISTS `learncoding` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `learncoding`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admins`
--

CREATE TABLE `admins` (
  `idAdmin` int(11) NOT NULL COMMENT 'Clave primaria de de la tabla admins',
  `usuario` varchar(25) NOT NULL COMMENT 'Campo para el nombre de usuario con un máximo de 25 caracteres',
  `password` varchar(255) NOT NULL COMMENT 'Campo para la contraseña del usuario administrador con capacidad de 255 caracteres por la encriptación'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `admins`
--

INSERT INTO `admins` (`idAdmin`, `usuario`, `password`) VALUES
(2, 'admin', '$2y$10$gx2UPi1hV6HdxQ1mvUS09.X5/Ku4Xf/4/sPnF0pVv15EkIvY31fKe'),
(3, 'Susi', '$2y$10$35BEKSl1Bba6tzIgaa5psuqUX0A7iwAE93zKSMAZ7UaZr.YTrHdsC'),
(4, 'Nelli', '$2y$10$h6fP1mXhYS6JzhvR.bB49Opq3Z0iBv1o2YYC3YXmZsxMBNtWf6WBa');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `catcursos`
--

CREATE TABLE `catcursos` (
  `idCurso` int(11) NOT NULL COMMENT 'Clave primaría de la tabla catcursos',
  `curso` char(15) NOT NULL COMMENT 'Campo para el nombre del curso'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `catcursos`
--

INSERT INTO `catcursos` (`idCurso`, `curso`) VALUES
(4, 'Bootstrap'),
(2, 'CSS'),
(1, 'HTML'),
(3, 'JavaScript');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usercurso`
--

CREATE TABLE `usercurso` (
  `idUser` int(11) NOT NULL COMMENT 'Clave primaria de la tabla usercurso',
  `email` varchar(60) NOT NULL COMMENT 'Campo para el email del usuario',
  `idCurso` int(11) NOT NULL COMMENT 'Id del curso que será tomado de la tabla catcursos'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usercurso`
--

INSERT INTO `usercurso` (`idUser`, `email`, `idCurso`) VALUES
(1, 'user2@learn.com', 2),
(2, 'user1@learn.com', 1),
(3, 'user5@learn.com', 2),
(4, 'user6@learn.com', 3),
(5, 'user6@learn.com', 3),
(6, '0', 0),
(7, '0', 0),
(8, '0', 0),
(9, '0', 0),
(10, 'user1learn@coding.com', 4),
(11, 'user111@learn.com', 4),
(12, 'susi@learn.com', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `idUser` int(11) NOT NULL COMMENT 'Cave primaria de la tabla ''usuarios''',
  `nombre` varchar(25) NOT NULL COMMENT 'Campo para el nombre del usuario con una capacidad máxima de de 25 caracteres',
  `apellido` varchar(25) NOT NULL COMMENT 'Campo para el apellido del usuario con una capacidad máxima de de 25 caracteres',
  `email` varchar(200) NOT NULL COMMENT 'Campo para el email del usuario con una capacidad máxima de 200 caracteres',
  `password` varchar(255) NOT NULL COMMENT 'Campo para la contraseña proporcionada por el usuario con una capacidad máxima de 255 caracteres, esto por la encriptación.'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`idUser`, `nombre`, `apellido`, `email`, `password`) VALUES
(1, 'Usuario', 'uno', 'user1learn@coding.com', '$2y$10$xesYrHvgTiwk86aTncw1ceQoPftC1oTah9JNrBYr5sZkyHhviBrYW'),
(3, 'usuario', '2', 'usuario1@learn.com', '$2y$10$e/EBcRYk0EBlRpUQgOaBC.PC.UzPgZWm9WSWCzEkDPga9T.O2h4Iy'),
(4, 'usuario', '3', 'usuario3@learn.com', '$2y$10$ARyu0ZyhglVKW.55wKoZKepqB0aOJMINgsOaqTcx8WgDMwArKfVou'),
(5, 'user', '4', 'user4@learn.com', '$2y$10$AeL7EL7DtSnfH7VIuj4ZiOHk0RCDI84KP3BWWhSoYyq1Rotk0nw56'),
(6, 'user', '5', 'user5@learn.com', '$2y$10$JyrI/tkPOL5rIdKShh2/qeLfCj7iy2AeDnpwDgdj7lsLy5z4bXgeC'),
(7, 'user', '6', 'user6@learn.com', '$2y$10$qHd3WFJb52Ff25WZa1tcsuF2UMFTxbzAofv3/kGnVhYnnxTvB/zpu'),
(8, 'Susi', 'García', 'susi@gmail.com', '$2y$10$cgzuMHBa21UovSG5hawUROlrThzXvKr/WSnJnDK.mwVuq/83nAZJe');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`idAdmin`),
  ADD UNIQUE KEY `usuario` (`usuario`);

--
-- Indices de la tabla `catcursos`
--
ALTER TABLE `catcursos`
  ADD PRIMARY KEY (`idCurso`),
  ADD KEY `curso` (`curso`);

--
-- Indices de la tabla `usercurso`
--
ALTER TABLE `usercurso`
  ADD PRIMARY KEY (`idUser`),
  ADD KEY `idCurso` (`idCurso`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`idUser`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `admins`
--
ALTER TABLE `admins`
  MODIFY `idAdmin` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Clave primaria de de la tabla admins', AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `catcursos`
--
ALTER TABLE `catcursos`
  MODIFY `idCurso` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Clave primaría de la tabla catcursos', AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `usercurso`
--
ALTER TABLE `usercurso`
  MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Clave primaria de la tabla usercurso', AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Cave primaria de la tabla ''usuarios''', AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
