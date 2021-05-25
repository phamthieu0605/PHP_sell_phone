-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 02, 2020 at 05:49 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_webshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `admin_id` int(11) NOT NULL,
  `UserName` varchar(100) NOT NULL,
  `PassWord` varchar(100) NOT NULL,
  `admin_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_id`, `UserName`, `PassWord`, `admin_name`) VALUES
(1, 'phamthieu', 'd42b8adefaebf375c7c62777150a67c2', 'Phạm Thiều');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_giohang`
--

CREATE TABLE `tbl_giohang` (
  `GioHang_id` int(11) NOT NULL,
  `SanPham_id` int(11) NOT NULL,
  `TenSanPham` varchar(100) NOT NULL,
  `HinhAnh` varchar(1000) NOT NULL,
  `DonGiaKhuyenMai` varchar(100) NOT NULL,
  `SoLuong` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_giohang`
--

INSERT INTO `tbl_giohang` (`GioHang_id`, `SanPham_id`, `TenSanPham`, `HinhAnh`, `DonGiaKhuyenMai`, `SoLuong`) VALUES
(20, 18, 'Oppo F11', '../ban_dien_thoai/img/mobile/oppo-f11.jpg', '19.990.000đ', 1),
(23, 1, 'Iphone 11', '../ban_dien_thoai/img/mobile/iphone-11.jpg', '19.990.000đ', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_khachhang`
--

CREATE TABLE `tbl_khachhang` (
  `KhachHang_id` int(11) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `FullName` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_khachhang`
--

INSERT INTO `tbl_khachhang` (`KhachHang_id`, `Email`, `Password`, `FullName`) VALUES
(1, 'phamthieu0605@gmail.com', 'd42b8adefaebf375c7c62777150a67c2', 'Phạm Quang Thiều');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_nhasanxuat`
--

CREATE TABLE `tbl_nhasanxuat` (
  `NhaSanXuat_id` int(11) NOT NULL,
  `TenNhaSanXuat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_nhasanxuat`
--

INSERT INTO `tbl_nhasanxuat` (`NhaSanXuat_id`, `TenNhaSanXuat`) VALUES
(1, 'Apple'),
(2, 'Samsung'),
(3, 'Xiaomi'),
(4, 'Oppo'),
(5, 'Huawei'),
(6, 'Bphone'),
(7, 'VSmart'),
(8, 'Nokia'),
(9, 'Realmi');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sanpham`
--

CREATE TABLE `tbl_sanpham` (
  `SanPham_id` int(11) NOT NULL,
  `TenSanPham` varchar(100) NOT NULL,
  `NhaSanXuat_id` int(11) NOT NULL,
  `ManHinh` varchar(100) NOT NULL,
  `HeDieuHanh` varchar(100) NOT NULL,
  `CameraSau` varchar(100) NOT NULL,
  `CameraTruoc` varchar(100) NOT NULL,
  `CPU` varchar(100) NOT NULL,
  `RAM` varchar(100) NOT NULL,
  `ROM` varchar(100) NOT NULL,
  `SDCard` varchar(100) NOT NULL,
  `Pin` varchar(100) NOT NULL,
  `DonGia` varchar(100) NOT NULL,
  `DonGiaKhuyenMai` varchar(100) NOT NULL,
  `Discount` varchar(100) NOT NULL,
  `SoLuong` int(11) NOT NULL,
  `TrangThai` int(11) NOT NULL,
  `HinhAnh` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_sanpham`
--

INSERT INTO `tbl_sanpham` (`SanPham_id`, `TenSanPham`, `NhaSanXuat_id`, `ManHinh`, `HeDieuHanh`, `CameraSau`, `CameraTruoc`, `CPU`, `RAM`, `ROM`, `SDCard`, `Pin`, `DonGia`, `DonGiaKhuyenMai`, `Discount`, `SoLuong`, `TrangThai`, `HinhAnh`) VALUES
(1, 'Iphone 11', 1, '	6.1 inchs, Liquid Retina HD, 828 x 1792 Pixels', '	iOS 13', '	Dual 12MP Ultra Wide and Wide cameras', '	12.0 MP', '	Apple A13 Bionic, 6, Đang cập nhật', '	4 GB', '64 GB', 'Không', '	Lithium-ion', '21.990.000đ', '19.990.000đ', 'Giảm 2.000.000đ', 10, 1, '../ban_dien_thoai/img/mobile/iphone-11.jpg'),
(15, 'Samsung Galaxy S20 Plus', 2, '	6.7 inchs, 2K+, 2K+ (1440 x 3200 Pixels)', '	Android 10.0', '	Chính 12 MP & Phụ 64 MP, 12 MP, TOF 3D\r\n', '	10MP', '	Exynos 990, 8, 2 nhân 2.73 GHz, 2 nhân 2.6 GHz & 4 nhân 2.0 GHz\r\n', '	8 GB', '	128 GB', 'Tối đa 1TB', '	4500 mAh', '23.990.000đ', '19.990.000đ', 'Giảm 4.000.000đ', 10, 1, '../ban_dien_thoai/img/mobile/samsung-galaxy-s20-plus.jpg'),
(16, 'Xiaomi Redmi Note 8', 3, '	6.7 inchs, 2K+, 2K+ (1440 x 3200 Pixels)', '	Android 10.0', '	Chính 12 MP & Phụ 64 MP, 12 MP, TOF 3D\r\n', '	10MP', '	Exynos 990, 8, 2 nhân 2.73 GHz, 2 nhân 2.6 GHz & 4 nhân 2.0 GHz\r\n', '	8 GB', '	128 GB', 'Tối đa 1TB', '	4500 mAh', '23.990.000đ', '19.990.000đ', 'Giảm 4.000.000đ', 10, 1, '../ban_dien_thoai/img/mobile/redmi-note-8.jpg'),
(17, 'Xiaomi Redmi Note 9', 3, '	6.7 inchs, 2K+, 2K+ (1440 x 3200 Pixels)', '	Android 10.0', '	Chính 12 MP & Phụ 64 MP, 12 MP, TOF 3D\r\n', '	10MP', '	Exynos 990, 8, 2 nhân 2.73 GHz, 2 nhân 2.6 GHz & 4 nhân 2.0 GHz\r\n', '	8 GB', '	128 GB', 'Tối đa 1TB', '	4500 mAh', '23.990.000đ', '19.990.000đ', 'Giảm 4.000.000đ', 10, 1, '../ban_dien_thoai/img/mobile/redmi_note9.jpg'),
(18, 'Oppo F11', 4, '	6.7 inchs, 2K+, 2K+ (1440 x 3200 Pixels)', '	Android 10.0', '	Chính 12 MP & Phụ 64 MP, 12 MP, TOF 3D\r\n', '	10MP', '	Exynos 990, 8, 2 nhân 2.73 GHz, 2 nhân 2.6 GHz & 4 nhân 2.0 GHz\r\n', '	8 GB', '	128 GB', 'Tối đa 1TB', '	4500 mAh', '23.990.000đ', '19.990.000đ', 'Giảm 4.000.000đ', 10, 1, '../ban_dien_thoai/img/mobile/oppo-f11.jpg'),
(19, 'Iphone 8 Plus', 1, '	6.7 inchs, 2K+, 2K+ (1440 x 3200 Pixels)', '	Android 10.0', '	Chính 12 MP & Phụ 64 MP, 12 MP, TOF 3D\r\n', '	10MP', '	Exynos 990, 8, 2 nhân 2.73 GHz, 2 nhân 2.6 GHz & 4 nhân 2.0 GHz\r\n', '	8 GB', '	128 GB', 'Tối đa 1TB', '	4500 mAh', '23.990.000đ', '19.990.000đ', 'Giảm 4.000.000đ', 10, 1, '../ban_dien_thoai/img/mobile/iphone-8-plus.jpg'),
(20, 'Iphone X', 1, '	6.7 inchs, 2K+, 2K+ (1440 x 3200 Pixels)', '	Android 10.0', '	Chính 12 MP & Phụ 64 MP, 12 MP, TOF 3D\r\n', '	10MP', '	Exynos 990, 8, 2 nhân 2.73 GHz, 2 nhân 2.6 GHz & 4 nhân 2.0 GHz\r\n', '	8 GB', '	128 GB', 'Tối đa 1TB', '	4500 mAh', '23.990.000đ', '19.990.000đ', 'Giảm 4.000.000đ', 10, 1, '../ban_dien_thoai/img/mobile/iphone-x.jpg'),
(21, 'Bphone 4', 6, '	6.7 inchs, 2K+, 2K+ (1440 x 3200 Pixels)', '	Android 10.0', '	Chính 12 MP & Phụ 64 MP, 12 MP, TOF 3D\r\n', '	10MP', '	Exynos 990, 8, 2 nhân 2.73 GHz, 2 nhân 2.6 GHz & 4 nhân 2.0 GHz\r\n', '	8 GB', '	128 GB', 'Tối đa 1TB', '	4500 mAh', '23.990.000đ', '19.990.000đ', 'Giảm 4.000.000đ', 10, 1, '../ban_dien_thoai/img/mobile/bphone-4.jpg'),
(22, 'Realmi 6', 9, '	6.7 inchs, 2K+, 2K+ (1440 x 3200 Pixels)', '	Android 10.0', '	Chính 12 MP & Phụ 64 MP, 12 MP, TOF 3D\r\n', '	10MP', '	Exynos 990, 8, 2 nhân 2.73 GHz, 2 nhân 2.6 GHz & 4 nhân 2.0 GHz\r\n', '	8 GB', '	128 GB', 'Tối đa 1TB', '	4500 mAh', '23.990.000đ', '19.990.000đ', 'Giảm 4.000.000đ', 10, 1, '../ban_dien_thoai/img/mobile/realme-6.jpg'),
(23, 'Realmi 5 pro', 9, '	6.7 inchs, 2K+, 2K+ (1440 x 3200 Pixels)', '	Android 10.0', '	Chính 12 MP & Phụ 64 MP, 12 MP, TOF 3D\r\n', '	10MP', '	Exynos 990, 8, 2 nhân 2.73 GHz, 2 nhân 2.6 GHz & 4 nhân 2.0 GHz\r\n', '	8 GB', '	128 GB', 'Tối đa 1TB', '	4500 mAh', '23.990.000đ', '19.990.000đ', 'Giảm 4.000.000đ', 10, 1, '../ban_dien_thoai/img/mobile/realme-5-pro.jpg'),
(24, 'VSmart Live', 7, '	6.7 inchs, 2K+, 2K+ (1440 x 3200 Pixels)', '	Android 10.0', '	Chính 12 MP & Phụ 64 MP, 12 MP, TOF 3D\r\n', '	10MP', '	Exynos 990, 8, 2 nhân 2.73 GHz, 2 nhân 2.6 GHz & 4 nhân 2.0 GHz\r\n', '	8 GB', '	128 GB', 'Tối đa 1TB', '	4500 mAh', '23.990.000đ', '19.990.000đ', 'Giảm 4.000.000đ', 10, 1, '../ban_dien_thoai/img/mobile/vsmart-live.jpg'),
(25, 'VSmart Active 3', 7, '	6.7 inchs, 2K+, 2K+ (1440 x 3200 Pixels)', '	Android 10.0', '	Chính 12 MP & Phụ 64 MP, 12 MP, TOF 3D\r\n', '	10MP', '	Exynos 990, 8, 2 nhân 2.73 GHz, 2 nhân 2.6 GHz & 4 nhân 2.0 GHz\r\n', '	8 GB', '	128 GB', 'Tối đa 1TB', '	4500 mAh', '23.990.000đ', '19.990.000đ', 'Giảm 4.000.000đ', 10, 1, '../ban_dien_thoai/img/mobile/vsmart-active-3.jpg'),
(26, 'Nokia 6.1 plus', 8, '	6.7 inchs, 2K+, 2K+ (1440 x 3200 Pixels)', '	Android 10.0', '	Chính 12 MP & Phụ 64 MP, 12 MP, TOF 3D\r\n', '	10MP', '	Exynos 990, 8, 2 nhân 2.73 GHz, 2 nhân 2.6 GHz & 4 nhân 2.0 GHz\r\n', '	8 GB', '	128 GB', 'Tối đa 1TB', '	4500 mAh', '23.990.000đ', '19.990.000đ', 'Giảm 4.000.000đ', 10, 1, '../ban_dien_thoai/img/mobile/nokia-6.1-plus.png'),
(27, 'Nokia 7.2', 8, '	6.7 inchs, 2K+, 2K+ (1440 x 3200 Pixels)', '	Android 10.0', '	Chính 12 MP & Phụ 64 MP, 12 MP, TOF 3D\r\n', '	10MP', '	Exynos 990, 8, 2 nhân 2.73 GHz, 2 nhân 2.6 GHz & 4 nhân 2.0 GHz\r\n', '	8 GB', '	128 GB', 'Tối đa 1TB', '	4500 mAh', '23.990.000đ', '19.990.000đ', 'Giảm 4.000.000đ', 10, 1, '../ban_dien_thoai/img/mobile/nokia-7.2.jpg'),
(28, 'Samsung Galaxy J7 pro', 2, '	6.7 inchs, 2K+, 2K+ (1440 x 3200 Pixels)', '	Android 10.0', '	Chính 12 MP & Phụ 64 MP, 12 MP, TOF 3D\r\n', '	10MP', '	Exynos 990, 8, 2 nhân 2.73 GHz, 2 nhân 2.6 GHz & 4 nhân 2.0 GHz\r\n', '	8 GB', '	128 GB', 'Tối đa 1TB', '	4500 mAh', '23.990.000đ', '19.990.000đ', 'Giảm 4.000.000đ', 10, 1, '../ban_dien_thoai/img/mobile/samsung-galaxy-j7-pro.png'),
(29, 'Huawei Nova 5T', 5, '	6.7 inchs, 2K+, 2K+ (1440 x 3200 Pixels)', '	Android 10.0', '	Chính 12 MP & Phụ 64 MP, 12 MP, TOF 3D\r\n', '	10MP', '	Exynos 990, 8, 2 nhân 2.73 GHz, 2 nhân 2.6 GHz & 4 nhân 2.0 GHz\r\n', '	8 GB', '	128 GB', 'Tối đa 1TB', '	4500 mAh', '23.990.000đ', '19.990.000đ', 'Giảm 4.000.000đ', 10, 1, '../ban_dien_thoai/img/mobile/huawei-nova-5t.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `tbl_giohang`
--
ALTER TABLE `tbl_giohang`
  ADD PRIMARY KEY (`GioHang_id`);

--
-- Indexes for table `tbl_khachhang`
--
ALTER TABLE `tbl_khachhang`
  ADD PRIMARY KEY (`KhachHang_id`);

--
-- Indexes for table `tbl_nhasanxuat`
--
ALTER TABLE `tbl_nhasanxuat`
  ADD PRIMARY KEY (`NhaSanXuat_id`);

--
-- Indexes for table `tbl_sanpham`
--
ALTER TABLE `tbl_sanpham`
  ADD PRIMARY KEY (`SanPham_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_giohang`
--
ALTER TABLE `tbl_giohang`
  MODIFY `GioHang_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `tbl_khachhang`
--
ALTER TABLE `tbl_khachhang`
  MODIFY `KhachHang_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_nhasanxuat`
--
ALTER TABLE `tbl_nhasanxuat`
  MODIFY `NhaSanXuat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `tbl_sanpham`
--
ALTER TABLE `tbl_sanpham`
  MODIFY `SanPham_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
