-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 22, 2017 at 02:15 AM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Yoga`
--

-- --------------------------------------------------------

--
-- Table structure for table `Class`
--

CREATE TABLE `Class` (
  `Classid` int(15) NOT NULL,
  `Classname` varchar(25) NOT NULL,
  `Description` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Class`
--

INSERT INTO `Class` (`Classid`, `Classname`, `Description`) VALUES
(1, 'Gentle Hatha Yoga', 'Intended for beginners and anyone wishing a grounded foundation in the practice of yoga, this 60 minute class of poses and slow movement focuses on asana (proper alignment and posture), and pranayama (breath work), and guided meditation to foster your mind and body connection.'),
(2, 'Vinyasa Yoga', 'Although designed for intermediate to advanced students, beginners are welcome to sample this 60 minute class that focuses on breath-synchronized movement---you will inhale and exhale as you flow energetically through yoga poses.\r\n\r\n'),
(3, 'Restorative Yoga', 'This 90 minute class features very slow movement and long poses that are supported by a chair or wall. This calming, restorative experience is suitable for students of any level of experience. This practice is can be a perfect way to help rehabilitate an injury.');

-- --------------------------------------------------------

--
-- Table structure for table `Client`
--

CREATE TABLE `Client` (
  `Clientid` int(10) NOT NULL,
  `Name` varchar(25) NOT NULL,
  `Address` varchar(35) NOT NULL,
  `Phone` int(10) NOT NULL,
  `Email` varchar(20) NOT NULL,
  `Password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Client`
--

INSERT INTO `Client` (`Clientid`, `Name`, `Address`, `Phone`, `Email`, `Password`) VALUES
(11, 'Vineet', 'iosewo,h,ew,weo', 1234567890, 'viteet@yeda.com', 'Yedavineet'),
(12, 'Malissa Figer', 'isebufb,krbfh,kwd', 909121209, 'mal@issa.com', 'YedaVineetkuthl'),
(13, 'Harold', 'ghari ja', 2147483647, 'harry@sejal.com', 'HarryMetSejal'),
(14, 'Mark Furtado', 'Test', 1234567890, 'mark@mk.com', 'afghjlkjQ');

-- --------------------------------------------------------

--
-- Table structure for table `client-schedule`
--

CREATE TABLE `client-schedule` (
  `Clientid` int(15) NOT NULL,
  `Timeid` int(15) NOT NULL,
  `Classid` int(15) NOT NULL,
  `Daysid` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client-schedule`
--

INSERT INTO `client-schedule` (`Clientid`, `Timeid`, `Classid`, `Daysid`) VALUES
(11, 6, 2, 1),
(12, 4, 3, 2),
(13, 4, 2, 2),
(14, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `Contact`
--

CREATE TABLE `Contact` (
  `Name` varchar(15) NOT NULL,
  `Email` varchar(15) NOT NULL,
  `Comments` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Contact`
--

INSERT INTO `Contact` (`Name`, `Email`, `Comments`) VALUES
('Malissa Figer', 'molly.df298@gma', 'How old is thr trainer'),
('NItin', 'nitin@kanwar.co', 'How long does your membership last');

-- --------------------------------------------------------

--
-- Table structure for table `Days`
--

CREATE TABLE `Days` (
  `Daysid` int(15) NOT NULL,
  `Daysname` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Days`
--

INSERT INTO `Days` (`Daysid`, `Daysname`) VALUES
(1, 'Monday-Friday'),
(2, 'Saturday-Sunday');

-- --------------------------------------------------------

--
-- Table structure for table `schedule`
--

CREATE TABLE `schedule` (
  `Timeid` int(15) NOT NULL,
  `Classid` int(15) NOT NULL,
  `Daysid` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `schedule`
--

INSERT INTO `schedule` (`Timeid`, `Classid`, `Daysid`) VALUES
(1, 1, 1),
(2, 2, 1),
(6, 3, 1),
(7, 1, 1),
(2, 1, 2),
(3, 2, 2),
(4, 1, 2),
(5, 2, 2),
(6, 3, 2);

-- --------------------------------------------------------

--
-- Table structure for table `Time`
--

CREATE TABLE `Time` (
  `Timeid` int(15) NOT NULL,
  `Time` time(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Time`
--

INSERT INTO `Time` (`Timeid`, `Time`) VALUES
(1, '09:00:00.000000'),
(2, '10:30:00.000000'),
(3, '12:00:00.000000'),
(4, '13:30:00.000000'),
(5, '15:00:00.000000'),
(6, '17:30:00.000000'),
(7, '19:00:00.000000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Class`
--
ALTER TABLE `Class`
  ADD PRIMARY KEY (`Classid`);

--
-- Indexes for table `Client`
--
ALTER TABLE `Client`
  ADD PRIMARY KEY (`Clientid`);

--
-- Indexes for table `client-schedule`
--
ALTER TABLE `client-schedule`
  ADD KEY `ml_clientid` (`Clientid`),
  ADD KEY `ml_timeidx` (`Timeid`),
  ADD KEY `ml_classidx` (`Classid`),
  ADD KEY `ml_daysidx` (`Daysid`);

--
-- Indexes for table `Days`
--
ALTER TABLE `Days`
  ADD PRIMARY KEY (`Daysid`);

--
-- Indexes for table `schedule`
--
ALTER TABLE `schedule`
  ADD KEY `ml_timeid` (`Timeid`),
  ADD KEY `ml_classid` (`Classid`),
  ADD KEY `ml_daysid` (`Daysid`);

--
-- Indexes for table `Time`
--
ALTER TABLE `Time`
  ADD PRIMARY KEY (`Timeid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Class`
--
ALTER TABLE `Class`
  MODIFY `Classid` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `Client`
--
ALTER TABLE `Client`
  MODIFY `Clientid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `Days`
--
ALTER TABLE `Days`
  MODIFY `Daysid` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `Time`
--
ALTER TABLE `Time`
  MODIFY `Timeid` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `client-schedule`
--
ALTER TABLE `client-schedule`
  ADD CONSTRAINT `fk_classid1` FOREIGN KEY (`Classid`) REFERENCES `class` (`Classid`),
  ADD CONSTRAINT `fk_clientid` FOREIGN KEY (`Clientid`) REFERENCES `client` (`Clientid`),
  ADD CONSTRAINT `fk_daysid1` FOREIGN KEY (`Daysid`) REFERENCES `days` (`Daysid`),
  ADD CONSTRAINT `fk_timeid1` FOREIGN KEY (`Timeid`) REFERENCES `time` (`Timeid`),
  ADD CONSTRAINT `ml_classidx` FOREIGN KEY (`Classid`) REFERENCES `class` (`Classid`),
  ADD CONSTRAINT `ml_clientid` FOREIGN KEY (`Clientid`) REFERENCES `client` (`Clientid`),
  ADD CONSTRAINT `ml_daysidx` FOREIGN KEY (`Daysid`) REFERENCES `days` (`Daysid`),
  ADD CONSTRAINT `ml_timeidx` FOREIGN KEY (`Timeid`) REFERENCES `time` (`Timeid`);

--
-- Constraints for table `schedule`
--
ALTER TABLE `schedule`
  ADD CONSTRAINT `fk_classid` FOREIGN KEY (`Classid`) REFERENCES `class` (`Classid`),
  ADD CONSTRAINT `fk_daysid` FOREIGN KEY (`Daysid`) REFERENCES `days` (`Daysid`),
  ADD CONSTRAINT `fk_timeid` FOREIGN KEY (`Timeid`) REFERENCES `time` (`Timeid`),
  ADD CONSTRAINT `ml_classid` FOREIGN KEY (`Classid`) REFERENCES `class` (`Classid`),
  ADD CONSTRAINT `ml_daysid` FOREIGN KEY (`Daysid`) REFERENCES `days` (`Daysid`),
  ADD CONSTRAINT `ml_timeid` FOREIGN KEY (`Timeid`) REFERENCES `time` (`Timeid`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
