-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 10, 2022 at 01:22 PM
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
-- Table structure for table `bangchamcong`
--

CREATE TABLE `bangchamcong` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_nhansu` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tonggiothucte` double NOT NULL,
  `tonggiotheoca` double NOT NULL,
  `sogioditre` double NOT NULL,
  `thoigiantangca` double NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bangchamcong`
--

INSERT INTO `bangchamcong` (`id`, `id_nhansu`, `tonggiothucte`, `tonggiotheoca`, `sogioditre`, `thoigiantangca`, `created_at`, `updated_at`) VALUES
(4, '22', 5, 8, 4, 0, '2022-04-05 08:05:18', '2022-04-07 02:13:55'),
(5, '23', 8, 8, 0, 1, '2022-04-04 08:05:18', '2022-04-05 08:05:18'),
(6, '24', 6, 8, 5, 3, '2022-04-03 08:05:18', '2022-04-05 08:05:18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bangchamcong`
--
ALTER TABLE `bangchamcong`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bangchamcong`
--
ALTER TABLE `bangchamcong`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
