-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 07, 2023 at 10:25 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inventory_demo`
--

-- --------------------------------------------------------

--
-- Table structure for table `barangs`
--

CREATE TABLE `barangs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `barangs`
--

INSERT INTO `barangs` (`id`, `nama`, `created_at`, `updated_at`) VALUES
(1, 'Barang 1', '2023-07-06 08:21:03', '2023-07-06 08:21:03'),
(2, 'Barang 2', '2023-07-06 08:21:03', '2023-07-06 08:21:03'),
(3, 'Barang 3', '2023-07-06 08:21:03', '2023-07-06 08:21:03'),
(4, 'Barang 4', '2023-07-06 08:21:03', '2023-07-06 08:21:03'),
(5, 'Barang 5', '2023-07-06 08:21:03', '2023-07-06 08:21:03');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `gudangs`
--

CREATE TABLE `gudangs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `lokasi` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gudangs`
--

INSERT INTO `gudangs` (`id`, `nama`, `created_at`, `updated_at`, `lokasi`) VALUES
(6, 'Gudang 1', '2023-07-06 12:03:47', '2023-07-06 12:03:47', 'Lokasi 1'),
(7, 'Gudang 2', '2023-07-06 12:03:47', '2023-07-06 12:03:47', 'Lokasi 2'),
(8, 'Gudang 3', '2023-07-06 12:03:47', '2023-07-06 12:03:47', 'Lokasi 3'),
(9, 'Gudang 4', '2023-07-06 12:03:47', '2023-07-06 12:03:47', 'Lokasi 4'),
(10, 'Gudang 5', '2023-07-06 12:03:47', '2023-07-06 12:03:47', 'Lokasi 5');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_07_06_094633_create_barangs_table', 2),
(6, '2023_07_06_094633_create_gudangs_table', 2),
(7, '2023_07_06_094736_create_stocks_table', 2),
(8, '2023_07_06_110013_add_api_token_and_endpoint_to_users', 3),
(9, '2023_07_06_120923_add_api_token_to_users', 4),
(10, '2023_07_06_150521_create_sales_table', 5),
(11, '2023_07_06_185634_add_lokasi_to_gudangs', 6),
(12, '2023_07_06_212822_add_nama_sales_to_stocks', 7);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `personal_access_tokens`
--

INSERT INTO `personal_access_tokens` (`id`, `tokenable_type`, `tokenable_id`, `name`, `token`, `abilities`, `last_used_at`, `expires_at`, `created_at`, `updated_at`) VALUES
(1, 'App\\Models\\User', 1, 'auth-token', '3f71b389c58c864ae61995e3d70dcae4cc7ae9324eccf3577d8a35b535a1bb15', '[\"*\"]', '2023-07-06 23:03:16', NULL, '2023-07-06 03:49:37', '2023-07-06 23:03:16'),
(2, 'App\\Models\\User', 2, 'api-token', 'ad449f9f998b64e4139afd29aa9d1eb2ddab7f44670e71f27876ed77bec9572c', '[\"*\"]', '2023-07-06 23:25:08', NULL, '2023-07-06 05:16:21', '2023-07-06 23:25:08'),
(3, 'App\\Models\\User', 2, 'API Token', '59305a7f03d1368e54eaa99583c209efb7abf0623d6e7a9d2b8874ec31bbdec0', '[\"*\"]', '2023-07-07 00:14:35', NULL, '2023-07-06 23:44:04', '2023-07-07 00:14:35'),
(4, 'App\\Models\\User', 2, 'API Token', '559c9a3b1f147c862c9d98bcf66714add192227b134d6bc11a62ce4b5e827ba7', '[\"*\"]', NULL, NULL, '2023-07-06 23:47:23', '2023-07-06 23:47:23'),
(5, 'App\\Models\\User', 2, 'API Token', '84fd2acd5cdd00e8d3ba44d54bdc49fbcd140b0468a7083c7036fad0c95fabf6', '[\"*\"]', NULL, NULL, '2023-07-06 23:47:23', '2023-07-06 23:47:23'),
(6, 'App\\Models\\User', 2, 'API Token', '34db2be0913e6352e262f3dfc2797e0f02d4b4dfc043dd195bfb927c81803615', '[\"*\"]', NULL, NULL, '2023-07-06 23:51:26', '2023-07-06 23:51:26'),
(7, 'App\\Models\\User', 2, 'API Token', '7fb7d59d422977806a3ec78f7e06b643b86ffd29ae3c26f953274a38313cf320', '[\"*\"]', NULL, NULL, '2023-07-06 23:52:00', '2023-07-06 23:52:00'),
(8, 'App\\Models\\User', 3, 'api-token', '80281e4d851a3a4c9f935ff7cce591840c9f1986822fd7aae8cdb3d791ecb1ef', '[\"*\"]', '2023-07-07 00:43:43', NULL, '2023-07-07 00:18:41', '2023-07-07 00:43:43'),
(9, 'App\\Models\\User', 3, 'API Token', 'd77f2b278b3648622a8ede2cabead42b3e3ee80ba2905fd836c6cad07661471a', '[\"*\"]', NULL, NULL, '2023-07-07 00:53:38', '2023-07-07 00:53:38'),
(10, 'App\\Models\\User', 3, 'API Token', '95c343a70efd0b10d930fdde8c44f17664b9c65164eba4716f3b6d269b2b77a2', '[\"*\"]', NULL, NULL, '2023-07-07 00:57:53', '2023-07-07 00:57:53'),
(11, 'App\\Models\\User', 2, 'API Token', 'cfd135e66c19c9194072e2c50996dedcd2553a6b2ec5f844863993b6b13f5c04', '[\"*\"]', NULL, NULL, '2023-07-07 01:04:51', '2023-07-07 01:04:51');

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `no_handphone` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`id`, `nama`, `email`, `no_handphone`, `created_at`, `updated_at`) VALUES
(1, 'Sales 1', 'sales1@example.com', '08123456781', '2023-07-06 08:26:20', '2023-07-06 08:26:20'),
(2, 'Sales 2', 'sales2@example.com', '08123456782', '2023-07-06 08:26:20', '2023-07-06 08:26:20'),
(3, 'Sales 3', 'sales3@example.com', '08123456783', '2023-07-06 08:26:20', '2023-07-06 08:26:20'),
(4, 'Sales 4', 'sales4@example.com', '08123456784', '2023-07-06 08:26:20', '2023-07-06 08:26:20'),
(5, 'Sales 5', 'sales5@example.com', '08123456785', '2023-07-06 08:26:20', '2023-07-06 08:26:20');

-- --------------------------------------------------------

--
-- Table structure for table `stocks`
--

CREATE TABLE `stocks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `sales_id` bigint(20) UNSIGNED NOT NULL,
  `barang_id` bigint(20) UNSIGNED NOT NULL,
  `gudang_id` bigint(20) UNSIGNED NOT NULL,
  `jumlah_stok` int(10) UNSIGNED NOT NULL,
  `tanggal_waktu_check_stok` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `stocks`
--

INSERT INTO `stocks` (`id`, `sales_id`, `barang_id`, `gudang_id`, `jumlah_stok`, `tanggal_waktu_check_stok`, `created_at`, `updated_at`) VALUES
(31, 5, 1, 10, 17, '2023-07-06 15:04:40', '2023-07-06 15:04:40', '2023-07-06 15:04:40'),
(32, 3, 3, 6, 42, '2023-07-06 15:04:40', '2023-07-06 15:04:40', '2023-07-06 15:04:40'),
(33, 4, 4, 6, 14, '2023-07-06 15:04:40', '2023-07-06 15:04:40', '2023-07-06 15:04:40'),
(34, 4, 3, 9, 89, '2023-07-06 15:04:40', '2023-07-06 15:04:40', '2023-07-06 15:04:40'),
(35, 5, 5, 6, 35, '2023-07-06 15:04:40', '2023-07-06 15:04:40', '2023-07-06 15:04:40'),
(36, 3, 1, 6, 69, '2023-07-06 15:04:40', '2023-07-06 15:04:40', '2023-07-06 15:04:40'),
(37, 5, 2, 10, 14, '2023-07-06 15:04:40', '2023-07-06 15:04:40', '2023-07-06 15:04:40'),
(38, 1, 2, 10, 5, '2023-07-06 15:04:40', '2023-07-06 15:04:40', '2023-07-06 15:04:40'),
(39, 5, 4, 7, 44, '2023-07-06 15:04:40', '2023-07-06 15:04:40', '2023-07-06 15:04:40'),
(40, 3, 5, 8, 44, '2023-07-06 15:04:40', '2023-07-06 15:04:40', '2023-07-06 15:04:40'),
(41, 1, 1, 6, 10, '2023-07-07 00:14:35', '2023-07-06 23:48:40', '2023-07-07 00:14:35');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `api_token` varchar(80) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `api_token`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin1@app.com', NULL, '$2y$10$jEx44iy3b6mbvv11NCQ3i.TYqcbaabNaKynF60dr6nuseoKIYlGuW', '1|Gcmo2M7TVP4it0zC92tGqKb8jrIJEO6SA9jNIUvY', NULL, '2023-07-06 03:46:14', '2023-07-06 03:46:14'),
(2, 'John', 'john@app.com', NULL, '$2y$10$IA9OWRj35hlvrVtsiXJNPeurk3LYzorv.8fTPtKHpQzl0jvseppDy', '11|AjOCYOg5fghLNtAFXtIyG7hQBNJopUgqL8IAcmIS', NULL, '2023-07-06 05:16:21', '2023-07-07 01:04:51'),
(3, 'admin', 'admin2@app.com', NULL, '$2y$10$4QIJS2pEY1MsBufUvsecOucWKA.nACINvTKScdORVverhGhAIFnrm', '10|KzAcxfOBg6q2ZaXhacCZGGuauKcvLHunrGq5eg8i', NULL, '2023-07-07 00:18:41', '2023-07-07 00:57:53');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barangs`
--
ALTER TABLE `barangs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `gudangs`
--
ALTER TABLE `gudangs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `sales_email_unique` (`email`);

--
-- Indexes for table `stocks`
--
ALTER TABLE `stocks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `stocks_barang_id_foreign` (`barang_id`),
  ADD KEY `stocks_gudang_id_foreign` (`gudang_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_api_token_unique` (`api_token`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barangs`
--
ALTER TABLE `barangs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gudangs`
--
ALTER TABLE `gudangs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `stocks`
--
ALTER TABLE `stocks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `stocks`
--
ALTER TABLE `stocks`
  ADD CONSTRAINT `stocks_barang_id_foreign` FOREIGN KEY (`barang_id`) REFERENCES `barangs` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `stocks_gudang_id_foreign` FOREIGN KEY (`gudang_id`) REFERENCES `gudangs` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
