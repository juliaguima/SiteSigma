-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 25-Ago-2022 às 17:13
-- Versão do servidor: 10.4.17-MariaDB
-- versão do PHP: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `sitesigma`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `categorias`
--

CREATE TABLE `categorias` (
  `CategoriaID` int(11) NOT NULL,
  `Nome` varchar(100) NOT NULL,
  `Descricao` longtext NOT NULL,
  `Ativo` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `categorias`
--

INSERT INTO `categorias` (`CategoriaID`, `Nome`, `Descricao`, `Ativo`) VALUES
(1, 'Animais', '', 1),
(2, 'Flores', '', 1),
(3, 'Gatinhos', '', 1),
(4, 'Dogs', '', 1),
(5, 'Passaros', '', 1),
(6, 'Macacos', '', 0),
(7, 'Aquaticos', '', 1),
(8, 'Terrestres', '', 1),
(9, 'Brasileiros', '', 1),
(10, 'Estrangeiros', '', 1),
(11, 'Capivaras', '', 1),
(12, 'Peixes', '', 1),
(17, 'Macacos', '', 1),
(18, 'Celular2', '', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `ProdutoID` int(11) NOT NULL,
  `Nome` varchar(150) NOT NULL,
  `Descricao` longtext NOT NULL,
  `Imagem` varchar(200) NOT NULL,
  `Preco` float NOT NULL,
  `Ativo` tinyint(1) NOT NULL,
  `CategoriaID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`ProdutoID`, `Nome`, `Descricao`, `Imagem`, `Preco`, `Ativo`, `CategoriaID`) VALUES
(0, 'Capivara Legal', 'Descrição Capivara Legal', 'capivara-legal.jpg', 1200, 1, 0),
(1, 'Macaco com o cabelo arrepiado', 'Macaco ', 'cabelin.jpg', 3000000, 1, 0),
(2, 'Peixonauta Sorridente', 'Peixonauta Sorridente', 'peixonauta.jpg', 90000, 1, 0),
(3, 'Gata Loira', 'Gata Loira', 'gata-loira.jpg', 500000, 1, 0),
(4, 'Cavalão', 'Cavalão', 'cavalao.jpg', 7800, 1, 0),
(5, 'Coelho Sabido', 'Coelho Sabido', 'coelho-sabido.jpg', 60000, 1, 0),
(6, 'Drama Llama', 'Drama Llama', 'llama.jpg', 60000, 1, 0),
(7, 'Pássaro Sambista da Coca', 'Pássaro Sambista da Coca', 'passaro-coca.jpg', 20000, 1, 0),
(8, 'Arara Estilosa', 'Arara Style', 'arara-style.jpg', 1700000, 1, 0),
(9, 'Zoinho', 'Animal fofo dos olhos grandes', 'zoinho.jpg', 200000, 1, 0),
(10, 'Bily Boy ', 'Bily Boy Popoy', 'bily_boy.jpg', 30000, 1, 0),
(11, 'Angelina Ballerina', 'Angelina Ballerina', 'angelina.PNG', 50000, 1, 0),
(12, 'Gato do Heavy Metal', 'Gato do Heavy Metal', 'cat_heavy.jpg', 6000000, 1, 0),
(13, 'Coelhinho', 'Coelho', 'coelhinho.jpg', 4000, 1, 0),
(14, 'Cachorro Maquiado', 'Cachorro Maquiado', 'cachorro_com_make.jpg', 4000000000, 1, 0),
(15, 'Cachorro Michael', 'Jackson DOG', 'dog_hihi.jfif', 700000, 1, 0),
(16, 'Cachorro Minecraft', 'Cachorro Mine', 'dog_mine.jpg', 50000, 1, 0),
(17, 'Cachorro no tobogã', 'Cachorro descendo o tobogã', 'dognotubo.jpg', 7000, 1, 0),
(18, 'Macaco telecinético', 'Macaco telecinético', 'maca.jpg', 78900, 1, 0),
(19, 'Esquilo da Briga', 'Esquilo das Ruas', 'esquilo_matador.jpg', 120000, 1, 0),
(20, 'Cachorro Forte', 'Cachorro Malhado', 'forte.jpg', 5000, 1, 0),
(21, 'Linguinha de gato', 'gatinho com a lingua para fora', 'gatinho.jpg', 59800, 1, 0),
(22, 'Lutador', 'Bicho Lutador', 'luta.jpg', 400000000, 1, 0),
(23, 'Macaco maluco', 'Macaco maluco', 'mamaco-maluco.jpg', 23000, 1, 0),
(24, 'Cachorro em choque', 'Cachorro em chocado', 'medo.jpg', 10000, 1, 0),
(25, 'Gato roubando petisco', 'Gato roubando petisco', 'rouba.png', 50000, 1, 0),
(26, 'Gato', ' Gato tirando selfie com os parças', 'selfie.jpg', 4000000000, 1, 0),
(27, 'Cachorro nanando', 'Cachorro nanando', 'sonin.png', 70000, 1, 0),
(28, 'Tartaruga', 'Tartaruga', 'turtle.webp', 2000, 1, 0),
(29, 'Zebra sorridente', 'Zebra sorridente', 'zebrinha.webp', 12000, 1, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `usuarioID` int(10) UNSIGNED NOT NULL,
  `Nome` varchar(45) NOT NULL DEFAULT '',
  `Email` varchar(45) NOT NULL DEFAULT '',
  `Senha` varchar(45) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`usuarioID`, `Nome`, `Email`, `Senha`) VALUES
(1, 'Júlia', 'julia@gmail.com', '777');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`CategoriaID`);

--
-- Índices para tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`ProdutoID`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`usuarioID`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `categorias`
--
ALTER TABLE `categorias`
  MODIFY `CategoriaID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `ProdutoID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `usuarioID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
