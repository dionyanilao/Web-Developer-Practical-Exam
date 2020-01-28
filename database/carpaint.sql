-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 28, 2020 at 08:00 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.1.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `carpaint`
--

-- --------------------------------------------------------

--
-- Table structure for table `paints`
--

CREATE TABLE `paints` (
  `id` int(255) NOT NULL,
  `plate` varchar(255) NOT NULL,
  `current` varchar(255) NOT NULL,
  `target` varchar(255) NOT NULL,
  `action` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `paints`
--

INSERT INTO `paints` (`id`, `plate`, `current`, `target`, `action`) VALUES
(1, 'RE23DEW', 'blue', 'red', 'pending'),
(2, 'ERWER12', 'green', 'blue', 'done'),
(3, 'ERWER22', 'red', 'green', 'pending'),
(5, 'FGDF23', 'red', 'blue', 'done'),
(7, 'evbvnvc', 'red', 'green', 'done'),
(12, '123456', 'red', 'green', 'pending'),
(14, '123qwerty', 'blue', 'red', 'done'),
(17, 'vbcxvbx', 'blue', 'green', 'pending'),
(18, 'car', 'green', 'blue', 'pending'),
(21, 'diony', 'blue', 'green', 'pending'),
(29, 'FGDF23', 'red', 'green', 'pending');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `paints`
--
ALTER TABLE `paints`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `paints`
--
ALTER TABLE `paints`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
