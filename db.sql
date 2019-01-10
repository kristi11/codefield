-- Adminer 4.6.2 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

DROP TABLE IF EXISTS `app_colors`;
CREATE TABLE `app_colors` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `app_color` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `font_color` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `app_color` (`app_color`),
  KEY `font_color` (`font_color`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=COMPACT;

INSERT INTO `app_colors` (`id`, `app_color`, `font_color`, `created_at`, `updated_at`) VALUES
(1,	'green',	'success',	'2017-09-14 06:24:31',	'2018-03-20 21:24:44');

DROP TABLE IF EXISTS `banner_texts`;
CREATE TABLE `banner_texts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `primary_text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `secondary_text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `categories`;
CREATE TABLE `categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `categories_name_unique` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(6,	'Bootstrap 4',	'2018-03-28 22:47:03',	'2018-03-28 22:47:03'),
(7,	'Jquery',	'2018-03-28 22:47:14',	'2018-03-28 22:47:14'),
(8,	'Css',	'2018-03-28 22:47:20',	'2018-03-28 22:47:20'),
(9,	'Mvc',	'2018-04-05 19:36:27',	'2018-04-05 19:36:27'),
(10,	'C#',	'2018-04-05 19:36:34',	'2018-04-05 19:36:34'),
(11,	'Laravel',	'2018-04-09 04:43:59',	'2018-04-09 04:43:59'),
(12,	'ADO.NET',	'2018-04-09 20:57:01',	'2018-04-09 20:57:01'),
(13,	'Android',	'2018-04-30 00:18:52',	'2018-04-30 00:19:34'),
(14,	'Mobile',	'2018-04-30 00:19:01',	'2018-04-30 00:19:54'),
(15,	'webpack',	'2018-05-04 05:34:14',	'2018-05-04 05:34:14'),
(16,	'service workers',	'2018-05-04 05:34:27',	'2018-05-04 05:34:27'),
(17,	'PWA',	'2018-05-04 05:34:42',	'2018-05-04 05:34:42'),
(18,	'resources',	'2018-06-14 19:50:50',	'2018-06-14 19:50:50'),
(19,	'web apps',	'2018-06-14 22:10:34',	'2018-06-14 22:10:34'),
(20,	'mobile apps',	'2018-06-14 22:10:40',	'2018-06-14 22:10:40'),
(21,	'tutorials',	'2018-06-14 22:10:51',	'2018-06-14 22:10:51'),
(22,	'angular',	'2018-06-14 22:10:56',	'2018-06-14 22:10:56'),
(23,	'react',	'2018-06-14 22:11:02',	'2018-06-14 22:11:02'),
(24,	'vue js',	'2018-06-14 22:11:29',	'2018-06-14 22:11:29'),
(25,	'vanilla js',	'2018-06-14 22:11:35',	'2018-06-14 22:11:35'),
(26,	'php',	'2018-06-14 22:11:55',	'2018-06-14 22:11:55'),
(28,	'material design',	'2018-06-14 22:12:39',	'2018-06-14 22:12:39'),
(29,	'foundation',	'2018-06-14 22:12:48',	'2018-06-14 22:12:48'),
(30,	'ember js',	'2018-06-14 22:13:01',	'2018-06-14 22:13:01'),
(31,	'symphony',	'2018-06-14 22:13:51',	'2018-06-14 22:13:51'),
(32,	'codeigniter',	'2018-06-14 22:14:08',	'2018-06-14 22:14:08'),
(33,	'yii',	'2018-06-14 22:14:14',	'2018-06-14 22:14:14'),
(34,	'zend',	'2018-06-14 22:14:38',	'2018-06-14 22:14:38'),
(35,	'cake php',	'2018-06-14 22:14:57',	'2018-06-14 22:14:57'),
(36,	'ios',	'2018-06-14 22:15:24',	'2018-06-14 22:15:24'),
(37,	'swift',	'2018-06-14 22:15:29',	'2018-06-14 22:15:29'),
(38,	'go',	'2018-06-14 22:15:33',	'2018-06-14 22:15:33'),
(39,	'java',	'2018-06-14 22:15:58',	'2018-06-14 22:15:58'),
(40,	'c',	'2018-06-14 22:16:03',	'2018-06-14 22:16:03'),
(41,	'c++',	'2018-06-14 22:16:08',	'2018-06-14 22:16:08'),
(42,	'polymer',	'2018-06-14 22:16:34',	'2018-06-14 22:16:34'),
(43,	'backbone js',	'2018-06-14 22:16:42',	'2018-06-14 22:16:42'),
(44,	'meteor js',	'2018-06-14 22:16:52',	'2018-06-14 22:16:52'),
(45,	'pusher',	'2018-06-14 22:17:20',	'2018-06-14 22:17:20'),
(46,	'node js',	'2018-06-14 22:17:45',	'2018-06-14 22:17:45'),
(47,	'aurelia js',	'2018-06-14 22:18:06',	'2018-06-14 22:18:06'),
(48,	'gulp',	'2018-06-14 22:18:13',	'2018-06-14 22:18:13'),
(49,	'grunt',	'2018-06-14 22:18:18',	'2018-06-14 22:18:18'),
(50,	'babel',	'2018-06-14 22:18:32',	'2018-06-14 22:18:32'),
(51,	'es5',	'2018-06-14 22:18:39',	'2018-06-14 22:18:39'),
(52,	'es6',	'2018-06-14 22:18:44',	'2018-06-14 22:18:44'),
(53,	'es7',	'2018-06-14 22:18:50',	'2018-06-14 22:18:50'),
(54,	'coffeescript',	'2018-06-14 22:18:56',	'2018-06-14 22:18:56'),
(55,	'ruby',	'2018-06-14 22:20:04',	'2018-06-14 22:20:04'),
(56,	'rails',	'2018-06-14 22:20:09',	'2018-06-14 22:20:09'),
(57,	'python',	'2018-06-14 22:21:01',	'2018-06-14 22:21:01'),
(58,	'django',	'2018-06-14 22:21:56',	'2018-06-14 22:21:56'),
(59,	'semantic-ui',	'2018-06-14 22:23:52',	'2018-06-14 22:23:52'),
(60,	'uikit',	'2018-06-14 22:24:04',	'2018-06-14 22:24:04'),
(61,	'skeleton',	'2018-06-14 22:24:09',	'2018-06-14 22:24:09'),
(62,	'material ui',	'2018-06-14 22:24:21',	'2018-06-14 22:24:21'),
(63,	'materialize',	'2018-06-14 22:24:29',	'2018-06-14 22:24:29'),
(64,	'pure',	'2018-06-14 22:24:33',	'2018-06-14 22:24:33'),
(65,	'developer tools',	'2018-06-14 22:25:09',	'2018-06-14 22:25:34'),
(66,	'design tools',	'2018-06-14 22:25:20',	'2018-06-14 22:25:20'),
(67,	'photography',	'2018-06-14 22:25:56',	'2018-06-14 22:25:56'),
(68,	'social media',	'2018-06-14 22:26:17',	'2018-06-14 22:26:17'),
(69,	'javascript',	'2018-06-14 22:28:48',	'2018-06-14 22:28:48'),
(70,	'ui design',	'2018-06-16 18:39:05',	'2018-06-16 18:39:17'),
(71,	'ux design',	'2018-06-16 18:39:27',	'2018-06-16 18:39:27');

DROP TABLE IF EXISTS `category_project`;
CREATE TABLE `category_project` (
  `category_id` int(10) unsigned NOT NULL,
  `project_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  KEY `category_project_category_id_index` (`category_id`),
  KEY `category_project_project_id_index` (`project_id`),
  CONSTRAINT `category_project_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  CONSTRAINT `category_project_project_id_foreign` FOREIGN KEY (`project_id`) REFERENCES `projects` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `category_project` (`category_id`, `project_id`, `created_at`, `updated_at`) VALUES
(43,	57,	'2018-11-01 01:55:55',	'2018-11-01 01:55:55');

DROP TABLE IF EXISTS `customers`;
CREATE TABLE `customers` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `github_id` int(11) NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `customers_github_id_unique` (`github_id`),
  UNIQUE KEY `customers_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `favorites`;
CREATE TABLE `favorites` (
  `user_id` int(10) unsigned NOT NULL,
  `favoriteable_id` int(10) unsigned NOT NULL,
  `favoriteable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`user_id`,`favoriteable_id`,`favoriteable_type`),
  KEY `favorites_favoriteable_id_favoriteable_type_index` (`favoriteable_id`,`favoriteable_type`),
  KEY `favorites_user_id_index` (`user_id`),
  KEY `deleted_at` (`deleted_at`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `favorites` (`user_id`, `favoriteable_id`, `favoriteable_type`, `created_at`, `updated_at`, `deleted_at`) VALUES
(180,	57,	'App\\Project',	'2018-11-01 01:56:04',	'2018-11-01 01:56:06',	'2018-11-01 01:56:06');

DROP TABLE IF EXISTS `galleries`;
CREATE TABLE `galleries` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `unique_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gallery_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alternative_text` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `views` bigint(20) unsigned NOT NULL DEFAULT '0',
  `downloads` int(50) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `gallery_image` (`gallery_image`),
  KEY `deleted_at` (`deleted_at`),
  KEY `updated_at` (`updated_at`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `galleries` (`id`, `user_id`, `unique_id`, `gallery_image`, `alternative_text`, `views`, `downloads`, `created_at`, `updated_at`, `deleted_at`) VALUES
(8,	182,	'5bda5dc17c974',	'Ne0F06XJxyEpEApXTYlJZrFlZuBJtKKCnqVLCqQ3.jpeg',	'kristi11 photos on Codefield',	2,	0,	'2018-11-01 01:58:27',	'2018-11-05 03:10:03',	NULL);

DROP TABLE IF EXISTS `gallery_tag`;
CREATE TABLE `gallery_tag` (
  `gallery_id` int(10) unsigned NOT NULL,
  `tag_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  KEY `gallery_tag_gallery_id_index` (`gallery_id`),
  KEY `gallery_tag_tag_id_index` (`tag_id`),
  CONSTRAINT `gallery_tag_gallery_id_foreign` FOREIGN KEY (`gallery_id`) REFERENCES `galleries` (`id`) ON DELETE CASCADE,
  CONSTRAINT `gallery_tag_tag_id_foreign` FOREIGN KEY (`tag_id`) REFERENCES `tags` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `gallery_tag` (`gallery_id`, `tag_id`, `created_at`, `updated_at`) VALUES
(8,	13,	'2018-11-01 01:58:27',	'2018-11-01 01:58:27');

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `model_has_permissions`;
CREATE TABLE `model_has_permissions` (
  `permission_id` int(10) unsigned NOT NULL,
  `model_id` int(10) unsigned NOT NULL,
  `model_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`),
  CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `model_has_roles`;
CREATE TABLE `model_has_roles` (
  `role_id` int(10) unsigned NOT NULL,
  `model_id` int(10) unsigned NOT NULL,
  `model_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`),
  CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `model_has_roles` (`role_id`, `model_id`, `model_type`) VALUES
(2,	173,	'App\\User'),
(12,	180,	'App\\User'),
(12,	182,	'App\\User');

DROP TABLE IF EXISTS `pagination_counters`;
CREATE TABLE `pagination_counters` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `projects` int(10) unsigned NOT NULL,
  `gallery` int(10) unsigned NOT NULL,
  `subscribers` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `pagination_counters` (`id`, `projects`, `gallery`, `subscribers`, `created_at`, `updated_at`) VALUES
(1,	10,	50,	25,	'2018-01-19 06:22:43',	'2018-06-20 04:13:14');

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `permissions`;
CREATE TABLE `permissions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `name` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(6,	'edit_users',	'web',	'2018-01-23 03:17:33',	'2018-01-23 03:17:33'),
(7,	'edit_projects',	'web',	'2018-01-23 03:17:42',	'2018-01-23 03:17:42'),
(9,	'edit_settings',	'web',	'2018-01-23 03:18:30',	'2018-01-23 03:18:30'),
(10,	'edit_subscribers',	'web',	'2018-01-23 03:18:37',	'2018-01-23 03:18:37'),
(14,	'edit_gallery',	'web',	'2018-01-24 09:08:03',	'2018-01-24 09:08:03'),
(17,	'access_users',	'web',	'2018-01-24 09:58:55',	'2018-01-24 09:58:55'),
(18,	'view_project_creator_from_client',	'web',	'2018-06-27 03:30:49',	'2018-06-27 03:30:49');

DROP TABLE IF EXISTS `projects`;
CREATE TABLE `projects` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dsc_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tutorial` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alternative_text` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zip_file` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `views` int(50) NOT NULL,
  `downloads` int(50) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `views` (`views`),
  KEY `downloads` (`downloads`),
  KEY `deleted_at` (`deleted_at`),
  KEY `updated_at` (`updated_at`),
  KEY `title` (`title`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `projects` (`id`, `user_id`, `title`, `dsc_title`, `body`, `tutorial`, `image`, `alternative_text`, `zip_file`, `views`, `downloads`, `created_at`, `updated_at`, `deleted_at`) VALUES
(57,	180,	'test-5bda5d2b6272d',	'test',	'<p>fff</p>',	NULL,	'KoVTR5WIc9EsOCxy7T9xVHinBafwQfRFshQ8yXAl.png',	'test project on Codefield',	'6nfubSMyCTW9tp14Mmwu2D3cpE44SvNcnXsqqefb.zip',	7,	5,	'2018-11-01 01:55:55',	'2018-11-05 03:06:54',	NULL);

DROP TABLE IF EXISTS `roles`;
CREATE TABLE `roles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `name` (`name`),
  KEY `guard_name` (`guard_name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(2,	'admin',	'web',	'2018-01-23 03:21:13',	'2018-01-23 03:21:13'),
(12,	'user',	'web',	'2018-01-25 02:21:08',	'2018-01-25 02:21:08'),
(13,	'test',	'web',	'2018-11-01 04:51:10',	'2018-11-01 04:51:10');

DROP TABLE IF EXISTS `role_has_permissions`;
CREATE TABLE `role_has_permissions` (
  `permission_id` int(10) unsigned NOT NULL,
  `role_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`role_id`),
  KEY `role_has_permissions_role_id_foreign` (`role_id`),
  CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(6,	2),
(7,	2),
(9,	2),
(10,	2),
(14,	2),
(17,	12),
(18,	12);

DROP TABLE IF EXISTS `skills`;
CREATE TABLE `skills` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `icon` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `submit_requests`;
CREATE TABLE `submit_requests` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `author_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `github_repo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `submitrequests_id_index` (`id`),
  KEY `submitrequests_user_id_index` (`user_id`),
  KEY `submitrequests_name_index` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `subscribers`;
CREATE TABLE `subscribers` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `subscribers_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `tags`;
CREATE TABLE `tags` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `tags_name_unique` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `tags` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1,	'dslr',	'2017-09-20 04:31:47',	'2017-09-22 03:16:17'),
(13,	'amateur',	'2017-09-22 03:16:56',	'2017-09-22 03:16:56'),
(27,	'b&w',	'2017-10-02 06:15:38',	'2017-10-02 06:15:38'),
(28,	'abstract',	'2017-10-02 06:26:35',	'2017-10-02 06:26:35'),
(29,	'nature',	'2017-10-02 06:27:36',	'2017-10-02 06:27:36'),
(30,	'water',	'2017-10-02 06:33:16',	'2017-10-02 06:33:16'),
(42,	'animals',	'2018-04-02 19:38:36',	'2018-04-02 19:38:36'),
(43,	'skies',	'2018-04-02 19:39:00',	'2018-04-02 19:39:00'),
(44,	'colors',	'2018-04-02 19:39:26',	'2018-04-02 19:39:26'),
(45,	'portrait',	'2018-04-02 19:42:05',	'2018-04-02 19:42:05'),
(46,	'landscape',	'2018-04-02 19:42:26',	'2018-04-02 19:42:26'),
(47,	'flowers',	'2018-04-02 19:42:39',	'2018-04-02 19:42:39'),
(48,	'clothing',	'2018-04-02 19:43:21',	'2018-04-02 19:43:21'),
(49,	'automotive',	'2018-04-02 19:43:51',	'2018-04-02 19:43:51'),
(50,	'cities',	'2018-04-02 19:44:08',	'2018-04-02 19:44:08'),
(51,	'bridges',	'2018-04-02 19:44:40',	'2018-04-02 19:44:40'),
(52,	'lights',	'2018-04-02 19:44:43',	'2018-04-02 19:44:43'),
(53,	'vintage',	'2018-04-02 19:45:58',	'2018-04-02 19:45:58'),
(54,	'brick',	'2018-04-02 19:56:08',	'2018-04-02 19:56:08'),
(55,	'art',	'2018-04-02 19:56:23',	'2018-04-02 19:56:23'),
(56,	'books',	'2018-04-02 19:59:38',	'2018-04-02 19:59:38'),
(57,	'beverage',	'2018-04-02 20:00:05',	'2018-04-02 20:00:05'),
(58,	'architecture',	'2018-04-02 20:15:05',	'2018-04-02 20:15:05'),
(59,	'office',	'2018-04-05 03:54:49',	'2018-04-05 03:54:49'),
(60,	'android',	'2018-04-20 04:56:00',	'2018-04-20 04:56:00'),
(61,	'ios',	'2018-04-20 04:56:02',	'2018-04-20 04:56:02'),
(62,	'darts',	'2018-05-07 05:47:31',	'2018-05-07 05:47:31');

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `profile` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `provider_id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_notifications` tinyint(1) NOT NULL DEFAULT '0',
  `website` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `github_profile` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `name` (`name`),
  KEY `deleted_at` (`deleted_at`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `users` (`id`, `profile`, `name`, `slug`, `email`, `provider_id`, `avatar`, `password`, `email_notifications`, `website`, `github_profile`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
(173,	'mOluB0Dj3gnaYm3uoDkypAj9lI3EXF4XDjICZp3P.jpeg',	'kristi tanellari',	'kristi-tanellari-5b2da9cdea2e9',	'tanellari@gmail.com',	'$2y$10$Czc3r.eugIiZ.ihDDFuPrec2XJTGoj/JqG8d1x00.riWb7mgYqVD2',	'$2y$10$wQ9VUf.uDOsp6azDGK8Gg.FGpAuCZIYNoQhWkRJ5ilgGWYar9v9/m',	'$2y$10$5mRmrcRzSwYBc5lL3d45t.INjRiHCZC8Ffuf9ys8Thky4/1R4H19e',	0,	NULL,	NULL,	'BH3u2HwpolCHZMxTMJeavZz0zqy7MFfCjYCXFN0tAF9nFw5naIVogkpINOiT',	'2018-06-23 06:00:46',	'2018-11-01 01:45:55',	NULL);

-- 2018-11-06 01:55:55
