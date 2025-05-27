-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 18, 2019 at 06:55 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `finalyear`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Admin` varchar(250) DEFAULT NULL,
  `Password` int(250) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Admin`, `Password`) VALUES
('Admin', 123456789);

-- --------------------------------------------------------

--
-- Table structure for table `admin2`
--

CREATE TABLE `admin2` (
  `Email` varchar(150) NOT NULL,
  `Password` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin2`
--

INSERT INTO `admin2` (`Email`, `Password`) VALUES
('john@gmail.com', 'John1234');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `BookingID` int(11) NOT NULL,
  `Email` varchar(150) NOT NULL,
  `CheckIn` varchar(150) NOT NULL,
  `CheckOut` varchar(150) NOT NULL,
  `RoomType` decimal(10,2) NOT NULL,
  `Quantity` varchar(150) NOT NULL,
  `Total` decimal(10,2) NOT NULL,
  `Payment` varchar(150) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`BookingID`, `Email`, `CheckIn`, `CheckOut`, `RoomType`, `Quantity`, `Total`, `Payment`, `status`) VALUES
(107, 'loker1978@hotmail.com', '2019-04-17', '2019-04-18', '50.00', '1', '0.00', 'Pay', 1);

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `UserID` int(10) NOT NULL,
  `Username` varchar(150) NOT NULL,
  `Password` varchar(150) NOT NULL,
  `Email` varchar(150) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`UserID`, `Username`, `Password`, `Email`) VALUES
(7, 'Rodney', '123456', 'rodney@gmail.com'),
(9, 'James', '1234', 'wowowo@GMAIL.COM'),
(10, 'h', '123456', 'wenkang124@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `register2`
--

CREATE TABLE `register2` (
  `Name` varchar(150) NOT NULL,
  `Email` varchar(150) NOT NULL,
  `Phone` varchar(150) NOT NULL,
  `Password` varchar(150) NOT NULL,
  `ConfirmPassword` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register2`
--

INSERT INTO `register2` (`Name`, `Email`, `Phone`, `Password`, `ConfirmPassword`) VALUES
('linkahlock6783', 'loker1978@hotmail.com', '0112345678', 'Abc123', 'Abc123'),
('eho', 'ehotan7@gmail.com', '012345566', 'Abc123', 'Abc123'),
('linkahlock', 'john@gmail.com', '0112345678', 'Abc123', 'Abc123');

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `ID` int(11) NOT NULL,
  `res_id` int(11) NOT NULL,
  `Name` varchar(250) NOT NULL,
  `Email` varchar(250) NOT NULL,
  `Phone` int(250) NOT NULL,
  `Destination` varchar(250) NOT NULL,
  `Datee` date DEFAULT NULL,
  `Hour` time(2) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `reservationtracl`
--

CREATE TABLE `reservationtracl` (
  `ID` int(11) NOT NULL,
  `belong` varchar(250) NOT NULL,
  `added_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(11) NOT NULL DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`BookingID`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`UserID`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `reservationtracl`
--
ALTER TABLE `reservationtracl`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `BookingID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=108;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `UserID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `reservationtracl`
--
ALTER TABLE `reservationtracl`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
