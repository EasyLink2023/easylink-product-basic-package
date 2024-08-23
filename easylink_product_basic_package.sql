-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 23, 2024 at 02:12 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `easylink_product_basic_package`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint UNSIGNED NOT NULL,
  `meta_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_keyword` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cover_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tags` text COLLATE utf8mb4_unicode_ci,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci,
  `created_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_active` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1' COMMENT '1 for active, 0 for inactive, It means that portion will be get hidden from the user',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contact_us_pages`
--

CREATE TABLE `contact_us_pages` (
  `id` bigint UNSIGNED NOT NULL,
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `value_type` enum('1','2','3','4') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1' COMMENT '1 for text, 2 for image, 3 for boolean value, 4 for file or pdf',
  `is_active` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1' COMMENT '1 for active, 0 for inactive, It means that portion will be get hidden from the user',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact_us_pages`
--

INSERT INTO `contact_us_pages` (`id`, `key`, `value`, `value_type`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'BANNER_IMAGE', '1723871877.jpg', '2', '1', '2024-07-23 04:12:17', '2024-08-16 23:47:57'),
(2, 'SEC_1_TEXT', 'Lorem Ipsum', '1', '1', '2024-07-23 04:22:45', '2024-07-23 04:22:45'),
(3, 'SEC_1_DESCRIPTION', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia, molestiae quas vel sint commodi repudiandae consequuntur voluptatum', '1', '1', '2024-07-23 04:23:15', '2024-07-23 04:25:30'),
(4, 'SEC_2_FORM_TEXT', 'Lorem ipsum', '1', '1', '2024-07-23 04:24:55', '2024-07-23 04:24:55'),
(5, 'FORM_REQUEST_SAVE_RESPONSE', 'Thank you for saving and data.', '1', '1', '2024-08-17 00:02:35', '2024-08-17 00:02:35');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us_page_forms`
--

CREATE TABLE `contact_us_page_forms` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `id` bigint UNSIGNED NOT NULL,
  `question` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `answer` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` bigint UNSIGNED NOT NULL,
  `image_url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `general_settings`
--

CREATE TABLE `general_settings` (
  `id` bigint UNSIGNED NOT NULL,
  `key_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value_type` enum('1','2','3') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1' COMMENT '1 for text, 2 for image, 3 for file',
  `is_active` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1' COMMENT '1 for active, 0 for inactive, It means that portion will be get hidden from the user',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `general_settings`
--

INSERT INTO `general_settings` (`id`, `key_name`, `value`, `value_type`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'SITE_NAME', 'EASYLINK PRODUCT BASIC', '1', '1', '2024-07-13 03:25:51', '2024-07-15 08:22:17'),
(2, 'SITE_LOGO', '1720860986.png', '2', '1', '2024-07-13 03:26:26', '2024-07-13 03:26:26'),
(3, 'FAVICON', '1721051688.ico', '2', '1', '2024-07-13 03:27:28', '2024-07-15 08:24:48'),
(4, 'LOADER_ICON', '1721051704.png', '2', '1', '2024-07-15 08:25:04', '2024-07-15 08:25:04'),
(5, 'BLOG_PAGE_SECTION_1_BACKGROUND_IMAGE', '1722351846.png', '2', '1', '2024-07-30 09:34:06', '2024-07-30 09:34:06'),
(6, 'BLOG_SEC_1_TEXT', 'Lorem Ipsum', '1', '1', '2024-07-30 09:35:34', '2024-07-30 09:35:34'),
(7, 'BLOG_SEC_1_DESCRIPTION', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia, molestiae quas vel sint commodi repudiandae consequuntur voluptatum', '1', '1', '2024-07-30 09:35:48', '2024-07-30 09:35:48'),
(8, 'ADDRESS', 'Lorem ipsum dolor sit amet consectetur adipisicing eli', '1', '1', '2024-07-31 03:21:19', '2024-07-31 03:21:19'),
(9, 'PHONE_NUMBER', '+01 1236547890', '1', '1', '2024-07-31 03:24:42', '2024-07-31 03:24:42'),
(10, 'EMAIL_ADDRESS', 'test@example.com', '1', '1', '2024-07-31 03:26:31', '2024-07-31 03:26:31'),
(11, 'X_LINK', 'https://x.com/emaple-site', '1', '1', '2024-07-31 03:27:12', '2024-07-31 03:27:12'),
(12, 'FACEBOOK_LINK', 'https://www.facebook.com/easylinkchn', '1', '1', '2024-07-31 03:28:52', '2024-08-14 00:36:14'),
(13, 'INSTAGRAM_LINK', 'https://instagram/example', '1', '1', '2024-07-31 03:29:20', '2024-07-31 03:29:20'),
(14, 'LINKEDIN_LINK', 'https://linkedin.com/example.com', '1', '1', '2024-07-31 03:29:47', '2024-07-31 03:29:47'),
(15, 'YOUTUBE_LINK', 'https://youtube.com/example', '1', '1', '2024-07-31 03:30:06', '2024-07-31 03:30:06'),
(16, 'FOOTER_TEXT', 'Lorem ipsum dolor sit amet consectetur adipisicing elit', '1', '1', '2024-07-31 06:51:15', '2024-07-31 06:51:15'),
(17, 'DOMAIN', 'www.easylinkindia.com', '1', '1', '2024-08-08 02:13:53', '2024-08-08 02:13:53'),
(18, 'BACKGROUND_COLOR', '#30a5a7', '3', '1', '2024-08-16 07:59:36', '2024-08-23 08:34:43'),
(19, 'FONT_COLOR', '#ffffff', '3', '1', '2024-08-16 08:48:04', '2024-08-16 10:46:29');

-- --------------------------------------------------------

--
-- Table structure for table `get_quotes`
--

CREATE TABLE `get_quotes` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `index_pages`
--

CREATE TABLE `index_pages` (
  `id` bigint UNSIGNED NOT NULL,
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `value_type` enum('1','2','3','4') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1' COMMENT '1 for text, 2 for image, 3 for boolean value, 4 for file or pdf',
  `is_active` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1' COMMENT '1 for active, 0 for inactive, It means that portion will be get hidden from the user',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `index_pages`
--

INSERT INTO `index_pages` (`id`, `key`, `value`, `value_type`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'SEC_1_VISIBLE', '1', '3', '1', '2024-07-22 09:14:40', '2024-08-14 00:12:06'),
(2, 'SEC_1_TEXT', 'Lorem ipsum dolor sit amet consectetur adipisicing elit', '1', '1', '2024-07-22 09:18:45', '2024-07-22 09:23:29'),
(3, 'SEC_1_DESCRIPTION', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia, molestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum numquam blanditiis harum quisquam eius sed odit fugiat iusto fuga praesentium optio, eaque rerum! Provident similique accusantium nemo autem.', '1', '1', '2024-07-22 09:23:17', '2024-07-22 09:23:17'),
(4, 'SEC_1_BUTTON_TEXT', 'Lorem ipsum', '1', '1', '2024-07-22 09:24:10', '2024-07-22 09:24:33'),
(5, 'SEC_1_BUTTON_LINK', 'http://127.0.0.1:8000/contact-us', '1', '1', '2024-07-22 09:25:09', '2024-08-17 00:12:21'),
(6, 'SEC_1_IMAGE_1', '1721661387.jpg', '2', '1', '2024-07-22 09:34:38', '2024-07-22 09:46:27'),
(7, 'SEC_1_IMAGE_2', '1721661997.jpg', '2', '1', '2024-07-22 09:56:37', '2024-07-22 09:56:37'),
(8, 'SEC_1_IMAGE_2', '1721662011.jpg', '2', '1', '2024-07-22 09:56:51', '2024-07-22 09:56:51'),
(9, 'SEC_2_VISIBLE', '1', '3', '1', '2024-07-22 10:00:56', '2024-08-03 01:35:49'),
(10, 'SEC_2_TEXT', 'LOREM, IPSUM, DOLOR, SIT', '1', '1', '2024-07-22 10:04:31', '2024-07-22 10:07:01'),
(11, 'SEC_2_DESCRIPTION', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia, molestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum numquam blanditiis harum quisquam eius sed odit fugiat iusto fuga praesentium optio, eaque rerum!', '1', '1', '2024-07-22 10:11:39', '2024-07-22 10:11:39'),
(12, 'SEC_3_VISIBLE', '1', '3', '1', '2024-07-23 07:24:00', '2024-08-23 08:40:41'),
(13, 'SEC_3_NUMBER_1', '1999', '1', '1', '2024-07-23 07:24:42', '2024-07-23 07:24:42'),
(14, 'SEC_3_TEXT_1', 'Lorem ipsum dolor sit amet', '1', '1', '2024-07-23 07:25:04', '2024-07-23 07:25:04'),
(15, 'SEC_3_NUMBER_2', '80', '1', '1', '2024-07-23 07:25:23', '2024-07-23 07:25:23'),
(16, 'SEC_3_TEXT_2', 'Lorem ipsum dolor sit amet consectetur adipisicing', '1', '1', '2024-07-23 07:25:56', '2024-07-23 07:25:56'),
(17, 'SEC_3_NUMBER_3', '400', '1', '1', '2024-07-23 07:26:13', '2024-07-23 07:26:13'),
(18, 'SEC_3_TEXT_3', 'Lorem ipsum dolor si', '1', '1', '2024-07-23 07:26:38', '2024-07-23 07:26:38'),
(19, 'SEC_3_NUMBER_4', '93', '1', '1', '2024-07-23 07:26:58', '2024-07-23 07:26:58'),
(20, 'SEC_3_TEXT_4', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia, molestiae quas vel', '1', '1', '2024-07-23 07:27:23', '2024-07-23 07:27:23'),
(21, 'SEC_4_VISIBLE', '0', '3', '1', '2024-07-30 10:06:59', '2024-08-23 08:41:38'),
(22, 'TESTIMONIAL_VISIBLE', '0', '3', '1', '2024-07-31 02:53:14', '2024-08-23 08:41:00'),
(23, 'SERVICE_VISIBLE', '0', '3', '1', '2024-08-16 01:41:06', '2024-08-23 08:41:29'),
(24, 'SERVICE_TEXT', 'Lorem ipsum dolor sit amet consectetur adipisicing elit', '1', '1', '2024-08-16 01:56:19', '2024-08-16 01:56:19'),
(25, 'SERVICE_DESCRIPTION', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia, molestiae quas vel sint commodi repudiandae consequuntur voluptatum', '1', '1', '2024-08-16 01:56:36', '2024-08-16 01:56:36'),
(26, 'GALLERY_VISIBLE', '0', '3', '1', '2024-08-16 04:23:31', '2024-08-23 08:41:19'),
(27, 'GALLERY_TEXT', 'Lorem ipsum dolor sit amet consectetur adipisicing elit', '1', '1', '2024-08-16 04:24:00', '2024-08-16 04:24:00'),
(28, 'GALLERY_DESCRIPTION', 'Lorem ipsum dolor sit amet consectetur adipisicing elit Lorem ipsum dolor sit amet consectetur adipisicing elit', '1', '1', '2024-08-16 04:24:15', '2024-08-16 04:24:15'),
(29, 'FAQ_VISIBLE', '0', '3', '1', '2024-08-16 13:09:38', '2024-08-23 08:41:10'),
(30, 'FAQ_TEXT', 'Faqs', '1', '1', '2024-08-16 13:10:54', '2024-08-16 13:10:54'),
(31, 'FAQ_DESCRIPTION', 'Faqs DESCRIPTION', '1', '1', '2024-08-16 13:11:37', '2024-08-16 13:11:37');

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` bigint UNSIGNED NOT NULL,
  `menu_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1' COMMENT '1 for active, 0 for inactive, It means that portion will be get hidden from the user',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_07_11_132504_create_roles_table', 1),
(2, '2014_10_12_000000_create_users_table', 1),
(3, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(8, '2014_10_12_100000_create_password_resets_table', 2),
(9, '2024_07_12_125648_create_general_settings_table', 2),
(10, '2024_07_16_174427_create_menus_table', 3),
(14, '2024_07_19_173126_create_index_pages_table', 4),
(15, '2024_07_23_142854_create_contact_us_pages_table', 5),
(17, '2024_07_24_125605_create_pages_table', 6),
(20, '2024_07_30_072206_create_blogs_table', 7),
(21, '2024_07_31_070520_create_testimonials_table', 8),
(22, '2024_07_31_172828_create_get_quotes_table', 9),
(23, '2024_07_31_183234_create_contact_us_page_forms_table', 10),
(25, '2024_08_08_130732_create_page_seo_data_table', 11),
(26, '2024_08_16_073055_create_services_table', 12),
(27, '2024_08_16_082706_create_galleries_table', 13),
(28, '2024_08_16_173742_create_faqs_table', 14);

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` bigint UNSIGNED NOT NULL,
  `menu_id` bigint UNSIGNED DEFAULT NULL,
  `page_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci,
  `sec_1_text` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sec_1_description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cover_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `page_seo_data`
--

CREATE TABLE `page_seo_data` (
  `id` bigint UNSIGNED NOT NULL,
  `page_url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci,
  `description` text COLLATE utf8mb4_unicode_ci,
  `keyword` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint UNSIGNED NOT NULL,
  `role_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT '1' COMMENT '0 for in-active, 1 for active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `role_name`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'admin', 1, '2024-07-12 02:23:13', '2024-07-12 02:23:13');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cover_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `designation` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rating` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `profile_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `feedback` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `role_id` bigint UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role_id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 1, 'Admin', 'admin@example.com', '2024-07-12 02:24:42', '$2y$12$dQ2/kJEio8B3QBDZpkQNGOX8temFbBtoUJvsYwuIsJCLcCuoT.YmK', 'obAoFedtGXDo603eNjDnuuHEItem2fHacIH6WiujI0NyPGotKRYsdZCsw1r5', '2024-07-12 02:24:43', '2024-07-12 02:24:43');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us_pages`
--
ALTER TABLE `contact_us_pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us_page_forms`
--
ALTER TABLE `contact_us_page_forms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `general_settings`
--
ALTER TABLE `general_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `get_quotes`
--
ALTER TABLE `get_quotes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `index_pages`
--
ALTER TABLE `index_pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `page_seo_data`
--
ALTER TABLE `page_seo_data`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `page_seo_data_page_url_unique` (`page_url`);

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
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
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
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contact_us_pages`
--
ALTER TABLE `contact_us_pages`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `contact_us_page_forms`
--
ALTER TABLE `contact_us_page_forms`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `general_settings`
--
ALTER TABLE `general_settings`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `get_quotes`
--
ALTER TABLE `get_quotes`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `index_pages`
--
ALTER TABLE `index_pages`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `page_seo_data`
--
ALTER TABLE `page_seo_data`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
