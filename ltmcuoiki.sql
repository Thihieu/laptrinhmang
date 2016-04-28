-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 04, 2015 at 08:34 PM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cuoiky_php`
--

-- --------------------------------------------------------

--
-- Table structure for table `bandoc`
--

CREATE TABLE IF NOT EXISTS `bandoc` (
`ID` int(11) NOT NULL,
  `MaBanDoc` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `HoTen` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Lop` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `Khoa` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `DiaChi` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `NgaySinh` datetime NOT NULL,
  `GioiTinh` tinyint(1) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=23 ;

--
-- Dumping data for table `bandoc`
--

INSERT INTO `bandoc` (`ID`, `MaBanDoc`, `HoTen`, `Lop`, `Khoa`, `DiaChi`, `NgaySinh`, `GioiTinh`) VALUES
(8, 'SV002', 'Minh QuÃ¢n', 'K62B', 'ToÃ¡n', 'ÄÃ£ Náºµng', '1995-05-06 00:00:00', 1),
(9, 'SV003', 'Lan Anh', 'K63B', 'CNTT', 'HÃ  Ná»™i', '1996-03-02 00:00:00', 0),
(11, 'SV001', 'HoÃ ng VÅ© QuÃ¢n', 'K62B', 'CNTT', 'HÃ  Ná»™i', '1994-03-02 00:00:00', 1),
(12, 'SV004', 'Nháº­t Kim Anh', 'K64A', 'CNTT', 'ThÃ¡i BÃ¬nh', '1994-04-02 00:00:00', 0),
(13, 'SV005', 'QuÃ¢n sÆ° NgÃ´ Dá»¥ng', 'K62B', 'Váº­t lÃ­', 'Nam Äá»‹nh ', '1996-03-02 00:00:00', 1),
(14, 'SV006', 'Tráº§n Thá»‹ Tháº¯m', 'K64A', 'CNTT', 'HÆ°ng YÃªn', '1994-03-05 00:00:00', 0),
(15, 'SV007', 'HoÃ ng Anh Tuáº¥n', 'K62A', 'Tiáº¿ng Anh', 'Báº¯c Ninh', '1994-03-02 00:00:00', 1),
(17, 'SV008', 'Nguyá»…n XuÃ¢n Duy', 'K60C', 'Váº­t lÃ­', 'VÄ©nh PhÃºc', '1996-03-02 00:00:00', 1),
(18, 'SV009', 'Tráº§n Mai Anh', 'K61B', 'ToÃ¡n', 'Háº£i DÆ°Æ¡ng', '1995-05-06 00:00:00', 0),
(19, 'SV010', 'Bin Vi Ã‚y', 'K62B', 'CNTT', 'HÃ  Ná»™i', '1990-07-15 00:00:00', 1),
(20, 'SV011', 'Tráº§n VÃ¢n Anh', 'K64A', 'Ngá»¯ VÄƒn ', 'YÃªn BÃ¡i', '1994-04-02 00:00:00', 0),
(21, 'SV012', 'GiÃ ng A Cá»‘ng', 'K60C', 'Tiáº¿ng Anh', 'Láº¡ng SÆ¡n', '1994-03-05 00:00:00', 1),
(22, 'SV013', 'Tá»‘ng Giang', 'K63B', 'CNTT', 'HÃ  Ná»™i', '1994-03-02 00:00:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `dangnhap`
--

CREATE TABLE IF NOT EXISTS `dangnhap` (
`ID` int(10) unsigned NOT NULL,
  `Username` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `Password` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `HoTen` text COLLATE utf8_unicode_ci NOT NULL,
  `ChucVu` text COLLATE utf8_unicode_ci NOT NULL,
  `DiaChi` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `dangnhap`
--

INSERT INTO `dangnhap` (`ID`, `Username`, `Password`, `HoTen`, `ChucVu`, `DiaChi`) VALUES
(1, '625105005', '', 'Vô Danh', 'Thủ thư', 'Hà Nội'),
(2, '625105006', 'garung1', 'Vô Danh 2', 'Thủ thư', 'Hà Nội');

-- --------------------------------------------------------

--
-- Table structure for table `phieuphat`
--

CREATE TABLE IF NOT EXISTS `phieuphat` (
`id` int(11) NOT NULL,
  `mathemuon` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `mabandoc` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `mucphat` float NOT NULL,
  `lidophat` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `ngaytao` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `sach`
--

CREATE TABLE IF NOT EXISTS `sach` (
`ID` int(11) NOT NULL,
  `MaSach` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `TenSach` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `TacGia` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `TenNXB` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `NamXB` int(4) NOT NULL,
  `ChuyenNganh` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `LoaiSach` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `TinhTrang` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `NgayCapNhat` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sach`
--

INSERT INTO `sach` (`ID`, `MaSach`, `TenSach`, `TacGia`, `TenNXB`, `NamXB`, `ChuyenNganh`, `LoaiSach`, `TinhTrang`, `NgayCapNhat`) VALUES
(1, 'SACH1', 'Lập Trình', 'Văn', 'Hà Nội', 2015, 'Hệ thống', 'Luận Văn', '10', '2015-05-13 21:34:36');

-- --------------------------------------------------------

--
-- Table structure for table `themuon`
--

CREATE TABLE IF NOT EXISTS `themuon` (
`id` int(11) NOT NULL,
  `mathemuon` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `mabandoc` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `ngaymuon` datetime NOT NULL,
  `ngayhentra` datetime NOT NULL,
  `dsmasachmuon` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `ngaytrathucte` datetime NOT NULL,
  `tinhtrangthe` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bandoc`
--
ALTER TABLE `bandoc`
 ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `dangnhap`
--
ALTER TABLE `dangnhap`
 ADD PRIMARY KEY (`ID`), ADD UNIQUE KEY `Username` (`Username`);

--
-- Indexes for table `phieuphat`
--
ALTER TABLE `phieuphat`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sach`
--
ALTER TABLE `sach`
 ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `themuon`
--
ALTER TABLE `themuon`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bandoc`
--
ALTER TABLE `bandoc`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `dangnhap`
--
ALTER TABLE `dangnhap`
MODIFY `ID` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `phieuphat`
--
ALTER TABLE `phieuphat`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `sach`
--
ALTER TABLE `sach`
MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `themuon`
--
ALTER TABLE `themuon`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
