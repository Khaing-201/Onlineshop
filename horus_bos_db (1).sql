-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 28, 2021 at 07:07 PM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 7.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `horus_bos_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `CustomerID` int(11) NOT NULL,
  `CustomerName` varchar(100) NOT NULL,
  `Email` varchar(150) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `PhoneNo` int(11) NOT NULL,
  `Address` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`CustomerID`, `CustomerName`, `Email`, `Password`, `PhoneNo`, `Address`) VALUES
(1, 'htet aung shine', 'ht@gmail.com', '25d55ad283aa400af464c76d713c07ad', 12345678, '12345678'),
(2, 'thandarzin', 'thandarzinloveapple@gmail.com', '3a43a79762630ce70d0a3fb1e16e6bc8', 2147483647, 'yangon'),
(3, 'Teal1210', 'thandarzinloveapple@gmail.com', '15ec81b445e08351e531aa21bd2b9e79', 2147483647, 'dfafd'),
(4, 'Jame', 'Jame@gmail.com', 'd724e5a733d27900ef5ab46ea7e04cf2', 123456780, 'US'),
(5, 'Alex', 'Alex@gmail.com', 'b8b28fcfe009057f2ef7362b1e91fe7a', 2147483647, 'Sanchaung'),
(6, 'mornie', 'mornie@gmail.com', 'c03e2597d871d1fe056461f325f22bf5', 2147483647, 'dagon'),
(7, 'Teal', 'thandarzinloveapple@gmail.com', '556bc5d84235ce47d65e49b150a4dc60', 2147483647, 'Sanchaung'),
(8, 'thandarzin', 'thandarzin@gmail.com', '690e49ec3193d70d2be1a6505941230a', 123456789, 'san'),
(9, 'Rose', 'Rose12345@gmail.com', 'e28af1404a7f5ed1456373b147dbad38', 2147483647, 'Yangon'),
(10, 'Lisa', 'Lisa12@gmail.com', '7e9d2765a722aa496fafadbcb5f8cfc7', 98654677, 'Yangon'),
(11, 'Jiso', 'Jiso12@gmail.com', '775891d892c9ba2ec644159597d45a0c', 2147483647, 'Yangon'),
(12, 'Aeri', 'aeri.99@gmail.com', 'c587cb90ce5943d9b21e071845fecafe', 1543291, 'No.32, Mon Street, Yangon');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `OrderID` int(50) NOT NULL,
  `CustomerID` int(11) DEFAULT NULL,
  `Orderdate` date DEFAULT NULL,
  `Promotion` varchar(50) DEFAULT NULL,
  `Orderquantity` varchar(50) DEFAULT NULL,
  `Totalamount` varchar(50) DEFAULT NULL,
  `Paymenttype` varchar(50) DEFAULT NULL,
  `Bankaccno` varchar(50) DEFAULT NULL,
  `DeliveryName` varchar(50) DEFAULT NULL,
  `DeliveryPhone` varchar(50) DEFAULT NULL,
  `Address` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`OrderID`, `CustomerID`, `Orderdate`, `Promotion`, `Orderquantity`, `Totalamount`, `Paymenttype`, `Bankaccno`, `DeliveryName`, `DeliveryPhone`, `Address`) VALUES
(1, 8, '2021-11-13', '0', NULL, NULL, 'Master Card', '1111', 'thandarzin', '123456789', 'san'),
(2, 8, '2021-11-13', '0', NULL, NULL, 'Master Card', '222', 'thandarzin', '123456789', 'san'),
(3, 8, '2021-11-13', '0', NULL, NULL, 'Visa Card', '324239', 'thandarzin', '123456789', 'sanchaung '),
(4, 10, '2021-11-26', '0', NULL, NULL, 'Master Card', '1234444', 'Lisa', '98654677', 'Yangon'),
(5, 10, '2021-11-27', '0', NULL, NULL, 'Visa Card', '4590888', 'Lisa', '98654677', 'Yangon'),
(6, 10, '2021-11-27', '0', NULL, NULL, 'Visa Card', '234239', 'Lisa', '98654677', 'Yangon'),
(7, 10, '2021-11-27', '0', NULL, NULL, 'Visa Card', '111123', 'Lisa', '98654677', 'Yangon'),
(8, 10, '2021-11-27', '0', NULL, NULL, 'Visa Card', '234288', 'Lisa', '98654699', 'Yangon'),
(9, 11, '2021-11-28', '0', NULL, NULL, 'Visa Card', '1334566', 'Jiso', '2147483647', 'Yangon'),
(10, 11, '2021-11-28', '0', NULL, NULL, 'Visa Card', '4567777', 'Jiso', '2147483647', 'Yangon'),
(11, 11, '2021-11-28', '0', NULL, NULL, 'Visa Card', '788888', 'Jiso', '2147483647', 'Yangon'),
(12, 12, '2021-11-28', '0', NULL, NULL, 'Visa Card', '456780', 'Aeri', '1543291', 'No.32, Mon Street, Yangon');

-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

CREATE TABLE `order_detail` (
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_qty` int(11) NOT NULL,
  `amount` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_detail`
--

INSERT INTO `order_detail` (`order_id`, `product_id`, `product_qty`, `amount`) VALUES
(1, 7, 2, 200000),
(2, 2, 1, 95000),
(2, 1, 1, 75000),
(3, 3, 2, 170000),
(4, 1, 1, 75000),
(5, 2, 1, 95000),
(6, 8, 1, 60000),
(6, 7, 1, 100000),
(7, 7, 2, 200000),
(8, 1, 1, 75000),
(9, 2, 1, 95000),
(9, 9, 2, 120000),
(10, 1, 2, 150000),
(10, 8, 1, 60000),
(11, 1, 2, 150000),
(11, 2, 1, 95000),
(12, 2, 1, 95000),
(12, 1, 1, 75000);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `ProductID` int(50) NOT NULL,
  `ProductCategoryID` int(11) DEFAULT NULL,
  `PurchaseOrderID` varchar(11) DEFAULT NULL,
  `ProductName` varchar(100) DEFAULT NULL,
  `BrandName` varchar(100) DEFAULT NULL,
  `Size` varchar(30) DEFAULT NULL,
  `Color` varchar(30) DEFAULT NULL,
  `UnitPrice` int(11) DEFAULT NULL,
  `ProductQuantity` int(11) DEFAULT NULL,
  `Image` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`ProductID`, `ProductCategoryID`, `PurchaseOrderID`, `ProductName`, `BrandName`, `Size`, `Color`, `UnitPrice`, `ProductQuantity`, `Image`) VALUES
(1, 2, NULL, 'Addidas-shirt', 'Addidas', 'M', 'Black', 75000, 13, 'H_Photo/_Add_Girl.jpg'),
(2, 3, NULL, 'Addidas-hoodie', 'Addidas', 'M', 'White', 95000, 2, 'H_Photo/_D_3.jpg'),
(3, 4, NULL, 'Addidas-shirt', 'Addidas', 'L', 'White', 85000, 9, 'H_Photo/_h_1.jpg'),
(7, 3, NULL, 'Addidas-hoodie 1', 'Addidas', 'M', 'Black', 100000, 0, 'H_Photo/_T_1.jpg'),
(8, 2, NULL, 'Levis-shirt', 'Levis', 'M', 'Black', 60000, 10, 'H_Photo/_Levis_shirt.jpg'),
(9, 2, NULL, 'Levis-shirt', 'Levis', 'L', 'Choose Color', 60000, 18, 'H_Photo/_IM_2.jpg'),
(10, 3, NULL, 'Levis-Hoddie', 'Levis', 'M', 'Grey', 85000, 9, 'H_Photo/_31755a_1.jpg'),
(11, 2, NULL, 'Levis-shirt', 'Levis', 'L', 'White', 70000, 11, 'H_Photo/__images.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `productcategory`
--

CREATE TABLE `productcategory` (
  `ProductCategoryID` int(11) NOT NULL,
  `ProductCategoryName` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `productcategory`
--

INSERT INTO `productcategory` (`ProductCategoryID`, `ProductCategoryName`) VALUES
(2, 'T-shirt'),
(3, 'Hoodie'),
(4, 'Sport-shirt');

-- --------------------------------------------------------

--
-- Table structure for table `productpurchasedetail`
--

CREATE TABLE `productpurchasedetail` (
  `PurchaseID` varchar(11) NOT NULL,
  `ProductID` varchar(30) NOT NULL,
  `Quantity` int(11) NOT NULL,
  `PurchasePrice` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `productpurchasedetail`
--

INSERT INTO `productpurchasedetail` (`PurchaseID`, `ProductID`, `Quantity`, `PurchasePrice`) VALUES
('PUR-000001', '2', 25, 70000),
('PUR-000002', '3', 10, 90000),
('PUR-000003', '4', 15, 75000),
('PUR-000004', '3', 5, 80000),
('PUR-000005', '2', 15, 45000),
('PUR-000006', '2', 20, 50000),
('PUR-000007', '3', 12, 75000),
('PUR-000008', '2', 15, 50000);

-- --------------------------------------------------------

--
-- Table structure for table `purchase`
--

CREATE TABLE `purchase` (
  `PurchaseID` varchar(11) NOT NULL,
  `ProductID` varchar(30) DEFAULT NULL,
  `SupplierID` int(11) DEFAULT NULL,
  `PurchaseAmount` int(11) DEFAULT NULL,
  `PurchaseQuantity` int(11) DEFAULT NULL,
  `Tax` int(11) NOT NULL,
  `GrandTotal` int(11) NOT NULL,
  `PurchaseDate` varchar(20) NOT NULL,
  `StaffID` int(11) NOT NULL,
  `Status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `purchase`
--

INSERT INTO `purchase` (`PurchaseID`, `ProductID`, `SupplierID`, `PurchaseAmount`, `PurchaseQuantity`, `Tax`, `GrandTotal`, `PurchaseDate`, `StaffID`, `Status`) VALUES
('PUR-000001', '2', 8, 70000, 25, 3500, 1837500, '2021-10-02', 12, 'Purchased'),
('PUR-000002', '3', 7, 90000, 10, 4500, 945000, '2021-10-02', 8, 'Pending'),
('PUR-000003', '4', 5, 75000, 15, 3750, 1181250, '2021-10-02', 6, 'Pending'),
('PUR-000004', '3', 6, 80000, 5, 4000, 420000, '2021-10-02', 0, 'Pending'),
('PUR-000005', '2', 4, 45000, 15, 2250, 708750, '2021-10-02', 7, 'Purchased'),
('PUR-000006', '2', 6, 50000, 20, 2500, 1050000, '2021-10-02', 8, 'Purchased'),
('PUR-000007', '3', 7, 75000, 12, 3750, 945000, '2021-10-02', 12, 'Pending'),
('PUR-000008', '2', 6, 50000, 15, 2500, 787500, '2021-10-02', 12, 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `StaffID` int(11) NOT NULL,
  `StaffName` varchar(100) NOT NULL,
  `Email` varchar(150) NOT NULL,
  `Password` varchar(25) NOT NULL,
  `Address` varchar(150) NOT NULL,
  `NRC` varchar(30) NOT NULL,
  `PhoneNo` int(11) NOT NULL,
  `RegDate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`StaffID`, `StaffName`, `Email`, `Password`, `Address`, `NRC`, `PhoneNo`, `RegDate`) VALUES
(6, 'Ma May', 'May@gmail.com', '12Mokiiii', 'Kamaryut', '12/SKN(Ng)098765', 979965435, '2021-08-17 09:06:15'),
(7, 'Kyaw Gye ', 'kyaw@gmail.com', 'Qw123456', 'kjnkjgyukbhbjhjj', '12/SKN(Ng)098765', 979965435, '2021-08-17 09:07:30'),
(8, 'Aung', 'Aung@gmail.com', 'A1234frr', 'sanchaung', '12/ SKN (ng)009890', 986544788, '2021-08-17 09:08:04'),
(9, '1111', '11111@gmail.com', '11111111', '111', '111', 1111111, '2021-08-17 08:27:14'),
(10, 'dgs', 'Hela123@gmail.com', 'Adg123456tf', 'fsfsghbdshgxh\r\ngxhd\r\nxdfzxgxdgd', 'dgzxg', 988, '2021-08-17 08:30:29'),
(11, 'Myoe Myoe', 'Myoe@gmail.com', 'Myoe12345', 'asaaaaaa', '12/SKN(Ng)223455', 2147483647, '2021-08-26 16:19:30'),
(12, 'Jennie', 'Jennie@gmail.com', 'Jennie12345', 'Yangon', '12/SKN(Ng)098700', 2147483647, '2021-09-25 09:26:16'),
(13, 'Rose', 'Rose@gmail.com', 'Rose1212', 'Yangon', '12/ SKN (ng)009888', 2147483647, '2021-10-02 15:05:45');

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `SupplierID` int(11) NOT NULL,
  `SupplierName` varchar(50) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Address` varchar(150) NOT NULL,
  `PhoneNo` int(11) NOT NULL,
  `Company` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`SupplierID`, `SupplierName`, `Email`, `Address`, `PhoneNo`, `Company`) VALUES
(4, 'zooo', 'zoo@gmail.com', 'dsfdss', 979965435, 'NIKE'),
(5, 'Alex', 'Alex@gmail.com', 'Dagon township.', 977765846, 'Addidas'),
(6, 'Mavel', 'Mavel@gmail.com', 'Yangon', 2147483647, 'Addidas'),
(7, 'camalia', 'camalia@gmail.com', 'Nhioon 2121,dasso,525 yangon', 2147483647, 'Ajinomoyo'),
(8, 'Olive', 'Olive@gmail.com', 'Dagon', 2147483647, 'Addidas');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`CustomerID`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`OrderID`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`ProductID`);

--
-- Indexes for table `productcategory`
--
ALTER TABLE `productcategory`
  ADD PRIMARY KEY (`ProductCategoryID`);

--
-- Indexes for table `purchase`
--
ALTER TABLE `purchase`
  ADD PRIMARY KEY (`PurchaseID`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`StaffID`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`SupplierID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `CustomerID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `OrderID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `ProductID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `productcategory`
--
ALTER TABLE `productcategory`
  MODIFY `ProductCategoryID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `StaffID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `SupplierID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
