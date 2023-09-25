-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 20, 2020 at 09:54 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dbvehicle`
--
CREATE DATABASE IF NOT EXISTS `dbvehicle` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `dbvehicle`;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE IF NOT EXISTS `tbl_category` (
  `catid` int(11) NOT NULL AUTO_INCREMENT,
  `catname` varchar(50) NOT NULL,
  PRIMARY KEY (`catid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`catid`, `catname`) VALUES
(1, 'Truck'),
(2, 'Bus'),
(3, 'Torus'),
(4, 'Car'),
(5, 'Bike');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_emp`
--

CREATE TABLE IF NOT EXISTS `tbl_emp` (
  `empid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `phn` varchar(50) NOT NULL,
  `addr` varchar(50) NOT NULL,
  `age` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `desig` varchar(50) NOT NULL,
  `joindt` varchar(50) NOT NULL,
  PRIMARY KEY (`empid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `tbl_emp`
--

INSERT INTO `tbl_emp` (`empid`, `name`, `phn`, `addr`, `age`, `email`, `desig`, `joindt`) VALUES
(1, 'Ramesh J A', '9685748596', 'hjgjhg', '28', 'ramesh@gmail.com', 'Hr', '2018-12-08'),
(2, 'satheesh M N', '9685748593', 'hgfgyhfjhhji', '30', 'satheesh@gmail.com', 'Dr', '2018-02-18'),
(3, 'sonish K', '8478589623', 'sdfghj', '32', 'sonish@gmail.com', 'Dr', '2018-06-12'),
(4, 'Bibi Krishna', '9865202452', 'aluva', '29', 'bibi@gmail.com', 'Hr', '2020-10-29'),
(5, 'Vishnu', '9865202452', 'bhn', '25', 'vishnu@gmail.com', 'Dr', '2020-10-28'),
(6, 'Ram', '9898989890', 'kjhgfdfghj', '32', 'ram@gmail.com', 'Hr', '2020-11-07'),
(7, 'sudhi', '9898989899', 'vgbhnj', '35', 'sudhi@gmail.com', 'Dr', '2020-10-27'),
(8, 'David', '9562301478', 'Aluva', '44', 'divya@gmail.com', 'Emp', '2020-11-14'),
(9, 'aa', '7878787899', 'ghhj', '30', 'aa@gmail.com', 'Hr', '2020-10-30'),
(10, 'bb', '0909090900', 'ghbn', '36', 'bb@gmail.com', 'Dr', '2020-11-13');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_feedback`
--

CREATE TABLE IF NOT EXISTS `tbl_feedback` (
  `fid` int(11) NOT NULL AUTO_INCREMENT,
  `empid` varchar(50) NOT NULL,
  `feedback` varchar(50) NOT NULL,
  PRIMARY KEY (`fid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_feedback`
--

INSERT INTO `tbl_feedback` (`fid`, `empid`, `feedback`) VALUES
(1, '1', 'dszfsedf');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_leave`
--

CREATE TABLE IF NOT EXISTS `tbl_leave` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `empid` int(50) NOT NULL,
  `leavetype` varchar(50) NOT NULL,
  `descr` varchar(100) NOT NULL,
  `rdate` date NOT NULL,
  `status` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_leave`
--

INSERT INTO `tbl_leave` (`id`, `empid`, `leavetype`, `descr`, `rdate`, `status`) VALUES
(1, 10, 'otherLeave', 'fvdcx', '2020-12-06', 'Rejected');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_login`
--

CREATE TABLE IF NOT EXISTS `tbl_login` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `usertype` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `tbl_login`
--

INSERT INTO `tbl_login` (`id`, `username`, `password`, `usertype`) VALUES
(1, 'admin@gmail.com', '123', 'ADMIN'),
(2, 'ramesh@gmail.com', '7238', 'Hr'),
(3, 'satheesh@gmail.com', '9554', 'Dr'),
(4, 'sonish@gmail.com', '1651', 'Dr'),
(5, 'bibi@gmail.com', '6775', 'Hr'),
(6, 'vishnu@gmail.com', '2940', 'Dr'),
(7, 'ram@gmail.com', '3035', 'Hr'),
(8, 'sudhi@gmail.com', '8934', 'Dr'),
(9, 'divya@gmail.com', '6368', 'Emp'),
(10, 'aa@gmail.com', '6633', 'Hr'),
(11, 'bb@gmail.com', '8945', 'Dr');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_payment`
--

CREATE TABLE IF NOT EXISTS `tbl_payment` (
  `pid` int(11) NOT NULL AUTO_INCREMENT,
  `prid` int(11) NOT NULL,
  `vid` int(11) NOT NULL,
  `cardnam` varchar(50) NOT NULL,
  `cardnum` varchar(50) NOT NULL,
  `amount` varchar(50) NOT NULL,
  `date` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tbl_payment`
--

INSERT INTO `tbl_payment` (`pid`, `prid`, `vid`, `cardnam`, `cardnum`, `amount`, `date`, `status`) VALUES
(2, 1, 3, '', '', '3000', '02/03/2019', 'PAYED'),
(3, 2, 4, '', '', '2000', '02/03/2019', 'PAYED'),
(4, 0, 0, 'Bibi Krishna', '8888888888888888', '9000', '20-11-05', 'Payed'),
(5, 0, 0, 'sudhii', '8888888888888888', '8000', '20-11-13', 'Payed');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_preq`
--

CREATE TABLE IF NOT EXISTS `tbl_preq` (
  `prid` int(11) NOT NULL AUTO_INCREMENT,
  `desig` varchar(50) NOT NULL,
  `empid` int(11) NOT NULL,
  `vid` int(11) NOT NULL,
  `dtneed` varchar(50) NOT NULL,
  `noday` varchar(50) NOT NULL,
  `ndriver` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  PRIMARY KEY (`prid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `tbl_preq`
--

INSERT INTO `tbl_preq` (`prid`, `desig`, `empid`, `vid`, `dtneed`, `noday`, `ndriver`, `status`) VALUES
(1, 'Hr', 1, 3, '2019-02-12', '1', '', 'Approved'),
(2, 'Dr', 2, 4, '2019-02-28', '1', '', 'Approved'),
(3, 'Hr', 4, 3, '2020-11-07', '3', '', 'Processing'),
(4, 'Dr', 7, 4, '2020-11-22', '4', '', 'Processing'),
(5, 'Hr', 9, 7, '2020-11-28', '4', 'yes', 'Requested'),
(6, 'Dr', 10, 7, '2020-11-21', '1', 'no', 'Requested');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_rentamnt`
--

CREATE TABLE IF NOT EXISTS `tbl_rentamnt` (
  `ramt_id` int(11) NOT NULL AUTO_INCREMENT,
  `vid` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  PRIMARY KEY (`ramt_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tbl_rentamnt`
--

INSERT INTO `tbl_rentamnt` (`ramt_id`, `vid`, `amount`) VALUES
(1, 3, 3000),
(2, 4, 2000),
(3, 6, 2000),
(4, 7, 5000);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_service`
--

CREATE TABLE IF NOT EXISTS `tbl_service` (
  `sid` int(11) NOT NULL AUTO_INCREMENT,
  `vid` int(11) NOT NULL,
  `km` int(11) NOT NULL,
  `serdate` varchar(50) NOT NULL,
  PRIMARY KEY (`sid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `tbl_service`
--

INSERT INTO `tbl_service` (`sid`, `vid`, `km`, `serdate`) VALUES
(1, 5, 598, '2019-05-05'),
(2, 1, 200, '2019-05-16'),
(3, 2, 100, '2019-05-16'),
(4, 3, 300, '2019-07-18'),
(5, 4, 350, '2019-07-16'),
(6, 6, 200, '2021-02-08'),
(7, 7, 78, '2021-02-21');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_vehicle`
--

CREATE TABLE IF NOT EXISTS `tbl_vehicle` (
  `vid` int(11) NOT NULL AUTO_INCREMENT,
  `catid` int(11) NOT NULL,
  `type` varchar(50) NOT NULL,
  `vno` varchar(50) NOT NULL,
  `color` varchar(50) NOT NULL,
  `fuel` varchar(50) NOT NULL,
  `km` int(11) NOT NULL,
  `onhanddate` varchar(50) NOT NULL,
  PRIMARY KEY (`vid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `tbl_vehicle`
--

INSERT INTO `tbl_vehicle` (`vid`, `catid`, `type`, `vno`, `color`, `fuel`, `km`, `onhanddate`) VALUES
(1, 1, 'Echer truck', 'KL65A4875', 'Yellow', 'Diesel', 200, '2019-01-30'),
(2, 2, 'Bharath BenZ ', 'KL65D78968', 'Green', 'Petrol', 100, '2019-02-16'),
(3, 4, 'benz', 'KL 7 B 4567', 'white', 'Petrol', 300, '2019-01-18'),
(4, 4, 'Swift', 'KL64 H 6787', 'red', 'Petrol', 350, '2019-01-16'),
(5, 3, 'Hy torus', 'KL64 H 6777', 'yellow', 'Diesel', 598, '2019-02-05'),
(6, 5, 'dfgb', 'kl 4565', 'black', 'Petrol', 200, '2020-11-08'),
(7, 4, 'hg', 'kl 78 78 ', 'yellow', 'Petrol', 78, '2020-11-21');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_work`
--

CREATE TABLE IF NOT EXISTS `tbl_work` (
  `wid` int(11) NOT NULL AUTO_INCREMENT,
  `vid` int(11) NOT NULL,
  `empid` int(11) NOT NULL,
  `wrk` varchar(50) NOT NULL,
  `place` varchar(50) NOT NULL,
  `date` varchar(50) NOT NULL,
  `estimatedKm` varchar(50) NOT NULL,
  `estimateddays` varchar(50) NOT NULL,
  `wrkload` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  PRIMARY KEY (`wid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tbl_work`
--

INSERT INTO `tbl_work` (`wid`, `vid`, `empid`, `wrk`, `place`, `date`, `estimatedKm`, `estimateddays`, `wrkload`, `status`) VALUES
(1, 1, 2, 'Go With Load', 'Kozhikode', '2019-02-11', '115', '1', 'drinking water', 'Alloted'),
(2, 6, 5, 'sdfgbh', 'tcr', '2020-11-21', '40', '5', 'nnjk', 'Alloted');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
