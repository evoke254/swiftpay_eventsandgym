-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 29, 2019 at 10:07 AM
-- Server version: 5.7.27-0ubuntu0.19.04.1
-- PHP Version: 7.2.19-0ubuntu0.19.04.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `TipwaVoyager`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `accId` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ammount` double NOT NULL DEFAULT '0',
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `booking_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `coupons_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` bigint(20) NOT NULL,
  `event_id` bigint(20) NOT NULL,
  `pay_option` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` double NOT NULL,
  `slots` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `paymentReceipt` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `names` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `parent_id` int(10) UNSIGNED DEFAULT NULL,
  `order` int(11) NOT NULL DEFAULT '1',
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `class_events`
--

CREATE TABLE `class_events` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `trainer` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `services_id` bigint(20) DEFAULT NULL,
  `classOrEvent` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `venue` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desc` longtext COLLATE utf8mb4_unicode_ci,
  `cost` double DEFAULT NULL,
  `start` datetime DEFAULT NULL,
  `finish` datetime DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `class_events`
--

INSERT INTO `class_events` (`id`, `trainer`, `services_id`, `classOrEvent`, `title`, `venue`, `desc`, `cost`, `start`, `finish`, `status`, `created_at`, `updated_at`) VALUES
(1, '4', 5, 'Class', 'Ms. Kaylin Deckow', 'Boehm and Sons', 'Ipsam eveniet eligendi quaerat sit. Laborum tempora quis voluptas asperiores ipsum qui qui. Distinctio doloribus quaerat placeat facilis corporis excepturi quidem iure.', 4, '2019-10-24 07:19:41', '2019-10-31 07:19:41', 'Active', '2019-10-31 04:19:41', '2019-10-25 04:19:41'),
(2, '2', 2, 'Class', 'Dante Okuneva I', 'Lesch, Daugherty and Renner', 'Tempora aliquam atque consequuntur quo velit qui quam et. Corporis laborum ipsum aut sint. Qui rerum ea libero laudantium laboriosam et ipsa. Qui quos tenetur in ea qui excepturi expedita enim.', 2, '2019-10-27 07:19:41', '2019-10-27 07:19:41', 'Active', '2019-11-05 04:19:41', '2019-10-25 04:19:41'),
(3, '2', 3, 'Class', 'Jodie Wehner IV', 'Larson, Stoltenberg and Crist', 'Tempora dolorem odit ut provident et ea corrupti. Explicabo saepe cupiditate quia consectetur quis nam voluptatibus dolore. Laborum qui et repellendus fugit debitis voluptas voluptatem.', 8, '2019-10-25 07:19:41', '2019-10-24 07:19:41', 'Active', '2019-11-03 04:19:41', '2019-10-25 04:19:41'),
(4, '1', 7, 'Class', 'Mr. Noel Collins', 'O\'Kon-McDermott', 'Reprehenderit non numquam placeat cum dolor. Maxime autem fuga qui et quia labore nobis hic. Non ad in eveniet velit ea voluptas doloremque. Consequatur molestiae doloremque excepturi.', 8, '2019-11-01 07:19:41', '2019-10-25 07:19:41', 'Active', '2019-10-30 04:19:41', '2019-10-25 04:19:41'),
(5, '4', 4, 'Class', 'Napoleon Harber', 'Oberbrunner and Sons', 'Ut iure velit ducimus reiciendis delectus. Quisquam quisquam voluptates voluptas voluptatem. Quo dolor et dolor dolorum et.', 2, '2019-10-25 07:19:41', '2019-10-25 07:19:41', 'Active', '2019-11-13 04:19:41', '2019-10-25 04:19:41'),
(6, '4', 6, 'Class', 'Joshuah Stehr', 'Nienow PLC', 'Veniam sapiente fugit sunt qui omnis qui ullam magnam. Delectus architecto quae qui autem at. Illum atque nihil modi illum. Qui consequuntur quod cum aliquid dolorem.', 6, '2019-10-25 07:19:41', '2019-10-30 07:19:41', 'Active', '2019-11-13 04:19:41', '2019-10-25 04:19:41'),
(7, '4', 2, 'Class', 'Prof. Jannie Sawayn V', 'Davis, Hickle and Schultz', 'Sint reprehenderit non dolor tenetur velit veritatis eos. Accusantium quaerat velit unde ullam et. Doloribus aut id repudiandae occaecati architecto praesentium.', 5, '2019-10-28 07:19:41', '2019-10-25 07:19:41', 'Active', '2019-11-12 04:19:41', '2019-10-25 04:19:41'),
(8, '1', 4, 'Class', 'Angel Yost', 'Osinski Group', 'Harum libero voluptas tempora quia est dolor. Corporis ut qui voluptatem eos praesentium rerum nesciunt. Magni ut totam quod aut quia dolor ullam ea.', 2, '2019-10-31 07:19:41', '2019-10-24 07:19:41', 'Active', '2019-11-04 04:19:41', '2019-10-25 04:19:41'),
(9, '1', 3, 'Class', 'Franco Kunze II', 'Padberg, Nader and Cormier', 'Dolorem consectetur qui voluptatem et ipsa temporibus. Sed animi illum magnam sint ducimus optio. Est pariatur dolore vel voluptas non consequuntur nesciunt exercitationem.', 3, '2019-10-30 07:19:41', '2019-10-26 07:19:41', 'Active', '2019-11-14 04:19:41', '2019-10-25 04:19:41'),
(10, '2', 4, 'Class', 'Lawson Spinka PhD', 'Watsica-Gislason', 'Ipsam placeat eum et nihil pariatur soluta voluptas vel. Nesciunt velit neque ut sint molestias. Repellat nostrum totam dolorem assumenda tempore ea tenetur.', 6, '2019-10-29 07:19:41', '2019-10-29 07:19:41', 'Active', '2019-11-08 04:19:41', '2019-10-25 04:19:41'),
(11, '1', 6, 'Class', 'Nicolette Anderson', 'Wilderman-Watsica', 'Quam architecto voluptatem soluta deserunt tempore totam. Accusamus ea iure molestias maiores illum consectetur earum. Deserunt eveniet eos voluptatibus sed quia quod.', 7, '2019-10-24 07:19:41', '2019-10-26 07:19:41', 'Active', '2019-10-31 04:19:41', '2019-10-25 04:19:41'),
(12, '4', 6, 'Class', 'Lela Reichel123', 'Crooks-Powlowski', 'Eaque repellat libero et laudantium aut. Velit sit quos sit aliquam et et ipsum. Libero odit eaque error aliquid labore. Autem iure fuga laboriosam esse natus.', 3, '2019-10-24 07:19:41', '2019-11-01 07:19:41', 'Active', '2019-11-24 04:19:41', '2019-10-25 09:12:12'),
(13, '1', 4, 'Class', 'Dr. Quinten Rogahn', 'Hegmann PLC', 'Rerum aliquid sed inventore at quas. Ut exercitationem dolorem non quia quia. Pariatur suscipit tempore eveniet quis sunt porro.', 7, '2019-10-30 07:19:41', '2019-10-25 07:19:41', 'Active', '2019-11-16 04:19:41', '2019-10-25 04:19:41'),
(14, '3', 2, 'Class', 'Ms. Frida Aufderhar', 'Anderson-Jerde', 'Deleniti consequatur cum voluptatem fugit repellat. Quidem corrupti aut enim voluptas eos. Est laborum id quaerat ipsa ut. Incidunt sed est voluptatem architecto.', 2, '2019-10-31 07:19:41', '2019-10-24 07:19:41', 'Active', '2019-11-06 04:19:41', '2019-10-25 04:19:41'),
(15, '3', 4, 'Class', 'Mia Lemke', 'McKenzie, West and Boehm', 'Laboriosam rem provident est. Ut reiciendis dicta in laboriosam laborum. Est rerum beatae voluptas rem facere et vero. Voluptatem corrupti eum placeat quaerat vel.', 2, '2019-11-01 07:19:41', '2019-10-25 07:19:41', 'Active', '2019-11-08 04:19:41', '2019-10-25 04:19:42'),
(16, '3', 8, 'Class', 'Dr. Brad Von DVM', 'Stamm-Quitzon', 'Ad quis hic saepe iusto et. Qui corrupti accusantium a reiciendis. Asperiores velit sed sint ut error et. Ipsa perspiciatis voluptate illum eos temporibus.', 9, '2019-10-24 07:19:41', '2019-10-26 07:19:41', 'Active', '2019-11-03 04:19:41', '2019-10-25 04:19:42'),
(17, '2', 6, 'Class', 'Dayna Zieme II', 'Zemlak Group', 'Et nihil distinctio voluptatibus nobis culpa ea. Ut rerum laudantium sed dolores rerum. Adipisci delectus molestias quo enim excepturi a. Est non et et qui deserunt modi et.', 5, '2019-11-01 07:19:41', '2019-10-28 07:19:41', 'Active', '2019-11-11 04:19:41', '2019-10-25 04:19:42'),
(18, '3', 2, 'Class', 'Autumn O\'Hara', 'Roberts, Blick and Stehr', 'Voluptatem officiis unde doloremque eum. Totam veniam laudantium error nihil et. Aliquam aut est error et enim aut commodi reprehenderit.', 0, '2019-10-24 07:19:41', '2019-10-29 07:19:41', 'Active', '2019-10-28 04:19:41', '2019-10-25 04:19:42'),
(19, '1', 8, 'Class', 'Sophia Lebsack', 'Gerlach-Halvorson', 'Nisi eos non cumque ea dolores accusamus est. Qui officiis vitae excepturi deserunt culpa. Assumenda aut nesciunt tempore dolorem quia.', 3, '2019-10-24 07:19:41', '2019-10-25 07:19:41', 'Active', '2019-11-16 04:19:41', '2019-10-25 04:19:42'),
(20, '4', 5, 'Class', 'Prof. Frederik Beatty', 'Lakin-Upton', 'Officia quos expedita optio quaerat. Laudantium deleniti magnam nihil est corporis consectetur. Odio soluta qui quod sed.', 3, '2019-10-31 07:19:41', '2019-10-29 07:19:41', 'Active', '2019-10-29 04:19:41', '2019-10-25 04:19:42'),
(21, '2', 8, 'Class', 'Glenna Zemlak', 'Bode Group', 'Adipisci libero voluptas corporis. Perspiciatis qui deleniti qui maiores libero error quidem. Est maxime sed eos quia dolores et.', 3, '2019-10-30 07:19:41', '2019-10-27 07:19:41', 'Active', '2019-11-18 04:19:41', '2019-10-25 04:19:42'),
(22, '2', 6, 'Class', 'Estella Goyette', 'Cartwright-Streich', 'Minima sint exercitationem nisi cumque nihil hic voluptatem. Soluta cumque voluptatem sit provident illo eum. Facilis sequi amet corrupti sed. Cum assumenda ratione dolore nulla non.', 6, '2019-11-01 07:19:41', '2019-10-27 07:19:41', 'Active', '2019-11-09 04:19:41', '2019-10-25 04:19:42'),
(23, '4', 6, 'Class', 'Hillard Bednar III', 'Hessel, Corkery and Hirthe', 'Ullam consequatur eaque sit et laudantium. Natus sed molestias voluptates et. Cum qui quas vel dolor provident quos deleniti. Soluta sit placeat debitis reiciendis tempora.', 2, '2019-10-30 07:19:41', '2019-10-26 07:19:41', 'Active', '2019-11-14 04:19:41', '2019-10-25 04:19:42'),
(24, '4', 8, 'Class', 'Linda Rippin', 'Feest Ltd', 'Aliquid pariatur nemo minima. Distinctio perspiciatis laborum est dolores consequatur est. Consequuntur laudantium voluptatum molestiae molestias.', 4, '2019-10-30 07:19:41', '2019-10-26 07:19:41', 'Active', '2019-11-19 04:19:41', '2019-10-25 04:19:42'),
(25, '3', 6, 'Class', 'Emilie Goodwin', 'Stokes-Koss', 'Fugit quas sunt repellat est iure ipsa nisi expedita. Voluptatem rerum cum non et adipisci quia accusantium.', 5, '2019-10-30 07:19:41', '2019-10-29 07:19:41', 'Active', '2019-11-23 04:19:41', '2019-10-25 04:19:42');

-- --------------------------------------------------------

--
-- Table structure for table `coupons`
--

CREATE TABLE `coupons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `validFrom` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `validTo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `redeemable` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `eligible` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `coupons`
--

INSERT INTO `coupons` (`id`, `code`, `desc`, `category`, `validFrom`, `validTo`, `amount`, `redeemable`, `eligible`, `status`, `created_at`, `updated_at`) VALUES
(1, 'SFNJ19', 'Londolozi', NULL, '2019-10-01 16:41:18', '2019-10-31 16:41:20', '1500', '3', NULL, 'Active', '2019-10-28 10:41:49', '2019-10-28 10:43:27');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `data_rows`
--

CREATE TABLE `data_rows` (
  `id` int(10) UNSIGNED NOT NULL,
  `data_type_id` int(10) UNSIGNED NOT NULL,
  `field` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `required` tinyint(1) NOT NULL DEFAULT '0',
  `browse` tinyint(1) NOT NULL DEFAULT '1',
  `read` tinyint(1) NOT NULL DEFAULT '1',
  `edit` tinyint(1) NOT NULL DEFAULT '1',
  `add` tinyint(1) NOT NULL DEFAULT '1',
  `delete` tinyint(1) NOT NULL DEFAULT '1',
  `details` text COLLATE utf8mb4_unicode_ci,
  `order` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `data_rows`
--

INSERT INTO `data_rows` (`id`, `data_type_id`, `field`, `type`, `display_name`, `required`, `browse`, `read`, `edit`, `add`, `delete`, `details`, `order`) VALUES
(1, 1, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, '{}', 1),
(3, 1, 'email', 'text', 'Email', 1, 1, 1, 1, 1, 1, '{}', 3),
(4, 1, 'password', 'password', 'Password', 1, 0, 0, 1, 1, 0, '{}', 4),
(5, 1, 'remember_token', 'text', 'Remember Token', 0, 0, 0, 0, 0, 0, '{}', 5),
(6, 1, 'created_at', 'timestamp', 'Created At', 0, 0, 1, 0, 0, 0, '{}', 6),
(7, 1, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 7),
(8, 1, 'avatar', 'image', 'Avatar', 0, 1, 1, 1, 1, 1, '{}', 8),
(9, 1, 'user_belongsto_role_relationship', 'relationship', 'Role', 0, 1, 1, 1, 1, 0, '{\"model\":\"TCG\\\\Voyager\\\\Models\\\\Role\",\"table\":\"roles\",\"type\":\"belongsTo\",\"column\":\"role_id\",\"key\":\"id\",\"label\":\"display_name\",\"pivot_table\":\"roles\",\"pivot\":\"0\",\"taggable\":\"0\"}', 10),
(10, 1, 'user_belongstomany_role_relationship', 'relationship', 'Roles', 0, 0, 1, 1, 1, 0, '{\"model\":\"TCG\\\\Voyager\\\\Models\\\\Role\",\"table\":\"roles\",\"type\":\"belongsToMany\",\"column\":\"id\",\"key\":\"id\",\"label\":\"display_name\",\"pivot_table\":\"user_roles\",\"pivot\":\"1\",\"taggable\":\"0\"}', 11),
(11, 1, 'settings', 'hidden', 'Settings', 0, 0, 0, 0, 0, 0, '{}', 12),
(12, 2, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, '{}', 1),
(13, 2, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, '{}', 2),
(14, 2, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, '{}', 3),
(15, 2, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 4),
(16, 3, 'id', 'number', 'ID', 1, 0, 0, 0, 0, 0, NULL, 1),
(17, 3, 'name', 'text', 'Name', 1, 1, 1, 1, 1, 1, NULL, 2),
(18, 3, 'created_at', 'timestamp', 'Created At', 0, 0, 0, 0, 0, 0, NULL, 3),
(19, 3, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, NULL, 4),
(20, 3, 'display_name', 'text', 'Display Name', 1, 1, 1, 1, 1, 1, NULL, 5),
(21, 1, 'role_id', 'text', 'Role', 0, 1, 1, 1, 1, 1, '{}', 9),
(22, 4, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(23, 4, 'image', 'image', 'Image', 1, 1, 1, 1, 1, 1, '{}', 2),
(25, 4, 'category', 'text', 'Category', 0, 1, 1, 1, 1, 1, '{}', 4),
(26, 4, 'title', 'text', 'Title', 0, 1, 1, 1, 1, 1, '{}', 5),
(27, 4, 'caption', 'rich_text_box', 'Caption', 0, 1, 1, 1, 1, 1, '{}', 6),
(29, 4, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 8),
(30, 4, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 9),
(31, 1, 'fname', 'text', 'Fname', 1, 1, 1, 1, 1, 1, '{}', 3),
(32, 1, 'lname', 'text', 'Lname', 1, 1, 1, 1, 1, 1, '{}', 4),
(33, 1, 'number', 'text', 'Number', 0, 1, 1, 1, 1, 1, '{}', 7),
(34, 1, 'account_id', 'text', 'Account Id', 0, 0, 1, 1, 1, 1, '{}', 8),
(35, 1, 'title', 'text', 'Title', 1, 1, 1, 1, 1, 1, '{}', 9),
(36, 1, 'email_verified_at', 'timestamp', 'Email Verified At', 0, 0, 1, 1, 1, 1, '{}', 10),
(37, 1, 'category', 'text', 'Category', 0, 0, 1, 1, 1, 1, '{}', 12),
(38, 1, 'image', 'text', 'Image', 0, 0, 1, 1, 1, 1, '{}', 13),
(39, 1, 'description', 'text', 'Description', 0, 0, 1, 1, 1, 1, '{}', 14),
(40, 6, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(41, 6, 'title', 'text', 'Title', 1, 1, 1, 1, 1, 1, '{}', 2),
(42, 6, 'icon', 'text', 'Icon', 1, 1, 1, 1, 1, 1, '{}', 3),
(43, 6, 'desc', 'text', 'Desc', 1, 1, 1, 1, 1, 1, '{}', 4),
(44, 6, 'created_at', 'timestamp', 'Created At', 0, 0, 1, 1, 0, 1, '{}', 5),
(45, 6, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 6),
(46, 7, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(47, 7, 'payWith', 'text', 'PayWith', 1, 1, 1, 1, 1, 1, '{}', 2),
(48, 7, 'icon', 'text', 'Icon', 1, 1, 1, 1, 1, 1, '{}', 3),
(49, 7, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 4),
(50, 7, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 5),
(51, 8, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(52, 8, 'number', 'text', 'Number', 1, 1, 1, 1, 1, 1, '{}', 2),
(53, 8, 'msg_body', 'text', 'Msg Body', 1, 1, 1, 1, 1, 1, '{}', 3),
(54, 8, 'in_out', 'text', 'In Out', 0, 1, 1, 1, 1, 1, '{}', 4),
(55, 8, 'customer_id', 'text', 'Customer Id', 0, 1, 1, 1, 1, 1, '{}', 5),
(56, 8, 'status', 'text', 'Status', 0, 1, 1, 1, 1, 1, '{}', 6),
(57, 8, 'error_code', 'text', 'Error Code', 0, 1, 1, 1, 1, 1, '{}', 7),
(58, 8, 'num_segments', 'text', 'Num Segments', 0, 1, 1, 1, 1, 1, '{}', 8),
(59, 8, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 9),
(60, 8, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 10),
(61, 9, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(62, 9, 'code', 'text', 'Code', 1, 1, 1, 1, 1, 1, '{}', 2),
(63, 9, 'desc', 'text', 'Desc', 0, 1, 1, 1, 1, 1, '{}', 3),
(64, 9, 'category', 'text', 'Category', 0, 1, 1, 1, 1, 1, '{}', 4),
(65, 9, 'validFrom', 'text', 'ValidFrom', 1, 1, 1, 1, 1, 1, '{}', 5),
(66, 9, 'validTo', 'text', 'ValidTo', 1, 1, 1, 1, 1, 1, '{}', 6),
(67, 9, 'amount', 'text', 'Amount', 1, 1, 1, 1, 1, 1, '{}', 7),
(68, 9, 'redeemable', 'text', 'Redeemable', 1, 1, 1, 1, 1, 1, '{}', 8),
(69, 9, 'eligible', 'text', 'Eligible', 0, 1, 1, 1, 1, 1, '{}', 9),
(70, 9, 'status', 'text', 'Status', 1, 1, 1, 1, 1, 1, '{}', 10),
(71, 9, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 11),
(72, 9, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 12),
(73, 11, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(74, 11, 'trainer', 'text', 'Trainer', 0, 1, 1, 1, 1, 1, '{}', 2),
(75, 11, 'services_id', 'text', 'Services Id', 0, 1, 1, 1, 1, 1, '{}', 3),
(76, 11, 'classOrEvent', 'text', 'ClassOrEvent', 1, 1, 1, 1, 1, 1, '{}', 4),
(77, 11, 'title', 'text', 'Title', 1, 1, 1, 1, 1, 1, '{}', 5),
(78, 11, 'venue', 'text', 'Venue', 0, 1, 1, 1, 1, 1, '{}', 6),
(79, 11, 'desc', 'text', 'Desc', 0, 1, 1, 1, 1, 1, '{}', 7),
(80, 11, 'cost', 'text', 'Cost', 0, 1, 1, 1, 1, 1, '{}', 8),
(81, 11, 'start', 'text', 'Start', 0, 1, 1, 1, 1, 1, '{}', 9),
(82, 11, 'finish', 'text', 'Finish', 0, 1, 1, 1, 1, 1, '{}', 10),
(83, 11, 'status', 'text', 'Status', 1, 1, 1, 1, 1, 1, '{}', 11),
(84, 11, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 12),
(85, 11, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 13),
(86, 12, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(87, 12, 'booking_code', 'text', 'Booking Code', 1, 1, 1, 1, 1, 1, '{}', 2),
(88, 12, 'coupons_id', 'text', 'Coupons Id', 0, 1, 1, 1, 1, 1, '{}', 3),
(89, 12, 'user_id', 'text', 'User Id', 1, 1, 1, 1, 1, 1, '{}', 4),
(90, 12, 'event_id', 'text', 'Event Id', 1, 1, 1, 1, 1, 1, '{}', 5),
(91, 12, 'pay_option', 'text', 'Pay Option', 1, 1, 1, 1, 1, 1, '{}', 6),
(92, 12, 'amount', 'text', 'Amount', 1, 1, 1, 1, 1, 1, '{}', 7),
(93, 12, 'slots', 'text', 'Slots', 1, 1, 1, 1, 1, 1, '{}', 8),
(94, 12, 'paymentReceipt', 'text', 'PaymentReceipt', 0, 1, 1, 1, 1, 1, '{}', 9),
(95, 12, 'status', 'text', 'Status', 1, 1, 1, 1, 1, 1, '{}', 10),
(96, 12, 'names', 'text', 'Names', 1, 1, 1, 1, 1, 1, '{}', 11),
(97, 12, 'title', 'text', 'Title', 1, 1, 1, 1, 1, 1, '{}', 12),
(98, 12, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 13),
(99, 12, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 14),
(100, 4, 'status', 'select_dropdown', 'Status', 0, 1, 1, 1, 1, 1, '{\"default\":\"Active\",\"options\":{\"Active\":\"Active\",\"Disabled\":\"Disabled\"}}', 8),
(101, 13, 'id', 'text', 'Id', 1, 0, 0, 0, 0, 0, '{}', 1),
(102, 13, 'user_id', 'text', 'User Id', 1, 1, 1, 1, 1, 1, '{}', 2),
(103, 13, 'accId', 'text', 'AccId', 1, 1, 1, 1, 1, 1, '{}', 3),
(104, 13, 'ammount', 'text', 'Ammount', 1, 1, 1, 1, 1, 1, '{}', 4),
(105, 13, 'status', 'text', 'Status', 1, 1, 1, 1, 1, 1, '{}', 5),
(106, 13, 'created_at', 'timestamp', 'Created At', 0, 1, 1, 1, 0, 1, '{}', 6),
(107, 13, 'updated_at', 'timestamp', 'Updated At', 0, 0, 0, 0, 0, 0, '{}', 7);

-- --------------------------------------------------------

--
-- Table structure for table `data_types`
--

CREATE TABLE `data_types` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name_singular` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name_plural` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `model_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `policy_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `controller` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `generate_permissions` tinyint(1) NOT NULL DEFAULT '0',
  `server_side` tinyint(4) NOT NULL DEFAULT '0',
  `details` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `data_types`
--

INSERT INTO `data_types` (`id`, `name`, `slug`, `display_name_singular`, `display_name_plural`, `icon`, `model_name`, `policy_name`, `controller`, `description`, `generate_permissions`, `server_side`, `details`, `created_at`, `updated_at`) VALUES
(1, 'users', 'users', 'User', 'Users', 'fas fa-users', 'TCG\\Voyager\\Models\\User', 'TCG\\Voyager\\Policies\\UserPolicy', 'TCG\\Voyager\\Http\\Controllers\\VoyagerUserController', NULL, 1, 0, '{\"order_display_column\":null,\"order_direction\":\"desc\",\"default_search_key\":null,\"scope\":null}', '2019-10-25 04:19:43', '2019-10-25 08:00:07'),
(2, 'menus', 'menus', 'Menu', 'Menus', 'ion-ios-list', 'TCG\\Voyager\\Models\\Menu', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":null,\"order_direction\":\"desc\",\"default_search_key\":null,\"scope\":null}', '2019-10-25 04:19:43', '2019-10-25 05:19:09'),
(3, 'roles', 'roles', 'Role', 'Roles', 'voyager-lock', 'TCG\\Voyager\\Models\\Role', NULL, '', '', 1, 0, NULL, '2019-10-25 04:19:43', '2019-10-25 04:19:43'),
(4, 'galleries', 'galleries', 'Gallery', 'Galleries', 'ion-ios-aperture', 'App\\Gallery', NULL, NULL, NULL, 1, 0, '{\"order_column\":null,\"order_display_column\":\"image\",\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2019-10-25 05:42:45', '2019-10-28 08:37:05'),
(6, 'services', 'services', 'Service', 'Services', 'ion-ios-basket', 'App\\Services', NULL, NULL, NULL, 1, 0, '{\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2019-10-25 08:06:47', '2019-10-25 08:07:11'),
(7, 'pay_options', 'pay-options', 'Pay Option', 'Pay Options', 'ion-ios-card', 'App\\PayOptions', NULL, NULL, NULL, 1, 0, '{\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null}', '2019-10-25 08:08:00', '2019-10-25 08:08:00'),
(8, 'responds', 'responds', 'Respond', 'Responds', NULL, 'App\\Respond', NULL, NULL, NULL, 1, 0, '{\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null}', '2019-10-25 08:09:28', '2019-10-25 08:09:28'),
(9, 'coupons', 'coupons', 'Coupon', 'Coupons', 'ion-ios-unlock', 'App\\Coupon', NULL, 'App\\Http\\Controllers\\CouponController', NULL, 1, 0, '{\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2019-10-25 08:09:42', '2019-10-28 10:35:19'),
(11, 'class_events', 'class-events', 'Class Event', 'Class Events', 'ion-ios-calendar', 'App\\class_events', NULL, 'App\\Http\\Controllers\\ClassEventsController', NULL, 1, 0, '{\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2019-10-25 08:56:02', '2019-10-25 08:56:23'),
(12, 'bookings', 'bookings', 'Booking', 'Bookings', 'ion-ios-time', 'App\\Booking', NULL, 'App\\Http\\Controllers\\BookingController', NULL, 1, 0, '{\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2019-10-25 09:37:28', '2019-10-25 09:38:09'),
(13, 'accounts', 'accounts', 'Account', 'Accounts', NULL, 'App\\Account', NULL, 'App\\Http\\Controllers\\AccountController', NULL, 1, 0, '{\"order_display_column\":null,\"order_direction\":\"asc\",\"default_search_key\":null,\"scope\":null}', '2019-10-28 13:03:17', '2019-10-28 13:03:49');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cost` decimal(8,2) NOT NULL,
  `lunch` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `caption` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `image`, `category`, `title`, `caption`, `created_at`, `updated_at`, `status`) VALUES
(3, 'galleries/October2019/FCYKY5d5QBVj4r10BwAb.jpg', NULL, NULL, NULL, '2019-10-28 08:37:37', '2019-10-28 08:37:37', 'Active'),
(4, 'galleries/October2019/fiKUpolZ5hXpAJuXFnCw.png', NULL, NULL, NULL, '2019-10-28 09:04:22', '2019-10-28 09:04:22', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'admin', '2019-10-25 04:19:44', '2019-10-25 04:19:44');

-- --------------------------------------------------------

--
-- Table structure for table `menu_items`
--

CREATE TABLE `menu_items` (
  `id` int(10) UNSIGNED NOT NULL,
  `menu_id` int(10) UNSIGNED DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `target` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '_self',
  `icon_class` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `order` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `route` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parameters` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menu_items`
--

INSERT INTO `menu_items` (`id`, `menu_id`, `title`, `url`, `target`, `icon_class`, `color`, `parent_id`, `order`, `created_at`, `updated_at`, `route`, `parameters`) VALUES
(1, 1, 'Dashboard', '', '_self', 'fas fa-tachometer-alt', NULL, NULL, 1, '2019-10-25 04:19:44', '2019-10-25 04:19:44', 'voyager.dashboard', NULL),
(2, 1, 'Media', '', '_self', 'fas ion-ios-images', NULL, NULL, 5, '2019-10-25 04:19:44', '2019-10-25 04:19:44', 'voyager.media.index', NULL),
(3, 1, 'Users', '', '_self', 'fas fa-users', NULL, NULL, 3, '2019-10-25 04:19:44', '2019-10-25 04:19:44', 'voyager.users.index', NULL),
(4, 1, 'Roles', '', '_self', 'fas ion-ios-ribbon', NULL, NULL, 2, '2019-10-25 04:19:44', '2019-10-25 04:19:44', 'voyager.roles.index', NULL),
(5, 1, 'Tools', '', '_self', 'fas ion-ios-construct', NULL, NULL, 9, '2019-10-25 04:19:44', '2019-10-25 04:19:44', NULL, NULL),
(6, 1, 'Menu Builder', '', '_self', 'fas ion-ios-pulse', NULL, 5, 10, '2019-10-25 04:19:44', '2019-10-25 04:19:44', 'voyager.menus.index', NULL),
(7, 1, 'Database', '', '_self', 'fas fa-database', NULL, 5, 11, '2019-10-25 04:19:44', '2019-10-25 04:19:44', 'voyager.database.index', NULL),
(8, 1, 'Compass', '', '_self', 'fas ion-ios-compass', NULL, 5, 12, '2019-10-25 04:19:44', '2019-10-25 04:19:44', 'voyager.compass.index', NULL),
(9, 1, 'BREAD', '', '_self', 'fas ion-ios-attach', NULL, 5, 13, '2019-10-25 04:19:44', '2019-10-25 04:19:44', 'voyager.bread.index', NULL),
(10, 1, 'Settings', '', '_self', 'fas ion-ios-cog', NULL, NULL, 14, '2019-10-25 04:19:44', '2019-10-25 04:19:44', 'voyager.settings.index', NULL),
(11, 1, 'Galleries', '', '_self', NULL, NULL, NULL, 15, '2019-10-25 05:42:45', '2019-10-25 05:42:45', 'voyager.galleries.index', NULL),
(12, 1, 'Services', '', '_self', 'ion-ios-basket', NULL, NULL, 16, '2019-10-25 08:06:47', '2019-10-25 08:06:47', 'voyager.services.index', NULL),
(13, 1, 'Pay Options', '', '_self', 'ion-ios-card', NULL, NULL, 17, '2019-10-25 08:08:01', '2019-10-25 08:08:01', 'voyager.pay-options.index', NULL),
(14, 1, 'Responds', '', '_self', NULL, NULL, NULL, 18, '2019-10-25 08:09:29', '2019-10-25 08:09:29', 'voyager.responds.index', NULL),
(15, 1, 'Coupons', '', '_self', NULL, NULL, NULL, 19, '2019-10-25 08:09:42', '2019-10-25 08:09:42', 'voyager.coupons.index', NULL),
(16, 1, 'Class Events', '', '_self', 'ion-ios-calendar', NULL, NULL, 20, '2019-10-25 08:56:02', '2019-10-25 08:56:02', 'voyager.class-events.index', NULL),
(17, 1, 'Bookings', '', '_self', NULL, NULL, NULL, 21, '2019-10-25 09:37:28', '2019-10-25 09:37:28', 'voyager.bookings.index', NULL),
(18, 1, 'Accounts', '', '_self', NULL, NULL, NULL, 22, '2019-10-28 13:03:17', '2019-10-28 13:03:17', 'voyager.accounts.index', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(295, '2014_10_12_000000_create_users_table', 1),
(296, '2014_10_12_100000_create_password_resets_table', 1),
(297, '2016_01_01_000000_add_voyager_user_fields', 1),
(298, '2016_01_01_000000_create_data_types_table', 1),
(299, '2016_01_01_000000_create_pages_table', 1),
(300, '2016_01_01_000000_create_posts_table', 1),
(301, '2016_02_15_204651_create_categories_table', 1),
(302, '2016_05_19_173453_create_menu_table', 1),
(303, '2016_10_21_190000_create_roles_table', 1),
(304, '2016_10_21_190000_create_settings_table', 1),
(305, '2016_11_30_135954_create_permission_table', 1),
(306, '2016_11_30_141208_create_permission_role_table', 1),
(307, '2016_12_26_201236_data_types__add__server_side', 1),
(308, '2017_01_13_000000_add_route_to_menu_items_table', 1),
(309, '2017_01_14_005015_create_translations_table', 1),
(310, '2017_01_15_000000_make_table_name_nullable_in_permissions_table', 1),
(311, '2017_03_06_000000_add_controller_to_data_types_table', 1),
(312, '2017_04_11_000000_alter_post_nullable_fields_table', 1),
(313, '2017_04_21_000000_add_order_to_data_rows_table', 1),
(314, '2017_07_05_210000_add_policyname_to_data_types_table', 1),
(315, '2017_08_05_000000_add_group_to_settings_table', 1),
(316, '2017_11_26_013050_add_user_role_relationship', 1),
(317, '2017_11_26_015000_create_user_roles_table', 1),
(318, '2018_03_11_000000_add_user_settings', 1),
(319, '2018_03_14_000000_add_details_to_data_types_table', 1),
(320, '2018_03_16_000000_make_settings_value_nullable', 1),
(321, '2019_08_19_000000_create_failed_jobs_table', 1),
(322, '2019_09_19_145959_create_sends_table', 1),
(323, '2019_09_19_154632_create_responds_table', 1),
(324, '2019_09_20_144224_create_customers_table', 1),
(325, '2019_09_24_070547_create_events_table', 1),
(326, '2019_09_24_125803_create_bookings_table', 1),
(327, '2019_09_25_104558_create_mpesas_table', 1),
(328, '2019_09_30_070558_create_stkpush_responses_table', 1),
(329, '2019_10_02_115910_create_galleries_table', 1),
(330, '2019_10_06_071407_create_class_events_table', 1),
(331, '2019_10_08_071048_create_services_table', 1),
(332, '2019_10_08_130445_create_admins_table', 1),
(333, '2019_10_11_095706_create_pay_options_table', 1),
(334, '2019_10_14_052938_create_coupons_table', 1),
(335, '2019_10_15_072647_create_redeem_coupons_table', 1),
(336, '2019_10_21_153426_create_accounts_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `mpesas`
--

CREATE TABLE `mpesas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `TransactionType` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `TransID` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `TransTime` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `TransAmount` double DEFAULT NULL,
  `BusinessShortCode` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `BillRefNumber` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `InvoiceNumber` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ThirdPartyTransID` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `MSISDN` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `FirstName` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `MiddleName` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `LastName` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `OrgAccountBalance` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(10) UNSIGNED NOT NULL,
  `author_id` int(11) NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `excerpt` text COLLATE utf8mb4_unicode_ci,
  `body` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci,
  `meta_keywords` text COLLATE utf8mb4_unicode_ci,
  `status` enum('ACTIVE','INACTIVE') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'INACTIVE',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pay_options`
--

CREATE TABLE `pay_options` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `payWith` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pay_options`
--

INSERT INTO `pay_options` (`id`, `payWith`, `icon`, `created_at`, `updated_at`) VALUES
(1, 'Card', '<img src=\"https://img.icons8.com/clouds/18/000000/card-in-use.png\">', NULL, NULL),
(2, 'Mpesa', '<img src=\"images/img/mpesa.jpg\" class=\"height=18px\" >', NULL, NULL),
(3, 'Cash at Studio', '<img src=\"https://img.icons8.com/plasticine/18/000000/cash-.png\">', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `key` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `table_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `key`, `table_name`, `created_at`, `updated_at`) VALUES
(1, 'browse_admin', NULL, '2019-10-25 04:19:44', '2019-10-25 04:19:44'),
(2, 'browse_bread', NULL, '2019-10-25 04:19:44', '2019-10-25 04:19:44'),
(3, 'browse_database', NULL, '2019-10-25 04:19:44', '2019-10-25 04:19:44'),
(4, 'browse_media', NULL, '2019-10-25 04:19:45', '2019-10-25 04:19:45'),
(5, 'browse_compass', NULL, '2019-10-25 04:19:45', '2019-10-25 04:19:45'),
(6, 'browse_menus', 'menus', '2019-10-25 04:19:45', '2019-10-25 04:19:45'),
(7, 'read_menus', 'menus', '2019-10-25 04:19:45', '2019-10-25 04:19:45'),
(8, 'edit_menus', 'menus', '2019-10-25 04:19:45', '2019-10-25 04:19:45'),
(9, 'add_menus', 'menus', '2019-10-25 04:19:45', '2019-10-25 04:19:45'),
(10, 'delete_menus', 'menus', '2019-10-25 04:19:45', '2019-10-25 04:19:45'),
(11, 'browse_roles', 'roles', '2019-10-25 04:19:45', '2019-10-25 04:19:45'),
(12, 'read_roles', 'roles', '2019-10-25 04:19:45', '2019-10-25 04:19:45'),
(13, 'edit_roles', 'roles', '2019-10-25 04:19:45', '2019-10-25 04:19:45'),
(14, 'add_roles', 'roles', '2019-10-25 04:19:45', '2019-10-25 04:19:45'),
(15, 'delete_roles', 'roles', '2019-10-25 04:19:45', '2019-10-25 04:19:45'),
(16, 'browse_users', 'users', '2019-10-25 04:19:45', '2019-10-25 04:19:45'),
(17, 'read_users', 'users', '2019-10-25 04:19:45', '2019-10-25 04:19:45'),
(18, 'edit_users', 'users', '2019-10-25 04:19:45', '2019-10-25 04:19:45'),
(19, 'add_users', 'users', '2019-10-25 04:19:45', '2019-10-25 04:19:45'),
(20, 'delete_users', 'users', '2019-10-25 04:19:45', '2019-10-25 04:19:45'),
(21, 'browse_settings', 'settings', '2019-10-25 04:19:45', '2019-10-25 04:19:45'),
(22, 'read_settings', 'settings', '2019-10-25 04:19:45', '2019-10-25 04:19:45'),
(23, 'edit_settings', 'settings', '2019-10-25 04:19:45', '2019-10-25 04:19:45'),
(24, 'add_settings', 'settings', '2019-10-25 04:19:45', '2019-10-25 04:19:45'),
(25, 'delete_settings', 'settings', '2019-10-25 04:19:45', '2019-10-25 04:19:45'),
(26, 'browse_galleries', 'galleries', '2019-10-25 05:42:45', '2019-10-25 05:42:45'),
(27, 'read_galleries', 'galleries', '2019-10-25 05:42:45', '2019-10-25 05:42:45'),
(28, 'edit_galleries', 'galleries', '2019-10-25 05:42:45', '2019-10-25 05:42:45'),
(29, 'add_galleries', 'galleries', '2019-10-25 05:42:45', '2019-10-25 05:42:45'),
(30, 'delete_galleries', 'galleries', '2019-10-25 05:42:45', '2019-10-25 05:42:45'),
(31, 'browse_services', 'services', '2019-10-25 08:06:47', '2019-10-25 08:06:47'),
(32, 'read_services', 'services', '2019-10-25 08:06:47', '2019-10-25 08:06:47'),
(33, 'edit_services', 'services', '2019-10-25 08:06:47', '2019-10-25 08:06:47'),
(34, 'add_services', 'services', '2019-10-25 08:06:47', '2019-10-25 08:06:47'),
(35, 'delete_services', 'services', '2019-10-25 08:06:47', '2019-10-25 08:06:47'),
(36, 'browse_pay_options', 'pay_options', '2019-10-25 08:08:01', '2019-10-25 08:08:01'),
(37, 'read_pay_options', 'pay_options', '2019-10-25 08:08:01', '2019-10-25 08:08:01'),
(38, 'edit_pay_options', 'pay_options', '2019-10-25 08:08:01', '2019-10-25 08:08:01'),
(39, 'add_pay_options', 'pay_options', '2019-10-25 08:08:01', '2019-10-25 08:08:01'),
(40, 'delete_pay_options', 'pay_options', '2019-10-25 08:08:01', '2019-10-25 08:08:01'),
(41, 'browse_responds', 'responds', '2019-10-25 08:09:29', '2019-10-25 08:09:29'),
(42, 'read_responds', 'responds', '2019-10-25 08:09:29', '2019-10-25 08:09:29'),
(43, 'edit_responds', 'responds', '2019-10-25 08:09:29', '2019-10-25 08:09:29'),
(44, 'add_responds', 'responds', '2019-10-25 08:09:29', '2019-10-25 08:09:29'),
(45, 'delete_responds', 'responds', '2019-10-25 08:09:29', '2019-10-25 08:09:29'),
(46, 'browse_coupons', 'coupons', '2019-10-25 08:09:42', '2019-10-25 08:09:42'),
(47, 'read_coupons', 'coupons', '2019-10-25 08:09:42', '2019-10-25 08:09:42'),
(48, 'edit_coupons', 'coupons', '2019-10-25 08:09:42', '2019-10-25 08:09:42'),
(49, 'add_coupons', 'coupons', '2019-10-25 08:09:42', '2019-10-25 08:09:42'),
(50, 'delete_coupons', 'coupons', '2019-10-25 08:09:42', '2019-10-25 08:09:42'),
(51, 'browse_class_events', 'class_events', '2019-10-25 08:56:02', '2019-10-25 08:56:02'),
(52, 'read_class_events', 'class_events', '2019-10-25 08:56:02', '2019-10-25 08:56:02'),
(53, 'edit_class_events', 'class_events', '2019-10-25 08:56:02', '2019-10-25 08:56:02'),
(54, 'add_class_events', 'class_events', '2019-10-25 08:56:02', '2019-10-25 08:56:02'),
(55, 'delete_class_events', 'class_events', '2019-10-25 08:56:02', '2019-10-25 08:56:02'),
(56, 'browse_bookings', 'bookings', '2019-10-25 09:37:28', '2019-10-25 09:37:28'),
(57, 'read_bookings', 'bookings', '2019-10-25 09:37:28', '2019-10-25 09:37:28'),
(58, 'edit_bookings', 'bookings', '2019-10-25 09:37:28', '2019-10-25 09:37:28'),
(59, 'add_bookings', 'bookings', '2019-10-25 09:37:28', '2019-10-25 09:37:28'),
(60, 'delete_bookings', 'bookings', '2019-10-25 09:37:28', '2019-10-25 09:37:28'),
(61, 'browse_accounts', 'accounts', '2019-10-28 13:03:17', '2019-10-28 13:03:17'),
(62, 'read_accounts', 'accounts', '2019-10-28 13:03:17', '2019-10-28 13:03:17'),
(63, 'edit_accounts', 'accounts', '2019-10-28 13:03:17', '2019-10-28 13:03:17'),
(64, 'add_accounts', 'accounts', '2019-10-28 13:03:17', '2019-10-28 13:03:17'),
(65, 'delete_accounts', 'accounts', '2019-10-28 13:03:17', '2019-10-28 13:03:17');

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE `permission_role` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permission_role`
--

INSERT INTO `permission_role` (`permission_id`, `role_id`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(11, 1),
(12, 1),
(13, 1),
(14, 1),
(15, 1),
(16, 1),
(17, 1),
(18, 1),
(19, 1),
(20, 1),
(21, 1),
(22, 1),
(23, 1),
(24, 1),
(25, 1),
(26, 1),
(27, 1),
(28, 1),
(29, 1),
(30, 1),
(31, 1),
(32, 1),
(33, 1),
(34, 1),
(35, 1),
(36, 1),
(37, 1),
(38, 1),
(39, 1),
(40, 1),
(41, 1),
(42, 1),
(43, 1),
(44, 1),
(45, 1),
(46, 1),
(47, 1),
(48, 1),
(49, 1),
(50, 1),
(51, 1),
(52, 1),
(53, 1),
(54, 1),
(55, 1),
(56, 1),
(57, 1),
(58, 1),
(59, 1),
(60, 1),
(61, 1),
(62, 1),
(63, 1),
(64, 1),
(65, 1);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `author_id` int(11) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seo_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `excerpt` text COLLATE utf8mb4_unicode_ci,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci,
  `meta_keywords` text COLLATE utf8mb4_unicode_ci,
  `status` enum('PUBLISHED','DRAFT','PENDING') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'DRAFT',
  `featured` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `redeem_coupons`
--

CREATE TABLE `redeem_coupons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `couponCode` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `class_events_id` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `responds`
--

CREATE TABLE `responds` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `msg_body` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `in_out` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `customer_id` bigint(20) DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `error_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `num_segments` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `display_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Administrator', '2019-10-25 04:19:42', '2019-10-25 04:19:42'),
(2, 'user', 'Normal User', '2019-10-25 04:19:44', '2019-10-25 04:19:44');

-- --------------------------------------------------------

--
-- Table structure for table `sends`
--

CREATE TABLE `sends` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `msg_body` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_id` bigint(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title`, `icon`, `desc`, `created_at`, `updated_at`) VALUES
(1, 'Spin Cycling  \r\n Fun filled cardio.', 'flaticon-gym-25', 'This has to be most action you can do to music without \'ever\' moving your feet. Its like dancing on a bike but not moving forward, yet getting the most low impact cardiovascular exercise this side of a run. Its total calorie burning fun. Spiiiiin! At TipwaTipwa, we\'ll help you burn more, get you into shape quicker than you thought.', NULL, NULL),
(2, 'Yoga  \r\n Connect your body and mind', 'flaticon-buddhist-yoga-pose', 'The possession of mental and physical discipline manifest in the realization of a peaceful body and mind - Actualization. The art of Yoga is an assured mean to this end. Yoga helps increase flexibility, muscle strength, and boost body tone by controlling the mind', NULL, NULL),
(3, 'Boot Camp & Circuits  \r\n Reset your metabolism.', 'flaticon-woman', 'Otherwise known in TT circles as P.E. for grownups at the gym in your body. You want to burn calories in 45 minutes or less and keep burning them for the next 72 hours? Just rock up to one of our early morning boot camp sessions and find out how. All you need to bring is a bottle of water, a small towel and loads of can-do attitude.', NULL, NULL),
(4, 'Spin \'n Shred', 'flaticon-gym-25', 'This is a Spin class with a twist - cycle for part of the class, then get off your \'steel steeds\' and get to working out on the exercise floor - be it via circuit exercise stations, TRX, or even yoga. It will always be a surprise, but a cross training session that\'s guaranteed to burn those calories, build your strength and even sculpt you. Come for the fun, stay for the burn! ', NULL, NULL),
(5, 'Sculpt \'n Shred', 'flaticon-gym-25', 'One hour where your mind takes a back seat to your body. Going all out to tone and firm up those \'loose\' bits, as you shred the fat off and break and tear down the muscles, using your body weight and simple props - ingredients of a recipe to your building body definition with taut and defined angles. A serious strength and endurance workout that will leave you \'burned\' but on the path to a fitter, stronger and leaner you. What\'s not to like? ', NULL, NULL),
(6, 'Sports  \r\n Swim, Bike, Run, Fun.', 'flaticon-triathlon-silhouettes-in-a-triangle', 'Taking part in activities such as swimming, running and cycling is not only fun, but also an effective way to gauge fitness and still get a workout. They’re all activities that will involve muscles from all over your body, meaning you get to tone up your whole body.', NULL, NULL),
(7, 'Kickboxing  \r\n Kick, Box, Tone.', 'flaticon-sport', 'Glove up and take in a good mix of moderate to high-intensity exertion that comes chock full of calorie burning benefits, that help you get in shape fairly quickly through weight loss and improved muscle tone and body balance and agility. Its a heck of a stress reliever too, so come get a kick out of kickboxing it out of your system.', NULL, NULL),
(8, 'Trail Hikes & Mountain Excursions', 'flaticon-man-in-hike', 'We love fitness activities that take us out to the most scenic sites in Kenya and beyond. Not only do hikes and excursions work out your entire body and help your breathing, they also provide fun, adventure, and a great opportunity to forge bonds with your teammates.', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `key` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci,
  `details` text COLLATE utf8mb4_unicode_ci,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order` int(11) NOT NULL DEFAULT '1',
  `group` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `key`, `display_name`, `value`, `details`, `type`, `order`, `group`) VALUES
(1, 'site.title', 'Site Title', 'Site Title123', '', 'text', 1, 'Site'),
(2, 'site.description', 'Site Description', 'Site Description', '', 'text', 2, 'Site'),
(3, 'site.logo', 'Site Logo', '', '', 'image', 3, 'Site'),
(4, 'site.google_analytics_tracking_id', 'Google Analytics Tracking ID', NULL, '', 'text', 4, 'Site'),
(5, 'admin.bg_image', 'Admin Background Image', 'settings/October2019/iRvKac9clEHwFZ9Xp3k0.jpg', '', 'image', 5, 'Admin'),
(6, 'admin.title', 'Admin Title', 'Kahaki IT Solutions', '', 'text', 1, 'Admin'),
(7, 'admin.description', 'Admin Description', 'Karibu Kahaki', '', 'text', 2, 'Admin'),
(8, 'admin.loader', 'Admin Loader', '', '', 'image', 3, 'Admin'),
(9, 'admin.icon_image', 'Admin Icon Image', 'settings/October2019/mJt0gRwIM70k5SqumQ9g.png', '', 'image', 4, 'Admin'),
(10, 'admin.google_analytics_client_id', 'Google Analytics Client ID (used for admin dashboard)', NULL, '', 'text', 1, 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `stkpush_responses`
--

CREATE TABLE `stkpush_responses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `PartyA` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `PartyB` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Amount` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TransactionType` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `MerchantRequestID` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `CheckoutRequestID` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ResponseCode` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ResponseDescription` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `CustomerMessage` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `errorCode` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `errorMessage` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `translations`
--

CREATE TABLE `translations` (
  `id` int(10) UNSIGNED NOT NULL,
  `table_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `column_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foreign_key` int(10) UNSIGNED NOT NULL,
  `locale` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED DEFAULT NULL,
  `fname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'users/default.png',
  `number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `account_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `settings` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role_id`, `fname`, `lname`, `email`, `avatar`, `number`, `account_id`, `title`, `email_verified_at`, `password`, `category`, `image`, `description`, `remember_token`, `settings`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Alex', ' ', 'alex@example.com', 'users/default.png', '254742968713', '1', 'trainer', '2019-10-25 04:19:42', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'Yoga', 'images/Tipwa_Tipwa16.JPG', 'Alex Gitonga is a certified yoga teacher from the Africa Yoga Project. His classes include a mix of Baptiste, Ashtanga, Kundalini, Hatha, and Power yoga.   This former acrobat and marathoner is also a mixed martial arts instructor and a Kung Fu practitioner with a Dan black belt in Tong-II Moo Do. He is happiest when he sees unity in all things and inspires his students to be in the present.', NULL, NULL, NULL, NULL),
(2, NULL, 'Charles', ' ', 'charles@example.com', 'users/default.png', '254742968713', '2', 'trainer', '2019-10-25 04:19:42', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'Yoga', 'images/Yoga_Instructor.jpeg', 'Charles Lwanga Ocholla has been practising yoga since 2009.  He is certified in Baptiste, Power, Kundalini, and Ashtanga yoga. Charles, who is also a martial arts black belt instructor and a YOD teacher, is driven by his desire to increase awareness of the benefits of yoga and to help people achieve their fitness goals.', NULL, NULL, NULL, NULL),
(3, 1, 'Joss', ' ', 'joss@example.com', 'users/default.png', '254742968713', '3', 'trainer', '2019-10-25 04:19:42', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'Spin', 'images/TipwaTipwa-F01S.jpeg', 'Imagine Dragon\'s Thunder or Sweet Nothing by Florence Welch and Calvin Harris, just to name a few tracks that are some of my all time favourite spinning tracks on my playlist. Music is everything when it comes to spin, and knowing my music makes it better! Trained by Kris Pennel of Full Psycle in Costa Mesa, my style of teaching is riding to the beat, then getting in some movements and motivation. The sorting hat in Harry Potter would place me in Gryffindor, but I would feel like a Hufflepuff. Go figure! ', NULL, NULL, NULL, '2019-10-25 04:19:42'),
(4, NULL, 'Marika', ' ', 'marika@example.com', 'users/default.png', '254742968713', '4', 'trainer', '2019-10-25 04:19:42', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', 'Spin, Strength and TRX', 'images/Tipwa_Tipwa020S.JPG', 'Marika is a certified instuctor in TRX (suspension training bodyweight exercises) and indoor spin cycling. Marika is happiest when he sees the satisfaction in people’s faces when they achieve and surpass their fitness goals.', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_roles`
--

CREATE TABLE `user_roles` (
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`),
  ADD KEY `categories_parent_id_foreign` (`parent_id`);

--
-- Indexes for table `class_events`
--
ALTER TABLE `class_events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coupons`
--
ALTER TABLE `coupons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_rows`
--
ALTER TABLE `data_rows`
  ADD PRIMARY KEY (`id`),
  ADD KEY `data_rows_data_type_id_foreign` (`data_type_id`);

--
-- Indexes for table `data_types`
--
ALTER TABLE `data_types`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `data_types_name_unique` (`name`),
  ADD UNIQUE KEY `data_types_slug_unique` (`slug`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `menus_name_unique` (`name`);

--
-- Indexes for table `menu_items`
--
ALTER TABLE `menu_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `menu_items_menu_id_foreign` (`menu_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mpesas`
--
ALTER TABLE `mpesas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pages_slug_unique` (`slug`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `pay_options`
--
ALTER TABLE `pay_options`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `permissions_key_index` (`key`);

--
-- Indexes for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `permission_role_permission_id_index` (`permission_id`),
  ADD KEY `permission_role_role_id_index` (`role_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `posts_slug_unique` (`slug`);

--
-- Indexes for table `redeem_coupons`
--
ALTER TABLE `redeem_coupons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `responds`
--
ALTER TABLE `responds`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Indexes for table `sends`
--
ALTER TABLE `sends`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `settings_key_unique` (`key`);

--
-- Indexes for table `stkpush_responses`
--
ALTER TABLE `stkpush_responses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `translations`
--
ALTER TABLE `translations`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `translations_table_name_column_name_foreign_key_locale_unique` (`table_name`,`column_name`,`foreign_key`,`locale`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_role_id_foreign` (`role_id`);

--
-- Indexes for table `user_roles`
--
ALTER TABLE `user_roles`
  ADD PRIMARY KEY (`user_id`,`role_id`),
  ADD KEY `user_roles_user_id_index` (`user_id`),
  ADD KEY `user_roles_role_id_index` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `class_events`
--
ALTER TABLE `class_events`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `coupons`
--
ALTER TABLE `coupons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `data_rows`
--
ALTER TABLE `data_rows`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=108;
--
-- AUTO_INCREMENT for table `data_types`
--
ALTER TABLE `data_types`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `menu_items`
--
ALTER TABLE `menu_items`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=337;
--
-- AUTO_INCREMENT for table `mpesas`
--
ALTER TABLE `mpesas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `pay_options`
--
ALTER TABLE `pay_options`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `redeem_coupons`
--
ALTER TABLE `redeem_coupons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `responds`
--
ALTER TABLE `responds`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `sends`
--
ALTER TABLE `sends`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `stkpush_responses`
--
ALTER TABLE `stkpush_responses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `translations`
--
ALTER TABLE `translations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `categories`
--
ALTER TABLE `categories`
  ADD CONSTRAINT `categories_parent_id_foreign` FOREIGN KEY (`parent_id`) REFERENCES `categories` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `data_rows`
--
ALTER TABLE `data_rows`
  ADD CONSTRAINT `data_rows_data_type_id_foreign` FOREIGN KEY (`data_type_id`) REFERENCES `data_types` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `menu_items`
--
ALTER TABLE `menu_items`
  ADD CONSTRAINT `menu_items_menu_id_foreign` FOREIGN KEY (`menu_id`) REFERENCES `menus` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);

--
-- Constraints for table `user_roles`
--
ALTER TABLE `user_roles`
  ADD CONSTRAINT `user_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_roles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
