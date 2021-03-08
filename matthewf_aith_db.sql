-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 05, 2021 at 08:30 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.3.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `matthewf_aith_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `reservations`
--

CREATE TABLE `reservations` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `age` int(11) NOT NULL,
  `role` varchar(10) NOT NULL,
  `phone` int(11) NOT NULL,
  `email` varchar(25) NOT NULL,
  `emergency_contact_name` varchar(20) NOT NULL,
  `emergency_contact_phone` int(11) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `shirt_size` varchar(10) NOT NULL,
  `saturday_event` varchar(25) NOT NULL,
  `sunday_event` varchar(25) NOT NULL,
  `special_accommodations` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `reservations`
--

INSERT INTO `reservations` (`id`, `name`, `age`, `role`, `phone`, `email`, `emergency_contact_name`, `emergency_contact_phone`, `gender`, `shirt_size`, `saturday_event`, `sunday_event`, `special_accommodations`) VALUES
(1, 'matt', 1, 'Choose rol', 0, '', '', 0, 'Select Gen', 'Select T-s', 'Select Event', 'Select Event', ''),
(2, 'thad', 1, 'Choose rol', 0, '', '', 0, 'Select Gen', 'Select T-s', 'Select Event', 'Select Event', ''),
(3, 'tom', 1, 'Choose rol', 0, '', '', 0, 'Select Gen', 'Select T-s', 'Select Event', 'Select Event', ''),
(4, 'tom', 1, 'Choose rol', 0, '', '', 0, 'Select Gen', 'Select T-s', 'Select Event', 'Select Event', ''),
(5, 'cave', 1, 'Choose rol', 0, '', '', 0, 'Select Gen', 'Select T-s', 'Select Event', 'Select Event', ''),
(6, 'ned', 5, 'Choose rol', 0, '', '', 0, 'Select Gen', 'Select T-s', 'Select Event', 'Select Event', ''),
(7, 'cave', 1, 'Choose rol', 0, '', '', 0, 'Select Gen', 'Select T-s', 'Select Event', 'Select Event', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `reservations`
--
ALTER TABLE `reservations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
