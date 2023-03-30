-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 30-Mar-2023 às 19:46
-- Versão do servidor: 5.7.17
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `farm`
--
DROP DATABASE IF EXISTS `farm`;
CREATE DATABASE IF NOT EXISTS `farm` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `farm`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `alimentação`
--

CREATE TABLE `alimentação` (
  `IDali_vac` int(11) NOT NULL,
  `Tiposali_vac` varchar(50) DEFAULT NULL,
  `Identificacao_vac` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `alimentacao_cav`
--

CREATE TABLE `alimentacao_cav` (
  `IDali_cav` int(11) NOT NULL,
  `Tiposali_cav` varchar(50) DEFAULT NULL,
  `Periodpsali_cav` varchar(50) DEFAULT NULL,
  `Vitaminas_cav` varchar(30) DEFAULT NULL,
  `Suplementos_cav` varchar(30) DEFAULT NULL,
  `Identificacao_cav` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cavalo`
--

CREATE TABLE `cavalo` (
  `Identificacao_cav` int(11) NOT NULL,
  `Nome_cav` varchar(30) DEFAULT NULL,
  `Raca_cav` varchar(30) DEFAULT NULL,
  `Datanasc_cav` date DEFAULT NULL,
  `Sexo_cav` varchar(20) DEFAULT NULL,
  `Peso` double DEFAULT NULL,
  `Racapai_cav` varchar(30) DEFAULT NULL,
  `Altura_cav` double DEFAULT NULL,
  `Racamae_cav` varchar(30) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cavalo`
--

INSERT INTO `cavalo` (`Identificacao_cav`, `Nome_cav`, `Raca_cav`, `Datanasc_cav`, `Sexo_cav`, `Peso`, `Racapai_cav`, `Altura_cav`, `Racamae_cav`) VALUES
(1, 'Coquinho', 'Arabe', '2022-06-15', 'cavalho', 320.45, 'Arabe', 1.87, 'Arabe');

-- --------------------------------------------------------

--
-- Estrutura da tabela `ovelhas`
--

CREATE TABLE `ovelhas` (
  `id_ovl` int(11) NOT NULL,
  `nome_ovl` varchar(70) NOT NULL,
  `idade_ovl` int(11) NOT NULL,
  `raca_ovl` varchar(50) NOT NULL,
  `sexo_ovl` char(1) NOT NULL,
  `cor_ovl` varchar(30) NOT NULL,
  `peso_ovl` double NOT NULL,
  `altura_ovl` double NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `ovelhas`
--

INSERT INTO `ovelhas` (`id_ovl`, `nome_ovl`, `idade_ovl`, `raca_ovl`, `sexo_ovl`, `cor_ovl`, `peso_ovl`, `altura_ovl`) VALUES
(1, 'Alphasema', 2, 'textel', 'F', 'marrom', 35.2, 56.04);

-- --------------------------------------------------------

--
-- Estrutura da tabela `periodo_cav`
--

CREATE TABLE `periodo_cav` (
  `IDperiodo_cav` int(11) NOT NULL,
  `Identificacao_cav` int(11) DEFAULT NULL,
  `IDrepr_cav` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `reprodução_vac`
--

CREATE TABLE `reprodução_vac` (
  `IDrepr_vac` int(11) NOT NULL,
  `Datarepr_vac` date DEFAULT NULL,
  `IDperiodo_vac` int(11) NOT NULL,
  `Identificacao_vac` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `reproducao_cav`
--

CREATE TABLE `reproducao_cav` (
  `IDrepr_cav` int(11) NOT NULL,
  `Datacio_cav` varchar(30) DEFAULT NULL,
  `Ciclocio_cav` varchar(30) DEFAULT NULL,
  `Identificacao_cav` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `cpf` int(20) NOT NULL,
  `nome` varchar(75) NOT NULL,
  `datanaci` date NOT NULL,
  `senha` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`cpf`, `nome`, `datanaci`, `senha`) VALUES
(12345678, 'Josekly Amaral Salva Pinto Junior', '1985-05-22', 'Admin');

-- --------------------------------------------------------

--
-- Estrutura da tabela `vaca`
--

CREATE TABLE `vaca` (
  `Identificacao_vac` int(11) NOT NULL,
  `Nome_vac` varchar(40) DEFAULT NULL,
  `Raca_vac` varchar(30) DEFAULT NULL,
  `Peso_vac` double DEFAULT NULL,
  `Datanasc_vac` date DEFAULT NULL,
  `Racamae_vac` varchar(30) DEFAULT NULL,
  `Racapai_vac` varchar(30) DEFAULT NULL,
  `Altura_vac` double DEFAULT NULL,
  `sexo_vac` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `vaca`
--

INSERT INTO `vaca` (`Identificacao_vac`, `Nome_vac`, `Raca_vac`, `Peso_vac`, `Datanasc_vac`, `Racamae_vac`, `Racapai_vac`, `Altura_vac`, `sexo_vac`) VALUES
(1, 'Mimosa', 'Holandesa', 320.45, '2020-02-11', 'Holandesa', 'Holandes', 135.25, 'Feminino');

-- --------------------------------------------------------

--
-- Estrutura da tabela `vacina_cav`
--

CREATE TABLE `vacina_cav` (
  `IDvac_cav` int(11) NOT NULL,
  `Dataapli_cav` date DEFAULT NULL,
  `proximaapli_cav` date DEFAULT NULL,
  `Tipovasc_cav` varchar(30) DEFAULT NULL,
  `Nomevasc_cav` varchar(30) DEFAULT NULL,
  `Identificacao_cav` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `vacina_cav`
--

INSERT INTO `vacina_cav` (`IDvac_cav`, `Dataapli_cav`, `proximaapli_cav`, `Tipovasc_cav`, `Nomevasc_cav`, `Identificacao_cav`) VALUES
(1, '2003-03-30', '2023-05-30', 'Filhote', 'Tétano', 1),
(2, '2023-02-28', '2024-02-28', 'Filhote', 'Influenza', 1),
(3, '2003-01-10', '2024-03-10', 'Geral', 'Encefalomielite', 1),
(4, '2023-01-10', '2024-01-10', 'Geral', 'Herpes Vírus', 1),
(5, '2023-02-01', '2024-02-01', 'Geral', 'Raiva', 1),
(6, '2023-03-03', '2024-02-03', 'Geral', 'Garrotilho', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `vacina_ovl`
--

CREATE TABLE `vacina_ovl` (
  `IDvasc_ovl` int(10) NOT NULL,
  `Nomevasc_ovl` varchar(40) NOT NULL,
  `Tipovasc_ovl` varchar(40) NOT NULL,
  `Dataapli_ovl` date NOT NULL,
  `proximaapli_ovl` date NOT NULL,
  `id_ovl` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `vacina_ovl`
--

INSERT INTO `vacina_ovl` (`IDvasc_ovl`, `Nomevasc_ovl`, `Tipovasc_ovl`, `Dataapli_ovl`, `proximaapli_ovl`, `id_ovl`) VALUES
(1, 'Raiva', 'Geral', '2022-05-20', '2023-05-20', 1),
(2, 'Clostridiose', 'Filhote', '2022-03-20', '2023-03-20', 1),
(3, 'Linfadenite caseosa', 'Geral', '2023-03-15', '2023-03-15', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `vacina_vac`
--

CREATE TABLE `vacina_vac` (
  `IDvasc_vac` int(11) NOT NULL,
  `Nomevasc_vac` varchar(50) DEFAULT NULL,
  `Tipovasc_vac` varchar(50) DEFAULT NULL,
  `Dataapli_vac` date DEFAULT NULL,
  `proximaapli_vac` date NOT NULL,
  `Identificacao_vac` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `vacina_vac`
--

INSERT INTO `vacina_vac` (`IDvasc_vac`, `Nomevasc_vac`, `Tipovasc_vac`, `Dataapli_vac`, `proximaapli_vac`, `Identificacao_vac`) VALUES
(1, 'Febre Aftosa', 'Obrigatoria', '2023-03-20', '2024-03-20', 1),
(2, 'B19: Brucelose ', 'Obrigatoria', '2023-01-20', '2029-03-20', 1),
(3, 'Raiva', 'Obrigatoria', '2023-03-20', '2024-03-20', 1),
(4, 'Febre Aftosa', 'Obrigatoria', '2022-11-20', '2023-11-20', 1),
(5, 'Clostridioses', 'Geral', '2023-02-02', '2024-03-06', 1),
(6, 'IBR/BVD', 'Geral', '2022-07-12', '2023-01-12', 1),
(7, 'Leptospirose', 'Geral', '2023-01-13', '2024-07-09', 1),
(8, 'Mastite', 'Geral', '2022-12-02', '2024-03-02', 1),
(9, 'Pneumoenterite', 'Unica', '2023-02-02', '2023-02-02', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `vermifugo_cav`
--

CREATE TABLE `vermifugo_cav` (
  `Id_verm` int(11) NOT NULL,
  `Nome_verm` varchar(30) DEFAULT NULL,
  `Marca_verm` varchar(30) DEFAULT NULL,
  `Lote_verm` varchar(40) DEFAULT NULL,
  `Fabricação_verm` date DEFAULT NULL,
  `Validade_verm` date DEFAULT NULL,
  `aplicacao_verm` date DEFAULT NULL,
  `proximaapli_verm` date DEFAULT NULL,
  `Identificacao_cav` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `vermifugo_ovl`
--

CREATE TABLE `vermifugo_ovl` (
  `Id_verm` int(11) NOT NULL,
  `Nome_verm` varchar(30) DEFAULT NULL,
  `Marca_verm` varchar(30) DEFAULT NULL,
  `Lote_verm` varchar(40) DEFAULT NULL,
  `Fabricação_verm` date DEFAULT NULL,
  `Validade_verm` date DEFAULT NULL,
  `aplicacao_verm` date DEFAULT NULL,
  `proximaapli_verm` date DEFAULT NULL,
  `id_ovl` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `vermifugo_vac`
--

CREATE TABLE `vermifugo_vac` (
  `Id_verm` int(11) NOT NULL,
  `Nome_verm` varchar(30) DEFAULT NULL,
  `Marca_verm` varchar(30) DEFAULT NULL,
  `Lote_verm` varchar(40) DEFAULT NULL,
  `Fabricação_verm` date DEFAULT NULL,
  `Validade_verm` date DEFAULT NULL,
  `aplicacao_verm` date DEFAULT NULL,
  `proximaapli_verm` date DEFAULT NULL,
  `Identificacao_vac` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `veterinário_ovl`
--

CREATE TABLE `veterinário_ovl` (
  `CFMV` int(11) NOT NULL,
  `nome_vet` varchar(60) NOT NULL,
  `nasc_vet` date NOT NULL,
  `tel_vet` varchar(30) NOT NULL,
  `data_visita` date NOT NULL,
  `cuidados_vet` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `veterinario_cav`
--

CREATE TABLE `veterinario_cav` (
  `CFMV` int(11) NOT NULL,
  `Tosa_cav` date DEFAULT NULL,
  `Nomevet_cav` varchar(30) DEFAULT NULL,
  `Casqueamento_cav` date DEFAULT NULL,
  `Telefonevet_cav` varchar(15) DEFAULT NULL,
  `Cuidados_cav` varchar(100) DEFAULT NULL,
  `Datavisi_cav` date DEFAULT NULL,
  `Identificacao_cav` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `veterinario_vac`
--

CREATE TABLE `veterinario_vac` (
  `CFMV` varchar(20) NOT NULL,
  `Datavisita_vac` date DEFAULT NULL,
  `Nomevet_vac` varchar(50) DEFAULT NULL,
  `Telefonevet_vac` varchar(20) DEFAULT NULL,
  `nascvet_vac` date DEFAULT NULL,
  `Cuidados_vac` varchar(100) DEFAULT NULL,
  `Casqueamento_vac` date DEFAULT NULL,
  `Identificacao_vac` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alimentação`
--
ALTER TABLE `alimentação`
  ADD PRIMARY KEY (`IDali_vac`),
  ADD KEY `Identificacao_vac` (`Identificacao_vac`);

--
-- Indexes for table `alimentacao_cav`
--
ALTER TABLE `alimentacao_cav`
  ADD PRIMARY KEY (`IDali_cav`),
  ADD KEY `Identificacao_cav` (`Identificacao_cav`);

--
-- Indexes for table `cavalo`
--
ALTER TABLE `cavalo`
  ADD PRIMARY KEY (`Identificacao_cav`);

--
-- Indexes for table `ovelhas`
--
ALTER TABLE `ovelhas`
  ADD PRIMARY KEY (`id_ovl`);

--
-- Indexes for table `periodo_cav`
--
ALTER TABLE `periodo_cav`
  ADD PRIMARY KEY (`IDperiodo_cav`),
  ADD KEY `IDrepr_cav` (`IDrepr_cav`),
  ADD KEY `Identificacao_cav` (`Identificacao_cav`);

--
-- Indexes for table `reprodução_vac`
--
ALTER TABLE `reprodução_vac`
  ADD PRIMARY KEY (`IDrepr_vac`,`IDperiodo_vac`),
  ADD KEY `Identificacao_vac` (`Identificacao_vac`);

--
-- Indexes for table `reproducao_cav`
--
ALTER TABLE `reproducao_cav`
  ADD PRIMARY KEY (`IDrepr_cav`),
  ADD KEY `Identificacao_cav` (`Identificacao_cav`);

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`cpf`);

--
-- Indexes for table `vaca`
--
ALTER TABLE `vaca`
  ADD PRIMARY KEY (`Identificacao_vac`);

--
-- Indexes for table `vacina_cav`
--
ALTER TABLE `vacina_cav`
  ADD PRIMARY KEY (`IDvac_cav`),
  ADD KEY `Identificacao_cav` (`Identificacao_cav`);

--
-- Indexes for table `vacina_ovl`
--
ALTER TABLE `vacina_ovl`
  ADD PRIMARY KEY (`IDvasc_ovl`),
  ADD KEY `id_ovl` (`id_ovl`);

--
-- Indexes for table `vacina_vac`
--
ALTER TABLE `vacina_vac`
  ADD PRIMARY KEY (`IDvasc_vac`),
  ADD KEY `Identificacao_vac` (`Identificacao_vac`);

--
-- Indexes for table `vermifugo_cav`
--
ALTER TABLE `vermifugo_cav`
  ADD PRIMARY KEY (`Id_verm`),
  ADD KEY `Identificacao_cav` (`Identificacao_cav`);

--
-- Indexes for table `vermifugo_ovl`
--
ALTER TABLE `vermifugo_ovl`
  ADD PRIMARY KEY (`Id_verm`),
  ADD KEY `id_ovl` (`id_ovl`);

--
-- Indexes for table `vermifugo_vac`
--
ALTER TABLE `vermifugo_vac`
  ADD PRIMARY KEY (`Id_verm`),
  ADD KEY `Identificacao_vac` (`Identificacao_vac`);

--
-- Indexes for table `veterinário_ovl`
--
ALTER TABLE `veterinário_ovl`
  ADD PRIMARY KEY (`CFMV`);

--
-- Indexes for table `veterinario_cav`
--
ALTER TABLE `veterinario_cav`
  ADD PRIMARY KEY (`CFMV`),
  ADD KEY `Identificacao_cav` (`Identificacao_cav`);

--
-- Indexes for table `veterinario_vac`
--
ALTER TABLE `veterinario_vac`
  ADD PRIMARY KEY (`CFMV`),
  ADD KEY `Identificacao_vac` (`Identificacao_vac`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
