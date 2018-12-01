-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 26, 2016 at 04:40 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.5.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ddreorder`
--

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `order` int(5) NOT NULL DEFAULT '0',
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `image`, `order`, `created`, `modified`, `status`) VALUES
(1, 'img1.jpg', 2, '2016-07-26 00:00:00', '2016-07-26 00:00:00', 1),
(2, 'img2.jpg', 3, '2016-07-26 00:00:00', '2016-07-26 00:00:00', 1),
(3, 'img3.jpg', 7, '2016-07-26 00:00:00', '2016-07-26 00:00:00', 1),
(4, 'img4.jpg', 4, '2016-07-26 00:00:00', '2016-07-26 00:00:00', 1),
(5, 'img5.jpg', 8, '2016-07-26 00:00:00', '2016-07-26 00:00:00', 1),
(6, 'img6.jpg', 6, '2016-07-26 00:00:00', '2016-07-26 00:00:00', 1),
(7, 'img7.jpg', 1, '2016-07-26 00:00:00', '2016-07-26 00:00:00', 1),
(8, 'img8.jpg', 5, '2016-07-26 00:00:00', '2016-07-26 00:00:00', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
