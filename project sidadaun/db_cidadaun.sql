-- MySQL dump 10.13  Distrib 5.5.49, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: db_cidadaun
-- ------------------------------------------------------
-- Server version	5.5.49-0ubuntu0.14.04.1

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
-- Table structure for table `cidadaun`
--

DROP TABLE IF EXISTS `cidadaun`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cidadaun` (
  `nu_cidadaun` int(10) NOT NULL,
  `naran_cidadaun` varchar(50) NOT NULL,
  `sexo` enum('Mane','Feto') DEFAULT 'Mane',
  `nu_suco` int(6) NOT NULL,
  PRIMARY KEY (`nu_cidadaun`),
  KEY `nu_suco` (`nu_suco`),
  CONSTRAINT `cidadaun_ibfk_1` FOREIGN KEY (`nu_suco`) REFERENCES `suco` (`nu_suco`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cidadaun`
--

LOCK TABLES `cidadaun` WRITE;
/*!40000 ALTER TABLE `cidadaun` DISABLE KEYS */;
INSERT INTO `cidadaun` VALUES (304130100,'Paulo Tilman','Mane',30413),(304130201,'Onelia Mendes','Feto',30413),(601010090,'Alexandrina Amelia','Feto',60101),(601010201,'Durcela Paicheco','Feto',60101),(601020019,'Hendrique Nasri','Mane',60102),(601020146,'Domingos Barros','Mane',60102),(702050021,'George Sombai','Mane',70205),(702050075,'Fidelia Pereira','Feto',70205),(702070031,'Victoria Julia','Feto',70207),(702070180,'Sergio Pinto','Mane',70207),(702090090,'Sara Putri','Feto',70209),(702090099,'Nizia Adelaide','Feto',70209),(803030003,'Abilio Silva','Mane',80303),(803030033,'Dinis Calistro','Mane',80303),(803090002,'Fernanda da Cunha','Feto',80309),(803090089,'Ifania Martins','Feto',80309),(803090090,'Francisco Lay','Mane',80309),(902040120,'Domingos Pio','Mane',90204),(902040121,'Domingos Freitas','Mane',90204),(902090060,'Milenia Ribeiro','Feto',90209);
/*!40000 ALTER TABLE `cidadaun` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `distrito`
--

DROP TABLE IF EXISTS `distrito`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `distrito` (
  `nu_dist` int(2) NOT NULL AUTO_INCREMENT,
  `naran_dist` varchar(20) NOT NULL,
  PRIMARY KEY (`nu_dist`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `distrito`
--

LOCK TABLES `distrito` WRITE;
/*!40000 ALTER TABLE `distrito` DISABLE KEYS */;
INSERT INTO `distrito` VALUES (1,'Aileu'),(2,'Ainaro'),(3,'Baucau'),(4,'Bobonaro'),(5,'Covalima'),(6,'Dili'),(7,'Ermera'),(8,'Lautem'),(9,'Liquisa'),(10,'Manatuto'),(11,'Manufahi'),(12,'Oecusse'),(13,'Vique-que');
/*!40000 ALTER TABLE `distrito` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `subdistrito`
--

DROP TABLE IF EXISTS `subdistrito`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `subdistrito` (
  `nu_subdist` int(4) NOT NULL,
  `naran_subdist` varchar(20) NOT NULL,
  `nu_dist` int(2) NOT NULL,
  PRIMARY KEY (`nu_subdist`),
  KEY `nu_dist` (`nu_dist`),
  CONSTRAINT `subdistrito_ibfk_1` FOREIGN KEY (`nu_dist`) REFERENCES `distrito` (`nu_dist`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `subdistrito`
--

LOCK TABLES `subdistrito` WRITE;
/*!40000 ALTER TABLE `subdistrito` DISABLE KEYS */;
INSERT INTO `subdistrito` VALUES (303,'Laga',3),(304,'Quelicai',3),(601,'Dom Aleixo',6),(602,'Vera Cruz',6),(702,'Ermera',7),(801,'Iliomar',8),(803,'Lospalos',8),(901,'Maubara',9),(902,'Bazartete',9),(903,'Liquisa',9);
/*!40000 ALTER TABLE `subdistrito` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `suco`
--

DROP TABLE IF EXISTS `suco`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `suco` (
  `nu_suco` int(6) NOT NULL,
  `naran_suco` varchar(30) NOT NULL,
  `nu_subdist` int(4) NOT NULL,
  PRIMARY KEY (`nu_suco`),
  KEY `nu_subdist` (`nu_subdist`),
  CONSTRAINT `suco_ibfk_1` FOREIGN KEY (`nu_subdist`) REFERENCES `subdistrito` (`nu_subdist`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `suco`
--

LOCK TABLES `suco` WRITE;
/*!40000 ALTER TABLE `suco` DISABLE KEYS */;
INSERT INTO `suco` VALUES (30413,'Maluro',304),(60101,'Bairo Pite',601),(60102,'Comoro',601),(70205,'Mertuto',702),(70207,'Ponilala',702),(70209,'Riheu',702),(80303,'Fuiloro',803),(80309,'Raca',803),(90204,'Leorema',902),(90209,'Ulmera',902);
/*!40000 ALTER TABLE `suco` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-10-15 11:47:32
