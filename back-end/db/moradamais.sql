-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 26-Out-2020 às 22:38
-- Versão do servidor: 10.4.6-MariaDB
-- versão do PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `moradiamais`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(50)  NOT NULL,
  'last_name' varchar(100) NOT NULL,
  `user_email` varchar(150) NOT NULL,
  `user_cpf` varchar(11) NOT NULL,
  `user_pass` varchar(32) NULL,
  `user_img` varchar(400) NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8_general_ci;


CREATE TABLE `admin` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(50)  NOT NULL,
  'last_name' varchar(100) NOT NULL,
  `user_email` varchar(150) NOT NULL,
  `user_cpf` varchar(11) NOT NULL,
  `user_pass` varchar(32) NULL,
  `user_img` varchar(400) NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8_general_ci;
--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`user_name`, `user_email`, `user_cpf`, `user_pass`, `user_img`) VALUES
('silva', 'silvana@silvana', 2147483647, '$2y$10$jnnFIi6JRbZrG3hjBRo37uMWI', 'img/unnamed.png'),
('carlos', 'rodrigo@rodrigo', 2147483647, '$2y$10$Ypv4viEpH2A8qGZ/hvEa2ujlO', 'img/imagem-rosto.jpeg');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `id_user` (`id_user`);

--
--


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
