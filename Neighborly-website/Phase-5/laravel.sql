-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 26, 2021 at 11:20 PM
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
-- Database: `laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `continents`
--

CREATE TABLE `continents` (
  `id` int(11) NOT NULL,
  `continent_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `continents`
--

INSERT INTO `continents` (`id`, `continent_name`) VALUES
(6, 'EU'),
(7, 'OC'),
(9, 'NA'),
(22, 'SA'),
(24, 'AF'),
(38, 'AS'),
(41, 'OC');

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` int(11) NOT NULL,
  `country_name` varchar(100) NOT NULL,
  `continent_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `country_name`, `continent_name`) VALUES
(5, 'CK', 'OC'),
(6, 'GB', 'EU'),
(7, 'US', 'NA'),
(10, 'AM', 'AS'),
(11, 'GB', 'EU'),
(22, 'ZW', 'AF'),
(24, 'AF', 'AS');

-- --------------------------------------------------------

--
-- Table structure for table `hospitals`
--

CREATE TABLE `hospitals` (
  `id` int(11) NOT NULL,
  `hospital_name` varchar(100) NOT NULL,
  `city_name` varchar(50) NOT NULL,
  `country_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hospitals`
--

INSERT INTO `hospitals` (`id`, `hospital_name`, `city_name`, `country_name`) VALUES
(1, 'Norvick Hospital', 'Kathmandu', 'NP'),
(2, 'Modern Teaching Hospital', 'Nepalgunj', 'NP'),
(3, 'ABC hospital', 'Bangalore', 'IN'),
(5, 'UTA Health Service', 'Arlington', 'US'),
(11, 'Modern Clinic', 'Newyork', 'US'),
(12, 'Hospital2', 'Paris', 'FR');

-- --------------------------------------------------------

--
-- Table structure for table `places`
--

CREATE TABLE `places` (
  `id` int(11) NOT NULL,
  `place_name` varchar(100) NOT NULL,
  `city_name` varchar(100) NOT NULL,
  `country_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `places`
--

INSERT INTO `places` (`id`, `place_name`, `city_name`, `country_name`) VALUES
(1, 'Ratnapark', 'Kathmandu', 'BD'),
(2, 'Ranipokhari', 'Kathmandu', 'NP'),
(3, 'Golden Temple', 'Bangalore', 'IN'),
(4, 'Liberty OF Statue', 'Newyork', 'US'),
(6, 'helloworld', 'Lubbock', 'US'),
(9, 'Golden Bridge', 'California', 'US'),
(11, 'Ratnapark', 'Nepalgunj', 'BS');

-- --------------------------------------------------------

--
-- Table structure for table `schools`
--

CREATE TABLE `schools` (
  `id` int(11) NOT NULL,
  `school_name` varchar(50) NOT NULL,
  `city_name` varchar(50) NOT NULL,
  `country_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `schools`
--

INSERT INTO `schools` (`id`, `school_name`, `city_name`, `country_name`) VALUES
(1, 'ST Thomas HS School', 'Nepalgunj', 'NP'),
(2, 'BernHardt H.S School', 'Kathmandu', 'NP'),
(3, 'University of Texas at Arlington', 'Arlington', 'US'),
(14, 'abc123', 'Newyork', 'AS');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
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
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `fname`, `lname`, `dob`, `phone`, `email`, `country`, `reason_for_leaving`, `role`, `previous_country`, `manages_country`, `date_created`) VALUES
(2, 'mike', 'mike', 'Bob', 'Phoenix', '2001-04-01', '817-123-2424', 'bob@me.com', 'Nepal', 'Earthquake', 'immigrant', 'Nepal', '0', '2021-04-05 11:09:45'),
(3, 'jane', 'password', 'Jane', 'Doe', '1984-04-01', '817-333-4444', 'jane@gmail.com', 'Bhutan', 'Civil War', 'immigrant', 'Bhutan', '0', '2021-04-05 11:26:25'),
(4, 'John', 'john123456', 'John', 'Doe', '2001-04-05', '123-456-7890', 'john123@yahoo.com', 'Canada', 'Cold', 'Immigrant', 'N/A', 'N/A', '2021-04-12 17:21:35'),
(5, 'josh', 'josh', 'Josh', 'Phoenix', '1994-04-01', '817-123-2121', 'josh123@.com', 'India', 'JOB', 'immigrant', 'India', '0', '2021-04-05 16:11:45'),
(6, 'jane1', 'password', 'Jane1', 'Doe1', '1984-04-11', '817-333-1111', 'jane1@gmail.com', 'Andorra', 'Local Gang War', 'immigrant', 'Andorra', '0', '2021-04-12 16:26:25'),
(7, 'jane2', 'password', 'Jane2', 'Doe2', '1985-04-01', '817-333-4444', 'jane2@gmail.com', 'Colombia', 'Cartel War', 'immigrant', 'Colombia', '0', '2021-04-11 16:26:25'),
(8, 'jane', 'password', 'Jane3', 'Doe3', '1986-04-01', '817-333-1234', 'jane3@gmail.com', 'Bhutan', 'Civil War', 'immigrant', 'Bhutan', '0', '2021-04-11 16:26:25'),
(9, 'jane4', 'password', 'Jane4', 'Doe', '1989-04-01', '817-333-4444', 'jane4@gmail.com', 'Mexico', 'Cartel War', 'immigrant', 'Mexico', '0', '2021-04-13 16:26:25'),
(10, 'jane5', 'password', 'Jane5', 'Doe', '1990-04-01', '817-333-4444', 'jane5@gmail.com', 'Mexico', 'Cartel War', 'immigrant', 'Mexico', '0', '2021-04-14 16:26:25'),
(11, 'jane6', 'password', 'Jane6', 'Doe', '1991-04-01', '817-333-4446', 'jane6@gmail.com', 'Bhutan', 'Civil War', 'immigrant', 'Bhutan', '0', '2021-04-11 16:36:25'),
(12, 'jane7', 'password', 'Jane7', 'Doe', '1984-04-01', '817-333-4447', 'jane7@gmail.com', 'Bhutan', 'Civil War', 'immigrant', 'Bhutan', '0', '2021-04-11 16:46:25'),
(13, 'jane8', 'password', 'Jane8', 'Doe', '1992-04-01', '817-333-4449', 'jane8@gmail.com', 'Mexico', 'Gang Violence', 'immigrant', 'Mexico', '0', '2021-04-14 16:36:25'),
(14, 'jane9', 'password', 'Jane9', 'Doe', '1974-04-01', '817-333-4411', 'jane9@gmail.com', 'Bhutan', 'Civil War', 'immigrant', 'Bhutan', '0', '2021-04-11 16:16:25'),
(15, 'jane15', 'password', 'Jane15', 'Doe', '1984-04-15', '817-333-4415', 'jane15@gmail.com', 'Chile', 'Home Violence', 'immigrant', 'Chile', '0', '2021-04-21 16:26:25'),
(16, 'jane16', 'password', 'Jane16', 'Doe', '1984-04-01', '817-333-4416', 'jane16@gmail.com', 'Nepal', 'Nepalese Civil War', 'immigrant', 'Nepal', '0', '2021-04-13 16:36:25'),
(17, 'jane17', 'password', 'Jane17', 'Doe', '1984-04-01', '817-333-4417', 'jane17@gmail.com', 'Nepal', 'Civil War', 'immigrant', 'Nepal', '0', '2021-04-13 15:26:25'),
(18, 'jane18', 'password', 'Jane18', 'Doe', '1984-04-01', '817-333-4444', 'jane18@gmail.com', 'Nepal', 'Civil War', 'immigrant', 'Nepal', '0', '2021-04-13 14:26:25'),
(19, 'jane19', 'password', 'Jane19', 'Doe', '1984-04-01', '817-333-4419', 'jane19@gmail.com', 'Bhutan', 'Civil War', 'immigrant', 'Bhutan', '0', '2021-04-22 16:26:25'),
(20, 'jane20', 'password', 'Jane20', 'Doe', '1984-04-20', '817-333-4420', 'jane20@gmail.com', 'Colombia', 'Local Gang War', 'immigrant', 'Colombia', '0', '2021-04-20 16:26:25'),
(21, 'jane21', 'password', 'Jane21', 'Doe', '1984-04-21', '817-333-4421', 'jane21@gmail.com', 'Bhutan', 'Civil War', 'visitor', 'Bhutan', '0', '2021-04-11 16:26:25'),
(22, 'jane22', 'password', 'Jane22', 'Doe', '1984-04-22', '817-333-4422', 'jane22@gmail.com', 'Bhutan', 'Civil War', 'visitor', 'Bhutan', '0', '2021-04-11 13:26:25'),
(23, 'John23', 'john123456', 'John23', 'Doe', '2001-04-05', '123-456-7890', 'john123@yahoo.com', 'Canada', 'Cold', 'visitor', 'Canada', '0', '2021-04-13 22:21:35');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `continents`
--
ALTER TABLE `continents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hospitals`
--
ALTER TABLE `hospitals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `places`
--
ALTER TABLE `places`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `schools`
--
ALTER TABLE `schools`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `continents`
--
ALTER TABLE `continents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `hospitals`
--
ALTER TABLE `hospitals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `places`
--
ALTER TABLE `places`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `schools`
--
ALTER TABLE `schools`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
