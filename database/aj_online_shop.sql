-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 18, 2020 at 07:48 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aj_online_shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `a_id` int(10) NOT NULL,
  `a_unm` varchar(50) NOT NULL,
  `a_pwd` varchar(50) NOT NULL,
  `a_time` bigint(100) NOT NULL,
  `a_status` int(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`a_id`, `a_unm`, `a_pwd`, `a_time`, `a_status`) VALUES
(1, 'admin', 'admin', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cat_id` int(10) NOT NULL,
  `cat_nm` varchar(100) NOT NULL,
  `cat_image` longtext NOT NULL,
  `cat_time` int(100) NOT NULL,
  `cat_status` int(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `cat_nm`, `cat_image`, `cat_time`, `cat_status`) VALUES
(1, 'mobile', '1605445315_HUAWEI_P40_Pro_Silver_back.jpg', 1605444717, 1),
(2, 'tv', '1605444787_jFCLNMQL7G7E7xdBYubSWJ-768-80.jpg', 1605444787, 1),
(3, 'washing machine', '1605444847_1589924244-titanium-electrolux-front-load-washers-efls627utt-64_600.jpg', 1605444847, 1),
(4, 'refrigerator', '1605444984_top_bottom.png', 1605444909, 1),
(5, 'oven', '1605444940_ezgif-3-082d0abba336.jpg', 1605444940, 1),
(7, 'laptop', '1605455325_tablet-hybrid.jpg', 1605455325, 1);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `c_id` int(10) NOT NULL,
  `c_nm` varchar(20) NOT NULL,
  `c_mno` int(10) NOT NULL,
  `c_email` varchar(50) NOT NULL,
  `c_msg` varchar(120) NOT NULL,
  `c_time` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`c_id`, `c_nm`, `c_mno`, `c_email`, `c_msg`, `c_time`) VALUES
(1, 'Abhi Jasani', 2147483647, 'abhijasani7@gmail.com', '', 1605594254),
(2, 'Abhi Jasani', 2147483647, 'abhijasani7@gmail.com', 'hello good website dear ', 1605594457),
(3, 'Abhi Jasani', 2147483647, 'abhijasani7@gmail.com', 'sdfghjk', 1605594632),
(4, 'vivek', 2147483647, 'vivek@gmail.com', 'vivek patel hoo', 1605594809);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `o_id` int(10) NOT NULL,
  `o_nm` varchar(100) NOT NULL,
  `o_uid` int(5) NOT NULL,
  `o_mno` int(10) NOT NULL,
  `o_qty` int(20) NOT NULL,
  `o_rate` int(20) NOT NULL,
  `o_total` int(25) NOT NULL,
  `o_city` varchar(25) NOT NULL,
  `o_add` varchar(125) NOT NULL,
  `o_time` int(20) NOT NULL,
  `o_status` int(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`o_id`, `o_nm`, `o_uid`, `o_mno`, `o_qty`, `o_rate`, `o_total`, `o_city`, `o_add`, `o_time`, `o_status`) VALUES
(1, 'samsung QLED  hd 4K ultra smart tv', 9, 2147483647, 3, 287997, 437967, 'Ta-kutiyana', 'Main bazar,\r\nKhageshir', 1605709974, 1),
(2, 'panasonic 4K ultra hd android smart led tv', 9, 2147483647, 3, 149970, 437967, 'Ta-kutiyana', 'Main bazar,\r\nKhageshir', 1605709974, 1),
(3, 'samsung QLED  hd 4K ultra smart tv', 9, 902345053, 8, 767992, 767992, 'Ta-kutiyana', 'Main bazar,\r\nKhageshir', 1605710213, 1),
(4, 'samsung QLED  hd 4K ultra smart tv', 2, 2147483647, 3, 287997, 287997, 'khageshri', 'main bazar', 1605711079, 1),
(5, 'samsung galaxy  A51 5G', 7, 2147483647, 3, 119970, 259970, 'Ta-kutiyana', 'Main bazar,\r\nKhageshir', 1605716150, 1),
(6, 'sony ultra hd ', 7, 2147483647, 2, 140000, 259970, 'Ta-kutiyana', 'Main bazar,\r\nKhageshir', 1605716150, 1);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `p_id` int(11) NOT NULL,
  `p_nm` varchar(500) NOT NULL,
  `p_cat` int(4) NOT NULL,
  `p_color` varchar(15) NOT NULL,
  `p_price` bigint(20) NOT NULL,
  `p_size` varchar(20) NOT NULL,
  `p_desc` longtext NOT NULL,
  `p_img` longtext NOT NULL,
  `p_time` varchar(60) NOT NULL,
  `p_status` int(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`p_id`, `p_nm`, `p_cat`, `p_color`, `p_price`, `p_size`, `p_desc`, `p_img`, `p_time`, `p_status`) VALUES
(1, 'one plus nord 5G', 1, 'Gray onyx', 29990, '12+256GB storage', 'EMI starts at $1,412/m', '1605446008_oneplus-nord-2.jpg', '1605446008', 1),
(2, 'oppo reno 3 pro', 1, 'auroral blue', 25990, '8+128GB storage', '-> 44 mp dual hole camera -> 4025mAh battery -> mediaTek hello P95 -> ultra dark mode -> dolby almos sound  -> in display fingerprint 3.0 ', '1605446537_oppo-reno3-pro_1583733728.jpg', '1605446537', 1),
(3, 'samsung galaxy  A51 5G', 1, 'black', 39990, '6 + 128 storage', '32 MP  front camera,  45000mAh battery,  6.5 inch display', '1605454596_Samsung-Galaxy-A51-5G.jpg', '1605454596', 1),
(4, 'huawei p40 pro', 1, 'sliver', 99999, '8+512 storage', 'dual sim,  EML avalible at â‚¹4,684/months', '1605455135_HUAWEI_P40_Pro_Silver_back.jpg', '1605455135', 1),
(5, 'samsung QLED hd smart tv', 2, 'black', 89990, '55 inch', 'replacement avalible 1 month after delivery', '1605455556_960x0.jpg', '1605455556', 1),
(6, 'samsung QLED  hd 4K ultra smart tv', 2, 'black', 95999, '55 inch', 'replacement avalible 1 month after delivery', '1605455842_jFCLNMQL7G7E7xdBYubSWJ-768-80.jpg', '1605455842', 1),
(7, 'panasonic 4K ultra hd android smart led tv', 2, 'black', 49990, '58 inch', 'free delivery ,  EMI  avalible at 2,500/months', '1605456709_vizio-m-series-quantum01.jpg', '1605456709', 1),
(8, 'sony ultra hd ', 2, 'black', 70000, '55 inch', 'free delivery, EMI avalible 3,500/months', '1605456858_smartTV_extralarge_DER-84635.jpg', '1605456858', 1),
(9, 'sony 4k ultra hd tv', 2, 'black', 68990, '58 inch', 'free delivary,  EMI avalible 3500/months', '1605456977_the-best-tvs-for-2020_3u15.jpg', '1605456977', 1);

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `r_id` int(10) NOT NULL,
  `r_fnm` varchar(20) NOT NULL,
  `r_lnm` varchar(20) NOT NULL,
  `r_email` varchar(50) NOT NULL,
  `r_phone` varchar(10) NOT NULL,
  `r_gender` varchar(8) NOT NULL,
  `r_pwd` varchar(20) NOT NULL,
  `r_time` bigint(60) NOT NULL,
  `r_status` int(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`r_id`, `r_fnm`, `r_lnm`, `r_email`, `r_phone`, `r_gender`, `r_pwd`, `r_time`, `r_status`) VALUES
(1, 'abhi', 'jasani', 'abhi@gmail.com', '1231231231', 'male', '12345678890', 1602394465, 1),
(2, 'Abhi', 'Jasani', 'abhijasani7@gmail.com', '', 'male', 'abhiabhi', 1602394558, 1),
(5, 'Abhi', 'Jasani', 'abhijasani7@gmail.com', '6353725165', 'male', 'vivek123', 1602395751, 1),
(6, 'TIRTH', 'jasani', 'tirth@gmail.com', '6353725165', 'male', 'asdasdasd', 1603513729, 1),
(7, 'Abhi', 'Jasani', 'abhijasani7@gmail.com', '6353725165', 'male', '123123123', 1603801873, 1),
(8, 'Abhi', 'Jasani', 'abhijasani7@gmail.com', '6353725165', 'male', 'qwe123qwe', 1603802270, 1),
(9, 'Abhi', 'Jasani', 'abhijasani7@gmail.com', '6353725165', 'male', '123456789', 1603802701, 1),
(10, 'Abhi', 'Jasani', 'abhijasani7@gmail.com', '6353725165', 'male', 'zxczxczxc', 1603802755, 1),
(11, 'Abhi', 'Jasani', 'abhijasani7@gmail.com', '6353725165', 'male', 'qweqweqwe', 1603802813, 1),
(12, 'Abhi', 'Jasani', 'abhijasani7@gmail.com', '6353725165', 'male', 'QWEQWE123', 1603803119, 1),
(13, 'Abhi', 'Jasani', 'abhijasani7@gmail.com', '6353725165', 'male', '123123123', 1605624618, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`o_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`r_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `a_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `c_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `o_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `r_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
