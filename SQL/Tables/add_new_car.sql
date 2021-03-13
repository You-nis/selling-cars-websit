-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 06, 2021 at 05:56 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `carvana`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_new_car`
--

CREATE TABLE `add_new_car` (
  `ID` int(11) NOT NULL,
  `carName` varchar(25) NOT NULL,
  `ownerName` varchar(50) NOT NULL,
  `VIN` varchar(17) NOT NULL,
  `Model` int(4) NOT NULL,
  `manufacture` varchar(15) NOT NULL,
  `transmition` varchar(9) NOT NULL,
  `gasType` varchar(8) NOT NULL,
  `expiration` date NOT NULL,
  `phoneNumber` bigint(11) NOT NULL,
  `address` varchar(50) NOT NULL,
  `imgName` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `add_new_car`
--

INSERT INTO `add_new_car` (`ID`, `carName`, `ownerName`, `VIN`, `Model`, `manufacture`, `transmition`, `gasType`, `expiration`, `phoneNumber`, `address`, `imgName`) VALUES
(20, 'taho', 'thaer emad', 'wu986543243479662', 2019, 'chevrolet', 'automatic', 'diesel', '2021-03-29', 7905755288, 'Baghdad - Mansur', 'photo_2021-03-04_23-54-14.jpg'),
(21, 'G - Class', 'Mohammad Taraq', 'df995498965684352', 2020, 'Mercedes', 'automatic', 'hyperd', '2022-09-20', 7815357289, 'Baghdad - Alsaydea', 'g-class.jpg'),
(22, 'elentar', 'Noor hussain', 'er543215687773231', 2017, 'Elentar', 'automatic', 'electric', '2019-08-21', 7506894986, 'Basra ', 'hyundai-elantra-2524-.jpg'),
(24, 'bmw 750', 'Ahmad Hassan', 'wu986543243543565', 1998, 'BMW', 'manual', 'petrol', '2019-07-06', 7731536138, 'Karbala ', 'photo_2021-03-05_00-32-41.jpg'),
(26, 'charger', 'Younis', 'kj684556556565526', 2021, 'doge', 'automatic', 'petrol', '2021-04-29', 7731536138, 'Baghdad', 'dodge_charger.jpeg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_new_car`
--
ALTER TABLE `add_new_car`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_new_car`
--
ALTER TABLE `add_new_car`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
