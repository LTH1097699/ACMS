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
-- Table structure for table `phongban`
--

CREATE TABLE `phongban` (
  `id` int(10) UNSIGNED NOT NULL,
  `maphong` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tenphong` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dienthoai` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `phongban`
--

INSERT INTO `phongban` (`id`, `maphong`, `tenphong`, `dienthoai`, `created_at`, `updated_at`) VALUES
(2, 'PB.ĐU', 'Đảng Ủy Tổng Công Ty', '', NULL, NULL),
(3, 'PB.CĐ', 'Công Đoàn Tổng Công Ty', '', NULL, NULL),
(4, 'PB.ĐTN', 'Đoàn Thanh Niên Tổng Công Ty', '', NULL, NULL),
(5, 'PB.KTCS', 'Phòng Kỹ Thuật Cao Su', '', NULL, NULL),
(6, 'PB.KHĐT', 'Phòng Kế Hoạch Đầu Tư', '', NULL, NULL),
(7, 'PB.QLCL', 'Phòng Quản Lý Chất Lượng', '', NULL, NULL),
(8, 'PB.TCCB', 'Phòng Tổ Chức Cán B', '', NULL, NULL),
(9, 'PB.LĐTL', 'Phòng Lao Động Tiền Lương', '', NULL, NULL),
(10, 'PB.XNK', 'Phòng Xuất Nhập Khẩu', '', NULL, NULL),
(11, 'PB.XDCB', 'Phòng Xây Dựng Cơ Bản', '', NULL, NULL),
(12, 'PB.TCKT', 'Phòng Tài Chính Kế Toán', '', NULL, NULL),
(13, 'PB.TTBVQS', 'Phòng Thanh Tra Bảo Vệ Quân Sự', '', NULL, NULL),
(14, 'PB.TĐVT', 'Phòng Thi Đua Văn Thể', '', NULL, NULL),
(15, 'PB.CN', 'Phòng Công Nghiệp', '', NULL, NULL),
(16, 'PB.VP', 'Văn Phòng Tổng Công Ty', '', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `phongban`
--
ALTER TABLE `phongban`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `maphong` (`maphong`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `phongban`
--
ALTER TABLE `phongban`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
