-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 09, 2024 at 03:50 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rpl`
--

-- --------------------------------------------------------

--
-- Table structure for table `bara`
--

CREATE TABLE `bara` (
  `id` int NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bara`
--

INSERT INTO `bara` (`id`, `name`) VALUES
(1, 'jembut'),
(2, 'kontol'),
(3, 'kontol'),
(4, 'kontol'),
(5, 'ulo gondrong');

-- --------------------------------------------------------

--
-- Table structure for table `bara2`
--

CREATE TABLE `bara2` (
  `id` int NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bara2`
--

INSERT INTO `bara2` (`id`, `name`) VALUES
(1, 'kontol'),
(2, 'beruang'),
(3, 'saya di pukul'),
(4, 'garong'),
(5, 'dimakan beruang'),
(6, 'dimakan beruang'),
(13, 'jefwfheiufheifhe');

-- --------------------------------------------------------

--
-- Table structure for table `siswa_lemu`
--

CREATE TABLE `siswa_lemu` (
  `nomer` int NOT NULL,
  `nama` varchar(225) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `siswa_lemu`
--

INSERT INTO `siswa_lemu` (`nomer`, `nama`) VALUES
(11, 'njkbkhb'),
(12, 'Rekayasa P'),
(13, 'tttttt');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bara`
--
ALTER TABLE `bara`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bara2`
--
ALTER TABLE `bara2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `siswa_lemu`
--
ALTER TABLE `siswa_lemu`
  ADD PRIMARY KEY (`nomer`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bara`
--
ALTER TABLE `bara`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `bara2`
--
ALTER TABLE `bara2`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `siswa_lemu`
--
ALTER TABLE `siswa_lemu`
  MODIFY `nomer` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
