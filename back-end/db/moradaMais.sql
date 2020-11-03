-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 03/11/2020 às 15:54
-- Versão do servidor: 10.4.13-MariaDB
-- Versão do PHP: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `moradaMais`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) UNSIGNED NOT NULL,
  `nome` varchar(50) NOT NULL,
  `admin_email` varchar(150) NOT NULL,
  `admin_pass` varchar(100) NOT NULL,
  `nivel` tinyint(1) UNSIGNED NOT NULL,
  `cadastro` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `admin`
--

INSERT INTO `admin` (`id_admin`, `nome`, `admin_email`, `admin_pass`, `nivel`, `cadastro`) VALUES
(6, 'admin', 'admin@admin', '6216f8a75fd5bb3d5f22b6f9958cdede3fc086c2', 2, '2020-11-03 13:17:29');

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `user_id` int(11) UNSIGNED NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `user_pass` varchar(100) NOT NULL,
  `user_cpf` varchar(11) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_img` varchar(200) DEFAULT NULL,
  `user_nivel` tinyint(1) UNSIGNED NOT NULL DEFAULT 1,
  `user_ativo` tinyint(1) NOT NULL DEFAULT 1,
  `check_locador` tinyint(1) DEFAULT NULL,
  `check_locatario` tinyint(1) DEFAULT NULL,
  `regiao` varchar(50) DEFAULT NULL,
  `descricao_imovel` varchar(500) DEFAULT NULL,
  `imgCasa1` varchar(200) DEFAULT NULL,
  `imgCasa2` varchar(200) DEFAULT NULL,
  `cadastro` datetime DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `usuarios`
--

INSERT INTO `usuarios` (`user_id`, `first_name`, `last_name`, `user_pass`, `user_cpf`, `user_email`, `user_img`, `user_nivel`, `user_ativo`, `check_locador`, `check_locatario`, `regiao`, `descricao_imovel`, `imgCasa1`, `imgCasa2`, `cadastro`) VALUES
(3, 'Rodrigo Aparecido de Assunção', 'Reis', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', '99999999999', 'rodrigoassuncao12@gmail.com', 'moradaMais/img/clienteImagens/fotoCliente/', 1, 1, 1, 1, 'Zona Sul', 'EEEEEE', 'moradaMais/img/clienteImagens/fotosCasa/', 'moradaMais/img/clienteImagens/fotosCasa/', '2020-11-02 20:00:54');

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`),
  ADD UNIQUE KEY `admin_email` (`admin_email`);

--
-- Índices de tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `user_email` (`user_email`),
  ADD KEY `user_nivel` (`user_nivel`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `user_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
