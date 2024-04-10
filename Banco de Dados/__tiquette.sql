-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 23-Nov-2023 às 18:50
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
-- Banco de dados: `étiquette`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `carrinho`
--

CREATE TABLE `carrinho` (
  `id` int(11) NOT NULL,
  `id_produto` int(11) NOT NULL,
  `nome` varchar(250) NOT NULL,
  `valor` int(11) NOT NULL,
  `imagem` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `categorias`
--

CREATE TABLE `categorias` (
  `id_categoria` int(1) NOT NULL,
  `valor` char(3) NOT NULL,
  `label` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Extraindo dados da tabela `categorias`
--

INSERT INTO `categorias` (`id_categoria`, `valor`, `label`) VALUES
(1, 'cam', 'Camisa Social'),
(2, 'ter', 'Terno'),
(3, 'pal', 'Paletó'),
(4, 'cal', 'Calça'),
(5, 'sap', 'Sapato'),
(6, 'gra', 'Gravata'),
(7, 'sus', 'Suspensório'),
(8, 'cin', 'Cinto'),
(9, 'col', 'Colete');

-- --------------------------------------------------------

--
-- Estrutura da tabela `products`
--

CREATE TABLE `products` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `image` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `id_produto` int(10) NOT NULL,
  `preco` float NOT NULL,
  `categoria` char(3) NOT NULL,
  `nome_produto` tinytext NOT NULL,
  `detalhes_produto` text NOT NULL,
  `imagem_produto` varchar(50) NOT NULL,
  `destaque` enum('sim','não') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id_produto`, `preco`, `categoria`, `nome_produto`, `detalhes_produto`, `imagem_produto`, `destaque`) VALUES
(1, 230, 'cin', 'Cinto de Couro de Jacaré', 'Cor: Preto Fosco\r\nEstilo: Cinto\r\nComposição: 100% Couro de Jacaré\r\nCódigo: A4B7C2D8E9F\r\nMarca: Étiquette', 'cinto12.png', 'não'),
(2, 280, 'cin', 'Cinto de Couro de Micélio', 'Cor: Preto Fosco\r\nEstilo: Cinto\r\nComposição: 100% Couro de Micélio\r\nCódigo: A2B9C4D7E1\r\nMarca: Étiquette', 'cinto15.png', 'não'),
(3, 289, 'cin', 'Cinto de Couro de Micélio', 'Cor: Preto Fosco\r\nEstilo: Cinto\r\nComposição: 100% Couro de Micélio\r\nCódigo: X8Y3Z6W0V2\r\nMarca: Étiquette', 'cinto11.png', 'não'),
(4, 230, 'cin', 'Cinto de Couro de Jacaré', 'Cor: Preto Fosco\r\nEstilo: Cinto\r\nComposição: 100% Couro de Jacaré\r\nCódigo: D5E2F9G4H1\r\nMarca: Étiquette', 'cinto.png', 'não'),
(5, 180, 'gra', 'Gravata Regular', 'Cor: Preto\r\nEstilo: Regular\r\nComposição: 100% Lã\r\nCódigo: M5N1P9Q7R4\r\nMarca: Étiquette', 'grav1.png', 'não'),
(6, 180, 'gra', 'Gravata Regular', 'Cor: Space Cadet\r\nEstilo: Regular\r\nComposição: 100% Lã\r\nCódigo: F6G2H8I3J0\r\nMarca: Étiquette', 'grav2.png', 'não'),
(7, 250, 'gra', 'Gravata Regular', 'Cor: Shadow Blue\r\nEstilo: Regular\r\nComposição: 100% Seda\r\nCódigo: K9L4O7T1U5\r\nMarca: Étiquette', 'grav7.png', 'não'),
(8, 250, 'gra', 'Gravata Regular', 'Cor: Outer Space\r\nEstilo: Regular\r\nComposição: 100% Seda\r\nCódigo: R3S8T1U7V0\r\nMarca: Étiquette', 'grav6.png', 'não'),
(9, 220, 'gra', 'Gravata Borboleta', 'Cor: Dark Purple\r\nEstilo: Borboleta\r\nComposição: 100% Linho\r\nCódigo: I6J3K0L7M8\r\nMarca: Étiquette', 'borb15.png', 'não'),
(10, 180, 'gra', 'Gravata Borboleta', 'Cor: Medium Jungle Green\r\nEstilo: Borboleta\r\nComposição: 100% Algodão\r\nCódigo: N9O4P5Q2W6\r\nMarca: Étiquette', 'borb2.png', 'não'),
(11, 190, 'gra', 'Gravata Borboleta', 'Cor: Burnt Umber\r\nEstilo: Borboleta\r\nComposição: 100% Lã\r\nCódigo: X8Y7Z1A0B3\r\nMarca: Étiquette', 'borb3.png', 'não'),
(12, 190, 'gra', 'Gravata Borboleta', 'Cor: Khaki\r\nEstilo: Borboleta\r\nComposição: 100% Lã\r\nCódigo: C6F8G1H9I0\r\nMarca: Étiquette', 'borb16.png', 'não'),
(13, 180, 'sus', 'Suspensório', 'Cor: Eerie Black\r\nEstilo: Elástico\r\nComposição: 72% Poliéster e 28% Borracha\r\nCódigo: J2K4L5M7N3\r\nMarca: Étiquette', 'susp14.png', 'não'),
(14, 180, 'sus', 'Suspensório', 'Cor: Gunmeta\r\nEstilo: Elástico\r\nComposição: 72% Poliéster e 28% Borracha\r\nCódigo: P6Q9R0S2T5\r\nMarca: Étiquette', 'susp7.png', 'não'),
(15, 180, 'sus', 'Suspensório', 'Cor: Temptress\r\nEstilo: Elástico\r\nComposição: 72% Poliéster e 28% Borracha\r\nCódigo: U3V2W1X0Y9\r\nMarca: Étiquette', 'susp2.png', 'não'),
(16, 180, 'sus', 'Suspensório', 'Cor: Puce Red\r\nEstilo: Elástico\r\nComposição: 72% Poliéster e 28% Borracha\r\nCódigo: B4C7D6E5F8\r\nMarca: Étiquette', 'susp1.png', 'não');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `senha` char(15) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nome`, `senha`, `email`) VALUES
(1, 'Étiquette Oficial', '15122023', 'etiquette_official@gmail.com'),
(2, 'José Fernando', '1234', 'jose@gmail.com'),
(5, 'exemplo', '1234', 'exemplo@gmail.com'),
(6, 'conta', '25f9e794323b453', 'conta@gmail.com'),
(7, 'Renan', 'renan', 'renan@gmail.com'),
(8, 'Ângelo', '$2y$10$d7JJ.iB8', 'angelo@gmail.com'),
(9, 'Heitor', 'thor123', 'thor@gmail.com'),
(10, 'Josué', 'jesusexiste', 'josue@gmail.com');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `carrinho`
--
ALTER TABLE `carrinho`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id_categoria`);

--
-- Índices para tabela `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id_produto`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `carrinho`
--
ALTER TABLE `carrinho`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id_categoria` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `products`
--
ALTER TABLE `products`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id_produto` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
