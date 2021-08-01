-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 12, 2021 at 03:31 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `testdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `continents`
--

CREATE TABLE `continents` (
  `continent_id` int(11) NOT NULL,
  `continent_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `continents`
--

INSERT INTO `continents` (`continent_id`, `continent_name`) VALUES
(5, 'AS'),
(6, 'EU'),
(7, 'OC'),
(9, 'NA'),
(10, 'AN'),
(12, 'AF'),
(15, 'SA');

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `country_id` int(11) NOT NULL,
  `country_name` varchar(100) NOT NULL,
  `continent_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`country_id`, `country_name`, `continent_name`) VALUES
(3, 'DZ', 'AF'),
(5, 'IN', 'AS'),
(6, 'GB', 'EU'),
(7, 'US', 'NA'),
(10, 'AM', 'AS'),
(11, 'GB', 'EU');

-- --------------------------------------------------------

--
-- Table structure for table `hospital`
--

CREATE TABLE `hospital` (
  `hospital_id` int(11) NOT NULL,
  `hospital_name` varchar(100) NOT NULL,
  `city_name` varchar(50) NOT NULL,
  `country_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hospital`
--

INSERT INTO `hospital` (`hospital_id`, `hospital_name`, `city_name`, `country_name`) VALUES
(1, 'Norvick Hospital', 'Kathmandu', 'NP'),
(2, 'Modern Teaching Hospital', 'Nepalgunj', 'NP'),
(3, 'ABC hospital', 'Bangalore', 'IN'),
(5, 'UTA Health Service', 'Arlington', 'US'),
(11, 'Modern Clinic', 'Newyork', 'US'),
(12, 'Hospital2', 'Paris', 'FR');

-- --------------------------------------------------------

--
-- Table structure for table `place`
--

CREATE TABLE `place` (
  `place_id` int(11) NOT NULL,
  `place_name` varchar(100) NOT NULL,
  `city_name` varchar(100) NOT NULL,
  `country_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `place`
--

INSERT INTO `place` (`place_id`, `place_name`, `city_name`, `country_name`) VALUES
(1, 'Ratnapark', 'Kathmandu', 'NP'),
(2, 'Ranipokhari', 'Kathmandu', 'NP'),
(3, 'Golden Temple', 'Bangalore', 'IN'),
(4, 'Liberty OF Statue', 'Newyork', 'US'),
(6, 'helloworld', 'Lubbock', 'US'),
(9, 'Golden Bridge', 'California', 'US');

-- --------------------------------------------------------

--
-- Table structure for table `school`
--

CREATE TABLE `school` (
  `school_id` int(11) NOT NULL,
  `school_name` varchar(50) NOT NULL,
  `city_name` varchar(50) NOT NULL,
  `country_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `school`
--

INSERT INTO `school` (`school_id`, `school_name`, `city_name`, `country_name`) VALUES
(1, 'ST Thomas HS School', 'Nepalgunj', 'NP'),
(2, 'BernHardt H.S School', 'Kathmandu', 'NP'),
(3, 'University of Texas at Arlington', 'Arlington', 'US'),
(6, 'abc123', 'Arlington', 'US');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `phone` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `country` varchar(200) NOT NULL,
  `reason_for_leaving` varchar(500) NOT NULL,
  `role` varchar(50) NOT NULL,
  `previous_country` varchar(200) NOT NULL,
  `manages_country` varchar(100) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`, `fname`, `lname`, `dob`, `phone`, `email`, `country`, `reason_for_leaving`, `role`, `previous_country`, `manages_country`, `date_created`) VALUES
(1, 'admin', 'hello', 'Admin', 'admin', '2021-04-01', '', 'admin@site.com', 'USA', 'N/A', 'admin', '0', '0', '2021-04-05 06:09:45'),
(2, 'mike', 'mike', 'Bob', 'Phoenix', '2001-04-01', '817-123-2424', 'bob@me.com', 'Nepal', 'Earthquake', 'immigrant', 'Nepal', '0', '2021-04-05 06:09:45'),
(3, 'jane', 'password', 'Jane', 'Doe', '1984-04-01', '817-333-4444', 'jane@gmail.com', 'Bhutan', 'Civil War', 'visitor', 'Bhutan', '0', '2021-04-05 06:26:25'),
(4, 'John', 'john123456', 'John', 'Doe', '2001-04-05', '123-456-7890', 'john123@yahoo.com', 'Canada', 'Cold', 'Immigrant', 'N/A', 'N/A', '2021-04-12 12:21:35');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `continents`
--
ALTER TABLE `continents`
  ADD PRIMARY KEY (`continent_id`);

--
-- Indexes for table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`country_id`);

--
-- Indexes for table `hospital`
--
ALTER TABLE `hospital`
  ADD PRIMARY KEY (`hospital_id`);

--
-- Indexes for table `place`
--
ALTER TABLE `place`
  ADD PRIMARY KEY (`place_id`);

--
-- Indexes for table `school`
--
ALTER TABLE `school`
  ADD PRIMARY KEY (`school_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `continents`
--
ALTER TABLE `continents`
  MODIFY `continent_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `country`
--
ALTER TABLE `country`
  MODIFY `country_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `hospital`
--
ALTER TABLE `hospital`
  MODIFY `hospital_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `place`
--
ALTER TABLE `place`
  MODIFY `place_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `school`
--
ALTER TABLE `school`
  MODIFY `school_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
