-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 15, 2018 at 04:30 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cosmeticshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adminID` int(11) NOT NULL,
  `uname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminID`, `uname`, `email`, `password`) VALUES
(1, 'admin', 'prashna.malla@gmail.com', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `categoryID` int(11) NOT NULL,
  `category_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`categoryID`, `category_name`) VALUES
(2, 'EYE MAKE-UP'),
(3, 'FACE MAKEUP'),
(4, 'MANICURE -  PEDICURE'),
(5, 'HAIR PRODUCTS'),
(6, 'SKIN CARE'),
(7, 'PERSONAL GROOMING');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `productID` int(11) NOT NULL,
  `pname` varchar(255) NOT NULL,
  `price` int(255) NOT NULL,
  `quantity` int(11) NOT NULL,
  `detail` varchar(255) NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`productID`, `pname`, `price`, `quantity`, `detail`, `image`) VALUES
(4, 'Lakme CC Cream', 100, 1, 'Lakme CC Cream basically expands to Complexion Care Cream. It is supposed to work as a moisturizer plus a foundation with slight coverage. So, if youâ€™re looking to even out your skin tone without too much makeup and coverage, you should check this one o', ''),
(5, 'Lakme Absolute Illuminating Eye Shadow Palette', 110, 1, 'Containing six wonderful shades, Lakme has created an eye shadow palette that is perfect for achieving those intense smokey eyes youâ€™ve been yearning to flaunt.', ''),
(7, 'Lakme Eyeconic Mascara', 120, 2, 'The uniqueness of the Lakme Eyeconic Mascara is in the curled shape of the wand. It helps the lashes look more pronounced and curled. It has an intense black formula.', ''),
(9, 'Lakme Absolute Illuminating Eye Shadow Palette', 120, 2, 'The uniqueness of the Lakme Eyeconic Mascara is in the curled shape of the wand. It helps the lashes look more pronounced and curled. It has an intense black formula', ''),
(11, 'Lakme CC Cream	', 100, 5, 'sdfeawefewfWSFA', '');

-- --------------------------------------------------------

--
-- Table structure for table `productimg`
--

CREATE TABLE `productimg` (
  `id` int(11) NOT NULL,
  `image` varchar(100) NOT NULL,
  `image_text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `productimg`
--

INSERT INTO `productimg` (`id`, `image`, `image_text`) VALUES
(3, '34_3_5.jpg', ''),
(6, '', 'adad');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_uploads`
--

CREATE TABLE `tbl_uploads` (
  `id` int(10) NOT NULL,
  `file` varchar(100) NOT NULL,
  `type` varchar(10) NOT NULL,
  `size` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userID` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `uname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `ans` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userID`, `fname`, `lname`, `uname`, `email`, `password`, `address`, `phone`, `ans`) VALUES
(18, 'Prashna', 'Malla', 'prashna', 'prashna.malla@icloud.com', '1ff0102a5b4c3fbcbe5269aabe953b0e', 'New baneshwor', '9860903153', 'Black'),
(19, 'user', 'user', 'user', 'user@gmail.com', 'ee11cbb19052e40b07aac0ca060c23ee', 'user', 'user', 'user'),
(20, 'tejaswi raj', 'shrestha', 'tejaswi', 'tejaswi@gmail.com', '1ff0102a5b4c3fbcbe5269aabe953b0e', 'boudha', '9843748340', 'b');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adminID`),
  ADD UNIQUE KEY `uname` (`uname`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`categoryID`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`productID`),
  ADD UNIQUE KEY `productID` (`productID`);

--
-- Indexes for table `productimg`
--
ALTER TABLE `productimg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_uploads`
--
ALTER TABLE `tbl_uploads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userID`),
  ADD UNIQUE KEY `uname` (`uname`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `adminID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `categoryID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `productID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `productimg`
--
ALTER TABLE `productimg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_uploads`
--
ALTER TABLE `tbl_uploads`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
