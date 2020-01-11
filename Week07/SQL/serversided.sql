-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 14, 2019 at 01:20 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `serversided`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `prodId` int(4) NOT NULL,
  `prodName` varchar(30) NOT NULL,
  `prodPicNameSmall` varchar(100) NOT NULL,
  `prodPicNameLarge` varchar(100) NOT NULL,
  `prodDescripShort` varchar(1000) DEFAULT NULL,
  `prodDescripLong` varchar(3000) DEFAULT NULL,
  `prodPrice` decimal(6,2) NOT NULL,
  `prodQuantity` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`prodId`, `prodName`, `prodPicNameSmall`, `prodPicNameLarge`, `prodDescripShort`, `prodDescripLong`, `prodPrice`, `prodQuantity`) VALUES
(2, 'House by John Lewis Stockholm ', '237426428.jfif', '237426428.jfif', 'The Stockholm easy-to-fit ceiling pendant will bring a modern update to any room.', 'The Stockholm easy-to-fit ceiling pendant will bring a modern update to any room. Crafted from metal into a three-tiered silhouette with subtle ribbed detailing on the middle layer, it boasts a smart painted finish that will complement a host of interior styles.\r\n\r\nEasy to fit, this ceiling shade will seamlessly attach to your existing light fitting for an instant refresh to your space.', '0.00', 8),
(3, 'John Lewis & Partners Carmine ', '237653318.jfif', '237653318.jfif', 'An appealingly versatile design that incorporates industrial-inspired accents, the Carmine ceiling shade will enhance both traditional and modern decor.', 'An appealingly versatile design that incorporates industrial-inspired accents, the Carmine ceiling shade will enhance both traditional and modern decor. Its cap allows light to spill from the top, while its wide brim makes it ideal for enabling a warm wash of light over dining tables or kitchen islands.\r\n\r\nEasy to fit, this ceiling shade will seamlessly attach to your existing light fitting for an instant refresh to your space.', '0.00', 7),
(4, 'Nordlux Design For The People ', '237731661(1).jfif', '237731661.jfif', 'The understated elegance of the Pure ceiling light from Nordlux will accent your home with a Scandi-inspired touch. Designed with a slender metal shade and boasting a natural FSC-certified walnut top, its minimalist profile and fuse of materials is ideal for design-led interiors.\r\n\r\nPart of the Design For The People range, mix-and-match different colourways and place over your dining table for statement home styling.', 'The understated elegance of the Pure ceiling light from Nordlux will accent your home with a Scandi-inspired touch. Designed with a slender metal shade and boasting a natural FSC-certified walnut top, its minimalist profile and fuse of materials is ideal for design-led interiors.\r\n\r\nPart of the Design For The People range, mix-and-match different colourways and place over your dining table for statement home styling.', '0.00', 6);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userId` int(4) NOT NULL,
  `userType` varchar(1) NOT NULL,
  `userFName` varchar(50) NOT NULL,
  `userSName` varchar(50) NOT NULL,
  `userAddress` varchar(50) NOT NULL,
  `userPostCode` varchar(50) NOT NULL,
  `userTelNo` varchar(50) NOT NULL,
  `userEmail` varchar(50) NOT NULL,
  `userPassword` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userId`, `userType`, `userFName`, `userSName`, `userAddress`, `userPostCode`, `userTelNo`, `userEmail`, `userPassword`) VALUES
(123, 'a', 'Saman', 'Liyanage', 'hiahw/awnwau6', '59200', '0981643141', 'a@abc.com', '1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`prodId`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `prodId` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userId` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=127;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
