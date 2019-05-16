CREATE DATABASE  IF NOT EXISTS `hospital` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `hospital`;
-- MySQL dump 10.13  Distrib 5.5.16, for Win32 (x86)
--
-- Host: localhost    Database: hospital
-- ------------------------------------------------------
-- Server version	5.5.23

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
-- Table structure for table `employee`
--

DROP TABLE IF EXISTS `employee`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `employee` (
  `u_user` varchar(100) NOT NULL,
  `u_pass` varchar(100) DEFAULT 'krajnishcb947790578837914318d6db6f2f9cde1378056a325b3e54854caae9c257efcc',
  `u_access` char(1) NOT NULL DEFAULT '1',
  `u_name` varchar(100) DEFAULT NULL,
  `u_mail` varchar(128) DEFAULT NULL,
  `u_phone` bigint(10) unsigned DEFAULT NULL,
  `u_address` varchar(1000) DEFAULT NULL,
  `u_city` varchar(1000) DEFAULT NULL,
  `u_country` varchar(100) DEFAULT NULL,
  `u_imgurl` varchar(100) DEFAULT NULL,
  `u_ondate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `u_birth` date DEFAULT NULL,
  `u_gender` varchar(7) DEFAULT NULL,
  `u_state` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`u_user`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `employee`
--

LOCK TABLES `employee` WRITE;
/*!40000 ALTER TABLE `employee` DISABLE KEYS */;
INSERT INTO `employee` VALUES ('052809','krajnishcb947790578837914318d6db6f2f9cde1378056a325b3e54854caae9c257efcc','1','RAJNISH KUMAR SINGH','rksjnk@gmail.com',9779328905,'Model Town Phagwara','PHAGWARA','India','052809.jpg','2015-07-21 15:28:09','1980-07-10','MALE','Punjab');
/*!40000 ALTER TABLE `employee` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-07-22 23:14:49
