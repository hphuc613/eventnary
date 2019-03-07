-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th3 07, 2019 lúc 04:57 PM
-- Phiên bản máy phục vụ: 10.1.37-MariaDB
-- Phiên bản PHP: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `hp_eventnary`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `administrators`
--

CREATE TABLE `administrators` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` int(11) NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bank` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `branch_bank` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bank_account_number` int(11) NOT NULL,
  `bank_account_owner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cities`
--

CREATE TABLE `cities` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `cities`
--

INSERT INTO `cities` (`id`, `title`, `description`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Cần Thơ', 'can-tho', '2019-02-22 20:37:58', '2019-03-05 08:34:32', NULL),
(2, 'Hậu Giang', 'hau-giang', '2019-02-22 21:02:59', '2019-02-26 04:14:10', NULL),
(3, 'Kiên Giang', 'kieng-giang', '2019-02-22 21:04:40', '2019-02-22 21:06:00', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `collaborators`
--

CREATE TABLE `collaborators` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` int(11) NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bank` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `branch_bank` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bank_account_number` int(11) NOT NULL,
  `bank_account_owner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `customers`
--

CREATE TABLE `customers` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` int(11) NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bank` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `branch_bank` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bank_account_number` int(11) NOT NULL,
  `bank_account_owner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `districts`
--

CREATE TABLE `districts` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `districts`
--

INSERT INTO `districts` (`id`, `title`, `description`, `city_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Ninh Kiều', 'ninh-kieu-can-tho', 1, '2019-02-22 20:54:44', '2019-03-05 08:45:31', NULL),
(2, 'Ninh Kiều', 'ninh-kieu-can-tho', 1, '2019-02-22 20:55:19', '2019-02-22 20:55:27', '2019-02-22 20:55:27'),
(3, 'Thốt Nốt', 'thot-not-can-tho', 1, '2019-02-22 20:55:56', '2019-02-22 20:55:56', NULL),
(4, 'Giồng Riềng', 'giong-rieng-kien-giang', 3, '2019-02-22 21:06:50', '2019-02-22 21:06:50', NULL),
(5, 'Bình Thủy', 'binh-thuy-can-tho', 1, '2019-02-24 01:56:39', '2019-02-24 01:56:39', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `events`
--

CREATE TABLE `events` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `start_date` datetime NOT NULL,
  `end_date` datetime NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `organizational` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `organizational_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_contact` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `ward_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `event_type_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `events`
--

INSERT INTO `events` (`id`, `title`, `slug`, `link`, `start_date`, `end_date`, `address`, `location`, `current_image`, `organizational`, `organizational_link`, `phone_contact`, `status`, `ward_id`, `user_id`, `event_type_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Lễ hội nụ cười toàn quốc', '1-le-hoi-nu-cuoi-toan-quoc', NULL, '2019-03-02 11:19:14', '2019-03-13 00:20:27', '123/32b, CMT10Nga', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7856.918292816055!2d105.7661533!3d10.0614131!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31a087e69301bd3f%3A0x7dace88e4b5ff2d7!2zQ2hpIG5ow6FuaCBD4bqnbiBUaMahIC0gQ8O0bmcgdHkgQ-G7lSBQaOG6p24gw5QgVMO0IFRyxrDhu51uZyBI4bqjaQ!5e0!3m2!1svi!2s!4v1551803074317\" width=\"400\" height=\"300\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>', '1-can-sa.jpg', 'Snoopdog', 'Snoopdogcuoichovui.vn', '1111111111', 1, 1, NULL, NULL, '2019-03-01 21:19:35', '2019-03-07 04:00:42', NULL),
(2, 'Hội chợ handmade Cần Thơ', '2-hoi-cho-handmade-can-tho', NULL, '2019-03-02 11:19:14', '2019-03-14 00:20:59', 'Công Viên Lưu Hữu Phước', NULL, '2-4P3M432zWKzaayLPuyuu.JPG', 'a', 'a', '1111111111', 0, 3, NULL, 2, '2019-03-01 21:19:45', '2019-03-07 05:52:21', NULL),
(3, 'Kỷ lục ôm nhau lâu nhất', '3-ky-luc-om-nhau-lau-nhat', NULL, '2019-03-03 23:31:10', '2019-03-03 23:31:14', '56/62b, CMT8', NULL, '3-2.jpg', 'Guinness', 'Guiness.vn/om-nhau', '1111111111', 0, 2, NULL, NULL, '2019-03-03 09:41:56', '2019-03-07 04:10:01', NULL),
(4, 'Lễ hội hóa trang Halloween', '4-le-hoi-hoa-trang-halloween', NULL, '2019-03-04 16:58:32', '2019-03-04 16:58:37', 'Nhà của tui', NULL, '4-14632959_1788185737896545_4234027572679640543_n.jpg', NULL, NULL, '1211111111', 1, 1, NULL, 4, '2019-03-04 02:59:07', '2019-03-07 04:02:57', NULL),
(5, 'Giờ Trái Đất', '5-gio-trai-dat', NULL, '2019-03-26 19:00:35', '2019-03-26 22:00:14', 'Công Viên Lưu Hữu Phước', NULL, '5-250px-Earth-Hour-Logo.jpg', 'Quỹ Quốc tế Bảo vệ Thiên nhiên', NULL, '0101010101', 1, 3, NULL, 2, '2019-03-07 03:24:33', '2019-03-07 04:01:41', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `event_types`
--

CREATE TABLE `event_types` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `event_types`
--

INSERT INTO `event_types` (`id`, `title`, `description`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Loại A', 'loai-a', '2019-02-26 04:13:07', '2019-02-26 04:13:07', NULL),
(2, 'Loại B', 'loai-b', '2019-02-26 04:14:03', '2019-02-26 04:17:30', NULL),
(3, 'Loại C', 'loai-c', '2019-03-01 21:18:02', '2019-03-01 21:18:02', NULL),
(4, 'Loại D', 'loai-D', '2019-03-01 22:18:25', '2019-03-01 22:18:25', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `image_events`
--

CREATE TABLE `image_events` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `event_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `image_events`
--

INSERT INTO `image_events` (`id`, `title`, `event_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '1-1 (1).jpg', 1, '2019-03-05 06:27:51', '2019-03-05 09:49:55', NULL),
(2, '1-01ef6a91b40b17a4041afcb9578f51e5.jpg', 1, '2019-03-05 06:18:12', '2019-03-05 09:49:55', NULL),
(4, '1-2.jpg', 1, '2019-03-05 09:18:03', '2019-03-05 09:49:55', NULL),
(5, '1-4P3M432zWKzaayLPuyuu.JPG', 1, '2019-03-05 09:22:24', '2019-03-05 09:49:55', NULL),
(6, '1-1.jpg', 1, '2019-03-05 09:22:35', '2019-03-05 09:49:55', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(39, '2019_02_14_080351_create_cities_table', 1),
(40, '2019_02_14_081034_create_districts_table', 1),
(41, '2019_02_14_081149_create_wards_table', 1),
(42, '2019_02_15_100303_create_ticket_types_table', 1),
(43, '2019_02_15_100454_create_seats_table', 1),
(44, '2019_02_15_102424_create_event_types_table', 1),
(45, '2019_02_15_102525_create_roles_table', 1),
(46, '2019_02_15_102941_create_users_table', 1),
(47, '2019_02_15_105211_create_administrators_table', 1),
(48, '2019_02_15_110056_create_customers_table', 1),
(49, '2019_02_15_110243_create_collaborators_table', 1),
(50, '2019_02_15_121530_create_events_table', 1),
(51, '2019_02_15_164002_create_image_events_table', 1),
(52, '2019_02_15_164122_create_image_tickets_table', 1),
(67, '2019_02_14_080351_create_cities_table', 1),
(68, '2019_02_14_081034_create_districts_table', 1),
(69, '2019_02_14_081149_create_wards_table', 1),
(70, '2019_02_15_100303_create_ticket_types_table', 1),
(71, '2019_02_15_100454_create_seats_table', 1),
(72, '2019_02_15_102424_create_event_types_table', 1),
(73, '2019_02_15_102525_create_roles_table', 1),
(74, '2019_02_15_102941_create_users_table', 1),
(75, '2019_02_15_105211_create_administrators_table', 1),
(76, '2019_02_15_110056_create_customers_table', 1),
(77, '2019_02_15_110243_create_collaborators_table', 1),
(78, '2019_02_15_121530_create_events_table', 1),
(79, '2019_02_15_164002_create_image_events_table', 1),
(81, '2019_02_26_114328_create_tickets_table', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `roles`
--

INSERT INTO `roles` (`id`, `title`, `description`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Admin', 'Toàn quyền', '2019-02-22 20:26:02', '2019-02-22 20:26:02', NULL),
(2, 'Cộng tác viên', 'Đăng bài', '2019-02-22 20:26:17', '2019-02-22 20:26:17', NULL),
(3, 'Thành viên', 'Mua vé', '2019-03-05 08:07:24', '2019-03-05 08:27:14', NULL),
(4, 'VIP', 'Được tặng vé', '2019-03-05 08:07:47', '2019-03-05 08:08:55', NULL),
(5, 'Khách mời', 'Mua vé', '2019-03-05 08:08:15', '2019-03-05 08:08:15', NULL),
(6, 'Người dưng', '1', '2019-03-05 08:21:10', '2019-03-05 08:21:20', '2019-03-05 08:21:20');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `seats`
--

CREATE TABLE `seats` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tickets`
--

CREATE TABLE `tickets` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` int(11) NOT NULL,
  `quality` int(11) NOT NULL,
  `start_selling` datetime NOT NULL,
  `end_selling` datetime NOT NULL,
  `min_selling` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `max_selling` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `seat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ticket_type_id` int(10) UNSIGNED NOT NULL,
  `event_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tickets`
--

INSERT INTO `tickets` (`id`, `title`, `slug`, `price`, `quality`, `start_selling`, `end_selling`, `min_selling`, `max_selling`, `description`, `status`, `seat`, `ticket_type_id`, `event_id`, `user_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Vé Halloween free for VIP', NULL, 0, 50, '2019-03-05 09:14:25', '2019-03-13 09:14:30', '1', '11', NULL, 1, NULL, 1, 4, NULL, '2019-03-04 19:17:22', '2019-03-07 03:55:47', NULL),
(2, 'Vé Halloween for Customer', NULL, 50000, 200, '2019-03-06 09:27:58', '2019-03-13 09:28:03', '1', '9', NULL, 1, NULL, 2, 4, NULL, '2019-03-04 19:29:06', '2019-03-04 21:57:06', NULL),
(3, 'Marijuana Ticket Free', NULL, 0, 500, '2019-03-05 13:00:44', '2019-03-13 12:00:49', '1', '1', NULL, 1, NULL, 1, 1, NULL, '2019-03-04 22:04:00', '2019-03-05 09:49:55', NULL),
(4, 'Vé Hội chợ Handmade', NULL, 50000, 400, '2019-03-05 14:00:26', '2019-03-13 14:00:31', '1', '2', NULL, 1, NULL, 2, 2, NULL, '2019-03-05 00:02:06', '2019-03-05 00:02:06', NULL),
(5, 'Vé miễn phí tham dự sự kiện Giờ Trái đất', NULL, 0, 200, '2019-03-26 19:00:47', '2019-03-26 22:00:01', '1', '5', NULL, 1, NULL, 1, 5, NULL, '2019-03-07 03:45:34', '2019-03-07 03:48:05', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ticket_types`
--

CREATE TABLE `ticket_types` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `ticket_types`
--

INSERT INTO `ticket_types` (`id`, `title`, `description`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Loại vé miễn phí', NULL, '2019-02-26 04:23:50', '2019-02-26 04:23:50', NULL),
(2, 'Loại vé có phí', NULL, '2019-02-26 04:24:05', '2019-02-26 04:25:30', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bank` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `branch_bank` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bank_account_number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bank_account_owner` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `slug`, `phone`, `address`, `bank`, `branch_bank`, `bank_account_number`, `bank_account_owner`, `email`, `password`, `role_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Hoàng Phúc', NULL, '0123456788', NULL, NULL, NULL, NULL, NULL, 'phuc@pmail.hp', '123456', 1, '2019-02-22 20:32:33', '2019-02-22 20:32:33', NULL),
(2, 'Bé Ngoan', 'be-ngoan-2', '0123456789', 'Giồng Riềng, Kiêng Giang', 'TPBank', 'Ninh Kiều, Cần Thơ', '12345678901', 'Le Thi Be Ngoan', 'ngoan@pmail.hp', '123456', 2, '2019-02-22 20:33:19', '2019-03-06 20:05:12', NULL),
(3, 'Hoàng Phúc 2', 'hoang-phuc-2', '1111111111', NULL, NULL, NULL, NULL, NULL, 'admin@admin.com', '11111111111111', 2, '2019-03-06 19:59:21', '2019-03-06 19:59:21', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `wards`
--

CREATE TABLE `wards` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `district_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `wards`
--

INSERT INTO `wards` (`id`, `title`, `description`, `district_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Bùi Hữu Nghĩa', 'bui-huu-nghia-bt-ct', 5, '2019-02-24 04:00:24', '2019-03-05 08:56:12', NULL),
(2, 'Ngọc Chúc', 'ngoc-chuc', 4, '2019-02-24 04:07:38', '2019-02-24 04:21:05', NULL),
(3, 'Xuân Khánh', 'xuan-khanh-can-tho', 1, '2019-03-03 21:58:14', '2019-03-03 21:58:14', NULL);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `administrators`
--
ALTER TABLE `administrators`
  ADD PRIMARY KEY (`id`),
  ADD KEY `administrators_role_id_foreign` (`role_id`);

--
-- Chỉ mục cho bảng `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `collaborators`
--
ALTER TABLE `collaborators`
  ADD PRIMARY KEY (`id`),
  ADD KEY `collaborators_role_id_foreign` (`role_id`);

--
-- Chỉ mục cho bảng `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `customers_role_id_foreign` (`role_id`);

--
-- Chỉ mục cho bảng `districts`
--
ALTER TABLE `districts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `districts_city_id_foreign` (`city_id`);

--
-- Chỉ mục cho bảng `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`),
  ADD KEY `events_user_id_foreign` (`user_id`),
  ADD KEY `events_event_type_id_foreign` (`event_type_id`),
  ADD KEY `ward_id` (`ward_id`);

--
-- Chỉ mục cho bảng `event_types`
--
ALTER TABLE `event_types`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `image_events`
--
ALTER TABLE `image_events`
  ADD PRIMARY KEY (`id`),
  ADD KEY `image_events_event_id_foreign` (`event_id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `seats`
--
ALTER TABLE `seats`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tickets`
--
ALTER TABLE `tickets`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tickets_event_id_foreign` (`event_id`),
  ADD KEY `tickets_user_id_foreign` (`user_id`),
  ADD KEY `tickets_ticket_type_id_foreign` (`ticket_type_id`);

--
-- Chỉ mục cho bảng `ticket_types`
--
ALTER TABLE `ticket_types`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `users_role_id_foreign` (`role_id`);

--
-- Chỉ mục cho bảng `wards`
--
ALTER TABLE `wards`
  ADD PRIMARY KEY (`id`),
  ADD KEY `wards_district_id_foreign` (`district_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `administrators`
--
ALTER TABLE `administrators`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `cities`
--
ALTER TABLE `cities`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `collaborators`
--
ALTER TABLE `collaborators`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `districts`
--
ALTER TABLE `districts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `events`
--
ALTER TABLE `events`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `event_types`
--
ALTER TABLE `event_types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `image_events`
--
ALTER TABLE `image_events`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT cho bảng `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `seats`
--
ALTER TABLE `seats`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `tickets`
--
ALTER TABLE `tickets`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `ticket_types`
--
ALTER TABLE `ticket_types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `wards`
--
ALTER TABLE `wards`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `administrators`
--
ALTER TABLE `administrators`
  ADD CONSTRAINT `administrators_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);

--
-- Các ràng buộc cho bảng `collaborators`
--
ALTER TABLE `collaborators`
  ADD CONSTRAINT `collaborators_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);

--
-- Các ràng buộc cho bảng `customers`
--
ALTER TABLE `customers`
  ADD CONSTRAINT `customers_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);

--
-- Các ràng buộc cho bảng `districts`
--
ALTER TABLE `districts`
  ADD CONSTRAINT `districts_city_id_foreign` FOREIGN KEY (`city_id`) REFERENCES `cities` (`id`);

--
-- Các ràng buộc cho bảng `events`
--
ALTER TABLE `events`
  ADD CONSTRAINT `events_event_type_id_foreign` FOREIGN KEY (`event_type_id`) REFERENCES `event_types` (`id`),
  ADD CONSTRAINT `events_ibfk_1` FOREIGN KEY (`ward_id`) REFERENCES `wards` (`id`),
  ADD CONSTRAINT `events_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Các ràng buộc cho bảng `image_events`
--
ALTER TABLE `image_events`
  ADD CONSTRAINT `image_events_event_id_foreign` FOREIGN KEY (`event_id`) REFERENCES `events` (`id`);

--
-- Các ràng buộc cho bảng `tickets`
--
ALTER TABLE `tickets`
  ADD CONSTRAINT `tickets_event_id_foreign` FOREIGN KEY (`event_id`) REFERENCES `events` (`id`),
  ADD CONSTRAINT `tickets_ticket_type_id_foreign` FOREIGN KEY (`ticket_type_id`) REFERENCES `ticket_types` (`id`),
  ADD CONSTRAINT `tickets_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Các ràng buộc cho bảng `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);

--
-- Các ràng buộc cho bảng `wards`
--
ALTER TABLE `wards`
  ADD CONSTRAINT `wards_district_id_foreign` FOREIGN KEY (`district_id`) REFERENCES `districts` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
