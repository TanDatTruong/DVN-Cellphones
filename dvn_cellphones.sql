-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 31, 2022 at 05:15 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dvn_cellphones`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `accountID` int(30) UNSIGNED NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `phone` int(10) NOT NULL,
  `role` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `reg_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`accountID`, `fullname`, `username`, `password`, `phone`, `role`, `email`, `address`, `reg_date`) VALUES
(1, 'admin', 'admin', '123456', 123456789, 'admin', '', '', '2022-04-29 00:59:50'),
(2, 'Tấn Đạt', 'tan dat1', '12345678', 777930114, 'customer', 'truongtandat30114@gmail.com', '0.04/1C chung cư vĩnh lộc,đường 16A', '2022-05-31 03:05:24'),
(3, 'on ha uyen nhi', 'uyennhi', '123456', 123456789, 'customer', '', '', '2022-04-29 02:10:23'),
(4, 'on ha uyen nhi', 'uyennhi123', '123456', 123456789, 'customer', '', '', '2022-04-29 03:50:17'),
(5, 'dat vu', 'datvu', '12345', 777930114, 'customer', '', '', '2022-05-30 09:46:09');

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE `bill` (
  `billID` int(11) NOT NULL,
  `accountID` int(11) NOT NULL,
  `customerID` int(11) NOT NULL,
  `totalPrice` varchar(50) NOT NULL,
  `billDate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `billStatus` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bill`
--

INSERT INTO `bill` (`billID`, `accountID`, `customerID`, `totalPrice`, `billDate`, `billStatus`) VALUES
(1, 2, 10, '13450000', '2022-05-31 02:19:27', 'Đang xử lý'),
(2, 2, 11, '13450000', '2022-05-31 02:24:26', 'Đang xử lý');

-- --------------------------------------------------------

--
-- Table structure for table `billdetails`
--

CREATE TABLE `billdetails` (
  `productID` int(11) NOT NULL,
  `productName` varchar(50) NOT NULL,
  `productImage` varchar(50) NOT NULL,
  `productPrice` varchar(50) NOT NULL,
  `productQuantity` int(11) NOT NULL,
  `billDetailsID` int(11) NOT NULL,
  `billID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `billdetails`
--

INSERT INTO `billdetails` (`productID`, `productName`, `productImage`, `productPrice`, `productQuantity`, `billDetailsID`, `billID`) VALUES
(60, 'Realme 9', 'realme-9-4g.jpg', '11000000', 1, 13, 2),
(61, 'Realme C35', 'realme-c35.jpg', '2450000', 1, 14, 2);

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cartID` int(11) NOT NULL,
  `productID` int(11) NOT NULL,
  `productName` varchar(50) NOT NULL,
  `productImage` varchar(50) NOT NULL,
  `productPrice` varchar(50) NOT NULL,
  `cartQuantity` int(11) NOT NULL,
  `accountID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `categoryID` int(11) UNSIGNED NOT NULL,
  `categoryName` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`categoryID`, `categoryName`) VALUES
(1, 'Apple'),
(2, 'Samsung'),
(3, 'Oppo'),
(4, 'Xiaomi'),
(5, 'Realme'),
(6, 'Phụ kiện');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customerID` int(11) NOT NULL,
  `customerName` varchar(255) NOT NULL,
  `customerPhone` varchar(255) NOT NULL,
  `customerAddress` varchar(255) NOT NULL,
  `customerEmail` varchar(255) NOT NULL,
  `accountID` int(11) NOT NULL,
  `customerThanhToan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customerID`, `customerName`, `customerPhone`, `customerAddress`, `customerEmail`, `accountID`, `customerThanhToan`) VALUES
(1, 'tấn đạt', '0777930114', 'abc', 'truongtandat30114@gmail.com', 2, 2),
(2, 'dat vu', '0777930115', 'xyz', 'vutandat@gmail.com', 5, 1),
(3, 'dat', '0777777777', 'abc', 'truongtandat@gmail.com', 2, 3),
(4, 'dat truong', '0777930115', 'abc', 'truongtandat@gmail.com', 2, 2),
(5, 'dat tan', '0777930114', 'xzy', 'truongtanvu@gmail.com', 2, 1),
(6, 'vu dat', '0777930116', 'cbd', 'truongvudat@gmail.com', 5, 2),
(7, 'trương tấn đạt', '0777930114', 'abc', 'truongtandat@gmail.com', 2, 1),
(8, 'trương tấn đtạ', '0777930114', 'abc', 'truongtandat@gmail.com', 2, 2),
(9, 'đạt trương', '0777930114', 'abc', 'truongtandat@gmail.com', 2, 1),
(10, 'trương đạt', '0777930114', '123', 'truongtandat30114@gmail.com', 2, 1),
(11, 'trương đạt', '0777930114', '123', 'truongtandat30114@gmail.com', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `phuongthuc_tbl`
--

CREATE TABLE `phuongthuc_tbl` (
  `thanhtoanID` int(11) NOT NULL,
  `thanhtoanName` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `phuongthuc_tbl`
--

INSERT INTO `phuongthuc_tbl` (`thanhtoanID`, `thanhtoanName`) VALUES
(1, 'Thanh toán khi nhận hàng'),
(2, 'Thanh toán qua thẻ ngân hàng'),
(3, 'Thanh toán bằng ví MOMO');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `productID` int(11) UNSIGNED NOT NULL,
  `categoryID` int(11) NOT NULL,
  `productName` varchar(255) NOT NULL,
  `productPrice` varchar(100) NOT NULL,
  `productQuantity` int(11) NOT NULL,
  `productImage` varchar(50) NOT NULL,
  `productDetail` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`productID`, `categoryID`, `productName`, `productPrice`, `productQuantity`, `productImage`, `productDetail`) VALUES
(58, 1, 'Iphone 12 Pro', '27500000', 5, 'iphone-12-pro.jpg', 'iphone'),
(60, 5, 'Realme 9', '11000000', -1, 'realme-9-4g.jpg', 'điện thoại'),
(61, 5, 'Realme C35', '2450000', 1, 'realme-c35.jpg', 'điện thoại'),
(63, 2, 'Samsung galaxy S22', '24000000', 5, 'samsung-galaxy-s22-plus.jpg', 'điện thoại'),
(65, 2, 'Samsung galaxy Z Flip 3', '23000000', 3, 'samsung-galaxy-z-flip-3.jpg', 'điện thoại'),
(66, 2, 'Samsung galaxy note 8', '11000000', 4, 'ss-galaxy-note-8.jpg', 'điện thoại'),
(67, 4, 'Xiaomi 11 Lite', '2300000', 5, 'xiaomi-11-lite.jpg', 'điện thoại'),
(68, 4, 'Xiaomi 12 Pro', '5600000', 5, 'Xiaomi-12-Pro.jpg', 'điện thoại'),
(69, 4, 'Xiaomi 12', '7800000', 4, 'Xiaomi-12.jpg', 'điện thoại'),
(70, 4, 'Xiaomi 11t', '5600000', 5, 'xiaomi-11t.jpg', 'xiami'),
(114, 1, 'Iphone 11', '16000000', 3, 'iphone-11-red.jpg', 'điện thoại'),
(119, 1, 'Iphone XR', '14500000', 3, 'iphone-xr.jpg', 'điện thoại'),
(127, 1, 'Iphone SE', '9000000', 3, 'iphone-se-2022.jpg', 'điện thoại'),
(132, 1, 'iphone 6', '3000000', 4, 'another_iphone.jpg', 'điện thoại'),
(133, 1, 'Iphone 13 Mini', '16500000', 3, 'iphone-13-mini.jpg', 'điện thoại'),
(135, 1, 'Iphone 12 Pro', '23000000', 4, 'iphone-12-pro.jpg', 'điện thoại'),
(144, 1, 'Iphone X', '7500000', 5, 'exampleProduct.jpg', 'điện thoại'),
(145, 6, 'Tai nghe ', '540000', 45, 'jbl-t450-02.jpg', 'phụ kiện'),
(146, 3, 'Oppo A55', '4400000', 30, 'oppo-a55.jpg', 'điện thoại'),
(147, 3, 'Oppo Reno 7', '15500000', 4, 'oppo-reno7.jpg', 'điện thoại'),
(148, 1, 'iphone 11', '17000000', 45, 'iphone-11-red.jpg', 'điện thoại');

-- --------------------------------------------------------

--
-- Table structure for table `product_sample`
--

CREATE TABLE `product_sample` (
  `productHot` int(11) NOT NULL,
  `product_sample` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_sample`
--

INSERT INTO `product_sample` (`productHot`, `product_sample`) VALUES
(1, 'Brand New'),
(2, 'Flash Sale'),
(3, 'Normal');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`accountID`);

--
-- Indexes for table `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`billID`);

--
-- Indexes for table `billdetails`
--
ALTER TABLE `billdetails`
  ADD PRIMARY KEY (`billDetailsID`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cartID`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`categoryID`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customerID`);

--
-- Indexes for table `phuongthuc_tbl`
--
ALTER TABLE `phuongthuc_tbl`
  ADD PRIMARY KEY (`thanhtoanID`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`productID`);

--
-- Indexes for table `product_sample`
--
ALTER TABLE `product_sample`
  ADD PRIMARY KEY (`productHot`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `accountID` int(30) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `bill`
--
ALTER TABLE `bill`
  MODIFY `billID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `billdetails`
--
ALTER TABLE `billdetails`
  MODIFY `billDetailsID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cartID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `categoryID` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customerID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `phuongthuc_tbl`
--
ALTER TABLE `phuongthuc_tbl`
  MODIFY `thanhtoanID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `productID` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=149;

--
-- AUTO_INCREMENT for table `product_sample`
--
ALTER TABLE `product_sample`
  MODIFY `productHot` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
