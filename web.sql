-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 15, 2025 at 07:18 AM
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
-- Database: `web`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` bigint(20) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `services` varchar(250) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `name`, `email`, `phone`, `message`, `services`, `created_at`, `updated_at`) VALUES
(1, 'anish', 'anishkhan786946@gmail.com', '7024937217', 'Testing data', NULL, '2025-02-19 08:45:13', '2025-02-19 08:45:13'),
(2, 'anish', 'anishkhan786946@gmail.com', '7024937217', 'Testing data', NULL, '2025-02-19 08:45:34', '2025-02-19 08:45:34'),
(3, 'anish', 'anishkhan786946@gmail.com', '07024937217', 'dfsdfsdfsd', NULL, '2025-02-19 08:46:44', '2025-02-19 08:46:44'),
(4, 'anish', 'anishkhan786946@gmail.com', '07024937217', 'dfsdfsdfsdf', NULL, '2025-02-19 08:48:00', '2025-02-19 08:48:00'),
(5, 'anish', 'anishkhan786946@gmail.com', '07024937217', 'fsadfsdfasdfasd', NULL, '2025-02-19 08:50:06', '2025-02-19 08:50:06'),
(6, 'khan', 'khan@gmail.com', '07024937217', 'dfdfsadfsadf', NULL, '2025-02-19 09:10:33', '2025-02-19 09:10:33');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_100000_create_password_resets_table', 1),
(2, '2016_06_01_000001_create_oauth_auth_codes_table', 1),
(3, '2016_06_01_000002_create_oauth_access_tokens_table', 1),
(4, '2016_06_01_000003_create_oauth_refresh_tokens_table', 1),
(5, '2016_06_01_000004_create_oauth_clients_table', 1),
(6, '2016_06_01_000005_create_oauth_personal_access_clients_table', 1),
(7, '2019_08_19_000000_create_failed_jobs_table', 1),
(8, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(9, '2022_03_21_100213_create_roles_table', 1),
(10, '2022_03_22_000000_create_users_table', 1),
(11, '2023_06_20_103343_create_tam_fcm_token_table', 1),
(12, '2023_06_20_104104_create_tam_user_notification_table', 1),
(13, '2023_06_20_104957_create_tam_counsellors_table', 1),
(14, '2023_06_20_112556_create_tam_admin_notification_table', 1),
(15, '2023_06_20_114337_create_tam_ticket_category_table', 1),
(16, '2023_06_20_115557_create_tam_states_table', 1),
(17, '2023_06_20_120624_create_languages_table', 1),
(18, '2023_06_21_093339_create_tam_hubs_table', 1),
(19, '2023_06_21_093858_create_tam_async_chat_sessions_table', 1),
(20, '2023_06_21_093918_create_tam_async_chat_messages_table', 1),
(21, '2023_06_21_093936_create_tam_async_chat_audit_table', 1),
(22, '2023_06_21_102356_create_tam_category_table', 1),
(23, '2023_06_21_120840_create_tam_chat_sessions_table', 1),
(24, '2023_06_22_071613_create_tam_chat_messages_table', 1),
(25, '2023_06_22_092052_create_tam_chat_audit_table', 1),
(26, '2023_06_22_092937_create_tam_counsellor_categories_table', 1),
(27, '2023_06_22_093319_create_tam_feature_table', 1),
(28, '2023_06_22_093641_create_tam_counsellor_feature_table', 1),
(29, '2023_06_22_093854_create_tam_faq_table', 1),
(30, '2023_06_22_094042_create_tam_library_category_table', 1),
(31, '2023_06_22_094246_create_tam_librery_table', 1),
(32, '2023_06_22_094717_create_tam_log_user_device_info_table', 1),
(33, '2023_06_22_095135_create_tam_notifyme_table', 1),
(34, '2023_06_22_095340_create_tam_permissions_table', 1),
(35, '2023_06_22_095533_create_tam_questions_table', 1),
(36, '2023_06_22_095642_create_tam_resource_category_table', 1),
(37, '2023_06_22_100025_create_tam_troopers_togethers_table', 1),
(38, '2023_06_22_101031_create_tam_troopers_together_category_table', 1),
(39, '2023_06_22_101346_create_tam_support_table', 1),
(40, '2023_10_03_112710_create_tam_async_remarks', 1),
(41, '2024_03_11_142605_create_tam_utm_audit', 1),
(42, '2024_03_11_144227_create_tam_user_audio_video_play', 1),
(43, '2024_03_11_145354_create_tam_notification', 1),
(44, '2024_03_13_164226_create_tam_audit_app_version', 1),
(45, '2024_03_26_152838_create_tam_privacy_policy', 2),
(46, '2024_03_26_164747_create_tam_session_chat_feedback', 3),
(47, '2024_05_01_120646_create_tam_user_risk_profile', 4),
(48, '2024_05_01_121925_create_tam_user_risk_profile_audit', 5),
(49, '2024_05_02_165532_create_fair_usage_impact', 6),
(50, '2024_05_06_130901_create_tam_troopers_together_counsellor', 7);

-- --------------------------------------------------------

--
-- Table structure for table `oauth_access_tokens`
--

CREATE TABLE `oauth_access_tokens` (
  `id` varchar(100) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `scopes` text DEFAULT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_access_tokens`
--

INSERT INTO `oauth_access_tokens` (`id`, `user_id`, `client_id`, `name`, `scopes`, `revoked`, `created_at`, `updated_at`, `expires_at`) VALUES
('227139ad2a19c37fb5460a5e37b4c01b0557bb3b0cfa4069c9225e957ee0cec73342eef4f8367b34', 1, 2, NULL, '[]', 0, '2024-03-14 12:39:57', '2024-03-14 12:39:57', '2025-03-14 12:39:57');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_auth_codes`
--

CREATE TABLE `oauth_auth_codes` (
  `id` varchar(100) NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `scopes` text DEFAULT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_clients`
--

CREATE TABLE `oauth_clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `secret` varchar(100) DEFAULT NULL,
  `provider` varchar(255) DEFAULT NULL,
  `redirect` text NOT NULL,
  `personal_access_client` tinyint(1) NOT NULL,
  `password_client` tinyint(1) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_clients`
--

INSERT INTO `oauth_clients` (`id`, `user_id`, `name`, `secret`, `provider`, `redirect`, `personal_access_client`, `password_client`, `revoked`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Laravel Personal Access Client', 'mHO9mxROlu2uQWyICQJccZE1JPbyy3NE1Eck3eQv', NULL, 'http://localhost', 1, 0, 0, '2024-03-14 12:39:30', '2024-03-14 12:39:30'),
(2, NULL, 'Laravel Password Grant Client', 'E77yXxbLMIl1SRCrpkxSmzZhMEZLyB702kNKaK1B', 'users', 'http://localhost', 0, 1, 0, '2024-03-14 12:39:30', '2024-03-14 12:39:30');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_personal_access_clients`
--

CREATE TABLE `oauth_personal_access_clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_personal_access_clients`
--

INSERT INTO `oauth_personal_access_clients` (`id`, `client_id`, `created_at`, `updated_at`) VALUES
(1, 1, '2024-03-14 12:39:30', '2024-03-14 12:39:30');

-- --------------------------------------------------------

--
-- Table structure for table `oauth_refresh_tokens`
--

CREATE TABLE `oauth_refresh_tokens` (
  `id` varchar(100) NOT NULL,
  `access_token_id` varchar(100) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `oauth_refresh_tokens`
--

INSERT INTO `oauth_refresh_tokens` (`id`, `access_token_id`, `revoked`, `expires_at`) VALUES
('8b67597fe754a13a925da403de0e75f5f81a5f4ac31432efec0dad6ded3ada042f04ae5625e52c5d', '227139ad2a19c37fb5460a5e37b4c01b0557bb3b0cfa4069c9225e957ee0cec73342eef4f8367b34', 0, '2025-03-14 12:39:57');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `p_name` varchar(100) DEFAULT NULL,
  `p_description` text DEFAULT NULL,
  `image` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `p_name`, `p_description`, `image`, `created_at`, `updated_at`) VALUES
(4, 'Manage', 'A tale of a fateful trip that started from this tropic port', '6a33ac1a-b313-40ed-aefa-6f6f53407c10-1739972935.jpg', '2025-02-18 05:13:13', '2025-02-19 08:18:55'),
(5, 'Marketing Strategies', 'Improvement Charts', '5c5106c8-16ca-429e-af98-3516ef8da01f-1739972944.jpg', '2025-02-18 05:30:19', '2025-02-19 08:19:04'),
(7, 'Improvement Charts', 'The man has gone before you would', 'f91d850d-5b2e-479b-9496-9dc24c650166-1739972952.jpg', '2025-02-18 06:48:23', '2025-02-19 08:24:58'),
(11, 'Biometric attendance', 'Biometric attendance', '4d60c632-c7c9-45e1-bd4e-02ce3a43357a-1740144269.jpg', '2025-02-21 07:54:29', '2025-02-21 07:54:29');

-- --------------------------------------------------------

--
-- Table structure for table `product_images`
--

CREATE TABLE `product_images` (
  `id` bigint(20) NOT NULL,
  `product_id` bigint(20) NOT NULL,
  `image` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product_images`
--

INSERT INTO `product_images` (`id`, `product_id`, `image`, `created_at`, `updated_at`) VALUES
(4, 11, '11-58b1fd17-086d-4af8-b695-e3dd5271d686-1740144663.jpg', '2025-02-21 08:01:03', '2025-02-21 08:01:03'),
(5, 11, '11-7f6f042d-3485-4e2d-ab25-c845ac7860b0-1740144663.jpg', '2025-02-21 08:01:03', '2025-02-21 08:01:03'),
(6, 11, '11-e19ef70b-b803-4106-aab1-daf326347bc6-1740144663.jpg', '2025-02-21 08:01:03', '2025-02-21 08:01:03'),
(7, 11, '11-c61756c0-ca37-4236-8faa-fce22f88dadf-1740144663.webp', '2025-02-21 08:01:03', '2025-02-21 08:01:03');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `name`, `image`, `created_at`, `updated_at`, `deleted_at`) VALUES
(2, 'Business Services', 'decccaaa-3516-4c8b-b089-4ea3db33df0a-1741764764.avif', '2025-02-18 01:07:31', '2025-03-12 02:02:44', NULL),
(3, 'Travel and Aviation', 'f6a9ceb2-d63a-43be-a696-e1455cec04cc-1741764742.avif', '2025-02-18 01:07:45', '2025-03-12 02:02:22', NULL),
(4, 'Manager anish khan', 'e224ba77-72a4-4751-a22a-06a890c02fd8-1741764676.avif', '2025-02-19 09:00:12', '2025-03-12 02:01:16', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `setting`
--

CREATE TABLE `setting` (
  `id` bigint(20) NOT NULL,
  `website_title` text NOT NULL,
  `description` text DEFAULT NULL,
  `logo` text DEFAULT NULL,
  `support_email` varchar(50) NOT NULL,
  `contact_no` text NOT NULL,
  `address` text NOT NULL DEFAULT current_timestamp(),
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `setting`
--

INSERT INTO `setting` (`id`, `website_title`, `description`, `logo`, `support_email`, `contact_no`, `address`, `created_at`, `updated_at`) VALUES
(1, 'IROBO AI AND ROBOTICS', 'A tale of a fateful trip that started from this tropic port aboard this tiny ship today still wanted by the government apartment in the sky moving on up to the east side a family', '8807d37a-2e3a-4886-a6bc-c233273b1c14-1739957196.png', 'mailhere@support.com', '91234598080', '23A, Queenstown St, Log Vegas, United States...', '2025-02-18 07:28:17', '2025-02-19 05:52:31');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` bigint(20) NOT NULL,
  `title` text NOT NULL,
  `description` text DEFAULT NULL,
  `image` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `title`, `description`, `image`, `created_at`, `updated_at`) VALUES
(2, 'The government they survive artical of fortune', 'HIGH-QUALITY MARKET  EXPERIENCE', 'aee334f1-e324-4b10-80c6-8241221481ef-1741766116.avif', '2025-02-18 05:53:12', '2025-03-12 02:25:16'),
(3, 'The government they survive artical', 'HIGH-QUALITY MARKET', '53a0b332-8cd1-4a82-b2d6-22af0b0c1d7d-1741761525.avif', '2025-02-19 05:36:52', '2025-03-12 01:08:45');

-- --------------------------------------------------------

--
-- Table structure for table `tam_roles`
--

CREATE TABLE `tam_roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tam_roles`
--

INSERT INTO `tam_roles` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'full access', '2024-03-14 05:20:36', '2024-03-14 05:20:36');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone_no` varchar(255) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role_id`, `name`, `email`, `phone_no`, `email_verified_at`, `password`, `gender`, `avatar`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 1, 'Admin', 'admin@gmail.com', NULL, NULL, '$2y$10$d8oLVvNny8VnLxa/e0u91O70n7fWdd93OJeq0sMnatpvWsIAuYDZa', NULL, '/team-1.jpg', NULL, '2024-03-14 05:20:37', '2025-02-18 06:34:47');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauth_access_tokens`
--
ALTER TABLE `oauth_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_access_tokens_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_auth_codes`
--
ALTER TABLE `oauth_auth_codes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_auth_codes_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_clients_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauth_refresh_tokens`
--
ALTER TABLE `oauth_refresh_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_refresh_tokens_access_token_id_index` (`access_token_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `setting`
--
ALTER TABLE `setting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tam_roles`
--
ALTER TABLE `tam_roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tam_roles_name_unique` (`name`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `users_role_id_foreign` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `setting`
--
ALTER TABLE `setting`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tam_roles`
--
ALTER TABLE `tam_roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
