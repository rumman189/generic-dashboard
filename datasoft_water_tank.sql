-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 20, 2018 at 08:55 AM
-- Server version: 10.1.33-MariaDB
-- PHP Version: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
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

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `id` int(11) NOT NULL,
  `com_name` varchar(500) NOT NULL,
  `com_add` varchar(500) NOT NULL,
  `com_ph` varchar(500) NOT NULL,
  `com_email` varchar(500) NOT NULL,
  `username` varchar(500) NOT NULL,
  `user_add` varchar(500) NOT NULL,
  `user_email` varchar(500) NOT NULL,
  `des_title` varchar(500) NOT NULL,
  `des` varchar(500) NOT NULL,
  `unit_price` varchar(500) NOT NULL,
  `quantity` varchar(400) NOT NULL,
  `total` varchar(500) NOT NULL,
  `subtotal` varchar(500) NOT NULL,
  `tax` varchar(500) NOT NULL,
  `grand` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`id`, `com_name`, `com_add`, `com_ph`, `com_email`, `username`, `user_add`, `user_email`, `des_title`, `des`, `unit_price`, `quantity`, `total`, `subtotal`, `tax`, `grand`) VALUES
(1, 'Dma-Bd', 'Rupayan Shelford,Shymoli,Dhaka', '01934566789', 'dma-bd@gmail.com', 'real ', 'adabor,Dhaka', 'real.l@gmail.com', 'Water Bill', 'Water Bill-january 2018', '40', '30', '1200', '1200', '300', '1500');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `firstname` varchar(500) NOT NULL,
  `lastname` varchar(500) NOT NULL,
  `address` varchar(500) NOT NULL,
  `city` varchar(500) NOT NULL,
  `country` varchar(500) NOT NULL,
  `postal` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `firstname`, `lastname`, `address`, `city`, `country`, `postal`) VALUES
(1, 'hasan', 'rumman3000@gmail.com', 'hasan', 'mahmud', 'nikunja', 'dhaka', 'bd', 'dhaka'),
(2, 'hasan', 'rumman3000@gmail.com', 'hasan', 'mahmud', 'nikunja', 'dhaka', 'bd', 'dhaka'),
(3, 'sa', 'rumman189@gmail.com', 'er', 'e', 'nikunja', 'dhaka', 'bd', 'dhaka'),
(4, 'su', 'mahmud3000@live.com', 'er', 'e', 'nikunja', 'dhaka', 'bd', 'dhaka'),
(5, 'df', 'rumman189@gmail.com', 'er', 'e', 'nikunja', 'dhaka', 'bd', 'dhaka'),
(6, 'rumman', 'rumman3000@gmail.com', 'hasan', 'mahmud', 'nikunja', 'dhaka', 'bd', 'dhaka'),
(7, 'real', 'rumman189@gmail.com', 'er', 'e', 'nikunja', 'dhaka', 'bd', 'dhaka');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `test`
--
ALTER TABLE `test`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
