-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 15, 2019 at 12:33 PM
-- Server version: 10.3.15-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `assign02`
--

-- --------------------------------------------------------

--
-- Table structure for table `mobiles`
--

CREATE TABLE `mobiles` (
  `id` int(5) NOT NULL,
  `name` varchar(10) NOT NULL,
  `model` varchar(10) NOT NULL,
  `price` int(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mobiles`
--

INSERT INTO `mobiles` (`id`, `name`, `model`, `price`) VALUES
(1, 'Mercedes-B', 'S-Class', 800000),
(2, 'BMW', '7-Series', 780000),
(3, 'Porsche', 'Panamera', 750000),
(4, 'Chevrolet', 'Corvette', 680000),
(5, 'Lexus', 'LC', 670000),
(6, 'Porsche', '911', 660000),
(7, 'Audi', 'A5', 650000),
(8, 'Tesla', 'S', 750000),
(9, 'Tesla', '3', 700000),
(10, 'Acura', 'NSX', 610000),
(11, 'Mercedes-B', 'S-Class', 800000),
(12, 'BMW', '7-Series', 780000),
(13, 'Porsche', 'Panamera', 750000),
(14, 'Chevrolet', 'Corvette', 680000),
(15, 'Lexus', 'LC', 670000),
(16, 'Porsche', '911', 660000),
(17, 'Audi', 'A5', 650000),
(18, 'Tesla', 'S', 750000),
(19, 'Tesla', '3', 700000),
(20, 'Acura', 'NSX', 610000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mobiles`
--
ALTER TABLE `mobiles`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mobiles`
--
ALTER TABLE `mobiles`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
