-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 24, 2016 at 04:00 PM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_nhom_8`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cart`
--

CREATE TABLE `tbl_cart` (
  `ct_id` int(10) UNSIGNED NOT NULL,
  `pd_id` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `ct_qty` mediumint(8) UNSIGNED NOT NULL DEFAULT '1',
  `ct_session_id` char(32) NOT NULL DEFAULT '',
  `ct_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_cart`
--

INSERT INTO `tbl_cart` (`ct_id`, `pd_id`, `ct_qty`, `ct_session_id`, `ct_date`) VALUES
(89, 1, 1, 'n?i dung', '2016-04-13 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `cat_id` int(10) UNSIGNED NOT NULL,
  `cat_parent_id` int(11) NOT NULL DEFAULT '0',
  `cat_name` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `cat_description` varchar(200) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `cat_image` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`cat_id`, `cat_parent_id`, `cat_name`, `cat_description`, `cat_image`) VALUES
(1, 0, 'Thời trang nam ', 'Quần áo thời trang nam\r\n', '/images/photos/img-product2.jpg'),
(2, 0, 'Thời trang nữ', 'Quần áo thời trang nữ cùng phụ kiện nữ ', '/images/photos/img-product2.jpg'),
(23, 0, 'Thời trang trẻ em', 'Tổng hợp thời trang trẻ em ', '/images/photos/img-product2.jpg'),
(24, 0, 'Quần-áo', 'Quần áo thời trang cho mọi lứa tuổi ', '/images/photos/img-product2.jpg'),
(25, 0, 'Giày-dép', 'Giày dép thời trang cho mọi lứa tuổi ', '/images/photos/img-product2.jpg'),
(26, 0, 'Phụ kiện khác', 'Các phụ kiện thời trang ', '/images/photos/img-product2.jpg'),
(27, 0, '', '', '/images/photos/img-product2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

CREATE TABLE `tbl_order` (
  `od_id` int(10) UNSIGNED NOT NULL,
  `od_date` datetime DEFAULT NULL,
  `od_last_update` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `od_status` enum('New','Paid','Shipped','Completed','Cancelled') NOT NULL DEFAULT 'New',
  `od_memo` varchar(255) NOT NULL DEFAULT '',
  `od_shipping_first_name` varchar(50) NOT NULL DEFAULT '',
  `od_shipping_last_name` varchar(50) NOT NULL DEFAULT '',
  `od_shipping_address1` varchar(100) NOT NULL DEFAULT '',
  `od_shipping_address2` varchar(100) NOT NULL DEFAULT '',
  `od_shipping_phone` varchar(32) NOT NULL DEFAULT '',
  `od_shipping_city` varchar(100) NOT NULL DEFAULT '',
  `od_shipping_state` varchar(32) NOT NULL DEFAULT '',
  `od_shipping_postal_code` varchar(10) NOT NULL DEFAULT '',
  `od_shipping_cost` decimal(5,2) DEFAULT '0.00',
  `od_payment_first_name` varchar(50) NOT NULL DEFAULT '',
  `od_payment_last_name` varchar(50) NOT NULL DEFAULT '',
  `od_payment_address1` varchar(100) NOT NULL DEFAULT '',
  `od_payment_address2` varchar(100) NOT NULL DEFAULT '',
  `od_payment_phone` varchar(32) NOT NULL DEFAULT '',
  `od_payment_city` varchar(100) NOT NULL DEFAULT '',
  `od_payment_state` varchar(32) NOT NULL DEFAULT '',
  `od_payment_postal_code` varchar(10) NOT NULL DEFAULT ''
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order_item`
--

CREATE TABLE `tbl_order_item` (
  `od_id` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `pd_id` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `od_qty` int(10) UNSIGNED NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `pro_id` int(10) UNSIGNED NOT NULL,
  `id_cat` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `pro_name` varchar(100) NOT NULL DEFAULT '',
  `pro_des` text NOT NULL,
  `pro_price` decimal(9,2) NOT NULL DEFAULT '0.00',
  `pro_qty` smallint(5) UNSIGNED NOT NULL DEFAULT '0',
  `pro_image` varchar(200) DEFAULT NULL,
  `sale` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`pro_id`, `id_cat`, `pro_name`, `pro_des`, `pro_price`, `pro_qty`, `pro_image`, `sale`) VALUES
(93, 0, 'Áo Vest n?', 'Áo vest dành cho n? công s?', '50000.00', 0, '/images/photos/img-product2.jpg', 20),
(1, 0, 'Áo Vest n?', 'Áo vest dành cho n? công s?', '53300.00', 0, '/images/photos/img-product2.jpg', 10),
(94, 0, 'Áo Vest N?', 'áo dành cho n?', '53000.00', 1, '/images/photos/img-product2.jpg', 12),
(95, 25, 'Áo Ba Lô', 'Áo dành cho n?', '60000.00', 1, '/images/photos/img-product2.jpg', 12),
(96, 26, 'Váy n? ', 'váy  n? công s? ', '60000.00', 0, '/images/photos/img-product2.jpg', 10),
(97, 26, 'Áo s? mi n? ', 'Áo s? mi dành cho n? ', '50000.00', 0, '/images/photos/img-product2.jpg', 30),
(98, 0, 'Áo Vest', 'Áo vest dành cho n? công s?', '56000.00', 0, '/images/photos/img-product2.jpg', 10),
(99, 0, 'Vest công s?', 'Áo vest dành cho nh?ng ng??i công s? ', '70000.00', 0, '/images/photos/img-product2.jpg', 10);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `user_name` varchar(20) NOT NULL DEFAULT '',
  `password` varchar(32) NOT NULL DEFAULT '',
  `permision` int(11) NOT NULL,
  `fullname` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`user_id`, `user_name`, `password`, `permision`, `fullname`) VALUES
(5, 'admin', 'admin123', 1, ''),
(6, 'admin2', 'admin123', 0, 'Pham Minh Vuong');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_cart`
--
ALTER TABLE `tbl_cart`
  ADD PRIMARY KEY (`ct_id`),
  ADD KEY `pd_id` (`pd_id`),
  ADD KEY `ct_session_id` (`ct_session_id`);

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`cat_id`),
  ADD KEY `cat_parent_id` (`cat_parent_id`),
  ADD KEY `cat_name` (`cat_name`);

--
-- Indexes for table `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`od_id`);

--
-- Indexes for table `tbl_order_item`
--
ALTER TABLE `tbl_order_item`
  ADD PRIMARY KEY (`od_id`,`pd_id`);

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`pro_id`),
  ADD KEY `cat_id` (`id_cat`),
  ADD KEY `pd_name` (`pro_name`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `user_name` (`user_name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_cart`
--
ALTER TABLE `tbl_cart`
  MODIFY `ct_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;
--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `cat_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `od_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1007;
--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `pro_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;
--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `user_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
