-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 01, 2021 at 03:09 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bloodbankmanagement`
--

-- --------------------------------------------------------

--
-- Table structure for table `bloodbanks`
--

CREATE TABLE `bloodbanks` (
  `BBid` int(10) NOT NULL,
  `BBName` varchar(50) NOT NULL,
  `PhoneNumber` int(50) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `City` text NOT NULL,
  `State` text NOT NULL,
  `BloodBankLicense` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bloodbanks`
--

INSERT INTO `bloodbanks` (`BBid`, `BBName`, `PhoneNumber`, `Email`, `Password`, `City`, `State`, `BloodBankLicense`) VALUES
(1, 'Divya Blood Bank', 25073638, 'divya@123gmail.com', '12345', 'mumbai', 'maharastra', 'b207'),
(2, 'Jivan Blood Bank', 2147483647, 'jivan123@gmail.com', '123456', 'mumbai', 'maharastra', 'b543'),
(3, 'Borivali Blood Bank', 223930473, 'borivali@gmail.com', '1234567', 'Mumbai', 'Maharastra', 'b247'),
(4, 'Pallavi Blood Bank', 2147483647, 'pallavi@gmail.com', '1234', 'mumbai', 'maharastra', 'b355'),
(5, 'Sant Nirankari Blood Bank', 2147483647, 'sant@gmail.com', '1234', 'mumbai', 'maharastra', 'b637'),
(6, 'Ashirwad Blood Bank', 2147483647, 'ashirvad@gmail.com', '12345', 'mumbai', 'maharastra', 'b362'),
(7, 'Anviksha blood bank', 21026290, 'anviksha@gmail.com', '123456', 'mumbai', 'maharastra', 'b493'),
(8, 'Jankalyan Raktapedhi', 2024449527, 'jankalyan@gmail.com', '123456', 'pune', 'maharastra', 'b849'),
(9, 'Pune Blood Bank', 2026992828, 'pune@gmail.com', '12345', 'pune', 'maharastra', 'b9463');

-- --------------------------------------------------------

--
-- Table structure for table `bloodstock`
--

CREATE TABLE `bloodstock` (
  `BBid` int(10) NOT NULL,
  `A-` int(10) NOT NULL,
  `A+` int(10) NOT NULL,
  `B-` int(10) NOT NULL,
  `B+` int(10) NOT NULL,
  `AB-` int(10) NOT NULL,
  `AB+` int(10) NOT NULL,
  `O-` int(10) NOT NULL,
  `O+` int(10) NOT NULL,
  `id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bloodstock`
--

INSERT INTO `bloodstock` (`BBid`, `A-`, `A+`, `B-`, `B+`, `AB-`, `AB+`, `O-`, `O+`, `id`) VALUES
(1, 10, 5, 10, 0, 5, 20, 8, 6, 1),
(2, 10, 0, 10, 10, 10, 10, 10, 10, 2),
(3, 8, 7, 22, 10, 18, 37, 12, 19, 3),
(4, 10, 5, 10, 5, 5, 20, 8, 6, 4),
(5, 10, 5, 0, 0, 0, 3, 5, 9, 5),
(6, 10, 5, 10, 0, 0, 20, 10, 0, 6),
(7, 10, 0, 10, 5, 0, 20, 5, 0, 7),
(8, 10, 5, 0, 0, 0, 20, 8, 6, 8),
(9, 10, 0, 10, 5, 5, 20, 8, 6, 9);

-- --------------------------------------------------------

--
-- Table structure for table `campregistration`
--

CREATE TABLE `campregistration` (
  `Donorid` int(10) NOT NULL,
  `Campid` int(10) NOT NULL,
  `Fname` text NOT NULL,
  `Age` int(10) NOT NULL,
  `Contact` int(50) NOT NULL,
  `Emailid` varchar(50) NOT NULL,
  `Gender` text NOT NULL,
  `Lname` text NOT NULL,
  `bloodgroup` varchar(10) NOT NULL,
  `CampName` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `campregistration`
--

INSERT INTO `campregistration` (`Donorid`, `Campid`, `Fname`, `Age`, `Contact`, `Emailid`, `Gender`, `Lname`, `bloodgroup`, `CampName`) VALUES
(5, 4, 'vineet', 28, 94843930, 'vin@gmail.com', 'Male', 'jaiswal', 'AB+', 'Jivan Camp'),
(6, 4, 'suraj', 36, 94739302, 'suraj@gmail.com', 'Male', 'yadav', 'O-', 'Jivan Camp'),
(7, 4, 'nitesh', 20, 943037293, 'nitesh@gmail.com', 'Male', 'mishra', 'O+', 'Jivan Camp'),
(8, 4, 'Aakash ', 20, 2147483647, 'aakash@gmail.com', 'Male', 'Jaiswal', 'B-', 'Jivan Camp'),
(9, 4, 'Aakash', 20, 2147483647, 'aakash@gmail.com', 'Male', 'Jaiswal', 'B-', 'Jivan Camp'),
(10, 4, 'vaishnavi', 19, 2147483647, 'vaishnavi@gmail.com', 'Female', 'gupta', 'O+', 'Jivan Camp'),
(11, 4, 'vaishnavi', 19, 2147483647, 'vaishnavi@gmail.com', 'Female', 'gupta', 'O+', 'Jivan Camp');

-- --------------------------------------------------------

--
-- Table structure for table `campschedule`
--

CREATE TABLE `campschedule` (
  `Campid` int(10) NOT NULL,
  `BBid` int(10) NOT NULL,
  `CampName` varchar(50) NOT NULL,
  `Date` date NOT NULL,
  `Time` time NOT NULL,
  `Address` varchar(100) NOT NULL,
  `ConductedBy` varchar(50) NOT NULL,
  `phone` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `campschedule`
--

INSERT INTO `campschedule` (`Campid`, `BBid`, `CampName`, `Date`, `Time`, `Address`, `ConductedBy`, `phone`) VALUES
(4, 1, 'Jivan Camp', '2020-10-28', '10:00:00', 'borivali(west)', 'Divya Blood Bank', 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `donorregistration`
--

CREATE TABLE `donorregistration` (
  `Donorid` int(10) NOT NULL,
  `BBid` int(10) NOT NULL,
  `Fname` text NOT NULL,
  `Lname` text NOT NULL,
  `Age` int(10) NOT NULL,
  `Gender` text NOT NULL,
  `Date` date NOT NULL,
  `phone` int(50) NOT NULL,
  `bloodgroup` varchar(10) NOT NULL,
  `BBName` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donorregistration`
--

INSERT INTO `donorregistration` (`Donorid`, `BBid`, `Fname`, `Lname`, `Age`, `Gender`, `Date`, `phone`, `bloodgroup`, `BBName`) VALUES
(1, 1, 'vinit', 'jaiswal', 20, 'male', '2020-10-19', 938364830, 'A+', 'Divya Blood Bank'),
(10, 1, 'manish', 'mishra', 30, 'Male', '2020-10-19', 2147483647, 'O+', 'Divya Blood Bank');

-- --------------------------------------------------------

--
-- Table structure for table `requestblood`
--

CREATE TABLE `requestblood` (
  `reqid` int(10) NOT NULL,
  `BBid` int(10) NOT NULL,
  `name` text NOT NULL,
  `patientname` text NOT NULL,
  `bloodgroup` varchar(10) NOT NULL,
  `contactno` int(50) NOT NULL,
  `email` varchar(30) NOT NULL,
  `date` date NOT NULL,
  `hospitalname` text NOT NULL,
  `comment` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `requestblood`
--

INSERT INTO `requestblood` (`reqid`, `BBid`, `name`, `patientname`, `bloodgroup`, `contactno`, `email`, `date`, `hospitalname`, `comment`) VALUES
(4, 3, 'vimal', 'kesari', 'B+', 996643278, 'vimal@gmail.com', '2020-11-05', 'holy hospital', 'needed'),
(5, 1, 'aakash jaiswal', 'chaitanya', 'A+', 66870956, 'aakash@gmail.com', '2020-11-05', 'holy hospital', 'urgent '),
(6, 1, 'vaishnavi', 'vishnu', 'AB-', 279763357, 'vaish@gmail.com', '2020-11-05', 'pv hospital', 'need'),
(7, 1, 'chandan', 'chandu', 'O+', 439582839, 'chandan@gmail.com', '2020-11-05', 'sind hospital', 'urgent need'),
(10, 2, 'Aakash', 'abhinav', 'B+', 2147483647, 'aakash@gmail.com', '2020-11-20', 'vn desai hospital', 'urgent '),
(11, 2, 'Aakash', 'abhinav', 'B+', 2147483647, 'aakash@gmail.com', '2020-11-20', 'vn desai hospital', 'urgent');

-- --------------------------------------------------------

--
-- Table structure for table `systemadmin`
--

CREATE TABLE `systemadmin` (
  `AdminId` int(20) NOT NULL,
  `UserName` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bloodbanks`
--
ALTER TABLE `bloodbanks`
  ADD PRIMARY KEY (`BBid`);

--
-- Indexes for table `bloodstock`
--
ALTER TABLE `bloodstock`
  ADD PRIMARY KEY (`id`),
  ADD KEY `BBid` (`BBid`);

--
-- Indexes for table `campregistration`
--
ALTER TABLE `campregistration`
  ADD PRIMARY KEY (`Donorid`),
  ADD KEY `Campid` (`Campid`);

--
-- Indexes for table `campschedule`
--
ALTER TABLE `campschedule`
  ADD PRIMARY KEY (`Campid`),
  ADD KEY `BBid` (`BBid`);

--
-- Indexes for table `donorregistration`
--
ALTER TABLE `donorregistration`
  ADD PRIMARY KEY (`Donorid`),
  ADD KEY `BBid` (`BBid`);

--
-- Indexes for table `requestblood`
--
ALTER TABLE `requestblood`
  ADD PRIMARY KEY (`reqid`),
  ADD KEY `BBid` (`reqid`,`BBid`),
  ADD KEY `BBid_2` (`BBid`);

--
-- Indexes for table `systemadmin`
--
ALTER TABLE `systemadmin`
  ADD PRIMARY KEY (`AdminId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bloodbanks`
--
ALTER TABLE `bloodbanks`
  MODIFY `BBid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `bloodstock`
--
ALTER TABLE `bloodstock`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `campregistration`
--
ALTER TABLE `campregistration`
  MODIFY `Donorid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `campschedule`
--
ALTER TABLE `campschedule`
  MODIFY `Campid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `donorregistration`
--
ALTER TABLE `donorregistration`
  MODIFY `Donorid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `requestblood`
--
ALTER TABLE `requestblood`
  MODIFY `reqid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `systemadmin`
--
ALTER TABLE `systemadmin`
  MODIFY `AdminId` int(20) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bloodstock`
--
ALTER TABLE `bloodstock`
  ADD CONSTRAINT `bloodstock_ibfk_1` FOREIGN KEY (`BBid`) REFERENCES `bloodbanks` (`BBid`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `campschedule`
--
ALTER TABLE `campschedule`
  ADD CONSTRAINT `campschedule_ibfk_1` FOREIGN KEY (`BBid`) REFERENCES `bloodbanks` (`BBid`) ON DELETE CASCADE ON UPDATE NO ACTION;

--
-- Constraints for table `donorregistration`
--
ALTER TABLE `donorregistration`
  ADD CONSTRAINT `donorregistration_ibfk_1` FOREIGN KEY (`BBid`) REFERENCES `bloodbanks` (`BBid`);

--
-- Constraints for table `requestblood`
--
ALTER TABLE `requestblood`
  ADD CONSTRAINT `requestblood_ibfk_1` FOREIGN KEY (`BBid`) REFERENCES `bloodbanks` (`BBid`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
