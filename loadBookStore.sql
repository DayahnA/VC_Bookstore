-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 14, 2022 at 03:33 PM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bookstore`
--
CREATE DATABASE IF NOT EXISTS `bookstore` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `bookstore`;

-- --------------------------------------------------------

--
-- Table structure for table `tbladmin`
--

DROP TABLE IF EXISTS `tbladmin`;
CREATE TABLE IF NOT EXISTS `tbladmin` (
  `adminID` varchar(15) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`adminID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbladmin`
--

INSERT INTO `tbladmin` (`adminID`, `name`, `email`, `password`) VALUES
('AD001', 'Stacy', 'stacy@vcadmin.com', 'gxF4K4U4KtE='),
('AD002', 'Kevin', 'kevin@vcadmin.com', 'mwBvIZI4KtE='),
('AD003', 'Jim', 'jim@vcadmin.com', 'mgx0JYU4KtE='),
('AD004', 'Marina', 'marina@vcadmin.com', 'nQRrIZJoKdB0'),
('AD101', 'Admin', 'admin@gmail.com', 'kQF0IZI4KtE=');

-- --------------------------------------------------------

--
-- Table structure for table `tblbooks`
--

DROP TABLE IF EXISTS `tblbooks`;
CREATE TABLE IF NOT EXISTS `tblbooks` (
  `book_ID` int(15) NOT NULL AUTO_INCREMENT,
  `ISBN` varchar(15) NOT NULL,
  `bookTitle` varchar(100) NOT NULL,
  `author` varchar(100) NOT NULL,
  `publisher` varchar(50) NOT NULL,
  `edition` int(11) NOT NULL,
  `bookPrice` int(11) NOT NULL,
  `bookCondition` varchar(20) NOT NULL,
  `studentID` varchar(15) NOT NULL,
  PRIMARY KEY (`book_ID`),
  KEY `FK_stuID` (`studentID`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblbooks`
--

INSERT INTO `tblbooks` (`book_ID`, `ISBN`, `bookTitle`, `author`, `publisher`, `edition`, `bookPrice`, `bookCondition`, `studentID`) VALUES
(7, '9783161484100', 'SQL Server 2012 programming', 'A, Vieira', 'Wrox', 3, 390, 'Used', 'ST002'),
(8, '9556245800201', 'PRO C#7', 'J, Troelsen & K, Japiske', 'Apress', 2, 800, 'New', 'ST001'),
(9, '8007621700235', 'System analysis & design', 'S, Jackson', 'Cengage', 1, 400, 'Fair', 'ST004'),
(10, '7005348991012', 'PHP Programming with MYSQL', 'A ,Gosselin', 'Cengage', 2, 280, 'Average', 'ST005'),
(11, '90073255410618', 'Database  Principals', 'C, Morris & B, Crocket', 'Cengage', 3, 450, 'New', 'ST001');

-- --------------------------------------------------------

--
-- Table structure for table `tblorder`
--

DROP TABLE IF EXISTS `tblorder`;
CREATE TABLE IF NOT EXISTS `tblorder` (
  `orderNum` int(11) NOT NULL AUTO_INCREMENT,
  `bookTitle` varchar(100) NOT NULL,
  `bookPrice` int(11) NOT NULL,
  `studentID` varchar(15) NOT NULL,
  `subTotal` int(11) NOT NULL,
  `deliveryFee` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  PRIMARY KEY (`orderNum`),
  KEY `FK_studentID` (`studentID`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblorder`
--

INSERT INTO `tblorder` (`orderNum`, `bookTitle`, `bookPrice`, `studentID`, `subTotal`, `deliveryFee`, `total`) VALUES
(1, 'PRO C#7', 800, 'ST001', 800, 50, 850),
(2, 'Database Principals', 450, 'ST001', 450, 20, 470),
(3, 'SQL Server 2012 Programming', 390, 'ST002', 390, 50, 440);

-- --------------------------------------------------------

--
-- Table structure for table `tbluser`
--

DROP TABLE IF EXISTS `tbluser`;
CREATE TABLE IF NOT EXISTS `tbluser` (
  `studentID` varchar(15) NOT NULL,
  `stuName` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(200) NOT NULL,
  `phoneNum` varchar(10) NOT NULL,
  PRIMARY KEY (`studentID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbluser`
--

INSERT INTO `tbluser` (`studentID`, `stuName`, `email`, `password`, `phoneNum`) VALUES
('AD101', 'Admin', 'admin@gmail.com', 'kQF0IZI4KtE=', '0123456789'),
('ST001', 'Dayahn', 'dayahn@gmail.com', 'lARgKZRnKdB0', '0123456789'),
('ST002', 'Eddie', 'eddie@gmail.com', 'lQF9IZk4KtE=', '0876614250'),
('ST003', 'Bob', 'bob@gmail.com', 'kgp7KoU4KtE=', '0824945321'),
('ST004', 'Sam', 'sam@gmail.com', 'gwR0JYU4KtE=', '0614003857'),
('ST005', 'Elon', 'musk@gmail.com', 'lQl2Js07K9Y=', '0987890987');

-- --------------------------------------------------------

--
-- Table structure for table `tempuser`
--

DROP TABLE IF EXISTS `tempuser`;
CREATE TABLE IF NOT EXISTS `tempuser` (
  `studentID` varchar(15) NOT NULL,
  `stuName` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `phoneNum` varchar(10) NOT NULL,
  PRIMARY KEY (`studentID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tempuser`
--

INSERT INTO `tempuser` (`studentID`, `stuName`, `email`, `password`, `phoneNum`) VALUES
('ST006', 'Leroy', 'leroy@gmail.com', 'nABrJ4U4KtE=', '0317623010'),
('ST007', 'Alex', 'alex@gmail.com', 'kQl8MM07K9Y=', '0123456789'),
('ST008', 'Sara', 'sara@gmail.com', 'gwRrKc07K9Y=', '0875439021'),
('ST009', 'Willy', 'willy@vc.edu.za', 'hwx1JIU4KtE=', '0765523897'),
('ST010', 'Jeff', 'jeffb@gmail.com', 'mgB/Lp44KtFz', '0834489063');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tblbooks`
--
ALTER TABLE `tblbooks`
  ADD CONSTRAINT `FK_stuID` FOREIGN KEY (`studentID`) REFERENCES `tbluser` (`studentID`) ON UPDATE NO ACTION;

--
-- Constraints for table `tblorder`
--
ALTER TABLE `tblorder`
  ADD CONSTRAINT `FK_studentID` FOREIGN KEY (`studentID`) REFERENCES `tbluser` (`studentID`) ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
