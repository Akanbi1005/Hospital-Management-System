-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 20, 2019 at 12:34 PM
-- Server version: 10.1.8-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `newtest`
--

-- --------------------------------------------------------

--
-- Table structure for table `complains`
--

CREATE TABLE `complains` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(50) NOT NULL,
  `idcard` varchar(100) NOT NULL,
  `complain` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `doc`
--

CREATE TABLE `doc` (
  `id` int(11) NOT NULL,
  `idcard` text NOT NULL,
  `docreview` text NOT NULL,
  `docpre` text NOT NULL,
  `date` text NOT NULL,
  `register` text NOT NULL,
  `date_reg` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doc`
--

INSERT INTO `doc` (`id`, `idcard`, `docreview`, `docpre`, `date`, `register`, `date_reg`) VALUES
(2, 'PA123459', 'Malaria, cough, and cold', 'Vitamin C', '2018-12-16', '2018-12-09', '2019-01-30 11:31:24');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `sign_title` varchar(225) NOT NULL,
  `sign_title1` varchar(225) NOT NULL,
  `sign_header` varchar(225) NOT NULL,
  `sign_body` varchar(225) NOT NULL,
  `sign_footer_link` varchar(225) NOT NULL,
  `sign_footer_name` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `sign_title`, `sign_title1`, `sign_header`, `sign_body`, `sign_footer_link`, `sign_footer_name`) VALUES
(1, 'Log in', 'Sign Up', 'Log in Dashboard', 'Note: Here are CodeHolla We Provide you with the best of the best Technology regarding Web Content.   You Access Level Is of Topmost Priority...', '../index.php', 'Gbagada Hos');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `id` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `pnumber` varchar(20) NOT NULL,
  `email` text NOT NULL,
  `ad` text NOT NULL,
  `idcard` varchar(30) NOT NULL,
  `age` varchar(12) NOT NULL,
  `kin` text NOT NULL,
  `mname` text NOT NULL,
  `height` text NOT NULL,
  `weight` text NOT NULL,
  `sex` text NOT NULL,
  `blood` varchar(12) NOT NULL,
  `geno` varchar(15) NOT NULL,
  `date_reg` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`id`, `fname`, `pnumber`, `email`, `ad`, `idcard`, `age`, `kin`, `mname`, `height`, `weight`, `sex`, `blood`, `geno`, `date_reg`) VALUES
(16, 'Owolabi Deborah', '08109832786', 'akanbiolamilekan6@gmail.com', '12, Great Valley Avenu Oke Aro Ogun State', 'PA123459', '12Years', 'Akanbi olabisi', 'Akanbi Kudirat', '12cm', '12kg', 'Male', 'A+', 'AS', '2019-01-30 11:21:16'),
(17, 'Akanbi1111', '09021786245', 'ndipmonganiefiok@gmail.com', '118b, association way dolphin estate', 'PA34567', 'Years', 'Akanbi', 'Akanbi Kudirat', '100cm', '45kg', 'Male', 'O-', 'AS', '2019-01-30 11:21:16'),
(25, 'Olami Hollami', '08109832786', 'Akanbi@john.com\n', '12, great Value Avenue Oke aro Ogun state , great Value Avenue Oke aro Ogun state', 'PA345674', 'Years', 'akanbi', 'akanbi', '56cm', '67kg', 'Male', 'B+', 'AS', '2019-01-30 11:21:16');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `id` int(11) NOT NULL,
  `FullName` varchar(225) NOT NULL,
  `Username` varchar(225) NOT NULL,
  `idcard` varchar(100) NOT NULL,
  `Email` varchar(225) NOT NULL,
  `Password` varchar(225) NOT NULL,
  `access` tinyint(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`id`, `FullName`, `Username`, `idcard`, `Email`, `Password`, `access`) VALUES
(28, 'Akanbi Olamilekan', 'olami', '', 'akanbiolamilekan6@gmail.com', '$2y$10$Id0Nciq0nSoVrlfnBuh/ROnx9qOFksb6Mk6x5rIEStTxmvjBZfW.a', 1),
(29, 'Olami Hollami', 'pat1', '', 'Akanbi@john.com', '$2y$10$klS/FVF/D.uK18ltcXjO7ehngMplkd1LYpy0NPwC6INPiu5U7mj8.', 0),
(30, 'Olami Paul', 'PAT', 'PAT7409', 'Akanbi11@john.com', '$2y$10$Wjt90ePf4AUEYoRZ6GGivul.Ix.MUu.37HecsO5Q/IZrHgxIq.oIy', 0),
(32, 'Akanbi Olaposi', 'AkanbiOlaposi', 'PAT7406', 'olapauljohn3@gmail.com', '$2y$10$Id0Nciq0nSoVrlfnBuh/ROnx9qOFksb6Mk6x5rIEStTxmvjBZfW.a', 0),
(33, 'Paul Adefarasini', 'Paul', 'PAT8269', 'Paulme@gmail.com', '$2y$10$Id0Nciq0nSoVrlfnBuh/ROnx9qOFksb6Mk6x5rIEStTxmvjBZfW.a', 0),
(34, 'Omosewa Oluwapelumi', 'OmosewaOluwapelumi', 'PAT8630', 'Oluwapelumi@yahoo.com', '$2y$10$mqYgAEdncG5RqQxT/5.leeXYgJtrF3Epxi8H2hwjMFQHuFXymdCB2', 0);

-- --------------------------------------------------------

--
-- Table structure for table `success`
--

CREATE TABLE `success` (
  `id` int(11) NOT NULL,
  `web_name` varchar(225) NOT NULL,
  `web_header` varchar(225) NOT NULL,
  `web_body` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `success`
--

INSERT INTO `success` (`id`, `web_name`, `web_header`, `web_body`) VALUES
(1, 'Gbagada GH', 'THANK YOU', 'You are now one of us .................');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `complains`
--
ALTER TABLE `complains`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doc`
--
ALTER TABLE `doc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `idcard` (`idcard`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- Indexes for table `success`
--
ALTER TABLE `success`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `complains`
--
ALTER TABLE `complains`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `doc`
--
ALTER TABLE `doc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT for table `success`
--
ALTER TABLE `success`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
