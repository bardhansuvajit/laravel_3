-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
<<<<<<< HEAD
-- Generation Time: Aug 10, 2021 at 03:59 PM
=======
-- Generation Time: Aug 09, 2021 at 04:10 PM
>>>>>>> a9f60ad08bd2e15f6413c228c24d3591ba1b9672
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel_multiauth2`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cat_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `cat_id`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, 1, 'blog title', '<p>blog description</p>', '2021-08-10 07:50:52', '2021-08-10 07:50:52');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `created_at`, `updated_at`) VALUES
(1, 'science', '2021-08-10 05:48:17', '2021-08-10 05:48:17'),
(2, 'history', '2021-08-10 05:48:22', '2021-08-10 05:48:22');

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
(5, '2021_08_10_041149_create_categories_table', 2),
(6, '2021_08_10_104558_create_blogs_table', 3);

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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` tinyint(1) NOT NULL,
  `favouriteColor` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `picture` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `role`, `favouriteColor`, `picture`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
<<<<<<< HEAD
(1, 'Suvajit Bardhan 2', 'admin@admin.com', 1, NULL, '431991628504914_avatar.png', NULL, '$2y$10$AaVEFsXRRfUTChq2CHBAqOobfnFmUlPdg6O6NGNgD8AF17teqrdSC', NULL, '2021-08-08 06:08:32', '2021-08-10 06:12:11'),
(2, 'test user', 'test@test.com', 2, NULL, NULL, NULL, '$2y$10$9H9LZe7PaIM9A6K.c4rHQeDP2.QuhsudkSP0PCEZEO18qz9INy2r2', NULL, '2021-08-08 06:10:53', '2021-08-08 06:10:53'),
(8, 'Suvajit Bardhan', 'bardhansuvajit@gmail.com', 2, 'red', '697621628504767_avatar.png', NULL, '$2y$10$GHh3e3cmTvMbut8P5dp1Be3d5ykRgyUkLjB05ZwhJTD0OsYgOGTPG', NULL, '2021-08-09 04:56:08', '2021-08-09 04:56:08'),
(9, 'Suvajit Bardhan', 'bardhansuvajit@gmail.com2', 2, 'ee', '431991628504914_avatar.png', NULL, '$2y$10$7w52OOBrWhPjd8Lt95GiJ.L/nq5MLs8b0McVOaqQ3g6iSIWuFna1O', NULL, '2021-08-09 04:58:34', '2021-08-09 04:58:34'),
(10, 'Suvajit Bardhan', 'bardhansuvajit@gmail.com3', 2, 'test', '320611628578324_avatar.png', NULL, '$2y$10$9n/IMZb7dC04DegH.48a2ORMv.fpRTuDlyLkneskvwIFM3r08sLS.', NULL, '2021-08-10 01:22:04', '2021-08-10 01:22:04');
=======
(1, 'Suvajit Bardhan', 'admin@admin.com', 1, NULL, '431991628504914_avatar.png', NULL, '$2y$10$AaVEFsXRRfUTChq2CHBAqOobfnFmUlPdg6O6NGNgD8AF17teqrdSC', NULL, '2021-08-08 06:08:32', '2021-08-08 06:08:32'),
(2, 'test user', 'test@test.com', 2, NULL, NULL, NULL, '$2y$10$9H9LZe7PaIM9A6K.c4rHQeDP2.QuhsudkSP0PCEZEO18qz9INy2r2', NULL, '2021-08-08 06:10:53', '2021-08-08 06:10:53'),
(8, 'Suvajit Bardhan', 'bardhansuvajit@gmail.com', 2, 'red', '697621628504767_avatar.png', NULL, '$2y$10$GHh3e3cmTvMbut8P5dp1Be3d5ykRgyUkLjB05ZwhJTD0OsYgOGTPG', NULL, '2021-08-09 04:56:08', '2021-08-09 04:56:08'),
(9, 'Suvajit Bardhan', 'bardhansuvajit@gmail.com2', 2, 'ee', '431991628504914_avatar.png', NULL, '$2y$10$7w52OOBrWhPjd8Lt95GiJ.L/nq5MLs8b0McVOaqQ3g6iSIWuFna1O', NULL, '2021-08-09 04:58:34', '2021-08-09 04:58:34');
>>>>>>> a9f60ad08bd2e15f6413c228c24d3591ba1b9672

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `blogs_cat_id_foreign` (`cat_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
<<<<<<< HEAD
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `blogs`
--
ALTER TABLE `blogs`
  ADD CONSTRAINT `blogs_cat_id_foreign` FOREIGN KEY (`cat_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;
=======
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
>>>>>>> a9f60ad08bd2e15f6413c228c24d3591ba1b9672
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
