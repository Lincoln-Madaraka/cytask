/*M!999999\- enable the sandbox mode */ 
-- MariaDB dump 10.19-11.4.3-MariaDB, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: task_management_db
-- ------------------------------------------------------
-- Server version	11.4.3-MariaDB-1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*M!100616 SET @OLD_NOTE_VERBOSITY=@@NOTE_VERBOSITY, NOTE_VERBOSITY=0 */;

--
-- Table structure for table `notifications`
--

DROP TABLE IF EXISTS `notifications`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `notifications` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `message` text NOT NULL,
  `recipient` int(11) NOT NULL,
  `type` varchar(50) NOT NULL,
  `date` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
  `is_read` tinyint(1) DEFAULT 0,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `notifications`
--

LOCK TABLES `notifications` WRITE;
/*!40000 ALTER TABLE `notifications` DISABLE KEYS */;
INSERT INTO `notifications` VALUES
(1,'\'Github Creation\' has been assigned to you. Please review and start working on it',9,'New Task Assigned','2025-07-12',0),
(2,'\'File Compression\' has been assigned to you. Please review and start working on it',9,'New Task Assigned','2025-07-12',0),
(3,'\'Debuggibg\' has been assigned to you. Please review and start working on it',8,'New Task Assigned','2025-07-12',0),
(4,'\'Kiptoo Orientation\' has been assigned to you. Please review and start working on it',7,'New Task Assigned','2025-07-12',0),
(5,'\'Interview\' has been assigned to you. Please review and start working on it',8,'New Task Assigned','2025-07-12',0),
(6,'\'Amos\' has been assigned to you. Please review and start working on it',2,'New Task Assigned','2025-07-12',0),
(7,'\'Timetabling\' has been assigned to you. Please review and start working on it',10,'New Task Assigned','2025-07-12',0),
(8,'\'Meeting\' has been assigned to you. Please review and start working on it',7,'New Task Assigned','2025-07-12',0),
(9,'\'Admission\' has been assigned to you. Please review and start working on it',11,'New Task Assigned','2025-07-12',0);
/*!40000 ALTER TABLE `notifications` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tasks`
--

DROP TABLE IF EXISTS `tasks`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tasks` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `description` text DEFAULT NULL,
  `assigned_to` int(11) DEFAULT NULL,
  `due_date` date DEFAULT NULL,
  `status` enum('pending','in_progress','completed') DEFAULT 'pending',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  KEY `assigned_to` (`assigned_to`),
  CONSTRAINT `tasks_ibfk_1` FOREIGN KEY (`assigned_to`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tasks`
--

LOCK TABLES `tasks` WRITE;
/*!40000 ALTER TABLE `tasks` DISABLE KEYS */;
INSERT INTO `tasks` VALUES
(29,'File Compression','Compress Files from HR',9,'2025-08-01','in_progress','2025-07-12 12:15:32'),
(30,'Debuggibg','Check Ambanis Code',8,'2025-07-31','pending','2025-07-12 12:16:10'),
(31,'Kiptoo Orientation','Onboard Kiptoo',7,'2025-07-31','completed','2025-07-12 12:17:10'),
(32,'Interview','Orient interns',8,NULL,'pending','2025-07-12 12:35:32'),
(33,'Amos','Another one',2,NULL,'pending','2025-07-12 12:39:35'),
(34,'Timetabling','Create Week Timetable',10,NULL,'pending','2025-07-12 13:33:54'),
(35,'Meeting','A brief report on meetings this week',7,'2025-07-12','pending','2025-07-12 14:38:11'),
(36,'Admission','Reset Admission',11,'2026-03-04','pending','2025-07-12 14:40:46');
/*!40000 ALTER TABLE `tasks` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `full_name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('admin','employee') NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `email` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES
(1,'Oliver','admin','$2y$10$TnyR1Y43m1EIWpb0MiwE8Ocm6rj0F2KojE3PobVfQDo9HYlAHY/7O','admin','2025-07-11 07:10:04',NULL),
(2,'Elias A.','elias','$2y$10$Vx6FCmSzfT.TQPIDN8jiZ.c7hVWMLgsa9eCb8F8clheDaNWmjgcBO','employee','2025-07-11 07:10:40',NULL),
(7,'John','john','$2y$10$CiV/f.jO5vIsSi0Fp1Xe7ubWG9v8uKfC.VfzQr/sjb5/gypWNdlBW','employee','2025-07-11 17:11:21',NULL),
(8,'Oliver','oliver','$2y$10$E9Xx8UCsFcw44lfXxiq/5OJtloW381YJnu5lkn6q6uzIPdL5yH3PO','employee','2025-07-11 17:11:34',NULL),
(9,'Matthew Ambani','Kigen','$2y$10$uSw3ThiNerb6c1Rwk4UH5.JFwW6n33wD9NEDkfO6cFIZNIvdyqVs6','employee','2025-07-11 12:09:16',NULL),
(10,'Kim Jong','asbel','$2y$10$0f0VOf4tLBJzvyKr00XpveeIXv0nJMW/W5bAx0KTHxOKOSNV7Q0kK','employee','2025-07-11 13:33:27',NULL),
(11,'Kimani John','spider','$2y$10$70Ky0lOhEwyBNrddFAAY8u57Kc9M8plvQfrpiOuqh7cWIpLi4ij92','employee','2025-07-11 14:40:16',NULL);
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*M!100616 SET NOTE_VERBOSITY=@OLD_NOTE_VERBOSITY */;

-- Dump completed on 2025-07-13 21:27:18
