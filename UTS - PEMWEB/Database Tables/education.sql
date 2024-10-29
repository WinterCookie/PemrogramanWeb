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
-- Table structure for table `education`
--

CREATE TABLE `education` (
  `id` int(11) NOT NULL,
  `images` varchar(255) NOT NULL,
  `title` varchar(50) NOT NULL,
  `description` varchar(550) NOT NULL,
  `uploaded-at` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `education`
--

INSERT INTO `education` (`id`, `images`, `title`, `description`, `uploaded-at`) VALUES
(1, 'uploads/images/SMAN_9_Tangerang.jpeg', 'SMAN 9 TANGERANG', 'SMAN 9 Kota Tangerang is one of the leading schools in the area, providing excellent education in both academic and extracurricular activities. During my time there, I participated in various science-related projects and events, and also i graduated in 2022.', '2024-10-25'),
(2, 'uploads/images/UPJ.jpg', 'PEMBANGUNAN JAYA UNIVERSITY', 'Pembangunan Jaya University offers a comprehensive program in Informatics, focusing on developing skills in programming, data science, and technology innovation. As a student here, I have deepened my knowledge in computer science and software engineering.', '2024-10-25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `education`
--
ALTER TABLE `education`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `education`
--
ALTER TABLE `education`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
