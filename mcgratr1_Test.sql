-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 15, 2022
-- Server version: 5.7.39
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mcgratr1_Test`
--

-- --------------------------------------------------------

--
-- Table structure for table `auth_info`
--

CREATE TABLE `auth_info` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `account_type` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `auth_info`
--

INSERT INTO `auth_info` (`id`, `username`, `password`, `account_type`, `email`, `phone`) VALUES
(1, 'rmcgrath', 'password', 1, 'mcgrathr1@montclair.edu', '123-456-7890'),
(3, 'Kristyn', 'Stella', 1, 'kspetz77@gmail.com', '0000000000'),
(4, 'Dan Serafini', 'a', 0, 'a@gmail.com', '2134567890'),
(8, 'Ryan', 'ryan', 0, 'ryanm@gmail.com', '000-000-0000'),
(10, 'John', 'Doe', 1, 'johndoe@gmail.com', '2134567890');

-- --------------------------------------------------------

--
-- Table structure for table `birds`
--

CREATE TABLE `birds` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `birthday` date DEFAULT NULL,
  `date_received` date DEFAULT NULL,
  `cost` float NOT NULL,
  `quantity` int(11) NOT NULL,
  `image` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `birds`
--

INSERT INTO `birds` (`id`, `name`, `birthday`, `date_received`, `cost`, `quantity`, `image`) VALUES
(1, 'Zazu', '1998-01-29', '2022-08-22', 100, 1, 'Final Project/src/customer/Images/Birds/bird1.jpg'),
(2, 'Bella', '2001-07-04', '2022-07-22', 100, 1, ''),
(3, 'Zippy', '2015-03-14', '2022-06-13', 150, 1, ''),
(4, 'Daffy', '2017-01-26', '2022-08-01', 150, 1, ''),
(5, 'Angel', '2018-12-23', '2022-04-04', 125, 1, ''),
(6, 'Daisey', '2015-09-20', '2022-08-01', 125, 1, ''),
(7, 'Charlie', '2020-11-13', '2022-05-19', 125, 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `cages`
--

CREATE TABLE `cages` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `cost` float NOT NULL,
  `size` varchar(255) NOT NULL,
  `date_received` date NOT NULL,
  `quantity` int(11) NOT NULL,
  `remaining` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cages`
--

INSERT INTO `cages` (`id`, `name`, `cost`, `size`, `date_received`, `quantity`, `remaining`) VALUES
(1, 'Zora 30.4\" Steel Flat Top', 79.99, 'Large', '2022-03-15', 10, 8),
(2, '47\" Rolling Bird Cage', 67.99, 'Large', '2022-03-15', 10, 10),
(3, 'Yaheetech 52\" Roll Cage', 135.99, 'Large', '2022-03-01', 10, 10),
(4, 'Yaheetech Open Playtop', 209.99, 'Large', '2022-03-01', 10, 10),
(5, 'Easyfashion Flight Cage', 42, 'Medium', '2022-06-30', 15, 15),
(6, 'European Luxury Cage', 27.72, 'Medium', '2022-06-30', 15, 15),
(7, 'Best Choice Products 36\"', 64.99, 'Medium', '2022-06-25', 15, 15),
(8, 'A E Cage Co. Medium', 358.74, 'Medium', '2022-06-25', 15, 15),
(9, 'White Metal Bird Cage', 12.49, 'Small', '2022-08-01', 20, 20),
(10, 'Smilemart 30\" Bird Cage', 54.99, 'Small', '2022-08-01', 20, 20),
(11, 'Bird Cage House Style', 16.27, 'Small', '2022-08-01', 20, 20),
(12, 'Prevue Hendryx Triple Roof', 100.79, 'Small', '2022-08-01', 20, 20);

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL,
  `cost` float NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `item_name`, `quantity`, `cost`) VALUES
(1, 'Zora 30.4\" Steel Flat Top', 2, 100);

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE `food` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `cost` float NOT NULL,
  `quantity` int(11) NOT NULL,
  `food_type` varchar(255) DEFAULT NULL,
  `date_received` date NOT NULL,
  `remaining` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`id`, `name`, `cost`, `quantity`, `food_type`, `date_received`, `remaining`) VALUES
(1, 'Kaytee Bird Food', 29.99, 10, 'Wild', '2022-07-01', 10),
(2, 'Pennington Wild Food', 27.98, 15, 'Wild', '2022-08-01', 15),
(3, 'Best Garden Simply Birds', 39.99, 20, 'Wild', '2022-07-01', 20),
(4, 'Hill Country Fare Feed', 42.97, 10, 'Wild', '2022-07-15', 10),
(5, 'Premium Parrot Food', 34.99, 40, 'Parrot', '2022-06-30', 40),
(6, 'Higgins Gourmet Blend', 37.89, 25, 'Parrot', '2022-06-15', 25),
(7, 'Dr. Harvey\'s Exotic Food', 43.99, 30, 'Parrot', '2022-08-01', 30),
(8, 'Kaytee Pro Health', 39.99, 15, 'Parrot', '2022-07-01', 15),
(9, 'Lafeber\'s Premium Finch', 22.99, 30, 'Finch', '2022-08-15', 30),
(10, 'Lyric Songbird Mix', 19.99, 20, 'Finch', '2022-07-01', 20),
(11, 'Wild Harvest Advanced', 43.99, 35, 'Finch', '2022-07-15', 35),
(12, 'Kaytee Wild Finch', 39.99, 15, 'Finch', '2022-07-01', 15);

-- --------------------------------------------------------

--
-- Table structure for table `receipts`
--

CREATE TABLE `receipts` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total` float NOT NULL,
  `date_purchased` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tblproduct`
--

CREATE TABLE `tblproduct` (
  `id` int(8) NOT NULL,
  `name` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `price` double(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblproduct`
--

INSERT INTO `tblproduct` (`id`, `name`, `code`, `image`, `price`) VALUES
(1, 'FinePix Pro2 3D Camera', '3DcAM01', '\"Final Project/src/customer/Images/Birds/bird1.jpg\"', 1500.00),
(2, 'EXP Portable Hard Drive', 'USB02', 'product-images/external-hard-drive.jpg', 800.00),
(3, 'Luxury Ultra thin Wrist Watch', 'wristWear03', 'product-images/watch.jpg', 300.00),
(4, 'XP 1155 Intel Core Laptop', 'LPN45', 'product-images/laptop.jpg', 800.00);

-- --------------------------------------------------------

--
-- Table structure for table `toys`
--

CREATE TABLE `toys` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `cost` float NOT NULL,
  `quantity` int(11) NOT NULL,
  `item_type` varchar(255) NOT NULL,
  `date_received` date NOT NULL,
  `remaining` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `toys`
--

INSERT INTO `toys` (`id`, `name`, `cost`, `quantity`, `item_type`, `date_received`, `remaining`) VALUES
(1, 'Lovyococo Parrot Swing', 14.59, 10, 'Swing', '2022-03-15', 10),
(2, 'Hari Smart Bird Toy', 19.99, 20, 'Swing', '2022-03-15', 20),
(3, 'Medium & Large Toys', 16, 15, 'Swing', '2022-03-15', 15),
(4, 'Macaw Parrot Swing XL', 13.99, 10, 'Swing', '2022-03-15', 10),
(5, 'K&H Thermo-Perch', 38.88, 10, 'Perch', '2022-06-01', 10),
(6, 'Wild Harvest Chewable', 8.39, 15, 'Perch', '2022-06-01', 15),
(7, 'Parrot Platform Medium', 9.71, 20, 'Perch', '2022-06-01', 20),
(8, 'Kaytee Pro Health', 39.99, 10, 'Perch', '2022-06-01', 10),
(9, 'Large Parrot Chew Toy', 15.04, 25, 'Toy', '2022-08-15', 25),
(10, 'Feet & Beak Weave', 10.95, 15, 'Toy', '2022-06-01', 15),
(11, 'Rompin\' Bird Toy', 25.99, 15, 'Toy', '2022-06-01', 15),
(12, 'Balsa Rainbow Ring', 18.99, 20, 'Toy', '2022-06-01', 20),
(13, 'Multicolor Ladder', 7.89, 15, 'Toy', '2022-06-01', 15);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `auth_info`
--
ALTER TABLE `auth_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `birds`
--
ALTER TABLE `birds`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cages`
--
ALTER TABLE `cages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `receipts`
--
ALTER TABLE `receipts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblproduct`
--
ALTER TABLE `tblproduct`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `product_code` (`code`);

--
-- Indexes for table `toys`
--
ALTER TABLE `toys`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `auth_info`
--
ALTER TABLE `auth_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `birds`
--
ALTER TABLE `birds`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `cages`
--
ALTER TABLE `cages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `food`
--
ALTER TABLE `food`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `receipts`
--
ALTER TABLE `receipts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tblproduct`
--
ALTER TABLE `tblproduct`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `toys`
--
ALTER TABLE `toys`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
