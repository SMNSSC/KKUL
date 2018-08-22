-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 06, 2018 at 09:13 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kku_lib`
--

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE `article` (
  `A_ID` int(11) NOT NULL,
  `A_Name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `A_Post` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `A_Update` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `A_Order` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `A_Content` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `A_Description` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `A_Image` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `A_Status` varchar(1000) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `catagory`
--

CREATE TABLE `catagory` (
  `C_ID` int(11) NOT NULL,
  `C_Name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `C_Order` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `C_Status` varchar(500) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `topic`
--

CREATE TABLE `topic` (
  `T_ID` int(11) NOT NULL,
  `T_Name` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `topic_link`
--

CREATE TABLE `topic_link` (
  `TL_ID` int(11) NOT NULL,
  `T_ID` int(11) NOT NULL,
  `A_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`A_ID`);

--
-- Indexes for table `catagory`
--
ALTER TABLE `catagory`
  ADD PRIMARY KEY (`C_ID`);

--
-- Indexes for table `topic`
--
ALTER TABLE `topic`
  ADD PRIMARY KEY (`T_ID`);

--
-- Indexes for table `topic_link`
--
ALTER TABLE `topic_link`
  ADD PRIMARY KEY (`TL_ID`),
  ADD KEY `A_ID` (`A_ID`),
  ADD KEY `T_ID` (`T_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `A_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `catagory`
--
ALTER TABLE `catagory`
  MODIFY `C_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `topic`
--
ALTER TABLE `topic`
  MODIFY `T_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `topic_link`
--
ALTER TABLE `topic_link`
  MODIFY `TL_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `topic_link`
--
ALTER TABLE `topic_link`
  ADD CONSTRAINT `topic_link_ibfk_1` FOREIGN KEY (`A_ID`) REFERENCES `article` (`A_ID`),
  ADD CONSTRAINT `topic_link_ibfk_2` FOREIGN KEY (`T_ID`) REFERENCES `topic` (`T_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
