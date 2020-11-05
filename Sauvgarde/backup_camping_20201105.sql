-- MySQL dump 10.13  Distrib 5.7.31, for Win64 (x86_64)
--
-- Host: localhost    Database: camping
-- ------------------------------------------------------
-- Server version	5.7.31

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
-- Current Database: `camping`
--

CREATE DATABASE /*!32312 IF NOT EXISTS*/ `camping` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `camping`;

--
-- Table structure for table `activite`
--

DROP TABLE IF EXISTS `activite`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `activite` (
  `idActivite` int(11) NOT NULL AUTO_INCREMENT,
  `nomActivite` varchar(50) NOT NULL,
  `zoneActivite` varchar(50) NOT NULL,
  `prixActivite` double NOT NULL,
  `idCamping` int(11) NOT NULL,
  PRIMARY KEY (`idActivite`),
  KEY `Activite_Camping0_FK` (`idCamping`),
  CONSTRAINT `Activite_Camping0_FK` FOREIGN KEY (`idCamping`) REFERENCES `camping` (`idCamping`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `activite`
--

LOCK TABLES `activite` WRITE;
/*!40000 ALTER TABLE `activite` DISABLE KEYS */;
/*!40000 ALTER TABLE `activite` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `camping`
--

DROP TABLE IF EXISTS `camping`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `camping` (
  `idCamping` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`idCamping`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `camping`
--

LOCK TABLES `camping` WRITE;
/*!40000 ALTER TABLE `camping` DISABLE KEYS */;
/*!40000 ALTER TABLE `camping` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `client`
--

DROP TABLE IF EXISTS `client`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `client` (
  `idClient` int(11) NOT NULL AUTO_INCREMENT,
  `nomClient` varchar(50) NOT NULL,
  `prenomClient` varchar(50) NOT NULL,
  `adresseClient` varchar(50) NOT NULL,
  `telephoneClient` int(11) NOT NULL,
  `mailClient` varchar(50) NOT NULL,
  PRIMARY KEY (`idClient`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `client`
--

LOCK TABLES `client` WRITE;
/*!40000 ALTER TABLE `client` DISABLE KEYS */;
/*!40000 ALTER TABLE `client` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `emplacement`
--

DROP TABLE IF EXISTS `emplacement`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `emplacement` (
  `idEmplacement` int(11) NOT NULL AUTO_INCREMENT,
  `numeroEmplacement` int(11) NOT NULL,
  `typeEmplacement` varchar(50) NOT NULL,
  `zoneEmplacement` varchar(50) NOT NULL,
  `situationEmplacement` varchar(50) DEFAULT NULL,
  `raccordementEmplacement` varchar(50) DEFAULT NULL,
  `parkingEmplacement` varchar(50) DEFAULT NULL,
  `compteurArrive` int(11) NOT NULL,
  `compteurDepart` int(11) NOT NULL,
  `idCamping` int(11) NOT NULL,
  `idReservation` int(11) NOT NULL,
  PRIMARY KEY (`idEmplacement`),
  UNIQUE KEY `Emplacement_Reservation0_AK` (`idReservation`),
  KEY `Emplacement_Camping0_FK` (`idCamping`),
  CONSTRAINT `Emplacement_Camping0_FK` FOREIGN KEY (`idCamping`) REFERENCES `camping` (`idCamping`),
  CONSTRAINT `Emplacement_Reservation1_FK` FOREIGN KEY (`idReservation`) REFERENCES `reservation` (`idReservation`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `emplacement`
--

LOCK TABLES `emplacement` WRITE;
/*!40000 ALTER TABLE `emplacement` DISABLE KEYS */;
/*!40000 ALTER TABLE `emplacement` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `reservation`
--

DROP TABLE IF EXISTS `reservation`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `reservation` (
  `idReservation` int(11) NOT NULL AUTO_INCREMENT,
  `dateEnregistrementReservation` date NOT NULL,
  `dateDebutReservation` date NOT NULL,
  `dateFinReservation` date NOT NULL,
  `compteurArrive` int(11) NOT NULL,
  `compteurDepart` int(11) NOT NULL,
  `idEmplacement` int(11) NOT NULL,
  `idClient` int(11) NOT NULL,
  PRIMARY KEY (`idReservation`),
  UNIQUE KEY `Reservation_Emplacement0_AK` (`idEmplacement`),
  KEY `Reservation_Client1_FK` (`idClient`),
  CONSTRAINT `Reservation_Client1_FK` FOREIGN KEY (`idClient`) REFERENCES `client` (`idClient`),
  CONSTRAINT `Reservation_Emplacement0_FK` FOREIGN KEY (`idEmplacement`) REFERENCES `emplacement` (`idEmplacement`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reservation`
--

LOCK TABLES `reservation` WRITE;
/*!40000 ALTER TABLE `reservation` DISABLE KEYS */;
/*!40000 ALTER TABLE `reservation` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-11-05 17:10:50
