-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 10, 2022 at 01:28 PM
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
-- Table structure for table `activations`
--

CREATE TABLE `activations` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `completed` tinyint(1) NOT NULL DEFAULT 0,
  `completed_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `activations`
--

INSERT INTO `activations` (`id`, `user_id`, `code`, `completed`, `completed_at`, `created_at`, `updated_at`) VALUES
(1, 1, 'Ux57yvgVhwJk4ab2RCoLQkIXkOE2EmwL', 1, '2022-03-22 06:27:10', '2022-03-22 06:27:10', '2022-03-22 06:27:10');

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

-- --------------------------------------------------------

--
-- Table structure for table `dashboard__widgets`
--

CREATE TABLE `dashboard__widgets` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `widgets` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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

-- --------------------------------------------------------

--
-- Table structure for table `media__files`
--

CREATE TABLE `media__files` (
  `id` int(10) UNSIGNED NOT NULL,
  `is_folder` tinyint(1) NOT NULL DEFAULT 0,
  `filename` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `path` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `extension` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mimetype` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `filesize` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `folder_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `media__file_translations`
--

CREATE TABLE `media__file_translations` (
  `id` int(10) UNSIGNED NOT NULL,
  `file_id` int(10) UNSIGNED NOT NULL,
  `locale` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alt_attribute` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keywords` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `media__imageables`
--

CREATE TABLE `media__imageables` (
  `id` int(10) UNSIGNED NOT NULL,
  `file_id` int(11) NOT NULL,
  `imageable_id` int(11) NOT NULL,
  `imageable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `menu__menuitems`
--

CREATE TABLE `menu__menuitems` (
  `id` int(10) UNSIGNED NOT NULL,
  `menu_id` int(10) UNSIGNED NOT NULL,
  `page_id` int(10) UNSIGNED DEFAULT NULL,
  `position` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `target` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'page',
  `class` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '',
  `module_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `lft` int(11) DEFAULT NULL,
  `rgt` int(11) DEFAULT NULL,
  `depth` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_root` tinyint(1) NOT NULL DEFAULT 0,
  `icon` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `menu__menuitem_translations`
--

CREATE TABLE `menu__menuitem_translations` (
  `id` int(10) UNSIGNED NOT NULL,
  `menuitem_id` int(10) UNSIGNED NOT NULL,
  `locale` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `uri` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `menu__menus`
--

CREATE TABLE `menu__menus` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `primary` tinyint(4) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `menu__menu_translations`
--

CREATE TABLE `menu__menu_translations` (
  `id` int(10) UNSIGNED NOT NULL,
  `menu_id` int(10) UNSIGNED NOT NULL,
  `locale` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 0,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_07_02_230147_migration_cartalyst_sentinel', 1),
(2, '2016_06_24_193447_create_user_tokens_table', 1),
(3, '2014_10_14_200250_create_settings_table', 2),
(4, '2014_10_15_191204_create_setting_translations_table', 2),
(5, '2015_06_18_170048_make_settings_value_text_field', 2),
(6, '2015_10_22_130947_make_settings_name_unique', 2),
(7, '2017_09_17_164631_make_setting_value_nullable', 2),
(8, '2014_11_03_160015_create_menus_table', 3),
(9, '2014_11_03_160138_create_menu-translations_table', 3),
(10, '2014_11_03_160753_create_menuitems_table', 3),
(11, '2014_11_03_160804_create_menuitem_translation_table', 3),
(12, '2014_12_17_185301_add_root_column_to_menus_table', 3),
(13, '2015_09_05_100142_add_icon_column_to_menuitems_table', 3),
(14, '2016_01_26_102307_update_icon_column_on_menuitems_table', 3),
(15, '2016_08_01_142345_add_link_type_colymn_to_menuitems_table', 3),
(16, '2016_08_01_143130_add_class_column_to_menuitems_table', 3),
(17, '2017_09_18_192639_make_title_field_nullable_menu_table', 3),
(18, '2014_10_26_162751_create_files_table', 4),
(19, '2014_10_26_162811_create_file_translations_table', 4),
(20, '2015_02_27_105241_create_image_links_table', 4),
(21, '2015_12_19_143643_add_sortable', 4),
(22, '2017_09_20_144631_add_folders_columns_on_files_table', 4),
(23, '2014_11_30_191858_create_pages_tables', 5),
(24, '2017_10_13_103344_make_status_field_nullable_on_page_translations_table', 5),
(25, '2018_05_23_145242_edit_body_column_nullable', 5),
(26, '2015_04_02_184200_create_widgets_table', 6),
(27, '2013_04_09_062329_create_revisions_table', 7),
(28, '2015_11_20_184604486385_create_translation_translations_table', 7),
(29, '2015_11_20_184604743083_create_translation_translation_translations_table', 7),
(30, '2015_12_01_094031_update_translation_translations_table_with_index', 7),
(31, '2016_07_12_181155032011_create_tag_tags_table', 8),
(32, '2016_07_12_181155289444_create_tag_tag_translations_table', 8),
(33, '2022_02_23_141020895801_create_phatsinhtang_thongtinnhanviens_table', 9),
(34, '2022_02_23_142443210397_create_phatsinhtang_chuyennoibotcts_table', 9),
(35, '2022_03_10_032122069549_create_phatsinhtang_trangthais_table', 9),
(36, '2022_02_26_041104342947_create_quanlychung_chucdanhs_table', 10),
(37, '2022_02_26_041105166012_create_quanlychung_phongbans_table', 10),
(38, '2022_02_26_102801086843_create_quanlychung_noibotcts_table', 10),
(39, '2022_02_26_102809049326_create_quanlychung_noibodonvis_table', 10),
(40, '2022_03_01_140321979005_create_quanlychung_hopdongs_table', 10),
(42, '2022_04_05_054922846077_create_bangchamcong_bangchamcongs_table', 11),
(43, '2022_04_07_150227242252_create_hopdong_hopdongs_table', 12);

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

-- --------------------------------------------------------

--
-- Table structure for table `page__pages`
--

CREATE TABLE `page__pages` (
  `id` int(10) UNSIGNED NOT NULL,
  `is_home` tinyint(1) NOT NULL DEFAULT 0,
  `template` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `page__pages`
--

INSERT INTO `page__pages` (`id`, `is_home`, `template`, `created_at`, `updated_at`) VALUES
(1, 1, 'home', '2022-03-22 06:27:13', '2022-03-22 06:27:13');

-- --------------------------------------------------------

--
-- Table structure for table `page__page_translations`
--

CREATE TABLE `page__page_translations` (
  `id` int(10) UNSIGNED NOT NULL,
  `page_id` int(10) UNSIGNED NOT NULL,
  `locale` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '1',
  `body` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `og_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `og_description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `og_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `og_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `page__page_translations`
--

INSERT INTO `page__page_translations` (`id`, `page_id`, `locale`, `title`, `slug`, `status`, `body`, `meta_title`, `meta_description`, `og_title`, `og_description`, `og_image`, `og_type`, `created_at`, `updated_at`) VALUES
(1, 1, 'en', 'Home page', 'home', '1', '<p><strong>You made it!</strong></p>\r\n<p>You&#39;ve installed AsgardCMS and are ready to proceed to the <a href=\"/en/backend\">administration area</a>.</p>\r\n<h2>What&#39;s next ?</h2>\r\n<p>Learn how you can develop modules for AsgardCMS by reading our <a href=\"https://github.com/AsgardCms/Documentation\">documentation</a>.</p>\r\n', 'Home page', NULL, NULL, NULL, NULL, NULL, '2022-03-22 06:27:13', '2022-03-22 06:27:13');

-- --------------------------------------------------------

--
-- Table structure for table `persistences`
--

CREATE TABLE `persistences` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `persistences`
--

INSERT INTO `persistences` (`id`, `user_id`, `code`, `created_at`, `updated_at`) VALUES
(1, 1, 'dUgE6N7wKMDy712dSeuzWCPkWdGQFaMq', '2022-03-22 06:28:43', '2022-03-22 06:28:43'),
(2, 1, 'ueCU6N0K4F84tJN1gnsaPZprKSzCp7iA', '2022-03-22 06:28:57', '2022-03-22 06:28:57'),
(3, 1, 'whHAWVAyGfO0rlDHna9EC9moL41g0EGy', '2022-03-22 06:28:59', '2022-03-22 06:28:59'),
(4, 1, 'h50yob0e25fQGBYWH3MiIk6st7kZEY0U', '2022-03-22 06:29:00', '2022-03-22 06:29:00'),
(5, 1, 'eqhezJBHUVr4Hy7aAkR0FdhV8rYjlEBK', '2022-03-22 06:29:12', '2022-03-22 06:29:12'),
(6, 1, 'ZXpqog5TB7Fij5edrzYN4JZwJZUDjcmB', '2022-03-22 06:29:13', '2022-03-22 06:29:13'),
(7, 1, 'vDUtaNf8O1qDQrkDjvfIHNlAj7BX3Mx4', '2022-03-22 06:29:17', '2022-03-22 06:29:17'),
(8, 1, 'ZYGcGuxzXlpAYlKPXFUNoCOdRZnn5tRw', '2022-03-24 07:51:17', '2022-03-24 07:51:17'),
(9, 1, '5ZyFqi1iZHf1HSqLC2XyMqyxRUu0vqF2', '2022-03-25 20:40:23', '2022-03-25 20:40:23'),
(10, 1, 'tnKnbJZxe9wigbfvFTmesNzTF8MTJVC0', '2022-03-26 01:19:20', '2022-03-26 01:19:20'),
(11, 1, 'U0w5c47CVJpWvjlJ1ixpAoIKfePwTveF', '2022-03-31 07:10:44', '2022-03-31 07:10:44'),
(12, 1, 'BLnyd0B6bYfnsj8wp4pqclCaB8dm4yTv', '2022-04-01 00:09:46', '2022-04-01 00:09:46'),
(13, 1, '3qDvakIRmXm2czlqCs198qWRZea23dWX', '2022-04-04 20:42:05', '2022-04-04 20:42:05'),
(14, 1, 'kOS1qjle8aoDzrSIBtKp0U4418uB6U0R', '2022-04-04 20:51:08', '2022-04-04 20:51:08'),
(15, 1, 'aEeHtItg2XGmb28IIXPfos37lGm0KCLv', '2022-04-04 20:51:10', '2022-04-04 20:51:10'),
(16, 1, '4mYzbW28ywdLwTIca0zVnmi0A7WssdWm', '2022-04-04 20:51:10', '2022-04-04 20:51:10'),
(17, 1, '9KkvVuLQL99R7gZbdgTYJe2oph6PK6LG', '2022-04-04 20:51:20', '2022-04-04 20:51:20'),
(18, 1, 'z3laXTypoxHYmt4BTHuGF1tY1279F9CM', '2022-04-04 20:51:20', '2022-04-04 20:51:20'),
(19, 1, 'oEfUExqL9IyDgj223nCi3RwzHBglLdL7', '2022-04-04 22:42:35', '2022-04-04 22:42:35'),
(20, 1, 'rWlT9w5g8acspbBDDba2wAZJlbRaQEif', '2022-04-04 22:42:41', '2022-04-04 22:42:41'),
(21, 1, 'dFf8hs4Yk7PYyU5edgrhEnZIiLQ6sRzi', '2022-04-04 22:42:43', '2022-04-04 22:42:43'),
(22, 1, 'H617gbELtuUPkMAtoRDC8TcL6ZHAEzTm', '2022-04-04 22:42:43', '2022-04-04 22:42:43'),
(23, 1, 'LUKjIWU1cAFZDtwVbN6KahHLfW44zWPl', '2022-04-04 22:42:53', '2022-04-04 22:42:53'),
(24, 1, 'hmtFqPyHDnvUEPGriFxB0574xsRQT1Ag', '2022-04-04 22:42:54', '2022-04-04 22:42:54'),
(25, 1, 'mbeLzmtRTVqILnqJDsydAWApcPLtSNvq', '2022-04-04 22:42:57', '2022-04-04 22:42:57'),
(26, 1, 'tAmVqsT0vHNVDYsJSB6J0fgYtXXxo09X', '2022-04-04 22:52:40', '2022-04-04 22:52:40'),
(27, 1, 'UR2Tw61AeULChvrnjuyVQwVYmADV3dvs', '2022-04-04 22:52:42', '2022-04-04 22:52:42'),
(28, 1, 'feVFFfF5tlfXXvFwm3ip8bpt8YP1aoAR', '2022-04-04 22:52:42', '2022-04-04 22:52:42'),
(29, 1, 'XOroLvPzDLr2u8B0Qc9eLsFPcARkRQ1v', '2022-04-04 22:52:47', '2022-04-04 22:52:47'),
(30, 1, 'OlC310Q5BRhL38fOudzKMWlcbLsvh2q4', '2022-04-04 22:52:47', '2022-04-04 22:52:47'),
(31, 1, 'jqkNjFXvtm2tbBvEsN2GouCjXBDRYwel', '2022-04-04 22:52:50', '2022-04-04 22:52:50'),
(32, 1, '37K7vSR300jXv52JMGLl8af1VIxI7vaY', '2022-04-06 23:51:19', '2022-04-06 23:51:19'),
(33, 1, 'fkN1zT2sVAFTGksTlxwTWNkeIY1zduay', '2022-04-07 08:17:26', '2022-04-07 08:17:26'),
(34, 1, 'lteE5utoGxVLl2JdWROfubVbfhbOGZVS', '2022-04-07 08:18:41', '2022-04-07 08:18:41'),
(35, 1, 'pyxd5JWLm81S40cKBSfY9JuBggNPqaK8', '2022-04-07 08:18:43', '2022-04-07 08:18:43'),
(36, 1, 'mWf2I3TOG0g3tAckhZLX50oy4RJoe8wH', '2022-04-07 08:18:44', '2022-04-07 08:18:44'),
(37, 1, 'ZmCBXgQdemQaPV7twMzhbMB8FWMDbPE0', '2022-04-07 08:18:52', '2022-04-07 08:18:52'),
(38, 1, 'KF1W8y6VjLqsKCmlkuFosZ4nIbDogaby', '2022-04-07 08:18:52', '2022-04-07 08:18:52'),
(39, 1, 'pldMlOwvdHwrksV8GajULg1VMvTTAlcL', '2022-04-07 08:18:56', '2022-04-07 08:18:56'),
(40, 1, '6JPl7TdBtwa4l4nldiHoTTwgdNsjDfrv', '2022-04-07 08:41:11', '2022-04-07 08:41:11'),
(41, 1, 'D172X3GDM0GG7Or7pMgW23idEgkeSeVO', '2022-04-07 08:41:49', '2022-04-07 08:41:49'),
(42, 1, 'zojL1FhQcDyK6sNLrvxOwRllxxoDGOKX', '2022-04-07 08:41:51', '2022-04-07 08:41:51'),
(43, 1, 'BXuQ8XyZMwXRlbP6oP16AVQbqjGSOZY3', '2022-04-07 08:41:51', '2022-04-07 08:41:51'),
(44, 1, '0XeF9Acl38JcWN8SCz6YWDK5Vm3lsb3D', '2022-04-07 08:42:06', '2022-04-07 08:42:06'),
(45, 1, '29wK8uuQHMnRiOvc8AdK2vngvrvyn9Hd', '2022-04-07 08:43:58', '2022-04-07 08:43:58'),
(46, 1, 'SpzFULdXe5vqgX8KKKCExEipHD9z56ou', '2022-04-07 08:43:59', '2022-04-07 08:43:59'),
(47, 1, 'JDYndKKuTsZCSY49nfFoBhQx0J90sKdk', '2022-04-07 08:44:36', '2022-04-07 08:44:36'),
(48, 1, 'x3oddaAJHCTreJ0EUCqYaHskIL8rCRHD', '2022-04-07 08:44:37', '2022-04-07 08:44:37'),
(49, 1, 'qp8sN7wXbZ0oaNGUuXVS0HtcnivJT7in', '2022-04-07 21:23:51', '2022-04-07 21:23:51'),
(50, 1, 'juF2oueEVxAAjxH14LdvP8E3uOM95un5', '2022-04-07 21:27:42', '2022-04-07 21:27:42'),
(51, 1, 'iqZoMMDNBHXCGoJHoi4ODOQ07lRG87CX', '2022-04-07 21:27:43', '2022-04-07 21:27:43'),
(52, 1, '8W8KecyTnR7NXZcYMI5JvghS3ObPqtqu', '2022-04-07 21:27:44', '2022-04-07 21:27:44'),
(53, 1, 'MeeZ2Ca4XAtPkNzHjYhxgjCX0qMLxtcD', '2022-04-08 01:45:42', '2022-04-08 01:45:42');

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

-- --------------------------------------------------------

--
-- Table structure for table `reminders`
--

CREATE TABLE `reminders` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `completed` tinyint(1) NOT NULL DEFAULT 0,
  `completed_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `revisions`
--

CREATE TABLE `revisions` (
  `id` int(10) UNSIGNED NOT NULL,
  `revisionable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `revisionable_id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `key` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `old_value` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `new_value` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `permissions` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `slug`, `name`, `permissions`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Admin', '{\"bangchamcong.bangchamcongs.index\":true,\"bangchamcong.bangchamcongs.create\":true,\"bangchamcong.bangchamcongs.edit\":true,\"bangchamcong.bangchamcongs.destroy\":true,\"bangchamcong.bangchamcongs.search\":true,\"core.sidebar.group\":true,\"dashboard.index\":true,\"dashboard.update\":true,\"dashboard.reset\":true,\"hopdong.hopdongs.index\":true,\"hopdong.hopdongs.create\":true,\"hopdong.hopdongs.edit\":true,\"hopdong.hopdongs.destroy\":true,\"media.medias.index\":true,\"media.medias.create\":true,\"media.medias.edit\":true,\"media.medias.destroy\":true,\"media.folders.index\":true,\"media.folders.create\":true,\"media.folders.edit\":true,\"media.folders.destroy\":true,\"menu.menus.index\":true,\"menu.menus.create\":true,\"menu.menus.edit\":true,\"menu.menus.destroy\":true,\"menu.menuitems.index\":true,\"menu.menuitems.create\":true,\"menu.menuitems.edit\":true,\"menu.menuitems.destroy\":true,\"page.pages.index\":true,\"page.pages.create\":true,\"page.pages.edit\":true,\"page.pages.destroy\":true,\"phatsinhtang.thongtinnhanviens.index\":true,\"phatsinhtang.thongtinnhanviens.create\":true,\"phatsinhtang.thongtinnhanviens.edit\":true,\"phatsinhtang.thongtinnhanviens.destroy\":true,\"phatsinhtang.chuyennoibotcts.index\":true,\"phatsinhtang.chuyennoibotcts.create\":true,\"phatsinhtang.chuyennoibotcts.edit\":true,\"phatsinhtang.chuyennoibotcts.destroy\":true,\"phatsinhtang.chuyennoibotcts.search\":true,\"phatsinhtang.trangthais.index\":true,\"phatsinhtang.trangthais.create\":true,\"phatsinhtang.trangthais.edit\":true,\"phatsinhtang.trangthais.destroy\":true,\"quanlychung.chucdanhs.index\":true,\"quanlychung.chucdanhs.create\":true,\"quanlychung.chucdanhs.edit\":true,\"quanlychung.chucdanhs.destroy\":true,\"quanlychung.phongbans.index\":true,\"quanlychung.phongbans.create\":true,\"quanlychung.phongbans.edit\":true,\"quanlychung.phongbans.destroy\":true,\"quanlychung.noibotcts.index\":true,\"quanlychung.noibotcts.create\":true,\"quanlychung.noibotcts.edit\":true,\"quanlychung.noibotcts.destroy\":true,\"quanlychung.noibodonvis.index\":true,\"quanlychung.noibodonvis.create\":true,\"quanlychung.noibodonvis.edit\":true,\"quanlychung.noibodonvis.destroy\":true,\"quanlychung.hopdongs.index\":true,\"quanlychung.hopdongs.create\":true,\"quanlychung.hopdongs.edit\":true,\"quanlychung.hopdongs.destroy\":true,\"setting.settings.index\":true,\"setting.settings.edit\":true,\"tag.tags.index\":true,\"tag.tags.create\":true,\"tag.tags.edit\":true,\"tag.tags.destroy\":true,\"translation.translations.index\":true,\"translation.translations.edit\":true,\"translation.translations.import\":true,\"translation.translations.export\":true,\"user.users.index\":true,\"user.users.create\":true,\"user.users.edit\":true,\"user.users.destroy\":true,\"user.roles.index\":true,\"user.roles.create\":true,\"user.roles.edit\":true,\"user.roles.destroy\":true,\"account.api-keys.index\":true,\"account.api-keys.create\":true,\"account.api-keys.destroy\":true,\"workshop.sidebar.group\":true,\"workshop.modules.index\":true,\"workshop.modules.show\":true,\"workshop.modules.update\":true,\"workshop.modules.disable\":true,\"workshop.modules.enable\":true,\"workshop.modules.publish\":true,\"workshop.themes.index\":true,\"workshop.themes.show\":true,\"workshop.themes.publish\":true}', '2022-03-22 06:26:44', '2022-04-07 08:18:52'),
(2, 'user', 'User', NULL, '2022-03-22 06:26:44', '2022-03-22 06:26:44');

-- --------------------------------------------------------

--
-- Table structure for table `role_users`
--

CREATE TABLE `role_users` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_users`
--

INSERT INTO `role_users` (`user_id`, `role_id`, `created_at`, `updated_at`) VALUES
(1, 1, '2022-03-22 06:27:09', '2022-03-22 06:27:09');

-- --------------------------------------------------------

--
-- Table structure for table `setting__settings`
--

CREATE TABLE `setting__settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `plainValue` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `isTranslatable` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `setting__settings`
--

INSERT INTO `setting__settings` (`id`, `name`, `plainValue`, `isTranslatable`, `created_at`, `updated_at`) VALUES
(1, 'core::template', 'Flatly', 0, '2022-03-22 06:27:13', '2022-03-22 06:27:13'),
(2, 'core::locales', '[\"en\"]', 0, '2022-03-22 06:27:13', '2022-03-22 06:27:13');

-- --------------------------------------------------------

--
-- Table structure for table `setting__setting_translations`
--

CREATE TABLE `setting__setting_translations` (
  `id` int(10) UNSIGNED NOT NULL,
  `setting_id` int(10) UNSIGNED NOT NULL,
  `locale` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tag__tagged`
--

CREATE TABLE `tag__tagged` (
  `id` int(10) UNSIGNED NOT NULL,
  `taggable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `taggable_id` int(10) UNSIGNED NOT NULL,
  `tag_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tag__tags`
--

CREATE TABLE `tag__tags` (
  `id` int(10) UNSIGNED NOT NULL,
  `namespace` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tag__tag_translations`
--

CREATE TABLE `tag__tag_translations` (
  `id` int(10) UNSIGNED NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tag_id` int(10) UNSIGNED NOT NULL,
  `locale` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(22, '123123', 'le thanh hoa', '0', '2022-03-31', '123456789', '2022-03-31', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'AL', 2, 'ECR2EhYNRhPl8f9zGofu0irqp29LknV7UxkOhuM3.jpeg', '2022-03-31 07:43:28', '2022-04-01 00:23:34'),
(23, '456', 'le thanh hoa 3', '0', '2022-04-01', '12356478', '2022-04-01', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'KSĐL', 2, 'M3S0f27GOOjXV6NvIjXMHdCtfDkTNPwmNxDk2UfZ.png', '2022-04-01 00:14:05', '2022-04-07 21:40:47'),
(24, '678', 'le thanh hoa 4', '0', '2008-05-07', '123456789', '2022-04-01', 'tp.hcm', 'ko', 'ko', 'Tp.HCM', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'CKVT', 2, 'tNlCFAaGpy25a35YGXYbxnZjX4vQAvCyZKI3YJRI.jpeg', '2022-04-01 02:08:31', '2022-04-07 21:40:39');

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

-- --------------------------------------------------------

--
-- Table structure for table `throttle`
--

CREATE TABLE `throttle` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ip` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `throttle`
--

INSERT INTO `throttle` (`id`, `user_id`, `type`, `ip`, `created_at`, `updated_at`) VALUES
(1, NULL, 'global', NULL, '2022-04-07 08:16:58', '2022-04-07 08:16:58'),
(2, NULL, 'ip', '127.0.0.1', '2022-04-07 08:16:58', '2022-04-07 08:16:58'),
(3, 1, 'user', NULL, '2022-04-07 08:16:58', '2022-04-07 08:16:58'),
(4, NULL, 'global', NULL, '2022-04-07 08:17:06', '2022-04-07 08:17:06'),
(5, NULL, 'ip', '127.0.0.1', '2022-04-07 08:17:06', '2022-04-07 08:17:06'),
(6, 1, 'user', NULL, '2022-04-07 08:17:06', '2022-04-07 08:17:06'),
(7, NULL, 'global', NULL, '2022-04-07 08:17:34', '2022-04-07 08:17:34'),
(8, NULL, 'ip', '127.0.0.1', '2022-04-07 08:17:34', '2022-04-07 08:17:34'),
(9, 1, 'user', NULL, '2022-04-07 08:17:34', '2022-04-07 08:17:34');

-- --------------------------------------------------------

--
-- Table structure for table `trangthai`
--

CREATE TABLE `trangthai` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `trangthai`
--

INSERT INTO `trangthai` (`id`, `name`, `created_at`, `updated_at`) VALUES
(2, 'Đang làm việc', NULL, NULL),
(3, 'Nghỉ thai sản', NULL, NULL),
(4, 'Nghỉ ốm dài ngày', NULL, NULL),
(5, 'Nghỉ việc', NULL, NULL),
(6, 'Đi nghĩa vụ quân sự', NULL, NULL),
(7, 'Hết hạn HĐLĐ', NULL, NULL),
(8, 'Sa thải', NULL, NULL),
(9, 'Chết', NULL, NULL),
(10, 'Tạm hoãn HĐLĐ', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `translation__translations`
--

CREATE TABLE `translation__translations` (
  `id` int(10) UNSIGNED NOT NULL,
  `key` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `translation__translation_translations`
--

CREATE TABLE `translation__translation_translations` (
  `id` int(10) UNSIGNED NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `translation_id` int(10) UNSIGNED NOT NULL,
  `locale` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `permissions` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_login` timestamp NULL DEFAULT NULL,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `permissions`, `last_login`, `first_name`, `last_name`, `created_at`, `updated_at`) VALUES
(1, 'admin@email.com', '$2y$10$NOXhaqsh4UteYotn0eBpiuUUbzZcYLsFP5J21YFPYpt7Zp6VxXdmK', NULL, '2022-04-08 01:45:42', 'l', 'h', '2022-03-22 06:27:09', '2022-04-08 01:45:42');

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
(5, 24, 'AL', 'CKVT', '2022-04-01 09:11:13'),
(6, 24, 'CKVT', 'AL', '2022-04-08 04:40:39'),
(7, 23, 'KSĐL', 'AL', '2022-04-08 04:40:47');

-- --------------------------------------------------------

--
-- Table structure for table `user_tokens`
--

CREATE TABLE `user_tokens` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `access_token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_tokens`
--

INSERT INTO `user_tokens` (`id`, `user_id`, `access_token`, `created_at`, `updated_at`) VALUES
(1, 1, 'afa9da5c-b904-4247-8797-cfd2904ce616', '2022-03-22 06:27:10', '2022-03-22 06:27:10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activations`
--
ALTER TABLE `activations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bangchamcong`
--
ALTER TABLE `bangchamcong`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chucdanh`
--
ALTER TABLE `chucdanh`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dashboard__widgets`
--
ALTER TABLE `dashboard__widgets`
  ADD PRIMARY KEY (`id`),
  ADD KEY `dashboard__widgets_user_id_foreign` (`user_id`);

--
-- Indexes for table `hopdong`
--
ALTER TABLE `hopdong`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `media__files`
--
ALTER TABLE `media__files`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `media__file_translations`
--
ALTER TABLE `media__file_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `media__file_translations_file_id_locale_unique` (`file_id`,`locale`),
  ADD KEY `media__file_translations_locale_index` (`locale`);

--
-- Indexes for table `media__imageables`
--
ALTER TABLE `media__imageables`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu__menuitems`
--
ALTER TABLE `menu__menuitems`
  ADD PRIMARY KEY (`id`),
  ADD KEY `menu__menuitems_menu_id_foreign` (`menu_id`);

--
-- Indexes for table `menu__menuitem_translations`
--
ALTER TABLE `menu__menuitem_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `menu__menuitem_translations_menuitem_id_locale_unique` (`menuitem_id`,`locale`),
  ADD KEY `menu__menuitem_translations_locale_index` (`locale`);

--
-- Indexes for table `menu__menus`
--
ALTER TABLE `menu__menus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu__menu_translations`
--
ALTER TABLE `menu__menu_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `menu__menu_translations_menu_id_locale_unique` (`menu_id`,`locale`),
  ADD KEY `menu__menu_translations_locale_index` (`locale`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `noibodonvi`
--
ALTER TABLE `noibodonvi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `noibotct`
--
ALTER TABLE `noibotct`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `madonvi` (`madonvi`);

--
-- Indexes for table `page__pages`
--
ALTER TABLE `page__pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `page__page_translations`
--
ALTER TABLE `page__page_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `page__page_translations_page_id_locale_unique` (`page_id`,`locale`),
  ADD KEY `page__page_translations_locale_index` (`locale`);

--
-- Indexes for table `persistences`
--
ALTER TABLE `persistences`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `persistences_code_unique` (`code`);

--
-- Indexes for table `phongban`
--
ALTER TABLE `phongban`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `maphong` (`maphong`);

--
-- Indexes for table `reminders`
--
ALTER TABLE `reminders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `revisions`
--
ALTER TABLE `revisions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `revisions_revisionable_id_revisionable_type_index` (`revisionable_id`,`revisionable_type`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_slug_unique` (`slug`);

--
-- Indexes for table `role_users`
--
ALTER TABLE `role_users`
  ADD PRIMARY KEY (`user_id`,`role_id`);

--
-- Indexes for table `setting__settings`
--
ALTER TABLE `setting__settings`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `setting__settings_name_unique` (`name`),
  ADD KEY `setting__settings_name_index` (`name`);

--
-- Indexes for table `setting__setting_translations`
--
ALTER TABLE `setting__setting_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `setting__setting_translations_setting_id_locale_unique` (`setting_id`,`locale`),
  ADD KEY `setting__setting_translations_locale_index` (`locale`);

--
-- Indexes for table `tag__tagged`
--
ALTER TABLE `tag__tagged`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tag__tagged_taggable_type_taggable_id_index` (`taggable_type`,`taggable_id`);

--
-- Indexes for table `tag__tags`
--
ALTER TABLE `tag__tags`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tag__tag_translations`
--
ALTER TABLE `tag__tag_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tag__tag_translations_tag_id_locale_unique` (`tag_id`,`locale`),
  ADD KEY `tag__tag_translations_locale_index` (`locale`);

--
-- Indexes for table `thongtinnhanvien`
--
ALTER TABLE `thongtinnhanvien`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `throttle`
--
ALTER TABLE `throttle`
  ADD PRIMARY KEY (`id`),
  ADD KEY `throttle_user_id_index` (`user_id`);

--
-- Indexes for table `trangthai`
--
ALTER TABLE `trangthai`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `translation__translations`
--
ALTER TABLE `translation__translations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `translation__translations_key_index` (`key`);

--
-- Indexes for table `translation__translation_translations`
--
ALTER TABLE `translation__translation_translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `translations_trans_id_locale_unique` (`translation_id`,`locale`),
  ADD KEY `translation__translation_translations_locale_index` (`locale`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_noitct_history`
--
ALTER TABLE `user_noitct_history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_tokens`
--
ALTER TABLE `user_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_tokens_access_token_unique` (`access_token`),
  ADD KEY `user_tokens_user_id_foreign` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activations`
--
ALTER TABLE `activations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bangchamcong`
--
ALTER TABLE `bangchamcong`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `chucdanh`
--
ALTER TABLE `chucdanh`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `dashboard__widgets`
--
ALTER TABLE `dashboard__widgets`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hopdong`
--
ALTER TABLE `hopdong`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `media__files`
--
ALTER TABLE `media__files`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `media__file_translations`
--
ALTER TABLE `media__file_translations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `media__imageables`
--
ALTER TABLE `media__imageables`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `menu__menuitems`
--
ALTER TABLE `menu__menuitems`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `menu__menuitem_translations`
--
ALTER TABLE `menu__menuitem_translations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `menu__menus`
--
ALTER TABLE `menu__menus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `menu__menu_translations`
--
ALTER TABLE `menu__menu_translations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `noibodonvi`
--
ALTER TABLE `noibodonvi`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `noibotct`
--
ALTER TABLE `noibotct`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `page__pages`
--
ALTER TABLE `page__pages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `page__page_translations`
--
ALTER TABLE `page__page_translations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `persistences`
--
ALTER TABLE `persistences`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `phongban`
--
ALTER TABLE `phongban`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `reminders`
--
ALTER TABLE `reminders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `revisions`
--
ALTER TABLE `revisions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `setting__settings`
--
ALTER TABLE `setting__settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `setting__setting_translations`
--
ALTER TABLE `setting__setting_translations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tag__tagged`
--
ALTER TABLE `tag__tagged`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tag__tags`
--
ALTER TABLE `tag__tags`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tag__tag_translations`
--
ALTER TABLE `tag__tag_translations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `thongtinnhanvien`
--
ALTER TABLE `thongtinnhanvien`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `throttle`
--
ALTER TABLE `throttle`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `trangthai`
--
ALTER TABLE `trangthai`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `translation__translations`
--
ALTER TABLE `translation__translations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `translation__translation_translations`
--
ALTER TABLE `translation__translation_translations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_noitct_history`
--
ALTER TABLE `user_noitct_history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user_tokens`
--
ALTER TABLE `user_tokens`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `dashboard__widgets`
--
ALTER TABLE `dashboard__widgets`
  ADD CONSTRAINT `dashboard__widgets_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `media__file_translations`
--
ALTER TABLE `media__file_translations`
  ADD CONSTRAINT `media__file_translations_file_id_foreign` FOREIGN KEY (`file_id`) REFERENCES `media__files` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `menu__menuitems`
--
ALTER TABLE `menu__menuitems`
  ADD CONSTRAINT `menu__menuitems_menu_id_foreign` FOREIGN KEY (`menu_id`) REFERENCES `menu__menus` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `menu__menuitem_translations`
--
ALTER TABLE `menu__menuitem_translations`
  ADD CONSTRAINT `menu__menuitem_translations_menuitem_id_foreign` FOREIGN KEY (`menuitem_id`) REFERENCES `menu__menuitems` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `menu__menu_translations`
--
ALTER TABLE `menu__menu_translations`
  ADD CONSTRAINT `menu__menu_translations_menu_id_foreign` FOREIGN KEY (`menu_id`) REFERENCES `menu__menus` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `page__page_translations`
--
ALTER TABLE `page__page_translations`
  ADD CONSTRAINT `page__page_translations_page_id_foreign` FOREIGN KEY (`page_id`) REFERENCES `page__pages` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `setting__setting_translations`
--
ALTER TABLE `setting__setting_translations`
  ADD CONSTRAINT `setting__setting_translations_setting_id_foreign` FOREIGN KEY (`setting_id`) REFERENCES `setting__settings` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `tag__tag_translations`
--
ALTER TABLE `tag__tag_translations`
  ADD CONSTRAINT `tag__tag_translations_tag_id_foreign` FOREIGN KEY (`tag_id`) REFERENCES `tag__tags` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `translation__translation_translations`
--
ALTER TABLE `translation__translation_translations`
  ADD CONSTRAINT `translation__translation_translations_translation_id_foreign` FOREIGN KEY (`translation_id`) REFERENCES `translation__translations` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `user_tokens`
--
ALTER TABLE `user_tokens`
  ADD CONSTRAINT `user_tokens_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
