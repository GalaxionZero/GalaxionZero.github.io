-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Oct 16, 2024 at 12:31 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shittim_chest`
--
CREATE DATABASE IF NOT EXISTS `shittim_chest` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `shittim_chest`;

-- --------------------------------------------------------

--
-- Table structure for table `sensei`
--

CREATE TABLE `sensei` (
  `email` varchar(40) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(30) NOT NULL,
  `photo_address` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sensei`
--

INSERT INTO `sensei` (`email`, `username`, `password`, `photo_address`) VALUES
('adi@gmail.com', 'adi', '123', ''),
('guntur0541@gmail.com', 'Guntur', '123', ''),
('zetayu24@gmail.com', 'Zero', 't.^tkc2^u^\"g4Yj', '2024-10-16 08.31.30.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sensei`
--
ALTER TABLE `sensei`
  ADD PRIMARY KEY (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
