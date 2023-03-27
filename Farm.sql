-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 27-Mar-2023 às 19:53
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

DROP TABLE IF EXISTS `alimentação`;
CREATE TABLE `alimentação` (
  `IDali_vac` int(11) NOT NULL,
  `Tiposali_vac` varchar(50) DEFAULT NULL,
  `Identificacao_vac` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `alimentacao_cav`
--

DROP TABLE IF EXISTS `alimentacao_cav`;
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

DROP TABLE IF EXISTS `cavalo`;
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

-- --------------------------------------------------------

--
-- Estrutura da tabela `ovelhas`
--

DROP TABLE IF EXISTS `ovelhas`;
CREATE TABLE `ovelhas` (
  `id_ovl` int(11) NOT NULL,
  `nome_ovl` varchar(70) NOT NULL,
  `idade_ovl` int(11) NOT NULL,
  `raca_ovl` varchar(50) NOT NULL,
  `sexo_ovl` char(1) NOT NULL,
  `cor_ovl` varchar(30) NOT NULL,
  `peso_ovl` double(11,10) NOT NULL,
  `altura_ovl` double(11,10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `periodo_cav`
--

DROP TABLE IF EXISTS `periodo_cav`;
CREATE TABLE `periodo_cav` (
  `IDperiodo_cav` int(11) NOT NULL,
  `Identificacao_cav` int(11) DEFAULT NULL,
  `IDrepr_cav` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `reprodução_vac`
--

DROP TABLE IF EXISTS `reprodução_vac`;
CREATE TABLE `reprodução_vac` (
  `IDrepr_vac` int(11) NOT NULL,
  `Datarepr_vac` date DEFAULT NULL,
  `IDperiodo_vac` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `reproducao_cav`
--

DROP TABLE IF EXISTS `reproducao_cav`;
CREATE TABLE `reproducao_cav` (
  `IDrepr_cav` int(11) NOT NULL,
  `Datacio_cav` varchar(30) DEFAULT NULL,
  `Ciclocio_cav` varchar(30) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE `usuario` (
  `cpf` int(20) NOT NULL,
  `nome` varchar(75) NOT NULL,
  `datanaci` date NOT NULL,
  `senha` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `vaca`
--

DROP TABLE IF EXISTS `vaca`;
CREATE TABLE `vaca` (
  `Identificacao_vac` int(11) NOT NULL,
  `Nome_vac` varchar(40) DEFAULT NULL,
  `Raca_va` varchar(30) DEFAULT NULL,
  `Peso_vac` double DEFAULT NULL,
  `Datanasc_va` date DEFAULT NULL,
  `Racamae_vac` varchar(30) DEFAULT NULL,
  `Racapai_vac` varchar(30) DEFAULT NULL,
  `Altura_vac` double DEFAULT NULL,
  `IDrepr_vac` int(11) DEFAULT NULL,
  `IDvasc_vac` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `vacina_cav`
--

DROP TABLE IF EXISTS `vacina_cav`;
CREATE TABLE `vacina_cav` (
  `IDvac_cav` int(11) NOT NULL,
  `Dataapli_cav` date DEFAULT NULL,
  `proximaali_cav` date DEFAULT NULL,
  `Tipovasc_cav` varchar(30) DEFAULT NULL,
  `Nomevasc_cav` varchar(30) DEFAULT NULL,
  `Identificacao_cav` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `vacina_ovl`
--

DROP TABLE IF EXISTS `vacina_ovl`;
CREATE TABLE `vacina_ovl` (
  `IDvasc_ovl` int(10) NOT NULL,
  `Nomevasc_ovl` varchar(40) NOT NULL,
  `Tipovasc_ovl` varchar(40) NOT NULL,
  `Dataapli_ovl` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `vacina_vac`
--

DROP TABLE IF EXISTS `vacina_vac`;
CREATE TABLE `vacina_vac` (
  `IDvasc_vac` int(11) NOT NULL,
  `Nomevasc_vac` varchar(50) DEFAULT NULL,
  `Tipovasc_vac` varchar(50) DEFAULT NULL,
  `Dataapli_vac` date DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `veterinário_ovl`
--

DROP TABLE IF EXISTS `veterinário_ovl`;
CREATE TABLE `veterinário_ovl` (
  `id_vet` int(11) NOT NULL,
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

DROP TABLE IF EXISTS `veterinario_cav`;
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

DROP TABLE IF EXISTS `veterinario_vac`;
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
  ADD KEY `Identificacao_cav` (`Identificacao_cav`),
  ADD KEY `IDrepr_cav` (`IDrepr_cav`);

--
-- Indexes for table `reprodução_vac`
--
ALTER TABLE `reprodução_vac`
  ADD PRIMARY KEY (`IDrepr_vac`,`IDperiodo_vac`);

--
-- Indexes for table `reproducao_cav`
--
ALTER TABLE `reproducao_cav`
  ADD PRIMARY KEY (`IDrepr_cav`);

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
  ADD PRIMARY KEY (`IDvasc_ovl`);

--
-- Indexes for table `vacina_vac`
--
ALTER TABLE `vacina_vac`
  ADD PRIMARY KEY (`IDvasc_vac`);

--
-- Indexes for table `veterinário_ovl`
--
ALTER TABLE `veterinário_ovl`
  ADD PRIMARY KEY (`id_vet`);

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
