-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 08-Jul-2019 às 04:15
-- Versão do servidor: 10.1.38-MariaDB
-- versão do PHP: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bancobriga`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `luta`
--

CREATE TABLE `luta` (
  `id` int(11) NOT NULL,
  `desafiado` int(11) DEFAULT NULL,
  `desafiante` int(11) DEFAULT NULL,
  `rounds` int(11) DEFAULT NULL,
  `ganhador` int(11) DEFAULT NULL,
  `comentario` text COLLATE utf16_bin
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_bin;

-- --------------------------------------------------------

--
-- Estrutura da tabela `lutador`
--

CREATE TABLE `lutador` (
  `id` int(11) NOT NULL,
  `nacionalidade` varchar(20) COLLATE utf16_bin DEFAULT NULL,
  `nascimento` date DEFAULT NULL,
  `altura` decimal(3,2) DEFAULT NULL,
  `peso` decimal(5,2) DEFAULT NULL,
  `categoria` enum('L','M','P') COLLATE utf16_bin DEFAULT NULL,
  `vitorias` int(11) DEFAULT '0',
  `derrotas` int(11) DEFAULT '0',
  `empates` int(11) DEFAULT '0',
  `habilidade` decimal(5,2) DEFAULT NULL,
  `nome` varchar(30) COLLATE utf16_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf16 COLLATE=utf16_bin;

--
-- Extraindo dados da tabela `lutador`
--

INSERT INTO `lutador` (`id`, `nacionalidade`, `nascimento`, `altura`, `peso`, `categoria`, `vitorias`, `derrotas`, `empates`, `habilidade`, `nome`) VALUES
(27, 'Brasileiro', '2001-03-20', '1.63', '65.00', 'L', 0, 0, 0, '24.50', 'Pedro, o Grande'),
(28, 'Brasileiro', '2001-03-20', '1.63', '65.00', 'L', 0, 0, 0, '24.50', 'Pedro, o Grande'),
(29, 'Brasileiro', '2001-03-20', '1.63', '65.00', 'L', 0, 0, 0, '24.50', 'Pedro, o Grande'),
(30, 'Brasileiro', '2001-03-20', '1.63', '65.00', 'L', 0, 0, 0, '24.50', 'Pedro, o Grande'),
(31, 'Brasileiro', '2001-03-20', '1.63', '65.00', 'L', 0, 0, 0, '24.50', 'Pedro, o Grande'),
(32, 'Brasileiro', '2001-03-20', '1.63', '65.00', 'L', 0, 0, 0, '24.50', 'Pedro, o Grande'),
(33, 'Brasileiro', '2001-03-20', '1.63', '65.00', 'L', 0, 0, 0, '24.50', 'Pedro, o Grande'),
(34, 'Brasileiro', '2001-03-20', '1.63', '65.00', 'L', 0, 0, 0, '24.50', 'Pedro, o Grande'),
(35, 'dwqdwqdqw', '2001-02-20', '1.00', '70.00', 'L', 0, 0, 0, '25.00', 'pedro felipe barauna'),
(36, 'dwqdwqdqw', '2001-02-20', '1.00', '70.00', 'L', 0, 0, 0, '25.00', 'pedro felipe barauna');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `luta`
--
ALTER TABLE `luta`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lutador`
--
ALTER TABLE `lutador`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `luta`
--
ALTER TABLE `luta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `lutador`
--
ALTER TABLE `lutador`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `luta`
--
ALTER TABLE `luta`
  ADD CONSTRAINT `desafiado` FOREIGN KEY (`id`) REFERENCES `lutador` (`id`),
  ADD CONSTRAINT `desafiante` FOREIGN KEY (`id`) REFERENCES `lutador` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
