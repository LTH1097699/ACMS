-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 10, 2022 at 01:21 PM
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
-- Table structure for table `hopdong`
--

CREATE TABLE `hopdong` (
  `id` int(10) UNSIGNED NOT NULL,
  `mahopdong` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thoihan` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hopdong`
--

INSERT INTO `hopdong` (`id`, `mahopdong`, `thoihan`, `created_at`, `updated_at`) VALUES
(1, 'A', 'Không xác định thời gian', '2022-04-07 08:19:59', '2022-04-07 08:19:59'),
(2, 'B', 'từ đủ 12 tháng đến dưới 36 tháng', NULL, NULL),
(3, 'C', 'từ đủ 03 tháng đến dưới 12 tháng', NULL, NULL),
(4, 'D', 'từ đủ 01 tháng đến dưới 03 tháng', NULL, NULL),
(5, 'E', 'dưới 1 tháng', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hopdong`
--
ALTER TABLE `hopdong`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `hopdong`
--
ALTER TABLE `hopdong`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
