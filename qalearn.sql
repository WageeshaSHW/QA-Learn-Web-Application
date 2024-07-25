-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.7.9-log - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             12.3.0.6589
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for qalearn
CREATE DATABASE IF NOT EXISTS `qalearn` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `qalearn`;

-- Dumping structure for table qalearn.messages
CREATE TABLE IF NOT EXISTS `messages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sender_name` varchar(255) NOT NULL,
  `message` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=latin1;

-- Dumping data for table qalearn.messages: ~11 rows (approximately)
REPLACE INTO `messages` (`id`, `sender_name`, `message`) VALUES
	(1, 'uditha', 'test1'),
	(27, 'Wageesha', '123'),
	(28, 'Wageesha', 'ko'),
	(29, 'Wageesha', 'hi'),
	(30, 'Wageesha', 'Iwant help with Wa things'),
	(31, 'Wageesha', 'fgjdsg'),
	(32, 'Wageesha', 'dfdf'),
	(33, 'Wageesha', 'ereh'),
	(34, 'Wageesha', 'uiougfdxgfgfxjlkjn  ygyu ghg ouuhuioh'),
	(35, 'Uditha', 'Hi wageesha'),
	(36, 'Sathsarani', 'Hi uditha, this is my reply for you question');

-- Dumping structure for table qalearn.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) CHARACTER SET utf8mb4 NOT NULL,
  `email` varchar(50) CHARACTER SET utf8mb4 NOT NULL,
  `password` varchar(50) CHARACTER SET utf8mb4 NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- Dumping data for table qalearn.users: ~3 rows (approximately)
REPLACE INTO `users` (`id`, `name`, `email`, `password`) VALUES
	(3, 'Wageesha', 'wageesha@gmail.com', '123'),
	(4, 'Uditha', 'q@q', '123'),
	(5, 'Sathsarani', 'sathsarani@gmail.com', '123');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
