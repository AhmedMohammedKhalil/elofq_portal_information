-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 24, 2024 at 08:36 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `elofq_portal_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `heading` text NOT NULL,
  `title` text NOT NULL,
  `content` text NOT NULL,
  `image` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `heading`, `title`, `content`, `image`, `created_at`, `updated_at`) VALUES
(1, 'من نحن', 'أ.نورة فهد العجمى', 'أختصاص مكتبات', 'about.jpg', '2024-01-19 06:16:26', '2024-01-19 06:16:26');

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `password` varchar(191) NOT NULL,
  `c_number` varchar(191) NOT NULL,
  `image` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `c_number`, `image`, `created_at`, `updated_at`) VALUES
(1, 'ادمن', 'admin@gmail.com', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '963258741123', 'af587013-4075-46ad-aa8f-f3af515acb67.jpg', '2024-01-19 05:43:45', '2024-01-19 17:44:36');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) NOT NULL,
  `author` varchar(191) DEFAULT NULL,
  `isbn` varchar(191) DEFAULT NULL,
  `classification_number` varchar(191) NOT NULL,
  `pages_number` varchar(191) DEFAULT NULL,
  `book_height` varchar(191) DEFAULT NULL,
  `publishing_house` text DEFAULT NULL,
  `publishing_location` text DEFAULT NULL,
  `publishing_year` text DEFAULT NULL,
  `printer_number` text DEFAULT NULL,
  `image` varchar(100) DEFAULT NULL,
  `subject` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `title`, `author`, `isbn`, `classification_number`, `pages_number`, `book_height`, `publishing_house`, `publishing_location`, `publishing_year`, `printer_number`, `image`, `subject`, `created_at`, `updated_at`) VALUES
(1, 'دائرة المعارف المصورة للأطفال', 'سهير العلماوى', NULL, '31.م', '150', '24', 'الهيئة المصرية العامة', NULL, NULL, 'ط2', 'book-1.jpg', 'كتب الأطفال - دائرة المعارف العربية', '2024-01-19 18:26:58', '2024-01-19 20:30:14'),
(2, 'الكويت وتاريخها البحرى ورحلة الشراع', 'احمد عبدالعزيز المزينى', NULL, '953,31', '166', '24', 'ذات السلاسل', 'ذات السلاسل', '1986', 'ط1', 'book-5.jpg', 'تاريخ الكويت - التاريخ', '2024-01-19 18:34:16', '2024-01-19 20:46:24'),
(3, 'التداوى بعسل النحل', 'عبدالمنعم قنديل', NULL, '615,3', '127', '24', 'دار الجيل', 'دار الجيل', '1987', 'ط2', 'book-7.jpg', 'عسل النحل - العلاج بعسل النحل', '2024-01-19 18:34:16', '2024-01-19 18:34:16'),
(5, 'التداوى بعسل النحل', 'عبدالمنعم قنديل', NULL, '615,3', '127', '24', 'دار الجيل', 'دار الجيل', '1987', 'ط2', 'book-9.jpg', 'عسل النحل - العلاج بعسل النحل', '2024-01-19 18:34:16', '2024-01-19 18:34:16');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(2, '2023_03_15_053119_create_admins_table', 1),
(3, '2023_11_30_173824_create_services_table', 1),
(4, '2023_11_30_174014_create_books_table', 1),
(5, '2023_12_13_055549_create_abouts_table', 1),
(6, '2023_12_13_055600_create_sliders_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(191) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(10) UNSIGNED NOT NULL,
  `image` varchar(191) DEFAULT NULL,
  `content` text NOT NULL,
  `type` varchar(50) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `image`, `content`, `type`, `created_at`, `updated_at`) VALUES
(1, 'service1.jpg', 'خدماتنا', 'main', '2024-01-19 13:22:36', '2024-01-22 16:30:36'),
(2, 'banner-img-2.png', 'مكتبة للفنون والوسائط المتعددة والمواد السمعية والبصرية', 'one', '2024-01-19 13:22:36', '2024-01-19 18:40:01'),
(3, 'service3.jpg', 'مركزًا للتميز في إنتاج ونشر المعرفة', 'two', '2024-01-19 13:24:43', '2024-01-19 13:24:43'),
(4, 'service4.jpg', 'مكتبة الكتب النادرة والمجموعات الخاصة', 'three', '2024-01-19 13:24:43', '2024-01-19 13:24:43'),
(5, 'service5.jpg', 'سهولة البحث عن الكتب المميزة والنادرة', 'four', '2024-01-19 13:28:50', '2024-01-19 13:28:50');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` text NOT NULL,
  `content` text NOT NULL,
  `image` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `title`, `content`, `image`, `created_at`, `updated_at`) VALUES
(1, 'بوابة الأفق للمعلومات', 'بوابة للتميز في إنتاج ونشر المعرفة', 'slider-1.jpg', '2024-01-19 05:26:20', '2024-01-19 05:26:20'),
(2, 'مكتبة غزية بنت جابر', 'مكتبة الكتب النادرة والمجموعات الخاصة', 'slider-2.jpg', '2024-01-19 05:26:20', '2024-01-19 05:26:20'),
(3, 'مكتبة غزية بنت جابر', 'موقعنا لسهولة البحث عن الكتب المميزة والنادرة', 'slider-3.jpg', '2024-01-19 05:26:20', '2024-01-19 05:26:20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`),
  ADD UNIQUE KEY `admins_c_number_unique` (`c_number`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
