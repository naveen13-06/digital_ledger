-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 22, 2020 at 09:27 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id6374141_chitchat`
--

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `serialNo` int(11) NOT NULL,
  `id` text NOT NULL,
  `type` text NOT NULL,
  `amount` text NOT NULL,
  `reason` text NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`serialNo`, `id`, `type`, `amount`, `reason`, `date`) VALUES
(1, '1', 'Credit', '2,000', 'salery', '0000-00-00'),
(2, '1', 'Debit', '3000', 'pani puri', '0000-00-00'),
(5, '2', 'Credit', '3,464', 'testig', '0000-00-00'),
(6, '2', 'Debit', '7353', 'testigtyuasyu', '0000-00-00'),
(9, '1', 'Credit', '23', 'ewe', '0000-00-00'),
(10, '1', 'Credit', '32', '23', '0000-00-00'),
(11, '1', 'Credit', '32434', 'sd', '0000-00-00'),
(12, 'Rajesh', 'Credit', '123', 'Testing', '0000-00-00'),
(13, '', 'Credit', '123', 'Testing', '0000-00-00'),
(14, '1', 'Credit', '222', 'Gdg', '0000-00-00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`serialNo`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `serialNo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
