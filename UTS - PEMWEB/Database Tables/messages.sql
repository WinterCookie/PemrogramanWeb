-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3400
-- Generation Time: Oct 28, 2024 at 06:24 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portfolio`
--

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `name`, `email`, `message`) VALUES
(4, 'sbdbsdb3', 'DAAREL@snd', 'sndnndf'),
(5, 'edbf', 'a@bsdb', 'sdbfbdsbf'),
(6, 'edbf', 'a@bsdb', 'sdbfbdsbf'),
(7, 'ahshhs@737', 'daarel@gmail.com', 'bsbxfbdshb'),
(8, 'ahshhs@737', 'daarel@gmail.com', 'bsbxfbdshb'),
(9, 'shdhfh', 'shdh@sdhf', 'shdhfhds'),
(10, 'shdhfh', 'shdh@sdhf', 'shdhfhds'),
(11, 'shdhfh122', 'shdh@sdhf', 'shdhfhds'),
(12, 'Dsjdjf', 'daarelsafafatillah@gmail.com', 'ahshdhshsjdjf'),
(13, 'BuMaya', 'daarel.safafatillah@student.upj.ac.id', 'sdfbaudsfkahskf'),
(14, 'BuMaya', 'daarel.safafatillah@student.upj.ac.id', 'sdfbaudsfkahskf'),
(15, 'asjdfhhas', 'adadfd@hshdf.com', 'ajdsfhasfdh'),
(16, 'asjdfhhas', 'adadfd@hshdf.com', 'ajdsfhasfdh');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
