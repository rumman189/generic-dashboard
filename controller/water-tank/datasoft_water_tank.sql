-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 19, 2018 at 08:33 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `datasoft_water_tank`
--

-- --------------------------------------------------------

--
-- Table structure for table `tank_notification`
--

CREATE TABLE `tank_notification` (
  `device_id` int(3) NOT NULL,
  `notification` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tank_notification`
--

INSERT INTO `tank_notification` (`device_id`, `notification`) VALUES
(1, 'Tank Id: 1 is Empty'),
(3, 'Tank Id: 3 is Empty');

-- --------------------------------------------------------

--
-- Table structure for table `tank_status`
--

CREATE TABLE `tank_status` (
  `device_id` int(3) NOT NULL,
  `tank_status` int(1) NOT NULL,
  `owner` varchar(32) NOT NULL,
  `location` text NOT NULL,
  `expected_time_empty` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tank_status`
--

INSERT INTO `tank_status` (`device_id`, `tank_status`, `owner`, `location`, `expected_time_empty`) VALUES
(1, 0, 'Sakib', 'Rampura', 5),
(2, 1, 'Real', 'Mirpur', 3),
(3, 0, 'Hasan', 'Shamoli', 0),
(4, 1, 'Nuha', 'Dhaka', 1),
(5, 1, 'Apurba', 'Rampura', 8);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
