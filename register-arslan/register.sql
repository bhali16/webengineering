-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 24, 2019 at 05:34 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `oops_login`
--

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `mobile` bigint(14) NOT NULL,
  `password` varchar(40) NOT NULL,
  `image` varchar(50) NOT NULL,
  `r` varchar(255) NOT NULL,
  `list` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `name`, `email`, `mobile`, `password`, `image`, `r`, `list`) VALUES
(16, 'aamir', '', 1234567, 'sdfghjk', '', '', ''),
(21, 'danish', '', 234, '234', '', '', ''),
(22, 'danish', '', 555555555, '555555555', 'bg4 - Copy.png', '', ''),
(23, 'danish', 'dsaifi007@gmail.com', 2222222, '22222222222', 'bg4 - Copy.png', '', ''),
(24, 'arslan', 'arslan@gmail.com', 9092309923, '12345', '106.jpg', '', ''),
(25, 'arslan', 'arslan@gmail.com', 1, '12345', '13227142_1090855667653108_4278260407903259250_n.jp', 'Male', ''),
(26, 'arslan', 'arslan@gmail.com', 2, '12345', '50542988_835954470077089_7096105487111815168_n.jpg', 'Male', '2'),
(27, 'waqar', 'arslan@gmail.com', 3, '$2y$10$7SoZ/jiyCIBFW72pLojSxePfSSxw4nm.e', '4k-wallpaper-astronomy-evening-2085998.jpg', 'Female', 'one');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
