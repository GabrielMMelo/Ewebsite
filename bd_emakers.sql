-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 13/02/2018 às 22:25
-- Versão do servidor: 10.1.26-MariaDB-0+deb9u1
-- Versão do PHP: 7.0.27-0+deb9u1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bd_emakers`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `equipe`
--

CREATE TABLE `equipe` (
  `integrante_id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `atuacao` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Fazendo dump de dados para tabela `equipe`
--

INSERT INTO `equipe` (`integrante_id`, `nome`, `atuacao`) VALUES
(1, 'Bruno Abreu', 'Coordenador'),
(2, 'Wiliian ', 'Professor'),
(3, 'Adalberto', 'Técnico'),
(4, 'Paulo A.', 'Professor'),
(5, 'Gabriel Melo', 'Presidente'),
(6, 'Bruno Queiroz ', 'Diretor de projetos'),
(7, 'Franciscone', 'Diretor GP');

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `equipe`
--
ALTER TABLE `equipe`
  ADD PRIMARY KEY (`integrante_id`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `equipe`
--
ALTER TABLE `equipe`
  MODIFY `integrante_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
