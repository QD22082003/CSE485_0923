-- Dumping data for table btth01_cse485.baiviet: ~3 rows (approximately)
INSERT INTO `baiviet` (`ma_bviet`, `tieude`, `ten_bhat`, `ma_tloai`, `tomtat`, `noidung`, `ma_tgia`, `ngayviet`, `hinhanh`) VALUES
	(1, 'Tieude1', 'baihat1', 1, 'noidung1', 'nd1', 11, '2023-09-22 22:39:41', 'hinh.jpg'),
	(2, 'Tieude1', 'baihat1', 3, 'noidung1', 'nd1', 11, '2023-09-22 22:39:53', 'hinh.jpg'),
	(3, 'Tieude3', 'baihat3', 4, 'noidung1', 'nd1', 4, '2023-09-22 22:40:08', 'hinh.jpg');

-- Dumping data for table btth01_cse485.tacgia: ~5 rows (approximately)
INSERT INTO `tacgia` (`ma_tgia`, `ten_tgia`, `hinh_tgia`) VALUES
	(1, 'QuangDao', 'hinh2.jpg'),
	(2, 'QuangDao', 'hinh2.jpg'),
	(3, 'QuangDao', 'hinh2.jpg'),
	(4, 'Giang', 'hinh2.jpg'),
	(11, 'Nhacvietplus', 'hinh11.jpg');

-- Dumping data for table btth01_cse485.theloai: ~10 rows (approximately)
INSERT INTO `theloai` (`ma_tloai`, `ten_tloai`) VALUES
	(1, 'Theloai1'),
	(2, 'Theloai 2'),
	(3, 'Theloai 3'),
	(4, 'Theloai4 4'),
	(5, 'Theloai 5'),
	(6, 'Theloat 6'),
	(7, 'Theloai 7'),
	(8, 'Theloai 8'),
	(9, 'Theloai 9'),
	(10, 'Theloai 10');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;