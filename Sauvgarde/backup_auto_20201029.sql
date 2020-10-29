-- MySQL dump 10.13  Distrib 5.7.31, for Win64 (x86_64)
--
-- Host: localhost    Database: auto
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
-- Current Database: `auto`
--

CREATE DATABASE /*!32312 IF NOT EXISTS*/ `auto` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_bin */;

USE `auto`;

--
-- Table structure for table `marques`
--

DROP TABLE IF EXISTS `marques`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `marques` (
  `idMarques` int(11) NOT NULL AUTO_INCREMENT,
  `libelle` varchar(50) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`idMarques`)
) ENGINE=InnoDB AUTO_INCREMENT=44 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `marques`
--

LOCK TABLES `marques` WRITE;
/*!40000 ALTER TABLE `marques` DISABLE KEYS */;
INSERT INTO `marques` VALUES (1,'ALFA ROMEO '),(2,'AUDI '),(3,'BENTLEY '),(4,'BMW '),(5,'CADILLAC '),(6,'CHEVROLET '),(7,'CITROEN '),(8,'DACIA '),(9,'FERRARI '),(10,'FIAT '),(11,'FORD '),(12,'HONDA '),(13,'HYUNDAI '),(14,'INFINITI '),(15,'JAGUAR '),(16,'JEEP '),(17,'KIA '),(18,'LADA '),(19,'LAMBORGHINI '),(20,'LANCIA '),(21,'LAND ROVER '),(22,'LEXUS '),(23,'MASERATI '),(24,'MAZDA '),(25,'MERCEDES '),(26,'MINI '),(27,'MITSUBISHI '),(28,'NISSAN '),(29,'OPEL '),(30,'PEUGEOT '),(31,'PORSCHE '),(32,'RENAULT '),(33,'ROLLS ROYCE '),(34,'SEAT '),(35,'SKODA '),(36,'SMART '),(37,'SSANGYONG '),(38,'SUBARU '),(39,'SUZUKI '),(40,'TESLA '),(41,'TOYOTA '),(42,'VOLKSWAGEN '),(43,'VOLVO ');
/*!40000 ALTER TABLE `marques` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `modele`
--

DROP TABLE IF EXISTS `modele`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `modele` (
  `libelleModele` varchar(50) COLLATE utf8_bin NOT NULL,
  `idmarque` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `modele`
--

LOCK TABLES `modele` WRITE;
/*!40000 ALTER TABLE `modele` DISABLE KEYS */;
INSERT INTO `modele` VALUES ('159',1),('NULL',1),('8C ',1),('A5',1),('159',1),('NULL',1),('8C ',1),('A5',1),('MITO ',1),('SPIDER ',1),('A1 ',2),('A3 ',2),('A4 ',2),('A5 ',2),('A6 ',2),('A7 ',2),('A8 ',2),('Q3 ',2),('Q5 ',2),('Q7 ',2),('R8 ',2),('TT ',2),('CONTINENTAL ',3),('FLYING SPUR ',3),('MULSANNE ',3),('114',4),('116',4),('118',4),('120',4),('125',4),('214',4),('216',4),('218',4),('220',4),('225',4),('228',4),('235',4),('316',4),('318',4),('320',4),('325',4),('328',4),('330',4),('335',4),('418',4),('420',4),('425',4),('428',4),('430',4),('435',4),('518',4),('520',4),('525',4),('528',4),('530',4),('535',4),('550',4),('640',4),('650',4),('730',4),('740',4),('750',4),('760',4),('I3 ',4),('I8 ',4),('M3 ',4),('M4 ',4),('M5 ',4),('SERIE 3 ACTIVEHYBRID ',4),('SERIE 5 ACTIVEHYBRID ',4),('SERIE 7 ACTIVEHYBRID ',4),('X1 ',4),('X3 ',4),('X4 ',4),('X5 ',4),('X6 ',4),('Z4 ',4),('ATS ',5),('CTS ',5),('ESCALADE ',5),('SRX ',5),('CAMARO ',6),('CORVETTE ',6),('BERLINGO ',7),('C-ZERO ',7),('C1 ',7),('C3 ',7),('C3 PICASSO ',7),('C4 ',7),('C4 AIRCROSS ',7),('C4 CACTUS ',7),('C4 PICASSO ',7),('C5 ',7),('C8 ',7),('DS3 ',7),('DS4 ',7),('DS5 ',7),('JUMPER ',7),('JUMPY ',7),('NEMO ',7),('DOKKER ',8),('DUSTER ',8),('LODGY ',8),('LOGAN ',8),('SANDERO ',8),('458',9),('CALIFORNIA ',9),('F12 ',9),('FF ',9),('LAFERRARI ',9),('500',10),('500L ',10),('BRAVO ',10),('DOBLO ',10),('DUCATO ',10),('FIORINO ',10),('FREEMONT ',10),('PANDA ',10),('PUNTO ',10),('SCUDO ',10),('SEDICI ',10),('B-MAX ',11),('C-MAX ',11),('ECOSPORT ',11),('FIESTA ',11),('FOCUS ',11),('KA ',11),('KUGA ',11),('MONDEO ',11),('S-MAX ',11),('TOURNEO CONNECT ',11),('TOURNEO COURIER ',11),('TOURNEO CUSTOM ',11),('TRANSIT ',11),('TRANSIT CUSTOM ',11),('ACCORD ',12),('CIVIC ',12),('CR-V ',12),('CR-Z ',12),('INSIGHT ',12),('JAZZ ',12),('GENESIS ',13),('I 10 ',13),('I 20 ',13),('I 30 ',13),('I 40 ',13),('IX 20 ',13),('IX 35 ',13),('SANTA FE ',13),('VELOSTER ',13),('Q50 ',14),('Q60 ',14),('Q70 ',14),('QX50 ',14),('QX70 ',14),('F-TYPE ',15),('XF ',15),('XJ ',15),('CHEROKEE ',16),('COMPASS ',16),('GRAND CHEROKEE ',16),('WRANGLER ',16),('CARENS ',17),('CEED ',17),('OPTIMA ',17),('PICANTO ',17),('RIO ',17),('SORENTO ',17),('SOUL ',17),('SPORTAGE ',17),('VENGA ',17),('NIVA ',18),('AVENTADOR ',19),('GALLARDO ',19),('HURACAN ',19),('DELTA ',20),('FLAVIA ',20),('MUSA ',20),('THEMA ',20),('VOYAGER ',20),('YPSILON ',20),('DISCOVERY ',21),('DISCOVERY SPORT ',21),('FREELANDER ',21),('RANGE ROVER ',21),('RANGE ROVER EVOQUE ',21),('RANGE ROVER SPORT ',21),('CT ',22),('GS ',22),('IS ',22),('LFA ',22),('LS ',22),('NX ',22),('RC ',22),('RX ',22),('GHIBLI ',23),('GRANCABRIO ',23),('GRANTURISMO ',23),('QUATTROPORTE ',23),('2',24),('3',24),('5',24),('6',24),('CX-5 ',24),('MX-5 ',24),('A 160 ',25),('A 180 ',25),('A 200 ',25),('A 220 ',25),('A 250 ',25),('A 45 AMG ',25),('AMG GT ',25),('AMG GT S ',25),('B 160 ',25),('B 180 ',25),('B 200 ',25),('B 220 ',25),('B 250 ',25),('B ED ',25),('C 180 ',25),('C 200 ',25),('C 220 ',25),('C 250 ',25),('C 300 ',25),('C 350 ',25),('C 400 ',25),('C 63 AMG ',25),('C 63 S-AMG ',25),('CITAN ',25),('CL 63 AMG ',25),('CLA 180 ',25),('CLA 200 ',25),('CLA 220 ',25),('CLA 250 ',25),('CLA 45 AMG ',25),('CLASSE V ',25),('CLS 220 ',25),('CLS 250 ',25),('CLS 350 ',25),('CLS 400 ',25),('CLS 500 ',25),('CLS 63 AMG ',25),('E 200 ',25),('E 220 ',25),('E 250 ',25),('E 300 ',25),('E 320 ',25),('E 350 ',25),('E 400 ',25),('E 500 ',25),('E 63 AMG ',25),('G 350 ',25),('G 500 ',25),('G 63 AMG ',25),('G 65 AMG ',25),('GL 350 ',25),('GL 400 ',25),('GL 500 ',25),('GL 63 AMG ',25),('GLA 180 ',25),('GLA 200 ',25),('GLA 220 ',25),('GLA 250 ',25),('GLA 45 AMG ',25),('ML 250 ',25),('ML 350 ',25),('ML 400 ',25),('ML 500 ',25),('ML 63 AMG ',25),('S 300 ',25),('S 350 ',25),('S 400 ',25),('S 500 ',25),('S 600 ',25),('S 63 AMG ',25),('S 65 AMG ',25),('SL 350 ',25),('SL 400 ',25),('SL 500 ',25),('SL 63 AMG ',25),('SL 65 AMG ',25),('SLK 200 ',25),('SLK 250 ',25),('SLK 350 ',25),('SLK 55 AMG ',25),('SLS AMG GT S ',25),('SPRINTER ',25),('VITO ',25),('CABRIO ',26),('COUNTRYMAN ',26),('COUPE ',26),('MINI ',26),('PACEMAN ',26),('ROADSTER ',26),('ASX ',27),('I-MIEV ',27),('OUTLANDER ',27),('PAJERO ',27),('SPACE STAR ',27),('370Z ',28),('GT-R ',28),('JUKE ',28),('LEAF ',28),('MICRA ',28),('MURANO ',28),('NOTE ',28),('NV200 ',28),('NV300 ',28),('NV400 ',28),('PULSAR ',28),('QASHQAI ',28),('X-TRAIL ',28),('ADAM ',29),('AGILA ',29),('AMPERA ',29),('ANTARA ',29),('ASTRA ',29),('CASCADA ',29),('COMBO ',29),('CORSA ',29),('INSIGNIA ',29),('MERIVA ',29),('MOKKA ',29),('MOVANO ',29),('VIVARO ',29),('ZAFIRA ',29),('108',30),('2008',30),('207',30),('208',30),('3008',30),('308',30),('4008',30),('5008',30),('508',30),('BIPPER ',30),('BOXER ',30),('EXPERT ',30),('ION ',30),('PARTNER ',30),('RCZ ',30),('911',31),('918',31),('BOXSTER ',31),('CAYENNE ',31),('CAYMAN ',31),('MACAN ',31),('PANAMERA ',31),('CAPTUR ',32),('CLIO ',32),('ESPACE ',32),('KANGOO ',32),('KOLEOS ',32),('LAGUNA ',32),('LATITUDE ',32),('MASTER ',32),('MEGANE ',32),('SCENIC ',32),('TRAFIC ',32),('TWINGO ',32),('ZOE ',32),('GHOST ',33),('PHANTOM ',33),('WRAITH ',33),('ALHAMBRA ',34),('ALTEA ',34),('IBIZA ',34),('LEON ',34),('MII ',34),('TOLEDO ',34),('CITIGO ',35),('FABIA ',35),('OCTAVIA ',35),('RAPID ',35),('ROOMSTER ',35),('SUPERB ',35),('YETI ',35),('FORFOUR ',36),('FORTWO ',36),('KORANDO ',37),('REXTON ',37),('RODIUS ',37),('BRZ ',38),('FORESTER ',38),('WRX ',38),('XV ',38),('CELERIO ',39),('JIMNY ',39),('SWIFT ',39),('SX4 ',39),('VITARA ',39),('MODEL S ',40),('AURIS ',41),('AVENSIS ',41),('AYGO ',41),('GT86 ',41),('IQ ',41),('LAND CRUISER ',41),('PRIUS ',41),('PRIUS+ ',41),('RAV4 ',41),('VERSO ',41),('VERSO S ',41),('YARIS ',41),('CC ',42),('COCCINELLE ',42),('CRAFTER ',42),('EOS ',42),('GOLF ',42),('GOLF SPORTSVAN ',42),('JETTA ',42),('PASSAT ',42),('PHAETON ',42),('POLO ',42),('SCIROCCO ',42),('SHARAN ',42),('TIGUAN ',42),('TOUAREG ',42),('TOURAN ',42),('UP! ',42),('S60 ',43),('S80 ',43),('V40 ',43),('V60 ',43),('V70 ',43),('XC60 ',43),('XC70 ',43),('XC90 ',43);
/*!40000 ALTER TABLE `modele` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-10-29 17:10:49
