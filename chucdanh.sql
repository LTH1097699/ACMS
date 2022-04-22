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
-- Table structure for table `chucdanh`
--

CREATE TABLE `chucdanh` (
  `id` int(10) UNSIGNED NOT NULL,
  `machucdanh` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tenchucdanh` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `chucdanh`
--

INSERT INTO `chucdanh` (`id`, `machucdanh`, `tenchucdanh`, `created_at`, `updated_at`) VALUES
(1, '', 'CN khai thác mủ cao su', NULL, NULL),
(2, '', 'CN chế biến mủ cao su', NULL, NULL),
(3, '', 'CN bảo vệ thực vật', NULL, NULL),
(4, '', 'CN đánh đông, bốc xếp, hốt mủ', NULL, NULL),
(5, '', 'CN bảo vệ vườn cây khai thác', NULL, NULL),
(6, '', 'CN bảo vệ nhà máy chế biến', NULL, NULL),
(7, '', 'TT trồng mới, chăm sóc cây cao su', NULL, NULL),
(8, '', 'CN trồng mới, chăm sóc cây cao su', NULL, NULL),
(9, '', 'CN trồng mới, chăm sóc vườn giống cao su', NULL, NULL),
(10, '', 'CN bảo vệ vườn cây kiến thiết cơ bản', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chucdanh`
--
ALTER TABLE `chucdanh`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chucdanh`
--
ALTER TABLE `chucdanh`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
