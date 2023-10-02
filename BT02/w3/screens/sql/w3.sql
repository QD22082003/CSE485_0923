-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               11.1.2-MariaDB - mariadb.org binary distribution
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


-- Dumping database structure for cse
CREATE DATABASE IF NOT EXISTS `cse` /*!40100 DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci */;
USE `cse`;

-- Dumping structure for table cse.user
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `created` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- Dumping data for table cse.user: ~10 rows (approximately)
INSERT INTO `user` (`id`, `fullname`, `password`, `email`, `created`) VALUES
	(3, 'Le Van C', 'passwordC', 'levanc@example.com', '2023-09-03'),
	(4, 'Pham Thi D', 'passwordD', 'phamthid@example.com', '2023-09-04'),
	(5, 'Hoang Van E', 'passwordE', 'hoangvane@example.com', '2023-09-05'),
	(7, 'Tran Van G', 'passwordG', 'tranvang@example.com', '2023-09-07'),
	(8, 'Le Van H', 'passwordH', 'levanh@example.com', '2023-09-08'),
	(10, 'Hoang Van K', 'passwordK', 'hoangvank@example.com', '2023-09-10'),
	(11, 'dao', '1234', 'buiquangdao2k3@gmail.com', '2020-10-12'),
	(12, 'dao', '1234', 'buiquangdao2k3@gmail.com', '2020-10-12'),
	(14, 'dao', '1234', 'buiquangdao2k3@gmail.com', '2020-10-12'),
	(15, 'giang nguu', '1234', 'buiquangdao2k3@gmail.com', '2020-10-12');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
