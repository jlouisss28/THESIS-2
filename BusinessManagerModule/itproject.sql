CREATE DATABASE  IF NOT EXISTS `itproject` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `itproject`;
-- MySQL dump 10.13  Distrib 5.7.17, for Win64 (x86_64)
--
-- Host: localhost    Database: itproject
-- ------------------------------------------------------
-- Server version	5.7.14

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
-- Table structure for table `delivery`
--

DROP TABLE IF EXISTS `delivery`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `delivery` (
  `delivery_ID` int(11) NOT NULL,
  `deliveryDate` varchar(45) DEFAULT NULL,
  `deliveryStatus` varchar(45) DEFAULT NULL,
  `remarks` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`delivery_ID`),
  UNIQUE KEY `delivery_ID_UNIQUE` (`delivery_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `delivery`
--

LOCK TABLES `delivery` WRITE;
/*!40000 ALTER TABLE `delivery` DISABLE KEYS */;
/*!40000 ALTER TABLE `delivery` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `departments`
--

DROP TABLE IF EXISTS `departments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `departments` (
  `department_ID` int(11) NOT NULL,
  `departmentName` varchar(45) NOT NULL,
  `branchLocation` varchar(45) NOT NULL,
  PRIMARY KEY (`department_ID`),
  UNIQUE KEY `department_ID_UNIQUE` (`department_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `departments`
--

LOCK TABLES `departments` WRITE;
/*!40000 ALTER TABLE `departments` DISABLE KEYS */;
INSERT INTO `departments` VALUES (1,'Cardiac Department','Baguio City'),(2,'Clinical Laboratory Department','Baguio City'),(3,'Clinical Laboratory Department','La Trinidad'),(4,'Endoscopy Department','Baguio City'),(5,'Endoscopy Unit','SLU Hospital, Baguio City'),(6,'Imaging Department','Baguio City'),(7,'Imaging Department','La Trinidad'),(8,'Imaging Department','Baguio City'),(9,'Managing Department','Baguio City');
/*!40000 ALTER TABLE `departments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `invoice`
--

DROP TABLE IF EXISTS `invoice`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `invoice` (
  `invoice_ID` int(11) NOT NULL,
  `invoiceDate` varchar(45) DEFAULT NULL,
  `terms` varchar(45) DEFAULT NULL,
  `quantity` varchar(45) DEFAULT NULL,
  `unitPrice` varchar(45) DEFAULT NULL,
  `amount` varchar(45) DEFAULT NULL,
  `totalAmount` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`invoice_ID`),
  UNIQUE KEY `invoice_ID_UNIQUE` (`invoice_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `invoice`
--

LOCK TABLES `invoice` WRITE;
/*!40000 ALTER TABLE `invoice` DISABLE KEYS */;
/*!40000 ALTER TABLE `invoice` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `itemrequest`
--

DROP TABLE IF EXISTS `itemrequest`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `itemrequest` (
  `requisition_ID` int(11) NOT NULL,
  `status` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`requisition_ID`),
  UNIQUE KEY `requisition_ID_UNIQUE` (`requisition_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `itemrequest`
--

LOCK TABLES `itemrequest` WRITE;
/*!40000 ALTER TABLE `itemrequest` DISABLE KEYS */;
/*!40000 ALTER TABLE `itemrequest` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `purchaseorder`
--

DROP TABLE IF EXISTS `purchaseorder`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `purchaseorder` (
  `po_ID` int(11) NOT NULL,
  `description` varchar(45) DEFAULT NULL,
  `totalAmt` varchar(45) DEFAULT NULL,
  `grandTotal` varchar(45) DEFAULT NULL,
  `remarks` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`po_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `purchaseorder`
--

LOCK TABLES `purchaseorder` WRITE;
/*!40000 ALTER TABLE `purchaseorder` DISABLE KEYS */;
/*!40000 ALTER TABLE `purchaseorder` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `purchaseordersupplies`
--

DROP TABLE IF EXISTS `purchaseordersupplies`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `purchaseordersupplies` (
  `orderDate` int(11) NOT NULL,
  `quantity` varchar(45) DEFAULT NULL,
  `unitPrice` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`orderDate`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `purchaseordersupplies`
--

LOCK TABLES `purchaseordersupplies` WRITE;
/*!40000 ALTER TABLE `purchaseordersupplies` DISABLE KEYS */;
/*!40000 ALTER TABLE `purchaseordersupplies` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `requestsuppliers`
--

DROP TABLE IF EXISTS `requestsuppliers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `requestsuppliers` (
  `requestDate` int(11) NOT NULL,
  `quantityOrdered` varchar(45) DEFAULT NULL,
  `issuedDate` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`requestDate`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `requestsuppliers`
--

LOCK TABLES `requestsuppliers` WRITE;
/*!40000 ALTER TABLE `requestsuppliers` DISABLE KEYS */;
/*!40000 ALTER TABLE `requestsuppliers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `returns`
--

DROP TABLE IF EXISTS `returns`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `returns` (
  `return_ID` int(11) NOT NULL,
  `cost` varchar(45) DEFAULT NULL,
  `returnDate` varchar(45) DEFAULT NULL,
  `quantityReturned` varchar(45) DEFAULT NULL,
  `reason` varchar(45) DEFAULT NULL,
  `status` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`return_ID`),
  UNIQUE KEY `return_ID_UNIQUE` (`return_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `returns`
--

LOCK TABLES `returns` WRITE;
/*!40000 ALTER TABLE `returns` DISABLE KEYS */;
/*!40000 ALTER TABLE `returns` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `suppliers`
--

DROP TABLE IF EXISTS `suppliers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `suppliers` (
  `suppliers_ID` int(11) NOT NULL,
  `companyName` varchar(45) NOT NULL,
  `supplierContact` varchar(45) NOT NULL,
  `supplierAddr` varchar(45) NOT NULL,
  `supplierStatus` enum('Active','Inactive') NOT NULL DEFAULT 'Active',
  `supplierProduct` enum('Medical','Office') NOT NULL,
  `suppierRemarks` varchar(1000) DEFAULT NULL,
  PRIMARY KEY (`suppliers_ID`),
  UNIQUE KEY `supplierContact_UNIQUE` (`supplierContact`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `suppliers`
--

LOCK TABLES `suppliers` WRITE;
/*!40000 ALTER TABLE `suppliers` DISABLE KEYS */;
INSERT INTO `suppliers` VALUES (1,'Curamed Pharmacy','09784563254','Baguio, City','Active','Medical',NULL),(2,'Generika','09965487569','Baguio, City','Active','Medical',NULL),(3,'JCP Enterprise','09456127831','Baguio, City','Active','Office','Supplies Cactus Long Bond Paper'),(4,'Laser Marketing','09563456123','Baguio, City','Active','Office',NULL),(5,'Mercury Drug','09456123874','Baguio, City','Active','Medical','Did not followed the delivery date many times'),(6,'Pandayan Bookshop','09562314365','Baguio, City','Active','Office',NULL),(7,'St. Joseph Pharmacy','09231568927','Baguio, City','Active','Medical',NULL),(8,'The Generics Pharmacy','09564217831','Baguio, City','Active','Medical',NULL),(9,'UB Square','09789887561','Baguio, City','Active','Office',NULL);
/*!40000 ALTER TABLE `suppliers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `supplies`
--

DROP TABLE IF EXISTS `supplies`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `supplies` (
  `supply_ID` int(11) NOT NULL,
  `supplyType` enum('Medical','Office') NOT NULL,
  `supplyDesc` varchar(45) NOT NULL,
  `brandName` varchar(45) DEFAULT NULL,
  `subUnit` varchar(45) DEFAULT NULL,
  `unit` varchar(45) NOT NULL,
  `unitInStock` varchar(45) NOT NULL,
  `unitPrice` varchar(45) NOT NULL,
  `unitsInOrder` varchar(45) DEFAULT NULL,
  `reorderLevel` varchar(45) NOT NULL,
  `expirationDate` varchar(45) CHARACTER SET dec8 DEFAULT NULL,
  `shelfLife` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`supply_ID`),
  UNIQUE KEY `supply_ID_UNIQUE` (`supply_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `supplies`
--

LOCK TABLES `supplies` WRITE;
/*!40000 ALTER TABLE `supplies` DISABLE KEYS */;
INSERT INTO `supplies` VALUES (1,'Medical','Red Tap Tubes',NULL,NULL,'pieces','100','100',NULL,'50','',NULL),(2,'Medical','Violet Tap Tubes',NULL,NULL,'pieces','100','100',NULL,'50',NULL,NULL),(3,'Medical','Cotton',NULL,NULL,'pieces','300','23',NULL,'50',NULL,NULL),(4,'Medical','Syringe',NULL,NULL,'pieces','20','100',NULL,'400',NULL,NULL),(5,'Medical','Alcohol',NULL,NULL,'pieces','80','35',NULL,'45',NULL,NULL),(6,'Medical','Face Mask',NULL,NULL,'boxes','15','120',NULL,'20',NULL,NULL),(7,'Medical','Gauze',NULL,NULL,'pieces','100','10',NULL,'360',NULL,NULL),(8,'Office','Black Ink',NULL,NULL,'carts','33','400',NULL,'3',NULL,NULL),(9,'Office','Short Bond Paper',NULL,NULL,'ream','200','250',NULL,'40',NULL,NULL),(10,'Office','Ballpen',NULL,NULL,'boxes','50','400',NULL,'3',NULL,NULL),(11,'Office','CD',NULL,NULL,'pieces','100','30',NULL,'20',NULL,NULL),(12,'Office','Long Coupon Bond',NULL,NULL,'ream','50','400',NULL,'40',NULL,NULL),(13,'Office','Black Marker',NULL,NULL,'boxes','30','80',NULL,'10',NULL,NULL),(14,'Office','Red Ink',NULL,NULL,'carts','20','350',NULL,'3',NULL,NULL);
/*!40000 ALTER TABLE `supplies` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `user_ID` int(11) NOT NULL,
  `user_type` varchar(45) DEFAULT NULL,
  `username` varchar(45) NOT NULL,
  `lname` varchar(45) NOT NULL,
  `fname` varchar(45) NOT NULL,
  `user_contact` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `status` enum('Active','Inactive') NOT NULL DEFAULT 'Active',
  PRIMARY KEY (`user_ID`),
  UNIQUE KEY `user_contact_UNIQUE` (`user_contact`),
  UNIQUE KEY `email_UNIQUE` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'','PMngbayan123','Bigornia','Krizzhia','0916453781','kbigornia@gmail.com','Active'),(2,NULL,'Nathaniel01','Calimlim','Nathaniel','09456872315','ncalimlim@gmail.com','Active'),(3,NULL,'ElijahFive','Duco','Elijah','09326154230','educo@gmail.com','Active'),(4,NULL,'JanbyC','Calub','Janby','09461237852','jcalub@gmail.com','Active'),(5,NULL,'Tyrone69','Soy','Tyrone','09135345345','tsoy@gmail.com','Active'),(6,NULL,'JomTheGreat','Malong','Jose','09874334562','jmalong@gmail.com','Active'),(7,NULL,'RenzIvan','Siapno','Renz','09873461235','rsiapno@gmail.com','Active'),(8,NULL,'DucoforPresident','Duco','Leander','09445645986','dlduco@gmail.com','Active'),(9,NULL,'Usernamekoto','Soy','Joshua','09166418560','	tj@gmail.com','Active');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'itproject'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2018-01-18 21:33:49
