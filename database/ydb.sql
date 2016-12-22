-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 20, 2016 at 10:17 AM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `cp`
--

CREATE TABLE IF NOT EXISTS `cp` (
  `id_cp` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `organizationid` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cp`
--

INSERT INTO `cp` (`id_cp`, `name`, `phone`, `email`, `organizationid`) VALUES
(7, 'sad', 'asd', 'asd', 8),
(8, 'Ikhsan assdasd', '387', '8374', 8),
(9, 'ui', 'ui', 'ui', 9);

-- --------------------------------------------------------

--
-- Table structure for table `organization`
--

CREATE TABLE IF NOT EXISTS `organization` (
  `id_organization` int(11) NOT NULL,
  `nameo` varchar(100) NOT NULL,
  `programme` text,
  `topicid` int(11) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `phoneo` varchar(20) DEFAULT NULL,
  `emailo` varchar(50) DEFAULT NULL,
  `website` varchar(50) DEFAULT NULL,
  `facebook` varchar(100) DEFAULT NULL,
  `twitter` varchar(100) DEFAULT NULL,
  `instagram` varchar(100) DEFAULT NULL,
  `logo` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `organization`
--

INSERT INTO `organization` (`id_organization`, `nameo`, `programme`, `topicid`, `address`, `phoneo`, `emailo`, `website`, `facebook`, `twitter`, `instagram`, `logo`) VALUES
(8, 'assdasd', 'asdas', 11, 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', NULL),
(9, 'vbvbvb', 'vbvbvb', 11, 'dfdf', 'dfd', 'dfdf', 'df', 'df', 'df', 'df', NULL),
(10, 'sdsad', 'asd', 12, 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', 'asd', 'file_1482221235.png'),
(11, 'df', 'dfdf', 11, 'dfd', 'df', 'fd', 'df', 'df', 'df', 'df', NULL),
(12, 'ss', 'dd', 11, 'dd', 'dd', 'dd', 'dd', 'dd', 'dd', 'dd', 'file_1482218722.jpg'),
(13, 'bbb', 'bbb', 11, 'bb', 'bb', 'bbb', 'bb', 'bb', 'bb', 'bb', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `topic`
--

CREATE TABLE IF NOT EXISTS `topic` (
  `id_topic` int(11) NOT NULL,
  `topic` varchar(50) NOT NULL,
  `detail` text
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `topic`
--

INSERT INTO `topic` (`id_topic`, `topic`, `detail`) VALUES
(11, 'Topic 1', 'sdhfdjsf\r\n'),
(12, 'Topic 2 ', 'dsfjslkjf'),
(13, 'Topic 3 ', 'sdsadasdasd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cp`
--
ALTER TABLE `cp`
  ADD PRIMARY KEY (`id_cp`), ADD KEY `organizationid` (`organizationid`), ADD KEY `organizationid_2` (`organizationid`);

--
-- Indexes for table `organization`
--
ALTER TABLE `organization`
  ADD PRIMARY KEY (`id_organization`), ADD KEY `topicid` (`topicid`), ADD KEY `topicid_2` (`topicid`);

--
-- Indexes for table `topic`
--
ALTER TABLE `topic`
  ADD PRIMARY KEY (`id_topic`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cp`
--
ALTER TABLE `cp`
  MODIFY `id_cp` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `organization`
--
ALTER TABLE `organization`
  MODIFY `id_organization` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `topic`
--
ALTER TABLE `topic`
  MODIFY `id_topic` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `cp`
--
ALTER TABLE `cp`
ADD CONSTRAINT `cp_ibfk_1` FOREIGN KEY (`organizationid`) REFERENCES `organization` (`id_organization`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `organization`
--
ALTER TABLE `organization`
ADD CONSTRAINT `organization_ibfk_1` FOREIGN KEY (`topicid`) REFERENCES `topic` (`id_topic`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
