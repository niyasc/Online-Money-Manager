-- MySQL dump 10.14  Distrib 5.5.36-MariaDB, for Linux (x86_64)
--
-- Host: localhost    Database: expense
-- ------------------------------------------------------
-- Server version	5.5.36-MariaDB

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
-- Current Database: `expense`
--



USE `epiz_22844332_expense`;

--
-- Table structure for table `accounts`
--

DROP TABLE IF EXISTS `accounts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `accounts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uname` varchar(20) DEFAULT NULL,
  `password` varchar(128) DEFAULT NULL,
  `start` date DEFAULT CURRENT_TIMESTAMP,
  `balance` decimal(10,0) DEFAULT '0',
  `bbalance` decimal(10,0) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `accounts`
--

LOCK TABLES `accounts` WRITE;
/*!40000 ALTER TABLE `accounts` DISABLE KEYS */;
INSERT INTO `accounts` VALUES (7,'niyasc','*2A1A57C49941F3BE8E4CEB49E4929EF2F8117AF0',NULL,0,0);
/*!40000 ALTER TABLE `accounts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `bank_transactions`
--

DROP TABLE IF EXISTS `bank_transactions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bank_transactions` (
  `id` int(11) DEFAULT NULL,
  `day` date DEFAULT NULL,
  `type` varchar(20) DEFAULT NULL,
  `amount` float DEFAULT NULL,
  `description` varchar(32) DEFAULT NULL,
  KEY `id` (`id`),
  CONSTRAINT `bank_transactions_ibfk_1` FOREIGN KEY (`id`) REFERENCES `accounts` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bank_transactions`
--

LOCK TABLES `bank_transactions` WRITE;
/*!40000 ALTER TABLE `bank_transactions` DISABLE KEYS */;
INSERT INTO `bank_transactions` VALUES (7,'2014-04-21','Deposit',32423,'adafd'),(7,'2014-04-21','Deposit',32423,'adafd'),(7,'2014-04-21','Withdraw',32423,'dsfs'),(7,'2014-04-21','Withdraw',32423,'dsfs'),(7,'2014-04-21','Deduction',100,'fine');
/*!40000 ALTER TABLE `bank_transactions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categories` (
  `uid` int(11) DEFAULT NULL,
  `category` varchar(20) DEFAULT NULL,
  KEY `uid` (`uid`),
  CONSTRAINT `categories_ibfk_1` FOREIGN KEY (`uid`) REFERENCES `accounts` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` VALUES (7,'Other'),(7,'Study'),(7,'Travel'),(7,'Entertainments'),(7,'Food'),(7,'Homely Materials');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `credit`
--

DROP TABLE IF EXISTS `credit`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `credit` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) DEFAULT NULL,
  `day` date DEFAULT NULL,
  `otherparty` varchar(20) DEFAULT NULL,
  `amount` decimal(10,0) DEFAULT NULL,
  `status` varchar(2) DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `uid` (`uid`),
  CONSTRAINT `credit_ibfk_1` FOREIGN KEY (`uid`) REFERENCES `accounts` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `credit`
--

LOCK TABLES `credit` WRITE;
/*!40000 ALTER TABLE `credit` DISABLE KEYS */;
INSERT INTO `credit` VALUES (1,7,'2014-04-20','adfa',1000000,'1'),(2,7,'2014-04-20','adfa',1000000,'1'),(3,7,'2014-04-20','test',100,'1'),(4,7,'2014-04-20','test',1000000,'1'),(5,7,'2014-04-21','test',100,'1');
/*!40000 ALTER TABLE `credit` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `debit`
--

DROP TABLE IF EXISTS `debit`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `debit` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(11) DEFAULT NULL,
  `day` date DEFAULT NULL,
  `otherparty` varchar(20) DEFAULT NULL,
  `amount` decimal(10,0) DEFAULT NULL,
  `status` varchar(2) DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `uid` (`uid`),
  CONSTRAINT `debit_ibfk_1` FOREIGN KEY (`uid`) REFERENCES `accounts` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `debit`
--

LOCK TABLES `debit` WRITE;
/*!40000 ALTER TABLE `debit` DISABLE KEYS */;
INSERT INTO `debit` VALUES (1,7,'2014-04-20','abc',100,'1'),(2,7,'2014-04-20','abc',100,'1'),(3,7,'2014-04-20','ada',22,'1'),(4,7,'2014-04-20','sdfas',325234,'0'),(5,7,'2014-04-20','dsafds',0,'0'),(6,7,'2014-04-21','test',100,'0');
/*!40000 ALTER TABLE `debit` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `expense`
--

DROP TABLE IF EXISTS `expense`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `expense` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Day` date DEFAULT NULL,
  `Item` varchar(30) DEFAULT NULL,
  `Expense` float DEFAULT NULL,
  `User` int(11) DEFAULT NULL,
  `Category` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`ID`),
  KEY `User` (`User`),
  CONSTRAINT `expense_ibfk_1` FOREIGN KEY (`User`) REFERENCES `accounts` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=98 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `expense`
--

LOCK TABLES `expense` WRITE;
/*!40000 ALTER TABLE `expense` DISABLE KEYS */;
INSERT INTO `expense` VALUES (63,'2014-01-14','from railway station',50,7,'Travel'),(64,'2014-01-14','notebookx4',60,7,'Study'),(65,'2014-01-14','Pen',8,7,'Study'),(66,'2014-01-14','Poratta+ egg curry',70,7,'Food'),(67,'2014-01-17','washing powder',10,7,'Homely Materials'),(68,'2014-01-20','printout',10,7,'Study'),(69,'2014-01-21','ear phone',100,7,'Entertainments'),(70,'2014-01-22','soap',10,7,'Homely Materials'),(71,'2014-01-22','sugar',10,7,'Food'),(72,'2014-01-24','Parachute oil',10,7,'Homely Materials'),(73,'2014-01-27','mess fees',4000,7,'Food'),(74,'2014-01-28','Masjid fund',20,7,'Other'),(75,'2014-01-29','pakodi',10,7,'Food'),(76,'2014-01-31','soap',10,7,'Homely Materials'),(77,'2014-02-01','paid 575 online for \'soft comp',575,7,'Study'),(78,'2014-02-03','shaheer debit',100,7,'Other'),(79,'2014-02-03','2 bread pakoda',10,7,'Food'),(80,'2014-02-04','coffee powder',10,7,'Food'),(81,'2014-02-04','tea+bread',10,7,'Food'),(82,'2014-02-05','tooth paste',10,7,'Homely Materials'),(83,'2014-02-05','shaving set',8,7,'Homely Materials'),(84,'2014-02-05','sugar',10,7,'Food'),(85,'2014-02-07','detergent powder',10,7,'Homely Materials'),(86,'2014-02-09','bus charge to okhla',5,7,'Travel'),(87,'2014-02-10','Santoor soap',22,7,'Homely Materials'),(88,'2014-02-11','tea powder',30,7,'Food'),(89,'2014-02-11','tea+biscut',10,7,'Food'),(90,'2014-02-12','artificial intelligence book',190,7,'Study'),(91,'2014-02-12','tea+samosa',10,7,'Food'),(92,'2014-02-14','parachute',10,7,'Homely Materials'),(93,'2014-02-13','tea+meeta samosa',11,7,'Food'),(94,'2014-03-10','veg',400,7,'Food'),(95,'2014-04-21','test',100,7,'Other'),(96,'2014-04-21','test',100,7,'Other'),(97,'2014-04-21','test',100,7,'Other');
/*!40000 ALTER TABLE `expense` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `income`
--

DROP TABLE IF EXISTS `income`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `income` (
  `id` int(11) DEFAULT NULL,
  `day` date DEFAULT NULL,
  `source` varchar(20) DEFAULT NULL,
  `amount` float DEFAULT NULL,
  KEY `id` (`id`),
  CONSTRAINT `income_ibfk_1` FOREIGN KEY (`id`) REFERENCES `accounts` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `income`
--

LOCK TABLES `income` WRITE;
/*!40000 ALTER TABLE `income` DISABLE KEYS */;
INSERT INTO `income` VALUES (NULL,'2014-04-20','atm withdraw',NULL),(7,'2014-04-20','atm withdraw',100),(7,'2014-04-20','gift',1000),(7,'2014-04-20','adf',111),(7,'2014-04-20','adsdf',245),(7,'2014-04-20','dsafd',32545),(7,'2014-04-20','dfad',0),(7,'2014-04-20','dfad',0),(7,'2014-04-20','dfad',0),(7,'2014-04-20','dafd',0),(7,'2014-04-20','dafds',0),(7,'2014-04-20','dfds',0),(7,'2014-04-20','afdsfa',-100),(7,'2014-04-20','atm withdraw',100),(7,'2014-04-20','atm withdraw',100),(7,'2014-04-21','test',100);
/*!40000 ALTER TABLE `income` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `news`
--

DROP TABLE IF EXISTS `news`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(64) DEFAULT NULL,
  `content` varchar(1024) DEFAULT NULL,
  `day` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `news`
--

LOCK TABLES `news` WRITE;
/*!40000 ALTER TABLE `news` DISABLE KEYS */;
INSERT INTO `news` VALUES (1,'Blah Blah','Blah Blah Blah BlahBlah Blah Blah BlahBlah Blah Blah BlahBlah Blah Blah BlahBlah Blah Blah BlahBlah Blah Blah BlahBlah Blah Blah BlahBlah Blah Blah BlahBlah Blah Blah BlahBlah Blah Blah BlahBlah Blah Blah BlahBlah Blah Blah BlahBlah Blah Blah BlahBlah Blah Blah BlahBlah Blah Blah BlahBlah Blah Blah BlahBlah Blah Blah BlahBlah Blah Blah BlahBlah Blah Blah BlahBlah Blah Blah BlahBlah Blah Blah BlahBlah Blah Blah BlahBlah Blah Blah BlahBlah Blah Blah BlahBlah  BlahBlah Blah Blah BlahBlah Blah Blah BlahBlah Blah Blah BlahBlah Blah Blah BlahBlah Blah Blah Blah','2014-03-31 18:30:00'),(2,'Blee Blee','Blah Blah Blah BlahBlah Blah Blah BlahBlah Blah Blah BlahBlah Blah Blah BlahBlah Blah Blah BlahBlah Blah Blah BlahBlah Blah Blah BlahBlah Blah Blah BlahBlah Blah Blah BlahBlah Blah Blah BlahBlah Blah Blah BlahBlah Blah Blah BlahBlah Blah Blah BlahBlah Blah Blah BlahBlah Blah Blah BlahBlah Blah Blah BlahBlah Blah Blah BlahBlah Blah Blah BlahBlah Blah Blah BlahBlah Blah Blah BlahBlah Blah Blah BlahBlah Blah Blah BlahBlah Blah Blah BlahBlah Blah Blah BlahBlah  BlahBlah Blah Blah BlahBlah Blah Blah BlahBlah Blah Blah BlahBlah Blah Blah BlahBlah Blah Blah Blah','2014-03-31 18:30:00');
/*!40000 ALTER TABLE `news` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2014-04-21 22:42:46
