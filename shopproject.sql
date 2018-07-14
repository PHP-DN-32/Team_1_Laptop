-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 27, 2018 at 05:05 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shopproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `binhluan`
--

CREATE TABLE `binhluan` (
  `id` int(11) NOT NULL,
  `binhluanID` varchar(20) NOT NULL,
  `sanphamID` varchar(20) DEFAULT NULL,
  `noidung` varchar(500) DEFAULT NULL,
  `thoigian` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `chitietdonhang`
--

CREATE TABLE `chitietdonhang` (
  `id` int(11) NOT NULL,
  `donhangID` varchar(20) NOT NULL,
  `sanphamID` varchar(20) NOT NULL,
  `gia` int(11) DEFAULT NULL,
  `soluong` int(11) DEFAULT NULL,
  `giamgia` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `danhmuc`
--

CREATE TABLE `danhmuc` (
  `id` int(11) NOT NULL,
  `danhmucID` varchar(20) NOT NULL,
  `tendanhmuc` varchar(50) DEFAULT NULL,
  `loai` varchar(50) DEFAULT NULL,
  `mota` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `danhmuc`
--

INSERT INTO `danhmuc` (`id`, `danhmucID`, `tendanhmuc`, `loai`, `mota`) VALUES
(1, 'DM001', 'ASUS', 'Laptop', 'Laptop ASUS'),
(2, 'DM002', 'DELL', 'Laptop', 'Laptop DELL'),
(3, 'DM003', 'Acer', 'Laptop', 'Laptop Acer'),
(4, 'DM004', 'LG', 'Laptop', 'Laptop LG'),
(5, 'DM005', 'HP', 'Laptop', 'Laptop HP'),
(6, 'DM006', 'Lenovo', 'Laptop', 'Laptop Lenovo'),
(7, 'DM007', 'Alienware/Dell', 'Laptop Gaming', 'Laptop gaming Dell Alienware'),
(8, 'DM008', 'MSI Gaming', 'Laptop Gaming', 'Laptop gaming MSI'),
(9, 'DM009', 'Razer', 'Laptop Gaming', 'Laptop gaming Razer'),
(10, 'DM010', 'Asus Republic of Gamers', 'Laptop Gaming', 'Laptop gaming Asus'),
(11, 'DM011', 'Acer Predator', 'Laptop Gaming', 'Laptop gaming Acer'),
(12, 'DM012', 'Macbook Air', 'Apple Macbook', 'Apple Macbook'),
(13, 'DM013', 'Macbook Pro', 'Apple Macbook', 'Apple Macbook'),
(14, 'DM014', 'Macbook Pro Touch', 'Apple Macbook', 'Apple Macbook'),
(15, 'DM015', 'Balo Laptop', 'Phụ kiện', 'Phụ kiện laptop'),
(16, 'DM016', 'Túi chống sốc', 'Phụ kiện', 'Phụ kiện laptop'),
(17, 'DM017', 'Pin Laptop', 'Linh kiện', 'Linh kiện laptop'),
(18, 'DM018', 'Chuột không dây', 'Linh kiện', 'Linh kiện laptop');

-- --------------------------------------------------------

--
-- Table structure for table `donhang`
--

CREATE TABLE `donhang` (
  `id` int(11) NOT NULL,
  `donhangID` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `ngaydat` date DEFAULT NULL,
  `shipperID` varchar(20) DEFAULT NULL,
  `ngaygiao` date DEFAULT NULL,
  `trangthai` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `nsx`
--

CREATE TABLE `nsx` (
  `id` int(11) NOT NULL COMMENT 'Khóa chính tự động tăng',
  `nsxID` varchar(20) NOT NULL COMMENT 'mã nhà sản xuất',
  `tennsx` varchar(100) DEFAULT NULL COMMENT 'tên nhà sản xuất',
  `website` varchar(50) DEFAULT NULL COMMENT 'trang web nhà sản xuất'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `id` int(11) NOT NULL COMMENT 'Khóa chính tự động tăng',
  `sanphamID` varchar(20) NOT NULL COMMENT 'mã sản phẩm',
  `danhmucID` varchar(20) DEFAULT NULL COMMENT 'mã danh mục',
  `nsxID` varchar(20) DEFAULT NULL COMMENT 'mã nhà sản xuất',
  `tensanpham` varchar(100) DEFAULT NULL COMMENT 'tên sản phẩm',
  `gia` int(11) DEFAULT NULL COMMENT 'giá sản phẩm',
  `soluong` int(11) DEFAULT NULL COMMENT 'số lượng sản phẩm còn lại',
  `giamgia` int(11) DEFAULT NULL COMMENT 'phần trăm giảm giá',
  `tìnhtrang` int(2) DEFAULT NULL COMMENT 'tình trạng sản phẩm',
  `thongsokythuat` varchar(500) DEFAULT NULL COMMENT 'thông số kỹ thuật',
  `hinhanh` varchar(200) DEFAULT NULL COMMENT 'hình ảnh sản phẩm'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `shippers`
--

CREATE TABLE `shippers` (
  `id` int(11) NOT NULL,
  `shipperID` varchar(20) NOT NULL,
  `shipperName` varchar(50) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `status` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `taikhoan`
--

CREATE TABLE `taikhoan` (
  `id` int(11) NOT NULL COMMENT 'Khóa chính tự động tăng',
  `username` varchar(20) NOT NULL COMMENT 'Tên đăng nhập',
  `password` varchar(20) NOT NULL COMMENT 'Mật khẩu đăng nhập',
  `hoten` varchar(50) DEFAULT NULL COMMENT 'Tên đầy đủ người dùng',
  `ngaysinh` date DEFAULT NULL COMMENT 'Ngày tháng năm sinh',
  `diachi` varchar(100) DEFAULT NULL COMMENT 'Địa chỉ người dùng',
  `gioitinh` int(2) DEFAULT NULL COMMENT 'giới tính',
  `email` varchar(50) DEFAULT NULL COMMENT 'email',
  `sdt` varchar(20) DEFAULT NULL COMMENT 'số điện thoại',
  `avatar` varchar(100) DEFAULT NULL COMMENT 'ảnh đại diện',
  `trangthai` int(2) DEFAULT NULL COMMENT 'trạng thái',
  `loai` int(2) DEFAULT NULL COMMENT 'phân quyền người dùng'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `binhluanID` (`binhluanID`),
  ADD KEY `sanphamID` (`sanphamID`);

--
-- Indexes for table `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `donhangID` (`donhangID`),
  ADD KEY `sanphamID` (`sanphamID`);

--
-- Indexes for table `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `danhmucID` (`danhmucID`);

--
-- Indexes for table `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `donhangID` (`donhangID`),
  ADD KEY `username` (`username`),
  ADD KEY `shipperID` (`shipperID`);

--
-- Indexes for table `nsx`
--
ALTER TABLE `nsx`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nsxID` (`nsxID`);

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `sanphamID` (`sanphamID`),
  ADD KEY `nsxID` (`nsxID`),
  ADD KEY `danhmucID` (`danhmucID`);

--
-- Indexes for table `shippers`
--
ALTER TABLE `shippers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `shipperID` (`shipperID`);

--
-- Indexes for table `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `donhang`
--
ALTER TABLE `donhang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `nsx`
--
ALTER TABLE `nsx`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Khóa chính tự động tăng';

--
-- AUTO_INCREMENT for table `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Khóa chính tự động tăng';

--
-- AUTO_INCREMENT for table `shippers`
--
ALTER TABLE `shippers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Khóa chính tự động tăng';

--
-- Constraints for dumped tables
--

--
-- Constraints for table `binhluan`
--
ALTER TABLE `binhluan`
  ADD CONSTRAINT `binhluan_ibfk_1` FOREIGN KEY (`sanphamID`) REFERENCES `sanpham` (`sanphamID`);

--
-- Constraints for table `chitietdonhang`
--
ALTER TABLE `chitietdonhang`
  ADD CONSTRAINT `chitietdonhang_ibfk_1` FOREIGN KEY (`donhangID`) REFERENCES `donhang` (`donhangID`),
  ADD CONSTRAINT `chitietdonhang_ibfk_2` FOREIGN KEY (`sanphamID`) REFERENCES `sanpham` (`sanphamID`);

--
-- Constraints for table `donhang`
--
ALTER TABLE `donhang`
  ADD CONSTRAINT `donhang_ibfk_1` FOREIGN KEY (`username`) REFERENCES `taikhoan` (`username`),
  ADD CONSTRAINT `donhang_ibfk_2` FOREIGN KEY (`shipperID`) REFERENCES `shippers` (`shipperID`);

--
-- Constraints for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `sanpham_ibfk_1` FOREIGN KEY (`nsxID`) REFERENCES `nsx` (`nsxID`),
  ADD CONSTRAINT `sanpham_ibfk_2` FOREIGN KEY (`danhmucID`) REFERENCES `danhmuc` (`danhmucID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
