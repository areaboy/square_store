-- MariaDB dump 10.19  Distrib 10.4.19-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: square_store
-- ------------------------------------------------------
-- Server version	10.4.19-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `payments_status`
--

DROP TABLE IF EXISTS `payments_status`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `payments_status` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `invoice_paid` varchar(30) DEFAULT NULL,
  `invoice_unpaid` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=495 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `payments_status`
--

LOCK TABLES `payments_status` WRITE;
/*!40000 ALTER TABLE `payments_status` DISABLE KEYS */;
INSERT INTO `payments_status` VALUES (474,'34','p'),(475,'p','21'),(476,'21','p'),(477,'p','300'),(478,'p','21'),(479,'p','21'),(480,'p','22222'),(481,'p','22222'),(482,'p','78'),(483,'p','300'),(484,'p','10'),(485,'101','p'),(486,'p','10'),(487,'p','300'),(488,'p','11'),(489,'p','10'),(490,'10','p'),(491,'p','300'),(492,'p','300'),(493,'p','300'),(494,'p','300');
/*!40000 ALTER TABLE `payments_status` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `payments_status2`
--

DROP TABLE IF EXISTS `payments_status2`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `payments_status2` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `card` varchar(30) DEFAULT NULL,
  `cash` varchar(30) DEFAULT NULL,
  `gift_card` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=372 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `payments_status2`
--

LOCK TABLES `payments_status2` WRITE;
/*!40000 ALTER TABLE `payments_status2` DISABLE KEYS */;
INSERT INTO `payments_status2` VALUES (346,'21','p',NULL),(347,'34','p',NULL),(348,'p','34',NULL),(349,'34','p',NULL),(350,'p','21',NULL),(351,'p','21',NULL),(352,'21','p',NULL),(353,'p','21',NULL),(354,'p','34',NULL),(355,'21','p',NULL),(356,'p','21',NULL),(357,'p','34',NULL),(358,'22222','p',NULL),(359,'p','22222',NULL),(360,'22222','p',NULL),(361,'p','22222',NULL),(362,'22222','p',NULL),(363,'p','22222',NULL),(364,'p','22222',NULL),(365,'201','p',NULL),(366,'p','20',NULL),(367,'45','p',NULL),(368,'205','p',NULL),(369,'101','p',NULL),(370,'10','p',NULL),(371,'p','0',NULL);
/*!40000 ALTER TABLE `payments_status2` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `store`
--

DROP TABLE IF EXISTS `store`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `store` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `timing` varchar(100) DEFAULT NULL,
  `post_image` text DEFAULT NULL,
  `price` varchar(100) DEFAULT NULL,
  `currency` varchar(100) DEFAULT NULL,
  `fullname` varchar(100) DEFAULT NULL,
  `photo` varchar(100) DEFAULT NULL,
  `userid` varchar(100) DEFAULT NULL,
  `data` varchar(100) DEFAULT NULL,
  `identity` varchar(100) DEFAULT NULL,
  `comments` varchar(20) DEFAULT NULL,
  `saler_page` text DEFAULT NULL,
  `saler_accounts` text DEFAULT NULL,
  `video_url` text DEFAULT NULL,
  `video_type` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `store`
--

LOCK TABLES `store` WRITE;
/*!40000 ALTER TABLE `store` DISABLE KEYS */;
INSERT INTO `store` VALUES (27,'tit','desc','1685960579','rock.png','21','USD','Esedo Fredrick',NULL,'647d3be6399fd168592893458e617e39ff9aa710a83eb4bdee2420b',NULL,NULL,'0',NULL,NULL,'Qmk0GW_vsAU','youtube'),(28,'tit2','tiktok','1685961333','flower.png','34','USD','Esedo Fredrick',NULL,'647d3be6399fd168592893458e617e39ff9aa710a83eb4bdee2420b',NULL,NULL,'0',NULL,NULL,'7240918351579516165','tiktok');
/*!40000 ALTER TABLE `store` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `store_fetch`
--

DROP TABLE IF EXISTS `store_fetch`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `store_fetch` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `timing` varchar(100) DEFAULT NULL,
  `post_image` text DEFAULT NULL,
  `price` varchar(100) DEFAULT NULL,
  `currency` varchar(100) DEFAULT NULL,
  `fullname` varchar(100) DEFAULT NULL,
  `photo` varchar(100) DEFAULT NULL,
  `userid` varchar(100) DEFAULT NULL,
  `data` varchar(100) DEFAULT NULL,
  `identity` varchar(100) DEFAULT NULL,
  `customer_id` varchar(200) DEFAULT NULL,
  `saler_page` text DEFAULT NULL,
  `saler_accounts` text DEFAULT NULL,
  `video_url` text DEFAULT NULL,
  `video_type` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=61 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `store_fetch`
--

LOCK TABLES `store_fetch` WRITE;
/*!40000 ALTER TABLE `store_fetch` DISABLE KEYS */;
INSERT INTO `store_fetch` VALUES (41,'tit2','tiktok','1685962660','post','34','USD','Esedo Fredrick',NULL,'647d3be6399fd168592893458e617e39ff9aa710a83eb4bdee2420b','esedofredrick@gmail.com',NULL,'VNG37KX348Q66K2E0962YV2ET4',NULL,NULL,'7240918351579516165','tiktok'),(42,'tit','desc','1685962813','post','21','USD','Esedo Fredrick',NULL,'647d3be6399fd168592893458e617e39ff9aa710a83eb4bdee2420b','esedofredrick@gmail.com',NULL,'VNG37KX348Q66K2E0962YV2ET4',NULL,NULL,'Qmk0GW_vsAU','youtube'),(43,'tit','desc','1685962955','post','21','USD','Esedo Fredrick',NULL,'647d3be6399fd168592893458e617e39ff9aa710a83eb4bdee2420b','esedofredrick@gmail.com',NULL,'VNG37KX348Q66K2E0962YV2ET4',NULL,NULL,'Qmk0GW_vsAU','youtube'),(44,'tit','desc','1685963229','rock.png','21','USD','Esedo Fredrick',NULL,'647d3be6399fd168592893458e617e39ff9aa710a83eb4bdee2420b','esedofredrick@gmail.com',NULL,'VNG37KX348Q66K2E0962YV2ET4',NULL,NULL,'Qmk0GW_vsAU','youtube'),(45,'tit2','tiktok','1685963900','flower.png','34','USD','Esedo Fredrick',NULL,'647d3be6399fd168592893458e617e39ff9aa710a83eb4bdee2420b','esedofredrick@gmail.com',NULL,'VNG37KX348Q66K2E0962YV2ET4',NULL,NULL,'7240918351579516165','tiktok'),(46,'tit2','tiktok','1685963942','flower.png','34','USD','Esedo Fredrick',NULL,'647d3be6399fd168592893458e617e39ff9aa710a83eb4bdee2420b','esedofredrick@gmail.com',NULL,'VNG37KX348Q66K2E0962YV2ET4',NULL,NULL,'7240918351579516165','tiktok'),(47,'tit2','tiktok','1685964137','flower.png','34','USD','Esedo Fredrick',NULL,'647d3be6399fd168592893458e617e39ff9aa710a83eb4bdee2420b','esedofredrick@gmail.com',NULL,'VNG37KX348Q66K2E0962YV2ET4',NULL,NULL,'7240918351579516165','tiktok'),(48,'tit','desc','1685964235','rock.png','21','USD','Esedo Fredrick',NULL,'647d3be6399fd168592893458e617e39ff9aa710a83eb4bdee2420b','esedofredrick@gmail.com',NULL,'VNG37KX348Q66K2E0962YV2ET4',NULL,NULL,'Qmk0GW_vsAU','youtube'),(49,'tit','desc','1685968241','rock.png','21','USD','Esedo Fredrick',NULL,'647d3be6399fd168592893458e617e39ff9aa710a83eb4bdee2420b','esedofredrick@gmail.com',NULL,'VNG37KX348Q66K2E0962YV2ET4',NULL,NULL,'Qmk0GW_vsAU','youtube'),(50,'tit','desc','1685968893','rock.png','21','USD','Esedo Fredrick',NULL,'647d3be6399fd168592893458e617e39ff9aa710a83eb4bdee2420b','esedofredrick@gmail.com',NULL,'VNG37KX348Q66K2E0962YV2ET4',NULL,NULL,'Qmk0GW_vsAU','youtube'),(51,'tit2','tiktok','1685969025','flower.png','34','USD','Esedo Fredrick',NULL,'647d3be6399fd168592893458e617e39ff9aa710a83eb4bdee2420b','esedofredrick@gmail.com',NULL,'VNG37KX348Q66K2E0962YV2ET4',NULL,NULL,'7240918351579516165','tiktok'),(52,'tit','desc','1685969421','rock.png','21','USD','Esedo Fredrick',NULL,'647d3be6399fd168592893458e617e39ff9aa710a83eb4bdee2420b','esedofredrick@gmail.com',NULL,'VNG37KX348Q66K2E0962YV2ET4',NULL,NULL,'Qmk0GW_vsAU','youtube'),(53,'tit','desc','1685969875','rock.png','21','USD','Esedo Fredrick',NULL,'647d3be6399fd168592893458e617e39ff9aa710a83eb4bdee2420b','esedofredrick@gmail.com',NULL,'VNG37KX348Q66K2E0962YV2ET4',NULL,NULL,'Qmk0GW_vsAU','youtube'),(54,'tit','desc','1685971241','rock.png','21','USD','Esedo Fredrick',NULL,'647d3be6399fd168592893458e617e39ff9aa710a83eb4bdee2420b','esedofredrick@gmail.com',NULL,'VNG37KX348Q66K2E0962YV2ET4',NULL,NULL,'Qmk0GW_vsAU','youtube'),(55,'tit2','tiktok','1685972639','flower.png','34','USD','',NULL,'','',NULL,NULL,NULL,NULL,'7240918351579516165','tiktok'),(56,'tit2','tiktok','1685972870','flower.png','34','USD','Esedo Fredrick',NULL,'647d3be6399fd168592893458e617e39ff9aa710a83eb4bdee2420b','esedofredrick@gmail.com',NULL,'VNG37KX348Q66K2E0962YV2ET4',NULL,NULL,'7240918351579516165','tiktok'),(57,'tit2','tiktok','1685973135','flower.png','34','USD','Esedo Fredrick',NULL,'647d3be6399fd168592893458e617e39ff9aa710a83eb4bdee2420b','esedofredrick@gmail.com',NULL,'VNG37KX348Q66K2E0962YV2ET4',NULL,NULL,'7240918351579516165','tiktok'),(58,'tit2','tiktok','1685973235','flower.png','34','USD','Esedo Fredrick',NULL,'647d3be6399fd168592893458e617e39ff9aa710a83eb4bdee2420b','esedofredrick@gmail.com',NULL,'VNG37KX348Q66K2E0962YV2ET4',NULL,NULL,'7240918351579516165','tiktok'),(59,'tit','desc','1685981970','rock.png','21','USD','Esedo Fredrick',NULL,'647d3be6399fd168592893458e617e39ff9aa710a83eb4bdee2420b','esedofredrick@gmail.com',NULL,'VNG37KX348Q66K2E0962YV2ET4',NULL,NULL,'Qmk0GW_vsAU','youtube'),(60,'tit2','tiktok','1685982165','flower.png','34','USD','Esedo Fredrick',NULL,'647d3be6399fd168592893458e617e39ff9aa710a83eb4bdee2420b','esedofredrick@gmail.com',NULL,'VNG37KX348Q66K2E0962YV2ET4',NULL,NULL,'7240918351579516165','tiktok');
/*!40000 ALTER TABLE `store_fetch` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(200) DEFAULT NULL,
  `fullname` varchar(200) DEFAULT NULL,
  `given_name` varchar(200) DEFAULT NULL,
  `phone_number` varchar(200) DEFAULT NULL,
  `family_name` varchar(200) DEFAULT NULL,
  `customer_id` varchar(300) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL,
  `created_time` varchar(200) DEFAULT NULL,
  `timing` varchar(200) DEFAULT NULL,
  `status` varchar(30) DEFAULT NULL,
  `data` varchar(30) DEFAULT NULL,
  `code` varchar(30) DEFAULT NULL,
  `photo` varchar(300) DEFAULT NULL,
  `userid` varchar(300) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (14,'esedofredrick@gmail.com','Esedo Fredrick','Fredrick','08064242019','Esedo','VNG37KX348Q66K2E0962YV2ET4','$2y$04$EjOaCVxy3Bj0r.OdLO1jpenTuNCmX9OBMCNsGn9CY19fe5y/tYI6q','Sunday, June 4, 2023, 9:35 pm','1685928934','customer',NULL,NULL,'user.png','647d3be6399fd168592893458e617e39ff9aa710a83eb4bdee2420b');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'square_store'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-06-05 19:18:48
