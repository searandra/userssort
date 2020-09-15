-- phpMyAdmin SQL Dump
-- version 4.0.10deb1ubuntu0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 15, 2020 at 09:30 PM
-- Server version: 5.5.62-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `users`
--

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone_number` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `coordinate_x` int(11) DEFAULT NULL,
  `coordinate_y` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=20 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `phone_number`, `remember_token`, `coordinate_x`, `coordinate_y`, `created_at`, `updated_at`) VALUES
(1, 'User1', 'user@test.com', '', '1234567890', NULL, 126, 233, NULL, '2020-09-15 10:29:44'),
(9, 'User2', 'user2@test.com', '', '1234567890', NULL, 126, 658, NULL, '2020-09-15 10:29:44'),
(10, 'User3', 'user3@test.com', '', '1234567890', NULL, 233, 20, NULL, '2020-09-15 10:29:44'),
(11, 'User4', 'user4@test.com', '', '1234567890', NULL, 126, 20, NULL, '2020-09-15 10:29:44'),
(12, 'User5', 'user5@test.com', '', '1234567890', NULL, 233, 233, NULL, '2020-09-15 10:29:44'),
(13, 'User6', 'user6@test.com', '', '1234567890', NULL, 126, 445, NULL, '2020-09-15 10:29:44'),
(14, 'User7', 'user7@test.com', '', '1234567890', NULL, 126, 871, NULL, '2020-09-15 10:29:44'),
(15, 'User8', 'user8@test.com', '', '1234567890', NULL, 20, 233, NULL, '2020-09-15 10:29:44'),
(16, 'User9', 'user9@test.com', '', '1234567890', NULL, 20, 20, NULL, '2020-09-15 10:29:42'),
(17, 'User10', 'user10@test.com', '', '1234567890', NULL, 20, 871, NULL, '2020-09-15 10:29:44'),
(18, 'User11', 'user11@test.com', '', '1234567890', NULL, 20, 445, NULL, '2020-09-15 10:29:44'),
(19, 'User12', 'user12@test.com', '', '1234567890', NULL, 20, 658, NULL, '2020-09-15 10:29:44');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
