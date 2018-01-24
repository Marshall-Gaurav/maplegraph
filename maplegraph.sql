-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 24, 2018 at 09:40 PM
-- Server version: 10.1.24-MariaDB
-- PHP Version: 7.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `maplegraph`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `pass` text NOT NULL,
  `uname` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `pass`, `uname`) VALUES
(1, 'password', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `job`
--

CREATE TABLE `job` (
  `id` int(11) NOT NULL,
  `uname` text NOT NULL,
  `cv` text NOT NULL,
  `mail` text NOT NULL,
  `linkedin` text NOT NULL,
  `jobtitle` text NOT NULL,
  `detail` text NOT NULL,
  `ndate` date NOT NULL,
  `ntime` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `job`
--

INSERT INTO `job` (`id`, `uname`, `cv`, `mail`, `linkedin`, `jobtitle`, `detail`, `ndate`, `ntime`) VALUES
(39, 'Gaurav Kumar', 'Gaurav Kumar-6289.pdf', 'code.multiosop@gmail.com', 'https://www.linkedin.com/in/gaurav-kumar-91a267157/', 'Web Developer', 'Have a decent interest in Web Development', '2018-01-24', '20:51:23'),
(40, 'test 2', 'test 2-7098.pdf', 'test@gmail.com', 'https://www.linkedin.com/in/test-2', 'UI/UX Developer', 'want to be UI/UX  developer', '2018-01-24', '20:52:32'),
(41, 'test 3', 'test 3-1218.pdf', 'test2@gmail.com', 'https://www.linkedin.com/in/test-2/', 'iOS Application Developer', 'wanna be ios developer', '2018-01-24', '20:54:24'),
(42, 'test 4', 'test 4-6781.pdf', 'test4@gmail.com', 'https://www.linkedin.com/in/test-4/', 'Android Application Developer', 'want to be an android developer', '2018-01-24', '20:55:57');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job`
--
ALTER TABLE `job`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `job`
--
ALTER TABLE `job`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
