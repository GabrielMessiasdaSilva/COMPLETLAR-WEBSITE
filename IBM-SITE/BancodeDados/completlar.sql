-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 10/11/2023 às 07:47
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `completlar`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `cadastro`
--

CREATE DATABASE completlar;
USE completlar;


CREATE TABLE `cadastro` (
  `IdCliente` int(11) NOT NULL,
  `Nome` varchar(60) NOT NULL,
  `Email` varchar(90) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `CEP` varchar(15) NOT NULL,
  `Senha` varchar(20) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `carrinho`
--

CREATE TABLE `carrinho` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `quantidade` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `categoriacozinha`
--

CREATE TABLE `categoriacozinha` (
  `IdCozinha` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `caminho_imagem` varchar(255) NOT NULL,
  `descricao_imagem` varchar(70) NOT NULL,
  `preco` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `categoriacozinha`
--

INSERT INTO `categoriacozinha` (`IdCozinha`, `nome`, `caminho_imagem`, `descricao_imagem`, `preco`) VALUES
(1, 'Mesa de Cozinha', 'assets/Imagens/Produtos/mesadCozi.jpg', 'Mesa de Cozinha Extensível 137 cm', '959.99'),
(2, 'Mesa de Cozinha Branca', 'assets/Imagens/Produtos/mesadCozi1.jpg', 'Conjunto De Mesa De Cozinha Com 4 Lugares', '959.99'),
(3, 'Armario com mesa dobrável', 'assets/Imagens/Produtos/Armario-Mesa-Dobravel.jpg', 'Armario confortável para sua cozinha', '320.00'),
(4, 'Paneleiro', 'assets/Imagens/Produtos/paneleiro.jpg', 'Paneleiro com 4 Portas', '620.80'),
(5, 'Fruteira', 'assets/Imagens/Produtos/BalcaoCozi.jpg', 'Balcão de Cozinha de Canto com Tampo Top Class 1 PT Branco e Preto', '306.99');

-- --------------------------------------------------------

--
-- Estrutura para tabela `categoriaescritorio`
--

CREATE TABLE `categoriaescritorio` (
  `IdEscritorio` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `caminho_imagem` varchar(255) NOT NULL,
  `descricao_imagem` varchar(70) NOT NULL,
  `preco` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `categoriaescritorio`
--

INSERT INTO `categoriaescritorio` (`IdEscritorio`, `nome`, `caminho_imagem`, `descricao_imagem`, `preco`) VALUES
(0, 'Cadeira', 'assets/Imagens/Produtos/Cadeira.png', 'Cadeira confortável para seu escritório', '850.99'),
(0, 'Escrivaninha', 'assets/Imagens/Produtos/Escrivaninha.jpg', 'Mesa Escrivaninha Decor Escritório Office Industrial 90cm', '270.50'),
(0, 'Escrivaninha com Gavetas', 'assets/Imagens/Produtos/EscrivaninhaP1.jpg', 'Escrivaninha 120cm 2 Gavetas P1012 Placa e Ponto', '485.90'),
(0, 'Cadeira Bege', 'assets/Imagens/Produtos/CadeiraEscri.jpg', 'Cadeira de Escritório Secretária Giratória Fitz Bege', '405.00'),
(0, 'Cadeira Preta', 'assets/Imagens/Produtos/CadeiraEscri1.jpg', 'Cadeira De Escritório Cor Preto Material Do Estofamento Couro Sintétic', '525.90'),
(0, 'Cadeira Diretor', 'assets/Imagens/Produtos/CadeiraEscri2.jpg', 'Cadeira de Escritório Diretor Giratória Eames Comfort Preta', '800.00'),
(0, 'Mesa de Escritório', 'assets/Imagens/Produtos/MesaEscritorioCastanho.jpg', 'Mesa de Escritório Kit Espanha Castanho 2 portas e 3 gavetas', '520.00'),
(0, 'Escrivaninha Branca', 'assets/Imagens/Produtos/EscrivaninhaEspanha.jpg', 'Escrivaninha Espanha 2 PT 3 GV Branca', '532.00'),
(0, 'Armário de Escritório', 'assets/Imagens/Produtos/ArmariocomExtensor.jpg', 'Armário de Escritório com Extensor Yaris 1 PT 3 GV Calvi e Preto', '800.00');

-- --------------------------------------------------------

--
-- Estrutura para tabela `categoriaquarto`
--

CREATE TABLE `categoriaquarto` (
  `IdQuarto` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `caminho_imagem` varchar(255) NOT NULL,
  `descricao_imagem` varchar(70) NOT NULL,
  `preco` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `categoriaquarto`
--

INSERT INTO `categoriaquarto` (`IdQuarto`, `nome`, `caminho_imagem`, `descricao_imagem`, `preco`) VALUES
(1, 'Cômoda', 'assets/Imagens/Produtos/comoda.jpg', 'Cômoda Sapateira 1 Porta 4 Gavetas', '899.90'),
(2, 'Cômoda', 'assets/Imagens/Produtos/comodaa.jpg', 'Cômoda com 5 gavetas e 2 portas', '600.79'),
(3, 'Guarda-Roupa', 'assets/Imagens/Produtos/guardaRoupe.jpg', 'Guarda-Roupa com 2 portas, 6 gavetas e 7 prateleiras', '1850.88'),
(4, 'Guarda-Roupa de Casal', 'assets/Imagens/Produtos/Guarda-Roupa-Casal.jpg', 'Guarda-Roupa de Casal com Closet Aberto', '800.00'),
(5, 'Guarda-Roupa com Espelho', 'assets/Imagens/Produtos/Guarda-Roupa-Espelho.jpg', 'Guarda-Roupa Adaptado com Espelho', '620.90'),
(6, 'Guarda-Roupa Adaptado', 'assets/Imagens/Produtos/Guarda-Roupa.jpg', 'Guarda-Roupa Aberto Adaptado', '730.00'),
(7, 'Sapateira com Espelho', 'assets/Imagens/Produtos/sapateira1.jpg', 'Sapateira Armário Multiúso Madesa Isis 1 Porta com Espelhos - Branco', '529.99'),
(8, 'Cômoda com Espelho', 'assets/Imagens/Produtos/Comodacomespelho.jpg', 'Cômoda com Espelho 5 Gavetas 2 Portas', '740.00');

-- --------------------------------------------------------

--
-- Estrutura para tabela `categoriasaladeestar`
--

CREATE TABLE `categoriasaladeestar` (
  `IdSaladeEstar` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `caminho_imagem` varchar(255) NOT NULL,
  `descricao_imagem` varchar(70) NOT NULL,
  `preco` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `categoriasaladeestar`
--

INSERT INTO `categoriasaladeestar` (`IdSaladeEstar`, `nome`, `caminho_imagem`, `descricao_imagem`, `preco`) VALUES
(1, 'Armario Azul', 'assets/Imagens/Produtos/Produtos_Main/Armario Azul.jpg', 'Armario Azul Descricao', '320.00'),
(2, 'Rack', 'assets/Imagens/Produtos/Rack.jpg', 'Rack com Painel Descricao', '1400.00'),
(3, 'Armario', 'assets/Imagens/Produtos/Produtos_Main/Armario Planejado.jpg', 'Armario Planejado Descricao', '259.99'),
(4, 'Poltrona Azul', 'assets/Imagens/Produtos/poltronaL.jpg', 'Poltrona Azul Descricao', '800.00'),
(5, 'Poltrona Cinza', 'assets/Imagens/Produtos/poltronaOli.jpg', 'Poltrona Cinza Descricao', '720.00'),
(6, 'Sofá-Cama', 'assets/Imagens/Produtos/sofa-cama.jpg', 'Sofá-Cama Descricao', '1720.00'),
(7, 'Sofá Cinza', 'assets/Imagens/Produtos/poltronaOli', 'Sofá Cinza Descricao', '2988.99'),
(8, 'Sofá com 4 Lugares', 'assets/Imagens/Produtos/Produtos_Main/Sofa 4 Lugares.jpg', 'Sofá 4 Lugares Descricao', '3760.99'),
(9, 'Kit 2 Poltronas', 'assets/Imagens/Produtos/Produtos_Main/Kit 2 Poltronas.jpg', 'Kit 2 Poltronas Descricao', '699.99');

-- --------------------------------------------------------

--
-- Estrutura para tabela `cliente`
--

CREATE TABLE `cliente` (
  `IdCliente` int(11) NOT NULL,
  `Nome` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `Email` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `RG` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `DataNascimento` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `cliente`
--

INSERT INTO `cliente` (`IdCliente`, `Nome`, `Email`, `RG`, `DataNascimento`) VALUES
(1, 'Joao pedro', 'aaa@gmail.com', '111.111.111-11', '2023-10-10');

-- --------------------------------------------------------

--
-- Estrutura para tabela `loginadm`
--

CREATE TABLE `loginadm` (
  `Id` int(11) NOT NULL,
  `Email` varchar(60) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `Senha` varchar(30) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `loginadm`
--

INSERT INTO `loginadm` (`Id`, `Email`, `Senha`) VALUES
(1, 'henrique001@gmail.com', 'H123'),
(2, 'gabriel002@gmail.com', 'G456'),
(3, 'joao003@gmail.com', 'J789'),
(4, 'gabriela004@gmail.com', 'G112'),
(5, 'diogo005@gmail.com', 'D445');

-- --------------------------------------------------------

--
-- Estrutura para tabela `loginclientes`
--

CREATE TABLE `loginclientes` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `cep` varchar(70) NOT NULL,
  `email` varchar(150) NOT NULL,
  `telefone` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `loginclientes`
--

INSERT INTO `loginclientes` (`id`, `username`, `password`, `created_at`, `cep`, `email`, `telefone`) VALUES
(0, 'Lala', '$2y$10$rWp2sChX1Q8VqOsMPCkgzu5LbVH10vYaKFT3/ALB9c3ki.J8wN7I2', '2023-11-03 18:56:54', '12433546', 'SamueleSofia@gmail.com', '22121443'),
(1, 'gabriel', '$2y$10$mB4/VHgQ9GY5EFlPpUZEMuxbbBSYe7lhzz./bAq1TqoDbN1A0GGgi', '2023-10-28 14:52:33', '08040-350', 'gabriel.silva3212@etec.sp.gov.br', '111111111'),
(2, 'samuelesofia', '$2y$10$VqKGnka.pMx/TE6TYsKxou5iqsOYRA0FMyR9n8ncYRzG63FZdEnYG', '2023-10-29 01:17:58', '12433546', 'SamueleSofia@gmail.com', '22121443');

-- --------------------------------------------------------

--
-- Estrutura para tabela `marceneiros`
--

CREATE TABLE `marceneiros` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `marceneiros`
--

INSERT INTO `marceneiros` (`id`, `username`, `password`) VALUES
(1, 'gabriel', '$2y$10$WAb9yZhhTXepLeqcDgLCNOiwoj2okgME2M.5GVlRvzp7WzN8LUgse'),
(2, 'gabriel', '$2y$10$TmyAki/47PJSZtg82n6oqOn7/Yhv1uSKbLZ7kIexhcJj0EHnoHrz6');

-- --------------------------------------------------------

--
-- Estrutura para tabela `orcamentos`
--

CREATE TABLE `orcamentos` (
  `id` int(11) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `tipoTrabalho` varchar(255) DEFAULT NULL,
  `cep` varchar(50) DEFAULT NULL,
  `budget` varchar(5) DEFAULT NULL,
  `ownership` varchar(5) DEFAULT NULL,
  `startDate` varchar(20) DEFAULT NULL,
  `additionalDetails` text DEFAULT NULL,
  `nome` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `privacyPolicy` tinyint(1) DEFAULT NULL,
  `receivePromotions` tinyint(1) DEFAULT NULL,
  `status` enum('Pendente','Aprovado','Rejeitado') DEFAULT NULL,
  `caminho_imagem` blob NOT NULL,
  `preco` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `orcamentos`
--

INSERT INTO `orcamentos` (`id`, `Name`, `tipoTrabalho`, `cep`, `budget`, `ownership`, `startDate`, `additionalDetails`, `nome`, `email`, `phone`, `privacyPolicy`, `receivePromotions`, `status`, `caminho_imagem`, `preco`) VALUES
(1, 'Biel Messias', 'Marceneiro', '08040-350', 'Sim', 'Compr', 'Por enquanto não o p', 'Desejo', NULL, 'gabriel.silva3212@etec.sp.gov.br', '11965371081', 1, 1, 'Pendente', '', ''),
(2, 'gabripe Df', 'Marceneiro', '08040-350', 'Sim', 'Compr', 'Mais de 3 meses', 'aaaaa', NULL, 'gabriel@gmail.com', '11965371081', 1, 1, 'Pendente', '', ''),
(3, 'gabripe Df', 'Marceneiro', '08040-350', 'Sim', 'Compr', 'Mais de 3 meses', 'aaaaa', NULL, 'gabriel@gmail.com', '11965371081', 1, 1, 'Aprovado', '', ''),
(4, 'Gabriel Messias', 'Marceneiro', '08040-350', 'Sim', 'Compr', 'Mais de 3 meses', 'aaa', NULL, 'gabriel.silva3212@etec.sp.gov.br', '111111111', 1, 1, 'Aprovado', '', ''),
(5, 'gabripe asdsaf', 'Marceneiro', '08040-350', 'Sim', 'Compr', 'De 1 a 3 meses', 'aaaaaaaaaaaaaaa', NULL, 'gabrielestudante420@gmail.com', '11965371081', 1, 1, 'Pendente', '', '2.500');

-- --------------------------------------------------------

--
-- Estrutura para tabela `pedidos`
--

CREATE TABLE `pedidos` (
  `id` int(11) NOT NULL,
  `nome_cliente` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `endereco` varchar(255) DEFAULT NULL,
  `total` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `pedidos`
--

INSERT INTO `pedidos` (`id`, `nome_cliente`, `email`, `endereco`, `total`) VALUES
(1, 'Lala', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estrutura para tabela `produtos`
--

CREATE TABLE `produtos` (
  `IdProduto` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `caminho_imagem` varchar(255) NOT NULL,
  `descricao_imagem` varchar(70) NOT NULL,
  `preco` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `produtos`
--

INSERT INTO `produtos` (`IdProduto`, `nome`, `caminho_imagem`, `descricao_imagem`, `preco`) VALUES
(1, 'Armario Azul', 'assets/Imagens/Produtos/Produtos_Main/Armario Azul.jpg', 'Armário Azul para sua sala de estar', '320.00'),
(2, 'Armario Pastel', 'assets/Imagens/Produtos/Produtos_Main/Armario Pastel.jpg', 'Armário Pastel para sua sala de estar', '1400.00'),
(3, 'Armario Planejado', 'assets/Imagens/Produtos/Produtos_Main/Armario Planejado.jpg', 'Armário Planejado para sua sala de estar', '259.99'),
(4, 'Armario Preto', 'assets/Imagens/Produtos/Produtos_Main/Armario Preto.jpg', 'Armário Preto para sua sala de estar', '800.00'),
(5, 'Buffet Sala de Jantar', 'assets/Imagens/Produtos/Produtos_Main/Buffet Sala de Jantar.jpg', 'Buffet para Sala de Jantar', '720.00'),
(6, 'Cadeira Bege', 'assets/Imagens/Produtos/Produtos_Main/Cadeira Bege.jpg', 'Cadeira Bege para sua sala de estar', '1720.00'),
(7, 'Cadeira Telinha', 'assets/Imagens/Produtos/Produtos_Main/Cadeira Telinha.jpg', 'Cadeira Telinha para sua sala de estar', '2988.99'),
(8, 'Comoda Azul', 'assets/Imagens/Produtos/Produtos_Main/Comoda Azul.jpg', 'Cômoda Azul para sua sala de estar', '3760.99'),
(9, 'Comoda Branca', 'assets/Imagens/Produtos/Produtos_Main/Comoda Branca.jpg', 'Cômoda Branca para sua sala de estar', '699.99'),
(10, 'Comoda Cinza', 'assets/Imagens/Produtos/Produtos_Main/Comoda Cinza.jpg', 'Cômoda Cinza para sua sala de estar', '699.99'),
(11, 'Comoda Marron', 'assets/Imagens/Produtos/Produtos_Main/Comoda Marron.jpg', 'Cômoda Marrom para sua sala de estar', '699.99'),
(12, 'Comoda Preta', 'assets/Imagens/Produtos/Produtos_Main/Comoda Preta.jpg', 'Cômoda Preta para sua sala de estar', '699.99'),
(13, 'Conjunto Planejado Cozinha', 'assets/Imagens/Produtos/Produtos_Main/Conjunto Planejado Cozinha.jpg', 'Conjunto Planejado para Cozinha', '699.99'),
(14, 'Cozinha planejada com Revestimento 3D preto e móveis planejados escuros', 'assets/Imagens/Produtos/Produtos_Main/Cozinha planejada com Revestimento 3D preto e móveis planejados escuros.jpg', 'Cozinha planejada com Revestimento 3D preto e móveis planejados escuro', '699.99'),
(15, 'Cozinha planejada na Cor Verde', 'assets/Imagens/Produtos/Produtos_Main/Cozinha planejada na Cor Verde.jpg', 'Cozinha planejada na Cor Verde', '699.99'),
(16, 'Gabinete Baixo Bege', 'assets/Imagens/Produtos/Produtos_Main/Gabinete Baixo Bege.jpg', 'Gabinete Baixo Bege para sua sala de estar', '699.99'),
(17, 'Gabinete Baixo', 'assets/Imagens/Produtos/Produtos_Main/Gabinete Baixo.jpg', 'Gabinete Baixo para sua sala de estar', '699.99'),
(18, 'Gabinite Pia Azul', 'assets/Imagens/Produtos/Produtos_Main/Gabinite Pia Azul.jpg', 'Gabinete para Pia Azul para sua cozinha', '699.99'),
(19, 'Guarda Roupa Azul', 'assets/Imagens/Produtos/Produtos_Main/Guarda Roupa Azul.jpg', 'Guarda-Roupa Azul para seu quarto', '699.99'),
(20, 'Guarda Roupa Cinza', 'assets/Imagens/Produtos/Produtos_Main/Guarda Roupa Cinza.jpg', 'Guarda-Roupa Cinza para seu quarto', '699.99'),
(21, 'Guarda Roupa Preto e Marron', 'assets/Imagens/Produtos/Produtos_Main/Guarda Roupa Preto e Marron.jpg', 'Guarda-Roupa Preto e Marrom para seu quarto', '699.99'),
(22, 'Guarda Roupa Preto', 'assets/Imagens/Produtos/Produtos_Main/Guarda Roupa Preto.jpg', 'Guarda-Roupa Preto para seu quarto', '699.99'),
(23, 'Guarda Roupa Verde', 'assets/Imagens/Produtos/Produtos_Main/Guarda Roupa Verde.jpg', 'Guarda-Roupa Verde para seu quarto', '699.99'),
(24, 'Guarda Roupa', 'assets/Imagens/Produtos/Produtos_Main/Guarda Roupa.jpg', 'Guarda-Roupa para seu quarto', '699.99'),
(25, 'Mesa de Jantar Branca', 'assets/Imagens/Produtos/Produtos_Main/Mesa de Jantar Branca.jpg', 'Mesa de Jantar Branca para sua sala de jantar', '699.99'),
(26, 'Mesa de Jantar', 'assets/Imagens/Produtos/Produtos_Main/Mesa de Jantar.jpg', 'Mesa de Jantar para sua sala de jantar', '699.99'),
(27, 'Painel Sala Cinza', 'assets/Imagens/Produtos/Produtos_Main/Painel Sala Cinza.jpg', 'Painel para Sala Cinza para sua sala de estar', '699.99'),
(28, 'Painel Sala', 'assets/Imagens/Produtos/Produtos_Main/Painel Sala.jpg', 'Painel para Sala para sua sala de estar', '699.99'),
(29, 'Quarto Planejado', 'assets/Imagens/Produtos/Produtos_Main/Quarto Planejado.jpg', 'Quarto Planejado para seu quarto', '699.99'),
(30, 'Rack Bege', 'assets/Imagens/Produtos/Produtos_Main/Rack Bege.jpg', 'Rack Bege para sua sala de estar', '699.99');

--
-- Índices para tabelas despejadas
--

--v
ALTER TABLE `cadastro` CHANGE `IdCliente` `IdCliente` INT(11) NOT NULL AUTO_INCREMENT;
-- Índices de tabela `cadastro`
--
ALTER TABLE `cadastro`
  ADD PRIMARY KEY (`IdCliente`);

--
-- Índices de tabela `carrinho`
--
ALTER TABLE `carrinho`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `categoriacozinha`
--
ALTER TABLE `categoriacozinha`
  ADD PRIMARY KEY (`IdCozinha`);

--
-- Índices de tabela `categoriaquarto`
--
ALTER TABLE `categoriaquarto`
  ADD PRIMARY KEY (`IdQuarto`);

--
-- Índices de tabela `categoriasaladeestar`
--
ALTER TABLE `categoriasaladeestar`
  ADD PRIMARY KEY (`IdSaladeEstar`);

--
-- Índices de tabela `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`IdCliente`);

--
-- Índices de tabela `loginadm`
--
ALTER TABLE `loginadm`
  ADD PRIMARY KEY (`Id`);

--
-- Índices de tabela `loginclientes`
--
ALTER TABLE `loginclientes`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `marceneiros`
--
ALTER TABLE `marceneiros`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `orcamentos`
--
ALTER TABLE `orcamentos`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`IdProduto`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `carrinho`
--
ALTER TABLE `carrinho`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `categoriasaladeestar`
--
ALTER TABLE `categoriasaladeestar`
  MODIFY `IdSaladeEstar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `marceneiros`
--
ALTER TABLE `marceneiros`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `orcamentos`
--
ALTER TABLE `orcamentos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
