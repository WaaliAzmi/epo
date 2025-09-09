-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 07, 2025 at 01:02 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `epo`
--

-- --------------------------------------------------------

--
-- Table structure for table `buy_requests`
--

CREATE TABLE `buy_requests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `credits` int(11) NOT NULL,
  `organization` varchar(255) NOT NULL,
  `reason` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `buy_requests`
--

INSERT INTO `buy_requests` (`id`, `name`, `email`, `phone`, `credits`, `organization`, `reason`, `created_at`, `updated_at`) VALUES
(1, 'Umer Farooq', 'umerfarooq1824@gmail.com', '03229552627', 5467890, 'asd bvgfjmkl,;.\'/', 'bvhjmk,.;', '2025-08-07 05:59:02', '2025-08-07 05:59:02');

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `carbon_activities`
--

CREATE TABLE `carbon_activities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `activity_type` varchar(255) NOT NULL,
  `quantity` double NOT NULL,
  `unit` varchar(255) NOT NULL,
  `carbon_credits` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `carbon_activities`
--

INSERT INTO `carbon_activities` (`id`, `activity_type`, `quantity`, `unit`, `carbon_credits`, `created_at`, `updated_at`) VALUES
(2, 'tree_planting', 2159236475869, 'tree', 75573276655.415, '2025-07-29 04:16:45', '2025-07-29 04:16:45'),
(3, 'tree_planting', 21592, 'tree', 475.024, '2025-07-29 04:24:18', '2025-07-29 04:24:18'),
(4, 'shipping', 25, 'kg', 0.5, '2025-07-29 04:39:32', '2025-07-29 04:39:32'),
(5, 'solar_installation', 87, 'kwh', 5.22, '2025-07-31 01:18:57', '2025-07-31 01:18:57'),
(6, 'tree_planting', 20000, 'trees', 440, '2025-07-31 05:25:24', '2025-07-31 05:25:24'),
(8, 'tree_planting', 27000, 'trees', 594, '2025-08-07 01:19:24', '2025-08-07 01:19:24'),
(9, 'solar_installation', 24054365, 'watt', 1443261.9, '2025-08-07 01:22:40', '2025-08-07 01:22:40'),
(10, 'solar_installation', 24054365, 'watt', 1443261.9, '2025-08-07 01:23:18', '2025-08-07 01:23:18'),
(11, 'solar_installation', 24054365, 'watt', 1443261.9, '2025-08-07 01:23:22', '2025-08-07 01:23:22'),
(12, 'solar_installation', 24054365, 'watt', 1443261.9, '2025-08-07 01:23:27', '2025-08-07 01:23:27'),
(13, 'solar_installation', 24054365, 'watt', 1443261.9, '2025-08-07 01:23:31', '2025-08-07 01:23:31');

-- --------------------------------------------------------

--
-- Table structure for table `credit_sale_requests`
--

CREATE TABLE `credit_sale_requests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `credits` double NOT NULL,
  `verification_image` varchar(255) NOT NULL,
  `contact` text NOT NULL,
  `bank` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `credit_sale_requests`
--

INSERT INTO `credit_sale_requests` (`id`, `credits`, `verification_image`, `contact`, `bank`, `created_at`, `updated_at`) VALUES
(1, 1235465678, 'verifications/XqoU9swhec0IvOV8IcAkUYCZJHStD3fXLl41heK8.jpg', 'wqasdfghjkjljkhgfdsa', 'asdsgfdjhgjkhghdsfafdgfhmgfdsfad', '2025-08-07 02:29:50', '2025-08-07 02:29:50'),
(2, 1235465678, 'verifications/EX7AqDhBQ8UGJoF0EKSJtrrTujaTX7oaGsXzdaDh.jpg', 'wqasdfghjkjljkhgfdsa', 'asdsgfdjhgjkhghdsfafdgfhmgfdsfad', '2025-08-07 02:29:56', '2025-08-07 02:29:56'),
(3, 1235465678, 'verifications/mSYLUuyUNqsPJVE7pBEaghmwMyyYRo4tdbL54rto.jpg', 'wqasdfghjkjljkhgfdsa', 'asdsgfdjhgjkhghdsfafdgfhmgfdsfad', '2025-08-07 02:29:57', '2025-08-07 02:29:57');

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
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2025_07_14_083239_add_role_to_users_table', 1),
(5, '2025_07_18_065716_create_products_table', 2),
(6, '2025_07_24_064322_create_orders_table', 3),
(7, '2025_07_24_072022_create_order_items_table', 3),
(8, '2025_07_29_084011_create_carbon_activities_table', 4),
(9, '2025_07_29_091212_add_quantity_to_carbon_activities_table', 5),
(10, '2025_07_31_115137_create_personal_access_tokens_table', 6),
(11, '2025_08_04_072202_create_password_resets_table', 7),
(12, '2025_08_04_064540_enhance_orders_table_add_new_fields', 8),
(13, '2025_08_06_102303_add_address_to_orders_table', 8),
(14, '2025_08_07_071737_create_credit_sale_requests_table', 9),
(15, '2025_08_07_083356_create_buy_requests_table', 10);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `payment_method` enum('cod','card') NOT NULL,
  `total` decimal(10,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `name`, `phone`, `email`, `address`, `payment_method`, `total`, `created_at`, `updated_at`) VALUES
(7, 'Umer Farooq', '03229552627', 'umerfarooq1824@gmail.com', NULL, 'cod', 500.00, '2025-07-24 05:59:59', '2025-07-24 05:59:59'),
(8, 'Umer Farooq', '03229552627', 'umerfarooq1824@gmail.com', NULL, 'cod', 500.00, '2025-07-28 01:03:42', '2025-07-28 01:03:42'),
(9, 'Umer Farooq', '03229552627', 'umerfarooq1824@gmail.com', NULL, 'cod', 500.00, '2025-07-28 01:07:59', '2025-07-28 01:07:59'),
(10, 'Ahtesham', '03125770016', 'abc@gmail.com', NULL, 'cod', 500.00, '2025-07-31 01:25:04', '2025-07-31 01:25:04'),
(11, 'Umer Farooq', '03229552627', 'umerfarooq1824@gmail.com', NULL, 'cod', 500.00, '2025-08-04 01:13:08', '2025-08-04 01:13:08'),
(12, 'Umer Farooq', '03229552627', 'umerfarooq1824@gmail.com', 'aslam market, wah cantt', 'cod', 90.00, '2025-08-07 00:44:24', '2025-08-07 00:44:24');

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`id`, `order_id`, `product_id`, `product_name`, `quantity`, `price`, `created_at`, `updated_at`) VALUES
(4, 7, 2, 'oragnic leafy green', 1, 500.00, '2025-07-24 05:59:59', '2025-07-24 05:59:59'),
(5, 8, 2, 'oragnic leafy green', 1, 500.00, '2025-07-28 01:03:42', '2025-07-28 01:03:42'),
(6, 9, 2, 'oragnic leafy green', 1, 500.00, '2025-07-28 01:08:00', '2025-07-28 01:08:00'),
(7, 10, 2, 'oragnic leafy green', 1, 500.00, '2025-07-31 01:25:04', '2025-07-31 01:25:04'),
(8, 11, 2, 'oragnic leafy green', 1, 500.00, '2025-08-04 01:13:08', '2025-08-04 01:13:08'),
(9, 12, 4, 'Plush Doll', 1, 90.00, '2025-08-07 00:44:24', '2025-08-07 00:44:24');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('epo.environment@gmail.com', 'n0sNfJF6OEDbZwPhB0PkTS4hOUF98fkTLHbSJqljXDeQ2XKCYUov8rYjNFngeCT0', '2025-08-04 05:38:51');

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
  `name` text NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `stock` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `price`, `stock`, `created_at`, `updated_at`, `image`) VALUES
(4, 'Plush Doll', 'Plush doll is a silent', 90.00, 87, '2025-08-04 01:15:21', '2025-08-04 01:15:21', 'products/xAO5hmuRySyidt2lZr3LnozQqaJcmG7CoQswR5Un.png');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('KbFT9AION8tVddH6AApNzjJxcJppFkbFw6Jn06Kv', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiU1N6VmNRYXVZQ21ETDJkdEpOQTgwM3hpT2FGdzdZZjNHZ2RQUG9vSSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzM6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9jcmVkaXRzL2J1eSI7fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7fQ==', 1754564342);

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
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role` varchar(255) NOT NULL DEFAULT 'buyer'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `role`) VALUES
(1, 'Admin User', 'admin@gmail.com', '2025-07-15 09:20:31', '$2y$12$g8.lEroWwEuFktAO4cKcBuyAWXrBCdU9lctZhlWNhomm2XiF3L402', NULL, '2025-07-15 09:20:31', '2025-07-31 04:38:46', 'admin'),
(3, 'umer', 'umerfarooq1824@gmail.com', NULL, '$2y$12$bgSqZkne/TimfMrmK5XZ1O6124o.B6loE9p98e8ximR5ZbMZ/EOqS', NULL, '2025-07-17 01:08:37', '2025-08-04 03:24:38', 'buyer'),
(5, 'Plush Doll', 'plushdoll123@gmail.com', NULL, '$2y$12$zpYHTEzh8sMGAajoU9Toq.SJDzAW2ReseSHc3G.6eaZ9PzbDsqzUW', NULL, '2025-07-18 02:46:31', '2025-07-18 02:46:31', 'buyer'),
(6, 'abc', 'abc@gmail.com', NULL, '$2y$12$DkxrKKhXj5n/xPupvDhYhuYxEdnanmN/ruGszzbYDmhV6Pe8JrFu2', NULL, '2025-07-31 01:24:05', '2025-07-31 01:24:05', 'buyer'),
(7, 'moiz', 'epo.environment@gmail.com', NULL, '$2y$12$cL.ua1P0D9U/n2HFQeg/ve4KR6rXnUkkNRmOGeLW02AiU/i2AJK0W', NULL, '2025-08-04 05:38:06', '2025-08-04 05:38:06', 'buyer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buy_requests`
--
ALTER TABLE `buy_requests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `carbon_activities`
--
ALTER TABLE `carbon_activities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `credit_sale_requests`
--
ALTER TABLE `credit_sale_requests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_items_order_id_foreign` (`order_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

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
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`),
  ADD KEY `personal_access_tokens_expires_at_index` (`expires_at`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

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
-- AUTO_INCREMENT for table `buy_requests`
--
ALTER TABLE `buy_requests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `carbon_activities`
--
ALTER TABLE `carbon_activities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `credit_sale_requests`
--
ALTER TABLE `credit_sale_requests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `order_items`
--
ALTER TABLE `order_items`
  ADD CONSTRAINT `order_items_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
