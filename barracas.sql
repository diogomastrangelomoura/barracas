-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 11-Out-2019 às 17:58
-- Versão do servidor: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `barracas`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `bairros`
--

CREATE TABLE IF NOT EXISTS `bairros` (
  `id_bairro` int(10) NOT NULL AUTO_INCREMENT,
  `bairro` varchar(99) NOT NULL,
  `id_cidade` int(10) NOT NULL,
  PRIMARY KEY (`id_bairro`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `bairros`
--

INSERT INTO `bairros` (`id_bairro`, `bairro`, `id_cidade`) VALUES
(1, 'Itamarati', 0),
(2, 'Centro', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `caracteristicas`
--

CREATE TABLE IF NOT EXISTS `caracteristicas` (
  `id_carac` int(11) NOT NULL AUTO_INCREMENT,
  `piscina` tinyint(1) NOT NULL,
  `churras` tinyint(1) NOT NULL,
  `fogao` tinyint(1) NOT NULL,
  `geladeira` tinyint(1) NOT NULL,
  `camas` int(11) NOT NULL,
  `garagem` tinyint(1) NOT NULL,
  `sinuca` tinyint(1) NOT NULL,
  `ar_cond` tinyint(1) NOT NULL,
  `banheiros` int(11) NOT NULL,
  `tamanho` int(11) NOT NULL,
  PRIMARY KEY (`id_carac`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `caracteristicas`
--

INSERT INTO `caracteristicas` (`id_carac`, `piscina`, `churras`, `fogao`, `geladeira`, `camas`, `garagem`, `sinuca`, `ar_cond`, `banheiros`, `tamanho`) VALUES
(1, 1, 1, 1, 1, 3, 1, 1, 1, 3, 50),
(2, 0, 1, 0, 0, 1, 1, 0, 0, 1, 20);

-- --------------------------------------------------------

--
-- Estrutura da tabela `categoria`
--

CREATE TABLE IF NOT EXISTS `categoria` (
  `id_cate` int(11) NOT NULL AUTO_INCREMENT,
  `salao` tinyint(1) NOT NULL,
  `chacara` tinyint(1) NOT NULL,
  `barraca` tinyint(1) NOT NULL,
  PRIMARY KEY (`id_cate`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Extraindo dados da tabela `categoria`
--

INSERT INTO `categoria` (`id_cate`, `salao`, `chacara`, `barraca`) VALUES
(1, 1, 0, 0),
(2, 0, 1, 0),
(3, 0, 0, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `imagens`
--

CREATE TABLE IF NOT EXISTS `imagens` (
  `id_imagens` int(10) NOT NULL AUTO_INCREMENT,
  `planta` varchar(99) NOT NULL,
  PRIMARY KEY (`id_imagens`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `imagens`
--

INSERT INTO `imagens` (`id_imagens`, `planta`) VALUES
(1, ''),
(2, 'teste');

-- --------------------------------------------------------

--
-- Estrutura da tabela `imoveis`
--

CREATE TABLE IF NOT EXISTS `imoveis` (
  `id_imoveis` int(10) NOT NULL AUTO_INCREMENT,
  `id_bairro` int(10) NOT NULL,
  `preco` double(10,2) NOT NULL,
  `id_carac` int(10) NOT NULL,
  `desc` varchar(500) NOT NULL,
  `id_cate` int(10) NOT NULL,
  `id_imagens` int(10) NOT NULL,
  `id_infoProp` int(10) NOT NULL,
  `endereco` varchar(200) NOT NULL,
  PRIMARY KEY (`id_imoveis`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `imoveis`
--

INSERT INTO `imoveis` (`id_imoveis`, `id_bairro`, `preco`, `id_carac`, `desc`, `id_cate`, `id_imagens`, `id_infoProp`, `endereco`) VALUES
(1, 1, 200.00, 2, 'Barraca mais barata', 3, 2, 1, 'av padre salustio'),
(2, 2, 5000.00, 1, 'Barraca mais cara', 2, 1, 1, 'rua tupiniquins');

-- --------------------------------------------------------

--
-- Estrutura da tabela `infoprop`
--

CREATE TABLE IF NOT EXISTS `infoprop` (
  `id_infoProp` int(10) NOT NULL AUTO_INCREMENT,
  `nome` varchar(99) NOT NULL,
  `agencia` varchar(99) NOT NULL,
  `tel` varchar(10) NOT NULL,
  PRIMARY KEY (`id_infoProp`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `infoprop`
--

INSERT INTO `infoprop` (`id_infoProp`, `nome`, `agencia`, `tel`) VALUES
(1, 'Gustavo Corradi', 'Local Perfeito Propriedades', '32636232');

-- --------------------------------------------------------

--
-- Estrutura da tabela `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `id_log` int(10) NOT NULL AUTO_INCREMENT,
  `login` varchar(50) NOT NULL,
  `senha` varchar(50) NOT NULL,
  `id_infoProp` int(10) NOT NULL,
  PRIMARY KEY (`id_log`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Extraindo dados da tabela `login`
--

INSERT INTO `login` (`id_log`, `login`, `senha`, `id_infoProp`) VALUES
(1, 'teste', '123', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `reviews`
--

CREATE TABLE IF NOT EXISTS `reviews` (
  `id_review` int(10) NOT NULL AUTO_INCREMENT,
  `id_imovel` int(10) NOT NULL,
  `nome` varchar(99) NOT NULL,
  `rating` float NOT NULL,
  `comentario` varchar(500) NOT NULL,
  `data` date NOT NULL,
  PRIMARY KEY (`id_review`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `reviews`
--

INSERT INTO `reviews` (`id_review`, `id_imovel`, `nome`, `rating`, `comentario`, `data`) VALUES
(1, 2, 'Gustavo', 5, 'Muito bom', '2019-10-09'),
(2, 2, 'Matheus', 4, 'Adorei', '2019-10-08');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
