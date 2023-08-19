-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2023 at 01:28 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `migocwb`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `sobrenome` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `senha` varchar(50) NOT NULL,
  `cep` int(8) NOT NULL,
  `cidade` varchar(35) NOT NULL,
  `uf` int(2) NOT NULL,
  `rua` varchar(50) NOT NULL,
  `numero` int(6) NOT NULL,
  `bairro` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nome`, `sobrenome`, `email`, `senha`, `cep`, `cidade`, `uf`, `rua`, `numero`, `bairro`) VALUES
(10, 'Teste', 'admin', 'admin2@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 82640000, 'Curitiba', 0, 'Rua João Gbur', 1175, 'Santa Cândida'),
(11, 'Teste2', 'admin2', 'admin@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 82640000, 'Curitiba', 0, 'Rua João Gbur', 1175, 'Santa Cândida'),
(12, 'Teste3', 'admin3', 'admin3@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 82640000, 'Curitiba', 0, 'Rua João Gbur', 1175, 'Santa Cândida');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
