-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 01, 2018 at 05:05 AM
-- Server version: 5.1.36
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `healthcare`
--

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE IF NOT EXISTS `doctor` (
  `D_SSN` int(4) NOT NULL,
  `D_NAME` varchar(20) DEFAULT NULL,
  `GENDER` char(1) DEFAULT NULL,
  `AGE` int(10) DEFAULT NULL,
  `PHONE` int(255) DEFAULT NULL,
  PRIMARY KEY (`D_SSN`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`D_SSN`, `D_NAME`, `GENDER`, `AGE`, `PHONE`) VALUES
(20, 'BRIJESH KUMAR', 'M', 25, 12345);

-- --------------------------------------------------------

--
-- Table structure for table `medicine`
--

CREATE TABLE IF NOT EXISTS `medicine` (
  `M_ID` int(4) NOT NULL,
  `M_NAME` varchar(20) DEFAULT NULL,
  `MANUFACTURER` varchar(50) DEFAULT NULL,
  `PRICE` int(11) DEFAULT NULL,
  `QTY` int(11) DEFAULT NULL,
  `EXP_DATE` date DEFAULT NULL,
  PRIMARY KEY (`M_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `medicine`
--

INSERT INTO `medicine` (`M_ID`, `M_NAME`, `MANUFACTURER`, `PRICE`, `QTY`, `EXP_DATE`) VALUES
(56, 'SOFRAMICINE', 'MANKIND', 20, 10, '2022-09-23'),
(111, 'ssbj', 'xsub', 1, 11, '2018-11-14'),
(115, 'jghhj', 'dssa', 1, 11, '2018-11-14'),
(24, 'sdsd', 'asd', 1, 32, '2018-11-14');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE IF NOT EXISTS `patient` (
  `P_SSN` int(4) NOT NULL,
  `P_NAME` varchar(20) DEFAULT NULL,
  `GENDER` char(1) DEFAULT NULL,
  `AGE` int(2) DEFAULT NULL,
  `PHONE` int(50) DEFAULT NULL,
  `DSSN` int(4) DEFAULT NULL,
  PRIMARY KEY (`P_SSN`),
  KEY `DSSN` (`DSSN`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Triggers `patient`
--
DROP TRIGGER IF EXISTS `healthcare`.`test`;
DELIMITER //
CREATE TRIGGER `healthcare`.`test` BEFORE INSERT ON `healthcare`.`patient`
 FOR EACH ROW BEGIN
SET new.DSSN = 20;
END
//
DELIMITER ;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`P_SSN`, `P_NAME`, `GENDER`, `AGE`, `PHONE`, `DSSN`) VALUES
(2, 'RAJULU', 'M', 23, 45648, 20),
(21, 'COOKIE', 'M', 19, 65213, 20),
(45, 'ANKI', 'M', 21, 8796, 20);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE IF NOT EXISTS `payment` (
  `RECEIPT_NO` int(4) NOT NULL,
  `BALANCE` int(11) DEFAULT NULL,
  `AMOUNT` int(11) DEFAULT NULL,
  `STATUS` varchar(20) DEFAULT NULL,
  `PAY_DATE` date DEFAULT NULL,
  `PSSN` int(4) DEFAULT NULL,
  `PAID_AMOUNT` int(50) NOT NULL,
  PRIMARY KEY (`RECEIPT_NO`),
  KEY `PSSN` (`PSSN`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`RECEIPT_NO`, `BALANCE`, `AMOUNT`, `STATUS`, `PAY_DATE`, `PSSN`, `PAID_AMOUNT`) VALUES
(1111, 0, 2000, 'done', '2018-11-29', 2, 2000),
(33, 0, 30, 'DONE', '2018-11-16', 32, 30),
(1, 30, 80, 'PENDING', '2018-11-12', 1, 50);

-- --------------------------------------------------------

--
-- Table structure for table `prescription`
--

CREATE TABLE IF NOT EXISTS `prescription` (
  `P_ID` int(4) NOT NULL,
  `M_QTY` int(11) DEFAULT NULL,
  `DSSN` int(4) DEFAULT NULL,
  `PNAME` varchar(20) DEFAULT NULL,
  `MID` int(10) NOT NULL,
  PRIMARY KEY (`P_ID`),
  KEY `DSSN` (`DSSN`),
  KEY `PNAME` (`PNAME`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prescription`
--

INSERT INTO `prescription` (`P_ID`, `M_QTY`, `DSSN`, `PNAME`, `MID`) VALUES
(35, 44, 20, 'COOKIE', 56),
(4, 4, 20, 'ashok', 22),
(2, 5, 20, 'ANKITA', 1),
(1, 4, 20, 'COOKIE', 1);
