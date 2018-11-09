-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 09, 2018 at 02:29 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotelproject`
--
DROP DATABASE IF EXISTS `hotelproject`;
CREATE DATABASE IF NOT EXISTS `hotelproject` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `hotelproject`;

DELIMITER $$
--
-- Procedures
--
DROP PROCEDURE IF EXISTS `rooms`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `rooms` ()  SELECT r.roomno,rc.categoryid,categorytype,specification FROM roomdetail r,roomcategory rc WHERE rc.categoryid=r.categoryid AND r.roomno not in (SELECT roomno FROM confirmation) ORDER BY r.roomno$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin` (
  `adminname` varchar(10) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminname`, `password`) VALUES
('bhuvi', 'bhuvi'),
('root', 'root'),
('bhuvi', 'bhuvi'),
('root', 'root');

-- --------------------------------------------------------

--
-- Table structure for table `cancellation`
--

DROP TABLE IF EXISTS `cancellation`;
CREATE TABLE `cancellation` (
  `usercode` int(11) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `phone` int(11) NOT NULL,
  `reason` varchar(30) NOT NULL,
  `howtoimp` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cancellation`
--

INSERT INTO `cancellation` (`usercode`, `fname`, `phone`, `reason`, `howtoimp`) VALUES
(2, 'Bhuvi', 2147483647, 'poor maintenance', 'abs');

-- --------------------------------------------------------

--
-- Table structure for table `confirmation`
--

DROP TABLE IF EXISTS `confirmation`;
CREATE TABLE `confirmation` (
  `orderid` int(11) NOT NULL,
  `usercode` int(11) NOT NULL,
  `roomno` int(11) NOT NULL,
  `noofperson` int(11) NOT NULL,
  `checkin` date NOT NULL,
  `chechout` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `confirmation`
--

INSERT INTO `confirmation` (`orderid`, `usercode`, `roomno`, `noofperson`, `checkin`, `chechout`) VALUES
(1, 2, 101, 1, '2018-11-09', '2018-11-16');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

DROP TABLE IF EXISTS `login`;
CREATE TABLE `login` (
  `usercode` int(11) NOT NULL,
  `username` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`usercode`, `username`, `email`, `phone`) VALUES
(1, 'bhuvi', 'abc@gmail.com', 2147483647),
(2, 'Bhuvi', 'bhuvi@gmail.com', 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

DROP TABLE IF EXISTS `payment`;
CREATE TABLE `payment` (
  `usercode` int(11) NOT NULL,
  `bankname` varchar(20) NOT NULL,
  `cardtype` varchar(20) NOT NULL,
  `validity_date` date NOT NULL,
  `amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`usercode`, `bankname`, `cardtype`, `validity_date`, `amount`) VALUES
(2, 'Bank of India', 'Mastercard', '2018-11-16', 2000);

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

DROP TABLE IF EXISTS `registration`;
CREATE TABLE `registration` (
  `usercode` int(11) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `DOB` date NOT NULL,
  `city` varchar(10) NOT NULL,
  `pincode` int(11) NOT NULL,
  `state` varchar(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` int(10) NOT NULL,
  `registrationdate` date NOT NULL,
  `IDprooftype` varchar(10) NOT NULL,
  `IDproofno` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`usercode`, `fname`, `lname`, `DOB`, `city`, `pincode`, `state`, `email`, `phone`, `registrationdate`, `IDprooftype`, `IDproofno`) VALUES
(1, 'bhuvi', 'm n', '2018-10-31', 'Mysore', 570011, 'Karnataka', 'abc@gmail.com', 2147483647, '2018-11-17', 'Voterid', 45865),
(2, 'Bhuvi', 'M N', '2018-11-01', 'Mysore', 570011, 'Karnataka', 'bhuvi@gmail.com', 2147483647, '2018-11-23', 'Aadharcard', 14526);

-- --------------------------------------------------------

--
-- Table structure for table `roomcategory`
--

DROP TABLE IF EXISTS `roomcategory`;
CREATE TABLE `roomcategory` (
  `categoryid` int(11) NOT NULL,
  `categorytype` varchar(15) NOT NULL,
  `cost` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `roomcategory`
--

INSERT INTO `roomcategory` (`categoryid`, `categorytype`, `cost`) VALUES
(1111, 'Single', 1000),
(1112, 'Double', 2000),
(1113, 'Triple', 3000),
(1114, 'Quad', 4000),
(1115, 'King', 4500),
(1116, 'Twin', 3500),
(1117, 'Studio', 5000);

-- --------------------------------------------------------

--
-- Table structure for table `roomdetail`
--

DROP TABLE IF EXISTS `roomdetail`;
CREATE TABLE `roomdetail` (
  `roomno` int(11) NOT NULL,
  `categoryid` int(11) NOT NULL,
  `specification` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `roomdetail`
--

INSERT INTO `roomdetail` (`roomno`, `categoryid`, `specification`) VALUES
(101, 1111, 'AC,WiFi,Music'),
(102, 1112, 'AC,WiFi,Music'),
(103, 1114, 'AC'),
(104, 1117, 'AC,WiFi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cancellation`
--
ALTER TABLE `cancellation`
  ADD PRIMARY KEY (`usercode`);

--
-- Indexes for table `confirmation`
--
ALTER TABLE `confirmation`
  ADD PRIMARY KEY (`orderid`),
  ADD KEY `usercode` (`usercode`),
  ADD KEY `roomno` (`roomno`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`usercode`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`usercode`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`usercode`);

--
-- Indexes for table `roomcategory`
--
ALTER TABLE `roomcategory`
  ADD PRIMARY KEY (`categoryid`);

--
-- Indexes for table `roomdetail`
--
ALTER TABLE `roomdetail`
  ADD PRIMARY KEY (`roomno`),
  ADD KEY `categoryid` (`categoryid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `confirmation`
--
ALTER TABLE `confirmation`
  MODIFY `orderid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `usercode` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `cancellation`
--
ALTER TABLE `cancellation`
  ADD CONSTRAINT `cancellation_ibfk_1` FOREIGN KEY (`usercode`) REFERENCES `registration` (`usercode`);

--
-- Constraints for table `confirmation`
--
ALTER TABLE `confirmation`
  ADD CONSTRAINT `confirmation_ibfk_1` FOREIGN KEY (`usercode`) REFERENCES `registration` (`usercode`),
  ADD CONSTRAINT `confirmation_ibfk_2` FOREIGN KEY (`roomno`) REFERENCES `roomdetail` (`roomno`);

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `payment_ibfk_1` FOREIGN KEY (`usercode`) REFERENCES `registration` (`usercode`);

--
-- Constraints for table `roomdetail`
--
ALTER TABLE `roomdetail`
  ADD CONSTRAINT `roomdetail_ibfk_1` FOREIGN KEY (`categoryid`) REFERENCES `roomcategory` (`categoryid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
