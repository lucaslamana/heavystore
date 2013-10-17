-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tempo de Geração: 18/10/2013 às 01:19
-- Versão do servidor: 5.5.32
-- Versão do PHP: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de dados: `heavystore`
--
CREATE DATABASE IF NOT EXISTS `heavystore` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `heavystore`;

-- --------------------------------------------------------

--
-- Estrutura para tabela `administrador`
--

CREATE TABLE IF NOT EXISTS `administrador` (
  `id` int(2) NOT NULL AUTO_INCREMENT,
  `nome` varchar(200) NOT NULL,
  `usuario` varchar(25) NOT NULL,
  `senha` varchar(10) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `usuario` (`usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura para tabela `fotos`
--

CREATE TABLE IF NOT EXISTS `fotos` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `foto` varchar(250) NOT NULL,
  `produtosid` int(4) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FKfotos458935` (`produtosid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura para tabela `produtos`
--

CREATE TABLE IF NOT EXISTS `produtos` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `descricao` varchar(200) NOT NULL,
  `tipo` int(10) NOT NULL,
  `valor` double NOT NULL,
  `quantidade` int(4) NOT NULL,
  `tamanho` varchar(4) DEFAULT NULL,
  `cor` varchar(15) DEFAULT NULL,
  `material` varchar(20) DEFAULT NULL,
  `duracao` time DEFAULT NULL,
  `relacaomusicas` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `nome` varchar(200) NOT NULL,
  `email` varchar(250) NOT NULL,
  `usuario` varchar(25) NOT NULL,
  `senha` varchar(10) NOT NULL,
  `nascimento` date NOT NULL,
  `sexo` varchar(1) NOT NULL,
  `fone` int(10) NOT NULL,
  `cidade` varchar(200) NOT NULL,
  `uf` varchar(2) NOT NULL,
  `logradouro` varchar(300) NOT NULL,
  `bairro` varchar(200) NOT NULL,
  `cep` varchar(8) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `usuario` (`usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Restrições para dumps de tabelas
--

--
-- Restrições para tabelas `fotos`
--
ALTER TABLE `fotos`
  ADD CONSTRAINT `FKfotos458935` FOREIGN KEY (`produtosid`) REFERENCES `produtos` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
