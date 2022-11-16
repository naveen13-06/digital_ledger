-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 21, 2020 at 12:00 PM
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
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `mobile_number` text NOT NULL,
  `email` text NOT NULL,
  `profileImage` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `name`, `mobile_number`, `email`, `profileImage`) VALUES
(1, 'rajesh', '9876543252', 'rajesh@rajesh.com', 'image/user/user7.jpg'),
(2, 'akshay', '8769339951', 'akshay@akshay.com', 'image/user/user2.jpg'),
(3, 'pradeep', '7878387600', 'pradeep@pradeep.com', 'image/user/user3.jpg'),
(4, 'vikas', '7638652346', 'vikas@vikas.com', 'image/user/user4.jpg'),
(5, 'pintu', '9836467845', 'pintu@pintu.com', 'image/user/user5.jpg'),
(6, 'mukesh', '8757846578', 'mukesh@mukesh.com', 'image/user/user6.jpg'),
(9, 'kamal', '9838657897', 'kamal@kamal.com', 'image/user/2.jpg'),
(10, 'Happy ', 'Happy', 'happy@haappy.com', 'image/user/Screenshot_20200120-224952_Chrome.jpg'),
(11, 'q', '', '', 'image/user/'),
(12, 'Ram kishan', '9829571154', 'hemantnawal@rediff.com', 'image/user/03000068.jpg'),
(13, 'Jay shankar dhuni wala ', '8769335561', 'jayshankar@gmail.com', 'image/user/IMG-20190905-WA0004-01.jpeg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
