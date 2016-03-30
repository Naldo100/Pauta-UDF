-- phpMyAdmin SQL Dump
-- version 4.5.0.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 23-Mar-2016 às 23:40
-- Versão do servidor: 10.0.17-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pautaudf`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `aluno`
--

CREATE TABLE `aluno` (
  `id_aluno` int(10) UNSIGNED NOT NULL,
  `nome_aluno` varchar(255) DEFAULT NULL,
  `rgm_aluno` int(10) UNSIGNED DEFAULT NULL,
  `email_aluno` varchar(255) DEFAULT NULL,
  `cpf_aluno` varchar(20) DEFAULT NULL,
  `fone_aluno` varchar(20) DEFAULT NULL,
  `data_nasc_aluno` date DEFAULT NULL,
  `data_cad_aluno` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `aluno_disciplina`
--

CREATE TABLE `aluno_disciplina` (
  `aluno_id_aluno` int(10) UNSIGNED NOT NULL,
  `disciplina_id_disciplina` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `disciplina`
--

CREATE TABLE `disciplina` (
  `id_disciplina` int(10) UNSIGNED NOT NULL,
  `titulo_disciplina` varchar(255) DEFAULT NULL,
  `periodo_disciplina` char(1) DEFAULT NULL,
  `ch_disciplina` int(10) UNSIGNED DEFAULT NULL,
  `sala_disciplina` varchar(10) DEFAULT NULL,
  `professor_disciplina` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `faltas`
--

CREATE TABLE `faltas` (
  `id_faltas` int(10) UNSIGNED NOT NULL,
  `aluno_id_aluno` int(10) UNSIGNED NOT NULL,
  `registro_faltas` tinyint(1) DEFAULT NULL,
  `data_faltas` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aluno`
--
ALTER TABLE `aluno`
  ADD PRIMARY KEY (`id_aluno`);

--
-- Indexes for table `aluno_disciplina`
--
ALTER TABLE `aluno_disciplina`
  ADD PRIMARY KEY (`aluno_id_aluno`,`disciplina_id_disciplina`),
  ADD KEY `aluno_has_disciplina_FKIndex1` (`aluno_id_aluno`),
  ADD KEY `aluno_has_disciplina_FKIndex2` (`disciplina_id_disciplina`);

--
-- Indexes for table `disciplina`
--
ALTER TABLE `disciplina`
  ADD PRIMARY KEY (`id_disciplina`);

--
-- Indexes for table `faltas`
--
ALTER TABLE `faltas`
  ADD PRIMARY KEY (`id_faltas`),
  ADD KEY `faltas_FKIndex1` (`aluno_id_aluno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aluno`
--
ALTER TABLE `aluno`
  MODIFY `id_aluno` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `disciplina`
--
ALTER TABLE `disciplina`
  MODIFY `id_disciplina` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `faltas`
--
ALTER TABLE `faltas`
  MODIFY `id_faltas` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
