-- MySQL dump 10.13  Distrib 5.6.16, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: task1
-- ------------------------------------------------------
-- Server version	5.6.16-1~exp1

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
-- Table structure for table `admin_details`
--

DROP TABLE IF EXISTS `admin_details`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admin_details` (
  `id` int(5) NOT NULL DEFAULT '0',
  `fname` varchar(20) DEFAULT NULL,
  `lname` varchar(20) DEFAULT NULL,
  `mob` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `mob` (`mob`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin_details`
--

LOCK TABLES `admin_details` WRITE;
/*!40000 ALTER TABLE `admin_details` DISABLE KEYS */;
INSERT INTO `admin_details` VALUES (100,'Chintan','Panjwani','9892222495'),(101,'Parth','Shah','9892184567');
/*!40000 ALTER TABLE `admin_details` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `employee`
--

DROP TABLE IF EXISTS `employee`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `employee` (
  `id` int(11) DEFAULT NULL,
  `name` varchar(20) DEFAULT NULL,
  `salary` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `employee`
--

LOCK TABLES `employee` WRITE;
/*!40000 ALTER TABLE `employee` DISABLE KEYS */;
INSERT INTO `employee` VALUES (1,'A',2000),(2,'B',3000),(3,'C',1000);
/*!40000 ALTER TABLE `employee` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `register_user`
--

DROP TABLE IF EXISTS `register_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `register_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(100) DEFAULT NULL,
  `lname` varchar(100) DEFAULT NULL,
  `email` varchar(30) NOT NULL DEFAULT '',
  `mob` varchar(15) NOT NULL DEFAULT '',
  `dob` date DEFAULT NULL,
  `uname` varchar(20) DEFAULT NULL,
  `pwd` varchar(50) DEFAULT NULL,
  `status` char(1) DEFAULT NULL,
  PRIMARY KEY (`id`,`email`,`mob`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `email_2` (`email`),
  UNIQUE KEY `mob` (`mob`),
  UNIQUE KEY `uname` (`uname`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `register_user`
--

LOCK TABLES `register_user` WRITE;
/*!40000 ALTER TABLE `register_user` DISABLE KEYS */;
INSERT INTO `register_user` VALUES (1,'Chintan','Panjwani','chintan.panjwani@gmail.com','9892222495','1992-10-15','chintan1510','2fa11a8ebb3883f9b67f7d986b658ba7','1'),(2,'Ankush','Deora','ankush.deora@ambab.com','9549210018','1995-12-05','ankush','d874e1a48069925f292ad3ca05834e71','0'),(3,'Parth ','Shah','parth.shah@gmail.com','9892184567','1995-05-12','parth','1630937c3d00b4f4b153599d93469963','1'),(4,'Clinton','Braganza','clinton.braganza@gmail.com','8369606636','1995-01-11','clinton','74a6fdf20393ce90b5321a05feb29182','0'),(16,'dfgdf','dfgsdgdgs','srss','12356','1111-11-11','dgchintan1510','202cb962ac59075b964b07152d234b70','0'),(20,'Chintan','Panjwani','chintan.panjwani@ambab.com','9167751696','2018-01-09','chintan','cccc6e08862742cfe6e384ac9361d55e','0'),(22,'a','B','a.b@gmail.com','9892323461','1992-11-10','qwerty','e10adc3949ba59abbe56e057f20f883e','0'),(23,'a','b','a.b@k','9765341231','1992-02-11','dsfdsfds','63347f5d946164a23faca26b78a91e1c','0'),(24,'ABC','df','sdfdsf','7654321890','2018-01-15','asdf','e10adc3949ba59abbe56e057f20f883e','0'),(26,'asd','asdas','asdas','7654328901','2018-01-09','dasdfgdg','d01fcb1b273f0bf9c5433adbc2ee5936','0');
/*!40000 ALTER TABLE `register_user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-01-25 19:13:12
