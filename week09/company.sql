-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 13, 2018 at 04:21 PM
-- Server version: 5.7.17
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `company`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `custID` int(11) NOT NULL,
  `fName` varchar(50) DEFAULT NULL,
  `lName` varchar(50) DEFAULT NULL,
  `jobTitle` varchar(50) DEFAULT NULL,
  `busPhone` varchar(15) DEFAULT NULL,
  `mobPhone` varchar(15) DEFAULT NULL,
  `faxNum` varchar(25) DEFAULT NULL,
  `street` varchar(50) DEFAULT NULL,
  `zipCode` int(11) DEFAULT NULL,
  `salesPerson` int(11) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `webpage` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`custID`, `fName`, `lName`, `jobTitle`, `busPhone`, `mobPhone`, `faxNum`, `street`, `zipCode`, `salesPerson`, `email`, `webpage`) VALUES
(1, 'Mark', 'Tompson', 'Pool Boy', '(231)102-1024', '(231)524-1462', '2563467', 'Blast Ave', 65432, 1, 'xXDogLoveManXx@hotmail.com', NULL),
(2, 'Gort', 'Gorto', 'Eternal King', '(231)214-2945', '(231)155-2355', NULL, 'Saphire Street', 17423, 5, 'LosersNeverDie@hotmail.com', NULL),
(3, 'Biggy', 'Wo\'le', 'Pit Manager', '(231)920-2035', '(231)120-1232', NULL, 'Ruby Road', 17352, 4, 'ThePitCalls@TheRocks.com', 'TheRocks.com'),
(4, 'Manny', 'Crux', 'Cream Cheese Spreader', '(231)103-3525', '(231)535-5535', NULL, 'Tupac Street', 27345, 2, 'BlastMaster6346@ymail.com', NULL),
(5, 'Troy', 'Baka', 'Class Clown', '(231)283-5246', '(231)666-6666', '1029536', 'Street Hams', 83457, 1, 'PleaseNeverTalkToMe@gmail.com', 'VoiceOfAll.com');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `employeeID` int(11) NOT NULL,
  `fName` varchar(50) DEFAULT NULL,
  `lName` varchar(50) DEFAULT NULL,
  `jobTitle` varchar(50) DEFAULT NULL,
  `busPhone` varchar(15) DEFAULT NULL,
  `mobPhone` varchar(15) DEFAULT NULL,
  `homPhone` varchar(15) DEFAULT NULL,
  `faxNum` varchar(25) DEFAULT NULL,
  `street` varchar(50) DEFAULT NULL,
  `zipCode` int(11) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `webpage` varchar(50) DEFAULT NULL,
  `startDate` date DEFAULT NULL,
  `salaried` tinyint(1) DEFAULT NULL,
  `wages` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`employeeID`, `fName`, `lName`, `jobTitle`, `busPhone`, `mobPhone`, `homPhone`, `faxNum`, `street`, `zipCode`, `email`, `webpage`, `startDate`, `salaried`, `wages`) VALUES
(1, 'John', 'Cracks', 'Pro Moth', '(231)102-5123', '(231)326-3244', NULL, '1732573', 'Tolc Street', 17352, 'TrueLiar43@gmail.com', 'LieTo.me', '2017-06-15', 0, 5000),
(2, 'Mason', 'Ploon', 'Business Man', '(231)102-1923', '(231)183-6982', NULL, NULL, 'Swamp Road', 17423, 'MegaMom@ymail.com', NULL, '2014-02-20', 1, 7000),
(3, 'Alice', 'Mallice', 'Donut Runner', '(231)104-1924', '(231)934-1934', '(231)192-3952', '1932634', 'Magic Boy Ave', 65432, NULL, 'AbsoluteLadMagic.com', '2013-07-02', 1, 6000),
(4, 'Ron', 'Toller', 'Spider Queen', '(231)103-1035', '(231)283-2953', '(231)284-1925', NULL, 'Never Land Lane', 27345, 'RonToller72@gmail.com', NULL, '2016-11-29', 1, 3000),
(5, 'Kate', 'Mole', 'Kill Machine', '(231)013-1935', '(231)293-5432', NULL, '1029524', 'Road Street', 83457, 'MoleGod92@TheMolePeopleWeekly.truth', 'TheMolePeopleWeekly.truth', '2010-09-11', 1, 12000);

-- --------------------------------------------------------

--
-- Table structure for table `zipcodes`
--

CREATE TABLE `zipcodes` (
  `zipCode` int(11) NOT NULL,
  `city` varchar(50) DEFAULT NULL,
  `state` varchar(50) DEFAULT NULL,
  `country` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `zipcodes`
--

INSERT INTO `zipcodes` (`zipCode`, `city`, `state`, `country`) VALUES
(65432, 'Bort', 'Bortzy', 'Bortolia'),
(17352, 'Montree', 'Coldland', 'Canada'),
(83457, 'Detroit', 'Texas', 'America'),
(17423, 'Hawaii', 'Grazni', 'China'),
(27345, 'Nop', 'Fitzy', 'Australia');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`custID`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`employeeID`);

--
-- Indexes for table `zipcodes`
--
ALTER TABLE `zipcodes`
  ADD PRIMARY KEY (`zipCode`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `custID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `employeeID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
