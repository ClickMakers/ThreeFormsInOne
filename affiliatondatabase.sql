-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 10, 2021 at 12:02 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

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
  `Status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `affiliatondatabase`
--

INSERT INTO `affiliatondatabase` (`id`, `PostName`, `Name`, `FatherName`, `MotherName`, `SelectionBased`, `CoachName`, `address`, `City`, `State`, `PinCode`, `Profession`, `AadhaarCard`, `Qualification`, `SportsAchievements`, `PhoneNumber`, `EMAIL`, `DOB`, `Picture`, `Payment`, `TransId`, `Status`) VALUES
(1, '', 'Sandeep', NULL, NULL, NULL, NULL, ' dgfgfdgd', 'fdgdgdfg', 'fdgdgfd', 'dfgdh', 'fdgdg', '341341', 'fdfsfsd', 'fdsfsdfd', '11111', 'ssh@gmail.com', '2021-11-11', 'https://youthruralgamesindia.com/Form/Files/MyPic776326104_1636531276.jpg', 'Pending', '0123', 'inactive'),
(2, '', 'Sandeep', NULL, NULL, NULL, NULL, ' dgfgfdgd', 'fdgdgdfg', 'fdgdgfd', 'dfgdh', 'fdgdg', '341341', 'fdfsfsd', 'fdsfsdfd', '11111', 'ssh@gmail.com', '2021-11-11', 'https://youthruralgamesindia.com/Form/Files/MyPic40812282_1636531298.jpg', 'Pending', '0123', 'inactive'),
(3, '', 'Sandeep', NULL, NULL, NULL, NULL, ' SSSSSSSSSSS', 'SSSSSSSSS', 'SSSSSSSSSSS', 'SSSSSSS', 'SSSSSSSS', '2222222222', 'SADDDDDDDDDDDDD', 'ASDDDDDDDDDDDDDD', '3', 'sshSSS@gmail.com', '2021-11-12', 'https://youthruralgamesindia.com/Form/Files/MyPic39010984_1636537215.jpg', 'Pending', '0123', 'inactive'),
(4, '', 'Sandeep', NULL, NULL, NULL, NULL, ' SSSSSSSSSSS', 'SSSSSSSSS', 'SSSSSSSSSSS', 'SSSSSSS', 'SSSSSSSS', '2222222222', 'SADDDDDDDDDDDDD', 'ASDDDDDDDDDDDDDD', '3', 'sshSSS@gmail.com', '2021-11-12', 'https://youthruralgamesindia.com/Form/Files/MyPic384307607_1636537215.jpg', 'Pending', '0123', 'inactive'),
(5, '', 'sandeeeeeeep', NULL, NULL, NULL, NULL, ' SAAAAAAAAA', 'SSSSSSSSSSSSSS', 'SSSSSSSSSS', 'SSSSSSS', 'DDDDDDDDDDDD', '1', 'DDDDDDDDDDDD', 'DDDDDDDDDDDDDDD', '2', 'sshSSDDDDDD@gmail.com', '2021-12-12', 'https://youthruralgamesindia.com/Form/Files/MyPic635980032_1636537274.jpg', 'Pending', '0123', 'inactive'),
(6, '', 'sandeeeeeeep', NULL, NULL, NULL, NULL, ' SAAAAAAAAA', 'SSSSSSSSSSSSSS', 'SSSSSSSSSS', 'SSSSSSS', 'DDDDDDDDDDDD', '1', 'DDDDDDDDDDDD', 'DDDDDDDDDDDDDDD', '2', 'sshSSDDDDDD@gmail.com', '2021-12-12', 'https://youthruralgamesindia.com/Form/Files/MyPic248224471_1636537274.jpg', 'Pending', '0123', 'inactive'),
(7, 'Sandeep s', 'Affiliaton', NULL, NULL, NULL, NULL, ' sssssssssssss', 'ssssssssssssss', 'sssssssssssssss', 'ssssssssssssss', 'xxxxxxxxxxxxx', '3', 'xxxcccc', 'xcxcxxxxxxxxxxxxx', '10', 'sshSSSaaaaaaaaaaaa@gmail.com', '2021-11-28', 'https://youthruralgamesindia.com/Form/Files/MyPic748986754_1636537732.jpg', 'Pending', '0123', 'inactive'),
(8, 'Affiliaton', '', NULL, NULL, NULL, NULL, ' ', '', '', '', '', '', '', '', '', '', '', 'https://youthruralgamesindia.com/Form/Files/MyPic180390761_1636540184.jpg', 'Pending', '0123', 'inactive'),
(9, 'Affiliaton', '', NULL, NULL, NULL, NULL, ' ', '', '', '', '', '', '', '', '', '', '', 'https://youthruralgamesindia.com/Form/Files/MyPic56554476_1636540184.jpg', 'Pending', '0123', 'inactive'),
(10, '', '', '', '', '', '', ' ', '', '', '', 'Profession', '', '', '', '', '', '', 'https://youthruralgamesindia.com/Form/Files/MyPic833736086_1636540236.jpg', 'Pending', '0123', 'inactive'),
(11, 'Membership', '', NULL, NULL, NULL, NULL, ' ', '', '', '', 'Profession', 'AadhaarCard', '', '', '', '', '', 'https://youthruralgamesindia.com/Form/Files/MyPic679824738_1636540310.jpg', 'Pending', '0123', 'inactive'),
(12, '', '', '', '', '', '', ' ', '', '', '', 'Profession', '', '', '', '', '', '', 'https://youthruralgamesindia.com/Form/Files/MyPic892076590_1636540319.jpg', 'Pending', '0123', 'inactive'),
(13, 'Player', '', '', '', '', '', ' ', '', '', '', 'Profession', '', '', '', '', '', '', 'https://youthruralgamesindia.com/Form/Files/MyPic308554324_1636540402.jpg', 'Pending', '0123', 'inactive'),
(14, 'Affiliaton', 'Sandeep', NULL, NULL, NULL, NULL, ' ', '', '', '', 'SDSDSD', '4', '', '', '', 'sshAFFI@gmail.com', '', 'https://youthruralgamesindia.com/Form/Files/MyPic953645110_1636540448.jpg', 'Pending', '0123', 'inactive'),
(15, 'Membership', '', NULL, NULL, NULL, NULL, ' SSS', 'SSSS', '', 'SASD', 'Profession', 'AadhaarCard', '4', 'SSDSD', '', '', '', 'https://youthruralgamesindia.com/Form/Files/MyPic586855553_1636540489.jpg', 'Pending', '0123', 'inactive'),
(16, 'Membership', '', NULL, NULL, NULL, NULL, ' SSS', 'SSSS', '', 'SASD', 'Profession', 'AadhaarCard', '4', 'SSDSD', '', '', '', 'https://youthruralgamesindia.com/Form/Files/MyPic819052034_1636540919.jpg', 'Pending', '0123', 'inactive'),
(17, 'Membership', 'SandeepS', NULL, NULL, NULL, NULL, ' SSSSSSSS', 'fdgdgdfg', '', 'DDDDDDD', 'Profession', 'AadhaarCard', '4', 'DDDDD', '', 'sshAFFDI@gmail.com', '', 'https://youthruralgamesindia.com/Form/Files/MyPic855079320_1636540966.jpg', 'Pending', '0123', 'inactive'),
(18, 'Membership', 'Sandeep', NULL, NULL, NULL, NULL, ' SSSSSSSSS', 'DDDDDDD', '', 'DDDDDD', 'Profession', 'AadhaarCard', 'DDDDDDDDDD', 'DDDDDDDDDD', '', 'sshSSSaaaaaaaaaaaa@gmail.com', '', 'https://youthruralgamesindia.com/Form/Files/MyPic696979037_1636541457.jpg', 'Pending', '0123', 'inactive'),
(19, 'Membership', 'SSSSSSSSSSS', NULL, NULL, NULL, NULL, ' SSSSSSS', 'SSSSSSS', 'SSSSSS', 'SSSSS', 'Profession', 'AadhaarCard', 'SSSSSS', 'SSSSSSS', '3', 'sshAFFISSSS@gmail.com', '', 'https://youthruralgamesindia.com/Form/Files/MyPic790987695_1636541656.jpg', 'Pending', '0123', 'inactive'),
(20, 'Player', '', 'SSSSSSS', 'DDDDDDDDDDDD', 'SSSSSSS', 'DDDDDDDDDD', ' ', '', 'DDDDDDDD', '', 'Profession', '', '', '', '3', '', '2021-11-28', 'https://youthruralgamesindia.com/Form/Files/MyPic929001288_1636541704.jpg', 'Pending', '0123', 'inactive'),
(21, 'Player', 'ssss', 'ssss', 'ddddd', 'sssss', 'dddddddsd', 'ddddddd', '', 'ssssss', '', 'Profession', '3', 'Qualification', '', '4', '', '2021-11-10', 'https://youthruralgamesindia.com/Form/Files/MyPic955251063_1636542112.jpg', 'Pending', '0123', 'inactive');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
