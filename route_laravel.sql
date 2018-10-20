-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 20, 2018 at 01:10 PM
-- Server version: 5.5.27
-- PHP Version: 7.2.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `route_laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `films`
--

CREATE TABLE IF NOT EXISTS `films` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `filmname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `filmdescription` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=8 ;

--
-- Dumping data for table `films`
--

INSERT INTO `films` (`id`, `filmname`, `filmdescription`, `image`, `created_at`, `updated_at`) VALUES
(1, 'avatar', 'edited by James Cameron, and stars Sam Worthington, Zoe Saldana,', '1539805689avtr-he-bg-03.jpg', '2018-10-14 22:00:00', '2018-10-17 17:48:09'),
(4, 'troy', 'historical', '1539623868h1qxMIw.png', '2018-10-15 15:17:48', '2018-10-15 15:17:48'),
(5, 'thor', 'thor thor thor thor thor thor thor thor thor hunger games', '1539692847DU_H5fvW0AAw_F_.jpg', '2018-10-15 15:36:43', '2018-10-16 10:27:28'),
(6, 'infinity war', 'established in Thor: Ragnarok and concludes in the Infinity War sequel, with the difference between Hulk and Banner "starting to blur a little bit".', '1539805990280a8514f3d76dd1-600x400.png', '2018-10-17 17:53:11', '2018-10-17 17:53:11'),
(7, 'hunger games 2', 'xjkasycgahxjcbdjgs', '1539870560280a8514f3d76dd1-600x400.png', '2018-10-18 11:48:50', '2018-10-18 11:49:20');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=10 ;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(7, '2014_10_12_000000_create_users_table', 1),
(8, '2014_10_12_100000_create_password_resets_table', 1),
(9, '2018_10_12_111717_create_films_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('mostafamagico44@gmail.com', '$2y$10$nTrvI.UhGmbyw2aLV.h/OebGQoJ7OaUABvWXz6LH5Ag88lYX.zPCW', '2018-10-16 14:19:20');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `is_admin`) VALUES
(1, 'mostafa', 'mostafa.hamed1944@gmail.com', NULL, '$2y$10$Ogg2ZaWROE7KO24RCBL/yu4cd9Thd7Zklb9xlgm4rKhAdEDIqUq4O', 'P1NeDjb8yaaSCLFzYw1dEl8KNQRgEMTOZG51akflE26WOtuMQlEG7WUK9Pqu', '2018-10-16 09:34:40', '2018-10-16 09:34:40', 1),
(2, 'mostafa', 'mostafamagico44@gmail.com', NULL, '$2y$10$NosVfzW8chZr/je6ym3rM.MDLFfzGCXs2F.i4krrs5CI6ggZHfpzO', '0YT6oYKToTVZVrnUSBxCOYRBONR8LkyaBt7iU36QXvsxDdbFXhRajfg1mwTO', '2018-10-16 10:52:34', '2018-10-16 10:52:34', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
