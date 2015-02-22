-- MySQL dump 10.13  Distrib 5.5.40, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: bloglandia
-- ------------------------------------------------------
-- Server version	5.5.40-1

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
-- Table structure for table `articoli`
--

DROP TABLE IF EXISTS `articoli`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `articoli` (
  `art_id` int(11) NOT NULL AUTO_INCREMENT,
  `art_autore` varchar(40) NOT NULL DEFAULT '',
  `art_titolo` varchar(100) NOT NULL DEFAULT '',
  `art_articolo` text NOT NULL,
  `art_data` date NOT NULL DEFAULT '0000-00-00',
  PRIMARY KEY (`art_id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `articoli`
--

LOCK TABLES `articoli` WRITE;
/*!40000 ALTER TABLE `articoli` DISABLE KEYS */;
INSERT INTO `articoli` VALUES (1,'','titolato','questo Ã¨ un articolo esemplarmente titolato\r\n','2015-02-20'),(2,'','questo Ã¨ un articolo con un autore','dovrebbe esserci scritto il nome dell\'autore qui sotto\r\n','2015-02-20'),(3,'','ciccio','pasticcio','2015-02-20'),(4,'','asd','lol','2015-02-21'),(5,'','asd','asd','2015-02-21'),(6,'','asd','lol','2015-02-21'),(7,'','asd','asdfasdfasdf','2015-02-21'),(8,'','asdadsfsadf','asdgsawee','2015-02-21'),(9,'','asd','zcv','2015-02-21'),(10,'','lol','questo ha un nome','2015-02-21'),(11,'','ciao sono marco','mi presento sono biondo','2015-02-21'),(12,'','asdfadsf','asdfadsf','2015-02-21'),(13,'','guyg','tctufitf','2015-02-21'),(14,'','ciao sono sabina','e a casa c\'ho la tigre.','2015-02-21'),(15,'','Serata in discoteca','tante troie e pochi pinacci! serata pallosa\r\n','2015-02-22'),(16,'','prova','provaprovaprovaprova\r\n','2015-02-22'),(17,'','prova','lol','2015-02-22'),(18,'','prova','questo ha perforza l\'autore','2015-02-22'),(19,'','prova','questo ha perforza l\'autore','2015-02-22'),(20,'','prova','13241234\r\n','2015-02-22'),(21,'','jek','su jek\r\n','2015-02-22'),(22,'','jek','su jek\r\n','2015-02-22'),(23,'','jek','su jek\r\n','2015-02-22'),(24,'','lol','asd','2015-02-22'),(25,'','ciao','questo Ã¨ un esempio','2015-02-22'),(26,'','aawfsadfadf','sdagffadga','2015-02-22'),(28,'admin','prova','ciao ragazzi sono l\'admin e regno','2015-02-22');
/*!40000 ALTER TABLE `articoli` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `commenti`
--

DROP TABLE IF EXISTS `commenti`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `commenti` (
  `com_id` int(5) NOT NULL AUTO_INCREMENT,
  `com_art` int(11) NOT NULL DEFAULT '0',
  `com_autore` varchar(40) NOT NULL DEFAULT '',
  `com_testo` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`com_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `commenti`
--

LOCK TABLES `commenti` WRITE;
/*!40000 ALTER TABLE `commenti` DISABLE KEYS */;
/*!40000 ALTER TABLE `commenti` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'maurizio','murru'),(2,'davide','spano'),(3,'chiara','pitzanti'),(4,'francesco','petruccioli'),(5,'francesco','petruccioli'),(6,'francesco','petruccioli'),(7,'francesco','petruccioli'),(8,'GimmiRidimmi','mariano1993'),(9,'marco','perra'),(10,'sabina','sannia'),(11,'MaizeDaniele','ASDFG');
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

-- Dump completed on 2015-02-22 23:30:03
