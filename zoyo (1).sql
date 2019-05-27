-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 17, 2019 at 08:18 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `zoyo`
--

-- --------------------------------------------------------

--
-- Table structure for table `amenities`
--

CREATE TABLE `amenities` (
  `hid` int(11) NOT NULL,
  `wifi` tinytext NOT NULL,
  `tv` tinytext NOT NULL,
  `parking` tinytext NOT NULL,
  `breakfast` tinytext NOT NULL,
  `microwave` tinytext NOT NULL,
  `bed` tinytext NOT NULL,
  `geyser` tinytext NOT NULL,
  `power` tinytext NOT NULL,
  `fridge` tinytext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `amenities`
--

INSERT INTO `amenities` (`hid`, `wifi`, `tv`, `parking`, `breakfast`, `microwave`, `bed`, `geyser`, `power`, `fridge`) VALUES
(84, '1', '0', '0', '1', '0', '0', '1', '1', '0'),
(85, '1', '1', '1', '1', '0', '1', '0', '1', '1'),
(86, '1', '1', '0', '1', '1', '1', '0', '0', '1'),
(87, '1', '0', '0', '1', '0', '0', '0', '0', '0'),
(88, '1', '1', '0', '1', '0', '0', '1', '1', '1'),
(89, '1', '1', '0', '1', '0', '0', '0', '0', '1'),
(90, '1', '0', '0', '0', '0', '0', '1', '1', '1'),
(91, '1', '1', '0', '1', '0', '0', '1', '0', '0'),
(92, '0', '0', '0', '1', '0', '0', '0', '0', '0'),
(93, '0', '0', '0', '1', '0', '0', '0', '0', '0'),
(94, '0', '0', '0', '1', '0', '0', '0', '0', '0'),
(95, '0', '0', '0', '1', '0', '0', '0', '0', '0'),
(96, '0', '0', '0', '1', '0', '0', '0', '0', '0'),
(97, '0', '0', '0', '1', '0', '0', '0', '0', '0'),
(98, '0', '0', '0', '1', '0', '0', '0', '0', '0'),
(99, '0', '0', '0', '1', '0', '0', '0', '0', '0'),
(100, '0', '0', '0', '1', '0', '0', '0', '0', '0'),
(101, '1', '0', '0', '0', '0', '0', '0', '0', '0'),
(102, '0', '0', '0', '1', '0', '0', '0', '0', '0'),
(103, '0', '0', '0', '1', '0', '0', '0', '0', '0'),
(104, '0', '0', '0', '1', '0', '0', '0', '0', '0'),
(105, '0', '0', '0', '1', '0', '0', '0', '0', '0'),
(106, '0', '0', '0', '1', '0', '0', '0', '0', '0'),
(107, '0', '0', '0', '1', '0', '0', '0', '0', '0'),
(108, '0', '0', '0', '1', '0', '0', '0', '0', '0'),
(109, '0', '0', '0', '1', '0', '0', '0', '0', '0'),
(110, '0', '0', '0', '1', '0', '0', '0', '0', '0'),
(111, '0', '0', '0', '1', '0', '0', '0', '0', '0'),
(112, '0', '0', '0', '1', '0', '0', '0', '0', '0'),
(113, '0', '0', '0', '1', '0', '0', '0', '0', '0'),
(114, '0', '0', '0', '1', '0', '0', '0', '0', '0'),
(115, '0', '0', '0', '1', '0', '0', '0', '0', '0'),
(116, '0', '0', '0', '1', '0', '0', '1', '0', '0'),
(117, '0', '0', '0', '1', '0', '0', '1', '0', '0'),
(118, '0', '0', '0', '1', '0', '0', '1', '0', '0'),
(119, '0', '0', '0', '1', '1', '0', '0', '0', '0'),
(120, '0', '0', '0', '1', '0', '0', '0', '1', '0'),
(121, '0', '0', '0', '1', '0', '0', '0', '0', '1'),
(122, '0', '1', '1', '0', '0', '0', '0', '0', '0'),
(123, '1', '0', '1', '1', '0', '0', '0', '1', '0'),
(124, '0', '0', '0', '1', '0', '0', '1', '0', '0'),
(125, '1', '1', '1', '1', '1', '1', '1', '1', '1'),
(126, '1', '0', '0', '0', '0', '1', '1', '0', '0');

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `bid` int(11) NOT NULL,
  `hid` int(11) NOT NULL,
  `cid` int(11) NOT NULL,
  `bCustomerName` varchar(30) NOT NULL,
  `bBranchName` varchar(30) NOT NULL,
  `bOwnerId` int(11) NOT NULL,
  `bAddress` varchar(30) NOT NULL,
  `bCheckin` varchar(30) NOT NULL,
  `bCheckout` varchar(30) NOT NULL,
  `bRoom` int(11) NOT NULL,
  `bStatus` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`bid`, `hid`, `cid`, `bCustomerName`, `bBranchName`, `bOwnerId`, `bAddress`, `bCheckin`, `bCheckout`, `bRoom`, `bStatus`) VALUES
(15, 90, 6, 'Jobin Sabu', 'taj', 4, 'b-20 fm-7', '2019-04-04', '2019-04-07', 2, 'complete'),
(19, 97, 6, 'Jobin Sabu', 'lipton', 4, 'gvvhbjn', '2019-04-11', '2019-04-14', 1, 'canceled'),
(20, 94, 6, 'Jobin Sabu', 'obroi', 4, 'n-34, anderi west', '2019-04-09', '2019-04-10', 1, 'complete'),
(21, 97, 6, 'Jobin Sabu', 'lipton', 4, 'gvvhbjn', '2019-04-11', '2019-04-12', 1, 'canceled'),
(22, 97, 7, 'bhavay', 'lipton', 4, 'gvvhbjn', '2019-04-12', '2019-04-13', 1, 'canceled'),
(23, 98, 6, 'Jobin Sabu', 'taj mahal', 4, 'b-20 fm-7', '2019-04-14', '2019-04-17', 1, 'canceled'),
(26, 97, 6, 'Jobin Sabu', 'lipton', 4, 'gvvhbjn', '2019-04-13', '2019-04-14', 1, 'canceled'),
(27, 97, 6, 'Jobin Sabu', 'lipton', 4, 'gvvhbjn', '2019-04-13', '2019-04-14', 1, 'canceled'),
(28, 97, 6, 'Jobin Sabu', 'lipton', 4, 'gvvhbjn', '2019-04-13', '2019-04-14', 1, 'canceled'),
(29, 97, 6, 'Jobin Sabu', 'lipton', 4, 'gvvhbjn', '2019-04-13', '2019-04-14', 1, 'canceled'),
(34, 120, 6, 'Jobin Sabu', 'taj mahal', 4, 'b-20 fm-7', '2019-04-13', '2019-04-14', 2, 'canceled'),
(35, 120, 6, 'Jobin Sabu', 'taj mahal', 4, 'b-20 fm-7', '2019-04-13', '2019-04-14', 1, 'canceled'),
(36, 120, 6, 'Jobin Sabu', 'taj mahal', 4, 'b-20 fm-7', '2019-04-13', '2019-04-14', 4, 'canceled'),
(37, 120, 6, 'Jobin Sabu', 'taj mahal', 4, 'b-20 fm-7', '2019-04-13', '2019-04-14', 3, 'canceled'),
(38, 120, 7, 'bhavay', 'taj mahal', 4, 'b-20 fm-7', '2019-04-14', '2019-04-15', 2, 'canceled'),
(39, 120, 7, 'bhavay', 'taj mahal', 4, 'b-20 fm-7', '2019-04-14', '2019-04-15', 2, 'canceled'),
(40, 120, 6, 'Jobin Sabu', 'taj mahal', 4, 'b-20 fm-7', '2019-04-14', '2019-04-15', 1, 'canceled'),
(41, 120, 8, 'an', 'taj mahal', 4, 'b-20 fm-7', '2019-04-14', '2019-04-15', 1, 'canceled'),
(42, 121, 6, 'Jobin Sabu', 'taj mahal', 4, 'n-34, anderi west', '2019-04-15', '2019-04-18', 2, 'canceled'),
(43, 124, 6, 'Jobin Sabu', 'taj mahal', 4, 'b-20 fm-7', '2019-04-17', '2019-04-18', 1, 'ongoing');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `cid` int(11) NOT NULL,
  `customerName` tinytext NOT NULL,
  `customerEmail` tinytext NOT NULL,
  `customerPassword` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`cid`, `customerName`, `customerEmail`, `customerPassword`) VALUES
(6, 'Jobin Sabu', 'jsabu300@gmail.com', '$2y$10$kHldRKo3bjXnZtdnKP6IquJ0I3zJCA1gxhjDK.flpYLBmupXFidbS'),
(7, 'bhavay', 'jsabu328@gmail.com', '$2y$10$wRZfRPGhf.HozStbSGKBrurU/9tWuUB/mEFnE9IHRyeBpjNlbjWXm'),
(8, 'an', 'jsabu301@gmail.com', '$2y$10$6fJQa5jP6/Zy7hTbOxw49OdM0oboUAajogpDZXaqZ2xVbPl3kQj7e');

-- --------------------------------------------------------

--
-- Table structure for table `hotelOwners`
--

CREATE TABLE `hotelOwners` (
  `hid` int(11) NOT NULL,
  `hotelName` tinytext NOT NULL,
  `hotelOwnerEmail` tinytext NOT NULL,
  `hotelOwnerPassword` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hotelOwners`
--

INSERT INTO `hotelOwners` (`hid`, `hotelName`, `hotelOwnerEmail`, `hotelOwnerPassword`) VALUES
(4, 'Taj Mahal', 'jsabu300@gmail.com', '$2y$10$c0.JDAmYPof3zBRApycybu5OuJQ7u7R/.mGLU8Lg4AOCdxxyBMULu'),
(5, 'sc', 'jsabu328@gmail.com', '$2y$10$8dwepL9b92yRZ0bKtu43s.idq6P3pIxSSblDp6Er0qd.zoIehMm3u');

-- --------------------------------------------------------

--
-- Table structure for table `hotels`
--

CREATE TABLE `hotels` (
  `htid` int(11) NOT NULL,
  `htOwnerId` int(11) NOT NULL,
  `htCity` longtext NOT NULL,
  `htLocation` longtext NOT NULL,
  `htAddress` longtext NOT NULL,
  `htRoomPrice` int(11) NOT NULL,
  `htRooms` int(11) NOT NULL,
  `htARooms` int(11) NOT NULL,
  `htBranchName` longtext NOT NULL,
  `htCheckinAfter` longtext NOT NULL,
  `htCheckoutBefore` longtext NOT NULL,
  `image` varchar(200) NOT NULL,
  `image2` varchar(200) NOT NULL,
  `image3` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hotels`
--

INSERT INTO `hotels` (`htid`, `htOwnerId`, `htCity`, `htLocation`, `htAddress`, `htRoomPrice`, `htRooms`, `htARooms`, `htBranchName`, `htCheckinAfter`, `htCheckoutBefore`, `image`, `image2`, `image3`) VALUES
(98, 4, 'banglore', 'new bus adda', 'b-20 fm-7', 1455, 1, 1, 'taj mahal', '12:00', '11:00', 'test1.jpeg', 'sample3.jpeg', 'sample3.jpeg'),
(103, 4, 'jaipur', 'tfghj', 'b-20 fm-7', 1300, 1, 1, 'taj mahal', '12:00', '11:00', '2b01583c_z.jpg', 'sample3.jpeg', 'sample3.jpeg'),
(104, 4, 'jaipur', 'tfghj', 'b-20 fm-7', 1300, 1, 1, 'taj mahal', '12:00', '11:00', '2b01583c_z.jpg', 'sample3.jpeg', 'sample3.jpeg'),
(105, 4, 'jaipur', 'tfghj', 'b-20 fm-7', 1300, 1, 1, 'taj mahal', '12:00', '11:00', '2b01583c_z.jpg', 'sample3.jpeg', 'sample3.jpeg'),
(120, 4, 'delhi', 'karol bagh', 'b-20 fm-7', 1200, 4, 4, 'taj mahal', '12:00', '11:00', 'sample3.jpeg', 'sample3.jpeg', 'sample3.jpeg'),
(121, 4, 'delhi', 'karol bagh', 'n-34, anderi west', 1200, 5, 5, 'taj mahal', '12:00', '12:00', 'sample3.jpeg', 'sample3.jpeg', 'sample3.jpeg'),
(122, 4, 'jaipur', 'andheri', 'andhra ', 1450, 2, 2, 'taj obroi', '12:00', '13:00', 'sample.jpg', 'sample3.jpeg', 'sample3.jpeg'),
(123, 4, 'delhi', 'karol bagh', 'n-34, anderi west', 1455, 5, 5, 'taj mahal', '12:00', '11:00', 'test1.jpeg', 'sample3.jpeg', 'sample3.jpeg'),
(124, 4, 'jaipur', 'karol bagh', 'b-20 fm-7', 1200, 4, 3, 'taj mahal', '12:00', '11:00', 'sample3.jpeg', 'sample3.jpeg', 'sample3.jpeg'),
(125, 5, 'banglore', 'ashok vihar', 'n-34, anderi west', 5000, 4, 4, 'lipton', '12:00', '11:00', 'sample3.jpeg', 'sample3.jpeg', 'sample3.jpeg'),
(126, 4, 'jaipur', 'tfghj', 'b-20 fm-7', 1300, 1, 1, 'test', '12:00', '11:00', '2b01583c_z.jpg', 'default.png', 'sample.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `Ratings`
--

CREATE TABLE `Ratings` (
  `rid` int(11) NOT NULL,
  `hid` int(11) NOT NULL,
  `cid` int(11) NOT NULL,
  `rating` varchar(30) NOT NULL,
  `title` varchar(200) NOT NULL,
  `des` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Ratings`
--

INSERT INTO `Ratings` (`rid`, `hid`, `cid`, `rating`, `title`, `des`) VALUES
(5, 120, 7, '4', 'Best Service', 'fghg gvjhbkjnk hvbkjlnk'),
(6, 120, 6, '3', 'Best Service', 'fchgbj fxchgvh hcfgvhbj hcfgvhbjn'),
(7, 120, 8, '2', 'gagawh', 'gftgyj gyhjn');

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `selectj` varchar(30) NOT NULL,
  `datej` varchar(30) NOT NULL,
  `timej` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `amenities`
--
ALTER TABLE `amenities`
  ADD PRIMARY KEY (`hid`);

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`bid`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `hotelOwners`
--
ALTER TABLE `hotelOwners`
  ADD PRIMARY KEY (`hid`);

--
-- Indexes for table `hotels`
--
ALTER TABLE `hotels`
  ADD PRIMARY KEY (`htid`),
  ADD KEY `htOwnerId` (`htOwnerId`);

--
-- Indexes for table `Ratings`
--
ALTER TABLE `Ratings`
  ADD PRIMARY KEY (`rid`);

--
-- Indexes for table `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `bid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `hotelOwners`
--
ALTER TABLE `hotelOwners`
  MODIFY `hid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `hotels`
--
ALTER TABLE `hotels`
  MODIFY `htid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=127;

--
-- AUTO_INCREMENT for table `Ratings`
--
ALTER TABLE `Ratings`
  MODIFY `rid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `test`
--
ALTER TABLE `test`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `hotels`
--
ALTER TABLE `hotels`
  ADD CONSTRAINT `hotels_ibfk_1` FOREIGN KEY (`htOwnerId`) REFERENCES `hotelOwners` (`hid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
