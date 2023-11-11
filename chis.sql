-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 11, 2023 at 03:36 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chis`
--

-- --------------------------------------------------------

--
-- Table structure for table `mh_worker`
--

CREATE TABLE `mh_worker` (
  `mhw_id` int(5) NOT NULL,
  `mhw_fname` varchar(20) NOT NULL,
  `mhw_minit` varchar(2) NOT NULL,
  `mhw_lname` varchar(20) NOT NULL,
  `mhw_bdate` date NOT NULL,
  `mhw_gender` varchar(10) NOT NULL,
  `mhw_position` varchar(50) NOT NULL,
  `mhw_username` varchar(20) NOT NULL,
  `mhw_password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `mh_worker`
--

INSERT INTO `mh_worker` (`mhw_id`, `mhw_fname`, `mhw_minit`, `mhw_lname`, `mhw_bdate`, `mhw_gender`, `mhw_position`, `mhw_username`, `mhw_password`) VALUES
(1, 'Marie', 'L', 'Santos', '1999-11-04', 'Female', 'Nurse', '@marieLsantos11', 'sample'),
(2, 'Leo', 'V', 'Baltazar', '1997-07-03', 'Male', 'Nurse', '@LeoB', 'samplepass');

-- --------------------------------------------------------

--
-- Table structure for table `resident_list`
--

CREATE TABLE `resident_list` (
  `res_id` int(1) NOT NULL,
  `res_firstname` varchar(50) NOT NULL,
  `res_middlename` varchar(50) NOT NULL,
  `res_lastname` varchar(50) NOT NULL,
  `date_of_birth` date NOT NULL,
  `sex` varchar(10) NOT NULL,
  `civil_status` varchar(50) NOT NULL,
  `date_added` date NOT NULL,
  `res_barangay` varchar(20) NOT NULL,
  `age` int(255) NOT NULL,
  `worker_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `resident_list`
--

INSERT INTO `resident_list` (`res_id`, `res_firstname`, `res_middlename`, `res_lastname`, `date_of_birth`, `sex`, `civil_status`, `date_added`, `res_barangay`, `age`, `worker_id`) VALUES
(1, 'Juan', 'None', 'Dela Cruz', '0000-00-00', '', '', '2022-11-01', 'Asdum', 22, 111),
(2, 'Maria', 'Leonora', 'Teresa', '0000-00-00', '', '', '2021-07-07', 'San Jose', 32, 112),
(4, 'Wyndel', 'sdasdsa', 'Albos', '0000-00-00', '', '', '2023-11-10', 'asdum', 22, 123),
(5, 'kim', 'magana', 'calvario', '0000-00-00', '', '', '2023-11-23', 'san jose', 21, 134),
(6, 'sample', 's', 'ssss', '0000-00-00', '', '', '2023-11-01', 'Select Barangay', 3, 433),
(7, 'apple', 'magana', 'calvario', '2023-11-07', 'Female', 'Single', '2023-11-10', 'Fabrica', 22, 555),
(8, 'John Erwin', 'Sayno', 'Albos', '2023-11-07', 'Male', 'Single', '2023-11-10', 'Cabanbanan', 20, 534),
(9, 'Camilla', 'g', 'Binas', '2023-11-13', 'Female', 'Single', '2023-11-10', 'Iraya Sur', 20, 123),
(10, 'sample', 's', 'ssss', '2023-11-13', 'Male', 'Married', '2023-11-10', 'Poblacion Distric II', 35, 777),
(11, '123', 'dasd', 'dasdsa', '2023-11-15', 'Female', 'Single', '2023-11-11', 'Cabanbanan', 12, 123),
(12, '111', 'ddsds', 'fsfs', '2023-12-06', 'Female', 'Married', '2023-11-11', 'Iraya Sur', 34, 433),
(13, 'alexandra', 'Lorica ', 'Monteagudo', '2023-11-08', 'Female', 'Single', '2023-11-11', 'Iraya Sur', 20, 123),
(14, '444', 'dad', 'dasdas', '2023-11-06', 'Female', 'Married', '2023-11-11', 'Iraya Sur', 20, 666),
(15, '445', 'magana', 'calvario', '2023-11-02', 'Female', 'Divorced', '2023-11-11', 'Poblacion Distric II', 34, 345),
(16, '900', 'dada', 'dsad', '2023-11-15', 'Female', 'Divorced', '2023-11-11', 'Man-ogob', 45, 88),
(17, '123', 'g', 'Binas', '2023-11-15', 'Female', 'Divorced', '2023-11-11', 'Fabrica', 34, 55),
(18, '333', 'dsad', 'dsad', '0000-00-00', '', 'Married', '2023-11-11', 'Cabanbanan', 45, 666),
(19, '333', '', '', '0000-00-00', '', 'Civil Status', '2023-11-11', 'Select Barangay', 0, 0),
(20, '123', '', '', '0000-00-00', '', 'Civil Status', '2023-11-11', 'Select Barangay', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_login`
--

CREATE TABLE `user_login` (
  `AccountID` int(3) NOT NULL,
  `Username` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `UserType` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_login`
--

INSERT INTO `user_login` (`AccountID`, `Username`, `Password`, `UserType`) VALUES
(111, 'samplemhw', '123', 'mhw'),
(112, 'samplebhw', '111', 'bhw');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mh_worker`
--
ALTER TABLE `mh_worker`
  ADD PRIMARY KEY (`mhw_id`);

--
-- Indexes for table `resident_list`
--
ALTER TABLE `resident_list`
  ADD PRIMARY KEY (`res_id`);

--
-- Indexes for table `user_login`
--
ALTER TABLE `user_login`
  ADD PRIMARY KEY (`AccountID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mh_worker`
--
ALTER TABLE `mh_worker`
  MODIFY `mhw_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `resident_list`
--
ALTER TABLE `resident_list`
  MODIFY `res_id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
