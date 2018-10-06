-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 06, 2018 at 06:28 PM
-- Server version: 5.6.38
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `daiict`
--

-- --------------------------------------------------------

--
-- Table structure for table `adv_notice`
--

CREATE TABLE `adv_notice` (
  `an_id` int(11) NOT NULL,
  `dt` int(10) NOT NULL,
  `start_time` varchar(10) NOT NULL,
  `venue` varchar(100) NOT NULL,
  `des` varchar(50) NOT NULL,
  `vo_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `candidate`
--

CREATE TABLE `candidate` (
  `ca_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `enrol_id` varchar(15) NOT NULL,
  `gender` varchar(11) NOT NULL,
  `contact` varchar(10) NOT NULL,
  `age` varchar(15) NOT NULL,
  `addr` varchar(50) NOT NULL,
  `area` varchar(50) NOT NULL,
  `district` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `pincode` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `candidate`
--

INSERT INTO `candidate` (`ca_id`, `name`, `enrol_id`, `gender`, `contact`, `age`, `addr`, `area`, `district`, `state`, `pincode`) VALUES
(1, 'JAY', '1538850105', 'Male', '1234567890', '3-5', 'ssddsa', 'Junagadh', 'Junagadh', 'Gujarat', '362001'),
(2, 'JALADHI', '1538850173', 'Male', '1234567890', '6-10', 'asddsa', 'Navjivan', 'Ahmedabad', 'Gujarat', '380014'),
(3, 'JALADHI', '1538850205', 'Male', '1234567890', '6-10', 'asddsa', 'Navjivan', 'Ahmedabad', 'Gujarat', '380014');

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `re_id` int(11) NOT NULL,
  `dt` varchar(10) NOT NULL,
  `des` varchar(100) NOT NULL,
  `vo_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `volunteer`
--

CREATE TABLE `volunteer` (
  `vo_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(15) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `contact` varchar(10) NOT NULL,
  `addr` varchar(50) NOT NULL,
  `area` varchar(50) NOT NULL,
  `district` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL,
  `pincode` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `volunteer`
--

INSERT INTO `volunteer` (`vo_id`, `name`, `email`, `pass`, `contact`, `addr`, `area`, `district`, `state`, `pincode`) VALUES
(1, 'Pathik', 'p@g.com', '123', '8866232155', 'Ahmedabad', 'Navjivan', 'Ahmedabad', 'Gujarat', '380014'),
(4, 'Darshit', 'rupapara.darshi', '8980258949', '8980258949', 'Vikas apartment', 'Junagadh', 'Junagadh', 'Gujarat', '362001');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adv_notice`
--
ALTER TABLE `adv_notice`
  ADD PRIMARY KEY (`an_id`),
  ADD KEY `vo_id` (`vo_id`);

--
-- Indexes for table `candidate`
--
ALTER TABLE `candidate`
  ADD PRIMARY KEY (`ca_id`);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`re_id`),
  ADD KEY `vo_id` (`vo_id`);

--
-- Indexes for table `volunteer`
--
ALTER TABLE `volunteer`
  ADD PRIMARY KEY (`vo_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adv_notice`
--
ALTER TABLE `adv_notice`
  MODIFY `an_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `candidate`
--
ALTER TABLE `candidate`
  MODIFY `ca_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
  MODIFY `re_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `volunteer`
--
ALTER TABLE `volunteer`
  MODIFY `vo_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `adv_notice`
--
ALTER TABLE `adv_notice`
  ADD CONSTRAINT `adv_notice_ibfk_1` FOREIGN KEY (`vo_id`) REFERENCES `volunteer` (`vo_id`);

--
-- Constraints for table `request`
--
ALTER TABLE `request`
  ADD CONSTRAINT `request_ibfk_1` FOREIGN KEY (`vo_id`) REFERENCES `volunteer` (`vo_id`);
