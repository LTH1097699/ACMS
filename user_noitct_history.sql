-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 05, 2022 at 06:52 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `acms2`
--

-- --------------------------------------------------------

--
-- Table structure for table `user_noitct_history`
--

CREATE TABLE `user_noitct_history` (
  `id` int(11) NOT NULL,
  `id_nhansu` int(11) DEFAULT NULL,
  `new_madonvi` varchar(11) DEFAULT NULL,
  `old_madonvi` varchar(11) DEFAULT NULL,
  `date_history` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_noitct_history`
--

INSERT INTO `user_noitct_history` (`id`, `id_nhansu`, `new_madonvi`, `old_madonvi`, `date_history`) VALUES
(2, 22, 'THT', 'AL', '2022-03-31 14:54:04'),
(3, 22, 'AL', 'THT', '2022-04-01 07:23:34'),
(4, 24, 'CKVT', 'AL', '2022-04-01 09:09:13'),
(5, 24, 'AL', 'CKVT', '2022-04-01 09:11:13');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_noitct_history`
--
ALTER TABLE `user_noitct_history`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user_noitct_history`
--
ALTER TABLE `user_noitct_history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
