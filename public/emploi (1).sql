-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : jeu. 30 mars 2023 à 14:18
-- Version du serveur : 5.7.36
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `emploi`
--

-- --------------------------------------------------------

--
-- Structure de la table `companies`
--

DROP TABLE IF EXISTS `companies`;
CREATE TABLE IF NOT EXISTS `companies` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nomCompany` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adresse` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `domaine` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nomPoste` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nbrPoste` int(11) NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `ville` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `companies_user_id_foreign` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `companies`
--

INSERT INTO `companies` (`id`, `nomCompany`, `adresse`, `domaine`, `nomPoste`, `nbrPoste`, `description`, `logo`, `user_id`, `remember_token`, `created_at`, `updated_at`, `ville`) VALUES
(4, 'Electro-services', 'marrakech v', 'Services', 'Technicien', 4, 'تطوير الويب ‏ هو مصطلح واسع للاعمال المشاركة في تطوير المواقع الالكترونية للشبكة العنكبوتية العالمية للانترنت أو للإنترانت, تطوير الويب يتراوح ما بين تطوير صفحة ثابتة بسيطة بنص عادي إلى تطبيقات الإنترنت المعقدة والأعمال التجارية الإلكترونية وخدمات الشبكة الاجتماعية.', '1680098309.jpg', 1, NULL, '2023-03-29 13:58:29', '2023-03-29 13:58:29', 'Agadir'),
(3, 'company 2', 'casablanca rue-2 massira', 'Digital', 'Developper mobile', 22, 'تطوير الويب ‏ هو مصطلح واسع للاعمال المشاركة في تطوير المواقع الالكترونية للشبكة العنكبوتية العالمية للانترنت أو للإنترانت, تطوير الويب يتراوح ما بين تطوير صفحة ثابتة بسيطة بنص عادي إلى تطبيقات الإنترنت المعقدة والأعمال التجارية الإلكترونية وخدمات الشبكة الاجتماعية.', '1680098015.jpg', 2, NULL, '2023-03-29 13:53:35', '2023-03-29 13:53:35', 'Laâyoune'),
(5, 'casa event', 'marrakech', 'Services', 'developper mobile', 3, 'تطوير الويب ‏ هو مصطلح واسع للاعمال المشاركة في تطوير المواقع الالكترونية للشبكة العنكبوتية العالمية للانترنت أو للإنترانت, تطوير الويب يتراوح ما بين تطوير صفحة ثابتة بسيطة بنص عادي إلى تطبيقات الإنترنت المعقدة والأعمال التجارية الإلكترونية وخدمات الشبكة الاجتماعية', '1680180694.jpg', 2, NULL, '2023-03-30 12:51:34', '2023-03-30 12:51:34', 'Ouarzazate');

-- --------------------------------------------------------

--
-- Structure de la table `condidats`
--

DROP TABLE IF EXISTS `condidats`;
CREATE TABLE IF NOT EXISTS `condidats` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `specialite` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `competence` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `domaine` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cv` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `condidats_user_id_foreign` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `condidats`
--

INSERT INTO `condidats` (`id`, `specialite`, `competence`, `logo`, `domaine`, `cv`, `user_id`, `remember_token`, `created_at`, `updated_at`) VALUES
(3, 'developpeur web', 'wwwwwwwwwwwww\r\nqqqqqqqqqqq', '1680097733.jpg', 'l\'informatique', '1680097733.pdf', 4, NULL, '2023-03-29 13:48:53', '2023-03-29 13:48:53');

-- --------------------------------------------------------

--
-- Structure de la table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2023_03_08_103418_add_col_type', 1),
(7, '2023_03_10_130511_create_companies_table', 1),
(8, '2023_03_16_101921_create_condidats_table', 1),
(9, '2023_03_21_143035_create_offre_condidats_table', 1),
(10, '2023_03_26_145700_add_ville_to_companies_table', 1);

-- --------------------------------------------------------

--
-- Structure de la table `offre_condidats`
--

DROP TABLE IF EXISTS `offre_condidats`;
CREATE TABLE IF NOT EXISTS `offre_condidats` (
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `company_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`user_id`,`company_id`),
  KEY `offre_condidats_company_id_foreign` (`company_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `offre_condidats`
--

INSERT INTO `offre_condidats` (`user_id`, `company_id`, `created_at`, `updated_at`) VALUES
(3, 1, '2023-03-29 10:54:56', '2023-03-29 10:54:56'),
(4, 2, '2023-03-29 12:13:13', '2023-03-29 12:13:13'),
(4, 1, '2023-03-29 12:13:19', '2023-03-29 12:13:19'),
(3, 3, '2023-03-29 13:59:57', '2023-03-29 13:59:57'),
(3, 4, '2023-03-30 12:47:25', '2023-03-30 12:47:25');

-- --------------------------------------------------------

--
-- Structure de la table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `password_reset_tokens`
--

DROP TABLE IF EXISTS `password_reset_tokens`;
CREATE TABLE IF NOT EXISTS `password_reset_tokens` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ville` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tel` int(10) UNSIGNED NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `type` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`, `ville`, `tel`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `type`) VALUES
(1, 'company 1', 'Agadir', 987654321, 'company1@email.com', NULL, '$2y$10$MTTd2aFQ90f6RZ62byrrc.P1PmyT8SAt41eWJjqIDp5dl/VMJ0v9y', NULL, '2023-03-29 10:42:37', '2023-03-29 10:42:37', 1),
(2, 'company 2', 'marrakech', 987654321, 'company2@email.com', NULL, '$2y$10$4Uv5WeVAd2hxZZML6n125.nLviVsUU1h/LmwaRQKtuN7X.JGjaOTq', NULL, '2023-03-29 10:45:03', '2023-03-29 10:45:03', 1),
(3, 'user 1', 'Rabat', 987654321, 'user1@user.com', NULL, '$2y$10$EGXP7I9Ki9ly24V6f/Elg.VetcbwAXCF.dL7v9SIsbpoW12Sro/eS', NULL, '2023-03-29 10:49:55', '2023-03-29 10:49:55', 0),
(4, 'user 2', 'Agadir', 987654321, 'user2@user.com', NULL, '$2y$10$soKKlbPS4x9kEirNxGYHiet2P9e5.n2BjU.TVbjmHTNrW.Wv1NrI.', NULL, '2023-03-29 12:12:58', '2023-03-29 12:12:58', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
