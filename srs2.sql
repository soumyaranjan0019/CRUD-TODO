-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 04, 2024 at 03:31 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `newcrud`
--

-- --------------------------------------------------------

--
-- Table structure for table `srs2`
--

CREATE TABLE `srs2` (
  `id` int(20) NOT NULL,
  `full_name` varchar(200) NOT NULL,
  `age` varchar(200) NOT NULL,
  `email_id` varchar(200) NOT NULL,
  `pass_word` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `srs2`
--

INSERT INTO `srs2` (`id`, `full_name`, `age`, `email_id`, `pass_word`) VALUES
(15, 'Soumya Ranjan', '12', '12soumyaranjan0019@gmail.com', '202cb962ac59075b964b07152d234b70'),
(16, 'QWEEREREF DFCSEDFCSD', '90', 'dsfgdg23243424324@gmail.com', '202cb962ac59075b964b07152d234b70'),
(17, 'SRS', '12', 'soumyaranjan0019@gmail.com', 'fd2a389677248c3d839524df77a9e73c'),
(18, 'Stark', '15', 'stark@gmail.com', '46f61ffbe2ea4a9a816195416e87d548'),
(19, 'Subhrajit Bindhani', '26', 'subhra@gmail.com', '202cb962ac59075b964b07152d234b70'),
(20, 'soumya', '26', '123soumyaranjan0019@gmail.com', '123'),
(21, 'soumya', '9', '9soumyaranjan0019@gmail.com', '123'),
(22, 'Soumya Ranjan', '26', '11soumyaranjan0019@gmail.com', '123'),
(23, 'Soumya Ranjan', '26', '111soumyaranjan0019@gmail.com', '999'),
(24, 'Soumya Ranjan', '26', '99soumyaranjan0019@gmail.com', '202cb962ac59075b964b07152d234b70');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `srs2`
--
ALTER TABLE `srs2`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `srs2`
--
ALTER TABLE `srs2`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;