-- MySQL dump 10.13  Distrib 5.7.31, for Win64 (x86_64)
--
-- Host: localhost    Database: sauvgarde
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
-- Current Database: `sauvgarde`
--

CREATE DATABASE /*!32312 IF NOT EXISTS*/ `sauvgarde` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_bin */;

USE `sauvgarde`;

--
-- Table structure for table `localisation`
--

DROP TABLE IF EXISTS `localisation`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `localisation` (
  `departement` varchar(50) COLLATE utf8mb4_bin NOT NULL,
  `region` varchar(50) COLLATE utf8mb4_bin NOT NULL,
  `nRegion` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `localisation`
--

LOCK TABLES `localisation` WRITE;
/*!40000 ALTER TABLE `localisation` DISABLE KEYS */;
INSERT INTO `localisation` VALUES ('Ain','Auvergne-Rhône-Alpes',1),('Aisne','Hauts-de-France',2),('Allier','Auvergne-Rhône-Alpes',3),('Alpes-de-Haute-Provence','Provence-Alpes-Côte d\'Azur',4),('Hautes-Alpes','Provence-Alpes-Côte d\'Azur',5),('Alpes-Maritimes','Provence-Alpes-Côte d\'Azur',6),('Ardèche','Auvergne-Rhône-Alpes',7),('Ardennes','Grand-Est',8),('Ariège','Occitanie',9),('Aube','Grand-Est',10),('Aude','Occitanie',11),('Aveyron','Occitanie',12),('Bouches-du-Rhône','Provence-Alpes-Côte d\'Azur',13),('Calvados','Normandie',14),('Ain','Auvergne-Rhône-Alpes',1),('Aisne','Hauts-de-France',2),('Allier','Auvergne-Rhône-Alpes',1),('Alpes-de-Haute-Provence','Provence-Alpes-Côte d\'Azur',3),('Hautes-Alpes','Provence-Alpes-Côte d\'Azur',3),('Alpes-Maritimes','Provence-Alpes-Côte d\'Azur',3),('Ardèche','Auvergne-Rhône-Alpes',1),('Ardennes','Grand-Est',4),('Ariège','Occitanie',5),('Aube','Grand-Est',4),('Aude','Occitanie',5),('Aveyron','Occitanie',5),('Bouches-du-Rhône','Provence-Alpes-Côte d\'Azur',3),('Calvados','Normandie',6),('Cantal','Auvergne-Rhône-Alpes',1),('Charente','Nouvelle-Aquitaine',7),('Charente-Maritime','Nouvelle-Aquitaine',7),('Cher','Centre-Val de Loire',8),('Correze','Nouvelle-Aquitaine',7),('Côte-d\'Or','Bourgogne-Franche-Comté',9),('Côtes-d\'Armor','Bretagne',10),('Creuse','Nouvelle-Aquitaine',7),('Dordogne','Nouvelle-Aquitaine',7),('Doubs','Bourgogne-Franche-Comté',9),('Drôme','Auvergne-Rhône-Alpes',1),('Eure','Normandie',6),('Eure-et-Loir','Centre-Val de Loire',8),('Finistère','Bretagne',10),('Corse-du-Sud','Corse',11),('Haute-Corse ','Corse',11),('Gard','Occitanie',5),('Haute-Garonne','Occitanie',5),('Gers','Occitanie',5),('Gironde','Nouvelle-Aquitaine',7),('Hérault','Occitanie',5),('Ille-et-Vilaine','Bretagne',10),('Indre','Centre-Val de Loire',8),('Indre-et-Loire','Centre-Val de Loire',8),('Isère','Auvergne-Rhône-Alpes',1),('Jura','Bourgogne-Franche-Comté',9),('Landes','Nouvelle-Aquitaine',7),('Loir-et-Cher','Centre-Val de Loire',8),('Loire','Auvergne-Rhône-Alpes',1),('Haute-Loire','Auvergne-Rhône-Alpes',1),('Loire-Atlantique','Pays de la Loire',12),('Loiret','Centre-Val de Loire',8),('Lot','Occitanie',5),('Lot-et-Garonne','Nouvelle-Aquitaine',7),('Lozère','Occitanie',5),('Maine-et-Loire','Pays de la Loire',12),('Manche','Normandie',6),('Marne','Grand-Est',4),('Haute-Marne','Grand-Est',4),('Mayenne','Pays de la Loire',12),('Meurthe-et-Moselle','Grand-Est',4),('Meuse','Grand-Est',4),('Morbihan','Bretagne',10),('Moselle','Grand-Est',4),('Nièvre','Bourgogne-Franche-Comté',9),('Nord','Hauts-de-France',2),('Oise','Hauts-de-France',2),('Orne','Normandie',6),('Pas-de-Calais','Hauts-de-France',2),('Puy-de-Dôme','Auvergne-Rhône-Alpes',1),('Pyrénées-Atlantiques','Nouvelle-Aquitaine',7),('Hautes-Pyrénées','Occitanie',5),('Pyrénées-Orientales','Occitanie',5),('Bas-Rhin','Grand-Est',4),('Haut-Rhin','Grand-Est',4),('Rhône','Auvergne-Rhône-Alpes',1),('Haute-Saône','Bourgogne-Franche-Comté',9),('Saône-et-Loire','Bourgogne-Franche-Comté',9),('Sarthe','Pays de la Loire',12),('Savoie','Auvergne-Rhône-Alpes',1),('Haute-Savoie','Auvergne-Rhône-Alpes',1),('Paris','Ile-de-France',13),('Seine-Maritime','Normandie',6),('Seine-et-Marne','Ile-de-France',13),('Yvelines','Ile-de-France',13),('Deux-Sèvres','Nouvelle-Aquitaine',7),('Somme','Hauts-de-France',2),('Tarn','Occitanie',5),('Tarn-et-Garonne','Occitanie',5),('Var','Provence-Alpes-Côte d\'Azur',3),('Vaucluse','Provence-Alpes-Côte d\'Azur',3),('Vendée','Pays de la Loire',12),('Vienne','Nouvelle-Aquitaine',7),('Haute-Vienne','Nouvelle-Aquitaine',7),('Vosges','Grand-Est',4),('Ain','Auvergne-Rhône-Alpes',1),('Aisne','Hauts-de-France',2),('Allier','Auvergne-Rhône-Alpes',1),('Alpes-de-Haute-Provence','Provence-Alpes-Côte d\'Azur',3),('Hautes-Alpes','Provence-Alpes-Côte d\'Azur',3),('Alpes-Maritimes','Provence-Alpes-Côte d\'Azur',3),('Ardèche','Auvergne-Rhône-Alpes',1),('Ardennes','Grand-Est',4),('Ariège','Occitanie',5),('Aube','Grand-Est',4),('Aude','Occitanie',5),('Aveyron','Occitanie',5),('Bouches-du-Rhône','Provence-Alpes-Côte d\'Azur',3),('Calvados','Normandie',6),('Cantal','Auvergne-Rhône-Alpes',1),('Charente','Nouvelle-Aquitaine',7),('Charente-Maritime','Nouvelle-Aquitaine',7),('Cher','Centre-Val de Loire',8),('Correze','Nouvelle-Aquitaine',7),('Côte-d\'Or','Bourgogne-Franche-Comté',9),('Côtes-d\'Armor','Bretagne',10),('Creuse','Nouvelle-Aquitaine',7),('Dordogne','Nouvelle-Aquitaine',7),('Doubs','Bourgogne-Franche-Comté',9),('Drôme','Auvergne-Rhône-Alpes',1),('Eure','Normandie',6),('Eure-et-Loir','Centre-Val de Loire',8),('Finistère','Bretagne',10),('Corse-du-Sud','Corse',11),('Haute-Corse ','Corse',11),('Gard','Occitanie',5),('Haute-Garonne','Occitanie',5),('Gers','Occitanie',5),('Gironde','Nouvelle-Aquitaine',7),('Hérault','Occitanie',5),('Ille-et-Vilaine','Bretagne',10),('Indre','Centre-Val de Loire',8),('Indre-et-Loire','Centre-Val de Loire',8),('Isère','Auvergne-Rhône-Alpes',1),('Jura','Bourgogne-Franche-Comté',9),('Landes','Nouvelle-Aquitaine',7),('Loir-et-Cher','Centre-Val de Loire',8),('Loire','Auvergne-Rhône-Alpes',1),('Haute-Loire','Auvergne-Rhône-Alpes',1),('Loire-Atlantique','Pays de la Loire',12),('Loiret','Centre-Val de Loire',8),('Lot','Occitanie',5),('Lot-et-Garonne','Nouvelle-Aquitaine',7),('Lozère','Occitanie',5),('Maine-et-Loire','Pays de la Loire',12),('Manche','Normandie',6),('Marne','Grand-Est',4),('Haute-Marne','Grand-Est',4),('Mayenne','Pays de la Loire',12),('Meurthe-et-Moselle','Grand-Est',4),('Meuse','Grand-Est',4),('Morbihan','Bretagne',10),('Moselle','Grand-Est',4),('Nièvre','Bourgogne-Franche-Comté',9),('Nord','Hauts-de-France',2),('Oise','Hauts-de-France',2),('Orne','Normandie',6),('Pas-de-Calais','Hauts-de-France',2),('Puy-de-Dôme','Auvergne-Rhône-Alpes',1),('Pyrénées-Atlantiques','Nouvelle-Aquitaine',7),('Hautes-Pyrénées','Occitanie',5),('Pyrénées-Orientales','Occitanie',5),('Bas-Rhin','Grand-Est',4),('Haut-Rhin','Grand-Est',4),('Rhône','Auvergne-Rhône-Alpes',1),('Haute-Saône','Bourgogne-Franche-Comté',9),('Saône-et-Loire','Bourgogne-Franche-Comté',9),('Sarthe','Pays de la Loire',12),('Savoie','Auvergne-Rhône-Alpes',1),('Haute-Savoie','Auvergne-Rhône-Alpes',1),('Paris','Ile-de-France',13),('Seine-Maritime','Normandie',6),('Seine-et-Marne','Ile-de-France',13),('Yvelines','Ile-de-France',13),('Deux-Sèvres','Nouvelle-Aquitaine',7),('Somme','Hauts-de-France',2),('Tarn','Occitanie',5),('Tarn-et-Garonne','Occitanie',5),('Var','Provence-Alpes-Côte d\'Azur',3),('Vaucluse','Provence-Alpes-Côte d\'Azur',3),('Vendée','Pays de la Loire',12),('Vienne','Nouvelle-Aquitaine',7),('Haute-Vienne','Nouvelle-Aquitaine',7),('Vosges','Grand-Est',4),('Yonne','Bourgogne-Franche-Comté',9),('Territoire de Belfort','Bourgogne-Franche-Comté',9),('Essonne','Ile-de-France',13),('Hauts-de-Seine','Ile-de-France',13),('Seine-Saint-Denis','Ile-de-France',13),('Val-de-Marne','Ile-de-France',13),('Val-d\'Oise','Ile-de-France',13),('Guadeloupe','DOM-TOM',14),('Martinique','DOM-TOM',14),('Guyane','DOM-TOM',14),('La Réunion','DOM-TOM',14),('Saint-Pierre-et-Miquelon','DOM-TOM',14),('Mayotte','INCONU',0),('Saint-Barthélemy','DOM-TOM',14),('Saint-Martin','DOM-TOM',14),('Terres australes et antarctiques françaises','DOM-TOM',14),('Wallis-et-Futuna','DOM-TOM',14),('Polynésie française','DOM-TOM',14),('Nouvelle-Calédonie','DOM-TOM',14),('Clipperton','DOM-TOM',14);
/*!40000 ALTER TABLE `localisation` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-11-18 17:10:50
