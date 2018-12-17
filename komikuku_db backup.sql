-- MySQL dump 10.13  Distrib 5.7.17, for macos10.12 (x86_64)
--
-- Host: 127.0.0.1    Database: komikuku_db
-- ------------------------------------------------------
-- Server version	5.7.21

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
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(45) NOT NULL,
  `nama` varchar(45) NOT NULL,
  `photo` varchar(100) DEFAULT NULL,
  `password` varchar(60) NOT NULL,
  `user_level` enum('admin','creator','reader') NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `user_id_UNIQUE` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (7,'fauzan@gmail.com','Achmad Fauzan',NULL,'$2y$10$wUlG8O2Ut3b6ycXVL5FLuOFSJZ8JKD32/P7ptOVvDU3qnUh/6H60u','reader','2018-11-11 17:17:23','2018-12-03 06:20:18'),(8,'milda@gmail.com','Milda Apprilia','Capture.PNG','$2y$10$wUlG8O2Ut3b6ycXVL5FLuOFSJZ8JKD32/P7ptOVvDU3qnUh/6H60u','reader','2018-11-13 06:18:38','2018-12-04 06:49:29'),(9,'irfan@gmail.com','Irfan S',NULL,'$2y$10$XC/DJxI2SgAbPVuwtJ9Oe.B/L/0QHuh6Kx74bbJ3CBYtZCtsyrCKK','reader','2018-11-21 08:23:26','2018-11-21 08:23:26');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `episode`
--

DROP TABLE IF EXISTS `episode`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `episode` (
  `epsiode_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `release_date` date NOT NULL,
  `serial_id` int(11) NOT NULL,
  `image` varchar(100) NOT NULL,
  `read_count` int(11) DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`epsiode_id`),
  KEY `serial_episode_fk_idx` (`serial_id`),
  CONSTRAINT `serial_episode_fk` FOREIGN KEY (`serial_id`) REFERENCES `serial` (`serial_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `episode`
--

LOCK TABLES `episode` WRITE;
/*!40000 ALTER TABLE `episode` DISABLE KEYS */;
INSERT INTO `episode` VALUES (1,'Mulai Hari Ini Cantik','2018-11-26',1,'epscantik.jpg',9,'2018-11-26 14:27:05','2018-12-04 06:48:13'),(2,'My Oppa Is an Idol','2018-11-26',2,'epsoppa.jpg',2,'2018-11-26 14:52:00','2018-12-04 06:45:06'),(3,'My Oppa Is an Idol 2','2018-11-26',2,'epsoppa.jpg',0,'2018-12-03 07:30:27','2018-12-03 07:30:27');
/*!40000 ALTER TABLE `episode` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `serial`
--

DROP TABLE IF EXISTS `serial`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `serial` (
  `serial_id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(45) NOT NULL,
  `thumbnail` varchar(100) DEFAULT NULL,
  `genre` varchar(45) NOT NULL,
  `sinopsis` text NOT NULL,
  `dayrelease` varchar(20) DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`serial_id`),
  KEY `user_id_idx` (`user_id`),
  CONSTRAINT `user_id` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `serial`
--

LOCK TABLES `serial` WRITE;
/*!40000 ALTER TABLE `serial` DISABLE KEYS */;
INSERT INTO `serial` VALUES (1,'I Am Gangnam Beauty','10_EC8DB8EB84A4EC9DBC_ipad.jpg','Romance','Terlahir kembali dengan wajah lebih cantik!','20 November 2018',8,'2018-11-26 14:22:33','2018-12-04 01:46:06'),(2,'My Oppa is an Idol','letsplay.jpg','Romance','Dia itu...','21 November 2018',8,'2018-11-26 14:50:39','2018-12-04 01:46:06'),(3,'Tukang Nasi Goreng Muka Rata','fatality.jpg','horror','Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin fermentum elit dolor, vel consectetur nisl scelerisque vel. Integer finibus mollis cursus. Duis sollicitudin lacus nisl, at placerat nisl varius sit amet. Proin ullamcorper massa metus, ac egestas arcu gravida et. Mauris id nulla mauris. Aenean at elementum purus. Praesent porttitor ante leo, eget faucibus eros tincidunt eget. Nulla aliquam urna diam, et imperdiet tellus facilisis et. Aenean sagittis purus at urna elementum, at pulvinar arcu rutrum. Quisque lacinia volutpat augue ut tincidunt.',NULL,8,'2018-12-03 16:25:58','2018-12-04 01:46:06'),(4,'Roman Picisan','thumb_ipad.jpg','romantis','asdfasdfasdf',NULL,8,'2018-12-03 16:38:34','2018-12-04 01:46:06'),(7,'ddddd','Promotion mockup flow-2.png','comedy','ddddddd',NULL,8,'2018-12-04 06:12:23','2018-12-04 06:12:23'),(8,'asdf','WhatsApp Image 2018-03-29 at 21.35.58.jpeg','comedy','asdf',NULL,8,'2018-12-04 06:48:56','2018-12-04 06:48:56');
/*!40000 ALTER TABLE `serial` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `slide_banner`
--

DROP TABLE IF EXISTS `slide_banner`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `slide_banner` (
  `SB_id` int(11) NOT NULL AUTO_INCREMENT,
  `image_Banner` varchar(100) NOT NULL,
  `serial_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`SB_id`),
  KEY `slider_serial_fk_idx` (`serial_id`),
  CONSTRAINT `serial_slider_fk` FOREIGN KEY (`serial_id`) REFERENCES `serial` (`serial_id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `slide_banner`
--

LOCK TABLES `slide_banner` WRITE;
/*!40000 ALTER TABLE `slide_banner` DISABLE KEYS */;
INSERT INTO `slide_banner` VALUES (1,'Bigbanner_BtUs.png',1,'2018-11-26 14:31:13','2018-12-04 01:20:09'),(2,'Bigbanner_Married.png',2,'2018-11-26 14:32:55','2018-12-04 01:20:09'),(3,'Bigbanner_NMare.png',3,'2018-11-26 14:34:02','2018-12-04 01:20:09'),(4,'Bigbanner_Warung.png',4,'2018-11-26 14:35:03','2018-12-04 01:20:09');
/*!40000 ALTER TABLE `slide_banner` ENABLE KEYS */;
UNLOCK TABLES;

/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-12-04 19:11:54