-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 18, 2021 at 08:09 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'Tayyab Tahir', 'admin@gmail.com', '$2y$10$BmO6Vqrl55X0IC3GPzhSC.9f5wgC1m29TPaMTPHWMVqUxq8CotMO6', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
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
(1, '2021_04_27_060655_create_users_table', 1),
(2, '2021_05_05_072345_create_products_table', 2),
(3, '2021_05_06_060806_create_cart_table', 3),
(4, '2021_05_06_135052_create_orders_table', 4),
(5, '2021_05_07_060237_create_admin_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_method` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `product_id`, `user_id`, `address`, `status`, `payment_method`, `payment_status`, `created_at`, `updated_at`) VALUES
(1, 3, 1, 'Shahdara Lahore', 'completed', 'Cash on Delivery', 'completed', '2021-05-06 11:10:34', '2021-05-07 08:49:42'),
(2, 1, 1, 'Shahdara Lahore', 'pending', 'Cash on Delivery', 'pending', '2021-05-06 11:10:34', '2021-05-06 11:10:34'),
(3, 7, 1, 'Shahdara Lahore', 'pending', 'Cash on Delivery', 'pending', '2021-05-06 11:10:34', '2021-05-06 11:10:34'),
(4, 2, 3, 'Lahore', 'pending', 'Cash on Delivery', 'pending', '2021-05-07 01:00:50', '2021-05-07 01:00:50');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gallery` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `category`, `gallery`, `description`, `created_at`, `updated_at`) VALUES
(1, 'LG Supper Mobile', '18000', 'Mobile', 'https://fdn2.gsmarena.com/vv/bigpic/lg-w41-pro.jpg', 'A smart phone with 4gb ram and much more features.', NULL, '2021-05-07 11:14:39'),
(2, 'Oppo Mobile', '21000', 'Mobile', 'https://fdn2.gsmarena.com/vv/bigpic/oppo-f11-pro-.jpg', '190g, 8.8mm thickness,Android 9.0, ColorOS 6,64GB/128GB storage, microSDXC.', NULL, NULL),
(8, 'Samsumg Mobile', '45000', 'Mobile', 'https://images.samsung.com/is/image/samsung/p6pim/pk/galaxy-s21/gallery/pk-galaxy-s21-5g-g991-371137-sm-g991bzvgmea-thumb-368371886?$320_320_PNG$', 'Smart Mobile with exciting features.', '2021-05-07 11:02:50', '2021-05-07 11:02:50'),
(9, 'Oppo Mobile f-11', '25000', 'Mobile', 'https://fdn2.gsmarena.com/vv/bigpic/oppo-f11-pro-.jpg', 'Released 2019, March 190g, 8.8mm thickness Android 9.0, ColorOS 6 64GB/128GB storage, microSDXC', '2021-05-18 00:28:45', '2021-05-18 00:28:45'),
(10, 'Samsung Galaxy Note 10 Plus', '50,000', 'Mobile', 'https://www.whatmobile.com.pk/admin/images/Samsung/SamsungGalaxyNote10Plus-b.jpg', 'Dual Sim, Dual Standby, Hybrid Dual SIM (Nano-SIM)', '2021-05-18 00:33:45', '2021-05-18 00:33:45');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'tayyab tahir', 'tayyabtahirshah34@gmail.com', '$2y$10$wNgTC9OL4/5fNxcE23hThOBfg4c69/T/MWRg9cBg37mC9EK2vfnbS', NULL, NULL),
(2, 'tayyab shah', 'tayyab.itexpert@gmail.com', '$2y$10$P6IWZTQqPt8NmgqsGHuinu8xYmS9fR9VFdWhjWyfC/fNztCsxzAuq', NULL, NULL),
(3, 'tayyab', 'bc160403744@vu.edu.pk', '$2y$10$SkRwvpka.mGTUWQqiHr9NueFj5YsriWogp92REZB/51mudEVM8dPC', '2021-05-07 00:49:48', '2021-05-07 00:49:48');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admin_email_unique` (`email`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
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
-- Indexes for table `products`
--
ALTER TABLE `products`
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
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
