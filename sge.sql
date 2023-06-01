-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 01-Jun-2023 às 22:53
-- Versão do servidor: 10.4.27-MariaDB
-- versão do PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `sge`
--
CREATE DATABASE IF NOT EXISTS `sge` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `sge`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `sge_alunos`
--

DROP TABLE IF EXISTS `sge_alunos`;
CREATE TABLE `sge_alunos` (
  `id_aluno` int(100) NOT NULL,
  `nome_aluno` varchar(200) NOT NULL,
  `idade_aluno` int(100) NOT NULL,
  `email_aluno` varchar(150) NOT NULL,
  `celular_aluno` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Extraindo dados da tabela `sge_alunos`
--

INSERT INTO `sge_alunos` (`id_aluno`, `nome_aluno`, `idade_aluno`, `email_aluno`, `celular_aluno`) VALUES
(14, 'Jéssica', 1, 'jessica@umc.br', '(11) 94652-4862'),
(23, 'Gustavo', 16, 'gustavo@umc.br', '(11) 96434-5528');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `sge_alunos`
--
ALTER TABLE `sge_alunos`
  ADD PRIMARY KEY (`id_aluno`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `sge_alunos`
--
ALTER TABLE `sge_alunos`
  MODIFY `id_aluno` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
