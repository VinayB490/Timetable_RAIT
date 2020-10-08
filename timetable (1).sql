-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 20, 2019 at 08:05 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `timetable`
--

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `cid` varchar(20) NOT NULL,
  `cname` varchar(50) NOT NULL,
  `csname` varchar(10) NOT NULL,
  `cdept` varchar(10) NOT NULL,
  `csem` int(11) NOT NULL,
  `ctype` varchar(10) NOT NULL,
  `ctime` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`cid`, `cname`, `csname`, `cdept`, `csem`, `ctype`, `ctime`) VALUES
('1', 'java program', 'jpl', 'IT', 4, 'Lab', 20),
('12', 'Data Structure', 'DSA', 'IT', 3, 'Theory', 20),
('3', 'python', 'py', 'CE', 4, 'Lab', 20);

-- --------------------------------------------------------

--
-- Table structure for table `loads`
--

CREATE TABLE `loads` (
  `ldept` varchar(10) NOT NULL,
  `lcourse` varchar(50) NOT NULL,
  `ltname` varchar(50) NOT NULL,
  `ltype` varchar(10) NOT NULL,
  `lclass` varchar(5) NOT NULL,
  `ldiv` varchar(2) NOT NULL,
  `lbatch` int(11) NOT NULL,
  `ltime` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `loads`
--

INSERT INTO `loads` (`ldept`, `lcourse`, `ltname`, `ltype`, `lclass`, `ldiv`, `lbatch`, `ltime`) VALUES
('IT', 'java', 'asdf', 'Theory', 'TE', 'A', 0, 5),
('IT', 'python', 'Ani', 'Theory', 'SE', 'B', 0, 5),
('IT', 'java program', 'kshipra', 'Theory', 'SE', 'A', 0, 5),
('IT', 'python', 'Ani', 'Theory', 'SE', 'B', 0, 5);

-- --------------------------------------------------------

--
-- Table structure for table `resource`
--

CREATE TABLE `resource` (
  `rno` varchar(10) NOT NULL,
  `rtype` varchar(10) NOT NULL,
  `rinfo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `resource`
--

INSERT INTO `resource` (`rno`, `rtype`, `rinfo`) VALUES
('001', 'Room', ''),
('002', 'Room', ''),
('003', 'Room', ''),
('011', 'Lab', 'ed lab'),
('322', 'Room', ''),
('391', 'Lab', ''),
('423', 'Room', ''),
('600', 'Room', 'not available'),
('605', 'Room', ''),
('610', 'Room', ''),
('611', 'Room', ''),
('612', 'Room', ''),
('616A', 'Room', ''),
('616b ', 'Lab', ''),
('619', 'Room', '');

-- --------------------------------------------------------

--
-- Table structure for table `tform`
--

CREATE TABLE `tform` (
  `tsdrn` varchar(10) NOT NULL,
  `tinit` varchar(50) NOT NULL,
  `tname` varchar(50) NOT NULL,
  `tdept` varchar(10) NOT NULL,
  `tshift` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tform`
--

INSERT INTO `tform` (`tsdrn`, `tinit`, `tname`, `tdept`, `tshift`) VALUES
('1', '/asd', 'asdf', 'IT', 'PM'),
('122', 'asd', 'kshipra', 'CE', 'PM'),
('123', 'ani', 'Anirruha', 'CE', 'PM'),
('1234', 'aha', 'ahaha', 'IT', 'PM');

-- --------------------------------------------------------

--
-- Table structure for table `ttables`
--

CREATE TABLE `ttables` (
  `tbvar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ttables`
--

INSERT INTO `ttables` (`tbvar`) VALUES
('FEAIT0830'),
('FEAIT08:30'),
('FEBIT0830'),
('FECIT0830'),
('FECIT08:30'),
('FEDIT0830'),
('we'),
('ww ef'),
('ghjgjhk\r\nxhxfghj\r\ng');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `resource`
--
ALTER TABLE `resource`
  ADD PRIMARY KEY (`rno`);

--
-- Indexes for table `tform`
--
ALTER TABLE `tform`
  ADD PRIMARY KEY (`tsdrn`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
