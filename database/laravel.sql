-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 18, 2021 at 03:21 AM
-- Server version: 8.0.23-0ubuntu0.20.04.1
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `staff`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity_log`
--

CREATE TABLE `activity_log` (
  `id` bigint UNSIGNED NOT NULL,
  `log_name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject_id` bigint UNSIGNED DEFAULT NULL,
  `subject_type` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `causer_id` bigint UNSIGNED DEFAULT NULL,
  `causer_type` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `properties` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `activity_log`
--

INSERT INTO `activity_log` (`id`, `log_name`, `description`, `subject_id`, `subject_type`, `causer_id`, `causer_type`, `properties`, `created_at`, `updated_at`) VALUES
(1, 'default', 'Account signed-in', 1, 'App\\User', 1, 'App\\User', '{\"name\":\"admin\",\"by\":\"admin\"}', '2021-02-27 20:45:11', '2021-02-27 20:45:11'),
(2, 'default', 'Role was created', 3, 'Spatie\\Permission\\Models\\Role', 1, 'App\\User', '{\"name\":\"staff\",\"by\":\"admin\"}', '2021-02-27 20:45:23', '2021-02-27 20:45:23'),
(3, 'default', 'User was created', 3, 'App\\User', 1, 'App\\User', '{\"name\":\"Company 2\",\"by\":\"admin\"}', '2021-02-27 20:46:37', '2021-02-27 20:46:37'),
(4, 'default', 'User was created', 4, 'App\\User', 1, 'App\\User', '{\"name\":\"Staff\",\"by\":\"admin\"}', '2021-02-27 20:47:08', '2021-02-27 20:47:08'),
(5, 'default', 'User was updated', 2, 'App\\User', 1, 'App\\User', '{\"name\":\"johndoe\",\"by\":\"admin\"}', '2021-02-27 20:47:30', '2021-02-27 20:47:30'),
(6, 'default', 'Account signed-in', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"johndoe\",\"by\":\"johndoe\"}', '2021-02-28 06:32:05', '2021-02-28 06:32:05'),
(7, 'default', 'Account signed-in', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"johndoe\",\"by\":\"johndoe\"}', '2021-02-28 08:05:07', '2021-02-28 08:05:07'),
(8, 'default', 'Account signed-out', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"johndoe\",\"by\":\"johndoe\"}', '2021-02-28 10:11:00', '2021-02-28 10:11:00'),
(9, 'default', 'Account signed-in', 1, 'App\\User', 1, 'App\\User', '{\"name\":\"admin\",\"by\":\"admin\"}', '2021-02-28 10:19:13', '2021-02-28 10:19:13'),
(10, 'default', 'Account signed-in', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"johndoe\",\"by\":\"johndoe\"}', '2021-02-28 10:39:01', '2021-02-28 10:39:01'),
(11, 'default', 'Account signed-in', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"johndoe\",\"by\":\"johndoe\"}', '2021-02-28 11:20:16', '2021-02-28 11:20:16'),
(12, 'default', 'Account signed-in', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"johndoe\",\"by\":\"johndoe\"}', '2021-03-04 18:46:47', '2021-03-04 18:46:47'),
(13, 'default', 'Account signed-in', 1, 'App\\User', 1, 'App\\User', '{\"name\":\"admin\",\"by\":\"admin\"}', '2021-03-05 12:22:33', '2021-03-05 12:22:33'),
(14, 'default', 'Account signed-out', 1, 'App\\User', 1, 'App\\User', '{\"name\":\"admin\",\"by\":\"admin\"}', '2021-03-05 13:20:27', '2021-03-05 13:20:27'),
(15, 'default', 'Account signed-in', 1, 'App\\User', 1, 'App\\User', '{\"name\":\"admin\",\"by\":\"admin\"}', '2021-03-05 13:31:27', '2021-03-05 13:31:27'),
(16, 'default', 'Account signed-out', 1, 'App\\User', 1, 'App\\User', '{\"name\":\"admin\",\"by\":\"admin\"}', '2021-03-05 13:32:23', '2021-03-05 13:32:23'),
(17, 'default', 'Account signed-in', 1, 'App\\User', 1, 'App\\User', '{\"name\":\"admin\",\"by\":\"admin\"}', '2021-03-06 11:19:16', '2021-03-06 11:19:16'),
(18, 'default', 'Account signed-in', 1, 'App\\User', 1, 'App\\User', '{\"name\":\"admin\",\"by\":\"admin\"}', '2021-03-07 19:23:49', '2021-03-07 19:23:49'),
(19, 'default', 'Account signed-in', 1, 'App\\User', 1, 'App\\User', '{\"name\":\"admin\",\"by\":\"admin\"}', '2021-03-08 09:49:08', '2021-03-08 09:49:08'),
(20, 'default', 'Account signed-out', 1, 'App\\User', 1, 'App\\User', '{\"name\":\"admin\",\"by\":\"admin\"}', '2021-03-08 09:49:56', '2021-03-08 09:49:56'),
(21, 'default', 'Account signed-in', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"johndoe\",\"by\":\"johndoe\"}', '2021-03-08 09:50:08', '2021-03-08 09:50:08'),
(22, 'default', 'Account signed-in', 1, 'App\\User', 1, 'App\\User', '{\"name\":\"admin\",\"by\":\"admin\"}', '2021-03-08 17:37:22', '2021-03-08 17:37:22'),
(23, 'default', 'Account signed-in', 1, 'App\\User', 1, 'App\\User', '{\"name\":\"admin\",\"by\":\"admin\"}', '2021-03-08 17:42:54', '2021-03-08 17:42:54'),
(24, 'default', 'Account signed-out', 1, 'App\\User', 1, 'App\\User', '{\"name\":\"admin\",\"by\":\"admin\"}', '2021-03-08 17:43:45', '2021-03-08 17:43:45'),
(25, 'default', 'Account signed-in', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"johndoe\",\"by\":\"johndoe\"}', '2021-03-08 17:43:54', '2021-03-08 17:43:54'),
(26, 'default', 'Account signed-in', 1, 'App\\User', 1, 'App\\User', '{\"name\":\"admin\",\"by\":\"admin\"}', '2021-03-08 19:40:04', '2021-03-08 19:40:04'),
(27, 'default', 'Account signed-in', 1, 'App\\User', 1, 'App\\User', '{\"name\":\"admin\",\"by\":\"admin\"}', '2021-03-08 19:41:28', '2021-03-08 19:41:28'),
(28, 'default', 'Account signed-out', 1, 'App\\User', 1, 'App\\User', '{\"name\":\"admin\",\"by\":\"admin\"}', '2021-03-08 19:41:39', '2021-03-08 19:41:39'),
(29, 'default', 'Account signed-in', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"johndoe\",\"by\":\"johndoe\"}', '2021-03-08 19:42:01', '2021-03-08 19:42:01'),
(30, 'default', 'Account signed-in', 1, 'App\\User', 1, 'App\\User', '{\"name\":\"admin\",\"by\":\"admin\"}', '2021-03-09 08:21:18', '2021-03-09 08:21:18'),
(31, 'default', 'Account signed-out', 1, 'App\\User', 1, 'App\\User', '{\"name\":\"admin\",\"by\":\"admin\"}', '2021-03-09 08:30:34', '2021-03-09 08:30:34'),
(32, 'default', 'Account signed-in', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"johndoe\",\"by\":\"johndoe\"}', '2021-03-09 08:31:23', '2021-03-09 08:31:23'),
(33, 'default', 'User was created', 5, 'App\\User', 1, 'App\\User', '{\"name\":\"anme\",\"by\":\"admin\"}', '2021-03-09 16:14:19', '2021-03-09 16:14:19'),
(34, 'default', 'User was created', 6, 'App\\User', 1, 'App\\User', '{\"name\":\"partir\",\"by\":\"admin\"}', '2021-03-09 16:19:17', '2021-03-09 16:19:17'),
(35, 'default', 'Account signed-out', 1, 'App\\User', 1, 'App\\User', '{\"name\":\"admin\",\"by\":\"admin\"}', '2021-03-09 16:19:30', '2021-03-09 16:19:30'),
(36, 'default', 'Account signed-in', 6, 'App\\User', 6, 'App\\User', '{\"name\":\"partir\",\"by\":\"partir\"}', '2021-03-09 16:19:37', '2021-03-09 16:19:37'),
(37, 'default', 'Account signed-in', 1, 'App\\User', 1, 'App\\User', '{\"name\":\"admin\",\"by\":\"admin\"}', '2021-03-09 16:21:50', '2021-03-09 16:21:50'),
(38, 'default', 'Account signed-out', 1, 'App\\User', 1, 'App\\User', '{\"name\":\"admin\",\"by\":\"admin\"}', '2021-03-09 16:21:52', '2021-03-09 16:21:52'),
(39, 'default', 'Account signed-in', 1, 'App\\User', 1, 'App\\User', '{\"name\":\"admin\",\"by\":\"admin\"}', '2021-03-09 16:21:56', '2021-03-09 16:21:56'),
(40, 'default', 'Account signed-out', 1, 'App\\User', 1, 'App\\User', '{\"name\":\"admin\",\"by\":\"admin\"}', '2021-03-09 16:22:30', '2021-03-09 16:22:30'),
(41, 'default', 'Account signed-in', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-03-09 16:22:34', '2021-03-09 16:22:34'),
(42, 'default', 'Account signed-in', 1, 'App\\User', 1, 'App\\User', '{\"name\":\"admin\",\"by\":\"admin\"}', '2021-03-09 16:38:46', '2021-03-09 16:38:46'),
(43, 'default', 'Account signed-out', 1, 'App\\User', 1, 'App\\User', '{\"name\":\"admin\",\"by\":\"admin\"}', '2021-03-09 23:08:02', '2021-03-09 23:08:02'),
(44, 'default', 'Account was registered', 7, 'App\\User', 7, 'App\\User', '{\"name\":\"kader\",\"by\":\"kader\"}', '2021-03-09 23:08:56', '2021-03-09 23:08:56'),
(45, 'default', 'Account signed-in', 7, 'App\\User', 7, 'App\\User', '{\"name\":\"kader\",\"by\":\"kader\"}', '2021-03-09 23:08:56', '2021-03-09 23:08:56'),
(46, 'default', 'Account signed-in', 1, 'App\\User', 1, 'App\\User', '{\"name\":\"admin\",\"by\":\"admin\"}', '2021-03-09 23:23:34', '2021-03-09 23:23:34'),
(47, 'default', 'Account signed-out', 7, 'App\\User', 7, 'App\\User', '{\"name\":\"kader\",\"by\":\"kader\"}', '2021-03-10 00:07:43', '2021-03-10 00:07:43'),
(48, 'default', 'Account signed-in', 7, 'App\\User', 7, 'App\\User', '{\"name\":\"kader\",\"by\":\"kader\"}', '2021-03-10 09:41:51', '2021-03-10 09:41:51'),
(49, 'default', 'Account signed-in', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-03-10 09:42:59', '2021-03-10 09:42:59'),
(50, 'default', 'Account signed-in', 1, 'App\\User', 1, 'App\\User', '{\"name\":\"admin\",\"by\":\"admin\"}', '2021-03-10 10:37:15', '2021-03-10 10:37:15'),
(51, 'default', 'Account signed-out', 1, 'App\\User', 1, 'App\\User', '{\"name\":\"admin\",\"by\":\"admin\"}', '2021-03-10 13:47:09', '2021-03-10 13:47:09'),
(52, 'default', 'Account signed-in', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-03-10 13:47:20', '2021-03-10 13:47:20'),
(53, 'default', 'Account signed-in', 1, 'App\\User', 1, 'App\\User', '{\"name\":\"admin\",\"by\":\"admin\"}', '2021-03-10 19:52:33', '2021-03-10 19:52:33'),
(54, 'default', 'Account signed-out', 1, 'App\\User', 1, 'App\\User', '{\"name\":\"admin\",\"by\":\"admin\"}', '2021-03-10 19:53:34', '2021-03-10 19:53:34'),
(55, 'default', 'Account signed-in', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-03-10 19:54:06', '2021-03-10 19:54:06'),
(56, 'default', 'Account signed-out', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-03-10 19:54:26', '2021-03-10 19:54:26'),
(57, 'default', 'Account signed-in', 12, 'App\\User', 12, 'App\\User', '{\"name\":\"jonde\",\"by\":\"jonde\"}', '2021-03-10 19:54:36', '2021-03-10 19:54:36'),
(58, 'default', 'Account signed-out', 12, 'App\\User', 12, 'App\\User', '{\"name\":\"jonde\",\"by\":\"jonde\"}', '2021-03-10 20:13:02', '2021-03-10 20:13:02'),
(59, 'default', 'Account signed-in', 1, 'App\\User', 1, 'App\\User', '{\"name\":\"admin\",\"by\":\"admin\"}', '2021-03-10 20:13:22', '2021-03-10 20:13:22'),
(60, 'default', 'Account signed-out', 1, 'App\\User', 1, 'App\\User', '{\"name\":\"admin\",\"by\":\"admin\"}', '2021-03-10 20:24:14', '2021-03-10 20:24:14'),
(61, 'default', 'Account signed-in', 10, 'App\\User', 10, 'App\\User', '{\"name\":\"abdulkader\",\"by\":\"abdulkader\"}', '2021-03-10 20:24:26', '2021-03-10 20:24:26'),
(62, 'default', 'Account signed-out', 10, 'App\\User', 10, 'App\\User', '{\"name\":\"abdulkader\",\"by\":\"abdulkader\"}', '2021-03-10 20:31:22', '2021-03-10 20:31:22'),
(63, 'default', 'Account signed-in', 1, 'App\\User', 1, 'App\\User', '{\"name\":\"admin\",\"by\":\"admin\"}', '2021-03-10 20:31:36', '2021-03-10 20:31:36'),
(64, 'default', 'User was created', 14, 'App\\User', 1, 'App\\User', '{\"name\":\"devid\",\"by\":\"admin\"}', '2021-03-10 20:33:33', '2021-03-10 20:33:33'),
(65, 'default', 'Account signed-out', 1, 'App\\User', 1, 'App\\User', '{\"name\":\"admin\",\"by\":\"admin\"}', '2021-03-10 20:34:35', '2021-03-10 20:34:35'),
(66, 'default', 'Account signed-in', 14, 'App\\User', 14, 'App\\User', '{\"name\":\"devid\",\"by\":\"devid\"}', '2021-03-10 20:34:44', '2021-03-10 20:34:44'),
(67, 'default', 'Account signed-out', 14, 'App\\User', 14, 'App\\User', '{\"name\":\"devid\",\"by\":\"devid\"}', '2021-03-10 20:44:07', '2021-03-10 20:44:07'),
(68, 'default', 'Account signed-in', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-03-10 20:44:20', '2021-03-10 20:44:20'),
(69, 'default', 'Account signed-out', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-03-10 20:46:50', '2021-03-10 20:46:50'),
(70, 'default', 'Account signed-in', 15, 'App\\User', 15, 'App\\User', '{\"name\":\"newone\",\"by\":\"newone\"}', '2021-03-10 20:46:58', '2021-03-10 20:46:58'),
(71, 'default', 'Account signed-out', 15, 'App\\User', 15, 'App\\User', '{\"name\":\"newone\",\"by\":\"newone\"}', '2021-03-10 20:53:47', '2021-03-10 20:53:47'),
(72, 'default', 'Account signed-in', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-03-10 20:54:08', '2021-03-10 20:54:08'),
(73, 'default', 'Account signed-out', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-03-10 20:55:46', '2021-03-10 20:55:46'),
(74, 'default', 'Account signed-in', 16, 'App\\User', 16, 'App\\User', '{\"name\":\"abdurrahim\",\"by\":\"abdurrahim\"}', '2021-03-10 20:55:52', '2021-03-10 20:55:52'),
(75, 'default', 'Account signed-out', 16, 'App\\User', 16, 'App\\User', '{\"name\":\"abdurrahim\",\"by\":\"abdurrahim\"}', '2021-03-10 20:58:08', '2021-03-10 20:58:08'),
(76, 'default', 'Account was registered', 17, 'App\\User', 17, 'App\\User', '{\"name\":\"ishita\",\"by\":\"ishita\"}', '2021-03-10 20:58:51', '2021-03-10 20:58:51'),
(77, 'default', 'Account signed-in', 17, 'App\\User', 17, 'App\\User', '{\"name\":\"ishita\",\"by\":\"ishita\"}', '2021-03-10 20:58:51', '2021-03-10 20:58:51'),
(78, 'default', 'Account signed-out', 17, 'App\\User', 17, 'App\\User', '{\"name\":\"ishita\",\"by\":\"ishita\"}', '2021-03-10 21:00:39', '2021-03-10 21:00:39'),
(79, 'default', 'Account signed-in', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-03-10 21:01:03', '2021-03-10 21:01:03'),
(80, 'default', 'Account signed-in', 18, 'App\\User', 18, 'App\\User', '{\"name\":\"staf1test\",\"by\":\"staf1test\"}', '2021-03-10 21:03:23', '2021-03-10 21:03:23'),
(81, 'default', 'Account signed-out', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-03-10 21:04:21', '2021-03-10 21:04:21'),
(82, 'default', 'Account signed-in', 1, 'App\\User', 1, 'App\\User', '{\"name\":\"admin\",\"by\":\"admin\"}', '2021-03-10 21:04:33', '2021-03-10 21:04:33'),
(83, 'default', 'Account signed-out', 1, 'App\\User', 1, 'App\\User', '{\"name\":\"admin\",\"by\":\"admin\"}', '2021-03-10 21:06:36', '2021-03-10 21:06:36'),
(84, 'default', 'Account signed-in', 1, 'App\\User', 1, 'App\\User', '{\"name\":\"admin\",\"by\":\"admin\"}', '2021-03-10 21:06:54', '2021-03-10 21:06:54'),
(85, 'default', 'Account signed-out', 18, 'App\\User', 18, 'App\\User', '{\"name\":\"staf1test\",\"by\":\"staf1test\"}', '2021-03-10 21:07:38', '2021-03-10 21:07:38'),
(86, 'default', 'Account signed-in', 1, 'App\\User', 1, 'App\\User', '{\"name\":\"admin\",\"by\":\"admin\"}', '2021-03-10 21:07:56', '2021-03-10 21:07:56'),
(87, 'default', 'Account signed-in', 1, 'App\\User', 1, 'App\\User', '{\"name\":\"admin\",\"by\":\"admin\"}', '2021-03-10 21:08:56', '2021-03-10 21:08:56'),
(88, 'default', 'Account signed-out', 18, 'App\\User', 18, 'App\\User', '{\"name\":\"staf1test\",\"by\":\"staf1test\"}', '2021-03-10 21:15:16', '2021-03-10 21:15:16'),
(89, 'default', 'Account signed-out', 1, 'App\\User', 1, 'App\\User', '{\"name\":\"admin\",\"by\":\"admin\"}', '2021-03-10 21:15:59', '2021-03-10 21:15:59'),
(90, 'default', 'Account signed-in', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-03-10 21:16:28', '2021-03-10 21:16:28'),
(91, 'default', 'Account signed-out', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-03-10 21:19:19', '2021-03-10 21:19:19'),
(92, 'default', 'Account signed-in', 19, 'App\\User', 19, 'App\\User', '{\"name\":\"tanimmondol\",\"by\":\"tanimmondol\"}', '2021-03-10 21:19:27', '2021-03-10 21:19:27'),
(93, 'default', 'Account signed-in', 1, 'App\\User', 1, 'App\\User', '{\"name\":\"admin\",\"by\":\"admin\"}', '2021-03-10 21:41:36', '2021-03-10 21:41:36'),
(94, 'default', 'Account signed-in', 1, 'App\\User', 1, 'App\\User', '{\"name\":\"admin\",\"by\":\"admin\"}', '2021-03-10 21:48:29', '2021-03-10 21:48:29'),
(95, 'default', 'Account signed-in', 1, 'App\\User', 1, 'App\\User', '{\"name\":\"admin\",\"by\":\"admin\"}', '2021-03-11 05:39:13', '2021-03-11 05:39:13'),
(96, 'default', 'Account was registered', 20, 'App\\User', 20, 'App\\User', '{\"name\":\"kader\",\"by\":\"kader\"}', '2021-03-11 05:41:35', '2021-03-11 05:41:35'),
(97, 'default', 'Account signed-in', 20, 'App\\User', 20, 'App\\User', '{\"name\":\"kader\",\"by\":\"kader\"}', '2021-03-11 05:41:35', '2021-03-11 05:41:35'),
(98, 'default', 'Account signed-in', 21, 'App\\User', 21, 'App\\User', '{\"name\":\"konockreza\",\"by\":\"konockreza\"}', '2021-03-11 05:46:43', '2021-03-11 05:46:43'),
(99, 'default', 'User was updated', 21, 'App\\User', 1, 'App\\User', '{\"name\":\"konockreza\",\"by\":\"admin\"}', '2021-03-11 05:47:14', '2021-03-11 05:47:14'),
(100, 'default', 'Account signed-out', 21, 'App\\User', 21, 'App\\User', '{\"name\":\"konockreza\",\"by\":\"konockreza\"}', '2021-03-11 05:48:35', '2021-03-11 05:48:35'),
(101, 'default', 'Account signed-in', 21, 'App\\User', 21, 'App\\User', '{\"name\":\"konockreza\",\"by\":\"konockreza\"}', '2021-03-11 05:48:42', '2021-03-11 05:48:42'),
(102, 'default', 'User was updated', 21, 'App\\User', 1, 'App\\User', '{\"name\":\"konockreza\",\"by\":\"admin\"}', '2021-03-11 05:53:51', '2021-03-11 05:53:51'),
(103, 'default', 'Account signed-out', 21, 'App\\User', 21, 'App\\User', '{\"name\":\"konockreza\",\"by\":\"konockreza\"}', '2021-03-11 05:54:01', '2021-03-11 05:54:01'),
(104, 'default', 'User was updated', 21, 'App\\User', 1, 'App\\User', '{\"name\":\"konockreza\",\"by\":\"admin\"}', '2021-03-11 05:54:34', '2021-03-11 05:54:34'),
(105, 'default', 'Account signed-in', 21, 'App\\User', 21, 'App\\User', '{\"name\":\"konockreza\",\"by\":\"konockreza\"}', '2021-03-11 05:54:47', '2021-03-11 05:54:47'),
(106, 'default', 'Account signed-out', 21, 'App\\User', 21, 'App\\User', '{\"name\":\"konockreza\",\"by\":\"konockreza\"}', '2021-03-11 05:56:02', '2021-03-11 05:56:02'),
(107, 'default', 'Account signed-in', 22, 'App\\User', 22, 'App\\User', '{\"name\":\"ishratjahan\",\"by\":\"ishratjahan\"}', '2021-03-11 05:56:10', '2021-03-11 05:56:10'),
(108, 'default', 'Account signed-in', 1, 'App\\User', 1, 'App\\User', '{\"name\":\"admin\",\"by\":\"admin\"}', '2021-03-11 05:57:24', '2021-03-11 05:57:24'),
(109, 'default', 'User was updated', 22, 'App\\User', 1, 'App\\User', '{\"name\":\"ishratjahan\",\"by\":\"admin\"}', '2021-03-11 05:57:43', '2021-03-11 05:57:43'),
(110, 'default', 'Account signed-in', 23, 'App\\User', 23, 'App\\User', '{\"name\":\"konockreza\",\"by\":\"konockreza\"}', '2021-03-11 06:01:43', '2021-03-11 06:01:43'),
(111, 'default', 'User was updated', 23, 'App\\User', 1, 'App\\User', '{\"name\":\"konockreza\",\"by\":\"admin\"}', '2021-03-11 06:02:31', '2021-03-11 06:02:31'),
(112, 'default', 'Account signed-out', 23, 'App\\User', 23, 'App\\User', '{\"name\":\"konockreza\",\"by\":\"konockreza\"}', '2021-03-11 06:08:22', '2021-03-11 06:08:22'),
(113, 'default', 'Account signed-in', 24, 'App\\User', 24, 'App\\User', '{\"name\":\"ishratjahan\",\"by\":\"ishratjahan\"}', '2021-03-11 06:08:37', '2021-03-11 06:08:37'),
(114, 'default', 'User was updated', 24, 'App\\User', 1, 'App\\User', '{\"name\":\"ishratjahan\",\"by\":\"admin\"}', '2021-03-11 06:09:46', '2021-03-11 06:09:46'),
(115, 'default', 'Account signed-out', 20, 'App\\User', 20, 'App\\User', '{\"name\":\"kader\",\"by\":\"kader\"}', '2021-03-11 06:24:14', '2021-03-11 06:24:14'),
(116, 'default', 'Account signed-in', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-03-11 06:24:27', '2021-03-11 06:24:27'),
(117, 'default', 'User was created', 27, 'App\\User', 2, 'App\\User', '{\"name\":\"konock@gmail.com\",\"by\":\"company1\"}', '2021-03-11 06:28:19', '2021-03-11 06:28:19'),
(118, 'default', 'User was created', 28, 'App\\User', 2, 'App\\User', '{\"name\":\"konock@gmail.com\",\"by\":\"company1\"}', '2021-03-11 06:30:40', '2021-03-11 06:30:40'),
(119, 'default', 'Account signed-in', 28, 'App\\User', 28, 'App\\User', '{\"name\":\"konockreza\",\"by\":\"konockreza\"}', '2021-03-11 06:31:03', '2021-03-11 06:31:03'),
(120, 'default', 'User was created', 29, 'App\\User', 2, 'App\\User', '{\"name\":\"ishita@gmail.com\",\"by\":\"company1\"}', '2021-03-11 06:33:50', '2021-03-11 06:33:50'),
(121, 'default', 'Account signed-out', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-03-11 07:50:02', '2021-03-11 07:50:02'),
(122, 'default', 'Account signed-in', 1, 'App\\User', 1, 'App\\User', '{\"name\":\"admin\",\"by\":\"admin\"}', '2021-03-11 07:50:15', '2021-03-11 07:50:15'),
(123, 'default', 'Account signed-out', 1, 'App\\User', 1, 'App\\User', '{\"name\":\"admin\",\"by\":\"admin\"}', '2021-03-11 08:04:13', '2021-03-11 08:04:13'),
(124, 'default', 'Account signed-in', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-03-11 08:04:25', '2021-03-11 08:04:25'),
(125, 'default', 'User was created', 30, 'App\\User', 2, 'App\\User', '{\"name\":\"jon@gmail.com\",\"by\":\"company1\"}', '2021-03-11 08:04:50', '2021-03-11 08:04:50'),
(126, 'default', 'Account signed-out', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-03-11 08:05:00', '2021-03-11 08:05:00'),
(127, 'default', 'Account signed-in', 30, 'App\\User', 30, 'App\\User', '{\"name\":\"jonde\",\"by\":\"jonde\"}', '2021-03-11 08:05:09', '2021-03-11 08:05:09'),
(128, 'default', 'Account signed-out', 30, 'App\\User', 30, 'App\\User', '{\"name\":\"jonde\",\"by\":\"jonde\"}', '2021-03-11 09:27:18', '2021-03-11 09:27:18'),
(129, 'default', 'Account signed-in', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-03-11 09:27:31', '2021-03-11 09:27:31'),
(130, 'default', 'Account signed-in', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-03-11 16:21:46', '2021-03-11 16:21:46'),
(131, 'default', 'Account signed-in', 1, 'App\\User', 1, 'App\\User', '{\"name\":\"admin\",\"by\":\"admin\"}', '2021-03-11 16:22:23', '2021-03-11 16:22:23'),
(132, 'default', 'Account signed-in', 1, 'App\\User', 1, 'App\\User', '{\"name\":\"admin\",\"by\":\"admin\"}', '2021-03-11 19:46:00', '2021-03-11 19:46:00'),
(133, 'default', 'User was updated', 29, 'App\\User', 1, 'App\\User', '{\"name\":\"ishratjahan\",\"by\":\"admin\"}', '2021-03-11 19:46:08', '2021-03-11 19:46:08'),
(134, 'default', 'Account signed-in', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-03-12 09:08:23', '2021-03-12 09:08:23'),
(135, 'default', 'Account signed-in', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-03-12 11:40:09', '2021-03-12 11:40:09'),
(136, 'default', 'Account signed-in', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-03-12 15:17:59', '2021-03-12 15:17:59'),
(137, 'default', 'User was created', 31, 'App\\User', 2, 'App\\User', '{\"name\":\"test1@gmail.com\",\"by\":\"company1\"}', '2021-03-12 21:08:32', '2021-03-12 21:08:32'),
(138, 'default', 'Account signed-in', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-03-13 09:48:45', '2021-03-13 09:48:45'),
(139, 'default', 'User was created', 32, 'App\\User', 2, 'App\\User', '{\"name\":\"konock@gmail.com\",\"by\":\"company1\"}', '2021-03-13 11:25:46', '2021-03-13 11:25:46'),
(140, 'default', 'User was created', 33, 'App\\User', 2, 'App\\User', '{\"name\":\"ishita@gmail.com\",\"by\":\"company1\"}', '2021-03-13 11:35:49', '2021-03-13 11:35:49'),
(141, 'default', 'User was created', 34, 'App\\User', 2, 'App\\User', '{\"name\":\"nusrat@gmail.com\",\"by\":\"company1\"}', '2021-03-13 11:39:12', '2021-03-13 11:39:12'),
(142, 'default', 'User was created', 35, 'App\\User', 20, 'App\\User', '{\"name\":\"tanim@gmail.com\",\"by\":\"kader\"}', '2021-03-13 11:52:22', '2021-03-13 11:52:22'),
(143, 'default', 'User was created', 36, 'App\\User', 2, 'App\\User', '{\"name\":\"konock@gmail.com\",\"by\":\"company1\"}', '2021-03-13 12:00:07', '2021-03-13 12:00:07'),
(144, 'default', 'User was created', 37, 'App\\User', 2, 'App\\User', '{\"name\":\"ishita@gmail.com\",\"by\":\"company1\"}', '2021-03-13 14:31:57', '2021-03-13 14:31:57'),
(145, 'default', 'Account signed-out', 36, 'App\\User', 36, 'App\\User', '{\"name\":\"konockrezaupdate\",\"by\":\"konockrezaupdate\"}', '2021-03-13 15:59:56', '2021-03-13 15:59:56'),
(146, 'default', 'Account signed-out', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-03-13 16:05:00', '2021-03-13 16:05:00'),
(147, 'default', 'User was updated', 36, 'App\\User', 1, 'App\\User', '{\"name\":\"konockrezaupdate\",\"by\":\"admin\"}', '2021-03-13 16:08:08', '2021-03-13 16:08:08'),
(148, 'default', 'User was created', 38, 'App\\User', 1, 'App\\User', '{\"name\":\"newuser\",\"by\":\"admin\"}', '2021-03-13 16:09:26', '2021-03-13 16:09:26'),
(149, 'default', 'Account signed-out', 1, 'App\\User', 1, 'App\\User', '{\"name\":\"admin\",\"by\":\"admin\"}', '2021-03-13 16:09:52', '2021-03-13 16:09:52'),
(150, 'default', 'Account signed-in', 38, 'App\\User', 38, 'App\\User', '{\"name\":\"newuser\",\"by\":\"newuser\"}', '2021-03-13 16:09:58', '2021-03-13 16:09:58'),
(151, 'default', 'Account signed-out', 1, 'App\\User', 1, 'App\\User', '{\"name\":\"admin\",\"by\":\"admin\"}', '2021-03-13 16:10:13', '2021-03-13 16:10:13'),
(152, 'default', 'Account was registered', 39, 'App\\User', 39, 'App\\User', '{\"name\":\"nasim\",\"by\":\"nasim\"}', '2021-03-13 16:10:36', '2021-03-13 16:10:36'),
(153, 'default', 'Account signed-in', 39, 'App\\User', 39, 'App\\User', '{\"name\":\"nasim\",\"by\":\"nasim\"}', '2021-03-13 16:10:36', '2021-03-13 16:10:36'),
(154, 'default', 'User was created', 40, 'App\\User', 39, 'App\\User', '{\"name\":\"nayon@gmail.com\",\"by\":\"nasim\"}', '2021-03-13 16:11:14', '2021-03-13 16:11:14'),
(155, 'default', 'Account signed-in', 1, 'App\\User', 1, 'App\\User', '{\"name\":\"admin\",\"by\":\"admin\"}', '2021-03-13 15:21:03', '2021-03-13 15:21:03'),
(156, 'default', 'Account signed-in', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-03-13 15:22:12', '2021-03-13 15:22:12'),
(157, 'default', 'User was deleted', 40, 'App\\User', 1, 'App\\User', '{\"name\":\"nayonnayon\",\"by\":\"admin\"}', '2021-03-13 15:22:33', '2021-03-13 15:22:33'),
(158, 'default', 'User was deleted', 39, 'App\\User', 1, 'App\\User', '{\"name\":\"nasim\",\"by\":\"admin\"}', '2021-03-13 15:22:37', '2021-03-13 15:22:37'),
(159, 'default', 'User was deleted', 38, 'App\\User', 1, 'App\\User', '{\"name\":\"newuser\",\"by\":\"admin\"}', '2021-03-13 15:23:22', '2021-03-13 15:23:22'),
(160, 'default', 'User was deleted', 37, 'App\\User', 1, 'App\\User', '{\"name\":\"ishratjahan\",\"by\":\"admin\"}', '2021-03-13 15:23:26', '2021-03-13 15:23:26'),
(161, 'default', 'User was deleted', 36, 'App\\User', 1, 'App\\User', '{\"name\":\"konockrezaupdate\",\"by\":\"admin\"}', '2021-03-13 15:23:30', '2021-03-13 15:23:30'),
(162, 'default', 'User was created', 41, 'App\\User', 2, 'App\\User', '{\"name\":\"konock@gmail.com\",\"by\":\"company1\"}', '2021-03-13 15:24:43', '2021-03-13 15:24:43'),
(163, 'default', 'Account signed-out', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-03-13 16:24:56', '2021-03-13 16:24:56'),
(164, 'default', 'Account signed-in', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-03-13 16:25:18', '2021-03-13 16:25:18'),
(165, 'default', 'User was created', 42, 'App\\User', 2, 'App\\User', '{\"name\":\"testing@demo.com\",\"by\":\"company1\"}', '2021-03-13 16:26:11', '2021-03-13 16:26:11'),
(166, 'default', 'Account signed-out', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-03-13 16:28:35', '2021-03-13 16:28:35'),
(167, 'default', 'Account signed-in', 42, 'App\\User', 42, 'App\\User', '{\"name\":\"testinguser\",\"by\":\"testinguser\"}', '2021-03-13 16:28:42', '2021-03-13 16:28:42'),
(168, 'default', 'Account signed-out', 42, 'App\\User', 42, 'App\\User', '{\"name\":\"testinguser\",\"by\":\"testinguser\"}', '2021-03-13 16:29:00', '2021-03-13 16:29:00'),
(169, 'default', 'Account signed-out', 1, 'App\\User', 1, 'App\\User', '{\"name\":\"admin\",\"by\":\"admin\"}', '2021-03-13 16:29:08', '2021-03-13 16:29:08'),
(170, 'default', 'Account signed-in', 1, 'App\\User', 1, 'App\\User', '{\"name\":\"admin\",\"by\":\"admin\"}', '2021-03-13 16:29:21', '2021-03-13 16:29:21'),
(171, 'default', 'User was updated', 42, 'App\\User', 1, 'App\\User', '{\"name\":\"testinguser\",\"by\":\"admin\"}', '2021-03-13 16:29:36', '2021-03-13 16:29:36'),
(172, 'default', 'User was created', 43, 'App\\User', 1, 'App\\User', '{\"name\":\"adminstaf\",\"by\":\"admin\"}', '2021-03-13 16:30:44', '2021-03-13 16:30:44'),
(173, 'default', 'Account signed-in', 43, 'App\\User', 43, 'App\\User', '{\"name\":\"adminstaf\",\"by\":\"adminstaf\"}', '2021-03-13 16:30:58', '2021-03-13 16:30:58'),
(174, 'default', 'Account signed-out', 1, 'App\\User', 1, 'App\\User', '{\"name\":\"admin\",\"by\":\"admin\"}', '2021-03-13 16:32:37', '2021-03-13 16:32:37'),
(175, 'default', 'Account signed-in', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-03-13 16:32:46', '2021-03-13 16:32:46'),
(176, 'default', 'Account signed-in', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-03-13 16:42:29', '2021-03-13 16:42:29'),
(177, 'default', 'Account signed-out', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-03-13 16:51:12', '2021-03-13 16:51:12'),
(178, 'default', 'Account signed-in', 1, 'App\\User', 1, 'App\\User', '{\"name\":\"admin\",\"by\":\"admin\"}', '2021-03-13 16:51:29', '2021-03-13 16:51:29'),
(179, 'default', 'User was created', 44, 'App\\User', 1, 'App\\User', '{\"name\":\"Company2\",\"by\":\"admin\"}', '2021-03-13 16:52:25', '2021-03-13 16:52:25'),
(180, 'default', 'Account signed-out', 1, 'App\\User', 1, 'App\\User', '{\"name\":\"admin\",\"by\":\"admin\"}', '2021-03-13 16:52:30', '2021-03-13 16:52:30'),
(181, 'default', 'Account signed-in', 44, 'App\\User', 44, 'App\\User', '{\"name\":\"Company2\",\"by\":\"Company2\"}', '2021-03-13 16:52:46', '2021-03-13 16:52:46'),
(182, 'default', 'User was created', 45, 'App\\User', 44, 'App\\User', '{\"name\":\"adam@demo.com\",\"by\":\"Company2\"}', '2021-03-13 16:53:49', '2021-03-13 16:53:49'),
(183, 'default', 'User was created', 46, 'App\\User', 2, 'App\\User', '{\"name\":\"rakib@gmail.com\",\"by\":\"company1\"}', '2021-03-13 18:54:57', '2021-03-13 18:54:57'),
(184, 'default', 'Account signed-out', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-03-13 18:55:09', '2021-03-13 18:55:09'),
(185, 'default', 'Account signed-in', 46, 'App\\User', 46, 'App\\User', '{\"name\":\"rakibmia\",\"by\":\"rakibmia\"}', '2021-03-13 18:55:17', '2021-03-13 18:55:17'),
(186, 'default', 'Account signed-out', 46, 'App\\User', 46, 'App\\User', '{\"name\":\"rakibmia\",\"by\":\"rakibmia\"}', '2021-03-13 18:55:33', '2021-03-13 18:55:33'),
(187, 'default', 'Account was registered', 47, 'App\\User', 47, 'App\\User', '{\"name\":\"turzo\",\"by\":\"turzo\"}', '2021-03-13 18:55:58', '2021-03-13 18:55:58'),
(188, 'default', 'Account signed-in', 47, 'App\\User', 47, 'App\\User', '{\"name\":\"turzo\",\"by\":\"turzo\"}', '2021-03-13 18:55:58', '2021-03-13 18:55:58'),
(189, 'default', 'User was created', 48, 'App\\User', 47, 'App\\User', '{\"name\":\"mohona@gmail.com\",\"by\":\"turzo\"}', '2021-03-13 18:56:46', '2021-03-13 18:56:46'),
(190, 'default', 'Account signed-in', 44, 'App\\User', 44, 'App\\User', '{\"name\":\"Company2\",\"by\":\"Company2\"}', '2021-03-13 19:01:02', '2021-03-13 19:01:02'),
(191, 'default', 'Account signed-out', 44, 'App\\User', 44, 'App\\User', '{\"name\":\"Company2\",\"by\":\"Company2\"}', '2021-03-13 19:45:28', '2021-03-13 19:45:28'),
(192, 'default', 'Account signed-in', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-03-13 19:46:00', '2021-03-13 19:46:00'),
(193, 'default', 'Account signed-out', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-03-13 19:51:24', '2021-03-13 19:51:24'),
(194, 'default', 'Account signed-in', 42, 'App\\User', 42, 'App\\User', '{\"name\":\"testinguser\",\"by\":\"testinguser\"}', '2021-03-13 19:51:40', '2021-03-13 19:51:40'),
(195, 'default', 'Account signed-out', 42, 'App\\User', 42, 'App\\User', '{\"name\":\"testinguser\",\"by\":\"testinguser\"}', '2021-03-13 19:52:06', '2021-03-13 19:52:06'),
(196, 'default', 'Account signed-in', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-03-13 19:52:27', '2021-03-13 19:52:27'),
(197, 'default', 'Account signed-in', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-03-14 15:50:23', '2021-03-14 15:50:23'),
(198, 'default', 'Account signed-in', 41, 'App\\User', 41, 'App\\User', '{\"name\":\"konockreza\",\"by\":\"konockreza\"}', '2021-03-14 16:17:25', '2021-03-14 16:17:25'),
(199, 'default', 'Account signed-out', 41, 'App\\User', 41, 'App\\User', '{\"name\":\"konockreza\",\"by\":\"konockreza\"}', '2021-03-14 17:49:36', '2021-03-14 17:49:36'),
(200, 'default', 'Account signed-in', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-03-14 18:05:42', '2021-03-14 18:05:42'),
(201, 'default', 'Account signed-out', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-03-14 18:07:02', '2021-03-14 18:07:02'),
(202, 'default', 'Account signed-in', 41, 'App\\User', 41, 'App\\User', '{\"name\":\"konockreza\",\"by\":\"konockreza\"}', '2021-03-14 18:07:12', '2021-03-14 18:07:12'),
(203, 'default', 'Account signed-out', 41, 'App\\User', 41, 'App\\User', '{\"name\":\"konockreza\",\"by\":\"konockreza\"}', '2021-03-14 20:03:29', '2021-03-14 20:03:29'),
(204, 'default', 'Account signed-in', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-03-14 20:05:37', '2021-03-14 20:05:37'),
(205, 'default', 'Account signed-out', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-03-14 20:06:32', '2021-03-14 20:06:32'),
(206, 'default', 'Account signed-in', 41, 'App\\User', 41, 'App\\User', '{\"name\":\"konockreza\",\"by\":\"konockreza\"}', '2021-03-14 20:06:49', '2021-03-14 20:06:49'),
(207, 'default', 'Account signed-in', 42, 'App\\User', 42, 'App\\User', '{\"name\":\"testinguser\",\"by\":\"testinguser\"}', '2021-03-14 20:08:04', '2021-03-14 20:08:04'),
(208, 'default', 'Account signed-in', 1, 'App\\User', 1, 'App\\User', '{\"name\":\"admin\",\"by\":\"admin\"}', '2021-03-14 20:10:52', '2021-03-14 20:10:52'),
(209, 'default', 'User was created', 49, 'App\\User', 1, 'App\\User', '{\"name\":\"azerty\",\"by\":\"admin\"}', '2021-03-14 20:11:46', '2021-03-14 20:11:46'),
(210, 'default', 'Account signed-out', 1, 'App\\User', 1, 'App\\User', '{\"name\":\"admin\",\"by\":\"admin\"}', '2021-03-14 20:11:53', '2021-03-14 20:11:53'),
(211, 'default', 'Account signed-in', 49, 'App\\User', 49, 'App\\User', '{\"name\":\"azerty\",\"by\":\"azerty\"}', '2021-03-14 20:12:08', '2021-03-14 20:12:08'),
(212, 'default', 'User was created', 50, 'App\\User', 49, 'App\\User', '{\"name\":\"qwerty@demo.com\",\"by\":\"azerty\"}', '2021-03-14 20:12:55', '2021-03-14 20:12:55'),
(213, 'default', 'Account signed-in', 49, 'App\\User', 49, 'App\\User', '{\"name\":\"azerty\",\"by\":\"azerty\"}', '2021-03-14 20:21:12', '2021-03-14 20:21:12'),
(214, 'default', 'Account signed-out', 49, 'App\\User', 49, 'App\\User', '{\"name\":\"azerty\",\"by\":\"azerty\"}', '2021-03-14 20:22:59', '2021-03-14 20:22:59'),
(215, 'default', 'Account signed-in', 50, 'App\\User', 50, 'App\\User', '{\"name\":\"qwertyqq\",\"by\":\"qwertyqq\"}', '2021-03-14 20:25:06', '2021-03-14 20:25:06'),
(216, 'default', 'Account signed-out', 49, 'App\\User', 49, 'App\\User', '{\"name\":\"azerty\",\"by\":\"azerty\"}', '2021-03-14 20:32:37', '2021-03-14 20:32:37'),
(217, 'default', 'Account signed-in', 50, 'App\\User', 50, 'App\\User', '{\"name\":\"qwertyqq\",\"by\":\"qwertyqq\"}', '2021-03-14 20:32:55', '2021-03-14 20:32:55'),
(218, 'default', 'Account signed-out', 50, 'App\\User', 50, 'App\\User', '{\"name\":\"qwertyqq\",\"by\":\"qwertyqq\"}', '2021-03-14 20:34:22', '2021-03-14 20:34:22'),
(219, 'default', 'Account signed-in', 49, 'App\\User', 49, 'App\\User', '{\"name\":\"azerty\",\"by\":\"azerty\"}', '2021-03-14 20:34:39', '2021-03-14 20:34:39'),
(220, 'default', 'Account signed-in', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-03-15 15:54:36', '2021-03-15 15:54:36'),
(221, 'default', 'Account signed-in', 46, 'App\\User', 46, 'App\\User', '{\"name\":\"rakibmia\",\"by\":\"rakibmia\"}', '2021-03-15 16:11:14', '2021-03-15 16:11:14'),
(222, 'default', 'Account signed-out', 46, 'App\\User', 46, 'App\\User', '{\"name\":\"rakibmia\",\"by\":\"rakibmia\"}', '2021-03-15 16:43:49', '2021-03-15 16:43:49'),
(223, 'default', 'Account signed-in', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-03-15 16:43:58', '2021-03-15 16:43:58'),
(224, 'default', 'Account signed-in', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-03-15 18:58:26', '2021-03-15 18:58:26'),
(225, 'default', 'Account signed-out', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-03-15 19:01:12', '2021-03-15 19:01:12'),
(226, 'default', 'Account signed-in', 50, 'App\\User', 50, 'App\\User', '{\"name\":\"qwertyqq\",\"by\":\"qwertyqq\"}', '2021-03-15 19:01:28', '2021-03-15 19:01:28'),
(227, 'default', 'Account signed-out', 50, 'App\\User', 50, 'App\\User', '{\"name\":\"qwertyqq\",\"by\":\"qwertyqq\"}', '2021-03-15 19:02:10', '2021-03-15 19:02:10'),
(228, 'default', 'Account signed-in', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-03-15 19:02:15', '2021-03-15 19:02:15'),
(229, 'default', 'Account signed-in', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-03-16 06:24:41', '2021-03-16 06:24:41'),
(230, 'default', 'Account signed-in', 1, 'App\\User', 1, 'App\\User', '{\"name\":\"admin\",\"by\":\"admin\"}', '2021-03-16 08:01:02', '2021-03-16 08:01:02'),
(231, 'default', 'Account signed-out', 1, 'App\\User', 1, 'App\\User', '{\"name\":\"admin\",\"by\":\"admin\"}', '2021-03-16 08:01:17', '2021-03-16 08:01:17'),
(232, 'default', 'Account signed-in', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-03-16 08:01:37', '2021-03-16 08:01:37'),
(233, 'default', 'Account signed-in', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-03-16 08:04:08', '2021-03-16 08:04:08'),
(234, 'default', 'Account signed-in', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-03-16 18:47:11', '2021-03-16 18:47:11'),
(235, 'default', 'Account signed-in', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-03-18 14:58:34', '2021-03-18 14:58:34'),
(236, 'default', 'Account signed-in', 1, 'App\\User', 1, 'App\\User', '{\"name\":\"admin\",\"by\":\"admin\"}', '2021-03-19 12:08:08', '2021-03-19 12:08:08'),
(237, 'default', 'User login details updated', 2, 'App\\User', 1, 'App\\User', '{\"name\":\"company1\",\"by\":\"admin\"}', '2021-03-19 12:12:20', '2021-03-19 12:12:20'),
(238, 'default', 'Account signed-out', 1, 'App\\User', 1, 'App\\User', '{\"name\":\"admin\",\"by\":\"admin\"}', '2021-03-19 12:12:32', '2021-03-19 12:12:32'),
(239, 'default', 'Account signed-in', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-03-19 12:12:41', '2021-03-19 12:12:41'),
(240, 'default', 'Account signed-in', 1, 'App\\User', 1, 'App\\User', '{\"name\":\"admin\",\"by\":\"admin\"}', '2021-03-20 09:11:11', '2021-03-20 09:11:11'),
(241, 'default', 'User login details updated', 2, 'App\\User', 1, 'App\\User', '{\"name\":\"company1\",\"by\":\"admin\"}', '2021-03-20 09:11:37', '2021-03-20 09:11:37'),
(242, 'default', 'Account signed-out', 1, 'App\\User', 1, 'App\\User', '{\"name\":\"admin\",\"by\":\"admin\"}', '2021-03-20 09:11:42', '2021-03-20 09:11:42'),
(243, 'default', 'Account signed-in', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-03-20 09:11:48', '2021-03-20 09:11:48'),
(244, 'default', 'Account signed-in', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-03-21 08:26:59', '2021-03-21 08:26:59'),
(245, 'default', 'Account signed-out', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-03-21 08:38:04', '2021-03-21 08:38:04'),
(246, 'default', 'Account signed-in', 42, 'App\\User', 42, 'App\\User', '{\"name\":\"testinguser\",\"by\":\"testinguser\"}', '2021-03-21 08:38:13', '2021-03-21 08:38:13'),
(247, 'default', 'Account signed-in', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-03-21 16:13:13', '2021-03-21 16:13:13'),
(248, 'default', 'Account signed-in', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-03-21 18:14:51', '2021-03-21 18:14:51'),
(249, 'default', 'Account signed-in', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-03-22 01:30:50', '2021-03-22 01:30:50'),
(250, 'default', 'Account signed-in', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-03-22 11:54:54', '2021-03-22 11:54:54'),
(251, 'default', 'Account signed-in', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-03-22 16:18:05', '2021-03-22 16:18:05'),
(252, 'default', 'Account signed-in', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-03-22 16:21:59', '2021-03-22 16:21:59'),
(253, 'default', 'Account signed-out', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-03-22 16:25:40', '2021-03-22 16:25:40'),
(254, 'default', 'Account signed-in', 42, 'App\\User', 42, 'App\\User', '{\"name\":\"testinguser\",\"by\":\"testinguser\"}', '2021-03-22 16:25:51', '2021-03-22 16:25:51'),
(255, 'default', 'Account signed-out', 42, 'App\\User', 42, 'App\\User', '{\"name\":\"testinguser\",\"by\":\"testinguser\"}', '2021-03-22 16:31:33', '2021-03-22 16:31:33'),
(256, 'default', 'Account signed-in', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-03-22 16:31:36', '2021-03-22 16:31:36'),
(257, 'default', 'Account signed-in', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-03-22 16:41:59', '2021-03-22 16:41:59'),
(258, 'default', 'Account signed-in', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-03-22 16:51:09', '2021-03-22 16:51:09'),
(259, 'default', 'Account signed-in', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-03-22 17:01:57', '2021-03-22 17:01:57'),
(260, 'default', 'Account signed-out', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-03-22 17:16:15', '2021-03-22 17:16:15'),
(261, 'default', 'Account signed-in', 41, 'App\\User', 41, 'App\\User', '{\"name\":\"konockreza\",\"by\":\"konockreza\"}', '2021-03-22 17:16:27', '2021-03-22 17:16:27'),
(262, 'default', 'Account signed-in', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-03-22 17:17:18', '2021-03-22 17:17:18'),
(263, 'default', 'Account signed-out', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-03-22 17:18:30', '2021-03-22 17:18:30'),
(264, 'default', 'Account signed-in', 42, 'App\\User', 42, 'App\\User', '{\"name\":\"testinguser\",\"by\":\"testinguser\"}', '2021-03-22 17:18:36', '2021-03-22 17:18:36'),
(265, 'default', 'Account signed-out', 42, 'App\\User', 42, 'App\\User', '{\"name\":\"testinguser\",\"by\":\"testinguser\"}', '2021-03-22 17:19:13', '2021-03-22 17:19:13'),
(266, 'default', 'Account signed-in', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-03-22 17:19:43', '2021-03-22 17:19:43'),
(267, 'default', 'Account signed-in', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-03-22 18:26:42', '2021-03-22 18:26:42'),
(268, 'default', 'Account signed-in', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-03-22 19:04:34', '2021-03-22 19:04:34'),
(269, 'default', 'Account signed-in', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-03-22 19:18:12', '2021-03-22 19:18:12'),
(270, 'default', 'Account signed-in', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-03-22 19:25:26', '2021-03-22 19:25:26'),
(271, 'default', 'Account signed-in', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-03-23 05:15:34', '2021-03-23 05:15:34'),
(272, 'default', 'Account signed-in', 41, 'App\\User', 41, 'App\\User', '{\"name\":\"konockreza\",\"by\":\"konockreza\"}', '2021-03-23 05:19:07', '2021-03-23 05:19:07'),
(273, 'default', 'Account signed-in', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-03-23 06:21:00', '2021-03-23 06:21:00'),
(274, 'default', 'Account signed-in', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-03-23 06:21:37', '2021-03-23 06:21:37'),
(275, 'default', 'Account signed-in', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-03-23 07:34:18', '2021-03-23 07:34:18'),
(276, 'default', 'Account signed-out', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-03-23 08:25:58', '2021-03-23 08:25:58'),
(277, 'default', 'Account signed-in', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-03-23 08:26:05', '2021-03-23 08:26:05'),
(278, 'default', 'Account signed-out', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-03-23 08:54:44', '2021-03-23 08:54:44'),
(279, 'default', 'Account signed-in', 1, 'App\\User', 1, 'App\\User', '{\"name\":\"admin\",\"by\":\"admin\"}', '2021-03-23 08:54:48', '2021-03-23 08:54:48'),
(280, 'default', 'Account signed-in', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-03-23 09:15:24', '2021-03-23 09:15:24'),
(281, 'default', 'Account signed-out', 1, 'App\\User', 1, 'App\\User', '{\"name\":\"admin\",\"by\":\"admin\"}', '2021-03-23 09:33:18', '2021-03-23 09:33:18'),
(282, 'default', 'Account signed-in', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-03-23 09:33:31', '2021-03-23 09:33:31'),
(283, 'default', 'Account signed-out', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-03-23 09:46:19', '2021-03-23 09:46:19'),
(284, 'default', 'Account signed-in', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-03-23 10:06:17', '2021-03-23 10:06:17'),
(285, 'default', 'Account signed-in', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-03-23 10:13:08', '2021-03-23 10:13:08'),
(286, 'default', 'Account signed-out', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-03-23 10:28:19', '2021-03-23 10:28:19'),
(287, 'default', 'Account signed-in', 42, 'App\\User', 42, 'App\\User', '{\"name\":\"testinguser\",\"by\":\"testinguser\"}', '2021-03-23 10:28:23', '2021-03-23 10:28:23'),
(288, 'default', 'Account signed-out', 42, 'App\\User', 42, 'App\\User', '{\"name\":\"testinguser\",\"by\":\"testinguser\"}', '2021-03-23 10:29:10', '2021-03-23 10:29:10'),
(289, 'default', 'Account signed-in', 41, 'App\\User', 41, 'App\\User', '{\"name\":\"konockreza\",\"by\":\"konockreza\"}', '2021-03-23 10:29:32', '2021-03-23 10:29:32'),
(290, 'default', 'Account signed-out', 41, 'App\\User', 41, 'App\\User', '{\"name\":\"konockreza\",\"by\":\"konockreza\"}', '2021-03-23 10:31:25', '2021-03-23 10:31:25'),
(291, 'default', 'Account signed-in', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-03-23 10:31:28', '2021-03-23 10:31:28'),
(292, 'default', 'Account signed-out', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-03-23 10:34:56', '2021-03-23 10:34:56'),
(293, 'default', 'Account signed-in', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-03-23 10:34:59', '2021-03-23 10:34:59'),
(294, 'default', 'Account signed-in', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-03-23 10:44:16', '2021-03-23 10:44:16'),
(295, 'default', 'Account signed-out', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-03-23 10:47:43', '2021-03-23 10:47:43'),
(296, 'default', 'Account signed-in', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-03-23 10:48:03', '2021-03-23 10:48:03'),
(297, 'default', 'Account signed-out', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-03-23 10:48:31', '2021-03-23 10:48:31'),
(298, 'default', 'Account signed-in', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-03-23 10:48:33', '2021-03-23 10:48:33'),
(299, 'default', 'Account signed-out', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-03-23 10:48:43', '2021-03-23 10:48:43'),
(300, 'default', 'Account signed-in', 42, 'App\\User', 42, 'App\\User', '{\"name\":\"testinguser\",\"by\":\"testinguser\"}', '2021-03-23 10:48:47', '2021-03-23 10:48:47'),
(301, 'default', 'Account signed-in', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-03-23 10:50:11', '2021-03-23 10:50:11'),
(302, 'default', 'Account signed-out', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-03-23 10:50:31', '2021-03-23 10:50:31'),
(303, 'default', 'Account signed-in', 42, 'App\\User', 42, 'App\\User', '{\"name\":\"testinguser\",\"by\":\"testinguser\"}', '2021-03-23 10:50:34', '2021-03-23 10:50:34'),
(304, 'default', 'Account signed-out', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-03-23 10:56:53', '2021-03-23 10:56:53'),
(305, 'default', 'Account signed-in', 41, 'App\\User', 41, 'App\\User', '{\"name\":\"konockreza\",\"by\":\"konockreza\"}', '2021-03-23 10:57:00', '2021-03-23 10:57:00'),
(306, 'default', 'Account signed-in', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-03-23 16:05:44', '2021-03-23 16:05:44'),
(307, 'default', 'Account signed-in', 41, 'App\\User', 41, 'App\\User', '{\"name\":\"konockreza\",\"by\":\"konockreza\"}', '2021-03-23 16:10:34', '2021-03-23 16:10:34'),
(308, 'default', 'Account signed-in', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-03-23 16:11:18', '2021-03-23 16:11:18');
INSERT INTO `activity_log` (`id`, `log_name`, `description`, `subject_id`, `subject_type`, `causer_id`, `causer_type`, `properties`, `created_at`, `updated_at`) VALUES
(309, 'default', 'Account signed-out', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-03-23 16:18:43', '2021-03-23 16:18:43'),
(310, 'default', 'Account signed-in', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-03-23 16:19:01', '2021-03-23 16:19:01'),
(311, 'default', 'Account signed-in', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-03-23 16:19:10', '2021-03-23 16:19:10'),
(312, 'default', 'Account signed-out', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-03-23 16:19:43', '2021-03-23 16:19:43'),
(313, 'default', 'Account signed-in', 42, 'App\\User', 42, 'App\\User', '{\"name\":\"testinguser\",\"by\":\"testinguser\"}', '2021-03-23 16:19:47', '2021-03-23 16:19:47'),
(314, 'default', 'Account signed-out', 41, 'App\\User', 41, 'App\\User', '{\"name\":\"konockreza\",\"by\":\"konockreza\"}', '2021-03-23 16:21:39', '2021-03-23 16:21:39'),
(315, 'default', 'Account signed-in', 41, 'App\\User', 41, 'App\\User', '{\"name\":\"konockreza\",\"by\":\"konockreza\"}', '2021-03-23 16:22:07', '2021-03-23 16:22:07'),
(316, 'default', 'Account signed-out', 42, 'App\\User', 42, 'App\\User', '{\"name\":\"testinguser\",\"by\":\"testinguser\"}', '2021-03-23 16:23:14', '2021-03-23 16:23:14'),
(317, 'default', 'Account signed-in', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-03-23 16:23:18', '2021-03-23 16:23:18'),
(318, 'default', 'Account signed-out', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-03-23 16:27:46', '2021-03-23 16:27:46'),
(319, 'default', 'Account signed-in', 42, 'App\\User', 42, 'App\\User', '{\"name\":\"testinguser\",\"by\":\"testinguser\"}', '2021-03-23 16:28:16', '2021-03-23 16:28:16'),
(320, 'default', 'Account signed-out', 41, 'App\\User', 41, 'App\\User', '{\"name\":\"konockreza\",\"by\":\"konockreza\"}', '2021-03-23 16:28:29', '2021-03-23 16:28:29'),
(321, 'default', 'Account signed-in', 42, 'App\\User', 42, 'App\\User', '{\"name\":\"testinguser\",\"by\":\"testinguser\"}', '2021-03-23 16:28:39', '2021-03-23 16:28:39'),
(322, 'default', 'Account signed-in', 42, 'App\\User', 42, 'App\\User', '{\"name\":\"testinguser\",\"by\":\"testinguser\"}', '2021-03-23 16:29:15', '2021-03-23 16:29:15'),
(323, 'default', 'Account signed-out', 42, 'App\\User', 42, 'App\\User', '{\"name\":\"testinguser\",\"by\":\"testinguser\"}', '2021-03-23 16:39:53', '2021-03-23 16:39:53'),
(324, 'default', 'Account signed-in', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-03-23 16:39:57', '2021-03-23 16:39:57'),
(325, 'default', 'Account signed-out', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-03-23 16:41:35', '2021-03-23 16:41:35'),
(326, 'default', 'Account signed-in', 42, 'App\\User', 42, 'App\\User', '{\"name\":\"testinguser\",\"by\":\"testinguser\"}', '2021-03-23 16:41:41', '2021-03-23 16:41:41'),
(327, 'default', 'Account signed-in', 42, 'App\\User', 42, 'App\\User', '{\"name\":\"testinguser\",\"by\":\"testinguser\"}', '2021-03-23 16:43:29', '2021-03-23 16:43:29'),
(328, 'default', 'Account signed-in', 42, 'App\\User', 42, 'App\\User', '{\"name\":\"testinguser\",\"by\":\"testinguser\"}', '2021-03-23 17:16:35', '2021-03-23 17:16:35'),
(329, 'default', 'Account signed-in', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-03-24 16:18:40', '2021-03-24 16:18:40'),
(330, 'default', 'Account signed-in', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-03-24 19:14:57', '2021-03-24 19:14:57'),
(331, 'default', 'Account signed-in', 1, 'App\\User', 1, 'App\\User', '{\"name\":\"admin\",\"by\":\"admin\"}', '2021-03-25 07:10:10', '2021-03-25 07:10:10'),
(332, 'default', 'Account signed-out', 1, 'App\\User', 1, 'App\\User', '{\"name\":\"admin\",\"by\":\"admin\"}', '2021-03-25 07:32:10', '2021-03-25 07:32:10'),
(333, 'default', 'Account signed-in', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-03-25 07:32:13', '2021-03-25 07:32:13'),
(334, 'default', 'Account signed-out', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-03-25 07:37:11', '2021-03-25 07:37:11'),
(335, 'default', 'Account signed-in', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-03-25 07:37:14', '2021-03-25 07:37:14'),
(336, 'default', 'Account signed-out', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-03-25 07:37:17', '2021-03-25 07:37:17'),
(337, 'default', 'Account signed-in', 1, 'App\\User', 1, 'App\\User', '{\"name\":\"admin\",\"by\":\"admin\"}', '2021-03-25 07:37:21', '2021-03-25 07:37:21'),
(338, 'default', 'Permission assigned to Role was', 2, 'Spatie\\Permission\\Models\\Role', 1, 'App\\User', '{\"name\":\"users\",\"by\":\"admin\"}', '2021-03-25 09:05:47', '2021-03-25 09:05:47'),
(339, 'default', 'Account signed-out', 1, 'App\\User', 1, 'App\\User', '{\"name\":\"admin\",\"by\":\"admin\"}', '2021-03-25 09:05:51', '2021-03-25 09:05:51'),
(340, 'default', 'Account signed-in', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-03-25 09:05:54', '2021-03-25 09:05:54'),
(341, 'default', 'Account signed-out', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-03-25 09:06:01', '2021-03-25 09:06:01'),
(342, 'default', 'Account signed-in', 1, 'App\\User', 1, 'App\\User', '{\"name\":\"admin\",\"by\":\"admin\"}', '2021-03-25 09:06:05', '2021-03-25 09:06:05'),
(343, 'default', 'Account signed-out', 1, 'App\\User', 1, 'App\\User', '{\"name\":\"admin\",\"by\":\"admin\"}', '2021-03-25 09:09:54', '2021-03-25 09:09:54'),
(344, 'default', 'Account signed-in', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-03-25 09:09:57', '2021-03-25 09:09:57'),
(345, 'default', 'Account signed-out', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-03-25 09:10:51', '2021-03-25 09:10:51'),
(346, 'default', 'Account signed-in', 1, 'App\\User', 1, 'App\\User', '{\"name\":\"admin\",\"by\":\"admin\"}', '2021-03-25 09:10:55', '2021-03-25 09:10:55'),
(347, 'default', 'Permission assigned to Role was', 2, 'Spatie\\Permission\\Models\\Role', 1, 'App\\User', '{\"name\":\"users\",\"by\":\"admin\"}', '2021-03-25 09:11:21', '2021-03-25 09:11:21'),
(348, 'default', 'Permission was created', 7, 'Spatie\\Permission\\Models\\Permission', 1, 'App\\User', '{\"name\":\"crud-builder\",\"by\":\"admin\"}', '2021-03-25 09:43:20', '2021-03-25 09:43:20'),
(349, 'default', 'Permission assigned to Role was', 2, 'Spatie\\Permission\\Models\\Role', 1, 'App\\User', '{\"name\":\"users\",\"by\":\"admin\"}', '2021-03-25 09:44:22', '2021-03-25 09:44:22'),
(350, 'default', 'Account signed-out', 1, 'App\\User', 1, 'App\\User', '{\"name\":\"admin\",\"by\":\"admin\"}', '2021-03-25 09:44:33', '2021-03-25 09:44:33'),
(351, 'default', 'Account signed-in', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-03-25 09:44:36', '2021-03-25 09:44:36'),
(352, 'default', 'Account signed-out', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-03-25 10:12:16', '2021-03-25 10:12:16'),
(353, 'default', 'Account signed-in', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-03-25 10:12:22', '2021-03-25 10:12:22'),
(354, 'default', 'Account signed-out', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-03-25 10:12:25', '2021-03-25 10:12:25'),
(355, 'default', 'Account signed-in', 1, 'App\\User', 1, 'App\\User', '{\"name\":\"admin\",\"by\":\"admin\"}', '2021-03-25 10:12:27', '2021-03-25 10:12:27'),
(356, 'default', 'Account signed-out', 1, 'App\\User', 1, 'App\\User', '{\"name\":\"admin\",\"by\":\"admin\"}', '2021-03-25 10:21:01', '2021-03-25 10:21:01'),
(357, 'default', 'Account signed-in', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-03-25 10:21:05', '2021-03-25 10:21:05'),
(358, 'default', 'Account signed-out', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-03-25 10:22:50', '2021-03-25 10:22:50'),
(359, 'default', 'Account signed-in', 1, 'App\\User', 1, 'App\\User', '{\"name\":\"admin\",\"by\":\"admin\"}', '2021-03-25 10:22:52', '2021-03-25 10:22:52'),
(360, 'default', 'Account signed-out', 1, 'App\\User', 1, 'App\\User', '{\"name\":\"admin\",\"by\":\"admin\"}', '2021-03-25 10:56:53', '2021-03-25 10:56:53'),
(361, 'default', 'Account signed-in', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-03-25 10:56:57', '2021-03-25 10:56:57'),
(362, 'default', 'Account signed-out', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-03-25 10:57:49', '2021-03-25 10:57:49'),
(363, 'default', 'Account signed-in', 1, 'App\\User', 1, 'App\\User', '{\"name\":\"admin\",\"by\":\"admin\"}', '2021-03-25 10:57:52', '2021-03-25 10:57:52'),
(364, 'default', 'Account signed-out', 1, 'App\\User', 1, 'App\\User', '{\"name\":\"admin\",\"by\":\"admin\"}', '2021-03-25 13:16:46', '2021-03-25 13:16:46'),
(365, 'default', 'Account signed-in', 1, 'App\\User', 1, 'App\\User', '{\"name\":\"admin\",\"by\":\"admin\"}', '2021-03-25 13:16:50', '2021-03-25 13:16:50'),
(366, 'default', 'Account signed-out', 1, 'App\\User', 1, 'App\\User', '{\"name\":\"admin\",\"by\":\"admin\"}', '2021-03-25 13:19:48', '2021-03-25 13:19:48'),
(367, 'default', 'Account signed-in', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-03-25 13:19:51', '2021-03-25 13:19:51'),
(368, 'default', 'Account signed-out', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-03-25 13:22:31', '2021-03-25 13:22:31'),
(369, 'default', 'Account signed-in', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-03-25 13:22:33', '2021-03-25 13:22:33'),
(370, 'default', 'Account signed-in', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-03-25 13:22:59', '2021-03-25 13:22:59'),
(371, 'default', 'Account signed-in', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-03-25 13:27:55', '2021-03-25 13:27:55'),
(372, 'default', 'Account signed-in', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-03-25 18:39:27', '2021-03-25 18:39:27'),
(373, 'default', 'Account signed-in', 1, 'App\\User', 1, 'App\\User', '{\"name\":\"admin\",\"by\":\"admin\"}', '2021-03-26 19:34:43', '2021-03-26 19:34:43'),
(374, 'default', 'Account was registered', 51, 'App\\User', 51, 'App\\User', '{\"name\":\"New company\",\"by\":\"New company\"}', '2021-03-27 06:01:29', '2021-03-27 06:01:29'),
(375, 'default', 'Account signed-in', 51, 'App\\User', 51, 'App\\User', '{\"name\":\"New company\",\"by\":\"New company\"}', '2021-03-27 06:01:29', '2021-03-27 06:01:29'),
(376, 'default', 'Account signed-out', 51, 'App\\User', 51, 'App\\User', '{\"name\":\"New company\",\"by\":\"New company\"}', '2021-03-27 06:35:01', '2021-03-27 06:35:01'),
(377, 'default', 'Account was registered', 52, 'App\\User', 52, 'App\\User', '{\"name\":\"Encoder Ultimate\",\"by\":\"Encoder Ultimate\"}', '2021-03-27 06:49:52', '2021-03-27 06:49:52'),
(378, 'default', 'Account signed-in', 52, 'App\\User', 52, 'App\\User', '{\"name\":\"Encoder Ultimate\",\"by\":\"Encoder Ultimate\"}', '2021-03-27 06:49:52', '2021-03-27 06:49:52'),
(379, 'default', 'Account signed-out', 52, 'App\\User', 52, 'App\\User', '{\"name\":\"Encoder Ultimate\",\"by\":\"Encoder Ultimate\"}', '2021-03-27 06:49:57', '2021-03-27 06:49:57'),
(380, 'default', 'Account signed-in', 52, 'App\\User', 52, 'App\\User', '{\"name\":\"Encoder Ultimate\",\"by\":\"Encoder Ultimate\"}', '2021-03-27 06:50:05', '2021-03-27 06:50:05'),
(381, 'default', 'Account signed-out', 52, 'App\\User', 52, 'App\\User', '{\"name\":\"Encoder Ultimate\",\"by\":\"Encoder Ultimate\"}', '2021-03-27 06:51:18', '2021-03-27 06:51:18'),
(382, 'default', 'Account signed-in', 1, 'App\\User', 1, 'App\\User', '{\"name\":\"admin\",\"by\":\"admin\"}', '2021-03-27 06:51:28', '2021-03-27 06:51:28'),
(383, 'default', 'Account signed-in', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-03-27 07:05:52', '2021-03-27 07:05:52'),
(384, 'default', 'Account signed-in', 1, 'App\\User', 1, 'App\\User', '{\"name\":\"admin\",\"by\":\"admin\"}', '2021-03-27 07:22:49', '2021-03-27 07:22:49'),
(385, 'default', 'Account signed-out', 1, 'App\\User', 1, 'App\\User', '{\"name\":\"admin\",\"by\":\"admin\"}', '2021-03-27 07:22:59', '2021-03-27 07:22:59'),
(386, 'default', 'Account was registered', 53, 'App\\User', 53, 'App\\User', '{\"name\":\"Tarte\",\"by\":\"Tarte\"}', '2021-03-27 07:24:41', '2021-03-27 07:24:41'),
(387, 'default', 'Account signed-in', 53, 'App\\User', 53, 'App\\User', '{\"name\":\"Tarte\",\"by\":\"Tarte\"}', '2021-03-27 07:24:41', '2021-03-27 07:24:41'),
(388, 'default', 'Account signed-out', 53, 'App\\User', 53, 'App\\User', '{\"name\":\"Tarte\",\"by\":\"Tarte\"}', '2021-03-27 07:24:49', '2021-03-27 07:24:49'),
(389, 'default', 'Account signed-out', 1, 'App\\User', 1, 'App\\User', '{\"name\":\"admin\",\"by\":\"admin\"}', '2021-03-27 07:26:48', '2021-03-27 07:26:48'),
(390, 'default', 'Account was registered', 54, 'App\\User', 54, 'App\\User', '{\"name\":\"Encoder Ultimate\",\"by\":\"Encoder Ultimate\"}', '2021-03-27 08:03:27', '2021-03-27 08:03:27'),
(391, 'default', 'Account signed-in', 54, 'App\\User', 54, 'App\\User', '{\"name\":\"Encoder Ultimate\",\"by\":\"Encoder Ultimate\"}', '2021-03-27 08:03:27', '2021-03-27 08:03:27'),
(392, 'default', 'Account signed-out', 54, 'App\\User', 54, 'App\\User', '{\"name\":\"Encoder Ultimate\",\"by\":\"Encoder Ultimate\"}', '2021-03-27 08:03:32', '2021-03-27 08:03:32'),
(393, 'default', 'Account signed-in', 54, 'App\\User', 54, 'App\\User', '{\"name\":\"Encoder Ultimate\",\"by\":\"Encoder Ultimate\"}', '2021-03-27 08:03:42', '2021-03-27 08:03:42'),
(394, 'default', 'Account signed-in', 1, 'App\\User', 1, 'App\\User', '{\"name\":\"admin\",\"by\":\"admin\"}', '2021-03-27 10:19:01', '2021-03-27 10:19:01'),
(395, 'default', 'Account signed-in', 1, 'App\\User', 1, 'App\\User', '{\"name\":\"admin\",\"by\":\"admin\"}', '2021-03-28 01:52:16', '2021-03-28 01:52:16'),
(396, 'default', 'Account signed-out', 47, 'App\\User', 47, 'App\\User', '{\"name\":\"turzo\",\"by\":\"turzo\"}', '2021-03-28 01:52:42', '2021-03-28 01:52:42'),
(397, 'default', 'Account signed-in', 1, 'App\\User', 1, 'App\\User', '{\"name\":\"admin\",\"by\":\"admin\"}', '2021-03-28 01:52:51', '2021-03-28 01:52:51'),
(398, 'default', 'User was deleted', 42, 'App\\User', 1, 'App\\User', '{\"name\":\"testinguser\",\"by\":\"admin\"}', '2021-03-28 01:53:07', '2021-03-28 01:53:07'),
(399, 'default', 'User was deleted', 47, 'App\\User', 1, 'App\\User', '{\"name\":\"turzo\",\"by\":\"admin\"}', '2021-03-28 01:53:15', '2021-03-28 01:53:15'),
(400, 'default', 'Role was created', 4, 'Spatie\\Permission\\Models\\Role', 1, 'App\\User', '{\"name\":\"test\",\"by\":\"admin\"}', '2021-03-28 04:08:56', '2021-03-28 04:08:56'),
(401, 'default', 'Role was deleted', 4, 'Spatie\\Permission\\Models\\Role', 1, 'App\\User', '{\"name\":\"test\",\"by\":\"admin\"}', '2021-03-28 04:09:05', '2021-03-28 04:09:05'),
(402, 'default', 'Account signed-in', 1, 'App\\User', 1, 'App\\User', '{\"name\":\"admin\",\"by\":\"admin\"}', '2021-03-28 06:35:28', '2021-03-28 06:35:28'),
(403, 'default', 'Account signed-out', 1, 'App\\User', 1, 'App\\User', '{\"name\":\"admin\",\"by\":\"admin\"}', '2021-03-28 06:46:42', '2021-03-28 06:46:42'),
(404, 'default', 'Account signed-in', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-03-28 06:46:48', '2021-03-28 06:46:48'),
(405, 'default', 'Account signed-in', 1, 'App\\User', 1, 'App\\User', '{\"name\":\"admin\",\"by\":\"admin\"}', '2021-03-29 01:26:00', '2021-03-29 01:26:00'),
(406, 'default', 'Account signed-in', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-03-29 07:04:14', '2021-03-29 07:04:14'),
(407, 'default', 'Account signed-out', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-03-29 07:04:35', '2021-03-29 07:04:35'),
(408, 'default', 'Account signed-in', 1, 'App\\User', 1, 'App\\User', '{\"name\":\"admin\",\"by\":\"admin\"}', '2021-03-29 07:04:40', '2021-03-29 07:04:40'),
(409, 'default', 'Account signed-in', 1, 'App\\User', 1, 'App\\User', '{\"name\":\"admin\",\"by\":\"admin\"}', '2021-03-29 07:11:49', '2021-03-29 07:11:49'),
(410, 'default', 'Account signed-out', 1, 'App\\User', 1, 'App\\User', '{\"name\":\"admin\",\"by\":\"admin\"}', '2021-03-29 07:13:15', '2021-03-29 07:13:15'),
(411, 'default', 'Account signed-in', 1, 'App\\User', 1, 'App\\User', '{\"name\":\"admin\",\"by\":\"admin\"}', '2021-03-29 07:15:28', '2021-03-29 07:15:28'),
(412, 'default', 'Account signed-out', 1, 'App\\User', 1, 'App\\User', '{\"name\":\"admin\",\"by\":\"admin\"}', '2021-03-29 07:26:38', '2021-03-29 07:26:38'),
(413, 'default', 'Account signed-in', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-03-29 07:26:41', '2021-03-29 07:26:41'),
(414, 'default', 'Account signed-out', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-03-29 07:27:00', '2021-03-29 07:27:00'),
(415, 'default', 'Account signed-in', 1, 'App\\User', 1, 'App\\User', '{\"name\":\"admin\",\"by\":\"admin\"}', '2021-03-29 07:27:04', '2021-03-29 07:27:04'),
(416, 'default', 'Account signed-in', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-03-29 08:44:01', '2021-03-29 08:44:01'),
(417, 'default', 'Account signed-in', 1, 'App\\User', 1, 'App\\User', '{\"name\":\"admin\",\"by\":\"admin\"}', '2021-03-29 11:53:15', '2021-03-29 11:53:15'),
(418, 'default', 'Account signed-in', 1, 'App\\User', 1, 'App\\User', '{\"name\":\"admin\",\"by\":\"admin\"}', '2021-03-29 12:05:34', '2021-03-29 12:05:34'),
(419, 'default', 'Account signed-out', 1, 'App\\User', 1, 'App\\User', '{\"name\":\"admin\",\"by\":\"admin\"}', '2021-03-29 12:06:39', '2021-03-29 12:06:39'),
(420, 'default', 'Account signed-in', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-03-29 12:06:48', '2021-03-29 12:06:48'),
(421, 'default', 'Account was registered', 55, 'App\\User', 55, 'App\\User', '{\"name\":\"papy\",\"by\":\"papy\"}', '2021-03-29 14:28:05', '2021-03-29 14:28:05'),
(422, 'default', 'Account signed-in', 55, 'App\\User', 55, 'App\\User', '{\"name\":\"papy\",\"by\":\"papy\"}', '2021-03-29 14:28:05', '2021-03-29 14:28:05'),
(423, 'default', 'Account signed-out', 55, 'App\\User', 55, 'App\\User', '{\"name\":\"papy\",\"by\":\"papy\"}', '2021-03-29 14:32:55', '2021-03-29 14:32:55'),
(424, 'default', 'Account signed-in', 1, 'App\\User', 1, 'App\\User', '{\"name\":\"admin\",\"by\":\"admin\"}', '2021-03-29 14:32:59', '2021-03-29 14:32:59'),
(425, 'default', 'Account signed-out', 1, 'App\\User', 1, 'App\\User', '{\"name\":\"admin\",\"by\":\"admin\"}', '2021-03-29 14:37:34', '2021-03-29 14:37:34'),
(426, 'default', 'Account signed-in', 55, 'App\\User', 55, 'App\\User', '{\"name\":\"papy\",\"by\":\"papy\"}', '2021-03-29 14:37:46', '2021-03-29 14:37:46'),
(427, 'default', 'User was created', 56, 'App\\User', 55, 'App\\User', '{\"name\":\"gold@demo.com\",\"by\":\"papy\"}', '2021-03-29 14:38:39', '2021-03-29 14:38:39'),
(428, 'default', 'Account signed-in', 56, 'App\\User', 56, 'App\\User', '{\"name\":\"goldgeorge\",\"by\":\"goldgeorge\"}', '2021-03-29 14:39:36', '2021-03-29 14:39:36'),
(429, 'default', 'Account signed-in', 55, 'App\\User', 55, 'App\\User', '{\"name\":\"papy\",\"by\":\"papy\"}', '2021-03-29 14:48:47', '2021-03-29 14:48:47'),
(430, 'default', 'Account signed-out', 56, 'App\\User', 56, 'App\\User', '{\"name\":\"goldgeorge\",\"by\":\"goldgeorge\"}', '2021-03-29 15:14:38', '2021-03-29 15:14:38'),
(431, 'default', 'Account signed-in', 55, 'App\\User', 55, 'App\\User', '{\"name\":\"papy\",\"by\":\"papy\"}', '2021-03-29 15:14:53', '2021-03-29 15:14:53'),
(432, 'default', 'Account signed-out', 55, 'App\\User', 55, 'App\\User', '{\"name\":\"papy\",\"by\":\"papy\"}', '2021-03-29 15:33:22', '2021-03-29 15:33:22'),
(433, 'default', 'Account signed-in', 56, 'App\\User', 56, 'App\\User', '{\"name\":\"goldgeorge\",\"by\":\"goldgeorge\"}', '2021-03-29 15:33:45', '2021-03-29 15:33:45'),
(434, 'default', 'Account signed-in', 55, 'App\\User', 55, 'App\\User', '{\"name\":\"papy\",\"by\":\"papy\"}', '2021-03-29 15:33:46', '2021-03-29 15:33:46'),
(435, 'default', 'Account signed-in', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-03-30 00:57:51', '2021-03-30 00:57:51'),
(436, 'default', 'Account signed-in', 55, 'App\\User', 55, 'App\\User', '{\"name\":\"papy\",\"by\":\"papy\"}', '2021-03-30 04:54:53', '2021-03-30 04:54:53'),
(437, 'default', 'Account signed-out', 55, 'App\\User', 55, 'App\\User', '{\"name\":\"papy\",\"by\":\"papy\"}', '2021-03-30 04:59:22', '2021-03-30 04:59:22'),
(438, 'default', 'Account signed-in', 1, 'App\\User', 1, 'App\\User', '{\"name\":\"admin\",\"by\":\"admin\"}', '2021-03-30 04:59:26', '2021-03-30 04:59:26'),
(439, 'default', 'Account signed-out', 1, 'App\\User', 1, 'App\\User', '{\"name\":\"admin\",\"by\":\"admin\"}', '2021-03-30 05:02:56', '2021-03-30 05:02:56'),
(440, 'default', 'Account was registered', 57, 'App\\User', 57, 'App\\User', '{\"name\":\"Rayb\",\"by\":\"Rayb\"}', '2021-03-30 05:03:48', '2021-03-30 05:03:48'),
(441, 'default', 'Account signed-in', 57, 'App\\User', 57, 'App\\User', '{\"name\":\"Rayb\",\"by\":\"Rayb\"}', '2021-03-30 05:03:48', '2021-03-30 05:03:48'),
(442, 'default', 'Account signed-out', 57, 'App\\User', 57, 'App\\User', '{\"name\":\"Rayb\",\"by\":\"Rayb\"}', '2021-03-30 05:03:58', '2021-03-30 05:03:58'),
(443, 'default', 'Account signed-in', 1, 'App\\User', 1, 'App\\User', '{\"name\":\"admin\",\"by\":\"admin\"}', '2021-03-30 05:04:02', '2021-03-30 05:04:02'),
(444, 'default', 'User was deleted', 57, 'App\\User', 1, 'App\\User', '{\"name\":\"Rayb\",\"by\":\"admin\",\"user_id\":0}', '2021-03-30 05:04:28', '2021-03-30 05:04:28'),
(445, 'default', 'Account signed-in', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-03-30 05:07:21', '2021-03-30 05:07:21'),
(446, 'default', 'Account signed-out', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-03-30 05:07:52', '2021-03-30 05:07:52'),
(447, 'default', 'Account signed-in', 1, 'App\\User', 1, 'App\\User', '{\"name\":\"admin\",\"by\":\"admin\"}', '2021-03-30 05:08:08', '2021-03-30 05:08:08'),
(448, 'default', 'Account signed-in', 1, 'App\\User', 1, 'App\\User', '{\"name\":\"admin\",\"by\":\"admin\"}', '2021-03-30 07:42:45', '2021-03-30 07:42:45'),
(449, 'default', 'Account was registered', 58, 'App\\User', 58, 'App\\User', '{\"name\":\"Rokomary\",\"by\":\"Rokomary\"}', '2021-03-30 07:44:00', '2021-03-30 07:44:00'),
(450, 'default', 'Account signed-in', 58, 'App\\User', 58, 'App\\User', '{\"name\":\"Rokomary\",\"by\":\"Rokomary\"}', '2021-03-30 07:44:00', '2021-03-30 07:44:00'),
(451, 'default', 'Account signed-out', 58, 'App\\User', 58, 'App\\User', '{\"name\":\"Rokomary\",\"by\":\"Rokomary\"}', '2021-03-30 07:46:45', '2021-03-30 07:46:45'),
(452, 'default', 'Account was registered', 59, 'App\\User', 59, 'App\\User', '{\"name\":\"Encoderultimate\",\"by\":\"Encoderultimate\"}', '2021-03-30 07:47:20', '2021-03-30 07:47:20'),
(453, 'default', 'Account signed-in', 59, 'App\\User', 59, 'App\\User', '{\"name\":\"Encoderultimate\",\"by\":\"Encoderultimate\"}', '2021-03-30 07:47:20', '2021-03-30 07:47:20'),
(454, 'default', 'Account signed-in', 1, 'App\\User', 1, 'App\\User', '{\"name\":\"admin\",\"by\":\"admin\"}', '2021-03-30 09:42:24', '2021-03-30 09:42:24'),
(455, 'default', 'Account signed-out', 1, 'App\\User', 1, 'App\\User', '{\"name\":\"admin\",\"by\":\"admin\"}', '2021-03-30 09:42:47', '2021-03-30 09:42:47'),
(456, 'default', 'Account signed-in', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-03-30 09:42:50', '2021-03-30 09:42:50'),
(457, 'default', 'Role was created', 5, 'Spatie\\Permission\\Models\\Role', 1, 'App\\User', '{\"name\":\"dfasfafa\",\"by\":\"admin\"}', '2021-03-30 09:55:14', '2021-03-30 09:55:14'),
(458, 'default', 'Permission assigned to Role was', 5, 'Spatie\\Permission\\Models\\Role', 1, 'App\\User', '{\"name\":\"dfasfafa\",\"by\":\"admin\"}', '2021-03-30 09:55:38', '2021-03-30 09:55:38'),
(459, 'default', 'Role was deleted', 5, 'Spatie\\Permission\\Models\\Role', 1, 'App\\User', '{\"name\":\"dfasfafa\",\"by\":\"admin\"}', '2021-03-30 09:55:50', '2021-03-30 09:55:50'),
(460, 'default', 'Account signed-out', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-03-30 10:06:01', '2021-03-30 10:06:01'),
(461, 'default', 'Account signed-in', 1, 'App\\User', 1, 'App\\User', '{\"name\":\"admin\",\"by\":\"admin\"}', '2021-03-30 10:06:08', '2021-03-30 10:06:08'),
(462, 'default', 'Account signed-out', 1, 'App\\User', 1, 'App\\User', '{\"name\":\"admin\",\"by\":\"admin\"}', '2021-03-30 10:15:48', '2021-03-30 10:15:48'),
(463, 'default', 'Account was registered', 60, 'App\\User', 60, 'App\\User', '{\"name\":\"TF1\",\"by\":\"TF1\"}', '2021-03-30 10:16:22', '2021-03-30 10:16:22'),
(464, 'default', 'Account signed-in', 60, 'App\\User', 60, 'App\\User', '{\"name\":\"TF1\",\"by\":\"TF1\"}', '2021-03-30 10:16:22', '2021-03-30 10:16:22'),
(465, 'default', 'Account signed-out', 60, 'App\\User', 60, 'App\\User', '{\"name\":\"TF1\",\"by\":\"TF1\"}', '2021-03-30 10:16:29', '2021-03-30 10:16:29'),
(466, 'default', 'Account signed-in', 1, 'App\\User', 1, 'App\\User', '{\"name\":\"admin\",\"by\":\"admin\"}', '2021-03-30 10:16:32', '2021-03-30 10:16:32'),
(467, 'default', 'Account signed-out', 1, 'App\\User', 1, 'App\\User', '{\"name\":\"admin\",\"by\":\"admin\"}', '2021-03-30 10:17:54', '2021-03-30 10:17:54'),
(468, 'default', 'Account signed-in', 1, 'App\\User', 1, 'App\\User', '{\"name\":\"admin\",\"by\":\"admin\"}', '2021-03-30 10:17:57', '2021-03-30 10:17:57'),
(469, 'default', 'Account signed-out', 1, 'App\\User', 1, 'App\\User', '{\"name\":\"admin\",\"by\":\"admin\"}', '2021-03-30 10:18:00', '2021-03-30 10:18:00'),
(470, 'default', 'Account signed-in', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-03-30 10:18:06', '2021-03-30 10:18:06'),
(471, 'default', 'Account signed-out', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-03-30 10:18:09', '2021-03-30 10:18:09'),
(472, 'default', 'Account signed-in', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-03-30 10:27:08', '2021-03-30 10:27:08'),
(473, 'default', 'Account signed-out', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-03-30 10:27:31', '2021-03-30 10:27:31'),
(474, 'default', 'Account signed-in', 1, 'App\\User', 1, 'App\\User', '{\"name\":\"admin\",\"by\":\"admin\"}', '2021-03-30 10:27:37', '2021-03-30 10:27:37'),
(475, 'default', 'Account signed-out', 1, 'App\\User', 1, 'App\\User', '{\"name\":\"admin\",\"by\":\"admin\"}', '2021-03-30 10:27:55', '2021-03-30 10:27:55'),
(476, 'default', 'Account signed-in', 56, 'App\\User', 56, 'App\\User', '{\"name\":\"goldgeorge\",\"by\":\"goldgeorge\"}', '2021-03-30 10:28:25', '2021-03-30 10:28:25'),
(477, 'default', 'Account signed-out', 56, 'App\\User', 56, 'App\\User', '{\"name\":\"goldgeorge\",\"by\":\"goldgeorge\"}', '2021-03-30 10:35:29', '2021-03-30 10:35:29'),
(478, 'default', 'Account signed-in', 56, 'App\\User', 56, 'App\\User', '{\"name\":\"goldgeorge\",\"by\":\"goldgeorge\"}', '2021-03-30 10:35:42', '2021-03-30 10:35:42'),
(479, 'default', 'Account signed-out', 56, 'App\\User', 56, 'App\\User', '{\"name\":\"goldgeorge\",\"by\":\"goldgeorge\"}', '2021-03-30 10:59:19', '2021-03-30 10:59:19'),
(480, 'default', 'Account signed-in', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-03-30 10:59:22', '2021-03-30 10:59:22'),
(481, 'default', 'Account signed-in', 55, 'App\\User', 55, 'App\\User', '{\"name\":\"papy\",\"by\":\"papy\"}', '2021-03-30 12:35:26', '2021-03-30 12:35:26'),
(482, 'default', 'Account signed-in', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-03-30 13:21:53', '2021-03-30 13:21:53'),
(483, 'default', 'Account signed-out', 55, 'App\\User', 55, 'App\\User', '{\"name\":\"papy\",\"by\":\"papy\"}', '2021-03-30 13:24:49', '2021-03-30 13:24:49'),
(484, 'default', 'Account signed-in', 1, 'App\\User', 1, 'App\\User', '{\"name\":\"admin\",\"by\":\"admin\"}', '2021-03-30 13:26:27', '2021-03-30 13:26:27'),
(485, 'default', 'Role was created', 6, 'Spatie\\Permission\\Models\\Role', 2, 'App\\User', '{\"name\":\"papa\",\"by\":\"company1\"}', '2021-03-30 13:31:53', '2021-03-30 13:31:53'),
(486, 'default', 'Role was created', 7, 'Spatie\\Permission\\Models\\Role', 1, 'App\\User', '{\"name\":\"driver\",\"by\":\"admin\"}', '2021-03-30 14:56:14', '2021-03-30 14:56:14'),
(487, 'default', 'Account signed-in', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-03-30 15:10:52', '2021-03-30 15:10:52'),
(488, 'default', 'Role was created', 8, 'Spatie\\Permission\\Models\\Role', 1, 'App\\User', '{\"name\":\"testing\",\"by\":\"admin\"}', '2021-03-30 15:21:56', '2021-03-30 15:21:56'),
(489, 'default', 'Account signed-in', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-03-31 15:36:15', '2021-03-31 15:36:15'),
(490, 'default', 'Account signed-in', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-03-31 19:38:45', '2021-03-31 19:38:45'),
(491, 'default', 'Account signed-in', 1, 'App\\User', 1, 'App\\User', '{\"name\":\"admin\",\"by\":\"admin\"}', '2021-04-01 11:07:03', '2021-04-01 11:07:03'),
(492, 'default', 'Role was created', 9, 'Spatie\\Permission\\Models\\Role', 1, 'App\\User', '{\"name\":\"super\",\"by\":\"admin\"}', '2021-04-01 11:25:12', '2021-04-01 11:25:12'),
(493, 'default', 'Role was updated', 9, 'Spatie\\Permission\\Models\\Role', 1, 'App\\User', '{\"name\":\"update\",\"by\":\"admin\"}', '2021-04-01 11:25:38', '2021-04-01 11:25:38'),
(494, 'default', 'Permission was deleted', 7, 'Spatie\\Permission\\Models\\Permission', 1, 'App\\User', '{\"name\":\"crud-builder\",\"by\":\"admin\"}', '2021-04-01 11:31:53', '2021-04-01 11:31:53'),
(495, 'default', 'Permission was created', 8, 'Spatie\\Permission\\Models\\Permission', 1, 'App\\User', '{\"name\":\"super\",\"by\":\"admin\"}', '2021-04-01 11:32:02', '2021-04-01 11:32:02'),
(496, 'default', 'Permission was deleted', 8, 'Spatie\\Permission\\Models\\Permission', 1, 'App\\User', '{\"name\":\"super\",\"by\":\"admin\"}', '2021-04-01 11:32:20', '2021-04-01 11:32:20'),
(497, 'default', 'Account signed-in', 55, 'App\\User', 55, 'App\\User', '{\"name\":\"papy\",\"by\":\"papy\"}', '2021-04-01 11:51:31', '2021-04-01 11:51:31'),
(498, 'default', 'Account signed-out', 55, 'App\\User', 55, 'App\\User', '{\"name\":\"papy\",\"by\":\"papy\"}', '2021-04-01 11:51:38', '2021-04-01 11:51:38'),
(499, 'default', 'Account signed-in', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-04-01 11:51:42', '2021-04-01 11:51:42'),
(500, 'default', 'Role was created', 10, 'Spatie\\Permission\\Models\\Role', 2, 'App\\User', '{\"name\":\"chaud\",\"by\":\"company1\"}', '2021-04-01 11:53:16', '2021-04-01 11:53:16'),
(501, 'default', 'Account signed-out', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-04-01 11:53:34', '2021-04-01 11:53:34'),
(502, 'default', 'Account signed-in', 55, 'App\\User', 55, 'App\\User', '{\"name\":\"papy\",\"by\":\"papy\"}', '2021-04-01 11:53:38', '2021-04-01 11:53:38'),
(503, 'default', 'Account signed-out', 1, 'App\\User', 1, 'App\\User', '{\"name\":\"admin\",\"by\":\"admin\"}', '2021-04-01 12:13:19', '2021-04-01 12:13:19'),
(504, 'default', 'Account signed-in', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-04-01 12:13:33', '2021-04-01 12:13:33'),
(505, 'default', 'Account signed-in', 1, 'App\\User', 1, 'App\\User', '{\"name\":\"admin\",\"by\":\"admin\"}', '2021-04-01 12:24:31', '2021-04-01 12:24:31'),
(506, 'default', 'Account signed-in', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-04-01 12:59:54', '2021-04-01 12:59:54'),
(507, 'default', 'Account signed-out', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-04-01 13:01:18', '2021-04-01 13:01:18'),
(508, 'default', 'Account signed-in', 55, 'App\\User', 55, 'App\\User', '{\"name\":\"papy\",\"by\":\"papy\"}', '2021-04-01 13:01:21', '2021-04-01 13:01:21'),
(509, 'default', 'Account signed-out', 55, 'App\\User', 55, 'App\\User', '{\"name\":\"papy\",\"by\":\"papy\"}', '2021-04-01 13:02:50', '2021-04-01 13:02:50'),
(510, 'default', 'Account signed-in', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-04-01 13:02:56', '2021-04-01 13:02:56'),
(511, 'default', 'Account signed-out', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-04-01 13:03:40', '2021-04-01 13:03:40'),
(512, 'default', 'Account signed-in', 55, 'App\\User', 55, 'App\\User', '{\"name\":\"papy\",\"by\":\"papy\"}', '2021-04-01 13:03:44', '2021-04-01 13:03:44'),
(513, 'default', 'Account signed-out', 55, 'App\\User', 55, 'App\\User', '{\"name\":\"papy\",\"by\":\"papy\"}', '2021-04-01 13:09:28', '2021-04-01 13:09:28'),
(514, 'default', 'Account signed-in', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-04-01 13:09:33', '2021-04-01 13:09:33'),
(515, 'default', 'Account signed-out', 1, 'App\\User', 1, 'App\\User', '{\"name\":\"admin\",\"by\":\"admin\"}', '2021-04-01 13:38:17', '2021-04-01 13:38:17'),
(516, 'default', 'Account signed-in', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-04-01 13:38:22', '2021-04-01 13:38:22'),
(517, 'default', 'User was created', 61, 'App\\User', 2, 'App\\User', '{\"name\":\"liakot@gmail.com\",\"by\":\"company1\"}', '2021-04-01 15:14:04', '2021-04-01 15:14:04'),
(518, 'default', 'Account signed-in', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-04-01 15:18:16', '2021-04-01 15:18:16'),
(519, 'default', 'Account signed-in', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-04-01 15:42:53', '2021-04-01 15:42:53'),
(520, 'default', 'User was created', 62, 'App\\User', 2, 'App\\User', '{\"name\":\"testing@gmail.com\",\"by\":\"company1\"}', '2021-04-01 16:12:50', '2021-04-01 16:12:50'),
(521, 'default', 'Account signed-in', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-04-01 16:23:19', '2021-04-01 16:23:19'),
(522, 'default', 'Account signed-in', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-04-02 08:44:34', '2021-04-02 08:44:34'),
(523, 'default', 'Account signed-out', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-04-02 08:50:02', '2021-04-02 08:50:02'),
(524, 'default', 'Account signed-in', 1, 'App\\User', 1, 'App\\User', '{\"name\":\"admin\",\"by\":\"admin\"}', '2021-04-02 08:50:09', '2021-04-02 08:50:09'),
(525, 'default', 'Account signed-in', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-04-02 12:49:59', '2021-04-02 12:49:59'),
(526, 'default', 'Account signed-in', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-04-02 13:05:13', '2021-04-02 13:05:13'),
(527, 'default', 'Account signed-out', 1, 'App\\User', 1, 'App\\User', '{\"name\":\"admin\",\"by\":\"admin\"}', '2021-04-02 13:11:19', '2021-04-02 13:11:19'),
(528, 'default', 'Account signed-in', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-04-02 13:11:28', '2021-04-02 13:11:28'),
(529, 'default', 'Account signed-out', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-04-02 13:12:55', '2021-04-02 13:12:55'),
(530, 'default', 'Account signed-in', 1, 'App\\User', 1, 'App\\User', '{\"name\":\"admin\",\"by\":\"admin\"}', '2021-04-02 13:13:11', '2021-04-02 13:13:11'),
(531, 'default', 'Account signed-out', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-04-02 13:18:26', '2021-04-02 13:18:26'),
(532, 'default', 'Account signed-in', 1, 'App\\User', 1, 'App\\User', '{\"name\":\"admin\",\"by\":\"admin\"}', '2021-04-02 13:18:34', '2021-04-02 13:18:34'),
(533, 'default', 'Account signed-in', 1, 'App\\User', 1, 'App\\User', '{\"name\":\"admin\",\"by\":\"admin\"}', '2021-04-02 13:21:34', '2021-04-02 13:21:34'),
(534, 'default', 'Account signed-out', 1, 'App\\User', 1, 'App\\User', '{\"name\":\"admin\",\"by\":\"admin\"}', '2021-04-02 14:10:33', '2021-04-02 14:10:33'),
(535, 'default', 'Account signed-in', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-04-02 14:10:42', '2021-04-02 14:10:42'),
(536, 'default', 'Account signed-out', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-04-02 14:20:41', '2021-04-02 14:20:41'),
(537, 'default', 'Account signed-in', 1, 'App\\User', 1, 'App\\User', '{\"name\":\"admin\",\"by\":\"admin\"}', '2021-04-02 14:20:48', '2021-04-02 14:20:48'),
(538, 'default', 'Account signed-in', 1, 'App\\User', 1, 'App\\User', '{\"name\":\"admin\",\"by\":\"admin\"}', '2021-04-02 15:00:16', '2021-04-02 15:00:16'),
(539, 'default', 'Account signed-in', 1, 'App\\User', 1, 'App\\User', '{\"name\":\"admin\",\"by\":\"admin\"}', '2021-04-02 19:07:37', '2021-04-02 19:07:37'),
(540, 'default', 'Account was registered', 63, 'App\\User', 63, 'App\\User', '{\"name\":\"koko\",\"by\":\"koko\"}', '2021-04-02 19:11:11', '2021-04-02 19:11:11'),
(541, 'default', 'Account signed-in', 63, 'App\\User', 63, 'App\\User', '{\"name\":\"koko\",\"by\":\"koko\"}', '2021-04-02 19:11:11', '2021-04-02 19:11:11'),
(542, 'default', 'Account signed-out', 63, 'App\\User', 63, 'App\\User', '{\"name\":\"koko\",\"by\":\"koko\"}', '2021-04-02 19:11:22', '2021-04-02 19:11:22'),
(543, 'default', 'Account signed-in', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-04-04 06:32:41', '2021-04-04 06:32:41'),
(544, 'default', 'Account signed-in', 55, 'App\\User', 55, 'App\\User', '{\"name\":\"papy\",\"by\":\"papy\"}', '2021-04-04 09:17:46', '2021-04-04 09:17:46'),
(545, 'default', 'Account signed-in', 55, 'App\\User', 55, 'App\\User', '{\"name\":\"papy\",\"by\":\"papy\"}', '2021-04-04 11:09:41', '2021-04-04 11:09:41'),
(546, 'default', 'Account signed-in', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-04-04 13:07:08', '2021-04-04 13:07:08'),
(547, 'default', 'Account signed-in', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-04-04 13:47:30', '2021-04-04 13:47:30'),
(548, 'default', 'Account signed-out', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-04-04 14:39:47', '2021-04-04 14:39:47'),
(549, 'default', 'Account signed-in', 1, 'App\\User', 1, 'App\\User', '{\"name\":\"admin\",\"by\":\"admin\"}', '2021-04-04 14:39:52', '2021-04-04 14:39:52'),
(550, 'default', 'Account signed-out', 20, 'App\\User', 20, 'App\\User', '{\"name\":\"kader\",\"by\":\"kader\"}', '2021-04-04 15:14:11', '2021-04-04 15:14:11'),
(551, 'default', 'Account signed-in', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-04-04 15:14:14', '2021-04-04 15:14:14'),
(552, 'default', 'Account signed-out', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-04-04 16:42:12', '2021-04-04 16:42:12'),
(553, 'default', 'Account signed-in', 1, 'App\\User', 1, 'App\\User', '{\"name\":\"admin\",\"by\":\"admin\"}', '2021-04-04 16:42:17', '2021-04-04 16:42:17'),
(554, 'default', 'Account signed-in', 55, 'App\\User', 55, 'App\\User', '{\"name\":\"papy\",\"by\":\"papy\"}', '2021-04-05 05:26:20', '2021-04-05 05:26:20'),
(555, 'default', 'Account signed-in', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-04-05 05:59:19', '2021-04-05 05:59:19'),
(556, 'default', 'Account signed-out', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-04-05 07:46:49', '2021-04-05 07:46:49'),
(557, 'default', 'Account signed-in', 1, 'App\\User', 1, 'App\\User', '{\"name\":\"admin\",\"by\":\"admin\"}', '2021-04-05 07:46:56', '2021-04-05 07:46:56'),
(558, 'default', 'Account signed-out', 1, 'App\\User', 1, 'App\\User', '{\"name\":\"admin\",\"by\":\"admin\"}', '2021-04-05 07:58:23', '2021-04-05 07:58:23'),
(559, 'default', 'Account signed-in', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-04-05 07:58:26', '2021-04-05 07:58:26'),
(560, 'default', 'Account signed-in', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-04-05 08:21:45', '2021-04-05 08:21:45'),
(561, 'default', 'Account signed-in', 1, 'App\\User', 1, 'App\\User', '{\"name\":\"admin\",\"by\":\"admin\"}', '2021-04-05 08:39:22', '2021-04-05 08:39:22'),
(562, 'default', 'Updated profile', 1, 'App\\User', 1, 'App\\User', '{\"name\":\"admin\",\"by\":\"admin\"}', '2021-04-05 08:39:36', '2021-04-05 08:39:36'),
(563, 'default', 'Updated profile', 1, 'App\\User', 1, 'App\\User', '{\"name\":\"admin\",\"by\":\"admin\"}', '2021-04-05 08:39:44', '2021-04-05 08:39:44'),
(564, 'default', 'Updated profile', 1, 'App\\User', 1, 'App\\User', '{\"name\":\"admin\",\"by\":\"admin\"}', '2021-04-05 08:39:54', '2021-04-05 08:39:54'),
(565, 'default', 'Updated profile', 1, 'App\\User', 1, 'App\\User', '{\"name\":\"admin\",\"by\":\"admin\"}', '2021-04-05 08:40:10', '2021-04-05 08:40:10'),
(566, 'default', 'Account signed-out', 1, 'App\\User', 1, 'App\\User', '{\"name\":\"admin\",\"by\":\"admin\"}', '2021-04-05 08:40:14', '2021-04-05 08:40:14'),
(567, 'default', 'Account signed-in', 1, 'App\\User', 1, 'App\\User', '{\"name\":\"admin\",\"by\":\"admin\"}', '2021-04-05 08:40:20', '2021-04-05 08:40:20'),
(568, 'default', 'Updated profile', 1, 'App\\User', 1, 'App\\User', '{\"name\":\"admin\",\"by\":\"admin\"}', '2021-04-05 08:40:44', '2021-04-05 08:40:44'),
(569, 'default', 'Account signed-out', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-04-05 08:52:01', '2021-04-05 08:52:01'),
(570, 'default', 'Account signed-in', 1, 'App\\User', 1, 'App\\User', '{\"name\":\"admin\",\"by\":\"admin\"}', '2021-04-05 08:52:04', '2021-04-05 08:52:04'),
(571, 'default', 'Updated profile', 1, 'App\\User', 1, 'App\\User', '{\"name\":\"admin\",\"by\":\"admin\"}', '2021-04-05 08:52:28', '2021-04-05 08:52:28'),
(572, 'default', 'Updated profile', 1, 'App\\User', 1, 'App\\User', '{\"name\":\"admin\",\"by\":\"admin\"}', '2021-04-05 08:53:43', '2021-04-05 08:53:43'),
(573, 'default', 'Account signed-out', 1, 'App\\User', 1, 'App\\User', '{\"name\":\"admin\",\"by\":\"admin\"}', '2021-04-05 08:53:48', '2021-04-05 08:53:48'),
(574, 'default', 'Account signed-in', 1, 'App\\User', 1, 'App\\User', '{\"name\":\"admin\",\"by\":\"admin\"}', '2021-04-05 08:53:58', '2021-04-05 08:53:58'),
(575, 'default', 'Updated profile', 1, 'App\\User', 1, 'App\\User', '{\"name\":\"admin\",\"by\":\"admin\"}', '2021-04-05 08:54:25', '2021-04-05 08:54:25'),
(576, 'default', 'Account signed-out', 1, 'App\\User', 1, 'App\\User', '{\"name\":\"admin\",\"by\":\"admin\"}', '2021-04-05 08:59:28', '2021-04-05 08:59:28'),
(577, 'default', 'Account signed-in', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-04-05 08:59:31', '2021-04-05 08:59:31'),
(578, 'default', 'Account signed-out', 1, 'App\\User', 1, 'App\\User', '{\"name\":\"admin\",\"by\":\"admin\"}', '2021-04-05 09:33:22', '2021-04-05 09:33:22'),
(579, 'default', 'Account signed-in', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-04-05 09:33:30', '2021-04-05 09:33:30'),
(580, 'default', 'Updated profile', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-04-05 09:33:42', '2021-04-05 09:33:42'),
(581, 'default', 'Updated profile', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-04-05 09:33:58', '2021-04-05 09:33:58'),
(582, 'default', 'Account signed-out', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-04-05 09:34:09', '2021-04-05 09:34:09'),
(583, 'default', 'Account signed-in', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-04-05 09:34:15', '2021-04-05 09:34:15'),
(584, 'default', 'Updated profile', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-04-05 09:34:34', '2021-04-05 09:34:34'),
(585, 'default', 'Account signed-out', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-04-05 09:36:01', '2021-04-05 09:36:01'),
(586, 'default', 'Account signed-in', 1, 'App\\User', 1, 'App\\User', '{\"name\":\"admin\",\"by\":\"admin\"}', '2021-04-05 09:36:09', '2021-04-05 09:36:09'),
(587, 'default', 'Account signed-out', 1, 'App\\User', 1, 'App\\User', '{\"name\":\"admin\",\"by\":\"admin\"}', '2021-04-05 09:40:29', '2021-04-05 09:40:29'),
(588, 'default', 'Account signed-in', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-04-05 09:40:36', '2021-04-05 09:40:36'),
(589, 'default', 'Account signed-out', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-04-05 09:41:01', '2021-04-05 09:41:01'),
(590, 'default', 'Account signed-in', 1, 'App\\User', 1, 'App\\User', '{\"name\":\"admin\",\"by\":\"admin\"}', '2021-04-05 09:41:08', '2021-04-05 09:41:08'),
(591, 'default', 'Account signed-out', 1, 'App\\User', 1, 'App\\User', '{\"name\":\"admin\",\"by\":\"admin\"}', '2021-04-05 09:43:32', '2021-04-05 09:43:32'),
(592, 'default', 'Account signed-in', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-04-05 11:29:44', '2021-04-05 11:29:44'),
(593, 'default', 'Account signed-out', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-04-05 11:40:53', '2021-04-05 11:40:53'),
(594, 'default', 'Account signed-in', 1, 'App\\User', 1, 'App\\User', '{\"name\":\"admin\",\"by\":\"admin\"}', '2021-04-05 11:41:06', '2021-04-05 11:41:06'),
(595, 'default', 'Account signed-in', 1, 'App\\User', 1, 'App\\User', '{\"name\":\"admin\",\"by\":\"admin\"}', '2021-04-05 11:53:33', '2021-04-05 11:53:33'),
(596, 'default', 'Account signed-out', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-04-05 11:53:36', '2021-04-05 11:53:36'),
(597, 'default', 'Account signed-in', 1, 'App\\User', 1, 'App\\User', '{\"name\":\"admin\",\"by\":\"admin\"}', '2021-04-05 11:53:42', '2021-04-05 11:53:42'),
(598, 'default', 'Account signed-out', 1, 'App\\User', 1, 'App\\User', '{\"name\":\"admin\",\"by\":\"admin\"}', '2021-04-05 11:57:16', '2021-04-05 11:57:16'),
(599, 'default', 'Account signed-in', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-04-05 11:57:24', '2021-04-05 11:57:24'),
(600, 'default', 'Account signed-out', 1, 'App\\User', 1, 'App\\User', '{\"name\":\"admin\",\"by\":\"admin\"}', '2021-04-05 12:03:34', '2021-04-05 12:03:34'),
(601, 'default', 'Account signed-in', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-04-05 12:03:37', '2021-04-05 12:03:37'),
(602, 'default', 'Account signed-out', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-04-05 12:07:40', '2021-04-05 12:07:40'),
(603, 'default', 'Account signed-in', 1, 'App\\User', 1, 'App\\User', '{\"name\":\"admin\",\"by\":\"admin\"}', '2021-04-05 12:07:42', '2021-04-05 12:07:42'),
(604, 'default', 'Account signed-out', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-04-05 12:22:19', '2021-04-05 12:22:19'),
(605, 'default', 'Account signed-in', 1, 'App\\User', 1, 'App\\User', '{\"name\":\"admin\",\"by\":\"admin\"}', '2021-04-05 12:24:21', '2021-04-05 12:24:21'),
(606, 'default', 'Account signed-out', 1, 'App\\User', 1, 'App\\User', '{\"name\":\"admin\",\"by\":\"admin\"}', '2021-04-05 12:25:58', '2021-04-05 12:25:58'),
(607, 'default', 'Account signed-in', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-04-05 12:26:01', '2021-04-05 12:26:01'),
(608, 'default', 'Account signed-out', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-04-05 12:49:25', '2021-04-05 12:49:25'),
(609, 'default', 'Account signed-in', 1, 'App\\User', 1, 'App\\User', '{\"name\":\"admin\",\"by\":\"admin\"}', '2021-04-05 12:49:27', '2021-04-05 12:49:27'),
(610, 'default', 'Account signed-out', 1, 'App\\User', 1, 'App\\User', '{\"name\":\"admin\",\"by\":\"admin\"}', '2021-04-05 13:00:34', '2021-04-05 13:00:34'),
(611, 'default', 'Account signed-in', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-04-05 13:00:45', '2021-04-05 13:00:45'),
(612, 'default', 'Account signed-out', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-04-05 13:06:51', '2021-04-05 13:06:51'),
(613, 'default', 'Account signed-in', 1, 'App\\User', 1, 'App\\User', '{\"name\":\"admin\",\"by\":\"admin\"}', '2021-04-05 13:06:55', '2021-04-05 13:06:55'),
(614, 'default', 'Account signed-out', 1, 'App\\User', 1, 'App\\User', '{\"name\":\"admin\",\"by\":\"admin\"}', '2021-04-05 13:30:37', '2021-04-05 13:30:37'),
(615, 'default', 'Account signed-in', 1, 'App\\User', 1, 'App\\User', '{\"name\":\"admin\",\"by\":\"admin\"}', '2021-04-05 13:30:41', '2021-04-05 13:30:41');
INSERT INTO `activity_log` (`id`, `log_name`, `description`, `subject_id`, `subject_type`, `causer_id`, `causer_type`, `properties`, `created_at`, `updated_at`) VALUES
(616, 'default', 'Account signed-out', 1, 'App\\User', 1, 'App\\User', '{\"name\":\"admin\",\"by\":\"admin\"}', '2021-04-05 13:30:46', '2021-04-05 13:30:46'),
(617, 'default', 'Account signed-in', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-04-05 13:30:49', '2021-04-05 13:30:49'),
(618, 'default', 'Account signed-in', 55, 'App\\User', 55, 'App\\User', '{\"name\":\"papy\",\"by\":\"papy\"}', '2021-04-05 13:47:51', '2021-04-05 13:47:51'),
(619, 'default', 'Account signed-in', 1, 'App\\User', 1, 'App\\User', '{\"name\":\"admin\",\"by\":\"admin\"}', '2021-04-05 16:33:23', '2021-04-05 16:33:23'),
(620, 'default', 'Account signed-in', 55, 'App\\User', 55, 'App\\User', '{\"name\":\"papy\",\"by\":\"papy\"}', '2021-04-05 17:26:18', '2021-04-05 17:26:18'),
(621, 'default', 'Account signed-out', 55, 'App\\User', 55, 'App\\User', '{\"name\":\"papy\",\"by\":\"papy\"}', '2021-04-05 17:31:05', '2021-04-05 17:31:05'),
(622, 'default', 'Account signed-in', 1, 'App\\User', 1, 'App\\User', '{\"name\":\"admin\",\"by\":\"admin\"}', '2021-04-05 17:31:08', '2021-04-05 17:31:08'),
(623, 'default', 'Account signed-out', 1, 'App\\User', 1, 'App\\User', '{\"name\":\"admin\",\"by\":\"admin\"}', '2021-04-05 17:57:00', '2021-04-05 17:57:00'),
(624, 'default', 'Account signed-in', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-04-05 17:57:03', '2021-04-05 17:57:03'),
(625, 'default', 'Account signed-out', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-04-05 18:01:55', '2021-04-05 18:01:55'),
(626, 'default', 'Account signed-in', 1, 'App\\User', 1, 'App\\User', '{\"name\":\"admin\",\"by\":\"admin\"}', '2021-04-05 18:02:01', '2021-04-05 18:02:01'),
(627, 'default', 'Account signed-in', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-04-06 06:53:53', '2021-04-06 06:53:53'),
(628, 'default', 'Account signed-in', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-04-06 07:13:26', '2021-04-06 07:13:26'),
(629, 'default', 'Account signed-in', 1, 'App\\User', 1, 'App\\User', '{\"name\":\"admin\",\"by\":\"admin\"}', '2021-04-06 09:20:08', '2021-04-06 09:20:08'),
(630, 'default', 'Account signed-out', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-04-06 09:27:27', '2021-04-06 09:27:27'),
(631, 'default', 'Account signed-in', 1, 'App\\User', 1, 'App\\User', '{\"name\":\"admin\",\"by\":\"admin\"}', '2021-04-06 09:27:30', '2021-04-06 09:27:30'),
(632, 'default', 'Account signed-out', 1, 'App\\User', 1, 'App\\User', '{\"name\":\"admin\",\"by\":\"admin\"}', '2021-04-06 09:34:43', '2021-04-06 09:34:43'),
(633, 'default', 'Account signed-in', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-04-06 09:34:48', '2021-04-06 09:34:48'),
(634, 'default', 'Account signed-out', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-04-06 09:37:17', '2021-04-06 09:37:17'),
(635, 'default', 'Account signed-in', 1, 'App\\User', 1, 'App\\User', '{\"name\":\"admin\",\"by\":\"admin\"}', '2021-04-06 09:37:20', '2021-04-06 09:37:20'),
(636, 'default', 'Account signed-out', 1, 'App\\User', 1, 'App\\User', '{\"name\":\"admin\",\"by\":\"admin\"}', '2021-04-06 09:53:52', '2021-04-06 09:53:52'),
(637, 'default', 'Account signed-in', 1, 'App\\User', 1, 'App\\User', '{\"name\":\"admin\",\"by\":\"admin\"}', '2021-04-06 09:53:54', '2021-04-06 09:53:54'),
(638, 'default', 'Account signed-in', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-04-07 14:38:57', '2021-04-07 14:38:57'),
(639, 'default', 'Account signed-out', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-04-07 14:45:41', '2021-04-07 14:45:41'),
(640, 'default', 'Account signed-in', 1, 'App\\User', 1, 'App\\User', '{\"name\":\"admin\",\"by\":\"admin\"}', '2021-04-07 14:45:44', '2021-04-07 14:45:44'),
(641, 'default', 'Account signed-out', 1, 'App\\User', 1, 'App\\User', '{\"name\":\"admin\",\"by\":\"admin\"}', '2021-04-07 14:47:10', '2021-04-07 14:47:10'),
(642, 'default', 'Account signed-in', 56, 'App\\User', 56, 'App\\User', '{\"name\":\"goldgeorge\",\"by\":\"goldgeorge\"}', '2021-04-07 14:47:20', '2021-04-07 14:47:20'),
(643, 'default', 'Account signed-out', 56, 'App\\User', 56, 'App\\User', '{\"name\":\"goldgeorge\",\"by\":\"goldgeorge\"}', '2021-04-07 14:55:40', '2021-04-07 14:55:40'),
(644, 'default', 'Account signed-in', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-04-07 14:55:43', '2021-04-07 14:55:43'),
(645, 'default', 'Account signed-out', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-04-07 17:17:20', '2021-04-07 17:17:20'),
(646, 'default', 'Account signed-in', 1, 'App\\User', 1, 'App\\User', '{\"name\":\"admin\",\"by\":\"admin\"}', '2021-04-07 17:17:24', '2021-04-07 17:17:24'),
(647, 'default', 'Account signed-out', 1, 'App\\User', 1, 'App\\User', '{\"name\":\"admin\",\"by\":\"admin\"}', '2021-04-07 17:17:43', '2021-04-07 17:17:43'),
(648, 'default', 'Account signed-in', 56, 'App\\User', 56, 'App\\User', '{\"name\":\"goldgeorge\",\"by\":\"goldgeorge\"}', '2021-04-07 17:17:51', '2021-04-07 17:17:51'),
(649, 'default', 'Account signed-in', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-04-08 05:21:18', '2021-04-08 05:21:18'),
(650, 'default', 'Account signed-out', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-04-08 05:23:49', '2021-04-08 05:23:49'),
(651, 'default', 'Account signed-in', 1, 'App\\User', 1, 'App\\User', '{\"name\":\"admin\",\"by\":\"admin\"}', '2021-04-08 05:23:52', '2021-04-08 05:23:52'),
(652, 'default', 'Account signed-in', 1, 'App\\User', 1, 'App\\User', '{\"name\":\"admin\",\"by\":\"admin\"}', '2021-04-08 08:58:14', '2021-04-08 08:58:14'),
(653, 'default', 'Account signed-out', 1, 'App\\User', 1, 'App\\User', '{\"name\":\"admin\",\"by\":\"admin\"}', '2021-04-08 09:04:21', '2021-04-08 09:04:21'),
(654, 'default', 'Account signed-in', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-04-08 09:04:25', '2021-04-08 09:04:25'),
(655, 'default', 'Account signed-out', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-04-08 09:07:23', '2021-04-08 09:07:23'),
(656, 'default', 'Account signed-in', 56, 'App\\User', 56, 'App\\User', '{\"name\":\"goldgeorge\",\"by\":\"goldgeorge\"}', '2021-04-08 09:07:29', '2021-04-08 09:07:29'),
(657, 'default', 'Account signed-out', 56, 'App\\User', 56, 'App\\User', '{\"name\":\"goldgeorge\",\"by\":\"goldgeorge\"}', '2021-04-08 09:08:51', '2021-04-08 09:08:51'),
(658, 'default', 'Account was registered', 64, 'App\\User', 64, 'App\\User', '{\"name\":\"mama\",\"by\":\"mama\"}', '2021-04-08 09:09:23', '2021-04-08 09:09:23'),
(659, 'default', 'Account signed-in', 64, 'App\\User', 64, 'App\\User', '{\"name\":\"mama\",\"by\":\"mama\"}', '2021-04-08 09:09:23', '2021-04-08 09:09:23'),
(660, 'default', 'Account signed-out', 64, 'App\\User', 64, 'App\\User', '{\"name\":\"mama\",\"by\":\"mama\"}', '2021-04-08 09:11:30', '2021-04-08 09:11:30'),
(661, 'default', 'Account signed-in', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-04-08 09:11:32', '2021-04-08 09:11:32'),
(662, 'default', 'Account signed-out', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-04-08 09:27:40', '2021-04-08 09:27:40'),
(663, 'default', 'Account signed-in', 1, 'App\\User', 1, 'App\\User', '{\"name\":\"admin\",\"by\":\"admin\"}', '2021-04-08 09:27:43', '2021-04-08 09:27:43'),
(664, 'default', 'Account signed-out', 1, 'App\\User', 1, 'App\\User', '{\"name\":\"admin\",\"by\":\"admin\"}', '2021-04-08 09:38:56', '2021-04-08 09:38:56'),
(665, 'default', 'Account signed-in', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-04-08 09:39:01', '2021-04-08 09:39:01'),
(666, 'default', 'Account signed-in', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-04-08 11:30:53', '2021-04-08 11:30:53'),
(667, 'default', 'Account signed-out', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-04-08 11:31:08', '2021-04-08 11:31:08'),
(668, 'default', 'Account signed-in', 1, 'App\\User', 1, 'App\\User', '{\"name\":\"admin\",\"by\":\"admin\"}', '2021-04-08 11:31:16', '2021-04-08 11:31:16'),
(669, 'default', 'Account signed-out', 1, 'App\\User', 1, 'App\\User', '{\"name\":\"admin\",\"by\":\"admin\"}', '2021-04-08 11:31:29', '2021-04-08 11:31:29'),
(670, 'default', 'Account signed-in', 46, 'App\\User', 46, 'App\\User', '{\"name\":\"rakibmia\",\"by\":\"rakibmia\"}', '2021-04-08 11:31:38', '2021-04-08 11:31:38'),
(671, 'default', 'Account signed-out', 46, 'App\\User', 46, 'App\\User', '{\"name\":\"rakibmia\",\"by\":\"rakibmia\"}', '2021-04-08 11:33:06', '2021-04-08 11:33:06'),
(672, 'default', 'Account signed-in', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-04-08 11:33:13', '2021-04-08 11:33:13'),
(673, 'default', 'Account signed-in', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-04-08 11:33:16', '2021-04-08 11:33:16'),
(674, 'default', 'Account signed-out', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-04-08 11:33:39', '2021-04-08 11:33:39'),
(675, 'default', 'Updated profile', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-04-08 12:12:15', '2021-04-08 12:12:15'),
(676, 'default', 'Account signed-out', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-04-08 12:12:24', '2021-04-08 12:12:24'),
(677, 'default', 'Account signed-in', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-04-08 12:12:37', '2021-04-08 12:12:37'),
(678, 'default', 'Account signed-in', 1, 'App\\User', 1, 'App\\User', '{\"name\":\"admin\",\"by\":\"admin\"}', '2021-04-08 12:15:41', '2021-04-08 12:15:41'),
(679, 'default', 'Account signed-out', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-04-08 12:25:10', '2021-04-08 12:25:10'),
(680, 'default', 'Account signed-in', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-04-08 12:25:22', '2021-04-08 12:25:22'),
(681, 'default', 'Account signed-out', 1, 'App\\User', 1, 'App\\User', '{\"name\":\"admin\",\"by\":\"admin\"}', '2021-04-08 12:25:28', '2021-04-08 12:25:28'),
(682, 'default', 'Account signed-in', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-04-08 12:25:40', '2021-04-08 12:25:40'),
(683, 'default', 'Account signed-in', 1, 'App\\User', 1, 'App\\User', '{\"name\":\"admin\",\"by\":\"admin\"}', '2021-04-08 12:28:32', '2021-04-08 12:28:32'),
(684, 'default', 'User login details updated', 2, 'App\\User', 1, 'App\\User', '{\"name\":\"company1\",\"by\":\"admin\",\"user_id\":0}', '2021-04-08 12:29:16', '2021-04-08 12:29:16'),
(685, 'default', 'Account signed-out', 1, 'App\\User', 1, 'App\\User', '{\"name\":\"admin\",\"by\":\"admin\"}', '2021-04-08 12:29:23', '2021-04-08 12:29:23'),
(686, 'default', 'Account signed-in', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-04-08 12:29:35', '2021-04-08 12:29:35'),
(687, 'default', 'Account signed-in', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-04-08 12:31:06', '2021-04-08 12:31:06'),
(688, 'default', 'Account signed-out', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-04-08 13:30:15', '2021-04-08 13:30:15'),
(689, 'default', 'Account signed-in', 20, 'App\\User', 20, 'App\\User', '{\"name\":\"kader\",\"by\":\"kader\"}', '2021-04-08 13:30:22', '2021-04-08 13:30:22'),
(690, 'default', 'Account signed-out', 20, 'App\\User', 20, 'App\\User', '{\"name\":\"kader\",\"by\":\"kader\"}', '2021-04-08 13:33:03', '2021-04-08 13:33:03'),
(691, 'default', 'Account signed-in', 1, 'App\\User', 1, 'App\\User', '{\"name\":\"admin\",\"by\":\"admin\"}', '2021-04-08 13:33:15', '2021-04-08 13:33:15'),
(692, 'default', 'Account signed-out', 1, 'App\\User', 1, 'App\\User', '{\"name\":\"admin\",\"by\":\"admin\"}', '2021-04-08 13:35:46', '2021-04-08 13:35:46'),
(693, 'default', 'Account signed-in', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-04-08 13:36:13', '2021-04-08 13:36:13'),
(694, 'default', 'Account signed-out', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-04-08 13:37:55', '2021-04-08 13:37:55'),
(695, 'default', 'Account signed-in', 46, 'App\\User', 46, 'App\\User', '{\"name\":\"rakibmia\",\"by\":\"rakibmia\"}', '2021-04-08 13:38:03', '2021-04-08 13:38:03'),
(696, 'default', 'Updated profile', 46, 'App\\User', 46, 'App\\User', '{\"name\":\"rakibmia\",\"by\":\"rakibmia\"}', '2021-04-08 13:38:56', '2021-04-08 13:38:56'),
(697, 'default', 'Account signed-out', 46, 'App\\User', 46, 'App\\User', '{\"name\":\"rakibmia\",\"by\":\"rakibmia\"}', '2021-04-08 13:43:10', '2021-04-08 13:43:10'),
(698, 'default', 'Account was registered', 65, 'App\\User', 65, 'App\\User', '{\"name\":\"Testing Company\",\"by\":\"Testing Company\"}', '2021-04-08 13:49:24', '2021-04-08 13:49:24'),
(699, 'default', 'Account signed-in', 65, 'App\\User', 65, 'App\\User', '{\"name\":\"Testing Company\",\"by\":\"Testing Company\"}', '2021-04-08 13:49:24', '2021-04-08 13:49:24'),
(700, 'default', 'Account signed-in', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-04-08 15:15:54', '2021-04-08 15:15:54'),
(701, 'default', 'Account signed-in', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-04-08 15:16:30', '2021-04-08 15:16:30'),
(702, 'default', 'Account signed-in', 1, 'App\\User', 1, 'App\\User', '{\"name\":\"admin\",\"by\":\"admin\"}', '2021-04-08 15:16:58', '2021-04-08 15:16:58'),
(703, 'default', 'Account signed-out', 1, 'App\\User', 1, 'App\\User', '{\"name\":\"admin\",\"by\":\"admin\"}', '2021-04-08 15:17:17', '2021-04-08 15:17:17'),
(704, 'default', 'Account signed-in', 55, 'App\\User', 55, 'App\\User', '{\"name\":\"papy\",\"by\":\"papy\"}', '2021-04-08 15:17:23', '2021-04-08 15:17:23'),
(705, 'default', 'Account signed-out', 55, 'App\\User', 55, 'App\\User', '{\"name\":\"papy\",\"by\":\"papy\"}', '2021-04-08 15:17:34', '2021-04-08 15:17:34'),
(706, 'default', 'Account signed-in', 56, 'App\\User', 56, 'App\\User', '{\"name\":\"goldgeorge\",\"by\":\"goldgeorge\"}', '2021-04-08 15:17:39', '2021-04-08 15:17:39'),
(707, 'default', 'Account signed-in', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-04-08 15:19:49', '2021-04-08 15:19:49'),
(708, 'default', 'Updated profile', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-04-08 15:22:47', '2021-04-08 15:22:47'),
(709, 'default', 'Account signed-out', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-04-08 15:24:11', '2021-04-08 15:24:11'),
(710, 'default', 'Account signed-in', 56, 'App\\User', 56, 'App\\User', '{\"name\":\"goldgeorge\",\"by\":\"goldgeorge\"}', '2021-04-08 15:24:16', '2021-04-08 15:24:16'),
(711, 'default', 'Account signed-out', 56, 'App\\User', 56, 'App\\User', '{\"name\":\"goldgeorge\",\"by\":\"goldgeorge\"}', '2021-04-08 15:24:58', '2021-04-08 15:24:58'),
(712, 'default', 'Account signed-in', 56, 'App\\User', 56, 'App\\User', '{\"name\":\"goldgeorge\",\"by\":\"goldgeorge\"}', '2021-04-08 15:25:06', '2021-04-08 15:25:06'),
(713, 'default', 'Account signed-out', 65, 'App\\User', 65, 'App\\User', '{\"name\":\"Testing Company\",\"by\":\"Testing Company\"}', '2021-04-08 16:16:42', '2021-04-08 16:16:42'),
(714, 'default', 'Account was registered', 66, 'App\\User', 66, 'App\\User', '{\"name\":\"Testing Companysdfaf\",\"by\":\"Testing Companysdfaf\"}', '2021-04-08 16:17:23', '2021-04-08 16:17:23'),
(715, 'default', 'Account signed-in', 66, 'App\\User', 66, 'App\\User', '{\"name\":\"Testing Companysdfaf\",\"by\":\"Testing Companysdfaf\"}', '2021-04-08 16:17:23', '2021-04-08 16:17:23'),
(716, 'default', 'Account was registered', 67, 'App\\User', 67, 'App\\User', '{\"name\":\"mmks\",\"by\":\"mmks\"}', '2021-04-08 16:19:38', '2021-04-08 16:19:38'),
(717, 'default', 'Account signed-in', 67, 'App\\User', 67, 'App\\User', '{\"name\":\"mmks\",\"by\":\"mmks\"}', '2021-04-08 16:19:38', '2021-04-08 16:19:38'),
(718, 'default', 'Account signed-out', 56, 'App\\User', 56, 'App\\User', '{\"name\":\"goldgeorge\",\"by\":\"goldgeorge\"}', '2021-04-08 16:20:10', '2021-04-08 16:20:10'),
(719, 'default', 'Account signed-in', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-04-08 16:20:41', '2021-04-08 16:20:41'),
(720, 'default', 'Account signed-out', 66, 'App\\User', 66, 'App\\User', '{\"name\":\"Testing Companysdfaf\",\"by\":\"Testing Companysdfaf\"}', '2021-04-08 16:28:52', '2021-04-08 16:28:52'),
(721, 'default', 'Account signed-in', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-04-08 16:29:11', '2021-04-08 16:29:11'),
(722, 'default', 'Account signed-out', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-04-08 16:32:48', '2021-04-08 16:32:48'),
(723, 'default', 'Account signed-in', 56, 'App\\User', 56, 'App\\User', '{\"name\":\"goldgeorge\",\"by\":\"goldgeorge\"}', '2021-04-08 16:32:57', '2021-04-08 16:32:57'),
(724, 'default', 'Account signed-in', 56, 'App\\User', 56, 'App\\User', '{\"name\":\"goldgeorge\",\"by\":\"goldgeorge\"}', '2021-04-08 16:33:39', '2021-04-08 16:33:39'),
(725, 'default', 'Updated profile', 56, 'App\\User', 56, 'App\\User', '{\"name\":\"goldgeorge\",\"by\":\"goldgeorge\"}', '2021-04-08 16:34:01', '2021-04-08 16:34:01'),
(726, 'default', 'Account signed-out', 56, 'App\\User', 56, 'App\\User', '{\"name\":\"goldgeorge\",\"by\":\"goldgeorge\"}', '2021-04-08 16:34:06', '2021-04-08 16:34:06'),
(727, 'default', 'Account signed-in', 56, 'App\\User', 56, 'App\\User', '{\"name\":\"goldgeorge\",\"by\":\"goldgeorge\"}', '2021-04-08 16:34:24', '2021-04-08 16:34:24'),
(728, 'default', 'Account signed-out', 56, 'App\\User', 56, 'App\\User', '{\"name\":\"goldgeorge\",\"by\":\"goldgeorge\"}', '2021-04-08 16:36:27', '2021-04-08 16:36:27'),
(729, 'default', 'Account signed-in', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-04-08 16:36:30', '2021-04-08 16:36:30'),
(730, 'default', 'Account signed-in', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-04-08 16:55:41', '2021-04-08 16:55:41'),
(731, 'default', 'Updated profile', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-04-08 16:56:07', '2021-04-08 16:56:07'),
(732, 'default', 'Account signed-out', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-04-08 16:56:12', '2021-04-08 16:56:12'),
(733, 'default', 'Account signed-in', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-04-08 16:56:16', '2021-04-08 16:56:16'),
(734, 'default', 'Updated profile', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-04-08 17:43:51', '2021-04-08 17:43:51'),
(735, 'default', 'Account signed-in', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-04-08 17:46:10', '2021-04-08 17:46:10'),
(736, 'default', 'Account signed-out', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-04-08 17:46:55', '2021-04-08 17:46:55'),
(737, 'default', 'Account signed-in', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-04-08 17:47:04', '2021-04-08 17:47:04'),
(738, 'default', 'Account signed-out', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-04-08 17:47:47', '2021-04-08 17:47:47'),
(739, 'default', 'Account signed-in', 1, 'App\\User', 1, 'App\\User', '{\"name\":\"admin\",\"by\":\"admin\"}', '2021-04-08 17:47:55', '2021-04-08 17:47:55'),
(740, 'default', 'Updated profile', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-04-08 17:49:12', '2021-04-08 17:49:12'),
(741, 'default', 'Account signed-in', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-04-08 20:04:24', '2021-04-08 20:04:24'),
(742, 'default', 'Account signed-in', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-04-08 21:03:10', '2021-04-08 21:03:10'),
(743, 'default', 'Account signed-in', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-04-08 21:18:31', '2021-04-08 21:18:31'),
(744, 'default', 'Account signed-in', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-04-09 06:54:56', '2021-04-09 06:54:56'),
(745, 'default', 'Account signed-out', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-04-09 06:56:39', '2021-04-09 06:56:39'),
(746, 'default', 'Account signed-in', 46, 'App\\User', 46, 'App\\User', '{\"name\":\"rakibmia\",\"by\":\"rakibmia\"}', '2021-04-09 06:56:49', '2021-04-09 06:56:49'),
(747, 'default', 'Account signed-in', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-04-09 07:00:06', '2021-04-09 07:00:06'),
(748, 'default', 'Updated profile', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-04-09 07:00:43', '2021-04-09 07:00:43'),
(749, 'default', 'Account signed-out', 46, 'App\\User', 46, 'App\\User', '{\"name\":\"rakibmia\",\"by\":\"rakibmia\"}', '2021-04-09 07:01:06', '2021-04-09 07:01:06'),
(750, 'default', 'Account signed-in', 1, 'App\\User', 1, 'App\\User', '{\"name\":\"admin\",\"by\":\"admin\"}', '2021-04-09 07:01:14', '2021-04-09 07:01:14'),
(751, 'default', 'Account signed-out', 1, 'App\\User', 1, 'App\\User', '{\"name\":\"admin\",\"by\":\"admin\"}', '2021-04-09 07:02:41', '2021-04-09 07:02:41'),
(752, 'default', 'Account signed-in', 46, 'App\\User', 46, 'App\\User', '{\"name\":\"rakibmia\",\"by\":\"rakibmia\"}', '2021-04-09 07:02:53', '2021-04-09 07:02:53'),
(753, 'default', 'Account signed-out', 46, 'App\\User', 46, 'App\\User', '{\"name\":\"rakibmia\",\"by\":\"rakibmia\"}', '2021-04-09 07:03:15', '2021-04-09 07:03:15'),
(754, 'default', 'Account signed-in', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-04-09 07:03:26', '2021-04-09 07:03:26'),
(755, 'default', 'Account signed-out', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-04-09 07:06:09', '2021-04-09 07:06:09'),
(756, 'default', 'Account signed-in', 56, 'App\\User', 56, 'App\\User', '{\"name\":\"goldgeorge\",\"by\":\"goldgeorge\"}', '2021-04-09 07:06:23', '2021-04-09 07:06:23'),
(757, 'default', 'Account signed-out', 56, 'App\\User', 56, 'App\\User', '{\"name\":\"goldgeorge\",\"by\":\"goldgeorge\"}', '2021-04-09 07:07:21', '2021-04-09 07:07:21'),
(758, 'default', 'Account signed-in', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-04-09 07:07:24', '2021-04-09 07:07:24'),
(759, 'default', 'Account signed-out', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-04-09 07:19:32', '2021-04-09 07:19:32'),
(760, 'default', 'Account signed-in', 56, 'App\\User', 56, 'App\\User', '{\"name\":\"goldgeorge\",\"by\":\"goldgeorge\"}', '2021-04-09 07:19:44', '2021-04-09 07:19:44'),
(761, 'default', 'Account signed-out', 56, 'App\\User', 56, 'App\\User', '{\"name\":\"goldgeorge\",\"by\":\"goldgeorge\"}', '2021-04-09 07:23:02', '2021-04-09 07:23:02'),
(762, 'default', 'Account signed-in', 56, 'App\\User', 56, 'App\\User', '{\"name\":\"goldgeorge\",\"by\":\"goldgeorge\"}', '2021-04-09 07:23:06', '2021-04-09 07:23:06'),
(763, 'default', 'Account signed-out', 56, 'App\\User', 56, 'App\\User', '{\"name\":\"goldgeorge\",\"by\":\"goldgeorge\"}', '2021-04-09 07:23:08', '2021-04-09 07:23:08'),
(764, 'default', 'Account signed-in', 56, 'App\\User', 56, 'App\\User', '{\"name\":\"goldgeorge\",\"by\":\"goldgeorge\"}', '2021-04-09 07:23:11', '2021-04-09 07:23:11'),
(765, 'default', 'Account signed-out', 56, 'App\\User', 56, 'App\\User', '{\"name\":\"goldgeorge\",\"by\":\"goldgeorge\"}', '2021-04-09 07:23:22', '2021-04-09 07:23:22'),
(766, 'default', 'Account signed-in', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-04-09 07:23:25', '2021-04-09 07:23:25'),
(767, 'default', 'Account signed-out', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-04-09 07:23:34', '2021-04-09 07:23:34'),
(768, 'default', 'Account signed-in', 1, 'App\\User', 1, 'App\\User', '{\"name\":\"admin\",\"by\":\"admin\"}', '2021-04-09 07:23:38', '2021-04-09 07:23:38'),
(769, 'default', 'Account signed-in', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-04-09 07:35:01', '2021-04-09 07:35:01'),
(770, 'default', 'Updated profile', 1, 'App\\User', 1, 'App\\User', '{\"name\":\"admin\",\"by\":\"admin\"}', '2021-04-09 07:50:07', '2021-04-09 07:50:07'),
(771, 'default', 'Account signed-in', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-04-09 08:14:59', '2021-04-09 08:14:59'),
(772, 'default', 'Account signed-out', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-04-09 08:15:19', '2021-04-09 08:15:19'),
(773, 'default', 'Account signed-in', 1, 'App\\User', 1, 'App\\User', '{\"name\":\"admin\",\"by\":\"admin\"}', '2021-04-09 08:15:21', '2021-04-09 08:15:21'),
(774, 'default', 'Account signed-out', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-04-09 08:26:15', '2021-04-09 08:26:15'),
(775, 'default', 'Account signed-in', 1, 'App\\User', 1, 'App\\User', '{\"name\":\"admin\",\"by\":\"admin\"}', '2021-04-09 08:26:24', '2021-04-09 08:26:24'),
(776, 'default', 'Updated profile', 1, 'App\\User', 1, 'App\\User', '{\"name\":null,\"by\":\"admin\"}', '2021-04-09 08:50:30', '2021-04-09 08:50:30'),
(777, 'default', 'Account signed-in', 1, 'App\\User', 1, 'App\\User', '{\"name\":\"admin@demo.com\",\"by\":\"admin@demo.com\"}', '2021-04-09 08:53:58', '2021-04-09 08:53:58'),
(778, 'default', 'Account signed-out', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-04-09 08:58:47', '2021-04-09 08:58:47'),
(779, 'default', 'Account signed-in', 1, 'App\\User', 1, 'App\\User', '{\"name\":\"admin@demo.com\",\"by\":\"admin@demo.com\"}', '2021-04-09 08:58:50', '2021-04-09 08:58:50'),
(780, 'default', 'Updated profile', 1, 'App\\User', 1, 'App\\User', '{\"name\":null,\"by\":null}', '2021-04-09 09:21:45', '2021-04-09 09:21:45'),
(781, 'default', 'Updated profile', 1, 'App\\User', 1, 'App\\User', '{\"name\":\"admin\",\"by\":null}', '2021-04-09 09:25:17', '2021-04-09 09:25:17'),
(782, 'default', 'Updated profile', 1, 'App\\User', 1, 'App\\User', '{\"name\":null,\"by\":\"admin\"}', '2021-04-09 09:35:43', '2021-04-09 09:35:43'),
(783, 'default', 'Account signed-out', 1, 'App\\User', 1, 'App\\User', '{\"name\":\"admin@demo.com\",\"by\":\"admin@demo.com\"}', '2021-04-09 09:36:19', '2021-04-09 09:36:19'),
(784, 'default', 'Account signed-out', 1, 'App\\User', 1, 'App\\User', '{\"name\":\"admin@demo.com\",\"by\":\"admin@demo.com\"}', '2021-04-09 09:36:22', '2021-04-09 09:36:22'),
(785, 'default', 'Account signed-in', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-04-09 09:36:26', '2021-04-09 09:36:26'),
(786, 'default', 'Account signed-in', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-04-09 09:36:38', '2021-04-09 09:36:38'),
(787, 'default', 'Account signed-out', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-04-09 09:36:38', '2021-04-09 09:36:38'),
(788, 'default', 'Account signed-in', 1, 'App\\User', 1, 'App\\User', '{\"name\":\"admin@demo.com\",\"by\":\"admin@demo.com\"}', '2021-04-09 09:36:42', '2021-04-09 09:36:42'),
(789, 'default', 'Account signed-out', 1, 'App\\User', 1, 'App\\User', '{\"name\":\"admin@demo.com\",\"by\":\"admin@demo.com\"}', '2021-04-09 09:39:49', '2021-04-09 09:39:49'),
(790, 'default', 'Account signed-in', 1, 'App\\User', 1, 'App\\User', '{\"name\":\"admin@demo.com\",\"by\":\"admin@demo.com\"}', '2021-04-09 09:39:54', '2021-04-09 09:39:54'),
(791, 'default', 'Account signed-out', 1, 'App\\User', 1, 'App\\User', '{\"name\":\"admin@demo.com\",\"by\":\"admin@demo.com\"}', '2021-04-09 09:40:27', '2021-04-09 09:40:27'),
(792, 'default', 'Account signed-in', 1, 'App\\User', 1, 'App\\User', '{\"name\":\"admin@demo.com\",\"by\":\"admin@demo.com\"}', '2021-04-09 09:40:30', '2021-04-09 09:40:30'),
(793, 'default', 'Account signed-out', 1, 'App\\User', 1, 'App\\User', '{\"name\":\"admin@demo.com\",\"by\":\"admin@demo.com\"}', '2021-04-09 09:41:10', '2021-04-09 09:41:10'),
(794, 'default', 'Account signed-in', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-04-09 09:41:28', '2021-04-09 09:41:28'),
(795, 'default', 'Account signed-out', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-04-09 09:43:12', '2021-04-09 09:43:12'),
(796, 'default', 'Account signed-in', 1, 'App\\User', 1, 'App\\User', '{\"name\":\"admin@demo.com\",\"by\":\"admin@demo.com\"}', '2021-04-09 09:43:19', '2021-04-09 09:43:19'),
(797, 'default', 'Updated profile', 1, 'App\\User', 1, 'App\\User', '{\"name\":null,\"by\":null}', '2021-04-09 09:44:03', '2021-04-09 09:44:03'),
(798, 'default', 'Account signed-out', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-04-09 09:46:11', '2021-04-09 09:46:11'),
(799, 'default', 'Account signed-in', 1, 'App\\User', 1, 'App\\User', '{\"name\":\"admin@demo.com\",\"by\":\"admin@demo.com\"}', '2021-04-09 09:46:14', '2021-04-09 09:46:14'),
(800, 'default', 'Updated profile', 1, 'App\\User', 1, 'App\\User', '{\"name\":null,\"by\":null}', '2021-04-09 09:46:29', '2021-04-09 09:46:29'),
(801, 'default', 'Updated profile', 1, 'App\\User', 1, 'App\\User', '{\"name\":null,\"by\":null}', '2021-04-09 09:47:11', '2021-04-09 09:47:11'),
(802, 'default', 'Updated profile', 1, 'App\\User', 1, 'App\\User', '{\"name\":\"admin\",\"by\":null}', '2021-04-09 09:48:04', '2021-04-09 09:48:04'),
(803, 'default', 'Updated profile', 1, 'App\\User', 1, 'App\\User', '{\"name\":\"admin\",\"by\":\"admin\"}', '2021-04-09 09:48:09', '2021-04-09 09:48:09'),
(804, 'default', 'Updated profile', 1, 'App\\User', 1, 'App\\User', '{\"name\":\"admin\",\"by\":\"admin\"}', '2021-04-09 09:50:16', '2021-04-09 09:50:16'),
(805, 'default', 'Account signed-out', 1, 'App\\User', 1, 'App\\User', '{\"name\":\"admin\",\"by\":\"admin\"}', '2021-04-09 09:57:28', '2021-04-09 09:57:28'),
(806, 'default', 'Account signed-in', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-04-09 09:57:39', '2021-04-09 09:57:39'),
(807, 'default', 'Account signed-out', 1, 'App\\User', 1, 'App\\User', '{\"name\":\"admin\",\"by\":\"admin\"}', '2021-04-09 10:03:49', '2021-04-09 10:03:49'),
(808, 'default', 'Account signed-in', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-04-09 10:03:52', '2021-04-09 10:03:52'),
(809, 'default', 'Account signed-out', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-04-09 11:06:19', '2021-04-09 11:06:19'),
(810, 'default', 'Account signed-in', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-04-09 11:06:22', '2021-04-09 11:06:22'),
(811, 'default', 'Account signed-out', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-04-09 11:07:16', '2021-04-09 11:07:16'),
(812, 'default', 'Account signed-in', 56, 'App\\User', 56, 'App\\User', '{\"name\":\"goldgeorge\",\"by\":\"goldgeorge\"}', '2021-04-09 11:07:31', '2021-04-09 11:07:31'),
(813, 'default', 'Account signed-out', 56, 'App\\User', 56, 'App\\User', '{\"name\":\"goldgeorge\",\"by\":\"goldgeorge\"}', '2021-04-09 11:09:17', '2021-04-09 11:09:17'),
(814, 'default', 'Account signed-in', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-04-09 11:09:21', '2021-04-09 11:09:21'),
(815, 'default', 'Account signed-out', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-04-09 11:10:12', '2021-04-09 11:10:12'),
(816, 'default', 'Account signed-in', 46, 'App\\User', 46, 'App\\User', '{\"name\":\"rakibmia\",\"by\":\"rakibmia\"}', '2021-04-09 11:10:19', '2021-04-09 11:10:19'),
(817, 'default', 'Account signed-out', 46, 'App\\User', 46, 'App\\User', '{\"name\":\"rakibmia\",\"by\":\"rakibmia\"}', '2021-04-09 11:10:42', '2021-04-09 11:10:42'),
(818, 'default', 'Account signed-in', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-04-09 11:10:51', '2021-04-09 11:10:51'),
(819, 'default', 'Account signed-out', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-04-09 11:14:33', '2021-04-09 11:14:33'),
(820, 'default', 'Account signed-in', 46, 'App\\User', 46, 'App\\User', '{\"name\":\"rakibmia\",\"by\":\"rakibmia\"}', '2021-04-09 11:14:42', '2021-04-09 11:14:42'),
(821, 'default', 'Account signed-out', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-04-09 11:17:24', '2021-04-09 11:17:24'),
(822, 'default', 'Account signed-in', 56, 'App\\User', 56, 'App\\User', '{\"name\":\"goldgeorge\",\"by\":\"goldgeorge\"}', '2021-04-09 11:17:29', '2021-04-09 11:17:29'),
(823, 'default', 'Account signed-in', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-04-09 11:19:52', '2021-04-09 11:19:52'),
(824, 'default', 'Account signed-out', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-04-09 11:20:30', '2021-04-09 11:20:30'),
(825, 'default', 'Account signed-in', 56, 'App\\User', 56, 'App\\User', '{\"name\":\"goldgeorge\",\"by\":\"goldgeorge\"}', '2021-04-09 11:20:41', '2021-04-09 11:20:41'),
(826, 'default', 'Account signed-out', 56, 'App\\User', 56, 'App\\User', '{\"name\":\"goldgeorge\",\"by\":\"goldgeorge\"}', '2021-04-09 11:29:49', '2021-04-09 11:29:49'),
(827, 'default', 'Account signed-in', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-04-09 11:29:51', '2021-04-09 11:29:51'),
(828, 'default', 'Account signed-out', 46, 'App\\User', 46, 'App\\User', '{\"name\":\"rakibmia\",\"by\":\"rakibmia\"}', '2021-04-09 11:35:44', '2021-04-09 11:35:44'),
(829, 'default', 'Account signed-in', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-04-09 11:35:59', '2021-04-09 11:35:59'),
(830, 'default', 'Account signed-in', 56, 'App\\User', 56, 'App\\User', '{\"name\":\"goldgeorge\",\"by\":\"goldgeorge\"}', '2021-04-09 11:41:51', '2021-04-09 11:41:51'),
(831, 'default', 'Account signed-in', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-04-09 11:46:32', '2021-04-09 11:46:32'),
(832, 'default', 'Account signed-out', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-04-09 11:47:07', '2021-04-09 11:47:07'),
(833, 'default', 'Account signed-in', 56, 'App\\User', 56, 'App\\User', '{\"name\":\"goldgeorge\",\"by\":\"goldgeorge\"}', '2021-04-09 11:47:10', '2021-04-09 11:47:10'),
(834, 'default', 'Account signed-out', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-04-09 11:47:46', '2021-04-09 11:47:46'),
(835, 'default', 'Account signed-in', 56, 'App\\User', 56, 'App\\User', '{\"name\":\"goldgeorge\",\"by\":\"goldgeorge\"}', '2021-04-09 11:47:57', '2021-04-09 11:47:57'),
(836, 'default', 'Account signed-out', 56, 'App\\User', 56, 'App\\User', '{\"name\":\"goldgeorge\",\"by\":\"goldgeorge\"}', '2021-04-09 11:48:48', '2021-04-09 11:48:48'),
(837, 'default', 'Account signed-in', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-04-09 11:48:52', '2021-04-09 11:48:52'),
(838, 'default', 'Account signed-out', 56, 'App\\User', 56, 'App\\User', '{\"name\":\"goldgeorge\",\"by\":\"goldgeorge\"}', '2021-04-09 11:51:25', '2021-04-09 11:51:25'),
(839, 'default', 'Account signed-in', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-04-09 11:51:37', '2021-04-09 11:51:37'),
(840, 'default', 'Account signed-out', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-04-09 11:55:00', '2021-04-09 11:55:00'),
(841, 'default', 'Account signed-in', 56, 'App\\User', 56, 'App\\User', '{\"name\":\"goldgeorge\",\"by\":\"goldgeorge\"}', '2021-04-09 11:55:09', '2021-04-09 11:55:09'),
(842, 'default', 'Account signed-out', 56, 'App\\User', 56, 'App\\User', '{\"name\":\"goldgeorge\",\"by\":\"goldgeorge\"}', '2021-04-09 11:59:37', '2021-04-09 11:59:37'),
(843, 'default', 'Account signed-in', 46, 'App\\User', 46, 'App\\User', '{\"name\":\"rakibmia\",\"by\":\"rakibmia\"}', '2021-04-09 11:59:44', '2021-04-09 11:59:44'),
(844, 'default', 'Account signed-out', 46, 'App\\User', 46, 'App\\User', '{\"name\":\"rakibmia\",\"by\":\"rakibmia\"}', '2021-04-09 11:59:54', '2021-04-09 11:59:54'),
(845, 'default', 'Account signed-in', 41, 'App\\User', 41, 'App\\User', '{\"name\":\"konockreza\",\"by\":\"konockreza\"}', '2021-04-09 12:00:04', '2021-04-09 12:00:04'),
(846, 'default', 'Account signed-out', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-04-09 12:08:45', '2021-04-09 12:08:45'),
(847, 'default', 'Account signed-in', 46, 'App\\User', 46, 'App\\User', '{\"name\":\"rakibmia\",\"by\":\"rakibmia\"}', '2021-04-09 12:09:06', '2021-04-09 12:09:06'),
(848, 'default', 'Account signed-out', 41, 'App\\User', 41, 'App\\User', '{\"name\":\"konockreza\",\"by\":\"konockreza\"}', '2021-04-09 12:46:45', '2021-04-09 12:46:45'),
(849, 'default', 'Account signed-in', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-04-09 12:46:53', '2021-04-09 12:46:53'),
(850, 'default', 'Account signed-in', 46, 'App\\User', 46, 'App\\User', '{\"name\":\"rakibmia\",\"by\":\"rakibmia\"}', '2021-04-09 13:20:26', '2021-04-09 13:20:26'),
(851, 'default', 'Account signed-in', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-04-09 15:35:53', '2021-04-09 15:35:53'),
(852, 'default', 'Account signed-in', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-04-09 15:40:44', '2021-04-09 15:40:44'),
(853, 'default', 'Account signed-in', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-04-11 08:31:06', '2021-04-11 08:31:06'),
(854, 'default', 'Account signed-in', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-04-11 08:31:24', '2021-04-11 08:31:24'),
(855, 'default', 'Account signed-in', 1, 'App\\User', 1, 'App\\User', '{\"name\":\"admin\",\"by\":\"admin\"}', '2021-04-11 14:57:10', '2021-04-11 14:57:10'),
(856, 'default', 'Account signed-out', 1, 'App\\User', 1, 'App\\User', '{\"name\":\"admin\",\"by\":\"admin\"}', '2021-04-11 14:57:20', '2021-04-11 14:57:20'),
(857, 'default', 'Account signed-in', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-04-11 14:57:36', '2021-04-11 14:57:36'),
(858, 'default', 'Account signed-in', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-04-11 15:02:58', '2021-04-11 15:02:58'),
(859, 'default', 'Account signed-in', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-04-12 01:41:23', '2021-04-12 01:41:23'),
(860, 'default', 'Account signed-out', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-04-12 01:50:13', '2021-04-12 01:50:13'),
(861, 'default', 'Account signed-in', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-04-12 02:41:45', '2021-04-12 02:41:45'),
(862, 'default', 'Account signed-out', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-04-12 02:44:31', '2021-04-12 02:44:31'),
(863, 'default', 'Account signed-in', 1, 'App\\User', 1, 'App\\User', '{\"name\":\"admin\",\"by\":\"admin\"}', '2021-04-12 02:44:59', '2021-04-12 02:44:59'),
(864, 'default', 'User was deleted', 20, 'App\\User', 1, 'App\\User', '{\"name\":\"kader\",\"by\":\"admin\",\"user_id\":0}', '2021-04-12 02:45:14', '2021-04-12 02:45:14'),
(865, 'default', 'Account signed-in', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-04-12 04:56:23', '2021-04-12 04:56:23'),
(866, 'default', 'Account signed-out', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-04-12 04:57:18', '2021-04-12 04:57:18'),
(867, 'default', 'Account signed-in', 1, 'App\\User', 1, 'App\\User', '{\"name\":\"admin\",\"by\":\"admin\"}', '2021-04-12 04:57:23', '2021-04-12 04:57:23'),
(868, 'default', 'User was deleted', 49, 'App\\User', 1, 'App\\User', '{\"name\":\"azerty\",\"by\":\"admin\",\"user_id\":0}', '2021-04-12 04:57:33', '2021-04-12 04:57:33'),
(869, 'default', 'User was deleted', 44, 'App\\User', 1, 'App\\User', '{\"name\":\"Company2\",\"by\":\"admin\",\"user_id\":0}', '2021-04-12 04:58:30', '2021-04-12 04:58:30'),
(870, 'default', 'Updated profile', 1, 'App\\User', 1, 'App\\User', '{\"name\":\"admin\",\"by\":\"admin\"}', '2021-04-12 04:58:39', '2021-04-12 04:58:39'),
(871, 'default', 'Account signed-out', 1, 'App\\User', 1, 'App\\User', '{\"name\":\"admin\",\"by\":\"admin\"}', '2021-04-12 04:58:44', '2021-04-12 04:58:44'),
(872, 'default', 'Account signed-in', 56, 'App\\User', 56, 'App\\User', '{\"name\":\"goldgeorge\",\"by\":\"goldgeorge\"}', '2021-04-12 04:58:48', '2021-04-12 04:58:48'),
(873, 'default', 'Account signed-in', 1, 'App\\User', 1, 'App\\User', '{\"name\":\"admin\",\"by\":\"admin\"}', '2021-04-12 05:37:54', '2021-04-12 05:37:54'),
(874, 'default', 'User was deleted', 54, 'App\\User', 1, 'App\\User', '{\"name\":\"Encoder Ultimate\",\"by\":\"admin\",\"user_id\":0}', '2021-04-12 05:38:12', '2021-04-12 05:38:12'),
(875, 'default', 'Account signed-in', 1, 'App\\User', 1, 'App\\User', '{\"name\":\"admin\",\"by\":\"admin\"}', '2021-04-12 13:02:17', '2021-04-12 13:02:17'),
(876, 'default', 'User was deleted', 59, 'App\\User', 1, 'App\\User', '{\"name\":\"Encoderultimate\",\"by\":\"admin\",\"user_id\":0}', '2021-04-12 13:02:29', '2021-04-12 13:02:29'),
(877, 'default', 'Account signed-in', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-04-13 13:54:49', '2021-04-13 13:54:49'),
(878, 'default', 'Account signed-out', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-04-13 14:00:24', '2021-04-13 14:00:24'),
(879, 'default', 'Account signed-in', 1, 'App\\User', 1, 'App\\User', '{\"name\":\"admin\",\"by\":\"admin\"}', '2021-04-13 14:02:06', '2021-04-13 14:02:06'),
(880, 'default', 'Account signed-out', 1, 'App\\User', 1, 'App\\User', '{\"name\":\"admin\",\"by\":\"admin\"}', '2021-04-13 14:40:40', '2021-04-13 14:40:40'),
(881, 'default', 'Account signed-in', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-04-13 14:40:44', '2021-04-13 14:40:44'),
(882, 'default', 'Account signed-out', 1, 'App\\User', 1, 'App\\User', '{\"name\":\"admin\",\"by\":\"admin\"}', '2021-04-14 07:59:25', '2021-04-14 07:59:25'),
(883, 'default', 'Account signed-in', 1, 'App\\User', 1, 'App\\User', '{\"name\":\"admin\",\"by\":\"admin\"}', '2021-04-14 07:59:37', '2021-04-14 07:59:37'),
(884, 'default', 'Account signed-out', 1, 'App\\User', 1, 'App\\User', '{\"name\":\"admin\",\"by\":\"admin\"}', '2021-04-14 07:59:58', '2021-04-14 07:59:58'),
(885, 'default', 'Account signed-in', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-04-14 08:00:04', '2021-04-14 08:00:04'),
(886, 'default', 'Account signed-out', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-04-14 08:06:21', '2021-04-14 08:06:21'),
(887, 'default', 'Account signed-in', 1, 'App\\User', 1, 'App\\User', '{\"name\":\"admin\",\"by\":\"admin\"}', '2021-04-14 08:06:29', '2021-04-14 08:06:29'),
(888, 'default', 'Account signed-in', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-04-14 08:31:07', '2021-04-14 08:31:07'),
(889, 'default', 'Account signed-out', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-04-14 08:31:23', '2021-04-14 08:31:23'),
(890, 'default', 'Account signed-in', 1, 'App\\User', 1, 'App\\User', '{\"name\":\"admin\",\"by\":\"admin\"}', '2021-04-14 08:31:25', '2021-04-14 08:31:25'),
(891, 'default', 'Account signed-in', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-04-14 08:59:32', '2021-04-14 08:59:32'),
(892, 'default', 'Account signed-in', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-04-14 09:00:47', '2021-04-14 09:00:47'),
(893, 'default', 'Account signed-in', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-04-14 09:02:15', '2021-04-14 09:02:15'),
(894, 'default', 'Account signed-in', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-04-14 09:03:03', '2021-04-14 09:03:03'),
(895, 'default', 'Account signed-in', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-04-14 09:05:16', '2021-04-14 09:05:16'),
(896, 'default', 'Account signed-in', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-04-14 09:18:49', '2021-04-14 09:18:49'),
(897, 'default', 'Account signed-out', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-04-14 09:19:10', '2021-04-14 09:19:10'),
(898, 'default', 'Account signed-in', 1, 'App\\User', 1, 'App\\User', '{\"name\":\"admin\",\"by\":\"admin\"}', '2021-04-14 09:19:14', '2021-04-14 09:19:14'),
(899, 'default', 'Account signed-in', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-04-14 09:33:09', '2021-04-14 09:33:09'),
(900, 'default', 'Account signed-in', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-04-14 09:36:58', '2021-04-14 09:36:58'),
(901, 'default', 'Account signed-in', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-04-14 09:42:29', '2021-04-14 09:42:29'),
(902, 'default', 'Account signed-in', 1, 'App\\User', 1, 'App\\User', '{\"name\":\"admin\",\"by\":\"admin\"}', '2021-04-14 10:30:38', '2021-04-14 10:30:38'),
(903, 'default', 'Updated profile', 1, 'App\\User', 1, 'App\\User', '{\"name\":\"admin\",\"by\":\"admin\"}', '2021-04-14 10:31:59', '2021-04-14 10:31:59'),
(904, 'default', 'Account signed-out', 1, 'App\\User', 1, 'App\\User', '{\"name\":\"admin\",\"by\":\"admin\"}', '2021-04-14 10:33:33', '2021-04-14 10:33:33'),
(905, 'default', 'Account signed-in', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-04-14 10:33:38', '2021-04-14 10:33:38'),
(906, 'default', 'Account signed-in', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-04-14 10:41:58', '2021-04-14 10:41:58'),
(907, 'default', 'Account signed-out', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-04-14 10:42:51', '2021-04-14 10:42:51'),
(908, 'default', 'Account signed-in', 62, 'App\\User', 62, 'App\\User', '{\"name\":\"testinguser\",\"by\":\"testinguser\"}', '2021-04-14 10:44:12', '2021-04-14 10:44:12'),
(909, 'default', 'Account signed-out', 62, 'App\\User', 62, 'App\\User', '{\"name\":\"testinguser\",\"by\":\"testinguser\"}', '2021-04-14 10:44:46', '2021-04-14 10:44:46'),
(910, 'default', 'Account signed-in', 1, 'App\\User', 1, 'App\\User', '{\"name\":\"admin\",\"by\":\"admin\"}', '2021-04-14 10:44:49', '2021-04-14 10:44:49'),
(911, 'default', 'Account signed-out', 1, 'App\\User', 1, 'App\\User', '{\"name\":\"admin\",\"by\":\"admin\"}', '2021-04-14 10:45:03', '2021-04-14 10:45:03'),
(912, 'default', 'Account signed-in', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-04-14 10:45:06', '2021-04-14 10:45:06'),
(913, 'default', 'Account signed-out', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-04-14 10:45:29', '2021-04-14 10:45:29'),
(914, 'default', 'Account signed-in', 62, 'App\\User', 62, 'App\\User', '{\"name\":\"testinguser\",\"by\":\"testinguser\"}', '2021-04-14 10:45:35', '2021-04-14 10:45:35'),
(915, 'default', 'Account signed-out', 62, 'App\\User', 62, 'App\\User', '{\"name\":\"testinguser\",\"by\":\"testinguser\"}', '2021-04-14 10:47:13', '2021-04-14 10:47:13'),
(916, 'default', 'Account signed-in', 1, 'App\\User', 1, 'App\\User', '{\"name\":\"admin\",\"by\":\"admin\"}', '2021-04-14 10:47:16', '2021-04-14 10:47:16'),
(917, 'default', 'Account signed-in', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-04-14 10:50:43', '2021-04-14 10:50:43'),
(918, 'default', 'Account signed-out', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-04-14 10:50:56', '2021-04-14 10:50:56'),
(919, 'default', 'Account signed-in', 1, 'App\\User', 1, 'App\\User', '{\"name\":\"admin\",\"by\":\"admin\"}', '2021-04-14 10:50:58', '2021-04-14 10:50:58'),
(920, 'default', 'Account signed-in', 1, 'App\\User', 1, 'App\\User', '{\"name\":\"admin\",\"by\":\"admin\"}', '2021-04-14 10:52:43', '2021-04-14 10:52:43'),
(921, 'default', 'Account signed-out', 1, 'App\\User', 1, 'App\\User', '{\"name\":\"admin\",\"by\":\"admin\"}', '2021-04-14 10:54:33', '2021-04-14 10:54:33');
INSERT INTO `activity_log` (`id`, `log_name`, `description`, `subject_id`, `subject_type`, `causer_id`, `causer_type`, `properties`, `created_at`, `updated_at`) VALUES
(922, 'default', 'Account signed-in', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-04-14 10:55:14', '2021-04-14 10:55:14'),
(923, 'default', 'Account signed-in', 1, 'App\\User', 1, 'App\\User', '{\"name\":\"admin\",\"by\":\"admin\"}', '2021-04-14 10:57:56', '2021-04-14 10:57:56'),
(924, 'default', 'Account signed-out', 1, 'App\\User', 1, 'App\\User', '{\"name\":\"admin\",\"by\":\"admin\"}', '2021-04-14 10:58:19', '2021-04-14 10:58:19'),
(925, 'default', 'Account signed-in', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-04-14 10:58:21', '2021-04-14 10:58:21'),
(926, 'default', 'Account signed-in', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-04-14 11:04:16', '2021-04-14 11:04:16'),
(927, 'default', 'Account signed-in', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-04-14 11:11:27', '2021-04-14 11:11:27'),
(928, 'default', 'Account signed-in', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-04-14 11:12:35', '2021-04-14 11:12:35'),
(929, 'default', 'Account signed-in', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-04-14 11:13:30', '2021-04-14 11:13:30'),
(930, 'default', 'Account signed-in', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-04-14 11:16:57', '2021-04-14 11:16:57'),
(931, 'default', 'Account signed-in', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-04-14 11:19:19', '2021-04-14 11:19:19'),
(932, 'default', 'Account signed-in', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-04-14 11:19:53', '2021-04-14 11:19:53'),
(933, 'default', 'Account signed-in', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-04-14 11:24:26', '2021-04-14 11:24:26'),
(934, 'default', 'Account signed-in', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-04-14 11:25:14', '2021-04-14 11:25:14'),
(935, 'default', 'Account signed-in', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-04-14 11:25:57', '2021-04-14 11:25:57'),
(936, 'default', 'Account signed-in', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-04-14 11:30:39', '2021-04-14 11:30:39'),
(937, 'default', 'Account signed-in', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-04-14 11:31:40', '2021-04-14 11:31:40'),
(938, 'default', 'Account signed-in', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-04-14 11:35:45', '2021-04-14 11:35:45'),
(939, 'default', 'Account signed-in', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-04-14 11:38:02', '2021-04-14 11:38:02'),
(940, 'default', 'Account signed-in', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-04-14 11:39:27', '2021-04-14 11:39:27'),
(941, 'default', 'Account signed-in', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-04-14 11:40:42', '2021-04-14 11:40:42'),
(942, 'default', 'Account signed-in', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-04-14 11:43:32', '2021-04-14 11:43:32'),
(943, 'default', 'Account signed-in', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-04-14 11:47:56', '2021-04-14 11:47:56'),
(944, 'default', 'Account signed-in', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-04-14 11:48:59', '2021-04-14 11:48:59'),
(945, 'default', 'Account signed-in', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-04-14 11:49:50', '2021-04-14 11:49:50'),
(946, 'default', 'Account signed-in', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-04-14 11:50:38', '2021-04-14 11:50:38'),
(947, 'default', 'Account signed-in', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-04-14 11:51:11', '2021-04-14 11:51:11'),
(948, 'default', 'Account signed-in', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-04-14 11:52:34', '2021-04-14 11:52:34'),
(949, 'default', 'Account signed-in', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-04-14 11:54:17', '2021-04-14 11:54:17'),
(950, 'default', 'Account signed-out', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-04-14 12:01:29', '2021-04-14 12:01:29'),
(951, 'default', 'Account signed-in', 62, 'App\\User', 62, 'App\\User', '{\"name\":\"testinguser\",\"by\":\"testinguser\"}', '2021-04-14 12:01:33', '2021-04-14 12:01:33'),
(952, 'default', 'Account signed-out', 62, 'App\\User', 62, 'App\\User', '{\"name\":\"testinguser\",\"by\":\"testinguser\"}', '2021-04-14 12:48:02', '2021-04-14 12:48:02'),
(953, 'default', 'Account signed-in', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-04-14 12:48:09', '2021-04-14 12:48:09'),
(954, 'default', 'Account signed-in', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-04-14 12:50:57', '2021-04-14 12:50:57'),
(955, 'default', 'Account signed-in', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-04-14 12:53:45', '2021-04-14 12:53:45'),
(956, 'default', 'Account signed-out', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-04-14 12:53:59', '2021-04-14 12:53:59'),
(957, 'default', 'Account signed-in', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-04-14 12:54:02', '2021-04-14 12:54:02'),
(958, 'default', 'Account signed-in', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-04-14 16:13:36', '2021-04-14 16:13:36'),
(959, 'default', 'Account signed-in', 46, 'App\\User', 46, 'App\\User', '{\"name\":\"rakibmia\",\"by\":\"rakibmia\"}', '2021-04-14 16:14:07', '2021-04-14 16:14:07'),
(960, 'default', 'Permission assigned to Role was', 3, 'Spatie\\Permission\\Models\\Role', 2, 'App\\User', '{\"name\":\"staff\",\"by\":\"company1\"}', '2021-04-14 16:47:25', '2021-04-14 16:47:25'),
(961, 'default', 'Account signed-out', 46, 'App\\User', 46, 'App\\User', '{\"name\":\"rakibmia\",\"by\":\"rakibmia\"}', '2021-04-14 16:49:49', '2021-04-14 16:49:49'),
(962, 'default', 'Account signed-in', 62, 'App\\User', 62, 'App\\User', '{\"name\":\"testinguser\",\"by\":\"testinguser\"}', '2021-04-14 16:55:56', '2021-04-14 16:55:56'),
(963, 'default', 'Account signed-in', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-04-14 21:44:12', '2021-04-14 21:44:12'),
(964, 'default', 'Account signed-in', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-04-14 22:12:03', '2021-04-14 22:12:03'),
(965, 'default', 'Account signed-in', 46, 'App\\User', 46, 'App\\User', '{\"name\":\"rakibmia\",\"by\":\"rakibmia\"}', '2021-04-15 07:38:25', '2021-04-15 07:38:25'),
(966, 'default', 'Account signed-in', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-04-15 07:46:11', '2021-04-15 07:46:11'),
(967, 'default', 'Account signed-in', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-04-15 07:52:21', '2021-04-15 07:52:21'),
(968, 'default', 'Account signed-in', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-04-15 08:17:13', '2021-04-15 08:17:13'),
(969, 'default', 'Account signed-in', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-04-15 09:41:45', '2021-04-15 09:41:45'),
(970, 'default', 'Account signed-out', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-04-15 09:51:37', '2021-04-15 09:51:37'),
(971, 'default', 'Account signed-in', 62, 'App\\User', 62, 'App\\User', '{\"name\":\"testinguser\",\"by\":\"testinguser\"}', '2021-04-15 09:51:41', '2021-04-15 09:51:41'),
(972, 'default', 'Account signed-out', 62, 'App\\User', 62, 'App\\User', '{\"name\":\"testinguser\",\"by\":\"testinguser\"}', '2021-04-15 09:52:01', '2021-04-15 09:52:01'),
(973, 'default', 'Account signed-in', 56, 'App\\User', 56, 'App\\User', '{\"name\":\"goldgeorge\",\"by\":\"goldgeorge\"}', '2021-04-15 09:52:06', '2021-04-15 09:52:06'),
(974, 'default', 'Account signed-out', 56, 'App\\User', 56, 'App\\User', '{\"name\":\"goldgeorge\",\"by\":\"goldgeorge\"}', '2021-04-15 09:52:19', '2021-04-15 09:52:19'),
(975, 'default', 'Account signed-in', 55, 'App\\User', 55, 'App\\User', '{\"name\":\"papy\",\"by\":\"papy\"}', '2021-04-15 09:52:23', '2021-04-15 09:52:23'),
(976, 'default', 'Account signed-out', 55, 'App\\User', 55, 'App\\User', '{\"name\":\"papy\",\"by\":\"papy\"}', '2021-04-15 09:52:40', '2021-04-15 09:52:40'),
(977, 'default', 'Account signed-in', 56, 'App\\User', 56, 'App\\User', '{\"name\":\"goldgeorge\",\"by\":\"goldgeorge\"}', '2021-04-15 09:52:44', '2021-04-15 09:52:44'),
(978, 'default', 'Account signed-out', 56, 'App\\User', 56, 'App\\User', '{\"name\":\"goldgeorge\",\"by\":\"goldgeorge\"}', '2021-04-15 09:52:56', '2021-04-15 09:52:56'),
(979, 'default', 'Account signed-in', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-04-15 09:57:42', '2021-04-15 09:57:42'),
(980, 'default', 'Account signed-in', 62, 'App\\User', 62, 'App\\User', '{\"name\":\"testinguser\",\"by\":\"testinguser\"}', '2021-04-15 10:06:58', '2021-04-15 10:06:58'),
(981, 'default', 'Account signed-out', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-04-15 10:19:52', '2021-04-15 10:19:52'),
(982, 'default', 'Account signed-in', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-04-15 10:20:05', '2021-04-15 10:20:05'),
(983, 'default', 'Account signed-in', 55, 'App\\User', 55, 'App\\User', '{\"name\":\"papy\",\"by\":\"papy\"}', '2021-04-15 11:10:25', '2021-04-15 11:10:25'),
(984, 'default', 'Account signed-out', 55, 'App\\User', 55, 'App\\User', '{\"name\":\"papy\",\"by\":\"papy\"}', '2021-04-15 11:11:39', '2021-04-15 11:11:39'),
(985, 'default', 'Account signed-in', 56, 'App\\User', 56, 'App\\User', '{\"name\":\"goldgeorge\",\"by\":\"goldgeorge\"}', '2021-04-15 11:11:51', '2021-04-15 11:11:51'),
(986, 'default', 'Account signed-out', 56, 'App\\User', 56, 'App\\User', '{\"name\":\"goldgeorge\",\"by\":\"goldgeorge\"}', '2021-04-15 11:12:06', '2021-04-15 11:12:06'),
(987, 'default', 'Account signed-in', 55, 'App\\User', 55, 'App\\User', '{\"name\":\"papy\",\"by\":\"papy\"}', '2021-04-15 11:12:09', '2021-04-15 11:12:09'),
(988, 'default', 'Account signed-out', 62, 'App\\User', 62, 'App\\User', '{\"name\":\"testinguser\",\"by\":\"testinguser\"}', '2021-04-15 11:12:17', '2021-04-15 11:12:17'),
(989, 'default', 'Account signed-in', 55, 'App\\User', 55, 'App\\User', '{\"name\":\"papy\",\"by\":\"papy\"}', '2021-04-15 11:12:34', '2021-04-15 11:12:34'),
(990, 'default', 'Account signed-out', 55, 'App\\User', 55, 'App\\User', '{\"name\":\"papy\",\"by\":\"papy\"}', '2021-04-15 11:12:54', '2021-04-15 11:12:54'),
(991, 'default', 'Account signed-in', 56, 'App\\User', 56, 'App\\User', '{\"name\":\"goldgeorge\",\"by\":\"goldgeorge\"}', '2021-04-15 11:12:57', '2021-04-15 11:12:57'),
(992, 'default', 'Account signed-out', 56, 'App\\User', 56, 'App\\User', '{\"name\":\"goldgeorge\",\"by\":\"goldgeorge\"}', '2021-04-15 11:14:29', '2021-04-15 11:14:29'),
(993, 'default', 'Account signed-in', 62, 'App\\User', 62, 'App\\User', '{\"name\":\"testinguser\",\"by\":\"testinguser\"}', '2021-04-15 11:14:33', '2021-04-15 11:14:33'),
(994, 'default', 'Account signed-in', 55, 'App\\User', 55, 'App\\User', '{\"name\":\"papy\",\"by\":\"papy\"}', '2021-04-15 13:20:09', '2021-04-15 13:20:09'),
(995, 'default', 'Account signed-in', 46, 'App\\User', 46, 'App\\User', '{\"name\":\"rakibmia\",\"by\":\"rakibmia\"}', '2021-04-16 02:58:26', '2021-04-16 02:58:26'),
(996, 'default', 'Account signed-in', 55, 'App\\User', 55, 'App\\User', '{\"name\":\"papy\",\"by\":\"papy\"}', '2021-04-16 08:05:05', '2021-04-16 08:05:05'),
(997, 'default', 'Account signed-in', 56, 'App\\User', 56, 'App\\User', '{\"name\":\"goldgeorge\",\"by\":\"goldgeorge\"}', '2021-04-16 08:05:09', '2021-04-16 08:05:09'),
(998, 'default', 'Account signed-out', 56, 'App\\User', 56, 'App\\User', '{\"name\":\"goldgeorge\",\"by\":\"goldgeorge\"}', '2021-04-16 08:06:06', '2021-04-16 08:06:06'),
(999, 'default', 'Account signed-in', 62, 'App\\User', 62, 'App\\User', '{\"name\":\"testinguser\",\"by\":\"testinguser\"}', '2021-04-16 08:06:16', '2021-04-16 08:06:16'),
(1000, 'default', 'Account signed-out', 62, 'App\\User', 62, 'App\\User', '{\"name\":\"testinguser\",\"by\":\"testinguser\"}', '2021-04-16 08:07:34', '2021-04-16 08:07:34'),
(1001, 'default', 'Account signed-in', 62, 'App\\User', 62, 'App\\User', '{\"name\":\"testinguser\",\"by\":\"testinguser\"}', '2021-04-16 08:07:38', '2021-04-16 08:07:38'),
(1002, 'default', 'Account signed-in', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-04-16 09:27:20', '2021-04-16 09:27:20'),
(1003, 'default', 'Account signed-in', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-04-16 11:24:25', '2021-04-16 11:24:25'),
(1004, 'default', 'Account signed-in', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-04-16 11:24:57', '2021-04-16 11:24:57'),
(1005, 'default', 'Account signed-out', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-04-16 11:28:36', '2021-04-16 11:28:36'),
(1006, 'default', 'Account signed-in', 55, 'App\\User', 55, 'App\\User', '{\"name\":\"papy\",\"by\":\"papy\"}', '2021-04-17 16:10:21', '2021-04-17 16:10:21'),
(1007, 'default', 'Account signed-in', 2, 'App\\User', 2, 'App\\User', '{\"name\":\"company1\",\"by\":\"company1\"}', '2021-04-17 20:40:57', '2021-04-17 20:40:57');

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` bigint UNSIGNED NOT NULL,
  `article_category_id` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `article_categories`
--

CREATE TABLE `article_categories` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `id` int NOT NULL,
  `user_id` int NOT NULL,
  `arrival_picture` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gps_in` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `arrival_date` date DEFAULT NULL,
  `arrival_hour` time NOT NULL,
  `late` time NOT NULL,
  `late_time` time NOT NULL,
  `break_duration` time NOT NULL,
  `departure_date` date NOT NULL,
  `departure_hour` time NOT NULL,
  `departure_picture` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gps_out` mediumtext,
  `hours_worked` time NOT NULL,
  `over_time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `calenders`
--

CREATE TABLE `calenders` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` int NOT NULL,
  `title` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `start` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `end` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `startStr` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `endStr` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `display` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `guests` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `todos` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `calendar` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `allDay` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `calenders`
--

INSERT INTO `calenders` (`id`, `user_id`, `title`, `start`, `end`, `startStr`, `endStr`, `display`, `location`, `guests`, `todos`, `calendar`, `description`, `url`, `allDay`, `created_at`, `updated_at`) VALUES
(56, 46, 'Test staff', '2021-04-10 12:00', '2021-04-10 12:00', '10-04-2021', '10-04-2021', 'block', 'Bengaluru, Karnataka, India', NULL, NULL, 'Business', 'Description', '', NULL, '2021-04-09 01:20:53', '2021-04-09 01:20:53'),
(57, 2, 'Test user', '2021-04-11 12:00', '2021-04-11 12:00', '11-04-2021 12:00', '11-04-2021 12:00', 'block', 'Bengaluru, Karnataka, India', '38,41', 'partir,TestUPdate', 'Business', 'Description', '', NULL, '2021-04-09 01:21:30', '2021-04-09 01:21:30'),
(59, 62, 'test', '2021-04-15 12:00', '2021-04-15 12:00', '15-04-2021', '15-04-2021', 'block', 'Paul-Henri-Spaak-Straße 12, 81829 München, Germany', NULL, NULL, 'Personal', 'Description', 'https://google.fr', 'true', '2021-04-14 05:07:26', '2021-04-14 05:07:26'),
(60, 62, 'koko', '2021-04-16 12:00', '2021-04-21 12:00', '16-04-2021', '21-04-2021 12:00', 'block', '1155 E Oakton St, Des Plaines, IL 60018, USA', NULL, NULL, 'Business', 'Dscripio', 'https://google.fr', NULL, '2021-04-14 05:08:03', '2021-04-14 05:08:03');

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `submission_id` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `formID` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `id` int UNSIGNED NOT NULL,
  `username` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `industry` enum('Restauration traditionnelle','Restauration rapide','Hôtellerie','Boulangerie / pâtisserie','Alimentaire','Santé & Pharmacie','Retail & boutiques','Loisirs & Sports','Services','Autres') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `password` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` enum('Pending','Active','Inactive') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Pending',
  `current_plan` enum('Basic','Company','Entreprise','Team') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Basic',
  `role` enum('Admin','Author','Editor','Maintainer','Subscriber') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Subscriber',
  `theme` int NOT NULL DEFAULT '0' COMMENT '0-Light,1-Dark'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`submission_id`, `formID`, `id`, `username`, `name`, `industry`, `first_name`, `last_name`, `email`, `phone`, `logo`, `address`, `password`, `remember_token`, `created_at`, `updated_at`, `status`, `current_plan`, `role`, `theme`) VALUES
('', '', 1, NULL, 'Company', 'Restauration traditionnelle', '', '', 'company@demo.com', '', NULL, NULL, '$2y$10$5b2OquWHtX3c5H14KVhKjOWCepv9Fr22acgqaGyeMfkbPDI3xngaW', 'A6xgyQVvY7N0HIVsLisnU8t23CoXKcjIsfPW8pBjuwbd6b1lIKS16xsYJs8S', '2020-06-25 14:23:22', '2021-02-17 20:45:04', 'Pending', 'Basic', 'Subscriber', 0);

-- --------------------------------------------------------

--
-- Table structure for table `convention_code_ape`
--

CREATE TABLE `convention_code_ape` (
  `id` int NOT NULL,
  `convention_collective_id` int NOT NULL,
  `code_ape_id` varchar(50) NOT NULL,
  `code_ape_text` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `convention_code_ape`
--

INSERT INTO `convention_code_ape` (`id`, `convention_collective_id`, `code_ape_id`, `code_ape_text`) VALUES
(1, 5, '4520A', 'Entretien et réparation de véhicules automobiles légers'),
(2, 6, '11.05Z', 'Fabrication de bières (ce qui comprend la fabrication de bière, par fermentation à partir d\'eau, de '),
(3, 6, '11.07A', 'Industrie des eaux de table (ce qui comprend la production d\'eaux minérales naturelles et autres eau'),
(4, 6, '11.07B', 'Production de boissons rafraîchissantes (ce qui comprend la production de boissons rafraîchissantes non alcoolisées, édulcorées et/ou aromatisées telles que citronnade, orangeade, cola, boissons au thé, boissons énergétiques, boissons à base de fruits, tonic, etc. ; la production de sirops de fruits ; la production de boissons sans alcool diverses ; la production d\'« apéritifs sans alcool » ; la production de laits aromatisés)'),
(6, 7, '1071A', 'Fabrication industrielle de pain et de pâtisserie fraîche'),
(7, 7, '1071B', 'Cuisson de produits de boulangerie'),
(8, 7, '1085Z', 'Fabrication de plats préparés'),
(9, 7, '1089Z', 'Fabrication d\'autres produits alimentaires n.c.a'),
(10, 7, '5610C', 'Restauration de type rapide'),
(11, 7, '1071C', 'Boulangerie et boulangerie-pâtisserie'),
(12, 8, '7729Z', 'Location de linge'),
(13, 8, '9601B', 'Blanchisserie. - Teinturerie de détail'),
(14, 8, '9601A', 'Blanchisserie. - Teinturerie de gros'),
(15, 9, '5621Z', 'Service des traiteurs'),
(16, 9, '4722Z', 'Commerce de détail de viandes et de produits à base de viande en magasin spécialisé'),
(17, 10, '4724Z', 'Commerce de détail de pain, pâtisserie et confiserie en magasin spécialisé'),
(18, 10, '10.71C', 'Boulangerie et boulangerie-pâtisserie'),
(19, 10, '10.71D', 'Pâtisserie'),
(20, 10, '10.71B', 'Boulangerie'),
(21, 11, '10.71C', 'Boulangerie et boulangerie-pâtisserie'),
(22, 11, '10.71D', 'Pâtisserie'),
(23, 11, '10.71B', 'Boulangerie'),
(24, 12, '52.4/ P', 'entreprises ayant une surface minimale de 400 mètres carrés dont l\'activité se caractérise par la vente au détail en libre-service assisté d\'articles de bricolage'),
(25, 12, '4752B', 'Commerce de détail de quincaillerie, peintures et verres en grandes surfaces (400 m² et plus)'),
(26, 13, '1813Z', ' Activités de pré-presse'),
(27, 13, '2599B', 'Fabrication d autres articles métalliques'),
(28, 13, '2612Z', 'Fabrication de cartes électroniques assemblées'),
(29, 13, '2620Z', 'Fabrication d ordinateurs et d équipements périphériques'),
(30, 13, '2899B', 'Fabrication d autres machines spécialisées'),
(31, 13, '3900Z', 'Dépollution et autres services de gestion des déchets'),
(32, 13, '4110C', 'Promotion immobilière d autres bâtiments'),
(33, 13, '4110D', 'Supports juridiques de programmes'),
(34, 13, '4299Z', 'Construction d autres ouvrages de génie civil n.c.a.'),
(35, 13, '4321B', 'Travaux d installation électrique sur la voie publique'),
(36, 13, '4332C', 'Agencement de lieux de vente'),
(37, 13, '4617A', 'Centrales d achat alimentaires'),
(38, 13, '4618Z', 'Intermédiaires spécialisés dans le commerce d autres produits spécifiques'),
(39, 13, '4619B', 'Autres intermédiaires du commerce en produits divers'),
(40, 13, '4651Z', 'Commerce de gros (commerce interentreprises) d ordinateurs, d équipements informatiques périphériques et de logiciels'),
(41, 13, '4652Z', 'Commerce de gros (commerce interentreprises) de composants et d équipements électroniques et de télécommunication'),
(42, 13, '4741Z', 'Commerce de détail d ordinateurs, d unités périphériques et de logiciels en magasin spécialisé'),
(43, 13, '4791A', 'Vente à distance sur catalogue général'),
(44, 13, '4791B', ' Vente à distance sur catalogue spécialisé'),
(45, 13, '5819Z', 'Autres activités d édition'),
(46, 13, '5821Z', 'Édition de jeux électroniques'),
(47, 13, '5829A', 'Édition de logiciels système et de réseau'),
(48, 13, '5829B', 'Edition de logiciels outils de développement et de langages'),
(49, 13, '5829C', 'Edition de logiciels applicatifs'),
(50, 13, '5911B', 'Production de films institutionnels et publicitaires'),
(51, 13, '5911C', 'Production de films pour le cinéma'),
(52, 13, '5912Z', 'Post-production de films cinématographiques, de vidéo et de programmes de télévision'),
(53, 13, '5920Z', 'Enregistrement sonore et édition musicale'),
(54, 13, '6190Z', 'Autres activités de télécommunication'),
(55, 13, '6201Z', 'Programmation informatique'),
(56, 13, '6202A', 'Conseil en systèmes et logiciels informatiques'),
(57, 13, '6202B', 'Tierce maintenance de systèmes et d applications informatiques'),
(58, 13, '6203Z', 'Gestion d installations informatiques'),
(59, 13, '6209Z', 'Autres activités informatiques'),
(60, 13, '6311Z', 'Traitement de données, hébergement et activités connexes'),
(61, 13, '6312Z', 'Portails internet'),
(62, 13, '6391Z', 'Activités des agences de presse'),
(63, 13, '6420Z', 'Activités des sociétés holding'),
(64, 13, '6430Z', 'Fonds de placement et entités financières similaires'),
(65, 13, '6499Z', 'Autres activités des services financiers, hors assurance et caisses de retraite, n.c.a.'),
(66, 13, '6612Z', 'Courtage de valeurs mobilières et de marchandises'),
(67, 13, '6619B', 'Autres activités auxiliaires de services financiers, hors assurance et caisses de retraite, n.c.a.'),
(68, 13, '6621Z', 'évaluation des risques et dommages'),
(69, 13, '6630Z', 'Gestion de fonds'),
(70, 13, '6810Z', 'Activités des marchands de biens immobiliers'),
(71, 13, '6820B', 'Location de terrains et d autres biens immobiliers'),
(72, 13, '7010Z', 'Activités des sièges sociaux'),
(73, 13, '7021Z', 'Conseil en relations publiques et communication'),
(74, 13, '7022Z', 'Conseil pour les affaires et autres conseils de gestion'),
(75, 13, '7111Z', 'Activités d architecture'),
(76, 13, '7112A', 'Activité des géomètres'),
(77, 13, '7112B', 'Ingénierie, études techniques'),
(78, 13, '7120B', 'Analyses, essais et inspections techniques'),
(79, 13, '7211Z', 'Recherche-développement en biotechnologie'),
(80, 13, '7311Z', 'Activités des agences de publicité'),
(81, 13, '7312Z', 'Régie publicitaire de médias'),
(82, 13, '7320Z', 'études de marché et sondages'),
(83, 13, '7410Z', 'Activités spécialisées de design'),
(84, 13, '7430Z', 'Traduction et interprétation'),
(85, 13, '7490A', 'Activité des économistes de la construction'),
(86, 13, '7490B', 'Activités spécialisées, scientifiques et techniques diverses'),
(87, 13, '7733Z', 'Location et location-bail de machines de bureau et de matériel informatique'),
(88, 13, '7740Z', 'Location-bail de propriété intellectuelle et de produits similaires, à l exception des œuvres soumises à copyright'),
(89, 13, '7990Z', 'Autres services de réservation et activités connexes'),
(90, 13, '8211Z', 'Services administratifs combinés de bureau'),
(91, 13, '8219Z', 'Photocopie, préparation de documents et autres activités spécialisées de soutien de bureau'),
(92, 13, '8220Z', 'Activités de centres d appels'),
(93, 13, '8230Z', 'Organisation de foires, salons professionnels et congrès'),
(94, 13, '8291Z', 'Activités des agences de recouvrement de factures et des sociétés d information financière sur la clientèle'),
(95, 13, '8299Z', 'Autres activités de soutien aux entreprises n.c.a.'),
(96, 13, '8559A', 'Formation continue d adultes'),
(97, 13, '8560Z', 'Activités de soutien à l enseignement'),
(98, 13, '8690F', 'Activités de santé humaine non classées ailleurs'),
(99, 13, '9004Z', 'Gestion de salles de spectacles'),
(100, 13, '9511Z', 'Réparation d ordinateurs et d équipements périphériques'),
(101, 14, '8623Z', 'PRATIQUE DENTAIRE'),
(102, 15, '21.06', 'Construction métallique'),
(103, 15, '24.03', 'Fabrication et installation de matériel aéraulique, thermique et frigorifique'),
(104, 15, '55.10', 'Travaux d\'aménagement des terres et des eaux, voirie, parcs et jardins'),
(105, 15, '55.12', 'Travaux d\'infrastructure générale'),
(106, 15, '55.20', 'Entreprises de forages, sondages, fondations spéciales'),
(107, 15, '55.30', 'Installations industrielles, montage-levage'),
(108, 15, '55.40', 'Installation électrique'),
(109, 15, '55.50', 'Construction industrialisée'),
(110, 15, '55.60', 'Maçonnerie et travaux courants de béton armé'),
(111, 15, '55.70', 'Génie climatique'),
(112, 15, '55.71', 'Menuiserie-serrurerie'),
(113, 15, '55.72', 'Couverture-plomberie, installations sanitaires'),
(114, 15, '4399D', 'Autres travaux spécialisés de construction'),
(115, 15, '55.73', 'Aménagements-finitions'),
(116, 15, '87.08', 'Services de nettoyage'),
(117, 16, '9200Z', 'Organisation de jeux de hasard et d\'argent'),
(118, 17, '9499Z', 'autres organisations fonctionnant par adhésion volontaire'),
(119, 17, '7010Z', 'Activité des sièges sociaux'),
(120, 17, '7022Z', 'Conseil pour les affaires et autres conseils de gestion'),
(121, 17, '4762Z', 'Commerce de détail de journaux et papeterie en magasin spécialisé'),
(122, 17, '4775Z', 'Commerce de détail sauf des automobiles et des motocycles'),
(123, 17, '1052Z', 'Fabrication de glaces et sorbets'),
(124, 18, '9602A', 'Coiffure'),
(125, 19, '4771Z', 'Commerce de détail d\'habillement en magasin spécialisé'),
(126, 19, '6420Z', 'Activités des sociétés holding'),
(127, 20, '4729Z', 'Autres commerces de détail alimentaires en magasin spécialisé'),
(128, 20, '4711B', 'Commerce d\'alimentation générale'),
(129, 20, '4711C', 'Supérettes'),
(130, 20, '4711D', 'Supermarchés'),
(131, 20, '4721Z', 'Commerce de détail de fruits et légumes en magasin spécialisé'),
(132, 20, '4781Z', 'Commerce de détail alimentaire sur éventaires et marchés'),
(133, 20, '4725Z', 'Commerce de détail de boissons en magasin spécialisé'),
(134, 20, '4719B', 'Autres commerces de détail en magasin non spécialisé'),
(135, 21, '47.29Z', 'Autres commerces de détail alimentaires en magasin spécialisé'),
(136, 21, '47.11B', 'Commerce d\'alimentation générale'),
(137, 21, '47.11C', 'Supérettes'),
(138, 21, '47.11D', 'Supermarchés'),
(139, 21, '47.21Z ', 'Commerce de détail de fruits et légumes en magasin spécialisé'),
(140, 21, '47.81Z', 'Commerce de détail alimentaire sur éventaires et marchés'),
(141, 21, '47.25Z', 'Commerce de détail de boissons en magasin spécialisé'),
(142, 21, '4719B', 'Autres commerces de détail en magasin non spécialisé'),
(143, 22, '4633Z', 'Commerce de gros (commerce interentreprises) de produits laitiers, oeufs, huiles et matières grasses comestibles'),
(144, 22, '4617A ', 'Centrales d\'achats de produits de grande consommation appartenant aux entreprises du commerce de détail à prédominance alimentaire (alimentations générales, supérettes, supermarchés, hypermarchés)'),
(145, 22, '47.11F', 'Hypermarchés (commerce de détail non spécialisé à prédominance alimentaire en magasin d\'une surface de vente supérieure à 2 500 m2)'),
(146, 22, '4711D', 'Commerce de détail non spécialisé à prédominance alimentaire'),
(147, 22, '46-17B', 'Autres intermédiaires du commerce en denrées, boissons et tabac'),
(148, 22, '46-38B', 'Commerce de gros (commerce interentreprise) alimentaire spécialisé divers'),
(149, 22, '47-25Z ', 'Commerce de détail de boissons en magasin spécialisé'),
(150, 23, '47.11B', 'Commerce d\'alimentation générale (commerce de détail non spécialisé à prédominance alimentaire en magasin d\'une surface inférieure à 120 m2)'),
(151, 23, '47.11C', 'Supérettes (commerce de détail non spécialisé à prédominance alimentaire en magasin d\'une surface de vente comprise entre 120 et 400 m2)'),
(152, 23, '47.11F', 'Hypermarchés (commerce de détail non spécialisé à prédominance alimentaire en magasin d\'une surface de vente supérieure à 2 500 m2)'),
(153, 23, '47.25Z partiel', 'Commerce de détail de boissons exercé par les seules entreprises à succursales multiples dont les magasins sont gérés par des gérants mandataires non salariés, dont le statut est fixé aux articles L. 7322-1 et suivants du code du travail'),
(154, 23, '46.38B partiel', 'Activité unique ou principale du commerce de gros de farines et produits pour boulangeries'),
(155, 23, '46.39B', 'entreprises de commerce de gros à prédominance alimentaire qui vendent des produits de grande consommation en libre-service à des commerçants détaillants ou artisans censés payer comptant et emporter la marchandise, ainsi que celles non spécialisées également qui, à titre exclusif, fournissent aux collectivités privées et publiques et à la restauration, plusieurs catégories de produits alimentaires'),
(156, 23, '46.17A  ', 'Centrales d\'achats de produits de grande consommation appartenant aux entreprises du commerce de détail à prédominance alimentaire (alimentations générales, supérettes, supermarchés, hypermarchés)'),
(157, 23, '46-17B', 'Autres intermédiaires du commerce en denrées, boissons et tabac'),
(158, 23, '46-38B', 'Commerce de gros (commerce interentreprise) alimentaire spécialisé divers'),
(159, 23, '47-25Z', 'Commerce de détail de boissons en magasin spécialisé'),
(160, 23, '4711D', 'Commerce de détail non spécialisé à prédominance alimentaire'),
(161, 24, '57', 'Commerce de gros alimentaire'),
(162, 24, '58', 'Commerce de gros non alimentaire'),
(163, 24, '59', 'Commerce de gros inter-industriel'),
(164, 24, '61', 'Commerce de détail d\'alimentation générale de grande surface.'),
(165, 24, '60', 'Intermédiaire du commerce.'),
(166, 24, '62', 'Commerce de détail alimentaire de proximité ou spécialisé.'),
(167, 24, '63', 'Commerce de détail non alimentaire non spécialisé.'),
(168, 24, '64', 'Commerce de détail non alimentaire spécialisé.'),
(169, 24, '65-01', 'Commerce de détail d\'accessoires et d\'équipements automobiles'),
(170, 24, '65-02', 'Commerce de détail de carburants et lubrifiants'),
(171, 24, '66', 'Réparations diverses'),
(172, 25, '4764Z', 'Commerce de détail d\'articles de sport en magasin spécialisé'),
(173, 26, '4651Z', 'Commerce de gros (commerce interentreprises) d\'ordinateurs, d\'équipements informatiques périphériques et de logiciels'),
(174, 26, '4665Z', 'Commerce de gros (commerce interentreprises) de mobilier de bureau'),
(175, 26, '4666Z', 'Commerce de gros (commerce interentreprises) d\'autres machines et équipements de bureau'),
(176, 26, '4741Z', 'Commerce de détail d\'ordinateurs, d\'unités périphériques et de logiciels en magasin spécialisé'),
(177, 26, '4759A', 'Commerce de détail de meubles'),
(178, 26, '4762Z', 'Commerce de détail de journaux et papeterie en magasin spécialisé'),
(179, 26, '4778C', 'Autres commerces de détail spécialisés divers'),
(180, 26, '518G', 'Commerce de gros d\'ordinateurs, d\'équipements informatiques périphériques et de progiciels'),
(181, 26, '518H', 'Commerce de gros d\'autres machines et équipements de bureau'),
(182, 26, '524R', 'Commerce de détail de livres, journaux et papeterie'),
(183, 26, '524Z', 'Commerces de détail divers en magasin spécialisé'),
(184, 27, '47.19B', 'Autre commerce de détail en magasin non spécialisé (surface inférieure à 2 500 m²)'),
(185, 27, '47.52A', 'Commerce de détail de quincaillerie, peintures et verres en petites surface (400 m² et plus)'),
(186, 27, '47.65Z', 'Commerce de détail de jeux et jouets en magasin spécialisé'),
(187, 27, '47.72B', 'Commerce de détail de maroquinerie et d\'articles de voyage'),
(188, 27, '47.78C', 'Autres commerces de détail spécialisés divers'),
(189, 27, '47.79Z', 'Commerce de détail de biens d\'occasion en magasin'),
(190, 27, '47.89Z', 'Autres commerces de détail sur éventaires et marchés'),
(191, 27, '47.42Z', 'Commerce de détail de matériels de télécommunication en magasin spécialisé'),
(192, 27, '47.78C', 'Autres commerces de détail spécialisés divers'),
(193, 27, '47.59B', 'Commerce de détail d\'autres équipements du foyer'),
(194, 27, '4775Z', 'Commerce de détail de parfumerie et de produits de beauté en magasin spécialisé'),
(195, 28, '47.78C', 'Autres commerces de détail spécialisés divers'),
(196, 28, '4669C', 'Commerce de gros (commerce interentreprises) de fournitures et équipements divers pour le commerce et les services'),
(197, 28, '4631Z', 'Commerce de gros (commerce interentreprises) de fruits et légumes'),
(198, 29, '47.78C', 'Autres commerces de détail spécialisés divers'),
(199, 29, '6120Z', 'Télécommunications sans fil'),
(200, 30, '47.78C', 'Autres commerces de détail spécialisés divers'),
(201, 30, '3320D', 'Installation d équipements électriques, de matériels électroniques et optiques ou d autres matériels'),
(202, 30, '3812Z', 'Collecte des déchets dangereux'),
(203, 30, '4532Z', 'Commerce de détail d équipements automobiles'),
(204, 30, '4619A', 'Centrales d achat non alimentaires'),
(205, 30, '4643Z', 'Commerce de gros (commerce interentreprises) d appareils électroménagers'),
(206, 30, '4652Z', 'Commerce de gros (commerce interentreprises) de composants et d équipements électroniques et de télécommunication'),
(207, 30, '4726Z', 'Commerce de détail de produits à base de tabac en magasin spécialisé'),
(208, 30, '4741Z', 'Commerce de détail d ordinateurs, d unités périphériques et de logiciels en magasin spécialisé'),
(209, 30, '4742Z', ' Commerce de détail de matériels de télécommunication en magasin spécialisé'),
(210, 30, '4743Z', 'Commerce de détail de matériels audio et vidéo en magasin spécialisé'),
(211, 30, '4754Z', 'Commerce de détail d appareils électroménagers en magasin spécialisé'),
(212, 30, '4759B', 'Commerce de détail d autres équipements du foyer'),
(213, 30, '5210B', 'Entreposage et stockage non frigorifique'),
(214, 30, '5912Z', 'Post-production de films cinématographiques, de vidéo et de programmes de télévision'),
(215, 30, '5913A', 'Distribution de films cinématographiques'),
(216, 30, '6120Z', 'Télécommunications sans fil'),
(217, 30, '6190Z', 'Autres activités de télécommunication'),
(218, 30, '6209Z', 'Autres activités informatiques'),
(219, 30, '7729Z', 'Location et location-bail d autres biens personnels et domestiques'),
(220, 30, '7739Z', 'Location et location-bail d autres machines, équipements et biens matériels n.c.a.'),
(221, 30, '9511Z', 'Réparation d ordinateurs et d équipements périphériques'),
(222, 30, '9512Z', 'Réparation d équipements de communication'),
(223, 30, '9521Z', 'Réparation de produits électroniques grand public'),
(224, 30, '9522Z', 'Réparation d appareils électroménagers et d équipements pour la maison et le jardin'),
(225, 30, '9529Z', 'Réparation d autres biens personnels et domestiques'),
(226, 31, '47.78C', 'Autres commerces de détail spécialisés divers'),
(227, 31, '46.38A', 'commerce de gros, commerce interentreprises, de poissons, crustacés et mollusques'),
(228, 31, '03.21Z', ' aquaculture en mer'),
(229, 32, '47.78C', 'Autres commerces de détail spécialisés divers'),
(230, 32, '4772A', 'Commerce de détail de la chaussure'),
(231, 33, '47.78C', 'Autres commerces de détail spécialisés divers'),
(232, 33, '10.82Z', 'Fabrication de cacao, chocolat et de produits de confiserie'),
(233, 33, '47.24Z', 'Commerce de détail de pain, pâtisserie et confiserie en magasin spécialisé'),
(234, 33, '10.61B', 'Autres activités du travail des grains'),
(235, 33, '10.72Z', 'Fabrication de biscuits, biscottes et pâtisseries de conservation'),
(239, 35, '8559B', 'Autres enseignements'),
(240, 35, '8552Z', 'Enseignement culturel'),
(241, 35, '8542Z', 'Enseignement culturel'),
(242, 35, '8541Z', 'Enseignement post-secondaire non supérieur'),
(243, 35, '8532Z', 'Enseignement secondaire technique ou professionnel'),
(244, 35, '8531Z', 'Enseignement secondaire général'),
(245, 35, '8520Z', 'Enseignement primaire'),
(246, 35, '8510Z', 'Enseignement pré-primaire'),
(247, 36, '80.10z', 'Activités de sécurité privée'),
(248, 37, '81.2', 'activité de nettoyage de locaux y compris les activités de nettoyage à l\'occasion de remises en état'),
(249, 37, '96.01 A', 'activité de nettoyage à domicile de moquettes, tapis, tentures et rideaux'),
(250, 38, '8891A', ' Accueil de jeunes enfants'),
(251, 39, '47.91A', 'Vente à distance sur catalogue général'),
(252, 39, '47.91B', 'Vente à distance sur catalogue spécialisé'),
(253, 39, '46.69C', 'Commerce de gros (commerce interentreprises) de fournitures et équipements divers pour le commerce et les services'),
(254, 39, '46.18Z', 'Intermédiaires spécialisés dans le commerce d autres produits spécifiques'),
(255, 39, '46.44Z', 'Commerce de gros (commerce interentreprises) de vaisselle, verrerie et produits d entretien'),
(256, 40, '9001Z', 'Arts du spectacle vivant'),
(257, 41, '93.21Z', 'Activités des parcs d\'attractions et parcs à thèmes)'),
(258, 41, '91.02Z ', 'Gestion des musées'),
(259, 41, '91.03Z', 'Gestion des sites et monuments historiques et des attractions touristiques similaires'),
(260, 41, '91.04Z', 'Gestion du patrimoine naturel'),
(261, 41, '93.29Z', 'Autres activités récréatives et de loisirs NCA'),
(262, 42, '9602B', '9602B - Cosmétiques'),
(263, 42, '7010Z', '7010Z - Activités des sièges sociaux'),
(264, 42, '8532Z', '8532Z - Enseignement secondaire technique ou professionnel'),
(265, 42, '8541Z', '8541Z - Enseignement post-secondaire non supérieur'),
(266, 42, '8542Z', '8542Z - Enseignement supérieur'),
(267, 42, '8559A', '8559A - Formation continue d\'adultes'),
(268, 42, '8559B', '8559B - Autres enseignements'),
(269, 42, '4645Z', '4645Z - Commerce de gros (commerce interentreprises) de parfumerie et de produits de beauté'),
(270, 42, '4775Z', '4775Z - Commerce de détail de parfumerie et de produits de beauté en magasin spécialisé'),
(271, 42, '8690F', '8690F - Activités de santé humaine non classées ailleurs'),
(272, 42, '9313Z', '9313Z - Activités des centres de culture physique'),
(273, 42, '9604Z', '9604Z - Entretien corporel'),
(274, 43, '5914Z', 'Projection de films cinématographiques'),
(275, 44, '0145Z', 'Élevage d\'ovins et de caprins'),
(276, 46, '4776Z', 'Commerce de détail de fleurs, plantes, graines, engrais, animaux de compagnie et aliments pour ces animaux en magasin spécialisé'),
(277, 46, '0162Z', 'Activités de soutien à la production animale'),
(278, 46, '9609Z', 'Autres services personnels n.c.a.'),
(279, 46, '4789Z', 'Autres commerces de détail sur éventaires et marchés'),
(280, 46, '4622Z', 'Commerce de gros (commerce interentreprises) de fleurs et plantes'),
(281, 46, '4782Z', 'Commerce de détail de textiles, d habillement et de chaussures sur éventaires et marchés'),
(282, 46, '4791B', 'Vente à distance sur catalogue spécialisé'),
(283, 46, '7722Z', 'Location de vidéocassettes et disques vidéo'),
(284, 46, '8130Z', 'Services d\'aménagement paysager'),
(285, 47, '4776Z', '4776Z - Commerce de détails de fleurs, plantes, graines, engrais, animaux de compagnie et aliments pour ces animaux en magasin spécialisé'),
(286, 47, '9609Z', '9609Z - Autres services personnels n.c.a'),
(287, 47, '4789Z', '4789Z - Autres commerces de détails sur éventaires et marchés'),
(288, 47, '4622Z', '4622Z - Commerce de gros (commerce interentreprises) de fleurs et plantes'),
(289, 47, '4782Z', '4782Z - Commerce de détail de textiles, d\'habillement et de chaussures sur éventaires et marchés'),
(290, 47, '4791B', '4791B - Vente à distance sur catalogue spécialisé'),
(291, 47, '7722Z', '7722Z - Location de vidéocassettes et disques vidéos'),
(292, 47, '8130Z', '8130Z - Services d\'aménagement paysager'),
(293, 47, '47.00.77', '47.00.77 - commerce de détails de fleurs, plantes et graines'),
(294, 47, '47.00.79', '47.00.79 - commerce de détails d\'animaux de compagnie et d\'aliments pour animaux de compagnie'),
(295, 47, '0162Z', '0162Z - Activités de soutien à la production animale'),
(296, 47, '96. 09Z. P', '96. 09Z. P - entreprises artisanales de toilettage de chiens et chats'),
(297, 47, '96. 09Z', '96. 09Z - services aux animaux familiers'),
(298, 48, '4776Z', '4776Z - Commerce de détails de fleurs, plantes, graines, engrais, animaux de compagnie et aliments pour ces animaux en magasin spécialisé'),
(299, 48, '9609Z', '9609Z - Autres services personnels n.c.a'),
(300, 48, '4789Z', '4789Z - Autres commerces de détails sur éventaires et marchés'),
(301, 48, '4622Z', '4622Z - Commerce de gros (commerce interentreprises) de fleurs et plantes'),
(302, 48, '4782Z', '4782Z - Commerce de détail de textiles, d\'habillement et de chaussures sur éventaires et marchés'),
(303, 48, '4791B', '4791B - Vente à distance sur catalogue spécialisé'),
(304, 48, '7722Z', '7722Z - Location de vidéocassettes et disques vidéos'),
(305, 48, '8130Z', '8130Z - Services d\'aménagement paysager'),
(306, 48, '47.00.77', '47.00.77 - commerce de détails de fleurs, plantes et graines'),
(307, 48, '47.00.79', '47.00.79 - commerce de détails d\'animaux de compagnie et d\'aliments pour animaux de compagnie'),
(308, 48, '0162Z', '0162Z - Activités de soutien à la production animale'),
(309, 48, '96. 09Z. P', '96. 09Z. P - entreprises artisanales de toilettage de chiens et chats'),
(310, 48, '96. 09Z', '96. 09Z - services aux animaux familiers'),
(311, 51, '9311Z', 'Gestion d\'installations sportives'),
(312, 52, '521H', 'Grands magasins'),
(313, 52, '521E', 'Magasins populaires'),
(314, 52, '511P', 'centrales d\'achat des sociétés de grands magasins'),
(315, 52, '511U', 'Centrales d\'achat de magasins populaires'),
(316, 53, '5520Z', 'Hébergements tourisitiques et autre hébergement de courte durée'),
(317, 53, '5530Z', 'Terrains de camping et parcs pour caravanes ou véhicules de loisirs'),
(318, 54, '55.30Z', 'Terrains de camping et parcs pour caravanes ou véhicules de loisirs'),
(319, 54, '55.20Z', 'Hébergement touristique et autre hébergement de courte durée'),
(320, 57, '56.30Zp', '56.30Zp - Débits de boissons'),
(321, 57, '56.21Z', '56.21Z - Service des traiteurs'),
(322, 57, '93.11Z', '93.11Z - Gestion d\'installations sportives'),
(323, 57, '5520Z', '5520Z - Hébergement touristique et autre hébergement de courte durée'),
(324, 57, '5510Z', '5510Z - Hôtels et hébergement similaire'),
(325, 57, '4726Z', '4726Z - Commerce de détail de produits à base de tabac en magasin spécialisé'),
(326, 57, '55.10Zp', '55.10Zp - Hôtels et hébergements similaires'),
(327, 57, '56.10A', '56.10A - Restauration traditionnelle'),
(328, 57, '56.10B', '56.10B - Cafétérias et autres libres-services'),
(329, 58, '56.30Zp', 'Débits de boissons'),
(330, 58, '56.21Z', 'Service des traiteurs'),
(331, 58, '93.11Z', 'Gestion d\'installations sportives'),
(332, 58, '5520Z', 'Hébergement touristique et autre hébergement de courte durée'),
(333, 58, '4726Z', 'Commerce de détail de produits à base de tabac en magasin spécialisé'),
(334, 58, '55.10Zp', 'Hôtels et hébergements similaires'),
(335, 58, '56.10A', 'Restauration traditionnelle'),
(336, 58, '56.10B', 'Cafétérias et autres libres-services'),
(337, 59, '1629Z', 'Fabrication d\'objets divers en bois ; fabrication d\'objets en liège, vannerie et sparterie'),
(338, 60, '8899B', 'Action sociale sans hébergement n.c.a.'),
(339, 61, '81.10Z', 'Activités combinées de soutien lié aux bâtiments'),
(340, 61, '55.20Z', 'Hébergement touristique et autre hébergement de courte durée'),
(341, 61, '64.20Z et 70.10Z', 'holdings dont l\'activité principale s\'exerce à travers des filiales relevant de la présente convention, des groupements d\'intérêt économique, associations ou syndicats, créés par un groupe d\'entreprises relevant en majorité de la présente convention'),
(342, 61, '6831Z', 'Agences immobilières'),
(343, 62, '1073Z', '1073Z - Fabrication de pâtes alimentaires'),
(344, 62, '1039B', '1039B - Transformation et conservation de fruits'),
(345, 62, '1031Z', '1031Z - Transformation et conservation de pommes de terre'),
(346, 62, '1020Z', '1020Z - Transformation et conservation de poisson, de crustacés et de mollusques'),
(347, 62, '1085Z', '1085Z - Fabrication de plats préparés'),
(348, 62, '1013A', '1013A - Préparation industrielle de produits à base de viande'),
(349, 62, '1039A', '1039A - Autre transformation et conservation de légumes'),
(350, 62, '1089Z', '1089Z - Fabrication d\'autres produits alimentaires n.c.a.'),
(351, 64, '10.31Z', 'Transformation et conservation de pommes de terre'),
(352, 64, '10.89Z', 'Fabrication d\'autres produits alimentaires n.c.a'),
(353, 64, '10.73Z', 'Fabrication de pâtes alimentaires'),
(354, 64, '10.85Z', 'Fabrication de plats préparés'),
(355, 64, '10.20Z', 'Transformation et conservation de poisson, de crustacés et de mollusques'),
(356, 64, '10.39A', 'Autre transformationn et conservation de légumes'),
(357, 64, '10.13A', 'Préparation industrielle de produits à base de viande'),
(358, 64, '10.39B', 'Transformation et conservation de fruits'),
(359, 65, '3831Z', 'Démantèlement d\'épaves'),
(360, 65, '3832Z', 'Récupération de déchets triés'),
(361, 65, '4677Z', 'Commerce de gros (commerce interentreprises) de déchets et débris'),
(362, 66, '47.61Z', 'Commerce de détail de livres en magasin spécialisé'),
(363, 67, '2511Z', 'Fabrication de structures métalliques et de parties de structures'),
(364, 67, '2512Z', 'Fabrication de portes et fenêtres en métal'),
(365, 67, '2521Z', 'Fabrication de radiateurs et de chaudières pour le chauffage central'),
(366, 67, '2529Z', 'Fabrication d’autres réservoirs, citernes et conteneurs métalliques'),
(367, 67, '2530Z', 'Fabrication de générateurs de vapeur, à l’exception des chaudières pour le chauffage central'),
(368, 67, '2540Z', 'Fabrication d’armes et de munitions'),
(369, 67, '2550A', 'Forge, estampage, matriçage ; métallurgie des poudres'),
(370, 67, '2550B', 'Découpage, emboutissage'),
(371, 67, '2561Z', 'Traitement et revêtement des métaux'),
(372, 67, '2562A', 'Décolletage'),
(373, 67, '2562B', 'Mécanique industrielle'),
(374, 68, '9499Z', 'Autres organisations fonctionnant par adhésion volontaire'),
(375, 68, '8899B', 'Action sociale sans hébergement n.c.a'),
(376, 70, '4778A', 'Commerces de détail d\'optique'),
(377, 71, '7010 Z', 'Ape'),
(378, 72, '15-8B', 'Boulangerie-fabrique de pain'),
(379, 72, '15-8 C', 'Boulangerie-pâtisserie'),
(380, 72, '15-8 A', 'Boulangerie industrielle'),
(381, 72, '52-2 G', 'Boulangerie de détail'),
(382, 72, '52-2 G', 'Dépôt de pain'),
(383, 73, '52-2 G', '52-2 G - Boulangerie de détail'),
(384, 73, '4120A', '4120A - Construction de maisons individuelles'),
(385, 73, '2106', '2106 - Construction métallique'),
(386, 73, '2403', '2403 - Fabrication et installation de matériel aéraulique, thermique et frigorifique'),
(387, 73, '5510', '5510 - Travaux d\'aménagements des terres et des eaux, voirie, parcs et jardins'),
(388, 73, '5512', '5512 - Travaux d\'infrastructure générale'),
(389, 73, '5520', '5520 - Entreprises de forage, sondages, fondations spéciales'),
(390, 73, '5530', '5530 - Construction d\'ossatures autres que métalliques'),
(391, 73, '5531', '5531 - Installations industrielles, montage-levage'),
(392, 73, '5540', '5540 - Installation électrique'),
(393, 73, '5550', '5550 - Construction industrialisée'),
(394, 73, '5560', '5560 - Maçonnerie et travaux courants de béton armé'),
(395, 73, '5570', '5570 - Génie climatique'),
(396, 73, '5571', '5571 - Menuiserie-Serrurerie'),
(397, 73, '5572', '5572 - Couverture-plomberie-Installation sanitaire'),
(398, 73, '5573', '5573 - Aménagements-Finitions'),
(399, 73, '8708', '8708 - Services de nettoyage'),
(400, 73, '2107', '2107 - Menuiserie métallique de bâtiment'),
(401, 74, '52-2 G', 'Boulangerie de détail'),
(402, 74, '1071D', 'Pâtisserie'),
(403, 74, '1071C', 'Boulangerie et boulangerie-pâtisserie'),
(404, 74, '1052Z', 'Fabrication de glaces et de sorbets'),
(409, 75, '1071D', 'pâtisserie'),
(410, 75, '1071C', 'Boulangerie et boulangerie-pâtisserie'),
(411, 75, '1052Z', 'Fabrication de glaces et de sorbets'),
(412, 76, '55.10Z', 'Hôtels et hébergements similaires'),
(413, 76, '56.10A', 'Restauration traditionnelle'),
(414, 76, '56.10B', 'Cafétérias et autres libres-services'),
(415, 76, '56.30Z', 'Débits de boissons'),
(416, 77, '85-1C', 'Pratique médicale'),
(417, 79, '5629A', 'Restauration collective sous contrat'),
(418, 80, '91.04Z', 'Gestion des jardins botaniques et zoologiques et des réserves naturelles'),
(419, 81, '4619B', 'Autres intermédiaires du commerce en produits divers'),
(420, 81, '5221Z', 'Services auxiliaires des transports terrestres'),
(421, 81, '5911B', 'Production de films institutionnels et publicitaires'),
(422, 81, '5911C', 'Production de films pour le cinéma'),
(423, 81, '5920Z', 'Enregistrement sonore et édition musicale'),
(424, 81, '6190Z', 'Autres activités de télécommunication'),
(425, 81, '6201Z', 'Programmation informatique'),
(426, 81, '6311Z', 'Traitement de données, hébergement et activités connexes'),
(427, 81, '6312Z', 'Portails Internet'),
(428, 81, '6420Z', 'Activités des sociétés holding'),
(429, 81, '6430Z', 'Fonds de placement et entités financières similaires'),
(430, 81, '6499Z', 'Autres activités des services financiers, hors assurance et caisses de retraite, n.c.a.'),
(431, 81, '6820B', 'Location de terrains et d\'autres biens immobiliers'),
(432, 81, '7010Z', 'Activités des sièges sociaux'),
(433, 81, '7021Z', 'Conseil en relations publiques et communication'),
(434, 81, '7022Z', 'Conseil pour les affaires et autres conseils de gestion'),
(435, 81, '7311Z', 'Activités des agences de publicité'),
(436, 81, '7320Z', 'Études de marché et sondages'),
(437, 81, '7410Z', 'Activités spécialisées de design'),
(438, 81, '7430Z', 'Traduction et interprétation'),
(439, 81, '7490B', 'Activités spécialisées, scientifiques et techniques diverses'),
(440, 81, '7729Z', 'Location et location-bail d\'autres biens personnels et domestiques'),
(441, 81, '7740Z', 'Location-bail de propriété intellectuelle et de produits similaires, à l\'exception des oeuvres soumises à copyright'),
(442, 81, '8211Z', 'Services administratifs combinés de bureau'),
(443, 81, '8219Z', 'Photocopie, préparation de documents et autres activités spécialisées de soutien de bureau'),
(444, 81, '8220Z', 'Activités de centres d\'appels'),
(445, 81, '8230Z', 'Organisation de foires, salons professionnels et congrès'),
(446, 81, '8291Z', 'Activités des agences de recouvrement de factures et des sociétés d\'information financière sur la clientèle'),
(447, 81, '8299Z', 'Autres activités de soutien aux entreprises n.c.a'),
(448, 81, '9002Z', 'Activités de soutien au spectacle vivant'),
(449, 81, '9003B', 'Autre création artistique'),
(450, 82, '8211Z', 'Services administratifs combinés de bureau'),
(451, 83, '47.73Z', 'Commerce de détail de produits pharmaceutiques en magasin spécialisé'),
(452, 84, '522E', 'COMMERCE DE DETAIL DE POISSONS CRUSTACES ET MOLLUSQUES'),
(453, 86, '5911A', 'production de films et de programmes pour la télévision'),
(454, 86, '5911B', 'production de films institutionnels et publicitaires'),
(455, 87, '74.20Z', 'Activités photographiques'),
(456, 87, '59.12Z', 'Traitements des films relevant de l’industrie du cinéma et de la télévision'),
(457, 87, '71.12B', 'Information cartographique et spatiale'),
(458, 87, '96.09Z', 'Exploitation de cabines fonctionnant en libre-service avec des pièces'),
(459, 87, '47.78C', 'Autres commerces de détails spécialisés divers'),
(460, 88, '70-01 C', 'entreprises assurant une activité d\'aménageurs et de lotisseurs'),
(461, 88, '70-1 A, ou 70-1 B, ou 70-1 C, ou 70-1 D', 'entreprises prenant l\'initiative de réalisations immobilières et coordonnant les opérations nécessaires à l\'étude, l\'exécution et la mise à la disposition des usagers de programmes de construction'),
(462, 88, '70-1 A, 45-2 A, 45-2 B', 'entreprises dont l\'activité principale est la conception, la commercialisation, auprès de maîtres d\'ouvrage particuliers, de maisons individuelles en application des dispositions des articles L. 231-1 et suivants et L. 232-1 et suivants du code de la construction et de l\'habitation'),
(463, 89, '602 C', 'Téléphériques, remontées mécaniques'),
(464, 89, '9311Z', 'Gestion d installations sportives'),
(465, 90, '56.10C', 'Restauration rapide'),
(466, 91, '56.10C', 'Restauration rapide'),
(467, 93, '4511Z', 'APE'),
(468, 93, '5221Z', 'Ape'),
(469, 94, '78.30Z', 'Autre mise à disposition de ressources humaines'),
(470, 94, '93.11Z', 'Gestion d’installations sportives'),
(471, 94, '93.12Z', 'Activités de clubs de sports'),
(472, 94, '93.13Z', 'Activités des centres de culture physique'),
(473, 94, '93.19Z', 'Autres activités liées au sport'),
(474, 94, '93.29Z', 'Autres activités récréatives et de loisirs nca'),
(475, 94, '85.51Z', 'Enseignement de disciplines sportives et d’activités de loisirs'),
(476, 95, 'CHE-324.202.317', 'CHE-324.202.317'),
(477, 96, '5520Z', '5520Z'),
(478, 97, '86.90A', 'Ambulances'),
(479, 97, '851J', 'Ambulances'),
(480, 99, '86.90 A', 'Ambulances'),
(481, 99, '851 J', 'Ambulances'),
(482, 99, '88.99 B', 'Action sociale sans hébergement'),
(483, 100, '1812Z', 'Autre imprimerie (labeur)'),
(484, 101, '1629Z', 'Fabrication d\'objets divers en bois ; fabrication d\'objets en liège, vannerie et sparterie'),
(485, 102, '7500Z', '7500Z'),
(486, 103, '7500Z', '7500Z'),
(487, 104, '1011Z', 'Transformation et conservation de la viande de boucherie'),
(488, 105, '11.02B', 'vinification (négociants vinificateurs, activité principale non agricole)'),
(489, 105, '11.04Z', 'production d\'autres boissons fermentées non distillées (production de vins aromatisés, de vins doux naturels)'),
(490, 105, '11.01Z', 'production de boissons alcooliques distillées'),
(491, 105, '20.14Z', 'fabrication d\'autres produits chimiques organiques de base'),
(492, 105, '11.02A', 'fabrication de vins effervescents'),
(493, 105, '11.03Z', 'fabrication de cidre et de vins de fruits'),
(494, 105, '10.32Z', 'préparation de jus de fruits et de légumes'),
(495, 105, '11.07B', 'production de boissons rafraîchissantes (en ce qui concerne les sirops, les boissons aux fruits et aux jus de fruits)'),
(496, 105, '46.34Z', 'commerce en gros de boissons alcoolisées autres que les bières (établissements dont le code de risque « accidents du travail » attribué par la caisse d\'assurance maladie est 51.3JA)');

-- --------------------------------------------------------

--
-- Table structure for table `convention_collective`
--

CREATE TABLE `convention_collective` (
  `id` int NOT NULL,
  `convention_collective` varchar(500) NOT NULL,
  `rule1` int NOT NULL,
  `rule2` int NOT NULL,
  `rule3` int NOT NULL,
  `rule4` int NOT NULL,
  `rule5` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `convention_collective`
--

INSERT INTO `convention_collective` (`id`, `convention_collective`, `rule1`, `rule2`, `rule3`, `rule4`, `rule5`) VALUES
(5, ' Entretien et réparation de véhicules automobiles légers', 12, 6, 11, 5, 42),
(6, 'Activités de production des eaux embouteillées et boissons rafraîchissantes sans alcool et de bière (IDCC 1513)', 10, 6, 11, 6, 48),
(7, 'Activités industrielles de boulangerie et pâtisserie (IDCC 1747)', 10, 6, 11, 6, 48),
(8, 'Blanchisserie – teinturerie et nettoyage - blanchisserie, laverie, location de linge, nettoyage à sec, pressing et teinturerie (IDCC 2002)', 10, 6, 11, 6, 44),
(9, 'Boucherie, boucherie-charcuterie, boucherie hippophagique, triperie, commerces de volailles et gibiers (IDCC 992)', 10, 6, 11, 6, 48),
(10, 'Boulangerie- pâtisserie (IDCC 843) - Heures de nuit 21h - 6h', 10, 6, 11, 6, 48),
(11, 'Boulangerie-pâtisserie (IDCC 843) - Heures de nuit 20h - 6h', 10, 6, 11, 6, 48),
(12, 'Bricolage - vente au détail en libre-service - (IDCC 1606)', 10, 6, 11, 10, 48),
(13, 'Bureaux d\'études techniques, des cabinets d\'ingénieurs-conseils et des sociétés de conseils - Syntec (IDCC 1486)', 10, 6, 11, 6, 48),
(14, 'Cabinets dentaires (IDCC 1619)', 10, 6, 12, 6, 46),
(15, 'Cadres du bâtiments (IDCC 2420)', 10, 6, 11, 5, 48),
(16, 'Casinos (IDCC 2257)', 10, 6, 11, 5, 48),
(17, 'Code du travail', 10, 6, 11, 6, 48),
(18, 'Coiffure et professions connexes (IDCC 2596)', 10, 6, 11, 5, 44),
(19, 'Commerce de détail de l\'habillement et des articles textiles (IDCC 1483)', 12, 6, 11, 5, 48),
(20, 'Commerce de détail des fruits et légumes, épicerie et produits laitiers (IDCC 1505)', 10, 6, 11, 6, 48),
(21, 'Commerce de détail des fruits et légumes, épicerie et produits laitiers (IDCC 1505)', 10, 6, 11, 6, 48),
(22, 'Commerce de détail et de gros à prédominance alimentaire (IDCC 2216)  (surface de vente supérieure à 400m2)', 10, 6, 12, 5, 44),
(23, 'Commerce de détail et de gros à prédominance alimentaire (IDCC 2216) - surface de vente inférieure ou égale à 400m2', 10, 6, 12, 5, 44),
(24, 'Commerce de la réunion', 10, 6, 11, 6, 48),
(25, 'Commerce des articles de sports et d\'équipements de loisirs (IDCC 1557)', 10, 6, 11, 5, 35),
(26, 'Commerces de détail de papeterie, fournitures de bureau, de bureautique et informatique et de librairie (IDCC 1539)', 10, 6, 11, 6, 48),
(27, 'Commerces de détail non alimentaires (IDCC 1517)', 10, 6, 11, 6, 48),
(28, 'Commerces de gros (IDCC 573)', 10, 6, 11, 6, 48),
(29, 'Commerces et services de l\'audiovisuel, de l\'électronique et de l\'équipement ménager (IDCC 1686)', 11, 6, 11, 6, 46),
(30, 'Commerces et services de l\'audiovisuel, de l\'électronique et de l\'équipement ménager (IDCC 1686)', 10, 6, 11, 6, 48),
(31, 'Conchyliculture (IDCC 7019)', 10, 6, 11, 6, 48),
(32, 'Détaillants en chaussures (IDCC 733)', 10, 6, 11, 6, 48),
(33, 'Détaillants et détaillants-fabricants de la confiserie, chocolaterie, biscuiterie (IDCC 1286)', 10, 6, 11, 6, 48),
(34, 'Électricité et Électronique (Tunisie)', 10, 6, 10, 0, 48),
(35, 'Enseignement privé indépendant (IDCC 2691)', 10, 6, 11, 6, 48),
(36, 'Entreprises de prévention et de sécurité (IDCC 1351)', 12, 6, 12, 6, 48),
(37, 'Entreprises de propreté et services associés (IDCC 3043)', 10, 6, 11, 6, 44),
(38, 'Entreprises de services à la personne (IDCC 3127)', 10, 6, 11, 6, 48),
(39, 'Entreprises du commerce à distance (IDCC 2198)', 10, 6, 11, 6, 48),
(40, 'Entreprises du secteur privé du spectacle vivant (IDCC 3090)', 10, 6, 11, 6, 48),
(41, 'Espaces de loisirs, d\'attractions et culturels (IDCC 1790)', 10, 6, 11, 6, 48),
(42, 'Esthétique-cosmétique et de l\'enseignement technique et professionnel lié aux métiers de l\'esthétique et de la parfumerie (IDCC 3032)', 10, 6, 11, 6, 44),
(43, 'Exploitation cinématographique (IDCC 1307)', 10, 6, 11, 6, 48),
(44, 'Exploitations agricoles de la Drôme (IDCC 9261)', 10, 6, 11, 6, 48),
(45, 'Exploitations de polyculture, de viticulture et d\'élevage de Maine-et-Loire (IDCC 9491)  ', 10, 6, 11, 6, 35),
(46, 'Fleuristes, vente et services des animaux familiers - Plus de 20 salariés (IDCC 1978) ', 10, 6, 11, 6, 48),
(47, 'Fleuristes, vente et services des animaux familiers (IDCC 1978) - ent. de plus de 20 salariés', 10, 6, 11, 6, 48),
(48, 'Fleuristes, vente et services des animaux familiers (IDCC 1978) (ent. de moins de 20)', 10, 6, 11, 6, 48),
(49, 'Gardiens, concierges et employés d\'immeubles (IDCC 1043)', 6, 6, 11, 10, 48),
(50, 'GE - Centre médical ', 12, 6, 11, 7, 50),
(51, 'Golf (IDCC 2021)', 10, 6, 11, 6, 42),
(52, 'Grands magasins et magasins populaires (IDCC 2156) ', 10, 4, 11, 6, 42),
(53, 'Hôtellerie de plein air (IDCC 1631)', 10, 6, 11, 0, 48),
(54, 'Hôtellerie de plein air (IDCC 1631) à compter du 1er janvier 2005', 10, 6, 11, 0, 48),
(55, 'Hôtels, cafés et restaurants (Belgium)', 11, 6, 11, 6, 50),
(56, 'Hôtels, cafés et restaurants (Suisse)', 11, 5, 11, 5, 42),
(57, 'Hôtels, cafés restaurants - HCR (IDCC 1979)', 11, 6, 11, 6, 48),
(58, 'Hôtels, cafés, restaurants (HCR) (IDCC 1979) - Usage dimanche', 11, 6, 11, 6, 48),
(59, 'IDCC 158 BIS (ÉQUIPE SUPPLÉANCE) : Convention collective nationale du travail mécanique du bois, des scieries, du négoce et de l\'importation des bois', 12, 6, 11, 2, 24),
(60, 'IDCC 3016 - INSERTION (ateliers et chantiers)', 10, 6, 12, 6, 48),
(61, 'Immobilier, administrateurs de biens, sociétés immobilières, agents immobiliers, etc. (IDCC 1527)', 10, 6, 11, 6, 48),
(62, 'Industrie de produits alimentaires élaborés (IDCC 1396)', 10, 5, 11, 0, 48),
(63, 'Industrie Hôtelière (Polynésie)', 10, 6, 11, 9, 48),
(64, 'Industries de produits alimentaires élaborés (IDCC 1396)', 10, 6, 11, 9, 48),
(65, 'industries et du commerce de la récupération (IDCC 637)', 10, 6, 11, 6, 48),
(66, 'Librairie (IDCC 3013)', 10, 6, 13, 5, 43),
(67, 'Métallurgie', 10, 6, 11, 6, 48),
(68, 'Métiers de l\'éducation, de la culture, des loisirs, et de l\'animation agissant pour l\'utilité sociale et environnementale, au service des territoires (IDCC 1518)', 10, 6, 11, 5, 48),
(69, 'Nettoyage', 12, 6, 11, 4, 46),
(70, 'Optique-lunetterie de détail (IDCC 1431)', 10, 6, 11, 5, 48),
(71, 'Organismes de tourisme (IDCC 1909)', 10, 6, 11, 10, 48),
(72, 'Ouvriers de la boulangerie de la Martinique (IDCC 901)', 10, 6, 11, 6, 48),
(73, 'Ouvriers employés par les entreprises du bâtiment (IDCC 1597)', 10, 6, 11, 5, 48),
(74, 'Pâtisserie (IDCC 1267)', 10, 6, 11, 6, 48),
(75, 'Pâtisserie (IDCC 1267) - maj. dimanche', 10, 6, 11, 6, 48),
(76, 'PDS', 11, 6, 11, 6, 48),
(77, 'Personnel des cabinets médicaux (IDCC 1147)', 10, 6, 11, 6, 48),
(78, 'Personnel des centres équestres (IDCC 7012)', 10, 6, 11, 6, 46),
(79, 'Personnel des entreprises de restauration de collectivité (IDCC 1266)', 13, 6, 11, 6, 48),
(80, 'Personnel des parcs et jardins zoologiques privés ouverts au public (IDCC 7017)', 10, 6, 11, 6, 48),
(81, 'Personnel des prestataires de services dans le domaine du secteur tertiaire (IDCC 2098)', 10, 6, 11, 6, 48),
(82, 'Personnel des prestataires de services dans le domaine du secteur tertiaire (IDCC 2098)', 13, 6, 11, 5, 48),
(83, 'Pharmacie d\'officine (IDCC 1996)', 10, 6, 11, 5, 48),
(84, 'Poissonnerie (IDCC : 1504)', 10, 6, 11, 6, 48),
(85, 'Pompes funèbres (IDCC 759)', 10, 6, 11, 6, 48),
(86, 'Production audiovisuelle (IDCC 2642)', 12, 6, 11, 6, 48),
(87, 'Professions de la photographie (IDCC 3168)', 10, 6, 11, 6, 44),
(88, 'Promotion immobilière (IDCC 1512)', 10, 6, 11, 6, 48),
(89, 'Remontées mécaniques et domaines skiables (IDCC 454)', 10, 6, 11, 6, 48),
(90, 'Restauration rapide (IDCC 1501)', 10, 6, 11, 8, 48),
(91, 'Restauration Rapide (IDCC 1501) (Paris et province après 22h et 00h)', 10, 6, 12, 8, 48),
(92, 'Sécurité', 12, 6, 11, 4, 46),
(93, 'Services de l\'automobile IDCC: 1090 APE: 5221Z', 10, 6, 11, 6, 48),
(94, 'Sport (IDCC 2511)', 10, 6, 11, 6, 44),
(95, 'Suisse - Utrans 2016', 14, 5, 11, 5, 45),
(96, 'Tourisme social et familial (IDCC 1316)', 12, 6, 11, 6, 48),
(97, 'Transports routiers et activités auxiliaires du transport (IDCC 16) - Activités du transport sanitaire', 12, 6, 11, 6, 48),
(98, 'Transports routiers et activités auxiliaires du transport (IDCC 16) - Transports de marchandises', 13, 6, 11, 6, 48),
(99, 'Transports routiers et activités auxiliaires du transport (IDCC 16) - Transports de voyageurs', 12, 6, 11, 6, 48),
(100, 'Travail du personnel des imprimeries de labeur et des industries graphiques (IDCC 184) ', 12, 5, 12, 5, 45),
(101, 'Travail mécanique du bois, des scieries, du négoce et de l\'importation des bois (158)', 10, 6, 11, 6, 46),
(102, 'VETERINAIRE PERSONNEL SALARIE (IDCC 1875) ', 12, 6, 11, 6, 48),
(103, 'VETERINAIRE PRATICIEN SALARIE (IDCC 2564)', 12, 6, 11, 6, 48),
(104, 'Viandes (Industrie et commerce en gros des viandes) (IDCC 1534)', 10, 5, 11, 0, 48),
(105, 'Vins, cidres, jus de fruits, sirops, spiritueux et liqueurs de France (IDCC 493)', 10, 6, 11, 0, 42),
(106, 'Worker\'s rights act of 2019 (Législation du travail Ile Maurice)', 8, 11, 11, 7, 45);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` int DEFAULT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `path` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `google2fas`
--

CREATE TABLE `google2fas` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` int NOT NULL,
  `google2fa_enable` tinyint(1) NOT NULL DEFAULT '0',
  `google2fa_secret` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `id` int UNSIGNED NOT NULL,
  `user_id` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `immatriculation` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `medicine` enum('MEDECINE INTERNE ETABLISSEMENT','001 - 1 AST ALSACE SANTE AU TRAVAIL','002 - AIMT DU PORT DU RHIN','003 - ACST ASSOCIATION DE CONSEIL EN SANTE AU TRAVAIL','004 - SPST CENTRE ALSACE COLMAR','005 - AMT DE LA REGION DE CERNAY','006 - AMT DE THANN ET ENVIRONS','007 - AMT DE LA REGION FRONTALIERE SAINT- LOUIS','008 - AMT DE MASEVAUX ET ENVIRONS','009 - AIMT DU SUNDGAU A ALTKIRCH','010 - AIEMT DE COLMAR ET DE SA REGION','011 - AIEMT DE GUEBWILLER','012 - STSA REGION MULHOUSE','013 - MSA D ALSACE','014 - SRSTT - MIDI PYR. /CH.VIOLETTE(L UNION)','015 - CENTRE DE GESTION DE LA HAUTE-SOANE','022 - SISTB BERGERAC','023 - SIMT PERIGUEUX','024 - AHI 33 SERVICE DE SANTE AU TRAVAIL','025 - ASS. INDUSTR. BALLASTIERE','026 - SERVICE INTERENTREPRISES SANTE TRAVAIL LIBOURNE','027 - SERVICE SANTE TRAVAIL INTERENTREPRISES','028 - SSTL MONT-DE-MARSAN','029 - SSTL DAX','030 - CIST VILLENEUVE SUR LOT','031 - MT ARRONDISSEMENT AGEN','032 - ASS. HYGIENE INDUST. OLORON','033 - PRISSM - PAU (PREVENTION RISQUE SURVEILLANCE MEDICALE)','034 - ASS. MEDECINE TRAVAIL ORTHEZ','035 - ASTPB','036 - SIMETRA','037 - CENTRE DE GESTION 64','041 - CMT VICHY','042 - SERVICES INTERENTREPRISES DE SANTE AU TRAVAIL DE MOULINS','043 - CMT MONTLUCON','044 - ACISMT','045 - AIST LE PUY - YSSINGEAUX','046 - AIST BRIOUDE LANGEAC SAUGUES','047 - AIST DU PUY DE DOME','060 - MEDECINE COLLECTIVITES LOCALE','061 - SST - BTP ET INDUSTRIES CONNEXES DE COTE D OR','062 - AIST 21','063 - COMITE DE MEDECINE DU TRAVAIL DU CHATILLONNAIS','064 - MT DE LA NIEVRE','066 - SST BTP 71','067 - SIMT CHALON','068 - SMTI DE LA REGION DE SENS','069 - AIST 89','070 - SMTI DU JOVINIEN','071 - SMTI DU TONNERROIS','081 - AIDAMT','082 - SIST','083 - M.T.I. BREST INTERPROFESSIONNEL','084 - SANTE AU TRAVAIL EN IROISE','085 - SANTE PREVENTION BTP 29','086 - SANTE AU TRAVAIL EN CORNOUAILLE','087 - S.M.I.R. MORLAIX / MORLAIX BTP','088 - AST 35','089 - STPF SANTE AU TRAVAIL DU PAYS DE FOUGERES','090 - STSM SANTE AU TRAVAIL DU PAYS DE ST MALO','091 - S.M.E.B.T.P.C.','092 - AMIEM','093 - CDG FONCTION PUBLIQUE TERRITORIALE DU MORBIHAN','101 - MEDECINE DU TRAVAIL','102 - SISTEL','103 - ASS. INTERPROFESSIONNELLE SERVICE MEDICAL DU TRAVAIL','104 - ASS. POUR LES ENTREPRISES B.T.P POUR LA MEDECINE DU TRAVAIL','105 - A.I.M.T. (ASSOC. INTERPRO. POUR LA MEDECINE DU TRAVAIL)','106 - SAN.T.BTP.','108 - SANTE INTERENTREPRISES DE PREVENTION ET DE SANTE AU TRAVAIL','109 - APSMT-BLOIS','110 - CIHL SARAN','111 - CENTRE DE GESTION FTP INDRE ET LOIRE','121 - ARDENNES SANTE TRAVAIL','123 - AMITR','124 - GIST DU BARROIS','125 - GISMA','126 - AMTER','127 - CIEMT','128 - GASBTP','129 - GIMTA','130 - SMIRC','131 - SMIRR','132 - ASS. INTERENTREPRISES DES SERVICES MEDICAUX DE LA HAUTE-MARNE','141 - MT CORSE DU SUD','142 - MT HAUTE CORSE','151 - MEDECINE DU TRAVAIL','153 - AIMS DU HAUT DOUBS','154 - MEDECINE DU TRAVAIL DU BTP DE FRANCHE-COMTE','155 - ASSOCIATION MEDICALE DU TRAVAIL','158 - CENTRE DEPARTEMENTAL DE GESTION DE LA FONCTION PUBLIQUE','159 - SERVICE SANTE TRAVAIL NORD FRANCHE COMTE – SSTNFC','161 - ASP','163 - ACMS','167 - AMI','168 - AMPI','169 - APST BTP RP','171 - SIMT SERVICE INTERPROFESSIONNEL DE MEDECINE DU TRAVAIL','175 - CIAMT','176 - SIST CENTRE MEDICAL DE LA BOURSE','177 - CENTRE MEDICAL PUBLICITE ET COMMUNICATION','178 - SANTE AU TRAVAIL EN ILE DE FRANCE','179 - EFFICIENCE - ANCIENNT CMTIE','181 - CMIE','182 - SISTBP','183 - CMSM','189 - SEMSI CODE','190 - SIFSAT','191 - SMST CODE','192 - SERSIMT CODE','195 - AMETIF CODE','197 - AISP METRA','199 - SIST','201 - AIRST','203 - OBJECTIF SANTE TRAVAIL','204 - SMIROP','207 - AMEDICLEN','208 - HORIZON SANTE TRAVAIL','209 - IPAL','211 - SMIE BOIS COLOMBES','212 - SEST','215 - AMET','216 - AICAC','218 - SIMT','220 - A.C.I.S.T','221 - GIM','222 - GIMAC','224 - ASTE','230 - SIST BTP 77','261 - S.I.S.T SERVICE INTERENTREPRISE DE SANTE AU TRAVAIL DE NARBONNE','262 - SCE INTERPROFESSIONNEL DE SANTE AU TRAVAIL','263 - A.C.M.T. (CANTON DE GANGES)','264 - A.I.S.M.T. BEAUCAIRE','265 - A.I.S.M.T. NIMES','266 - A.M.T. CENTRE MARCOULE','267 - CMI ALES MENDE','268 - AMETRA','269 - MT BATIMENT ET TP','270 - A.I.S.T.','271 - A.I.P.A.L.S.','274 - THAU SALAGOU SANTE TRAVAIL (T2ST)','275 - A.S.T.I.M MARVEJOLS','276 - PST 66','277 - MEDECINE BANCAIRE','302 - AIST 19 - ASSOCIATION INTERENTREPRISES','303 - ACIMT','304 - AMCO','305 - SERVICE MEDICAL INTER-ENTR. DES ORG. DE SECURITE SOCIALE DU R.G.','306 - AIST 87','311 - SIST DES B.T.P. ET DES ACTIVITES CONNEXES DE LORRAINE','312 - SERVICE MEDICAL INTERPROFESSIONNEL MEUSIEN','313 - MEDECINE DU TRAVAIL METZ','316 - MEDECINE DU TRAVAIL THIONVILLE','317 -SERV. INTERENTREPRISES DE SANTE AU TRAVAIL REGION ROSSELLE-NIED','319 - SERVICE DE SANTE AU TRAVAIL SAINT DIE','320 - SERVICE DE SANTE AU TRAVAIL EPINAL','321 - SERVICE DE SANTE AU TRAVAIL NEUFCHATEAU','322 - SERVICE DE SANTE AU TRAVAIL REMIREMONT','323 - ASS LORRAINE DES SERV MEDICAUX DU TRAVAIL','331 - ASTA09 / ASSOCIATION SANTE AU TRAVAIL DE L ARIEGE','332 - MEDECINE DU TRAVAIL VILLEFRANCHE RGUE','333 - SIMCA MILLAU','334 - MEDECINE DU TRAVAIL RODEZ','335 - SMISA','336 - SST ARTISANAT-CMTA/ETOILE (TLSE)','338 - SST (ST-GAUDENS)','340 - ASTIA/ASS DE MEDECINE ET DE SANTE AU TRAVAIL (TLSE)','341 - SAMSI / PLACE JOURDAIN (TLSE)','343 - SERVICE ST (MURET)','344 - SERVICE ST (REVEL)','346 - SRAS BPTP/RECOLLETS(TLSE)','347 - CSTG (AUCH)','348 - MEDECINE DU TRAVAIL 46','349 - ASMT DES HAUTES-PYRENEES','352 - SISTTS SECTEUR MAZAMET','353 - SERVICE PARITAIRE DE SANTE AU TRAVAIL DU TARN','354 - SANTE AU TRAVAIL ALBI','356 - SISTTS REGION CASTRES','357 - SMTI 82 MONTAUBAN','363 - ASTAV','364 - STSA - SANTE TRAVAIL SAMBRE AVESNOIS','366 - AIMST DE CAMBRAI','367 - SERVICE DE SANTE INTER BANQUES','369 - CEDEST DUNKERQUE','372 - POLE SANTE TRAVAIL METROPOLE NORD','373 - STSA - SANTE TRAVAIL SAMBRE AVESNOIS','375 - (SIMUP) HALLUIN','378 - AST 62-59','379 - AST 62-59 - CENTRE MEDICAL DE LENS','380 - AST 62-59 - CENTRE MEDICAL D HENIN- BEAUMONT','382 - AST 62-59 - CENTRE MEDICAL D ARRAS','383 - ASTIL - ASS. SANTE AU TRAVAIL INTERENTREPRISES DU LITTORAL 62','384 - SANTRAVIR','385 - GISTAF','386 - SISTM CHERBOURG','387 - SISTM SAINT-LO','388 - SMTBTP CHERBOURG','389 - SISTM COUTANCES','390 - AMTH BEAUMONT','391 - MIT VILLE CHERBOURG OCTEVILLE','392 - ASTISMIE - ASS SANTE AU TRAVAIL','393 - ASSOCIATION SANTE AU TRAVAIL','400 - SIST BTP 61','401 - CIST61','402 - ASTIF','403 - PST','404 - CMAIC','405 - SIST','412 - AMIVA ASS INTERPROFESSIONNELLE DE LA VALLE DE L ANDELLE','413 - AMSIE DE BERNAY BRIONNE ET PONT- AUDEMER','414 - ASS AMI SANTE AU TRAVAIL','415 - AMSIE REGION DE GISORS','416 - AMSIE VERNEUIL SUR AVRE','417 - AMSIE VERNON ET REGION','418 - SANTE AU TRAVAIL BTP EURE','419 - GIMETRA GROUPEMENT INTERPROFESSIONNEL DE MEDECINE DU TRAVAIL','421 - MEDECINE DU TRAVAIL BOLBEC AIHIMT','422 - AMSN','423 - MEDECINE DU TRAVAIL DE DIEPPE','425 - MEDECINE DU TRAVAIL DU HAVRE AIST','426 - MEDECINE DU TRAVAIL DU HAVRE CMHI','427 - YVETOT ( POUR AMSN )','428 - BATIMENT ET TRAVAUX PUBLICS','429 - SERVICE MEDICAL DU TRAVAIL (COMMERCE ET PME)','430 - MEDECINE DU TRAVAIL BATIMENT BTP','431 - ADESTI','432 - MEDECINE DU TRAVAIL FECAMP ISTF','433 - MEDECINE DU TRAVAIL PORTUAIRE','440 - UNION DES USAGERS DU PORT DE ROUEN','441 - SERVICE SANTE TRAVAIL REGION NANTAISE SSTRN','442 - AMEBAT','444 - GROUP INTERPROF SANTE AU TRAVAIL GIST','445 - MTPL','446 - SMIE SERVICE MEDICAL INTER ENTREPRISES','447 - SMIA DE L ANJOU','448 - STCS CHOLET - SAUMUR','449 - SMI DU SAUMUROIS','451 - S.A.T.M.','452 - SERVICE SARTHOIS DE MEDECINE DU TRAVAIL','453 - RESTEV','454 - AHMT - FONTENAY LE COMTE','456 - AHMT - CHALLANS','457 - S M T - SABLES D OLONNE','471 - MEDECINE DU TRAVAIL SOISSONS','472 - MEDECINE TRAVAIL ST QUENTIN','473 - SMIN','474 - MTVO COMPIEGNE','475 - M.E.D.I.S.I.S BEAUVAIS','476 - S.M.I.B.T.P.','477 - UMTV','478 - AISTV','479 - AMSIH','480 - ASMIS','491 - SISTA ANGOULEME','492 - SISTAC COGNAC','493 - A.S.T.S ASSOCIATION SANTE AU TRAVAIL DE SAINTONGE - JONZAC-','494 - MEDECINE DU TRAVAIL A.P.A.S.','495 - SANTE AU TRAVAIL D AUNIS','496 - A.S.T.S ASSOCIATION SANTE AU TRAVAIL DE SAINTONGE - SAINTES -','497 - SIMT DEUX-SEVRES','498 - ASSOC SERV. MEDICAUX DU TRAVAIL DE LA VIENNE','499 - MEDECINE DU TRAVAIL MSA LANGUEDOC','501 - ASSO INTERPROF SANTE MEDECINE TRAVAIL ALPES HAUTE-PROVENCE AISMT','502 - GEST 05','503 - AMETRA 06','504 - APST BTP 06','506 - CMTI 06','507 - AISMT 13. 0491812029','514 - ASTBTP13 0491230330','515 - GIMS','516 - SANTE AU TRAVAIL PROVENCE 0442162499','517 - EXPERTIS 04 91 99 05 10','519 - AIST 83','524 - AIST 84','525 - SANTE AU TRAVAIL DURANCE LUBERON 0490066160','526 - GMSI 84','527 - TRANSPORTEURS ROUTIERS DU VAR','531 - MT PERONNAS & AUTRES','532 - COMITE MEDECINE DU TRAVAIL','533 - CMT BATIMENT','535 - ASS AUBENAS ET SA REGION','536 - ASS PRIVAS ET SA REGION','537 - ASS MEDECINE DU TRAVAIL REGION TAIN-TOURNON','538 - COMITE SM HAUT VIVARAIS','540 - AIP ASS VALENCE ET REGION','541 - REGION DE NYONS','542 - ROMANS ET SA REGION','543 - SITE NUCLEAIRE','544 - REGION DE SAINT VALLIER','545 - VALLEE DE LA DROME','546 - SIST26/07','547 - SMT ALPES SANTE TRAVAIL TRAVAIL TEMPORAIRE','549 - SMT DE BOURGOIN JALLIEU','550 - SMT ALPES SANTE TRA VAIL','551 - ASSOC DE MT INTERBANCAIRES','552 - MT BATIMENT ET TX PUBLICS DE L ISERE','553 - SMT METRAZIF','554 - MT2I','555 - SERVICE MEDICAL INTERENTREPRISES','556 - SM INTERENTREPRISE','557 - SERVICE MEDICAL DU TRAVAIL DE BOEN','558 - SERVICE MEDICAL DE ST-CHAMOND','559 - SERVICE MEDICAL DE CHARLIEU','560 - SERVICE MEDICAL DU TRAVAIL DU B.T.P.','561 - SERVICE MEDICAL DU TRAVAIL SUD LOIRE ( ST-ETIENNE )','562 - SERVICE MEDICAL DE ROANNE','564 - SERVICE MEDICAL DU TRAVAIL SUD LOIRE (GIER)','570 - AGEMETRA','571 - MEDECINE DU TRAVAIL DE COURS','572 - BTP SANTE AU TRAVAIL','573 - MEDECINE DU TRAVAIL DE L OUEST LYONNAIS','574 - A S T GRAND LYON','575 - MED. DU TRAVAIL DE THIZY','576 - MED. DU TRAVAIL DE VILLEFRANCHE','577 - MED. DU TRAVAIL RHONE POULENC AGRO','578 - CENTRE MEDECINE TRAVAIL DE SAVOIE','580 - MEDECINE DU TRAVAIL DU BATIMENT','582 - ASMI SALLANCHES','583 - ASMI SCIONZIER','585 - ASS SANTE AU TRAVAIL DU GENEVOIS','586 - AST74','587 - ASMI BONNEVILLE','600 - CENTRE INTER-ENTREPRISE DE MEDECINE DU TRAVAIL (CIMT)','601 - MEDECINE DU TRAVAIL DE LA GUADELOUPE ( MTG BTP )','602 - ASS.INTERPR.MEDECINE DU TRAVAIL','603 - CTRE DE MEDECINE DU TRAVAIL','604 - CISTC','605 - STKOG','606 - INTERMETRA METRAG','607 - SISTBI','608 - 2MT MARTINIQUE MEDECINE TRAVAIL','827 - CISTTAA','833 - SST BORDEAUX','864 - SIMETRA ET ASTPB','Code SST - Libellé Service de Santé au Travail') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `medicine_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `postcode` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `productivity` double(8,2) NOT NULL DEFAULT '0.00',
  `conventioncollective_id` int DEFAULT NULL,
  `code_ape_id` varchar(550) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shift_id` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`id`, `user_id`, `name`, `immatriculation`, `medicine`, `medicine_id`, `address`, `postcode`, `city`, `country`, `productivity`, `conventioncollective_id`, `code_ape_id`, `shift_id`, `created_at`, `updated_at`) VALUES
(17, '2', 'Carrefour', '1233422FF4', 'MEDECINE INTERNE ETABLISSEMENT', '002', '4 place pierre semard', '75322', 'Paris', 'FR', 77.00, 6, '11.07A', '8,10', '2021-03-08 05:27:34', '2021-03-15 06:20:07'),
(20, '2', 'bnp', '488484H', 'MEDECINE INTERNE ETABLISSEMENT', '002', '44 place', '87444', 'Rouen', 'FX', 55.00, 7, '1071B', '16', '2021-04-09 09:43:20', '2021-04-09 09:43:20'),
(21, '2', 'Testing', '444XX', 'MEDECINE INTERNE ETABLISSEMENT', '001', 'House-16, Road-5, Block-D', '7500', 'Landan', 'BD', 50.00, 5, '4520A', '8,12', '2021-04-09 09:58:15', '2021-04-09 09:58:15'),
(22, '2', 'Test', '55555DSX', 'MEDECINE INTERNE ETABLISSEMENT', '001', 'House-16, Road-5, Block-D', '7500', 'Landan', 'BD', 50.00, 7, '1071A', '8,12', '2021-04-09 09:59:43', '2021-04-09 09:59:43');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2017_08_24_000000_create_settings_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_10_14_130139_create_permission_tables', 1),
(6, '2019_10_20_235738_create_activity_log_table', 1),
(7, '2019_11_06_102701_create_google2fas_table', 1),
(8, '2020_01_06_193639_create_stripe_plans_table', 1),
(9, '2020_02_06_151213_create_articles_table', 1),
(10, '2020_03_08_234129_create_subscriptions_table', 1),
(11, '2020_03_20_152321_create_article_categories_table', 1),
(12, '2020_08_08_113943_create_webhook_calls_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` int UNSIGNED NOT NULL,
  `model_type` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` int UNSIGNED NOT NULL,
  `model_type` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\User', 1),
(2, 'App\\User', 2),
(2, 'App\\User', 3),
(3, 'App\\User', 4),
(2, 'App\\User', 5),
(2, 'App\\User', 6),
(2, 'App\\User', 7),
(3, 'App\\User', 14),
(2, 'App\\User', 17),
(3, 'App\\User', 21),
(1, 'App\\User', 22),
(1, 'App\\User', 23),
(1, 'App\\User', 24),
(3, 'App\\User', 27),
(3, 'App\\User', 28),
(3, 'App\\User', 29),
(3, 'App\\User', 30),
(3, 'App\\User', 31),
(3, 'App\\User', 32),
(3, 'App\\User', 33),
(3, 'App\\User', 34),
(3, 'App\\User', 35),
(3, 'App\\User', 41),
(3, 'App\\User', 43),
(3, 'App\\User', 45),
(3, 'App\\User', 46),
(3, 'App\\User', 48),
(3, 'App\\User', 50),
(2, 'App\\User', 51),
(2, 'App\\User', 52),
(2, 'App\\User', 53),
(2, 'App\\User', 55),
(3, 'App\\User', 56),
(2, 'App\\User', 58),
(2, 'App\\User', 60),
(3, 'App\\User', 61),
(3, 'App\\User', 62),
(2, 'App\\User', 63),
(2, 'App\\User', 64),
(2, 'App\\User', 65),
(2, 'App\\User', 66),
(2, 'App\\User', 67);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('papy@demo.com', '$2y$10$wmSdKSS70toBABlfECp3T.1YezPXWNvhMsRrskIHqrQyKivGIkPKK', '2021-04-04 16:40:01');

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` int UNSIGNED NOT NULL,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `removable` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `removable`, `created_at`, `updated_at`) VALUES
(1, 'user-activity', 'web', 0, '2021-02-27 20:43:50', '2021-02-27 20:43:50'),
(2, 'manage-user', 'web', 0, '2021-02-27 20:43:50', '2021-02-27 20:43:50'),
(3, 'manage-permission', 'web', 0, '2021-02-27 20:43:50', '2021-02-27 20:43:50'),
(4, 'manage-role', 'web', 0, '2021-02-27 20:43:50', '2021-02-27 20:43:50'),
(5, 'manage-setting', 'web', 0, '2021-02-27 20:43:50', '2021-02-27 20:43:50'),
(6, 'manage-payment-gateway', 'web', 0, '2021-02-27 20:43:50', '2021-02-27 20:43:50');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int UNSIGNED NOT NULL,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `removable` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `removable`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'web', 0, '2021-02-27 20:43:50', '2021-02-27 20:43:50'),
(2, 'users', 'web', 0, '2021-02-27 20:43:50', '2021-02-27 20:43:50'),
(3, 'staff', 'web', 0, '2021-02-27 20:45:23', '2021-02-27 20:45:23'),
(6, 'papa', 'web', 1, '2021-03-30 13:31:53', '2021-03-30 13:31:53'),
(7, 'driver', 'web', 1, '2021-03-30 14:56:14', '2021-03-30 14:56:14'),
(8, 'testing', 'web', 1, '2021-03-30 15:21:56', '2021-03-30 15:21:56'),
(9, 'update', 'web', 1, '2021-04-01 11:25:12', '2021-04-01 11:25:38'),
(10, 'chaud', 'web', 1, '2021-04-01 11:53:16', '2021-04-01 11:53:16');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` int UNSIGNED NOT NULL,
  `role_id` int UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(3, 2),
(4, 2),
(4, 3);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int UNSIGNED NOT NULL,
  `key` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `key`, `value`) VALUES
(1, 'app_name', 'LaraSw'),
(2, 'app_dark_logo', 'http://161.35.221.169/uploads/appLogo/app-logo-dark.png'),
(3, 'app_light_logo', 'http://161.35.221.169/uploads/appLogo/app-logo-light.png'),
(4, 'app_theme', 'dark'),
(5, 'app_navbar', '#007BFF'),
(6, 'app_sidebar', 'light'),
(7, 'app_currency', 'USD'),
(8, 'stripe_key', 'pk_live_BRC1qqtBTAuLSm4mAuzcTdLw'),
(9, 'stripe_secret', 'sk_live_Ub2rEGCOXCr4Jeh2KaHbuIGt'),
(10, 'stripe_status', '1'),
(11, 'captcha', '0'),
(12, '2fa', '1'),
(13, 'email_verification', '0');

-- --------------------------------------------------------

--
-- Table structure for table `shift`
--

CREATE TABLE `shift` (
  `id` int NOT NULL,
  `user_id` int NOT NULL,
  `name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `start_time` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `end_time` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `shift`
--

INSERT INTO `shift` (`id`, `user_id`, `name`, `start_time`, `end_time`, `created_at`, `updated_at`) VALUES
(8, 2, 'Shift 1', '12:00', '16:00', '2021-02-08 05:47:18', '2021-02-15 10:51:46'),
(10, 2, 'Shift 2', '12:34', '23:34', '2021-02-08 05:49:17', '2021-02-15 10:51:46'),
(12, 2, 'Shift 3', '12:34', '23:34', '2021-02-08 05:49:17', '2021-02-15 10:51:46'),
(13, 2, 'Shift 4', '12:34', '23:34', '2021-02-08 05:49:17', '2021-02-15 10:51:46'),
(14, 2, 'Shift 5', '12:34', '23:34', '2021-02-08 05:49:17', '2021-02-15 10:51:46'),
(15, 2, 'Shift 6', '12:34', '23:34', '2021-02-08 05:49:17', '2021-02-15 10:51:46'),
(16, 2, 'Test shift', '08:30', '17:00', '2021-02-15 10:49:17', '2021-02-15 10:51:46');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` int UNSIGNED NOT NULL,
  `user_id` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` enum('MALE','FEMALE') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `placebirth` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nationality` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nin` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `postcode` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `qualification` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `qualification_action` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contract_type` enum('CDD','CDI','Saisonnier','Apprentissage','Extra','Intérim','Stagiaire','Fin de contrat') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `hiring_date` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location_id` int DEFAULT NULL,
  `position` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `monthly_salary` double(8,2) NOT NULL DEFAULT '0.00',
  `hourly_salary` double(8,2) NOT NULL DEFAULT '0.00',
  `overtime_salary` double(8,2) NOT NULL DEFAULT '0.00',
  `weekly_working_time` tinyint NOT NULL DEFAULT '35',
  `daily_breaks_time` tinyint NOT NULL DEFAULT '0',
  `holidays_per_year` tinyint NOT NULL DEFAULT '0',
  `shift` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `staff_nip` varchar(55) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `current_plan` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT 'Basic'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `user_id`, `name`, `gender`, `placebirth`, `nationality`, `nin`, `address`, `postcode`, `city`, `qualification`, `qualification_action`, `contract_type`, `hiring_date`, `location_id`, `position`, `monthly_salary`, `hourly_salary`, `overtime_salary`, `weekly_working_time`, `daily_breaks_time`, `holidays_per_year`, `shift`, `staff_nip`, `status`, `role_id`, `updated_at`, `created_at`, `current_plan`) VALUES
(38, '2', 'Konock Reza', NULL, 'Bangladesh', 'BD', '256458524562', 'Khulna', '1251', 'Khulna', NULL, NULL, 'CDD', '2021-03-23', 17, 'author', 0.00, 0.00, 0.00, 35, 0, 0, '12', NULL, 'Active', '3', '2021-03-13 04:45:10', '2021-03-13 15:24:43', 'Basic'),
(40, '44', 'Kev Adam', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'CDD', NULL, NULL, 'train', 0.00, 0.00, 0.00, 35, 0, 0, NULL, NULL, 'Active', '3', '2021-03-13 16:53:49', '2021-03-13 16:53:49', 'Basic'),
(41, '2', 'Rakib Mia', 'FEMALE', 'Bangladesh', 'BD', '5451221545454454', 'Mirpur', '1215', 'dhaka', '6', '7', 'CDD', '30-03-2021', NULL, 'casher', 10.00, 10.00, 10.00, 35, 3, 3, '12', NULL, 'Active', '3', '2021-03-30 00:59:55', '2021-03-13 18:54:57', 'Basic'),
(42, '47', 'Mohona khan', 'FEMALE', 'Bangladesh', 'BD', '01254587569854', 'Mohammadpur', '1200', 'Dhaka Uttar', '4', '7', 'CDD', '2021-03-14', NULL, 'Accountent', 0.00, 0.00, 0.00, 35, 0, 0, NULL, NULL, 'Active', '3', '2021-03-13 07:39:14', '2021-03-13 18:56:45', 'Basic'),
(43, '49', 'qwerty qq', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'CDD', NULL, NULL, 'papa', 0.00, 0.00, 0.00, 35, 0, 0, NULL, NULL, 'Active', '3', '2021-03-14 20:12:55', '2021-03-14 20:12:55', 'Basic'),
(44, '55', 'gold george', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'CDD', NULL, NULL, 'pirate', 0.00, 0.00, 0.00, 35, 0, 0, NULL, NULL, 'Active', '3', '2021-03-30 04:55:19', '2021-03-29 14:38:38', 'Basic'),
(45, '2', 'Liakot Hossain', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'CDD', NULL, 17, 'casher', 0.00, 0.00, 0.00, 35, 0, 0, NULL, NULL, 'Active', '3', '2021-04-09 08:13:19', '2021-04-01 15:14:04', 'Basic'),
(46, '2', 'Testing User', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'CDD', NULL, NULL, 'casher', 0.00, 0.00, 0.00, 35, 0, 0, NULL, NULL, 'Active', '3', '2021-04-01 16:12:50', '2021-04-01 16:12:50', 'Basic');

-- --------------------------------------------------------

--
-- Table structure for table `staff_role`
--

CREATE TABLE `staff_role` (
  `id` int NOT NULL,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `user_id` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `staff_role`
--

INSERT INTO `staff_role` (`id`, `name`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Manager', 2, '2021-03-02 06:08:34', '2021-03-02 06:08:34'),
(2, 'Driver', 2, '2021-03-02 06:32:51', '2021-03-02 06:32:51'),
(3, 'Cooker', 2, '2021-03-02 06:45:25', '2021-03-02 06:45:25'),
(4, 'helper', 2, '2021-03-02 06:50:04', '2021-03-02 06:50:04'),
(5, 'cleanaer', 2, '2021-03-02 06:53:13', '2021-03-02 06:53:13'),
(7, 'sweaper', 2, '2021-03-02 06:53:48', '2021-03-02 06:53:48'),
(9, 'casher', 2, '2021-03-02 06:57:27', '2021-03-02 06:57:27'),
(10, 'zibra', 2, '2021-03-02 06:58:24', '2021-03-02 06:58:24'),
(11, 'gard', 2, '2021-03-02 07:22:07', '2021-03-02 07:22:07'),
(12, 'security', 2, '2021-03-02 07:22:56', '2021-03-02 07:22:56'),
(13, 'cheef', 2, '2021-03-03 06:07:50', '2021-03-03 06:07:50'),
(14, 'superU', 2, '2021-03-08 08:54:26', '2021-03-08 08:54:26'),
(15, 'Driver', 20, '2021-03-11 05:43:56', '2021-03-11 05:43:56'),
(16, 'Writer', 39, '2021-03-13 16:11:12', '2021-03-13 16:11:12'),
(17, 'train', 44, '2021-03-13 16:53:40', '2021-03-13 16:53:40'),
(18, 'test', 2, '2021-03-13 17:42:26', '2021-03-13 17:42:26'),
(19, 'Accountent', 47, '2021-03-13 18:56:39', '2021-03-13 18:56:39'),
(20, 'papa', 49, '2021-03-14 20:12:52', '2021-03-14 20:12:52'),
(21, 'pirate', 55, '2021-03-29 14:38:34', '2021-03-29 14:38:34'),
(22, 'superasdf', 2, '2021-04-01 12:57:15', '2021-04-01 12:57:26'),
(23, 'train', 2, '2021-04-01 13:00:49', '2021-04-01 13:00:49'),
(24, 'mugywara', 55, '2021-04-01 13:01:40', '2021-04-01 13:05:28'),
(25, 'test', 2, '2021-04-08 09:24:57', '2021-04-08 09:24:57'),
(26, 'rroollee', 2, '2021-04-09 16:41:09', '2021-04-09 16:41:09'),
(27, 'StaffRole', 46, '2021-04-14 16:48:01', '2021-04-14 16:48:01');

-- --------------------------------------------------------

--
-- Table structure for table `staff_role_permissions`
--

CREATE TABLE `staff_role_permissions` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` int UNSIGNED NOT NULL,
  `role_id` int UNSIGNED NOT NULL,
  `menu_id` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `staff_role_permissions`
--

INSERT INTO `staff_role_permissions` (`id`, `user_id`, `role_id`, `menu_id`, `created_at`, `updated_at`) VALUES
(1, 62, 9, '[\"5\",\"6\",\"7\",\"9\",\"10\",\"11\"]', '2021-04-14 10:45:25', '2021-04-16 08:06:51'),
(2, 2, 2, '[\"4\"]', '2021-04-14 12:00:46', '2021-04-14 12:00:46'),
(3, 55, 21, '[\"4\",\"5\",\"6\",\"7\",\"8\",\"9\",\"10\",\"11\"]', '2021-04-15 09:52:36', '2021-04-15 11:13:21');

-- --------------------------------------------------------

--
-- Table structure for table `stripe_plans`
--

CREATE TABLE `stripe_plans` (
  `id` bigint UNSIGNED NOT NULL,
  `plan_name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `plan_id` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `plan_description` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `plan_interval` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `plan_intervalCount` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `plan_logo` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `plan_amount` double(8,2) NOT NULL,
  `trial_period_days` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `stripe_plans`
--

INSERT INTO `stripe_plans` (`id`, `plan_name`, `plan_id`, `plan_description`, `plan_interval`, `plan_intervalCount`, `plan_logo`, `plan_amount`, `trial_period_days`, `created_at`, `updated_at`) VALUES
(7, 'test', 'plan_JGSza7a2XAdAfY', '<p>Description</p>', 'month', '1', NULL, 2000.00, '17', '2021-04-08 09:29:46', '2021-04-08 09:29:46');

-- --------------------------------------------------------

--
-- Table structure for table `subscriptions`
--

CREATE TABLE `subscriptions` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_id` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `subscription_id` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `subscription_amount` double NOT NULL,
  `plan_name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `subscription_start_date` datetime NOT NULL,
  `subscription_end_date` datetime NOT NULL,
  `subscription_trial_period` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `timesheets`
--

CREATE TABLE `timesheets` (
  `id` int NOT NULL,
  `user_id` int NOT NULL,
  `staff_id` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `location_id` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `time` time NOT NULL,
  `clock_in` time NOT NULL,
  `clock_out` time NOT NULL,
  `break` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `break_time` time NOT NULL,
  `total_time` time NOT NULL,
  `status` enum('Work','Break','Missing','Leave','Overtime','Vacation') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `gps` mediumtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `overtime` time NOT NULL,
  `cash_tips` double(8,2) NOT NULL DEFAULT '0.00',
  `credit_tips` double(8,2) NOT NULL DEFAULT '0.00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

-- --------------------------------------------------------

--
-- Table structure for table `todo`
--

CREATE TABLE `todo` (
  `id` int UNSIGNED NOT NULL,
  `user_id` int NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `assignee` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `due_date` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `tag` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('','Important','Completed','Deleted') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL DEFAULT '',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `todo`
--

INSERT INTO `todo` (`id`, `user_id`, `title`, `assignee`, `due_date`, `tag`, `description`, `status`, `created_at`, `updated_at`) VALUES
(31, 56, 'test', '44', '09-04-2021', 'Low', '<p><br></p>', '', '2021-04-08 23:09:12', '2021-04-08 23:09:12'),
(32, 2, 'TestUPdate', '38,41', '09-04-2021', 'Team,Low', '<p><span style=\"color: rgb(94, 88, 115);\">Description</span></p>', 'Completed', '2021-04-08 23:11:50', '2021-04-08 23:13:17'),
(33, 46, 'Add Task', '41', '09-04-2021', 'Low', '<p><span style=\"color: rgb(94, 88, 115);\">Description</span></p>', '', '2021-04-08 23:20:26', '2021-04-08 23:20:26'),
(34, 46, 'Add Task', '41', '09-04-2021', 'Low', '<p><span style=\"color: rgb(94, 88, 115);\">DescriptionDescription</span></p>', '', '2021-04-08 23:26:11', '2021-04-08 23:26:11'),
(35, 2, 'partir', '41', '09-04-2021', 'Medium', '<p>My descrip</p>', '', '2021-04-08 23:30:29', '2021-04-08 23:30:29'),
(36, 2, 'TestUPdate', NULL, '09-04-2021', 'Medium', '<p><span style=\"color: rgb(94, 88, 115);\">Description</span></p>', '', '2021-04-08 23:44:49', '2021-04-08 23:44:49'),
(37, 2, 'seul', NULL, '09-04-2021', 'Low', '<p><br></p>', '', '2021-04-08 23:47:02', '2021-04-08 23:47:02'),
(38, 56, 'seul', '44', '09-04-2021', 'Low', '<p><br></p>', '', '2021-04-08 23:47:23', '2021-04-08 23:47:23'),
(39, 62, 'todo', '46', '15-04-2021', 'Low', '<p>Description</p>', '', '2021-04-14 05:11:12', '2021-04-14 05:11:12');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` int DEFAULT '0',
  `role_id` int DEFAULT '0',
  `firstname` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lastname` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fullname` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `postcode` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `immatricule` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `note` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `birthday` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `username` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `stripe_id` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stripe_subscriptionId` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `password` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider_id` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `staff_id` int DEFAULT '0',
  `last_login_at` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_login_ip` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `terms` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_id`, `role_id`, `firstname`, `lastname`, `fullname`, `email`, `phone`, `address`, `postcode`, `city`, `country`, `immatricule`, `website`, `note`, `birthday`, `email_verified_at`, `username`, `status`, `stripe_id`, `stripe_subscriptionId`, `password`, `provider`, `provider_id`, `avatar`, `remember_token`, `created_at`, `updated_at`, `staff_id`, `last_login_at`, `last_login_ip`, `terms`) VALUES
(1, 0, 1, NULL, NULL, 'LaraSwift Test', 'admin@demo.com', '0612332233', '88 rue de la plax', '333333', 'Paris', 'DZ', NULL, 'www.googel.fr', 'Good review', NULL, '2021-03-09 16:06:01', 'admin', 'active', NULL, NULL, '$2y$10$ihPx3Sq9xJWaibf.TVYIDurZZxv9raKbJi189nzE2HL5SxMPTvKqy', NULL, NULL, 'http://161.35.221.169/uploads/avatar/1617619948.png', NULL, '2021-03-09 16:06:01', '2021-04-14 10:57:56', 0, '2021-04-14 12:57:56', '78.193.101.113', NULL),
(2, 0, 2, 'Company1', NULL, 'Company1', 'company@demo.com', '06121212199', '12 rue de la paix', '09090909', 'Paris', 'FX', '455345664FF', NULL, NULL, NULL, '2021-03-09 16:06:01', 'company1', 'active', NULL, NULL, '$2y$10$uDJ9OE.AaL.3/2npIdLWuOhCn/KvdxlfO6n8ei6JDYPR8oEuPcvXO', NULL, NULL, 'http://161.35.221.169/uploads/avatar/1617908465.png', NULL, '2021-03-09 16:06:01', '2021-04-17 20:40:57', 0, '2021-04-17 22:40:57', '78.193.101.113', NULL),
(41, 2, 3, 'Konock', 'Reza', 'Konock Reza', 'konock@gmail.com', '0126548', 'Khulna', NULL, NULL, 'BD', NULL, NULL, NULL, '12-25-12211', NULL, 'konockreza', 'active', NULL, NULL, '$2y$10$pd5GdTLofhs8XEYnZDM4f.WzOa6prGgLrlHJOoL9ZRk.qt90sidkq', NULL, NULL, 'http://161.35.221.169/uploads/avatar/avatar.png', NULL, '2021-03-13 15:24:43', '2021-04-09 12:00:04', 38, '2021-04-09 14:00:04', '103.78.190.16', NULL),
(45, 44, 3, 'Kev', 'Adam', 'Kev Adam', 'adam@demo.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'kevadam', 'active', NULL, NULL, '$2y$10$kuCtLSXZsUaHkb8ZeDZkCeytQeEY2ECyAEA/Zm967CjFI0EfJZpKe', NULL, NULL, 'http://161.35.221.169/uploads/avatar/avatar.png', NULL, '2021-03-13 16:53:49', '2021-03-13 16:53:49', 40, NULL, NULL, NULL),
(46, 2, 3, 'Rakib', 'Mia', 'Rakib Mia', 'rakib@gmail.com', '21254555555', 'Mirpur', NULL, NULL, 'BD', NULL, NULL, NULL, '30-03-2021', NULL, 'rakibmia', 'active', NULL, NULL, '$2y$10$pd5GdTLofhs8XEYnZDM4f.WzOa6prGgLrlHJOoL9ZRk.qt90sidkq', NULL, NULL, 'http://161.35.221.169/uploads/avatar/1617896336.png', NULL, '2021-03-13 18:54:57', '2021-04-16 02:58:26', 41, '2021-04-16 04:58:26', '119.30.32.168', NULL),
(48, 47, 3, 'Mohona', 'khan', 'Mohona khan', 'mohona@gmail.com', NULL, 'Mohammadpur', NULL, NULL, 'BD', NULL, NULL, NULL, '2021-03-14', NULL, 'mohonakhan', 'active', NULL, NULL, '$2y$10$6RQy59F0eKNvXgIRdOa/..Rgdo5tkSYCwD68D5elvzqYtDMkq4Y7u', NULL, NULL, 'http://161.35.221.169/uploads/avatar/avatar.png', NULL, '2021-03-13 18:56:46', '2021-03-13 07:39:14', 42, NULL, NULL, NULL),
(50, 49, 3, 'qwerty', 'qq', 'qwerty qq', 'qwerty@demo.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'qwertyqq', 'active', NULL, NULL, '$2y$10$vJrNit2V7pcbCRf8HXwZa.jyC02TWzIS.u4xLq1f/BRr/N7cdVL9q', NULL, NULL, 'http://161.35.221.169/uploads/avatar/avatar.png', NULL, '2021-03-14 20:12:55', '2021-03-15 19:01:28', 43, '2021-03-15 20:01:28', '78.193.101.113', NULL),
(51, 0, 2, 'new', 'company', 'new company', 'new@gmail.com', '12345678', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'New company', 'active', NULL, NULL, '$2y$10$BWYiixNvIrpFyiGEiAngO.ejlRsDoR3z3.wJcsraxB6bT7xRITnDO', NULL, NULL, 'http://161.35.221.169/uploads/avatar/avatar.png', NULL, '2021-03-27 06:01:28', '2021-03-27 06:01:29', 0, '2021-03-27 07:01:29', '103.78.190.16', NULL),
(53, 0, 2, 'Pomme', 'Fruit', 'Pomme Fruit', 'tarte@demo.com', '1718539358', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Tarte', 'active', NULL, NULL, '$2y$10$9EXVf2N18UpFnRCvzHouqOk/P24WCkGXMMYm6BChV7MMxHvu5.xTO', NULL, NULL, 'http://161.35.221.169/uploads/avatar/avatar.png', NULL, '2021-03-27 07:24:41', '2021-03-27 07:24:41', 0, '2021-03-27 08:24:41', '37.173.116.162', NULL),
(55, 0, 2, 'papa', 'maman', 'papa maman', 'papy@demo.com', '0122112211', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'papy', 'active', NULL, NULL, '$2y$10$9SdbXB6VMWqfOOyrCv3VvOXBslgEkDYXsgdmRgHPlAns4XYDKZNhi', NULL, NULL, 'http://161.35.221.169/uploads/avatar/avatar.png', NULL, '2021-03-29 14:28:05', '2021-04-17 16:10:21', 0, '2021-04-17 18:10:21', '78.193.101.113', NULL),
(56, 55, 3, 'gold', 'george', 'gold george', 'gold@demo.com', '121212121', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'goldgeorge', 'active', NULL, NULL, '$2y$10$MIAXy/O5bquEVt0ZnPNAoOskn6s6CDzOWg66M.Oh6Xo9BRDXQCRQu', NULL, NULL, 'http://161.35.221.169/uploads/avatar/avatar.png', NULL, '2021-03-29 14:38:39', '2021-04-16 08:05:09', 44, '2021-04-16 10:05:09', '78.193.101.113', NULL),
(58, 0, 2, 'Ehan', 'Re', 'Rokomary', 'ehan@demo.com', '0126345585', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Rokomary', 'active', NULL, NULL, '$2y$10$TLKRGjmr/e546mRUex3vUelbNXJEeEwy761of8VyycvDDzV.v10rK', NULL, NULL, 'http://161.35.221.169/uploads/avatar/avatar.png', NULL, '2021-03-30 07:44:00', '2021-03-30 07:44:00', 0, '2021-03-30 09:44:00', '103.78.190.16', NULL),
(60, 0, 2, 'tv', 'french', 'TF1', 'tf1@demo.com', '1212434444', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'TF1', 'active', NULL, NULL, '$2y$10$9lXrHzbB2sp1srkQ62NkQerqKq/GpmVT20hNRTUcYLHUXAiL5kNjS', NULL, NULL, 'http://161.35.221.169/uploads/avatar/avatar.png', NULL, '2021-03-30 10:16:22', '2021-03-30 10:16:22', 0, '2021-03-30 12:16:22', '78.193.101.113', NULL),
(61, 2, 3, 'Liakot', 'Hossain', 'Liakot Hossain', 'liakot@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'liakothossain', 'active', NULL, NULL, '$2y$10$heCW1zTxL3Pxu7ivPOf2mebZNiKvSQrQyMd4MFVdligNhHWeG.v4y', NULL, NULL, 'http://161.35.221.169/uploads/avatar/avatar.png', NULL, '2021-04-01 15:14:04', '2021-04-09 08:13:19', 45, NULL, NULL, NULL),
(62, 2, 3, 'Testing', 'User', 'Testing User', 'testing@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'testinguser', 'active', NULL, NULL, '$2y$10$uDJ9OE.AaL.3/2npIdLWuOhCn/KvdxlfO6n8ei6JDYPR8oEuPcvXO', NULL, NULL, 'http://161.35.221.169/uploads/avatar/avatar.png', NULL, '2021-04-01 16:12:50', '2021-04-16 08:07:38', 46, '2021-04-16 10:07:38', '78.193.101.113', NULL),
(63, 0, 2, 'kl', 'kks', 'koko', 'koko@gmail.com', '39283772', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'koko', 'active', NULL, NULL, '$2y$10$SZuxWUe8bsnySVfn7Z3nAu1sfUtDG7mjtNOlIzU1VOpotonWFC/ka', NULL, NULL, 'http://161.35.221.169/uploads/avatar/avatar.png', NULL, '2021-04-02 19:11:11', '2021-04-02 19:11:11', 0, '2021-04-02 21:11:11', '78.193.101.113', NULL),
(64, 0, 2, 'mlml', 'lsjjd', 'mama', 'mama@demo.com', '9182772', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'mama', 'active', NULL, NULL, '$2y$10$cOaiPdrNYoNj5jN.GHA/rOqN.BgCM6e1wKSoN..BllEJwAZQE2ma.', NULL, NULL, 'http://161.35.221.169/uploads/avatar/avatar.png', NULL, '2021-04-08 09:09:23', '2021-04-08 09:09:23', 0, '2021-04-08 11:09:23', '78.193.101.113', NULL),
(65, 0, 2, 'My', 'One', 'Testing Company', 'myone@gmail.com', '123456789', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Testing Company', 'active', NULL, NULL, '$2y$10$yzNZ1vBaO/BSWX.UqVCU2uf9INL0qSWcgJABxyKF3UlaBiuPsLf16', NULL, NULL, 'http://161.35.221.169/uploads/avatar/avatar.png', NULL, '2021-04-08 13:49:24', '2021-04-08 13:49:24', 0, '2021-04-08 15:49:24', '103.78.190.16', 'agree'),
(66, 0, 2, 'Test', 'One', 'Testing Companysdfaf', 'testingOne@gmail.com', '012345678', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Testing Companysdfaf', 'active', NULL, NULL, '$2y$10$feva6bOEz6BKZt1VPonUrOM3RlmWuXEqCYMYQ7u1X2Ev9LJ22tdja', NULL, NULL, 'http://161.35.221.169/uploads/avatar/avatar.png', NULL, '2021-04-08 16:17:23', '2021-04-08 16:17:23', 0, '2021-04-08 18:17:23', '103.78.190.16', '1'),
(67, 0, 2, 'ssss', 'sss', 'mmks', 'sss@demo.com', '73737737', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'mmks', 'active', NULL, NULL, '$2y$10$rerAkBMakcIkz2ch6wVxO.9toIRMsCcEdqdRH5SFJ3SfLu3XZgBTq', NULL, NULL, 'http://161.35.221.169/uploads/avatar/avatar.png', NULL, '2021-04-08 16:19:38', '2021-04-08 16:19:38', 0, '2021-04-08 18:19:38', '78.193.101.113', '1');

-- --------------------------------------------------------

--
-- Table structure for table `webhook_calls`
--

CREATE TABLE `webhook_calls` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `exception` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activity_log`
--
ALTER TABLE `activity_log`
  ADD PRIMARY KEY (`id`),
  ADD KEY `activity_log_log_name_index` (`log_name`),
  ADD KEY `subject` (`subject_id`,`subject_type`),
  ADD KEY `causer` (`causer_id`,`causer_type`);

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `article_categories`
--
ALTER TABLE `article_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `calenders`
--
ALTER TABLE `calenders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `companies_email_unique` (`email`),
  ADD KEY `phone` (`phone`);

--
-- Indexes for table `convention_code_ape`
--
ALTER TABLE `convention_code_ape`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `convention_collective`
--
ALTER TABLE `convention_collective`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `google2fas`
--
ALTER TABLE `google2fas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`id`),
  ADD KEY `name` (`name`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `settings_key_index` (`key`);

--
-- Indexes for table `shift`
--
ALTER TABLE `shift`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff_role`
--
ALTER TABLE `staff_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff_role_permissions`
--
ALTER TABLE `staff_role_permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stripe_plans`
--
ALTER TABLE `stripe_plans`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `stripe_plans_plan_name_unique` (`plan_name`);

--
-- Indexes for table `subscriptions`
--
ALTER TABLE `subscriptions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `todo`
--
ALTER TABLE `todo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `webhook_calls`
--
ALTER TABLE `webhook_calls`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activity_log`
--
ALTER TABLE `activity_log`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1008;

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `article_categories`
--
ALTER TABLE `article_categories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `calenders`
--
ALTER TABLE `calenders`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `convention_code_ape`
--
ALTER TABLE `convention_code_ape`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=497;

--
-- AUTO_INCREMENT for table `convention_collective`
--
ALTER TABLE `convention_collective`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `google2fas`
--
ALTER TABLE `google2fas`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `location`
--
ALTER TABLE `location`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `shift`
--
ALTER TABLE `shift`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `staff_role`
--
ALTER TABLE `staff_role`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `staff_role_permissions`
--
ALTER TABLE `staff_role_permissions`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `stripe_plans`
--
ALTER TABLE `stripe_plans`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `subscriptions`
--
ALTER TABLE `subscriptions`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `todo`
--
ALTER TABLE `todo`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `webhook_calls`
--
ALTER TABLE `webhook_calls`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
