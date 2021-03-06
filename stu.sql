-- MySQL dump 10.13  Distrib 5.7.26, for Win64 (x86_64)
--
-- Host: localhost    Database: student
-- ------------------------------------------------------
-- Server version	5.7.26

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
-- Table structure for table `student`
--

DROP TABLE IF EXISTS `student`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `student` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(12) DEFAULT NULL,
  `sex` enum('鐢?,'濂?) DEFAULT '鐢?,
  `age` tinyint(4) DEFAULT '24',
  `edu` enum('鍒濅腑','楂樹腑','澶т笓','鏈','鐮旂┒鐢?) DEFAULT '澶т笓',
  `salary` float(8,2) unsigned DEFAULT '0.00',
  `bonus` float(6,2) unsigned DEFAULT '0.00',
  `city` varchar(32) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `student`
--

LOCK TABLES `student` WRITE;
/*!40000 ALTER TABLE `student` DISABLE KEYS */;
INSERT INTO `student` VALUES (1,'寮犱笁','鐢?,24,'澶т笓',6200.00,1000.00,'鍖椾含'),(2,'鏉庡洓','鐢?,26,'鏈',5000.00,200.00,'澶╂触'),(3,'鐜嬩簲','濂?,20,'鐮旂┒鐢?,2000.00,500.00,'涓婃捣'),(4,'鏉庨潤','濂?,24,'鍒濅腑',3000.00,0.00,'骞垮窞'),(5,'闈欓','濂?,22,'澶т笓',4000.00,230.00,'鍗楁槍'),(6,'璧靛叚','鐢?,30,'鐮旂┒鐢?,8000.00,1000.00,'娣卞湷'),(7,'闄堜繆','鐢?,18,'澶т笓',4500.00,500.00,'娣卞湷'),(18,'鍛ㄤ簲','鐢?,26,'鏈',9000.00,200.00,'姹熻タ'),(9,'闄堜緝渚?,'鐢?,30,'鏈',5000.00,600.00,'浣涘北'),(10,'鍒樻','濂?,25,'澶т笓',6000.00,600.00,'婀涙睙'),(11,'鍒樺啗','鐢?,24,'鏈',6000.00,800.00,'娣卞湷'),(12,'鍒樹附','濂?,24,'鏈',7000.00,600.00,'鍖椾含'),(13,'鏉庢箻','濂?,24,'鐮旂┒鐢?,10000.00,2000.00,'鍖椾含'),(16,'璧垫晱','濂?,24,'澶т笓',7500.00,0.00,'涓婃捣'),(17,'鏉庢瞾','濂?,24,'澶т笓',9000.00,200.00,'姝︽眽');
/*!40000 ALTER TABLE `student` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-02-06 22:01:29
