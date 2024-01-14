-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 14, 2024 at 10:34 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `starbus`
--

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` int(20) NOT NULL,
  `fullname` varchar(30) NOT NULL,
  `phone` int(10) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `pass` varchar(20) NOT NULL,
  `cpass` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `fullname`, `phone`, `Email`, `username`, `pass`, `cpass`) VALUES
(1, 'ismail abdi ismail', 123456789, 'ismaililmi39@gmail.c', 'juice', 'juice12', 'juice12'),
(4, 'Muse Dahi Ali', 2147483647, 'ismaililmi49@gmail.c', 'jujuju', '1231231', '1231231'),
(5, 'Muse Dahi Ali', 634677584, 'Admin@admin.com', 'ismail', 'ismail', 'ismail'),
(6, 'ismail', 634677584, 'ismaililmi49@gmail.c', 'admin', '12', '12'),
(7, 'ismail abdi', 634677584, 'ismail@gmail.com', 'kuku', 'ismail', 'ismail'),
(8, 'ismail abdi', 23232323, 'Ismail@gmail.com', 'ismailabdi', 'ismail', 'ismail'),
(9, 'ismail abdi', 23232323, 'Ismail@gmail.com', 'ismailabdi', 'ismail', 'ismail'),
(10, 'ismail abdi', 964677584, 'ismo@gmail.com', 'ismacil', '123', ''),
(11, 'ismail abdi', 987654321, 'ismail@gmail.com', 'ismailbdi', 'ismail', 'ismail');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
