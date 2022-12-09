-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 01, 2022 at 08:20 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `classroombooking`
--

-- --------------------------------------------------------

--
-- Table structure for table `clbooking`
--

CREATE TABLE `clbooking` (
  `id` int(11) NOT NULL,
  `club_name` text NOT NULL,
  `e_mail` text NOT NULL,
  `phone` varchar(20) NOT NULL,
  `a_student` varchar(200) NOT NULL,
  `check_in` text NOT NULL,
  `select_room` varchar(11) DEFAULT NULL,
  `comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `clbooking`
--

INSERT INTO `clbooking` (`id`, `club_name`, `e_mail`, `phone`, `a_student`, `check_in`, `select_room`, `comment`) VALUES
(6, 'sdfgs', 'eee@gnyyy', '0987654321', '34', '2022-12-09', 'lab-room', 'dfg'),
(7, 'wwww', 'farzana6004@gmail.com', '01303316004', '21', '2022-12-13', 'lab-room', 'ddddd'),
(8, 'wwww', 'farzana6004@gmail.com', '01303316004', '7', '2022-12-16', 'lab-room', 'wert'),
(9, '2w', 'farzana6004@gmail.com', '01303316004', '16', '2022-12-15', 'class-room', 'ddddddddddddddddddddd           ddddddddddddddddddddddddddd         ffffffffffffffffffffffffeeeeee4qrafcdr bewef grf gr efjen qefh efeifh nefewfb wrfouwrjf bwrfjwr fnwrjfh nwrflwrjhn fwljfgnw rljfhdn cj caJHFNjafd b;fjd bfwjfw bfljwr f');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clbooking`
--
ALTER TABLE `clbooking`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clbooking`
--
ALTER TABLE `clbooking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
