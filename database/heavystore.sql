-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tempo de Geração: 13/11/2013 às 01:42
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
  `principal` tinyint(1) NOT NULL,
  PRIMARY KEY (`idf`),
  KEY `FKfotos458935` (`produtosid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Fazendo dump de dados para tabela `fotos`
--

INSERT INTO `fotos` (`idf`, `foto`, `produtosid`, `principal`) VALUES
(2, 'camiseta_ironmaiden_the trooper_1.jpg', 1, 0),
(4, 'camiseta_symphony_Iconoclas_1.jpg', 2, 0),
(5, 'cd_ironmaiden_seventhson1.jpg', 3, 0),
(6, 'camiseta_vanhalen_1984_1.jpg', 4, 0),
(8, 'cd_helloween_masteroftheRings.jpg', 5, 0),
(9, 'camiseta_ironmaiden_the trooper_2.jpg', 1, 1),
(10, 'camiseta_symphony_Iconoclas_2.jpg', 2, 1),
(11, 'camiseta_vanhalen_1984_2.jpg', 4, 1),
(12, 'cd_ironmaiden_seventhson2.jpg', 3, 1),
(13, 'bandeira_acdc.jpg', 6, 0),
(14, 'dvd_blacksabbath_paranoid.jpg', 7, 0),
(15, 'camiseta_manowar_the_lord_of_steel1.jpg', 8, 0),
(16, 'camiseta_manowar_the_lord_of_steel2.jpg', 8, 1),
(17, 'camiseta_angra_aqua1.jpg', 9, 0),
(18, 'camiseta_angra_aqua2.jpg', 9, 1),
(19, 'dvd_judas_priest_epitaph.jpg', 10, 0),
(20, 'cd_primal_fear_unbreakable.jpg', 11, 0);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Fazendo dump de dados para tabela `produtos`
--

INSERT INTO `produtos` (`id`, `nome`, `descricao`, `tipo`, `valor`, `quantidade`, `tamanho`, `cor`, `material`, `duracao`, `relacaomusicas`) VALUES
(1, 'Iron Maiden', 'The Trooper', 'Camiseta', 50, 10, 'GG', 'Preta', '100% Algodão', NULL, NULL),
(2, 'Symphony X', 'Iconoclast', 'Camiseta', 55, 5, 'GG', 'Preta', '100% Algodão', NULL, NULL),
(3, 'Iron Maiden', 'Seventh Son of a Seventh Son', 'CD', 35.5, 5, NULL, NULL, NULL, '00:44:00', '01 - Moonchild\r\n02 - Infinite Dreams\r\n03 - Can I Play with Madness\r\n04 - The Evil That Men Do\r\n05 - Seventh Son of a Seventh Son\r\n06 - The Prophecy\r\n07 - The Clairvoyant\r\n08 - Only the Good Die Young\r\n'),
(4, 'Van Hallen', '1084', 'Camiseta', 30, 10, 'PP', 'Preta', '100% Algodão', NULL, NULL),
(5, 'Helloween', 'Master of the Rings', 'CD', 34.9, 5, NULL, NULL, NULL, '00:00:00', '01 - Irritation\r\n02 - Sole Survivor\r\n03 - Where the Rain Grows\r\n04 - Why?\r\n05 - Mr. Ego\r\n06 - Perfect Gentleman\r\n07 - The Game Is On\r\n08 - Secret Alibi\r\n09 - Take Me Home\r\n10 - In the Middle of a Heartbeat\r\n11 - Still We Go'),
(6, 'ACDC', 'Black Ice', 'Bandeira', 49.9, 2, NULL, 'Preta', '100% Polyester', NULL, NULL),
(7, ' Black Sabbath', 'Paranoid', 'DVD', 30, 3, NULL, NULL, NULL, '00:00:00', '01 - Early Sabbath\r\n02 - War Pigs\r\n03 - Iron Man\r\n04 - Planet Caravan\r\n05 - Electric Funeral\r\n06 - Hand Of Doom\r\n07 - Fairies Wear Boots\r\n08 - Paranoid'),
(8, 'Manowar', 'The Lord of Steel', 'Camiseta', 35.5, 5, 'PP', 'Preta', '100% Algodão', NULL, NULL),
(9, 'Angra', 'Aqua', 'Camiseta', 38.9, 5, 'PP', 'Preta', '100% Algodão', NULL, NULL),
(10, 'Judas Priest', 'Epitaph', 'DVD', 35.9, 2, NULL, NULL, NULL, NULL, '01. Battle Hymn\r\n02. Rapid Fire\r\n03. Metal Gods\r\n04. Heading Out To The Highway\r\n05. Judas Rising\r\n06. Starbreaker\r\n07. Victim Of Changes\r\n08. Never Satisfied\r\n09. Diamonds And Rust\r\n10. Prophecy\r\n11. Night Crawler\r\n12. Turbo Lover\r\n13. Beyond The Realms Of Death\r\n14. The Sentinel\r\n15. Blood Red Skies\r\n16. The Green Manalishi (With The Two Pronged Crown)\r\n17. Breaking The Law\r\n18. Painkiller\r\n19. The Hellion\r\n20. Electric Eye\r\n21. Hell Bent For Leather\r\n22. You''ve Got Another Thing Comin''\r\n23. Living After Midnight'),
(11, 'Primal Fear', 'Unbreakable', 'CD', 25.5, 10, NULL, NULL, NULL, NULL, '01. Unbreakable (Parte 1)\r\n02. Strike\r\n03. Give ''Em Hell\r\n04. Bad Guys Wear Black\r\n05. And There Was Silence\r\n06. Metal Nation\r\n07. Where Angels Die\r\n08. Unbreakable (Parte 2)\r\n09. Marching Again\r\n10. Born Again\r\n11. Blaze Of Glory\r\n12. Conviction\r\n13. Night Of The Jumps\r\n14. Bad Guys Wear Black');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Fazendo dump de dados para tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `email`, `usuario`, `senha`, `nascimento`, `sexo`, `fone`, `cidade`, `uf`, `logradouro`, `bairro`, `cep`) VALUES
(1, 'Lucas Eduardo Botechia', 'lucasedub@gmail.com', 'lucas', '123', '1981-09-11', 'M', 0, '', '', '', '', '');

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
