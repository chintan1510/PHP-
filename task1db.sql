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
  `photo` varchar(30) DEFAULT NULL,
  `uname` varchar(20) DEFAULT NULL,
  `pwd` varchar(50) DEFAULT NULL,
  `status` char(1) DEFAULT NULL,
  PRIMARY KEY (`id`,`email`,`mob`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `email_2` (`email`),
  UNIQUE KEY `mob` (`mob`),
  UNIQUE KEY `uname` (`uname`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `register_user`
--

LOCK TABLES `register_user` WRITE;
/*!40000 ALTER TABLE `register_user` DISABLE KEYS */;
INSERT INTO `register_user` VALUES (1,'Chintan','Panjwani','chintan.panjwani@gmail.com','9892222495','1992-10-15',NULL,'chintan1510','2fa11a8ebb3883f9b67f7d986b658ba7','1'),(2,'Ankush','Deora','ankush.deora@ambab.com','9549210018','1995-12-05',NULL,'ankush','d874e1a48069925f292ad3ca05834e71','0'),(3,'Parth ','Shah','parth.shah@gmail.com','9892184567','1995-05-12',NULL,'parth','1630937c3d00b4f4b153599d93469963','1'),(4,'Clinton','Braganza','clinton.braganza@gmail.com','8369606636','1995-01-11',NULL,'clinton','74a6fdf20393ce90b5321a05feb29182','0'),(16,'dfgdf','dfgsdgdgs','srss','12356','1111-11-11',NULL,'dgchintan1510','202cb962ac59075b964b07152d234b70','0'),(20,'Chintan','Panjwani','chintan.panjwani@ambab.com','9167751696','2018-01-09',NULL,'chintan','cccc6e08862742cfe6e384ac9361d55e','0'),(22,'a','B','a.b@gmail.com','9892323461','1992-11-10',NULL,'qwerty','e10adc3949ba59abbe56e057f20f883e','0'),(23,'a','b','a.b@k','9765341231','1992-02-11',NULL,'dsfdsfds','63347f5d946164a23faca26b78a91e1c','0'),(24,'ABC','df','sdfdsf','7654321890','2018-01-15',NULL,'asdf','e10adc3949ba59abbe56e057f20f883e','0'),(26,'asd','asdas','asdas','7654328901','2018-01-09',NULL,'dasdfgdg','d01fcb1b273f0bf9c5433adbc2ee5936','0'),(27,'ABC','PQR','abc.pqr@gmail.com','9765412345','2018-01-16','default.png','abc','900150983cd24fb0d6963f7d28e17f72','0'),(28,'XYZ','DEF','xyz.def@gmail.com','9854612345','2018-01-09','php_logo.jpeg','xyz','d16fb36f0911f878998c136191af705e','0'),(29,'a','a','a.a@gmail.com','8912345632','2018-01-18','project_config.png','a','0cc175b9c0f1b6a831c399e269772661','0'),(30,'s','s','s.s@gmail.com','7856434521','2018-01-12','php_logo.jpeg','s','03c7c0ace395d80182db07ae2c30f034','0'),(31,'d','d','d','9876543125','2018-01-25','project_config.png','d','8277e0910d750195b448797616e091ad','0'),(32,'c','c','cfdv','7986512345','2018-01-09','project_config.png','c','4a8a08f09d37b73795649038408b5f33','0'),(33,'x','s','adff','7890654321','0000-00-00','','Z','21c2e59531c8710156d34a3c30ac81d5','0'),(35,'John','Doe','john.doe@gmail.com','8976523419','2018-01-17','php_logo.jpeg','john','2829fc16ad8ca5a79da932f910afad1c','0');
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

-- Dump completed on 2018-01-29 19:54:45
