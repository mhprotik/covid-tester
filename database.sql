-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 07, 2022 at 06:23 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `covid`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `age` int(3) NOT NULL,
  `password` varchar(50) NOT NULL,
  `create_datetime` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `age`, `password`, `create_datetime`) VALUES
(19, 'adib', 'adibarmanshuvro89@gmail.com', 22, '81dc9bdb52d04dc20036dbd8313ed055', '2022-03-24 04:50:38'),
(20, 'arif', 'arif@gmail.com', 23, '81dc9bdb52d04dc20036dbd8313ed055', '2022-03-24 05:10:42'),
(21, 'anik', 'anik@gmail.com', 24, '81dc9bdb52d04dc20036dbd8313ed055', '2022-03-24 05:27:49'),
(22, 'mim', 'mim@gmail.com', 22, '81dc9bdb52d04dc20036dbd8313ed055', '2022-03-24 05:28:26'),
(23, 'protik', 'protik@gmail.com', 23, '81dc9bdb52d04dc20036dbd8313ed055', '2022-03-24 05:28:49'),
(24, 'rupom', 'nadir@gmail.com', 26, '81dc9bdb52d04dc20036dbd8313ed055', '2022-03-24 05:29:03'),
(25, 'sagar', 'sgrmgi@gmail.com', 16, 'ecf99e68289325d0025b030522f06d11', '2022-03-24 05:30:44'),
(26, 'aa', 'a@gmail.com', 11, '81dc9bdb52d04dc20036dbd8313ed055', '2022-03-24 05:50:27'),
(27, 'fahim', 'f@gmail.com', 22, '81dc9bdb52d04dc20036dbd8313ed055', '2022-04-07 05:45:27');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
