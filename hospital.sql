-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 20, 2019 at 12:32 PM
-- Server version: 10.1.8-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hospital`
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

--
-- Dumping data for table `complains`
--

INSERT INTO `complains` (`id`, `name`, `email`, `idcard`, `complain`) VALUES
(1, 'Omosewa pelumi', 'Oluwapelumi@yahoo.com', 'PAT8630', 'i was unable to reach the time for the drugs, i was wondering if there is a way i can still meet up with the time stipulated for the complete use of the drugs ');

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
  `register` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doc`
--

INSERT INTO `doc` (`id`, `idcard`, `docreview`, `docpre`, `date`, `register`) VALUES
(1, 'PA123456', 'Malaria', 'Panadol', '2018-12-11', '2018-12-04'),
(2, 'PA345674', 'Malaria', 'Vitamin C', '2018-12-16', '2018-12-09'),
(3, 'PA7406', 'sick ', 'sick', '2019-01-12', '2019-01-05');

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
  `geno` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`id`, `fname`, `pnumber`, `email`, `ad`, `idcard`, `age`, `kin`, `mname`, `height`, `weight`, `sex`, `blood`, `geno`) VALUES
(10, 'Akanbi', '0810122327', 'joshuastefan11@gmail.com', '118b, association way dolphin estate', 'PA123456', '12Years', 'olabisi', 'Kudirat', '121cm', '45kg', 'Female', 'A+', 'AA'),
(16, 'Owolabi Deborah', '08109832786', 'akanbiolamilekan6@gmail.com', '12, Great Valley Avenu Oke Aro Ogun State', 'PA123459', '12Years', 'Akanbi olabisi', 'Akanbi Kudirat', '12cm', 'kg', 'Male', 'O+', 'AS'),
(24, 'Olami Hollami', '12349878765', 'markhelen192@gmail.com', '12, law close four Square street', 'PA44225', '12Years', 'Olugbade', 'Helen', '122cm', '32kg', 'Male', 'A+', 'SS'),
(25, 'Olami Hollami', '08109832786', 'Akanbi@john.com', '12, great Value Avenue Oke aro Ogun state , great Value Avenue Oke aro Ogun state', 'PA40467', 'Years', 'akanbi', 'akanbi', '56cm', '67kg', 'Male', 'B+', 'AS'),
(28, 'Oludare', '0801932765', 'estherhelen129@gmail.com', '12, law close four Square street ', 'PAT7445', '23 Years', 'Akanbi ', 'Olamilekan', '123cm', '43kg', 'Male', 'O-', 'AA'),
(29, 'Omosewa pelumi', '08123778765', 'Oluwapelumi@yahoo.com', '12, law close four Square street ', 'PAT8630', '34 Years', 'Akanbi ', 'Olamilekan', '124cm', '56kg', 'Female', 'AB-', 'SS'),
(30, 'Paul Adefarasini', '09023418045', 'Paulme@gmail.com', '12, law close four Square street ', 'PAT8269', '34 Years', 'Akanbi ', 'Olamilekan', '344cm', '123kg', 'Male', 'B+', 'AS'),
(31, 'Akanbi Olaposi', '08109374512', 'olapauljohn3@gmail.com', '12, law close four Square street ', 'PA7406', '45 Years', 'Akanbi ', 'Olamilekan', '345cm', '55kg', 'Male', 'O-', 'AA');

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
(34, 'Omosewa Oluwapelumi', 'Omosewa', 'PAT8630', 'Oluwapelumi@yahoo.com', '$2y$10$mqYgAEdncG5RqQxT/5.leeXYgJtrF3Epxi8H2hwjMFQHuFXymdCB2', 0),
(35, 'Oludare Oludare', 'OludareOludare', 'PAT7445', 'estherhelen129@gmail.com', '$2y$10$pflEWpj.FXxNdF9rm7Kf2e9MJ6svJzXqXVNsPAUx1TFXRTljARB1q', 0);

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
(1, 'Gbagada GH', 'Thank You ', 'You are now one of us .................');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `doc`
--
ALTER TABLE `doc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `success`
--
ALTER TABLE `success`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
