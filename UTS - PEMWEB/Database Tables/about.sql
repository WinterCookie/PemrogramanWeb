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
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `description` varchar(500) NOT NULL,
  `uploaded-at` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `description`, `uploaded-at`) VALUES
(1, 'I\'m a Computer Science student at Pembangunan Jaya University and a  passionate <strong>Front-end Developer</strong> dedicated to creating visually stunning and highly functional web interfaces. With a strong foundation in <strong>HTML, CSS, and JavaScript</strong>, I specialize in crafting seamless and interactive user experiences, leveraging modern libraries and frameworks such as <strong>React and Angular</strong>.', '2024-10-20'),
(2, 'My creative approach to design ensures that every project I undertake not only meets but <strong>exceeds user expectations</strong>, delivering an exceptional experience across all devices. I pride myself on my ability to translate complex ideas into elegant, intuitive interfaces that engage users and keep them coming back.', '2024-10-20'),
(3, 'I thrive on solving intricate challenges, constantly expanding my skill set, and staying ahead of industry trends to remain at the cutting edge of <strong>web development</strong>. Whether you\'re looking to create a unique personal brand or a robust, user-friendly platform, I\'m excited to bring your vision to life <strong>Let\'s collaborate</strong> to build your dream web project together!', '2024-10-20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
