CREATE DATABASE  IF NOT EXISTS `cadastro-mtvx` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_vi_0900_as_cs */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `cadastro-mtvx`;
-- MySQL dump 10.13  Distrib 8.0.33, for Win64 (x86_64)
--
-- Host: localhost    Database: cadastro-mtvx
-- ------------------------------------------------------
-- Server version	8.0.31

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) COLLATE utf8mb4_vi_0900_as_cs NOT NULL,
  `email` varchar(45) COLLATE utf8mb4_vi_0900_as_cs NOT NULL,
  `tel` varchar(45) COLLATE utf8mb4_vi_0900_as_cs NOT NULL,
  `laboratorio` varchar(45) COLLATE utf8mb4_vi_0900_as_cs NOT NULL,
  `data_reserva` date NOT NULL,
  `horario_inicio` time NOT NULL,
  `horario_fim` varchar(45) COLLATE utf8mb4_vi_0900_as_cs NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=33 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vi_0900_as_cs;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (28,'drjulio','julio@gmail','11111','lab2','2023-06-30','17:31:00','22:31'),(7,'Mario','marioduserra@gmail','02799112292','lab1','2023-06-27','16:04:00','22:05'),(6,'jean','jeanduserra@gmail','02712345567','lab2','2023-06-16','14:04:00','17:05'),(5,'jean','jeanduserra@gmail','02712345567','lab2','2023-06-16','14:04:00','17:05'),(22,'mario','mario@gmail.com','123123','lab1','2023-06-15','14:55:00','20:55'),(21,'PAULO','paulo@gmail','1111111','lab2','2023-06-22','02:53:00','16:53'),(19,'maria','maria@gmail','912212112','lab2','2023-06-21','08:43:00','13:43'),(23,'mario','jean@gmail.com','90909000','lab1','2023-06-15','14:55:00','20:55'),(24,'oliva','oliva@gmail','279921921','','2023-06-21','15:29:00','19:29'),(29,'dr ze','ze@gmail','12451','lab1','2023-06-29','00:33:00','04:33'),(26,'dadalto','dadalto','27000000000','lab1','2023-06-14','06:30:00','12:30'),(27,'drjulio','julio@gmail','11111','lab2','2023-06-30','17:31:00','22:31'),(30,'dr ze','ze@gmail','12451','lab1','2023-06-29','00:33:00','04:33'),(31,'dr ze','ze@gmail','12451','lab1','2023-06-29','00:33:00','04:33'),(32,'dr ze','ze@gmail','12451','lab1','2023-06-29','00:33:00','04:33');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'cadastro-mtvx'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-06-11 22:52:44
