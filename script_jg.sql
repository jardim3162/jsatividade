-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 23/11/2024 às 01:54
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `script_jg`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `musica`
--

CREATE TABLE `musica` (
  `id_titulo` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `artista` varchar(255) NOT NULL,
  `genero` varchar(255) NOT NULL,
  `ano` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `musica`
--

INSERT INTO `musica` (`id_titulo`, `titulo`, `artista`, `genero`, `ano`) VALUES
(4, 'Heaven Can Wait', 'Michael Jackson', 'Pop', 2001),
(3, 'Você me vira a cabeça', 'Alcione', 'MPB', 1997),
(5, 'Melhor eu ir', 'Péricles ', 'Pagode', 2015),
(6, 'Aerials', 'System Of a Down', 'Rock', 2001),
(7, 'Spit it Out', 'Slipknot', 'Rock/Metal', 1999),
(8, 'Mina do Condomínio ', 'Seu Jorge', 'Samba', 2006),
(9, 'Me and the devil blues ', 'Robert Johnson ', 'Blues', 1937),
(10, 'Faz uma loucura por mim', 'Alcione', 'MPB', 1997);

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `musica`
--
ALTER TABLE `musica`
  ADD PRIMARY KEY (`id_titulo`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `musica`
--
ALTER TABLE `musica`
  MODIFY `id_titulo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
