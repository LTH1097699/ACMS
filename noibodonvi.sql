-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 10, 2022 at 01:23 PM
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
-- Table structure for table `noibodonvi`
--

CREATE TABLE `noibodonvi` (
  `id` int(10) UNSIGNED NOT NULL,
  `tencongviec` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `noibodonvi`
--

INSERT INTO `noibodonvi` (`id`, `tencongviec`, `created_at`, `updated_at`) VALUES
(1, 'Khai thác', NULL, NULL),
(2, 'Chăm sóc', NULL, NULL),
(3, 'Chế biến', NULL, NULL),
(4, 'Bảo vệ', NULL, NULL),
(5, 'Phụ trợ', NULL, NULL),
(6, 'Quản lý phục vụ', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `noibodonvi`
--
ALTER TABLE `noibodonvi`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `noibodonvi`
--
ALTER TABLE `noibodonvi`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
