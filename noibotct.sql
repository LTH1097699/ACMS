-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 05, 2022 at 06:53 AM
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
-- Table structure for table `noibotct`
--

CREATE TABLE `noibotct` (
  `id` int(10) UNSIGNED NOT NULL,
  `madonvi` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tendonvi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `noibotct`
--

INSERT INTO `noibotct` (`id`, `madonvi`, `tendonvi`, `created_at`, `updated_at`) VALUES
(3, 'AL', 'Nông trường An Lộc', NULL, NULL),
(4, 'BL', 'Nông trường Bình Lộc', NULL, NULL),
(5, 'DG', 'Nông trường Dầu Giây', NULL, NULL),
(6, 'ÔQ', 'Nông trường Ông Quế', NULL, NULL),
(7, 'LT', 'Nông trường Long Thành', NULL, NULL),
(8, 'TB', 'Nông trường Trảng Bom', NULL, NULL),
(9, 'TT', 'Nông trường Túc Trưng', NULL, NULL),
(10, 'HG', 'Nông trường Hàng Gòn', NULL, NULL),
(11, 'CM', 'Nông trường Cẩm Mỹ', NULL, NULL),
(12, 'CĐ', 'Nông trường Cẩm Đường', NULL, NULL),
(13, 'AV', 'Nông trường An Viễng', NULL, NULL),
(14, 'THT', 'Nông trường Thái Hiệp Thành', NULL, NULL),
(15, 'XNCB', 'Xí Nghiệp Chế Biến Cao Su', NULL, NULL),
(16, 'KSĐL', 'Khách Sạn Hồng Hạnh', NULL, NULL),
(17, 'CKVT', 'Xí Nghiệp Cơ Khí Vận Tải', NULL, NULL),
(18, 'BVĐK', 'Bệnh Viện Đa Khoa Cao Su Đồng Nai', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `noibotct`
--
ALTER TABLE `noibotct`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `madonvi` (`madonvi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `noibotct`
--
ALTER TABLE `noibotct`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
