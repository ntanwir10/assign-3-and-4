-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 21, 2014 at 04:00 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dreamhouse`
--

-- --------------------------------------------------------

--
-- Table structure for table `branch`
--

CREATE TABLE IF NOT EXISTS `branch` (
  `Bno` char(10) NOT NULL,
  `Street` char(20) NOT NULL,
  `Area` char(10) NOT NULL,
  `City` char(10) NOT NULL,
  `Pcode` char(10) NOT NULL,
  `Tel_No` char(15) NOT NULL,
  `Fax_No` char(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `branch`
--

INSERT INTO `branch` (`Bno`, `Street`, `Area`, `City`, `Pcode`, `Tel_No`, `Fax_No`) VALUES
('B5', '22 Deer Rd', 'Sidcup', 'London', 'SW1 4EH', '0171-886-1212', '0171-886-1214'),
('B7', '16 Argyll St', 'Dyce', 'Aberdeen', 'AB2 3SU', '01224-67125', '01224-67111'),
('B3', '163 Main St', 'Patrick', 'Glasgow', 'G119QX', '0141-339-2178', '0141-339-4439'),
('B2', '56 Clover Dr	', 'Oxford', 'London', 'NW10 6EU', '0181-963-1030', '0181-453-7992'),
('B2', '56 Clover Dr	', 'Oxford', 'London', 'NW10 6EU', '0181-963-1030', '0181-453-7992'),
('B2', '56 Clover Dr	', 'Oxford', 'London', 'NW10 6EU', '0181-963-1030', '0181-453-7992');

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE IF NOT EXISTS `client` (
  `Cno` char(8) NOT NULL,
  `Fname` char(8) NOT NULL,
  `Lname` char(8) NOT NULL,
  `Address` char(44) NOT NULL,
  `Tel_No` char(15) NOT NULL,
  `Pref_Type` char(8) NOT NULL,
  `Max_Rent` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`Cno`, `Fname`, `Lname`, `Address`, `Tel_No`, `Pref_Type`, `Max_Rent`) VALUES
('CR56', 'Aline', 'Stewart', '64 Fern Dr, Pollock, Glasgow G42 0BL', '0141-848-1825', 'Flat', 350),
('CR74', 'Mke', 'Ritchie', '18 Tain ST, Gourock, PA1G 1YQ', '01475-392178', 'House', 750),
('CR62', 'Mary', 'Tregear', '5 Tarbot Rd, Kildary, Aberdeen AB9 3ST', '01224-176720', 'Flat', 600);

-- --------------------------------------------------------

--
-- Table structure for table `owner`
--

CREATE TABLE IF NOT EXISTS `owner` (
  `Ono` char(5) NOT NULL,
  `Fname` char(8) NOT NULL,
  `Lname` char(8) NOT NULL,
  `Address` char(44) NOT NULL,
  `Tel_No` char(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `owner`
--

INSERT INTO `owner` (`Ono`, `Fname`, `Lname`, `Address`, `Tel_No`) VALUES
('CO46', 'joe', 'Koegh', '2 Fergis Dr, Banchory, Aberdeen AB2 7SX', '01224-861212'),
('CO87', 'Carol', 'Farrel', '6 Achray St, Glasgow G32 9DX', '0141-357-7419'),
('CO40', 'Tine', 'Murphy', '63 Well St, Shawlands, Glasgow G42', '0141-943-1728'),
('CO93', 'Tony', 'Shaw', '12 Park Pl, Hillhead, Glasgow G4 0QR', '0141-225-7025');

-- --------------------------------------------------------

--
-- Table structure for table `property_for_rent`
--

CREATE TABLE IF NOT EXISTS `property_for_rent` (
  `Pno` char(4) NOT NULL,
  `Street` char(14) NOT NULL,
  `Area` char(10) NOT NULL,
  `City` char(10) NOT NULL,
  `Pcode` char(10) NOT NULL,
  `Type` char(6) NOT NULL,
  `Rooms` smallint(6) NOT NULL,
  `Rent` int(11) NOT NULL,
  `Ono` char(4) NOT NULL,
  `Sno` char(4) NOT NULL,
  `Bno` char(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `property_for_rent`
--

INSERT INTO `property_for_rent` (`Pno`, `Street`, `Area`, `City`, `Pcode`, `Type`, `Rooms`, `Rent`, `Ono`, `Sno`, `Bno`) VALUES
('PL94', '6 Argyll St', 'Kilburn', 'London', 'NW2', 'Flat', 4, 400, 'CO87', 'SL41', '85'),
('PG4', '6 Lawrence St', 'Patrick', 'Glasgow', 'G11 9QX', 'Flat', 3, 350, 'CO40', 'SG14', 'B3'),
('PG36', '2 Manor Rd', '', 'Glasgow', 'G32 4QX', 'Flat', 3, 375, 'CO93', 'SG37', 'B3'),
('PG21', '18 Dale Rd', 'Hynland', 'Glasgow', 'G12', 'House', 5, 600, 'CO87', 'SG 3', 'B3'),
('PG21', '18 Dale Rd', 'Hynland', 'Glasgow', 'G12', 'House', 5, 600, 'CO87', 'SG37', 'B3');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE IF NOT EXISTS `staff` (
  `Sno` char(4) NOT NULL,
  `Fname` char(8) NOT NULL,
  `Lname` char(8) NOT NULL,
  `Address` char(44) NOT NULL,
  `Tel_No` char(15) NOT NULL,
  `Position` char(12) NOT NULL,
  `Sex` char(15) NOT NULL,
  `DOB` date NOT NULL,
  `Salary` int(11) NOT NULL,
  `NIN` char(10) NOT NULL,
  `Bno` char(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`Sno`, `Fname`, `Lname`, `Address`, `Tel_No`, `Position`, `Sex`, `DOB`, `Salary`, `NIN`, `Bno`) VALUES
('SL21', 'John', 'White', '19 Taylor St, Cranford, London', '0171-884-5112', 'Manager', 'M', '1945-10-01', 30000, 'WK442011B	', 'B5'),
('SG37', 'Ann', 'Beech', '81 George St, Glasgow PA1 2JR', '0141-848-3345', 'Snr Asst', 'F', '1960-11-10', 12000, 'WL432514C', 'B3'),
('SG14', 'David', 'Ford', '63 Ashby St, Patrick, Glasgow G11', '0141-339-2177', 'Deputy', 'M', '1958-03-24', 18000, 'WL220658D', 'B3'),
('SL41', 'Julie', 'Lee', '28 Malvern ST, Kilburn NW2', '0181-554-3541', 'Assistant', 'F', '1965-06-13', 9000, 'WA290573K', 'B5');

-- --------------------------------------------------------

--
-- Table structure for table `viewing`
--

CREATE TABLE IF NOT EXISTS `viewing` (
  `Cno` char(4) NOT NULL,
  `Pno` char(4) NOT NULL,
  `Date` date NOT NULL,
  `Comment` char(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `viewing`
--

INSERT INTO `viewing` (`Cno`, `Pno`, `Date`, `Comment`) VALUES
('CR56', 'PA14', '1995-05-24', 'too small'),
('CR76', 'PG4', '1995-04-20', 'too remote'),
('CR62', 'PA14', '1995-05-14', 'no dinning room');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
