-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 22, 2023 at 10:02 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ordem_servico`
--

-- --------------------------------------------------------

--
-- Table structure for table `adm`
--

CREATE TABLE `adm` (
  `id` int(11) NOT NULL,
  `user` varchar(4) NOT NULL,
  `password` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adm`
--

INSERT INTO `adm` (`id`, `user`, `password`) VALUES
(0, 'adm', 'adm');

-- --------------------------------------------------------

--
-- Table structure for table `cliente`
--

CREATE TABLE `cliente` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `cpf` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `endereco` varchar(50) NOT NULL,
  `bairro` varchar(50) NOT NULL,
  `telefone` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cliente`
--

INSERT INTO `cliente` (`id`, `nome`, `cpf`, `email`, `endereco`, `bairro`, `telefone`) VALUES
(6, 'Oscarlinhos Maia', '06745975103', 'edu@edu.com', 'Gwynevere Castle', 'Anor Londo', '85985741491'),
(7, 'leno brega', '78945612300', 'leno@leno.com', 'fuscao', 'Campo Grande', '6969696969'),
(8, 'Brigida', '06745678922', 'perdi@sanidade.com', 'louco hahahahahah', 'estoy', '8545782322'),
(9, 'Apex', '06784215727', 'apex@apex.com', '25 de março', 'Anor Londo 2', '85985731491');

-- --------------------------------------------------------

--
-- Table structure for table `ordem_servico`
--

CREATE TABLE `ordem_servico` (
  `id` int(11) NOT NULL,
  `nome_cliente` varchar(255) DEFAULT NULL,
  `cpf_cliente` varchar(255) DEFAULT NULL,
  `placa` varchar(255) DEFAULT NULL,
  `nome_veiculo` varchar(255) DEFAULT NULL,
  `marca` varchar(255) DEFAULT NULL,
  `descricao1` varchar(255) DEFAULT NULL,
  `valor1` decimal(10,2) DEFAULT NULL,
  `descricao2` varchar(255) DEFAULT NULL,
  `valor2` decimal(10,2) DEFAULT NULL,
  `descricao3` varchar(255) DEFAULT NULL,
  `valor3` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ordem_servico`
--

INSERT INTO `ordem_servico` (`id`, `nome_cliente`, `cpf_cliente`, `placa`, `nome_veiculo`, `marca`, `descricao1`, `valor1`, `descricao2`, `valor2`, `descricao3`, `valor3`) VALUES
(29, 'Apex', '06784215727', 'APEX854', 'SUPRA MK-3', 'TOYOTA', 'Motor Bi-Turbo 3000HP ', '9000.00', 'BODY KIT', '2000.00', 'RODA ARO 15', '500.00'),
(30, 'Brigida', '06745678922', 'BRI5698', 'Fuscão Preto', 'Wolkswagen', 'Troca de Oleo', '25.00', 'Manutenção no Motor', '500.00', 'BODY KIT', '2000.00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adm`
--
ALTER TABLE `adm`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ordem_servico`
--
ALTER TABLE `ordem_servico`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `ordem_servico`
--
ALTER TABLE `ordem_servico`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
