-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost:3306
-- Thời gian đã tạo: Th2 28, 2025 lúc 03:14 AM
-- Phiên bản máy phục vụ: 8.0.30
-- Phiên bản PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `v_store`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `item_sale`
--

CREATE TABLE `item_sale` (
  `id` bigint UNSIGNED NOT NULL,
  `item_code` varchar(6) COLLATE utf8mb4_unicode_ci NOT NULL,
  `item_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` decimal(10,2) NOT NULL,
  `expired_date` date NOT NULL,
  `note` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `item_sale`
--

INSERT INTO `item_sale` (`id`, `item_code`, `item_name`, `quantity`, `expired_date`, `note`, `created_at`, `updated_at`) VALUES
(1, 'Coca', 'Coca cola', 100.00, '2024-01-01', NULL, '2025-02-27 19:31:23', '2025-02-27 20:07:54'),
(2, 'Bim', 'Bim Bim', 100.00, '2024-01-01', 'Discount', '2025-02-27 19:31:23', '2025-02-27 20:07:54'),
(3, 'Lavie', 'Lavie', 100.00, '2024-01-01', 'Discount', '2025-02-27 19:31:23', '2025-02-27 20:07:54'),
(4, 'Pen', 'Pencil', 100.00, '2024-01-01', '', '2025-02-27 19:31:23', '2025-02-27 20:07:54'),
(5, 'Lavie', 'Lavie', 100.00, '2024-01-01', 'Discount', '2025-02-27 19:31:23', '2025-02-27 20:07:54'),
(6, 'Pen', 'Pencil', 100.00, '2024-01-01', '', '2025-02-27 19:31:23', '2025-02-27 20:07:54'),
(7, 'Seven', 'Seven up', 100.00, '2024-01-01', '', '2025-02-27 19:31:23', '2025-02-27 20:07:54'),
(8, 'Note', 'NoteBook', 100.00, '2024-01-01', '', '2025-02-27 19:31:23', '2025-02-27 20:07:54'),
(9, 'Note1', 'Note Book 1', 100.00, '2024-01-01', 'Discount', '2025-02-27 19:31:23', '2025-02-27 20:07:54'),
(10, 'Note2', 'Note Book 2', 100.00, '2024-01-01', 'Discount', '2025-02-27 19:31:23', '2025-02-27 20:07:54'),
(11, 'Note3', 'Note Book 3', 100.00, '2024-01-01', 'Discount', '2025-02-27 19:31:23', '2025-02-27 20:07:54'),
(12, 'Note4', 'Note Book 4', 100.00, '2024-01-01', 'Discount', '2025-02-27 19:31:23', '2025-02-27 20:07:54'),
(13, 'Note5', 'Note Book 5', 100.00, '2024-01-01', 'Discount', '2025-02-27 19:31:23', '2025-02-27 20:07:54'),
(14, 'Note6', 'Note Book 6', 100.00, '2024-01-01', 'Discount', '2025-02-27 19:31:23', '2025-02-27 20:07:54');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `item_sale`
--
ALTER TABLE `item_sale`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `item_sale`
--
ALTER TABLE `item_sale`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
