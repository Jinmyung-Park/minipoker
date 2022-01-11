-- MySQL dump 10.13  Distrib 5.7.36, for Linux (x86_64)
--
-- Host: localhost    Database: original-service
-- ------------------------------------------------------
-- Server version	5.7.36-0ubuntu0.18.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `messages`
--

DROP TABLE IF EXISTS `messages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `messages` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) unsigned NOT NULL,
  `user_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_stage` bigint(20) unsigned NOT NULL,
  `user_score` bigint(20) unsigned NOT NULL,
  `content` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `messages_user_id_foreign` (`user_id`),
  CONSTRAINT `messages_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `messages`
--

LOCK TABLES `messages` WRITE;
/*!40000 ALTER TABLE `messages` DISABLE KEYS */;
INSERT INTO `messages` VALUES (1,2,'ckaskdhs',1,8,'ㄷ','2022-01-07 15:03:24','2022-01-07 15:03:24'),(2,2,'ckaskdhs',1,0,'ㄷ','2022-01-07 15:05:08','2022-01-07 15:05:08'),(3,2,'ckaskdhs',1,0,'ㄷ','2022-01-07 15:05:34','2022-01-07 15:05:34'),(4,2,'ckaskdhs',1,0,'ㄷ','2022-01-07 15:05:50','2022-01-07 15:05:50'),(5,2,'ckaskdhs',1,10,'123213','2022-01-07 15:06:02','2022-01-07 15:06:02'),(6,1,'park',1,8,'oh','2022-01-07 15:16:20','2022-01-07 15:16:20');
/*!40000 ALTER TABLE `messages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (22,'2022_01_04_115143_create_stage_score',1),(37,'2014_10_12_000000_create_users_table',2),(38,'2014_10_12_100000_create_password_resets_table',2),(39,'2019_08_19_000000_create_failed_jobs_table',2),(40,'2021_12_24_095702_create_stagechecks_table',2),(41,'2022_01_04_115143_create_stageScore',2),(42,'2022_01_04_150926_add_stageclear_to_stagechecks_table',2),(43,'2022_01_04_174943_create_messages_table',2);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `stage_scores`
--

DROP TABLE IF EXISTS `stage_scores`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `stage_scores` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `stage` bigint(20) unsigned NOT NULL,
  `clearScore` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `stage_scores`
--

LOCK TABLES `stage_scores` WRITE;
/*!40000 ALTER TABLE `stage_scores` DISABLE KEYS */;
INSERT INTO `stage_scores` VALUES (1,1,15,'2022-01-07 14:40:53','2022-01-07 14:40:53'),(2,2,30,'2022-01-07 14:40:53','2022-01-07 14:40:53'),(3,3,50,'2022-01-07 14:40:53','2022-01-07 14:40:53'),(4,4,90,'2022-01-07 14:40:53','2022-01-07 14:40:53'),(5,5,150,'2022-01-07 14:40:53','2022-01-07 14:40:53'),(6,6,180,'2022-01-07 14:40:53','2022-01-07 14:40:53'),(7,7,200,'2022-01-07 14:40:53','2022-01-07 14:40:53'),(8,8,250,'2022-01-07 14:40:53','2022-01-07 14:40:53'),(9,9,300,'2022-01-07 14:40:53','2022-01-07 14:40:53'),(10,10,360,'2022-01-07 14:40:53','2022-01-07 14:40:53'),(11,11,380,'2022-01-07 14:40:53','2022-01-07 14:40:53'),(12,12,400,'2022-01-07 14:40:53','2022-01-07 14:40:53'),(13,13,450,'2022-01-07 14:40:53','2022-01-07 14:40:53'),(14,14,470,'2022-01-07 14:40:53','2022-01-07 14:40:53'),(15,15,520,'2022-01-07 14:40:53','2022-01-07 14:40:53'),(16,16,550,'2022-01-07 14:40:53','2022-01-07 14:40:53'),(17,17,580,'2022-01-07 14:40:53','2022-01-07 14:40:53'),(18,18,610,'2022-01-07 14:40:53','2022-01-07 14:40:53'),(19,19,630,'2022-01-07 14:40:53','2022-01-07 14:40:53'),(20,20,700,'2022-01-07 14:40:53','2022-01-07 14:40:53'),(21,21,730,'2022-01-07 14:40:53','2022-01-07 14:40:53'),(22,22,750,'2022-01-07 14:40:53','2022-01-07 14:40:53'),(23,23,770,'2022-01-07 14:40:53','2022-01-07 14:40:53'),(24,24,800,'2022-01-07 14:40:53','2022-01-07 14:40:53'),(25,25,820,'2022-01-07 14:40:53','2022-01-07 14:40:53'),(26,26,850,'2022-01-07 14:40:53','2022-01-07 14:40:53'),(27,27,880,'2022-01-07 14:40:53','2022-01-07 14:40:53'),(28,28,900,'2022-01-07 14:40:53','2022-01-07 14:40:53'),(29,29,920,'2022-01-07 14:40:53','2022-01-07 14:40:53'),(30,30,1000,'2022-01-07 14:40:53','2022-01-07 14:40:53'),(31,31,1030,'2022-01-07 14:40:53','2022-01-07 14:40:53'),(32,32,1060,'2022-01-07 14:40:53','2022-01-07 14:40:53'),(33,33,1080,'2022-01-07 14:40:53','2022-01-07 14:40:53'),(34,34,1120,'2022-01-07 14:40:53','2022-01-07 14:40:53'),(35,35,1200,'2022-01-07 14:40:53','2022-01-07 14:40:53'),(36,36,1240,'2022-01-07 14:40:53','2022-01-07 14:40:53'),(37,37,1280,'2022-01-07 14:40:53','2022-01-07 14:40:53'),(38,38,1320,'2022-01-07 14:40:53','2022-01-07 14:40:53'),(39,39,1360,'2022-01-07 14:40:53','2022-01-07 14:40:53'),(40,40,1500,'2022-01-07 14:40:53','2022-01-07 14:40:53'),(41,41,9999,'2022-01-07 14:40:53','2022-01-07 14:40:53');
/*!40000 ALTER TABLE `stage_scores` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `stagechecks`
--

DROP TABLE IF EXISTS `stagechecks`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `stagechecks` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint(20) unsigned NOT NULL,
  `cardOpenCheck` bigint(20) unsigned NOT NULL,
  `cardChange1` bigint(20) unsigned NOT NULL,
  `cardChange2` bigint(20) unsigned NOT NULL,
  `cardChange3` bigint(20) unsigned NOT NULL,
  `cardChange4` bigint(20) unsigned NOT NULL,
  `cardChange5` bigint(20) unsigned NOT NULL,
  `cardDetermine` bigint(20) unsigned NOT NULL,
  `stage` bigint(20) unsigned NOT NULL,
  `score` bigint(20) unsigned NOT NULL,
  `highscore` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `stageClear` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `stagechecks_user_id_foreign` (`user_id`),
  CONSTRAINT `stagechecks_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `stagechecks`
--

LOCK TABLES `stagechecks` WRITE;
/*!40000 ALTER TABLE `stagechecks` DISABLE KEYS */;
INSERT INTO `stagechecks` VALUES (1,1,0,0,0,0,0,0,0,1,0,10,'2022-01-07 14:41:08','2022-01-11 14:12:18',0),(2,2,0,0,0,0,0,0,0,1,0,10,'2022-01-07 15:00:35','2022-01-07 15:15:14',0);
/*!40000 ALTER TABLE `stagechecks` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'park','ckaskdhs@naver.com',NULL,'$2y$10$imngzO3P54Ekxq3dCjG1xu93Zb4FBscUDIEOen4t/w/WScg7kUriu',NULL,'2022-01-07 14:41:08','2022-01-07 14:41:08'),(2,'ckaskdhs','ckaskdhs@naver.com1',NULL,'$2y$10$uWaUNSg43FHj58hWcYbLc.ey31hFIiWXiJibRipS04Qz.GA8IfPiq',NULL,'2022-01-07 15:00:35','2022-01-07 15:00:35');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-01-11  6:09:01
