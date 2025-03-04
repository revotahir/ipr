-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 04, 2025 at 09:19 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ipr`
--

-- --------------------------------------------------------

--
-- Table structure for table `ipr_order_detail`
--

CREATE TABLE `ipr_order_detail` (
  `orderID` int(11) NOT NULL,
  `ID` int(11) NOT NULL,
  `order_ID` varchar(500) NOT NULL,
  `barcodeType` varchar(100) NOT NULL,
  `companyName` varchar(200) NOT NULL,
  `productCategory` varchar(300) DEFAULT NULL,
  `countryOrigin` varchar(200) DEFAULT NULL,
  `gstNumber` varchar(100) DEFAULT NULL,
  `companyWebsite` varchar(300) DEFAULT NULL,
  `phoneNumber` varchar(20) NOT NULL,
  `productDescription` varchar(1200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `ipr_order_detail`
--

INSERT INTO `ipr_order_detail` (`orderID`, `ID`, `order_ID`, `barcodeType`, `companyName`, `productCategory`, `countryOrigin`, `gstNumber`, `companyWebsite`, `phoneNumber`, `productDescription`) VALUES
(1, 622, '11', 'ean-13', 'Company Test', 'clothing', 'bangladesh', 'asfasf', 'asfasf', '15165151', '');

-- --------------------------------------------------------

--
-- Table structure for table `ipr_product_detail`
--

CREATE TABLE `ipr_product_detail` (
  `productID` int(11) NOT NULL,
  `orderID` int(11) NOT NULL,
  `barcodeNo` varchar(150) NOT NULL,
  `brandName` varchar(500) NOT NULL,
  `productName` varchar(500) NOT NULL,
  `sizeQty` varchar(100) DEFAULT NULL,
  `color` varchar(100) DEFAULT NULL,
  `price` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `ipr_product_detail`
--

INSERT INTO `ipr_product_detail` (`productID`, `orderID`, `barcodeNo`, `brandName`, `productName`, `sizeQty`, `color`, `price`) VALUES
(1, 1, '112233', 'xyz', 'aaa', '1', '2', '3'),
(2, 1, '11334', 'qqq', 'bbb', '', '', ''),
(3, 1, '115566', 'vvv', 'nn', '', '5', '');

-- --------------------------------------------------------

--
-- Table structure for table `wp_users`
--

CREATE TABLE `wp_users` (
  `ID` bigint(20) UNSIGNED NOT NULL,
  `user_login` varchar(60) NOT NULL DEFAULT '',
  `user_pass` varchar(255) NOT NULL DEFAULT '',
  `user_nicename` varchar(50) NOT NULL DEFAULT '',
  `user_email` varchar(100) NOT NULL DEFAULT '',
  `user_url` varchar(100) NOT NULL DEFAULT '',
  `user_registered` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `user_activation_key` varchar(255) NOT NULL DEFAULT '',
  `user_status` int(11) NOT NULL DEFAULT 0,
  `display_name` varchar(250) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `wp_users`
--

INSERT INTO `wp_users` (`ID`, `user_login`, `user_pass`, `user_nicename`, `user_email`, `user_url`, `user_registered`, `user_activation_key`, `user_status`, `display_name`) VALUES
(1, 'admin', '$P$BP0aLer3uvl4OA07TlU3CJvqsHxoDW1', 'admin', 'admin@admin.com', 'https://instabarcode.com', '2023-07-21 19:35:19', '', 0, 'admin'),
(4, 'nipun.mehra', '$P$BkSiMN8NXT/YAwu/05E/JFSht7GBkq1', 'nipun-mehra', 'nipun@zingiberventures.com', '', '2023-08-31 08:28:13', '1693470493:$P$BfEEnUcinQml7JJdELkt1gbA5zphq9/', 0, 'nipun.mehra'),
(17, 'yash.vijan', '$P$BkBvnUw9osGqjOgVILZ35udlwiK26c/', 'yash-vijan', 'sales@uniqueartzz.com', '', '2023-09-04 06:11:46', '', 0, 'yash.vijan'),
(19, 'vijay.chauhan', '$P$ByX/LOqDBgPxAN7GFaMx1jbx.bTy6u.', 'vijay-chauhan', 'jaydurganamkeen2003@gmail.com', '', '2023-09-05 16:55:12', '1693932912:$P$BF77F5w6AWULmM3YOx.LXiIZ5SxEPf1', 0, 'vijay.chauhan'),
(622, 'Client', '802ddeaab1ba9ea831e79afc0530a33c', 'admin', 'client@client.com', 'https://instabarcode.com', '2023-07-21 19:35:19', '', 0, 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ipr_order_detail`
--
ALTER TABLE `ipr_order_detail`
  ADD PRIMARY KEY (`orderID`);

--
-- Indexes for table `ipr_product_detail`
--
ALTER TABLE `ipr_product_detail`
  ADD PRIMARY KEY (`productID`);

--
-- Indexes for table `wp_users`
--
ALTER TABLE `wp_users`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `user_login_key` (`user_login`),
  ADD KEY `user_nicename` (`user_nicename`),
  ADD KEY `user_email` (`user_email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ipr_order_detail`
--
ALTER TABLE `ipr_order_detail`
  MODIFY `orderID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ipr_product_detail`
--
ALTER TABLE `ipr_product_detail`
  MODIFY `productID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `wp_users`
--
ALTER TABLE `wp_users`
  MODIFY `ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=623;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
