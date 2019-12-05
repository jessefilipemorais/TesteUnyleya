CREATE DATABASE  IF NOT EXISTS `testeunyleya` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `testeunyleya`;
-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: localhost    Database: testeunyleya
-- ------------------------------------------------------
-- Server version	5.6.40-log

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
-- Table structure for table `tautor`
--

DROP TABLE IF EXISTS `tautor`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tautor` (
  `idautor` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL,
  `anonascimento` int(11) NOT NULL,
  `sexo` varchar(45) NOT NULL,
  `nascionalidade` varchar(45) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idautor`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tautor`
--

LOCK TABLES `tautor` WRITE;
/*!40000 ALTER TABLE `tautor` DISABLE KEYS */;
INSERT INTO `tautor` VALUES (1,'Autor 1',1980,'MASCULINO','BRASIL','2019-12-03 11:47:04','2019-12-03 12:49:40'),(3,'Autor 2',1788,'FEMININO','França','2019-12-04 01:35:15','2019-12-04 01:35:15');
/*!40000 ALTER TABLE `tautor` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `teditora`
--

DROP TABLE IF EXISTS `teditora`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `teditora` (
  `ideditora` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`ideditora`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `teditora`
--

LOCK TABLES `teditora` WRITE;
/*!40000 ALTER TABLE `teditora` DISABLE KEYS */;
INSERT INTO `teditora` VALUES (1,'Editora 1','2019-12-03 13:09:01','2019-12-03 14:18:58'),(3,'Editora 2','2019-12-04 01:37:53','2019-12-04 01:37:53');
/*!40000 ALTER TABLE `teditora` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tgeneroliterario`
--

DROP TABLE IF EXISTS `tgeneroliterario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tgeneroliterario` (
  `idgeneroliterario` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`idgeneroliterario`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tgeneroliterario`
--

LOCK TABLES `tgeneroliterario` WRITE;
/*!40000 ALTER TABLE `tgeneroliterario` DISABLE KEYS */;
INSERT INTO `tgeneroliterario` VALUES (3,'Ação','2019-12-03 14:27:37','2019-12-04 01:37:29'),(4,'Romance','2019-12-04 01:37:22','2019-12-04 01:37:22');
/*!40000 ALTER TABLE `tgeneroliterario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tlivro`
--

DROP TABLE IF EXISTS `tlivro`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tlivro` (
  `idlivro` int(11) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(100) NOT NULL,
  `anolancamento` int(11) NOT NULL,
  `idautor` int(11) NOT NULL,
  `idgeneroliterario` int(11) NOT NULL,
  `ideditora` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`idlivro`),
  KEY `idautorlivroxautor_idx` (`idautor`),
  KEY `idgeneroliterariolivroxgenero_idx` (`idgeneroliterario`),
  KEY `ideditoralivroxeditora_idx` (`ideditora`),
  CONSTRAINT `idautorlivroxautor` FOREIGN KEY (`idautor`) REFERENCES `tautor` (`idautor`),
  CONSTRAINT `ideditoralivroxeditora` FOREIGN KEY (`ideditora`) REFERENCES `teditora` (`ideditora`),
  CONSTRAINT `idgeneroliterariolivroxgenero` FOREIGN KEY (`idgeneroliterario`) REFERENCES `tgeneroliterario` (`idgeneroliterario`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tlivro`
--

LOCK TABLES `tlivro` WRITE;
/*!40000 ALTER TABLE `tlivro` DISABLE KEYS */;
INSERT INTO `tlivro` VALUES (1,'Livro 1',1988,3,4,3,'2019-12-04 01:03:09','2019-12-04 01:38:03'),(9,'Livro 2',1989,1,3,1,'2019-12-04 01:47:43','2019-12-04 01:48:04');
/*!40000 ALTER TABLE `tlivro` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-12-04 21:25:34
