-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2022 at 07:35 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `donatetheblood`
--

-- --------------------------------------------------------

--
-- Table structure for table `donor`
--

CREATE TABLE `donor` (
  `id` int(15) NOT NULL,
  `name` varchar(20) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `email` varchar(40) NOT NULL,
  `city` varchar(20) NOT NULL,
  `dob` varchar(20) NOT NULL,
  `contact_no` varchar(20) NOT NULL,
  `save_life_date` varchar(20) NOT NULL,
  `password` varchar(40) NOT NULL,
  `blood_group` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donor`
--

INSERT INTO `donor` (`id`, `name`, `gender`, `email`, `city`, `dob`, `contact_no`, `save_life_date`, `password`, `blood_group`) VALUES
(1, 'Nahid Hasan', 'Male', 'nh0555024@gmail.com', 'Rajshahi', '2000-07-22', '01756867148', '0-0-0', '123456789', 'AB+'),
(2, 'abc hasan', 'Male', 'abcdef@gmail.com', 'Nawabganj', '2000-04-18', '01756867148', '0', '987654', 'B+'),
(3, 'Mohasina', 'Female', 'mohasina@gmail.com', 'Rajshahi', '2001-10-16', '01763006093', '0', '123456', 'B+'),
(4, 'Jeba', 'Female', 'jeba@gmail.com', 'Naogaon', '2000-09-18', '01234567891', '0', '123456', 'AB-'),
(5, 'Hasi', 'Female', 'hasi@gmail.com', 'Nawabganj', '1999-12-19', '01712271572', '2010-08-04', '123456', 'O-'),
(6, 'Santa Islam', 'Female', 'santa@gmail.com', 'Naogaon', '1998-05-11', '12345678901', '2022-07-19', '123456', 'O+');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `donor`
--
ALTER TABLE `donor`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `donor`
--
ALTER TABLE `donor`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
