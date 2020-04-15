-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 15, 2020 at 10:58 AM
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
-- Database: `clientmanagment`
--

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` int(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `client_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(13) NOT NULL,
  `task` varchar(255) NOT NULL,
  `rate` int(255) NOT NULL,
  `deliverydate` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `image`, `client_name`, `email`, `phone`, `task`, `rate`, `deliverydate`) VALUES
(8, '', 'Jeremy', 'jermy@yourmail.com', '01713289555', 'WordPress', 500, '2020-04-24'),
(9, '', 'Shone', 'shone@gmail.com', '01713289118', 'HTML', 80, '2020-04-09'),
(10, '', 'Adrian ', 'adrin#facebook.com', '02136692', 'Laravel', 80, '2020-04-10'),
(11, '', 'Rico', 'rico@gylist.com', '36988556', 'VUE.js', 98, '2020-04-17'),
(12, '', 'Kashi', 'kashi@yourwensite.com', '01234568', 'Protfolio ', 375, '2020-04-14'),
(13, '', 'Rob', 'rob@website.com', '138874555', 'Logo ', 50, '2020-04-18'),
(14, '', 'Anik', 'anik@youremail.com', '0236987', 'SEO', 99, '2020-04-24'),
(16, '', 'Vitto', 'vitto@gmai.com', '01713289118', 'HTML', 500, '2020-04-17'),
(19, 'image/storage/VitalyNZ.png', 'WILL', 'will@hello.com', '1225545', 'writer', 50, '2020-04-25'),
(20, 'image/storage/mir.jpg', 'MIR MONOARUL ALAM', 'ANIK_CSE@LIVE.COM', '01713289118', 'PHOTOSHOP', 40, '2020-04-25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
