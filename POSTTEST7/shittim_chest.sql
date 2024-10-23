-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Oct 23, 2024 at 07:49 AM
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
  `password` varchar(255) NOT NULL,
  `photo_address` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sensei`
--

INSERT INTO `sensei` (`email`, `username`, `password`, `photo_address`) VALUES
('a@a', 'a', '$2y$10$53jelP08KgYFSvjTzHMRl.A6M2LvX/XuERO7YbepFTxiayGQV8Ztq', NULL),
('zetayu24@gmail.com', 'GalaxionZero', '$2y$10$xKGA8pxHPy0xVaOrskhBqOJ7wnYIEHJTP9jPHAnShxmBw0D9EK2K2', NULL);

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
