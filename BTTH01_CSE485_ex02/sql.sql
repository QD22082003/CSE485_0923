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


-- Dumping database structure for btth01_cse485
CREATE DATABASE IF NOT EXISTS `btth01_cse485` /*!40100 DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci */;
USE `btth01_cse485`;

-- Dumping structure for table btth01_cse485.baiviet
CREATE TABLE IF NOT EXISTS `baiviet` (
  `ma_bviet` int(10) unsigned NOT NULL,
  `tieude` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `ten_bhat` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `ma_tloai` int(10) unsigned NOT NULL,
  `tomtat` text CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `noidung` text CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  `ma_tgia` int(10) unsigned NOT NULL,
  `ngayviet` datetime NOT NULL DEFAULT current_timestamp(),
  `hinhanh` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  PRIMARY KEY (`ma_bviet`),
  KEY `ma_tloai` (`ma_tloai`),
  KEY `ma_tgia` (`ma_tgia`),
  CONSTRAINT `baiviet_ibfk_1` FOREIGN KEY (`ma_tloai`) REFERENCES `theloai` (`ma_tloai`),
  CONSTRAINT `baiviet_ibfk_2` FOREIGN KEY (`ma_tgia`) REFERENCES `tacgia` (`ma_tgia`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- Dumping data for table btth01_cse485.baiviet: ~3 rows (approximately)
INSERT INTO `baiviet` (`ma_bviet`, `tieude`, `ten_bhat`, `ma_tloai`, `tomtat`, `noidung`, `ma_tgia`, `ngayviet`, `hinhanh`) VALUES
	(1, 'Chơi như tụi mĩ', 'baihat1', 4, 'noidung1', 'nd1', 1, '2023-09-22 22:39:41', 'hinh1.jpg'),
	(2, 'Tieude1', 'baihat1', 3, 'noidung1', 'nd2', 6, '2023-09-22 22:39:53', 'hinh2.jpg'),
	(3, 'Tieude3', 'baihat3', 2, 'noidung1', 'nd3', 5, '2023-09-22 22:40:08', 'hinh3.jpg');

-- Dumping structure for table btth01_cse485.tacgia
CREATE TABLE IF NOT EXISTS `tacgia` (
  `ma_tgia` int(10) unsigned NOT NULL,
  `ten_tgia` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `hinh_tgia` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL,
  PRIMARY KEY (`ma_tgia`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- Dumping data for table btth01_cse485.tacgia: ~5 rows (approximately)
INSERT INTO `tacgia` (`ma_tgia`, `ten_tgia`, `hinh_tgia`) VALUES
	(1, 'Quang Đạo', 'hinh1.jpg'),
	(2, 'Tác giả 2', 'hinh2.jpg'),
	(3, 'Tác giả 3', 'hinh3.jpg'),
	(5, 'Tác giả 4', 'hinh4.jpg'),
	(6, 'Nhacvietplus', 'hinh5.jpg');

-- Dumping structure for table btth01_cse485.theloai
CREATE TABLE IF NOT EXISTS `theloai` (
  `ma_tloai` int(10) unsigned NOT NULL,
  `ten_tloai` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  PRIMARY KEY (`ma_tloai`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- Dumping data for table btth01_cse485.theloai: ~4 rows (approximately)
INSERT INTO `theloai` (`ma_tloai`, `ten_tloai`) VALUES
	(1, 'Nhạc trữ tình'),
	(2, 'Nhạc dân gian'),
	(3, 'Nhạc rock'),
	(4, 'Nhạc Rap');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
