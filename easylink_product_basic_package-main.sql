-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 29, 2024 at 06:10 PM
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
(1, 'BANNER_IMAGE', '1724954896.jpg', '2', '1', '2024-08-29 12:38:16', '2024-08-29 12:38:16'),
(2, 'SEC_1_TEXT', 'Lorem ipsum dolor sit amet consectetur adipisicing elit', '1', '1', '2024-08-29 12:38:23', '2024-08-29 12:38:23'),
(3, 'SEC_1_DESCRIPTION', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia, molestiae quas vel sint commodi repudiandae consequuntur voluptatum', '1', '1', '2024-08-29 12:38:42', '2024-08-29 12:38:42'),
(4, 'SEC_2_FORM_TEXT', 'Lorem ipsum Contact', '1', '1', '2024-08-29 12:38:57', '2024-08-29 12:38:57'),
(5, 'FORM_REQUEST_SAVE_RESPONSE', 'Thank you', '1', '1', '2024-08-29 12:39:09', '2024-08-29 12:39:09');

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
(1, 'SITE_NAME', 'EASYLINK PRODUCT BASIC', '1', '1', '2024-08-29 11:42:48', '2024-08-29 11:42:48'),
(2, 'BACKGROUND_COLOR', '#007bff', '3', '1', '2024-08-29 11:43:14', '2024-08-29 11:43:14'),
(3, 'FONT_COLOR', '#f4f6f9', '3', '1', '2024-08-29 11:43:35', '2024-08-29 11:43:35'),
(4, 'SITE_LOGO', '1724951985.webp', '2', '1', '2024-08-29 11:49:45', '2024-08-29 11:49:45'),
(5, 'FAVICON', '1724952284.ico', '2', '1', '2024-08-29 11:54:44', '2024-08-29 11:54:44'),
(6, 'LOADER_ICON', '1724952319.gif', '2', '1', '2024-08-29 11:55:19', '2024-08-29 11:55:19'),
(7, 'BLOG_PAGE_SECTION_1_BACKGROUND_IMAGE', '1724952381.jpg', '2', '1', '2024-08-29 11:56:21', '2024-08-29 11:56:21'),
(8, 'BLOG_SEC_1_TEXT', 'Lorem Ipsum', '1', '1', '2024-08-29 11:56:34', '2024-08-29 11:56:34'),
(9, 'BLOG_SEC_1_DESCRIPTION', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia, molestiae quas vel sint commodi repudiandae consequuntur voluptatum', '1', '1', '2024-08-29 11:56:46', '2024-08-29 11:56:46'),
(10, 'DOMAIN', 'www.easylinkindia.com', '1', '1', '2024-08-29 11:57:08', '2024-08-29 11:57:08'),
(11, 'ADDRESS', 'Lorem ipsum dolor sit amet consectetur adipisicing eli', '1', '1', '2024-08-29 11:57:27', '2024-08-29 11:57:27'),
(12, 'PHONE_NUMBER', '+01 1236547890', '1', '1', '2024-08-29 11:57:38', '2024-08-29 11:57:38'),
(13, 'EMAIL_ADDRESS', 'admin@example.com', '1', '1', '2024-08-29 11:58:03', '2024-08-29 11:58:03'),
(14, 'X_LINK', 'https://x.com/example', '1', '1', '2024-08-29 11:58:18', '2024-08-29 11:58:18'),
(15, 'FACEBOOK_LINK', 'https://www.facebook.com/example', '1', '1', '2024-08-29 11:58:35', '2024-08-29 11:58:35'),
(16, 'INSTAGRAM_LINK', 'https://www.instagram.com/example', '1', '1', '2024-08-29 11:58:58', '2024-08-29 11:58:58'),
(17, 'LINKEDIN_LINK', 'https://linkdein.com/s', '1', '1', '2024-08-29 11:59:17', '2024-08-29 11:59:17'),
(18, 'YOUTUBE_LINK', 'https://youtube.com/example', '1', '1', '2024-08-29 11:59:34', '2024-08-29 11:59:34'),
(19, 'FOOTER_TEXT', 'Lorem ipsum dolor sit amet consectetur adipisicing elit', '1', '1', '2024-08-29 11:59:46', '2024-08-29 11:59:46');

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
(1, 'SEC_1_VISIBLE', '1', '3', '1', '2024-08-29 12:00:38', '2024-08-29 12:00:38'),
(2, 'SEC_1_TEXT', 'Lorem ipsum dolor sit amet consectetur adipisicing elit', '1', '1', '2024-08-29 12:01:26', '2024-08-29 12:01:26'),
(3, 'SEC_1_DESCRIPTION', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia, molestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum numquam blanditiis harum quisquam eius sed odit fugiat iusto fuga praesentium optio, eaque rerum! Provident similique accusantium nemo autem.', '1', '1', '2024-08-29 12:01:41', '2024-08-29 12:01:41'),
(4, 'SEC_1_BUTTON_TEXT', 'Lorem ipsum', '1', '1', '2024-08-29 12:01:54', '2024-08-29 12:01:54'),
(5, 'SEC_1_BUTTON_LINK', 'http://127.0.0.1:8000/contact-us', '1', '1', '2024-08-29 12:02:21', '2024-08-29 12:02:21'),
(6, 'SEC_1_IMAGE_1', '1724952797.jpg', '2', '1', '2024-08-29 12:03:17', '2024-08-29 12:03:17'),
(7, 'SEC_1_IMAGE_2', '1724952809.jpg', '2', '1', '2024-08-29 12:03:29', '2024-08-29 12:03:29'),
(8, 'SEC_1_IMAGE_3', '1724952828.jpg', '2', '1', '2024-08-29 12:03:48', '2024-08-29 12:03:48'),
(9, 'SEC_2_VISIBLE', '1', '3', '1', '2024-08-29 12:04:49', '2024-08-29 12:04:49'),
(10, 'SEC_2_TEXT', 'Lorem ipsum dolor sit amet consectetur adipisicing elit', '1', '1', '2024-08-29 12:05:14', '2024-08-29 12:05:14'),
(11, 'SEC_2_DESCRIPTION', 'Lorem ipsum dolor sit amet consectetur adipisicing elit', '1', '1', '2024-08-29 12:05:30', '2024-08-29 12:05:30'),
(12, 'SEC_3_VISIBLE', '1', '3', '1', '2024-08-29 12:06:14', '2024-08-29 12:06:14'),
(13, 'SEC_3_NUMBER_1', '1999', '1', '1', '2024-08-29 12:06:42', '2024-08-29 12:06:42'),
(14, 'SEC_3_TEXT_1', 'Lorem ipsum dolor sit amet consectetur adipisicing elit', '1', '1', '2024-08-29 12:07:03', '2024-08-29 12:07:03'),
(15, 'SEC_3_NUMBER_2', '80', '1', '1', '2024-08-29 12:07:11', '2024-08-29 12:07:11'),
(16, 'SEC_3_TEXT_2', 'Lorem ipsum dolor sit amet consectetur adipisicing elit', '1', '1', '2024-08-29 12:07:19', '2024-08-29 12:07:19'),
(17, 'SEC_3_NUMBER_3', '100', '1', '1', '2024-08-29 12:07:34', '2024-08-29 12:07:34'),
(18, 'SEC_3_TEXT_3', 'Lorem ipsum dolor sit amet consectetur adipisicing elit', '1', '1', '2024-08-29 12:07:39', '2024-08-29 12:07:39'),
(19, 'SEC_3_NUMBER_4', '2000', '1', '1', '2024-08-29 12:08:18', '2024-08-29 12:08:18'),
(20, 'SEC_3_TEXT_4', 'Lorem ipsum dolor sit amet consectetur adipisicing elit', '1', '1', '2024-08-29 12:08:24', '2024-08-29 12:08:24'),
(21, 'BLOG_VISIBLE', '1', '3', '1', '2024-08-29 12:09:07', '2024-08-29 12:09:07'),
(22, 'SERVICE_VISIBLE', '1', '3', '1', '2024-08-29 12:09:38', '2024-08-29 12:09:38'),
(23, 'SERVICE_TEXT', 'Lorem ipsum Service', '1', '1', '2024-08-29 12:09:50', '2024-08-29 12:09:50'),
(24, 'SERVICE_DESCRIPTION', 'Lorem ipsum dolor sit amet consectetur adipisicing elit', '1', '1', '2024-08-29 12:09:57', '2024-08-29 12:09:57'),
(25, 'GALLERY_VISIBLE', '1', '3', '1', '2024-08-29 12:11:58', '2024-08-29 12:11:58'),
(26, 'GALLERY_TEXT', 'Lorem ipsum Gallery', '1', '1', '2024-08-29 12:12:31', '2024-08-29 12:12:31'),
(27, 'TESTIMONIAL_VISIBLE', '1', '3', '1', '2024-08-29 12:17:21', '2024-08-29 12:17:21'),
(28, 'FAQ_VISIBLE', '1', '3', '1', '2024-08-29 12:17:43', '2024-08-29 12:17:43'),
(29, 'FAQ_TEXT', 'Lorem ipsum FAQ', '1', '1', '2024-08-29 12:17:55', '2024-08-29 12:17:55'),
(30, 'FAQ_DESCRIPTION', 'Lorem ipsum dolor sit amet consectetur adipisicing elit', '1', '1', '2024-08-29 12:18:02', '2024-08-29 12:18:02');

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
(48, '2014_07_11_132504_create_roles_table', 1),
(49, '2014_10_12_000000_create_users_table', 1),
(50, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(51, '2014_10_12_100000_create_password_resets_table', 1),
(52, '2019_08_19_000000_create_failed_jobs_table', 1),
(53, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(54, '2024_07_12_125648_create_general_settings_table', 1),
(55, '2024_07_16_174427_create_menus_table', 1),
(56, '2024_07_19_173126_create_index_pages_table', 1),
(57, '2024_07_23_142854_create_contact_us_pages_table', 1),
(58, '2024_07_24_125605_create_pages_table', 1),
(59, '2024_07_30_072206_create_blogs_table', 1),
(60, '2024_07_31_070520_create_testimonials_table', 1),
(61, '2024_07_31_172828_create_get_quotes_table', 1),
(62, '2024_07_31_183234_create_contact_us_page_forms_table', 1),
(63, '2024_08_08_130732_create_page_seo_data_table', 1),
(64, '2024_08_16_073055_create_services_table', 1),
(65, '2024_08_16_082706_create_galleries_table', 1),
(66, '2024_08_16_173742_create_faqs_table', 1);

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
(1, 'admin', 1, '2024-08-29 11:00:07', '2024-08-29 11:00:07');

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
  `default_template` int NOT NULL DEFAULT '1',
  `is_template_changed` int NOT NULL DEFAULT '0',
  `is_password_changed` int NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role_id`, `name`, `email`, `email_verified_at`, `password`, `default_template`, `is_template_changed`, `is_password_changed`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 1, 'Admin', 'admin@example.com', '2024-08-29 11:00:08', '$2y$12$J0.hX96wjIB31fGOxPM.measlRUUPjLSKEc0nzgC6CZDJ0s49Iqki', 1, 1, 0, NULL, '2024-08-29 11:00:08', '2024-08-29 11:19:53');

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
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

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
