-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 01, 2020 at 06:03 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.3.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cate_id` int(10) UNSIGNED NOT NULL,
  `cate_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cate_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cate_priority` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cate_id`, `cate_name`, `cate_slug`, `cate_priority`, `created_at`, `updated_at`) VALUES
(1, 'Tin tức', 'tin-tuc', 1, NULL, NULL),
(2, 'Lập trình', 'lap-trinh', 2, NULL, NULL),
(3, 'Phần cứng', 'phan-cung', 3, NULL, NULL),
(4, 'Phần mềm', 'phan-mem', 4, NULL, NULL),
(5, 'Bảo mật', 'bao-mat', 5, NULL, NULL),
(6, 'Khác', 'khac', 6, NULL, NULL),
(7, 'qa', 'qa', 12, '2020-04-21 18:43:34', '2020-04-21 18:43:34'),
(8, 'qe', 'qe', 123, '2020-04-22 01:26:06', '2020-04-22 01:26:06'),
(9, 'test nha', 'test-nha', 124, '2020-04-22 01:29:38', '2020-04-22 01:29:38'),
(10, 'test nè', 'test-ne', 159, '2020-04-22 01:44:08', '2020-04-22 01:44:08'),
(11, 'test thôi nhé', 'test-thoi-nhe', 357, '2020-04-22 01:49:52', '2020-04-22 01:49:52'),
(12, 'a', 'a', 1, '2020-04-22 01:50:52', '2020-04-22 01:50:52'),
(13, 'aq', 'aq', 12, '2020-04-22 03:41:10', '2020-04-22 03:41:10'),
(14, 'ahihui', 'ahihui', 123, '2020-04-25 02:20:54', '2020-04-25 02:20:54'),
(15, 'kkkk', 'kkkk', 4, '2020-04-25 10:32:59', '2020-04-25 10:32:59'),
(16, 'mmm', 'mmm', 6, '2020-04-25 10:39:08', '2020-04-25 10:39:08'),
(17, 'iiiii', 'iiiii', 4, '2020-04-25 10:45:52', '2020-04-25 10:45:52'),
(18, '$request->cate_name', 'str_slug($request->cate_name)', 10, '2020-04-25 11:05:09', '2020-04-25 11:05:09'),
(19, '$request->cate_name', 'str_slug($request->cate_name)', 10, '2020-04-25 11:10:04', '2020-04-25 11:10:04'),
(20, 'gggg', 'gggg', 5, NULL, NULL);

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
(1, '2020_03_18_042310_user', 1),
(2, '2020_03_18_112058_category', 1),
(3, '2020_03_20_144744_sub_category', 1),
(4, '2020_03_20_154612_news', 1);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `news_id` int(10) UNSIGNED NOT NULL,
  `news_title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `news_slugtitle` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `news_summary` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `news_feature` tinyint(4) NOT NULL,
  `news_date` date NOT NULL,
  `news_views` int(11) NOT NULL,
  `news_img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `news_content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `news_users` int(10) UNSIGNED NOT NULL,
  `news_sub` int(10) UNSIGNED NOT NULL,
  `news_cate` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sub_categories`
--

CREATE TABLE `sub_categories` (
  `sub_id` int(10) UNSIGNED NOT NULL,
  `sub_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_priority` int(11) NOT NULL,
  `sub_cate` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub_categories`
--

INSERT INTO `sub_categories` (`sub_id`, `sub_name`, `sub_slug`, `sub_priority`, `sub_cate`, `created_at`, `updated_at`) VALUES
(1, 'java', 'java', 2, 1, NULL, NULL),
(2, 'hhh', 'hhh', 7, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `level` tinyint(4) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sdt` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `level`, `name`, `email`, `sdt`, `img`, `description`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', '$2y$10$3MhWCj5aXHs/Ka5jTBN2fefD5oAt0qU2hLhBRpllFawT2h2LH6aia', 1, 'quản trị', 'quangduc284097@gmail.com', '0784456836', 'https://drive.google.com/file/d/1VpWWi1rHA-GZHQfZO9nHak_RMBvkiWv7/view?usp=sharing', 'Quản trị của cả website', 'pPqI9JO3YeXs4j1KLsQcOZ4H1RDPOKJNOvW6FXN0b1KaPLLFGIxIv4B6RTBJ', NULL, NULL),
(2, 'duc', '$2y$10$KeTqydPdcmw0/XtKltHMweM.CE6bSv6ZWSTrcXFcSa5CdgCANv.te', 0, 'Nguyễn Quang Đức', 'quangduc280497@gmail.com', '0784456836', 'https://drive.google.com/file/d/1ov2ObYizEf1XH1ahdBRexYdao_1t4xAn/view?usp=sharing', 'Quản trị của cả website', 'c5MdXjDW4ML9BnKUORzswmISzZ2MHzgQvTPyYwSjDM6jtq9eL6zBQVz2LxSd', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cate_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`news_id`),
  ADD KEY `news_news_users_foreign` (`news_users`),
  ADD KEY `news_news_sub_foreign` (`news_sub`),
  ADD KEY `news_news_cate_foreign` (`news_cate`);

--
-- Indexes for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD PRIMARY KEY (`sub_id`),
  ADD KEY `sub_categories_sub_cate_foreign` (`sub_cate`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cate_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `news_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sub_categories`
--
ALTER TABLE `sub_categories`
  MODIFY `sub_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `news`
--
ALTER TABLE `news`
  ADD CONSTRAINT `news_news_cate_foreign` FOREIGN KEY (`news_cate`) REFERENCES `categories` (`cate_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `news_news_sub_foreign` FOREIGN KEY (`news_sub`) REFERENCES `sub_categories` (`sub_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `news_news_users_foreign` FOREIGN KEY (`news_users`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `sub_categories`
--
ALTER TABLE `sub_categories`
  ADD CONSTRAINT `sub_categories_sub_cate_foreign` FOREIGN KEY (`sub_cate`) REFERENCES `categories` (`cate_id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
