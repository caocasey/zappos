-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 03, 2018 at 12:33 AM
-- Server version: 5.6.35
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `api`
--

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `iid` int(10) UNSIGNED NOT NULL,
  `iname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idescription` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `menu_mid` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`iid`, `iname`, `idescription`, `menu_mid`, `created_at`, `updated_at`) VALUES
(1, 'tomato', 'fresh style', 2, NULL, NULL),
(2, 'chicken', 'sweet and salt', 1, NULL, NULL),
(3, 'german cool beer', 'sweet and cool', 3, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `mid` int(10) UNSIGNED NOT NULL,
  `mname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `serve_time` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `mdescription` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `restaurant_rid` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`mid`, `mname`, `serve_time`, `mdescription`, `restaurant_rid`, `created_at`, `updated_at`) VALUES
(1, 'fry rice menu', 'dinner', 'tranditional chinese rice', 2, NULL, NULL),
(2, 'vegetable menu', 'noon', 'health food', 1, NULL, NULL),
(3, 'beer menu', 'All day', 'Beer from germany', 3, NULL, NULL),
(4, 'suprice menu', 'dinner', 'secret made food', 1, NULL, NULL);

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
(4, '2018_02_01_235409_create_restaurants_table', 1),
(5, '2018_02_02_000001_create_menus_table', 1),
(6, '2018_02_02_000018_create_items_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `restaurants`
--

CREATE TABLE `restaurants` (
  `rid` int(10) UNSIGNED NOT NULL,
  `rname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rdescription` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `restaurants`
--

INSERT INTO `restaurants` (`rid`, `rname`, `rdescription`, `created_at`, `updated_at`) VALUES
(1, 'chez moi', 'french style', NULL, NULL),
(2, 'uncle li', 'chinese style', NULL, NULL),
(3, '5 guys', 'american style', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`iid`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`mid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `restaurants`
--
ALTER TABLE `restaurants`
  ADD PRIMARY KEY (`rid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `iid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `mid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `restaurants`
--
ALTER TABLE `restaurants`
  MODIFY `rid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;