-- MySQL dump 10.16  Distrib 10.1.32-MariaDB, for Win32 (AMD64)
--
-- Host: localhost    Database: project
-- ------------------------------------------------------
-- Server version	10.1.32-MariaDB

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
-- Table structure for table `manager`
--

DROP TABLE IF EXISTS `manager`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `manager` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(75) NOT NULL,
  `email` varchar(70) NOT NULL,
  `pwd` varchar(40) NOT NULL,
  `day` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `manager`
--

LOCK TABLES `manager` WRITE;
/*!40000 ALTER TABLE `manager` DISABLE KEYS */;
/*!40000 ALTER TABLE `manager` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `storekeeper`
--

DROP TABLE IF EXISTS `storekeeper`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `storekeeper` (
  `id` int(30) NOT NULL AUTO_INCREMENT,
  `name` varchar(65) NOT NULL,
  `email` varchar(60) NOT NULL,
  `pwd` varchar(45) NOT NULL,
  `day` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `storekeeper`
--

LOCK TABLES `storekeeper` WRITE;
/*!40000 ALTER TABLE `storekeeper` DISABLE KEYS */;
INSERT INTO `storekeeper` VALUES (1,'stela','sty@gmail.com','$2y$10$U/.twdrNXUvnW7yRYU7clOwH5ujQy0oyNZxTSB','0000-00-00'),(2,'claris','cla@gmail.com','$2y$10$/BcXa/GjT9N57WW8PAI2/.oRZAx/F67s4KwLKg','0000-00-00');
/*!40000 ALTER TABLE `storekeeper` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `student`
--

DROP TABLE IF EXISTS `student`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `student` (
  `id` int(30) NOT NULL AUTO_INCREMENT,
  `name` varchar(55) NOT NULL,
  `regNo/workID` varchar(40) NOT NULL,
  `email` varchar(60) NOT NULL,
  `pwd` varchar(45) NOT NULL,
  `day` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `student`
--

LOCK TABLES `student` WRITE;
/*!40000 ALTER TABLE `student` DISABLE KEYS */;
INSERT INTO `student` VALUES (1,'brendah','','br@gmail.com','$2y$10$Rh2scdcBTM.oUfYgmCKAO.Jt1gaeXYQSRUGg85','0000-00-00'),(2,'alex','','al@gmail.com','$2y$10$/CQpX8pWq6cY6usQkqGIKOsUnXNr6ou6nbUFvB','0000-00-00');
/*!40000 ALTER TABLE `student` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `usr_nm` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `pwd` varchar(100) NOT NULL,
  `day` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'asd','vb@gmail.com','$2y$10$JKyquWfmxGf/GT1kMU5U2u9Fm8i6B.CenouZm81JKqjhMg.29Uipa','2018-06-25'),(2,'bnm','bnm@gmail.com','$2y$10$Z/iW/VILf1t7j/GcQah7LuFEw2wp9.3mqEIQM087hmrjpsipR48fu','2018-06-25'),(3,'ty','ty@gmail.com','$2y$10$xOLi3ZoR95H.p7hNWOeLTeS/jviwE387HkosDQfQhyX.T63B5xbzO','0000-00-00'),(4,'jo','jo@gmail.com','$2y$10$hxSKLVxCiYmzF91vKJbuRO7gCzYdGk1o8m.ufxSddnPP7fgakvx8y','0000-00-00'),(5,'hj','hj@gmail.com','$2y$10$mTUDpJhdshKUGFhIiwmGSesPDKR7Esq4nQefm1c07bEWcccy7WBxy','0000-00-00'),(6,'jos','jos@gmail.com','$2y$10$duJknSa1SQCjsXmI2Xim0OznRhv5HYdEVVuwlFHoMzgejf7I4b9pS','0000-00-00'),(7,'cla','cla@gmail.com','$2y$10$vkj0JcUvaviSManUAnXagOnbpt4Z4CDqoKBfsYJozABjqEf01OFmy','0000-00-00');
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

-- Dump completed on 2018-07-18 16:46:16
