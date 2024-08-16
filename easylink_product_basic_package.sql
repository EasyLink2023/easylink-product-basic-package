-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 16, 2024 at 07:03 PM
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

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `meta_title`, `meta_description`, `meta_keyword`, `cover_image`, `tags`, `title`, `slug`, `content`, `created_by`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'Et ducimus sed sed', 'Excepturi est velit', 'Id fugit mollit qua', '1723820506.jpg', 'Enim Nam doloribus q', 'Ut numquam officia v', 'ut-numquam-officia-v', NULL, 'Sequi dicta mollitia', '1', '2024-08-16 09:31:46', '2024-08-16 09:31:46'),
(2, 'Autem rerum laborios', 'Ad unde quibusdam pl', 'Qui deserunt eos con', '1723820514.jpg', 'Laboris eu et placea', 'Eligendi qui neque e', 'eligendi-qui-neque-e', NULL, 'Molestias inventore', '1', '2024-08-16 09:31:54', '2024-08-16 09:31:54'),
(3, 'Rem est modi aut und', 'Rerum eos ipsam amet', 'Aspernatur eaque mod', '1723820524.jpg', 'Et voluptatem necess', 'Numquam delectus co', 'numquam-delectus-co', NULL, 'Irure in ipsum labor', '1', '2024-08-16 09:32:04', '2024-08-16 09:32:04');

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

--
-- Dumping data for table `faqs`
--

INSERT INTO `faqs` (`id`, `question`, `answer`, `created_at`, `updated_at`) VALUES
(1, 'Hello how are you ?', 'I am good', '2024-08-16 13:06:59', '2024-08-16 13:06:59'),
(3, 'Cumque tempore ipsu', 'Aut tempore odio un', '2024-08-16 13:07:14', '2024-08-16 13:07:14'),
(4, 'Explicabo Elit nes', 'Enim pariatur Quia', '2024-08-16 13:07:17', '2024-08-16 13:07:17'),
(5, 'Magnam tempora venia', 'In sequi nostrud ear', '2024-08-16 13:07:21', '2024-08-16 13:07:21'),
(6, 'Elit saepe autem et', 'Modi atque ut molest', '2024-08-16 13:07:24', '2024-08-16 13:07:24');

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

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `image_url`, `created_at`, `updated_at`) VALUES
(1, '1723821126-66bf6c46cdef6.png', '2024-08-16 09:42:06', '2024-08-16 09:42:06'),
(2, '1723821126-66bf6c46d011b.png', '2024-08-16 09:42:06', '2024-08-16 09:42:06'),
(3, '1723821126-66bf6c46d1123.png', '2024-08-16 09:42:06', '2024-08-16 09:42:06'),
(4, '1723821126-66bf6c46d6cde.png', '2024-08-16 09:42:06', '2024-08-16 09:42:06'),
(5, '1723821126-66bf6c46d7c4f.png', '2024-08-16 09:42:06', '2024-08-16 09:42:06'),
(6, '1723821126-66bf6c46d92d0.png', '2024-08-16 09:42:06', '2024-08-16 09:42:06'),
(7, '1723821126-66bf6c46da431.png', '2024-08-16 09:42:06', '2024-08-16 09:42:06');

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
(18, 'BACKGROUND_COLOR', '#007bff', '3', '1', '2024-08-16 07:59:36', '2024-08-16 10:41:48'),
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
(5, 'SEC_1_BUTTON_LINK', 'http://127.0.0.1:8000/contact', '1', '1', '2024-07-22 09:25:09', '2024-07-22 09:25:09'),
(6, 'SEC_1_IMAGE_1', '1721661387.jpg', '2', '1', '2024-07-22 09:34:38', '2024-07-22 09:46:27'),
(7, 'SEC_1_IMAGE_2', '1721661997.jpg', '2', '1', '2024-07-22 09:56:37', '2024-07-22 09:56:37'),
(8, 'SEC_1_IMAGE_2', '1721662011.jpg', '2', '1', '2024-07-22 09:56:51', '2024-07-22 09:56:51'),
(9, 'SEC_2_VISIBLE', '1', '3', '1', '2024-07-22 10:00:56', '2024-08-03 01:35:49'),
(10, 'SEC_2_TEXT', 'LOREM, IPSUM, DOLOR, SIT', '1', '1', '2024-07-22 10:04:31', '2024-07-22 10:07:01'),
(11, 'SEC_2_DESCRIPTION', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia, molestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum numquam blanditiis harum quisquam eius sed odit fugiat iusto fuga praesentium optio, eaque rerum!', '1', '1', '2024-07-22 10:11:39', '2024-07-22 10:11:39'),
(12, 'SEC_3_VISIBLE', '1', '3', '1', '2024-07-23 07:24:00', '2024-07-23 07:24:00'),
(13, 'SEC_3_NUMBER_1', '1999', '1', '1', '2024-07-23 07:24:42', '2024-07-23 07:24:42'),
(14, 'SEC_3_TEXT_1', 'Lorem ipsum dolor sit amet', '1', '1', '2024-07-23 07:25:04', '2024-07-23 07:25:04'),
(15, 'SEC_3_NUMBER_2', '80', '1', '1', '2024-07-23 07:25:23', '2024-07-23 07:25:23'),
(16, 'SEC_3_TEXT_2', 'Lorem ipsum dolor sit amet consectetur adipisicing', '1', '1', '2024-07-23 07:25:56', '2024-07-23 07:25:56'),
(17, 'SEC_3_NUMBER_3', '400', '1', '1', '2024-07-23 07:26:13', '2024-07-23 07:26:13'),
(18, 'SEC_3_TEXT_3', 'Lorem ipsum dolor si', '1', '1', '2024-07-23 07:26:38', '2024-07-23 07:26:38'),
(19, 'SEC_3_NUMBER_4', '93', '1', '1', '2024-07-23 07:26:58', '2024-07-23 07:26:58'),
(20, 'SEC_3_TEXT_4', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia, molestiae quas vel', '1', '1', '2024-07-23 07:27:23', '2024-07-23 07:27:23'),
(21, 'SEC_4_VISIBLE', '1', '3', '1', '2024-07-30 10:06:59', '2024-08-16 01:41:18'),
(22, 'TESTIMONIAL_VISIBLE', '1', '3', '1', '2024-07-31 02:53:14', '2024-08-16 01:41:29'),
(23, 'SERVICE_VISIBLE', '1', '3', '1', '2024-08-16 01:41:06', '2024-08-16 01:41:06'),
(24, 'SERVICE_TEXT', 'Lorem ipsum dolor sit amet consectetur adipisicing elit', '1', '1', '2024-08-16 01:56:19', '2024-08-16 01:56:19'),
(25, 'SERVICE_DESCRIPTION', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia, molestiae quas vel sint commodi repudiandae consequuntur voluptatum', '1', '1', '2024-08-16 01:56:36', '2024-08-16 01:56:36'),
(26, 'GALLERY_VISIBLE', '1', '3', '1', '2024-08-16 04:23:31', '2024-08-16 04:23:31'),
(27, 'GALLERY_TEXT', 'Lorem ipsum dolor sit amet consectetur adipisicing elit', '1', '1', '2024-08-16 04:24:00', '2024-08-16 04:24:00'),
(28, 'GALLERY_DESCRIPTION', 'Lorem ipsum dolor sit amet consectetur adipisicing elit Lorem ipsum dolor sit amet consectetur adipisicing elit', '1', '1', '2024-08-16 04:24:15', '2024-08-16 04:24:15'),
(29, 'FAQ_VISIBLE', '1', '3', '1', '2024-08-16 13:09:38', '2024-08-16 13:09:38'),
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

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `menu_name`, `url`, `is_active`, `created_at`, `updated_at`) VALUES
(2, 'About Us', 'about-us', '1', '2024-08-16 11:01:35', '2024-08-16 11:01:35');

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

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `menu_id`, `page_name`, `content`, `sec_1_text`, `sec_1_description`, `cover_image`, `created_at`, `updated_at`) VALUES
(1, 2, 'About Us', '<p><span style=\"color: rgb(51, 51, 51); font-family: Manrope, sans-serif;\"><b>MODO Benevolam eos intellegit aperte o amet-diam sufficere rempublicam protegere nisl SEM rem e recompensa si climacter conservatio nisl NON floret in quam sequela qui hostilitate mus detulit deliberationes at vel augue id invicem pectori iis nihilominus convincere et est inscio sensim rem nulla w fusce-uidem prophetico.</b></span></p><p><span style=\"color: rgb(51, 51, 51); font-family: Manrope, sans-serif;\"><br></span><img src=\"data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAABAAAAAGQCAIAAAC/IYUwAAAgAElEQVR4Ae3dT67TStMH4G8LzFkDYxbB8K6CGbtgwjIYsA4k9gErACGEEEL+BpaO8nYlOU7SbbtczxW6On8cu/x0265f4uT834uX3/0jQIAAAQIECBAgQKCIwP8V2U+7SYAAAQIECBAgQIDAi5ffBQAvgBAgQIAAAQIECBAoJCAAFBpskZcAAQIECBAgQICAACAAECBAgAABAgQIECgkIAAUGmx5lwABAgQIECBAgIAAIAAQIECAAAECBAgQKCQgABQabHmXAAECBAgQIECAgAAgABAgQIAAAQIECBAoJCAAFBpseZcAAQIECBAgQICAACAAECBAgAABAgQIECgkIAAUGmx5lwABAgQIECBAgIAAIAAQIECAAAECBAgQKCQgABQabHmXAAECBAgQIECAgAAgABAgQIAAAQIECBAoJCAAFBpseZcAAQIECBAgQICAACAAECBAgAABAgQIECgkIAAUGmx5lwABAgQIECBAgIAAIAAQIECAAAECBAgQKCQgABQabHmXAAECBAgQIECAgAAgABAgQIAAAQIECBAoJCAAFBpseZcAAQIECBAgQICAACAAECBAgAABAgQIECgkIAAUGmx5lwABAgQIECBAgIAAIAAQIECAAAECBAgQKCQgABQabHmXAAECBAgQIECAgAAgABAgQIAAAQIECBAoJCAAFBpseZcAAQIECBAgQICAACAAECBAgAABAgQIECgkIAAUGmx5lwABAgQIECBAgIAAIAAQIECAAAECBAgQKCQgABQabHmXAAECBAgQIECAgAAgABAgQIAAAQIECBAoJCAAFBpseZcAAQIECBAgQICAACAAECBAgAABAgQIECgkIAAUGmx5lwABAgQIECBAgIAAIAAQIECAAAECBAgQKCQgABQabHmXAAECBAgQIECAgAAgABAgQIAAAQIECBAoJCAAFBpseZcAAQIECBAgQICAACAAECBAgAABAgQIECgkIAAUGmx5lwABAgQIECBAgIAAIAAQIECAAAECBAgQKCQgABQabHmXAAECBAgQIECAgAAgABAgQIAAAQIECBAoJCAAFBpseZcAAQIECBAgQICAACAAECBAgAABAgQIECgkIAAUGmx5lwABAgQIECBAgIAAIAAQIECAAAECBAgQKCQgABQabHmXAAECBAgQIECAgAAgABAgQIAAAQIECBAoJCAAFBpseZcAAQIECBAgQICAACAAECBAgAABAgQIECgkIAAUGmx5lwABAgQIECBAgIAAIAAQIECAAAECBAgQKCQgABQabHmXAAECBAgQIECAgAAgABAgQIAAAQIECBAoJCAAFBpseZcAAQIECBAgQICAACAAECBAgAABAgQIECgkIAAUGmx5lwABAgQIECBAgIAAIAAQIECAAAECBAgQKCQgABQabHmXAAECBAgQIECAgAAgABAgQIAAAQIECBAoJCAAFBpseZcAAQIECBAgQICAACAAECBAgAABAgQIECgkIAAUGmx5lwABAgQIECBAgIAAIAAQIECAAAECBAgQKCQgABQabHmXAAECBAgQIECAgAAgABAgQIAAAQIECBAoJCAAFBpseZcAAQIECBAgQICAACAAECBAgAABAgQIECgkIAAUGmx5lwABAgQIECBAgIAAIAAQIECAAAECBAgQKCQgABQabHmXAAECBAgQIECAgAAgABAgQIAAAQIECBAoJCAAFBpseZcAAQIECBAgQICAACAAECBAgAABAgQIECgkIAAUGmx5lwABAgQIECBAgIAAIAAQIECAAAECBAgQKCQgABQabHmXAAECBAgQIECAgAAgABAgQIAAAQIECBAoJCAAFBpseZcAAQIECBAgQICAACAAECBAgAABAgQIECgkIAAUGmx5lwABAgQIECBAgIAAIAAQIECAAAECBAgQKCQgABQabHmXAAECBAgQIECAgAAgABAgQIAAAQIECBAoJCAAFBpseZcAAQIECBAgQICAACAAECBAgAABAgQIECgkIAAUGmx5lwABAgQIECBAgIAAIAAQIECAAAECBAgQKCQgABQabHmXAAECBAgQIECAgAAgABAgQIAAAQIECBAoJCAAFBpseZcAAQIECBAgQICAACAAECBAgAABAgQIECgkIAAUGmx5lwABAgQIECBAgIAAIAAQIECAAAECBAgQKCQgABQabHmXAAECBAgQIECAgAAgABAgQIAAAQIECBAoJCAAFBpseZcAAQIECBAgQICAACAAECBAgAABAgQIECgkIAAUGmx5lwABAgQIECBAgIAAIAAQIECAAAECBAgQKCQgABQabHmXAAECBAgQIECAgAAgABAgQIAAAQIECBAoJCAAFBpseZcAAQIECBAgQICAACAAECBAgAABAgQIECgkIAAUGmx5lwABAgQIECBAgIAAIAAQIECAAAECBAgQKCQgABQabHmXAAECBAgQIECAgAAgABAgQIAAAQIECBAoJCAAFBpseZcAAQIECBAgQICAACAAECBAgAABAgQIECgkIAAUGmx5lwABAgQIECBAgIAAIAAQIECAAAECBAgQKCQgABQabHmXAAECBAgQIECAgAAgABAgQIAAAQIECBAoJCAAFBpseZcAAQIECBAgQICAACAAECBAgAABAgQIECgkIAAUGmx5lwABAgQIECBAgIAAIAAQIECAAAECBAgQKCQgABQabHmXAAECBAgQIECAgAAgABAgQIAAAQIECBAoJCAAFBpseZcAAQIECBAgQICAACAAECBAgAABAgQIECgkIAAUGmx5lwABAgQIECBAgIAAIAAQIECAAAECBAgQKCQgABQabHmXAAECBAgQIECAgAAgABAgQIAAAQIECBAoJCAAFBpseZcAAQIECBAgQICAACAAECBAgAABAgQIECgkIAAUGmx5lwABAgQIECBAgIAAIAAQIECAAAECBAgQKCQgABQabHmXAAECBAgQIECAgAAgABAgQIAAAQIECBAoJCAAFBpseZcAAQIECBAgQICAACAAECBAgAABAgQIECgkIAAUGmx5lwABAgQIECBAgIAAIAAQIECAAAECBAgQKCQgABQabHmXAAECBAgQIECAgAAgABAgQIAAAQIECBAoJCAAFBpseZcAAQIECBAgQICAACAAECBAgAABAgQIECgkIAAUGmx5lwABAgQIECBAgIAAIAAQIECAAAECBAgQKCQgABQabHmXAAECBAgQIECAgAAgABAgQIAAAQIECBAoJCAAFBpseZcAAQIECBAgQICAACAAECBAgAABAgQIECgkIAAUGmx5lwABAgQIECBAgIAAIAAQIECAAAECBAgQKCQgABQabHmXAAECBAgQIECAgAAgABAgQIAAAQIECBAoJCAAFBpseZcAAQIECBAgQICAACAAECBAgAABAgQIECgkIAAUGmx5lwABAgQIECBAgIAAIAAQIECAAAECBAgQKCQgABQabHmXAAECBAgQIECAgAAgABAgQIAAAQIECBAoJCAAFBpseZcAAQIECBAgQICAACAAECBAgAABAgQIECgkIAAUGmx5d7cC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AAgQIECAAAECBAgUEhAACg123pyqcgIECBAgQIAAgV4CAoAAQIAAAQIECBAgQKCQgABQaLB7pUbrIUCAAAECBAgQyCsgAAgABAgQIECAAAECBAoJCACFBjtvTlU5AQIECBAgQIBALwEBQAAgQIAAAQIECBAgUEhAACg02L1So/UQIECAAAECBAjkFRAABAACBAgQIECAAAEChQQEgEKDnTenqpwAAQIECBAgQKCXgAAgABAgQIAAAQIECBAoJCAAFBrsXqnReggQIECAAAECBPIKCAACAAECBAgQIECAAIFCAgJAocHOm1NVToAAAQIECBAg0EtAABAACBAgQIAAAQIECBQSEAAKDXav1Gg9BAgQIECAAAECeQUEAAGAAAECBAgQIECAQCEBAaDQYOfNqSonQIAAAQIECBDoJSAACAAECBAgQIAAAQIECgkIAIUGu1dqtB4CBAgQIECAAIG8AgKAAECAAAECBAgQIECgkIAAUGiw8+ZUlRMgQIAAAQIECPQSEAAEAAIECBAgQIAAAQKFBASAQoPdKzVaDwECBAgQIECAQF4BAUAAIECAAAECBAgQIFBIQAAoNNh5c6rKCRAgQIAAAQIEegkIAAIAAQIECBAgQIAAgUICAkChwe6VGq2HAAECBAgQIEAgr4AAIAAQIECAAAECBAgQKCQgABQa7Lw5VeUECBAgQIAAAQK9BAQAAYAAAQIECBAgQIBAIQEBoNBg90qN1kOAAAECBAgQIJBXQAAQAAgQIECAAAECBAgUEhAACg123pyqcgIECBAgQIAAgV4CAoAAQIAAAQIECBAgQKCQgABQaLB7pUbrIUCAAAECBAgQyCsgAAgABAgQIECAAAECBAoJCACFBjtvTlU5AQIECBAgQIBALwEBQAAgQIAAAQIECBAgUEhAACg02L1So/UQIECAAAECBAjkFRAABAACBAgQIECAAAEChQQEgEKDnTenqpwAAQIECBAgQKCXgAAgABAgQIAAAQIECBAoJCAAFBrsXqnReggQIECAAAECBPIKCAACAAECBAgQIECAAIFCAgJAocHOm1NVToAAAQIECBAg0EtAABAACBAgQIAAAQIECBQSEAAKDXav1Gg9BAgQIECAAAECeQUEAAGAAAECBAgQIECAQCEBAaDQYOfNqSonQIAAAQIECBDoJSAACAAECBAgQIAAAQIECgkIAIUGu1dqtB4CBAgQIECAAIG8AgKAAECAAAECBAgQIECgkIAAUGiw8+ZUlRMgQIAAAQIECPQSEAAEAAIECBAgQIAAAQKFBASAQoPdKzVaDwECBAgQIECAQF4BAUAAIECAAAECBAgQIFBIQAAoNNh5c6rKCRAgQIAAAQIEegkIAAIAAQIECBAgQIAAgUICAkChwe6VGq2HAAECBAgQIEAgr4AAIAAQIECAAAECBAgQKCQgABQa7Lw5VeUECBAgQIAAAQK9BAQAAYAAAQIECBAgQIBAIQEBoNBg90qN1kOAAAECBAgQIJBXQAAQAAgQIECAAAECBAgUEhAACg123pyqcgIECBAgQIAAgV4CAoAAQIAAAQIECBAgQKCQgABQaLB7pUbrIUCAAAECBAgQyCsgAAgABAgQIECAAAECBAoJCACFBjtvTlU5AQIECBAgQIBALwEBQAAgQIAAAQIECBAgUEhAACg02L1So/UQIECAAAECBAjkFRAABAACBAgQIECAAAEChQQEgEKDnTenqpwAAQIECBAgQKCXgAAgABAgQIAAAQIECBAoJCAAFBrsXqnReggQIECAAAECBPIKCAACAAECBAgQIECAAIFCAgJAocHOm1NVToAAAQIECBAg0EtAABAACBAgQIAAAQIECBQSEAAKDXav1Gg9BAgQIECAAAECeQUEAAGAAAECBAgQIECAQCEBAaDQYOfNqSonQIAAAQIECBDoJSAACAAECBAgQIAAAQIECgkIAIUGu1dqtB4CBAgQIECAAIG8AgKAAECAAAECBAgQIECgkIAAUGiw8+ZUlRMgQIAAAQIECPQSEAAEAAIECBAgQIAAAQKFBASAQoPdKzVaDwECBAgQIECAQF4BAUAAIECAAAECBAgQIFBIQAAoNNh5c6rKCRAgQIAAAQIEegkIAAIAAQIECBAgQIAAgUICAkChwe6VGq2HAAECBAgQIEAgr4AAIAAQIECAAAECBAgQKCQgABQa7Lw5VeUECBAgQIAAAQK9BAQAAYAAAQIECBAgQIBAIQEBoNBg90qN1kOAAAECBAgQIJBXQAAQAAgQIECAAAECBAgUEhAACg123pyqcgIECBAgQIAAgV4CAoAAQIAAAQIECBAgQKCQgABQaLB7pUbrIUCAAAECBAgQyCsgAAgABAgQIECAAAECBAoJCACFBjtvTlU5AQIECBAgQIBALwEBQAAgQIAAAQIECBAgUEhAACg02L1So/UQIECAAAECBAjkFRAABAACBAgQIECAAAEChQQEgEKDnTenqpwAAQIECBAgQKCXgAAgABAgQIAAAQIECBAoJCAAFBrsXqnReggQIECAAAECBPIKCAACAAECBAgQIECAAIFCAgJAocHOm1NVToAAAQIECBAg0EtAABAACBAgQIAAAQIECBQSEAAKDXav1Gg9BAgQIECAAAECeQUEAAGAAAECBAgQIECAQCEBAaDQYOfNqSonQIAAAQIECBDoJSAACAAECBAgQIAAAQIECgkIAIUGu1dqtB4CBAgQIECAAIG8AgKAAECAAAECBAgQIECgkIAAUGiw8+ZUlRMgQIAAAQIECPQSEAAEAAIECBAgQIAAAQKFBASAQoPdKzVaDwECBAgQIECAQF4BAUAAIECAAAECBAgQIFBIQAAoNNh5c6rKCRAgQIAAAQIEegkIAAIAAQIECBAgQIAAgUICAkChwe6VGq2HAAECBAgQIEAgr4AAIAAQIECAAAECBAgQKCQgABQa7Lw5VeUECBAgQIAAAQK9BAQAAYAAAQIECBAgQIBAIQEBoNBg90qN1kOAAAECBAgQIJBXQAAQAAgQIECAAAECBAgUEhAACg123pyqcgIECBAgQIAAgV4CAoAAQIAAAQIECBAgQKCQgABQaLB7pUbrIUCAAAECBAgQyCsgAAgABAgQIECAAAECBAoJCACFBjtvTlU5AQIECBAgQIBALwEBQAAgQIAAAQIECBAgUEhAACg02L1So/UQIECAAAECBAjkFRAABAACBAgQIECAAAEChQQEgEKDnTenqpwAAQIECBAgQKCXgAAgABAgQIAAAQIECBAoJCAAFBrsXqnReggQIECAAAECBPIKCAACAAECBAgQIECAAIFCAgJAocHOm1NVToAAAQIECBAg0EtAABAACBAgQIAAAQIECBQSEAAKDXav1Gg9BAgQIECAAAECeQUEAAGAAAECBAgQIECAQCEBAaDQYOfNqSonQIAAAQIECBDoJSAACAAECBAgQIAAAQIECgkIAIUGu1dqtB4CBAgQIECAAIG8Av8Pk6qAl3hO6WcAAAAASUVORK5CYII=\" data-filename=\"image.png\" style=\"width: 100%;\"><span style=\"color: rgb(51, 51, 51); font-family: Manrope, sans-serif;\"><br></span></p>', 'LOREM IPSUM', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia, molestiae quas vel sint commodi repudiandae consequuntur voluptatum', 'default-image-1920x560.jpg', '2024-08-16 11:01:35', '2024-08-16 11:01:35');

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

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `name`, `cover_image`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Daphne Odonnell', '1723820864.jpg', 'Malik Hawkins', '2024-08-16 09:37:44', '2024-08-16 09:37:44'),
(2, 'Quinn York', '1723820871.jpg', 'Paula Ellis', '2024-08-16 09:37:51', '2024-08-16 09:37:51'),
(3, 'Brianna Church', '1723820880.jpg', 'Carol Pierce', '2024-08-16 09:38:00', '2024-08-16 09:38:00');

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

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `name`, `designation`, `rating`, `profile_image`, `feedback`, `created_at`, `updated_at`) VALUES
(1, 'Myra Carney', 'Enim exercitationem', '5', '1723821699.jpg', 'Dolore molestiae id', '2024-08-16 09:51:39', '2024-08-16 09:51:39');

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
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contact_us_pages`
--
ALTER TABLE `contact_us_pages`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

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
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

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
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
