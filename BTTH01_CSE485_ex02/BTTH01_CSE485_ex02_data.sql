INSERT INTO `baiviet` (`ma_bviet`, `tieude`, `ten_bhat`, `ma_tloai`, `tomtat`, `noidung`, `ma_tgia`, `ngayviet`, `hinhanh`) VALUES
	(1, 'Chơi như tụi mĩ', 'baihat1', 4, 'noidung1', 'nd1', 1, '2023-09-22 22:39:41', 'hinh1.jpg'),
	(2, 'Tieude1', 'baihat1', 3, 'noidung1', 'nd2', 6, '2023-09-22 22:39:53', 'hinh2.jpg'),
	(3, 'Tieude3', 'baihat3', 2, 'noidung1', 'nd3', 5, '2023-09-22 22:40:08', 'hinh3.jpg');

-- Dumping data for table btth01_cse485.tacgia: ~5 rows (approximately)
INSERT INTO `tacgia` (`ma_tgia`, `ten_tgia`, `hinh_tgia`) VALUES
	(1, 'Quang Đạo', 'hinh1.jpg'),
	(2, 'Tác giả 2', 'hinh2.jpg'),
	(3, 'Tác giả 3', 'hinh3.jpg'),
	(5, 'Tác giả 4', 'hinh4.jpg'),
	(6, 'Nhacvietplus', 'hinh5.jpg');

-- Dumping data for table btth01_cse485.theloai: ~10 rows (approximately)
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
