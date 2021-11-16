-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 16, 2021 at 07:46 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `yrgsf`
--

-- --------------------------------------------------------

--
-- Table structure for table `affiliatondatabase`
--

CREATE TABLE `affiliatondatabase` (
  `id` int(11) NOT NULL,
  `PostName` text NOT NULL,
  `Name` text NOT NULL,
  `FatherName` text DEFAULT NULL,
  `MotherName` text DEFAULT NULL,
  `SelectionBased` text DEFAULT NULL,
  `CoachName` text DEFAULT NULL,
  `address` text NOT NULL,
  `City` text NOT NULL,
  `State` text NOT NULL,
  `PinCode` text NOT NULL,
  `Profession` text DEFAULT NULL,
  `AadhaarCard` text DEFAULT NULL,
  `Qualification` text NOT NULL,
  `SportsAchievements` text NOT NULL,
  `PhoneNumber` text NOT NULL,
  `EMAIL` text NOT NULL,
  `DOB` text NOT NULL,
  `Picture` text NOT NULL,
  `Payment` text NOT NULL,
  `TransId` text NOT NULL,
  `Status` text NOT NULL,
  `PaymentPrice` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `affiliatondatabase`
--

INSERT INTO `affiliatondatabase` (`id`, `PostName`, `Name`, `FatherName`, `MotherName`, `SelectionBased`, `CoachName`, `address`, `City`, `State`, `PinCode`, `Profession`, `AadhaarCard`, `Qualification`, `SportsAchievements`, `PhoneNumber`, `EMAIL`, `DOB`, `Picture`, `Payment`, `TransId`, `Status`, `PaymentPrice`) VALUES
(24, 'Membership', 'ss', 'sss', 'ss', 'ddd', 'SSSSSSSS', 'Mansa', 'Mansa', 'Punjab', '151505', 'DDDDDDDDDDDD', '3', 'SSSSSSS', 'SDDDDDDDDDDDD', '09779599156', 'info@clickmaker.in', '2021-11-13', 'https://youthruralgamesindia.com/Form/Files/MyPic133419151_1637045043.jpg', 'Pending', '0123', 'inactive', 5100),
(25, 'Affiliaton', 'clickmakers', 'Kuldeep', 'Kuldeep', 'Kuldeep', 'Kuldeep', 'Mansa', 'Mansa', 'Punjab', '151505', 'Kuldeep', '5', 'Kuldeep', 'Kuldeep', '09779599156', 'info@clickmaker.in', '2021-11-10', 'https://youthruralgamesindia.com/Form/Files/MyPic683704154_1637045093.jpg', 'Pending', '0123', 'inactive', 7100),
(26, 'Player', 'clickmakers', 'Kuldeep', 'Kuldeep', 'Kuldeep', 'Kuldeep', 'Mansa', 'Mansa', 'Punjab', '151505', 'Kuldeep', '6', 'Kuldeep', 'Kuldeep', '09779599156', 'info@clickmaker.in', '2021-11-18', 'https://youthruralgamesindia.com/Form/Files/MyPic728198958_1637045151.jpg', 'Pending', '0123', 'inactive', 1200);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `affiliatondatabase`
--
ALTER TABLE `affiliatondatabase`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `affiliatondatabase`
--
ALTER TABLE `affiliatondatabase`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
