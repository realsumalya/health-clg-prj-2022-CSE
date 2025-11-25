-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 01, 2023 at 06:19 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bloom`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', 'admin'),
('root', 'root');

-- --------------------------------------------------------

--
-- Table structure for table `doctor_info_tbl`
--

CREATE TABLE `doctor_info_tbl` (
  `id` int(20) NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `regis` varchar(15) DEFAULT NULL,
  `qualifi` varchar(50) DEFAULT NULL,
  `specifi` varchar(30) DEFAULT NULL,
  `fees` varchar(10) DEFAULT NULL,
  `schedule` varchar(30) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `picture` varchar(255) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `regdate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctor_info_tbl`
--

INSERT INTO `doctor_info_tbl` (`id`, `name`, `email`, `phone`, `regis`, `qualifi`, `specifi`, `fees`, `schedule`, `gender`, `picture`, `password`, `regdate`) VALUES
(1, 'ritika', 'majhirittika.mimi@gmail.com', '+917044182131', '88768/698/', 'bbse', 'ent', '500$', '10.00am-12.00pm', 'female', NULL, '12345', '2022-03-24 11:27:12'),
(3, 'robin', 'sb@gmail.com', '2565452102', '220df', 'mbbs', 'ent', '200$', '12.00Pm-02.00pm', 'male', 'IMG_20211030_005303 (1).jpg', '123', '2022-03-30 08:10:47'),
(4, 'Dr. James Brodwin', 'james@healthbloom.com', '1254652021', 'jsbn1254', 'FRCS', 'cardiologist', '1000', '02.00Pm-04.00pm', 'male', 'download.png', 'jb123', '2022-04-26 15:29:13'),
(5, 'Dr. Natasha Kumar', 'natasha@healthbloom.com', '1125496320', 'nakr123', 'FRCS', 'Neurologist', '800', '02.00Pm-04.00pm', 'female', 'download.jfif', 'natasha123', '2022-04-26 15:31:12'),
(6, 'Dr. Peter nichole', 'peter@healthbloom.com', '1254872030', 'pr1230', 'FRCS', 'cardiologist', '1000', '02.00Pm-04.00pm', 'male', 'download.png', 'PETER123', '2022-04-26 15:32:36'),
(7, 'Dr. Alexy romanov', 'alexi@healthbloom.com', '1235412013', 'alex0213', 'FRCS', 'Neurologist', '800', '10.00am-12.00pm', 'male', 'download.png', 'ALEXI123', '2022-04-26 16:03:21');

-- --------------------------------------------------------

--
-- Table structure for table `patient_info_tbl`
--

CREATE TABLE `patient_info_tbl` (
  `user_id` int(20) NOT NULL,
  `name` varchar(60) DEFAULT NULL,
  `mobile_no` varchar(15) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `aadhar_number` varchar(20) DEFAULT NULL,
  `age` varchar(15) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `general_info` varchar(100) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL,
  `picture` varchar(255) DEFAULT NULL,
  `reg_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patient_info_tbl`
--

INSERT INTO `patient_info_tbl` (`user_id`, `name`, `mobile_no`, `email`, `aadhar_number`, `age`, `address`, `general_info`, `password`, `picture`, `reg_date`) VALUES
(1, 'sumalya', '9330896242', 'sumalyabanerjee2@gmail.com', '1111222233334444', '1998-02-04', 'tarakeswar', 'i am okay. ', 'sb123', 'IMG_20211030_005303.jpg', '2022-02-12 14:31:12'),
(2, 'Arnab', '9856231441', 'arnab@gmail.com', '4454121414141214', '1994-11-12', 'Tarakeswar', 'no issus', '123', 'jpg.png', '2022-02-12 15:13:39');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `doctor_info_tbl`
--
ALTER TABLE `doctor_info_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patient_info_tbl`
--
ALTER TABLE `patient_info_tbl`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `doctor_info_tbl`
--
ALTER TABLE `doctor_info_tbl`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `patient_info_tbl`
--
ALTER TABLE `patient_info_tbl`
  MODIFY `user_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
