-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 29, 2020 at 07:34 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nanny`
--

-- --------------------------------------------------------

--
-- Table structure for table `baby_infos`
--

CREATE TABLE `baby_infos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `owner_id` bigint(20) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_of_birth` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `baby_infos`
--

INSERT INTO `baby_infos` (`id`, `owner_id`, `name`, `date_of_birth`, `created_at`, `updated_at`) VALUES
(1, 2, 'Ayesha', '2020-10-01', '2020-10-17 11:11:26', '2020-10-17 11:11:26'),
(2, 3, 'Sayem', '2019-03-01', '2020-10-17 11:14:17', '2020-10-17 11:14:17');

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `banner_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `banner_image`, `created_at`, `updated_at`) VALUES
(3, '1602754162.jpg', '2020-10-15 03:29:22', '2020-10-15 03:29:22'),
(5, '1602952437.jpg', '2020-10-17 10:33:57', '2020-10-17 10:33:57'),
(6, '1602952905.jpg', '2020-10-17 10:41:45', '2020-10-17 10:41:45'),
(7, '1602953182.jpg', '2020-10-17 10:46:22', '2020-10-17 10:46:22'),
(8, '1602953758.jpg', '2020-10-17 10:55:58', '2020-10-17 10:55:58');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `title`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Test title', '1602753531.jpg', '2020-10-15 03:18:51', '2020-10-15 03:18:51'),
(2, 'Test title', '1602753538.jpg', '2020-10-15 03:18:58', '2020-10-15 03:18:58'),
(3, 'Test title', '1602753543.jpg', '2020-10-15 03:19:03', '2020-10-15 03:19:03'),
(4, 'Test title', '1602753548.jpg', '2020-10-15 03:19:08', '2020-10-15 03:19:08'),
(5, 'Test title', '1602754239.jpg', '2020-10-15 03:30:39', '2020-10-15 03:30:39'),
(6, 'Test title', '1602754246.jpg', '2020-10-15 03:30:46', '2020-10-15 03:30:46'),
(7, 'Test title', '1602754252.jpg', '2020-10-15 03:30:52', '2020-10-15 03:30:52'),
(8, 'Test title', '1602754442.jpg', '2020-10-15 03:34:02', '2020-10-15 03:34:02'),
(9, 'Test title', '1602754450.jpg', '2020-10-15 03:34:10', '2020-10-15 03:34:10');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_09_22_181352_create_banners_table', 1),
(5, '2020_09_23_072236_create_services_table', 1),
(6, '2020_09_24_094125_create_sections_table', 1),
(7, '2020_09_24_202329_create_baby_infos_table', 1),
(8, '2020_09_25_220154_create_teams_table', 1),
(9, '2020_09_25_222814_create_galleries_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sections`
--

CREATE TABLE `sections` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `service_id` bigint(20) NOT NULL,
  `age_range` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sections`
--

INSERT INTO `sections` (`id`, `service_id`, `age_range`, `title`, `details`, `created_at`, `updated_at`) VALUES
(2, 1, '6', 'Can you really make your baby smarter?', '<p><img alt=\"\" src=\"https://46y5eh11fhgw3ve3ytpwxt9r-wpengine.netdna-ssl.com/wp-content/uploads/2017/06/serve-and-return-main.jpg\" style=\"height:280px; width:420px\" /></p>\r\n\r\n<p>Every time that your child plays, interacts with you, giggles frowns, smiles, cries… they are learning, which means they are <em>getting smarter.</em>  So many parents want to know, “How can I teach my baby when they are so young?”  The truth is, this is a great age!  Between the ages of 6-12 months, you can expect your child to be learning a lot and really engaging in activities with you!  </p>\r\n\r\n<p>Be creative in your play with your child!  Sounds, touch, taste… these are all ways to teach babies.  You don’t need to buy a ‘Teach my baby learning kit’ … you just need to play. </p>', '2020-10-15 10:25:56', '2020-10-21 02:57:12');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `service_title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `service_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `service_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_upcoming` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `service_title`, `service_description`, `service_image`, `is_upcoming`, `created_at`, `updated_at`) VALUES
(1, 'Education', 'Description', '1602954462.jpg', NULL, '2020-10-15 04:05:45', '2020-10-17 11:07:42'),
(2, 'Basic Treatment', 'Description', '1602955899.jpg', NULL, '2020-10-15 04:21:39', '2020-10-17 11:31:39'),
(3, 'Baby Food', 'Description', '1602955655.jpg', NULL, '2020-10-15 08:52:19', '2020-10-17 11:27:35'),
(4, 'Shopping', 'Make your Kids Healthy & Smarter', '1603271039.jpg', 'on', '2020-10-21 03:03:59', '2020-10-21 03:03:59');

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `name`, `title`, `image`, `created_at`, `updated_at`) VALUES
(1, 'rayan', 'CEO', '1602754800.jpg', '2020-10-15 03:40:00', '2020-10-15 03:40:00'),
(2, 'khan', 'CEO', '1602754814.jpg', '2020-10-15 03:40:14', '2020-10-15 03:40:14'),
(3, 'shibly', 'CEO', '1602755717.jpg', '2020-10-15 03:55:17', '2020-10-15 03:55:17');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `admin`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', '1', NULL, '$2y$10$//ESgwPZEVtE4nSR0nZo1uZ7nDuBww0yWHr53psJhLH0xChSpniA6', NULL, '2020-10-15 03:01:41', '2020-10-15 03:01:41'),
(2, 'Maria', 'maria@gmail.com', '0', NULL, '$2y$10$aO.j2FMqmps.utmH4XKvL.Tjob6xHv9iB.OMMhx2yCrte9g7yhRmS', NULL, '2020-10-17 11:10:26', '2020-10-17 11:10:26'),
(3, 'Ssamiha', 'samiha@gmail.com', '0', NULL, '$2y$10$wNmAjKgYX3JiMR48TWdpieS9P0LCJxR9YNlI1lUku60p6xQGBaYvq', NULL, '2020-10-17 11:12:59', '2020-10-17 11:12:59');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `baby_infos`
--
ALTER TABLE `baby_infos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `sections`
--
ALTER TABLE `sections`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `baby_infos`
--
ALTER TABLE `baby_infos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `sections`
--
ALTER TABLE `sections`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
