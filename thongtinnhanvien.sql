-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 05, 2022 at 06:51 AM
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
-- Table structure for table `thongtinnhanvien`
--

CREATE TABLE `thongtinnhanvien` (
  `id` int(10) UNSIGNED NOT NULL,
  `ma_nhanvien` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hovaten` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gioitinh` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ngaysinh` date DEFAULT NULL,
  `cmnd` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ngaycap` date DEFAULT NULL,
  `noicap` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tongiao` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dantocthieuso` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `diachi` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `chuyenmon` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `trinhdo` int(11) DEFAULT NULL,
  `vanban_chungchi` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `macongviec` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `maphong` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sohopdong` int(11) DEFAULT NULL,
  `mangach` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mucluonghientai` double(8,2) DEFAULT NULL,
  `ma_donvi` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ma_trangthai` int(11) DEFAULT NULL,
  `hinhanh` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `thongtinnhanvien`
--

INSERT INTO `thongtinnhanvien` (`id`, `ma_nhanvien`, `hovaten`, `gioitinh`, `ngaysinh`, `cmnd`, `ngaycap`, `noicap`, `tongiao`, `dantocthieuso`, `diachi`, `chuyenmon`, `trinhdo`, `vanban_chungchi`, `macongviec`, `maphong`, `sohopdong`, `mangach`, `mucluonghientai`, `ma_donvi`, `ma_trangthai`, `hinhanh`, `created_at`, `updated_at`) VALUES
(22, '123123', 'le thanh hoa', '0', '2022-03-31', NULL, '2022-03-31', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'AL', 2, 'ECR2EhYNRhPl8f9zGofu0irqp29LknV7UxkOhuM3.jpeg', '2022-03-31 07:43:28', '2022-04-01 00:23:34'),
(23, '456', 'le thanh hoa 3', '0', '2022-04-01', NULL, '2022-04-01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'AL', 2, 'M3S0f27GOOjXV6NvIjXMHdCtfDkTNPwmNxDk2UfZ.png', '2022-04-01 00:14:05', '2022-04-01 00:14:05'),
(24, '678', 'le thanh hoa 4', '0', '2008-05-07', '123456789', '2022-04-01', 'tp.hcm', 'ko', 'ko', 'Tp.HCM', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'AL', 2, 'tNlCFAaGpy25a35YGXYbxnZjX4vQAvCyZKI3YJRI.jpeg', '2022-04-01 02:08:31', '2022-04-01 02:11:13');

--
-- Triggers `thongtinnhanvien`
--
DELIMITER $$
CREATE TRIGGER `user_tct_history` AFTER UPDATE ON `thongtinnhanvien` FOR EACH ROW BEGIN 
IF OLD.ma_donvi <> new.ma_donvi THEN 
INSERT INTO user_noitct_history(id_nhansu,new_madonvi,old_madonvi) 
VALUES(new.id, new.ma_donvi, old.ma_donvi); 
END IF; 
END
$$
DELIMITER ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `thongtinnhanvien`
--
ALTER TABLE `thongtinnhanvien`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `thongtinnhanvien`
--
ALTER TABLE `thongtinnhanvien`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
