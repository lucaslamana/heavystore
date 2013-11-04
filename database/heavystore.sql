-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tempo de Geração: 04/11/2013 às 03:10
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Fazendo dump de dados para tabela `administrador`
--

INSERT INTO `administrador` (`id`, `nome`, `usuario`, `senha`) VALUES
(1, 'Administrador', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Estrutura para tabela `fotos`
--

CREATE TABLE IF NOT EXISTS `fotos` (
  `idf` int(4) NOT NULL AUTO_INCREMENT,
  `foto` varchar(250) NOT NULL,
  `produtosid` int(4) NOT NULL,
  PRIMARY KEY (`idf`),
  KEY `FKfotos458935` (`produtosid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Fazendo dump de dados para tabela `fotos`
--

INSERT INTO `fotos` (`idf`, `foto`, `produtosid`) VALUES
(2, 'camiseta_ironmaiden_the trooper_1.jpg', 1),
(4, 'camiseta_symphony_Iconoclas_1.jpg', 2),
(5, 'cd_ironmaiden_seventhson1.jpg', 3),
(6, 'camiseta_vanhalen_1984_1.jpg', 4),
(8, 'cd_helloween_masteroftheRings.jpg', 5);

-- --------------------------------------------------------

--
-- Estrutura para tabela `historia`
--

CREATE TABLE IF NOT EXISTS `historia` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `texto` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Fazendo dump de dados para tabela `historia`
--

INSERT INTO `historia` (`id`, `texto`) VALUES
(1, 'O Heavy Metal mudou os rumos da música, Fortemente influenciado pelo blues, o gênero surgiu no início da década de 1970 com a banda inglesa Black Sabbath, liderada por Ozzy Osbourne. Num cenário musical e cultural dominado pelos hippies e o lema “paz e amor” e, em meio a um contexto de guerras e conflitos sociais, o peso do heavy metal chegou para refletir as insatisfações e a obscuridade de uma época.\r\nAs primeiras bandas de heavy metal como Led Zeppelin, Black Sabbath e Deep Purple atraíam grandes audiências, um atributo comum em toda a história do gênero.\r\nJudas Priest ajudou a impulsionar a evolução do gênero suprimindo muito da influência do blues presente na primeira geração do metal, o Motörhead introduziu agressividade e fúria nos vocais, influência do punk rock, e uma crescente ênfase na velocidade. Bandas como Iron Maiden seguiram a mesma linha. Antes do final da década, o heavy metal tinha atraído uma sequência de fãs no mundo inteiro conhecido como "metalheads" ou "headbangers" e também como "metaleiros" em países de idioma português.');

-- --------------------------------------------------------

--
-- Estrutura para tabela `produtos`
--

CREATE TABLE IF NOT EXISTS `produtos` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `descricao` varchar(200) NOT NULL,
  `tipo` varchar(20) NOT NULL,
  `valor` double NOT NULL,
  `quantidade` int(4) NOT NULL,
  `tamanho` varchar(4) DEFAULT NULL,
  `cor` varchar(15) DEFAULT NULL,
  `material` varchar(20) DEFAULT NULL,
  `duracao` time DEFAULT NULL,
  `relacaomusicas` text,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Fazendo dump de dados para tabela `produtos`
--

INSERT INTO `produtos` (`id`, `nome`, `descricao`, `tipo`, `valor`, `quantidade`, `tamanho`, `cor`, `material`, `duracao`, `relacaomusicas`) VALUES
(1, 'Iron Maiden', 'The Trooper', 'Camiseta', 50, 1, 'GG', 'Preta', '100% Algodão', NULL, NULL),
(2, 'Symphony X', 'Iconoclast', 'Camiseta ', 55, 2, 'GG', 'Preta', '100% Algodão', NULL, NULL),
(3, 'Iron Maiden', 'Seventh Son of a Seventh Son', 'CD', 35.5, 5, NULL, NULL, NULL, '00:44:00', '01 - Moonchild\r\n02 - Infinite Dreams\r\n03 - Can I Play with Madness\r\n04 - The Evil That Men Do\r\n05 - Seventh Son of a Seventh Son\r\n06 - The Prophecy\r\n07 - The Clairvoyant\r\n08 - Only the Good Die Young\r\n'),
(4, 'Van Hallen', '1084', 'Camiseta', 25, 10, 'PP', 'Preta', '100% Algodão', NULL, NULL),
(5, 'Helloween', 'Master of the Rings', 'CD', 34.9, 5, NULL, NULL, NULL, '00:00:00', '01 - Irritation\r\n02 - Sole Survivor\r\n03 - Where the Rain Grows\r\n04 - Why?\r\n05 - Mr. Ego\r\n06 - Perfect Gentleman\r\n07 - The Game Is On\r\n08 - Secret Alibi\r\n09 - Take Me Home\r\n10 - In the Middle of a Heartbeat\r\n11 - Still We Go');

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
