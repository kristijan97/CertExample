-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.6.5-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             11.3.0.6295
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for sp_15_kristijan
CREATE DATABASE IF NOT EXISTS `sp_15_kristijan` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `sp_15_kristijan`;

-- Dumping structure for table sp_15_kristijan.lets_encrypt_certificates
CREATE TABLE IF NOT EXISTS `lets_encrypt_certificates` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `domain` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_renewed_at` timestamp NULL DEFAULT NULL,
  `created` tinyint(1) NOT NULL DEFAULT 0,
  `fullchain_path` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `chain_path` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cert_path` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `privkey_path` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table sp_15_kristijan.lets_encrypt_certificates: ~1 rows (approximately)
/*!40000 ALTER TABLE `lets_encrypt_certificates` DISABLE KEYS */;
INSERT INTO `lets_encrypt_certificates` (`id`, `created_at`, `updated_at`, `deleted_at`, `domain`, `last_renewed_at`, `created`, `fullchain_path`, `chain_path`, `cert_path`, `privkey_path`) VALUES
	(1, '2022-01-11 11:24:02', '2022-03-14 00:00:24', NULL, 'kristijan.example-app.test', '2022-03-14 00:00:24', 1, 'letsencrypt/certificates/kristijan.staging.ampstream.de/fullchain.pem', 'letsencrypt/certificates/kristijan.staging.ampstream.de/chain.pem', 'letsencrypt/certificates/kristijan.example-app.test/cert.pem', 'letsencrypt/certificates/kristijan.example-app.test/privkey.pem');
/*!40000 ALTER TABLE `lets_encrypt_certificates` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
