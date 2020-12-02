-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 30, 2020 at 04:02 PM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cayxanh24h`
--

-- --------------------------------------------------------

--
-- Table structure for table `chitiethoadon`
--

CREATE TABLE `chitiethoadon` (
  `id_hdct` int(10) NOT NULL,
  `mahd` int(11) NOT NULL,
  `idsp` int(11) NOT NULL,
  `soluong` int(11) NOT NULL,
  `gia` int(11) NOT NULL,
  `phuongthucthanhtoan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `chitiethoadon`
--

INSERT INTO `chitiethoadon` (`id_hdct`, `mahd`, `idsp`, `soluong`, `gia`, `phuongthucthanhtoan`) VALUES
(25, 18, 16, 1, 64000, 0),
(26, 18, 17, 1, 79000, 0),
(27, 19, 24, 1, 35000, 0),
(28, 19, 25, 1, 126000, 0);

-- --------------------------------------------------------

--
-- Table structure for table `danhmuc`
--

CREATE TABLE `danhmuc` (
  `madm` int(11) NOT NULL,
  `tendm` varchar(50) NOT NULL,
  `dequi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `danhmuc`
--

INSERT INTO `danhmuc` (`madm`, `tendm`, `dequi`) VALUES
(1, 'Cây Trong Nước', 0),
(2, 'Cây Để Bàn', 0),
(3, 'Cây Phong Thủy', 1),
(4, 'Phụ Kiện', 1),
(5, 'Quà Tặng', 1),
(6, 'Cây Văn Phòng', 1);

-- --------------------------------------------------------

--
-- Table structure for table `hoadon`
--

CREATE TABLE `hoadon` (
  `mahd` int(11) NOT NULL,
  `idnd` int(11) DEFAULT NULL,
  `hoten` varchar(50) NOT NULL,
  `diachi` varchar(50) NOT NULL,
  `dienthoai` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `ngaydathang` date NOT NULL,
  `trangthai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `hoadon`
--

INSERT INTO `hoadon` (`mahd`, `idnd`, `hoten`, `diachi`, `dienthoai`, `email`, `ngaydathang`, `trangthai`) VALUES
(17, 8, 'Nguyễn Tú Quỳnh', 'Từ Sơn', 929807996, 'quynhem070999@gmail.com', '2019-11-26', 1),
(18, 5, 'Nguyễn Thị Quỳnh', 'ĐB - Từ Sơn - Bắc Ninh', 389516520, 'quynhem070999@gmail.com', '2019-11-26', 1),
(19, 8, 'Nguyễn Ngọc', 'Từ Sơn', 967168427, 'ngoc123@gmail.com', '2019-11-26', 1);

-- --------------------------------------------------------

--
-- Table structure for table `nguoidung`
--

CREATE TABLE `nguoidung` (
  `idnd` int(11) NOT NULL,
  `tennd` varchar(255) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `ngaysinh` date NOT NULL,
  `gioitinh` varchar(10) NOT NULL,
  `email` varchar(255) NOT NULL,
  `dienthoai` int(11) NOT NULL,
  `diachi` varchar(255) NOT NULL,
  `ngaydangky` date NOT NULL,
  `phanquyen` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `nguoidung`
--

INSERT INTO `nguoidung` (`idnd`, `tennd`, `username`, `password`, `ngaysinh`, `gioitinh`, `email`, `dienthoai`, `diachi`, `ngaydangky`, `phanquyen`) VALUES
(5, 'Nguyễn Thị Quỳnh', 'admin', '4a7d1ed414474e4033ac29ccb8653d9b', '1999-02-28', 'Nữ', 'quynhem070999@gmail.com@gmail.com', 389516520, 'ĐB - Từ Sơn - Bắc Ninh', '2019-06-28', 0),
(7, 'Nguyễn Tú Quỳnh', 'khach', '4a7d1ed414474e4033ac29ccb8653d9b', '1899-01-01', 'Nam', 'tuquynh@gmail.com', 368498898, 'Đình Bảng - Từ Sơn', '2018-12-12', 1),
(8, 'Tu Quynh', 'quynh123', 'e10adc3949ba59abbe56e057f20f883e', '2020-11-03', 'nu', 'nguyentu@gmail.com', 389516520, 'Tu Son - Bac Ninh', '2020-11-30', 0);

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `idsp` int(11) NOT NULL,
  `tensp` varchar(50) NOT NULL,
  `hinhanh` varchar(255) NOT NULL,
  `mau` varchar(20) NOT NULL,
  `chitiet` text NOT NULL,
  `soluong` int(11) NOT NULL,
  `daban` int(11) NOT NULL,
  `gia` int(11) NOT NULL,
  `khuyenmai1` int(11) NOT NULL,
  `khuyenmai2` varchar(255) NOT NULL,
  `madm` int(11) NOT NULL,
  `ngaycapnhat` date NOT NULL,
  `trangthai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`idsp`, `tensp`, `hinhanh`, `mau`, `chitiet`, `soluong`, `daban`, `gia`, `khuyenmai1`, `khuyenmai2`, `madm`, `ngaycapnhat`, `trangthai`) VALUES
(16, 'Cây trầu bà', 'trauba_caytrongnuoc.jpg', 'Xanh', 'Cây trầu bà giúp làm sạch không khí trong nhà, nếu trong nhà có máy in hoặc máy photo thì nên để cây gần đó vì cây có thể hút những phóng xạ từ máy.', 13, 7, 64000, 0, 'Tặng Kèm Chậu', 1, '2014-05-20', 0),
(17, 'May Mắn Khối', 'caymaymankhoi.jpg', 'Xanh', 'Cây còn có tên gọi là Tài Lộc, gợi lên sự sung túc, mang lại vượng khí cho gia chủ.', 15, 5, 79000, 0, '', 2, '2014-05-20', 0),
(24, 'Chậu Thủy Tinh', 'chauthuytinh.jpg', 'Trắng Trong', '', 16, 4, 35000, 0, '', 4, '2014-05-20', 0),
(25, 'Ngọc Bích', 'ngocbich.jpg', 'Xanh', '', 20, 0, 126000, 0, '', 1, '2014-05-20', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  ADD PRIMARY KEY (`id_hdct`),
  ADD KEY `fk_cthoadon_mahd` (`mahd`),
  ADD KEY `fk_sanpham_idsp` (`idsp`);

--
-- Indexes for table `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`madm`);

--
-- Indexes for table `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`mahd`),
  ADD KEY `fk_hoadon_idnd` (`idnd`);

--
-- Indexes for table `nguoidung`
--
ALTER TABLE `nguoidung`
  ADD PRIMARY KEY (`idnd`);

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`idsp`),
  ADD KEY `fk_sanpham_madm` (`madm`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  MODIFY `id_hdct` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `madm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `hoadon`
--
ALTER TABLE `hoadon`
  MODIFY `mahd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `nguoidung`
--
ALTER TABLE `nguoidung`
  MODIFY `idnd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `idsp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=116;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  ADD CONSTRAINT `fk_cthoadon_mahd` FOREIGN KEY (`mahd`) REFERENCES `hoadon` (`mahd`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_sanpham_idsp` FOREIGN KEY (`idsp`) REFERENCES `sanpham` (`idsp`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `hoadon`
--
ALTER TABLE `hoadon`
  ADD CONSTRAINT `fk_hoadon_idnd` FOREIGN KEY (`idnd`) REFERENCES `nguoidung` (`idnd`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `fk_sanpham_madm` FOREIGN KEY (`madm`) REFERENCES `danhmuc` (`madm`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
