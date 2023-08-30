-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 08, 2023 at 04:59 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_iis`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblassistance_solicitor`
--

CREATE TABLE `tblassistance_solicitor` (
  `s_id` int(255) NOT NULL,
  `solicitor_id` int(255) NOT NULL,
  `solicitor_name` text NOT NULL,
  `age` int(22) NOT NULL,
  `civilstatus` text NOT NULL,
  `sex` text NOT NULL,
  `contactno` int(11) NOT NULL,
  `precinctno` int(55) NOT NULL,
  `address` varchar(255) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbluserprofile`
--

CREATE TABLE `tbluserprofile` (
  `id` int(32) NOT NULL,
  `accstatus` text NOT NULL,
  `fullname` text NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(322) NOT NULL,
  `sex` text NOT NULL,
  `designation` text NOT NULL,
  `department` text NOT NULL,
  `location` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbluserprofile`
--

INSERT INTO `tbluserprofile` (`id`, `accstatus`, `fullname`, `username`, `password`, `sex`, `designation`, `department`, `location`) VALUES
(9, 'ACTIVE', 'ARABELLE MARIE CAMAT', 'ARAMARIE', '$2y$10$0tJv9.q185Zzt2AZDuutBOmE32S4VPnEkmrco7VMYSRA4T7DYSV42', 'MALE', 'ADMIN', 'Information Technology Development Office', 'CALOOCAN CITY HALL'),
(15, 'ACTIVE', 'ADMIN', 'ADMIN', '$2y$10$mS19nSFUZ5SyPMzWYMkzR.UqxI0s8BEZzudCNYwdgLPZCqRkgdqiG', 'MALE', 'ADMIN', 'Office of the City Mayor', 'CALOOCAN CITY HALL'),
(16, 'ACTIVE', 'ENCODER', 'ENCODER', '$2y$10$NRYKUjuyToLnSVu7ILILZ.tpXIP18NhaW3fxtTAGc/mnJj.iXRoja', 'MALE', 'ENCODER', 'Office of the City Mayor', 'CALOOCAN CITY HALL'),
(17, 'ACTIVE', 'INTERVIEWER', 'INTERVIEWER', '$2y$10$ZS9W4NPlnEIo6QrA3n6f1.xdmQe3aYWiS9I0aSunFI//qzC3j1IUK', 'MALE', 'INTERVIEWER', 'City Social Welfare Development Department', 'CALOOCAN CITY HALL'),
(19, 'ACTIVE', 'VERIFIER', 'VERIFIER', '$2y$10$wLrKA6ZUV1R1wnKbng1M4eBFc3XxAD3Ck/lYpYMjjwG3vV.QrgPhm', 'MALE', 'VERIFIER', 'Office of the City Mayor', 'CALOOCAN CITY HALL');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblassistance_solicitor`
--
ALTER TABLE `tblassistance_solicitor`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `tbluserprofile`
--
ALTER TABLE `tbluserprofile`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblassistance_solicitor`
--
ALTER TABLE `tblassistance_solicitor`
  MODIFY `s_id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbluserprofile`
--
ALTER TABLE `tbluserprofile`
  MODIFY `id` int(32) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
